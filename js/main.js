$(document).ready(function(){
    var myWidth,myHeight;
    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();
    
    if($(".b-0 .b-block ul:visible").length) {
        $("li.date").text($.datepicker.formatDate( "d.mm.yy", new Date() ));
        $.ajax({
            type: "GET",
            url: "quotes.php",
            success: function(msg){
                var obj = $.parseJSON(msg);
                $.each(obj, function(i, item) {
                    $("li."+i+" .value").text(item.val);
                    
                    if(item.change.indexOf("-") == -1) {
                       $("li."+i+" .update").removeClass("down"); 
                       $("li."+i+" .update span").text("+ "+item.change);
                    } else {
                        $("li."+i+" .update span").text(item.change);
                        $("li."+i+" .update").addClass("down");
                    }
                });
            }
        });
    }

	var myPlace = new google.maps.LatLng(55.754407, 37.625151);
    var myOptions = {
        zoom: 16,
        center: myPlace,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        scrollwheel: false,
        zoomControl: true
    }
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

    var marker = new google.maps.Marker({
	    position: myPlace,
	    map: map,
	    title: "Ярмарка вакансий и стажировок"
	});

    //  var options = {
    //     $AutoPlay: true,                                
    //     $SlideDuration: 500,                            

    //     $BulletNavigatorOptions: {                      
    //         $Class: $JssorBulletNavigator$,             
    //         $ChanceToShow: 2,                           
    //         $AutoCenter: 1,                            
    //         $Steps: 1,                                  
    //         $Lanes: 1,                                  
    //         $SpacingX: 10,                              
    //         $SpacingY: 10,                              
    //         $Orientation: 1                             
    //     }
    // };

    // var jssor_slider1 = new $JssorSlider$("slider1_container", options);
    if(myWidth < 1000) {
        $(".b-main-menu li").click(function(){
            if(!$(this).hasClass("active")) {
                $(".b-main-menu li.active").removeClass("active").find("ul").slideUp();
                $(this).addClass("active").find("ul").slideDown();
            }
        });
    }

    

    $( "#datepicker-inline" ).datepicker({
        altField: "#actualDate",
        onSelect: function() {
            dateChange();
            $("#date-popup").click();
           
        }
    });

    $( "#actualDate" ).datepicker({
        autoSize: true,
        onSelect: function() {
            dateChange();
        }
    });

    $("#actualDate").change(function(){
        dateChange();
    });
    dateChange();
    if(myWidth < 1000) {
        $(".b-video-list").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: false,
            arrows: false,
            asNavFor: "#text-tab"
        }); 
    } else {
        $(".b-video-list").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            prevArrow: '<span class="slick-arrow slick-prev"></span>',
            nextArrow: '<span class="slick-arrow slick-next"></span>',
            asNavFor: "#text-tab"
        });
    }
    if(myWidth < 1000) {
        $("#text-tab").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: false,
            arrows:false,
            asNavFor: ".b-video-list"
        });
    } else {
        $("#text-tab").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            arrows:false,
            asNavFor: ".b-video-list"
        });
    }
    if(myWidth < 1000) {
        $(".b-about-list").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            prevArrow: '<span class="slick-arrow slick-prev"></span>',
            nextArrow: '<span class="slick-arrow slick-next"></span>'
        });
    } else {
        $(".b-about-list").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            prevArrow: '<span class="slick-arrow slick-prev"></span>',
            nextArrow: '<span class="slick-arrow slick-next"></span>'
        });
    }

    $("body").keydown(function(e) {
      if(e.keyCode == 37) { // left
        $(".b-about-list").slick('slickPrev');
      }
      else if(e.keyCode == 39) { // right
        $(".b-about-list").slick('slickNext');
      }
    });
    

    $( ".tab-text" ).hover(
      function() {
        $(".slide").eq($( this ).index()).addClass("hover");
      }, function() {
        $(".slide").eq($( this ).index()).removeClass( "hover" );
      }
    );

    $( ".slide" ).hover(
      function() {
        $(".tab-text").eq($( this ).index()).addClass("hover");
      }, function() {
        $(".tab-text").eq($( this ).index()).removeClass( "hover" );
      }
    );

    $( "#tabs" ).tabs({
        activate: function( event, ui ) {
            $("#video-tab a").show();
            $(".iframe").empty();
            $(".iframe").css("background","none");
            $("#text-tab").slick('setPosition');   
            // var selectedTab = $("#tabs").tabs('option', 'active');
            // if(selectedTab == 2) {
            //     $(".slide .text").show();
            // }
            $(".full-text").hide();
            $(".b-4 .b-block-1 #text-tab.b-tab").css('margin-top',"80px");
            $(".tab-text,.slide").removeClass("active");
        }
    });

    $(".slide").click(function(){
        if(!$(this).hasClass("active")) {
            $(".slide.active").removeClass("active");
            $(this).addClass("active");
            $("#video-tab p").html($(this).find("span").html());
            $("#video-tab a").attr("data-video",$(this).find("span").attr("data-video"));
            var selectedTab = $("#tabs").tabs('option', 'active');
            if(selectedTab == 0) {
                $("#video-tab a").hide();
                $(".iframe").css("background","#000");
                $(".iframe").html('<iframe width="100%" height="277" src="'+$(this).find("span").attr("data-video")+'?autoplay=1" frameborder="0" allowfullscreen></iframe>');
            } else {
                $("#video-tab a").show();
                $(".iframe").empty();
                $(".iframe").css("background","none");
            }
            if(selectedTab == 2) {
                $(".full-text").hide();
                var number = $(this).index()+1;
                $("#full-text-"+number).show();
                $(".b-4 .b-block-1 #text-tab.b-tab").css('margin-top',"0px");
                $("body, html").animate({
                    scrollTop : $("#full-text-"+number).offset().top
                },800);
            }
            if(selectedTab == 1) {
                $("#audio-tab audio").remove();
                $("#audio-tab").append('<audio src="'+$(this).find("span").attr("data-audio")+'" controls></audio>')
            }
        }
    });
    $("#video-tab a").click(function(){
        $(this).hide();
        $(".slide").eq(0).addClass("active");
        $(".iframe").css("background","#000");
        $(".iframe").html('<iframe width="100%" height="277" src="'+$(this).attr("data-video")+'?autoplay=1" frameborder="0" allowfullscreen></iframe>');
        return false;
    });

    $(".b-next-butt").click(function(){
        var obj = $(this).closest(".b-back");
        obj.hide();
        var curr = "#"+obj.attr("id");
        var check = obj.find("input:checked").val();
        var next = $(this).attr("data-next");
        $(".b-white-block h3").hide();
        $(".b-white-block ul li[data-block='"+curr+"']").addClass("active").text(check);
        $(".b-white-block ul").css("display","inline-block");
        
        $(next).show();
        return false;
    });

    $(".tab-text").click(function(){
        if(!$(this).hasClass("active")) {
            $(".tab-text.active,.slide.active").removeClass("active");
            $(".slide").eq($(this).index()).addClass("active");
            $(this).addClass("active");
            $(".full-text").hide();
            $(".b-4 .b-block-1 #text-tab.b-tab").css('margin-top',"0px");
            var number = $(this).index()+1;
            $("#full-text-"+number).show();
            $("body, html").animate({
                scrollTop : $("#full-text-"+number).offset().top
            },800);
        }
    });
    if(myWidth >= 1000) {
        $(".b-service-list li").click(function(){
            if(!$(this).hasClass("active")) {
                if(!$(".service-cont:visible").length) $(".service-cont").slideDown();
                $(".b-service-list li.active").removeClass("active");
                $(".service").hide();
                $(this).addClass("active");
                var block = $(this).attr("data-block");
                $(block).slideDown();
            }
        });
    }
});

var months = ["","января","февраля","марта","апреля","мая","июня","июля","августа","сентября","октября","ноября","декабря"];    
function dateChange() {
    var arr = $("#actualDate").val().split(".");
    if(arr[0] !="" && arr[0] <= 31 && arr[1] <=12 && arr[2] <= 2050) {
        $("#date-text").text(parseInt(arr[0])+" "+months[parseInt(arr[1])]+" "+arr[2]);
    } else {
        $("#date-text").text("");
        $("#actualDate").val("");
    }
}