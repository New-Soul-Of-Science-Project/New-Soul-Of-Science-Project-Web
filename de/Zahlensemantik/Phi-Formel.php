<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:ZS:Phi-Formel'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:ZS:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{Seite befindet sich im Aufbau …}'."\n"))),
                      
                  /* array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    ''))), */

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Es gilt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PhiFo', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \phi  =  \frac{ \sqrt{5} + 1 }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \phi  =  1,618033988749894848204586834365…  }'),
                      array( display => 'on',  latex => '{  *( \phi^{2n + 1} - \phi^{- *( 2n + 1 *)} *) \\\ \qquad  =  *( \phi^{2n} + \phi^{-2n} *) + *( \phi^{2n - 1} - \phi^{- *( 2n - 1 *)} *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Daraus folgt für \lm{ n = 1 }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PhiFo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \phi^{2 \cdot 1 + 1} - \phi^{- *( 2 \cdot 1 + 1 *)} *) \\\ \qquad  =  *( \phi^{2 \cdot 1} + \phi^{-2 \cdot 1} *) + *( \phi^{2 \cdot 1 - 1} - \phi^{- *( 2 \cdot 1 - 1 *)} *)  }'),
                      array( display => 'on',  latex => '{  *( \phi^{3} - \phi^{-3} *)  =  *( \phi^{2} + \phi^{-2} *) + *( \phi^{1} - \phi^{-1} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  4  =  3 + 1  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'mit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PhiFo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \phi^{3}  =  4,236067977499789696409173668731…  }'),
                      array( display => 'on',  latex => '{  \phi^{-3}  =  0,236067977499789696409173668731…  }'),
                      array( display => 'on',  latex => '{  \phi^{2}  =  2,618033988749894848204586834365…  }'),
                      array( display => 'on',  latex => '{  \phi^{-2}  =  0,381966011250105151795413165634…  }'),
                      array( display => 'on',  latex => '{  \phi^{1}  =  1,618033988749894848204586834365…  }'),
                      array( display => 'on',  latex => '{  \phi^{-1}  =  0,618033988749894848204586834365…  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Für \lm{ n = 2 } folgt'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PhiFo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \phi^{2 \cdot 2 + 1} - \phi^{- *( 2 \cdot 2 + 1 *)} *) \\\ \qquad  =  *( \phi^{2 \cdot 2} + \phi^{-2 \cdot 2} *) + *( \phi^{2 \cdot 2 - 1} - \phi^{- *( 2 \cdot 2 - 1 *)} *)  }'),
                      array( display => 'on',  latex => '{  *( \phi^{5} - \phi^{-5} *)  =  *( \phi^{4} + \phi^{-4} *) + *( \phi^{3} - \phi^{-3} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  11  =  7 + 4  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'mit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PhiFo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \phi^{5}  =  11,09016994374947424102293417182…  }'),
                      array( display => 'on',  latex => '{  \phi^{-5}  =  0,090169943749474241022934171828…  }'),
                      array( display => 'on',  latex => '{  \phi^{4}  =  6,854101966249684544613760503096…  }'),
                      array( display => 'on',  latex => '{  \phi^{-4}  =  0,145898033750315455386239496903…  }'),
                      array( display => 'on',  latex => '{  \phi^{3}  =  4,236067977499789696409173668731…  }'),
                      array( display => 'on',  latex => '{  \phi^{-3}  =  0,236067977499789696409173668731…  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Mit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PhiFo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2  =  *( \phi^{2} - \phi^{-1} *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'stellt die \lm{ 2 } eine Ausnahme dar.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Während der erste Exponent eine gerade Zahl enthält, befindet sich im zweiten Exponenten eine ungerade Zahl.'."\n".
                      'Darin sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PhiFo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \phi^{2}  =  2,618033988749894848204586834365…  }'),
                      array( display => 'on',  latex => '{  \phi^{-1}  =  0,618033988749894848204586834365…  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Aus obigen Ergebnissen folgen beispielhaft für die ersten 25 Primzahlen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PhiFo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2  =  *( \phi^{2} - \phi^{-1} *)  }'),
                      array( display => 'on',  latex => '{  3  =  *( \phi^{2} + \phi^{-2} *)  }'),
                      array( display => 'on',  latex => '{  5  =  *( \phi^{2} - \phi^{-2} *)^{2}  }'),
                      array( display => 'on',  latex => '{  7  =  *( \phi^{4} + \phi^{-4} *)  }'),
                      array( display => 'on',  latex => '{  11  =  *( \phi^{5} - \phi^{-5} *)  }'),
                      array( display => 'on',  latex => '{  13  =  *( \phi^{5} - \phi^{-5} *) + *( \phi^{2} - \phi^{-1} *)  }'),
                      array( display => 'on',  latex => '{  17  =  *( \phi^{6} + \phi^{-6} *) - *( \phi^{1} - \phi^{-1} *)  }'),
                      array( display => 'on',  latex => '{  19  =  *( \phi^{6} + \phi^{-6} *) + *( \phi^{1} - \phi^{-1} *)  }'),
                      array( display => 'on',  latex => '{  23  =  *( \phi^{6} + \phi^{-6} *) + *( \phi^{2} - \phi^{-2} *)^{2}  }'),
                      array( display => 'on',  latex => '{  29  =  *( \phi^{7} - \phi^{-7} *)  }'),
                      array( display => 'on',  latex => '{  31  =  *( \phi^{7} - \phi^{-7} *) + *( \phi^{2} - \phi^{-1} *)  }'),
                      array( display => 'on',  latex => '{  37  =  *( \phi^{2} + \phi^{-2} *) + *( \phi^{2} - \phi^{-2} *)^{2} + *( \phi^{7} - \phi^{-7} *)  }'),
                      array( display => 'on',  latex => '{  41  =  *( \phi^{XXX} - \phi^{-XXX} *)  }'),
                      array( display => 'on',  latex => '{  43  =  *( \phi^{XXX} - \phi^{-XXX} *)  }'),
                      array( display => 'on',  latex => '{  47  =  *( \phi^{8} - \phi^{-8} *)  }'),
                      array( display => 'on',  latex => '{  53  =  *( \phi^{XXX} - \phi^{-XXX} *)  }'),
                      array( display => 'on',  latex => '{  59  =  *( \phi^{XXX} - \phi^{-XXX} *)  }'),
                      array( display => 'on',  latex => '{  61  =  *( \phi^{XXX} - \phi^{-XXX} *)  }'),
                      array( display => 'on',  latex => '{  67  =  *( \phi^{XXX} - \phi^{-XXX} *)  }'),
                      array( display => 'on',  latex => '{  71  =  *( \phi^{XXX} - \phi^{-XXX} *)  }'),
                      array( display => 'on',  latex => '{  73  =  *( \phi^{XXX} - \phi^{-XXX} *)  }'),
                      array( display => 'on',  latex => '{  79  =  *( \phi^{XXX} - \phi^{-XXX} *)  }'),
                      array( display => 'on',  latex => '{  83  =  *( \phi^{XXX} - \phi^{-XXX} *)  }'),
                      array( display => 'on',  latex => '{  89  =  *( \phi^{9} - \phi^{-9} *) + *( \phi^{5} - \phi^{-5} *) + *( \phi^{2} - \phi^{-1} *)  }'),
                      array( display => 'on',  latex => '{  97  =  *( \phi^{XXX} - \phi^{-XXX} *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '.'."\n",
                        '\\\\'."\n".
                      ''))),

                      /* array( 'text', array( text => array(
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
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
            'OM:ZS:Einleitung:Pi-Vektor',
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
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    ''))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Formale-Entwicklung'),
                    )),
                )
          ); */ ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
