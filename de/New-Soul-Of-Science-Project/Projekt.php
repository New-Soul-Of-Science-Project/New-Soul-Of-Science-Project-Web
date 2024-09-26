<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:nSOSp:Projekt'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:nSOSp:Home'); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Im ›New Soul Of Science Projekt‹ wird Wissen auf Basis neuer Perspektiven geschöpft und entwickelt.'."\n".
                    'Es umfasst verschiedene Themen zur Naturphilosophie und Mathematik, die nach und nach in aller Tiefe ausgearbeitet werden.'."\n",
                      'Die Ergebnisse sind zunächst auf dieser Internetseite als Work-In-Progress veröffentlicht,'."\n".
                    'befinden sich also in der Entwicklung, wo immer wieder auch unfertige Stände sichtbar sind.'."\n".
                    'Dazu habe ich mich entschieden, weil es mir bei der Anzahl an Themen und dem Umfang jedes Themas praktischerweise'."\n".
                    'unmöglich ist, in angemessener Zeit ein Thema vollständig fertig zu stellen.'."\n".
                    'Es handelt sich also quasi um ein Lebenswerk.'."\n",
                      'Zusätzlich zur Internetseite ist angedacht, das gefundene Wissen sowohl in Videos als auch in'."\n".
                    'Buchform zu veröffentlichen.'."\n".
                    'Wer Lust hat, hieran mitzuwirken, nehme gerne \jump{OM:FrQFT:Impressum:Inhaberdaten}{Kontakt} mit mir auf.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:nSOSp:Projekt:Inhalt'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

          <!  • Inhalt  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:nSOSp:Projekt:Inhalt',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'normal',
                    '\\\\'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      array( title => 'Video Tour \color{*ContentItemDisabled}{(Seite geplant)}', startsign => '', //jumpname => 'X',
                                description => 'die YouTube-Vorträge'),
                      array( title => 'Vorwort \color{*ContentItemDisabled}{(Seite geplant)}', startsign => ''/*'\name{OM:FrQFT:Vorwort}'*/, //jumpname => 'OM:FrQFT:Vorwort', startsign => '',
                                description => '(in Vorbereitung)'/*$Glo_g_Site_ary['OM:FrQFT:Vorwort'][text_undertitel_h2])*/),
                    ))),
                      
                  array( 'normal',
                    '<h3 class="tools-class-contentlist-header">Entwicklung \\\\ \small{Einführung}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      // nSOSp_f_tableOfContents_elementAry( 'OM:nSOSp:Einleitung'),
                      // #: Aufklärung 2.0 — Anregung dazu: Buch ›Virus-Wahn‹ S. 10.
                      array( title => 'Aufklärung für Fortgeschrittene \color{*ContentItemDisabled}{(Seite geplant)}', startsign => ''/*'\name{OM:FrQFT:Vorwort}'*/, //jumpname => 'OM:FrQFT:Vorwort', startsign => '',
                                description => '… durch Bewusstmachung unserer Täuschungen, die oft auch Selbsttäuschungen sind '/*$Glo_g_Site_ary['OM:FrQFT:Vorwort'][text_undertitel_h2])*/),
                      nSOSp_f_tableOfContents_elementAry( 'OM:nSOSp:Buchprojekt'),
                    ))),
                      
                  array( 'normal',
                    '<h3 class="tools-class-contentlist-header">Lesestoff und Verweise \\\\ \small{Informationen}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:nSOSp:Literatur'),
                    ))),
                      
                  $NPYo_g_index_KurseVortraegeWorkshops_Head,
                  $NPYo_g_index_KurseVortraegeWorkshops_ContentList,

                    
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_Head,
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_ContentList,
              )
          ); ?>
          
          
          <!  • Lexikon:  >
          <?php To_f_headline_add_hides_begin( 'Lexikon', 'Lexikon', 'OM:nSOSp:Projekt:Lexikon', '          ', 'hideContent'); ?>
            <br>
          
            <table border="0"> <colgroup> <col width="22"> <col width="300"> <col width="16"> <col width="362"> </colgroup>
              <tr> <td valign="top">&rarr;</td> <td valign="top"><!a href="../de/X">
              X<!/a> <span style="color: #A0A0A0">(geplant)</span></td> <td valign="top" style="color: #A0A0A0">
                  &hellip;</td> <td valign="top" style="color: #A0A0A0">
                  X</td> </tr>
            </table>
          <?php To_f_headline_add_hides_end( '          ', 'hideContent'); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
