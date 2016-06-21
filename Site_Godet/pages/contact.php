<?php

require_once "../autoload.include.php";

$web = new webpage("Godet");

$web->appendToHead('<meta name="viewport" content="width=device-width, initial-scale=1">');

$web->appendCssUrl('../css/contact.css');



$web->appendContent(<<<HTML
<div id="general"> 

	<div id="categories">
	 <ul id="sdt_menu" class="sdt_menu">
		<li>
			<a href="#">
				<img src="../images/1.jpg" alt=""/>
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
				<img src="../images/1.jpg" alt=""/>
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
				<img src="../images/contact.png" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">CONTACT</span>
					<span class="sdt_descr">Msg 3</span>
				</span>
			</a>
			<div class="sdt_box">
				<a href="../pages/contact.php">euh</a>
			</div>
		</li>
		<li>
			<a href="#">
				<img src="../images/metier.jpg" alt=""/>
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
				<img src="../images/1.jpg" alt=""/>
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
				<img src="../images/catalogue.png" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link">CATALOGUES</span>
					<span class="sdt_descr">Msg 6</span>
				</span>
			</a>
			<div class="sdt_box">
				<a href="../pages/catalogue.php">euh</a>
			</div>
		</li>
		
	</ul>
	
</div>

<img id="logoGodet" src="../images/logo.jpg"> </img>

	<form method="post" name="contact_form"	action="envoi_mail_contact.php">
	
		<label>Civilité : </label>	
			Monsieur
			<input type="radio" name="sexe" value="Mr">			
			Madame
			<input type="radio" name="sexe" value="Mme"> </br>
		<label>Nom * : </label>
		<input type="text" name="nom"  maxlength="30" required> </br>
		<label>Prénom : </label>
		<input type="text" name="prenom" maxlength="30"> </br>
		<label>Entreprise : </label>
		<input type="text" name="entreprise" maxlength="30"> </br>
		<label>Numéro, rue : </label> <input type="text" name="rue"> </br>
		<label>Code postal * : </label> <input type="text" name="cp" required> </br>
		<label>Ville * : </label> <input type="text" name="ville" required> </br>
		<label>Adresse électronique * : </label> <input type="text" name="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$" required> </br>
		<label>Message : </label>
		<textarea name="message" cols="35 rows="4"></textarea>
		<input type="submit" value="Envoyer">
	
	</form>
	
	<p style="color:white" > <b> * = champs obligatoires </b> </p>

</div>




HTML
);


$web->appendContent(<<<JS
<script type="text/javascript" src="../js/jQuery.js"></script> <!--http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js -->
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
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
							var left = '200px';
							if(elem.parent().children().length == elem.index()+1)
								left = '-140px';
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

