<html>
	<head>
	
		<script type='text/javascript' src='jquery.js' ></script>
		<script type='text/javascript' src='app.js' ></script>
		
		<link rel='stylesheet' href='style.css' />
	
		<title>Helper ARZ fish</title>
	
	</head>
	<body>

		<div id='app' >
		
			<div id='help' >Help</div>
		
			<input type='label' id='titleFish' class='input' />
			<input type='button' id='findButton' class='input' value='Пошук' />
			<input type='button' id='clearButton' class='input' value='Очистити' />
			
			<div id='listFish' >
			
			</div>
			
		</div>
		
		<div id='copyright' style='display: none' >
			<div >ds: sam.cpp#9951</div>
			<div >tg: <a href='https://t.me/undefinedonlife' >@undefinedonlife</a></div>
		</div>
		
		<div id='infoBox' >
			<div id='bgBlack'></div>
			<div id='helpInfo' >Введіть в поле назву риби після чого натисніть кнопку ENTER.<br>
				Продовжуйте це робити поки не складете весь список.<br>
				Після цього натисніть на кнопку << Пошук >> та зачекайте 10 секунд.<br>
				Перед новим пошуком натисність кнопку << Очистити >>.
			</div>
			<div id='closeBtn'></div>
		</div>

	</body>
</html>