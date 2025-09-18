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
                  array( 'headline', array( jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                      
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                      
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                      
                'Es ist eigentlich die Vermutung, dass die reell algebraischen Zahlen die vollständigen Koeffizienten der Superial-Zahlen sind', subline =>
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>

                'Beweis über das superiale Kronecker-Kriterium (SKK)', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Über das superiale Kronecker-Kriterium nehmen wir nachfolgend den Beweis der Superialen-Transzendenz-Vermutung in Angriff.'."\n".
                    ''))),

                  ...$SupNum_g_paragraphList_Glossar,

                  ...$SupNum_g_paragraphList_Terminologie,

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  'Ansatz superiales Kronecker-Kriterium', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Unser Ansatz in Kurzform.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  'Die Idee in einem Satz', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Ein reeller Wert \lm{ \alpha } aus \lm{ \mathbb{A}_{\S} } ist genau dann algebraisch, wenn man zu jedem \lm{ k } ein ganzzahliges Polynom \lm{ P_{k} } findet,'."\n".
                    'das \lm{ \alpha } \bold{gleichzeitig} (i) in allen nichtarchimedischen Bewertungen „sehr teilbar“ macht und (ii) archimedisch „sehr klein“ auswertet'."\n".
                    '– und zwar so kohärent, dass die Folge \lm{ (P_{k}) } zu einem \bold{monischen} Grenzpolynom \lm{ P \in \mathbb{Z}[x] } mit \lm{ P(\alpha) = 0 } stabilisiert.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
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
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  'Warum reicht das? (Mechanik des Beweises)', subline =>
                    '')),
                      
                  array( 'bulletlist', array( bullet_ary => array(
                        'Aus \bold{1)} folgt \lm{ \Phi_{P_{k}}(\alpha) \in \bigcap_{p} p^{k} \mathbb{S}_{\Z} } für alle \lm{ k } (stärkste nichtarchimedische Kleinschätzung).',
                        'Aus \bold{2)} folgt \lm{ P_{k}(\alpha) \rightarrow 0 } in der reellen Stelle.',
                        'Die Kohärenz aus \bold{3)} und die Höhenkontrolle erzwingt eine \bold{stationäre} Koeffizientenfolge (profiniter Diagonal-Schritt): \lm{ P_{k} \rightarrow P \in \mathbb{Z}[x] }, monisch.',
                        'Grenzübergang in \bold{2)} gibt \lm{ P(\alpha) = 0 \Rightarrow \alpha } ist algebraisch.',
                    ))),

                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  'Was unterscheidet das vom „klassischen“ Kronecker-Geist?', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Der klassische Kronecker-Gedanke sagt grob: „Globale Kleinheit/Integralität an allen Stellen ⇒ Algebraizität.“'."\n",
                    'Im superialen SKK kommt die nichtarchimedische Seite fast „gratis“ durch den \lm{ \s }-Vorrat (die Schichtverschiebung \lm{ \s^{\mathrm{deg} P} }'."\n".
                    'liefert simultan hohe \lm{ p }-Adizität für alle endlichen Primzahlen), während die archimedische Seite über Dirichlet/Siegel (Geometrie der Zahlen) gesteuert wird.'."\n".
                    'Die profinite Kohärenz sorgt schließlich dafür, dass die Kleinheiten nicht nur „näherungsweise“, sondern exakt in einer ganzzahligen Nullstelle münden.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
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

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  'Unser Vorgehen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Nun unser Vorgehen etwas ausführlicher geschildert.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
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
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
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

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
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

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  'Drei Schlüssellemmata', subline =>
                    '')),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
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

                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  '2) Archimedisch kleine Werte mit vorgegebener Restklasse', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                    '\italic{Hilfsnotation:}'."\n".
                    '\lm{ d \ge 1 } und \lm{ M \ge 2 } und eine Restklasse \lm{ \overline{C} = (\overline{c}_{0}, \cdots , \overline{c}_{d}) \in (\mathbb{Z} / M \mathbb{Z})^{d + 1} } wählen wir einen festen Vertreter \lm{ C^{0} = (c_{0}^{0}, \cdots , c_{d}^{0}) \in \mathbb{Z}^{d + 1} } mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c_{d}^{0}  =  1  }'),
                      array( display => 'on',  latex => '{  c_{i}^{0}  \equiv  \overline{c}_{i} \;\; (\mathrm{mod} \, M)  }'),
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

                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  '3) Stabilisierung von Koeffizienten (profiniter Diagonal-Schritt)', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Lemma – Kohärente Folge \lm{ \Rightarrow } stationäre Koeffizienten:} \\\\'."\n".
                    'Sei \lm{ M_{1} | M_{2} | M_{3} | \cdots } mit \lm{ M_{k + 1} \ge 2 M_{k} }.'."\n".
                    'Sei \lm{ P_{k}(x) = \sum_{i = 0}^{d_{k}} c_{i}^{(k)} x^{i} \in \mathbb{Z}[x] } eine Folge mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P_{k + 1} ​ \equiv  P_{k} \; (\mathrm{mod} \, M_{k})  }'),
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

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
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

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
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
                    ))),

                  array( 'text', array( intent => '0em', text => array(
                    'So erreichen wir den Nachweis, dass der Übergang von der endlichen, nullten Schicht oder Stelle des Stellenwertsystems der Superial-Zahlen'."\n".
                    'zu zusätzlichen superialen Nachkommastellen, die nicht alle Null sind, – also durch das Hinzufügen von aktual unendlich kleinen Summanden zu endlichen reell algebraischen Zahlen –,'."\n".
                    'aus Perspektive der Superial-Zahlen,'."\n".
                    'tatsächlich dem Übergang von den reell algebraischen Zahlen zu den transzendenten Zahlen entspricht.'."\n".
                    ''))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X',
                Title => 'Beweisentwurf …',
                TitleVis => 'Beweisentwurf:', ParagraphList => array(

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  'Rahmen und Notation', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Wir setzen:'."\n".
                    ''))),
                      
                  array( 'bulletlist', array( bullet_ary => array(
                        '\lm{ \mathbb{S}_{\Z} = V_{s} \cap \bigcap p V_{p} } (Schnitt über \bold{alle endlichen Primzahlen} \lm{ p }); \lm{ \mathbb{S}_{\Q} = \mathrm{Frac}(\mathbb{S}_{\Z}) }).',
                        '\lm{ \s } „trägt alle Primzahlen“; in \lm{ \mathbb{S} } sind negative \lm{ \s }-Exponenten erlaubt, in \lm{ \mathbb{S}_{\Z} } nicht und die nullte Schicht darf nur ganzzahlig sein.',
                        '\lm{ \mathbb{A}_{\S} := *\{ a \in \mathbb{R} *|* a \cdot \s \in \mathbb{S}_{\Z,\{ 1 \}} *\} } (nur die Schicht \lm{ s^{1} } belegt).',
                        'Für \lm{ P(x) = \sum_{i = 0}^{d} c_{i} x_{i} \in \mathbb{Z}[x] } setze',
                    ))),

                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Phi_{P}(\alpha)  :=  P(\alpha) \cdot \s^{d}  \in  \mathbb{S}  \;\; .  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Schreibe \lm{ T := \alpha \cdot \s \in \mathbb{S}_{\Z,\{ 1 \}} }. Dann gilt in \lm{ \mathbb{S} } auch'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Phi_{P}(\alpha)  =  \sum_{i = 0}^{d} c_{i} T^{i} \; \s^{d - i}  \;\;  \text{(Summe ganzer Superial-Zahlen)}  \;\; .  }'),
                    ))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  '\lm{ p }-adischer „Schub“ aus der Schichtenstruktur', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Lemma – Schichten-bedingte \lm{ p }-Adik:} \\\\'."\n".
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
                    '\italic{Beweis (1 Zeile):}'."\n".
                    'Schreibe \lm{ \Phi_{P}(\alpha) = \sum_{i = 0}^{d} c_{i} T^{i} \; \s^{d - i} } mit \lm{ T = \alpha \cdot \s }.'."\n".
                    'Da \lm{ v_{p}(\s) \ge 1 } und \lm{ v_{p}(T) \ge 1 } für \bold{alle} \lm{ p }, hat \bold{jeder} Summand \lm{ p }-Bewertung \lm{ \ge i \cdot 1 + ( d − i ) \cdot 1 = d }; damit auch die Summe. \lm{ \blacksquare }'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                        '\italic{Konsequenz:}'."\n".
                        'Für das in SKK gebrauchte „\lm{ \Phi_{P_k}(\alpha) \in p^{k}\mathbb{S}_{\Z} } für alle \lm{ p }“ genügt schlicht \lm{ \mathrm{deg} P_k \ge k }.'."\n".
                        'Keine Koeffizienten-Feinabstimmung nötig.'."\n".
                        ''))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  'Archimedisch kleine Werte mit Kongruenzvorgabe', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Lemma – Dirichlet–Siegel mit Restklassen:} \\\\'."\n".
                    'Sei \lm{ \alpha \in \mathbb{R} \text{(endlich)} }, \lm{ d \ge 1 }, \lm{ M \ge 2 } ein Modul.'."\n".
                    'Für \bold{jede} vorgegebene Restklasse \lm{ \overline{C} = (\overline{c}_{0}, \cdots , \overline{c}_{d}) \in (\mathbb{Z} / M \mathbb{Z})^{d + 1} } und \bold{jedes} \lm{ \epsilon > 0 } existiert ein \bold{nichttriviales} \lm{ P(x) = \sum_{i = 0}^{d} c_{i} x^{i} \in \mathbb{Z}[x] } mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c_{i}  \equiv  \overline{c}_{i} \;\; (\mathrm{mod} \, M)  }'),
                      array( display => 'on',  latex => '{  *| P(\alpha) |*  \le  \epsilon  \;\; ,  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'und mit einer expliziten Höhenkontrolle \lm{ \mathrm{max}_{i} *| c_{i} |* \le H(d, M, \epsilon, \alpha) }.'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    '\italic{Beweisskizze:} \\\\'."\n",
                    'Betrachte das Gitter \lm{ \Lambda = *\{ c \in \mathbb{Z}^{d + 1} *|* c \equiv \overline{C} \; (\mathrm{mod} \, M) *\} } und die lineare Form \lm{ L_{\alpha}(c) = \sum_{i = 0}^{d} c_{i} \alpha^{i} }.'."\n".
                    'Wähle die Box'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathfrak{B}  =  *\{ c \in \mathbb{R}^{d + 1}  *|*  \Vert c \Vert_{\infty} \le  H *\}  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'und wende den \bold{Satz vom Schubfach}/die \bold{Geometrie der Zahlen} (Dirichlet/Minkowski) auf die Bilder \lm{ L_{\alpha}(\Lambda \cap \mathfrak{B}) } an:'."\n".
                    'Für \lm{ H } groß genug liegen zwei Gitterpunkte in einem Intervall der Länge \lm{ \epsilon }; ihre Differenz \lm{ c \in \Lambda \setminus *\{ 0 *\} } erfüllt die beiden Bedingungen.'."\n".
                    'Die explizite Schranke \lm{ H(\cdot) } ergibt sich aus den Volumina (Standard). \lm{ \blacksquare }'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                        '\italic{Zusatz (Monizität erzwingbar):}'."\n".
                        'Fügt man die Kongruenz \lm{ c_{d} \equiv 1 \;\; (\mathrm{mod} \, M) } hinzu und wählt hinterher den eindeutigen Vertreter mit \lm{ *| c_{d} |* \le M / 2 }, so ist für \lm{ M > 2 } bereits \lm{ c_{d} = 1 }.'."\n".
                        'Damit kann man monische \lm{ P } erzwingen.'."\n".
                        ''))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  'Profiniter „Diagonalschritt“ \lm{ = } Koeffizienten stabilisieren', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Lemma – Kohärente Kette \lm{ \Rightarrow } stationäre Koeffizienten:} \\\\'."\n".
                    'Sei \lm{ M_{1} | M_{2} | M_{3} | \cdots } mit \lm{ M_{k} \rightarrow \infty }.'."\n".
                    'Angenommen, es gibt eine Folge \lm{ P_{k}(x) = \sum_{i=0}^{d_{k}} c_{i}^{(k)} x^{i} \in \mathbb{Z}[x] } mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P_{k + 1}  \equiv  P_{k}​ \;\; (\mathrm{mod} \, M) \;\;\; \text{(koheränt)}  }'),
                      array( display => 'on',  latex => '{  \mathrm{max}_{i} *| c_{i}^{(k)} |*  \le  \frac{ 1 }{ 2 } M_{k}​ \;\;\; \text{(minimale Repräsentanten)}  }'),
                    ))),
                  array( 'text', array( intent => '0em', text => array(
                    'Dann existieren eindeutig bestimmte Integers \lm{ c_{i} } mit \lm{ c_{i}^{(k)} = c_{i} } für alle genügend großen \lm{ k } (für jedes feste \lm{ i }).'."\n".
                    'Mit anderen Worten:'."\n".
                    '\bold{alle Koeffizienten stabilisieren}; die Folge \lm{ (P_{k}) } konvergiert zu einem echten ganzzahligen Polynom \lm{ P(x) = \sum_{i} c_{i} x^{i} }.'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    '\italic{Beweis:}'."\n".
                    'Fixiere \lm{ i }.'."\n".
                    'Aus \lm{ c_{i}^{(k + 1)} \equiv c_{i}^{(k)} \; (\mathrm{mod} \, M_{k}) } folgt \lm{ c_{i}^{(k + 1)} − c_{i}^{(k)} = t_{k} M_{k} } mit \lm{ t_{k} \in \mathbb{Z} }.'."\n".
                    'Wegen \lm{ *| c_{i}^{(k + 1)} − c_{i}^{(k)} |* \le *| c_{i}^{(k + 1)} |* + *| c_{i}^{(k)} |* \le M_{k} } muss \lm{ t_{k} \in \{ −1, 0, 1 \} }.'."\n".
                    'Doch \lm{ *| c_{i}^{(k + 1)} |* \le M_{k + 1} / 2 } und \lm{ M_{k + 1} \ge 2 M_{k} } (ggf. Modulkette so gewählt) erzwingen \lm{ t_{k} = 0 } für alle großen \lm{ k }.'."\n".
                    'Also stationär. \lm{ \blacksquare }'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                  'Satz und Reduktion', subline =>
                    '')),
                  array( 'text', array( intent => '0em', text => array(
                  '\bold{Satz – Superiales Kronecker-Kriterium:} \\\\'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X',
                Title => 'Alter, verkehrter Ansatz rein über \lm{ p }-adische Bewertungen …',
                TitleVis => 'Alter, verkehrter Ansatz rein über \lm{ p }-adische Bewertungen:', ParagraphList => array(

                  array( 'headline', array( jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>

                'Beweis: Nicht-Einbettung jeder transzendenten Zahl in eine einzige Ebene der Superial-Zahlen', subline =>
                  'Die vollständigen sinnvollen Koeffizienten sind die reell algebraischen Zahlen')),

                  /* array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Erklärungs-Video}',
                    '• Negative reell algebraische Zahlen und die Null korrekt berücksichtigen.',
                    '• Hier ist noch wichtig, dass  \lm{ p^{ω + \mathrm{v}_{\!p}(a)} } nur dann eine ganze Zahl sein darf (Beweis), wenn \lm{ \mathrm{v}_{\!p}(a) \in \mathbb{Q} }.',
                    '– Wenn \lm{ \mathrm{v}_{\!p}(a) \in *( \mathbb{A}_{\R} \setminus \mathbb{Q} *) }, dann sollte \lm{ p^{ω + \mathrm{v}_{\!p}(a)} } keine ganze Zahl sein.',
                    ))), */
                      
                  array( 'text', array( text => array(
                    'Unser Beweis stütz sich auf die \lm{ p }‑adische Argumentation, also auf die Idee, dass jede reell algebraische Zahl \lm{ a \neq 0 } über'."\n".
                    'eine Zerlegung in ihre \lm{ p }‑adischen Bewertungen\footnote{\const{SupNum_g_footnote_text_PadischeBewertung}} \lm{ \mathrm{v}_{\!p}(a) } zu beschreiben ist.'."\n".
                    'Bei einer algebraischen Zahl ist \lm{ *\{ \mathrm{v}_{\!p}(a) \neq 0 *\} } stets eine endliche Indexmenge'."\n".
                    '(nur endlich viele Primzahlen \lm{ p } haben von Null verschiedene Bewertungen), und jeder Index'."\n".
                    '\lm{ \mathrm{v}_{\!p}(a) \in \mathbb{Q} } ist rational.'."\n".
                    'Genau diese Eigenschaft „endlich viele, rationale \lm{ p }‑adische Bewertungen“'."\n".
                    'ermöglicht es, dass \lm{ a } durch'."\n".
                    '\lm{ a \cdot \s } in die erste Schicht der ganzen Superial-Zahlen \lm{ \mathbb{S}_{\Z} } eingebettet wird.'."\n",
                      'Für transzendente Zahlen soll nun das Gegenteil gelten:'."\n".
                    'Sie können nicht alleine durch Multiplikation mit \lm{ \s } zu einer aktual unendlichen ganzen Superial-Zahl werden,'."\n".
                    'ohne eine niedrigere Schicht des superialen Stellenwertsystems mit einem Wert ungleich Null zu belegen.'."\n".
                    'Das bedeutet, sie sind keine sinnvollen Koeffizienten der Superial-Zahlen, sondern selber Superial-Zahlen mit aktual unendlich kleinen Summanden.'."\n",
                      'Im Detail:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei die Grundlage für unseren folgenden Widerspruchsbeweis unser vorheriger'."\n".
                      '\jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{Beweis, dass alle reell algebraischen Zahlen sinnvolle Koeffizienten der Superial-Zahlen} sind.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\condb{Das \lm{ p }‑adische Grundprinzip} \\\\'."\n".
                      'Unser Beweis zu den \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen superialen Koeffizienten} geht folgendermaßen.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\cond{\lm{ p }‑adische Bewertung} \\\\'."\n".
                      'Für jede Primzahl \lm{ p } und jede reell algebraische Zahl \lm{ a \in \mathbb{A}_{\R} } ist in der klassischen Zahlentheorie der'."\n".
                      '\italic{\lm{ p }‑adische Betrag} \lm{ *| a |*_{p} } beziehungsweise für jede \lm{ a \in \mathbb{A}_{\R} \setminus *\{ 0 *\} }'."\n".
                      'die \italic{\lm{ p }‑adische Bewertung} \lm{ \mathrm{v}_{\!p}(a) \in \mathbb{Q} } definiert.'."\n".
                      'Grob gesagt misst \lm{ \mathrm{v}_{\!p}(a) } \italic{wie oft} \lm{ p } als Faktor in \lm{ a } steckt.'."\n".
                      'Etwa:'."\n".
                      ''))),

                  array( 'bulletlist', array( Shape  => 'derivation', bullet_ary => array(
                        'Wenn \lm{ a = p^{\delta_{p}} \times \,} (ein \lm{ p }‑adisch invertierbares Element), dann ist \lm{ \mathrm{v}_{\!p}(a) = \delta_{p} }.',
                        'Für reell algebraische \lm{ a } ist \lm{ \mathrm{v}_{\!p}(a) } eine \italic{endliche} rationale Zahl'."\n".
                          '(positiv, negativ oder Null), und nur finit viele \lm{ p } tragen tatsächlich bei (\lm{ \mathrm{v}_{\!p}(a) \neq 0 }).',
                    ))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\cond{Interpretation im Superial-System} \\\\'."\n".
                      'Die Basis \lm{ \s } enthält pro Primzahl \lm{ p } \lm{ ω }-viele Faktoren (exponentiell):'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  \prod_{\substack{p \in \mathbb{P}}} p^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\const{SupNum_g_text_ZFCkonform}'."\n",
                        'Eine unendlich große ganze Superial-Zahl in \lm{ \mathbb{S}_{\Z} } hat \lm{ ω }-viele Faktoren pro Primzahl'."\n".
                      '– eventuell plus eine endliche oder rationale Verschiebung.'."\n".
                      'Das heißt:'."\n".
                      'Jedes Produkt einer positiven reell algebraischen Zahl mit \lm{ \s } hat eine \italic{transfinite Primfaktorzerlegung} der Form'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a \cdot \s  =  \pm \prod_{\substack{p \in \mathbb{P}}} p^{ω + \mathrm{v}_{p}(a)}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wobei \lm{ \mathrm{v}_{\!p}(a) } für (fast) alle \lm{ p } Null oder ein (endlicher) rationaler Wert ist.'."\n".
                      'Anders gesagt:'."\n".
                      'Jede Primzahl kommt in diesem Produkt unendlich oft vor, nur mit einem \italic{kleinen} rationalen Offset in der Exponentenhöhe.'."\n".
                      'Und nach dem \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Beweis der Überrationalitätsvermutung},'."\n".
                      'zusammen mit dem Abschnitt \italic{›\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Ganzzahlige-Potenzen-der-Wurzeln}‹},'."\n".
                      'ist jeder Primzahlturm \lm{ p^{ω + \mathrm{v}_{p}(a)} } eine aktual unendliche ganze Zahl, wenn \lm{ \mathrm{v}_{p}(a) \in \mathbb{Q} }, obwohl \lm{ ω + \mathrm{v}_{p}(a) } eine gebrochene Zahl sein kann,'."\n".
                      'weil \lm{ ω } so groß ist, dass ein endlicher rationaler Summand daran nichts ändert.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\condb{Warum algebraische Zahlen „aufgesaugt“ werden können} \\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Für die höheren Schichten der ganzen Superial-Zahlen \lm{ \mathbb{S}_{\Z} } stellen sich die Verhältnisse wie folgt dar.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\cond{Satz} \\\\'."\n".
                      'Ist \lm{ a } algebraisch und nicht Null, dann existieren eine (endliche!) Menge von Primzahlen \lm{ p },'."\n".
                      'rationale Exponenten \lm{ \mathrm{v}_{\!p}(a) \neq 0 } und für alle anderen \lm{ p } gilt \lm{ \mathrm{v}_{\!p}(a) = 0 }. \\\\'."\n".
                      'Das ist letztlich eine Verallgemeinerung des Faktorsatzes für rationale Zahlen auf algebraische:'."\n".
                      'mittels Minimalpolynom und resultierender Faktorisierung kann man argumentieren, dass \lm{ a } sich \lm{ p }‑adisch nur „endlich oft“ auswirkt,'."\n".
                      'und die \lm{ p }‑adischen Bewertungen rational sind.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\cond{Einbettung in eine einzelne Schicht der ganzen Superial-Zahlen \lm{ \mathbb{S}_{\Z} } einer Potenz größer gleich Eins} \\\\'."\n".
                      'Nimmt man nun \lm{ a \cdot \s^{n} } (für \lm{ n \geq 1 }), also eine einzelne höhere Schicht der ganzen Superial-Zahlen,'."\n".
                      'dann ist die exponentielle \lm{ p }-Komponente'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathrm{v}_{\!p}(a \cdot \s^{n})  =  \mathrm{v}_{\!p}(a) + \mathrm{v}_{\!p}(\s^{n})  =  \mathrm{v}_{\!p}(a) + n \cdot ω \;  \;\; .  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Da ω „infinit groß“ ist, ist \lm{ n \cdot ω } unendlich; also hat man \lm{ n \cdot ω \, + } (noch etwas Rationales).'."\n".
                      'Das ergibt eine Darstellung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a \cdot \s^{n}  =  \pm \prod_{\substack{p \in \mathbb{P}}} p^{n \cdot ω + \mathrm{v}_{p}(a)}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'was genau in einer Schicht in \lm{ \mathbb{S}_{\Z} } liegt.'."\n".
                      'Also:'."\n".
                      '\lm{ a } ist ein \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvoller Koeffizient}.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Daraus folgt:'."\n".
                      'Alle reell algebraischen \lm{ a } werden durch \lm{ a \cdot \s^{n} } zu ganzen Superial-Zahlen.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\condb{Widerspruch für transzendente Zahlen} \\\\'."\n".
                      'Jetzt nehmen wir an (zum Ausschluss), es gäbe eine \lm{ \tau \in \mathbb{R} } \italic{transzendent}, die \italic{doch} durch ein'."\n".
                      '\lm{ a = \tau } (\lm{ \tau } genannt Tau) und ein nichtnegatives \lm{ n } so in \lm{ \mathbb{S}_{\Z} } landet, also'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \tau \cdot \s^{n}  =  \pm \prod_{\substack{p \in \mathbb{P}}} p^{n \cdot ω + \delta_{p}}  \;\; .  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Daraus bekäme man (formal) eine Primfaktorzerlegung von \lm{ \tau } indem man „dividiert“ durch \lm{ \s^{n} }.'."\n".
                      'Klassisch auf \lm{ p }‑adisch formuliert hieße das:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathrm{v}_{\!p}(\tau \cdot \s^{n})  =  \mathrm{v}_{\!p}(\tau) + \mathrm{v}_{\!p}(\s^{n})  =  \mathrm{v}_{\!p}(\tau) + n \cdot ω  }'),
                      array( display => 'on',  latex => '{  \mathrm{v}_{\!p}(\tau) + n \cdot ω  =  n \cdot ω + \delta_{p}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Somit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathrm{v}_{\!p}(\tau)  =  \delta_{p}  \;\;.  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Denn in unserer transfiniten Arithmetik von Exponenten müssten wir annehmen \lm{ \delta_{p} } sei rational,'."\n".
                      'und es gäbe nur endlich viele Primzahlen \lm{ p } mit \lm{ \delta_{p} \neq 0 }.'."\n".
                      ''))),
                      
                  array( 'text', array( Shape  => 'italic', intent => '0em', text => array(
                      'Das aber heißt, \lm{ \tau } hätte eine endliche, rationale \lm{ p }‑adische Bewertungsmenge \lm{ *\{ \delta_{p} *\} }.'."\n".
                      'In der klassischen (Standard-)Mathematik würde sie also \italic{algebraisch} sein, denn Transzendenz setzt voraus,'."\n".
                      'dass man kein solches „endliches Rational-Profil“ an \lm{ p }‑adischen Bewertungen findet,'."\n".
                      'das \lm{ \tau } in eine Polynomgleichung endlicher Ordnung zwingt.'."\n".
                      ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'So entstünde ein Widerspruch:'."\n".
                      ''))),

                  array( 'bulletlist', array( Shape  => 'derivation', bullet_ary => array(
                        '\lm{ \tau } wäre transzendent,',
                        '\lm{ \tau } hätte aber \lm{ p }‑adische Bewertungen \lm{ \delta_{p} \in \mathbb{Q} } nur für endlich viele \lm{ p },',
                        'was die typischen Argumente zur Algebraizität auslöst.',
                    ))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Damit ist klar, dass keine echt transzendente Zahl \lm{ \tau } durch bloßes Multiplizieren'."\n".
                      'mit \lm{ \s^{n} } wo (wo \lm{ n \geq 1 }) in \lm{ \mathbb{S}_{\Z} } eintreten kann.'."\n".
                      'Folglich ist \lm{ \tau } \italic{kein sinnvoller Koeffizient}, wenn wir die sinnvollen Koeffizienten'."\n".
                      'so definieren, dass sie via Multiplikation mit einer (positiven) Potenz \lm{ n } von \lm{ \s }'."\n".
                      'zu einer ganzen Superial-Zahl werden, die auch nur in der \lm{ n }-ten Schicht einen Wert ungleich Null erhält.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\condb{Schlussfolgerung} \\\\'."\n".
                      'Die \lm{ p }‑adische Argumentation läuft also so:'."\n".
                      ''))),

                  array( 'bulletlist', array( Shape  => 'derivation', bullet_ary => array(
                        'Für algebraische Zahlen \lm{ a \neq 0 } existiert eine endliche Indexmenge relevanter \lm{ p }, der \lm{ \mathrm{v}_{\!p}(a) \neq 0 }.'."\n".
                          'Jeder \lm{ \mathrm{v}_{\!p}(a) } ist rational.'."\n".
                          'Dann ist \lm{ a \cdot \s^{n} } in \lm{ \mathbb{S}_{\Z} }.'."\n",
                        'Für transzendente Zahlen \lm{ \tau } kann \lm{ \tau \cdot \s^{n} } \italic{keinesfalls} in \lm{ \mathbb{S}_{\Z} } liegen,'."\n".
                          'da man sonst eine endliche Primfaktorzerlegung mit rationalen Exponenten konstruieren könnte (aus'."\n".
                          '\lm{ \mathrm{v}_{\!p}(\tau) = \delta_{p} }), was \lm{ \tau } zurück in eine algebraische Zahl verwandeln würde – ein Widerspruch.'."\n",
                    ))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Diese \lm{ p }‑adische Sicht bildet damit genau das Fundament für:'."\n".
                      ''))),
                      
                  array( 'text', array( Shape  => 'italic', intent => '0em', text => array(
                      '\bold{Alle und nur reell algebraische Zahlen} sind in der Lage, durch Multiplikation mit einer'."\n".
                      '\italic{nichtnegativen} Potenz von \lm{ \s } in eine einzige aktual unendliche Schicht der ganzen Zahlen \lm{ \mathbb{S}_{\Z} }'."\n".
                      'der Superial-Zahlen überzugehen.'."\n".
                      ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Damit ist die transzendente Zahl \lm{ \tau } als sinnvoller Koeffizient \italic{ausgeschlossen}.'."\n".
                      'Sobald man \lm{ \tau } \italic{doch} im superialen Stellenwertsystem repräsentieren will, muss man auf negative Potenzen zurückgreifen.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir sehen auch hier wieder, dass die Superial-Zahlen in der Zahlentheorie eine außergewöhnliche Bedeutung haben.'."\n",
                      'Sie fungieren als Lupe, die uns erlaubt in tiefe aktual unendliche Feinstrukturen der reellen Zahlen hineinzublicken.'."\n".
                    'Wodurch sie unser Verständnis der algebraischen Zahlen weiter erhellen und besonders auch zum weiteren Verständnis'."\n".
                    'der transzendenten Zahlen beitragen, siehe die Abgrenzung zwischen algebraischen und transzendenten Zahlen'."\n".
                    'und konkret die eulersche Zahl \lm{ \e_{\s} }, und sicher noch weiter beitragen werden.'."\n".
                    'Denn sie geben uns einen intuitiv nachvollziehbaren Grund dafür, warum dies alles so ist.'."\n".
                    'Den finden wir in der \jump{OM:SupNum:Arithmetische-Struktur-Geometrie}{arithmetischen Struktur} der Geometrie, die uns wieder über den'."\n".
                    '\jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung und deren Beweis} zu einem neuen Verständnis'."\n".
                    'aktual unendlich feiner Raster und deren Zusammenhang mit irrationalen Wurzeln führt.'."\n",
                      'Erst dieses neue Verständnis der irrationalen Wurzeln und ihre überrationale Darstellung mittels aktual unendlich feiner Raster'."\n".
                    'ermöglicht uns schließlich'."\n".
                    '\jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{alle algebraischen Zahlen als auf diesem Raster liegend}'."\n".
                    'zu begreifen.'."\n".
                    'Was uns wiederum erkennen lässt, dass es sich bei den transzendenten Zahlen tatsächlich um echte superiale Zahlen oder,'."\n".
                    'wie im Fall der eulersche Zahl \lm{ \e_{\s} }, sogar noch um deren Erweiterungen handeln muss.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:X', text =>
                      
                'X', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n",
                      'Wenn transzendente Zahlen superial kleine Summanden besitzen, dann sind es zum Beispiel Zahlen der Form:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a_{0} \in \mathbb{A}_{\S}^{0+} *) *( \forall a_{-1} \in \mathbb{A}_{\S}^{+} *)  *[  0  <  *〈 a_{0} *〉.*〈 a_{-1} *〉  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 a_{0} *〉.*〈 a_{-1} *〉  :\in  \mathbb{R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Sie müssten demnach folglich Elemente der Menge der reellen Zahlen \lm{ \mathbb{R} } sein.'."\n",
                      'Wenn dem so ist, dann X:'."\n",
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{N} *)  *[  n  <  \s  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall r \in \mathbb{R} *)  *( \exists n \in \mathbb{N} *)  *[  r  <  n  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall r \in \mathbb{R} *)  *[  - \s  <  r  <  \s  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall r \in \mathbb{R}^{+} *)  *[  0  <  \s^{-1}  <  r  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( k \in \mathbb{R} *)  *( \forall r \in \mathbb{R}^{+} *)  \\\ \qquad\qquad  *[  k - r  <  k - \s^{-1}  \\\ \qquad\qquad\qquad\qquad  <  k  <  k + \s^{-1}  <  k + r  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                    ))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung:Konsequenzen-Beweis-transzendente-Zahlen'),
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
                      array( display => 'on',  latex => '{  *( \exists a_{-k} \neq 0 *) *( \forall k \in \mathbb{N} *)  *[  XXX  *]  }'),
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
