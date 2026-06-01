<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:ZFC-Modellkonstruktion'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Superiale-Transzendenz-Vermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Konstruktivismus}',
                    '• David Foster Wallace berichtet über den Konflikt zwischen Konstruktivisten und Platonisten (um diese Gruppen grob zu klassifizieren), siehe \cite{Wallace:DieEntdeckungDesUnendlichen:2010}, § 6 f., S. 286-291 (auch in den Fußnoten).',
                    '– Zitat: \quote{Die Grundprinzipien des Konstruktivismus, wie er von Kronecker praktiziert und von J. H. Poincaré, L. E. J. Brouwer und anderen bedeutenden Vertretern des Intuitionismus kodifiziert wurde, lauten: (1) Jede mathematische Aussage beziehungsweise jeder mathematische Satz, der komplizierter oder abstrakter ist als die schlichte alte Arithmetik der ganzen Zahlen, muss explizit mit Hilfe endlich vieler rein deduktiver Schritte aus der ganzzahligen Arithmetik abgeleitet (das heißt »konstruiert«) werden. (2) Die einzigen gültigen Beweise in der Mathematik sind konstruktive Beweise, wobei das Adjektiv hier bedeutet, dass der Beweis eine Methode zum Auffinden (das heißt »Konstruieren«) der mathematischen Objekte ist, mit denen er sich befasst.}, hier S. 287.',
                    '– Können wir die ›ZFC-Modellkonstruktion‹ als Konstruktivismus bezeichnen, als Ansatz im Sinne der Konstruktivisten?',
                    '⋅ Der konstruktivistische Ansatz des Primzahl-Flächenproduktes, ganzzahlige Teilbarkeit etc. (Kommensurabilität – die Eigenschaft, vergleichbar oder durch einen gemeinsamen Maßstab messbar zu sein) von \lm{ \s } herzustellen, erscheint mir als konstruktives Element.',
                    '⋅ Die ZFC-Modellkonstruktion scheint mir dieses Ansinnen zu ergänzen und mit sicherem Grund zu untermauern, auch, wenn kritisiert werden könnte, dass \lm{ \s } so auch monische Eigenschaften bekommt, die als blockhaft beziehungsweise in gewisser Hinsicht als Unteilbarkeit interpretiert werden könnten. Aber das Spannungsfeld der Kombination dieser scheinbar gegensätzlichen Eigenschaften ist ja genau der Clou der Modellkonstruktion.',
                    '– Wenn es das Gegenteil zum Platonismus sein soll, was würde Platonisten daran stören?',
                    '– Festzustellen ist für mich, dass wir diese Konstruktion machen, weil wir Erfahren haben – uns intuitiv klar geworden ist als auch dann praktisch entdeckt und dabei festgestellt haben –, dass eine solche Konstruktion tieferen Sinn macht.',
                    '⋅ Insofern habe ich den Eindruck, dass wir hier sowohl platonisch eine Ideenwelt erkannt oder entdeckt haben, als auch diese durch eine Konstruktion in Klarheit ausdrücken und sie dadurch schließlich sicher praktisch nutzbar machen.',
                    '\bold{Real-Abgeschlossenheit}',
                    '• Wenn wir als Exponenten von \lm{ \s }, also für \lm{ \Gamma }, rationale Zahlen zulassen, dann erhalten wir Real-Abgeschlossenheit, meint ChatGPT. Das bedeutet, dass auch Wurzeln aus jeder Superial-Zahl gezogen werden können.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wir entwickeln die Superial-Zahlen von ihrer intuitiven Definition weiter, indem wir sie mit einer'."\n".
                    'Modellkonstruktion untermauern, die mit der Zermelo-Fraenkel-Mengenlehre mit Auswahlaxiom (ZFC)\footnote{\const{BiOrd_g_footnote_text_ZermeloFraenkelMengenlehre}} kompatibel ist.'."\n".
                    'Dabei habe ich mich von einer Konversation mit ChatGPT inspirieren lassen, in der ein Vorschlag entstand,'."\n".
                    'wie eine sichere Fundierung der Superial-Zahlen aussehen kann.'."\n",
                      'Eine Unsicherheit besteht in der Definition unserer superialen Basis \lm{ \s } durch das unendlich große Produkt von Primzahlen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  \displaystyle \prod_{\forall \mathbb{N}}  *( \prod_{\forall p \in \mathbb{P}}  p *)  }',
                                          label_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-N', label_text => '\name{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-N}', label_incr => true),
                      array( display => 'on',  latex => '{  \mathbb{N}   :=  \mathbb{N}_{0}  }',
                                               label_text => '\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-Def-N-enthaelt-Null}', label_incr => false),
                      array( display => 'on',  latex => '{  ω   =  \mathbb{N}  =  \#\mathbb{N}  }',
                                               label_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-omega-ist-Anzahl-in-N', label_text => '\name{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-omega-ist-Anzahl-in-N}', label_incr => true),
                      array( display => 'on',  latex => '{  \s  :=  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)^{ω}  }',
                                          label_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega', label_text => '\name{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}', label_incr => true),
                      array( display => 'on',  latex => '{  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot \cdots *)^{ω}  :=  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)^{ω}  }'),
                      array( display => 'on',  latex => '{  \displaystyle \prod_{\forall p \in \mathbb{P}}  p^{ω}  :=  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)^{ω}  }'),
                      array( display => 'on',  latex => '{  2^{ω} \cdot 3^{ω} \cdot 5^{ω} \cdot 7^{ω} \cdot 11^{ω} \cdot 13^{ω} \cdot 17^{ω} \cdot \cdots  :=  \displaystyle \prod_{\forall p \in \mathbb{P}}  p^{ω}  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'denn in ZFC dürfen wir zwar mit unendlichen Mengen arbeiten, aber „\lm{ \infty \times \infty }“ als gewöhnliches Ganzzahl-Produkt ist nicht definiert und es gibt weitere Probleme:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Es gibt in \lm{ \mathbb{N} } kein Element, dessen \lm{ p }-adische Exponenten sämtlich \lm{ ω } sind.',
                        'Ein direkter Klassen-Term wie \lm{ *( \prod_{\forall p \in \mathbb{P}} p *)^{ω} } wäre eine'."\n".
                          'echte Klasse\footnote{\const{BiOrd_g_footnote_text_EchteKlasse}}, keine Menge\hidden{ ⇒ kann kein Feld­element sein},'."\n".
                          'was ein Problem bei der Definition der Menge \lm{ \mathbb{S} } ist.',
                        'Wir erhalten so nur eine sichere Multiplikation, aber keine sichere Addition: Ohne sichere Addition aber kein Ring,'."\n".
                          'erst recht kein \jump{OM:SupNum:Formale-Entwicklung:SIstKoerper}{Körper} – Analysis oder Differentialrechnung wären unmöglich.',
                        'Ordnung nicht sicher linear: Die Superial-Analysis braucht eine totale Ordnung, damit wir so etwas wie „größte Stelle“ sagen können.',
                        'Eine unendlich große Primfaktorzerlegung verletzt den FTA-Rahmen\footnote{\const{SupNum_g_footnote_text_FundamentalsatzDerArithmetik}}:'."\n".
                          'Die „Fundamental­theorem-der-Arithmetik“-Maschinerie (FTA) garantiert Eindeutigkeit nur für endliche Zerlegungen.'."\n".
                          'Für ring- oder feldartige Erweiterungen mit unendlichen Zerlegungen müssten wir völlig neue Axiome nachschieben.',
                        'ZFC-Feinheiten: Ein Element mit \lm{ ω }-vielen endlichen Faktoren liegt außerhalb jeder der üblichen Zahlstrukturen'."\n".
                          '\lm{ \mathbb{N} }, \lm{ \mathbb{Z} }, \lm{ \mathbb{Q} }, wenn es als echtes Produkt all dieser Faktoren verstanden wird.'."\n".
                          'Wir müssten die komplette Algebra darauf neu definieren.',
                    ))),
                  array( 'text', array( text => array(
                    'Diese Probleme und Unsicherheiten wollen wir nun lösen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Der Beweis der Primzahlprodukt-Vermutung und seine Bedeutung für die Superial-Zahlen', subline =>
                  'Eine erweiterte Ordinalarithmetik von \lm{ ω } liefert Erkenntnisse zu dessen Teilbarkeit durch endliche Primzahlen')),
                  array( 'text', array( text => array(
                    'Über die Beschäftigung mit den Superial-Zahlen entstand die Einsicht, dass es naheliegt,'."\n".
                    'die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}} \lm{ ω }'."\n".
                    'nicht nur als vollständige Induktion des Zählens zu definieren,'."\n".
                    'sondern gleichzeitig auch als einfach vollständiges Primfakultätsobjekt der endlichen Primzahlen zu verstehen;'."\n".
                    'ganz ähnlich wie oben unser \italic{induktiv vollständiges Primfakultätsobjekt} \lm{ \s }.'."\n",
                      'Nach längerer Erforschung dieser Idee und Erfahrung mit dieser Vorstellung im Hinterkopf'."\n".
                    'ist es mir gelungen, eine tiefe Plausibilität dieser Einsicht zu entwickeln.'."\n".
                    'Diese konnte ich formal zeigen und mit Hilfe eines Identitätssatzes in einem Beweis zu einer'."\n".
                    'ZFC-konform\footnote{\const{BiOrd_g_footnote_text_ZermeloFraenkelMengenlehre}}'."\n".
                    'modellierbaren Erweiterung der Ordinaleinheit \lm{ ω } entwickeln.'."\n",
                      'Der Beweis dieser \italic{›\jumpname{OM:SupNum:Primzahlprodukt-Vermutung}‹}'."\n".
                    'führt inhaltlich zu einer erweiterten Ordinalarithmetik,'."\n".
                    'die anschließend unabhängig von den speziellen Superial-Zahlen formuliert werden kann,'."\n".
                    'durch die wir einen sinnvollen und fundierten Ausgangspunkt für'."\n".
                    'unsere folgende ZFC-Modellkonstruktion der Superial-Zahlen erhalten.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Der Beweis liefert uns die Zusammenhänge:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  =  ω\overline{\#}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-MengenPrimfakultaet-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  ω  =  \prod_{\forall p \in \mathbb{P}}  p  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimzahlen}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  ω  =  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimfakultaet-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p \in \mathbb{P} *) *[  v_{p}*( ω *)  =  1  *]  \;\; .  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-Bewertung-von-omega-ist-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Wir erhalten also unabhängig von der Theorie der Superial-Zahlen'."\n".
                    'für die Ordinaleinheit \lm{ ω } eine Teilbarkeit durch endliche Primzahlen,'."\n".
                    'die der von uns erkannten Teilbarkeit der Superialeinheit \lm{ \s } im Prinzip stark ähnelt.'."\n".
                    'Bei \lm{ \s } erweitern wir diese Teilbarkeit dadurch, dass nicht nur eine einmalige,'."\n".
                    'sondern eine \lm{ ω }-fache ganzzahlige Teilbarkeit durch jede einzelne endliche Primzahl vorliegt.'."\n",
                      'Für die superiale Basis ergibt sich nach obigen Definitionen daraus'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \boxed{\;\;  \s  =  ω^{ω}  \;\;}  }',
                                          label_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega', label_text => '\name{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  \boxed{\;\;  *( \forall p \in \mathbb{P} *)  *[  v_{p}*( \s *)  =  ω  *]  \;\;}  }',
                                          label_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-p-Bewertung-von-s-gleich-omega', label_text => '\name{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-p-Bewertung-von-s-gleich-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'was bedeutet, dass die \lm{ p }-adische Bewertung von \lm{ \s } in Bezug auf jede endliche Primzahl'."\n".
                    'den Wert \lm{ ω } hat.'."\n",
                      'So gesehen erscheint der Übergang von \lm{ ω } zu \lm{ \s } als eine natürliche nächste Erweiterung.'."\n".
                    'Der Zusammenhang \lm{ \s = ω^{ω} } ist aufgrund seiner Erkenntnisbedeutung auch Thema des Theorielogos.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\italic{Anmerkung:}'."\n".
                    'Auf dieser Seite und in der ganzen Arbeit zu den Superial-Zahlen wird \lm{ ω } nicht als die aus'."\n".
                    'ZFC bekannte Ordinaleinheit, sondern als die durch den Beweis der ›Primzahlprodukt-Vermutung‹'."\n".
                    'zum Primfakultätsobjekt erweiterte Ordinaleinheit gesehen, aber weiterhin mit \lm{ ω } bezeichnet.'."\n".
                    'Für diese erweiterte Lesart von \lm{ ω } ist die im Beweis festgelegte Struktur \lm{ \mathfrak{N}_{\infty,v_{p}} }'."\n".
                    'maßgeblich, mit ihren \lm{ p }-adischen Bewertungen, Ordnungseigenschaften und Normalformen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Hahn-Reihe-Ausweg', text =>
                      
                'Die Hahn-Reihe als Ausweg', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Darum ersetzen wir in unserer Hahn-Reihen-Version die „wirkliche“ Primfaktorzerlegung durch das formale Symbol \lm{ \s := *( \prod_{\forall p \in \mathbb{P}} p *)^{ω} } – und kodieren die Aussage'."\n".
                    '„\lm{ \s } hat bei jeder Primzahl \lm{ p } die Exponentenlänge \lm{ ω }“ rein über \lm{ p }-adische Bewertungen.'."\n".
                    'Eine Superial-Konstruktion über eine Hahn-Reihe\footnote{\const{SupNum_g_footnote_text_HahnSeries}} kann so „\lm{ p }-Exponent = \lm{ ω }“ jeder endlichen Primzahl stattdessen in der \lm{ p }-adischen Bewertung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall q \in \mathbb{P} *)  *[  v_{q}*( \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)^{ω} *)  :=  ω  *]  }'),
                      array( display => 'on',  latex => '{  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)^{ω}  :>  0  }'),
                      array( display => 'on',  latex => '{  \s  :=  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'kapseln.'."\n".
                    'Denn auf diese Weise ist \lm{ \s } und das für es stehende unendliche Produkt \lm{ *( \prod_{\forall p \in \mathbb{P}} p *)^{ω} } einfach ein neues formales Zeichen, mit wohldefinierten Eigenschaften.'."\n".
                    'Dadurch ergibt sich die Definition der Menge der Superial-Zahlen \lm{ \mathbb{S} } zu'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  :=  \mathbb{A}_{\R}((\s^{\Gamma}))  }'),
                      array( display => 'on',  latex => '{  \Gamma  :=  \mathbb{Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \mathbb{S}  =  \mathbb{A}_{\R}((\s^{\mathbb{Z}}))  \;\; ,  }',
                                          label_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-S-ist-Hahnreihe-mit-Wertgruppe-Z', label_text => '\name{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-S-ist-Hahnreihe-mit-Wertgruppe-Z}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'wenn \lm{ \mathbb{A}_{\R} } das Koeffizientenfeld der reell algebraischen Zahlen und'."\n".
                    '\lm{ \Gamma } die Wertgruppe (geordnete abelsche Gruppe mit üblicher Ordnung) unserer Hahn-Reihe ist.'."\n",
                      'Ausformuliert erhalten wir so:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  =  *\{  f = \sum_{k \in \mathbb{Z}}\!a_k \cdot \s^{k}  *|*  a_k \in \mathbb{A}_{\R},\; \underbrace{ \operatorname{supp} f := *\{ k *|* a_k \neq 0 *\} }_{\text{ist reverse-wohlgeordnet}}  \\\ \qquad\qquad\qquad\qquad\qquad\;\;\,  \;\land\; \underbrace{\exists n \in \mathbb{Z}:\; \operatorname{supp} f \subseteq \; ] \! -\!\infty, n ]}_{\text{oben endlich}}  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Mathematisch steckt die Unendlichkeit jetzt in zwei ZFC-konformen Stellen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\lm{ \mathrm{supp} f } — reverse-wohlgeordneter Support endlicher Exponenten',
                        'Bewertungs­wert \lm{ ω } — das Ordinal \lm{ ω } ist ein Mengen-Element in ZFC',
                    ))),
                  array( 'text', array( text => array(
                    'Beides sind fertige, aktual unendliche Mengen – aber eben keine „Zahl mit unendlich vielen Primfaktoren“.'."\n".
                    'Damit können wir die Algebra sauber definieren, ohne etwas zu fordern, was ZFC nicht als Element kennt.'."\n".
                    'Die Hahn-Reihe liefert den geordneten Körper; die \lm{ p }-adische Interpretation von \lm{ \s } liefert zusätzlich'."\n".
                    'die gewünschte Primfaktorwirkung.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Die Superial-Struktur \lm{ \mathfrak{S} } als geordneter bewerteter Körper', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wir definieren die Superial-Struktur des geordneten bewerteten Körpers der Superial-Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathfrak{S}  :=  *( \mathbb{S} , + , \cdot , < , \s , \operatorname{ord}_{\s} , *( v_{p} *)_{p \in \mathbb{P}} *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  =  \mathbb{A}_{\R}((\s^{\mathbb{Z}}))  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-S-ist-Hahnreihe-mit-Wertgruppe-Z}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'ist der Hahn-Reihen-Körper,'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  }'),
                    ))),
                  array( 'text', array( text => array(
                    'ist das ausgezeichnete unendlich große Monom,'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \operatorname{ord}_{\s}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'ist die Schichtbewertung nach dem größten vorkommenden \lm{ \s }-Exponenten, und'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( v_{p} *)_{p \in \mathbb{P}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'ist die zusätzliche \lm{ p }-adische Bewertungsinterpretation mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  v_{p}*( \s *)  =  ω  \;\; .  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-p-Bewertung-von-s-gleich-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die Familie \lm{ *( v_{p} *)_{p \in \mathbb{P}} } bezieht sich zunächst auf die endlichen klassischen Primzahlen'."\n".
                    'und kodiert die Primfaktorwirkung der superialen Basis \lm{ \s }.'."\n".
                    'Für die spätere Theorie der superialen Primzahlen kann diese Bewertungsfamilie zu einer Familie'."\n".
                    '\lm{ *( v_{\mathfrak{p}} *)_{\mathfrak{p} \in \mathbb{S}_{\P}} } entlang der superialen Primzahlen'."\n".
                    'erweitert beziehungsweise ergänzt werden.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Erzeugungsanzahl', text =>
                      
                'Die Erzeugungsanzahl', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'In dieser Arbeit unterscheiden wir zwischen der gewöhnlichen Mächtigkeit einer Menge und ihrer \italic{Erzeugungsanzahl}.'."\n".
                    'Die in dieser Struktur verwendete Erzeugungsanzahl \lm{ \overline{\#}_{\mathrm{erz}} }'."\n".
                    'wird als eigener formaler Operator verstanden.'."\n".
                    'Ihre Berechnung erfolgt stets relativ zur vollständigen Induktion \lm{ ω }, auch bei \lm{ \s = ω^{ω} }.'."\n".
                    'Die Erzeugungsanzahl verbindet damit einen kardinalen und einen ordinalen Aspekt der Zahlen.'."\n",
                      'Die ausführliche Definition und Beispiele finden sich im Abschnitt \italic{›\jumpname{OM:SupNum:Formale-Entwicklung:Erzeugungsanzahl}‹}'."\n".
                    'der Seite \italic{›\jumpname{OM:SupNum:Formale-Entwicklung}‹}.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Primfaktorzerlegung von \lm{ \s }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wir stellen fest, dass \lm{ ω } und \lm{ p^{ω} } keine Elemente des Rings der Superial-Zahlen sind.'."\n".
                    'Dies scheint im Allgemeinen kein Problem zu sein.'."\n",
                      'So steht nun auch fest, dass \lm{ \s } durch jede endliche Potenz jeder Primzahl'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *( \forall n \in \mathbb{N} *)  *[  p^{n} \mid \s  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'teilbar ist, wobei jeder der Exponenten \lm{ n } sowie jede dieser endlichen Potenzen \lm{ p^{n} } ein Element des Superial-Rings sind.'."\n".
                    'Im Besonderen ist die exakte Teilbarkeit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *)  *[  p^{ω} \parallel \s  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'gegeben, wobei, wie gesagt, weder \lm{ ω } noch \lm{ p^{ω} } Elemente des Superial-Rings sind.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Tiefere-Betrachtung-Potenzen-s', text =>
                      
                'Tiefere Betrachtung der Potenzen von \lm{ \s }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Jeder einzelne Summand der Hahn-Reihe, sein reell algebraischer Koeffizient einer endlichen ganzen Potenz der superialen Basis \lm{ \s },'."\n".
                    'hat wohldefinierte \lm{ p }-adische Bewertungen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a_{k} \in \mathbb{A}_{\R} *) *( \forall p \in \mathbb{P} *)  *[  v_{p}*( a_{k} \cdot \s^{k} *)  =  k \cdot ω + v_{p}*( a_{k} *)  *]  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'so, dass sich bei Potenzen \lm{ k \ge 1 } nur rein positive Potenzen der Primzahlen ergeben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p \in \mathbb{P} *) *( \forall k \in \mathrm{supp} f *)  \\\ \qquad\;\; *[  v_{p}*( a_{k} *) \in \mathbb{Q}  \Rightarrow  \\\ \qquad\quad\, *( k - 1 *) \cdot ω  <  k \cdot ω + v_{p}*( a_{k} *)  <  *( k + 1 *) \cdot ω  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei bezeichnet \lm{ v_{p}*( a_{k} *) } die im Rahmen der Superial-Zahlen verwendete fortgesetzte \lm{ p }-adische Bewertung der reell algebraischen Koeffizienten.'."\n",
                      'So können wir leicht erkennen, dass alle Hahn-Reihen-Summanden in ihrer Größenordnung immer separiert bleiben,'."\n".
                    'auch egal ob \lm{ v_{p}*( a_{k} *) } positiv oder negativ ist, weil von \lm{ k \cdot ω } dominiert.'."\n",
                      'Auch ist auffällig, dass hier Summen oder Differenzen wie \lm{ k \cdot ω \pm \frac{ z }{ n } } als Ausdrücke entstehen, die wir bisher nicht kennen,'."\n".
                    'aber nun einfach nach den Grundregeln der uns bekannten Algebra nutzen.'."\n".
                    'Unter Kenntnis der Dominanz von \lm{ k \cdot ω }.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Primfaktorzerlegung der natürlichen Superial-Zahlen \lm{ \mathbb{S}_{\N} }', subline =>
                  '')),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Real-Abgeschlossenheit}',
                    //%! '• Bei der Primfaktorenzerlegung der natürlichen Superial-Zahlen \lm{ \mathbb{S}_{\N} } werden die Primpolynome (irreduzible Polynome\footnote{\const{SupNum_g_footnote_text_Primpolynom}}) als Primzahlen gesehen und müssen mit einbezogen werden!',
                    // '• Bei der \lm{ p }-adischen Bewertung der Superial-Zahlen \lm{ \mathbb{S} } müssten wohl die superialen Primzahlen mit einbezogen werden!?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die natürlichen Superial-Zahlen lassen sich in Faktoren zerlegen, die Primpolynomen ähneln (irreduzible Polynome\footnote{\const{SupNum_g_footnote_text_Primpolynom}}),'."\n".
                    'wie im Abschnitt zur \jump{OM:SupNum:Formale-Entwicklung:PrimSZ}{Primfaktorzerlegung natürlicher Superial-Zahlen} gezeigt wird.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Durch die Hahn-Reihe erhalten wir alle nötigen Eigenschaften', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Unser Ziel einer ZFC-konformen Definition der Superial-Zahlen haben wir somit erreicht.'."\n".
                    'Durch die Hahn-Reihen-Definition erhalten wir nun:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\bold{Addition:} \\\\'."\n".
                          'Koeffizientenweise.',
                        '\bold{Multiplikation:} \\\\'."\n".
                          'Cauchy-Produkt\footnote{\const{SupNum_g_footnote_text_CauchyProduktformel}} \\\\'."\n".
                          '\lm{ \displaystyle \qquad\qquad\qquad (f\!\ast\!g)(n) \;= \sum_{i + j = n} \! a_i \cdot b_j } \\\\'."\n".
                          '(Das Cauchy-Produkt ist wohldefiniert, weil die Supportbedingungen der Hahn-Reihen die relevanten Koeffizientensummen kontrollieren.)',
                        '\bold{Lexikographische Ordnung:}\footnote{\const{SupNum_g_footnote_text_LexikographischeOrdnung}} \\\\'."\n".
                          '\lm{ 0 < f < g } gilt, wenn an der \italic{größten} Potenz \lm{ k } mit \lm{ a_k \neq b_k } der Koeffizienten­vergleich \lm{ a_k < b_k } in \lm{ \mathbb{A}_{\R} } zutrifft.'."\n".
                          'Damit ist \lm{ s > n } für jedes endliche \lm{ n \in \mathbb{N} } und \lm{ \s^{-1} } infinitesimal klein,'."\n".
                          'siehe Kapitel \italic{›\jumpname{OM:SupNum:Formale-Entwicklung:SIstGeordneterKoerper}‹}',
                        '\bold{Feld­axiome:} \\\\'."\n".
                          'Die übliche Hahn-Reihen-Argumentation zeigt, dass \lm{ \mathbb{S} } ein \jump{OM:SupNum:Formale-Entwicklung:SIstKoerper}{geordneter Körper} ist.',
                        '\bold{Division:} \\\\'."\n".
                          'Durch Herausziehen des größten Terms und formale Reiheninversion, ähnlich der Polynomdivision\footnote{\const{SupNum_g_footnote_text_Polynomdivision}}.',
                        '\bold{Hebung vieler wichtiger Teilmengen der reell algebraischen Zahlen:} \\\\'."\n".
                          'Wie \jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganze Superial-Zahlen}, \jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürliche Superial-Zahlen},'."\n".
                          'gerade und ungerade Superial-Zahlen sowie \jump{OM:SupNum:Formale-Entwicklung:PrimSZ}{superiale Primzahlen}.',
                        '\bold{Primfaktorzerlegung:} \\\\'."\n".
                          '\lm{ \s } und alle anderen natürlichen Superial-Zahlen können, wie im Kapitel \italic{›\jumpname{OM:SupNum:Formale-Entwicklung:PrimSZ}‹}'."\n".
                          'gezeigt wird, in endliche und aktual unendliche superiale Primfaktoren zerlegt werden.',
                    ))),
                  array( 'text', array( text => array(
                    'Das sind alle grundlegenden Eigenschaften, die wir für den Ansatz einer Superial-Analysis brauchen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Zusammenfassung und Übertragung der geklärten Eigenschaften', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Zusammenfassend können wir sagen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\lm{ \s := *( \prod_{\forall p \in \mathbb{P}} p *)^{ω} } wird nur symbolisch eingeführt,',
                        '„unendlich viele Faktoren“ werden über Bewertungen beziehungsweise Supports ausgedrückt, in einer streng mengentheoretischen Form,',
                        'sodass alle Beteiligten Mengen bleiben,',
                        'wodurch wir vollständige ZFC-Konformität erhalten.',
                    ))),
                  array( 'text', array( text => array(
                    'Darüber ist es uns tatsächlich gelungen, \lm{ \mathbb{S} } als Menge zu definieren.'."\n".
                    'Und wir kommen jetzt in die komfortable Lage, diese Eigenschaften übertragen zu können.'."\n",
                      '„\lm{ \s := *( \prod_{\forall p \in \mathbb{P}} p *)^{ω} }“ ist als bildhafte Intuition prima, aber alleine formal nicht genau genug.'."\n".
                    'Die Hahn-Reihen-Definition gibt dieselbe \lm{ p }-adische Wirkung wieder, liefert aber gleichzeitig Addition, Subtraktion, Ordnung – kurz:'."\n".
                    'den vollständigen Zahlkörper \lm{ \mathbb{S} }, den die Superial-Analysis braucht.'."\n",
                      'Weil wir die Wirkung des unendlichen Produktes \lm{ *( \prod_{\forall p \in \mathbb{P}} p *)^{ω} } jetzt ZFC-konform modelliert haben, wird das,'."\n".
                    'was uns intuitiv offensichtlich erschien, nun formal sicher auf alle zuvor auf dieser Basis in dieser Arbeit gemachten Definitionen übertragen.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      //%! array(  jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Diskussion'),
                      array(  jump_name => 'OM:SupNum:Home'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


          <!  • Diskussion  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:ZFC-Modellkonstruktion:Diskussion',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:ZFC-Modellkonstruktion', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Parität}',
                    // '• Nicht nur gleiche Mächtigkeit von geraden und ungeraden Zahlen, sondern hier sogar gleiche kombinatorische Anzahl von geraden und ungeraden Zahlen.\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:ParitaetMathematik:2021}.}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Betrachten wir die Eigenschaften der unendlichen Produkte näher, so fällt auf, dass sich auf ihrer Grundlage recht einfach neue ganze Zahlen konstruieren lassen,'."\n".
                    'die über die Mengen oder Klassen hinausgehen, zu deren Konstruktion wir diese nutzen oder aus denen wir diese gewonnen haben.'."\n",
                      'Ein Beispiel ist die \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primfaktorzerlegung der vollständigen Induktion \lm{ ω }}, die sich inspiriert von den Superial-Zahlen,'."\n".
                    'aber ohne auf sie zurückzugreifen, beweisen lässt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC.D', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega  =  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimfakultaet-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'und wodurch wir eine tiefere Definition unserer superialen Basis \lm{ \s } erhalten.'."\n",
                      'Hierin erkennen wir, dass für alle endlichen Primzahlen \lm{ p } jeweils neue aktual unendliche ganze Zahlen \lm{ \frac{ ω }{ p } } konstruiert werden können,'."\n".
                    'die größer als jede endliche ganze Zahl sind, jedoch kleiner als \lm{ ω }.'."\n".
                    'Und Summen dieser mit endlichen ganzen Zahlen \lm{ \frac{ ω }{ p } \pm n } bringen dann noch viel mehr solcher Zahlen hervor.'."\n".
                    'Das ist halt einer der Effekte, die wir mit unendlichen Produkten von endlichen Zahlen heraufbeschwören und die wir in Erkenntnis verwandeln.'."\n",
                      'Damit sind dann, beginnend mit Null, vor \lm{ ω } mehr ganze Zahlen möglich, als \lm{ ω }’s Wert groß ist.'."\n".
                    'Dies ist ein ähnlicher Effekt, wie wir ihn schon von den rationalen Zahlen her kennen, der uns bei ganzen Zahlen vermutlich noch nicht so begegnet ist.'."\n".
                    'Wir kennen ihn ähnlich auch von den \jump{OM:BiOrd:Home}{Biordinalzahlen} im Abschnitt \italic{\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}}.'."\n",
                      'Im Aktual-Unendlichen bekommen die ganzen Zahlen aus Produktperspektive also manche bemerkenswerte Ähnlichkeit mit den rationalen Zahlen,'."\n".
                    'was verblüffend erscheinen kann.'."\n",
                      'Unendliche Produkte müssen also klar definiert sein, um diese Phänomene sicher handhaben zu können.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Home'),
                    )),
              )
          ); */ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
