
// #: Name:  "NSOSP.js"


// #: Stand: 05.09.2023, 08:00h

// #: History: (!: changed, incompatible; >: developed, compatible but is a real change; +: new, compatible; *: fixed, compatible)

//          20230905:  +:  Created.



var NSOSP_g_googleTranslatePosition = 'navigation'; // start position. other possibility is in 'content'


function NSOSP_f_manage_resize() {
  // Called if the browser is first opened and on resize of screen.
  // Values of clientHeight and scrollHeight have settled by this point.
  
  console.log('Called: NSOSP_f_manage_resize');
  
  if (document.getElementById) {
    console.log('window.innerWidth: ', window.innerWidth);
    // size is used in "main.css" as well
    if (window.innerWidth <= 929) {
      if (NSOSP_g_googleTranslatePosition !== 'content') {
        let googleTranslateElement = document.getElementById( 'google_translate_element');
        let googleTranslateNavigation = document.getElementById( 'GoogleTranslateNavigation');
        let googleTranslateContent = document.getElementById( 'GoogleTranslateContent');
        googleTranslateContent.appendChild( googleTranslateElement);
        NSOSP_g_googleTranslatePosition = 'content';
      }
    } else {
      if (NSOSP_g_googleTranslatePosition !== 'navigation') {
        let googleTranslateElement = document.getElementById( 'google_translate_element');
        let googleTranslateNavigation = document.getElementById( 'GoogleTranslateNavigation');
        let googleTranslateContent = document.getElementById( 'GoogleTranslateContent');
        googleTranslateNavigation.appendChild( googleTranslateElement);
        NSOSP_g_googleTranslatePosition = 'navigation';
      }
    }
    console.log('"googleTranslateElement" position is now:', NSOSP_g_googleTranslatePosition);
  }
}
