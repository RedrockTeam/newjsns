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
    success : true      //请求成功
    isDrain : true/false  //是否全部图片已经加载完毕
    data : [             //格式：数组
        {                //格式：json
            "img_src" : ['', '']        //图片路径   格式: 数组 （个数依是否为组图而定）
            "img_name" : ""             //图片名称
            "love_count" : 1            //图片点赞数
            "comment_count" : 1         //图片评论数
        }
    ]
}
false_output : {       //错误输出
    success : false
    errMsg : ""
}


--------------------------------点赞------------------------------------
