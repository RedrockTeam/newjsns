/**
 * Created by redrock on 2015/3/13.
 */
define([ "jquery", "port" ], function($) {
    $(function() {
        function openBox($openEle, $openBox) {
            $openEle.on("click", function() {
                var $self = $(this);
                $self.hasClass("s-active") || ($(".u-tabs li").removeClass("s-active"), $(".u-register,.u-login").css("display", "none"), 
                $self.addClass("s-active"), $openBox.css("display", "block"));
            });
        }
        openBox($(".js-open-register"), $(".u-register")), openBox($(".js-open-login"), $(".u-login"));
    });
});