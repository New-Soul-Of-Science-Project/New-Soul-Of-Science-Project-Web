<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:VRT:Einleitung'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:VRT:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                      '(\\bold{Äquivalenz von träger- und schwerer Masse aus Perspektive der Spieler und Gegenspieler eines Regelprozesses, z.B. eines Sonnensystems:})',
                      '(• Regelprozesse zeigen sich in Newtons Actio gleich Reactio. Denn hierin kommt das grundlegende Konzept von Spieler und Gegenspieler, Agonist und Antagonist, zum Ausdruck. In Bezug auf das Beispiel unseres Sonnensystems und die stabile Bahn der Erde um die Sonne gibt es auch Actio und Reactio. Die Gravitation spielt gegen die Fliehkraft, also gegen die Trägheit, wie alle Wechselwirkungen, die eine Bewegung ändern. Aus Sicht eines Regelprozesses ist die noch einmal gründlich zu analysieren. Hier spielt irgendwie die Kraft gegen die Zeit, die es braucht, eine Wirkung zu entfalten. Was wiederum mit der Zeit die es braucht zusammenhängt, um, aus Sicht der FrQFT, die Wirkungsquanten-Struktur der Erde durch das Gravitationspotenzial der Sonne so umzubauen, dass die Erde ihre Bewegungsrichtung ändert.)',
                      '(\\bold{Historischer Bezug:})',
                      '(• Elektronen \\quote{als permanente Verwirbelungen im Äther}\\footnote{\\cite{Heilbron:DieQuantisierungDesAtoms2013}.} hatte schon Joseph Larmor im Jahr 1900 in seiner wissenschaftlichen Abhandlung "Aether und Matter".\\footnote{Vgl. \\cite{Heilbron:DieQuantisierungDesAtoms2013}.}',
                    ))),

                  /*array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXXMotivation', text =>
                                           
                'Motivation')),*/
                  /*array( 'text', array( text => array(
                    '\\color{*Bearb}{(Anders formulieren! Einer der Gründe ist die Äquivalenz zwischen der SRT und der LÄT. Es ist mir wichtig beide Perspektiven zu versöhnen, indem man ihre jeweilige Berechtigung herausarbeitet und so das die Entwicklung der Physik behindernde Kriegbeil begräbt. Der Anstoß ist allerdings die FrQFT. Sind FrQFT und ART Äquivalent? So direkt und einfach nicht unbedingt, wie man am Feuerwand-Problem eines Schwarzen Lochs erkennt. Wie ist der Sinn und Zweck der VRT also genau zu formulieren? Wie ist die VRT sinnvoll zu formulieren, um diesen Zweck zu erfüllen? Muss die ART fraktal von den Wirkungsquanten und Mikro-WQ her formuliert werden, um die Äquivalenz mit der FrQFT herzustellen? Klar ist, dass die gravitative Wirkung des Vakuums einzubeziehen ist. Eine Möglichkeit ist vielleicht: Die SRT ist ein lokaler begrenzter Teil der ART. Unter Masseneinfluss verliert die SRT auf größeren Distanzen ihre Gültigkeit. Könnte die ART ein bestimmter Teil der FrQFT sein? Dann würde die ART unter bestimmten Bedingungen im Rahmen der FrQFT gelten.)} \\\\'."\n".
                    '\\color{*Bearb}{(• Eine Frage der Perspektive. \\\\ • Die Situation soll befriedet werden. \\\\ • Einstein hat eine geniale Vereinfachung vorgenommen und die Betrachtung des Mediums des Lichts unnötig gemacht. Mit dieser Vereinfachung, die ihre sehr erkenntnistheoretische und praktische Berechtigung hat, kann man aber scheinbar nicht die Physik vereinheitlichen.)} \\\\'."\n"))),*/
                      
                  array( 'text', array( text => array(
                    'Auf der \\jump{OM:VRT:Home}{Startseite} habe ich mich bereits intensiv mit meiner Motivation beschäftigt, die der Entwicklung der'."\n".
                    'Vereinheitlichten Relativitätstheorie zugrunde liegt.'."\n".
                    'Ich habe dies bereits dort getan, weil mein Vorhaben und Vorgehen in Fachkreisen teilweise auf deutliche Widerstände stoßen könnte und ich dem Leser ermöglichen wollte,'."\n".
                    'gleich zu Beginn meine Motivation nachzuvollziehen und völliges Unverständnis zu vermeiden.'."\n",
                      //'Hier kurz soviel zu meiner Motivation:'."\n",
                      'Denn in meinen Augen sind wir in der heutigen Physik in einem Dilemma:'."\n".
                    'Wir können auf die wertvollen Eigenschaften der Relativitätstheorie nicht verzichten.'."\n".
                    'Denn sie erlaubt uns das Betreiben von Physik, ohne ein Medium des Lichts, dass wir aus prinzipiellen Gründen kaum messen können.\\footnote{\\const{FrQFT_g_footnote_text_MediumMessenLGEinZweiWeg}}'."\n".
                    'Wir benötigen aber ein Medium des Lichts und die Definition von Gleichzeitigkeit, um die Allgemeine Relativitätstheorie\\footnote{\\const{FrQFT_g_footnote_text_ART}} mit der'."\n".
                    'Quantenfeldtheorie\\footnote{\\const{FrQFT_g_footnote_text_QFT}} vereinheitlichen zu können.\\footnote[*Bearb]{Das ›Problem der Gleichzeitigkeit‹: \\\\ \\const{FrQFT_g_footnote_text_ProblemDerGleichzeit_Bearb}}'."\n".
                    'Wir benötigen Gleichzeitigkeit unter anderem deshalb in einer neuen, vereinheitlichten Theorie der Physik, weil die Auflösung der Verschränkungen'."\n".
                    'von weit voneinander entfernten Elementarteilchen in der Quantenphysik gleichzeitig ablaufen muss.\\footnote[*Bearb]{\\const{FrQFT_g_footnote_text_QFTGleichzeitVerschr_Bearb}}'."\n",
                    //'Dies kommt unter anderem, weil wir ohne Gleichzeitigkeit nicht die Verschränkungen\\color{*Bearb}{(Verweis)} der Quantenphysik\\color{*Bearb}{(Verweis)} zu erklären in der Lage sind.\\color{*Bearb}{(Verweis)}'."\n",
                      'Ich habe ein implizites Teilchenmodell in der Relativitätstheorie entdeckt, das durch eine von Albert Einstein vorgenommene Vereinfachung'."\n".
                    'bisher weitgehend verborgen blieb und daher kaum Beachtung fand.'."\n".
                    'Dieses möchte ich nachfolgend dazu nutzen, das Verborgene der Relativitätstheorie tiefer auszuleuchten.'."\n",
                      'Die Perspektive der Minkowski-Raumzeit\\footnote{Vgl. \\cite{wiki:Minkowski-Raum:2018}.} der Relativitätstheorie wiederum nimmt eine weitreichende und faszinierende Verallgemeinerung der Konstanz jeglicher Bewegung vor,'."\n".
                    'einschließlich der Bewegung der materiellen Objekte, die unter anderem mit mathematischer Eleganz begründet wird.\\footnote{Vgl. \\cite{wiki:Minkowski-Raum:2018}.}'."\n".
                    'Den Realitätsbezug dieser Verallgemeinerung möchte ich aufgrund des von mir entdeckten Teilchenmodells bezweifeln.'."\n"))),
                  array( 'text', array( text => array(
                    'Nach meiner Meinung brauchen wir aus diesen und einigen weiteren Gründen einen Weg, die Relativitätstheorie mit einem Medium des Lichts zu versöhnen;'."\n".
                    'eine Vereinheitlichung von beidem zu erreichen!'."\n",
                      'Ich beschäftige mich daher auf dieser Seite mit der Analyse, einer konstruktiven Kritik und der nötigen Weiterentwicklung der Relativitätstheorie.'."\n".
                    'Ihre Entstehungsgeschichte, bestimmte Aspekte des Denkens und Handelns Albert Einsteins und seiner Nachfolger, geben uns die Möglichkeit,'."\n".
                    'die Relativitätstheorie für unser Vorhaben genauer zu verstehen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Die Konstanz der Lichtgeschwindigkeit für jeden Beobachter erübrigt ein Medium des Lichts')),
                  array( 'text', array( text => array(
                    'Einsteins generelle Annahme der Konstanz der Lichtgeschwindigkeit aus Sicht eines jeden Beobachters macht ein Medium,'."\n".
                    'in dem sich das Licht mit konstanter Geschwindigkeit als Welle ausbreitet, unnötig.'."\n".
                    'Das ist wunderbar, weil wir aus prinzipiellen Gründen kaum in der Lage scheinen unsere Bewegungsgeschwindigkeit in einem Medium des Lichts zu messen.'."\n".
                    '\\italic{Damit ist Einstein ein genialer Coup gelungen!}'."\n",
                      'Seine Annahme der Konstanz der Lichtgeschwindigkeit aus Sicht eines jeden Beobachters gründete Einstein auf dem Ergebnis des'."\n".
                    'Michelson-Morley-Experiments\\color{*Bearb}{(Link)}\\footnote{\\const{FrQFT_g_footnote_text_MichelsonExp}}.'."\n".
                    'In diesem Experiment konnte kein unterschied der Lichtgeschwindigkeit im Raum gemessen werden, ganz egal, wie sich der Punkt auf der Erdoberfläche,'."\n".
                    'an dem das Experiment aufgebaut war, durch den Raum unseres Sonnensystems bewegte.'."\n".
                    'Und dessen Bewegungsgeschwindigkeit musste in einem möglichen Medium des Lichts variieren, weil sich unsere Bahn um die Sonne und die Rotation der Erdoberfläche'."\n".
                    'im Laufe der Zeit unterschiedlich kombinieren.'."\n",
                      'Heute wissen wir, dass das Ergebnis des Experiments auch daher kommen kann, dass wir aus prinzipiellen Gründen nur die Zweiweg-Lichtgeschwindigkeit messen können'."\n".
                    'und die Messung der Einweg-Lichtgeschwindigkeit bisher kaum möglich scheint.\\color{*Bearb}{(Verweis?)}'."\n".
                    'Das Ergebnis des Michelson-Morley-Experiments bedeutet also nicht, dass es kein Medium des Lichts gibt, sondern nur, dass dieses Medium und die in ihm'."\n".
                    'eingebettete Materie besondere Eigenschaften haben müssen, so wie beispielsweise in der Lorentzschen Äthertheorie.'."\n".
                    'Und das implizite Teilchenmodell, auf das ich gleich zu sprechen komme, hat genau die erforderlichen Eigenschaften.'."\n"))),
                  array( 'text', array( text => array(
                    'Den Preis, den wir zur Erlangung der Perspektive der Relativitätstheorie zahlen – der Erübrigung des Wissens um ein Medium des Lichts – ist der Verzicht'."\n".
                    'auf die Möglichkeit der Definition einer Gleichzeitigkeit von Ereignissen.\\footnote{\\const{FrQFT_g_footnote_text_RTKeinGleichzeit}}'."\n".
                    'Wollen wir die Relativitätstheorie jedoch später mit der Quantenphysik vereinheitlichen, dann brauchen wir eine Definition von Gleichzeitigkeit,'."\n".
                    'zum Beispiel um das Phänomen der Verschränkung in der zukünftigen vereinheitlichten Theorie der Physik beschreiben zu können.'."\n".
                    'Denn die Auflösung einer Verschränkung zwischen zwei weit entfernten Teilchen muss nach der Quantenphysik \\italic{wirklich gleichzeitig} stattfinden.'."\n",
                      'Um zu analysieren, wie wir die Perspektive der Relativitätstheorie mit einer Perspektive, die ein Medium zur Grundlage hat, vereinheitlichen können,'."\n".
                    'möchte ich im Folgenden die Entstehungsgeschichte und die Eigenschaften der Relativitätstheorie weiter beleuchten.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Einsteins geniale Lichtuhr')),
                  array( 'text', array( text => array(
                    'Das \\jump{OM:VRT:Vereinheitlichung-RT-LET:Philosophie-der-Lichtuhr}{Gedankenexperiment der Lichtuhr}\\footnote{\\const{FrQFT_g_footnote_text_Lichtuhr}}, das Einstein zur Veranschaulichung der räumlichen und zeitlichen Eigenschaften von bewegter Materie konstruiert hat, ist mehr als eine Verbildlichung.'."\n".
                    'Denn er überträgt die räumlichen und zeitlichen Eigenschaften der Lichtuhr bei der Formulierung seiner Theorie ohne Wenn und Aber auf sämtliche Materie.'."\n",
                      'Damit stellt die Lichtuhr, naturphilosophisch gesehen, eine geometrische Veranschaulichung wesentlicher struktureller Eigenschaften der Materie dar, die auf der Konstanz der Lichtgeschwindigkeit im Raum'."\n".
                    'und auf der zyklischen Bewegung des Lichts zwischen den beiden Spiegeln der Lichtuhr beruhen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Die Relativitätstheorie enthält ein implizites Teilchenmodell')),
                  array( 'text', array( text => array(
                    'Diese wesentlichen strukturellen Eigenschaften sind also als Grundlage der Relativitätstheorie zu verstehen und müssen daher aus natur- und wissenschaftsphilosophischer'."\n".
                    'Perspektive als ein implizites Teilchenmodell angesehen werden.'."\n".
                    'In diesem Modell ist die Struktur der Materie demnach aus Bestandteilen gebildet, die, in Bezug auf die Lichtuhr, dem Licht in ihren wesentlichen Bewegungseigenschaften gleich sind:'."\n",
                      'Ihre lichtähnlichen Bestandteile sind in der Struktur der Materie also so gefangen, dass die Materie im Prinzip wie aus lauter Lichtuhren aufgebaut funktioniert.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Das Teilchenmodell hat weitreichende Konsequenzen')),
                  array( 'text', array( text => array(
                    'Die Entdeckung oder Identifikation des impliziten Teilchenmodells der Relativitätstheorie hat nicht zu unterschätzende, weitreichende Konsequenzen:'."\n",
                      'Bei der konkreten Formulierung der Theorie reduzierte Einstein die Struktur jedes materiellen Objekts auf die vereinfachte Punktform.'."\n".
                    'Als Konsequenz dieser Reduktion verschwindet die für die Relativitätstheorie wesentliche dynamische Struktur der Lichtuhr, mit ihrer inneren Lichtbewegung,'."\n".
                    'in der hypothetischen Punktform der Materie.'."\n".
                    'Dadurch wird das explizite Teilchenmodell, das dem Bild der Lichtuhr innewohnt, verborgen und auf ein implizites, unsichtbares Teilchenmodell reduziert.'."\n",
                    'Formal, also mathematisch, ist dies erst einmal kein Problem und diese Vereinfachung durchaus zulässig und eben auch sehr praktisch.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Die Vereinfachung hat aus der Perspektive der Minkowski-Raumzeit eine imaginäre Zeit zur Folge')),
                  array( 'text', array( text => array(
                    'Der auf diese Weise verborgene, quasi mit Null multiplizierte, innere Anteil der konstanten Lichtgeschwindigkeit in der zum Punkt geschrumpften Lichtuhr in jedem materiellen Objekt,'."\n".
                    'kommt aus Perspektive der vierdimensionalen Minkowski-Raumzeit als die imaginäre Zeit der Relativitätstheorie mathematisch wieder zum Vorschein.'."\n".
                    'Das kommt, weil die Perspektive der vierdimensionalen Raumzeit zusätzlich annimmt, dass sich der Ortspunkt jedes matriellen Objekts in der Minkowski-Raumzeit immer mit'."\n".
                    'konstanter Lichtgeschwindigkeit bewegt.\\footnote{Der Betrag, also die Länge, des Geschwindigkeitsvektors eines materiellen Objekts ist immer die Lichtgeschwindigkeitskonstante: \\\\ Ruht ein materielles Objekt zum Beobachter im dreidimensionalen Raum, so hat es in der der Zeit entsprechenden, vierten und imaginären Dimension der Minkowski-Raumzeit die höchst mögliche Geschwindigkeit. Die Zeit des Objekts läuft so am schnellsten. Bewegt es sich zum Beobachter, so reduziert sich seine Geschwindigkeit in der zeitlichen Dimension entsprechend.}'."\n",
                      'Die durch die Vereinfachung eines punktförmnigen Teilchens verlorene Imformation der „Lichtbewegung“ in der Materie, erscheint aber nur teilweise in der imaginären Zeit.'."\n".
                    'Verloren ist immer noch die Information über die Frequenz der „Lichtschwingung“ in der Lichtuhr der Materie.'."\n".
                    'Es geht also etwas von der Struktur verloren, aus der die Eigenschaft einer bestimmten Schwingungsfrequenz der Materie hervorgeht.'."\n"))),
                  array( 'text', array( text => array(
                    'Die Minkowski-Raumzeit ist eine Ergänzung der Speziellen Relativitätstheorie, die nicht unbedingt notwendig ist.'."\n".
                    'Sie hat unter anderem den großen Vorteil, dass sie die absolute Gültigkeit der Konstanz der Lichtgeschwindigkeit für jeden Beobachter von der Bewegung des Lichts auch auf die Bewegung aller materiellen Objekte'."\n".
                    'in dieser vierdimensionalen Raumzeit verallgemeinert.'."\n".
                    '\\color{*Bearb}{(Formale Ähnlichkeit mit dem Hamilton-Prinzip und dem Nöther-Theorem?)}'."\n",
                      'Die Minkowski-Raumzeit stellt also eine Verallgemeinerung der Konstanz der Lichtgeschwindigkeit und eine weitere mathematische Vereinfachung dar.'."\n".
                    'Dadurch, dass sie einen Teil der verlorenen Information des impliziten Teilchenmodells wieder „hervorzaubert“, jedoch nicht deren Struktur,'."\n".
                    'verschleiert diese Perspektive das implizite Teilchenmodell zusätzlich.'."\n",
                      'Denn die zyklische Bewegung des Lichts in der Lichtuhr, die in der Punktform der Materie verborgen war, erscheint nun als'."\n".
                    'geradlinige Bewegung in der neuen Dimension der imaginären Zeit.'."\n".
                    'Die Minkowski-Raumzeit heilt so also die Vereinfachung Einsteins nicht vollständig.'."\n".
                    'Sie erzeugt eine mathematisch physikalische Eleganz, die über die eventuell problematische Vereinfachung der Punktform hinwegtäuschen kann.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Die Wiederherstellung von Einsteins Ansatz der Lichtuhr \\\\ \\color{*TitleAdd}{– ein explizites Teilchenmodell}')),
                  array( 'text', array( text => array(
                    'Um den Ansatz Einsteins aus naturphilosophischer Perspektive wieder vollständig herzustellen, müssen wir also zum'."\n".
                    'nicht auf die Punktform reduzierten Prinzip der Lichtuhr zurückkehren!'."\n".
                    'Wir müssen davon ausgehen, dass das für die Relativitätstheorie wesentliche Prinzip der Lichtuhr einen Realitätsbezug hat:'."\n",
                      'Das bedeutet, wir müssen tatsächlich davon ausgehen, das materielle Objekte das entscheidende Prinzip der dynamischen Struktur der Lichtuhr in sich tragen.'."\n".
                    'Das hierfür entscheidende Prinzip bedeutet, dass etwas sich mit Lichtgeschwindigkeit bewegendes in einer Struktur'."\n".
                    'in zyklischer Bewegung gefangen ist.'."\n".
                    'Diese Struktur muss sich in ihrer Bewegungsrichtung entsprechend der Relativitätstheorie verkürzen, während sie sich senkrecht dazu nicht verändert.\\color{*Bearb}{(Link, Verweis)}'."\n",
                      'In der Speziellen Relativitätstheorie gilt die konstante Lichtgeschwindigkeit und die Verkürzung der zu ihm bewegten Materie aus Sicht jeden Beoachters.\\footnote{\\const{FrQFT_g_footnote_text_LaengenkontrBew}}'."\n".
                    'Die Einweg-Lichtgeschwindigkeit wird generell als konstant angenommen.'."\n",
                      'In einer Mediumtheorie ist die Einweg-Lichtgeschwindigkeit im Medium konstant und nur die Zweiweg-Lichtgeschwindigkeit'."\n".
                    'auch für alle im Medium bewegten Beobachter konstant.\\footnote{\\const{FrQFT_g_footnote_text_LGEinZweiWeg}}'."\n".
                    'Die Verkürzung der Materie in Bewegungsrichtung gilt wie in der Speziellen Relativitätstheorie, aber nur aus Sicht eines im Medium ruhenden Beobachters'."\n".
                    'für alle im Medium bewegten Objekte und Beoachter.'."\n".
                    'Diese Verkürzung ist strukturell gesehen, relativ zum ruhenden Beobachter, also zur Metrik des Mediums, realer Natur.'."\n".
                    'Die konstante Lichtgeschwindigkeit im Medium ist die innere Uhr des Mediums, die für jeden Beobachter gleich läuft.'."\n".
                    'Diese \\italic{Normaluhr} definiert daher Gleichzeitigkeit.'."\n",
                      'Die Vereinfachung der Punktform der Teilchen und die Verallgemeinerung der Minkowski-Raumzeit können nur insoweit angewendet werden, soweit wir uns bewusst sind,'."\n".
                    'dass sie nicht die strukturelle Realität widerspiegeln und deren Anwendung die Vereinheitlichung der Physik verhindert.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Ein Schritt in Richtung Vereinheitlichung der Physik \\\\ \\color{*TitleAdd}{– Konkretisierung des Teilchenmodells durch Bezüge zur Quantenphysik}')),
                  /*array( 'notice', array( Display => 'showContent', text => array(
                      '(• Warum diese Konkretisierung hier?)',
                      '(– Um zu zeigen welche Bezüge sich daraus automatisch zur Quantenphysik und damit zu Vereinheitlichung der Physik ergeben?!)',
                    ))),*/
                  array( 'text', array( Shape => 'italic', text => array(
                        'Die nachfolgende, erste Entwicklungsstufe des Teilchenmodells der Vereinheitlichten Relativitätstheorie ist noch nicht vollständig realistisch'."\n".
                        'in Bezug auf die Beobachtungen der Quantenphysik.'."\n".
                        'Ein den Beobachtungen entsprechendes Teilchenmodell ist etwas komplexer und ergibt sich erst im späteren Verlauf der Entwicklung in der \\jump{OM:FrQFT:Home}{fraktalen Quanten-Fluss-Theorie}.'."\n".
                        'Daher bitte ich den Leser sich trotzdem darauf einzulassen, die Entwicklung Schritt für Schritt nachzuvollziehen.'."\n"),
                        addtext => '')),
                  array( 'text', array( text => array(
                    'Das jetzt explizite Teilchenmodell erlaubt uns Bezüge zur Quantenphysik, die uns weitere Hinweise zur Struktur der materiellen Objekte liefern:'."\n",
                      'Die kleinsten materiellen Objekte der Quantenphysik sind die Elementarteilchen.'."\n".
                    'Wir können daraus schließen, dass es sich bei den materiellen Objekten des hier entwickelten Teilchenmodells, also bei unseren Lichtuhren,'."\n".
                    'um die Elementarteilchen der Materie handeln muss.'."\n",
                      'Durch das Prinzip der Lichtuhr ist strukturell eine zyklische Bewegung im Teilchenmodell der Vereinheitlichten Relativitätstheorie implementiert.'."\n".
                    'Aus der Quantenphysik ist uns ähnliches als Spin bekannt, ein Drehimpuls, den alle materiellen Elementarteilchen in sich tragen.'."\n".
                    'Aufgrund der Punktform der Elementarteilchen der heutigen Quantenphysik wurde bisher davon ausgegangen, dass der Spin keine Entsprechung in einer realen Struktur hat.'."\n".
                    'Diese Entsprechung finden wir nun im zyklischen Prinzip des neuen Teilchenmodells wieder.'."\n",
                      'Ein Drehimpuls setzt eine Rotation voraus.'."\n".
                    'Wir erkennen daran, dass es sich strukturell nicht um die Reflexion lichtähnlicher Strukturen zwischen zwei Spiegeln handelt, sondern um eine Rotation'."\n".
                    'lichtähnlicher Strukturen in materiellen Elementarteilchen.'."\n".
                    'Auch wird sichtbar, dass Elementarteilchen die Eigenschaft einer Schwingung und damit eine Frequenz in sich tragen müssen.'."\n",
                      'Die Struktur des Teilchenmodells werden wir später noch weiter konkretisieren, wenn wir uns mit der \\jump{OM:FrQFT:NeuePhysik:Problem-der-Zeit}{Lösung des ›Problems der Zeit‹}'."\n".
                    'in der Quanten-Fluss-Theorie beschäftigen.'."\n"))),
                  array( 'text', array( text => array(
                    'Weitere Beobachtungen der Quantenphysik unterstützen den Realitätsbezug dieser Sichtweise:'."\n".
                    'Dazu, dass lichtähnliche Strukturen in Elementarteilchen vorhanden sind, passt sehr gut die Entstehung von Teilchen-Antiteilchen-Paaren durch Gammastrahlung, die Paarbildung.\\footnote{\\const{FrQFT_g_footnote_text_Paarbildung}}'."\n".
                    'Sowie auch die entsprechende Zerstrahlung von Teilchen-Antiteilchen-Paaren in Gammastrahlung, die Annihilation.\\footnote{\\const{FrQFT_g_footnote_text_Annihilation}}'."\n"))),
                      
                  // !!!: Die Textfarbe ist jetzt global festgelegt und kann hier im Einzelnen überall heraugenommen werden. Siehe Class "tools-class-fade-in-area-div-show-content" und "tools-class-fade-in-area-div-hide-content".
                  array( 'fade-in-area', array( Display => 'hideContent',
                    Title => '\\color{*CloserDesc}{Bezug zur Quanten-Fluss-Theorie: Das strukturgebende Ordnungsprinzip – das Existenzprinzip und der Djet-Neheh-Dualismus}', ParagraphList => array(
                  array( 'text', array( TextColor => '*CloserDesc', text => array(
                    'Der Lichtuhr liegt ein strukturgebendes, dynamisches Ordnungsprinzip zu grunde, das ich \\jump{OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip}{Existenzprinzip} nenne.'."\n".
                    'Das Existenzprinzip basiert auf dem \\jump{OM:VRT:Einleitung:Djet-Neheh-Dualismus}{Djet-Neheh-Dualismus}.'."\n".
                    'Der Djet-Neheh-Dualismus formuliert die Beziehung von zwei sich ergänzenden und geometrisch orthogonalen, also senkrecht zueinander stehenden, Aspekten der Zeit.'."\n".
                    'Dabei steht Djet für die unabänderliche, ewige Zeit und Neheh steht für die sich wiederholende, zyklische Zeit.'."\n",
                      'Physikalisch gesehen steht Djet somit für die unabänderliche Veränderung eines Systems, also für die geradlinige Bewegung seiner Bestandteile.'."\n".
                    'Nehe steht dann für die zyklische Veränderung eines Systems, die keine grundsätzliche Veränderung ist, also für die Rotationsbewegung seiner Bestandteile um das Zentrum des Systems.'."\n",
                      'Djet steht für Fortentwicklung auf Basis von Neheh, der Stabilität.'."\n".
                    'Neheh steht für Stabilität auf Basis von Djet, der Fortentwicklung.'."\n".
                    'Es ist also ein fraktales Yin und Yang Prinzip.'."\n",
                      'In der Relativitätstheorie finden wir Djet in der Lichtbewegung im Allgemeinen.'."\n".
                    'Neheh finden wir in der Lichtuhr der Relativitätstheorie, die aus der freien Lichtbewegung eine zyklische Lichtbewegung macht.'."\n".
                    'Ich komme unten noch etwas ausführlicher darauf zurück, in welcher Form wir dieses Ordnungsprinzip noch überall in der Physik und der Natur wiederfinden.'."\n"))),
                  array( 'text', array( TextColor => '*CloserDesc', text => array(
                    'In der fraktalen Quanten-Fluss-Theorie und im \\jump{OM:SpaLeb:Home}{›Spannungsspiel des Lebens‹} sind das Existenzprinzip und der Djet-Neheh-Dualismus'."\n".
                    'in Form von Regelprozessen organisiert.'."\n".
                    'Diese Regelprozesse sind letztlich fraktale Strukturen.'."\n".
                    'Hier sind alle Regelprozesse eingeschlossen, egal ob sie biologischer Natur sind oder ob sie die Stabilität der Elementarteilchen und damit deren Existenz organisieren oder das Vakuum, sprich das Medium.'."\n".
                    'Sogar ein neuer, zentraler Prozess der Lebewesen stellt sich in dieser Perspektive heraus, der \\jump{OM:SpaLeb:Care-Prozess}{Care-Prozess}.'."\n".
                    'Damit ist das Leben ein von vornherein dazugehörender Teil dieser neuen Physik'."\n"))),
                    ))),
                      
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Die Spezielle Relativitätstheorie funktioniert sehr ähnlich wie eine Medium-Theorie des Lichts')),
                  array( 'text', array( text => array(
                    'Vergleichen wir die Spezielle Relativitätstheorie mit einer Mediumtheorie, dann scheint es so, als würde jeder Beobachter in ihr quasi als in einem Medium des Lichts ruhend angesehen.'."\n".
                    'Das, was in einer Mediumtheorie nur für einen im Medium ruhenden Beobachter gilt, das gilt in der Speziellen Relativitätstheorie für jeden Beobachter.'."\n".
                    'Wir können also sagen, dass die Spezielle Relativitätstheorie sich so verhält, als wenn jeder Beobachter in einem Medium ruhen würde.'."\n".
                    'Einstein definiert dann aufwendiger, wie der Perspektivwechsel von einem Beobachter zum anderen mathematisch und praktisch vollzogen werden kann.'."\n",
                      'Der Perspektivwechsel geschieht so, als würde der neue Beobachter nun im Medium ruhen und der vorherige Beobachter sich jetzt entsprechend relativ zu ihm bewegen.'."\n".
                    'Bei dieser Art von Perspektivwechsel geht die Definition der Gleichzeitigkeit verloren.'."\n".
                    'Dies kommt, weil die Uhren beider Beobachter bei diesem Perspektivwechsel auf eine Weise neu synchronisiert werden müssen, bei der der vorherige Gang der Uhren verloren geht.'."\n".
                    'Diese Synchronisation heißt Einstein-Synchronisation.\\footnote{\\const{FrQFT_g_footnote_text_EinsteinSynchron}}'."\n"))),
                  array( 'text', array( text => array(
                    'Die Vereinheitlichung der Speziellen Relativitätstheorie mit jeder Mediumtheorie, also zum Beispiel der Lorentzschen Äthertheorie,'."\n".
                    'kann über den geschilderten Zusammenhang vollzogen werden.'."\n".
                    'Der Übergang von der Speziellen Relativitätstheorie zur Mediumtheorie und zurück erscheint jetzt als ein Wechsel der Perspektive auf das Geschehen.'."\n".
                    'Diese Vereinheitlichung nenne ich \\jump{OM:VRT:Vereinheitlichung-RT-LET:Spezielle-Vereinheitlichte-Relativitaetstheorie}{spezielle Vereinheitlichte Relativitätstheorie}.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Die Allgemeine Relativitätstheorie aus der neuen Sicht')),
                  array( 'text', array( text => array(
                    'Wir wenden uns jetzt der Allgemeinen Relativitätstheorie und ihrer Vereinheitlichung mit der Mediumtheorie zu.'."\n".
                    'Die Allgemeine Relativitätstheorie mit der Mediumtheorie zusammen zu bekommen erscheint im ersten Moment kaum möglich.'."\n".
                    'Und in der Tat wird es nun deutlich kniffeliger und komplexer und wir benötigen wirklich gute Intuitionen und Ideen.'."\n".
                    'Dies kommt unter anderem daher, weil Einstein bei seiner Formulierung der Allgemeinen Relativitätstheorie voll auf die vierdimensionale Minkowski-Raumzeit gesetzt hat.'."\n",
                      'Kurz erinnert …'."\n".
                    'Nach meinen vorherigen Einsichten liegt der Minkowski-Raumzeit die Vereinfachung der Lichtuhr auf punktförmige Materie zugrunde:'."\n".
                    'Dadurch, dass Einstein die Struktur der Lichtuhr zu einem Punkt schrumpfte verbarg er die innere Dynamik der Lichtuhr.'."\n".
                    'Die auf diese Weise unsichtbare Dynamik kommt in der Bewegung der punktförmigen Materie in der imaginären Zeit der vierdimensionalen Raumzeit Minkowskis wieder zum Vorschein.'."\n".
                    'Sie erscheint allerdings nicht, wie zuvor, als zyklische Bewegung, sondern als geradlinige Bewegung, bei der die zyklische Struktur verschwunden ist.'."\n",
                      'Indem Einstein auf die vierdimensionale Minkowski-Raumzeit setzte, machte er den Knoten um seine Vereinfachung der Materie auf die Punktform zu.'."\n".
                    'Denn nur so macht die Minkowski-Raumzeit Sinn und nur mit ihr erhielt er die Verallgemeinerung der Bewegung mit konstanter Lichtgeschwindigkeit aller Objekte,'."\n".
                    'die Bewegung des Lichts und die Bewegung der Materie.'."\n".
                    'Er tat dies vermutlich deshalb, weil die Minkowski-Raumzeit erst einmal als logische Perspektive auf die Relativitätstheorie nahelag und diese ihm die'."\n".
                    'mathematische Formulierung der Allgemeinen Relativitätstheorie vereinfachte.'."\n".
                    'Ohne gekrümmten Raum und gekrümmte Zeit glaubte Einstein offenbar nicht auszukommen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Gravitation, Zeit und Struktur im Medium \\\\ \\color{*TitleAdd}{– Gedankenexperiment der Doppel-Lichtuhr im Gravitationsfeld}')),
                  array( 'text', array( text => array(
                    'Wir wollen nun auf einen gekrümmten Raum verzichten und überlegen, welche Alternative sich uns bietet:'."\n",
                      'In der Allgemeinen Relativitätstheorie läuft die Zeit bei höherer Gravitation langsamer.'."\n".
                    'In einer Lichtuhr gibt es dazu zwei Möglichkeiten:'."\n".
                    'Entweder die Spiegel der Lichtuhr rücken weiter auseinander oder das Licht läuft im Raum langsamer oder beides gemeinsam.'."\n".
                    'Durch beides verringert sich der Takt der Lichtuhr, ihre Schwingungsfrequenz, die unser Maß für die vergangene Zeit ist,'."\n".
                    'wenn sich der Abstand und die Lichtgeschwindigkeit im Verhältnis zueinander verändern.'."\n"))),
                  array( 'text', array( text => array(
                    'Stellen wir uns zwei Lichtuhren einige Meter über der Erdoberfläche vor:'."\n".
                    'Ihr Licht läuft parallel zur Erdobefläche.'."\n".
                    'Sie befinden sich auf gleicher Höhe und die Rückseiten von je einem Spiegel der einen und der anderen Uhr berühren sich.'."\n",
                      'Angenomen, dass Licht liefe im Raum immer gleich schnell:'."\n".
                    'Wenn sich jetzt die Lichtuhren langsam senkrecht auf die Erdoberfläche zu bewegen und durch die zunehmende Gravitation die Uhren langsamer gehen, wie es in der'."\n".
                    'Allgemeinen Relativitätstheorie der Fall ist, dann bliebe zur Verlangsamung der Zeit nur die Möglichkeit,'."\n".
                    'dass jede Lichtuhr größer wird und sich ihre Spiegel aus ihrer Mitte heraus weiter voneinander entfernen.'."\n".
                    'Denn so hat das Licht zwischen den Spiegeln einen weiteren Weg.'."\n".
                    'Die sich mit dem Rücken berührenden Spiegel der beiden Lichtuhren müssten beginnen sich zu durchdringen!'."\n",
                    'Äquivalent müssten die Strukturen zweier Elementarteilchen oder Atome, die direkt nebeneinander liegen, auch größer werden und beginnen sich zu durchdringen,'."\n".
                    'weil sie ja im Teilchenmodell kleine Lichtuhren sein sollen.'."\n",
                      'Die aneinanderliegenden Rücken der Spiegel würden aneinander gedrückt oder die Außenbereiche von Elementarteilchen beziehungsweise Atomen würden ineinander rutschen.'."\n".
                    'Oder alternativ würden die Mittelpunkte der Lichtuhren oder der Elementarteilchen oder Atome außeinanderrücken müssen, wenn sich die Spiegel oder die Außenbereiche'."\n".
                    'der Elementarteilchen oder Atome nicht durchdringen könnten.'."\n".
                    'Der Ort, also der Schwerpunkt, der Lichtuhren, Elementarteilchen oder Atome müsste sich verändern.'."\n",
                      'Und das alles Einfach nur dadurch, dass die Uhren langsamer gehen.'."\n".
                    'Das beobachten wir nicht und es erscheint auch unsinnig.'."\n"))),
                      
                  // !!!: Die Textfarbe ist jetzt global festgelegt und kann hier im Einzelnen überall heraugenommen werden. Siehe Class "tools-class-fade-in-area-div-show-content" und "tools-class-fade-in-area-div-hide-content".
                  array( 'fade-in-area', array( Display => 'hideContent',
                     Title => '\\color{*CloserDesc}{Es gibt gravitative Scherkräfte bei Planeten und Sonnen tatsächlich}', ParagraphList => array(
                  array( 'text', array( TextColor => '*CloserDesc', text => array(
                    'Die gravitativen Scherkräfte in Objekten, wenn diese sich Planeten oder Sonnen nähern, entstehen durch die Kugelform der Himmelskörper.'."\n".
                    'Diese Scherkräfte drücken jedes materielle Objekt parallel zur Oberfläche der Himmelskörper zusammen, wenn es sich dem Zentrum der Gravitation nähert.'."\n".
                    'Dies kommt aber daher, dass Planeten und Sonnen kugelförmig sind und deshalb die Anziehung zum Zentrum hin wirkt.'."\n".
                    'Diese Scherkräfte haben nichts mit der Zunahme der Gravitation und der Verlangsamung der Zeit zu tun.'."\n",
                      'Würde die Erdoberfläche nicht gekrümmt sein und die Anziehung würde exakt senkrecht zur Erdoberfläche und damit exakt parallel verlaufen,'."\n".
                    'dann würden die Scherkräfte in den sich nähernden Objekt verschwinden.'."\n".
                    'Die Zeit würde aber immer noch bei Annäherung langsamer gehen und der oben geschilderte Effekt wäre immer noch vorhanden.'."\n"))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wenn es unrealistisch ist, dass die Zeitverlangsamung durch das Auseinandergehen der Spiegel kommt, dann bleibt nur die Möglichkeit, dass das Licht im Medium'."\n".
                    'sich langsamer zwischen den Spiegeln bewegen muss.'."\n".
                    'Dass sich der Abstand der Spiegel nicht verändert erscheint auch insofern logisch, als dass es parallel zu Erdoberfläche keine Veränderung der Gravitation,'."\n".
                    'also keinen Gradienten des Gravitationsfeldes, gibt.'."\n".
                    'Eine Veränderung des Gravitationsfelds gibt es aber senkrecht zur Erdoberfläche.'."\n".
                    'Hier wird ein struktureller Unterschied zwischen der Zeit, also der absoluten Gravitation auf der einen Seite und der Gravitationsveränderung deutlich.'."\n",
                      'Der Takt der Lichtuhr hängt vom Verhältnis des Spiegelabstands zur Lichtgeschwindigkeit ab.'."\n".
                    'Denn wird beides im gleichen Verhältnis kleiner oder größer, dann ändert sich der Takt der Lichtuhr nicht.'."\n",
                      'Es ist also die Frage, was passiert, wenn wir die Doppel-Lichtuhr so um 90° drehen, dass der Lichtweg in Richtung Erdmittelpunkt zeigt?'."\n".
                    'Dabei ist eines schon klar:'."\n".
                    'Egal wie die Lichtuhr an einem Ort ausgerichtet ist, wir beobachten, dass eine unbewegte Lichtuhr am selben Ort immer gleich schnell geht.'."\n",
                      'Also gibt die horizontal ausgerichtete Lichtuhr, die wir eben zuerst besprochen hatten, den Takt vor.'."\n".
                    'Wenn wir die Doppel-Lichtuhr nun um 90° drehen, kann sich das Verhältnis von Lichtgeschwindigkeit und Spiegelabstand nicht mehr ändern.'."\n".
                    'Lichtgeschwindigkeit und Spiegelabstand können also nur noch im gleichen Verhältnis größer oder kleiner werden.'."\n"))),
                    //  '\\color{*Bearb}{(Es ist tatsächlich so, dass in dieser Richtung, der tangentialen Richtung, keine räumlich strukturelle Änderung passiert. Wie kann das begründet werden? In dieser Richtung gibt es keinen Gravitationsgradienten. Hat es etwas damit zu tun? Warum dann in radialer Richtung eine Veränderung? Hat das etwas mit der Detektorwellenlänge zu tun? Der Betrag der Gravitation bestimmt die Zeit und diese ist nicht richtungsabhängig. Die räumliche Ausdehnung kann hingegen richtungsabhängig sein, anders als der Lauf der Zeit. Darin muss der Grund liegen.)}'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Ansatz zur Mediumtheorie der Gravitation, der Quantengravitation \\\\ \\color{*TitleAdd}{– Heisenbergsche Unschärferelation verrät Struktur der Elementarteilchen}')),
                  array( 'text', array( text => array(
                    'Eine Variation der Lichtgeschwindigkeit und des Spiegelabstands muss strukturelle Gründe haben.'."\n".
                    'Wie kann das sein?'."\n",
                      'Glücklicherweise hilft uns hierbei die Quantenphysik weiter:'."\n",
                      'Die \\jump{OM:FrQFT:HeisenbergUnschaerfe}{Abzählinterpretation der Heisenbergschen Unschärferelation} in der Quanten-Fluss-Theorie, zu der ich von Norbert Treitz angeregt wurde,\\footnote{\\const{FrQFT_g_footnote_text_HeisenbUnschaerfAbzInt}}'."\n".
                    'offenbart eine granulare, also eine körnige Struktur der Elementarteilchen.'."\n".
                    'Wir können offenbar eine Perspektive einnehmen, in der wir Einheiten des Planckschen Wirkungsquantums \\term{h} zählen, wenn wir die Energie von Elementarteilchen oder ihren Aufenthaltsort messen.'."\n".
                    'Diese granularen Objekte nenne ich in der Quanten-Fluss-Theorie daher \\jump{*Wirkungsquanten-Herlei}{Wirkungsquanten}.'."\n",
                      'Die Wirkungsquanten stellen sich als einheitliche Bestandteile der Elementarteilchen dar, die sich nur in ihrer Bewegungsrichtung unterscheiden können.'."\n".
                    'Die Heisenbergsche Unschärferelation verrät uns, dass es sich bei den Wirkungsquanten in der Zeit gezählt, also  \\term{h}\'s pro Zeit, um Energieeinheiten'."\n".
                    'handelt.'."\n".
                    'Nach der Formel \\term{E = m⋅c^^{2}}, Einsteins Äquivalenz von Masse und Energie,\\footnote{\\const{FrQFT_g_footnote_text_EinsteinAequiMasEner}} mit deren Hilfe wir die Energie in Masse umrechnen können,'."\n".
                    'sind Wirkungsquanten auch als Masseneinheiten zu verstehen.'."\n".
                    'Demnach ist die Anzahl der in einem Elementarteilchen enthaltenen Wirkungsquanten proportional zu dessen Energie und Masse.'."\n",
                      'Wir haben oben schon festgestellt, dass die Struktur der Materie-Elementarteilchen in gewisser Hinsicht rotieren muss.'."\n".
                    'Die Quanten-Fluss-Theorie stellt nun fest, dass jedes am Beobachter vorbeiziehende Wirkungsquant eines rotierenden Elementarteilchens einen winzigen „Impuls“'."\n".
                    'auf den Beobachter und alle anderen Objekte in seiner Umgebung ausübt.'."\n".
                    'Genau diese „Impulse“ werden bei einer Messung gezählt.'."\n".
                    'Und diese Zählung hat exakt den Fehler oder die Unbestimmtheit beziehungsweise die Unschärfe der Heisenbergschen Unschärferelation.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Die Quantengravitation der Quanten-Fluss-Theorie \\\\ \\color{*TitleAdd}{– Winzige „Impulse“ verlangsamen und beugen lichtähnliche Strukturen}')),
                  array( 'text', array( text => array(
                    'Und eben diese winzigen „Impulse“ sind Ursächlich für die Gravitation der Materie, für die neue \\jump{OM:FrQFT:Quantengravitation}{Quantengravitation der Elementarteilchen}'."\n".
                    'der Quanten-Fluss-Theorie.'."\n".
                    'Die winzigen „Impulse“, die eine Masse abstrahlt, beeinflussen die Bewegung der lichtähnlichen Strukturen aller Elementarteilchen, einschließlich der des Lichts selber,'."\n".
                    'also der Bewegung der Photonen.'."\n".
                    'Der Effekt ist statistischer Natur, wie Albrecht Giese in seinem Basisteilchenmodell entwickelt.\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}.}'."\n".
                    'Der Effekt verlangsamt die lichtähnlichen Strukturen aller Elementarteilchen und beugt ihre Bewegungsbahnen.'."\n",
                      'Die Beugung der Bewegungsbahnen der lichtähnlichen Strukturen, die ähnlich einer Lichtuhr in Materie-Elementarteilchen gefangen sind, führt dazu,'."\n".
                    'dass diese Elementarteilchen zur Masse hin beschleunigt, also angezogen, werden und deshalb eine gravitative Anziehung erfahren.\\footnote{\\const{FrQFT_g_footnote_text_GraviDurchLichtbeug}}'."\n".
                    'Für die Lichtgeschwindigkeit um eine Zentralmasse herum ergibt sich genau die Formel der Schwarzschildlösung der Einsteinschen Feldgleichung:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Einl.XXX', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {c}  =  {c_{\lowZero}} \cdot \Bigl( 1 - 2 \cdot \frac{G \cdot M}{{c}_{\lowZero}^{2} \cdot r} \Bigr)^{p}  }',
                                               label_name => 'OM:VRT:Einleitung:Equ-GraLGEinstein', label_text => '\\jump{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraLGEinstein}{\\name{OM:VRT:Einleitung:Equ-GraLGEinstein}}', label_incr => false,
                                               footnote => '\\const{FrQFT_g_footnote_text_ARTLgFormel}'),
                            ))),
                  array( 'text', array( text => array(
                    'Die Potenz \\term{p} hat im tangentialen Fall den Wert \\term{p = 1/2} und im radialen Fall den Wert \\term{p = 1}.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Allgemeine Relativitätstheorie und Quantenphysik kommen sich näher')),
                  array( 'text', array( text => array(
                    'Durch die Interpretation der Heisenbergschen Unschärferelation als Abzählproblem, haben wir also einen weiteren Hinweis auf die Struktur der Elementarteilchen bekommen,'."\n".
                    'nämlich auf ihre Körnigkeit aufgrund ihrer Bestandteile.'."\n",
                      'Die bis hier insgesamt entwickelte Materie-Elementarteilchen-Struktur ermöglicht es uns, deren Gravitation als Folge eines statistischen Störungseffekts zu verstehen.'."\n".
                    'Dieser Störungseffekt verlangsamt in seiner Umgebung lichtähnliche Strukturen im Medium und wirkt durch die Beugung von deren Bahn auf andere Materie-Elementarteilchen anziehend.'."\n",
                      'Die Allgemeine Relativitätstheorie und die Quantenphysik beginnen nachhaltig zu verschmelzen.'."\n".
                    'Doch wir sind mit der Vereinheitlichung der Relativitätstheorie noch nicht fertig, geschweige denn mit der Vereinheitlichung der Pysik, die auch erst in der'."\n".
                    'Fraktalen Quanten-Fluss-Theorie mit letzter Konsequenz vollzogen wird.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Die Ausdehnung der materiellen Objekte hängt von der Anisotropie der Lichtgeschwindigkeit im Medium ab')),
                  array( 'text', array( text => array(
                    'Es steht noch die oben gemachte Äußerung und die gestellte Frage im Raum:'."\n".
                    'Eine Variation der Lichtgeschwindigkeit und des Spiegelabstands muss strukturelle Gründe haben.'."\n".
                    'Wie kann das sein?'."\n",
                      'Welche strukturellen Gründe die richtungsabhängige Variation, die Anisotropie, der Lichtgeschwindigkeit in einem Medium des Lichts im Gravitationsfeld hat, dass haben wir eben beantwortet.'."\n".
                    'Doch wie hängt dies nun mit der Ausdehnung der materiellen Objekte zusammen, sprich dem Spiegelabstand der Lichtuhr?'."\n".
                    'Um dies zu verstehen ist es notwendig kurz anzuschneiden, wie materielle Objekte in der Lorentzschen Äthertheorie ihre Lorentzkontraktion erfahren,'."\n".
                    'ihre \\jump{OM:VRT:Laengenkontraktion-Bewegung}{Längenkontraktion in Bewegungsrichtung}.'."\n",
                      'Vermutlich beschäftigte sich Oliver Heaviside als erster mit der Form von elektromagnetischen Feldern von in einem Medium bewegten Ladungen.'."\n".
                    'Er und andere stellten fest, dass die Felder sich in Bewegungsrichtung kontrahieren, wenn Ladungen in einem Medium bewegt werden.\\footnote{\\const{FrQFT_g_footnote_text_LorentzKontrFelder}}'."\n".
                    'Die Ursache hierfür ist demnach, die richtungsabhängige Variation, die Anisotropie, der Lichtgeschwindigkeit der Feldausbreitung, relativ zur im Medium bewegten Ladung.'."\n".
                    'Aus einer Kugel, als vereinfachte Darstellung eines Materie-Elementarteilchens, wird durch die Bewegung ein sogenannter Heaviside-Ellipsoid.'."\n".
                    'Ein Heaviside-Ellipsoid ist, von der Seite gesehen, in Bewegungsruchtung elliptisch abgeflacht, während er von vorne gesehen ein Kreis bleibt.'."\n",
                      'Dieser Effekt hängt mit der räumlichen Ausbreitungsrichtung und Dichte der sich im Medium mit Lichtgeschwindigkeit ausbreitenden Wechselwirkungsteilchen des Elektromagnetismus'."\n".
                    'zusammen, den sogenannten virtuellen Photonen der Quantenelektrodynamik\\footnote{\\const{FrQFT_g_footnote_text_QED}}, wie Albrecht Giese herleitet.'."\n".
                    'Giese zeigt, dass so die resultierenden Felder jeglicher sich mit Lichtgeschwindigkeit im Medium bewegender Wechselwirkungsteilchen,'."\n".
                    'egal welche Wechselwirkung diese vermitteln, durch die Bewegung ihrer Ladungsquelle in Form eines \\jump{OM:VRT:Laengenkontraktion-Bewegung}{Heaviside-Ellipsoids} verzerrt werden.\\footnote{Vgl. \\cite{Giese:RelaContra2009}.}'."\n",
                      'In sehr ähnlicher Weise hat auch die unterschiedliche Lichtgeschwindigkeit der obigen Formel \\jumpname{OM:VRT:Einleitung:Equ-GraLGEinstein}, in tangentialer und radialer Richtung zur anziehenden Masse,'."\n".
                    'eine Abflachung der Felder des angezogenen Materie-Elementarteilchens in radialer Richtung auf die Distanz \\term{d} zum Heaviside-Ellipsoid zur Folge, wie Giese formuliert:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Einl.XXX', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  d  =  d_{\lowZero} \cdot \Bigl( 1 - 2 \cdot \frac{G \cdot M}{c_{\lowZero}^{2} \cdot r} \Bigr)^{p-\frac{1}{2}}  }',
                                               label_name => 'OM:VRT:Einleitung:Equ-GraLKEinstein', label_text => '\\jump{OM:FrQFT:Gravitation:Laengenkontraktion-im-Gravitationsfeld:Equ-GraLKEinstein}{\\name{OM:VRT:Einleitung:Equ-GraLKEinstein}}', label_incr => true,
                                               footnote => 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, Speed Reduction in Detail, S. 20-22, hier Formel C.8, S. 22. Die erste Variable rechts direkt neben dem Gleichheitszeichen \\term{d_{0}} ist dort mit \\term{r} benannt. Diese Bennenung ist fehlerhaft, weil es eine weitere Variable \\term{r} unter dem Bruch gibt, die von der ersten unabhängig ist. Beide müssen also unterschieden werden, weil die erste neben dem Gleichheitszeichen eine generelle geometrische Ausdehnung von Strukturen meint, während die zweite den Abstand vom Zentrum einer Zentralmasse bedeutet. Folgerichtig habe ich dann die Variable \\term{r_{red}} bei Giese in \\term{d_{red}} umbenannt, weil diese die Reduktion der Ausdehnung einer generellen Struktur meint. Die Konstante \\term{c} habe ich wegen der Eindeutigkeit in \\term{c_{0}} umbenannt.'),
                    ))),
                  array( 'text', array( text => array(
                    'In tangentialer Richtung ergibt sich, wegen der Potenz Null, demnach keine Veränderung der Ausdehnung der Felder.'."\n".
                    'So wie es die Überlegung zum Gedankenexperiment der Doppel-Lichtuhr im Gravitationsfeld oben ergab.'."\n".
                    'In radialer Richtung hingegen ergibt sich eine Abflachung zum Heaviside-Ellipsoid, ganz ähnlich, wie bei der Bewegung von materiellen Objekten im Medium'."\n".
                    'in der Lorentzschen Äthertheorie.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Raumzeitkrümmung aus Perspektive der Mediumtheorie der Gravitation, der Quantengravitation')),
                  array( 'text', array( text => array(
                    'Die Raumzeitkrümmung der Allgemeinen Relativitätstheorie erscheint nun in neuem Licht:'."\n".
                    'In der gerade entwickelten Mediumtheorie der Gravitation stellt sich die Krümmung von Raum und Zeit recht einfach als Variation der Lichtgeschwindigkeit im'."\n".
                    'Medium und als entsprechende Deformation der Wechselwirkungsfelder dar, die der Materie ihre ausgedehnte Struktur geben.'."\n".
                    'In der Mediumtheorie der Gravitation, der gerade entwickelten Quantengravitation, handelt es sich also lediglich um den Eindruck einer Krümmung von Raum und Zeit.'."\n",
                      'Bei \\jump{OM:VRT:Vereinheitlichung-RT-LET}{fortgesetzter Vereinheitlichung der Relativitätstheorie}, wie wir sie auf der folgenden Seite in Angriff nehmen werden,'."\n".
                    'wird deutlich, dass der Eindruck der Raumzeitkrümmung unter anderem auch mit einer neuen variablen Energiedichte des Mediums, also des Vakuums, verbunden ist.'."\n".
                    'Dies hat Konsequenzen für die Möglichkeiten der Quantengravitation die Raumzeitkrümmung der Allgemeinen Relativitätstheorie durch Variationen der'."\n".
                    'Energiedichte des Mediums darzustellen, wie wir noch sehen werden.'."\n".
                    'Die Variationen des Eindrucks der Krümmung von Raum und Zeit sind auf diese Weise eingeschränkt.'."\n".
                    'Dies ist nicht unbedingt als problematisch zu betrachten, denn hierdurch ist eine konkretere Vorhersagekraft der Mediumtheorie der Gravitation beziehungsweise der Quantengravitation gegeben.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Das Phänomen der Dunklen Materie und die Energiedichte des Vakuums')),
                  array( 'text', array( text => array(
                    'Durch die nun gefundene Quantengravitation ergibt sich ein tieferer Einblick in die Struktur des Vakuums, wie wir noch sehen werden:'."\n",
                      'Es ergibt sich die Aussichten das \\jump{OM:FrQFT:Dunkle-Materie}{Phänomen der Dunklen Materie} durch eine variable Energiedichte des Mediums beziehungsweise des Vakuums zu erklären.'."\n".
                    'Diese Erklärung entsteht durch eine zusätzliche Gravitation des energiereicheren Vakuums innerhalb weit verteilter, großer Massenansammlungen, wie Galaxien oder Galaxienhaufen.'."\n".
                    'Während sich zwischen diesen großen Massenansammlungen die Energiedichte des Vakuums reduziert.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Genialität und Nützlichkeit der Allgemeinen Relativitätstheorie')),
                  array( 'text', array( text => array(
                    'Einstein ist den Weg der Mediumtheorie der Gravitation nicht gegangen, sondern hat sich vom naturphilosophischen Ansatz des'."\n".
                    '\\jump{OM:FrQFT:NeuePhysik:Quantengravitation:HM-AEP}{Äquivalenzprinzips von träger und schwerer Masse}\\footnote{\\const{FrQFT_g_footnote_text_AequivalPrinzTraeSchMasse}}'."\n".
                    'leiten lassen.'."\n",
                      'Ohne ein tieferes Verständnis des Michelson-Morley-Experiments, also ohne zu erkennen, dass dieses Experiment nur die Zweiweg- aber nicht die Einweg-Lichtgeschwindigkeit messen kann,'."\n".
                    'und ohne eine konkrete Idee davon, wie die Variation der Lichtgeschwindigkeit durch einen statistischen Störungseffekt der Feinstruktur der Elementarteilchen zustande kommt,'."\n".
                    'mündet der Ansatz der Mediumtheorie der Gravitation im Unkonkreten.'."\n".
                    'Dann wäre nur eine Idee davon zustande gekommen, dass es um die Variabilität der Lichtgeschwindigkeit und um die Deformation der Felder der Materie geht.'."\n".
                    'Eine wirkliche Mediumtheorie der Gravitation, die die Gravitation realistisch voraussagt, so wie die Allgemeine Relativitätstheorie dies tut, wäre unerreichbar gewesen.'."\n".
                    'Erst das Verständnis der Quantengravitation macht die Mediumtheorie der Gravitation zu einer Gravitationstheorie mit konkreter Vorhersagekraft.'."\n".
                    'Und nur das Relativitätsprinzip\\footnote{\\const{FrQFT_g_footnote_text_RelatPrinzip}} macht verständlich, dass deren Vorhersage nicht unbedingt'."\n".
                    'entscheidend von der Bewegung der Objekte im Medium abhängt.'."\n",
                      'Einstein hat sich die mathematisch und physikalisch-theoretisch praktischen Eigenschaften der Minkowski-Raumzeit zu nutze gemacht, um seine Allgemeine Relativitätstheorie'."\n".
                    'aus dem Äquivalenzprinzip von träger und schwerer Masse heraus zu entwickeln.'."\n".
                    'Daher lag wahrscheinlich eine gekrümmte vierdimensionale Raumzeit mehr in seinem Vorstellungssinn, als die echte Variabilität der Lichtgeschwindigkeit'."\n".
                    'und die Deformation der Felder bewegter oder im Gravitationsfeld befindlicher Ladungen.'."\n".
                    'Und seine praktische Vereinfachung der Materie auf die Punktform, die der Perspektive der Minkowski-Raumzeit zugrunde liegt, mochte er sicher auch nicht einfach aufgeben.'."\n",
                      'Zumal das Michelson-Morley-Experiment auf den ersten Blick, ohne tiefgehende Analyse, ja die absolute Konstanz der Lichtgeschwindigkeit für alle Beobachter suggerierte.'."\n".
                    'Und tatsächlich lässt sich auch nach tiefgehender Analyse der Zusammenhänge die Einweg-Lichtgeschwindigkeit und damit die Ruhelage des Mediums,'."\n".
                    'ohne weitere Einsichten, nicht einfach so messen.'."\n"))),
                  array( 'text', array( text => array(
                    'Genau den Vorteil, nicht auf das Wissen um die Ruhelage eines Mediums angewiesen zu sein, hat die Allgemeine Relativitätstheorie nach wie vor.'."\n".
                    'Das macht sie genauso unverzichtbar, wie die Spezielle Relativitätstheorie!'."\n",
                      'Doch ohne eine Definition der Gleichzeitigkeit, die auch der Allgemeinen Relativitätstheorie fehlt, scheint mir die Vereinheitlichung der Physik,'."\n".
                    'die Verträglichkeit der Quantenphysik mit der Allgemeinen Relativitätstheorie, nicht erreichbar.'."\n".
                    'Die Vereinheitlichung der Relativitätstheorie, als Vorstufe der Vereinheitlichung der Physik, ist daher auch auf Ebene der Allgemeinen Relativitätstheorie unausweichlich.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Die Mediumtheorie der Gravitation wird erst durch Hinweise der Quantenphysik auf die Elementarteilchen-Struktur möglich \\\\ \\color{*TitleAdd}{– Einsteins Vereinfachung ist praktisch, aber nicht beliebig haltbar}')),
                  array( 'text', array( text => array(
                    'So ist im Prinzip gezeigt, dass es möglich ist eine Mediumtheorie zu formulieren, die die wichtigen Eigenschaften der Allgemeinen Relativitätstheorie besitzt.'."\n".
                    'Interessanterweise kommen wir gerade dadurch in die Lage eine Mediumtheorie der Gravitation zu finden, indem wir Hinweise der Quantenphysik zu rate ziehen,'."\n".
                    'die uns etwas über die ausgedehnte Struktur der Materie-Elementarteilchen verraten.'."\n",
                      'Strebt man eine Vereinheitlichung der Physik an, stellt sich aus dieser Perspektive die Frage, ob die beschriebene Vereinfachung der Struktur der Materie haltbar bleibt.'."\n".
                    'Mit anderen Worten, inwieweit darf man die Natur in ihrer Komplexität vereinfachen, ohne die Möglichkeit der Beschreibung einer vereinheitlichten Physik zu verlieren?'."\n".
                    'Die großen Schwierigkeiten bei der Vereinheitlichung von Quantenfeldtheorie und Allgemeiner Relativitätstheorie, die sich in der modernen Physik ergeben,'."\n".
                    'lassen erahnen, dass in der Strukturlosigkeit der Materie in beiden Theorien ein Grund für diese Probleme liegt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Kleine Betrachtung von Theorien zur Beschreibung der Gravitation \\\\ \\color{*TitleAdd}{– Die Stringtheorie, die Schleifen-Quantengravitation und das Basisteilchenmodell}')),
                  array( 'text', array( text => array(
                    'Im Prinzip wurde dieses Manko von der Physik auch schon erkannt und mündete in der Stringtheorie\\footnote{\\const{FrQFT_g_footnote_text_ST}} und in der Schleifen-Quantengravitation\\footnote{\\const{FrQFT_g_footnote_text_LQG}}.'."\n",
                      'In der Stringtheorie bekommen die Elementarteilchen der Physik beispielsweise eine schwingende Fadenform.'."\n".
                    'Und tatsächlich ergibt sich interessanterweise eine \\jump{*Wirkungsquanten-Strings-Herlei}{schwingende, String-artige Fadenform der Elementarteilchen} auf andere Art und Weise auch in der fraktalen Quanten-Fluss-Theorie.'."\n",
                      'Leider ist es der Stringtheorie oder der Schleifen-Quantengravitation bisher nicht gelungen, die gesamte Physik unserer Welt konkret zu beschreiben, die Physik also zu vereinheitlichen.\\footnote{\\const{FrQFT_g_footnote_text_VereinhNichtGelungen}}'."\n".
                    'Auch diese Ansätze berücksichtigt nicht die oben beschriebene, verborgene prinzipielle Struktur der Lichtuhr der Materie, das Existenzprinzip oder den Djet-Neheh-Dualismus.'."\n".
                    'Aus naturphilosophischen Gründen wird deshalb auch die Stringtheorie oder die Schleifen-Quantengravitation nicht in der Lage sein, die Physik zu vereinheitlichen, weil beide die Struktur der Materie'."\n".
                    'nicht in ihrem von Einstein erkannten Wesen beschreiben.'."\n"))),
                  array( 'text', array( text => array(
                    'Das Basisteilchenmodell von Albrecht Giese erkennt und beschreibt das Wesen der Elementarteilchen der Materie nach der Philosophie der Lichtuhr.'."\n".
                    'Und er leitet daraus viele Eigenschaften der Materie-Elementarteilchen ab.'."\n",
                      'Ohne seine Entwicklung des Ursprungs der Gravitation, in der er die Ursache der Gravitation in einem statistischen Störungseffekts erkennt und beschreibt,'."\n".
                    'wäre ich vielleicht nicht in dieser Form auf die Quantengravitation gekommen.'."\n".
                    'Und das, obwohl mir die reale Variabilität der Lichtgeschwindigkeit und der Vakuumenergie im Gravitationsfeld und die Ursache der gravitativen Anziehung'."\n".
                    'in der Lichtbeugung des Lichts in der Lichtuhr schon klar waren.'."\n".
                    'Ich war auf der Suche nach einem Effekt, ähnlich wie dem von Giese bechriebenen, aber kann nicht sagen, wie nahe ich dran war,'."\n".
                    'als ich die Internetseite von Giese im Jahr 2011 entdeckte.'."\n",
                      'Gieses Basisteilchenmodell trifft die Quantengravitation von der Struktur her sehr nahe!'."\n".
                    'Allerdings erkennt er nicht die Körnigkeit der Materie-Elementarteilchen,'."\n".
                    'die sich durch die Abzählinterpretation der Heisenbergschen Unschärferelation ergibt und damit proportional zur Energie und Masse der Elementarteilchen ist.'."\n".
                    'Seine Materie-Elementarteilchen bestehen lediglich aus zwei Basisteilchen, die sich mit Lichtgeschwindigkeit bewegen.'."\n".
                    'Damit ist seine Formel zur Variation der Lichtgeschwindigkeit im Gravitationsfeld proportional zur Anzahl der Materie-Elementarteilchen'."\n".
                    'und nicht propotional zu deren Masse.\\color{*Bearb}{(Verweis)}'."\n".
                    'Auch das ›Problem der Zeit‹, auf das wir auf der nächsten Seite zu sprechen kommen, und dessen Lösung in der Struktur der Photonen, erkennt er leider nicht.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Licht und Materie im Gravitationsfeld \\\\ \\color{*TitleAdd}{– Weitere Hinweise zur Struktur der Elementarteilchen und des Vakuums}')),
                  array( 'text', array( text => array(
                    'Mit den bisherigen Hinweisen auf die Struktur der Materie und der Entwicklung der Mediumtheorie der Gravitation sind wir schon ein ganzes Stück des Weges'."\n".
                    'zur Vereinheitlichung der Relativitätstheorie gegangen.'."\n".
                    'Allerdings in gewisser Hinsicht erst am Beginn unserer Reise zur Vereinheitlichung der gesamten Physik.'."\n",
                      'Die nächste Etape des Wegs führt uns auf der kommenden Seite zu einer universellen naturphilosophischen Einsicht in Bezug auf Strukturen aus bewegten Bestandteilen ganz allgemein:'."\n",
                      'Das \\jump{OM:VRT:Vereinheitlichung-RT-LET:Loesung-des-Problems-der-Zeit:GedankExpErwLichtuhr}{Gedankenexperiment der erweiterten Lichtuhr} offenbart'."\n".
                    'einen scheinbaren Widerspruch im Zusammenhang zwischen den inneren Schwingungen der Lichtteilchen, also der Frequenz des elektromagnetischen Felds der Photonen, und dem zeitlichen Verlauf im Gravitationsfeld.'."\n".
                    'Beim Gedankenexperiment der erweiterten Lichtuhr geht es nicht nur um die Schwingung des Lichts zwischen den Spiegeln in einer Lichtuhr im Gravitationsfeld.'."\n".
                    'Es geht zusätzlich auch um die inneren Schwingungen der Photonen selber, die zwischen den Spiegeln reflektiert werden.'."\n".
                    'Diese verhalten sich scheinbar paradox zum Verlauf der Zeit:'."\n".
                    'Das elektromagnetische Feld der Photonen schwingt schneller, wenn die Zeit der Lichtuhr langsamer läuft.'."\n",
                      'Dies wirft ein ernsthaftes Problem mit unserem bisherigen physikalischen Verständnis von Schwingungen auf und macht das sogenannte ›Problem der Zeit‹\\footnote{\\const{FrQFT_g_footnote_text_ProblemDerZeit}} aus neuer Perspektive sichtbar.'."\n".
                    'Denn jede Art von Schwingungen laufen nach physikalischem Verständnis eigentlich auch grundsätzlich langsamer, wenn die Zeit langsamer läuft, sozusagen in Zeitlupe.'."\n".
                    'Deshalb laufen Uhren auf Basis von Schwingungsmechanismen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:Djet-Neheh-Dualismus', text =>
                      
                'Der Djet-Neheh-Dualismus, das grundlegende Ordnungsprinzip \\\\ \\color{*TitleAdd}{– Das Verhältnis und die Balance der Erhaltung sowie der Entstehung und der Zerstörung von Systemen aus Bestandteilen}')),
                  array( 'text', array( text => array(
                    'Die von mir vorgeschlagene \\jump{OM:VRT:Vereinheitlichung-RT-LET:Loesung-des-Problems-der-Zeit}{Lösung des ›Problems der Zeit‹} macht ein fraktales Ordnungsprinzip der Physik erstmals sichtbar.'."\n".
                    'Die Ebenen dieses Fraktals funktionieren nach dem neuen \\jump{OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip}{Existenzprinzip}'."\n".
                    'und dem ihm zugrunde liegenden naturphilosophischen \\jump{OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip:DjetNeheh}{Djet-Neheh-Dualismus}.'."\n",
                      'Diesen neuen, strukturellen Dualismus habe ich nach den beiden zeitlichen Aspekten Djet und Neheh des alten Ägyptens benannt.'."\n".
                    'Zur Lösung des ›Problems der Zeit‹ sind wir in meinen Augen darauf angewiesen, ein neues und strukturelles Verständnis der Zeit zu finden.'."\n".
                    'Den alten Ägyptern war bekannt, dass die Zeit zwei Gesichter hat:\\footnote{\\const{FrQFT_g_footnote_text_ZeitDjetNeheh}}'."\n".
                    'Die Zeit hat den perfektiven Aspekt des Djet (sprich »Dschet«).'."\n".
                    'Er meint einen Gesamtverlauf der Zeit, die historische Geschichte zum Beispiel in einem ewigen Sinn.'."\n".
                    'Und die Zeit hat den imperfektiven Aspekt des Neheh (sprich »Nechech«).'."\n".
                    'Er meint so etwas, wie den Rhythmus der Tage, Jahreszeiten oder Jahre, also etwas, das sich nie verändert und nie zu Ende ist.'."\n",
                      'Es scheint schon schwierig, beide Begriffe korrekt in unsere Sprache zu übersetzen.'."\n".
                    'Ich benutze die Begriffe also sicher nicht ganz exakt so, wie sie in der altägyptischen Mythologie verwendet werden.'."\n".
                    'Sie sollen von daher eine nicht ganz zufällige Inspirationsquelle für die Beschreibung eines neuen, grundlegenden Ordnungsprinzips der Physik sein.'."\n",
                      'Der Djet-Neheh-Dualismus ist das Ordnungsprinzip, in dem es um das Verhältnis der Stabilität und der Fortentwicklung eines Systems geht.'."\n".
                    'Noch allgemeiner und grundsätzlicher gesprochen können wir auch sagen:'."\n".
                    'Es geht um das Verhältnis und die Balance der Erhaltung sowie der Entstehung und der Zerstörung von Systemen aus Bestandteilen;'."\n".
                    'um das Verhältnis und die Balance zwischen ihrer Rotation im System und ihrer geradlinigen Bewegung.'."\n".
                    'Also sind wir mit dem Djet-Neheh-Dualismus an der Quelle von Schöpfung, Existenz und Zerstörung/Transformation der Dinge.'."\n".
                    'Und weil der Djet-Neheh-Dualismus ein fraktales Yin und Yang Prinzip ist, sind wir mit ihm wirklich tief in den Grundlagen unserer Welt.'."\n",
                      'Nach diesem Ordnungsprinzip funktioniert das Licht, die Photonen selber, sowie auch die Lichtuhr ebenso wie jedes Elementarteilchen und das Vakuum.'."\n".
                    'Auch Sonnensysteme, Galaxien und Galaxienhaufen gehorchen ihm, wie auch die Struktur des gesamten Kosmos.'."\n".
                    'Es geht dabei auch um die Balance, die sich durch mit dem Djet-Neheh-Dualismus verbundenen Erhaltungssätzen ausdrückt.'."\n",
                      'Ich denke, dass der Djet-Neheh-Dualismus eng mit der Thermodynamik verknüpft und als notwendige Erweiterung von ihr zu sehen ist,'."\n".
                    'wenn wir eine Ahnung von unserer Welt bekommen und sie verstehen möchten.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:Djet-Neheh-Dualismus', text =>
                      
                'Das grundlegende Ordnungsprinzip und die Gravitation \\\\ \\color{*TitleAdd}{– Neue Facetten und Grenzen der Möglichkeiten}')),
                  array( 'text', array( text => array(
                    'Der Djet-Neheh-Dualismus und die mit ihm verbundenen Erhaltungssätze, wie die Impuls- und Drehimpulserhaltung, lassen die Frage aufkommen,'."\n".
                    'ob denn die hinter dem Dualismus steckende Balance von geradliniger Bewegung und Rotation in den durch die gravitative Bindung bestimmten Systemen massiver Objekte'."\n".
                    'in der Allgemeinen Relativitätstheorie angemessen berücksichtigt ist.'."\n",
                      'Und diese Frage erweitert sich auch auf die Rolle des Vakuums, wenn wir den Mechanismus der Quantengravitation betrachten.'."\n".
                    'Denn die Struktur des Vakuums und die Verteilung seiner Energiedichte müssen bei der weiträumigen Gravitation eine erhebliche Rolle spielen, wie ich oben schon'."\n".
                    'geschildert hab.'."\n".
                    'Es liegt also nahe, dass auch die Dynamik des Vakuums, inklusive seiner Rotation, bei großen Strukturen nicht zu vernachlässigen ist.'."\n",
                      'In der Quanten-Fluss-Theorie wird auch klar, dass die Gravitation auf einem \\jump{OM:SpaLeb:Home}{Symmetriebruch in der Verteilung der Vakuumenergiedichte} beruht:'."\n".
                    'Die gleichmäßige Verteilung wird ungleichmäßig und schafft dadurch Gravitationszentren.'."\n".
                    'Gleichzeitig gilt die Erhaltung der gesamten Energie des Vakuums, was zu einer Begrenzung der Möglichkeiten der Verteilung der Vakuumenergiedichte im Kosmos führt.'."\n".
                    'Damit sind aus Perspektive der Allgemeinen Relativitätstheorie weniger Formen der Raumzeitkrümmung möglich, denn der Kosmos ist im Schnitt euklidisch flach.'."\n",
                      'Wir sehen also, dass das Feld der Vereinheitlichten Relativitätstheorie viele neue Facetten eröffnet, die untersucht werden können, aber auch die realistischen'."\n".
                    'Möglichkeiten begrenzt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Ausblick: Eine neue Welt der Physik \\\\ \\color{*TitleAdd}{– Physik auf Basis von Regelprozessen enthält die Prozesse des Lebens}')),
                  array( 'text', array( text => array(
                    'Durch diese tiefen Einsichten in die Struktur von Raum und Zeit, der Elementarteilchen und des Vakuums, also in die Struktur der Physik, offenbart sich'."\n".
                    'eine neue physikalische Welt.'."\n".
                    'Einen weiteren faszinierenden Zugang zu dieser neuen physikalischen Welt lege ich auf der Seite \\italic{\\jumpname{OM:FrQFT:WasIstPhysik}} dar.'."\n".
                    'Hier wird sogar aufgrund von natur- und wissenschaftsphilosophischen Überlegungen deutlich, warum sich die Bestandteile unserer Materie, und damit auch das Licht,'."\n".
                    'mit konstanter Geschwindigkeit bewegen müssen.'."\n",
                      'Die neue Physik hat noch eine ganz besondere Eigenschaft parat, die sie auszeichnet:'."\n".
                    'Aufgrund ihrer fraktalen sowie durch und durch selbstorganisierten Struktur, ist die neue Theorie, die aus der Vereinheitlichung der Relativitätstheorie und schließlich der Physik'."\n".
                    'entsteht, Hintergrundunabhängig\\footnote{\\const{FrQFT_g_footnote_text_Hintergrundunabh}}.'."\n".
                    'Das bedeutet, sie erschafft ihre eigene, flexible Bühne selbst, nämlich Raum und Zeit, auf der sie mit ihren Elementarteilchen ihr Spiel aufführt.'."\n",
                      'Die neue Perspektive ermöglicht in meinen Augen nicht nur die Vereinheitlichung der Relativitätstheorie und schließlich der gesamten Physik.'."\n".
                    'Sie integriert sogar ein grundsätzliches Verständnis des Lebens in die Physik, wie ich im \\jump{OM:SpaLeb:Home}{›Spannungsspiel des Lebens‹} darlege.'."\n",
                      'In der neuen Physik der fraktalen Quanten-Fluss-Theorie basieren alle physikalischen Dinge oder Objekte aufgrund von sie stabilisierenden Regelprozessen.'."\n".
                    'Jedem Elementarteilchen, jedem Ding, liegt damit ein es zur Existenz bringender Elementarprozess zu grunde.'."\n".
                    'So hat auch jedes Lebewesen einen seine Existenz stabilisierenden Elementarprozess, den ich \\jump{OM:SpaLeb:Care-Prozess}{Care-Prozess} nenne.'."\n"))),
                  /*array( 'headline', array( jump_name => 'OM:VRT:Einleitung:XXX', text =>
                      
                'Idee zur Messung der Ruhelage des Mediums mittels eines Verschränkungsexperiments')),
                  array( 'text', array( text => array(
                    'Zum Abschluss der Einleitung möchte ich eine prinzipielle Idee eines Experiments aufzeigen, mit dem wir die Ruhelage des Mediums messen können:'."\n",
                      'Wenn die Verschränkung von Elementarteilchen sich in den verschränkten Teilchen gleichzeitig auflösen muss, dann liegt genau hierin die eventuelle Chance'."\n".
                    'die Ruhelage des Mediums, oder mit anderen Worten, die Bewegung eines Beobachters relativ zum Medium, zu messen.'."\n".
                    'Wir können drei Elementarteilchen verschränken und zwei von diesen, im verschränkten Zustand, an entfernte Orte bringen, die im rechten Winkel zueinander liegen, von uns'."\n".
                    'aus gesehen.'."\n",
                      'Damit kommen wir grundsätzlich in die Lage, an unterschiedlichen Orten im Raum ein Ereignis zu kreieren, dass gleichzeitig passiert.'."\n".
                    'Oder anders ausgedrück, dass Gleichzeitigkeit definiert.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),*/
                    
                  /*array( 'text', array( text => array(
                    'Im Prinzip wurde dieses Manko von der Physik auch schon erkannt und mündete in der Stringtheorie.'."\n".
                    'In ihr bekommen die Elementarteilchen der Physik eine schwingende Fadenform.'."\n".
                    'Doch leider ist es diesem Ansatz bisher nicht gelungen die Physik unserer Welt konkret zu beschreiben.'."\n".
                    'Auch die Stringtheorie berücksichtigt nicht die oben beschriebene, in der formalen Mathematik bisher verborgene prinzipielle Struktur der Lichtuhr der Materie.'."\n".
                    'Aus naturphilosophischen Gründen wird deshalb auch die Stringtheorie nicht in der Lage sein, die Physik zu vereinheitlichen, weil sie die Struktur der Materie'."\n".
                    'nicht korrekt beschreibt.'."\n"))),*/
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:VRT:Vereinheitlichung-RT-LET'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • XXX  >
          <?php /*$Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:VRT:Einleitung:XXX',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:VRT:Einleitung:XXX', type => 'back'),
                    )),
                      
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
                      array(  jump_name => 'OM:VRT:Einleitung:XXX'),
                    )),
              )
          );*/ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
