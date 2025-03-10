<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Struktur-Geometrie'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Einleitung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Ist die Geometrie fraktal?} – Sind ein Punkt, eine Linie, eine Fläche und der Raum fraktal?',
                    '• Das Problem der Geometrie, eine Linie aus Punkten aufzubauen (Verwandt mit der Kontinuumshypothese): Die nullte, die erste und die zweite Dimension haben keine Ausdehnung, kein Volumen, – also Punkt, Linie und Fläche – und in gewisser Weise existieren sie so nicht. Aber mit ihnen sollen wir die dritte Dimension aus Punkten (Ecken) und Flächen konstruieren, die dann eine Ausdehnung hat und plötzlich existiert. Das scheint komisch und merkwürdig. Siehe Nassim Haramein, Die Entschlüsselung des Universums, S. 11-14, hier S. 12-13.',
                    '– Es geht einfach darum, wie man aus Punkten eine Linie exakt konstruieren kann: Handelt es sich wirklich um einen absolut unendlich kleinen Punkt, dann bekommen wir ein Problem. Es scheint mir, dass ein strukturierter Punkt, mit aktual unendlich kleiner Ausdehnung hier Abhilfe schaffen kann. Ich kann nämlich in Form von aktual unendlich großen Zahlen beschreiben, wie oft ich diesen superialen Punkt aneinander legen muss. Dies kann ich bei absolut unendlich kleinen Punkten nicht tun.',
                    '– Bietet hier die aktual unendlich kleine Hülle der superial-kleinen Zahlen um einen Punkt einen logischen Lösungsansatz für die Geometrie? Denn bei einem absolut unendlich kleinen Punkt können wir nicht sicher und exakt definieren, wie oft wir ihn aneinander legen müssen, um eine Gerade einer bestimmten Länge zu erzeugen. Bei einem Punkt mit superial-kleiner Hülle ist dies wohldefiniert.',
                    '⋅ In Bezug auf die Ordinalzahlen und Biordinalzahlen ist die „Umgebung“ übrigens das „Fähnchen“ zwischen der Null und Ein bzw. zwischen jeder ganzen Zahl, mit dieser, und der nächst größeren, ohne diese, obwohl die Zahlen dazwischen in den ganzen Zahlen gar nicht definiert sind. Sie sind aber implizit mit gemeint. Siehe \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen}.',
                    '– Ist die Geometrie also eigentlich fraktal? Was durch die Analysis, mit ihren Ableitungen und Integralen, schließlich sichtbar wird?',
                    '\bold{Welche Form der Vollständigkeit haben die reel algebraischen Zahlen?}',
                    '• Ich würde es algebraische oder geometrische Vollständigkeit nennen.',
                    '• Welche Form der Vollständigkeit haben dagegen die reellen Zahlen?',
                    '– Weitz / HAW Hamburg: \jump[https://www.youtube.com/watch?v=gyS_eb9dIgo]{}{Der Aufbau des Zahlensystems} – Sek. 11:10',
                    '– Hierfür müssen wir vermutlich eine superiale Vollständigkeit definieren. Mit den Superial-Zahlen erster Stufe, wie wir sie hier vornehmlich definieren, erreichen wir die superiale Vollständigkeit allerdings noch nicht, wie wir an der superialen Eulerschen Zahl sehen. Edmund Weitz sagt allerdings, dass wir diese Vollständigkeit in \lm{ \mathbb{R} } zeigen können.',
                    ))),

                  array( 'text', array( text => array(
                    'In der Geometrie stoßen wir auf ein fundamentales Problem.'."\n".
                    'Denn wollen wir beispielsweise eine Linie konstruieren oder berechnen, so wird allzu oft leicht dahin gesagt:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Nun setzen wir die Linie aus vielen Punkten zusammen; natürlich aus unendlich vielen, um wirklich eine geschlossene Linie zu erhalten.'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Oder entsprechend für eine Fläche:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Nun setzen wir die Fläche aus vielen Linien zusammen; natürlich aus unendlich vielen, um wirklich eine geschlossene Fläche zu erhalten.'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Und Entsprechendes so fortgeführt für den Raum beziehungsweise das Volumen und jede nächst größere Dimension.'."\n".
                    'Doch was ist eine Linie, um beim einfachsten Beispiel zu bleiben,'."\n".
                    'und wie können wir eine Linie aus Punkten aufbauen?'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Ein fundamentales Problem', subline =>
                  'Keine Hochstapelei')),
                  array( 'text', array( text => array(
                    'Der Versuch eine Linie aus Punkten quasi aufzustapeln ist zum Beispiel'."\n".
                    'zum Scheitern verurteilt.\footnote{Vgl. \cite{Haramein:DieEntschluesselungDesUniversums:2011}, Ⅰ Unendlich und doch begrenzt, S. 11-17, hier S. 12-13.}'."\n".
                    'Beim Stapeln wird ein Punkt so an den anderen platziert, dass alle gemeinsam'."\n".
                    'die Linie füllen, dicht an dicht.'."\n".
                    'Diese Dichte ist allerdings davon abhängig, welche Ausdehnung jeder einzelne Punkt hat.'."\n".
                    'Daher das Wort stapeln.'."\n",
                      'Ein Punkt besitzt aber per Definition keine Ausdehnung.'."\n".
                    'Daher können wir Punkte nicht so stapeln, dass eine Linie gefüllt wird.'."\n".
                    'Dies gelingt auch dann nicht, wenn wir unendlich viele Punkte nehmen.'."\n".
                    'Denn diese Art von großer Unendlichkeit, die Punkte ohne jede Ausdehnung raumgreifend stapeln kann, scheint unmöglich.'."\n",
                      'Gleiches gilt auch für all die anderen genannten Objekte:'."\n".
                    'Wir können Linien ohne jede Breite nicht zu Flächen stapeln und so fort.'."\n".
                    'Auf diese Weise ist also kein Konstruieren einer höheren Dimension aus niedrigeren Dimensionen möglich.'."\n",
                      'Aber was funktioniert dann?'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Ist die Geometrie im Grunde fraktal?', subline =>
                  'Weben oder Netzwerken')),
                  array( 'text', array( text => array(
                    'Wir können uns zwei Punkte denken, die nicht aneinander – also nicht aufeinander – liegen und'."\n".
                    'darum einen Abstand haben.'."\n".
                    'So geben diese Punkte auch eine Richtung vor und wir können sie sinnvollerweise mit Null und Eins bezeichnen.'."\n",
                      'Nun beginnen wir ein Netz von Punkten zu „weben“, indem wir zwischen beide'."\n".
                    'Punkte, genau in der Mitte, einen weiteren Punkt legen und haben nun drei Punkte in der selben Richtung auf einer Linie.'."\n".
                    'So fahren wir fort und legen jeweils zwischen zwei benachbarte Punkte einen weiteren'."\n".
                    'in die Mitte.'."\n".
                    'Hierdurch wird das Gewebe zwischen unseren Ausgangspunkten immer dichter gewebt und'."\n".
                    'wir spannen ein Netz von Punkten auf, wodurch wir immer mehr Punkte auf der Strecke zwischen Null und Eins erhalten.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Selbstähnlichkeit} \\\\'."\n".
                  '\cond{Die Auflösung und Struktur des Inneren} \\\\'."\n".
                    'Weil wir immer wieder das gleiche tun, ergibt sich eine fraktale, also selbstähnliche, Netzstruktur.'."\n",
                      'Die gesamte Anzahl der Punkte \lm{ n } sowie ihre Koordinaten \lm{ r }, ihre Dichte, als auch die Anzahl der Teilstrecken, \lm{ \rho } und'."\n".
                    'ihr Abstand \lm{ d } berechnen sich mit der Fraktalebene \lm{ x } zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  2^{x} + 1  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ 2^{x} }  =  2^{-x}  }'),
                      array( display => 'on',  latex => '{  *( \forall m \in [0, n]_{\mathbb{N}} *)  *[  r  =  2^{-x} \cdot m  *]  }'),
                      array( display => 'on',  latex => '{  \rho  =  2^{x}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Punktanzahl \lm{ n } ist dabei immer einer mehr als die Anzahl der Teilstrecken,'."\n".
                    'weil die Punkte ja die Teilstrecken begrenzen und daher ein zusätzlicher Punkt den Beginn oder den Abschluss'."\n".
                    'bilden muss, jenachdem, wie wir drauf schauen.'."\n",
                      'Zur Berechnung der Koordinaten aller sich ergebenden Punkte \lm{ r } benutzen wir die natürlichen Zahlen von Null'."\n".
                    'bis zum \lm{ n }-ten Punkt mit Hilfe der entsprechenden \jump{OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge}{Intervall-Menge}'."\n".
                    '\lm{ [0, n] } aus \lm{ \mathbb{N} }.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Das Zählen} \\\\'."\n".
                  '\cond{Die Erweiterung nach außen, die nach innen zurück wirkt} \\\\'."\n".
                    'Beginnen wir noch einmal von vorne mit den Punkten Null und Eins.'."\n",
                      'Verdoppeln wir diese beiden Punkte, verschieben also den Punkt Null so auf die Eins, dass sich'."\n".
                    'die Länge und Richtung der Verbindungsstrecke der neuen Punkte nicht verändert, dann schöpfen wir so den Punkt Zwei.'."\n".
                    'Dies kommt, weil nun der verschobene Punkt der vorherigen Eins jetzt die Zwei bildet.'."\n".
                    'Wir zählen damit also einen Punkt weiter zum Großen hin.'."\n",
                      'Wobei wir übrigens auch sehen, dass zwei aufeinander gelegte geometrische Punkte miteinander verschmelzen und zu einem werden,'."\n".
                    'wie dies hier mit dem verdoppelten Nullpunkt geschieht, der nun auf der Eins liegt.'."\n".
                    'Denn wir aber nun drei Punkte erhalten, die Null, die Eins und die Zwei, anstatt vier, wie naiv zu erwarten.'."\n".
                    'Genau das war ja eingangs unser fundamentales Problem, das wir mit den Abständen und der fraktalen Befüllung der Lücken überwinden.'."\n".
                    'Es zählen eben nur die Dinge, die wir unterscheiden können.'."\n".
                    ''))),
                      
                  // #!: Auch auf der NSOSP-Seite! (OM:nSOSp:Home)
                  // #!: Auch auf der ›Spannungsspiel des Lebens‹ Seite! (OM:SpaLeb:Bewusstsein:BewusstseinUndMathematik)
                  // #!: Auch auf der „Naturphilosophie der Zeit“ Seite! (OM:NPT:Home)
                  // #!: Auch auf der „Die arithmetische Struktur der Geometrie“ Seite! (OM:SupNum:Struktur-Geometrie)
                  // #!: Auch im Abschnitt „Ontologie der Dualität allgemein“! (OM:BiOrd:Einleitung:OntologischeDeutung)
                  array( 'text', array( Shape => 'italic', text => array(
                        'Mathematik beginnt dort, \\\\ '."\n".
                        'wo wir das Eine vom Anderen unterscheiden können. \\\\ '."\n".
                        '\small{\color{*TitleAdd}{Ab da zählt alles.}}'."\n".
                        ''),
                        addtext => '')),
                      
                  array( 'text', array( text => array(
                    'Nehmen wir die entstandene Struktur und verkleinern sie gleichmäßig so, dass sie zwischen die Null'."\n".
                    'und die Eins passt, dann erkennen wir, dass der mittlere Punkt die Strecke zwischen der Null und der Eins'."\n".
                    'genau so teilt, wie wir dies Eingangs schon hatten – sie wird halbiert.'."\n".
                    'Wir erhalten auch bei wiederholter Anwendung mit weiterer Verkleinerung und damit, diese immer wieder'."\n".
                    'zwischen die Teilstrecken zu legen, keine Punkte, die wir nicht oben bei der Halbierung schon hatten.'."\n".
                    'Beide Punktmengen sind von ihrer fraktalen Struktur her gleich, weil durch das halbieren und verdoppeln'."\n".
                    'in beiden die reinen Potenzen von Zwei stecken.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Neue Teilungen durch weitere Primzahlen} \\\\'."\n".
                    'Machen wir nun bei der Strecke Null, Eins und Zwei weiter und verlängern diese um einen weiteren Punkt,'."\n".
                    'wie zuvor, dann erhalten wir den Punkt Drei.'."\n",
                      'Wenn wir jetzt diese neue Struktur aus vier Punkten verkleinern und zwischen die Null und die Eins legen,'."\n".
                    'dann erhalten wir eine Teilung, die ganz neue Punkte enthält.'."\n".
                    'Nur die beiden Nullpunkte fallen zusammen und der neue Punkt Drei fällt nun auf die Eins.'."\n".
                    'Alle anderen Punkte zwischen Null und Eins sind nicht doppelt, weil sie nicht auf die Punkte fallen,'."\n".
                    'die durch die Halbierung beziehungsweise durch die Verkleinerung der Zweierstruktur auf die Strecke'."\n".
                    'von der Null bis zur Eins entstanden waren.'."\n",
                      'Wir haben mit der Drei die nächste Primzahl nach der Zwei entdeckt, die ein neues Netzwerk oder Raster erzeugt.'."\n".
                    'Auch dieses ist wieder in Bezug auf die Potenzen der Drei selbstähnlich.'."\n".
                    'Denn wenden wir das gleiche Vorgehen wieder auf die durch die Dreiteilung entstandenen Teilstrecken an,'."\n".
                    'dann entstehen tiefere fraktale Dreiteilungen, die sich durch Formeln so ausdrücken lassen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  3^{x} + 1  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ 3^{x} }  =  3^{-x}  }'),
                      array( display => 'on',  latex => '{  *( \forall m \in [0, n]_{\mathbb{N}} *)  *[  r  =  3^{-x} \cdot m  *]  }'),
                      array( display => 'on',  latex => '{  \rho  =  3^{x}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wenden wir die Dreiteilungen dann auch noch auf die Strecken der Halbierungen an, dann schöpfen wir zwei weitere Punkte,'."\n".
                    'die wir noch nicht erreicht hatten, nämlich \lm{ \frac{ 1 }{ 6 } } und \lm{ \frac{ 5 }{ 6 } },'."\n".
                    'die restlichen drei, \lm{ \frac{ 2 }{ 6 } = \frac{ 1 }{ 3 } }, \lm{ \frac{ 3 }{ 6 } = \frac{ 1 }{ 2 } } und \lm{ \frac{ 4 }{ 6 } = \frac{ 2 }{ 3 } }'."\n".
                    'hatten wir nämlich schon.'."\n".
                    'Es ergibt sich:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  2^{x_{2}} \cdot 3^{x_{3}} + 1  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ 2^{x_{2}} \cdot 3^{x_{3}} }  =  2^{-x_{2}} \cdot 3^{-x_{3}}  }'),
                      array( display => 'on',  latex => '{  *( \forall m \in [0, n]_{\mathbb{N}} *)  *[  r  =  2^{-x_{2}} \cdot 3^{-x_{3}} \cdot m  *]  }'),
                      array( display => 'on',  latex => '{  \rho  =  2^{x_{2}} \cdot 3^{x_{3}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hierbei sind die Fraktalebenen \lm{ x_{i} } frei in ihrer Kombination.'."\n",
                      'Zählen wir nun, wie oben von der Zwei zur Drei, jetzt von der Drei zur Vier weiter und legen diese vier Teilstrecken'."\n".
                    'wieder zwischen die Eins, dann erkennen wir, wie bei der Zwei, dass wir die Vierteilung, die 16-Teilung und so fort'."\n".
                    'auch schon haben.'."\n",
                      'Das Zählen zur Fünf führt uns dann zur Fünfteilung zwischen der Null und Eins, wodurch die Primzahl Fünf uns'."\n".
                    'nun sämtlich neue Punkte zwischen der Null und der Eins bringt.'."\n".
                    'Auch die Kombination der Fünf mit den vorherigen Primzahlen Zwei und Drei bringt uns teils neue Punkte:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  2^{x_{2}} \cdot 3^{x_{3}} \cdot 5^{x_{5}} + 1  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ 2^{x_{2}} \cdot 3^{x_{3}} \cdot 5^{x_{5}} }  =  2^{-x_{2}} \cdot 3^{-x_{3}} \cdot 5^{-x_{5}}  }'),
                      array( display => 'on',  latex => '{  *( \forall m \in [0, n]_{\mathbb{N}} *)  *[  r  =  2^{-x_{2}} \cdot 3^{-x_{3}} \cdot 5^{-x_{5}} \cdot m  *]  }'),
                      array( display => 'on',  latex => '{  \rho  =  2^{x_{2}} \cdot 3^{x_{3}} \cdot 5^{x_{5}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So geht es nun immer weiter.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Das komplette Raster oder Netzwerk aller ganzen negativen Primzahlpotenzen aufspannen} \\\\'."\n".
                    'Die Sechs und ihre Sechsteilung haben wir schon komplett durch die Zwei-/Dreiteilung.'."\n".
                    'Die Sieben ist wieder eine neue Primzahl, die auch wieder mit allen vorherigen kombiniert werden kann.'."\n".
                    'Die Acht, die Neun und die Zehn haben wir schon durch die Zwei, Drei und Fünf.'."\n".
                    'Die Elf ist dann wieder eine neue Primzahl.'."\n".
                    'Dieses Vorgehen können wir nun immer weiter treiben:'."\n".
                    'Strecke wieder um Eins verlängern und durch skalieren überprüfen, ob wir eine neue Primzahl gefunden haben:'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( x_{i} \in \mathbb{N} *)  *[  n  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}} *) + 1  *]  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}} }  =  \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{-x_{i}}  }'),
                      array( display => 'on',  latex => '{  *( \forall m \in [0, n]_{\mathbb{N}} *)  *[  r  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{-x_{i}} *) \cdot m  *]  }'),
                      array( display => 'on',  latex => '{  \rho  =  \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So bekommen wir das Teilernetz der Primzahlen und ihrer Kombinationen im Endlichen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Struktur-Geometrie:Vortext:Alle-Strecken-natuerlichen-Zahlen-vernetzen}{}Alle Strecken der natürlichen Zahlen und schließlich der ganzen Zahlen vernetzen} \\\\'."\n".
                    'Um diese Struktur auf alle natürlichen Zahlen auszudehnen, brauchen wir ein passendes Symbol:'."\n",
                      'Die Ordinalzahlen\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}} geben uns die Möglichkeit einen Wert'."\n".
                    'auszudrücken, der so groß ist, dass er per Definition genau alle natürlichen Zahlen beinhaltet.'."\n".
                    'Dieser aktual unendliche Wert hat das Symbol \lm{ ω } und bezeichnet die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}};'."\n".
                    'die Zahl, die wir erreichen, wenn wir einmal alle natürlichen Zahlen gezählt haben.'."\n",
                      'Die zuvor gefundene feine Unterteilung können wir jetzt also mit Hilfe von \lm{ ω } zwischen alle jeweils benachbarten Zahlen legen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  =  \mathbb{N}  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-N}', label_incr => false),
                      array( display => 'on',  latex => '{  *( x_{i} \in \mathbb{N} *)  *[  n  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}} *) \cdot ω  *]  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}} }  =  \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{-x_{i}}  }'),
                      array( display => 'on',  latex => '{  *( \forall m \in [0, n]_{\mathbb{On}} *)  *[  r  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{-x_{i}} *) \cdot m  *]  }'),
                      array( display => 'on',  latex => '{  \rho  =  \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}}  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und das Ganze dann auch von der Null an in die negative Richtung immer weiter verlängern,'."\n".
                    'mit der Basismenge \lm{ \mathbb{On}_{0}^{\pm} } der \jump{OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge}{Intervall-Menge},'."\n".
                    'wie im Abschnitt \italic{\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:MengeOrdinalzahlenInsNegativeErweitert}} entwickelt,'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( x_{i} \in \mathbb{N} *)  *[  n  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}} *) \cdot 2 ω  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall m \in [- \frac{ n }{ 2 }, \frac{ n }{ 2 }]_{\mathbb{On}_{0}^{\pm}} *)  *[  r  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{-x_{i}} *) \cdot m  *]  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'In beiden Fällen fällt der Abschlusspunkt auf diese Weise bei \lm{ n } weg, weil die Zahl der Teilstrecken nicht endet.'."\n".
                    'Der Abstand \lm{ d } und die Dichte \lm{ \rho } verändern sich nicht dadurch.'."\n",
                      'Dass es \jump{OM:BiOrd:Einleitung:NeueEinsichten:AnzahlDerEndlichenGanzenZahlen}{genau gleich viele negative Zahlen wie natürliche Zahlen, mit der Null},'."\n".
                    'geben muss, sehen wir in den \jump{OM:BiOrd:Einleitung}{Biordinalzahlen}.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Immer noch Lückenhaft', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Kanten des geometrischen Netzgewebes besteht nun aus den Verbindungslinien der Punkte,'."\n".
                    'wobei die Punkte die Knoten oder Stützen des Gewebes sind.'."\n".
                    'Nehmen wir diese Teilungen der Strecken für jede der endlichen Primzahlen nur endlich oft vor,'."\n".
                    'dann haben wir immer noch Lücken endlicher Größe.'."\n",
                      'Wie können wir aber die Lücken nun so schließen, dass sie keine endliche Größe mehr haben?'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Übergang ins Unendliche', subline =>
                  'Die vollständige Induktion der Teilungen')),
                  array( 'text', array( text => array(
                    'Erst, wenn wir die Teilung der Strecken so bis ins Unendliche treiben, dass keine endlichen Lücken übrig bleiben,'."\n".
                    'haben wir aus endlicher Sicht eine gewisse vollständige Lückenlosigkeit erreicht.'."\n".
                    'Es dürfen dann auch keine unendlich kleinen Lücken verbleiben, in die wir mit endlichen Teilungen'."\n".
                    'noch Punkte platzieren können, weil sie noch unbelegt sind.'."\n",
                      'Wie können wir nun erreichen oder ausdrücken, dass wir die Strecke zwischen Null und Eins wirklich in alle'."\n".
                    'möglichen endlichen Potenzen der Primzahlen und deren Kombinationen aufteilen und so ein Teilernetz aufspannen, dass alle endlichen Teilungen beinhaltet?'."\n",
                      'Auch hierzu können wir das Symbol \lm{ ω } der Ordinalzahlen nutzen, nun als Potenz.'."\n".
                    'Die Theorie der Ordinalzahlen kennt allerdings keine Vorgänger von \lm{ ω } und auch keine Vorgänger von Null,'."\n".
                    'also auch keine negativen Zahlen.'."\n".
                    'Diese Einschränkung haben wir mit der Theorie der Biordinalzahlen aufgehoben'."\n".
                    'und können so auch den aktual unendlich negativen Wert \lm{ -ω } beschreiben, den wir in der Potenz unserer Primzahlen brauchen.'."\n",
                      'Für das Beispiel der Zweiteilung beziehungsweise Halbierung erhalten wir folgende Formeln,'."\n".
                    'wenn wir die Teilung bis in die vollständige Induktion'."\n".
                    '\lm{ ω } vorantreiben:'."\n".
                    // '\\\\ \color{*Bearb}{(Welche Menge zum Adressieren aller Koordinaten der Punkte für \lm{ m } in dieser Formel sinnvollerweise zu verwenden ist, ist mir noch nicht ganz klar. Die Menge \lm{ [0, n]_{\mathbb{On}} } scheint mir nicht ganz richtig. Wir können auf die Idee kommen, dass \lm{ [0, n]_{2^{ω}} } unser Problem löst. Allerdings gilt für \lm{ n = 2^{ω} + 1 }, dass \lm{ *( 2^{ω} + 1 *) \notin 2^{ω} }.)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  2^{ω} + 1  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ 2^{ω} }  =  2^{-ω}  }'),
                      array( display => 'on',  latex => '{  *( \forall m \in [0, n]_{*( 2^{ω} + 1 *) + 1} *)  *[  r  =  2^{-ω} \cdot m  *]  }'),
                      array( display => 'on',  latex => '{  \rho  =  2^{ω}  }'),
                    ))),

                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Offene Fragestellungen}',
                    '• Hier gehen wir davon aus, dass \lm{ 2^{ω} }, und damit dann auch \lm{ *( 2^{ω} + 1 *) + 1 = 2^{ω} + 2 }, wirklich einer geordneten Menge entspricht und vermutlich eine Ordinalzahl ist,'."\n".
                    'wofür ich noch keinen expliziten Beweis gesehen habe, was aber eine gewisse Plausibilität besitzt und hier so Verwendung findet, dass die Formeln in sich logisch erscheinen.'."\n".
                    '\color{*Entwick}{Die Fragestellung ist interessant und sollte auf der Seite der Biordinalzahlen untersucht werden.}',
                    ))),

                  array( 'text', array( text => array(
                    'Wir haben hier als Basismenge unserer Intervall-Menge \lm{ *( 2^{ω} + 1 *) + 1 } gewählt, weil in den Ordinalzahlen,'."\n".
                    'wo wir hier davon ausgehen, dass \lm{ 2^{ω} \in \mathbb{On} }, und so dann auch \lm{ 2^{ω} + 1 } und \lm{ *( 2^{ω} + 1 *) + 1 }, eine solche ist,'."\n".
                    'die Menge \lm{ *( 2^{ω} + 1 *) + 1 } dann auch die Zahl \lm{ 2^{ω} + 1 } als größte enthält,'."\n".
                    'die wir ja für den Wert von \lm{ n } brauchen.'."\n".
                    'Wir hätten hier dann auch \lm{ \mathbb{On} } als Basismenge nehmen können, aber so wird diese neue interessante Fragestellung auf diese Weise näher beleuchtet.'."\n",
                      'So erhalten wir zwar schon eine unendliche Dichte, denn der Abstand zwischen zwei benachbarten Netzpunkten \lm{ d } ist \lm{ 2^{-ω} },'."\n".
                    'aber wie wir oben gesehen haben,'."\n".
                    'sind hier ganz viele Teilungen noch nicht enthalten.'."\n".
                    'Als Beispiele erreichen wir so die Punkte \lm{ \frac{ 1 }{ 3 } } und \lm{ \frac{ 2 }{ 3 } } nicht,'."\n".
                    'die zu den rationalen Zahlen gehören.'."\n".
                    'Ein aktual unendlich kleiner Abstand zwischen den Punkten reicht offenbar nicht aus,'."\n".
                    'um alle durch endliche Teilungen zu beschreibenden Punkte zu erreichen.'."\n",
                      'Nehmen wir die Teilungen der Strecke zwischen Null und Eins für auch nur eine der endlichen Primzahlen'."\n".
                    'gar nicht oder nur endlich oft vor, dann behalten wir Lücken,'."\n".
                    'die zwar einen aktual unendlich kleinen Abstand aufweisen, aber in denen noch durch endliche Teilungen platzierbare, unbelegte Punkte existieren.'."\n".
                    ''))),

                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Kontinuumshypothese}',
                    '• Hier stellt sich dann eben die Frage, ob die Mächtigkeit von beispielsweise \lm{ 2^{ω} \cdot 3^{ω} } oder gar dem nachfolgend definierten \lm{ \s } wirklich \lm{ 2^{ω} } ist. Wenn nicht, würde dies die \jump{OM:SupNum:Struktur-Geometrie:Vortext:DasKontinuum}{Kontinuumshypothese} verneinen.',
                    ))),

                  array( 'text', array( text => array(
                  '\condb{Das aktual unendlich dichte Raster oder Netzwerk aller ganzen negativen Primzahlpotenzen aufspannen} \\\\'."\n".
                    'So müssen wir also die Teilung mit allen endlichen Primzahlen bis in die vollständige Induktion'."\n".
                    'vorantreiben:'."\n".
                    // '\\\\ \color{*Bearb}{(Welche Menge zum Adressieren aller Koordinaten der Punkte für \lm{ m } in dieser Formel sinnvollerweise zu verwenden ist, ist mir noch nicht ganz klar. Die Menge \lm{ [0, n]_{\mathbb{On}} } scheint mir nicht ganz richtig. Später lernen wir, dass \lm{ m } aus \lm{ [0, n_{\s}]_{\mathbb{S}_{\Z}} } sein muss, aber diese Menge ist an dieser Stelle hier von der Systematik her ja noch nicht bekannt.)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i} *)^{ω} + 1  }'),
                      array( display => 'on',  latex => '{  d  =  *( \frac{ 1 }{ \prod_{\forall p_{i} \in \mathbb{P}}  p_{i} } *)^{ω}  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i} *)^{-ω}  }',
                                          label_name => 'OM:SupNum:Struktur-Geometrie:Vortext:Equ-Abstand-des-Rasters-Zweiteilungen-mit-Potenz-omega', label_text => '\name{OM:SupNum:Struktur-Geometrie:Vortext:Equ-Abstand-des-Rasters-Zweiteilungen-mit-Potenz-omega}', label_incr => true),
                      array( display => 'on',  latex => '{  *( \forall m \in [0, n]_{\mathbb{On}} *)  *[  r  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i} *)^{-ω} \cdot m  *]  }'),
                      array( display => 'on',  latex => '{  \rho  =  \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{ω}  \;\;  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So gibt es nun zwischen Null und Eins keine rationalen Zahlen mehr,'."\n".
                    'die von dem sich ergebenden Raster oder Netzgewebe nicht geschöpft werden.'."\n",
                      'Nun erweitern wir dieses Gewebe wieder auf alle ganzen Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i} *)^{ω} \cdot 2 ω  }'),
                      array( display => 'on',  latex => '{  *( \forall m \in [- \frac{ n }{ 2 }, \frac{ n }{ 2 }]_{\mathbb{On}_{0}^{\pm}} *)  *[  r  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i} *)^{-ω} \cdot m  *]  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auch hier fällt der Abschlusspunkt \lm{ n } wieder weg, weil die Zahl der Teilstrecken nicht endet.'."\n".
                    'Der Abstand \lm{ d } und die Dichte \lm{ \rho } verändern sich dadurch nicht.'."\n",
                      'Können wir nun davon sprechen, dass ein solches Gewebe dann keine durch endliche Teilungen erreichbaren Lücken mehr hat?'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Irrationale algebraische Zahlen', subline =>
                  'Gibt es noch Lücken im Gewebe?')),
                  array( 'text', array( text => array(
                    'Wir kennen in der Arithmetik mit den vier Grundrechenarten und dem Ziehen ganzer Wurzeln,'."\n".
                    'inklusive dem Integrieren, noch die irrationalen algebraischen Zahlen, die allesamt mögliche Lösungen'."\n".
                    'der Nullstellen von Polynomen darstellen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Sind Zahlen, wie die zweite Wurzel aus Zwei \lm{ \sqrt{2} }, im Raster enthalten?} \\\\'."\n".
                    'Unser Beweis der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung}'."\n".
                    'mit den auf ihm aufbauenden, nachfolgenden Beweisen\color{*Bearb}{(Link)} zeigt,'."\n".
                    'dass die Radikale der irrationalen algebraischen Zahlen bereits im Raster enthalten sind,'."\n".
                    'wenn wir mit den Teilungen und damit auch mit den negativen Potenzen der Abstände ins Aktual-Unendliche übergehen.'."\n",
                      'Die Radikale der irrationalen algebraischen Zahlen sind die irrationalen algebraischen Zahlen,'."\n".
                    'die durch die vier Grundrechenarten und dem Ziehen ganzer Wurzeln ausgedrückt werden können.'."\n",
                      'Nur für solche irrationalen algebraischen Zahlen, die dann noch durch Integration'."\n".
                    'von Radikalen der irrationalen algebraischen Zahlen entstehen, können wir noch nicht Beweisen,'."\n".
                    'dass sie auf dem Raster liegen.'."\n".
                    'Das sie auf dem Raster liegen, liegt nahe, weil es sich um Summen von Wurzelausdrücken handelt,'."\n".
                    'wo wir es für eine endliche Anzahl von Summanden schon bewiesen haben.'."\n".
                    'Daher ist es auch für eine aktual unendliche Anzahl von Summanden zu vermuten.'."\n",
                      'Das es dennoch bisher unbewiesen ist, liegt daran, dass wir \jump{OM:SupNum:Ableitungen-Integrale}{die Ableitung und das Integral} mit Hilfe der Superial-Zahlen'."\n".
                    'anders definieren, als bisher mit dem Limes üblich, und dadurch aktual unendlich kleine Summanden'."\n".
                    'in die Integration bekommen, die sich an dieser Stelle dann zu Null summieren müssen,'."\n".
                    'um im Ergebnis rein endlich zu sein.'."\n".
                    'Durch die aktual unendlich kleinen Summanden haben wir mehr Genauigkeit zu berücksichtigen und'."\n".
                    'erreichen so auch eine höhere Güte.'."\n".
                    'Dadurch wird der Beweis aber auch schwieriger zu führen, was ihn bisher verhindert.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Warum ist nun zum Beispiel die zweite Wurzel aus Zwei \lm{ \sqrt{2} } schon ein Punkt des Rasters?} \\\\'."\n".
                    'Dies kommt nach dem Beweis durch den Übergang der Potenz ins ganzzahlige Aktual-Unendliche.'."\n".
                    'Er zeigt, dass die Wurzel aus Zwei erst mit aktual unendlich großem Nenner und Zähler'."\n".
                    'als Bruch aus ganzen Zahlen dargestellt werden kann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *| \sqrt{ 2 } |*  =  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{ω} \cdot 2^{\frac{ 1 }{ 2 }} }{ 2^{ω} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Wurzel-Zwei-mal-Zwei-hoch-omega-durch-Zwei-hoch-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{ω + \frac{ 1 }{ 2 }} }{ 2^{ω} }  \;\; ,  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Zwei-hoch-omega-plus-Einhalb-durch-Zwei-hoch-omega}', label_incr => false),
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
                    'Dieser Zusammenhang erscheint auf den ersten Blick eher banal.'."\n".
                    'Denn der Faktor \lm{ 2^{ω} } ist offensichtlich sowohl im Nenner als auch im Zähler des Bruchs vorhanden und'."\n".
                    'könnte deshalb natürlich direkt gekürzt werden.'."\n".
                    'Womit wir auch sofort erkennen, dass die Formel wahr ist.'."\n",
                      'Was macht die Formel dann auf den zweiten Blick so besonders?'."\n",
                      'Bei genauer Betrachtung ist das Besondere, dass nur in einer solchen Form auch der Zähler zu einer ganzen Zahl wird.'."\n".
                    'Denn der dem Beweis zugrunde liegende Widerspruch zeigt, dass kein Bruch aus endlichem ganzzahligen Nenner und endlichem ganzzahligen Zähler'."\n".
                    'die Wurzel aus Zwei darstellen kann.'."\n".
                    'Der Widerspruchsbeweis offenbart eine Konstruktionsanweisung, wie ein Bruch aus ganzen Zahlen'."\n".
                    'beschaffen sein muss, der diese Zahl darstellen kann:'."\n",
                      'Der Bruch muss in diesem Fall beliebig endlich häufig mit Zwei zu kürzen sein.'."\n".
                    'Was bedeutet, dass sowohl der Nenner als auch der Zähler aktual unendlich groß sein müssen.'."\n".
                    'Der gefundene Bruch hat einen aktual unendlich großen ganzzahligen Nenner und ist offensichtlich wahr.'."\n".
                    'Und er ist beliebig endlich oft mit Zwei zu kürzen.'."\n".
                    'Bleibt die Frage, ob auch der Zähler eine aktual unendlich große ganze Zahl sein kann.'."\n".
                    'Und dies ist mit einem klaren Ja zu beantworten.'."\n".
                    'Denn der Widerspruchsbeweis ist so angesetzt,'."\n".
                    'dass er einen ganzzahligen Zähler zur Bedingung macht und erst diese und weitere Annahmen die Konstruktionsanweisung hervorbringen.'."\n",
                      'Der Faktor \lm{ 2^{ω} } ist so groß – eben aktual unendlich groß –, ganzzahlig und so strukturiert,'."\n".
                    'dass er im Produkt mit jeder ganzen Wurzel aus Zwei, also aus jeder rational gebrochenen Potenz von Zwei, eine ganze Zahl hervorbringt.'."\n".
                    'Das ist die Besonderheit dieses Bruchs, die sofort unsichtbar wird, wenn wir einfach komplett kürzen.'."\n".
                    'Sein Geheimnis wird erst offenbar, wenn wir seine Entstehungsgeschichte verstehen und'."\n".
                    'damit seine Bedeutung entschlüsseln und so erkennen.'."\n",
                      'Oben in Formel \jumpname{OM:SupNum:Struktur-Geometrie:Vortext:Equ-Abstand-des-Rasters-Zweiteilungen-mit-Potenz-omega}'."\n".
                    'haben wir berechnet, in welchem Abstand die Punkte auf dem aktual unendlichen Zweiteilungsraster liegen,'."\n".
                    'nämlich \lm{ d = 2^{-ω} }, wenn wir in die aktuale Unendlichkeit der vollständigen Induktion \lm{ ω } übergehen.'."\n".
                    'Wir können diesen Abstand oder dieses Raster durch Skalierung, also durch Multiplikation, mit seinem Kehrwert \lm{ 2^{ω} },'."\n".
                    'auf den Zählabstand von Eins bringen, also auf die Ganzzahligkeit:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  d  =  2^{-ω} \cdot 2^{ω}  =  1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier fällt nun auf, dass der Faktor exakt der gleiche ist, der aus der Wurzel aus Zwei vorstehend'."\n".
                    'eine ganze Zahl macht; sie also auf dem Zählraster landet.'."\n".
                    'Damit ist bestätigt, dass die Wurzel aus Zwei, also \lm{ 1,\!41421356237309\cdots }, wirklich auf dem aktual unendlichen Zweiteilungsraster liegt.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Dies gilt für alle Wurzeln aus Zwei und deren Potenzen \lm{ *| \sqrt[k]{2} |*^{m} }} \\\\'."\n".
                    'Der Beweis zeigt, dies gilt für alle Wurzeln aus Zwei, die wir nachfolgend als Potenzen von Zwei schreiben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall m \in \mathbb{Z} *) *( \forall k \in \mathbb{N}^{+} *) \\\  *[  *| \sqrt[k]{2} |*^{m}  =  2^{\frac{ m }{ k }}  =  \frac{ 2^{ω} \cdot 2^{\frac{ m }{ k }} }{ 2^{ω} }  =  \frac{ 2^{ω + \frac{ m }{ k }} }{ 2^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  q  :=  \frac{ m }{ k }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall q \in \mathbb{Q} *)  *[  2^{q}  =  \frac{ 2^{ω} \cdot 2^{q} }{ 2^{ω} }  =  \frac{ 2^{ω + q} }{ 2^{ω} }  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Abstand des Rasters bleibt hier der gleiche, wie zuvor, und so auch der Faktor \lm{ 2^{ω} }, um \lm{ 2^{q} } zu einer ganzen Zahl zu machen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Struktur-Geometrie:Vortext:Dies-gilt-fuer-alle-Wurzeln}{}Dies gilt sogar für alle Wurzeln aus natürlichen Zahlen und deren Potenzen \lm{ *| \sqrt[k]{c} |*^{m} }} \\\\'."\n".
                    'Der Beweis zeigt dies sogar für jede Wurzel aus jeder natürlichen Zahl \lm{ c } und deren Potenzen wie folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall m \in \mathbb{Z} *) *( \forall c, k \in \mathbb{N}^{+} *) \\\  *[  *| \sqrt[k]{c} |*^{m}  =  c^{\frac{ m }{ k }}  =  \frac{ c^{ω} \cdot c^{\frac{ m }{ k }} }{ c^{ω} }  =  \frac{ c^{ω + \frac{ m }{ k }} }{ c^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall q \in \mathbb{Q} *) *( \forall c \in \mathbb{N}^{+} *)  *[  c^{q}  =  \frac{ c^{ω} \cdot c^{q} }{ c^{ω} }  =  \frac{ c^{ω + q} }{ c^{ω} }  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier ist zu bemerken, dass die Potenzen der Primzahlen der Primfaktorzerlegung von \lm{ c } ja größer als Eins sein können.'."\n".
                    'Wenn zum Beispiel \lm{ c = 4 = 2^{2} } ist, dann ist \lm{ c^{ω} = 4^{ω} = *( 2^{2} *)^{ω} = 2^{2 ω} }'."\n".
                    'und damit eine aktual unendliche Größenordnung größer als \lm{ 2^{ω} }, wie oben zuvor.'."\n",
                      'Da stellt sich die Frage:'."\n".
                    'Ist es wirklich notwenig die Größenordnung derart zu vergrößern?'."\n".
                    'Oder reicht auch die einfache aktual unendliche Größe \lm{ 2^{ω} } aus?'."\n".
                    'Dies ist eine besonders interessante und wichtige Frage in Bezug auf die Superial-Zahlen, weil es entscheidet,'."\n".
                    'ob Produkte zwischen der superialen Basis \lm{ \s } und den Wurzeln aus \lm{ c } auch schon ganze Zahlen ergeben,'."\n".
                    'wenn \lm{ c } größere Potenzen von Primzahlen enthält.'."\n",
                      'Dass die kleinere Größenordnung tatsächlich schon ausreichend ist, sehen wir an folgender Herleitung'."\n".
                    'mit beliebigen natürlichen Potenzen \lm{ k } von Primzahlen \lm{ p }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *( \forall q \in \mathbb{Q} *)  *[  p^{ω} \cdot p^{q}  \in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *( \forall k \in \mathbb{N}^{+} *) *( \forall q \in \mathbb{Q} *)  *[  p^{ω} \cdot *( p^{k} *)^{q}  ?\in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p^{ω} \cdot p^{k \cdot q}  ?\in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  k \cdot q  \in  \mathbb{Q}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  p^{ω} \cdot p^{k \cdot q}  \in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p^{ω} \cdot *( p^{k} *)^{q}  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n".
                    'Wenn die Potenz \lm{ ω } einer Primzahl \lm{ p } mal \lm{ p } hoch jeder rationalen Zahl \lm{ q } eine aktual unendliche ganze Zahl ergibt,'."\n".
                    'dann ist \lm{ k \cdot q } einfach eine andere rationale Zahl, die als Potenz von \lm{ p }'."\n".
                    'ebenso eine ganze Zahl ergeben muss.'."\n".
                    'Und dies gilt schließlich für alle endlichen Potenzen der Primzahlen der Primfaktorzerlegung jeder positiven natürlichen Zahl \lm{ c }.'."\n",
                      'Wenn \lm{ \rad(c) } das Produkt der in \lm{ c } enthaltenen Primzahlen in einfacher Potenz ist,'."\n".
                    'also beispielsweise'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \rad(980)  =  \rad(2^{2} \cdot 5 \cdot 7^{2})  =  2 \cdot 5 \cdot 7  =  70  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'können wir also formulieren,'."\n".
                    'dass schlussendlich jede endliche ganze Wurzel in natürlicher Potenz aus jeder natürlichen Zahl \lm{ c }'."\n".
                    'durch ein Produkt aller unterschiedlichen Primzahlen in \lm{ c } zu einer aktual unendlich großen ganzen Zahl gemacht werden kann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall q \in \mathbb{Q} *) *( \forall c \in \mathbb{N}^{+} *)  *[  \rad(c)^{ω} \cdot c^{q}  \in  \mathbb{N}_{\infty}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Jede endliche ganze Wurzel in natürlicher Potenz aus jeder natürlichen Zahl \lm{ c } kann also'."\n".
                    'entsprechend als überrationaler Bruch zweier aktual unendlich großer ganzer Zahlen dargestellt werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on',  latex => '{  \Rightarrow  *( \forall m \in \mathbb{Z} *) *( \forall c, k \in \mathbb{N}^{+} *) \\\ \qquad\;\;  *[  *( \sqrt[k]{c} *)^{m}  =  c^{\frac{ m }{ k }}  =  \frac{ \rad(c)^{ω} \cdot c^{\frac{ m }{ k }} }{ \rad(c)^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c^{q}  =  \frac{ \rad(c)^{ω} \cdot c^{q} }{ \rad(c)^{ω} }  }'),
                      // array( display => 'on',  latex => '{  \Leftrightarrow  c^{q}  =  \frac{ \rad(c)^{ω + q} \cdot *( \frac{ c }{ \rad(c) } *)^{q} }{ \rad(c)^{ω} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies ist sehr bemerkenswert und lässt uns einige neue Erkenntnisse in der Zahlentheorie und'."\n".
                    'bezüglich der arithmetischen Struktur der Geometrie gewinnen.'."\n".
                    'Es zeigt uns, auf welche Weise die Wurzeln in das fraktale Teilungsgewebe der Geometrie eingewoben sind.'."\n",
                      'Wie oben erwähnt, gilt dies für alle Radikale der irrationalen algebraischen Zahlen, was wir ja an \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Durch-Radikale-darstellbare-algebraischen-Zahlen-sinnvolle-Koeffizienten-SZ}{anderer Stelle zeigen},'."\n".
                    'also für deren Summen, Produkte, Brüche und endlichen ganzzahligen Potenzen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Die besondere Rolle der normierten Einheit \lm{ ω }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die aktual unendliche Einheit der vollständigen Induktion \lm{ ω } nimmt hier eine ganz besondere Rolle ein.'."\n",
                      'Mit Hilfe von \lm{ ω } können wir eine normierte aktual unendliche Potenz der Primzahlen ausdrücken,'."\n".
                    'die es uns ermöglicht, das Fraktal der arithmetischen Teilung der Geometrie im Hinblick auf rein endliche Zahlen'."\n".
                    'so zu vervollständigen, dass alle Radikale der irrationalen reell algebraischen Zahlen im geschöpften Raster enthalten sind,'."\n".
                    '\jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{vermutlich sogar wirklich alle reell algebraischen Zahlen}\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}},'."\n".
                    'also auch alle irrationalen in ihnen.'."\n",
                      'Dabei ist es \jump{OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden}{vermutlich so, dass die transzendenten Zahlen aktual unendlich kleine Summanden enthalten},'."\n".
                    'die dafür sorgen, dass sie nicht zu den rein endlichen Zahlen dazugehören, wie wir bereits an der'."\n".
                    '\jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{eulerschen Zahl \lm{ \e_{\s} }} zeigen konnten.'."\n",
                      'Noch außergewöhnlicher wird die Rolle von \lm{ ω }, wenn wir im \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Beweis der Primzahlprodukt-Vermutung}'."\n".
                    'sehen, dass \lm{ ω } – also die vollständige Induktion selber – eine Primfaktorzerlegung in Form des Produkts aller endlichen Primzahlen besitzt.'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Struktur-Geometrie:Vortext:DefinitionSuperialeEinheit', text =>
                                           
                'Die superiale Basis \lm{ \s } wird auf natürliche Weise sichtbar und definiert', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Das aktual unendliche Fraktal der arithmetischen Teilung der Geometrie basiert also auf'."\n".
                    'einem Produkt der aktual unendlichen Potenz aller endlichen Primzahlen, der superialen Basis \lm{ \s },'."\n".
                    'auf dem die vorliegende Arbeit gegründet ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  \displaystyle \prod_{\forall n \in \mathbb{N}}  \left( \prod_{\forall p \in \mathbb{P}}  p \right)  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  :=  \displaystyle \left( \prod_{\forall p \in \mathbb{P}}  p \right)^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Als Teilung der Eins ist es dann die Zahl \lm{ \s^{-1} }, die der Strecke zwischen Null und Eins'."\n".
                    'unsere vorstehend gefundene arithmetische Struktur gibt, indem sie für die normierte aktual unendlich kleine Distanz steht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n_{\s}  =  \s + 1  }'),
                      array( display => 'on',  latex => '{  d_{\s}  =  \frac{ 1 }{ \s }  =  \s^{-1}  }'),
                      array( display => 'on',  latex => '{  *( \forall m \in [0, n_{\s}]_{\mathbb{S}_{\Z}} *)  *[  r_{\s}  =  \s^{-1} \cdot m  *]  }'),
                      array( display => 'on',  latex => '{  \rho_{\s}  =  \s  }'),
                      array( display => 'on',  latex => '{  \# \mathbb{Z}  =  2 ω  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-Z}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  n_{\s,\Z}  =  2 ω \cdot \s  }'),
                      // array( display => 'on',  latex => '{  *( \forall z \in \mathbb{Z} *) *( \forall m \in [0, \s[_{\mathbb{S}_{\Z}} *)  *[  r_{\s,\Z}  =  z + \s^{-1} \cdot m  *]  }'),
                      // array( display => 'on',  latex => '{  \Leftrightarrow  XXX *( \forall m \in \;]\!-\!ω, ω[_{\mathbb{S}^{-1}_{\Z}} *)  *[  r_{\s,\Z}  =  m  *]  }'),
                      // array( display => 'on',  latex => '{  \mathbb{On}^{-} =  *\{  b  *|*  *( \forall a \in \mathbb{On} *) *[ b = \mathbb{U} \setminus a *]  *\}  }'),
                      // array( display => 'on',  latex => '{  \mathbb{On}_{\Z}  =  \mathbb{On} \cup \mathbb{On}^{-}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall m \in \;]\!-\!ω \cdot ω^{ω}, ω \cdot ω^{ω}[_{\mathbb{On}_{0}^{\pm}} *)  *[  r_{\s,\Z}  =  ω^{-ω} \cdot m  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall m \in \;]\!-\!ω \cdot \s, ω \cdot \s[_{\mathbb{On}_{0}^{\pm}} *)  *[  r_{\s,\Z}  =  \s^{-1} \cdot m  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei bezeichnet \lm{ n_{\s} } die Anzahl aller Punkte des normierten aktual unendlich feinsten Gewebes'."\n".
                    'im Endlichen von Null bis einschließlich Eins.'."\n".
                    '\lm{ d_{\s} } beschreibt den Abstand dieser feinsten Punkte und \lm{ \rho_{\s} } ihre Dichte.'."\n".
                    '\lm{ n_{\s,\Z} } ist dann die Anzahl der feinsten Punkte auf der endlichen Zahlengeraden,'."\n".
                    'unter Berücksichtigung der Tatsache, dass es dann keinen Abschlusspunkt braucht.'."\n",
                      'So erreichen wir das feinste Gewebe von Punkten,'."\n".
                    'die auf diese Weise nur ganze Zahlen in ihren aktual unendlich kleinen Summanden, in ihrem Ort – ihren Koordinaten – haben,'."\n".
                    'aber doch normiert aktual unendlich dicht beieinander liegen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Struktur-Geometrie:Vortext:Abgeschlossenheit-Teilung-Strecke-Eins-in-s-Teile}{}Die Abgeschlossenheit der Teilung der Strecke Eins in \lm{ \s } Teile} \\\\'."\n".
                  '\cond{Eine Besonderheit in Bezug auf \lm{ \s } und die Adressierung der superial kleinen ganzen Zahlen \lm{ \mathbb{S}_{\Z}^{-1} } von Null bis ohne Eins} \\\\'."\n".
                  /*  ''))),

                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Muss noch einmal auf Konsistenz bzw. Richtigkeit überprüft werden!}',
                    '• Es erscheint ein vermeintlicher Widerspruch:',
                    '– Hier wird festgestellt, dass das feinste Teilungsgewebe einschließlich der Null bis vor die Eins \lm{ \s } Punkte hat.',
                    '– Andererseits gibt es einschließlich der Null bis vor die Eins auch \lm{ \s } superial kleine ganze Zahlen in \lm{ \mathbb{S}^{-1}_{\Z} }, obwohl hier ja zum einen sowohl alle \lm{ \s^{-1} } einschließlich der Null bis vor die Eins durchlaufen werden, was schon \lm{ \s } an der Zahl sind, und dies noch jeweils in allen Schritten der endlichen ganzen Zahlen \lm{ \mathbb{Z} }, was \lm{ 2 \cdot ω } an der Zahl sind. Dies scheinen dann aber \lm{ 2 \cdot ω \cdot \s } Schritte zu sein.',
                    '• Wie ist das möglich?',
                    '– Die Lösung des Rätsels oder vermeintlichen Widerspruchs ist, dass die Koeffizienten \lm{ a_{\s} \in \mathbb{A}_{\S} } nicht alle möglichen Punkte bzw. ganzen Zahlen im Sinne von ganzzahligen Teilprodukten der Primfaktorzerlegung von \lm{ \s } adressieren können:',
                    '– Ein mögliches Teilprodukt von \lm{ \s } ist zum Beispiel \lm{ 2^{ω} }, dass die Strecke Null bis Eins in \lm{ 2^{ω} } Teile teilt und Stützpunkte des Gewebes an den Teilungsgrenzen definiert. Viele dieser Punkte, wie \lm{ \frac{ k }{ 2^{ω} } } mit \lm{ k \in \mathbb{N} } oder \lm{ 2^{ω} } selber, sind aber keine sinnvollen Superial-Zahlen und sie können auch nicht durch endliche Koeffizienten \lm{ a_{\s} } mit \lm{ a_{\s} \cdot \s } adressiert werden.',
                    '– Es ist also zu vermuten, dass genau \lm{ 2 \cdot ω } mal weniger Punkte in oder Teilprodukte von \lm{ \s } mit \lm{ a_{\s} } adressierbar sind, also eine große Teilmenge nicht adressierbar ist.',
                    '– Das bedeutet, die Anzahl der Elemente in \lm{ \mathbb{A}_{\S} } ist \lm{ \# \mathbb{A}_{\S} = \frac{ \s }{ 2 \cdot ω } }, was wir ja auch schon in Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-Null-bisOhne-Eins} festgestellt haben und was uns einen wichtigen Hinweis auf die \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} gegeben hat.',
                    ))),

                  array( 'text', array( text => array( */
                    'Wenn wir die Strecke zwischen Null und Eins in \lm{ \s } Teile teilen, dann ist jedes Teil \lm{ \s^{-1} } groß.'."\n".
                    'Adressieren wir die Punkte, die zwischen den Teilen sind, dann beginnen wir mit Null, dann \lm{ \s^{-1} },'."\n".
                    '\lm{ 2 \s^{-1} }, \lm{ 3 \s^{-1} } und so fort.'."\n".
                    'Doch was passiert, wenn wir über die endlichen natürlichen Faktoren \lm{ n \cdot \s^{-1} } hinaus gehen?'."\n",
                      'Da wir die Punkte der Strecke zwischen Null und Eins adressieren wollen, sollten wir an allen entsprechenden'."\n".
                    'Zahlen zwischen Null und Eins vorbeikommen, wie \lm{ \frac{ 1 }{ 3 } }, \lm{ \frac{ 1 }{ 2 } } oder \lm{ \frac{ 2 }{ 3 } },'."\n".
                    'die nichts anderes sind als \lm{ \frac{ 1 }{ 3 } \s^{1} \s^{-1} }, \lm{ \frac{ 1 }{ 2 } \s^{1} \s^{-1} } oder \lm{ \frac{ 2 }{ 3 } \s^{1} \s^{-1} }.'."\n".
                    'Und Zahlen wie \lm{ \frac{ 1 }{ 3 } \s^{1} \s^{-1} - 2 \s^{-1} }, \lm{ \frac{ 1 }{ 3 } \s^{1} \s^{-1} - \s^{-1} } oder'."\n".
                    '\lm{ \frac{ 1 }{ 3 } \s^{1} \s^{-1} + \s^{-1} }, \lm{ \frac{ 1 }{ 3 } \s^{1} \s^{-1} + 2 \s^{-1} } sollten auch dazu gehören.'."\n".
                    'Also alle Zahlen, die zwischen Null und Eins liegen und aktual unendlich kleine und dort ganze Zahlen sind.'."\n".
                    'Deshalb müssen alle \lm{ a \cdot \s^{1} \s^{-1} = a \cdot \s^{0} = a } mit \lm{ a \in \mathbb{A}_{\S} }, also vom aktual unendlich Kleinen aus gesehen die \lm{ a \cdot \s^{1} },'."\n".
                    'auch aktual unendlich kleine ganze Zahlen sein, die von dort aus halt nur als aktual unendlich Groß erscheinen.'."\n".
                    'Denn die Summe einer dort ganzen Zahl \lm{ z \cdot \s^{-1} } mit \lm{ z \in \mathbb{Z} } ergibt nur mit einer anderen ganzen Zahl \lm{ a }'."\n".
                    'wieder eine aktual unendlich kleine ganze Zahl \lm{ a + z \cdot \s^{-1} }.'."\n",
                      'Aus diesem Grund müssen alle \lm{ a \in \mathbb{A}_{\S} } im aktual unendlich Kleinen, in der Größenordnung \lm{ \s^{-1} },'."\n".
                    'auch immer ganze Zahlen sein.'."\n".
                    'Skaliert auf endliche ganze Zahlen müssen dann alle \lm{ a \cdot \s } mit \lm{ a \in \mathbb{A}_{\S} }'."\n".
                    'in der Größenordnung des Endlichen auch immer rein ganze Zahlen sein, wenn auch aktual unendlich groß.'."\n",
                      'Nun bekommen wir eine im ersten Moment vielleicht paradox erscheinende Situation:'."\n",
                      'Wir haben von der Null an bis direkt vor die Eins \lm{ \s } aktual unendlich kleine ganze Zahlen.'."\n".
                    'Für jeden endlichen Faktor \lm{ a } vor \lm{ \s^{0} }, also \lm{ a \cdot \s^{0} = a \cdot \s^{1} \s^{-1} }, laufen aber'."\n".
                    '\lm{ 2 ω } ganzzahlige Zahlen des Summanden \lm{ z \cdot \s^{-1} } durch.'."\n".
                    'Zusammen also \lm{ a + z \cdot \s^{-1} }, wobei bei Null nur \lm{ 0 + n \cdot \s^{-1} }, mit \lm{ n \in \mathbb{N} },'."\n".
                    'und bei Eins nur \lm{ 1 + z^{-} \cdot \s^{-1} }, mit \lm{ z^{-} \in \mathbb{Z}^{-} }.'."\n".
                    'Damit enthält die Menge \lm{ \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} } der Koeffizienten der Superial-Zahlen \lm{ \# \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} = \frac{ \s }{ 2 ω } } Elemente,'."\n".
                    'wie wir auch in Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s} sehen.'."\n",
                      'Wir haben hier die Besonderheit, wie auch noch im Abschnitt \italic{›\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung}‹}'."\n".
                    'genauer beleuchtet wird, dass eine Teilung der Strecke zwischen Null und Eins in \lm{ \s } Teile'."\n".
                    'in Punkte zwischen den Teilen mündet, deren Koordinaten nur durch Summen ausgedrückt werden können,'."\n".
                    'die im Allgemeinen aktual unendlich kleine Summanden enthalten.'."\n".
                    'Und dies, obwohl die Teilung eigentlich aus einer unendlichen Teilung,'."\n".
                    'und damit aus einem Produkt mit unendlich kleinem Faktor, hervorgeht.'."\n".
                    'Dies kann im ersten Moment sonderbar erscheinen.'."\n",
                      'Erst die Kombination der aktual unendlich kleinen Summanden und den endlichen Summanden mit Elementen aus \lm{ \mathbb{A}_{\S} }'."\n".
                    'macht es wieder rund und gibt uns einen tiefen und außergewöhnlichen Einblick in die Zahlentheorie allgemein und'."\n".
                    'im Besonderen in einen weiteren Zusammenhang zwischen Primzahlen, natürlichen, ganzen, rationalen und algebraischen Zahlen'."\n".
                    'sowie deren Verbindung über die Ordinalzahlen und die Biordinalzahlen, was in meinen Augen sehr besonders ist.'."\n",
                      'So können wir die Abgeschlossenheit der Teilung der Strecke von Null bis Eins durch \lm{ \s } erkennen.'."\n".
                    'Durch diese Teilung kommen wir von der Eins genau eine Fraktalebene tiefer bei der Eins auf Ebene \lm{ \s^{-1} } heraus,'."\n".
                    'bei den aktual unendlich kleinen ganzen Zahlen.'."\n".
                    'So sehen wir, dass eine weitere Teilung nichts wirklich neues ergibt, außer, dass sich die Struktur wiederholt,'."\n".
                    'bis wir abermals bei einer noch kleineren Eins auf Ebene \lm{ \s^{-2} } herauskommen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Struktur-Geometrie:Vortext:DasKontinuum', text =>
                      
                'Das Kontinuum', subline =>
                  '')),

                  array( 'notice', array( Display => 'ShowContent', text => array(
                    // '\bold{X}',
                    // '• Wenn wir beim Kontinuum davon ausgehen, dass wir keine unendlich kleinen Summanden in den Adressen haben wollen, dann geht es hier eher darum nicht die Strecke von der Null bis zur Eins durch \lm{ \s } zu teilen, sondern die Gerade der endlichen Zahlen, siehe Abschnitt \italic{›\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Superiale-Basis-s-doppelte-Bedeutung}‹}, so dass wir alle sinnvollen Koeffizienten der Superial-Zahlen erhalten.',
                    ))),

                  array( 'text', array( text => array(
                    'Das Gewebe der Teilung durch \lm{ \s } bildet so in gewisser Hinsicht einen Abschluss in der vollständigen endlichen Teilung,'."\n".
                    'wie eben erklärt, durch die es keine endlichen Abstände mehr gibt und keine Punkte, die durch endliche Teilung,'."\n".
                    'selbst in Potenz der vollständigen Induktion, noch unbelegt oder unerreicht sind.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Wenn Kontinuum bedeutet, dass wir keine aktual unendlich kleinen Summanden in den Adressen der Zahlengerade haben wollen} \\\\'."\n".
                    'Weil nun nach Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-sinnvolle-Koeffizienten-ist-s} die Anzahl der sinnvollen'."\n".
                    'Koeffizienten der Superial-Zahlen von der Null bis vor die Eins \lm{ \# \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} = \frac{ \s }{ 2 ω } } ist, wie geschildert,'."\n".
                    'und es in allen Koeffizienten, also auf der Zahlengeraden mit rein endlichen Adressen, dieses Intervall \lm{ 2 ω } mal gibt, wie wir im Abschnitt \italic{›\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-endl-ganz-Zahlen}‹}'."\n".
                    'lernen, dann muss es insgesamt \lm{ \# \mathbb{A}_{\S} = \# \lbrack 0, 1 \lbrack_{\mathbb{A}_{\S}} = \frac{ \s }{ 2 ω } \cdot 2 ω = \s } Koeffizienten geben.'."\n",
                      'Es gilt also \lm{ \# \mathbb{A}_{\S} = \s }.'."\n".
                    'Damit ist die mögliche maximale Teilung der Zahlengeraden mit rein endlichen Adressen dann erreicht und abgeschlossen, wenn wir sie'."\n".
                    'in \lm{ \s } Teile teilen.'."\n".
                    'Dies würde ich als erreichen des Kontinuums bezeichnen.'."\n",
                      'Klar ist aber, dass dieses Gewebe im Hinblick auf seine Stützpunkte immer lückenhaft bleibt.'."\n".
                    'Denn wir können superial kleine Summanden zu den Adressen – gemeint sind Positionen oder vielleicht auch Koordinaten – hinzufügen und sowie auch oder die Potenzen der endlichen Teilungen natürlich immer weiter treiben,'."\n".
                    'hin zur quadratischen normierten vollständigen Induktion der Potenz aller Primzahlen \lm{ \s^{2} } und weit darüber hinaus,'."\n".
                    'womit wir immer mehr Punkte zwischen den schon adressierten erreichen.'."\n".
                    'Jedoch handelt es sich dann nicht mehr um rein endlich adressierbare Punkte, die einfache normierte vollständige Induktion; eben nicht mehr die erste Norm.'."\n",
                      'Deshalb ist in diesem Sinn mit der Teilung der Zahlengeraden durch \lm{ \s } das'."\n".
                    '\jump{OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese}{Kontinuum}\footnote{\const{SupNum_g_footnote_text_Kontinuumshypothese}}'."\n".
                    'erreicht.'."\n".
                    'Aber Kontinuum bedeutet eben nicht, dass es keinerlei Lücken mehr gibt; halt nur keine, die durch'."\n".
                    'endliche Primzahlen in endlicher Potenz oder in Potenz der einfachen normierten vollständigen Induktion erreichbar sind.'."\n",
                      'Demnach ist das Kontinuum so etwas wie \lm{ \mathfrak{c} ?= \# \mathbb{A}_{\S} = \s = 2^{ω} \cdot 3^{ω} \cdot 5^{ω} \cdot 7^{ω} \cdot 11^{ω} \cdot 13^{ω} \cdot 17^{ω} \cdot 19^{ω} \cdot 23^{ω} \cdot \cdots }.'."\n".
                    'Das könnte bedeuten \lm{ \mathfrak{c} \ne 2^{ω} }.'."\n",
                      'Dies ist jedoch eine andere Definition des Kontinuums als über die Mächtigkeit\footnote{\const{SupNum_g_footnote_text_Maechtigkeit}}, wo \lm{ *| \mathbb{A}_{\S} |* = ω } wäre, weil \lm{ \mathbb{A}_{\S}} abzählbar viele Elemente besitzt.'."\n".
                    'Wir sehen, die Superial-Zahlen machen eine Reflexion der Bedeutung und Definition des Kontinuums notwendig.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Struktur-Geometrie:Vortext:X', text =>
                      
                'Die zwei Konstruktionen von \lm{ \s }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Es lassen sich mindestens zwei geometrische Konstruktionen finden, die der \jump{OM:SupNum:Struktur-Geometrie:Vortext:DefinitionSuperialeEinheit}{Definition von \s}'."\n".
                    'über das unendliche Primzahlprodukt aus der \jump{OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s}{Einleitung} äquivalent sind:'."\n",
                      'Die erste der folgenden Konstruktionen geht ins aktual unendlich Große und die zweite ins aktual unendlich Kleine.'."\n".
                    'Beide definieren \lm{ \s } jedoch auf etwas unterschiedliche Weise:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Definition von \lm{ \s } über den Wiederholungsrhythmus der natürlichen Zahlen} \\\\'."\n".
                    ''))),
                      
                  array( 'figure',
                    array_merge( $SupNum_g_figure_ary_sGeomKonstruktWiederholung, array( name => 'OM:SupNum:Struktur-Geometrie:Vortext:Fig-sGeomKonstruktWiederholung'))),
                      
                  array( 'text', array( text => array(
                    'In der geometrischen Konstruktion der rhythmischen Wiederholung bleiben die Begrenzungspunkte der Teilstrecken immer im selben Abstand von Eins.'."\n".
                    'Am jeweiligen Ende der Punktreihe werden stets die nötigen Punkte angehängt, um den Rhythmus der nächsten natürlichen Zahl zu integrieren,'."\n".
                    'wenn er noch nicht enthalten sein sollte (siehe \jumpname{OM:SupNum:Struktur-Geometrie:Vortext:Fig-sGeomKonstruktWiederholung}).'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Definition von \lm{ \s^{-1} } über den Regen der natürlichen Zahlen} \\\\'."\n".
                    ''))),
                      
                  array( 'figure',
                    array_merge( $SupNum_g_figure_ary_sGeomKonstruktTeilung, array( name => 'OM:SupNum:Struktur-Geometrie:Vortext:Fig-sGeomKonstruktTeilung'))),
                      
                  array( 'text', array( text => array(
                    'In der Konstruktion der rhythmischen Zerlegung werden zwischen den vorhandenen Begrenzungspunkte der Teilstrecken immer neue Punkte hinzugefügt, um den Rhythmus'."\n".
                    'der hinzukommenden natürlichen Zahl in einem gleichmäßigen Rhythmus zu integrieren, falls er noch nicht vorhanden ist (siehe \jumpname{OM:SupNum:Struktur-Geometrie:Vortext:Fig-sGeomKonstruktTeilung}).'."\n",
                      'Dies ist, als wenn ein Regen von natürlichen Zahlen auf der Strecke der Eins herniedergeht.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Explizites Primzahlflächenprodukt von \lm{ \s }} \\\\'."\n".
                    'Für das Primzahlprodukt von \lm{ \s } ergibt sich in beiden Fällen eine mit unendlich mal unendlich vielen Primzahlen gefüllte Fläche'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  \prod_{\forall n \in \mathbb{N}} *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-fuer-alle-in-N-Primzahl-Prod}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{1} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{2} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{3} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{n \in \mathbb{N}} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)^{ω}  \;\;,  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Prod-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'wie wir sie oben schon definiert haben.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Wie wir aus Punkten eine Linie konstruieren können', subline =>
                  'Ein naturphilosophisches Problem gibt uns einen Einblick in die fraktale Realität der Geometrie')),
                  array( 'text', array( text => array(
                    'Kommen wir nun zu unserem fundamentalen Problem, eine Linie aus Punkten zu bilden beziehungsweise zu konstruieren,'."\n".
                    'vom Anfang der Seite zurück und sehen, wie wir nun, nach unserer Erkenntnisreise, darauf Antworten können.'."\n",
                      'Stapelei – „Hochstapelei“ – ist nicht möglich, wie wir festgestellt haben, wenn ein geometrisches Element,'."\n".
                    'wie ein Punkt, keine Ausdehnung hat.'."\n".
                    'Wir können auch sagen, haben geometrische Elemente keine Struktur, und damit keine Ausdehnung,'."\n".
                    'sind sie unteilbar, dann können wir sie nicht so miteinander verbinden, dass sie gemeinsam mehr sind'."\n".
                    'als ihre Einzelteile.'."\n".
                    'Es können also keine wirklich unteilbaren Atome sein, wenn wir sie stapeln möchten.'."\n",
                      'Ein Punkt muss also eine Struktur im Sinne einer Umgebung besitzen, die ihm eine Ausdehnung verleiht.'."\n".
                    'Und genau diese Struktur liefert uns die oben untersuchte arithmetische Struktur der Geometrie'."\n".
                    'über ihre Teilbarkeit durch Primzahlen und der sich daraus ergebenden superialen Basis \lm{ \s }.'."\n".
                    'Durch die Superial-Zahlen bekommt ein Punkt im endlichen eine Umgebung der Struktur \lm{ a \cdot \s^{-1} } mit \lm{ a \in \mathbb{A}_{\S} }.'."\n".
                    ''))),
                      
                  array( 'figure',
                    array_merge( $SupNum_g_figure_ary_GeradeSuperialZahlen, array( name => 'OM:SupNum:Struktur-Geometrie:Vortext:Fig-GeradeSuperialZahlen'))),
                                            
                  array( 'text', array( text => array(
                    'In \jumpname{OM:SupNum:Struktur-Geometrie:Vortext:Fig-GeradeSuperialZahlen} sehen wir, dass jeder Punkt im Endlichen'."\n".
                    'der Ebene oder Potenz \lm{ \s^{0} }, hier am Beispiel von \lm{ -1,\!4 \, \s^{0} = -1,\!4 }, als Umgebung einen'."\n".
                    'ganzen Zahlenstrahl auf Fraktalebene \lm{ \s^{-1} } hat.'."\n".
                    'Der Zahlenstrahl um jeden Punkt hat so dann die Ausdehnung \lm{ 2 ω \, \s^{-1} }, weil der Koeffizient \lm{ a } über alle ganzen Zahlen läuft'."\n".
                    'und die Anzahl der ganzen Zahlen \lm{ \# \mathbb{Z} = 2 ω } ist.'."\n",
                      'Verbinden wir \lm{ \frac{ \s }{ 2 ω } } Punkte dieser Struktur, dann erhalten wir eine Strecke der Länge \lm{ 1 }.'."\n".
                    'Verbinden wir \lm{ \s } Punkte dieser Struktur, dann erhalten wir den ganzen Zahlenstrahl'."\n".
                    'von minus Unendlich \lm{ -ω } bis plus Unendlich \lm{ ω }.'."\n",
                      'Eine fraktale Struktur der geometrischen Elemente löst das Problem mit Punkten eine Linie, mit Linien eine Fläche'."\n".
                    'und mit Flächen ein Volumen zu beschreiben.'."\n".
                    'Und genau dies ist ja ganz eng mit dem Thema der Integration oder allgemeiner mit der Differenzialrechnung verbunden.'."\n".
                    'Es ist also kein Zufall, dass wir über die Superial-Zahlen auf die arithmetische Struktur der Geometrie stoßen,'."\n".
                    'in der sich dann die Superial-Zahlen als Zahlentheorie der Analyses widerspiegeln.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Die Ontologie der Geometrie  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Struktur-Geometrie:OntologieDerGeometrie',
              'Eine Diskussion – ein Versuch der Annäherung', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Struktur-Geometrie', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wie können wir verstehen, was die Ontologie der Geometrie mit dem Unterschied zwischen reell algebraischen und transzendenten Zahlen zu tun hat?'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Struktur-Geometrie:OntologieDerGeometrie:X', text =>
                      
                'Im simplen Fall reicht eine rein reell algebraische Geometrie aus', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Kurz und knapp – vielleicht auch etwas zu verkürzt - würde ich sagen, um simple geometrische Strukturen abzubilden brauchen wir'."\n".
                    'zunächst keine transzendenten Zahlen.'."\n".
                      'Die arithmetische Struktur der Geometrie, die wir oben herausgefunden haben und von der wir vermuten, dass deren'."\n".
                    '\jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{Koeffizienten der Superial-Zahlen tatsächlich reell algebraisch}'."\n".
                    'sind, und nicht nur solche, die durch Radikale darstellbar sind,'."\n".
                    'legt nahe, dass die Koordinaten der Grundstruktur der Geometrie mit reell algebraischen Zahlen auskommt.'."\n".
                    'In diesem Fall sind dann keine Koordinaten notwendig, die unendlich kleine Summanden beinhalten, wie es demnach'."\n".
                    '\jump{OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden}{offenbar bei transzendenten Zahlen der Fall} ist.'."\n",
                      'Wenn wir also für einfache Relationen erst einmal mit reell algebraischen Koordinaten auskommen,'."\n".
                    'dann sind nicht nur die Parameter, sondern auch die Koordinaten der Relationen von Geraden, Parabeln, allgemein Polynomen, Vielecken und selbst Kreisen oder Ellipsen'."\n".
                    'allesamt ebenfalls reell algebraische Zahlen, wenn eine der beiden Koordinaten, der Mittelpunkt und der Radius ebenfalls reell algebraisch sind;'."\n".
                    'vielfach sogar solche, die durch Radikale – also Wurzeln - darstellbar sind.'."\n",
                      'Für die Kreisrelation stellt es sich so dar:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x, x_{M}, y_{M}, r \in \mathbb{A}_{\S} *)  *[  *( x - x_{M} *)^{2} + *( y - y_{M} *)^{2}  =  r^{2}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  y  \in  \mathbb{A}_{\S}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das bedeutet bei diesen einfachen Geometrie können wir mit reell algebraischen Eingabeparametern und reell algebraischen Ergebniskoordinaten auskommen.'."\n".
                    'Und auch elliptische Kurven kommen unter bestimmten Umständen mit reell algebraischen Koordinaten aus, und in jedem Fall mit algebraischen Koordinaten.'."\n",
                      'Wir können die oben angeführten Kurven (Funktionen) auch rotieren oder anderweitig mit Matrizen aus reell algebraischen Zahlen verschieben, spiegeln oder verzerren – multiplizieren –,'."\n".
                    'die Ergebniskoordinaten bleiben reell algebraische Zahlen.'."\n".
                    'Das auf dieser Seite eingangs gefundene Raster gibt uns die Möglichkeit ein Quadrat um 45° – \lm{ ½π } – zu drehen und die Koordinaten'."\n".
                    'seiner Eckpunkte liegen immer noch auf diesem Raster, weil sie durch Radikale – in diesem Fall zweite Wurzeln – darstellbar sind.'."\n",
                      'Exponentialfunktionen mit einer ganzzahligen oder rationalen Basis sind allerdings auf diesem Raster nur darstellbar,'."\n".
                    'wenn wir uns auf rationale Eingangsparameter beschränken.'."\n".
                    'Das entspricht aber nicht der hier anvisierten Geometrie, in der die Eingangswerte und Ergebniswerte aus der selben Zahlenmenge,'."\n".
                    'nämlich der gefundenen arithmetischen Struktur der Geometrie, vermutlich den reell algebraischen Zahlen, kommen sollen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Struktur-Geometrie:OntologieDerGeometrie:X', text =>
                      
                'Wann kommen transzendente Zahlen ins Spiel?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die transzendenten Zahlen kommen ins Spiel, wenn wir uns beispielsweise mit der Länge der Kurven beschäftigen oder'."\n".
                    'zu den Exponentialfunktionen übergehen wollen.'."\n",
                      'Der Umfang eines Kreises \lm{ 2π } ist beispielsweise eine Länge oder Strecke entlang der Kreisrelation und eine transzendente Zahl.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Struktur-Geometrie:OntologieDerGeometrie:X', text =>
                      
                'Können wir einen Kreis entlang des Kreisumfangs so parametrisieren, dass wir nur rein reell algebraische Koordinaten erhalten?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Nutzen wir die \lm{ \e }-Funktion zur Parametrisierung einen Kreises entlang seines Kreisumfanges mit reellen Zahl als Parameter,'."\n".
                    'ist es völlig klar, dass diese auch transzendente Koordinaten liefert.'."\n".
                    'Und zwar, weil die reellen Zahlen auch transzendente Zahlen enthalten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x \in \mathbb{R} *)  *[  \mathrm{Re}*( \e^{x \i} *) \cap \mathbb{T}  \ne  \varnothing  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wenn \lm{ \mathbb{T} } die Menge der transzendenten Zahlen und \lm{ \mathrm{Re}*( c *) } der Realanteil der komplexen Zahl \lm{ c } ist.'."\n",
                      'Es kommt sodann die Frage auf, ob wir den Kreis auch so parametrisieren können, dass nur reell algebraische Zahlen im Real- und im Imaginäranteil'."\n".
                    'herauskommen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{\S} *)  *[  \mathrm{Re}*( \e^{a \i 2 π} *) \cap \mathbb{T}  ?=  \varnothing  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und dies so, wie im vorstehenden Beispiel dadurch, dass wir zwar wegen des Faktors \lm{ 2 π } außer die Null nur transzendente Zahlen im Exponenten haben,'."\n".
                    'diese aber über den Faktor \lm{ a } so granuliert sind, dass alle Ergebnisse auf dem Raster von \lm{ \s^{-1} } in der Menge der komplexen Zahlen \lm{ \mathbb{C} } liegen.'."\n".
                    'Dabei möchte ich im Folgenden \lm{ \mathbb{C}_{\S} } als die Menge der komplexen Zahlen auf diesem Raster bezeichnen.'."\n",
                      'Nach den Erkenntnissen, die wir im Rahmen der Superial-Zahlen und ihrer arithmetischen Struktur der Geometrie haben, wissen wir,'."\n".
                    'dass es \lm{ \s } algebraische Koeffizienten der Superial-Zahlen insgesamt gibt.'."\n".
                    'Für den oberen Parameter \lm{ a } erhalten wir dann eine vollständige Kreisumrundung, wenn er von Null bis Eins durchläuft.'."\n",
                      'Nach unseren Erkenntnissen kommt die Nutzung des Faktors \lm{ a } der Teilung der Strecke Eins durch ganzzahligen Exponenten von Primzahlen im Eingangsabschnitt dieser Seite gleich,'."\n".
                    'nur das hier der Kreisumfang beziehungsweise der Winkel entsprechend geteilt wird:'."\n".
                      'Nehmen wir einfachheitshalber den Einheitskreis, dann ist in seine Punktmenge \lm{ \mathbb{K}_{1} } ohne Teilung die einzige Koordinate der Einheitsvektor auf der realen oder x-Achse:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{K}_{1}  =  *\{ \begin{bmatrix} 1 \cr 0 \end{bmatrix} *\}  }'),
                      array( display => 'on',  latex => '{  \mathbb{K}_{2}  =  *\{ \begin{bmatrix} 1 \cr 0 \end{bmatrix}, \begin{bmatrix} -1 \cr 0 \end{bmatrix} *\}  }'),
                      array( display => 'on',  latex => '{  \mathbb{K}_{2^{2}}  =  *\{ \begin{bmatrix} 1 \cr 0 \end{bmatrix}, \begin{bmatrix} 0 \cr 1 \end{bmatrix}, \begin{bmatrix} -1 \cr 0 \end{bmatrix}, \begin{bmatrix} 0 \cr -1 \end{bmatrix}  *\}  }'),
                      array( display => 'on',  latex => '{  \mathbb{K}_{2^{3}}  =  *\{ \begin{bmatrix} 1 \cr 0 \end{bmatrix}, \begin{bmatrix} \sqrt{ \frac{1}{2} } \cr \sqrt{ \frac{1}{2} } \end{bmatrix}, \begin{bmatrix} 0 \cr 1 \end{bmatrix}, \begin{bmatrix} - \sqrt{ \frac{1}{2} } \cr \sqrt{ \frac{1}{2} } \end{bmatrix}, \\\ \qquad\qquad\;\; \begin{bmatrix} -1 \cr 0 \end{bmatrix}, \begin{bmatrix} \sqrt{ - \frac{1}{2} } \cr \sqrt{ - \frac{1}{2} } \end{bmatrix}, \begin{bmatrix} 0 \cr -1 \end{bmatrix}, \begin{bmatrix} \sqrt{ \frac{1}{2} } \cr - \sqrt{ \frac{1}{2} } \end{bmatrix}  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Tabelle der Koordinatendreiecke für das 16-Eck} \\\\'."\n".
                    'Jeder Punkt \lm{ P_{k} }​ liegt auf dem Einheitskreis bei:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall k \in [ 0, 16 [_\mathbb{N} *)  *[  \theta_{k}  =  \frac{ k \cdot 2 π }{ 16 }  *]  }'),
                      array( display => 'on',  latex => '{  P_{k}  =  \begin{bmatrix} \cos\,\theta_{k}​ \cr \sin \, \theta_{k} \end{bmatrix}  =  *( \cos \, \theta_{k}​ , \, \sin \, \theta_{k} *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Alle Koordinaten lassen sich durch Radikale, also Wurzelausdrücke, darstellen, wie ich vermutet habe:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      /* array( display => 'on',  latex => '\begin{array}{|c|c|c|c|c|}'."\n".
                                                        '\hline'."\n".
                                                        'k & P_k  (x, y) & P_{k+1} (x, y) & \Delta x & \Delta y \\\ '."\n".
                                                        '\hline'."\n".
                                                        '0 & (1,0) & \left(\frac{\sqrt{2+\sqrt{2}}}{2}, \frac{\sqrt{2-\sqrt{2}}}{2} \right) & \frac{\sqrt{2+\sqrt{2}}}{2} - 1 & \frac{\sqrt{2-\sqrt{2}}}{2} \\\ '."\n".
                                                        '1 & \left(\frac{\sqrt{2+\sqrt{2}}}{2}, \frac{\sqrt{2-\sqrt{2}}}{2} \right) & \left(\frac{\sqrt{2}}{2}, \frac{\sqrt{2}}{2} \right) & \frac{\sqrt{2}}{2} - \frac{\sqrt{2+\sqrt{2}}}{2} & \frac{\sqrt{2}}{2} - \frac{\sqrt{2-\sqrt{2}}}{2} \\\ '."\n".
                                                        '2 & \left(\frac{\sqrt{2}}{2}, \frac{\sqrt{2}}{2} \right) & \left(\frac{\sqrt{2-\sqrt{2}}}{2}, \frac{\sqrt{2+\sqrt{2}}}{2} \right) & \frac{\sqrt{2-\sqrt{2}}}{2} - \frac{\sqrt{2}}{2} & \frac{\sqrt{2+\sqrt{2}}}{2} - \frac{\sqrt{2}}{2} \\\ '."\n".
                                                        '3 & \left(\frac{\sqrt{2-\sqrt{2}}}{2}, \frac{\sqrt{2+\sqrt{2}}}{2} \right) & (0,1) & -\frac{\sqrt{2-\sqrt{2}}}{2} & 1 - \frac{\sqrt{2+\sqrt{2}}}{2} \\\ '."\n".
                                                        '4 & (0,1) & \left(-\frac{\sqrt{2-\sqrt{2}}}{2}, \frac{\sqrt{2+\sqrt{2}}}{2} \right) & -\frac{\sqrt{2-\sqrt{2}}}{2} & \frac{\sqrt{2+\sqrt{2}}}{2} - 1 \\\ '."\n".
                                                        '5 & \left(-\frac{\sqrt{2-\sqrt{2}}}{2}, \frac{\sqrt{2+\sqrt{2}}}{2} \right) & \left(-\frac{\sqrt{2}}{2}, \frac{\sqrt{2}}{2} \right) & -\frac{\sqrt{2}}{2} + \frac{\sqrt{2-\sqrt{2}}}{2} & \frac{\sqrt{2}}{2} - \frac{\sqrt{2+\sqrt{2}}}{2} \\\ '."\n".
                                                        '6 & \left(-\frac{\sqrt{2}}{2}, \frac{\sqrt{2}}{2} \right) & \left(-\frac{\sqrt{2+\sqrt{2}}}{2}, \frac{\sqrt{2-\sqrt{2}}}{2} \right) & -\frac{\sqrt{2+\sqrt{2}}}{2} + \frac{\sqrt{2}}{2} & \frac{\sqrt{2-\sqrt{2}}}{2} - \frac{\sqrt{2}}{2} \\\ '."\n".
                                                        '7 & \left(-\frac{\sqrt{2+\sqrt{2}}}{2}, \frac{\sqrt{2-\sqrt{2}}}{2} \right) & (-1,0) & -1 + \frac{\sqrt{2+\sqrt{2}}}{2} & -\frac{\sqrt{2-\sqrt{2}}}{2} \\\ '."\n".
                                                        '8 & (-1,0) & \left(-\frac{\sqrt{2+\sqrt{2}}}{2}, -\frac{\sqrt{2-\sqrt{2}}}{2} \right) & -\frac{\sqrt{2+\sqrt{2}}}{2} + 1 & -\frac{\sqrt{2-\sqrt{2}}}{2} \\\ '."\n".
                                                        '9 & \left(-\frac{\sqrt{2+\sqrt{2}}}{2}, -\frac{\sqrt{2-\sqrt{2}}}{2} \right) & \left(-\frac{\sqrt{2}}{2}, -\frac{\sqrt{2}}{2} \right) & -\frac{\sqrt{2}}{2} + \frac{\sqrt{2+\sqrt{2}}}{2} & -\frac{\sqrt{2}}{2} + \frac{\sqrt{2-\sqrt{2}}}{2} \\\ '."\n".
                                                        '10 & \left(-\frac{\sqrt{2}}{2}, -\frac{\sqrt{2}}{2} \right) & \left(-\frac{\sqrt{2-\sqrt{2}}}{2}, -\frac{\sqrt{2+\sqrt{2}}}{2} \right) & -\frac{\sqrt{2-\sqrt{2}}}{2} + \frac{\sqrt{2}}{2} & -\frac{\sqrt{2+\sqrt{2}}}{2} + \frac{\sqrt{2}}{2} \\\ '."\n".
                                                        '11 & \left(-\frac{\sqrt{2-\sqrt{2}}}{2}, -\frac{\sqrt{2+\sqrt{2}}}{2} \right) & (0,-1) & \frac{\sqrt{2-\sqrt{2}}}{2} & -1 + \frac{\sqrt{2+\sqrt{2}}}{2} \\\ '."\n".
                                                        '12 & (0,-1) & \left(\frac{\sqrt{2-\sqrt{2}}}{2}, -\frac{\sqrt{2+\sqrt{2}}}{2} \right) & \frac{\sqrt{2-\sqrt{2}}}{2} & -\frac{\sqrt{2+\sqrt{2}}}{2} + 1 \\\ '."\n".
                                                        '13 & \left(\frac{\sqrt{2-\sqrt{2}}}{2}, -\frac{\sqrt{2+\sqrt{2}}}{2} \right) & \left(\frac{\sqrt{2}}{2}, -\frac{\sqrt{2}}{2} \right) & \frac{\sqrt{2}}{2} - \frac{\sqrt{2-\sqrt{2}}}{2} & -\frac{\sqrt{2}}{2} + \frac{\sqrt{2+\sqrt{2}}}{2} \\\ '."\n".
                                                        '14 & \left(\frac{\sqrt{2}}{2}, -\frac{\sqrt{2}}{2} \right) & \left(\frac{\sqrt{2+\sqrt{2}}}{2}, -\frac{\sqrt{2-\sqrt{2}}}{2} \right) & \frac{\sqrt{2+\sqrt{2}}}{2} - \frac{\sqrt{2}}{2} & -\frac{\sqrt{2-\sqrt{2}}}{2} + \frac{\sqrt{2}}{2} \\\ '."\n".
                                                        '15 & \left(\frac{\sqrt{2+\sqrt{2}}}{2}, -\frac{\sqrt{2-\sqrt{2}}}{2} \right) & (1,0) & 1 - \frac{\sqrt{2+\sqrt{2}}}{2} & \frac{\sqrt{2-\sqrt{2}}}{2} \\\ '."\n".
                                                        '\hline'."\n".
                                                        '\end{array}',
                                          label_text => '', label_incr => false), */
                      array( display => 'on',  latex => '\begin{array}{|c|c|c|}'."\n".
                                                        '\hline'."\n".
                                                        'k & \theta_{k} & P_{k} *( x_{k} , y_{k} *) \\\ '."\n".
                                                        '\hline'."\n".
                                                        '0 & 0 & (1,0) \\\ '."\n".
                                                        '1 & \frac{\pi}{8} & \left(\frac{\sqrt{2+\sqrt{2}}}{2}, \frac{\sqrt{2-\sqrt{2}}}{2} \right) \\\ '."\n".
                                                        '2 & \frac{\pi}{4} & \left(\frac{\sqrt{2}}{2}, \frac{\sqrt{2}}{2} \right) \\\ '."\n".
                                                        '3 & \frac{3\pi}{8} & \left(\frac{\sqrt{2-\sqrt{2}}}{2}, \frac{\sqrt{2+\sqrt{2}}}{2} \right) \\\ '."\n".
                                                        '4 & \frac{\pi}{2} & (0,1) \\\ '."\n".
                                                        '5 & \frac{5\pi}{8} & \left(-\frac{\sqrt{2-\sqrt{2}}}{2}, \frac{\sqrt{2+\sqrt{2}}}{2} \right) \\\ '."\n".
                                                        '6 & \frac{3\pi}{4} & \left(-\frac{\sqrt{2}}{2}, \frac{\sqrt{2}}{2} \right) \\\ '."\n".
                                                        '7 & \frac{7\pi}{8} & \left(-\frac{\sqrt{2+\sqrt{2}}}{2}, \frac{\sqrt{2-\sqrt{2}}}{2} \right) \\\ '."\n".
                                                        '8 & \pi & (-1,0) \\\ '."\n".
                                                        '9 & \frac{9\pi}{8} & \left(-\frac{\sqrt{2+\sqrt{2}}}{2}, -\frac{\sqrt{2-\sqrt{2}}}{2} \right) \\\ '."\n".
                                                        '10 & \frac{5\pi}{4} & \left(-\frac{\sqrt{2}}{2}, -\frac{\sqrt{2}}{2} \right) \\\ '."\n".
                                                        '11 & \frac{11\pi}{8} & \left(-\frac{\sqrt{2-\sqrt{2}}}{2}, -\frac{\sqrt{2+\sqrt{2}}}{2} \right) \\\ '."\n".
                                                        '12 & \frac{3\pi}{2} & (0,-1) \\\ '."\n".
                                                        '13 & \frac{13\pi}{8} & \left(\frac{\sqrt{2-\sqrt{2}}}{2}, -\frac{\sqrt{2+\sqrt{2}}}{2} \right) \\\ '."\n".
                                                        '14 & \frac{7\pi}{4} & \left(\frac{\sqrt{2}}{2}, -\frac{\sqrt{2}}{2} \right) \\\ '."\n".
                                                        '15 & \frac{15\pi}{8} & \left(\frac{\sqrt{2+\sqrt{2}}}{2}, -\frac{\sqrt{2-\sqrt{2}}}{2} \right) \\\ '."\n".
                                                        '\hline'."\n".
                                                        '\end{array}',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Vortext:X', text =>
                      
                'Beweis: Die Koordinaten der Ecken eines regelmäßigen \lm{ m }-Ecks sind algebraische Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                  '\condb{Schritt 1: Darstellung der Ecken in komplexer Form} \\\\'."\n".
                    'Die Eckpunkte eines regelmäßigen \lm{ m }-Ecks auf dem Einheitskreis sind durch die komplexen Zahlen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall m \in \mathbb{N} *) *( \forall k \in [ 0, m [_\mathbb{N} *)  *[  z_{k}  =  e^{\frac{ k }{ m } \cdot \i \cdot 2 π}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  z_{k}  =  \cos \frac{ k \cdot 2 π }{ m } + \i \cdot \sin \frac{ k \cdot 2 π }{ m }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'gegeben.'."\n".
                    'Diese Werte sind die \lm{ m }-ten Einheitswurzeln, also die Lösungen der Gleichung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  z^{ m }  =  1  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die reellen Koordinaten der Ecken sind die Kosinus- und Sinuswerte:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  x_{k} = \cos \frac{ k \cdot 2 π }{ m }  }'),
                      array( display => 'on',  latex => '{  y_{k} = \sin \frac{ k \cdot 2 π }{ m }  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Unsere Aufgabe ist es zu zeigen, dass \lm{ x_{k} } und \lm{ y_{k} } reell algebraische Zahlen sind, also Lösungen eines Polynoms mit ganzzahligen Koeffizienten.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Schritt 2: Minimalpolynom der Einheitswurzeln} \\\\'."\n".
                    'Die Gleichung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  z^{m} - 1  =  0  }'),
                    ))),
                  array( 'text', array( text => array(
                    'hat die Lösungen \lm{ z_k = e^{2\pi i k / m} }, also genau die Ecken des \lm{ m }-Ecks. Da dieses Polynom \italic{ganzzahlige Koeffizienten} hat,'."\n".
                    'folgt sofort, dass jede Einheitswurzel \lm{ z_k } eine \italic{algebraische Zahl} ist.'."\n".
                    'Tatsächlich sind die Einheitswurzeln die Nullstellen des sogenannten \lm{ m }-ten Kreisteilungspolynoms\footnote{(Primärliteratur einfügen!) \\\\ Internet: \\\\ Vgl. \cite{wiki:Kreisteilungspolynom:2024}.}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Phi_{m}(z)  =  \prod_{\substack{1 \leq k \leq m \\\ \gcd(k, m) = 1}} *( z - e^{2\pi i k / m} *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wobei \lm{ \gcd(k, m) } (auch ggT genannt) die größte natürliche Zahl ist, durch die die beiden Zahlen \lm{ k } und \lm{ m } teilbar sind.'."\n",
                      'Dieses Polynom hat \italic{ganzzahlige Koeffizienten}, was zeigt, dass jede Einheitswurzel \lm{ e^{2\pi i k / m} } eine algebraische Zahl ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Schritt 3: Kosinus und Sinus sind ebenfalls algebraisch} \\\\'."\n".
                    'Da ja, wie oben beschrieben, gilt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  XXX z_{k}  =  e^{2\pi i k / m}  =  \cos \frac{2\pi k}{m} + i \sin \frac{2\pi k}{m}  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und wir bereits gezeigt haben, dass \lm{ z_k } algebraisch ist, genügt es zu zeigen, dass auch Kosinus und Sinus algebraisch sind.'."\n".
                    'Das folgt direkt aus den Identitäten'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.O', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \cos \theta = \frac{e^{i\theta} + e^{-i\theta}}{2}  }'),
                      array( display => 'on',  latex => '{  \sin \theta = \frac{e^{i\theta} - e^{-i\theta}}{2i}  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Da sowohl \lm{ e^{i\theta} } als auch \lm{ e^{-i\theta} } algebraische Zahlen sind – weil sie Einheitswurzeln sind –,'."\n".
                    'folgt aus diesen Linearkombinationen, dass auch \lm{ \cos \theta } und \lm{ \sin \theta } algebraische Zahlen sind.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Schritt 4: Fazit} \\\\'."\n".
                    'Da sich \lm{ \cos \frac{2\pi k}{m} } und \lm{ \sin \frac{2\pi k}{m} } als Linearkombinationen von Einheitswurzeln ausdrücken lassen'."\n".
                    'und Einheitswurzeln algebraische Zahlen sind, folgt:'."\n",
                      'Die Koordinaten aller Ecken eines beliebigen regelmäßigen \lm{ m }-Ecks sind algebraische Zahlen.'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Vortext:X', text =>
                      
                'Analyse des Beweises und Projektion der Bedeutung in der betrachteten Geometrie', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Dies erscheint auf den ersten Blick recht erstaunlich, weil wir es ja bei der obigen exponentiellen \lm{ \e }-Funktion, zur Beschreibung des Kreises,'."\n".
                    'sowohl in der Basis als auch im Exponenten, bis auf beim Ausgangseckpunkt \lm{ k = 0 }, nur mit rein transzendenten Zahlen zu tun haben.'."\n".
                    'Diese neutralisieren sich hier aber vollständig in Bezug auf ihre Transzendenz.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Was passiert, wenn wir mit der Anzahl der Ecken ins Unendliche übergehen?} \\\\'."\n".
                  '\cond{Abschätzung der Anzahl an Ecken, die algebraische Koordinaten haben können} \\\\'."\n".
                    'In Bezug auf die Kreisrelation des Einheitskreises, die wir weiter oben betrachtet haben, kann sowohl die \lm{ x }-Koordinate als auch die \lm{ y }-Koordinate'."\n".
                    'alle algebraischen Zahlen zwischen minus Eins und plus Eins annehmen, nur nicht in freier Kombination.'."\n".
                    'Wenn \lm{ x } von minus Eins bis plus Eins durchläuft, dann treten, außer an den Scheitelpunkten, immer zwei verschiedene \lm{ y }-Koordinaten auf,'."\n".
                    'und zwar in der Kombination \lm{ \pm y }.'."\n",
                      'Wir haben es also mit der Anzahl \lm{ 2 \cdot \# [ -1, 1 ]_\mathbb{A} - 2 } zu tun.'."\n".
                    'Dies sind viel mehr Koordinaten, als wir sie durch ein regelmäßiges \lm{ m }-Eck bekommen können, denn dies wären durch vollständige Induktion nur \lm{ ω } viele Koordinaten.'."\n".
                    'Die unterschiedlichen \lm{ m }-Ecke enthalten eben unterschiedliche Koordinaten, je nach der Primfaktorzerlegung von \lm{ m },'."\n".
                    'sodass wir durch alle \lm{ ω } \lm{ m }-Ecke kombiniert eine Anzahl von \lm{ \s } Koordinaten erhalten.'."\n".
                    'Dies ist nicht anders, als bei der Teilung der Strecke von Null bis Eins, wie oben entwickelt'."\n".
                    'und hätte nach meiner Ansicht zur Folge, dass die Koordinaten überwiegend superial kleine Summanden bekämen.'."\n",
                      'Der obige algebraische Parameter \lm{ a } der Eingangs formulierten \lm{ \e }-Funktion für den Einheitskreis enthält allerdings'."\n".
                    'nicht \lm{ \s } viele Möglichkeiten bereit.'."\n".
                    'Er läuft nur von \lm{ \lbrack 0, 1 \lbrack_\mathbb{A} }, wenn die Koordinaten keine Dopplung haben sollen.'."\n",
                      'Nehmen wir an es gilt unsere Vermutung \lm{ \mathbb{A}_{\S} ?= \mathbb{A} }:'."\n".
                    'Dann wäre \lm{ \# \lbrack 0, 1 \lbrack_\mathbb{A} \; ?= \frac{ \s }{ 2 ω } }.'."\n".
                    'Dies führt nach meinem Verständnis dazu, dass die superial kleinen Summanden vollständig verschwinden und alle Koordinaten'."\n".
                    'rein reell algebraische werden.'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    '\lm{ 2 \cdot \# [ -1, 1 ]_\mathbb{A} - 2 = 2 \cdot *( 2 \cdot \frac{ \s }{ 2 ω } *) - 2 = \frac{ 2 \s }{ ω } - 2 }'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die Betrachtung der Verhältnisse im Kreis verlagert die Fragestellung der sinnvollen Koeffizienten geometrisch ins Endliche} \\\\'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a^{+} \in \mathbb{A}_{\R}^{+} *)  *[  a^{+} \cdot \s  ?\in  \mathbb{N}_{\infty}  *]  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Equ-Realanteile-algebra-Zahlen-mal-s-verm-in-natuerl-infinit-Zahlen}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a^{+} \in \mathbb{A}_{\R}^{+} *)  *[  a^{+} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Equ-Realanteile-algebra-Zahlen-mal-s-verm-in-natuerl-SupZahlen}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a^{+} \in \mathbb{A}_{\R}^{+} *)  *[  *( e^{a^{+} \cdot \i \cdot 2 π} *)^{\s}  ?=  1  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Gibt es überrationale Zahlen, die sich nicht wie die ganzen Wurzeln aus natürlichen Zahlen verhalten?} \\\\'."\n".
                    'Wir wollen schauen, welche reell algebraischen Zahlen der Menge \lm{ \mathbb{A}_{\R} } es noch geben kann, die durch ein Produkt mit einem unendlichen Teilprodukt des Primzahl-Flächenprodukts'."\n".
                    'von \lm{ \s } noch aktual unendliche natürliche Zahlen ergeben können.'."\n".
                    'Hier ein mögliches Beispiel, dass sich an überrationale Zahlen, genauer an überrationalen Brüchen, orientiert.'."\n".
                    'Denn es gibt ja auch noch die Möglichkeit, dass zum Beispiel nicht alle endlichen aktual unendlichen Potenzen der Zwei schon ausreichen, wie bei irrationalen Wurzeln'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  =  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{\frac{ 1 }{ 2 }} \cdot 2^{ω} }{ 2^{ω} }  =  \frac{ 2^{ω + \frac{ 1 }{ 2 }} }{ 2^{ω} }  \;\; ,  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Wurzel-Zwei-mal-Zwei-hoch-omega-durch-Zwei-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'sondern nur eine der unendlichen Potenzen der Zwei dies leistet, alle anderen aber nicht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{\R} *) *[  a \cdot 2^{ω} \in \mathbb{N}_{\infty}  \land  a \cdot 2^{ω - 1} \notin \mathbb{N}_{\infty}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  /* array( 'equations',
                    array( equ_text_std => 'SN.ArGeo.D', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on',  latex => '{  s  =  ω^{ω}  }',
                      //                    label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Vortext:X', text =>
                      
                'X', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))), */
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
