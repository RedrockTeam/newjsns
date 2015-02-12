<?php
/**
 * 文学模块控制器
 * User: Lich
 * Date: 2015/2/2
 * Time: 20:09
 */

class LiteratureController extends BaseController{

    //发表文章
    public function createpassage(){
        if (verify_permission()){
            $data = Input::all();
            $literature = Literature::create($data);
            $insertedId = $literature->id;
            $type_id = $data['type_id'];
            $user_work = array(
                'type_id' => $type_id,
                'work_id' => $insertedId,
            );
            Mywork::create($user_work);
            return Redirect::back();
        }
        else
        {
            return Response::make('你的权限不够',403);//以后改Response::view
        }
    }

    public function test(){

//        $currentRoute = Route::currentRouteName();
//        echo $currentRoute;
    }


}