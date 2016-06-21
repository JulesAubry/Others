<?php

require_once "../autoload.include.php";

$web = new webpage("Godet");

$web->appendToHead('<meta name="viewport" content="width=device-width, initial-scale=1">');

$web->appendCss('

body {
	background-color : #b41c1c;
	color : white;
}

#menu a {
	text-decoration : none;
	color : white;
	text-transform : uppercase;
	margin-left : 30px;
	font-size : 18px;
	font-family: Franklin Gothic Medium,Franklin Gothic,ITC Franklin Gothic,Arial,sans-serif; 	
}

#menu {
	border-bottom : 1px solid black;
	height : 60px;
	background-color : black;
	line-height : 50px; 
}

#menu a:hover {
	color : #b41c1c;
}


');



$web->appendContent(<<<HTML
<div id="general"> 

	<div id="menu">
	  <a class="categories_class" href="../pages/index.php" target="_blank" style="margin-left:25%">Accueil</a>
	  <a class="categories_class" href="#" target="_blank">A Propos</a>
	  <a class="categories_class" href="../pages/contact.php" target="_blank">Contact</a>
	  <a class="categories_class" href="#" target="_blank">Notre métier</a>
	  <a class="categories_class" href="#" target="_blank">Notre savoir-faire</a>
	  <a class="categories_class" href="#" target="_blank">Catalogues</a>
	</div>
</br> </br> </br> </br>
<img src="../images/logo.jpg" align="right"> </img>

	<div id="listeCatalogues">
		Catalogue général
		<ul>
			<li> <a href="../catalogues/accastillages_architecture.swf">  accastillages_architecture.swf </a> </li>
			<li> <a href="../catalogues/accessoires_levage.swf"> accessoires_levage.swf</a>  </li>
			<li> <a href=""> </a> </li>
			<li> <a href=""> </a> </li>
			<li> <a href=""> </a> </li>
			<li> <a href=""> </a> </li>
		</ul>
		Catalogue spectacle
		<ul>
			<li> <a href="../catalogues/accastillages_architecture.swf">  accastillages_architecture.swf </a> </li>
			<li> <a href="../catalogues/accessoires_levage.swf"> accessoires_levage.swf</a>  </li>
			<li> <a href=""> </a> </li>
			<li> <a href=""> </a> </li>
			<li> <a href=""> </a> </li>
			<li> <a href=""> </a> </li>
		</ul>
		Catalogue strapy
		<ul>
			<li> <a href="../catalogues/accastillages_architecture.swf">  accastillages_architecture.swf </a> </li>
		</ul>
	</div>
			
</div>




HTML
);


echo $web->toHTML();

