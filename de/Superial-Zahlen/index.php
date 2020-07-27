<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Home'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      '); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'text', array( text => array(
                    'Mit den Superial-Zahlen die fraktale Struktur des Unendlichen entdecken …'."\n",
                      'Vom Endlichen bis ins Aktualunendliche mit ganzen Zahlen zählen, ist eine faszinierende Sache.'."\n".
                    'Welche Primfaktorenzerlegung haben diese aktualunendlichen ganzen Zahlen?'."\n".
                    'Wie sind die Primzahlen im Aktualunendlichen verteilt?'."\n".
                    'Wie sind Ableitungen und Integrale im Endlichen definiert, wenn wir die Superial-Zahlen dafür benutzen?'."\n",
                      'Viele spannende Fragen, deren Antworten sich in dieser Arbeit ergeben.'."\n"))),
                      //'Verstehen, was eine negative Menge ist, gibt einen besseren Einblick in die Realität unserer Welt.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Dies ist die Startseite der kompletten Arbeit.'."\n".
                    'Bitte wählen sie den direkten Zugang zu den einzelnen Themen über das nachfolgende \\jump{OM:SupNum:Home:Inhalt}{Inhaltsverzeichnis}.'."\n".
                    'Die \\jump{OM:SupNum:Einleitung}{Einleitung} zu den Superial-Zahlen bietet einen Überblick über die grundlegende Herleitung.'."\n".
                    'Bei Nachfragen und Interesse an einer Diskussion, Kritik oder Beteiligung sind Sie herzlich eingeladen \\jump{OM:FrQFT:Impressum:Inhaberdaten}{Kontakt} aufzunehmen.'."\n".
                    'Auch eine Unterstützung durch \\jump{OM:FrQFT:Impressum:Spenden}{Spenden} ist herzlich willkommen.'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                        // #: Text so auch auf der Seite "OM:NPYo:Home". Durch eine Konstante ersetzen, in der der Hinweis auf den Haftungsausschluss durch eine Wild-Card der aktuellen Seite ersetzt ist. Z.B. "!:Haftungsausschluss".
                        '\\italic{Bitte beachte, dass diese Seiten im Aufbau befindlich sind. Es sind weder alle entwickelten Ideen eingepflegt, noch sind alle Texte vollständig.'."\n".
                        'Sollte letzteres der Fall sein, so sind \\color{*Bearb}{violette} Markierungen angebracht.'."\n".
                        'Stellen, die der aktuellen Weiterentwicklung bedürfen – gerne auch von extern –, sind \\color{*Entwick}{grün} markiert.}'."\n"),
                        addtext => '')),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Home:Inhalt'),
                      //array(  jump_name => 'OM:SpaLeb:Vorwort'),
                      array(  jump_name => 'OM:SupNum:Einleitung'),
                    )),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:Angebote-Veranstaltungen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Inhalt:  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:SupNum:Home:Inhalt',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'normal',
                    '\\\\'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      array( title => '\\color{*ContentItemDisabled}{Video Tour (geplant)}', startsign => '', //jumpname => 'XXX',
                                description => 'die YouTube-Vorträge'),
                      array( title => '\\color{*ContentItemDisabled}{Vorwort (geplant)}', startsign => ''/*'\\name{OM:FrQFT:Vorwort}'*/, //jumpname => 'OM:FrQFT:Vorwort', startsign => '',
                                description => 'was mich bewegt – was ich bewegen möchte'/*$Glo_g_Site_ary['OM:FrQFT:Vorwort'][text_undertitel_h2])*/),
                    ))),
                      
                  array( 'normal',
                    '<h3 style="margin-top: 25px;">\\color{*ContentPart}{Superial-Zahlen <small>– Zählen und Primzahlen im Unendlichen</small>}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      array( title => '\\name{OM:SupNum:Einleitung}', jumpname => 'OM:SupNum:Einleitung', startsign => '',
                                description => 'Worum geht es?'/*$Glo_g_Site_ary['OM:FrQFT:Einleitung'][text_undertitel_h2]*/),
                      array( title => '\\color{*ContentItemDisabled}{Formale Entwicklung (geplant)}', startsign => ''/*'\\name{OM:FrQFT:Vorwort}'*/, //jumpname => 'OM:FrQFT:Vorwort', startsign => '',
                                description => '(in Vorbereitung)'/*$Glo_g_Site_ary['OM:FrQFT:Vorwort'][text_undertitel_h2])*/),
                      array( title => '\\color{*ContentItemDisabled}{Primzahlprodukt-Vermutung (geplant)}', startsign => ''/*'\\name{OM:FrQFT:Vorwort}'*/, //jumpname => 'OM:FrQFT:Vorwort', startsign => '',
                                description => '(in Vorbereitung)'/*$Glo_g_Site_ary['OM:FrQFT:Vorwort'][text_undertitel_h2])*/),
                    ))),
                      
                  array( 'normal',
                    '<h3 style="margin-top: 25px;">\\color{*ContentPart}{Biordinalzahlen <small>– Zählen mit Mengen, negative Mengen</small>}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      array( title => '\\color{*ContentItemDisabled}{Integrierte Mengenlehre (geplant)}', startsign => ''/*'\\name{OM:FrQFT:Vorwort}'*/, //jumpname => 'OM:FrQFT:Vorwort', startsign => '',
                                description => '(in Vorbereitung)'/*$Glo_g_Site_ary['OM:FrQFT:Vorwort'][text_undertitel_h2])*/),
                      array( title => '\\color{*ContentItemDisabled}{Formale Entwicklung (geplant)}', startsign => ''/*'\\name{OM:FrQFT:Vorwort}'*/, //jumpname => 'OM:FrQFT:Vorwort', startsign => '',
                                description => '(in Vorbereitung)'/*$Glo_g_Site_ary['OM:FrQFT:Vorwort'][text_undertitel_h2])*/),
                    ))),
                    
                  array( 'normal',
                    '<h3 style="margin-top: 25px;">\\color{*ContentPart}{Lesestoff und Verweise \\small{– Informationen}}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Literatur'),
                    ))),
                      
                  $NPYo_g_index_KurseVortraegeWorkshops_Head,
                  $NPYo_g_index_KurseVortraegeWorkshops_ContentList,
                    
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_Head,
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_ContentList,
              )
          ); ?>
          
          
		    	<!  • Lexikon:  >
          <?php To_f_headline_add_hides_begin( 'Lexikon', 'Lexikon', 'OM:SpaLeb:Home:Lexikon', '          ', 'invis'); ?>
            <br>
          
            <table border="0"> <colgroup> <col width="22"> <col width="300"> <col width="16"> <col width="362"> </colgroup>
              <tr> <td valign="top">&rarr;</td> <td valign="top"><!a href="../de/XXX">
              XXX<!/a> <span style="color: #A0A0A0">(geplant)</span></td> <td valign="top" style="color: #A0A0A0">
                  &hellip;</td> <td valign="top" style="color: #A0A0A0">
                  XXX</td> </tr>
            </table>
          <?php To_f_headline_add_hides_end( '          ', 'invis'); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
