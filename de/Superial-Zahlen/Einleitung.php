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
                    'Welche immense Bedeutung das Unendliche in der Mathematik, und auch in der Physik, inne hat,'."\n".
                    'gibt ein Zitat von Hermann Weyl wieder:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'quote', text => array(
                        'Mathematik ist die Wissenschaft vom Unendlichen;'."\n".
                        'ihr Ziel ist die symbolische Erfassung des Unendlichen mit menschlichen, das heißt endlichen Mitteln.'."\n".
                        ''),
                        addtext => '\footnote{\cite{Weyl:DieStufenDesUnendlichen:1931}.}')),

                  array( 'text', array( text => array(
                    'Er möchte offenbar damit auch zum Ausdruck bringen, dass wir in der Mathematik an allen Ecken und Enden auf Unendliches stoßen'."\n".
                    'und versuchen es für Menschen möglichst verständlich, ausdrückbar und gut nutzbar zu machen.'."\n".
                    'Das waren auch für mich Energie gebende Anliegen und der Impuls, gepaart mit meiner Neugier, die Superial-Zahlen zu entwickelt.'."\n".
                    'Ich wollte unserem Verständnis und unseren Ausdrucksmöglichkeiten des Unendlichen'."\n".
                    'weitere faszinierende und nützliche Perspektiven und Werkzeuge hinzuzufügen.'."\n",
                      'Zur weiteren Einstimmung auf das Unendliche und seine Geschichte möchte ich dem Leser ein Video von Edmund Weitz'."\n".
                    'ans Herz legen: \jump[https://www.youtube.com/watch?v=H8ZBjsYU4JE]{}{Die Eroberung der Unendlichkeit (Kurze Geschichte der Mathematik 3)}.'."\n".
                    'Und wer tiefer einsteigen und verstehen möchte – eher mit Vorkenntnissen –, dem lege ich das Buch von David Foster \cite{Wallace:DieEntdeckungDesUnendlichen:2010}, nahe.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Weitreichender Erkenntnisgewinn')),
                  array( 'text', array( text => array(
                    'Die Erkenntnisse, die wir mit den Superial-Zahlen und ihren systematischen Vorgängern, den Biordinalzahlen,'."\n".
                    'jetzt schon erhalten, sind also weitreichend.'."\n".
                    'Und wir dürfen erwarten, dass noch ein ganzes Reich an interessanten und erstaunlichen Erkenntnissen'."\n".
                    'zu erforschen und zu schöpfen ist.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Zahlentheorie der Analysis', subline =>
                    'Eine direkte Verbindung von Analysis und Zahlentheorie')),
                  array( 'text', array( text => array(
                    'Über die Definition der \jump{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Ableitung-genau-verstehen}{Ableitung} und'."\n".
                    'der \jump{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Integral-genau-verstehen}{Integration} durch die aktual unendlichen Superial-Zahlen'."\n".
                    'wird die Analysis nun ganz direkt mit der Zahlentheorie verbunden.'."\n".
                    'Denn hierdurch werden nicht „nur“ die Primzahlen mit analytischen Methoden untersucht,'."\n".
                    'sondern die analytischen Methoden werden auf Basis eines unendlichen Produkts von Primzahlen definiert.'."\n",
                      'So spielen jetzt die Primzahlen auf beiden Seiten eine Rolle:'."\n".
                    'Zur Analyse, als neue \italic{Zahlentheorie der Analysis}, wie auch als Objekte der Analyse in der bekannten analytischen Zahlentheorie\footnote{\const{SupNum_g_footnote_text_AnalytischeZahlentheorie}}.'."\n".
                    'Dies hat weitreichende Konsequenzen, die beispielsweise zum Beweis der Riemannschen Vermutung\footnote{\const{SupNum_g_footnote_text_RiemannschenVermutung}}'."\n".
                    'einen Beitrag leisten könnten.'."\n",
                      'Darüber hinaus wird eine einfache und anschauliche Definition von Ableitungen und Integralen möglich.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Feine Differenzierung des Aktual-Unendlichen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Durch die Definition der superialen Einheit \lm{ \s }, als unendliches Primzahlprodukt, erhalten die Superial-Zahlen den Mehrwert, dass sich das Aktual-Unendliche nach den gewohnten Regeln'."\n".
                    'der Arithmetik behandeln und differenzieren lässt.'."\n".
                    'Wichtige Elemente der Arithmetik, wie beispeilsweise natürliche, ganze, gerade und ungerade Zahlen sowie Primzahlen, lassen sich so im Unendlichen untersuchen.'."\n".
                    'Dies hat auch Rückwirkung auf die Betrachtung des Endlichen.'."\n".
                    'Denn so ergeben sich unter anderem neue Möglichkeiten die Verteilung der Primzahlen unter den großen endlichen natürlichen Zahlen besser zu verstehen.'."\n".
                    'Auch die Primfaktorzerlegung und die Ordnung der rationalen Zahlen sind so noch einmal neu zu betrachten.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Die Frage der Kontinuumshypothese', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Die vorstehenden Fragen und weitere Einsichten, die sich durch die Superial-Zahlen ergeben,'."\n".
                    'führen uns zu einer neuen \jump{OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese}{Untersuchung der Kontinuumshypothese}.'."\n",
                      'Dieser Frage nähern wir uns jetzt sehr philosophisch und dann konzeptionell recht pragmatisch auf der Seite \italic{›\jumpname{OM:SupNum:Arithmetische-Struktur-Geometrie}‹}.'."\n".
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
                  
                  /* array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Motivation', subline =>
                  '')), */
                  array( 'text', array( text => array(
                    'In der Schule fand ich Ableitungen und Integrale immer sehr faszinierend.'."\n".
                    'Es war für mich erstaunlich, wie man über die Unendlichkeit ganz neue Erkenntnisse und Formeln gewinnen konnte.'."\n".
                    'Daraus hat sich damals ein tiefes Bedürfnis entwickelt zu verstehen, was dabei genau vor sich geht.'."\n".
                    'Auch fand ich den dafür genutzten Limes nicht so intuitiv, obwohl er faszinierendes ermöglichte, und suchte einen einfachen'."\n".
                    'und einsichtigeren Ansatz das gleiche zu erreichen.'."\n",
                      'Ich spielte viel mit der Formel zur Definition der Ableitung herum, was schließlich dazu führte, dass ich begriff,'."\n".
                    'dass der Limes nicht nur dazu führt,'."\n".
                    'dass ein bestimmtes Glied der sich ergebenen Summe dominant in den Vordergrund tritt und das Ergebnis bestimmt.'."\n".
                    'Mir wurde auch klar, dass all die anderen Summanden, die unendlich klein und damit scheinbar unbedeutend wurden,'."\n".
                    'eine Welt darstellten, die so quasi im Nirvana versank.'."\n",
                      'Genau diese „versunkene“ Welt weckte mein Interesse.'."\n".
                    'Irgendwie war ja auch klar, dass beim Integrieren, der Umkehrung der Ableitung, diese versunkene Welt schließlich wieder auftauchen musste.'."\n".
                    'Wie könnte sie da unwiederbringlich „vernichtet“ worden sein?'."\n".
                    'Durch das Herumspielen begriff ich:'."\n".
                    'Wir können auch ins Unendliche gehen, ohne den Limes zu benutzen!'."\n".
                    'Ohne, dass man die versinkenden Summanden wirklich zu Null werden lässt, wobei sie einfach pragmatisch als vernachlässigbar erklärt und weggeschmissen werden.'."\n".
                    'Was in der Praxis legitim ist, sollte in der Theorie nicht vernachlässigt sondern erforscht werden, sprach mein Herz.'."\n",
                      'Nach meiner Entdeckung des superialen Zahlensystems und als ich schließlich'."\n".
                    'die Funktion und damit die sinnvolle innere Struktur der superialen Basis \lm{ \s } erkannte, wurde mir bald klar:'."\n".
                    'Die Superial-Zahlen mussten eine Verbindung zur Struktur geometrischer Objekte haben und so auch mit der Kontinuumshypothese in Verbindung stehen.'."\n",
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
                    array( equ_text_std => 'SN.Ein.Pobl', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.Ein.Pobl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.Ein.Pobl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.Ein.Pobl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'beziehungsweise präziser'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Pobl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  \prodx_{ p \in \mathbb{P} }  p^{ω}  \;\; .  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit trägt jede endliche Primzahl im Primexponentenprodukt \lm{ \s } den aktual unendlichen Exponenten \lm{ ω }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Pobl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    'kanonisch mit dem vollständigen \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:NotationsvereinbarungPrimexponentenprodukt}{Einheits-Primexponentenprodukt}'."\n".
                    'aller endlichen Primzahlen identifiziert werden kann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  \equiv_{kan}  ω\overline{\#}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-MengenPrimfakultaet-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Zugleich wird die Primexponentenprodukt-Notation eingeführt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω\overline{\#}  =  \prodx_{ p \in \mathbb{P} }  p  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-MengenPrimfakultaet-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Damit gilt in der vereinbarten Kurzschreibweise:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Erg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  =  ω\overline{\#}  =  \prodx_{ p \in \mathbb{P} }  p  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimzahlen}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Schreibweise bedeutet keine gewöhnliche extensionale Gleichheit des von-Neumann-Ordinals mit einem klassischen unendlichen Produkt,'."\n".
                    'sondern die kanonische Identifikation von \lm{ ω } mit seinem vollständigen \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:NotationsvereinbarungPrimexponentenprodukt}{Einheits-Primexponentenprodukt}.'."\n".
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
                    'Ein Intervall der Länge \lm{ 1 } enthält entsprechend s normierte infinitesimale ganzzahlige Schritte.'."\n".
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
                    '\jump{OM:SupNum:Algebraische-Grundlagen:Erzeugungsanzahl}{Erzeugungssumme} summiert,'."\n".
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
                      array( display => 'on',  latex => '{  \sumx_{ \forall a \in [ 0, x [_{\mathbb{A}_{\R}}}  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 \cdot ω } - \frac{ x }{ 2 }  }',
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
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s', text =>
                                           
                'Mit Primzahlen ins Unendliche', subline =>
                  'Was ist unsere neue superiale Basis \lm{ \s }?')),
                  array( 'text', array( text => array(
                    'Wir haben nun eine gute Idee, was wir mit der superialen Basis \lm{ \s } anfangen können.'."\n".
                    'So stellt sich schließlich die Frage:'."\n",
                      'Können wir sagen, was \lm{ \s } genau ist?'."\n".
                    'Wie definieren wir unsere superiale Basis und stiften damit noch mehr Sinn; gewinnen noch mehr Erkenntnis?'."\n",
                      'Mit dieser wichtigen Frage konfrontierte mich einst ein Hamburger Universitätsprofessor,'."\n".
                    'den ich mit einer von ihm unverlangten E-Mail an ihn und einer darauf folgenden'."\n".
                    'E-Mail-Korrespondenz offenbar ziemlich nervte, weil ich ihm, mangels meiner Kenntnis, die Formeln nicht in den üblichen Formalien schrieb,'."\n".
                    'was für ihn vermutlich recht anstrengend war.'."\n".
                    'Unsere Korrespondenz wurde im Grunde mit dieser Frage und mit einem Hinweis und Ratschlag an mich beendet,'."\n".
                    'den ich nun nicht weiter vertiefen möchte.'."\n",
                      'Wie dem auch sei, für seine kluge Frage bin ich dem Herrn außerordentlich dankbar!'."\n".
                    'Denn sie hat in mir einen tief gehenden Denkprozess ausgelöst und schließlich zu'."\n".
                    'einer Erkenntnis geführt, deren Tragweite in meinen Augen nicht zu unterschätzen ist.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Primzahlen sind die Grundlage der Antwort', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Mit diesen Fragen kommen wir weiter, wenn wir uns mit den stillschweigenden Annahmen beschäftigen,'."\n".
                    'die wir treffen, wenn wir oben mit Hilfe von \lm{ \s } \jump{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Ableitung-genau-verstehen}{Ableitungen}'."\n".
                    'und \jump{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Integral-genau-verstehen}{Integrale} definieren.'."\n",
                      'Wir konnten bei der Herleitung des Integrals aus der Ableitung oben schon feststellen,'."\n".
                    'dass wir bezüglich der Ableitung schon stillschweigend oder unbewusst davon ausgegangen sind,'."\n".
                    'es würde unendlich viele unendlich kleine ganze Zahlen geben.'."\n".
                    'Beim Integrieren kommen wir nämlich in die Verlegenheit, in ganzen Schritten all die Differenzen'."\n".
                    'der Ableitung wieder aufsummieren zu müssen.'."\n".
                    'Dabei stellt sich die Frage:'."\n".
                    'Wie groß sind diese Schritte und wieviele Schritte sind notwendig, um die ursprüngliche'."\n".
                    'Funktion \lm{ f(x) } aus der abgeleiteten \lm{ f\'(x) } wieder herzustellen.'."\n",
                      'Als wir uns damit beschäftigten, kam die Erkenntnis, wir müssten \lm{ x \cdot \s }'."\n".
                    'Schritte in den Funktionswerten von \lm{ f\'(x) } der Größe \lm{ \s^{-1} }'."\n".
                    'von Null bis ausschließlich \lm{ x } addieren.'."\n",
                      'Diese Schritte konnten wir durch Skalierung von ganzen Zahlen von Null bis ausschließlich'."\n".
                    '\lm{ x \cdot \s } erzeugen,'."\n".
                    'was zum einen die Existenz dieser unendlich großen ganzen Zahlen voraussetzt'."\n".
                    'und zum anderen voraussetzt, dass sich diese Zahlen nach ihrer Größe ordnen lassen, also linear angeordnet sind.'."\n",
                      'Um recht simpel zu beginnen:'."\n".
                    'Welche Eigenschaften muss \lm{ \s } demnach haben, damit ein Produkt von \lm{ \s }'."\n".
                    'mit jeder rationalen Zahl eine ganze Zahl ergibt, auch wenn diese dann unendlich groß ist?'."\n".
                    'Diese Antwort geben wir nachfolgend.'."\n",
                      'Diese Frage setzt sich dann allgemeiner in der nach den \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen} fort.'."\n".
                    'Durch unseren Beweis der \italic{›\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}‹} und deren neuen Erkenntnisse kommen wir dann später in die Lage,'."\n".
                    'die Frage und Antwort von den rationalen Zahlen auf die Radikalformen (Wurzelausdrücke, durch Radikale darstellbar\footnote{\const{SupNum_g_footnote_text_TranszendenteZahlEigenschaften}}) zu erweitern.'."\n".
                    'Schließlich führen wir den Beweis der \italic{›\jumpname{OM:SupNum:Algebraische-Koeffizienten-Vermutung}‹},'."\n".
                    'die uns sogar die Erweiterung auf alle reell algebraischen Zahlen erlaubt.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Vortext:Definition-von-s', text =>
                  'Die Definition von \lm{ \s }', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Nach meinem Verständnis muss \lm{ \s } eine Primfaktorzerlegung haben,'."\n".
                    'die eine unendlich große Potenz aller endlichen Primzahlen ist.'."\n".
                    'Nur so ist gewährleistet, dass keine Potenz im Produkt einer rationalen Zahl mit \lm{ \s }'."\n".
                    'negativ und dadurch das Produkt eine gebrochene Zahl wird.'."\n".
                    'Und nur dadurch ist gewährleistet, dass wir ein solches Produkt beliebig endlich oft machen können,'."\n".
                    'ohne, dass das Ergebnis endlich werden kann, sondern unendlich groß bleibt.'."\n",
                      'In \lm{ \s } muss also jede Primfaktorzerlegung einer endlichen ganzen Zahl'."\n".
                    'beliebig endlich oft enthalten sein.'."\n".
                    'Eine Definition von \lm{ \s }, die dies explizit umsetzt, finden wir auf der Seite'."\n".
                    '\italic{›\jumpname{OM:SupNum:Arithmetische-Struktur-Geometrie}‹}'."\n".
                    'im Abschnitt \italic{›\jumpname{OM:SupNum:Arithmetische-Struktur-Geometrie:Vortext:DefinitionSuperialeEinheit}‹}.'."\n",
                      'Folgendes Primzahlprodukt ist das einfachste kleinste Produkt aus unendlich vielen Primfaktoren,'."\n".
                    'dass diese Bedingung erfüllt.'."\n".
                    'Dabei ist \lm{ \mathbb{P} } die Menge aller endlichen Primzahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Def', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  \displaystyle *( \prodx_{\forall p \in \mathbb{P}}  p *)^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'In diesem Produkt wird erst einmal das Produkt aller endlichen Primzahlen'."\n".
                    '\lm{ (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot \cdots)_{\#} } gebildet, um sie alle vorrätig zu haben.'."\n".
                    'Anschließend wird es so oft mit sich selber mal genommen, wie groß die Anzahl der endlichen natürlichen Zahlen ist – vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}} –,'."\n".
                    'um alle Primzahlen auch in einer Potenz vorrätig zu haben, die für alle gleich groß ist, aber so klein wie möglich,'."\n".
                    'dass die Potenz durch keine in rationalen Zahlen mögliche, negative Potenz in einem Produkt mit ihr endlich groß werden kann.'."\n",
                      '\const{SupNum_g_text_ZFCkonform}'."\n",
                      'Wie Formel \jumpname{OM:BiOrd:Einleitung:Vortext:Equ-Def-N-enthaelt-Null} definiert, setzen wir voraus, dass die natürlichen Zahlen die Null enthalten.'."\n".
                    'Den Grund hierfür verdeutlichen wir im Abschnitt \italic{›\jumpname{OM:SupNum:Algebraische-Grundlagen:Formalien:Zahlen-und-Mengen-im-Unendlichen}‹}.'."\n",
                      'Für das Primzahlprodukt von \lm{ \s } ergibt sich also, wie eben beschrieben,'."\n".
                    'eine mit unendlich mal unendlich vielen Primzahlen gefüllte Fläche der folgenden Art:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Def', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  \prodx_{\forall n \in \mathbb{N}} *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)_{\#}  }',
                                          label_name => 'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-fuer-alle-in-N-Primzahl-Prod', label_text => '\name{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-fuer-alle-in-N-Primzahl-Prod}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{\#, 1} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{\#, 2} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{\#, 3} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{\#, n \in \mathbb{N}} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots  }',
                                          label_name => 'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod', label_text => '\name{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)_{\#}^{ω}  }',
                                          label_name => 'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Prod-hoch-omega', label_text => '\name{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Prod-hoch-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Ein Stellenwertsystem', subline =>
                  'Eine fraktale Struktur')),
                  array( 'text', array( text => array(
                    'Bei etwas intensiverem Herumspielen fällt einem auf, dass die Superial-Zahlen sich wie ein'."\n".
                    '\jump{OM:SupNum:Algebraische-Grundlagen:Formalien:Stellenwertsystem}{Stellenwertsystem} verhalten.'."\n".
                    'Die Ziffern der Stellen können alle rationalen Zahlen sein, sogar negative.'."\n".
                    'Durch diese Erkenntnis finden wir die Möglichkeit, die Darstellung gegebenenfalls zu verkürzen, wie beispielsweise die folgende:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Def', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  - \frac{3}{5} \cdot \s^{2} + 25 \cdot \s^{1} + 3,5 \cdot \s^{0} - 7,2 \cdot \s^{-1} \\\ \qquad\qquad\qquad\quad  =  *〈 - \frac{3}{5} *〉*〈 25 *〉*〈 3,5 *〉․*〈 -7,2 *〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Zur Kennzeichnung der endlichen, nullten Stelle haben wir zwischen ihr und der minus ersten Stelle'."\n".
                    'einen Punkt gesetzt, wie das im Angelsächsischen hinter der nullten Stelle einer Dezimalzahl üblich ist.'."\n",
                      'Diese Darstellung verdeutlicht auch, dass es sich bei \lm{ \s } im Grunde um'."\n".
                    'eine unendlich große Eins oder genauer um eine superial große Eins handelt;'."\n".
                    'und bei \lm{ \s^{-1} } um eine unendlich kleine Eins oder genauer um eine superial kleine Eins:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Def', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  \s^{1}  =  *〈 1 *〉*〈 0 *〉.  =  *〈 1 *〉_{1}  }'),
                      array( display => 'on',  latex => '{  1  =  \s^{0}  =  *〈 1 *〉.  =  *〈 1 *〉_{0}  }'),
                      array( display => 'on',  latex => '{  \s^{-1}  =  .*〈 1 *〉  =  *〈 1 *〉_{-1}  }'),
                      array( display => 'on',  latex => '{  \s + \s^{-1}  =  *〈 1 *〉*〈 0 *〉.*〈 1 *〉  =  *〈 1 *〉_{1}*〈 1 *〉_{-1}  }'),
                      array( display => 'on',  latex => '{  \s + 1 + \s^{-1}  =  *〈 1 *〉*〈 1 *〉.*〈 1 *〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Anstatt eines Punktes kann auch die Potenz der vorstehenden Klammer durch einen Index gekennzeichnet werden.'."\n",
                      'Ich habe diese unter Umständen etwas kürzere und elegantere Darstellung eingangs nicht benutzt,'."\n".
                    'um die Formeln einfach und verständlich zu halten und damit eine gute Transparenz zu gewährleisten,'."\n".
                    'also um nicht durch zu viel Neues zu verwirren.'."\n".
                    'Nachfolgend werde ich sie jetzt häufiger nutzen.'."\n".
                    ''))),
                      
                  array( 'figure',
                    array_merge( $SupNum_g_figure_ary_GeradeSuperialZahlen, array( name => 'OM:SupNum:Einleitung:Vortext:Fig-GeradeSuperialZahlen'))),
                                            
                  array( 'text', array( text => array(
                    'Die Stellenwertsystem-Darstellung verdeutlicht, dass die Superial-Zahlen eine fraktale Struktur besitzen,'."\n".
                    'die sich in jeder Zahlenstelle beziehungsweise Potenzebene von \lm{ s } wiederholt'."\n".
                    '(siehe \jumpname{OM:SupNum:Einleitung:Vortext:Fig-GeradeSuperialZahlen}).'."\n",
                      'Ihre Selbstähnlichkeit bezieht sich darauf, dass die Gerade der endlichen rationalen Zahlen'."\n".
                    'um die unendlich kleinen, superialen Zahlen erweitert wird und auf diese Weise zwischen'."\n".
                    'den endlichen Zahlen noch unendlich viele, unendlich kleine Zahlengeraden verschiedenster Dimensionsgrößen hat.'."\n".
                    'Erstaunlicherweise kennt die Mathematik dadurch jetzt nicht nur orthogonale Dimensionen\footnote{\const{SupNum_g_footnote_text_Orthogonalitaet}},'."\n".
                    'die senkrecht zueinander stehen, sondern auch unendlich kleine, lineare Dimensionen – \italic{superiale Dimensionen} –,'."\n".
                    'die sich in fraktaler Weise zwischen unseren endlichen Zahlen verstecken.\footnote[*Entwick]{\color{*Entwick}{Ich frage mich, welchen (fraktalen) Zusammenhang gibt es zwischen den orthogonalen und den \italic{superialen Dimensionen}?}}'."\n".
                    'Auf Basis der \italic{superialen Einheit} \lm{ \s } lassen sich folglich'."\n".
                    'eben auch unendlich große, lineare Dimensionen beschreiben.'."\n".
                    'Zwischen denen liegen dann unsere endlichen Zahlen und so fort.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:X:X', text =>
                                           
                '\color{*Bearb}{(In Arbeit …)}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
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
                  
                  /* array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Illustrierende Rechenbeispiele', subline =>
                  'Funktionsweise in der Praxis')), */
                  array( 'text', array( text => array(
                    'Nachdem die theoretischen Kernresultate der Superial-Zahlen formal skizziert wurden,'."\n",
                    'sollen die folgenden konkreten Rechenbeispiele die praktische Funktionsweise verdeutlichen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:X', text =>

                '\italic{Inhalt}', subline =>
                  '')),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Ableitung-genau-verstehen'),
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Integral-genau-verstehen'),
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispieleErzeugungssummen'),
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Veraenderung-Primfaktorzerlegung-s-rationale-Koeffizienten'),
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Erweiterung-Arithmetik-Unendliche'),
                    )),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Ableitung-genau-verstehen', text =>
                                           
                'Ableitung genau verstehen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Das Nicht-Verschwinden aller Summanden funktioniert dann, wenn wir die beim \jump{OM:SupNum:Ableitungen-Integrale:Ableitung}{Ableiten}'."\n".
                    'gegen Null gehenden Summanden selber als unendlich klein, aber nicht als verschwindend betrachten.'."\n".
                    'Wir setzten den gegen Null gehenden Summanden zu \lm{ \Delta x := \s^{-1} }, zum Kehrwert der \italic{superialen Basis} \lm{ \s },'."\n".
                    'die wir im Verlauf genauer ergründen werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Abl', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  =  \lim\limits_{\Delta x \rightarrow +0}{ \frac{ f(x + \Delta x) - f(x) }{ \Delta x } }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-mit-Limes}', label_incr => false),
                      array( display => 'on',  latex => '{  \lim\limits_{\Delta x \rightarrow +0}{ \Delta x }  \widehat{=}  1 \s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-Limes-ist-s-hoch-minus-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  f\'(x)  :=  \frac{ f(x + \s^{-1}) - f(x) }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dies vertiefen wir auf der Seite \italic{\jumpname{OM:SupNum:Ableitungen-Integrale}}.'."\n",
                      'Dabei ist \lm{ \s^{-1} } ein neues Symbol, über das ich zunächst nur annahm, dass es kleiner als jede positive Zahl war und doch größer als Null.'."\n".
                    'Ähnlich wie bei den komplexen Zahlen die imaginäre Einheit \lm{ \i } war auch \lm{ \s^{-1} } eine neue Einheit, die ich als \italic{superial kleine Einheit} bezeichne.'."\n".
                    'In der Mathematik ist es kein Problem ein neues Symbol zu kreieren und zu definieren, solange sich dadurch keine Widersprüche ergeben.\footnote{Sekundärliteratur \\\\ Vgl. \cite{Freistetter:DieFreiheitDerImaginaerenZahlen:2016}. \\\\ Internet: \\\\ Vgl. \cite{Freistetter:DieFreiheitDerMathematik:2016}.}'."\n",
                      'Die superial kleine Einheit \lm{ \s^{-1} } führte dazu, dass die sonst bei der Ableitung verschwindenden Summanden \lm{ a_{k} } nicht verloren gehen, sondern in unendlich kleinen'."\n".
                    'Dimensionen \lm{ a_{-1} \s^{-1} + a_{-2} \s^{-2} + a_{-3} \s^{-3} + \cdots } erhalten blieben, also in einer \italic{superial} kleinen Welt.'."\n".
                    'Von hier können sie auch beim Integrieren wieder auftauchen.'."\n".
                    'Die Dimension \lm{ a_{0} \s^{0} = a_{0} } stellt dann die uns bekannten, endlichen Zahlen dar, weil \lm{ \s^{0} = 1 } ist, wie gewohnt.'."\n",
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Konkrete Ableitungen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Nun zwei Beispiele, um anschaulich zu verstehen, was vor sich geht:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'So ergibt sich als Beispiel für die Funktion \lm{ f(x) = x^{2} }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Abl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  \frac{ *( x + \s^{-1} *)^{2} - x^{2} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-basis}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ *( x^{2} + 2 x \cdot \s^{-1} + \s^{-2} *) - x^{2} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-ausmultipliziert}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ 2 x \cdot \s^{-1} + \s^{-2} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-subtrahiert}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  2 x + \s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-Ergebnis}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Wenn wir also \lm{ \s^{-1} } zu Null setzen, dann kommt das übliche Ergebnis \lm{ f\'(x) = 2 x } heraus.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Für \lm{ f(x) = x^{3} } ergibt sich dann:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Abl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  \frac{ *( x + \s^{-1} *)^{3} - x^{3} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-basis}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ *( x^{3} + 3 x^{2} \cdot \s^{-1} + 3 x \cdot \s^{-2} + s^{-3} *) - x^{3} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-ausmultipliziert}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ 3 x^{2} \cdot \s^{-1} + 3 x \cdot \s^{-2} + \s^{-3} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-subtrahiert}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  3 x^{2} + 3 x \cdot \s^{-1} + \s^{-2}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-Ergebnis}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Wenn wir also \lm{ \s^{-1} } zu Null setzen, dann kommt das übliche Ergebnis \lm{ f\'(x) = 3 x^{2} } heraus.'."\n",
                        '\\\\ '."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'So können wir sehr genau verfolgen, was vor sich geht, und nichts verschwindet.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Integral-genau-verstehen', text =>
                                           
                'Integration genau verstehen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Beim \jump{OM:SupNum:Ableitungen-Integrale:Integration}{Integral} müssen wir nun den Prozess des Differenzierens wieder Rückgängig machen und'."\n".
                    'lernen viel Interessantes dabei, wenn wir herausfinden, wie das geht.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Ganze Superial-Zahlen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Interessanter wird es noch, wenn wir uns nun mit der Umkehrung der Ableitung aus der neuen Perspektive beschäftigen,'."\n".
                    'mit der Integration:'."\n",
                      'Beim Flächenintegral, von dem wir hier sprechen, handelt es sich um eine Summe'."\n".
                    'aus unendlich schmalen und endlich hohen Flächen.'."\n".
                    'In ihm werden all die unendlich kleinen Differenzen aufsummiert, aus der sich die Ableitung ergibt'."\n".
                    'und die gemeinsam zurück zum Verlauf der Ausgangsfunktion führen.'."\n",
                      'Wie groß die Schritte der Summation sind, erkennen wir an der Ableitung.'."\n".
                    'Die aufsummierten Flächen gleichen den Ergebnis-Differenzen der Ableitung \lm{ f\'(x) } in unendlich kleinen Einheiten und'."\n".
                    'haben damit deren Höhe.'."\n".
                    'Ihre Streifenbreite ist \lm{ \Delta x = \s^{-1} }, wie die Funktionsparameter-Differenz der Ableitung.'."\n".
                    'Dabei ist \lm{ \s^{-1} } eine unendlich kleine, in ihrer \jump{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}{Definition normierte Einheit}.'."\n".
                    'Eine \italic{aktual unendlich kleine Eins}: \lm{ 1 \s^{-1} }.'."\n",
                      'Auf der anderen Seite müssen wir eine unendlich große und ganze Anzahl der Streifen summieren.'."\n".
                    'Es müssen genau \lm{ f\'(x) \cdot \s } Streifen sein, wenn wir bei \lm{ x = 0 } beginnen, damit sich die \lm{ \s^{-1} } breiten Streifen zu einer endlich großen'."\n".
                    'Zahl \lm{ f(x) - f(0) } aufsummieren und wir die Integralfunktion mit Startwert Null erhalten.'."\n".
                    'Damit ist klar, dass \jump{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ueber-P-omega}{\lm{ \s } eine unendlich große, ganze und positive Zahl} ist, eine \italic{aktual unendlich große Eins} – \lm{ 1 \s }.'."\n".
                    'Es muss also formal möglich sein, alle positiven ganzen Zahlen von Null bis \lm{ f\'(x) \cdot \s } zu zählen,'."\n".
                    'um die Summe für das Integral zu beschreiben:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei \lm{ \mathbb{S}_{\Z} } die Menge der \italic{ganzen Superial-Zahlen}, eine Teilmenge der \italic{Superial-Zahlen} \lm{ \mathbb{S} }.'."\n".
                      'Seien \lm{ \lbrack a, b \lbrack_\mathbb{\mathbb{S}_{\Z}} } die ganzen Superial-Zahlen'."\n".
                      'in der \jump{OM:SupNum:Algebraische-Grundlagen:Formalien:Intervall-Menge}{Intervall-Menge} von \lm{ a } bis \lm{ b }, ohne \lm{ b }, aus \lm{ \mathbb{S}_{\Z} }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x \cdot \s[_{\mathbb{S}_{\Z}}  \subset  \mathbb{S}_{\Z}  }'),
                    ))),

                  array( 'text', array( text => array(
                    'Die ganzen Superial-Zahlen können grundsätzlich Summanden aller natürlichen Potenzen von \lm{ \s }, also Null und größer, enthalten;'."\n".
                    'in der nullten Potenz, im endlichen Summanden, eben nur endliche ganze Zahlen,'."\n".
                    'in den höheren Potenzen dann alle reell algebraischen Zahlen \lm{ \mathbb{A}_{\R} } als Koeffizienten, also auch irrationale Zahlen,'."\n".
                    'wie Wurzeln, sämtliche Radikalformen und so weiter.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Prinzipiell haben ganze Superial-Zahlen mit der maximalen Potenz Eins – \lm{ \s^{1} = \s } –,'."\n".
                      'die wir in unseren Beispielen zum Integrieren als Grundlage benötigen, also die Form:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{\R} *) *( \forall z \in \mathbb{Z} *)  *[  a \cdot \s + z  \in  \mathbb{S}_{\Z}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Für die genaue Menge können wir, angelehnt an die später gefundene Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s},'."\n".
                      'folgende Beschreibung geben – wie immer mit \lm{ x \in \mathbb{A}_{\R} }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  [ 0, \s [_{\mathbb{S}_{\Z}}  =  \\\ \quad *\{  r  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\R}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  r  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < 1  \\\\  \s + z^{-}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s}', label_incr => false),
                      array( display => 'on',  latex => '{  [ 0, x \cdot \s [_{\mathbb{S}_{\Z}}  =  \\\ \quad *\{  r  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\R}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  r  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < x  \\\\  x \cdot \s + z^{-}  &  \text{ falls } a = x  \end{cases}  *]  *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Menge-natuerliche-Vorgaenger-xs}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Es handelt sich also konkret um folgende ganze Superial-Zahlen, die auszugsweise so aussehen, wobei Beginn und Ende exakt stimmen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x \cdot \s [_{\mathbb{S}_{\Z}}  =  \\\  \quad *\{  \quad\,  0, 1, 2, \cdots n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{1}{2} x \s + z^{-}, \cdots \frac{1}{2} x \s - 1,\; \frac{1}{2} x \s,\; \frac{1}{2} x \s + 1, \cdots \frac{1}{2} x \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{2}{3} x \s + z^{-}, \cdots \frac{2}{3} x \s - 1,\; \frac{2}{3} x \s,\; \frac{2}{3} x \s + 1, \cdots \frac{2}{3} x \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, x \s + z^{-}, \cdots x \s - 2, x \s - 1   \quad *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Menge-natuerliche-Vorgaenger-xs-Elemente}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Jetzt haben wir zwar die richtige Anzahl an Schritten, aber sie sind nicht fein genug,'."\n".
                      'sollen sie doch eigentlich von Null bis \lm{ x } in \lm{ \s^{-1} } kleinen Schritten laufen.'."\n".
                      'So müssen wir die Zahlen dieses Intervals der ganzen Superial-Zahlen also mit \lm{ \s^{-1} } multiplizieren'."\n".
                      'und auf diese Weise auf eine \jump{OM:SupNum:Algebraische-Grundlagen:Formalien:Skalierung-Teilmenge-Superial-Zahlen}{superial kleine Größenordnung skalieren}.'."\n",
                        'Alternativ können wir auch eine Menge definieren, in der alle Zahlen schon mit \lm{ \s^{-1} } multipliziert sind,'."\n".
                      'wie in \italic{›\jumpname{OM:SupNum:Algebraische-Grundlagen:Formalien:Skalierung-Teilmenge-Superial-Zahlen}‹} definiert:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}^{y}_{T}  :=  *\{  a  *|*  *( \forall t \in \mathbb{S}_{T} *) *[ a = t \cdot \s^{y} *]  *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Algebraische-Grundlagen:Formalien:Skalierung-Teilmenge-Superial-Zahlen:Equ-Menge-superiale-Ebene-skalieren}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \mathbb{S}^{-1}_{\Z}  =  *\{  a  *|*  *( \forall z \in \mathbb{S}_{\Z} *) *[ a = z \cdot \s^{-1} *]  *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Algebraische-Grundlagen:Formalien:Skalierung-Teilmenge-Superial-Zahlen:Equ-Menge-superial-kleine-ganze-Zahlen}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Im benötigten Mengen-Intervall laufen die Zahlen in \lm{ x \cdot \s } unendlich kleinen Schritten'."\n".
                      'der Größe \lm{ \s^{-1} } durch.'."\n".
                      'Auszugweise sieht diese Intervall-Menge von unendlich feinschrittigen superial kleinen ganzen Superial-Zahlen folgendermaßen aus,'."\n".
                      'wobei Beginn und Ende exakt stimmen und sich ihre Größensortierung nach der lexikografischen Ordnung\footnote{\const{SupNum_g_footnote_text_LexikographischeOrdnung}},'."\n".
                      'unter Berücksichtigung der Potenz von \lm{ \s }, richtet:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x[_{\mathbb{S}^{-1}_{\Z}}  =  \\\  \quad *\{  \quad\,  0 \s^{-1}, 1 \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{1}{2} x - 2 \s^{-1},\; \frac{1}{2} x - \s^{-1},\; \frac{1}{2} x,\; \frac{1}{2} x + \s^{-1},\; \frac{1}{2} x + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{2}{3} x - 2 \s^{-1},\; \frac{2}{3} x - \s^{-1},\; \frac{2}{3} x,\; \frac{2}{3} x + \s^{-1},\; \frac{2}{3} x + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, x - 3 \s^{-1}, x - 2 \s^{-1}, x - \s^{-1}   \quad *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen-normiert}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Oder in faktorisierter Form von infinit vielen infinitesimalen ganzen Schritten ausgedrückt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x[_{\mathbb{S}^{-1}_{\Z}}  =  \\\  \quad *\{  \quad\,  (0) \s^{-1}, (1) \s^{-1}, (2) \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *( \frac{1}{2} x \s - 2 *) \s^{-1},\; *( \frac{1}{2} x \s - 1 *) \s^{-1},\; *( \frac{1}{2} x \s *)  \s^{-1},\; *( \frac{1}{2} x \s + 1 *) \s^{-1},\; *( \frac{1}{2} x \s + 2 *) \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots *( \frac{2}{3} x \s - 2 *) \s^{-1},\; *( \frac{2}{3} x \s - 1 *) \s^{-1},\; *( \frac{2}{3} x \s *)  \s^{-1},\; *( \frac{2}{3} x \s + 1 *) \s^{-1},\; *( \frac{2}{3} x \s + 2 *) \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, *( x \s - 3 *) \s^{-1}, *( x \s - 2 *) \s^{-1}, *( x \s - 1 *) \s^{-1}   \quad *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen-faktorisiert}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Nun können wir das allgemeine Integral recht einfach definieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \int_{a}^{x} f\'(n) \,dn  \widehat{=}  \!\!\! \sum_{ \forall n \in [a, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! f\'(n) \cdot \s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Aequ-Integral-mit-Summe-ueber-Intervall-Menge-a-bis-x-superial-kleiner-ganzer-Zahlen}', label_incr => false),
                      array( display => 'on',  latex => '{  f(x)  :=  f(a) + \!\!\! \sum_{ \forall n \in [a, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! f\'(n) \cdot \s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Integrale-mit-s-hoch-minus-Eins-Kurznotation}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Diese Summe ist so definiert, dass sie im Falle von \lm{ x < 0 } negativ wird.'."\n",
                        'So bekommen wir einen neuen Ausdruck für das Integral in Form einer originären Summe.'."\n",
                        '\\\\'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Wir versenken die Funktionswerte der Ableitung also im unendlich Kleinen, als unendlich dünne Streifen, und lassen die'."\n".
                    'ursprüngliche Funktion aus der Versenkung wieder im Endlichen erscheinen, durch endlos feines Aufsummieren.'."\n",
                      'Hierzu benötigen wir ganze Superial-Zahlen, skaliert ins superial kleine.'."\n".
                    'Diese werden wir im folgenden Beispiel besser praktisch kennenlernen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Integral-genau-verstehen:Konkretes-Integral', text =>
                  'Konkretes Integral', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Nun ein Beispiel, um anschaulich zu verstehen, was vor sich geht.'."\n".
                    'Dieses finden wir in der \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystem-Schreibweise}'."\n".
                    'auch im Abschnitt \italic{›\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Beispiel-eines-konkreten-Integrals}‹}.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Wir nehmen das erste obige \jump{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Ableitung-genau-verstehen}{Ableitungsbeispiel} \lm{ f(x) = x^2 } mit'."\n".
                      'dem Ableitungsergebnis \lm{ f\'(x) = 2 x + \s^{-1} } und setzen dies in unsere Integralformel ein:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f(x)  =  f(0) \; + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\! *( 2 n + \s^{-1} *) \cdot \s^{-1}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\! *( 2 n \cdot \s^{-1} + \s^{-2} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  f(0) \; + \; 2 \cdot \s^{-1} \cdot \!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n \; + \; \s^{-2} \cdot \!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! 1  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Anschließend haben wir die innere und äußere Summe in zwei getrennte Summen umgeformt.'."\n",
                        'Die hintere Summe addiert die Eins \lm{ x \cdot \s } mal, weil die Schrittgröße hierbei ja keine Rolle spielt,'."\n".
                      'sondern nur die Schrittanzahl, und das ergibt natürlich auch \lm{ x \cdot \s }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  f(0) \; + \; 2 \cdot \s^{-1} \cdot \!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n \; + \; \s^{-2} \cdot x \cdot \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  f(0) \; + \; 2 \cdot \s^{-1} \cdot \!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n \; + \; x \cdot \s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Integriere-zu-x2-bis-auf-letzte-Summe}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Die übrige Summe der superial kleinen ganzen Zahlen der ersten \lm{ x \cdot \s } Elemente dieser Menge, mit der Null,'."\n".
                      'ergibt sich aus der angepassten Gaußschen Summenformel\footnote{\const{BiOrd_g_footnote_text_GaussscheSummenformel}},'."\n".
                      'wie bei den Biordinalzahlen im Abschnitt \italic{›\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:SummeAllerNatuerlichenZahlenBisInsAktualUnendlicheBerechnen}‹} nach Formel'."\n".
                      '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich} angegeben,'."\n".
                      'weil die Menge \lm{ \mathbb{S}_{\N} } nach Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-g}'."\n".
                      'zur Klasse \lm{ \mathbb{K}_{\infty,g} } der Gauß-Summen äquivalenten Klassen – so auch Mengen – gehört:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{\N}  \in  \mathbb{K}_{\infty,g}  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-g}', label_incr => false),
                      array( display => 'on',  latex => '{  *( \mathbb{M} \in \mathbb{K}_{\infty,g} *) *( \forall n \in \mathbb{M} *)  *[  \sum_{ \forall i \in [ 0, n [_{\mathbb{M}} } \!\!\!\! i  =  \frac{ n^{2} - n }{ 2 }  *]  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{S}_{\N} *)  *[  \sum_{ \forall i \in [ 0, n [_{\mathbb{S}_{\N}} } \!\!\!\! i  =  \frac{ n^{2} - n }{ 2 }  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Diese Summe ist extra darauf angepasst, dass sie auch für aktual unendlich große Werte von \lm{ n },'."\n".
                      'also für aktual unendlich große natürliche Zahlen, gilt.'."\n",
                        'Wir müssen nur berücksichtigen, dass die Werte der gesuchten Summe in superial kleinen Schritten daher kommen:'."\n".
                      'Das bedeutet, dass wir es mit \lm{ x \cdot \s } Elementen zu tun haben – anstatt mit \lm{ x } –,'."\n".
                      'was in der oben stehenden Formel auf der Ergebnisseite als \lm{ x \cdot \s } für \lm{ n } eingeht.'."\n".
                      'Jedoch ist die Größe der einzelnen Summanden auf Ebene der ganzen Zahlen superial klein, sodass wir das Ergebnis um eine superiale Potenz \lm{ \s }'."\n".
                      'verringern müssen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \frac{ *( x \cdot \s *)^{2} - x \cdot \s }{ 2 } \cdot \s^{-1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot \s - x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Diese Summe haben wir auch noch einmal im Einzelnen im Rahmen der Superial-Zahlen aus ihren Teilsummen im Abschnitt \italic{›\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Summen-zur-Integration-von-2x-plus-supkl-Eins:Direkte-Herleitung-der-angepassten-Gaussschen-Summenformel}‹}'."\n".
                      'hergeleitet, um zu zeigen, und damit ganz sicher zu gehen, dass diese richtig ist.'."\n",
                        'Das ist genau das gesuchte Ergebnis, was wir sofort durch Überprüfung sehen.'."\n".
                      'Dies eingesetzt in Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Integriere-zu-x2-bis-auf-letzte-Summe}'."\n".
                      'ergibt'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Int', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f(x)  =  f(0) \; + \; 2 \cdot \s^{-1} \cdot \frac{ x^{2} \cdot \s - x }{ 2 } \; + \; x \cdot \s^{-1}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  f(0) \; + \; x^{2} - x \cdot \s^{-1} \; + \; x \cdot \s^{-1}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  f(0) \; + \; x^{2}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  0^{2} \; + \; x^{2}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  x^{2}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und ist auch das erwartete Ergebnis.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wie wir sehen, ist es tatsächlich mit den Superial-Zahlen möglich, ein Integral eines Polynoms'."\n".
                    'explizit auszurechnen.'."\n".
                    'Dies geht so einfach schon mal mit jedem Integral eines Polynoms, ist bei Polynomen höheren Grades aber natürlich entsprechend aufwendiger.'."\n".
                    'Offensichtlich ist dabei, dass wir so recht einfach verstehen, was bei der Berechnung des Integrals im Detail vor sich geht.'."\n",
                      'Und das ist ja eines meiner Ziele, beim Ableiten und besonders beim Integrieren nicht so eine Black-Box vor uns zu haben.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Auf diese Weise ergibt sich für uns ein zunehmend konkretes Bild davon, was die superiale Basis \lm{ \s } eigentlich ist'."\n".
                    'und was wir mit \lm{ \s } alles anfangen können.'."\n".
                    'Aus diesem besser werdendem Bild, und besonders über die nähere Beleuchtung der Frage der ganzen Superial-Zahlen,'."\n".
                    'kommen wir gleich zu einer ganz bemerkenswerten Definition unserer superialen Basis \lm{ \s }.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispieleErzeugungssummen', text =>
 
                'Beispiele für Erzeugungssummen')),
                  array( 'text', array( text => array(
                    'Wir werden im Folgenden noch sehen, dass dieses Vorgehen weitere neue Erkenntnishorizonte eröffnet.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispieleErzeugungssummen', text =>
                  'Vom Aufsummieren superial infinitesimaler ganzer Zahlen zur Intervalsumme der reell algebraischen Zahlen')),
                  array( 'text', array( text => array(
                    'Nur zum Appetit machen können wir hier schon mal kurz zeigen, dass die zuletzt errechnete Summe \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x}'."\n".
                    'sich auch folgendermaßen beschreiben lässt, wenn wir ihren Bruch in zwei Teile zerlegen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot \s }{ 2 } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Der erste Summand kann später im Abschnitt \italic{›\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Summen-zur-Integration-von-2x-plus-supkl-Eins}‹} aus der Struktur der ganzen Superial-Zahlen'."\n".
                    'und unseren Erkenntnissen in der Theorie der Biordinalzahlen berechnet werden zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ x^{2} \cdot \s }{ 2 }  =  *( \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\R}}}  \!\! a  \;\; +  \! \sum_{ \forall a \in ] 0, x ]_{\mathbb{A}_{\R}}}  \!\! a *) \cdot ω  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Doppelsummenausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ x^{2} \cdot \s }{ 2 }  =  \overline{\#} [ 0, x [_{\mathbb{A}_{\R}} \; \cdot \; x \cdot ω  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei steht das Symbol \lm{ ω } für die Anzahl der endlichen natürlichen Zahlen, mit der Null, in der Menge \lm{ \mathbb{N} };'."\n".
                    'also für die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}.'."\n".
                    'Und das Symbol \lm{ \overline{\#} } gibt die Anzahl der Elemente der nachfolgenden Menge an.'."\n",
                      'Gleiches gilt auch für den zweiten Summanden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  - \frac{ x }{ 2 }  =  \overline{\#} [ 0, x \, [_{\mathbb{A}_{\R}} \; \cdot \sum_{ \forall z \in \mathbb{Q} }  z \cdot \s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-ungeloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  - \frac{ x }{ 2 }  =  \overline{\#} [ 0, x \, [_{\mathbb{A}_{\R}} \, \cdot \; \frac{ -ω }{ \s }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-geloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  - \frac{ x }{ 2 }  =  - \; \overline{\#} [ 0, x \, [_{\mathbb{A}_{\R}} \, \cdot \; \frac{ ω }{ \s }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Hierbei ist es vermutlich für den ein oder anderen erstaunlich, dass ganz unabhängig von den hier entwickelten Superial-Zahlen'."\n".
                    'in der Theorie der Biordinalzahlen deutlich wird, dass genauso viele endliche rein negative ganze Zahlen existieren,'."\n".
                    'wie es endliche natürliche Zahlen gibt, also endliche positive ganze Zahlen, mit der Null.'."\n".
                    'Demnach finden wir, bei genauer Untersuchung, eine \jump{OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-reell-algebr-Zahlen}{fundamentale Asymmetrie}'."\n".
                    'zwischen der ontologischen Struktur der endlichen ganzen Zahlen und der Verteilung ihrer Werte (siehe \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen}, im Abschnitt \italic{›\jumpname{OM:SupNum:Eigenschaften:StrukturVonS}‹}).'."\n".
                    'Dadurch ergibt die Summe aller endlichen ganzen Zahlen die aktual unendlich große negative Zahl \lm{ -ω } (siehe Formel \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}).'."\n",
                      'Addieren wir nun beide Summanden, so erhalten wir:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \overline{\#} [ 0, x [_{\mathbb{A}_{\R}} \; \cdot \; x \cdot ω \; - \; \overline{\#} [ 0, x \, [_{\mathbb{A}_{\R}} \, \cdot \; \frac{ ω }{ \s }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \overline{\#} [ 0, x [_{\mathbb{A}_{\R}} \; \cdot \; ω \cdot *( x - \frac{ 1 }{ \s } *)  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz-ausgeklammert}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Ein mir bisher unbekanntes und bemerkenswertes Ergebnis aus unendlichen Summen und aktual unendlichen Anzahlen.'."\n",
                      'Ebenso für die Summe aller reell algebraischen Koeffizienten \lm{ \mathbb{A}_{\R} } der Superial-Zahlen von Null bis ausschließlich – oder einschließlich –'."\n".
                    '\lm{ x } können wir ein Ergebnis finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Sum', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\R}}}  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 \cdot ω } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall a \in [ 0, x ]_{\mathbb{A}_{\R}}}  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 \cdot ω } - \frac{ x }{ 2 } + x  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall a \in [ 0, x ]_{\mathbb{A}_{\R}}}  \!\! a  =  \frac{ x^{2} \cdot \s }{ 4 \cdot ω } + \frac{ x }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Summe ließ sich vorher nicht explizit in einer aktual unendlichen Zahl ausdrücken, soweit mir bekannt.'."\n",
                      'In alldem kommen einige interessante Dinge vor, wie wir sehen, die zuvor wohl nicht zu fassen waren:'."\n".
                    'Auch die Anzahl aller reell algebraischen Zahlen, insgesamt und in einem Intervall, konnte nach meinem Wissen zuvor'."\n".
                    'nicht durch eine aktual unendliche Zahl ausgedrückt werden.'."\n".
                    'Und auch, wie eben gesagt, dass die Summe der endlichen ganzen Zahlen negativ ist und \lm{ -ω } entspricht,'."\n".
                    'war mir nicht bekannt.'."\n",
                      'Ich denke, all dies ist schon etwas ziemlich besonderes und kann Appetit auf mehr machen.'."\n".
                    'Da ist im Folgenden noch einiges faszinierendes zu Entdecken.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Veraenderung-Primfaktorzerlegung-s-rationale-Koeffizienten', text =>

                'Die Veränderung der Primfaktorzerlegung von \lm{ \s } durch rationale Koeffizienten', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Rationale Zahlen und ihre Primfaktorzerlegung', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Ebenso, wie jede natürliche Zahl größer Eins eine Primfaktorzerlegung\footnote{\const{SupNum_g_footnote_text_Primfaktorzerlegung}} hat,'."\n".
                    'so hat im Grunde auch jede rationale Zahl größer Null und ungleich Eins eine'."\n".
                    'Primfaktorzerlegung, wenn wir negative Potenzen der Primzahlen zulassen, wie beispielsweise:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Rat', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ 250 }{ 567 }  =  \frac{ 2 \cdot 5^{3} }{ 3^{4} \cdot 7 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ 250 }{ 567 }  =  2 \cdot 3^{-4} \cdot 5^{3} \cdot 7^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies kommt daher, weil bekanntermaßen jede rationale Zahl ein Bruch zweier ganzer Zahlen ist,'."\n".
                    'ausgeschlossen ist natürlich durch Null zu teilen, und alle negativen Exponenten zusammen den Nenner des Bruchs darstellen.'."\n",
                      'Welche Eigenschaft muss die Zahl \lm{ \s } nun haben, sodass sie multipliziert mit jeder'."\n".
                    'rationalen Zahl immer noch eine ganze Zahl ergibt?'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'XXX', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Mit Hilfe der neuen Theorie der \jump{OM:BiOrd:Home}{Biordinalzahlen} können wir auch Zahlen wie'."\n".
                    '\lm{ ω - n }, mit \lm{ n \in \mathbb{N} }, darstellen und damit die Veränderung der Primzahlpotenzen'."\n".
                    'des \italic{unendlichen Primzahl-Flächenprodukts} durch rationale Koeffizienten mit biordinalen Potenzen angeben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Rat', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{2}{9} \cdot \s  =  2^{ ω + 1} \cdot 3^{ ω - 2} \cdot *( 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)_{\#}^{ω}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier können wir sehen, dass \lm{ \s } durch Multiplikation mit endlich beliebig vielen'."\n".
                    'rationalen Zahlen immer unendlich groß bleibt, also seine superiale Dimension nicht verändert.'."\n".
                    'Denn dadurch werden, aufgrund der Primfaktorzerlegung endlicher ganzer Zahlen, immer'."\n".
                    'nur natürliche Zahlen auf die jeweiligen Potenzen addiert oder von ihnen abgezogen.'."\n".
                    'Da für jede der endlichen ganze Zahlen \lm{ z_{1} } und \lm{ z_{2} } die \jump{OM:BiOrd:Einleitung:NeueEinsichten:NeueEinsichtenZuPosAktualUnendl}{Ungleichung \lm{ ω + z_{1} < 2 ω + z_{2} } immer'."\n".
                    'bestehen bleibt}, kann kein rationaler Koeffizient \lm{ q_{m} } einer endlich ganzzahligen Potenz \lm{ m } in'."\n".
                    '\lm{ \s^{m} } in eine andere Potenzebene bringen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Rat', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \nexists q_{m} \in \mathbb{Q}^{+} *) *( \forall q_{m - 1} \in \mathbb{Q}^{+} *)  \\\ \qquad\qquad\qquad *[  q_{m} \cdot s^{m}  <  q_{m - 1} \cdot s^{m - 1}  *]   }'),
                      array( display => 'on',  latex => '{  *( \nexists q_{m} \in \mathbb{Q}^{+} *) *( \forall q_{m + 1} \in \mathbb{Q}^{+} *)  \\\ \qquad\qquad\qquad *[  q_{m} \cdot s^{m}  >  q_{m + 1} \cdot s^{m + 1}  *]   }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Potenz \lm{ k } in \lm{ \s^{k} } dominiert den Koeffizienten \lm{ q_{k} }'."\n".
                    'bezüglich der Größe in der Anordnung und ist der Grund für die lexikografische Ordnung\footnote{\const{SupNum_g_footnote_text_LexikographischeOrdnung}}'."\n".
                    'der Superial-Zahlen.'."\n",
                      'Diese Eigenschaft ist generell sehr bemerkenswert und tatsächlich auch durch die'."\n".
                    'Definition von \lm{ \s } über das unendliche Primzahl-Flächenprodukt gewährleistet.'."\n".
                    'Weiteres zur Dominanz der Potenzen von \lm{ \s } untersuchen wir im Abschnitt \italic{\jumpname{OM:SupNum:Algebraische-Grundlagen:Formalien:Zahlen-und-Mengen-im-Unendlichen}}.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Erweiterung-Arithmetik-Unendliche', text =>
                                           
                'Erweiterung der Arithmetik ins Unendliche', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen erweitern die uns bekannte Arithmetik\footnote{\const{NSOSP_g_footnote_text_Arithmetik}}'."\n".
                    'ins Aktual-Unendliche, wobei sehr viele der ekannten Regeln nicht nur im Endlichen gelten,'."\n".
                    'sondern auch in der unendlichen Erweiterung:'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Die Untermengen der reellen Zahlen erweitern sich ins Unendliche', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Es werden im Grunde alle wichtigen Untermengen der reellen Zahlen ins Aktual-Unendliche erweitert.'."\n".
                    'So gibt es zum Beispiel natürliche \lm{ \mathbb{S}_{\N} }, ganze \lm{ \mathbb{S}_{\Z} }, gerade und ungerade, rationale Superial-Zahlen \lm{ \mathbb{S}_{\Q} } und auch superiale Primzahlen.'."\n",
                      'Reell algebraische Zahlen \lm{ \mathbb{A}_{\R} }, so auch irrationale Wurzeln und Radikalformen, ordnen sich in die neue Struktur ein, indem sie die Rolle der'."\n".
                    'Koeffizienten des superialen Stellenwertsystems \lm{ \mathbb{A}_{\S} = \mathbb{A}_{\R} } übernehmen.'."\n".
                    'Transzendente Zahlen sind aus der neuen Perspektive gesehen dann Zahlen, die, sehr allgemein gesprochen, an mehreren Stellen des Stellenwertsystems nicht Null sind;'."\n".
                    'oder die unendlich klein oder groß sind, je nach Interpretation.'."\n",
                      'So bekommen wir einen detaillierten Überblick, wie die Untermengen der reellen Zahlen zueinander gehören,'."\n".
                    'verständlicher, als es bisher der Fall war, meine ich.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Unendliche Primzahlen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Auch eine Erweiterung der Primzahlen kann auf diese Weise definiert werden, wie gesagt, und wir erhalten die Menge \lm{ \mathbb{S}_{\P} } der \italic{superialen Primzahlen}.'."\n".
                    'Zum Beispiel sind die Zahlen \lm{ s - 1 } und \lm{ s + 1 } unendlich große Primzahlen, weil sie durch keine endliche Primzahl ganzzahlig teilbar sind'."\n".
                    'und auch keine andere Zahl in diesem System gefunden werden kann, die diese Zahlen ganzzahlig teilt.'."\n".
                    'Die Zahlen \lm{ s \pm 2 } sind hingegen beide durch \lm{ 2 } teilbar, also keine Primzahlen.'."\n",
                      'Diese Erweiterung der Primzahlen ins Unendliche ist interessant, weil sie die Verteilung der Primzahlen'."\n".
                    'im Unendlichen beleuchtet und so auch neue Einsichten für die endlichen Primzahlen verspricht.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Rechnen im Unendlichen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Auch das beliebige vorwärts und rückwärts Zählen, die Addition, die Multiplikation und deren Umkehrrechenarten,'."\n".
                    'die Subtraktion und die Division, werden ins Unendliche erweitert.'."\n".
                    'Ebenso gibt es weiter den Betrag einer Zahl, das Modulo und den Rest einer Teilung.'."\n",
                    ''))),
                  array( 'headline', array( headlineTag => 'h5', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Neue Einsichten zum Rechnen im Hintergrund', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Zahlen wie \lm{ ω } sind selber keine Superial-Zahlen, spielen in der Arithmetik der Superial-Zahlen im Hintergrund – oder Untergrund –'."\n".
                    'eine wichtige Rolle.'."\n".
                    'Zunächst im wesentlichen in den Exponenten der Primzahlen, wenn wir das Primzahl-Flächenprodukt von \lm{ \s } betrachten.'."\n".
                    'Schließlich dann auch in den Anzahlen oder Summen der Elemente der Teilmengen der Superial-Zahlen,'."\n".
                    'wie vorstehend im \jump{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:BeispieleErzeugungssummen}{Ausblick} angedeutet.'."\n".
                    'Nun aber zu den Exponenten.'."\n",
                      'Multiplizieren wir \lm{ \s } mit \lm{ 2 }, so verändert sich die Potenz der Primzahl \lm{ 2 } im Primzahl-Flächenprodukt von \lm{ 2^{ω} } zu \lm{ 2^{ω + 1} },'."\n".
                    'wie wir \jump{OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:Veraenderung-Primfaktorzerlegung-s-rationale-Koeffizienten}{oben} schon betrachtet haben.'."\n".
                    'Im Falle des Produkts \lm{ *| \sqrt{2} |* \s = 2^{\frac{ 1 }{ 2 }} \s } verändert sich die Potenz von \lm{ 2^{ω} } dann zu \lm{ 2^{ω + \frac{ 1 }{ 2 }} }.'."\n",
                      'Wir wissen nun aus dem Beweis der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung}, dass'."\n".
                    '\lm{ 2^{ω + \frac{ 1 }{ 2 }} } eine ganze Zahl sein muss.'."\n".
                    'Dies gilt sogar für alle \lm{ n^{\frac{1}{x}} \cdot n^{ω} = n^{ω + \frac{1}{x}} },'."\n".
                    'denn anders als im Endlichen sind im Unendlichen alle diese Zahlen ganze Zahlen, was sehr bemerkenswert ist und für die Ganzheit'."\n".
                    'der Superial-Zahlen wichtige Konsequenzen hat.'."\n",
                      'Und es gibt noch weitere Erkenntnisse.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                  'Eine unerwartete Verbindung der reell algebraischen Zahlen mit dem Zählen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Das natürliche Zählen spiegelt sich in den \italic{natürlichen Superial-Zahlen} \lm{ \mathbb{S}_{\N} } wider.'."\n".
                    'Diese enthalten alle endlichen rationalen Zahlen in ihren Koeffizienten der Potenzen von \lm{ \s }.'."\n",
                      'Nun wissen wir, dass wir reell algebraische Zahlen nicht ihrer Größe nach aufzählen können,'."\n".
                    'weil sie von ihrer Anordnung her dicht sind.\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahlDichtheit}}'."\n".
                    'Interessanter Weise zählen wir in den natürlichen Superial-Zahlen die reell algebraischen Zahlen ihrer Größe nach,'."\n".
                    'als Koeffizienten der Potenzen von \lm{ \s }, implizit mit.'."\n",
                      'Denn wir zählen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Illu.Ari', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \qquad\; 0,\; 1,\; 2,\; 3,\; \cdots \\\ \quad\quad\; \vdots \\\ \quad \cdots \frac{1}{3} \cdot s - 2,\; \frac{1}{3} \cdot s - 1,\; \frac{1}{3} \cdot s,\; \frac{1}{3} \cdot s + 1,\; \frac{1}{3} \cdot s + 2, \cdots \\\ \quad\quad\; \vdots \\\ \quad \cdots \frac{1}{2} \cdot s - 2,\; \frac{1}{2} \cdot s - 1,\; \frac{1}{2} \cdot s,\; \frac{1}{2} \cdot s + 1,\; \frac{1}{2} \cdot s + 2, \cdots \\\ \quad\quad\; \vdots \\\ \quad \cdots \frac{3}{2} \cdot s - 2,\; \frac{3}{2} \cdot s - 1,\; \frac{3}{2} \cdot s,\; \frac{3}{2} \cdot s + 1,\; \frac{3}{2} \cdot s + 2, \cdots \\\ \quad\quad\; \vdots  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und so fort.'."\n",
                      'Dort wo drei vertikale Punkte ›⋮‹ stehen, werden alle von der Größe her dazwischen liegenden rationalen Koeffizienten mitgezählt.'."\n".
                    'Die Superial-Zahlen bringen so die rationalen Zahlen mit dem Zählen von natürlichen und ganzen Zahlen in Verbindung.'."\n",
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategie'),
                    )),
                )
          ); ?>

          
          <!--  • Beweisstrategie  -->
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Einleitung:Beweisstrategie',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Die neu entdeckten, unendlich großen Primfaktorzerlegungen offenbaren einen tiefen Zusammenhang'."\n".
                    'der endlichen Primzahlen mit dem Unendlichen über die rationalen Zahlen.'."\n".
                    'Ihre Verbindungen mit dem Unendlichen beleuchtet wir in den folgenden Beweisen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:IllustrierendeRechenbeispiele:X', text =>

                '\italic{Inhalt}', subline =>
                  '')),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategie:Beweis-Primzahlprodukt-Vermutung'),
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategie:Beweis-Ueberrationalitaetsvermutung'),
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategie:Beweis-Algebraischen-Koeffizienten-Vermutung'),
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategie:Beweis-Superialen-Transzendenz-Vermutung'),
                    )),

                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Beweisstrategie:Beweis-Primzahlprodukt-Vermutung', text =>

                'Beweis der Primzahlprodukt-Vermutung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Im spielerischen Umgang und in tiefen Analysen der Zusammenhänge kam in mir vor vielen Jahren die Vermutung auf, dass das Produkt'."\n".
                    'der einfachen Potenz aller endlichen Primzahlen, also eine Zeile des Primzahl-Flächenprodukts,'."\n".
                    'arithmetisch der Anzahl der natürlichen Zahlen \lm{ ω } entspricht.'."\n",
                      'Es ist mir mittlerweile gelungen, dies auf dieser Webseite rigoros zu beweisen und so gilt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Bew.Prim', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots)_{\#}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-allPrimfakultaet-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  ω^{ω}  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)_{\#}^{ω}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)_{\#}^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Prod-hoch-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:ZFC-Modellkonstruktion:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} findet im Abschnitt \italic{›\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm}‹}'."\n".
                    'eine nähere Begründung.'."\n".
                    'Dort wird aufgrund des unendlich ganzzahligen Zählens innerhalb der Superial-Zahlen unter anderem erkannt,'."\n".
                    'dass die \jump{OM:BiOrd:Einleitung:NeueEinsichten:AnzahlDerEndlichenGanzenZahlen}{Anzahl aller endlichen ganzen Zahlen \lm{ 2 ω }}'."\n".
                    'ein ganzzahliger Teiler von \lm{ \s } sein muss.'."\n".
                    'Es gilt nämlich \lm{ \frac{ \s }{ 2 ω } \in \mathbb{N}_{\infty} }, also, dieser Bruch muss aktual unendlich groß und ganzzahlig sein.'."\n".
                    'Daher muss \lm{ ω } ein ganzzahliger Teiler von \lm{ \frac{ \s }{ 2 } } sein;'."\n".
                    'ein ganzzahliges Teilprodukt.'."\n",
                      'In unserem Beweis zeigen wir schließlich,'."\n".
                    'dass die Primfaktorzerlegung von \lm{ ω } endliche Primzahlen von Beginn an und'."\n".
                    'ohne Lücke enthalten muss und eben unendlich viele.'."\n".
                    'Was zusammengefasst bedeutet, einfach alle endlichen Primzahlen.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Beweisstrategie:Beweis-Ueberrationalitaetsvermutung', text =>
                                           
                'Beweis der Überrationalitätsvermutung', subline =>
                  'Welcher uns zur Radikal-Abgeschlossenheit der sinnvollen Koeffizienten der Superial-Zahlen führt')),
                  array( 'text', array( text => array(
                    'Eine weitere Vermutung, die der Primfaktorzerlegungen von \lm{ \s } entspringt,'."\n".
                    'dreht sich um die Frage, ob irrationale Wurzeln'."\n".
                    'durch einen von mir so genannten \italic{überrationalen Bruch} dargestellt werden können.'."\n",
                      'Unser vollendetes Theorem der \italic{›\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}‹} zeigt, dass und wie dies geht.'."\n".
                    'Ein überrationaler Bruch ist demnach ein Bruch, der im Nenner und im Zähler unendlich große ganze Zahlen hat,'."\n".
                    'deren Primfaktorzerlegung aus unendlich hohen Potenzen endlich vieler Primzahlen besteht:'."\n".
                    ''))),
                  array( 'equations', array( equ_text_std => 'SN.Ein.Bew.Über', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| \sqrt[x]{ n } \,|*  =  n^{\frac{ 1 }{ x }}  =  \frac{ n^{\frac{ 1 }{ x }} \cdot n^{ω} }{ n^{ω} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-eins-durch-x-gleich-n-hoch-omega-mal-n-hoch-eins-durch-x-durch-n-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Diesen Bruch können wir von der Basis her reduzieren, wenn \lm{ \rad(n) } ein Produkt aller Primzahlen in \lm{ n } in einfacher Potenz darstellt:'."\n",
                    ''))),
                  array( 'equations', array( equ_text_std => 'SN.Ein.Bew.Über', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }}  =  \frac{ n^{\frac{ 1 }{ x }} \cdot \rad(n)^{ω} }{ \rad(n)^{ω} }  }',
                                          label_text => '\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:RadikaleSinnvolleKoeffizienten:Equ-xte-Wurzel-n-gleich-xte-Wurzel-n-mal-rad-n-hoch-omega-durch-rad-n-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Da die beiden folgenden Ausdrücke aktual unendliche ganze Zahlen darstellen'."\n",
                    ''))),
                  array( 'equations', array( equ_text_std => 'SN.Ein.Bew.Über', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{1}{x}} \cdot \rad(n)^{ω}  \in  \mathbb{N}_{\infty}  }',
                                          label_text => '\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:RadikaleSinnvolleKoeffizienten:Equ-xte-Wurzel-n-mal-rad-n-hoch-omega-in-N-infty}', label_incr => false),
                      array( display => 'on',  latex => '{  \frac{ \s }{ \rad(n)^{ω} }  \in  \mathbb{N}_{\infty}  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'ist auch ihr Produkt eine aktual unendlich große ganze Zahl und fällt somit in die natürlichen Superial-Zahlen'."\n",
                    ''))),
                  array( 'equations', array( equ_text_std => 'SN.Ein.Bew.Über', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ x }} \cdot \rad(n)^{ω} \cdot \frac{ \s }{ \rad(n)^{ω} }  \in  \mathbb{S}_{\N,\{ 1 \}}^{+}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ n^{\frac{ 1 }{ x }} \cdot \rad(n)^{ω} }{ \rad(n)^{ω} } \cdot \s  \in  \mathbb{S}_{\N,\{ 1 \}}^{+}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{1}{x}} \cdot \s  \in  \mathbb{S}_{\N,\{ 1 \}}^{+}  \;\; ,  }',
                                          label_text => '\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:RadikaleSinnvolleKoeffizienten:Equ-xte-Wurzel-n-mal-s-ist-in-SN1plus}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'wie wir sehen.'."\n",
                      'So ist ein Produkt jedes überrationalen Bruchs mit \lm{ \s } ebenfalls unendlich groß und ganzzahlig.'."\n".
                    'Also gehören auch die irrationalen Wurzeln zu den sinnvollen Koeffizienten der Superial-Zahlen.'."\n".
                    'Also auch die Wurzel aus Zwei \lm{ \sqrt{2} },'."\n".
                    'mit \lm{ \sqrt{2} \cdot \s \in \mathbb{S}_{\N} }.'."\n",
                      'Dies ist eine bemerkenswerte Eigenschaft der Superial-Zahlen,'."\n".
                    'die uns schon so, aber ganz besonders im weiteren Verlauf, neue Informationen über Wurzeln (Radikale) und schließlich über Wurzelausdrücke (Radikalformen) liefert.'."\n".
                    'Schließlich können wir die \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Alle-Radikalformen-sinnvolle-Koeffizienten-SZ}{Radikal-Abgeschlossenheit}'."\n".
                    'der sinnvollen Koeffizienten der Superial-Zahlen zeigen.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Beweisstrategie:Beweis-Algebraischen-Koeffizienten-Vermutung', text =>
                                           
                'Beweis der Algebraischen-Koeffizienten-Vermutung', subline =>
                  'Welcher uns zur Ganz-Abgeschlossenheit der sinnvollen Koeffizienten der Superial-Zahlen führt')),
                  array( 'text', array( text => array(
                    'Im Beweis der \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{Algebraischen-Koeffizienten-Vermutung} stellen sich alle reell algebraischen Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
                    'als sinnvolle Koeffizienten der Superial-Zahlen heraus.'."\n".
                    'Damit zeigen wir sogar ihre \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Ganz-Abgeschlossenheit-von-As}{Ganz-Abgeschlossenheit}.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Beweisstrategie:Beweis-Superialen-Transzendenz-Vermutung', text =>
                                           
                'Beweis der Superialen-Transzendenz-Vermutung', subline =>
                  'Welcher uns zur ausschließlichen Ganz-Abgeschlossenheit der sinnvollen Koeffizienten der Superial-Zahlen führt')),
                  array( 'text', array( text => array(
                    'Und im Beweis der \jump{OM:SupNum:Superiale-Transzendenz-Vermutung}{Superialen-Transzendenz-Vermutung} zeigen wir noch,'."\n".
                    'dass nur die reell algebraischen Zahlen sinnvolle Koeffizienten der Superial-Zahlen sind.'."\n".
                    'Was bedeutet, dass transzendente Zahlen keine sinnvollen Koeffizienten der Superial-Zahlen sind.'."\n",
                      'Transzendente Zahlen tragen nämlich im Rahmen der Superial-Zahlen superial kleine Summanden.'."\n".
                    'Womit wir erkennen können, dass Superial-Zahlen im Grunde reelle Zahlen sind, die echte infinite, also aktual unendliche Anteile besitzen.'."\n".
                    'Denn der Übergang zwischen den Exponentenschichten der Superial-Zahlen entspricht exakt der arithmetischen Bruchlinie'."\n".
                    'zwischen den reell algebraischen Zahlen und den transzendenten Zahlen.'."\n".
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
                      array(  jump_name => 'OM:SupNum:Einleitung:Beweisstrategie', type => 'back'),
                    )),
                  
                  /* array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Aufbau der Arbeit', subline =>
                  '')), */
                  array( 'text', array( text => array(
                    'Die Darstellung folgt zunächst einem anschaulich-rechnerischen Weg und führt erst später zur arithmetischen'."\n".
                    'und mengentheoretischen Fundierung.'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'Ausblick: \\\\'."\n".
                    'fasst die wesentlichen Ergebnisse der Arbeit zusammen und gibt einen Ausblick auf offene Forschungsfragen,'."\n".
                    'wie etwa die Betrachtung der Kontinuumshypothese durch die Brille der Superial-Zahlen und eine ihre mögliche Bedeutung im Langlands-Programm.'."\n".
                    ''))),
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
