/**
 * Created by redrock on 2015/3/17.
 */
/*多图上传*/
/*
 define(['jquery','webuploader'], function($,WebUploader){
 $(function(){
 //uploadify插件配置
 */
/*$('.js-upload_photo').uploadify({
 'swf'      : 'public/complexPlugin/uploadify/uploadify.swf',
 'uploader' : 'public/complexPlugin/uploadify/uploadify.php',
 'cancelImg'      : 'public/complexPlugin/uploadify/uploadify-cancel.png',
 'multi' : true,
 'removeCompleted' : false,
 'onDestory' : function(file) {
 alert('aweg');
 }
 });*/
/*


 //检测是否多图上传
 $('.js-photo_form .js-check-isAblum').on('click', check);

 */
/*事件处理函数*/
/*

 function check(ev){
 var $self = $(this);
 if( $self[0].checked ){
 $('.js-photo_name')[0].disabled = true;
 }else{
 $('.js-photo_name')[0].disabled = false;
 }
 }
 });
 //});*/
/**/
require([ "jquery", "webuploader" ], function($, WebUploader) {
    function check(ev) {
        var $self = $(this);
        $self[0].checked ? $(".js-photo_name")[0].disabled = !0 : $(".js-photo_name")[0].disabled = !1;
    }
    // 当domReady的时候开始初始化
    console.log(WebUploader), //检测是否多图上传
    $(".js-form_photo .js-check-isAblum").on("click", check), $(function() {
        // 当有文件添加进来时执行，负责view的创建
        function addFile(file) {
            var $li = $('<li id="' + file.id + '"><p class="title">' + file.name + '</p><p class="imgWrap"></p><p class="progress"><span></span></p></li>'), $btns = $('<div class="file-panel"><span class="cancel">删除</span><span class="rotateRight">向右旋转</span><span class="rotateLeft">向左旋转</span></div>').appendTo($li), $prgress = $li.find("p.progress span"), $wrap = $li.find("p.imgWrap"), $info = $('<p class="error"></p>'), showError = function(code) {
                switch (code) {
                  case "exceed_size":
                    text = "文件大小超出";
                    break;

                  case "interrupt":
                    text = "上传暂停";
                    break;

                  default:
                    text = "上传失败，请重试";
                }
                $info.text(text).appendTo($li);
            };
            "invalid" === file.getStatus() ? showError(file.statusText) : (// @todo lazyload
            $wrap.text("预览中"), uploader.makeThumb(file, function(error, src) {
                if (error) return void $wrap.text("不能预览");
                var img = $('<img src="' + src + '">');
                $wrap.empty().append(img);
            }, thumbnailWidth, thumbnailHeight), percentages[file.id] = [ file.size, 0 ], file.rotation = 0), 
            file.on("statuschange", function(cur, prev) {
                "progress" === prev ? $prgress.hide().width(0) : "queued" === prev && ($li.off("mouseenter mouseleave"), 
                $btns.remove()), // 成功
                "error" === cur || "invalid" === cur ? (console.log(file.statusText), showError(file.statusText), 
                percentages[file.id][1] = 1) : "interrupt" === cur ? showError("interrupt") : "queued" === cur ? percentages[file.id][1] = 0 : "progress" === cur ? ($info.remove(), 
                $prgress.css("display", "block")) : "complete" === cur && $li.append('<span class="success"></span>'), 
                $li.removeClass("state-" + prev).addClass("state-" + cur);
            }), $li.on("mouseenter", function() {
                $btns.stop().animate({
                    height: 30
                });
            }), $li.on("mouseleave", function() {
                $btns.stop().animate({
                    height: 0
                });
            }), $btns.on("click", "span", function() {
                var deg, index = $(this).index();
                switch (index) {
                  case 0:
                    return void uploader.removeFile(file);

                  case 1:
                    file.rotation += 90;
                    break;

                  case 2:
                    file.rotation -= 90;
                }
                supportTransition ? (deg = "rotate(" + file.rotation + "deg)", $wrap.css({
                    "-webkit-transform": deg,
                    "-mos-transform": deg,
                    "-o-transform": deg,
                    transform: deg
                })) : $wrap.css("filter", "progid:DXImageTransform.Microsoft.BasicImage(rotation=" + ~~(file.rotation / 90 % 4 + 4) % 4 + ")");
            }), $li.appendTo($queue);
        }
        // 负责view的销毁
        function removeFile(file) {
            var $li = $("#" + file.id);
            delete percentages[file.id], updateTotalProgress(), $li.off().find(".file-panel").off().end().remove();
        }
        function updateTotalProgress() {
            var percent, loaded = 0, total = 0, spans = $progress.children();
            $.each(percentages, function(k, v) {
                total += v[0], loaded += v[0] * v[1];
            }), percent = total ? loaded / total : 0, spans.eq(0).text(Math.round(100 * percent) + "%"), 
            spans.eq(1).css("width", Math.round(100 * percent) + "%"), updateStatus();
        }
        function updateStatus() {
            var stats, text = "";
            "ready" === state ? text = "选中" + fileCount + "张图片，共" + WebUploader.formatSize(fileSize) + "。" : "confirm" === state ? (stats = uploader.getStats(), 
            stats.uploadFailNum && (text = "已成功上传" + stats.successNum + "张照片至XX相册，" + stats.uploadFailNum + '张照片上传失败，<a class="retry" href="#">重新上传</a>失败图片或<a class="ignore" href="#">忽略</a>')) : (stats = uploader.getStats(), 
            text = "共" + fileCount + "张（" + WebUploader.formatSize(fileSize) + "），已上传" + stats.successNum + "张", 
            stats.uploadFailNum && (text += "，失败" + stats.uploadFailNum + "张")), $info.html(text);
        }
        function setState(val) {
            var stats;
            if (val !== state) {
                switch ($upload.removeClass("state-" + state), $upload.addClass("state-" + val), 
                state = val) {
                  case "pedding":
                    $placeHolder.removeClass("element-invisible"), $queue.hide(), $statusBar.addClass("element-invisible"), 
                    uploader.refresh();
                    break;

                  case "ready":
                    $placeHolder.addClass("element-invisible"), $("#filePicker2").removeClass("element-invisible"), 
                    $queue.show(), $statusBar.removeClass("element-invisible"), uploader.refresh();
                    break;

                  case "uploading":
                    $("#filePicker2").addClass("element-invisible"), $progress.show(), $upload.text("暂停上传");
                    break;

                  case "paused":
                    $progress.show(), $upload.text("继续上传");
                    break;

                  case "confirm":
                    if ($progress.hide(), $upload.text("开始上传").addClass("disabled"), stats = uploader.getStats(), 
                    stats.successNum && !stats.uploadFailNum) return void setState("finish");
                    break;

                  case "finish":
                    if (stats = uploader.getStats(), stats.successNum) {
                        alert("上传成功");
                        var f = $(".js-form_photo")[0];
                        if (f.ablum_name.value.length < 1) return $(f.ablum_name).css("border-color", "red"), 
                        alert("请填写标题!!!!"), !1;
                        if ($(f.ablum_name).css("border-color", "#ccc"), f.introduce.value.length < 1) return $(f.introduce).css("border-color", "red"), 
                        alert("请填写简介！！！"), !1;
                        $(f.introduce).css("border-color", "#ccc"), $(".js-form_photo")[0].submit();
                    } else // 没有成功的图片，重设
                    state = "done", location.reload();
                }
                updateStatus();
            }
        }
        var // WebUploader实例
        uploader, $wrap = $("#uploader"), // 图片容器
        $queue = $('<ul class="filelist"></ul>').appendTo($wrap.find(".queueList")), // 状态栏，包括进度和控制按钮
        $statusBar = $wrap.find(".statusBar"), // 文件总体选择信息。
        $info = $statusBar.find(".info"), // 上传按钮
        $upload = $wrap.find(".uploadBtn"), // 没选择文件之前的内容。
        $placeHolder = $wrap.find(".placeholder"), $progress = $statusBar.find(".progress").hide(), // 添加的文件数量
        fileCount = 0, // 添加的文件总大小
        fileSize = 0, // 优化retina, 在retina下这个值是2
        ratio = window.devicePixelRatio || 1, // 缩略图大小
        thumbnailWidth = 110 * ratio, thumbnailHeight = 110 * ratio, // 可能有pedding, ready, uploading, confirm, done.
        state = "pedding", // 所有文件的进度信息，key为file id
        percentages = {}, supportTransition = function() {
            var s = document.createElement("p").style, r = "transition" in s || "WebkitTransition" in s || "MozTransition" in s || "msTransition" in s || "OTransition" in s;
            return s = null, r;
        }();
        // 实例化
        uploader = WebUploader.create({
            pick: function() {
                return {
                    id: "#filePicker",
                    label: "点击选择图片"
                };
            }(),
            dnd: "#dndArea",
            paste: "#uploader",
            swf: "../public/complexPlugin/webuploader/dist/Uploader.swf",
            chunked: !0,
            // runtimeOrder: 'flash',
            sendAsBinary: !0,
            server: "public/complexPlugin/webuploader/server/fileupload.php",
            // server: 'http://liaoxuezhi.fe.baidu.com/webupload/fileupload.php',
            // server: 'http://www.2betop.net/fileupload.php',
            fileNumLimit: 300,
            fileSizeLimit: 209715200,
            // 200 M
            fileSingleSizeLimit: 52428800
        }), // 添加“添加文件”的按钮，
        uploader.addButton({
            id: "#filePicker2",
            label: "继续添加"
        }), uploader.onUploadProgress = function(file, percentage) {
            var $li = $("#" + file.id), $percent = $li.find(".progress span");
            $percent.css("width", 100 * percentage + "%"), percentages[file.id][1] = percentage, 
            updateTotalProgress();
        }, uploader.onFileQueued = function(file) {
            fileCount++, fileSize += file.size, 1 === fileCount && ($placeHolder.addClass("element-invisible"), 
            $statusBar.show()), addFile(file), setState("ready"), updateTotalProgress();
        }, uploader.onFileDequeued = function(file) {
            fileCount--, fileSize -= file.size, fileCount || setState("pedding"), removeFile(file), 
            updateTotalProgress();
        }, uploader.on("all", function(type) {
            switch (type) {
              case "uploadFinished":
                setState("confirm");
                break;

              case "startUpload":
                setState("uploading");
                break;

              case "stopUpload":
                setState("paused");
            }
        }), uploader.onError = function(code) {
            alert("Eroor: " + code);
        }, $upload.on("click", function() {
            var f = $(".js-form_photo")[0];
            return f.ablum_name.value.length < 1 ? ($(f.ablum_name).css("border-color", "red"), 
            alert("请填写标题!!!!"), !1) : ($(f.ablum_name).css("border-color", "#ccc"), f.introduce.value.length < 1 ? ($(f.introduce).css("border-color", "red"), 
            alert("请填写简介！！！"), !1) : ($(f.introduce).css("border-color", "#ccc"), $(this).hasClass("disabled") ? !1 : void ("ready" === state ? uploader.upload() : "paused" === state ? uploader.upload() : "uploading" === state && uploader.stop())));
        }), $info.on("click", ".retry", function() {
            uploader.retry();
        }), $info.on("click", ".ignore", function() {
            alert("todo");
        }), $upload.addClass("state-" + state), updateTotalProgress();
    });
});