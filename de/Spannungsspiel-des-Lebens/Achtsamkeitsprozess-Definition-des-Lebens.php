<?php
  // #: Dauerhafte PHP-Weiterleitung (Statuscode 301).
  header( "HTTP/1.1 301 Moved Permanently");
  // #: Weiterleitungsziel. Wohin soll eine permanente Weiterleitung erfolgen?
  header( "Location:../../de/Spannungsspiel-des-Lebens/Care-Prozess-Achtsamkeitsprozess-Definition-des-Lebens.php");
  // header( "Location:../../de/Spannungsspiel-des-Lebens/Care-Prozess-Achtsamkeitsprozess-Definition-des-Lebens.php".(isset($hashName) && 0 < strlen( $hashName) ? '?hashRedirect='.($hashName) : ''));
  // #: Zur Sicherheit ein exit-Aufruf, falls Probleme aufgetreten sind.
  exit;
?>
