<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Einleitung'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Vorwort'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Einpflegen}',
                    //%! '• Dem sehr kleinen, infinitesimalen Epsilon eine Struktur aus Primzahlen geben.',
                    '\bold{Änderungsvorschläge}',
                    '• Moriz sagt zu dieser Seite:',
                    '– zu lang und zu detailliert',
                    '– Ihm war nicht bekannt, welche Menge \lm{ \mathbb{A}_{\R} } ist:',
                    '⋅ Es sind alle algebraischen Zahlen in den reellen Zahlen \lm{ \mathbb{R} }, also die reellen Zahlen ohne die transzendenten Zahlen, wie \lm{ \e, π } – \lm{ \mathbb{R} \setminus \mathbb{T} }.',
                    '⋅ Es sind alle rein reellen Lösungen der Nullstellen von Polynomen; keine mit komplexen Anteilen, wie in \lm{ \mathbb{A} }, also \lm{ \mathbb{A} \cap \mathbb{R} }.',
                    '– Bei der Ableitung und beim Integral sollte es klar sein, dass es um Funktionen geht, die differenzierbar sind und für die das Riemannintegral definiert ist',
                    '• \italic{\bold{Generelle Änderungen}}',
                    '– Die Formelnummern sind unlesbar und nicht gut zu kommunizieren.',
                    '\bold{Der Ansatz mit aktual unendlichen Zahlen ist nicht neu}',
                    '• Sondern er ist historisch offenbar sogar älter, als der mit dem Limes-Grenzwert, siehe \url{https://de.wikipedia.org/w/index.php?title=Hyperreelle_Zahl&oldid=237554998} und \url{https://de.wikipedia.org/w/index.php?title=Differentialrechnung&oldid=267675700#Geschichte}.',
                    '• Dieser Ansatz machte Probleme, weil er in sich logisch inkonsistent und nicht klar definiert war.',
                    '– Dies wurde erst durch die hyperreellen Zahlen geändert, die sich über Reihenentwicklung dem unendlich Großen und Kleinen nähern.',
                    '• Die Superial-Zahlen gehen einen anderen Weg, als die hyperreellen Zahlen, und zwar über ein unendlich großes Primzahlprodukt. Dabei lösen sie das Logikproblem zunächst einmal „nur“ für die Radikale der algebraischen Zahlen, das sind rationale Zahlen und irrationale Wurzelausdrücke, die mit den Grundrechenarten verbunden sind. Durch den erheblichen Erkenntnisgewinn, auch in Bezug auf Primzahlen, ist allein dies schon hoch interessant. Und es eröffnet einen Horizont über weitere Erkenntnisse auch diesbezüglich zu den restlichen irrationalen Zahlen, die keine algebraischen Radikale sind, vorzustoßen und die Natur von transzendenten Zahlen zu erkunden.',
                    '\bold{Analyse}',
                    '• Das heißt, dass die Ordinalzahlen kein Ring sind, weil es nicht zu jedem Element ein additives Inverses gibt. Und kein Körper, weil es kein multiplikatives Inverses gibt.',
                    '• Die Biordinalzahlen wären dann aber ein Ring, aber immer noch kein Körper.',
                    '• Die Superial-Zahlen sind, weil mit rationalen, Radikalen, Radikalformen und reell algebraischen Koeffizienten gebildet, ein Körper. Denn es gibt beide inverse Elemente.',
                    '\bold{Aktuelle Forschung}',
                    '\bold{\italic{Das Langlands-Programm}}',
                    '• Die Superial-Zahlen sind ein neuer Zugang zum Langlands-Programm, siehe: \jump[https://www.spektrum.de/news/1000-seiten-beweisen-das-geometrische-langlands-programm/2255043]{}{1000 Seiten Beweis für eine mathematische Weltformel}.',
                    '• Das Langlands-Programm bringt die Zahlentheorie, die Algebra, die Geometrie und die harmonische Analysis zusammen.',
                    '– Im Falle der Superial-Zahlen sind auch die Arithmetik und die allgemeine Analysis inbegriffen.',
                    '• Der Fields-Medaillenträger 2018, Peter Scholze, bringt neue Zusammenhänge zwischen der Arithmetik und der Geometrie ins Spiel.',
                    '\bold{\italic{Diskretisierung der Topologie durch verdichtete Mengen}}',
                    '• Neubau der Mathematik: Das Fach neu aufrollen: Nichts Geringeres haben sich Peter Scholze und Dustin Clausen vorgenommen. Mit einem revo­lutionären neuen Ansatz begeistern sie die Fachwelt.\footnote{\cite{Bischoff:NeubauDerMathematik:2023}}',
                    '– Dies unterstützt in meinen Augen auch die Erkenntnis, dass die Geometrie eigentlich fraktal ist, siehe oben.',
                    '\bold{Zeit in der Mathematik}',
                    '• Einflechten, dass die Arithmetik aus dem Zählen geboren wird. Dies ist eine Definition durch einen Prozess. Hierdurch kommt Zeit ins Spiel. Die Betrachtung der Primfaktorzerlegung der natürlichen Zahlen zeigt auf, dass an diesem Prozess Regelsystemen ähnliche rhythmische Strukturen beteiligt sind.',
                    '\bold{Forschungsideen}',
                    '• Das Pascal-Sierpinski-Dreieck ist eine Geometrie, in der Primzahlen eine außergewöhnliche Rolle spielen.\footnote{Vgl. \cite{Plichta:GottesGeheimeFormel:1995}, S. 263ff., 271ff. 306ff.. \\\\ Internet: \\\\ Vgl. \jump[https://de.wikipedia.org/w/index.php?title=Sierpinski-Dreieck&oldid=179105092#Zusammenhang_mit_dem_Pascalschen_Dreieck]{}{Wikipedia, Sierpinski-Dreieck, Zusammenhang mit dem Pascalschen Dreieck}.}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Welche immense Bedeutung das Unendliche in der Mathematik und auch in der Physik innehat,'."\n".
                    'gibt ein Zitat von Hermann Weyl wieder:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'quote', text => array(
                        'Mathematik ist die Wissenschaft vom Unendlichen;'."\n".
                        'ihr Ziel ist die symbolische Erfassung des Unendlichen mit menschlichen, das heißt endlichen Mitteln.'."\n".
                        ''),
                        addtext => '\footnote{\cite{Weyl:DieStufenDesUnendlichen:1931}.}')),

                  array( 'text', array( text => array(
                    'Er bringt damit auch zum Ausdruck, dass wir in der Mathematik an vielen Stellen auf Unendliches stoßen'."\n".
                    'und versuchen, es für Menschen möglichst verständlich, ausdrückbar und gut nutzbar zu machen.'."\n".
                    'Das waren auch für mich energiegebende Anliegen und, gepaart mit meiner Neugier, der Impuls,'."\n".
                    'die Superial-Zahlen zu entwickeln.'."\n".
                    'Ich wollte unserem Verständnis des Unendlichen und unseren Ausdrucksmöglichkeiten'."\n".
                    'für das Unendliche weitere faszinierende und nützliche Perspektiven und Werkzeuge hinzufügen.'."\n",
                      'Zur weiteren Einstimmung auf das Unendliche und seine Geschichte möchte ich dem Leser ein Video von Edmund Weitz'."\n".
                    'ans Herz legen: \jump[https://www.youtube.com/watch?v=H8ZBjsYU4JE]{}{Die Eroberung der Unendlichkeit (Kurze Geschichte der Mathematik 3)}.'."\n".
                    'Und wer tiefer einsteigen und verstehen möchte – eher mit Vorkenntnissen –, dem lege ich das Buch von David Foster \cite{Wallace:DieEntdeckungDesUnendlichen:2010}, nahe.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Die Zahlentheorie der Analysis')),
                  array( 'text', array( text => array(
                    'Die klassische Analysis beschreibt Veränderung, Grenzwerte, Ableitungen, Integrale,'."\n".
                    'Reihen und stetige Strukturen.'."\n".
                    'Ihre Grundoperationen werden dabei gewöhnlich über Grenzprozesse formuliert:'."\n".
                    'Differenzen werden beliebig klein, Summen werden beliebig fein, Folgen nähern sich Grenzwerten an.'."\n",
                      'Die Theorie der Superial-Zahlen verfolgt einen anderen Zugang.'."\n".
                    'Sie fragt, ob diese Grenzprozesse eine verborgene aktual unendliche arithmetische Struktur besitzen.'."\n".
                    'Ableitungen werden dann nicht nur als Grenzwerte von Differenzenquotienten verstanden,'."\n".
                    'sondern als Rechnungen mit einer normierten infinitesimalen Schrittweite'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{-1}  \;\; .  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Integrale werden nicht nur als Grenzwerte endlicher Summen verstanden,'."\n".
                    'sondern als aktual unendliche Summen mit einer durch \lm{ \s } bestimmten Anzahl beziehungsweise Erzeugungsanzahl von Summanden.'."\n",
                      'Damit tritt eine zahlentheoretische Frage in das Zentrum der Analysis:'."\n".
                    'Welche Zahlen können in solchen aktual unendlichen Summen und Produkten'."\n".
                    'als Koeffizienten sinnvoll auftreten?'."\n".
                    'Diese Frage führt zu den sinnvollen Koeffizienten der Superial-Zahlen'."\n".
                    'und damit zu einem tiefen Zusammenhang zwischen Analysis und Zahlentheorie.'."\n",
                      'Die superiale Basis'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  \prodx_{ p \in \mathbb{P} }  p^{ω}  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'ist als Primexponentenprodukt zu verstehen, nicht als gewöhnliches unendliches Produkt im analytischen Sinn.'."\n".
                    'Sie enthält jede endliche Primzahl \lm{ p } in aktual unendlicher Exponentenlänge.'."\n".
                    'Dadurch werden Teilbarkeit,'."\n".
                    'Primexponenten, Nennerabsorption, Wurzeln und algebraische Koeffizienten'."\n".
                    'zu arithmetischen Grundlagen der superialen Analysis.'."\n".
                    'Die Analysis erhält damit eine zahlentheoretische Tiefenstruktur.'."\n",
                      'In diesem Sinn bezeichnet der Ausdruck \italic{›Zahlentheorie der Analysis‹} nicht eine Ersetzung'."\n".
                    'der klassischen Analysis, sondern ihre arithmetische Verfeinerung:'."\n".
                    'Grenzwerte, Ableitungen und Integrale werden in einem erweiterten Zahlenraum betrachtet,'."\n".
                    'in dem ihre aktual unendlichen Schritt-, Summen- und Koeffizientenstrukturen explizit sichtbar werden.'."\n".
                    ''))),
                    
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:SupNum:Einleitung:Motivation'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


          <!--  • Motivation  -->
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Einleitung:Motivation',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'In der Schule fand ich Ableitungen und Integrale immer sehr faszinierend.'."\n".
                    'Es war für mich erstaunlich, wie man über die Unendlichkeit ganz neue Erkenntnisse und Formeln gewinnen konnte.'."\n".
                    'Daraus hat sich damals ein tiefes Bedürfnis entwickelt zu verstehen, was dabei genau vor sich geht.'."\n".
                    'Auch fand ich den dafür genutzten Limes nicht so intuitiv, obwohl er faszinierendes ermöglichte, und suchte einen einfachen'."\n".
                    'und einsichtigeren Ansatz das gleiche zu erreichen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Motivation:X', text =>
                                           
                'Eine versunkene Welt', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ich spielte viel mit der Formel zur Definition der Ableitung herum, was schließlich dazu führte, dass ich begriff,'."\n".
                    'dass der Limes nicht nur dazu führt,'."\n".
                    'dass ein bestimmtes Glied der sich ergebenen Summe dominant in den Vordergrund tritt und das Ergebnis bestimmt.'."\n".
                    'Mir wurde auch klar, dass all die anderen Summanden, die unendlich klein und damit scheinbar unbedeutend wurden,'."\n".
                    'eine Welt darstellten, die so quasi im Nirvana versank.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Motivation:X', text =>
                                           
                'Schätze aus der versunkenen Welt heben', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Genau diese „versunkene“ Welt weckte mein Interesse.'."\n".
                    'Irgendwie war ja auch klar, dass beim Integrieren, der Umkehrung der Ableitung, diese versunkene Welt schließlich wieder auftauchen musste.'."\n".
                    'Wie könnte sie da unwiederbringlich „vernichtet“ worden sein?'."\n".
                    'Durch das Herumspielen begriff ich:'."\n".
                    'Wir können auch ins Unendliche gehen, ohne den Limes zu benutzen!'."\n".
                    'Ohne, dass man die versinkenden Summanden wirklich zu Null werden lässt, wobei sie einfach pragmatisch als vernachlässigbar erklärt und weggeschmissen werden.'."\n".
                    'Was in der Praxis legitim ist, sollte in der Theorie nicht vernachlässigt sondern erforscht werden, sprach mein Herz.'."\n",
                      'Meine ersten gefundenen Erkenntnisse teilte ich bald mit einem Professor der Hamburger Uni.'."\n".
                    'Er empfahl in unserem Schriftwechsel, die superiale Basis \lm{ \s } nicht nur durch Relationen,'."\n".
                    'sondern konkret zu definieren.'."\n".
                    'Dadurch angeregt wurde mir klar, dass \lm{ \s } ein Primexponentenprodukt aller endlicher Primzahlen in'."\n".
                    'aktual unendlicher ordinaler Potenz \lm{ ω } sein musste.'."\n",
                      'Diese Einsicht ermöglichte einen konkreten Zugang in eine faszinierende neue Welt'."\n".
                    'auf Grundlage der so bedeutenden, wie zunächst auch recht einfach verständlichen Primzahlen.'."\n".
                    'Die Struktur von \lm{ \s } fand ich, weil durch den Versuch die Summen der Integrale mit ihr'."\n".
                    'zu beschreiben schnell klar wurde, dass alle rationalen Zahlen \lm{ q } im Produkt \lm{ q \cdot \s }'."\n".
                    'ganze aktual unendlich große Zahlen sein mussten,'."\n".
                    'damit eine ganze wenn auch unendliche Anzahl an Summanden in der Summe ist.'."\n".
                    'Soweit recht simpel, aber mit großer Tragweite.'."\n",
                      'Die Fragen und Vermutungen jedoch, die sich daraus schließlich ergaben'."\n".
                    '– die Superial-Zahlen sollten natürlich möglichst viel Sinn machen – hatten es in sich:'."\n".
                    'Sind auch irrationale Wurzeln in einem solchen Produkt, wie \lm{ \sqrt{2} \cdot \s }, ganzzahlig?'."\n".
                    'Sind schließlich'."\n".
                    '\jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Ueberrationalitaetsvermutung}{alle \lm{ \sqrt[x]{n} \cdot \s } ganzzahlig}?'."\n".
                    'Wie kann ich so etwas beweisen?'."\n".
                    'Mein herumspielen mit den Superial-Zahlen ergab auch den Eindruck und die Abschätzung,'."\n".
                    'dass es aus dieser neuen Perspektive Sinn machte, das von-Neumann-Ordinal\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}}'."\n".
                    'mit einer \jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Primzahlprodukt-Vermutung}{multiplikativen Struktur kanonisch zu identifiziert}.'."\n".
                    'Immer mal wieder ergaben die Formeln den Hinweis, dass'."\n".
                    '\lm{ ω \equiv_{kan} *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 3 \cdot \cdots  *)_{\#} }'."\n".
                    'sein sollte.'."\n".
                    'Kann das bewiesen werden?'."\n",
                      'All dies stärkte meine Neugier, mein Interesse und motivierte zu tieferer Erforschung.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Motivation:X', text =>
                                           
                'Meine Ahnung der Bedeutung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Nach meiner Entdeckung des superialen Zahlensystems und als ich schließlich'."\n".
                    'die Funktion und damit die sinnvolle innere Struktur der superialen Basis \lm{ \s } erkannte, wurde mir bald klar:'."\n".
                    'Die Superial-Zahlen mussten eine Verbindung zur Struktur geometrischer Objekte haben'."\n".
                    'und so auch mit der \jump{OM:SupNum:Arithmetische-Struktur-Geometrie:Vortext:DasAnalytischeKontinuum}{Kontinuumshypothese} in Verbindung stehen.'."\n".
                    ''))),
                   array( 'text', array( text => array(
                    'Wie sagen wir so schön:'."\n".
                    '\quote{Lasst uns anfangen!}'."\n".
                    'Oder im Englischen: \quote{Lets go for it!}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:ProblemstellungZielsetzung'),
                    )),
                )
          ); ?>


          <!--  • Problemstellung und Zielsetzung  -->
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Einleitung:ProblemstellungZielsetzung',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:Motivation', type => 'back'),
                    )),
                  
                  /* array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Problemstellung und Zielsetzung', subline =>
                  '')), */
                  array( 'text', array( text => array(
                    'Die klassische Analysis berechnet Ableitungen und Integrale über Grenzprozesse.'."\n".
                    'Eine Ableitung wird nicht als Quotient zweier wirklich vorhandener infinitesimaler Größen verstanden,'."\n".
                    'sondern als Grenzwert eines Differenzenquotienten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Probl', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  =  \lim\limits_{\Delta x \rightarrow +0}{ \frac{ f(x + \Delta x) - f(x) }{ \Delta x } }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-mit-Limes}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Ebenso wird das Integral als Grenzwert immer feinerer Summen aufgefasst.'."\n".
                    'Diese Limes-Fundierung ist mathematisch äußerst erfolgreich und bildet die Grundlage der modernen Analysis.'."\n".
                    'Sie hat jedoch einen entscheidenden Preis:'."\n".
                    'Das infinitesimale Rechenelement selbst verschwindet aus der Theorie.'."\n".
                    'Es gibt im klassischen reellen Zahlensystem kein von Null verschiedenes \lm{ \Delta x }, das kleiner als jede positive reelle Zahl ist.'."\n".
                    'Der Limes beschreibt daher ein Grenzverhalten, aber keinen aktual vorhandenen infinitesimalen Rechenschritt.'."\n",
                      'Historisch war genau dies eines der zentralen Spannungsfelder der Analysis.'."\n".
                    'Newton, Leibniz, Fermat, Euler und andere rechneten'."\n".
                    'mit unendlich kleinen Größen, Momenten, Fluxionen, Differentialen oder vernachlässigbaren Restgliedern.'."\n".
                    'Die Ergebnisse waren oft korrekt und außerordentlich fruchtbar, doch die Grundlagen blieben lange umstritten:'."\n".
                    'Darf man durch eine Größe teilen, die anschließend verschwindet?'."\n".
                    'Ist ein Differential \lm{ \mathrm{d} x } gleich Null oder ungleich Null?'."\n".
                    'Wie kann eine Fläche aus Linien oder eine Bewegung aus ausdehnungslosen Momenten entstehen?'."\n",
                      'Die moderne Limes-Analysis löst diese Probleme, indem sie die infinitesimalen Größen nicht mehr als Objekte zulässt.'."\n".
                    'Dadurch wird die Rechnung streng, aber zugleich wird eine mögliche feinere Struktur unsichtbar.'."\n".
                    'Restglieder, die im Grenzübergang verschwinden, werden nicht als eigenständige Bestandteile des Ergebnisses aufbewahrt.'."\n".
                    'So liefert die klassische Analysis den Standardwert, nicht aber die vollständige Spur des infinitesimalen Rechenprozesses.'."\n",
                      'Die Superial-Zahlen setzen an dieser Stelle an.'."\n".
                    'Ihr Ziel ist nicht, die klassische Analysis zu ersetzen, sondern sie durch eine aktual unendliche und infinitesimale Struktur zu verfeinern.'."\n".
                    'An die Stelle eines bloß variablen Grenzparameters \lm{ \Delta x \rightarrow +0 } tritt eine ausgezeichnete infinitesimale Schrittweite:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Probl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{-1}  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die zugehörige aktual unendliche Basis \lm{ \s } dient als normierendes Rechenelement.'."\n".
                    'Dadurch können Ableitungen und Integrale nicht nur als Grenzwerte,'."\n".
                    'sondern als konkrete superiale Werte mit sichtbarer Reststruktur formuliert werden.'."\n".
                    'Für die Ableitung von \lm{ f(x) = x^{2} }  entsteht zum Beispiel nicht unmittelbar nur der klassische Wert \lm{ 2 x },'."\n".
                    'sondern zunächst der superiale Wert'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Probl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2 x + \s^{-1}  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Der klassische Ausdruck \lm{ 2 x } erscheint anschließend als Standardisierung dieses superialen Wertes.'."\n".
                    'Der infinitesimale Rest \lm{ \s^{−1} } wird nicht vernichtet, sondern bleibt als Grenzwertspur erhalten.'."\n",
                      'Damit verfolgt diese Theorie drei Ziele.'."\n",
                      'Erstens soll ein Rechenraum beschrieben werden, in dem infinitesimale'."\n".
                    'und aktual unendliche Größen nicht bloß heuristische Hilfsmittel sind, sondern algebraisch strukturierte Objekte.'."\n".
                    'Die Basis \lm{ \s } übernimmt dabei die Rolle eines aktual unendlichen Stellenwertträgers,'."\n".
                    'während \lm{ \s^{−1} } den kanonischen infinitesimalen Schritt der Analysis bildet.'."\n",
                      'Zweitens soll gezeigt werden, dass diese Basis nicht willkürlich eingeführt wird.'."\n".
                    'Über die kanonische Primexponenten-Identifikation wird \lm{ ω } mit dem vollständigen Einheits-Primexponentenprodukt'."\n".
                    'aller endlichen Primzahlen identifiziert.'."\n".
                    'Die superiale Basis erhält dadurch die Struktur'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Probl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'beziehungsweise präziser'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Probl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  \prodx_{ p \in \mathbb{P} }  p^{ω}  \;\; .  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit trägt jede endliche Primzahl im Primexponentenprodukt \lm{ \s } den aktual unendlichen Exponenten \lm{ ω }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Probl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *)  *[  v_{p}*( \s *)  =  ω  *]  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-p-Bewertung-von-s-gleich-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die Basis \lm{ \s } ist somit nicht nur ein formales Symbol für „sehr groß“, sondern ein strukturiertes Primexponentenobjekt.'."\n",
                      'Drittens soll die klassische Analysis als Standardprojektion einer feineren superialen Analysis verstanden werden.'."\n".
                    'Die gewöhnlichen Ableitungen und Integrale bleiben erhalten, erscheinen aber als standardisierte Schattenwerte einer reicheren Rechnung.'."\n".
                    'Was der klassische Limes ausblendet, bleibt in der superialen Darstellung als infinitesimale oder aktual unendliche Schicht sichtbar.'."\n",
                      'Die zentrale Problemstellung lautet daher:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Kann eine Analysis formuliert werden, in der Ableitungen und Integrale nicht nur durch Grenzwerte bestimmt sind,'."\n".
                      'sondern durch konkrete aktual unendliche und infinitesimale Rechenelemente, ohne die klassische Analysis zu verlieren?'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Die Zielsetzung dieser Arbeit ist es, einen solchen Rechenrahmen zu entwickeln.'."\n".
                    'Die Superial-Zahlen sollen einen geordneten, algebraisch stabilen'."\n".
                    'und in der Zermelo-Fraenkel-Mengenlehre mit Auswahlaxiom (ZFC)\footnote{\const{BiOrd_g_footnote_text_ZermeloFraenkelMengenlehre}}'."\n".
                    'modellierbaren Zahlenraum bereitstellen,'."\n".
                    'in dem endliche, aktual unendliche und infinitesimale Anteile gemeinsam auftreten können.'."\n".
                    'Die klassische Analysis wird dadurch nicht aufgehoben, sondern als Standardebene'."\n".
                    'innerhalb einer feineren superialen Struktur rekonstruiert.'."\n",
                      'Kurz gesagt:'."\n".
                    'Die Superial-Zahlen versuchen, den alten infinitesimalen Gehalt der Analysis wieder sichtbar zu machen'."\n".
                    '— nicht als unklare Heuristik, sondern als kanonisch normierte, primexponentiell fundierte und algebraisch auswertbare Struktur.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:HauptergebnisseUebersicht'),
                    )),
                )
          ); ?>

          
          <!--  • Hauptergebnisse in der Übersicht  -->
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Einleitung:HauptergebnisseUebersicht',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:ProblemstellungZielsetzung', type => 'back'),
                    )),
                  
                  /* array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                'Hauptergebnisse in der Übersicht', subline =>
                  '')), */
                  array( 'text', array( text => array(
                    'Aus der in der Problemstellung beschriebenen Zielsetzung ergeben sich die folgenden zentralen Ergebnisse der Theorie.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '1. Kanonische Primexponentenidentifikation von \lm{ ω }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Der Beweis der \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} zeigt, dass das von-Neumann-Ordinal \lm{ ω }'."\n".
                    'kanonisch mit dem vollständigen einpotenzigen \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:NotationsvereinbarungPrimexponentenprodukt}{Einheits-Primexponentenprodukt}'."\n".
                    'aller endlichen Primzahlen identifiziert werden kann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  \equiv_{kan}  ω\overline{\#}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-equiv-kan-MengenPrimfakultaet-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Zugleich wird die Primexponentenprodukt-Notation eingeführt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω\overline{\#}  =  \prodx_{ p \in \mathbb{P} }  p  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot \cdots)_{\#}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-Mengen-Primfakultaet-Def-Produkt-alle-p}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit gelten die vereinbarten Kurzschreibweisen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  =  ω\overline{\#}  =  \prodx_{ p \in \mathbb{P} }  p  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimzahlen}', label_incr => false),
                      array( display => 'on',  latex => '{  ω  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots)_{\#}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimfakultaet-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Schreibweisen bedeuten keine gewöhnliche extensionale Gleichheit des von-Neumann-Ordinals'."\n".
                    'mit einem klassischen unendlichen Produkt,'."\n".
                    'sondern die kanonische Identifikation von \lm{ ω } mit seinem vollständigen Einheits-Primexponentenprodukt.'."\n",
                      'Der Beweiskern liegt dabei in der Bestimmung des lückenlosen Zahlenwertes:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \lpr*( ω\overline{\#} *)  =  ω  =  *\{ 0, 1, 2, 3, 4, 5, \cdots *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-lueckenlose-MengenPrimfakultaet-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Das vollständige Einheits-Primexponentenprodukt erzeugt in seinem Primturm-Potenzraster'."\n".
                    'genau alle endlichen natürlichen Zahlen lückenlos.'."\n".
                    'Oberhalb der endlichen natürlichen Zahlen, im aktual unendlichen Bereich des Primexponenten-Termraums,'."\n".
                    'treten notwendig Lücken auf.'."\n".
                    'Die Identifikation ist daher keine naive Gleichsetzung von \lm{ ω } mit einem gewöhnlichen unendlichen Produkt,'."\n".
                    'sondern die kanonische Identifikation mit diesem deduktiv bestimmten lückenlosen Zahlenwert.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '2. Die superiale Basis \lm{ \s }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Auf Grundlage dieser Identifikation wird die \jump{OM:SupNum:ZFC-Modellkonstruktion}{superiale Basis} definiert durch:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Präziser ist \lm{ \s } das vollständige \lm{ ω }-Primexponentenprodukt aller endlichen Primzahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  *( ω\overline{\#} *)_{\#}^{ω}  =  \displaystyle *( \prodx_{p \in \mathbb{P}}  p *)_{\#}^{ω}  =  \displaystyle \prodx_{p \in \mathbb{P}}  p^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit trägt jede endliche Primzahl \lm{ p } im Primexponentenprodukt \lm{ \s } den aktual unendlichen Exponenten \lm{ ω }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  v_{p}*( \s *)  =  ω  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-p-Bewertung-von-s-gleich-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die Basis \lm{ \s } ist damit nicht einfach eine beliebige aktual unendliche Größe, sondern ein arithmetisch normiertes Primexponentenobjekt.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '3. Superial-Zahlen als Stellenwertsystem zur Basis \lm{ \s }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen bilden ein \jump{OM:SupNum:Algebraische-Grundlagen:Formalien:Stellenwertsystem}{Stellenwertsystem}\footnote{\const{SupNum_g_footnote_text_Stellenwertsystem}}'."\n".
                    'zur Basis \lm{ \s }.'."\n".
                    'Eine Superial-Zahl besteht aus Schichten der Form'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a_{k} \cdot \s^{k}  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Positive Potenzen von \lm{ \s } beschreiben aktual unendliche Anteile, die Potenz \lm{ \s^{0} = 1 } beschreibt die endliche Standardschicht,'."\n".
                    'und negative Potenzen von \lm{ \s } beschreiben infinitesimale Anteile.'."\n",
                      'Damit entsteht ein geordneter Zahlenraum, in dem endliche, aktual unendliche und infinitesimale Bestandteile'."\n".
                    'in einer gemeinsamen algebraischen Struktur auftreten.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '4. Zentrale Normalform der Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Superial-Zahlen werden als endliche Schichtsummen zur Basis \lm{ \s } dargestellt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x  =  \sum_{ m \ge k \in \mathbb{Z} }^{m}  a_{k} \cdot \s^{k}  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei ist \lm{ m \in \mathbb{Z} }, der größte aller endlichen Indizes der Koeffizienten \lm{ a_{k} } die von Null verschieden sind,'."\n".
                    'und die Koeffizienten stammen aus dem Bereich der sinnvollen Koeffizienten, zu denen wir noch kommen'."\n",
                      'Die Potenz \lm{ \s^{0} = 1 } bildet die endliche Standardschicht. Potenzen \lm{ \s^{k} } mit \lm{ k > 0 }'."\n".
                    'beschreiben aktual unendliche Schichten, Potenzen \lm{ \s^{k} } mit \lm{ k < 0 } infinitesimale Schichten.'."\n",
                      'Die größte nichtverschwindende Schicht bestimmt die Größenordnung der Superial-Zahl.'."\n".
                    'Dadurch werden endliche, aktual unendliche und infinitesimale Bestandteile nicht vermischt,'."\n".
                    'sondern in einer geordneten Stellenwertstruktur getrennt.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '5. ZFC-interne Modellkonstruktion', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen werden als ZFC-interne definitorische \jump{OM:SupNum:ZFC-Modellkonstruktion}{Modellkonstruktion}'."\n".
                    'formuliert.'."\n".
                    'Die Axiome der Zermelo-Fraenkel-Mengenlehre mit Auswahlaxiom (ZFC)\footnote{\const{BiOrd_g_footnote_text_ZermeloFraenkelMengenlehre}}'."\n".
                    'werden \jump{OM:SupNum:ZFC-Modellkonstruktion:Vortext:KonservativeErweiterung}{nicht verändert};'."\n".
                    'vielmehr wird innerhalb des von Neumannschen Universums'."\n".
                    'eine zusätzliche strukturierte Rechenumgebung definiert.'."\n",
                      'Die Modellkonstruktion verwendet insbesondere Hahn-Reihen, lexikographische Ordnung'."\n".
                    'und verallgemeinerte p-adische Schichtbewertungen.'."\n".
                    'Dadurch erhält man einen geordneten und bewerteten algebraischen Rechenraum, in dem Addition,'."\n".
                    'Multiplikation, Ordnung, Division und Schichtstruktur wohldefiniert zusammenwirken.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '6. Algebraische Zahlen als sinnvolle Koeffizienten', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ein zentrales Ergebnis ist die Einbettung der reell algebraischen Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
                    'als \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvolle Koeffizienten} der Superial-Zahlen.'."\n",
                      'Eine Zahl \lm{ a } ist ein sinnvoller Koeffizient, wenn sie mit der superialen Basis'."\n".
                    'zu einer ganzen superialen Zahl skaliert werden kann'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a \cdot \s  \in  \mathbb{S}_{\Z,\{ 1 \}}  \;\; ,  }',
                                          label_text => '\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-reell-algebra-Zahlen-mal-s-in-ganzen-SupZahlen}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'wobei nur der Koeffizient der ersten unendlichen Schicht ungleich Null sein darf.'."\n",
                      'Für rationale Zahlen ergibt sich diese Eigenschaft aus endlicher Teilbarkeit.'."\n".
                    'Durch den Beweis der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung}'."\n".
                    'und die darauf aufbauenden Argumente wird diese Ganzzahligkeit auf Radikale,'."\n".
                    '\jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Alle-Radikalformen-sinnvolle-Koeffizienten-SZ}{Radikalformen}'."\n".
                    'und schließlich auf alle reell algebraischen Zahlen erweitert.'."\n",
                      'Damit werden die reell algebraischen Zahlen im Produkt mit \lm{ \s } zu aktual unendlich ganzen Größen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '7. Reelle Zahlen in der superialen Darstellung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Innerhalb der Superial-Zahlen werden die reellen Zahlen nicht unterschiedslos'."\n".
                    'als eine einheitliche Koeffizientenklasse behandelt.'."\n".
                    'Vielmehr trennt sie die Theorie in reell algebraische und transzendente Zahlen.'."\n",
                      'Die reell algebraischen Zahlen bilden sinnvolle Koeffizienten der Superial-Zahlen.'."\n".
                    'Transzendente Zahlen wie \lm{ \e } und \lm{ π } nehmen dagegen eine andere Rolle ein.'."\n".
                    'Sie erscheinen nicht einfach als einzelne algebraische Koeffizienten,'."\n".
                    'sondern benötigen eine mehrschichtige superiale Darstellung.'."\n",
                      'In dieser Darstellung besitzt die endliche Standardschicht einen reell algebraischen Wert,'."\n".
                    'zugleich können aber auch negative, infinitesimale Schichten auftreten.'."\n".
                    'Damit werden transzendente Zahlen nicht ausgeschlossen, sondern feiner innerlich strukturiert:'."\n".
                    'Ihre klassische reelle Erscheinung ist die Standardschicht,'."\n".
                    'während ihre superiale Struktur zusätzliche infinitesimale Anteile enthält.'."\n",
                      'Diese Unterscheidung bereitet insbesondere die spätere Behandlung von \lm{ \e_{\s} }, \lm{ π_{\s} }'."\n".
                    'und weiteren transzendenten Zahlen vor.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '8. Ableitungen mit normierter infinitesimaler Schrittweite', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Superial-Analysis verwendet die ausgezeichnete infinitesimale Schrittweite:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{-1}  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dadurch wird die \jump{OM:SupNum:Ableitungen-Integrale}{Ableitung} als konkreter superialer Differenzenquotient formuliert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathcal{D}_{\s} f(x)  =  \frac{ f( x + \s^{-1} ) - f(x) }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:StandardisierungAbleitungIntegral:Equ-Def-Ds-Ableitung-mit-s-hoch-minus-Eins-Kurznotation}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Für \lm{ f(x) = x^{2} } ergibt sich:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathcal{D}_{\s} f(x)  =  2 x + \s^{-1}  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Der klassische Ableitungswert entsteht durch Standardisierung:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \operatorname{std}*( 2 x + \s^{-1} *)  =  2 x  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit bleibt der infinitesimale Rest in der superialen Rechnung sichtbar,'."\n".
                    'während die klassische Analysis als Standardebene erhalten bleibt.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '9. Integrale als aktual unendliche Summen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Auch \jump{OM:SupNum:Ableitungen-Integrale}{Integrale} werden in der Superial-Analysis nicht nur als Grenzwerte verstanden,'."\n".
                    'sondern als aktual unendliche Summen über ein infinitesimales diskretes Raster,'."\n".
                    'das die ganzen Superial-Zahlen ermöglichen.'."\n",
                      'Die Schrittweite ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{-1}  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Ein Intervall der Länge \lm{ 1 } enthält entsprechend \lm{ \s } normierte infinitesimale ganzzahlige Schritte.'."\n".
                    'Das Integral wird dadurch als Summe über diese Schritte formuliert.'."\n".
                    'Die klassische Integralrechnung erscheint wiederum als Standardisierung der superialen Summenstruktur.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '10. Erzeugungsanzahl als Ergänzung zur Mächtigkeit', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Neben der klassischen Mächtigkeit führt die Theorie die \jump{OM:SupNum:Algebraische-Grundlagen:Erzeugungsanzahl}{Erzeugungsanzahl} ein.'."\n".
                    'Sie misst nicht nur, ob zwei Mengen gleichmächtig sind,'."\n".
                    'sondern wie ihre Elemente relativ zur vollständigen Induktion erzeugt werden.'."\n",
                      'Die Erzeugungsanzahl einer Menge \lm{ A } wird notiert als:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \overline{\#}_{\mathrm{erz}}*( A *)  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'oder kurz:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \overline{\#} A   }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Sie ergänzt die Kardinalität um einen erzeugungskombinatorischen und ordinalen Aspekt.'."\n".
                    'Dadurch können unendliche Mengen feiner unterschieden werden, als es durch bloße Bijektivität möglich ist.'."\n",
                      'Die Erzeugungsanzahl steht dabei direkt mit der Erzeugungssumme'."\n".
                    'in Verbindung.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '11. Aktual unendliche Summen als neue Rechenobjekte', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen machen nicht nur infinitesimale Differenzen und Integrale sichtbar,'."\n".
                    'sondern eröffnen auch eine neue Betrachtung aktual unendlicher Summen,'."\n".
                    'die in der klassischen Analysis'."\n".
                    'nur indirekt über Grenzwerte, Reihenentwicklungen, Integralwerte oder gar nicht erscheinen'."\n",
                      'Eine zentrale Rolle spielt dabei die Erzeugungsstruktur.'."\n".
                    'Wird über ein erzeugtes Mengenintervall \lm{ I } die konstante Funktion \lm{ 1 } mit der'."\n".
                    '\jump{OM:SupNum:Algebraische-Grundlagen:Erzeugungssumme}{Erzeugungssumme} summiert,'."\n".
                    'so entsteht nicht bloß eine Kardinalitätsaussage, sondern die Erzeugungsanzahl'."\n".
                    'dieses Intervalls:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ x \in I }  1  =  \overline{\#}_{\mathrm{erz}}*( I *)  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Aktual unendliche Summen zählen damit nicht nur Elemente, sondern bilden die Erzeugungslänge'."\n".
                    'und die Ordnung des zugrunde liegenden Intervalls ab.'."\n",
                      'Darüber hinaus können auch Summen betrachtet werden, die in der klassischen Analysis nicht unmittelbar'."\n".
                    'als Grenzwerte zugänglich sind.'."\n".
                    'Dazu gehören etwa Summen über dicht liegende abzählbare Mengen wie die reell algebraischen Zahlen'."\n".
                    'in einem Intervall.'."\n".
                    'Klassisch besitzt eine \jump{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen}{solche Summe}'."\n".
                    'ohne zusätzliche Ordnung oder Summationsvorschrift im Allgemeinen keinen kanonischen Wert.'."\n".
                    'In der Superial-Theorie kann sie dagegen als erzeugungsgeordnete aktual unendliche Summe untersucht werden.'."\n",
                      'So wird zum Beispiel die Frage nach einer Summe aller reell algebraischen Zahlen von \lm{ 0 } bis ohne \lm{ x }'."\n".
                    'nicht als gewöhnliche Grenzwertreihe verstanden, sondern als Summe entlang einer kanonischen Erzeugungsstruktur:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ a \in [ 0, x [_{\mathbb{A}_{\R}} }  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 \cdot ω } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Solche Summen sind keine gewöhnlichen Reihen über beliebige Aufzählungen,'."\n".
                    'sondern neue superiale Summenobjekte,'."\n".
                    'deren Bedeutung aus der Erzeugungsstruktur des jeweiligen Zahlenbereichs stammt.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '12. Neue Perspektive auf Kontinuum und Kontinuumshypothese', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen führen neben der klassischen Mächtigkeit zusätzliche Strukturbegriffe ein:'."\n".
                    'Schichten, infinitesimale Raster, Erzeugungsanzahl und primexponentielle Fundierung.'."\n",
                      'Dadurch kann die Frage nach dem Kontinuum nicht nur kardinal,'."\n".
                    'sondern auch erzeugungs- und rasterstrukturell betrachtet werden.'."\n".
                    'Die Theorie behauptet dabei keinen unmittelbaren Beweis und keine unmittelbare Widerlegung'."\n".
                    'der Kontinuumshypothese.'."\n".
                    'Sie eröffnet jedoch eine neue Perspektive darauf, was zwischen abzählbarer Erzeugung,'."\n".
                    'reeller Dichte, infinitesimaler Struktur und aktual unendlichem Raster unterschieden werden kann.'."\n",
                      'Auch das Kontinuum als Eigenschaft einer kontinuierlichen, also ununterbrochen'."\n".
                    '\jump{OM:SupNum:Arithmetische-Struktur-Geometrie}{zusammenhängenden Geometrie},'."\n".
                    'ohne und mit infinitesimalen Anteilen, ist Gegenstand und wird differenziert untersucht.'."\n".
                    'Die gefundene aktual unendliche Teilungsperspektive auf Basis der endlichen Primzahlen führt direkt'."\n".
                    'über geometrische Überlegungen zur Definition der superialen Basis \lm{ \s }.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '13. Erweiterung klassischer Zahlstrukturen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Aus der superialen Basis ergeben sich natürliche Superial-Zahlen, ganze Superial-Zahlen,'."\n".
                    'infinitesimale Einheiten, aktual unendliche Einheiten und superiale Primzahlen.'."\n",
                      'Viele bekannte Eigenschaften endlicher Zahlen lassen sich dadurch in das aktual Unendliche'."\n".
                    'und das aktual Infinitesimale fortsetzen:'."\n".
                    'Teilbarkeit, Ganzzahligkeit, Gerade/Ungerade, Primartigkeit, Ordnung'."\n".
                    'und algebraische Operationen erhalten superiale Entsprechungen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                '14. Klassische Analysis als Standardebene', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die klassische Analysis bleibt innerhalb der Superial-Zahlen erhalten.'."\n".
                    'Ihre Werte erscheinen als Standardwerte superialer Ausdrücke.'."\n",
                      'Was im klassischen Limes verschwindet, bleibt in der Superial-Rechnung als infinitesimale'."\n".
                    'oder aktual unendliche Schicht sichtbar. Dadurch wird die klassische Analysis nicht ersetzt,'."\n".
                    'sondern in eine feinere Struktur eingebettet.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>

                'Zusammenfassung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Hauptergebnisse der Theorie lassen sich in einer Kette zusammenfassen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  \equiv_{kan}  ω\overline{\#}  =  \prodx_{p \in \mathbb{P}} p  }',
                                          label_text => '', label_incr => false),
                      array( display => 'on',  latex => '{  \s  =  ω^{ω}  =  \displaystyle \prodx_{p \in \mathbb{P}}  p^{ω}  }',
                                          label_text => '', label_incr => false),
                      array( display => 'on',  latex => '{  v_{p}*( \s *)  =  ω  }',
                                          label_text => '', label_incr => false),
                      array( display => 'on',  latex => '{  \mathcal{D}_{\s} f(x)  =  \frac{ f( x + \s^{-1} ) - f(x) }{ \s^{-1} }  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit entsteht ein ZFC-intern modellierbarer, geordneter und bewerteter Zahlenraum, in dem endliche,'."\n".
                    'aktual unendliche und infinitesimale Schichten gemeinsam algebraisch behandelt werden können.'."\n",
                      'Die Superial-Zahlen eröffnen darüber hinaus neue Untersuchungsrichtungen:'."\n".
                    'aktual unendliche Summen können als eigene Rechenobjekte betrachtet werden, und Fragen nach Kontinuum,'."\n".
                    'Erzeugung und Mächtigkeit können durch Schichtstruktur und Erzeugungsanzahl feiner differenziert werden.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:KurzdefinitionSuperialZahlen'),
                    )),
                )
          ); ?>

          
          <!--  • Kurzdefinition der Superial-Zahlen  -->
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Einleitung:KurzdefinitionSuperialZahlen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:HauptergebnisseUebersicht', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen bilden ein transfinites Stellenwertsystem zur aktual unendlichen Basis \lm{ \s }.'."\n".
                    'Diese Basis ist nicht eine beliebig gewählte unendlich große Zahl,'."\n".
                    'sondern wird aus der kanonischen Primexponentenstruktur aller endlichen Primzahlen gewonnen.'."\n",
                      'Aus der'."\n".
                    '\jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung}'."\n".
                    'ergibt sich die kanonische Identifikation'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  \equiv_{kan}  ω\overline{\#}  =  \prodx_{p \in \mathbb{P}}  p  \;\; .  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-equiv-kan-MengenPrimfakultaet-omega}/\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-equiv-kan-Produkt-alle-p}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei bezeichnet \lm{ \prodx } kein gewöhnliches Produkt im klassischen Sinn'."\n".
                    'und insbesondere kein analytisches unendliches Produkt, sondern ein Primexponentenprodukt:'."\n".
                    'Jede endliche Primzahl \lm{ p } kommt darin genau einmal vor.'."\n".
                    'Auf dieser Grundlage wird die superiale Basis definiert durch'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  *( ω\overline{\#} *)_{\#}^{ω}  =  \displaystyle *( \prodx_{p \in \mathbb{P}}  p *)_{\#}^{ω}  =  \displaystyle \prodx_{p \in \mathbb{P}}  p^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit gilt für jede endliche Primzahl \lm{ p }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  v_{p}*( \s *)  =  ω  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-p-Bewertung-von-s-gleich-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die Basis \lm{ \s } enthält also jede endliche Primzahl in aktual unendlicher Exponentenlänge.'."\n".
                    'Genau dadurch kann \lm{ \s } endliche Nenner, Wurzeln'."\n".
                    'und allgemeiner algebraische Primexponentenstrukturen aufnehmen.'."\n",
                      'Die \jump{OM:SupNum:ZFC-Modellkonstruktion}{ZFC-Modellkonstruktion} macht diese Idee formal präzise.'."\n".
                    'Das aktual unendliche Primexponentenprodukt wird dort nicht als'."\n".
                    'gewöhnliches unendliches Produkt behandelt, sondern über einen Hahn-Reihen-Körper'."\n".
                    'mit einer Familie verallgemeinerter \lm{ p }-adischer Bewertungen operationalisiert.'."\n".
                    'Der Körper der Superial-Zahlen wird definiert als'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  :=  \mathbb{A}_{\R}\!*(*( \s^{\mathbb{Z}} *)*)  }',
                                               label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-S-ist-Hahnreihe-mit-Wertgruppe-Z}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei bezeichnet \lm{ \mathbb{A}_{\R} } den Körper der reell algebraischen Zahlen'."\n".
                    'und \lm{ \mathbb{Z} } die geordnete Wertegruppe der superialen Schichten.'."\n".
                    'Eine Superial-Zahl ist also eine formale Reihe der Gestalt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x  =  \sum_{ k \in \mathbb{Z} }  a_{k} \cdot \s^{k}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'mit Koeffizienten'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a_{k}  \in  \mathbb{A}_{\R}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Träger'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \supp( x )  :=  *\{  k \in \mathbb{Z}  *|*  a_{k} \neq 0  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'ist nach oben beschränkt.'."\n".
                    'Es gibt also eine höchste besetzte Schicht.'."\n".
                    'Nach unten kann eine Superial-Zahl dagegen infinitesimale Fortsetzungen besitzen.'."\n".
                    'Anschaulich kann man eine Superial-Zahl daher schreiben als'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x  =  a_{n} \s^{n} + a_{n - 1} \s^{n - 1} + \cdots \\\ \qquad\qquad \cdots + a_{1} \s + a_{0} + a_{-1} \s^{-1} + a_{-2} \s^{-2} + \cdots  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Potenzen von \lm{ \s } bilden die Schichten des superialen Stellenwertsystems.'."\n".
                    'Positive Potenzen beschreiben aktual unendliche Größen,'."\n".
                    'die Null-Schicht beschreibt den endlichen Hauptwert,'."\n".
                    'und negative Potenzen beschreiben infinitesimale Anteile:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{1}  =  \s  }'),
                      array( display => 'on',  latex => '{  \s^{0}  =  1  }'),
                      array( display => 'on',  latex => '{  \s^{-1}  =  \frac{ 1 }{ \s }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Zahl \lm{ \s^{-1} } ist das normierte superiale Infinitesimal.'."\n".
                    'Sie bildet die Schrittweite, die in der superialen Analysis an die Stelle'."\n".
                    'des klassischen Grenzübergangs treten kann.'."\n",
                      'Zur besseren Lesbarkeit kann eine Superial-Zahl später auch in'."\n".
                    '\jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertschreibweise}'."\n".
                    'mit spitzen Klammern notiert werden.'."\n".
                    'Die vorstehende formale Reihe kann dann schematisch geschrieben werden als'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x  =  *〈 a_{n} *〉_{n}*〈 a_{n - 1} *〉_{n - 1}\cdots*〈 a_{1} *〉*〈 a_{0} *〉.*〈 a_{-1} *〉*〈 a_{-2} *〉\cdots  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Bei fortlaufender Stellenwertschreibweise können die Indizes entfallen;'."\n".
                    'sie werden nur gesetzt, wenn die Schicht ausdrücklich kenntlich gemacht werden soll.'."\n".
                    'Der Punkt markiert die Stelle unmittelbar hinter der Null-Schicht,'."\n".
                    'also den Übergang zu den infinitesimalen Schichten.'."\n".
                    'Ein Index nach einer spitzen Klammer gibt ihre Schicht explizit an, falls diese nicht erkennbar ist, also:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *〈 a_{k} *〉_{k}  =  a_{k} \cdot \s^{k}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Ordnung der Superial-Zahlen ist die lexikographische Ordnung des Stellenwertsystems.'."\n".
                    'Entscheidend ist immer die höchste Schicht, in der sich zwei Zahlen unterscheiden.'."\n".
                    'Für eine von Null verschiedene Superial-Zahl wird diese höchste besetzte Schicht durch die Schichtbewertung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \operatorname{ord}_{\s}( x )  :=  \max( \supp( x ) )  }'),
                    ))),
                  array( 'text', array( text => array(
                    'bestimmt.'."\n".
                    'Ist der führende Koeffizient positiv, so ist die Zahl positiv;'."\n".
                    'ist er negativ, so ist die Zahl negativ.'."\n".
                    'Infinitesimale Anteile können daher niemals den Wert einer höheren Schicht umkehren.'."\n",
                      'Formal wird die Superial-Struktur in der ZFC-Modellkonstruktion als geordneter bewerteter Körper beschrieben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathfrak{S}  :=  *〈 \mathbb{S}, +, \cdot, 0, 1, \leq, \operatorname{ord}_{\s}, *( v_{p} *)_{p \in \mathbb{P}} *〉  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-S-geordnetes-Tupel}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die Addition erfolgt schichtweise, die Multiplikation wie in einem Stellenwertsystem durch Faltung der Schichten.'."\n".
                    'Da die Konstruktion als Hahn-Reihen-Körper über einem Körper von Koeffizienten erfolgt,'."\n".
                    'besitzt \lm{ \mathbb{S} } die Struktur eines geordneten Körpers.'."\n",
                      'Die ganzen Superial-Zahlen \lm{ \mathbb{S}_{\Z} } bilden innerhalb von \lm{ \mathbb{S} } den Bereich derjenigen Superial-Zahlen,'."\n".
                    'die keine nichtverschwindenden infinitesimalen Anteile besitzen'."\n".
                    'und deren Null-Schicht klassisch ganzzahlig ist.'."\n".
                    'Nach der Bestimmung der sinnvollen Koeffizienten durch die'."\n".
                    '\jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Algebraischen-Koeffizienten-Vermutung}{Algebraische-Koeffizienten-Vermutung}'."\n".
                    'und die'."\n".
                    '\jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Superialen-Transzendenz-Vermutung}{Superiale-Transzendenz-Vermutung}'."\n".
                    'ergibt sich für die ganzen Superial-Zahlen die Form'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{\Z}  =  *\{ z + \sum_{ k = 1 }^{ m } a_{k} \s^{k}  *|*  z \in \mathbb{Z} ,\; m \in \mathbb{N} ,\; a_{k} \in \mathbb{A}_{\R} *\}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Null-Schicht der ganzen Superial-Zahlen enthält also nur klassische ganze Zahlen.'."\n".
                    'Positive Schichten dürfen reell algebraische Koeffizienten tragen.'."\n".
                    'Negative Schichten müssen bei ganzen Superial-Zahlen verschwinden.'."\n",
                      'Damit lassen sich die Superial-Zahlen knapp zusammenfassen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Kurz', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  :=  \mathbb{A}_{\R}\!*(*( \s^{\mathbb{Z}} *)*)  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-S-ist-Hahnreihe-mit-Wertgruppe-Z}', label_incr => false),
                      array( display => 'on',  latex => '{  v_{p}*( \s *)  =  ω  \;\; ,  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-p-Bewertung-von-s-gleich-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'für alle endlichen Primzahlen \lm{ p }.'."\n",
                      'Die Superial-Zahlen sind somit ein ZFC-intern definierbarer,'."\n".
                    'geordneter Hahn-Reihen-Körper mit aktual unendlicher Primexponentenbasis \lm{ \s }.'."\n".
                    'Sie erweitern die endlichen reell algebraischen Zahlen um aktual unendliche'."\n".
                    'und infinitesimale Schichten und stellen dadurch einen normierten Rechenraum'."\n".
                    'für eine transfinite Analysis bereit.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele'),
                    )),
                )
          ); ?>

          
          <!--  • Illustrierende Rechenbeispiele  -->
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele',
              'Funktionsweise in der Praxis', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:KurzdefinitionSuperialZahlen', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Die folgenden Beispiele dienen zur ersten Orientierung.'."\n".
                    'Sie sollen zeigen, wie die Superial-Zahlen als Stellenwertsystem'."\n".
                    'zur aktual unendlichen Basis \lm{ \s } gelesen und verwendet werden können.'."\n".
                    'Die formalen Definitionen, Rechenregeln und Beweise folgen in den späteren Kapiteln.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:X', text =>

                '\italic{Inhalt}', subline =>
                  '')),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:SuperialeBasisInfinitesimal'),
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:SchichtenSuperialZahl'),
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:StellenwertschreibweiseSpitzenKlammern'),
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:GanzeUndNichtganzeSuperialZahlen'),
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:SinnvolleKoeffizienten'),
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispielSuperialenAbleitungIntegral'),
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Beispiele-Erzeugungssummen-Erzeugungsanzahlen'),
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:ZusammenfassungBeispiele'),
                    )),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:SuperialeBasisInfinitesimal', text =>
                                           
                'Die superiale Basis und ihr Infinitesimal', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die superiale Basis \lm{ \s } ist aktual unendlich groß.'."\n".
                    'Ihr Kehrwert'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Bas', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{-1}  =  \frac{ 1 }{ \s }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'ist daher ein normiertes infinitesimales Element.'."\n".
                    'Für jede endliche natürliche Zahl \lm{ n \in \mathbb{N} } gilt anschaulich:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  >  n  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und zugleich'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Bas', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  0  <  \s^{-1}  <  \frac{ 1 }{ n }  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit wird \lm{ \s^{-1} } zur natürlichen infinitesimalen Schrittweite der superialen Analysis.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:SchichtenSuperialZahl', text =>
                                           
                'Schichten einer Superial-Zahl', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Eine einfache Superial-Zahl kann zum Beispiel die Form'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sch', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x  =  2 \, \s^{2} + \sqrt{2} \, \s + 3 + \frac{ 1 }{ 2 } \, \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'haben.'."\n".
                    'Die einzelnen Summanden liegen in verschiedenen Schichten.'."\n".
                    'Der Term'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sch', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2 \, \s^{2}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'gehört zur \lm{ \s^{2} }-Schicht, der Term'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sch', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2} \, \s  }'),
                    ))),
                  array( 'text', array( text => array(
                    'zur \lm{ \s^{1} }-Schicht, die Zahl'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sch', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  3  }'),
                    ))),
                  array( 'text', array( text => array(
                    'zur Null-Schicht und der Term'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sch', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ 1 }{ 2 } \, \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'zur ersten infinitesimalen Schicht.'."\n",
                      'Die höchste besetzte Schicht bestimmt die Größenordnung der Superial-Zahl.'."\n".
                    'In diesem Beispiel ist das die Schicht \lm{ \s^{2} }.'."\n".
                    'Infinitesimale Anteile können den Wert einer höheren Schicht nicht umkehren.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:StellenwertschreibweiseSpitzenKlammern', text =>
                                           
                'Stellenwertschreibweise mit spitzen Klammern', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'In der Stellenwertschreibweise mit spitzen Klammern kann dieselbe Zahl schematisch notiert werden als'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Stel', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x  =  *〈 2 *〉*〈 \sqrt{2} *〉*〈 3 *〉.*〈 \frac{ 1 }{ 2 } *〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Punkt markiert die Stelle unmittelbar hinter der Null-Schicht,'."\n".
                    'also den Übergang zu den infinitesimalen Schichten.'."\n".
                    'Jede spitze Klammer steht für eine einzelne besetzte Schicht.'."\n".
                    'Allgemein bedeutet'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Stel', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *〈 a *〉_{k}  =  a \cdot \s^{k}  \;\; .  }'),
                    ))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:GanzeUndNichtganzeSuperialZahlen', text =>
                                           
                'Ganze und nichtganze Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ein einfaches Beispiel für eine ganze Superial-Zahl ist'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Ganz', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  z  =  \sqrt{2} \, \s^{2} + 3 \, \s + 5  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Zahl besitzt keine negativen Schichten.'."\n".
                    'Ihre Null-Schicht ist eine klassische ganze Zahl,'."\n".
                    'und ihre positiven Schichten tragen reell algebraische Koeffizienten.'."\n".
                    'Daher gilt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Ganz', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  z  \in  \mathbb{S}_{\Z}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dagegen ist'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Ganz', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  y  =  \sqrt{2} \, \s^{2} + 3 \, \s + 5 + \frac{ 1 }{ \s }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'keine ganze Superial-Zahl, weil sie einen nichtverschwindenden infinitesimalen Anteil besitzt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Ganz', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ 1 }{ \s }  =  \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Aber auch'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Ganz', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  y  =  \sqrt{2} \, \s^{2} + 3 \, \s + 5{,}4  }'),
                    ))),
                  array( 'text', array( text => array(
                    'ist keine ganze Superial-Zahl, weil sie im Endlichen gebrochen ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Die Beispiele zeigen den Unterschied zwischen dem gesamten superialen Zahlenraum'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Ganz', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und dem Unterring der ganzen Superial-Zahlen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Ganz', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{\Z}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Im gesamten superialen Zahlenraum dürfen infinitesimale Schichten auftreten.'."\n".
                    'In den ganzen Superial-Zahlen müssen negative Schichten dagegen verschwinden und die endliche Schicht ganzzahlig sein.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:SinnvolleKoeffizienten', text =>
                                           
                'Sinnvolle Koeffizienten', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die aktual unendliche Teilbarkeitsstruktur von \lm{ \s } erklärt,'."\n".
                    'warum auch nichtganzzahlige algebraische Koeffizienten sinnvoll sein können.'."\n".
                    'Da \lm{ \s } jede endliche Primzahl in aktual unendlicher Exponentenlänge enthält,'."\n".
                    'kann \lm{ \s } endliche Nenner absorbieren.'."\n".
                    'So gilt zum Beispiel:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sinn', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ 1 }{ 2 } \, \s  =  \frac{ \s }{ 2 }  \in  \mathbb{S}_{\Z,\{ 1 \}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auch ein irrationaler algebraischer Koeffizient wie \lm{ \sqrt{2} }'."\n".
                    'kann sinnvoll in einer positiven superialen Schicht auftreten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sinn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2} \, \s  \in  \mathbb{S}_{\Z,\{ 1 \}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die späteren Beweise zur \jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Algebraischen-Koeffizienten-Vermutung}{Algebraischen-Koeffizienten-Vermutung}'."\n".
                    'und zur \jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Superialen-Transzendenz-Vermutung}{Superialen-Transzendenz-Vermutung}'."\n".
                    'zeigen allgemein, dass die \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen reellen Koeffizienten der Superial-Zahlen}'."\n".
                    'genau die reell algebraischen Zahlen sind:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sinn', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  =  \mathbb{A}_{\R}  }',
                                          label_text => '\jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:Equ-Ar-ist-gleich-As}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Transzendente reelle Zahlen sind dagegen keine sinnvollen isolierten Koeffizienten'."\n".
                    'einzelner superialer Schichten.'."\n".
                    'Sie benötigen mehrschichtige superiale Darstellungen.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispielSuperialenAbleitungIntegral', text =>

                'Beispiel einer superialen Ableitung und ihres Integrals', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Grundidee der superialen Analysis lässt sich bereits an der Funktion'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f( x )  =  x^{2}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'illustrieren.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispielSuperialenAbleitungIntegral:X', text =>
                  'Superiale Ableitung', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Die superiale Ableitung verwendet nicht einen bloß gedachten Grenzübergang,'."\n".
                    'sondern die feste infinitesimale Schrittweite'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{-1}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Unter Vereinbarung der Strichnotation für die superiale Ableitung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{\s}\'( x )  :=  (\mathcal{D}_{\s} f)( x )  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Notation-superiale-Ableitung}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'gilt daher:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{\s}\'( x )  :=  \frac{ f( x + \s^{-1} ) - f( x ) }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Für'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f( x )  =  x^{2}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'ergibt sich:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{\s}\'( x )  =  \frac{ *( x + \s^{-1} *)^{2} - x^{2} }{ \s^{-1} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Da'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( x + \s^{-1} *)^{2}  =  x^{2} + 2 x \, \s^{-1} + \s^{-2}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'gilt, folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ 2 x \, \s^{-1} + \s^{-2} }{ \s^{-1} }  =  2 x + \s^{-1}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der klassische Ableitungswert'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'( x )  =  \operatorname{std}*( f_{\s}\'( x ) *)  =  2 x  }'),
                    ))),
                  array( 'text', array( text => array(
                    'erscheint also als endlicher Hauptanteil.'."\n".
                    'Zusätzlich bleibt die infinitesimale Spur'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'sichtbar.'."\n".
                    'Sie verschwindet in der klassischen Standardbetrachtung,'."\n".
                    'bleibt aber in der superialen Rechnung erhalten.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispielSuperialenAbleitungIntegral:X', text =>
                  'Superiales Integral', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Nun integrieren wir diese superiale Ableitung über ein allgemeines superial fein unterteiltes Intervall'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ a, b [_{\mathbb{S}_{\Z}^{-1}}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dieses Intervall enthält die Stützstellen von \lm{ a } bis unmittelbar vor \lm{ b } in Schritten der Länge'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{-1}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei bezeichnet'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{\Z}^{-1}  =  *\{  z \cdot \s^{-1}  *|*  z \in \mathbb{S}_{\Z}  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'die um eine Schicht ins Infinitesimale skalierte Menge der ganzen Superial-Zahlen.'."\n",
                      'Für geeignete algebraische Intervallgrenzen \lm{ a < b } enthält das Intervall'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ a, b [_{\mathbb{S}_{\Z}^{-1}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'genau'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  N  =  ( b - a ) \cdot \s  }'),
                    ))),
                  array( 'text', array( text => array(
                    'infinitesimale Schritte beziehungsweise Stützstellen.'."\n".
                    ''))),

                  array( 'text', array( Shape => 'italic', text => array(
                      'In superialen Summen über erzeugte aktual unendliche Indexbereiche'."\n".
                      'schreiben wir aus Gründen der Lesbarkeit meist das gewöhnliche Summenzeichen \lm{ \sum }.'."\n".
                      'Gemeint ist dabei die'."\n".
                      '\jump{OM:SupNum:Algebraische-Grundlagen:Erzeugungssumme}{erzeugungstheoretisch ausgewertete Summe} \lm{ \sumx }.'."\n".
                      'Nur wenn die Erzeugungsstruktur ausdrücklich hervorgehoben werden soll,'."\n".
                      'schreiben wir \lm{ \sumx }.'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Das superiale Integral der superialen Ableitung lautet daher:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  \sum_{ n \in [ a, b [_{\mathbb{S}_{\Z}^{-1}} } \!\!\!  *( 2 n + \s^{-1} *) \cdot \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Ausmultipliziert ergibt sich so:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  2 \, \s^{-1} \cdot \!\!\! \sum_{ n \in [a,b[_{\mathbb{S}_{\Z}^{-1}} }  \!\!\! n  \;\; + \;\;  \s^{-2} \cdot \!\!\! \sum_{ n \in [a,b[_{\mathbb{S}_{\Z}^{-1}} }  \!\!\! 1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die \jump{OM:SupNum:Algebraische-Grundlagen:Erzeugungsanzahl}{Erzeugungsanzahl}'."\n".
                    'der Summanden ist ja \lm{ N }, die Anzahl der Stützstellen, wie oben gezeigt,'."\n".
                    'und so erhalten wir:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ n \in [a,b[_{\mathbb{S}_{\Z}^{-1}} }  \!\!\! 1  =  N  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ n \in [a,b[_{\mathbb{S}_{\Z}^{-1}} }  \!\!\! 1  =  ( b - a ) \cdot \s  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die Summe der Stützstellen gilt dann die skalierte und verschobene \jump{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispielSuperialenAbleitungIntegral:Gausssumme}{Gaußsumme}:'."\n".
                    ''))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispielSuperialenAbleitungIntegral:Gausssumme',
                Title => '\small{Berechnung der skalierten und verschobenen Gaußsumme …}',
                TitleVis => 'Berechnung der skalierten und verschobenen Gaußsumme:', ParagraphList => array(

                  array( 'text', array( text => array(
                    'Die gewöhnliche Gaußsche Summenformel\footnote{\const{BiOrd_g_footnote_text_GaussscheSummenformel}} ist definiert als:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ k = 1 }^{ n }  k  =  \frac{ n \cdot (n + 1) }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Unsere skalierte aber nicht verschobene Gaußsumme beginnt hingegen bei der Null – nicht bei der Eins –'."\n".
                    'und läuft bis zum Schritt oder Stützpunkt der direkt einen vor dem Intervalende liegt.'."\n".
                    'Also läuft sie bis Eins weniger als die Schrittanzahl, folglich bis \lm{ N - 1 }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ n \in [0,b - a[_{\mathbb{S}_{\Z}^{-1}} }  \!\!\! n  =  \sum_{ k = 0 }^{ N - 1 }  k \cdot \s^{-1}  =  \frac{ (N - 1) \cdot N }{ 2 } \cdot \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Unsere verschobene Summe beginnt nun nicht bei Null, sondern beim endlichen Wert \lm{ a }.'."\n".
                    'Wir bekommen also eine Fläche unterhalb unserer Summe dazu, die \lm{ a } hoch'."\n".
                    'und \lm{ N } Schritte breit ist, also \lm{ a \cdot N }.'."\n",
                      'Da'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  N  =  ( b - a ) \cdot \s  }'),
                    ))),
                  array( 'text', array( text => array(
                    'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ n \in [0,b - a[_{\mathbb{S}_{\Z}^{-1}} }  \!\!\! n  =  \frac{ ((( b - a ) \cdot \s) - 1) \cdot ( b - a ) \cdot \s }{ 2 } \cdot \s^{-1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ n \in [0,b - a[_{\mathbb{S}_{\Z}^{-1}} }  \!\!\! n  =  \frac{ ((( b - a ) \cdot \s) - 1) \cdot ( b - a ) }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ n \in [0,b - a[_{\mathbb{S}_{\Z}^{-1}} }  \!\!\! n  =  \frac{ ( b - a )^{2} \cdot \s - ( b - a ) }{ 2 }  }',
                                          label_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispielSuperialenAbleitungIntegral:Gausssumme:Equ-skalierte-Gausssumme', label_text => '\name{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispielSuperialenAbleitungIntegral:Gausssumme:Equ-skalierte-Gausssumme}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'und für die Verschiebung der korrigierende Summand'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a \cdot N  =  a \cdot ( b - a ) \cdot \s  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'sodass wir insgesamt für unsere gesuchte skalierte und verschobene Gaußsumme'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ n \in [a,b[_{\mathbb{S}_{\Z}^{-1}} }  \!\! n  =  a \cdot N  \;\; + \;\;  \!\!\!\!\! \sum_{ n \in [0,b - a[_{\mathbb{S}_{\Z}^{-1}} }  \!\!\! n  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ n \in [a,b[_{\mathbb{S}_{\Z}^{-1}} }  \!\! n  =  a \cdot ( b - a ) \cdot \s \\\ \qquad\qquad\qquad\qquad\quad  \;\; + \;\;  \frac{ ( b - a )^{2} \cdot \s - ( b - a ) }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'erhalten.'."\n",
                    ''))),

                    ))),

                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ n \in [a,b[_{\mathbb{S}_{\Z}^{-1}} }  \!\!\! n  =  a \cdot ( b - a ) \cdot \s + \frac{ ( b - a )^{2} \cdot \s - ( b - a ) }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  \\\ \qquad\qquad\quad 2 \, \s^{-1} *( a \cdot ( b - a ) \cdot \s + \frac{ ( b - a )^{2} \cdot \s - ( b - a ) }{ 2 } *) \\\ \qquad\qquad\qquad + \;\; \s^{-2} \cdot ( b - a ) \cdot \s  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Nun wird vereinfacht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  \\\ \qquad\qquad\quad 2 a \cdot ( b - a ) + \frac{ 2 \, \s^{-1} \cdot ( b - a )^{2} \cdot \s - 2 \, \s^{-1} ( b - a ) }{ 2 } \\\ \qquad\qquad\qquad + \;\; \s^{-2} \cdot ( b - a ) \cdot \s  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  \\\ \qquad\qquad\quad 2 a \cdot ( b - a ) + \frac{ 2 \, \s^{-1} ( b - a )^{2} \cdot \s - 2 \, \s^{-1} \cdot ( b - a ) }{ 2 } \\\ \qquad\qquad\qquad + \;\; \s^{-2} \cdot ( b - a ) \cdot \s  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  \\\ \qquad\qquad\quad 2 a \cdot ( b - a ) + \s^{-1} \cdot ( b - a )^{2} \cdot \s - \s^{-1} \cdot ( b - a ) \\\ \qquad\qquad\qquad + \;\; ( b - a ) \cdot \s^{-1}  }'),
                      array( display => 'on',  latex => '{  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  2 a \cdot ( b − a ) + ( b − a )^{2} \\\ \qquad\qquad\qquad\quad\;\; − ( b − a ) \cdot \s^{−1} + ( b − a ) \cdot \s^{−1}  }',
                                    latex_if_visible => '{  \Leftrightarrow  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  2 a \cdot ( b − a ) + ( b − a )^{2} \\\ \qquad\qquad\qquad\qquad\qquad\;\; − ( b − a ) \cdot \s^{−1} + ( b − a ) \cdot \s^{−1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die beiden infinitesimalen Korrekturterme heben sich exakt auf:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  − ( b − a ) \cdot \s^{−1} + ( b − a ) \cdot \s^{−1}  =  0  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Also bleibt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  2 a \cdot ( b − a ) + (b − a)^{2}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und damit:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  2 a b − 2 a^{2} + (a^{2} − 2 a b + b^{2})  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  − a^{2} + b^{2}  }'),
                      array( display => 'on',  latex => '{  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  b^{2} − a^{2}  }',
                                    latex_if_visible => '{  \Leftrightarrow  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  b^{2} − a^{2}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Da'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f( b ) - f( a )  =  b^{2} − a^{2}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'gilt, erhalten wir insgesamt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathcal{S}_{\s}( f_{\s}\'; a, b )  =  f( b ) - f( a )  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dieses Beispiel zeigt, dass das superiale Integral die superiale Ableitung von'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f( x )  =  x^{2}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'exakt zurückführt.'."\n".
                    'Die infinitesimale Spur'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'in der Ableitung ist dabei kein störender Fehlerterm.'."\n".
                    'Sie ist gerade der Term, der die infinitesimale Korrektur der linken Stützstellensumme ausgleicht.'."\n",
                      'So wird der Zusammenhang von Ableitung und Integral nicht nur als Grenzwertaussage sichtbar,'."\n".
                    'sondern als aktual unendliche Summenidentität über dem Intervall'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Diff', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ a, b [_{\mathbb{S}_{\Z}^{-1}}  \;\; .  }'),
                    ))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Beispiele-Erzeugungssummen-Erzeugungsanzahlen', text =>
 
                'Beispiele für Erzeugungssummen und Erzeugungsanzahlen')),
                  array( 'text', array( text => array(
                    'In unserem vorstehend gezeigten Beispiel zur'."\n".
                    '\jump{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispielSuperialenAbleitungIntegral}{Berechnung eines Integrals}'."\n".
                    'wird in einer Nebenrechnung die'."\n".
                    '\jump{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispielSuperialenAbleitungIntegral:Gausssumme}{skalierte und verschobene Gaußsumme}'."\n".
                    'hergeleitet.'."\n".
                    'Diese Summe und ihre Aspekte sind verbunden mit der'."\n".
                    '\jump{OM:SupNum:Algebraische-Grundlagen:Erzeugungsanzahl}{Erzeugungsanzahl}'."\n".
                    'sowie der \jump{OM:SupNum:Algebraische-Grundlagen:Erzeugungssumme}{Erzeugungssumme}'."\n".
                    'und sollen nachfolgend näher beleuchtet werden.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Beispiele-Erzeugungssummen-Erzeugungsanzahlen:X', text =>
                  'Vom Aufsummieren superial infinitesimaler ganzer Zahlen zur Intervallsumme der reell algebraischen Zahlen')),
                  array( 'text', array( text => array(
                    'Als erstes Anschauungsbeispiel können wir hier beispielhaft zeigen, dass die im vorhergehenden Abschnitt errechnete'."\n".
                    'Gaußsumme (Gaußsche Summenformel\footnote{\const{BiOrd_g_footnote_text_GaussscheSummenformel}}),'."\n".
                    'in Bezug auf die Superial-Zahlen, tiefer beleuchtet bei der Herleitung'."\n".
                    'der Formel \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt},'."\n".
                    'die bei der Berechnung des Integralbeispiels'."\n".
                    'in Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x} genutzt wird,'."\n".
                    'sich auch folgendermaßen beschreiben lässt, wenn wir aus dem vorstehenden Beispiel die Differenz \lm{ b - a } gleich \lm{ x } setzen und ihren Bruch in zwei Teile zerlegen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ n \in [0,b - a[_{\mathbb{S}_{\Z}^{-1}} }  \!\!\! n  =  \frac{ ( b - a )^{2} \cdot \s - ( b - a ) }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispielSuperialenAbleitungIntegral:Gausssumme:Equ-skalierte-Gausssumme}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\! n  =  \frac{ x^{2} \cdot \s }{ 2 } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Summe haben wir, wie gesagt, oben aus einfachen Überlegungen zur Gaußsumme in einer Nebenrechnung entwickelt.'."\n",
                      'Dabei haben die Zahlen der Menge \lm{ \left\lbrack 0, x \right\lbrack_{\mathbb{S}^{-1}_{\Z}} }'."\n".
                    'über die summiert wird, ihre Indizes, selber die Summenstruktur:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x \in \mathbb{A}_{\R} *) *( \forall z \in \mathbb{Z} *)  *[  x + z \cdot \s^{-1}  \in  \mathbb{S}^{-1}_{\Z}  *]  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-ganze-SuperialZahlen}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Wir kommen zum gleichen Ergebnis, wenn wir die Gesamtsumme aus den Details dieser Struktur berechnen,'."\n".
                    'wie wir es im Abschnitt'."\n".
                    '\italic{›\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Summen-zur-Integration-von-2x-plus-supkl-Eins}‹}'."\n".
                    'in allen Einzelheiten tun.'."\n",
                      'In Kurzform gezeigt, können wir die gesuchte Gesamtsumme über die Detailsumme der Indizes umformulieren,'."\n".
                    'wenn wir die Mengen-Intervall-Grenzen genau beachten.'."\n".
                    'Diese Grenzen erkennen wir, wenn wir uns die Indexmenge im Einzelnen auflisten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x[_{\mathbb{S}^{-1}_{\Z}}  =  \\\  \quad *\{  \quad\,  0 \s^{-1}, 1 \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{1}{2} x - 2 \s^{-1},\; \frac{1}{2} x - \s^{-1},\; \frac{1}{2} x,\; \frac{1}{2} x + \s^{-1},\; \frac{1}{2} x + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{2}{3} x - 2 \s^{-1},\; \frac{2}{3} x - \s^{-1},\; \frac{2}{3} x,\; \frac{2}{3} x + \s^{-1},\; \frac{2}{3} x + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, x - 3 \s^{-1}, x - 2 \s^{-1}, x - \s^{-1}   \quad *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen-normiert}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Summieren wir alle Elemente können wir die Summe wie folgt aufsplitten und berechnen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \sumx_{ n \in \mathbb{N} }  *( 0 + n \cdot \s^{-1} *) \\\ \qquad\qquad\quad\;\;  \;\; + \;\;  \!\!\!\! \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  \sumx_{ z \in \mathbb{Z} }  *( a + z \cdot \s^{-1} *) \\\ \qquad\qquad\qquad\quad\,  \;\; + \;\;  \! \sumx_{ z \in \mathbb{Z}^{-} }  \! *( x + z \cdot \s^{-1} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sumx_{ n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \sumx_{ n \in \mathbb{N} }  \! n \cdot \s^{-1} \\\ \qquad\qquad\qquad\qquad\;  \;\; + \;\;  \!\!\!\! \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  *( \sumx_{ z \in \mathbb{Z} }  a  \, +  \sumx_{ z \in \mathbb{Z} }  z \cdot \s^{-1} *) \\\ \qquad\qquad\qquad\qquad\quad\;\;\;\,  \;\; + \;\;  \! \sumx_{ z \in \mathbb{Z}^{-} }  \! x  \, +  \! \sumx_{ z \in \mathbb{Z}^{-} }  \! z \cdot \s^{-1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sumx_{ n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \sumx_{ n \in \mathbb{N} }  \! n \cdot \s^{-1}  +  \! \sumx_{ z \in \mathbb{Z}^{-} }  \! z \cdot \s^{-1}  \;\; + \;\;  \! \sumx_{ z \in \mathbb{Z}^{-} }  \! x \\\ \qquad\qquad\qquad\qquad\;  \;\; + \;\;  \!\!\!\! \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  \sumx_{ z \in \mathbb{Z} }  \! a  \, +  \!\!\!\! \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  \sumx_{ z \in \mathbb{Z} }  \! z \cdot \s^{-1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sumx_{ n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \s^{-1} \cdot \! \sumx_{ z \in \mathbb{Z} }  \! z  \;\; + \;\;  \! \sumx_{ z \in \mathbb{Z}^{-} }  \! x \\\ \qquad\qquad\qquad\qquad\;  \;\; + \;\;  \!\!\!\! \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  \sumx_{ z \in \mathbb{Z} }  \! a  \, +  \!\!\!\! \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  \sumx_{ z \in \mathbb{Z} }  \! z \cdot \s^{-1}  }',
                                          label_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Beispiele-Erzeugungssummen-Erzeugungsanzahlen:Equ-Summe-superial-kleine-ganze-Zahle-von-Null-bis-x-zerlegt', label_text => '\name{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Beispiele-Erzeugungssummen-Erzeugungsanzahlen:Equ-Summe-superial-kleine-ganze-Zahle-von-Null-bis-x-zerlegt}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Aus dieser Zerlegung erkennt man die drei verschiedenen Arten von Beiträgen zur Summe:'."\n".
                    ''))),

                  array( 'bulletlist', array( ListStyle => 'number', bullet_ary => array(
                        'die untere Randfaser bei \lm{ 0 },',
                        'die inneren ganzzahligen Erzeugungsfasern über den reell algebraischen Zwischenwerten \lm{ a },',
                        'die obere Randfaser unmittelbar unterhalb von \lm{ x }.',
                    ))),

                  array( 'text', array( text => array(
                    'Eine solche Erzeugungsfaser besteht aus allen infinitesimal verschobenen Punkten,'."\n".
                    'die über demselben reell algebraischen Hauptwert liegen.'."\n".
                    'Über einem inneren Wert \lm{ a } hat sie die Form'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *\{  a + z \cdot \s^{-1}  *|*  z \in \mathbb{Z}  *\}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'An den Rändern treten dagegen nur einseitige Fasern auf,'."\n".
                    'die entweder über rein negative oder rein natürliche \lm{ z } gehen.'."\n",
                      'Die untere Randfaser (kleine Werte) und die negativen infinitesimalen Anteile der oberen Randfaser (große Werte)'."\n".
                    'verbinden sich zur'."\n".
                    '\jump{OM:SupNum:Algebraische-Grundlagen:Erzeugungssumme:Erzeugungssumme-der-ganzen-Zahlen}{erzeugungshierarchischen Paarungssumme}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ z \in \mathbb{Z} }  z  =  -ω  \;\; .  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Daher gilt für den ersten Summanden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{-1} \cdot \! \sumx_{ z \in \mathbb{Z} }  z  =  -ω \cdot \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die obere Randfaser gilt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \overline{\#}_{\mathrm{erz}}\!*( \mathbb{Z}^{-} *)  =  ω  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Da dort in jedem Summanden der feste Wert \lm{ x } auftritt, erhalten wir'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ z \in \mathbb{Z}^{-} }  x  =  x \cdot ω  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für eine innere ganzzahlige Erzeugungsfaser über einem reell algebraischen Wert \lm{ a } gilt einerseits'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \overline{\#}_{\mathrm{erz}}\!*( \mathbb{Z} *)  =  2 ω  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'also'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ z \in \mathbb{Z} }  a  =  2 a \cdot ω  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Andererseits gilt für die infinitesimalen Verschiebungen innerhalb derselben Faser'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ z \in \mathbb{Z} }  z \cdot \s^{-1}  =  \s^{-1} \cdot \! \sumx_{ z \in \mathbb{Z} }  z  =  -ω \cdot \s^{-1}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit wird die Formel \jumpname{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Beispiele-Erzeugungssummen-Erzeugungsanzahlen:Equ-Summe-superial-kleine-ganze-Zahle-von-Null-bis-x-zerlegt}'."\n".
                    'zu'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  -ω \cdot \s^{-1}  \;\; + \;\;  x \cdot ω \\\ \qquad\qquad\qquad  \;\; + \;\;  2 ω \cdot \!\!\! \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  \!\! a  \;\; - \;\;  ω \cdot \s^{-1} \cdot \!\!\! \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  \!\! 1  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Nun berechnen wir die Erzeugungsanzahl des offenen inneren Intervalls'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \overline{\#}_{\mathrm{erz}}\!*( ]0, x[_{\mathbb{A}_{\R}} *)  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir kennen die Erzeugungsanzahl des halboffenen Intervalls und wissen, dass das offene Intervall ein Element weniger hat:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ a \in [0, x[_{\mathbb{A}_{\R}} }  \!\! 1  =  \overline{\#}_{\mathrm{erz}}\!*( [0,x[_{\mathbb{A}_{\R}} *)  =  \frac{ x \cdot \s }{ 2 ω }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-x}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  \!\! 1  =  \overline{\#}_{\mathrm{erz}}\!*( ]0, x[_{\mathbb{A}_{\R}} *)  =  \frac{ x \cdot \s }{ 2 ω } - 1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Summe der inneren reell algebraischen Stützwerte ergibt sich durch die Symmetrie des Intervalls.'."\n".
                    'Jeder innere Wert \lm{ a } kann mit dem Wert \lm{ x - a } gepaart werden;'."\n".
                    'jedes solche Paar hat die Summe \lm{  x  }.'."\n".
                    'Daher besitzt das innere Intervall den mittleren Wert \lm{ x/2 }.'."\n".
                    'Der mögliche Fixpunkt \lm{ a = x/2 } stört diese Symmetrie nicht,'."\n".
                    'weil er selbst bereits den Mittelwert \lm{ x/2 } besitzt.'."\n".
                    'Also gilt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  \!\! a  =  \frac{ x }{ 2 } \cdot *( \frac{ x \cdot \s }{ 2 ω } - 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit erhalten wir'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 ω } - \frac{ x }{ 2 }  \;\; .  }',
                                          label_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Beispiele-Erzeugungssummen-Erzeugungsanzahlen:Equ-Summe-rationale-Zahlen-bisOhne-x', label_text => '\name{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Beispiele-Erzeugungssummen-Erzeugungsanzahlen:Equ-Summe-rationale-Zahlen-bisOhne-x}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Nun setzen wir beide Werte ein:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! n  =  -ω \cdot \s^{-1}  \;\; + \;\;  x \cdot ω \\\ \qquad\qquad\qquad  \;\; + \;\;  2 ω \cdot *( \frac{ x^{2} \cdot \s }{ 4 ω } - \frac{ x }{ 2 } *) \\\ \qquad\qquad\qquad  \;\; - \;\;  ω \cdot \s^{-1} \cdot *( \frac{ x \cdot \s }{ 2 ω } - 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die beiden letzten Terme vereinfachen sich zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2 ω \cdot *( \frac{ x^{2} \cdot \s }{ 4 ω } - \frac{ x }{ 2 } *)  =  \frac{ x^{2} \cdot \s }{ 2 } - x \cdot ω  }'),
                      array( display => 'on',  latex => '{  -ω \cdot \s^{-1} \cdot *( \frac{ x \cdot \s }{ 2 ω } - 1 *)  =  - \frac{ x }{ 2 } + ω \cdot \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit ergibt sich insgesamt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! n  =  -ω \cdot \s^{-1}  \;\; + \;\;  x \cdot ω \\\ \qquad\qquad\qquad  \;\; + \;\;  \frac{ x^{2} \cdot \s }{ 2 }  \;\; - \;\;  x \cdot ω \\\ \qquad\qquad\qquad  \;\; - \;\;  \frac{ x }{ 2 }  \;\; + \;\;  ω \cdot \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Nun heben sich die erzeugungshierarchischen Randkorrekturen exakt auf:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  -ω \cdot \s^{-1}  \;\; + \;\;  ω \cdot \s^{-1}  =  0  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x \cdot ω  \;\; - \;\;  x \cdot ω  =  0  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Übrig bleibt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! n  =  \frac{ x^{2} \cdot \s }{ 2 } - \frac{ x }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit erhalten wir genau die zuvor aus der skalierten Gaußsumme gewonnene Formel:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! n  =  \frac{ x^{2} \cdot \s - x }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Rechnung zeigt, dass die Formel nicht nur eine umgeschriebene Gaußsumme ist.'."\n".
                    'Sie entsteht zugleich aus der Erzeugungsstruktur des superial fein unterteilten Intervalls:'."\n".
                    'Die Erzeugungsanzahl \lm{ 2 ω } beschreibt die Größe jeder inneren ganzzahligen Erzeugungsfaser,'."\n".
                    'während die erzeugungshierarchische Paarungssumme'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ z \in \mathbb{Z} }  z  =  -ω  \;\; .  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'den signierten infinitesimalen Versatz dieser Faser liefert.'."\n".
                    'Genau dieser Versatz erzeugt den Korrekturterm'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  - \frac{ x }{ 2 }  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'der später beim Integral durch die infinitesimale Spur der superialen Ableitung exakt ausgeglichen wird.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Beispiele-Erzeugungssummen-Erzeugungsanzahlen:X', text =>
                  'Intervallsumme der reell algebraischen Zahlen')),
                  array( 'text', array( text => array(
                    'Als Nebenresultat erhalten wir zugleich die Summe aller reell algebraischen Zahlen'."\n".
                    'von der Null bis ausschließlich \lm{ x }'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ a \in ]0, x[_{\mathbb{A}_{\R}} }  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 ω } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Beispiele-Erzeugungssummen-Erzeugungsanzahlen:Equ-Summe-rationale-Zahlen-bisOhne-x}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sumx_{ a \in [ 0, x [_{\mathbb{A}_{\R}}}  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 ω } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sumx_{ a \in [ 0, x ]_{\mathbb{A}_{\R}}}  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 ω } - \frac{ x }{ 2 } + x  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sumx_{ a \in [ 0, x ]_{\mathbb{A}_{\R}}}  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 ω } + \frac{ x }{ 2 }  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'aus der wir vorstehend auch die Summe aller reell algebraischen Zahlen von der Null bis einschließlich \lm{ x }'."\n".
                    'herleiten konnten.'."\n".
                    'Die Summe \jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}'."\n".
                    'wird in der Arbeit auch im Abschnitt \italic{›\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Summe-aller-Koeffizienten-von-Null-bis-ausschliesslich-x}‹}'."\n".
                    'berechnet.'."\n",
                      'Diese Beispiele zeigen, dass aktual unendliche Erzeugungssummen im Rahmen der Superial-Zahlen'."\n".
                    'explizit als Zahlenwerte auftreten können, obwohl sie selber nicht unbedingt'."\n".
                    'zur Menge der Superial-Zahlen gehören.'."\n".
                    'Insbesondere werden sowohl Erzeugungsanzahlen von Intervallen reell algebraischer Zahlen'."\n".
                    'als auch erzeugungshierarchische Summenwerte wie'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{ z \in \mathbb{Z} }  z  =  -ω  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'arithmetisch wirksam.'."\n".
                    'Sie sind nicht nur formale Zusatzgrößen, sondern bestimmen konkrete Korrekturterme'."\n".
                    'in der superialen Integralrechnung.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:ZusammenfassungBeispiele', text =>
                                           
                'Zusammenfassung der Beispiele', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Beispiele zeigen die Grundidee der Superial-Zahlen:'."\n".
                    'Endliche, aktual unendliche und infinitesimale Anteile werden'."\n".
                    'in einem gemeinsamen Stellenwertsystem dargestellt.'."\n".
                    'Die Basis'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Zusa', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  *( ω\overline{\#} *)_{\#}^{ω}  =  \displaystyle *( \prodx_{p \in \mathbb{P}}  p *)_{\#}^{ω}  =  \displaystyle \prodx_{p \in \mathbb{P}}  p^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'trägt die aktual unendliche Primexponentenstruktur, während'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Zusa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'die normierte infinitesimal kleine Einheit der superialen Analysis bildet.'."\n",
                      'Zugleich wird sichtbar, warum die Superial-Zahlen als Zahlentheorie der Analysis'."\n".
                    'verstanden werden können:'."\n".
                    'Ableitungen und Integrale erscheinen nicht nur als Grenzprozesse,'."\n".
                    'sondern als arithmetisch strukturierte Rechnungen mit aktual unendlichen Summen,'."\n".
                    'infinitesimalen Schrittweiten und klar bestimmten Koeffizienten.'."\n",
                      'Die Beispiele zu den Erzeugungssummen zeigen darüber hinaus,'."\n".
                    'dass aktual unendliche Summen selbst zu neuen Rechenobjekten werden.'."\n".
                    'Wird über ein erzeugtes Intervall summiert, so beschreibt die Summe'."\n".
                    'nicht nur eine klassische Kardinalität, sondern eine Erzeugungsanzahl.'."\n".
                    'In dieser Form kann die Erzeugungsstruktur einer Menge arithmetisch sichtbar gemacht werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Zusa', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sumx_{x\in I}  1  =  \overline{\#}_{\mathrm{erz}}( I )  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit ergänzt die Erzeugungsanzahl die klassische Mächtigkeit um eine feinere strukturelle Information:'."\n".
                    'Sie fragt nicht nur, ob zwei Mengen gleichmächtig sind,'."\n".
                    'sondern wie ihre Elemente innerhalb der superialen Struktur erzeugt und summiert werden.'."\n",
                      'Gerade dadurch entstehen neue Perspektiven auf aktual unendliche Summen,'."\n".
                    'auf Intervalle reell algebraischer Zahlen und auf den Zusammenhang von Analysis,'."\n".
                    'Ordnung und Erzeugung.'."\n".
                    'Die Rechenbeispiele sollen daher nicht nur einzelne Operationen vorführen,'."\n".
                    'sondern auch zeigen, dass die Superial-Zahlen einen erweiterten arithmetischen Blick'."\n".
                    'auf unendliche Summen, infinitesimale Raster und erzeugte Mengenintervalle eröffnen.'."\n".
                    ''))),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategien'),
                    )),
                )
          ); ?>

          
          <!--  • Beweisstrategien  -->
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Einleitung:Beweisstrategien',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Die entdeckten aktual unendlichen Primfaktorzerlegungen innerhalb der neuen, in der ZFC-Mengenlehre'."\n".
                    'definierbaren Primexponentenstruktur offenbaren einen tiefen Zusammenhang'."\n".
                    'der endlichen Primzahlen mit dem aktual unendlichen von-Neumann-Ordinal\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}}'."\n".
                    '\lm{ ω }.'."\n".
                    'Dieser Zusammenhang mündet in einer'."\n".
                    '\jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Primzahlprodukt-Vermutung}{kanonischen Identifikation}'."\n".
                    'des von-Neumann-Ordinals mit dem vollständigen Einheits-Primexponentenprodukt aller endlichen Primzahlen.'."\n",
                      'Aus der Rekonstruktion der Analysis, im Besonderen der Integrale als'."\n".
                    'aktual unendlich schrittige Summen, ergibt sich die zentrale Frage,'."\n".
                    'welche rein endlichen Koeffizienten \lm{ a } im Produkt mit der superialen Basis \lm{ \s }'."\n".
                    'eine aktual unendliche ganze Zahl ergeben.'."\n".
                    'Denn nur dann können die entsprechenden Integralsummen als aktual unendliche Summen'."\n".
                    'mit ganzzahlig bestimmter Schrittzahl verstanden werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a \cdot \s  \in  \mathbb{S}_{\Z,\{ 1 \}}  }',
                                          label_text => '\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Equ-a-mal-s-in-Sz-erste-Schicht}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Bedingung führt zur Definition der sinnvollen Koeffizienten der Superial-Zahlen.'."\n",
                      'Daraus ergeben sich weitere Vermutungen und Beweise, die tief in die Zahlentheorie reichen.'."\n".
                    'Irrationale Wurzeln werden zu aktual unendlichen ganzen Zahlen, wenn sie mit'."\n".
                    'der passenden Primexponentenstruktur von \lm{ \s } faktorisiert werden.'."\n".
                    'Dies begründet der Beweis der'."\n".
                    '\jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Ueberrationalitaetsvermutung}{Überrationalitätsvermutung}.'."\n",
                      'Entsprechend zeigt die'."\n".
                    '\jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Algebraischen-Koeffizienten-Vermutung}{Algebraische-Koeffizienten-Vermutung},'."\n".
                    'dass schließlich alle reell algebraischen Zahlen sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n",
                      'Die \jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Superialen-Transzendenz-Vermutung}{Superiale-Transzendenz-Vermutung}'."\n".
                    'klärt abschließend die Grenze dieser Koeffizientenstruktur:'."\n".
                    'Transzendente Zahlen sind keine sinnvollen Koeffizienten der Superial-Zahlen.'."\n".
                    'Sie benötigen mehrere Schichten der Superial-Zahlen'."\n".
                    'und sind daher nicht allein als Koeffizienten der Hauptschicht darstellbar.'."\n",
                      'All diese Zusammenhänge begründen die Superial-Zahlen als Zahlensystem der Analysis.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:X', text =>

                '\italic{Inhalt}', subline =>
                  '')),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Primzahlprodukt-Vermutung'),
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Ueberrationalitaetsvermutung'),
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Algebraischen-Koeffizienten-Vermutung'),
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Superialen-Transzendenz-Vermutung'),
                    )),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Primzahlprodukt-Vermutung', text =>

                'Beweisstrategie der Primzahlprodukt-Vermutung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Primzahlprodukt-Vermutung ist heute die Grundlage der Verankerung'."\n".
                    'der Superial-Zahl-Definition in der ZFC-Mengenlehre.'."\n".
                    'Dass ihr Beweis einigermaßen zeitnah erfolgt, war für viele Jahre seit ihrer Aufstellung, spätestens 2007\hidden{siehe: 5. Variante, Superial-Zahlen_v00.tex, 05.07.2007. Davor klafft eine riesige zeitliche Lücke in meinen Dokumenten (Sup-Zahl (52).pdf (Sup-Zahlen Beweise (52)), 11.10.2002), allerdings nicht versionsmäßig. Ich müsste in den handschriftlichen Aufzeichnungen schauen, ob dort was ist.},'."\n".
                    'nicht selbstverständlich, weil die Vermutung recht erstaunlich ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  ?\equiv_{kan}  ω\overline{\#}  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot \cdots)_{\#}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-Frag-equiv-kan-MengenPrimfakultaet-omega}/\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-Mengen-Primfakultaet-Def-Produkt-alle-p}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Wie können das Zählen, für das das von-Neumann-Ordinal \lm{ ω } steht,'."\n".
                    'und das Produkt immer größer werdender endlicher Primzahlen,'."\n".
                    'das augenscheinlich viel schneller wächst als das Zählen, beim Übergang ins Aktual-Unendliche doch in ihrem Wert miteinander identifiziert werden?'."\n",
                    ''))),
                  array( 'text', array( text => array(
                    'Die folgenden Punkte geben nur die Beweisstrategie wieder;'."\n".
                    'die formale Durchführung erfolgt auf der Seite der \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung}.'."\n",
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Primzahlprodukt-Vermutung:X', text =>
                  'Ansatz', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Der Beweis gelingt schließlich über den Ansatz, dass der \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-des-Euklid}{›Satz des Euklid‹}\footnote{\const{SupNum_g_footnote_text_SatzDesEuklid}}'."\n".
                    'durch die Anwendung der Primfakultät\footnote{\const{SupNum_g_footnote_text_Primorial}} zeigt, dass es bei einer gegebenen'."\n".
                    'endlichen Primzahl immer wieder noch größere Primzahlen geben muss, als eine vermeintlich größte.'."\n".
                    'Wir nutzen dies in einer glücklichen Kombination mit der von-Neumann-Ordinal-Identität\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}}.'."\n".
                    'In dieser werden die Werte endlicher und transfiniter natürlicher Zahlen mit ihrer Darstellung durch die Menge all ihrer Vorgänger, von der Null an, identifiziert.'."\n".
                    'Auf diese Mengenstruktur abgestimmt definieren wir die Primfakultät als Mengen-Primfakultät:'."\n".
                    'Sie bildet aus allen Primzahlen, die in der Mengendarstellung einer Ordinalzahl enthalten sind,'."\n".
                    'ein Primexponentenobjekt mit erweiterter p-adischer Primexponentenbewertungsstruktur.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Primzahlprodukt-Vermutung:X', text =>
                  'Generative Primzahl-Induktion', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Auf diese Weise finden wir einen Zugang zur induktiven Erzeugung aller endlichen Primzahlen über das'."\n".
                    '›\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:4-Lemma-Generatives-Primzahl-Induktions-Lemma}{generative Primzahl-Induktions-Lemma}‹:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p_{i + 1}  =  \lpr\!*( *( p_{i} + 1 *)\overline{\#} *)  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-plus-Eins-aus-Vorgaenger-p-i}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei läuft der Index \lm{ i } über alle endlichen Indizes'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  i  <  ω  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Übergang \lm{ i \rightarrow ω } bezeichnet daher keine letzte endliche Primzahlstufe,'."\n".
                    'sondern die vollständige Gesamtheit aller endlichen Primzahlstufen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Primzahlprodukt-Vermutung:X', text =>
                  'Schritte hin zur generativen Primzahl-Induktion', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Zu diesem Lemma sind wir gekommen, indem wir mehrere innovative Schritte gegangen sind, die auf Einsichten zur Erzeugung'."\n".
                    'der endlichen natürlichen Zahlen aus Primzahlen basieren, welche auf'."\n".
                    'dem ›Fundamentalsatz der Arithmetik‹\footnote{\const{SupNum_g_footnote_text_FundamentalsatzDerArithmetik}}'."\n".
                    'und der Funktionsweise des Beweises des ›Satz des Euklid‹ beruhen:'."\n".
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        'Wir finden über die \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Primturmzerlegung}{Primturmzerlegung} \lm{ \pt(n) }'."\n".
                          'jeder natürlichen Zahl eine Möglichkeit, ihre Primfaktorzerlegung als ihr entsprechende Primturmmenge darzustellen.'."\n".
                          'In dieser sind ihre Primzahlpotenzen (Primtürme) als Wertelemente enthalten.',
                        'Dann erzeugen wir aus der Primturmmenge einer natürlichen Zahl ein ganzzahliges'."\n".
                          'und transfinites Exponentenkombinationsraster ihrer Primtürme,'."\n".
                          'ihr \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Definition-Primturm-Potenzraster}{Primturm-Potenzraster} \lm{ \pr(n) }:'."\n".
                          'also alle Primtürme in \lm{ n } in endlichen und transfiniten natürlichen Exponentenkombinationen.',
                        'Dafür nutzen wir ein neues \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:NotationsvereinbarungPrimexponentenprodukt}{Primexponentenprodukt}:'."\n".
                          'eine Primexponentenstruktur, in der auch transfinite Werte ZFC-intern beschreibbar werden,'."\n".
                          'indem wir ihr Primexponentenprodukt über eine erweiterte \lm{ p }-adische Primexponentenbewertung definieren.',
                        'Das \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Lueckenloses-Primturm-Potenzraster}{lückenlose Primturm-Potenzraster}'."\n".
                          '\lm{ \lpr(n) } holt die Struktur des Primturm-Potenzrasters in die ordinale Mengenstruktur zurück,'."\n".
                          'weil es nur den lückenlosen Anfang des Primturm-Potenzrasters betrachtet.',
                        'Damit ist das lückenlose Primturm-Potenzraster für endliche natürliche Zahlen dann maximal,'."\n".
                          'wenn sie Primfakultäten sind.'."\n".
                          'Das schließen wir aufgrund der Erkenntnis in Bezug auf den Fundamentalsatz der Arithmetik,'."\n".
                          'dass jede natürliche Zahl größer gleich Zwei nur aus Primfaktoren bestehen kann, die kleiner oder gleich wie sie selber sind.',
                        'Der lückenlose Anfang des Primturm-Potenzrasters einer endlichen natürlichen Zahl enthält alle natürlichen Zahlen,'."\n".
                          'einschließlich ihrer selbst, bis zu einer größten Zahl, die direkt vor der nächsten Primzahl liegt.'."\n".
                          'Die sich ergebende Menge natürlicher Zahlen ist die von-Neumann-Darstellung dieser nächsten Primzahl.',
                    ))),

                  array( 'text', array( text => array(
                    'All diese Erkenntnisse verweben wir nun weiter mit der von-Neumann-Mengendarstellung der endlichen'."\n".
                    'und transfiniten Ordinalzahlen in der ZFC-Mengenlehre:'."\n".
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        'Dazu bilden wir die Primfakultät der Primzahlen, die Elemente der Mengendarstellung einer Ordinalzahl sind: ihre \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:MengenPrimfakultaet}{Mengen-Primfakultät}'."\n".
                          '\lm{ n\overline{\#} };'."\n".
                          'ins Transfinite verallgemeinert mittels des neuen Primexponentenprodukts.',
                        'Wir stellen fest, wie zuvor gerade erklärt, dass uns das'."\n".
                          '\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Lueckenloses-Primturm-Potenzraster-einer-natuerlichen-Zahl}{lückenlose Primturm-Potenzraster der Mengen-Primfakultät einer natürlichen Zahl}'."\n".
                          'zur nächst größeren Primzahl führt, wenn die natürliche Zahl selber noch keine Primzahl ist.'."\n".
                          'So können wir über jede Primzahl plus Eins die nachfolgende erzeugen.',
                    ))),

                  array( 'text', array( text => array(
                    'Damit sind wir nun beim generativen Primzahl-Induktions-Lemma angekommen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Primzahlprodukt-Vermutung:X', text =>
                  'Grenzübergang und Lückenabstieg der Mengen-Primfakultät', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Mit Hilfe des generativen Primzahl-Induktions-Lemmas erreichen wir anschließend:'."\n".
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        'Die \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Zaehlen-natuerliche-Zahlen-in-Primzahlen}{Konstruktion}'."\n".
                          'der Menge aller endlichen Primzahlen \lm{ \mathbb{P} } über die vollständige generative Primzahl-Induktion.',
                        'Die \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Natuerliche-Zahlen-ueber-Zaehlen-der-Primzahlen-rekonstruieren}{Rekonstruktion}'."\n".
                          'der Menge aller endlichen natürlichen Zahlen \lm{ \mathbb{N} }'."\n".
                          'über die vollständige generative Primzahl-Induktion.',
                        'So den Nachweis, dass über die vollständige generative Primzahl-Induktion'."\n".
                          'alle endlichen natürlichen Zahlen vom einpotenzigen Primturm-Potenzraster'."\n".
                          'der aufsteigenden Mengen-Primfakultäten erfasst werden:',
                    ))),

                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  \subseteq  \lpr*( ω\overline{\#} *)  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-Teilmenge-lpr-P-omega}', label_incr => false),
                    ))),

                  array( 'bulletlist', array( bullet_ary => array(
                        'Die zweite Inklusionsrichtung folgt aus dem'."\n".
                          '\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:3-Aktual-unendlichen-Bereich-Luecken}{Lückenabstiegsprinzip}:'."\n".
                          'Oberhalb von \lm{ ω } treten im umgebenden Primexponenten-Termraum notwendig Lücken auf,'."\n".
                          'weil additive Normalform-Lückenzeugen nicht zum reinen Primturm-Potenzraster gehören:',
                    ))),

                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \lpr*( ω\overline{\#} *)  \subseteq  ω  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-lpr-P-omega-Teilmenge-omega}', label_incr => false),
                    ))),

                  array( 'bulletlist', array( bullet_ary => array(
                        'Zusammen den Nachweis:',
                    ))),

                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \lpr*( ω\overline{\#} *)  =  ω  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-lueckenlose-MengenPrimfakultaet-omega}', label_incr => false),
                    ))),

                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Primzahlprodukt-Vermutung:X', text =>
                  'Innere kanonische ZFC-Strukturidentifikation', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Dieser deduktive Nachweis liefert in einer Gesamtschau mit den Entsprechungen, die wir auf unserem Weg gefunden haben,'."\n".
                    'das Ergebnis einer engen mathematischen Verknüpfung zwischen der Mengen-Primfakultät, dem lückenlosen Anfangsstück des Primturm-Potenzrasters'."\n".
                    'und der vollständigen Induktion des Zählens des von-Neumann-Ordinals.'."\n".
                    'Aus dieser engen Verknüpfung ergibt sich innerhalb der in ZFC definierbaren Primexponentenstruktur'."\n".
                    'eine kanonisch begründete Identifikation, in der das vollständige Einheits-Primexponentenprodukt \lm{ ω\overline{\#} }'."\n".
                    'den lückenlosen Zahlenwert \lm{ ω } besitzt:'."\n",
                      'Wenn das Erzeugungsspektrum'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \pr*( ω\overline{\#} *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'des aktual unendlichen Einheits-Primexponentenprodukts in seiner Ordnung und seiner erzeugten Trägermenge'."\n".
                    'dem von-Neumann-Ordinal \lm{ ω } entspricht und zugleich sein lückenloser Anfang exakt'."\n".
                    'den ordinalen Zahlenwert \lm{ ω } besitzt, dann ist die'."\n".
                    '\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-2-Theorem-innere-kanonische-ZFC-Strukturidentifikation}{kanonische Identifikation von \lm{ ω } mit \lm{ ω\overline{\#} }} innerhalb dieser Struktur nicht willkürlich,'."\n".
                    'sondern durch den deduktiv bestimmten lückenlosen Zahlenwert des Einheits-Primexponentenprodukts begründet:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  \equiv_{kan}  ω\overline{\#}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-equiv-kan-MengenPrimfakultaet-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit haben wir unsere Vermutung schließlich bewiesen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Aufgrund der kanonischen Identifikation verwenden wir die vereinfachten Schreibweisen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  =  ω\overline{\#}  =  \prodx_{p \in \mathbb{P}}  p  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimzahlen}', label_incr => false),
                      array( display => 'on',  latex => '{  ω  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots)_{\#}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimfakultaet-omega}', label_incr => false),
                    ))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Primzahlprodukt-Vermutung:X', text =>
                  'Bedeutung für die Superial-Zahlen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Die superiale Basis \lm{ \s } ist in ihrer \jump{OM:SupNum:ZFC-Modellkonstruktion}{ZFC-Modellkonstruktion}'."\n".
                    'darauf aufbauend definiert als:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  *( ω\overline{\#} *)_{\#}^{ω}  =  \displaystyle *( \prodx_{p \in \mathbb{P}}  p *)_{\#}^{ω}  =  \displaystyle \prodx_{p \in \mathbb{P}}  p^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Aufgrund der kanonischen Identifikation verwenden wir die vereinfachten Schreibweisen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  *( ω\overline{\#} *)_{\#}^{ω}  }'),
                      array( display => 'on',  latex => '{  \s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)_{\#}^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-explicitly-alle-Primzahlen}', label_incr => false),
                      array( display => 'on',  latex => '{  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dieser Zusammenhang ist auch in unser Logo eingeflossen.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Ueberrationalitaetsvermutung', text =>
                                           
                'Beweisstrategie der Überrationalitätsvermutung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung}'."\n".
                    'geht von einer einfachen Beobachtung aus:'."\n".
                    'Der klassische Beweis der Irrationalität von Wurzeln zeigt nicht nur,'."\n".
                    'dass bestimmte Wurzeln keine rationalen Zahlen sind.'."\n".
                    'Er zeigt zugleich, warum ein endlicher rationaler Bruch scheitert.'."\n",
                      'Am Beispiel der Wurzel aus Zwei ergibt sich aus der Annahme'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists a \in \mathbb{N} \land b \in \mathbb{N}^{+} *)  *[  *| \sqrt{ 2 } \,|*  =  2^{\frac{ 1 }{ 2 }}  =  \frac{ a }{ b }  *]  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Betrag-Wurze-Zwei-gleich-a-geteilt-b-endlich-rational}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'mit endlichen ganzen Zahlen \lm{ a }, \lm{ b } die Gleichung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2 \cdot b^{2}  =  a^{2}  \;\; .  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Zwei-mal-b-Quadrat-gleich-a-Quadrat}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Daraus folgt, dass Zähler und Nenner gleichzeitig immer weiter durch \lm{ 2 } teilbar sein müssten.'."\n".
                    'Für endliche ganze Zahlen ist das unmöglich, denn ein endlicher Bruch lässt sich nur endlich oft kürzen.'."\n".
                    'Genau daraus entsteht der klassische Widerspruch.'."\n",
                      'Die Beweisstrategie der Überrationalitätsvermutung besteht nun darin,'."\n".
                    'diesen Widerspruch nicht nur negativ zu lesen.'."\n".
                    'Er zeigt nicht bloß:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }}  \notin  \mathbb{Q}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Er zeigt vielmehr positiv, welche Eigenschaft ein Bruch besitzen müsste,'."\n".
                    'um \lm{ 2^{\frac{ 1 }{ 2 }} } dennoch als Quotient ganzer Zahlen darstellen zu können:'."\n".
                    'Zähler und Nenner müssten eine aktual unendliche Teilbarkeit durch \lm{ 2 } besitzen.'."\n",
                      'Daher wird die endliche Rationalitätsbedingung ersetzt durch eine überrationale Darstellungsbedingung.'."\n".
                    'Statt eines endlichen Bruchs'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ a }{ b }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'mit endlichen ganzen Zahlen betrachtet man einen Bruch mit aktual unendlichem ganzem Zähler und Nenner.'."\n".
                    'Für die Wurzel aus Zwei führt dies zur Struktur'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{\frac{ 1 }{ 2 }} \cdot 2^{ω} }{ 2^{ω} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Wurzel-Zwei-mal-Zwei-hoch-omega-durch-Zwei-hoch-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{ω + \frac{ 1 }{ 2 }} }{ 2^{ω} }  \;\; .  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Zwei-hoch-omega-plus-Einhalb-durch-Zwei-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Der Nenner'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{ω}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'trägt die vollständige aktual unendliche Teilbarkeit durch \lm{ 2 }.'."\n".
                    'Der Zähler'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }} \cdot 2^{ω}  =  2^{ω + \frac{ 1 }{ 2 }}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'trägt dieselbe aktual unendliche Teilbarkeitsstruktur, verschoben um den Wurzelexponenten.'."\n".
                    'Dadurch wird genau die Bedingung erfüllt, die im endlichen rationalen Fall zum Widerspruch führte.'."\n",
                      'Der Beweis kehrt den klassischen Irrationalitätsbeweis also um:'."\n".
                    'Was bei endlichen ganzen Zahlen unmöglich ist, wird im aktual unendlichen Bereich'."\n".
                    'zur charakteristischen Struktur eines überrationalen Bruchs.'."\n",
                      'Für allgemeine irrationale Wurzeln'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'wird diese Idee über den Primzahlträger von \lm{ n } formuliert.'."\n".
                    'Die relevanten Primzahlen werden durch'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \rad( n )  }'),
                    ))),
                  array( 'text', array( text => array(
                    'erfasst.'."\n".
                    'Die natürliche überrationale Darstellungsform lautet daher:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| \sqrt[x]{ n } \,|*  =  n^{\frac{ 1 }{ x }}  =  \frac{ n^{\frac{ 1 }{ x }} \cdot \rad(n)^{ω} }{ \rad(n)^{ω} }  }',
                                          label_text => '\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:RadikaleSinnvolleKoeffizienten:Equ-xte-Wurzel-n-gleich-xte-Wurzel-n-mal-rad-n-hoch-omega-durch-rad-n-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Der Nenner enthält jede in n vorkommende Primzahl in aktual unendlicher Potenz.'."\n".
                    'Der Zähler enthält dieselbe aktual unendliche Primexponentenstruktur,'."\n".
                    'ergänzt um den Wurzelexponenten von \lm{ n^{\frac{ 1 }{ x }} }.'."\n".
                    'Damit werden Zähler und Nenner zu aktual unendlichen ganzen Zahlen'."\n".
                    'in dem hierfür vorgesehenen erweiterten Zahlenraum.'."\n",
                      'Die Überrationalitätsvermutung behauptet somit nicht, dass irrationale Wurzeln rationale Zahlen sind.'."\n".
                    'Sie behauptet vielmehr, dass irrationale Wurzeln'."\n".
                    'als Quotienten aktual unendlich großer ganzer Zahlen darstellbar sind:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }}  =  \frac{ A }{ B }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  A, B  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  B  =  \rad(n)^{ω}  \\;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die klassische Irrationalität bleibt erhalten:'."\n".
                    'Es gibt keinen endlichen rationalen Bruch.'."\n".
                    'Aber der klassische Widerspruch wird strukturell aufgelöst,'."\n".
                    'sobald aktual unendlich teilbare Zähler und Nenner zugelassen werden.'."\n",
                      'Die Beweisstrategie besteht daher aus drei Schritten:'."\n".
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        'Erstens wird am klassischen Irrationalitätsbeweis sichtbar gemacht,'."\n".
                          'dass endliche Zähler und Nenner an der geforderten unbegrenzten Teilbarkeit scheitern.',
                        'Zweitens wird diese unbegrenzte Teilbarkeit durch eine aktual unendliche Primexponentenstruktur normiert,'."\n".
                          'insbesondere durch den Exponenten \lm{ ω }.',
                        'Drittens wird gezeigt, dass dadurch eine überrationale Darstellung entsteht,'."\n".
                          'deren Zähler und Nenner aktual unendliche ganze Zahlen sind,'."\n".
                          'während ihr Quotient exakt die ursprüngliche irrationale Wurzel ergibt.',
                    ))),

                  array( 'text', array( text => array(
                    'Damit wird die Irrationalität nicht aufgehoben, sondern erweitert:'."\n".
                    'Eine irrationale Wurzel ist nicht rational, aber überrational darstellbar.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Ueberrationalitaetsvermutung:X', text =>
                  'Bedeutung für die Superial-Zahlen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Mit dem Beweis der Überrationalitätsvermutung treten die tieferen Zusammenhänge'."\n".
                    'zwischen klassischen Zahlbereichen und aktual unendlichen Primexponentenstrukturen hervor.'."\n".
                    'Irrationale Wurzeln und Radikalformen erscheinen dabei nicht als äußere Fremdkörper,'."\n".
                    'sondern als Zahlen, deren fehlende endliche Rationalität durch'."\n".
                    'aktual unendliche Teilbarkeitsstrukturen aufgenommen werden kann.'."\n",
                      'In der klassischen Arithmetik scheitert eine Darstellung wie'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }}  =  \frac{ a }{ b }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'an der endlichen Teilbarkeit von Zähler und Nenner.'."\n".
                    'Im superialen Zusammenhang steht jedoch mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{ω}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'eine aktual unendliche Teilbarkeitsstruktur zur Verfügung.'."\n".
                    'Dadurch kann die Wurzel aus Zwei überrational als Quotient'."\n".
                    'aktual unendlich großer ganzer Zahlen dargestellt werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{\frac{ 1 }{ 2 }} \cdot 2^{ω} }{ 2^{ω} }  =  \frac{ 2^{ω + \frac{ 1 }{ 2 }} }{ 2^{ω}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die Superial-Zahlen ist dies grundlegend, weil die'."\n".
                    '\jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen Koeffizienten}'."\n".
                    'über die aktual unendliche Ganzzahligkeit des Produkts'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a \cdot \s  }'),
                    ))),
                  array( 'text', array( text => array(
                    'bestimmt werden.'."\n".
                    'Die Überrationalitätsvermutung liefert hier den ersten wichtigen Einstieg:'."\n".
                    'Sie zeigt, wie irrationale Wurzeln durch die aktual unendliche Primexponentenstruktur'."\n".
                    'der superialen Basis aufgenommen werden können.'."\n",
                      'Damit kommen auch die fundamentalen Ringaxiome ins Spiel, insbesondere die Abgeschlossenheit'."\n".
                    'von Addition und Multiplikation bezüglich der Ganzzahligkeit.'."\n".
                    'Von der überrationalen Darstellung einzelner Wurzeln führt'."\n".
                    'der Weg dadurch weiter zur \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Alle-Radikalformen-sinnvolle-Koeffizienten-SZ}{Radikal-Abgeschlossenheit}:'."\n".
                    'Radikale und Radikalformen können als sinnvolle Koeffizienten der Superial-Zahlen'."\n".
                    'verstanden werden.'."\n",
                      'Die klassische Irrationalität wird dabei nicht aufgehoben.'."\n".
                    'Eine irrationale Wurzel bleibt irrational.'."\n".
                    'Sie wird jedoch im superialen Zahlenraum überrational darstellbar'."\n".
                    'und dadurch als Koeffizient verwendbar.'."\n".
                    'Damit bereitet der Beweis der Überrationalitätsvermutung die späteren Beweisstrategien'."\n".
                    'zu den sinnvollen Koeffizienten der Superial-Zahlen vor,'."\n".
                    'insbesondere den Übergang zur Aussage, dass Radikalformen und schließlich'."\n".
                    '\jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Algebraischen-Koeffizienten-Vermutung}{reell algebraische Zahlen sinnvolle Koeffizienten} sind.'."\n",
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Algebraischen-Koeffizienten-Vermutung', text =>
                                           
                'Beweisstrategie der Algebraischen-Koeffizienten-Vermutung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{Algebraische-Koeffizienten-Vermutung}'."\n".
                    'erweitert die bisherigen Erkenntnisse über rationale Zahlen,'."\n".
                    'Wurzeln und Radikalformen auf alle reell algebraischen Zahlen. Ziel ist zu zeigen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\R}  \subseteq  \mathbb{A}_{\S}  }',
                                          label_text => '\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:Equ-Ar-Teilmengegleich-As}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Das bedeutet:'."\n".
                    'Jede reell algebraische Zahl \lm{ \alpha } ist ein sinnvoller Koeffizient der Superial-Zahlen.'."\n".
                    'In der Sprache der Superial-Zahlen heißt dies:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \alpha \cdot \s  \in  \mathbb{S}_{\mathbb{Z},\{ 1 \}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Beweis nutzt nicht mehr nur einzelne Radikaldarstellungen,'."\n".
                    'sondern die allgemeine algebraische Struktur reell algebraischer Zahlen.'."\n".
                    'Der zentrale Gedanke ist, die Ganzzahligkeit in den Superial-Zahlen'."\n".
                    'über Bewertungen zu kontrollieren.'."\n",
                      'Zunächst wird der Ring der ganzen Superial-Zahlen durch eine Schnittdarstellung beschrieben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{\Z}  =  \bigcap_{ p \in \mathbb{P} }  V_{p}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei sind die \lm{ V_{p} } Bewertungsringe zu den endlichen Primzahlen \lm{ p }.'."\n".
                    'Ein Element ist also genau dann superial ganz, wenn es bezüglich jeder endlichen Primzahl'."\n".
                    'keine negativen Primexponenten besitzt.'."\n".
                    'Aus dieser Darstellung folgt, dass \lm{ \mathbb{S}_{\Z} } ganz abgeschlossen ist,'."\n".
                    'denn Bewertungsringe sind ganz abgeschlossen und Schnitte'."\n".
                    'ganz abgeschlossener Teilringe bleiben ganz abgeschlossen.'."\n",
                      'Anschließend wird diese Ganz-Abgeschlossenheit auf algebraische Ganzzahlen angewendet.'."\n".
                    'Ist \lm{ \beta } eine reell algebraische Ganzzahl, so erfüllt \lm{ \beta }'."\n".
                    'eine monische Polynomgleichung mit ganzzahligen Koeffizienten.'."\n".
                    'Setzt man'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  Y  :=  \beta \cdot \s  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'so zeigt die Multiplikation der Polynomgleichung mit einer passenden Potenz von \lm{ \s },'."\n".
                    'dass \lm{ Y } ganz über \lm{ \mathbb{S}_{\Z} } ist.'."\n".
                    'Wegen der Ganz-Abgeschlossenheit von \lm{ \mathbb{S}_{\Z} } folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \beta \cdot \s  \in  \mathbb{S}_{\Z,\{ 1 \}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit sind zunächst alle algebraische ganze Zahlen, also algebraische Integer, sinnvolle Koeffizienten.'."\n",
                      'Für eine beliebige reell algebraische Zahl \lm{ \alpha } wird anschließend'."\n".
                    'ein klassischer Standardfakt aus der Algebra verwendet:'."\n".
                    'Es gibt ein endliches \lm{ m \in \mathbb{Z} \setminus \{ 0 \} }, sodass'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \beta  :=  m \cdot \alpha  }'),
                    ))),
                  array( 'text', array( text => array(
                    'eine algebraische Ganzzahl ist.'."\n",
                      'Nun folgt der entscheidende Nenner-Absorptionsschritt.'."\n".
                    'Da die vorstehende Formel äquivalent ist mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ \beta }{ m }  =  \alpha  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'erhalten wir'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \alpha \cdot \s  =  \frac{ \beta }{ m } \cdot \s  =  \beta \cdot \frac{ \s }{ m }  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der endliche Nenner \lm{ m } wird von der superialen Basis \lm{ \s } absorbiert,'."\n".
                    'denn \lm{ \s } enthält jede endliche Primzahl in aktual unendlicher Potenz.'."\n".
                    'Daher gilt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ \s }{ m }  \in  \mathbb{S}_{\Z,\{ 1 \}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Da \lm{ \beta } eine algebraische ganze Zahl ist,'."\n".
                    'greift die zuvor bewiesene Ganzheitsaussage für algebraische ganze Koeffizienten.'."\n".
                    'Somit liegt auch'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \beta \cdot \frac{ \s }{ m }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'im Bereich der ganzen Superial-Zahlen der ersten Schicht.'."\n".
                    'Also folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \alpha \cdot \s  \in  \mathbb{S}_{\Z,\{ 1 \}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit ist gezeigt, dass auch eine beliebige reell algebraische Zahl \lm{ \alpha }'."\n".
                    'ein sinnvoller Koeffizient der Superial-Zahlen ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Die Beweisstrategie besteht somit aus vier Schritten:'."\n".
                    ''))),

                  array( 'bulletlist', array( bullet_ary => array(
                        'Zuerst wird Ganzzahligkeit über die \lm{ p }-adischen Bewertungsringe charakterisiert.',
                        'Danach wird daraus die'."\n".
                          '\jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Ganz-Abgeschlossenheit-von-As}{Ganz-Abgeschlossenheit}'."\n".
                          'der ganzen Superial-Zahlen gewonnen.',
                        'Anschließend werden algebraische Ganzzahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
                          'durch Multiplikation mit \lm{ \s } in ganze Superial-Zahlen überführt.',
                        'Schließlich wird jede reell algebraische Zahl durch Multiplikation mit einem endlichen Nenner'."\n".
                          'zu einer algebraischen Ganzzahl gemacht, während \lm{ \s } diesen endlichen Nenner wieder absorbiert.',
                    ))),

                  array( 'text', array( text => array(
                    'Damit zeigt die Algebraische-Koeffizienten-Vermutung, dass nicht nur rationale Zahlen,'."\n".
                    'Wurzeln und Radikalformen, sondern alle reell algebraischen Zahlen'."\n".
                    'sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Algebraischen-Koeffizienten-Vermutung:X', text =>
                  'Bedeutung für die Superial-Zahlen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Die Algebraische-Koeffizienten-Vermutung ist für die Superial-Zahlen von zentraler Bedeutung,'."\n".
                    'weil sie den Kreis der sinnvollen Koeffizienten weit über rationale Zahlen,'."\n".
                    'Wurzeln und einzelne Radikalformen hinaus erweitert.'."\n".
                    'Sie zeigt, dass jede reell algebraische Zahl als Koeffizient der Superial-Zahlen verwendet werden kann.'."\n",
                      'Der Ausgangspunkt ist die Bedingung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a \cdot \s  \in  \mathbb{S}_{\Z,\{ 1 \}}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Eine endliche Zahl \lm{ a } ist genau dann ein sinnvoller Koeffizient der Superial-Zahlen,'."\n".
                    'wenn ihr Produkt mit der superialen Basis \lm{ \s } eine ganze Superial-Zahl ergibt.'."\n".
                    'Die Algebraische-Koeffizienten-Vermutung zeigt, dass diese Bedingung'."\n".
                    'für alle reell algebraischen Zahlen erfüllt ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.AKV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\R}  \subseteq  \mathbb{A}_{\S}  }',
                                          label_text => '\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:Equ-Ar-Teilmengegleich-As}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit wird die superiale Basis \lm{ \s } als arithmetischer Träger sichtbar:'."\n".
                    'Sie enthält jede endliche Primzahl in aktual unendlicher Potenz'."\n".
                    'und kann dadurch endliche Nenner, algebraische Teilbarkeitsstrukturen'."\n".
                    'und die in algebraischen Zahlen enthaltenen Primexponenten aufnehmen.'."\n".
                    'Dieser Mechanismus verallgemeinert die bekannten Rechenprozesse der Zahlentheorie:'."\n".
                    'Was bei rationalen Zahlen durch Kürzen und Erweitern geschieht und bei Wurzeln durch'."\n".
                    'überrationale Brüche sichtbar wird, gilt nicht mehr nur für einzelne Zahlentypen,'."\n".
                    'sondern für alle reell algebraischen Zahlen insgesamt.'."\n",
                      'Für die Superial-Zahlen bedeutet dies, dass ihre Koeffizientenstruktur nicht willkürlich gewählt ist.'."\n".
                    'Sie ist algebraisch stabil:'."\n".
                    'Rationale Zahlen, Radikale, Radikalformen und schließlich alle reell algebraischen Zahlen'."\n".
                    'können als sinnvolle Koeffizienten auftreten, weil ihre Multiplikation mit \lm{ \s }'."\n".
                    'in den Bereich der ganzen Superial-Zahlen führt.'."\n",
                      'Damit liefert die Algebraische-Koeffizienten-Vermutung einen entscheidenden Schritt'."\n".
                    'zur algebraischen Fundierung der Superial-Zahlen.'."\n".
                    'Sie zeigt, dass die Superial-Zahlen nicht nur ein Stellenwertsystem'."\n".
                    'mit aktual unendlicher Basis sind, sondern ein Rechenraum,'."\n".
                    'dessen Hauptschicht die reell algebraischen Zahlen als natürliche Koeffizienten tragen kann.'."\n",
                      'Zugleich bereitet dieses Ergebnis die Abgrenzung zur Superialen-Transzendenz-Vermutung vor.'."\n".
                    'Während reell algebraische Zahlen sinnvolle Koeffizienten der Hauptschicht sind,'."\n".
                    'benötigen transzendente Zahlen nach dieser späteren Vermutung zusätzliche superiale Schichten.'."\n".
                    'Die Algebraische-Koeffizienten-Vermutung markiert damit'."\n".
                    'die positive algebraische Seite der Koeffizientenstruktur:'."\n".
                    'Alle reell algebraischen Zahlen gehören zu den sinnvollen Koeffizienten der Superial-Zahlen.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Superialen-Transzendenz-Vermutung', text =>
                                           
                'Beweisstrategie der Superialen-Transzendenz-Vermutung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die \jump{OM:SupNum:Superiale-Transzendenz-Vermutung}{Superiale-Transzendenz-Vermutung}'."\n".
                    'bildet die Gegenrichtung zur Algebraischen-Koeffizienten-Vermutung.'."\n".
                    'Während die'."\n".
                    '\jump{OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Algebraischen-Koeffizienten-Vermutung}{Algebraische-Koeffizienten-Vermutung}'."\n".
                    'zeigt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\R}  \subseteq  \mathbb{A}_{\S}  }',
                                          label_text => '\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:Equ-Ar-Teilmengegleich-As}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'soll nun gezeigt werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  \subseteq  \mathbb{A}_{\R}  }',
                                          label_text => '\jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:Equ-As-Teilmengegleich-Ar}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Zusammen ergibt sich dann die vollständige Bestimmung'."\n".
                    'der sinnvollen reellen Koeffizienten der Superial-Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  =  \mathbb{A}_{\R}  }',
                                          label_text => '\jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:Equ-Ar-ist-gleich-As}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die Beweisstrategie beginnt mit einem beliebigen sinnvollen Koeffizienten'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \alpha  \in  \mathbb{A}_{\S}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Nach Definition bedeutet dies:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  T  :=  \alpha \cdot \s  \in  \mathbb{S}_{\Z, *\{ 1 *\}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Zahl \lm{ \alpha } wird also dadurch sinnvoll,'."\n".
                    'dass ihr Produkt mit der superialen Basis \lm{ \s }'."\n".
                    'eine ganze Superial-Zahl der Eins-Schicht ergibt.'."\n",
                      'Nun betrachten wir zu einem ganzzahligen Polynom'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P(x)  =  \sum_{i = 0}^{d} c_{i} \cdot x^{i}  \in  \mathbb{Z}[x]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'den superial normierten Ausdruck'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Phi_{P}(\alpha)  :=  P(\alpha) \cdot \s^{d}  =  \sum_{ i = 0 }^{ d }  c_{i} \cdot T^{i} \cdot \s^{d - i}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Da sowohl \lm{ T = \alpha \cdot \s } als auch \lm{ \s } ganze Superial-Zahlen sind,'."\n".
                    'enthält jeder Summand eine gleichmäßige aktual unendliche Teilbarkeitsstruktur.'."\n".
                    'Daraus folgt der uniforme \lm{ p }-adische Schub:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  v_{p}*( \Phi_{P}( \alpha ) *)  \ge  d  }'),
                    ))),
                  array( 'text', array( text => array(
                    'für jede endliche Primzahl \lm{ p }.'."\n".
                    'Die Multiplikation mit \lm{ \s^{d} } hebt also jeden Polynomwert \lm{ P( \alpha ) }'."\n".
                    'in eine stark teilbare superiale Ganzheitsstruktur.'."\n",
                      'Der nächste Schritt besteht darin, Polynome zu konstruieren,'."\n".
                    'die bei \lm{ \alpha } archimedisch sehr kleine Werte annehmen'."\n".
                    'und zugleich vorgegebene Kongruenzbedingungen erfüllen.'."\n".
                    'Dies geschieht über ein Dirichlet–Siegel-Argument mit Restklassen.'."\n".
                    'Dadurch erhält man eine Folge monischer Polynome'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P_{k}  \in  \mathbb{Z}[x]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| P_{k}( \alpha ) |*  \le  2^{-k}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und gleichzeitig kohärenten Koeffizienten modulo wachsender Moduln'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P_{k+1}  \equiv  P_{k} \pmod{M_{k}}.  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die \lm{ p }-adische Seite wird durch den uniformen Schub aus \lm{ \s } kontrolliert,'."\n".
                    'während die archimedische Seite durch die Abschätzung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| P_{k}( \alpha ) |*  \le  2^{-k}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'gegen Null gedrückt wird.'."\n",
                      'Die Kongruenz-Kohärenz der Polynome erlaubt anschließend einen profiniten Diagonalschritt:'."\n".
                    'Die Koeffizienten stabilisieren.'."\n".
                    'Dadurch entsteht ein nichttriviales ganzzahliges Polynom'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P  \in  \mathbb{Z}[x]  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'das als Grenzpolynom der \lm{ P_{k} } verstanden werden kann.'."\n",
                      'Da die Werte \lm{ P_{k}( \alpha ) } zugleich archimedisch gegen Null gehen, folgt im Grenzübergang:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  P( \alpha )  =  0  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit erfüllt \lm{ \alpha } eine nichttriviale Polynomgleichung mit ganzzahligen Koeffizienten.'."\n".
                    'Also ist \lm{ \alpha } reell algebraisch:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \alpha  \in  \mathbb{A}_{\R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Da \lm{ \alpha \in \mathbb{A}_{\S} } beliebig war, folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  \subseteq  \mathbb{A}_{\R}  }',
                                          label_text => '\jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:Equ-As-Teilmengegleich-Ar}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Zusammen mit der bereits bewiesenen Algebraischen-Koeffizienten-Vermutung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\R}  \subseteq  \mathbb{A}_{\S}  }',
                                          label_text => '\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung:Vortext:Equ-Ar-Teilmengegleich-As}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'ergibt sich:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  =  \mathbb{A}_{\R}  }',
                                          label_text => '\jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:Equ-Ar-ist-gleich-As}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit sind die sinnvollen reellen Koeffizienten der Superial-Zahlen vollständig bestimmt:'."\n".
                    'Sie sind genau die reell algebraischen Zahlen.'."\n",
                      'Transzendente Zahlen gehören daher nicht zu den sinnvollen reellen Koeffizienten'."\n".
                    'einer einzelnen superialen Schicht.'."\n".
                    'Sie können im superialen Zahlenraum zwar auftreten, jedoch nicht als isolierte Koeffizienten'."\n".
                    'einer einzelnen Potenzschicht \lm{ \s^{k} }.'."\n".
                    'Vielmehr benötigen sie mehrschichtige superiale Darstellungen, etwa durch infinitesimale Grenzwertspuren'."\n".
                    'oder weiterführende Schichtkorrekturen.'."\n".
                    'Während reell algebraische Zahlen als sinnvolle Koeffizienten einzelner Schichten auftreten können,'."\n".
                    'markieren transzendente Zahlen die Grenze dieser schichtweisen Koeffizientenstruktur.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Beweisstrategien:Beweisstrategie-Superialen-Transzendenz-Vermutung:X', text =>
                  'Bedeutung für die Superial-Zahlen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Die Superiale-Transzendenz-Vermutung ist für die Superial-Zahlen von besonderer Bedeutung,'."\n".
                    'weil sie die Grenze der sinnvollen reellen Koeffizienten bestimmt.'."\n".
                    'Nachdem die Algebraische-Koeffizienten-Vermutung zeigt,'."\n".
                    'dass alle reell algebraischen Zahlen sinnvolle Koeffizienten sind,'."\n".
                    'klärt die Superiale-Transzendenz-Vermutung die Gegenrichtung:'."\n".
                    'Transzendente Zahlen gehören in keiner einzelnen superialen Schicht'."\n".
                    'zu den sinnvollen isolierten reellen Koeffizienten.'."\n",
                      'Damit ergibt sich die vollständige Abgrenzung:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  =  \mathbb{A}_{\R}  }',
                                          label_text => '\jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:Equ-Ar-ist-gleich-As}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die sinnvollen reellen Koeffizienten der Superial-Zahlen'."\n".
                    'sind also genau die reell algebraischen Zahlen.'."\n",
                      'Für die Superial-Zahlen bedeutet dies, dass ihre schichtweise Koeffizientenstruktur'."\n".
                    'algebraisch vollständig bestimmt ist.'."\n".
                    'Im gesamten superialen Zahlenraum \lm{ \mathbb{S} } sind die sinnvollen reellen Koeffizienten'."\n".
                    'jeder einzelnen Schicht genau die reell algebraischen Zahlen.'."\n".
                    'Formal gesprochen gilt für jede einzelne Potenzschicht \lm{ \s^{k} }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.STV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a \cdot \s^{k} \in \mathbb{S}_{\{ k \}}  \Longleftrightarrow  a \in \mathbb{A}_{\R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Transzendente Zahlen überschreiten diese schichtweise Koeffizientenebene.'."\n".
                    'Sie lassen sich nicht als isolierte Koeffizienten einer einzelnen Potenzschicht \lm{ \s^{k} } auffassen,'."\n".
                    'sondern benötigen mehrschichtige superiale Darstellungen.'."\n",
                      'Damit wird die Trennlinie zwischen reell algebraischen und transzendenten Zahlen'."\n".
                    'im superialen Zahlenraum sichtbar:'."\n".
                    'Reell algebraische Zahlen gehören zu den sinnvollen Koeffizienten einzelner Schichten,'."\n".
                    'transzendente Zahlen benötigen zusätzliche superiale Schichten.'."\n".
                    'Sie treten nicht als einfache Koeffizienten auf, sondern mit infinitesimalen Grenzwertspuren'."\n".
                    'oder weiterführenden Schichtkorrekturen.'."\n",
                      'Gerade dadurch erhalten transzendente Zahlen eine neue Interpretation.'."\n".
                    'Sie sind nicht bloß „nicht algebraisch“, sondern erscheinen im Blick der Superial-Zahlen als Zahlen,'."\n".
                    'deren vollständige Darstellung über die algebraisch bestimmte Koeffizientenebene'."\n".
                    'einzelner Schichten hinausgeht.'."\n".
                    'Die Superial-Zahlen machen damit sichtbar, dass die Grenze zwischen algebraischen'."\n".
                    'und transzendenten Zahlen zugleich eine Grenze zwischen einschichtigen'."\n".
                    'und mehrschichtigen Darstellungen ist.'."\n",
                      'Für den Unterring der ganzen Superial-Zahlen \lm{ \mathbb{S}_{\Z} } gelten zusätzlich'."\n".
                    'die besonderen Ganzheitsbedingungen:'."\n".
                    'Die Null-Schicht enthält nur ganze Zahlen, negative Schichten enthalten nur den Nullanteil.'."\n".
                    'Diese zusätzlichen Ganzheitsbedingungen ändern jedoch nicht die allgemeine Koeffizientenaussage'."\n".
                    'im gesamten superialen Zahlenraum \lm{ \mathbb{S} }:'."\n".
                    'Als isolierte reelle Koeffizienten einzelner Schichten sind genau'."\n".
                    'die reell algebraischen Zahlen zulässig.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:AufbauArbeit'),
                    )),
                )
          ); ?>

          
          <!--  • Aufbau der Arbeit  -->
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Einleitung:AufbauArbeit',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategien', type => 'back'),
                    )),
                  
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Weitere Seiten}',
                    '• Ausblick: fasst die wesentlichen Ergebnisse der Arbeit zusammen und gibt einen Ausblick auf offene Forschungsfragen, wie etwa die Betrachtung der Kontinuumshypothese durch die Brille der Superial-Zahlen und eine ihre mögliche Bedeutung im Langlands-Programm.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Darstellung der Superial-Zahlen ist so aufgebaut,'."\n",
                    'dass zunächst die Grundidee und die arithmetische Motivation entwickelt werden,'."\n",
                    'bevor die formale Struktur, die Rechenregeln und die Beweise der zentralen Vermutungen folgen.'."\n",
                      'Die \italic{›\jumpname{OM:SupNum:Einleitung}‹} führt in die leitende Idee ein:'."\n".
                    'Die Superial-Zahlen sollen eine zahlentheoretische Tiefenstruktur der Analysis sichtbar machen.'."\n".
                    'Grenzprozesse, Ableitungen und Integrale werden dabei'."\n".
                    'nicht nur als klassische Grenzwertbildungen betrachtet, sondern als Strukturen,'."\n".
                    'die durch aktual unendliche Schrittweiten, Summen und Primexponenten beschrieben werden können.'."\n",
                      'Auf der Seite \italic{›\jumpname{OM:SupNum:Arithmetische-Struktur-Geometrie}‹}'."\n".
                    'wird die geometrische Motivation entfaltet.'."\n".
                    'Dort wird gezeigt, wie Längen, Flächen, Volumina und analytische Größen'."\n".
                    'mit arithmetischen Strukturen zusammenhängen'."\n".
                    'und warum ein aktual unendliches Stellenwertsystem für die Analysis naheliegt.'."\n",
                      'Die \jump{OM:SupNum:Algebraische-Grundlagen}{algebraischen Grundlagen} entwickeln anschließend'."\n".
                    'die eigentliche Struktur der Superial-Zahlen.'."\n".
                    'Dort werden die superiale Basis \lm{ \s }, die Schichten \lm{ \s^{k} }, die Stellenwertschreibweise,'."\n".
                    'die Ordnung, die Rechenregeln und die wichtigsten algebraischen Normalformen eingeführt.'."\n",
                      'Die Seite \italic{›\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}‹} untersucht die Frage,'."\n".
                    'welche reellen Zahlen als Koeffizienten einzelner superialer Schichten auftreten dürfen.'."\n".
                    'Diese Frage führt zu den reell algebraischen Zahlen als natürlicher Koeffizientenebene der Superial-Zahlen.'."\n",
                      'Die Seiten \italic{›\jumpname{OM:SupNum:Ableitungen-Integrale}‹}'."\n".
                    'sowie \italic{›\jumpname{OM:SupNum:Eulersche-Zahl-e-Funktion}‹} zeigen,'."\n".
                    'wie sich klassische analytische Begriffe im superialen Zahlenraum darstellen lassen.'."\n".
                    'Die normierte infinitesimale Schrittweite \lm{ \s^{-1} } tritt'."\n".
                    'dabei an die Stelle eines bloß gedachten Grenzübergangs.'."\n".
                    'Ableitungen, Integrale und klassische Konstanten erhalten dadurch eine Darstellung'."\n".
                    'mit expliziter aktual unendlicher Struktur.'."\n",
                      'Die Seite \italic{›\jumpname{OM:SupNum:Eigenschaften}‹}'."\n".
                    'sammelt die zentralen strukturellen Merkmale der Superial-Zahlen.'."\n".
                    'Dazu gehören ihre Ordnung, ihre infinitesimalen und aktual unendlichen Schichten,'."\n".
                    'ihre algebraischen Koeffizienten, ihre Ganzheitsbedingungen'."\n".
                    'und ihre Rolle als Erweiterung der klassischen reell algebraischen Zahlen.'."\n",
                      'Die anschließenden Beweisseiten begründen die zentralen Vermutungen.'."\n".
                    'Die \italic{›\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}‹}'."\n".
                    'zeigt, wie irrationale Wurzeln über aktual unendliche Primexponentenstrukturen'."\n".
                    'als Quotienten aktual unendlicher ganzer Zahlen darstellbar werden.'."\n".
                    'Die \italic{›\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung}‹}'."\n".
                    'erweitert dies auf alle reell algebraischen Zahlen.'."\n".
                    'Die \italic{›\jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung}‹}'."\n".
                    'zeigt die Gegenrichtung und bestimmt damit die'."\n".
                    '\jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen reellen Koeffizienten}'."\n".
                    'vollständig:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Auf', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{A}_{\S}  =  \mathbb{A}_{\R}  }',
                                          label_text => '\jumpname{OM:SupNum:Superiale-Transzendenz-Vermutung:Vortext:Equ-Ar-ist-gleich-As}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die \italic{›\jumpname{OM:SupNum:Primzahlprodukt-Vermutung}‹}'."\n".
                    'begründet die kanonische Identifikation des von-Neumann-Ordinals \lm{ ω } mit'."\n".
                    'dem vollständigen Einheits-Primexponentenprodukt aller endlichen Primzahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Auf', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  \equiv_{kan}  ω\overline{\#}  =  \prodx_{p \in \mathbb{P}}  p  \;\; .  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-equiv-kan-MengenPrimfakultaet-omega}/\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-equiv-kan-Produkt-alle-p}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Sie bildet damit die arithmetische Grundlage der superialen Basis'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Auf', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  *( ω\overline{\#} *)_{\#}^{ω}  =  \displaystyle *( \prodx_{p \in \mathbb{P}}  p *)_{\#}^{ω}  =  \displaystyle \prodx_{p \in \mathbb{P}}  p^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Abschließend zeigt die \jump{OM:SupNum:ZFC-Modellkonstruktion}{ZFC-Modellkonstruktion},'."\n".
                    'dass die Superial-Zahlen nicht nur heuristisch motiviert sind,'."\n".
                    'sondern in einer ZFC-intern definierbaren Struktur modelliert werden können.'."\n".
                    'Dort werden die Superial-Zahlen als geordneter Hahn-Reihen-Körper'."\n".
                    'mit verallgemeinerten \lm{ p }-adischen Bewertungen beschrieben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Auf', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  :=  \mathbb{A}_{\R}\!*(*( \s^{\mathbb{Z}} *)*)  }',
                                               label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-S-ist-Hahnreihe-mit-Wertgruppe-Z}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit gliedert sich die Arbeit in drei Ebenen:'."\n".
                    'Zunächst wird die Idee der Zahlentheorie der Analysis motiviert,'."\n".
                    'dann wird der superiale Zahlenraum algebraisch und analytisch entwickelt,'."\n".
                    'und schließlich werden die tragenden Vermutungen sowie die ZFC-Modellkonstruktion formal begründet.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Arithmetische-Struktur-Geometrie'),
                    )),
                )
          ); ?>

          
		    	<!--  • X  -->
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Einleitung:X',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung', type => 'back'),
                    )),
                  
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:X:X', text =>
                                           
                '\color{*Bearb}{(In Arbeit …)}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Arithmetische-Struktur-Geometrie'),
                    )),
                )
          ); */ ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
