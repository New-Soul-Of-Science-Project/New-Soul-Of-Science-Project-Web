<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Eigenschaften'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Eulersche-Zahl-e-Funktion'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen, als aktual unendliche algebraische Gruppe\footnote{\const{NSOSP_g_footnote_text_AbelscheGruppe}},'."\n".
                    'deren Basis über ein unendliches \jump{OM:SupNum:Formale-Entwicklung}{Primzahl-Produkt} definiert ist, haben eine ganz besondere Struktur.'."\n".
                    'Ihre Struktur verbindet über die Ordinalzahlen\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}} rationale und algebraische Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
                    'tief mit den \jump{OM:SupNum:Formale-Entwicklung:PrimSZ}{Primzahlen}, den \jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Zahlen},'."\n".
                    'den \jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Zahlen} und erweitert all diese ins Aktual-Unendliche.'."\n",
                      'Dieser Zusammenhang eröffnet ganz neue Perspektiven auf die Zahlentheorie und eröffnet auf diese Weise auch konkret'."\n".
                    'die Anzahlen von Elementen in diesen Mengen und deren Teilmengen mit aktual unendlichen Zahlen zu beschreiben.'."\n".
                    'Darüber können wir Summen der Elemente von diesen unendlichen Mengen bestimmen und gelangen schließlich zu einer neuen'."\n".
                    '\jump{OM:SupNum:Ableitungen-Integrale}{Definition des Integrals und der Ableitung} über aktual unendliche Zahlen, die ohne den Limes auskommen.'."\n",
                      'Diese Summen können oft nur über die von mir entdeckten, geschöpften und auf diesen Seiten entwickelten \jump{OM:BiOrd:Home}{Biordinalzahlen}'."\n".
                    'ausgedrückt werden.'."\n".
                    'Gleiches gilt auch für die Beschreibung der hierfür notwendigen aktual unendlichen Potenzen der Primzahlen.'."\n",
                      'Die besonderen Eigenschaften der Superial-Zahlen, die auf dieser Seite näher untersucht werden,'."\n".
                    'versprechen uns tiefe neue Einblicke in die Struktur der Zahlen, inklusive der transzendenten Zahlen\footnote{\const{SupNum_g_footnote_text_TranszendenteZahl}},'."\n".
                    'und begründen damit die Zahlentheorie der Analysis.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:Was-lernen-wir-ueber-algebraische-Zahlen-durch-Superial-Zahlen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

          <!  • Was lernen wir über rationale beziehungsweise algebraische Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eigenschaften:Was-lernen-wir-ueber-algebraische-Zahlen-durch-Superial-Zahlen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    '\bold{Nachkommastellen}',
                    '• Wir können lernen, dass die rationale Zahl \lm{ ⅓ = 0,\!33333\overline{3} = 0 \cdot 10^{0} + 3 \cdot 10^{-1} + 3 \cdot 10^{-2} + 3 \cdot 10^{-3} + \cdots } oder auch die algebraische Zahl \lm{ φ } nur Nachkommastellen haben, die alle endliche Werte haben, also endliche negative Potenzen haben, auch, wenn es unendlich viele sind. Dies muss so sein, weil es sonst einen Übertrag in die nächst tiefere Stelle der Superial-Zahl gibt.',
                    '– Das ergibt sich aus den \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen}.',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:WeitereOrdnungseigenschaftenS'),
                    )),
              )
          ); ?>


		    	<!  • Weitere Ordnungseigenschaften von S  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eigenschaften:WeitereOrdnungseigenschaftenS',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:Was-lernen-wir-ueber-algebraische-Zahlen-durch-Superial-Zahlen', type => 'back'),
                    )),

                  array( 'notice', array( Display => 'showContent', text => array(
                    '\bold{Totalordnung}',
                    '• Die Superial-Zahlen haben eine Totalordnung:',
                    '– Wikipedia: \jump[https://de.wikipedia.org/wiki/Ordnungsrelation]{Totalordnung}{Ordnungsrelation, Totalordnung.}',
                    '\bold{Überarbeiten}',
                    '• Durch den Beweis der \italic{›\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}‹} und der \italic{›\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung}‹} haben sich die Koeffizienten der Superial-Zahlen von den endlichen rationalen Zahlen auf die sinnvollen Koeffizienten der reell algebraischen Zahlen erweitert, was noch berücksichtigt werden muss.',
                    ))),

                  array( 'text', array( text => array(
                    'Die Menge der Superial-Zahlen \lm{ \mathbb{S} } ist in vielerlei Hinsicht etwas Besonderes.'."\n",
                      'Wir können zum Beispiel für zwei Superial-Zahlen, die nicht gleich sind, immer herausfinden, welche'."\n".
                    'größer als die andere ist, weil sie ein \jump{OM:SupNum:Formale-Entwicklung:SIstGeordneterKoerper}{linear geordneter Körper}\footnote{\const{NSOSP_g_footnote_text_GeordneterKoerper}} sind;'."\n".
                    'nämlich eine lexikografische Ordnung\footnote{\const{SupNum_g_footnote_text_LexikographischeOrdnung}} haben.'."\n".
                    '\color{*Bearb}{(Die Körpereigenschaft ist zu beweisen!)}'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Eigenschaften:WeitereOrdnungseigenschaftenS:X', text =>
                      
                'Ist \lm{ \mathbb{S} } ein archimedisch geordneter Körper?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Es stellt sich die Frage, ob die Superial-Zahlen, also die Menge \lm{ \mathbb{S} },'."\n".
                    'auch ein archimedisch geordneter Körper\footnote{\const{NSOSP_g_footnote_text_ArchimedischGeordneterKoerper}} sind.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Das archimedische Axiom\footnote{\const{NSOSP_g_footnote_text_ArchimedischesAxiom}} besagt,'."\n".
                      'dass in einem archimedisch angeordneten Körper \lm{ \mathbb{K} } immer eine natürliche Zahl existiert,'."\n".
                      'die als Faktor jede Zahl einer Menge größer machen kann als eine andere Zahl der gleichen Menge:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists n \in \mathbb{N} *) *( \forall x, y \in \mathbb{K} *) *( y > x > 0 *) *[  x \cdot n > y  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Es besagt also, dass alle Elemente des archimedisch angeordneten Körpers endlich sind, es jedoch unendlich viele davon gibt.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Dies gilt aber nicht für den angeordneten Körper der Superial-Zahlen,'."\n".
                      'weil es Elemente einer Untermenge \lm{ x \in \mathbb{Q} } gibt, für das es keinen Faktor in \lm{ \mathbb{N} } gibt, um beides als Produkt größer als \lm{ \s } zu machen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \nexists n \in \mathbb{N} *) *( \forall q, x \in \mathbb{Q} *) *( q \cdot \s > x > 0 *) *[  x \cdot n > q \cdot \s  *]  }'),
                      array( display => 'on',  latex => '{  q \cdot \s \in \mathbb{S}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow *( \nexists n \in \mathbb{N} *) *( \forall x, y \in \mathbb{S} *) *( y > x > 0 *) *[  x \cdot n > y  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Denn \lm{ \mathbb{S} } enthält zum Beispiel mit \lm{ q \cdot \s } Elemente, die größer als jede endliche natürliche Zahl und damit unendlich groß sind.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wie wir daran sehen, handelt es sich bei den Superial-Zahlen um eine ganz andere Menge,'."\n".
                    'als bei Mengen endlicher Zahlen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:WeitereOrdnungseigenschaftenS:X', text =>
                  'Gibt es eine größere geordnete Teilmenge der Superial-Zahlen, die auch unendliche Elemente oder Elemente mit solchen Anteilen, beinhaltet, die ein archimedisch geordneter Körper ist?', subline =>
                    '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Wie kann das archimedische Axiom für eine möglichst große Teilmenge von \lm{ \mathbb{S} } erfüllt werden?'."\n".
                      'Es scheint mir, dass dies erfüllt wird, wenn es keine unendlich großen Summanden in den Elementen der Menge gibt.'."\n".
                      'Sowohl \lm{ x } als auch \lm{ y } müssen zwischen den endlichen Zahlen liegen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{A}  :=  *\{  x *|* *( \exists n \in \mathbb{N} *) *( \forall x, y \in \mathbb{S} *) *( y > x > 0 *) *[ x \cdot n > y *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'In Anlehnung an die Definition der Menge aller Superial-Zahlen in Formel \jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Equ-Def-S-Polynom}'."\n".
                      'können wir diese Menge auch so schreiben:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \mathbb{S}_{A}  :=  *\{  x *|* *( \forall d \in \mathbb{Z}_{0}^{-} *) *( \forall q_{d} \in \mathbb{Q} \setminus \{0\} *) *( \forall q_{i} \in \mathbb{Q} *) \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\; *[ q_{d} \s^{d} + \sum_{( \forall i \in \mathbb{Z})[d > i]} q_{i} \s^{i} *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'So enthalten diese Superial-Zahlen keine Summanden mit Potenzen von \lm{ \s }, die größer als Null sind.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Eigenschaften:WeitereOrdnungseigenschaftenS:X', text =>
                      
                'Aber \lm{ \mathbb{S} } ist bezüglich der natürlichen Superial-Zahlen \lm{ \mathbb{S}_N } ein archimedisch geordneter Körper', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists n \in \mathbb{S}_{\N} *) *( \forall x, y \in \mathbb{S} *) *( y > x > 0 *) *[  x \cdot n > y  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\color{*Bearb}{(In Arbeit …)}'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Eigenschaften:WeitereOrdnungseigenschaftenS:X', text =>
                      
                '\color{*Bearb}{(In Arbeit …)}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
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
                      array(  jump_name => 'OM:SupNum:Eigenschaften:WeitereOrdnungseigenschaftenS', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Beschäftigung mit der Struktur von \lm{ \s } ist sehr ergiebig in Bezug auf weitere'."\n".
                    'tiefe Erkenntnisse.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:X', text =>

                '\italic{Inhalt}', subline =>
                  '')),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-reell-algebr-Zahlen'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:s-und-omega-hoch-omega-im-Strukturvergleich'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:bidir-Abbild-SN-auf-On-moeglich'),
                    )),


                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS', text =>
                      
                'Was lernen wir über die Größe von \lm{ ω } und die Struktur von \lm{ \s } anhand der Frage der Vorgänger?', subline =>
                  '')),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Quantifizierungen}',
                    '• Können wir die Anzahl der rationalen Zahlen (über den Calkin-Wilf-Baum\color{*Bearb}{(Verweis)}) oder der reell algebraischen Zahlen quantifizieren?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Jede natürliche Superial-Zahl \lm{ n } hat so viele Vorgänger in \lm{ \mathbb{S}_{\N} }, wie sie selber groß ist,'."\n".
                    'wie bei den endlichen natürlichen Zahlen.'."\n".
                    'Dies ist anders, als bei den von mir ebenfalls entdeckten und erforschten, auch ins Aktual-Unendliche gehenden'."\n".
                    '\jump{OM:BiOrd:Home}{Biordinalzahlen}:'."\n".
                    'Aktual unendliche Biordinalzahlen haben interessanter Weise \jump{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}{mehr Vorgänger als ihr Wert} groß ist.'."\n".
                    'In mancherlei anderen Punkten können wir erkennen, dass sie die noch nicht so perfekten Vorläufer der Superial-Zahlen sind.'."\n".
                    'Mathematisch gesehen sind die Biordinalzahlen eine Erweiterung der Ordinalzahlen\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}} zu einem algebraischen Ring\footnote{\const{NSOSP_g_footnote_text_RingAlgebra}}.'."\n",
                      'Demnach hat \lm{ \s } also so viele Vorgänger, wie das Primzahl-Flächenprodukt groß ist.'."\n".
                    'Interessanterweise ist das \jump{OM:SupNum:Eigenschaften:StrukturVonS:s-und-omega-hoch-omega-im-Strukturvergleich}{ebenso, wie bei \lm{ ω^{ω} } innerhalb der Ordinalzahlen},'."\n".
                    'obwohl es sich trotz \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}{gleicher Werte \lm{ \s = ω^{ω} } um unterschiedliche Strukturen} handelt.'."\n".
                    'Die Anzahl der Vorgänger von \lm{ \s } ist dann:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Die Anzahl aller reell algebraischen Koeffizienten \lm{ a } von \lm{ \s }, für die gilt: \lm{ 0 \leq a < 1 }.',
                        'Multipliziert mit \lm{ 2 ω } für die Anzahl der endlichen ganzen Zahlen, siehe \italic{›\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}‹}, die ja zu jedem Koeffizienten addiert – und im Falle der negativen natürlich dann abgezogen – werden. Wobei im Falle von \lm{ a = 0 } nur natürliche Zahlen addiert und im Falle von \lm{ a = 1 } nur negative ganze Zahlen addiert, also effektiv abgezogen, werden.',
                    ))),
                  array( 'text', array( text => array(
                    'So formulieren wir die Vorgänger von \lm{ \s } folgendermaßen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Das Intervall der Vorgänger der superialen Einheit ist im Detail'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.L', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, \s [_{\mathbb{S}_{\N}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\qquad\, *[  x  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < 1  \\\\  \s + z^{-}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  \;\; ,  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unter Berücksichtigung der unterschiedlichen Fälle.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Für die Anzahl der Vorgänger finden wir dann:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Seien \lm{ \rbrack a, b \lbrack_{\mathbb{A}_{\S}} } und \lm{ \lbrack a, b \lbrack_{\mathbb{A}_{\S}} } \jump{OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge}{Intervall-Mengen} aus \lm{ \mathbb{A}_{\S} },'."\n".
                      'dann ergibt sich \lm{ \s }, nach vorstehendem Gedanken, zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.L', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  \# \mathbb{N} + \# ] 0, 1 [_{\mathbb{A}_{\S}} \cdot \# \mathbb{Z} + \# \mathbb{Z^{-}}  }'),
                      array( display => 'off', latex => '{  \# \mathbb{Z}  =  \# \mathbb{N} + \# \mathbb{Z^{-}} }'),
                      array( display => 'off', latex => '{  \Rightarrow  \s  =  \# \mathbb{Z} + \# ] 0, 1 [_{\mathbb{A}_{\S}} \cdot \# \mathbb{Z}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \s  =  *( 1 + \# ] 0, 1 [_{\mathbb{A}_{\S}} *) \cdot \# \mathbb{Z}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  \# [ 0, 1 [_{\mathbb{A}_{\S}} \; \cdot \; \# \mathbb{Z}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  \# [ 0, 1 [_{\mathbb{A}_{\S}} \; \cdot \; 2 ω  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'was der Anzahl aller \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen} entspricht,'."\n".
                      'die, nach unserer \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{Vermutung, alle reell algebraischen Zahlen} sind. \\\\'."\n".
                      'Denn mit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.L', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  =  \\\ \qquad *\{  x  *|*  *( \forall z \in \mathbb{Z} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}} *)  *[  x = z + u  *]  *\}  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'sind alle sinnvollen Koeffizienten, ohne Redundanzen – also Doppelungen – und Lücken, definiert und es folgt daraus'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.L', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \# \mathbb{A}_{\S}  =  \# \mathbb{Z} \; \cdot \; \# [ 0, 1 [_{\mathbb{A}_{\S}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}  =  2 ω \; \cdot \; \# [ 0, 1 [_{\mathbb{A}_{\S}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}  =  \s  \;\; ,  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'weil es in den sinnvollen Koeffizienten \lm{ \mathbb{A}_{\S} } das Interval \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} }'."\n".
                      'für jede ganze Zahl in \lm{ \mathbb{Z} } gibt und sie damit vollständig beschrieben sind.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'So gilt dann auch, nun doppelt bestätigt,'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.L', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# [ 0, 1 [_{\mathbb{A}_{\S}}  =  \frac{ \s }{ 2 ω }  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}', label_incr => true),
                      array( display => 'off', latex => '{  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                      array( display => 'off', latex => '{  \Rightarrow  \# [ 0, 1 [_{\mathbb{A}_{\S}}  =  \frac{ ω^{ω} }{ 2 ω }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# [ 0, 1 [_{\mathbb{A}_{\S}}  =  \frac{ ω^{ω - 1} }{ 2 }  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'nach Umformung und mit Hilfe von Formel \jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}.'."\n",
                        '\\\\'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Hier muss es sich um eine ganze Zahl handeln, weil dies die Anzahl der Elemente einer Menge beschreibt, die immer ganz ist,'."\n".
                    'womit nachfolgend diese Erkenntnis ein wichtiger Hinweisgeber zur und zentraler Baustein der \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} ist.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm', text =>
                      
                'Ausgangspunkt der Primzahlprodukt-Vermutung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Und wir können sogar noch weiter gehen als im vorherigen Abschnitt \italic{›\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS}‹}'."\n".
                    'und feststellen, dass \lm{ ω } seine Primfaktoren'."\n".
                    'mit \lm{ \s }, siehe Formel \jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}, teilen muss, wenn die Anzahl der \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen Koeffizienten}'."\n".
                    'in \lm{ \# \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} = \frac{ \s }{ 2 ω } }'."\n".
                    'aus Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins} eine ganze Zahl ist.'."\n".
                    'Weiter ist klar, dass \lm{ ω } aktual unendlich groß ist.'."\n".
                    'Es kann also nur ein Produkt aus unendlich vielen endlichen Primzahlen sein.'."\n",
                      'Doch welches Teilprodukt von \lm{ \s } ist \lm{ ω }, wenn klar ist, dass \lm{ \s } unendlich viel größer ist'."\n".
                    'als \lm{ ω }?'."\n".
                    'Denn schon die Potenz beziehungsweise der Turm des Produkts der kleinsten Primzahl \lm{ 2^{ω} } im Primzahl-Flächenprodukt von \lm{ \s } ist definitiv sehr viel größer als \lm{ ω }.'."\n".
                    'Die einzelnen und kombinierten Türme aller Primzahlen \lm{ p_{i}^{ω} }, mit \lm{ p_{i} \in \mathbb{P} }, können so nicht als Faktoren in \lm{ ω } enthalten sein.'."\n",
                      'Das aktual unendlich große Primzahlprodukt, dass auf den ersten Blick bleibt, um \lm{ ω } darzustellen, ist schlicht die Zeile, die alle endlichen Primzahlen enthält, und lässt vermuten,'."\n".
                    'dass \lm{ ω ?= 2 \cdot 3 \cdot 5 \cdot 7 \cdot \cdots } ist.'."\n".
                    'Aber auch dieses Produkt erscheint auf den ersten Blick viel größer als die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    'zu sein, die ja mit \lm{ ω } ausgedrückt wird.'."\n".
                    'Jedoch haben wir bei den \italic{›\jumpname{OM:BiOrd:Home}‹} schon erkannt, dass zwischen den endlichen natürlichen Zahlen'."\n".
                    'und \lm{ ω } noch aktual unendlich viele ganze Zahlen liegen und es demnach insgesamt sogar'."\n".
                    '\jump{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}{mehr natürliche Zahlen vor \lm{ ω } gibt, als sein Wert ausdrückt}.'."\n",
                    // 'Es sei denn, die Anzahl der Primzahl unter den natürlichen Zahlen erfüllt weit draußen unter den sehr sehr großen Zahlen'."\n".
                    // 'eine bestimmte Bedingung:'."\n".
                    // 'Es gibt unter den wirklich extrem großen natürlichen Zahlen im Grunde nur noch Primzahlzwillinge?'."\n",
                    //   'Ob diese Bedingung hinreicht, beleuchten wir in der \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung}.'."\n".
                    // 'Auch sollten wir Überlegungen zur Primzahlzwillingsvermutung\color{*Bearb}{(Verweis)} anstellen und bekommen hiermit schon einen Hinweis,'."\n".
                    // 'dass unsere Vermutung stimmen könnte.'."\n".
                      'Im \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Beweis der Primzahlprodukt-Vermutung} gelingt es uns nun zu zeigen,'."\n".
                    'dass wirklich \lm{ ω = 2 \cdot 3 \cdot 5 \cdot 7 \cdot \cdots } gilt.'."\n".
                    ''))),


                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-reell-algebr-Zahlen', text =>

                'Erklärung der Anzahl der reell algebraischen Zahlen durch ihren ontologischen Ursprung in der Struktur der Biordinalzahlen', subline =>
                  'Die Entstehung der negativen reell algebraischen Zahlen durch Rückwärtszählen, ohne Umkehrung der Zählrichtung')),
                  array( 'text', array( text => array(
                    'Die vorstehend gemachten Aussagen sind entscheidend davon abhängig, wieviele endliche ganze Zahlen es gibt.'."\n".
                    'Dies bestimmt zum einen, ob sich wirklich plausibel eine ganze Anzahl an \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen}'."\n".
                    'in \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} } ergibt, sodass wir keinen logischen Bruch und damit einen Widerspruch erhalten.'."\n".
                    'Und damit wird bestimmt, ob wir sagen können, dass \lm{ ω } gemeinsame Teiler mit \lm{ \s } haben muss.'."\n",
                      'Dies ist einer der Gründe, weswegen wir uns mit den Ordinalzahlen\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}}'."\n".
                    'beschäftigt, diese auf die \jump{OM:BiOrd:Home}{Biordinalzahlen} erweitert und ein Stück weit erforscht haben.'."\n".
                    'Darauf basierend haben wir eine \jump{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}{fundamentale Asymmetrie}'."\n".
                    'herausgearbeitet, die der von uns gefundenen und oben verwendeten Anzahl der endlichen ganzen Zahlen'."\n".
                    '\lm{ 2 ω } zugrunde liegt.'."\n",
                      'Diese Anzahl der endlichen ganzen Zahlen ergibt sich wegen der auch im Negativen bleibenden Zählrichtung,'."\n".
                    'die dort ebenfalls in Richtung der größer werdenden und schließlich positiven Zahlen ausgerichtet ist,'."\n".
                    'weil auch die negativen, gar alle Zahlen letztendlich aus dem Zählen hervorgehen.'."\n".
                    'Siehe dazu auch den \italic{›\jumpname{OM:OT:Zaehloperator}‹} in der \italic{›\jumpname{OM:OT:Home}‹}.'."\n".
                    'Dass das Zählen, und damit auch das Prozesshafte, tief in der \jump{OM:SupNum:Arithmetische-Struktur-Geometrie:OntologieDerGeometrie:Ontologische-Unterschied-zwischen-Abstand-und-Anzahl-von-Punkten}{arithmetischen Struktur der Geometrie} verankert ist,'."\n".
                    'haben wir bereits im Abschnitt \italic{›\jumpname{OM:SupNum:Arithmetische-Struktur-Geometrie:OntologieDerGeometrie:Ontologische-Unterschied-zwischen-Abstand-und-Anzahl-von-Punkten}‹} erkannt.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-reell-algebr-Zahlen:X', text =>
                  'Reell algebraische Zahlen bestehen aus Intervallen der Größe Eins', subline =>
                    'Ihr natürlicher Aufbau, der die Zählrichtung sichtbar macht')),
                  array( 'text', array( text => array(
                    'Um auszudrücken, dass jeder negative sinnvolle Koeffizient der Superial-Zahlen Teil eines an einer negativen ganzen Zahl hängenden Zahlenintervalls ist –'."\n".
                    'wobei jedes negative Zahlenintervall jeweils aus einem Zahlenintervall an einer natürlichen, also positiven, Zahl oder der Null entsteht –, berücksichtigen wir'."\n".
                    'im Ansatz die ontologische Vorstellung, dass es sich bei Zahlen quasi um Sägezähne – wie Fähnchen oder spezielle Wellen – von einer Zahl zur nächsten handelt.'."\n".
                    'Diese Sägezähne entsprechen genau den von uns nun betrachteten Zahlenintervallen und hängen in Zählrichtung an allen ganzen Zahlen.'."\n".
                    ''))),

                  array( 'figure',
                    array_merge( $BiOrd_g_figure_ary_GanzeZahlenGerade, array( name => 'OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen'))),

                  array( 'text', array( text => array(
                    'Die negativen Zahlen entstehen also eigentlich nicht durch eine Spiegelung all dieser Sägezähne an der Null, sondern durch deren jeweils einzelne Verschiebung.'."\n".
                    'Bei einer Spiegelung an der Null wäre die Null strukturell gedoppelt – ontologisch redundant –, was keinen Sinn macht,'."\n".
                    'und die Sägezähne drehten sich in ihrer Richtung zum negativen hin um, was ebenfalls unsinnig erscheint, weil es eine Umkehrung der Zählrichtung im Negativen bedeutete, die nicht real ist.'."\n",
                      'Dieser Zusammenhang soll sich ganz korrekt in der Struktur der ersten Formulierung der Entstehung der negativen Sägezahnintervalle von \lm{ \mathbb{A}_{\S}^{-} } ausdrücken,'."\n".
                    'die wir auf Basis der Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z} ansetzen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.G', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}} *)  \\\ \qquad\qquad\qquad\;\,  *[  x = *( n - *( 2 n + 1 *) *) + u  *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Intervalle \lm{ u }, die zwischen den ganzen Zahlen liegen, hängen an der vorstehenden linksseitigen ganzen Zahl und werden auf diese Weise mit verschoben.'."\n".
                    'Daher steht quasi am „Beginn“ der endlichen negativen ganzen Zahlen auch der Punkt einer ganzen Zahl,'."\n".
                    'was eben der Grund dafür ist, dass es eine endliche negative ganze Zahl mehr geben muss, als positive, ohne die Null (siehe \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen}).'."\n".
                    'Denn das Zählen ist die Grundlage aller Zahlen.'."\n",
                      'Wir formen die Verschiebung vereinfachend um und erhalten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.G', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  \mathbb{A}_{\S}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}} *)  \\\ \qquad\qquad\qquad\qquad\quad\;\;\,  *[  x = *( n - 2 n - 1 *) + u  *]  *\}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \mathbb{A}_{\S}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}} *)  \\\ \qquad\qquad\qquad\qquad\quad\;\;\,  *[  x = *( - n - 1 *) + u  *]  *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \mathbb{A}_{\S}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}} *)  \\\ \qquad\qquad\qquad\qquad\quad\,  *[  x = - *( n + 1 *) + u  *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Mit Hilfe der Formeln \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}'."\n".
                    'und \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-N} folgt dann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.G', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# \mathbb{N}  =  ω  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-N}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \# \mathbb{A}_{\S}^{-}  =  \# [ 0, 1 [_{\mathbb{A}_{\S}} \, \cdot \; ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{-}  =  \frac{ \s }{ 2 ω } \; \cdot \; ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{-}  =  \frac{ \s }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies passt dann eben auch zu Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}.'."\n",
                      'So ergibt sich dann schlüssig mit Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.G', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# \mathbb{A}_{\S}  =  \s  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s}', label_incr => false),
                      array( display => 'on',  latex => '{  \# \mathbb{A}_{\S}  =  \# \mathbb{A}_{\S}^{-} \; + \; \# \mathbb{A}_{\S}^{0,+}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{0,+}  =  \# \mathbb{A}_{\S} \; - \; \# \mathbb{A}_{\S}^{-}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{0,+}  =  \s \; - \; \frac{ \s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{0,+}  =  \frac{ \s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{0,+}  =  \# \mathbb{A}_{\S}^{-}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Es gibt also eine quasi Spiegelung der Anzahlen von positiven, mit der Null, und negativen ganzen Zahlen.'."\n",
                      'Die Anzahl der rein positiven Zahlen ist allerdings mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.G', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{+}  =  \# \mathbb{A}_{\S}^{-} - 1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'eine weniger, als die der negativen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-reell-algebr-Zahlen:X', text =>
                  'Die Spiegelung der Entitäten und der Mittelwert der reell algebraischen Zahlen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Jedoch, die langläufige stillschweigende Annahme der Spiegelung der Werte der \italic{ganzen Zahlen} an der Null und ihr Mittelwert Null sind nicht korrekt.'."\n".
                    'Die Spiegelung der Werte aller \italic{ganzen Zahlen} findet bei \lm{ -½ } statt, wie wir in der \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen} erkennen.'."\n".
                    'Die Summe aller  \italic{ganzen Zahlen} und ihr Mittelwert sind nach den Formeln \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z} und \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Mittelwert-z}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.G', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall z \in \mathbb{Z}} z  =  - ω  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}', label_incr => false),
                      array( display => 'on', latex => '{  \frac{ \sum_{ \forall z \in \mathbb{Z}} z }{ \# \mathbb{Z} }  =  - \frac{ 1 }{ 2 }  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Mittelwert-z}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen, es kann leicht der falsche Eindruck einer Spiegelung der Entitäten der ganzen Zahlen an der Null entstehen,'."\n".
                    'wenn wir uns nicht differenziert mit dem Muster und der Bedeutung des Zählens bis ins aktual unendliche auseinander setzen.'."\n".
                    'Demnach sind wir sicher, dass die \jump{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}{Anzahl der endlichen ganzen Zahlen}'."\n".
                    'wirklich \lm{ 2 ω } ist.'."\n",
                      'Wie ist es nun bezüglich der Summe und des Mittelwerts aller reell algebraischen Zahlen?'."\n".
                    'Diese können wir nur verstehen, wenn wir die Intervalle zwischen den ganzen Zahlen explizit berücksichtigen und durch Dranhängen an die ganzen Zahlen visualisieren.'."\n",
                      'So erhalten wir für die Summe aller reell algebraischen Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.G', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  \sum_{ \forall z \in \mathbb{Z}} \; \sum_{ \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}}} \!\!\!\! z + u  }'),
                      array( display => 'off', latex => '{  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  \sum_{ \forall z \in \mathbb{Z}} \; *( \sum_{ \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}}} \!\!\!\! z  \;\; + \!  \sum_{ \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}}} \!\!\!\! u *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  \sum_{ \forall z \in \mathbb{Z}} *( z \cdot \# [ 0, 1 [_{\mathbb{A}_{\S}}  \;\; + \!  \sum_{ \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}}} \!\!\!\! u *)  }'),
                      array( display => 'off', latex => '{  \sum_{ \forall u \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! u  =  \frac{ x^{2} \cdot \s }{ 4 ω } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}', label_incr => false),
                      array( display => 'off', latex => '{  x  =  1  }'),
                      array( display => 'off', latex => '{  \Rightarrow  \sum_{ \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}}}  \!\! u  =  \frac{ 1^{2} \cdot \s }{ 4 ω } - \frac{ 1 }{ 2 }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}}}  \!\! u  =  \frac{ \s }{ 4 ω } - \frac{ 1 }{ 2 }  }'),
                      array( display => 'off', latex => '{  \Rightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  \sum_{ \forall z \in \mathbb{Z}} *( z \cdot \# [ 0, 1 [_{\mathbb{A}_{\S}}  \; + \;  \frac{ \s }{ 4 ω } - \frac{ 1 }{ 2 } *)  }'),
                      array( display => 'off', latex => '{  \# [ 0, 1 [_{\mathbb{A}_{\S}}  =  \frac{ \s }{ 2 ω }  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}', label_incr => false),
                      array( display => 'off', latex => '{  \Rightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  \sum_{ \forall z \in \mathbb{Z}} *( z \cdot \frac{ \s }{ 2 ω }  \; + \;  \frac{ \s }{ 4 ω } - \frac{ 1 }{ 2 } *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  \sum_{ \forall z \in \mathbb{Z}} z \cdot \frac{ \s }{ 2 ω }  \; + \;  \sum_{ \forall z \in \mathbb{Z}} *( \frac{ \s }{ 4 ω } - \frac{ 1 }{ 2 } *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  \sum_{ \forall z \in \mathbb{Z}} z \cdot \frac{ \s }{ 2 ω }  \; + \;  \# \mathbb{Z} \cdot *( \frac{ \s }{ 4 ω } - \frac{ 1 }{ 2 } *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  \sum_{ \forall z \in \mathbb{Z}} z \cdot \frac{ \s }{ 2 ω }  \; + \;  2 ω \cdot *( \frac{ \s }{ 4 ω } - \frac{ 1 }{ 2 } *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  \sum_{ \forall z \in \mathbb{Z}} z \cdot \frac{ \s }{ 2 ω }  \; + \;  \frac{ 2 ω \cdot \s }{ 4 ω }  \; - \;  \frac{ 2 ω }{ 2 }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  \sum_{ \forall z \in \mathbb{Z}} z \cdot \frac{ \s }{ 2 ω }  \; + \;  \frac{ \s }{ 2 }  \; - \;  ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  \frac{ \s }{ 2 ω } \; \cdot \sum_{ \forall z \in \mathbb{Z}} z  \; + \;  \frac{ \s }{ 2 }  \; - \;  ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  - ω \cdot \frac{ \s }{ 2 ω }  \; + \;  \frac{ \s }{ 2 }  \; - \;  ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  - \frac{ \s }{ 2 }  \; + \;  \frac{ \s }{ 2 }  \; - \;  ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall a \in \mathbb{A}_{\S}} a  =  -ω  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Anteile der positiven und negativen Sägezähne heben sich auf und es bleibt einfach die Summe aller ganzen Zahlen übrig.'."\n".
                    'Sehr interessant und beim Einmal-drüber-nachdenken plausibel.'."\n",
                      'Der Mittelwert aller reell algebraischen Zahlen ergibt sich mit Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s} dann zu'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.G', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ \sum_{ \forall a \in \mathbb{A}_{\S}} a }{ \# \mathbb{A}_{\S} }  =  - \frac{ ω }{ \s }  }'),
                      array( display => 'off', latex => '{  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ \sum_{ \forall a \in \mathbb{A}_{\S}} a }{ \# \mathbb{A}_{\S} }  =  - \frac{ ω }{ ω^{ω} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \frac{ \sum_{ \forall a \in \mathbb{A}_{\S}} a }{ \# \mathbb{A}_{\S} }  =  - ω \cdot ω^{-ω}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \frac{ \sum_{ \forall a \in \mathbb{A}_{\S}} a }{ \# \mathbb{A}_{\S} }  =  - ω^{-ω + 1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ \sum_{ \forall a \in \mathbb{A}_{\S}} a }{ \# \mathbb{A}_{\S} }  =  - ω^{- *( ω - 1 *)}  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'was auch verständlich ist, denn der quasi letzte positive Sägezahn steht ja im Positiven über die quasi letzte ganze Zahl hinaus,'."\n".
                    'wie wir in \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen} sehen.'."\n".
                    'Nur der Abstand zum quasi letzen fehlenden Punkt bringt ein negatives Ungleichgewicht hinein,'."\n".
                    'dass allerdings unendlich klein ausfällt, wie wir in Bild und Wert erkennen können.'."\n",
                      'Diese Summe kennen wir aus Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-ueber-alle-superial-kleine-ganze-SuperialZahlen}'."\n".
                    'in etwas anderer Form schon aus dem Abschnitt \italic{›\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Summen-zur-Integration-von-2x-plus-supkl-Eins}‹}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.G', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall z \in \mathbb{S}^{-1}_{Z,\{ 0 \}}} \!\!\! z  =  \sum_{ \forall z \in \s^{-1} \mathbb{Z}}  z  =  \sum_{ \forall z \in \mathbb{Z}}  z \cdot \s^{-1}  =  \frac{ -ω }{ \s }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-ueber-alle-superial-kleine-ganze-SuperialZahlen}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ \sum_{ \forall a \in \mathbb{A}_{\S}} a }{ \# \mathbb{A}_{\S} }  =  \sum_{ \forall z \in \mathbb{Z}}  z \cdot \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wie dies zu deuten und zu verstehen ist, müssen wir noch herausfinden.'."\n".
                    'Es erscheint mir aber sehr interessant.'."\n".
                    ''))),


                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung', text =>

                'Die superiale Basis \lm{ \s } hat bezüglich der Struktur des Aktual-Unendlichen eine bemerkenswerte doppelte Bedeutung', subline =>
                  '')),
                      
                  /* array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Bemerkenswerte Doppelung}',
                    '• Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s} zeigt uns mit \lm{ \# \mathbb{A}_{\S} = \s }, dass die Menge aller sinnvollen Koeffizienten der Superial-Zahlen die gleiche Anzahl enthalten muss, wie die Menge der superial kleinen ganzen Zahlen von der Null bis ohne die Eins \lm{ \# *( \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} *) = \s }.',
                    '– Dabei gibt es in der Menge \lm{ \mathbb{A}_{\S} } nur endliche Werte, während in der Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } die weit überwiegende Mehrheit der Elemente aktual unendlich kleine Summanden trägt.',
                    '– Es ist, als wenn in der Geometrie die Anzahl \lm{ \s } an Entitäten – Existenzen – im endlichen in der Menge \lm{ \mathbb{A}_{\S} } nicht dichter gepackt werden kann. Beim Versucht, die gleiche Anzahl an Entitäten auf kleineren Raum, also enger, zu packen, wie bei \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} }, müssen dann Anteile aktual unendlich kleiner Summanden herausfallen.',
                    '⋅ Dies passt zu \italic{›\jumpname{OM:SupNum:Arithmetische-Struktur-Geometrie}‹}.',
                    '⋅ Dies würde auch zur \italic{›\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung}‹} und zur \italic{›\jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung}‹} passen.',
                    ))), */
                      
                  array( 'text', array( text => array(
                    'Bezüglich der Anzahl von Zahlen in Mengen kommt die superiale Basis \lm{ \s } in zwei sehr ähnlichen und doch ganz unterschiedlichen Zusammenhängen vor,'."\n".
                    'die in der Gegenüberstellung aufhorchen lassen und nachdenklich machen können.'."\n".
                    'Eine bemerkenswerte Doppelung, wie ich finde, wo die eine Seite schließlich perfekt in die andere Seite greift.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung:X', text =>
                  'Eine bemerkenswerte Doppelung', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s} zeigt uns mit \lm{ \# \mathbb{A}_{\S} = \s },'."\n".
                    'dass die Menge aller \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen} die gleiche Anzahl an Elementen enthalten muss,'."\n".
                    'wie die Menge der superial kleinen ganzen Zahlen von der Null bis ohne die Eins \lm{ \# \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} = \s }.'."\n".
                    'Die superial kleinen ganzen Zahlen und diese Formel ihrer Anzahl ergeben sich aus der \jump{OM:SupNum:Arithmetische-Struktur-Geometrie:Vortext:Abgeschlossenheit-Teilung-Strecke-Eins-in-s-Teile}{arithmetischen Struktur der Geometrie}'."\n".
                    'durch die Erkenntnis, dass die Teilung der Strecke zwischen Null und Eins in \lm{ \s } Teile zu \lm{ \s } Teilstrecken der Länge \lm{ \s^{-1} } führen muss.'."\n",
                      'Interessant ist im Vergleich, dass in der Menge \lm{ \mathbb{A}_{\S} } nur endliche Werte existieren, während in der Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} }'."\n".
                    'die weit überwiegende Mehrheit der Elemente aktual unendlich kleine Summanden beinhaltet.'."\n".
                    'Denn bei der Teilung der Strecke zwischen Null und Eins entsteht dadurch die Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } der Punkte zwischen den Teilstrecken,'."\n".
                    'die Adressierbar sind und deren benachbarte Punkte jeweils den Abstand beziehungsweise die Differenz \lm{ \s^{-1} } haben, was nur mit aktual unendlich kleinen Summand dieser Differenz beschreibbar ist.'."\n",
                      'Es ist, als wenn in der Geometrie die Anzahl \lm{ \s } an Entitäten – Existenzen – im endlichen auf einer endlosen Geraden, die den Zahlen der Menge \lm{ \mathbb{A}_{\S} } entsprechen,'."\n".
                    'nicht dichter gepackt werden kann.'."\n".
                    'Bei dem Versucht, die gleiche Anzahl an Entitäten auf kleinerem Raum – also dichter oder enger – zu packen, so, wie dies bei \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } geschieht,'."\n".
                    'müssen folglich Anteile aktual unendlich kleiner Summanden herausfallen.'."\n".
                    'Diese aktual unendlich kleinen Summanden, sind ganze Zahlen im superial Kleinen.'."\n",
                      'Die Zahlen der Menge \lm{ \mathbb{A}_{\S} }, können – zumindest im Rahmen der Superial-Zahlen – als die maximal dichten Zahlen unserer endlichen Zahlengeraden'."\n".
                    'verstanden werden. also als die Grundlage unserer Geometrie im Endlichen.'."\n",
                      'Die superial kleinen ganzen Zahlen der Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } und deren Erweiterung auf den ganzen Zahlenstrahl,'."\n".
                    'spielen dann eine zentrale Rolle in der neuen \jump{OM:SupNum:Ableitungen-Integrale}{Differenzialrechnung} auf Basis von Superial-Zahlen.'."\n".
                    'Das tun sie zum einen in den Differenzen der Ableitung und sodann auch, zum anderen, bei der Integration, wo die superial kleinen ganzen Zahlen'."\n".
                    'als Indizes der Summenglieder auftreten.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung:X', text =>
                  'Existenz der maximalen Dichte der Zahlengeraden', subline =>
                    'Mit endlichen Koordinatenwerten, also ohne aktual unendlich kleine Summanden')),
                  array( 'text', array( text => array(
                    'Die eben entwickelte Vorstellung, dass eine weitere Verdichtung der maximaldichten rein endlichen Zahlengeraden zum „herausfallen“ aktual unendlich kleiner ganzer Summanden führt,'."\n".
                    'passt, wie oben gesagt, genau zu unserer Feststellung auf der Seite \italic{›\jumpname{OM:SupNum:Arithmetische-Struktur-Geometrie}‹}.'."\n",
                      'Dort teilen wir die Strecke von der Null bis zur Eins mit Hilfe unserer endlichen Primzahlen jeweils bis zur Potenz der vollständigen Induktion \lm{ ω }.'."\n".
                    'Wobei wir feststellen, dass wir diese Strecke nicht sinnvoll noch feiner mit Hilfe endlicher Primzahlen teilen können,'."\n".
                    'weil wir so bereits am Beginn einer aktual unendlichen fraktalen Wiederholung der arithmetischen Struktur der Geometrie angekommen sind.'."\n",
                      'So erkennen wir dann auch durch den Beweis der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung},'."\n".
                    'dass wir mit dem \jump{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}{Primzahl-Flächenprodukt \lm{ \s }}, der \lm{ ω }-ten Potenz aller endlichen Primzahlen,'."\n".
                    'bei der Teilung durch \lm{ \s } eine Feinheit der Teile erreichen,'."\n".
                    'die nachweislich auch alle durch Radikale darstellbaren reell algebraischen Zahlen umfasst, also auch die irrationalen Wurzeln, wie beispielsweise \lm{ \sqrt{ 2 } }, \lm{ \sqrt{ 5 } } oder den Goldenen Schnitt \lm{ φ = \frac{ \sqrt{ 5 } + 1 }{ 2 } },'."\n".
                    'wenn nicht sogar \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{alle reell algebraischen Zahlen}.'."\n",
                      'Dies könnte in meinen Augen eben auch „mathematisch perfekt“ zur \italic{›\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung}‹}'."\n".
                    'und zur \italic{›\jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung}‹} passen, die ja beide noch zu beweisen sind.'."\n".
                    'Es passte deshalb sehr gut, weil hinter diesen Vermutungen steht, dass die Trennlinie zwischen den Fraktalebenen der Superial-Zahlen im Grunde auch'."\n".
                    'der Trennlinie zwischen den reell algebraischen Zahlen und den transzendenten Zahlen entspricht.'."\n".
                    'Das würde also gut die bekannte Aufteilung der Zahlenmengen und deren Trennung ontologisch klar und verständlich erklären.'."\n",
                      'Und auch die Einblicke in die Zusammenhänge zwischen ganzen und reell algebraischen Zahlen vertieften sich deutlich und klar.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung:X', text =>
                  'Tiefer Zusammenhang zwischen den Primzahlen und den reell algebraischen Zahlen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Da die Menge \lm{ \mathbb{A}_{\S} } nach unserem \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{Beweis unserer Algebraischen-Koeffizienten-Vermutung} tatsächlich der Menge aller reell algebraischen Zahlen \lm{ \mathbb{A}_{\R} } gleich ist,'."\n".
                    'werden die reell algebraischen Zahlen in eine sehr enge existenzielle Beziehung mit den endlichen Primzahlen gebracht, die ich bisher so noch nicht gesehen habe'."\n".
                    'und diese gibt Anlass zu der Annahme, dass wir sie in Zukunft noch detaillierter formulieren können.'."\n",
                      'Klar ist schon, dass das Raster des Primzahl-Flächenproduktes von \lm{ \s } aufs engste mit den sinnvollen Koeffizienten'."\n".
                    'der Superial-Zahlen \lm{ \mathbb{A}_{\S} } – und, wenn \lm{ \mathbb{A}_{\S} ?= \mathbb{A}_{\R} }, mit den reell algebraischen Zahlen \lm{ \mathbb{A}_{\R} } – verwoben ist.'."\n".
                    'Denn alle \lm{ a \cdot \s }, mit \lm{ a \in \mathbb{A}_{\S} }, müssen nach Formel \jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-exist-As} ganze Zahl sein,'."\n".
                    'siehe \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvolle Koeffizienten der Superial-Zahlen}.'."\n".
                    'Dies ist ein fundamentaler Zusammenhang, der weitere Erkenntnisse erwarten lässt.'."\n",
                      'Der Beweis der Überrationalitätsvermutung zeigt beispielsweise für'."\n".
                    '\lm{ a = *| \sqrt{2} \,|* = \frac{ *| \sqrt{2} \,|* \cdot 2^{ω} }{ 2^{ω} } = \frac{ 2^{\frac{1}{2}} \cdot 2^{ω} }{ 2^{ω} } = \frac{ 2^{ω + \frac{1}{2}} }{ 2^{ω} } }, anhand dieses ganzzahligen Bruchs, dass \lm{ *| \sqrt{2} \,|* \cdot \s } eine ganze Zahl ist.'."\n".
                    'Und zwar, weil \lm{ *| \sqrt{2} \,|* \cdot 2^{ω} } eine ganze Zahl ist, ebenso wie \lm{ \s }, dessen Primzahl-Flächenprodukt ja auch den Faktor \lm{ 2^{ω} } enthält.'."\n".
                    'Deshalb ist \lm{ *| \sqrt{2} \,|* } ein sinnvoller Koeffizient und es gilt \lm{ *| \sqrt{2} \,|* \in \mathbb{A}_{\S} }.'."\n".
                    'Schon hierin liegen einige erstaunliche neue Erkenntnisse, die bisher offenbar unbekannt waren.'."\n".
                    'Denn wir lernen beim Beweis der Überrationalitätsvermutung zum Beispiel, wie wir irrationale Wurzeln durch Brüche mit aktual unendlichen Quotienten, von mir überrationale Brüche genannt, darstellen können.'."\n".
                    'Und wir lernen, auch, wenn das Kürzen eines überrationalen Bruchs möglich ist, kann es dazu führen, dass wir eine gesuchte Lösung nicht finden können, wenn wir es tun.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung:X', text =>
                  'Die Ähnlichkeit beider Mengen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Die Mengen werden beide mit sehr ähnlichen Definitionen beschrieben, an denen wir auch recht schnell erkennen können,'."\n".
                    'dass sie tatsächlich die gleiche Anzahl an Elementen beinhalten müssen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  =  \\\ \qquad *\{  x  *|*  *( \forall z \in \mathbb{Z} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}} *)  *[  x = z + u  *]  *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z}', label_incr => false),
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}_{\N}^{-1}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} n \cdot \s^{-1}  &  \text{ falls } a = 0  \\\\  a + z \cdot \s^{-1}  &  \text{ falls } 0 < a < 1  \\\\  1 + z^{-} \cdot \s^{-1}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Menge in ihrer Normalform, nur mit endlichen natürlichen Zahlen bis ohne \lm{ \s }, also bis ins aktual unendlich Große, gezählt,'."\n".
                    'sieht dann so aus, nur zur Verdeutlichung:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, \s[_{\mathbb{S}_{\N}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < 1  \\\\  \s + z^{-}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{In Stellenwert-Notation …}',
                TitleVis => 'In Stellenwert-Notation:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}_{\N}^{-1}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} .*〈 n *〉  &  \text{ falls } a = 0  \\\\  *〈 a *〉.*〈 z *〉  &  \text{ falls } 0 < a < 1  \\\\  *〈 1 *〉.*〈 z^{-} *〉  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Menge in ihrer Normalform, nur mit endlichen natürlichen Zahlen bis ohne \lm{ \s }, also bis ins aktual unendlich Große, gezählt,'."\n".
                    'sieht dann so aus, nur zur Verdeutlichung:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, \s[_{\mathbb{S}_{\N}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  *〈 a *〉*〈 z *〉.  &  \text{ falls } 0 < a < 1  \\\\  *〈 1 *〉*〈 z^{-} *〉.  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }'),
                    ))),

                    ))),

                  array( 'text', array( text => array(
                    'Wobei die Elemente der Mengen dann konkret in Ausschnitten folgendermaßen aussehen, wenn \lm{ φ } der Goldene Schnitt ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  φ  =  \frac{ \sqrt{ 5 } + 1 }{ 2 }  }'),
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}_{\N}^{-1}}  =  \\\  \quad *\{  \quad\,  0, \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{1}{2} - 2 \s^{-1},\; \tfrac{1}{2} - \s^{-1},\; \tfrac{1}{2},\; \tfrac{1}{2} + \s^{-1},\; \tfrac{1}{2} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{φ}{2} - 2 \s^{-1},\; \tfrac{φ}{2} - \s^{-1},\; \tfrac{φ}{2},\; \tfrac{φ}{2} + \s^{-1},\; \tfrac{φ}{2} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{2}{3} - 2 \s^{-1},\; \tfrac{2}{3} - \s^{-1},\; \tfrac{2}{3},\; \tfrac{2}{3} + \s^{-1},\; \tfrac{2}{3} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{2}}{2} - 2 \s^{-1},\; \tfrac{\sqrt{2}}{2} - \s^{-1},\; \tfrac{\sqrt{2}}{2},\; \tfrac{\sqrt{2}}{2} + \s^{-1},\; \tfrac{\sqrt{2}}{2} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{5}}{3} - 2 \s^{-1},\; \tfrac{\sqrt{5}}{3} - \s^{-1},\; \tfrac{\sqrt{5}}{3},\; \tfrac{\sqrt{5}}{3} + \s^{-1},\; \tfrac{\sqrt{5}}{3} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, 1 - 3 \s^{-1}, 1 - 2 \s^{-1}, 1 - \s^{-1}   \quad *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Menge in ihrer Normalform, nur mit endlichen natürlichen Zahlen bis ohne \lm{ \s }, also bis ins aktual unendlich Große, gezählt,'."\n".
                    'sieht dann so aus, nur zur Verdeutlichung:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, \s[_{\mathbb{S}_{\N}}  =  \\\  \quad *\{  \quad\,  0, 1, 2, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{1}{2} \s - 2,\; \tfrac{1}{2} \s - 1,\; \tfrac{1}{2} \s,\; \tfrac{1}{2} \s + 1,\; \tfrac{1}{2} \s + 2, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{φ}{2} \s - 2,\; \tfrac{φ}{2} - \s^{-1},\; \tfrac{φ}{2} \s,\; \tfrac{φ}{2} \s + 1,\; \tfrac{φ}{2} \s + 2, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{2}{3} \s - 2,\; \tfrac{2}{3} \s - 1,\; \tfrac{2}{3} \s,\; \tfrac{2}{3} \s + 1,\; \tfrac{2}{3} \s + 2, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{2}}{2} \s - 2,\; \tfrac{\sqrt{2}}{2} \s - 1,\; \tfrac{\sqrt{2}}{2} \s,\; \tfrac{\sqrt{2}}{2} \s + 1,\; \tfrac{\sqrt{2}}{2} \s + 2, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{5}}{3} \s - 2,\; \tfrac{\sqrt{5}}{3} \s - 1,\; \tfrac{\sqrt{5}}{3} \s,\; \tfrac{\sqrt{5}}{3} \s + 1,\; \tfrac{\sqrt{5}}{3} \s + 2, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, \s - 3, \s - 2, \s - 1   \quad *\}  }'),
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{In Stellenwert-Notation …}',
                TitleVis => 'In Stellenwert-Notation:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}_{\N}^{-1}}  =  \\\  \quad *\{  \;\;\;\,  .*〈 0 *〉,\; .*〈 1 *〉,\; .*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{1}{2} *〉.*〈 -2 *〉,\; *〈 \tfrac{1}{2} *〉.*〈 -1 *〉,\; \tfrac{1}{2},\; *〈 \tfrac{1}{2} *〉.*〈 1 *〉,\; *〈 \tfrac{1}{2} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{φ}{2} *〉.*〈 -2 *〉,\; *〈 \tfrac{φ}{2} *〉.*〈 -1 *〉,\; \tfrac{φ}{2},\; *〈 \tfrac{φ}{2} *〉.*〈 1 *〉,\; *〈 \tfrac{φ}{2} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{2}{3} *〉.*〈 -2 *〉,\; *〈 \tfrac{2}{3} *〉.*〈 -1 *〉,\; \tfrac{2}{3},\; *〈 \tfrac{2}{3} *〉.*〈 1 *〉,\; *〈 \tfrac{2}{3} *〉.*〈2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 -2 *〉,\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 -1 *〉,\; \tfrac{\sqrt{2}}{2},\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 1 *〉,\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{\sqrt{5}}{3} *〉.*〈 -2 *〉,\; *〈 \tfrac{\sqrt{5}}{3} *〉.*〈 -1 *〉,\; \tfrac{\sqrt{5}}{3},\; *〈 \tfrac{\sqrt{5}}{3} *〉.*〈 1 *〉,\; *〈 \tfrac{\sqrt{5}}{3} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, *〈 1 *〉.*〈 -3 *〉,\; *〈 1 *〉.*〈 -2 *〉,\; *〈 1 *〉.*〈 -1 *〉   \quad *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Menge in ihrer Normalform, nur mit endlichen natürlichen Zahlen bis ohne \lm{ \s }, also bis ins aktual unendlich Große, gezählt,'."\n".
                    'sieht dann so aus, nur zur Verdeutlichung:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, \s[_{\mathbb{S}_{\N}}  =  \\\  \quad *\{  \;\;\;\,  0,\; 1,\; 2, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{1}{2} *〉*〈 -2 *〉.,\; *〈 \tfrac{1}{2} *〉*〈 -1 *〉.,\; *〈 \tfrac{1}{2} *〉_{1},\; *〈 \tfrac{1}{2} *〉*〈 1 *〉.,\; *〈 \tfrac{1}{2} *〉*〈 2 *〉., \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{φ}{2} *〉*〈 -2 *〉.,\; *〈 \tfrac{φ}{2} *〉*〈 -1 *〉.,\; *〈 \tfrac{φ}{2} *〉_{1},\; *〈 \tfrac{φ}{2} *〉*〈 1 *〉.,\; *〈 \tfrac{φ}{2} *〉*〈 2 *〉., \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{2}{3} *〉*〈 -2 *〉.,\; *〈 \tfrac{2}{3} *〉*〈 -1 *〉.,\; *〈 \tfrac{2}{3} *〉_{1},\; *〈 \tfrac{2}{3} *〉*〈 1 *〉.,\; *〈 \tfrac{2}{3} *〉*〈2 *〉., \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{\sqrt{2}}{2} *〉*〈 -2 *〉.,\; *〈 \tfrac{\sqrt{2}}{2} *〉*〈 -1 *〉.,\; *〈 \tfrac{\sqrt{2}}{2} *〉_{1},\; *〈 \tfrac{\sqrt{2}}{2} *〉*〈 1 *〉.,\; *〈 \tfrac{\sqrt{2}}{2} *〉*〈 2 *〉., \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{\sqrt{5}}{3} *〉*〈 -2 *〉.,\; *〈 \tfrac{\sqrt{5}}{3} *〉*〈 -1 *〉.,\; *〈 \tfrac{\sqrt{5}}{3} *〉_{1},\; *〈 \tfrac{\sqrt{5}}{3} *〉*〈 1 *〉.,\; *〈 \tfrac{\sqrt{5}}{3} *〉*〈 2 *〉., \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, *〈 1 *〉*〈 -3 *〉.,\; *〈 1 *〉*〈 -2 *〉.,\; *〈 1 *〉*〈 -1 *〉.   \quad *\}  }'),
                    ))),

                    ))),

                  array( 'text', array( text => array(
                    'Auffällig ist, dass bei der Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } zu Beginn und am Ende'."\n".
                    'die ganzen Zahlen \lm{ \mathbb{Z} } in \lm{ \mathbb{N} } und \lm{ \mathbb{Z}^{-} } aufgespalten sind und mitten drinne ganz \lm{ \mathbb{Z} }'."\n".
                    'unendlich oft durchläuft, jedoch \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} } nur ein Mal durchlaufen wird.'."\n",
                      'Während die ganzen Zahlen \lm{ \mathbb{Z} } bei \lm{ \mathbb{A}_{\S} } nur ein Mal komplett durchlaufen werden.'."\n".
                    'Die Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} } wird jedoch unendlich oft durchlaufen.'."\n",
                      'Wenn nun aber beide Mengen die gleiche Anzahl an Elementen, sprich Zahlen, haben, dann stellt sich die Frage,'."\n".
                    'ob und wie wir die Mengen aufeinander abbilden können.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung:X', text =>
                  'Die Bedeutung beider Mengen im Stellenwertsystem der Superial-Zahlen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Die Menge \lm{ \mathbb{A}_{\S} } steht im \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystem}\footnote{\const{SupNum_g_footnote_text_Stellenwertsystem}}'."\n".
                    'der Superial-Zahlen für alle sinnvollen Koeffizienten,'."\n".
                    'dann entspricht die Anzahl ihrer Elemente quasi der Anzahl der möglichen Ziffern, nämlich \lm{ \s }.'."\n".
                    'Da macht es natürlich Sinn, dass es genau so viele Ziffern gibt, wie die Basis des Stellenwertsystems, also ebenfalls \lm{ \s }.'."\n".
                    'Dies ist bei anderen Stellenwertsystemen ebenso.'."\n".
                    'Beispielsweise gibt es im Zehnersystem genau zehn Ziffern.'."\n".
                    'Allerdings sind in der Menge \lm{ \mathbb{A}_{\S} } nicht nur natürliche Zahlen, wie bei den „gewöhnlichen“ Stellenwertsystemen,'."\n".
                    'sondern die meisten sind gebrochen und es sind sogar auch die negativen dabei.'."\n",
                      'Gleichzeitig ist die Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } in ihrer Normalform'."\n".
                    '\lm{ \lbrack 0, \s \lbrack_{\mathbb{S}_{\N}} } die Grundlage des Zählens von \lm{ \s } vielen, auch aktual unendlichen natürlichen Zahlen von Null bis ohne \lm{ \s }.'."\n".
                    'Dies entspricht in gewisser Weise ganzen Ziffern des Stellenwertsystems der Superial-Zahlen.'."\n".
                    'Allerdings sind diese natürlichen Superial-Zahlen nicht die Koeffizienten des Stellenwertsystemens,'."\n".
                    'wie wir es beispielsweise aus dem Zehnersystem für die ersten zehn Ziffern kennen.'."\n".
                    'Dies kommt, weil bei den natürlichen Superial-Zahlen keine reinen Ziffern, sondern beim Übergang ins Aktual-Unendliche selber schon'."\n".
                    'gemischte Zahlen im Sinne des Stellenwertsystems, wie beispielsweise \lm{ *〈 ⅔ *〉*〈 7 *〉. = ⅔ \s + 7 }, auftreten.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung:X', text =>
                  'Die wirkliche Außergewöhnlichkeit des Stellenwertsystems der Superial-Zahlen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Die sinnvollen Koeffizienten und das natürliche Zählen fallen bei den Superial-Zahlen auseinander und passen gleichzeitig so auch perfekt ineinander.'."\n".
                    'Es erscheint ein wenig wie ein Wunder, dass beides exakt einander entspricht, ja entsprechen muss.'."\n",
                      'Diese Zwittrigkeit oder Zwitternatur der Anzahl \lm{ \s } in den ihr entsprechenden wichtigen Mengen unseres neuen Stellenwertsystemens,'."\n".
                    'welche keine Widersprüchlichkeit ist, sondern in sich vollständig plausibel, machen es so außergewöhnlich.'."\n".
                    'Dadurch bekommt es die Eigenschaften, die wir für die Beschreibung der Geometrie brauchen, um schließlich auch Differenzialrechnung darin zu betreiben.'."\n",
                      'Fragen die bleiben sind:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\color{*Entwick}{Können wir noch besser verstehen, warum das so ist oder sein muss?}',
                        '\color{*Entwick}{Hat diese Doppelung eventuell eine Verbindung zur analytischen Fortsetzung von Funktionen und damit zur Riemannschen Vermutung\footnote{\const{SupNum_g_footnote_text_RiemannschenVermutung}}?}',
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung:Mengen-aufeinander-linear-abbildbar',
                Title => 'Experimentell: Sind beide Mengen aufeinander linear abbildbar? …',
                TitleVis => 'Experimentell: Sind beide Mengen aufeinander linear abbildbar?', ParagraphList => array(

                  array( 'text', array( text => array(
                    'Naiv können wir einmal annehmen, da die Werte beider Mengen offenbar nicht nur wohlgeordnet sind, sondern auch'."\n".
                    'alle je in ihrer Menge die gleichen Abstände untereinander haben, dass sie vielleicht rein durch Verschiebung und einen Faktor'."\n".
                    'Element für Element ihrer Reihenfolge nach aufeinander abgebildet werden können.'."\n".
                    'Weil der Wertebereich von \lm{ \mathbb{A}_{\S} } nun \lm{ 2 ω } mal so groß ist, wie der von \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} },'."\n".
                    'und um die Mitte zentriert, womit wir als Ansatz eine Verschiebung um \lm{ - ½ } annehmen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  ?=  \\\ \qquad *\{  y  *|*  *( \forall n \in [0, 1[_{\mathbb{S}_{\N}^{-1}} *)  *[  y = *( n - \frac{ 1 }{ 2 } *) \cdot 2 ω  *]  *\}  }',
                                          label_text => 'X', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Betrachten wir als erstes die Grenzbereiche dieser versuchten Mengendefinition.'."\n".
                    'Die linksseitige Grenze ist in der Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } die Null und wird durch den neuen Definitionsversuch zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  y  =  *( 0 - \frac{ 1 }{ 2 } *) \cdot 2 ω  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  y  =  - \frac{ 1 }{ 2 } \cdot 2 ω  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  y  =  - ω  }',
                                          label_text => 'X', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Hier sehen wir, dass die linksseitige Grenze Null zu \lm{ - ω } wird, was aber kein Element von \lm{ \mathbb{A}_{\S} } ist.'."\n",
                      'Die rechtsseitige Grenze \lm{ 1 - \s^{-1} } wird zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  y  =  *( *( 1 - \s^{-1} *) - \frac{ 1 }{ 2 } *) \cdot 2 ω  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  y  =  *( \frac{ 1 }{ 2 } - \s^{-1} *) \cdot 2 ω  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  y  =  2 ω \frac{ 1 }{ 2 } - 2 ω \s^{-1}  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  y  =  ω - 2 ω \s^{-1}  }',
                                          label_text => 'X', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die rechtsseitige Grenze \lm{ 1 - \s^{-1} } wird zu \lm{ ω - 2 ω \s^{-1} }, was auch kein Element von \lm{ \mathbb{A}_{\S} } ist.'."\n".
                    'Beide Grenzen werden zu aktual unendlich großen Werten, aber \lm{ \mathbb{A}_{\S} } enthält nur endliche Werte.'."\n",
                      'Was wird aus dem mittleren Wert?'."\n".
                    'Was ist der mittlere Wert?'."\n".
                    'Wir nehmen mal an, es ist \lm{ ½ }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  y  =  *( \frac{ 1 }{ 2 } - \frac{ 1 }{ 2 } *) \cdot 2 ω  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  y  =  0 \cdot 2 ω  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  y  =  0  }',
                                          label_text => 'X', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Der mittlere Wert \lm{ ½ } wird zu Null.'."\n".
                    'Doch Null ist vermutlich nicht der mittlere Wert von \lm{ \mathbb{A}_{\S} }, denn der Mittelpunkt von \lm{ \# \mathbb{Z} } ist \lm{ - ½ }.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n",
                      'Das Problem scheint …'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung:X', text =>
                  'Gleich mächtig, aber nur bedingt abbildbar …', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Die Elemente beider Mengen sind nicht nach ihrer Größe geordnet aufeinander abbildbar, sondern nur,'."\n".
                    'wenn wir ihre Reihenfolge verändern ???'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                    ))),

                  /* array( 'text', array( text => array(
                    'Als wir die \jump{OM:SupNum:Arithmetische-Struktur-Geometrie}{arithmetische Struktur der Geometrie} untersuchten,'."\n".
                    'haben wir eine Definition der superialen Basis \lm{ \s } durch die vollständige'."\n".
                    'Teilung der Strecke von der Null bis zur Eins durch alle Primzahlen und deren Potenzen und Kombinationen gefunden.'."\n".
                    'Vollständige Teilung soll hier bedeuten vollständig durch alle endlichen Primzahlen und'."\n".
                    'vollständig induktiv durch alle ihre endlichen Potenzen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Eine sehr bemerkenswerte Doppelung in Bezug auf \lm{ \s }} \\\\'."\n".
                    'Unsere superiale Basis \lm{ \s } kommt nun in zwei etwas unterschiedlichen und sich auf den allerersten Blick'."\n".
                    'auch etwas widersprechenden Zusammenhängen vor:'."\n",
                      'Zum einen beschreibt \lm{ \s } die arithmetische Struktur der Geometrie.'."\n".
                    'Das bedeutet, die maximale normierte Teilung einer Strecke zwischen Null und Eins mit natürlichen endlichen Teilern,'."\n".
                    'in Bezug auf deren Primfaktoren, ist \lm{ \s }.'."\n".
                    '\hidden{\color{*Bearb}{Teilen wir mehr, bekommen wir aktual unendlich kleine Anteile in die Koordinaten der entstehenden Teilungspunkte.'."\n".
                    'Die Koordinaten sind also nicht mehr rein endlicher Natur. (Stimmt das wirklich so?)}}'."\n",
                      'Zum anderen können wir aktual unendlich kleine ganze Zahlen mit den Superial-Zahlen definieren,'."\n".
                    'mit denen wir in \lm{ \s } Schritten, die eine Größe von \lm{ \s^{-1} } haben, von der Null bis ausschließlich der Eins zählen.'."\n".
                    'Das bedeutet, dass mit jedem Punkt, den wir mit dem Koeffizienten \lm{ n }, \lm{ z } oder \lm{ z^{-} } von \lm{ \s^{-1} },'."\n".
                    'also angelehnt an \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s} mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}_{\N}^{-1}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} n \cdot \s^{-1}  &  \text{ falls } a = 0  \\\\  a + z \cdot \s^{-1}  &  \text{ falls } 0 < a < 1  \\\\  1 + z^{-} \cdot \s^{-1}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  \;\;  ,  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{In Stellenwert-Notation …}',
                TitleVis => 'In Stellenwert-Notation:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}_{\N}^{-1}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} .*〈 n *〉  &  \text{ falls } a = 0  \\\\  *〈 a *〉.*〈 z *〉  &  \text{ falls } 0 < a < 1  \\\\  *〈 1 *〉.*〈 z^{-} *〉  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }'),
                    ))),

                    ))),

                  array( 'text', array( text => array(
                    'über \lm{ 2 ω } Schritte je Koeffizient \lm{ a } im Endlichen'."\n".
                    'von Null bis ausschließlich Eins zählen.'."\n".
                    'Dies wären dann aber \lm{ 2 ω \cdot \s } Schritte, wenn \lm{ a } jeden Punkt von \lm{ \s }'."\n".
                    'adressieren würde.'."\n".
                    'Angelehnt an Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen}'."\n".
                    'können wir die Menge der Punktkoordinaten schreiben als:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}_{\N}^{-1}}  =  \\\  \quad *\{  \quad\,  0, \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{1}{2} - 2 \s^{-1},\; \tfrac{1}{2} - \s^{-1},\; \tfrac{1}{2},\; \tfrac{1}{2} + \s^{-1},\; \tfrac{1}{2} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{2}{3} - 2 \s^{-1},\; \tfrac{2}{3} - \s^{-1},\; \tfrac{2}{3},\; \tfrac{2}{3} + \s^{-1},\; \tfrac{2}{3} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, 1 - 3 \s^{-1}, 1 - 2 \s^{-1}, 1 - \s^{-1}   \quad *\}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{In Stellenwert-Notation …}',
                TitleVis => 'In Stellenwert-Notation:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}_{\N}^{-1}}  =  \\\  \quad *\{  \;\;\;\,  .*〈 0 *〉,\; .*〈 1 *〉,\; .*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{1}{2} *〉.*〈 -2 *〉,\; *〈 \tfrac{1}{2} *〉.*〈 -1 *〉,\; \tfrac{1}{2},\; *〈 \tfrac{1}{2} *〉.*〈 1 *〉,\; *〈 \tfrac{1}{2} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{2}{3} *〉.*〈 -2 *〉,\; *〈 \tfrac{2}{3} *〉.*〈 -1 *〉,\; \tfrac{2}{3},\; *〈 \tfrac{2}{3} *〉.*〈 1 *〉,\; *〈 \tfrac{2}{3} *〉.*〈2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, *〈 1 *〉.*〈 -3 *〉,\; *〈 1 *〉.*〈 -2 *〉,\; *〈 1 *〉.*〈 -1 *〉   \quad *\}  }'),
                    ))),

                    ))),

                  array( 'text', array( text => array(
                    'Nun können es aber nur \lm{ \s } Zählschritte der Größe \lm{ \s^{-1} } von Null bis ohne Eins sein, wenn wir \jump{OM:SupNum:Ableitungen-Integrale}{die Ableitungen und das Integral},'."\n".
                    'wie geschehen, über die Superial-Zahlen definieren.'."\n".
                    'Und dazu passend ist es auch offensichtlich, dass \lm{ a } nicht alle \lm{ \s } der Punkte'."\n".
                    '\jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{als Koeffizient adressieren} kann:'."\n",
                      'So können zum Beispiel in der Menge der Superial-Zahlen nicht die Punkte \lm{ \frac{ k }{ 2^{ω} } }'."\n".
                    'der arithmetischen Struktur der Geometrie adressiert werden,'."\n".
                    'weil \lm{ x \in \lbrack 0, 1 \lbrack_{\mathbb{S}^{-1}_{\N}} } diesen Wert wegen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x \in [0, 1[_{\mathbb{S}_{\N}^{-1}} *) *( \forall k \in \mathbb{N}^{+} *)  *[  x  \neq  \frac{ k }{ 2^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in [0, 1[_{\mathbb{A}_{\S}} *) *( \forall z \in \mathbb{Z} *)  *[  a + z \cdot \s^{-1}  \neq  \frac{ k }{ 2^{ω} }  *]  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  a + \frac{ z }{ \s }  \neq  \frac{ k }{ 2^{ω} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a + \frac{ z }{ 2^{ω} 3^{ω} 5^{ω} 7^{ω} 11^{ω} \cdots }  \neq  \frac{ k }{ 2^{ω} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'nicht annehmen kann.'."\n".
                    'Es kann zwar \lm{ a = 0 } sein, aber \lm{ z } kann nicht die unendlichen Potenzen der Primzahlen, bis auf \lm{ 2^{ω} }, eliminieren.'."\n",
                      'Nach dem Beweis der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung} ist interessanterweise zum Beispiel'."\n".
                    '\lm{ a = \sqrt{2} = \frac{ 2^{\frac{1}{2}} \cdot 2^{ω} }{ 2^{ω} } } adressierbar.'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}_{\N}^{-1}}  =  \\\  \quad *\{  \quad\,  0, \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{2}}{2} - 2 \s^{-1},\; \tfrac{\sqrt{2}}{2} - \s^{-1},\; \tfrac{\sqrt{2}}{2},\; \tfrac{\sqrt{2}}{2} + \s^{-1},\; \tfrac{\sqrt{2}}{2} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{5}}{3} - 2 \s^{-1},\; \tfrac{\sqrt{5}}{3} - \s^{-1},\; \tfrac{\sqrt{5}}{3},\; \tfrac{\sqrt{5}}{3} + \s^{-1},\; \tfrac{\sqrt{5}}{3} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, 1 - 3 \s^{-1}, 1 - 2 \s^{-1}, 1 - \s^{-1}   \quad *\}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{In Stellenwert-Notation …}',
                TitleVis => 'In Stellenwert-Notation:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.D', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}_{\N}^{-1}}  =  \\\  \quad *\{  \;\;\;\,  .*〈 0 *〉,\; .*〈 1 *〉,\; .*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 -2 *〉,\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 -1 *〉,\; \tfrac{\sqrt{2}}{2},\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 1 *〉,\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{\sqrt{5}}{3} *〉.*〈 -2 *〉,\; *〈 \tfrac{\sqrt{5}}{3} *〉.*〈 -1 *〉,\; \tfrac{\sqrt{5}}{3},\; *〈 \tfrac{\sqrt{5}}{3} *〉.*〈 1 *〉,\; *〈 \tfrac{\sqrt{5}}{3} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, *〈 1 *〉.*〈 -3 *〉,\; *〈 1 *〉.*〈 -2 *〉,\; *〈 1 *〉.*〈 -1 *〉   \quad *\}  }'),
                    ))),

                    ))),

                  array( 'text', array( text => array(
                    'Welche Koeffizienten adressierbar sind, damit beschäftigen wir uns im Abschnitt'."\n".
                    '\italic{›\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}‹}.'."\n".
                    'Wie wir oben in Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}'."\n".
                    'schon festgestellt haben, müssen es genau \lm{ \frac{ \s }{ 2 ω } } sein.'."\n",
                      'Es ist für mich nicht so einfach, diese vermeintliche Doppelung in Worte zu fassen, merke ich, aber ich versuche es nachfolgend.'."\n".
                    'Zunächst möchte ich aber Sicherheit schaffen, dass beides einander entsprechen muss.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Woher wissen wir so sicher, wieviele Punkte der Teilung durch \lm{ \s } wir mit unseren Koeffizienten adressieren können?} \\\\'."\n".
                    'Wir wissen, dass die Adressierung von \lm{ \frac{ \s }{ 2 ω } } rein endlichen Koeffizienten von Null bis Eins korrekt sein muss,'."\n".
                    'weil \jump{OM:SupNum:Ableitungen-Integrale:Integration:Ableitung-Umkehrung-Integration}{wir gezeigt haben}, dass wir jedes Integral'."\n".
                    'durch die Ableitung genau dann Rückgängig machen können, wenn wir davon ausgehen, dass wir über \lm{ \s } Summanden der Schrittgröße \lm{ \s^{-1} }'."\n".
                    'pro Einheit Eins in diesen Schritten zählend summieren beziehungsweise integrieren.'."\n".
                    'Hätten wir mehr oder weniger Schritte als \lm{ \s }, dann würde es nicht passen und'."\n".
                    'die Integration wäre nicht die gesuchte Umkehrung der Ableitung.'."\n",
                      'Dass wir jedoch \lm{ 2 ω } aktual unendlich kleine ganze Schritte pro rein endlichem adressierten Koeffizienten haben, scheint mir unstrittig.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Wie können wir diese bizarr anmutende Doppelung von \lm{ \s } interpretieren und deuten?} \\\\'."\n".
                    'In beiden Fällen teilen wir die Strecke zwischen Null bis ohne Eins in \lm{ \s } Teile ein.'."\n".
                    'Beide Male hat die Einteilung den einheitlichen Abstand von \lm{ \s^{-1} }.'."\n",
                      'Das bedeutet, dass in beiden Fällen die ersten von Null beginnenden Punkte der Teilung'."\n".
                    'durch \lm{ n \cdot \s^{-1} }, mit \lm{ n \in \mathbb{N} }, zu adressieren sind.'."\n".
                    'Nun gehen für \lm{ n } aber nach der ersten vollständigen Induktion die Elemente in \lm{ \mathbb{N} } aus,'."\n".
                    'ohne, dass wir uns zu einem endlichen Koeffizienten vorgearbeitet hätten, der größer als Null wäre.'."\n".
                    'Das Mysterium findet dann im Übergang der endlichen Koeffizienten zu den nächst höheren statt;'."\n".
                    'aus der Sicht der unendlich kleinen Schritte dann im Übergang ins unendlich Große.'."\n",
                      'Aus der Perspektive der Teilung ist das alles sehr symmetrisch und harmonisch.'."\n".
                    'Aus der Perspektive der Schritte und der Adressierung bekommen wir einen bemerkenswerten Mix von'."\n".
                    'Koeffizienten der Mengen \lm{ \mathbb{N} }, \lm{ \mathbb{Z} }, \lm{ \mathbb{Z}^{-} } sowie'."\n".
                    '\lm{ \mathbb{A}_{\S} }, wobei letztere Menge \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{teilweise} oder sogar'."\n".
                    '\jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{ganz für die reell algebraischen Zahlen} steht.'."\n".
                    'Durch die Mengen \lm{ \mathbb{N} } und \lm{ \mathbb{Z}^{-} }, die sich schließlich zu \lm{ \mathbb{Z} } vereinigen,'."\n".
                    'ergibt sich dann noch eine Asymmetrie, die dem Zählen geschuldet ist.'."\n",
                      'Der Teilung durch \lm{ \s } sind diese komplexen Zusammenhänge der Mengen und deren Asymmetrie'."\n".
                    'sowie deren Mischung von reell algebraischen Koeffizienten des endlichen Summanden und dann wieder ganzen Koeffizienten des aktual unendlich kleinen Summanden zunächst nicht anzusehen.'."\n".
                    'Wir könnten glauben, diese Struktur ließe sich einfach so adressieren, wie endliche Strukturen oder Mengen von Punkten.'."\n".
                    'Und dann stellt sich wieder heraus, dass sich dies alles im wesentlichen wie endliche Zahlen verhält,'."\n".
                    'nur im Endlichen und aktual unendlich Kleinen gemischt.'."\n",
                      'Die Zählschritte zählen wir also im \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystem} der Superial-Zahlen in der ersten aktual unendlich kleinen'."\n".
                    'Potenz \lm{ \s^{-1} } in ganzzahligen Schritten je adressiertem Koeffizienten alle ganzen Zahlen und'."\n".
                    'nur bei der Null die natürlichen Zahlen und bei der Eins nur die negativen ganzen Zahlen.'."\n".
                    'Wir haben also aktual kleine Summanden.'."\n".
                    'Aber wir adressieren dafür nicht alle Punkte der Teilung in \lm{ \s } Teile.'."\n",
                      'Die Teile des ersten entsprechen genau den Schritten des zweiten.'."\n".
                    'Es ist, als wenn die theoretische Annäherung an die statische \jump{OM:SupNum:Arithmetische-Struktur-Geometrie}{arithmetische Struktur der Geometrie}'."\n".
                    'genau der praktischen Umsetzung eines schrittweisen und damit dynamischen Prozesses (der Beschreibung)'."\n".
                    'einer Berechnung entspricht.'."\n".
                    'Und in der Berechnung wird auch noch der statische Wert der theoretischen Annäherung benutzt.'."\n",
                      'Fragen die bleiben sind:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\color{*Entwick}{Können wir noch besser verstehen, warum das so ist oder sein muss?}',
                        '\color{*Entwick}{Hat diese Doppelung eventuell eine Verbindung zur analytischen Fortsetzung von Funktionen und damit zur Riemannschen Vermutung?}',
                    ))),
                  array( 'text', array( text => array(
                    'Es ist, als wenn die prozesshafte Beschreibung eine gewisse kleine Imbalance braucht, die dem Zählen ja auch schon innewohnt.'."\n".
                    'Die Struktur, die \lm{ \s } beschreibt, verrutscht dabei zum einen ins aktual unendlich Große und zum anderen dann wieder ins aktual'."\n".
                    'unendlich Kleine; beide Male kombiniert mit dem Endlichen.'."\n",
                      'Es erscheint ein wenig wie ein Wunder, dass beides exakt einander entspricht, ja entsprechen muss.'."\n".
                    ''))), */


                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:s-und-omega-hoch-omega-im-Strukturvergleich', text =>

                'Die natürlichen Superial-Zahlen \lm{ \mathbb{S}_{\N} } und die Ordinalzahlen \lm{ \mathbb{On} } im Strukturvergleich', subline =>
                  'Vom aktual unendlichen algebraischen Wert her gleich sowie gleich viele ganze Vorgänger; und doch führen unterschiedliche Wertpfade dorthin: Die superiale Basis \lm{ \s } und die Ordinalzahl \lm{ ω^{ω} }')),

                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    // '• \lm{ \mathbb{On} } ist eine echte Klasse\color{*Bearb}{(Verweis)}, während \lm{ \mathbb{S_{\N}} } eine Menge ist.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Betrachten wir die \jump{OM:SupNum:Arithmetische-Struktur-Geometrie}{arithmetische Struktur der Geometrie} \lm{ \s } und die Adressierbarkeit ihrer Punkte,'."\n".
                    'die durch die Teilung durch \lm{ \s } entstehen, dann ist es interessant, dass wir durch'."\n".
                    'den Beweis der \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} auch in'."\n".
                    'den Ordinalzahlen\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}} eine Wertgleichheit zu \lm{ \s } finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'In der echten Klasse\footnote{\const{BiOrd_g_footnote_text_EchteKlasse}} der Ordinalzahlen \lm{ \mathbb{On} }\footnote{\const{BiOrd_g_footnote_text_OrdinalzahlEchteKlasse}} hat das Element \lm{ ω^{ω} } genau so viele Vorgänger, wie sein Wert groß ist,'."\n".
                    'nämlich die Elemente \lm{ \left\lbrack 0, ω^{ω} \right\lbrack_{\mathbb{On}} }.'."\n".
                    'Dies gilt ebenso für das Element \lm{ \s } in der Menge der natürlichen Superial-Zahlen \lm{ \mathbb{S_{\N}} },'."\n".
                    'wo \lm{ \left\lbrack 0, \s \right\lbrack_{\mathbb{S}_{\N}} } alle Vorgänger enthält.'."\n".
                    'Die Gleichheit der Werte drückt folglich aus, dass in beiden Fällen gleich viele Vorgänger vorhanden sind,'."\n".
                    'die Vorgängermengen also gleich viele Elemente haben.'."\n",
                      'Für alle Elemente in \lm{ \mathbb{On} } und in \lm{ \mathbb{S_{\N}} } gilt,'."\n".
                    'dass jedes Element genau so viele Vorgänger hat, wie sein Wert ausdrückt, womit beide zur'."\n".
                    '\jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-Klasse-K-unendlich-c}{Klasse \lm{ \mathbb{K}_{\infty,c} } der Anzahl äquivalenten Klassen}'."\n".
                    'gehören:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{On}  \in  \mathbb{K}_{\infty,c}  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-On-ist-Element-K-unendlich-c}', label_incr => false),
                      array( display => 'on',  latex => '{  \mathbb{S}_{\N}  \in  \mathbb{K}_{\infty,c}  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-c', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-c}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'In beiden Klassen \lm{ \mathbb{On} } und \lm{ \mathbb{S_{\N}} } – denn eine Menge ist nur eine besondere Klasse –'."\n".
                    'haben auch alle Zahlen einen direkten Nachfolger.'."\n".
                    'Und trotzdem sind beide von ihren Elementen her nicht gleich,'."\n".
                    'denn in \lm{ \mathbb{S_{\N}} } haben alle Zahlen auch einen direkten Vorgänger, außer die Null.'."\n".
                    'In \lm{ \mathbb{On} } hingegen gilt dies nicht, weil nicht nur die Null keinen direkten Vorgänger hat,'."\n".
                    'sondern alle sogenannten Limeszahlen\footnote{\const{BiOrd_g_footnote_text_OrdinalzahlLimeszahlen}} haben keinen direkten Vorgänger.'."\n".
                    'Also haben \lm{ ω } und \lm{ ω^{ω} } ebenfalls keine direkten Vorgänger:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on',  latex => '{  ω^{ω}  =  [ 0, ω^{ω} [_{\mathbb{On}}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  [ 0, \s [_{\mathbb{S}_{\N}}  \neq  [ 0, ω^{ω} [_{\mathbb{On}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der strukturelle Unterschied dieser beiden Anzahl äquivalenten Klassen – beim Vergleich werden die Werte betrachtet –,'."\n".
                    'trotz Wertgleichheit von \lm{ \s } und \lm{ ω^{ω} }, ist sehr bemerkenswert und bedarf einer näheren Untersuchung.'."\n",
                      'Die beiden Mengen sehen konkret folgendermaßen aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, \s [_{\mathbb{S}_{\N}}  =  \\\  \quad *\{  \quad\,  0, 1, 2, \cdots n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{1}{2} \s + z^{-}, \cdots \tfrac{1}{2} \s - 1,\; \tfrac{1}{2} \s,\; \tfrac{1}{2} \s + 1, \cdots \tfrac{1}{2} \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{φ}{2} \s + z^{-}, \cdots \tfrac{φ}{2} \s - 1,\; \tfrac{φ}{2} \s,\; \tfrac{φ}{2} \s + 1, \cdots \tfrac{φ}{2} \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{2}{3} \s + z^{-}, \cdots \tfrac{2}{3} \s - 1,\; \tfrac{2}{3} \s,\; \tfrac{2}{3} \s + 1, \cdots \tfrac{2}{3} \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{2}}{2} \s + z^{-}, \cdots \tfrac{\sqrt{2}}{2} \s - 1,\; \tfrac{\sqrt{2}}{2} \s,\; \tfrac{\sqrt{2}}{2} \s + 1, \cdots \tfrac{\sqrt{2}}{2} \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{5}}{3} \s + z^{-}, \cdots \tfrac{\sqrt{5}}{3} \s - 1,\; \tfrac{\sqrt{5}}{3} \s,\; \tfrac{\sqrt{5}}{3} \s + 1, \cdots \tfrac{\sqrt{5}}{3} \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, \s + z^{-}, \cdots \s - 2, \s - 1   \quad *\}  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s-explizit', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s-explizit}', label_incr => true),
                      array( display => 'on',  latex => '{  [ 0, ω^{ω} [_{\mathbb{On}}  =  \\\  \quad *\{  \quad\;  0, 1, 2, \cdots n, \cdots \\\ \qquad\quad\; ω, ω + 1, ω + 2, ω + 3, \cdots ω + n, \cdots \\\ \qquad\quad\; 2 ω, 2 ω + 1, 2 ω + 2, 2 ω + 3, \cdots 2 ω + n, \cdots \\\ \qquad\quad\; 3 ω, 3 ω + 1, 3 ω + 2, 3 ω + 3, \cdots 3 ω + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, ω^{2}, ω^{2} + 1, ω^{2} + 2, ω^{2} + 3, \cdots ω^{2} + n, \cdots \\\ \qquad\quad\; ω^{2} + ω, ω^{2} + ω + 1, ω^{2} + ω + 2, \cdots ω^{2} + ω + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, 2 ω^{2}, 2 ω^{2} + 1, 2 ω^{2} + 2, 2 ω^{2} + 3, \cdots 2 ω^{2} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, 3 ω^{2}, 3 ω^{2} + 1, 3 ω^{2} + 2, 3 ω^{2} + 3, \cdots 3 ω^{2} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, ω^{3}, ω^{3} + 1, ω^{3} + 2, ω^{3} + 3, \cdots ω^{3} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, 2 ω^{3}, 2 ω^{3} + 1, 2 ω^{3} + 2, 2 ω^{3} + 3, \cdots 2 ω^{3} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, 3 ω^{3}, 3 ω^{3} + 1, 3 ω^{3} + 2, 3 ω^{3} + 3, \cdots 3 ω^{3} + n, \cdots \\\ \quad\quad\; \quad \vdots   \quad *\}  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-omega-hoch-omega-explizit', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-omega-hoch-omega-explizit}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n".
                    'In der Menge \lm{ \left\lbrack 0, \s \right\lbrack_{\mathbb{S}_{\N}} } sind Elemente der Menge'."\n".
                    '\lm{ \left\lbrack 0, ω^{ω} \right\lbrack_{\mathbb{On}} }, wie \lm{ ω }, \lm{ ω + 1 }'."\n".
                    'oder \lm{ ω^{2} }, \lm{ ω^{2} + 1 } und so weiter, gar nicht enthalten.'."\n".
                    'Umgekehrt gibt es in \lm{ \left\lbrack 0, ω^{ω} \right\lbrack_{\mathbb{On}} } keinen direkten Vorgänger von \lm{ ω^{ω} },'."\n".
                    'wie es sie in der Menge der natürlichen Superial-Zahlen vor \lm{ \s } mit \lm{ \s - 1 } und so weiter gibt.'."\n".
                    'Und auch Ausdrücke, wie \lm{ \frac{1}{2} \s } oder \lm{ \frac{\sqrt{5}}{3} \s + 1 } können wir in'."\n".
                    '\lm{ \left\lbrack 0, ω^{ω} \right\lbrack_{\mathbb{On}} } nicht finden und benennen.'."\n",
                      'Genauer können wir sagen, außer allen natürlichen Zahlen gibt es keine einzige weitere Zahl,'."\n".
                    'die wir in beiden Mengen explizit angeben können.'."\n".
                    'Aber die Anzahl aller Zahlen, wie gesagt, und sogar ihre Summe, wie wir gleich sehen werden, sind in beiden Mengen gleich.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:s-und-omega-hoch-omega-im-Strukturvergleich:X', text =>
                  'Summengleichheit trotz der strukturellen Unterschiede', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Mit der \jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}{angepassten Gaußschen Summenformel}\footnote{\const{BiOrd_g_footnote_text_GaussscheSummenformel}},'."\n".
                    'damit auch die Berechnung von Summen unendlich großer Mengen, die kein größtes Element haben, möglich ist,'."\n".
                    'können wir die Summen ganzer Zahlen von Null bis ohne \lm{ \s } oder \lm{ ω^{ω} } berechnen,'."\n".
                    'wenn die Klassen ihrer Vorgänger zur \jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-Klasse-K-unendlich-g}{Klasse \lm{ \mathbb{K}_{\infty,g} } Gauß-Summen äquivalenter Klassen}'."\n".
                    'gehören:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \mathbb{M} \in \mathbb{K}_{\infty,g} *) *( \forall n \in \mathbb{M} *)  *[  \sum_{ \forall i \in [ 0, n [_{\mathbb{M}} } \!\!\!\! i  =  \frac{ n^{2} - n }{ 2 }  *]  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Für die Summe aller endlichen natürlichen Zahlen erhalten wir beispielsweise:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in ω } i  =  \frac{ ω^{2} - ω }{ 2 }  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Für die beiden gleichwertigen Zahlen und die Summen der unendlich vielen positiven ganzen Zahlen, für die sie jeweils stehen,'."\n".
                    'erhalten wir dann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\N}} } \!\!\! i  =  \frac{ \s^{2} - \s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in [ 0, ω^{ω} [_{\mathbb{On}} } \!\!\!\! i  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Richtigkeit der Summe aller natürlichen Superial-Zahlen bis ohne \lm{ \s } besteht schon wegen Formel \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Element-K-unendlich-c-aequival-Element-K-unendlich-g}'."\n".
                    'aufgrund der Tatsache, dass diese Menge zur Klasse \lm{ \mathbb{K}_{\infty,c} } der Anzahläquivalenten Klassen gehört:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \mathbb{S}_{\N}  \in  \mathbb{K}_{\infty,g}  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-g', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-g}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'So gehört sie dann auch zur Klasse \lm{ \mathbb{K}_{\infty,g} } der Gauß-Summen äquivalenten Klassen.'."\n",
                      'Desweiteren sehen wir diese Richtigkeit noch an zwei Dingen zusammen.'."\n".
                    'Zum einen an dem allgemeinen Beweis,'."\n".
                    'dass das \jump{OM:SupNum:Ableitungen-Integrale:Integration:Ableitung-Umkehrung-Integration}{Ableitung die Umkehrung des Integrals} ist.'."\n".
                    'Und zum anderen an dem \jump{OM:SupNum:Ableitungen-Integrale:Integration:Beispiel-eines-konkreten-Integrals}{Beispiel der Integration der Ableitung von \lm{ f(x) = x^{2} }}, also von \lm{ f\'(x) = *〈 2 x *〉. *〈 1 *〉},'."\n".
                    'in dem genau die angepasste Gaußsche Summenformel zur korrekten Lösung angewandt wird und der einzige fragliche Term ist.'."\n",
                      'Die Richtigkeit der Summe aller Ordinalzahlen bis ohne \lm{ ω^{ω} } ist bereits aus Formel \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-On-ist-Element-K-unendlich-g}'."\n".
                    'bekannt und ergibt sich ganz einfach aus der Definition der'."\n".
                    'Ordinalzahlen, die dazu gemacht sind, solche Zusammenhänge über die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    'der natürlichen Zahlen auszudrücken.'."\n".
                    'Nur, dass der Wert ohne die Biordinalzahlen bisher nicht ausgedrückt werden konnte, was nun möglich ist.'."\n",
                      'Aus der Wertgleichheit beider Werte in der Formel \jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}'."\n".
                    'folgt dann'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\N}} } \!\!\! i  =  \sum_{ \forall i \in [ 0, ω^{ω} [_{\mathbb{On}} } \!\!\!\! i  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und dies, obwohl die Mengen, deren Elemente hier summiert werden, ja recht unterschiedlich sind.'."\n".
                    '\color{*Entwick}{Und genau hier kann die nähere Untersuchung interessant sein.}'."\n",
                      'Wenn wir die Menge \lm{ \left\lbrack 0, \s \right\lbrack_{\mathbb{S}_{\N}} } aller natürlichen Superial-Zahlen'."\n".
                    'bis ohne \lm{ \s } mit \lm{ ω^{ω} } ausdrücken, dann erhalten wir:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, \s [_{\mathbb{S}_{\N}}  =  \\\  \quad *\{  \quad\,  0, 1, 2, \cdots n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{1}{2} ω^{ω} + z^{-}, \cdots \tfrac{1}{2} ω^{ω} - 1,\; \tfrac{1}{2} ω^{ω},\; \tfrac{1}{2} ω^{ω} + 1, \cdots \tfrac{1}{2} ω^{ω} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{2}{3} ω^{ω} + z^{-}, \cdots \tfrac{2}{3} ω^{ω} - 1,\; \tfrac{2}{3} ω^{ω},\; \tfrac{2}{3} ω^{ω} + 1, \cdots \tfrac{2}{3} ω^{ω} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, ω^{ω} + z^{-}, \cdots ω^{ω} - 2, ω^{ω} - 1   \quad *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Vergleichen wir ihre Elemente nun mit denen der davor stehenden Menge \lm{ \left\lbrack 0, ω^{ω} \right\lbrack_{\mathbb{On}} } in Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-omega-hoch-omega-explizit}'."\n".
                    'so fällt auf, dass die aktual unendlich großen Elemente der Menge hier mit endlichen Faktoren vor \lm{ ω^{ω} }'."\n".
                    'ausgedrückt werden, also quasi im Bereich von \lm{ ω^{ω} }, während die genannte Menge \lm{ \left\lbrack 0, ω^{ω} \right\lbrack_{\mathbb{On}} }'."\n".
                    'oben nur Elemente weiter unterhalb von \lm{ ω^{ω} } enthält, ohne \lm{ ω^{ω} } selbst in den Ausdrücken zu benutzen.'."\n",
                      'Umso erstaunlicher, dass beide Mengen nicht nur gleich viele Elemente, sondern auch die gleiche Summe haben,'."\n".
                    'wie vorstehend gezeigt.'."\n".
                    'Es stellt sich demnach so dar, dass beide Mengen trotz ihrer Unterschiede in gewisser Hinsicht äquivalent sind.'."\n".
                    'Die endlichen Faktoren vor \lm{ ω^{ω} } beziehungsweise \lm{ \s } werden also in ihrer potenziellen Unendlichkeit doch sehr klein,'."\n".
                    'während die Polynome des Wertes \lm{ ω } potenziell doch sehr groß werden.'."\n",
                      'Wie oben bereits geklärt dürfen wir zur Berechnung der Summe die angepasste Gaußsche Summenformel'."\n".
                    'einsetzen.'."\n".
                    'Insofern ist die folgende Berechnung nicht der Beweis dafür, dass diese Summe innerhalb der natürlichen Superial-Zahlen'."\n".
                    'korrekt ist, denn das wissen wir schon.'."\n".
                    'Sondern es ist die Probe, dass sich auch wirklich das oben gezeigte Ergebnis'."\n".
                    'aus dem von uns bereits entwickelten Wissen ergibt, wenn wir die Summe in allen Einzelheiten berechnen.'."\n".
                    'Es ist also unser Plausibilitäts-Check.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Wenn wir die Elemente der Menge \lm{ \left\lbrack 0, \s \right\lbrack_{\mathbb{S}_{\N}} }'."\n".
                      'summieren, ergibt sich nach der angepassten Gaußschen Summenformel'."\n".
                      'für die erste Zeile, die alle endlichen natürlichen Zahlen enthält, die Summe:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in \mathbb{N} } i  =  \sum_{ \forall i \in ω } i  =  \frac{ ω^{2} - ω }{ 2 }  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-omega}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Um die mittleren Zeilen der Gesamtsumme, ohne die erste und die letzte, zu berechnen, benötigen wir folgende Formeln:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# \mathbb{Z}^{-}  =  \# \mathbb{N}  =  ω  =  \mathbb{N}  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-N}', label_incr => false),
                      array( display => 'on',  latex => '{  \# \mathbb{Z}  =  2 ω  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-Z}', label_incr => false),
                      array( display => 'on',  latex => '{  \sum_{ \forall z \in \mathbb{Z}} z  =  - ω  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } \!\! z^{-} + \sum_{ \forall n \in \mathbb{N} } n  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  - ω  =  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } \!\! z^{-} + \frac{ ω^{2} - ω }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } \!\! z^{-}  =  - \frac{ ω^{2} - ω }{ 2 } - ω  }'),
                      array( display => 'on',  latex => '{  \# [ 0, 1 [_{\mathbb{A}_{\S}}  =  \frac{ \s }{ 2 ω }  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# ] 0, 1 [_{\mathbb{A}_{\S}}  =  \frac{ \s }{ 2 ω } - 1  }'),
                      array( display => 'on',  latex => '{  \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 ω } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Für die mittleren Zeilen ergibt sich dann, wenn wir die Summe mit \lm{ y } zur Übersichtlichkeit substituieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \sum_{ \forall z \in \mathbb{Z} } *( a \cdot ω^{ω} + z *)  =  y  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } *( a \cdot ω^{ω} \cdot \# \mathbb{Z} + \! \sum_{ \forall z \in \mathbb{Z} }  z *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } *( a \cdot ω^{ω} \cdot 2 ω + \! \sum_{ \forall z \in \mathbb{Z} }  z *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! *( a \cdot ω^{ω} \cdot 2 ω + *( - ω *) *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! *( a \cdot ω^{ω} \cdot 2 ω - ω *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a \cdot ω^{ω} \cdot 2 ω \;\; - \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a \;\; - \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a \;\; - \;\; *( \frac{ \s }{ 2 ω } - 1 *) \cdot ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a \;\; - \;\; *( \frac{ ω^{ω} }{ 2 ω } - 1 *) \cdot ω  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Um die noch enthaltene variable Summe zu berechnen, können wir, ohne sie zu verändern, die Null in ihre Basismenge integrieren'."\n".
                      'und sie dann mit Hilfe von Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}'."\n".
                      'berechnen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in [ 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a  \;\; - \;\; *( \frac{ ω^{ω} }{ 2 ω } - 1 *) \cdot ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in [ 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a  \;\; - \;\; *( \frac{ ω^{ω} \cdot ω }{ 2 ω } - ω *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in [ 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a  \;\; - \;\; *( \frac{ ω^{ω} }{ 2 } - ω *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in [ 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a  \;\; - \;\; \frac{ ω^{ω} }{ 2 } \;\; + \;\; ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot *( \frac{ \s }{ 4 ω } - \frac{ 1 }{ 2 } *)  \;\; - \;\; \frac{ ω^{ω} }{ 2 } \;\; + \;\; ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot *( \frac{ ω^{ω} }{ 4 ω } - \frac{ 1 }{ 2 } *)  \;\; - \;\; \frac{ ω^{ω} }{ 2 } \;\; + \;\; ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \frac{ ω^{ω} \cdot 2 ω \cdot ω^{ω} }{ 4 ω } - \frac{ ω^{ω} \cdot 2 ω }{ 2 } - \frac{ ω^{ω} }{ 2 } + ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \frac{ *( ω^{ω} *)^{2} }{ 2 } - ω^{ω} \cdot ω - \frac{ ω^{ω} }{ 2 } + ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 } - ω^{ω} \cdot ω + ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 } - *( ω^{ω} \cdot ω - ω *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Die letzte Zeile summiert sich dann zu:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } *( ω^{ω} + z^{-} *)  =  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } ω^{ω} \; + \! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } \!\! z^{-}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \!\! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } *( ω^{ω} + z^{-} *)  =  ω^{ω} \cdot ω \; + \! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } \!\! z^{-}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \!\! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } *( ω^{ω} + z^{-} *)  =  ω^{ω} \cdot ω + *( - \frac{ ω^{2} - ω }{ 2 } - ω *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Wenn wir alle drei Summen nun addieren'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\N}} } \!\!\! i  =  \frac{ ω^{2} - ω }{ 2 } \\\ \qquad\qquad\quad\;\; + \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 } - *( ω^{ω} \cdot ω - ω *) \\\ \qquad\qquad\quad\;\; + ω^{ω} \cdot ω + \! *( - \frac{ ω^{2} - ω }{ 2 } - ω *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \!\! \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\N}} } \!\!\! i  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 } - ω^{ω} \cdot ω + ω \\\ \qquad\qquad\qquad\qquad\;\; + ω^{ω} \cdot ω - ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \!\! \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\N}} } \!\!\! i  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'ergibt sich auch tatsächlich das erwartete Ergebnis.'."\n",
                        '\\\\'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Unser Plausibilitäts-Check ist also positiv ausgefallen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:s-und-omega-hoch-omega-im-Strukturvergleich:X', text =>
                  'Die Wertgleichheit von \lm{ \s } und \lm{ ω^{ω} } sowie die Gleichheit der Summe ihrer natürlichen Vorgänger markiert die besondere Bedeutung ihres Werts', subline =>
                    '')),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    '• Mein Gefühl sagt mir, dass die Wertgleichheit von \lm{ \s } und \lm{ ω^{ω} } und deren unterschiedliche Zählstruktur etwas mit dem Zusammenhang zwischen den Nullstellen von Polynomen und deren Lösungen in Form von algebraischen Zahlen zu tun hat.',
                    '• Wir können auch sagen, dass die Superial-Zahlen eher mit den \lm{ ω }-ten Potenzen von Primzahlen oder natürlichen Zahlen in Verbindung stehen, während die Ordinalzahlen mit der Basis \lm{ ω } in natürlichen Potenzen im Zusammenhang stehen. Bei \lm{ ω^{ω} } treffen sich beide Perspektiven dann.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Das der Wert der aktual unendlichen geometrischen Teilung der Eins \lm{ \s } mit dem Wert'."\n".
                    'der \color{*Bearb}{aktual unendlich möglichen Varianten an Polynomen} \lm{ ω^{ω} } zusammenfällt, drückt seine besondere Bedeutung aus.'."\n",
                      'Es handelt sich nicht um irgendeinen Wert, sondern darum, wie oft wir die endlich lange Strecke von der'."\n".
                    'Null bis zur Eins normiert teilen können, ohne zur Beschreibung der Teilungspunkte aktual unendlich kleine'."\n".
                    'Summanden benutzen zu müssen, die selber wieder gebrochen sind.'."\n".
                    'Wir kommen auf diese Weise so nämlich mit ganzen Zahlen im unendlich Kleinen aus und erhalten eine normierte'."\n".
                    'Vorschrift, von einer Skala natürlicher oder ganzer Zahlen zur nächsten unendlich kleineren oder unendlich größeren zu gelangen.'."\n".
                    'Und unser so definierter Skalenfaktor basiert auf der Menge aller endlichen Primzahlen \lm{ \mathbb{P} }, die alle möglichen dieser Teilungen'."\n".
                    'damit normiert vorgibt.'."\n",
                      '\color{*Bearb}{Gleichzeitig sehen wir, dass die Koeffizienten von \lm{ \s } in einer Fraktalebene \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{den Nullstellen von Polynomen entsprechen},'."\n".
                    'also mit elliptischen Kurven\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:ElliptischeKurve:2024}.} und abschließend mit algebraischen Kurven\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:AlgebraischeKurve:2023}.}'."\n".
                    'vollständig dargestellt werden können.}'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:s-und-omega-hoch-omega-im-Strukturvergleich:X', text =>
                  'Strukturelle Interpretation von \lm{ \s } und \lm{ ω^{ω} }', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Beschäftigen wir uns mit der Entstehungsgeschichte der Menge \lm{ \mathbb{S} } und der echten Klasse \lm{ \mathbb{On} }'."\n".
                    'beziehungsweise mit der Struktur der Mengen \lm{ \left\lbrack 0, \s \right\lbrack_{\mathbb{S}_{\N}} } und'."\n".
                    '\lm{ \left\lbrack 0, ω^{ω} \right\lbrack_{\mathbb{On}} }, dann können wir zu folgender Interpretation kommen:'."\n",
                      'Die echte Klasse der Ordinalzahlen \lm{ \mathbb{On} } basiert im Grunde auf dem Zählen und somit auf der Addition.'."\n".
                    'Dabei wird das Symbol \lm{ ω } der kleinsten Unendlichkeit, der vollständigen Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}},'."\n".
                    'als unteilbar betrachtet.'."\n".
                    'Dies führt dazu, dass keine weiteren arithmetischen Operation und Ganzzahligkeitsanalysen möglich sind, als die, die sich aus dem Zählen ergeben.'."\n",
                      'Anders bei \lm{ \s }, denn \lm{ \s } ist als das Flächenprodukt aller endlichen Primzahlen \lm{ ω }-ter Potenz definiert.'."\n".
                    'Dadurch ergeben sich ganz andere arithmetische Operation, die zu ganzen Zahlen führen, als bei den Ordinalzahlen.'."\n".
                    'So gesehen sind die Superial-Zahlen Zahlen, die im Grunde über Produkte definiert sind.'."\n",
                      'So haben wir es mit zwei Zahlensystem zu tun, die auf ganz unterschiedlichen Grundstrukturen basieren.'."\n".
                    'Und erst aufgrund der Kombination beider Zahlensysteme kommen wir überhaupt in die Lage, die Anzahlen der Elemente wichtiger Zahlenmengen,'."\n".
                    'wie den reell algebraischen Zahlen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# [ 0, 1 [_{\mathbb{A}_{\S}}  =  \frac{ \s }{ 2 ω }  \;\; ,  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'und die arithmetische Struktur von \lm{ ω }, als'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.S.V', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  =  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots  \;\; ,  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimfakultaet-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'zu verstehen, denn beide Zahlensysteme ergänzen sich auf faszinierende Weise.'."\n".
                    ''))),


                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:bidir-Abbild-SN-auf-On-moeglich', text =>
                      
                'Ist eine bidirektionale Abbildung der natürlichen Superial-Zahlen \lm{ \mathbb{S}_{\N} } und der Ordinalzahlen \lm{ \mathbb{On} } möglich?', subline =>
                  '')),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    '• Ähnliches machen wir ja auch im jetzigen Kapitel \italic{›\jumpname{OM:SupNum:Eigenschaften:StrukturVonS}‹} im Abschnitt hier: \italic{›\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung:Mengen-aufeinander-linear-abbildbar}‹}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Da beide Klassen bei Null mit den selben Elementen – mit den endlichen natürlichen Zahlen – beginnen,'."\n".
                    'sind diese schon einmal aufeinander abbildbar.'."\n",
                      'Um es erst einmal zu vereinfachen untersuchen wir zunächst nur …'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:bidir-Abbild-SN-auf-On-moeglich:X', text =>
                  'Die Zahlen von Null bis \lm{ \s } beziehungsweise \lm{ ω^{ω} }', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Bei den Ordinalzahlen ist die erste aktual unendlich große Zahl, die auf die endlichen folgt, bekannt, nämlich \lm{ ω }.'."\n".
                    'Bei den natürlichen Superial-Zahlen ist die erste aktual unendlich große Zahl unbekannt, weil sie in ihren aktual unendlichen Schichten,'."\n".
                    'in den algebraischen Koeffizienten \lm{ a_{i} } von \lm{ a_{1} \s^{1}, a_{2} \s^{2}, a_{3} \s^{3} \cdots }, dicht sind.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),


                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen'),
                    )),
              )
          ); ?>


          <!  • Neue Rechenregeln im Unendlichen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• Die Null ist in den Superial-Zahlen viel simpler definiert, als in den hyperreellen Zahlen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Im Aktual-Unendlichen gelten bezüglich ganzer Zahlen hier und dort ungewohnte neue Rechenregeln,'."\n".
                    'mit denen wir uns etwas näher befassen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:X', text =>

                '\italic{Inhalt}', subline =>
                  '')),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:Wurzeln-aus-aktual-unendlich-grossen-ganzen-Superial-Zahlen'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:Pythagoreische-Tripel'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:Grosser-Fermatscher-Satz'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:Aktual-Unendliche-Exponenten-der-Primzahlen-in-Potenzzahlen'),
                    )),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:Wurzeln-aus-aktual-unendlich-grossen-ganzen-Superial-Zahlen', text =>
                      
                'Wurzeln aus aktual unendlich großen ganzen Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wurzeln aus Summen genügend großer aktual unendlicher ganzer Superial-Zahlen sind selber ganze Superial-Zahlen.'."\n",
                      'So sind die ganzen Zahlen \lm{ a_{s} \s^{y} } und \lm{ b_{s} \s^{y} } durch den Faktor \lm{ \s^{y} } so groß,'."\n".
                    'dass sogar aus deren Summe immer die \lm{ y }-te Wurzel gezogen werden kann, so, dass sich immer eine ganze Superial-Zahl ergibt,'."\n".
                    'was im Endlichen im Regelfall nicht gilt.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Wie wir aus dem Abschnitt \italic{›\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:GeschachtelteRadikaleKehrwerteMitSummen}‹} wissen,'."\n".
                      'ist eine beliebige Wurzel aus einer Summe von reell algebraischen Zahl multipliziert mit unserer superialen Basis \lm{ \s }'."\n".
                      'eine ganze Superial-Zahl der ersten Exponentenschicht'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.WSZ', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a_{s}, b_{s} \in \mathbb{A}_{\S}^{+} *) *( \forall y \in \mathbb{N} \ge 2 *) \\\ \qquad\qquad\quad\, *[  *( a_{s} + b_{s} *)^{\frac{ 1 }{ y }} \cdot \s  \in  \mathbb{S}_{\N,\{ 1 \}}^{+}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( a_{s} + b_{s} *) \cdot \s^{y} *)^{\frac{ 1 }{ y }}  \in  \mathbb{S}_{\N,\{ 1 \}}^{+}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( a_{s} \s^{y} + b_{s} \s^{y} *)^{\frac{ 1 }{ y }}  \in  \mathbb{S}_{\N,\{ 1 \}}^{+}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'was durch Umformung unsere Behauptung zeigt, denn die Summanden sind auch ganze Superial-Zahlen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.WSZ', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a_{s} \s^{y}  \in  \mathbb{S}_{\N,\{ y \}}^{+}  }'),
                      array( display => 'on',  latex => '{  b_{s} \s^{y}  \in  \mathbb{S}_{\N,\{ y \}}^{+}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'was Voraussetzung war.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Sehr bemerkenswert auch.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:Pythagoreische-Tripel', text =>

                'Pythagoreische Tripel', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Im Endlichen gibt es tatsächlich unendlich viele pythagoreische Tripel\footnote{\const{SupNum_g_footnote_text_PythagoreischesTripel}}, bei denen alle drei Zahlen ganzzahlig sind.'."\n".
                    'Allerdings gibt es natürlich auch sehr viele Kombinationen von ganzen Zahlen, die nicht gleich sind.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:X', text =>
                  'Im Endlichen', subline =>
                    '')),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.PT', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a, b, c  \in  \mathbb{N}^{+}  }'),
                      array( display => 'on',  latex => '{  c^{2}  =  a^{2} + b^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c  =  *| \sqrt{ a^{2} + b^{2} } \,|*  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c  =  *( a^{2} + b^{2} *)^{\frac{ 1 }{ 2 }}  }'),
                    ))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:X', text =>
                  'Im Superialen', subline =>
                    '')),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.PT', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \forall a_{s}, b_{s}, c_{s}  \in  \mathbb{A}_{\S}^{+}  }'),
                      array( display => 'on',  latex => '{  \forall \, a_{s} \s \, , \, b_{s} \s \, , \, c_{s} \s  \in  \mathbb{S}_{\N}^{+}  }'),
                      array( display => 'on',  latex => '{  c_{s}^{2}  =  a_{s}^{2} + b_{s}^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c_{s}  =  *| \sqrt{ a_{s}^{2} + b_{s}^{2} } \,|*  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{s}  =  *( a_{s}^{2} + b_{s}^{2} *)^{\frac{ 1 }{ 2 }}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'In dem Moment, wo wir sie ins Superiale skalieren'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.PT', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{s} \s  =  *( a_{s}^{2} + b_{s}^{2} *)^{\frac{ 1 }{ 2 }} \cdot \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{s} \s  =  *( *( a_{s}^{2} + b_{s}^{2} *) \cdot \s^{2} *)^{\frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{s} \s  =  *( a_{s}^{2} \s^{2} + b_{s}^{2} \s^{2} *)^{\frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{s} \s  =  *( *( a_{s} \s *)^{2} + *( b_{s} \s *)^{2} *)^{\frac{ 1 }{ 2 }}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'sind die superialen pythagoreischen Tripel \lm{ a_{s} \s }, \lm{ b_{s} \s } und \lm{ c_{s} \s } für'."\n".
                      'alle reell algebraischen Zahlen \lm{ a_{s} }, \lm{ b_{s} } und \lm{ c_{s} } ganzzahlig.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'So sind im Superial-Unendlichen \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:GeschachtelteRadikaleKehrwerteMitSummen}{alle pythagoreischen Tripel, deren Koordinaten reell algebraisch sind, ganzzahlig}.'."\n",
                      'Und wir können verstehen, dass sie dann vor dem Hochskalieren, also im Endlichen, auf die superial kleine Exponentenschicht \lm{ \s^{-1}} bezogen,'."\n".
                    'superial klein ganzzahlig sind und damit auf das den endlichen Zahlen unterliegende Raster fallen,'."\n".
                    'dass im Kapitel \italic{›\jumpname{OM:SupNum:Arithmetische-Struktur-Geometrie}‹} beleuchtet wird.'."\n".
                    'So ist dann auch zu verstehen, dass die \jump{OM:SupNum:Arithmetische-Struktur-Geometrie:OntologieDerGeometrie}{Kreise mit reell algebraisch Koordinaten}'."\n".
                    'ebenso auf dieses Raster fallen.'."\n".
                    ''))),


                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:Grosser-Fermatscher-Satz', text =>

                'Großer Fermatscher Satz', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die pythagoreischen Tripel lassen sich auf höhere Potenzen als zwei erweitern und wir landen bei den Fermatschen Tripeln'."\n".
                    'und damit beim Großen Fermatschen Satz\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:GrosserFermatscherSatz:2025}.}.'."\n".
                    'Dieser besagt, dass es keine einzige Kombination natürlicher Zahlen gibt, die die folgende Gleichung erfüllt.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:X', text =>
                  'Im Endlichen', subline =>
                    '')),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.GFS', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \nexists a, b, c \in \mathbb{N}^{+} *) *( \forall n \in \mathbb{N} > 2 *)  *[  c^{n}  =  a^{n} + b^{n}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c  =  *| \sqrt[n]{ a^{n} + b^{n} } \,|*  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c  =  *( a^{n} + b^{n} *)^{\frac{ 1 }{ n }}  }'),
                    ))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:X', text =>
                  'Im Superialen', subline =>
                    '')),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.GFS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \forall a_{s} , b_{s} , c_{s}  \in  \mathbb{A}_{\S}^{+}  }'),
                      array( display => 'on',  latex => '{  \forall \, a_{s} \s \, , \, b_{s} \s \, , \, c_{s} \s  \in  \mathbb{S}_{\N}^{+}  }'),
                      array( display => 'on',  latex => '{  c_{s}^{n}  =  a_{s}^{n} + b_{s}^{n}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c_{s}  =  *| \sqrt[n]{ a_{s}^{n} + b_{s}^{n} } \,|*  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{s}  =  *( a_{s}^{n} + b_{s}^{n} *)^{\frac{ 1 }{ n }}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'In dem Moment, wo wir es ins Superiale skalieren'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.GFS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{s} \s  =  *( a_{s}^{n} + b_{s}^{n} *)^{\frac{ 1 }{ n }} \cdot \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{s} \s  =  *( *( a_{s}^{n} + b_{s}^{n} *) \cdot \s^{n} *)^{\frac{ 1 }{ n }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{s} \s  =  *( a_{s}^{n} \s^{n} + b_{s}^{n} \s^{n} *)^{\frac{ 1 }{ n }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{s} \s  =  *( *( a_{s} \s *)^{n} + *( b_{s} \s *)^{n} *)^{\frac{ 1 }{ n }}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'sind alle superialen Fermatschen Tripel \lm{ a_{s} \s }, \lm{ b_{s} \s } und \lm{ c_{s} \s } für alle reell algebraischen Zahlen'."\n".
                      '\lm{ a_{s} }, \lm{ b_{s} } und \lm{ c_{s} } ganz.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Bei den Fermatschen Tripeln ist bemerkenswert, dass es im Endlichen nicht eine einzige Lösung für ganze Zahlen gibt,'."\n".
                    'im superialen Unendlichen sind dann alle Lösungen ganze Zahlen.'."\n",
                      'Dies hat eine gewisse Ähnlichkeit mit dem \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Beweis der Überrationalitätsvermutung},'."\n".
                    'bei dem ganzzahlige Brüche zur Darstellung von irrationalen Wurzeln gesucht werden.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:Aktual-Unendliche-Exponenten-der-Primzahlen-in-Potenzzahlen', text =>
                      
                'Aktual-Unendliche Exponenten der Primzahlen in Potenzzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Beweis der Überrationalitätsvermutung} bringt neue Erkenntnisse bezüglich'."\n".
                    'des Rechnens mit aktual unendlichen Potenzen von Primzahlen oder allgemeiner von natürlichen Zahlen in \jump{OM:SupNum:Ueberrationalitaetsvermutung:UntersuchungDerPotenzialzahlen}{Potenzzahlen} mit sich.'."\n".
                    'Diese betreffen die Ganzzahligkeit von aktual unendlichen Exponenten mit endlichen rationalen Anteilen in ihrer Summe:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.Exp', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall i \in \mathbb{N} *) *( g \in \mathbb{N}_{\infty} *)  *[  i < g  *]  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-g-aktual-unendlich-ganz}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{N} *)  *[  n^{g}  \in  \mathbb{N}_{\infty}  *]  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-in-natuerlich-infinit}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Hier steht \lm{ g } für jede aktual unendlich große ganze Zahl.'."\n".
                    '\lm{ n^{g} } ist demnach dann auch eine aktual unendlich große ganze Zahl.'."\n",
                      'Dies können wir noch etwas eleganter und genauer ausdrücken, wenn wir die Klasse der wirklich aktual unendlich großen ganzen Zahlen \lm{ \mathbb{N}_{\infty}^{\infty} } definieren:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.Exp', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{N}_{\infty}^{\infty}  :=  *\{  u \in \mathbb{N}_{\infty}  *|*  *( \forall i \in \mathbb{N} *) *[ i < u *]  *\}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  g  \in  \mathbb{N}_{\infty}^{\infty}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{g}  \in  \mathbb{N}_{\infty}^{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Nun wissen wir schon aus Formel \jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-plus-eins-durch-x-in-natuerlich-infinit},'."\n".
                    'dass:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.Exp', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x \in \mathbb{N}^{+} *)  *[  n^{g + \frac{ 1 }{ x }}  \in  \mathbb{N}_{\infty}  *]  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-plus-eins-durch-x-in-natuerlich-infinit}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{g + \frac{ 1 }{ x }}  \in  \mathbb{N}_{\infty}^{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dann gilt auch'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.Exp', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall y \in \mathbb{Z} *)  *[  n^{g + \frac{ y }{ x }}  \in  \mathbb{N}_{\infty}^{\infty}  *]  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'denn'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.Exp', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( n^{g + \frac{ 1 }{ x }} *)^{y}  \in  \mathbb{N}_{\infty}^{\infty}  }'),
                      array( display => 'on',  latex => '{  *( n^{g} *)^{y - 1}  \in  \mathbb{N}_{\infty}^{\infty}  }'),
                      array( display => 'on',  latex => '{  n^{g + \frac{ y }{ x }}  =  \frac{ *( n^{g + \frac{ 1 }{ x }} *)^{y} }{ *( n^{g} *)^{y - 1} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{g + \frac{ y }{ x }}  =  \frac{ n^{y g + \frac{ y }{ x }} }{ n^{(y - 1) g} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{g + \frac{ y }{ x }}  =  n^{*( y g + \frac{ y }{ x } *) - (y - 1) g}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{g + \frac{ y }{ x }}  =  n^{y g - (y - 1) g + \frac{ y }{ x }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{g + \frac{ y }{ x }}  =  n^{g + \frac{ y }{ x }}  \;\; .  }'),
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:X',
                Title => '\small{In faktorisierter Form …}',
                TitleVis => 'In faktorisierter Form:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.Exp', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( n^{g + \frac{ 1 }{ x }} *)^{y}  \in  \mathbb{N}_{\infty}^{\infty}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( n^{g} n^{\frac{ 1 }{ x }} *)^{y}  \in  \mathbb{N}_{\infty}^{\infty}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{y g} n^{\frac{ y }{ x }}  \in  \mathbb{N}_{\infty}^{\infty}  }'),
                      array( display => 'on',  latex => '{  *( n^{g} *)^{y - 1}  \in  \mathbb{N}_{\infty}^{\infty}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{(y - 1) g}  \in  \mathbb{N}_{\infty}^{\infty}  }'),
                      array( display => 'on',  latex => '{  n^{g + \frac{ y }{ x }}  =  \frac{ n^{y g} n^{\frac{ y }{ x }} }{ n^{(y - 1) g} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{g + \frac{ y }{ x }}  =  \frac{ n^{y g} }{ n^{(y - 1) g} } n^{\frac{ y }{ x }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{g + \frac{ y }{ x }}  =  n^{g} n^{\frac{ y }{ x }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{g + \frac{ y }{ x }}  =  n^{g + \frac{ y }{ x }}  \;\; .  }'),
                    ))),

                    ))),

                  array( 'text', array( text => array(
                    'Die ganzzahlige Teilbarkeit des Bruchs wird durch die um \lm{ y } erhöhte Potenz des Zähler garantiert,'."\n".
                    'im Verhältnis zu der die Erhöhung der Potenz des Nenners mit \lm{ y - 1 } geringer ausfällt.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:UntersuchungDerPotenzialzahlen:X', text =>
                      
                'Betrachtung im Rahmen der Potenzialzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die \jump{OM:SupNum:Ueberrationalitaetsvermutung:UntersuchungDerPotenzialzahlen}{Potenzialzahlen} \lm{ \mathbb{Pn} } sind Zahlen,'."\n".
                    'die im Allgemeinen nicht in der Menge der Superial-Zahlen \lm{ \mathbb{S} } und'."\n".
                    'auch nicht in der Klasse der Ordinalzahlen\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}} \lm{ \mathbb{On} } sind.'."\n".
                    'Sie spielen beim \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Beweis der Überrationalitätsvermutung} eine entscheidende Rolle,'."\n".
                    'der für die Superial-Zahlen sehr bedeutsam ist, und ergänzen die vorgenannte Klasse und Menge systematisch.'."\n",
                      'Sie sind Potenzen natürlicher Zahlen beziehungsweise von Primzahlen, die bis zur vollständigen Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    '\lm{ ω } und noch weiter hinauf reichen und Summen dieser.'."\n".
                    'Die aktual unendliche Größe \lm{ g } in den obigen allgemeinen Rechenregeln ist bei den Potenzialzahlen durch positive natürliche Potenzen von \lm{ ω }'."\n".
                    'und deren positive natürliche Vielfache ersetzt.'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ei.NR.Exp', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall k, m \in \mathbb{N}^{+} *)  *[  n^{k ω^{m} + \frac{ y }{ x }}  \in  \mathbb{N}_{\infty}^{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{k ω^{m} + \frac{ y }{ x }}  \in  \mathbb{Pn}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:UntersuchungDerPotenzialzahlen:Equ-n-hoch-k-omega-Potenz-plus-y-durch-x-in-Pn', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:UntersuchungDerPotenzialzahlen:Equ-n-hoch-k-omega-Potenz-plus-y-durch-x-in-Pn}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'So sind die Potenzialzahlen diesbezüglich einfach ein Spezialfall.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen:X', text =>

                '', subline =>
                  '')),

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
                      array(  jump_name => 'OM:SupNum:Eigenschaften:NeueRechenregelnImUnendlichen', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    '• Die Null ist in den Superial-Zahlen viel simpler definiert, als in den hyperreellen Zahlen.',
                    '• In den Superial-Zahlen brauchen wir nicht eine Reihe von unendlich vielen Zahlen, um infinite und infinitesimale Zahlen zu definieren.',
                    '– Wir können das Symbol \lm{ \s } für ein unendliches Flächenprodukt der Primzahlen nehmen, siehe oben, und dieses mit endlichen Symbolen, wie Brüchen, kombinieren.',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Eigenschaften:VergleichMitHyperreellenZahlen:X', text =>
                      
                '\color{*Bearb}{(In Arbeit …)}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
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
                    // '\bold{X}',
                    '• Verweisen auf \jumpname{OM:SupNum:Arithmetische-Struktur-Geometrie}.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Mächtigkeit\footnote{\const{SupNum_g_footnote_text_Maechtigkeit}}'."\n".
                    'der reellen Zahlen wird mit \lm{ \mathfrak{c} } bezeichnet:\footnote{\const{SupNum_g_footnote_text_Kontinuumshypothese_Einfache}}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.UK', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathfrak{c}  =  *| \mathbb{R} |*  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wäre die Kontinuumshypothese\footnote{\const{SupNum_g_footnote_text_Kontinuumshypothese}} wahr, dann könnte gezeigt werden,'."\n".
                    'dass die Mächtigkeit des Kontinuums der Potenzmenge von \lm{ \mathbb{N} } entspricht.\footnote{\const{SupNum_g_footnote_text_Kontinuumshypothese_Einfache}}'."\n".
                    'Warum die Kontinuumshypothese genau dies annimmt, hab ich noch nicht ganz genau verstanden.'."\n".
                    'Die Mächtigkeit des Kontinuums wird dann mit Hilfe von \lm{ ω } als \lm{ \aleph_{1} } formuliert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.UK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \aleph_{1}  =  2^{\aleph_{0}}  }'),
                      array( display => 'on',  latex => '{  \aleph_{0}  =  ω  =  \#\mathbb{N}  =  *| \mathbb{N} |*  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \aleph_{1}  =  2^{ω}  =  *| \mathcal{P}(\mathbb{N}) |*  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Kontinuumshypothese vermutet, dass die reellen Zahlen die gleiche Mächtigkeit besitzen,'."\n".
                    'wie das Kontinuum:\footnote{\const{SupNum_g_footnote_text_Kontinuumshypothese_Einfache}}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.UK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathfrak{c}  ?=  \aleph_{1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Idee ist also, dass die Mächtigkeit der reellen Zahlen der Mächtigkeit der Potenzmenge der Menge \lm{ \mathbb{N} }'."\n".
                    'der natürlichen Zahlen, also \lm{ \vert \mathcal{P}(\mathbb{N}) \vert }, mit \lm{ 2^{ω} } entspricht.'."\n".
                    'Die Mächtigkeit einer Menge ist dabei nicht unbedingt der Anzahl der Elemente dieser Menge gleich.'."\n",
                      'Dies möchte ich nicht bezüglich der Mächtigkeit grundsätzlich in Frage stellen.'."\n".
                      'Sondern ich möchte die Kontinuumshypothese durch die mit den Superial-Zahlen gefundene Struktur des Unendlichen,'."\n".
                    'der Dichte oder das Rasters der \jump{OM:SupNum:Arithmetische-Struktur-Geometrie}{arithmetischen Struktur der Geometrie}'."\n".
                    '(Abschnitt \italic{›\jumpname{OM:SupNum:Arithmetische-Struktur-Geometrie:Vortext:DasKontinuum}‹}),'."\n".
                    'differenzierter und tiefer beleuchten sowie gegebenenfalls sinnvoller formulieren, um weitere Erkenntnisse zu gewinnen.'."\n",
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
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:X', text =>
                      
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
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:X', text =>
                      
                'Die Konstruktion und der Sinn von \lm{ \s } wirft Fragen bezüglich der Struktur der reellen Zahlen auf', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Nun geht es bei der Kontinuumshypothese auch um die Mächtigkeit der reellen Zahlen und um die der natürlichen Zahlen;'."\n".
                    'schließlich ja um die Frage, ob es noch eine Mächtigkeit zwischen denen dieser beiden Mengen gibt.'."\n",
                      'Die superiale Basis \lm{ \s } ist nun so konstruiert, dass ein Produkt mit ihr und jeder reell algebraischen Zahl,'."\n".
                    'die durch Radikale darstellbar ist,'."\n".
                    'eine ganze Zahl ergibt, wie wir im Abschnitt \italic{›\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}‹} zeigen.'."\n".
                    'Dies gelingt unter anderem mit Hilfe unseres Beweises der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung}.'."\n".
                    'Und wir \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{vermuten, dass dies sogar für alle reell algebraischen Zahlen gilt},'."\n".
                    'was allerdings noch zu beweisen aussteht.'."\n",
                      'Es ist offensichtlich, dass \\jump{OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s}{jedes Produkt einer rationalen Zahl mit unserer superialen Basis \lm{ \s } eine ganze Zahl ergibt}.'."\n".
                    'Wir können daran erkennen, dass schon die Struktur der reell algebraischen Zahlen es erfordert, nicht nur'."\n".
                    '\lm{ 2^{ω} }, sondern auch \lm{ 3^{ω} } und ebenso alle'."\n".
                    'anderen aktual unendlichen Potenzen endlicher Primzahlen bis ins Unendliche, einzubeziehen.'."\n".
                    'Da scheint es Fraglich, ob \lm{ 2^{ω} } ausreichen kann,'."\n".
                    'die Komplexität oder Feinheit der Struktur aller reellen Zahlen darzustellen.'."\n".
                    'Dazu kommt, dass die reellen Zahlen auch noch alle transzendenten Zahlen enthalten sollen, was im Rahmen der Superial-Zahlen weitere interessante Fragen aufwirft,'."\n".
                    'siehe Seite \italic{›\jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung}‹}'."\n".
                    'oder auch den folgenden Abschnitt \italic{›\jumpname{OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:Transzendente-Zahlen}‹}.'."\n",
                      'Während die Mächtigkeit der reell algebraischen Zahlen, der der natürlichen Zahlen entspricht,'."\n".
                    'weil sie abzählbar sind,\footnote{\const{SupNum_g_footnote_text_TranszendenteZahlEigenschaften}}'."\n".
                    'ist die Mächtigkeit der transzendenten Zahlen\footnote{\const{SupNum_g_footnote_text_TranszendenteZahl}} überabzählbar.\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:TranszendenteZahl:2023}, Überabzählbarkeit.}'."\n",
                      'Durch die Superial-Zahlen sehen wir nun, dass die Anzahl der sinnvollen Koeffizienten der Superial-Zahlen \lm{ \# \mathbb{A}_{\S} } dem besagten'."\n".
                    'aktual unendlichen Flächenprodukt \lm{ \s } geteilt durch die Anzahl der endlichen ganzen Zahlen \lm{ \# \mathbb{Z} = 2 \cdot ω }, also \lm{ \# \mathbb{A}_{\S} = \frac{ \s }{ 2 \cdot ω } }, entspricht,'."\n".
                    'siehe Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}.'."\n",
                      'Wenn wir dies alles in einer Gesamtschau betrachten, bekomme ich den Eindruck, dass hier etwas nicht zusammenpasst und überdacht werden sollte.'."\n",
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:X', text =>
                  'Unabhängigkeit von der Mengenlehre (ZFC)', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'An dieser Stelle möchte ich darauf aufmerksam machen, dass die Kontinuumshypothese von der'."\n".
                    'Zermelo-Fraenkel-Mengenlehre mit Auswahlaxiom (ZFC) insgesamt unabhängig ist.\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Kontinuumshypothese:2023}, Unabhängigkeit von ZFC.}'."\n".
                    'Dass bedeutet, die Mengenlehre – genauer die ZFC-Mengenlehre – gibt uns nicht die Möglichkeit zu entscheiden, ob die Kontinuumshypothese wahr oder falsch ist.'."\n",
                      'Hier kommen die auf diesen Seiten entwickelten Superial-Zahlen, und die mit ihnen verbundenen \jump{OM:BiOrd:Home}{Biordinalzahlen}, ins Spiel.'."\n".
                    'Die Superial-Zahlen begründen das Aktual-Unendliche auf den endlichen Primzahlen und so auf der Arithmetik und bringen sie mit der Mengenlehre zusammen.'."\n".
                    'Sie erweitern so die reell algebraischen Zahlen, die durch Radikale darstellbar sind, und vielleicht sogar alle, auf einen'."\n".
                    'aktual unendlichen angeordneten algebraischen Körper\footnote{\const{NSOSP_g_footnote_text_KoerperAlgebra}}\footnote{\const{SupNum_g_footnote_text_AlgebraischerZahlkoerper}}.'."\n".
                    'Das heißt, wir haben durch die Superial-Zahlen nicht nur die Mengenlehre, sondern auch eine Arithmetik des Aktual-Unendlichen mit ausgezeichneten Eigenschaften'."\n".
                    'zur Verfügung.'."\n",
                      'Und dadurch konnten wir schon neue Erkenntnisse der Arithmetik des Aktual-Unendlichen gewinnen, wie eine neue Definition der Ableitung, des Integrals,'."\n".
                    'also der Erweiterung des Zählens, und der Primzahlen, der Definition der vollständigen Induktion über endliche Primzahlen sowie'."\n".
                    'der Definition von irrationalen reell algebraischen Zahlen mit überratiionalen Brüchen, also Brüchen aus aktual unendlichen ganzen Zahlen, die irrationale Wurzeln und ähnliches beschreiben.'."\n",
                      'All dies steht offensichtlich in Beziehung zur Kontinuumshypothese und kann so zu deren besseren Verständnis herangezogen werden.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:Transzendente-Zahlen', text =>
                      
                'Transzendente Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Hinsichtlich der transzendenten Zahlen möchte ich am Beispiel der superialen Eulerschen Zahl \lm{ \e_\s } zeigen,'."\n".
                    'dass sich hier weitere Fragen ergeben:'."\n",
                      'Auf der Seite \italic{\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion}}'."\n".
                    'kommen wir zu dem Schluss, dass die Eulersche Zahl keine rein endliche irrationale Zahl ist, nicht einmal eine'."\n".
                    'Superial-Zahl der auf dieser Seite definierten 1. Ordnung, weil sie unweigerlich'."\n".
                    'aktual unendlich kleine Summanden der Größenordnung \lm{ \s^{-\s} } enthält, die nicht Null werden können.'."\n".
                    'Wie gesagt, fällt sie hierdurch selbst aus der Menge \lm{ \mathbb{S} } der Superial-Zahlen heraus.'."\n".
                    'Sie ist also keine rein endliche reelle Zahl, die nur aus Summanden endlicher Größe besteht.'."\n",
                      'An dieser Stelle würde ich sagen, dass zumindestens \lm{ \e_\s } keine reelle Zahl ist'."\n".
                    'und die Frage im Raum steht, ob nicht auch alle anderen transzendenten Zahlen eigentlich gar keine reellen Zahlen sind.'."\n".
                    'Sondern, wir lassen uns vielleicht dadurch täuschen, dass wir glauben, transzendente Zahlen wären durch Dezimalzahlen'."\n".
                    'mit unendlich vielen Nachkommastellen darstellbar, ohne zu beantworten,'."\n".
                    'wie groß diese minimale Unendlichkeit der Nachkommastellen denn eigentlich ist;'."\n".
                    'ob es nicht vielleicht unendliche Größenordnungen mehr sind, als die Unendlichkeit der vollständigen Induktion, also \lm{ \s = ω^{ω}} viele Nachkommastellen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:X', text =>
                      
                'Schlussfolgerung zur Untersuchung der Kontinuumshypothese', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ich denke, wir sollten die Struktur der reellen Zahlen und ihre Aufteilung in Untermengen'."\n".
                    'mit Hilfe der Primzahlen – und somit mit Hilfe der Superial-Zahlen – tiefer untersuchen und verstehen,'."\n".
                    'damit wir in die Lage kommen, die Kontinuumshypothese im Detail zu beleuchten und hoffentlich dann für uns sinnvolle Antworten zu finden.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
