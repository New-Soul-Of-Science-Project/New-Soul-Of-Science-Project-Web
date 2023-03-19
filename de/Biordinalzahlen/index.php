<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:BiOrd:Home'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      '); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'text', array( text => array(
                    'Die Entsprechung von Zahlen und bestimmten Mengen, die durch einen induktiven Zählvorgang,'."\n".
                    'der diese Mengen konstruiert, erzeugt werden, ermöglicht faszinierende Einblicke in das Aktual-Unendliche.'."\n".
                    'Diese bekannten und Ordinalzahlen genannten Entsprechungen von Zahlen und Mengen erlauben uns über das Endliche'."\n".
                    'hinaus zu zählen.'."\n",
                      'Allerdings ist es bisher nicht möglich, von der Null aus oder nach dem Sprung ins Aktual-Unendliche \\term{ω} oder ins nächste Unendliche \\term{2ω},'."\n".
                    'von diesen Landungspunkten aus, den Limeszahlen, rückwärts zu zählen.'."\n".
                    'Wir beschäftigen uns im Folgenden damit, wie wir die Vorgänger der positiven Limeszahlen durch Mengen beschreiben'."\n".
                    'und durch die Erweiterung des Mengenbegriffs auf Antimengen, mit Hilfe des Antimengenuniversums und integrierten Mengenuniversums,'."\n".
                    'auch die Vorgänger der Null, also die negativen Zahlen, konstruieren können.'."\n",
                      'Dadurch erschaffen wir mit den Biordinalzahlen eine Erweiterung der Ordinalzahlen, die die Eigenschaft eines'."\n".
                    'algebraischen Rings besitzt.'."\n".
                    'Die erneute Erweiterung der Biordinalzahlen führt uns schließlich zu den \\jump{OM:SupNum:Home}{Superial-Zahlen},'."\n".
                    'die dann die Eigenschaften eines algebraischen Körpers besitzen.'."\n",
                      'Durch die Konstruktion der Superial-Zahlen aus Primzahlen und deren Verbindung zu den Biordinalzahlen'."\n".
                    'stellt sich schließlich auch die Frage, ob es eine Primfaktorenzerlegung von \\term{ω} gibt.'."\n".
                    'So entsteht meine \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung}.'."\n",
                      'Unsere ontologische Deutung der Beschreibung der negativen Biordinalzahlen gewährt uns Einblicke darein,'."\n".
                    'wie wir unseren Wahrnehmungsfokus setzen und damit eine Auswahl treffen und wie die negativen Biordinalzahlen'."\n".
                    'aus der Invertierung dieses Fokus entstehen, die demnach ein Weglassen einer Auswahl aus ihrer Ganzheit bedeutet.'."\n",
                      'Dies gewährt uns auch Aufschluss über den Zusammenhang des Bewussten, das wir im Fokus haben,'."\n".
                    'mit dem Unbewussten oder Unterbewussten, also den Rest, den wir ausblenden, nicht wahrnehmen oder gar nicht wahrnehmen können.'."\n".
                    ''))),
                      //'Verstehen, was eine negative Menge ist, gibt einen besseren Einblick in die Realität unserer Welt.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Dies ist die Startseite der kompletten Arbeit.'."\n".
                    'Bitte wählen sie den direkten Zugang zu den einzelnen Themen über das nachfolgende \\jump{OM:BiOrd:Home:Inhalt}{Inhaltsverzeichnis}.'."\n".
                    'Die \\jump{OM:BiOrd:Einleitung}{Einleitung} zu den Superial-Zahlen bietet einen Überblick über die grundlegende Herleitung.'."\n".
                    'Bei Nachfragen und Interesse an einer Diskussion, Kritik oder Beteiligung sind Sie herzlich eingeladen \\jump{OM:FrQFT:Impressum:Inhaberdaten}{Kontakt} aufzunehmen.'."\n".
                    'Auch eine Unterstützung durch \\jump{OM:FrQFT:Impressum:Spenden}{Spenden} ist herzlich willkommen.'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                        // #: Text so auch auf der Seite "OM:NPYo:Home". Durch eine Konstante ersetzen, in der der Hinweis auf den Haftungsausschluss durch eine Wild-Card der aktuellen Seite ersetzt ist. Z.B. "!:Haftungsausschluss".
                        '\\italic{Bitte beachte, dass diese Seiten im Aufbau befindlich sind. Es sind weder alle entwickelten Ideen eingepflegt, noch sind alle Texte vollständig.'."\n".
                        'Sollte letzteres der Fall sein, so sind \\color{*Bearb}{violette} Markierungen angebracht.'."\n".
                        'Stellen, die der aktuellen Weiterentwicklung bedürfen – gerne auch von extern –, sind \\color{*Entwick}{grün} markiert.}'."\n"),
                        addtext => '')),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:BiOrd:Home:Inhalt'),
                      //array(  jump_name => 'OM:SpaLeb:Vorwort'),
                      array(  jump_name => 'OM:BiOrd:Einleitung'),
                    )),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:Angebote-Veranstaltungen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Inhalt:  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:BiOrd:Home:Inhalt',
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
                    '<h3 style="margin-top: 25px;">\\color{*ContentPart}{Biordinalzahlen <small>– Vorwärtszählen und Rückwärtszählen im Unendlichen</small>}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:BiOrd:Einleitung'),
                    ))),
                    
                  array( 'normal',
                    '<h3 style="margin-top: 25px;">\\color{*ContentPart}{Lesestoff und Verweise \\small{– Informationen}}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:BiOrd:Literatur'),
                    ))),
                      
                  $NPYo_g_index_KurseVortraegeWorkshops_Head,
                  $NPYo_g_index_KurseVortraegeWorkshops_ContentList,
                    
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_Head,
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_ContentList,
              )
          ); ?>
          
          
		    	<!  • Lexikon:  >
          <?php To_f_headline_add_hides_begin( 'Lexikon', 'Lexikon', 'OM:SpaLeb:Home:Lexikon', '          ', 'hideContent'); ?>
            <br>
          
            <table border="0"> <colgroup> <col width="22"> <col width="300"> <col width="16"> <col width="362"> </colgroup>
              <tr> <td valign="top">&rarr;</td> <td valign="top"><!a href="../de/XXX">
              XXX<!/a> <span style="color: #A0A0A0">(geplant)</span></td> <td valign="top" style="color: #A0A0A0">
                  &hellip;</td> <td valign="top" style="color: #A0A0A0">
                  XXX</td> </tr>
            </table>
          <?php To_f_headline_add_hides_end( '          ', 'hideContent'); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
