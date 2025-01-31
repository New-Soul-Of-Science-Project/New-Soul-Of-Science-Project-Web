<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Ableitungen-Integrale'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Formale-Entwicklung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Der Ausgangspunkt zur Entdeckung und Erforschung der Superial-Zahlen war, wie in der \jump{OM:SupNum:Einleitung}{Einleitung}'."\n".
                    'schon beschrieben, mein Bedürfnis, mehr Klarheit davon zu bekommen, was \jump{OM:SupNum:Ableitungen-Integrale:Ableitung}{Ableitungen}\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Differentialrechnung:2024}.}'."\n".
                    'und \jump{OM:SupNum:Ableitungen-Integrale:Integration}{Integrale}\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Integralrechnung:2023}.} eigentlich sind.'."\n".
                    'Ich wollte genauer Verstehen und explizit ausdrücken können, was implizit vor sich geht, wenn wir eine Funktion ableiten oder integrieren.'."\n",
                      'So entdeckte ich die Superial-Zahlen und mit ihnen eine Möglichkeit, bei der ihre normierte aktuale Unendlichkeit'."\n".
                    'in der Entwicklung der Definition der Ableitung und der Integration den Limes\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:GrenzwertFunktion:2024}.}'."\n".
                    'oder das Differential\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:DifferentialMathematik:2024}.} ersetzt.'."\n".
                    'Auf diese Weise können wir, anstatt den Limes-Operator oder den Differential-Operator zu benutzen, einfach wie gewohnt mit Zahlen rechnen.'."\n",
                      'Es geht also um Transparenz und Genauigkeit oder Detail, denen wir an dieser Stelle den Vorzug gegenüber der Kürze und der alten Gewohnheit'."\n".
                    'von (kurzen) Schreibweisen geben werden.'."\n".
                    'Wir wollen zunächst entdecken, ergründen und verstehen und eben nicht gleich verkürzen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:X', text =>
                      
                'Der Mehrwert', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Dieses Vorgehen hat den Vorteil, dass wir immer sehr genau sehen, was wir tun:'."\n",
                      'Die Frage nach der Funktion, die abgeleitet oder integriert sie selbst ergibt,'."\n".
                    'die wir später stellen, eröffnet uns gleich ein neues Zahlenuniversum, dass sich an die Superial-Zahlen anlehnt, sie aber noch erweitert,'."\n".
                    'also über sie hinausgeht, und uns die \jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{transzendente Zahl \lm{ \e }} besser und detailliert verstehen lässt.'."\n",
                      'Darüber bekommen wir eine Idee, dass auch andere transzendente Zahlen diese Struktur haben könnten.'."\n".
                    'Bei \lm{ π } liegt dies wegen ihres engen Zusammenhangs mit \lm{ \e } wirklich sehr nahe.'."\n".
                    'Aber wir vermuten dies ganz allgemein, weil es beim Unterschied zwischen algebraischen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
                    'und transzendenten Zahlen\footnote{\const{SupNum_g_footnote_text_TranszendenteZahl}}'."\n".
                    'offenbar genau um die Grenze zwischen den Fraktalebenen der Superial-Zahlen geht –'."\n".
                    'den Stellen des \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystems} der Superial-Zahlen.'."\n".
                    ''))),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

          <!  • Die Ableitungen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Ableitungen-Integrale:Ableitung',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ableitungen-Integrale', type => 'back'),
                    )),

                  array( 'text', array( text => array(
                    'Bei der Ableitung spielt ein Bruch die zentrale Rolle, bei dem sowohl Zähler als auch Nenner'."\n".
                    'Differenzen sind, die, aus heute üblicher Perspektive, bei höherer Genauigkeit immer kleiner werden und im Positiven gegen'."\n".
                    'Null streben.'."\n",
                      'Dies kann klassischer Weise durch einen Limes ausgedrückt werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  =  \lim\limits_{\Delta x \rightarrow +0}{ \frac{ f(x + \Delta x) - f(x) }{ \Delta x } }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-mit-Limes', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-mit-Limes}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Da sowohl Zähler als auch Nenner in der gleichen Größenordnung gegen Null streben,'."\n".
                    'sorgt der Bruch dafür, dass unser Ergebnis im Endlichen verbleibt.'."\n",
                      'Mit Hilfe der aktual unendlichen Superial-Zahlen kommen wir in die Lage, das gegen Null strebende \lm{ \Delta x }'."\n".
                    'durch eine normierte unendlich kleine Zahl \lm{ \s^{-1} } ersetzen zu können:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \lim\limits_{\Delta x \rightarrow +0}{ \Delta x }  \widehat{=}  \s^{-1}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-Limes-ist-s-hoch-minus-Eins', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-Limes-ist-s-hoch-minus-Eins}', label_incr => true),
                      array( display => 'on',  latex => '{  f\'(x)  :=  \frac{ f(x + \s^{-1}) - f(x) }{ \s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  :=  \frac{ f(〈x〉․〈1〉) - f(x) }{ ․〈1〉 }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Die letzte Formel ist in der \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystem-Schreibweise} der Superial-Zahlen ausgedrückt.'."\n",
                      'Durch das Einsetzen einer normierten Unendlichkeit können wir nun erkennen, dass das \lm{ \Delta x }'."\n".
                    'gar nicht von \lm{ x } abhängt, wie es scheinen könnte,'."\n".
                    'sondern das \lm{ x } in \lm{ \Delta x } kennzeichnet „nur“ die Stelle, an der das \lm{ \Delta x }'."\n".
                    'eingesetzt wird.'."\n".
                    'Der Parameter der Funktion \lm{ f(x) } ist allerdings weiter von \lm{ x } abhängig.'."\n",
                      'Vergleichen wir dies mit der in der Mathematik üblichen und entsprechenden kürzeren Differential-Schreibweise'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  \widehat{=}  \frac{ \mathrm{d} f(x) }{ \mathrm{d} x }  \;\;,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'dann sehen wir, dass einiges an struktureller Information verborgen bleibt, wenn wir nicht genau schauen,'."\n".
                    'was hinter der Formulierung steckt.'."\n".
                    'So glauben wir eben leicht, wie gesagt, der Nenner hätte etwas mit \lm{ x } zu tun, was von der zugrunde liegenden Rechnung her'."\n".
                    'durch das Einsetzen einer normierten aktualen Unendlichkeit nicht der Fall ist; es in Wahrheit also wenigstens nicht sein muss.'."\n",
                      'Denn in aktualer Unendlichkeit ausgedrückt entspricht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \mathrm{d} f(x)  \widehat{=}  f(〈x〉․〈1〉) - f(x)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \mathrm{d} x  \widehat{=}  ․〈1〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Division durch \lm{ ․〈1〉 } holt uns schlicht die Differenz im Zähler aus dem unendlich Kleinen wieder'."\n".
                    'ins Endliche.'."\n".
                    'Und das können wir auch durch den entsprechenden unendlich großen Faktor \lm{ \s } oder \lm{ 〈1〉_1 \, } erreichen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  *( f(x + \s^{-1}) - f(x) *) \cdot \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  *( f(〈x〉․〈1〉) - f(x) *) \cdot 〈1〉_{1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Definition der Ableitung muss folglich nicht zwingend als Division formuliert werden.'."\n",
                      'Durch die detaillierte Betrachtung mit aktual unendlichen Zahlen erschließt sich ein genaueres Verständnis.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Beispiele-fuer-Ableitungen', text =>
                      
                'Beispiele für Ableitungen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um besser zu verstehen, was genau vor sich geht, wollen wir uns zwei Beispiele betrachten:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Funktion \lm{ f(x) = x^{2} } ergibt sich:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  \frac{ *( x + \s^{-1} *)^{2} - x^{2} }{ \s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-basis', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-basis}', label_incr => true),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ *( x^{2} + 2 x \cdot \s^{-1} + \s^{-2} *) - x^{2} }{ \s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-ausmultipliziert', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-ausmultipliziert}', label_incr => true),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ 2 x \cdot \s^{-1} + \s^{-2} }{ \s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-subtrahiert', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-subtrahiert}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  2 x + \s^{-1}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-Ergebnis', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-Ergebnis}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wenn wir also \lm{ \s^{-1} } zu Null setzen, dann kommt das übliche Ergebnis \lm{ f\'(x) = 2 x } heraus.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Für \lm{ f(x) = x^{3} } ergibt sich:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  \frac{ *( x + \s^{-1} *)^{3} - x^{3} }{ \s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-basis', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-basis}', label_incr => true),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ *( x^{3} + 3 x^{2} \cdot \s^{-1} + 3 x \cdot \s^{-2} + \s^{-3} *) - x^{3} }{ \s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-ausmultipliziert', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-ausmultipliziert}', label_incr => true),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ 3 x^{2} \cdot \s^{-1} + 3 x \cdot \s^{-2} + \s^{-3} }{ \s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-subtrahiert', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-subtrahiert}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  3 x^{2} + 3 x \cdot \s^{-1} + \s^{-2}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-Ergebnis', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-Ergebnis}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wenn wir also \lm{ \s^{-1} } zu Null setzen, dann kommt das übliche Ergebnis \lm{ f\'(x) = 3 x^{2} } heraus.'."\n",
                        '\\\\ '."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir können hieran erkennen, dass die Vorgehensweise mit dem Limes Details der Vorgänge verbirgt.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung:X', text =>
                      
                'Welche Funktion ist nach dieser Definition ihre eigene Ableitung?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wir können tatsächlich recht einfach erkennen, welche \jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{Funktion ihrer eigenen Ableitung gleich} ist.'."\n".
                    'Die Superial-Zahlen führen uns hier zu einer erstaunlichen Entdeckung, auch in Bezug auf transzendente Zahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Kommen wir nun im nächsten Abschnitt aber zur Umkehrung der Ableitung, der \jump{OM:SupNum:Ableitungen-Integrale:Integration}{Integration}.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ableitungen-Integrale:Integration'),
                    )),
              )
          ); ?>


          <!  • Die Integration  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Ableitungen-Integrale:Integration',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ableitungen-Integrale:Ableitung', type => 'back'),
                    )),

                  array( 'text', array( text => array(
                    'Die Integration spielt für das tiefere Verständnis der Superial-Zahlen und die Erkenntnis,'."\n".
                    'dass diese etwas echt Besonderes sind, eine wichtige Rolle.'."\n",
                      'Der Grund dafür liegt darin, dass die Integration eine Summe über unendlich viele Summanden darstellt.'."\n".
                    'Im Rahmen der Superial-Zahlen ist die \jump{OM:SupNum:Ableitungen-Integrale:Ableitung}{Ableitung}'."\n".
                    'mit Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation}'."\n".
                    'durch unsere aktual unendliche superiale Basis \lm{ \s } in Form von \lm{ \s^{-1} } wohldefiniert.'."\n".
                    'Da die Integration die Ableitung per Definition umkehren muss, sind dadurch auch die aktual unendlich kleinen Schritte ihrer'."\n".
                    'Summe darauf basierend wohldefiniert.'."\n",
                      'Da \lm{ \s^{-1} } als eine aktual unendlich kleine Einheit verstanden werden kann,'."\n".
                    'findet die Summation in diesen normierten einheitlich winzigen Schritten statt.'."\n".
                    'Die Schritte der Summe werden also in aktual unendlich kleinen Einheiten gezählt, was uns zum Zählen und'."\n".
                    'so zu einem Verständnis von ganzen Zahlen innerhalb der Superial-Zahlen führt.'."\n".
                    'Durch das Zählen von der Null an dann selbstverständlich auch zu natürlichen Zahlen innerhalb der Superial-Zahlen.'."\n",
                      'Hier erkennen wir, dass die Superial-Zahlen einen tiefen Bezug zur Zahlentheorie haben,'."\n".
                    'wie wir in dieser Arbeit immer wieder feststellen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:Integration:X', text =>
                      
                'Ganze und natürliche Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Art von ganzen oder natürlichen Zahlen, mit denen wir es in diesem Fall zu tun haben, sind aktual unendlich kleine'."\n".
                    'ganze oder natürliche Superial-Zahlen, wie die folgenden, die sich dadurch auszeichnen, dass sie von Null bis'."\n".
                    'zu einer endlichen Zahl \lm{ x \in \mathbb{A}_{\S} } gehen – \lm{ \mathbb{A}_{\S} } als Menge der'."\n".
                    '\jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen} –;'."\n".
                    'auszugsweise in einer Menge aufgelistet, wobei der Beginn und das Ende exakt stimmen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x[_{\mathbb{S}^{-1}_{Z}}  =  \\\  \quad *\{  \quad\,  0 \s^{-1}, 1 \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{1}{2} x - 2 \s^{-1},\; \frac{1}{2} x - \s^{-1},\; \frac{1}{2} x,\; \frac{1}{2} x + \s^{-1},\; \frac{1}{2} x + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{2}{3} x - 2 \s^{-1},\; \frac{2}{3} x - \s^{-1},\; \frac{2}{3} x,\; \frac{2}{3} x + \s^{-1},\; \frac{2}{3} x + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, x - 3 \s^{-1}, x - 2 \s^{-1}, x - \s^{-1}   \quad *\}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Hieran ist bemerkenswert, dass jede endliche Zahl \lm{ x } im Verhältnis zur unendlich kleinen Einheit \lm{ \s^{-1} }'."\n".
                    'eine ganze Zahl sein muss.'."\n".
                    'Dies drücken wir vorstehend durch die Menge \lm{ \mathbb{S}^{-1}_{Z} } aus,'."\n".
                    'wie wir sie in \italic{›\jumpname{OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen}‹} definiert haben.'."\n",
                      'Skalieren wir diese Erkenntnis auf die fraktale Ebene der endlichen ganzen Zahlen, indem wir die unendlich kleinen gezählten Einheiten'."\n".
                    'durch Multiplikation mit \lm{ \s } ins Endliche holen, dann erhalten wir für die natürlichen Superial-Zahlen'."\n".
                    'von der Null bis ohne \lm{ x \cdot \s } die Menge:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, x \cdot \s [_{\mathbb{S}_{\Z}}  =  \\\ \quad *\{  r  ~\middle|~  *( \forall a \in [ 0, x ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  r  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < x  \\\\  x \cdot \s + z^{-}  &  \text{ falls } a = x  \end{cases}  *]  *\}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Menge-natuerliche-Vorgaenger-xs', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Menge-natuerliche-Vorgaenger-xs}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Schreiben wir diese Menge auszugsweise einmal explizit hin,'."\n".
                    'wobei der Beginn und das Ende exakt stimmen, erhalten wir nun:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x \cdot \s [_{\mathbb{S}_{\Z}}  =  \\\  \quad *\{  \quad\,  0, 1, 2, \cdots n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{1}{2} x \s + z^{-}, \cdots \frac{1}{2} x \s - 1,\; \frac{1}{2} x \s,\; \frac{1}{2} x \s + 1, \cdots \frac{1}{2} x \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{2}{3} x \s + z^{-}, \cdots \frac{2}{3} x \s - 1,\; \frac{2}{3} x \s,\; \frac{2}{3} x \s + 1, \cdots \frac{2}{3} x \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, x \s + z^{-}, \cdots x \s - 2, x \s - 1   \quad *\}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Menge-natuerliche-Vorgaenger-xs-Elemente', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Menge-natuerliche-Vorgaenger-xs-Elemente}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können daran also erkennen, dass dies nur dann funktioniert, wenn alle \lm{ a \cdot x \cdot \s },'."\n".
                    'mit \lm{ x \in \mathbb{A}_{\S} \land a \in [ 0, 1 ]_{\mathbb{A}_{\S}} }, oder anders ausgedrückt alle \lm{ a \cdot \s },'."\n".
                    'mit \lm{ x \in \mathbb{A}_{\S} \land a \in [ 0, x ]_{\mathbb{A}_{\S}} }, immer ganze Zahlen sind.'."\n",
                      'Daher beschäftigt sich die Theorie der Superial-Zahlen in ihrem Zentrum besonders auch damit, aus welcher Menge \lm{ \mathbb{A}_{\S} } die Zahlen'."\n".
                    '\lm{ x } unter diesem Aspekt sinnvollerweise sein können, so, dass \lm{ x \cdot \s } ganze Zahlen sind;'."\n".
                    'also mit den \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvollen Koeffizienten von \lm{ \s }}.'."\n",
                      'Dabei ist es aufgrund der Definition von \lm{ \s } schnell zu sehen, dass alle rationalen Koeffizienten \lm{ q \cdot \s }, mit \lm{ q \in \mathbb{Q} },'."\n".
                    'ganze Zahlen sind.'."\n",
                      'Hingegen mussten wir erst aufwendiger beweisen, dass auch alle Wurzeln der natürlichen Zahlen als Koeffizienten,'."\n".
                    'wie \lm{ \sqrt{2} \cdot \s }, auch sämtlich ganze Zahlen sind, wie wir im \jump{OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung}{Beweis der Überrationalitätsvermutung} sehen.'."\n".
                    'Auf diesen Beweis aufbauend zeigen wir weiter, dass selbst alle durch Radikale\footnote{\const{SupNum_g_footnote_text_DurchRadikaleDarAlgZ}}'."\n".
                    '– also \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Durch-Radikale-darstellbare-algebraischen-Zahlen-sinnvolle-Koeffizienten-SZ}{Wurzeln und deren arithmetischen Verknüpfungen} –'."\n".
                    'darstellbaren realen Koeffizienten der algebraischen Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
                    'sämtlich im oben erklärten Sinn sinnvolle Koeffizienten von \lm{ \s } sind und im Produkt immer ganze Zahlen sind.'."\n".
                    'Es bleibt derzeit noch die Frage offen, ob wirklich alle'."\n".
                    'realen Koeffizienten der algebraischen Zahlen als Koeffizienten von \lm{ \s } ganze Zahlen im Produkt mit \lm{ \s } ergeben.'."\n".
                    'Dies Vermuten wir auf der Seite \italic{›\jumpname{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}‹}.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:Integration:X', text =>
                      
                'Definition der Summe zur Integration auf Basis von Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wollen wir uns der Integration im Rahmen der Superial-Zahlen nähern, dann stehen bestimmte aktual unendliche Summen'."\n".
                    'und dafür wichtige Eigenschaften der Superial-Zahlen im Mittelpunkt.'."\n".
                    'Dabei ist es praktisch, die Summen mit Hilfe von \jump{OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge}{Intervall-Mengen}'."\n".
                    'zu definieren.'."\n",
                      'Zum einen ist es wichtig zu verstehen, dass ganze Superial-Zahlen \lm{ \mathbb{S}_{\Z} } endliche ganze sowie'."\n".
                    'aktual unendlich große ganze Zahlen sind, die alle immer einen Vorgänger und Nachfolger haben.'."\n".
                    'Zum anderen haben positive ganze Superial-Zahlen aber von der Null an auch genauso viele Vorgänger,'."\n".
                    'wie ihr Wert groß ist.'."\n".
                    'Zur Verdeutlichung hier einmal die alte Schreibweise mit angegeben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall z \in \mathbb{S}_{\Z} *)  *[  \sum_{ \forall [ 0, z [_{\mathbb{S}_{\Z}} } \!\! 1  :=  \sum^{ z - 1 }_{ i = 0 } 1  =  z  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies verhält sich also genau so, wie wir es von endlichen Zahlen kennen.'."\n",
                      'Dies ist aber anders, als bei anderen Zahlen, die alle Vorgänger und Nachfolger besitzen, wie die \jump{OM:BiOrd:Einleitung}{Biordinalzahlen}.'."\n".
                    'Bei ihnen gibt es viel mehr Vorgänger von der Null an, als der Wert einer aktual unendlich großen Biordinalzahl darstellt.'."\n".
                    'Anders bei den Ordinalzahlen\footnote{\const{NSOSP_g_footnote_text_Ordinalzahl}}.'."\n".
                    'Der Wert einer aktual unendlich großen Zahl entspricht hier auch der Anzahl der Zahlen von der Null an bis zu ihr.'."\n".
                    'Aber anders als bei den Biordinalzahlen und Superial-Zahlen haben bei den Ordinalzahlen nicht alle Zahlen einen Vorgänger'."\n".
                    'und negative Zahlen gibt es gar nicht.'."\n".
                    'Insofern sind ganze Superial-Zahlen etwas sehr besonderes.'."\n",
                      'Das dies wahr sein muss, zeigen wir im Abschnitt \italic{\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Ableitung-Umkehrung-Integration}},'."\n".
                    'den sonst könnte das Integral nicht die Umkehrung der Ableitung sein.'."\n",
                      'Summieren wir nun, wie wir es für das Integral benötigen, dann tun wir dies im Intervall einer endlichen, nicht unbedingt ganzen Zahl \lm{ x }'."\n".
                    'jetzt in aktual unendlich kleinen Schritten der Größe \lm{ \s^{-1} = \;.*〈 1 *〉\; }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x \in \mathbb{A}_{\S} *)  *[  \sum_{ \forall [ 0, x [_{\mathbb{S}_{\Z}}^{-1} } \!\! \s^{-1}  =  x  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall x \in \mathbb{A}_{\S} *)  *[  \sum_{ \forall [ 0, x [_{\mathbb{S}_{\Z}}^{-1} } \! .*〈 1 *〉  =  x  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wie oben geschildert, funktioniert dies für alle rationalen \lm{ x } und für alle \lm{ x }, die ganze Wurzel aus rationalen Zahlen sind,'."\n".
                    'sowie deren Summen, Differenzen, Produkte, Brüche und Potenzen.'."\n".
                    'Offen, aber meiner Meinung nach wahrscheinlich, auch für unendliche Summen dieser, also vermutlich für alle reell algebraischen Zahlen.'."\n".
                    'Dann wären die einzigen \lm{ x }, für die das innerhalb der Superial-Zahlen erster Stufe nicht funktioniert, \jump{OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:Transzendente-Zahlen}{transzendente Zahlen},'."\n".
                    'auf die ich an anderer Stelle eingehen möchte.'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:Integration:X', text =>
                      
                'Definition der Integration', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Bei der Integration summieren wir nämlich all die unendlich vielen und superial kleinen Differenzen des Abstands \lm{ \s^{-1} } der Ableitung als'."\n".
                    'superial kleine, feine oder schmale Streifen zu einer größeren Fläche auf.'."\n".
                    'Diese Streifen müssen wir dann auf prozesshafte Weise geordnet durchzählen und dabei jeweils addieren.'."\n",
                      'Die Größe der Streifen entspricht den aktual unendlich kleinen Differenzen der Steigungsdreiecke der Ableitung \lm{ f\'(x) \cdot \s^{-1} } oder \lm{ .〈f\'(x)〉 } einer'."\n".
                    'Funktion \lm{ f(x) } und hier noch einmal mit Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins} in Stellenwertnotation gezeigt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  :=  \frac{ f(〈x〉․〈1〉) - f(x) }{ ․〈1〉 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  *〈 f(〈x〉․〈1〉) - f(x) *〉_{1}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  *〈 f(〈x〉․〈1〉) *〉_{1} - *〈 f(x) *〉_{1}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *〈 f(〈x〉․〈1〉) *〉_{1}  =  f\'(x) + *〈 f(x) *〉_{1}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *〈 f(〈x〉․〈1〉) *〉_{1}  =  *〈 f(x) *〉*〈 f\'(x) *〉.  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(〈x〉․〈1〉)  =  *〈 f(x) *〉.*〈 f\'(x) *〉  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Ableitung-mit-x-plus-s-tel-Kurznotation', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Ableitung-mit-x-plus-s-tel-Kurznotation}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wollen wir wir eine Definition der Vollständigen Integration aufstellen, dann ist zu berücksichtigen,'."\n".
                    'dass die Information über den absoluten Wert einer Funktion bei der Ableitung durch die Differenzierung verloren geht.'."\n".
                    'Dies kommt weil alle einzelnen Differenzen sich immer nur relativ auf den vorhergehenden Wert der Funktion beziehen.'."\n",
                      'Integrieren wir also in einem Intervall, dann müssen wir die Differenzen, auch genannt Differenziale,'."\n".
                    'auf den Wert der ursprünglichen Funktion \lm{ f(a) } am Intervallbeginn \lm{ a } aufsummieren:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \int_{a}^{x} f\'(n) \,dn  \widehat{=}  \!\!\! \sum_{ \forall n \in [a, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! f\'(n) \cdot \s^{-1}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Aequ-Integral-mit-Summe-ueber-Intervall-Menge-a-bis-x-superial-kleiner-ganzer-Zahlen', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Aequ-Integral-mit-Summe-ueber-Intervall-Menge-a-bis-x-superial-kleiner-ganzer-Zahlen}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \int_{a}^{x} f\'(n) \,dn  \widehat{=}  \!\!\! \sum_{ \forall n \in [a, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! .*〈 f\'(n) *〉  }'),
                      array( display => 'on',  latex => '{  *( a, x \in \mathbb{A}_{\S} *)  *[  f(x)  :=  f(a) + \!\!\! \sum_{ \forall n \in [a, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! f\'(n) \cdot \s^{-1}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  :=  f(a) + \!\!\! \sum_{ \forall n \in [a, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! .*〈 f\'(n) *〉  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Integrale-mit-s-hoch-minus-Eins-Kurznotation', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Integrale-mit-s-hoch-minus-Eins-Kurznotation}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Damit haben wir die vorherige Ableitung wieder rückgängig gemacht, weil wir eine schlüssige Definition'."\n".
                    'der ganzen Superial-Zahlen \lm{ \mathbb{S}_{\Z} } beziehungsweise der superial kleinen ganzen Zahlen'."\n".
                    '\lm{ \mathbb{S}_{\Z}^{-1} } entwickelt haben.'."\n",
                      'Im Falle, dass die Grenzen des Integrals in ihrer Größe vertauscht sind, also, wenn \lm{ x < a } gilt,'."\n".
                    '\jump{OM:SupNum:Formale-Entwicklung:Formalien:Summendefinition-ueber-Intervall-Mengen}{negiert sich der Wert des Integrals}.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:Integration:Beispiel-eines-konkreten-Integrals', text =>
                      
                'Beispiel eines konkreten Integrals', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Jetzt ein Beispiel, um anschaulich zu verstehen, was bei der Integration genau vor sich geht.'."\n".
                    'Dieses finden wir in der expliziten Schreibweise mit \lm{ \s } auch im Abschnitt \italic{›\jumpname{OM:SupNum:Einleitung:Vortext:Integral-genau-verstehen:Konkretes-Integral}‹},'."\n".
                    'hier nun allerdings vollständig in der neuen \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystem-Schreibweise}.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wir nehmen das erste obige \jump{OM:SupNum:Ableitungen-Integrale:Ableitung:Beispiele-fuer-Ableitungen}{Ableitungsbeispiel} \lm{ f(x) = x^2 } mit'."\n".
                      'dem Ableitungsergebnis \lm{ f\'(x) = *〈 2 x *〉.*〈 1 *〉 } und setzen dies in unsere Integralformel ein:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f(x)  =  f(0) \; + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 *〈 2 x *〉.*〈 1 *〉 *〉  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 2 x *〉*〈 1 *〉  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  *〈 f(0) *〉.*〈 2 \cdot \!\!\!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n *〉*〈 \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! 1 *〉  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Anschließend haben wir die innere und äußere Summe in zwei getrennte Summen umgeformt.'."\n",
                        'Die hintere Summe addiert die Eins \lm{ x \cdot s } mal, weil die Schrittgröße hierbei ja keine Rolle spielt,'."\n".
                      'sondern nur die Schrittanzahl, und das ergibt natürlich auch \lm{ x \cdot s }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  *〈 f(0) *〉.*〈 2 \cdot \!\!\!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n *〉*〈 x \s *〉  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  *〈 f(0) *〉.*〈 2 \cdot \!\!\!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n \; + \; x *〉  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Integriere-zu-x2-bis-auf-letzte-Summe', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Integriere-zu-x2-bis-auf-letzte-Summe}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die einzige noch nicht aufgelöste Summe der superial kleinen ganzen Zahlen der ersten \lm{ x \cdot s } Elemente dieser Menge, mit der Null,'."\n".
                      'ergibt sich aus der angepassten Gaußschen Summenformel\footnote{\const{BiOrd_g_footnote_text_GaussscheSummenformel}},'."\n".
                      'wie bei den Biordinalzahlen im Abschnitt \italic{›\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:SummeAllerNatuerlichenZahlenBisInsAktualUnendlicheBerechnen}‹} nach Formel'."\n".
                      '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich} angegeben,'."\n".
                      'weil die Menge \lm{ \mathbb{S}_{\N} } nach Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-g}'."\n".
                      'zur Klasse \lm{ \mathbb{K}_{\infty,g} } der Gauß-Summen äquivalenten Klassen – so auch Mengen – gehört:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{\N}  \in  \mathbb{K}_{\infty,g}  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-g}', label_incr => false),
                      array( display => 'on',  latex => '{  *( \mathbb{M} \in \mathbb{K}_{\infty,g} *) *( \forall n \in \mathbb{M} *)  *[  \sum_{ \forall i \in [ 0, n [_{\mathbb{M}} } \!\!\!\! i  =  \frac{ n^{2} - n }{ 2 }  *]  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{S}_{\N} *)  *[  \sum_{ \forall i \in [ 0, n [_{\mathbb{S}_{\N}} } \!\!\!\! i  =  \frac{ n^{2} - n }{ 2 }  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Diese Summe ist extra darauf angepasst, dass sie auch für aktual unendlich große Werte von \lm{ n },'."\n".
                      'also für aktual unendlich große natürliche Zahlen, gilt.'."\n",
                        'Wir müssen nur berücksichtigen, dass die Werte der gesuchten Summe in superial kleinen Schritten daher kommen:'."\n".
                      'Das bedeutet, dass wir es mit \lm{ x \cdot s } Elementen zu tun haben – anstatt mit \lm{ x } –,'."\n".
                      'was in der oben stehenden Formel auf der Ergebnisseite als \lm{ x \cdot s } für \lm{ n } eingeht.'."\n".
                      'Jedoch ist die Größe der einzelnen Summanden auf Ebene der ganzen Zahlen superial klein, sodass wir das Ergebnis um eine superiale Potenz \lm{ s }'."\n".
                      'verringern müssen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  .*〈 \frac{ *( *〈 x *〉_{1} *)^{2} - *〈 x *〉_{1} }{ 2 } *〉  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \frac{ *〈 x^{2} *〉*〈 -x *〉. }{ 2 }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Integration:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x', label_text => '\name{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Diese Summe haben wir auch noch einmal im Einzelnen im Rahmen der Superial-Zahlen aus ihren Teilsummen im Abschnitt \italic{›\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Direkte-Herleitung-der-angepassten-Gaussschen-Summenformel}‹}'."\n".
                      'hergeleitet, um zu zeigen, und damit ganz sicher zu gehen, dass diese richtig ist.'."\n",
                        'Das ist genau das gesuchte Ergebnis, was wir sofort durch Überprüfung sehen.'."\n".
                      'Dies eingesetzt in Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Integriere-zu-x2-bis-auf-letzte-Summe}'."\n".
                      'ergibt'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f(x)  =  *〈 f(0) *〉.*〈 2 \cdot \frac{ *〈 x^{2} *〉*〈 -x *〉. }{ 2 } \; + \; x *〉  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  *〈 f(0) *〉.*〈 *〈 x^{2} *〉*〈 -x *〉. \; + \; x *〉  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  f(0) \; + \; x^{2}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  0^{2} \; + \; x^{2}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  x^{2}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und ist auch das erwartete Ergebnis.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wie wir sehen, ist es tatsächlich mit den Superial-Zahlen möglich, ein Integral eines Polynoms'."\n".
                    'explizit auszurechnen.'."\n".
                    'Dies geht so einfach schon mal mit jedem Integral eines Polynoms, ist bei Polynomen höheren Grades aber natürlich entsprechend aufwendiger.'."\n".
                    'Offensichtlich ist dabei, dass wir so recht einfach verstehen, was bei der Berechnung des Integrals im Detail vor sich geht.'."\n",
                      'Und das ist ja eines unserer Ziele, beim Ableiten und besonders beim Integrieren nicht so eine Black-Box vor uns zu haben.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:Integration:Ableitung-Umkehrung-Integration', text =>
                      
                'Die Ableitung ist die Umkehrung der Integration', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Schauen wir uns an, ob wir die Integration einer allgemeinen Funktion mit der Ableitung wieder'."\n".
                    'Rückgängig machen können.'."\n".
                    'Wir setzen also das Integral für die allgemeine Funktion \lm{ f(x) } in die Ableitung ein:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on',  latex => '{  f\'(x)  ?=  \\\ \qquad\;\; \frac{ \displaystyle{ *( f(0) + \!\!\! \sum_{ \forall n \in [0, 〈x〉․〈1〉[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 f\'(n) *〉 *) } - \displaystyle{ *( f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 f\'(n) *〉 *) } }{ ․〈1〉 }  }'),
                      array( display => 'on',  latex => '{  f\'(x)  ?=  \frac{ \displaystyle{ *( f(0) + \!\!\! \sum_{ \forall n \in [0, 〈x〉․〈1〉[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 f\'(n) *〉 *) } }{ ․〈1〉 } \\\ \qquad\qquad\qquad\quad\;\; - \frac{ \displaystyle{ *( f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 f\'(n) *〉 *) } }{ ․〈1〉 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  ?=  \\\ \qquad\qquad\quad\;\; \frac{ \displaystyle{ *( \sum_{ \forall n \in [0, 〈x〉․〈1〉[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 f\'(n) *〉 *) } - \displaystyle{ *( \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 f\'(n) *〉 *) } }{ ․〈1〉 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  ?=  \\\ \qquad\qquad\quad\;\; \displaystyle{ *( \sum_{ \forall n \in [0, 〈x〉․〈1〉[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! f\'(n) *) } - \displaystyle{ *( \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! f\'(n) *) }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  ?=  \\\ \qquad\qquad\quad\;\;\; *( \displaystyle{ *( \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! f\'(n) *) } + \displaystyle{ *( \sum_{ \forall n \in [x, 〈x〉․〈1〉[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! f\'(n) *) } *) \\\ \qquad\qquad\qquad\qquad\qquad\qquad - \displaystyle{ *( \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! f\'(n) *) }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  ?=  \sum_{ \forall n \in [x, 〈x〉․〈1〉[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! f\'(n)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  f\'(x)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen also, dass die Ableitung einer Integration einer allgemeinen Funktion die Integration generell'."\n".
                    'Rückgängig macht.'."\n".
                    'Die Ableitung einer Integration ist also deren Umkehrung.'."\n".
                    'Dies können wir offensichtlich geschlossen zeigen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:Integration:Integration-Umkehrung-Ableitung', text =>
                      
                'Die Integration als Umkehrung der Ableitung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ist nun auch die Integration einer Ableitung ihre Umkehrung?'."\n",
                      'Dies können wir bisher nicht geschlossen zeigen, wie wir nachfolgend sehen werden.'."\n".
                    'Wir brauchen dies aber auch nicht unbedingt zeigen, weil wir die Definition der Integration in Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Integrale-mit-s-hoch-minus-Eins-Kurznotation}'."\n".
                    'so konstruiert haben, dass dies der Fall sein muss.'."\n",
                      'Was wir zeigen können ist, dass wir auch nach Aufspaltung der Ableitungsteile in ihre Teilsummen, die nach dem Kürzen'."\n".
                    'der Faktoren der Ableitung und des Integrals verbleiben, wir den Summanden \lm{ f(〈n〉․〈1〉) } der ersten Summe'."\n".
                    'mit Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Ableitung-mit-x-plus-s-tel-Kurznotation}'."\n".
                    'ersetzen können, die aus der Umformung der Ableitung folgt,'."\n".
                    'sodass dadurch das Integral der Ableitung wieder zum reinen Integral wird:'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f(x)  ?=  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 \frac{ f(〈n〉․〈1〉) - f(n) }{ ․〈1〉 } *〉  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  ?=  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! *( f(〈n〉․〈1〉) - f(n) *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  ?=  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! f(〈n〉․〈1〉) - \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! f(n)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Durch das Einsetzen mit Hilfe von Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Ableitung-mit-x-plus-s-tel-Kurznotation}'."\n".
                    'für \lm{ f(〈n〉․〈1〉) } können wir schreiben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  ?=  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! *〈 f(n) *〉.*〈 f\'(n) *〉 - \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! f(n)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  ?=  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! f(n) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 f\'(n) *〉 \\\ \qquad\qquad\qquad\qquad\qquad\qquad\quad\;\;\; - \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! f(n)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 f\'(n) *〉  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  f(x)  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{Kurzer Weg nur innerhalb der Summe …}',
                TitleVis => 'Kurzer Weg nur innerhalb der Summe:', ParagraphList => array(

                  array( 'text', array( text => array(
                    'Die Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Ableitung-mit-x-plus-s-tel-Kurznotation}'."\n".
                    'können wir natürlich auch gleich nur innerhalb der Summe für \lm{ f(〈n〉․〈1〉) } einsetzen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.IN', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  ?=  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! *( f(〈n〉․〈1〉) - f(n) *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  ?=  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! *( *〈 f(n) *〉.*〈 f\'(n) *〉 - f(n) *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\! .*〈 f\'(n) *〉  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  f(x)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier finde ich aber, dass dies eigentlich kein Beweis ist, sondern nur, wenn wir auch zeigen, dass das Einsetzen'."\n".
                    'auch für die aufgespaltene Summe gilt.'."\n".
                    ''))),

                    ))),

                  array( 'text', array( text => array(
                    'Womit wir wieder bei der Definition des Integrals in Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Integrale-mit-s-hoch-minus-Eins-Kurznotation}'."\n".
                    'sind.'."\n",
                      'Dies ist aber kein wirklicher Beweis, sondern eher ein innerer Plausibilitätstest, dass das Integral und die Ableitung'."\n".
                    'einander aufheben und dies auch für die Summe des Integrals durchlässig ist.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen'),
                    )),
              )
          ); ?>


          <!  • Nähere Untersuchung bestimmter Summen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ableitungen-Integrale:Integration', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Im Folgenden beschäftigen wir uns etwas näher mit – unendlichen – Summen, die zum Beispiel auch bei der Berechnung'."\n".
                    'von Integralen auftauchen.'."\n".
                    'Im Fall, dass ihre Ergebnisse schon bekannt sind untersuchen wir, ob wir sie auch noch anders ausdrücken können.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Summen-zur-Integration-von-2x-plus-supkl-Eins', text =>
                      
                'Summen zur Integration von \lm{ 〈2 x〉․〈1〉 }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wir kennen nun schon das Ergebnis der Summe \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x},'."\n".
                    'aller superial kleinen ganzen Superial-Zahlen'."\n".
                    // '\hidden{\lm{ \mathbb{S}^{-1}_Z }'."\n".
                    'von Null bis ausschließlich \lm{ x }, die bei der \jump{OM:SupNum:Ableitungen-Integrale:Integration:Beispiel-eines-konkreten-Integrals}{Integration von} \lm{ f\'(x) =〈 2 x 〉․〈 1 〉} \jump{*SupNum:Stellenwertsystem-Schreibweise}{(Stellenwertsystem-Schreibweise)} auftritt.'."\n".
                    'Allerdings wissen wir nicht genau, wie sich diese Summe durch direkte Berechnung der Teilsummen, also ohne das Benutzen der'."\n".
                    'angepassten Gaußschen Summenformel\footnote{\const{BiOrd_g_footnote_text_GaussscheSummenformel}}, berechnet,'."\n".
                    'die wir aus der Theorie der \jump{OM:BiOrd:Home}{Biordinalzahlen}, wie im Abschnitt \italic{›\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:SummeAllerNatuerlichenZahlenBisInsAktualUnendlicheBerechnen}‹} nach Formel'."\n".
                    '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich} angegeben, bereits kennen.'."\n".
                    'Dies gilt so, weil die Menge \lm{ \mathbb{S}_{\N} } nach Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-g}'."\n".
                    'zur Klasse \lm{ \mathbb{K}_{\infty,g} } der Gauß-Summen äquivalenten Klassen – so auch Mengen – gehört.'."\n",
                      'Diese Summe sieht nun in zwei Teilen wie folgt aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot s - x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot \s }{ 2 } - \frac{ x }{ 2 }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Zur Beschreibung der Summe wird eine \jump{OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge}{Intervall-Menge} genutzt,'."\n".
                    'die auf \jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Superial-Zahlen} beruht,'."\n".
                    'welche eine \jump{OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen}{superiale Potenzebene ins superial kleine skaliert} sind.'."\n",
                    'Die direkte Berechnung der beiden rechten Teilsummen aus der linken Summe wollen wir nun angehen.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Direkte-Herleitung-der-angepassten-Gaussschen-Summenformel}{}Direkte Herleitung der angepassten Gaußschen Summenformel} \\\\'."\n".
                    'In Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen}'."\n".
                    'haben wir die Elemente, die wir aufsummieren wollen, auszugsweise aufgelistet, wobei der Beginn und das Ende exakt stimmen.'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x[_{\mathbb{S}^{-1}_{Z}}  =  \\\  \quad *\{  \quad\,  0 \s^{-1}, 1 \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{1}{2} x - 2 \s^{-1},\; \frac{1}{2} x - \s^{-1},\; \frac{1}{2} x,\; \frac{1}{2} x + \s^{-1},\; \frac{1}{2} x + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{2}{3} x - 2 \s^{-1},\; \frac{2}{3} x - \s^{-1},\; \frac{2}{3} x,\; \frac{2}{3} x + \s^{-1},\; \frac{2}{3} x + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, x - 3 \s^{-1}, x - 2 \s^{-1}, x - \s^{-1}   \quad *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die prinzipielle Summe, die diesen superial kleinen ganzen Zahlen zugrunde liegt, besteht ebenfalls aus zwei Summanden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{\S} *) *( \forall z \in \mathbb{Z} *)  *[  a + z \cdot \s^{-1}  \in  \mathbb{S}^{-1}_{Z}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die genaue Menge können wir, angelehnt an die später gefundene Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s},'."\n".
                    'folgende Beschreibung geben – wie immer mit \lm{ x \in \mathbb{A}_{\S} }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  [ 0, \s [_{\mathbb{S}_{\N}}  =  \\\ \quad *\{  u  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  u  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < 1  \\\\  \s + z^{-}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }',
                                          /* label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s', */label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s}', label_incr => false),
                      array( display => 'on',  latex => '{  [ 0, x [_{\mathbb{S}^{-1}_{Z}}  =  \\\ \quad *\{  u  *|*  *( \forall a \in [ 0, x ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  u  =  \begin{cases} n \cdot \s^{-1}  &  \text{ falls } a = 0  \\\\  a + z \cdot \s^{-1}  &  \text{ falls } 0 < a < x  \\\\  x + z^{-} \cdot \s^{-1}  &  \text{ falls } a = x  \end{cases}  *]  *\}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Menge-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Menge-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wir nehmen einmal an, dass die beiden Summanden der zu summierenden Superial-Zahlen jeweils'."\n".
                    'den beiden einzelnen Teilsummen des bekannten Ergebnisses der zu berechnenden Summe \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt} entsprechen.'."\n".
                    'Also summieren wir doch einmal zuerst die zweite Teilsumme unserer Superial-Zahlen und daran anschließend die erste Teilsumme.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Summe des zweiten Summanden unserer Superial-Zahlen} \\\\'."\n".
                    'Für alle Koeffizienten \lm{ a } des ersten Summanden, von Null bis einschließlich'."\n".
                    '\lm{ x }, läuft der zweite Summand \lm{ z } komplett im Negativen und im Positiven durch,'."\n".
                    'bis auf den Beginn und das Ende, siehe Intervall-Menge \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen},'."\n".
                    'wo \lm{ a } als \lm{ a \cdot x } benannt ist.'."\n".
                    'Am Beginn laufen nur die natürlichen Koeffizienten \lm{ n } des zweiten Summanden durch, mit der Null, und'."\n".
                    'am Ende laufen nur die rein negativen Koeffizienten \lm{ z^- } durch.'."\n",
                      'Die Anzahl der superial kleinen ganzen Zahlen von Null bis einschließlich \lm{ x }'."\n".
                    'ist \lm{ x \cdot \s + 1 }.'."\n".
                    'Da allerdings für Null und \lm{ x } jeweils nur ein halber Durchlauf, also gemeinsam dann ein ganzer Durchlauf, des zweiten Summanden stattfindet, ist die Anzahl der'."\n".
                    'ganzen Durchläufe insgesamt somit nur \lm{ x \cdot \s }, also einer weniger.'."\n",
                      'In jedem Durchlauf werden einmal alle superial kleinen ganzen Zahlen addiert.'."\n".
                    'Von den \jump{OM:BiOrd:Home}{Biordinalzahlen} her wissen wir den Wert der Summe aller endlichen ganzen Zahlen aus Formel'."\n".
                    '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall z \in \mathbb{Z}} z  =  -ω  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die Summe, die wir suchen, ist aber nicht die aller endlichen ganzen Zahlen, sondern die aller superial kleinen ganzen Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}}  z \cdot \s^{-1}  =  \frac{ -ω }{ \s }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei steht das Symbol \lm{ ω } für die Anzahl der endlichen natürlichen Zahlen, mit der Null, in der Menge \lm{ \mathbb{N} };'."\n".
                    'dies entspricht der Anzahl der Schritte der vollständigen Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}.'."\n",
                      'An dieser Stelle ist es vermutlich für den ein oder anderen erstaunlich, dass ganz unabhängig von den hier entwickelten Superial-Zahlen'."\n".
                    'in der Theorie der Biordinalzahlen deutlich wird, dass genauso viele endliche und rein negative ganze Zahlen existieren,'."\n".
                    'wie es endliche natürliche Zahlen gibt, also endliche positive ganze Zahlen, mit der Null.'."\n".
                    'Demnach finden wir, bei genauer Untersuchung, eine \jump{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}{fundamentale Asymmetrie}'."\n".
                    'zwischen der ontologischen Struktur der endlichen ganzen Zahlen und der Verteilung ihrer Werte.'."\n".
                    'Dadurch ergibt schlussendlich die Summe aller endlichen ganzen Zahlen die aktual unendlich große und negative Zahl \lm{ -ω }'."\n".
                    'und nicht Null, wie wir naiv annehmen könnten.'."\n",
                      'Auf der anderen Seite ist die Anzahl der rationalen Koeffizienten von Null bis ausschließlich Eins,'."\n".
                    'nach Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# *( [ 0, 1 [_{\mathbb{A}_{\S}} *)  =  \frac{ \s }{ 2 ω }  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# *( [ 0, x [_{\mathbb{A}_{\S}} *)  =  \frac{ x \cdot \s }{ 2 ω }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-x', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-x}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Anschließend haben wir die Formel für die Koeffizienten von Null bis ausschließlich \lm{ x } äquivalent mit \lm{ x } erweitert.'."\n",
                      'So oft addiert sich jetzt das superial kleine \lm{ \frac{ -ω }{ \s } } von davor auf, wird folglich damit multipliziert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  \# *( [ 0, x \, [_{\mathbb{A}_{\S}} *) \; \cdot \sum_{ \forall z \in \mathbb{Z} }  z \cdot \s^{-1}  =  \frac{ x \cdot \s }{ 2 ω } \cdot \sum_{ \forall z \in \mathbb{Z} }  z \cdot \s^{-1}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \# *( [ 0, x \, [_{\mathbb{A}_{\S}} *) \; \cdot \sum_{ \forall z \in \mathbb{Z} }  z \cdot \s^{-1}  =  \frac{ x \cdot \s }{ 2 ω } \cdot \frac{ -ω }{ \s }  }',
                                    latex_if_visible => '{  \Leftrightarrow  \# *( [ 0, x \, [_{\mathbb{A}_{\S}} *) \; \cdot \sum_{ \forall z \in \mathbb{Z} }  z \cdot \s^{-1}  =  \frac{ x \cdot \s }{ 2 ω } \cdot \frac{ -ω }{ \s }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# *( [ 0, x \, [_{\mathbb{A}_{\S}} *) \; \cdot \sum_{ \forall z \in \mathbb{Z} }  z \cdot \s^{-1}  =  - \frac{ x }{ 2 }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-ungeloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-ungeloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# *( [ 0, x \, [_{\mathbb{A}_{\S}} *) \, \cdot \; \frac{ -ω }{ \s }  =  - \frac{ x }{ 2 }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-geloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-geloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \boxed{  -\, \# *( [ 0, x \, [_{\mathbb{A}_{\S}} *) \, \cdot \; \frac{ ω }{ \s }  =  - \frac{ x }{ 2 }  }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Dies entspricht tatsächlich, wie gedacht, der zweiten Teilsumme unserer bekannten'."\n".
                    'Summe \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt}.'."\n",
                      'Und es zeigt, dass die in der Theorie der Biordinalzahlen gefundene fundamentale Asymmetrie zwischen der strukturellen Ontologie'."\n".
                    'und den Werten der endlichen ganzen Zahlen, aufgrund derer sich die Summe aller endlichen ganzen Zahlen zu \lm{ -ω } und'."\n".
                    'die Anzahl aller endlicher ganzen Zahlen zu \lm{ 2 ω } ergibt, wirklich korrekt ist.'."\n".
                    'Denn diese Asymmetrie ist ein essentieller und so auch plausibler Bestandteil der Integralrechnung, wie wir sehen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Summe des ersten Summanden unserer Superial-Zahlen} \\\\'."\n".
                    'Die erste Teilsumme unserer superial kleinen ganzen Superial-Zahlen \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen} soll nach unserer Vermutung dem'."\n".
                    'ersten Summanden des uns bekannten Ergebnisses der zu berechnenden Summe \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt} ergeben.'."\n",
                      'Die erste Teilsumme unserer zu summierenden Zahlen enthält alle rationalen Zahlen von Null bis einschließlich \lm{ x }.'."\n".
                    'Diese Summe muss allerdings für jede superial kleine Zahl gebildet werden, die in unserer Menge \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen}'."\n".
                    'enthalten ist.'."\n",
                      'Für die rationale Zahl Null in der ersten Teilsumme gibt es nur die natürlichen Zahlen, mit der Null, als superial kleine Schritte in der zweiten Teilsumme:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \sum_{ \forall a \in [ 0 ]_{\mathbb{A}_{\S}}}  \!\! a *) \cdot ω  =  0 \cdot ω  =  0  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die sinnvollen Koeffizienten der Superial-Zahlen \lm{ a } mit \lm{ 0 < a < x } in der ersten Teilsumme gibt es wirklich'."\n".
                    'alle superial kleinen ganzzahligen Schritte in der zweiten Teilsumme.'."\n".
                    'Da wir die Summe dieser rationalen Zahlen noch nicht kennen, wollen wir sie berechnen und setzen sie gleich unserer neuen Variable \lm{ y }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \sum_{ \forall a \in ] 0, x [_{\mathbb{A}_{\S}}}  \!\! a *) \cdot 2 \cdot ω  =  y \cdot 2 \cdot ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall a \in ] 0, x [_{\mathbb{A}_{\S}}}  \!\! a  =  y  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei ist es gleich, ob die Null in der Indexmenge der Summe dabei ist oder fehlt.'."\n".
                    'Die Summe ist also äquivalent, wenn wir die Null durchs Umdrehen der vorderen Intervall-Klammer'."\n".
                    'in die Summe mit hinein nehmen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  =  y  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die rationale Zahl \lm{ x } in der ersten Teilsumme gibt es nur alle rein negativen ganzen Zahlen als superial kleine Schritte in der zweiten Teilsumme:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \sum_{ \forall a \in [ x ]_{\mathbb{A}_{\S}}}  \!\! a *) \cdot ω  =  x \cdot ω  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Alle drei Teile gemeinsam ergeben also den ersten uns bekannten Summanden aus Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt},'."\n".
                    'den wir nun direkt berechnen:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei also die Summe der drei Teile der erste Summand unserer Superial-Zahlen und dieser gleich der ersten Teilsumme,'."\n".
                      'die uns schon bekannt ist:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \sum_{ \forall a \in [ 0 ]_{\mathbb{A}_{\S}}}  \!\! a *) \cdot ω  \\\ \qquad\quad\quad +  *( \sum_{ \forall a \in ] 0, x [_{\mathbb{A}_{\S}}}  \!\! a *) \cdot 2 \cdot ω  \\\ \qquad\quad\quad\quad\quad +  *( \sum_{ \forall a \in [ x ]_{\mathbb{A}_{\S}}}  \!\! a *) \cdot ω  =  \frac{ x^{2} \cdot \s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  0 \cdot ω  +  y \cdot 2 \cdot ω  +  x \cdot ω  =  \frac{ x^{2} \cdot \s }{ 2 }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y \cdot 2 \cdot ω  +  x \cdot ω  =  \frac{ x^{2} \cdot \s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( y \cdot 2  +  x *) \cdot ω  =  \frac{ x^{2} \cdot \s }{ 2 }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-y-mal-2-plus-x-zus-mal-omega-ist-erster-Summand', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-y-mal-2-plus-x-zus-mal-omega-ist-erster-Summand}', label_incr => true),
                      array( display => 'off', latex => '{  \Leftrightarrow  y \cdot 2  +  x  =  \frac{ x^{2} \cdot \s }{ 2 \cdot ω }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y \cdot 2  +  x  =  \frac{ x \cdot \s }{ 2 \cdot ω } \cdot x  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Der erste Faktor des rechten Produkts ist uns schon oben aus Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-x}'."\n".
                      'bekannt und wir können ihn ersetzen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  y \cdot 2  +  x  =  \# [ 0, x [_{\mathbb{A}_{\S}} \; \cdot \; x  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wir erweitern beide Seiten mit \lm{ ω } und vertauschen links und rechts:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  *( y \cdot 2  +  x *) \cdot ω  =  \# [ 0, x [_{\mathbb{A}_{\S}} \; \cdot \; x \cdot ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# [ 0, x [_{\mathbb{A}_{\S}} \; \cdot \; x \cdot ω  =  *( y \cdot 2  +  x *) \cdot ω  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Aus Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-y-mal-2-plus-x-zus-mal-omega-ist-erster-Summand}'."\n".
                      'kennen wir unsere rechte Seite hier und setzen diese ein:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \boxed{  \# [ 0, x [_{\mathbb{A}_{\S}} \; \cdot \; x \cdot ω  =  \frac{ x^{2} \cdot \s }{ 2 }  }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wodurch sich unsere neue Formel ergibt.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'So erhalten wir einen neuen Ausdruck für unseren schon bekannten Summanden.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Summe beider Summanden unserer Superial-Zahlen} \\\\'."\n".
                    'Jetzt können wir die Summe aller superial kleinen Zahlen'."\n".
                    'von Null bis ausschließlich \lm{ x } anders ausdrücken:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wir ersetzen in der uns bekannten Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt}'."\n".
                      'die beiden Summanden auf der rechten Seite durch die neuen Ausdrücke \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins}'."\n".
                      'und \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins},'."\n".
                      'die wir durch die jeweils einzelne Summation der beiden Teilsummen unserer superial kleinen Zahlen erhalten haben'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot \s }{ 2 } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \# [ 0, x [_{\mathbb{A}_{\S}} \; \cdot \; x \cdot ω  -  \frac{ x }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \# [ 0, x [_{\mathbb{A}_{\S}} \, \cdot \; x \cdot ω  \; - \;  \# [ 0, x \, [_{\mathbb{A}_{\S}} \, \cdot \; \frac{ ω }{ \s }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \boxed{  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \# [ 0, x [_{\mathbb{A}_{\S}} \, \cdot \; ω \cdot *( x - \frac{ 1 }{ \s } *)  }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz-ausgeklammert', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz-ausgeklammert}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und erhalten eine ganz andere Darstellung, die recht kurz dadurch möglich wird,'."\n".
                      'weil beide Summanden einen gemeinsamen Faktor enthalten, den wir hier ausklammern konnten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Die Summe unserer superial kleinen Zahlen findet also einen neuen Ausdruck,'."\n".
                    'der in wesentlichen Teilen auf der Anzahl von Elementen in Mengen beruht.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Eine interessante Zugabe zur ersten Summe} \\\\'."\n".
                    'Die Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-y-mal-2-plus-x-zus-mal-omega-ist-erster-Summand}'."\n".
                    'können wir auch noch anders schreiben, wenn wir unseren Substituenten \lm{ y } wieder durch'."\n".
                    'die ihm gleiche Summe ersetzen.'."\n".
                    'Wir möchten dabei aus den drei Summanden oben zwei sehr anschauliche Summanden machen:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Nehmen wir also Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-y-mal-2-plus-x-zus-mal-omega-ist-erster-Summand}'."\n".
                      'und ersetzen unseren Substituenten:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( y \cdot 2  +  x *) \cdot ω  =  \frac{ x^{2} \cdot \s }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-y-mal-2-plus-x-zus-mal-omega-ist-erster-Summand}', label_incr => false),
                      array( display => 'on',  latex => '{  *( y + y + x *) \cdot ω  =  \frac{ x^{2} \cdot \s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  \;\; +  \! \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  \;+\;  x *) \cdot ω  =  \frac{ x^{2} \cdot \s }{ 2 }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Hier beachten wir, dass die Intervall-Mengen-Klammern in beiden Summen gleich ausgerichtet sind.'."\n".
                      'Durch eine unterschiedliche Ausrichtung der Klammern können wir die geklammerte Summe umschreiben,'."\n".
                      'weil wir auf der Seite der Null die Klammer einfach ohne Folgen umdrehen'."\n".
                      'und weil wir durch das Umdrehen der Klammer auf der Seite des \lm{ x } den nachfolgenden'."\n".
                      'Summanden \lm{ x } einfach in die Summe integrieren können:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  *( \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  \;\; +  \! \sum_{ \forall a \in [ 0, x ]_{\mathbb{A}_{\S}}}  \!\! a *) \cdot ω  =  \frac{ x^{2} \cdot \s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \boxed{  *( \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  \;\; +  \! \sum_{ \forall a \in ] 0, x ]_{\mathbb{A}_{\S}}}  \!\! a *) \cdot ω  =  \frac{ x^{2} \cdot \s }{ 2 }  }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Doppelsummenausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Doppelsummenausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => true),
                      //%! array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  \;\; +  \! \sum_{ \forall q \in ] 0, x ]_\mathbb{Q}}  \!\! q  =  \frac{ x^{2} \cdot \s }{ 2 \cdot ω }  }'),
                      //%! array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  \;\; +  \! \sum_{ \forall q \in ] 0, x ]_\mathbb{Q}}  \!\! q  =  \frac{ x \cdot \s }{ 2 \cdot ω } \cdot x  }'),
                      //%! array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  \;\; +  \! \sum_{ \forall q \in ] 0, x ]_\mathbb{Q}}  \!\! q  =  \# [ 0, x [_\mathbb{Q} \; \cdot \; x  }'),
                      //%! array( display => 'on',  latex => '{  \Leftrightarrow  *( \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  \;\; +  \! \sum_{ \forall q \in ] 0, x ]_\mathbb{Q}}  \!\! q *) \cdot ω  =  \# [ 0, x [_\mathbb{Q} \; \cdot \; x \cdot ω  }'),
                      //%! array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ x^{2} \cdot \s }{ 2 }  =  \# [ 0, x [_\mathbb{Q} \; \cdot \; x \cdot ω  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wodurch wir den neuen Ausdruck erhalten haben.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Den neuen Ausdruck für den ersten Summanden des uns bekannten Ergebnisses der superial kleinen ganzen Zahlen,'."\n".
                    'von Null bis ausschließlich \lm{ x }, können wir so interpretieren:'."\n",
                      'Die erste Summe in der Klammer steht für alle superial kleinen ganzen Zahlen,'."\n".
                    'deren ganzer Zahlenanteil Null oder positiv sind.'."\n".
                    'Die zweite Summe in der Klammer steht für alle superial kleinen ganzen Zahlen,'."\n".
                    'deren ganzer Zahlenanteil rein negativ sind.'."\n".
                    'Jede dieser beiden Summen von rationalen Zahlen gibt es daher \lm{ ω } mal,'."\n".
                    'da es sowohl alle Null oder positiven ganzen Zahlen in der Anzahl \lm{ ω } gibt,'."\n".
                    'als dies auch für alle rein negativen der Fall ist.'."\n",
                      'Unsere bekannte Gesamtsumme wird dann zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot \s }{ 2 } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  *( \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  \;\; +  \! \sum_{ \forall a \in ] 0, x ]_{\mathbb{A}_{\S}}}  \!\! a *) \cdot ω  -  \frac{ x }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  *( \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  \;\; +  \! \sum_{ \forall a \in ] 0, x ]_{\mathbb{A}_{\S}}}  \!\! a *) \cdot ω  \\\  \qquad\qquad\qquad\qquad\qquad\qquad - \;  \# [ 0, x \, [_{\mathbb{A}_{\S}} \, \cdot \, ω \cdot \s^{-1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \boxed{  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  *( \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  \;\; +  \! \sum_{ \forall a \in ] 0, x ]_{\mathbb{A}_{\S}}}  \!\! a  \\\  \qquad\qquad\qquad\qquad\qquad\; - \;  \# [ 0, x \, [_{\mathbb{A}_{\S}} \; \cdot \; \s^{-1} *) \cdot ω  }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Ist in jedem Fall interessant, dass \lm{ ω } in allen Summanden vorhanden ist und generell'."\n".
                    'ausgeklammert werden kann.'."\n".
                    'Diese Summe lässt sich noch auf weitere Arten umformen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:X', text =>
                      
                'Summe aller Koeffizienten von Null bis ausschließlich \lm{ x }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Interessant ist auch die Berechnung der Summe der endlichen Koeffizienten der Superial-Zahlen'."\n".
                    'von Null bis ausschließlich der Zahl \lm{ x }:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-y-mal-2-plus-x-zus-mal-omega-ist-erster-Summand}'."\n".
                      'gegeben, und wir formen um und ersetzen dann auch wieder den Substituenten \lm{ y }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( y \cdot 2  +  x *) \cdot ω  =  \frac{ x^{2} \cdot \s }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-y-mal-2-plus-x-zus-mal-omega-ist-erster-Summand}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  y \cdot 2  +  x  =  \frac{ x^{2} \cdot \s }{ 2 \cdot ω }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y \cdot 2  =  \frac{ x^{2} \cdot \s }{ 2 \cdot ω }  -  x  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  \frac{ x^{2} \cdot \s }{ 4 \cdot ω }  -  \frac{ x }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \boxed{  \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 \cdot ω } - \frac{ x }{ 2 }  }  \;\;  ,  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x', label_text => '\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'so erhalten wir einen Ausdruck für die gesuchte Summe.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wenn es sich bei den sinnvollen Koeffizienten der Superial-Zahlen wirklich um alle reell algebraischen Zahlen handeln sollte,'."\n".
                    'wie \jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{wir vermuten},'."\n".
                    'dann habe ich einen Ausdruck für deren Summe bisher noch nicht gesehen und konnte bis heute auch noch nichts vergleichbares finden.'."\n",
                      'Unsere Biordinalzahlen und Superial-Zahlen sind etwas ganz besonderes,'."\n".
                    'weil sie uns in die Lage versetzen, eine Idee davon zu bekommen, wie wir solche Summen'."\n".
                    'ausdrücken können.'."\n",
                      'Erstaunlich, wie ähnlich diese Summe der Summe aller superial kleinen Zahlen von Null'."\n".
                    'bis ausschließlich \lm{ x } ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot \s }{ 2 } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Hieran können wir erkennen, wie tief verwoben die ganzen und natürlichen Zahlen mit den algebraischen Zahlen offenbar sind.'."\n",
                      'Die Zahlentheorie erhellt sich auf diese Weise insgesamt und verschafft uns tiefe Einblicke in die Welt der Mathematik.'."\n".
                    'Sehr erfreulich, auf diese Weise immer besser zu verstehen was die Geometrie mit der Arithmetik und der Zahlentheorie verbindet.'."\n".
                    ''))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:X',
                Title => '\small{Ein weiterer Ansatz diese Summe zu berechnen …}',
                TitleVis => 'Ein weiterer Ansatz diese Summe zu berechnen:', ParagraphList => array(

                  array( 'text', array( text => array(
                  '\condb{Ein weiterer Ansatz diese Summe zu berechnen} \\\\'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n",
                      'Im Grunde genommen haben wir damit schon den Beweis für die Richtigkeit dieser Gleichung erbracht.'."\n".
                    'Aber vielleicht können wir ja noch besser verstehen, warum dies so ist?'."\n",
                      'Wie oben schon erwähnt, wissen wir mit Hilfe der Biordinalzahlen aus dem späteren Abschnitt \italic{›\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS}‹}'."\n".
                    'die Anzahl der rationalen Zahlen zwischen Null und ausschließlich der Eins aus Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s}.'."\n".
                    'Diese haben wir in Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-x} auf ihre Anzahl zwischen Null und ausschließlich \lm{ x } erweitert.'."\n",
                      'Die Anzahl der rationalen Zahlen zwischen Null und ausschließlich \lm{ x } beläuft sich demnach auf \lm{ \frac{ x \cdot \s }{ 2 \cdot ω }  \;  . }'."\n".
                    'Ihre Größenordnung \lm{ \s } zeigt uns, dass wir auch ein Ergebnis in der Größenordnung \lm{ \s } erwarten sollten,'."\n".
                    'wenn wir so viele endliche Zahlen summieren.'."\n".
                    'Das passt schon mal zu unserer gesuchten Summe.'."\n",
                      'Da es sich bei den rationalen Zahlen um die Koeffizienten endlicher Größe von superial kleinen ganzen Zahlen handelt,'."\n".
                    'müssen sie alle den gleichen Abstand zueinander haben, der sich aus ihrer Dichte \lm{ \rho_Q } berechnet:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'off', latex => '{  \rho_{Q}  =  \frac{ \frac{ x \cdot \s }{ 2 \cdot ω } }{ x }  }'),
                      array( display => 'on', latex => '{  \rho_{Q}  =  \frac{ \frac{ x \cdot \s }{ 2 \cdot ω } }{ x }  }'),
                      array( display => 'on',  latex => '{  \rho_{Q}  =  \frac{ \s }{ 2 \cdot ω }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \Delta_{Q}  =  \frac{ 2 \cdot ω }{ \s }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Bei der gesuchten Summe handelt es sich um die Summe von positiven Werten, mit der Null, die sich auf einer Hauptdiagonalen'."\n".
                    'verteilen, wie es auch bei den natürlichen Zahlen der Fall ist.'."\n".
                    'Naiv gesprochen, können wir auch die Summe der natürlichen nehmen und diese auf die entsprechende Dichte skalieren.'."\n",
                      'Die Summe der endlichen und aktual unendlichen natürlichen Zahlen der ersten \lm{ n } Elemente einer solchen Menge, mit der Null,'."\n".
                    'ergibt sich aus der angepassten Gaußschen Summenformel\footnote{\const{BiOrd_g_footnote_text_GaussscheSummenformel}},'."\n".
                    'wie bei den Biordinalzahlen im Abschnitt \italic{›\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}‹} nach Formel'."\n".
                    '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich} angegeben.'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in [ 0, n [_{\mathbb{N}_{\infty}} } i  =  \frac{ n^{2} - n }{ 2 }  }',
                                           label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall i \in [ 0, \frac{ x \cdot \s }{ 2 \cdot ω } [_{\mathbb{N}_{\infty}} }  \!\!\!\! i  =  \frac{ *( \frac{ x \cdot \s }{ 2 \cdot ω } *)^{2} - \frac{ x \cdot \s }{ 2 \cdot ω } }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und das Ergebnis ist jetzt um \lm{ \frac{ \s }{ 2 \cdot ω } } zu weit'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                    ))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eulersche-Zahl-e-Funktion'),
                    )),
              )
          ); ?>


      <?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
