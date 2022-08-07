<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Einleitung'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:OT:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{Zu tun}',
                    '•o Fähnchen unten an die Klammern setzen.',
                    '\\bold{Erzählung}',
                    '• Erwähnen, dass es zwei Möglichkeiten gibt.',
                    '\\bold{Zähloperator \\term{0}}',
                    '• Linksneutrales Element:',
                    '– Ist immer einen kleiner:',
                    '⋅ Kann gedeutet werden als, dass es immer vom Kleineren hierher gekommen ist! Dass dies immer möglich ist.',
                    '• Rechtsneutrales Element:',
                    '- Existiert nicht:',
                    '⋅ Kann gedeutet werden als, dass das Zählen oder die Zeit immer weiter gehen muss. Sie kann nicht anhalten!',
                    '• Philosophische und physikalische Bedeutung:',
                    '– Das Zählen entspricht dem immerwährenden Fortschritt der Zeit. Das Immerwährende können wir daran erkennen, dass in der Operialtheorie kein rechtsneutrales Element existiert.',
                    '–o Die Konstanz des Zählens erkennen wir daran, dass der Wert der rechts stehenden Zahl keinen Einfluss auf das Zählen hat, sondern nur ihre Existenz. Der Null-Operator kann folglich zur Überprüfung der Existenz einer Zahl genutzt werden.',
                    '⋅o a *o( 0 *o) b = a + 1  ⇒  ∃ b',
                    '– Das Nachzeichen ist physikalisch wie eine Hülle, die erst einmal neutral ist:',
                    '⋅ Hängen sich dort rechte Operanden rein, dann passiert etwas und die neue Hülle verschiebt sich nach rechts hinter den neuen Operanden.',
                    '\\bold{Operator \\term{-1}}',
                    '• Nur als Vorzeichen zählt der einen hoch.',
                    '• Als Verbindungsoperator ändert er nichts.',
                    '\\bold{Operator \\term{-2}}',
                    '• Ändert grundsätzlich nichts.',
                    '\\bold{Literatur}',
                    '• \\jump[https://en.wikipedia.org/wiki/Hyperoperation]{}{Hyperoperation}',
                    '• \\jump[https://en.wikipedia.org/wiki/Tetration]{}{Tetration}',
                    '• \\jump[https://de.wikipedia.org/wiki/Hyper-Operator]{}{Hyper-Operator}',
                    '• \\jump[https://de.wikipedia.org/wiki/Potenzturm]{}{Potenzturm}',
                    '\\bold{Fragen}',
                    '• Wie verändern sich die Anzahlen von einem Operator zur drunter liegenden Ebene?',
                    '– Bis zum Zählen: Dann müsste sich eine Differenz zur Zählbasis ergeben.',
                    '– Linksneutrales Element und rechtsneutrales Element über die Rückwärtsrechenarten allgemein definieren.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Vortext:XXX', text =>
                                           
                'Herleitung der allgemeinen Operatoren Formeln', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Im Mathematikunterricht in der Oberstufe war mir aufgefallen, dass es Regelmäßigkeiten zwischen'."\n".
                    'den grundlegenden Operatoren der Arithmetik\\color{*Bearb}{(Link zu Wikipedia)} gibt.'."\n".
                    'Diese Verbinden die Addition, die Multiplikation und die Exponentialrechnung in einer'."\n".
                    'hierarchischen Reihenfolge:'."\n".
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
                      
                  array( 'text', array( Shape  => 'italic', text => array(
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
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{N}  :=  \mathbb{N}_{0}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So können wir anschließend einfacher definieren.'."\n",
                      'Den eben geschilderten Zusammenhang drücken wir nun als umgekehrte Verkettung ›𓇳‹ aus, weil bei dieser Verkettung'."\n".
                    'die Funktionsschachtelung genau anders herum ist als die übliche ›∘‹.\\color{*Bearb}{(Link zu Wikipedia\\footnote{https://de.wikipedia.org/wiki/Komposition_(Mathematik), https://de.wikipedia.org/wiki/Verkettungszeichen})}'."\n".
                    'Das nachfolgende Glied der Verkettung wird auf das Ergebnis aller vorherigen Glieder angewandt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x \mapsto (f \circledcirc g)(x)  :=  g( f(x) )  }'),
                      array( display => 'on',  latex => '{  \underset{\forall n \in [1,2,3]}{\huge{\circledcirc}} \;\; f_{n}  :=  f_{1} \circledcirc f_{2} \circledcirc f_{3}  =  f_{3}( f_{2}( f_{1}(x) ) )  }'),
                      array( display => 'on',  latex => '{  a *o( x + 1 *o) b  :=  \underset{(\forall n \in \mathbb{N})[0 \le n < b]}{\huge{\circledcirc}} \;\; *o( x *o) a  }',
                                               label_name => 'OM:OT:Einleitung:Vortext:Equ-Operial-Absolut', label_text => '\\name{OM:OT:Einleitung:Vortext:Equ-Operial-Absolut}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Auf diese Weise gibt es eine klare absolute, weil explizite, Definition, die auch die Vorzeichen berücksichtigt.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Vortext:XXX', text =>
                                           
                'Was ist der Null-Operator?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Interessant ist nun die Funktion des Null-Operators.'."\n".
                    'Er muss zum Beispiel die folgende Formel erfüllen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( 0 *o) a *o( 0 *o) a *o( 0 *o) a  =  a *o( 1 *o) 3  =  a + 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( *o( 0 *o) a *) *o( 0 *o) a *) *o( 0 *o) a  =  a + 3  }'),
                      array( display => 'on',  latex => '{  *( a *o( 1 *o) b *) *o( 0 *o) a  :=  a *o( 1 *o) *( b + 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Durch die Klammerung haben wir noch einmal deutlich gemacht, in welcher Reihenfolge die Operatoren abzuarbeiten sind.'."\n",
                      'Da drei Mal der Null-Operator auf ein beliebiges \\term{a} angewandt wird und dies insgesamt \\term{a} um Drei'."\n".
                    'erhöhen soll, kann es nur so sein, dass jeder Operator das Ergebnis um Eins erhöht.'."\n".
                    'Das bedeutet dann, wenn \\term{c} das Ergebnis aller vorherigen Operationen ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *o( 0 *o) a  =  a *o( 1 *o) 1  =  a + 1  }',
                                               label_name => 'OM:OT:Einleitung:Vortext:Equ-Vorzeichen-Null-OP-ist-plus-Eins', label_text => '\\name{OM:OT:Einleitung:Vortext:Equ-Vorzeichen-Null-OP-ist-plus-Eins}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  c *o( 0 *o) a  =  c *o( 1 *o) 1  =  c + 1  }',
                                               label_name => 'OM:OT:Einleitung:Vortext:Equ-Null-OP-ist-plus-Eins', label_text => '\\name{OM:OT:Einleitung:Vortext:Equ-Null-OP-ist-plus-Eins}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n",
                      'Ist der Null-Operator ein Vorzeichen, dann erhöht er die nach ihm stehende Zahl, also die rechts stehende, um Eins.'."\n".
                    'Steht der Null-Operator zwischen zwei Zahlen, dann erhöht er die vor ihm stehende Zahl, also die links stehende, um Eins.'."\n".
                    'Die nachfolgende Zahl, die rechts stehende, hat darauf keinen Einfluss.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Der Null-Operator ist ein Inkrement- oder Zähl-Operator.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Das Zählen ist in der Arithmetik, ja in der ganzen Mathematik, von zentraler Bedeutung.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, im Rahmen der Zeit, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n",
                      'So lässt sich Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv} konsequenterweise nun wie folgt darstellen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a*o( *o( 0 *o)x *o)b *)*o( x *o)a  :=  a*o( *o( 0 *o)x *o)*( *o( 0 *o)b *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die rekursive Definition des Zusammenhangs zwischen den Operatoren kann jetzt also auch ausschließlich'."\n".
                    'durch die neuen Operatoren formuliert werden.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Vortext:XXX', text =>
                                           
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
                      array(  jump_name => 'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Minus-Eins-Operator und Minus-Zwei-Operator  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Einleitung', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:XXX', text =>
                                           
                'Was ist der Minus-Eins-Operator?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Interessant ist nun auch noch die Funktion des Minus-Eins-Operators.'."\n".
                    'Er muss zum Beispiel die folgenden Formeln erfüllen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.MO', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( -1 *o) a *o( -1 *o) a  =  a *o( 0 *o) 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *o( -1 *o) a *) *o( -1 *o) a  =  a + 1  }'),
                      array( display => 'on',  latex => '{  *o( -1 *o) a *o( -1 *o) a *o( -1 *o) a  =  a *o( 0 *o) 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( *o( -1 *o) a *) *o( -1 *o) a *) *o( -1 *o) a  =  a + 1  }'),
                      array( display => 'on',  latex => '{  *( a *o( 0 *o) b *) *o( -1 *o) a  :=  a *o( 0 *o) *( b + 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Durch die Klammerung haben wir noch einmal deutlich gemacht, in welcher Reihenfolge die Operatoren abzuarbeiten sind.'."\n",
                      'Da zwei und drei Mal der Minus-Eins-Operator auf ein beliebiges \\term{a} angewandt wird und dies insgesamt \\term{a} immer genau um Eins'."\n".
                    'erhöhen soll, kann es nur so sein, dass der erste Operator als Vorzeichen das Ergebnis bestimmt.'."\n".
                    'Das bedeutet dann, wenn \\term{c} das Ergebnis aller vorherigen Operationen ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.MO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *o( -1 *o) a  =  *o( 0 *o) a  =  a + 1  }',
                                               label_name => 'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-Vorzeichen-Minus-Eins-a', label_text => '\\name{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-Vorzeichen-Minus-Eins-a}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  c *o( -1 *o) a  =  c  \neq  c *o( 0 *o) a  =  c + 1  }',
                                               label_name => 'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-c-Minus-Eins-a-ist-c', label_text => '\\name{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-c-Minus-Eins-a-ist-c}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n",
                      'Ist der Minus-Eins-Operator ein Vorzeichen, dann erhöht er die nach ihm stehende Zahl, also die rechts stehende, um Eins.'."\n".
                    'Steht der Minus-Eins-Operator zwischen zwei Zahlen, dann ändert dies nichts am Ergebnis.'."\n".
                    'Die nachfolgende Zahl, die rechts stehende, hat darauf dann natürlich auch keinen Einfluss.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Der Minus-Eins-Operator ist nur als Vorzeichen ein Inkrement- oder Zähl-Operator.'."\n".
                      'Als Operator zwischen zwei Zahlen ist er neutral.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Damit ähnelt er dem Null-Operator, ist ihm aber nicht in jedem Fall gleich.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:XXX', text =>
                                           
                'Was ist der Minus-Zwei-Operator?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Interessant ist nun auch noch die Funktion des Minus-Zwei-Operators.'."\n".
                    'Er muss zum Beispiel die folgende Formel erfüllen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.MO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( -2 *o) a *o( -2 *o) a  =  a *o( -1 *o) 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *o( -2 *o) a *) *o( -2 *o) a  =  a  }'),
                      array( display => 'on',  latex => '{  *o( -2 *o) a *o( -2 *o) a *o( -2 *o) a  =  a *o( -1 *o) 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( *o( -2 *o) a *) *o( -2 *o) a *) *o( -2 *o) a  =  a  }'),
                      array( display => 'on',  latex => '{  *( a *o( -1 *o) b *) *o( -2 *o) a  :=  a *o( -1 *o) *( b + 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Durch die Klammerung haben wir noch einmal deutlich gemacht, in welcher Reihenfolge die Operatoren abzuarbeiten sind.'."\n",
                      'Der Minus-Zwei-Operator, auf ein beliebiges \\term{a} angewandt, ändert an \\term{a} nie etwas;'."\n".
                    'weder als Vorzeichen, noch als Operator zwischen Zahlen.'."\n".
                    'Das bedeutet dann, wenn \\term{c} das Ergebnis aller vorherigen Operationen ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.MO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *o( -2 *o) a  =  a  }',
                                               label_name => 'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-Vorzeichen-Minus-Zwei-a', label_text => '\\name{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-Vorzeichen-Minus-Zwei-a}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  c *o( -2 *o) a  =  c  }',
                                               label_name => 'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-c-Minus-Zwei-a-ist-c', label_text => '\\name{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-c-Minus-Zwei-a-ist-c}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Ist der Minus-Zwei-Operator ist völlig neutral.'."\n".
                      'Damit sind alle noch kleineren Operatoren auch neutral.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Damit ähnelt er dem Minus-Eins-Operator, ist ihm aber nicht in jedem Fall gleich.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:XXX', text =>
                                           
                'Der Beginn des Zählens', subline =>
                  'Wie kommen wir von den kleinen, neutralen Operatoren zum Zählen?')),
                  array( 'text', array( text => array(
                    'Wenn der Minus-Zwei-Operator und alle kleineren demnach nun völlig neutral sind, wie fängt das Zählen'."\n".
                    'dann an?'."\n",
                      'Von den kleinen, neutralen Operatoren her gedacht bleibt uns nichts anderes übrig, als einen von ihren'."\n".
                    'Vorzeichen als das erste Zählen zu definieren:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.MO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( -1 *o) a  :=  a + 1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Ohne diesen ersten Funken des Lichts, scheinbar aus dem Nichts, tut sich nichts!'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Einleitung:Inverse-Operatoren'),
                    )),
                )
          ); ?>

          
		    	<!  • Inverse Operatoren  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:OT:Einleitung:Inverse-Operatoren',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
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
                    'dass der rechte Operand auf die andere Seite gebracht wurde.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
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
                    'ergibt also das linksseitige neutrale Element \\term{n_{links}}.'."\n",
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
                    'ergibt also das linksseitige neutrale Element \\term{n_{rechts}}.'."\n",
                      'Dann schauen wir uns im Folgenden an, was sich für die konkreten Operatoren ergibt.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Neutrale-Elemente:XXX', text =>
                                           
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
                    'Die Einbettung ist bei der Addition beidseitig, anders, als wir das später beim \\jump{OM:OT:Einleitung:Neutrale-Elemente:Null-Operator}{Null-Operator} sehen werden.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Die Additions-Einbettung verhält sich, naturphilosophisch interpretiert, ähnlich wie das Vakuum der Physik,'."\n".
                    'das zunächst neutral erscheint.'."\n".
                    'Diese „Neutralität“ ist der Grund, aus dem wir die Einbettung zunächst vereinfachend weglassen können.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Neutrale-Elemente:XXX', text =>
                                           
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
                    'Die Einbettung ist bei der Addition beidseitig, anders, als wir das später beim \\jump{OM:OT:Einleitung:Neutrale-Elemente:Null-Operator}{Null-Operator} sehen werden.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Die Multiplikations-Einbettung verhält sich, naturphilosophisch interpretiert, ähnlich wie das Vakuum der Physik,'."\n".
                    'das zunächst neutral erscheint.'."\n".
                    'Diese „Neutralität“ ist der Grund, aus dem wir die Einbettung zunächst vereinfachend weglassen können.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Neutrale-Elemente:XXX', text =>
                                           
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
                      'mit \\term{n_{links}} in Abhängigkeit von \\term{a}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{links}(a)  =  \sqrt[a]{a}  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die linksseitig neutralen Elemente \\term{n_{links}(a)} der Potenz sind von \\term{a} abhängig'."\n".
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
                      'Sie ist bei der Potenz beidseitig, anders, als wir das gleich beim \\jump{OM:OT:Einleitung:Neutrale-Elemente:Null-Operator}{Null-Operator} sehen werden.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Die Potenz-Einbettung verhält sich, naturphilosophisch interpretiert, ähnlich wie das Vakuum der Physik,'."\n".
                    'das zunächst neutral erscheint.'."\n".
                    'Diese „Neutralität“ ist der Grund, aus dem wir die Einbettung zunächst vereinfachend weglassen können.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Neutrale-Elemente:Null-Operator', text =>
                                           
                'Neutrale Elemente des Null-Operators', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die links- und rechtsseitigen neutralen Elemente des Null-Operators weisen'."\n".
                    'Besonderheiten auf, die andere Operatoren nicht besitzen.'."\n".
                    'Das verleiht dem Null-Operator auch eine außergewöhnliche naturphilosophische Bedeutung.'."\n",
                      'Da beim Null-Operator im Allgemeinen die Operanden nicht vertauschbar sind'."\n".
                    'unterscheidet sich das linksseitige neutrale Element der Operation vom rechtsseitigen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Linksseitig neutrales Element} \\\\'."\n".
                    'Um das linksseitig neutrale Element des Null-Operators zu bestimmen, setzen wir den Null-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-linksneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  {n_{links}} *o( 0 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Null-OP-ist-plus-Eins} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  {n_{links}} *o( 0 *o) a  =  n_{links} + 1  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  n_{links} + 1  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{links}  =  a - 1  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'mit \\term{n_{links}} in Abhängigkeit von \\term{a}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{links}(a)  =  a - 1  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die linksseitig neutralen Elemente \\term{n_{links}(a)} des Null-Operators sind von \\term{a} abhängig'."\n".
                    'und unterscheiden sich so voneinander.'."\n",
                      'Wir sehen, dass das linksseitig neutrale Element aus dem Zählen geboren ist und'."\n".
                    'immer den Vorgänger unserer Zahl \\term{a} darstellt.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Rechtsseitig neutrales Element} \\\\'."\n".
                    'Um das rechtsseitig neutrale Element des Null-Operators zu bestimmen, setzen wir den Null-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-rechtsneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a *o( 0 *o) n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Null-OP-ist-plus-Eins} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( 0 *o) n_{rechts}  =  a + 1  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a + 1  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists n_{rechts} *) *( \forall a \in \mathbb{R}  *) *[  a  =  a + 1  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können erkennen, dass es kein rechtsseitig neutrales Element des Null-Operators gibt.'."\n".
                    'Es existiert nicht, weil jede Zahl \\term{n_{rechts}} unser \\term{a} um einen hoch zählt.'."\n".
                    'Es gibt keine Zahl \\term{n_{rechts}}, die unser \\term{a} nicht verändert.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Einbettung in neutrale Elemente} \\\\'."\n".
                    'Halten wir also unser jetziges \\term{a} fest, dann sieht seine Einbettung in'."\n".
                    'neutrale Elemente wie folgt aus – \\term{*a*} mit Sternchen markiert, damit wir es besser finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  \cdots *( a - 3 *) *o( 0 *o) *( a - 2 *) *o( 0 *o) *( a - 1 *) *o( 0 *o) {*a*}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auf der rechten Seite von \\term{a} existiert kein neutrales Element und daher auch keine Einbettung,'."\n".
                    'was sehr bemerkenswert ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Perspektive der Logik} \\\\'."\n".
                    'Interessanterweise können wir, dazu passend, bei kluger, weil plausibler, Definition der Operatoren als Nachzeichen,'."\n".
                    'mit dem Null-Operator dann auch überprüfen, ob eine Zahl \\term{q} existiert.\\footnote{Nachfolgende Definition und Herleitungen mit Raimund Welsch erschaffen.}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Für alle Operatoren \\term{x} soll gelten, dass der dem Operator als Nachzeichen'."\n".
                    'virtuell folgende Operand dem rechtsneutralen Element \\term{n_{x,rechts}} des Operators entspricht.'."\n".
                    'Sollte es kein rechtsneutrales Element geben, wie beim Null-Operator, dann ist dieser Operand \\term{n_{x,rechts}} eben nicht existent:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Wir definieren'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x \in \mathbb{Z}  *) *( \forall a, n_{x,rechts} \in \mathbb{R}  *) *[  a *o( x *o)  :=  a *o( x *o) n_{x,rechts}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall x \in \mathbb{Z}  *) *( \forall a \in \mathbb{R}  *) *[  a *o( x *o)  :=  a  *]  ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'dann gilt insbesondere'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( 0 *o)  =  a  *]  .  }',
                                               label_name => 'OM:OT:Einleitung:Neutrale-Elemente:Equ-Nachzeichen-Null-OP', label_text => '\\name{OM:OT:Einleitung:Neutrale-Elemente:Equ-Nachzeichen-Null-OP}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Für'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \nexists q \in \mathbb{R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'muss wegen \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-Nachzeichen-Null-OP} gelten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( 0 *o) q  =  a  *]  .  }',
                                               label_name => 'OM:OT:Einleitung:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert-nicht', label_text => '\\name{OM:OT:Einleitung:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert-nicht}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Umgekehrt folgt aus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert-nicht} die Nicht-Existenz von \\term{q}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \nexists q \in \mathbb{R}  \;\;  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Für'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists q \in \mathbb{R} *) *( \forall q \in \mathbb{R} *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'muss wegen \\jumpname{OM:OT:Einleitung:Vortext:Equ-Null-OP-ist-plus-Eins} gelten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( 0 *o) q  =  a + 1  *]  .  }',
                                               label_name => 'OM:OT:Einleitung:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert', label_text => '\\name{OM:OT:Einleitung:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Umgekehrt folgt aus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert} die Existenz von \\term{q} und das alle möglich sind:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists q \in \mathbb{R} *) *( \forall q \in \mathbb{R} *)  \;\;  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies gilt so allgemein für alle \\term{q}, weil es nicht darauf ankommt, was \\term{q} ist,'."\n".
                    'sondern es kommt nur darauf an, ob es existiert.'."\n",
                      'Wir können mit Hilfe unseres Null-Operators also allgemeine Aussagen über die logische Existenz einer Zahl machen,'."\n".
                    'ganz unabhängig davon, welche es ist.'."\n".
                    'Wir spannen also damit auch einen Raum aller Möglichkeiten auf.'."\n".
                    'Auch deshalb ist unser Null-Operator wirklich etwas ganz besonderes.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Äquivalenter Vorgänger} \\\\'."\n".
                    'Im Null-Operator haben wir das Zählen im Vorzeichen und im angehängten Operator mit beliebigem Operanden.'."\n".
                    'Bezüglich des Vorzeichens gilt für den äquivalenten Vorgänger:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( 0 *o) a  =   v *o( 0 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formeln \\jumpname{OM:OT:Einleitung:Vortext:Equ-Vorzeichen-Null-OP-ist-plus-Eins} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( 0 *o) a  =  a + 1  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  c *o( 0 *o) a  =  c + 1  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  v  =   a  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Es ist also ein Unterschied, ob bei der Einbettung die Veränderung durch das Vorzeichen von \\term{a} mit erhalten werden soll oder nicht.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Betrachten wir das Zählen mit dem Null-Operator naturphilosophisch aus einer zeitlichen Perspektive,'."\n".
                    'dann können wir unser festgehaltenes oder festgelegtes \\term{a} als die Gegenwart verstehen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Diese Gegenwart unserer Zahl \\term{a} hat eine Historie in die sie eingebettet ist, aus der sie folgt.'."\n".
                      'Aber sie hat noch keine Zukunft.'."\n".
                      'Ihre Zukunft wird erst durch den Prozess des Zählens, durch das Anhängen eines weiteren Zähloperators'."\n".
                      'mit einer beliebigen Zahl, einer beliebigen Existenz, erschaffen.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Unser Null-Operator hat also bedeutende zeitliche Qualitäten.'."\n",
                      'Interpretieren wir die Null-Operator-Einbettung naturphilosophisch und vergleichen sie, wie die anderen Einbettungen,'."\n".
                    'mit dem Vakuum der Physik, sehen wir, dass sie nicht(!) neutral erscheint.'."\n".
                    'Denn das Hier-und-Jetzt unterscheidet sich von seiner Historie dadurch, dass seine Zukunft noch nicht existiert.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'italic', text => array(
                      'Die Welt ist eine Erzählung und sozusagen eine historisch geschichtete Geschichte.\\footnote{Mit Raimund Welsch erschaffen.}'."\n".
                    ''))),

                  array( 'text', array( text => array(
                    'Wir können auch sagen:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'italic', text => array(
                      'In jeder Zahl steckt eine Historie.\\footnote{Von Raimund Welsch.}'."\n",
                        'Die Historie ist ein Pfad und sie entspricht der Seele.\\footnote{Von Raimund Welsch.}'."\n".
                    ''))),

                  array( 'text', array( text => array(
                    'Das sind tiefe naturphilosophische Einsichten.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                  '\\condb{Sprachgebrauch} \\\\'."\n".
                    'Wir finden das auch in unserem Sprachgebrauch:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Nur Dinge, die es gibt, die relevant sind, die einen Unterschied machen, zählen.'."\n",
                        'Dinge, die zählen, sind relevant, machen einen Unterschied, gibt es.\\footnote{Mit Raimund Welsch erschaffen.}'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Die Weisheit in unserer Sprache ist zuweilen erstaunlich.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Neutrale-Elemente:XXX', text =>
                                           
                'Neutrale Elemente des Minus-Eins-Operators', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die links- und rechtsseitigen neutralen Elemente des Minus-Eins-Operators weisen'."\n".
                    'auch Besonderheiten auf, die andere Operatoren nicht besitzen.'."\n".
                    'Das verleiht dem Minus-Eins-Operator auch eine außergewöhnliche naturphilosophische Bedeutung,'."\n".
                    'aber eine etwas andere, als dem Null-Operator.'."\n",
                      'Da beim Minus-Eins-Operator im Allgemeinen die Operanden nicht vertauschbar sind'."\n".
                    'unterscheidet sich das linksseitige neutrale Element der Operation vom rechtsseitigen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Linksseitig neutrales Element} \\\\'."\n".
                    'Um das linksseitig neutrale Element des Minus-Eins-Operators zu bestimmen, setzen wir den Minus-Eins-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-linksneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  {n_{links}} *o( -1 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-c-Minus-Eins-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  {n_{links}} *o( -1 *o) a  =  n_{links}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  n_{links}  =  a  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen, dass das linksseitig neutrale Element \\term{n_{links}} identisch mit dem ursprünglichen Element \\term{a} ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Rechtsseitig neutrales Element} \\\\'."\n".
                    'Um das rechtsseitig neutrale Element des Minus-Eins-Operators zu bestimmen, setzen wir den Minus-Eins-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-rechtsneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a *o( -1 *o) n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-c-Minus-Eins-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall n_{rechts} \in \mathbb{R} *) *[  a *o( -1 *o) n_{rechts}  =  a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall n_{rechts} \in \mathbb{R} *) *[  a  =  a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'dies gilt also für'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \forall n_{rechts} \in \mathbb{R}  \;\;  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können erkennen, dass alle Elemente \\term{n_{rechts}} rechtsseitig neutrale Elemente des Minus-Eins-Operators sind,'."\n".
                    'weil alle \\term{n_{rechts}} unser \\term{a} unverändert lassen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Einbettung in neutrale Elemente} \\\\'."\n".
                    'Halten wir also unser jetziges \\term{a} fest, dann sieht seine Einbettung in'."\n".
                    'neutrale Elemente wie folgt aus – \\term{*a*} mit Sternchen markiert, damit wir es besser finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall c_{1},c_{2},\cdots \in \mathbb{R} *) *[  a  =  \cdots \, *o( -1 *o) a *o( -1 *o) a \\\ \qquad\qquad\qquad\qquad\qquad\;\;\;\, *o( -1 *o) {*a*} \\\ \qquad\qquad\qquad\qquad\qquad\;\;\;\, *o( -1 *o) {c_{1}} *o( -1 *o) {c_{2}} *o( -1 *o) \cdots  *]  }',
                                               label_name => 'OM:OT:Einleitung:Neutrale-Elemente:Equ-Minus-Eins-Einbettung', label_text => '\\name{OM:OT:Einleitung:Neutrale-Elemente:Equ-Minus-Eins-Einbettung}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Auf der rechten Seite von \\term{a} existiert immer das gleiche neutrales Element \\term{a}'."\n".
                    'und auf der linken Seite existieren beliebige neutrale Elemente, was auch sehr bemerkenswert ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Äquivalenter Vorgänger} \\\\'."\n".
                    'Auch im Minus-Eins-Operator haben wir das Zählen, aber nur im Vorzeichen.'."\n".
                    'Bezüglich des Vorzeichens gilt für den äquivalenten Vorgänger:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( -1 *o) a  =   v *o( -1 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formeln \\jumpname{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-Vorzeichen-Minus-Eins-a} und \\jumpname{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-c-Minus-Eins-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( -1 *o) a  =  a + 1  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  c *o( -1 *o) a  =  c  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  v  =   a + 1  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Es ist also ein Unterschied, ob bei der Einbettung die Veränderung durch das Vorzeichen von \\term{a} mit erhalten werden soll oder nicht.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Betrachten wir das Zählen mit dem Minus-Eins-Operator naturphilosophisch aus einer zeitlichen Perspektive,'."\n".
                    'dann können wir unser festgehaltenes oder festgelegtes \\term{a} auch als die direkt vor uns liegende Vergangenheit verstehen:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'italic', text => array(
                      'Existiert in der Gegenwart auf den zeitlichen Schritt vorher \\term{a} noch nichts, dann erzeugt der'."\n".
                      'an das Nicht-Existente angehängte \\term{a} den nächsten Schritt \\term{a + 1}.'."\n".
                      'Nimmt dann im selben, nun existierenden Schritt noch ein beliebiger Operand mit dem Operator Minus-Eins Einfluss,'."\n".
                      'so ändert sich nichts weiter, bis der nächste, noch nicht existierende Schritt erreicht ist.'."\n".
                    ''))),
                      
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall c_1,c_2,\cdots *) *[  a *o( -1 *o) c_1 *o( -1 *o) c_2 *o( -1 *o) \cdots  =  a  *]  }'),
                      //                         /* label_name => 'OM:OT:Einleitung:Neutrale-Elemente:Equ-Minus-Eins-Einbettung', */label_text => '\\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-Minus-Eins-Einbettung}', label_incr => false),
                    ))),

                  array( 'text', array( text => array(
                    'Denn:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'italic', text => array(
                      'Nur als Vorzeichen vor dem Nichts existiert, wird aus dem Nichts die eigene Veränderung von \\term{a} kreiert.'."\n".
                      'Die Vergangenheit oder Historie \\term{a} kreiert also seine noch nicht existierende Zukunft zu \\term{a + 1}.'."\n".
                    ''))),
                      
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall c_1,c_2,\cdots *) *[  *o( -1 *o) a *o( -1 *o) c_1 *o( -1 *o) c_2 *o( -1 *o) \cdots  =  a + 1  *]  }'),
                      //                         /* label_name => 'OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-Vorzeichen-Minus-Eins-a', */label_text => '\\jumpname{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-Vorzeichen-Minus-Eins-a}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Unser Minus-Eins-Operator hat also ebenfalls eine bedeutende zeitliche Qualität durch sein Vorzeichen des Zählens.'."\n",
                      'Interpretieren wir den Minus-Eins-Operator naturphilosophisch und vergleichen ihn'."\n".
                    'mit dem Vakuum der Physik, sehen wir, dass er im Hier-und-Jetzt völlig neutral wirkt.'."\n".
                    'Aber in seine gerade noch nicht existierende Zukunft wirkt, mit seiner Hilfe, das ehemalige Hier-und-Jetzt kreierend.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Neutrale-Elemente:XXX', text =>
                                           
                'Neutrale Elemente des Minus-Zwei-Operators', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die links- und rechtsseitigen neutralen Elemente des Minus-Zwei-Operators weisen'."\n".
                    'noch andere Besonderheiten auf, die andere Operatoren nicht besitzen.'."\n".
                    'Das verleiht dem Minus-Zwei-Operator auch eine außergewöhnliche naturphilosophische Bedeutung,'."\n".
                    'aber eine etwas andere, als dem Null- oder dem Minus-Eins-Operator.'."\n",
                      'Da beim Minus-Zwei-Operator im Allgemeinen die Operanden nicht vertauschbar sind'."\n".
                    'unterscheidet sich das linksseitige neutrale Element der Operation vom rechtsseitigen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Linksseitig neutrales Element} \\\\'."\n".
                    'Um das linksseitig neutrale Element des Minus-Zwei-Operators zu bestimmen, setzen wir den Minus-Zwei-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-linksneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  {n_{links}} *o( -2 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-c-Minus-Zwei-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  {n_{links}} *o( -2 *o) a  =  n_{links}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  n_{links}  =  a  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen, dass das linksseitig neutrale Element \\term{n_{links}} identisch mit'."\n".
                    'dem ursprünglichen Element \\term{a} ist, genau, wie beim Minus-Eins-Operator.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Rechtsseitig neutrales Element} \\\\'."\n".
                    'Um das rechtsseitig neutrale Element des Minus-Zwei-Operators zu bestimmen, setzen wir den Minus-Zwei-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-rechtsneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a *o( -2 *o) n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-c-Minus-Zwei-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( -2 *o) n_{rechts}  =  a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n_{rechts} *) *( \forall a \in \mathbb{R}  *) *[  a  =  a  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können erkennen, dass alle Elemente \\term{n_{rechts}} rechtsseitig neutrale Elemente des Minus-Zwei-Operators sind,'."\n".
                    'weil alle \\term{n_{rechts}} unser \\term{a} unverändert lassen, genau, wie beim Minus-Eins-Operator.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Einbettung in neutrale Elemente} \\\\'."\n".
                    'Die Einbettung der des Minus-Eins-Operators.'."\n",
                      'Halten wir also unser jetziges \\term{a} fest, dann sieht seine Einbettung in'."\n".
                    'neutrale Elemente wie folgt aus – \\term{*a*} mit Sternchen markiert, damit wir es besser finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall c_{1},c_{2},\cdots \in \mathbb{R} *) *[  a  =  \cdots \, *o( -2 *o) a *o( -2 *o) a \\\ \qquad\qquad\qquad\qquad\qquad\;\;\;\, *o( -2 *o) {*a*} \\\ \qquad\qquad\qquad\qquad\qquad\;\;\;\, *o( -2 *o) {c_{1}} *o( -2 *o) {c_{2}} *o( -2 *o) \cdots  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auf der rechten Seite von \\term{a} existiert immer das gleiche neutrales Element \\term{a}'."\n".
                    'und auf der linken Seite existieren beliebige neutrale Elemente, was auch sehr bemerkenswert ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Äquivalenter Vorgänger} \\\\'."\n".
                    'Der Minus-Zwei-Operator ist völlig neutral und wir haben daher auch kein Zählen.'."\n".
                    'Bezüglich des Vorzeichens gilt für den äquivalenten Vorgänger:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( -2 *o) a  =   v *o( -2 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formeln \\jumpname{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-Vorzeichen-Minus-Zwei-a} und \\jumpname{OM:OT:Einleitung:Minus-Eins-und-Minus-Zwei-Operator:Equ-c-Minus-Zwei-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( -2 *o) a  =  a  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  c *o( -2 *o) a  =  c  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  v  =  a  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier ist es nicht einmal ein Unterschied, ob bei der Einbettung das Vorzeichen von \\term{a} mit erhalten werden soll oder nicht.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Beim Minus-Zwei-Operator herrscht aus naturphilosophisch zeitlicher Perspektive völlige Konstanz:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'italic', text => array(
                      'Wie beim Minus-Eins-Operator hat Gegenwart unserer Zahl \\term{a} eine Konstanz, in die sie vorne eingebettet ist, aus der sie folgt.'."\n".
                      'Eine Zukunft hat sie, in der alles Einfluss nehmen kann, dies aber ihre Konstanz nicht verändert.'."\n".
                      'Die Konstanz ihrer Zukunft wird durch den Prozess des Erhaltens, durch das Anhängen eines weiteren dieses Operators mit einem beliebigen Operanden,'."\n".
                      'in Form einer beliebigen Zahl, nicht verändert.'."\n",
                        'Als Vorzeichen, vor dem Nichts existiert, wird aus dem Nichts Konstanz kreiert.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Unser Minus-Zwei-Operator hat also ebenfalls eine bedeutende zeitliche Qualität durch sein Vorzeichen der Konstanz.'."\n",
                      'Interpretieren wir die Minus-Zwei-Operator-Einbettung naturphilosophisch und vergleichen sie, wie die anderen Einbettungen,'."\n".
                    'mit dem Vakuum der Physik, sehen wir, dass sie völlig neutral und die Konstanz erhaltend erscheint.'."\n".
                    'Denn das Hier-und-Jetzt unterscheidet sich von seiner Historie und in seiner Zukunft nicht.'."\n".
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
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein.Eig', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{   *( \forall x \in \mathbb{N} *) *[  *o( x *o) 2 *o( x *o) 2  =  4  *]  }'),
                      array( display => 'on',  latex => '{   *o( -1 *o) 2 *o( -1 *o) 2  =  3  }'),
                      array( display => 'on',  latex => '{   *( \forall x \in \mathbb{N} \setminus \{0,1\} *) *[  *o( -x *o) 2 *o( -x *o) 2  =  2  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
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
                    'Hier wollen wir einmal experimentell andere Möglichkeiten untersuchen.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
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
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:XXX', text =>
                                           
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
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Der Null-Operator ist ein Inkrement- oder Zähl-Operator.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Das Zählen ist in der Arithmetik, ja in der ganzen Mathematik, von zentraler Bedeutung.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, im Rahmen der Zeit, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n",
                      'Dies ist also identisch mit der Version ohne zusätzlichem Vorzeichen in der rekursiven Definition.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:XXX', text =>
                                           
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
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Der Minus-Eins-Operator ist nur als Vorzeichen ein Inkrement- oder Zähl-Operator.'."\n".
                      'Als Operator zwischen zwei Zahlen ist er neutral.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Damit ähnelt er dem Null-Operator, ist ihm aber nicht in jedem Fall gleich.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n",
                      'Auch hier macht die Version mit zusätzlichem Vorzeichen keinen Unterschied.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:XXX', text =>
                                           
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
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Ist der Minus-Zwei-Operator ist völlig neutral.'."\n".
                      'Damit sind alle noch kleineren Operatoren auch neutral.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Damit ähnelt er dem Minus-Eins-Operator, ist ihm aber nicht in jedem Fall gleich.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n",
                      'Ebenso hier macht die Version mit zusätzlichem Vorzeichen keinen Unterschied.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:XXX', text =>
                                           
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
                    'Dies gilt dann auch für die absolute Definition der Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Absolut}.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Andere-Moeglichkeiten:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn'),
                    )),
                )
          ); ?>

          			
    <?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
