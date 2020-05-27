<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/FrQFT.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:FrQFT:WieMessenWirInDerPhysik'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:FrQFT:WasIstPhysik'); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  /*array( 'notice', array( Display => 'invis', text => array(
                    '(\\bold{o Über den Raum verteilte Zusammenhänge:})',
                    '(•o Dichte:)',
                    '(–o Die Dichte kann ein über den Raum verteilter Zusammenhang sein, wenn die Menge des verteilten Stoffs einer Erhaltung unterliegt. Es können also keine neuen Teilchen des Stoffes entstehen oder verschwinden.)',
                    '(–o Erhöht sich die Dichte an einem Ort im Raum, dann muss sie sich an einem anderen automatisch verringern.)',
                    '(–o Als Fußnote ist bei der Definition der Dichte im Raum übrigens interessant, dass hier quasi automatisch die Unschärferelation ins Spiel kommt, wenn die Dinge, deren Dichte gemessen werden soll, eine Ausdehnung haben. Es muss dann ein endliches Volumen zur Berechnung der Dichte betrachtet werden. Je kleiner das Volumen wird, umso größer wird der statistische Fehler.)',
                    '(–o Im symmetrischen Fall ist der Stoff gleichmäßig verteilt.)',
                    '(–o Der Symmetriebruch entsteht, wenn der Stoff unsymmetrisch, also ungleichmäßig verteilt wird.)',
                    '(–o Wechselwirkungen entstehen, wenn aus der unsymmetrischen Verteilung ungleichmäßig verteilte Interaktionen zwischen den Orten unterschiedlicher Dichte entstehen..)',
                    ))),*/
                      
                      
                  array( 'text', array( text => array(
                    'Zum fortschreitend tiefen Verständnis der Grundlagen der Physik beschreibe ich einen Ansatz zur Veranschaulichung der physikalischen Zusammenhänge und deren Interpretationen bei Messungen.'."\n",
                      'Die nachfolgende Perspektive ist in mancherlei Hinsicht eine Vereinfachung.'."\n".
                    'Diese kann uns in meinen Augen lehren, worauf sich wichtige Begriffe der Physik beziehen.'."\n".
                    'Und schließlich versetzt uns gerade diese Perspektive in die Lage, durch ein Gedankenexperiment erstaunliche Erkenntnisse zu gewinnen.'."\n".
                    'In der anschließenden Entwicklung der \\jump{OM:FrQFT:NeuePhysik}{neuen Physik} wird sie dann schießlich realistischer ausgebaut.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                                           
                'Verschränkung in der Kopenhagener Interpretation der Quantenmechanik und entsprechenden alternativen Perspektiven', subline =>
                  'Das Messproblem der Quantenmechanik')),
                  array( 'text', array( text => array(
                    'Verschränkungsphänomene können aus Erhaltungssätzen entstehen, die auf über den Raum aufsummierten Größen basieren.\\hidden{Bisher nicht gefunden … \\color{*Bearb}{(Verweis auf Spektrum der Wissenschaft Artikel)}}'."\n".
                    'Und zwar dann, wenn die Messung des wirklichen Zustands eine Vorhersage mit Hilfe von Wahrscheinlichkeiten korrigiert.'."\n",
                      'Zum Beispiel, wenn die Anzahl von Teilchen in einem betrachteten Volumen konstant ist, dann kann die Dichte der Teilchen über dieses Volumen Verschränkungsphänomene zeigen.'."\n".
                    'Die Grundlage dessen bedeutet, ändert sich die Dichte an einem Ort im Volumen, dann muss sie sich zwangsläufig an allen anderen Orten zusammen ebenfalls ändern.'."\n".
                    'Und zwar so, dass der Erhaltungssatz erfüllt wird.'."\n",
                      'Angenommen unsere Berechnungen ergeben, dass sich eine Teilchenanhäufung im Raum mit 50%-tiger Wahrscheinlichkeit an einem von zwei Orten \\term{x} oder \\term{y} befindet.'."\n".
                    'Dort, wo sich von den zwei Orten keine Anhäufung befindet, dort befindet sich eine entsprechende Teilchenreduktion, ein Tal sozusagen.'."\n".
                    'Dann ist der Erhaltungssatz erfüllt.'."\n",
                      'Messen wir nun, wo die Teilchenanhäufung ist, nämlich bei \\term{x} beispielsweise, dann müssen wir unser bsiheriges Wissen von 50% \\term{x} zu 50% \\term{y} auf'."\n".
                    '100% \\term{x} zu 0% \\term{y} korrigieren.\\footnote{\\const{FrQFT_g_footnote_text_QMMessproblKorrprobl}}'."\n".
                    'Dieser Effekt erscheint als Verschränkung, weil durch diese Korrektur die Orte \\term{x} und \\term{y} im Moment der Messung als miteinander verbunden erscheinen.'."\n".
                    'Diese Verbindung wird real, wenn wir annehmen, dass tatsächlich erst durch die Messung bestimmt wird, ob der Haufen bei \\term{x} oder bei \\term{y} ist.'."\n".
                    'So wie es der ›Kopenhagener Interpretation der Quantenmechanik‹\\footnote{\\const{FrQFT_g_footnote_text_QMKopenhagenerInter}} entsprechen würde.'."\n".
                    'Diese Erscheinung wird ›Messproblem der Quantenmechanik‹ genannt.\\footnote{\\const{FrQFT_g_footnote_text_QMMessproblem}}'."\n",
                      'Alle Orte des Volumens sind aus dieser Perspektive potenziell miteinander verschränkt.'."\n".
                    // #!: Folgendes stimmt so nicht! Es kann instantan, wie auch kausal sein !!!
                    //  'Gilt der Erhältungssatz absolut und es ist auch nicht erlaubt, dass Teilchen an einer Stelle verschwinden und an anderer gleichzeitig auftauchen, dann vollziehen sich die Veränderungen'."\n".
                    //'an allen Orten des Gesamtvolumens quasi instantan, also ohne Zeitverzögerung.'."\n".
                    'Über das gesamte Volumen gibt es in diesem Sinne zwei unterschiedliche Möglichkeiten der Veränderung der Dichte:'."\n",
                      'Eine kausale beziehungsweise lokal verursachte Veränderung bedeutet, dass es an einem Ort eine Ursache gibt und sich die Veränderung dann über den Raum ausbreitet.'."\n".
                    'Die Wellenfunktion der Schrödingergleichung\\footnote{\\const{FrQFT_g_footnote_text_QMSchroedingergleich}}, aus der sich die oben erwähnten Wahrscheinlichkeiten berechnen gehört dazu.'."\n",
                      'Oder, was wir Verschränkung nennen, die Veränderung der Dichte findet an zwei oder mehr Orten ohne Zeitverzögerung gleichzeitig statt.'."\n".
                    'Das ist, wie wenn ein Zauberer Teilchen von einem Ort im Volumen an einen anderen Ort zaubert, in dem Moment, wo der Zuschauer nachguckt.'."\n".
                    'Die Teilchen verschwinden hier und erscheinen gleichzeitig dort.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                                           
                'In der Bohmschen Mechanik gibt es keine reale Verschränkung', subline =>
                  'Es gibt hier eine Korrektur durch die Messung, aber kein Messproblem')),
                  array( 'text', array( text => array(
                    'In der Bohmschen Mechanik der \\jump{OM:FrQFT:De-Broglie-Bohm-Theorie}{De-Broglie-Bohm-Theorie} ist hingegen prinzipiell jedes Teilchen am einen oder am anderen Ort vorhanden.'."\n".
                    'Die Anhäufung ergibt sich also nicht erst durch die Messung, sondern die Messung stellt diese Tatsache einfach fest.'."\n",
                      'Allerdings ist es auch in der Bohmschen Mechanik nicht vor der Messung möglich zu wissen, wo die Anhäufung oder wo das Tal ist.'."\n".
                    'Wir müssen also auch hier mit einer Statistik arbeiten, einer Wahrscheinlichkeitsverteilung, die der Statistik der ›Kopenhagener Interpretation der Quantenmechanik‹ gleicht.'."\n".
                    'Deshalb gibt es theoretisch keine Korrektur der Aufenthaltswahrscheinlichkeit der Teilchen durch die Messung.'."\n",
                      'Im praktischen Modell kommen wir aber nicht um die Wahrscheinlichkeitsrechnung herum und müssen daher auch hier korrigieren.'."\n".
                    'Dies ist aber so gesehen keine reale Verschränkung der Teilchen an den Orten \\term{x} und \\term{y}, weil sich durch die Messung nichts verändert, außer unser Wissen.'."\n".
                    'Aus der Vorhersage wird Gewissheit.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                                           
                'Verschränkung im Sandkasten')),
                  array( 'text', array( text => array(
                    'In einem Sandkasten kann nach der ›Kopenhagener Interpretation der Quantenmechanik‹, unter bestimmten Umständen, die Menge der Sandkörner an unterschiedlichen Orten miteinander verschränkt sein.'."\n".
                    'Nimmt die Menge der Sandkörner an einem Ort ab, muss sie an einem anderen Ort sofort zunehmen.'."\n",
                      'Schieben wir den Sand hin und her, so bleibt im Idealfall die Menge der Körner im Sandkasten immer gleich.'."\n".
                    'Dies ist ein lokales Szenario.'."\n",
                      'Sind Sandkörner halb hier halb dort und materialisieren sich von Zauberhand an einem bestimmten Ort durch nachgucken ganz und verschwinden am anderen Ort, dann sind diese beiden Orte im Sandkasten verschränkt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                                           
                'Quantisierung und Unschärferelation', subline =>
                  'Wie messen wir die Dichte von Teilchen an einem Ort?')),
                  array( 'text', array( text => array(
                    'Genauso interessant und aufschlussreich wird es, wenn wir nun versuchen die Teilchendichte an den Orten des Volumens zu messen.'."\n",
                      'Zerlegen wir das gesammte Volumen in regelmäßige kleinere Volumina und wählen wir dabei ein sehr kleines Teilvolumen für die Zerlegung, ist schnell klar, dass wir eine gute Chance haben,'."\n".
                    'gar kein Teilchen, genauer Teilchenschwerpunkte oder Mittelpunkte, in diesem Teilvolumen zu finden.'."\n".
                    'Die errechnete Dichte ist in diesem Fall fast immer Null.'."\n",
                      'Hin und wieder geraten uns ein, zwei oder auch mal mehr Teilchen in unser Teilvolumen.'."\n".
                    'Für jede Anzahl von Teilchen ergibt sich eine konstante Dichte.'."\n".
                    'Die Messung der Dichte verhält sich also in regelmäßigen Sprüngen quantisiert.'."\n",
                      'Angenommen die Dichte ist in einem Gebiet im gesamten Volumen recht konstant:'."\n".
                    'Dann liegen unsere Messergebnisse mit einem gewissen Fehler um diese Konstante verteilt.'."\n".
                    'Jenachdem ob mal ein Teilchen mehr oder weniger per Raumrichtung in unser Teilvolumen gerät.'."\n".
                    'Dieses Phänomen entspricht genau der \\jump{OM:FrQFT:HeisenbergUnschaerfe:Impuls-und-Ort}{Impuls-Ort-Unschärfe der Abzählinterpretation der Heisenbergschen Unschärferelation}, wenn wir davon ausgehen,'."\n".
                    'dass jedes der gezählten Teilchen dem Planckschen Wirkungsquantum \\term{h} entspricht.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                                           
                'Quantisierung und Unschärferelation im Sandkasten', subline =>
                  'Wie messen wir die Dichte von Teilchen an einem Ort?')),
                  array( 'text', array( text => array(
                    'Auch dieses Phänomen können wir genauso wie die Verschränkung auf den Sandkasten übertragen.'."\n".
                    'Unser Sandkasten ist ein echtes Quantensystem, nur deutlich reduziert und vereinfacht im Vergleich zur Quantenmechanik.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                                           
                'Symmetriebrüche und Wechselwirkungen', subline =>
                  'Die Grundlage jeder Physik, anhand der quantisierten Gravitation')),
                  array( 'text', array( text => array(
                    'Die Teilchendichte ist hier natürlich nur ein exemplarisches Beispiel für eine über den Raum verteilte Eigenschaft einer Menge an Teilchen, die einem Erhaltungssatz gehorcht.'."\n".
                    'Aber an ihr können wir ganz grundlegende Prinzipien der Physik verdeutlichen.'."\n".
                    'Der Einfachheit halber, und weil diese Dichte mit einer ganz besonderen Wechselwirkung im Zusammenhang steht, nämlich der Gravitation, möchte ich mit ihr fortfahren.'."\n",
                      'In einen Gedankenexperiment angenommen, die Teilchen eines quasi unendlichen Volumens stehen so miteinander in Wechselwirkung, dass sie sich gegenseitig anziehen, sind aber gleichmäßig im'."\n".
                    'Volumen verteilt.'."\n".
                    'Dann heben sich alle Anziehungen gegenseitig auf, weil auf jedes Teilchen aus allen Richtungen die gleiche Anziehung wirkt.'."\n".
                    'Stellen wir uns das Vakuum der heutigen Quantenphysik hypothetisch einmal aus solchen Teilchen gebildet vor, die alle einer einheitlichen Energie entsprechen,'."\n".
                    'dann würde die Energiedichte des Vakuums überall im Raum in etwa gleich groß sein, wie es in der heutigen Physik vermutet wird.'."\n",
                      'Nun nehmen wir einmal einen \\jump{OM:FrQFT:NeuePhysik:Symmetriebrechung}{Symmetriebruch} an, die Symmetrie der gleichmäßigen Verteilung sei dadurch gebrochen, dass sich hier und dort Ansammlungen dieser Teilchen befinden.'."\n".
                    'Die Orte im Raum, wo die Energiedichte des Vakuums größer ist, sind jetzt anziehender, als die Orte, wo die Dichte geringer ist.'."\n".
                    'So wie wir es im Kosmos im Prinzip auch bei der Gravitation beobachten.'."\n".
                    'Die Masse jeder Teilchenansammlung entspricht dann übrigens der Zählung ihrer Teilchen in der Zeit nach der \\jump{OM:FrQFT:HeisenbergUnschaerfe:Energie-und-Zeit}{Energie-Zeit-Unschärfe der Abzählinterpretation der Heisenbergschen Unschärferelation},'."\n".
                    'wenn jedes der gezählten Teilchen dem Planckschen Wirkungsquantum \\term{h} entspricht.'."\n",
                      'Auf sehr ähnliche Weise entstehen alle Wechselwirkungen der Physik aus Symmetriebrüchen.'."\n".
                    'Bei den Eigenschaften der Wechselwirkungen kommt es nur sehr darauf an, welche Symmetrie jeweils gebrochen ist.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                                           
                'Quantengravitation', subline =>
                  '– etwas realistischer')),
                  array( 'text', array( text => array(
                    'Die Gravitation ist auf diese Weise quantisiert und entspringt den Unterschieden der Energiedichte des Raumes oder Vakuums.'."\n".
                    'So ergibt sich die \\jump{OM:FrQFT:Quantengravitation}{Quantengravitation der Elementarteilchen} in der neuen Physik.'."\n".
                    'Ein Elementarteilchen, und jede andere Energie- oder Massenansammlung, stellt sich demnach als erhöhte Vakuumenergiedichte dar.'."\n".
                    'Das macht auch Sinn, verstehen wir Elementarteilchen als ins Vakuum eingebettete Existenzen.\\color{*Bearb}{(Bild?)}'."\n",
                      'Um die Gravitation durch Verlassen dieser etwas sehr simplen Perspektive realistischer zu machen:'."\n",
                      'Diese Teilchen verhalten sich eher wie unpolarisiertes Licht und nicht wie Materie-Elementarteilchen.'."\n".
                    'Sie fallen nicht alle in die sie anziehenden Massen, sondern sind entweder in Elementarteilchen gefangen oder, wenn sie sich frei bewegen,'."\n".
                    'werden nur zu den Massen hin gebeugt, weil sie sich auch sehr ähnlich wie Licht bewegen.'."\n",
                      'Durch die Beugung der Bahnen dieser Teilchen, die sich, wie gesagt, quasi frei im Vakuum bewegen, wenn sie nicht in Elementarteilchen gefangen sind,'."\n".
                    'ergibt sich um die Massen herum, nach außen hin, eine stetig abnehmende Dichte der Vakuumenergie.'."\n".
                    'Diese in der Physik Gradient genannte Veränderung der Vakuumenergiedichte erscheint als Raumzeitkrümmung der Allgemeinen Relativitätstheorie\\footnote{\\const{FrQFT_g_footnote_text_ART}} und fungiert als Gravitationspotenzial.'."\n"))),
                      
                  array( 'fade-in-area', array( Display => 'invis',
                    Title => 'Einschub für kluge, kritische Köpfe …', ParagraphList => array(
                  /*array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),*/
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                      
                'Absolutes Bezugssystem im Standardmodell der Kosmologie')),
                  array( 'text', array( text => array(
                    'Die Massenverteilungsdichte im Standardmodell der Kosmologie\\footnote{\\const{FrQFT_g_footnote_text_SMK}} (SMK) stellt generell ein absolutes Bezugssystem im Raum dar.'."\n",
                      'Verändern wir unsere Bewegung innerhalb des Vakuums in einer Richtung aus Sicht der Relativitätstheorie, so verändert sich die Vakuumenergiedichte oder die Massendichte in dieser Richtung und in den anderen Richtungen nicht.'."\n".
                    'Betrachten wir den Durchschnitt dieser Dichten auf einer sehr großen Dimension oder Skala, dann finden wir eine Bewegung darin, aus deren Sicht in allen Raumrichtungen die Dichte gleich groß ist.'."\n".
                    'Dies nennt die Kosmologie \\jump{OM:FrQFT:NeuePhysik:Relativitaet:ART-MP}{Machsches Prinzip}\\footnote{\\const{FrQFT_g_footnote_text_MachPrinz}} oder \\jump{OM:FrQFT:NeuePhysik:Relativitaet:ART-MP}{Kosmologisches Prinzip}\\footnote{\\const{FrQFT_g_footnote_text_KosmoPrinz}}:'."\n"))),
                  $SpaLeb_g_zitat_Fliessbach_ART1998_BestaetigMachprinzip,
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                      
                'Absolutes Bezugssystem in der Quantengravitation')),
                  array( 'text', array( text => array(
                    'Die Vakuumenergiedichte der Quantenphysik ist in meinem Modell nichts anderes als die Massenverteilungsdichte im Kosmos, denn Energie ist proportional zur Masse.'."\n",
                      'Anders als in der Allgemeinen Relativitätstheorie selber, in der es kein derartiges absolutes Bezugssystem gibt, existiert in dem geschilderten Ansatz der Quantengravitation eines.'."\n".
                    'Dies ist allerdings das gleiche absolute Bezugssystem, welches im heutigen Standardmodell der Kosmologie durch das Kosmologische Prinzip,'."\n".
                    'ergänzend zur Allgemeinen Relativitätstheorie, wie oben geschildert, eingeführt ist.'."\n".
                    'Von daher kann zu recht gesagt werden:'."\n"))),

                  array( 'text', array( Shape  => 'italic', text => array(
                        'Die geschilderte Quantengravitation ist nicht voll mit der Allgemeinen Relativitätstheorie identisch oder äquivalent.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Wenn die Allgemeine Relativitätstheorie jedoch im Standardmodell der Kosmologie um ein absolutes Bezugssystem ergänzt werden muss, um mit den Beobachtungen übereinzustimmen,'."\n".
                    'dann kann über ein Modell, das dieses Bezugssystem von vornherein enthält aber auch folgendes gesagt werden:'."\n"))),

                  array( 'text', array( Shape  => 'italic', text => array(
                        'Die geschilderte Quantengravitation ist umfassender als die Allgemeine Relativitätstheorie, weil sie das Kosmologische Prinzip enthält.'."\n"))),
                      
                    ))),
                      
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                                           
                'Quantengravitation im Sandkasten', subline =>
                  'Ein grobes Modell veranschaulicht eine mögiche Erklärung des Phänomens der Dunklen Materie')),
                  array( 'text', array( text => array(
                    'Die Quantengravitation ist im Sandkasten nicht mehr realistisch, sondern nur sehr grob zu veranschaulichen.'."\n".
                    'Dies kommt, weil die Dynamik des Vakuums fehlt und sich Sand nicht beliebig steil modellieren lässt.'."\n".
                    'Für das weiträumige Gravitationspotenzial ist es dafür zur Darstellung entscheidender Eigenschaften umso besser geeignet:'."\n",
                      'Jedes Materie-Elementarteilchen ist eine spitze Sandnadel im Sandkasten.'."\n".
                    'Größere Ansammlungen von ihnen sind Nadelansammlungen, die unter sich und im umgebenden Vakuum einen leichten, sehr flachen Sandberg entstehen lassen.'."\n".
                    'Dieser seichte Sandberg stellt die erhöhte Vakuumenergiedichte und das Gravitationspotenzial dar.'."\n".
                    'Dieses Szenario gilt für Elementarteilchen, für Planeten sowie Sonnen und so weiter.'."\n",
                      'Werden wir immer großräumiger bis auf Galaxieebene, erstreckt sich der seichte Sandberg unter all diesen Massen doch über ein erhebliches Gebiet.'."\n".
                    'Dadurch gewinnt er mächtig an Wirkung und beeinflusst stark das Gravitationspotenzial der Galaxie; so stark, dass das Phänomen der Dunklen Materie sichtbar wird.'."\n".
                    'Dies bedeutet, dass mehr Gravitation wirkt, als Massen sichtbar sind, durch die unsichtbare, erhöhte Vakuumenergiedichte und ihre weiträumige Veränderung.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                                           
                'Das Phänomen der Dunklen Materie', subline =>
                  'Im dreidimensionalen Modell')),
                  array( 'text', array( text => array(
                    'Nicht nur im Sandkasten gibt es das Phänomen der Dunklen Materie, sondern natürlich auch im echten Vakuum des Raums unseres Modells der Quantengravitation:'."\n",
                      'Aufgrund dessen, dass wir es im dreidimensionalen Modell nicht nur mit der Fläche das Sandkastens, sondern mit dem Volumen des Raums zu tun haben,'."\n".
                    'fällt der zusätzliche gravitative Effekt der erhöhten Vakuumenergie zwischen den Sonnen einer Galaxie noch deutlich größer aus.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:WieMessenWirInDerPhysik:Vortext:XXX', text =>
                                           
                'Was bringt uns die (neue) Quantengravitation?', subline =>
                  'Eine Lanze brechen für die Quantisierung der Gravitation')),
                  array( 'text', array( text => array(
                    'Die Möglichkeit oder die Notwendigkeit der Quantisierung der Gravitation wird, aufgrund der bisherigen Schwierigkeiten eine schlüssige Theorie zu finden,'."\n".
                    'zur Zeit immer mehr in Frage gestellt.\\footnote{\\const{FrQFT_g_footnote_text_QGMoeglOderNotwend}}'."\n",
                      'Das gerade dargestellte, noch etwas vereinfachte Modell der Quantengravitation ergibt, nach dem im Folgenden geschilderten Ansatz der neuen Physik, für den Fall einer Zentralmasse genau die Schwarzschild-Lösung der Allgemeinen Relativitätstheorie.'."\n",
                      'Gehen wir, wie vorstehend geschildert, weiter ins Detail und berücksichtigen genauer die Verteilung der Vakuumenergie im Kosmos, so finden wir einen Ansatz zur Erklärung des Phänomens der Dunklen Materie.'."\n".
                    'Hiermit möchte ich daher auch aufzeigen, dass die hier angerissene Quantisierung der Gravitation die Möglichkeit bietet, das Vakuum besser zu verstehen und'."\n".
                    'einen ganz neuen und verhältnismäßig einfachen Zugang zur Erklärung des Phänomens der Dunklen Materie bereit hält.'."\n"))),
            
                  array( 'text', array( text => array(
                    'Nach den bis hierher vorgestellten, etwas unterschiedlichen Perspektiven auf die Grundlagen der Physik, \\italic{›\\jumpname{OM:FrQFT:Einleitung:Fundierung}‹}, \\italic{›\\jumpname{OM:FrQFT:WasIstPhysik}‹} und die hier geschilderte Perspektive, ist es nun an der Zeit, auf den folgenden Seiten die neue Physik zu formulieren.'."\n"))),
                  /*array( 'text', array( text => array(
                    '\\color{*Bearb}{In Arbeit …}'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),*/
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:FirstPrinziples'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • XXX  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php /*To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:WieMessenWirInDerPhysik:XXX',
              '\\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:FrQFT:XXX', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'vis', text => array(
                    '(• XXX)',
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
                      //array(  jump_name => 'OM:FrQFT:XXX'),
                    )),
              )
          );*/ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
