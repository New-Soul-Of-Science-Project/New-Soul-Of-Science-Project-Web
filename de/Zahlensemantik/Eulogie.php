<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:ZS:Eulogie'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:ZS:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\\bold{XXX}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{Seite befindet sich im Aufbau …}'."\n"))),
                      
                  array( 'text', array( text => array(
                    'XXX:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PiVe', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e^{\i π}  =  -1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sqrt{ \e^{\i π} }  =  \sqrt{ -1 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sqrt{ \e^{\i π} }  =  \i  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e^{\frac{ \i π }{ 2 }}  =  \i  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \e^{\frac{ \i π }{ 2 }} *)^{\i}  =  \i^{\i}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e^{\frac{ -π }{ 2 }}  =  \i^{\i}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ 1 }{ \e^{\frac{ π }{ 2 }} }  =  \i^{\i}  }'),
                    ))),
                  /* array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    ''))), */
                    
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Einleitung:Grundlagen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • XXX  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:ZS:Einleitung:Philogie',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:ZS:Einleitung', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{Seite befindet sich im Aufbau …}'."\n"))),
                      
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Formale-Entwicklung'),
                    )),
                )
          ); */ ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
