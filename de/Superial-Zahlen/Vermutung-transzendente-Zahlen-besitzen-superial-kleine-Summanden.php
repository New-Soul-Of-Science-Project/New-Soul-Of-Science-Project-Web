<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen'); ?>

	
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
                    'So konnten wir bereits zeigen, dass sie alle \jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{sinnvolle Koeffizienten des Stellenwertsystems der Superial-Zahlen}'."\n".
                    'sind.'."\n".
                    'Ganz anders die transzendenten Zahlen.'."\n".
                    'Über sie ist im wesentlichen nur bekannt, dass sie alle Zahlen sind, die nicht zu den algebraischen gehören.'."\n".
                    'Ein zwar klares, aber auch recht allgemeines Kriterium, dass nicht viel über ihre Struktur aussagt.'."\n",
                      'Sollte die Vermutung stimmen, dass alle transzendenten Zahlen superial kleine Summanden enthalten, der sich dieses Kapitel widmet,'."\n".
                    'dann wären die reell algebraischen Zahlen die \italic{vollständigen sinnvollen Koeffizienten des Stellenwertsystems der Superial-Zahlen}.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden:Vortext:X', text =>
                      
                'Die transzendente eulersche Zahl \lm{ \e }', subline =>
                  'Eine transzendente Zahl durch die Lupe der Superial-Zahlen')),
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen wurden ja aus der Idee geboren mit ihren aktual unendlichen und infinitesimalen Größen'."\n".
                    '\jump{OM:SupNum:Ableitungen-Integrale}{Ableitungen und Integrale} zu Formulieren, anstatt mit dem Limes zu rechnen.'."\n".
                    'Dies ist uns gelungen, wodurch die Superial-Zahlen auch als Zahlentheorie der Analyses verstanden werden können.'."\n",
                      'Eine Fragestellung, die sich daraus ergibt ist:'."\n".
                    'Welche Funktion ist ihre eigene Ableitung oder ihre eigenes Integral?'."\n",
                      'Dies lässt sich \jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{aufgrund unseres entwickelten Formalismus} berechnen, wie wir in Formel'."\n".
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden:Vortext:X', text =>
                      
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden:Vortext:X', text =>
                      
                'Es ist eigentlich die Vermutung, dass die reell algebraischen Zahlen die vollständigen Koeffizienten der Superial-Zahlen sind', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wie kommen wir zu dem Wissen, dass die reell algebraischen Zahlen die vollständigen Koeffizienten der Superial-Zahlen sind?'."\n".
                    'Ist der Beweis der Vermutung, dass alle reell algebraischen Zahlen sinnvolle Koeffizienten der Superial-Zahlen sind'."\n".
                    'ebenfalls der Beweis ihrer Vollständigkeit?'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden:Vortext:X', text =>
                      
                'Beweis: Nicht-Einbettung jeder transzendenten Zahl in eine einzige Ebene der Superial-Zahlen', subline =>
                  'Die vollständigen Koeffizienten der Superial-Zahlen sind die reell algebraischen Zahlen')),

                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Erklärungs-Video}',
                    '• Negative reell algebraische Zahlen und die Null korrekt berücksichtigen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Unser Beweis stütz sich auf die \lm{ p }‑adische Argumentation, also auf die Idee, dass jede reelle Zahl \lm{ a \neq 0 } über'."\n".
                    'eine Zerlegung in ihre \lm{ p }‑adischen Bewertungen \lm{ \mathrm{v}_{\!p}(a) } zu beschreiben ist.'."\n".
                    'Bei einer algebraischen Zahl ist \lm{ *\{ \mathrm{v}_{\!p}(a) \neq 0 *\} } stets eine endliche Indexmenge'."\n".
                    '(nur endlich viele Primzahlen \lm{ p } haben von Null verschiedene Bewertungen), und jeder Index'."\n".
                    '\lm{ \mathrm{v}_{\!p}(a) \in \mathbb{Q} } ist rational.'."\n".
                    'Genau diese Eigenschaft „endlich viele, rationale \lm{ p }‑adische Bewertungen“\footnote{\const{SupNum_g_footnote_text_PadischeBewertung}}'."\n".
                    'ermöglicht es, dass \lm{ a } durch'."\n".
                    '\lm{ a \cdot \s } in die erste Ebene der ganzen Superial-Zahlen \lm{ \mathbb{S}_{\Z} } eingebettet wird.'."\n",
                      'Für transzendente Zahlen soll nun das Gegenteil gelten:'."\n".
                    'Sie können nicht alleine durch Multiplikation mit \lm{ \s } zu einer aktual unendlichen ganzen Superial-Zahl werden,'."\n".
                    'ohne eine niedrigere Schicht des superialen Stellenwertsystems mit einem Wert ungleich Null zu belegen.'."\n".
                    'Im Detail:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei die Grundlage für unseren folgenden Widerspruchsbeweis unser vorheriger'."\n".
                      '\jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{Beweis, dass alle reell algebraischen Zahlen sinnvolle Koeffizienten der Superial-Zahlen} sind.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\condb{Das \lm{ p }‑adische Grundprinzip} \\\\'."\n".
                      'Unser Beweis zu den \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvollen superialen Koeffizienten} geht folgendermaßen.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\cond{\lm{ p }‑adische Bewertung} \\\\'."\n".
                      'Für jede Primzahl \lm{ p } und jede \lm{ a \in \mathbb{R} \setminus *\{ 0 *\} } ist in der klassischen Zahlentheorie der'."\n".
                      '\italic{\lm{ p }‑adische Betrag} \lm{ *| a |*_{p} } beziehungsweise die \italic{\lm{ p }‑adische Bewertung}'."\n".
                      '\lm{ \mathrm{v}_{\!p}(a) } definiert.'."\n".
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
                      array( display => 'on',  latex => '{  a \cdot \s  =  \prod_{\substack{p \in \mathbb{P}}} p^{ω + \mathrm{v}_{p}(a)}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wobei \lm{ \mathrm{v}_{\!p}(a) } für (fast) alle \lm{ p } Null oder ein (endlicher) rationaler Wert ist.'."\n".
                      'Anders gesagt:'."\n".
                      'Jede Primzahl kommt in diesem Produkt unendlich oft vor, nur mit einem \italic{kleinen} rationalen Offset in der Exponentenhöhe.'."\n".
                      'Und nach dem \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Beweis der Überrationalitätsvermutung}'."\n".
                      'ist jeder Primzahlturm \lm{ p^{ω + \mathrm{v}_{p}(a)} } eine ganze Zahl, obwohl \lm{ ω + \mathrm{v}_{p}(a) } eine gebrochene Zahl sein kann,'."\n".
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
                      array( display => 'on',  latex => '{  a \cdot \s^{n}  =  \prod_{\substack{p \in \mathbb{P}}} p^{n \cdot ω + \mathrm{v}_{p}(a)}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'was genau in einer Schicht in \lm{ \mathbb{S}_{\Z} } liegt.'."\n".
                      'Also:'."\n".
                      '\lm{ a } ist ein \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvoller Koeffizient}.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Daraus folgt:'."\n".
                      'Alle reell algebraischen \lm{ a } werden durch \lm{ a \cdot \s^{n} } zu ganzen Superial-Zahlen.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\condb{Widerspruch für transzendente Zahlen} \\\\'."\n".
                      'Jetzt nehmen wir an (zum Ausschluss), es gäbe eine \lm{ \tau \in \mathbb{R} } \italic{transzendent}, die \italic{doch} durch ein'."\n".
                      '\lm{ a = \tau } und ein nichtnegatives \lm{ n } so in \lm{ \mathbb{S}_{\Z} } landet, also'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Tra', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \tau \cdot \s^{n}  =  \prod_{\substack{p \in \mathbb{P}}} p^{n \cdot ω + \delta_{p}}  \;\; .  }'),
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
                    'Den finden wir in der \jump{OM:SupNum:Struktur-Geometrie}{arithmetischen Struktur} der Geometrie, die uns wieder über den'."\n".
                    '\jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung und deren Beweis} zu einem neuen Verständnis'."\n".
                    'aktual unendlich feiner Raster und deren Zusammenhang mit irrationalen Wurzeln führt.'."\n",
                      'Erst dieses neue Verständnis der irrationalen Wurzeln und ihre überrationale Darstellung mittels aktual unendlich feiner Raster'."\n".
                    'ermöglicht uns schließlich'."\n".
                    '\jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{alle algebraischen Zahlen als auf diesem Raster liegend}'."\n".
                    'zu begreifen.'."\n".
                    'Was uns wiederum erkennen lässt, dass es sich bei den transzendenten Zahlen tatsächlich um echte superiale Zahlen oder,'."\n".
                    'wie im Fall der eulersche Zahl \lm{ \e_{\s} }, sogar noch um deren Erweiterungen handeln muss.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden:Vortext:X', text =>
                      
                'XXX', subline =>
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
                      'Wenn dem so ist, dann XXX:'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
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
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Home'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


          <!  • X  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen:X',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Parität}',
                    // '• Nicht nur gleiche Mächtigkeit von geraden und ungeraden Zahlen, sondern hier sogar gleiche kombinatorische Anzahl von geraden und ungeraden Zahlen.\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:ParitaetMathematik:2021}.}',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen:X'),
                    )),
              )
          ); */ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
