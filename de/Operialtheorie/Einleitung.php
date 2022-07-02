<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Einleitung'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:OT:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'invis', text => array(
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
                    '– Die Konstanz des Zählens erkennen wir daran, dass der Wert der rechts stehenden Zahl keinen Einfluss auf das Zählen hat, sondern nur ihre Existenz. Der Null-Operator kann folglich zur Überprüfung der Existenz einer Zahl genutzt werden.',
                    '⋅ a *o( 0 *o) b = a + 1  ⇒  ∃ b',
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
                                           
                'Herleitung der allgemeinen Operatoren Formeln')),
                  array( 'text', array( text => array(
                    'Im Mathematikunterricht in der Oberstufe war mir aufgefallen, dass es Regelmäßigkeiten zwischen'."\n".
                    'den grundlegenden Operatoren der Arithmetik\\color{*Bearb}{(Link zu Wikipedia)} gibt.'."\n".
                    'Diese Verbinden die Addition, die Multiplikation und die Exponentialrechnung in einer'."\n".
                    'hierarchischen Reihenfolge:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a \cdot b *) + a  :=  a \cdot *( b + 1 *)  }'),
                      array( display => 'on',  latex => '{  a^{b} \cdot a  :=  a^{b + 1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Definieren wir diese Operatoren mit natürlichen Zahlen wie folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a*o( 1 *o)b  :=  a + b  }'),
                      array( display => 'on',  latex => '{  a*o( 2 *o)b  :=  a \cdot b  }'),
                      array( display => 'on',  latex => '{  a*o( 3 *o)b  :=  a^{b}  }'),
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
                    'Wenn wir beschreiben, wofür diese Formel steht, dann würde ich sagen:'."\n".
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
                    'Dabei setze ich voraus, dass der Exponent-Operator als Vorzeichen von a, nämlich \\term{↑a},'."\n".
                    'das \\term{a} nicht verändert. Dies stellt sich im Folgenden durch'."\n".
                    'Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Absolut} als korrekt heraus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  a*o( 3 *o)1  =  *o( 2 *o)a  =  \cdot a  =  a  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a*o( 4 *o)1  =  *o( 3 *o)a  =  \uparrow a  =  a  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Gleiches gilt dann auch für das Mal als Vorzeichen, wie ich gleich dazu geschrieben hab.'."\n",
                      'Diesen Zusammenhang drücken wir nun als umgekehrte Verkettung ›𓇳‹ aus, weil bei dieser Verkettung'."\n".
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
                                           
                'Was ist der Null-Operator')),
                  array( 'text', array( text => array(
                    'Interessant ist nun die Funktion des Null-Operators.'."\n".
                    'Er muss zum Beispiel die folgende Formel erfüllen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( 0 *o) a *o( 0 *o) a *o( 0 *o) a  =  a *o( 1 *o) 3  =  a + 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( *o( 0 *o) a *) *o( 0 *o) a *) *o( 0 *o) a  =  a + 3  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Durch die Klammerung hab ich noch einmal deutlich gemacht, in welcher Reihenfolge die Operatoren abzuarbeiten sind.'."\n",
                      'Da drei Mal der Null-Operator auf ein beliebiges \\term{a} angewandt wird und dies insgesamt \\term{a} um Drei'."\n".
                    'erhöhen soll, kann es nur so sein, dass jeder Operator das Ergebnis um Eins erhöht.'."\n".
                    'Das bedeutet dann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    'Auf die philosophische und auch physikalische Bedeutung, im Rahmen der Zeit, komme ich im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'So lässt sich Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv} konsequenterweise nun wie folgt darstellen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a*o( *o( 0 *o)x *o)b *)*o( x *o)a  :=  a*o( *o( 0 *o)x *o)*( *o( 0 *o)b *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So lässt sich die rekursive Definition des Zusammenhangs zwischen den Operatoren jetzt auch ausschließlich'."\n".
                    'durch die neuen Operatoren darstellen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Vortext:XXX', text =>
                                           
                'Genaue Betrachtung der niederen Tetration beziehungsweise des niederen Hyper-4-Operators')),
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
                      array(  jump_name => 'OM:OT:Einleitung:Weitere-Untersuchungen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Weitere Untersuchungen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:OT:Einleitung:Weitere-Untersuchungen',
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
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ( ( ( ( a - 2 ) \odot ( a - 1 ) ) \odot a ) \odot a ) \odot a \odot a  =  a + 3  }'),
                      array( display => 'on',  latex => '{  ( ( ( a - 1 ) \odot a ) \odot a ) \odot a \odot a  =  a + 3  }'),
                      array( display => 'on',  latex => '{  ( a \odot a ) \odot a \odot a  =  a + 3  }'),
                      array( display => 'on',  latex => '{  \odot a \odot a \odot a  =  a + 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \odot a \odot a \odot a  =  ( ( ( \odot a) \odot a ) \odot a )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \odot a \odot a \odot a  =  ( ( ( a + 1 ) \odot a ) \odot a )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \odot a \odot a \odot a  =  ( ( ( a + 1 ) + 1 ) \odot a )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \odot a \odot a \odot a  =  ( ( ( a + 1 ) + 1 ) + 1 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \odot a \odot a \odot a  =  ( ( a + 2 ) \odot a )  }'),
                      array( display => 'on',  latex => '{  \odot a  =  a + 1  }'),
                      array( display => 'on',  latex => '{  + a + a + a  =  a \cdot 3  }'),
                      array( display => 'on',  latex => '{  \cdot a \cdot a \cdot a  =  a^{3}  }'),
                      array( display => 'on',  latex => '{  *( a^{a} *)^{a}  =  a*o( 4 *o)3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a^{a \cdot a}  =  a*o( 4 *o)3  }'),
                      array( display => 'on',  latex => '{  a^{ *( a^{b - 1} *) }  =  a*o( 4 *o)b  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a^{a} *)^{a}  =  a*o( 4 *o)3  }'),
                      array( display => 'on',  latex => '{  *( *( n^a *)^{a} *)^{a}  =  *( a^{a} *)^{a}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^a  =  a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n  =  \sqrt[a]{a}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{   *o( x *o)2*o( x *o)2  :=  4  }'),
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
                      // array(  jump_name => 'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn'),
                    )),
                )
          ); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
