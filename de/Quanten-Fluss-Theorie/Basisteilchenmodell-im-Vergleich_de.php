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
                  array( 'text', array( text => array(
                      // • Das Basisteilchenmodell leitet die Einsteinsche Lichtformel nicht ganz korrekt her.
                      // • Das Basisteilchenmodell sagt eine Reduktion der Elementrateilchenfrequenz bei Annäherung an eine Masse vorher.
                      // • Was wusste ich schon bevor ich das Modell kennen gelernt habe und was nicht?
                    // 'Die Beschreibung des Zusammenhangs zwischen Frequenz und Zeit'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{In Arbeit …}'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
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
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Basisteilchenmodell', type => 'back'),
                    )),
                                            
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{In Arbeit …}'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld'),
                    )),
              )
          ); ?>


		    	<!  • Elementarteilchen-Frequenz im Gravitationsfeld  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld',
              'Die Frequenz der Teilchen wird in der Quanten-Fluss-Theorie realistischer beschrieben', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Basisteilchenmodell:Gravitation', type => 'back'),
                    )),
                      
                  array( 'text', array( text => array(
                    'Im Basisteilchenmodell zirkulieren zwei Basisteilchen, als die Bestandteile jeden Elementarteilchens, mit Lichtgeschwindigkeit und der de-Broglie-Frequenz'."\n".
                    'um ein gemeinsames Rotationszentrum.\\footnote{Vgl. \\cite{Giese:TheAppMystOfElectron2012}, Kap. 1 Introduction, S. 2.}'."\n".
                    'Wie die Quanten-Fluss-Theorie geht das Basisteilchenmodell bei der Einwirkung von Gravitation auch von einer Verzerrung der Struktur eines Elementarteilchens aus'."\n".
                    'und nicht, wie die Allgemeine Relativitätstheorie, von einer Krümmung des Raums.'."\n",
                      'Möchte wir die Änderung der Elementarteilchen-Frequenz im Gravitationsfeld berechnen, ist sowohl die Änderung der Basisteilchen-Geschwindigkeit,'."\n".
                    'der im Gravitationsfeld verzögerten Lichtgeschwindigkeit \\term{_{r,p}c_{eff}} – Shapiro-Verzögerung\\footnote{\\const{FrQFT_g_footnote_text_ShapiroVersoegerung}} –,'."\n".
                    'als auch die Änderung der Geometrie, die länge des Wegs \\term{_{r,p}w_{red}} ihrer Bahn in Richtung \\term{p}, zu berücksichtigen:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r,p}c_{eff}  =  \frac{_{r,p}w_{red}}{t}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei ist \\term{r} der Abstand vom Zentrum eines Zentralmasse.'."\n".
                    'Die Variable \\term{p} besitzt im Fall tangentialer Bewegungsrichtung des Basisteilchen zur Zentralmasse den Wert \\term{p = 1/2} und im Fall radialer Richtung den Wert \\term{p = 1}.'."\n",
                      'Für die Frequenz \\term{f} gilt in Bezug auf die Zeit \\term{t} allgemein:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f  =  \frac{1}{t}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  _{r}f  =  \frac{ _{r,p}c_{eff}}{_{r,p}w_{red} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Lichtgeschwindigkeit \\term{c_{0}} der Basisteilchen verändert sich nach Giese in einem Gravitationsfeld wie folgt:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r,p}c_{eff}  =  c_{\lowZero} \cdot \left( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \right)^{p}  }',
                                               footnote => 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, Speed Reduction in Detail, S. 20-22, hier Formel C.7, S. 22. Die Konstante \\term{c} habe ich wegenen der Eindeutigkeit in \\term{c_{0}} umbenannt.'),
                    ))),
                  array( 'text', array( text => array(
                    'Die strukturelle Geometrie von Elementarteilchen verändert sich nach Giese in ihrer Ausdehnung in einem Gravitationsfeld in tangentialer und radialer Richtung zur Zentralmasse,'."\n".
                    'wenn \\term{w_{0}} ohne Verzerrung ist:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r,p}w_{red}  =  w_{\lowZero} \cdot \left( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \right)^{p-\frac{1}{2}}  }',
                                               footnote => 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, Speed Reduction in Detail, S. 20-22, hier Formel C.8, S. 22. Die erste Variable rechts direkt neben dem Gleichheitszeichen \\term{d_{0}} ist dort mit \\term{r} benannt. Diese Benennung ist fehlerhaft, weil es eine weitere Variable \\term{r} unter dem Bruch gibt, die von der ersten unabhängig ist. Beide müssen also unterschieden werden, weil die erste neben dem Gleichheitszeichen eine generelle geometrische Ausdehnung von Strukturen meint, während die zweite den Abstand vom Zentrum einer Zentralmasse bedeutet. Folgerichtig habe ich dann die Variable \\term{r_{red}} bei Giese in \\term{d_{red}} umbenannt, weil diese die Reduktion der Ausdehnung einer generellen Struktur meint. Die Konstante \\term{c} habe ich wegen der Eindeutigkeit in \\term{c_{0}} umbenannt.'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die Frequenz ergibt sich dann, wenn \\term{S} zur Substitution genutzt wird:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r}S  =  \left( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \right)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  _{r}f  =  \frac{ c_{\lowZero} \cdot {_{r}S^{p}} }{ d_{\lowZero} \cdot {_{r}S^{p - \frac{1}{2}}} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  _{r}f  =  \frac{ c_{\lowZero} }{ d_{\lowZero} } \cdot {_{r}S^{p - \left( p - \frac{1}{2} \right) }}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  _{r}f  =  \frac{ c_{\lowZero} }{ d_{\lowZero} } \cdot {_{r}S^{\frac{1}{2}}}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  _{r}f  =  \frac{ c_{\lowZero} }{ d_{\lowZero} } \cdot \left( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \right)^{\frac{1}{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  _{r}f  =  \frac{ c_{\lowZero} }{ d_{\lowZero} } \cdot \sqrt{1-\frac{g \cdot N}{c_{0}^{2} \cdot r}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Term \\term{_{r}S} wird bei zunehmender Gravitation, also bei kleiner werdendem Abstand zur Zentralmasse \\term{r}, auch immer kleiner.'."\n".
                    '\\color{*Bearb}{Die de-Broglie-Frequenz \\term{_{r}f} eines Elementarteilchens in Gieses Basisteilchenmodell nimmt also bei zunehmender Gravitation ab.'."\n".
                    'Qualitativ kann man sagen, dass im Pound-Rebka-Snider-Experiment\\footnote[*Bearb]{\\const{FrQFT_g_footnote_text_PoundRebka}} bei Zunahme der Gravitation, im Gegensatz dazu, eine Zunahme der de-Broglie-Frequenz beobachtet wird.'."\n".
                    'Das Basisteilchenmodell widerspricht an dieser Stelle den Beobachtungen. (Dies ist so offensichtlich nicht korrekt!)}'."\n",
                      'Die Quanten-Fluss-Theorie besitzt in dieser Beziehung eine andere Feinstruktur und ist daher in der Lage den Beobachtungen zu entsprechen.'."\n",
                      '\\color{*Bearb}{In Arbeit …}'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Basisteilchenmodell:Vakuum-und-virtuelle-Teilchen'),
                    )),
              )
          ); ?>


		    	<!  • Vakuum und virtueller Teilchen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Basisteilchenmodell:Vakuum-und-virtuelle-Teilchen',
              'Das Basisteilchenmodell kennt nicht das Vakuum mit virtuellen Teilchen', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld', type => 'back'),
                    )),
                      
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{In Arbeit …}'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Vergleich'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
