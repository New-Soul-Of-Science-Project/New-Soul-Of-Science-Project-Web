<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Einleitung'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:OT:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{Erzählung}',
                    '• Erwähnen, dass es zwei Möglichkeiten gibt.',
                    '\\bold{Literatur}',
                    '• \\jump[https://en.wikipedia.org/wiki/Hyperoperation]{}{Hyperoperation}',
                    '• \\jump[https://en.wikipedia.org/wiki/Tetration]{}{Tetration}',
                    '• \\jump[https://de.wikipedia.org/wiki/Hyper-Operator]{}{Hyper-Operator}',
                    '• \\jump[https://de.wikipedia.org/wiki/Potenzturm]{}{Potenzturm}',
                    '\\bold{Fragen}',
                    '• Wie verändern sich die Anzahlen von einem Operator zur drunter liegenden Ebene?',
                    '– Bis zum Zählen: Dann müsste sich eine Differenz zur Zählbasis ergeben.',
                    '– Linksneutrales Element und rechtsneutrales Element über die Rückwärtsrechenarten allgemein definieren.',
                    '• Wie können wir aus dem Zählen berechnen, welcher Wert sich durch einen anderen Operator mit den gleichen Zahlen ergeben würde?',
                    '– Könnte hierbei das Video von Mathologer Aufschluss geben: \jump[https://www.youtube.com/watch?v=rGlpyFHfMgI]{}{The Moessner Miracle. Why wasn\'t this discovered for over 2000 years?}',
                    '\bold{Beispiele der Reduktion der Operatorzahl}',
                    '• Siehe Mathologer: \jump[https://www.youtube.com/watch?v=rGlpyFHfMgI]{}{The Moessner Miracle. Why wasn\'t this discovered for over 2000 years?}',
                    '– Hier wird insgesamt ein Zusammenhang aller Operatoren untereinander und mit dem Pascalschen Dreieck hergestellt, siehe auch Abschnitt \italic{\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:eFunktionPascalscheDreieck}}.',
                    '– Eines der interessantesten Videos, die ich kenne.',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Vortext:X', text =>
                                           
                'Herleitung der allgemeinen Operatoren Formeln', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Im Mathematikunterricht in der Oberstufe war mir aufgefallen, dass es Regelmäßigkeiten zwischen'."\n".
                    'den grundlegenden Operatoren der Arithmetik\\footnote{\\const{NSOSP_g_footnote_text_Arithmetik}} gibt.'."\n".
                    'Diese Verbinden die Addition, die Multiplikation und die Exponentialrechnung in einer'."\n".
                    'hierarchischen Reihenfolge.'."\n".
                    'In den folgenden Formeln kommt zum Ausdruck, dass der jeweils höhere Operator die Häufigkeit'."\n".
                    'der Verkettung mit seinem Einen niedrigeren Operator zählt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a \cdot b *) + a  =  a \cdot *( b + 1 *)  }'),
                      array( display => 'on',  latex => '{  a^{b} \cdot a  =  a^{b + 1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Definieren wir diese Operatoren mit natürlichen Zahlen wie folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a*o( 1 *o)b  :=  a + b  }',
                                               label_name => 'OM:OT:Einleitung:Vortext:Equ-Operator-1-ist-Addition', label_text => '\\name{OM:OT:Einleitung:Vortext:Equ-Operator-1-ist-Addition}', label_incr => true),
                      array( display => 'on',  latex => '{  a*o( 2 *o)b  :=  a \cdot b  }',
                                               label_name => 'OM:OT:Einleitung:Vortext:Equ-Operator-2-ist-Multiplikation', label_text => '\\name{OM:OT:Einleitung:Vortext:Equ-Operator-2-ist-Multiplikation}', label_incr => true),
                      array( display => 'on',  latex => '{  a*o( 3 *o)b  :=  a^{b}  }',
                                               label_name => 'OM:OT:Einleitung:Vortext:Equ-Operator-3-ist-Potenz', label_text => '\\name{OM:OT:Einleitung:Vortext:Equ-Operator-3-ist-Potenz}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'So können wir die eben festgestellte Regelmäßigkeit zwischen zwei aufeinander folgenden Operatoren'."\n".
                    'nun allgemein definieren:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a *o( x + 1 *o) b *) *o( x *o) a  :=  a *o( x + 1 *o) *( b + 1 *)  }',
                                               label_name => 'OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv', label_text => '\\name{OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wenn wir beschreiben, wofür diese Formel steht, dann können wir sagen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Der jeweils höhere Operator \\term{x + 1} beschreibt,'."\n".
                      'wie häufig – ausgedrückt durch \\term{b} – der niedrigere Operator \\term{x} einen identischen Wert \\term{a} verkettet.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'So erhalten wir eine relative, weil rekursive, Definition.'."\n",
                      'In Form von Beispielen sieht das dann so aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  + a + a + a  =  a \cdot 3  }'),
                      array( display => 'on',  latex => '{  \cdot a \cdot a \cdot a  =  a^{3}  }'),
                      array( display => 'on',  latex => '{  *( a^{a} *)^{a}  =  a *o( 4 *o) 3  }',
                                               label_name => 'OM:OT:Einleitung:Vortext:Equ-Tetration-Beispiel', label_text => '\\name{OM:OT:Einleitung:Vortext:Equ-Tetration-Beispiel}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Der vierte Operator, die niedere Tetration beziehungsweise der niedere Hyper-4-Operator,'."\n".
                    'ergibt sich auf diese Weise zu einer Verkettung von Exponenten.'."\n".
                    'Dabei setzen wir voraus, dass der Exponent-Operator als Vorzeichen von a, nämlich \\term{↑a},'."\n".
                    'das \\term{a} nicht verändert. Dies stellt sich im Folgenden durch'."\n".
                    'Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Absolut} als korrekt heraus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  a*o( 3 *o)1  =  *o( 2 *o)a  =  \cdot a  =  a  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a*o( 4 *o)1  =  *o( 3 *o)a  =  \uparrow a  =  a  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Gleiches gilt dann auch für das Mal als Vorzeichen, wie gleich verdeutlicht wurde.'."\n",
                      'Im Folgenden soll gelten, dass die Null ein Element der natürlichen Zahlen ist, wie in den Peano-Axiomen\\footnote{\\const{NSOSP_g_footnote_text_PeanoAxiome}} zur Definition von \\term{\M(N)} gefordert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{N}  :=  \mathbb{N}_{0}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So können wir anschließend einfacher definieren.'."\n",
                      'Den eben geschilderten Zusammenhang drücken wir nun als umgekehrte oder niedere Verkettung ›\\latexmath{ \circledcirc }‹ aus,'."\n".
                    'weil bei der üblichen Verkettung ›\\latexmath{ \circ }‹'."\n".
                    'die Funktionsschachtelung genau anders herum ist, als bei der hier beschriebenen.\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:KompositionMathematik:2022}, Definition.}'."\n".
                    'Die Klammerung erfolgt vom Beginn an, also im sogenannten niederen Bereich.'."\n".
                    'Das nachfolgende Glied der niederen Verkettung wird auf das Ergebnis aller vorherigen Glieder angewandt.'."\n".
                    'Da die Reihenfolge entscheidend ist, wird die Indizierung unter dem ›\\latexmath{ \circledcirc }‹, durch den ›\\latexmath{ \forall }‹ Operator, generell implizit vom kleinsten zum größten Element der Indexmenge vorgenommen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x \; \mapsto \; (f \circledcirc g)(x)  :=  g( f(x) )  }'),
                      array( display => 'on',  latex => '{  x \; \mapsto \;\; \underset{ \forall n \in \{ 1, 2, 3 \} }{ \LARGE{\circledcirc} } f_{n}  :=  x \; \mapsto \; (f_{1} \circledcirc f_{2} \circledcirc f_{3})(x)  \\\ \qquad\qquad\qquad\;\;  =  f_{3}( f_{2}( f_{1}(x) ) )  }',
                                               label_name => 'OM:OT:Einleitung:Vortext:Equ-niedere-Verkettung', label_text => '\\name{OM:OT:Einleitung:Vortext:Equ-niedere-Verkettung}', label_incr => true),
                      array( display => 'on',  latex => '{  a *o( x + 1 *o) b  :=  \underset{ (\forall n \in \mathbb{N})[0 \le n < b] }{ \LARGE{\circledcirc} } \;\; *o( x *o) a  }',
                                               label_name => 'OM:OT:Einleitung:Vortext:Equ-Operial-Absolut', label_text => '\\name{OM:OT:Einleitung:Vortext:Equ-Operial-Absolut}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Auf diese Weise gibt es eine klare absolute, weil explizite, Definition, die auch die Vorzeichen berücksichtigt.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Vortext:X', text =>
                                           
                'Genaue Betrachtung der niederen Tetration beziehungsweise des niederen Hyper-4-Operators', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Der auf die Exponentialrechnung folgende Operator ist die sogenannte ›niedere Tetration‹'."\n".
                    'oder der ›niedere Hyper-4-Operator‹.'."\n".
                    'Wie oben schon exemplarisch dargestellt, gilt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a^{a} *)^{a}  =  a*o( 4 *o)3  }',
                                               /* label_name => 'OM:OT:Einleitung:Vortext:Equ-Tetration-Beispiel', */label_text => '\\jumpname{OM:OT:Einleitung:Vortext:Equ-Tetration-Beispiel}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a^{a \cdot a}  =  a*o( 4 *o)3  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Aufgrund der Umformung durch Ersetzung der geschachtelten Exponenten mit deren Produkt im Exponenten'."\n".
                    'vereinfacht sich die allgemeine Formel für die ›niedere Tetration‹ zu einem Produkt im Exponenten,'."\n".
                    'das einen Faktoren weniger enthält, als \\term{a}\'s insgesamt da sind:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  a *o( 4 *o) b  =  a^{ *( a^{b - 1} *) }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a *o( 4 *o) 1  =  a^{ *( a^{0} *) }  =  a  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a *o( 4 *o) 0  =  a^{ *( a^{-1} *) }  =  a^{ \frac{1}{a} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Funktionsanalysis zeigt, dass sich die Funktion bei \\term{b → –∞} von oben der Eins nähert.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Aus arithmetisch systematischen, philosophischen und metaphysischen Gründen sind diese Konstruktionen'."\n".
                    'und deren Untersuchung von grundlegendem Erkenntniswert.'."\n".
                    ''))),
                    
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:OT:Einleitung:Inverse-Operatoren'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Inverse Operatoren  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:OT:Einleitung:Inverse-Operatoren',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Einleitung', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.Inv', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{   c  =  a *o( x *o) b  }'),
                      array( display => 'on',  latex => '{   \Leftrightarrow  c *r( x *r) b  :=  a  }',
                                               label_name => 'OM:OT:Einleitung:Inverse-Operatoren:Equ-x-Wurzel-Definition', label_text => '\\name{OM:OT:Einleitung:Inverse-Operatoren:Equ-x-Wurzel-Definition}', label_incr => true),
                      array( display => 'on',  latex => '{   \Leftrightarrow  c *l( x *l) a  :=  b  }',
                                               label_name => 'OM:OT:Einleitung:Inverse-Operatoren:Equ-x-Logarithmus-Definition', label_text => '\\name{OM:OT:Einleitung:Inverse-Operatoren:Equ-x-Logarithmus-Definition}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Der neue x-Wurzeloperator ohne Häkchen links und mit zwei Häkchen rechts symbolisiert,'."\n".
                    'dass der rechte Operand auf die andere Seite gebracht wurde.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Einleitung:Neutrale-Elemente'),
                    )),
                )
          ); ?>

          			
		    	<!  • Neutrale Elemente  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:OT:Einleitung:Neutrale-Elemente',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Einleitung:Inverse-Operatoren', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Verweis auf die Unterkapitel zu neutralen Elementen …'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Grundsätzlich gibt es vom Prinzip her immer zwei neutrale Elemente,'."\n".
                    'ein linkes und ein rechtes.'."\n".
                    'Bei der Addition und Multiplikation sind wegen der Vertauschbarkeit der Reihenfolge der Operanden beide immer gleich.'."\n".
                    'Bei den anderen Operatoren ist das nicht unbedingt der Fall.'."\n",
                      'Das linksseitig neutrale Element kann wie folgt durch den'."\n".
                    '\\jump{OM:OT:Einleitung:Inverse-Operatoren}{allgemeinen inversen Wurzeloperator} errechnet werden:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  {n_{links}} *o( x *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'so erhalten wir nach Formel \\jumpname{OM:OT:Einleitung:Inverse-Operatoren:Equ-x-Wurzel-Definition} durch Umformung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{links}  =  a *r( x *r) a  *]  .  }',
                                               label_name => 'OM:OT:Einleitung:Neutrale-Elemente:Equ-x-linksneutrales-Element', label_text => '\\name{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-linksneutrales-Element}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Die allgemeine x-Wurzel einer Zahl \\term{a} aus oder von sich selbst'."\n".
                    'ergibt also das linksseitige neutrale Element \\term{n__{links}}.'."\n",
                      'Das rechtsseitig neutrale Element kann wie folgt durch den'."\n".
                    '\\jump{OM:OT:Einleitung:Inverse-Operatoren}{allgemeinen inversen Logarithmusoperator} errechnet werden:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a *o( x *o) n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'so erhalten wir nach Formel \\jumpname{OM:OT:Einleitung:Inverse-Operatoren:Equ-x-Logarithmus-Definition} durch Umformung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{rechts}  =  a *l( x *l) a  *]  }',
                                               label_name => 'OM:OT:Einleitung:Neutrale-Elemente:Equ-x-rechtsneutrales-Element', label_text => '\\name{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-rechtsneutrales-Element}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Die allgemeine x-Logarithmus einer Zahl \\term{a} zur seiner eigenen Basis oder von sich selbst'."\n".
                    'ergibt also das linksseitige neutrale Element \\term{n__{rechts}}.'."\n",
                      'Dann schauen wir uns im Folgenden an, was sich für die konkreten Operatoren ergibt.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Neutrale-Elemente:X', text =>
                                           
                'Addition – neutrales Element', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Addition ist eine besondere Operation.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Linksseitig und rechtsseitig neutrales Element} \\\\'."\n".
                    'Wegen der Vertauschbarkeit ihrer Operanden, ihrer Kommutativität,'."\n".
                    'fallen beide neutralen Elemente zu einem zusammen:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  {n_{links}} *o( 1 *o) a  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a *o( 1 *o) n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operator-1-ist-Addition} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  {n_{links}} *o( 1 *o) a  =  n_{links} + a  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( 1 *o) n_{rechts}  =  a + n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'und'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  n_{links} + a  =  a + n_{rechts}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{links}  =  n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'substituieren wir'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  n  :=  n_{links}  =  n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'und es folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a + n  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  n  =  a - a  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  n  =  0  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wie bekannt, ergeben sich auf diese Weise beide neutralen Elemente zu Null.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Einbettung in neutrale Elemente} \\\\'."\n".
                    'Halten wir also unser jetziges \\term{a} fest, dann sieht seine Einbettung in'."\n".
                    'neutrale Elemente wie folgt aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  \cdots \; *o( 1 *o) 0 *o( 1 *o) 0 *o( 1 *o) a *o( 1 *o) 0 *o( 1 *o) 0 *o( 1 *o) \cdots  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  a  =  \cdots + 0 + 0 + a + 0 + 0 + \cdots  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Einbettung ist bei der Addition beidseitig, anders, als wir das später beim \\jump{OM:OT:Zaehloperator:Neutrale-Elemente:Null-Operator}{Null-Operator} sehen werden.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Die Additions-Einbettung verhält sich, naturphilosophisch interpretiert, ähnlich wie das Vakuum der Physik,'."\n".
                    'das zunächst neutral erscheint.'."\n".
                    'Diese „Neutralität“ ist der Grund, aus dem wir die Einbettung zunächst vereinfachend weglassen können.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Neutrale-Elemente:X', text =>
                                           
                'Multiplikation – neutrales Element', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Auch die Multiplikation ist eine besondere Operation.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Linksseitig und rechtsseitig neutrales Element} \\\\'."\n".
                    'Auch bei ihr fallen wegen der Vertauschbarkeit ihrer Operanden, ihrer Kommutativität,'."\n".
                    'beide neutralen Elemente zu einem zusammen:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  {n_{links}} *o( 2 *o) a  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a *o( 2 *o) n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operator-2-ist-Multiplikation} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  {n_{links}} *o( 2 *o) a  =  n_{links} \cdot a  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( 2 *o) n_{rechts}  =  a \cdot n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'und'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  n_{links} \cdot a  =  a \cdot n_{rechts}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{links}  =  n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'substituieren wir'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  n  :=  n_{links}  =  n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'und es folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a \cdot n  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  n  =  \frac{ a }{ a }  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  n  =  1  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wie bekannt, ergeben sich auf diese Weise beide neutralen Elemente zu Eins.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Einbettung in neutrale Elemente} \\\\'."\n".
                    'Halten wir also unser jetziges \\term{a} fest, dann sieht seine Einbettung in'."\n".
                    'neutrale Elemente wie folgt aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  \cdots \; *o( 2 *o) 1 *o( 2 *o) 1 *o( 2 *o) a *o( 2 *o) 1 *o( 2 *o) 1 *o( 2 *o) \cdots  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  a  =  \cdots \cdot 1 \cdot 1 \cdot a \cdot 1 \cdot 1 \cdot \cdots  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Einbettung ist bei der Addition beidseitig, anders, als wir das später beim \\jump{OM:OT:Zaehloperator:Neutrale-Elemente:Null-Operator}{Null-Operator} sehen werden.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Die Multiplikations-Einbettung verhält sich, naturphilosophisch interpretiert, ähnlich wie das Vakuum der Physik,'."\n".
                    'das zunächst neutral erscheint.'."\n".
                    'Diese „Neutralität“ ist der Grund, aus dem wir die Einbettung zunächst vereinfachend weglassen können.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Neutrale-Elemente:X', text =>
                                           
                'Potenz – neutrale Elemente', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Da bei der Potenz im Allgemeinen die Operanden nicht vertauschbar sind'."\n".
                    'unterscheidet sich das linksseitige neutrale Element der Operation vom rechtsseitigen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Linksseitig neutrales Element} \\\\'."\n".
                    'Um das linksseitig neutrale Element der Potenz zu bestimmen, setzen wir den Potenz-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-linksneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  {n_{links}} *o( 3 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operator-3-ist-Potenz} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  {n_{links}} *o( 3 *o) a  =  {n_{links}}^a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  {n_{links}}^a  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{links}  =  \sqrt[a]{a}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'mit \\term{n__{links}} in Abhängigkeit von \\term{a}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{links}(a)  =  \sqrt[a]{a}  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die linksseitig neutralen Elemente \\term{n__{links}(a)} der Potenz sind von \\term{a} abhängig'."\n".
                    'und unterscheiden sich so im Allgemeinen voneinander.'."\n",
                      'Dies gilt auch für alle linksseitig neutralen Element der Operatoren größer als Drei, wie noch zu zeigen ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Rechtsseitig neutrales Element} \\\\'."\n".
                    'Um das rechtsseitig neutrale Element der Potenz zu bestimmen, setzen wir den Potenz-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-rechtsneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a *o( 3 *o) n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operator-3-ist-Potenz} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( 3 *o) n_{rechts}  =  a^{n_{rechts}}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a^{n_{rechts}}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{rechts}  =  log_{a} a  =  1  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wie bekannt, ergibt sich das rechtsseitig neutrale Element auf diese Weise zu Eins.'."\n",
                      'Dies gilt auch für alle rechtsseitig neutralen Element der Operatoren größer als Drei, wie noch zu zeigen ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Einbettung in neutrale Elemente} \\\\'."\n".
                    'Halten wir also unser jetziges \\term{a} fest, dann sieht seine Einbettung in'."\n".
                    'neutrale Elemente wie folgt aus – \\term{*a*} mit Sternchen markiert, damit wir es besser finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  \cdots \; *o( 3 *o) *( *( a *r( 3 *r) a *) *r( 3 *r) *( a *r( 3 *r) a *) *) \\\ \qquad\qquad\qquad\quad\;\; *o( 3 *o) \, *( a *r( 3 *r) a *) *o( 3 *o) *( *a* *) *o( 3 *o) 1 *o( 3 *o) 1 *o( 3 *o) \cdots  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  a  =  *( *( *( *( \cdots *)^\sqrt[a]{a} *)^{ *a* } *)^1 *)^\cdots  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Eine tiefere Einbettung ist hier aus technischen Gründen leider nicht darstellbar.'."\n",
                      'Sie ist bei der Potenz beidseitig, anders, als wir das gleich beim \\jump{OM:OT:Zaehloperator:Neutrale-Elemente:Null-Operator}{Null-Operator} sehen werden.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Die Potenz-Einbettung verhält sich, naturphilosophisch interpretiert, ähnlich wie das Vakuum der Physik,'."\n".
                    'das zunächst neutral erscheint.'."\n".
                    'Diese „Neutralität“ ist der Grund, aus dem wir die Einbettung zunächst vereinfachend weglassen können.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Einleitung:Eigenschaften'),
                    )),
                )
          ); ?>

          			
		    	<!  • Eigenschaften  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:OT:Einleitung:Eigenschaften',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Einleitung:Neutrale-Elemente', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.Eig', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{   *( \forall x \in \mathbb{N} *) *[  *o( x *o) 2 *o( x *o) 2  =  4  *]  }'),
                      array( display => 'on',  latex => '{   *o( -1 *o) 2 *o( -1 *o) 2  =  3  }'),
                      array( display => 'on',  latex => '{   *( \forall x \in \mathbb{N} \setminus \{0,1\} *) *[  *o( -x *o) 2 *o( -x *o) 2  =  2  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten'),
                    )),
                )
          ); ?>

          			
		    	<!  • Andere Möglichkeiten  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:OT:Einleitung:Andere-Moeglichkeiten',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Einleitung:Eigenschaften', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Hier wollen wir einmal experimentell andere Möglichkeiten untersuchen.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Die rekursive Definition \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv}'."\n".
                    'ist nämlich auch mit Vorzeichen möglich:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.AM', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( *o( x + 1 *o) a *o( x + 1 *o) b *) *o( x *o) a  :=  *o( x + 1 *o) a *o( x + 1 *o) *( b + 1 *)  }',
                                               label_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:Equ-Operial-Rekursiv-mit-Vorzeichen', label_text => '\\name{OM:OT:Einleitung:Andere-Moeglichkeiten:Equ-Operial-Rekursiv-mit-Vorzeichen}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Dann sehen die kleineren Operatoren anders aus …'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:X', text =>
                                           
                'Was ist dann der Null-Operator?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Interessant ist nun die Funktion des Null-Operators.'."\n".
                    'Er muss zum Beispiel die folgende Formel erfüllen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.AM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( 0 *o) a *o( 0 *o) a *o( 0 *o) a  =  a *o( 1 *o) 3  =  a + 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( *o( 0 *o) a *) *o( 0 *o) a *) *o( 0 *o) a  =  a + 3  }'),
                      array( display => 'on',  latex => '{  *( *o( 1 *o) a *o( 1 *o) b *) *o( 0 *o) a  :=  *o( 1 *o) a *o( 1 *o) *( b + 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Durch die Klammerung haben wir noch einmal deutlich gemacht, in welcher Reihenfolge die Operatoren abzuarbeiten sind.'."\n",
                      'Da drei Mal der Null-Operator auf ein beliebiges \\term{a} angewandt wird und dies insgesamt \\term{a} um Drei'."\n".
                    'erhöhen soll, kann es nur so sein, dass jeder Operator das Ergebnis um Eins erhöht.'."\n".
                    'Das bedeutet dann, wenn \\term{c} das Ergebnis aller vorherigen Operationen ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.AM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *o( 0 *o) a  =  a *o( 1 *o) 1  =  a + 1  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c *o( 0 *o) a  =  c *o( 1 *o) 1  =  c + 1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n",
                      'Ist der Null-Operator ein Vorzeichen, dann erhöht er die nach ihm stehende Zahl, also die rechts stehende, um Eins.'."\n".
                    'Steht der Null-Operator zwischen zwei Zahlen, dann erhöht er die vor ihm stehende Zahl, also die links stehende, um Eins.'."\n".
                    'Die nachfolgende Zahl, die rechts stehende, hat darauf keinen Einfluss.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Der Null-Operator ist ein Inkrement- oder Zähl-Operator.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Das Zählen ist in der Arithmetik, ja in der ganzen Mathematik, von zentraler Bedeutung.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, im Rahmen der Zeit, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n",
                      'Dies ist also identisch mit der Version ohne zusätzlichem Vorzeichen in der rekursiven Definition.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:X', text =>
                                           
                'Was ist dann der Minus-Eins-Operator?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Interessant ist nun auch noch die Funktion des Minus-Eins-Operators.'."\n".
                    'Er muss zum Beispiel die folgenden Formeln erfüllen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.AM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( -1 *o) a *o( -1 *o) a  =  a *o( 0 *o) 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *o( -1 *o) a *) *o( -1 *o) a  =  a + 1  }'),
                      array( display => 'on',  latex => '{  *o( -1 *o) a *o( -1 *o) a *o( -1 *o) a  =  a *o( 0 *o) 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( *o( -1 *o) a *) *o( -1 *o) a *) *o( -1 *o) a  =  a + 1  }'),
                      array( display => 'on',  latex => '{  *( *o( 0 *o) a *o( 0 *o) b *) *o( -1 *o) a  :=  *o( 0 *o) a *o( 0 *o) *( b + 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Durch die Klammerung haben wir noch einmal deutlich gemacht, in welcher Reihenfolge die Operatoren abzuarbeiten sind.'."\n",
                      'Da zwei und drei Mal der Minus-Eins-Operator auf ein beliebiges \\term{a} angewandt wird und dies insgesamt \\term{a} immer genau um Eins'."\n".
                    'erhöhen soll, kann es nur so sein, dass der erste Operator als Vorzeichen das Ergebnis bestimmt.'."\n".
                    'Das bedeutet dann, wenn \\term{c} das Ergebnis aller vorherigen Operationen ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.AM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *o( -1 *o) a  =  *o( 0 *o) a  =  a + 1  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c *o( -1 *o) a  =  c  \neq  c *o( 0 *o) a  =  c + 1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n",
                      'Ist der Minus-Eins-Operator ein Vorzeichen, dann erhöht er die nach ihm stehende Zahl, also die rechts stehende, um Eins.'."\n".
                    'Steht der Minus-Eins-Operator zwischen zwei Zahlen, dann ändert dies nichts am Ergebnis.'."\n".
                    'Die nachfolgende Zahl, die rechts stehende, hat darauf dann natürlich auch keinen Einfluss.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Der Minus-Eins-Operator ist nur als Vorzeichen ein Inkrement- oder Zähl-Operator.'."\n".
                      'Als Operator zwischen zwei Zahlen ist er neutral.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Damit ähnelt er dem Null-Operator, ist ihm aber nicht in jedem Fall gleich.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n",
                      'Auch hier macht die Version mit zusätzlichem Vorzeichen keinen Unterschied.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:X', text =>
                                           
                'Was ist dann der Minus-Zwei-Operator?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Interessant ist nun auch noch die Funktion des Minus-Zwei-Operators.'."\n".
                    'Er muss zum Beispiel die folgende Formel erfüllen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.AM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( -2 *o) a *o( -2 *o) a  =  a *o( -1 *o) 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *o( -2 *o) a *) *o( -2 *o) a  =  a  }'),
                      array( display => 'on',  latex => '{  *o( -2 *o) a *o( -2 *o) a *o( -2 *o) a  =  a *o( -1 *o) 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( *o( -2 *o) a *) *o( -2 *o) a *) *o( -2 *o) a  =  a  }'),
                      array( display => 'on',  latex => '{  *( *o( -1 *o) a *o( -1 *o) b *) *o( -2 *o) a  :=  *o( -1 *o) a *o( -1 *o) *( b + 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Durch die Klammerung haben wir noch einmal deutlich gemacht, in welcher Reihenfolge die Operatoren abzuarbeiten sind.'."\n",
                      'Der Minus-Zwei-Operator, auf ein beliebiges \\term{a} angewandt, ändert an \\term{a} nie etwas;'."\n".
                    'weder als Vorzeichen, noch als Operator zwischen Zahlen.'."\n".
                    'Das bedeutet dann, wenn \\term{c} das Ergebnis aller vorherigen Operationen ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.AM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *o( -2 *o) a  =  a  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c *o( -2 *o) a  =  c  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Der Minus-Zwei-Operator ist völlig neutral.'."\n".
                      'Damit sind alle noch kleineren Operatoren auch neutral.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Damit ähnelt er dem Minus-Eins-Operator, ist ihm aber nicht in jedem Fall gleich.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n",
                      'Ebenso hier macht die Version mit zusätzlichem Vorzeichen keinen Unterschied.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:X', text =>
                                           
                'Die Versionen ohne und mit zusätzlichem Vorzeichen in der rekursiven Definition sind identisch', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Formeln \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv} und \\jumpname{OM:OT:Einleitung:Andere-Moeglichkeiten:Equ-Operial-Rekursiv-mit-Vorzeichen}'."\n".
                    'sind also äquivalent:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.AM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a *o( x + 1 *o) b *) *o( x *o) a  :=  a *o( x + 1 *o) *( b + 1 *)  }',
                                               /* label_name => 'OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv', */label_text => '\\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv}', label_incr => false),
                      array( display => 'on',  latex => '{  \\Leftrightarrow  *( *o( x + 1 *o) a *o( x + 1 *o) b *) *o( x *o) a  :=  *o( x + 1 *o) a *o( x + 1 *o) *( b + 1 *)  }',
                                               /* label_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:Equ-Operial-Rekursiv-mit-Vorzeichen', */label_text => '\\jumpname{OM:OT:Einleitung:Andere-Moeglichkeiten:Equ-Operial-Rekursiv-mit-Vorzeichen}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dies gilt dann auch für die absolute Definition der Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Absolut}.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  /* array( 'headline', array( jump_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:X', text =>
                                           
                '(In Arbeit …)')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))), */
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Zaehloperator'),
                    )),
                )
          ); ?>

          			
    <?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
