<section class="section section_view-dd section_padding-dd hidden-xs hidden-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="main-menu main-menu_position" id="js-nav">
					<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#js-clock">Модели</a></li>
					<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#gar">Гарантии безопасности</a></li>
					<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#js-opl">Оплата и доставка</a></li>
					<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#sertificat">Сертификаты</a></li>
				</ul>
			</div>
			<div class="clear"></div>	
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- section_view-dd -->

<!-- Меню для мобильных устройств -->
<div class="anz-menu hidden-lg hidden-md">
	<input type="checkbox" id="check_1" class=""/>
	<label class="anz-menu-ch " for="check_1"><i class="fa fa-bars" aria-hidden="true"></i><img src="img/ico.png"></label>
	<div class="anz-perspective">
		<div class="menu-list-pressed">
			<label class="anz-menu-ch1" for="check_1"><i class="fa fa-times" aria-hidden="true"></i><img src="img/kres.png"></label>
			<ul class="main-menu main-menu_position main-menu-dd" id="js-nav2">
				<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#js-clock">Модели</a></li>
				<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#gar">Гарантии безопасности</a></li>
				<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#js-opl">Оплата и доставка</a></li>
				<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#sertificat">Сертификаты</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- Шапка для мобильных устройств -->
<section class="section section_view_mobile-dd">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="dd-section_view_mobile-img-dd">
					<img src="img/watch.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Контент для мобильных устройств -->
<section class="section section_view_mobile-content-dd">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="dd-content-mobile">
					<span>Часы премиум класса<br>со скидкой 50%</span><br>
					<span class="dd-span2">27980 тенге</span><span class="dd-span3">13990 тенге</span><br>
					<a href="#" id="js-started-mob" class="button-dd">выбрать часы</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Контент для декстопа -->
<section class="section section_view_dekstop-content">
	<div class="container dd-relative">
		<div class="row">
			<div class="col-md-12">
				<div class="dd-logo">
					<img src="img/logo.png" alt="">
				</div>
				<div class="dd-header-txt">
					<span>Часы премиум класса<br>со скидкой 50%</span><br>
					<span class="span1">27 980 тенге</span><span class="span2">13 990 <span>тенге</span></span>
				</div>
				<div class="dd-portmone2">
					<img src="img/p.png" alt="">
				</div>
				<div class="dd-big-watch">
					<img src="img/time.png" alt="">
				</div>
				<!-- Таймер -->

				<div class="dd-timer-all-wrap">
					<div class="dd-line"><img src="img/line2.png" alt=""></div>
					<div class="dd-timer">
						<div class="dd-times">
							<div class="dd-div m-left">
								<span id="dd-hours">14</span>
							</div>
							<div class="dd-div">
								<span id="dd-min">17</span>
							</div>
							<div class="dd-div">
								<span id="dd-sec">14</span>
							</div>
							<div class="dd-time-txt">
								<span>часов</span>
							</div>
							<div class="dd-time-txt dd-time-txt2">
								<span>минут</span>
							</div>
							<div class="dd-time-txt dd-time-txt3">
								<span>секунд</span>
							</div>
						</div>
					</div>
					<div class="dd-header-button">
						<a class="button-1 m-top" id="js-started" href="#">выбрать часы</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Таймер -->
<script>
	var count = 8;
	var minutes = 17;
	var hours = 2;

	var end = 0;

	if (count < 10) {
		$("#dd-sec").html('0'+count);
	}
	else {
		$("#dd-sec").html(count);
	}
	if (minutes < 10) {
		$("#dd-min").html('0'+minutes);
	}
	else {
		$("#dd-min").html(minutes);
	}
	if (hours < 10) {
		$("#dd-hours").html('0'+hours);
	}
	else {
		$("#dd-hours").html(hours);
	}

	var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

	function timer()
	{
		count = count - 1;
		if (count<10) {
			$("#dd-sec").html('0'+count);
		} else {
			$("#dd-sec").html(count);
		}
		if (count == 0) {
			minutes = minutes - 1;
			if (minutes < 10 && minutes >= 0) {
				$("#dd-min").html('0'+minutes);
			}
			if (minutes > 10) {
				$("#dd-min").html(minutes);
			}
			if (minutes < 0) {
				hours = hours - 1;
				if (hours < 10 && hours >=0) {
					$("#dd-hours").html('0'+hours);
				}
				if (hours>10) {
					$("#dd-hours").html('0'+hours);
				}
				if (hours < 0 ) {
					
					end = 1;
					clearTimeout(counter);
				}
				if (end) { minutes = '00';}
				else {
					minutes = 59;
				}
				$("#dd-min").html(minutes);
			}
			if (end) { count = '00';}
			else {
				count = 59;
			}
			
			$("#dd-sec").html(count);
		}
	}
</script>

<!-- Фиксация меню -->
<script>
	function navigation_scroll(){
		var offset = $('.anz-menu').height() || $(window).height() || 150;
		var scroll = $(document).scrollTop();
		if (scroll < 1) {
			$('.anz-menu')
			.toggleClass('header-no-fixed', false)
			.toggleClass('header-fixed', false);
		}     
		else if (scroll >= offset) {
			$('.anz-menu,')
			.toggleClass('header-no-fixed', false)
			.toggleClass('header-fixed', true);

		}
		else if (scroll < offset - 1) {
			$('.anz-menu')
			.toggleClass('header-fixed', true)
			.toggleClass('header-no-fixed', false);
		}
	}
	$(document).scroll(function(){
		navigation_scroll();
	});
</script>