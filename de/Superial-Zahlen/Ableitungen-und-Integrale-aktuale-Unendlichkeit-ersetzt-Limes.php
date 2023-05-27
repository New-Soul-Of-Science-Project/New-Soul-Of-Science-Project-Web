<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Ableitungen-Integrale'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Formale-Entwicklung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Der Ausgangspunkt zur Entdeckung und Erforschung der Superial-Zahlen war, wie in der \\jump{OM:SupNum:Einleitung}{Einleitung}'."\n".
                    'schon beschrieben, mein Bedürfnis, mehr Klarheit davon zu bekommen, was Ableitungen\\color{*Bearb}{(Verweis)} und Integrale\\color{*Bearb}{(Verweis)} eigentlich sind.'."\n".
                    'Ich wollte genauer Verstehen und explizit ausdrücken können, was implizit vor sich geht, wenn wir eine Funktion ableiten oder integrieren.'."\n",
                      'So entdeckte ich die Superial-Zahlen und mit ihnen eine Möglichkeit, bei der ihre normierte aktuale Unendlichkeit'."\n".
                    'in der Entwicklung der Definition der Ableitung und der Integration den Limes\\color{*Bearb}{(Verweis)}'."\n".
                    'oder das Differential\\color{*Bearb}{(Verweis)} ersetzt.'."\n".
                    'Auf diese Weise können wir, anstatt den Limes-Operator oder den Differential-Operator zu benutzen, einfach wie gewohnt mit Zahlen rechnen.'."\n",
                      'Es geht also um Transparenz und Genauigkeit, denen wir an dieser Stelle den Vorzug gegenüber der Kürze und der alten Gewohnheit'."\n".
                    'von (kurzen) Schreibweisen geben werden.'."\n".
                    'Wir wollen zunächst entdecken, ergründen und verstehen und eben nicht gleich verkürzen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Ableitung', text =>
                      
                'Die Ableitung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Bei der Ableitung spielt ein Bruch die zentrale Rolle, bei dem sowohl Zähler als auch Nenner'."\n".
                    'Differenzen sind, die, aus heute üblicher Perspektive, bei höherer Genauigkeit immer kleiner werden und im Positiven gegen'."\n".
                    'Null streben.'."\n",
                      'Dies kann klassischer Weise durch einen Limes ausgedrückt werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  =  \lim\limits_{\Delta x \rightarrow +0}{ \frac{ f(x + \Delta x) - f(x) }{ \Delta x } }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-mit-Limes', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-mit-Limes}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Da sowohl Zähler als auch Nenner in der gleichen Größenordnung gegen Null streben,'."\n".
                    'sorgt der Bruch dafür, dass unser Ergebnis im Endlichen verbleibt.'."\n",
                      'Mit Hilfe der aktual unendlichen Superial-Zahlen kommen wir in die Lage, das gegen Null strebende \\latexmath{ \Delta x }'."\n".
                    'durch eine normierte unendlich kleine Zahl \\term{s^{-1}} ersetzen zu können:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \lim\limits_{\Delta x \rightarrow +0}{ \Delta x }  :=  s^{-1}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Def-Ableitung-mit-Limes-ist-s-hoch-minus-Eins', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Def-Ableitung-mit-Limes-ist-s-hoch-minus-Eins}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  :=  \frac{ f(x + s^{-1}) - f(x) }{ s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Def-Ableitung-mit-s-hoch-minus-Eins', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Def-Ableitung-mit-s-hoch-minus-Eins}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  :=  \frac{ f(〈x〉․〈1〉) - f(x) }{ ․〈1〉 }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Die letzte Formel ist in der \\jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystem-Schreibweise} der Superial-Zahlen ausgedrückt.'."\n",
                      'Durch das Einsetzen einer normierten Unendlichkeit können wir nun erkennen, dass das \\latexmath{ \Delta x }'."\n".
                    'gar nicht von \\latexmath{ x } abhängt, wie es scheinen könnte,'."\n".
                    'sondern das \\latexmath{ x } in \\latexmath{ \Delta x } kennzeichnet „nur“ die Stelle, an der das \\latexmath{ \Delta x }'."\n".
                    'eingesetzt wird.'."\n".
                    'Der Parameter der Funktion \\latexmath{ f(x) } ist allerdings weiter von \\latexmath{ x } abhängig.'."\n",
                      'Vergleichen wir dies mit der in der Mathematik üblichen und deutlich kürzeren Differential-Schreibweise:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  =  \frac{ \mathrm{d} f(x) }{ \mathrm{d} x }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dann sehen wir, dass einiges an struktureller Information verborgen bleibt, wenn wir nicht genau schauen,'."\n".
                    'was hinter der Formulierung steckt.'."\n".
                    'So glauben wir eben leicht, wie gesagt, der Nenner hätte etwas mit \\latexmath{ x } zu tun, was von der zugrunde liegenden Rechnung her'."\n".
                    'durch das Einsetzen einer normierten aktualen Unendlichkeit nicht der Fall ist; es in Wahrheit also wenigstens nicht sein muss.'."\n",
                      'Denn in aktualer Unendlichkeit ausgedrückt entspricht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \mathrm{d} f(x)  =  f(〈x〉․〈1〉) - f(x)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \mathrm{d} x  =  ․〈1〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Division durch \\latexmath{ ․〈1〉 } holt uns schlicht die Differenz im Zähler aus dem unendlich Kleinen wieder'."\n".
                    'ins Endliche.'."\n".
                    'Und das können wir auch durch den entsprechenden unendlich großen Faktor \\latexmath{ s } oder \\latexmath{ 〈1〉․ \, } erreichen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  *( f(x + s^{-1}) - f(x) *) \cdot s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  *( f(〈x〉․〈1〉) - f(x) *) \cdot 〈1〉․  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Definition der Ableitung muss folglich nicht zwingend als Division formuliert werden.'."\n",
                      'Durch die detaillierte Betrachtung mit aktual unendlichen Zahlen erschließt sich ein genaueres Verständnis.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Beispiele für Ableitungen} \\\\'."\n".
                    'Um besser zu verstehen, was genau vor sich geht, wollen wir uns zwei Beispiele betrachten:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Funktion \\term{f(x) = x^{2}} ergibt sich:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  \frac{ *( x + s^{-1} *)^{2} - x^{2} }{ s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-basis', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-basis}', label_incr => true),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ *( x^{2} + 2 x \cdot s^{-1} + s^{-2} *) - x^{2} }{ s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-ausmultipliziert', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-ausmultipliziert}', label_incr => true),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ 2 x \cdot s^{-1} + s^{-2} }{ s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-subtrahiert', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-subtrahiert}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  2 x + s^{-1}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-Ergebnis', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x2-Ergebnis}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wenn wir also \\term{s^{-1}} zu Null setzen, dann kommt das übliche Ergebnis \\term{f\'(x) = 2x} heraus.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Für \\term{f(x) = x^{3}} ergibt sich:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  \frac{ *( x + s^{-1} *)^{3} - x^{3} }{ s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-basis', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-basis}', label_incr => true),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ *( x^{3} + 3 x^{2} \cdot s^{-1} + 3 x \cdot s^{-2} + s^{-3} *) - x^{3} }{ s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-ausmultipliziert', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-ausmultipliziert}', label_incr => true),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ 3 x^{2} \cdot s^{-1} + 3 x \cdot s^{-2} + s^{-3} }{ s^{-1} }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-subtrahiert', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-subtrahiert}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  3 x^{2} + 3 x \cdot s^{-1} + s^{-2}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-Ergebnis', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Ableitung-x3-Ergebnis}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wenn wir also \\term{s^{-1}} zu Null setzen, dann kommt das übliche Ergebnis \\term{f\'(x) = 3x^{2}} heraus.'."\n",
                        '\\\\ '."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir können hieran erkennen, dass die Vorgehensweise mit dem Limes Details der Vorgänge verbirgt.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:Vortext:Integration', text =>
                      
                'Die Integration', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{In Arbeit …}'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX Integralrechnung'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, k \cdot s [_{\mathbb{S}_{N}}  =  \\\ \quad *\{  x  ~\middle|~  *( \forall q \in [ 0, k ]_\mathbb{Q} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} n  &  \text{ falls } q = 0  \\\\  q \cdot s + z  &  \text{ falls } 0 < q < k  \\\\  k \cdot s + z^{-}  &  \text{ falls } q = k  \end{cases}  *]  *\}  }'),
                      array( display => 'on',  latex => '{  \sum^{ s - 1 }_{ i = 0 } s^{-1}  =  \sum_{ \forall [ 0, s [_{\mathbb{S}_{N}} } s^{-1}  =  1  }'),
                      array( display => 'on',  latex => '{  \sum^{ k \cdot s - 1 }_{ i = 0 } s^{-1}  =  \sum_{ \forall [ 0, k \cdot s [_{\mathbb{S}_{N}} } s^{-1}  =  k  }'),
                      array( display => 'on',  latex => '{  \sum^{ s - 1 }_{ i = 0 } c \cdot s^{-1}  =  \sum_{ \forall [ 0, s [_{\mathbb{S}_{N}} } c \cdot s^{-1}  =  c  }'),
                      array( display => 'on',  latex => '{  \sum^{ k \cdot s - 1 }_{ i = 0 } c \cdot s^{-1}  =  \sum_{ \forall [ 0, k \cdot s [_{\mathbb{S}_{N}} } c \cdot s^{-1}  =  k \cdot c  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{In Arbeit …}'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Integration und ganze Superial-Zahlen} \\\\'."\n".
                    'Den ganzen Superial-Zahlen begegnen wir, wenn wir uns mit der Umkehrung der oben definierten Ableitung beschäftigen, der Integration:'."\n",
                      'Bei der Integration addieren wir nämlich all die unendlich vielen und superial kleinen Differenzen des Abstands \\term{s^{-1}} der Ableitung als'."\n".
                    'superial kleine, feine oder schmale Streifen einer Fläche auf.'."\n".
                    'Diese Streifen müssen wir dann in einer unendlichen Summe durchzählen und aufsummieren.'."\n",
                      'Zum Einstieg die Formel \\jumpname{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Def-Ableitung-mit-s-hoch-minus-Eins} vorab in der neuen Notation:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  :=  \frac{ f(〈x〉․〈1〉) - f(x) }{ ․〈1〉 }  }',
                                          /* label_name => 'OM:SupNum:Einleitung:Vortext:Equ-XXX', */label_text => '\\jumpname{OM:SupNum:Ableitungen-Integrale:Vortext:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Wenn im Folgenden \\term{n} Element der Menge aller ganzen Superial-Zahlen \\term{\M(S)_{Z}} einschließlich Null und ausschließlich \\term{x⋅s^{1}} ist,'."\n".
                    'können wir die Integration über folgende Summe ausdrücken:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  \in  [0;〈x〉_{1}[  \subset  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  f(x)  =  f(0) + \sum_{ n \in [0;〈x〉_{1}[ }  ․*〈f\'(n)*〉  }'),
                      array( display => 'on',  latex => '{  \int_{0}^{x} f\'(n) \,dn  :=  \sum_{ n \in [0;〈x〉_{1}[ }  ․*〈f\'(n)*〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit haben wir die vorherige Ableitung wieder rückgängig gemacht, wenn wir eine schlüssige Definition der ganzen Superial-Zahlen \\term{\M(S)_{Z}} finden.'."\n",
                      'Wie könnten ganze Superial-Zahlen nun aussehen?'."\n".
                    'Wir haben es zuvor ja schon angedeutet:'."\n"))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Die gebrochenen Summanden mit negativer Potenz von \\term{s} sollten Null sein.',
                        'Im endlichen Summanden \\term{s^{0}} sollten sie nur ganze Zahlen haben.',
                        'Die Summanden mit Potenzen von \\term{s} größer Null sollten ganze Zahlen sein, was bedeutet, dass nur Koeffizienten als Faktoren der potenzierten \\jump{OM:SupNum:Formale-Entwicklung:Vortext:DefinitionSuperialeEinheit}{Primzahlprodukt-Fläche} in Frage kommen, die aus dem Produkt Primzahlen entfernen oder hinzufügen, ohne seine Größenordnung zu verändern.',
                    ))),
                  array( 'text', array( text => array(
                    'Faktoren, die aus der Primzahlprodukt-Fläche in diesem Sinne nur Primfaktoren entfernen oder hinzufügen sind zunächst erst einmal ganz klar die rationalen Zahlen.'."\n".
                    'Sie bestehen nur aus endlichen Brüchen von Primfaktoren endlicher Anzahl und Potenz.'."\n",
                      'In Frage kämen vielleicht noch, wie schon erwähnt, Brüche unendlicher Anzahl von Primfaktoren endlicher Potenz, was zur \\jump{OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung} führt,'."\n".
                    'mit der wir uns hier erst später näher beschäftigen wollen.'."\n",
                      'Beispiele für ganze Superial-Zahlen sind:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a, b \in \mathbb{Q} *) *( \forall z \in \mathbb{Z} *) *[  〈a〉〈b〉〈z〉․  \in  \mathbb{S}_{Z}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  〈-5〉․  \in  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 - \frac{4}{25} *〉*〈 \frac{3}{2} *〉〈-5〉․  \in  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 \frac{4}{25} *〉*〈 \frac{3}{2} *〉〈5,2〉․  \notin  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 \frac{4}{25} *〉*〈 \frac{3}{2} *〉〈5〉․〈1〉  \notin  \mathbb{S}_{Z}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das vorletzte letzte Beispiel ist übrigens eine negative ganze Superial-Zahl und das letzte eine positive nicht ganze Superial-Zahl,'."\n".
                    'weil die größte Stelle dominant ist.'."\n".
                    'Eine genaue Definition der \\jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Superial-Zahlen} findet sich in der formalen Entwicklung.'."\n",
                      'Ganze Superial-Zahlen lassen sich also sinnvoll definieren und bei näherer Betrachtung, die wir später vollziehen,'."\n".
                    'haben diese sehr interessante Eigenschaften und lassen uns Zahlen besser verstehen.'."\n"))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{In Arbeit …}'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Nähere Untersuchung bestimmter Summen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Ableitungen-Integrale', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Im Folgenden beschäftigen wir uns etwas näher mit – unendlichen – Summen, die zum Beispiel auch bei der Berechnung'."\n".
                    'von Integralen auftauchen.'."\n".
                    'Im Fall, dass ihre Ergebnisse schon bekannt sind untersuchen wir, ob wir sie auch noch anders ausdrücken können.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Summen-zur-Integration-von-2x-plus-supkl-Eins', text =>
                      
                'Summen zur Integration von \\latexmath{ 〈2 x〉․〈1〉 }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wir kennen nun schon das Ergebnis der Summe \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x},'."\n".
                    'aller superial kleinen ganzen Superial-Zahlen'."\n".
                    // '\\hidden{\\latexmath{ \mathbb{S}^{-1}_Z }'."\n".
                    'von Null bis ausschließlich \\latexmath{ x }, die bei der Integration von \\latexmath{ f\'(x) =〈2 x〉․〈1〉 } \\jump{*SupNum:Stellenwertsystem-Schreibweise}{(Stellenwertsystem-Schreibweise)} auftritt.'."\n".
                    'Allerdings wissen wir nicht genau, wie sich diese Summe durch direkte Berechnung der Teilsummen, also ohne das Benutzen der'."\n".
                    'angepassten Gaußschen Summenformel\\footnote{\\const{BiOrd_g_footnote_text_GaussscheSummenformel}}, berechnet,'."\n".
                    'die wir aus der Theorie der \\jump{OM:BiOrd:Home}{Biordinalzahlen} im Abschnitt \\italic{›\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}‹} nach Formel'."\n".
                    '\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich} bereits kennen.'."\n",
                      'Die bereits bekannte Summe, in zwei Teilen, ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot s }{ 2 } - \frac{ x }{ 2 }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Zur Beschreibung der Summe wird eine \\jump{OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge}{Intervall-Menge} genutzt,'."\n".
                    'die auf \\jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Superial-Zahlen} beruht,'."\n".
                    'welche eine \\jump{OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen}{superiale Potenzebene ins superial kleine skaliert} sind.'."\n",
                    'Die direkte Berechnung der beiden rechten Teilsummen aus der linken Summe wollen wir nun angehen.'."\n",
                    ''))),
                  /* array( 'text', array( text => array(
                    'Die eben errechnete Summe \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x},'."\n".
                    'aller unendlich kleinen ganzen Superial-Zahlen'."\n".
                    // '\\hidden{\\latexmath{ \mathbb{S}^{-1}_Z }'."\n".
                    'von Null bis ausschließlich \\latexmath{ x },'."\n".
                    'ähnelt nicht zufällig sehr der angepassten Gaußschen Summenformel\\footnote{\\const{BiOrd_g_footnote_text_GaussscheSummenformel}},'."\n".
                    'wie bei den \\jump{OM:BiOrd:Home}{Biordinalzahlen} im Abschnitt \\italic{›\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}‹} nach Formel'."\n".
                    '\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-omega} angegeben.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die nachfolgende Anpassung der Gaußschen Summenformel bezieht sich darauf, dass alle Vorgänger einer Zahl'."\n".
                      'von der Null an aufsummiert werden, also die letzte Zahl nicht enthalten ist:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in \mathbb{N} } i  =  \frac{ \omega^{2} - \omega }{ 2 }  }',
                                           *//* label_name => 'OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N', *//*label_text => '\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      ''))), */

                  /* array( 'text', array( text => array(
                    'Im späteren Abschnitt \\italic{›\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS}‹}'."\n".
                    'wird die Struktur der superialen Basis \\latexmath{ s } in Bezug auf ihre Vorgänger für unseren Einblick geeignet aufgedröselt.'."\n".
                    'Angelehnt an Formel \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-natuerliche-Vorgaenger-s} können wir für die'."\n".
                    'superial kleinen Vorgänger von \\latexmath{ x } bis zur Null – wie immer mit \\latexmath{ x \in \mathbb{Q} } –'."\n".
                    'folgende Formel aufstellen:'."\n".
                    ''))), */
                  array( 'text', array( text => array(
                    'In Formel \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen}'."\n".
                    'haben wir die Elemente, die wir aufsummieren wollen, auszugsweise aufgelistet, wobei der Beginn und das Ende exakt stimmen.'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x[_{\mathbb{S}^{-1}_{Z}}  =  \\\  \quad *\{  \quad\,  0 s^{-1}, 1 s^{-1}, 2 s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{1}{2} x - 2 s^{-1},\; \frac{1}{2} x - s^{-1},\; \frac{1}{2} x,\; \frac{1}{2} x + s^{-1},\; \frac{1}{2} x + 2 s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{2}{3} x - 2 s^{-1},\; \frac{2}{3} x - s^{-1},\; \frac{2}{3} x,\; \frac{2}{3} x + s^{-1},\; \frac{2}{3} x + 2 s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, x - 3 s^{-1}, x - 2 s^{-1}, x - s^{-1}   \quad *\}  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die prinzipielle Summe, die diesen superial kleinen ganzen Zahlen zugrunde liegt, besteht ebenfalls aus zwei Summanden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall q \in \mathbb{Q} *) *( \forall z \in \mathbb{Z} *)  *[  q + z \cdot s^{-1}  \in  \mathbb{S}^{-1}_{Z}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die genaue Menge können wir, angelehnt an die später gefundene Formel \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-natuerliche-Vorgaenger-s},'."\n".
                    'folgende Beschreibung geben – wie immer mit \\latexmath{ x \in \mathbb{Q} }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  [ 0, s [_{\mathbb{S}_{N}}  =  \\\ \quad *\{  a  *|*  *( \forall q \in [ 0, 1 ]_{\mathbb{Q}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  a  =  \begin{cases} n  &  \text{ falls } q = 0  \\\\  q \cdot s + z  &  \text{ falls } 0 < q < 1  \\\\  s + z^{-}  &  \text{ falls } q = 1  \end{cases}  *]  *\}  }',
                                          /* label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-natuerliche-Vorgaenger-s', */label_text => '\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-natuerliche-Vorgaenger-s}', label_incr => false),
                      array( display => 'on',  latex => '{  [ 0, x [_{\mathbb{S}^{-1}_{Z}}  =  \\\ \quad *\{  a  *|*  *( \forall q \in [ 0, x ]_{\mathbb{Q}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  a  =  \begin{cases} n \cdot s^{-1}  &  \text{ falls } q = 0  \\\\  q + z \cdot s^{-1}  &  \text{ falls } 0 < q < x  \\\\  x + z^{-} \cdot s^{-1}  &  \text{ falls } q = x  \end{cases}  *]  *\}  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Menge-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Menge-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x}', label_incr => true),
                    ))),
                  /* array( 'text', array( text => array(
                    'Es handelt sich also um folgende natürliche Superial-Zahlen, die auszugsweise so aussehen, wobei Beginn und Ende stimmen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \qquad\; 0, 1, 2, \cdots n, \cdots \\\ \quad\quad\; \vdots \\\ \quad \cdots \frac{1}{2} x s + z^{-}, \cdots \frac{1}{2} x s - 2,\; \frac{1}{2} x s - 1,\; \frac{1}{2} x s,\; \frac{1}{2} x s + 1, \cdots \frac{1}{2} x s + n, \cdots \\\ \quad\quad\; \vdots \\\ \quad \cdots \frac{2}{3} x s + z^{-}, \cdots \frac{2}{3} x s - 2,\; \frac{2}{3} x s - 1,\; \frac{2}{3} x s,\; \frac{2}{3} x s + 1, \cdots \frac{2}{3} x s + n, \cdots \\\ \quad\quad\; \vdots \\\ \quad \cdots \, x s + z^{-}, \cdots x s - 2, x s - 1  }'),
                    ))), */
                  array( 'text', array( text => array(
                    'Wir nehmen einmal an, dass die beiden Summanden der zu summierenden Superial-Zahlen jeweils'."\n".
                    'den beiden einzelnen Teilsummen des bekannten Ergebnisses der zu berechnenden Summe \\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt} entsprechen.'."\n".
                    'Also summieren wir doch einmal zuerst die zweite Teilsumme unserer Superial-Zahlen und anschließen die erste Teilsumme.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Die Summe des zweiten Summanden unserer Superial-Zahlen} \\\\'."\n".
                    'Für alle Koeffizienten des ersten Summanden \\latexmath{ q }, von Null bis einschließlich'."\n".
                    '\\latexmath{ x }, läuft der zweite Summand \\latexmath{ z } komplett im Negativen und im Positiven durch,'."\n".
                    'bis auf am Beginn und am Ende, siehe Intervall-Menge \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen},'."\n".
                    'wo \\latexmath{ q } als \\latexmath{ q \cdot x } benannt ist.'."\n".
                    'Am Beginn laufen nur die natürlichen Koeffizienten \\latexmath{ n } des zweiten Summanden durch, mit der Null, und'."\n".
                    'am Ende laufen nur die rein negativen Koeffizienten \\latexmath{ z^- } durch.'."\n",
                      'Die Anzahl der superial kleinen ganzen Zahlen von Null bis einschließlich \\latexmath{ x }'."\n".
                    'ist \\latexmath{ x \cdot s + 1 }.'."\n".
                    'Da für Null und \\latexmath{ x } gemeinsam nur ein ganzer Durchlauf stattfindet, ist die Anzahl der'."\n".
                    'ganzen Durchläufe allerdings nur \\latexmath{ x \cdot s }, also Einen weniger.'."\n",
                      'In jedem Durchlauf werden einmal alle superial kleinen ganzen Zahlen addiert.'."\n".
                    'Von den \\jump{OM:BiOrd:Home}{Biordinalzahlen} her wissen wir den Wert der Summe aller endlichen ganzen Zahlen aus Formel'."\n".
                    '\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall z \in \mathbb{Z}} z  =  - \omega  }',
                                          label_text => '\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die Summe, die wir suchen, ist aber nicht die aller endlichen ganzen Zahlen, sondern die aller superial kleinen ganzen Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}}  z \cdot s^{-1}  =  - \omega \cdot s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei steht das Symbol \\latexmath{ \omega } für die Anzahl der endlichen natürlichen Zahlen, mit der Null, in der Menge \\latexmath{ \mathbb{N} };'."\n".
                    'dies entspricht der Anzahl der Schritte der vollständigen Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}.'."\n",
                      'An dieser Stelle ist es vermutlich für den ein oder anderen erstaunlich, dass ganz unabhängig von den hier entwickelten Superial-Zahlen'."\n".
                    'in der Theorie der Biordinalzahlen deutlich wird, dass genauso viele endliche und rein negative ganze Zahlen existieren,'."\n".
                    'wie es endliche natürliche Zahlen gibt, also endliche positive ganze Zahlen, mit der Null.'."\n".
                    'Demnach finden wir, bei genauer Untersuchung, eine \\jump{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}{fundamentale Asymmetrie}'."\n".
                    'zwischen der ontologischen Struktur der endlichen ganzen Zahlen und der Verteilung ihrer Werte.'."\n".
                    'Dadurch ergibt die Summe aller endlichen ganzen Zahlen die aktual unendlich große und negative Zahl \\latexmath{ -\omega }.'."\n",
                      'Auf der anderen Seite ist die Anzahl der rationalen Koeffizienten von Null bis ausschließlich Eins,'."\n".
                    'nach Formel \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# [ 0, 1 [_\mathbb{Q}  =  \frac{ s }{ 2 \cdot \omega }  }',
                                          /* label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins', */label_text => '\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# [ 0, x [_\mathbb{Q}  =  \frac{ x \cdot s }{ 2 \cdot \omega }  }',
                                          label_name => 'OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-x', label_text => '\\name{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-x}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Anschließend haben wir die Formel für die Koeffizienten von Null bis ausschließlich \\latexmath{ x } äquivalent mit \\latexmath{ x } erweitert.'."\n",
                    /*   'Da in der zu addierenden Intervall-Menge \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen}'."\n".
                    'für Null und \\latexmath{ x } gemeinsam nur ein ganzer Durchlauf von \\latexmath{ z } stattfindet, wie gesagt, ist \\latexmath{ x \cdot s } die Anzahl der'."\n".
                    'ganzen Durchläufe von \\latexmath{ z }.'."\n", */
                      'So oft addiert sich jetzt das superial kleine \\latexmath{ \frac{ -\omega }{ s } } auf:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \# [ 0, x \, [_\mathbb{Q} \, \cdot *( - \omega \cdot s^{-1} *)  =  \frac{ x \cdot s }{ 2 \cdot \omega } \cdot *( - \omega \cdot s^{-1} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# [ 0, x \, [_\mathbb{Q} \, \cdot *( -\omega *) \cdot s^{-1}  =  - \frac{ x }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies entspricht tatsächlich, wie gedacht, der zweiten Teilsumme unserer bekannten'."\n".
                    'Summe \\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt}.'."\n",
                      'Und es zeigt, dass die in der Theorie der Biordinalzahlen gefundene fundamentale Asymmetrie zwischen der strukturellen Ontologie'."\n".
                    'und den Werten der endlichen ganzen Zahlen, aufgrund derer sich die Summe aller endlichen ganzen Zahlen zu \\latexmath{ -\omega } und'."\n".
                    'die Anzahl aller endlicher ganzen Zahlen zu \\latexmath{ 2 \omega } ergibt, wirklich korrekt ist.'."\n".
                    'Denn diese Asymmetrie ist ein essentieller und so auch plausibler Bestandteil der Integralrechnung, wie wir sehen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Die Summe des ersten Summanden unserer Superial-Zahlen} \\\\'."\n".
                    'Die erste Teilsumme unserer superial kleinen ganzen Superial-Zahlen \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen} soll nach unserer Vermutung dem'."\n".
                    'ersten Summanden des uns bekannten Ergebnisses der zu berechnenden Summe \\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt} ergeben.'."\n",
                      'Die erste Teilsumme unserer zu summierenden Zahlen enthält alle rationalen Zahlen von Null bis einschließlich \\latexmath{ x }.'."\n".
                    'Diese Summe muss allerdings für jede superial kleine Zahl gebildet werden, die in unserer Menge \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen}'."\n".
                    'enthalten ist.'."\n",
                      'Für die rationale Zahl Null in der ersten Teilsumme gibt es nur die natürlichen Zahlen, mit der Null, als superial kleine Schritte in der zweiten Teilsumme:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \sum_{ \forall q \in [ 0 ]_\mathbb{Q}}  \!\! q *) \cdot \omega  =  0 \cdot \omega  =  0  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die rationalen Zahlen \\latexmath{ q } mit \\latexmath{ 0 < q < x } in der ersten Teilsumme gibt es wirklich alle superial kleinen ganzzahligen Schritte in der zweiten Teilsumme.'."\n".
                    'Da wir die Summe dieser rationalen Zahlen noch nicht kennen, wollen wir sie berechnen und setzen sie gleich unserer neuen Variable \\latexmath{ y }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \sum_{ \forall q \in ] 0, x [_\mathbb{Q}}  \!\! q *) \cdot 2 \cdot \omega  =  y \cdot 2 \cdot \omega  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall q \in ] 0, x [_\mathbb{Q}}  \!\! q  =  y  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei ist es gleich, ob die Null in der Indexmenge der Summe dabei ist oder fehlt.'."\n".
                    'Die Summe ist also äquivalent, wenn wir die Null durchs Umdrehen der vorderen Intervall-Klammer'."\n".
                    'in die Summe mit hinein nehmen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  =  y  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die rationale Zahl \\latexmath{ x } in der ersten Teilsumme gibt es nur alle rein negativen ganzen Zahlen als superial kleine Schritte in der zweiten Teilsumme:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \sum_{ \forall q \in [ x ]_\mathbb{Q}}  \!\! q *) \cdot \omega  =  x \cdot \omega  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Alle drei Teile gemeinsam ergeben nun den ersten uns bekannten Summanden aus Formel \\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt},'."\n".
                    'den wir nun direkt berechnen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \sum_{ \forall q \in [ 0 ]_\mathbb{Q}}  \!\! q *) \cdot \omega  \\\ \qquad\quad\quad +  *( \sum_{ \forall q \in ] 0, x [_\mathbb{Q}}  \!\! q *) \cdot 2 \cdot \omega  \\\ \qquad\quad\quad\quad\quad +  *( \sum_{ \forall q \in [ x ]_\mathbb{Q}}  \!\! q *) \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  0 \cdot \omega  +  y \cdot 2 \cdot \omega  +  x \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y \cdot 2 \cdot \omega  +  x \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q *) \cdot 2 \cdot \omega  +  x \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q *) \cdot 2  +  x *) \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  \;\; +  \! \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  +  x *) \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  \;\; +  \! \sum_{ \forall q \in [ 0, x ]_\mathbb{Q}}  \!\! q *) \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  \;\; +  \! \sum_{ \forall q \in ] 0, x ]_\mathbb{Q}}  \!\! q *) \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  \;\; +  \! \sum_{ \forall q \in ] 0, x ]_\mathbb{Q}}  \!\! q  =  \frac{ x^{2} \cdot s }{ 2 \cdot \omega }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  \;\; +  \! \sum_{ \forall q \in ] 0, x ]_\mathbb{Q}}  \!\! q  =  \frac{ x \cdot s }{ 2 \cdot \omega } \cdot x  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  \;\; +  \! \sum_{ \forall q \in ] 0, x ]_\mathbb{Q}}  \!\! q  =  \# [ 0, x [_\mathbb{Q} \; \cdot \; x  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  \;\; +  \! \sum_{ \forall q \in ] 0, x ]_\mathbb{Q}}  \!\! q *) \cdot \omega  =  \# [ 0, x [_\mathbb{Q} \; \cdot \; x \cdot \omega  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ x^{2} \cdot s }{ 2 }  =  \# [ 0, x [_\mathbb{Q} \; \cdot \; x \cdot \omega  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Alle drei gemeinsam ergeben den gesuchten Summanden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \sum_{ \forall q \in [ 0 ]_\mathbb{Q}}  \!\! q *) \cdot \omega  \\\ \qquad\quad\quad +  *( \sum_{ \forall q \in ] 0, x [_\mathbb{Q}}  \!\! q *) \cdot 2 \cdot \omega  \\\ \qquad\quad\quad\quad\quad +  *( \sum_{ \forall q \in [ x ]_\mathbb{Q}}  \!\! q *) \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  0 \cdot \omega  +  y \cdot 2 \cdot \omega  +  x \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y \cdot 2 \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  -  x \cdot \omega  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y \cdot 2 \cdot \omega  =  \frac{ x^{2} \cdot s }{ 2 }  -  \frac{ 2 \cdot x \cdot \omega }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y \cdot 2 \cdot \omega  =  \frac{ x^{2} \cdot s - 2 \cdot x \cdot \omega }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  \frac{ \frac{ x^{2} \cdot s - 2 \cdot x \cdot \omega }{ 2 } }{ 2 \cdot \omega }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  \frac{ x^{2} \cdot s - 2 \cdot x \cdot \omega }{ 4 \cdot \omega }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  \frac{ x^{2} \cdot s }{ 4 \cdot \omega } - \frac{ 2 \cdot x \cdot \omega }{ 4 \cdot \omega }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  \frac{ x^{2} \cdot s }{ 4 \cdot \omega } - \frac{ x }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  =  \frac{ x^{2} \cdot s }{ 4 \cdot \omega } - \frac{ x }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX:'."\n".
                    'XXX:'."\n".
                    'XXX:'."\n".
                    'XXX:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot s }{ 2 } - \frac{ x }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \# [ 0, x [_\mathbb{Q} \; \cdot \; x \cdot \omega  -  \frac{ x }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \# [ 0, x [_\mathbb{Q} \; \cdot \; x \cdot \omega  \; + \;  \# [ 0, x \, [_\mathbb{Q} \, \cdot *( -\omega *) \cdot s^{-1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \# [ 0, x [_\mathbb{Q} \; \cdot \; x \cdot \omega  \; - \;  \# [ 0, x \, [_\mathbb{Q} \, \cdot \, \omega \cdot s^{-1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \# [ 0, x [_\mathbb{Q} \; \cdot \; \omega \cdot *( x - s^{-1} *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  XXX  \sum_{ \forall q \in [ 0, x [_\mathbb{Q}}  \!\! q  =  \frac{ x^{2} \cdot s }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Im Grunde genommen haben wir damit schon den Beweis für die Richtigkeit dieser Gleichung erbracht.'."\n".
                    'Aber vielleicht können wir ja noch besser verstehen, warum dies so ist?'."\n",
                      'Wie oben schon erwähnt, wissen wir mit Hilfe der Biordinalzahlen aus dem späteren Abschnitt \\italic{›\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS}‹}'."\n".
                    'die Anzahl der rationalen Zahlen zwischen Null und ausschließlich der Eins aus Formel \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-natuerliche-Vorgaenger-s}.'."\n".
                    'Diese haben wir in Formel \\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-x} auf ihre Anzahl zwischen Null und ausschließlich \\latexmath{ x } erweitert.'."\n",
                      'Die Anzahl der rationalen Zahlen zwischen Null und ausschließlich \\latexmath{ x } beläuft sich demnach auf \\latexmath{ \frac{ x \cdot s }{ 2 \cdot \omega }  \;  . }'."\n".
                    'Ihre Größenordnung \\latexmath{ s } zeigt uns, dass wir auch ein Ergebnis in der Größenordnung \\latexmath{ s } erwarten sollten,'."\n".
                    'wenn wir so viele endliche Zahlen summieren.'."\n".
                    'Das passt schon mal zu unserer gesuchten Summe.'."\n",
                      'Da es sich bei den rationalen Zahlen um die Koeffizienten endlicher Größe von superial kleinen ganzen Zahlen handelt,'."\n".
                    'müssen sie alle den gleichen Abstand zueinander haben, der sich aus ihrer Dichte \\latexmath{ \rho_Q } berechnet:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \rho_{Q}  =  \frac{ \frac{ x \cdot s }{ 2 \cdot \omega } }{ x }  }'),
                      array( display => 'on',  latex => '{  \rho_{Q}  =  \frac{ s }{ 2 \cdot \omega }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \Delta_{Q}  =  \frac{ 2 \cdot \omega }{ s }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Bei der gesuchten Summe handelt es sich um die Summe von positiven Werten, mit der Null, die sich auf einer Hauptdiagonalen'."\n".
                    'verteilen, wie es auch bei den natürlichen Zahlen der Fall ist.'."\n".
                    'Naiv gesprochen, können wir auch die Summe der natürlichen nehmen und diese auf die entsprechende Dichte skalieren.'."\n",
                      'Die Summe der endlichen und aktual unendlichen natürlichen Zahlen der ersten \\latexmath{ n } Elemente einer solchen Menge, mit der Null,'."\n".
                    'ergibt sich aus der angepassten Gaußschen Summenformel\\footnote{\\const{BiOrd_g_footnote_text_GaussscheSummenformel}},'."\n".
                    'wie bei den Biordinalzahlen im Abschnitt \\italic{›\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}‹} nach Formel'."\n".
                    '\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich} angegeben.'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AbIn.NU', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in [ 0, n [_{\mathbb{N}_{\infty}} } i  =  \frac{ n^{2} - n }{ 2 }  }',
                                           /* label_name => 'OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich', */label_text => '\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall i \in [ 0, \frac{ x \cdot s }{ 2 \cdot \omega } [_{\mathbb{N}_{\infty}} }  \!\!\!\! i  =  \frac{ *( \frac{ x \cdot s }{ 2 \cdot \omega } *)^{2} - \frac{ x \cdot s }{ 2 \cdot \omega } }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und das Ergebnis ist jetzt um \\latexmath{ \frac{ s }{ 2 \cdot \omega} } zu weit'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
