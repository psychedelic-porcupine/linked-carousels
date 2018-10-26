<!DOCTYPE html>
<html lang="en">
  <head>		
		<meta charset="utf-8">		
		<title>Linked Carousel Demo</title>
		<meta name="author" content="Porcupine Web Design">
		<meta name="description" content="Porcupine Web Design - Linked Carousel Demo">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">			
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style>
			.carousel{
				width: 870px;
				margin: 20px auto
			}
		</style>
  </head>

  <body>	
		<div class="container">			
			<h1>Linked Carousel Demo</h1>
			<hr>
			
			<div id="CarouselA" class="carousel slide">
				<div class="carousel-inner">
					<div class="item">
					<img src="img/01.jpg" alt="1">
					</div>
					<div class="item active">
					<img src="img/02.jpg" alt="2">
					</div>
					<div class="item">
					<img src="img/03.jpg" alt="3">
					</div>
				</div>
			</div>
			
			<div id="CarouselB" class="carousel slide">
				<div class="carousel-inner">
					<div class="item">
					<img src="img/01.jpg" alt="1">
					</div>
					<div class="item active">
					<img src="img/02.jpg" alt="2">
					</div>
					<div class="item">
					<img src="img/03.jpg" alt="3">
					</div>
				</div>
			</div>
		</div>
  </body>
</html>

<script>
	$.ready(function(){
		$('#CarouselA').carousel({
			interval: 2000
		});

		$('#CarouselB').carousel('pause');

		var i = 0;

		$('#CarouselA').on('slide', function (e) {
			i++;
			if(i == 3){
				$('#CarouselB').carousel('next');
				i = 0;
			}
		});
	});
</script>