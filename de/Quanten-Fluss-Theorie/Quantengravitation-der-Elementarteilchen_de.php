<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:FrQFT:Quantengravitation'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:FrQFT:NeuePhysik:Quantengravitation'); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  // • Online-Infos: http://www.einstein-online.info/vertiefung/quantenG
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{Wirkungsquanten-Impulskegel}',
                    '• Untersuchen, wie sich bei steigender Gravitation und damit verringerndem Gang der Spiralbahnen die Wirkungsquanten-Impulskegel der Vakuum-Elapsonen in deren String in ihrer Lage verändern:',
                    '– Verändern sich die Impulskegel in ihrer Geometrie?',
                    '⋅ Das tun sie, meiner Meinung nach. Die Impulskegel verlassen die Wirkungsquanten auf ihrer Strukturebene zunächst im 45° Winkel mit √2 (1,41-facher) Lichtgeschwindigkeit. Treffen sie auf die umgebende Struktur des Vakuums und seiner unpolarisierten Photonen, dann wird der Impuls auf diese Strukturen übertragen, dabei ständig abgelängt und pflanzt sich auf der Strukturebene der Elementarteilchen effektiv nur mit Lichtgeschwindigkeit fort.',
                    '– Wie ist dieses Einklappen mit der Detektorwellenlänge der Vakuum-Elapsonen im Vakuum korreliert?',
                    '– Was passiert dabei am Ereignishorizont eines Schwarzen Lochs? Ragen die Kegel in das Schwarze Loch hinein?',
                    '\\bold{Gravitonen}',
                    '• Sind die Vakuum-Elapsonen die Gravitonen? Bisher nach meiner Ansicht eher nicht, weil Vakuum-Elapsonen Spin 1 haben sollten und die Gravitonen Spin 2.',
                    '• Die Wirkungsquanten tragen den Spin 2, wie die Gravitonen, wenn ich es richtig sehe.',
                    '• Weitere Gedanken zu den Gravitonen finden sich in der Einleitung unter \\jumpname{OM:FrQFT:Einleitung:Fundierung:Vakuum}.',
                    '\\bold{Aktuelle Fachdiskussion}',
                    '• Die Quantenmechanik ist emergent: Tim Palmer bringt in seinem Beitrag die Unentscheidbarkeit, die Unberechenbarkeit und die Vereinheltichung der Physik zusammen. Er führt darüber die Quantenphysik, die Relativitätstheorie und die Chaos-Theorie näher aneinander heran. \\jump[http://backreaction.blogspot.com/2020/02/guest-post-undecidability.html]{}{Guest Post: “Undecidability, Uncomputability and the Unity of Physics. Part 1.” by Tim Palmer}',
                    '• Wie können wir feststellen, ob die Gravitation quantisiert ist? Und wofür ist das wichtig? Siehe: Ein Stück Schwerkraft. In: Spektrum der Wissenschaft 08/2018. 18-22.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Erklärung der Gravitation in Form der Quantengravitation\\footnote{\\const{FrQFT_g_footnote_text_Quantengravi}} ist eine der sehnlichsten Wünsche'."\n".
                    'der heutigen theoretischen Physik.\\color{*Bearb}{(Verweis auf Hossenfelder Blog und SdW)}'."\n".
                    'Sie steht im Zentrum der Vereinheitlichung der Physik, der Verschmelzung von Quantenphysik\\footnote{\\const{FrQFT_g_footnote_text_Quantenphysik}}'."\n".
                    '(Quantenfeldtheorie\\footnote{\\const{FrQFT_g_footnote_text_QFT}}) und Allgemeiner Relativitätstheorie\\footnote{\\const{FrQFT_g_footnote_text_ART}},'."\n".
                    'von der sich viele Physiker das Verständnis mancher bisher \\jump{OM:FrQFT:NotwenVereinheit}{unerklärlicher Beobachtungen und wichtiger Fragen} erhoffen.'."\n"))),

                  // #!: Wiederholt in "Mechanismus der Gravitation"!
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_GraviMechanismus, array( name => 'OM:FrQFT:Quantengravitation:Vortext:Fig-Gravitation-Masse'))),
                      
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Vortext:XXX', text =>
                                           
                'Notwendige Konkretisierung der Lehrmeinung ⚠️', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Bevor ich zur Vorstellung der Mechanismen und deren Details komme, möchte ich noch einmal kurz darauf hinweisen, dass es einer Konkretisierung der Lehrmeinung bedarf,'."\n".
                    'um sich aus heutiger akademischer Perspektive auf die anschließend beschriebene physikalische Perspektive seriös einzulassen.'."\n".
                    'Die \\jump{OM:FrQFT:Einleitung:Fundierung}{notwendige Konkretisierung der Lehrmeinung} beschreibe ich in der \\jump{OM:FrQFT:Einleitung}{Einleitung} und lege die Annahmen,'."\n".
                    'die meiner neuen Perspektive zugrunde liegen, auf der Seite \\jump{OM:FrQFT:FirstPrinciples}{First-Principles} dar.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Vortext:XXX', text =>
                                           
                'Mehrere Mechanismen führen zur Gravitation', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Eine Kette von aufeinander aufbauenden Mechanismen liefert uns das Verständnis dafür, wie die Quantengravitation zustande kommt.'."\n".
                    'Für den Überblick der Mechanismen, die hier am Wirken sind, beginne ich die Beschreibung beim Elementarteilchen, das angezogen wird,'."\n".
                    'und ende mit dem Ausgangspunkt, dem Ursprung, dieser Kette.'."\n",
                      'Bei der anschließenden detaillierten Beschreibung beginne ich dann in umgekehrter Reihenfolge …'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Eine Beugung von lichtähnlichen Strukturen in Elementarteilchen beschleunigt diese – Lichtablenkung} \\\\'."\n".
                    'Die \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Fig-Gravitation-Masse} veranschaulicht, grob vereinfacht, eine anziehende Zentralmasse \\term{m} und'."\n".
                    'die umgebenden Verhältnisse im Vakuum des neuen Modells, auf die ich gleich noch weiter eingehe.'."\n"))),

                  // array( 'youtube',
                  //   array_merge( $FrQFT_g_youtube_ary_Lepton, array( name => 'OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton'))),
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_Lepton_highRes, array( name => 'OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton',
                                                         text => 'Ein Wirkungsquanten-String eines hypothetischen, geladenen Leptons; ein Elektron oder eines seiner Verwandten.'."\n".
                                                                 'Die Wirkungsquanten sind als rote Kugeln dargestellt, die durch ihre abgestrahlten Impulskegel miteinander Verbunden sind (nicht eingezeichnet). '."\n".
                                                                 'Seine Ladung entsteht durch die ungleiche Dichte der Wirkungsquanten auf dem String.'))),
                      
                  array( 'text', array( text => array(
                    'Oberhalb der anziehenden Zentralmasse befindet sich ein schematisches Elementarteilchen des Modells, in dem lichtähnliche Strukturen zirkulieren (detaillierter in \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton}).'."\n".
                    'Diese lichtähnlichen Strukturen werden, wie von Lichtteilchen (Photonen) in der Allgemeinen Relativitätstheorie bekannt, zur zentralen Masse hin abgelenkt.'."\n".
                    'Ihre Bahn ist also gebeugt.'."\n".
                    'Die Beugung der in ihnen zirkulierenden Strukturen führt zu einer Beschleunigung des angezogenen Elementarteilchens in Richtung der Masse, die der bekannten Gravitation entspricht.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Die Beugung lichtähnlicher Strukturen kommt durch deren Verlangsamung im Gravitationsfeld zustande – Shapiro-Verzögerung} \\\\'."\n".
                    'Die angesprochene Beugung von Licht, oder von dem Licht ähnlichen Strukturen, ergibt sich dadurch, dass deren Ausbreitungsgeschwindigkeit im dreidimensionalen Raum'."\n".
                    'auf der der Masse zugewandten Seite langsamer ist, als auf der von ihr abgewandten Seite (siehe \\jumpname{OM:FrQFT:Quantengravitation:Lichtbeugung:Fig-GravitationPhotonBeugung}).'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Die Verlangsamung lichtähnlicher Strukturen wird durch eine Störung der Lichtbewegung verursacht – Undulation der Lichtbahn} \\\\'."\n".
                    'Anders als in der Allgemeinen Relativitätstheorie wird die Verlangsamung des Lichts, oder ähnlicher Strukturen, durch eine'."\n".
                    'wellenförmige Störung seiner Ausbreitungsbahn verursacht und nicht direkt durch die Krümmung des Raums oder der Raumzeit.'."\n",
                      'Diese wellenförmige Störung der Lichtbahnen, und vergleichbarer Bahnen lichtähnlicher Strukturen des Vakuums in der Umgebung einer Masse,'."\n".
                    'bringt allerdings unterschiedliche Energiedichten des Vakuums hervor, die als Raumzeitkrümmung erscheinen (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Fig-Gravitation-Masse},'."\n".
                    'wellenförmige Erscheinungen im dem Vakuum eingeprägten Gravitationspotenzial; Energiedichtegradient als Gradient der De-Broglie-Frequenz\\footnote{\\const{FrQFT_g_footnote_text_DeBroglieFrequenzWellen}} oder De-Broglie-Wellenlänge).'."\n"))),
                      
                  // array( 'youtube',
                  //   array_merge( $FrQFT_g_youtube_ary_VakuumElapson, array( name => 'OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson'))),
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_VakuumElapson, array( name => 'OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson',
                                                         text => '\\const{FrQFT_g_text_VakuumElapson}'))),
                      
                  array( 'text', array( text => array(
                  '\\condb{Die wellenförmige Störung der Lichtbahn hat ihre Ursache in den rotierenden Impulskegeln der Feinstruktur der Elementarteilchen der gravitativen Masse} \\\\'."\n".
                    'Die gravitativ anziehende Masse besteht aus Elementarteilchen.'."\n".
                    'Die Feinstruktur dieser Elementarteilchen besteht aus Wirkungsquanten (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton}).'."\n".
                    'Auch deren Wirkungsquanten strahlen Impulskegel in den Raum ab (siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung}),'."\n".
                    'wie sie in \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson} dargestellt sind.'."\n",
                      'Die Impulskegel treffen auf Licht oder dem Licht ähnliche Strukturen in ihrer Umgebung und stören deren Bahn wellenförmig (siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}),'."\n".
                    'was deren Verlangsamung zur Folge hat.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Erst die Berücksichtigung der statistischen Verteilung dieser Störung bringt das korrekte Ergebnis hervor} \\\\'."\n".
                    'Analysieren wir die Lichtverlangsamung, die ein einzelnes Elementarteilchen durch seinen gravitativen Effekt in der Umgebung verursacht,'."\n".
                    'dann erhalten wir nicht die Lichtverlangsamung, die beobachtet und in der Allgemeinen Relativitätstheorie vorhergesagt wird.'."\n",
                      'Erst viele in einer Zentralmasse versammelte Elementarteilchen bringen die korrekte Lichtverlangsamung im 3-dimensionalen Raum hervor.'."\n".
                    'Nämlich dann, wenn wir verstehen, dass das Zusammenspiel der wellenförmigen Störungen vieler Elementarteilchen einem statistischen Effekt unterliegt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Vortext:XXX', text =>
                                           
                'Quanten der Gravitation bisher unbeobachtet?', subline =>
                  'Ein Perspektivwechsel')),
                  array( 'text', array( text => array(
                    'Bisher gehen wir in der akademischen Physik davon aus, dass wir keine Phänomene beobachten, die einen direkten Rückschluss auf die Quanten der Gravitation zulassen.'."\n".
                    'Ich bin mittlerweile durch die neue Physik der Quanten-Fluss-Theorie zu dem Schluss gekommen, dass dies nicht stimmt.'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Die zuvor eingeführte \\jump{OM:FrQFT:NeuePhysik:Heisenbergsche-Unschaerferelation}{›Abzählinterpretation der Heisenbergschen Unschärferelation‹}'."\n".
                      'bedeutet in meinen Augen,'."\n".
                      'dass die Elementarteilchen Wirkungsimpulse \\bold{\\term{h}} (Plancksches Wirkungsquantum) als Impulskegel abstrahlen'."\n".
                      '(siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson}), die wir bei ihrer Energie- oder Impulsmessung beobachten und pro Zeit- oder Längeninterval zählen.'."\n",
                        'Genau diese Impulse sind jedoch auch, wie bereits erwähnt und nachfolgend detailliert beschrieben,'."\n".
                      'die Ursache der gravitativen Lichtverlangsamung (gravitative Zeitdilatation\\footnote{\\const{FrQFT_g_footnote_text_ZeitdilatationGrav}}) und Lichtbeugung,'."\n".
                      'die schließlich, aufgrund der neuen Elementarteilchen-String-Struktur, zur Gravitation führen (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Fig-Gravitation-Masse}).'."\n"))),
                      
                  array( 'text', array( text => array(
                    'So gesehen beobachten wir die Impulse der Quanten der Gravitation längst als \\jump{OM:FrQFT:NeuePhysik:Heisenbergsche-Unschaerferelation}{Plancksches Wirkungsquantum},'."\n".
                    'haben sie aber bisher nicht als solche erkannt.'."\n".
                    'Hieran wird wunderbar sichtbar, wie entscheidend Interpretationen und ihre Perspektivwechsel dafür sein können zu beurteilen, was wir schon längst in Händen halten.'."\n",
                      'Durch die ›Abzählinterpretation der Heisenbergschen Unschärferelation‹ wird das Plancksche Wirkungsquantum zum neuen Fundamentalteilchen,'."\n".
                    'zum \\jump{*Wirkungsquanten-Herlei}{Wirkungsquant} \\term{wq} (siehe rote Kugeln in \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton} und \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson}).'."\n".
                    'Diese Wirkungsquanten fügen sich zu den \\jump{OM:FrQFT:Elementarteilchen}{Elementarteilchen-Strings} der Quanten-Fluss-Theorie zusammen.'."\n",
                      'Die von den Wirkungsquanten abgestrahlten Impulskegel in \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson},'."\n".
                    'die entsprechend auch die Wirkungsquanten in \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton} verbinden (nicht eingezeichnet),'."\n".
                    'lösen in benachbarten Elementarteilchen-Strukturen die gravitative Anziehung aus, wie auf dieser Seite gezeigt wird.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Vortext:Graviradiation', text =>
                                           
                'Graviradiation', subline =>
                  'Die Vereinheitlichung der Physik durch eine neue, fundamentale Wechselwirkung')),
                        
                  // #: Ref: *Graviradiation-Einfuehr
                  array( 'text', array( Shape => 'italic', text => array(
                      'Alle uns bekannten Wechselwirkungen sind im mikroskopisch Kleinen auf die neue Wechselwirkung der von mir sogenannten \\bold{Graviradiation}\\hidden{Ref: *Graviradiation-Einfuehr} zurückzuführen.'."\n"))),

                  array( 'text', array( text => array(
                    'Über diese, der ganzen Physik zugrundeliegende Wechselwirkung liefert die Quanten-Fluss-Theorie einen Mechanismus der einen Ansatz'."\n".
                    'zur Vereinheitlichung der Quantenphysik mit der Allgemeinen Relativitätstheorie bietet.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Graviradiation – Eine neue Wechselwirkung} \\\\'."\n".
                    'Ich nenne diese Wechselwirkung Graviradiation.'."\n".
                    'Sie wird durch die Wirkungsquanten-Impulskegel – \\jump{*Wirkungsquanten-virtuelle-Einfuehr}{virtuelle Wirkungsquanten} – vermittelt, die jedes Wirkungsquant aussendet.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Quantenphysik} \\\\'."\n".
                    'Die Graviradiation ist dafür ursächlich, dass die Genauigkeit unserer Beobachtung auf die Heisenbergsche Unschärferelation beschränkt ist,'."\n".
                    'wie ihre Abzählinterpretation deutlich macht.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Vakuum- und Elementarteilchen-Struktur} \\\\'."\n".
                    'Sie ist dafür verantwortlich, dass sich die Bahnen der Wirkungsquanten zu Helixspiralen aufwickeln und zu Elementarteilchen-Strings verbinden  (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson} und \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton}).'."\n".
                    'So zeigt sich dann auch die Struktur des \\jump{OM:FrQFT:Vakuum}{Vakuums} idealisierter Weise als aus \\jump{OM:FrQFT:NeuePhysik:Strings-aus-Wirkungsquanten:WQS-VE}{unpolarisierten Photonen} bestehend.'."\n",
                      'Auch führt sie über seine innere Wechselwirkung dazu, dass das Vakuum – der Raum und die Zeit – seine stabile Dimensionierung erhält.'."\n".
                    'Dies wird näher auf der Seite \\italic{\\jumpname{OM:FrQFT:Gravitation}} ergründet.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Gravitation} \\\\'."\n".
                    'Nicht zuletzt ist sie, wie schon gesagt, für die Emergenz der Quantengravitation verantwortlich.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Phänomen der Dunklen Materie} \\\\'."\n".
                    'Über die Vakuum-Struktur und deren innere Wechselwirkung, durch das in ihr in Form von ungleich verteilter Vakuum-Energiedichte „eingravierte“ Gravitationspotenzial,'."\n".
                    'ist die Graviradiation auch für das'."\n".
                    '\\jump{OM:FrQFT:Quantengravitation:PhaenoDunkMat}{›Phänomen der Dunklen Materie‹} der weit im Raum verteilten, sehr großen Massenansammlungen verantwortlich, wie sich zeigt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Vortext:XXX', text =>
                                           
                'Ansatz der Quantengravitation', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die nachfolgend in erster Näherung hergeleitete ortsübliche Lichtgeschwindigkeit im dreidimensionalen Raum des äußeren Gravitationsfelds einer homogenen Massenkugel'."\n".
                    'entspricht genau der äußeren Schwarzschild-Metrik\\footnote{\\const{FrQFT_g_footnote_text_SchwarzschildMetrik}} als Lösung der Allgemeinen Relativitätstheorie.'."\n",
                      'Der verwendete Ansatz zur quantitativen Beschreibung der Quantengravitation stammt aus dem \\jump{OM:FrQFT:Basisteilchenmodell}{Basisteilchenmodell}\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}.}'."\n".
                    'von Albrecht Giese und verfeinert diesen mit Hilfe der Elementarteilchen-Struktur der Quanten-Fluss-Theorie.'."\n",
                      'Im Zentrum von Gieses Überlegung steht die Idee, dass ein Elementarteilchen, welches eine innere Struktur hat und aus rotierenden, lichtähnlichen Basisteilchen'."\n".
                    'aufgebaut ist, \\jump{OM:FrQFT:Quantengravitation:VereinfModellQGravitation}{Störungswellen} in seine Umgebung aussendet.'."\n".
                    'Diese Störungswellen verlängern den Bewegungspfad von Lichtteilchen – \\jump{*Photonen-Herlei}{Photonen} – oder den der lichtähnlichen Strukturen in anderen Elementarteilchen in ihrem Umfeld.'."\n".
                    'Auf diese Weise \\jump{OM:FrQFT:Quantengravitation:Lichtverlangsamung}{verlangsamt} und \\jump{OM:FrQFT:Quantengravitation:Lichtbeugung}{beugt}'."\n".
                    'sich die Bewegung lichtähnlicher Strukturen im Raum, der eine gravitative Masse umgibt.'."\n".
                    'Befinden sich also Materie-Elementarteilchen in der Umgebung, bewegen diese sich auf die anziehende Masse zu, weil sie nach Giese ja aus lichtähnlichen Basisteilchen bestehen.'."\n",
                      'In der Quanten-Fluss-Theorie werden Gieses Basisteilchen nun durch \\jump{*Wirkungsquanten-Herlei}{Wirkungsquanten} ersetzt, die zu geschlossenen Strings verbunden sind.'."\n".
                    'Die Störungswellen sind die Wirkungsquanten-Impulskegel (virtuelle Wirkungsquanten) der neuen Graviradiation.'."\n".
                    'Die Quanten-Fluss-Theorie verfeinert also seinen Ansatz durch das neue Modell der Elementarteilchen aus Wirkungsquanten-Strings, wie zum Beispiel bei \\jump{OM:FrQFT:Lepton}{Leptonen} (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton}).'."\n".
                    'Durch die hier entwickelten Details werden auch Eigenschaften von Gieses Erklärungsansatz verständlich, die für mich bei ihm offen bleiben.'."\n"))),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellQGravitation'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

          <!  • Vereinfachtes Modell der Quantengravitation  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Quantengravitation:VereinfModellQGravitation',
              'Wirkungsquanten-Impulskegel wirken als Störungswellen', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation', type => 'back'),
                    )),
                      
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_GraviLeptonWirkung, array( name => 'OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung'))),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '• Film des simplifizierten Wirkungsquanten-Strings erstellen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\\const{FrQFT_g_text_HinwKosBeob}'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellQGravitation:VereinfString', text =>
                                           
                'Vereinfachter Wirkungsquanten-String', subline =>
                  'Ein kreisförmiger Ring aus Wirkungsquanten')),
                  // #: Ref: *Wirkungsquanten-virtuelle-Einfuehr
                  array( 'text', array( text => array(
                    'Vereinfachen wir den Wirkungsquanten-String eines \\jump{OM:FrQFT:Elementarteilchen:Elementarteilchen-mit-Ruhemasse}{Materie-Elementarteilchens},'."\n".
                    'so können wir uns diesen als Ring aus Wirkungsquanten vorstellen, welcher mit \\jump{*Alterung-Implem}{Lichtgeschwindigkeit}'."\n".
                    'rotiert (siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung}, obere und untere Mitte).'."\n".
                    'Die Wirkungsquanten eines solchen, simplifizierten Strings strahlen durch ihre \\jump{*Wirkungsquanten-Impulskegel-Herlei}{Wirkungsquanten-Impulskegel}'."\n".
                    'Störungswellen in Form von Impulsen senkrecht zum Ring'."\n".
                    'in ihr Umfeld ab, von mir \\italic{virtuelle Wirkungsquanten}\\hidden{Ref: *Wirkungsquanten-virtuelle-Einfuehr} genannt (siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung}, unten).'."\n",
                      'Die virtuellen Wirkungsquanten sind als Dichtewellen in den Wirkungsquanten des \\jump{*Bewegungsraum-Herlei}{Bewegungsraums} der Quanten-Fluss-Theorie zu verstehen.'."\n".
                    'Diese vermitteln die neue Wechselwirkung der \\jump{*Graviradiation-Einfuehr}{Graviradiation}, was bedeutet, dass sie die makroskopische Geschwindigkeit anderer Wirkungsquanten'."\n".
                    'in ihrem Umfeld durch eine wellenförmige Ablenkung (Undulation) verringern und deren Bahn oft auch insgesamt ablenken, wie wir sehen werden (siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, links).'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellQGravitation:WarumImpulskegel', text =>
                                       
                'Warum Impulskegel?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wie Giese an anderer Stelle in seinem Basisteilchenmodell ausführt, verändert sich die räumliche Geometrie der Ausbreitung von'."\n".
                    'lichtschnellen Wechselwirkungsteilchen, wenn das abstrahlende Teilchen sich bewegt.\\footnote{Vgl. \\cite{Giese:RelaContra2009}.}'."\n".
                    'Die Veränderung vollzieht sich dabei in Abhängigkeit von der Bewegungsgeschwindigkeit so, dass sich das'."\n".
                    'abgestrahlte Feld in Bewegungsrichtung umso mehr abflacht, also von der Kugel zum sogenannten Heaviside-Ellipsoid verformt, je größer die Geschwindigkeit ist.\\footnote{\\const{FrQFT_g_footnote_text_LorentzKontrFelder}}'."\n".
                    'Dies entspricht der \\jump{OM:VRT:Laengenkontraktion-Bewegung}{Lorentzkontraktion} (Längenkontraktion) der Relativitätstheorie.'."\n",
                      'Erreicht das abstrahlende Teilchen Lichtgeschwindigkeit, wie die simplifizierten Wirkungsquanten im vereinfachten Elementarteilchen-String,'."\n".
                    'dann werden effektiv nur noch Wechselwirkungsteilchen senkrecht zur Bewegungsrichtung ausgesandt.\\footnote[*Entwick]{\\color{*Entwick}{Dies muss an anderer Stelle noch explizit aus Gieses Überlegungen hergeleitet werden. Auch Oliver Heaviside soll dazu gearbeitet haben (siehe \\jump[https://en.wikisource.org/w/index.php?title=Motion_of_Electrification_through_a_Dielectric&oldid=4808645]{}{Motion of Electrification through a Dielectric}).}}'."\n".
                    'Deutlich wird dies auch an folgender Überlegung:'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Flacht sich die Struktur eines Elementarteilchens immer weiter ab, dann bewegen sich die Wechselwirkungspole, die für den Zusammenhalt seiner Struktur sorgen,'."\n".
                      'immer weiter in die zentrale Ebene senkrecht zu seiner Bewegungsrichtung.'."\n".
                      'Sind diese Pole nun so gut wie auf dieser Ebene angekommen, dann können sich die Wechselwirkungsteilchen zwischen ihnen auch nur in dieser Ebene'."\n".
                      'und auf diese Weise dann auch nur in Richtung dieser Ebene in den Raum hinaus bewegen.'."\n",
                        'Dies bedeutet eine zur Bewegungsrichtung der Wirkungsquanten senkrechte und zu jedem Zeitpunkt ringförmige Abstrahlung ihrer Wechselwirkungsteilchen in den Raum.'."\n"))),

                  array( 'text', array( text => array(
                    'So ergibt sich dann die Form eines Impulskegels für die Abstrahlung der Wirkungsquanten:'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Eine senkrechte Ringform der Abstrahlung der virtuellen Wirkungsquanten je Zeitpunkt heißt eine kegeloberflächenförmige Struktur ihrer Ausbreitung'."\n".
                      'um die Bahn des Strings in der Zeit.'."\n".
                      'Und dieser Kegel hat einen Öffnungswinkel von 90°, denn das abstrahlende Teilchen hat die gleiche Geschwindigkeit, wie seine Abstrahlung.'."\n"))),

                  array( 'text', array( text => array(
                    'Dementsprechend hat dann auch das von einem einzelnen Photon, einem Lichtteilchen, abgestrahlte elektromagnetische Feld im zeitlichen Verlauf die Form einer Kegeloberfläche.\\color{*Bearb}{(Verweis)}'."\n"))),
                      
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellQGravitation:WQIUmgekehrtProport', text =>
                                           
                'Wirkungsquanten-Impulse verringern ihre Intensität im Raum mit \\term{1/r}', subline =>
                  '')),
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '• Die gute Beschreibung, die an anderer Stelle entfernt wurde, hier einbauen:',
                    '– Ungewöhnlicherweise nimmt die Impulsintensität \\term{_{r}ii} der störenden Wirkung der Wirkungsquanten-Impulskegel bei größerem Abstand umgekehrtproportional zum Abstand \\term{r} vom String ab. Dieses Phänomen entsteht, weil die Impulskegel der Wirkungsquanten ringförmig abgestrahlt werden und sich im Verlauf der Zeit zu einem Impulskegel formen (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson}).',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Abnahme ihrer Impulsintensität im Raum hat bei Wirkungsquanten-Impulsen eine Besonderheit:'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Eine ringförmige Ausbreitung bedeutet, eine Abnahme der Impulsintensität zum String mit \\term{1/r}.'."\n".
                      'Das kommt, weil die Dichte der Wechselwirkungsteilchen im Ring  mit \\term{1/r} zum String abnimmt, denn der Umfang des Rings nimmt mit \\term{r} zu,'."\n".
                      'während die Anzahl der Wechselwirkungsteilchen im Ring gleich bleibt.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Damit verhält sich die Graviradiation anders als alle anderen Wechselwirkungen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellQGravitation:XXX', text =>
                                           
                'Unterschied von Wechselwirkungen mit der Intensitätsabnahme von \\term{1/r^^{2}} zu \\term{1/r}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Bei einer Wechselwirkung, deren Stärke mit \\term{1/r^^{2}} mit dem Abstand \\term{r} abnimmt, werden die Wechselwirkungsteilchen zu jedem Zeitpunkt'."\n".
                    'in Form von Kugeloberflächen – sphärisch – in den Raum abgestrahlt.'."\n".
                    'In der laufenden Zeit ergibt sich eine kugelförmige Abstrahlung.'."\n",
                      'Da dies auch bedeutet, die Abstrahlung erfolgt in alle Richtungen im Raum, wird ein in der Nähe befindliches Objekt quasi zu jedem Zeitpunkt'."\n".
                    'von den Wechselwirkungsteilchen getroffen.'."\n".
                    'Alle bisher bekannten Wechselwirkungen, wie die elektromagnetische, die schwache, die starke und die Gravitation, sind von dieser Art.'."\n",
                      'Die Wechselwirkung eines einzelnen Wirkungsquants ist anders:'."\n".
                    'Bei seiner Wechselwirkung, deren Stärke mit \\term{1/r} zum Abstand \\term{r} vom String abnimmt, werden die Wechselwirkungsteilchen zu jedem Zeitpunkt'."\n".
                    'in Form von Ringen – im zeitlichen Verlauf kegelförmig – abgestrahlt.'."\n".
                    'Dies bedeutet, die Wechselwirkung wird nicht(!) in alle Richtungen abgestrahlt.'."\n".
                    'Ein in der Nähe befindliches Objekt wird nur von den Wechselwirkungsteilchen getroffen, wenn es zu einem Zeitpunkt vom Kegel gestreift wird.'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung'),
                    )),
              )
          ); ?>


		    	<!  • Lichtverlangsamung  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Quantengravitation:Lichtverlangsamung',
              'Aus virtuellen Wirkungsquanten bestehende Störungswellen erzeugen die Shapiro-Verzögerung des Lichts', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellQGravitation', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{Grundlage dieser Berechnung}',
                    '• Darauf hinweisen, dass diese Berechnungen im Rahmen des Wirkungsquanten-Bewegungsraums erfolgen und nicht im Rahmen des Licht-Bewegungsraums. Daher ergibt sich die gravitative Rotverschiebung und Zeitdilatation erst korrekt, wenn das Verhältnis von tangentialer und radialer Lichtgeschwindigkeit im hier verwendeten Wirkungsquanten-Bewegungsraum im Verhältnis zur \\jump{OM:FrQFT:Quantengravitation:Laengenkontraktion}{gravitativen Längenkontraktion} berücksichtigt wird. Im Licht-Bewegungsraum ist dann in Bezug auf die LG generell \\term{p = 0} und in Bezug auf die Rotverschiebung für den tangentialen Fall \\term{p = 0} und im radialen Fall \\term{p = 1/2} zu setzen, so dass sich die korrekte Rotverschiebungsformel\\footnote[*Bearb]{\\const{FrQFT_g_footnote_text_PhotonFrequenzGravi}} ergibt.',
                    '• Der Berechnung liegen die Formeln \\term{E_{ele} = h⋅f_{ele}} und \\term{E_{ele} = ħ⋅ω_{ele}} der Quantenphysik für die Energie eines Elementarteilchens zugrunde.',
                    '• Aus der Relativitätstheorie wird allerdings die Allgemeingültigkeit der Formel \\term{E = m⋅c^^{2}} vorausgesetzt und findet dann natürlich auch Anwendung.',
                    '– Die Proportionalität von Energie und Masse ist eine direkte Schlussfolgerung der FrQFT, die sich aus der Annahme (\\jump{OM:FrQFT:FirstPrinciples}{Postulat} bzw. Axiom) ergibt, dass Wirkungsquanten sowohl Energieeinheiten als auch Masseneinheiten sind (absolut nur auf der untersten Strukturebene des analysierten Modells)! Dies setzt ein konstantes Verhältnis voraus, welches nach unseren Beobachtungen das Quadrat der Lichtgeschwindigkeit \\term{c^^{2}} der bekannten Formel \\term{E = m⋅c^^{2}} ist.(Verweis auf Wikipedia: ›Äquivalenz von Masse und Energie‹, Überblick und Beispiele, Vernichtungsstrahlung. Dies ist keine relativistisch interpretierte Beobachtung, sondern eine quantenphysikalisch interpretierte!)',
                    '– Ergibt sich die Formel \\term{E = m⋅c^^{2}} auch aus der Quantenphysik? Ja, wie gerade bemerkt, bei der Paarvernichtung.',
                    '– Könnte Formel \\term{E = m⋅c^^{2}} auch vermieden werden?',
                    '• Diese drei Formeln reichen aus, zusammen mit der Struktur des Elementarteilchen-Modells der FrQFT und gewisser Vereinfachungen dieses Modells zuzüglich einer simplen Näherung für größere Abstände sowie einer statistischen Näherung für größere Massen, um die gravitative Lichtablenkung (Gravitation) eines einzelnen Elementarteilchens und die gravitative Lichtablenkung (Gravitation) einer Zentralmasse aus Elementarteilchen korrekt so herzuleiten, wie diese in der Schwarzschild-Metrik der Allgemeinen Relativitätstheorie beschrieben ist.',
                    '\\bold{Mit Raimund Welsch zu klärende Fragen}',
                    '• Ist die Standardabweichung wirklich das, was hier im Moment angewendet wird?',
                    '• Wenn ja, warum darf die Standardabweichung hier angewendet werden?',
                    '\\bold{Hinweise}',
                    '• Eine Herleitung der Lichtverlangsamung findet sich auch in \\jump[http://www.d1heidorn.homepage.t-online.de/Physik/Variables_c/Variables_c.html]{}{Variable Lichtgeschwindigkeit in der Allgemeinen Relativitätstheorie}, siehe auch Datei "Variable Lichtgeschwindigkeit in der Allgemeinen Relativitätstheorie.pdf".',
                    '• Die Längenkontraktion von Elementarteilchen im Gravitationsfeld wird auch hier angesprochen oder soll dort angesprochen werden: \\italic{\\jumpname{OM:FrQFT:Gravitation:Laengenkontraktion-im-Gravitationsfeld}} und \\italic{\\jumpname{OM:VRT:Laengenkontraktion-Bewegung}}'
                    ))),
                                            
                  array( 'text', array( text => array(
                    '\\const{FrQFT_g_text_HinwKosBeob}'."\n"))),
                  array( 'text', array( text => array(
                    'In der folgenden ersten Näherung bleibe ich im Denkschema von Giese:'."\n",
                      'Ich betrachte nur den Einfluss der \\jump{*Wirkungsquanten-Herlei}{Wirkungsquanten} eines simplifizierten Strings eines Materie-Elementarteilchens, eines Leptonen-Strings.'."\n".
                    'Dabei lasse ich also die Wirkungsquanten des umgebenden \\jump{OM:FrQFT:Vakuum}{Vakuums} außer Acht und gehe auch davon aus, dass sich die Wirkungsquanten der vorbeifliegenden \\jump{*Photonen-Herlei}{Photonen} bereits auf Spiralbahnen bewegen.'."\n".
                    'Die Photonen werden also simplifiziert und quasi wie sich mit Lichtgeschwindigkeit \\term{_{0}c} bewegende einzelne Wirkungsquanten behandelt.'."\n"))),
                      
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_GraviLeptonLichtbahn, array( name => 'OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn'))),
                      
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Virtuelle Wirkungsquanten-Impulse als Störungswellen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Störungswirkung der \\jump{*Wirkungsquanten-virtuelle-Einfuehr}{virtuellen Wirkungsquanten} können wir uns nach Giese aus zwei Komponenten bestehend vorstellen:'."\n",
                      'Zunächst wirkt die Störung immer in radialer Richtung, ausgehend von ihrem Entstehungsort auf dem String (siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung}, Mitte, und \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, links).'."\n".
                    'Die Störungswellen sind Longitudinalwellen\\footnote{Internet: \\\\ Vgl. \\cite{wiki:Longitudinalwelle:2019}.}, breiten sich also ähnlich wie Schallwellen aus.\\footnote[*Entwick]{\\color{*Entwick}{Wäre also interessant, ob es in der Akustik einen ähnlichen Effekt gibt. Ich habe etwas in dieser Richtung mal im Spektrum der Wissenschaft gelesen. \\color{*Bearb}{(Artikel heraussuchen.)}}}'."\n".
                    'Die Störung hat einen Aspekt, der sich auf die tangentiale Komponente \\term{_{r,tan}c}, und einen anderen, der sich auf die radiale Komponente \\term{_{r,rad}c} der verlangsamten effektiven Photonen-Geschwindigkeit \\term{_{r}c} auswirkt'."\n".
                    '(siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, Mitte und rechts).\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier Abbildungen C2, C3, S. 21.}'."\n",
                      'Je nach Bewegungsrichtung oder -winkel des Photons relativ zur Verbindungslinie zwischen dem Zentrum des graviradiativ wirkenden Elementarteilchens und des Photons,'."\n".
                    'wird das Photon entsprechend seiner tangentialen und radialen Bewegungsanteile verlangsamt.'."\n".
                    'Dies kommt, weil die virtuellen Wirkungsquanten-Impulse der Graviradiationsquelle das vorbeifliegende Photon in seiner Bewegung stören'."\n".
                    '(siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, links).\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier Abbildungen C1, S. 20.}'."\n".
                    'Nach dem Basisteilchenmodell von Giese bewegt sich das Photon durch diese Störung auf einem welligen, ondulierten Pfad, wodurch sich seine effektive Bahngeschwindigkeit reduziert.'."\n",
                      'Wie wir später noch sehen werden, hat dies auch die bekannte \\jump{OM:FrQFT:Quantengravitation:Lichtbeugung}{Lichtbeugung} der Gravitation zur Folge.'."\n",
                      'Aus Sicht der Quanten-Fluss-Theorie möchte ich hier kurz eine eingeschobene Bemerkung machen, was in einer detaillierten Betrachtung, ohne Simplifizierung, passiert:'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Der durch die Störung welligere, stärker ondulierte Pfad des Lichts, des hier erörterten Bassisteilchenmodells Gieses, stellt sich in der Quanten-Fluss-Theorie'."\n".
                      'bei mehr Detail als engere Wicklung der \\jump{OM:FrQFT:ZeitAlterungFrequenz:Fig-Elapson}{Helixspiralbahn der Wirkungsquanten} des Photons dar (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson}).'."\n"))),
                      
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Formalismus', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die von mir nachfolgend benutzte \\jump{OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung:Nota}{Notation} der tiefgestellten Zeichen vor den Variablen drückt den '."\n".
                    'Ort der Beobachtung aus Sicht eines \\jump{*KosmBeob-Herlei}{kosmischen Beobachters} sowie die Richtung der Lichtbewegung aus.'."\n".
                    'Sie läuft nach dem selben Schema wie im Abschnitt \\italic{\\jumpname{OM:FrQFT:ZeitAlterungFrequenz:Alterung}}.'."\n",
                      'Alle Bewegungen beziehen sich hier auf die \\jump{OM:FrQFT:ZeitAlterungFrequenz:Zeit}{unverzerrte Wirkungsquanten-Struktur} des Kosmos und '."\n".
                    'nicht auf den \\jump{OM:FrQFT:ZeitAlterungFrequenz:Alterung}{verzerrten, strukturierten Raum}, des Kosmos, also nicht auf die gekrümmte Raumzeit\\footnote{\\const{FrQFT_g_footnote_text_RZKruem}} der Allgemeinen Relativitätstheorie.'."\n".
                    'Der kosmische Beobachter befindet sich in der hier untersuchten Schwarzschild-Metrik also quasi im Unendlichen, wie sich zeigt, wo der Raum unverzerrt, nicht gekrümmt, ist.'."\n",
                      'Die sich ergebende reduzierte Lichtgeschwindigkeit\\footnote{\\const{FrQFT_g_footnote_text_LG}} im dreidimensionalen Raum ist vom Ort und von ihrer Richtung abhängig wie wir sehen werden.'."\n".
                    'In der Quanten-Fluss-Theorie zeigt sich die Raumzeitkrümmung in einer \\jump{OM:FrQFT:Gravitation:Laengenkontraktion-im-Gravitationsfeld}{realen Verzerrung des strukturierten Raums}'."\n".
                    'in Bezug auf die \\jump{OM:FrQFT:ZeitAlterungFrequenz:Alterung}{Wirkunsgquanten-Struktur} des Kosmos.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Tangentiale Komponente der Lichtgeschwindigkeit', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die zum Zentrum der Masse radiale Störung der tangentialen Komponente \\term{_{r,tan}c} der Lichtgeschwindigkeit beim Radius \\term{r} ergibt sich durch die so ausgelöste zusätzliche'."\n".
                    'radiale Bewegung \\term{±v_{abl}} des Photons, die seine tangentiale Geschwindigkeit, aufgrund der eigentlichen Konstanz der Lichtgeschwindigkeit \\term{_{0}c}, verringert'."\n".
                    '(siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, Mitte).\\footnote{Hier wird in Polarkoordinaten gedacht: Die tangentiale Koordinate entspricht der Komponente der Lichtbewegung, welche sich nur im Kreis um die Quelle bewegt, die dann nur transversal beeinflusst wird.}'."\n",
                      'Hierdurch wird das Licht auf einen wellenförmigen, ondulierten Pfad gezwungen, der seinen Weg verlängert und so seine effektive Geschwindigkeit reduziert:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r,tan}c_{\pm}}  =  \sqrt{ {{_{\lowZero}c}^{2}} - (\pm {_{r}v_{abl}})^{2} }  }'),
                      array( display => 'off', latex => '{  \Rightarrow  {_{r,tan}c}  =  \sqrt{ {_{\lowZero}c}^{2} - {_{r}v_{abl}^{2}} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r,tan}c}  =  {_{\lowZero}c} \cdot \sqrt{ 1 - \frac{ {_{r}v_{abl}^{2}} }{ {_{\lowZero}c}^{2} } }  }',
                                               latex_if_visible => '{  \Leftrightarrow  {_{r,tan}c}  =  {_{\lowZero}c} \cdot \sqrt{ 1 - \frac{ {_{r}v_{abl}^{2}} }{ {_{\lowZero}c}^{2} } }  }',
                                               footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'Giese:TheOrigOfGravity2011')).', Appendix C Variation in the Speed of Light, S. 19-22, hier Formel C.2, S. 21.',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff-tan', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff-tan}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Bei einer zeitlichen Mittelung zwischen den beiden Fällen \\term{+v_{abl}} und \\term{–v_{abl}} verändert sich das Ergebnis von \\term{_{r,tan}c}'."\n".
                    'gegenüber \\term{_{r,tan}c_{±}} nicht, weil das Vorzeichen von \\term{±v_{abl}} durch das Quadrat keine Bedeutung besitzt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Radiale Komponente der Lichtgeschwindigkeit', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Anders ist dies im Fall der radialen Komponente der Lichtgeschwindigkeit \\term{_{r,rad}c}:'."\n",
                      'Die radiale Störung der radialen Komponente der Lichtgeschwindigkeit ergibt sich aus ihrer longitudinalen Stauchung und Streckung'."\n".
                    '\\term{±v_{abl}} (siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, links).'."\n".
                    'Diese Stauchung und Streckung prägt dem Pfad eine wellenförmige, ondulierte Veränderung des Wegs in seiner Bewegungsrichtung auf:\\footnote{Hier wird in Polarkoordinaten gedacht: Die radiale Koordinate entspricht der Komponente der Lichtbewegung, welche sich nur in Richtung Quelle oder von ihr weg bewegt, welche dann nur longitudinal beeinflusst wird.}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r,rad}c_{\pm}}  =  {_{\lowZero}c} \pm {_{r}v_{abl}}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Im zeitlichen Mittel der beiden Fälle \\term{+v_{abl}} und \\term{–v_{abl}} bedeutet dies eine Verringerung der radialen Komponente der Lichtgeschwindigkeit \\term{_{r,rad}c}, wie wir gleich sehen werden.'."\n",
                      'Zur Berechnung des zeitlichen Mittelwerts können wir das Geschehen als Prozess denken:'."\n".
                    'Demnach ist der Fortgang des Prozesses, also seine \\jump{OM:FrQFT:ZeitAlterungFrequenz:Alterung}{Alterung} \\term{_{r,rad}a_{ph}},'."\n".
                    'im Folgenden kurz als \\term{t} bezeichnet, dann gleich, wenn das Licht, egal wie schnell es sich auf seinem ondulierten Pfad im Raum bewegt, die gleiche Strecke'."\n".
                    'auf seiner effektiven Bahn zurücklegt; in unserem Fall \\term{_{r,rad}s_{ph}} als konstant angenommene Hilfsstrecke, folgend kurz als \\term{s_{ph}} bezeichnet.'."\n",
                    //-- 'Die Verlängerung des Pfads durch die Störung wird hierbei als innere Veränderung des Photons verstanden.'."\n",
                      'Wenn \\term{s_{ph}} also die Strecke ist, die das Licht für den kosmischen Beobachter zurücklegt,'."\n".
                    'und \\term{t} das ortsabhängige Voranschreiten des Prozesses, dann ergibt sich für \\term{_{r,rad}c}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r,rad}c}  =  \frac{ {s_{ph}} }{ t }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ {s_{ph}} }{ {_{r,rad}c} }  }'),
                      array( display => 'off', latex => '{  \Rightarrow  t_{\pm}  =  \frac{ {s_{ph}} }{ {_{r,rad}c_{\pm}} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  t_{\pm}  =  \frac{ {s_{ph}} }{ {_{\lowZero}c} \pm {_{r}v_{abl}} }  }',
                                               latex_if_visible => '{  \Leftrightarrow  t_{\pm}  =  \frac{ {s_{ph}} }{ {_{\lowZero}c} \pm {_{r}v_{abl}} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier ist das Vorzeichen von \\term{±v_{abl}} von entscheidender Bedeutung.'."\n",
                      'Das zeitliche Mittel ist dann:\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier S. 21.}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                       array( display => 'on',  latex => '{  t  =  \frac{ t_{-} + t_{+} }{ 2 }  }',
                                                footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'Giese:TheOrigOfGravity2011')).', Appendix C Variation in the Speed of Light, S. 19-22, hier Formel C.3, S. 21.'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ 1 }{ 2 } \cdot \left( \frac{ {s_{ph}} }{ {_{\lowZero}c} - {_{r}v_{abl}} } + \frac{ {s_{ph}} }{ {_{\lowZero}c} + {_{r}v_{abl}} } \right)  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ 1 }{ 2 } \cdot \left( \frac{ {s_{ph}} \cdot \left( {_{\lowZero}c} + {_{r}v_{abl}} \right) }{ \left( {_{\lowZero}c} - {_{r}v_{abl}} \right) \cdot \left( {_{\lowZero}c} + {_{r}v_{abl}} \right) } \\\ \qquad\qquad\qquad\qquad + \frac{ {s_{ph}} \cdot \left( {_{\lowZero}c} - {_{r}v_{abl}} \right) }{ \left( {_{\lowZero}c} + {_{r}v_{abl}} \right) \cdot \left( {_{\lowZero}c} - {_{r}v_{abl}} \right)} \right)  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ 1 }{ 2 } \cdot \left( \frac{ {s_{ph}} \cdot \left( {_{\lowZero}c} + {_{r}v_{abl}} \right) }{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} } \\\ \qquad\qquad\qquad\qquad + \frac{ {s_{ph}} \cdot \left( {_{\lowZero}c} - {_{r}v_{abl}} \right) }{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} } \right)  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ {s_{ph}} }{ 2 } \cdot \frac{ \left( {_{\lowZero}c} + {_{r}v_{abl}} \right) + \left( {_{\lowZero}c} - {_{r}v_{abl}} \right) }{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} }  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  {s_{ph}} \cdot \frac{ {_{\lowZero}c} }{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} }  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ {s_{ph}} }{ \frac{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} }{ {_{\lowZero}c} } }  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  \frac{ {s_{ph}} }{ t }  =  \frac{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} }{ {_{\lowZero}c} }  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  {_{r,rad}c}  =  \frac{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} }{ {_{\lowZero}c} }  }',
                                                footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'Giese:TheOrigOfGravity2011')).', Appendix C Variation in the Speed of Light, S. 19-22, hier Formel C.4, S. 21.'),
                       array( display => 'on',  latex => '{  \Leftrightarrow  {_{r,rad}c}  =  {_{\lowZero}c} \cdot \left( 1 - \frac{ {_{r}v_{abl}^{2}} }{ {_{\lowZero}c^{2}} } \right)  }',
                                                footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'Giese:TheOrigOfGravity2011')).', Appendix C Variation in the Speed of Light, S. 19-22, hier Formel C.4, S. 21.',
                                                label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff-rad', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff-rad}', label_incr => true),
                    ))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Zusammenfassung der tangentialen und radialen Komponente', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wenn wir die Formeln \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff-tan} und \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff-rad} vergleichen, fällt uns deren Ähnlichkeit auf.'."\n".
                    'Beide Formeln lassen sich zusammenfassen, wenn wir eine Potenz \\term{p} einführen, die wir für die tangentiale Komponente zu \\term{p = ½}'."\n".
                    'und für die radiale zu \\term{p = 1} setzen:\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier S. 22.}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r,p}c}  =  {_{\lowZero}c} \cdot \left( 1 - \frac{ {_{r}v_{abl}^{2}} }{ {_{\lowZero}c^{2}} } \right)^{p}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff}', label_incr => true),
                    ))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Störende Wirkung der virtuellen Wirkungsquanten', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(Der effektive Störimpuls)} Die effektiv störende Wirkung \\term{_{r}p_{abl}} des Stroms der eintreffenden virtuellen Wirkungsquanten in'."\n".
                    'den \\jump{OM:FrQFT:Quantengravitation:VereinfModellQGravitation:WarumImpulskegel}{Impulskegeln} hat, nach Analyse der \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung}, die nachfolgend beschriebenen Eigenschaften.'."\n".
                    'Wie wir im unteren Teil der Abbildung sehen, haben die Impulskegel eine Amplitude, die mit der Entfernung abfällt,'."\n".
                    'eine Frequenz und eine Breite:'."\n"))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Die Ausgangsamplitude soll die Wirkung \\term{h} eines Wirkungsquants sein.',
                        'Die Amplitude soll sich beim Abstand \\term{r} vom String \\jump{OM:FrQFT:Quantengravitation:VereinfModellQGravitation:WQIUmgekehrtProport}{umgekehrt proportional} mit \\term{1/r} verringern. Diese \\jump{OM:FrQFT:Quantengravitation:VereinfModellQGravitation}{ungewöhnliche Eigenschaft} wurde zuvor schon erklärt.',
                        'Die Detektor-Frequenz der eintreffenden virtuellen Wirkungsquanten ist offensichtlich die gleiche, wie die Detektor-Frequenz der sie aussendenden Wirkungsquanten auf dem String, also gilt: \\term{f_{ele,vwq} = f_{wq}} .',
                        '\\color{*Bearb}{(Die Einwirkungsdauer (Einwirkdauer?) \term{T_{kegel}} der sich drehenden Kegelwand eines Wirkungsquants.)} Der Breitenfaktor \term{T_{kegel}} der Impulse hängt davon ab, wie schnell die Impulskegel sich hin- und wegdrehen. Denn rotiert der String doppelt so schnell, dann haben die Impulskegel nur die halbe Zeit auf das vorbeifliegende Licht einzuwirken. Dafür kommen sie doppelt so häufig in der selben Zeit vorbei, was aber schon in der Detektor-Frequenz berücksichtigt ist. Die Drehung der Impulskegel entspricht ihrer Winkelgeschwindigkeit \\term{ω_{ele}}, die bei konstanter Lichtgeschwindigkeit \\term{_{0}c = ω_{ele} ⋅ r_{ele}} der Wirkungsquanten auf dem String bei geringerem Radius \\term{r_{ele}} umgekehrtproportional zunimmt.',
                    ))),
                  array( 'text', array( text => array(
                    'Die effektiv störende Wirkung ist also dem folgenden Produkt proportional:'."\n"))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(\\bold{Untersuchung – Perspektive Ele-Ebene:}'."\n".
                    'Die Wirkungsquanten-Detektorfrequenz \\term{f_{ele,vwq}} sollte nun die Rotationsfrequenz \\term{f_{ele}} sein.'."\n".
                    'Die Einwirkungsdauer (Einwirkdauer?) ist weiterhin nur von der Dauer einer Rotation abhängig, bleibt also \\term{T_{kegel}}.'."\n".
                    'Die Amplitude ist nunmehr allerdings nicht einfach nur \\term{h}, sondern sein Vielfaches proportional zur Energie des Elementarteilchens,'."\n".
                    'entsprechend der Vorstellung, wenn es bei einem Wirkungsquantum mit konstanter Energie \\term{h} ist,'."\n".
                    'dann muss es bei einem Elementarteilchen ein entsprechendes Vielfaches \\term{n_{ele,wq}} der Energie eines Wirkungsquants sein.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX)}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  h  \mapsto  n_{ele,wq} \cdot h  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.Ele-Eb', label_incr => false),
                      array( display => 'on',  latex => '{  {_{r}p_{abl}}  \sim  \frac{ n_{ele,wq} \cdot h \cdot T_{kegel} \cdot f_{ele} }{ r }  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.Ele-Eb', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{abl}}  =  g_{h} \cdot \frac{ n_{ele,wq} \cdot h \cdot T_{kegel} \cdot f_{ele} }{ r }  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.Ele-Eb', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}p_{abl}}  =  g_{h} \cdot \frac{ h \cdot T_{kegel} \cdot f_{ele,vwq} }{ r }  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.Ele-Eb', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(———)}'."\n"))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(\\bold{Untersuchung – Perspektive WQ_{2}-Ebene:}'."\n".
                    'Hier wird nun unterstellt, dass sich die Wirkungsquanten ein Mal um sich selber drehen, wenn sie eine Wirkungsquanten-Position weiter rotieren.'."\n".
                    'Ist das realistisch möglich?'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX)}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{ele,vwq}  \mapsto  f_{vwq_{2}}  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.WQ_{2}-Eb', label_incr => false),
                      array( display => 'on',  latex => '{  h  \mapsto  \frac{ h }{ n_{wq_{1},wq_{2}} }  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.WQ_{2}-Eb', label_incr => false),
                      array( display => 'on',  latex => '{  \frac{ f_{vwq_{2}} }{ f_{ele,vwq} }  =  n_{wq_{1},wq_{2}}  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.WQ_{2}-Eb', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f_{vwq_{2}}  =  n_{wq_{1},wq_{2}} \cdot f_{ele,vwq}  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.WQ_{2}-Eb', label_incr => false),
                      array( display => 'on',  latex => '{  {_{r}p_{abl}}  \sim  \frac{ \frac{ h }{ n_{wq_{1},wq_{2}} } \cdot T_{kegel} \cdot f_{vwq_{2}} }{ r }  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.WQ_{2}-Eb', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}p_{abl}}  \sim  \frac{ \frac{ h }{ n_{wq_{1},wq_{2}} } \cdot T_{kegel} \cdot n_{wq_{1},wq_{2}} \cdot f_{ele,vwq} }{ r }  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.WQ_{2}-Eb', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}p_{abl}}  \sim  \frac{ h \cdot T_{kegel} \cdot f_{ele,vwq} }{ r }  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.WQ_{2}-Eb', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{abl}}  =  g_{h} \cdot \frac{ h \cdot T_{kegel} \cdot f_{ele,vwq} }{ r }  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.WQ_{2}-Eb', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(———)}'."\n"))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(\\bold{Untersuchung – \\term{f_{ele,vwq} = f_{vwq}}:}'."\n".
                    'Gibt es einen Unterschied zwischen der Abstrahlungsfrequenz der virtuellen Wirkungsquanten und deren innerer Frequenz?'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX)}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{ele,vwq}  ?=  f_{vwq}  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.f_{vwq}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(———)}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r}p_{abl}}  \sim  \frac{ h \cdot T_{kegel} \cdot f_{ele,vwq} }{ r }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{abl}}  =  g_{h} \cdot \frac{ h \cdot T_{kegel} \cdot f_{ele,vwq} }{ r }  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-eff', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-eff}', label_incr => true),                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Analyse der Einheiten …}',
                TitleVis => 'Analyse der Einheiten:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Ausdrücke in eckigen Klammern ([Term]) stehen für deren Einheiten oder geben diese explizit an ([Einheiten]).'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  h  =  6,6 \cdot 10^{-34} \cdot J \cdot s  }', label_incr => false),
                      array( display => 'on',  latex => '{  J  =  \frac{ \mathit{kg} \cdot m^2 }{ s^2 }  }', label_incr => false),
                      array( display => 'on',  latex => '{  [ T_{kegel} ]  =  s  }', label_incr => false),
                      array( display => 'on',  latex => '{  [ {_{r}p_{abl}} ]  =  \frac{ J \cdot s }{ m }  =  \frac{ \mathit{kg} \cdot m }{ s }  }', label_incr => false),
                      array( display => 'on',  latex => '{  \left[ \frac{ h \cdot T_{kegel} \cdot f_{ele,vwq} }{ r } \right]  =  \frac{ \frac{ \mathit{kg} \cdot m^2 }{ s^2 } \cdot s \cdot s \cdot \frac{ 1 }{ s } }{ m }  =  \frac{ \mathit{kg} \cdot m }{ s }  }', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  [g_{h}]  =  1  }', label_incr => false),
                    ))),
                    ))),
                      
                  /* array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{\\color{*Bearb}{Analyse der Einheiten (experimentell) …}}',
                TitleVis => '\\color{*Bearb}{Analyse der Einheiten (experimentell):}', ParagraphList => array(
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  h  =  6,6 \cdot 10^{-34} \cdot J \cdot s  }', label_incr => false),
                      array( display => 'on',  latex => '{  J  =  \frac{ \mathit{kg} \cdot m^2 }{ s^2 }  }', label_incr => false),
                      array( display => 'on',  latex => '{  [ T_{kegel} ]  =  s  \mapsto  [ {s_{kegel}} ]  =  m  }', label_incr => false),
                      array( display => 'on',  latex => '{  [ {_{r}p_{abl}} ]  =  \frac{ J \cdot s }{ m }  =  \frac{ \mathit{kg} \cdot m }{ s }  }', label_incr => false),
                      array( display => 'on',  latex => '{  \left[ \frac{ h \cdot {s_{kegel}} \cdot f_{ele,vwq} }{ r } \right]  =  \frac{ \frac{ \mathit{kg} \cdot m^2 }{ s^2 } \cdot s \cdot m \cdot \frac{ 1 }{ s } }{ m }  =  \frac{ \mathit{kg} \cdot s }{ m }  }', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  [g_{h}]  =  \frac{ m }{ s }  }', label_incr => false),
                    ))),
                    ))), */
                      
                  array( 'text', array( text => array(
                    'Die Wirkungsquanten-Frequenz \\term{f_{ele,vwq}} auf dem String können wir aus seiner Rotationsfrequenz \\term{f_{ele}} und der Wirkungsquanten-Anzahl \\term{n_{ele,wq}} des Strings errechnen.'."\n".
                    'Wegen der offensichtlichen Gleichheit der Frequenz des abgestrahlten virtuellen Wirkungsquanten-Stroms und der Wirkungsquanten-Frequenz auf dem String (siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}) gilt:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  f_{ele,vwq}  =  f_{wq}  }'),
                      array( display => 'off', latex => '{  f_{wq}  =  n_{ele,wq} \cdot f_{ele}  }'),
                      array( display => 'on',  latex => '{  f_{ele,vwq}  =  n_{ele,wq} \cdot f_{ele}  }',
                                               latex_if_visible => '{  \Leftrightarrow  f_{ele,vwq}  =  n_{ele,wq} \cdot f_{ele}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => 'Einschub zur Plausibilität der Quantengravitation …',
                TitleVis => 'Einschub zur Plausibilität der Quantengravitation:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Beide Frequenzen, die Wirkungsquanten-Frequenz auf dem String und die abgestrahlte virtuelle Wirkungsquanten-Frequenz,'."\n".
                    'sind grundsätzlich unabhängig von der Veränderung ihrer Ausbreitungsgeschwindigkeit.'."\n",
                      'Dies ist eine sehr wichtige Eigenschaft der hier entwickelten Quantengravitation.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Die Wirkungsquanten-Frequenzen sind unabhängig von der Veränderung ihrer Ausbreitungsgeschwindigkeit', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wenn die beiden Frequenzen \\term{f_{ele,vwq}} und \\term{f_{wq}} die gleichen sind, dann ist die Veränderung der Dichte \\term{_{r}ρ_{vwq}} der virtuellen Wirkungsquanten-Impulse'."\n".
                    'ausschließlich von der Veränderung der Ausbreitungsgeschwindigkeit der Impulse abhängig.'."\n".
                    'Genauso ist die Veränderung der Wirkungsquanten-Dichte \\term{_{r_{ele}}ρ_{ele,wq}} auf dem String ausschließlich durch die Veränderung der Geschwindigkeit von dessen Rotation bestimmt.'."\n",
                      'Beide Geschwindigkeiten variieren von Ort zu Ort also mit der Verlangsamung der Ausbreitung des Lichts im Raum \\term{_{r,p}c},'."\n".
                    'die wir hier ja insgesamt berechnen wollen, mit dem Abstand \\term{r} und ihrer Bewegungsrichtung \\term{p}.'."\n",
                      'Die Variation beider Dichten mit der Ausbreitungsgeschwindigkeit ihrer (virtuellen) Wirkungsquanten entspricht der der Detektorwellenlänge \\term{_{x}λ_{wq,d}}'."\n".
                    'von Licht bei sich ändernder Lichtgeschwindigkeit aus Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-DetektWellenlaengeAlt}.'."\n".
                    'Hieraus können wir die Dichte bei einer bestimmten Ausbreitungsgeschwindigkeit ableiten:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{x}\lambda_{wq,d}}  =  {_{\lowZero}\lambda_{wq,d}} \cdot {_{x}\alpha}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-DetektWellenlaengeAlt', label_text => '\\jump{OM:FrQFT:ZeitAlterungFrequenz:Equ-DetektWellenlaengeAlt}{\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-DetektWellenlaengeAlt}}'),
                      array( display => 'on',  latex => '{  {_{x}\rho_{wq}}  =  \frac{ 1 }{ {_{x}\lambda_{wq,d}} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}\rho_{wq}}  =  \frac{ 1 }{ {_{\lowZero}\lambda_{wq,d}} \cdot {_{x}\alpha} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}\rho_{wq}}  =  \frac{ {_{\lowZero}\rho_{wq}} }{ {_{x}\alpha} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und wir können sehen, dass die Veränderung der Ausbreitungsgeschwindigkeit der Veränderung der Dichte genau so entgegen wirkt,'."\n".
                    'dass die Frequenz gleich bleibt, egal an welchem Ort oder in welcher Richtung die Bewegung stattfindet:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{x}c}  =  {_{\lowZero}c} \cdot {_{x}\alpha}  }',
                                               /* label_name => '', */ label_text => '\\jumpname{OM:FrQFT:ZeitAlterungFrequenz:Equ-LGAenderungKos}', label_incr => false),
                      array( display => 'on',  latex => '{  {_{x}f_{wq}}  =  {_{x}\rho_{wq}} \cdot {_{x}c}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}f_{wq}}  =  \frac{ {_{\lowZero}\rho_{wq}} }{ {_{x}\alpha} } \cdot {_{\lowZero}c} \cdot {_{x}\alpha}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}f_{wq}}  =  {_{\lowZero}\rho_{wq}} \cdot {_{\lowZero}c}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Frequenz der Wirkungsquanten ist also tatsächlich unabhängig von der Ausbreitungsgeschwindigkeit der Wirkungsquanten am Ort der beobachtet wird.'."\n",
                      'Dies ist eine wichtige Erkenntnis:'."\n"))),
                                                                                                     
                  array( 'text', array( Shape => 'italic', text => array(
                      'Durch die Unabhängigkeit der virtuellen Wirkungsquanten-Frequenz von der Veränderung ihrer Ausbreitungsgeschwindigkeit und der nachfolgend gezeigten Berechnung der Gravitation'."\n".
                      'über die statistische Standardabweichung, lässt sich die Quantengravitation vieler Teilchen, also größerer Massen, beliebig kombinieren.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Der Schluss unterstreicht, dass wir es hier mit einer plausiblen Struktur der Quantengravitation zu tun haben.'."\n"))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'In die Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-eff} der effektiv störenden Wirkung eingesetzt erhalten wir:'."\n"))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(\\bold{Untersuchung – Perspektive Ele-Ebene:}'."\n".
                    'Wir sehen also, dass diese Perspektive schlussendlich genau in die gleiche Formel mündet.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX)}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{abl}}  =  g_{h} \cdot \frac{ n_{ele,wq} \cdot h \cdot T_{kegel} \cdot f_{ele} }{ r }  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.Ele-Eb', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}p_{abl}}  =  g_{h} \cdot \frac{ h \cdot T_{kegel} \cdot n_{ele,wq} \cdot f_{ele} }{ r }  }',
                                               /* label_name => '', */label_text => 'QGra.LV.Unter.Ele-Eb', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(———)}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{abl}}  =  g_{h} \cdot \frac{ h \cdot {T_{kegel}} \cdot n_{ele,wq} \cdot f_{ele} }{ r }  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-eff-aus-f-ele', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-eff-aus-f-ele}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Es ist nun wünschenswert den Breitenfaktor \term{T_{kegel}} am Ende so zu formulieren, dass die uns generell noch unbekannte Wirkungsquanten-Anzahl \\term{n_{ele,wq}} sich weg kürzt.'."\n",
                      'Für den Breitenfaktor gilt nach den obigen Eigenschaften:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  T_{kegel}  \sim  \frac{ 1 }{ \omega_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  T_{kegel}  =  g_{\omega} \cdot \frac{ 1 }{ \omega_{ele} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können nun die Winkelgeschwindigkeit \\term{ω_{ele}} so umformulieren, dass sie durch die Wirkungsquanten-Anzahl \\term{n_{ele,wq}} ausgedrückt wird.'."\n".
                    'Dazu schauen wir nach ihrer Beziehung zur Energie des Elementarteilchen-Strings und drücken diese schließlich durch seine Masse aus:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  E_{ele}  =  h \cdot f_{ele}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-EinsteinEnergieLichtQuant-1', label_text => '\\jump{OM:FrQFT:HeisenbergUnschaerfe:Equ-EinsteinEnergieLichtQuant}{\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-EinsteinEnergieLichtQuant-1}}', label_incr => false,
                                               footnote => 'Vgl. \\cite{wiki:PlanckschesWirkungsquantum2013}, Definition.'),
                      array( display => 'off', latex => '{  \omega_{ele}  =  2 \pi \cdot f_{ele}  }'),
                      array( display => 'off', latex => '{  \Rightarrow  E_{ele}  =  h \cdot \frac{ \omega_{ele} }{ 2 \pi }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  E_{ele}  =  \hbar \cdot \omega_{ele}  }',  // #: Siehe https://www.grund-wissen.de/physik/mechanik/kinematik/kreisfoermige-bewegungen.html#equation-eqn-bahngeschwindigkeit
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-E-aus-omega', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-E-aus-omega}', label_incr => true,
                                               footnote => 'Vgl. \\cite{wiki:PlanckschesWirkungsquantum2013}, Definition.'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \omega_{ele}  =  \frac{ E_{ele} }{ \hbar }  }'),
                      array( display => 'on',  latex => '{  E_{ele}  =  m_{ele} \cdot {_{\lowZero}c^{2}}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-E-ele-aequi-zu-Masse-1', label_text => '\\jump{OM:FrQFT:FirstPrinciples:Vortext:Equ-E-ele-aequi-zu-Masse}{\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-E-ele-aequi-zu-Masse-1}}', label_incr => false,
                                               footnote => '\\const{FrQFT_g_footnote_text_AequivalMasseEnergie}'),
                      array( display => 'on',  latex => '{  \Rightarrow  T_{kegel}  =  g_{\omega} \cdot \frac{ \hbar }{ E_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  T_{kegel}  =  g_{\omega} \cdot \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c^{2}} }  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Analyse der Einheiten …}',
                TitleVis => 'Analyse der Einheiten:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Ausdrücke in eckigen Klammern ([Term]) stehen für deren Einheiten oder geben diese explizit an ([Einheiten]).'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  h  =  6,6 \cdot 10^{-34} \cdot J \cdot s  }', label_incr => false),
                      array( display => 'on',  latex => '{  \hbar  =  \frac{ h }{ 2 \pi }  =  1,054571 \cdot 10^{-34} \cdot J \cdot s  }', label_incr => false),
                      array( display => 'on',  latex => '{  J  =  \frac{ \mathit{kg} \cdot m^2 }{ s^2 }  }', label_incr => false),
                      array( display => 'on',  latex => '{  [ T_{kegel} ]  =  s  }', label_incr => false),
                      array( display => 'on',  latex => '{  [ \omega_{ele} ]  =  2 \pi \cdot \frac{ 1 }{ s }  }', label_incr => false),
                      array( display => 'on',  latex => '{  \left[ \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c^{2}} } \right]  =  \frac{ J \cdot s }{ \mathit{kg} \cdot \frac{ m^2 }{ s^2 } }  =  \frac{ J \cdot s^3 }{ \mathit{kg} \cdot m^2 }  =  s  }', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  [g_{\omega}]  =  1  }', label_incr => false),
                    ))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Weil jedes Wirkungsquant eine konstante Masseeinheit \\term{m_{wq}} ist, kann die Masse \\term{m_{ele}} eines Strings'."\n".
                    'über seine Wirkungsquanten-Anzahl \\term{n_{ele,wq}} folgendermaßen beschrieben werden:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  m_{ele}  =  n_{ele,wq} \cdot m_{wq}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-EMasseSumWQEnergie-1', label_text => '\\jump{OM:FrQFT:FirstPrinciples:Vortext:Equ-EMasseSumWQEnergie}{\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-EMasseSumWQEnergie-1}}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  T_{kegel}  =  g_{\omega} \cdot \frac{ \hbar }{ n_{ele,wq} \cdot m_{wq} \cdot {_{\lowZero}c^{2}} }  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-T-kegel', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-T-kegel}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Setzen wir diese Werte nun in die Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-eff-aus-f-ele} der effektiv störenden Wirkung ein, ergibt sich:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{abl}}  =  g_{h} \cdot \frac{ h \cdot g_{\omega} \cdot \frac{ \hbar }{ n_{ele,wq} \cdot m_{wq} \cdot {_{\lowZero}c^{2}} } \cdot n_{ele} \cdot f_{ele} }{ r }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  {_{r}p_{abl}}  =  g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} \cdot {_{\lowZero}c^{2}} } \cdot \frac{ h \cdot n_{ele,wq} \cdot f_{ele} }{ n_{ele,wq} \cdot r }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}p_{abl}}  =  g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} \cdot {_{\lowZero}c^{2}} } \cdot \frac{ h \cdot f_{ele} }{ r }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Über \\jump{OM:FrQFT:HeisenbergUnschaerfe:Energie-und-Zeit}{Plancks Proportionalität von Energie und Frequenz} aus Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-EinsteinEnergieLichtQuant-1}'."\n".
                    'und \\jump{OM:FrQFT:FirstPrinciples:Vortext:Abzaehlprinzip}{Einstens Energie-Masse-Äquivalenz} aus Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-E-ele-aequi-zu-Masse-1}'."\n".
                    'können wir die effektiv störende Wirkung durch die Masse \\term{m_{ele}} ausdrücken.'."\n".
                    'So formuliert benötigen wir diese im weiteren Verlauf:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{abl}}  =  g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} \cdot {_{\lowZero}c^{2}} } \cdot \frac{ E_{ele} }{ r }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  {_{r}p_{abl}}  =  g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} \cdot {_{\lowZero}c^{2}} } \cdot \frac{ m_{ele} \cdot {_{\lowZero}c^{2}} }{ r }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}p_{abl}}  =  g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot \frac{ m_{ele} }{ r }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die effektiv störende Wirkung ist demnach proportional zur Masse des Strings und umgekehrtproportional zum Abstand zu ihm.'."\n"))),
                  /*%! array( 'equations',
                    array( equ_text_std => 'XXX.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r}p_{abl}}  \sim  \frac{ h \cdot T_{kegel} \cdot f_{ele,vwq} }{ r }  }'),
                      array( display => 'on',  latex => '{  h_{m}  =  h \cdot T_{kegel} \cdot f_{ele,vwq}  }'),
                      array( display => 'on',  latex => '{  h_{m}  \sim  m_{ele}  }'),
                      array( display => 'on',  latex => '{  E_{ele}  =  h \cdot {_{x}f_{ele}}  }'),
                      array( display => 'on',  latex => '{  E_{ele}  =  m_{ele} \cdot {_{\lowZero}c^{2}}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  h \cdot {_{x}f_{ele}}  =  m_{ele} \cdot {_{\lowZero}c^{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  m_{ele}  =  \frac{ h \cdot {_{x}f_{ele}} }{ {_{\lowZero}c^{2}} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  h_{m}  \sim  \frac{ h \cdot {_{x}f_{ele}} }{ {_{\lowZero}c^{2}} }  }'),
                      array( display => 'on',  latex => '{  f_{ele}  \sim  n_{ele,wq}  }'),
                      array( display => 'on',  latex => '{  {_{\lowZero}c}  =  2 \pi \cdot r_{ele} \cdot f_{ele}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f_{ele}  =  \frac{ {_{\lowZero}c} }{ 2 \pi \cdot r_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  r_{ele}  =  \frac{ {_{\lowZero}c} }{ 2 \pi \cdot f_{ele} }  }'),
                      array( display => 'on',  latex => '{  \rho_{wq}  =  \frac{ n_{ele,wq} }{ 2 \pi \cdot r_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \rho_{wq}  =  \frac{ n_{ele,wq} }{ 2 \pi \cdot \frac{ {_{\lowZero}c} }{ 2 \pi \cdot f_{ele} } }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \rho_{wq}  =  \frac{ n_{ele,wq} \cdot f_{ele} }{ {_{\lowZero}c} }  }'),
                      array( display => 'on',  latex => '{  f_{ele,vwq}  =  f_{wq}  }'),
                      array( display => 'on',  latex => '{  f_{wq}  =  n_{ele,wq} \cdot f_{ele}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f_{ele,vwq}  =  n_{ele,wq} \cdot f_{ele}  }'),
                      array( display => 'on',  latex => '{  T_{kegel}  \sim  \frac{ 1 }{ n_{ele,wq} }  }'),
                      array( display => 'on',  latex => '{  T_{kegel}  \sim  \frac{ 1 }{ \omega_{ele} }  }'),
                      array( display => 'on',  latex => '{  E_{ele}  =  \hbar \cdot \omega_{ele}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \omega_{ele}  =  \frac{ E_{ele} }{ \hbar }  }'),
                      array( display => 'on',  latex => '{  m_{ele}  =  n_{ele,wq} \cdot m_{wq}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  T_{kegel}  \sim  \frac{ \hbar }{ E_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  T_{kegel}  \sim  \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c^{2}} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  T_{kegel}  \sim  \frac{ \hbar }{ n_{ele,wq} \cdot m_{wq} \cdot {_{\lowZero}c^{2}} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'XXX.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  m_{ele}  =  n_{ele,wq} \cdot m_{wq}  }'),
                      array( display => 'on',  latex => '{  \rho_{wq}  =  \frac{ n_{ele,wq} }{ 2 \pi \cdot r_{ele} }  }'),
                      array( display => 'on',  latex => '{  {_{x}f_{wq}}  =  {_{x}f_{ele}} \cdot n_{ele,wq}  }'),
                      array( display => 'on',  latex => '{  E_{ele}  =  h \cdot {_{x}f_{ele}}  }'),
                      array( display => 'on',  latex => '{  E_{ele}  =  m_{ele} \cdot {_{\lowZero}c^{2}}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  h \cdot {_{x}f_{ele}}  =  m_{ele} \cdot {_{\lowZero}c^{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}f_{ele}}  =  \frac{ m_{ele} \cdot {_{\lowZero}c^{2}} }{ h }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{x}f_{wq}}  =  \frac{ m_{ele} \cdot n_{ele,wq} \cdot {_{\lowZero}c^{2}} }{ h }  }'),
                      array( display => 'on',  latex => '{  {_{x}f_{ele,vwq}}  =  {_{x}f_{wq}}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{x}f_{ele,vwq}}  =  \frac{ m_{ele} \cdot n_{ele,wq} \cdot {_{\lowZero}c^{2}} }{ h }  }'),
                      array( display => 'on',  latex => '{  E_{ele}  =  \hbar \cdot \omega_{ele}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-E-aus-omega', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-E-aus-omega}', label_incr => true,
                                               footnote => 'Vgl. \\cite{wiki:PlanckschesWirkungsquantum2013}, Definition.'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \omega_{ele}  =  \frac{ E_{ele} }{ h }  }'),
                      array( display => 'on',  latex => '{  T_{kegel}  \sim  \frac{ 1 }{ \omega_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  T_{kegel}  =  g_{\omega} \cdot \frac{ 1 }{ \omega_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  T_{kegel}  =  g_{\omega} \cdot \frac{ 1 }{ \frac{ E_{ele} }{ h } }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  T_{kegel}  =  g_{\omega} \cdot \frac{ h }{ E_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  h_{m}  =  h \cdot g_{\omega} \cdot \frac{ h }{ E_{ele} } \cdot f_{ele,vwq}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  h_{m}  =  h \cdot g_{\omega} \cdot \frac{ h }{ E_{ele} } \cdot \frac{ m_{ele} \cdot n_{ele,wq} \cdot {_{\lowZero}c^{2}} }{ h }  }'),
                    ))), */
                  /*%! array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      'Die effektiv störende Wirkung \\term{_{r}p_{abl}} des Stroms der eintreffenden virtuellen Wirkungsquanten muss nach Analyse der \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung}'."\n".
                    'mehrere Proportionalitätsanforderungen gleichzeitig erfüllen:'."\n",
                      'Die Störung der eintreffenden Impulse ist proportional zu der Wirkung \\term{h} jedes Wirkungsquants des Strings, die die Ausgangsintensität der Impulse bestimmt.'."\n".
                    'Sie ist proportional zur Frequenz ihres Eintreffens \\term{f_{ele,vwq}}, die die Anzahl der Impulse pro Zeit und damit die Energie und Masse des Elementarteilchens widerspiegelt,'."\n".
                    'und zur Dauer ihrer Einwirkung, also zur Winkelgeschwindigkeit ihrer Abstrahlung \\term{ω_{ele}}.'."\n",
                      'Und die Störung muss, wie \\jump{OM:FrQFT:Quantengravitation:Lichtverlangsamung:WQIUmgekehrtProport}{oben <-XXX} gerade gezeigt, auch proportional zur Abnahme der Impulsintensität \\term{_{r}ii} mit dem Abstand \\term{r} vom Entstehungsort des Impulses auf dem String sein.'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r}p_{abl}}  \sim  h  }'),
                      array( display => 'on',  latex => '{  {_{r}p_{abl}}  \sim  f_{ele,vwq}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}p_{abl}}  \sim  \frac{ n_{vwq} }{ t }  }'),
                      array( display => 'on',  latex => '{  {_{r}p_{abl}}  \sim  \omega_{ele}  }'),
                      array( display => 'on',  latex => '{  {_{r}p_{abl}}  \sim  {_{r}ii}  =  \frac{ 1 }{ r }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wie in \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, unten, dargestellt, entstehen die virtuellen Wirkungsquanten aus den Wirkungsquanten des Strings'."\n".
                    'und haben so an ihrem Ursprungsort die gleiche Frequenz.'."\n",
                      'Bemerkenswerterweise ist festzustellen, dass diese Frequenzen, der Abstrahlung der Impulse und ihres Eintreffens, immer gleich bleiben, wie ich nachfolgend noch erkläre,'."\n".
                    'wenn sich ihre Ausbreitungsgeschwindigkeit von Ort zu Ort ändert:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{ele,vwq}  =  f_{wq}  }'),
                      array( display => 'off', latex => '{  f_{ele,vwq}  =  \frac{ n_{vwq} }{ t }  }'),
                      array( display => 'off', latex => '{  f_{wq}  =  \frac{ n_{ele,wq} }{ t }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n_{vwq}  =  n_{ele,wq}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Beide Frequenzen sind unabhängig von der Veränderung ihrer Ausbreitungsgeschwindigkeit.'."\n",
                      'Dies ist eine sehr wichtige Eigenschaft der hier entwickelten Quantengravitation:'."\n"))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => 'Störungsfrequenz ist unabhängig von der Veränderung ihrer Ausbreitungsgeschwindigkeit …',
                TitleVis => 'Störungsfrequenz ist unabhängig von der Veränderung ihrer Ausbreitungsgeschwindigkeit:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Wenn die beiden Frequenzen \\term{f_{ele,vwq}} und \\term{f_{wq}} die gleichen sind, dann ist die Veränderung der Dichte \\term{_{r}ρ_{vwq}} der virtuellen Wirkungsquanten-Impulse'."\n".
                    'ausschließlich von der Veränderung der Ausbreitungsgeschwindigkeit der Impulse abhängig.'."\n".
                    'Genauso ist die Veränderung der Wirkungsquanten-Dichte \\term{_{r_{ele}}ρ_{ele,wq}} auf dem String ausschließlich durch die Veränderung der Geschwindigkeit von dessen Rotation bestimmt.'."\n",
                      'Beide Geschwindigkeiten variieren von Ort zu Ort also mit der Verlangsamung der Ausbreitung des Lichts im Raum \\term{_{r,p}c},'."\n".
                    'die wir hier ja insgesamt berechnen wollen, mit dem Abstand \\term{r} und ihrer Bewegungsrichtung \\term{p}.'."\n",
                      'Die Variation beider Dichten mit der Ausbreitungsgeschwindigkeit ihrer (virtuellen) Wirkungsquanten entspricht der der Detektorwellenlänge \\term{_{x}λ_{wq,d}}'."\n".
                    'von Licht bei sich ändernder Lichtgeschwindigkeit aus Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-DetektWellenlaengeAlt}.'."\n".
                    'Hieraus können wir die Dichte bei einer bestimmten Ausbreitungsgeschwindigkeit ableiten:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{x}\lambda_{wq,d}}  =  {_{\lowZero}\lambda_{wq,d}} \cdot {_{x}\alpha}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-DetektWellenlaengeAlt', label_text => '\\jump{OM:FrQFT:ZeitAlterungFrequenz:Equ-DetektWellenlaengeAlt}{\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-DetektWellenlaengeAlt}}'),
                      array( display => 'on',  latex => '{  {_{x}\rho_{wq}}  =  \frac{ 1 }{ {_{x}\lambda_{wq,d}} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}\rho_{wq}}  =  \frac{ 1 }{ {_{\lowZero}\lambda_{wq,d}} \cdot {_{x}\alpha} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}\rho_{wq}}  =  \frac{ {_{\lowZero}\rho_{wq}} }{ {_{x}\alpha} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und wir können sehen, dass die Veränderung der Ausbreitungsgeschwindigkeit der Veränderung der Dichte genau so entgegen wirkt,'."\n".
                    'dass die Frequenz gleich bleibt, egal an welchem Ort oder in welcher Richtung die Bewegung stattfindet:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{x}c}  =  {_{\lowZero}c} \cdot {_{x}\alpha}  }',
                                               label_text => '\\jumpname{OM:FrQFT:ZeitAlterungFrequenz:Equ-LGAenderungKos}', label_incr => false),
                      array( display => 'on',  latex => '{  {_{x}f_{wq}}  =  {_{x}\rho_{wq}} \cdot {_{x}c}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}f_{wq}}  =  \frac{ {_{\lowZero}\rho_{wq}} }{ {_{x}\alpha} } \cdot {_{\lowZero}c} \cdot {_{x}\alpha}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}f_{wq}}  =  {_{\lowZero}\rho_{wq}} \cdot {_{\lowZero}c}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies ist eine wichtige Erkenntnis:'."\n"))),
                    ))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Durch die Unabhängigkeit der Störungsfrequenz von der Veränderung ihrer Ausbreitungsgeschwindigkeit und der nachfolgend gezeigten Berechnung der Gravitation'."\n".
                      'über die statistische Standardabweichung, lässt sich die Quantengravitation vieler Teilchen, also größerer Massen, beliebig kombinieren.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Der Schluss deutet darauf hin, dass wir es hier mit einer plausiblen Struktur der Quantengravitation zu tun haben.'."\n",
                      'Nach etwas Überlegung und Untersuchung der geforderten Proportionalitäten zeigt sich, dass alle, bis auf die der Intensitätsabnahme mit dem Abstand,'."\n".
                    'durch die Masse des Elementarteilchens erfüllt sind:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  m_{ele}  =  n_{ele,wq} \cdot m_{wq}  }'),
                      array( display => 'off', latex => '{  E_{ele}  =  m_{ele} \cdot {_{\lowZero}c^{2}}  }'),
                      array( display => 'off', latex => '{  E_{ele}  =  h \cdot f_{ele}  }',
                                               label_text => '\\jumpname{OM:FrQFT:HeisenbergUnschaerfe:Equ-EinsteinEnergieLichtQuant}', label_incr => false,
                                               footnote => 'Vgl. \\cite{wiki:PlanckschesWirkungsquantum2013}, Definition.'),
                      array( display => 'off', latex => '{  f_{ele}  =  \frac{ n_{ele} }{ t }  }'),
                      array( display => 'off', latex => '{  \Rightarrow  m_{ele}  =  \frac{ h \cdot f_{ele} }{ {_{\lowZero}c^{2}} }  }'),
                      array( display => 'on',  latex => '{  m_{ele}  =  \frac{ h \cdot n_{ele} }{ {_{\lowZero}c^{2}} \cdot t }  }',
                                               latex_if_visible => '{  \Leftrightarrow   m_{ele}  =  \frac{ h \cdot n_{ele} }{ {_{\lowZero}c^{2}} \cdot t }  }'),
                      array( display => 'off', latex => '{  \hbar  =  \frac{ h }{ 2 \pi }  }'),
                      array( display => 'off', latex => '{  E_{ele}  =  \hbar \cdot \omega_{ele}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-E-aus-omega', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-E-aus-omega}', label_incr => true,
                                               footnote => 'Vgl. \\cite{wiki:PlanckschesWirkungsquantum2013}, Definition.'),
                      array( display => 'off', latex => '{  \Leftrightarrow  m_{ele}  =  \frac{ \hbar \cdot \omega_{ele} }{ {_{\lowZero}c^{2}} }  }'),
                      array( display => 'on',  latex => '{  m_{ele}  =  \frac{ h \cdot \omega_{ele} }{ 2 \pi \cdot {_{\lowZero}c^{2}} }  }',
                                               latex_if_visible => '{  \Leftrightarrow   m_{ele}  =  \frac{ h \cdot \omega_{ele} }{ 2 \pi \cdot {_{\lowZero}c^{2}} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {h_{m}}  \sim  m_{ele}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {h_{m}}  =  g_{m} \cdot m_{ele}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei steht \\term{n_{ele}} für die Anzahl der Rotationen des Elementarteilchens.'."\n",
                      'Die geforderte Proportionalität zur Intensitätsabnahme mit dem Abstand kommt nun separat hinzu:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{abl}}  \sim  \frac{ {h_{m}} }{ r }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{abl}}  =  g_{r} \cdot \frac{ g_{m} \cdot m_{ele} }{ r }  }'),
                    ))), */
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:NaeherungGrosseAbstaend', text =>
                                           
                'Näherung bei großen Abständen', subline =>
                  '… im Verhältnis zum Radius des gravitativ wirkenden Elementarteilchens')),
                  array( 'text', array( text => array(
                    'Wie in \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn} dargestellt, entstehen die virtuellen Wirkungsquanten aus den Wirkungsquanten des Strings.'."\n".
                    'Die abgestrahlten virtuellen Wirkungsquanten-Impulse nehmen, wie schon gesagt, mit dem Abstand \\term{r} vom String ab.'."\n".
                    'In der weiteren Herleitung sollen ausschließlich im Verhältnis zum Radius des Elementarteilchens \\term{r_{ele}} große Abstände \\term{r} eine Rolle spielen.'."\n",
                      'In diesem Fall wird der Elementarteilchen-Radius \\term{r_{ele}} auf derartig große Distanzen irrelevant und nur der Abstand von deren Zentrum betrachtet,'."\n".
                    'vorübergehend \\term{r_{c}} genannt; anschließend dann wieder \\term{r}, der Einfachheit halber:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  r_{ele}  \ll  r  }'),
                      array( display => 'off', latex => '{  r_{c}  =   r \pm r_{ele}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  r_{c}  \approx  r  }'),
                      array( display => 'on',  latex => '{  r_{c}  \mapsto   r  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Im Folgenden wird in Aufklapptexten die Rechnung auch ohne diese Näherung, für kleine Distanzen im Nahbereich vom Elementarteilchen, ausgeführt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Zwei Stellen des Wirkungsquanten-Strings wirken gleichzeitig', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Es wirken nun immer genau zwei Stellen auf einem Elementarteilchen-String zugleich'."\n".
                    '(siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung}, Mitte, und \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}),'."\n".
                    'weil die virtuellen Wirkungsquanten nur genau radial, senkrecht zur Bewegungsrichtung der Wirkungsquanten auf dem String, abgestrahlt werden.'."\n"))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(\\bold{Untersuchung – Perspektive Ele-Ebene:}'."\n".
                    'Hier ist in der neuen Perspektive zu berücksichtigen, dass es sich bei der Abstrahlung eines Photons bei näherer Betrachtung um einen Doppelwandigen Impulskegel handelt.'."\n".
                    'Die Wirkung \\term{h} des Impulskegels eines Wirkungsquants enthält die Doppelwandigkeit bereits.'."\n".
                    'Im Falle von Leptonen kommt durch das Auf- und wieder Einfalten seiner schwingenden Struktur ebenfalls von jeder der beiden Seiten des Stings ein eigener Impuls.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX)}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{ele,abl}}  =  2 \cdot {_{r}p_{abl}}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-ele-eff', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-ele-eff}', label_incr => true),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Rechnung für Nahbereich …}',
                TitleVis => 'Rechnung für Nahbereich:', ParagraphList => array(
                  $FrQFT_g_text_QuantengravRechnungOhneNaeh,
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r\pm}p_{ele,abl}}  =  {_{r+r_{ele}}p_{abl}} + {_{r-r_{ele}}p_{abl}}  }'),
                    ))),
                    ))),
                      
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Gravitative Wirkung eines einzelnen Elementarteilchens auf Licht', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die sich durch ein einzelnes Elementarteilchen aus der Störung \\term{_{r}p_{ele,abl}} ergebende Geschwindigkeit der Ablenkung \\term{_{r}v_{ele,abl}} ist dann proportional zu dieser Störung und berechnet sich durch Einsetzen zu:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r}v_{ele,abl}}  \sim  {_{r}p_{ele,abl}}  }'),
                      //%! array( display => 'off', latex => '{  \Rightarrow  {_{r}v_{ele,abl}}  =  g_{v} \cdot {_{r}p_{ele,abl}}  }'),
                      //%! array( display => 'on',  latex => '{  \Rightarrow  {_{r}v_{ele,abl}}  =  g_{v} \cdot 2 \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot \frac{ m_{ele} }{ r }  }',
                      //%!                          latex_if_visible => '{  \Leftrightarrow  {_{r}v_{ele,abl}}  =  g_{v} \cdot 2 \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot \frac{ m_{ele} }{ r }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}v_{ele,abl}}  =  g_{v} \cdot {_{r}p_{ele,abl}}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}v_{ele,abl}}  =  g_{v} \cdot 2 \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot \frac{ m_{ele} }{ r }  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl-aus-m-ele-r', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl-aus-m-ele-r}', label_incr => true),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Analyse der Einheiten …}',
                TitleVis => 'Analyse der Einheiten:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Ausdrücke in eckigen Klammern ([Term]) stehen für deren Einheiten oder geben diese explizit an ([Einheiten]).'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \hbar  =  \frac{ h }{ 2 \pi }  =  1,054571 \cdot 10^{-34} \cdot J \cdot s  }', label_incr => false),
                      array( display => 'on',  latex => '{  J  =  \frac{ \mathit{kg} \cdot m^2 }{ s^2 }  }', label_incr => false),
                      array( display => 'on',  latex => '{  [ {_{r}p_{ele,abl}} ]  =  \frac{ \mathit{kg} \cdot m }{ s }  }', label_incr => false),
                      array( display => 'on',  latex => '{  \\Leftrightarrow  \left[ 2 \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot \frac{ m_{ele} }{ r } \right]  =  \frac{ \mathit{kg} \cdot m }{ s }  }', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  [ g_{v} ]  =  \frac{ 1 }{ \mathit{kg} }  }', label_incr => false),
                    ))),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Rechnung für Nahbereich …}',
                TitleVis => 'Rechnung für Nahbereich:', ParagraphList => array(
                  $FrQFT_g_text_QuantengravRechnungOhneNaeh,
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r\pm}v_{ele,abl}}  \sim  {_{r\pm}p_{ele,abl}}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r\pm}v_{ele,abl}}  =  g_{v} \\\ \qquad\qquad \cdot \left( g_{\omega} \cdot \frac{ g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot m_{ele} }{ r + r_{ele} } + g_{\omega} \cdot \frac{ g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot m_{ele} }{ r - r_{ele} } \right)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm}v_{ele,abl}}  =  g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot m_{ele} \\\ \qquad\qquad\qquad\qquad\qquad\qquad \cdot \left( \frac{ 1 }{ r + r_{ele} } + \frac{ 1 }{ r - r_{ele} } \right)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm}v_{ele,abl}}  =  g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot m_{ele} \\\ \qquad\quad \cdot \left( \frac{ r - r_{ele} }{ ( r + r_{ele} ) \cdot ( r - r_{ele} ) } + \frac{ r + r_{ele} }{ ( r - r_{ele} ) \cdot ( r + r_{ele} ) } \right)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm}v_{ele,abl}}  =  g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot m_{ele} \\\ \qquad\qquad\qquad\qquad\qquad\quad \cdot \left( \frac{ r - r_{ele} }{ r^{2} - r_{ele}^{2} } + \frac{ r + r_{ele} }{ r^{2} - r_{ele}^{2} } \right)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm}v_{ele,abl}}  =  \frac{ g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot m_{ele} \cdot 2 \cdot r }{ r^{2} - r_{ele}^{2} }  }'),
                    ))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Diese Ablenkungsgeschwindigkeit eingesetzt in Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff} ergibt:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  {_{r,p}c_{ele}}  =  {_{\lowZero}c} \cdot \left( 1 - \frac{ \left( g_{v} \cdot 2 \cdot g_{\omega} \cdot \frac{ g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot m_{ele} }{ r } \right)^{2} }{ {_{\lowZero}c^{2}} } \right)^{p}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r,p}c_{ele}}  =  {_{\lowZero}c} \cdot \left( 1 - 4 \cdot \frac{ \left( g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \right)^{2} \cdot m_{ele}^{2} }{ {_{\lowZero}c^{2}} \cdot r^{2} } \right)^{p}  }',
                                               latex_if_visible => '{  \Leftrightarrow  {_{r,p}c_{ele}}  =  {_{\lowZero}c} \cdot \left( 1 - 4 \cdot \frac{ \left( g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \right)^{2} \cdot m_{ele}^{2} }{ {_{\lowZero}c^{2}} \cdot r^{2} } \right)^{p}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Analyse der Einheiten …}',
                TitleVis => 'Analyse der Einheiten:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Ausdrücke in eckigen Klammern ([Term]) stehen für deren Einheiten oder geben diese explizit an ([Einheiten]).'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \hbar  =  \frac{ h }{ 2 \pi }  =  1,054571 \cdot 10^{-34} \cdot J \cdot s  }'),
                      array( display => 'on',  latex => '{  J  =  \frac{ \mathit{kg} \cdot m^2 }{ s^2 }  }'),
                      array( display => 'on',  latex => '{  \left[ \frac{ \hbar }{ m_{wq} } \right]  =  \frac{ m^2 }{ s }  }'),
                      array( display => 'on',  latex => '{  \left[ g_{v} \cdot g_{\omega} \cdot g_{h} \right]  =  \frac{ 1 }{ kg }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \left[ g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \right]  =  \frac{ m^2 }{ \mathit{kg} \cdot s }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \left[ \frac{ \left( g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \right)^{2} \cdot m_{ele}^{2} }{ {_{\lowZero}c^{2}} \cdot r^{2} } \right]  =  1  }'),
                    ))),
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Rechnung für Nahbereich …}',
                TitleVis => 'Rechnung für Nahbereich:', ParagraphList => array(
                  $FrQFT_g_text_QuantengravRechnungOhneNaeh,
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r\pm,p}c_{ele}}  =  {_{\lowZero}c} \cdot \left( 1 - \frac{ \left( \frac{ g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot m_{ele} \cdot 2 \cdot r }{ r^{2} - r_{ele}^{2} } \right)^{2} }{ {_{\lowZero}c^{2}} } \right)^{p}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm,p}c_{ele}}  =  {_{\lowZero}c} \cdot \left( 1 - 4 \cdot \frac{ \left( g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \right)^{2} \cdot m_{ele}^{2} \cdot r^{2} }{ {_{\lowZero}c^{2}} \cdot \left( r^{2} - r_{ele}^{2} \right)^{2} } \right)^{p}  }'),
                    ))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Setzen wir hier die Gravitationskonstante so ein, wie sie sich in der nachfolgenden Herleitung für große Massen in Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraviKonstStruktur} zeigt, dann bekommen wir für ein einzelnes Elementarteilchen:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r,p}c_{ele}}  =  {_{\lowZero}c} \cdot \left( 1 - 4 \cdot \frac{ g_{s}^{-2} \cdot G^{2} \cdot m_{ele}^{2} }{ {_{\lowZero}c^{2}} \cdot r^{2} } \right)^{p}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Analyse der Einheiten …}',
                TitleVis => 'Analyse der Einheiten:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Ausdrücke in eckigen Klammern ([Term]) stehen für deren Einheiten oder geben diese explizit an ([Einheiten]).'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  g_{s}  :=  1 \cdot \frac{ m }{ s }  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-g-s}', label_incr => false),
                      array( display => 'on',  latex => '{  G  =  6,67384 \cdot 10^{-11} \cdot \frac{ m^3 }{ \mathit{kg} \cdot s^2 }  }'),
                      array( display => 'on',  latex => '{  \left[ g_{s}^{-2} \cdot G^{2} \right]  =  \frac{ m^4 }{ \mathit{kg}^2 \cdot s^2 }  }'),
                      array( display => 'on',  latex => '{  \left[ \frac{ g_{s}^{-2} \cdot G^{2} \cdot m_{ele}^{2} }{ {_{\lowZero}c^{2}} \cdot r^{2} } \right]  =  1  }'),
                    ))),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Rechnung für Nahbereich …}',
                TitleVis => 'Rechnung für Nahbereich:', ParagraphList => array(
                  $FrQFT_g_text_QuantengravRechnungOhneNaeh,
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm,p}c_{ele}}  =  {_{\lowZero}c} \cdot \left( 1 - 4 \cdot \frac{ G^{2} \cdot m_{ele}^{2} \cdot r^{2} }{ {_{\lowZero}c^{2}} \cdot \left( r^{2} - r_{ele}^{2} \right)^{2} } \right)^{p}  }'),
                    ))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wie wir gleich sehen werden ergibt sich für die Gravitation einer großen Masse durch einen statistischen Effekt eine andere Formel für die Lichtverlangsamung'."\n".
                    'durch Graviradiation oder Gravitation.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Gravitative Wirkung einer zentralen Masse auf Licht', subline =>
                  'Die Zufallsstatistik kommt ins Spiel')),
                  array( 'text', array( text => array(
                    'Im Fall einer zentralen Masse entsteht die insgesamt resultierende Störungsgeschwindigkeit \\term{_{r}v_{abl}} aus der Summe aller einzelnen Störungen durch die'."\n".
                    'virtuellen Wirkungsquanten.'."\n".
                    'Allerdings erreichen die einzelnen Störungen in diesem Fall die Bahn des Photons in zufälligen Zeitabständen.'."\n",
                      'Zufällig deshalb, weil letztendlich nicht nur die Wirkungsquanten des einen Elementarteilchen-Strings \\term{m_{ele}} wirken, sondern auch die'."\n".
                    'aller weiteren Elementarteilchen einer zentralen Masse \\term{M}.'."\n".
                    // 'Diese sind an das Elementarteilchen gekoppelt, was nach der Quanten-Fluss-Theorie auch dem \\jump{OM:FrQFT:Vakuum:Higgs-Feld-und-Higgs-Mechanismus}{Higgs-Mechnismus} entspricht. \\\\'."\n".
                    'Aus diesem Grund müssen die Regeln der Zufallsstatistik in Form der Standardabweichung\\footnote{Vgl. \\cite{wiki:Standardabweichung2013}.} Anwendung finden.'."\n".
                    'Das bedeutet, dass sich die effektive Ablenkungsgeschwindigkeit zur Quadratwurzel der Summe der einzelnen'."\n".
                    'Störungen berechnet.\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier S. 22.}'."\n".
                    'Wir haben \\term{g_{v}} oben schon als Proportionalitätskonstante eingeführt.'."\n",
                      'Zuerst führt Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-ele-eff} zur Definition der nicht statistischen effektiven Wirkung \\term{_{r}p_{mas,abl}} der Zentralmasse.'."\n".
                    'Bei der Berechnung der Standardabweichung bezieht sich das Ziehen der Quadratwurzel ausschließlich auf den Wert der Ablenkungsgeschwindigkeit ohne Standardabweichung und nicht auf seine Einheiten.'."\n".
                    'Daher ist der Wert getrennt von seinen Einheiten zu berechnen.'."\n".
                    'Diese etwas umständliche Art der Darstellung ersetze ich durch die Einführung der Konstanten \\term{g_{s}}, die ausschließlich zur Beibehaltung der ursprünglichen Einheiten genutzt wird'."\n".
                    'und damit keinen Trick zur Verschleierung verkehrter Einheiten darstellt:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  m_{ele}  \mapsto  M  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{mas,abl}}  =  2 \cdot g_{\omega} \cdot \frac{ g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot M }{ r }  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-M-eff', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-M-eff}', label_incr => true),
                      // #: See https://math.meta.stackexchange.com/questions/5020/mathjax-basic-tutorial-and-quick-reference
                      //-- array( display => 'off', latex => '\require{enclose}  {  {_{r}v_{mas,abl,\enclose{horizontalstrike}{standabw}}}  \sim  {_{r}p_{mas,abl}}  }'),
                      //-- array( display => 'off', latex => '\require{enclose}  {  \Rightarrow  {_{r}v_{mas,abl,\enclose{horizontalstrike}{standabw}}}  =  g_{v} \cdot {_{r}p_{mas,abl}}  }'),
                      //-- array( display => 'off', latex => '\require{enclose}  {  {_{r}v_{mas,abl}}  =  \sqrt{{_{r}v_{mas,abl,\enclose{horizontalstrike}{standabw}}}}  }',
                      //--                          footnote => 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier Formel C.5, S. 22.'),
                      // #: See https://math.meta.stackexchange.com/questions/5020/mathjax-basic-tutorial-and-quick-reference
                      //-- array( display => 'off', latex => '\require{enclose}  {  {_{r}v_{mas,abl,\enclose{updiagonalstrike}{standabw}}}  \sim  {_{r}p_{mas,abl}}  }'),
                      //-- array( display => 'off', latex => '\require{enclose}  {  \Rightarrow  {_{r}v_{mas,abl,\enclose{updiagonalstrike}{standabw}}}  =  g_{v} \cdot {_{r}p_{mas,abl}}  }'),
                      //-- array( display => 'off', latex => '\require{enclose}  {  {_{r}v_{mas,abl}}  =  \sqrt{{_{r}v_{mas,abl,\enclose{updiagonalstrike}{standabw}}}}  }',
                      //--                          footnote => 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier Formel C.5, S. 22.'),
                      array( display => 'off', latex => '\require{cancel}  {  {_{r}v_{mas,abl,\cancel{standabw}}}  \sim  {_{r}p_{mas,abl}}  }'),
                      array( display => 'off', latex => '\require{cancel}  {  \Rightarrow  {_{r}v_{mas,abl,\cancel{standabw}}}  =  g_{v} \cdot {_{r}p_{mas,abl}}  }'),
                      array( display => 'off', latex => '\require{cancel}  {  {_{r}v_{mas,abl}}  =  \sqrt{ wert\left({_{r}v_{mas,abl,\cancel{standabw}}}\right) } \cdot \left[ \frac{ m }{ s } \right]  }',
                                               footnote => 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier Formel C.5, S. 22.'),
                      array( display => 'off', latex => '{  g_{s}  :=  1 \cdot \frac{ m }{ s }  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-g-s', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-g-s}', label_incr => true),
                      array( display => 'off', latex => '\require{cancel}  {  \Rightarrow  {_{r}v_{mas,abl}}  =  \sqrt{ g_{s} \cdot {_{r}v_{mas,abl,\cancel{standabw}}} }  }'),
                      array( display => 'on',  latex => '{  {_{r}v_{mas,abl}}  =  \sqrt{ g_{s} \cdot g_{v} \cdot {_{r}p_{mas,abl}} }  }',
                                               latex_if_visible => '{  \Leftrightarrow  {_{r}v_{mas,abl}}  =  \sqrt{ g_{s} \cdot g_{v} \cdot {_{r}p_{mas,abl}} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}v_{mas,abl}}  =  \sqrt{ g_{s} \cdot g_{v} \cdot 2 \cdot g_{\omega} \cdot \frac{ g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot M }{ r } }  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-abl', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-abl}', label_incr => true),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Analyse der Einheiten …}',
                TitleVis => 'Analyse der Einheiten:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Ausdrücke in eckigen Klammern ([Term]) stehen für deren Einheiten oder geben diese explizit an ([Einheiten]).'."\n"))),
                  array( 'text', array( text => array(
                    'Die Standardabweichung, ihre Quadratwurzel, wird nur auf die Werte aber nicht auf die Einheiten angewendet.'."\n".
                    'Um mathematisch äquivalentes in einfacher und gut lesbarer Form zu erreichen, wird hier die Konstante \\term{g_{s}} in der Berechnung der Standardabweichung eingeführt.'."\n"))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Der statistische Effekt der Störung ist eine entscheidende Einsicht Gieses, um die Entstehung der Lichtverlangsamung und -beugung im Gravitationsfeld und damit die Gravitation zu verstehen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Lichtgeschwindigkeitsänderung im Gravitationsfeld', subline =>
                  'Gravitation durch die Wirkung der Elementarteilchen-Strukturen einer Masse')),
                  array( 'text', array( text => array(
                    'Wenn nun \\hidden{die Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-M-eff} in }die Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-abl} \\hidden{und dies dann }in'."\n".
                    'die Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff} eingesetzt wird, ergibt sich:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  {_{r,p}c_{mas}}  =  {_{\lowZero}c} \cdot \left( 1 - \frac{ \left( \sqrt{ g_{s} \cdot g_{v} \cdot 2 \cdot g_{\omega} \cdot \frac{ g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot M }{ r } } \right)^{2} }{ {_{\lowZero}c}^{2} } \right)^{p}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r,p}c_{mas}}  =  {_{\lowZero}c} \cdot \left( 1 - 2 \cdot \frac{ g_{s} \cdot g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot M }{ {_{\lowZero}c}^{2} \cdot r } \right)^{p}  }',
                                               latex_if_visible => '{  \Leftrightarrow  {_{r,p}c_{mas}}  =  {_{\lowZero}c} \cdot \left( 1 - 2 \cdot \frac{ g_{s} \cdot g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot M }{ {_{\lowZero}c}^{2} \cdot r } \right)^{p}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Vergleichen wir unser Ergebnis mit der nachfolgenden Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraLGEinstein} für die Änderung der Lichtgeschwindigkeit'."\n".
                    'im Gravitationsfeld der Allgemeinen Relativitätstheorie in der äußeren Lösung der Schwarzschild-Metrik\\footnote{\\const{FrQFT_g_footnote_text_SchwarzschildMetrik}},'."\n".
                    'die eine einzelne zentrale Masse beschreibt, so ergibt sich für die Gravitationskonstante \\term{G}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r,p}c_{mas}}  =  {_{\lowZero}c} \cdot \left( 1 - 2 \cdot \frac{ G \cdot M }{ {_{\lowZero}c}^{2} \cdot r } \right)^{p}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraLGEinstein', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraLGEinstein}', label_incr => true,
                                               footnote => '\\const{FrQFT_g_footnote_text_ARTLgFormel}'),
                      array( display => 'on',  latex => '{  \Rightarrow  G  =  g_{s} \cdot g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} }  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraviKonstStruktur', label_text => '\\name{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraviKonstStruktur}', label_incr => true,
                                               footnote => 'Vgl. \\cite{Huss:GFTv7.381j2012}, Kap. 13.1 Ansatz zur quantitativen Formulierung der Lichtgeschwindigkeit im Gravitationspotenzial, S. 141-149, hier Formel 13.17, S. 145. Dort hat die Formel noch eine leicht andere Form.'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Analyse der Einheiten …}',
                TitleVis => 'Analyse der Einheiten:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Ausdrücke in eckigen Klammern ([Term]) stehen für deren Einheiten oder geben diese explizit an ([Einheiten]).'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  G  =  6,67384 \cdot 10^{-11} \cdot \frac{ m^3 }{ \mathit{kg} \cdot s^2 }  }', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die Einheiten der Gravitationskonstanten passen tatsächlich genau zum hergeleiteten Wert:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \hbar  =  \frac{ h }{ 2 \pi }  =  1,054571 \cdot 10^{-34} \cdot J \cdot s  }'),
                      array( display => 'on',  latex => '{  J  =  \frac{ \mathit{kg} \cdot m^2 }{ s^2 }  }'),
                      array( display => 'on',  latex => '{  \left[ \frac{ \hbar }{ m_{wq} } \right]  =  \frac{ m^2 }{ s }  }'),
                      array( display => 'on',  latex => '{  \left[ g_{s} \cdot g_{v} \cdot g_{\omega} \cdot g_{h} \right]  =  \frac{ m }{ kg \cdot s }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \left[ g_{s} \cdot g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \right]  =  \frac{ m^3 }{ \mathit{kg} \cdot s^2 }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \left[ \frac{ G \cdot M }{ {_{\lowZero}c}^{2} \cdot r } \right]  =  1  }'),
                    ))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraLGEinstein} entspricht der in Experimenten beobachteten'."\n".
                    'Shapiro-Verzögerung\\footnote{\\const{FrQFT_g_footnote_text_ShapiroVerzoegerung}} des Lichts im Gravitationsfeld.'."\n".
                    'Eine nähere Analyse der \\jump{OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante}{Struktur der Gravitationskonstanten} findet sich im nächsten Abschnitt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Was haben wir nun im Vergleich zu Gieses Basisteilchenmodell gewonnen?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Es gibt einen wesentlichen Unterschied zu Gieses Basisteilchenmodell:'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Der Fortschritt im \\jump{OM:FrQFT:Basisteilchenmodell:Elementarteilchen-im-Gravitationsfeld:LichtgeschwGravi}{Vergleich zu Gieses Formulierung der Lichtverlangsamung} besteht darin, dass sich so ein nachvollziehbarer Zusammenhang mit der Masse'."\n".
                      'des anziehenden, kugelförmigen Objekts ergibt und nicht „nur“ mit der Anzahl an Elementarteilchen in diesem Objekt.\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, Speed Reduction in Detail, S. 20-22, hier Formel C.7, S. 22. \\term{N} steht darin nicht für die Masse einer kugelförmigen Ansammlung von Elementarteilchen, sondern \\term{N} steht für die Anzahl der Basisteichen, also für die doppelte Anzahl der Elementarteilchen.}'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Es gibt noch mehr Unterschiede im \\jump{OM:FrQFT:Basisteilchenmodell}{Vergleich der Quanten-Fluss-Theorie mit dem Basisteilchenmodell}.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Vereinheitlichung der Physik', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Quanten-Fluss-Theorie ist in der Lage, eine wichtige Eigenschaft des Gravitationsfelds entsprechend der Allgemeinen Relativitätstheorie aus der hier'."\n".
                    'beschriebenen Struktur der Elementarteilchen und Grundformeln der Quantenphysik herzuleiten:'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                        'Mit einer Simplifizierung des Leptonen-Strings erhalten wir im Rahmen der Quanten-Fluss-Theorie die korrekte Veränderung der Lichtgeschwindigkeit'."\n".
                        'im Gravitationsfeld einer homogenen Massenkugel.'."\n".
                        'Dies kann als deutlicher Hinweis auf eine Vereinheitlichung von Quantenphysik und Allgemeiner Relativitätstheorie'."\n".
                        'gewertet werden.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Der \\jump{OM:FrQFT:Quantengravitation:Laengenkontraktion}{Eindruck der Raumzeitkrümmung}, die \\jump{OM:FrQFT:Quantengravitation:Lichtbeugung}{Beugung von Licht} und'."\n".
                    'die \\jump{OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation}{gravitativ anziehende Wirkung auf andere Elementarteilchen-Strings} wird in den folgenden Abschnitten erklärt.'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante'),
                    )),
              )
          ); ?>


		    	<!  • Struktur der Gravitationskonstanten  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung', type => 'back'),
                    )),
                      
                  /* array( 'notice', array( Display => 'hideContent', text => array(
                    '• XXX',
                    ))), */
                      
                  array( 'text', array( text => array(
                    'Über die Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraviKonstStruktur} bekommen wir eine Idee der Struktur der Gravitationskonstanten,'."\n".
                    'wobei die Werte von vier der sechs Konstanten noch'."\n".
                    'nicht bekannt sind.\\footnote[*Entwick]{\\color{*Entwick}{Eine genaue Herleitung der unbekannten Konstanten wird gesucht. Hinweise darauf sind erbeten.}}'."\n",
                      'Der Wert der Gravitationskonstanten kann leider noch nicht hergeleitet werden, aber wir sind hiermit diesem Ziel einen Schritt näher gekommen.'."\n".
                    'Und zwar dadurch, mehr Einblick in die Strukturen zu gewinnen, die Grundlage ihrer Entstehung sind.'))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                        'In der Allgemeinen Relativitätstheorie existiert keinerlei Ansatz zum Verständnis der Gravitationskonstanten.'."\n".
                        'Sie wird dort, und auch in jeder anderen mir bekannten Theorie, schlicht als gemessener Wert eingesetzt.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Es besteht also Hoffnung, das hohe Ziel ihrer Herleitung mit der Quanten-Fluss-Theorie in Zukunft zu erreichen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:XXX', text =>
                                           
                'Analyse der strukturellen Abhängigkeiten der Gravitationskonstanten', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Schauen wir uns die Formeln zur Herleitung der \\jump{OM:FrQFT:Quantengravitation:Lichtverlangsamung}{Lichtverlangsamung im Gravitationsfeld} an,'."\n".
                    'dann finden wir die sich am Schluss ergebende Gravitationskonstante aus Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraviKonstStruktur}'."\n".
                    'im Grunde bereits in Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl-aus-m-ele-r}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  G  =  g_{s} \cdot g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} }  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraviKonstStruktur}', label_incr => false),
                      array( display => 'on',  latex => '{  {_{r}v_{ele,abl}}  =  g_{v} \cdot 2 \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} } \cdot \frac{ m_{ele} }{ r }  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl-aus-m-ele-r}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}v_{ele,abl}}  =  2 \cdot \frac{ G }{ g_{s} } \cdot \frac{ m_{ele} }{ r }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  G  =  g_{s} \cdot \frac{ 1 }{ 2 } \cdot \frac{ {_{r}v_{ele,abl}} \cdot r }{ m_{ele} }  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:Equ-GraviKonstAnhaeng', label_text => '\\name{OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:Equ-GraviKonstAnhaeng}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Die zentrale Rolle der Gravitationskonstanten \\term{G} besteht offenbar darin, die Proportionalität des Produkts der Ablenkungsgeschwindigkeit \\term{_{r}v_{ele,abl}}'."\n".
                    'mit dem Abstand \\term{r} zur Masse \\term{m_{ele}} eines Elementarteilchens auszudrücken:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  2 \cdot \frac{ G }{ g_{s} }  =  \frac{ {_{r}v_{ele,abl}} \cdot r }{ m_{ele} }  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:XXX',
                Title => '\\small{Proportionalität …}',
                TitleVis => 'Proportionalität:', ParagraphList => array(
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}v_{ele,abl}}  \sim  \frac{ m_{ele} }{ r }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Bei, für gewöhnlich, konstanter Masse \\term{m_{ele}} ergibt sich die vereinfachte Proportionalität:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  m_{ele}  =  const.  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}v_{ele,abl}}  \sim  \frac{ 1 }{ r }  }'),
                    ))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Weil sowohl die Ablenkungsgeschwindigkeit \\term{_{r}v_{ele,abl}} als auch die Masse \\term{m_{ele}} proportional zur Anzahl \\term{n_{ele,wq}} der Wirkungsquanten'."\n".
                    'im Elementarteilchen sind (siehe Formeln \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-EMasseSumWQEnergie-1} und \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl-aus-m-ele-r}),'."\n".
                    'ergibt sich, herunter gebrochen auf ein einzelnes Wirkungsquant, wenn wir berücksichtigen, dass dann nicht mehr beide gegenüberliegenden'."\n".
                    'Seiten des Elementarteilchen-Strings gleichzeitig wirken können (siehe Formeln \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-ele-eff} und \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl}):'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  m_{ele}  =  n_{ele,wq} \cdot m_{wq}  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-EMasseSumWQEnergie-1}', label_incr => false),
                      array( display => 'off', latex => '{  {_{r}p_{ele,abl}}  =  2 \cdot {_{r}p_{abl}}  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-ele-eff}', label_incr => false),
                      array( display => 'off', latex => '{  {_{r}v_{ele,abl}}  =  g_{v} \cdot {_{r}p_{ele,abl}}  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ G }{ g_{s} }  =  \frac{ {_{r}v_{wq,abl}} \cdot r }{ m_{wq} }  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:XXX',
                Title => '\\small{Proportionalität …}',
                TitleVis => 'Proportionalität:', ParagraphList => array(
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}v_{wq,abl}}  \sim  \frac{ 1 }{ r }  }'),
                    ))),
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
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:XXX', text =>
                                           
                'Irrelevanz der Einwirkdauer und des Wirkimpulses', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Bemerkenswert ist dabei, dass die Einwirkdauer \\term{T_{kegel}} der Impulskegelwand und des sich aus ihr ergebenden Wirkimpulses \\term{_{r}p_{ele,abl}}'."\n".
                    'keine Rolle für den Wert der Gravitationskonstanten spielen.'."\n".
                    'Dies kommt, weil sie sich gegenseitig wegkürzen, wenn wir die Gravitationskonstante aus ihren Einzelkonstanten berechnen.'."\n",
                      'Die Konstante \\term{g_{h}} berechnet sich aus Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-eff-aus-f-ele} zu:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  {_{r}p_{abl}}  =  g_{h} \cdot \frac{ h \cdot T_{kegel} \cdot n_{ele,wq} \cdot f_{ele} }{ r }  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-eff-aus-f-ele}', label_incr => false),
                      array( display => 'on',  latex => '{  g_{h}  =  \frac{ {_{r}p_{abl}} \cdot r }{ h \cdot T_{kegel} \cdot n_{ele,wq} \cdot f_{ele} }  }',
                                               latex_if_visible => '{  \Leftrightarrow  g_{h}  =  \frac{ {_{r}p_{abl}} \cdot r }{ h \cdot T_{kegel} \cdot n_{ele,wq} \cdot f_{ele} }  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:XXX',
                Title => '\\small{Proportionalität …}',
                TitleVis => 'Proportionalität:', ParagraphList => array(
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{abl}}  \sim  \frac{ T_{kegel} \cdot n_{ele,wq} \cdot f_{ele} }{ r }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Bei, für gewöhnlich, konstanter Masse \\term{m_{ele}}, und damit \\term{T_{kegel}}, \\term{n_{ele,wq}} und \\term{f_{ele}}, ergibt sich die vereinfachte Proportionalität:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}p_{abl}}  \sim  \frac{ 1 }{ r }  }'),
                    ))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Konstante \\term{g_{ω}} berechnet sich aus Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-T-kegel} zu:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  T_{kegel}  =  g_{\omega} \cdot \frac{ \hbar }{ n_{ele,wq} \cdot m_{wq} \cdot {_{\lowZero}c^{2}} }  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-T-kegel}', label_incr => false),
                      array( display => 'on',  latex => '{  g_{\omega}  =  \frac{ T_{kegel} \cdot n_{ele,wq} \cdot m_{wq} \cdot {_{\lowZero}c^{2}} }{ \hbar }  }',
                                               latex_if_visible => '{  \Leftrightarrow  g_{\omega}  =  \frac{ T_{kegel} \cdot n_{ele,wq} \cdot m_{wq} \cdot {_{\lowZero}c^{2}} }{ \hbar }  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:XXX',
                Title => '\\small{Konstanz …}',
                TitleVis => 'Konstanz:', ParagraphList => array(
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ g_{\omega} \cdot \hbar }{ m_{wq} \cdot {_{\lowZero}c^{2}} }  =  T_{kegel} \cdot n_{ele,wq}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \hbar  =  \frac{ T_{kegel} \cdot n_{ele,wq} \cdot m_{wq} \cdot {_{\lowZero}c^{2}} }{ g_{\omega} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \hbar  =  \frac{ T_{kegel} \cdot n_{ele,wq} \cdot E_{wq} }{ g_{\omega} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \hbar  =  \frac{ T_{kegel} \cdot E_{ele} }{ g_{\omega} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So wird ersichtlich, dass sich eine neue Konstante ergibt, die \\term{ħ} sowie \\term{g_{ω}} verbindet und die ich \\term{ħ_{ω}} nenne:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \hbar_{\omega}  :=  T_{kegel} \cdot E_{ele}  =  const.  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \hbar  =  \frac{ \hbar_{\omega} }{ g_{\omega} }  }'),
                    ))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Konstante \\term{g_{v}} berechnet sich aus den Formeln \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-ele-eff} und'."\n".
                    '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl}  zu:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  {_{r}p_{ele,abl}}  =  2 \cdot {_{r}p_{abl}}  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-ele-eff}', label_incr => false),
                      array( display => 'off', latex => '{  {_{r}v_{ele,abl}}  =  g_{v} \cdot {_{r}p_{ele,abl}}  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl}', label_incr => false),
                      array( display => 'off', latex => '{  \Rightarrow  {_{r}v_{ele,abl}}  =  g_{v} \cdot 2 \cdot {_{r}p_{abl}}  }'),
                      array( display => 'on',  latex => '{  g_{v}  =  \frac{ {_{r}v_{ele,abl}} }{ 2 \cdot {_{r}p_{abl}} }  }',
                                               latex_if_visible => '{  \Leftrightarrow  g_{v}  =  \frac{ {_{r}v_{ele,abl}} }{ 2 \cdot {_{r}p_{abl}} }  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:XXX',
                Title => '\\small{Proportionalität …}',
                TitleVis => 'Proportionalität:', ParagraphList => array(
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}v_{ele,abl}}  \sim  {_{r}p_{abl}}  }'),
                    ))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Nach dem Einsetzen dieser drei Konstanten in Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraviKonstStruktur} kann dann tatsächlich erheblich'."\n".
                    'gekürzt werden:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.SG', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  G  =  g_{s} \cdot g_{v} \cdot g_{\omega} \cdot g_{h} \cdot \frac{ \hbar }{ m_{wq} }  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraviKonstStruktur}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  G  =  g_{s} \cdot \frac{ {_{r}v_{ele,abl}} }{ 2 \cdot {_{r}p_{abl}} } \cdot \frac{ T_{kegel} \cdot n_{ele,wq} \cdot m_{wq} \cdot {_{\lowZero}c^{2}} }{ \hbar } \\\ \qquad\qquad\qquad \cdot \frac{ {_{r}p_{abl}} \cdot r }{ h \cdot T_{kegel} \cdot n_{ele,wq} \cdot f_{ele} } \cdot \frac{ \hbar }{ m_{wq} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  G  =  g_{s} \cdot \frac{ {_{r}v_{ele,abl}} }{ 2 \cdot {_{r}p_{abl}} } \cdot \frac{ n_{ele,wq} \cdot m_{wq} \cdot {_{\lowZero}c^{2}} }{ \hbar } \\\ \qquad\qquad\qquad \cdot \frac{ {_{r}p_{abl}} \cdot r }{ h \cdot n_{ele,wq} \cdot f_{ele} } \cdot \frac{ \hbar }{ m_{wq} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  G  =  g_{s} \cdot \frac{ {_{r}v_{ele,abl}} }{ 2 } \cdot \frac{ n_{ele,wq} \cdot m_{wq} \cdot {_{\lowZero}c^{2}} }{ \hbar } \\\ \qquad\qquad\qquad \cdot \frac{ r }{ h \cdot n_{ele,wq} \cdot f_{ele} } \cdot \frac{ \hbar }{ m_{wq} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  G  =  g_{s} \cdot \frac{ {_{r}v_{ele,abl}} }{ 2 } \cdot n_{ele,wq} \cdot {_{\lowZero}c^{2}} \\\ \qquad\qquad\qquad \cdot \frac{ r }{ h \cdot n_{ele,wq} \cdot f_{ele} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  G  =  g_{s} \cdot \frac{ {_{r}v_{ele,abl}} }{ 2 } \cdot {_{\lowZero}c^{2}} \cdot \frac{ r }{ h \cdot f_{ele} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  G  =  g_{s} \cdot \frac{ {_{r}v_{ele,abl}} \cdot r }{ 2 } \cdot \frac{ {_{\lowZero}c^{2}} }{ h \cdot f_{ele} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  G  =  g_{s} \cdot \frac{ {_{r}v_{ele,abl}} \cdot r }{ 2 } \cdot \frac{ 1 }{ m_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  G  =  g_{s} \cdot \frac{ 1 }{ 2 } \cdot \frac{ {_{r}v_{ele,abl}} \cdot r }{ m_{ele} }  }',
                                               latex_if_visible => '{  \Leftrightarrow  G  =  g_{s} \cdot \frac{ 1 }{ 2 } \cdot \frac{ {_{r}v_{ele,abl}} \cdot r }{ m_{ele} }  }',
                                               /* label_name => '', */label_text => '\\jumpname{OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:Equ-GraviKonstAnhaeng}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Es ergibt sich die Formel \\jumpname{OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:Equ-GraviKonstAnhaeng}, wie zu erwarten.'."\n",
                      'Interessanterweise haben ausschließlich die Ablenkgeschwindigkeit \\term{_{r}v_{ele,abl}}, der Abstand \\term{r} vom Massenzentrum und'."\n".
                    'die Masse \\term{m_{ele}} des Elementarteilchens einen Einfluss auf den Wert der Gravitationskonstanten.'."\n".
                    'Die Einwirkdauer \\term{T_{kegel}} der Impulskegelwand, der Wirkimpuls \\term{_{r}p_{ele,abl}} und die anderen Variablen und Konstanten fallen durchs Kürzen alle weg.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:XXX', text =>
                                           
                'XXX', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:XXX', text =>
                                           
                'XXX', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Laengenkontraktion'),
                    )),
              )
          ); ?>
        
          
		    	<!  • Längenkontraktion  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Quantengravitation:Laengenkontraktion',
              'Die Shapiro-Verzögerung zusammen mit einer gravitativen Längenkontraktion erzeugt die Raumzeitkrümmung', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante', type => 'back'),
                    )),
                      
                  /* array( 'notice', array( Display => 'hideContent', text => array(
                    '• XXX',
                    ))), */
                      
                  array( 'text', array( text => array(
                    'Erst eine Längenkontraktion der angenommenen Elementarteilchen-Struktur im Gravitationsfeld macht im Hinblick'."\n".
                    'auf ihre strukturellen Schwingungen Sinn.'."\n",
                      'Die Art der Längenkontraktion im Gravitationsfeld der Quanten-Fluss-Theorie ergibt sich dazu plausibel'."\n".
                    'aus Gieses Herleitung dieser gravitativen Längenkontraktion.'."\n".
                    'Der von ihm angeführte Mechanismus ist im Grunde der gleiche, wie der der Längen- oder Lorentzkontraktion von im Raum bewegter Materie'."\n".
                    'und entspricht so der Entstehung eines Heaviside-Ellipsoiden\\footnote{\\const{FrQFT_g_footnote_text_LorentzKontrFelder}}.'."\n",
                      'Demnach ist für die Entstehung eines Heaviside-Ellipsoiden die anisotrope Ausbreitung der seine Struktur bestimmenden Wechselwirkungsteilchen'."\n".
                    'ausschlaggebend.'."\n".
                    'Genauer gesagt ist es ihre in einer Raumrichtung abweichende Geschwindigkeit im Verhältnis zu den Geschwindigkeiten der anderen beiden Raumrichtungen, relativ zum Schwerpunkt des Elementarteilchens.\\footnote{Vgl. \\cite{Giese:RelaContra2009}.}'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Laengenkontraktion:XXX', text =>
                                           
                'Längenkontraktion von Elementarteilchen im Gravitationsfeld der Quantengravitation', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die strukturelle Geometrie von Elementarteilchen verändert sich nach Giese in ihrer Ausdehnung in einem Gravitationsfeld in tangentialer und radialer Richtung zur Zentralmasse,'."\n".
                    'wenn \\term{w_{0}} ihre Ausdehnung ohne diese Verzerrung ist.\\footnote{\\const{FrQFT_g_footnote_text_BasisteilchenMGravityLKMechanis}}'."\n".
                    'Adaptiert auf Formel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraLGEinstein} ergibt sich:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LK', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r,p}w_{mas}  =  w_{\lowZero} \cdot \left( 1 - 2 \cdot \frac{G \cdot M}{{_{\lowZero}c}^{2} \cdot r} \right)^{p - \frac{1}{2}}  }',
                                               footnote => '\\const{FrQFT_g_footnote_text_BasisteilchenMGravityLKFormel}'),
                    ))),
                  array( 'text', array( text => array(
                    'Wobei wir, wie oben schon erläutert, für die tangentiale Komponente relativ zur Zentralmasse \\term{p = ½} und für die radiale Komponente \\term{p = 1} setzen.'."\n".
                    'So, dass die tangentiale Komponente, wegen des Exponenten \\term{exp} mit \\term{exp = p – ½ = 0}, unverändert bleibt und nur die radiale Komponente, wegen des Exponenten \\term{exp} mit \\term{exp = p – ½ = ½}, eine Veränderung erfährt.'."\n",
                      'Diese geometrische Verzerrung der Struktur von Elementarteilchen im Gravitationsfeld ergibt sich nach Giese, weil sich mit der Veränderung'."\n".
                    'der Lichtgeschwindigkeit auch die Ausbreitungsgeschwindigkeit der Wechselwirkungsteilchen ändert, die die Wirkungsquanten im String aneinander binden.'."\n".
                    'Dieser der Lorentzkontraktion äquivalente Effekt im Zusammenhang mit Bindungsfeldern ist, wie schon gesagt, auch als Heaviside-Ellipsoid bekannt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Laengenkontraktion:XXX', text =>
                                           
                'Elementarteilchen-Spin-Frequenz gebietet die Längenkontraktion', subline =>
                  '')),
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '• Diese Herleitung findet sich nun extrem ähnlich in \\jumpname{OM:FrQFT:Basisteilchenmodell:Elementarteilchen-im-Gravitationsfeld}, also dort anpassen.',
                    ))),
                  array( 'text', array( text => array(
                    'Die innere Logik der Elementarteilchen-Struktur gebietet bei anisotroper, je Richtung unterschiedlicher Lichtgeschwindigkeit eine entsprechende anisotrope Verzerrung seiner Struktur.'."\n".
                    'Denn die Möglichkeit der Spin-Rotation der Elementarteilchen-Struktur – im Sinne der Lichtuhr Einstens, also des äußeren Haupt-Spins des Elementarteilchens – in jeder Raumrichtung bedingt, dass die lichtähnlichen Teilstrukturen'."\n".
                    'des \\jump{OM:FrQFT:Elementarteilchen}{Elementarteilchen-Modells} in Bezug auf jede Rotation in jeder denkbaren Raumrichtung mit der gleichen Frequenz rotieren (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton}).'."\n",
                      'Um zu zeigen, dass sich die anisotrope Lichtgeschwindigkeit und die anisotrope Strukturverzerrung bezüglich der Rotationsfrequenz des Spins aufheben, möchte ich die reine Bewegung'."\n".
                    'und deren Frequenz entlang der beiden Halbachsen des Heaviside-Ellipsoiden eines Elementarteilchens betrachten.'."\n".
                    'Die Bewegung auf ihrem Weg \\term{_{r,p}w_{mas}} mit der Geschwindigkeit \\term{_{r,p}c_{mas}}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r,p}c_{mas}  =  \frac{ _{r,p}w_{mas} }{ t }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die beiden unterschiedlichen Halbachsen führen möglicherweise zu zwei Spin-Halbachs-Frequenzen \\term{_{r,p}f_{spin,H}}; eine je Richtung \\term{p}.'."\n",
                      'Für die Frequenz \\term{f} gilt in Bezug auf die Zeit \\term{t} erst einmal ganz allgemein:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f  =  \frac{1}{t}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  _{r,p}f_{spin,H}  =  \frac{ _{r,p}c_{mas} }{ _{r,p}w_{mas} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für diese Frequenzen ergibt sich dann, wenn \\term{_{r}S} zur Substitution genutzt wird:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  _{r}S  =  \left( 1 - 2 \cdot \frac{G \cdot M}{{_{\lowZero}c}^{2} \cdot r} \right)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  _{r,p}f_{spin,H}  =  \frac{ {_{\lowZero}c} \cdot {_{r}S^{p}} }{ w_{\lowZero} \cdot {_{r}S^{p - \frac{1}{2}}} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  _{r,p}f_{spin,H}  =  \frac{ {_{\lowZero}c} }{ w_{\lowZero} } \cdot {_{r}S^{p - \left( p - \frac{1}{2} \right) }}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  _{r,p}f_{spin,H}  =  \frac{ {_{\lowZero}c} }{ w_{\lowZero} } \cdot {_{r}S^{\frac{1}{2}}}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  _{r,p}f_{spin,H}  =  \frac{ {_{\lowZero}c} }{ w_{\lowZero} } \cdot \left( 1 - 2 \cdot \frac{G \cdot M}{{_{\lowZero}c}^{2} \cdot r} \right)^{\frac{1}{2}}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  _{r,p}f_{spin,H}  =  \frac{ {_{\lowZero}c} }{ w_{\lowZero} } \cdot \sqrt{ 1 - 2 \cdot \frac{G \cdot M}{{_{\lowZero}c}^{2} \cdot r} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wie wir sehen, fällt die Richtung \\term{p} weg.'."\n".
                    'Die beiden Effekte, die richtungsabhängige variable Lichtgeschwindigkeit und die richtungsabhängige Veränderung der Geometrie, heben sich auf,'."\n".
                    'wie oben schon vermutet.'."\n",
                      'So können wir die Formel nun auf einen Umfang \\term{u_{0}} beziehen, also für die Spin-Frequenz übernehmen und entsprechend abwandeln:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LK', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  _{r}f_{spin}  =  \frac{ {_{\lowZero}c} }{ u_{\lowZero} } \cdot \sqrt{ 1 - 2 \cdot \frac{G \cdot M}{{_{\lowZero}c}^{2} \cdot r} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die vorstehende Rechnung führe ich im Abschnitt \\italic{\\jumpname{OM:FrQFT:Basisteilchenmodell:Elementarteilchen-im-Gravitationsfeld}}'."\n".
                    'auch für die etwas abweichenden Formeln des \\jump{OM:FrQFT:Basisteilchenmodell}{Basisteilchenmodells} durch.'."\n".
                    'Da das Basisteilchenmodell, anders als die Quanten-Fluss-Theorie und die akademische Physik, nicht zwischen der Elementarteilchen-Spin-Frequenz'."\n".
                    'und der De-Broglie-Frequenz\\footnote{\\const{FrQFT_g_footnote_text_DeBroglieFrequenzWellen}} der Elementarteilchen unterscheidet, sondern sogar behauptet, beide wären das Gleiche, wird'."\n".
                    'dort sichtbar, dass das Basisteilchenmodell die De-Broglie-Frequenz im Widerspruch zu den Beobachtungen beschreibt.'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'text', array( text => array(
                    'Dieses Ergebnis können wir nutzen, um im Folgenden die Lichtgeschwindigkeitsänderung isotrop, also Richtungsunabhängig, zu beschreiben.'."\n",
                      '\\color{*Bearb}{Im Basisteilchenmodell Gieses beschreibt eine Formel dieser Art die De-Broglie-Frequenz der Elementarteilchen, was den \\jump{OM:FrQFT:Basisteilchenmodell:Elementarteilchen-im-Gravitationsfeld}{experimentellen Beobachtungen widerspricht}.'."\n".
                    'In der Quanten-Fluss-Theorie wird die De-Broglie-Frequenz der Elementarteilchen hingegen beobachtungskonform beschrieben.\\color{*Bearb}{(Link)}}'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Laengenkontraktion:XXX', text =>
                                           
                'Gieses Längenkontraktion im Gravitationsfeld ist korrekt', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die von Giese über den Heaviside-Ellipsoiden hergeleitete Längenkontraktion im Gravitationsfeld der Quantengravitation entspricht'."\n".
                    'der inneren Logik des Elementarteilchen-Modells der Quanten-Fluss-Theorie.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Laengenkontraktion:XXX', text =>
                                           
                'XXX', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Laengenkontraktion:XXX', text =>
                                           
                'XXX', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Lichtbeugung'),
                    )),
              )
          ); ?>
        
          
		    	<!  • Lichtbeugung  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Quantengravitation:Lichtbeugung',
              'Eine lokal unterschiedliche Verlangsamung des Lichts erzeugt seine Beugung', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Laengenkontraktion', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '• Eine Herleitung der Lichtbeugung findet sich auch in \\jump[http://www.d1heidorn.homepage.t-online.de/Physik/Variables_c/Variables_c.html]{}{Variable Lichtgeschwindigkeit in der Allgemeinen Relativitätstheorie}, siehe auch Datei "Variable Lichtgeschwindigkeit in der Allgemeinen Relativitätstheorie.pdf".',
                    ))),
                      
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_GraviPhotonBeug, array( name =>  'OM:FrQFT:Quantengravitation:Lichtbeugung:Fig-GravitationPhotonBeugung'))),
                      
                  array( 'text', array( text => array(
                    'Die Beugung des Lichts oder der Bahn der Lichtteilchen, also der \\jump{*Photonen-Herlei}{Photonen}, kommt auf eine recht einfache Weise zustande:'."\n",
                      'In der Quanten-Fluss-Theorie haben Photonen eine Ausdehnung quer zu ihrer Bewegungsrichtung, eine innere Struktur (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson} und Seite \\italic{\\jumpname{OM:FrQFT:NeuePhysik}}, Abschnitt \\jumpname{*Elektromagnetische-Polar-Herlei}, \\jumpname{OM:FrQFT:NeuePhysik:Fig-Photon}).'."\n".
                    'Fliegt ein Photon an einer Masse vorbei, dann führt seine Ausdehnung radial zur Masse dazu, dass seine eine Seite der Masse näher ist als seine andere Seite (siehe \\jumpname{OM:FrQFT:Quantengravitation:Lichtbeugung:Fig-GravitationPhotonBeugung}).'."\n",
                      'Durch diesen Effekt ist die der Masse zugewandte Seite einer größeren \\jump{OM:FrQFT:Quantengravitation:Lichtverlangsamung}{Lichtverlangsamung} ausgesetzt, wie im vorhergehenden Abschnitt beschrieben, als seine abgewandte Seite.'."\n".
                    'So wird ein Photon, und jede andere dem Photon ähnliche Struktur – jede lichtähnliche Struktur –, auf eine gebeugte Bahn gezwungen.'."\n",
                      '\\jump{OM:FrQFT:Lepton:Quantengravitation}{Leptonen} und alle anderen Elementarteilchen, die nicht Photonen sind, enthalten lichtähnliche Strukturen.'."\n".
                    'Dies führt, wie im \\jump{OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation}{nachfolgenden Abschnitt} beschrieben, zu dem Effekt, den wir Gravitation nennen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtbeugung:XXX', text =>
                                           
                'Berechnung der Lichtbeugung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die sich dadurch ergebende Ablenkung des Lichts durch einen massiven Himmelskörper, wie unsere Sonne, entspricht den Beobachtungen\\footnote{\\const{FrQFT_g_footnote_text_ShapiroVerzoegerung}},'."\n".
                    'wie Giese in seiner Arbeit zeigt.\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, 2 Bending of a Beam of Light Passing a Massive Object, S. 1-3, hier S. 3. Und: Appendix A, Mathematical Deduction of the Refraction Process, S. 14-17.}'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation'),
                    )),
              )
          ); ?>
        
          
		    	<!  • Mechanismus der Gravitation  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation',
              'Gravitation resultiert aus der Beugung lichtähnlicher Strukturen in Elementarteilchen', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Lichtbeugung', type => 'back'),
                    )),
                  
                  // #!: Duplikat vom Vortext!
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_GraviMechanismus, array( name => 'OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation:Fig-GravitationMasse'))),
                      
                  array( 'text', array( text => array(
                    'Die uns im Alltag begegnende Gravitation, also der Grund, warum der Apfel von Baum fällt oder die Planeten um die Sonne kreisen, beruht in der Quanten-Fluss-Theorie,'."\n".
                    'sehr ähnlich wie in Gieses Basisteilchenmodell, auf der dynamischen Struktur der Materie-Elementarteilchen-Strings (Teilchen mit Ruhemasse beziehungsweise Materieinhalt).'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation:XXX', text =>
                                           
                'Berechnung der Gravitation', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die im \\jump{OM:FrQFT:Lepton}{Leptonen-Modell} (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton}), als Beispiel, kreisenden lichtähnlichen Strukturen werden bei jeder \\jump{OM:FrQFT:Lepton:Spins}{Rotation}'."\n".
                    'in Richtung der anziehenden Masse \\jump{OM:FrQFT:Quantengravitation:Lichtbeugung}{gebeugt} (siehe \\jumpname{OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation:Fig-GravitationMasse}).\\footnote{Vgl. \\cite{Huss:GFTv7.381j2012}, Kap. 5.3.2 Wechselwirkung von potenzialen Photonen-Beugungssystemen, S. 103-109, hier S. 104.}'."\n".
                    'In der Summe ergibt sich auf diese Weise die \\jump{OM:FrQFT:Gravitation:Mechanismus-der-Gravitation}{gravitative Beschleunigung}.'."\n",
                      'Giese ist es gelungen, die in Experimenten beobachtete und aus der Schule bekannte, klassische gravitative Beschleunigung aus dieser beständigen'."\n".
                    '(Licht-)Beugung in Elementarteilchen zu berechnen.\\footnote{\\const{FrQFT_g_footnote_text_BasisteilchenMGravity}}'."\n"))),
                      
                  array( 'text', array( Shape  => 'conclusion', text => array(
                        'Im Falle, dass sich das Elementarteilchenmodell der Quanten-Fluss-Theorie insgesamt als mit dem Standardmodell der Teilchenphysik equivalent herausstellt,'."\n".
                        'ergibt sich hierdurch die Vereinheitlichung der Quantenphysik mit der Allgemeinen Relativitätstheorie.'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Keine-Singularitaet'),
                    )),
                )
          ); ?>
        

		    	<!  • Keine problematische Singularität  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Quantengravitation:Keine-Singularitaet',
              'Nichts ist wirklich punktförmig, linienförmig oder flächig – alle Strukturen haben eine Ausdehnung', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Eine bemerkenswerte Besonderheit des \\jump{*Fraktales-Existenzprinzip-Herlei}{fraktalen Teilchenmodells} der Quanten-Fluss-Theorie besteht darin, dass sowohl die'."\n".
                    '\\jump{*Wirkungsquanten-Strings-Herlei}{Wirkungsquanten-Strings} am Ende nicht wirklich linienförmig'."\n".
                    'als auch die \\jump{OM:FrQFT:NeuePhysik:Fraktales-Universum}{Wirkungsquanten nicht punktförmig} sind,'."\n".
                    'sondern sie besitzen prinzipiell eine Ausdehnung.'."\n",
                      'Aus diesem Grund hat die Quanten-Fluss-Theorie im Prinzip kein \\jump{OM:FrQFT:NotwenVereinheit:Problem-der-Singularitaeten}{Problem mit unphysikalischen Singularitäten};'."\n".
                    'sprich, mit unendlich großer Gravitation zum Beispiel.'."\n".
                    'In der \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung}, oberer Teil,'."\n".
                    'erkennt man dies daran, dass die Spitzen des Gravitationsfeldes nach oben hin abgeschnitten sind.'."\n",
                      'Dies bedeutet nicht, dass die in Näherung hergeleiteten Formeln kein Problem mit Singularitäten haben.'."\n".
                    'Denn es sind ja offensichtlich die Formeln der Allgemeinen Relativitätstheorie, die bekannte Probleme mit Singularitäten beinhalten.'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'In der Quanten-Fluss-Theorie lassen sich Probleme mit Singularitäten durch genauere Näherungen reduzieren, was in der Allgemeinen Relativitätstheorie'."\n".
                      'zum Beispiel nicht möglich ist.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Die besseren Näherungen werden durch die fraktale Struktur der Quanten-Fluss-Theorie ermöglicht.'."\n".
                    'Diese führen selbstverständlich nur dann zu einer besseren Annäherung an die Realität, wenn die genutzte fraktale Struktur einen nachhaltigen'."\n".
                    'Realitätsbezug besitzt.'."\n",
                      'Die fraktale Struktur der Wirkungsquanten führt dazu, dass man sich einem Wirkungsquant nicht beliebig annähern kann,'."\n".
                    'ohne das sich sein Erscheinungsbild verändert.'."\n".
                    'Bei Annäherung löst es sich in seine \\jump{*Mikro-Wirkungsquanten-Herlei}{Mikrowirkungsquanten} auf, aus denen es besteht.'."\n".
                    'Und dies geht fraktal so zu den immer kleineren Strukturen hin weiter.'."\n"))),
                    /* 'XXX'."\n".
                    'XXX'."\n".
                    'Genau an dieser Stelle gibt es bei vielen anderen Ansätzen zur Vereinheitlichung der Quantenmechanik mit der Allgemeinen Relativitätstheorie'."\n".
                    'Probleme, weil die unendlichen Werte mathematische Formulierungen erschweren oder unmöglich machen.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                      
                  array( 'text', array( Shape  => 'conclusion', text => array(
                        'Die Quanten-Fluss-Theorie enthält keine problematischen Singularitäten.'."\n".
                        'Aus diesem Grund ist eine zur Lösung dieses Problems sonst notwendige, schwierige oder unmögliche,'."\n".
                        'sogenannte Renormierung\\color{*Bearb}{(Verweis)} der Gravitation nicht notwendig.'."\n"))), */
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:PhaenoDunkMat'),
                    )),
                )
          ); ?>

          
		    	<!  • Phänomen der Dunklen Materie:  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Quantengravitation:PhaenoDunkMat',
              'Eine erhöhte Vakuum-Energiedichte entfaltet in weiträumig verteilten großen Massen eine zusätzliche Gravitation', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Keine-Singularitaet', type => 'back'),
                    )),
                  
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_KosmosEuklid, array( name => 'OM:FrQFT:Quantengravitation:PhaenoDunkMat:Fig-KosmosEuklid',
                                                         text => 'Die Raumzeitkrümmung in der Quantengravitation der Quanten-Fluss-Theorie spiegelt sich in der Energie-Dichte des Vakuums wieder.'."\n".
                                                                 'Die Energiedichte des Vakuums, inklusive der in ihm eingebetteten Elementarteilchen, ist hier eine Erhaltungsgröße.'."\n".
                                                                 'Im symmetrischen Fall der gleichmäßigen Verteilung der Vakuumenergie im Kosmos wirkt demnach keine Gravitation.'."\n".
                                                                 'Bei einem Symmetriebruch durch ungleichmäßige Verteilung, bei Materiezusammenballungen, wirkt Gravitation zwischen diesen.'."\n"))),
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_GravitationspotMulti, array( name => 'OM:FrQFT:Quantengravitation:PhaenoDunkMat:Fig-GravitationspotMulti'))),
                      
                  array( 'text', array( text => array(
                    /*%! 'Bei der Berechnung der oben beschriebenen \\jump{OM:FrQFT:Quantengravitation:Lichtverlangsamung}{Lichtverlangsamung} und der Ableitung der'."\n".
                    '\\jump{OM:FrQFT:Quantengravitation:Lichtbeugung}{Lichtbeugung} daraus und schließlich des aus der Materie-Elementarteilchen-Struktur damit folgenden'."\n".
                    '\\jump{OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation}{Mechanismus der Gravitation} wurden Vereinfachungen vorgenommen.'."\n". */
                    'Bei den oben beschriebenen Berechnungen zur \\jump{OM:FrQFT:Quantengravitation:Lichtverlangsamung}{Lichtverlangsamung},'."\n".
                    '\\jump{OM:FrQFT:Quantengravitation:Lichtbeugung}{Lichtbeugung} und zum'."\n".
                    '\\jump{OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation}{Mechanismus der Gravitation} wurden Vereinfachungen vorgenommen.'."\n".
                    'Diese betreffen nicht nur die \\jump{OM:FrQFT:Quantengravitation:VereinfModellQGravitation:VereinfString}{vereinfachte Struktur des Leptonen-Strings},'."\n".
                    'sondern auch die Rolle des Vakuums und seiner Energiedichte in Bezug auf die Gravitation.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:PhaenoDunkMat:XXX', text =>
                                           
                'Rolle der Vakuum-Energiedichte in der Gravitation', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die mit radialem Abstand \\jump{OM:FrQFT:ZeitAlterungFrequenz:Dichtestruktur}{veränderliche Vakuum-Energiedichte} um eine zentrale Masse bildet das Gravitationspotenzial ab.'."\n".
                    'Um eine Masse herum ist die Vakuum-Energiedichte dabei erhöht und verringert sich nach außen hin.'."\n",
                      'Weil insgesamt für das Gravitationspotenzial in der Quanten-Fluss-Theorie Energieerhaltung gilt, ist der Energiegehalt des Vakuums'."\n".
                    'um große Massen herum zum Durchschnitt erhöht.'."\n".
                    'Irgendwo zwischen den großen Massen muss er demnach unter dem Durchschnitt liegen.'."\n",
                      'Durch die unterschiedliche Verteilung der Energiedichte im Vakuum kommt ein zusätzliches Gravitationsphänomen zustande, das der \\jump{OM:FrQFT:Dunkle-Materie}{Dunklen Materie}.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:PhaenoDunkMat:XXX', text =>
                                           
                'Ohne Symmetriebruch keine Gravitation, aber Graviradiation', subline =>
                  'Graviradiation hat ihre eigene Existenzberechtigung')),
                  array( 'text', array( text => array(
                    'Nach der Quanten-Fluss-Theorie gibt es in einem Vakuum, in dem die Energiedichte sehr gleichmäßig verteilt ist, keine Gravitation (siehe \\jumpname{OM:FrQFT:Quantengravitation:PhaenoDunkMat:Fig-KosmosEuklid}):'."\n",
                      'Gravitation würde nach der obigen Herleitung bedeuten, es gäbe in Elementarteilchen eine Lichtablenkung, die zu deren Beschleunigung führt.'."\n".
                    'Dies ist bei gleichmäßiger Verteilung der Vakuum-Energiedichte nicht der Fall.'."\n",
                      'Jedoch wirken die Wirkungsquanten des Vakuums durch die Graviradiation ihrer Impulskegel so aufeinander, dass sich ihre Geschwindigkeit auf die Lichtgeschwindigkeit reduziert.'."\n".
                    'Auf diese Weise entsteht eine innere Bindung des Vakuums.'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Dieser symmetrische Fall bedeutet also Graviradiation ohne Gravitation.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Hieran erkennen wir sehr gut, dass die Graviradiation ihre ganz eigene Existenzberechtigung besitzt, weil sie nicht immer gleichbedeutend mit Gravitation ist.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:PhaenoDunkMat:XXX', text =>
                                           
                'Gravitation entsteht durch einen Symmetriebruch', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Bilden sich Massenansammlungen im Vakuum, so ist die Symmetrie der Energiedichteverteilung gebrochen und es entsteht zwischen diesen Gravitation.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:PhaenoDunkMat:XXX', text =>
                                           
                'Weniger Vereinfachung führt zum Phänomen der Dunklen Materie', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Im Fall von Massenansammlungen verschiebt sich aber auch die Verteilung der Vakuum-Energiedichte derart, dass um große Massen herum und'."\n".
                    'im weiträumigen Vakuum innerhalb großer Massenansammlungen die Energiedichte im Verhältnis zum Vakuum zwischen diesen Ansammlungen erhöht ist.'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Diese erhöhte Energiedichte führt zu zusätzlicher Gravitation, die wir als \\jump{OM:FrQFT:Dunkle-Materie}{Phänomen der Dunklen Materie} beobachten,'."\n".
                      'wie das Sandkastenmodell der \\jumpname{OM:FrQFT:Quantengravitation:PhaenoDunkMat:Fig-GravitationspotMulti} verdeutlicht.'."\n",
                        'In ihm werden sogar die negativen Pole der Gravitation sichtbar, die sich im Vakuum zwischen den großen Massen befinden.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Das \\jump{OM:FrQFT:Gravitation}{emergente Verständnis der Quantengravitation} in der Quanten-Fluss-Theorie ermöglich das Verständnis der Vakuum-Struktur'."\n".
                    'des Gravitationspotenzials, mit deren Hilfe wir dann besondere Phänomene der Gravitation erkennen können.'."\n".
                    'Das Phänomen der Dunklen Materie ergibt sich auf diese Weise als natürliche Folge der Gravitation, wenn wir genauer hinschauen, indem wir Vereinfachungen auflösen.'."\n"))),
                  /* array( 'text', array( text => array(
                    'Betrachtung von Elapsonen- und Wirkungsquanten-Dichte unter Berücksichtigung der daraus entstehenden Gravitation des Vakuums XXX'."\n",
                    'Zum Verständis der großräumigen Gravitationsphänomene der Galaxien und des Kosmos rückt die Betrachtung von'."\n".
                    '\\jump{OM:FrQFT:Gravitation:Variable-Vakuumenergie-und-Higgs-Feld-Dichte}{Elapsonen- und Wirkungsquanten-Dichte} und deren Beziehung in den Mittelpunkt.'."\n".
                    'Dies gilt auch für extreme Gravitationsphänomene, wie sie bei \\jump{OM:FrQFT:Gravitation:Schwarze-Loecher}{Schwarzen Löchern} auftreten.'."\n"))),
                  array( 'text', array( text => array(
                    'Spannend wird es, wenn die Vereinfachungen, welche zur Einsteinschen Formel führen, reduziert werden:'."\n"))),
                      
                  array( 'text', array( Shape  => 'conclusion', text => array(
                        'Ich vermute, dass eine Berücksichtigung der Wirkungsquanten des Vakuums die Einsteinsche Formel so verändert,'."\n".
                        'dass das \\jump[][000AC4]{OM:FrQFT:Dunkle-Materie}{Phänomen der sogenannten Dunklen Materie} zum Vorschein kommt.'."\n".
                        'In einem Sonnensystem spielt die Gravitation der Wirkungsquanten des Vakuums keine große Rolle.'."\n".
                        'Am Rande einer Galaxie nimmt die Menge der zu berücksichtigen Wirkungsquanten jedoch mit dem Volumen der hypothetischen'."\n".
                        'Sphäre um das Zentrum der Galaxie zu, auf welcher bespielsweise unsere Sonne angesiedelt gedacht werden kann.'."\n".
                        'Die Wirkungsquanten innerhalb der Sphäre sind auch gegenüber denen außerhalb \\jump[][000AC4]{OM:FrQFT:Gravitation:Variable-Vakuumenergie-und-Higgs-Feld-Dichte}{dichter im Raum gepackt}. \\\\'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Diese Vermutung ist in Zukunft mittels Berechnungen und Simulationen zu untersuchen und wäre'."\n".
                    'bei ihrer Bestätigung ein gewichtiger Hinweis auf die Richtigkeit der Quanten-Fluss-Theorie.'."\n"))),
                  array( 'text', array( text => array(
                    'Dies schließt die Existenz von Elementarteilchen nicht aus, welche keine elektrische Polarisation in ihrem String tragen und'."\n".
                    'deshalb auch als Dunkle Materie wirken.'."\n".
                    'Vielleicht sind solche Elementarteilchen aber zur Erklärung gar nicht notwendig.'."\n"))), */
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Gravitation'),
                      //%! array(  jump_name => 'OM:FrQFT:Dunkle-Materie'),
                    )),
                )
          ); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
