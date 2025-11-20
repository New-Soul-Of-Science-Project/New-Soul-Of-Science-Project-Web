<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:NPYo:Trimurti'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:NPYo:Stein-der-Weisen'); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                  array( 'youtube',
                    array_merge( $NPYo_g_youtube_ary_HastDuShivaSchonEinmalSoGesehen, array( name => 'OM:NPYo:Trimurti:YouTube-HastDuShivaSchonEinmalSoGesehen'))),

                  /* array( 'headline', array( jump_name => 'OM:NPYo:Trimurti:Vortext:X', text =>
                                           
                'X', subline =>
                  '')), */
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:Chakras-Kabbala-Tarot'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • X  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:NPYo:HaTha:WirZweiWesen',
              '\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:HaTha', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '• X',
                    ))), */
                      
                  /* array( 'headline', array( jump_name => 'OM:NPYo:HaTha:WirZweiWesen:X', text =>
                                           
                'X')), */
                      
                  /* array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:HaTha:HerstellungBalance'),
                    )),
              )
          ); */ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
