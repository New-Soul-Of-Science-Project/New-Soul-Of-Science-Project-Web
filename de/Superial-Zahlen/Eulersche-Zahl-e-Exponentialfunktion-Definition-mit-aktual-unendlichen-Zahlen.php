<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Eulersche-Zahl-e-Funktion'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Ableitungen-Integrale'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(

                  array( 'notice', array( Display => 'hideContent', text => array(
                    '• Meine Herleitung der \lm{ \e }-Funktion mit Hilfe von Superial-Zahlen stammt aus dem Jahr 2001: siehe Datei "superial zahlen (26).pdf".',
                    '\\bold{Ideen}',
                    '• Wie leiten wir \lm{ \e } mit Integralen her?',
                    '\\bold{Transzendenz von \lm{ \e }}',
                    '• Was zur Transzendenz von \lm{ \e } im Text sagen.',
                    '• Mit welchen Rechenoperationen kann man die Zahl \lm{ \e } zu Null machen? Mit diesem Thema beschäftigt sich die Algebra, wie wir auch einem Video von Numberphile entnehmen können: \\jump[https://www.youtube.com/watch?v=seUU2bZtfgM&t=620s]{}{Transcendental Numbers - Numberphile}',
                    '– Mit unserer Definition von \lm{ \e } als \lm{ \e_{\s}^{x} = *( 1 + \frac{ 1 }{ \s } *)^{x \cdot \s} } in Formel \\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-s} erhalten wir für \lm{ \e_{\s} } den Ausdruck \lm{ \e_{\s} = *( 1 + \frac{ 1 }{ \s } *)^{\s} }. Über diesen sehen wir leicht, wie wir \lm{ \e } zu Null machen können. Laut Video soll so etwas bisher nicht bekannt sein.',
                    '⋅ Allerdings bleibt es dabei, dass \lm{ \e } transzendent ist, weil es nicht durch algebraische Operationen zu Null gemacht werden kann, ohne aktual unendliche Symbole zu nutzen, und weil es nicht einmal zu den Superial-Zahlen erster Ordnung gehört, wegen seiner Summanden bis herunter zu \lm{ \s^{-\s} }, siehe Formel \\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-gleich-Stellenwertsystem}. Dies vielleicht auf der Seite \\italic{\\jumpname{OM:SupNum:Eigenschaften}} zeigen.',
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
                    ''))),

                  array( 'text', array( text => array(
                    'Wir können tatsächlich recht einfach erkennen, welche Funktion ihrer eigenen \\jump{OM:SupNum:Ableitungen-Integrale}{Ableitung} gleich ist.'."\n".
                    'Die Superial-Zahlen führen uns hier zu einer erstaunlichen Entdeckung.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Die Definition unserer Ableitung finden wir in Formel \\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation}:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  :=  \frac{ f(〈x〉․〈1〉) - f(x) }{ ․〈1〉 }  }',
                                          label_text => '\\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Soll eine Funktion nun ihre eigene Ableitung sein, dann gilt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  =  f(x)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  f(x)  =  \frac{ f(〈x〉․〈1〉) - f(x) }{ ․〈1〉 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x) \cdot {․〈1〉}  =  f(〈x〉․〈1〉) - f(x)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x) \cdot {․〈1〉} + f(x)  =  f(〈x〉․〈1〉)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x) \cdot *( {․〈1〉} + 1 *)  =  f(〈x〉․〈1〉)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x) \cdot 〈1〉․〈1〉  =  f(〈x〉․〈1〉)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Nach kurzer Überlegung können wir erraten, dass die Bedingung für unsere Funktion von einer'."\n".
                      'Exponentialfunktion der Basis \lm{ 〈1〉․〈1〉 } erfüllt werden kann,'."\n".
                      'denn der Parameter der Funktion soll sich um eine superial kleine Einheit erhöhen, wenn mit'."\n".
                      '\lm{ 〈1〉․〈1〉 } multipliziert wird.'."\n".
                      'Wir erraten also'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f(x)  =  〈1〉․〈1〉^{〈x〉_{1}}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und zeigen durch Einsetzen der letzten in die vorletzte Formel, dass unsere Vermutung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  〈1〉․〈1〉^{〈x〉_{1}} \cdot 〈1〉․〈1〉  =  〈1〉․〈1〉^{〈〈x〉․\,〈1〉〉_{1}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  〈1〉․〈1〉^{〈x〉_{1} + 1}  =  〈1〉․〈1〉^{〈〈x〉․\,〈1〉〉_{1}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  〈1〉․〈1〉^{〈x〉〈1〉.}  =  〈1〉․〈1〉^{〈x〉〈1〉․}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'richtig ist.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Bei näherer Betrachtung können wir nun aber auch leicht sehen, dass es noch weitere Funktionen ähnlicher'."\n".
                      'Art gibt, die dies auch erfüllen, nämlich für alle \lm{ y }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{y}(x)  =  〈1〉․〈1〉^{〈x〉〈y〉.}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Daher legen wir zusätzlich fest, dass'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{y}(0)  =  1  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  y  =  0  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  f(x)  =  〈1〉․〈1〉^{〈x〉_{1}}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'sein soll und legen uns damit auf die zuerst gefundene Funktion fest, so wie es auch sonst üblich ist.'."\n",
                        '\\\\ '."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Dieses Ergebnis ist in meinen Augen ein ganz bemerkenswertes:'."\n".
                    'Denn wir erhalten eine weitere Definition der natürlichen Exponentialfunktion \lm{ \e^x }.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:XXX', text =>
                      
                'Eine neue Definition der \lm{ \e }-Funktion', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wir wissen aus der Mathematik der Differentialrechnung, dass die \lm{ \e }-Funktion'."\n".
                    'oder die Exponentialfunktion zur Basis \lm{ \e }, der Eulerschen Zahl\\footnote{\\const{SupNum_g_footnote_text_EulerscheZahl}},'."\n".
                    'ihre eigene Ableitung ist.\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Exponentialfunktion:2022}, Ableitung. \\\\ Vgl. \\cite{wiki:EulerscheZahl:2023}, Bedeutung in der Mathematik.}'."\n",
                      'Mit diesem Wissen ist klar, dass wir eine neue Definition der \lm{ \e }-Funktion gefunden'."\n".
                    'haben, die sich aus der neuen Definition der Ableitung unmittelbar ergibt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \boxed{\;\;  \e_{\s}^{x}  =  〈1〉․〈1〉^{〈x〉_{1}}  \;\;}  }',
                                          label_name => 'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-s-Stellenwertsystem', label_text => '\\name{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-s-Stellenwertsystem}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Ich nenne ihre Basis \lm{ \e_\s }, weil ich hier ganz genau abgrenzen möchte.'."\n".
                    'Denn die Basis hängt von der Definition der Ableitung ab, bei der wir \lm{ \s } benutzt haben.'."\n".
                    'Würden wir beispielsweise \lm{ \s^2 } benutzen, wie \\jump{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:BeispielrechnungAbleitungMit-s-2}{hier gezeigt}, würde sich unsere Basis im Prinzip sehr ähnlich,'."\n".
                    'aber doch anders ergeben.'."\n",
                      'Wenig verwunderlich ist diese Formel in Form der Limes-Definition bekannt:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Exponentialfunktion:2022}, Definition. \\\\ Vgl. \\cite{wiki:EulerscheZahl:2023}, Definition.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \e  :=  \lim\limits_{n \rightarrow +\infty}{ *( 1 + \frac{ 1 }{ n } *)^{n} }  }'),
                      array( display => 'off', latex => '{  \Rightarrow  \e^{x}  =  *( \lim\limits_{n \rightarrow +\infty}{ *( 1 + \frac{ 1 }{ n } *)^{n} } *)^{x}  }'),
                      array( display => 'on',  latex => '{  \e^{x}  =  \lim\limits_{n \rightarrow +\infty}{ *( 1 + \frac{ 1 }{ n } *)^{x \cdot n} }  }',
                                    latex_if_visible => '{  \Leftrightarrow  \e^{x}  =  \lim\limits_{n \rightarrow +\infty}{ *( 1 + \frac{ 1 }{ n } *)^{x \cdot n} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese im Unendlichen schwer durchschaubare Formulierung haben wir gerade vorstehend in einer Schreibweise mit fundamentalen'."\n".
                    'Symbolen beschreiben.'."\n".
                    'Und werden dies gleich nutzen, um die Zahl \lm{ \e } auch im unendlich Kleinen genau zu berechnen.'."\n",
                      'Drücken wir die \lm{ \e }-Funktion explizit mit \lm{ \s } oder noch differenzierter mit'."\n".
                    '\lm{ \omega } aus, erhalten wir:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}^{x}  =  *( 1 + \frac{ 1 }{ \s } *)^{x \cdot \s}  }',
                                          label_name => 'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-s', label_text => '\\name{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-s}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}^{x}  =  *( 1 + \frac{ 1 }{ \omega^{\omega} } *)^{x \cdot \omega^{\omega}}  }',
                                          label_name => 'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-omega', label_text => '\\name{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen, dass wir die \lm{ \e }-Funktion ganz fundamental mit \lm{ \omega } durch die vollständige Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    'definieren können.'."\n",
                      'Und im Hinblick auf den Beweis der \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung},'."\n".
                    'der die vollständige Induktion auf Grundlage des unendlichen Produkts aller endlichen Primzahlen ausdrückt,'."\n".
                    'führen wir die \lm{ \e }-Funktion auf die Primzahlen zurück:'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega  =  \prod_{\forall p \in \mathbb{P}}  p  }',
                                          label_text => '\\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimzahlen}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \omega  =  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots  }',
                                          label_text => '\\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimfakultaet-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \e_{\s}^{x}  =  \\\ \qquad *( 1 + \frac{ 1 }{ (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot \cdots)^{2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot \cdots} } *)^{x \cdot (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot \cdots)^{2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot \cdots}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies ist in meinen Augen etwas sehr besonderes, ganz konkret und hat damit eine andere Qualität als'."\n".
                    'und ergänzt so die Limes-Definition, zusätzlich zum Perspektivwechsel, wie wir gleich sehen werden.'."\n".
                    'Dadurch wird transparent, wie sich die \lm{ \e }-Funktion und damit die Zahl \lm{ \e } im und aus dem Unendlichen ergibt.'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:XXX', text =>
                      
                'Die \lm{ \e }-Funktion und das Pascalsche Dreieck', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Berechnen wir nun spaßeshalber die Funktionswerte im infinitesimalen Bereich, dann erkennen wir das Pascalsche Dreieck:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈x〉}  =  〈1〉․〈1〉^{〈․\,〈x〉〉_{1}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{s}^{․\,〈x〉}  =  〈1〉․〈1〉^{x}  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{0}  =  1  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈1〉}  =  〈1〉․〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈2〉}  =  〈1〉․〈2〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈3〉}  =  〈1〉․〈3〉〈3〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈4〉}  =  〈1〉․〈4〉〈6〉〈4〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈5〉}  =  〈1〉․〈5〉〈10〉〈10〉〈5〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈6〉}  =  〈1〉․〈6〉〈15〉〈20〉〈15〉〈6〉〈1〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So bekommen wir einen vom Aussehen her vielleicht etwas unerwarteten Einblick in die'."\n".
                    'infinitesimale Feinstruktur der \lm{ \e }-Funktion und ihren Zusammenhang mit den Binomischen Formeln'."\n".
                    'und dem Pascalschen Dreieck.'."\n",
                      'Die Koeffizienten des Pascalschen Dreiecks sind die Binomialkoeffizienten\\footnote{\\const{SupNum_g_footnote_text_Binomialkoeffizient}},'."\n".
                    'die wir einmal beispielhaft einsetzen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{s}^{0}  =  *( \begin{array}{llll} 0 \\\ 0 \end{array} *)  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈1〉}  =  *〈 *( \begin{array}{llll} 1 \\\ 0 \end{array} *) *〉 ․\, *〈 *( \begin{array}{llll} 1 \\\ 1 \end{array} *) *〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈2〉}  =  *〈 *( \begin{array}{llll} 2 \\\ 0 \end{array} *) *〉 ․\, *〈 *( \begin{array}{llll} 2 \\\ 1 \end{array} *) *〉*〈 *( \begin{array}{llll} 2 \\\ 2 \end{array} *) *〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈3〉}  =  *〈 *( \begin{array}{llll} 3 \\\ 0 \end{array} *) *〉 ․\, *〈 *( \begin{array}{llll} 3 \\\ 1 \end{array} *) *〉*〈 *( \begin{array}{llll} 3 \\\ 2 \end{array} *) *〉*〈 *( \begin{array}{llll} 3 \\\ 3 \end{array} *) *〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈4〉}  =  *〈 *( \begin{array}{llll} 4 \\\ 0 \end{array} *) *〉 ․\, *〈 *( \begin{array}{llll} 4 \\\ 1 \end{array} *) *〉*〈 *( \begin{array}{llll} 4 \\\ 2 \end{array} *) *〉*〈 *( \begin{array}{llll} 4 \\\ 3 \end{array} *) *〉*〈 *( \begin{array}{llll} 4 \\\ 4 \end{array} *) *〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können dies allgemeiner mit einer Formel für Binomialkoeffizienten mit dem \\italic{über}-Operator\\footnote{\\const{SupNum_g_footnote_text_Binomialkoeffizient}}'."\n".
                    'beschreiben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \e_{s}^{․\,〈n〉}  =  \sum_{ \forall k \in [0, n]_{\mathbb{N}} } *( \begin{array}{llll} n \\\ k \end{array} *) \cdot s^{-k}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Nachfolgend beleuchten wir die Berechnung der \\jump{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:SumBinominalkoe}{Summen der einzelnen Spalten der Binomialkoeffizienten}'."\n".
                    'in einer Nebenrechnung.'."\n".
                    ''))),

                  array( 'notice', array( Display => 'hideContent', text => array(
                    '• Nachfolgenden Einschub \\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:SumBinominalkoe} verschieben in den Abschnitt \\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen}?',
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:SumBinominalkoe',
                Title => 'Die Summen der einzelnen Spalten der Binomialkoeffizienten …',
                TitleVis => 'Die Summen der einzelnen Spalten der Binomialkoeffizienten:', ParagraphList => array(

                  array( 'text', array( text => array(
                    'In dieser Rechnung wollen wir die Summen der Spalten der Binomialkoeffizienten des Pascalschen Dreiecks'."\n".
                    'berechnen.'."\n".
                    'Dazu schauen wir uns an, wie sich die Werte der Binomialkoeffizienten aus der vorherigen Spalte ergeben.'."\n",
                      'Als Ansatz formulieren wir die altbekannte Regel etwas um, wie sich ein Binomialkoeffizient aus'."\n".
                    'der über ihm gelegenen Zeile als Summe ergibt:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Binomialkoeffizient:2023}, Rekursive Darstellung und Pascalsches Dreieck.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \begin{array}{llll} n + 1 \\\ k + 1 \end{array} *)  =  *( \begin{array}{llll} n \\\ k \end{array} *) + *( \begin{array}{llll} n \\\ k + 1 \end{array} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \begin{array}{llll} n + 1 \\\ k \end{array} *)  =  *( \begin{array}{llll} n \\\ k - 1 \end{array} *) + *( \begin{array}{llll} n \\\ k \end{array} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \begin{array}{llll} n \\\ k \end{array} *)  =  *( \begin{array}{llll} n - 1 \\\ k - 1 \end{array} *) + *( \begin{array}{llll} n - 1 \\\ k \end{array} *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Formel können wir durch Rekursion weiter entwickeln'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \begin{array}{llll} n \\\ k \end{array} *)  =  *( \begin{array}{llll} n - 1 \\\ k - 1 \end{array} *) + *( *( \begin{array}{llll} n - 2 \\\ k - 1 \end{array} *) + *( \begin{array}{llll} n - 2 \\\ k \end{array} *) *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \begin{array}{llll} n \\\ k \end{array} *)  =  *( \begin{array}{llll} n - 1 \\\ k - 1 \end{array} *) + *( \begin{array}{llll} n - 2 \\\ k - 1 \end{array} *) + *( \begin{array}{llll} n - 3 \\\ k - 1 \end{array} *) \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\quad\;\;\;\, + *( \begin{array}{llll} n - 3 \\\ k \end{array} *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und entdecken, dass wir dies so lange fortführen können, bis wir bei einer Zeile \lm{ n } landen,'."\n".
                    'in der der letzte Summand zu Null wird und ab da verschwindet.'."\n",
                      'Der erste Summand der Null ist, liegt dann bei Zeile \lm{ k - 1 } und Spalte \lm{ k }, wie wir sehen,'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \begin{array}{llll} n \\\ k \end{array} *)  =  *( \begin{array}{llll} n - 1 \\\ k - 1 \end{array} *) + *( \begin{array}{llll} n - 2 \\\ k - 1 \end{array} *) + *( \begin{array}{llll} n - 3 \\\ k - 1 \end{array} *) + \cdots \\\ \qquad\qquad\qquad\qquad\qquad\qquad\;\; \cdots + *( \begin{array}{llll} k - 1 \\\ k - 1 \end{array} *) + *( \begin{array}{llll} k - 1 \\\ k \end{array} *)  \;\;,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'was wir beispielhaft überprüfen mit'."\n".
                    'in der der letzte Summand zu Null wird und ab da verschwindet.'."\n",
                      'Der erste Summand der Null ist, liegt dann bei Zeile \lm{ k - 1 } und Spalte \lm{ k }, wie wir sehen,'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \begin{array}{llll} n \\\ 2 \end{array} *)  =  *( \begin{array}{llll} n - 1 \\\ 1 \end{array} *) + *( \begin{array}{llll} n - 2 \\\ 1 \end{array} *) + *( \begin{array}{llll} n - 3 \\\ 1 \end{array} *) + \cdots \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\quad\;\; \cdots + *( \begin{array}{llll} 1 \\\ 1 \end{array} *) + *( \begin{array}{llll} 1 \\\ 2 \end{array} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \begin{array}{llll} n \\\ 2 \end{array} *)  =  *( \begin{array}{llll} n - 1 \\\ 1 \end{array} *) + *( \begin{array}{llll} n - 2 \\\ 1 \end{array} *) + *( \begin{array}{llll} n - 3 \\\ 1 \end{array} *) + \cdots \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\quad\;\; \cdots + *( \begin{array}{llll} 1 \\\ 1 \end{array} *) + 0  \;\;,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und daher bricht die Summe dann ab, sodass wir sie folgendermaßen ganz allgemein mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \begin{array}{llll} n \\\ k \end{array} *)  =  \sum_{ \forall m \in [k - 1, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ k - 1 \end{array} *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'ausdrücken können.'."\n",
                      'Die Summe der \lm{ 0 }-ten Spalte ist schlichtweg:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \begin{array}{llll} n \\\ 0 \end{array} *)  =  1  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(Hier können wir Ähnlichkeiten mit dem \lm{ -1 }-Operator der Operialtheorie erahnen.)} \\\\'."\n".
                    'Dies ist die Konstante \lm{ 1 }.'."\n",
                      'Die Summe der \lm{ 1 }-ten Spalte ist dann das Zählen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \begin{array}{llll} n \\\ 1 \end{array} *)  =  \sum_{ \forall m \in [0, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 0 \end{array} *)  }'),
                      array( display => 'on',  latex => '{  \sum_{ \forall m \in [0, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 0 \end{array} *)  =  [ 0_{-1} \,+ \,]\, 1_{0} + 1_{1} + 1_{2} + 1_{3} + \cdots + 1_{n - 1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [0, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 0 \end{array} *)  =  n  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(Hier können wir Ähnlichkeiten mit dem \lm{ 0 }-Operator, dem Zähloperator, der Operialtheorie sehen.)} \\\\'."\n".
                    'Dies ist das Zählen bis zur Zeilennummer.'."\n",
                      'Die Summe der \lm{ 2 }-ten Spalte entspricht also der Gaußschen Summenformel\\footnote{\\const{BiOrd_g_footnote_text_GaussscheSummenformel}}'."\n".
                    'und diese können wir geschlossen ausdrücken mit:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \begin{array}{llll} n \\\ 2 \end{array} *)  =  \sum_{ \forall m \in [1, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 1 \end{array} *)  }'),
                      array( display => 'on',  latex => '{  \sum_{ \forall m \in [1, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 1 \end{array} *)  =  [ 0_{0} \,+ \,]\, 1_{1} + 2_{2} + 3_{3} + 4_{4} + 5_{5} + \cdots \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\qquad\qquad\;\; \cdots + m_{n - 1}  }'),
                      array( display => 'on',  latex => '{  \sum_{ \forall m \in [1, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 1 \end{array} *)  =  [ 0_{0} \,+ \,]\, 1_{1} + 2_{2} + 3_{3} + 4_{4} + 5_{5} + \cdots \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\qquad\quad \cdots + (n - 1)_{n - 1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [1, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 1 \end{array} *)  =  \frac{ (n - 1)^{2} + (n - 1) }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [1, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 1 \end{array} *)  =  \frac{ (n^{2} - 2 n + 1) + (n - 1) }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [1, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 1 \end{array} *)  =  \frac{ n^{2} - n }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies entspricht der modifizierten Gaußschen Summenformel, die wir schon aus Formel \\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-n}.'."\n",
                      'Die Summe der \lm{ 3 }-ten Spalte entspricht also der Summe der ersten XXX Quadratzahlen'."\n".
                    'und diese können wir geschlossen ausdrücken mit:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \begin{array}{llll} n \\\ 3 \end{array} *)  =  \sum_{ \forall m \in [2, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 2 \end{array} *)  }'),
                      array( display => 'on',  latex => '{  \sum_{ \forall m \in [2, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 2 \end{array} *)  =  [ 0_{1} \,+ \,]\, 1_{2} + 3_{3} + 6_{4} + 10_{5} + 15_{6} + \cdots \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\qquad \cdots + *( \frac{ m^{2} - m }{ 2 } *)_{n - 1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [2, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 2 \end{array} *)  =  *[ *( \frac{ 1^{2} - 1 }{ 2 } *)_{1} \,+ \,*]\, *( \frac{ 2^{2} - 2 }{ 2 } *)_{2} \\\ \qquad\qquad\qquad\qquad\qquad\quad\; + *( \frac{ 3^{2} - 3 }{ 2 } *)_{3} + *( \frac{ 4^{2} - 4 }{ 2 } *)_{4} \\\ \qquad\qquad\qquad\qquad\qquad\quad\; + *( \frac{ 5^{2} - 5 }{ 2 } *)_{5} + *( \frac{ 6^{2} - 6 }{ 2 } *)_{6} + \cdots \\\ \qquad\qquad\qquad\qquad\qquad\quad\; \cdots + *( \frac{ m^{2} - m }{ 2 } *)_{n - 1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [2, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 2 \end{array} *)  =  \frac{ 1 }{ 2 } \cdot *( *( 1^{2} - 1 *)_{1} + *( 2^{2} - 2 *)_{2} \\\ \qquad\qquad\qquad\qquad\qquad\quad\; + *( 3^{2} - 3 *)_{3} + *( 4^{2} - 4 *)_{4} \\\ \qquad\qquad\qquad\qquad\qquad\quad\; + *( 5^{2} - 5 *)_{5} + *( 6^{2} - 6 *)_{6} + \cdots \\\ \qquad\qquad\qquad\qquad\qquad\quad\; \cdots + *( m^{2} - m *)_{n - 1} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [2, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 2 \end{array} *)  =  \\\ \qquad\qquad\qquad \frac{ 1 }{ 2 } \cdot *( *( 1^{2}_{1} + 2^{2}_{2} + 3^{2}_{3} + 4^{2}_{4} + 5^{2}_{5} + 6^{2}_{6} + \cdots + m^{2}_{n - 1} *) \\\ \qquad\qquad\qquad\;\;\, - *( 1_{1} + 2_{2} + 3_{3} + 4_{4} + 5_{5} + 6_{6} + \cdots + m_{n - 1} *) *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [2, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 2 \end{array} *)  =  \\\ \qquad\qquad \frac{ 1 }{ 2 } \cdot *( *( 1^{2}_{1} + 2^{2}_{2} + 3^{2}_{3} + 4^{2}_{4} + 5^{2}_{5} + 6^{2}_{6} + \cdots + (n - 1)^{2}_{n - 1} *) \\\ \qquad\qquad\;\;\, - *( 1_{1} + 2_{2} + 3_{3} + 4_{4} + 5_{5} + 6_{6} + \cdots + (n - 1)_{n - 1} *) *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Summe der ersten \lm{ x } Quadratzahlen können wir folgendermaßen ausdrücken:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:QuadratischePyramidalzahl:2021}. \\\\ Vgl. \\cite{wiki:GaussscheSummenformel:2023}, Verwandte Summen.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  1^{2}_{1} + 2^{2}_{2} + 3^{2}_{3} + 4^{2}_{4} + 5^{2}_{5} + 6^{2}_{6} + \cdots x^{2}_{x}  }'),
                      array( display => 'on',  latex => '{  =  \frac{ x \cdot (x + 1) \cdot (2 x + 1) }{ 6 }  }'),
                      array( display => 'on',  latex => '{  =  \frac{ (x^{2} + x) \cdot (2 x + 1) }{ 6 }  }'),
                      array( display => 'on',  latex => '{  =  \frac{ 2 x^{3} + x^{2} + 2 x^{2} + x }{ 6 }  }'),
                      array( display => 'on',  latex => '{  =  \frac{ 2 x^{3} + 3 x^{2} + x }{ 6 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hierin können wir nun \lm{ x } durch \lm{ n - 1 } ersetzen, um das Ergebnis weiter zu nutzen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ 2 x^{3} + 3 x^{2} + x }{ 6 }  }'),
                      array( display => 'on',  latex => '{  =  \frac{ 2 \cdot (n - 1)^{3} + 3 \cdot (n - 1)^{2} + (n - 1) }{ 6 }  }'),
                      array( display => 'on',  latex => '{  =  \frac{ 2 \cdot (n^{3} - 3 n^{2} + 3 n - 1) + 3 \cdot (n - 1)^{2} + (n - 1) }{ 6 }  }'),
                      array( display => 'on',  latex => '{  =  \frac{ 2 \cdot (n^{3} - 3 n^{2} + 3 n - 1) + 3 \cdot (n^{2} - 2 n + 1) + (n - 1) }{ 6 }  }'),
                      array( display => 'on',  latex => '{  =  \frac{ 2 n^{3} - 6 n^{2} + 6 n - 2 + 3 n^{2} - 6 n + 3 + n - 1 }{ 6 }  }'),
                      array( display => 'on',  latex => '{  =  \frac{ 2 n^{3} - 3 n^{2} + n }{ 6 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das Ergebnis setzen wir in unsere vorherige Gesamtsumme für die Reihe der Quadratzahlen ein'."\n".
                    'und für die Reihe der natürlichen Zahlen die Gaußsche Summe:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall m \in [2, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 2 \end{array} *)  =  \frac{ 1 }{ 2 } \cdot *( *( \frac{ 2 n^{3} - 3 n^{2} + n }{ 6 } *) \\\ \qquad\qquad\qquad\qquad\qquad\qquad\;\; - *( \frac{ (n - 1)^{2} + (n - 1) }{ 2 } *) *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [2, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 2 \end{array} *)  =  \frac{ 1 }{ 2 } \cdot *( *( \frac{ 2 n^{3} - 3 n^{2} + n }{ 6 } *) \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\quad\, - *( \frac{ n^{2} - n }{ 2 } *) *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [2, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 2 \end{array} *)  =  \frac{ 1 }{ 2 } \cdot *( *( \frac{ 2 n^{3} - 3 n^{2} + n }{ 6 } *) \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\;\, - *( \frac{ 3 n^{2} - 3 n }{ 6 } *) *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [2, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 2 \end{array} *)  =  \frac{ 1 }{ 2 } \cdot \frac{ 2 n^{3} - 6 n^{2} + 4 n }{ 6 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall m \in [2, n - 1]_{\mathbb{N}} } *( \begin{array}{llll} m \\\ 2 \end{array} *)  =  \frac{ n^{3} - 3 n^{2} + 2 n }{ 6 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Berechnung weiterer Anteile erspare ich mir für den Moment.'."\n",
                      'Aber wir können erahnen und logischerweise sogar absolut sicher sein, dass sich für den Summanden mit der höchsten'."\n".
                    'Potenz nach und nach die Glieder der Taylorreihe\\color{*Bearb}{(Verweis)} ergeben,'."\n".
                    'die summiert zur Eulerschen Zahl \lm{ \e } führen.'."\n".
                    ''))),

                    ))),

                  array( 'headline', array( jump_name => 'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:XXX', text =>
                      
                'Wie berechnet sich daraus \lm{ \e_\s }', subline =>
                  '')),
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\\bold{XXX}',
                    '• Können wir hieraus über die Definition des Über-Operators der Binomialkoeffizienten durch Fakultäten etwas über die Fakultät von \lm{ \s } lernen?',
                    '• \\bold{Das kann so nicht stimmen, oder?} Wir können genau sagen, wieviele Summanden die Summe oder Reihe hat, die den endlichen Anteil von \lm{ \e_\s } darstellt. Es sind genau \lm{ \frac{1}{2} \s + 1 }, weil \lm{ \s } eine gerade Zahl ist und damit der größte Wert im Pascalschen Dreieck bei dieser Potenz liegt. Danach werden die Werte im Pascalschen Dreieck kleiner, so, dass ihre inneren Potenzen nicht mehr bis zum Endlichen reichen, denke ich.',
                    ))),
                  array( 'text', array( text => array(
                    'Beim Übergang zum endlichen Exponenten Eins finden offensichtlich Überträge auf höhere Stellen'."\n".
                    'des \\jump{*SupNum:Stellenwertsystem-Schreibweise}{superialen Stellenwertsystems} statt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{\s}  =  \e_{\s}^{1}  =  \e_{\s}^{․\,〈\s〉}  =  〈1〉․〈1〉^{\s}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}  =  *〈 *( \begin{array}{llll} \s \\\ 0 \end{array} *) *〉․\,*〈 *( \begin{array}{llll} \s \\\ 1 \end{array} *) *〉*〈 *( \begin{array}{llll} \s \\\ 2 \end{array} *) *〉*〈 *( \begin{array}{llll} \s \\\ 3 \end{array} *) *〉\cdots \\\ \qquad\qquad\qquad\qquad \cdots *〈 *( \begin{array}{llll} \s \\\ \s - 2 \end{array} *) *〉*〈 *( \begin{array}{llll} \s \\\ \s - 1 \end{array} *) *〉*〈 *( \begin{array}{llll} \s \\\ \s \end{array} *) *〉_{-\s}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}  =  *〈 1 *〉․\,*〈 \s *〉*〈 \frac{ \s^{2} - \s }{ 2 } *〉*〈 \frac{ \s^{3} - 3 \s^{2} + 2 \s }{ 6 } *〉\cdots \\\ \qquad\qquad\qquad\qquad \cdots *〈 \frac{ \s^{3} - 3 \s^{2} + 2 \s }{ 6 } *〉*〈 \frac{ \s^{2} - \s }{ 2 } *〉*〈 \s *〉*〈 1 *〉_{-\s}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}  =  *〈 1 + 1 + \frac{ 1^{2} }{ 2 } + \frac{ 1^{3} }{ 6 } + \cdots *〉․ \\\ \qquad\qquad\qquad\qquad *〈 - \frac{ 1 }{ 2 } - \frac{ 3 \cdot 1^{2} }{ 6 } + \cdots *〉*〈 \frac{ 2 }{ 6 } + \cdots *〉\cdots \\\ \qquad\qquad\qquad\qquad\; \cdots *〈 \cdots + \frac{ 1^{3} }{ 6 } *〉*〈 \cdots - \frac{ 3 \cdot 1^{2} }{ 6 } *〉 \\\ \qquad\qquad\qquad\qquad\quad\; *〈 \cdots + \frac{ 2 }{ 6 } + \frac{ 1^{2} }{ 2 } *〉*〈 - \frac{ 1 }{ 2 } *〉*〈 1 *〉*〈 0 *〉*〈 1 *〉_{-\s}  }',
                                          label_name => 'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-gleich-Stellenwertsystem', label_text => '\\name{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-gleich-Stellenwertsystem}', label_incr => true),
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:BeispielrechnungAbleitungMit-s-2',
                Title => 'Beispielrechnung zur Ableitung mit \lm{ s^2 } …',
                TitleVis => 'Beispielrechnung zur Ableitung mit \lm{ s^2 }:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Exemplarisch möchte ich einmal die \lm{ \e }-Funktion anhand einer etwas variierten Ableitung'."\n".
                    'definieren, um zu sehen, wie sich dies eventuell auf die Basis der sich so ergebenden \lm{ \e }-Funktion'."\n".
                    'auswirkt.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Die Definition unserer ursprünglichen Ableitung finden wir in Formel \\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins-Kurznotation}'."\n".
                      'und ändern die dortige Differenz von \lm{ s } auf \lm{ s^2 }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  :=  \frac{ f(〈x〉․〈0〉〈1〉) - f(x) }{ ․〈0〉〈1〉 }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Soll eine Funktion nun ihre eigene Ableitung sein, dann gilt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  =  f(x)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  f(x)  =  \frac{ f(〈x〉․〈0〉〈1〉) - f(x) }{ ․〈0〉〈1〉 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x) \cdot {․〈0〉〈1〉}  =  f(〈x〉․〈0〉〈1〉) - f(x)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x) \cdot {․〈0〉〈1〉} + f(x)  =  f(〈x〉․〈0〉〈1〉)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x) \cdot *( {․〈0〉〈1〉} + 1 *)  =  f(〈x〉․〈0〉〈1〉)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x) \cdot 〈1〉․〈0〉〈1〉  =  f(〈x〉․〈0〉〈1〉)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Nach kurzer Überlegung können wir erraten, dass die Bedingung für unsere Funktion von einer'."\n".
                      'Exponentialfunktion der Basis \lm{ 〈1〉․〈0〉〈1〉 } erfüllt werden kann,'."\n".
                      'denn der Parameter der Funktion soll sich um eine superial kleine Einheit erhöhen, wenn mit'."\n".
                      '\lm{ 〈1〉․〈0〉〈1〉 } multipliziert wird.'."\n".
                      'Wir erraten also'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f(x)  =  〈1〉․〈0〉〈1〉^{〈x〉_{2}}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und zeigen durch Einsetzen der letzten in die vorletzte Formel, dass unsere Vermutung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  〈1〉․〈0〉〈1〉^{〈x〉_{2}} \cdot 〈1〉․〈0〉〈1〉  =  〈1〉․〈0〉〈1〉^{〈〈x〉․\,〈0〉〈1〉〉_{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  〈1〉․〈0〉〈1〉^{〈x〉_{2} + 1}  =  〈1〉․〈0〉〈1〉^{〈〈x〉․\,〈0〉〈1〉〉_{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  〈1〉․〈0〉〈1〉^{〈x〉〈0〉〈1〉.}  =  〈1〉․〈0〉〈1〉^{〈x〉〈0〉〈1〉․}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'richtig ist.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Bei näherer Betrachtung können wir nun aber auch leicht sehen, dass es noch weitere Funktionen ähnlicher'."\n".
                      'Art gibt, die dies auch erfüllen, nämlich für alle \lm{ y }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{y}(x)  =  〈1〉․〈0〉〈1〉^{〈x〉〈0〉〈y〉.}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Daher legen wir zusätzlich fest, dass'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{y}(0)  =  1  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  y  =  0  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  f(x)  =  〈1〉․〈0〉〈1〉^{〈x〉_{2}}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'sein soll und legen uns damit auf die zuerst gefundene Funktion fest, so wie es auch sonst üblich ist.'."\n",
                        '\\\\ '."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Auf die Weise ergibt sich für die \lm{ \e }-Funktion:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{s^{2}}^{x}  =  〈1〉․〈0〉〈1〉^{〈x〉_{2}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Nun stellt sich die Frage, ob die Basis unserer sich hierdurch ergebenden \lm{ \e }-Funktion auch \lm{ \e_s } ist,'."\n".
                    'oder ein davon abweichendes \lm{ \e_2 }.'."\n",
                      'Berechnen wir nun spaßeshalber die Funktionswerte im infinitesimalen Bereich, dann erkennen wir das Pascalsche Dreieck:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{s^{2}}^{〈x〉_{-2}}  =  〈1〉․〈0〉〈1〉^{〈〈x〉_{-2}〉_{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{s^{2}}^{〈x〉_{-2}}  =  〈1〉․〈0〉〈1〉^{x}  }'),
                      array( display => 'on',  latex => '{  \e_{s^{2}}^{0}  =  1  }'),
                      array( display => 'on',  latex => '{  \e_{s^{2}}^{〈1〉_{-2}}  =  〈1〉․〈0〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s^{2}}^{〈2〉_{-2}}  =  〈1〉․〈0〉〈2〉〈0〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s^{2}}^{〈3〉_{-2}}  =  〈1〉․〈0〉〈3〉〈0〉〈3〉〈0〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s^{2}}^{〈4〉_{-2}}  =  〈1〉․〈0〉〈4〉〈0〉〈6〉〈0〉〈4〉〈0〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s^{2}}^{〈5〉_{-2}}  =  〈1〉․〈0〉〈5〉〈0〉〈10〉〈0〉〈10〉〈0〉〈5〉〈0〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s^{2}}^{〈6〉_{-2}}  =  〈1〉․〈0〉〈6〉〈0〉〈15〉〈0〉〈20〉〈0〉〈15〉〈0〉〈6〉〈0〉〈1〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So bekommen wir einen vom Aussehen her vielleicht etwas unerwarteten Einblick in die'."\n".
                    'infinitesimale Feinstruktur der \lm{ \e }-Funktion und ihren Zusammenhang mit den Binomischen Formeln'."\n".
                    'und dem Pascalschen Dreieck.'."\n",
                      'Beim Übergang zum endlichen Exponenten Eins finden offensichtlich Überträge auf höhere Stellen'."\n".
                    'des superialen Stellenwertsystems statt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{s^{2}}  =  \e_{s^{2}}^{1}  =  \e_{s^{2}}^{〈s^{2}〉_{-2}}  =  〈1〉․〈0〉〈1〉^{s^{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}  =  *〈 *( \begin{array}{llll} \s^{2} \\\ 0 \end{array} *) *〉․\,*〈 0 *〉*〈 *( \begin{array}{llll} \s^{2} \\\ 1 \end{array} *) *〉*〈 0 *〉*〈 *( \begin{array}{llll} \s^{2} \\\ 2 \end{array} *) *〉 \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\quad\;\; *〈 0 *〉*〈 *( \begin{array}{llll} \s^{2} \\\ 3 \end{array} *) *〉\cdots \\\ \qquad\qquad\qquad\; \cdots *〈 0 *〉*〈 *( \begin{array}{llll} \s^{2} \\\ \s^{2} - 2 \end{array} *) *〉*〈 0 *〉*〈 *( \begin{array}{llll} \s^{2} \\\ \s^{2} - 1 \end{array} *) *〉 \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\quad\;\; *〈 0 *〉*〈 *( \begin{array}{llll} \s^{2} \\\ \s^{2} \end{array} *) *〉_{-\s^{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}  =  *〈 1 *〉․\,*〈 0 *〉*〈 \s^{2} *〉*〈 0 *〉 \\\ \qquad\qquad\qquad\qquad\;\;\, *〈 \frac{ \s^{4} - \s^{2} }{ 2 } *〉*〈 0 *〉*〈 \frac{ \s^{6} - 3 \s^{4} + 2 \s^{2} }{ 6 } *〉\cdots \\\ \qquad\qquad\qquad\quad\;\;\, \cdots *〈 \frac{ \s^{6} - 3 \s^{4} + 2 \s^{2} }{ 6 } *〉*〈 0 *〉*〈 \frac{ \s^{4} - \s^{2} }{ 2 } *〉 \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\quad\; *〈 0 *〉*〈 \s^{2} *〉*〈 0 *〉*〈 1 *〉_{-\s^{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}  =  *〈 1 + 1 + \frac{ 1^{2} }{ 2 } + \frac{ 1^{3} }{ 6 } + \cdots *〉․ \\\ \qquad\qquad\qquad\qquad *〈 0 *〉*〈 - \frac{ 1 }{ 2 } - \frac{ 3 \cdot 1^{2} }{ 6 } + \cdots *〉*〈 0 *〉*〈 \frac{ 2 }{ 6 } + \cdots *〉\cdots \\\ \qquad\qquad\qquad\;\;\; \cdots *〈 \cdots + \frac{ 1^{3} }{ 6 } *〉*〈 0 *〉*〈 \cdots - \frac{ 3 \cdot 1^{2} }{ 6 } *〉*〈 0 *〉 \\\ \qquad\qquad\qquad\qquad\quad *〈 \cdots + \frac{ 2 }{ 6 } + \frac{ 1^{2} }{ 2 } *〉*〈 0 *〉*〈 - \frac{ 1 }{ 2 } *〉*〈 0 *〉 \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad *〈 1 *〉*〈 0 *〉*〈 0 *〉*〈 0 *〉*〈 1 *〉_{-\s^{2}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können hier erkennen, dass wir, trotz der feineren Auflösung der Ableitung keinen Informationsgewinn erzielen.'."\n".
                    'In den ungeraden Potenzen von \lm{ \s } reißen einfach Lücken auf, die nichts zusätzliches enthalten.'."\n".
                    'Daran können wir erkennen, dass die superiale Einheit \lm{ \s } gerade die optimale Auflösung für Differentiation in diesem Kontext ist.'."\n".
                    ''))),
                    ))),

                  array( 'text', array( text => array(
                    'Hier können wir nun erkennen und logischerweise sogar absolut sicher sein, dass sich im Endlichen die Taylorreihe\\color{*Bearb}{(Verweis)}'."\n".
                    'zur Eulerschen Zahl \lm{ \e } ergibt.'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}  =  *〈 \sum_{ \forall k \in \mathbb{N} } \frac{ 1^{k} }{ k! } *〉․ \\\ \qquad\qquad\qquad\qquad *〈 - \frac{ 1 }{ 2 } - \frac{ 3 \cdot 1^{2} }{ 6 } + \cdots *〉*〈 \frac{ 2 }{ 6 } + \cdots *〉\cdots \\\ \qquad\qquad\qquad\qquad\; \cdots *〈 \cdots + \frac{ 1^{3} }{ 6 } *〉*〈 \cdots - \frac{ 3 \cdot 1^{2} }{ 6 } *〉 \\\ \qquad\qquad\qquad\qquad\quad\; *〈 \cdots + \frac{ 2 }{ 6 } + \frac{ 1^{2} }{ 2 } *〉*〈 - \frac{ 1 }{ 2 } *〉*〈 1 *〉*〈 0 *〉*〈 1 *〉_{-\s}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen nun auch, dass die Eulersche Zahl \lm{ \e } aktual unendlich viele aktual unendlich kleine Anteile hat,'."\n".
                      'die nicht Null sind und damit eben nicht verschwinden.'."\n".
                    'Denn es ist schlichtweg unmöglich die Ableitung mit einer Differenz zu definieren, die wirklich Null ist!'."\n".
                    'Denn die Differenz muss positiv und kann nicht Null sein, damit sie Sinn macht und nicht undefiniert wird.'."\n",
                      'Was passiert, wenn wir die Differenz kleiner machen, sehen wir in der nachfolgenden \\jump{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:BeispielrechnungAbleitungMit-s-2}{Beispielrechnung zur Ableitung}'."\n".
                    'mit \lm{ \s^2 } anstatt mit \lm{ \s }, wie oben definiert.'."\n".
                    'Die aktual unendliche Anzahl an aktual unendlich kleinen Summanden bleibt gleich, auch, wenn die Werte der'."\n".
                    'Summanden kleiner werden.'."\n",
                      'Strukturell gewinnen wir nichts, wenn wir die Differenz kleiner machen.'."\n".
                    'Es ergeben sich nur Lücken, deren Werte Null sind.'."\n".
                    'Die Summanden ungleich Null bleiben, solange unsere Differenz größer als Null ist.'."\n".
                    'Und das muss sie ja.'."\n".
                    'Das ist Fakt.'."\n",
                      'Nur durch eine Differenz, die unendlich klein ist, können wir erreichen,'."\n".
                    'dass die Potenzanteile der Differenz in sich nicht überlappende unendliche Größenskalen'."\n".
                    'zerfallen und so das richtige Ergebnis der Rechnung im Endlichen erreicht wird.'."\n",
                      'Der Ansatz mit dem Limes hat den Charm, dass wir uns scheinbar nicht oder wenig mit den'."\n".
                    'unendlich kleinen Details der Rechnung auseinander setzen müssen.'."\n",
                      'Aber ich glaube, der Limes-Ansatz hat auf der einen Seite seine Berechtigung, weil er Vorteile in sich trägt,'."\n".
                    'und ist auf der anderen Seite auch ein Trugschluss.'."\n".
                    'Denn gerade diese Details sind sehr interessant sowie erkenntnisreich und lassen erahnen und auch sichtbar werden,'."\n".
                    'was vor sich geht; wie das Räderwerk des Endlichen mit dem unendlich Kleinen und dem unendlich Großen ineinander greift.'."\n",
                      'Ohne die Erkenntnis dieses Räderwerks wäre ich wohl nie auf die \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung}'."\n".
                    'gestoßen und schließlich auf ihren Beweis gekommen, der uns neue tiefe arithmetische Einblicke ins Unendliche,'."\n".
                    'in die vollständige Induktion, die Primzahlen und die Primzahlverteilung, gewährt.'."\n",
                      'In meinen Augen offenbart dieses Räderwerk, dass die Eulersche Zahl \lm{ \e } keine rein endliche'."\n".
                    'Zahl sein kann.'."\n".
                    'Sie ist nicht einmal eine Superial-Zahl der hier entwickelten 1. Ordnung, also ein Element von \lm{ \mathbb{S} },'."\n".
                    'weil sie Summanden mit aktual unendlich kleiner Potenz von \lm{ \s } in sich trägt.'."\n".
                    'Es ist schlichtweg unmöglich, sie so zu definieren, dass sie die Ableitungsbedingung erfüllt,'."\n".
                    'und keine unendlich kleinen Summanden enthält.'."\n".
                    'Desto kleiner wir die Differenz, die ihr zu Grunde liegt, machen, umso höher wird irgendwann die unendliche Ordnung,'."\n".
                    'die wir benötigen, die Eulersche Zahl zu definieren, ohne, dass wir einen Informationsgewinn haben.'."\n",
                      'Rein endlich werden kann das Ergebnis, bei genauer Betrachtung, hingegen nicht.'."\n".
                    'Der Limes macht es uns halt einfacher, die tieferen Details nicht zu sehen.'."\n",
                      'Die „transzendente“ Zahl \lm{ \e } gehört dementsprechend nicht zu den rein endlichen Zahlen.'."\n".
                    'Sie ist keine irrationale Zahl in dem Sinne, dass sie nicht durch einen Bruch darstellbar ist,'."\n".
                    'aber ausschließlich endliche Summanden enthält.'."\n",
                      'Ich rege also an, dass wir den Begriff der Transzendenz, und sicherheitshalber auch den der Irrationalität,'."\n".
                    'wobei ich auf die \\jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung} hinweisen möchte,'."\n".
                    'in diesem Sinne tiefer überdenken.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eulersche-Zahl-e-Funktion:Die-Quadratur-des-Kreises'),
                    )),
              )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


          <!  • Die Quadratur des Kreises – von der eulerschen Zahl e zu π  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eulersche-Zahl-e-Funktion:Die-Quadratur-des-Kreises',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eulersche-Zahl-e-Funktion', type => 'back'),
                    )),

                  array( 'notice', array( Display => 'showContent', text => array(
                    '\\bold{Wo Pi noch vorkommt}',
                    '• Pi ergibt sich über Integration aus dem Pascalschen Dreieck sehr ähnlich wie die Berechnung von \lm{ \e^{\i \cdot \pi \cdot x} } im Zusammenhang mit Sinus und Cosinus: Siehe \\jump[https://www.spektrum.de/kolumne/newtons-methode-um-pi-mit-dem-pascalschen-dreieck-zu-berechnen/2200009?utm_source=sdwv_daily&utm_medium=nl&utm_content=heute]{}{Manon Bischoff – Sir Isaac Newton fand Pi im pascalschen Dreieck}.',
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
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{\s}^{\i \cdot x}  =  〈1〉․〈1〉^{\i \cdot x \cdot \s}  }'),
                      array( display => 'on',  latex => '{  \e_{\s}^{\i \cdot x}  =  〈1〉․〈1〉^{〈\i \cdot x〉_{1}}  }'),
                      array( display => 'on',  latex => '{  \e_{\s}^{\i \cdot x}  :=  \mathrm{cos}_{\s}(x) + \i \cdot \mathrm{sin}_{\s}(x)  }'),
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
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈\i \cdot x〉}  =  〈1〉․〈1〉^{〈․\,〈\i \cdot x〉〉_{1}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{s}^{․\,〈\i \cdot x〉}  =  〈1〉․〈1〉^{\i \cdot x}  }'),
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
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( x + y *)^{\alpha}  =  \sum_{ \forall k \in \mathbb{N}_{\infty} } *( \begin{array}{llll} \alpha \\\ k \end{array} *) x^{\alpha - k} y^{k}  }'),
                      // array( display => 'on',  latex => '{  \Leftrightarrow  x^{\alpha} \cdot *( 1 + \frac{ y }{ x } *)^{\alpha}  =  x^{\alpha} \cdot \sum_{ \forall k \in \mathbb{N}_{\infty} } *( \begin{array}{llll} \alpha \\\ k \end{array} *) *( \frac{ y }{ x } *)^{k}  }'),
                      array( display => 'on',  latex => '{  *( \begin{array}{llll} \alpha \\\ k \end{array} *)  =  \frac{ \alpha *( \alpha - 1 *) *( \alpha - 2 *) \cdots *( \alpha - k + 1 *) }{ k! }  }'),
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
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x  =  1  }'),
                      array( display => 'on',  latex => '{  y  =  ․〈1〉  =  \s^{-1}  }'),
                      array( display => 'on',  latex => '{  \alpha  =  \i \cdot x  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( 1 + ․〈1〉 *)^{\alpha}  =  \sum_{ \forall k \in XXX \mathbb{N}_{\infty} } *( \begin{array}{llll} \alpha \\\ k \end{array} *) 1^{\alpha - k} 〈1〉_{-1}^{k}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  〈1〉․〈1〉^{\alpha}  =  \sum_{ \forall k \in XXX \mathbb{N}_{\infty} } *( \begin{array}{llll} \alpha \\\ k \end{array} *) 〈1〉_{-k}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  〈1〉․〈1〉^{\alpha}  =  \sum_{ \forall k \in XXX \mathbb{N}_{\infty} } *〈 *( \begin{array}{llll} \alpha \\\ k \end{array} *) *〉_{-k}  }'),
                      array( display => 'on',  latex => '{  *( \begin{array}{llll} \alpha \\\ k \end{array} *)  =  \frac{ \alpha *( \alpha - 1 *) *( \alpha - 2 *) \cdots *( \alpha - k + 1 *) }{ k! }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \begin{array}{llll} \alpha \\\ k \end{array} *)  =  \frac{ *( \alpha - 0 *) *( \alpha - 1 *) *( \alpha - 2 *) \cdots *( \alpha - *( k - 1 *) *) }{ k! }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \begin{array}{llll} \alpha \\\ k \end{array} *)  =  \frac{ \prod_{ \forall j \in [0, k - 1]_{\mathbb{N}_{\infty}} }  *( \alpha - j *) }{ k! }  }'),
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
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \alpha - 0 *)  =  \alpha  }'),
                      array( display => 'on',  latex => '{  *( \alpha - 0 *) *( \alpha - 1 *)  =  *( \alpha *) *( \alpha - 1 *)  }'),
                      array( display => 'on',  latex => '{  =  *( \alpha *) *( \alpha - 1 *)  }'),
                      array( display => 'on',  latex => '{  =  \alpha^{2} - \alpha  }'),
                      array( display => 'on',  latex => '{  *( \alpha^{2} - \alpha *) *( \alpha - 2 *)  =  \alpha^{3} - \alpha^{2} - 2 \alpha^{2} + 2 \alpha  }'),
                      array( display => 'on',  latex => '{  =  \alpha^{3} - 3 \alpha^{2} + 2 \alpha  }'),
                      array( display => 'on',  latex => '{  *( \alpha^{3} - 3 \alpha^{2} + 2 \alpha *) *( \alpha - 3 *)  =  \alpha^{4} - 3 \alpha^{3} + 2 \alpha^{2} \\\ \qquad\qquad\qquad\qquad\qquad\qquad\;\; - 3 \alpha^{3} + 9 \alpha^{2} - 6 \alpha  }'),
                      array( display => 'on',  latex => '{  =  \alpha^{4} - 6 \alpha^{3} + 11 \alpha^{2} - 6 \alpha  }'),
                      array( display => 'on',  latex => '{  *( \alpha^{4} - 6 \alpha^{3} + 11 \alpha^{2} - 6 \alpha *) *( \alpha - 4 *)  =  \\\ \qquad \alpha^{5} - 6 \alpha^{4} + 11 \alpha^{3} - 6 \alpha^{2} - 4 \alpha^{4} + 24 \alpha^{3} - 44 \alpha^{2} + 24 \alpha  }'),
                      array( display => 'on',  latex => '{  =  \alpha^{5} - 10 \alpha^{4} + 35 \alpha^{3} - 50 \alpha^{2} + 24 \alpha  }'),
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
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{s}^{0}  =  1  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈\i〉}  =  〈1〉․〈\i〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈2 \i〉}  =  〈1〉․〈2 \i〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈3 \i〉}  =  〈1〉․〈3 \i〉〈3〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈4 \i〉}  =  〈1〉․〈4 \i〉〈6〉〈4〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈5 \i〉}  =  〈1〉․〈5 \i〉〈10〉〈10〉〈5〉〈1〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈6 \i〉}  =  〈1〉․〈6 \i〉〈15〉〈20〉〈15〉〈6〉〈1〉  }'),
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
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{s}^{0}  =  *( \begin{array}{llll} 0 \\\ 0 \end{array} *)  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈1〉}  =  *〈 *( \begin{array}{llll} 1 \\\ 0 \end{array} *) *〉 ․\, *〈 *( \begin{array}{llll} 1 \\\ 1 \end{array} *) *〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈2〉}  =  *〈 *( \begin{array}{llll} 2 \\\ 0 \end{array} *) *〉 ․\, *〈 *( \begin{array}{llll} 2 \\\ 1 \end{array} *) *〉*〈 *( \begin{array}{llll} 2 \\\ 2 \end{array} *) *〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈3〉}  =  *〈 *( \begin{array}{llll} 3 \\\ 0 \end{array} *) *〉 ․\, *〈 *( \begin{array}{llll} 3 \\\ 1 \end{array} *) *〉*〈 *( \begin{array}{llll} 3 \\\ 2 \end{array} *) *〉*〈 *( \begin{array}{llll} 3 \\\ 3 \end{array} *) *〉  }'),
                      array( display => 'on',  latex => '{  \e_{s}^{․\,〈4〉}  =  *〈 *( \begin{array}{llll} 4 \\\ 0 \end{array} *) *〉 ․\, *〈 *( \begin{array}{llll} 4 \\\ 1 \end{array} *) *〉*〈 *( \begin{array}{llll} 4 \\\ 2 \end{array} *) *〉*〈 *( \begin{array}{llll} 4 \\\ 3 \end{array} *) *〉*〈 *( \begin{array}{llll} 4 \\\ 4 \end{array} *) *〉  }'),
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
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{\s}  =  \e_{\s}^{1}  =  \e_{\s}^{․\,〈\s〉}  =  〈1〉․〈1〉^{\s}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}  =  *〈 *( \begin{array}{llll} \s \\\ 0 \end{array} *) *〉․\,*〈 *( \begin{array}{llll} \s \\\ 1 \end{array} *) *〉*〈 *( \begin{array}{llll} \s \\\ 2 \end{array} *) *〉*〈 *( \begin{array}{llll} \s \\\ 3 \end{array} *) *〉\cdots \\\ \qquad\qquad\qquad\qquad \cdots *〈 *( \begin{array}{llll} \s \\\ \s - 2 \end{array} *) *〉*〈 *( \begin{array}{llll} \s \\\ \s - 1 \end{array} *) *〉*〈 *( \begin{array}{llll} \s \\\ \s \end{array} *) *〉_{-\s}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}  =  *〈 1 *〉․\,*〈 \s *〉*〈 \frac{ \s^{2} - \s }{ 2 } *〉*〈 \frac{ \s^{3} - 3 \s^{2} + 2 \s }{ 6 } *〉\cdots \\\ \qquad\qquad\qquad\qquad \cdots *〈 \frac{ \s^{3} - 3 \s^{2} + 2 \s }{ 6 } *〉*〈 \frac{ \s^{2} - \s }{ 2 } *〉*〈 \s *〉*〈 1 *〉_{-\s}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}^{\i}  =  *〈 1 + \i - \frac{ 1^{2} }{ 2 } - \i \frac{ 1^{3} }{ 6 } + \frac{ 1^{4} }{ 24 } - \cdots *〉․ \\\ \qquad\qquad\qquad\qquad *〈 X - \frac{ 1 }{ 2 } - \frac{ 3 \cdot 1^{2} }{ 6 } + \cdots *〉*〈 X \frac{ 2 }{ 6 } + \cdots *〉\cdots \\\ \qquad\qquad\qquad\qquad\; \cdots *〈 X \cdots + \frac{ 1^{3} }{ 6 } *〉*〈 X \cdots - \frac{ 3 \cdot 1^{2} }{ 6 } *〉 \\\ \qquad\qquad\qquad\qquad\quad\; *〈 X \cdots + \frac{ 2 }{ 6 } + \frac{ 1^{2} }{ 2 } *〉*〈 X - \frac{ 1 }{ 2 } *〉*〈 X 1 *〉*〈 X 0 *〉*〈 X 1 *〉_{-\s}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}^{\i \cdot x}  =  *〈 1 + \i x - \frac{ x^{2} }{ 2! } - \frac{ *( \i x *)^{3} }{ 3! } + \frac{ x^{4} }{ 4! } - \cdots *〉․ \\\ \qquad\qquad\qquad\qquad *〈 X - \frac{ 1 }{ 2 } - \frac{ 3 \cdot 1^{2} }{ 6 } + \cdots *〉*〈 X \frac{ 2 }{ 6 } + \cdots *〉\cdots \\\ \qquad\qquad\qquad\qquad\; \cdots *〈 X \cdots + \frac{ 1^{3} }{ 6 } *〉*〈 X \cdots - \frac{ 3 \cdot 1^{2} }{ 6 } *〉 \\\ \qquad\qquad\qquad\qquad\quad\; *〈 X \cdots + \frac{ 2 }{ 6 } + \frac{ 1^{2} }{ 2 } *〉*〈 X - \frac{ 1 }{ 2 } *〉*〈 X 1 *〉*〈 X 0 *〉*〈 X 1 *〉_{-\s}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}^{\i \cdot x}  =  *〈 \sum_{ \forall k \in \mathbb{N} } \frac{ *( \i \cdot x *)^{k} }{ k! } *〉․ \\\ \qquad\qquad\qquad\qquad *〈 \cdots *〉*〈 \cdots *〉\cdots \\\ \qquad\qquad\qquad\qquad\; \cdots *〈 \cdots *〉*〈 \cdots *〉 \\\ \qquad\qquad\qquad\qquad\quad\; *〈 \cdots *〉*〈 \cdots *〉*〈 \cdots *〉*〈 \cdots *〉*〈 \cdots *〉_{-\s}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:XXX', text =>
                      
                'Zusammenhang mit \lm{ \pi }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{\s}^{\i \cdot \pi_{\s}}  =  -1  =  〈1〉․〈1〉^{〈\i \cdot \pi_{\s}〉_{1}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  〈1〉․〈1〉^{〈\i \cdot \pi_{\s}〉_{1}}  =  -1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  〈1〉․〈1〉  =  \sqrt[ 〈\i \cdot \pi_{\s}〉_{1} ]{ -1 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  〈\i \cdot \pi_{\s}〉_{1}  =  \log_{〈1〉․\,〈1〉} -1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \i \cdot \pi_{\s}  =  〈 \log_{〈1〉․\,〈1〉} -1〉_{-1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi_{\s}  =  \frac{ 〈 \log_{〈1〉․\,〈1〉} -1〉_{-1} }{ \i }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi_{\s}  =  \frac{ *( \log_{〈1〉․\,〈1〉} -1 *) \cdot \s^{-1} }{ \i }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi_{\s}  =  \frac{ \log_{〈1〉․\,〈1〉} -1 }{ \i \cdot \s }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi_{\s}  =  \i^{-1} \cdot \s^{-1} \cdot \log_{〈1〉․\,〈1〉} -1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi_{\s}  =  -\i \cdot \s^{-1} \cdot \log_{〈1〉․\,〈1〉} -1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi_{\s}  =  〈 -\i \cdot \log_{〈1〉․\,〈1〉} -1 〉_{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EuZa.QK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a^{x}  =  b^{x \cdot \log_{b} a}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \e_{\s}^{x}  =  〈1〉․〈1〉^{x \cdot \log_{〈1〉․\,〈1〉} \e_{\s}}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  x \cdot \log_{〈1〉․\,〈1〉} \e_{\s}  =  〈 x 〉_{1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  x \cdot \log_{〈1〉․\,〈1〉} \e_{\s}  =   x \cdot \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \log_{〈1〉․\,〈1〉} \e_{\s}  =   \s  }'),
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
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften'),
                    )),
              )
          ); ?>


      <?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
