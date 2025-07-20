<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Formale-Entwicklung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Fragen}',
                    '• Wenn wir von algebraischer Zahlen sprechen, dann handelt es sich nicht um die, die durch Radikale darstellbar sind!',
                    '– Ich habe gelesen, dass nicht alle algebraischen Zahlen mit Wurzeln darstellbar sind: \quote{Im Rahmen der Galoistheorie werden diese Zwischenkörper untersucht, um so tiefe Einblicke über die Lösbarkeit oder Nichtlösbarkeit von Gleichungen zu erhalten. Ein Resultat der Galoistheorie ist, dass zwar jede komplexe Zahl, die man aus rationalen Zahlen durch Verwendung der Grundrechenarten (Addition, Subtraktion, Multiplikation und Division) sowie durch Ziehen n-ter Wurzeln (n eine natürliche Zahl) erhalten kann (man nennt solche Zahlen „durch Radikale darstellbar“), algebraisch ist, umgekehrt aber algebraische Zahlen existieren, die man nicht in dieser Weise darstellen kann; alle diese Zahlen sind Nullstellen von Polynomen mindestens 5. Grades.}\footnote{\const{SupNum_g_footnote_text_TranszendenteZahlEigenschaften}} Möglicherweise handelt es sich „nur“ um (Polynom-)Radikale: Vgl. \url{https://de.wikipedia.org/w/index.php?title=Radikal_(Mathematik)&oldid=213475890#Auflösung_eines_Polynoms_durch_Radikale}.',
                    '– Dann stünde ansonsten der Beweis aus, dass alle reell algebraischen Zahlen Faktoren von \lm{ \s } sind, die ganze Zahlen ergeben. Dazu würden dann unter anderem auch elliptische Integrale zur Lösung Polynome 5. Grades gehören: Vgl. \url{https://www.spektrum.de/lexikon/mathematik/elliptisches-integral/4494} und \url{https://www.spektrum.de/wissen/charles-hermite-1822-1901/1171317}.',
                    '• Wenn nun alle Koeffizienten der algebraischen Zahlen Faktoren von \lm{ \s } sind, die ganze Zahlen ergeben:',
                    '– Werden diese dann beim Zählen der ganzen Superial-Zahlen mitgezählt oder nur die rationalen Koeffizienten? Ich denke, sie werden mitgezählt.',
                    '– Anders gefragt: gibt es dann immer noch \lm{ \frac{ \s }{ 2 \cdot ω } } rationale Zahlen im Intervall zwischen Null und ausschließlich Eins, oder müssen wir das korrigieren?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Zur Frage, welche Koeffizienten innerhalb der Superial-Zahlen sinnvoll sind, gibt es mindestens zwei Ausgangspunkte und Perspektiven,'."\n".
                    'die scheinbar auf das selbe Ergebnis hinauslaufen:'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:X', text =>
                      
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
                    'auch eine ganze Zahl sein, weil wir sonst insgesamt keine ganze Zahl erhalten.'."\n".
                    'Denn auf eine ganze Zahl müssen wir immer eine ganze Zahl addieren, damit wieder eine ganze Zahl herauskommt.'."\n",
                      'Dazu stellen wir fest, das schon einmal jede rationale Zahl im Produkt mit \lm{ \s } aufgrund seiner Primzahlstruktur'."\n".
                    '\jump{OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s}{immer eine ganze Zahl ergibt}.'."\n".
                    'Auch im Produkt mit allen durch Radikale, also Wurzeln, darstellbaren reell algebraischen Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}},'."\n".
                    'wie wir nachfolgend gleich zeigen werden, ergeben sich immer ganze Superial-Zahlen.'."\n".
                    'Ob dies, wie von mir vermutet, wirklich für \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{alle reell algebraischen Zahlen}'."\n".
                    'gilt, bleibt hingegen erst einmal noch offen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Perspektive-Stellenwertsystems-Superial-Zahlen', text =>
                      
                'Perspektive des Stellenwertsystems der Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Zum anderen können wir erwarten, dass die sinnvollen Koeffizienten der Superial-Zahlen, wie in jedem anderen Stellenwertsystem,'."\n".
                    'grundsätzlich keine Überträge in niedrigere oder höhere Stellen erzeugen.'."\n".
                    'Wobei sie gleichzeitig aber so fein granuliert und von einer Größe sind, dass sie die ihnen zugedachte Stelle'."\n".
                    'maximal ausfüllen.'."\n",
                      'Demnach sind im Grunde folgende Bedingungen zu erfüllen, damit eine Zahl \lm{ a } ein sinnvoller Koeffizient der Superial-Zahlen sein kann:'."\n",
                      'Das Produkt der sinnvollen Koeffizienten \lm{ a } mit der superialen Basis \lm{ \s }, also \lm{ a \cdot \s }, darf nicht dazu führen, dass sich die aktual unendliche Größenordnung verändert,'."\n".
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
                    'Es darf sich eben bei \lm{ a \cdot \s } keine endliche oder aktual unendliche Größenordnung des Stellenwertsystems verändern,'."\n".
                    'außer die Stelle mit der Potenz Eins von \lm{ \s }.'."\n".
                    'Das heißt, dass \lm{ a } keine aktual unendlich kleinen Summanden enthalten darf.'."\n".
                    'Das Produkt \lm{ a \cdot \s } muss eben wirklich eine ganze rein aktual unendlich große Zahl sein.'."\n".
                    'Das bedeutet, sie muss \jump{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}{ohne ihre Nachkommastellen, welcher Art auch immer, die gleiche Zahl}'."\n".
                    'bleiben, wie in Formel \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-N-unendlich} definiert.'."\n".
                    'Denn nur dann lässt sich das Zählen bis ins aktual unendliche und darüber hinaus definieren.'."\n",
                      'In unserem Fall ist die ganze Zahl \lm{ a \cdot \s } dann natürlich von der aktual unendlichen Größenordnung von \lm{ \s }, ohne endlichen Summanden.'."\n",
                      'Wie können wir nun dafür sorgen, dass die von uns gewählten Elemente aus \lm{ \mathbb{R} } nicht nur im Rahmen endlicher Größe sind,'."\n".
                    'was sie schon erfüllen, wie eben gezeigt, sondern auch keine unendlich kleinen Summanden enthalten?'."\n".
                    'Dazu können wir die neue \jump{OM:SupNum:Formale-Entwicklung:Formalien:Stellenwertsystem:Berechnung-Stellen}{Unendlichkeits-Gaußklammer}'."\n".
                    'benutzen, die alle aktual unendlich kleinen Summanden aus einer Zahl entfernt.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Es existiere also die Menge'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \exists \mathbb{A}_{\S}\!: *( \forall a \in \mathbb{R}\!:  {\left\lfloor a \right\rfloor}_{\infty} \cdot \s \in \mathbb{N}_{\infty}  \Rightarrow  {\left\lfloor a \right\rfloor}_{\infty} \in \mathbb{A}_{\S} *)  }',
                                          label_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-exist-As', label_text => '\name{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-exist-As}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'der sinnvollen Koeffizienten der Superial-Zahlen.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Diese Definition erfüllt die genannten Bedingungen an die sinnvollen Koeffizienten der Superial-Zahlen.'."\n",
                      'Stellt sich also die Frage:'."\n".
                    'Welche uns bekannte Menge entspricht \lm{ \mathbb{A}_{\S} } dann?'."\n".
                    'Wie wir sehen werden, ist diese Frage nicht so schnell ganz genau zu beantworten.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:X', text =>
                      
                'Entsprechen die sinnvollen Koeffizienten allen reellen Zahlen?', subline =>
                  '\lm{ \mathbb{A}_{\S} ?= \mathbb{R} } ist eine Frage der Transzendenz und der Ganzzahligkeit im Produkt mit der superialen Basis \lm{ \s }')),
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
                    'Alle reellen Zahlen, die nicht transzendent sind, sind reell algebraische Zahlen.'."\n".
                    'Dann stellt sich die Frage, ob wirklich alle reell algebraischen Zahlen im Produkt mit der superialen Basis \lm{ \s }'."\n".
                    'ganze Zahlen sind.'."\n",
                      'Bezüglich der rationalen Zahlen\footnote{\const{SupNum_g_footnote_text_RationaleZahl}}, die ja ein Teil'."\n".
                    'der reell algebraischen Zahlen sind, ist es offensichtlich,'."\n".
                    'dass sie \jump{OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s}{im Produkt mit \lm{ \s } ganze Zahlen sind}.'."\n".
                    'Wie diese \jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Superial-Zahlen \lm{ \mathbb{S}_{\N} }} aussehen,'."\n".
                    'zeigen wir in der \jump{OM:SupNum:Formale-Entwicklung}{formalen Entwicklung}.'."\n".
                    'Ein Produkt unserer superialen Basis \lm{ \s } mit jeder endlichen positiven rationalen Zahl'."\n".
                    '\lm{ q^{+} } ist also eine \jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-N-unendlich}{aktual unendliche natürliche Zahl aus \lm{ \mathbb{N}_{\infty} }};'."\n".
                    'und dann auch eine \jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürliche Superial-Zahl} aus \lm{ \mathbb{S}_{\N} },'."\n".
                    'wie oben bereits gesagt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall q^{+} \in \mathbb{Q}^{+} *)  *[  q^{+} \cdot \s  \in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall q^{+} \in \mathbb{Q}^{+} *)  *[  q^{+} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Bleibt die Frage …'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:X', text =>
                      
                'Sind die sinnvollen Koeffizienten alle reell algebraischen Zahlen?', subline =>
                  '\lm{ \mathbb{A}_{\S} ?= \mathbb{A}_{\R} } ist eine Frage der Nullstellen von Polynomen beliebigen Grades')),
                  array( 'text', array( text => array(
                    'Die algebraischen Zahlen sind ja dadurch definiert, das sie die Menge aller Lösungen der Nullstellen von Polynomen darstellen.'."\n".
                    'Wir betrachten hier aber keine komplexen Lösungen mit Imaginäranteilen, sondern nur'."\n".
                    'die realwertigen Koeffizienten der Komponenten ihrer komplexen Lösungen, die reell algebraische Zahlen genannt werden.'."\n",
                      'Ich vermute, diese reell algebraischen Zahlen \lm{ \mathbb{A}_{\R} }'."\n".
                    'sind alle als Koeffizienten der superialen Basis \lm{ \s } aktual unendlich große natürliche Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a^{+} \in \mathbb{A}_{\R}^{+} *)  *[  a^{+} \cdot \s  ?\in  \mathbb{N}_{\infty}  *]  }',
                                          label_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-Realanteile-algebra-Zahlen-mal-s-verm-in-natuerl-infinit-Zahlen', label_text => '\name{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-Realanteile-algebra-Zahlen-mal-s-verm-in-natuerl-infinit-Zahlen}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a^{+} \in \mathbb{A}_{\R}^{+} *)  *[  a^{+} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }',
                                          label_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-Realanteile-algebra-Zahlen-mal-s-verm-in-natuerl-SupZahlen', label_text => '\name{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-Realanteile-algebra-Zahlen-mal-s-verm-in-natuerl-SupZahlen}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  \mathbb{A}_{\S}  ?=  \mathbb{A}_{\R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das wird in meiner \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{Vermutung, dass die sinnvollen superiale Koeffizienten alle reell algebraische Zahlen} untersucht.'."\n",
                      'Wie gesagt, algebraische Zahlen sind alle möglichen Nullstellen von Polynomen beliebigen Grades.'."\n".
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Durch-Radikale-darstellbare-algebraischen-Zahlen-sinnvolle-Koeffizienten-SZ', text =>
                      
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
                  '\condb{\anchor{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Wurzel-aus-Zwei-und-natuerliche-Superial-Zahlen}{}Die Wurzel aus Zwei und die natürlichen Superial-Zahlen} \\\\'."\n".
                    'Wir erkennen im Speziellen, dass wir den Faktor \lm{ 2^{ω} } im Primzahl-Flächenprodukt von \lm{ \s } finden,'."\n".
                    'der aus der zweiten Wurzel aus Zwei \lm{ *| \sqrt[2]{ 2 } |* = 2^{\frac{1}{2}} } eine aktual unendlich große ganze Zahl macht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }} \cdot 2^{ω}  \in  \mathbb{N}_{\infty}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-mal-2-hoch-omega-element-N-infinity}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{ω + \frac{ 1 }{ 2 }}  \in  \mathbb{N}_{\infty}  \;\; ,  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-2-hoch-omega+einhalb-element-N-infinity}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'wobei \lm{ ω } ein transfiniter Wert ist und nach unseren Axiomen gilt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall q \in \mathbb{Q} \setminus *\{ 0 *\} *)  *[  ω + q  :\neq  ω  *]  \;\; .  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-omega-plus-q-ungleich-omega}', label_incr => false),
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
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Wurzel-Zwei-mal-Zwei-hoch-omega-durch-Zwei-hoch-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{ω + \frac{ 1 }{ 2 }} }{ 2^{ω} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Zwei-hoch-omega-plus-Einhalb-durch-Zwei-hoch-omega}', label_incr => false),
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
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-mal-n-hoch-eins-durch-x-in-natuerlich-infinit}', label_incr => false),
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
                      array( display => 'on',  latex => '{  \Rightarrow  *| \sqrt[x]{ n } |*  =  n^{\frac{ 1 }{ x }}  =  \frac{ n^{\frac{ 1 }{ x }} \cdot \rad(n)^{ω} }{ \rad(n)^{ω} }  }',
                                          label_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-xte-Wurzel-n-gleich-xte-Wurzel-n-mal-rad-n-hoch-omega-durch-rad-n-hoch-omega', label_text => '\name{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-xte-Wurzel-n-gleich-xte-Wurzel-n-mal-rad-n-hoch-omega-durch-rad-n-hoch-omega}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{1}{x}} \cdot \s  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit sind alle durch Radikale darstellbaren algebraischen Zahlen sinnvolle Koeffizienten der Superial-Zahlen:'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{1}{x}} \cdot \s  :\in  \mathbb{S}_{\N}  }',
                                          label_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-xte-Wurzel-n-mal-s-ist-in-SN', label_text => '\name{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-xte-Wurzel-n-mal-s-ist-in-SN}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Dies ist sehr bemerkenswert und stößt eine neue Tür für das Verständnis von irrationalen Zahlen und für'."\n".
                    'die Nützlichkeit der Superial-Zahlen auf.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:X', text =>
                      
                'Alle algebraischen Zahlen auf Grundlage von Kombinationen von radikalen algebraischen Zahlen durch Grundrechenarten sowie deren ganze Potenzen sind sinnvolle Koeffizienten der Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wir werden nachfolgen zeigen, dass tatsächlich alle Kombinationen von radikalen algebraischen Zahlen mit den Grundrechenarten und'."\n".
                    'ganzer Potenzen im Produkt mit der superialen Basis \lm{ \s } aktual unendlich große ganze Zahlen und damit'."\n".
                    'sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Kehrwerte-der-Wurzeln}{}Die Kehrwerte der Wurzeln} \\\\'."\n".
                    'Als erstes betrachten wir die Kehrwerte der Wurzeln oder anders ausgedrückt,'."\n".
                    'die negativen Wurzeln.'."\n".
                    'Dazu gucken wir uns diese jetzt näher an.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei es erlaubt, dass in der \lm{ x }-te Wurzel aus \lm{ n } die Wurzel \lm{ x } eine negative Zahl,'."\n".
                      'aber nicht Null ist'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, x \in \mathbb{N}^{+} *) *( n, x \geq 2 *)  *[  n^{- \frac{ 1 }{ x }}  =  \frac{ n^{- \frac{ 1 }{ x }} \cdot \rad(n)^{ω} }{ \rad(n)^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ x }}  =  \frac{ \rad(n)^{ω} }{ n^{\frac{ 1 }{ x }} \cdot \rad(n)^{ω} }  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
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

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei die uns bekannte wahre Aussage, dass die'."\n".
                      'Quadratwurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } eine ganze Zahl ist'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N}^{+} *) *( n \geq 2 *)  *[  n^{\frac{ 1 }{ 2 }} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unser Ansatz, so gelangen wir durch die erlaubte Division von \lm{ \s } durch \lm{ n },'."\n".
                      'die den Wahrheitsgehalt der Aussage nicht verändert, und deren Umformung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ n }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ 2 } - 1} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ 2 }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu der Aussage, dass auch der Kehrwert der Quadratwurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } eine ganze Zahl sein muss,'."\n".
                      'was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Nun verallgemeinern wir auf die generelle Aussage, mit dem Kehrwert der \lm{ x }-ten Wurzel'."\n".
                    'aus einer endlichen natürlichen Zahl \lm{ n } größer gleich Zwei.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei die uns bekannte wahre Aussage, dass die'."\n".
                      '\lm{ x }-te Wurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } eine ganze Zahl ist'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, x \in \mathbb{N}^{+} *) *( n, x \geq 2 *)  *[  n^{\frac{ 1 }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unser Ansatz, so gelangen wir durch die erlaubte Division von \lm{ \s } durch \lm{ n }'."\n".
                      'und durch einen Faktor, der eine erlaubte Potenz der \lm{ x }-ten Wurzel aus \lm{ n } ist,'."\n".
                      'wie wir im \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Ganzzahlige-Potenzen-der-Wurzeln}{folgenden Abschnitt} hergeleitet haben,'."\n".
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
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu der Aussage, dass auch der Kehrwert der \lm{ x }-ten Wurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } eine ganze Zahl sein muss,'."\n".
                      'was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Über erlaubte Operationen, die die Ganzzahligkeit unseres Ansatzes erhalten, erreichen wir also'."\n".
                    'die gesuchte Aussage, dass auch die Kehrwerte der \lm{ x }-ten Wurzeln aus \lm{ n } natürliche Superial-Zahlen sind.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Ganzzahlige-Potenzen-der-Wurzeln}{}Ganzzahlige Potenzen der Wurzeln und ihrer Kehrwerte} \\\\'."\n".
                    'Können wir auch für die ganzzahligen Potenzen der Wurzeln und ihrer Kehrwerte bestätigen,'."\n".
                    'dass ihre Produkte mit der superialen Basis \lm{ \s } natürliche Superial-Zahlen sind.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei die ganzzahlige Potenz einer Wurzel oder ihres Kehrwerts im Produkt mit der superialen Basis'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, k \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\quad  *[  *( n^{\frac{ 1 }{ y }} *)^{k} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'eine natürliche Superial-Zahl, dann können wir dies umformen zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ k }{ y }} \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( n^{k} *)^{\frac{ 1 }{ y }} \cdot \s  ?\in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wobei wir sehen, dass wegen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{k} \in \mathbb{N}^{+} \setminus *\{ 1 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'die neue Basis einfach nur ein anderer natürlicher Radikand \lm{ n^{k} } der Wurzel ist,'."\n".
                      'so dass unsere anfängliche Aussage'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n, k \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\qquad\quad\;\;\;  *[  *( n^{\frac{ 1 }{ y }} *)^{k} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
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

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei das Produkt zweier Wurzel beziehungsweise ihres Kehrwerts im Produkt mit der superialen Basis'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\,  *[  n^{\frac{ 1 }{ y }} \cdot n^{\frac{ 1 }{ z }} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'eine natürliche Superial-Zahl, dann können wir dies umformen zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ z }{ y \cdot z }} \cdot n^{\frac{ y }{ y \cdot z }} \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ y + z }{ y \cdot z }} \cdot \s  ?\in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wobei wir sehen, dass wegen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ y \cdot z }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und weil wir im \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Ganzzahlige-Potenzen-der-Wurzeln}{vorherigen Abschnitt}'."\n".
                      'geklärt haben, dass ganzzahlige Potenzen der Wurzeln und ihrer Kehrwerte im Produkt'."\n".
                      'mit der superialen Basis natürliche Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( n^{\frac{ 1 }{ y \cdot z }} *)^{y + z} \cdot \s  \in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'so ist auch'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\qquad\;\;\;\,  *[  n^{\frac{ 1 }{ y }} \cdot n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
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

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei das Produkt zweier Wurzel beziehungsweise ihres Kehrwerts mit unterschiedlicher Basis im Produkt mit der superialen Basis'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, m \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( n \neq m *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\qquad\qquad\,  *[  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'eine natürliche Superial-Zahl, dann'."\n".
                      'helfen uns die Einsichten aus dem Abschnitt \italic{\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Durch-Radikale-darstellbare-algebraischen-Zahlen-sinnvolle-Koeffizienten-SZ}}.'."\n".
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
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'also ergibt sich für unser Produkt'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }}  =  p_{1}^{\frac{ k_{n,1} }{ y } + \frac{ k_{m,1} }{ z }} \cdot p_{2}^{\frac{ k_{n,2} }{ y } + \frac{ k_{m,2} }{ z }} \\\ \qquad\qquad\qquad\quad\;\;\; \cdot p_{3}^{\frac{ k_{n,3} }{ y } + \frac{ k_{m,3} }{ z }} \cdot p_{4}^{\frac{ k_{n,4} }{ y } + \frac{ k_{m,4} }{ z }} \cdot \cdots  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }}  =  p_{1}^{\frac{ k_{n,1} \cdot z }{ y \cdot z } + \frac{ k_{m,1} \cdot y }{ z \cdot y }} \cdot p_{2}^{\frac{ k_{n,2} \cdot z }{ y \cdot z } + \frac{ k_{m,2} \cdot y }{ z \cdot y }} \\\ \qquad\qquad\qquad\quad\;\;\; \cdot p_{3}^{\frac{ k_{n,3} \cdot z }{ y \cdot z } + \frac{ k_{m,3} \cdot y }{ z \cdot y }} \cdot p_{4}^{\frac{ k_{n,4} \cdot z }{ y \cdot z } + \frac{ k_{m,4} \cdot y }{ z \cdot y }} \cdot \cdots  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }}  =  p_{1}^{\frac{ k_{n,1} \cdot z + k_{m,1} \cdot y }{ y \cdot z }} \cdot p_{2}^{\frac{ k_{n,2} \cdot z + k_{m,2} \cdot y }{ y \cdot z }} \\\ \qquad\qquad\qquad\quad\;\;\; \cdot p_{3}^{\frac{ k_{n,3} \cdot z + k_{m,3} \cdot y }{ y \cdot z }} \cdot p_{4}^{\frac{ k_{n,4} \cdot z + k_{m,4} \cdot y }{ y \cdot z }} \cdot \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }}  =  *( p_{1}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,1} \cdot z + k_{m,1} \cdot y} \cdot *( p_{2}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,2} \cdot z + k_{m,2} \cdot y} \\\ \qquad\qquad\qquad\quad\;\;\; \cdot *( p_{3}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,3} \cdot z + k_{m,3} \cdot y} \cdot *( p_{4}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,4} \cdot z + k_{m,4} \cdot y} \cdot \cdots  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und wir sehen, dass alle Potenzen rationale Zahlen sind, in Nenner und Zähler also ganze Zahlen haben,'."\n".
                      'was ganzzahligen Potenzen ganzzahliger Wurzeln, oder deren Kehrwerten, entspricht.'."\n".
                      'Wir \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Ganzzahlige-Potenzen-der-Wurzeln}{wissen bereits},'."\n".
                      'dass solche Faktoren von \lm{ \s } in endlicher Anzahl natürliche Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( p_{1}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,1} \cdot z + k_{m,1} \cdot y} \cdot *( p_{2}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,2} \cdot z + k_{m,2} \cdot y} \cdot *( p_{3}^{\frac{ 1 }{ y \cdot z }} *)^{k_{n,3} \cdot z + k_{m,3} \cdot y} \cdot \cdots \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\qquad\quad\;\; \cdot \s  \in  \mathbb{S}_{\N}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und damit erkennen wir, unsere Ausgangsannahme'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n, m \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\qquad\quad\;\;\;\,  *[  n^{\frac{ 1 }{ y }} \cdot m^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'muss wahr sein.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir brauchen uns also um die Produkte der Wurzeln mit unterschidlicher Basis, oder ihrer Kehrwerten, nicht zu sorgen.'."\n".
                    'Sie sind auch im Produkt mit der superialen Basis \lm{ \s } natürliche Superial-Zahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Summe einer Wurzel, oder ihres Kehrwerts, mit einer endlichen ganzen Zahlen} \\\\'."\n".
                    'Wir müssen nun noch untersuchen, ob auch Summen von irrationalen Wurzeln, oder ihren Kehrwerten,'."\n".
                    'mit endlichen ganzen Zahlen, die auch zu den irrationalen algebraischen Koeffizienten gehören,'."\n".
                    'als Produkt mit unserer superialen Basis \lm{ \s } ganze beziehungsweise natürliche Superial-Zahlen sind.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Nehmen wir an, dass die irrationale Wurzel, oder ihr Kehrwerten, in einer Summe mit der endlichen ganzen Zahl \lm{ z }'."\n".
                      'zusammen im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N}^{+} *) *( n \geq 2 *) *( \forall y \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) *( \forall z \in \mathbb{Z} *)  \\\ \qquad\qquad *( n^{\frac{ 1 }{ y }} + z \ge 0 *)  *[  *( n^{\frac{ 1 }{ y }} + z *) \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Ausmultiplizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot \s + z \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Da beide Summanden aktual unendlich große natürliche oder ganze Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ y }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  z \cdot \s  \in  \mathbb{S}_{\Z}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und die Summe zweier ganzer Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }} \cdot \s + z \cdot \s  \in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unter den obigen Bedingungen, immer eine natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Die Summen von irrationalen Wurzeln, oder ihren Kehrwerten sind also ebenfalls sinnvolle Koeffizienten der Superial-Zahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Goldener-Schnitt}{}Auch der Goldene Schnitt \lm{ φ } ist eine Superial-Zahl} \\\\'."\n".
                    'So sind dann auch algebraische Zahlen wie der Goldene Schnitt \lm{ φ }'."\n".
                    'als Faktoren der superialen Basis \lm{ \s } natürliche Superial-Zahlen.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Nehmen wir an, dass der irrationale Goldene Schnitt \lm{ φ } im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  φ \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'mit dem Wert seiner Definition'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  φ  =  \frac{ *| \sqrt{ 5 } \,|* + 1 }{ 2 }  }',
                                          label_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-goldener-Schnitt', label_text => '\name{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-goldener-Schnitt}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Einsetzen, Umstellen und Ausmultiplizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ *| \sqrt{ 5 } \,|* + 1 }{ 2 } \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *( 5^{\frac{ 1 }{ 2 }} + 1 *) \cdot \frac{ \s }{ 2 }  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  5^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ 2 } + \frac{ \s }{ 2 }  ?\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Da beide Summanden aktual unendlich große natürliche Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  5^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ 2 }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \frac{ \s }{ 2 }  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und die Summe zweier natürlicher Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  5^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ 2 } + \frac{ \s }{ 2 }  \in  \mathbb{S}_{\N}  }',
                                          label_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-goldener-Schnitt-mal-s-in-SN', label_text => '\name{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-goldener-Schnitt-mal-s-in-SN}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ 5^{\frac{ 1 }{ 2 }} \cdot \s + \s }{ 2 }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  φ \cdot \s  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'auch immer eine aktual unendlich große natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir fahren fort, weitere Varianten der reell algebraischen Zahlen auf die Ganzzahligkeit unter Faktorisierung mit \lm{ \s } zu überprüfen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Summen-von-Wurzeln}{}Summen und Differenzen von Wurzeln} \\\\'."\n".
                    'Ganz ähnlich verhält es sich mit Summen von zwei oder mehr Wurzeln.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Nehmen wir an, dass eine Summe aus zwei irrationalen Wurzeln, oder ihrer jeweiligen Kehrwerte, im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, m \in \mathbb{N}^{+} *) *( n, m \geq 2 *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *)  \\\ \qquad\quad *( n^{\frac{ 1 }{ y }} + n^{\frac{ 1 }{ z }} \ge 0 *)  *[  *( n^{\frac{ 1 }{ y }} + n^{\frac{ 1 }{ z }} *) \cdot \s  ?\in  \mathbb{S}_{N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Ausmultiplizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot \s + n^{\frac{ 1 }{ z }} \cdot \s  ?\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Da beide Summanden ganze Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ y }} \cdot \s  \in  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{Z}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und die Summe zweier ganzer Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }} \cdot \s + n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unter den obigen Bedingungen, immer eine natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'So sind dann alle algebraischen Zahlen, die durch Kombinationen arithmetischer Operationen von Radikalen – Wurzelausdrücken –,'."\n".
                    'oder deren Kehrwerte, inklusive ganzzahliger Potenzen, dargestellt werden können, natürliche Superial-Zahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Geschachtelte Wurzeln mit Summen} \\\\'."\n".
                    '\color{*Bearb}{(Dies ist bisher kein Beweis, sondern eine Analyse, welche Eigenschaften dafür gebraucht werden.)}'."\n",
                      'Reell algebraische Zahlen ergeben sich auch aus geschachtelten Wurzeln, die Summen enthalten.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Nehmen wir an, dass eine geschachtelte Wurzel, die eine Summe enthält, im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *[  *( n^{\frac{ 1 }{ z }} + a_{s} *)^{\frac{ 1 }{ y }} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu den natürlichen Superial-Zahlen gehört.'."\n",
                        'Die ganzen Zahlen \lm{ n^{\frac{ 1 }{ z }} \cdot \s^{y} } und \lm{ a_{s} \cdot \s^{y} } sind demnach durch den Faktor \lm{ \s^{y} } so groß,'."\n".
                      'dass sogar aus deren Summe immer die \lm{ y }-te Wurzel gezogen werden kann, so, dass sich immer eine ganze Zahl ergibt, was im Endlichen im Regelfall nicht so ist.'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  *[  *( *( n^{\frac{ 1 }{ z }} + a_{s} *) \cdot \s^{y} *)^{\frac{ 1 }{ y }}  ?\in  \mathbb{S}_{\N}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *[  *( n^{\frac{ 1 }{ z }} \cdot \s^{y} + a_{s} \cdot \s^{y} *)^{\frac{ 1 }{ y }}  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Wie können wir die dahinter stehenden Rechenregeln genauer verstehen?'."\n",
                        'Meine Annahme wäre zunächst, dass es durch die unendlichen Potenzen der Primzahlen der endlichen Faktoren kommt:'."\n".
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *[  *( n^{\frac{ 1 }{ z }} \cdot *( \rad(n)^{ω} *)^{y} + a_{s} \cdot *( \rad*( a_{s} *)^{ω} *)^{y} *)^{\frac{ 1 }{ y }}  ?\in  \mathbb{N}_{\infty}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Wir versuchen es mal mit folgenden Zahlen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *[  *( 2^{\frac{ 1 }{ 2 }} \cdot *( 2^{ω} *)^{y} + 45 \cdot *( *( 3 \cdot 5 *)^{ω} *)^{y} *)^{\frac{ 1 }{ y }}  ?\in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *[  *( 2^{\frac{ 1 }{ 2 }} \cdot 2^{y \cdot ω} + 3^{2} \cdot 3^{y \cdot ω} \cdot 5^{1} \cdot 5^{y \cdot ω} *)^{\frac{ 1 }{ y }}  ?\in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *[  *( 2^{y \cdot ω + \frac{ 1 }{ 2 }} + 3^{y \cdot ω + 2} \cdot 5^{y \cdot ω + 1} *)^{\frac{ 1 }{ y }}  ?\in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *[  *( 2^{y \cdot *( ω + \frac{ 1 }{ 2 y } *)} + 3^{y \cdot *( ω + \frac{ 2 }{ y } *)} \cdot 5^{y \cdot *( ω + \frac{ 1 }{ y } *)} *)^{\frac{ 1 }{ y }}  ?\in  \mathbb{N}_{\infty}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Pythagoreische Tripel im Endlichen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a, b, c  \in  \mathbb{N}^{+}  }'),
                      array( display => 'on',  latex => '{  a^{2} + b^{2}  =  c^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c  =  *| \sqrt{ a^{2} + b^{2} } \,|*  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c  =  *( a^{2} + b^{2} *)^{\frac{ 1 }{ 2 }}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Pythagoreische Tripel im Superialen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \forall a, b, c  \in  \mathbb{A}_{\S}^{+}  }'),
                      array( display => 'on',  latex => '{  \forall a \s, b \s, c \s  \in  \mathbb{S}_{\N}^{+}  }'),
                      array( display => 'on',  latex => '{  a^{2} + b^{2}  =  c^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c  =  *| \sqrt{ a^{2} + b^{2} } \,|*  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c  =  *( a^{2} + b^{2} *)^{\frac{ 1 }{ 2 }}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'In dem Moment, wo wir es ins Superiale skalieren'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  c \cdot \s  =  *( a^{2} + b^{2} *)^{\frac{ 1 }{ 2 }} \cdot \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c \cdot \s  =  *( *( a^{2} + b^{2} *) \cdot \s^{2} *)^{\frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c \cdot \s  =  *( a^{2} \cdot \s^{2} + b^{2} \cdot \s^{2} *)^{\frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c \cdot \s  =  *( *( a \cdot \s *)^{2} + *( b \cdot \s *)^{2} *)^{\frac{ 1 }{ 2 }}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'würden die superialen pythagoreischen Tripel \lm{ a \s }, \lm{ b \s } und \lm{ c \s } für alle reell algebraischen Zahlen'."\n".
                      '\lm{ a }, \lm{ b } und \lm{ c } ganz bleiben.'."\n",
                        'Dies wäre in sich völlig stimmig.'."\n".
                      'Demnach bedürfte es dem Ins-Aktual-Unendliche-Gehen, um dort kontinuierliche Tripel zu bekommen, die dann aber doch diskret sind.'."\n",
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Großer Fermatscher Satz im Endlichen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \nexists a, b, c \in \mathbb{N}^{+} *) *( 2 < n \in \mathbb{N}^{+} *)  *[  a^{n} + b^{n}  =  c^{n}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c  =  *| \sqrt[n]{ a^{n} + b^{n} } \,|*  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c  =  *( a^{n} + b^{n} *)^{\frac{ 1 }{ n }}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Fermatsche Tripel im Superialen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \forall a, b, c  \in  \mathbb{A}_{\S}^{+}  }'),
                      array( display => 'on',  latex => '{  \forall a \s, b \s, c \s  \in  \mathbb{S}_{\N}^{+}  }'),
                      array( display => 'on',  latex => '{  *( \forall a, b, c \in \mathbb{N}^{+} *) *( n \in \mathbb{N}°{+} *)  *[  a^{n} + b^{n}  =  c^{n}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c  =  *| \sqrt[n]{ a^{n} + b^{n} } \,|*  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c  =  *( a^{n} + b^{n} *)^{\frac{ 1 }{ n }}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'In dem Moment, wo wir es ins Superiale skalieren'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  c \cdot \s  =  *( a^{n} + b^{n} *)^{\frac{ 1 }{ n }} \cdot \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c \cdot \s  =  *( *( a^{n} + b^{n} *) \cdot \s^{n} *)^{\frac{ 1 }{ n }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c \cdot \s  =  *( a^{n} \cdot \s^{n} + b^{n} \cdot \s^{n} *)^{\frac{ 1 }{ n }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c \cdot \s  =  *( *( a \cdot \s *)^{n} + *( b \cdot \s *)^{n} *)^{\frac{ 1 }{ n }}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'würden die superialen Fermatschen Tripel \lm{ a \s }, \lm{ b \s } und \lm{ c \s } für alle reell algebraischen Zahlen'."\n".
                      '\lm{ a }, \lm{ b } und \lm{ c } ganz bleiben.'."\n",
                        'Dies wäre in sich völlig stimmig.'."\n".
                      'Demnach bedürfte es dem Ins-Aktual-Unendliche-Gehen, um dort kontinuierliche Tripel zu bekommen, die dann aber doch diskret sind.'."\n",
                        '\color{*Bearb}{(In Arbeit …)}'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
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
                  '\condb{\anchor{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:superiale-Koeffizienten-Realanteile-algebraischer-Zahlen}{}Vermutung, dass superiale Koeffizienten reell algebraische Zahlen sind} \\\\'."\n".
                    'Für den Rest der reell algebraischen Zahlen scheint es nicht simpel zu sein zu zeigen, dass sie ebenfalls'."\n".
                    'sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n",
                      'Wegen der Abgeschlossenheit der algebraischen Zahlen\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:AlgebraischeZahl:2022}, Eigenschaften.}'."\n".
                    'und der \jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{Erkenntnisse zur transzendenten Zahl \lm{ \e_{\s} }},'."\n".
                    'die offensichtlich superiale aktual unendlich kleine Summanden enthält, sowie meiner Vermutung,'."\n".
                    'dass dies auch für alle anderen transzendenten Zahlen gilt, vermute ich, dass wirklich genau alle'."\n".
                    'reell algebraischen Zahlen \lm{ \mathbb{A}_{\R} }, nicht weniger, aber auch nicht mehr, sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n".
                    'Denn die Linie, die die algebraischen Zahlen von den transzendenten trennt, ist im Grunde die gleiche,'."\n".
                    'die die einzelnen fraktalen Ebenen der Superial-Zahlen trennt.'."\n",
                      'Genau das ist meine \italic{›\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung}‹},'."\n".
                    'also, dass Formel \jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-Realanteile-algebra-Zahlen-mal-s-verm-in-natuerl-SupZahlen}'."\n".
                    'stimmt.'."\n".
                    'Das wäre schon ziemlich erfreulich und cool.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ableitungen-Integrale'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • X  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:X',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                  '\color{*Bearb}{(In Arbeit …)}'."\n".
                  ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:X', text =>
                      
                '\color{*Bearb}{(In Arbeit …)}', subline =>
                  '')),
                  array( 'text', array( text => array(
                  '\color{*Bearb}{(In Arbeit …)}'."\n".
                  ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ'),
                    )),
              )
          ); */ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
