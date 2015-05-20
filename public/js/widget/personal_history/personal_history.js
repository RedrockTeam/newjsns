/**
 * Created by redrock on 2015/5/20.
 */
define([ "jquery" ], function($) {
    $(function() {
        var $get = $(".js-get_reply"), $post = $(".js-post_reply");
        $(".js-reply_tabs a").on("click", function() {
            var $self = $(this);
            0 === $self.index() ? ($get.show(), $post.hide()) : ($get.hide(), $post.show());
        });
    });
});