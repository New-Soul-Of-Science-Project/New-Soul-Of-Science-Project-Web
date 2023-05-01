<?php
  // #: test: http://localhost/NSOSP%20Web/de/Spannungsspiel-des-Lebens/Achtsamkeitsprozess-Definition-des-Lebens.php#OM:SpaLeb:Achtsamkeitsprozess:BeobachtHinweise
  $Glo_PathRel_back = '../';
  // $cookieName = 'hashName';
  
  // 1. PHP: URL to redirect has none of the hashRedirect queries
  //      JS: has hash → then redirect normal with set query "URL?hashToRedirect=H0"
  //        PHP: may be sleep – should do nothing
  //      JS: has no hash → then do nothing
  //        PHP: may be sleep – should do permanently redirect
  // 2. PHP has query "URL?hashToRedirect=H0"
  //      JS: should do nothing
  //      PHP: Use query "H0" to search for new hash "H1" and redirect normal to "URL?hashRedirect=H1"
  // 3. PHP has query "URL?hashRedirect=H1"
  //      JS: Use query "H1" to redirect normal to "URL?hashIsRedirected#H1"
  //      PHP: should do nothing
  // 4. PHP has query "URL?hashIsRedirected#H1"
  //      JS: should do nothing
  //      PHP: Redirect permanently to "newURL#H1" which should have automatically the new hash

  echo '    <script src="'.$Glo_PathRel_back.'../share/js/Tools.js" type="text/javascript" language="JavaScript"></script>'."\n";

  echo '    <script type="text/javascript">'."\n";
  echo '          <!--'."\n";
  
  echo '      console.log( "window.location: ", window.location);'."\n";
  echo '      console.log( "url reconstruct: ", (window.location.protocol) + "//" + (window.location.hostname) + (window.location.pathname) + (window.location.search) + (window.location.hash));'."\n";
  // echo '      To_f_hash_to_cookie( window.location.hash, "'.($cookieName).'");'."\n";
  // echo '      window.location = window.location.hash, "'.($cookieName).'");'."\n";
  // echo '      console.log( "cookieName", "'.($cookieName).'");'."\n";
  
  echo '          -->'."\n";
  echo '    </script>'."\n";

  /* sleep(15);
  
  $hashName = '';
  
  if (isset($_COOKIE[$cookieName])) {
    $hashName = $_COOKIE[$cookieName];
    echo $hashName;
    echo '   >>> '."Location:../../de/Spannungsspiel-des-Lebens/Care-Prozess-Achtsamkeitsprozess-Definition-des-Lebens.php".($hashName ? '?hashRedirect='.($hashName) : '');

    setcookie($cookieName, '', time() - 3600, '/'); // empty value and old timestamp
    unset($_COOKIE[$cookieName]);
  } */
  // $days = 1;
  // setcookie( "hashName-fromServer", $_COOKIE["hashName"], time() + 60 * 60 * 24 * $days, "/");
  
  // #: Beispiel von "http://www.redirect301.de/php-redirect-301.html".
  
  // #: Dauerhafte PHP-Weiterleitung (Statuscode 301).
  header( "HTTP/1.1 301 Moved Permanently");
  // #: Weiterleitungsziel. Wohin soll eine permanente Weiterleitung erfolgen?
  header( "Location:../../de/Spannungsspiel-des-Lebens/Care-Prozess-Achtsamkeitsprozess-Definition-des-Lebens.php");
  // header( "Location:../../de/Spannungsspiel-des-Lebens/Care-Prozess-Achtsamkeitsprozess-Definition-des-Lebens.php".(isset($hashName) && 0 < strlen( $hashName) ? '?hashRedirect='.($hashName) : ''));
  // #: Zur Sicherheit ein exit-Aufruf, falls Probleme aufgetreten sind.
  exit;
?>
