<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:FrQFT:Ausblick'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      '); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'X'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Experimentelle Überprüfungen  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Ausblick:Experimentelle-Ueberpruefungen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Vorhersagen der Quanten-Fluss-Theorie, die man versuchen muss in Experimenten oder der Natur zu Beobachten …'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'X'),
                    )),
              )
          ); ?>


		    	<!  • Theoretische Überprüfung  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Ausblick:Theoretische-Ueberpruefungen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    '• Das Elektron hat ein Dipolmoment, welches es extrem rund erscheinen lässt. Gilt dies auch für die FrQFT? (Vgl. \cite{Moskowitz:ZuRundFuerDieSupersymmetrie2013}.',
                    '• Beim Bullet-Cluster, ein Zusammenstoß zweier Galaxienhaufen, scheint Dunkle Materie in ihrer Bewegung über die sichtbare hinaus zu schießen. Gilt dies auch für das Phänomen der Dunklen Materie in der FrQFT?\footnote{\const{FrQFT_g_footnote_text_BulletCluster}}',
                    ))),
                      
                      
                  array( 'text', array( text => array(
                    'Beobachtungen bei denen theoretisch überprüft werden muss, ob die Quanten-Fluss-Theorie ihnen entspricht …'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'X'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
