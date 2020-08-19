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
                      'Möchten wir die Änderung der Elementarteilchen-Frequenz im Gravitationsfeld berechnen, ist sowohl die Änderung der Basisteilchen-Geschwindigkeit,'."\n".
                    'der im Gravitationsfeld verzögerten Lichtgeschwindigkeit \\term{_{r}c_{eff}} – Shapiro-Verzögerung\\footnote{\\const{FrQFT_g_footnote_text_ShapiroVersoegerung}} –,'."\n".
                    'als auch die Änderung der Geometrie, die Länge des Umfangs \\term{_{r}u_{red}} ihrer Bahn, zu berücksichtigen:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r}c_{eff}  =  \frac{_{r}u_{red}}{t}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Berechnung wird dadurch zunächst erschwert, dass die Lichtgeschwindigkeit sich im Basisteilchenmodell durch Gravitation richtungsabhängig verändert.'."\n".
                    'Allerdings verändert sich auch die Geometrie der Kreisbahn entsprechend, so dass wir sehen werden, dass sich beide Effekte so aufheben, als wenn es eine Kreisbahn bliebe.'."\n".
                    'Die Länge der elliptischen Bahn einer Rotation, die in beide Richtungen unterschiedliche Halbachsen besitzt, wäre nur näherungsweise zu berechnen.'."\n",
                      'Um zu zeigen, dass sich beide Effekte aufheben, möchte ich hilfsweise zunächst die reine Bewegung entlang der beiden Halbachsen betrachten, auf ihrem'."\n".
                    'Weg \\term{_{r,p}w_{red}} mit der Geschwindigkeit \\term{_{r,p}c_{eff}}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r,p}c_{eff}  =  \frac{_{r,p}w_{red}}{t}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei ist \\term{r} der Abstand vom Zentrum eines Zentralmasse.'."\n".
                    'Die Variable \\term{p} besitzt im Fall tangentialer Bewegungsrichtung des Basisteilchen zur Zentralmasse den Wert \\term{p = 1/2} und im Fall radialer Richtung den Wert \\term{p = 1}.'."\n",
                      'Die beiden unterschiedlichen Halbachsen führen zu zwei Frequenzen \\term{_{r,p}f_{H}}; eine je Richtung \\term{p}.'."\n".
                    'Für die Frequenz \\term{f} gilt in Bezug auf die Zeit \\term{t} erst einmal ganz allgemein:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f  =  \frac{1}{t}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  _{r,p}f_{H}  =  \frac{ _{r,p}c_{eff}}{_{r,p}w_{red} }  }'),
                    ))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld:XXX', text =>
                                           
                'Lichtgeschwindigkeitsänderung im Gravitationsfeld', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Lichtgeschwindigkeit \\term{c_{0}} der Basisteilchen verändert sich nach Giese in einem Gravitationsfeld wie folgt:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r,p}c_{eff}  =  c_{\lowZero} \cdot \left( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \right)^{p}  }',
                                               footnote => 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, Speed Reduction in Detail, S. 20-22, hier Formel C.7, S. 22. Die Konstante \\term{c} habe ich wegenen der Eindeutigkeit in \\term{c_{0}} umbenannt.'),
                    ))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld:XXX', text =>
                                           
                'Geometrieänderung im Gravitationsfeld', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die strukturelle Geometrie von Elementarteilchen verändert sich nach Giese in ihrer Ausdehnung in einem Gravitationsfeld in tangentialer und radialer Richtung zur Zentralmasse,'."\n".
                    'wenn \\term{w_{0}} ohne Verzerrung ist:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r,p}w_{red}  =  w_{\lowZero} \cdot \left( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \right)^{p-\frac{1}{2}}  }',
                                               footnote => 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, Speed Reduction in Detail, S. 20-22, hier Formel C.8, S. 22. Die erste Variable rechts direkt neben dem Gleichheitszeichen \\term{d_{0}} ist dort mit \\term{r} benannt. Diese Benennung ist fehlerhaft, weil es eine weitere Variable \\term{r} unter dem Bruch gibt, die von der ersten unabhängig ist. Beide müssen also unterschieden werden, weil die erste neben dem Gleichheitszeichen eine generelle geometrische Ausdehnung von Strukturen meint, während die zweite den Abstand vom Zentrum einer Zentralmasse bedeutet. Folgerichtig habe ich dann die Variable \\term{r_{red}} bei Giese in \\term{d_{red}} umbenannt, weil diese die Reduktion der Ausdehnung einer generellen Struktur meint. Die Konstante \\term{c} habe ich wegen der Eindeutigkeit in \\term{c_{0}} umbenannt.'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese geometrische Verzerrung der Struktur von Elementarteilchen im Gravitationsfeld ergibt sich nach Giese, weil sich mit der Veränderung'."\n".
                    'der Lichtgeschwindigkeit auch die Ausbreitungsgeschwindigkeit der Wechselwirkungsteilchen ändert, die die beiden Basisteilchen aneinander binden.'."\n".
                    'Dieser der Lorentzkontraktion äquivalente Effekt im Zusammenhang mit Bindungsfeldern ist auch als Heaviside-Ellipsoid bekannt.\\footnote{\\const{FrQFT_g_footnote_text_LorentzKontrFelder}}'."\n",
                      'Für die Frequenz ergibt sich dann, wenn \\term{_{r}S} zur Substitution genutzt wird:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r}S  =  \left( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \right)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  _{r,p}f_{H}  =  \frac{ c_{\lowZero} \cdot {_{r}S^{p}} }{ w_{\lowZero} \cdot {_{r}S^{p - \frac{1}{2}}} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  _{r,p}f_{H}  =  \frac{ c_{\lowZero} }{ w_{\lowZero} } \cdot {_{r}S^{p - \left( p - \frac{1}{2} \right) }}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  _{r,p}f_{H}  =  \frac{ c_{\lowZero} }{ w_{\lowZero} } \cdot {_{r}S^{\frac{1}{2}}}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  _{r,p}f_{H}  =  \frac{ c_{\lowZero} }{ w_{\lowZero} } \cdot \left( 1-\frac{g \cdot N}{c_{0}^{2} \cdot r} \right)^{\frac{1}{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  _{r,p}f_{H}  =  \frac{ c_{\lowZero} }{ w_{\lowZero} } \cdot \sqrt{1-\frac{g \cdot N}{c_{0}^{2} \cdot r}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wie wir sehen, fällt die Richtung \\term{p} weg.'."\n".
                    'Die beiden Effekte, die richtungsabhängige variable Lichtgeschwindigkeit und die richtungsabhängige Veränderung der Geometrie, heben sich auf,'."\n".
                    'wie oben schon erwähnt.'."\n",
                      'So können wir die Formel nun doch problemlos für den Umfang und die korrekte Elementarteilchen-Frequenz übernehmen und entsprechend abwandeln:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  _{r}f  =  \frac{ c_{\lowZero} }{ u_{\lowZero} } \cdot \sqrt{1-\frac{g \cdot N}{c_{0}^{2} \cdot r}}  }',
                                               label_name => 'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld:Equ-FrequnezGravi', label_text => '\\name{OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld:Equ-FrequnezGravi}', label_incr => true),
                    ))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld:XXX', text =>
                                           
                'Frequenzänderung im Gravitationsfeld', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wie verhält sich die so definierte Frequenz nun bei steigender Gravitation?'."\n".
                    'Um dies deutlich zu machen, ergänze ich sowohl die Entfernung zur Zentralmasse als auch die Frequenz mit den Differenzen \\term{Δr} und \\term{Δ_{r}f}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r}f + \Delta {_{r}f}  =  \frac{ c_{\lowZero} }{ u_{\lowZero} } \cdot \sqrt{1-\frac{ g \cdot N }{ c_{0}^{2} \cdot \left( r + \Delta r \right) }}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Soll die Gravitation größer werden, dann muss die Distanz \\term{r + Δr} zur Zentralmasse kleiner werden, was bedeutet, dass \\term{Δr} bei festem \\term{r} negativ sein muss.'."\n".
                    'Der Nenner des Bruchs, indem sich die Distanz \\term{r + Δr} befindet wird sodann ebenfalls kleiner, was den Bruch vergrößert.'."\n".
                    'Die Differenz unter der Wurzel wird nun kleiner, weil mehr von der Eins abgezogen wird.'."\n".
                    'Eine Wurzel von etwas kleinerem ist ebenfalls kleiner, was den gesamten rechten Term der Gleichung verkleinert.'."\n".
                    'Bei festem \\term{_{r}f} muss \\term{Δ_{r}f} grob gesprochen negativ sein:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Delta r  <  0  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \Delta {_{r}f}  <  0  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die gesamte Frequenz \\term{_{r}f} in Formel \\jumpname{OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld:Equ-FrequnezGravi}'."\n".
                    'wird bei zunehmender Gravitation, also bei kleiner werdendem Abstand zur Zentralmasse \\term{r}, auch immer kleiner.'."\n",
                      'Die de-Broglie-Frequenz \\term{_{r}f} eines Elementarteilchens in Gieses Basisteilchenmodell nimmt also bei zunehmender Gravitation ab.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld:XXX', text =>
                                           
                'Widerspruch zur experimentellen Beobachtung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Qualitativ kann man sagen, dass im Pound-Rebka-Snider-Experiment\\footnote[*Bearb]{\\const{FrQFT_g_footnote_text_PoundRebka}} bei Zunahme der Gravitation, im Gegensatz dazu, eine Zunahme der de-Broglie-Frequenz beobachtet wird.'."\n".
                    'Das Basisteilchenmodell widerspricht an dieser Stelle den experimentellen Beobachtungen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-Frequenz-im-Gravitationsfeld:XXX', text =>
                                           
                'Kein Widerspruch in der fraktalen Quanten-Fluss-Theorie', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Quanten-Fluss-Theorie besitzt in dieser Beziehung eine andere Feinstruktur und ist daher in der Lage den Beobachtungen zu entsprechen.'."\n",
                      '\\color{*Bearb}{In Arbeit …}'."\n"))),
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
