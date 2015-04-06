/**
 * Created by redrock on 2015/4/6.
 */
define([ "jquery" ], function($) {
    $(function() {
        $(".js-stop_copy").on("copy", function(ev) {
            ev.preventDefault();
        });
    });
});