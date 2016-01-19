<?
$mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4)));
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.theme.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">

	<? if( $mobile ): ?>
        <meta name="viewport" content="width=750, user-scalable=no">
    <? else: ?>
        <meta name="viewport" content="width=device-width, user-scalable=no">
    <? endif; ?>

    <link rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 767px)" href="css/layout-mobile.css" />
    <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1000px)" href="css/layout-tablet.css" />
    
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/jssor.js"></script>
	<script type="text/javascript" src="js/jssor.slider.js"></script>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/swipe.js"></script>
	<script type="text/javascript" src="js/carousel.lite.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/datepicker-ru.js"></script>
	<script type="text/javascript" src="js/KitProgress.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
	<!-- <ul class="ps-lines">
		<li class="v" style="margin-left:-481px"></li>
		<li class="v" style="margin-left:480px"></li>
		<li class="v" ></li>
	</ul> -->
	<div class="b b-0">
		<div class="b-block">
			<a href="#" class="b-logo-left"><img src="i/logo.png" alt=""></a>
		</div>
	</div>
	<div class="b b-1">
		<div class="b-block">
			<h1>Профессиональный участник рынка ценных бумаг</h1>
			<ul class="b-main-menu clearfix">
				<li><span>МЫ</span>
					<ul class="b-main-submenu">
						<li class="b-go" data-block=".b-3">О&nbsp;нас</li>
						<li class="b-go" data-block=".b-4">Наше&nbsp;мнение</li>
						<li class="b-go" data-block=".b-10">Контакты</li>
					</ul>
				</li>
				<li><span>предлагаем</span>
					<ul class="b-main-submenu">
						<li class="b-go" data-block=".b-5">Наши&nbsp;услуги</li>
					</ul>
				</li>
				<li><span>ВАМ</span>
					<ul class="b-main-submenu">
						<li class="b-go" data-block=".b-6">Клиенты&nbsp;и&nbsp;партнеры</li>
					</ul>
				</li>
				<li><span>ПРИБЫЛЬ</span>
					<ul class="b-main-submenu">
						<li class="b-go" data-block=".b-8">Стратегии</li>
					</ul>
				</li>
			</ul>
			<div class="clearfix b-1-bottom">
				<div class="left clearfix">
					<div class="left">25</div>
					<div class="right"><span>%</span>годовых</div>
				</div>
				<div class="right clearfix">
					<div class="b-red-button callback" data-block="#b-popup-1">
						<div class="b-but b-but-1">

							<!-- <i></i> -->
							<p>Обсудить<br>по телефону</p>
							<form action="kitsend.php" method="POST" id="b-form-callback" data-block="#b-popup-2">
								<label for="callback-phone">Ваш телефон</label>
								<input id="callback-phone" type="text" name="phone" required>
								<input type="hidden" name="subject" value="Обсудить по телефону"/>
								<a class="ajax b-red-butt" onclick="$('#b-form-callback').submit(); return false;" >Позвонить Вам</a>
							</form>
						</div>
					</div>
					<div class="b-red-button">
						<div class="b-but b-but-2">
							<!-- <i></i> -->
							<p>Назначить<br>встречу</p>
							<div class="datepicker" id="datepicker-inline"></div>
						</div>
						<span style="display:none;" id="date-popup" class="fancy" data-block="#b-popup-1"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-2">
		<div class="b-block">
			<h2 class="b-title">SEO-текст</h2>
			<p>На этом месте было бы неплохо разместить небольшой SEO-текст. Он поможет в продвижении сайта и первичном знакомстве с компанией. EVRAZ представил отчетность по МСФО за 1П15. Результаты оказались ожидаемо слабыми на фоне падения экспортных и внутренних цен на сталь, что было компенсировано ослаблением рубля, которое позволило сохранить рентабельность почти на прежнем уровне – 19% (-1 пп к 2п14). При этом специализация на сортовом прокате и удаленность от основных рынков сбыта обусловила худшую динамику в секторе: EBITDA EVRAZ сократилась на 26% -п против -5% у Северстали и -16% у НЛМК. Рост долговой нагрузки по показателю.<br><br>
			Чистый долг/EBITDA оказался несущественным – до 2.6х, однако ускорится во 2П15, поскольку финансовые результаты компании останутся под давлением из-за негативной конъюнктуры рынка стали. Тем не менее мы ожидаем, что по итогаиски рефинансирования в 2015-2016 гг. мы считаем умеренно низкими: несмотря на крупные погашения</p>
		</div>
	</div>
	<div class="b b-3">
		<div class="b-block">
			<h2 class="b-title">О нас</h2>
			<ul class="b-about-list clearfix">
				<li>
					<img src="i/b-3/1.png" alt="">
					<p>сотрудников</p>
					<b>7</b>
				</li>
				<li>
					<img src="i/b-3/2.png" alt="">
					<p>Инвесторов</p>
					<b>30</b>
				</li>
				<li>
					<img src="i/b-3/3.png" alt="">
					<p>Объем<br>собственных<br>средств</p>
					<b>726<span>миллионов<br>рублей</span></b>
				</li>
				<li>
					<img src="i/b-3/4.png" alt="">
					<p>Суммарный<br>объем клиентских<br>средств</p>
					<b>2<span>миллиарда<br>рублей</span></b>
				</li>
			</ul>
		</div>
	</div>
	<div class="b b-4">
		<div class="b-block b-block-1">
			<h2 class="b-title">Наше мнение</h2>
			<div>
				<ul class="b-tabs clearfix">
					<li class="active">Видео</li>
					<li>Аудио</li>
					<li>Статьи</li>
				</ul>
			</div>
			<div class="b-mac">
				<p>Тенденции<br>фондовых<br>рынков</p>
				<a href="#" class="b-play-butt"><img src="i/play.png" alt=""></a>
			</div>
		</div>
		<div class="b-block-2">
			<div class="b-block">
				<ul class="b-video-list clearfix">
					<li><a href="#">Кто<br>управляет<br>кризисом?</a></li>
					<li><a href="#">Как заработать<br>на скачке<br>курса?</a></li>
					<li><a href="#">Основные ошибки<br>начинающего<br>брокера.</a></li>
					<li><a href="#">С чего<br>начать бизнес<br>на Форекс?</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="b b-5">
		<div class="b-block">
			<h2 class="b-title">услуги</h2>
			<ul class="b-service-list clearfix">
				<li>
					<img src="i/b-5/1.png" alt="">
					<h3>Физическим<br>лицам</h3>
					<p>Вы - успешный деловой  человек, имеющий возможность позволить себе размещать временно свободные денежные средства<br>с целью получения дополнительного дохода. </p>
				</li>
				<li>
					<img src="i/b-5/2.png" alt="">
					<h3>Юридическим<br>лицам</h3>
					<p>А, может быть, Вы - признанная компания, безусловный лидер своего рынка, заботящаяся об эффективности своей работы и финансовых ресурсов.</p>
				</li>
				<li>
					<img src="i/b-5/3.png" alt="">
					<h3>Финансовым<br>институтам</h3>
					<p>Или же Вы - незыблемый Финансовый Институт,<br>ответственно подходящий ко<br>всем бизнес процессам и,<br>прежде всего, к инвестициям. </p>
				</li>
			</ul>
		</div>
	</div>
	<div class="b b-6">
		<div class="b-block">
			<h2 class="b-title">НАМ ДОВЕРЯЮТ</h2>
			<div class="b-partners"></div>
		</div>
	</div>
	<div class="b b-7">
		<div class="b-block">
			<p>Наши клиенты и партнеры - это крупнейшие банки России и всего мира. Мы их очень любим и уважаем, поэтому делаем все, что в наших силах, чтобы с каждым днем их состоянии увеличивалось, ведь их прибыль - это и наша прибыль. Станьте и Вы нашим партнером, и мы поможем Вам стать  чуточку богаче!</p>
			<a href="#" class="b-red-butt fancy" data-block="#b-popup-1">Стать партнером</a>
		</div>
	</div>
	<div class="b b-8">
		<div class="b-block b-white-block">
			<h2 class="b-title">ваша Прибыль</h2>
			<h3>Выберите оптимальное для Вас инвестиционное решение </h3>
		</div>
		<div class="b-back">
			<div class="b-block">
				<div class="b-icon">
					<img src="i/b-8/1-icon.png" alt="">
					<p>Вы</p>
				</div>
				<h3>Кем из предложенных ниже Инвесторов Вы являетесь?</h3>
				<ul class="clearfix b-checkboxes">
					<li><input type="checkbox" id="id-1"><label for="id-1">Частное лицо</label></li>
					<li><input type="checkbox" id="id-2"><label for="id-2">Компания</label></li>
					<li><input type="checkbox" id="id-3"><label for="id-3">Финансовый институт</label></li>
				</ul>
				<div>
					<a href="#" class="b-red-butt b-next-butt fancy" data-block="#b-popup-1">Далее</a>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-9">
		<div class="b-block clearfix">
			<h3 class="left">Обратитесь к экспертам «Фобос Кэпитал»</h3>
			<div class="right">
				<div class="b-phone-contact">8(495) 123-45-67</div>
				<div class="b-email-contact">netsly@hotmail.com<br>sokolov@foboscap.com</div>
				<div class="b-place-contact">г. Москва, ул. Такаято,<br>д.7,офис 407</div>
			</div>
		</div>
	</div>
	<div class="b b-10">
		<div class="b-map" id="map_canvas"></div>
	</div>
	<div class="b b-11">
		<div class="b-block clearfix">
			<div class="clearfix b-footer-menu-cont">
				<ul class="b-footer-menu left clearfix">
					<li><a href="#" class="b-go" data-block=".b-3">О нас</a></li>
					<li><a href="#" class="b-go" data-block=".b-4">Наше мнение</a></li>
					<li><a href="#" class="b-go" data-block=".b-5">Услуги</a></li>
					<li><a href="#" class="b-go" data-block=".b-6">Клиенты и Партнеры</a></li>
					<li><a href="#" class="b-go" data-block=".b-8">Прибыль</a></li>
				</ul>
				<div class="right">
					<a href="#" class="b-soc-butt"><img src="i/soc/fb.png" alt=""></a>
					<a href="#" class="b-soc-butt"><img src="i/soc/tw.png" alt=""></a>
					<a href="#" class="b-soc-butt"><img src="i/soc/vk.png" alt=""></a>
				</div>
			</div>
			<div class="b-footer-cont clearfix">
				<div class="left b-book-cont">
					Наши лицензии
				</div>
				<div class="left b-copy-cont">
					ООО “Фобос Кэпитал”.<br>Профессиональный участник рынка ценных бумаг.
				</div>
				<div class="right b-dev-cont">Дизайн сайта <a href="http://www.vikagrits.ru/" target="_blank">www.vikagrits.ru</a></div>
			</div>
		</div>
	</div>
	<div style="display:none;">
		<div id="b-popup-1">
			<div class="b-popup" >
				<div class="b-head">Вы выбрали дату</div>
				<div class="b-popup-back">
					<form action="kitsend.php" method="POST" id="b-form-1" data-block="#b-popup-2">
						<div class="clearfix b-data-cont">
							<h3 class="left" id="date-text"></h3>
							<input type="text" name="1" class="b-data-input right" id="actualDate" placeholder="Укажите дату" required>
							<input type="hidden" name="1-name" value="Дата">
						</div>
						<div class="b-popup-form">
							<input type="text" class="b-input-name" id="name" name="name" placeholder="Представьтесь пожалуйста" required/>
							<input type="text" id="phone" name="phone" placeholder="Ваш телефон для связи" required/>
							<input type="text" name="email" placeholder="Ваш email" required/>
							<input type="hidden" name="subject" value="Заказ"/>
							<a class="ajax b-red-butt" onclick="$('#b-form-1').submit(); return false;" >Назначить встречу</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="b-popup-2">
			<div class="b-thanks b-popup">
				<h3>Спасибо!</h3>
				<h4>Ваша заявка успешно отправлена.<br/>Наш менеджер свяжется с Вами в течение часа.</h4>
				<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
			</div>
		</div>
		<div id="b-popup-error">
			<div class="b-thanks b-popup">
				<h3>Ошибка отправки!</h3>
				<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
				<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
			</div>
		</div>
	</div>
</body>
</html>