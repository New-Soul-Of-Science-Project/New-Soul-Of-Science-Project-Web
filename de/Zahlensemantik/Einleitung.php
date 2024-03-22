<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:ZS:Einleitung'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:ZS:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n"))),
                    
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Einleitung:Grundlagen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Pi-Vektor  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:ZS:Einleitung:Pi-Vektor',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:ZS:Einleitung', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{Seite befindet sich im Aufbau …}'."\n"))),
                      
                  // array( 'figure',
                  //   array_merge( $ZS_g_figure_ary_GraviLeptonWirkung, array( name => 'OM:ZS:Einleitung:Vortext:Fig-GraviLeptonWirkung'))),
                      
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'Sei:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PiVe', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{N}  :=  \mathbb{N_{0}} \setminus {0}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So lässt sich die Riemann\'sche Zeta-Funktion schreiben als:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PiVe', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  (\forall s \in \mathbb{C}) *[  \zeta(s)  :=  \sum_{\forall n \in \mathbb{N}}  \frac{ 1 }{ n^{s} } \\\ \qquad\qquad\quad\;\;\;  =  \prod_{\forall p \in \mathbb{P}}  \frac{ p^{s} }{ p^{s} - 1 }   *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für den Spezialfall \\term{s = 2} ergibt sich:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PiVe', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \zeta(2)  =  \sum_{\forall n \in \mathbb{N}}  \frac{ 1 }{ n^{2} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \zeta(2)  =  \frac{ 1 }{ 1 } + \frac{ 1 }{ 4 } + \frac{ 1 }{ 9 } + \frac{ 1 }{ 16 } + \frac{ 1 }{ 25 } + \cdots \\\ \qquad\qquad\;  =  \frac{ \pi^{2} }{ 6 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und damit auch:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PiVe', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \zeta(2)  =  \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ p^{2} - 1 } \\\ \qquad\qquad\;  =  \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) } \\\ \qquad\qquad\;  =  \frac{ \pi^{2} }{ 6 }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \frac{ \pi^{2} }{ 6 }  =  \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi^{2}  =  6 \cdot \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi^{2}  =  3 \cdot \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) } \cdot 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi^{2}  =  2 \cdot \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) } \\\ \qquad\qquad\quad\;\; + 2 \cdot \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) } \\\ \qquad\qquad\quad\;\; + 2 \cdot \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) }  }'),
                    ))),
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'Kleiner Exkurs')),
                  array( 'text', array( text => array(
                    'Wir substituieren:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PiVe', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a^{2}  =  \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \pi^{2}  =  2 \cdot a^{2} \cdot 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi^{2}  =  2 \cdot a^{2} + 2 \cdot a^{2} + 2 \cdot a^{2}  }'),
                      array( display => 'on',  latex => '{  r^{2}  =  x^{2} + y^{2} + z^{2}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Vektoriell betrachtet:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'ZS.Ein.PiVe', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \vec{r}  =  *( \begin{array}{c} x \\\ y \\\ z \end{array} *)  }'),
                      array( display => 'on',  latex => '{  \vec{\pi}  =  *( \begin{array}{c} \sqrt{2} \cdot a \\\ \sqrt{2} \cdot a \\\ \sqrt{2} \cdot a \end{array} *)  }'),
                      array( display => 'on',  latex => '{  b^{2}  =  \frac{ a }{ \sqrt{2} }  }'),
                      array( display => 'on',  latex => '{  \vec{\pi}  =  *( \begin{array}{c} 2 \cdot b^{2} \\\ 2 \cdot b^{2} \\\ 2 \cdot b^{2} \end{array} *)  =  *( \begin{array}{c} b^{2} + b^{2} \\\ b^{2} + b^{2} \\\ b^{2} + b^{2} \end{array} *)  }'),
                      array( display => 'off', latex => '{  \pi^{2}  =  *( 2 \cdot b^{2} *)^{2} + *( 2 \cdot b^{2} *)^{2} + *( 2 \cdot b^{2} *)^{2}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \pi^{2}  =  *( 2 \cdot \frac{ a }{ \sqrt{2} } *)^{2} + *( 2 \cdot \frac{ a }{ \sqrt{2} } *)^{2} + *( 2 \cdot \frac{ a }{ \sqrt{2} } *)^{2}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \pi^{2}  =  *( \sqrt{2} \cdot a *)^{2} + *( \sqrt{2} \cdot a *)^{2} + *( \sqrt{2} \cdot a *)^{2}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \pi^{2}  =  2 \cdot a^{2} + 2 \cdot a^{2} + 2 \cdot a^{2}  }'),
                      array( display => 'on',  latex => '{  \vec{\pi}  =  *( \begin{array}{c} *| *( \begin{array}{c} b \\\ b \end{array} *) |*^{2} \\\ *| *( \begin{array}{c} b \\\ b \end{array} *) |*^{2} \\\ *| *( \begin{array}{c} b \\\ b \end{array} *) |*^{2} \end{array} *)  }'),
                    ))),
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
          ); ?>

          
		    	<!  • Phi-Formel  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:ZS:Einleitung:Phi-Formel',
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
          ); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
