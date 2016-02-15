$(document).ready(function(){
    var myWidth,myHeight,k=1,date;
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
        if(myWidth >= 1000) { 
        var width = 1000+(myWidth/10);
        k = (myWidth > 768)?(myWidth/width):1;
        $("body").css({
            "-webkit-transform" : "scale("+k+")",
               "-moz-transform" : "scale("+k+")",
                "-ms-transform" : "scale("+k+")",
                 "-o-transform" : "scale("+k+")",
                    "transform" : "scale("+k+")",
            "width" : width+5
        });

        
            var zoomHeight = myHeight/k;
            var mainHeight = zoomHeight-$(".b-0").height();
            var investHeight = zoomHeight-$(".b-8 .b-block").height();
    
            $(".b-1").css("height",mainHeight);
            $(".b-3").css("height",zoomHeight);
            $(".b-back.invest-test,.final-back").css("height",investHeight);
            $(".b-4").css("min-height",zoomHeight);
            $(".b-5").css("min-height",zoomHeight);
            $(".b-6 .b-partners").css("height",zoomHeight-$(".b-6 h2.b-title").height()-54);

            $(".b-1 h1").css('padding-top',mainHeight*0.04);
            $(".b-1 .b-main-menu").css('margin-top',mainHeight*0.25);
            $(".b-1-bottom").css('margin-top',mainHeight*0.065);

            $(".b-3 h2.b-title").css({
                'padding-top' : zoomHeight*0.1,
                'padding-bottom' : zoomHeight*0.06
            });
            $(".b-3 .b-about-list").css('padding-top',zoomHeight*0.15);
            $(".b-3 .b-about-list .slide-about >span").css('margin-bottom',zoomHeight*0.13);
            $(".b-3 .b-about-list .slide-about div").css('margin-bottom',zoomHeight*0.02);
            $(".b-3 .b-about-list .slick-arrow").css('top',zoomHeight*0.093);

            $(".b-8 .b-back .b-icon").css({
                // 'padding-top' : investHeight*0.0546,
            });
            $(".b-8 .b-back .b-icon p").css('margin-top',investHeight*0.0131);
            $(".b-8 .b-back h3").css('margin-bottom',investHeight*0.0655);
            $(".b-8 .b-back .final-back h4").css({
                'padding-top' : investHeight*0.05
            });
            $(".b-8 .b-back .final-back .b-block .stats").css('margin-bottom',investHeight*0.05);
            $(".b-8 .b-back .final-back .b-block >.clearfix").css('margin-bottom',investHeight*0.02);
            
            // $(".b-8 .b-back .b-checkboxes li").css('min-height',investHeight*0.3);
            
            $(".b-4 .b-block-1 h2.b-title").css({
                'padding-bottom' : zoomHeight*0.03,
                'padding-top' : zoomHeight*0.04
            });

            $(".b-4 .b-block-2 .b-video-list .slide > div").css({
                'margin-bottom' : zoomHeight*0.036,
                'margin-top' : zoomHeight*0.036
            });
            
            $(".b-4 .b-block-1 .b-tabs").css('margin-bottom',zoomHeight*0.027);
            $(".b-4 .b-block-1 #video-tab.b-tab").css({
                'width' : zoomHeight*0.566*1.26,
                'height' : zoomHeight*0.566
            });
            $(".b-4 .b-block-1 #video-tab.b-tab a.b-play-butt").css({
                'width' : zoomHeight*0.566*1.26*0.14,
                'height' : zoomHeight*0.566*1.26*0.14,
                'margin-left' : "-"+(zoomHeight*0.566*1.26*0.14/2)+"px",
                'top' : zoomHeight*0.566*0.3
            });
            $(".b-4 .b-block-1 #video-tab.b-tab p").css({
                'margin-left' : zoomHeight*0.566*0.1,
                'margin-top' : zoomHeight*0.566*0.08
            });
            $(".b-4 .b-block-1 #video-tab.b-tab .iframe").css({
                'height': zoomHeight*0.566/1.5,
                'width': zoomHeight*0.566/1.54*1.805,
                'top': zoomHeight*0.0215,
                'left': zoomHeight*0.025
                
            });
            $(".b-4 .b-block-1 #video-tab.b-tab .iframe iframe").css('height',zoomHeight*0.566/1.5198);
            
            $(".b-4 .b-block-1 #audio-tab.b-tab").css({
                'height': zoomHeight*0.615,
                'width': zoomHeight*0.615*0.68
                
            });
            $(".b-4 .b-block-1 #text-tab.b-tab .tab-text").css('height',zoomHeight*0.48);
            $(".b-4 .b-block-1 #text-tab.b-tab .tab-text > div").css('padding',zoomHeight*0.035+"px "+zoomHeight*0.035+"px");
            
            $(".b-5 h2.b-title").css('padding-top',zoomHeight*0.08);
            $(".b-5 .b-service-list").css('margin-top',zoomHeight*0.1);
            
            
            
            
        }
    }
    $(window).resize(resize);
    resize();
    $(window).scroll(function(){
        if($(window).scrollTop()/k >= 1000/k) {
            $(".up-arrow").show().css("margin-top",$(window).scrollTop()/k+myHeight/k-80);

        } else $(".up-arrow").hide();
    });


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
        defaultDate: 0,
        onSelect: function() {
            dateChange(date);
            $("#date-popup").click();
           
        }
    });
    
    date = $( "#actualDate" ).val();
    
    $( "#actualDate" ).datepicker({
        autoSize: true,
        onSelect: function() {
            dateChange(date);
        }
    });

    $("#actualDate").change(function(){
        dateChange(date);
    });
    dateChange(date);


    if(myWidth >= 1000) {
        $( "body" ).on("click","#actualDate",function(){
                $("#ui-datepicker-div").css("left","50%");
                $("#ui-datepicker-div").css("top",$(window).scrollTop()/k+$("#b-popup-1").height()/2+"px");
        });
    }

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
                var height= $(".b-4 .b-block-1 #video-tab.b-tab .iframe").css("height");
                $(".iframe").html('<iframe width="100%" height="'+height+'" src="'+$(this).find("span").attr("data-video")+'?autoplay=1" frameborder="0" allowfullscreen></iframe>');
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
        $("span[data-video='"+$(this).attr('data-video')+"']").closest(".slide").addClass("active");
        $(".iframe").css("background","#000");
        var height= $(".b-4 .b-block-1 #video-tab.b-tab .iframe").css("height");
        $(".iframe").html('<iframe width="100%" height="'+height+'" src="'+$(this).attr("data-video")+'?autoplay=1" frameborder="0" allowfullscreen></iframe>');
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
    $( "#accordion" ).accordion({
        collapsible: true,
        heightStyle: "content"
    });

    resize();

    
    $("#refresh-date").click(function(){
        $( "#actualDate" ).val(date);
        dateChange(date);
    });

    
});
var months = ["","января","февраля","марта","апреля","мая","июня","июля","августа","сентября","октября","ноября","декабря"];    
function dateChange(date) {
    var arr = $("#actualDate").val().split(".");
    if(!(arr[0] !="" && arr[0] <= 31 && arr[1] <=12 && arr[2] <= 2050)) {
        $( "#actualDate" ).val(date);
        arr = $("#actualDate").val().split(".");
    }
    $("#date-text").text(parseInt(arr[0])+" "+months[parseInt(arr[1])]+" "+arr[2]);
}
