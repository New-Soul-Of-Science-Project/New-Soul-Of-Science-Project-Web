<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Home'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      '); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'text', array( text => array(
                    'Es gibt einen systematischen Zusammenhang zwischen den arithmetischen Operatoren:'."\n".
                    'Die Addition, die Multiplikation und die Exponentialrechnung gehen auf gleiche Weise auseinander hervor,'."\n".
                    'vom ersten (+) über den zweiten (⋅) bis zum dritten (^).'."\n".
                    'Dadurch werden diese Operatoren zählbar.'."\n".
                    'Es stellt sich heraus, dass der Vorgänger-Operator der Addition tatsächlich das Zählen selber ist.'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                        // #: Text so auch auf der Seite "OM:NPYo:Home". Durch eine Konstante ersetzen, in der der Hinweis auf den Haftungsausschluss durch eine Wild-Card der aktuellen Seite ersetzt ist. Z.B. "!:Haftungsausschluss".
                        '\\italic{Bitte beachte, dass diese Seiten im Aufbau befindlich sind. Es sind weder alle entwickelten Ideen eingepflegt, noch sind alle Texte vollständig.'."\n".
                        'Sollte letzteres der Fall sein, so sind \\color{*Bearb}{violette} Markierungen angebracht.'."\n".
                        'Stellen, die der aktuellen Weiterentwicklung bedürfen – gerne auch von extern –, sind \\color{*Entwick}{grün} markiert.}'."\n"),
                        addtext => '')),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Home:Inhalt'),
                      // array(  jump_name => 'OM:OT:Vorwort'),
                      array(  jump_name => 'OM:OT:Einleitung'),
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
            'OM:OT:Home:Inhalt',
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
                    '<h3 style="margin-top: 25px;">\\color{*ContentPart}{Operialtheorie \\small{– Die Grundlagen der Arithmetik erhellen}}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:OT:Vorwort'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:OT:Einleitung'),
                    ))),
                      
                  array( 'normal',
                    '<h3 style="margin-top: 25px;">\\color{*ContentPart}{Lesestoff und Verweise \\small{– Informationen}}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:OT:Literatur'),
                    ))),
                      
                  $NPYo_g_index_KurseVortraegeWorkshops_Head,
                  $NPYo_g_index_KurseVortraegeWorkshops_ContentList,
                    
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_Head,
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_ContentList,
              )
          ); ?>
          
          
		    	<!  • Lexikon:  >
          <?php To_f_headline_add_hides_begin( 'Lexikon', 'Lexikon', 'OM:OT:Home:Lexikon', '          ', 'hideContent'); ?>
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
