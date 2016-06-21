<?php

$web = new webpage("SUGGESTIONS");

$web->appendJsUrl('request.js') ;

$web->appendContent(<<<HTML

<form name="f" method="GET" action=""> 
 Partie du nom de l'artiste : <input type="text" name="nom"> <br>
 Suggestions : <span id="lespan"> <ul> </ul> </span>
</form>
HTML
);

$web->appendJS(<<<JAVASCRIPT
// Fonction appelÃ©e au chargement complet de la page
var q;
window.onload = function () {
    // DÃ©sactivation de l'envoi du formulaire
    document.forms['f'].onsubmit = function () { return false ; }

    // Fonction appelÃ©e lors d'une modification de la saisie
    document.forms['f'].elements['nom'].onkeyup = function() {
    if (q) q.cancel;
    q = new Request(
            {
                url        : "/Semestre3/TP4/liste_artistes.php",
                method     : 'get',
                handleAs   : 'text',
                parameters : { q : document.forms['f'].elements['nom'].value, wait : "hi" },
                onSuccess  : function(res) {
                        /*var li = document.createElement('li') ;
                        li.appendChild(document.createTextNode(res)) ;
                        document.getElementById('lespan').appendChild(li) ; */
                        document.getElementById('lespan').innerHTML = res ; ;
                    },
                onError    : function(status, message) {
                        window.alert('Error ' + status + ': ' + message) ;
                    }
            }) ;
    }
    
}

JAVASCRIPT
);

echo $web->toHTML();

