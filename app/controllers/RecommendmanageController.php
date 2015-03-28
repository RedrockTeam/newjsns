<?php
/**
 * Class RecommendmanageController
 * @Author Lich
 * 读书影逝管理模块
 */
class RecommendmanageController extends BaseController{
    public function index(){
        $data['list'] = Recommend::orderBy('id', 'desc')->paginate(20);
        $data['nav'] = Navigation::where('father_id', '=', '3')->get();
        return View::make('admin.recommend')->with('data', $data);
    }

    //读书影逝管理
    public function manage(){
        $input = Input::all();
        $status = $input['oprator_id'];
        $id = $input['id'];
        Recommend::where('id', '=', $id)->update(array('status' => $status));
        Event::fire('Recommendmanage.manage', array($status,$id));
        return $data = '200';
    }
    
    //添加
    public function add(){
        $input = Input::all();
        $file = Input::file('cover');
            $validator = Validator::make(
                array('photo' => $file),
                array('photo' => 'required|image|between:1,10240')
            );
            if ($validator->fails()) {
                return Redirect::back()->withInput()->withErrors($validator);
            }
            $type = $file->getClientOriginalExtension();
            $name = 'public/uploads/'.md5(microtime()).'.'.$type;
            $img = Image::make($file);
            $newimg = $img->resize(110, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newimg->save($name);
            $newimg->destroy();

        $data = array(
            'type_id' => $input['type_id'],
            'title' => $input['title'],
            'cover_url' => $name,
            'star' => '0',
            'works_introduce' => $input['works_introduce'],
            'author' => $input['author'],
            'price' => $input['price'],
            'publish' => $input['publish'],
            'original_title' => $input['original_title'],
            'interpreter' => $input['interpreter'],
            'time' => $input['time'],
            'page_num' => $input['page_num'],
            'comment_num' => '0',
            'love_num' => '0',
            'status' => '1',
        );
        Recommend::create($data);
        return Redirect::back();
    }
}
