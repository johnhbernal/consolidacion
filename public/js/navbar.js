selector = $.noConflict();
selector( document ).ready(function() { 
	selector('.navbar a.dropdown-toggle').on('click', function(e) {
        var $el = selector(this);
        var $parent = selector(this).offsetParent(".dropdown-menu");
        selector(this).parent("li").toggleClass('open');

        if(!$parent.parent().hasClass('nav')) {
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }

        selector('.nav li.open').not(selector(this).parents("li")).removeClass("open");

        return false;
    });
});// End document ready