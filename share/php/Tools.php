
<?php
  
  // #: Name:  "Tools_v01_005.php"
  
  
  // #: Stand: 21.06.2020, 14:00h
  
  // #: History: (!: changed, incompatible; >: developed, compatible but is a real change; +: new, compatible; -: remove, compatible; *: fixed, compatible)
  
  // v01.005:  20130713:  +:  "To_f_Paragraph":  Type "quote" is new.
  //           20130714:  +:  "To_f_Chapter_v1":  Is new.
  //                      !:  "To_f_Paragraph" type "jumplist":  Key "jump_name" is new.
  //                      +:  "$Glo_g_Site_ary", "$Glo_g_Site_activ" added;
  //           20130716:  !:  "To_f_Paragraph":  Types "figure", "youtube" is new.
  //           20130717:  +:  "To_f_Paragraph_list_v1":  Is new.
  //                      !:  "To_f_Chapter_v1":  New parameter "$Paragraph_fn".
  //                      +:  "To_f_elements_hides_link_simple_html":  Is new.
  //           20130723:  +:  "To_f_headline_add_hides_begin_v1":  Is new.
  //           20130731:  !:  "To_f_Paragraph":  "jumplist":  If "jump_name" is used one can define "title_site" and "title_chapter" to change the database values of them.
  //           20130801:  !:  "To_f_Chapter_v1", "To_f_Chapter":  "$headline_addon" is now with style 'style="line-height: 1.4em;"'.
  //                      !:  "To_f_Paragraph":  "jumplist":  If the site is the activ site and it is a chapter, there is no site title displayed. Site titels are now in italic style. JavaScript is now used in general if site is the activ one.
  //                      !:  "$To_g_Text_replace_preg_ary":  "jump":  JavaScript is now used in general if site is the activ one.
  //           20130802:  +:  "To_f_Paragraph":  "bulletlist":  Is new.
  //           20130808:  !:  "$To_g_Text_replace_preg_ary":  Elements get named keys.
  //                      !:  "$To_g_Text_replace_preg_ary":  'const':  "To_f_Text_replace_html" included for the global string.
  //           20130822:  !:  "$To_g_Text_replace_preg_ary":  'name':  Is new.
  //           20130824:  !:  "$To_g_Text_replace_preg_ary":  'name':  Corrected a general error.
  //           20130827:  !:  "$X_Text_replace_preg_ary":  In every subarray is value "[0]" replaced by value "[search]" and "[1]" by "[callcode]". Key "type => 'preg_replace_callback'" is added for the old style. "type => 'latexcommand'" is new.
  //                      !:  "To_f_Text_replace_html":  "type" in generell and "type => 'latexcommand'" implemented.
  //           20130830:  !:  "To_f_replace_latexcommand_parameters":  Is new.
  //                      !:  "$To_g_Text_replace_ary":  '&minus;' entrie new.
  //           20130901:  !:  "$To_g_Text_replace_preg_ary":  'jump':  Changed to "type => 'latexcommand'".
  //           20130902:  !:  "$To_g_Text_replace_preg_ary":  'color':  Changed to "type => 'latexcommand'".
  //                      *:  "$To_f_replace_latexcommand_parameters":  There was a problem if the last latex command bracket was the last char of the string. Fixed now.
  //           20130903:  !:  "To_f_Paragraph":  'contentlist' is new and error message for unknown types implemented.
  //           20130904:  !:  "To_f_Paragraph":  'contentlist':  Element 'jumpurl' is new.
  //           20130906:  *:  "To_f_replace_latexcommand_parameters":  There was a problem if the last command parameter was followed directly by a close bracket "]" or "}" which encloses this command.
  //           20131003:  !:  "To_f_Paragraph":  "quote":  Spaces replaced by "&thinsp;"; results in nobreak as well!
  //                      !:  "$To_g_Text_replace_ary":  '&thinsp;' entrie new.
  //           20131013:  +:  "$To_g_DisplayHides_General_is":  Is new and replaces partly "$To_g_bot_is".
  //           20131021:  !:  "$To_g_Text_replace_preg_ary", "name"; "To_f_Paragraph", "youtube", "jumplist"; "To_f_Chapter_v1"; "To_f_headline_add_hides_begin_v1":  If "headline_text_short" does not exists use "headline_text".
  //           20131031:  !:  "$To_g_Text_replace_preg_ary":  "jumpname":  Changed to "latexcommand".
  //                      !:  "To_f_Text_replace_html", "latexcommand":  If "search" is found the first char in the parameters must be "[" or "{" now. Otherwise "\jumpname"+"{" is found as "\jump"+"name{".
  //           20131104:  !:  "$To_g_Text_replace_preg_ary":  "jumpname":  Now with one optional parameter for the color.
  //           20131128:  !:  "To_f_Chapter_v1":  "$headline_addon", "$Paragraph_fn", "$paragraph_list":  This parameter is now preset. If they are empty or undef the behaviour is differnt now.
  //           20131204:  !:  "To_f_Chapter_v1":  "$headline_text", "$headline_text_short":  Now with "To_f_Text_replace_html".
  //           20131223:  !:  "$To_g_Text_replace_preg_ary":  "brintent":  Is new.
  //           20131224:  !:  "To_f_Paragraph":  "block":  Is new.
  //           20140106:  !:  "To_f_Paragraph":  "text"; "$Glo_g_TextAlign", "$Glo_g_Intent", "$Glo_g_Intent_InFirstLine":  Is new. 
  //           20140109:  !:  "To_f_Paragraph":  "jumplist"; "margin-top: 20px;".
  //           20140113:  !:  "To_f_Text_replace_html", "$To_g_Text_replace_preg_ary":  "callback_f" element is new in array and callback functions will only generated once and be stored until than.
  //                      +:  "To_f_replace_callback__name", "To_f_replace_callback__jump":  Is new.
  //           20140119:  !:  "$To_g_Text_replace_preg_ary":  "hidden" is new.
  //                      +:  "To_f_replace_callback__hidden":  Is new.
  //           20140129:  !:  Renamed: "To_f_replace_callback__hidden"  -->  "To_f_replace_callback__latexcommand__hidden";  "To_f_replace_callback__jump"  -->  "To_f_replace_callback__latexcommand__jump";  "To_f_replace_callback__name"  -->  "To_f_replace_callback__preg_replace_callback__name"
  //           20140312:  !:  "$To_g_Text_replace_ary":  "<br>" replacements moved from Science to here.
  //           20140313:  +:  "To_f_printStrAsASCII_html":  Is new.
  //           20140415:  !:  "$To_g_Text_replace_preg_ary":  "const" is changed to type "latexcommand".
  //                      +:  "To_f_replace_callback__latexcommand__const":  Is new.
  //           20140419:  !:  "To_f_Paragraph", "text":  New "Shape" "quote".
  //           20140427:  !:  "To_f_Paragraph":  "headline" is new.
  //           20140504:  !:  "$To_g_Text_replace_ary":  '½' -> '&frac12;' entrie new.
  //           20140507:  !:  "To_f_Paragraph", "headline":  "padding-top: 10px;".
  //                      !:  "To_f_Paragraph", "jumplist":  No table if array is empty.
  //           20140522:  !:  "To_f_Paragraph", "figure":  "To_f_headline_add" short text removed.
  //           20140523:  !:  "To_f_Paragraph", "figure", "youtube":  Centered.
  //           20140524:  !:  "To_f_Paragraph", "figure", "youtube":  Align like new global var "$Glo_g_FigAlign".
  //           20140605:  !:  "To_f_Paragraph", "jumplist":  "type" attribute with value "back" is new.
  //           20140702:  !:  "To_f_replace_callback__latexcommand__jump":  Hint as "title" implemented.
  //                      +:  "To_f_Site":  New.
  //                      !:  "To_f_anchor_Jump_html":  Hint as "title" implemented.
  //           20140704:  !:  "To_f_Site":  Parameter "$jump_name" can be overwritten now.
  //           20140707:  !:  In all "_replace_callback__latexcommand_" functions:  New parameters "$replace_ary=null, $replace_preg_ary=null".
  //           20140710:  !:  "To_f_Text_replace_html":  Multi "latexcommand" chain implemented.
  //           20140713:  !:  "To_f_replace_callback__latexcommand__jump", "To_f_anchor_Jump_html":  (Is not working!!!) If no color information is present now no color ist set for the link. Before black was set in this ocassion.
  //           20140718:  !:  "To_f_Paragraph":  "figure":  Image Border implemented.
  //           20140727:  !:  "To_f_Site":  Now an entry in the "$Glo_g_Theme_list" can link to an other entry of this list..
  //                      +:  "$Glo_g_Color_list", "To_f_Color":  New.
  //                      !:  Removed in general the control of color parameters having six digits.
  //           20140927:  !:  "$To_g_Text_replace_preg_ary" -> "name" -> "search":  "*" was added to the search pattern to support "$Glo_g_Theme_list".
  //           20140928:  !:  "To_f_Paragraph":  "contentlist":  Description text not gray but black. New optional key "startsign".
  //           20140929:  !:  "To_f_Paragraph":  "null":  Implemented.
  //           20141007:  +:  "$Glo_g_Color_list":  '*ContListDots', '*ContListDescr', '*FigDescr', '*FigTitle' added and used on proper locations.
  //           20141204:  +:  "$To_f_Paragraph":  "jumplist":  Parameter "margin" is new.
  //           20150205:  +:  "To_f_SiteName_Parent":  Is new.
  //           20150211:  +:  "$Glo_g_Site_activ_GenInfo_idx":  Is new.
  //           20150302:  +:  "$To_f_Paragraph":  "conclusion", "quote":  Parameter  "margin-right: 100px;"  -->  "margin-right: 30px;"
  //           20150323:  +:  "$To_g_Text_replace_ary":  'É' -> '&Eacute;', 'é' -> '&eacute;' entries new.
  //           20150504:  *:  "To_f_replace_callback__latexcommand__jump":  There was still "$Sc_g_Text_replace_ary" and "$Sc_g_Text_replace_preg_ary" used instead of "$replace_ary" and "$replace_preg_ary" which caused an error.
  //                      !:  "To_f_anchor_Jump_html":  Parameters "$replace_ary" and "$replace_preg_ary" are added.
  //           20150616:  *:  "$To_g_Text_replace_preg_ary", "hidden":  To avoid counting and registering of hidden "\\footnote" in "Science_XXX.php" entry "hidden" is moved to the beginning of array and got new entry "replace_internal => false".
  //                      +:  "To_f_replace_latexcommand_parameters":  Parameter "$replace_internal" is new.
  //                      +:  "To_f_Text_replace_html":  Use of new "$value[replace_internal]".
  //           20151215:  +:  "To_f_HeaderElements()":  New.
  //           20160504:  +:  "$To_g_Text_replace_preg_ary":  "bold" is new.
  //           20160702:  >:  "$To_f_Color":  Catch the error if the color alias name was not found.
  //           20160703:  +:  "To_f_Paragraph", "figure":  Array key "figPDF_is" is new.
  //           20160704:  +:  "To_f_Paragraph", "figure":  Array of "figure" and array of "youtube" implemented with "ArrayOfDirect".
  //           20160721:  >:  "To_f_Paragraph", "figure":  Table of multi figures with 'valign="top"'.
  //                      +:  "$Glo_g_Site_ary":  New element "appLink_ary" in "$Glo_g_Site_ary[$Glo_g_Site_activ]", see use in "Pjannto.php", "Pj_f_HTML_BeginHeaderBodyContainer".
  //           20160928:  >:  "$To_g_Text_replace_preg_ary":  "italic" now as "latexcommand".
  //                      >:  "$To_g_Text_replace_preg_ary":  "bold" now as "latexcommand".
  //                      +:  "$To_g_Text_replace_preg_ary":  "small" is new.
  //           20160930:  +:  "To_f_Paragraph":  "figure" new is now "figFileType" and hint title vor PDFs removed if "$figPDF_is" is false.
  //                      +:  "To_f_Paragraph":  "figure" as array. New is now "arrayMarginLeftRight".
  //           20161117:  +:  "To_f_replace_callback__latexcommand__jumpname":  New.
  //                      +:  "To_f_replace_callback__latexcommand__jumpname", "/jumpname":  Latex command has now second optional parameter for the type of the name.
  //                      +:  "To_f_Site_is":  New.
  //                      +:  "To_f_replace_callback__latexcommand__name", "/name":  Is now converted to latex command and has now first optional parameter for the type of the name.
  //           20161220:  *:  "To_f_replace_callback__latexcommand__name", "/name":  'shorttitle' got over "headline_text_short" corrected. And the assignment of "$type == 'title';" is corrected to "$type = 'title';".
  //           20170119:  +:  "To_f_Paragraph":  'fade-in-area' and 'notice' are new.
  //                      *:  "To_f_elements_hides_WriteJavaScript_ary_idx": "if (!$To_g_DisplayHides_General_is)" was decommanded again, because otherwise the logic fits not to make 'notice' and 'fade-in-area' visible if a bot is searching. But I don't really understand why!
  //           20170122:  >:  "$To_g_Text_replace_ary":  "&darr;", "&uarr;", "&larr;", "&rarr;" move from "$Sc_g_Text_replace_ary" to here.
  //                      +:  "To_f_Paragraph", 'fade-in-area', 'notice':  If visible made background of "div" light Gray.
  //           20170123:  +:  "To_f_Paragraph", 'notice':  "Title" parameter is yet alternative possible.
  //           20170206:  +:  "To_f_Paragraph", 'fade-in-area':  "Title" text is with link now.
  //                      +:  "To_f_Paragraph", 'figure', 'youtube':  CCS classes "tools-class-fig", and "tools-class-vid" are new.
  //           20170208:  +:  "$Glo_g_deviceDetect":  External mobile detection etc. is new.
  //           20170220:  +:  "$To_f_Paragraph", 'text', Shape => 'italic':  Is new.
  //           20171228:  +:  "$To_f_Paragraph", 'text', TextColor:  Is new.
  //                      +:  "$Glo_g_Color_list", '*Conclusion':  Is new.
  //           20180207:  +:  "$To_f_Paragraph", 'text', 'quote', TextColor:  Text color now move to "<p style="color: XXX;">" to include '»', '«' and addtext in the color setting.
  //           20180310:  +:  "$To_f_Paragraph", 'text':  Class "tools-class-text" now included.
  //                      >:  "$To_f_Paragraph", 'jumplist':  Fixed font size of 12px removed.
  //                      >:  "$To_f_Paragraph", 'bulletlist':  Bullet color of "color: #505050;" removed.
  //                      +:  "$To_f_Paragraph", 'bulletlist':  Class "tools-class-text" now included. "TextAlign => 'block'" added.
  //           20180426:  >:  "To_f_headline_add_hides_begin":  "<h2><a …>XXX</a></h2>" was changed to "<a …><h2>XXX</h2></a>": To have the "h2" style of CSS effektive and not the "a" style.
  //                      >:  "To_f_replace_callback__latexcommand__bold":  "bold" now as "<strong>XXX</strong>", because of easy "font-weight" definition.
  //                      >:  "To_f_headline_make":  "line-height: 0.9em" and "<small>XXX</small>" removed.
  //                      >:  "To_f_Paragraph", 'bulletlist':  "<table style="padding-left: 0px; margin-left: 10px; …" removed. To set "margin-left" by CSS.
  //                      >:  "To_f_Paragraph", 'figure', 'youtube':  "<table border="0px" width="700px" style="margin-left: 10px; margin-right: 20px;">" now set explicitely: Set here to prevent from setting by CSS, because of centering in the midddle of the content and enable widths up to "700px".
  //                      >:  "To_f_headline_add_hides_begin", "To_f_headline_add_hides_end":  "<table style="margin: 0; margin-left: 10px; …" removed. To set "margin-left" and "margin-right" by CSS.
  //                      >:  "To_f_Paragraph", 'text', 'conclusion', 'quote':  Added classes: 'tools-class-text-conclusion', 'tools-class-text-italic', 'tools-class-text-quote' to set margins etc. via CSS. In 'text' removed therefore "(((array_key_exists( Shape, $text)) && in_array( $text[Shape], array( 'conclusion', 'italic', 'quote'))) ? ' margin-left: 30px; margin-right: 30px;' : '')".
  //           20181006:  +:  "To_f_replace_callback__latexcommand__cond", "To_f_replace_callback__latexcommand__condb":  New.
  //           20181008:  +:  "To_f_Paragraph", 'figure':  Added parameter "figBigger_is".
  //                      >:  "To_f_Paragraph", 'fade-in-area':  Replaced explicit "background-color" style with class "tools-class-fade-in-area-div-vis".
  //                      +:  "$To_g_Text_replace_ary":  '⅓' -> '&frac13;'  and  '⅔' -> '&frac23;'  new.
  //           20181018:  +:  "To_f_HTMLHeader_init", "To_f_HTMLHeader_Favicons_make", "To_f_HTMLHeader_Fonts_make":  New.
  //           20181031:  +:  "To_f_Paragraph", 'fade-in-area':  "TitleVis" is new optional parameter.
  //                      >:  "To_f_replace_callback__latexcommand__color":  Is new and "\color" is now defined through "callback_f".
  //                      +:  "To_f_replace_callback__latexcommand__class":  New.
  //           20190101:  +:  "To_f_Paragraph", 'figure', 'youtube':  General table now "margin-top: 30px;". Before it was "margin-top: 20px;", but this looked to short in distance, because of the shadow I think.
  //           20190922:  -:  "$To_g_Text_replace_ary":  '– ' -> '&ndash;&nbsp;' commented out, because of ugly looking results.
  //                      *:  "$To_g_Text_replace_ary":  '–' -> '&mdash;' changed to '–' -> '&ndash;', because '&mdash;' was to wide and wrong at the end.
  //                      +:  "$To_g_Text_replace_ary":  '—' -> '&mdash;', 'Ⅰ' -> '&#x2160;', 'Ⅱ' -> '&#x2161;', and 'Ⅲ' -> '&#x2162;' new.
  //                      +:  "To_f_Paragraph", 'headline':  'headlineColor', 'subline', 'sublineColor' is new'
  //           20190928:  >:  "To_f_Paragraph", 'fade-in-area':  Replaced explicit "color" style with class "tools-class-fade-in-area-div-invis".
  //           20200103:  >:  "To_f_Paragraph", 'notice':  With no elements 'notice' is not shown.
  //           20200202:  >:  "To_f_Paragraph", 'fade-in-area':  'jumpName' is new.
  //           20200410:  +:  "$Glo_g_Paragraph_fn":  Is new.
  //                      >:  "$To_f_Paragraph":  'figure', 'youtube' changed whole undertitle to italic.
  //                      +:  "$Glo_g_Color_list", "To_f_Chapter_v1", "To_f_Chapter":  '*SectionHeadlineAddon' is new.
  //                      +:  "$Glo_g_Color_list":  '*SiteUndertitleH2' is new.
  //                      >:  "To_f_Color":  Add parameter '$removeNumberSign = true'.
  //           20200621:  +:  "To_f_Paragraph", 'headline':  'subline' supports now "To_f_Text_replace_html".
  // v01.004:  20130609:  !:  "To_f_headline_make":  Tables left margin changed to 10px.
  //                      !:  "$To_g_Text_replace_ary":  '„', '›', '‹', '»', '«' entries new.
  //           20130618:  !:  "$To_g_Text_replace_ary":  '&nbsp;', '&amp;', '&reg;', '&ldquo;' entries new.
  //           20130628:  +:  "$Glo_PathRel_back" added;
  //                      !:  "$To_g_Text_replace_ary":  '&plusmn;', '&deg;', '&copy;', '&middot;', '&bull;' entries new.
  // v01.003:  20130522:  +:  "To_f_Paragraph_list":  New.
  //           20130526:  +:  "To_f_replace_preg_latexstyle_parameters":  New.
  //                      +:  "$To_g_Text_replace_preg_ary":  Elements "const", "color", "jump".
  //           20130527:  !:  "To_f_Paragraph":  Type "jumplist" added.
  //                      +:  "To_f_Chapter":  New.
  //           20130528:  +:  "To_f_Text_replace":  New.
  //           20130529:  !:  "$To_g_Text_replace_ary":  "&mdash;" entry new.
  //           20130603:  +:  "$To_g_Text_replace_preg_ary":  "italic" is new.
  // v01.002:  20130520:  +:  "$To_g_Text_replace_ary":  Moved from "Science_v01_002.php" to here.
  //                      +:  "$$To_g_Text_replace_preg_ary":  New.
  //                      !:  "To_f_headline_add_hides_begin":  "$headline_text", "$headline_text_short" special chars are replaced by html-code now.
  //                      !:  "To_f_anchor_Jump_html":  "$$text" special chars are replaced by html-code now.
  // v01.001:  20130515:  +:  History started.
  
  
  // #: In Mind:

  // -!!! "$To_g_Text_replace_preg_ary":  "const":  Do not use "Sc_XXX" in Tools! This have to find an other solution! A global variable in Tools inited with the Tools variant that can be set different by Science.
  
  
  
  //echo "Hello, world!";
  //phpinfo();
  
  
  
  require_once 'Tools-Additions/Mobile-Detect-2.8.24/Mobile_Detect.php';
  $Glo_g_deviceDetect = new Mobile_Detect;

  // #: Any mobile device (phones or tablets).
  /*if ($Glo_g_deviceDetect->isMobile()) {
    print_r( 'Device -> Is mobile!!!');
  }
  else {
    print_r( 'Device -> Is computer!!!');
  }*/
  
  
  
  //$Glo_PathRel_back = '';     // #: Is set in the site direct.

  // #: Is set in the top PHP include.
  $Glo_g_Site_ary = null;
  $Glo_g_Site_activ = null;
  $Glo_g_Site_activ_GenInfo_idx = null;
  
  $Glo_g_Theme_list = array();

  $Glo_g_Color_list = array(
                             '*Error:ColorNotFound'   => array( color => 'FF0000'),  // #!: Do not remove!
                             // '*SiteUndertitleH2'      => array( color => '#505050'),
                             '*SiteUndertitleH2'      => array( color => '#000000'),
                             '*ContListDots'          => array( color => 'A0A0A0'),
                             '*ContListDescr'         => array( color => '000000'),
                             // '*SectionHeadlineAddon'  => array( color => '#A0A0A0'),
                             '*SectionHeadlineAddon'  => array( color => '#000000'),
                             // '*FigTitle'              => array( color => '505050'),
                             '*FigTitle'              => array( color => '000000'),
                             //%! '*FigDescr'              => array( color => 'A0A0A0'),
                             // '*FigDescr'              => array( color => '707070'),
                             '*FigDescr'              => array( color => '000000'),
                             '*Conclusion'            => array( color => '000AC4'),
                           );

  $Glo_g_TextAlign = 'normal';
  $Glo_g_Intent = null;
  $Glo_g_Intent_InFirstLine = false;
  $Glo_g_FigAlign = 'left';
  
  $Glo_g_Paragraph_fn = To_f_Paragraph;
  
  
  
  function To_f_HeaderElements()
  {
    global $Glo_g_deviceDetect, $Glo_PathRel_back;
    
    echo ''."\n";
    echo '    <script src="'.$Glo_PathRel_back.'../share/js/nospam.js" type="text/javascript" language="JavaScript"></script>'."\n";
    echo '    <script src="'.$Glo_PathRel_back.'../share/js/Tools_v01_001.js" type="text/javascript" language="JavaScript"></script>'."\n";
    echo '    <script type="text/javascript">'."\n";
    echo '          <!--'."\n";
    // #: Call JavaScript start sequence.
    //--
    echo '      To_f_manageSiteBegin( '.(($Glo_g_deviceDetect->isMobile()) ? 'true' : 'false').');'."\n";
    //echo '      To_f_manageSiteBegin( '.(true ? 'true' : 'false').');'."\n";
    echo '          -->'."\n";
    echo '    </script>'."\n";
  }
  
  
  
  function To_f_JumpName_StarReplace( &$jump_name)
  {
    global $Glo_g_Theme_list;
    
    // #?: Is "$jump_name" a theme?
    while (substr( $jump_name, 0, 1) == '*')
    {
      //print_r( $jump_name);

      if (array_key_exists( $jump_name, $Glo_g_Theme_list))
        $jump_name = $Glo_g_Theme_list[$jump_name][jump_name];
      else
        exit;

      //print_r( $jump_name);
    }
    
  }

  
  function To_f_Site( &$site_name, &$jump_name)
  {
    global $Glo_g_Theme_list;
    
    // !!!: Replace with "To_f_JumpName_StarReplace"!
    // #?: Is "$jump_name" a theme?
    while (substr( $jump_name, 0, 1) == '*')
    {
      //print_r( $jump_name);

      if (array_key_exists( $jump_name, $Glo_g_Theme_list))
        $jump_name = $Glo_g_Theme_list[$jump_name][jump_name];
      else
        exit;

      //print_r( $jump_name);
    }
    
    // #: Generate the site name from the "$value[0][0]".
    $parts = explode( ':', $jump_name);

    // #: If global notation?
    if (3 <= count( $parts))
      $site_name = ($parts[0]).':'.($parts[1]).':'.($parts[2]);
    else
      $site_name = null;

    return (isset( $site_name));
  }

  
  function To_f_Site_is( $jump_name)
  {
    //%!global $Glo_g_Theme_list;
    
    $site_is = true;
    
    // #: Replace star '*' notation.
    To_f_JumpName_StarReplace( $jump_name);
    
    // #: Generate the site name from the "$value[0][0]".
    $parts = explode( ':', $jump_name);

    // #: If pure site notation?
    
    if (3 == count( $parts))
    {
     
      // #? Every part has as min a char?
      foreach ($parts as $parts_ele)
        if (strlen( $parts_ele) == 0)
        {
          $site_is = false;
          break;
        }
        
    }
    else
      $site_is = false;

    return $site_is;
  }

  
  function To_f_SiteName_Parent( $jump_name)
  {
    $parts = explode( ':', $jump_name);

    // #: If global notation?
    if (3 <= count( $parts))
      $site_name_parent = ($parts[0]).':'.($parts[1]).':';
    else
      $site_name_parent = null;

    return ($site_name_parent);
  }

  
  
  function To_f_Color( $color, $removeNumberSign = true)
  {
    global $Glo_g_Color_list;
    
    // #?: Is "$color" defined?
    if (0 < strlen( $color))
      // #?: Is "$color" an alias?
      while (substr( $color, 0, 1) == '*')
      {
        //print_r( $$color);

        if (array_key_exists( $color, $Glo_g_Color_list))
          $color = $Glo_g_Color_list[$color][color];
        else
        {
          $color = '*Error:ColorNotFound';
          print_r( 'Error!!!: Color alias name not found!');
        }
      }
    
    if ($removeNumberSign)
      // #?: Color has a number character at the beginning?
      if ((0 < strlen( $color)) && (substr( $color, 0, 1) == '#'))
        $color = substr( $color, 1, strlen( $color) - 1);
    
    return ($color);
  }

  
  
  // #: The order of entries may be importened: As example XXX.
  // !: Change name to "$To_g_HTML_replace_ary"!
  $To_g_Text_replace_ary = array(
                                    //array( "\r\n", '<br>'),     // #!: Makes problems in the contact form.
                                    //array( "\n", '<br>'),     // #!: Makes problems in the contact form.
                                    //array( "\r", '<br>'),     // #!: Makes problems in the contact form.
                                    array( ' \\\\ ', '<br>'),
                                    array( ' \\\\', '<br>'),
                                    array( '\\\\ ', '<br>'),
                                    array( '\\\\', '<br>'),
                                    array( ' ', '&thinsp;'),  // #: Siehe http://unicode-suche.de/unicode-namesearch.pl?term=SPACE
                                    array( ' ', '&nbsp;'),
                                    array( '&&', '&amp;'),
                                    array( 'Ä', '&Auml;'),
                                    array( 'É', '&Eacute;'),
                                    array( 'Ö', '&Ouml;'),
                                    array( 'Ü', '&Uuml;'),
                                    array( 'ä', '&auml;'),
                                    array( 'é', '&eacute;'),
                                    array( 'ö', '&ouml;'),
                                    array( 'ü', '&uuml;'),
                                    array( 'ß', '&szlig;'),
                                    //array( '– ', '&ndash;&nbsp;'),  // !!!: As general as here makes sometime not so nice effects. Lets do it directly in the notices …
                                    array( '–', '&ndash;'),
                                    array( '—', '&mdash;'),
                                    array( '·', '&middot;'),
                                    array( '•', '&bull;'),
                                    array( '…', '&hellip;'),
                                    array( '„', '&bdquo;'),
                                    array( '“', '&ldquo;'),
                                    array( '›', '&rsaquo;'),
                                    array( '‹', '&lsaquo;'),
                                    array( '»', '&raquo;'),
                                    array( '«', '&laquo;'),
                                    array( '−', '&minus;'),
                                    array( '±', '&plusmn;'),
                                    array( '½', '&frac12;'),
                                    array( '⅓', '&frac13;'),
                                    array( '⅔', '&frac23;'),
                                    array( 'Ⅰ', '&#x2160;'),  // #: https://www.sql-und-xml.de/unicode-database/number-forms.html
                                    array( 'Ⅱ', '&#x2161;'),  // #: https://www.sql-und-xml.de/unicode-database/number-forms.html
                                    array( 'Ⅲ', '&#x2162;'),  // #: https://www.sql-und-xml.de/unicode-database/number-forms.html
                                    array( '°', '&deg;'),
                                    array( '©', '&copy;'),
                                    array( '®', '&reg;'),
                                    array( '↓', '&darr;'),
                                    array( '↑', '&uarr;'),
                                    array( '←', '&larr;'),
                                    array( '→', '&rarr;'),
                                  );


  function To_f_replace_str_ary( $the_str, $replace_str_ary)
  {
    $ret_str = $the_str;
    
    // #: "str_replace()" may be a quicker solution but works different, because it starts not everytime from the string begin when replaces!
    
    //print_r( $replace_str_ary);
    foreach ($replace_str_ary as $value)
    {
      // #: Replace "$value[0]" with "$value[1]".
      
      // #: Search first position of string to replace.
      $pos = strpos( $ret_str, $value[0]);
      
      // Note our use of ===.  Simply == would not work as expected
      // because the position of 'a' was the 0th (first) character.
      while ($pos !== false)
      {
        $ret_str = substr_replace( $ret_str, $value[1], $pos, strlen( $value[0]));
        
        // #: Search next position of string to replace.
        $pos = strpos( $ret_str, $value[0]);
        //$pos = strpos( $ret_str, $value[0], $pos);
      }
    }
    
    return $ret_str;
  }

  
  function To_f_replace_preg_latexstyle_parameters( $match, $command, $param_dim, $param_optional_max)
  {
    $optional_ary = null;
    $param_ary = null;
    
    $value_gen = ltrim( $match, $command);
    //echo $command;
    //echo $value_gen;
    
    // #?: There is an additional optional parameter?
    if ($value_gen[0] == '[')
    {
      $value_gen = ltrim( $value_gen, '[');
      // #: Test for more than one additional parameter.
      $parts = explode( '][', $value_gen);
      
      // #: Copy all parts except the last into the "$optional_ary" and the last keep in "$value_gen".
      foreach ($parts as $key => $value)
      {
        if ($key < count( $parts) - 1)
          $optional_ary[] = $value;
        else
          $value_gen = $value;
      }
      
      $parts = explode( ']{', $value_gen);
      
      if (count( $parts) == 2)
      {
        $optional_ary[] = $parts[0];
        $value_gen = $parts[1];
      }
      else
        
        return array( null, null);
      
    }
    else
      $value_gen = ltrim( $value_gen, '{');
    
    $value_gen = rtrim( $value_gen, '}');
    $param_ary = explode( '}{', $value_gen);
    
    if (($param_ary != null && count( $param_ary) == $param_dim) && (($optional_ary == null) || (($optional_ary != null) && (count( $optional_ary) <= $param_optional_max))))
    
      return array( $param_ary, $optional_ary);
    
    else
      
      return array( null, null);
    
  }

  
  function To_f_replace_latexcommand_parameters( $param_str, $param_dim, $param_optional_max, $replace_ary=null, $replace_preg_ary=null, $replace_internal=true)
  {
    //print_r( $param_str);

    $optional_ary = array();
    $param_ary = array();
    
    $balance_brackets_ary_dim = 0;
    $balance_brackets_ary = array();
    
    $optional_param_possible_is = (0 < $param_optional_max);
    $error = false;
    $run = true;
    $idx_offset_correct = 0;
    $idx = 0;

    while (($idx < strlen( $param_str)) && $run && !$error)
    {
      switch ($param_str[$idx])
      {
        
        case '[':
          //print_r( '"[" found! ');
        
          // #?: Is no parameter open? This means bracket level zero. In deeper levels this is not controled at this point.
          if (($balance_brackets_ary_dim == 0))
            // #?: Is no additional optional parameter possible?
            if (!$optional_param_possible_is)
              $error = true;
        
          //if ($error) print_r( 'Error at first part of "[" found! ');
        
          // #?: Is no error?
          if (!$error)
          {
            // #?: Array elemet not allocated?
            //%!if (!isset( $balance_brackets_ary[$balance_brackets_ary_dim])) then
            //%!  $balance_brackets_ary[$balance_brackets_ary_dim] = array();
            
            // #?: Bracket level zero?
            if (($balance_brackets_ary_dim == 0))
              $start_param_idx = $idx + 1;
            
            $balance_brackets_ary[$balance_brackets_ary_dim][type] = '[';
            $balance_brackets_ary_dim++;
            
            // #?: The maximum of optional parameters is reached?
            if ($balance_brackets_ary_dim == $param_optional_max)
              $optional_param_possible_is = false;
          }
          break;
        
        case ']':
          //print_r( '"]" found! ');

          // #?: Is this bracket open?
          if ((0 < $balance_brackets_ary_dim) && ($balance_brackets_ary[$balance_brackets_ary_dim - 1][type] == '['))
          {
            //print_r( 'Correct "]" found! ');

            $balance_brackets_ary_dim--;

            // #?: Bracket level zero?
            if (($balance_brackets_ary_dim == 0))
            {
              if ($replace_internal)
                $optional_ary[] = To_f_Text_replace_html( $replace_ary, $replace_preg_ary, substr( $param_str, $start_param_idx, $idx - $start_param_idx));
              else
                $optional_ary[] = substr( $param_str, $start_param_idx, $idx - $start_param_idx);

              //print_r( 'Optional Param: ['.($optional_ary[count( $optional_ary) - 1]).'] ');
            }
          }
          else
            // #?: There is no bracket open?
            if ($balance_brackets_ary_dim == 0)
              // #Yes: End of command parameters. Bracket may close a bracket pair which encloses this command.
            {
              // #: Because there can be no default chars between the command and the bracket list, this is the end.
              $run = false;
              $idx_offset_correct = 1;
            }
            else
              $error = true;
          break;
        
        case '{':
          //print_r( '"{" found! ');

          // #?: Is this more parameter than awaited?
          if ($param_dim <= count( $param_ary))
            $error = true;
        
          //if ($error) print_r( 'Error at first part of "{" found! ');
          //print_r( count( $param_ary));
          //print_r( $param_dim);
          //print_r( $error);
      
          // #?: Is no error?
          if (!$error)
          {
            // #?: Bracket level zero?
            if (($balance_brackets_ary_dim == 0))
              $start_param_idx = $idx + 1;
            
            $balance_brackets_ary[$balance_brackets_ary_dim][type] = '{';
            $balance_brackets_ary_dim++;
            
            // #: There are no optional parameters possible anymore if this type of bracket is detected.
            $optional_param_possible_is = false;
          }
          break;
        
        case '}':
          //print_r( '"}" found! ');

          // #?: Is this bracket open?
          if ((0 < $balance_brackets_ary_dim) && ($balance_brackets_ary[$balance_brackets_ary_dim - 1][type] == '{'))
          {
            $balance_brackets_ary_dim--;

            // #?: Bracket level zero?
            if (($balance_brackets_ary_dim == 0))
              if ($replace_internal)
                $param_ary[] = To_f_Text_replace_html( $replace_ary, $replace_preg_ary, substr( $param_str, $start_param_idx, $idx - $start_param_idx));
              else
                $param_ary[] = substr( $param_str, $start_param_idx, $idx - $start_param_idx);
          }
          else
            // #?: There is no bracket open?
            if ($balance_brackets_ary_dim == 0)
              // #Yes: End of command parameters. Bracket may close a bracket pair which encloses this command.
            {
              // #: Because there can be no default chars between the command and the bracket list, this is the end.
              $run = false;
              $idx_offset_correct = 1;
            }
            else
              $error = true;
          break;
        
        default:
          // #?: There is no bracket open?
          if ($balance_brackets_ary_dim == 0)
            // #Yes: End of command parameters.
          {
            // #: Because there can be no default chars between the command and the bracket list, this is the end.
            $run = false;
            $idx_offset_correct = 1;
          }
          break;
        
      }
      
      $idx++;
    }
    
    if (!$error && ($balance_brackets_ary_dim == 0) && (count( $param_ary) == $param_dim) && (count( $optional_ary) <= $param_optional_max))
    
      return array( latexparam => array( $param_ary, $optional_ary), remain_str => substr( $param_str, $idx - $idx_offset_correct));
    
    else
      
      return null;
    
  }

  
  function To_f_replace_callback__latexcommand__const( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    if ($value[0] != null)
    {
      $varname = $value[0][0];
      global $$varname;
    
      // ???: Is call of "To_f_Text_replace_html" necessary? Or is it made already before? See "\\bold".
      return To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $$varname);
    
    }
    else
    
      return 'Error: \\const: Parameter amount is not 1 and 0 optional! $value[0]';
      
  }


  function To_f_replace_callback__latexcommand__color( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    global $Glo_g_Site_ary, $Glo_g_Site_activ;

    if ($value[0] != null)
    {
      
      return '<span style="color: #'.(To_f_Color( $value[0][0])).'">'.($value[0][1]).'</span>';  // #!: Changes the "a:hover" attribute as well for a pitty!!!
      //return '<span style="color: #'.(To_f_Color( $value[0][0])).'" class="tools-class-link">'.($value[0][1]).'</span>';

    }
    else
      
      return 'Error: \\color: Parameter amount is not 2 and 0 optional! '.($value[0]);
    
  }

  
  function To_f_replace_callback__latexcommand__class( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    global $Glo_g_Site_ary, $Glo_g_Site_activ;

    if ($value[0] != null)
    {
      
      return '<span class="'.(To_f_Color( $value[0][0])).'">'.($value[0][1]).'</span>';

    }
    else
      
      return 'Error: \\class: Parameter amount is not 2 and 0 optional! '.($value[0]);
    
  }

  
  function To_f_replace_callback__latexcommand__name( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    global $Glo_g_Site_ary;

    if ($value[0] != null)
    {
      //print_r( $value);

      $site_name = '';
      // #?: Is type of name def?
      if (($value[1] != null) && ($value[1][0] != null) && (strlen( $value[1][0]) != 0))
        $type = $value[1][0];
      else
        $type = 'shorttitle';
      $name = '-?-';
      
      // #?: Global notation with 3 or more parts?
      if (To_f_Site( $site_name, $value[0][0]))
      {
        //print_r( $site_name);

        // #?: Does site exist?
        if (array_key_exists( $site_name, $Glo_g_Site_ary))
        {
          //print_r( $site_name);
          
          // #?: Is the jumpname a normal direct site jumpname with 3 not empty parts?
          if (To_f_Site_is( $value[0][0]))
          {
            //print_r( $value[0][0]);
            
            // #?: If short title does not exist?
            if (($type == 'shorttitle') && !array_key_exists( text_titel_short, $Glo_g_Site_ary[$site_name]))
              $type = 'title';

            switch ($type)
            {
              case 'description':
                if (array_key_exists( text_titel_discr_h3, $Glo_g_Site_ary[$site_name]))
                  $name = $Glo_g_Site_ary[$site_name][text_titel_discr_h3];
                break;
              case 'title':
                if (array_key_exists( text_titel_h1, $Glo_g_Site_ary[$site_name]))
                  $name = $Glo_g_Site_ary[$site_name][text_titel_h1];
                break;
              case 'shorttitle':
                if (array_key_exists( text_titel_short, $Glo_g_Site_ary[$site_name]))
                  $name = $Glo_g_Site_ary[$site_name][text_titel_short];
                break;
              case 'undertitle':
                if (array_key_exists( text_undertitel_h2, $Glo_g_Site_ary[$site_name]))
                  $name = $Glo_g_Site_ary[$site_name][text_undertitel_h2];
                break;
            }
          }
          else
          {  // #: More than 3 parts in jumpname!
            // #?: If short title does not exist?
            if (($type == 'shorttitle') && !array_key_exists( headline_text_short, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]]))
              $type = 'title';

            switch ($type)
            {
              case 'title':
                if (array_key_exists( headline_text, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]]))
                  $name = $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]][headline_text];
                else
                  // #: Error.
                  $name = $name.'(No entry "headline_text": '.$site_name.','.($value[0][0]).')';
                break;
              case 'shorttitle':
                if (array_key_exists( headline_text_short, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]]))
                  $name = $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]][headline_text_short];
                else
                  // #: Error.
                  $name = $name.'(No entry "headline_text_short": '.$site_name.','.($value[0][0]).')';
                break;
            }
          }
        }
      }
      
      return To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $name);
      
    }
    else
    
      return 'Error: \\name: Parameter amount is not 1 and 0 optional! $value[0]';
      
  }

  
  function To_f_replace_callback__latexcommand__jump( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    global $Glo_g_Site_ary, $Glo_g_Site_activ;

    if ($value[0] != null)
    {
      // #: There is no url parameter "$value[1][0]" or it has no length? Check "$value[0][0]" for "$Glo_g_Site_ary" meaning.
      if (($value[1] == null) || (strlen( $value[1][0]) == 0))
      {
        // #: Generate the site name from the "$value[0][0]".
        //%!$parts = explode( ':', $value[0][0]);

        // #: If global notation?
        //%!if (3 <= count( $parts))
        if (To_f_Site( $site_name, $value[0][0]))
        {
          //%!$site_name = ($parts[0]).':'.($parts[1]).':'.($parts[2]);

          // #: If "$site_name" is not the same as activ site? Than set url.
          if ($site_name != $Glo_g_Site_activ)
          {
            // #: No url string? Generate url string.
            if ($value[1] == null)
            {
              $value[1] = array();
              $value[1][0] = '';
            }

            $value[1][0] = $Glo_g_Site_ary[$site_name][url_rel];
          }

          // #: If "$site_name" is the same as "$value[0][0]"? Than no global name is need.
          if ($value[0][0] == $site_name)
            $value[0][0] = '';
        }
      }

      // #?: If site is not the activ one or is URL defined?
      if ((isset( $site_name, $Glo_g_Site_activ) && ($site_name != $Glo_g_Site_activ)) || !(($value[1] == null) || (strlen( $value[1][0]) == 0)))
                         
        //%!{return "<a href=\"{$value[1][0]}".((0 < strlen( $value[0][0])) ? '#' : '')."{$value[0][0]}\" style=\"color: #".(((1 < count( $value[1])) && (strlen( $value[1][1]) == 6)) ? $value[1][1] : '000000')."\">{$value[0][1]}</a>";}
        //%!{return /* For testing $site_name.' - '.($value[0][0]).'; '.*/"<a href=\"{$value[1][0]}".((0 < strlen( $value[0][0])) ? '#' : '')."{$value[0][0]}\" title=\"".((isset( $site_name, $Glo_g_Site_activ)) ? ((0 < strlen( $value[0][0])) ? (((array_key_exists( headline_text_short, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]]))) ? To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]][headline_text_short]) : To_f_Text_replace_html( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]][headline_text]))." &mdash; " : '').(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, '»'.($Glo_g_Site_ary[$site_name][text_titel_short]).'«')) : "URL: {$value[1][0]}".((0 < strlen( $value[0][0])) ? '#' : '')."{$value[0][0]}")."\" style=\"color: #".(((1 < count( $value[1])) && (strlen( $value[1][1]) == 6)) ? $value[1][1] : '000000')."\">{$value[0][1]}</a>";}
        //%!{return /* For testing $site_name.' - '.($value[0][0]).'; '.*/"<a href=\"{$value[1][0]}".((0 < strlen( $value[0][0])) ? '#' : '')."{$value[0][0]}\" title=\"".((isset( $site_name, $Glo_g_Site_activ)) ? ((0 < strlen( $value[0][0])) ? (((array_key_exists( headline_text_short, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]]))) ? To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]][headline_text_short]) : To_f_Text_replace_html( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]][headline_text]))." &mdash; " : '').(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, '»'.($Glo_g_Site_ary[$site_name][text_titel_short]).'«')) : "URL: {$value[1][0]}".((0 < strlen( $value[0][0])) ? '#' : '')."{$value[0][0]}")."\"".(((1 < count( $value[1])) && (strlen( $value[1][1]) == 6)) ? " style=\"color: #".(To_f_Color( $value[1][1]))."\"" : '').">{$value[0][1]}</a>";}
        {return /* For testing $site_name.' - '.($value[0][0]).'; '.*/"<a href=\"{$value[1][0]}".((0 < strlen( $value[0][0])) ? '#' : '')."{$value[0][0]}\" title=\"".((isset( $site_name, $Glo_g_Site_activ)) ? ((0 < strlen( $value[0][0])) ? (((array_key_exists( headline_text_short, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]]))) ? To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]][headline_text_short]) : To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$value[0][0]][headline_text]))." &mdash; " : '').(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, '»'.($Glo_g_Site_ary[$site_name][text_titel_short]).'«')) : "URL: {$value[1][0]}".((0 < strlen( $value[0][0])) ? '#' : '')."{$value[0][0]}")."\"".((1 < count( $value[1])) ? " style=\"color: #".(To_f_Color( $value[1][1]))."\"" : '').">{$value[0][1]}</a>";}
        
      else
                                            
        //%!{return To_f_anchor_Jump_html( $value[0][1], $value[0][0], (((1 < count( $value[1])) && (strlen( $value[1][1]) == 6)) ? $value[1][1] : '000000'));}
        //%!{return To_f_anchor_Jump_html( $value[0][1], $value[0][0], (((1 < count( $value[1])) && (strlen( $value[1][1]) == 6)) ? $value[1][1] : ''));}
        {return To_f_anchor_Jump_html( $value[0][1], $value[0][0], ((1 < count( $value[1])) ? $value[1][1] : ''), $replace_ary, $replace_preg_ary);}
        
    }
    else
                                                                    
      return 'Error: \\jump: Parameter amount is not 2 and 2 optional! $value[0]';
                                                                    
  }

  
  function To_f_replace_callback__latexcommand__jumpname( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    if ($value[0] != null)
    {
      // #?: Is type of name def?
      if (($value[1] != null) && ($value[1][1] != null) && (strlen( $value[1][1]) != 0))
        $type = $value[1][1];
      else
        $type = '';
      
      return To_f_Text_replace_html( $replace_ary, $replace_preg_ary, '\\jump'.((!(($value[1] == null) || (strlen( $value[1][0]) == 0))) ? '[]['.($value[1][0]).']' : '').'{'.($value[0][0]).'}{\\name['.$type.']{'.($value[0][0]).'}}');
      
    }
    else
    
      return 'Error: \\jumpname: Parameter amount is not 1 and 2 optional! $value[0]';

  }

  
  function To_f_replace_callback__latexcommand__hidden( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    if ($value[0] != null)
    
      return '';
      
    else
                                                                    
      return 'Error: \\hidden: Parameter amount is not 1 and 0 optional! $value[0]';
                                                                    
  }

  
  function To_f_replace_callback__latexcommand__italic( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    if ($value[0] != null)
    {

      return '<i>'.($value[0][0]).'</i>';
    
    }
    else
    
      return 'Error: \\italic: Parameter amount is not 1 and 0 optional! $value[0]';
      
  }


  function To_f_replace_callback__latexcommand__bold( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    if ($value[0] != null)
    {

      //%!return '<b>'.($value[0][0]).'</b>';
      return '<strong>'.($value[0][0]).'</strong>';
    
    }
    else
    
      return 'Error: \\bold: Parameter amount is not 1 and 0 optional! $value[0]';
    
  }


  function To_f_replace_callback__latexcommand__cond( $value, $replace_ary=null, $replace_preg_ary=null)
  
  // #: Condensed
  
  {
    if ($value[0] != null)
    {

      return '<span class="tools-class-text-condensed">'.($value[0][0]).'</span>';
    
    }
    else
    
      return 'Error: \\cond: Parameter amount is not 1 and 0 optional! $value[0]';
    
  }


  function To_f_replace_callback__latexcommand__condb( $value, $replace_ary=null, $replace_preg_ary=null)
  
  // #: Condensed Bold
  
  {
    if ($value[0] != null)
    {

      return '<span class="tools-class-text-condensed-bold">'.($value[0][0]).'</span>';
    
    }
    else
    
      return 'Error: \\conbd: Parameter amount is not 1 and 0 optional! $value[0]';
    
  }


  function To_f_replace_callback__latexcommand__small( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    if ($value[0] != null)
    {

      return '<small>'.($value[0][0]).'</small>';
    
    }
    else
    
      return 'Error: \\small: Parameter amount is not 1 and 0 optional! $value[0]';
      
  }


  // #: The order of entries may be importened: As example 'hidden' must be at the very beginning nad 'const' must be the next.
  $To_g_Text_replace_preg_ary = array(
                                    'hidden' =>
                                      array( type => 'latexcommand',
                                             search => '\\hidden',
                                             multi_is => false,
                                             param_dim => 1,
                                             param_optional_max => 0,
                                             //callcode => '',
                                             callback_f => 'To_f_replace_callback__latexcommand__hidden',
                                             replace_internal => false,     // #!: This is important for velocity and if "\\footnote" is hidden it shall not be counted and registered!
                                          ),
                                    'const' =>
                                      array( type => 'latexcommand',
                                             search => '\\const',
                                             param_dim => 1,
                                             param_optional_max => 0,
                                             //callcode => '',
                                             callback_f => 'To_f_replace_callback__latexcommand__const',
                                          ),
                                    'brintent' =>     // #: Unused?
                                      array( type => 'latexcommand',
                                             search => '\\brintent',
                                             param_dim => 1,     // #: This one is always empty.
                                             param_optional_max => 1,
                                             callcode =>
                                                'if ($value[0] != null)'."\n".
                                                '{'."\n".
                                                '  if ($value[1] == null)'."\n".
                                                '  {'."\n".
                                                '    $value[1] = array();'."\n".
                                                '    $value[1][0] = 6;'."\n".
                                                '  }'."\n".
                                                ''."\n".
                                                '  $ret = "<br>\\n";'."\n".
                                                ''."\n".
                                                '  for ($i = 0; $i < $value[1][0]; $i++)'."\n".
                                                '    $ret .= "&nbsp;&#x2060;";'."\n".
                                                ''."\n".
                                                '  return $ret;'."\n".
                                                '}'."\n".
                                                'else {return "Error: \\brintent: Parameter amount is not 0 and 1 optional!";}',
                                              //callback_f => 'XXX_temp_internal_function_name',
                                            ),
                                    'color' =>
                                      array( type => 'latexcommand',
                                             //search => '/\\\\color\{[a-fA-F0-9]{6}\}\{[^\}]+\}/',
                                             search => '\\color',
                                             param_dim => 2,
                                             param_optional_max => 0,
                                             /*%!callcode =>
                                                //'$value = To_f_replace_preg_latexstyle_parameters( $match[0], "\\\\color", 2, 0);'.
                                                ''.
                                                'if ($value[0] != null)'.
                                                '{'.
                                                //%!'  return "<span style=\"color: #{$value[0][0]}\">{$value[0][1]}</span>";'.
                                                //%!'  return "<span style=\"color: #".(To_f_Color( $value[0][0]))."\">{$value[0][1]}</span>";'.
                                                '  return "<span style=\"color: #".(To_f_Color( $value[0][0]))."\" class=\"tools-class-link\">{$value[0][1]}</span>";'.
                                                '}'.
                                                'else {return "Error: \\color: Parameter amount is not 2 and 0 optional! $match[0]";}',*/
                                             //callcode => '',
                                              callback_f => 'To_f_replace_callback__latexcommand__color',
                                            ),
                                    'class' =>
                                      array( type => 'latexcommand',
                                             search => '\\class',
                                             param_dim => 2,
                                             param_optional_max => 0,
                                             //callcode => '',
                                              callback_f => 'To_f_replace_callback__latexcommand__class',
                                            ),
                                    'name' =>
                                      array( type => 'latexcommand',
                                             //%!search => '/\\\\name\{[*a-zA-Z0-9:-]+\}/',
                                             search => '\\name',
                                             param_dim => 1,
                                             param_optional_max => 1,
                                             //callcode => '',
                                             //%!callback_f => 'To_f_replace_callback__preg_replace_callback__name',
                                             callback_f => 'To_f_replace_callback__latexcommand__name',
                                          ),
                                    'jump' =>
                                      array( type => 'latexcommand',
                                             search => '\\jump',
                                             param_dim => 2,
                                             param_optional_max => 2,
                                             //callcode => '',
                                             callback_f => 'To_f_replace_callback__latexcommand__jump',
                                          ),
                                    'jumpname' =>
                                      array( type => 'latexcommand',
                                             search => '\\jumpname',
                                             param_dim => 1,
                                             param_optional_max => 2,
                                             //callcode => '',
                                             callback_f => 'To_f_replace_callback__latexcommand__jumpname',
                                          ),
                                    'italic' =>
                                      array( type => 'latexcommand',
                                             search => '\\italic',
                                             param_dim => 1,
                                             param_optional_max => 0,
                                             //callcode => '',
                                             callback_f => 'To_f_replace_callback__latexcommand__italic',
                                          ),
                                    'bold' =>
                                      array( type => 'latexcommand',
                                             search => '\\bold',
                                             param_dim => 1,
                                             param_optional_max => 0,
                                             //callcode => '',
                                             callback_f => 'To_f_replace_callback__latexcommand__bold',
                                          ),
                                    'cond' =>
                                      array( type => 'latexcommand',
                                             search => '\\cond',
                                             param_dim => 1,
                                             param_optional_max => 0,
                                             //callcode => '',
                                             callback_f => 'To_f_replace_callback__latexcommand__cond',
                                          ),
                                    'condb' =>
                                      array( type => 'latexcommand',
                                             search => '\\condb',
                                             param_dim => 1,
                                             param_optional_max => 0,
                                             //callcode => '',
                                             callback_f => 'To_f_replace_callback__latexcommand__condb',
                                          ),
                                    'small' =>
                                      array( type => 'latexcommand',
                                             search => '\\small',
                                             param_dim => 1,
                                             param_optional_max => 0,
                                             //callcode => '',
                                             callback_f => 'To_f_replace_callback__latexcommand__small',
                                          ),
                                  );


  function To_f_Text_replace_html( $replace_ary=null, $replace_preg_ary=null, $text)
  {
    $text_ret = $text;
    
    if ($replace_ary != null)
      $text_ret = To_f_replace_str_ary( $text_ret, $replace_ary);
   
    //print_r( $replace_preg_ary);
    
    if ($replace_preg_ary != null)
    {
      //print_r( $replace_preg_ary);
      
      unset( $multi_ary);
      $multi_command = '';
      unset( $multi_command_value);
      $multi_pretext = '';
      $multi_testing = false;
      $multi_testing_count = 0;
      $multi_testing_dim = 5;

      foreach ($replace_preg_ary as $value)
      {
        switch ($value[type])
        {

          case 'latexcommand':
            // #?: Function not already defined?
            if (!array_key_exists( callback_f, $value))
              $value[callback_f] = create_function( '$value,$replace_ary=null,$replace_preg_ary=null', $value[callcode]);

            // #: While something is found? There are two parts.
            do
            {
              // #!: The search must be expanded by "[" or "{". Otherwise two commands can not start with the same chars as "\jump" and "\jumpname"!
              // #!: The search must find the first in the text at first. Otherwise if multiple is it finds "\footnote[" or "\footnote{" at first. Than the ones before can not be found anymore and multi as well will not work correctly if both variants are used in one multi collection.
              {
                // #: Old code that does not work correctly anymore with multi collection.
                /*$expand_char = '[';
                $parts = explode( ($value[search]).$expand_char, $text_ret, 2);
                
                if (count( $parts) != 2)
                {
                  $expand_char = '{';
                  $parts = explode( ($value[search]).$expand_char, $text_ret, 2);
                }*/
                
                $parts_square = explode( ($value[search]).'[', $text_ret, 2);
                $parts_brace = explode( ($value[search]).'{', $text_ret, 2);
                
                // #?: Are both commands usable?
                if ((count( $parts_square) == 2) && (count( $parts_brace) == 2))
                {
                  // #?: Which command is in front of the other?
                  if (strlen( $parts_square[0]) < strlen( $parts_brace[0]))
                  {
                    $expand_char = '[';
                    $parts = $parts_square;
                  }
                  else
                  {
                    $expand_char = '{';
                    $parts = $parts_brace;
                  }
                }
                else
                  if (count( $parts_square) == 2)
                  {
                    $expand_char = '[';
                    $parts = $parts_square;
                  }
                  else
                    if (count( $parts_brace) == 2)
                    {
                      $expand_char = '{';
                      $parts = $parts_brace;
                    }
                    else
                      $parts = array();
            }
              
              // #?: There are two parts?
              if (count( $parts) == 2)
              {
                $result = To_f_replace_latexcommand_parameters( $expand_char.$parts[1], $value[param_dim], $value[param_optional_max], $replace_ary, $replace_preg_ary, (array_key_exists( replace_internal, $value)) ? $value[replace_internal] : true);
                     // #: If "$value[replace_internal]" does not exist or it es true, than every latex parameter is already replaced internaly in this function.
                     //      This is important for multiple chained commands like "\\footnote{}\\footnote{}".
                     // #Velo: So "To_f_replace_str_ary" is used several times to often. Because it's called at the beginning of the present function and every time if the function here is called.
                
                // #?: No error occured?
                if (isset($result))
                {
                  $direct_output_is = true;
                  
                  // #?: Is "$multi_ary" activ?
                  if (isset( $multi_ary))
                  {
                    // #?: Is it the same command and there are no chars between the commands?
                    if (($value[search] == $multi_command) && ($parts[0] == ''))
                      $direct_output_is = false;
                    else
                      if ($multi_testing && ($multi_testing_count < $multi_testing_dim))
                        print_r( 'Nächten nicht eingesammelt! "'.($value[search]).'" '/*, "'.($parts[0]).'" '*/);
                  }
                  
                  // #!: This has to be inbetween the two "isset( $multi_ary)" and "!isset( $multi_ary)" structures! Because the new command can be multi as well as the one bevore!
                  // #?: Is "$direct_output_is" and "$multi_ary" activ?
                  if ($direct_output_is && isset( $multi_ary))
                  {
                    if ($multi_testing && ($multi_testing_count < $multi_testing_dim))
                    {
                      print_r( 'Multi ausgeben! ');
                      //print_r( $multi_ary);
                      //print_r( '"'.$multi_pretext.'" ');
                      //print_r( $multi_command_value);
                    }
                    
                    $parts[0] = ($multi_pretext).($multi_command_value[callback_f]( $multi_ary, $replace_ary, $replace_preg_ary)).($parts[0]);
                    //$text_ret_0 = ($multi_pretext);
                    //$text_ret_1 = ($multi_command_value[callback_f]( $multi_ary, $replace_ary, $replace_preg_ary));
                    //$text_ret_2 = ($result[remain_str]);
                    //print_r( $text_ret);
                    //$text_ret = $text_ret_0.$text_ret_1.$text_ret_2;

                    $multi_testing_count++;
                    
                    unset( $multi_ary);
                  }

                  // #?: Is "$multi_ary" not activ?
                  if (!isset( $multi_ary))
                    // #?: If "$value[multi_is]" exists and is "true"?
                    if (array_key_exists( multi_is, $value) && $value[multi_is])
                    {
                      if ($multi_testing && ($multi_testing_count < $multi_testing_dim))
                        print_r( 'Ersten gefunden! "'.($value[search]).'" ');
                    
                      $multi_ary = array();
                      //if ($multi_testing && ($multi_testing_count < $multi_testing_dim))
                      //  print_r( $multi_ary);
                      $multi_command = $value[search];
                      $multi_command_value = $value;
                      $multi_pretext = $parts[0];
                      
                      $direct_output_is = false;
                    }

                  // #?: Is "$direct_output_is"?
                  if ($direct_output_is)
                    $text_ret = ($parts[0]).($value[callback_f]( $result[latexparam], $replace_ary, $replace_preg_ary)).($result[remain_str]);
                  else
                  {     // #: Collect multi data.
                    $multi_ary[count( $multi_ary)] = $result[latexparam];
                    //print_r( $result[latexparam]);
                    $text_ret = $result[remain_str];

                    if ($multi_testing && ($multi_testing_count < $multi_testing_dim))
                    {
                      print_r( 'Eingesammelt! ');
                      //print_r( $multi_ary);
                    }
                  }
                }
                else
                  // #err: Change search string, that it can not be found again, but the user can analyse the error.
                  $text_ret = $parts[0].'>>>!'.(substr( $value[search], 1)).$parts[1];
              }

              //%!$parts = explode( $value[search], $text_ret, 2);
            } while (count( $parts) == 2);
          
            break;

          case 'preg_replace_callback':
          
            // #?: Is "$multi_ary" activ? Than there is still an output to do!
            if (isset( $multi_ary))
            {
              $text_ret = $multi_pretext.($multi_command_value[callback_f]( $multi_ary, $replace_ary, $replace_preg_ary)).($result[remain_str]);

              unset( $multi_ary);
            }
          
            // #?: Function not already defined?
            if (!array_key_exists( callback_f, $value))
              $value[callback_f] = create_function( '$match,$replace_ary=null,$replace_preg_ary=null', $value[callcode]);
            
            // #: How to handle regular expressions is dicribed here: "http://www.regular-expressions.info/tutorial.html", "http://www.regular-expressions.info/email.html", "http://de1.php.net/manual/de/regexp.reference.meta.php".
            //%!$text_ret = preg_replace_callback( $value[search], create_function( '$match', $value[callcode]), $text_ret);
            $text_ret = preg_replace_callback( $value[search], $value[callback_f], $text_ret);
            //print_r( $footnote_str);
            break;

        }
      }
      
          
      // #?: Is "$multi_ary" activ? Than there is still an output to do!
      if (isset( $multi_ary))
      {
        $text_ret = $multi_pretext.($multi_command_value[callback_f]( $multi_ary, $replace_ary, $replace_preg_ary)).($result[remain_str]);

        unset( $multi_ary);
      }
    
    }
    
    return $text_ret;

  }
  
  
  function To_f_Text_replace( $replace_ary=null, $replace_preg_ary=null, $text)
  {
    echo To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text);
  }
  
  

  function To_f_HTMLHeader_init( $site_activ)
  {
    global $Glo_g_Site_activ, $Glo_g_Site_activ_GenInfo_idx;
    
    $Glo_g_Site_activ = $site_activ;
    $Glo_g_Site_activ_GenInfo_idx = To_f_SiteName_Parent( $Glo_g_Site_activ);
  }
  
  
  function To_f_HTMLHeader_Favicons_make()
  {
    global $Glo_g_Site_ary, $Glo_g_Site_activ_GenInfo_idx;
    
    // #: Like given by "Image2Icon.app".
    
    $favicons_url_rel_opt_is = array_key_exists( favicons_url_rel_opt, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx]);
    
    // #?: If favicon folder path entry and the folder path exists?
    if ($favicons_url_rel_opt_is && file_exists( $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][favicons_url_rel_opt]))
    {
      $favicons_url_rel_opt = $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][favicons_url_rel_opt];
    
      $filenamepath = $favicons_url_rel_opt.'favicon.ico';
      if (file_exists( $filenamepath))
      {
        echo '    <!-- For old IEs -->'."\n";
        echo '    <link rel="shortcut icon" href="'.$filenamepath.'" />'."\n";
        echo ''."\n";
        echo '    <!-- For new browsers - multisize ico  -->'."\n";
        echo '    <link rel="icon" type="image/x-icon" sizes="16x16 32x32" href="'.$filenamepath.'">'."\n";
        echo ''."\n";
      }
      $filenamepath = $favicons_url_rel_opt.'favicon-152-precomposed.png';
      if (file_exists( $filenamepath))
      {
        echo '    <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->'."\n";
        echo '    <link rel="apple-touch-icon" sizes="152x152" href="'.$filenamepath.'">'."\n";
        echo ''."\n";
      }
      $filenamepath = $favicons_url_rel_opt.'favicon-144-precomposed.png';
      if (file_exists( $filenamepath))
      {
        echo '    <!-- For iPad with high-resolution Retina display running iOS ≤ 6: -->'."\n";
        echo '    <link rel="apple-touch-icon" sizes="144x144" href="'.$filenamepath.'">'."\n";
        echo ''."\n";
      }
      $filenamepath = $favicons_url_rel_opt.'favicon-120-precomposed.png';
      if (file_exists( $filenamepath))
      {
        echo '    <!-- For iPhone with high-resolution Retina display running iOS ≥ 7: -->'."\n";
        echo '    <link rel="apple-touch-icon" sizes="120x120" href="'.$filenamepath.'">'."\n";
        echo ''."\n";
      }
      $filenamepath = $favicons_url_rel_opt.'favicon-114-precomposed.png';
      if (file_exists( $filenamepath))
      {
        echo '    <!-- For iPhone with high-resolution Retina display running iOS ≤ 6: -->'."\n";
        echo '    <link rel="apple-touch-icon" sizes="114x114" href="'.$filenamepath.'">'."\n";
        echo ''."\n";
      }
      $filenamepath = $favicons_url_rel_opt.'favicon-180-precomposed.png';
      if (file_exists( $filenamepath))
      {
        echo '    <!-- For iPhone 6+ -->'."\n";
        echo '    <link rel="apple-touch-icon" sizes="180x180" href="'.$filenamepath.'">'."\n";
        echo ''."\n";
      }
      $filenamepath = $favicons_url_rel_opt.'favicon-72-precomposed.png';
      if (file_exists( $filenamepath))
      {
        echo '    <!-- For first- and second-generation iPad: -->'."\n";
        echo '    <link rel="apple-touch-icon" sizes="72x72" href="'.$filenamepath.'">'."\n";
        echo ''."\n";
      }
      $filenamepath = $favicons_url_rel_opt.'favicon-57.png';
      if (file_exists( $filenamepath))
      {
        echo '    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->'."\n";
        echo '    <link rel="apple-touch-icon" href="'.$filenamepath.'">'."\n";
        echo ''."\n";
      }
      $filenamepath = $favicons_url_rel_opt.'favicon-32.png';
      if (file_exists( $filenamepath))
      {
        echo '    <!-- For Old Chrome -->'."\n";
        echo '    <link rel="icon" href="'.$filenamepath.'" sizes="32x32">'."\n";
        echo ''."\n";
      }
      $filenamepath = $favicons_url_rel_opt.'favicon-144.png';
      if (file_exists( $filenamepath))
      {
        echo '    <!-- For IE10 Metro -->'."\n";
        echo '    <meta name="msapplication-TileColor" content="#FFFFFF">'."\n";
        echo '    <meta name="msapplication-TileImage" content="'.$filenamepath.'">'."\n";
        echo '    <meta name="theme-color" content="#ffffff">'."\n";
        echo ''."\n";
      }
      $filenamepath = $favicons_url_rel_opt.'manifest.json';
      $filenamepath_2 = $favicons_url_rel_opt.'favicon-192.png';
      if (file_exists( $filenamepath) && file_exists( $filenamepath_2))
      {
        echo '    <!-- Chrome for Android -->'."\n";
        echo '    <link rel="manifest" href="'.$filenamepath.'">'."\n";
        echo '    <link rel="icon" sizes="192x192" href="'.$filenamepath_2.'">'."\n";
        echo ''."\n";
      }
    }
  }
  
  
  function To_f_HTMLHeader_Fonts_make()
  {
    global $Glo_g_Site_ary, $Glo_g_Site_activ_GenInfo_idx;
    
    // #: Additional fonts
    
    // #?: Is there a font list?
    if (array_key_exists( font_ary, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx]))
    
      foreach ($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][font_ary] as $font_linkText)
      {
        echo '    '.($font_linkText)."\n";
      }
    
  }
  
  

  function To_f_Paragraph( $type, $replace_ary=null, $replace_preg_ary=null, $offset='            ', $text)
  {
    global $Glo_PathRel_back, $Glo_g_Site_ary, $Glo_g_Site_activ, $Glo_g_Color_list, $Glo_g_TextAlign, $Glo_g_Paragraph_fn, $Glo_g_Intent, $Glo_g_Intent_InFirstLine, $Glo_g_FigAlign;
    
    // #: Start.
    switch ($type)
    {
      case 'null':
        break;
      case 'normal':
        echo $offset.'<p>'."\n";
        break;
      case 'block':
        echo $offset.'<p style="'.(((gettype( $text) == 'array') && (gettype( $text[text]) == 'array') && (1 < count( $text[text]))) ? 'margin-bottom: 0px;' : '').' text-align: justify;'.(((gettype( $text) == 'array') && (array_key_exists( intent, $text)) && (!array_key_exists( NoIntentInFirstLine, $text))) ? ' text-indent: '.($text[intent]).';' : '').'">'."\n";
        break;
      // #: 'text' Pamameter example: "Shape  => 'conclusion', TextColor => '000000', TextAlign => 'block', intent => '2em', NoIntentInFirstLine => true"
      case 'text':
        $text_color = To_f_Color( (((gettype( $text) == 'array') && (array_key_exists( TextColor, $text))) ? $text[TextColor] : ''));
      
        $block_param_add_is = ((gettype( $text) == 'array') && (array_key_exists( TextAlign, $text)));
        $block_is = (($block_param_add_is && ($text[TextAlign] == 'block')) || (!$block_param_add_is && ($Glo_g_TextAlign == 'block')));
        
        $intent_param_add_is = ((gettype( $text) == 'array') && (array_key_exists( intent, $text)));
        $intent = ($intent_param_add_is) ? $text[intent] : $Glo_g_Intent;

        $intent_NoInFirstLine_param_add_is = ((gettype( $text) == 'array') && (array_key_exists( NoIntentInFirstLine, $text)));
        $intent_InFirstLine = ($intent_NoInFirstLine_param_add_is) ? false : $Glo_g_Intent_InFirstLine;
        
        $shape_is = ((gettype( $text) == 'array') && array_key_exists( Shape, $text));
        $class_Additional = '';
        if ($shape_is)
          switch ($text[Shape])
          {
            case 'conclusion':
              $class_Additional = 'tools-class-text-conclusion';
              break;
            case 'italic':
              $class_Additional = 'tools-class-text-italic';
              break;
            case 'quote':
              $class_Additional = 'tools-class-text-quote';
              break;
          }
        
        //%!echo $offset.'<p style="'.(((gettype( $text) == 'array')) ? (((gettype( $text[text]) == 'array') && (1 < count( $text[text]))) ? ' margin-bottom: 0px;' : '').(((array_key_exists( Shape, $text)) && in_array( $text[Shape], array( 'conclusion', 'quote'))) ? ' margin-left: 30px; margin-right: 100px;' : '') : '').(($block_is) ? ' text-align: justify;' : '').((($intent != null) && $intent_InFirstLine) ? ' text-indent: '.$intent.';' : '').'">'."\n";
        //%!echo $offset.'<p class="tools-class-text" style="'.(((gettype( $text) == 'array')) ? (((gettype( $text[text]) == 'array') && (1 < count( $text[text]))) ? 'margin-bottom: 0px;' : '').(((array_key_exists( Shape, $text)) && in_array( $text[Shape], array( 'conclusion', 'italic', 'quote'))) ? ' margin-left: 30px; margin-right: 30px;' : '') : '').(($block_is) ? ' text-align: justify;' : '').((($intent != null) && $intent_InFirstLine) ? ' text-indent: '.$intent.';' : '').((0 < strlen( $text_color)) ? ' color: #'.$text_color.';' : '').'">'."\n";
        //%!echo $offset.'<p class="tools-class-text'.((0 < strlen($class_Additional)) ? ' '.$class_Additional : '').'" style="'.(((gettype( $text) == 'array')) ? (((gettype( $text[text]) == 'array') && (1 < count( $text[text]))) ? 'margin-bottom: 0px;' : '').(((array_key_exists( Shape, $text)) && in_array( $text[Shape], array( 'conclusion', 'italic', 'quote'))) ? ' margin-left: 30px; margin-right: 30px;' : '') : '').(($block_is) ? ' text-align: justify;' : '').((($intent != null) && $intent_InFirstLine) ? ' text-indent: '.$intent.';' : '').((0 < strlen( $text_color)) ? ' color: #'.$text_color.';' : '').'">'."\n";
        echo $offset.'<p class="tools-class-text'.((0 < strlen($class_Additional)) ? ' '.$class_Additional : '').'" style="'.(((gettype( $text) == 'array')) ? (((gettype( $text[text]) == 'array') && (1 < count( $text[text]))) ? 'margin-bottom: 0px;' : '') : '').(($block_is) ? ' text-align: justify;' : '').((($intent != null) && $intent_InFirstLine) ? ' text-indent: '.$intent.';' : '').((0 < strlen( $text_color)) ? ' color: #'.$text_color.';' : '').'">'."\n";

        //%!if ((gettype( $text) == 'array') && ((array_key_exists( Shape, $text)) && ($text[Shape] == 'conclusion')))
        //%!  echo $offset.'  <span style="color: #000AC4">'."\n";
        //%!if ((gettype( $text) == 'array') && array_key_exists( Shape, $text))
        if ($shape_is)
          switch ($text[Shape])
          {
            case 'conclusion':
              echo $offset.'  <span style="color: #'.(To_f_Color( '*Conclusion')).'">'."\n";  // #: ??? Color could be set now via CSS, since 'tools-class-text-conclusion' is implemented.
              break;
            case 'italic':
              echo $offset.'  <i>';
              break;
            case 'quote':
              echo $offset.'  <i>&raquo;&thinsp;';
              break;
          }
          
          // #? TextColor defined?
          /*%!if (0 < strlen( $text_color))
            echo $offset.'  <span style="color: #'.$text_color.'">'."\n";*/
        break;
      case 'headline':
        // #: "margin" can intersect, "padding" can not intersect and it will allways add.
        echo $offset.'<h4 style="margin-top: 20px;'.(((gettype( $text) == 'array') && array_key_exists( headlineColor, $text)) ? ' color: #'.(To_f_Color($text[headlineColor])).';' : '').'">'.(((gettype( $text) == 'array') && array_key_exists( jump_name, $text)) ? '<a name="'.($text[jump_name]).'"></a>' : '');
        break;
      case 'conclusion':
        //%!echo $offset.'<p style="margin-left: 30px; margin-right: 100px;">'."\n";
        //%!echo $offset.'<p class="tools-class-text tools-class-text-conclusion" style="margin-left: 30px; margin-right: 30px;">'."\n";
        echo $offset.'<p class="tools-class-text tools-class-text-conclusion">'."\n";
        echo $offset.'  <span style="color: #'.(To_f_Color( '*Conclusion')).'">'."\n";
        break;
      case 'contentlist':
        echo $offset.'<table border="0"> <colgroup> <col width="22"> <col width="300"> <col width="16"> <col width="362"> </colgroup>'."\n";
        break;
      case 'quote':
        //%!echo $offset.'<p style="margin-left: 30px; margin-right: 100px;">'."\n";
        //%!echo $offset.'<p class="tools-class-text tools-class-text-quote" style="margin-left: 30px; margin-right: 30px;">'."\n";
        echo $offset.'<p class="tools-class-text tools-class-text-quote">'."\n";
        echo $offset.'  <i>&raquo;&thinsp;';
        break;
      case 'bulletlist':
        $block_param_add_is = (/*(gettype( $text) == 'array') && */(array_key_exists( TextAlign, $text)));  /* #: Proof of array removed, because it is always array! */
        $block_is = (($block_param_add_is && ($text[TextAlign] == 'block')) || (!$block_param_add_is && ($Glo_g_TextAlign == 'block')));
        
        //%!echo $offset.'<table class="tools-class-text" border="0" style="padding-left: 0px; margin-left: 10px;'.(($block_is) ? ' text-align: justify;' : '').'" cellspacing="0" cellpadding="0">'."\n";
        echo $offset.'<table class="tools-class-text" border="0" style="'.(($block_is) ? ' text-align: justify;' : '').'" cellspacing="0" cellpadding="0">'."\n";
        break;
      case 'jumplist':
        // #?: Is an element in array?
        if (0 < count( $text))
        {
          // #: "margin" can intersect, "padding" can not intersect and it will allways add.
          //%!echo $offset.'<p style="font-size: 12px; '.( (array_key_exists( margin, $text[0]) && $text[0][margin] == 'margin_small') ? '' : 'margin-top: 20px; margin-bottom: 20px;').' color: #505050;">'."\n";
          echo $offset.'<p style="'.( (array_key_exists( margin, $text[0]) && $text[0][margin] == 'margin_small') ? '' : 'margin-top: 20px; margin-bottom: 20px;').' color: #505050;">'."\n";
        }
        break;
      case 'figure':
      case 'youtube':
        break;
      case 'fade-in-area':
        break;
      case 'notice':
        break;
      default:
        echo '>>>! Unknown paragraph type: "'.$type.'"';
    }
    
    // #: Content.
    switch ($type)
    {
      case 'normal':
      case 'headline':
      case 'conclusion':
      case 'quote':
        if (gettype( $text) == 'array')
          echo (To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text[text]));
        else
          echo (To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text));
        switch ($type)
        {
          case 'headline':
            if ((gettype( $text) == 'array') && array_key_exists( subline, $text) && (0 < strlen($text[subline])))
              echo $offset.'<br><small'.(((gettype( $text) == 'array') && array_key_exists( sublineColor, $text)) ? ' style="color: #'.(To_f_Color($text[sublineColor])).';"' : '').'>'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text[subline])).'</small>';
            break;
        }
        break;
      
      case 'block':
      case 'text':
        if (gettype( $text) == 'array')
        {
          if (gettype( $text[text]) == 'array')
          {
            
            foreach ($text[text] as $text_ele_key => $text_ele)
            {
              if (0 < $text_ele_key)
              {
                //%!if ((gettype( $text) == 'array') && ((array_key_exists( Shape, $text)) && ($text[Shape] == 'conclusion')))
                //%!  echo $offset.'  </span>'."\n";
                if ((gettype( $text) == 'array') && array_key_exists( Shape, $text))
                  switch ($text[Shape])
                  {
                    case 'conclusion':
                      echo $offset.'  </span>'."\n";
                      break;
                    case 'italic':
                    case 'quote':
                      //echo '&thinsp;&laquo;</i>'."\n";
                      break;
                  }

                // #? TextColor defined?
                /*%!if (0 < strlen( $text_color))
                  echo $offset.'  </span>'."\n";*/

                echo $offset.'</p>'."\n";
                //%!echo $offset.'<p style="'.((($text_ele_key < count( $text[text]) - 1)) ? 'margin-top: 0px; margin-bottom: 0px; ' : 'margin-top: 0px; ').'text-align:justify;'.(((array_key_exists( intent, $text))) ? ' text-indent: '.($text[intent]).';' : '').'">'."\n";
                //%!echo $offset.'<p style="'.((($text_ele_key < count( $text[text]) - 1)) ? ' margin-top: 0px; margin-bottom: 0px;' : ' margin-top: 0px;').(((gettype( $text) == 'array') && (array_key_exists( Shape, $text)) && ($text[Shape] == 'conclusion')) ? ' margin-left: 30px; margin-right: 100px;' : '').' text-align: justify;'.(($intent != null) ? ' text-indent: '.$intent.';' : '').'">'."\n";
                //%!echo $offset.'<p style="'.((($text_ele_key < count( $text[text]) - 1)) ? ' margin-top: 0px; margin-bottom: 0px;' : ' margin-top: 0px;').(((gettype( $text) == 'array') && (array_key_exists( Shape, $text)) && in_array( $text[Shape], array('conclusion', 'quote'))) ? ' margin-left: 30px; margin-right: 100px;' : '').' text-align: justify;'.(($intent != null) ? ' text-indent: '.$intent.';' : '').'">'."\n";
                echo $offset.'<p class="tools-class-text'.((0 < strlen($class_Additional)) ? ' '.$class_Additional : '').'" style="'.((($text_ele_key < count( $text[text]) - 1)) ? 'margin-top: 0px; margin-bottom: 0px;' : ' margin-top: 0px;').' text-align: justify;'.(($intent != null) ? ' text-indent: '.$intent.';' : '').((0 < strlen( $text_color)) ? ' color: #'.$text_color.';' : '').'">'."\n";

                //%!if ((gettype( $text) == 'array') && ((array_key_exists( Shape, $text)) && ($text[Shape] == 'conclusion')))
                //%!  echo $offset.'  <span style="color: #000AC4">'."\n";
                if ((gettype( $text) == 'array') && array_key_exists( Shape, $text))
                  switch ($text[Shape])
                  {
                    case 'conclusion':
                      echo $offset.'  <span style="color: #'.(To_f_Color( '*Conclusion')).'">'."\n";
                      break;
                    case 'italic':
                    case 'quote':
                      //echo $offset.'  <i>&raquo;&thinsp;';
                      break;
                  }

                // #? TextColor defined?
                /*if (0 < strlen( $text_color))
                  echo $offset.'  <span style="color: #'.$text_color.'">'."\n";*/
              }
              
              // #: Preparation of "$text_ele" before output.
              if ((gettype( $text) == 'array') && array_key_exists( Shape, $text))
                switch ($text[Shape])
                {
                  case 'conclusion':
                    break;
                  case 'italic':
                  case 'quote':
                    // #?: Is this the last part of the text?
                    if ($text_ele_key == count( $text[text]) - 1)
                      // #: Removes eventual "\n" or spaces at the end to let "&thinsp;" take effectiv place before "&laquo;".
                      $text_ele = rtrim( $text_ele);
                    break;
                }

              echo (To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text_ele));
            }
          }
          else
            echo (To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text[text]));
        }
        else
          echo (To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text));
        break;
      
      case 'contentlist':
        
        foreach ($text[content_ary] as $key => $value)
        {
          echo $offset.'  <tr> <td valign="top">'.((array_key_exists( startsign, $value)) ? $value[startsign] : '&rarr;').'</td> <td valign="top">';
          echo                (To_f_Text_replace_html( $replace_ary, $replace_preg_ary, ((array_key_exists( jumpname, $value) || array_key_exists( jumpurl, $value)) ? '\\jump'.(array_key_exists( jumpurl, $value) ? '['.($value[jumpurl]).']' : '').'{'.(array_key_exists( jumpname, $value) ? $value[jumpname] : '').'}{' : '').($value[title]).((array_key_exists( jumpname, $value) || array_key_exists( jumpurl, $value)) ? '}' : '')));
          echo                  '</td> <td valign="top" style="color: #'.($Glo_g_Color_list['*ContListDots'][color]).'">'."\n";
          //%!echo $offset.'    '.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, '…')).'</td> <td valign="top" style="color: #A0A0A0">'."\n";
          //%!echo $offset.'    '.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, '…')).'</td> <td valign="top" style="color: #'.($Glo_g_Color_list['*ContListDescr'][color]).'">'."\n";
          echo $offset.'    '.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, '')).'</td> <td valign="top" style="color: #'.($Glo_g_Color_list['*ContListDescr'][color]).'">'."\n";
          echo $offset.'      '.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value[description])).'</td> </tr>'."\n";
          
          if ($key + 1 < count( $text[content_ary]))
            echo $offset.'  <tr><td height="5px"></td></tr>'."\n";
        }
        
        break;

      /*%!case 'quote':
        if (gettype( $text) == 'array')
          echo (To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text[text]));
        else
          echo (To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text));
        break;*/
      
      case 'bulletlist':
        
        foreach ($text[bullet_ary] as $value)
        {
          //%!echo $offset.'  <tr> <td valign="top"> <p style="padding-left: 0px; margin: 0 0px 0px; color: #505050;">&bull;</p> </td>'."\n";
          echo $offset.'  <tr> <td valign="top"> <p style="padding-left: 0px; margin: 0 0px 0px;">&bull;</p> </td>'."\n";
          echo $offset.'    <td valign="top"> <p style="padding-left: 0px; margin: 0 5px 0px;">'."\n";
          echo $offset.'      '.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value)).'</p> </td> </tr>'."\n";
        }
        
        break;

      case 'jumplist':
        
        // #?: Is an element in array?
        if (0 < count( $text))

          foreach ($text as $value_ary)
          {
            // #?: Is short version?
            if (array_key_exists( jump_name, $value_ary))
            {
              // #: Generate the site name from the "$value_ary[jump_name]".
              if (To_f_Site( $site_name, $value_ary[jump_name]))
                ;
              //%!$parts = explode( ':', $value_ary[jump_name]);
              //%!$site_name = ($parts[0]).':'.($parts[1]).':'.($parts[2]);
              //print_r( $site_name);

              // #?: Is "title_site" is undefined? Set "title_site".
              if (!array_key_exists( title_site, $value_ary))
                $value_ary[title_site] = $Glo_g_Site_ary[$site_name][text_titel_short];
              //print_r( $value_ary[title_site]);

              // #?: Is "$site_name" not the activ site name?
              if ($site_name != $Glo_g_Site_activ)
                $value_ary[jump_url] = $Glo_g_Site_ary[$site_name][url_rel];
              
              // #?: Is "jump_name" a chapter of the site?
              if ($value_ary[jump_name] != $site_name)
              {
                // #?: Is "title_chapter" is undefined? Set "title_chapter".
                if (!array_key_exists( title_chapter, $value_ary))
                  if (array_key_exists( headline_text_short, $Glo_g_Site_ary[$site_name][jump_ary][$value_ary[jump_name]]))
                    $value_ary[title_chapter] = $Glo_g_Site_ary[$site_name][jump_ary][$value_ary[jump_name]][headline_text_short];
                  else
                    $value_ary[title_chapter] = $Glo_g_Site_ary[$site_name][jump_ary][$value_ary[jump_name]][headline_text];
                $value_ary[jump_anchor] = $value_ary[jump_name];
              }
            }
            
            //echo '$Glo_g_Site_activ: "'; print_r( $Glo_g_Site_activ); echo '", ';
            //echo '$site_name: "'; print_r( $site_name); echo '"<br>';
            
            // #?: Is URL?
            // #?: If site is not the activ one or is URL defined?
            if ((isset( $site_name, $Glo_g_Site_activ) && ($site_name != $Glo_g_Site_activ)) || (array_key_exists( jump_url, $value_ary)))
              //%!echo $offset.'  &rarr; &nbsp; <a href="'.($value_ary[jump_url]).( (array_key_exists( jump_anchor, $value_ary)) ? '#'.($value_ary[jump_anchor]) : '').'" style="color: #505050;">'.((array_key_exists( title_chapter, $value_ary)) ? To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value_ary[title_chapter]) : To_f_Text_replace_html( $replace_ary, $replace_preg_ary, '<i>'.($value_ary[title_site]).'</i>')).'</a>'.((array_key_exists( title_chapter, $value_ary) && ($value_ary[title_site] != '')) ? ' &mdash; '.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, '<i>'.($value_ary[title_site]).'</i>')) : '').'<br>'."\n";
              echo $offset.'  '.(((array_key_exists( type, $value_ary) && $value_ary[type] == 'back')) ? '&larr;' : '&rarr;').' &nbsp; <a href="'.($value_ary[jump_url]).( (array_key_exists( jump_anchor, $value_ary)) ? '#'.($value_ary[jump_anchor]) : '').'" style="color: #505050;">'.((array_key_exists( title_chapter, $value_ary)) ? To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value_ary[title_chapter]) : To_f_Text_replace_html( $replace_ary, $replace_preg_ary, '<i>'.($value_ary[title_site]).'</i>')).'</a>'.((array_key_exists( title_chapter, $value_ary) && ($value_ary[title_site] != '')) ? ' &mdash; '.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, '<i>'.($value_ary[title_site]).'</i>')) : '').'<br>'."\n";
            else
              echo $offset.'  '.(((array_key_exists( type, $value_ary) && $value_ary[type] == 'back')) ? '&larr;' : '&rarr;').' &nbsp; '.(To_f_anchor_Jump_html( ((array_key_exists( title_chapter, $value_ary)) ? To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value_ary[title_chapter]) : To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value_ary[title_site])), $value_ary[jump_anchor], '505050', $replace_ary, $replace_preg_ary))/*.((array_key_exists( title_chapter, $value_ary) && ($value_ary[title_site] != '')) ? ' &mdash; '.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value_ary[title_site])) : '')*/.'<br>'."\n";
          }
          
        break;

      case 'figure':
      case 'youtube':
      
        $textAry = array();
        // #?: Is it an array of figures or videos?
        if (array_key_exists( arrayType, $text) && ($text[arrayType] == 'ArrayOfDirect')) {
          $textAry = $text;
          
          // #?: Is a margin for left and right defined?
          if (array_key_exists( arrayMarginLeftRight, $textAry))
            $arrayMarginLeftRight = $textAry[arrayMarginLeftRight];
          else
            $arrayMarginLeftRight = '0px';
        }
        else
          $textAry = array( $text);
        
        // #?: Is an element in array?
        if (0 < count( $textAry)) {
          // #: "margin" can intersect, "padding" can not intersect and it will allways add.
          //%!echo '          <table border="0px" width="700px" style="margin-top: 20px; margin-bottom: 20px;">'."\n";
          //%!echo '          <table border="0px" width="700px" style="margin-left: 10px; margin-right: 20px; margin-top: 20px; margin-bottom: 20px;">'."\n";  // #: "margin-left: 10px; margin-right: 20px;" set here to prevent from setting by CSS, because of centering in the midddle of the content and enable widths up to "700px".
          echo '          <table border="0px" width="700px" style="margin-left: 10px; margin-right: 20px; margin-top: 30px; margin-bottom: 20px;">'."\n";  // #: "margin-left: 10px; margin-right: 20px;" set here to prevent from setting by CSS, because of centering in the midddle of the content and enable widths up to "700px".
          echo '            <tr>'."\n";
          
          // #: Margin left as column.
          echo '              <td width="'.$arrayMarginLeftRight.'" align="'.$Glo_g_FigAlign.'" valign="top">'."\n";
          echo '              </td>'."\n";
          
          foreach ($textAry as $value_ary) {
            
            // #?: Is the element an array?
            if (gettype( $value_ary) == 'array') {
              
              // #: Set an anchor.
              
              // #?: If both keys do not exist? Generate site name to get them from the site array.
              if ((!array_key_exists( titel, $value_ary)) || (!array_key_exists( titel_short, $value_ary)))
              {
                // #: Generate the site name from the "$value_ary[jump_name]".
                $parts = explode( ':', $value_ary[name]);
                $site_name = ($parts[0]).':'.($parts[1]).':'.($parts[2]);
                //print_r( $site_name);
              }

              if (!array_key_exists( titel, $value_ary))
                $value_ary[titel] = $Glo_g_Site_ary[$site_name][jump_ary][$value_ary[name]][headline_text];
              if (!array_key_exists( titel_short, $value_ary))
                if (array_key_exists( headline_text_short, $Glo_g_Site_ary[$site_name][jump_ary][$value_ary[name]]))
                  $value_ary[titel_short] = $Glo_g_Site_ary[$site_name][jump_ary][$value_ary[name]][headline_text_short];
                else
                  $value_ary[titel_short] = $Glo_g_Site_ary[$site_name][jump_ary][$value_ary[name]][headline_text];
                  
              To_f_headline_add( '', ''/*$value_ary[titel_short]*/, $value_ary[name]);     // #: Just sets an anchor, if no short text has a length.
              
              // #: Define the table cell.
          
              echo '              <td align="'.$Glo_g_FigAlign.'" valign="top">'."\n";
              
              echo '            <table border="0" style="margin: 0px; padding: 0px;">'."\n";
              echo '              <colgroup>'."\n";
              echo '                <col width="'.($value_ary[width]).'">'."\n";
              echo '              </colgroup>'."\n";
              switch ($type)
              {
                case 'figure':
                  if (array_key_exists( figPDF_is, $value_ary))
                    $figPDF_is = $value_ary[figPDF_is];
                  else
                    $figPDF_is = true;    // #: Default  // ???: May set this to "false" as default and change the use on the sides.
                  
                  if (array_key_exists( figBigger_is, $value_ary))
                    $figBigger_is = $value_ary[figBigger_is];
                  else
                    $figBigger_is = false;  // #: Default
                  
                  if (array_key_exists( figFileType, $value_ary))
                    $figFileType = $value_ary[figFileType];
                  else
                    $figFileType = 'jpg';  // #: Default
                    
                  echo '              <tr>'."\n";
                  echo '                <td>'."\n";
                  echo '                  <! #: PDF ist in "sitemap.xml" ausgelistet und auch in der Bildunterschrift verlinkt. >'."\n";
                  if ($figPDF_is || $figBigger_is)
                    echo '                  <a target="_blank" href="'.$Glo_PathRel_back.'../share/images/'.($value_ary[fig_file_name]).(($figPDF_is) ? '.pdf' : '.'.$figFileType).'">'."\n";
                  echo '                    <! #: PDF in der Vorschau in JPEG mit optimaler Qualität und 20dpi exportieren. Bezogen auf eine max. Breite von 700px bei 300,4cm = Faktor 2,33022636484687 im PDF. >'."\n";
                  echo '                    <img class="tools-class-fig" src="'.$Glo_PathRel_back.'../share/images/'.($value_ary[fig_file_name]).'.'.$figFileType.'" width="'.($value_ary[width]).'" height="'.($value_ary[height]).'"'.((array_key_exists( border, $value_ary)) ? '' : ' border="0"').' alt="'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value_ary[fig_alt_description])).'"'.($figPDF_is ? ' title="PDF-Darstellung in neuem Fenster &ouml;ffnen"' : '').((array_key_exists( border, $value_ary)) ? ' style="border-width: '.($value_ary[border]).'; border-color: black;"' : '').'>'."\n";
                  if ($figPDF_is || $figBigger_is)
                    echo '                  </a>'."\n";
                  echo '                </td>'."\n";
                  echo '              </tr>'."\n";
                  echo '              <tr>'."\n";
                  echo '                <td class="tools-class-text tools-class-text-figure" style="color: #'.(To_f_Color('*FigDescr', true)).';'.(($Glo_g_TextAlign == 'block') ? ' text-align: justify;' : '').'">'."\n";
                  echo '                  <! #: PDF ist in "sitemap.xml" aufgelistet und auch im Bild verlinkt. >'."\n";
                  if ($figPDF_is || $figBigger_is)
                    echo '                  <i><a target="_blank" href="'.$Glo_PathRel_back.'../share/images/'.($value_ary[fig_file_name]).(($figPDF_is) ? '.pdf' : '.'.$figFileType).'" style="color: #'.(To_f_Color('*FigTitle', true)).'">'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value_ary[titel])).' <img src="'.$Glo_PathRel_back.'../share/images/add.jpg" width="11" height="13" border="0" alt="New window"></a><span style="color: #505050">:</span></i>'."\n";
                  else
                    echo '                  <i style="color: #'.(To_f_Color('*FigTitle', true)).'">'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value_ary[titel])).':</i>'."\n";
                  echo '                  <i>'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value_ary[text])).'</i>'."\n";
                  echo '                </td>'."\n";
                  echo '              </tr>'."\n";
                  break;
                case 'youtube':
                  echo '            <tr>'."\n";
                  echo '              <td>'."\n";
                  // #: YouTube Parameter, see file "Eingebettetes Youtube-Video automatisch starten und wiederholen (loop).pdf" or internet "http://www.somethinkspecial.de/youtube-video-autoplay-loop.html".
                  //    Parameter in the link: 'https://www.youtube.com/embed/<Video>?<Parameter1>&<Parameter2>'
                  //    &: Write no '&' after '?'!
                  //    Rel: '&rel=0' shows no recommended videos at the end of the video.
                  //    Loop: '&loop=1' shoes an endless loop, but works only with parameter '&playlist=<Video>'. Makes big sense with Rel.
                  //    Auto: '&autoplay=1' plays the film immediately.
                  echo '                <iframe class="tools-class-vid" width="'.($value_ary[width]).'" height="'.($value_ary[height]).'" src="'.($value_ary[source]).'" frameborder="1" allowfullscreen></iframe>'."\n";
                  echo '              </td>'."\n";
                  echo '            </tr>'."\n";
                  echo '            <tr>'."\n";
                  echo '              <td class="tools-class-text tools-class-text-figure" style="color: #'.(To_f_Color('*FigDescr', true)).';'.(($Glo_g_TextAlign == 'block') ? ' text-align: justify;' : '').'">'."\n";
                  echo '                <i style="color: #'.(To_f_Color('*FigTitle', true)).';">'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value_ary[titel])).':</i>'."\n";
                  echo '                <i>'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $value_ary[text])).'</i>'."\n";
                  echo '              </td>'."\n";
                  echo '            </tr>'."\n";
                  break;
              }
              echo '            </table>'."\n";
              
              echo '              </td>'."\n";
            }
          }
          
          // #: Margin right as column.
          echo '              <td width="'.$arrayMarginLeftRight.'" align="'.$Glo_g_FigAlign.'" valign="top">'."\n";
          echo '              </td>'."\n";
          
          echo '            </tr>'."\n";
          echo '          </table>'."\n";
          //echo '          <br>'."\n";
        }

        break;

      // !!!: Can not include themselfes at the Moment!
      case 'fade-in-area':
        global $To_g_elements_hides_ary_dim, $To_g_elements_hides_ary;
        
        // #: Start with visibility, than it is visible, if JavaScript is not aviable. Than Google will see the text.
        $start_display = 'vis';

        $To_g_elements_hides_ary_dim++;

        $local_elements_hides_ele_num = 1;
        
        
        if (/*Vue.js*/ false)
        //if (/*Vue.js*/ true)
        {
          echo $offset.'<div id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'">'."\n";
          echo "\n";

          // #: Elements for visibility.
          //%!echo $offset.'  <div id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'"  v-if="display" style="background-color: #F9F9F9;">'."\n";
          echo $offset.'  <div id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'"  v-if="display" class="tools-class-fade-in-area-div-vis">'."\n";
          $To_g_elements_hides_ary[vis_id_part_ary][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
          $local_elements_hides_ele_num++;
          echo $offset.'    <table border="0"> <colgroup> <col width="15"> </colgroup>'."\n";
          echo $offset.'      <tr>'."\n";
          echo $offset.'        <td>'."\n";
          // @click="display = false"
          $local_JavaRef = 'javascript:To_f_elements_hides_switch( \'vis\', To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])';
          // #: Triangle Unicode found at "Unicodeblock Geometrische Formen": https://de.wikipedia.org/w/index.php?title=Unicodeblock_Geometrische_Formen&oldid=160204147
          echo $offset.'      <a href="'.$local_JavaRef.'" style="text-decoration: none; color: #000000;">&#9662;</a>'."\n";
          echo $offset.'        </td>'."\n";
          echo $offset.'        <td>'."\n";
          echo $offset.'          <a href="'.$local_JavaRef.'"'.(array_key_exists( titleColor, $text) ? ' style="text-decoration: none; color: #'.(To_f_Color($text[titleColor])).';' : '').'"'.(array_key_exists( titleClass, $text) ? '  class="'.(To_f_Color($text[titleClass])).'"' : '').(array_key_exists( jumpName, $text) ? '  name="'.($text[jumpName]).'"' : '').'>'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text[Title])).'</a>'."\n";
          echo $offset.'        </td>'."\n";
          echo $offset.'      </tr>'."\n";
          echo $offset.'    </table>'."\n";
          To_f_Paragraph_list_v1( $replace_ary, $replace_preg_ary, '  '.$offset, $Glo_g_Paragraph_fn, $text[ParagraphList]);
          echo $offset.'  </div>'."\n";
          echo "\n";
        
          // #: Elements for invisibility.
          echo $offset.'<div id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" v-else class="tools-class-fade-in-area-div-invis">'."\n";
          $To_g_elements_hides_ary[invis_id_part_ary][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
          $local_elements_hides_ele_num++;
          echo $offset.'  <table border="0"> <colgroup> <col width="15"> </colgroup>'."\n";
          echo $offset.'    <tr>'."\n";
          echo $offset.'      <td>'."\n";
          // @click="display = true"
          $local_JavaRef = 'javascript:To_f_elements_hides_switch( \'invis\', To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])';
          // #: Triangle Unicode found at "Unicodeblock Geometrische Formen": https://de.wikipedia.org/w/index.php?title=Unicodeblock_Geometrische_Formen&oldid=160204147
          echo $offset.'    <a href="'.$local_JavaRef.'" style="text-decoration: none; color: #A0A0A0;">&#9656;</a>'."\n";
          echo $offset.'      </td>'."\n";
          echo $offset.'      <td>'."\n";
          //%!echo $offset.'        <a href="'.$local_JavaRef.'" style="text-decoration: none;">'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text[Title])).'</a>'."\n";
          echo $offset.'        <a href="'.$local_JavaRef.'"'.(array_key_exists( titleColor, $text) ? ' style="text-decoration: none; color: #'.(To_f_Color($text[titleColor])).';' : '').'"'.(array_key_exists( titleClass, $text) ? '  class="'.(To_f_Color($text[titleClass])).'"' : '').(array_key_exists( jumpName, $text) ? '  name="'.($text[jumpName]).'"' : '').'>'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, ((array_key_exists( TitleVis, $text)) ? $text[TitleVis] : $text[Title]))).'</a>'."\n";
          echo $offset.'      </td>'."\n";
          echo $offset.'    </tr>'."\n";
          echo $offset.'  </table>'."\n";
          echo $offset.'</div>'."\n";
          echo "\n";

          // #: Here "Display" have to be inverted, because (XXX?)!
          To_f_elements_hides_WriteJavaScript_ary_idx( $offset, $To_g_elements_hides_ary_dim - 1, ((!array_key_exists( Display, $text)) ? 'vis' : (($text[Display] == 'vis') ? 'invis' : 'vis')));
          
          echo "\n";
          echo $offset.'</div>'."\n";
        }
        else
        {
          // #: Elements for visibility.
          //%!echo $offset.'<div id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: '.(($start_display == 'invis') ? 'none' : '').'; background-color: #F9F9F9;">'."\n";
          echo $offset.'<div id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" class="tools-class-fade-in-area-div-vis" style="display: '.(($start_display == 'invis') ? 'none' : '').';">'."\n";
          $To_g_elements_hides_ary[vis_id_part_ary][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
          $local_elements_hides_ele_num++;
          echo $offset.'  <table border="0"> <colgroup> <col width="15"> </colgroup>'."\n";
          echo $offset.'    <tr>'."\n";
          echo $offset.'      <td>'."\n";
          $local_JavaRef = 'javascript:To_f_elements_hides_switch( \'vis\', To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])';
          // #: Triangle Unicode found at "Unicodeblock Geometrische Formen": https://de.wikipedia.org/w/index.php?title=Unicodeblock_Geometrische_Formen&oldid=160204147
          //echo $offset.'    <a href="'.$local_JavaRef.'" style="text-decoration: none; color: #000000;">&#9662;</a>'."\n";
          echo $offset.'    <a href="'.$local_JavaRef.'" style="text-decoration: none; color: #000000;">&#9662;</a>'."\n";
          echo $offset.'      </td>'."\n";
          echo $offset.'      <td>'."\n";
          //%!echo $offset.'        <a href="'.$local_JavaRef.'" style="text-decoration: none;">'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text[Title])).'</a>'."\n";
          echo $offset.'        <a href="'.$local_JavaRef.'"'.(array_key_exists( titleColor, $text) ? ' style="text-decoration: none; color: #'.(To_f_Color($text[titleColor])).';' : '').'"'.(array_key_exists( titleClass, $text) ? '  class="'.(To_f_Color($text[titleClass])).'"' : '').(array_key_exists( jumpName, $text) ? '  name="'.($text[jumpName]).'"' : '').'>'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, ((array_key_exists( TitleVis, $text)) ? $text[TitleVis] : $text[Title]))).'</a>'."\n";
          echo $offset.'      </td>'."\n";
          echo $offset.'    </tr>'."\n";
          echo $offset.'  </table>'."\n";
          To_f_Paragraph_list_v1( $replace_ary, $replace_preg_ary, '  '.$offset, $Glo_g_Paragraph_fn, $text[ParagraphList]);
          echo $offset.'</div>'."\n";
          echo "\n";
        
          // #: Elements for invisibility.
          echo $offset.'<div id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" class="tools-class-fade-in-area-div-invis" style="display: '.(($start_display == 'invis') ? '' : 'none').';">'."\n";
          $To_g_elements_hides_ary[invis_id_part_ary][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
          $local_elements_hides_ele_num++;
          echo $offset.'  <table border="0"> <colgroup> <col width="15"> </colgroup>'."\n";
          echo $offset.'    <tr>'."\n";
          echo $offset.'      <td>'."\n";
          $local_JavaRef = 'javascript:To_f_elements_hides_switch( \'invis\', To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])';
          // #: Triangle Unicode found at "Unicodeblock Geometrische Formen": https://de.wikipedia.org/w/index.php?title=Unicodeblock_Geometrische_Formen&oldid=160204147
          echo $offset.'    <a href="'.$local_JavaRef.'" style="text-decoration: none; color: #A0A0A0;">&#9656;</a>'."\n";
          echo $offset.'      </td>'."\n";
          echo $offset.'      <td>'."\n";
          echo $offset.'        <a href="'.$local_JavaRef.'"'.(array_key_exists( titleColor, $text) ? ' style="text-decoration: none; color: #'.(To_f_Color($text[titleColor])).';' : '').'"'.(array_key_exists( titleClass, $text) ? '  class="'.(To_f_Color($text[titleClass])).'"' : '').(array_key_exists( jumpName, $text) ? '  name="'.($text[jumpName]).'"' : '').'>'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text[Title])).'</a>'."\n";
          echo $offset.'      </td>'."\n";
          echo $offset.'    </tr>'."\n";
          echo $offset.'  </table>'."\n";
          echo $offset.'</div>'."\n";
          echo "\n";

          // #: Here "Display" have to be inverted, because (XXX?)!
          To_f_elements_hides_WriteJavaScript_ary_idx( $offset, $To_g_elements_hides_ary_dim - 1, ((!array_key_exists( Display, $text)) ? 'vis' : (($text[Display] == 'vis') ? 'invis' : 'vis')));
        }

        break;

      case 'notice':
        if (0 < count($text[text])) {
          $text_sum = '';
        
          foreach ($text[text] as $text_ele)
            $text_sum .= $text_ele.' \\\\'."\n";
          
          $Glo_g_Paragraph_fn( 'fade-in-area', $replace_ary, $replace_preg_ary, $offset, array( Display => ((array_key_exists( Display, $text)) ? $text[Display] : 'invis'),
                      Title => '\\color{*Bearb}{'.((array_key_exists( Title, $text)) ? $text[Title] : 'Notizen').'}', ParagraphList => array(
                    array( 'text', array( text => array(
                      '\\color{*Bearb}{'."\n".
                      $text_sum.
                      '}'."\n"))),
                      )));
        }
        break;

    }

    // #: End.
    switch ($type)
    {
      case 'normal':
      case 'block':
        echo $offset.'</p>'."\n";
        break;
      case 'text':
        //%!if ((gettype( $text) == 'array') && ((array_key_exists( Shape, $text)) && ($text[Shape] == 'conclusion')))
        //%!  echo $offset.'  </span>'."\n";
        if ((gettype( $text) == 'array') && array_key_exists( Shape, $text))
          switch ($text[Shape])
          {
            case 'conclusion':
              echo $offset.'  </span>'."\n";
              break;
            case 'italic':
            case 'quote':
              switch ($text[Shape])
              {
                case 'italic':
                echo '</i>';
                break;
                case 'quote':
                echo '&thinsp;&laquo;</i>';
                break;
              }
              if ((gettype( $text) == 'array') && (array_key_exists( addtext, $text)))
                echo '&thinsp;'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text[addtext]))."\n";
              else
                echo "\n";
              break;
          }
          
        // #? TextColor defined?
        /*if (0 < strlen( $text_color))
          echo $offset.'  </span>'."\n";*/
          
        echo $offset.'</p>'."\n";
        break;
      case 'headline':
        echo '</h4>'."\n";
        break;
      case 'conclusion':
        echo $offset.'  </span>'."\n";
        echo $offset.'</p>'."\n";
        break;
      case 'contentlist':
        echo $offset.'</table>'."\n";
        break;
      case 'quote':
        echo '&thinsp;&laquo;</i>';
        if ((gettype( $text) == 'array') && (array_key_exists( addtext, $text)))
          echo '&thinsp;'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $text[addtext]))."\n";
        else
          echo "\n";
        echo $offset.'</p>'."\n";
        break;
      case 'bulletlist':
        echo $offset.'</table>'."\n";
        break;
      case 'jumplist':
        // #?: Is an element in array?
        if (0 < count( $text))
          echo $offset.'</p>'."\n";
        break;
      case 'figure':
      case 'youtube':
        break;
      case 'fade-in-area':
        break;
      case 'notice':
        break;
    }
  }
  
  
  function To_f_Paragraph_list_v1( $replace_ary=null, $replace_preg_ary=null, $offset='            ', $Paragraph_fn, $list)
  {
    
    foreach ($list as $value)
    {
      $Paragraph_fn( $value[0], $replace_ary, $replace_preg_ary, $offset, $value[1]);
    }
    
  }
  
  
  function To_f_Paragraph_list( $replace_ary=null, $replace_preg_ary=null, $offset='            ', $list)
  {
    
    foreach ($list as $value)
    {
      To_f_Paragraph( $value[0], $replace_ary, $replace_preg_ary, $offset, $value[1]);
    }
    
  }
  
  
  function To_f_Chapter_v1( $replace_ary, $replace_preg_ary, $offset='          ', $display='invis',
                            $headline_name, $headline_addon='', $Paragraph_fn=null, $paragraph_list=null)
  {
    global $Glo_g_Site_ary, $Glo_g_Site_activ;

    // #: Generate the site name from the "$headline_name".
    $parts = explode( ':', $headline_name);
    $site_name = ($parts[0]).':'.($parts[1]).':'.($parts[2]);
    //print_r( $site_name);

    $headline_text = To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$headline_name][headline_text]);
    if (array_key_exists( headline_text_short, $Glo_g_Site_ary[$site_name][jump_ary][$headline_name]))
      $headline_text_short = To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$headline_name][headline_text_short]);
    else
      $headline_text_short = $headline_text;
    
    //%!To_f_Chapter( $replace_ary, $replace_preg_ary, $offset, $display, $headline_text, $headline_text_short, $headline_name, $headline_addon, $paragraph_list);

    To_f_headline_add_hides_begin( $headline_text, $headline_text_short, $headline_name, $offset, $display);
    
    if (0 < strlen( $headline_addon))
      //%! echo $offset.'  <h3><span style="line-height: 1.4em; color: #A0A0A0;">'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $headline_addon)).'</span></h3>'."\n";
      echo $offset.'  <h3><span style="line-height: 1.4em; color: '.(To_f_Color('*SectionHeadlineAddon', false)).';">'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $headline_addon)).'</span></h3>'."\n";
      
    if (isset( $Paragraph_fn, $paragraph_list))
    {
      To_f_Paragraph_list_v1( $replace_ary, $replace_preg_ary, '  '.$offset, $Paragraph_fn, $paragraph_list);
      
      To_f_headline_add_hides_end( $offset, $display);
    }
  }
  
  
  function To_f_Chapter( $replace_ary=null, $replace_preg_ary=null, $offset='          ', $display='invis',
                          $headline_text='', $headline_text_short='', $headline_name='', $headline_addon='', $paragraph_list)
  {
    To_f_headline_add_hides_begin( $headline_text, $headline_text_short, $headline_name, $offset, $display);
    
    //%! echo $offset.'  <h3><span style="line-height: 1.4em; color: #A0A0A0;">'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $headline_addon)).'</span></h3>'."\n";
    echo $offset.'  <h3><span style="line-height: 1.4em; color: '.(To_f_Color('*SectionHeadlineAddon', false)).';">'.(To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $headline_addon)).'</span></h3>'."\n";
    To_f_Paragraph_list( $replace_ary, $replace_preg_ary, '  '.$offset, $paragraph_list);
    
    To_f_headline_add_hides_end( $offset, $display);
  }
  
  

  $To_g_anchor_ary_dim = 0;
  $To_g_anchor_ary = array( label_name => array(), label_text => array());
  
  $To_g_elements_hides_ary_dim = 0;
  $To_g_elements_hides_ary = array( vis_id_part_ary => array( array()), invis_id_part_ary => array( array()));

  
  function To_f_elements_hides_link_simple_html( $label_name)
  
  // #: Works textly after the generation of the equation only.
  
  {
    global $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $To_g_anchor_ary_dim, $To_g_anchor_ary;
    
    $idx = 0;
    
    while (($idx < $To_g_anchor_ary_dim) && ($To_g_anchor_ary[label_name][$idx] != $label_name))
      $idx++;
    
    if ($idx < $To_g_anchor_ary_dim)
      //echo '<a href="#Equ-Gra.'.($To_g_anchor_ary[label_text][$idx]).'">Gra.'.($To_g_anchor_ary[label_text][$idx]).'</a>';
      //echo '<a href="#'.($To_g_anchor_ary[label_name][$idx]).'">'.($To_g_anchor_ary[label_text][$idx]).'</a>';
      //echo '<a href="javascript:To_f_anchor_JumpToBy_hash( \'#'.($To_g_anchor_ary[label_name][$idx]).'\')">'.($To_g_anchor_ary[label_text][$idx]).'</a>';
      return To_f_anchor_Jump_html( $To_g_anchor_ary[label_text][$idx], $To_g_anchor_ary[label_name][$idx], $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary);
    else
      return '-?-';
  }
  
  
  function To_f_elements_hides_link_simple( $label_name)
  
  // #: Works textly after the generation of the equation only.
  
  {
    echo To_f_elements_hides_link_simple_html( $label_name);
  }
  
  
  function To_f_elements_hides_WriteJavaScript_ary_idx( $offset, $a_elements_hides_ary_idx, $switch_display='invis', $already_pushed_is=false)
  
  // #: Works textly after the generation of the equation only.
  
  {
    global $To_g_elements_hides_ary_dim, $To_g_elements_hides_ary, $To_g_DisplayHides_General_is;
    //%!var $i;
    
    if ((0 <= $a_elements_hides_ary_idx) && ($a_elements_hides_ary_idx < $To_g_elements_hides_ary_dim))
    {
      //print_r( $To_g_elements_hides_ary);
      //print_r( $To_g_elements_hides_ary[vis_id_part_ary]);
      //print_r( $To_g_elements_hides_ary[vis_id_part_ary][0]);
      //print_r( $To_g_elements_hides_ary[vis_id_part_ary][0][0]);
      //print_r( $To_g_elements_hides_ary[invis_id_part_ary][$To_g_elements_hides_ary_dim - 1][2]);
      //print_r( To_f_get_type( $To_g_elements_hides_ary[invis_id_part_ary][$To_g_elements_hides_ary_dim - 1][2]));
      
      echo $offset.'  <script type="text/javascript"> <!--'."\n";
      
      if (!$already_pushed_is)
        echo $offset.'    To_g_elements_hides_ary.push( new Array());'."\n";
      
      echo $offset.'    To_g_elements_hides_ary['.$a_elements_hides_ary_idx.'][\'base_name\'] = \'Elements-Hides-'.($a_elements_hides_ary_idx + 1).'\';'."\n";
      
      echo $offset.'    To_g_elements_hides_ary['.$a_elements_hides_ary_idx.'][\'vis_id_part_ary\'] = ';
      echo '[';
      for ($i = 0; $i < count( $To_g_elements_hides_ary[vis_id_part_ary][$a_elements_hides_ary_idx]); $i++)
      {
        echo '\'-'.($To_g_elements_hides_ary[vis_id_part_ary][$a_elements_hides_ary_idx][$i]).'\''.(($i + 1 < count( $To_g_elements_hides_ary[vis_id_part_ary][$a_elements_hides_ary_idx])) ? ',' : '');
      }
      echo ']';
      echo ';'."\n";
      
      echo $offset.'    To_g_elements_hides_ary['.$a_elements_hides_ary_idx.'][\'invis_id_part_ary\'] = ';
      echo '[';
      for ($i = 0; $i < count( $To_g_elements_hides_ary[invis_id_part_ary][$a_elements_hides_ary_idx]); $i++)
      {
        echo '\'-'.($To_g_elements_hides_ary[invis_id_part_ary][$a_elements_hides_ary_idx][$i]).'\''.(($i + 1 < count( $To_g_elements_hides_ary[invis_id_part_ary][$a_elements_hides_ary_idx])) ? ',' : '');
      }
      echo ']';
      echo ';'."\n";
      
      // #: Switch displaying to the state on like to have at the beginning. If it is not a bot.
      //if (!$To_g_DisplayHides_General_is)
      if (!$To_g_DisplayHides_General_is)  // #!: If this is missing the 'notice' and 'fade-in-area' are not visible. But I don't really understand why!
        echo $offset.'    To_f_elements_hides_switch( \''.(($To_g_DisplayHides_General_is) ? 'vis' : $switch_display).'\', To_g_elements_hides_ary['.$a_elements_hides_ary_idx.'][\'base_name\'], To_g_elements_hides_ary['.$a_elements_hides_ary_idx.'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.$a_elements_hides_ary_idx.'][\'invis_id_part_ary\']);'."\n";
      
      echo $offset.'  --> </script>'."\n";
      //echo "\n";
    }
    else     // #err: Index out of range!
      echo 'Error! Function "To_f_elements_hides_WriteJavaScript_ary_idx": Index parameter "$a_elements_hides_ary_idx = '.$a_elements_hides_ary_idx.'" is out of range 0..'.($To_g_elements_hides_ary_dim - 1).'!'."\n";
  }
  
  
  
  $To_g_headline_ary_dim = 0;
  $To_g_headline_ary = array( text => array(), text_short => array(), name => array());

  $To_g_headline_last_elements_hides_ary_dim = null;
       // #: This is neccessary because in div that belongs to headline the hides may be placed before the elements hides array is written to Java.
       //      But the "To_f_headline_add_hides_end()" call haveto use the same array element.
  $local_elements_hides_ele_num = null;
  
  
  function To_f_headline_add( $headline_text='', $headline_text_short='', $headline_name='')
  {
    global $To_g_headline_ary_dim, $To_g_headline_ary;
    
    // #?: Has headline short text a length?
    if (0 < strlen( $headline_text_short))
    {
      $To_g_headline_ary[text][] = $headline_text;
      $To_g_headline_ary[text_short][] = $headline_text_short;
      $To_g_headline_ary[name][] = $headline_name;
      $To_g_headline_ary_dim++;
    }
    
    // #?: Has headline text a length?
    if (0 < strlen( $headline_text))
    {
      echo '      <p>'."\n";
      //%!echo '        <h2><a name="'.$headline_name.'"></a>'.$headline_text.'</h2>'."\n";
      echo '        <a name="'.$headline_name.'"></a><h2>'.$headline_text.'</h2>'."\n";
      echo '      </p>'."\n";
    }
    else
    {
      echo '      <a name="'.$headline_name.'"></a>'."\n";
    }
  }
  
  
  function To_f_headline_add_hides_begin_v1( $headline_name='', $offset='          ', $display='invis')
  {
    global $Glo_PathRel_back, $Glo_g_Site_ary, $Glo_g_Site_activ, $To_g_Text_replace_ary, $To_g_headline_ary_dim, $To_g_headline_ary, $To_g_headline_last_elements_hides_ary_dim, $local_elements_hides_ele_num, $To_g_elements_hides_ary_dim, $To_g_elements_hides_ary;
    
    To_f_headline_add_hides_begin( $Glo_g_Site_ary[$Glo_g_Site_activ][jump_ary][$headline_name][headline_text], (array_key_exists( headline_text_short, $Glo_g_Site_ary[$Glo_g_Site_activ][jump_ary][$headline_name]) ? $Glo_g_Site_ary[$Glo_g_Site_activ][jump_ary][$headline_name][headline_text_short] : $Glo_g_Site_ary[$Glo_g_Site_activ][jump_ary][$headline_name][headline_text]), $headline_name, $offset, $display);
  }
  
  
  function To_f_headline_add_hides_begin( $headline_text='', $headline_text_short='', $headline_name='', $offset='          ', $display='invis')
  {
    global $Glo_PathRel_back, $To_g_Text_replace_ary, $To_g_headline_ary_dim, $To_g_headline_ary, $To_g_headline_last_elements_hides_ary_dim, $local_elements_hides_ele_num, $To_g_elements_hides_ary_dim, $To_g_elements_hides_ary;
    
    $headline_text = To_f_Text_replace_html( $To_g_Text_replace_ary, null, $headline_text);
    $headline_text_short = To_f_Text_replace_html( $To_g_Text_replace_ary, null, $headline_text_short);
    
    // #: Start with visibility, than it is visible, if JavaScript is not aviable. Than Google will see the text.
    $start_display = 'vis';
    
    $To_g_elements_hides_ary_dim++;
    $To_g_headline_last_elements_hides_ary_dim = $To_g_elements_hides_ary_dim;
    $local_elements_hides_ele_num = 1;

    $To_g_headline_ary[text][] = $headline_text;
    $To_g_headline_ary[text_short][] = $headline_text_short;
    $To_g_headline_ary[name][] = $headline_name;
    $To_g_headline_ary_dim++;
    
    if (0 < strlen( $headline_text))
    {
      //echo '<a name="'.$headline_name.'"></a>'."\n";     // #!: Moved into 'invis' "h2" to make the headline hide visible if jumped to.
      //%!echo $offset.'<table border="0" style="margin: 0; margin-left: 10px; margin-top: 10px; margin-bottom: 10px; padding: 0;"> <colgroup> <col width="668"> </colgroup>'."\n";
      echo $offset.'<table border="0" style="margin-top: 10px; margin-bottom: 10px; padding: 0;"> <colgroup> <col width="668"> </colgroup>'."\n";
      
      // #: 'vis'
      echo $offset.'  <tr id="Elements-Hides-'.$To_g_headline_last_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: ';
      if ($start_display == 'vis')
        echo 'none';
      else
        echo '';
      echo ';">'."\n";
      $To_g_elements_hides_ary[vis_id_part_ary][$To_g_headline_last_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
      $local_elements_hides_ele_num++;
      //%!echo $offset.'    <td valign="baseline" style="margin: 0; padding: 0;"> <h2 style="margin: 0; margin-left: 0px; padding: 0;"><a href="javascript:To_f_elements_hides_switch( \'vis\', To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])" title="einblenden">'.$headline_text.'</a></h2> </td>'."\n";
      echo $offset.'    <td valign="baseline" style="margin: 0; padding: 0;"> <a href="javascript:To_f_elements_hides_switch( \'vis\', To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])" title="einblenden"><h2 style="margin: 0; margin-left: 0px; padding: 0;">'.$headline_text.'</h2></a> </td>'."\n";
      echo $offset.'    <td valign="baseline" style="margin: 0; padding: 0;"> <a href="javascript:To_f_elements_hides_switch( \'vis\', To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])"><img src="'.$Glo_PathRel_back.'../share/images/Arrow-Down.jpg" width="32" height="12" border="0" alt="einblenden" title="einblenden" align="right" style="margin: 0; padding: 0;"> </a> </td>'."\n";
      echo $offset.'  </tr>'."\n";
      
      // #: 'invis'
      echo $offset.'  <tr id="Elements-Hides-'.$To_g_headline_last_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: ';
      if ($start_display == 'invis')
        echo 'none';
      else
        echo '';
      echo ';">'."\n";
      $To_g_elements_hides_ary[invis_id_part_ary][$To_g_headline_last_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
      $local_elements_hides_ele_num++;
      // #!: The anchor was moved into 'invis' "h2" to make the headline hide visible if jumped to.
      //%!echo $offset.'    <td valign="baseline" style="margin: 0; padding: 0;"> <h2 style="margin: 0; margin-left: 0px; padding: 0;"><a name="'.$headline_name.'"></a><a href="javascript:To_f_elements_hides_switch( \'invis\', To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])" title="ausblenden">'.$headline_text.'</a></h2> </td>'."\n";
      //%!echo $offset.'    <td valign="baseline" style="margin: 0; padding: 0;"> <a name="'.$headline_name.'"></a><a href="javascript:To_f_elements_hides_switch( \'invis\', To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])" title="ausblenden"><h2 style="margin: 0; margin-left: 0px; padding: 0;">'.$headline_text.'</h2></a> </td>'."\n";
      echo $offset.'    <td valign="baseline" style="margin: 0; padding: 0;"> <a name="'.$headline_name.'" href="javascript:To_f_elements_hides_switch( \'invis\', To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])" title="ausblenden"><h2 style="margin: 0; margin-left: 0px; padding: 0;">'.$headline_text.'</h2></a> </td>'."\n";
      echo $offset.'    <td valign="baseline" style="margin: 0; padding: 0;"> <a href="javascript:To_f_elements_hides_switch( \'invis\', To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])"><img src="'.$Glo_PathRel_back.'../share/images/Arrow-Up.jpg" width="32" height="12" border="0" alt="ausblenden" title="ausblenden" align="right" style="margin-top: 0; padding: 0;"> </a> </td>'."\n";
      echo $offset.'  </tr>'."\n";
      
      echo $offset.'</table>'."\n";
    } else {
      echo $offset.'<a name="'.$headline_name.'"></a>'."\n";
    }
    
    echo $offset.'<div id="Elements-Hides-'.$To_g_headline_last_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: ';
    if ($start_display == 'invis')
      echo 'none';
    else
      echo '';
    echo ';">'."\n";
    $To_g_elements_hides_ary[invis_id_part_ary][$To_g_headline_last_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
    $local_elements_hides_ele_num++;

    //To_f_elements_hides_WriteJavaScript_ary_idx( $offset, $To_g_headline_last_elements_hides_ary_dim - 1, $display);
    // #: Reserve the element of array for use in "To_f_headline_add_hides_end()".
    echo $offset.'  <script type="text/javascript"> <!--'."\n";
    echo $offset.'    To_g_elements_hides_ary.push( new Array());'."\n";
    echo $offset.'  --> </script>'."\n";
  }
  
  
  function To_f_headline_add_hides_end( $offset='          ', $display='invis')
  {
    global $Glo_PathRel_back, $To_g_headline_ary_dim, $To_g_headline_ary, $To_g_headline_last_elements_hides_ary_dim, $local_elements_hides_ele_num, $To_g_elements_hides_ary_dim, $To_g_elements_hides_ary;

    // #: Start with visibility, than it is visible, if JavaScript is not aviable. Than Google will see the text.
    $start_display = 'vis';
    
    //echo '  <br>'."\n";
    
    //%!echo '  <table border="0" style="margin: 0; margin-left: 10px; margin-top: 10px; margin-bottom: 10px; padding: 0;"> <colgroup> <col width="668"> </colgroup>'."\n";
    echo '  <table border="0" style="margin-top: 10px; margin-bottom: 10px; padding: 0;"> <colgroup> <col width="668"> </colgroup>'."\n";
    
    echo $offset.'    <tr id="Elements-Hides-'.$To_g_headline_last_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: ';
    if ($start_display == 'invis')
      echo 'none';
    else
      echo '';
    echo ';">'."\n";
    $To_g_elements_hides_ary[invis_id_part_ary][$To_g_headline_last_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
    $local_elements_hides_ele_num++;
    echo $offset.'      <td valign="baseline" style="margin: 0; padding: 0;">  </td>'."\n";
    echo $offset.'      <td valign="baseline" style="margin: 0; padding: 0;"> <a href="javascript:To_f_elements_hides_switch( \'invis\', To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'vis_id_part_ary\'], To_g_elements_hides_ary['.($To_g_headline_last_elements_hides_ary_dim - 1).'][\'invis_id_part_ary\'])"><img src="'.$Glo_PathRel_back.'../share/images/Arrow-Up.jpg" width="32" height="12" border="0" alt="ausblenden" title="ausblenden" align="right" style="margin-top: 0; padding: 0;"> </a> </td>'."\n";
    echo $offset.'    </tr>'."\n";
    
    echo $offset.'  </table>'."\n";
    
    To_f_elements_hides_WriteJavaScript_ary_idx( $offset, $To_g_headline_last_elements_hides_ary_dim - 1, $display, true);

    echo $offset.'</div>'."\n";
    To_f_headline_add_hides_end_line();
    
    $To_g_headline_last_elements_hides_ary_dim = null;
    $local_elements_hides_ele_num = null;
  }
  
  
  function To_f_headline_add_hides_end_line( $offset='          ')
  {
    //echo '<hr noshade width="700" size="1" align="left" style="border: 1px; border-color: #C0C0C0; margin-left: 10px;">'."\n";
    echo $offset.'<div style="border: none; border-bottom: 1px solid #FFFFFF; border-top: 1px solid #dcdcdc; clear: both; height: 0; width: 700px; margin-left: 10px;"></div>'."\n";
  }
  
  
  function To_f_headline_make()
  {
    global $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $To_g_headline_ary_dim, $To_g_headline_ary;
    
    echo '						<table border="0" style="padding-left: 0px; margin-left: 10px;" cellspacing="0" cellpadding="0">'."\n";
    
    for ($i = 0; $i < $To_g_headline_ary_dim; $i++) {
      //echo '							<tr> <td valign="top"> <p style="padding-left: 0px; margin: 0 0px 0px; line-height: 0.9em; color: #505050;">&bull;</p> </td>'."\n";
      echo '							<tr> <td valign="top"> <p style="padding-left: 0px; margin: 0 0px 0px; color: #505050;">&bull;</p> </td>'."\n";
      //echo '								<td valign="top"> <p style="padding-left: 0px; margin: 0 5px 0px; line-height: 0.9em;"> <small>'."\n";
      echo '								<td valign="top"> <p style="padding-left: 0px; margin: 0 5px 0px;"> <!small>'."\n";
      //echo '									<a href="#'.$To_g_headline_ary[name][$i].'" style="color: #505050;">'."\n";
      //echo '									<a href="javascript:To_f_anchor_JumpToBy_hash( \'#'.$To_g_headline_ary[name][$i].'\')" style="color: #505050;">'."\n";
      //echo '                  '.$To_g_headline_ary[text_short][$i].'</a> </small> </p> </td> </tr>'."\n";
      //echo '									'.(To_f_anchor_Jump_html( $To_g_headline_ary[text_short][$i], $To_g_headline_ary[name][$i], '505050', $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, '', true)).' </small> </p> </td> </tr>'."\n";
      echo '									'.(To_f_anchor_Jump_html( $To_g_headline_ary[text_short][$i], $To_g_headline_ary[name][$i], '505050', $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, '', true)).' <!/small> </p> </td> </tr>'."\n";
      
      if ($i < $To_g_headline_ary_dim - 1)
        echo '						<tr><td height="3px"></td></tr>'."\n";
    }
    
    echo '						</table>'."\n";
  }
  
  
  
  function To_f_anchor_Jump_html( $text, $anchor_name, $text_num_color='', $replace_ary=null, $replace_preg_ary=null, $anchor_label='', $hint_is=true)
  {
    global $Glo_g_Site_ary, $Glo_g_Site_activ, $To_g_Text_replace_ary;
    // !!! This have to find an other solution! Do not use "Sc_XXX" in Tools!
    //%!global $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary;
    global $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary;
    
    // #: If repace arrays are undefined? Set default.
    if ($replace_ary == null)
      $replace_ary = $To_g_Text_replace_ary;
    if ($replace_preg_ary == null)
      $replace_preg_ary = $To_g_Text_replace_preg_ary;
    
    $text_num_color = To_f_Color( $text_num_color);

    $hint_title = '';
    // #: If global notation?
    if ($hint_is && To_f_Site( $site_name, $anchor_name))
      // #: If the "$anchor_name" exists in array? The "foot note" headline to not exist there normally!
      if (array_key_exists( $anchor_name, $Glo_g_Site_ary[$site_name][jump_ary]))
        //%!$hint_title = ((array_key_exists( headline_text_short, $Glo_g_Site_ary[$site_name][jump_ary][$anchor_name]))) ? To_f_Text_replace_html( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$anchor_name][headline_text_short]) : To_f_Text_replace_html( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$anchor_name][headline_text]);
        $hint_title = ((array_key_exists( headline_text_short, $Glo_g_Site_ary[$site_name][jump_ary][$anchor_name]))) ? To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$anchor_name][headline_text_short]) : To_f_Text_replace_html( $replace_ary, $replace_preg_ary, $Glo_g_Site_ary[$site_name][jump_ary][$anchor_name][headline_text]);

    $text = To_f_Text_replace_html( $To_g_Text_replace_ary, null, $text);

    // #!: "<!--" and "-->" is not working in the inner of the "script" tags.
    //%!return '<script> document.write( \'<a href="javascript:To_f_anchor_JumpToBy_hash( \\\'#'.$anchor_name.'\\\')"'.(($anchor_label != '') ? ' name="'.$anchor_label.'"' : '').(($text_num_color != '') ? ' '.((0 < strlen( $hint_title)) ? 'title="'.$hint_title.'" ' : '').'style="color: #'.$text_num_color.';"' : '').'>'.$text.'</a>\'); </script><noscript><a href="#'.$anchor_name.'"'.(($anchor_label != '') ? ' name="'.$anchor_label.'"' : '').(($text_num_color != '') ? ' '.((0 < strlen( $hint_title)) ? 'title="'.$hint_title.'" ' : '').'style="color: #'.$text_num_color.';"' : '').'>'.$text.'</a></noscript>';
    return '<script> document.write( \'<a href="javascript:To_f_anchor_JumpToBy_hash( \\\'#'.$anchor_name.'\\\')"'.(($anchor_label != '') ? ' name="'.$anchor_label.'"' : '').((0 < strlen( $hint_title)) ? ' title="'.$hint_title.'" ' : '').(($text_num_color != '') ? ' style="color: #'.$text_num_color.';"' : '').'>'.$text.'</a>\'); </script><noscript><a href="#'.$anchor_name.'"'.(($anchor_label != '') ? ' name="'.$anchor_label.'"' : '').((0 < strlen( $hint_title)) ? ' title="'.$hint_title.'" ' : '').(($text_num_color != '') ? ' style="color: #'.$text_num_color.';"' : '').'>'.$text.'</a></noscript>';

  }
  
  
  
  function To_f_anchor_Jump( $text, $anchor_name, $text_num_color='', $anchor_label='', $hint_is=true)
  {
    global $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary;
    
    //echo '<script><a href="javascript:To_f_anchor_JumpToBy_hash( \'#'.$anchor_name.'\')" style="color: #'.$text_num_color.';">'.$text.'</a></script><noscript><a href="#'.$anchor_name.'" style="color: #'.$text_num_color.';">'.$text.'</a></noscript>';
    echo To_f_anchor_Jump_html( $text, $anchor_name, $text_num_color, $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $anchor_label, $hint_is);
  }
  
  
  
  function To_f_concat_str( $str_ary)
  {
    //$str_ary = func_get_args();
    $ret_str = '';
    
    foreach ($str_ary as $value)
      $ret_str .= $value;
    
    return $ret_str;
  }
  
  
  function To_f_get_type( $var)
  {
    if(is_object($var))
      return get_class($var);
    if(is_null($var))
      return 'null';
    if(is_string($var))
      return 'string';
    if(is_array($var))
      return 'array';
    if(is_int($var))
      return 'integer';
    if(is_bool($var))
      return 'boolean';
    if(is_float($var))
      return 'float';
    if(is_resource($var))
      return 'resource';
    //throw new NotImplementedException();
    return 'unknown';
  }
  
  
  
  function To_f_printStrAsASCII_html( $str)
  {
  
    for ($i = 0; $i < strlen( $str); $i++)
    {
      print_r( $i.': ');
      print_r( "'".$str[$i]."'");
      print_r( ", ".(ord( $str[$i])).";<br>");
    }

  }
  
  
  
  function To_f_bot_is()
  
  // #: Found at "http://www.weedit.de/lernen/referenzen/php/Pruefen-ob-Bot-Google-Bing--oder-normaler-Besucher-Website-aufruft---HTTP_USER_AGENT-uoUirbodjpywDdk2pZY.php"
  
  {
    $botlist = array("Teoma", "alexa", "froogle", "Gigabot", "inktomi",
                     "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory",
                     "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot",
                     "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp",
                     "msnbot", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz",
                     "Baiduspider", "Feedfetcher-Google", "TechnoratiSnoop", "Rankivabot",
                     "Mediapartners-Google", "Sogou web spider", "WebAlta Crawler","TweetmemeBot",
                     "Butterfly","Twitturls","Me.dium","Twiceler","bing","microsoft","yahoo");
    
    foreach($botlist as $bot){
      if(strpos($_SERVER['HTTP_USER_AGENT'],$bot)!==false)
        return true;	// Is a bot
    }
    
    return false;	// Not a bot
  }
  
  
  // #: Initializing.
  
  // #!: Editor's note: using this code has security implications. The client can set HTTP_HOST and REQUEST_URI to any arbitrary value it wants. See: https://stackoverflow.com/questions/6768793/get-the-full-url-in-php
  $To_g_pageUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $To_g_query = parse_url($To_g_pageUrl, PHP_URL_QUERY);
  $To_g_openAll = ($To_g_query === 'openAll');
  
  $To_g_bot_is = To_f_bot_is();
  //$To_g_bot_is = true;
  
  $To_g_DisplayHides_General_is = ($To_g_bot_is || $To_g_openAll);
  
  

?>
