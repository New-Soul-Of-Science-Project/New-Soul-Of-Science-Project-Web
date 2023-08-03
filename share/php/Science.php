<?php
  
  // #: Name:  "Science.php"
  
  
  // #: Stand: 03.08.2023, 10:00h

  // #: History: (!: changed, incompatible; >: developed, compatible but is a real change; +: new, compatible; *: fixed, compatible)
  
  //           20230803:  +:  "$Sc_g_equation_replace_ary":  '  \land  ' -> '\;\;\;\land\;\;\;' is new.
  //           20230802:  +:  "$Sc_g_equation_replace_ary":  '  \lor  ' -> '\;\;\;\lor\;\;\;', '  \Leftrightarrow  ' -> '\;\;\;\Leftrightarrow\;\;\;', '  \Rightarrow  ' -> '\;\;\;\Rightarrow\;\;\;' are new.
  //                      >:  "$Sc_g_equation_replace_MathJax_ary":  '{  \Leftrightarrow  ' -> '{  \Leftrightarrow\hspace{10mm}', '{  \Rightarrow  ' -> '{  \Rightarrow\hspace{10mm}' are new.
  //           20230722:  +:  "$Sc_g_equation_replace_ary":  '  \widehat{=}  ' -> '\;\;\;\widehat{=}\;\;\;', ' \widehat{=} ' -> '\;\widehat{=}\;' are new.
  //           20230613:  *:  "Sc_f_replace_callback__latexcommand__latexmath":  Use 'To_f_replace_callback__latexcommand__parameterCheck' for parameter checking.
  //           20230612:  +:  "$Sc_g_equation_replace_ary":  '  >  ' -> '\;\;\;>\;\;\;', '  \geq  ' -> '\;\;\;\geq\;\;\;' is new.
  //           20230529:  +:  "$Glo_g_Text_replace_ary": New.
  //           20230528:  *:  "Sc_f_equation_list": Move equation anchor from equation number to equation itself.
  //           20230407:  -:  "$Sc_g_Text_replace_preg_ary": Move entry "quote" to "Tools.php".
  //           20230402:  +:  "$Sc_g_equation_replace_ary":  '  ?:=  ' -> '\;\;\;\overset{?}{≔}\;\;\;' is new.
  //           20230321:  +:  "$Sc_g_Text_replace_ary":  Element "\M(Q)" as "&#8474;" (Double-struck capital Q) is new.
  //                      +:  "$Sc_g_Text_replace_ary":  Element "\M(Z)" as "&#8484;" (Double-struck capital Z) is new.
  //           20230216:  >:  "MathJax":  Change LaTeX macros "lSelSet", "rSelSet" by using '|' instead of '{' and '}'.
  //           20230214:  +:  "$Sc_g_equation_replace_ary":  '*|*' -> '~\middle|~', '  ~\middle|~  ' -> '\;~\middle|~\;'.
  //           20230129:  +:  "$Sc_g_Text_replace_ary":  Elements "\M(C)" as "&#8450;" (Double-struck capital C) is new.
  //           20230114:  +:  "MathJax":  New LaTeX macros "lSelSet", "rSelSet".
  //                      +:  "$Sc_g_equation_replace_ary":  '*\{>' -> '\lSelSet' and '*<\}' -> '\rSelSet}' are new.
  //           20220815:  >:  "MathJax":  New LaTeX macro "mod".
  //           20220716:  >:  "MathJax":  Substitute LaTeX macros "rROpera" with "rOpera", "lLOpera" with "lOpera".
  //                      >:  "MathJax":  Replace in LaTeX macros "lROpera": "langle" with "lfloor", "rLOpera": "rangle" with "rfloor".
  //           20220711:  +:  "$Sc_g_equation_replace_ary":  '*r(' -> '^{\lROpera' and '*r)' -> '\rROpera}' are new.
  //                      +:  "MathJax":  Add Macros "lROpera", "rROpera".
  //                      +:  "$Sc_g_equation_replace_ary":  '*l(' -> '^{\lLOpera' and '*l)' -> '\rLOpera}' are new.
  //                      +:  "MathJax":  Add Macros "lLOpera", "rLOpera".
  //                      *:  "$Sc_g_equation_replace_ary":  Correct '(  ' -> ')\; ' to '(  ' -> '(\; '.
  //           20220702:  +:  "$Sc_g_equation_replace_ary":  '*o(' -> '^{\lOpera' and '*o)' -> '\rOpera}' are new.
  //                      +:  "MathJax":  Add Macros "lOpera", "rOpera".
  // v01.005:  20130713:  !:  "Tools_v01_004.php"  -->  "Tools_v01_005.php"
  //                      !:  "\quot"  -->  "\quote"
  //                      !:  "$Sc_g_Text_replace_preg_ary":  "\term" and "\cite" are placed now in front of the merged Tools-Array, the remain afterwards. This is because both can be inside a "\color" part of text.
  //           20130716:  +:  "$Sc_g_Text_replace_preg_ary"  Elements "_" is new.
  //           20130717:  +:  "Sc_f_Paragraph":  Is new.
  //           20130718:  +:  "$Sc_g_Text_replace_ary"  Elements "&pi;", "&lambda;" is new.
  //           20130802:  !:  "$Sc_g_Text_replace_preg_ary":  '/[0-9]-[0-9]/'  -->  '/[\s,][0-9]+-[0-9]+/'
  //           20130808:  !:  "$Sc_g_Text_replace_preg_ary":  Elements get named keys. 'const' is moved to the very beginning.
  //           20130810:  !:  "$Sc_g_Text_replace_preg_ary":  Elements get named keys. '^' and '_' is moved to the very beginning after 'const'.
  //           20130822:  !:  "$Sc_g_Text_replace_preg_ary":  "footnote":  Is changed to multiple array functionality.
  //           20130826:  !:  "$Sc_g_Text_replace_preg_ary":  "latexmath":  Is new.
  //                      +:  "Sc_f_equation_latex_str_html":  Is new.
  //                      +:  "Sc_f_equation_latex_html":  Is new.
  //                      !:  "$Sc_g_Text_replace_ary"  Elements "&darr;", "&uarr;", "&larr;" and "&rarr;" are new.
  //           20130827:  !:  "$X_Text_replace_preg_ary":  In every subarray is value "[0]" replaced by value "[search]" and "[1]" by "[callcode]". Key "type => 'preg_replace_callback'" is added for the old style. "type => 'latexcommand'" is new.
  //           20130830:  +:  "$Sc_g_Text_replace_ary":  Elements "&gamma;" is new.
  //           20130901:  +:  "$Sc_g_Text_replace_ary":  Elements "&Delta;", "&rho;" is new.
  //           20130923:  !:  "$Sc_g_litera_make"  "article":  "volume" and "number" now separated by ".".
  //           20131010:  +:  "$Sc_g_Text_replace_ary":  Elements "&alpha;" is new.
  //           20131011:  +:  "Sc_f_equation_list":  "$Sc_g_equation_list_SpaceBefore", "$Sc_g_equation_list_SpaceAfter", "$$Sc_g_equation_list_LineDistance" are new.
  //           20131013:  !:  "Sc_f_equation_list":  "label_name" and "label_text" can now exist independently.
  //           20131014:  +:  "$Sc_g_Text_replace_ary":  Elements "&phi;" is new.
  //                      !:  "$Sc_f_equation_latex_str_html":  Latex image now "valign="middle""
  //           20131030:  !:  "Sc_f_equation_list":  "label_incr" is new.
  //           20140113:  !:  "To_f_Text_replace_html", "$$Sc_g_Text_replace_preg_ary":  "callback_f" element is new in array and callback functions will only generated once and be stored until than.
  //           20140129:  +:  "To_f_replace_callback__preg_replace_callback__term", "To_f_replace_callback__preg_replace_callback__quote", "To_f_replace_callback__preg_replace_callback__footnote":  Is new.
  //           20140312:  !:  "$Sc_g_Text_replace_ary":  "<br>" replacements moved to Tools.
  //           20140702:  !:  "Sc_f_footnote_add_html":  "text_hint" added to "$Sc_g_footnote_ary".
  //                      !:  "Sc_g_footnote_last_html":  "title" added to "<sup>" to create a hint. And "<sup>" is replaced with "<span>" plus style parameters for font size an position to avoid line spacing problems.
  //           20140703:  !:  "Sc_f_litera_bibtex":  "htmlentities" removed from convertation, because the HTML and the "*.bib" files are now in "UTF-8" and there where convertation problems with "UTF-8" on the Windows server PHP. On the MacOS X PHP it had worked.
  //           20140707:  !:  "To_f_replace_callback__preg_replace_callback__quote"  -->  "Sc_f_replace_callback__preg_replace_callback__quote"
  //                      !:  "To_f_replace_callback__preg_replace_callback__footnote"  -->  "Sc_f_replace_callback__preg_replace_callback__footnote"
  //                      !:  "To_f_replace_callback__preg_replace_callback__term"  -->  "Sc_f_replace_callback__preg_replace_callback__term"
  //           20140710:  !:  "Sc_f_replace_callback__preg_replace_callback__footnote" removed and replaced by "Sc_f_replace_callback__latexcommand__footnote". "$Sc_g_Text_replace_preg_ary['footnote']": Type changed to "latexcommand".
  //           20140712:  +:  "$Sc_g_sup_style", "$Sc_g_sub_style":  Are new.
  //           20140713:  !:  "Sc_f_footnote_add_ary":  (Is not working!!!) If no color information is present now no color ist set for the link. Before black was set in this ocassion.
  //           20140727:  !:  Removed in general the control of color parameters having six digits.
  //           20131002:  +:  "Sc_f_Paragraph" -> "equations":  Key "equ_autonum_reset" is new.
  //                      +:  "$Sc_g_equation_replace_ary":  ' \, ', '\partial ' is new.
  //                      !:  "$Sc_g_equation_replace_ary":  '\_part ' -->  '\*part '; '\_part' --> '\*part'
  //           20141104:  +:  "$Sc_g_Text_replace_ary":  Elements "&#120642;" (mathematical ny) is new.
  //           20141105:  +:  "$Sc_g_litera_make"  "article":  "day" implemented.
  //           20150226:  !:  "$Sc_g_litera_url":  Replaced by "$Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx].litera_url_rel".
  //           20150309:  +:  "$Sc_g_LaTeX_replace_ary":  Is new and used in "Sc_f_litera_bibtex".
  //           20150309:  +:  "$Sc_g_LaTeX_replace_ary":  Is new and used in "Sc_f_litera_bibtex".
  //                      +:  "$Sc_g_litera_make"  "book":  "isbn" added.
  //           20150504:  !:  "To_f_anchor_Jump_html":  Parameters "$replace_ary" and "$replace_preg_ary" are added.
  //           20150614:  !:  "Sc_g_litera_make", "book":  "language" is implementet now.
  //           20150616:  *:  "$Sc_g_Text_replace_preg_ary", "hidden":  To avoid counting and registering of hidden "\\footnote" entry "hidden" is moved to the beginning of array and got new entry "replace_internal => false".
  //           20151121:  +:  "Sc_f_equation_list":  "footnote_num_color" was added.
  //           20151215:  +:  "Sc_f_HeaderElements()":  New.
  //           20151216:  +:  MathJax Latex implementation.
  //                      +:  "Sc_f_equation_latex_str_html", "Sc_f_equation_latex_str", "Sc_f_equation_latex_html", "Sc_f_equation_latex", "Sc_f_equation_list":  Additional parameter "$latex_tech".
  //                      +:  "Sc_f_equation_latex_str_html", "Sc_f_equation_latex_str", "Sc_f_equation_latex_html":  Additional parameter "$style".
  //                      +:  "Sc_f_Paragraph", "equations":  Additional element "latex_tech" with values "Google" and "MathJax".
  //                      +:  "$Glo_g_Color_list", '*Formular':  Is new here.
  //                      +:  "$Sc_g_equation_replace_Google_ary", "$Sc_g_equation_replace_MathJax_ary":  Are new.
  //           20160413:  *:  "Sc_g_litera_make", 'book':  'note' moved into the "$bib_data"
  //           20160930:  *:  "Sc_f_figure":  Removed, because is in "Tools_v01_005.php". Must be moved there and have forgotten to delete here.
  //           20161013:  +:  "$Sc_g_Text_replace_ary":  Elements "\M(U)" as "&#120140;" (Mathematical Double-Struck Capital U) is new.
  //                      +:  "$Sc_g_Text_replace_ary":  Elements "\M(S)" as "&#120138;" (Mathematical Double-Struck Capital S) is new.
  //                      +:  "$Sc_g_Text_replace_ary":  Elements "\M(N)" as "&#8469;" (Double-struck capital n) is new.
  //           20170122:  >:  "$Sc_g_Text_replace_ary":  "&darr;", "&uarr;", "&larr;", "&rarr;" move to "$To_g_Text_replace_ary".
  //           20170227:  >:  "Sc_g_litera_make", 'article':  'editor' is new.
  //           20170507:  +:  "Sc_f_HeaderElements":  MathJax changed from version 2.5 to 2.7.1, because of MathJax CDN host change and configuration syntax changes.
  //           20180503:  >:  "Sc_g_litera_make", "Sc_g_footnote_make":  Hyphens now activated by "tools-class-text", but in URLs just "word-break: break-all;" without "-" is activ by "tools-class-url".
  //           20181018:  +:  "Sc_f_HTMLHeader_init":  New.
  //           20190922:  *:  "Sc_g_litera_make":  'issuetitle' now italic.
  //           20191117:  >:  "$Sc_g_Text_replace_preg_ary":  Element "cite" changed to type "latexcommand" with optional one parameter.
  //                      >:  "Sc_f_litera_cite_html":  Got an "$optional" parameter with default now.
  //           20200410:  +:  "Sc_f_equation_list":  New '*Equation-Number' and "$equationNumber_color".
  //                      >:  "Sc_f_equation_list":  Changed '*Formular' and '*Equation-Number' to black.
  //                      +:  "$Glo_g_Paragraph_fn":  Is new.
  //                      +:  "$Sc_g_Text_replace_ary":  Elements '≈' as '&asymp;' is new.
  //           20200420:  >:  "$Sc_g_Text_replace_preg_ary":  Elements "term", "_", "^" changed to type "latexcommand".
  //           20200430:  >:  "Sc_f_equation_list":  New arrows at show and hide links. Removed ellipses.
  //           20200606:  +:  "$Sc_g_equation_replace_ary":  New element '  \mapsto  '.
  //           20200610:  +:  "$Sc_g_equation_replace_ary":  New elements '  ≔  ', '  ?=  ', '  ?\in  '.
  //                      >:  "$Sc_g_equation_replace_ary":  Redefine element '  :=  '.
  //           20210117:  !:  "$Sc_g_Text_replace_preg_ary", 'latexmath':  Default changed from 'Google' to 'MathJax'.
  //           20210213:  +:  "$Sc_g_Text_replace_ary":  Elements "\M(T)" as "&#120139;" (Mathematical Double-Struck Capital T) is new.
  //           20210411:  +:  "MathJax":  Add Macros "updownarrows", "MDoDo", "MUpUp", "MUpDo".
  //           20210417:  !:  "$Sc_g_Text_replace_preg_ary":  '//numbermdash' and 'callcode =>' removed.
  //                      >:  Defined a lot of constants to be compatible with PHP 7.2 and higher.
  //           20210517:  >:  "Sc_f_replace_callback__latexcommand__zirkumflex": Use now "To_f_replace_callback__latexcommand__parameterCheck".
  //           20210626:  >:  "$Sc_g_LaTeX_replace_ary": Add "'〈' --> '\langle'", '〉' --> '\rangle'".
  //           20210726:  >:  "$Sc_g_LaTeX_replace_ary": Remove "'〈' --> '\langle'", '〉' --> '\rangle'".
  //                      >:  "$Sc_g_equation_replace_ary": Add "'〈' --> '\langle '", '〉' --> '\rangle '", "'․', '.\\!'", "'  \neq  ', '\;\;\;\neq\;\;\;'", "'  \in  ', '\;\;\;\in\;\;\;'", "'  \subset  ', '\;\;\;\subset\;\;\;'".
  //           20210727:  >:  "$Sc_g_equation_replace_ary": Add "'  \notin  ', '\;\;\;\notin\;\;\;'", '  \leq  ', '\;\;\;\leq\;\;\;'.
  //           20210813:  >:  "$Sc_g_equation_replace_ary": Add "'*(', '\left('", "'*)', '\right)'", "'*[', '\left['", "'*]', '\right]'", "'*\{', '\left\{'", "'*\}', '\right\}'", "'*\langle', '\left\langle'", "'*\rangle', '\right\rangle'", "'(  ', ')\; '", "'  )', ' \;)'", "'\left(  ', '\left(\; '", "'  \right)', ' \;\right)'", "'[  ', '[\; '", "'  ]', ' \;]'", "'\left[  ', '\left[\; '", "'  \right]', ' \;\right]'", "'\{  ', '\{\; '", "'  \}', ' \;\}'", "'\left\{  ', '\left\{\; '", "'  \right\}', ' \;\right\}'",
  //           20210813:  >:  "$Sc_g_equation_replace_ary": Change "'  :=  ', '\;\;\;≔\;\;\;'" to "':=', '≔'" and set it before "'  ≔  ', '\;\;\;≔\;\;\;'".
  //           20210828:  >:  "$Sc_g_equation_replace_ary": Add "'*|', '\left|'", "'|*', '\right|'".
  //           20210829:  >:  "$Sc_g_equation_replace_ary": Add "'\left|  ', '\left|\; '", "'  \right|', ' \;\right|'".
  //           20211106:  +:  "$Sc_g_term_replace_ary": Implemented.
  //                      >:  "$Sc_g_Text_replace_preg_ary": Moved "term" before "^". But I didn't reached the effect I wanted. See "$Sc_g_term_replace_ary".
  //           20220629:  +:  "MathJax":  Add Macros "llangle", "rrangle".
  // v01.004:  20130609:  !:  Include "Tools_v01_004.php"
  //           20130628:  +:  "$Glo_PathRel_back" added;
  // v01.003:  20130522:  !:  Include "Tools_v01_002.php"  -->  "Tools_v01_003.php"
  //           20130526:  +:  "$Sc_g_Text_replace_preg_ary"  Element "footnote" is new.
  //                      !:  "$Sc_g_Text_replace_preg_ary"  Element "cite" is rewritten and "." in label was added.
  //           20130527:  +:  "$$Sc_g_Text_replace_ary"  Elements of "\\" variations are new.
  //           20130602:  +:  "$Sc_g_Text_replace_preg_ary"  Element "quot" is new.
  //           20130603:  +:  "$Sc_g_Text_replace_ary"  Elements "⋅" and "√" are new.
  //           20130604:  +:  "$Sc_g_Text_replace_preg_ary"  Elements "^" is new.
  // v01.002:  20130518:  !:  "Sc_f_figure":  Hint 'title="PDF-Darstellung in neuem Fenster &ouml;ffnen"' added.
  //           20130520:  !:  Include "Tools_v01_001.php"  -->  "Tools_v01_002.php"
  //                      !:  "To_f_replace_str_ary":  Moved to "Tools_v01_002.php;
  //                      !:  "$Sc_g_footnote_replace_ary"  -->  "$Sc_g_Text_replace_ary":  Now based on new "$To_g_Text_replace_ary".
  //                      +:  "$Sc_g_Text_replace_preg_ary":  New.
  //                      !:  "Sc_f_footnote_add":  Changed to call "To_f_Text_replace_html".
  //                      +:  "Sc_g_footnote_last_html", "Sc_f_footnote_add_html":  New.
  // v01.001:  20130515:  +:  History started.
  
  
  
  //echo "Hello, world!";
  //phpinfo();
  
  
  
  include $Glo_PathRel_back.'../share/php/Tools.php';

  

  $Glo_g_Color_list = array_merge( array(
                             // '*Formular'              => array( color => '505050'),
                             '*Formular'              => array( color => '000000'),
                             // '*Equation-Number'       => array( color => 'A0A0A0'),
                             '*Equation-Number'       => array( color => '000000'),
                           ), $Glo_g_Color_list);
  
  $Glo_g_Paragraph_fn = 'Sc_f_Paragraph';
  
  
  
  $Sc_g_sub_style = "font-size: 12px; position: relative; top: 3px;";

  $Sc_g_sup_style = "font-size: 12px; position: relative; top: -5px;";

  
  
  function Sc_f_HeaderElements()
  {
    global $Glo_PathRel_back;
    
    To_f_HeaderElements();
    
    echo ''."\n";
    // #: MathJax
    echo '    <!-- MathJax 2 -->'."\n";
    echo '    <script type="text/x-mathjax-config">'."\n";
    // #: See: http://docs.mathjax.org/en/latest/tex.html and http://docs.mathjax.org/en/latest/configuration.html
    // #: MathJax 2.5
    // #!: Does not work for scaling!
    //echo '      MathJax.Hub.Config({ TeX: {'."\n";
    //echo '        extensions: ["color.js"],'."\n";
    //echo '        "HTML-CSS": { scale: 200}, preferredFont: "TeX", minScaleAdjust: 200'."\n";
    //echo '      }});'."\n";
    // #!: Does not work for scaling!
    //echo '      MathJax.Hub.Config({ TeX: {'."\n";
    //echo '        extensions: ["color.js"],'."\n";
    //echo '        "HTML-CSS": { scale: 200}, preferredFont: "TeX", minScaleAdjust: 200'."\n";
    //echo '      }}, {NativeMML: {scale: 200}});'."\n";
    //echo '      MathJax.Hub.Config({ TeX: { extensions: ["color.js", "TeX/AMSmath.js", "tex2jax.js"] }, tex2jax: {inlineMath: [["$","$"], ["\\\\(","\\\\)"]], processEscapes: true, preview: ["[MathJax]"]}});'."\n";
    // #: MathJax 2.7.1
    //%! Test because of an error that is connected by change from 2.5 to 2.7.1:  echo '      MathJax.Hub.Config({ TeX: { extensions: ["color.js", "AMSmath.js"] }});'."\n";
    echo '      MathJax.Hub.Config({'."\n";
    //echo '        jax: ["input/TeX","output/HTML-CSS", "output/PreviewHTML"],'."\n";
    echo '        jax: ["input/TeX", "output/HTML-CSS", "output/PreviewHTML"],'."\n";
    echo '        extensions: ["tex2jax.js","MathZoom.js"],'."\n";
    echo '        tex2jax: {'."\n";
    echo '            inlineMath: [ ["$","$"], ["\\\\(","\\\\)"] ],'."\n";
    echo '            processEscapes: true,'."\n";
    echo '            preview: ["[MathJax]"]'."\n";
    echo '          },'."\n";
    echo '        TeX: {'."\n";
    echo '          extensions: ["color.js"],'."\n";
    echo '          Macros: {'."\n";
    echo '            llangle: "\\\\langle \\\\mspace{-3.5mu} \\\\langle",'."\n";
    echo '            rrangle: "\\\\rangle \\\\mspace{-3.5mu} \\\\rangle",'."\n";
    echo '            lOpera: "\\\\langle \\\\mspace{-2.2mu} \\\\raise -.375ex {\\\\tiny{\\\\text{-}}} \\\\mspace{-1.0mu}",'."\n";
    echo '            rOpera: "\\\\mspace{-1.0mu} \\\\raise -.375ex {\\\\tiny{\\\\text{-}}} \\\\mspace{-2.4mu} \\\\rangle \\\\mspace{2.0mu}",'."\n";
    echo '            lROpera: "\\\\lfloor \\\\mspace{.0mu}",'."\n";
    echo '            rROpera: "\\\\rOpera",'."\n";
    echo '            lLOpera: "\\\\lOpera",'."\n";
    echo '            rLOpera: "\\\\mspace{-0.4mu} \\\\rfloor \\\\mspace{2.0mu}",'."\n";
    // echo '            lSelSet: "\\\\left\\\\{ \\\\mspace{-4.4mu} \\\\rangle \\\\mspace{2.0mu}",'."\n"; // left selection set, linke Auswahlmenge
    // echo '            rSelSet: "\\\\mspace{2.0mu} \\\\langle \\\\mspace{-4.4mu} \\\\right\\\\}",'."\n"; // left selection set, rechte Auswahlmenge
    echo '            lSelSet: "\\\\left| \\\\mspace{-3.6mu} \\\\rangle \\\\mspace{2.0mu}",'."\n"; // left selection set, linke Auswahlmenge
    echo '            rSelSet: "\\\\mspace{2.0mu} \\\\langle \\\\mspace{-3.6mu} \\\\right|",'."\n"; // left selection set, rechte Auswahlmenge
    echo '            mod: "\\\\; mod \\\\;",'."\n";
    echo '            lowZero: "\\\\raise -.3ex 0",'."\n";
    echo '            updownarrows: "\\\\uparrow\\\\!\\\\downarrow",'."\n";
    echo '            MDo: "\\\\mathrm{\\\\downarrow}",'."\n";
    echo '            MUp: "\\\\mathrm{\\\\uparrow}",'."\n";
    echo '            MDoDo: "\\\\mathrm{\\\\downdownarrows}",'."\n";
    echo '            MUpUp: "\\\\mathrm{\\\\upuparrows}",'."\n";
    echo '            MUpDo: "\\\\mathrm{\\\\updownarrows}",'."\n";
    echo '            MLe: ["\\\\overset{\\\\leftarrow}{#1}", 1],'."\n";
    echo '            MRi: ["\\\\overset{\\\\rightarrow}{#1}", 1],'."\n";
    echo '            PdDown: "\\\\MDo{}\\\\MLe{d}^{-\\\\frac{1}{3}}",'."\n";
    echo '            PuUp: "\\\\MUp{}\\\\MRi{u}^{+\\\\frac{2}{3}}",'."\n";
    echo '          }'."\n";
    echo '        },'."\n";
    echo '        menuSettings: {'."\n";
    //-- echo '          zoom: "Hover",'."\n";  // !!!: Not working on Safari, but on FireFox. May this is, because I have set it manually before in Safari and that overwrites? Test on other Macs!
    echo '          zoom: "Double-Click",'."\n";  // !!!: Not working on Safari, but on FireFox. May this is, because I have set it manually before in Safari and that overwrites? Test on other Macs!
    echo '          zscale: "200%"'."\n";  // !!!: This works on Safari and FireFox.
    echo '        },'."\n";
    echo '        MathEvents: {'."\n";
    //-- echo '          hover: 1000'."\n";
    echo '        }'."\n";
    echo '      });'."\n";
    echo '    </script>'."\n";
    echo '    <script type="text/javascript"'."\n";
    // #: See: http://docs.mathjax.org/en/latest/config-files.html
    // #: MathJax 2.7.9
    echo '      src="https://cdn.jsdelivr.net/npm/mathjax@2.7.9/MathJax.js?config=TeX-AMS_HTML">'."\n";  // #: Different CDN network.
    echo '    </script>'."\n";
    // #!: Does not work for scaling!
    //echo '    <style>'."\n";
    //echo '      .MathJax {'."\n";
    //echo '        font-size: 200%;'."\n";
    //echo '      }'."\n";
    //echo '    </style>'."\n";
    
    /*
    echo ''."\n";
    // #: MathJax
    //
    echo '    <!-- MathJax 3 -->'."\n";
    // #: Parameter converted from v2 to v3 on page https://mathjax.github.io/MathJax-demos-web/convert-configuration/convert-configuration.html
    // !!!!!!!!!!!  CommonHTML dosen't work properly  –  looks not nice and patly destroyed  !!!!!!!!!!
    // couldn't figure out why
    // SVG works, but looks not as nice as v2
    echo '    <script>'."\n";
    echo '      window.MathJax = {'."\n";
    echo '        tex: {'."\n";
    echo '          autoload: {'."\n";
    echo '            color: [],          // don\'t autoload the color extension'."\n";
    echo '            colorv2: ["color"], // do autoload the colorv2 extension'."\n";
    echo '          },'."\n";
    echo '          inlineMath: [ ["$","$"], ["\\\\(","\\\\)"] ],'."\n";
    // echo '          processEscapes: true,'."\n";  // default in v3
    echo '          macros: {'."\n";
    echo '            lowZero: "\\\\raise -.3ex 0",'."\n";
    echo '            MDo: "\\\\mathrm{\\\\downarrow}",'."\n";
    echo '            MUp: "\\\\mathrm{\\\\uparrow}",'."\n";
    echo '            MLe: ["\\\\overset{\\\\leftarrow}{#1}", 1],'."\n";
    echo '            MRi: ["\\\\overset{\\\\rightarrow}{#1}", 1],'."\n";
    echo '            PdDown: "\\\\MDo{}\\\\MLe{d}^{-\\\\frac{1}{3}}",'."\n";
    echo '            PuUp: "\\\\MUp{}\\\\MRi{u}^{+\\\\frac{2}{3}}"'."\n";
    echo '          },'."\n";
    echo '          packages: {"[+]": ["noerrors", "color"]}'."\n";
    echo '        },'."\n";
    echo '        options: {'."\n";
    echo '          menuOptions: {'."\n";
    echo '            settings: {'."\n";
    echo '              zoom: "Double-Click",'."\n";
    echo '              zscale: "200%"'."\n";
    echo '            }'."\n";
    echo '          },'."\n";
    echo '          ignoreHtmlClass: "tex2jax_ignore",'."\n";
    echo '          processHtmlClass: "tex2jax_process"'."\n";
    echo '        },'."\n";
    echo '        loader: {'."\n";
    echo '          load: ["[tex]/noerrors", "[tex]/color"]'."\n";
    echo '        }'."\n";
    echo '      };'."\n";
    echo '    </script>'."\n";
    echo '    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>'."\n";
    echo '    <script id="MathJax-script" async'."\n";
    // echo '      src="https://cdn.jsdelivr.net/npm/mathjax@3.1.2/es5/tex-mml-chtml.js">'."\n";
    // echo '      src="https://cdn.jsdelivr.net/npm/mathjax@3.1.2/es5/tex-chtml.js">'."\n";
    echo '      src="https://cdn.jsdelivr.net/npm/mathjax@3.1.2/es5/tex-svg.js">'."\n";  // #: SVG
    echo '    </script>'."\n";
    */
  }
  
  
  
  // #: The order of entries may be important: As example XXX.
  // !: Change name to "$Sc_g_HTML_replace_ary"!
  $Sc_g_Text_replace_ary = array_merge(
    $To_g_Text_replace_ary,
    array(
      array( 'ℏ', '&#x210F;'),
      array( '⍺', '&#9082;'),     // #: Apl functional symbol alpha: "&alpha;" looks to close to "a"!
      //array( '⍺', '&alpha;'),     // #: "&alpha;" looks to close to "a"!
      array( 'π', '&pi;'),
      array( 'λ', '&lambda;'),
      array( 'γ', '&gamma;'),
      array( '𝝂', '&#120642;'),
      //array( 'ν', '&nu;'),     // #: "&nu;" looks to close to "v"!
      array( 'ρ', '&rho;'),
      array( 'φ', '&phi;'),
      array( '⍵', '&omega;'),
      array( 'Δ', '&Delta;'),
      array( '≈', '&asymp;'),
      array( '⋅', '&sdot;'),
      array( '√', '&radic;'),
      array( '\M(C)', '&#8450;'),  // #: Double-struck capital C: https://unicode-table.com/de/2102/
      array( '\M(N)', '&#8469;'),  // #: Double-struck capital N: http://unicode-table.com/de/2115/
      array( '\M(P)', '&#8473;'),  // #: Double-struck capital P: http://unicode-table.com/de/2119/
      array( '\M(Q)', '&#8474;'),  // #: Double-struck capital Q: https://symbl.cc/en/211A/
      array( '\M(S)', '&#120138;'),  // #: Mathematical Double-Struck Capital S: http://unicode-table.com/de/1D54A/
      array( '\M(T)', '&#120139;'),  // #: Mathematical Double-Struck Capital T: http://unicode-table.com/de/1D54B/
      array( '\M(U)', '&#120140;'),  // #: Mathematical Double-Struck Capital U: http://unicode-table.com/de/1D54C/
      array( '\M(Z)', '&#8484;'),  // #: Double-struck capital Z: https://symbl.cc/en/2124/
    )
  );

  $Glo_g_Text_replace_ary = $Sc_g_Text_replace_ary;


  // #: Replaces all simple LaTeX character notations with the usual chars.
  // #: The order of entries may be important: As example XXX.
  $Sc_g_LaTeX_replace_ary =       array(
                                    array( '--', '–'),
                                    array( '\\&', '&'),
                                  );


  
  function Sc_f_replace_callback__latexcommand__zirkumflex( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    global $Sc_g_sup_style;

    //%! if ($value[0] != null)
    // if (0 < count( $value))
    if (To_f_replace_callback__latexcommand__parameterCheck( $value, 1, 0))
    {
      
      return "<span style=\"{$Sc_g_sup_style}\">{$value[0][0]}</span>";

    }
    else
    
      return 'Error: "^{}": Parameter amount is not 1 and 0 optional! Value: $value';

  }

  
  function Sc_f_replace_callback__latexcommand__underscore( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    global $Sc_g_sub_style;

    //%! if ($value[0] != null)
    if (0 < count( $value))  // !!!: Change this to "To_f_replace_callback__latexcommand__parameterCheck" see above.
    {
      
      return "<span style=\"{$Sc_g_sub_style}\">{$value[0][0]}</span>";

    }
    else
    
      return 'Error: "_{}": Parameter amount is not 1 and 0 optional! $value[0]';

  }

  
  function Sc_f_replace_callback__latexcommand__latexmath( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    //%! if ($value[0] != null)
    //%! if (0 < count( $value))  // !!!: Change this to "To_f_replace_callback__latexcommand__parameterCheck" see above.
    if (To_f_replace_callback__latexcommand__parameterCheck( $value, 1, 0))
    {
      
      //-- return Sc_f_equation_latex_html( $value[0][0], ($value[1] == null) ? "" : (($value[1][0] == null) ? "" : $value[1][0]), ($value[1] == null) ? "Google" : (($value[1][1] == null) ? "Google" : $value[1][1]), "inline");
      // print_r( Sc_f_equation_latex_html( $value[0][0], ($value[1] == null) ? "" : (($value[1][0] == null) ? "" : $value[1][0]), ($value[1] == null) ? "MathJax" : (($value[1][1] == null) ? "MathJax" : $value[1][1]), "inline"));
      return Sc_f_equation_latex_html( $value[0][0], ($value[1] == null) ? "" : (($value[1][0] == null) ? "" : $value[1][0]), ($value[1] == null) ? "MathJax" : (($value[1][1] == null) ? "MathJax" : $value[1][1]), "inline");
      
    }
    else
      
      return "Error: \\latexmath: Parameter amount is not 1 and 2 optional! $match[0]";
  }

  
  function Sc_f_replace_callback__latexcommand__term( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    if (To_f_replace_callback__latexcommand__parameterCheck( $value, 1, 0))
    {
      global $Sc_g_term_replace_ary;
      
      //print_r( $value[0][0]);
      $term_str = To_f_replace_str_ary( $value[0][0], $Sc_g_term_replace_ary);

      return "<i>{$term_str}</i>";

    }
    else
    
      return 'Error: "\\term{}": Parameter amount is not 1 and 0 optional! $value[0]';

  }

  
  function Sc_f_replace_callback__latexcommand__cite( $value, $replace_ary=null, $replace_preg_ary=null)
  {
    //%! if ($value[0] != null)
    if (0 < count( $value))  // !!!: Change this to "To_f_replace_callback__latexcommand__parameterCheck" see above.
    {
      $optional = 'standard';

      // #?: Is optional def?
      //%! if (($value[1] != null) && ($value[1][0] != null) && (strlen( $value[1][0]) != 0))
      if ((1 < count( $value)) && (0 < count( $value[1])) && (strlen( $value[1][0]) != 0))
        $optional = $value[1][0];
      
      return Sc_f_litera_cite_html( $value[0][0], $optional);

    }
    else
    
      return 'Error: "\\cite[]{}": Parameter amount is not 1 and 1 optional! $value[0]';

  }

  
  function Sc_f_replace_callback__latexcommand__footnote( $value_ary, $replace_ary=null, $replace_preg_ary=null)
  {
    global $Sc_g_footnote_style;
    
    //print_r( $value_ary);
    
    $error_is = false;
    $footnote_html = '';
    
    foreach ($value_ary as $key => $value)
    {
      //print_r( $value);

      //%! if ($value[0] != null)
      if (0 < count( $value))  // !!!: Change this to "To_f_replace_callback__latexcommand__parameterCheck" see above.
        $footnote_html = $footnote_html.(Sc_f_footnote_add_html( $value[0][0], ((0 < count( $value[1])) ? $value[1][0] : '')));
      else
      {
        $error_is = true;
        break;
      }

      if ($key < count( $value_ary) - 1)
        $footnote_html = $footnote_html.'<span style="'.($Sc_g_footnote_style).'">,</span>';
    }

    if (!$error_is)

      return $footnote_html;
      
    else
      return "Error: \\footnote: Parameter amount is not 1 and 1 optional! $match[0]";
  }

  
  // #: Copy the array for later remove of values by "unset".
  $Sc_g_Text_replace_preg_ary = $To_g_Text_replace_preg_ary;
  unset( $Sc_g_Text_replace_preg_ary['hidden']);
  unset( $Sc_g_Text_replace_preg_ary['const']);
  unset( $Sc_g_Text_replace_preg_ary['color']);
  // #: The order of entries may be important: 'const' must be at the very beginning. As example "\cite" can be inside "\color" but not vice versa.
  $Sc_g_Text_replace_preg_ary = array_merge(
                                    array(
                                      'hidden' =>
                                        $To_g_Text_replace_preg_ary['hidden'],     // #!: "hidden" must be the first element. Was removed from the array in the lines above.
                                      'const' =>
                                        $To_g_Text_replace_preg_ary['const'],     // #!: "const" must be the second element. Was removed from the array in the lines above.
                                      'color' =>
                                        $To_g_Text_replace_preg_ary['color'],     // #!: "color" must be the third element, because in "latexmath" there is "\color{formcolor}" used for color setting which not should be replaced. Was removed from the array in the lines above.
                                      'term' => // #!: "term" must be before it's possible internal commands, because if it's content is already replaced by HTML it's small dash replacement destroys negative numbers.
                                        array( type => 'latexcommand',
                                               search => '\\term',
                                               param_dim => 1,
                                               param_optional_max => 0,
                                               callback_f => 'Sc_f_replace_callback__latexcommand__term',
                                             ),
                                      '^' =>
                                        array( type => 'latexcommand',
                                               search => '^',
                                               param_dim => 1,
                                               param_optional_max => 0,
                                               callback_f => 'Sc_f_replace_callback__latexcommand__zirkumflex',
                                             ),
                                      '_' =>
                                        array( type => 'latexcommand',
                                               search => '_',
                                               param_dim => 1,
                                               param_optional_max => 0,
                                               callback_f => 'Sc_f_replace_callback__latexcommand__underscore',
                                             ),
                                      'latexmath' =>     // #: It is not working this way, because latex includes '{' and '}' as well. A method where only searching for '\latexmath' and then looking for the Balance of an array of '[]' and '{}' would be better and can handle recursion.
                                        array( type => 'latexcommand',
                                               search => '\\latexmath',
                                               param_dim => 1,
                                               param_optional_max => 2,
                                               callback_f => 'Sc_f_replace_callback__latexcommand__latexmath',
                                               replace_internal => false,     // #!: XXX This is important for velocity and if "\\footnote" is hidden it shall not be counted and registered!
                                             ),
                                      'cite' =>
                                        array( type => 'latexcommand',
                                               search => '\\cite',
                                               param_dim => 1,
                                               param_optional_max => 1,
                                               callback_f => 'Sc_f_replace_callback__latexcommand__cite',
                                             ),
                                          ),
                                    $Sc_g_Text_replace_preg_ary,     // #!: "hidden", "const", "color" was removed from the array in the lines above.
                                    array(
                                      'quote' =>
                                        $To_g_Text_replace_preg_ary['quote'],
                                      'footnote' =>
                                        array( type => 'latexcommand',
                                               search => '\\footnote',
                                               multi_is => true,
                                               param_dim => 1,
                                               param_optional_max => 1,
                                               callback_f => 'Sc_f_replace_callback__latexcommand__footnote',
                                             ),
                                          )
                                    );

  $Glo_g_Text_replace_preg_ary = $Sc_g_Text_replace_preg_ary;
  
  

  function Sc_f_HTMLHeader_init( $site_activ)
  {
    global $Glo_g_Site_ary, $Glo_g_Site_activ_GenInfo_idx;
    
    To_f_HTMLHeader_init( $site_activ);
    
    // #?: Bibtex entry exists?
    if (array_key_exists( litera_bibtex_url_rel, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx]))
      Sc_f_litera_bibtex( $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][litera_bibtex_url_rel]);
  }
  
  

  const equ_text_std = 'equ_text_std';
  const equ_autonum_reset = 'equ_autonum_reset';
  const latex_tech = 'latex_tech';
  const equ_list = 'equ_list';
  
  function Sc_f_Paragraph( $type, $replace_ary=null, $replace_preg_ary=null, $offset='            ', $text)
  {
    global $Glo_PathRel_back, $Glo_g_Site_ary, $Glo_g_Site_activ, $Sc_g_equation_auto_num;
    
    switch ($type)
    {

      case 'equations':
        if (array_key_exists( equ_autonum_reset, $text) && $text[equ_autonum_reset])
          $Sc_g_equation_auto_num = 0;
        if (array_key_exists( latex_tech, $text))
          $latex_tech = $text[latex_tech];
        else
          $latex_tech = 'Google';
        
        Sc_f_equation_list( $text[equ_text_std], '  '.$offset, $text[equ_list], $latex_tech);
        break;
      
      default:
        To_f_Paragraph( $type, $replace_ary, $replace_preg_ary, $offset='            ', $text);
        break;
        
    }
    
  }
  
  

  // #: The order of entries may be important: As example see first ' + '-> ' \;+\; ' and than '+' -> '%2B'.
  $Sc_g_term_replace_ary = array(
                                    // !!!: does not work at the moment, because here already is HTML in the content with negative number for "^{-1}" as example. if its dash gets then replace the HTML is destroyed: I changed the order of commands in "$Sc_g_Text_replace_preg_ary" and moved "term" before "^", but had no effect of a reason I could not quickly find
                                    // array( '-', '–'), // #: replace small dash by middle dash in terms
                                 );

  
  // #: The order of entries may be important: As example see first ' + '-> ' \;+\; ' and than '+' -> '%2B'.
  $Sc_g_equation_replace_ary = array(
                                    // #: Arrange space around symbols and save chars.
                                    array( '  \Rightarrow  ', '\;\;\;\Rightarrow\;\;\;'),
                                    array( '  \Leftrightarrow  ', '\;\;\;\Leftrightarrow\;\;\;'),
                                    array( '  \land  ', '\;\;\;\land\;\;\;'),
                                    array( '  \lor  ', '\;\;\;\lor\;\;\;'),
                                    array( '  =  ', '\;\;\;=\;\;\;'),
                                    array( '  \neq  ', '\;\;\;\neq\;\;\;'),
                                    array( '  <  ', '\;\;\;<\;\;\;'),
                                    array( '  \leq  ', '\;\;\;\leq\;\;\;'),
                                    array( '  >  ', '\;\;\;>\;\;\;'),
                                    array( '  \geq  ', '\;\;\;\geq\;\;\;'),
                                    array( '  \approx  ', '\;\;\;\approx\;\;\;'),
                                    array( '  \sim  ', '\;\;\;\sim\;\;\;'),
                                    array( '  \ll  ', '\;\;\;\ll\;\;\;'),
                                    array( '  ?:=  ', '\;\;\;\overset{?}{≔}\;\;\;'),
                                    array( '  \widehat{=}  ', '\;\;\;\widehat{=}\;\;\;'),
                                    array( ' \widehat{=} ', '\;\widehat{=}\;'),
                                    array( ':=', '≔'),
                                    array( '  ≔  ', '\;\;\;≔\;\;\;'),
                                    array( '  ?=  ', '\;\;\;?=\;\;\;'),
                                    array( '?=', '\overset{?}{=}'),
                                    array( '  \mapsto  ', '\;\;\;\mapsto\;\;\;'),
                                    array( '  \in  ', '\;\;\;\in\;\;\;'),
                                    array( '  ?\in  ', '\;\;\;\overset{?}{\in}\;\;\;'),
                                    array( '  \notin  ', '\;\;\;\notin\;\;\;'),
                                    array( '  \subset  ', '\;\;\;\subset\;\;\;'),
                                    array( '  \rightarrow  ', '\;\;\;\rightarrow\;\;\;'),
                                    array( '  \not\rightarrow  ', '\;\;\;\not\rightarrow\;\;\;\;\;'),
                                    array( '\partial ', '\partial\,'),
                                    array( '\*part ', '\partial\,'),
                                    array( '\*part', '\partial\,'),
                                    array( '*o(', '^{\lOpera'),
                                    array( '*o)', '\rOpera}'),
                                    array( '*r(', '^{\lROpera'),
                                    array( '*r)', '\rROpera}'),
                                    array( '*l(', '^{\lLOpera'),
                                    array( '*l)', '\rLOpera}'),
                                    array( '*\{>', '\lSelSet'),
                                    array( '*<\}', '\rSelSet'),
                                    array( '〈', '\langle '),
                                    array( '〉', '\rangle '),
                                    array( '*(', '\left('),
                                    array( '*)', '\right)'),
                                    array( '*[', '\left['),
                                    array( '*]', '\right]'),
                                    array( '*\{', '\left\{'),
                                    array( '*\}', '\right\}'),
                                    array( '*|*', '~\middle|~'),
                                    array( '*|', '\left|'),
                                    array( '|*', '\right|'),
                                    array( '*\langle', '\left\langle'),
                                    array( '*\rangle', '\right\rangle'),
                                    array( '(  ', '(\; '),
                                    array( '  )', ' \;)'),
                                    array( '\left(  ', '\left(\; '),
                                    array( '  \right)', ' \;\right)'),
                                    array( '[  ', '[\; '),
                                    array( '  ]', ' \;]'),
                                    array( '\left[  ', '\left[\; '),
                                    array( '  \right]', ' \;\right]'),
                                    array( '\{  ', '\{\; '),
                                    array( '  \}', ' \;\}'),
                                    array( '\left\{  ', '\left\{\; '),
                                    array( '  \right\}', ' \;\right\}'),
                                    array( '\left|  ', '\left|\; '),
                                    array( '  \right|', ' \;\right|'),
                                    array( '  ~\middle|~  ', '\;~\middle|~\;'),
                                    array( '․', '.\\!'),  // #: Unicode Character 'ONE DOT LEADER' (U+2024)  -->  dot without a little following space
                                 );

  // #: The order of entries may be important: As example see first ' + '-> ' \;+\; ' and than '+' -> '%2B'.
  $Sc_g_equation_replace_Google_ary = array_merge(
                                  array(
                                    // #: Simplify commands and save chars.
                                    array( '\Rightarrow  ', '\Rightarrow\hspace{20mm}'),
                                    array( '\Leftrightarrow  ', '\Leftrightarrow\hspace{20mm}'),
                                  ),
                                  $Sc_g_equation_replace_ary,
                                  array(
                                    // #: Arrange space around symbols and save chars.
                                    array( ' + ', '\;+\;'),
                                    array( ' - ', '\;-\;'),
                                    array( ' \pm ', '\;\pm\;'),
                                    array( ' \cdot ', '\;\cdot\;'),
                                    array( ' \, ', '\,'),
                                    array( '  \raisebox{-3.0ex}{\overset{>}{\sim}}  ', '\;\;\;\raisebox{-3.0ex}{\overset{>}{\sim}}\;\;\;'),
                                    // #: Save chars only.
                                    array( ' {', '{'),
                                    array( '{ ', '{'),
                                    array( ' }', '}'),
                                    array( '} ', '}'),
                                    array( ' \Bigl(', '\Bigl('),
                                    array( '\Bigl( ', '\Bigl('),
                                    array( ' \Bigr)', '\Bigr)'),
                                    array( '\Bigr) ', '\Bigr)'),
                                    // #: Make HTML conform.
                                    array( '+', '%2B')
                                  ));

  // #: The order of entries may be importent: As example see first ' + '-> ' \;+\; ' and than '+' -> '%2B'.
  $Sc_g_equation_replace_MathJax_ary = array_merge(
                                  array(
                                    // #: Simplify commands and save chars.
                                    array( '{  \Rightarrow  ', '{  \Rightarrow\hspace{10mm}'),
                                    array( '{  \Leftrightarrow  ', '{  \Leftrightarrow\hspace{10mm}'),
                                  ),
                                  $Sc_g_equation_replace_ary,
                                  array(
                                    // #: Arrange space around symbols and save chars.
                                    array( '  \custom{≳}  ', '\;\;\;\custom{≳}\;\;\;'),
                                    // #: Short cuts.
                                    array( '\lowZero', '\raise -.3ex 0'),
                                    array( '\custom{≳}', '\raise -0.2ex \overset{\raise -0.6ex >}{\sim}'),
                                  ));

  $Sc_g_equation_auto_num = 0;
  
  
  function Sc_f_term_str( $term_str='', $term_color='')
  {
    return '<i'.(($term_color != '') ? (' style="color: #'.$term_color.'"') : '').'>'.$term_str.'</i>';
  }
  
  
  function Sc_f_term( $term_str='', $term_color='')
  {
    echo Sc_f_term_str( $term_str, $term_color);
  }
  
  
  function Sc_f_equation_latex_str_html( $latex_str='', $latex_color='505050', $latex_tech='Google', $style='displayed')
  {
    global $Sc_g_equation_replace_Google_ary, $Sc_g_equation_replace_MathJax_ary;
    
    //$latex_str = To_f_replace_str_ary( $latex_str, $Sc_g_equation_replace_ary);  // #: Moved to case.
    
    $html_ret = '>>>! Wrong Latex style!';
    
    switch ($latex_tech)
    {
      
      case 'Google':
        $latex_str = To_f_replace_str_ary( $latex_str, $Sc_g_equation_replace_Google_ary);
        
        // #: The PHP Parser will not attempt to parse strings encapsulated in single quotes (as opposed to strings within double quotes) and therefore outputs exactly what it's being fed with :)
        //      See "http://php.net/manual/de/language.variables.php".
        //return '<img src="http://chart.apis.google.com/chart?cht=tx&chf=bg,s,FFFFFF00&chco='.$latex_color.'&chl='.$latex_str.'" border="0" alt="'.$latex_str.'" valign="bottom">';
        $html_ret = '<img src="http://chart.apis.google.com/chart?cht=tx&chf=bg,s,FFFFFF00&chco='.$latex_color.'&chl='.$latex_str.'" border="0" alt="'.$latex_str.'" valign="middle">'."\n";
        break;
        
      case 'MathJax':
        $latex_str = To_f_replace_str_ary( $latex_str, $Sc_g_equation_replace_MathJax_ary);

        // #: Convert HTML-HEX-Color to RGB.
        if(strlen($latex_color) == 0) {
          // #!: Means context color and sets no color!
          $r = 0;
          $g = 0;
          $b = 0;
        } else {
          // #: See "http://bavotasan.com/2011/convert-hex-color-to-rgb-using-php/".
          if(strlen($latex_color) == 3) {
            $r = hexdec(substr($latex_color,0,1).substr($latex_color,0,1));
            $g = hexdec(substr($latex_color,1,1).substr($latex_color,1,1));
            $b = hexdec(substr($latex_color,2,1).substr($latex_color,2,1));
          } else {
            if (strlen( $latex_color) == 6) {
              $r = hexdec(substr($latex_color,0,2));
              $g = hexdec(substr($latex_color,2,2));
              $b = hexdec(substr($latex_color,4,2));
            } else {
              // #!: Indicates an error!
              $r = 114;
              $g = 0;
              $b = 172;
            }
          }
        }
        //print_r('Hex: '.$latex_color.' -> RGB: '.$r.','.$g.','.$b);
        //print_r('style: '.$style);
        
        // #: See "http://docs.mathjax.org/en/latest/tex.html#tex-support" and for colors "http://adereth.github.io/blog/2013/11/29/colorful-equations/".
        //$html_ret = '<span style="color: #'.$latex_color.'">\\['.$latex_str.'\\]</span>';  // #!: Does not work for the color!
        //$html_ret = '\\[ \\definecolor{formcolor}{HTML}{'.$latex_color.'} \\color{formcolor} '.$latex_str.' \\]'."\n";  // #!: MathJax does not support HTML colors!
        //$html_ret = '<div style="font-size: 200%;"> \\[ \\definecolor{formcolor}{RGB}{'.$r.','.$g.','.$b.'} \\color{formcolor} '.$latex_str.' \\] </div>'."\n";  // #!: Font-size like that does not work. It is corrected afterwards by MathJax to normal.
        $html_ret = (($style == 'inline') ? '\\(' : '\\[').((strlen($latex_color) == 0) ? '' : ' \\definecolor{formcolor}{RGB}{'.$r.','.$g.','.$b.'} \\color{formcolor}').' '.$latex_str.' '.(($style == 'inline') ? '\\)' : '\\]'."\n");
        //$html_ret = '\\[ \\large \\definecolor{formcolor}{RGB}{'.$r.','.$g.','.$b.'} \\color{formcolor} '.$latex_str.' \\]'."\n";  // #!: It is a bit to big.
        break;

    }
    
    return $html_ret;
    
  }
  
  
  function Sc_f_equation_latex_str( $latex_str='', $latex_color='505050', $latex_tech='Google', $style='displayed')
  {
    echo Sc_f_equation_latex_str_html( $latex_str, $latex_color, $latex_tech, $style);
  }
  
  
  function Sc_f_equation_latex_html( $latex, $latex_color='505050', $latex_tech='Google', $style='displayed')
  
  // #param: "$latex" may be a string or an array of strings.
  
  {
    global $Sc_g_equation_replace_ary; // ??? unused here?
    
    $ret_html = '';
    
    if (is_string( $latex))
      $ret_html = $ret_html.(Sc_f_equation_latex_str_html( $latex, $latex_color, $latex_tech, $style));
    else
      switch ($latex_tech)
      {
          
        case 'Google':
          
          foreach ($latex as $value)
            $ret_html = $ret_html.(Sc_f_equation_latex_str_html( $value, $latex_color, $latex_tech, $style));

          break;
          
        case 'MathJax':
          // #: It is not necessary to have more than one latex strings here. So lets put them together.
          $latex_str = '';
          
          foreach ($latex as $value)
            $latex_str = $latex_str.$value;

          $ret_html = $ret_html.(Sc_f_equation_latex_str_html( $latex_str, $latex_color, $latex_tech, $style));
          break;
          
      }
    
    return $ret_html;
    
  }
  
  
  function Sc_f_equation_latex( $latex, $latex_color='505050', $latex_tech='Google')
  
  // #param: "$latex" may be a string or an array of strings.
  
  {
    global $Sc_g_equation_replace_ary; // ??? unused here?
    
    echo Sc_f_equation_latex_html( $latex, $latex_color, $latex_tech);
    
  }
  
  
  function Sc_f_equation_list_HideLine_html()
  {
    return '<div style="border: none; border-top: 1px dashed #dcdcdc; border-bottom: 1px solid #FFFFFF; clear: both; height: 0; width: 420px; margin: 0; padding: 0;"></div>';
  }
  
  
  $Sc_g_equation_list_SpaceBefore = '20px';
  $Sc_g_equation_list_SpaceAfter = '20px';
  $Sc_g_equation_list_LineDistance = '10';
  
  
  const display = 'display';
  const latex = 'latex';
  const label_incr = 'label_incr';
  const latex_if_visible = 'latex_if_visible';
  const footnote = 'footnote';
  const footnote_num_color = 'footnote_num_color';
  
  function Sc_f_equation_list( $equ_text_std, $offset, $list, $latex_tech='Google')
  {
    global $Glo_g_Color_list, $To_g_anchor_ary_dim, $To_g_anchor_ary, $To_g_elements_hides_ary_dim, $To_g_elements_hides_ary, $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Sc_g_equation_auto_num,
            $Sc_g_equation_list_SpaceBefore, $Sc_g_equation_list_SpaceAfter, $Sc_g_equation_list_LineDistance;
       
    // #!: error
    if (0 < count($list) && $list[count($list) - 1][display] == 'off') {
      // print_r( '>>> error: In "Sc_f_equation_list" last equation is not shown! Means "display => \'off\'"');
      echo '<p style="color: red;">>>> error: In "Sc_f_equation_list" last equation is not shown! Means "display => \'off\'"</p>';
      return null;
    }

    // #: Start with visibility, than it is visible, if JavaScript is not aviable. Than Google will see the text.
    $start_display = 'showContent';
    
    $display_is = true;
    $local_elements_hides_ele_num = 1;
    
    // #: No offset, because it is before the PHP command.
    echo '<table border="0" style="margin-top: '.$Sc_g_equation_list_SpaceBefore.'; margin-bottom: '.$Sc_g_equation_list_SpaceAfter.';"> <colgroup> <col width="500"> <col width="100"> </colgroup>'."\n";
    echo "\n";

    // #: Go through all equations.
    foreach ($list as $key => $value)
    {
      $latex_color = $Glo_g_Color_list['*Formular'][color];
      //$latex_color = 'FF0000';  // #: Red for testing
      $equationNumber_color = $Glo_g_Color_list['*Equation-Number'][color];

      // #: Set equation label.
      {
        $label_incr = null;

        // #?: Force label incrementation?
        if (array_key_exists( label_incr, $value))
          $label_incr = $value[label_incr];

        if (array_key_exists( label_text, $value))
        {
          if ($label_incr == true)
            $Sc_g_equation_auto_num++;

          $To_g_anchor_ary[label_text][] = To_f_Text_replace_html( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $value[label_text]);
        }
        else
        {
          if (($label_incr == null) || ($label_incr == true))
            $Sc_g_equation_auto_num++;
          
          $To_g_anchor_ary[label_text][] = $equ_text_std.'.'.$Sc_g_equation_auto_num;
        }

        if (array_key_exists( label_name, $value))
          $To_g_anchor_ary[label_name][] = $value[label_name];
        else
          if (array_key_exists( label_text, $value))
            $To_g_anchor_ary[label_name][] = '';
          else
            $To_g_anchor_ary[label_name][] = 'Equ-'.$equ_text_std.'.'.$Sc_g_equation_auto_num;

        $To_g_anchor_ary_dim += 1;
      }
      
      // #?: Is visible.
      if ($value[display] == 'on')
      {
        // #?: Was invisible until yet?
        if (!$display_is)
        {
          echo $offset.'  <tr id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: '.(($start_display == 'hideContent') ? 'none' : '').';">'."\n";
          $To_g_elements_hides_ary[contentAry][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
          $local_elements_hides_ele_num++;
          echo $offset.'    <td colspan="2" align="left">'."\n";
          echo $offset.'      <table border="0" style="margin: 0; padding: 0;"> <colgroup> <col width="80"> </colgroup>'."\n";
          echo $offset.'        <tr> <td valign="baseline" style="font-size: 10px;"><a href="javascript:To_f_elements_hides_switch( \'hideContent\', To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'noContentAry\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'contentAry\'])" style="font-size: 10px; color: #A0A0A0;">&#9650; ausblenden</a></td> <td valign="baseline">'.(Sc_f_equation_list_HideLine_html()).'</td> </tr> </table> </td> </tr>'."\n";
          echo "\n";
          echo $offset.'  <tr><td height="10"></td></tr>'."\n";
          echo "\n";
        }
        
        echo $offset.'  <tr>'."\n";
        // #: If the equation before was 'on' too and "$value" has "latex_if_visible" defined?
        if ($display_is || !array_key_exists( latex_if_visible, $value))
        {
          echo $offset.'    <td align="center">'."\n";
          echo $offset.'      <a name="'.$To_g_anchor_ary[label_name][$To_g_anchor_ary_dim - 1].'"></a>'."\n";
          echo $offset.'      '.(Sc_f_equation_latex( $value[latex], $latex_color, $latex_tech)).' </td>'."\n";
        } else
        {     // #: "$value[latex]" is array.
          //echo $offset.'    <td id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: ;" align="center">'."\n";
          echo $offset.'    <td id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: '.(($start_display == 'hideContent') ? '' : 'none').';" align="center">'."\n";
          $To_g_elements_hides_ary[noContentAry][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
          $local_elements_hides_ele_num++;
          echo $offset.'      '.(Sc_f_equation_latex( $value[latex], $latex_color, $latex_tech)).' </td>'."\n";
          
          //echo $offset.'    <td id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: none;" align="center">'."\n";
          echo $offset.'    <td id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: '.(($start_display == 'hideContent') ? 'none' : '').';" align="center">'."\n";
          $To_g_elements_hides_ary[contentAry][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
          $local_elements_hides_ele_num++;
          echo $offset.'      '.(Sc_f_equation_latex( $value[latex_if_visible], $latex_color, $latex_tech)).' </td>'."\n";
        }
        echo $offset.'    <td> <span style="color: #'.$equationNumber_color.'">'."\n";
        {
          echo $offset.'      ('.$To_g_anchor_ary[label_text][$To_g_anchor_ary_dim - 1].')';
          if (array_key_exists( footnote, $value))
          {
            if (array_key_exists( footnote_num_color, $value))
            {$footnote_num_color = To_f_Color( $value[footnote_num_color]);}
            else
              $footnote_num_color = '';
            echo Sc_f_footnote_add( $value[footnote], $footnote_num_color);
          }
          echo $offset.'  </span> </td> </tr>'."\n";
        }
        echo "\n";
        
        // #?: Is there still an element comming in the list?
        if (array_key_exists( $key + 1, $list))
        {
          echo $offset.'  <tr><td height="'.$Sc_g_equation_list_LineDistance.'"></td></tr>'."\n";
          echo "\n";
        }

        // #?: Was visible until yet?
        if (!$display_is)
        {
          $display_is = true;

          To_f_elements_hides_WriteJavaScript_ary_idx( $offset, $To_g_elements_hides_ary_dim - 1, 'hideContent');
        }
      }
      else
      {     // #: No, it is invisible.
        // #?: Was visible until yet?
        if ($display_is)
        {
          $To_g_elements_hides_ary_dim++;

          echo $offset.'  <tr id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: '.(($start_display == 'hideContent') ? '' : 'none').';">'."\n";
          $To_g_elements_hides_ary[noContentAry][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
          $local_elements_hides_ele_num++;
          echo $offset.'    <td colspan="2" align="left">'."\n";
          echo $offset.'      <table border="0" style="margin: 0; padding: 0;"> <colgroup> <col width="80"> </colgroup>'."\n";
          echo $offset.'        <tr> <td valign="baseline" style="font-size: 10px;"><a href="javascript:To_f_elements_hides_switch( \'showContent\', To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'noContentAry\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'contentAry\'])" style="font-size: 10px; color: #A0A0A0;">&#9658; einblenden</a></td> <td valign="baseline">'.(Sc_f_equation_list_HideLine_html()).'</td> </tr> </table> </td> </tr>'."\n";
          echo $offset.'  <tr id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: '.(($start_display == 'hideContent') ? 'none' : '').';">'."\n";
          $To_g_elements_hides_ary[contentAry][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
          $local_elements_hides_ele_num++;
          echo $offset.'    <td colspan="2" align="left">'."\n";
          echo $offset.'      <table border="0" style="margin: 0; padding: 0;"> <colgroup> <col width="80"> </colgroup>'."\n";
          echo $offset.'        <tr> <td valign="baseline" style="font-size: 10px;"><a href="javascript:To_f_elements_hides_switch( \'hideContent\', To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'base_name\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'noContentAry\'], To_g_elements_hides_ary['.($To_g_elements_hides_ary_dim - 1).'][\'contentAry\'])" style="font-size: 10px; color: #A0A0A0;">&#9660; ausblenden</a></td> <td valign="baseline">'.(Sc_f_equation_list_HideLine_html()).'</td> </tr> </table> </td> </tr>'."\n";
          echo "\n";
          echo $offset.'  <tr id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: '.(($start_display == 'hideContent') ? 'none' : '').';"><td height="10"></td></tr>'."\n";
          $To_g_elements_hides_ary[contentAry][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
          $local_elements_hides_ele_num++;
          echo "\n";

          $display_is = false;
        }
        
        //echo $offset.'  <tr id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: none;">'."\n";
        echo $offset.'  <tr id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: '.(($start_display == 'hideContent') ? 'none' : '').';">'."\n";
        $To_g_elements_hides_ary[contentAry][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
        $local_elements_hides_ele_num++;
        echo $offset.'    <td align="center">'."\n";
        echo $offset.'      <a name="'.$To_g_anchor_ary[label_name][$To_g_anchor_ary_dim - 1].'"></a>'."\n";
        echo $offset.'      '.(Sc_f_equation_latex( $value[latex], $latex_color, $latex_tech)).' </td>'."\n";
        //%! echo $offset.'    <td> <span style="color: #A0A0A0">'."\n";
        echo $offset.'    <td> <span style="color: #'.$equationNumber_color.'">'."\n";
        {
          echo $offset.'      ('.$To_g_anchor_ary[label_text][$To_g_anchor_ary_dim - 1].')';
          if (array_key_exists( footnote, $value))
          {
            if (array_key_exists( footnote_num_color, $value))
            {$footnote_num_color = To_f_Color( $value[footnote_num_color]);}
            else
              $footnote_num_color = '';
            //%!echo Sc_f_footnote_add( $value[footnote]);
            echo Sc_f_footnote_add( $value[footnote], $footnote_num_color);
          }
          echo '</span> </td> </tr>'."\n";
        }
        echo "\n";
        
        //echo $offset.'  <tr id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: none;"><td height="5"></td></tr>'."\n";
        echo $offset.'  <tr id="Elements-Hides-'.$To_g_elements_hides_ary_dim.'-'.$local_elements_hides_ele_num.'" style="display: '.(($start_display == 'hideContent') ? 'none' : '').';"><td height="'.$Sc_g_equation_list_LineDistance.'"></td></tr>'."\n";
        $To_g_elements_hides_ary[contentAry][$To_g_elements_hides_ary_dim - 1][] = $local_elements_hides_ele_num;
        $local_elements_hides_ele_num++;
        echo "\n";
      }
    }

    echo $offset.'</table>'."\n";
  }
  
  
  // const text = 'text';
  const text_hint = 'text_hint';
  const text_color = 'text_color';
  
  $Sc_g_footnote_ary_dim = 0;
  $Sc_g_footnote_ary = array( text => array(), text_hint => array(), text_color => array());

  $Sc_g_footnote_style = $Sc_g_sup_style;

  
  function Sc_g_footnote_last_html( $footnote_num_color='')
  {
    global $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Sc_g_footnote_ary_dim, $Sc_g_footnote_ary, $Sc_g_footnote_style;
    
    //print_r( $Sc_g_footnote_ary[text_hint][$Sc_g_footnote_ary_dim - 1]);
    
    //%!return '<sup title="">'.(To_f_anchor_Jump_html( $Sc_g_footnote_ary_dim, 'Lit-'.$Sc_g_footnote_ary_dim, $footnote_num_color, 'Pos-Lit-'.$Sc_g_footnote_ary_dim)).'</sup>';
    //return '<sup title="'.($Sc_g_footnote_ary[text_hint][$Sc_g_footnote_ary_dim - 1]).'">'.(To_f_anchor_Jump_html( $Sc_g_footnote_ary_dim, 'Lit-'.$Sc_g_footnote_ary_dim, $footnote_num_color, 'Pos-Lit-'.$Sc_g_footnote_ary_dim)).'</sup>';
    return '<span title="'.($Sc_g_footnote_ary[text_hint][$Sc_g_footnote_ary_dim - 1]).'" style="'.($Sc_g_footnote_style).'">'.(To_f_anchor_Jump_html( $Sc_g_footnote_ary_dim, 'Lit-'.$Sc_g_footnote_ary_dim, $footnote_num_color, $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, 'Pos-Lit-'.$Sc_g_footnote_ary_dim, false)).'</span>';
  }
  
  
  function Sc_g_footnote_last( $footnote_num_color='')
  {
    echo Sc_g_footnote_last_html( $footnote_num_color);
  }
  
  
  function Sc_f_footnote_add_html( $footnote_str='', $footnote_num_color='', $footnote_lit_color='505050')
  {
    global $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Sc_g_footnote_ary_dim, $Sc_g_footnote_ary;
    
    /*$footnote_str = To_f_replace_str_ary( $footnote_str, $Sc_g_Text_replace_ary);

    // #: How to handle regular expressions is described here: "http://www.regular-expressions.info/tutorial.html", "http://www.regular-expressions.info/email.html", "http://de1.php.net/manual/de/regexp.reference.meta.php".
    $footnote_str = preg_replace_callback( '/[0-9]-[0-9]/', create_function( '$match', 'return $match[0] = substr_replace( $match[0], "&mdash;", 1, 1);'), $footnote_str);
    $footnote_str = preg_replace_callback( '/\\\\cite\{[a-zA-Z0-9:-]+\}/', create_function( '$match', '$match[0] = ltrim( $match[0], "\\cite\{"); $match[0] = rtrim( $match[0], "\}"); return Sc_f_litera_cite_html( $match[0]);'), $footnote_str);*/
    //print_r( $footnote_str);
    
    //print_r( $Sc_g_Text_replace_ary);
    //print_r( $Sc_g_Text_replace_preg_ary);
    $footnote_str = To_f_Text_replace_html( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $footnote_str);
    
    $Sc_g_footnote_ary[text][] = $footnote_str;
    $Sc_g_footnote_ary[text_hint][] = strip_tags( To_f_Text_replace_html( array( array( '<br>', '&#13;')), null, $footnote_str));     // #: Convert linebreaks to Unicode and remove all other html tags.
    $Sc_g_footnote_ary[text_color][] = $footnote_lit_color;
    $Sc_g_footnote_ary_dim += 1;
    
    return Sc_g_footnote_last_html( $footnote_num_color);
  }
  
  
  function Sc_f_footnote_add( $footnote_str='', $footnote_num_color='', $footnote_lit_color='505050')
  {
    echo Sc_f_footnote_add_html( $footnote_str, $footnote_num_color, $footnote_lit_color);
  }
  
  
  function Sc_f_footnote_add_ary( $footnote_ary=array( array( text, num_color, lit_color)))
  
  // #: Writes all footnotes of the array in a row, separated by comma.
  
  {
    global $Sc_g_footnote_style;
    
    foreach ($footnote_ary as $key => $value)
    {
      //%!Sc_f_footnote_add( $value[text], ((array_key_exists( num_color, $value)) ? $value[num_color] : '000000'), ((array_key_exists( lit_color, $value)) ? $value[lit_color] : '505050'));
      Sc_f_footnote_add( $value[text], ((array_key_exists( num_color, $value)) ? $value[num_color] : ''), ((array_key_exists( lit_color, $value)) ? $value[lit_color] : '505050'));
      
      if ($key + 1 < count( $footnote_ary))
        //echo '<sup>,</sup>';
        echo '<span style="'.($Sc_g_footnote_style).'">,</span>';
    }
    
  }
  
  
  function Sc_g_footnote_make( $show_line_is=true)
  
  // #: Hier eventuell nichts einfügen, wenn keine Fußnoten vorhhanden.
  // #: "To_f_headline_add" eventuell hierher, anstatt im HTML.
  
  {
    global $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Sc_g_footnote_ary_dim, $Sc_g_footnote_ary;
    //%!var $i;
    
    if ($show_line_is)
    {
      echo '<table border="1"> <colgroup> <col width="250"> </colgroup> <tr> <td>'."\n";
      echo '  </td> </tr> </table>'."\n";
    }
    //echo '<a name="Fussnoten"></a>'."\n";
    echo '<table border="0">'."\n";
    echo '  <colgroup>'."\n";
    echo '    <col width="20">'."\n";
    echo '    <col width="10">'."\n";
    echo '    <col width="670">'."\n";
    echo '  </colgroup>'."\n";
    
    for ($i = 0; $i < $Sc_g_footnote_ary_dim; $i++) {
      echo '<tr>'."\n";
      echo '  <td valign="top"> <small style="color: #'.($Sc_g_footnote_ary[text_color][$i]).'">'."\n";
      echo '    <a name="Lit-'.($i+1).'"></a>'."\n";
      echo '    '.($i+1).'.</small> </td>'."\n";
      echo '  <td valign="top"> <small>'."\n";
      //echo '    <a href="#Pos-Lit-'.($i+1).'">'."\n";
      //echo '    <a href="javascript:To_f_anchor_JumpToBy_hash( \'#Pos-Lit-'.($i+1).'\')">'."\n";
      //echo '      &uarr;</a> </small> </td>'."\n";
      echo '    '.(To_f_anchor_Jump_html( '&uarr;', 'Pos-Lit-'.($i+1), '', $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '', false)).' </small> </td>'."\n";
      //%!echo '  <td valign="top" style="color: #'.($Sc_g_footnote_ary[text_color][$i]).'"> <small>'."\n";
      echo '  <td class="tools-class-text" valign="top" style="color: #'.($Sc_g_footnote_ary[text_color][$i]).'"> <small>'."\n";
      echo      $Sc_g_footnote_ary[text][$i].'</small> </td> </tr>'."\n";
    }
    
    echo '</table>'."\n";
  }
  
  
  
  $Sc_g_litera_month_text_ary = array( 1 => 'Jan.', 2 => 'Feb.', 3 => 'M&auml;r.', 4 => 'Apr.', 5 => 'Mai', 6 => 'Jun.', 7 => 'Jul.', 8 => 'Aug.', 9 => 'Sep.', 10 => 'Okt.', 11 => 'Nov.', 12 => 'Dez.');
  //var_dump( $Sc_g_litera_month_text_ary);

  $Sc_g_litera_sentence_char_ary = array( '.', '!', '?');

  //$Sc_g_litera_encoding = 'MacRoman';
  //$Sc_g_litera_encoding = 'UTF-8';
  
  const typ = 'typ';

  $Sc_g_litera_ary_dim = 0;
  $Sc_g_litera_ary = array( array( typ/*, label_text*/));

  //%!$Sc_g_litera_url = '';

  
  
  function Sc_f_litera_bibtex( $bibtex_file_name)
  
  // #: Reads a special structured BibTeX file into a literature array.
  
  {
    global $Sc_g_LaTeX_replace_ary, $Sc_g_litera_ary_dim, $Sc_g_litera_ary;
    
    // #: Load file into a line orientet array of strings without lineendings and ignore empty lines.
    $bibtex_file = file( $bibtex_file_name, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    $entry_open_is = false;
    
    foreach( $bibtex_file as $line)
    {
      // #: Remove leading and trailing spaces.
      $line = trim( $line);
      
      // #?: Line is not empty?
      if (0 < strlen( $line))
        // #?: Not in reading an entry?
        if (!$entry_open_is)
        {
          // #?: Line starts with '@' as entry begin?
          if ($line[0] == '@')
          {
            // #: Remove '@'.
            //%!$work_line = ltrim( $line, '@');

            $parts = explode( '{', $line);
            
            // #?: are there two parts?
            if (count( $parts) == 2)
            {
              $entry_label_text = rtrim( $parts[1], ',');

              $Sc_g_litera_ary_dim++;
              $Sc_g_litera_ary[$entry_label_text][typ] = ltrim( $parts[0], '@');
              //$Sc_g_litera_ary[$Sc_g_litera_ary_dim - 1][label_text] = rtrim( $parts[1], ',');
              
              //echo $Sc_g_litera_ary[$entry_label_text][typ].' -> '.$entry_label_text.'<br>'."\n";
            }
            else     // #err: .
              return;

            $entry_open_is = true;
          }
        }
        else
        {     // #: Reading an entry.
          // #?: Line starts with '}' as entry end?
          if ($line[0] == '}')
          {
            // #: Perform work before closing the entry.
            //if (!array_key_exists( 'shorttitle', $Sc_g_litera_ary[$entry_label_text]))
            //  $Sc_g_litera_ary[$entry_label_text]['shorttitle'] = $Sc_g_litera_ary[$entry_label_text]['title'];
            
            $entry_open_is = false;
          }
          else
          {     // #: Reading an item.
            $parts = explode( '=', $line, 2);     // #: "limit = 2", because '=' chars in the value (part two) are no problem than.
            //echo 'Anzahl der Parts der Line: '.count( $parts).', $parts[0]="'.$parts[0].'", $parts[1]="'.$parts[1].'"<br>'."\n";
            
            // #?: are there two parts?
            if (count( $parts) == 2)
            {
              //$Sc_g_litera_ary[$entry_label_text][trim( $parts[0])] = rtrim( ltrim( trim( $parts[1]), '{'), '},');
              $item_name = trim( $parts[0]);
              $item_value = rtrim( rtrim( ltrim( trim( $parts[1]), '{'), ','), '}');
              
              switch ($item_name)
              {
                case 'author':
                case 'collaboration':
                case 'title':
                case 'subtitle':
                case 'titleaddon':
                case 'shorttitle':
                case 'journal':
                case 'journaltitle':
                case 'journalsubtitle':
                case 'volume':
                case 'number':
                case 'issue':
                case 'issuetitle':
                case 'issuesubtitle':
                case 'chapter':
                case 'editor':
                case 'publisher':
                case 'location':
                case 'pubstate':
                case 'version':
                case 'organization':
                case 'language':
                case 'note':
                case 'isbn':
                case 'issn':
                case 'sc_time':
                case 'sc_urltime':
                  // #: Alias substutution.
                  switch ($item_name)
                  {
                    case 'journal':
                      $item_name = 'journaltitle';
                      break;
                  }
                  //%!$Sc_g_litera_ary[$entry_label_text][$item_name] = $item_value;
                  $Sc_g_litera_ary[$entry_label_text][$item_name] = To_f_Text_replace_html( $Sc_g_LaTeX_replace_ary, null, $item_value);
                  //$Sc_g_litera_ary[$entry_label_text][$item_name] = htmlentities( $item_value, ENT_COMPAT | ENT_SUBSTITUTE | ENT_HTML401, $Sc_g_litera_encoding);
                  //$Sc_g_litera_ary[$entry_label_text][$item_name] = utf8_encode( $item_value);
                  break;
                case 'pages':
                  // #: Replace the '-' additionaly.
                  // !: Better first replace here using "$Sc_g_LaTeX_replace_ary" and than replace here the normal "-" with the long "–" char and not with the HTML version. Than replace with HTML in "Sc_g_litera_make" by using "$To_g_Text_replace_ary".
                  $Sc_g_litera_ary[$entry_label_text][$item_name] = str_replace( '-', '&mdash;', $item_value);
                  //$Sc_g_litera_ary[$entry_label_text][$item_name] = str_replace( '-', '&mdash;', htmlentities( $item_value, ENT_COMPAT | ENT_SUBSTITUTE | ENT_HTML401, $Sc_g_litera_encoding));
                  //$Sc_g_litera_ary[$entry_label_text][$item_name] = str_replace( '-', '&mdash;', utf8_encode( $item_value));
                  break;
                case 'url':
                  // #: May be use "urlencode()".
                  $Sc_g_litera_ary[$entry_label_text][$item_name] = $item_value;
                  $Sc_g_litera_ary[$entry_label_text]['internal_url_as_html'] = $item_value;
                  //$Sc_g_litera_ary[$entry_label_text]['internal_url_as_html'] = htmlentities( $item_value, ENT_COMPAT | ENT_SUBSTITUTE | ENT_HTML401, $Sc_g_litera_encoding);
                  //$Sc_g_litera_ary[$entry_label_text]['internal_url_as_html'] = utf8_encode( $item_value);
                  //$Sc_g_litera_ary[$entry_label_text]['internal_url_as_html'] = htmlentities( urlencode( $item_value), ENT_COMPAT | ENT_HTML401, $Sc_g_litera_encoding);     // rawurldecode
                  break;
                case 'doi':
                case 'sc_websitenote_html':
                default:
                  $Sc_g_litera_ary[$entry_label_text][$item_name] = $item_value;
              }
              
              //echo (trim( $parts[0])).' = '.$Sc_g_litera_ary[$entry_label_text][trim( $parts[0])].'<br>'."\n";
            }
            else     // #err: .
              echo '----------- PHP error: Line "'.$line.'" has no "=" char in literature label "'.$label_text.'"!';
          }
          //echo $line.'<br>'."\n";
        }
    }

  }

  
  function Sc_f_litera_cite_html( $label_text, $optional = 'standard')
  // $optional: 'standard', 'title', 'fullName'
  {
    global $Sc_g_litera_ary_dim, $Sc_g_litera_ary, $Glo_g_Site_ary, $Glo_g_Site_activ_GenInfo_idx;
    
    if ($optional == null)
      $optional = 'standard';  // #: Default
    
    if (array_key_exists( $label_text, $Sc_g_litera_ary))
    {
      if (array_key_exists( 'author', $Sc_g_litera_ary[$label_text]))
      {
        if (array_key_exists( 'shorttitle', $Sc_g_litera_ary[$label_text]) || array_key_exists( 'title', $Sc_g_litera_ary[$label_text]))
        {
          $ret_html = '';
          //%!$ret_html .= (trim( $author_name_ary[0])).', <a target="_blank" href="'.$Sc_g_litera_url.'#'.$label_text.'">';
          // #?: Include author?
          if (in_array($optional, array('standard', 'fullName'))) {
            $author_ary = explode( ' and ', $Sc_g_litera_ary[$label_text]['author']);
            $author_name_ary = explode( ',', $author_ary[0]);
            switch ($optional) {
              case 'standard':
                $ret_html .= (trim( $author_name_ary[0]));
                break;
              case 'fullName':
                $ret_html .= (trim( $author_name_ary[1])).' '.(trim( $author_name_ary[0]));
                break;
            }
          }
          if (in_array($optional, array('standard'))) {
            $ret_html .= ', ';
          }
          if (in_array($optional, array('standard', 'title'))) {
            $ret_html .= '<a target="_blank" href="'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][litera_url_rel]).'#'.$label_text.'">';
            switch ($Sc_g_litera_ary[$label_text][typ])
            {
              case 'article':
                $ret_html .= '&raquo;';
                break;
              case 'book':
              case 'online':
                $ret_html .= '<i>';
                break;
              //case 'online':
              //  $ret_html .= '&bdquo;';
              //  break;
            }
            $ret_html .= ((array_key_exists( 'shorttitle', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_ary[$label_text]['shorttitle'] : $Sc_g_litera_ary[$label_text]['title']);
            switch ($Sc_g_litera_ary[$label_text][typ])
            {
              case 'article':
                $ret_html .= '&laquo;';
                break;
              case 'book':
              case 'online':
                $ret_html .= '</i>';
                break;
              //case 'online':
              //  $ret_html .= '&ldquo;';
              //  break;
            }
            $ret_html .= '</a>';
          }
          
          return $ret_html;

        }
        else     // #err: .
          echo '----------- PHP error: Items "shorttitle" and "title" missing in literature label "'.$label_text.'"!';
      }
      else     // #err: .
        echo '----------- PHP error: Item "author" missing in literature label "'.$label_text.'"!';
    }
    else     // #err: .
      echo '----------- PHP error: Literature label "'.$label_text.'" missing in BibTeX file!';
  }

  
  function Sc_g_litera_make( $label_text_ary, $offset='          ')
  
  // #: Reads a special structured BibTeX file into a literature array.
  
  {
    global $Sc_g_litera_month_text_ary, $Sc_g_litera_sentence_char_ary, $Sc_g_litera_ary_dim, $Sc_g_litera_ary;
    
    $autor_last = '';
    
    echo '<table border="0">'."\n";
    echo $offset.'  <colgroup>'."\n";
    echo $offset.'    <col width="21px">'."\n";
    echo $offset.'    <col width="15px">'."\n";
    echo $offset.'    <col width="664px">'."\n";
    echo $offset.'  </colgroup>'."\n";
    echo $offset.'  '."\n";
    echo $offset.'  '."\n";

    foreach( $label_text_ary as $key => $label_text)
    {
      if (array_key_exists( $label_text, $Sc_g_litera_ary))
      {
        if (array_key_exists( 'author', $Sc_g_litera_ary[$label_text]))
        {
          // #?: The author is not written?
          if ($Sc_g_litera_ary[$label_text]['author'] != $autor_last)
          {
            if (0 < $key)
            {
              echo $offset.'  '."\n";
              echo $offset.'  '."\n";
              echo $offset.'  <tr><td height="8"></td></tr>'."\n";
              echo $offset.'  '."\n";
              echo $offset.'  '."\n";
            }

            $author_char_last = ' ';
            $author_ary = explode( ' and ', $Sc_g_litera_ary[$label_text]['author']);

            $author_ary[0] = trim( $author_ary[0]);
            echo $offset.'  <tr>'."\n";
            echo $offset.'    <td colspan="3" valign="top" style="color: #505050"> <small>'."\n";
            //echo 'Autorenzahl: '.(intval( count( $author_ary))).' ';
            echo $offset.'      <span style="color: #000000">'.$author_ary[0].'</span>';
            $author_char_last = $author_ary[0][count( $author_ary) - 1];
            
            $author_idx = 1;
            
            while ($author_idx < count( $author_ary))
            {
              $author_name_ary = explode( ',', $author_ary[$author_idx]);
              $author_name_ary[0] = trim( $author_name_ary[0]);
              $author_name_ary[1] = trim( $author_name_ary[1]);

              echo (($author_idx < count( $author_ary) - 1) ? ', ' : ' und ').$author_name_ary[1].' '.$author_name_ary[0];
              $author_char_last = $author_name_ary[0][strlen( $author_name_ary[0]) - 1];

              $author_idx++;
            }
            
            echo (($author_char_last != '.') ? '.' : '').'</small> </td> </tr>'."\n";
            
            echo $offset.'  <tr><td height="2"></td></tr>'."\n";
            echo $offset.'  '."\n";

            $autor_last = $Sc_g_litera_ary[$label_text]['author'];
          }

          if (array_key_exists( 'title', $Sc_g_litera_ary[$label_text]))
          {
            echo $offset.'  <tr>'."\n";
            //echo $offset.'    <td valign="top"> </td> <td colspan="2" valign="top" style="color: #505050"> <small>'."\n";
            echo $offset.'    <td valign="top"> </td> <td colspan="2" valign="top" style="color: #000000"> <small>'."\n";
            echo $offset.'      <a name="'.$label_text.'"></a>'."\n";

            $title_end_char = ((!in_array( $Sc_g_litera_ary[$label_text]['title'][strlen( $Sc_g_litera_ary[$label_text]['title']) - 1], $Sc_g_litera_sentence_char_ary)) ? '.' : '');
            //echo $offset.'      Titellaenge: "'.(strlen( $Sc_g_litera_ary[$label_text]['title'])).'". Das letzte Zeichen des Titels: "'.$Sc_g_litera_ary[$label_text]['title'][count( $Sc_g_litera_ary[$label_text]['title']) - 1].'"'."\n";
            if (array_key_exists( 'subtitle', $Sc_g_litera_ary[$label_text]))
              $subtitle_end_char = ((!in_array( $Sc_g_litera_ary[$label_text]['subtitle'][strlen( $Sc_g_litera_ary[$label_text]['subtitle']) - 1], $Sc_g_litera_sentence_char_ary)) ? '.' : '');
            if (array_key_exists( 'titleaddon', $Sc_g_litera_ary[$label_text]))
              $titleaddon_end_char = ((!in_array( $Sc_g_litera_ary[$label_text]['titleaddon'][strlen( $Sc_g_litera_ary[$label_text]['titleaddon']) - 1], $Sc_g_litera_sentence_char_ary)) ? '.' : '');

            $bib_data = '';
            
            switch ($Sc_g_litera_ary[$label_text][typ])
            {
                
              case 'article':
                if (array_key_exists( 'journaltitle', $Sc_g_litera_ary[$label_text]))
                {
                  if (array_key_exists( 'year', $Sc_g_litera_ary[$label_text]))
                  {
                    //if (array_key_exists( 'pages', $Sc_g_litera_ary[$label_text]))
                    //{
                      //echo $offset.'      &raquo;'.$Sc_g_litera_ary[$label_text]['title'].'&laquo;.'.((array_key_exists( 'subtitle', $Sc_g_litera_ary[$label_text])) ? ' '.$Sc_g_litera_ary[$label_text]['subtitle'].'.' : '').' In: <i>'.$Sc_g_litera_ary[$label_text]['journaltitle'].'</i> '.((array_key_exists( 'volume', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_ary[$label_text]['volume'].' ' : '').'('.((array_key_exists( 'month', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_month_text_ary[intval( $Sc_g_litera_ary[$label_text]['month'])].' ' : '').$Sc_g_litera_ary[$label_text]['year'].'), S. '.$Sc_g_litera_ary[$label_text]['pages'].'.</small> </td> </tr>'."\n";
                      echo $offset.'      &raquo;'.$Sc_g_litera_ary[$label_text]['title'].$title_end_char.((array_key_exists( 'subtitle', $Sc_g_litera_ary[$label_text])) ? ' '.$Sc_g_litera_ary[$label_text]['subtitle'].$subtitle_end_char : '').'&laquo;'.((array_key_exists( 'titleaddon', $Sc_g_litera_ary[$label_text])) ? ' '.$Sc_g_litera_ary[$label_text]['titleaddon'].$titleaddon_end_char : '')."\n";

                      //$bib_data = 'In: <i>'.$Sc_g_litera_ary[$label_text]['journaltitle'].'</i> '.((array_key_exists( 'volume', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_ary[$label_text]['volume'].' ' : '').'('.((array_key_exists( 'issue', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_ary[$label_text]['issue'].' ' : '').((array_key_exists( 'month', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_month_text_ary[intval( $Sc_g_litera_ary[$label_text]['month'])].' ' : '').$Sc_g_litera_ary[$label_text]['year'].'), S. '.$Sc_g_litera_ary[$label_text]['pages'].'.';
                      //$bib_data = 'In: <i>'.$Sc_g_litera_ary[$label_text]['journaltitle'].((array_key_exists( 'journalsubtitle', $Sc_g_litera_ary[$label_text])) ? '. '.$Sc_g_litera_ary[$label_text]['journalsubtitle'] : '').'</i> '.((array_key_exists( 'volume', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_ary[$label_text]['volume'] : '').((array_key_exists( 'number', $Sc_g_litera_ary[$label_text])) ? ((array_key_exists( 'volume', $Sc_g_litera_ary[$label_text])) ? '.' : '').$Sc_g_litera_ary[$label_text]['number'].' ' : ' ').'('.((array_key_exists( 'issue', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_ary[$label_text]['issue'].' ' : '').((array_key_exists( 'month', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_month_text_ary[intval( $Sc_g_litera_ary[$label_text]['month'])].' ' : '').$Sc_g_litera_ary[$label_text]['year'].')'.((array_key_exists( 'issuetitle', $Sc_g_litera_ary[$label_text])) ? ': '.$Sc_g_litera_ary[$label_text]['issuetitle'] : '').((array_key_exists( 'pages', $Sc_g_litera_ary[$label_text])) ? ', S. '.$Sc_g_litera_ary[$label_text]['pages'] : '').'.'.((array_key_exists( 'issn', $Sc_g_litera_ary[$label_text])) ? ' ISSN: '.$Sc_g_litera_ary[$label_text]['issn'].'.' : '');
                      $bib_data = 'In: <i>'.$Sc_g_litera_ary[$label_text]['journaltitle'].((array_key_exists( 'journalsubtitle', $Sc_g_litera_ary[$label_text])) ? '. '.$Sc_g_litera_ary[$label_text]['journalsubtitle'] : '').'</i> '.((array_key_exists( 'volume', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_ary[$label_text]['volume'] : '').((array_key_exists( 'number', $Sc_g_litera_ary[$label_text])) ? ((array_key_exists( 'volume', $Sc_g_litera_ary[$label_text])) ? '.' : '').$Sc_g_litera_ary[$label_text]['number'].' ' : ' ').'('.((array_key_exists( 'issue', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_ary[$label_text]['issue'].' ' : '').((array_key_exists( 'day', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_ary[$label_text]['day'].'. ' : '').((array_key_exists( 'month', $Sc_g_litera_ary[$label_text])) ? $Sc_g_litera_month_text_ary[intval( $Sc_g_litera_ary[$label_text]['month'])].' ' : '').$Sc_g_litera_ary[$label_text]['year'].')'.((array_key_exists( 'issuetitle', $Sc_g_litera_ary[$label_text])) ? ': <i>'.($Sc_g_litera_ary[$label_text]['issuetitle']).'</i>' : '').((array_key_exists( 'editor', $Sc_g_litera_ary[$label_text])) ? ', Hrsg. von '.($Sc_g_litera_ary[$label_text]['editor']) : '').((array_key_exists( 'pages', $Sc_g_litera_ary[$label_text])) ? ', S. '.$Sc_g_litera_ary[$label_text]['pages'] : '').'.'.((array_key_exists( 'issn', $Sc_g_litera_ary[$label_text])) ? ' ISSN: '.$Sc_g_litera_ary[$label_text]['issn'].'.' : '');
                    //}
                    //else     // #err: .
                    //  echo '----------- PHP error: Item "pages" missing in literature label "'.$label_text.'"!';
                  }
                  else     // #err: .
                    echo '----------- PHP error: Item "year" missing in literature label "'.$label_text.'"!';
                }
                else     // #err: .
                  echo '----------- PHP error: Item "journaltitle" missing in literature label "'.$label_text.'"!';
                break;
                
              case 'book':
                if (array_key_exists( 'location', $Sc_g_litera_ary[$label_text]))
                {
                  if (array_key_exists( 'publisher', $Sc_g_litera_ary[$label_text]))
                  {
                    if (array_key_exists( 'year', $Sc_g_litera_ary[$label_text]))
                    {
                      $location_ary = explode( ' and ', $Sc_g_litera_ary[$label_text]['location']);
                      $location_html = '';

                      foreach( $location_ary as $location_key => $location_text)
                      {
                        $location_html .= $location_text;
                        
                        if ($location_key < count( $location_ary) - 1)
                          if ($location_key < count( $location_ary) - 2)
                            $location_html .= ', ';
                          else
                            $location_html .= ' und ';
                      }
                      
                      //echo $offset.'      <i>'.$Sc_g_litera_ary[$label_text]['title'].'</i>.'.((array_key_exists( 'subtitle', $Sc_g_litera_ary[$label_text])) ? ' <i>'.$Sc_g_litera_ary[$label_text]['subtitle'].'</i>.' : '').((array_key_exists( 'chapter', $Sc_g_litera_ary[$label_text])) ? ' Kap. '.$Sc_g_litera_ary[$label_text]['chapter'].((array_key_exists( 'pages', $Sc_g_litera_ary[$label_text])) ? ', S. '.$Sc_g_litera_ary[$label_text]['pages'] : '').'.' : '').((array_key_exists( 'edition', $Sc_g_litera_ary[$label_text])) ? ' '.(((string)(int)($Sc_g_litera_ary[$label_text]['edition']) == $Sc_g_litera_ary[$label_text]['edition']) ? $Sc_g_litera_ary[$label_text]['edition'].'. Aufl.' : $Sc_g_litera_ary[$label_text]['edition'].'.') : '').' '.$location_html.((array_key_exists( 'publisher', $Sc_g_litera_ary[$label_text])) ? ': '.$Sc_g_litera_ary[$label_text]['publisher'] : '').', '.$Sc_g_litera_ary[$label_text]['year'].'.</small> </td> </tr>'."\n";
                      echo $offset.'      <i>'.$Sc_g_litera_ary[$label_text]['title'].$title_end_char.'</i>'.((array_key_exists( 'subtitle', $Sc_g_litera_ary[$label_text])) ? ' <i>'.$Sc_g_litera_ary[$label_text]['subtitle'].$subtitle_end_char.'</i>' : '').((array_key_exists( 'titleaddon', $Sc_g_litera_ary[$label_text])) ? ' '.$Sc_g_litera_ary[$label_text]['titleaddon'].$titleaddon_end_char : '').((array_key_exists( 'chapter', $Sc_g_litera_ary[$label_text])) ? ' Kap. '.$Sc_g_litera_ary[$label_text]['chapter'].((array_key_exists( 'pages', $Sc_g_litera_ary[$label_text])) ? ', S. '.$Sc_g_litera_ary[$label_text]['pages'] : '').'.' : '')."\n";
                      
                      //%!$bib_data = ((array_key_exists( 'edition', $Sc_g_litera_ary[$label_text])) ? ' '.(((string)(int)($Sc_g_litera_ary[$label_text]['edition']) == $Sc_g_litera_ary[$label_text]['edition']) ? $Sc_g_litera_ary[$label_text]['edition'].'. Aufl.' : $Sc_g_litera_ary[$label_text]['edition'].'.') : '').' '.$location_html.((array_key_exists( 'publisher', $Sc_g_litera_ary[$label_text])) ? ': '.$Sc_g_litera_ary[$label_text]['publisher'] : '').', '.$Sc_g_litera_ary[$label_text]['year'].'.';
                      //%!$bib_data = ((array_key_exists( 'language', $Sc_g_litera_ary[$label_text])) ? ' '.$Sc_g_litera_ary[$label_text]['language'].'.' : '').((array_key_exists( 'edition', $Sc_g_litera_ary[$label_text])) ? ' '.(((string)(int)($Sc_g_litera_ary[$label_text]['edition']) == $Sc_g_litera_ary[$label_text]['edition']) ? $Sc_g_litera_ary[$label_text]['edition'].'. Aufl.' : $Sc_g_litera_ary[$label_text]['edition'].'.') : '').' '.$location_html.((array_key_exists( 'publisher', $Sc_g_litera_ary[$label_text])) ? ': '.$Sc_g_litera_ary[$label_text]['publisher'] : '').', '.$Sc_g_litera_ary[$label_text]['year'].'.'.((array_key_exists( 'isbn', $Sc_g_litera_ary[$label_text])) ? ' ISBN: '.$Sc_g_litera_ary[$label_text]['isbn'].'.' : '');
                      $bib_data = ((array_key_exists( 'language', $Sc_g_litera_ary[$label_text])) ? ' '.$Sc_g_litera_ary[$label_text]['language'].'.' : '').((array_key_exists( 'edition', $Sc_g_litera_ary[$label_text])) ? ' '.(((string)(int)($Sc_g_litera_ary[$label_text]['edition']) == $Sc_g_litera_ary[$label_text]['edition']) ? $Sc_g_litera_ary[$label_text]['edition'].'. Aufl.' : $Sc_g_litera_ary[$label_text]['edition'].'.') : '').((array_key_exists( 'note', $Sc_g_litera_ary[$label_text])) ? ' '.$Sc_g_litera_ary[$label_text]['note'].'.' : '').(' '.$location_html).((array_key_exists( 'publisher', $Sc_g_litera_ary[$label_text])) ? ': '.$Sc_g_litera_ary[$label_text]['publisher'] : '').', '.$Sc_g_litera_ary[$label_text]['year'].'.'.((array_key_exists( 'isbn', $Sc_g_litera_ary[$label_text])) ? ' ISBN: '.$Sc_g_litera_ary[$label_text]['isbn'].'.' : '');
                    }
                    else     // #err: .
                      echo '----------- PHP error: Item "year" missing in literature label "'.$label_text.'"!';
                  }
                  else     // #err: .
                    echo '----------- PHP error: Item "publisher" missing in literature label "'.$label_text.'"!';
                }
                else     // #err: .
                  echo '----------- PHP error: Item "location" missing in literature label "'.$label_text.'"!';
                break;
                
              case 'online':
                if (array_key_exists( 'organization', $Sc_g_litera_ary[$label_text]))
                {
                  if (array_key_exists( 'year', $Sc_g_litera_ary[$label_text]) || array_key_exists( 'date', $Sc_g_litera_ary[$label_text]))
                  {
                    if (array_key_exists( 'date', $Sc_g_litera_ary[$label_text]))
                      $date_ary = explode( '-', $Sc_g_litera_ary[$label_text]['date']);

                    //echo $offset.'      <i>'.$Sc_g_litera_ary[$label_text]['title'].'</i>.'.((array_key_exists( 'subtitle', $Sc_g_litera_ary[$label_text])) ? ' <i>'.$Sc_g_litera_ary[$label_text]['subtitle'].'</i>.' : '').((array_key_exists( 'version', $Sc_g_litera_ary[$label_text])) ? ' Version: '.$Sc_g_litera_ary[$label_text]['version'].'.' : '').((array_key_exists( 'pubstate', $Sc_g_litera_ary[$label_text])) ? ' Bearbeitungsstand: '.$Sc_g_litera_ary[$label_text]['pubstate'].'.' : '').((array_key_exists( 'language', $Sc_g_litera_ary[$label_text])) ? ' '.$Sc_g_litera_ary[$label_text]['language'].'.' : '').' '.$Sc_g_litera_ary[$label_text]['organization'].'. '.((array_key_exists( 'date', $Sc_g_litera_ary[$label_text])) ? $date_ary[2].'.&nbsp;'.$Sc_g_litera_month_text_ary[intval( $date_ary[1])].'&nbsp;'.$date_ary[0] : $Sc_g_litera_ary[$label_text]['year']).'.</small> </td> </tr>'."\n";
                    echo $offset.'      <i>'.$Sc_g_litera_ary[$label_text]['title'].$title_end_char.'</i>'.((array_key_exists( 'subtitle', $Sc_g_litera_ary[$label_text])) ? ' <i>'.$Sc_g_litera_ary[$label_text]['subtitle'].$subtitle_end_char.'</i>' : '').((array_key_exists( 'titleaddon', $Sc_g_litera_ary[$label_text])) ? ' '.$Sc_g_litera_ary[$label_text]['titleaddon'].$titleaddon_end_char : '')."\n";
                    
                    $bib_data = ((array_key_exists( 'version', $Sc_g_litera_ary[$label_text])) ? ' Version: '.$Sc_g_litera_ary[$label_text]['version'].'.' : '').((array_key_exists( 'pubstate', $Sc_g_litera_ary[$label_text])) ? ' Bearbeitungsstand: '.$Sc_g_litera_ary[$label_text]['pubstate'].'.' : '').((array_key_exists( 'language', $Sc_g_litera_ary[$label_text])) ? ' '.$Sc_g_litera_ary[$label_text]['language'].'.' : '').' '.$Sc_g_litera_ary[$label_text]['organization'].'. '.((array_key_exists( 'date', $Sc_g_litera_ary[$label_text])) ? (intval( $date_ary[2])).'.&nbsp;'.$Sc_g_litera_month_text_ary[intval( $date_ary[1])].'&nbsp;'.$date_ary[0].((array_key_exists( 'sc_time', $Sc_g_litera_ary[$label_text])) ? ', '.$Sc_g_litera_ary[$label_text]['sc_time'] : '') : $Sc_g_litera_ary[$label_text]['year']).'.';
                  }
                  else     // #err: .
                    echo '----------- PHP error: Items "year" and "date" missing in literature label "'.$label_text.'"!';
                }
                else     // #err: .
                  echo '----------- PHP error: Item "organization" missing in literature label "'.$label_text.'"!';
                break;
                
              default:
                echo '----------- PHP error: Unknown "typ = '.$Sc_g_litera_ary[$label_text][typ].'" of literature label "'.$label_text.'"!';

            }
            
            echo '</small> </td> </tr>'."\n";

            echo $offset.'  <tr>'."\n";
            //echo $offset.'    <td valign="top"> </td> <td valign="top"> </td> <td valign="top" style="color: #505050"> <small>'."\n";
            echo $offset.'    <td valign="top"> </td> <td valign="top"> </td> <td class="tools-class-text" valign="top" style="color: #505050"> <small>'."\n";

            // #: "$bib_data"
            echo $offset.'      '.$bib_data."\n";

            // #: 'note'
            if ('book' != $Sc_g_litera_ary[$label_text][typ])
              if (array_key_exists( 'note', $Sc_g_litera_ary[$label_text]))
                echo $offset.'      '.$Sc_g_litera_ary[$label_text]['note'].'.'."\n";

            // #: 'doi'
            if (array_key_exists( 'doi', $Sc_g_litera_ary[$label_text]))
            {
              //echo $offset.'      DOI: <a target="_blank" href="http://dx.doi.org/'.$Sc_g_litera_ary[$label_text]['doi'].'">'.$Sc_g_litera_ary[$label_text]['doi'].'</a>.'."\n";
              //echo $offset.'      DOI: <a target="_blank" href="http://dx.doi.org/'.$Sc_g_litera_ary[$label_text]['doi'].'"><span class="tools-class-url">'.$Sc_g_litera_ary[$label_text]['doi'].'</span></a>.'."\n";
              echo $offset.'      DOI: <a class="tools-class-url" target="_blank" href="http://dx.doi.org/'.$Sc_g_litera_ary[$label_text]['doi'].'">'.$Sc_g_litera_ary[$label_text]['doi'].'</a>.'."\n";
            }

            // #: 'url'
            if (array_key_exists( 'url', $Sc_g_litera_ary[$label_text]))
            {
              if (array_key_exists( 'urldate', $Sc_g_litera_ary[$label_text]))
              {
                $url_date_ary = explode( '-', $Sc_g_litera_ary[$label_text]['urldate']);
              
                //echo $offset.'      URL: <a target="_blank" href="'.$Sc_g_litera_ary[$label_text]['url'].'">'.$Sc_g_litera_ary[$label_text]['url'].'</a> (besucht am '.(intval( $url_date_ary[2])).'.&nbsp;'.$Sc_g_litera_month_text_ary[intval( $url_date_ary[1])].'&nbsp;'.$url_date_ary[0].((array_key_exists( 'sc_urltime', $Sc_g_litera_ary[$label_text])) ? ', '.$Sc_g_litera_ary[$label_text]['sc_urltime'] : '').').'."\n";
                //echo $offset.'      URL: <a target="_blank" href="'.$Sc_g_litera_ary[$label_text]['url'].'"><span class="tools-class-url">'.$Sc_g_litera_ary[$label_text]['url'].'</span></a> (besucht am '.(intval( $url_date_ary[2])).'.&nbsp;'.$Sc_g_litera_month_text_ary[intval( $url_date_ary[1])].'&nbsp;'.$url_date_ary[0].((array_key_exists( 'sc_urltime', $Sc_g_litera_ary[$label_text])) ? ', '.$Sc_g_litera_ary[$label_text]['sc_urltime'] : '').').'."\n";
                echo $offset.'      URL: <a class="tools-class-url" target="_blank" href="'.$Sc_g_litera_ary[$label_text]['url'].'">'.$Sc_g_litera_ary[$label_text]['url'].'</a> (besucht am '.(intval( $url_date_ary[2])).'.&nbsp;'.$Sc_g_litera_month_text_ary[intval( $url_date_ary[1])].'&nbsp;'.$url_date_ary[0].((array_key_exists( 'sc_urltime', $Sc_g_litera_ary[$label_text])) ? ', '.$Sc_g_litera_ary[$label_text]['sc_urltime'] : '').').'."\n";
              }
              else     // #err: .
                echo '----------- PHP error: Item "urldate" missing in literature label "'.$label_text.'"!';
            }

            // #: 'sc_websitenote_html'
            if (array_key_exists( 'sc_websitenote_html', $Sc_g_litera_ary[$label_text]))
              echo $offset.'      '.$Sc_g_litera_ary[$label_text]['sc_websitenote_html']."\n";

            echo $offset.'    </small> </td> </tr>'."\n";

            //if ($key < count( $label_text_ary) - 1)
            //  echo $offset.'  <tr><td height="8"></td></tr>'."\n";
          }
          else     // #err: .
            echo '----------- PHP error: Item "title" missing in literature label "'.$label_text.'"!';
        }
        else     // #err: .
          echo '----------- PHP error: Item "author" missing in literature label "'.$label_text.'"!';
      }
      else     // #err: .
        echo '----------- PHP error: Literature label "'.$label_text.'" missing in BibTeX file!';
      
      //array_search( $entry, $Sc_g_litera_ary);
    }
    
    echo $offset.''."\n";
    echo $offset.''."\n";
    echo $offset.'</table>'."\n";
  }

  
  
?>
