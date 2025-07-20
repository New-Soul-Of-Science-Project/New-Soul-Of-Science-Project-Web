<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Formale-Entwicklung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    // '• Ist \lm{ \mathbb{S} } bezüglich der Addition und Multiplikation ein \jump[https://de.wikipedia.org/wiki/Geordneter_Körper]{}{archimedisch angeordneter Körper}?',
                    ))),
                      
                  array( 'text', array( text => array(
                  '\color{*Bearb}{(In Arbeit …)}'."\n".
                  ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:X', text =>
                      
                '\color{*Bearb}{(In Arbeit …)}', subline =>
                  '')),
                  array( 'text', array( text => array(
                  '\color{*Bearb}{(In Arbeit …)}'."\n".
                  ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ableitungen-Integrale'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • X  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:X',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                  '\color{*Bearb}{(In Arbeit …)}'."\n".
                  ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:X', text =>
                      
                '\color{*Bearb}{(In Arbeit …)}', subline =>
                  '')),
                  array( 'text', array( text => array(
                  '\color{*Bearb}{(In Arbeit …)}'."\n".
                  ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ'),
                    )),
              )
          ); */ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
