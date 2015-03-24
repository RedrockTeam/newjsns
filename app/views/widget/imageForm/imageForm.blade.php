{{--如果原来已经上传过图片， 将显示已经上传的图片, 如果没有上传过， 则显示上传的表单--}}
@if($imgExists){{--剪切--}}
    @if($imgExists) <div class="u-show_thumb_img"> <img src="{{$imgSrc}}" alt=""/></div> @endif
    <div class="u-show-img">
        <img src="{{$imgSrc}}" alt="{{$imgSrc}}" class="u-crop-img js-crop-img"/>
    </div>
    <div class="">
        <form action="" method="POST" class="m-crop_form js-crop_form">
                <input type="hidden" name="x1" id="x1"/> {{--起始横坐标--}}
                <input type="hidden" name="y1" id="y1"/> {{--起始纵坐标--}}
                <input type="hidden" name="width" id="w"/> {{--裁剪图片的宽度--}}
                <input type="hidden" name="height" id="h"/> {{--裁剪图片的高度--}}
        </form>
    </div>
@else   {{--上传--}}
    <form action="" method="POST" class="m-upload_form js-upload_form" enctype="multipart/form-data">
        <input type="file" accept="image/gif, image/jpeg" name="upload" value=""/>
    </form>
@endif

@section("css")
    @parent
    {{HTML::style("public/css/widget/imageForm/imageForm.css")}}
@stop