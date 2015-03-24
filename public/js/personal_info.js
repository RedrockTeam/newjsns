/**
 * Created by redrock on 2015/3/13.
 */
define([ "jquery", "port" ], function($) {
    $(function() {
        /*--------------- ----------*/
        function openChange() {
            $(".js-show_box").css("display", "none"), $(".m-change_info .js-header_icon").attr("src", $(".m-show_info .js-header_icon").attr("src")), 
            $(".m-change_info .js-user_name").attr("placeholder", $(".m-show_info .js-user_name").text()), 
            $(".m-change_info .js-user_signatrue").text($(".m-show_info .js-user_signatrue").text()), 
            $(".js-change_box").css("display", "block");
        }
        function submitForm(ev) {
            ev.preventDefault();
        }
        $(".js-open_change_info").on("click", openChange), $(".js-change_form").on("submit", submitForm);
    });
});