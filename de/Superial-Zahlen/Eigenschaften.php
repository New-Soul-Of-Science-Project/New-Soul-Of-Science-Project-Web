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
                    'Ihre Struktur verbindet über die Ordinalzahlen\footnote{\const{NSOSP_g_footnote_text_Ordinalzahl}} rationale und algebraische Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
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
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Fragen}',
                    '• Wenn wir von algebraischer Zahlen sprechen, dann handelt es sich nicht um die, die durch Radikale darstellbar sind!',
                    '– Ich habe gelesen, dass nicht alle algebraischen Zahlen mit Wurzeln darstellbar sind: \quote{Im Rahmen der Galoistheorie werden diese Zwischenkörper untersucht, um so tiefe Einblicke über die Lösbarkeit oder Nichtlösbarkeit von Gleichungen zu erhalten. Ein Resultat der Galoistheorie ist, dass zwar jede komplexe Zahl, die man aus rationalen Zahlen durch Verwendung der Grundrechenarten (Addition, Subtraktion, Multiplikation und Division) sowie durch Ziehen n-ter Wurzeln (n eine natürliche Zahl) erhalten kann (man nennt solche Zahlen „durch Radikale darstellbar“), algebraisch ist, umgekehrt aber algebraische Zahlen existieren, die man nicht in dieser Weise darstellen kann; alle diese Zahlen sind Nullstellen von Polynomen mindestens 5. Grades.}\footnote{\const{SupNum_g_footnote_text_TranszendenteZahlEigenschaften}} Möglicherweise handelt es sich „nur“ um (Polynom-)Radikale: Vgl. \url{https://de.wikipedia.org/w/index.php?title=Radikal_(Mathematik)&oldid=213475890#Auflösung_eines_Polynoms_durch_Radikale}.',
                    '– Dann stünde ansonsten der Beweis aus, dass alle Realanteile der algebraischen Zahlen Faktoren von \lm{ \s } sind, die ganze Zahlen ergeben. Dazu würden dann unter anderem auch elliptische Integrale zur Lösung Polynome 5. Grades gehören: Vgl. \url{https://www.spektrum.de/lexikon/mathematik/elliptisches-integral/4494} und \url{https://www.spektrum.de/wissen/charles-hermite-1822-1901/1171317}.',
                    '• Wenn nun alle Koeffizienten der algebraischen Zahlen Faktoren von \lm{ \s } sind, die ganze Zahlen ergeben:',
                    '– Werden diese dann beim Zählen der ganzen Superial-Zahlen mitgezählt oder nur die rationalen Koeffizienten? Ich denke, sie werden mitgezählt.',
                    '– Anders gefragt: gibt es dann immer noch \lm{ \frac{ \s }{ 2 \cdot ω } } rationale Zahlen im Intervall zwischen Null und ausschließlich Eins, oder müssen wir das korrigieren?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Zur Frage, welche Koeffizienten innerhalb der Superial-Zahlen sinnvoll sind, gibt es mindestens zwei Ausgangspunkte und Perspektiven,'."\n".
                    'die scheinbar auf das selbe Ergebnis hinauslaufen:'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:X', text =>
                      
                'Perspektive der Zahlentheorie der Analysis', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Zum einen können wir uns auf den Standpunkt stellen, dass für eine Zahlentheorie der Analysis sowohl die Ableitung als auch'."\n".
                    'das Integral sinnvoll funktionieren sollten und damit beide plausibel definierbar sein müssen.'."\n",
                      'Bei näherer Betrachtung stellen wir deshalb fest, dass die nun mit Hilfe aktual unendlicher Summen definierten Integrale'."\n".
                    'aktual unendlich kleine ganze Zahlen benötigen, die wir aus einer entsprechenden Verkleinerung der'."\n".
                    '\jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{Erweiterung ganzer Zahlen ins aktual unendlich Große} gewinnen können.'."\n",
                      'Betrachten wir diese ganzen Superial-Zahlen, dann haben diese in den Summanden mit negativen Potenzen von \lm{ \s }'."\n".
                    'nur Nullen als Koeffizienten.'."\n".
                    'Im endlichen, also der Koeffizient von \lm{ \s^{0} = 1 }, haben wir nur endliche ganze Zahlen.'."\n".
                    'Und in den aktual unendlichen Summanden der ganzen Superial-Zahlen, also die positiven Potenzen von \lm{ \s },'."\n".
                    'ergibt sich das Fragezeichen, dass nicht gleich ganz eindeutig beantwortbar ist.'."\n",
                      'Das kommt daher, weil die aktual unendlich Großen Summanden dieser ganzen Superial-Zahlen alle ganze Zahlen sein müssen.'."\n".
                    'Und zwar deshalb, weil der endliche Summand und die unendlich kleinen Summand in jedem Fall immer ganze Zahlen sind.'."\n".
                    'Kommt nun der Summand dazu, der Eins als Potenz hat, also \lm{ \s^{1} = \s }, muss dieser im Produkt mit seinem Koeffizienten'."\n".
                    'auch eine ganze Zahl sein, weil wir sonst insgesamt keine ganze Zahl erhalten.'."\n",
                      'Dazu stellen wir fest, das schon einmal jede rationale Zahl im Produkt mit \lm{ \s } aufgrund seiner Primzahlstruktur '."\n".
                    '\jump{OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s}{immer eine ganze Zahl ergibt}.'."\n".
                    'Auch im Produkt mit allen Realanteilen von durch Radikale, also Wurzeln, darstellbaren algebraischen Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}},'."\n".
                    'wie wir nachfolgend gleich zeigen werden, ergeben sich immer ganze Superial-Zahlen.'."\n".
                    'Ob dies, wie von mir vermutet, wirklich für \jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{alle Realanteilen von algebraischen Zahlen}'."\n".
                    'gilt, bleibt hingegen erst einmal noch offen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:X', text =>
                      
                'Perspektive des Stellenwertsystems der Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Zum anderen können wir erwarten, dass die Koeffizienten der Superial-Zahlen, wie in jedem anderen Stellenwertsystem,'."\n".
                    'grundsätzlich keine Überträge in niedrigere oder höhere Stellen erzeugen.'."\n".
                    'Wobei sie gleichzeitig aber so fein granuliert und von einer Größe sind, dass sie die ihnen zugedachte Stelle'."\n".
                    'maximal ausfüllen.'."\n",
                      'Demnach sind im Grunde folgende Bedingungen zu erfüllen, damit eine Zahl \lm{ a } ein sinnvoller Koeffizient der Superial-Zahlen sein kann:'."\n",
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
                    'Das heißt, dass \lm{ a } keine aktual unendlich kleinen Summanden enthalten darf.'."\n".
                    'Das Produkt \lm{ a \cdot \s } muss also eine ganze Zahl sein.'."\n".
                    'Das bedeutet, sie muss \jump{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}{ohne ihre Nachkommastellen, welcher Art auch immer, die gleiche Zahl}'."\n".
                    'bleiben, wie in Formel \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-N-unendlich} definiert.'."\n".
                    'Denn nur dann lässt sich das Zählen bis ins aktual unendliche und darüber hinaus definieren.'."\n",
                      'In unserem Fall ist die ganze Zahl \lm{ a \cdot \s } dann natürlich von der aktual unendlichen Größenordnung von \lm{ \s }, ohne endlichen Summanden.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Es existiere also die Menge'."\n".
                      '\\\\ \color{*Bearb}{(Wie stellen wir sicher, dass es keinen endlichen Summanden in \lm{ a \cdot \s } gibt?! Denn wegen der Anwesenheit transzendenter Zahlen in \lm{ \mathbb{R} } könnten darin Zahlen wie \lm{ b + z \cdot \s^{-1} }, mit \lm{ b \in \mathbb{A} } und \lm{ z \in \mathbb{Z} }, vorhanden sein. Diese geben im Produkt dann \lm{ *( b + z \cdot \s^{-1} *) \cdot \s = b \cdot \s + z } auch eine ganze Zahl, die aber einen endlichen Summanden enthält und deren Faktor deshalb kein sinnvoller Koeffizient ist.)}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall y \in \mathbb{S} *)  *[  a_{i}  =  \left\lfloor \frac{ y }{ \s^{i} } \right\rfloor  -  \left\lfloor \frac{ y }{ \s^{i + 1} } \right\rfloor \cdot \s  *]  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  y  =  b + z \cdot \s^{-1}  =  *〈 b *〉.*〈 z *〉  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  a_{0}  =  \left\lfloor \frac{ *〈 b *〉.*〈 z *〉 }{ \s^{0} } \right\rfloor  -  \left\lfloor \frac{ *〈 b *〉.*〈 z *〉 }{ \s^{1} } \right\rfloor \cdot \s  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  \exists \mathbb{A}_{\S}\!: *( \forall a \in \mathbb{R}\!:  a \cdot \s \in \mathbb{N}_{\infty}  \Rightarrow  a \in \mathbb{A}_{\S} *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'der sinnvollen Koeffizienten der Superial-Zahlen.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Diese Definition erfüllt die genannten Bedingungen an die sinnvollen Koeffizienten der Superial-Zahlen:'."\n".
                    'Das ein Koeffizient nicht unendlich positiv oder negativ groß sein kann, wird durch die Auswahl der Elemente aus'."\n".
                    '\lm{ \mathbb{R} } garantiert.'."\n".
                    '\color{*Bearb}{Das er keine unendlich kleinen Summanden enthält, wird durch die Bedingung gegeben, dass sein Produkt mit \lm{ \s }'."\n".
                    'ganzzahlig sein muss.}'."\n",
                      'Stellt sich also die Frage:'."\n".
                    'Welche uns bekannte Menge entspricht \lm{ \mathbb{A}_{\S} } dann?'."\n".
                    'Wie wir sehen werden, ist diese Frage nicht so schnell ganz genau zu beantworten.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:X', text =>
                      
                'Entsprechen die sinnvollen Koeffizienten allen reellen Zahlen?', subline =>
                  '\lm{ \mathbb{A}_{\S} = \mathbb{R} } ist eine Frage der Transzendenz und der Ganzzahligkeit im Produkt mit der superialen Basis \lm{ \s }')),
                  array( 'text', array( text => array(
                  '\condb{Bezüglich der Transzendenz} \\\\'."\n".
                    'Das hängt davon ab, wie wir im Lichte der Superial-Zahlen beantworten, welche Zahlen wir zu den reellen Zahlen zählen.'."\n".
                    'Wenn wir \jump{OM:SupNum:Ableitungen-Integrale}{die Ableitung und das Integral} über die Superial-Zahlen definieren'."\n".
                    'und nicht, wie heute meistens üblich, über den Limes, und berechnen, welche Funktion abgeleitet sie selber ergibt,'."\n".
                    'dann erhalten wir eine \jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{etwas detailliertere \lm{ \e }-Funktion} und damit eine'."\n".
                    '\jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{eulersche Zahl \lm{ \e_{\s} }}, die mehr Details ihrer Struktur offenbart,'."\n".
                    'als die Zahl \lm{ \e }, die wir über den Limes erhalten.'."\n",
                      'Die uns bekannte Zahl \lm{ \e }, definiert durch ihre Taylorreihe\color{*Bearb}{(Verweis)},'."\n".
                    'ist von der Zahl \lm{ \e_{\s} } nämlich nur der Summand endlicher Größe.'."\n".
                    '\lm{ \e_{\s} } enthält aber noch aktual unendlich viele, aktual unendlich kleine Summanden herunter bis zur Potenz \lm{ \s^{-\s} }.'."\n".
                    'Damit wäre die Zahl \lm{ \e } zwar theoretisch eine reelle Zahl und so möglicherweise als Koeffizient der Superial-Zahlen geeignet.'."\n".
                    'Aber im Rahmen der Superial-Zahlen'."\n".
                    'macht die \lm{ \e }-Funktion nur mit der Basis \lm{ \e_{\s} } Sinn.'."\n".
                    '\lm{ \e_{\s} } ist allerdings nicht einmal eine Superial-Zahl der hier definierten 1. Ordnung, weil sie'."\n".
                    'aktual unendlich kleine Potenzen von \lm{ \s } enthält und die Superial-Zahlen nur endliche Potenzen von \lm{ \s } erlauben.'."\n",
                      'Damit würde ich \lm{ \e_{\s} } eigentlich nicht zur Menge \lm{ \mathbb{R} } der reellen Zahlen zählen.'."\n".
                    'In meinen Augen sind hier also noch Einigungen nötig, welche Zahlen wir sinnvollerweise zu \lm{ \mathbb{R} } hinzurechnen.'."\n".
                    'Und wir müssen uns klar darüber werden, ob es Sinn macht \lm{ \e } weiterhin als eulersche Zahl anzusehen oder ob'."\n".
                    'wir nur noch \lm{ \e_{\s} } als eulersche Zahl anerkennen sollten.'."\n".
                    'Oder legen wir vielleicht sogar fest, dass \lm{ \e := \e_{\s} } gilt?'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Bezüglich der Ganzzahligkeit im Produkt mit der superialen Basis \lm{ \s }} \\\\'."\n".
                    'Alle reellen Zahlen, die nicht transzendent sind, sind Koeffizienten der algebraischen Zahlen.'."\n".
                    'Demnach stellt sich dann die Frage, ob wirklich alle Koeffizienten der algebraischen Zahlen im Produkt mit der superialen Basis \lm{ \s }'."\n".
                    'tatsächlich ganze Zahlen sind.'."\n",
                      'Bezüglich der rationalen Zahlen\footnote{\const{SupNum_g_footnote_text_RationaleZahl}}, die ja ein Teil'."\n".
                    'der Koeffizienten der algebraischen Zahlen sind, ist es ja offensichtlich,'."\n".
                    'dass sie \jump{OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s}{im Produkt mit \lm{ \s } ganze Zahlen sind}.'."\n".
                    'Wie diese \jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Superial-Zahlen \lm{ \mathbb{S}_{\N} }} aussehen,'."\n".
                    'zeigen wir in der \jump{OM:SupNum:Formale-Entwicklung}{formalen Entwicklung}.'."\n".
                    'Ein Produkt unserer superialen Basis \lm{ \s } mit jeder endlichen positiven rationalen Zahl'."\n".
                    '\lm{ q^{+} } eine \jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-N-unendlich}{unendliche natürliche Zahl aus \lm{ \mathbb{N}_{\infty} }} ist;'."\n".
                    'und im Besonderen offensichtlich eine \jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürliche Superial-Zahl} aus \lm{ \mathbb{S}_{\N} },'."\n".
                    'wie oben bereits gesagt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall q^{+} \in \mathbb{Q}^{+} *)  *[  q^{+} \cdot \s  \in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall q^{+} \in \mathbb{Q}^{+} *)  *[  q^{+} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Bleibt die Frage …'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:X', text =>
                      
                'Sind die sinnvollen Koeffizienten alle Realanteile der algebraischen Zahlen?', subline =>
                  '\lm{ \mathbb{A}_{\S} = \mathbb{A}_{\R} } ist eine Frage der Nullstellen von Polynomen beliebigen Grades')),
                  array( 'text', array( text => array(
                    'Die algebraischen Zahlen sind ja dadurch definiert, das sie die Menge aller Lösungen der Nullstellen von Polynomen sind.'."\n".
                    'Wir betrachten hier aber keine komplexen Lösungen mit Imaginäranteilen, sondern nur'."\n".
                    'die realwertigen Koeffizienten der Komponenten ihrer komplexen Lösungen.'."\n",
                      'Ich denke, diese Realanteile der algebraischen Zahlen \lm{ \mathbb{A}_{\R} } – ihre Koeffizienten –'."\n".
                    'sind alle als Koeffizienten der superialen Basis \lm{ \s } aktual unendlich große natürliche Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a^{+} \in \mathbb{A}_{\R}^{+} *)  *[  a^{+} \cdot \s  ?\in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a^{+} \in \mathbb{A}_{\R}^{+} *)  *[  a^{+} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }',
                                          label_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Equ-Realanteile-algebra-Zahlen-mal-s-verm-in-natuerl-SupZahlen', label_text => '\name{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Equ-Realanteile-algebra-Zahlen-mal-s-verm-in-natuerl-SupZahlen}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  \mathbb{A}_{\S}  ?=  \mathbb{A}_{\R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das ist meine \jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{Vermutung, dass die sinnvollen superiale Koeffizienten alle Realanteile algebraischer Zahlen} sind.'."\n",
                      'Algebraische Zahlen sind alle möglichen Nullstellen von Polynomen beliebigen Grades.'."\n".
                    'Nullstellen von Polynomen ersten bis vierten Grades sind alle komplexe Zahlen\footnote{\const{SupNum_g_footnote_text_KomplexeZahl}}'."\n".
                    'deren Koeffizienten rationale – also gebrochene –'."\n".
                    'Potenzen von natürlichen Zahlen sein können, viele davon irrationale \lm{ x }-te Wurzeln aus \lm{ n },'."\n".
                    'deren Kehrwerte, oder deren arithmetischen Kombinationen, also inklusive deren ganzen Potenzen.\footnote{\const{SupNum_g_footnote_text_TranszendenteZahlEigenschaften}}'."\n",
                      'Polynome fünften Grades können auch Nullstellen haben, die durch Integrale von Termen der vorstehenden Art ausgedrückt werden.'."\n".
                    'Leider konnte ich zu den Nullstellen von Polynomen sechsten und höheren Grades bisher nichts konkretes finden.'."\n",
                      'Sollte meine Vermutung stimmen, dann wäre schon etwas sehr besonderes.'."\n",
                      'Hier ist zu bemerken, dass algebraische Zahlen allesamt Lösungen aller möglichen Nullstellen von Polynomen sind und damit'."\n".
                    'grundsätzlich komplexe Zahlen,'."\n".
                    'also Zahlen auf der Gaußschen Zahlenebene und damit einen imaginären Anteil haben können.\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
                    'Deshalb habe ich sie hier auf ihre realen Anteile – oder auf die Faktoren beziehungsweise Koeffizienten ihrer Koordinaten – begrenzt.'."\n",
                      'Die Koeffizienten der algebraischen Zahlen müssten demnach also Anteile des Primzahl-Flächenprodukts von \lm{ \s } sein.'."\n".
                    'Oder sie müssen multipliziert mit Anteilen des Primzahl-Flächenprodukts von \lm{ \s } ganze Zahlen ergeben.'."\n".
                    'Beides ist allerdings nur möglich, wenn die realen Anteile der algebraischen Zahlen durch Brüche unendlicher ganzer Zahlen dargestellt werden können.'."\n".
                    'Hier beginnt nun die Crux und hier wird es nachfolgend sehr spannend und erkenntnisreich.'."\n",
                      'Interessanterweise sind die algebraischen Zahlen, genau wie die rationalen Zahlen, abzählbar.\footnote{\const{SupNum_g_footnote_text_TranszendenteZahlEigenschaften}}'."\n".
                    'Dies gibt uns im Lichte der hier auch entwickelten \jump{OM:SupNum:Ableitungen-Integrale}{Ableitungen und Integrale} mit Superial-Zahlen den Hinweis,'."\n".
                    'dass die Koeffizienten der algebraischen Zahlen tatsächlich zu den Superial-Zahlen gehören.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Durch-Radikale-darstellbare-algebraischen-Zahlen-sinnvolle-Koeffizienten-SZ', text =>
                      
                'Durch Radikale darstellbare algebraischen Zahlen sind sinnvolle Koeffizienten der Superial-Zahlen', subline =>
                  'Das Ergebnis des Beweises der Überrationalitätsvermutung')),
                  array( 'text', array( text => array(
                    'Um die Sache weiter systematisch anzugehen hatte ich die Idee, mich als nächstes mit den irrationalen Radikalen der'."\n".
                    'algebraischen Zahlen zu beschäftigen, den ganzzahligen Wurzeln aus ganzen Zahlen, die irrationale Zahlen ergeben.'."\n",
                      'Wenn die irrationalen algebraischen Zahlen, die durch Radikale darstellbar sind, im Produkt mit unserem \lm{ \s }'."\n".
                    'aktual unendlich große ganze Zahlen ergeben sollen, um sinnvolle Koeffizienten der Superial-Zahlen zu sein,'."\n".
                    'dann muss jedes dieser irrationalen Radikale einem Bruch aus'."\n".
                    'aktual unendlich großem ganzen Nenner und Zähler entsprechen.'."\n".
                    'Die Faktoren im Nenner und Zähler, die jeweils die Ganzzahligkeit erzeugen, müssen ebenso Faktoren im Primzahl-Flächenprodukt von \lm{ \s } sein,'."\n".
                    'damit \lm{ \s } als Faktor auch diese Ganzzahligkeit erzeugen kann.'."\n",
                      'Genau das zeigen wir mit dem \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Beweis der Überrationalitätsvermutung} und'."\n".
                    'entdecken Zusammenhänge, die mir ganz neu erscheinen.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Wurzel aus Zwei und die natürlichen Superial-Zahlen} \\\\'."\n".
                    'Wir erkennen im Speziellen, dass wir den Faktor \lm{ 2^{ω} } im Primzahl-Flächenprodukt von \lm{ \s } finden,'."\n".
                    'der aus der zweiten Wurzel aus Zwei \lm{ *| \sqrt[2]{ 2 } |* = 2^{\frac{1}{2}} } eine aktual unendlich große ganze Zahl macht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }} \cdot 2^{ω}  \in  \mathbb{N}_{\infty}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-mal-2-hoch-omega-element-N-infinity}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{ω + \frac{ 1 }{ 2 }}  \in  \mathbb{N}_{\infty}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-2-hoch-omega+einhalb-element-N-infinity}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Weil dieser Faktor auch in \lm{ \s } steckt, erkennen wir weiter, dass dann auch \lm{ \s } im Produkt mit der'."\n".
                    'zweiten Wurzel aus Zwei eine aktual unendlich große ganze Zahl sein muss und dann die zweite Wurzel aus Zwei'."\n".
                    'ein sinnvoller Koeffizient der Superial-Zahlen ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }} \s  \in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }} \s  :\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Lösung nach der oben aufgeworfenen Frage eines überrationalen Bruchs aus aktual unendlich großem'."\n".
                    'Nenner und Zähler sieht in diesem Fall wie folgt aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| \sqrt{ 2 } |*  =  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{\frac{ 1 }{ 2 }} \cdot 2^{ω} }{ 2^{ω} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-2-hoch-omega-mal-Wurzel-Zwei-durch-2-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Das vollständige Kürzen von \lm{ 2^{ω} } macht hier in sofern keinen Sinn, weil dann der Zähler'."\n".
                    'keine ganze Zahl mehr wäre, was aber gesucht war.'."\n".
                    'Unsere neue Erkenntnis zeigt uns jedoch, dass wir den Faktor Zwei im Zähler und Nenner so oft kürzen oder hinzufügen können,'."\n".
                    'solange es aktual unendlich viele Zweien in der Potenz bleiben, ohne den Wahrheitsgehalt der Aussage zu verändern,'."\n".
                    'was im Folgenden sehr wichtig wird.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die \lm{ x }-te Wurzel aus \lm{ n } und die natürlichen Superial-Zahlen} \\\\'."\n".
                    'Im ganz allgemeinen Fall der \lm{ x }-ten Wurzel aus \lm{ n } wie \lm{ *| \sqrt[x]{ n } |* = n^{\frac{1}{x}} }'."\n".
                    'stellt sich die Sache wie folgt dar'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }} \cdot n^{ω}  \in  \mathbb{N}_{\infty}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-omega-mal-n-hoch-eins-durch-x-in-natuerlich-infinit}', label_incr => false),
                      array( display => 'on',  latex => '{  n^{ω}  \in  \mathbb{N}_{\infty}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-omega-in-natuerlich-infinit}', label_incr => false),
                      array( display => 'on',  latex => '{  *( \forall n, x \in \mathbb{N}^{+} *) *( n, x \ge 2 *)  *[  n^{\frac{ 1 }{ x }}  =  \frac{ n^{\frac{ 1 }{ x }} \cdot n^{ω} }{ n^{ω} }  *]  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-eins-durch-x-gleich-n-hoch-omega-mal-n-hoch-eins-durch-x-durch-n-hoch-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ n^{ω + \frac{ 1 }{ x }} }{ n^{ω} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-eins-durch-x-gleich-n-hoch-omega-plus-n-hoch-eins-durch-x-durch-n-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'und im unterschied zum vorhergehenden Beispiel ist es so, dass die natürliche Zahl \lm{ n } wegen des Fundamentalsatzes der Arithmetik\footnote{\const{SupNum_g_footnote_text_FundamentalsatzDerArithmetik}}'."\n".
                    'eine Primfaktorzerlegung haben kann, in der einzelne Primzahlen in höheren Potenzen als Eins vorkommen können:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists k_{i} \in \mathbb{N} *) *( \forall p_{i} \in \mathbb{P} *)  *[  n  =  p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies hat zur Folge, dass \lm{ n } in der Potenz der vollständigen Induktion \lm{ n^{ω} } kein Teiler der superialen Basis \lm{ \s } ist'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{ω}  =  *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots *)^{ω}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{ω}  =  p_{1}^{k_{1} ω} \cdot p_{2}^{k_{2} ω} \cdot p_{3}^{k_{3} ω} \cdot p_{4}^{k_{4} ω} \cdot \cdots  }'),
                      array( display => 'on',  latex => '{  \s  =  p_{1}^{ω} \cdot p_{2}^{ω} \cdot p_{3}^{ω} \cdot p_{4}^{ω} \cdot \cdots  }'),
                      array( display => 'on',  latex => '{  k_{1} \ge 2 \lor k_{2} \ge 2 \lor k_{3} \ge 2 \lor k_{4} \ge 2 \lor \cdots  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  p_{1}^{k_{1} ω} \cdot p_{2}^{k_{2} ω} \cdot p_{3}^{k_{3} ω} \cdot p_{4}^{k_{4} ω} \cdot \cdots  \nmid  p_{1}^{ω} \cdot p_{2}^{ω} \cdot p_{3}^{ω} \cdot p_{4}^{ω} \cdot \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{ω}  \nmid  \s  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und aus diesem Grund können wir aus unseren bisherigen Erkenntnissen nicht folgern, dass \lm{ n^{\frac{ 1 }{ x }} \cdot \s }'."\n".
                    'immer eine natürliche Superial-Zahl ist und damit alle \lm{ n^{\frac{ 1 }{ x }} } sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n",
                      'Wir müssen also klären, ob auch die aktual unendlichen Teiler von \lm{ \s }, in Form der Produkte von Primzahlen mit Potenzen der'."\n".
                    'vollständigen Induktion \lm{ p_{i}^{ω} }, ausreichen, um im Produkt mit diesen Wurzeln immer natürliche Superial-Zahlen zu erzeugen.'."\n".
                    'Und dazu drücken wir die Wurzel als Bruch von Potenzen der Primzahlen von \lm{ n } aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot \cdots *)^{\frac{ 1 }{ x }} \cdot *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot \cdots *)^{ω} }{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots *)^{ω} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot \cdots *)^{\frac{ 1 }{ x }}  =  \\\ \qquad\qquad\qquad\; \frac{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot \cdots *)^{\frac{ 1 }{ x }} \cdot *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot \cdots *)^{ω} }{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots *)^{ω} }  }'),
                      // array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ p_{1}^{k_{1} *( ω + q *)} \cdot p_{2}^{k_{2} *( ω + q *)} \cdot p_{3}^{k_{3} *( ω + q *)} \cdot p_{4}^{k_{4} *( ω + q *)} \cdot \cdots }{ p_{1}^{k_{1} ω} \cdot p_{2}^{k_{2} ω} \cdot p_{3}^{k_{3} ω} \cdot p_{4}^{k_{4} ω} \cdot \cdots }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Separieren wir die Produkte nach den Faktoren der einzelnen Primzahlpotenzen \lm{ p_{i}^{k_{i}} } in \lm{ n }, dann sieht das Bild folgendermaßen aus'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }}  =  \frac{ *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot *( p_{i}^{k_{i}} *)^{ω} }{ *( p_{i}^{k_{i}} *)^{ω} }  }'),
                      array( display => 'on',  latex => '{  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot *( p_{i}^{k_{i}} *)^{ω}  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und es stellt sich die Frage, ob für jede separate Primzahlpotenz nicht als Faktor auch die'."\n".
                    'einfache vollständige Induktion in der Potenz \lm{ p_{i}^{ω} } ausreicht, um die Wurzel \lm{ *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} }'."\n".
                    'zu einer ganzen Zahl zu machen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }}  ?=  \frac{ *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot p_{i}^{ω} }{ p_{i}^{ω} }  }'),
                      array( display => 'on',  latex => '{  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot p_{i}^{ω}  ?\in  \mathbb{N}_{\infty}  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'denn nur dann, wenn das gegeben ist, ist auch jede dieser Wurzeln im Produkt mit unserer superialen Basis \lm{ \s }'."\n".
                    'eine aktual unendlich große natürliche Superial-Zahl, weil \lm{ \s } eben „nur“ jede Primzahl in'."\n".
                    'einfacher vollständiger Induktionen \lm{ p_{i}^{ω} } enthält:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p_{i}^{ω}  \parallel  \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  \parallel  \rad(n)^{ω}  }'),
                      array( display => 'on',  latex => '{  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ x }} \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei stellt \lm{ \rad(n) } ein Produkt aller Primzahlen in \lm{ n } in einfacher Potenz dar und'."\n".
                    '\lm{ \rad(n)^{ω} } teilt daher des Primzahl-Flächenprodukt von \lm{ \s } exakt.'."\n",
                      'Wie oben gesagt stellen wir im Beweis der Überrationalitätsvermutung fest, dass'."\n".
                    'wir in der Wahl der aktual unendlich großen ganzen Potenz von \lm{ n } frei sind,'."\n".
                    'um die überrationalen Brüche der \lm{ x }-ten Wurzeln aus \lm{ n } darzustellen,'."\n".
                    'solange die Potenz größer bleibt, als jede endliche natürliche Zahl – also solange sie nicht endlich wird.'."\n".
                    'Das haben wir schon in Formel \jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-mal-n-hoch-eins-durch-x-in-natuerlich-infinit}'."\n".
                    'für die aktual unendliche Potenz \lm{ g } gefunden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall i \in \mathbb{N} *) *( \forall g \in \mathbb{N}_{\infty} *) *( i < g *)  *[  n^{\frac{ 1 }{ x }} \cdot n^{g}  \in  \mathbb{N}_{\infty}  *]  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-mal-n-hoch-eins-durch-x-in-natuerlich-infinit}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot *( p_{i}^{k_{i}} *)^{g}  \in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot p_{i}^{k_{i} \cdot g}  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So können wir für \lm{ k_{i} \cdot g } auch die vollständige Induktion \lm{ ω } einsetzen'."\n".
                    'und damit den Exponenten des Primzahl-Flächenprodukts unserer superialen Basis \lm{ \s } verwenden'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot p_{i}^{ω}  \in  \mathbb{N}_{\infty}  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'was wunderbarerweise genau die Eigenschaft ist, die wir an dieser Stelle für sinnvolle Koeffizienten der Superial-Zahlen benötigen.'."\n",
                      'So ergeben sich dann folgende Aussagen für die \lm{ x }-te Wurzel aus \lm{ n }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{1}{x}} \cdot \rad(n)^{ω}  \in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *| \sqrt[x]{ n } |*  =  n^{\frac{ 1 }{ x }}  =  \frac{ n^{\frac{ 1 }{ x }} \cdot \rad(n)^{ω} }{ \rad(n)^{ω} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{1}{x}} \cdot \s  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit sind alle durch Radikale darstellbaren algebraischen Zahlen sinnvolle Koeffizienten der Superial-Zahlen:'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{1}{x}} \cdot \s  :\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies ist sehr bemerkenswert und stößt eine neue Tür für das Verständnis von irrationalen Zahlen und für'."\n".
                    'die Nützlichkeit der Superial-Zahlen auf.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:X', text =>
                      
                'Alle algebraischen Zahlen auf Grundlage von Kombinationen von radikalen algebraischen Zahlen durch Grundrechenarten sowie deren ganze Potenzen sind sinnvolle Koeffizienten der Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wir werden nachfolgen zeigen, dass tatsächlich alle Kombinationen von radikalen algebraischen Zahlen mit den Grundrechenarten und'."\n".
                    'ganzer Potenzen im Produkt mit der superialen Basis \lm{ \s } aktual unendlich große ganze Zahlen und damit'."\n".
                    'sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Kehrwerte-der-Wurzeln}{}Die Kehrwerte der Wurzeln} \\\\'."\n".
                    'Als erstes betrachten wir die Kehrwerte der Wurzeln oder anders ausgedrückt,'."\n".
                    'die negativen Wurzeln.'."\n".
                    'Dazu gucken wir uns diese jetzt näher an.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei es erlaubt, dass in der \lm{ x }-te Wurzel aus \lm{ n } die Wurzel \lm{ x } eine negative Zahl,'."\n".
                      'aber nicht Null ist'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, x \in \mathbb{N}^{+} *) *( n, x \geq 2 *)  *[  n^{- \frac{ 1 }{ x }}  =  \frac{ n^{- \frac{ 1 }{ x }} \cdot \rad(n)^{ω} }{ \rad(n)^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ x }}  =  \frac{ \rad(n)^{ω} }{ n^{\frac{ 1 }{ x }} \cdot \rad(n)^{ω} }  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'dann bleibt der Bruch trotzdem ein überrationaler Bruch aus zwei aktual unendlichen ganzen Zahlen, wie wir sehen.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Die \lm{ x }-te Wurzel aus \lm{ n } rutscht einfach in den Nenner des Bruchs'."\n".
                    'zum anderen identischen aktual unendlich großen Primzahlturm, wo das Produkt dann ebenso eine aktual unendlich große ganze Zahl ergibt,'."\n".
                    'wie zuvor im Zähler.'."\n".
                    'Das ist plausibel.'."\n",
                      'Jedoch stellt sich wieder die Frage:'."\n".
                    'Ist das Produkt des Kehrwerts einer Wurzel mit der superialen Basis \lm{ \s } auch immer eine natürliche'."\n".
                    'Superial-Zahl?'."\n".
                      'Dies ist nicht ganz so offensichtlich, weil es bedeutet, dass \lm{ \s } durch eine \lm{ x }-te Wurzel aus \lm{ n }'."\n".
                    'geteilt auch immer eine ganze positive Superial-Zahl sein muss:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, x \in \mathbb{N}^{+} *) *( n, x \geq 2 *)  *[  n^{- \frac{ 1 }{ x }} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ \s }{ n^{\frac{ 1 }{ x }} }  ?\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Ob die Division von \lm{ \s } durch eine möglicherweise irrationale positive Wurzel auch immer eine aktual unendlich große ganze Zahl bleibt,'."\n".
                    'erscheint in der Tat fragwürdig.'."\n",
                      'Ich möchte damit ansetzen, dies an der Quadratwurzel aus aus \lm{ n } zu zeigen und von hier aus zu verallgemeinern.'."\n".
                    'Denn im Fall der Quadratwurzel können wir durch eine erlaubte Division ganz leicht zeigen, dass unsere fragliche Aussage wahr ist:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei die uns bekannte wahre Aussage, dass die'."\n".
                      'Quadratwurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } eine ganze Zahl ist'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N}^{+} *) *( n \geq 2 *)  *[  n^{\frac{ 1 }{ 2 }} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'unser Ansatz, so gelangen wir durch die erlaubte Division von \lm{ \s } durch \lm{ n },'."\n".
                      'die den Wahrheitsgehalt der Aussage nicht verändert, und deren Umformung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ n }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ 2 } - 1} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ 2 }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'zu der Aussage, dass auch der Kehrwert der Quadratwurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } eine ganze Zahl sein muss,'."\n".
                      'was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Nun verallgemeinern wir auf die generelle Aussage, mit dem Kehrwert der \lm{ x }-ten Wurzel'."\n".
                    'aus einer endlichen natürlichen Zahl \lm{ n } größer gleich Zwei.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei die uns bekannte wahre Aussage, dass die'."\n".
                      '\lm{ x }-te Wurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } eine ganze Zahl ist'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, x \in \mathbb{N}^{+} *) *( n, x \geq 2 *)  *[  n^{\frac{ 1 }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'unser Ansatz, so gelangen wir durch die erlaubte Division von \lm{ \s } durch \lm{ n }'."\n".
                      'und durch einen Faktor, der eine erlaubte Potenz der \lm{ x }-ten Wurzel aus \lm{ n } ist,'."\n".
                      'wie wir im \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Ganzzahlige-Potenzen-der-Wurzeln}{folgenden Abschnitt} hergeleitet haben,'."\n".
                      'die beide den Wahrheitsgehalt der Aussage nicht verändern, und durch deren Umformung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }} \cdot *( n^{\frac{ 1 }{ x }} *)^{x - 2} \cdot \frac{ \s }{ n }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }} \cdot n^{\frac{ x - 2 }{ x }} \cdot \frac{ \s }{ n^{\frac{ x }{ x }} }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }} \cdot n^{\frac{ x - 2 }{ x }} \cdot n^{- \frac{ x }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }} \cdot n^{\frac{ x - 2 - x }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }} \cdot n^{- \frac{ 2 }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 - 2 }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'zu der Aussage, dass auch der Kehrwert der \lm{ x }-ten Wurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } eine ganze Zahl sein muss,'."\n".
                      'was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Über erlaubte Operationen, die die Ganzzahligkeit unseres Ansatzes erhalten, erreichen wir also'."\n".
                    'die gesuchte Aussage, dass auch die Kehrwerte der \lm{ x }-ten Wurzeln aus \lm{ n } natürliche Superial-Zahlen sind.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Ganzzahlige-Potenzen-der-Wurzeln}{}Ganzzahlige Potenzen der Wurzeln und ihrer Kehrwerte} \\\\'."\n".
                    'Können wir auch für die ganzzahligen Potenzen der Wurzeln und ihrer Kehrwerte bestätigen,'."\n".
                    'dass ihre Produkte mit der superialen Basis \lm{ \s } natürliche Superial-Zahlen sind.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei die ganzzahlige Potenz einer Wurzel oder ihres Kehrwerts im Produkt mit der superialen Basis'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, k \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\quad  *[  *( n^{\frac{ 1 }{ y }} *)^{k} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'eine natürliche Superial-Zahl, dann können wir dies umformen zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ k }{ y }} \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( n^{k} *)^{\frac{ 1 }{ y }} \cdot \s  ?\in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'wobei wir sehen, dass wegen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{k} \in \mathbb{N}^{+} \setminus *\{ 1 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'die neue Basis einfach nur ein anderer natürlicher Radikand \lm{ n^{k} } der Wurzel ist,'."\n".
                      'so dass unsere anfängliche Aussage'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n, k \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\qquad\quad\;\;\;  *[  *( n^{\frac{ 1 }{ y }} *)^{k} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'wahr ist.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir brauchen uns also um die ganzzahligen Potenzen der Wurzeln oder ihrer Kehrwerte nicht zu sorgen'."\n".
                    'und weiter zu kümmern.'."\n".
                    'Sie sind völlig neutral.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Produkte von Wurzeln mit gleicher Basis} \\\\'."\n".
                    'Wie sieht es nun mit den Produkten von Wurzeln, oder von deren Kehrwerten, aus?'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei das Produkt zweier Wurzel beziehungsweise ihres Kehrwerts im Produkt mit der superialen Basis'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\,  *[  n^{\frac{ 1 }{ y }} \cdot n^{\frac{ 1 }{ z }} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'eine natürliche Superial-Zahl, dann können wir dies umformen zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ z }{ y \cdot z }} \cdot n^{\frac{ y }{ y \cdot z }} \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ y + z }{ y \cdot z }} \cdot \s  ?\in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'wobei wir sehen, dass wegen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ y \cdot z }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und weil wir im \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Ganzzahlige-Potenzen-der-Wurzeln}{vorherigen Abschnitt}'."\n".
                      'geklärt haben, dass ganzzahlige Potenzen der Wurzeln und ihrer Kehrwerte im Produkt'."\n".
                      'mit der superialen Basis natürliche Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( n^{\frac{ 1 }{ y \cdot z }} *)^{y + z} \cdot \s  \in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'so ist auch'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\qquad\;\;\;\,  *[  n^{\frac{ 1 }{ y }} \cdot n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'wahr.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir brauchen uns also um die Produkte der Wurzeln oder ihrer Kehrwerte auch nicht zu sorgen.'."\n".
                    'Sie sind auch im Produkt mit der superialen Basis \lm{ \s } natürliche Superial-Zahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Produkte von Wurzeln mit unterschiedlicher Basis} \\\\'."\n".
                    'Wie stellt es sich aber bei den Produkten von Wurzeln, oder von deren Kehrwerten, mit ungleicher Basis dar?'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei das Produkt zweier Wurzel beziehungsweise ihres Kehrwerts mit unterschiedlicher Basis im Produkt mit der superialen Basis'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, m \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( n \neq m *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\qquad\qquad\,  *[  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'eine natürliche Superial-Zahl, dann'."\n".
                      'helfen uns die Einsichten aus dem Abschnitt \italic{\jumpname{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Durch-Radikale-darstellbare-algebraischen-Zahlen-sinnvolle-Koeffizienten-SZ}}.'."\n".
                      'Denn wir können die Basis jedes Faktoren vor \lm{ \s } wegen des Fundamentalsatzes der Arithmetik\footnote{\const{SupNum_g_footnote_text_FundamentalsatzDerArithmetik}}'."\n".
                      'in ihre Primzahlpotenzen zerlegen und gegebenenfalls neu zusammenfassen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists k_{n,i} \in \mathbb{N} *) *( \forall p_{i} \in \mathbb{P} *)  *[  n  =  p_{1}^{k_{n,1}} \cdot p_{2}^{k_{n,2}} \cdot p_{3}^{k_{n,3}} \cdot p_{4}^{k_{n,4}} \cdot \cdots  *]  }'),
                      array( display => 'off', latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }}  =  *( p_{1}^{k_{n,1}} \cdot p_{2}^{k_{n,2}} \cdot p_{3}^{k_{n,3}} \cdot p_{4}^{k_{n,4}} \cdot \cdots *)^{\frac{ 1 }{ y }}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }}  =  p_{1}^{\frac{ k_{n,1} }{ y }} \cdot p_{2}^{\frac{ k_{n,2} }{ y }} \cdot p_{3}^{\frac{ k_{n,3} }{ y }} \cdot p_{4}^{\frac{ k_{n,4} }{ y }} \cdot \cdots  }',
                                    latex_if_visible => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }}  =  p_{1}^{\frac{ k_{n,1} }{ y }} \cdot p_{2}^{\frac{ k_{n,2} }{ y }} \cdot p_{3}^{\frac{ k_{n,3} }{ y }} \cdot p_{4}^{\frac{ k_{n,4} }{ y }} \cdot \cdots  }'),
                      array( display => 'on',  latex => '{  *( \exists k_{m,i} \in \mathbb{N} *) *( \forall p_{i} \in \mathbb{P} *)  *[  m  =  p_{1}^{k_{m,1}} \cdot p_{2}^{k_{m,2}} \cdot p_{3}^{k_{m,3}} \cdot p_{4}^{k_{m,4}} \cdot \cdots  *]  }'),
                      array( display => 'off', latex => '{  \Rightarrow  m^{\frac{ 1 }{ z }}  =  *( p_{1}^{k_{m,1}} \cdot p_{2}^{k_{m,2}} \cdot p_{3}^{k_{m,3}} \cdot p_{4}^{k_{m,4}} \cdot \cdots *)^{\frac{ 1 }{ z }}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  m^{\frac{ 1 }{ z }}  =  p_{1}^{\frac{ k_{m,1} }{ z }} \cdot p_{2}^{\frac{ k_{m,2} }{ z }} \cdot p_{3}^{\frac{ k_{m,3} }{ z }} \cdot p_{4}^{\frac{ k_{m,4} }{ z }} \cdot \cdots  \;\; ,  }',
                                    latex_if_visible => '{  \Leftrightarrow  m^{\frac{ 1 }{ z }}  =  p_{1}^{\frac{ k_{m,1} }{ z }} \cdot p_{2}^{\frac{ k_{m,2} }{ z }} \cdot p_{3}^{\frac{ k_{m,3} }{ z }} \cdot p_{4}^{\frac{ k_{m,4} }{ z }} \cdot \cdots  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'also ergibt sich für unser Produkt'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }}  =  p_{1}^{\frac{ k_{n,1} }{ y } + \frac{ k_{m,1} }{ z }} \cdot p_{2}^{\frac{ k_{n,2} }{ y } + \frac{ k_{m,2} }{ z }} \\\ \qquad\qquad\qquad\quad\;\;\; \cdot p_{3}^{\frac{ k_{n,3} }{ y } + \frac{ k_{m,3} }{ z }} \cdot p_{4}^{\frac{ k_{n,4} }{ y } + \frac{ k_{m,4} }{ z }} \cdot \cdots  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }}  =  p_{1}^{\frac{ k_{n,1} \cdot z }{ y \cdot z } + \frac{ k_{m,1} \cdot y }{ z \cdot y }} \cdot p_{2}^{\frac{ k_{n,2} \cdot z }{ y \cdot z } + \frac{ k_{m,2} \cdot y }{ z \cdot y }} \\\ \qquad\qquad\qquad\quad\;\;\; \cdot p_{3}^{\frac{ k_{n,3} \cdot z }{ y \cdot z } + \frac{ k_{m,3} \cdot y }{ z \cdot y }} \cdot p_{4}^{\frac{ k_{n,4} \cdot z }{ y \cdot z } + \frac{ k_{m,4} \cdot y }{ z \cdot y }} \cdot \cdots  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }}  =  p_{1}^{\frac{ k_{n,1} \cdot z + k_{m,1} \cdot y }{ y \cdot z }} \cdot p_{2}^{\frac{ k_{n,2} \cdot z + k_{m,2} \cdot y }{ y \cdot z }} \\\ \qquad\qquad\qquad\quad\;\;\; \cdot p_{3}^{\frac{ k_{n,3} \cdot z + k_{m,3} \cdot y }{ y \cdot z }} \cdot p_{4}^{\frac{ k_{n,4} \cdot z + k_{m,4} \cdot y }{ y \cdot z }} \cdot \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }}  =  *( p_{1}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,1} \cdot z + k_{m,1} \cdot y} \cdot *( p_{2}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,2} \cdot z + k_{m,2} \cdot y} \\\ \qquad\qquad\qquad\quad\;\;\; \cdot *( p_{3}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,3} \cdot z + k_{m,3} \cdot y} \cdot *( p_{4}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,4} \cdot z + k_{m,4} \cdot y} \cdot \cdots  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und wir sehen, dass alle Potenzen rationale Zahlen sind, in Nenner und Zähler also ganze Zahlen haben,'."\n".
                      'was ganzzahligen Potenzen ganzzahliger Wurzeln, oder deren Kehrwerten, entspricht.'."\n".
                      'Wir \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Ganzzahlige-Potenzen-der-Wurzeln}{wissen bereits},'."\n".
                      'dass solche Faktoren von \lm{ \s } in endlicher Anzahl natürliche Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( p_{1}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,1} \cdot z + k_{m,1} \cdot y} \cdot *( p_{2}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,2} \cdot z + k_{m,2} \cdot y} \cdot *( p_{3}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,3} \cdot z + k_{m,3} \cdot y} \cdot \cdots \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\qquad\quad\;\; \cdot \s  \in  \mathbb{S}_{\N}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und damit erkennen wir, unsere Ausgangsannahme'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n, m \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\qquad\quad\;\;\;\,  *[  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'muss wahr sein.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir brauchen uns also um die Produkte der Wurzeln mit unterschidlicher Basis, oder ihrer Kehrwerten, nicht zu sorgen.'."\n".
                    'Sie sind auch im Produkt mit der superialen Basis \lm{ \s } natürliche Superial-Zahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Summe einer Wurzel, oder ihres Kehrwerts, mit einer endlichen ganzen Zahlen} \\\\'."\n".
                  '\cond{Auch der Goldene Schnitt \lm{ φ } ist eine Superial-Zahl} \\\\'."\n".
                    'Wir müssen nun noch untersuchen, ob auch Summen von irrationalen Wurzeln, oder ihren Kehrwerten,'."\n".
                    'mit endlichen ganzen Zahlen, die auch zu den irrationalen algebraischen Koeffizienten gehören,'."\n".
                    'als Produkt mit unserer superialen Basis \lm{ \s } ganze beziehungsweise natürliche Superial-Zahlen sind.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Nehmen wir an, dass die irrationale Wurzel, oder ihr Kehrwerten, in einer Summe mit der endlichen ganzen Zahl \lm{ z }'."\n".
                      'zusammen im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N}^{+} *) *( n \geq 2 *) *( \forall y \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) *( \forall z \in \mathbb{Z} *)  \\\ \qquad\qquad *( n^{\frac{ 1 }{ y }} + z \ge 0 *)  *[  *( n^{\frac{ 1 }{ y }} + z *) \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Ausmultiplizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot \s + z \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Da beide Summanden aktual unendlich große natürliche oder ganze Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ y }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  z \cdot \s  \in  \mathbb{S}_{\Z}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und die Summe zweier ganzer Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }} \cdot \s + z \cdot \s  \in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'unter den obigen Bedingungen, immer eine natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'So sind dann auch algebraische Zahlen wie der Goldene Schnitt \lm{ φ }'."\n".
                    'als Faktoren der superialen Basis \lm{ \s } natürliche Superial-Zahlen.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Nehmen wir an, dass der irrationale Goldene Schnitt \lm{ φ } im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  φ \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'mit dem Wert seiner Definition'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  φ  =  \frac{ \sqrt{ 5 } + 1 }{ 2 }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Einsetzen, Umstellen und Ausmultiplizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ \sqrt{ 5 } + 1 }{ 2 } \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *( 5^{\frac{ 1 }{ 2 }} + 1 *) \cdot \frac{ \s }{ 2 }  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  5^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ 2 } + \frac{ \s }{ 2 }  ?\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Da beide Summanden aktual unendlich große natürliche Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  5^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ 2 }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \frac{ \s }{ 2 }  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und die Summe zweier natürlicher Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  5^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ 2 } + \frac{ \s }{ 2 }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ 5^{\frac{ 1 }{ 2 }} \cdot \s + \s }{ 2 }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  φ \cdot \s  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'auch immer eine aktual unendlich große natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir fahren fort, weitere Varianten der Realanteile algebraischer Zahlen auf die Ganzzahligkeit unter Faktorisierung mit \lm{ \s } zu überprüfen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Summen-von-Wurzeln}{}Summen und Differenzen von Wurzeln} \\\\'."\n".
                    'Ganz ähnlich verhält es sich mit Summen von zwei oder mehr Wurzeln.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Nehmen wir an, dass eine Summe aus zwei irrationalen Wurzeln, oder ihrer jeweiligen Kehrwerte, im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, m \in \mathbb{N}^{+} *) *( n, m \geq 2 *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *)  \\\ \qquad\quad *( n^{\frac{ 1 }{ y }} + n^{\frac{ 1 }{ z }} \ge 0 *)  *[  *( n^{\frac{ 1 }{ y }} + n^{\frac{ 1 }{ z }} *) \cdot \s  ?\in  \mathbb{S}_{N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Ausmultiplizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot \s + n^{\frac{ 1 }{ z }} \cdot \s  ?\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Da beide Summanden ganze Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ y }} \cdot \s  \in  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{Z}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und die Summe zweier ganzer Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }} \cdot \s + n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'unter den obigen Bedingungen, immer eine natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'So sind dann alle algebraischen Zahlen, die durch Kombinationen arithmetischer Operationen von Radikalen – Wurzelausdrücken –,'."\n".
                    'oder deren Kehrwerte, inklusive ganzzahliger Potenzen, dargestellt werden können, natürliche Superial-Zahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Nullstellen von Polynomen ersten bis vierten Grades sind sinnvolle Koeffizienten der Superial-Zahlen} \\\\'."\n".
                  // '\cond{X} \\\\'."\n".
                    'Zu algebraischen Zahlen, die Nullstellen von Polynomen ersten bis vierten Grades entsprechen, finden wir in Wikipedia:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'quote', text => array(
                      'Im Rahmen der Galoistheorie werden diese Zwischenkörper untersucht, um so tiefe Einblicke über die Lösbarkeit oder Nichtlösbarkeit von Gleichungen zu erhalten.'."\n".
                      'Ein Resultat der Galoistheorie ist, dass zwar jede komplexe Zahl, die man aus rationalen Zahlen durch Verwendung der'."\n".
                      'Grundrechenarten (Addition, Subtraktion, Multiplikation und Division) sowie durch Ziehen n-ter Wurzeln (n eine natürliche Zahl)'."\n".
                      'erhalten kann (man nennt solche Zahlen „durch Radikale darstellbar“), algebraisch ist, umgekehrt aber algebraische Zahlen existieren,'."\n".
                      'die man nicht in dieser Weise darstellen kann; alle diese Zahlen sind Nullstellen von Polynomen mindestens 5. Grades.'."\n".
                      ''),
                      addtext => '\footnote{Vgl. \cite{wiki:AlgebraischeZahl:2022}, Eigenschaften.}')),
 
                  array( 'text', array( text => array(
                    'Damit sind alle Koeffizienten von Superial-Zahlen, die den Realanteilen von Nullstellen der Polynome ersten bis vierten Grades'."\n".
                    'entsprechen, vollständig abgedeckt.'."\n".
                    'Wir wissen nun also, dass die Realanteile dieser Nullstellen alle sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Nullstellen von Polynomen fünften und höheren Grades} \\\\'."\n".
                    'Für die Lösung der Nullstellen von Polynomen fünften Grades können wir folgendes in Wikipedia finden:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'quote', text => array(
                      'Eine allgemeine Lösungsformel, die nur mit den vier Grundrechenarten und dem Wurzelziehen auskommt,'."\n".
                      'gibt es für Gleichungen höheren als vierten Grades nicht (ein Resultat der Galoistheorie). \\\\'."\n".
                      '[…] \\\\'."\n".
                      'Gleichungen fünften Grades lassen sich mit Hilfe elliptischer Funktionen allgemein lösen.'."\n".
                      'Als Erster hat das Charles Hermite 1858 mit jacobischen Thetafunktionen gezeigt.'."\n".
                      ''),
                      addtext => '\footnote{Vgl. \cite{wiki:LoesenVonGleichungen:2024}, Gleichungen höheren Grades.}')),
 
                  array( 'text', array( text => array(
                    'Umgekehrt gibt es algebraische Zahlen, die keine Lösungen der Nullstellen von Polynomen'."\n".
                    'ersten bis vierten Grades sind und doch mit Radikalen darstellbar, denn:'."\n".
                    '\quote{Manche Gleichungen fünften Grades können mit Wurzeln gelöst werden, […]}\footnote{Vgl. \cite{wiki:GleichungFuenftenGrades:2024}, Lösbare Gleichungen fünften Grades, Voraussetzungen für die Lösbarkeit.}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:superiale-Koeffizienten-Realanteile-algebraischer-Zahlen}{}Vermutung, dass superiale Koeffizienten Realanteile algebraischer Zahlen sind} \\\\'."\n".
                    'Für den Rest der Realanteile der algebraischen Zahlen scheint es nicht simpel zu sein zu zeigen, dass sie ebenfalls'."\n".
                    'sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n",
                      'Wegen der Abgeschlossenheit der algebraischen Zahlen\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:AlgebraischeZahl:2022}, Eigenschaften.}'."\n".
                    'und der \jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{Erkenntnisse zur transzendenten Zahl \lm{ \e_{\s} }},'."\n".
                    'die offensichtlich superiale aktual unendlich kleine Summanden enthält, sowie meiner Vermutung,'."\n".
                    'dass dies auch für alle anderen transzendenten Zahlen gilt, vermute ich, dass wirklich genau alle'."\n".
                    'Realanteile algebraischer Zahlen \lm{ \mathbb{A}_{\R} }, nicht weniger, aber auch nicht mehr, sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n".
                    'Denn die Linie, die die algebraischen Zahlen von den transzendenten trennt, ist im Grunde die gleiche,'."\n".
                    'die die einzelnen fraktalen Ebenen der Superial-Zahlen trennt.'."\n",
                      'Genau das ist meine \italic{›\jumpname{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}‹},'."\n".
                    'also, dass Formel \jumpname{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Equ-Realanteile-algebra-Zahlen-mal-s-verm-in-natuerl-SupZahlen}'."\n".
                    'stimmt.'."\n".
                    'Das wäre schon ziemlich erfreulich und cool.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:SIstAngeordneterKoerper'),
                    )),
              )
          ); ?>


          <!  • Was lernen wir über rationale beziehungsweise algebraische Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eigenschaften:Was-lernen-wir-ueber-algebraische-Zahlen-durch-Superial-Zahlen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    '\bold{Nachkommastellen}',
                    '• Wir können lernen, dass die rationale Zahl \lm{ ⅓ = 0,\!33333\overline{3} = 0 \cdot 10^{0} + 3 \cdot 10^{-1} + 3 \cdot 10^{-2} + 3 \cdot 10^{-3} + \cdots } oder auch die algebraische Zahl \lm{ φ } nur Nachkommastellen haben, die alle endliche Werte haben, also endliche negative Potenzen haben, auch, wenn es unendlich viele sind. Dies muss so sein, weil es sonst einen Übertrag in die nächst tiefere Stelle der Superial-Zahl gibt.',
                    '– Das ergibt sich aus den \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen}.',
                    ))),
                      
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
                      array(  jump_name => 'OM:SupNum:Eigenschaften:Was-lernen-wir-ueber-algebraische-Zahlen-durch-Superial-Zahlen', type => 'back'),
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:X', text =>

                '\italic{Inhalt}', subline =>
                  '')),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-endl-ganz-Zahlen'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-Menge-S-Bemerkenswerten-Zusammenhang'),
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:s-und-omega-hoch-omega-im-Strukturvergleich'),
                    )),

                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS', text =>
                      
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
                    'Mathematisch gesehen sind die Biordinalzahlen eine Erweiterung der Ordinalzahlen\footnote{\const{NSOSP_g_footnote_text_Ordinalzahl}} zu einem algebraischen Ring\footnote{\const{NSOSP_g_footnote_text_RingAlgebra}}.'."\n",
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
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Das Intervall der Vorgänger der superialen Einheit ist im Detail'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, \s [_{\mathbb{S}_{\N}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\qquad\, *[  x  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < 1  \\\\  \s + z^{-}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  \;\; ,  }',
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
                      'Seien \lm{ \rbrack a, b \lbrack_{\mathbb{A}_{\S}} } und \lm{ \lbrack a, b \lbrack_{\mathbb{A}_{\S}} } \jump{OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge}{Intervall-Mengen} aus \lm{ \mathbb{A}_{\S} },'."\n".
                      'dann ergibt sich \lm{ \s }, nach vorstehendem Gedanken, zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  \# \mathbb{N} + \# *( ] 0, 1 [_{\mathbb{A}_{\S}} *) \cdot \# \mathbb{Z} + \# \mathbb{Z^{-}}  }'),
                      array( display => 'off', latex => '{  \# \mathbb{Z}  =  \# \mathbb{N} + \# \mathbb{Z^{-}} }'),
                      array( display => 'off', latex => '{  \Rightarrow  \s  =  \# \mathbb{Z} + \# *( ] 0, 1 [_{\mathbb{A}_{\S}} *) \cdot \# \mathbb{Z}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \s  =  *( 1 + \# *( ] 0, 1 [_{\mathbb{A}_{\S}} *) *) \cdot \# \mathbb{Z}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  \# *( [ 0, 1 [_{\mathbb{A}_{\S}} *) \; \cdot \; \# \mathbb{Z}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  \# *( [ 0, 1 [_{\mathbb{A}_{\S}} *) \; \cdot \; 2 ω  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'was der Anzahl aller \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen} entspricht,'."\n".
                      'die, nach unserer \jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{Vermutung, alle reell algebraischen Zahlen} sind. \\\\'."\n".
                      'Denn mit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  =  \\\ \qquad *\{  x  *|*  *( \forall z \in \mathbb{Z} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}} *)  *[  x = z + u  *]  *\}  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'sind alle sinnvollen Koeffizienten, ohne Redundanzen – also Doppelungen – und Lücken, definiert und es folgt daraus'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \# \mathbb{A}_{\S}  =  \# \mathbb{Z} \; \cdot \; \# *( [ 0, 1 [_{\mathbb{A}_{\S}} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}  =  2 ω \; \cdot \; \# *( [ 0, 1 [_{\mathbb{A}_{\S}} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}  =  \s  \;\; ,  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'weil es in den sinnvollen Koeffizienten \lm{ \mathbb{A}_{\S} } das Interval \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} }'."\n".
                      'für jede ganze Zahl in \lm{ \mathbb{Z} } gibt und sie damit vollständig beschrieben sind.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'So gilt dann auch, nun doppelt bestätigt,'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# *( [ 0, 1 [_{\mathbb{A}_{\S}} *)  =  \frac{ \s }{ 2 ω }  }',
                                          label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins', label_text => '\name{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}', label_incr => true),
                      array( display => 'off', latex => '{  \Leftrightarrow  \# *( [ 0, 1 [_{\mathbb{A}_{\S}} *)  =  \frac{ ω^{ω} }{ 2 ω }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# *( [ 0, 1 [_{\mathbb{A}_{\S}} *)  =  \frac{ ω^{ω - 1} }{ 2 }  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'nach Umformung und mit Hilfe von Formel \jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}.'."\n",
                        '\\\\'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Hier muss es sich um eine ganze Zahl handeln, weil dies die Anzahl der Elemente einer Menge beschreibt, die immer ganz ist,'."\n".
                    'womit nachfolgend diese Erkenntnis ein wichtiger Hinweisgeber zur und zentraler Baustein der \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} ist.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm', text =>
                      
                'Ausgangspunkt der Primzahlprodukt-Vermutung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Und wir können sogar noch weiter gehen und feststellen, dass \lm{ ω } seine Primfaktoren'."\n".
                    'mit \lm{ \s }, siehe Formel \jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}, teilen muss, wenn die Anzahl der \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvollen Koeffizienten}'."\n".
                    'in \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} = \frac{ \s }{ 2 ω } }'."\n".
                    'aus Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins} eine ganze Zahl ist.'."\n".
                    'Weiter ist klar, dass \lm{ ω } aktual unendlich groß ist.'."\n".
                    'Es kann also nur ein Produkt aus unendlich vielen endlichen Primzahlen sein.'."\n",
                      'Doch welches Teilprodukt von \lm{ \s } ist \lm{ ω }, wenn klar ist, dass \lm{ \s } unendlich viel größer ist'."\n".
                    'als \lm{ ω }?'."\n".
                    'Denn schon die Potenz oder der Turm der kleinsten Primzahl \lm{ 2^{ω} } im Primzahl-Flächenprodukt von \lm{ \s } ist definitiv sehr viel größer als \lm{ ω }.'."\n".
                    'Die einzelnen und kombinierten Türme aller Primzahlen \lm{ p_{i}^{ω} }, mit \lm{ p_{i} \in \mathbb{P} }, können so nicht als Faktoren in \lm{ ω } enthalten sein.'."\n",
                      'Das aktual unendlich große Primzahlprodukt, dass auf den ersten Blick bleibt, um \lm{ ω } darzustellen, ist schlicht die Zeile, die alle endlichen Primzahlen enthält, und lässt vermuten,'."\n".
                    'dass \lm{ ω ?= 2 \cdot 3 \cdot 5 \cdot 7 \cdot \cdots } ist.'."\n".
                    'Aber auch dieses Produkt erscheint auf den ersten Blick viel größer als die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    'zu sein, die ja mit \lm{ ω } ausgedrückt wird.'."\n".
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
                      
                'Erklärung der Anzahl der endlichen ganzen Zahlen durch ihren ontologischen Ursprung in der Struktur der Biordinalzahlen', subline =>
                  'Formulierung der Entstehung der negativen ganzen Zahlen durch Rückwärtszählen, ohne Umkehrung der Zählrichtung')),
                  array( 'text', array( text => array(
                    'Die vorstehend gemachten Aussagen sind entscheidend davon abhängig, wieviele endliche ganze Zahlen es gibt.'."\n".
                    'Dies bestimmt zum einen, ob sich wirklich plausibel eine ganze Anzahl an \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen}'."\n".
                    'in \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} } ergibt, sodass wir keinen logischen Bruch und damit einen Widerspruch erhalten.'."\n".
                    'Und damit wird bestimmt, ob wir sagen können, dass \lm{ ω } gemeinsame Teiler mit \lm{ \s } haben muss.'."\n",
                      'Dies ist einer der Gründe, weswegen ich mich mit den Ordinalzahlen\footnote{\const{NSOSP_g_footnote_text_Ordinalzahl}}'."\n".
                    'beschäftigt, diese auf die \jump{OM:BiOrd:Home}{Biordinalzahlen} erweitert und ein Stück weit erforscht habe.'."\n".
                    'Darauf basierend haben wir eine \jump{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}{fundamentale Asymmetrie}'."\n".
                    'herausgearbeitet, die der von uns gefundenen und oben verwendeten Anzahl der endlichen ganzen Zahlen'."\n".
                    '\lm{ 2 ω } zugrunde liegt.'."\n",
                      'Diese Anzahl der endlichen ganzen Zahlen ergibt sich wegen der auch im Negativen bleibenden Zählrichtung, die auch dort in Richtung der größer werdenden, und schließlich positiven Zahlen, ausgerichtet bleibt,'."\n".
                    'weil alle Zahlen letztendlich aus dem Zählen hervorgehen.'."\n".
                    'Siehe dazu auch den \italic{›\jumpname{OM:OT:Zaehloperator}‹} in der \italic{›\jumpname{OM:OT:Home}‹}.'."\n",
                      'Um auszudrücken, dass jeder negative sinnvolle Koeffizient der Superial-Zahlen Teil eines an einer negativen ganzen Zahl hängenden Zahlenintervalls ist,'."\n".
                    'wo jedes negative Zahlenintervall jeweils aus einem Zahlenintervall an einer natürlichen, also positiven Zahl oder der Null entsteht, berücksichtigen wir'."\n".
                    'im Ansatz die ontologische Vorstellung, dass es sich bei Zahlen quasi um Sägezähne – oder spezielle Wellen – von einer Zahl zur nächsten handelt.'."\n".
                    'Diese Sägezähne hängen in Zählrichtung an den ganzen Zahlen.'."\n".
                    ''))),
                      
                  array( 'figure',
                    array_merge( $BiOrd_g_figure_ary_GanzeZahlenGerade, array( name => 'OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen'))),
                                            
                  array( 'text', array( text => array(
                    'Die negativen Zahlen entstehen also eigentlich nicht durch eine Spiegelung all dieser Sägezähne an der Null, sondern durch deren jeweils einzelne Verschiebung.'."\n".
                    'Bei einer Spiegelung an der Null wäre die Null auch strukturell gedoppelt – ontologisch redundant –, was keinen Sinn macht,'."\n".
                    'und die Sägezähne drehten sich um, was, wie gesagt, ebenfalls unsinnig erscheint, weil es eine Umkehrung der Zählrichtung bedeutete.'."\n",
                      'Dieser Zusammenhang soll sich ganz korrekt in der Struktur der ersten Formulierung der Entstehung der negativen Sägezahnintervalle von \lm{ \mathbb{A}_{\S}^{-} } ausdrücken,'."\n".
                    'die wir auf Basis der Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z} ansetzen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  \mathbb{A}_{\S}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}} *)  \\\ \qquad\qquad\qquad\qquad\quad\;\;\,  *[  x = *( n - 2 n - 1 *) + u  *]  *\}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \mathbb{A}_{\S}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}} *)  \\\ \qquad\qquad\qquad\qquad\quad\;\;\,  *[  x = *( - n - 1 *) + u  *]  *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \mathbb{A}_{\S}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}} *)  \\\ \qquad\qquad\qquad\qquad\quad\,  *[  x = - *( n + 1 *) + u  *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Mit Hilfe der Formeln \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}'."\n".
                    'und \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-N} folgt dann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# \mathbb{N}  =  ω  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-N}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \# \mathbb{A}_{\S}^{-}  =  \# *( [ 0, 1 [_{\mathbb{A}_{\S}} *) \, \cdot \; ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{-}  =  \frac{ \s }{ 2 ω } \; \cdot \; ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{-}  =  \frac{ \s }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies passt dann eben auch zu Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}.'."\n",
                      'So ergibt sich dann schlüssig mit Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# \mathbb{A}_{\S}  =  \# \mathbb{A}_{\S}^{-} \; + \; \# \mathbb{A}_{\S}^{0,+}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{0,+}  =  \# \mathbb{A}_{\S} \; - \; \# \mathbb{A}_{\S}^{-}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{0,+}  =  \s \; - \; \frac{ \s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{0,+}  =  \frac{ \s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# \mathbb{A}_{\S}^{0,+}  =  \# \mathbb{A}_{\S}^{-}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Es gibt also eine quasi Spiegelung der Anzahlen von positiven und negativen ganzen Zahlen.'."\n",
                      'Aber die Spiegelung der Werte der ganzen Zahlen an der Null ist nicht korrekt.'."\n".
                    'Die Spiegelung der Werte findet beim Wert \lm{ -½ } statt (siehe \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen}).'."\n".
                    'Wir sehen, es kann der falsche Eindruck einer Spiegelung der Entitäten der ganzen Zahlen oder der reell algebraischen Zahlen entstehen,'."\n".
                    'wenn wir die Intervalle zwischen den ganzen Zahlen nicht explizit berücksichtigen und durch Dranhängen visualisieren würden.'."\n",
                      'Demnach sind wir sicher, dass die \jump{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}{Anzahl der endlichen ganzen Zahlen}'."\n".
                    'wirklich \lm{ 2 ω } ist.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-Menge-S-Bemerkenswerten-Zusammenhang', text =>
                      
                'Die superiale Basis \lm{ \s } und die Menge \lm{ \mathbb{S} } haben einen ganz bemerkenswerten Zusammenhang', subline =>
                  '')),
                      
                  /* array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Bemerkenswerte Doppelung}',
                    '• Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s} zeigt uns mit \lm{ \# \mathbb{A}_{\S} = \s }, dass die Menge aller sinnvollen Koeffizienten der Superial-Zahlen die gleiche Anzahl enthalten muss, wie die Menge der superial kleinen ganzen Zahlen von der Null bis ohne die Eins \lm{ \# *( \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} *) = \s }.',
                    '– Dabei gibt es in der Menge \lm{ \mathbb{A}_{\S} } nur endliche Werte, während in der Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } die weit überwiegende Mehrheit der Elemente aktual unendlich kleine Summanden trägt.',
                    '– Es ist, als wenn in der Geometrie die Anzahl \lm{ \s } an Entitäten – Existenzen – im endlichen in der Menge \lm{ \mathbb{A}_{\S} } nicht dichter gepackt werden kann. Beim Versucht, die gleiche Anzahl an Entitäten auf kleineren Raum, also enger, zu packen, wie bei \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} }, müssen dann Anteile aktual unendlich kleiner Summanden herausfallen.',
                    '⋅ Dies passt zu \italic{›\jumpname{OM:SupNum:Struktur-Geometrie}‹}.',
                    '⋅ Dies würde auch zur \italic{›\jumpname{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}‹} und zur \italic{›\jumpname{OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden}‹} passen.',
                    ))), */
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{Experimenteller neuer Ansatz …}',
                TitleVis => 'Experimenteller neuer Ansatz:', ParagraphList => array(

                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:X', text =>
                      
                'Die superiale Basis \lm{ \s } hat bezüglich der Struktur des Aktual-Unendlichen eine doppelte Bedeutung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Bezüglich der Anzahl von Zahlen in Mengen kommt die superiale Basis \lm{ \s } in zwei sehr ähnlichen und doch ganz unterschiedlichen Zusammenhängen vor,'."\n".
                    'die in der Gegenüberstellung aufhorchen lassen und nachdenklich machen können.'."\n".
                    'Eine bemerkenswerte Doppelung, wie ich finde.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Eine bemerkenswerte Doppelung} \\\\'."\n".
                    'Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s} zeigt uns mit \lm{ \# \mathbb{A}_{\S} = \s },'."\n".
                    'dass die Menge aller \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen} die gleiche Anzahl an Elementen enthalten muss,'."\n".
                    'wie die Menge der superial kleinen ganzen Zahlen von der Null bis ohne die Eins \lm{ \# *( \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} *) = \s }.'."\n",
                      'Interessant ist dabei, dass in der Menge \lm{ \mathbb{A}_{\S} } nur endliche Werte existieren, während in der Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} }'."\n".
                    'die weit überwiegende Mehrheit der Elemente aktual unendlich kleine Summanden beinhaltet.'."\n".
                    'Es ist, als wenn in der Geometrie die Anzahl \lm{ \s } an Entitäten – Existenzen – im endlichen auf einer endlosen Geraden, die den Zahlen der Menge \lm{ \mathbb{A}_{\S} } entsprechen,'."\n".
                    'nicht dichter gepackt werden kann.'."\n".
                    'Bei dem Versucht, die gleiche Anzahl an Entitäten auf kleinerem Raum – also dichter oder enger – zu packen, wie wir dies bei \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } tun,'."\n".
                    'müssen folglich Anteile aktual unendlich kleiner Summanden herausfallen.'."\n".
                    'Diese aktual unendlich kleinen Summanden, sind ganze Zahlen im superial Kleinen.'."\n",
                      'Erstere, die Zahlen der Menge \lm{ \mathbb{A}_{\S} }, können – zumindest im Rahmen der Superial-Zahlen – als die Zahlen unseres Zahlengeraden'."\n".
                    'verstanden werden. also als die Grundlage unserer Geometrie im Endlichen.'."\n",
                      'Letztere, superial kleinen ganzen Zahlen der Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } und deren Erweiterung auf den ganzen Zahlenstrahl,'."\n".
                    'spielen dann die zentrale Rolle in der \jump{OM:SupNum:Ableitungen-Integrale}{Differenzialrechnung} auf Basis von Superial-Zahlen,'."\n".
                    'zum einen in den Differenzen der Ableitung und sodann auch bei der Integration, wo die superial kleinen ganzen Zahlen'."\n".
                    'als Indizes der Summenglieder auftreten.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Existenz der maximalen Dichte der Zahlengeraden} \\\\'."\n".
                    'Die Vorstellung, dass eine weitere Verdichtung der maximaldichten Zahlengeraden zum „herausfallen“ aktual unendlich kleiner ganzer Summanden führt,'."\n".
                    'passt dann genau zu unserer Feststellung auf der Seite \italic{›\jumpname{OM:SupNum:Struktur-Geometrie}‹}.'."\n".
                    'Dort teilen wir die Strecke von der Null bis zur Eins mit Hilfe unserer endlichen Primzahlen jeweils bis zur Potenz der vollständigen Induktion \lm{ ω }.'."\n".
                    'Wir stellen fest, dass wir diese Strecke nicht sinnvoll noch feiner mit Hilfe endlicher Primzahlen teilen können.'."\n".
                    'Und wir erkennen durch den Beweis der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung},'."\n".
                    'dass wir durch deren Potenz \lm{ ω } eine Feinheit der Teilung erreichen,'."\n".
                    'die nachweislich auch alle durch Radikale darstellbaren reell algebraischen Zahlen umfasst, wenn nicht sogar'."\n".
                    '\jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{alle reell algebraischen Zahlen}.'."\n",
                      'Dies würde damit dann eben auch mathematisch perfekt zur \italic{›\jumpname{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}‹}'."\n".
                    'und zur \italic{›\jumpname{OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden}‹} passen, was ja beides noch zu beweisen ist.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Tiefer Zusammenhang zwischen den Primzahlen und den sinnvollen Koeffizienten der Superial-Zahlen} \\\\'."\n".
                  '\cond{Möglicherweise sogar zwischen den Primzahlen und den reell algebraischen Zahlen} \\\\'."\n".
                    'Entspricht die Menge \lm{ \mathbb{A}_{\S} } tatsächlich der Menge aller reell algebraischen Zahlen \lm{ \mathbb{A} },'."\n".
                    'dann werden diese in eine sehr enge existenzielle Beziehung mit den endlichen Primzahlen gebracht, die ich bisher noch nicht gesehen habe'."\n".
                    'und die Anlass zu der Annahme gibt, dass wir diese in Zukunft noch detaillierter formulieren können sollten.'."\n",
                      'Klar ist schon, dass das Raster des Primzahl-Flächenproduktes von \lm{ \s } aufs engste mit den sinnvollen Koeffizienten'."\n".
                    'der Superial-Zahlen \lm{ \mathbb{A}_{\S} } – und, wenn \lm{ \mathbb{A}_{\S} ?= \mathbb{A} }, mit den reell algebraischen Zahlen \lm{ \mathbb{A} } – verwoben sein muss.'."\n".
                    '\color{*Bearb}{(Denn \lm{ a \cdot \s } müssen nach Formel \color{*Bearb}{(In Arbeit …)} ganze Zahl sein, siehe \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvolle Koeffizienten der Superial-Zahlen}.)}'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Ähnlichkeit} \\\\'."\n".
                    'Beide Mengen können wir mit sehr ähnlichen Definitionen beschreiben, an denen wir auch recht schnell erkennen können,'."\n".
                    'dass sie tatsächlich die gleiche Anzahl an Elementen beinhalten müssen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  =  \\\ \qquad *\{  x  *|*  *( \forall z \in \mathbb{Z} *) *( \forall u \in [ 0, 1 [_{\mathbb{A}_{\S}} *)  *[  x = z + u  *]  *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Q-aus-Z}', label_incr => false),
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}_{\N}^{-1}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} n \cdot \s^{-1}  &  \text{ falls } a = 0  \\\\  a + z \cdot \s^{-1}  &  \text{ falls } 0 < a < 1  \\\\  1 + z^{-} \cdot \s^{-1}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  [0, \s[_{\mathbb{S}_{\N}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < 1  \\\\  \s + z^{-}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }',
                                          label_text => 'X', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Auffällig ist, dass bei der Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } zu Beginn und am Ende'."\n".
                    'die ganzen Zahlen in \lm{ \mathbb{N} } und \lm{ \mathbb{Z}^{-} } aufgespalten sind und mitten drinne ganz \lm{ \mathbb{Z} } '."\n".
                    'unendlich oft durchlaufen, jedoch \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} } nur ein Mal durchlaufen wird.'."\n",
                      'Während die ganzen Zahlen \lm{ \mathbb{Z} } bei \lm{ \mathbb{A}_{\S} } nur ein Mal komplett durchlaufen wird'."\n".
                    '\lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} } hingegen unendlich oft.'."\n",
                      'Wenn nun aber beide Mengen die gleiche Anzahl an Elementen, sprich Zahlen, haben, dann stellt sich die Frage,'."\n".
                    'ob und wie wir die Mengen aufeinander abbilden können.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Bedeutung beider Mengen im Stellenwertsystem der Superial-Zahlen} \\\\'."\n".
                    'Die Menge \lm{ \mathbb{A}_{\S} } steht im \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystem}\footnote{\const{SupNum_g_footnote_text_Stellenwertsystem}}'."\n".
                    'für alle sinnvollen Koeffizienten,'."\n".
                    'dann entspricht die Anzahl ihrer Elemente quasi der Anzahl der möglichen Ziffern, nämlich \lm{ \s }.'."\n".
                    'Da macht es natürlich Sinn, dass es genau so viele Ziffern gibt, wie die Basis des Stellenwertsystems, also ebenfalls \lm{ \s }.'."\n".
                    'Dies ist bei anderen Stellenwertsystemen ebenso.'."\n".
                    'Beispielsweise gibt es im Zehnersystem genau zehn Ziffern.'."\n".
                    'Allerdings sind in der Menge \lm{ \mathbb{A}_{\S} } nicht nur natürliche Zahlen, wie bei den „gewöhnlichen“ Stellenwertsystemen,'."\n".
                    'sondern die meisten sind gebrochen und es sind sogar auch die negativen dabei.'."\n",
                      'Gleichzeitig ist die Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } in ihrer Normalform'."\n".
                    '\lm{ \lbrack 0, \s \lbrack_{\mathbb{S}_{\N}} } die Grundlage des Zählens von \lm{ \s } vielen, auch aktual unendlichen natürlichen Zahlen von Null bis ohne \lm{ \s }.'."\n".
                    'Dies entspricht in gewisser Weise ganzen Ziffern des Stellenwertsystems der Superial-Zahlen.'."\n".
                    'Allerdings sind diese natürlichen Superial-Zahlen nicht die Koeffizienten des Stellenwertsystemen,'."\n".
                    'weil nun keine reinen Ziffern, sondern beim Übergang ins Aktual-Unendliche selber schon'."\n".
                    'gemischte Zahlen im Sinne des Stellenwertsystems, wie beispielsweise \lm{ *〈 ⅔ *〉*〈 7 *〉. = ⅔ \s + 7 }.'."\n",
                      'Die sinnvollen Koeffizienten und das natürliche Zählen fallen bei den Superial-Zahlen auseinander und passen gleichzeitig so auch perfekt ineinander.'."\n",
                      'Diese Zwittrigkeit oder Zwitternatur der Anzahl \lm{ \s } in den ihr entsprechenden wichtigen Mengen unseres neuen Stellenwertsystemens,'."\n".
                    'welche keine Widersprüchlichkeit ist, sondern in sich vollständig plausibel, machen es so außergewöhnlich.'."\n".
                    'Dadurch bekommt es die Eigenschaften, die wir für die Beschreibung der Geometrie brauchen, um schließlich auch Differenzialrechnung darin zu betreiben.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Sind beide aufeinander linear abbildbar?} \\\\'."\n".
                    'Naiv können wir einmal annehmen, da die Werte beider Mengen wohl nicht nur wohlgeordnet sind, sondern auch'."\n".
                    'alle die gleichen Abstände untereinander haben, dass sie vielleicht rein durch Verschiebung und einen Faktor'."\n".
                    'Element für Element ihrer Reihenfolge nach aufeinander abgebildet werden können.'."\n".
                    'Weil der Wertebereich von \lm{ \mathbb{A}_{\S} } nun \lm{ 2 ω } mal so groß ist, wie der von \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} },'."\n".
                    'und um die Mitte zentriert, womit wir als Ansatz eine Verschiebung um \lm{ - ½ } annehmen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  ?=  \\\ \qquad *\{  y  *|*  *( \forall n \in [0, 1[_{\mathbb{S}^{-1}_{\N}} *)  *[  y = *( n - \frac{ 1 }{ 2 } *) \cdot 2 ω  *]  *\}  }',
                                          label_text => 'X', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Betrachten wir als erstes die Grenzbereiche dieser versuchten Mengendefinition.'."\n".
                    'Die linksseitige Grenze ist in der Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{S}_{\N}^{-1}} } die Null und wird durch den neuen Definitionsversuch zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  y  =  *( \frac{ 1 }{ 2 } - \frac{ 1 }{ 2 } *) \cdot 2 ω  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  y  =  0 \cdot 2 ω  }',
                                          label_text => 'X', label_incr => false),
                      array( display => 'on',  latex => '{  y  =  0  }',
                                          label_text => 'X', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Der mittlere Wert \lm{ ½ } wird zu Null.'."\n".
                    'Doch Null ist vermutlich nicht der mittlere Wert von \lm{ \mathbb{A}_{\S} }, denn der Mittelpunkt von \lm{ \# \mathbb{Z} } ist \lm{ - ½ }.'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n",
                      'Das Problem scheint'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                    ))),

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
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\N}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} n \cdot \s^{-1}  &  \text{ falls } a = 0  \\\\  a + z \cdot \s^{-1}  &  \text{ falls } 0 < a < 1  \\\\  1 + z^{-} \cdot \s^{-1}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  \;\;  ,  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{In Stellenwert-Notation …}',
                TitleVis => 'In Stellenwert-Notation:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\N}}  =  \\\ \quad *\{  x  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  x  =  \begin{cases} .*〈 n *〉  &  \text{ falls } a = 0  \\\\  *〈 a *〉.*〈 z *〉  &  \text{ falls } 0 < a < 1  \\\\  *〈 1 *〉.*〈 z^{-} *〉  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }'),
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
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\N}}  =  \\\  \quad *\{  \quad\,  0, \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{1}{2} - 2 \s^{-1},\; \tfrac{1}{2} - \s^{-1},\; \tfrac{1}{2},\; \tfrac{1}{2} + \s^{-1},\; \tfrac{1}{2} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{2}{3} - 2 \s^{-1},\; \tfrac{2}{3} - \s^{-1},\; \tfrac{2}{3},\; \tfrac{2}{3} + \s^{-1},\; \tfrac{2}{3} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, 1 - 3 \s^{-1}, 1 - 2 \s^{-1}, 1 - \s^{-1}   \quad *\}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{In Stellenwert-Notation …}',
                TitleVis => 'In Stellenwert-Notation:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\N}}  =  \\\  \quad *\{  \;\;\;\,  .*〈 0 *〉,\; .*〈 1 *〉,\; .*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{1}{2} *〉.*〈 -2 *〉,\; *〈 \tfrac{1}{2} *〉.*〈 -1 *〉,\; \tfrac{1}{2},\; *〈 \tfrac{1}{2} *〉.*〈 1 *〉,\; *〈 \tfrac{1}{2} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{2}{3} *〉.*〈 -2 *〉,\; *〈 \tfrac{2}{3} *〉.*〈 -1 *〉,\; \tfrac{2}{3},\; *〈 \tfrac{2}{3} *〉.*〈 1 *〉,\; *〈 \tfrac{2}{3} *〉.*〈2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, *〈 1 *〉.*〈 -3 *〉,\; *〈 1 *〉.*〈 -2 *〉,\; *〈 1 *〉.*〈 -1 *〉   \quad *\}  }'),
                    ))),

                    ))),

                  array( 'text', array( text => array(
                    'Nun können es aber nur \lm{ \s } Zählschritte der Größe \lm{ \s^{-1} } von Null bis ohne Eins sein, wenn wir \jump{OM:SupNum:Ableitungen-Integrale}{die Ableitungen und das Integral},'."\n".
                    'wie geschehen, über die Superial-Zahlen definieren.'."\n".
                    'Und dazu passend ist es auch offensichtlich, dass \lm{ a } nicht alle \lm{ \s } der Punkte'."\n".
                    '\jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{als Koeffizient adressieren} kann:'."\n",
                      'So können zum Beispiel in der Menge der Superial-Zahlen nicht die Punkte \lm{ \frac{ k }{ 2^{ω} } }'."\n".
                    'der arithmetischen Struktur der Geometrie adressiert werden,'."\n".
                    'weil \lm{ x \in \lbrack 0, 1 \lbrack_{\mathbb{S}^{-1}_{\N}} } diesen Wert wegen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\N}} *) *( \forall k \in \mathbb{N}^{+} *)  *[  x  \neq  \frac{ k }{ 2^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in [0, 1[_{\mathbb{A}_{\S}} *) *( \forall z \in \mathbb{Z} *)  *[  a + z \cdot \s^{-1}  \neq  \frac{ k }{ 2^{ω} }  *]  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  a + \frac{ z }{ \s }  \neq  \frac{ k }{ 2^{ω} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a + \frac{ z }{ 2^{ω} 3^{ω} 5^{ω} 7^{ω} 11^{ω} \cdots }  \neq  \frac{ k }{ 2^{ω} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'nicht annehmen kann.'."\n".
                    'Es kann zwar \lm{ a = 0 } sein, aber \lm{ z } kann nicht die unendlichen Potenzen der Primzahlen, bis auf \lm{ 2^{ω} }, eliminieren.'."\n",
                      'Nach dem Beweis der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung} ist interessanterweise zum Beispiel'."\n".
                    '\lm{ a = \sqrt{2} = \frac{ 2^{\frac{1}{2}} \cdot 2^{ω} }{ 2^{ω} } } adressierbar.'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\N}}  =  \\\  \quad *\{  \quad\,  0, \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{2}}{2} - 2 \s^{-1},\; \tfrac{\sqrt{2}}{2} - \s^{-1},\; \tfrac{\sqrt{2}}{2},\; \tfrac{\sqrt{2}}{2} + \s^{-1},\; \tfrac{\sqrt{2}}{2} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{\sqrt{3}}{2} - 2 \s^{-1},\; \tfrac{\sqrt{3}}{2} - \s^{-1},\; \tfrac{\sqrt{3}}{2},\; \tfrac{\sqrt{3}}{2} + \s^{-1},\; \tfrac{\sqrt{3}}{2} + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, 1 - 3 \s^{-1}, 1 - 2 \s^{-1}, 1 - \s^{-1}   \quad *\}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Eigenschaften:StrukturVonS:X',
                Title => '\small{In Stellenwert-Notation …}',
                TitleVis => 'In Stellenwert-Notation:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, 1[_{\mathbb{S}^{-1}_{\N}}  =  \\\  \quad *\{  \;\;\;\,  .*〈 0 *〉,\; .*〈 1 *〉,\; .*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 -2 *〉,\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 -1 *〉,\; \tfrac{\sqrt{2}}{2},\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 1 *〉,\; *〈 \tfrac{\sqrt{2}}{2} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *〈 \tfrac{\sqrt{3}}{2} *〉.*〈 -2 *〉,\; *〈 \tfrac{\sqrt{3}}{2} *〉.*〈 -1 *〉,\; \tfrac{\sqrt{3}}{2},\; *〈 \tfrac{\sqrt{3}}{2} *〉.*〈 1 *〉,\; *〈 \tfrac{\sqrt{3}}{2} *〉.*〈 2 *〉, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, *〈 1 *〉.*〈 -3 *〉,\; *〈 1 *〉.*〈 -2 *〉,\; *〈 1 *〉.*〈 -1 *〉   \quad *\}  }'),
                    ))),

                    ))),

                  array( 'text', array( text => array(
                    'Welche Koeffizienten adressierbar sind, damit beschäftigen wir uns im Abschnitt'."\n".
                    '\italic{›\jumpname{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}‹}.'."\n".
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
                    '\lm{ \mathbb{A}_{\S} }, wobei letztere Menge \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{teilweise} oder sogar'."\n".
                    '\jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{ganz für die reell algebraischen Zahlen} steht.'."\n".
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
                    'Es ist, als wenn die theoretische Annäherung an die statische \jump{OM:SupNum:Struktur-Geometrie}{arithmetische Struktur der Geometrie}'."\n".
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:s-und-omega-hoch-omega-im-Strukturvergleich', text =>
                      
                'Die superiale Basis \lm{ \s } und die Ordinalzahl \lm{ ω^{ω} } im Strukturvergleich', subline =>
                  'Vom Wert her gleich und doch verschieden')),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    '• \lm{ \mathbb{On} } ist eine echte Klasse\color{*Bearb}{(Verweis)}, während \lm{ \mathbb{S_{\N}} } eine Menge ist.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Betrachten wir die \jump{OM:SupNum:Struktur-Geometrie}{arithmetische Struktur der Geometrie} \lm{ \s } und die Adressierbarkeit ihrer Punkte,'."\n".
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
                    'In der echten Klasse der Ordinalzahlen \lm{ \mathbb{On} } hat das Element \lm{ ω^{ω} } genau so viele Vorgänger, wie sein Wert groß ist,'."\n".
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
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on',  latex => '{  ω^{ω}  =  [ 0, ω^{ω} [_{\mathbb{On}}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  [ 0, \s [_{\mathbb{S}_{\N}}  \neq  [ 0, ω^{ω} [_{\mathbb{On}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der strukturelle Unterschied dieser beiden Anzahl äquivalenten Klassen – beim Vergleich werden die Werte betrachtet –,'."\n".
                    'trotz Wertgleichheit von \lm{ \s } und \lm{ ω^{ω} }, ist sehr bemerkenswert und bedarf einer näheren Untersuchung.'."\n",
                      'Die beiden Mengen sehen konkret folgendermaßen aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ 0, \s [_{\mathbb{S}_{\N}}  =  \\\  \quad *\{  \quad\,  0, 1, 2, \cdots n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{1}{2} \s + z^{-}, \cdots \tfrac{1}{2} \s - 1,\; \tfrac{1}{2} \s,\; \tfrac{1}{2} \s + 1, \cdots \tfrac{1}{2} \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \tfrac{2}{3} \s + z^{-}, \cdots \tfrac{2}{3} \s - 1,\; \tfrac{2}{3} \s,\; \tfrac{2}{3} \s + 1, \cdots \tfrac{2}{3} \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, \s + z^{-}, \cdots \s - 2, \s - 1   \quad *\}  }',
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
                    'Und auch Ausdrücke, wie \lm{ \frac{1}{2} \s } oder \lm{ \frac{2}{3} \s + 1 } können wir in'."\n".
                    '\lm{ \left\lbrack 0, ω^{ω} \right\lbrack_{\mathbb{On}} } nicht finden und benennen.'."\n",
                      'Genauer können wir sagen, außer allen natürlichen Zahlen gibt es keine einzige weitere Zahl,'."\n".
                    'die wir in beiden Mengen explizit angeben können.'."\n".
                    'Aber die Anzahl aller Zahlen, wie gesagt, und sogar ihre Summe, wie wir gleich sehen werden, sind in beiden Mengen gleich.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Summengleichheit trotz der strukturellen Unterschiede} \\\\'."\n".
                    'Mit der \jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}{angepassten Gaußschen Summenformel}\footnote{\const{BiOrd_g_footnote_text_GaussscheSummenformel}},'."\n".
                    'damit auch die Berechnung von Summen unendlich großer Mengen, die kein größtes Element haben, möglich ist,'."\n".
                    'können wir die Summen ganzer Zahlen von Null bis ohne \lm{ \s } oder \lm{ ω^{ω} } berechnen,'."\n".
                    'wenn die Klassen ihrer Vorgänger zur \jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-Klasse-K-unendlich-g}{Klasse \lm{ \mathbb{K}_{\infty,g} } Gauß-Summen äquivalenter Klassen}'."\n".
                    'gehören:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \mathbb{M} \in \mathbb{K}_{\infty,g} *) *( \forall n \in \mathbb{M} *)  *[  \sum_{ \forall i \in [ 0, n [_{\mathbb{M}} } \!\!\!\! i  =  \frac{ n^{2} - n }{ 2 }  *]  }',
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
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\N}} } \!\!\! i  =  \frac{ \s^{2} - \s }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in [ 0, ω^{ω} [_{\mathbb{On}} } \!\!\!\! i  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Richtigkeit der Summe aller natürlichen Superial-Zahlen bis ohne \lm{ \s } besteht schon wegen Formel \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Element-K-unendlich-c-aequival-Element-K-unendlich-g}'."\n".
                    'aufgrund der Tatsache, dass diese Menge zur Klasse \lm{ \mathbb{K}_{\infty,c} } der Anzahläquivalenten Klassen gehört:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\N}} } \!\!\! i  =  \sum_{ \forall i \in [ 0, ω^{ω} [_{\mathbb{On}} } \!\!\!\! i  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und dies, obwohl die Mengen, deren Elemente hier summiert werden, ja recht unterschiedlich sind.'."\n".
                    '\color{*Entwick}{Und genau hier kann die nähere Untersuchung interessant sein.}'."\n",
                      'Wenn wir die Menge \lm{ \left\lbrack 0, \s \right\lbrack_{\mathbb{S}_{\N}} } aller natürlichen Superial-Zahlen'."\n".
                    'bis ohne \lm{ \s } mit \lm{ ω^{ω} } ausdrücken, dann erhalten wir:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wenn wir die Elemente der Menge \lm{ \left\lbrack 0, \s \right\lbrack_{\mathbb{S}_{\N}} }'."\n".
                      'summieren, ergibt sich nach der angepassten Gaußschen Summenformel'."\n".
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
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } \!\! z^{-} + \sum_{ \forall n \in \mathbb{N} } n  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  - ω  =  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } \!\! z^{-} + \frac{ ω^{2} - ω }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } \!\! z^{-}  =  - \frac{ ω^{2} - ω }{ 2 } - ω  }'),
                      array( display => 'on',  latex => '{  \# *( [ 0, 1 [_{\mathbb{A}_{\S}} *)  =  \frac{ \s }{ 2 ω }  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}', label_incr => false),
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
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! *( a \cdot ω^{ω} \cdot 2 ω + *( - ω *) *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! *( a \cdot ω^{ω} \cdot 2 ω - ω *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a \cdot ω^{ω} \cdot 2 ω \;\; - \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a \;\; - \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! ω  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a \;\; - \;\; *( \frac{ \s }{ 2 ω } - 1 *) \cdot ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  ω^{ω} \cdot 2 ω \cdot \!\! \sum_{ \forall a \in ] 0, 1 [_{\mathbb{A}_{\S}} } \!\!\!\! a \;\; - \;\; *( \frac{ ω^{ω} }{ 2 ω } - 1 *) \cdot ω  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Um die noch enthaltene variable Summe zu berechnen, können wir, ohne sie zu verändern, die Null in ihre Basismenge integrieren'."\n".
                      'und sie dann mit Hilfe von Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}'."\n".
                      'berechnen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die letzte Zeile summiert sich dann zu:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } *( ω^{ω} + z^{-} *)  =  \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } ω^{ω} \; + \! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } \!\! z^{-}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \!\! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } *( ω^{ω} + z^{-} *)  =  ω^{ω} \cdot ω \; + \! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } \!\! z^{-}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \!\! \sum_{ \forall z^{-} \in \mathbb{Z}^{-} } *( ω^{ω} + z^{-} *)  =  ω^{ω} \cdot ω + *( - \frac{ ω^{2} - ω }{ 2 } - ω *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wenn wir alle drei Summen nun addieren'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\N}} } \!\!\! i  =  \frac{ ω^{2} - ω }{ 2 } \\\ \qquad\qquad\quad\;\; + \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 } - *( ω^{ω} \cdot ω - ω *) \\\ \qquad\qquad\quad\;\; + ω^{ω} \cdot ω + \! *( - \frac{ ω^{2} - ω }{ 2 } - ω *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \!\! \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\N}} } \!\!\! i  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 } - ω^{ω} \cdot ω + ω \\\ \qquad\qquad\qquad\qquad\;\; + ω^{ω} \cdot ω - ω  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \!\! \sum_{ \forall i \in [ 0, \s [_{\mathbb{S}_{\N}} } \!\!\! i  =  \frac{ *( ω^{ω} *)^{2} - ω^{ω} }{ 2 }  }'),
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
                    ''))),
                      
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
                      '\color{*Bearb}{Gleichzeitig sehen wir, dass die Koeffizienten von \lm{ \s } in einer Fraktalebene \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{den Nullstellen von Polynomen entsprechen},'."\n".
                    'also mit elliptischen Kurven\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:ElliptischeKurve:2024}.} und abschließend mit algebraischen Kurven\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:AlgebraischeKurve:2023}.}'."\n".
                    'vollständig dargestellt werden können.}'."\n".
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
                    'siehe Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}.'."\n",
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
