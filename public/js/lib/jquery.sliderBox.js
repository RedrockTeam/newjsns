!function(a){a.fn.slideBox=function(b){var c={direction:"left",duration:.6,easing:"swing",delay:3,startIndex:0,hideClickBar:!0,clickBarRadius:5,hideBottomBar:!1,width:null,height:null,hideIndexBar:!1},d=a.extend(c,b||{}),e=a(this),f=e.children("ul.items"),g=f.find("li"),h=g.first().find("img"),i=g.size(),j=0,k=0,l="ASC",m=function(){if(!e.size())return!1;if(j=d.height?d.height:g.first().height(),k=d.width?d.width:g.first().width(),e.css({width:k+"px",height:j+"px"}),g.css({width:k+"px",height:j+"px",overflow:"hidden"}),"left"==d.direction?f.css("width",i*k+"px"):f.css("height",i*j+"px"),f.find("li:eq("+d.startIndex+")").addClass("active"),!d.hideBottomBar){var b=a('<div class="tips"></div>').css("opacity",.8).appendTo(e),c=(a('<div class="title"></div>').html(function(){var b=f.find("li.active").find("a"),c=b.attr("title"),d=b.attr("href");return a("<a>").attr("href",d).text(c)}).appendTo(b),a('<div class="nums"></div>').hide().appendTo(b));d.hideIndexBar||g.each(function(b,e){var g=a(e).find("a"),h=g.attr("title"),i=g.attr("href"),j="";b==d.startIndex&&(j="active"),a("<a>").attr("href",i).text(h).addClass(j).css("borderRadius",d.clickBarRadius+"px").mouseover(function(){a(this).addClass("active").siblings().removeClass("active"),f.find("li:eq("+a(this).index()+")").addClass("active").siblings().removeClass("active"),n(),o()}).appendTo(c)}),!d.hideIndexBar&&d.hideClickBar?(b.hover(function(){c.animate({top:"0px"},"fast")},function(){c.animate({top:b.height()+"px"},"fast")}),c.show().delay(2e3).animate({top:b.height()+"px"},"fast")):c.show()}g.size()>1&&n()},n=function(){var a,b,c=f.find("li.active"),g=c.find("a"),h=c.index();"left"==d.direction?(a=h*k*-1,b={left:a+"px"}):(a=h*j*-1,b={top:a+"px"}),e.find(".nums").find("a:eq("+h+")").addClass("active").siblings().removeClass("active"),e.find(".title").find("a").attr("href",g.attr("href")).text(g.attr("title")),f.stop().animate(b,1e3*d.duration,d.easing,function(){c.removeClass("active"),"ASC"==l?c.next().size()?c.next().addClass("active"):(l="DESC",c.prev().addClass("active")):"DESC"==l&&(c.prev().size()?c.prev().addClass("active"):(l="ASC",c.next().addClass("active")))}),e.data("timeid",window.setTimeout(n,1e3*d.delay))},o=function(){window.clearTimeout(e.data("timeid"))};e.hover(function(){o()},function(){window.setTimeout(n,1e3*d.delay)});var p=new Image;p.onload=function(){p.onload=null,m()},p.src=h.attr("src")}}(jQuery);