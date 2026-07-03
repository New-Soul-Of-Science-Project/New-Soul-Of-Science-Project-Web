<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:ZFC-Modellkonstruktion'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Primzahlprodukt-Vermutung'); ?>

	
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
                      
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Einleitung und konzeptioneller Rahmen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Nachdem über das generative Primzahl-Induktions-Lemma in unserem \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Beweis der Primzahlprodukt-Vermutung}'."\n".
                    'der strikt deduktive Nachweis für die Identität'."\n".
                    'des von-Neumann-Ordinals\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}}'."\n".
                    'mit dem unendlichen Primzahlprodukt aller endlichen Primzahlen \lm{ ω = ω\overline{\#} } innerhalb der ZFC-Mengenlehre erbracht wurde,'."\n".
                    'widmet sich diese Seite der expliziten mathematischen Modellierung dieses Resultats zu einem vollständig fundierten transfiniten Zahlensystem.'."\n".
                    'Ziel ist die Konstruktion eines normierten, transfiniten Stellenwertsystems für die Analysis,'."\n".
                    'in dem transfinite divisatorische Eigenschaften ohne algebraische Widersprüche operieren.'."\n",
                      'Als Trägerstruktur für diese Fundierung nutzen wir den geordneten Körper'."\n".
                    'der formalen Hahn-Reihen \lm{ \mathbb{A}_{\R}\!*(*( \s^{\mathbb{Z}} *)*) } über den reell algebraischen Zahlen.'."\n".
                    'Im Zentrum dieser Konstruktion steht die Einführung der superialen Basis \lm{ \s },'."\n".
                    'welche als das transfinite Primzahl-Flächenprodukt definiert ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  ω^{ω}  }',
                                          label_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega', label_text => '\name{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)^{ω}  }',
                                          label_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega', label_text => '\name{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot \cdots *)^{ω}  }'),
                      array( display => 'on',  latex => '{  \mathbb{N}   :=  \mathbb{N}_{0}  }',
                                               label_text => '\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-Def-N-enthaelt-Null}', label_incr => false),
                      array( display => 'on',  latex => '{  ω   =  \mathbb{N}  =  \overline{\#}\mathbb{N}  }',
                                               label_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-omega-ist-Anzahl-in-N', label_text => '\name{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-omega-ist-Anzahl-in-N}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Dieses Matrix-Objekt speichert jede endliche Primzahl in aktual unendlicher Potenz.'."\n".
                    'Für die zugehörige Familie der verallgemeinerten \lm{ p }-adischen Bewertungen \lm{ v_{p} }'."\n".
                    'gilt folglich für alle \lm{ p \in \mathbb{P} } per Konstruktion des Modells:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *)  *[  v_{p}*( \s *)  =  ω  *]  }',
                                          label_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-p-Bewertung-von-s-gleich-omega', label_text => '\name{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-p-Bewertung-von-s-gleich-omega}', label_incr => true),
                    ))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Die arithmetische Bruchlinie: Algebraisch vs. Transzendent', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die fundamentale Besonderheit des Superial-Zahlensystems offenbart sich in seiner Eigenschaft'."\n".
                    'als normiertes Stellenwertsystem der transfiniten Analysis.'."\n".
                    'Durch die Kopplung der Hahn-Reihe an die algebraische Struktur der reellen Zahlen entsteht'."\n".
                    'eine messerscharfe arithmetische Trennung:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\bold{1 Reell algebraische Koeffizienten \lm{ a \in \mathbb{A}_{\R} \setminus \{ 0 \} }:} \\\\'."\n".
                    'Im Einklang mit der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung}'."\n".
                    'ergeben alle reell algebraischen Zahlen (ohne die Null)'."\n".
                    'im Produkt mit der \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{superialen Einheit \lm{ \s } glatte, ganzzahlige, aktual unendliche infinite Zahlen}.'."\n".
                    'Sie besitzen im System \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{nach unserer bewiesenen Algebraische-Koeffizienten-Vermutung (AKV)} keine Nachkommastellen, da sie strukturell frei von infinitesimalen Resten sind.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\bold{2. Transzendente Koeffizienten (wie \lm{ π_{\s}, \e_{\s}) }:} \\\\'."\n".
                    'Transzendente Zahlen brechen diese Ganzzahligkeit im Unendlichen auf.'."\n".
                    'Im Produkt mit \lm{ \s } tragen sie immer unendlich feine, infinitesimale Summanden \lm{ \s^{-1} } mit sich.'."\n".
                    'Sie besitzen im superialen Stellenwertsystem echte, unendliche Nachkommastellen \jump{OM:SupNum:Superiale-Transzendenz-Vermutung}{(STV)}.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Die infinitesimale Pfad-Erhaltung in der Integralrechnung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'In der klassischen Analysis wird ein Integral als Grenzwert von Riemann-Summen definiert'."\n".
                    '\lm{ \lim \sum f(x)\Delta x }, wobei der exakte Pfad zum Grenzwert im Limes ausgelöscht wird.'."\n".
                    'Das Superial-Modell transformiert die Analysis, indem es \lm{ \s } als normierte infinite Einheit'."\n".
                    'und \lm{ \s^{-1} } als absolut normiertes Infinitesimal etabliert.'."\n",
                      'Integrale werden im Modell als aktual unendliche Summen über eine exakte,'."\n".
                    'unendlich große Anzahl von normiert infinitesimalen Summanden \lm{ \s^{-1} } abgebildet.'."\n".
                    'Der unendlich kleine Rest, der in der Standard-Analysis verschwindet,'."\n".
                    'bleibt im Superial-Zahlensystem als präziser Rechen- und Grenzwert-Pfad im System erhalten'."\n".
                    'und mathematisch vollkommen verrechenbar.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Konservative Erweiterung und strukturelle Stabilität', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die mathematische Konsistenz dieses Modells – insbesondere bei Divisionen transfinit gewichteter Ausdrücke'."\n".
                    'durch endliche natürliche Zahlen – wird direkt durch das Haupttheorem der Primzahlprodukt-Vermutung garantiert.'."\n".
                    'Da bewiesen wurde, dass der dichte Anfangsabschnitt des unendlichen Primturm-Potenzrasters exakt'."\n".
                    'der Ordinalzahl \lm{ ω } entspricht – \lm{ \lpr*( ω\overline{\#} *) = ω } –,'."\n".
                    'bleiben die arithmetischen Operationen im transfiniten Bereich vollständig wohldefiniert, stabil und widerspruchsfrei.'."\n",
                      'Alle klassischen, endlichen Zahlenmengen – von den natürlichen, ganzen, geraden/ungeraden'."\n".
                    'und rationalen Zahlen bis hin zu den Primzahlen – werden auf natürliche Weise unter Erhalt'."\n".
                    'ihrer tiefen arithmetischen und divisatorischen Feinstrukturen ins Aktual-Unendliche erweitert.'."\n",
                      'Dieses Modell liefert somit den formalen Beweis, dass die Struktur der Superial-Zahlen eine vollkommen zulässige,'."\n".
                    'widerspruchsfreie und konservative Erweiterung innerhalb'."\n".
                    'der Standard-Axiome der Zermelo-Fraenkel-Mengenlehre mit Auswahlaxiom (ZFC)\footnote{\const{BiOrd_g_footnote_text_ZermeloFraenkelMengenlehre}}'."\n".
                    'darstellt. \lm{ \blacksquare }'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Die formale Einbettung der Wertegruppe', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um die hier dargelegten analytischen und divisatorischen Eigenschaften'."\n".
                    '– insbesondere die exakte Erhaltung von infinitesimalen Pfaden bei Ableitungen und Integralen'."\n".
                    'sowie die Ganzzahligkeit reell algebraischer Ausdrücke – mathematisch streng zu operationalisieren,'."\n".
                    'nutzen wir das Fundament des Hahn-Reihen-Körpers.'."\n".
                    'Die historische formale Unsicherheit, ob ein unendliches Primzahlprodukt innerhalb von ZFC'."\n".
                    'eine unzulässige echte Klasse bildet, wird durch das Haupttheorem der Primzahlprodukt-Vermutung'."\n".
                    'vollständig aufgelöst.'."\n".
                    'Da das dichte, lückenlose Primturm-Potenzraster des Produkts alles endlichen Primzahlen die Mächtigkeit von \lm{ ω } besitzt,'."\n".
                    'ist die Basis \lm{ \s } keine bedeutungsfreie Variable,'."\n".
                    'sondern ein wohldefiniertes mengentheoretisches Objekt im von Neumannschen Universum.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Der Beweis der Primzahlprodukt-Vermutung und seine Bedeutung für die Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Der strikt deduktive Nachweis der Primzahlprodukt-Vermutung und'."\n".
                    'ihre Etablierung der Identität \lm{ ω = ω\overline{\#} } über das generative Primzahl-Induktions-Lemma'."\n".
                    'bilden das tragende Fundament für die Funktionalität dieser ZFC-Modellkonstruktion.'."\n".
                    'Durch dieses Haupttheorem der Primzahlprodukt-Vermutung wird die mathematische Struktur'."\n".
                    'des Hahn-Reihen-Körpers direkt an die ordinale Kernstruktur der Mengenlehre gekoppelt.'."\n",
                      'Das bewiesene Theorem entfaltet seine theoretische und praktische Wirkung im Modell'."\n".
                    'über drei fundamentale Säulen:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\bold{1. Rigorose Ableitung aus den ZFC-Standardaxiomen} \\\\'."\n".
                    'Da bewiesen ist, dass der dichte, lückenlose Anfangsabschnitt des unendlichen Primturm-Potenzrasters'."\n".
                    'exakt die Mächtigkeit der Ordinalzahl \lm{ ω } ausfüllt \lm{ \lpr*( ω\overline{\#} *) = ω },'."\n".
                    'entspringt die gesamte arithmetische Struktur des Modells direkt und widerspruchsfrei aus den Standard-Axiomen von ZFC.'."\n".
                    'Das Modell bildet eine bewiesene, tief in der von Neumannschen Mengenlehre verankerte Realität ab,'."\n".
                    'in der das unendliche Produkt aller Primzahlen dieselbe ordinale Rolle einnimmt'."\n".
                    'wie die Menge der natürlichen Zahlen selbst.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\bold{2. Algebraische Absicherung der transfiniten p-adischen Bewertung} \\\\'."\n".
                    'Für das unendliche Flächenprodukt \lm{ \s = ω^{ω} } gilt im Modell für jede endliche Primzahl'."\n".
                    'die exakte transfinite Bewertung \lm{ v_{p}( \s ) = ω }.'."\n".
                    'Dass diese unendlich tiefen Primzahltürme bei Divisionen durch endliche natürliche Zahlen'."\n".
                    'algebraisch stabil bleiben, wird durch das Haupttheorem mathematisch garantiert.'."\n".
                    'Weil das dichte Erzeugungsspektrum des Primorials ununterbrochen mit der ordinalen Nachfolger-Struktur'."\n".
                    'von \lm{ ω } übereinstimmt, steht für jede divisionelle Operation im Modell ein lückenloser,'."\n".
                    'wohldefinierter Rechenraum bereit.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\bold{3. Fundierung des superialen Stellenwertsystems} \\\\'."\n".
                    'Erst die Identität \lm{ ω = ω\overline{\#} } begründet die exakten metrischen Eigenschaften'."\n".
                    'der Basis \lm{ \s } als normierte finite Einheit und \lm{ \s^{-1} } als absolutes Infinitesimal für'."\n".
                    'die transfinite Analysis.'."\n".
                    'Sie liefert die mathematische Erklärung dafür, dass reell algebraische Koeffizienten'."\n".
                    'im Produkt mit \lm{ \s } strukturell glatte, unendliche Ganzzahlen ohne Nachkommastellen bilden,'."\n".
                    'während transzendente Zahlen zwingend infinitesimale Reste erzeugen.'."\n".
                    'Der Beweis der Vermutung sichert somit die präzise arithmetische Feinstruktur,'."\n".
                    'mit der alle klassischen Zahlenmengen im Modell widerspruchsfrei ins Aktual-Unendliche erweitert werden.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Hahn-Reihe-Ausweg', text =>
                      
                'Die Hahn-Reihe als transfinites Stellenwertsystem', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um die exakte arithmetische Wirkung des unendlichen Primzahl-Flächenprodukts strukturell zu kapseln,'."\n".
                    'nutzen wir die mathematische Präzision von verallgemeinerten \lm{ p }-adischen Bewertungen innerhalb'."\n".
                    'des Hahn-Reihen-Körpers.\footnote{\const{SupNum_g_footnote_text_HahnSeries}}'."\n".
                    'Die Aussage, dass die superiale Basis \lm{ \s } jede endliche Primzahl \lm{ p }'."\n".
                    'in einer aktual unendlichen Dimension der Exponentenlänge \lm{ ω } enthält,'."\n".
                    'wird im Modell über eine Familie wohldefinierter Abbildungen rigoros verankert.'."\n",
                      'Für das fundamentale Flächenprodukt des Modells gilt für jede endliche Primzahl \lm{ q } zwingend:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *)  *[  v_{p}*( \s *)  =  ω  *]  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-p-Bewertung-von-s-gleich-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dieses transfinite Objekt repräsentiert eine strikt positive, unendlich große Größe im geordneten System'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  >  0  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'wobei die superiale Basis \lm{ \s } der von Neumannschen Ordinalzahlpotenzierung entspricht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  ω^{ω}  =  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Auf diese Weise wird das aktual unendliche Produkt im Modell als ein mathematisch exakt handhabbares'."\n".
                    'Monom mit präzise definierten algebraischen Eigenschaften verortet.'."\n".
                    'Daraus ergibt sich die Definition der Menge der Superial-Zahlen \lm{ \mathbb{S} } zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  :=  \mathbb{A}_{\R}\!*(*( \s^{\Gamma} *)*)  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'wobei die Wertegruppe \lm{ \Gamma } durch die Menge der ganzen Zahlen definiert ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Gamma  :=  \mathbb{Z}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Im Ergebnis erhalten wir den vollkommen konsistenten transfiniten Zahlkörper:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  :=  \mathbb{A}_{\R}\!*(*( \s^{\mathbb{Z}} *)*)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'wobei \lm{ \mathbb{A}_{\R} } das reell algebraische Koeffizientenfeld repräsentiert und \lm{ \mathbb{Z} }'."\n".
                    'die geordnete abelsche Wertegruppe mit ihrer üblichen Ordnung darstellt.'."\n".
                    'Ausformuliert ergibt sich der Trägerraum der Superial-Zahlen als die Menge aller formalen Reihen über der Wertegruppe \lm{ \mathbb{Z} } mit wohlgeordnetem Support:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  =  *\{  f = \sum_{k \in \mathbb{Z}}\!a_k \cdot \s^{k}  *|*  a_k \in \mathbb{A}_{\R},\; \underbrace{ \operatorname{supp} f := *\{ k *|* a_k \neq 0 *\} }_{\text{ist reverse-wohlgeordnet}}  \\\ \qquad\qquad\qquad\qquad\qquad\;\;\,  \;\land\; \underbrace{\exists n \in \mathbb{Z}:\; \operatorname{supp} f \subseteq \; ] \! -\!\infty, n ]}_{\text{oben endlich}}  *\}  }'),
                    ))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Die Superial-Struktur \lm{ \mathfrak{S} } als geordneter bewerteter Körper', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Menge der Superial-Zahlen \lm{ \mathbb{S} } bildet unter den kanonischen Operationen'."\n".
                    'der komponentenweisen Addition und der Faltungsmultiplikation einen algebraischen Körper.'."\n".
                    'Um diesen Raum als funktionales mathematisches System im ZFC-Rahmen zu verankern,'."\n".
                    'definieren wir die arithmetische Gesamtstruktur \lm{ \mathfrak{S} } über das folgende geordnete Tupel:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathfrak{S}  :=  *〈 \mathbb{S}, +, \cdot, 0, 1, \leq, \operatorname{ord}_{\s} , *( v_{p} *)_{p \in \mathbb{P}} *〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die mathematische Konsistenz dieses Körpers wird durch die perfekt ineinandergreifenden'."\n".
                    'Bewertungs- und Ordnungsstrukturen getragen, die direkt aus der Logik des transfiniten Stellenwertsystems hervorgehen:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\bold{1. Die Schichtbewertung \lm{ \operatorname{ord}_{\s} }} \\\\'."\n".
                    'Die Abbildung \lm{ \operatorname{ord}_{\s}\!\!: \mathbb{S} \setminus *\{ 0 *\} \to \mathbb{Z} } ordnet jeder Superial-Zahl'."\n".
                    '\lm{ x \neq 0 } den bestimmenden Index (den maximalen Exponenten) ihres mathematischen Supports zu.'."\n".
                    'In der Praxis misst diese Bewertung die höchste besetzte Dimension der superialen Zahl'."\n".
                    'und fungiert als exakter Indikator für den Stellenwert:'."\n".
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        'Ein Wert von \lm{ \operatorname{ord}_{\s}(x) > 0 } kennzeichnet einen aktual unendlichen (infiniten) Anteil.'."\n".
                          'Für die superiale Basis gilt per Konstruktion: \lm{ \operatorname{ord}_{\s}( \s ) = 1 }.',
                        'Ein Wert von \lm{ \operatorname{ord}_{\s}(x) < 0 } beschreibt einen rein infinitesimalen Rest im Nachkommabereich.'."\n".
                          'Für das Basis-Infinitesimal gilt entsprechend: \lm{ \operatorname{ord}_{\s}*( \s^{-1} *) = -1 }.',
                    ))),

                  array( 'text', array( text => array(
                    '\bold{2. Die totale lexikographische Ordnung \lm{ \leq }} \\\\'."\n".
                    'Die Relation \lm{ \leq } definiert eine lineare, totale Ordnung auf dem Körper \lm{ \mathfrak{S} }.'."\n".
                    'Der Vergleich zweier unterschiedlicher superialer Zahlen erfolgt strikt über das Vorzeichen des Koeffizienten'."\n".
                    'an der jeweils höchsten gemeinsamen Schicht (Stelle).'."\n".
                    'Für zwei Reihen \lm{ x, y \in \mathbb{S} } gilt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x < y  \;\;\;\iff\;\;\;  0 < (y - x)_{\operatorname{ord}_{\s}(y - x)}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dieses Ordnungsprinzip entspricht exakt dem klassischen Vergleich in einem Stellenwertsystem.'."\n".
                    'Es garantiert, dass die reell algebraischen Koeffizienten \lm{ \mathbb{A}_{\R} } die Richtung'."\n".
                    'des unendlichen Ausdrucks dominieren.'."\n".
                    'Ein infinitesimaler Abweichungsrest auf einer niedrigeren Stelle kann die fundamentale Ordnung auf einer höheren,'."\n".
                    'infiniten Schicht zu keinem Zeitpunkt verfälschen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\bold{3. Die Familie der \lm{ p }-adischen Schichtbewertungen \lm{ v_{p} }} \\\\'."\n".
                    'Das entscheidende Alleinstellungsmerkmal der Superial-Struktur \lm{ \mathfrak{S} } ist'."\n".
                    'die Familie der verallgemeinerten \lm{ p }-adischen Bewertungen für jede endliche Primzahl \lm{ p \in \mathbb{P} }.'."\n".
                    'Da über den Beweis der Primzahlprodukt-Vermutung die Identität \lm{ ω = ω\overline{\#} } gilt,'."\n".
                    'operiert diese Familie auf jeder einzelnen mathematischen Schicht des Modells.'."\n".
                    'Sie stellt sicher, dass die divisatorische Feinstruktur aller erweiterten Zahlenmengen'."\n".
                    '(wie die Parität oder unendliche Primfaktorzerlegungen\footnote{\const{SupNum_g_footnote_text_Primfaktorzerlegung}}) über das gesamte transfinite Spektrum hinweg'."\n".
                    'absolut invariant und widerspruchsfrei erhalten bleibt.'."\n".
                    ''))),
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
                    'Die Frage, welchen Anzahl-Begriff die Theorie der Superial-Zahlen benötigt,'."\n".
                    'ergibt sich unmittelbar aus ihrer Natur als transfinites Stellenwertsystem.'."\n".
                    'Aus den Erkenntnissen zur inneren \jump{OM:SupNum:Eigenschaften:StrukturVonS:WasLernenUeberGroesseOmegaUndStrukturS}{Struktur von \lm{ \s }} als Primzahl-Flächenprodukt folgt,'."\n".
                    'dass die Erzeugungsanzahl der mathematisch sinnvollen Koeffizienten im Intervall \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\R}} }'."\n".
                    'nicht mehr bloß über die klassische kardinale Mächtigkeit\footnote{\const{SupNum_g_footnote_text_Maechtigkeit}} erfasst werden kann.'."\n",
                      'Für dieses Kontinuum gilt im superialen System der feste Wert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \overline{\#} [ 0, 1 [_{\mathbb{A}_{\R}}  =  \frac{ \s }{ 2 ω }  =  \frac{ 1 }{ 2 }ω^{ω - 1}  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dies beschreibt eine transfinite Zahl weit jenseits der einfachen Ordinalzahl \lm{ ω }.'."\n".
                    'Die klassische Mengenlehre stellt im Kontrast dazu fest:'."\n".
                    '\lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\R}} } ist abzählbar unendlich, also gleichmächtig zur Menge der natürlichen Zahlen \lm{ \mathbb{N} }.'."\n".
                    'Beide Aussagen sind wahr und widersprechen sich nicht, da sie fundamental verschiedene Eigenschaften messen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\bold{Die kardinale Mächtigkeit}  rein strukturell: Lässt sich das Intervall bijektiv auf \lm{ \mathbb{N} } abbilden? – Ja.',
                        '\bold{Die Erzeugungsanzahl} fragt analytisch: Wie viele diskrete Erzeugungspositionen belegt das Intervall relativ zur Maßeinheit der vollständigen Induktion \lm{ ω }? Die Antwort lautet exakt: \lm{ \frac{ \s }{ 2 ω } = \frac{ 1 }{ 2 }ω^{ω - 1} }.',
                    ))),
                  array( 'text', array( text => array(
                    'Genau für diese ordinale Gewichtung der Zahlendichte nutzen wir den Begriff der \italic{Erzeugungsanzahl} \lm{ \overline{\#}_{\mathrm{erz}} }.'."\n".
                    'Sie verknüpft den kardinalen Verteilungsaspekt mit der ordinalen Feinstruktur der unendlichen Basis.'."\n".
                    'Da über das Haupttheorem der Primzahlprodukt-Vermutung die Identität \lm{ ω = ω\overline{\#} } bewiesen ist,'."\n".
                    'steht diese relative Berechnung auf einem felsenfesten algebraischen Fundament:'."\n".
                    'Selbst bei der zweidimensionalen Dichte des Flächenprodukts \lm{ \s = ω^{ω} }'."\n".
                    'bleibt das Verhältnis der Erzeugungsschichten präzise bestimmbar, stabil und mathematisch vollständig wohldefiniert.'."\n",
                      'Die formale Definition – operativ und axiomatisch – sowie Beispiele finden sich im Abschnitt \italic{›\jumpname{OM:SupNum:Algebraische-Grundlagen:Erzeugungsanzahl}‹}'."\n".
                    'der Seite \italic{›\jumpname{OM:SupNum:Algebraische-Grundlagen}‹}.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Primfaktorzerlegung von \lm{ \s }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Aus der Definition des Superial-Körpers \lm{ \mathbb{S} } als Hahn-Reihe über der Wertegruppe \lm{ \mathbb{Z} }'."\n".
                    'folgt unmittelbar, dass transfiniten Ordinalzahlen wie \lm{ ω } oder unendliche Primzahlpotenzen wie \lm{ p^{ω} }'."\n".
                    'keine direkten Elemente des Trägerraums oder des eingebetteten Superial-Rings sein können.'."\n".
                    'Diese Objekte existieren kategorial als Indizes innerhalb der übergeordneten Bewertungstheorie des Systems.'."\n",
                      'Dennoch besitzt die superiale Basis s eine exakt definierte, unendliche Teilbarkeitsstruktur.'."\n".
                    'Für jede endliche Potenz \lm{ n } einer beliebigen endlichen Primzahl \lm{ p } gilt im System die klassische Teilbarkeit:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *( \forall n \in \mathbb{N} *) *[  p^{n}  \mid  \s  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Da über das Haupttheorem der Primzahlprodukt-Vermutung die Identität \lm{ ω = ω\overline{\#} } verankert ist,'."\n".
                    'lässt sich diese Teilbarkeit ins Aktual-Unendliche fortsetzen.'."\n".
                    'Die exakte, aktual unendliche Primfaktorzerlegung der Basis \lm{ \s } wird im ZFC-Modell vollständig'."\n".
                    'über die Familie der verallgemeinerten \lm{ p }-adischen Bewertungen operationalisiert.'."\n".
                    'Es gilt die exakte divisionelle Struktur:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *[  v_{p}(\s)  =  ω  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das bedeutet:'."\n".
                    'Das Flächenprodukt \lm{ \s } wird von jeder endlichen Primzahl \lm{ p } exakt \lm{ ω }-oft geteilt.'."\n".
                    'Höhere transfinite Schichten oder unzulässige Reste treten auf dieser fundamentalen Ebene nicht auf.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:Tiefere-Betrachtung-Potenzen-s', text =>
                      
                'Tiefere Betrachtung der Potenzen von \lm{ \s }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Jeder einzelne Summand einer wohlgeformten Superial-Zahl im Stellenwertsystem,'."\n".
                    'bestehend aus seinem reell algebraischen Koeffizienten \lm{ a_{k} }'."\n".
                    'und einer endlichen ganzen Potenz \lm{ k } der Basis \lm{ \s }, besitzt eine präzise messbare \lm{ p }-adische Gesamtbewertung:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a_{k} \in \mathbb{A}_{\R} *) *( \forall p \in \mathbb{P} *) *[  v_{p}*( a_{k} \cdot s^{k} *)  =  k \cdot ω + v_{p}*( a_{k} *)  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Da die transfinite Ordnung \lm{ ω } jeden reell algebraischen Bewertungsteil \lm{ v_{p}*( a_{k} *) } dominant überwiegt,'."\n".
                    'bleibt die hierarchische Feinstruktur bei allen algebraischen Operationen perfekt separiert.'."\n".
                    'Für alle Potenzen \lm{ k \geq 1 } ergeben sich im unendlichen Bereich ausnahmslos rein positive Primzahlpotenzen,'."\n".
                    'da die strukturelle Schranke streng kontrolliert wird:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *( \forall k \in \operatorname{supp}*( f *) *) \\\ \qquad\quad\; *[  v_{p}*( a_{k} *)  \in  \mathbb{Q}  \;\;\;\implies\;\;\;  \\\ \qquad\quad\;\;\; (k - 1) \cdot ω  <  k \cdot ω + v_{p}*( a_{k} *)  <  (k + 1) \cdot ω  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hierbei repräsentiert \lm{ v_{p}*( a_{k} *) } die fortgesetzte rationale Bewertung des Koeffizienten.'."\n".
                    'Aus dieser Ungleichung folgt die fundamentale Eigenschaft unseres geordneten Körpers:'."\n".
                    'Die einzelnen Schichten der Hahn-Reihe können sich niemals gegenseitig verfälschen oder ineinanderfließen.'."\n".
                    'Die unendliche Dimension \lm{ k \cdot ω } dominiert die Arithmetik der Koeffizienten vollständig.'."\n".
                    'Ausdrücke der Form \lm{ k \cdot ω \pm \frac{ z }{ n } } bilden im Modell ein stabiles, rechenbares Gefüge,'."\n".
                    'das sich streng nach den klassischen Gesetzen der Algebra verhält,'."\n".
                    'ohne die zahlentheoretische Feinstruktur der Primzahltürme im Unendlichen zu gefährden.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Primfaktorzerlegung der natürlichen Superial-Zahlen \lm{ \mathbb{S}_{\N} }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Menge der natürlichen Superial-Zahlen \lm{ \mathbb{S}_{\N} } lässt sich im Modell in eindeutige,'."\n".
                    'irreduzible Faktoren zerlegen.'."\n".
                    'Da die algebraische Struktur über die Familie der verallgemeinerten'."\n".
                    '\lm{ p }-adischen Bewertungen \lm{ (v_{p})_{p \in \mathbb{P}} } kontrolliert wird,'."\n".
                    'verhält sich diese transfinite Faktorisierung vollkommen analog zur klassischen Zahlentheorie.'."\n".
                    'Jede natürliche Superial-Zahl besitzt eine eindeutige Darstellung als Produkt aus endlichen Primzahlen'."\n".
                    'und transfiniten Basis-Monomon, wodurch die algebraische Integrität des Systems über'."\n".
                    'das gesamte aktual unendliche Spektrum hinweg gewahrt bleibt,'."\n".
                    'wie im Abschnitt zur \jump{OM:SupNum:Algebraische-Grundlagen:PrimSZ}{Primfaktorzerlegung natürlicher Superial-Zahlen} explizit gezeigt wird.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Durch die Hahn-Reihe erhalten wir alle nötigen Eigenschaften', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Das Ziel einer konsistenten, ZFC-konformen Definition der Superial-Zahlen ist damit vollständig erreicht.'."\n".
                    'Das über den Hahn-Reihen-Körper konstruierte transfinite Stellenwertsystem garantiert'."\n".
                    'die lückenlose Gültigkeit aller für die Analysis notwendigen arithmetischen Operationen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\bold{Addition:} Erfolgt strikt koeffizientenweise über dem reell algebraischen Feld.',
                        '\bold{Multiplikation:} Wird über das mathematisch wohldefinierte Cauchy-Produkt\footnote{\const{SupNum_g_footnote_text_CauchyProduktformel}} operationalisiert,'."\n".
                          'wobei die Wohlordnung des Supports die Konvergenz der Koeffizientensummen sichert.',
                        '\bold{Lexikographische Ordnung:}\footnote{\const{SupNum_g_footnote_text_LexikographischeOrdnung}}'."\n".
                          'Definiert eine \jump{OM:SupNum:Algebraische-Grundlagen:SIstGeordneterKoerper}{totale lineare Ordnung},'."\n".
                          'bei welcher der Koeffizientenvergleich an der jeweils höchsten unendlichen Stelle entscheidet.'."\n".
                          'Dies sichert die Eigenschaft von \lm{ \s } als aktual unendliche Einheit \lm{ \s > n }'."\n".
                          'für alle \lm{ n \in \mathbb{N} } und \lm{ \s^{-1} } als absolut normiertes Infinitesimal.',
                        '\bold{Feldaxiome:} Das System erfüllt ausnahmslos alle strukturellen Bedingungen'."\n".
                          'eines geordneten mathematischen Körpers.',
                        '\bold{Division:} Ist über das Herausziehen des dominanten Terms und die formale Reiheninversion'."\n".
                          '(analog zur algebraischen Polynomdivision\footnote{\const{SupNum_g_footnote_text_Primpolynom}}) widerspruchsfrei durchführbar.',
                        '\bold{Strukturelle Fortsetzung:} Ermöglicht die natürliche Einbettung und Erweiterung klassischer Zahlenmengen'."\n".
                          '(wie \jump{OM:SupNum:Algebraische-Grundlagen:NatuerlicheSZ}{natürliche}, \jump{OM:SupNum:Algebraische-Grundlagen:GanzeSZ}{ganze}, gerade/ungerade und rationale Zahlen) ins Aktual-Unendliche.',
                        '\bold{Teilbarkeit und Primstruktur:} Sichert die exakte mathematische Handhabung von \jump{OM:SupNum:Algebraische-Grundlagen:PrimSZ}{unendlichen Primfaktorzerlegungen}'."\n".
                          'über das gesamte transfinite Spektrum.',
                    ))),
                  array( 'text', array( text => array(
                    'Das sind alle grundlegenden Eigenschaften, die wir für ein transfinites Zahlensystem der Superial-Analysis brauchen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Zusammenfassung und Übertragung der geklärten Eigenschaften', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die ZFC-Modellkonstruktion führt das transfinite Primzahl-Flächenprodukt aus der Ebene'."\n".
                    'der bloßen mathematischen Intuition in den Rang einer streng bewiesenen, formalen Theorie über.'."\n".
                    'Durch die Kopplung der Hahn-Reihen-Definition an'."\n".
                    'das Haupttheorem der Primzahlprodukt-Vermutung \lm{ ω = ω\overline{\#} } wird nachgewiesen,'."\n".
                    'dass unendlich viele Faktoren im Modell mengentheoretisch rigoros über wohlgeordnete Supports'."\n".
                    'und verallgemeinerte \lm{ p }-adische Bewertungen\footnote{\const{SupNum_g_footnote_text_PadischeBewertung}} ausgedrückt werden können.'."\n",
                      'Da alle beteiligten mathematischen Objekte innerhalb des von Neumannschen Universums'."\n".
                    'echte Mengen bleiben und zu keinem Zeitpunkt unzulässige echte Klassen bilden,'."\n".
                    'ist die vollständige ZFC-Konformität des Systems garantiert.'."\n",
                      'Die Hahn-Reihe bildet somit die fundamentale arithmetische Basis,'."\n".
                    'welche das anschauliche unendliche Produkt \lm{ *( \prod_{ \forall p \in \mathbb{P} } p *)^ω }'."\n".
                    'mit den exakten algebraischen Werkzeugen der Addition, Subtraktion, Multiplikation und Division ausstattet.'."\n".
                    'Das Modell liefert damit den unwiderlegbaren Beweis, dass der Körper der Superial-Zahlen \lm{ \mathbb{S} } als stabiler,'."\n".
                    'widerspruchsfreier und normierter Rechenraum für die transfinite Analysis operieren kann.'."\n".
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
