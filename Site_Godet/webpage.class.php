<?php
//<!--@Author : Jules AUBRY-->

class WebPage {
    /**
     * @var string Texte compris entre <head> et </head>
     */
    private $head  = null ;
    /**
     * @var string Texte compris entre <title> et </title>
     */
    private $title = null ;
    /**
     * @var string Texte compris entre <body> et </body>
     */
    private $body  = null ;

    /**
     * Constructeur
     * @param string $title Titre de la page
     */
    public function __construct($title=null) {
	$this->title = $title;
	$this->body = "";
	$this->head = "";
    }

    /**
     * Protéger les caractères spéciaux pouvant dégrader la page Web
     * @param string $string La chaîne à protéger
     * @return string La chaîne protégée
     */
    public function escapeString($string) { // "<h1>test</h1>"
	    return htmlentities($string); // "&lt;h1&gt;test&lt;/h1&ht;"
	
	}

    /**
     * Affecter le titre de la page
     * @param string $title Le titre
     */
    public function setTitle($title) {
	$this-> title = $title;
    }

    /**
     * Ajouter un contenu dans head
     * @param string $content Le contenu à ajouter
     * @return void
     */
    public function appendToHead($content) {
	$this->head .= $content;
    }

    /**
     * Ajouter un contenu CSS dans head
     * @param string $css Le contenu CSS à ajouter
     * @return void
     */
    public function appendCss($css) {
	$this->head .= "<style type= \"text/css\"> $css </style>";
    }

    /**
     * Ajouter l'URL d'un script CSS dans head
     * @param string $url L'URL du script CSS
     * @return void
     */
    public function appendCssUrl($url) {
	$this->head .= "<link href=\"$url\" rel=\"stylesheet\" type=\"text/css\">";
    }

    /**
     * Ajouter un contenu JavaScript dans head
     * @param string $js Le contenu JavaScript à ajouter
     * @return void
     */
    public function appendJs($js) {
	$this->head .= "<script type=\"text/javascript\"> $js </script>";
    }

    /**
     * Ajouter l'URL d'un script JavaScript dans head
     * @param string $url L'URL du script JavaScript
     * @return void
     */
    public function appendJsUrl($url) {
	$this->head .= "<script type=\"text/javascript\" src=\"$url\"></script>";
    }

    /**
     * Ajouter un contenu dans body
     * @param string $content Le contenu à ajouter
     * @return void
     */
    public function appendContent($content) {
	$this->body .= $content;
    }

    /**
     * Produire la page Web complète
     * @return string
     */
    public function toHTML() {
$hue="";
$hue .= <<<HTML
	<!doctype html>
	<html lang="fr">
	<head>
	<meta charset="utf-8">	
	<title>$this->title</title>
	$this->head</head>
	<body>
	$this->body</body>
	</html>
HTML;
return $hue;
    }
}
