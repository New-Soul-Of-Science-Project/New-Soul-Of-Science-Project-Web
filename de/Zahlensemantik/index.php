<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:ZS:Home'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      '); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'text', array( text => array(
                    '\color{*Bearb}{Diese Seite befindet sich im Aufbau …}'."\n",
                    /* 'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n", */
                    ''))),
                      
                  /* array( 'text', array( Shape => 'italic', text => array(
                        // #: Text so auch auf der Seite "OM:NPYo:Home". Durch eine Konstante ersetzen, in der der Hinweis auf den Haftungsausschluss durch eine Wild-Card der aktuellen Seite ersetzt ist. Z.B. "!:Haftungsausschluss".
                        '\italic{Bitte beachte, dass diese Seiten im Aufbau befindlich sind. Es sind weder alle entwickelten Ideen eingepflegt, noch sind alle Texte vollständig.'."\n".
                        'Sollte letzteres der Fall sein, so sind \color{*Bearb}{violette} Markierungen angebracht.'."\n".
                        'Stellen, die der aktuellen Weiterentwicklung bedürfen – gerne auch von extern –, sind \color{*Entwick}{grün} markiert.}'."\n"),
                        addtext => '')), */
                    
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:ZS:Home:Inhalt'),
                      // array(  jump_name => 'OM:ZS:Einleitung'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Inhalt:  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'showContent',
            'OM:ZS:Home:Inhalt',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'normal',
                    '\\\\'."\n"),
                  // array( 'contentlist',
                  //   array( content_ary => array(
                  //     array( title => '\color{*ContentItemDisabled}{Video Tour (geplant)}', startsign => '', //jumpname => 'XXX',
                  //               description => 'die YouTube-Vorträge'),
                  //     array( title => '\color{*ContentItemDisabled}{Vorwort (geplant)}', startsign => ''/*'\name{OM:FrQFT:Vorwort}'*/, //jumpname => 'OM:FrQFT:Vorwort', startsign => '',
                  //               description => 'was mich bewegt – was ich bewegen möchte'/*$Glo_g_Site_ary['OM:FrQFT:Vorwort'][text_undertitel_h2])*/),
                  //   ))),
                      
                  /* array( 'normal',
                    // '<h3 class="tools-class-contentlist-header">Zahlensemantik \\\\ \small{XXX}</h3>'."\n"),
                    '<h3 class="tools-class-contentlist-header">Zahlensemantik</h3>'."\n"), */
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:ZS:Einleitung'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:ZS:Eulogie'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:ZS:Pilogie'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:ZS:Philogie'),
                    ))),
                      
                  array( 'normal',
                    '<h3 class="tools-class-contentlist-header">Lesestoff und Verweise \\\\ \small{Informationen}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:ZS:Literatur'),
                    ))),
              )
          ); ?>
          
          
		    	<!-- <!  • Lexikon:  > -->

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
