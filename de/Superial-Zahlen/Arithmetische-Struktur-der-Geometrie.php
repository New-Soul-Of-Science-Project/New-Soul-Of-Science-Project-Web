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
                    'Wir können uns zwei Punkte denken, die nicht aneinander – also nicht aufeinander – liegen und so eine Richtung vorgeben.'."\n".
                    'Nun beginnen wir ein Netz von Punkten zu „weben“, indem wir zwischen beide'."\n".
                    'Punkte, genau in der Mitte, einen weiteren Punkt legen und haben nun drei Punkte in der selben Richtung auf einer Linie.'."\n",
                      'So fahren wir fort und legen jeweils zwischen zwei benachbarte Punkte einen weiteren'."\n".
                    'in die Mitte.'."\n".
                    'Hierdurch wird das Gewebe zwischen unseren Ausgangspunkten immer dichter gewebt und'."\n".
                    'wir spannen ein Netz von Punkten auf, wodurch wir immer mehr Punkte auf einer Strecke erhalten.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Selbstähnlichkeit} \\\\'."\n".
                    'Weil wir immer wieder das gleiche tun, ergibt sich eine fraktale, also selbstähnliche, Netzstruktur.'."\n",
                      'Die Anzahl \lm{ n }, die Dichte \lm{ \rho } und der Abstand \lm{ d } der Punkte auf Strecke berechnen sich mit der Fraktalebene \lm{ x } zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EinEntw', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  2^{x} + 1  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ 2^{x} }  =  2^{-x}  }'),
                      array( display => 'on',  latex => '{  \rho  =  2^{x}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      'Nun können wir zwei solcher Strecken in der Richtung der Ausgangspunkte so aneinander'."\n".
                    'legen, dass der Endpunkt der ersten Strecke auf dem Anfangspunkt der zweiten liegt.'."\n".
                    'Nehmen wir diese doppelte Strecke und skalieren sie probehalber zwischen die erste Strecke,'."\n".
                    'dann liegen alle Punkte aufeinander.'."\n".
                    'Beide Punktmengen sind von der Struktur her gleich, weil durch das halbieren und verdoppeln'."\n".
                    'in beiden die reinen Potenzen von Zwei stecken.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Erweiterung} \\\\'."\n".
                    'Verlängern wir die doppelte Strecke weiter auf die dreifache und skalieren diese'."\n".
                    'wieder probehalber auf die erste Strecke, dann liegen nur die Anfangs- und Endpunkte aufeinander.'."\n".
                    'Die restlichen Punkte decken sich nicht.'."\n",
                      'Wir haben die nächste Primzahl nach der Zwei entdeckt, die ein neues Netzwerk oder Raster erzeugt.'."\n".
                    'Auch dieses ist wieder in Bezug auf die Potenzen der Drei selbstähnlich.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Das komplette Netzwerk aller ganzen Primzahlpotenzen aufspannen} \\\\'."\n".
                    'Dieses Vorgehen können wir nun immer weiter treiben:'."\n".
                    'Strecke wieder um Eins verlängern und durch skalieren überprüfen, ob wir eine neue Primzahl gefunden haben.'."\n".
                    'Dann auch von der ersten Strecke an in die andere Richtung ins Negative immer weiter verlängern.'."\n",
                      'In der negativen Richtung erhalten wir die selben Primzahlen.'."\n".
                    'Die Struktur des Netzes verändert sich nicht mehr.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:XXX', text =>
                                           
                'Immer noch Lückenhaft', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Das geometrische Netzgewebe besteht nun aus den Abständen der Punkte, wobei letzte die Knoten oder Stützen des Gewebes sind.'."\n".
                    'Es ist also klar, dass dieses Gewebe im Hinblick auf seine Stützpunkte immer Lücken haben wird, selbst dann, wenn die Lücken aktual unendlich klein werden.'."\n".
                    'Wir können aber vielleicht davon sprechen, dass ein solches Gewebe dann im Endlichen keine Lücken mehr hat.'."\n",
                      'XXX Nehmen wir diese Teilungen der Strecken nur endlich oft vor,'."\n".
                    'dann haben wir immer noch Lücken endlicher Größe.'."\n",
                      'Wie können wir aber die Lücken schließen?'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:XXX', text =>
                                           
                'Übergang ins Unendliche', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Erst, wenn wir die Teilung der Strecken bis ins Unendliche treiben,'."\n".
                    'bleiben keine endlichen Lücken übrig.'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EinEntw', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  2^{\omega} + 1  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ 2^{\omega} }  =  2^{-\omega}  }'),
                      array( display => 'on',  latex => '{  \rho  =  2^{\omega}  }'),
                    ))),
                  array( 'text', array( text => array(
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:XXX', text =>
                                           
                'Irrationale algebraische Zahlen, wie die zweite Wurzel aus Zwei – \lm{ \sqrt{2} }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.EinEntw', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  2^{ \frac{ 1 }{ 2 } } + 1  }'),
                      array( display => 'on',  latex => '{  d  =  \frac{ 1 }{ 2^{ \frac{ 1 }{ 2 } } }  =  2^{ -\frac{ 1 }{ 2 } }   }'),
                      array( display => 'on',  latex => '{  \rho  =  2^{ \frac{ 1 }{ 2 } }  }'),
                    ))),
                  array( 'text', array( text => array(
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
