<section class="section section_padding">
	<div class="container df-container">
		<div class="clear"></div>

		<div class="df-slider df-slider_view">
			<div id="slider-df">
				<div class="item">
					<div class="df-slider__image df-slider__image_view">
						<img src="img/df-sl-1.png" alt="" class="img-responsive">
					</div>
				</div>
				<div class="item">
					<div class="df-slider__image df-slider__image_view">
						<img src="img/df-sl-2.png" alt="" class="img-responsive">
					</div>
				</div>
				<div class="item">
					<div class="df-slider__image df-slider__image_view">
						<img src="img/df-sl-3.png" alt="" class="img-responsive">
					</div>
				</div>
				<div class="item">
					<div class="df-slider__image df-slider__image_view">
						<img src="img/df-sl-1.png" alt="" class="img-responsive">
					</div>
				</div>
				<div class="item">
					<div class="df-slider__image df-slider__image_view">
						<img src="img/df-sl-2.png" alt="" class="img-responsive">
					</div>
				</div>
				<div class="item">
					<div class="df-slider__image df-slider__image_view">
						<img src="img/df-sl-3.png" alt="" class="img-responsive">
					</div>
				</div>
				<div class="item">
					<div class="df-slider__image df-slider__image_view">
						<img src="img/df-sl-1.png" alt="" class="img-responsive">
					</div>
				</div>
				<div class="item">
					<div class="df-slider__image df-slider__image_view">
						<img src="img/df-sl-2.png" alt="" class="img-responsive">
					</div>
				</div>
				<div class="item">
					<div class="df-slider__image df-slider__image_view">
						<img src="img/df-sl-3.png" alt="" class="img-responsive">
					</div>
				</div>				
			</div>	
			
				
		</div>

	</div>
</section>	
<script>

	var owl = $("#slider-df");

    owl.owlCarousel({

        loop:true,//Зацикливаем слайдер
        nav:true, //Навигация включена
        autoplay:false,//автозапуск
        smartSpeed:1000,//Время движения
        margin:0,    
        navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
        responsive:{
            0:{
              items:1
          },
          768:{
          	items:2
          },       
          1000:{
              items:3
          },
          1248:{
              items:3
          }
      }

  });

	 
</script>	