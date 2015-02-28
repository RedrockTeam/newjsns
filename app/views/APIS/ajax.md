---------------------------ajax 接口部分--------------------------


数据交换格式:
{
    method : 'GET/POST',   //请求方式
    url : ""               //请求路径
    input : {              //请求到服务端的数据 格式都为json
    }
    true_oputput : {             //正确输出
        header{                       //请求头
            http_statusCode  : 200    //返回http状态码都为200
        }
        data : {                      //接收的数据
            success : true/false      //返回布尔值直接量
            data : json/string/boolean/number/...            //返回的数据 正确输出
        }
    }  or
    false_oputput : {      //错误输出
            header{                       //请求头
                http_statusCode  : 200    //返回http状态码都为200
            }
            data : {                      //接收的数据
                success : false          //返回布尔值直接量
                errMsg :                //错误信息
            }
    }

}


--------------------------爱拍图片加载-----------------------------------
method ："GET"
url : "/get_photos"
input : none
true_output : {         //正确输出
    success : true      //请求成功 为布尔值
    isDrain : true/false  //是否全部图片已经加载完毕
    data : [             //格式：数组
        {                //格式：json
            "img_type" : "single/album" //图片类型 single为单张图片 album为相册类型
            "img_id"   : ""             //图片的id 作为后来获取相册图片用
            "img_src" : ""              //图片/相册封面 路径
            "img_desc" : ""             //图片/相册 描述
            "img_name" : ""             //图片/相册 名称
            "love_count" : 1            //图片/相册（总） 点赞数
            "comment_count" : 1         //图片/相册(总) 评论数
        }
    ]
}
false_output : {       //错误输出
    success : false
    errMsg : ""       //错误信息
}

-----------------------------爱拍 相册 图片获取-----------------------------------------
method : "POST"
url : "get_album"
input : {               //传到后端的数据
    "album_id" : ""    //相册的id
}
true_output : [        //错误输出
    {
        "img_src" => ""        //图片路径
        "img_desc" => ""       //图片描述
        "img_name" => ""       //图片名称
        "love_count" => 20     //图片点赞数
        "comment_count" => 20  //图片评论数
    },
    {
    }
]
false_output : {       //错误输出
    success : false
    errMsg : ""
}


--------------------------------点赞------------------------------------
