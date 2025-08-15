<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Algebraische-Koeffizienten-Vermutung'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Ueberrationalitaetsvermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Verbesserungen der Seite}',
                    // '• Nach dem Beweis der \italic{\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}} die Menge der Koeffizienten der Superial-Zahlen von den rationalen Zahlen \lm{ \mathbb{Q} } zu den algebraischen Koeffizienten \lm{ \mathbb{A}_{\S} } ändern.',
                    ))),

                  array( 'text', array( text => array(
                    'Um die Trennlinie zwischen den reell algebraischen Zahlen und den transzendenten Zahlen im Rahmen der Superial-Zahlen zu verstehen,'."\n".
                    'müssen wir erkennen, dass sich wichtige Eigenschaften der transzendenten Zahlen im Superial-Universum anders darstellen,'."\n".
                    'als sie in der klassischen Mathematik gesehen werden.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                      
                'Neue Sicht der transzendenten Zahlen', subline =>
                  'Ein Paradigmenwechsel')),
                  array( 'text', array( text => array(
                    'Aus Sicht der klassischen Mathematik enthalten transzendente Zahlen keine unendlich kleinen Summanden.'."\n".
                    'Dies kommt, weil in ihr transzendente Zahlen durch Grenzwertbetrachtungen\color{*Bearb}{(Verweis)} mit Hilfe des Limes\color{*Bearb}{(Verweis)}'."\n".
                    'definiert sind.'."\n",
                      'Bei Grenzwertbetrachtungen wird das Verhalten von Funktionen untersucht, wenn sich ihr Parameter'."\n".
                    'einem bestimmten Wert, von unten oder von oben, nähert oder in Richtung Unendlichkeit läuft.'."\n".
                    'Das bedeutet aber eben auch, dass die Werte der Parameter nie wirklich das Endliche verlassen, wodurch dann keine wirklich'."\n".
                    'unendlich kleinen Summanden bei der Annäherung der Funktion an einen Grenzwert entstehen können.'."\n",
                      'Im Superial-Universum sieht die Sache nun anders aus.'."\n".
                    'Die Parameterwerte sind hier wirklich aktual unendlich große oder kleine Superial-Zahlen.'."\n".
                    'Dadurch bekommen transzendente Zahlen echte unendlich kleine Summanden, auch, wenn ihr führender oder bestimmender Wert'."\n".
                    'im Endlichen verbleibt.'."\n".
                    'Dies ist die \jump{OM:SupNum:Superiale-Transzendenz-Vermutung}{Superiale-Transzendenz-Vermutung}, die ich später noch'."\n".
                    'beweisen möchte.'."\n",
                      'Sie stellt einen tief gehenden grundsätzlichen Paradigmenwechsel dar, der uns eine Lupe in die'."\n".
                    '\jump{OM:SupNum:Superiale-Transzendenz-Vermutung}{feinen Strukturen der Transzendenz} an die Hand gibt.'."\n".
                    'Diese ermöglicht uns ganz neue Einblicke, wie wir bei der'."\n".
                    '\jump{OM:SupNum:Eulersche-Zahl-e-Funktion:Vortext:Equ-e_s-gleich-Stellenwertsystem-mit-Summe}{superialen Eulerschen Zahl \lm{ \e_{\s} }} und'."\n".
                    'der superialen Zahl \lm{ π_{\s} }\color{*Bearb}{(Link)} sehen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                      
                'Neue Sicht auf die reell algebraischen Zahlen', subline =>
                  'In vielem unverändert und doch ein echter Paradigmenwechsel')),
                  array( 'text', array( text => array(
                  '\condb{Rationale Zahlen} \\\\'."\n".
                  '\cond{Ganzzahlige Brüche} \\\\'."\n".
                    'Jede rationale Zahl ist im Produkt mit \lm{ \s } aufgrund seiner Primzahlstruktur ganz offensichtlich'."\n".
                    '\jump{OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s}{immer eine aktual unendlich große ganze Zahl}.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Radikale} \\\\'."\n".
                  '\cond{Natürliche Wurzeln aus natürlichen Zahlen} \\\\'."\n".
                    'Zunächst ist durch die \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung und ihren Beweis} ein neues Verständnis'."\n".
                    'eines wichtigen Teils der reell algebraischen Zahlen, nämlich den Radikalen – ganzzahligen Wurzeln aus positiven natürlichen Zahlen –,'."\n".
                    'gelungen:'."\n",
                      'Unter den Radikalen befinden sich auch irrationale Zahlen, wie die Wurzel aus Zwei, also \lm{ *| \sqrt{2} \,|* = 2^{½} }.'."\n".
                    'Solche Zahlen sind, genauer ausgedrückt, gebrochene Zahlen mit unendlich vielen nicht periodischen Nachkommastellen.'."\n".
                    'Noch genauer betrachtet stellt sich die Frage:'."\n".
                    'Sind diese Nachkommastellen vom Wert her alle endlich groß?'."\n",
                      'Der Beweis der Überrationalitätsvermutung zeigt, dass sich diese irrationalen Radikale in jede Schicht des'."\n".
                    '\jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystems der Superial-Zahlen} vollständig eingliedern.'."\n".
                    'Das zeigt sich durch eine neue und in diesem Zusammenhang sinnvolle Beantwortung der Frage, durch welchen ganzzahligen Bruch wir'."\n".
                    'die Wurzel aus Zwei oder jedes andere Radikal darstellen können:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AKV', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| \sqrt{ 2 } \,|*  =  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{\frac{ 1 }{ 2 }} \cdot 2^{ω} }{ 2^{ω} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Wurzel-Zwei-mal-Zwei-hoch-omega-durch-Zwei-hoch-omega}', label_incr => false),
                      // array( display => 'on',  latex => '{  \Leftrightarrow  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{ω + \frac{ 1 }{ 2 }} }{ 2^{ω} }  }',
                      //                     label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Zwei-hoch-omega-plus-Einhalb-durch-Zwei-hoch-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  *| \sqrt[x]{ n } \,|*  =  n^{\frac{ 1 }{ x }}  =  \frac{ n^{\frac{ 1 }{ x }} \cdot \rad(n)^{ω} }{ \rad(n)^{ω} }  }',
                                          label_text => '\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:RadikaleSinnvolleKoeffizienten:Equ-xte-Wurzel-n-gleich-xte-Wurzel-n-mal-rad-n-hoch-omega-durch-rad-n-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Der Beweis mündet in die beispielhafte Formel \jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Wurzel-Zwei-mal-Zwei-hoch-omega-durch-Zwei-hoch-omega}'."\n".
                    'und die allgemeine Formel \jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:RadikaleSinnvolleKoeffizienten:Equ-xte-Wurzel-n-gleich-xte-Wurzel-n-mal-rad-n-hoch-omega-durch-rad-n-hoch-omega}.'."\n".
                    'Er zeigt, dass für die Frage, wie kann jede ganzzahlige Wurzel aus einer positiven natürlichen Zahl als ganzzahliger Bruch darstellen werden,'."\n".
                    'im Endlichen keine Antwort existiert.'."\n".
                    'Diese Antwort gibt es nur mit aktual unendlich großem Nenner und Zähler, sehen wir nun im Beweis.'."\n",
                      'Wenn man naiv auf beide Formeln schaut, dann könnte man argumentieren, dass diese doch nicht abschließend sind, weil sie noch'."\n".
                    'gekürzt werden können.'."\n".
                    'Jedoch ist dies nicht ganz korrekt:'."\n".
                    'Wenn wir nämlich vollständig kürzen, dann ist die Bedingung der Ganzzahligkeit von Nenner und Zähler nicht mehr gegeben,'."\n".
                    'weil die aktuale Unendlichkeit verloren geht, die der Beweis fordert.'."\n".
                    'Einzig endlich oft kürzen ist möglich, ohne diese Bedingung zu verletzen, bringt aber keinerlei zusätzlichen Gewinn.'."\n",
                      'Diese Erkenntnis eröffnet eine ganz neue Perspektive auf die sinnvollen Koeffizienten der Superial-Zahlen.'."\n".
                    'Denn die Faktoren \lm{ 2^{ω} } und allgemeiner \lm{ \rad(n)^{ω} } sind auch Teil des Primzahlflächenprodukts von \lm{ \s }.'."\n".
                    'Dadurch wird jedes Produkt einer Wurzel mit unserer superialen Basis'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{1}{x}} \cdot \s  \in  \mathbb{S}_{\N}  }',
                                          label_text => '\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:RadikaleSinnvolleKoeffizienten:Equ-xte-Wurzel-n-mal-s-ist-in-SN}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'zu einer natürlichen unendlich großen Zahl, in der nur die Schicht \lm{ \s^{1} } belegt ist.'."\n".
                    'Das ist ein echter Paradigmenwechsel des Verständnisses von Wurzeln und der Superial-Zahlen.'."\n",
                      'Genau diese Eigenschaft macht sinnvolle Koeffizienten aus.'."\n".
                    'Denn so lassen sich die natürlichen Zahlen \lm{ \mathbb{N} } und auch die ganzen Zahlen \lm{ \mathbb{Z} }'."\n".
                    'zu \jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Superial-Zahlen \lm{ \mathbb{S}_{\N} }}'."\n".
                    'und \jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Superial-Zahlen \lm{ \mathbb{S}_{\Z} }}'."\n".
                    'erweitern, dass in Summen von superialen Integralen unendlich kleine Flächenelemente ganzer Anzahl gezählt und zu endlichen Flächeninhalten'."\n".
                    'addiert werden können.'."\n",
                      'Alle Radikale können aus der klassischen \lm{ p }‑adischen Sichtweise\footnote{\const{SupNum_g_footnote_text_PadischeZahl}}'."\n".
                    'durch ihre \lm{ p }‑adischen Bewertungen dargestellt werden, was offensichtlich ist und worauf wir gleich noch zurückkomme.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Algebraische Radikalformen} \\\\'."\n".
                  '\cond{Reell algebraische Zahlen, die durch algebraische Ausdrücke mit Wurzeln dargestellt werden können} \\\\'."\n".
                    'Alle algebraischen Radikalformen, die Produkte, Brüche oder rationale Potenzen von Radikalen sind, können'."\n".
                    'ebenfalls durch ihre \lm{ p }‑adischen Bewertungen dargestellt werden, was nach kurzer Überlegung auch offensichtlich ist.'."\n".
                    'Das macht sie auch ganz klar zu sinnvollen Koeffizienten der Superial-Zahlen.'."\n",
                      'Darüberhinaus zeige ich jedoch im Abschnitt \italic{\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}} zusätzlich,'."\n".
                    'dass alle algebraischen Radikalformen, eben auch die, die Summen oder Produkte von Wurzeln und deren ganzzahligen Potenzen'."\n".
                    'sowie geschachtelte Wurzelausdrücke aus Summen und deren Kehrwerte sind,'."\n".
                    'auch sinnvolle Koeffizienten der Superial-Zahlen darstellen.'."\n".
                    'Und das, obwohl diese Radikalformen keine \lm{ p }‑adischen Bewertungen ungleich Null besitzen.'."\n",
                      'Dazu gehört zum Beispiel auch der Goldene Schnitt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  φ  =  \frac{ *| \sqrt{ 5 } \,|* + 1 }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:SummeRadikaleKehrwerte:Equ-goldener-Schnitt}', label_incr => false),
                      array( display => 'on',  latex => '{  5^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ 2 } + \frac{ \s }{ 2 }  \in  \mathbb{S}_{\N}  \;\; ,  }',
                                          label_text => '\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:SummeRadikaleKehrwerte:Equ-goldener-Schnitt-mal-s-in-SN}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'wie auch die pythagoreischen Tripel in quadratischer oder allgemeiner Form:'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    '\color{*Bearb}{(Bisher ohne Radikalformen, die man durch endlich viele geschachtelte Quadratwurzeln und ganzzahlige Additionen erhält.)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Radikal-Abgeschlossenheit} \\\\'."\n".
                    'Wie wir auf der Seite der sinnvollen Koeffizienten herausarbeiten, erreichen wir schließlich die Radikal-Abgeschlossenheit'."\n".
                    'der Koeffizienten.'."\n".
                    'Ein entscheidender Schritt zur Vorbereitung unseres Beweises, dass wirklich alle reell algebraischen Zahlen als Koeffizienten'."\n".
                    'sinnvoll sind.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                      
                'Beweis der Ganz-Abgeschlossenheit von \lm{ \mathbb{A}_{\S} }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\bold{Stehende Annahmen (SA)} \\\\'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        '\condb{Inklusionen:}'."\n".
                          '\lm{ \mathbb{Z} \subset \mathbb{A}_{\S} } und \lm{ \mathbb{Z} \subset \mathbb{S}_{\Z} }​. \\\\'."\n".
                          'Für \lm{ n \ge 1 } gilt \lm{ s^{n} \mathbb{A}_{\S} \subset \mathbb{S}_{\Z} }. Im Allgemeinen \lm{ \mathbb{A}_{\S} \not\subset \mathbb{S}_{\Z} }. \\\\'."\n".
                          '\italic{Begründung: „sinnvoll“ heißt \lm{ a \in \mathbb{A}_{\S} \Leftrightarrow a \cdot \s \in \mathbb{S}_{\Z} } etc.; für höhere Potenzen analog.}',
                        '\condb{Integritätsbereich:}'."\n".
                          '\lm{ \mathbb{S}_{\Z} } ist also Integritätsbereich mit \lm{ \mathbb{Z} \subset \mathbb{S}_{\Z} } und ausgezeichnetem Element \lm{ \s \in \mathbb{S}_{\Z} }. Der Quotientenkörper sei \lm{ \s \in \mathbb{S}_{\Q} := \mathrm{Frac}(\mathbb{S}_{\Z}) }.',
                        '\condb{Primzahldivisoren:}'."\n".
                          'Für jede (rationale) Primzahl \lm{ p } ist \lm{ p \mathbb{S}_{\Z} }​ ein Primideal; ferner \lm{ \bigcap_{e \ge 0} p^{e} \mathbb{S}_{\Z} = *\{ 0 *\} }.',
                        '\condb{Endliche Prim-Unterstützung:}'."\n".
                          'Für jedes \lm{ 0 \ne X \in \mathbb{S}_{\Z} } ist die Menge \lm{ *\{ p \in \mathbb{P} *|* v_{p}(X) > 0 *\} } endlich.'."\n".
                          '\italic{(Dieses „endlich viele Primteiler“ ist genau die Buchführung, die für sinnvolle Koeffizienten wichtig ist.)}',
                    ))),

                  array( 'text', array( text => array(
                  '\bold{Bewertungen und Valuationsringe} \\\\'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        '\condb{Bewertungen \lm{ v_{p} }:} \\\\'."\n".
                          'Für \lm{ 0 \ne X \in \mathbb{S}_{\Z} } setze \\\\'."\n".
                            '\lm{ \quad\;  v_{p}(X) := \mathrm{sup}⁡*\{ e \in \mathbb{Z}_{\ge 0} *|* X \in p^{e}\mathbb{S}_{\Z} *\} \in \mathbb{Z}_{\ge 0} \cup *\{ \infty *\} }, \lm{ v_{p}(0) := \infty }. \\\\'."\n".
                          'Für \lm{ x = X / Y \in \mathbb{S}_{\Q}^{\times} } mit \lm{ X, Y \in \mathbb{S}_{\Z} }, \lm{ Y \ne 0 } setze \\\\'."\n".
                            '\lm{ \quad\;  v_{p}​(x) := v_{p}​(X) − v_{p}​(Y) \in \mathbb{Z} }.',
                        '\condb{Axiom 0:}'."\n".
                          'Die Bewertungen \lm{ v_{p} }​ sind wohldefiniert und erfüllen für \lm{ x, y \in \mathbb{S}_{\Q}^{\times} }.',
                        '\condb{Axiom 1:}'."\n".
                          '\lm{ v_{p}​(xy) = v_{p}​(x) + v_{p}​(y) }',
                        '\condb{Axiom 2:}'."\n".
                          '\lm{ v_{p}​(x + y) \ge \mathrm{min}\{v_{p}​(x), v_{p}​(y) \} }, falls \lm{ x + y \ne 0 }',
                        '\condb{Axiom 3:}'."\n".
                          'für \lm{ n \in \mathbb{Z} \setminus \{ 0 \} } stimmt \lm{ v_{p}(n) } mit der üblichen \lm{ p }-Adik überein. \\\\'."\n".
                          '\italic{Beweis: Standard über Ideale \lm{ p^{e}\mathbb{S}_{\Z}​ } und stehende Annahmen (SA)}',
                        '\condb{Valuationsring \lm{ V_{p} }:} \\\\'."\n".
                          'Setze \\\\'."\n".
                            '\lm{ \quad\;  V_{p} := *\{ x \in \mathbb{S}_{\Q} *|* v_{p}(x) \ge 0 *\} \cup \{ 0 \} }.',
                        '\condb{Struktur von \lm{ V_{p} }:} \\\\'."\n".
                          '\lm{ V_{p} }​ ist ein lokaler Valuationsring mit maximalem Ideal \lm{ m_{p} = *\{ x *|* v_{p}(x) > 0 *\} \cup *\{ 0 *\} }. \\\\'."\n".
                            'Insbesondere ist \lm{ V_{p} }​​ ganz abgeschlossen. \\\\'."\n".
                            '\italic{Beweis: Aus Axiomen; Klassik: Valuationsringe sind ganz abgeschlossen.}',
                    ))),

                  array( 'text', array( text => array(
                  '\bold{Schnittdarstellung von \lm{ \mathbb{S}_{\Z} }} \\\\'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        '\condb{Lemma – Offensichtliche Inklusion:}'."\n".
                          '\lm{ \mathbb{S}_{\Z} \subseteq \bigcap_{p} V_{p} }​. \\\\'."\n".
                          '\italic{Beweis: Für \lm{ X \in \mathbb{S}_{\Z} \setminus \{ 0 \} } ist \lm{ v_{p}(X) \ge 0 } für alle \lm{ p }.}',
                        '\condb{Bemerkung – Einheitenkriterium:}'."\n".
                          'Für \lm{ 0 \ne U \in \mathbb{S}_{\Z}​ } gilt: \lm{ U } ist Einheit \lm{ \Leftrightarrow v_{p}(U) = 0 } für alle \lm{ p }. \\\\'."\n".
                          '\italic{Begründung: Hat \lm{ v_{p}(U) \ge 1 } für\color{*Bearb}{(???)} ein \lm{ p }, dann teilt \lm{ p } das Hauptideal \lm{ U \mathbb{S}_{\Z} }​, also ist \lm{ U } keine Einheit; umgekehrt folgt aus \lm{ v_{p}(U) = 0 } für \lm{ \forall p } per SA Einheitlichkeit.}',
                        '\condb{Schnitt – Charakterisierung via Schnitt:} \\\\'."\n".
                          '\lm{ \quad\;  \mathbb{S}_{\Z}​ = \bigcap_{ p } V_{p} \subset \mathbb{S}_{\Q}​ }. \\\\'."\n".
                          '\italic{Beweis: Sei \lm{ x =  X / Y \in \bigcap_{ p } V_{p}​ } mit \lm{ X, Y \in \mathbb{S}_{\Z} }. Dann \lm{ v_{p}(X) \ge v_{p}(Y) } für \lm{ \forall p }. Definiere \lm{ D \in \mathbb{S}_{\Z} }​ über Primexponenten durch \lm{ v_{p}(D) := v_{p}(Y) } (existiert dank SA \condb{Endliche Prim-Unterstützung}). Dann \lm{ D | X } und \lm{ D | Y }, schreibe \lm{ X = DX′, Y = DY′ } mit \lm{ v_{p}(Y′) = 0 } für \lm{ \forall p }. Nach \condb{Einheitenkriterium} ist \lm{ Y′ } Einheit, also \lm{ x =  X′ / Y′ \in \mathbb{S}_{\Z} }​.}',
                        '\condb{Korrelation – Ganz abgeschlossen:}'."\n".
                          'Als Schnitt ganz abgeschlossener Ringe \lm{ V_{p} } ist \lm{ \mathbb{S}_{\Z} } selbst ganz abgeschlossen.',
                    ))),

                  array( 'text', array( text => array(
                  '\bold{Reell algebraische Zahlen in \lm{ \mathbb{A}_{\S} }} \\\\'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        '\condb{Schlüssel-Proposition:}'."\n".
                          'Ist \lm{ \mathbb{S}_{\Z} } in \lm{ \mathbb{S}_{\Q} } ganz abgeschlossen (\condb{Korrelation – Ganz abgeschlossen}), dann gilt: \\\\'."\n".
                            '\lm{ \quad\; } Jede reell algebraische Zahl \lm{ \alpha } liegt in \lm{ \mathbb{A}_{\S} }. \\\\'."\n".
                          '\italic{Beweis: Sei \lm{ \alpha } reell algebraisch, Nullstelle eines monischen Polynoms} \\\\'."\n".
                            '\lm{ \quad\;  \alpha^{n} + a_{n - 1} \alpha^{n - 1} + \cdots + a_{0} ​= 0  \quad } mit \lm{ a_{i} \in \mathbb{Z}​ }. \\\\'."\n".
                          'Setze \lm{ Y := \alpha \cdot s } und multipliziere mit \lm{ s^{n} }: \\\\'."\n".
                            '\lm{ \quad\;  Y^{n} + *( a_{n - 1} \s *) Y^{n - 1} + \cdots + *( a_{1} \s^{n - 1} *) Y + a_{0} \s^{n} ​= 0 }. \\\\'."\n".
                          'Hier liegen \bold{alle Koeffizienten in} \lm{ \mathbb{S}_{\Z} }, denn \lm{ \mathbb{Z}​ \subset \mathbb{S}_{\Z} } und \lm{ \s^{m} \in \mathbb{S}_{\Z} } für \lm{ \forall m }.'."\n".
                          'Also ist \lm{ Y } ist \bold{ganz über} \lm{ \mathbb{S}_{\Z} }.'."\n".
                          'Da \lm{ \mathbb{S}_{\Z} } ganz abgeschlossen ist, folgt \lm{ Y \in \mathbb{S}_{\Z} }; folglich \lm{ \alpha = Y / \s \in \mathbb{A}_{\S} } (per Definition von \lm{ \mathbb{A}_{\S} }). \lm{ \blacksquare }',
                        '\condb{Fazit:}'."\n".
                          'Zusammen mit der bereits bewiesenen Radikal-Abgeschlossenheit von \lm{ \mathbb{A}_{\S} } liefert die \condb{Schlüssel-Proposition}:',
                    ))),

                  array( 'text', array( Shape  => 'conclusion', text => array(
                        'Alle reell algebraischen Zahlen gehören zu den sinnvollen Koeffizienten \lm{ \mathbb{A}_{\S} }.'."\n".
                        ''))),

                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                  array( 'text', array( text => array(
                  '\bold{Randbemerkung zur endlichen Prim-Unterstützung} \\\\'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Bemerkung – Plausibilität Endlicher Prim-Unterstützung:} \\\\'."\n".
                    'Warum SA \condb{Endliche Prim-Unterstützung} plausibel ist: \\\\'."\n".
                    'In der Praxis werden Elemente \lm{ X \in \mathbb{S}_{\Z} } als endliche Stellensummen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  X = \sum_{ [ 0,d ]_{\mathbb{N}} } a_{i} \s^{i}  \quad  a_{i} \in \mathbb{A}_{\S}, d \in \mathbb{N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(Formel falsch)} geschrieben, wobei jedes \lm{ a_{i} \cdot \s \in \mathbb{S}_{\Z} } liegt (Definition „ganz“ in den Superial-Zahlen). \\\\'."\n".
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        'Für \lm{ z \in \mathbb{Z} \subset \mathbb{S}_{\Z} }​ hat \lm{ z } nur die üblichen endlich vielen \lm{ p }-Teiler.',
                        'Für \lm{ a \in \mathbb{A}_{\S} } liegt \lm{ a_{i} \cdot \s \in \mathbb{S}_{\Z} } und kann nach den bereits bewiesenen Regeln'."\n".
                          '(Produkte, ganzzahlige Potenzen, endliche Summen, Radikale) mit endlich vielen rationalen Primfaktoren beschrieben werden.',
                        'Da Summe und Produkt ganzer Superial-Zahlen die Vereinigung der jeweils endlichen Prim-Unterstützungen nimmt, bleibt die Unterstützung endlich.',
                    ))),

                  array( 'text', array( text => array(
                    'Damit ist die SA \condb{Endliche Prim-Unterstützung} kompatibel mit der bestehenden Arithmetik in den Superial-Zahlen und den Beweisen oben.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                  array( 'headline', array( jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                      
                '\color{*Bearb}{Nachfolgender Text wird überarbeitet, weil er so nicht korrekt ist}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Beweis unserer Überrationalitätsvermutung}, das Zeigen,'."\n".
                    'dass auch alle damit sich ergebenden durch Radikale\footnote{\const{SupNum_g_footnote_text_DurchRadikaleDarAlgZ}} darstellbaren reell algebraischen Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
                    '\jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvolle Koeffizienten der Superial-Zahlen} sind,'."\n".
                    'und der Beginn des systematischen Herausarbeitens der \jump{OM:SupNum:Superiale-Transzendenz-Vermutung}{Struktur der transzendenten Zahlen},'."\n".
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X', text =>
                      
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
                      'Damit sind alle \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{notwendigen Kriterien für sinnvolle Koeffizienten der Superial-Zahlen} erfüllt.'."\n".
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

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:X',
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
                    'verhalten sich wie im vorstehenden Abschnitt \italic{\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:SummeRadikaleKehrwerte:Summen-von-Wurzeln}}'."\n".
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
                      array(  jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung:endliche-Indexmengen-p-a-Bewert-ergeben-reell-algebr-Zahlen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


          <!  • Alle endlichen Indexmengen mit p-adischen Bewertungen aus rationalen Zahlen ergeben reell algebraische Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Algebraische-Koeffizienten-Vermutung:endliche-Indexmengen-p-a-Bewert-ergeben-reell-algebr-Zahlen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung', type => 'back'),
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
                    'Dies ist tatsächlich eine bidirektionale Abbildung, bis auf den Fall \lm{ a = 0 } und das Vorzeichen.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Superiale-Transzendenz-Vermutung'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
