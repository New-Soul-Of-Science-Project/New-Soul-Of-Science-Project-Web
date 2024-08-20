<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Eigenschaften'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Eulersche-Zahl-e-Funktion'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    // '• Ist \term{\M(S)} bezüglich der Addition und Multiplikation ein \jump[https://de.wikipedia.org/wiki/Geordneter_Körper]{}{archimedisch angeordneter Körper}?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen, als aktual unendliche algebraische Gruppe\footnote{\const{NSOSP_g_footnote_text_AbelscheGruppe}},'."\n".
                    'deren Basis über ein unendliches \jump{OM:SupNum:Formale-Entwicklung}{Primzahl-Produkt} definiert ist, haben eine ganz besondere Struktur.'."\n".
                    'Ihre Struktur ist dadurch tief mit den \jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Zahlen}, den \jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Zahlen}'."\n".
                    'und den \jump{OM:SupNum:Formale-Entwicklung:PrimSZ}{Primzahlen} verbunden und erweitern diese ins Aktual-Unendliche.'."\n".
                    'Auch sind sie dadurch mit den Ordinalzahlen\footnote{\const{NSOSP_g_footnote_text_Ordinalzahl}} und im Besonderen mit den von mir entdeckten'."\n".
                    'oder geschöpften \jump{OM:BiOrd:Home}{Biordinalzahlen} verwandt.'."\n",
                      'Ihre besonderen Eigenschaften versprechen uns deshalb neue Einblicke in die Struktur der Zahlen.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Die sinnvollen Koeffizienten der Superial-Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften', type => 'back'),
                    )),
                      
                  array( 'text', array( text => array(
                    'Es sind im Grunde drei Bedingungen zu erfüllen, damit eine Zahl \lm{ a } ein sinnvoller Koeffizient der Superial-Zahlen sein kann.'."\n",
                      'Ihr Produkt mit der superialen Basis \lm{ a \cdot \s } darf nicht dazu führen, dass sich die aktual unendliche Größenordnung verändert,'."\n".
                    'also die Potenz von \lm{ \s } im Wert des Produkts,'."\n".
                    'weil die Koeffizienten sonst nicht wie sinnvolle Ziffern in einem \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystem}'."\n".
                    'fungieren können.'."\n".
                    'Das bedeutet, dass \lm{ a } eine endliche Zahl sein muss.'."\n".
                    'Es muss also immer eine endliche ganze Zahl \lm{ z_{k} } existieren, die kleiner als \lm{ a } ist,'."\n".
                    'und es muss auch immer eine endliche ganze Zahl \lm{ z_{g} } existieren, die größer als \lm{ a } ist.'."\n",
                      'Die größte mir bekannte Zahlenmenge, die diese Bedingung erfüllt ist die Menge der reellen Zahlen \lm{ \mathbb{R} }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists z_{k}, z_{g} \in \mathbb{Z} *) *( \forall a \in \mathbb{R} *)  *[  z_{k}  <  a  <  z_{g}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Weiterhin darf sich durch \lm{ a \cdot \s } keine endliche oder aktual unendliche Größenordnung des Stellenwertsystems verändern,'."\n".
                    'außer die Stelle mit der Potenz Eins von \lm{ \s }.'."\n".
                    'Das heißt, dass \lm{ a } keine aktual unendlich kleinen Summanden enthalten darf.'."\n",
                      'Und \lm{ a \cdot \s } muss eine ganze Zahl sein.'."\n".
                    'Sie muss gerundet also die gleiche Zahl bleiben.'."\n".
                    'Denn nur dann lässt sich das Zählen bis ins aktual unendliche und darüber hinaus definieren.'."\n".
                    'In unserem Fall ist die ganze Zahl \lm{ a \cdot \s } natürlich von der aktual unendlichen Größenordnung von \lm{ \s }.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Es existiere also die Menge'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \exists \mathbb{A}_{\S}\!: *( \forall a \in \mathbb{R}\!:  a \cdot \s \in \mathbb{N}_{\infty}  \Rightarrow  a \in \mathbb{A}_{\S} *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'der sinnvollen Koeffizienten der Superial-Zahlen.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Stellt sich also die Frage:'."\n".
                    'Welche uns bekannte Menge entspricht \lm{ \mathbb{A}_{\S} } dann?'."\n",
                      'Wie wir sehen werden, ist diese Frage nicht so schnell ganz genau zu beantworten.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:X', text =>
                      
                'Sind die sinnvollen Koeffizienten alle reellen Zahlen, also \lm{ \mathbb{A}_{\S} = \mathbb{R} }?', subline =>
                  'Eine Frage der Transzendenz')),
                  array( 'text', array( text => array(
                    'Das hängt davon ab, wie wir im Lichte der Superial-Zahlen beantworten, welche Zahlen wir zu den reellen Zahlen zählen.'."\n".
                    'Wenn wir \jump{OM:SupNum:Ableitungen-Integrale}{die Ableitung und das Integral} über die Superial-Zahlen definieren'."\n".
                    'und nicht, wie heute meistens üblich, über den Limes, und berechnen, welche Funktion abgeleitet sie selber ergibt,'."\n".
                    'dann erhalten wir eine \jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{\lm{ \e }-Funktion} und damit eine'."\n".
                    '\jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{eulersche Zahl \lm{ \e_{\s} }}, die mehr Details ihrer Struktur offenbart,'."\n".
                    'als die Zahl \lm{ \e }, die wir über den Limes erhalten.'."\n",
                      'Die uns bekannte Zahl \lm{ \e } ist von der Zahl \lm{ \e_{\s} } nämlich nur der Summand endlicher größer.'."\n".
                    '\lm{ \e_{\s} } enthält aber noch aktual unendlich viele, aktual unendlich kleine Summanden herunter bis zur Potenz \lm{ \s^{-\s} }.'."\n".
                    'Damit wäre die Zahl \lm{ \e } zwar theoretisch eine reelle Zahl und damit möglicherweise als Koeffizient der Superial-Zahlen geeignet.'."\n".
                    'Aber im Rahmen der Superial-Zahlen'."\n".
                    'macht die \lm{ \e }-Funktion nur mit der Basis \lm{ \e_{\s} } Sinn.'."\n".
                    '\lm{ \e_{\s} } ist allerdings nicht einmal eine Superial-Zahl der hier definierten 1. Ordnung, weil sie'."\n".
                    'aktual unendlich kleine Potenzen von \lm{ \s } enthält und die Superial-Zahlen nur endlich Potenzen von \lm{ \s } erlauben.'."\n",
                      'Damit würde ich \lm{ \e_{\s} } möglicherweise nicht zur Menge \lm{ \mathbb{R} } der reellen Zahlen zählen.'."\n".
                    'In meinen Augen sind hier also noch Einigungen nötig, welche Zahlen wir sinnvollerweise zu \lm{ \mathbb{R} } hinzurechnen.'."\n".
                    'Und wir müssen uns klar darüber werden, ob es Sinn macht \lm{ \e } weiterhin als eulersche Zahl anzusehen oder ob'."\n".
                    'wir nur noch \lm{ \e_{\s} } als eulersche Zahl anerkennen sollten.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:X', text =>
                      
                'Sind die sinnvollen Koeffizienten alle algebraischen Zahlen, also \lm{ \mathbb{A}_{\S} = \mathbb{A} }?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper'),
                    )),
              )
          ); ?>


		    	<!  • S ist ein angeordneter Körper  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen', type => 'back'),
                    )),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(Durch den Beweis der \italic{\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}} haben sich die Koeffizienten der Superial-Zahlen von den endlichen rationalen Zahlen auf die Koeffizienten der algebraischen Zahlen erweitert, was noch berücksichtigt werden muss.)} \\\\'."\n".
                    'Die Menge der Superial-Zahlen \lm{ \mathbb{S} } ist in vielerlei Hinsicht etwas Besonderes.'."\n",
                      'Wir können nämlich für zwei Superial-Zahlen, die nicht gleich sind, immer herausfinden, welche'."\n".
                    'größer als die andere ist, weil sie eine lexikografische Ordnung\footnote{\const{SupNum_g_footnote_text_LexikographischeOrdnung}} haben.'."\n".
                    '\lm{ \mathbb{S} } ist nämlich ein angeordneter Körper\footnote{\const{NSOSP_g_footnote_text_GeordneterKoerper}}.'."\n".
                    '\color{*Bearb}{(Dies ist zu beweisen: die Körpereigenschaft und das Angeordnetsein.)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper:X', text =>
                      
                'Ist \lm{ \mathbb{S} } ein archimedisch angeordneter Körper?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Es stellt sich die Frage, ob die Superial-Zahlen, also die Menge \lm{ \mathbb{S} },'."\n".
                    'auch ein archimedisch angeordneter Körper\footnote{\const{NSOSP_g_footnote_text_ArchimedischGeordneterKoerper}} sind.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Das archimedische Axiom\footnote{\const{NSOSP_g_footnote_text_ArchimedischesAxiom}} besagt,'."\n".
                      'dass in einem archimedisch angeordneten Körper \lm{ \mathbb{K} } immer eine natürliche Zahl existiert,'."\n".
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
                      'weil es Elemente einer Untermenge \lm{ x \in \mathbb{Q} } gibt, für das es keinen Faktor in \lm{ \mathbb{N} } gibt, um beides als Produkt größer als \lm{ \s } zu machen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \nexists n \in \mathbb{N} *) *( \forall q, x \in \mathbb{Q} *) *( q \cdot \s > x > 0 *) *[  x \cdot n > q \cdot \s  *]  }'),
                      array( display => 'on',  latex => '{  q \cdot \s \in \mathbb{S}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow *( \nexists n \in \mathbb{N} *) *( \forall x, y \in \mathbb{S} *) *( y > x > 0 *) *[  x \cdot n > y  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Denn \lm{ \mathbb{S} } enthält zum Beispiel mit \lm{ q \cdot \s } Elemente, die größer als jede endliche natürliche Zahl und damit unendlich groß sind.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wie wir daran sehen, handelt es sich bei den Superial-Zahlen um eine ganz andere Menge,'."\n".
                    'als bei Mengen endlicher Zahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Gibt es eine größere geordnete Teilmenge der Superial-Zahlen, die auch unendliche Elemente oder Elemente mit solchen Anteilen, beinhaltet, die ein archimedisch angeordneter Körper ist?} \\\\'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wie kann das archimedische Axiom für eine möglichst große Teilmenge von \lm{ \mathbb{S} } erfüllt werden?'."\n".
                      'Es scheint mir, dass dies erfüllt wird, wenn es keine unendlich großen Summanden in den Elementen der Menge gibt.'."\n".
                      'Sowohl \lm{ x } als auch \lm{ y } müssen zwischen den endlichen Zahlen liegen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{A}  :=  *\{  x *|* *( \exists n \in \mathbb{N} *) *( \forall x, y \in \mathbb{S} *) *( y > x > 0 *) *[ x \cdot n > y *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'In Anlehnung an die Definition der Menge aller Superial-Zahlen in Formel \jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Equ-Def-S-Polynom}'."\n".
                      'können wir diese Menge auch so schreiben:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \mathbb{S}_{A}  :=  *\{  x *|* *( \forall d \in \mathbb{Z}_{0}^{-} *) *( \forall q_{d} \in \mathbb{Q} \setminus \{0\} *) *( \forall q_{i} \in \mathbb{Q} *) \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\; *[ q_{d} \s^{d} + \sum_{( \forall i \in \mathbb{Z})[d > i]} q_{i} \s^{i} *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'So enthalten diese Superial-Zahlen keine Summanden mit Potenzen von \lm{ \s }, die größer als Null sind.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper:X', text =>
                      
                'Aber \lm{ \mathbb{S} } ist bezüglich der natürlichen Superial-Zahlen \lm{ \mathbb{S}_N } ein archimedisch angeordneter Körper', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.AK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists n \in \mathbb{S}_{\N} *) *( \forall x, y \in \mathbb{S} *) *( y > x > 0 *) *[  x \cdot n > y  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\color{*Bearb}{(In Arbeit …)}'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper:X', text =>
                      
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
                      array(  jump_name => 'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
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
                        'Multipliziert mit \lm{ 2 \cdot ω } für die Anzahl der endlichen ganzen Zahlen, siehe \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}, die ja zu jedem Koeffizienten addiert – und im Falle der negativen natürlich dann abgezogen – werden. Wobei im Falle von \lm{ a = 0 } nur natürliche Zahlen addiert und im Falle von \lm{ a = 1 } nur negative ganze Zahlen addiert, also effektiv abgezogen, werden.',
                    ))),
                  array( 'text', array( text => array(
                    'So formulieren wir die Vorgänger von \lm{ \s } folgendermaßen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Das Intervall der Vorgänger der superialen Einheit ist im Detail'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, \s [_{\mathbb{S}_{\N}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\R}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < 1  \\\\  \s + z^{-}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  \;\;  ,  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s}', label_incr => true),
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
                      array( display => 'on',  latex => '{  \Rightarrow  \# [ 0, 1 [_{\mathbb{A}_{\R}}  =  \frac{ \s }{ 2 \cdot ω }  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# [ 0, 1 [_{\mathbb{A}_{\R}}  =  \frac{ ω^{ω - 1} }{ 2 }  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'nach Umformung und mit Hilfe von Formel \jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}.'."\n",
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
                    'Aber auch dieses Produkt erscheint auf den ersten Blick viel größer als die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
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
                    'Und dies soll sich in der ersten Struktur der Formulierung ausdrücken, die wir auf Basis der Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z} ansetzen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\R}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\R}} *)  \\\ \qquad\qquad\qquad\;\,  *[  x = *( n - *( 2 \cdot n + 1 *) *) + u  *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Intervalle \lm{ u }, die zwischen den Zahlen liegen, hängen an der vorstehenden ganzen Zahl und werden auf diese Weise mit verschoben.'."\n".
                    'Daher steht quasi am „Beginn“ der endlichen negativen ganzen Zahlen auch der Punkt einer ganzen Zahl,'."\n".
                    'was eben der Grund dafür ist, dass es eine endliche negative ganze Zahl mehr geben muss, als positive, ohne die Null (siehe \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen}).'."\n".
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
                      'Demnach sind wir sicher, dass die Anzahl der endlichen ganzen Zahlen wirklich \lm{ 2 \cdot ω } ist.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:X', text =>
                      
                'Die superiale Basis \lm{ \s } und die Menge \lm{ \mathbb{S} } haben einen ganz bemerkenswerten Zusammenhang', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Als wir die \jump{OM:SupNum:Struktur-Geometrie}{arithmetische Struktur der Geometrie} untersuchten,'."\n".
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
                    'Das bedeutet, die maximale normierte Teilung einer Strecke zwischen Null und Eins mit natürlichen endlichen Teilern ist \lm{ \s }.'."\n".
                    '\hidden{\color{*Bearb}{Teilen wir mehr, bekommen wir aktual unendlich kleine Anteile in die Koordinaten der entstehenden Teilungspunkte.'."\n".
                    'Die Koordinaten sind also nicht mehr rein endlicher Natur. (Stimmt das wirklich so?)}}'."\n",
                      'Zum anderen können wir aktual unendlich kleine ganze Zahlen mit den Superial-Zahlen definieren,'."\n".
                    'mit denen wir in \lm{ \s } Schritten, die eine Größe von \lm{ \s^{-1} } haben, von Null bis an, aber ausschließlich der Eins zählen können.'."\n".
                    'Das bedeutet, dass mit jedem Punkt, den wir mit dem Koeffizienten \lm{ n }, \lm{ z } oder \lm{ z^{-} } von \lm{ \s^{-1} },'."\n".
                    'also angelehnt an \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s} mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\Z}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} n \cdot \s^{-1}  &  \text{ falls } a = 0  \\\\  a + z \cdot \s^{-1}  &  \text{ falls } 0 < a < 1  \\\\  1 + z^{-} \cdot \s^{-1}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  \;\;  ,  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{In Stellenwert-Notation …}',
                TitleVis => 'In Stellenwert-Notation:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\Z}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} .*〈 n *〉  &  \text{ falls } a = 0  \\\\  *〈 a *〉.*〈 z *〉  &  \text{ falls } 0 < a < 1  \\\\  *〈 1 *〉.*〈 z^{-} *〉  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }'),
                    ))),

                    ))),

                  array( 'text', array( text => array(
                    'über \lm{ 2 \cdot ω } Schritte je Koeffizient \lm{ a } im Endlichen'."\n".
                    'von Null bis ausschließlich Eins zählen.'."\n".
                    'Dies wären dann aber \lm{ 2 \cdot ω \cdot \s } Schritte, wenn \lm{ a } jeden Punkt von \lm{ \s }'."\n".
                    'adressieren würde.'."\n".
                    'Angelehnt an Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen}'."\n".
                    'können wir die Menge der Punktkoordinaten schreiben als:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\Z}}  =  \\\  \quad *\{  \quad\,  0, \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{1}{2} - 2 \s^{-1},\; \tfrac{1}{2} - \s^{-1},\; \tfrac{1}{2},\; \tfrac{1}{2} + \s^{-1},\; \tfrac{1}{2} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{2}{3} - 2 \s^{-1},\; \tfrac{2}{3} - \s^{-1},\; \tfrac{2}{3},\; \tfrac{2}{3} + \s^{-1},\; \tfrac{2}{3} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, 1 - 3 \s^{-1}, 1 - 2 \s^{-1}, 1 - \s^{-1}   \quad *\}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{In Stellenwert-Notation …}',
                TitleVis => 'In Stellenwert-Notation:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\Z}}  =  \\\  \quad *\{  \;\;\;\,  .*〈 0 *〉,\; .*〈 1 *〉,\; .*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{1}{2} *〉.*〈 -2 *〉,\; *〈 \tfrac{1}{2} *〉.*〈 -1 *〉,\; \tfrac{1}{2},\; *〈 \tfrac{1}{2} *〉.*〈 1 *〉,\; *〈 \tfrac{1}{2} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{2}{3} *〉.*〈 -2 *〉,\; *〈 \tfrac{2}{3} *〉.*〈 -1 *〉,\; \tfrac{2}{3},\; *〈 \tfrac{2}{3} *〉.*〈 1 *〉,\; *〈 \tfrac{2}{3} *〉.*〈2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, *〈 1 *〉.*〈 -3 *〉,\; *〈 1 *〉.*〈 -2 *〉,\; *〈 1 *〉.*〈 -1 *〉   \quad *\}  }'),
                    ))),

                    ))),

                  array( 'text', array( text => array(
                    'Nun können es aber nur \lm{ \s } Zählschritte der Größe \lm{ \s^{-1} } von Null bis ohne Eins sein, wenn wir \jump{OM:SupNum:Ableitungen-Integrale}{die Ableitungen und das Integral},'."\n".
                    'wie geschehen, über die Superial-Zahlen definieren.'."\n".
                    'Und dazu passend ist es auch offensichtlich, dass \lm{ a } nicht alle \lm{ \s } der Punkte'."\n".
                    '\jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{als Koeffizient adressieren} kann:'."\n",
                      'So können zum Beispiel in der Menge der Superial-Zahlen nicht die Punkte \lm{ \frac{ k }{ 2^{ω} } }'."\n".
                    'der arithmetischen Struktur der Geometrie adressiert werden,'."\n".
                    'weil \lm{ x \in \lbrack0, 1\lbrack_{\mathbb{S}^{-1}_{\Z}} } diesen Wert wegen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} *) *( k \in \mathbb{N}^{+} *)  *[  x  \neq  \frac{ k }{ 2^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( a \in [0, 1[_{\mathbb{A}_{\S}} *) *( z \in \mathbb{Z} *)  *[  a + z \cdot \s^{-1}  \neq  \frac{ k }{ 2^{ω} }  *]  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  a + \frac{ z }{ \s }  \neq  \frac{ k }{ 2^{ω} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a + \frac{ z }{ 2^{ω} 3^{ω} 5^{ω} 7^{ω} 11^{ω} \cdots }  \neq  \frac{ k }{ 2^{ω} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'nicht annehmen kann.'."\n".
                    'Es kann zwar \lm{ a = 0 } sein, aber \lm{ z } kann nicht die unendlichen Potenzen der Primzahlen, außer \lm{ 2^{ω} }, eliminieren.'."\n",
                      'Nach dem Beweis der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung} ist zum Beispiel \lm{ a = \sqrt{2} = \frac{ 2^{\frac{1}{2}} \cdot 2^{ω} }{ 2^{ω} } }'."\n".
                    'interessanterweise adressierbar.'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\Z}}  =  \\\  \quad *\{  \quad\,  0, \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{2}}{2} - 2 \s^{-1},\; \tfrac{\sqrt{2}}{2} - \s^{-1},\; \tfrac{\sqrt{2}}{2},\; \tfrac{\sqrt{2}}{2} + \s^{-1},\; \tfrac{\sqrt{2}}{2} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{3}}{2} - 2 \s^{-1},\; \tfrac{\sqrt{3}}{2} - \s^{-1},\; \tfrac{\sqrt{3}}{2},\; \tfrac{\sqrt{3}}{2} + \s^{-1},\; \tfrac{\sqrt{3}}{2} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, 1 - 3 \s^{-1}, 1 - 2 \s^{-1}, 1 - \s^{-1}   \quad *\}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{In Stellenwert-Notation …}',
                TitleVis => 'In Stellenwert-Notation:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\Z}}  =  \\\  \quad *\{  \;\;\;\,  .*〈 0 *〉,\; .*〈 1 *〉,\; .*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 -2 *〉,\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 -1 *〉,\; \tfrac{\sqrt{2}}{2},\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 1 *〉,\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{\sqrt{3}}{2} *〉.*〈 -2 *〉,\; *〈 \tfrac{\sqrt{3}}{2} *〉.*〈 -1 *〉,\; \tfrac{\sqrt{3}}{2},\; *〈 \tfrac{\sqrt{3}}{2} *〉.*〈 1 *〉,\; *〈 \tfrac{\sqrt{3}}{2} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, *〈 1 *〉.*〈 -3 *〉,\; *〈 1 *〉.*〈 -2 *〉,\; *〈 1 *〉.*〈 -1 *〉   \quad *\}  }'),
                    ))),

                    ))),

                  array( 'text', array( text => array(
                    'Welche Koeffizienten adressierbar sind, damit beschäftigen wir uns im ersten Abschnitt dieser Seite:'."\n".
                    '\italic{\jumpname{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}}.'."\n".
                    'Wie wir oben in Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}'."\n".
                    'schon festgestellt haben, müssen es genau \lm{ \frac{ \s }{ 2ω } } sein.'."\n",
                      'Es ist für mich nicht so einfach, diese vermeintliche Doppelung in Worte zu fassen, merke ich, aber ich versuche es nachfolgend.'."\n".
                    'Zunächst möchte ich aber Sicherheit schaffen, dass beides einender entsprechen muss.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Woher wissen wir so sicher, wieviele Punkte der Teilung durch \lm{ \s } wir mit unseren Koeffizienten adressieren können?} \\\\'."\n".
                    'Wir wissen, dass die Adressierung von \lm{ \frac{ \s }{ 2ω } } rein endlichen Koeffizienten von Null bis Eins korrekt sein muss,'."\n".
                    'weil wir gezeigt haben,\color{*Bearb}{(Link zum Abschnitt)} dass wir eine Ableitung'."\n".
                    'durch ein Integral genau dann Rückgängig machen können, wenn wir davon ausgehen, dass wir über \lm{ \s } Summanden der Größe \lm{ \s^{-1} }'."\n".
                    'pro Einheit Eins in diesen Schritten zählend summieren.'."\n".
                    'Hätten wir mehr oder weniger Schritte als \lm{ \s }, dann würde es nicht passen und'."\n".
                    'die Integration wäre nicht die gesuchte Umkehrung der Ableitung.'."\n",
                      'Dass wir jedoch \lm{ 2 \cdot ω } aktual unendlich kleine ganze Schritte pro rein endlichem adressierten Koeffizienten haben, scheint mir unstrittig.'."\n".
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
                    '\lm{ \mathbb{A}_{\S} }, wobei letztere Menge teilweise oder sogar ganz für die realen Koeffizienten der'."\n".
                    'algebraischen Zahlen steht.'."\n".
                    'Durch Mengen lm{ \mathbb{N} } und \lm{ \mathbb{Z}^{-} }, die sich schließlich zu \lm{ \mathbb{Z} } vereinigen,'."\n".
                    'ergibt sich dann noch eine Asymmetrie, die dem Zählen geschuldet ist.'."\n",
                      'Der Teilung durch \lm{ \s } sind diese komplexen Zusammenhänge der Mengen und deren Asymmetrie'."\n".
                    'sowie deren Mischung von aktual unendlichen und dann wieder endlichen Koeffizienten zunächst nicht anzusehen.'."\n".
                    'Wir könnten glaube, diese Struktur ließe sich einfach so adressieren, wie endliche Strukturen oder Mengen von Punkten.'."\n",
                      'Und dann stellt sich wieder heraus, dass sich dies alles im wesentlichen wie endliche Zahlen verhält,'."\n".
                    'nur im aktual unendlich Kleinen und Großen gemischt.'."\n",
                      'Es stellt sich auch die Frage im Sinne der Ordinalzahlen:'."\n".
                    'Welche Zahlenmengen werden eigentlich zum Beispiel durch die Werte \lm{ 2^{ω} } und \lm{ \s } repräsentiert?'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n",
                      '\color{*Bearb}{Im Falle der Teilung der Strecke durch alle endlichen Primzahlen in der vollständigen induktiven Potenz \lm{ ω }'."\n".
                    'haben die sich ergebenden Punkte keine aktual unendlichen Summanden.'."\n".
                    'Und es werden alle Punkte der Teilung gezählt. (Das scheint mir verkehrt!)}'."\n",
                      'Im Falle der Zählschritte zählen wir im Stellenwertsystem der Superial-Zahlen in der ersten aktual unendlich kleinen'."\n".
                    'Potenz \lm{ \s^{-1} } in ganzzahligen Schritten je adressiertem Koeffizienten alle ganzen Zahlen und'."\n".
                    'nur bei der Null die natürlichen Zahlen und bei der Eins nur die negativen ganzen Zahlen.'."\n".
                    'Wir haben also aktual kleine Summanden.'."\n".
                    'Aber wir adressieren dafür nicht alle Punkte der Teilung in \lm{ \s } Teile.'."\n",
                      'Die Teile des ersten entsprechen genau den Schritten des zweiten.'."\n".
                    'Es ist, als wenn die theoretische Annäherung an die statische arithmetische Struktur der Geometrie'."\n".
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
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:X', text =>
                      
                'Die superiale Basis \lm{ \s } und die Ordinalzahl \lm{ ω^{ω} } im Strukturvergleich', subline =>
                  'Vom Wert her gleich und doch verschieden')),
                  array( 'text', array( text => array(
                    'Betrachten wir die arithmetische Struktur der Geometrie \lm{ \s } und die Adressierbarkeit ihrer Punkte,'."\n".
                    'die durch die Teilung durch \lm{ \s } entstehen, dann ist es interessant, dass wir durch'."\n".
                    'den Beweis der \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} auch in'."\n".
                    'den Ordinalzahlen\footnote{\const{NSOSP_g_footnote_text_Ordinalzahl}} eine Wertgleichheit zu \lm{ \s } finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'In der Menge der Ordinalzahlen \lm{ \mathbb{On} } hat \lm{ ω^{ω} } genau so viele Vorgänger, wie ihr Wert groß ist.'."\n".
                    'Dies Gilt auch für \lm{ \s } in der Menge der natürlichen Superial-Zahlen \lm{ \mathbb{S_{\N}} }.'."\n".
                    'Diese Eigenschaft wird durch die Gleichheit ihres Wertes ausgedrückt.'."\n",
                      'In beiden Mengen haben alle Zahlen auch einen direkten Nachfolger.'."\n",
                      'Und trotzdem sind bei Mengen von ihren Elementen her nicht gleich,'."\n".
                    'denn in \lm{ \mathbb{S_{\N}} } haben alle Zahlen einen direkten Vorgänger, außer die Null,'."\n".
                    'hingegen gilt dies in \lm{ \mathbb{On} } nicht, weil nicht nur die Null keine Vorgänger hat,'."\n".
                    'sondern alle sogenannten Limeszahlen\footnote{\const{BiOrd_g_footnote_text_OrdinalzahlLimeszahlen}},'."\n".
                    'also auch \lm{ ω } und \lm{ ω^{ω} }, haben ebenfalls keine Vorgänger:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, \s [_{\mathbb{S}_{\Z}}  \neq  ω^{ω}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der strukturelle Unterschied dieser beiden Mengen – hier werden nicht die Werte betrachtet –,'."\n".
                    'trotz Wertgleichheit, ist sehr bemerkenswert und bedarf einer näheren Untersuchung.'."\n",
                      'Die beiden Mengen sehen konkret folgendermaßen aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, \s [_{\mathbb{S}_{\Z}}  =  \\\  \quad *\{  \quad\,  0, 1, 2, \cdots n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{1}{2} \s + z^{-}, \cdots \tfrac{1}{2} \s - 1,\; \tfrac{1}{2} \s,\; \tfrac{1}{2} \s + 1, \cdots \tfrac{1}{2} \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{2}{3} \s + z^{-}, \cdots \tfrac{2}{3} \s - 1,\; \tfrac{2}{3} \s,\; \tfrac{2}{3} \s + 1, \cdots \tfrac{2}{3} \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, \s + z^{-}, \cdots \s - 2, \s - 1   \quad *\}  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s-explizit', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s-explizit}', label_incr => true),
                      array( display => 'on',  latex => '{  ω^{ω}  =  [ 0, ω^{ω} [_{\mathbb{On}}  =  \\\  \quad *\{  \quad\;  0, 1, 2, \cdots n, \cdots \\\ \qquad\quad\; ω, ω + 1, ω + 2, ω + 3, \cdots ω + n, \cdots \\\ \qquad\quad\; 2 ω, 2 ω + 1, 2 ω + 2, 2 ω + 3, \cdots 2 ω + n, \cdots \\\ \qquad\quad\; 3 ω, 3 ω + 1, 3 ω + 2, 3 ω + 3, \cdots 3 ω + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, ω^{2}, ω^{2} + 1, ω^{2} + 2, ω^{2} + 3, \cdots ω^{2} + n, \cdots \\\ \qquad\quad\; ω^{2} + ω, ω^{2} + ω + 1, ω^{2} + ω + 2, \cdots ω^{2} + ω + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, 2 ω^{2}, 2 ω^{2} + 1, 2 ω^{2} + 2, 2 ω^{2} + 3, \cdots 2 ω^{2} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, 3 ω^{2}, 3 ω^{2} + 1, 3 ω^{2} + 2, 3 ω^{2} + 3, \cdots 3 ω^{2} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, ω^{3}, ω^{3} + 1, ω^{3} + 2, ω^{3} + 3, \cdots ω^{3} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, 2 ω^{3}, 2 ω^{3} + 1, 2 ω^{3} + 2, 2 ω^{3} + 3, \cdots 2 ω^{3} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \qquad\quad\;\, 3 ω^{3}, 3 ω^{3} + 1, 3 ω^{3} + 2, 3 ω^{3} + 3, \cdots 3 ω^{3} + n, \cdots \\\ \quad\quad\; \quad \vdots   \quad *\}  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-omega-hoch-omega-explizit', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-omega-hoch-omega-explizit}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n".
                    'In der Menge \lm{ \left\lbrack 0, \s \right\lbrack_{\mathbb{S}_{\Z}} } sind Elemente der Menge'."\n".
                    '\lm{ \left\lbrack 0, ω^{ω} \right\lbrack_{\mathbb{On}} }, wie \lm{ ω }, \lm{ ω + 1 }'."\n".
                    'oder \lm{ ω^{2} }, \lm{ ω^{2} + 1 } und so weiter, gar nicht enthalten.'."\n".
                    'Umgekehrt gibt es in \lm{ \left\lbrack 0, ω^{ω} \right\lbrack_{\mathbb{On}} } keinen direkten Vorgänger von \lm{ ω^{ω} },'."\n".
                    'wie es ihn in der Menge der natürlichen Superial-Zahlen vor \lm{ \s } mit \lm{ \s - 1 } gibt.'."\n".
                    'Und auch Ausdrücke, wie \lm{ \frac{1}{2} \s } oder \lm{ \frac{2}{3} \s + 1 } können wir in'."\n".
                    '\lm{ \left\lbrack 0, ω^{ω} \right\lbrack_{\mathbb{On}} } nicht benennen.'."\n",
                      'Genauer können wir sagen, außer allen natürlichen Zahlen gibt es keine einzige weitere Zahl,'."\n".
                    'die wir in beiden Mengen explizit angeben können.'."\n".
                    'Aber die Anzahl aller Zahlen, wie gesagt, und sogar ihre Summe, wie wir gleich sehen, sind in beiden Mengen gleich.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Summengleichheit trotz der strukturellen Unterschiede} \\\\'."\n".
                    'Mit der \jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}{angepassten Gaußschen Summenformel}\footnote{\const{BiOrd_g_footnote_text_GaussscheSummenformel}},'."\n".
                    'damit auch die Berechnung von Summen unendlich großer Mengen, die kein größtes Element haben, möglich ist,'."\n".
                    'können wir die Summen ganzer Zahlen von Null bis ohne \lm{ \s } oder \lm{ ω^{ω} } berechnen:'."\n".
                    '\\\\ \color{*Bearb}{(Dies kann wohl in der ersten Formel mit \lm{ \mathbb{N}_{\infty} } nicht stimmen.)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in [ 0, n [_{\mathbb{N}_{\infty}} } \!\!\!\! i  =  \frac{ n^{2} - n }{ 2 }  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Für die Summe aller endlichen natürlichen Zahlen erhalten wir beispielsweise:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in ω } i  =  \frac{ ω^{2} - ω }{ 2 }  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Für die beiden gleichwertigen Zahlen und die Summen der unendlich vielen positiven ganzen Zahlen, für die sie jeweils stehen,'."\n".
                    'erhalten wir dann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\Z}} } \!\!\! i  =  \frac{ \s^{2} - \s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in [ 0, ω^{ω} [_{\mathbb{On}} } \!\!\!\! i  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Richtigkeit der Summe aller natürlichen Superial-Zahlen bis ohne \lm{ \s } ergibt sich aus zwei Dingen zusammen.'."\n".
                    'Zum einen aus dem allgemeinen Beweis,'."\n".
                    'dass das \jump{OM:SupNum:Ableitungen-Integrale:Integration:Ableitung-Umkehrung-Integration}{Integral die Umkehrung der Ableitung} ist.'."\n".
                    'Und zum anderen aus dem \jump{OM:SupNum:Einleitung:Vortext:Integral-genau-verstehen:Konkretes-Integral}{Beispiel der Integration der Ableitung von \lm{ f(x) = x^{2} }}, also von \lm{ f\'(x) = *〈 2 x *〉. *〈 1 *〉},'."\n".
                    'in dem genau die angepasste Gaußsche Summenformel zur korrekten Lösung angewandt wird.'."\n",
                      'Die Richtigkeit der Summe aller Ordinalzahlen bis ohne \lm{ ω^{ω} } ergibt sich ganz einfach aus der Definition der'."\n".
                    'Ordinalzahlen, die dazu gemacht sind, solche Zusammenhänge über die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    'der natürlichen Zahlen auszudrücken.'."\n",
                      'Aus der Wertgleichheit beider Werte in der Formel \jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}'."\n".
                    'folgt dann'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\Z}} } \!\!\! i  =  \sum_{ \forall i \in [ 0, ω^{ω} [_{\mathbb{On}} } \!\!\!\! i  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und dies, obwohl die Mengen, deren Elemente hier summiert werden, ja recht unterschiedlich sind.'."\n".
                    '\color{*Entwick}{Und genau hier kann die nähere Untersuchung interessant sein.}'."\n",
                      'Wenn wir die Menge \lm{ \left\lbrack 0, \s \right\lbrack_{\mathbb{S}_{\Z}} } aller natürlichen Superial-Zahlen'."\n".
                    'bis ohne \lm{ \s } mit \lm{ ω^{ω} } ausdrücken, dann erhalten wir:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, \s [_{\mathbb{S}_{\Z}}  =  \\\  \quad *\{  \quad\,  0, 1, 2, \cdots n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{1}{2} ω^{ω} + z^{-}, \cdots \tfrac{1}{2} ω^{ω} - 1,\; \tfrac{1}{2} ω^{ω},\; \tfrac{1}{2} ω^{ω} + 1, \cdots \tfrac{1}{2} ω^{ω} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{2}{3} ω^{ω} + z^{-}, \cdots \tfrac{2}{3} ω^{ω} - 1,\; \tfrac{2}{3} ω^{ω},\; \tfrac{2}{3} ω^{ω} + 1, \cdots \tfrac{2}{3} ω^{ω} + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, ω^{ω} + z^{-}, \cdots ω^{ω} - 2, ω^{ω} - 1   \quad *\}  }'),
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
                      'Zur Berechnung der Summe dürfen wir die \jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}{angepassten Gaußschen Summenformel}'."\n".
                    'einsetzen.'."\n".
                    'Dies gilt, weil wir durch den allgemeinen Beweis der \jump{OM:SupNum:Ableitungen-Integrale:Integration:Ableitung-Umkehrung-Integration}{Umkehrung der Ableitung mittels Integration}'."\n".
                    'sowie durch ein \jump{OM:SupNum:Einleitung:Vortext:Integral-genau-verstehen:Konkretes-Integral}{konkretes Beispiel der Integration}'."\n".
                    'gezeigt haben, dass wir nur mit Hilfe der angepassten Gaußschen Summenformel die konkrete Ableitung umkehren können.'."\n".
                    'Insofern ist die Berechnung der folgenden Summe nicht der Beweis dafür, dass diese Summe innerhalb der natürlichen Superial-Zahlen'."\n".
                    'korrekt ist, denn das wussten wir zuvor schon, sondern die Probe, dass sich dies nach all unserem Wissen auch wirklich ergibt.'."\n".
                    'Es ist ein Plausibilitäts-Check.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wenn wir die Elemente der Menge \lm{ \left\lbrack 0, \s \right\lbrack_{\mathbb{S}_{\Z}} }'."\n".
                      'summieren, ergibt sich nach der \jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}{angepassten Gaußschen Summenformel}'."\n".
                      'für die erste Zeile, die alle endlichen natürlichen Zahlen enthält, die Summe:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in \mathbb{N} } i  =  \sum_{ \forall i \in ω } i  =  \frac{ ω^{2} - ω }{ 2 }  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-omega}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Um die mittleren Zeilen der Gesamtsumme, ohne die erste und die letzte, zu berechnen, benötigen wir folgende Formeln:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# \mathbb{Z}^{-}  =  \# \mathbb{N}  =  ω  =  \mathbb{N}  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-N}', label_incr => false),
                      array( display => 'on',  latex => '{  \# \mathbb{Z}  =  2 ω  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-Z}', label_incr => false),
                      array( display => 'on',  latex => '{  \sum_{ \forall z \in \mathbb{Z}} z  =  - ω  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}', label_incr => false),
                      array( display => 'on',  latex => '{  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } z^{-}  =  - \frac{ ω^{2} - ω }{ 2 } - ω  }'),
                      array( display => 'on',  latex => '{  \# [ 0, 1 [_{\mathbb{A}_{\S}}  =  \frac{ \s }{ 2 ω }  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# ] 0, 1 [_{\mathbb{A}_{\S}}  =  \frac{ \s }{ 2 ω } - 1  }'),
                      array( display => 'on',  latex => '{  \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 ω } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Für die mittleren Zeilen ergibt sich dann, wenn wir die Summe mit \lm{ y } zur Übersichtlichkeit substituieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \sum_{ \forall z \in \mathbb{Z} } *( a \cdot ω^{ω} + z *)  =  y  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } *( a \cdot ω^{ω} \cdot \# \mathbb{Z} + \! \sum_{ \forall z \in \mathbb{Z} }  z *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } *( a \cdot ω^{ω} \cdot 2 ω + \! \sum_{ \forall z \in \mathbb{Z} }  z *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } *( a \cdot ω^{ω} \cdot 2 ω + *( - ω *) *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } *( a \cdot ω^{ω} \cdot 2 ω - ω *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\! a \cdot ω^{ω} \cdot 2 ω \;\; - \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\! ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\! a \;\; - \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\! ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\! a \;\; - \;\; *( \frac{ \s }{ 2 ω } - 1 *) \cdot ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\! a \;\; - \;\; *( \frac{ ω^{ω} }{ 2 ω } - 1 *) \cdot ω  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Um die noch enthaltene variable Summe zu berechnen, können wir, ohne sie zu verändern, die Null in ihre Basismenge integrieren'."\n".
                      'und sie dann mit Hilfe von Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}'."\n".
                      'berechnen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in [ 0, 1 [_{\mathbb{A}_{\S}} } \!\! a  \;\; - \;\; *( \frac{ ω^{ω} }{ 2 ω } - 1 *) \cdot ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in [ 0, 1 [_{\mathbb{A}_{\S}} } \!\! a  \;\; - \;\; *( \frac{ ω^{ω} \cdot ω }{ 2 ω } - ω *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in [ 0, 1 [_{\mathbb{A}_{\S}} } \!\! a  \;\; - \;\; *( \frac{ ω^{ω} }{ 2 } - ω *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in [ 0, 1 [_{\mathbb{A}_{\S}} } \!\! a  \;\; - \;\; \frac{ ω^{ω} }{ 2 } \;\; + \;\; ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot *( \frac{ \s }{ 4 ω } - \frac{ 1 }{ 2 } *)  \;\; - \;\; \frac{ ω^{ω} }{ 2 } \;\; + \;\; ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot *( \frac{ ω^{ω} }{ 4 ω } - \frac{ 1 }{ 2 } *)  \;\; - \;\; \frac{ ω^{ω} }{ 2 } \;\; + \;\; ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \frac{ ω^{ω} \cdot 2 ω \cdot ω^{ω} }{ 4 ω } - \frac{ ω^{ω} \cdot 2 ω }{ 2 } - \frac{ ω^{ω} }{ 2 } + ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \frac{ *( ω^{ω} *)^{2} }{ 2 } - ω^{ω} \cdot ω - \frac{ ω^{ω} }{ 2 } + ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 } - ω^{ω} \cdot ω + ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 } - *( ω^{ω} \cdot ω - ω *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die letzte Zeile summiert sich dann zu:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } *( ω^{ω} + z^{-} *)  =  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } ω^{ω} \; + \! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } z^{-}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \!\! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } *( ω^{ω} + z^{-} *)  =  ω^{ω} \cdot ω \; + \! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } z^{-}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \!\! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } *( ω^{ω} + z^{-} *)  =  ω^{ω} \cdot ω + *( - \frac{ ω^{2} - ω }{ 2 } - ω *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wenn wir alle drei Summen nun addieren'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall a \in [ 0, \s [_{\mathbb{S}_{\Z}} }  =  \frac{ ω^{2} - ω }{ 2 } \\\ \qquad\qquad\quad\;\; + \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 } - *( ω^{ω} \cdot ω - ω *) \\\ \qquad\qquad\quad\;\; + ω^{ω} \cdot ω + \! *( - \frac{ ω^{2} - ω }{ 2 } - ω *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \!\! \sum_{ \forall a \in [ 0, \s [_{\mathbb{S}_{\Z}} }  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 } - ω^{ω} \cdot ω + ω \\\ \qquad\qquad\qquad\qquad\;\; + ω^{ω} \cdot ω - ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \!\! \sum_{ \forall a \in [ 0, \s [_{\mathbb{S}_{\Z}} }  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'ergibt sich auch tatsächlich das erwartete Ergebnis.'."\n",
                        '\\\\'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Unser Plausibilitäts-Check ist also positiv ausgefallen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Wertgleichheit von \lm{ \s } und \lm{ ω^{ω} } sowie die Gleichheit der Summe ihrer natürlichen Vorgänger markiert die besondere Bedeutung ihres Werts} \\\\'."\n".
                    'Das der Wert der aktual unendlichen geometrischen Teilung der Eins \lm{ \s } mit dem Wert'."\n".
                    'der \color{*Bearb}{aktual unendlich möglichen Varianten an Polynomen} \lm{ ω^{ω} } zusammenfällt, drückt seine besondere Bedeutung aus.'."\n",
                      'Es handelt sich nicht um irgendeinen Wert, sondern darum, wie oft wir die endlich lange Strecke von der'."\n".
                    'Null bis zur Eins normiert teilen können, ohne zur Beschreibung der Teilungspunkte aktual unendlich kleine'."\n".
                    'Summanden benutzen zu müssen, die selber wieder gebrochen sind.'."\n".
                    'Wir kommen auf diese Weise so nämlich mit ganzen Zahlen im unendlich Kleinen aus und erhalten eine normierte'."\n".
                    'Vorschrift, von einer Skala natürlicher oder ganzer Zahlen zur nächsten unendlich kleineren oder unendlich größeren zu gelangen.'."\n".
                    'Und unser so definierter Skalenfaktor basiert auf der Menge aller endlichen Primzahlen \lm{ \mathbb{P} }, die alle möglichen dieser Teilungen'."\n".
                    'damit normiert vorgibt.'."\n",
                      'Gleichzeitig sehen wir, dass wir diese Werte mit Polynomen \color{*Bearb}{– also mit elliptischen Kurven und abschließend mit algebraischen Kurven –}'."\n".
                    'vollständig beschreiben können.'."\n".
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
                    // '\bold{X}',
                    '• Die Null ist in den Superial-Zahlen viel simpler definiert, als in den hyperreellen Zahlen.',
                    '• In den Superial-Zahlen brauchen wir nicht eine Reihe von unendlich vielen Zahlen, um infinite und infinitesimale Zahlen zu definieren.',
                    '– Wir können das Symbol \lm{ \s } für ein unendliches Flächenprodukt der Primzahlen nehmen, siehe oben, und dieses mit endlichen Symbolen, wie Brüchen, kombinieren.',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:VergleichMitHyperreellenZahlen:X', text =>
                      
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
                    '• Verweisen auf \jumpname{OM:SupNum:Struktur-Geometrie}.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Mächtigkeit\footnote{\const{SupNum_g_footnote_text_Maechtigkeit}}'."\n".
                    'der reellen Zahlen wird mit \lm{ \mathfrak{c} } bezeichnet:\footnote{\const{SupNum_g_footnote_text_Kontinuumshypothese_Einfache}}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.UK', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathfrak{c}  =  \#\mathbb{R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Es soll gezeigt werden können, dass die Mächtigkeit des Kontinuums der Potenzmenge von \lm{ \mathbb{N} } entspricht.\footnote{\const{SupNum_g_footnote_text_Kontinuumshypothese_Einfache}}'."\n".
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
                    'Die Kontinuumshypothese\footnote{\const{SupNum_g_footnote_text_Kontinuumshypothese}}'."\n".
                    'vermutet dann offenbar, dass die reellen Zahlen die gleiche Mächtigkeit besitzen, wie das Kontinuum:\footnote{\const{SupNum_g_footnote_text_Kontinuumshypothese_Einfache}}'."\n".
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:X', text =>
                      
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:X', text =>
                      
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
                  '\condb{Unabhängigkeit von der Mengenlehre (ZFC)} \\\\'."\n".
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
                      'All dies steht offensichtlich in Beziehung zur Kontinuumshypothese und kann so zu deren besseren Verständnis herangezogen werden.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
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
                      'An dieser Stelle würde ich sagen, dass zumindestens \lm{ \e_\s } keine reelle Zahl ist'."\n".
                    'und die Frage im Raum steht, ob nicht auch alle anderen transzendenten Zahlen gar keine reellen Zahlen sind.'."\n".
                    'Sondern, wir lassen uns vielleicht dadurch täuschen, dass wir glauben, transzendente Zahlen wären durch Dezimalzahlen'."\n".
                    'mit unendlich vielen Nachkommastellen darstellbar, ohne zu beantworten,'."\n".
                    'wie groß diese minimale Unendlichkeit denn eigentlich ist.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese:X', text =>
                      
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
