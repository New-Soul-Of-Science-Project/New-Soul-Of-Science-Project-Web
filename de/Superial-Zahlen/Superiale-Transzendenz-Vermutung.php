<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Superiale-Transzendenz-Vermutung'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Algebraische-Koeffizienten-Vermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Erklärungs-Video}',
                    '• DiBeos: \\jump[https://www.youtube.com/watch?v=gdJwjQmPyPM]{}{Warum sind transzendente Zahlen so interessant?}.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen sind eine Lupe in die Details der reellen Zahlen, in die reell algebraischen'."\n".
                    'wie auch in die transzendenten Zahlen.'."\n",
                      'Die reell algebraischen Zahlen sind von ihrer Struktur her recht gut bekannt.'."\n".
                    'So konnten wir bereits zeigen, dass sie alle \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{sinnvolle Koeffizienten des Stellenwertsystems der Superial-Zahlen}'."\n".
                    'sind.'."\n".
                    'Ganz anders die transzendenten Zahlen.'."\n".
                    'Über sie ist im wesentlichen nur bekannt, dass sie alle Zahlen sind, die nicht zu den algebraischen gehören.'."\n".
                    'Ein zwar klares, aber auch recht allgemeines Kriterium, dass nicht viel über ihre Struktur aussagt.'."\n",
                      'Sollte die Vermutung stimmen, dass alle transzendenten Zahlen superial kleine Summanden enthalten, der sich dieses Kapitel widmet,'."\n".
                    'dann wären die reell algebraischen Zahlen die \italic{vollständigen} sinnvollen Koeffizienten des Stellenwertsystems der Superial-Zahlen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                      
                'Die transzendente eulersche Zahl \lm{ \e }', subline =>
                  'Eine transzendente Zahl durch die Lupe der Superial-Zahlen')),
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen wurden ja aus der Idee geboren mit ihren aktual unendlichen und infinitesimalen Größen'."\n".
                    '\jump{OM:SupNum:Ableitungen-Integrale}{Ableitungen und Integrale} zu Formulieren, anstatt mit dem Limes zu rechnen.'."\n".
                    'Dies ist uns gelungen, wodurch die Superial-Zahlen auch als Zahlentheorie der Analyses verstanden werden können.'."\n",
                      'Eine Fragestellung, die sich daraus ergibt ist:'."\n".
                    'Welche Funktion ist ihre eigene Ableitung oder ihre eigenes Integral?'."\n",
                      'Dies lässt sich \jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{aufgrund unseres entwickelten Formalismus} berechnen, wie wir mit Formel'."\n".
                    '\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-s-Stellenwertsystem} sehen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{\s}^{x}  =  〈1〉․〈1〉^{〈x〉_{1}}  }',
                                          label_text => '\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-x-Def-durch-s-Stellenwertsystem}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Hier ist die eulersche Zahl \lm{ \e_{\s} } mit der superialen Basis \lm{ \s } indexiert, um zu kennzeichnen,'."\n".
                    'dass der Formalismus zu ihrer Berechnung auf Superial-Zahlen basiert.'."\n",
                      'Die eulersche Zahl ist nun bekanntermaßen eine transzendente Zahl.\footnote{\const{SupNum_g_footnote_text_EulerscheZahl}}'."\n".
                    'Nähern wir sie nicht mit dem Limes an, sondern definieren und berechnen wir sie mit den aktual unendlichen Superial-Zahlen,'."\n".
                    'indem wir \lm{ \e_{\s} } berechnen, dann erhalten wir:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{\s}  =  \e_{\s}^{1}  =  〈1〉․〈1〉^{〈1〉_{1}}  }',
                                          label_text => '\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-hoch-1-Def-durch-s-Stellenwertsystem}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}  =  *〈 1 + 1 + \frac{ 1^{2} }{ 2 } + \frac{ 1^{3} }{ 6 } + \cdots *〉․ \\\ \qquad\qquad\qquad\qquad *〈 - \frac{ 1 }{ 2 } - \frac{ 3 \cdot 1^{2} }{ 6 } + \cdots *〉*〈 \frac{ 2 }{ 6 } + \cdots *〉\cdots \\\ \qquad\qquad\qquad\qquad\; \cdots *〈 \cdots + \frac{ 1^{3} }{ 6 } *〉*〈 \cdots - \frac{ 3 \cdot 1^{2} }{ 6 } *〉 \\\ \qquad\qquad\qquad\qquad\quad\; *〈 \cdots + \frac{ 2 }{ 6 } + \frac{ 1^{2} }{ 2 } *〉*〈 - \frac{ 1 }{ 2 } *〉*〈 1 *〉*〈 0 *〉*〈 1 *〉_{-\s}  }',
                                          label_text => '\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-gleich-Stellenwertsystem}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \e_{\s}  =  *〈 \sum_{ \forall k \in \mathbb{N} } \frac{ 1^{k} }{ k! } *〉․ \\\ \qquad\qquad\qquad\qquad *〈 - \frac{ 1 }{ 2 } - \frac{ 3 \cdot 1^{2} }{ 6 } + \cdots *〉*〈 \frac{ 2 }{ 6 } + \cdots *〉\cdots \\\ \qquad\qquad\qquad\qquad\; \cdots *〈 \cdots + \frac{ 1^{3} }{ 6 } *〉*〈 \cdots - \frac{ 3 \cdot 1^{2} }{ 6 } *〉 \\\ \qquad\qquad\qquad\qquad\quad\; *〈 \cdots + \frac{ 2 }{ 6 } + \frac{ 1^{2} }{ 2 } *〉*〈 - \frac{ 1 }{ 2 } *〉*〈 1 *〉*〈 0 *〉*〈 1 *〉_{-\s}  }',
                                          label_text => '\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-gleich-Stellenwertsystem-mit-Summe}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können hier sehen, dass wir im endlichen Anteil der superialen Stellenwert-Zahl die bekannte Definition der'."\n".
                    'eulerschen Zahl finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e  =  \sum_{ \forall k \in \mathbb{N} } \frac{ 1^{k} }{ k! }  =  \sum_{ \forall k \in \mathbb{N} } \frac{ 1 }{ k! }  }',
                                               footnote => '\\const{SupNum_g_footnote_text_EulerscheZahl}'),
                    ))),
                  array( 'text', array( text => array(
                    'Darüber hinaus sehen wir oben in Formel \jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-gleich-Stellenwertsystem-mit-Summe}'."\n".
                    'Stellen, die genau bis zum superial kleinen Summanden der Stelle \lm{ -\s } hinunter reichen.'."\n".
                    'Deshalb ist die eulersche Zahl sogar eine Zahl die nicht zu den auf dieser Seite beschriebenen Superial-Zahlen gehört,'."\n".
                    'sondern eine Erweiterung dieser darstellt, die auch superiale Exponenten der superialen Basis \lm{ \s } zulassen,'."\n".
                    'hier \lm{ \s^{-\s} }.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                      
                'Unsere Vermutung, dass transzendente Zahlen immer superial kleine Summanden besitzen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Zum einen haben wir gezeigt, dass alle reell algebraischen Zahlen sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n".
                    'Zum anderen sehen wir hier an \lm{ \e_{\s} }, einer der relativ wenigen bekannten transzendenten Zahlen, dass sie sehr viele'."\n".
                    'superial kleine Summanden enthält.'."\n",
                      'So liegt die Vermutung in der Luft, dass alle transzendenten Zahlen superial kleine Summanden enthalten,'."\n".
                    'sollten die reell algebraischen Zahlen wirklich die vollständigen Koeffizienten der Superial-Zahlen sein.'."\n".
                    'Denn die reell algebraischen Zahlen sind dann alle Zahlen unter den reellen Zahlen, die keine superial kleinen Summanden enthalten.'."\n".
                    'Und da alle Zahlen auf dem reellen Zahlenstrahl, die nicht reell algebraisch sind, per Definition transzendent sind,'."\n".
                    'müssen alle transzendenten Zahlen superial kleine Summanden enthalten.'."\n",
                      'Wir sehen …'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                      
                'Die Vermutung, dass die reell algebraischen Zahlen die vollständigen Koeffizienten der Superial-Zahlen sind', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wie kommen wir zu dem Wissen, dass die reell algebraischen Zahlen die \italic{vollständigen} Koeffizienten der Superial-Zahlen sind?'."\n",
                      'Wir müssen zeigen, dass die reell algebraischen Zahlen nicht nur eine Teilmenge von oder gleich den sinnvollen Koeffizienten sind.'."\n".
                    'Sondern auch, dass die sinnvollen Koeffizienten eine Teilmenge von oder gleich den reell algebraischen Zahlen sind.'."\n".
                    'Dann folgt zusammen die Gleichheit:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\R}  \subseteq  \mathbb{A}_{\S}  }',
                                          label_text => '\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:Equ-As-Teilmengegleich-Ar}', label_incr => false),
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  ?\subseteq  \mathbb{A}_{\R}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \mathbb{A}_{\S}  ?=  \mathbb{A}_{\R}  }'),
                    ))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>

                'Beweis der Superialen-Transzendenz-Vermutung (STV) über das superiale Kronecker-Kriterium (SKK)', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Über das superiale Kronecker-Kriterium nehmen wir nachfolgend den Beweis der Superialen-Transzendenz-Vermutung in Angriff.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'STV in Kürze', subline =>
                    'Beweisidee')),
                  array( 'text', array( intent => '0em', text => array(
                    'Sei \lm{ \alpha \in \mathbb{A}_{\S} } und \lm{ T = \alpha \cdot \s \in \mathbb{S}_{\Z, *\{ 1 *\}} }.'."\n".
                    'Für \lm{ P \in \mathbb{Z}[x] } setze \lm{ \Phi_{P}(\alpha) = P(\alpha)\s^{\operatorname{deg} P} = \sum_{i=0}^{d} c_{i} \cdot \, T^{i} \cdot \s^{d−i} }.'."\n".
                    'Dann gilt für jede endliche Primzahl \lm{ p }: weil \lm{ p | T } und \lm{ p | \s }, hat jeder Summand mindestens \lm{ d p }-Faktoren,'."\n".
                    'also \lm{ v_{p}(\Phi_{P}(\alpha)) \ge d } (uniformer \lm{ p }-adischer Schub).'."\n",
                    'Mit dem Dirichlet–Siegel-Lemma konstruiert man induktiv monische Polynome \lm{ P_{k} } mit \lm{ \operatorname{deg} P_{k} \ge k },'."\n".
                    '\lm{ *| P_{k}(\alpha) |* \le 2^{−k} } und Kongruenz-Kohärenz \lm{ P_{k + 1} \equiv P_{k}(\operatorname{mod} M_{k}) }'."\n".
                    'bei wachsendem \lm{ M_{k+1} \ge 2 M_{k} } (Minimalrepräsentanten).'."\n".
                    'Aus der Kohärenz stabilisieren die Koeffizienten, also konvergiert \lm{ P_{k} } zu einem monischen \lm{ P \in \mathbb{Z}[x] \setminus \{ 0 \} }.'."\n".
                    'Da zugleich \lm{ P_{k}(\alpha) \rightarrow 0 }, folgt \lm{ P(\alpha) = 0 }; also ist \lm{ \alpha } algebraisch'."\n".
                    'und damit \lm{ \mathbb{A}_{\S} \subseteq \mathbb{A}_{\R} \Rightarrow \mathbb{A}_{\S} = \mathbb{A}_{\R} }.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Ziel (STV)', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Wir zeigen die \italic{Gegenrichtung} zur AKV:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \boxed{\;\;  \mathbb{A}_{\S}  \subseteq  \mathbb{A}_{\R}  \;\;}  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Zusammen mit der bereits \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{bewiesenen AKV-Richtung \lm{ \mathbb{A}_{\R} \subseteq \mathbb{A}_{\S} }} folgt dann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \boxed{\;\;  \mathbb{A}_{\S}  =  \mathbb{A}_{\R}  \;\;}  }'),
                    ))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Stehende Annahmen (SA) und Notation', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{\Z}  =  V_{s} \cap \bigcap_{p} V_{p}  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'erhalten wir den Quotientenkörper:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{\Q}  :=  \operatorname{Frac}*( \mathbb{S}_{\Z} *)  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Definiere die \italic{sinnvollen Koeffizienten} als ganze Superial-Zahlen rein mit belegter Eins-Schicht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  :=  *\{ \alpha \in \mathbb{R}_{\text{fin}}  *|*  \alpha \cdot \s \in \mathbb{S}_{\Z, *\{ 1 *\}} *\}  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Für ein Polynom'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( d = \operatorname{deg} P *) *[  P(x)  =  \sum_{i = 0}^{d} c_{i} \cdot x^{i}  \in  \mathbb{Z}[x]  *]  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'setze'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Phi_{P}(\alpha)  :=  P(\alpha) \cdot \s^{d}  \in  \mathbb{S}  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Fixiere nun \lm{ \alpha \in \mathbb{A}_{\S} } und setze'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  T  :=  \alpha \cdot \s  \in  \mathbb{S}_{\Z, *\{ 1 *\}}  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Dann kann man \lm{ \Phi_{P}(\alpha) } umschreiben zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Phi_{P}(\alpha)  =  \sum_{i = 0}^{d} c_{i} \cdot T^{i} \cdot \s^{d - i}  }',
                                          label_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:Equ-Phi-von-alpha-def-sum-c-T-s', label_text => '\name{OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:Equ-Phi-von-alpha-def-sum-c-T-s}', label_incr => true),
                    ))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Lemma 1 — Uniformer \lm{ p }-adischer „Schub“ aus \lm{ \s }', subline =>
                    '')),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Lemma (Uniforme \lm{ p }-Adik)', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Sei \lm{ \alpha \in \mathbb{A}_{\S} } und \lm{ P \in \mathbb{Z}[x] } mit \lm{ \operatorname{deg} P = d }.'."\n".
                    'Dann gilt für jede endliche Primzahl \lm{ p }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  v_{p}​(\Phi_{P}(\alpha))  \ge  d  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Insbesondere \lm{ \Phi_{P}(\alpha) \in p^{d} \mathbb{S}_{\Z} } und damit \lm{ \Phi_{P}(\alpha) \in \bigcap_{p} p^{d} \mathbb{S}_{\Z} }.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Beweis', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Aus Formel \jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:Equ-Phi-von-alpha-def-sum-c-T-s} folgt:'."\n".
                    'Jeder Summand \lm{ c_{i} \cdot T^{i} \cdot \s^{d - i} } hat wegen \lm{ p | \s } und \lm{ p | T } mindestens'."\n".
                    '\lm{p}-Bewertung \lm{ i + (d − i) = d }.'."\n".
                    'Also hat die Summe ebenfalls \lm{ v_{p} \ge d }. \lm{ \blacksquare }'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Konsequenz', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Um \lm{ v_{p}(\Phi_{P_{k}}(\alpha)) \ge k } simultan für alle \lm{ p } zu erzwingen, genügt schlicht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \operatorname{deg} P_{k}​  \ge  k  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    '(Keine „Feinabstimmung“ über \lm{ p }-adische Kongruenzen nötig.)'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Lemma 2 — Archimedisch kleine Werte mit Kongruenzvorgabe (Dirichlet–Siegel)', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Wir brauchen nun: \italic{zu vorgegebenen Restklassen der Koeffizienten} ein ganzzahliges Polynom, das bei \lm{ \alpha } \italic{sehr klein} wird.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Lemma (Dirichlet–Siegel mit Restklassen)', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Seien \lm{ \alpha \in \mathbb{R}_{\text{fin}} }, \lm{ d \ge 1 }, \lm{ M \ge  2 }, eine Restklasse'."\n".
                    '\lm{ \overline{C} = (\overline{c}_{0}, \cdots , \overline{c}_{d}) \in (\mathbb{Z} / M \mathbb{Z})^{d + 1} } und'."\n".
                    '\lm{ \epsilon > 0 } gegeben.'."\n".
                    'Dann existiert ein nichttriviales'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P(x)  =  \sum_{i = 0}^{d} c_{i} \cdot x^{i}  \in  \mathbb{Z}[x]  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c_{i}  \equiv  \overline{c}_{i} \; (\operatorname{mod} M)  }'),
                      array( display => 'on',  latex => '{  *| P(\alpha) |*  \le  \epsilon  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'für alle \lm{ i }.'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    '\italic{Zusatz:}'."\n".
                    'Man kann \italic{Monizität} erzwingen, indem man zusätzlich \lm{ c_{d} \equiv 1 \; (\operatorname{mod} M) }'."\n".
                    'fordert und \lm{ P } monisch wählt.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Lemma 3 — Kohärenz \lm{ \Rightarrow } stationäre Koeffizienten (profiniter Diagonalschritt)', subline =>
                    '')),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Lemma (Kohärente Folge \lm{ \Rightarrow } stationäre Koeffizienten)', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Sei \lm{ M_{1} | M_{2} | M_{3} | \cdots } mit \lm{ M_{k + 1} \ge 2 \! M_{k} }.'."\n",
                    'Sei \lm{ P_{k}(x) = \sum_{i = 0}^{d_{k}} c_{i}^{(k)} x^{i} \in \mathbb{Z}[x] } eine Folge mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P_{k + 1} ​  \equiv   P_{k} \; (\mathrm{mod} \, M_{k})  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'und „kleinsten Repräsentanten“'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| \, c_{i}^{(k)} |*   \le   \frac{ M_{k} }{ 2 }​​  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Dann wird für jedes feste \lm{ i } die Folge \lm{ c_{i}^{(k)} } \italic{stationär},'."\n".
                    'das heißt es existiert \lm{ c_{i} \in \mathbb{Z} } mit \lm{ c_{i}^{(k)} = c_{i} } für alle großen \lm{ k }.'."\n".
                    'Insbesondere konvergiert \lm{ P_{k} } koeffizientenweise zu einem \lm{ P \in \mathbb{Z}[x] }.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Beweis', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Fixiere \lm{ i }.'."\n".
                    'Aus \lm{ c_{i}^{(k + 1)} ​\equiv c_{i}^{(k)} \; (\operatorname{mod} M_{k}) } folgt'."\n".
                    '\lm{ c_{i}^{(k + 1)} − c_{i}^{(k)} = t_{k} \cdot M_{k} } mit \lm{ t_{k} \in \mathbb{Z} }.'."\n".
                    'Wegen \lm{ *| \, c_{i}^{(k + 1)} − c_{i}^{(k)} |* \le *| \, c_{i}^{(k + 1)} |* + *| \, c_{i}^{(k)} |* \le M_{k} } ist \lm{ t_{k} \in \{ −1, 0, 1 \} }.'."\n".
                    'Mit \lm{ *| \, c_{i}^{(k + 1)} |* \le M_{k + 1} / 2 } und \lm{ M_{k + 1} \ge 2 M_{k} }'."\n".
                    'folgt schließlich \lm{ t_{k} = 0 } für alle großen \lm{ k }. \lm{ \blacksquare }'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Hauptbeweis: \lm{ \mathbb{A}_{\S} \subseteq \mathbb{A}_{\R} }', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Sei \lm{ \alpha \in \mathbb{A}_{\S} }.'."\n".
                    'Wir konstruieren eine Folge \lm{ P_{k} \in \mathbb{Z}[x] } mit:'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    '\bold{(A)} \lm{ \operatorname{deg} P_{k} = d_{k} \ge k }.'."\n",
                    '\bold{(B)} \lm{ *| P_{k}(\alpha) |* \le 2^{−k} }.'."\n",
                    '\bold{(C)} \lm{ P_{k + 1} \equiv P_{k} \; (\operatorname{mod} M_{k}) } für eine Modulkette \lm{ M_{k + 1} \ge 2 M_{k} }.'."\n",
                    '\bold{(D)} Koeffizienten sind stets als kleinste Repräsentanten gewählt: \lm{ *| \, c_{i}^{(k)} |* \le M_{k} / 2 }.'."\n",
                    '\bold{(E)} \lm{ P_{k} } ist monisch.'."\n",
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Schritt 1 — Start', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Setze \lm{ M_{1} := 2 }.'."\n",
                    'Wende \bold{Lemma 2} (Dirichlet–Siegel mit Restklassen und Monizität) mit \lm{ d_{1} = 1 }, \lm{ \epsilon = \frac{ 1 }{ 2 } }'."\n".
                    'und der Restklasse \lm{ \overline{c}_{1} \equiv  1 \; (\operatorname{mod} 2) } an.'."\n",
                    'Erhalte ein monisches \lm{ P_{1} } mit \lm{ *| P_{1}(\alpha) |* \le \frac{ 1 }{ 2 } }'."\n".
                    'und wähle die Koeffizienten als kleinste Repräsentanten modulo \lm{ 2 }.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Schritt 2 — Induktionsschritt', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Angenommen, \lm{ P_{k} } und \lm{ M_{k} } sind konstruiert.'."\n",
                    'Wähle \lm{ M_{k + 1} } so, dass \lm{ M_{k} | M_{k + 1} } und \lm{ M_{k+1} \ge 2 M_{k} }.'."\n",
                    'Wähle \lm{ d_{k + 1} \ge k + 1 }.'."\n".
                    'Fixiere eine Restklasse \lm{ \overline{C} } modulo \lm{ M_{k + 1} }, die zugleich'."\n",
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        'die Kohärenz \lm{ P_{k + 1} \equiv P_{k} \; (\operatorname{mod} M_{k}) } sicherstellt, und',
                        'Monizität \lm{ c_{d_{k + 1}} \equiv 1 \; (\operatorname{mod} M_{k + 1}) } erzwingt.',
                    ))),

                  array( 'text', array( intent => '0em', text => array(
                    'Wende \bold{Lemma 2} mit \lm{ \epsilon = 2^{−(k+1)} } an und erhalte \lm{ P_{k + 1} } mit \bold{(B)}, \bold{(C)}, \bold{(E)}.'."\n".
                    'Wähle wieder die kleinsten Repräsentanten \bold{(D)}.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Schritt 3 — \lm{ p }-adische Seite „gratis“', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Aus \bold{(A)} und \bold{Lemma 1} folgt für jede endliche Primzahl \lm{ p }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  v_{p}(\Phi_{P_{k}}(\alpha))  \ge  d_{k}  \ge  k  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Also erfüllt jedes \lm{ P_{k} } simultan die gewünschte \lm{ p }-adische Hoch-Teilbarkeit.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Schritt 4 — Koeffizienten stabilisieren', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Aus \bold{(C)}, \bold{(D)} und \lm{ M_{k + 1} \ge 2 M_{k} } folgt mit \bold{Lemma 3}:'."\n",
                    '\lm{ P_{k} } konvergiert koeffizientenweise zu einem Polynom \lm{ P \in \mathbb{Z}[x] }.'."\n",
                    'Wegen \bold{(E)} ist \lm{ P } zudem \italic{monisch} und nichttrivial.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Schritt 5 — Grenzübergang: \lm{ P(\alpha) = 0 }', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Aus \bold{(B)} folgt \lm{ P_{k}(\alpha) \rightarrow 0 } im reellen Sinn.'."\n",
                    'Da die Koeffizienten von \lm{ P_{k} } für jedes feste \lm{ i } ab einem Index stabil sind,'."\n".
                    'ergibt sich (wie auf deiner Seite formuliert):'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P(\alpha)  =  \lim\limits_{ k \rightarrow \infty } P_{k}(\alpha)  =  0  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Damit existiert ein monisches \lm{ P \in \mathbb{Z}[x] \setminus *\{ 0 *\} } mit \lm{ P(\alpha) = 0 }.'."\n".
                    'Also ist \lm{ \alpha } \italic{reell algebraisch}, das heißt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \alpha  \in  \mathbb{A}_{\R}  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Damit ist gezeigt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \boxed{\;\;  \mathbb{A}_{\R}  \subseteq  \mathbb{A}_{\S}  \;\;}  \;\; . \;\; \blacksquare  }'),
                    ))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Schluss (STV + AKV \lm{ \Rightarrow } Vollständigkeit)', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Da bereits in AKV  \lm{ \mathbb{A}_{\R} \subseteq \mathbb{A}_{\S} } gezeigt ist, folgt insgesamt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \boxed{\;\;  \mathbb{A}_{\R}  =  \mathbb{A}_{\S}  \;\;}  \;\; .  }'),
                    ))),
                  /* array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>

                'Beweis über das superiale Kronecker-Kriterium (SKK)', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Über das superiale Kronecker-Kriterium nehmen wir nachfolgend den Beweis der Superialen-Transzendenz-Vermutung in Angriff.'."\n".
                    ''))),

                  ...$SupNum_g_paragraphList_Glossar,

                  ...$SupNum_g_paragraphList_Terminologie,

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Ansatz superiales Kronecker-Kriterium', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Unser Ansatz in Kurzform.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Die Idee in einem Satz', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Ein reeller Wert \lm{ \alpha } aus \lm{ \mathbb{A}_{\S} } ist genau dann algebraisch, wenn man zu jedem \lm{ k } ein ganzzahliges Polynom \lm{ P_{k} } findet,'."\n".
                    'das \lm{ \alpha } \bold{gleichzeitig} (i) in allen nichtarchimedischen Bewertungen „sehr teilbar“ macht und (ii) archimedisch „sehr klein“ auswertet'."\n".
                    '– und zwar so kohärent, dass die Folge \lm{ (P_{k}) } zu einem \bold{monischen} Grenzpolynom \lm{ P \in \mathbb{Z}[x] } mit \lm{ P(\alpha) = 0 } stabilisiert.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Was heißt das konkret?', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Für \lm{ \alpha \in \mathbb{A}_{\S} } betrachten wir \lm{ \Phi_{P}(\alpha) := P(\alpha) \s^{\mathrm{deg} P} \in \mathbb{S} }.'."\n".
                    'Das SKK fordert eine Folge \lm{ P_{k} \in \mathbb{Z}[x] } mit:'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{1. \lm{ p }-adische Seite (global, alle endlichen Primzahlen):} \\\\'."\n".
                    '\lm{ \mathrm{deg} P_{k} \ge k \Rightarrow } (wegen „\lm{ \s } trägt alle Primzahlen“)'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Phi_{P_{k}}(\alpha)  \in  p^{k} \mathbb{S}_{\Z}  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'fÜr \bold{alle} endlichen Primzahlen \lm{ p }.'."\n".
                    '(Das ist der „superiale Schub“: die Schichtverschiebung mit \lm{ \s^{\mathrm{deg} P_{k}} } erzwingt simultane hohe \lm{ p }-Adizität.)'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{2. archimedische Seite:} \\\\'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| P_{k}(\alpha) |* \le 2^{−k}  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'oder ähnlich streng \lm{e^{− C k} }.'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{3. Kohärenz und Monizität:} \\\\'."\n".
                    'Die \lm{ P_{k} } liegen in wachsend feinen Restklassen \lm{ P_{k + 1} \equiv P_{k} \; (\mathrm{mod} \, M_{k}) } (mit \lm{ M_{k + 1} \ge 2 M_{k} }) und sind monisch;'."\n".
                    'zudem wählen wir stets „kleinste Repräsentanten“ der Koeffizienten (Höhenkontrolle).'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Warum reicht das? (Mechanik des Beweises)', subline =>
                    '')),
                      
                  array( 'bulletlist', array( bullet_ary => array(
                        'Aus \bold{1)} folgt \lm{ \Phi_{P_{k}}(\alpha) \in \bigcap_{p} p^{k} \mathbb{S}_{\Z} } für alle \lm{ k } (stärkste nichtarchimedische Kleinschätzung).',
                        'Aus \bold{2)} folgt \lm{ P_{k}(\alpha) \rightarrow 0 } in der reellen Stelle.',
                        'Die Kohärenz aus \bold{3)} und die Höhenkontrolle erzwingt eine \bold{stationäre} Koeffizientenfolge (profiniter Diagonal-Schritt): \lm{ P_{k} \rightarrow P \in \mathbb{Z}[x] }, monisch.',
                        'Grenzübergang in \bold{2)} gibt \lm{ P(\alpha) = 0 \Rightarrow \alpha } ist algebraisch.',
                    ))),

                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Was unterscheidet das vom „klassischen“ Kronecker-Geist?', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Der klassische Kronecker-Gedanke sagt grob: „Globale Kleinheit/Integralität an allen Stellen ⇒ Algebraizität.“'."\n",
                    'Im superialen SKK kommt die nichtarchimedische Seite fast „gratis“ durch den \lm{ \s }-Vorrat (die Schichtverschiebung \lm{ \s^{\mathrm{deg} P} }'."\n".
                    'liefert simultan hohe \lm{ p }-Adizität für alle endlichen Primzahlen), während die archimedische Seite über Dirichlet/Siegel (Geometrie der Zahlen) gesteuert wird.'."\n".
                    'Die profinite Kohärenz sorgt schließlich dafür, dass die Kleinheiten nicht nur „näherungsweise“, sondern exakt in einer ganzzahligen Nullstelle münden.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Kurzformel', subline =>
                    '')),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \alpha  \in  \mathbb{A}_{\S}  \;\;\;  \text{ist algebraisch}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \exists P_{k}  \in  \mathbb{Z}[x]  \;\;\;  \text{monisch}  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Das bedeutet'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathrm{deg} P_{k}  \ge  k  }'),
                      array( display => 'on',  latex => '{  \Phi_{P_{k}}(\alpha)  \in  \bigcap_{p} p^{k} \mathbb{S}_{\Z}  }'),
                      array( display => 'on',  latex => '{  *| P_{k}(\alpha) |*  \le  2^{−k}  }'),
                      array( display => 'on',  latex => '{  P_{k + 1}  \equiv  P_{k} \;\; (\mathrm{mod} \, M_{k})  }'),
                      array( display => 'on',  latex => '{  M_{k + 1}  \ge  2 M_{k}  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'In Worten:'."\n".
                    'Gelingt es, \lm{ \alpha } durch eine kohärente Folge ganzzahliger Polynome zugleich überall \lm{ p }-adisch „verschwinden zu lassen“ und reell gegen \lm{ 0 } zu drücken, dann muss \lm{ \alpha } eine Nullstelle eines monischen ganzzahligen Polynoms sein.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Unser Vorgehen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Nun unser Vorgehen etwas ausführlicher geschildert.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Entsprechend unserer Algebraischen-Koeffizienten-Vermutung (AKV)', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Wir arbeiten mit \lm{ \mathbb{S}_{\Z} } als den ganzen Superial-Zahlen (endliche Stellensummen ohne negative \lm{ \s }-Potenzen, mit ganzzahliger Nullstelle),'."\n".
                    '\lm{ \mathbb{S} } als Erweiterung mit erlaubten negativen Stellen und \lm{ \mathbb{S}_{\Q} = \mathrm{Frac}(\mathbb{S}_{\Z}) }.'."\n".
                    'Sinnvolle Koeffizienten definieren wir 1-schichtig als \lm{ \mathbb{A}_{\S} = *\{ a \in \mathbb{R}_{\text{endlich}} *|* a \cdot \s \in \mathbb{S}_{\Z,\{ 1 \}} *\} }.'."\n".
                    'Jedes \lm{ X \in \mathbb{S}_{\Z} } zerfällt eindeutig in \lm{ X = s^{m} X^{(0)} } (s-Ordnung), und die endliche Primunterstützung liegt im \lm{ \s }-primitiven Teil.'."\n".
                    'Für jede endliche Primzahl \lm{ p } verwenden wir die Bewertung \lm{ v_{p} } mit Valuationsring \lm{ V_{p} = *\{ x *|* v_{p}(x) \ge 0 *\} \cup *\{ 0 *\} } (optional zusätzlich \lm{ V_{s} = *\{ x *|* \mathrm{ord⁡}_{\s}(x) \ge 0 *\} \cup *\{ 0 *\} }.'."\n".
                    'Damit erhalten wir die Schnittdarstellung \lm{ \mathbb{S}_{\Z} = \bigcap p V_{p} } (äquivalent \lm{ \mathbb{S}_{\Z} = V_{s} \cap \bigcap p V_{p} }) und folgern:'."\n".
                    '\lm{ \mathbb{S}_{\Z} } ist ganz abgeschlossen.'."\n".
                    'Das \bold{Ganzheitsargument} liefert sodann die \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:Equ-As-Teilmengegleich-Ar}{AKV-Richtung} \lm{ \mathbb{A}_{\R} \subseteq \mathbb{A}_{\S} }:'."\n".
                    'Für reell algebraisches \lm{ \alpha } ist \lm{ Y = \alpha \s } Nullstelle eines monischen Polynoms über \lm{ \mathbb{S}_{\Z} }, also \lm{ Y \in \mathbb{S}_{\Z} } und damit \lm{ \alpha \in \mathbb{A}_{\S} }.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Zusätzliche für den Beweis unsere Superialen-Transzendenz-Vermutung (STV)', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Für die Gegenrichtung (STV) beobachten wir heuristisch:'."\n".
                    'In einer \bold{limitfreien} Superial-Auswertung behalten transzendente Konstanten wie \lm{ \e }, \lm{ π }, \lm{ \ln 2 }, \lm{ ζ(2) } sichtbare  \lm{ s^{−k} }-Korrekturen, während rein algebraische Konstruktionen 1-schichtig bleiben.'."\n".
                    'Formal beweisen wir dies über das \bold{Superiale Kronecker-Kriterium}:'."\n".
                    'Aus \lm{ \alpha \in \mathbb{A}_{\S} } konstruieren wir Polynome \lm{ P_{k} \in \mathbb{Z}[x] } mit \lm{ \mathrm{deg} P_{k} \ge k } und \lm{ *| P_{k}(\alpha) |* \le 2^{−k} }, kohärent modulo wachsender Moduli \lm{ M_{k} }.'."\n".
                    'Der \lm{ p }-adische Teil kommt „gratis“ aus \lm{ \s }:'."\n".
                    '\lm{ \mathrm{deg} P_{k} \ge k \Rightarrow v_{p}(\Phi_{P_{k}}(\alpha)) \ge k } simultan für alle \lm{ p }.'."\n".
                    'Den archimedischen Teil liefert Dirichlet/Siegel (Geometrie der Zahlen\color{*Bearb}{(Verweis)}) mit vorgegebener Restklasse, und eine profinite Diagonalauswahl stabilisiert die Koeffizienten zu einem monischen Grenzpolynom \lm{ P \in \mathbb{Z}[x] } mit \lm{ P(\alpha) = 0 }.'."\n".
                    'Damit ist \lm{ \alpha } algebraisch, also \lm{ \mathbb{A}_{\S} \subseteq \mathbb{A}_{\R} }.'."\n".
                    'Zusammen mit AKV folgt schließlich die Gleichheit \lm{ \mathbb{A}_{\S} = \mathbb{A}_{\R} }.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Rahmen und Notation', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Wir setzen:'."\n".
                    ''))),
                      
                  array( 'bulletlist', array( bullet_ary => array(
                        '\lm{ \mathbb{S}_{\Z} = V_{s} \cap \bigcap p V_{p} } (Schnitt über \bold{alle endlichen Primzahlen} \lm{ p }); \lm{ \mathbb{S}_{\Q} = \mathrm{Frac}(\mathbb{S}_{\Z}) }).',
                        '\lm{ \s } „trägt alle Primzahlen“; in \lm{ \mathbb{S} } sind negative \lm{ \s }-Exponenten erlaubt, in \lm{ \mathbb{S}_{\Z} } nicht und die nullte Schicht darf nur ganzzahlig sein.',
                        '\lm{ \mathbb{A}_{\S} := *\{ a \in \mathbb{R}_{\text{endlich}} *|* a \cdot \s \in \mathbb{S}_{\Z,\{ 1 \}} *\} } (nur die Schicht \lm{ s^{1} } belegt).',
                        'Für \lm{ P(x) = \sum_{i = 0}^{d} c_{i} x_{i} \in \mathbb{Z}[x] } setzen wir',
                    ))),

                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Phi_{P}(\alpha)  :=  P(\alpha) \cdot \s^{d}  \in  \mathbb{S}  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Mit \lm{ T := \alpha \cdot \s \in \mathbb{S}_{\Z,\{ 1 \}} } gilt in \lm{ \mathbb{S} } auch'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Phi_{P}(\alpha)  =  \sum_{i = 0}^{d} c_{i} T^{i} \; \s^{d - i}  \;\; .  }'),
                    ))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Drei Schlüssellemmata', subline =>
                    '')),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  '1) \lm{ p }-adischer „Schub“ aus \lm{ s }', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Lemma – Uniforme \lm{ p }-Adik:} \\\\'."\n".
                    'Sei \lm{ \alpha \in \mathbb{A}_{\S} }.'."\n".
                    'Für \bold{jedes} \lm{ P \in \mathbb{Z}[x] } mit \lm{ \mathrm{deg} P = d } und \bold{jede} endliche Primzahl \lm{ p } gilt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  v_{p}​(\Phi_{P}(\alpha)) \ge d  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Insbesondere \lm{ \Phi_{P}(\alpha) \in p^{d} \mathbb{S}_{\Z} }, also \lm{ \Phi_{P}(\alpha) \in \bigcap_{p} p^{d} \mathbb{S}_{\Z} }.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    '\italic{Beweis:}'."\n".
                    'Schreibe \lm{ \Phi_{P}(\alpha) = \sum_{i = 0}^{d} c_{i} T^{i} \; \s^{d - i} } mit \lm{ T = \alpha \cdot \s \in \mathbb{S}_{\Z} }.'."\n".
                    'Da \lm{ p \mid \s } und \lm{ p \mid T } für \bold{alle} endlichen Primzahlen \lm{ p }, hat \bold{jeder} Summand \lm{ p }-Bewertung \lm{ \ge i \cdot 1 + ( d − i ) \cdot 1 = d }.'."\n".
                    'Die Summe erbt \lm{ v_{p} \ge d }. \lm{ \blacksquare }'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                        '\italic{Konsequenz:}'."\n".
                        'Für das p-adische Ziel \lm{ v_{p}(\Phi_{P_k}(\alpha)) \ge k } genügt schlicht \lm{ \mathrm{deg} P_k \ge k }.'."\n".
                        'Keine Feinabstimmung-Kongruenzen nötig.'."\n".
                        ''))),

                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  '2) Archimedisch kleine Werte mit vorgegebener Restklasse', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    '\italic{Hilfsnotation:}'."\n".
                    '\lm{ d \ge 1 } und \lm{ M \ge 2 } und eine Restklasse\footnote{\const{SupNum_g_footnote_text_Restklasse}} \lm{ \overline{C} = (\overline{c}_{0}, \cdots , \overline{c}_{d}) \in (\mathbb{Z} / M \mathbb{Z})^{d + 1} } wählen wir einen festen Vertreter \lm{ C^{0} = (c_{0}^{0}, \cdots , c_{d}^{0}) \in \mathbb{Z}^{d + 1} } mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c_{d}^{0}  =  1  }'),
                      array( display => 'on',  latex => '{  c_{i}^{0}  \equiv  \overline{c}_{i} \;\; (\mathrm{mod} \, M)  }',
                                               footnote => '\\const{SupNum_g_footnote_text_Kongruenz}'),
                      array( display => 'on',  latex => '{  *| \, c_{i}^{0} |*  \le  \frac{ M }{ 2 }  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Lemma – Dirichlet–Siegel mit Restklassen und Monizität:} \\\\'."\n".
                    'Sei \lm{ \alpha \in \mathbb{R}_{\text{endlich}} }, \lm{ d \ge 1 }, \lm{ M \ge 2 }, \lm{ \epsilon > 0 } und \lm{ \overline{C} } wie oben mit \lm{ \overline{c}_{d} \equiv 1 \; (\mathrm{mod} \, M) }.'."\n".
                    'Dann existiert ein \bold{monisches} \lm{ P(x) = \sum_{i = 0}^{d} c_{i} x^{i} \in \mathbb{Z}[x] } mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c_{i}  \equiv  \overline{c}_{i} \;\; (\mathrm{mod} \, M)  }'),
                      array( display => 'on',  latex => '{  c_{d}  =  1  }'),
                      array( display => 'on',  latex => '{  *| P(\alpha) |*  \le  \epsilon  \;\; ,  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'und Höhenkontrolle'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \max_{0 \le i \le d} *| c_{i} |*   \le   *| c_{i}^{0} |* + M H \;\; (0 \le i \le d - 1)  \;\; ,  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'wobei man \lm{ H } so wählen kann, dass'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  H   \le   C(d, \alpha) *( \frac{ M }{ \epsilon } *)^{\frac{ 1 }{ d }}​  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    '\italic{Beweis:} \\\\'."\n".
                    'Fixiere \lm{ C_{0} } wie oben und setze \lm{ m_{d} := 0 }.'."\n".
                    'Betrachte Vektoren \lm{ m = (m_{0}, \cdots ,m_{d − 1}) } mit \lm{ 0 \le m_{i} \le H } ganzzahlig.'."\n".
                    'Definiere'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c_{i}  :=  c_{i}^{0} + M m_{i} \;\; (0 \le i \le d − 1)  }'),
                      array( display => 'on',  latex => '{  c_{d}  :=  1  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'und'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P(x)  =  \sum_{i = 0}^{d} c_{i} x^{i}  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Dann \lm{ P \equiv \overline{C} \; (\mathrm{mod} \, M) } und \lm{ P } ist \bold{monisch}.'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Setze \lm{ L_{\alpha}(m) := \sum_{i = 0}^{d - 1} m_{i} \alpha^{i} }.'."\n".
                    'Die Menge \lm{ *\{ L_{\alpha}(m) *|* 0 \le m_{i} \le H *\} } hat \lm{ ( H + 1 )^{d} } Elemente und liegt in einem Intervall der Länge'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{    \le  H \sum_{i = 0}^{d − 1} *| \alpha |*^{i}   \le   H \cdot d \cdot \max *\{ 1, *| \alpha |*^{d − 1} *\}  =:  L  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Zerlege dieses Intervall in \lm{ ( H + 1 )^{d} } gleichlange Teilintervalle der Länge \lm{ \le L / ( H + 1 )^{d} \le C( d, \alpha ) / H^{d} }.'."\n".
                    'Wähle \lm{ m } so, dass'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| \, L_{\alpha}(m) + \frac{ 1 }{ M } \sum_{i = 0}^{d} c_{i}^{0} \alpha^{i} \, |*   \le   \frac{ C( d, \alpha ) }{ H^{d} }  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Dann'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| P(\alpha) |*  =  *| \, \sum_{i = 0}^{d} c_{i} \alpha^{i} \, |*   =   *| \, \sum_{i = 0}^{d} c_{i}^{0} \alpha^{i} + M L_{\alpha}(m) \, |*  \\\ \qquad\qquad\qquad\qquad\;\;   \le   M \frac{ C( d, \alpha ) }{ H^{d} }  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Wähle \lm{ H \ge *( C(d, \alpha ) M / \epsilon *)^{1 / d} }.'."\n".
                    'Damit \lm{ *| P(\alpha) |* \le \epsilon } und die Höhenabschätzung folgt aus der Definition von \lm{ c_{i} }. \lm{ \blacksquare }'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                        '\italic{Bemerkung (minimale Repräsentanten):}'."\n".
                        'Wählt man \lm{ m_{i} } zusätzlich so, dass \lm{ *| c_{i} |* \le M / 2 } stets gilt (durch geeignetes „Zentrieren“ der Box), erhält man die \italic{Minimalrepräsentanten} \lm{ *| c_{i} |* \le M / 2 }, was wir gleich für die Stabilisierung nutzen.'."\n".
                        ''))),

                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  '3) Stabilisierung von Koeffizienten (profiniter Diagonal-Schritt)', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Lemma – Kohärente Folge \lm{ \Rightarrow } stationäre Koeffizienten:} \\\\'."\n".
                    'Sei \lm{ M_{1} | M_{2} | M_{3} | \cdots } mit \lm{ M_{k + 1} \ge 2 M_{k} }.'."\n".
                    'Sei \lm{ P_{k}(x) = \sum_{i = 0}^{d_{k}} c_{i}^{(k)} x^{i} \in \mathbb{Z}[x] } eine Folge mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P_{k + 1} ​  \equiv   P_{k} \; (\mathrm{mod} \, M_{k})  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'und'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| \, c_{i}^{(k)} |*   \le   \frac{ M_{k} }{ 2 }​​  \;\;  ( 0 \le i \le d_{k} ​)  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Dann existieren Integers \lm{ c_{i} } (für alle \lm{ i \ge 0 }) mit \lm{ c_{i}^{(k)} = c_{i} } für alle genügend großen \lm{ k } (für jedes feste \lm{ i }).'."\n".
                    'Insbesondere konvergiert \lm{ P_{k} } koeffizientenweise zu einem \lm{ P \in \mathbb{Z}[x] }.'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    '\italic{Beweis:} \\\\'."\n".
                    'Fixiere \lm{ i }.'."\n".
                    'Aus \lm{ P_{k + 1} ​\equiv P_{k} \; (\mathrm{mod} \, M_{k}) } folgt \lm{ c_{i}^{(k + 1)} − c_{i}^{(k)} = t_{k} M_{k} } mit \lm{ t_{k} \in \mathbb{Z} }.'."\n".
                    'Wegen \lm{ *| c_{i}^{(k + 1)} − c_{i}^{(k)} |* \le *| c_{i}^{(k + 1)} |* + *| c_{i}^{(k)} |* \le M_{k + 1} / 2 + M_{k} / 2 \le M_{k + 1} − M_{k} } und \lm{ M_{k + 1} \ge 2 M_{k} } erzwingt dies \lm{ t_{k} \in \{ −1, 0, 1 \} }, ja sogar für große \lm{ k \cdot t_{k} = 0 }.'."\n".
                    'Also stationär. \lm{ \blacksquare }'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Hauptsatz und Beweis', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Satz – Superiales Kronecker-Kriterium:} \\\\'."\n".
                    'Sei \lm{ \alpha \in \mathbb{A}_{\S} }.'."\n".
                    'Dann existiert ein monisches \lm{ P \in \mathbb{Z}[x] \setminus \{ 0 \} } mit \lm{ P(\alpha) = 0 }.'."\n".
                    'In Verbindung mit \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{AKV} folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  =  \mathbb{A}_{\R}  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    '\italic{Beweis:} \\\\'."\n".
                    'Wir konstruieren induktiv \lm{ P_{k} \in \mathbb{Z}[x] } und Moduli \lm{ M_{k} } so, dass'."\n".
                    ''))),
                      
                  array( 'bulletlist', array( bullet_ary => array(
                        '\bold{(A)} \lm{ \mathrm{deg} P_{k} = d_{k} \ge k } (\lm{ p }-adischer Schub),',
                        '\bold{(B)} \lm{ *| P_{k}(\alpha) |* \le 2^{−k} } (archimedisch klein),',
                        '\bold{(C)} \lm{ P_{k + 1} \equiv P_{k} \; (\mathrm{mod} \, M_{k}) } (Kohärenz),',
                        '\bold{(D)} \lm{ \max_{i} *| \, c_{i}^{(k)} |* \le \frac{ M_{k} }{ 2 } } (minimale Repräsentanten),',
                        '\bold{(E)} \lm{ P_{k} } monisch.',
                    ))),

                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Start:} \\\\'."\n".
                    'Setze \lm{ M_{1} := 2 }.'."\n".
                    'Wende \condb{Lemma – Dirichlet–Siegel mit Restklassen und Monizität} mit \lm{ d_{1} = 1 }, \lm{ \epsilon = 1 / 2 }, Restklasse \lm{ \overline{C} } mit \lm{ \overline{c}_{1} \equiv 1 \; (\mathrm{mod} \, 2) } an.'."\n".
                    'Erhalte \bold{monisches} \lm{ P_{1} } mit \lm{ *| P_{1}(\alpha) |* \le 1 / 2 } und \bold{(D)}.'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Induktionsschritt \lm{ k \rightarrow k + 1 }:} \\\\'."\n".
                    'Wähle \lm{ M_{k + 1} := 2 M_{k} } (so \lm{ M_{k + 1} \ge 2 M_{k} } und \lm{ M_{k} \mid M_{k + 1} }).'."\n".
                    'Wähle einen Zielgrad \lm{ d_{k + 1} \ge k + 1 } und eine Restklasse \lm{ \overline{C}^{(k + 1)} \in (\mathbb{Z} / M^{k+1} \mathbb{Z})^{d_{k + 1} + 1} } mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \overline{C}^{(k + 1)} \equiv P_{k}​ \; (\mathrm{mod} \, M_{k}​)  }'),
                      array( display => 'on',  latex => '{  \overline{c}_{d_{k+1}}^{​(k + 1)}​ \equiv 1 \; (\mathrm{mod} \, M_{k + 1}​)  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Wende \condb{Lemma – Dirichlet–Siegel mit Restklassen und Monizität} mit \lm{ \epsilon = 2^{− (k + 1)} } an und nimm den eindeutigen Repräsentanten mit \lm{ *| \, c_{i}^{(k + 1)} |* \le M_{k + 1} / 2 }.'."\n".
                    'So erhalten wir \lm{ P_{k + 1} } mit \bold{(B)}, \bold{(C)}, \bold{(D)}, \bold{(E)}; \bold{(A)} ist per Wahl \lm{ d_{k + 1} \ge k + 1 } erfüllt.'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{\lm{ p }-adische Seite:} \\\\'."\n".
                    'Aus \bold{(A)} und \condb{Lemma – Uniforme \lm{ p }-Adik} folgt für \bold{alle} endlichen Primzahlen \lm{ p }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  v_{p}​(\Phi_{P}(\alpha)) \ge d_{k} \ge k  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Koeffizienten-Stabilität:} \\\\'."\n".
                    'Wegen \bold{(C)}, \bold{(D)} und \lm{ M_{k+1} \ge 2 M_{k} } liefert \condb{Lemma – Kohärente Folge \lm{ \Rightarrow } stationäre Koeffizienten} eine koeffizientenweise Konvergenz \lm{ P_{k} \rightarrow P \in \mathbb{Z}[x] } und \lm{ P } ist \bold{monisch} (per \bold{(E)}).'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Grenzübergang:} \\\\'."\n".
                    'Aus \bold{(B)} folgt \lm{ P(\alpha) = \mathrm{lim}⁡_{k} P_{k}(\alpha) = 0 }.'."\n".
                    'Damit existiert ein monisches \lm{ P \in \mathbb{Z}[x] \setminus \{ 0 \} } mit \lm{ P(\alpha) = 0 }.'."\n".
                    'Also \lm{ \alpha } algebraisch. \lm{ \blacksquare }'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Schluss:} \\\\'."\n".
                    'Da wir bereits (AKV) \lm{ \mathbb{A}_{\R} \subseteq \mathbb{A}_{\S} } bewiesen haben, liefert der Satz \lm{ \mathbb{A}_{\S} \subseteq \mathbb{A}_{\R} } und damit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \boxed{\;\; \mathbb{A}_{\S}  =  \mathbb{A}_{\R} \;\;}  \;\; .  }'),
                    ))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Zusammenfassung der Beweisschritte', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Wir lassen unsere gegangenen Beweisschritte noch einmal Revue passieren:'."\n".
                    ''))),
                      
                  array( 'bulletlist', array( bullet_ary => array(
                        'Nur die 1-Schicht-Definition \lm{ \mathbb{A}_{\S} = *\{ a \in \mathbb{R}_{\text{endlich}} *|* a \cdot \s \in \mathbb{S}_{\Z,\{ 1 \}} *\} } sowie „\lm{ \s } trägt alle endlichen Primzahlen“ gingen in \condb{Lemma – Uniforme \lm{ p }-Adik} ein.',
                        'Der archimedische Teil (\condb{Lemma – Dirichlet–Siegel mit Restklassen und Monizität}) ist reine Geometrie der Zahlen plus Restklassen-Fixierung; Monizität lässt sich über \lm{ \overline{c}_{d} \equiv 1 } erzwingen.',
                        'Die Stabilisierung (\condb{Lemma – Kohärente Folge \lm{ \Rightarrow } stationäre Koeffizienten}) nutzt allein \lm{ M_{k + 1} \ge 2 M_{k} } und Minimalrepräsentanten.',
                        'Der \lm{ p }-adische „Schub“ ist \bold{uniform}: \lm{ \mathrm{deg} P_{k} \ge k \Rightarrow v_{p}(\Phi_{P_{k}}(\alpha)) \ge k } simultan für alle \lm{ p }.',
                    ))), */

                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>

                'Fazit', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'So erreichen wir den Nachweis, dass der Übergang von der endlichen, nullten Schicht oder Stelle des Stellenwertsystems der Superial-Zahlen'."\n".
                    'zu zusätzlichen superialen Nachkommastellen, die nicht alle Null sind, – also durch das Hinzufügen von aktual unendlich kleinen Summanden zu endlichen reell algebraischen Zahlen –,'."\n".
                    'aus Perspektive der Superial-Zahlen,'."\n".
                    'tatsächlich auch dem Übergang von den reell algebraischen Zahlen zu den transzendenten Zahlen entspricht.'."\n",
                      'Daraus folgt dann auch'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  \subset  \mathbb{R}  }'),
                      array( display => 'on',  latex => '{  \mathbb{R}  \not\subset  \mathbb{A}_{\S}  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'wie bekannt.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Die Superial-Zahlen stellen die reellen Zahlen in ein neues Licht', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Die Veränderung unserer Perspektive von genereller Anwendung des Limes hin zu aktualer Unendlichkeit, wo dies möglich ist,'."\n".
                    'eröffnet auch eine neue Perspektive auf die reellen Zahlen \lm{ \mathbb{R} }, wie wir erkennen.'."\n",
                      'Dies ist die Perspektive der Superial-Zahlen und deren Erweiterungen,'."\n".
                    'in der die Definition der reellen Zahlen, in Form von superialen reellen Zahlen \lm{ \mathbb{R}_{\S} } oder \lm{ \mathbb{S}_{\R} }, dann zu überdenken ist.'."\n",
                      'Diese Sicht offenbart die tiefe Verbindung des Zählens und der endlichen Primzahlen mit dem Aktual-Unendlichen.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                  'Das Langlands-Programm', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Eben diese Verbindung des Zählens und der endlichen Primzahlen mit dem Aktual-Unendlichen'."\n".
                    'erhellt nicht nur die Grenzen zwischen den algebraischen Zahlen und den transzendenten Zahlen,'."\n".
                    'sondern lässt gleichzeitig auch eine tiefe Verbindung zwischen Geometrie, Algebra und Analysis erkennbar werden.'."\n",
                      'Wenn sich dies so bestätigt, sind die Superial-Zahlen ein wichtiger Baustein des Langlands-Programms\footnote{\const{SupNum_g_footnote_text_LanglandsProgramm}}.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:ZFC-Modellkonstruktion'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


          <!  • X Konsequenzen des Beweises zu den transzendenten Zahlen  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Superiale-Transzendenz-Vermutung:Konsequenzen-Beweis-transzendente-Zahlen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Parität}',
                    // '• Nicht nur gleiche Mächtigkeit von geraden und ungeraden Zahlen, sondern hier sogar gleiche kombinatorische Anzahl von geraden und ungeraden Zahlen.\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:ParitaetMathematik:2021}.}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wie schon im Kapitel \color{*Bearb}{Alle endlichen Indexmengen mit p-adischen Bewertungen aus rationalen Zahlen ergeben reell algebraische Zahlen (gelöscht, da verkehrt)} \hidden{\italic{›\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung:endliche-Indexmengen-p-a-Bewert-ergeben-reell-algebr-Zahlen}‹}}'."\n".
                    'gesagt, können wir tatsächlich jede endliche Indexmenge von \lm{ p }-adischen Bewertungen \lm{ \mathrm{v}_{\!p}(a) = q_{p} },'."\n".
                    'mit \lm{ q_{p} \in \mathbb{Q} \setminus *\{ 0 *\} }, wählen und erhalten eine reell algebraische Zahl:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall q_{p} \in \mathbb{Q} \setminus *\{ 0 *\} *)  *[  \mathrm{v}_{\!p}(a)  =  q_{p}  *]  }'),
                      array( display => 'on',  latex => '{  a  =  \pm \prod_{\substack{p \in \mathbb{P}}} p^{q_{p}}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a  \in  \mathbb{A}_{\R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies ist tatsächlich eine bidirektionale Abbildung, bis auf den Fall \lm{ a = 0 } und das Vorzeichen.'."\n",
                      'Und dies hat nun Konsequenzen für Exponenten endlich vieler Primzahlen \lm{ \iota_{p} } (\lm{ \iota } genannt Iota) die irrational reell algebraisch sind.'."\n".
                      'Wenn \lm{ \mathbb{I} } für die Menge der irrationalen Zahlen und \lm{ \mathbb{T} } für die Menge der transzendenten Zahlen steht:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{I}  =  \mathbb{R} \setminus \mathbb{Q}  }'),
                      array( display => 'on',  latex => '{  \mathbb{T}  =  \mathbb{R} \setminus \mathbb{A}_{\R}  }'),
                      array( display => 'on',  latex => '{  *( \forall \iota_{p} \in \mathbb{I} \setminus *\{ 0 *\} *)  *[  \mathrm{v}_{\!p}(\tau)  =  \iota_{p}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall \iota_{p} \in \mathbb{I} \setminus *\{ 0 *\} *) *( \#\!*\{ \iota_{p} *\} \in \mathbb{N}^{+} *)  *[  \tau  =  \pm \prod_{\substack{p \in \mathbb{P}}} p^{\iota_{p}}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \tau  \in  \mathbb{T}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Unser \lm{ \tau } (genannt Tau) ist also eine transzendente Zahl, wenn seine p-adische Bewertung (Primzahlbewertung)'."\n".
                    'in ihren Potenzen irrationale Zahlen besitzt.'."\n",
                      'Daher ist schon jede einzelne Primzahl mit irrationaler Potenz eine transzendente Zahl,'."\n".
                      'denn die Anzahl der Potenzen in der Indexmenge \lm{ \#\!*\{ \iota_{p} *\} } kann ja auch nur Eins sein:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *( \forall \iota \in \mathbb{I} \setminus *\{ 0 *\} *)  *[  \tau  =  \pm p^{\iota}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \tau  \in  \mathbb{T}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Frage ist nun, ist ein überrationaler Bruch einer Potenz in der Größenordnung \lm{ ω } kein aktual unendlicher ganzzahliger Bruch mehr?'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *( \forall \iota \in \mathbb{I} \setminus *\{ 0 *\} *)  *[  \frac{ a }{ b }  =  \frac{ p^{ω + \iota} }{ p^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  p^{ω}  \in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  \frac{ a }{ b }  \in  \mathbb{T}  }'),
                      array( display => 'on',  latex => '{  ?\Rightarrow  p^{ω + \iota}  \notin  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Bedingung, dass die reell algebraischen Zahlen die \italic{vollständigen} Koeffizienten der Superial-Zahlen sind,'."\n".
                    'impliziert, dass jede transzendente Zahl im Produkt mit \lm{ \s = \s^{1} } auch mindestens eine superiale Schicht kleiner als Eins'."\n".
                    'mit Koeffizienten ungleich Null belegen muss.'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists a_{-k} \neq 0 *) *( \forall k \in \mathbb{N} *)  *[  X  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:ZFC-Modellkonstruktion'),
                    )),
              )
          ); */ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
