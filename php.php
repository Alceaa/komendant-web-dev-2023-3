<!doctype html>
<html lang="ru">
    <head>
	    <div class="header">
			<title><?php require 'title.php'; ?></title>
			<div class="header-item" id="title-item">
				<div class="nav-title"><h1>Использование php</h1></div>
			</div>
			<div class="header-item">
				<div class="nav">
					<ul class="nav-ul">
						<li>
							<a href="<?php	
								echo 'index.php';
							?>" class="<?php
								echo 'nav-button">Динамический контент';
							?></a>
						</li>
						<li>
							<a href="<?php	
								echo 'php.php';
							?>" class="<?php
								echo 'nav-button">Использование php';
							?></a>
						</li>
						<li>
							<a href="<?php	
								echo 'js.php';
							?>" class="<?php
								echo 'nav-button">Использование js';
							?></a>
						</li>
					</ul>
				</div>
			</div>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<link rel="stylesheet" href="php.css"/>
			<link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
		</div>
	</head>
	<body>
		<div class="advantages">
			<h2>Преимущества использования PHP</h2>
			<ul class="php-ul">
				<?
				include ("php_advantages.php");
				?>
			</ul>
		</div>
		<div class="disadvantages">
			<h2>Недостатки использования PHP</h2>
			<ul class="php-ul">
				<?
				include ("php_disadvantages.php");
				?>
			</ul>
		</div>
	</body>
	<footer>
	    <div class="footer-container">
		    <div class="footer-item">
			    <h3>О сайте</h3>
				<a>Данная страница является результатом третьей лабораторной работой (Веб-технологии)</a>
				<p>
				<?
				include ("data.php");
				?>
				</p>			
			</div>
			<div class="footer-item">
			    <h3>Контакты</h3>
			    <ul class="footer-ul">
				    <li><a href="">maks.komendant@yandex.ru</a></li>
					<li><a>+79259257991</a>	</li>
				</ul>
			</div>
		</div>
	</footer>
</html>