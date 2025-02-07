
// #: Name:  "Tools.js"


// #: Stand: 05.09.2023, 12:00h

// #: History: (!: changed, incompatible; >: developed, compatible but is a real change; +: new, compatible; *: fixed, compatible)

//          20230905:  +:  "To_f_manage_site_end": Implement "customResizeCallback".
//          20230831:  +:  "To_f_showMenuCloneMenu", "To_f_showMenuSet": to use navigation menu for mobile menu as well and split up functionality.
//          20230820:  +:  "To_f_showMenu" for mobile mode.
//          20220807:  +:  "To_f_manage_site_end", "To_f_manage_beforePrint", "To_f_manage_afterPrint":  Implement event handlers for printing.
//v01.001:  20130515:  +:  History started.
//          20170129:  +:  "To_f_manage_site_end":  "autoResize = false" is new.
//                     +:  "To_f_manage_resize", "To_f_manage_pageshow":  Are new.
//          20170207:  +:  "To_f_manage_resize":  Fit extra or optional navigation to windows height.
//          20170226:  +:  "To_f_manage_resize":  Use on mobiles windows outer height and on desktop windows inner height.


// Comment:  20170226:  "To_f_manage_resize":  There seems to be no difference at the moment between mobiles windows outer height and mobiles windows inner height. Not on Safari nor FireFox nor Chrome.



var To_g_callbackOnResize = null;



var To_g_detectDevice_mobile_is = false;


function To_f_manageSiteBegin( detectDevice_mobile_is) {
  To_g_detectDevice_mobile_is = detectDevice_mobile_is;
}



var To_g_elements_hides_ary = new Array();


// #: Instals the call of function "To_f_hash_changed" if the windows hash has changed.
//      If an anchor is in a hidden element, the element have to be displayed to fulfill the jump to the anchor.
if ("onhashchange" in window)
{     // #: Event supported?
  window.onhashchange = function () {
    To_f_hash_changed( window.location.hash);
  }
}
else
{     // #: Event not supported:
  var To_g_hash_stored = window.location.hash;
  
  // #: Tests any 100ms whether the hash has changed.
  window.setInterval( function () {
                        if (window.location.hash != To_g_hash_stored) {
                          To_g_hash_stored = window.location.hash;
                          To_f_hash_changed( To_g_hash_stored);
                        }
                      }, 100);
}

//var To_g_hash_change_activ=false;     // !!!: Is probably not neccassary at the moment.
var To_g_anchor_search_LastFoundElement = null;



function To_f_anchor_search( element, anchor_name)
{
  var child_idx, search_is;

  search_is = true;
  
  //alert( "Element-Tag \"" + element.tagName + "\" gefunden.");

  //if ((element.tagName == "A"))
  //  alert( "Anker gefunden: " + element.name + ", gesucht: " + anchor_name);
  if ((element.tagName == "A") && (element.name == anchor_name))
  {
    //if ((element.tagName == "A"))
    //  alert( "Anker gefunden: " + element.name + ", gesucht: " + anchor_name);

    To_g_anchor_search_LastFoundElement = element;
    search_is = false;
  }
  
  if (search_is)
  {
    child_idx = 0;
    
    while (search_is && (child_idx < element.childNodes.length))
    {
      if (element.childNodes[child_idx].childNodes)
        if (To_f_anchor_search( element.childNodes[child_idx], anchor_name))
          search_is = false;
      
      child_idx++;
    }
    
  }

  return !search_is;
}



function To_f_anchor_JumpToBy_hash( hash)
{
  // #?: If this hash is already set?
  if (hash == window.location.hash)
    // #: Because this does not activate the event handler, force hidden anchors to become visible.
    To_f_hash_changed( window.location.hash);
  else
    // #: Otherwise set the hash of the window which forces also hidden anchors to become visible by event handler.
    window.location.hash = hash;
}



// #: Is the anchor of a window hash not visible then make it visible.
// !!!: If the hash is already the value and hides the equation with the anchor per click a second jump to the anchor fails because the hash does not change,
//        but the anchor is again not displayed and can not be jumped to.

function To_f_hash_changed( hash)
{
  var hides_idx, hides_idx_idx, anchor_name;
  
  //if (!To_g_hash_change_activ)
  {
    if (document.getElementById)
    {
      //To_g_hash_change_activ = true;
      
      //anchor_name = hash;
      //if (0 < anchor_name.length)
        // #?: Is first char '#'? Than delete it.
      //  if (anchor_name.charAt( 0) === '#')
      //    anchor_name = anchor_name.substr( 1);
      
      // #?: If hash is a not empty anchor?
      if ((1 < hash.length) && (hash.charAt( 0) === '#'))
      {
        anchor_name = hash.substr( 1);
        
        //alert( "Anker ist: " + anchor_name);
        
        for (hides_idx = 0; hides_idx < To_g_elements_hides_ary.length; hides_idx++)
        {
          hides_idx_idx = 0;
          var search_is = true;
          
          while (search_is && (hides_idx_idx < To_g_elements_hides_ary[hides_idx]['contentAry'].length))
          {
            //alert( "Anker \"" + anchor_name + "\" gesucht in ID: " + To_g_elements_hides_ary[hides_idx]['base_name'] + To_g_elements_hides_ary[hides_idx]['contentAry'][hides_idx_idx]);
            
            if (To_f_anchor_search( document.getElementById( To_g_elements_hides_ary[hides_idx]['base_name'] + To_g_elements_hides_ary[hides_idx]['contentAry'][hides_idx_idx]), anchor_name))
            {
              //alert( "Anker \"" + anchor_name + "\" in ID " + To_g_elements_hides_ary[hides_idx]['base_name'] + To_g_elements_hides_ary[hides_idx]['contentAry'][hides_idx_idx] + " gefunden! Nun sichtbar machen ...");
              //alert( "Sichtbar machen: ID-Basis " + To_g_elements_hides_ary[hides_idx]['base_name'] + ", erster sichtbarer Part " + To_g_elements_hides_ary[hides_idx]['noContentAry'][0] + ", erster unsichtb. Part " + To_g_elements_hides_ary[hides_idx]['contentAry'][0]);
              
              To_f_elements_hides_switch( 'showContent', To_g_elements_hides_ary[hides_idx]['base_name'], To_g_elements_hides_ary[hides_idx]['noContentAry'], To_g_elements_hides_ary[hides_idx]['contentAry']);
              To_g_anchor_search_LastFoundElement.scrollIntoView( true);
              // #: Stop search in this "hides_idx".
              search_is = false;
            }
            
            hides_idx_idx++;
          }
          
        }
        
        //alert( "Der Anker hat sich verändert: " + hash);
        //window.location.hash = "";
        //window.location.hash = hash;     // #!: For this "To_g_hash_change_activ" is defined, otherwise there would be an infinite loop!
      }

      //To_g_hash_change_activ = false;
    }
  }
}



var To_g_rememberOldStatus_elements_hides_ary = null;
var To_g_showMenu = false;


function To_f_openAll( rememberOldStatus = false)
{
  console.log('Open All. rememberOldStatus: ', rememberOldStatus);
  
  if (document.getElementById)
  {
    var saveStatus = (rememberOldStatus && To_g_rememberOldStatus_elements_hides_ary === null);
    
    if (saveStatus) {
      To_g_rememberOldStatus_elements_hides_ary = [];
    }
    
    var hides_idx;

    for (hides_idx = 0; hides_idx < To_g_elements_hides_ary.length; hides_idx++)
    {
      if (saveStatus) {
        To_g_rememberOldStatus_elements_hides_ary.push( []);
      }
      
      var hides_idx_idx = 0;

      while (hides_idx_idx < To_g_elements_hides_ary[hides_idx]['contentAry'].length)
      {
        // part which has the hidden content
        var displayVisiblePart

        if (typeof To_g_elements_hides_ary[hides_idx]['contentAry'][hides_idx_idx] == 'string') {
          displayVisiblePart = document.getElementById( To_g_elements_hides_ary[hides_idx]['base_name'] + To_g_elements_hides_ary[hides_idx]['contentAry'][hides_idx_idx]).style.display;
        } else {
          displayVisiblePart = document.getElementById( To_g_elements_hides_ary[hides_idx]['base_name'] + To_g_elements_hides_ary[hides_idx]['contentAry'][hides_idx_idx][0].style.display);
        }
        var contentWasInvisible = (displayVisiblePart === 'none')

        if (saveStatus) {
          To_g_rememberOldStatus_elements_hides_ary[hides_idx].push( { contentWasInvisible });
        }
        if (contentWasInvisible) {
          To_f_elements_hides_switch( 'showContent', To_g_elements_hides_ary[hides_idx]['base_name'], To_g_elements_hides_ary[hides_idx]['noContentAry'], To_g_elements_hides_ary[hides_idx]['contentAry']);
        }
        
        hides_idx_idx++;
      }
      
    }
  }

  // #: Fit content height to need.
  // To_f_manage_resize();
}



function To_f_closeAll(toOldStatus = false)
{
  console.log('Close All. toOldStatus: ', toOldStatus);
  
  if (document.getElementById)
  {
    var resetStatus = (toOldStatus && To_g_rememberOldStatus_elements_hides_ary !== null);
    var hides_idx;

    for (hides_idx = 0; hides_idx < To_g_elements_hides_ary.length; hides_idx++)
    {
      var hides_idx_idx = 0;

      while (hides_idx_idx < To_g_elements_hides_ary[hides_idx]['contentAry'].length)
      {
        if (!resetStatus || To_g_rememberOldStatus_elements_hides_ary[hides_idx][hides_idx_idx].contentWasInvisible) {
          To_f_elements_hides_switch( 'hideContent', To_g_elements_hides_ary[hides_idx]['base_name'], To_g_elements_hides_ary[hides_idx]['noContentAry'], To_g_elements_hides_ary[hides_idx]['contentAry']);
        }
        
        hides_idx_idx++;
      }
      
    }
  }

  // #: Fit content height to need.
  // To_f_manage_resize();

  To_g_rememberOldStatus_elements_hides_ary = null;
}



function To_f_elements_hides_switch( setting, id_base_name, noContentAry, contentAry)
{
  var i;

  //alert( "setting: " + setting + ", base_name: " + id_base_name);
  //alert( "Sichtbar machen: setting: " + setting + ", ID-Basis: " + id_base_name + ", erster sichtbarer Part " + noContentAry[0] + ", erster unsichtb. Part " + contentAry[0]);

  if (document.getElementById)
  {
    switch (setting)
    {
      case 'hideContent':
        
        for (i = 0; i < noContentAry.length; i++)
          if (typeof noContentAry[i] == 'string')
          {
            //alert( "Sichtbar machen: " + id_base_name + noContentAry[i]);
            document.getElementById( id_base_name + noContentAry[i]).style.display = '';
          }
          else
          {
            document.getElementById( id_base_name + noContentAry[i][0]).style.display = '';
            //document.getElementById( id_base_name + noContentAry[i][0] + '-Name').style.display = '';
            //document.getElementById( id_base_name + noContentAry[i][0] + '-Name').name = noContentAry[i][1];
          }
        
        for (i = 0; i < contentAry.length; i++)
          if (typeof contentAry[i] == 'string')
            document.getElementById( id_base_name + contentAry[i]).style.display = 'none';
          else
          {
            document.getElementById( id_base_name + contentAry[i][0]).style.display = 'none';
            //document.getElementById( id_base_name + contentAry[i][0] + '-Name').style.display = 'none';
            //document.getElementById( id_base_name + contentAry[i][0] + '-Name').name = '';
          }
        
        break;
      case 'showContent':
        
        for (i = 0; i < noContentAry.length; i++)
          if (typeof noContentAry[i] == 'string')
            document.getElementById( id_base_name + noContentAry[i]).style.display = 'none';
          else
          {
            document.getElementById( id_base_name + noContentAry[i][0]).style.display = 'none';
            //document.getElementById( id_base_name + noContentAry[i][0] + '-Name').style.display = 'none';
            //document.getElementById( id_base_name + noContentAry[i][0] + '-Name').name = '';
          }
        
        for (i = 0; i < contentAry.length; i++)
          if (typeof contentAry[i] == 'string')
            document.getElementById( id_base_name + contentAry[i]).style.display = '';
          else
          {
            document.getElementById( id_base_name + contentAry[i][0]).style.display = '';
            //document.getElementById( id_base_name + contentAry[i][0] + '-Name').style.display = '';
            //document.getElementById( id_base_name + contentAry[i][0] + '-Name').name = contentAry[i][1];
          }
        
        break;
    }
  }
}



var To_g_resizeCalled = false;
var To_g_resizeCount = 0;

var To_g_extraOrigHeight = null;
var To_g_navigationOrigHeight = null;


// Comment:  20170226:  "To_f_manage_resize":  There seems to be no difference at the moment between mobile windows outer height and mobile windows inner height. Not on Safari nor FireFox nor Chrome.

function To_f_manage_resize() {
  // Called if the browser is first opened and on resize of screen.
  // Values of clientHeight and scrollHeight have settled by this point.
  
  To_f_showMenuHideOnResizeCondition();
  if (To_g_callbackOnResize) {
    To_g_callbackOnResize();
  }
  
  // #: For mobile only call once! For desktop call always!
  // #?: Is not mobile or is the first call?
  if (!To_g_detectDevice_mobile_is || !To_g_resizeCalled) {
  //if (true) {
    
    To_g_resizeCalled = true;
    
    console.log( '------------------------ counter: ' + To_g_resizeCount + ', device: ' + ((To_g_detectDevice_mobile_is) ? 'mobile' : 'computer'));
    To_g_resizeCount++;

    // #: Fit content height to need.

    var content = document.getElementById( "content");   // #: Get the element with 'id="container"'.
    var navigation = document.getElementById( "navigation");   // #: Get the element with 'id="navigation"'.
    var extra = document.getElementById( "extra");   // #: Get the element with 'id="extra"'.

    // #?: Is "content", "extra" and "navigation" def?
    if ((content != null) && (navigation != null))
      // #?: Is "clientHeight" in all of them def?
      if (content.clientHeight && navigation.clientHeight) {
        // var loc_content_clientHeight;
        var loc_header_clientHeight;
        var loc_extra_clientHeight;
        var loc_footer_clientHeight;

        // #?: Navigation original height not def? Then save!
        if (To_g_navigationOrigHeight == null) {
          To_g_navigationOrigHeight = navigation.clientHeight;
          console.log( 'To_g_navigationOrigHeight: ' + To_g_navigationOrigHeight);
        }
        
        // #?: "extra" def?
        if ((extra != null) && extra.clientHeight)
          // #?: Extra original height not def? Then save!
          if (To_g_extraOrigHeight == null) {
            To_g_extraOrigHeight = extra.clientHeight;
            console.log( 'To_g_extraOrigHeight: ' + To_g_extraOrigHeight);
          }
        
        console.log( 'navigation.clientHeight: ' + navigation.clientHeight);
        
        
        // #: Set extra or navigation after "window.innerHeight".
        // #: Set "loc_extra_clientHeight" even if "extra" is undef.
        
        // #: Set "loc_header_clientHeight"
        // #?: "header" def?
        if ((header != null) && header.clientHeight) {
          loc_header_clientHeight = header.clientHeight;
          console.log( 'header.clientHeight: ' + header.clientHeight);
        }
        else {
          loc_header_clientHeight = 0;
          console.log( 'header or header.clientHeight is undefined!');
        }
        
        // #: Set "loc_footer_clientHeight"
        // #?: "footer" def?
        if ((footer != null) && footer.clientHeight) {
          loc_footer_clientHeight = footer.clientHeight;
          console.log( 'footer.clientHeight: ' + footer.clientHeight);
        }
        else {
          loc_footer_clientHeight = 0;
          console.log( 'footer or footer.clientHeight is undefined!');
        }
        
        // #?: "extra" def?
        if ((extra != null) && extra.clientHeight) {
          loc_extra_clientHeight = extra.clientHeight;
          console.log( 'extra.clientHeight: ' + extra.clientHeight);
          
          // #: Change extra height to fit everything into the window.
          // #?: Is original "extra.clientHeight" smaller as needer to fit the whole window height?
          if (To_g_extraOrigHeight < window.innerHeight - header.clientHeight - footer.clientHeight - navigation.clientHeight) {
            extra.style.height = (window.innerHeight - header.clientHeight - footer.clientHeight - navigation.clientHeight) + 'px';
            
            loc_extra_clientHeight = extra.clientHeight;
            console.log( 'Resize - extra.clientHeight: ' + extra.clientHeight);
            
            // #: Make the content as long as navigation and extra together.
            content.style.height = (navigation.clientHeight + loc_extra_clientHeight) + 'px';
            console.log( 'Resize - content.clientHeight = ' + content.clientHeight);
          }
        }
        else {
          var loc_navigationHeight_new;
          var con_windowInnerHeight;
          
          loc_extra_clientHeight = 0;
          console.log( 'extra or extra.clientHeight is undefined!');
          console.log( 'navigation.clientHeight: ' + navigation.clientHeight);
          
          // #?: Is mobile?
          if (To_g_detectDevice_mobile_is)
            // #: Use total window height with scroll bars etc..
            con_windowInnerHeight = window.outerHeight;
          else
            // #No: Is desktop!
            // #: Use viewable window height without scroll bars etc..
            con_windowInnerHeight = window.innerHeight;
          
          // #?: Is original "navigation.clientHeight" smaller as needed to fit the whole window height?
          //%!if (To_g_navigationOrigHeight < window.innerHeight - (header.clientHeight + footer.clientHeight))
          //%!  loc_navigationHeight_new = window.innerHeight - (header.clientHeight + footer.clientHeight);
          if (To_g_navigationOrigHeight < con_windowInnerHeight - (header.clientHeight + footer.clientHeight))
            loc_navigationHeight_new = con_windowInnerHeight - (header.clientHeight + footer.clientHeight);
          else
            loc_navigationHeight_new = To_g_navigationOrigHeight;
          
          // #?: Has "navigation.clientHeight" to change?
          //%!if (To_g_navigationOrigHeight < window.innerHeight - header.clientHeight - footer.clientHeight) {
          if (loc_navigationHeight_new != navigation.clientHeight) {
            // #: Change navigation height to fit everything into the window.
            //%!navigation.style.height = (window.innerHeight - (header.clientHeight + footer.clientHeight)) + 'px';
            navigation.style.height = loc_navigationHeight_new + 'px';
            console.log( 'Resize - navigation.clientHeight: ' + navigation.clientHeight);
            
            // #: Make the content as long as navigation and extra together.
            //%! content.style.height = (navigation.clientHeight + loc_extra_clientHeight) + 'px';
            //%! console.log( 'Resize - content.clientHeight = ' + content.clientHeight);
            content.style.height = (loc_navigationHeight_new + loc_extra_clientHeight) + 'px';
            console.log( 'Resize - content.style.height = ' + content.style.height);
          }
        }

        
        // #: Fit "content"
        // #?: Is the content height smaller then the of extra and navigation together?
        /*%! if (content.clientHeight < loc_extra_clientHeight + navigation.clientHeight) {
          // #: Make the content as long as navigation and extra together.
          content.style.height = (navigation.clientHeight + loc_extra_clientHeight) + 'px';
          console.log( 'content.style.height = ' + content.style.height);
        } */
        if (content.clientHeight < loc_extra_clientHeight + navigation.clientHeight) {
          // #: Make the content as long as navigation and extra together.
          content.style.height = (navigation.clientHeight + loc_extra_clientHeight) + 'px';
          console.log( 'content.style.height = ' + content.style.height);
        }
        
        // #: Fit "extra" or "navigation".
        // #?: Is the navigation together with the extra smaller than the content?
        if (loc_extra_clientHeight + navigation.clientHeight < content.clientHeight) {
          // #?: "extra" def?
          if (extra != null) {
            extra.style.height = (content.clientHeight - navigation.clientHeight) + 'px';
            console.log( 'extra.style.height = ' + extra.style.height);
          }
          else {
            navigation.style.height = content.clientHeight + 'px';
            console.log( 'navigation.style.height = ' + navigation.style.height);
          }
        }

        //container.style.borderRadius = "10px";
        //container.style.backgroundColor = "#dfac20";
        //container.style.color = "#3983ab";
        //container.style.fontSize = "200%";
      }
  }
}



function To_f_manage_pageshow()
{
  // Called when the browser is first opened.
  // Values of clientHeight and scrollHeight have settled by this point.
  // #!: If handled in "To_f_manage_site_end" "clientHeight" has not the correct value.
               
  // #: Fit content height to need.
  To_f_manage_resize();
}



function To_f_manage_beforePrint()
{
  // The beforeprint event is fired when the associated document is about to be printed or previewed for printing.
  // See: https://developer.mozilla.org/en-US/docs/Web/API/Window/beforeprint_event
  
  console.log('Before print');
  
  To_f_openAll( true);
  
  // call a kind of nextTick because on the NSOSP index page the footer is not at the right position
  // I guess because the page really has a lot elements to open
  // see: https://timnew.me/blog/2014/06/23/process-nexttick-implementation-in-browser/
}



function To_f_manage_afterPrint()
{
  // The afterprint event is fired after the associated document has started printing or the print preview has been closed.
  // See: https://developer.mozilla.org/en-US/docs/Web/API/Window/afterprint_event
  
  console.log('After print');
  
  To_f_closeAll( true);
}



function To_f_print()
{
  // Print the current page.
  // See: https://www.w3schools.com/jsref/met_win_print.asp
  
  console.log('Print');
  window.print();
}



function To_f_setExpandIcons()
{
  if (document.getElementById)
  {
    console.log('Set Expand Icons');
    
    if (To_g_rememberOldStatus_elements_hides_ary === null)
    {
      document.getElementById( 'isUnexpanded').style.display = '';
      document.getElementById( 'isExpanded').style.display = 'none';
    } else {
      document.getElementById( 'isUnexpanded').style.display = 'none';
      document.getElementById( 'isExpanded').style.display = '';
    }
  }
}



function To_f_expand()
{
  if (document.getElementById)
  {
    if (To_g_rememberOldStatus_elements_hides_ary === null)
    {
      console.log('Expand');

      To_f_openAll( true);
    } else {
      console.log('Unexpand To Old State');

      To_f_closeAll( true);
    }
    To_f_setExpandIcons();
  }
}



function To_f_showMenuCloneMenu()
{
  if (document.getElementById)
  {
    console.log( 'Clone Menu');

    const navigationMenu = document.getElementById( 'NavigationMenu'); // side navigation
    const navigationMenuClone = navigationMenu.cloneNode( true); // the true is for deep cloning
    const mainMenu = document.getElementById( 'Menu'); // mobile

    mainMenu.appendChild( navigationMenuClone);
  }
}


function To_f_showMenuSet()
{
  if (document.getElementById)
  {
    console.log('Set Menu Icons and Menu');

    if (To_g_showMenu)
    {
      document.getElementById( 'MenuUnviewed').style.display = 'none';
      document.getElementById( 'MenuViewed').style.display = '';
      document.getElementById( 'Menu').style.display = '';
    } else {
      document.getElementById( 'MenuUnviewed').style.display = '';
      document.getElementById( 'MenuViewed').style.display = 'none';
      document.getElementById( 'Menu').style.display = 'none';
    }
  }
}


function To_f_showMenu( switchOrForceShowMenu = null)
{
  if (document.getElementById)
  {
    console.log('Enter: To_f_showMenu');

    if (switchOrForceShowMenu === null) {
      To_g_showMenu = !To_g_showMenu;
    } else {
      if (switchOrForceShowMenu === true) {
        To_g_showMenu = true;
      } else {
        To_g_showMenu = false;
      }
    }
    
    if (To_g_showMenu)
    {
      console.log('Show Menu');
    } else {
      console.log('Hide Menu');
    }
    To_f_showMenuSet();
  }
}


function To_f_showMenuHideOnResizeCondition() {
  // Called if the browser is first opened and on resize of screen.
  // Values of clientHeight and scrollHeight have settled by this point.
  
  console.log( 'Enter: To_f_showMenuHideOnResizeCondition');
  
  if (document.getElementById) {
    console.log( 'window.innerWidth: ', window.innerWidth);
    
    // size is used in "main.css" as well
    if (!(window.innerWidth <= 929)) {
      To_f_showMenu( false);
    }
  }
}


function To_f_showMenuHideOnATagItemClick( event, parent) {
  var hidden = false;
  const children = parent.children;

  for ( var i = 0; i < children.length; i++) {
    const child = children[i];
    
    if (child.contains( event.target)) {
      // console.log('Child click found on tag: ', child.tagName);

      if (child.tagName === 'A') {
        console.log('Hide on click menu items A tag');
        
        To_f_showMenu( false);
        hidden = true;
      } else {
        hidden = To_f_showMenuHideOnATagItemClick( event, child)
      }
      
      if (hidden) i = children.length;
    }
  }
  
  return hidden;
}

function To_f_showMenuHideOnOutsideOrItemClick( event) {
  if (document.getElementById) {
    console.log('Enter: To_f_showMenuHideOnOutsideOrItemClick');

    const mainMenuUnviewedIcon = document.getElementById( 'MenuUnviewed');

    if (!mainMenuUnviewedIcon.contains( event.target)) {
      if (To_g_showMenu) {
        const mainMenu = document.getElementById( 'Menu'); // mobile

        if (!mainMenu.contains( event.target)) {
          console.log('Hide on click outside menu');
          
          To_f_showMenu( false);
        } else {
          const hidden = To_f_showMenuHideOnATagItemClick( event, mainMenu);
          
          if (!hidden) {
            console.log('No click outside menu or on menu item');
          }
        }
      }
    }
  }
}



function To_f_googleTranslateCorrect()
{
  // correct Google navigator right overflow
  // see: https://javascript.info/searching-elements-dom
  
  // find element after the Google script has load the translation elements
  let element = document.querySelector('a[href="https://translate.google.com"]')
  element.style.display = 'block';
}



function To_f_manage_site_end( autoResize = false, customResizeCallback = null)
{
  // #: Open hidden areas for the hash of first site call.
  To_f_hash_changed( window.location.hash);
  
  To_g_callbackOnResize = customResizeCallback;
  
  if (autoResize)
  {
    // #!: If handled direct in "To_f_manage_site_end" "clientHeight" has not the correct value.
    // #: Found in URL: http://stackoverflow.com/questions/3374877/why-do-ie-chrome-initially-give-incorrect-clientheight-and-scrollheight-for-a-te
    window.addEventListener('pageshow', To_f_manage_pageshow);
    window.addEventListener('resize', To_f_manage_resize);
  }

  document.addEventListener('click', To_f_showMenuHideOnOutsideOrItemClick);

  window.onbeforeprint = To_f_manage_beforePrint;
  window.window.onafterprint = To_f_manage_afterPrint;
  
  To_f_showMenuCloneMenu();
  
  To_f_setExpandIcons();
}
