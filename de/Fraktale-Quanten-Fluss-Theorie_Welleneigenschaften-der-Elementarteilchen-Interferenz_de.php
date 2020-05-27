<?php
  // #: Beispiel von "http://www.redirect301.de/php-redirect-301.html".
  
  // #: Dauerhafte PHP-Weiterleitung (Statuscode 301).
  header( "HTTP/1.1 301 Moved Permanently");
  // #: Weiterleitungsziel. Wohin soll eine permanente Weiterleitung erfolgen?
  header( "Location:../de/Quanten-Fluss-Theorie/Elementarteilchenmodell-mit-Wirkungsquanten-Strings_de.php#OM:FrQFT:Elementarteilchen:Welleneigenschaften-der-Elementarteilchen");
  // #: Zur Sicherheit ein exit-Aufruf, falls Probleme aufgetreten sind.
  exit;
?>
