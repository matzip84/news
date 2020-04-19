jQuery(document).ready(function($) {

    if(primewp_ajax_object.secondary_menu_active){

    $(".primewp-nav-secondary .primewp-secondary-nav-menu").addClass("primewp-secondary-responsive-menu");

    $(".primewp-secondary-responsive-menu-icon").click(function(){
        $(this).next(".primewp-nav-secondary .primewp-secondary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".primewp-nav-secondary .primewp-secondary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".primewp-secondary-responsive-menu > li").removeClass("primewp-secondary-menu-open");
        }
    });

    $(".primewp-secondary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").toggleClass('primewp-submenu-toggle').parent().toggleClass("primewp-secondary-menu-open");
        $(this).find(".children:first").toggleClass('primewp-submenu-toggle').parent().toggleClass("primewp-secondary-menu-open");
    });

    $("div.primewp-secondary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").toggleClass('primewp-submenu-toggle').parent().toggleClass("primewp-secondary-menu-open");
    });

    }

    if(primewp_ajax_object.primary_menu_active){

    $(".primewp-nav-primary .primewp-primary-nav-menu").addClass("primewp-primary-responsive-menu");

    $(".primewp-primary-responsive-menu-icon").click(function(){
        $(this).next(".primewp-nav-primary .primewp-primary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".primewp-nav-primary .primewp-primary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".primewp-primary-responsive-menu > li").removeClass("primewp-primary-menu-open");
        }
    });

    $(".primewp-primary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").toggleClass('primewp-submenu-toggle').parent().toggleClass("primewp-primary-menu-open");
        $(this).find(".children:first").toggleClass('primewp-submenu-toggle').parent().toggleClass("primewp-primary-menu-open");
    });

    $("div.primewp-primary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").toggleClass('primewp-submenu-toggle').parent().toggleClass("primewp-primary-menu-open");
    });

    }

    if($(".primewp-sidebar-one-wrapper").length){
    $(".primewp-main-wrapper").before($(".primewp-sidebar-one-wrapper"));
    $(window).resize(function(){
        if(window.innerWidth > 960) {
            $(".primewp-main-wrapper").before($(".primewp-sidebar-one-wrapper"));
        } else {
            $(".primewp-main-wrapper").after($(".primewp-sidebar-one-wrapper"));
        }
    });
    }

    $(".post").fitVids();

    var scrollButtonEl = $( '.primewp-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.primewp-scroll-top' ).fadeOut();
        } else {
            $( '.primewp-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );

    if(primewp_ajax_object.sticky_header_active){
    // grab the initial top offset of the navigation 
    var primewpstickyheadertop = $('#primewp-wrapper-outside').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var primewpstickyheader = function(){
        var primewpscrolltop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative

        if(primewp_ajax_object.sticky_header_mobile_active){
            if (primewpscrolltop > primewpstickyheadertop) {
                $('.primewp-site-header').addClass('primewp-fixed');
            } else {
                $('.primewp-site-header').removeClass('primewp-fixed');
            }
        } else {
            if(window.innerWidth > 1112) {
                if (primewpscrolltop > primewpstickyheadertop) {
                    $('.primewp-site-header').addClass('primewp-fixed');
                } else {
                    $('.primewp-site-header').removeClass('primewp-fixed');
                }
            }
        }
    };
    }

    primewpstickyheader();
    // and run it again every time you scroll
    $(window).scroll(function() {
        primewpstickyheader();
    });

    if(primewp_ajax_object.sticky_sidebar_active){
    $('.primewp-main-wrapper, .primewp-sidebar-one-wrapper, .primewp-sidebar-two-wrapper').theiaStickySidebar({
        containerSelector: ".primewp-content-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 960,
    });
    }

    $(".primewp-header-tab-link").on('click', function (e) {
        e.preventDefault();
        var primewpactiveheadertab = $(this).attr("href");
        $(".primewp-header-bottom-content").not(primewpactiveheadertab).hide();
        $(primewpactiveheadertab).slideToggle(400);
    });
    
    $("#magagine_left_menu li a").on('click',function(e){
    	 e.preventDefault();
    	 var link = $(this).attr("href");
    	 
    	 if(link){
    		 $("#paper_frame").attr("src",link);
    	 }
    });

});





search = new Array;
function changesearch(re2)
{
	document.location = "?kind="+re2;	
}
function mysubmit(re2){

	frmtmp = 'frm' + re2;
	frmtmp = eval(frmtmp);
	if(myForm.word.value){ 
		frmtmp.elements[0].value = myForm.word.value;
		frmtmp.submit();
	}else{  
		window.open(search[re2][0], 'nWin');
	}

}

function enterfunc(val){
	if(val==13){   
			mysubmit(8);
	}
}
search[0] = ["http://www.naver.com", "http://search.naver.com/search.naver?where=nexearch&query"];
search[1] = ["http://www.daum.net", "http://search.daum.net/cgi-bin/nsp/search.cgi?action=query&pg=express&which=web&qt=&q"];
search[2] = ["http://kr.yahoo.com", "http://kr.search.yahoo.com/bin/search?&p"];
search[3] = ["http://www.nate.com", "http://search.empas.com/search/all.html?m=X&s=s&e=1&n=10&q"];
search[4] = ["http://www.paran.com", "http://search.paran.com/search/index.php?fn=top&Query"];
search[5] = ["http://www.freechal.com", "http://search.freechal.com/search_total.asp?where=all&keyword"];
search[6] = ["http://www.google.co.kr", "http://www.google.co.kr/search?hl=ko&ie=euc-kr&oe=euc-kr&lr=lang_ko&q"];
search[7] = ["http://www.dreamwiz.com", "http://search.dreamwiz.com/cgi-bin/irs.cgi?so=2&x=21&y=12&q"];
search[8] = ["http://www.naver.com", "http://www.disco.co.kr/SEARCH?MD=21&media_section=ALL&keyword"];
