<?php
include 'config.php';

$sql = "SELECT * FROM products";

$stmt = $db->prepare($sql);
$stmt->execute();

$pro = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>thanhdcph04250</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div id="logo">
			<img src="images/logo.png">
			<div id="call">
				<img src="images/phone2.png">
				<h3>GIVE US A CALL</h3>
				<p>+84 462871010</p>
			</div>
		</div>
		<nav>
			<ul>
				<li><a href=""><img src="images/home.png"></a></li>
				<li><a href="">ABOUT US</a></li>
				<li><a href="">SERVICES</a></li>
				<li><a href="">PRICE LIST</a></li>
				<li><a href="">BLOG</a></li>
				<li><a href="">CONTAC US</a></li>
			</ul>
		</nav>
	</header>
	<div id="slide">
		<img src="images/banner1.jpg">
		<button id="pre"><img src="images/pre.png"></button>
		<button id="next"><img src="images/next.png"></button>
	</div>
	<main>
		<div id="title">

			<img src="images/ic.jpg">
			<div style="float: left; margin-left: 20px;">
				<h1>FPT POLYTECHNIC copyright bookcase</h1>
				<p>when an unknown printer took a galley of type</p>
			</div>
			
		</div>

		<div id="product">
			<p style="margin-left: 15px;" id="tile">product</p>
			<?php foreach($pro as $val): ?>
			<div class="proinfo">
				<a href=""><?="<img src=".'admin'."/".$val['image'].">";?></a>
				
				<h3><a href=""><?=$val['name'];?></a></h3>
				<p><?=$val['detail'];?></p>
				<h2><?=$val['price'];?>$</h2>
			</div>
			<?php endforeach?>
		</div> 
	</main>
	<div id="icon">
		<div class="icontent">
			<div class="icon">
				<h3>Ask a Librarian</h3>
				<img src="images/icon1.png">
				<h4><a href="">There are many vari-
				ations of passages</a></h4>
				<p>But Pope Francis sought to play down the importance of his invitation, saying he was not qualified to be a mediator and that proper negotiations were.</p>
				<button>READ MORE</button>
			</div>
			<div class="icon">
				<h3>Ask a Librarian</h3>
				<img src="images/icon2.png">
				<h4><a href="">There are many vari-
				ations of passages</a></h4>
				<p>But Pope Francis sought to play down the importance of his invitation, saying he was not qualified to be a mediator and that proper negotiations were.</p>
				<button>READ MORE</button>
			</div>
			<div class="icon">
				<h3>Ask a Librarian</h3>
				<img src="images/icon3.png">
				<h4><a href="">There are many vari-
				ations of passages</a></h4>
				<p>But Pope Francis sought to play down the importance of his invitation, saying he was not qualified to be a mediator and that proper negotiations were.</p>
				<button>READ MORE</button>
			</div>
			<div class="icon">
				<h3>Ask a Librarian</h3>
				<img src="images/icon4.png">
				<h4><a href="">There are many vari-
				ations of passages</a></h4>
				<p>But Pope Francis sought to play down the importance of his invitation, saying he was not qualified to be a mediator and that proper negotiations were.</p>
				<button>READ MORE</button>
			</div>
		</div>
	</div>
	<footer>
		<div id="contact">
			<div class="us">
				<h3>Recent comment</h3>
				<ul>
					<li><a href="">he Pope is under pressure to act after the UN</a></li>
					<li><a href="">he Pope is under pressure to act after the UN</a></li>
					<li><a href="">he Pope is under pressure to act after the UN</a></li>
					<li><a href="">he Pope is under pressure to act after the UN</a></li>
					<li><a href="">he Pope is under pressure to act after the UN</a></li>
				</ul>
			</div>
			<div class="us">
				<h3>top seller</h3>
				<ul>
					<li><a href="">he Pope is under pressure to act after the UN</a></li>
					<li><a href="">he Pope is under pressure to act after the UN</a></li>
					<li><a href="">he Pope is under pressure to act after the UN</a></li>
					<li><a href="">he Pope is under pressure to act after the UN</a></li>
					<li><a href="">he Pope is under pressure to act after the UN</a></li>
				</ul>
			</div>
			<div class="us">
				<h3>about us</h3>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
			</div>
			<div class="us">
				<h3>login </h3>
				<form>
				<input type="text" name="" placeholder="Username" required="">
				<input type="password" name="" placeholder="password" required="">
				<button type="submit">Login</button>
				</form>
			</div>


			
		</div>
		
	</footer>
	<div id="footer2">
	<div>
		<p>Copyright © FPT Polytechnic</p>	
		<img src="images/fullicon.png">
	</div>
		
	</div>
	<script type="text/javascript">
		window.onload = function(){
			var slide = document.querySelector('#slide img');
			var prex = document.querySelector('#pre');
			var nextx = document.querySelector('#next');
			var images = [
				'images/banner1.jpg',
				'images/banner2.jpg',
				'images/banner3.jpg',
			];
			var count = 0;

			function next(){
				count++;
				if(count == images.length) count=0;
				slide.src = images[count];
			}
			function pre(){
				count--;
				if(count <0) count=2;
				slide.src = images[count];
			}

			prex.addEventListener('click', function(){
				pre()
			});
			nextx.addEventListener('click', function(){
				next()
			});
			slide.src = images[0];
			setInterval(function(){
				next();
			},5000)


		}
	</script>
</body>
</html>