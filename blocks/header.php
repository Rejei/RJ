<!DOCTYPE HTML>
<html lang="ru-ru">
<head>
 <meta charset="utf-8">
 <title>Главная</title>
 <script src="./js/modernizr.custom.js"></script>
 <link href="./css/style.css" rel="stylesheet" type="text/css" >
 <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <?php /*
$BOMBED = array();
RecursiveFolder($HOME);
echo '<h2>These files had UTF8 BOM, but i cleaned them:</h2><p class="FOUND">';
foreach($BOMBED as $utf){
    echo $utf ."<br />\n";
}
echo '</p>'; */
?> 



<div class="header"> 
<div class="title">
<a href="index.php"><h1>Russian Imperial Stout</h1></a>
</div>
<div class="social">
<!-- SVG Sprite -->
<svg width="0" height="0" class="hidden">
  <symbol version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" id="twitter">
    <path d="M5.6 5.6L3 8.3v33.4l2.6 2.7L8.3 47h33.4l2.7-2.6 2.6-2.7V8.3l-2.6-2.7L41.7 3H8.3L5.6 5.6zm33.8.8C43.9 8.3 45 11.9 45 25c0 18.4-1.6 20-20 20S5 43.4 5 25C5 12.1 6.1 8.3 10.4 6.4c4.3-1.8 24.5-1.9 29 0z"></path>
    <path d="M25.6 15.9c-.9 1-1.6 2.3-1.6 2.9 0 1.8-1.3 1.5-5.4-1.3-2-1.4-4.3-2.5-5.1-2.5-2.2 0-1.9 9.2.4 14l1.9 4h-2.4c-3.2 0-3.1 2.8.2 4 3.8 1.5 12.1 1.2 15.4-.5 3.2-1.6 8-8 8-10.5 0-.8.7-2.8 1.5-4.4.8-1.5 1.5-3.8 1.5-5.1 0-2-.5-2.2-6.4-2.3-4.9-.1-6.7.3-8 1.7z"></path>
  </symbol>
  <symbol version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" id="facebook">
    <path d="M5.2 5.2c-1.7 1.7-1.7 37.9 0 39.6 1.7 1.7 37.9 1.7 39.6 0 1.7-1.7 1.7-37.9 0-39.6-1.7-1.7-37.9-1.7-39.6 0zm37.2 2.4C43.7 8.9 44 11.9 44 25c0 18-.4 19-7.1 19H33v-6.9c0-6.4.2-7 2.2-7.3 1.6-.2 2.4-1.2 2.9-3.6.6-3 .5-3.2-2.2-3.2-3.6 0-3.8-1.7-.4-2.6 2.1-.5 2.5-1.2 2.5-4 0-3.4 0-3.4-4.7-3.4-5.7 0-8.3 2-8.3 6.7 0 2.3-.5 3.3-1.5 3.3S22 24.1 22 26.5s.5 3.5 1.5 3.5c1.2 0 1.5 1.4 1.5 7v7h-7.9C5.8 44 6 44.4 6 25c0-13.1.3-16.1 1.6-17.4 2.3-2.4 32.5-2.4 34.8 0z"></path>
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="3 3 26 26" id="vk">
    <path d="M9.082 5A4.098 4.098 0 0 0 5 9.082v13.836A4.098 4.098 0 0 0 9.082 27h13.836A4.098 4.098 0 0 0 27 22.918V9.082A4.098 4.098 0 0 0 22.918 5zm0 2h13.836A2.07 2.07 0 0 1 25 9.082v13.836A2.07 2.07 0 0 1 22.918 25H9.082A2.069 2.069 0 0 1 7 22.918V9.082A2.07 2.07 0 0 1 9.082 7zm6.637 5.23c-.735-.007-1.36 0-1.711.172-.235.114-.414.371-.305.383.137.02.445.086.61.309.21.285.203.93.203.93s.117 1.773-.286 1.996c-.277.152-.656-.157-1.476-1.567-.418-.726-.734-1.527-.734-1.527s-.06-.149-.168-.227c-.133-.097-.317-.129-.317-.129l-1.957.012s-.293.012-.398.137c-.098.117-.008.347-.008.347s1.531 3.582 3.265 5.387C14.027 20.11 15.832 20 15.832 20h.82s.246-.027.371-.16c.118-.125.114-.36.114-.36s-.016-1.097.492-1.261c.504-.157 1.144 1.062 1.828 1.531.52.355.914.277.914.277L22.2 20s.953-.059.5-.813c-.035-.058-.262-.554-1.355-1.57-1.149-1.062-.996-.89.386-2.73.84-1.121 1.176-1.805 1.07-2.102-.1-.277-.718-.203-.718-.203l-2.059.012s-.152-.02-.265.047a.576.576 0 0 0-.18.222s-.328.867-.762 1.606c-.914 1.554-1.285 1.64-1.433 1.543-.348-.227-.262-.907-.262-1.387 0-1.512.23-2.137-.445-2.3-.223-.055-.387-.09-.957-.095z"></path>
  </symbol>
</svg>

<svg class="icon">
  <a href="#"><use xlink:href="#twitter"></use></a>
</svg>

<svg class="icon">
  <a href="#"><use xlink:href="#facebook"></use></a>
</svg>


<svg class="icon">
  <a href="#"><use xlink:href="#vk"></use></a>
</svg>

</div>
  
     <div class="menuCover">
	 	<nav class="menuBtn">
		             <div>Menu</div>
           <div><svg class="arrow" width="160" height="20" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 0 80 20 160 0" stroke="#bd8f7a" fill="transparent"></path>
</svg></div>
	   </nav>
       <ul class="submenu">
            <li><a href="index.php" class="menuValue">Главная</a></li>
            <li><a href="news.php" class="menuValue">Новости</a></li>
            <li class="subOverview"><div><a href="overview.php" class="menuValue">Обзоры</a></div></li>
			    <ul class="menuOverview">
				  <li><div class="stout"><a href="">Сухой стаут</a></div></li>
				  <li><div class="stout"><a href="">Молочный (сладкий) стаут</a></div></li>
				  <li><div class="stout"><a href="">Овсяный стаут</a></div></li>
				  <li><div class="stout"><a href="">Русский имперский стаут</a></div></li>
				  <li><div class="stout"><a href="">Шоколадный стаут</a></div></li>
				  <li><div class="stout"><a href="">Кофейный стаут</a></div></li>
				  <li><div class="stout"><a href="">Прочие интересные и не очень сорта</a></div></li>
				</ul>
			<li><a href="aboutBlog.php" class="menuValue">О блоге</a></li>
			<li><a href="callME.php" class="menuValue">Обратная связь</a></li>
        </ul>
        <div class="blockStrike">
            <div class="strike"></div>
	    </div>
	    <div class="blockStrike2">
          <div class="strike"></div>
	     </div>
		 </div>
		 <div id="searching" class="searching">
<form>
  <input class="searching-input" type="search" placeholder="Поиск по сайту" value="" name="search" id="search">
  <input class="searching-submit" type="submit">
  <span class="icon-searching"><svg id="Capa_1" x="0px" y="0px"
	 width="2em" height="2em" viewBox="0 0 310.42 310.42" style="enable-background:new 0 0 310.42 310.42;">
<g>
	<g>
		<path d="M273.587,214.965c49.11-49.111,49.109-129.021,0-178.132c-49.111-49.111-129.021-49.111-178.13,0
			C53.793,78.497,47.483,140.462,76.51,188.85c0,0,2.085,3.498-0.731,6.312c-16.065,16.064-64.263,64.263-64.263,64.263
			c-12.791,12.79-15.836,30.675-4.493,42.02l1.953,1.951c11.343,11.345,29.23,8.301,42.019-4.49c0,0,48.096-48.097,64.128-64.128
			c2.951-2.951,6.448-0.866,6.448-0.866C169.958,262.938,231.923,256.629,273.587,214.965z M118.711,191.71
			c-36.288-36.288-36.287-95.332,0.001-131.62c36.288-36.287,95.332-36.288,131.619,0c36.288,36.287,36.288,95.332,0,131.62
			C214.043,227.996,155,227.996,118.711,191.71z"/>
		<path d="M240.316,90.516c-4.475-4.473-8.93-6.741-13.243-6.741c-3.363,0-6.442,1.374-9.153,4.085
			c-0.28,0.281-25.586,25.621-38.638,38.651c-0.77,0.768-1.219,1.387-2.148,1.388c-0.925,0.001-1.403-0.642-2.219-1.453
			c-7.963-7.925-22.405-22.426-22.574-22.595c-2.621-2.622-5.565-3.951-8.75-3.951c-4.192,0-8.523,2.294-13.241,7.011
			c-3.623,3.622-5.79,6.977-6.625,10.254c-1.087,4.26,0.146,8.318,3.565,11.736l33.189,33.19c5.798,5.797,12.258,7.015,16.655,7.015
			c6.488,0,11.814-2.172,16.279-6.639l49.56-49.56C249.245,106.639,248.276,98.477,240.316,90.516z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></span>
</form>
</div>
		 </div>

		 