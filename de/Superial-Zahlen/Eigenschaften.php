<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Eigenschaften'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Eulersche-Zahl-e-Funktion'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\\bold{XXX}',
                    // '• Ist \\term{\M(S)} bezüglich der Addition und Multiplikation ein \\jump[https://de.wikipedia.org/wiki/Geordneter_Körper]{}{archimedisch angeordneter Körper}?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen, als aktual unendliche algebraische Gruppe\\footnote{\\const{NSOSP_g_footnote_text_AbelscheGruppe}},'."\n".
                    'deren Basis über ein unendliches \\jump{OM:SupNum:Formale-Entwicklung}{Primzahl-Produkt} definiert ist, haben eine ganz besondere Struktur.'."\n".
                    'Ihre Struktur ist dadurch tief mit den \\jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Zahlen}, den \\jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Zahlen}'."\n".
                    'und den \\jump{OM:SupNum:Formale-Entwicklung:PrimSZ}{Primzahlen} verbunden und erweitern diese ins Aktual-Unendliche.'."\n".
                    'Auch sind sie dadurch mit den Ordinalzahlen\\footnote{\\const{NSOSP_g_footnote_text_Ordinalzahl}} und im Besonderen mit den von mir entdeckten'."\n".
                    '\jump{OM:BiOrd:Home}{Biordinalzahlen} verwandt.'."\n",
                      'Ihre besonderen Eigenschaften versprechen uns deshalb neue Einblicke in die Struktur der Zahlen.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • S ist ein angeordneter Körper  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften', type => 'back'),
                    )),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(Durch den Beweis der \italic{\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}} haben sich die Koeffizienten der Superial-Zahlen von den endlichen rationalen Zahlen auf die Koeffizienten der algebraischen Zahlen erweitert, was noch berücksichtigt werden muss.)} \\\\'."\n".
                    'Die Menge der Superial-Zahlen \\latexmath{ \mathbb{S} } ist in vielerlei Hinsicht etwas Besonderes.'."\n",
                      'Wir können nämlich für zwei Superial-Zahlen, die nicht gleich sind, immer herausfinden, welche'."\n".
                    'größer als die andere ist, weil sie eine lexikografische Ordnung\\footnote{\\const{SupNum_g_footnote_text_LexikographischeOrdnung}} haben.'."\n".
                    '\\latexmath{ \mathbb{S} } ist nämlich ein angeordneter Körper\\footnote{\\const{NSOSP_g_footnote_text_GeordneterKoerper}}.'."\n".
                    '\\color{*Bearb}{(Dies ist zu beweisen: die Körpereigenschaft und das Angeordnetsein.)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper:XXX', text =>
                      
                'Ist \\latexmath{ \mathbb{S} } ein archimedisch angeordneter Körper?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Es stellt sich die Frage, ob die Superial-Zahlen, also die Menge \\latexmath{ \mathbb{S} },'."\n".
                    'auch ein archimedisch angeordneter Körper\\footnote{\\const{NSOSP_g_footnote_text_ArchimedischGeordneterKoerper}} sind.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Das archimedische Axiom\\footnote{\\const{NSOSP_g_footnote_text_ArchimedischesAxiom}} besagt,'."\n".
                      'dass in einem archimedisch angeordneten Körper \\latexmath{ \mathbb{K} } immer eine natürliche Zahl existiert,'."\n".
                      'die als Faktor jede Zahl einer Menge größer machen kann als eine andere Zahl der gleichen Menge:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists n \in \mathbb{N} *) *( \forall x, y \in \mathbb{K} *) *( y > x > 0 *) *[  x \cdot n > y  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Es besagt also, dass alle Elemente des archimedisch angeordneten Körpers endlich sind, es jedoch unendlich viele davon gibt.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dies gilt aber nicht für den angeordneten Körper der Superial-Zahlen,'."\n".
                      'weil es Elemente einer Untermenge \\latexmath{ x \in \mathbb{Q} } gibt, für das es keinen Faktor in \\latexmath{ \mathbb{N} } gibt, um beides als Produkt größer als \\latexmath{ s } zu machen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \nexists n \in \mathbb{N} *) *( \forall q, x \in \mathbb{Q} *) *( q \cdot s > x > 0 *) *[  x \cdot n > q \cdot s  *]  }'),
                      array( display => 'on',  latex => '{  q \cdot s \in \mathbb{S}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow *( \nexists n \in \mathbb{N} *) *( \forall x, y \in \mathbb{S} *) *( y > x > 0 *) *[  x \cdot n > y  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Denn \\latexmath{ \mathbb{S} } enthält zum Beispiel mit \\latexmath{ q \cdot s } Elemente, die größer als jede endliche natürliche Zahl und damit unendlich groß sind.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wie wir daran sehen, handelt es sich bei den Superial-Zahlen um eine ganz andere Menge,'."\n".
                    'als bei Mengen endlicher Zahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Gibt es eine größere geordnete Teilmenge der Superial-Zahlen, die auch unendliche Elemente oder Elemente mit solchen Anteilen, beinhaltet, die ein archimedisch angeordneter Körper ist?} \\\\'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wie kann das archimedische Axiom für eine möglichst große Teilmenge von \\latexmath{ \mathbb{S} } erfüllt werden?'."\n".
                      'Es scheint mir, dass dies erfüllt wird, wenn es keine unendlich großen Summanden in den Elementen der Menge gibt.'."\n".
                      'Sowohl \\latexmath{ x } als auch \\latexmath{ y } müssen zwischen den endlichen Zahlen liegen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{A}  :=  *\{  x *|* *( \exists n \in \mathbb{N} *) *( \forall x, y \in \mathbb{S} *) *( y > x > 0 *) *[ x \cdot n > y *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'In Anlehnung an die Definition der Menge aller Superial-Zahlen in Formel \\jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Equ-Def-S}'."\n".
                      'können wir diese Menge auch so schreiben:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \mathbb{S}_{A}  :=  *\{  x *|* *( \forall d \in \mathbb{Z}_{0}^{-} *) *( \forall q_{d} \in \mathbb{Q} \setminus \{0\} *) *( \forall q_{i} \in \mathbb{Q} *) \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\; *[ q_{d} s^{d} + \sum_{( \forall i \in \mathbb{Z})[d > i]} q_{i} s^{i} *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'So enthalten diese Superial-Zahlen keine Summanden mit Potenzen von \\latexmath{ s }, die größer als Null sind.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper:XXX', text =>
                      
                'Aber \\latexmath{ \mathbb{S} } ist bezüglich der natürlichen Superial-Zahlen \\latexmath{ \mathbb{S}_N } ein archimedisch angeordneter Körper', subline =>
                  '')),
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
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists n \in \mathbb{S}_{\N} *) *( \forall x, y \in \mathbb{S} *) *( y > x > 0 *) *[  x \cdot n > y  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper:XXX', text =>
                      
                'XXX', subline =>
                  '')),
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
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS'),
                    )),
              )
          ); ?>


		    	<!  • Die Struktur von s  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eigenschaften:StrukturVonS',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Beschäftigung mit der Struktur von \lm{ \s } ist sehr ergiebig in Bezug auf weitere'."\n".
                    'tiefe Erkenntnisse.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS', text =>
                      
                'Was lernen wir über die Größe von \lm{ ω } und die Struktur von \lm{ \s } über die Frage der Vorgänger?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{In der \jumpname{OM:SupNum:Formale-Entwicklung} so formuliert:}'."\n",
                      'Jede natürliche Superial-Zahl \lm{ n } hat so viele Vorgänger in \lm{ \mathbb{S}_{\N} }, wie sie selber groß ist,'."\n".
                    'wie bei den endlichen natürlichen Zahlen.'."\n".
                    'Dies ist anders, als bei den von mir ebenfalls entdeckten und erforschten, auch ins Aktual-Unendliche gehenden'."\n".
                    '\jump{OM:BiOrd:Home}{Biordinalzahlen}:'."\n".
                    'Aktual unendliche Biordinalzahlen haben interessanter Weise \jump{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}{mehr Vorgänger als ihr Wert} groß ist.'."\n".
                    'In mancherlei anderen Punkten können wir erkennen, dass sie die noch nicht so perfekten Vorläufer der Superial-Zahlen sind.'."\n".
                    'Mathematisch gesehen sind die Biordinalzahlen eine Erweiterung der Ordinalzahlen\footnote{\const{NSOSP_g_footnote_text_Ordinalzahl}} zu einem algebraischen Ring\footnote{\const{NSOSP_g_footnote_text_RingAlgebra}}.'."\n",
                      'Demnach hat \lm{ \s } also so viele Vorgänger, wie das Primzahl-Flächenprodukt groß ist.'."\n".
                    'Die Anzahl der Vorgänger von \lm{ \s } ist dann:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Die Anzahl aller realen algebraischen Koeffizienten \lm{ a } von \lm{ \s }, für die gilt: \lm{ 0 \leq a < 1 }.',
                        'Multipliziert mit \lm{ 2 \cdot ω } für die Anzahl der endlichen ganzen Zahlen, siehe \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}, die ja zu jedem Koeffizienten addiert – und im Falle der negativen natürlich dann abgezogen – werden. Wobei im Falle von \lm{ a = 0 } nur natürliche Zahlen addiert und im Falle von \\latexmath{ a = 1 } nur negative ganze Zahlen addiert, also effektiv abgezogen, werden.',
                    ))),
                  array( 'text', array( text => array(
                    'So formulieren wir die Vorgänger von \lm{ \s } folgendermaßen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Das Intervall der Vorgänger der superialen Einheit ist im Detail'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, s [_{\mathbb{S}_{\N}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\R}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < 1  \\\\  \s + z^{-}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  \;\;  ,  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-natuerliche-Vorgaenger-s', label_text => '\\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-natuerliche-Vorgaenger-s}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'unter Berücksichtigung der unterschiedlichen Fälle.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Für die Anzahl der Vorgänger finden wir dann:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Seien \lm{ \rbrack a, b \lbrack_{\mathbb{A}_{\R}} } und \lm{ \lbrack a, b \lbrack_{\mathbb{A}_{\R}} } \jump{OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge}{Intervall-Mengen} aus \lm{ \mathbb{A}_{\R} },'."\n".
                      'dann ergibt sich \lm{ \s }, nach vorstehendem Gedanken, zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  \# \mathbb{N} + \# *( ] 0, 1 [_{\mathbb{A}_{\R}} *) \cdot \# \mathbb{Z} + \# \mathbb{Z^{-}}  }'),
                      array( display => 'off', latex => '{  \# \mathbb{Z}  =  \# \mathbb{N} + \# \mathbb{Z^{-}} }'),
                      array( display => 'off', latex => '{  \Rightarrow  \s  =  \# \mathbb{Z} + \# *( ] 0, 1 [_{\mathbb{A}_{\R}} *) \cdot \# \mathbb{Z}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \s  =  *( 1 + \# *( ] 0, 1 [_{\mathbb{A}_{\R}} *) *) \cdot \# \mathbb{Z}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  \# *( [ 0, 1 [_{\mathbb{A}_{\R}} *) \; \cdot \; \# \mathbb{Z}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  \# *( [ 0, 1 [_{\mathbb{A}_{\R}} *) \; \cdot \; *( 2 \cdot ω *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'was der Anzahl aller Realanteile der algebraischen Zahlen entspricht. \\\\'."\n".
                      'Denn mit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\R}  =  \\\ \qquad *\{  x  *|*  *( \forall z \in \mathbb{Z} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\R}} *)  *[  x = z + u  *]  *\}  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'sind alle Realanteile der algebraischen Zahlen, ohne Redundanzen – also Doppelungen – und Lücken, definiert und es folgt daraus'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \s  =  \# \mathbb{A}_{\R}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'weil es in den Realanteilen der algebraischen Zahlen \lm{ \mathbb{A}_{\R} } das Interval \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\R}} }'."\n".
                      'für jede ganze Zahl in \lm{ \mathbb{Z} } gibt und sie damit vollständig beschrieben sind.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'So gilt dann auch'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \# [ 0, 1 [_{\mathbb{A}_{\R}}  =  \frac{ \s }{ 2 \cdot ω }  \;\; ,  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'nach Umformung.'."\n",
                        '\\\\'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Dies muss eine ganze Zahl sein und ist ein wichtiger Baustein der \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung}.'."\n",
                      '\color{*Entwick}{(Können wir die Anzahl der rationalen Zahlen (oder der Realanteile der algebraischen Zahlen) quantifizieren? Zum Beispiel über den Calkin-Wilf-Baum\color{*Bearb}{(Verweis)}?)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm', text =>
                      
                'Ausgangspunkt der Primzahlprodukt-Vermutung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Und wir können sogar noch weiter gehen und feststellen, dass \lm{ ω } seine Primfaktoren'."\n".
                    'mit \lm{ \s }, siehe Formel \jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}, teilen muss, wenn die Anzahl der Realanteile der algebraischen Zahlen in \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\R}} }'."\n".
                    'aus Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins} eine ganze Zahl sein soll.'."\n".
                    'Weiter ist klar, dass \lm{ ω } aktual unendlich groß ist.'."\n".
                    'Es kann also nur ein Produkt aus unendlich vielen endlichen Primzahlen sein.'."\n",
                      'Doch welches Teilprodukt aus \lm{ \s } ist es, wenn klar ist, dass \lm{ \s } unendlich viel größer ist'."\n".
                    'als \lm{ ω }.'."\n".
                    'Schon der Turm der kleinsten Primzahl \lm{ 2^{ω} } ist definitiv sehr viel größer als \lm{ ω }.'."\n".
                    'Die einzelnen und kombinierten Türme aller Primzahlen \lm{ p^{ω} }, mit \lm{ p \in \mathbb{P} }, sind also ausgeschlossen.'."\n",
                      'Das unendliche Primzahlprodukt, dass auf den ersten Blick bleibt, ist schlicht die Zeile, die alle endlichen Primzahlen enthält, und lässt vermuten,'."\n".
                    'dass \lm{ ω ?= 2 \cdot 3 \cdot 5 \cdot 7 \cdot \cdots } ist.'."\n".
                    'Aber auch dieses Produkt erscheint auf den ersten Blick viel größer als die vollständige Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    '\lm{ ω } zu sein.'."\n".
                    // 'Es sei denn, die Anzahl der Primzahl unter den natürlichen Zahlen erfüllt weit draußen unter den sehr sehr großen Zahlen'."\n".
                    // 'eine bestimmte Bedingung:'."\n".
                    // 'Es gibt unter den wirklich extrem großen natürlichen Zahlen im Grunde nur noch Primzahlzwillinge?'."\n",
                    //   'Ob diese Bedingung hinreicht, beleuchten wir in der \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung}.'."\n".
                    // 'Auch sollten wir Überlegungen zur Primzahlzwillingsvermutung\color{*Bearb}{(Verweis)} anstellen und bekommen hiermit schon einen Hinweis,'."\n".
                    // 'dass unsere Vermutung stimmen könnte.'."\n".
                    'Im \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Beweis der Primzahlprodukt-Vermutung} gelingt es uns tatsächlich zu zeigen,'."\n".
                    'dass wirklich \lm{ ω = 2 \cdot 3 \cdot 5 \cdot 7 \cdot \cdots } gilt.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-endl-ganz-Zahlen', text =>
                      
                'Erklärung der Anzahl der endlichen ganzen Zahlen durch ihren ontologischen Ursprung in den Biordinalzahlen', subline =>
                  'Formulierung der Entstehung der negativen ganzen Zahlen durch Rückwärtszählen, ohne Umkehrung der Zählrichtung')),
                  array( 'text', array( text => array(
                    'Die vorstehend gemachten Aussagen sind entscheidend davon abhängig, wieviele endliche ganze Zahlen es gibt.'."\n".
                    'Dies bestimmt zum einen, ob es wirklich eine ganze Anzahl an Realanteilen der algebraischen Zahlen in \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\R}} } gibt.'."\n".
                    'Und es bestimmt damit, ob \lm{ ω } gemeinsame Teiler mit \lm{ \s } hat.'."\n",
                      'Dies ist einer der Gründe, aus denen ich mich mit den Ordinalzahlen\footnote{\const{NSOSP_g_footnote_text_Ordinalzahl}}'."\n".
                    'beschäftigt und diese auf die \jump{OM:BiOrd:Home}{Biordinalzahlen} erweitert und ein Stück weit erforscht habe.'."\n".
                    'Darauf basierend haben wir eine \jump{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}{fundamentale Asymmetrie}'."\n".
                    'herausgearbeitet, die der von uns gefundenen und oben verwendeten Anzahl der endlichen ganzen Zahlen'."\n".
                    '\lm{ 2 \cdot ω } zugrunde liegt.'."\n",
                      'Diese Anzahl der endlichen ganzen Zahlen ergibt sich wegen der auch im Negativen vorhandenen Zählrichtung, die auch dort in Richtung der größer werdenden, und schließlich positiven Zahlen, ausgerichtet bleibt,'."\n".
                    'weil alle Zahlen letztendlich aus dem Zählen hervorgehen.'."\n".
                    'Siehe dazu auch die \jump{OM:OT:Home}{Operialtheorie}.'."\n",
                      'Um auszudrücken, dass jeder negative Realanteilen einer algebraischen Zahl Teil eines an einer ganzen Zahl hängenden Zahlenintervalls ist, der jeweils aus einem Zahlenintervall'."\n".
                    'an einer natürlichen Zahl entsteht, berücksichtigen wir'."\n".
                    'im Ansatz die ontologische Vorstellung, dass es sich bei Zahlen quasi um Wellen – oder Sägezähne – von einer Zahl zur nächsten handelt.'."\n".
                    'Diese Wellen hängen in Zählrichtung an den Zahlen.'."\n".
                    ''))),
                      
                  array( 'figure',
                    array_merge( $BiOrd_g_figure_ary_GanzeZahlenGerade, array( name => 'OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen'))),
                                            
                  array( 'text', array( text => array(
                    'Die negativen Zahlen entstehen also eigentlich nicht durch eine Spiegelung dieser Wellen, sondern durch deren Verschiebung.'."\n".
                    'Und dies soll sich in der ersten Struktur der Formulierung ausdrücken, die wir auf Basis der Formel \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z} ansetzen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\R}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\R}} *)  \\\ \qquad\qquad\qquad\;\,  *[  x = *( n - *( 2 \cdot n + 1 *) *) + u  *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Intervalle \\latexmath{ u }, die zwischen den Zahlen liegen, hängen an der vorstehenden ganzen Zahl und werden auf diese Weise mit verschoben.'."\n".
                    'Daher steht quasi am „Beginn“ der endlichen negativen ganzen Zahlen auch der Punkt einer ganzen Zahl,'."\n".
                    'was eben der Grund dafür ist, dass es eine endliche negative ganze Zahl mehr geben muss, als positive, ohne die Null (siehe \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen}).'."\n".
                    'Denn das Zählen ist die Grundlage aller Zahlen.'."\n",
                      'Wenn wir die Verschiebung vereinfachend umformen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  \mathbb{A}_{\R}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\R}} *)  \\\ \qquad\qquad\qquad\qquad\quad\;\;\,  *[  x = *( n - 2 \cdot n - 1 *) + u  *]  *\}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \mathbb{A}_{\R}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\R}} *)  \\\ \qquad\qquad\qquad\qquad\quad\;\;\,  *[  x = *( - n - 1 *) + u  *]  *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \mathbb{A}_{\R}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\R}} *)  \\\ \qquad\qquad\qquad\qquad\quad\,  *[  x = - *( n + 1 *) + u  *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Mit Hilfe der Formeln \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}'."\n".
                    'und \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-N} folgt dann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# \mathbb{N}  =  ω  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-N}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \# \mathbb{A}_{\R}^{-}  =  \# [ 0, 1 [_{\mathbb{A}_{\R}} \, \cdot \; ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\R}^{-}  =  \frac{ \s }{ 2 \cdot ω } \cdot ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\R}^{-}  =  \frac{ \s }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So kann der Eindruck einer Spiegelung entstehen, wenn wir das Intervall nicht explizit dranhängen würden.'."\n",
                      'Demnach sind wir sicher, dass die Anzahl der endlichen ganzen Zahlen wirklich \\latexmath{ 2 \cdot \omega } ist.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:VergleichMitHyperreellenZahlen'),
                    )),
              )
          ); ?>


		    	<!  • Vergleich mit hyperreellen Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eigenschaften:VergleichMitHyperreellenZahlen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    '• Die Null ist in den Superial-Zahlen viel simpler definiert, als in den hyperreellen Zahlen.',
                    '• In den Superial-Zahlen brauchen wir nicht eine Reihe von unendlich vielen Zahlen, um infinite und infinitesimale Zahlen zu definieren.',
                    '– Wir können das Symbol \lm{ \s } für ein unendliches Flächenprodukt der Primzahlen nehmen, siehe oben, und dieses mit endlichen Symbolen, wie Brüchen, kombinieren.',
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:VergleichMitHyperreellenZahlen:XXX', text =>
                      
                'XXX', subline =>
                  '')),
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
                      array(  jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese'),
                    )),
              )
          ); ?>


		    	<!  • Untersuchungen zur Kontinuumshypothese  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese',
              'Die Mächtigkeit der reellen Zahlen', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:VergleichMitHyperreellenZahlen', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\\bold{XXX}',
                    '• Verweisen auf \jumpname{OM:SupNum:Struktur-Geometrie}.',
                    // '• XXX',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Mächtigkeit\footnote{\const{SupNum_g_footnote_text_Maechtigkeit}}'."\n".
                    'der reellen Zahlen wird mit \lm{ \mathfrak{c} } bezeichnet:\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Kontinuumshypothese:2023}, Aussage, Einfache Kontinuumshypothese.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.UK', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathfrak{c}  =  \#\mathbb{R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Es soll gezeigt werden können, dass die Mächtigkeit des Kontinuums der Potenzmenge von \lm{ \mathbb{N} } entspricht.\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Kontinuumshypothese:2023}, Aussage, Einfache Kontinuumshypothese.}'."\n".
                    'Warum dies so ist und wie es gezeigt wird, hab ich noch nicht verstanden.'."\n".
                    'Die Mächtigkeit des Kontinuums wird dann mit Hilfe von \lm{ ω } als \lm{ \aleph_{1} } formuliert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.UK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \aleph_{1}  =  2^{\aleph_{0}}  }'),
                      array( display => 'on',  latex => '{  \aleph_{0}  =  ω  =  \#\mathbb{N}  =  \vert \mathbb{N} \vert  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \aleph_{1}  =  2^{ω}  =  \vert \mathcal{P}(\mathbb{N}) \vert  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Kontinuumshypothese\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Kontinuumshypothese:2023}.}'."\n".
                    'vermutet dann offenbar, dass die reellen Zahlen die gleiche Mächtigkeit besitzen, wie das Kontinuum:\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Kontinuumshypothese:2023}, Aussage, Einfache Kontinuumshypothese.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.UK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathfrak{c}  ?=  \aleph_{1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Idee ist also, dass die Mächtigkeit der reellen Zahlen der Mächtigkeit der Potenzmenge der Menge \lm{ \mathbb{N} }'."\n".
                    'der natürlichen Zahlen, also \lm{ \vert \mathcal{P}(\mathbb{N}) \vert }, mit \lm{ 2^{ω} } entspricht.'."\n".
                    'Die Mächtigkeit einer Menge ist dabei nicht unbedingt der Anzahl der Elemente dieser Menge gleich.'."\n",
                      'Dies möchte ich nicht bezüglich der Mächtigkeit grundsätzlich in Frage stellen, sondern in Bezug auf die'."\n".
                    'mit den Superial-Zahlen gefundene Struktur des Unendlichen, vielleicht eher als Dichte oder Raster und mit der Arithmetik beschreiben'."\n".
                    'sowie erneut beleuchten, um weitere Erkenntnisse zu gewinnen.'."\n",
                      'Mit der Kontinuumshypothese wird angenommen:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'quote', text => array(
                        'Es gibt keine Menge, deren Mächtigkeit zwischen der Mächtigkeit der natürlichen Zahlen und der Mächtigkeit der reellen Zahlen liegt.'."\n".
                        ''),
                        addtext => '\footnote{Internet: \\\\ \cite{wiki:Kontinuumshypothese:2023}, Aussage.}')),

                  array( 'text', array( text => array(
                    'Dies soll erst einmal so stehen bleiben, weil es hier nicht direkt um den Beweis oder die Widerlegung'."\n".
                    'der Kontinuumshypothese geht.'."\n",
                      'Es soll vorerst darum gehen, die Struktur der Zahlen, bestenfalls der reellen Zahlen,'."\n".
                    'tiefer zu beleuchten, um zu sehen, ob und, wenn ja, welche Erkenntnisse sich diesbezüglich ergeben.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:XXX', text =>
                      
                'Die Potenz \lm{ 2^{ω} } ist uns aus dem Primzahl-Flächenprodukt bereits bekannt', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die von uns bewiesene \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} zeigt,'."\n".
                    'dass die Anzahl aller endlichen natürlichen Zahlen \lm{ ω } im Primzahl-Flächenprodukt zu finden ist.'."\n".
                    'Und zwar in der Zeile, die das Produkt aller endlichen Primzahlen darstellt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.UK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  =  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimfakultaet-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Prod-hoch-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  2^{ω} \cdot 3^{ω} \cdot 5^{ω} \cdot 7^{ω} \cdot 11^{ω} \cdot 13^{ω} \cdot 17^{ω} \cdot 19^{ω} \cdot 23^{ω} \cdot \cdots  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen die Potenz \lm{ 2^{ω} } als ersten Primzahlturm im Produkt von \lm{ \s }.'."\n",
                      'Weiterhin ergibt sich die neue Erkenntnis, dass \lm{ \aleph_{1} } in seiner Potenz von \lm{ 2 } im Exponenten das'."\n".
                    'Produkt aller Primzahlen enthält:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.UK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \aleph_{1}  =  2^{ω}  =  2^{2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \aleph_{1}  =  *( *( *( *( *( *( 2^{ 2 } *)^{ 3 } *)^{ 5 } *)^{ 7 } *)^{ 11 } *)^{ 13 } *)^{ \cdots }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies sind Formulierungen, die neu sind, soweit mir bekannt.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:XXX', text =>
                      
                'Die Konstruktion und der Sinn von \lm{ \s } wirft Fragen bezüglich der Struktur der reellen Zahlen auf', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Nun geht es bei der Kontinuumshypothese um die Mächtigkeit der reellen Zahlen und um die der natürlichen Zahlen;'."\n".
                    'schließlich ja um die Frage, ob es noch eine Mächtigkeit zwischen denen dieser beiden Mengen gibt.'."\n",
                      'Die superiale Basis \lm{ \s } ist nun so konstruiert, dass ein Produkt mit ihr und jedem Realanteil einer algebraischen Zahl,'."\n".
                    'eine ganze Zahl ergibt, wie wir durch den Beweis der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung} wissen.'."\n",
                    'Offensichtlich können wir dies sehen, wenn es sich dabei um eine rationale Zahl handelt.'."\n".
                      'Wir können daran erkennen, dass schon die Struktur der Realanteile der algebraischen Zahlen es erfordert, nicht nur'."\n".
                    '\lm{ 2^{ω} }, sondern auch \lm{ 3^{ω} } und ebenso alle'."\n".
                    'anderen aktual unendlichen Potenzen endlicher Primzahlen bis ins Unendliche, einzubeziehen.'."\n".
                    'Da scheint es offenbar, dass \lm{ 2^{ω} } nicht ausreichen kann,'."\n".
                    'die Komplexität oder Feinheit der Struktur aller reellen Zahlen darzustellen.'."\n".
                    'Dazu kommt, dass die reellen Zahlen auch noch alle transzendenten Zahlen enthalten sollen, woran es Zweifel geben darf,'."\n".
                    'siehe Abschnitt \italic{\jumpname{OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:Transzendente-Zahlen}}.'."\n",
                      'Während die Mächtigkeit der Realanteile der algebraischen Zahlen, der der natürlichen Zahlen entspricht,'."\n".
                    'weil sie abzählbar sind,\footnote{\const{SupNum_g_footnote_text_TranszendenteZahlEigenschaften}}'."\n".
                    'ist die Mächtigkeit der transzendenten Zahlen\footnote{\const{SupNum_g_footnote_text_TranszendenteZahl}} überabzählbar.\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:TranszendenteZahl:2023}, Überabzählbarkeit.}'."\n".
                    'Durch die Superial-Zahlen sehen wir, dass die Anzahl der Realanteile der algebraischen Zahlen dem besagten'."\n".
                    'aktual unendlichen Flächenprodukt \lm{ \s } geteilt durch die Anzahl der endlichen ganzen \lm{ 2 \cdot ω } entspricht,'."\n".
                    'siehe Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}.'."\n",
                      'Wenn wir dies alles betrachten, bekomme ich den Eindruck, dass hier etwas nicht zusammenpasst.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Unabhängigkeit von der Mengenlehre (ZFC)} \\\\'."\n".
                    'An dieser Stelle möchte ich darauf aufmerksam machen, dass die Kontinuumshypothese von der'."\n".
                    'Zermelo-Fraenkel-Mengenlehre mit Auswahlaxiom (ZFC) insgesamt unabhängig ist.\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Kontinuumshypothese:2023}, Unabhängigkeit von ZFC.}'."\n".
                    'Dass bedeutet, die Mengenlehre – genauer die ZFC-Mengenlehre – gibt uns nicht die Möglichkeit zu entscheiden, ob die Kontinuumshypothese wahr oder falsch ist.'."\n",
                      'Hier kommen die auf diesen Seiten entwickelten Superial-Zahlen, und die mit ihnen verbundenen \jump{OM:BiOrd:Home}{Biordinalzahlen}, ins Spiel.'."\n".
                    'Die Superial-Zahlen begründen das Aktual-Unendliche auf den endlichen Primzahlen und so auf der Arithmetik und bringen sie mit der Mengenlehre zusammen.'."\n".
                    'Sie erweitern so die Realanteile der algebraischen Zahlen sogar auf einen'."\n".
                    'aktual unendlichen angeordneten algebraischen Körper\footnote{\const{NSOSP_g_footnote_text_KoerperAlgebra}}\footnote{\const{SupNum_g_footnote_text_AlgebraischerZahlkoerper}}.'."\n".
                    'Das heißt, wir haben durch die Superial-Zahlen nicht nur die Mengenlehre, sondern auch eine Arithmetik des Aktual-Unendlichen mit ausgezeichneten Eigenschaften'."\n".
                    'zur Verfügung.'."\n",
                      'Und dadurch konnten wir schon neue Erkenntnisse der Arithmetik des Aktual-Unendlichen gewinnen, wie eine neue Definition der Ableitung, des Integrals,'."\n".
                    'also der Erweiterung des Zählens, und der Primzahlen, der Definition der vollständigen Induktion über endliche Primzahlen sowie'."\n".
                    'der Definition von irrationalen Realanteilen der algebraischen Zahlen mit überratiionalen Brüchen, also Brüchen aus aktual unendlichen ganzen Zahlen, die irrationale Wurzeln und ähnliches beschreiben.'."\n",
                      'All dies steht offensichtlich in Beziehung zur Kontinuumshypothese und kann so zu deren besseren Verständnis herangezogen werden.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:Transzendente-Zahlen', text =>
                      
                'Transzendente Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Hinsichtlich der transzendenten Zahlen möchte ich am Beispiel der Eulerschen Zahl \lm{ \e_\s } zeigen,'."\n".
                    'dass sich hier weitere Fragezeichen ergeben:'."\n",
                      'Auf der Seite \italic{\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion}}'."\n".
                    'kommen wir zu dem Schluss, dass die Eulersche Zahl keine irrationale Zahl ist, nicht einmal eine'."\n".
                    'Superial-Zahl der auf dieser Seite definierten 1. Ordnung, weil sie unweigerlich'."\n".
                    'aktual unendlich kleine Summanden der Größenordnung \lm{ \s^{-\s} } enthält, die nicht Null werden können.'."\n".
                    'Wie gesagt, fällt sie hierdurch selbst aus der Menge \lm{ \mathbb{S} } der Superial-Zahlenheraus.'."\n".
                    'Sie ist also keine rein endliche reelle Zahl, die nur aus Summanden endlicher Größe besteht.'."\n",
                      'An dieser Stelle würde ich sagen, dass zumindestens \\latexmath{ \e_\s } keine reelle Zahl ist'."\n".
                    'und die Frage im Raum steht, ob nicht auch alle anderen transzendenten Zahlen gar keine reellen Zahlen sind.'."\n".
                    'Sondern, wir lassen uns vielleicht dadurch täuschen, dass wir glauben, transzendente Zahlen wären durch Dezimalzahlen'."\n".
                    'mit unendlich vielen Nachkommastellen darstellbar, ohne zu beantworten,'."\n".
                    'wie groß diese minimale Unendlichkeit denn eigentlich ist.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:XXX', text =>
                      
                'Schlussfolgerung zur Untersuchung der Kontinuumshypothese', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ich denke, wir sollten die Struktur der reellen Zahlen und ihre Aufteilung in Untermengen'."\n".
                    'mit Hilfe der Primzahlen, und somit mit Hilfe der Superial-Zahlen, tiefer untersuchen und verstehen,'."\n".
                    'damit wir in die Lage kommen, die Kontinuumshypothese im Detail zu verstehen und hoffentlich dann beantworten zu können.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
