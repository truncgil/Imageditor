
<?php $stickers = '[
					{
						name: "TurkiyePNG",
						items: 9,
						type: "png",
						thumbnailUrl: "images/ui/turkey.svg"
					},
					{
						name: "TurkiyeSVG",
						items: 2,
						type: "svg",
						thumbnailUrl: "images/ui/turkey.svg"
					},
					{
						name: "Islami",
						items: 13,
						type: "png",
						thumbnailUrl: "images/stickers/Islami/0.png"
					},
					{
						name: "Truncgil",
						items: 7,
						type: "svg",
						thumbnailUrl: "images/ui/truncgil.svg"
					}
				]'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Trunçgil Imageditor - Ücretsiz Resim Düzenleme Programı</title>
	<meta name="title" content="Trunçgil Imageditor">
	<meta name="description" content="Ücretsiz resim düzenleme uygulaması ile resimlerinizi birleştirin, efekt verin, üzerine yazı yazın, şekiller çizin ve kaydedin. Tamamen ücretsiz.">
	<meta name="keywords" content="ücretsiz, resim, düzenleme, uygulaması, resim birleştirme, resim üzerine yazı yazma, resme efekt verme, fotoğrafa efet verme, emoji efekti verme, caps hazırlama">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Turkish">
	<meta name="revisit-after" content="30 days">
	<meta name="author" content="Truncgil Teknoloji">

    <link rel="stylesheet" href="styles.min.css?v36">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
	  <meta name="google-site-verification" content="f1M6GQLxVA5g7IaVY6kMQCoIrgADR6HjrOZu79CrXYc" />
	<link rel="manifest" href="site.webmanifest">
	<style>
		body, html {
			margin: 0;
			width: 100%;
			height: 100%;
		}
		@media screen and (max-width:768px) {
			.logo {
				display:block;
				margin: 0 auto;
			}
			text-drawer.controls-drawer .add-text-button-wrapper {
				position: absolute;
				top: 56px !important;
				right: -17px;
			}
			.right-nav {
				display:none;
			}
		}
		truncgil-editor {
			height: calc(100% - 65px) !important; 
		}
		header {
			color:white;
		}
		.right-nav {
			float:right;
		}
		.right-nav button {
			height: 58px;
		}
		.right-nav button .material-icons {
			margin: 8px 0;
		}
		.right-nav button .mat-button-wrapper {
			padding: 2px;
			display: block;
			float: right;
		}
	</style>
	<script>
		   if ('serviceWorker' in navigator) {
				navigator.serviceWorker.register("serviceworker.js");
			}

	</script>
</head>
<body>
<header style="    background: linear-gradient(180deg, #262626, #1d1d1d);padding:5px 0;">
	<img src="logo2.svg" class="logo" style="padding:5px;border-radius:30px;height:40px" height="50" alt="">
	<div class="right-nav">
		<button mat-raised-button="" title="Çalışmayı kaydet"  onclick="saveState()" class="mat-focus-indicator mat-button mat-button-base ng-star-inserted">
			<span class="material-icons">
				sync
				</span>
				
			<span
				class="mat-button-wrapper save-state"></span>
		</button>
		<button mat-raised-button="" title="Çalışmayı sıfırla" onclick="reset()" class="mat-focus-indicator mat-button mat-button-base ng-star-inserted">
			<span class="material-icons">
				delete_forever
				</span>
				
			<span
				class="mat-button-wrapper"></span>
		</button>
		
		<button mat-raised-button="" title="Çalışma dosyasını indir (.json)" onclick="saveFile()" class="mat-focus-indicator mat-button mat-button-base ng-star-inserted">
			<span class="material-icons">
				save
				</span>
				
			<span
				class="mat-button-wrapper"></span>
		</button>
		<button mat-raised-button="" title="Karanlık Mod Aç/Kapa" onclick="darkMode()" class="mat-focus-indicator mat-button mat-button-base ng-star-inserted">
			<span class="material-icons">
				dark_mode
				</span>
				
			<span
				class="mat-button-wrapper"></span>
		</button>
		
	</div>
</header>
<truncgil-editor >
	<div class="global-spinner">
		<style>
			.global-spinner {
				display: block;
				align-items: center;
				justify-content: center;
				z-index: 999;
				background: #fff;
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
			}
		
			.la-ball-spin-clockwise,
			.la-ball-spin-clockwise>div {
				position: relative;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box
			}

			.la-ball-spin-clockwise {
				display: block;
				font-size: 0;
				color: #1976d2
			}

			.la-ball-spin-clockwise.la-dark {
				color: #333
			}

			.la-ball-spin-clockwise>div {
				display: inline-block;
				float: none;
				background-color: currentColor;
				border: 0 solid currentColor
			}

			.la-ball-spin-clockwise {
				width: 32px;
				height: 32px
			}

			.la-ball-spin-clockwise>div {
				position: absolute;
				top: 50%;
				left: 50%;
				width: 8px;
				height: 8px;
				margin-top: -4px;
				margin-left: -4px;
				border-radius: 100%;
				-webkit-animation: ball-spin-clockwise 1s infinite ease-in-out;
				-moz-animation: ball-spin-clockwise 1s infinite ease-in-out;
				-o-animation: ball-spin-clockwise 1s infinite ease-in-out;
				animation: ball-spin-clockwise 1s infinite ease-in-out
			}

			.la-ball-spin-clockwise>div:nth-child(1) {
				top: 5%;
				left: 50%;
				-webkit-animation-delay: -.875s;
				-moz-animation-delay: -.875s;
				-o-animation-delay: -.875s;
				animation-delay: -.875s
			}

			.la-ball-spin-clockwise>div:nth-child(2) {
				top: 18.1801948466%;
				left: 81.8198051534%;
				-webkit-animation-delay: -.75s;
				-moz-animation-delay: -.75s;
				-o-animation-delay: -.75s;
				animation-delay: -.75s
			}

			.la-ball-spin-clockwise>div:nth-child(3) {
				top: 50%;
				left: 95%;
				-webkit-animation-delay: -.625s;
				-moz-animation-delay: -.625s;
				-o-animation-delay: -.625s;
				animation-delay: -.625s
			}

			.la-ball-spin-clockwise>div:nth-child(4) {
				top: 81.8198051534%;
				left: 81.8198051534%;
				-webkit-animation-delay: -.5s;
				-moz-animation-delay: -.5s;
				-o-animation-delay: -.5s;
				animation-delay: -.5s
			}

			.la-ball-spin-clockwise>div:nth-child(5) {
				top: 94.9999999966%;
				left: 50.0000000005%;
				-webkit-animation-delay: -.375s;
				-moz-animation-delay: -.375s;
				-o-animation-delay: -.375s;
				animation-delay: -.375s
			}

			.la-ball-spin-clockwise>div:nth-child(6) {
				top: 81.8198046966%;
				left: 18.1801949248%;
				-webkit-animation-delay: -.25s;
				-moz-animation-delay: -.25s;
				-o-animation-delay: -.25s;
				animation-delay: -.25s
			}

			.la-ball-spin-clockwise>div:nth-child(7) {
				top: 49.9999750815%;
				left: 5.0000051215%;
				-webkit-animation-delay: -.125s;
				-moz-animation-delay: -.125s;
				-o-animation-delay: -.125s;
				animation-delay: -.125s
			}

			.la-ball-spin-clockwise>div:nth-child(8) {
				top: 18.179464974%;
				left: 18.1803700518%;
				-webkit-animation-delay: 0s;
				-moz-animation-delay: 0s;
				-o-animation-delay: 0s;
				animation-delay: 0s
			}

			.la-ball-spin-clockwise.la-sm {
				width: 16px;
				height: 16px
			}

			.la-ball-spin-clockwise.la-sm>div {
				width: 4px;
				height: 4px;
				margin-top: -2px;
				margin-left: -2px
			}

			.la-ball-spin-clockwise.la-2x {
				width: 64px;
				height: 64px
			}

			.la-ball-spin-clockwise.la-2x>div {
				width: 16px;
				height: 16px;
				margin-top: -8px;
				margin-left: -8px
			}

			.la-ball-spin-clockwise.la-3x {
				width: 96px;
				height: 96px
			}

			.la-ball-spin-clockwise.la-3x>div {
				width: 24px;
				height: 24px;
				margin-top: -12px;
				margin-left: -12px
			}

			@-webkit-keyframes ball-spin-clockwise {

				0%,
				100% {
					opacity: 1;
					-webkit-transform: scale(1);
					transform: scale(1)
				}

				20% {
					opacity: 1
				}

				80% {
					opacity: 0;
					-webkit-transform: scale(0);
					transform: scale(0)
				}
			}

			@-moz-keyframes ball-spin-clockwise {

				0%,
				100% {
					opacity: 1;
					-moz-transform: scale(1);
					transform: scale(1)
				}

				20% {
					opacity: 1
				}

				80% {
					opacity: 0;
					-moz-transform: scale(0);
					transform: scale(0)
				}
			}

			@-o-keyframes ball-spin-clockwise {

				0%,
				100% {
					opacity: 1;
					-o-transform: scale(1);
					transform: scale(1)
				}

				20% {
					opacity: 1
				}

				80% {
					opacity: 0;
					-o-transform: scale(0);
					transform: scale(0)
				}
			}

			@keyframes ball-spin-clockwise {

				0%,
				100% {
					opacity: 1;
					-webkit-transform: scale(1);
					-moz-transform: scale(1);
					-o-transform: scale(1);
					transform: scale(1)
				}

				20% {
					opacity: 1
				}

				80% {
					opacity: 0;
					-webkit-transform: scale(0);
					-moz-transform: scale(0);
					-o-transform: scale(0);
					transform: scale(0)
				}
			}
			.logo svg {
				display:block;
				margin:0 auto;
				width:300px !important;
			}
			
			
		</style>
		<div class="logo">
				<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
				viewBox="0 0 984.23 797.99"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
				<g id="Layer_x0020_1">
				<metadata id="CorelCorpID_0Corel-Layer"/>
				<path fill="#252B3C" fill-rule="nonzero" d="M33.88 750.96l-31.99 0 0 -119.38 47.21 0 -15.22 119.38zm-33.88 -150.21c0,-4.75 1.58,-8.71 4.79,-11.8 3.2,-3.09 7.57,-4.64 13.11,-4.64 5.43,0 9.76,1.55 13,4.64 3.24,3.09 4.86,7.05 4.86,11.8 0,4.86 -1.62,8.86 -4.9,11.95 -3.28,3.09 -7.61,4.64 -12.97,4.64 -5.39,0 -9.72,-1.55 -13,-4.64 -3.28,-3.09 -4.9,-7.08 -4.9,-11.95zm79.02 30.83l0.98 13.3c8.48,-10.36 19.94,-15.56 34.37,-15.56 15.37,0 25.93,6.07 31.65,18.2 8.4,-12.13 20.35,-18.2 35.91,-18.2 12.93,0 22.57,3.77 28.9,11.31 6.33,7.54 9.5,18.92 9.5,34.07l0 76.27 -32.03 0 0 -76.31c0,-6.78 -1.32,-11.72 -3.96,-14.85 -2.64,-3.13 -7.31,-4.71 -14.02,-4.71 -9.57,0 -16.2,4.56 -19.9,13.72l0.11 82.15 -31.88 0 0 -76.2c0,-6.93 -1.36,-11.95 -4.11,-15.04 -2.71,-3.09 -7.35,-4.64 -13.91,-4.64 -9.04,0 -15.6,3.77 -19.63,11.27l0 84.6 -31.92 0 0 -119.38 29.92 0zm223.87 119.38c-1.47,-2.86 -2.52,-6.41 -3.2,-10.66 -7.73,8.63 -17.79,12.93 -30.15,12.93 -11.68,0 -21.4,-3.39 -29.09,-10.17 -7.69,-6.78 -11.53,-15.34 -11.53,-25.66 0,-12.66 4.71,-22.38 14.1,-29.17 9.38,-6.78 22.95,-10.21 40.66,-10.29l14.7 0 0 -6.78c0,-5.5 -1.43,-9.88 -4.26,-13.15 -2.83,-3.28 -7.31,-4.94 -13.41,-4.94 -5.35,0 -9.57,1.28 -12.62,3.81 -3.05,2.53 -4.6,6.03 -4.6,10.44l-31.88 0c0,-6.9 2.11,-13.3 6.37,-19.14 4.29,-5.88 10.32,-10.48 18.12,-13.83 7.8,-3.35 16.54,-5.01 26.27,-5.01 14.73,0 26.42,3.69 35.05,11.08 8.67,7.42 13,17.79 13,31.2l0 51.78c0.08,11.3 1.66,19.9 4.75,25.7l0 1.89 -32.26 0zm-26.38 -22.16c4.71,0 9.04,-1.05 13.04,-3.13 3.96,-2.11 6.9,-4.94 8.82,-8.44l0 -20.54 -11.91 0c-15.98,0 -24.49,5.5 -25.51,16.54l-0.11 1.88c0,3.96 1.39,7.24 4.18,9.84 2.79,2.56 6.63,3.85 11.49,3.85zm62.66 -38.4c0,-18.35 4.33,-33.12 13.07,-44.31 8.71,-11.19 20.46,-16.77 35.27,-16.77 13.12,0 23.29,4.52 30.56,13.53l1.36 -11.27 28.91 0 0 115.43c0,10.44 -2.37,19.52 -7.12,27.25 -4.75,7.72 -11.42,13.64 -20.05,17.67 -8.59,4.03 -18.69,6.07 -30.22,6.07 -8.78,0 -17.3,-1.73 -25.62,-5.24 -8.33,-3.5 -14.62,-7.99 -18.88,-13.49l14.13 -19.41c7.95,8.86 17.6,13.26 28.94,13.26 8.44,0 15.04,-2.26 19.75,-6.78 4.71,-4.52 7.08,-10.89 7.08,-19.22l0 -6.37c-7.39,8.33 -17.07,12.47 -29.05,12.47 -14.36,0 -25.97,-5.62 -34.82,-16.85 -8.89,-11.23 -13.3,-26.12 -13.3,-44.66l0 -1.32zm55.96 2.26c0,10.85 -21.9,19.37 -17.56,25.51 4.37,6.18 10.32,9.27 17.9,9.27 9.72,0 16.66,-3.66 20.88,-10.97l0 -50.42c-4.29,-7.31 -11.15,-10.97 -20.65,-10.97 -7.65,0 -13.68,3.13 -18.05,9.42 -4.37,6.29 17.49,15.64 17.49,28.15zm121.64 60.56c-17.52,0 -31.81,-5.39 -42.81,-16.13 -11,-10.74 -16.5,-25.06 -16.5,-42.96l0 -3.09c0,-11.98 2.33,-22.72 6.97,-32.18 4.64,-9.46 11.19,-16.77 19.71,-21.86 8.52,-5.12 18.2,-7.69 29.09,-7.69 16.35,0 29.21,5.16 38.59,15.45 9.38,10.32 14.06,24.95 14.06,43.86l0 13.04 -76.05 0c1.02,7.8 4.14,14.02 9.31,18.73 5.2,4.71 11.76,7.05 19.71,7.05 12.32,0 21.89,-4.45 28.83,-13.3l15.68 17.56c-4.79,6.75 -11.27,12.06 -19.44,15.83 -8.14,3.81 -17.22,5.69 -27.13,5.69zm-3.66 -98.13c-6.33,0 -11.46,2.15 -15.41,6.44 -3.92,4.3 -6.44,10.44 -7.54,18.43l44.36 0 0 -2.56c-0.15,-7.08 -2.03,-12.59 -5.73,-16.47 -3.69,-3.88 -8.89,-5.84 -15.68,-5.84zm54.67 35.31c0,-18.65 4.18,-33.46 12.51,-44.5 8.37,-11.04 19.79,-16.58 34.29,-16.58 11.65,0 21.25,4.33 28.83,13.04l0 -60.97 32 0 0 169.58 -28.79 0 -1.55 -12.7c-7.95,9.99 -18.2,14.96 -30.71,14.96 -14.06,0 -25.32,-5.54 -33.84,-16.62 -8.48,-11.08 -12.74,-26.49 -12.74,-46.2zm51 0.67c0,11.23 -17.14,21.41 -13.24,27.41 3.89,5.98 9.57,8.97 17,8.97 9.87,0 16.81,-4.18 20.88,-12.51l0 -47.33c-3.99,-8.33 -10.85,-12.51 -20.65,-12.51 -9.11,0 -15.53,4.4 -19.24,13.2 -2.55,6.04 15.26,12.58 15.26,22.78zm103.95 59.89l-31.99 0 -15.33 -119.38 47.32 0 0 119.38zm-31.84 -130.94c0,-4.75 1.59,-8.71 4.79,-11.8 3.2,-3.09 7.57,-4.64 13.11,-4.64 5.43,0 9.76,1.55 13,4.64 3.24,3.09 4.86,7.05 4.86,11.8 0,4.86 -1.62,8.86 -4.9,11.95 -3.28,3.09 -7.61,4.64 -12.97,4.64 -5.39,0 -9.72,-1.55 -13,-4.64 -3.28,-3.09 -4.9,-7.08 -4.9,-11.95zm85.23 -17.83l0 29.39 20.42 0 0 23.51 -20.42 0 0 59.54c0,4.41 0.87,7.57 2.56,9.5 1.7,1.92 4.94,2.86 9.72,2.86 3.5,0 6.63,-0.26 9.38,-0.75l0 24.12c-6.26,1.92 -12.7,2.87 -19.33,2.87 -22.38,0 -33.8,-11.27 -34.22,-33.84l0 -64.29 -17.45 0 0 -23.51 17.45 0 0 -29.39 31.88 0zm18.72 87.99c0,-11.87 2.3,-22.42 6.86,-31.69 4.56,-9.27 11.11,-16.47 19.71,-21.55 8.55,-5.09 18.5,-7.61 29.85,-7.61 16.13,0 29.28,4.94 39.49,14.81 10.17,9.84 15.87,23.25 17.04,40.17l0.22 8.18c0,18.35 -5.12,33.05 -15.34,44.13 -10.25,11.08 -23.97,16.62 -41.19,16.62 -17.22,0 -30.98,-5.54 -41.23,-16.58 -10.29,-11.04 -15.41,-26.04 -15.41,-45.03l0 -1.43zm31.92 2.26c0,11.34 2.11,20.01 6.4,26 4.26,5.99 10.36,9.01 18.31,9.01 7.73,0 13.76,-2.98 18.09,-8.9 4.37,-5.92 6.52,-15.41 6.52,-28.45 0,-11.11 -2.15,-19.75 -6.52,-25.85 -4.33,-6.1 -10.44,-9.16 -18.31,-9.16 -7.8,0 -13.83,3.05 -18.09,9.12 -4.29,6.07 -6.4,15.49 -6.4,28.22zm15.95 -69.39c0,3.92 -1.42,7.26 -4.3,9.95 -2.88,2.69 -6.56,4.03 -11.04,4.03 -4.56,0 -8.24,-1.37 -11.04,-4.11 -2.78,-2.72 -4.22,-6.03 -4.22,-9.87 0,-3.81 1.43,-7.13 4.22,-9.91 2.78,-2.76 6.48,-4.14 11.04,-4.14 4.56,0 8.27,1.39 11.08,4.14 2.83,2.77 4.26,6.1 4.26,9.91zm13.4 -0.41c0,-3.96 1.51,-7.31 4.48,-9.99 2.98,-2.68 6.6,-4.03 10.85,-4.03 4.37,0 8,1.35 10.89,4.07 2.91,2.74 4.37,6.03 4.37,9.95 0,3.84 -1.4,7.11 -4.22,9.87 -2.8,2.74 -6.44,4.14 -11.04,4.14 -4.56,0 -8.25,-1.39 -11.08,-4.14 -2.83,-2.75 -4.26,-6.03 -4.26,-9.87zm127.64 38.75c-4.33,-0.57 -8.14,-0.87 -11.46,-0.87 -12.09,0 -20.01,4.07 -23.74,12.25l0 78.2 -31.92 0 0 -119.38 30.15 0 0.87 14.17c6.41,-10.97 15.3,-16.43 26.6,-16.43 3.54,0 6.86,0.49 9.95,1.43l-0.45 30.64z"/>
				<g id="_2597571416688">
				<path fill="black" fill-rule="nonzero" d="M27.35 529.71l70.46 0 0 9.51 -34.19 0 0 65.13 -10.72 0 0 -65.13 -25.55 0 0 -9.51 0 0zm52.23 25.57l0 11.25 0.55 -0.86c4.79,-7.5 9.38,-10.4 14.07,-10.4 3.66,0 7.49,0.89 11.47,4.59l-5.12 8.52c-3.39,-3.19 -6.52,-4.79 -9.39,-4.79 -3.13,0 -5.85,1.49 -8.14,4.48 -2.29,2.99 -3.44,6.52 -3.44,10.62l0 25.66 -9.76 0 0 -49.08 9.76 0 0 0zm49.72 49.08l0 -6.25c-2.08,2.24 -4.43,3.99 -7.07,5.23 -2.66,1.26 -5.3,1.87 -7.94,1.87 -3.08,0 -5.94,-0.78 -8.56,-2.33 -2.6,-1.55 -4.59,-3.64 -5.92,-6.28 -1.33,-2.66 -2,-7.05 -2,-13.2l0 -28.12 9.7 0 0 28.01c0,5.15 0.75,8.76 2.22,10.8 1.48,2.04 4.06,3.06 7.76,3.06 4.63,0 8.56,-2.26 11.8,-6.77l0 -35.09 9.7 0 0 49.08 -9.7 0 0 0zm9.91 -49.08l0 6.23c4.33,-4.79 9.27,-6.23 14.78,-6.23 3.06,0 5.9,-0.18 8.52,1.4 2.64,1.59 4.64,3.75 6.01,6.52 1.36,2.75 2.06,7.12 2.06,13.09l0 28.06 -9.7 0 0 -27.95c0,-5.03 -0.76,-8.6 -2.29,-10.74 -1.53,-2.17 -4.1,-3.24 -7.69,-3.24 -4.59,0 -8.48,2.29 -11.69,6.88l0 35.06 -9.93 0 0 -49.08 9.93 0 0 0zm55.6 49.93l-0.25 0.91c1.91,0.45 3.42,1.35 4.5,2.66 1.09,1.31 1.62,2.8 1.62,4.48 0,2.71 -1.08,5.01 -3.24,6.92 -2.17,1.89 -5.65,2.84 -10.42,2.84 -1.31,0 -2.46,-0.07 -3.46,-0.26l0 -6.03c1.82,0.13 2.95,0.2 3.42,0.2 2.02,0 3.61,-0.38 4.73,-1.16 0.67,-0.46 1.02,-1.07 1.02,-1.82 0,-0.86 -0.37,-1.57 -1.09,-2.13 -0.73,-0.56 -2.08,-0.85 -4.02,-0.85 -0.4,0 -0.8,0.05 -1.24,0.16l2.35 -6.56c-4.63,-1.04 -8.85,-3.46 -12.69,-7.28 -3.84,-3.82 -5.76,-9.56 -5.76,-17.21 0,-7.72 2.23,-13.95 6.67,-18.66 4.45,-4.73 10.29,-6.14 17.55,-6.14 6.53,0 7.83,-0.41 14.24,2.44l0 10.36c-4.92,-3.13 -9.47,-4.7 -13.66,-4.7 -4.37,0 -7.97,1.53 -10.78,4.61 -2.8,3.08 -4.21,7.01 -4.21,11.76 0,5.03 1.51,9.02 4.55,11.96 3.04,2.95 7.14,4.43 12.29,4.43 3.73,0 8.03,-1.09 12.86,-3.26l0 9.6c-4.86,1.82 -9.63,2.73 -14.3,2.73l-0.69 0 0 0z"/>
				<path fill="black" fill-rule="nonzero" d="M209.38 572.23c0,-5.23 1.91,-9.36 5.73,-12.4 3.82,-3.04 9.05,-4.55 15.66,-4.55l20.21 0 0 7.58 -9.92 0c1.93,1.95 3.26,3.73 4.01,5.33 0.75,1.6 1.13,3.42 1.13,5.48 0,2.57 -0.73,5.08 -2.18,7.56 -1.46,2.48 -3.35,4.37 -5.63,5.68 -2.29,1.31 -6.06,2.37 -11.29,3.15 -3.66,0.53 -5.5,1.78 -5.5,3.79 0,1.13 0.69,2.08 2.06,2.8 1.37,0.73 3.84,1.48 7.45,2.26 6.01,1.31 9.87,2.35 11.6,3.1 1.73,0.75 3.28,1.82 4.66,3.2 2.35,2.35 3.53,5.3 3.53,8.85 0,4.66 -2.08,8.38 -6.23,11.16 -4.13,2.77 -9.69,4.15 -16.61,4.15 -7.01,0 -12.6,-1.4 -16.79,-4.19 -4.17,-2.79 -6.27,-6.54 -6.27,-11.23 0,-6.65 4.12,-10.93 12.33,-12.86 -3.28,-2.09 -4.92,-4.17 -4.92,-6.23 0,-1.56 0.71,-3 2.11,-4.28 1.4,-1.27 3.3,-2.22 5.68,-2.82 -7.23,-3.21 -10.83,-8.38 -10.83,-15.53l0 0zm18.25 -8.52c-2.62,0 -4.86,0.87 -6.72,2.66 -1.86,1.79 -2.77,3.92 -2.77,6.41 0,2.51 0.91,4.61 2.71,6.26 1.82,1.66 4.12,2.48 6.88,2.48 2.73,0 0.15,-0.83 1.99,-2.53 1.83,-1.69 2.73,-3.81 2.73,-6.32 0,-2.57 -0.91,-4.7 -2.77,-6.41 -1.86,-1.71 0.72,-2.55 -2.06,-2.55l0 0zm-2.29 42.94c-3.26,0 -5.94,0.69 -8.03,2.08 -2.08,1.38 -3.11,3.17 -3.11,5.34 0,5.06 4.55,7.58 13.66,7.58 4.3,0 7.63,-0.62 10,-1.89 2.37,-1.26 3.55,-3.04 3.55,-5.35 0,-2.28 -1.49,-4.13 -4.48,-5.57 -2.99,-1.44 -6.85,-2.17 -11.58,-2.17l0 0zm29.25 -72.02c1.6,0 2.97,0.55 4.12,1.66 1.13,1.09 1.71,2.44 1.71,4.04 0,1.56 -0.58,2.93 -1.71,4.06 -1.15,1.15 -2.51,1.71 -4.12,1.71 -1.49,0 -2.8,-0.58 -3.93,-1.73 -1.15,-1.16 -1.71,-2.51 -1.71,-4.04 0,-1.5 0.56,-2.8 1.71,-3.97 1.13,-1.15 2.44,-1.73 3.93,-1.73zm-4.79 20.65l9.7 0 0 49.08 -9.7 0 0 -49.08zm14.99 -25.46l9.71 0 0 74.53 -9.71 0 0 -74.53z"/>
				</g>
				<path fill="#252B3C" fill-rule="nonzero" d="M872.5 224.95c-32.24,-7.67 -68.11,13.96 -102.39,27.59 -26.43,10.51 -51.91,16.27 -74.05,0.19 -42.61,-30.95 -24.83,-101.72 -63.7,-137.87 -27.1,-25.21 -69.9,-26.87 -102.76,-13.01 -35.05,14.78 -61.72,44.42 -82.98,75.97 -22.95,34.06 -41.19,71.94 -48.06,112.43 -11.98,70.61 12.59,145 58.94,199.6 46.36,54.6 112.81,90.14 182.67,105.95 31.54,7.14 64.13,10.47 96.31,7.34 62.43,-6.08 122.04,-37.47 162.37,-85.52 35.07,-41.8 56.89,-98.5 57.41,-153.9 0.52,-55.64 -23.71,-124.49 -83.77,-138.77l0 0zm-255.94 61.71c-3.61,2.6 -7.88,4.45 -12.32,4.51 -13.99,0.16 -21.19,-14.5 -24.93,-25.77 -3.21,-9.65 -6.31,-18.91 -12.26,-27.28 -5.69,-8.01 -13.16,-14.38 -21.32,-19.75 -6.48,-4.26 -15.29,-8.87 -18.89,-16.03 -3.85,-7.66 -4.77,-17.09 -3.14,-25.45 1.94,-9.86 8.07,-20.75 17.06,-25.82 22.61,-12.78 44.27,8.64 54.28,27.02 1.42,2.6 2.81,5.22 4.19,7.86 5.86,11.25 11.4,22.72 17.14,34.01 3.43,6.74 6.81,13.52 9.79,20.47 1.9,4.43 4.31,9.42 4.6,14.33 0.72,12.13 -4.35,24.8 -14.2,31.9l0 0zm0 0z"/>
				<path fill="black" fill-rule="nonzero" d="M676.66 595.8c-69.86,-15.81 -136.31,-51.35 -182.67,-105.95 -46.36,-54.6 -70.92,-128.99 -58.94,-199.6 6.87,-40.49 25.11,-78.37 48.06,-112.43 21.26,-31.54 47.93,-61.19 82.98,-75.97 7.74,-3.26 16.04,-5.65 24.54,-7.09 -20.41,-3.64 -42.33,-0.79 -61.01,7.09 -35.06,14.78 -61.72,44.42 -82.98,75.97 -22.95,34.06 -41.19,71.94 -48.06,112.43 -11.98,70.61 12.58,145 58.94,199.6 46.36,54.6 112.81,90.14 182.67,105.95 29.33,6.64 59.57,9.98 89.55,7.9 -17.85,-1.17 -35.62,-3.95 -53.07,-7.9l0 0zm0 0z"/>
				<path fill="#FE4455" fill-rule="nonzero" d="M523.47 308.28c0,19.12 -15.5,34.61 -34.61,34.61 -19.11,0 -34.6,-15.49 -34.6,-34.61 0,-19.12 15.49,-34.6 34.6,-34.6 19.11,0 34.61,15.49 34.61,34.6zm0 0z"/>
				<path fill="#FF646F" fill-rule="nonzero" d="M560.96 430c0,19.11 -15.49,34.61 -34.6,34.61 -19.12,0 -34.61,-15.49 -34.61,-34.61 0,-19.11 15.49,-34.6 34.61,-34.6 19.12,0 34.6,15.49 34.6,34.6zm0 0z"/>
				<path fill="#FFD480" fill-rule="nonzero" d="M665.78 508.67c0,19.12 -15.49,34.61 -34.61,34.61 -19.11,0 -34.61,-15.49 -34.61,-34.61 0,-19.11 15.5,-34.61 34.61,-34.61 19.12,0 34.61,15.5 34.61,34.61zm0 0z"/>
				<path fill="#A5CDFF" fill-rule="nonzero" d="M805.05 514.36c0,19.11 -15.49,34.61 -34.61,34.61 -19.11,0 -34.6,-15.5 -34.6,-34.61 0,-19.11 15.49,-34.61 34.6,-34.61 19.11,0 34.61,15.49 34.61,34.61zm0 0z"/>
				<path fill="#FFD480" fill-rule="nonzero" d="M868.08 170.18c0.19,-0.01 45.35,-10.2 62.75,-25.2l3.82 -3.3c11.67,-10.07 21.15,-22.49 27.35,-36.6 10.08,-22.92 14.41,-47.57 17.72,-66.21 2.13,-12 2.68,-24.1 4.48,-36.1 0.42,-2.77 -3.12,-3.84 -4.79,-1.46 -16.75,23.79 -38.46,42.98 -65.03,55.19 -22.63,10.4 -85.29,12.36 -80.78,77.84l-0.99 38.09 35.47 -2.25zm0 0z"/>
				<path fill="gray" fill-rule="nonzero" d="M832.7 133.42l39.02 40.55c2.82,2.93 2.65,7.62 -0.38,10.33l-441.05 395.2c-6.8,6.15 -17.03,5.89 -23.06,-0.38 -6.03,-6.27 -5.88,-16.5 0.53,-23.05l414.64 -422.7c2.84,-2.89 7.5,-2.87 10.31,0.05zm0 0z"/>
				<path fill="#666666" fill-rule="nonzero" d="M444.23 556.07l401.4 -409.21 -12.94 -13.45c-2.81,-2.91 -7.47,-2.93 -10.31,-0.05l-414.64 422.7c-6.41,6.56 -6.56,16.78 -0.53,23.05 6.03,6.27 16.26,6.52 23.06,0.38l9.32 -8.35c-1,-5.2 0.53,-10.89 4.63,-15.08zm0 0z"/>
				<path fill="#F2BD5F" fill-rule="nonzero" d="M984.2 2.78c-1.8,12 -2.34,24.1 -4.47,36.09 -3.3,18.64 -7.64,43.29 -17.72,66.21 -6.2,14.11 -15.68,26.54 -27.35,36.6l-3.82 3.29c-17.39,15.02 -62.55,25.2 -62.75,25.22l-15.84 -16.46c9.51,-57.62 42.97,-28.45 73.63,-58.52 29.77,-29.2 47.32,-69.93 56.54,-95.14 1.13,0.27 2.01,1.26 1.78,2.71l0 0zm0 0z"/>
				<path fill="#B1F192" fill-rule="nonzero" d="M871.34 184.3l-30.19 27.06 -48.38 -47.78 29.64 -30.21c2.84,-2.89 7.5,-2.87 10.31,0.05l0.89 0.92 0 0.01 18.64 19.38 15.84 16.46 3.63 3.78c2.83,2.93 2.65,7.62 -0.38,10.34l0 0zm0 0z"/>
				<path fill="#A1D685" fill-rule="nonzero" d="M845.31 146.53l-11.71 -12.18 0 -0.01 -0.89 -0.92c-2.81,-2.91 -7.47,-2.94 -10.31,-0.05l-29.64 30.2 18.19 17.97 34.36 -35.02zm0 0z"/>
				</g>
				</svg>
		</div>
		<!--
		<br>
		<div class="la-ball-spin-clockwise la-2x">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>-->
	</div>
	<script>
	setTimeout(function() {
		var spinner = document.querySelector('.global-spinner');
		if (spinner) spinner.style.display = 'flex';
	}, 50);
	</script>
</truncgil-editor>
<script src="scripts.min.js?v35"></script>
<script>
	document.onpaste = function(event)
	{
		var items = event.clipboardData.items;
		console.log(JSON.stringify(items)); // will give you the mime types
		var blob = items[0].getAsFile();
		var reader = new FileReader();
		reader.onload = function(event)
		{
		
			
			//truncgil.resetAndOpenEditor({image: event.target.result});
			//truncgil.close();
			var overlay = $(".editor-overlay-container").html();
			if(overlay!="") {
				truncgil.resetAndOpenEditor({image: event.target.result});
				$(".editor-overlay-container").html("");
			} else {
				truncgil.openFile(event.target.result);
			}
			
			
		
			
			
			console.log(event.target.result)
		}; // data url  
		reader.readAsDataURL(blob); 
	}
	
	</script>  
<script>
	var state = localStorage.getItem("state");
	var dark_mode = localStorage.getItem("dark_mode");
	
	console.log(state);
    //console.log(json.canvasWidth);
    var width = 0;
    if(state!=null) {
        var json = JSON.parse(state);
        width = json.canvasWidth;
    }
	if(state!="" && width!=0) {
		var truncgil = new Truncgil({
			// ENTER CONFIGURATION HERE
			// ENTER CONFIGURATION HERE
		//	image : "logo2.svg",
			crossOrigin: true,
			baseUrl: 'https://editor.truncgil.com',
			
			ui: {
				defaultTheme: dark_mode,
				
				openImageDialog: {
            		show: false
				},
				allowEditorClose: true
			},
			tools : {
				export: {
					defaultFormat: 'png',
					defaultQuality: 0.8,
					defaultName: 'Trunçgil Editor',
				},
				stickers: {
				replaceDefault: false,
				items: <?php echo $stickers ?>
			}
			},
			onLoad: function () {
				window.postMessage('truncgilLoaded', '*');
				
					truncgil.loadState(state).then(function() {
						console.log("State is loaded");
					});
					onLoad();
				
			},
		});
	} else {
		var truncgil = new Truncgil({
			// ENTER CONFIGURATION HERE
			// ENTER CONFIGURATION HERE
		//	image : "logo2.svg",
			crossOrigin: true,
			baseUrl: 'https://editor.truncgil.com',
			ui: {
				defaultTheme: dark_mode,
				openImageDialog: {
            		show: true
				},
                
				allowEditorClose: true
			},
            tools : {
                export: {
					defaultFormat: 'png',
					defaultQuality: 0.8,
					defaultName: 'Trunçgil Editor',
				},
				stickers: {
                    replaceDefault: false,
                    items: <?php echo $stickers ?>
                }
            },
			onLoad: function () {
				window.postMessage('truncgilLoaded', '*');
				//	console.log(state);
					truncgil.loadState(state).then(function() {
						console.log("State is loaded");
					});
				// console.log(truncgil.ui.openImageDialog);
				onLoad();
				
			},
		});
	}
	function onLoad() {
		truncgil.setConfig('ui.defaultTheme', 'light');
		
	}
	function download(filename, text) {
		var element = document.createElement('a');
		element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
		element.setAttribute('download', filename);

		element.style.display = 'none';
		document.body.appendChild(element);

		element.click();

		document.body.removeChild(element);
	}
	function saveState() {
		var state = truncgil.getState();
		var json = JSON.parse(state);
		
		if(json.canvasWidth!=0) {
			localStorage.setItem('state', state);
			//console.log(json);
			//console.log(state);

			var today = new Date();
			var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
			console.log("State is saved");
			$(".save-state").html("Kaydedildi ("+time+") ");
		}
		
	}
	var interval = window.setInterval(function(){
		saveState();
	
		
		
	},3000); 
    function reset() {
        if(confirm("Çalışmayı sıfırlamak istediğinizden emin misiniz. Bu işlem geri alınamaz")) {
			clearInterval(interval);
            localStorage.removeItem("state");
            location.reload();
        }
    }
	function darkMode() {
		var dark_mode = localStorage.getItem("dark_mode");
		if(dark_mode == "dark") {
			dark_mode = "light";
		} else {
			dark_mode = "dark";
		}
		localStorage.setItem("dark_mode",dark_mode);
		location.reload();
	}
	function saveFile() {
		var state = truncgil.getState();
		//console.log(state);
		download("Truncgil Imageditor.json",state);
	}
	/*
	try {
		navigator.clipboard.write([
			new ClipboardItem({
				'image/png': pngImageBlob
			})
			
		]);
		console.log(ClipboardItem);
	} catch (error) {
		console.error(error);
	}
*/
	
	
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
	$(function(){
	setTimeout(function(){
		var dark_mode = localStorage.getItem("dark_mode");
		if(dark_mode=="dark") {
			$("open-sample-image-panel h2").prepend("<img src='logo2.svg' class='logo2'>");
		} else {
			$("open-sample-image-panel h2").prepend("<img src='logo.svg' class='logo2'>");
		}
		
	},0);
	$(document).keydown(function(e) {

	var key = undefined;
	var possible = [ e.key, e.keyIdentifier, e.keyCode, e.which ];

	while (key === undefined && possible.length > 0)
	{
	key = possible.pop();
	}

	if (key && (key == '115' || key == '83' ) && (e.ctrlKey || e.metaKey) && !(e.altKey))
	{
	e.preventDefault();
	saveState();
	//alert("Ctrl-s pressed");
	return false;
	}
	return true;
	}); 
	});
</script>

<style>
	.logo2 {
		display: block;
		margin: 20px auto;
		width: 200px;
	}
	.button-with-image { 
				background: url('assets/images/canvas-bg.png') !important;
			}
</style>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3BCV9CSK0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y3BCV9CSK0');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6048101661713069"
     crossorigin="anonymous"></script>
</body>
</html>
