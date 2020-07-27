<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>

<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:FrQFT:Basisteilchenmodell'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      '); ?>

	
		    	<!Ideen:>
		    	<!  • XXX  >
		    

		    	<!  • XXX  >
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'normal',
                      // • Das Basisteilchenmodell leitet die Einsteinsche Lichtformel nicht ganz korrekt her.
                      // • Das Basisteilchenmodell sagt eine Reduktion der Elementrateilchenfrequenz bei Annäherung an eine Masse vorher.
                      // • Was wusste ich schon bevor ich das Modell kennen gelernt habe und was nicht?
                    'Die Beschreibung des Zusammenhangs zwischen Frequenz und Zeit'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"),
                  array( 'normal',
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"),
                  array( 'normal',
                    '\\color{*Bearb}{In Arbeit …}'."\n"),
                  array( 'jumplist',
                    array(
                      //array(  jump_name => 'XXX'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Gravitation  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Basisteilchenmodell:Gravitation',
              'Jedes Elementarteilchen hat die gleiche Gravitation', 'Sc_f_Paragraph',
                array(
                  array( 'normal',
                    '\\color{*Bearb}{In Arbeit …}'."\n"),
                  array( 'jumplist',
                    array(
                      //array(  jump_name => 'XXX'),
                    )),
              )
          ); ?>


		    	<!  • Elementarteilchen-Frequenz im Gravitationsfeld  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld',
              'Die Frequenz der Teilchen wird in der Quanten-Fluss-Theorie realistischer beschrieben', 'Sc_f_Paragraph',
                array(
                  array( 'normal',
                    '\\color{*Bearb}{(Variable d durch w für Weg ersetzen …)}'."\n"),
                  array( 'normal',
                    'Im Basisteilchenmodell zirkulieren zwei Basisteilchen mit der de-Broglie-Frequenz des Elementarteilchens, welches sie bilden, um ein gemeinsames Rotationszentrum.\\footnote{Vgl. \\cite{Giese:TheAppMystOfElectron2012}, Kap. 1 Introduction, S. 2.}'."\n".
                    'Wie in der Quanten-Fluss-Theorie geht das Basisteilchenmodell bei der Einwirkung von Gravitation auch von einer Verzerrung der Struktur eines Elementarteilchens aus'."\n".
                    'und nicht wie die Allgemeine Relativitätstheorie von einer Krümmung des Raums.'."\n"),
                  array( 'normal',
                    'Möchte man dann die Änderung der Frequenz im Gravitationsfeld berechnen ist sowohl die Änderung der Basisteilchen-Geschwindigkeit \\term{c_{eff}}'."\n".
                    'als auch die Änderung der Geometrie \\term{d_{red}} ihrer Bahn zu berücksichtigen:'."\n"),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c_{eff}  =  \frac{d_{red}}{t}  }'),
                    ))),
                  array( 'normal',
                    'Für die Frequenz \\term{f} gilt in Bezug auf die Zeit \\term{t} allgemein:'."\n"),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f  =  \frac{1}{t}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  f  =  \frac{c_{eff}}{d_{red}}  }'),
                    ))),
                  array( 'normal',
                    'Die Lichtgeschwindigkeit \\term{c_{0}} der Basisteilchen verändert sich nach Giese in einem Gravitationsfeld wie folgt, wenn \\term{r} der Abstand vom Zentrum eines Zentralmasse ist:'."\n"),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c_{eff}  =  c_{\lowZero} \cdot \Bigl( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \Bigr)^{p}  }',
                                               footnote => 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, Speed Reduction in Detail, S. 20-22, hier Formel C.7, S. 22. Die Konstante \\term{c} habe ich wegenen der Eindeutigkeit in \\term{c_{0}} umbenannt.'),
                    ))),
                  array( 'normal',
                    'Die Variable \\term{p} in der Potenz besitzt dabei im Fall tangentialer Richtung den Wert \\term{p = 1/2} und im Fall radialer Richtung den Wert \\term{p = 1}.'."\n"),
                  array( 'normal',
                    'Die strukturelle Geometrie von Elementarteilchen verändert sich nach Giese in ihrer Ausdehnung in einem Gravitationsfeld wie folgt,'."\n".
                    'wenn \\term{d_{0}} ein fester Abstand ohne Verzerrung ist:'."\n"),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  d_{red}  =  d_{\lowZero} \cdot \Bigl( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \Bigr)^{p-\frac{1}{2}}  }',
                                               footnote => 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, Speed Reduction in Detail, S. 20-22, hier Formel C.8, S. 22. Die erste Variable rechts direkt neben dem Gleichheitszeichen \\term{d_{0}} ist dort mit \\term{r} benannt. Diese Bennenung ist fehlerhaft, weil es eine weitere Variable \\term{r} unter dem Bruch gibt, die von der ersten unabhängig ist. Beide müssen also unterschieden werden, weil die erste neben dem Gleichheitszeichen eine generelle geometrische Ausdehnung von Strukturen meint, während die zweite den Abstand vom Zentrum einer Zentralmasse bedeutet. Folgerichtig habe ich dann die Variable \\term{r_{red}} bei Giese in \\term{d_{red}} umbenannt, weil diese die Reduktion der Ausdehnung einer generellen Struktur meint. Die Konstante \\term{c} habe ich wegenen der Eindeutigkeit in \\term{c_{0}} umbenannt.'),
                    ))),
                  array( 'normal',
                    'Für die Frequenz ergibt sich dann, wenn \\term{S} zur Substitution genutzt wird:'."\n"),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  S  =  \Bigl( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \Bigr)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  f  =  \frac{c_{\lowZero} \cdot S^{p}}{d_{\lowZero} \cdot S^{p-\frac{1}{2}}}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f  =  \frac{c_{\lowZero}}{d_{\lowZero}} \cdot S^{p-(p-\frac{1}{2})}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f  =  \frac{c_{\lowZero}}{d_{\lowZero}} \cdot S^{\frac{1}{2}}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f  =  \frac{c_{\lowZero}}{d_{\lowZero}} \cdot \Bigl( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \Bigr)^{\frac{1}{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f  =  \frac{c_{\lowZero}}{d_{\lowZero}} \cdot \sqrt{1-\frac{g \cdot N}{c_{0}^{2} \cdot r}}  }'),
                    ))),
                  array( 'normal',
                    'Der Term \\term{S} – die große Klammer – wird bei zunehmender Gravitation, also bei kleiner werdendem \\term{r} für die Annäherung an die Zentralmasse,'."\n".
                    'immer kleiner.'."\n".
                    '\\color{*Bearb}{Die de-Broglie-Frequenz \\term{f} eines Elementarteilchens in Gieses Basisteilchenmodell nimmt also bei zunehmender Gravitation ab.'."\n".
                    'Qualitativ kann man sagen, dass im Pound-Rebka-Snider-Experiment\\footnote[*Bearb]{\\const{FrQFT_g_footnote_text_PoundRebka}} bei Zunahme der Gravitation, im Gegensatz dazu, eine Zunahme der de-Broglie-Frequenz beobachtet wird.'."\n".
                    'Das Basisteilchenmodell widerspircht an dieser Stelle den Beobachtungen. (Dies ist so offensichtlich nicht korrekt!)}'."\n"),
                  array( 'normal',
                    'Die Quanten-Fluss-Theorie besitzt in dieser Beziehung eine andere Feinstruktur und ist daher in der Lage den Beobachtungen zu entsprechen.'."\n"),
                  array( 'normal',
                    '\\color{*Bearb}{In Arbeit …}'."\n"),
                  array( 'jumplist',
                    array(
                      //array(  jump_name => 'XXX'),
                    )),
              )
          ); ?>


		    	<!  • Vakuum und virtueller Teilchen  >
		    	<!    • XXX  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Basisteilchenmodell:Vakuum-und-virtuelle-Teilchen',
              'Das Basisteilchenmodell kennt nicht das Vakuum mit virtuellen Teilchen', 'Sc_f_Paragraph',
                array(
                  array( 'normal',
                    '\\color{*Bearb}{In Arbeit …}'."\n"),
                  array( 'jumplist',
                    array(
                      //array(  jump_name => 'XXX'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
