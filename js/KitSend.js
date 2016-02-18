function getNextField($form){
	var j = 1;
	while( $form.find("input[name="+j+"]").length ){
		j++;
	}
	return j;
}



var customHandlers = [];

$(document).ready(function(){	
	function whenScroll(){
		var scroll = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
		if( customHandlers["onScroll"] ){
			customHandlers["onScroll"](scroll);
		}
	}
	$(window).scroll(whenScroll);
	whenScroll();

	var myWidth,myHeight,k=1;
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
    };
    resize();
    function fancyOpen(el){
    	if(myWidth >= 1000) {
	    	var k;
		    $.fancybox(el,{
		        scrolling: 'no',
		        topRatio: 0,
		        beforeShow: function(){
					var width = 1000+(myWidth/10);
	        		k = (myWidth > 768)?(myWidth/width):1;
					el.css("margin-top",$(window).scrollTop()/k+(myHeight/k*0.1));
				},
				openEffect: "none",
		        afterShow:function(){
		        	var margin = el.width()/2;
		        	$('.fancybox-wrap').css('opacity',0);
		            setTimeout(function(){
		                $('.fancybox-wrap').css({
		                	'opacity': 1,
		                    'position':'absolute',
		                    'top': 0,
		                    'left' : "50%",
		                    'margin-left': '-'+margin+"px"
		                });
		                $('.fancybox-inner').css('height','auto');
		            },1);
		        },
		        padding:0
		    }); 
		} else {
			$.fancybox(el,{
		        scrolling: 'no',
		        afterShow:function(){
		            setTimeout(function(){
		                $('.fancybox-wrap').css({
		                    'position':'absolute'
		                });
		                $('.fancybox-inner').css('height','auto');
		            },200);
		        },
		        padding:0
		    }); 
		}
	    $('html').addClass('fancybox-lock'); 
	    $('.fancybox-overlay').html($('.fancybox-wrap')); 
	    return false;
	}
	var rePhone = /^\+\d \(\d{3}\) \d{3}-\d{2}-\d{2}$/,
		tePhone = '+7 (999) 999-99-99';

	$.validator.addMethod('customPhone', function (value) {
		return rePhone.test(value);
	});

	$(".ajax").parents("form").each(function(){
		$(this).validate({
			rules: {
				email: 'email',
				phone: 'customPhone'
			}
		});
		if( $(this).find("input[name=phone]").length ){
			$(this).find("input[name=phone]").mask(tePhone,{placeholder:"_"});
		}
		if( $(this).find("#actualDate").length ){
			$(this).find("#actualDate").mask("99.99.9999",{placeholder:"_"});
		}
	});

	
	$(".fancy").each(function(){
		var k;
		var $popup = $($(this).attr("data-block")),
			$this = $(this);
		if(myWidth >= 1000) {
			var top = 0;
			$this.fancybox({
				padding : 0,
				topRatio: top,
				fitToView: false,
				content : $popup,
				helpers: {
		         	overlay: {
		            	locked: true
		         	}
		      	},
				beforeShow: function(){
					if(myWidth >= 1000) { 
						var width = 1000+(myWidth/10);
		        		k = (myWidth > 768)?(myWidth/width):1;
						$popup.css("margin-top",$(window).scrollTop()/k+(myHeight/k*0.1));
					}
					$popup.find(".custom-field").remove();
					if( $this.attr("data-value") ){
						var name = getNextField($popup.find("form"));
						$popup.find("form").append("<input type='hidden' class='custom-field' name='"+name+"' value='"+$this.attr("data-value")+"'/><input type='hidden' class='custom-field' name='"+name+"-name' value='"+$this.attr("data-name")+"'/>");
					}
					if( $this.attr("data-beforeShow") && customHandlers[$this.attr("data-beforeShow")] ){
						customHandlers[$this.attr("data-beforeShow")]($this);
					}
				},
				afterShow: function(){
					if( $this.attr("data-afterShow") && customHandlers[$this.attr("data-afterShow")] ){
						customHandlers[$this.attr("data-afterShow")]($this);
					}
				},
				beforeClose: function(){
					if( $this.attr("data-beforeClose") && customHandlers[$this.attr("data-beforeClose")] ){
						customHandlers[$this.attr("data-beforeClose")]($this);
					}
				},
				afterClose: function(){
					if( $this.attr("data-afterClose") && customHandlers[$this.attr("data-afterClose")] ){
						customHandlers[$this.attr("data-afterClose")]($this);
					}
				}
			});
		} else {
			$this.fancybox({
				padding : 0,
				fitToView: false,
				content : $popup,
				beforeShow: function(){

					// $(".b-1-bottom .right").append('<div class="b-red-button"><div class="b-but b-but-2"><p>Назначить<br>встречу</p><div class="datepicker" id="datepicker-inline"></div></div><span style="display:none;" id="date-popup" class="fancy" data-block="#b-popup-1"></span></div>');
					$popup.find(".custom-field").remove();
					if( $this.attr("data-value") ){
						var name = getNextField($popup.find("form"));
						$popup.find("form").append("<input type='hidden' class='custom-field' name='"+name+"' value='"+$this.attr("data-value")+"'/><input type='hidden' class='custom-field' name='"+name+"-name' value='"+$this.attr("data-name")+"'/>");
					}
					if( $this.attr("data-beforeShow") && customHandlers[$this.attr("data-beforeShow")] ){
						customHandlers[$this.attr("data-beforeShow")]($this);
					}
				},
				afterShow: function(){
					if( $this.attr("data-afterShow") && customHandlers[$this.attr("data-afterShow")] ){
						customHandlers[$this.attr("data-afterShow")]($this);
					}
				},
				beforeClose: function(){
					if( $this.attr("data-beforeClose") && customHandlers[$this.attr("data-beforeClose")] ){
						customHandlers[$this.attr("data-beforeClose")]($this);
					}
				},
				afterClose: function(){
					if( $this.attr("data-afterClose") && customHandlers[$this.attr("data-afterClose")] ){
						customHandlers[$this.attr("data-afterClose")]($this);
					}
				}
			});
		}
	});
	
	$(".b-go").click(function(){
		var block = $( $(this).attr("data-block") ),
			off = $(this).attr("data-offset")||0;
		$("body, html").animate({
			scrollTop : block.offset().top-off
		},800);
		return false;
	});

	$(".fancy-img").fancybox({
		padding : 0,
		beforeShow: function(){
			if(myWidth >= 1000) { 
				var width = 1000+(myWidth/10);
        		var k = (myWidth > 768)?(myWidth/width):1;
				$(".fancybox-inner").css("margin-top",$(window).scrollTop()/k);
			}
		}
	});

	$(".ajax").parents("form").submit(function(){
  		if( $(this).find("input.error,select.error,textarea.error").length == 0 ){
  			var $this = $(this),
  				$thanks = $($this.attr("data-block")),
  				text = $(this).attr("data-thank");

  			if( $this.attr("data-beforeAjax") && customHandlers[$this.attr("data-beforeAjax")] ){
				customHandlers[$this.attr("data-beforeAjax")]($this);
			}

  			$.ajax({
			  	type: $(this).attr("method"),
			  	url: $(this).attr("action"),
			  	data:  $this.serialize(),
				success: function(msg){
					var $form;
					if( msg == "1" ){
						$("#b-popup-2 h3").text(text);
						$form = $thanks.clone();
					}else{
						$form = $("#b-popup-error");
					}

					if( $this.attr("data-afterAjax") && customHandlers[$this.attr("data-afterAjax")] ){
						customHandlers[$this.attr("data-afterAjax")]($this);
					}

					$this.find("input[type=text],textarea").val("");

					if(myWidth >= 1000) {
						fancyOpen($form);
					} else {
						$.fancybox.open({
							content : $form,
							padding : 0
						});	
					}
				}
			});
  		}
  		return false;
  	});
});