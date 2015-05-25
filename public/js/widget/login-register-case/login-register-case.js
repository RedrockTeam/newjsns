/**
 * Created by redrock on 2015/3/13.
 */
define([ "jquery", "port" ], function($, port) {
    $(function() {
        function checkForm(ev) {
            var $self = $(this), map = {
                stu_id: /^.+$/gi,
                stu_pwd: /^.+$/gi,
                stu_nickname: /^([\u4E00-\uFA29]|[\uE7C7-\uE7F3]|[\w])+$/gi
            };
            check.call($self, map) || ev.preventDefault();
        }
        function check(map) {
            var $self = $(this), returnValue = !0, $input = $(".js-check", $self);
            return $input.each(function($i, ele) {
                var $ele = $(ele), key = $ele.attr("data-check_type");
                map[key] && "[object RegExp]" == Object.prototype.toString.call(map[key]) && (map[key].test($ele.val()) ? $ele.next(".s-error").css("display", "none") : ($ele.next(".s-error").css("display", "block"), 
                returnValue = !1));
            }), console.log(returnValue), returnValue;
        }
        /*阻止事件冒泡*/
        $(".m-login-register-case").on("click", function(ev) {
            ev.stopPropagation();
        }), /*tab切换*/
        //openBox( $('.js-open-register'), $( '.u-register') );
        //openBox( $('.js-open-login'), $('.u-login') );
        /*表单提交*/
        $(".js-login-form, .js-register-form").on("submit", checkForm);
    });
});