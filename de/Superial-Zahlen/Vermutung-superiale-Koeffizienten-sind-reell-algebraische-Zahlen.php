<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Ueberrationalitaetsvermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Verbesserungen der Seite}',
                    // '• Nach dem Beweis der \italic{\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}} die Menge der Koeffizienten der Superial-Zahlen von den rationalen Zahlen \lm{ \mathbb{Q} } zu den algebraischen Koeffizienten \lm{ \mathbb{A}_{\S} } ändern.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Beweis unserer Überrationalitätsvermutung}, das Zeigen,'."\n".
                    'dass auch alle damit sich ergebenden durch Radikale\footnote{\const{SupNum_g_footnote_text_DurchRadikaleDarAlgZ}} darstellbaren reell algebraischen Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
                    '\jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvolle Koeffizienten der Superial-Zahlen} sind,'."\n".
                    'und der Beginn des systematischen Herausarbeitens der \jump{OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden}{Struktur der transzendenten Zahlen},'."\n".
                    'aus Perspektive des Superial-Zahlensystems,'."\n".
                    'führt beinahe zwangsläufig zu dem Eindruck, dass alle reell algebraischen Zahlen sinnvolle Koeffizienten der Superial-Zahlen sein sollten.'."\n",
                      'Ein möglicher Ansatz, dies zu Beweisen, stützt sich darauf, die klassische \lm{ p }‑adische Sichtweise\footnote{\const{SupNum_g_footnote_text_PadischeZahl}} auf reell algebraische Zahlen zu nutzen und diese global zu vereinen.'."\n".
                    'Konkret könnte man folgendermaßen vorgehen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\bold{p‑adische Bewertungen nutzen:} \\\\ Für jede Primzahl \lm{ p } hat jede reell algebraische Zahl \lm{ a } eine wohldefinierte \lm{ p }‑adische Bewertung\footnote{\const{SupNum_g_footnote_text_PadischeBewertung}} \lm{ \mathrm{v}_{\!p}(a) } (der – bei Nicht-Null – eine endliche ganze Zahl ist). Diese Bewertungen geben an, wie oft \lm{ p } in \lm{ a } vorkommt, also ihre Potenz.',
                        '\bold{Globale transfinite Darstellung:} \\\\ Man versucht, \lm{ a } als ein Produkt über alle Primzahlen zu schreiben, in einem klassischen Sinn. Daraus formulieren wir einen überrationalen Bruch mit transfinitem oder aktual unendlichem ganzzahligen Zähler und Nenner, wie im Beweis der Überrationalitätsvermutung.',
                    ))),
                  array( 'text', array( text => array(
                    'Wäre dieser Ansatz erfolgreich, so ließe sich – basierend auf den \lm{ p }‑adischen Eigenschaften – zeigen, dass nicht nur die durch Radikale darstellbaren,'."\n".
                    'sondern alle reell algebraischen Zahlen in unser Superial-Zahlensystem eingebettet werden können.'."\n".
                    'Das wäre ein eleganter Beweis dafür, dass der Koeffizientenbereich \lm{ \mathbb{A}_{\S} } wesentlich umfassender ist als zunächst vermutet.'."\n",
                      'Diese Idee verbindet klassische algebraische Methoden (\lm{ p }‑adische Bewertungen, Primfaktorzerlegung\footnote{\const{SupNum_g_footnote_text_Primfaktorzerlegung}}'."\n".
                    'mit der neuen transfiniten oder aktual unendlichen Struktur der Superial-Zahlen und erscheint als vielversprechender Ansatz, um die Frage systematisch anzugehen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen:Vortext:X', text =>
                      
                'Beweis: Einbettung reell algebraischer Zahlen in das System der Superial-Zahlen', subline =>
                  '')),

                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Erklärungs-Video}',
                    // '• Negative reell algebraische Zahlen und die Null korrekt berücksichtigen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wir versuchen einen Beweisansatz – unter der Annahme, dass wir in unserem Superial-System eine transfinite Exponentenarithmetik definieren,'."\n".
                    'in der ein endlicher Offset zu \lm{ ω } (also \lm{ ω + q } mit \lm{ q \in \mathbb{ℚ} } und \lm{ q \neq 0 }) als von \lm{ ω } verschieden erkannt wird.'."\n".
                    'Dann gilt:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei \lm{ a \neq 0 } eine reell algebraische Zahl, also \lm{ a \in \mathbb{A}_{\R} \setminus *\{ 0 *\} }.'."\n".
                      'Für jede Primzahl \lm{ p } existiert die \lm{ p }-adische Bewertung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathrm{v}_{\!p}(a)  \in  \mathbb{Q}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'sodass klassisch'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a  =  \pm \prod_{\substack{p \in \mathbb{P}}} p^{\mathrm{v}_{p}(a)}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wobei für fast alle Primzahlen \lm{ p } gilt \lm{ \mathrm{v}_{\!p}(a) = 0 }.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Wir definieren in unserem erweiterten transfiniten System für jede Primzahl \lm{ p } den \italic{transfiniten Exponenten}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathrm{V}_{\!p}(a)  :=  ω + \mathrm{v}_{\!p}(a)  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wobei \lm{ ω } ein transfiniter Wert ist und nach unseren Axiomen gilt, dass für jedes \lm{ q \in \mathbb{Q} \setminus *\{ 0 *\} }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω + q  :\neq  ω  \;\; .  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-omega-plus-q-ungleich-omega}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Nun definieren wir den aufgeladenen Term'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathrm{P}(a)  :=  \pm \prod_{\substack{p \in \mathbb{P}}} p^{\!\mathrm{V}_{\!p}(a)}  =  \pm \prod_{\substack{p \in \mathbb{P}}} p^{ω + \mathrm{v}_{p}(a)}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'sowie das Basiselement, wie bereits aus Formel \jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega} bekannt,'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  \prod_{\substack{p \in \mathbb{P}}} p^{ω}  \;\; .  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\const{SupNum_g_text_ZFCkonform}'."\n",
                        'Beachte, dass in \lm{ \s } für jede Primzahl \lm{ p } exakt der Exponent \lm{ ω } auftritt.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Dann folgt'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ \mathrm{P}(a) }{ \s }  =  \frac{ \pm \prod_{\substack{p \in \mathbb{P}}} p^{ω + \mathrm{v}_{p}(a)} }{ \prod_{\substack{p \in \mathbb{P}}} p^{ω} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ \mathrm{P}(a) }{ \s }  =  \pm \prod_{\substack{p \in \mathbb{P}}} p^{*( ω + \mathrm{v}_{p}(a) - ω *)}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ \mathrm{P}(a) }{ \s }  =  \pm \prod_{\substack{p \in \mathbb{P}}} p^{\mathrm{v}_{p}(a)}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ \mathrm{P}(a) }{ \s }  =  a  \;\; .  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Das bedeutet, wir können schreiben'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  a \cdot \s  =  \mathrm{P}(a)  \;\; .  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Da \lm{ \mathrm{P}(a) } in unserem System für jede relevante Primzahl \lm{ p } den Exponenten \lm{ ω + \mathrm{v}_{\!p}(a) } trägt,'."\n".
                      'ist \lm{ \mathrm{P}(a) } in jeder Komponente „aktual unendlich teilbar“ und gehört somit zu den ganzen Superial-Zahlen \lm{ \mathbb{S}_{\Z} }.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Daraus folgt, dass'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a \cdot s  \in  \mathbb{S}_{\Z}  \;\; .  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Mit anderen Worten:'."\n".
                      'Jede reell algebraische Zahl \lm{ a } kann in das Superial-Zahlensystem eingebettet werden, indem man sie mit \lm{ \s } multipliziert.'."\n".
                      'Und wir sehen auch, dass \lm{ a } nicht die Größenordnung von \lm{ \s } verändert, weil \lm{ a } reell algebraisch und damit endlich ist.'."\n".
                      'Damit sind alle \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{notwendigen Kriterien für sinnvolle Koeffizienten der Superial-Zahlen} erfüllt.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                    '\condb{Schlussfolgerung:} \\\\'."\n".
                      'Unter der Annahme, dass in unserem erweiterten System \lm{ ω + q \neq ω } für \lm{ q \neq 0 } gilt,'."\n".
                      'besitzt jede reell algebraische Zahl \lm{ a } die transfinite Darstellung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \boxed{\;\;  a = \frac{ \displaystyle \pm \prod_{\substack{p \in \mathbb{P}}} p^{ω + \mathrm{v}_{p}(a)} }{ \displaystyle \prod_{\substack{p \in \mathbb{P}}} p^{ω} }  \;\;}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'woraus unmittelbar folgt, dass \lm{ a \cdot s \in \mathbb{S}_{\Z} } wahr ist.'."\n".
                      'Somit sind alle reell algebraischen Zahlen als sinnvolle Koeffizienten der Superial-Zahlen in diese eingebettet und wir finden,'."\n".
                      'dass die Menge \lm{ \mathbb{A}_{\S} } der sinnvollen Koeffizienten der Superial-Zahlen gleich der Menge aller reell algebraischen Zahlen \lm{ \mathbb{A}_{\R} } ist'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \boxed{\;\;  \mathbb{A}_{\S}  =  \mathbb{A}_{\R}  \;\;}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'was zu beweisen war.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Abermals wird deutlich, welche grundsätzliche Bedeutung die Superial-Zahlen für die Zahlentheorie haben;'."\n".
                    'wie tief sie mit den Grenzen der Zahlenmengen verbunden sind.'."\n".
                    ''))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen:Vortext:X',
                Title => 'Alter Ansatz mit elliptischen Integralen …',
                TitleVis => 'Alter Ansatz mit elliptischen Integralen:', ParagraphList => array(

                  array( 'text', array( text => array(
                  '\condb{Wurzeln aus Polynomen} \\\\'."\n".
                  '\cond{Elliptische Integrale und ähnliche algebraische Werte} \\\\'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n",
                      'Nach allem, was ich über algebraische Zahlen herausfinden kann, sind die realwertigen Lösungen'."\n".
                    'der Nullstellen von Polynomen entweder Radikale\color{*Bearb}{(Verweis)}, also durch bereits'."\n".
                    'oben betrachtete Wurzelausdrücke darstellbar, oder es sind elliptische Integrale\color{*Bearb}{(Verweis)},'."\n".
                    'für die Nullstellen von Polynomen 5. oder höheren Grades.\color{*Bearb}{(Verweis)}'."\n",
                      'Elliptische Integrale sind Integrale über Wurzeln aus Polynomen, also unendliche Summen'."\n".
                    'über Wurzeln aus Polynomen.'."\n".
                    'Da die Ausdrücke der Polynome jedes Summanden damit algebraische Radikale oder gegebenenfalls wieder endliche oder unendliche Summen'."\n".
                    'algebraischer Radikale sind, die gegen einen endlichen Wert konvergieren, bleiben es doch Summen algebraischer Radikale.'."\n",
                      'Summen algebraischer Radikale, ob endliche oder unendliche, die zu endlichen Werten konvergieren,'."\n".
                    'verhalten sich wie im vorstehenden Abschnitt \italic{\jumpname{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Summen-von-Wurzeln}}'."\n".
                    'beschrieben und sind damit im Produkt mit der superialen Basis \lm{ \s } natürliche Superial-Zahlen'."\n".
                    'die summiert wieder ebensolche ergeben.'."\n",
                      'Wie allgemein dies gilt, können wir an einem Beispiel beobachten.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Als Beispiel betrachten wir als erstes das allgemeine elliptische Integral der I. Art in der Jacobi-Form:\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:ElliptischeIntegrale:2024}, Vollständige elliptische Integrale, Definition der vollständigen elliptischen Integrale.}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( 0 < k < 1 *)  *[  \int_{0}^{1} {\frac { \mathrm{d} x }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } }}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Nach der Definition eines Integrals mit Superial-Zahlen als Summe, nach Kapitel \italic{\jumpname{OM:SupNum:Ableitungen-Integrale:Integration}},'."\n".
                      'entspricht dies:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall k \in \mathbb{A}_{\R} *) *( 0 < k < 1 *) \\\ \qquad\quad\;\;\;\,  *[  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { 1 }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } }} *〉  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Nehmen wir an, dass dieses Integral im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { 1 }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } }} *〉*) \cdot \s  ?\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Ausmultiplizieren'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { \s }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } }} *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { 1 }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } \cdot \frac{ 1 }{ \s } }} *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { 1 }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) \cdot \frac{ 1 }{ \s^{2} } } }} *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 \sqrt[-2]{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈  *( *( 1 - k^{2} x^{2} *) - x^{2} *( 1 - k^{2} x^{2} *) *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈  *( *( 1 - k^{2} x^{2} *) - *( x^{2} - k^{2} x^{4} *) *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( 1 - k^{2} x^{2} - x^{2} + k^{2} x^{4} *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( 1 - *( k^{2} - 1 *) x^{2} + k^{2} x^{4} *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( k^{2} x^{4} - *( k^{2} - 1 *) x^{2} + 1 *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  \;\;,  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( *( k^{2} x^{4} - *( k^{2} - 1 *) x^{2} + 1 *) \cdot \frac{ 1 }{ \s^{2} } *)^{\frac{ 1 }{ -2 }} *〉  ?\in  \mathbb{S}_{N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wobei diese Summe sich insofern plausibel in die Fundierung der Superial-Zahlen einfügt, als dass ihre'."\n".
                      'zählende Variable ihre Werte per Definition „nur“ aus den möglichen und sinnvollen Superial-Zahlen schöpft.'."\n".
                      'Das bedeutet, dass die Koeffizienten der Superial-Zahlen der zählenden Variable auch Realanteile der algebraischen Zahlen'."\n".
                      'sind und dadurch die summierten Ausdrücke wieder Realanteile algebraischer Zahlen ergeben.'."\n".
                      'Dies ist in sich selbst plausibel.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Nun ist es so, dass die Definition der Ableitung und des Integrals per Superial-Zahlen mit der superialen'."\n".
                      'Basis \lm{ \s } die Besonderheit, dass die aktual unendlichen Anteile bei der Ableitung'."\n".
                      'von rein endlichen Funktionen nicht verschwinden.'."\n".
                      'Dagegen müssen bei der Integration aktual unendliche Anteile hinzugefügt werden, um rein endliche Funktionen zu erhalten.'."\n".
                      'Dies bedeutet, wir müssen die Formel modifizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( k^{2} x^{4} - *( k^{2} - 1 *) x^{2} + 1 *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  f(x) = x^{5}  \Rightarrow  f\'(x) =  *〈 5 x^{4} *〉.*〈 10 x^{3} *〉*〈 10 x^{2} *〉*〈 5 x *〉*〈 1 *〉  }'),
                      array( display => 'on',  latex => '{  f(x) = x^{3}  \Rightarrow  f\'(x) =  *〈 3 x^{2} *〉.*〈 3 x *〉*〈 1 *〉  }'),
                      array( display => 'on',  latex => '{  f(x) = x  \Rightarrow  f\'(x) =  1  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Da alle obigen Summanden ganze Superial-Zahlen sind'."\n".
                      '\\\\ \color{*Bearb}{(Wie gehen wir hier damit um, dass \lm{ x } in der Integralsumme auch superial kleine Anteile enthalten kann? Werden die hier eh zu endlichen ganzen Zahlen? Bei \lm{ x^{2} } wohl eher nicht. Oder können wir das Integral oben so definieren, dass es passt? Oder heben sich die superial kleinen Anteile erst beim Summieren auf?)}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) *)^{\frac{ 1 }{ -2 }} \cdot \s  \in  \mathbb{S}_{Z}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\color{*Bearb}{(In Arbeit …)} und die Summe zweier ganzer Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }} \cdot \s + n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unter den obigen Bedingungen, immer eine natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)} So sind dann auch algebraische Zahlen aus Summen zweier oder mehrerer Wurzeln, oder ihrer jeweiligen Kehrwerte,'."\n".
                    'als Faktoren der superialen Basis \lm{ \s } natürliche Superial-Zahlen möglich.'."\n",
                      '\color{*Bearb}{(In Arbeit …)} Damit haben wir für alle irrationalen algebraischen Koeffizienten durch Beweis überprüft,'."\n".
                    'dass ihre Produkte mit der superialen Basis \lm{ \s } zu den natürlichen Superial-Zahlen gehören.'."\n".
                    ''))),

                    ))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen:endliche-Indexmengen-p-a-Bewert-ergeben-reell-algebr-Zahlen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


          <!  • Alle endlichen Indexmengen mit p-adischen Bewertungen aus rationalen Zahlen ergeben reell algebraische Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen:endliche-Indexmengen-p-a-Bewert-ergeben-reell-algebr-Zahlen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Parität}',
                    // '• Nicht nur gleiche Mächtigkeit von geraden und ungeraden Zahlen, sondern hier sogar gleiche kombinatorische Anzahl von geraden und ungeraden Zahlen.\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:ParitaetMathematik:2021}.}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wir können tatsächlich jede endliche Indexmenge von \lm{ p }-adischen Bewertungen \lm{ \mathrm{v}_{\!p}(a) = q },'."\n".
                    'mit \lm{ q \in \mathbb{Q} \setminus *\{ 0 *\} }, wählen und erhalten eine reell algebraische Zahl:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a  =  \pm \prod_{\substack{p \in \mathbb{P}}} p^{q}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a  \in  \mathbb{A}_{\R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies ist tatsächlich eine bidirektionale Abbildung, bis auf den Fall \lm{ a = 0 } und das Vorzeichen.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
