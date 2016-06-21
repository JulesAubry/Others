<?php

require_once "autoload.include.php";

$web = new webpage("Godet");

$web->appendCssUrl('css/index.css') ;

$web->appendToHead('<meta name="viewport" content="width=device-width, initial-scale=1">');

$web->appendToHead('<meta name="description" content="Slide Down Box Menu with jQuery and CSS3" />');

$web->appendToHead('<meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails"/>');


$web->appendContent(<<<HTML
<div id="general">

	<div id="social_media">
	  <a class="icon facebook" href="#" target="_blank"><img src="images/facebook.png" alt="facebook"></img></a>
	  <a class="icon twitter" href="#" target="_blank"><img src="images/twitter.png" alt="twitter"></img></a>
	  <a class="icon instagram" href="#" target="_blank"><img src="images/instagram.png" alt="instagram"></img></span></a>
	  <a class="icon linkedin" href="#" target="_blank"><img src="images/linkedin.png" alt="linkedin"></img></span></a>
	 </div>
	 
	<h1> GODET </h1>	

<div id="categories">
	 <ul id="sdt_menu" class="sdt_menu">
		<li>
			<a href="#">
				<img src="images/1.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">Accueil</span>
					<span class="sdt_descr">Msg 1</span>
				</span>
			</a>
			<div class="sdt_box">
				<a href="#">euh</a>
			</div>
		</li>
		<li>
			<a href="#">
				<img src="images/1.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">A PROPOS</span>
					<span class="sdt_descr">Msg 2</span>
				</span>
			</a>
			<div class="sdt_box">
				<a href="#">euh</a>
			</div>
		</li>
		<li>
			<a href="#">
				<img src="images/contact.png" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">CONTACT</span>
					<span class="sdt_descr">Msg 3</span>
				</span>
			</a>
			<div class="sdt_box">
				<a href="pages/contact.php">euh</a>
			</div>
		</li>
		<li>
			<a href="#">
				<img src="images/metier.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">NOTRE METIER</span>
					<span class="sdt_descr">Msg 4</span>
				</span>
			</a>
			<div class="sdt_box">
				<a href="#">euh</a>
			</div>
		</li>
		<li>
			<a href="#">
				<img src="images/1.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">NOTRE SAVOIR-FAIRE</span>
					<span class="sdt_descr">Msg 5</span>
				</span>
			</a>
			<div class="sdt_box">
				<a href="#">euh</a>
			</div>
		</li>
		<li>
			<a href="#">
				<img src="images/catalogue.png" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">CATALOGUES</span>
					<span class="sdt_descr">Msg 6</span>
				</span>
			</a>
			<div class="sdt_box">
				<a href="pages/catalogue.php">euh</a>
			</div>
		</li>
		
	</ul>
	
</div>
  
</div>


HTML
);

$web->appendContent(<<<JS
<script type="text/javascript" src="js/jQuery.js"></script> <!--http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js -->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
            $(function() {
                $('#sdt_menu > li').bind('mouseenter',function(){
					var elem = $(this);
					elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var sub_menu = elem.find('.sdt_box');
						if(sub_menu.length){
							var left = '170px';
							if(elem.parent().children().length == elem.index()+1)
								left = '-170px';
							sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var elem = $(this);
					var sub_menu = elem.find('.sdt_box');
					if(sub_menu.length)
						sub_menu.hide().css('left','0px');
					
					elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px'},500);
				});
            });
        </script>

JS
);


echo $web->toHTML();

