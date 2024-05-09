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
                    ))),

                  array( 'text', array( text => array(
                    'In der Geometrie stoßen wir schnell auf ein fundamentales Problem.'."\n".
                    'Denn wollen wir beispielsweise eine Linie konstruieren oder berechnen, so wird oft leicht dahin gesagt:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Nun setzen wir die Linie aus vielen Punkten zusammen; natürlich aus unendlich vielen, um wirklich eine Linie zu erhalten.'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Oder entsprechend für eine Fläche:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Nun setzen wir die Fläche aus vielen Linien zusammen; natürlich aus unendlich vielen, um wirklich eine Fläche zu erhalten.'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Und Entsprechendes so fortgeführt für den Raum beziehungsweise das Volumen und jede nächst größere Dimension.'."\n",
                      'Doch was ist eine Linie, um beim einfachsten Beispiel zu bleiben,'."\n".
                    'und wie können wir eine Linie aus Punkten aufbauen?'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:XXX', text =>
                                           
                'Ein fundamentales Problem', subline =>
                  'Hochstapelei')),
                  array( 'text', array( text => array(
                    'Der Versuch eine Linie aus Punkten quasi aufzustapeln ist zum Beispiel'."\n".
                    'zum Scheitern verurteilt.'."\n",
                      'Beim Stapeln wird ein Punkt so an den anderen platziert, dass alle gemeinsam'."\n".
                    'die Linie füllen, dicht an dicht.'."\n".
                    'Diese Dichte ist allerdings davon abhängig, welche Ausdehnung jeder einzelne Punkt hat.'."\n".
                    'Daher das Wort stapeln.'."\n",
                      'Ein Punkt besitzt aber per Definition keine Ausdehnung.'."\n".
                    'Daher können wir Punkte nicht so stapeln, dass eine Linie gefüllt wird.'."\n".
                    'Das gelingt auch dann nicht, wenn wir unendlich viele Punkte nehmen.'."\n".
                    'Denn diese Art von Unendlichkeit, die Punkte ohne jede Ausdehnung raumgreifend stapeln kann, ist nicht wohldefiniert.'."\n",
                      'Gleiches gilt auch für all die anderen genannten Objekte:'."\n".
                    'Wir können Linien ohne jede Breite nicht zu Flächen stapeln und so fort.'."\n".
                    'Auf diese Weise ist also kein Konstruieren einer höheren Dimension aus niedrigeren Dimensionen möglich.'."\n",
                      'Aber was funktioniert dann?'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:XXX', text =>
                                           
                'Ist die Geometrie im Grunde fraktal?', subline =>
                  'Weben oder Netzwerken')),
                  array( 'text', array( text => array(
                    'Wir können uns zwei Punkte denken, die nicht aneinander – also nicht aufeinander – liegen,'."\n".
                    'darum einen Abstand haben und so auch eine Richtung vorgeben, wenn wir sie mit Null und Eins bezeichnen.'."\n",
                      'Nun beginnen wir ein Netz von Punkten zu „weben“, indem wir zwischen beide'."\n".
                    'Punkte, genau in der Mitte, einen weiteren Punkt legen und haben nun drei Punkte in der selben Richtung auf einer Linie.'."\n".
                    'So fahren wir fort und legen jeweils zwischen zwei benachbarte Punkte einen weiteren'."\n".
                    'in die Mitte.'."\n".
                    'Hierdurch wird das Gewebe zwischen unseren Ausgangspunkten immer dichter gewebt und'."\n".
                    'wir spannen ein Netz von Punkten auf, wodurch wir immer mehr Punkte auf der Strecke zwischen Null und Eins erhalten.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Selbstähnlichkeit} \\\\'."\n".
                  '\cond{Die Auflösung des Inneren} \\\\'."\n".
                    'Weil wir immer wieder das gleiche tun, ergibt sich eine fraktale, also selbstähnliche, Netzstruktur.'."\n",
                      'Die gesamte Anzahl der Punkte \lm{ n }, ihre Dichte, als auch die Anzahl der Teilstrecken, \lm{ \rho } und'."\n".
                    'ihr Abstand \lm{ d } berechnen sich mit der Fraktalebene \lm{ x } zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  2^{x} + 1  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ 2^{x} }  =  2^{-x}  }'),
                      array( display => 'on',  latex => '{  \rho  =  2^{x}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Punktanzahl \lm{ n } ist dabei immer einer mehr als die Anzahl der Teilstrecken,'."\n".
                    'weil die Punkte ja die Teilstrecken begrenzen und daher ein zusätzlicher Punkt den Beginn oder den Abschluss'."\n".
                    'bilden muss, jenachdem, wie wir drauf schauen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Das Zählen} \\\\'."\n".
                  '\cond{Die Erweiterung nach außen, die nach innen zurück wirkt} \\\\'."\n".
                    'Beginnen wir noch einmal von vorne mit den Punkten Null und Eins.'."\n",
                      'Verdoppeln wir diese beiden Punkte und verschieben den Punkt Null so auf die Eins, dass sich'."\n".
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
                  array( 'text', array( Shape => 'italic', text => array(
                        'Mathematik beginnt dort, \\\\ '."\n".
                        'wo wir das Eine vom Anderen unterscheiden können. \\\\ '."\n".
                        '\\small{\\color{*TitleAdd}{Ab da zählt alles.}}'."\n".
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
                      'Wenn wir nun diese neue Struktur aus vier Punkten verkleinern und zwischen die Null und die Eins legen,'."\n".
                    'dann erhalten wir eine Teilung, die ganz neue Punkte enthält.'."\n".
                    'Nur die auf der Null und der Eins fallen beide Punkte zusammen.'."\n".
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
                      array( display => 'on',  latex => '{  \rho  =  2^{x_{2}} \cdot 3^{x_{3}} \cdot 5^{x_{5}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So geht es nun immer weiter.'."\n",
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
                      array( display => 'on',  latex => '{  \rho  =  \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}}  }'),
                    ))),
                  array( 'text', array( text => array(
                  '\condb{Alle Strecken der natürlich Zahlen und dann der ganzen Zahlen vernetzen} \\\\'."\n".
                    'Diese feine Unterteilung können wir jetzt zwischen je zwei benachbarte Zahlen legen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( x_{i} \in \mathbb{N} *)  *[  n  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}} *) \cdot ω  *]  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}} }  =  \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{-x_{i}}  }'),
                      array( display => 'on',  latex => '{  \rho  =  \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und das Ganze dann auch von der ersten Strecke an in die andere negative Richtung immer weiter verlängern'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( x_{i} \in \mathbb{N} *)  *[  n  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i}^{x_{i}} *) \cdot 2 ω  *]  \;\;  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Abschlusspunkt fällt auf diese Weise bei \lm{ n } weg, weil die Zahl der Teilstrecken nicht endet.'."\n".
                    'Der Abstand \lm{ d } und die Dichte \lm{ \rho } verändern sich gar nicht dadurch.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:XXX', text =>
                                           
                'Immer noch Lückenhaft', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Das geometrische Netzgewebe besteht nun aus den Abständen der Punkte, wobei die Punkte die Knoten oder Stützen des Gewebes sind.'."\n",
                      'Nehmen wir diese Teilungen der Strecken für jede der endlichen Primzahlen nur endlich oft vor,'."\n".
                    'dann haben wir immer noch Lücken endlicher Größe.'."\n",
                      'Wie können wir aber die Lücken so schließen, dass sie keine endliche Größe mehr haben?'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:XXX', text =>
                                           
                'Übergang ins Unendliche', subline =>
                  'Die vollständige Induktion der Teilungen')),
                  array( 'text', array( text => array(
                    'Erst, wenn wir die Teilung der Strecken bis ins Unendliche treiben,'."\n".
                    'bleiben keine endlichen Lücken übrig.'."\n",
                      'Für das Beispiel der Zweiteilung beziehungsweise Halbierung erhalten wir folgende Formeln,'."\n".
                    'wenn wir die Teilung bis in die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    '\lm{ ω } vorantreiben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  2^{ω} + 1  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ 2^{ω} }  =  2^{-ω}  }'),
                      array( display => 'on',  latex => '{  \rho  =  2^{ω}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So erhalten wir zwar schon eine unendliche Dichte, aber wie wir oben gesehen haben'."\n".
                    'sind hier ganz viele Teilungen noch nicht enthalten.'."\n".
                    'Als Beispiele erreichen wir so die Punkte \lm{ \frac{ 1 }{ 3 } } und \lm{ \frac{ 2 }{ 3 } } nicht,'."\n".
                    'die zu den rationalen Zahlen gehören.'."\n".
                    'Ein aktual unendlich kleiner Abstand zwischen den Punkten reicht offenbar nicht aus,'."\n".
                    'um alle endlich zu beschreibenden Punkte zu erreichen.'."\n",
                      'Nehmen wir die Teilungen der Strecke zwischen Null und Eins für auch nur eine der endlichen Primzahlen'."\n".
                    'gar nicht oder nur endlich oft vor, dann haben wir Lücken im Endlichen,'."\n".
                    'die nur einen aktual unendlich kleinen Abstand aufweisen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Das aktual unendlich dichte Raster oder Netzwerk aller ganzen negativen Primzahlpotenzen aufspannen} \\\\'."\n".
                    'So müssen wir also die Teilung mit allen endlichen Primzahlen bis in die vollständige Induktion'."\n".
                    'vorantreiben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i} *)^{ω} + 1  }'),
                      array( display => 'on',  latex => '{  d  =  *( \frac{ 1 }{ \prod_{\forall p_{i} \in \mathbb{P}}  p_{i} } *)^{ω}  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i} *)^{-ω}  }'),
                      array( display => 'on',  latex => '{  \rho  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i} *)^{ω}  \;\;  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So gibt es nun zwischen Null und Eins keine rationalen Zahlen mehr,'."\n".
                    'die von dem sich ergebenden Raster oder Netzgewebe nicht geschöpft werden.'."\n",
                      'Nun erweitern wir dieses Gewebe wieder auf alle ganzen Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  *( \prod_{\forall p_{i} \in \mathbb{P}}  p_{i} *)^{ω} \cdot 2 ω  \;\;  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auch hier fällt der Abschlusspunkt \lm{ n } wieder weg, weil die Zahl der Teilstrecken nicht endet.'."\n".
                    'Der Abstand \lm{ d } und die Dichte \lm{ \rho } verändern sich auch wieder gar nicht dadurch.'."\n",
                      'Können wir nun davon sprechen, dass ein solches Gewebe dann im Endlichen keine Lücken mehr hat?'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:XXX', text =>
                                           
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
                    'dass die Radikale der irrationalen algebraischen Zahlen bereits im Raster enthalten sind.'."\n",
                      'Die Radikale der irrationalen algebraischen Zahlen sind die irrationalen algebraischen Zahlen,'."\n".
                    'die durch die vier Grundrechenarten und dem Ziehen ganzer Wurzeln ausgedrückt werden können.'."\n",
                      'Nur für solche irrationalen algebraischen Zahlen, die dann noch durch Integration'."\n".
                    'von Radikalen der irrationalen algebraischen Zahlen entstehen, konnten wir noch nicht Beweisen,'."\n".
                    'dass sie auf dem Raster liegen, obwohl es naheliegend und daher zu vermuten ist.'."\n",
                      'Dies liegt daran, dass wir \jump{OM:SupNum:Ableitungen-Integrale}{die Ableitung und das Integral} mit Hilfe der Superial-Zahlen'."\n".
                    'anders definieren, als bisher mit dem Limes üblich, und dadurch aktual unendlich kleine Summanden'."\n".
                    'in die Integration bekommen, die sich an dieser Stelle dann zu Null summieren müssen,'."\n".
                    'um im Ergebnis rein endlich zu sein.'."\n".
                    'Durch die aktual unendlich kleinen Summanden haben wir mehr Genauigkeit zu berücksichtigen und'."\n".
                    'erreichen so auch eine höhere Güte.'."\n".
                    'Dadurch wird der Beweis aber auch schwieriger zu führen, was ihn bisher verhindert.'."\n",
                      'Warum ist nun zum Beispiel die zweite Wurzel aus Zwei \lm{ \sqrt{2} } schon ein Punkt des Rasters?'."\n",
                      'Dies kommt nach dem Beweis durch den Übergang der Potenz ins ganzzahlige Aktual-Unendliche.'."\n".
                    'Er zeigt, dass die Wurzel aus Zwei erst mit aktual unendlich großem Nenner und Zähler'."\n".
                    'als Bruch aus ganzen Zahlen dargestellt werden kann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  =  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{ω} \cdot 2^{\frac{ 1 }{ 2 }} }{ 2^{ω} }  =  \frac{ 2^{ω + \frac{ 1 }{ 2 }} }{ 2^{ω} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-2-hoch-omega-mal-Wurzel-Zwei-durch-2-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dieser Zusammenhang erscheint auf den ersten Blick möglicherweise eher banal.'."\n".
                    'Denn der Faktor \lm{ 2^{ω} } ist offensichtlich sowohl im Nenner als auch im Zähler des Bruchs vorhanden und'."\n".
                    'könnte deshalb natürlich direkt gekürzt werden.'."\n".
                    'Womit wir auch sofort erkennen, dass die Formel wahr ist.'."\n",
                      'Was macht die Formel dann so besonders?'."\n",
                      'Bei genauer Betrachtung ist das Besondere, dass nur in einer solchen Form auch der Zähler zu einer ganzen Zahl wird.'."\n".
                    'Denn der dem Beweis zugrunde liegende Widerspruchsbeweis, der zeigt, dass kein Bruch aus endlichem Nenner und Zähler'."\n".
                    'die Wurzel aus Zwei darstellen kann, offenbart eine Konstruktionsanweisung, wie ein Bruch aus ganzen Zahlen'."\n".
                    'beschaffen sein muss, der diese Zahl darstellen kann:'."\n",
                      'Der Bruch muss beliebig endlich häufig mit Zwei zu kürzen sein.'."\n".
                    'Was bedeutet, dass sowohl der Nenner als auch der Zähler aktual unendlich groß sein müssen.'."\n".
                    'Der gefundene Bruch hat einen aktual unendlich großen ganzzahligen Nenner und ist offensichtlich wahr.'."\n".
                    'Und er ist beliebig endlich oft mit Zwei zu kürzen.'."\n".
                    'Bleibt die Frage, ob auch der Zähler eine aktual unendlich große ganze Zahl sein kann.'."\n".
                    'Und dies ist mit einem klaren Ja zu beantworten.'."\n",
                      'Der Faktor \lm{ 2^{ω} } ist so groß – eben aktual unendlich groß –, ganzzahlig und so strukturiert,'."\n".
                    'dass er aus jeder rational gebrochenen Potenz von Zwei eine ganze Zahl macht.'."\n".
                    'Das ist die Besonderheit dieses Bruchs, die sofort unsichtbar wird, wenn wir einfach komplett kürzen.'."\n".
                    'Sein Geheimnis wird erst offenbar, wenn wir seine Entstehungsgeschichte verstehen und'."\n".
                    'damit seine Bedeutung entschlüsseln und so erkennen.'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:XXX', text =>
                                           
                'XXX', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      'XXX Es ist also klar, dass dieses Gewebe im Hinblick auf seine Stützpunkte immer Lücken haben wird, selbst dann, wenn die Lücken aktual unendlich klein werden.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:XXX', text =>
                                           
                'Wie wir aus Punkten eine Linie konstruieren können', subline =>
                  'Ein naturphilosophisches Problem')),
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
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{In Arbeit …} \\\\'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Struktur-Geometrie:Vortext:DefinitionSuperialeEinheit', text =>
                      
                '\color{*Bearb}{In Arbeit …} Definition der superialen Einheit \lm{ \s }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{In Arbeit …} Es lassen sich mindestens zwei geometrische Konstruktionen finden, die der folgenden Definition von \\term{s} über das unendliche Primzahlprodukt aus der'."\n".
                    '\\jump{OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s}{Einleitung} äquivalent sind:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  :=  \displaystyle \prod_{\forall n \in \mathbb{N}}  \left( \prod_{\forall p \in \mathbb{P}}  p \right)  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  :=  \displaystyle \left( \prod_{\forall p \in \mathbb{P}}  p \right)^{\omega}  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{In Arbeit …} Die erste der folgenden Konstruktionen geht ins aktual unendlich Große und die zweite ins aktual unendlich Kleine.'."\n".
                    'Beide definieren \\term{s} jedoch auf etwas unterschiedliche Weise:'."\n"))),
                  array( 'text', array( text => array(
                  '\condb{Definition von \lm{ \s } über den Wiederholungsrhythmus der natürlichen Zahlen} \\\\'."\n"))),
                      
                  array( 'figure',
                    array_merge( $SupNum_g_figure_ary_sGeomKonstruktWiederholung, array( name => 'OM:SupNum:Struktur-Geometrie:Vortext:Fig-sGeomKonstruktWiederholung'))),
                      
                  array( 'text', array( text => array(
                    'In der geometrischen Konstruktion der rhythmischen Wiederholung bleiben die Begrenzungspunkte der Teilstrecken immer im selben Abstand von Eins.'."\n".
                    'Am jeweiligen Ende der Punktreihe werden stets die nötigen Punkte angehängt, um den Rhythmus der nächsten natürlichen Zahl zu integrieren,'."\n".
                    'wenn er noch nicht enthalten sein sollte (siehe \jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktWiederholung}).'."\n"))),
                  array( 'text', array( text => array(
                  '\condb{Definition von \lm{ \s^{-1} } über den Regen der natürlichen Zahlen} \\\\'."\n".
                    ''))),
                      
                  array( 'figure',
                    array_merge( $SupNum_g_figure_ary_sGeomKonstruktTeilung, array( name => 'OM:SupNum:Struktur-Geometrie:Vortext:Fig-sGeomKonstruktTeilung'))),
                      
                  array( 'text', array( text => array(
                    'In der Konstruktion der rhythmischen Zerlegung werden zwischen den vorhandenen Begrenzungspunkte der Teilstrecken immer neue Punkte hinzugefügt, um den Rhythmus'."\n".
                    'der hinzukommenden natürlichen Zahl in einem gleichmäßigen Rhythmus zu integrieren, falls er noch nicht vorhanden ist (siehe \jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktTeilung}).'."\n",
                      'Dies ist, als wenn ein Regen von natürlichen Zahlen auf der Strecke der Eins hernieder gehen würde.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{XXX Explizite Anschauung des Primzahlprodukts von \\term{s}} \\\\'."\n".
                    'Für das Primzahlprodukt von \\term{s} ergibt sich in beiden Fällen eine mit unendlich mal unendlich vielen Primzahlen gefüllte Fläche der folgenden Art:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  \prod_{\forall n \in \mathbb{N}} *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-fuer-alle-in-N-Primzahl-Prod}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{1} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{2} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{3} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{n \in \mathbb{N}} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)^{\omega}  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Prod-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Struktur-Geometrie:Vortext:XXX', text =>
                      
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
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Struktur-Geometrie:GanzeSZ'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • XXX  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Struktur-Geometrie:XXX',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Struktur-Geometrie', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    '\\bold{XXX}',
                    '• XXX',
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
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.Z', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{S}_{\Z}  :=  \left\{ x ~\middle|~ \left( \forall d \in \mathbb{N} \right) \left( \forall q_{d} \in \mathbb{Q} \setminus \{0\} \right) \left( \forall q_{i} \in \mathbb{Q} \right) \left( \forall z \in \mathbb{Z} \right) \\\ \qquad\qquad\quad \left[ \begin{cases} z  &  \text{ falls } d = 0  \\\\  q_{d} s^{d} + \sum_{( \forall i \in \mathbb{Z})[d > i > 0]} q_{i} s^{i} + z  &  \text{ falls } d > 0  \end{cases} \right] \right\}  }'),
                    ))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Vortext:XXX', text =>
                      
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
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Struktur-Geometrie:NatuerlicheSZ'),
                    )),
              )
          ); */ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
