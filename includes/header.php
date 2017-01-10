<section class="section section_view-dd section_padding-dd hidden-xs hidden-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="main-menu main-menu_position">
					<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#">Модели</a></li>
					<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#">Гарантии безопасности</a></li>
					<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#">Оплата и доставка</a></li>
					<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#">Сертификаты</a></li>
				</ul>
			</div>
			<div class="clear"></div>	
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- section_view-dd -->


<div class="anz-menu hidden-lg hidden-md">
	<input type="checkbox" id="check_1" class=""/>
	<label class="anz-menu-ch " for="check_1"><i class="fa fa-bars" aria-hidden="true"></i><img src="img/ico.png"></label>
	<div class="anz-perspective">
		<div class="menu-list-pressed">
			<label class="anz-menu-ch1" for="check_1"><i class="fa fa-times" aria-hidden="true"></i><img src="img/kres.png"></label>
			<ul class="main-menu main-menu_position main-menu-dd">
				<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#">Модели</a></li>
				<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#">Гарантии безопасности</a></li>
				<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#">Оплата и доставка</a></li>
				<li class="main-menu__item main-menu__item_view"><a class="main-menu__link main-menu__link_view" href="#">Сертификаты</a></li>
			</ul>
		</div>
	</div>
</div>
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