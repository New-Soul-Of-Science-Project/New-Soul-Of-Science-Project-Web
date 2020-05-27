<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/FrQFT.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:FrQFT:Quantengravitation'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:FrQFT:NeuePhysik:Quantengravitation'); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  // • Online-Infos: http://www.einstein-online.info/vertiefung/quantenG
                      
                  array( 'notice', array( Display => 'invis', text => array(
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
                      
                  // #!: Wiederholt in "Mechanismus der Gravitation"!
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_GraviMechanismus, array( name => 'OM:FrQFT:Quantengravitation:Vortext:Fig-Gravitation-Masse'))),
                      
                  array( 'text', array( text => array(
                    'Die Erklärung der Gravitation in Form der Quantengravitation\\footnote{\\const{FrQFT_g_footnote_text_Quantengravi}} ist eine der sehnlichsten Wünsche'."\n".
                    'der heutigen theoretischen Physik.\\color{*Bearb}{(Verweis auf Hossenfelder Blog und SdW)}'."\n".
                    'Sie steht im Zentrum der Vereinheitlichung der Physik, der Verschmelzung von Quantenphysik\\footnote{\\const{FrQFT_g_footnote_text_Quantenphysik}} (Quantenfeldtheorie\\footnote{\\const{FrQFT_g_footnote_text_QFT}}) und Allgemeiner Relativitätstheorie\\footnote{\\const{FrQFT_g_footnote_text_ART}},'."\n".
                    'von der sich vermutlich die Mehrheit der Physiker das Verständnis vieler bisher \\jump{OM:FrQFT:NotwenVereinheit}{unerklärlicher Beobachtungen und wichtiger Fragen} erhoffen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Vortext:XXX', text =>
                                           
                'Quanten der Gravitation bisher unbeobachtet?', subline =>
                  'Ein Perspektivwechsel')),
                  array( 'text', array( text => array(
                    'Bisher gehen wir in der akademischen Physik davon aus, dass wir keine Phänomene beobachten, die einen direkten Rückschluss auf die Quanten der Gravitation zulassen.'."\n".
                    'Ich bin mittlerweile durch die neue Physik der Quanten-Fluss-Theorie zu dem Schluss gekommen, dass dies nicht stimmt.'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Die zuvor eingeführte \\jump{OM:FrQFT:NeuePhysik:Heisenbergsche-Unschaerferelation}{›Abzählinterpretation der Heisenbergschen Unschärferelation‹}'."\n".
                      'bedeutet in meinen Augen,'."\n".
                      'dass die Elementarteilchen Wirkungsimpulse \\bold{\\term{h}} (Plancksches Wirkungsquantum) als Impulskegel abstrahlen'."\n".
                      '(siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson}), die wir bei ihrer Energie- oder Impulsmessung beobachten und pro Zeit- oder Längeninterval zählen.'."\n",
                        'Genau diese Impulse sind jedoch auch, wie nachfolgend beschrieben, die Ursache der gravitativen Lichtverlangsamung (gravitative Zeitdilatation\\footnote{\\const{FrQFT_g_footnote_text_ZeitdilatationGrav}})'."\n".
                      'und Lichtbeugung, die aufgrund der Elementarteilchen-String-Struktur zur Gravitation führt (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Fig-Gravitation-Masse}).'."\n"))),
                      
                  array( 'text', array( text => array(
                    'So gesehen beobachten wir die Impulse der Quanten der Gravitation längst als \\jump{OM:FrQFT:NeuePhysik:Heisenbergsche-Unschaerferelation}{Plancksches Wirkungsquantum},'."\n".
                    'haben sie aber bisher nicht als solche erkannt.'."\n".
                    'Hieran wird wunderbar sichtbar, wie entscheidend Interpretationen und ihre Perspektivwechsel dafür sein können zu beurteilen, was wir schon längst in Händen halten.'."\n"))),
                      
                  // array( 'youtube',
                  //   array_merge( $FrQFT_g_youtube_ary_VakuumElapson, array( name => 'OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson'))),
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_VakuumElapson, array( name => 'OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson',
                                                         text => 'Ein Wirkungsquanten-String eines unpolarisierten Photons.'."\n".
                                                                 'Die Wirkungsquanten sind als rote Kugeln mit ihren abgestrahlten Impulskegeln dargestellt.'."\n".
                                                                 'Ihre Impulskegel verbinden die Wirkungsquanten zu einem geschlossenen String.'))),
                  // array( 'youtube',
                  //   array_merge( $FrQFT_g_youtube_ary_Lepton, array( name => 'OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton'))),
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_Lepton_highRes, array( name => 'OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton',
                                                         text => 'Ein Wirkungsquanten-String eines hypothetischen, geladenen Leptons; ein Elektron oder eines seiner Verwandten.'."\n".
                                                                 'Die Wirkungsquanten sind als rote Kugeln dargestellt, die durch ihre abgestrahlten Impulskegel miteinander Verbunden sind (nicht eingezeichnet). '."\n".
                                                                 'Seine Ladung entsteht durch die ungleiche Dichte der Wirkungsquanten auf dem String.'))),
                      
                  array( 'text', array( text => array(
                    'Durch die ›Abzählinterpretation der Heisenbergschen Unschärferelation‹ wird das Plancksche Wirkungsquantum zum neuen Fundamentalteilchen,'."\n".
                    'zum \\jump{*Wirkungsquanten-Herlei}{Wirkungsquant} \\term{wq} (siehe rote Kugeln in \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson} und \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton}).'."\n".
                    'Diese Wirkungsquanten fügen sich zu den \\jump{OM:FrQFT:Elementarteilchen}{Elementarteilchen-Strings} der Quanten-Fluss-Theorie zusammen.'."\n",
                      'Die von den Wirkungsquanten abgestrahlten Impulskegel in \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson},'."\n".
                    'die entsprechend auch die Wirkungsquanten in \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton} verbinden (nicht eingezeichnet),'."\n".
                    'lösen in benachbarten Elementarteilchen-Strukturen die gravitative Anziehung aus, wie auf dieser Seite gezeigt wird.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Vortext:Graviradiation', text =>
                                           
                'Graviradiation', subline =>
                  'Die Vereinheitlichung der Physik durch eine neue, fundamentale Wechselwirkung')),
                        
                  // #: Ref: *Graviradiation-Einfuehr
                  array( 'text', array( Shape  => 'italic', text => array(
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
                      'Der verwendete Ansatz zur quantitativen Beschreibung der Quantengravitation stammt aus dem Basisteilchenmodell\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}.}'."\n".
                    'von Albrecht Giese und verfeinert diesen mit Hilfe der Elementarteilchen-Struktur der Quanten-Fluss-Theorie.'."\n",
                      'Im Zentrum von Gieses Überlegung steht die Idee, dass ein Elementarteilchen, welches eine innere Struktur hat und aus rotierenden, lichtähnlichen Basisteilchen'."\n".
                    'aufgebaut ist, \\jump{OM:FrQFT:Quantengravitation:VereinfModellGravirad}{Störungswellen} in seine Umgebung aussendet.'."\n".
                    'Diese Störungswellen verlängern den Bewegungspfad von Lichtteilchen – \\jump{*Photonen-Herlei}{Photonen} – oder den der lichtähnlichen Strukturen in anderen Elementarteilchen in ihrem Umfeld.'."\n".
                    'Auf diese Weise \\jump{OM:FrQFT:Quantengravitation:Lichtverlangsamung}{verlangsamt} und \\jump{OM:FrQFT:Quantengravitation:Lichtbeugung}{beugt}'."\n".
                    'sich die Bewegung lichtähnlicher Strukturen im Raum, der eine gravitative Masse umgibt.'."\n".
                    'Befinden sich also Materie-Elementarteilchen in der Umgebung, bewegen diese sich auf die anziehende Masse zu, weil sie nach Giese ja aus lichtähnlichen Basisteilchen bestehen.'."\n",
                      'In der Quanten-Fluss-Theorie werden Gieses Basisteilchen nun durch \\jump{*Wirkungsquanten-Herlei}{Wirkungsquanten} ersetzt, die zu geschlossenen Strings verbunden sind.'."\n".
                    'Die Störungswellen sind die Wirkungsquanten-Impulskegel (virtuelle Wirkungsquanten) der neuen Graviradiation.'."\n".
                    'Die Quanten-Fluss-Theorie verfeinert also seinen Ansatz durch das neue Modell der Elementarteilchen aus Wirkungsquanten-Strings, wie zum Beispiel bei \\jump{OM:FrQFT:Lepton}{Leptonen} (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton}).'."\n".
                    'Durch die hier entwickelten Details werden auch Eigenschaften von Gieses Erklärungsansatz verständlich, die für mich bei ihm offen bleiben.'."\n"))),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellGravirad'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Vereinfachtes Modell der Graviradiation  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Quantengravitation:VereinfModellGravirad',
              'Wirkungsquanten-Impulskegel wirken als Störungswellen', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation', type => 'back'),
                    )),
                      
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_GraviLeptonWirkung, array( name => 'OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung'))),
                      
                  array( 'notice', array( Display => 'invis', text => array(
                    '• Film des simplifizierten Wirkungsquanten-Strings erstellen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\\const{FrQFT_g_text_HinwKosBeob}'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellGravirad:VereinfString', text =>
                                           
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
                    'in ihrem Umfeld verringern und deren Bahn ablenken, wie wir sehen werden (siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, links).'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellGravirad:WarumImpulskegel', text =>
                                       
                'Warum Impulskegel?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wie Giese an anderer Stelle in seinem Basisteilchenmodell ausführt, verändert sich die räumliche Geometrie der Ausbreitung von'."\n".
                    'lichtschnellen Wechselwirkungsteilchen, wenn das abstrahlende Teilchen sich bewegt.\\footnote{Vgl. \\cite{Giese:RelaContra2009}.}'."\n".
                    'Die Veränderung vollzieht sich dabei in Abhängigkeit von der Bewegungsgeschwindigkeit so, dass sich das'."\n".
                    'abgestrahlte Feld in Bewegungsrichtung umso mehr abflacht, also von der Kugel zum sogenannten Heaviside-Ellipsoid verformt, je größer die Geschwindigkeit ist.\\footnote{\\const{FrQFT_g_footnote_text_LorentzKontrFelder}}'."\n",
                      'Dies entspricht der \\jump{OM:VRT:Laengenkontraktion-Bewegung}{Lorentzkontraktion} (Längenkontraktion) der Relativitätstheorie.'."\n",
                      'Erreicht das abstrahlende Teilchen Lichtgeschwindigkeit, wie die simplifizierten Wirkungsquanten im vereinfachten Elementarteilchen-String,'."\n".
                    'dann werden effektiv nur noch Wechselwirkungsteilchen senkrecht zur Bewegungsrichtung ausgesandt.\\footnote[*Entwick]{\\color{*Entwick}{Dies muss an anderer Stelle noch explizit aus Gieses Überlegungen hergeleitet werden. Auch Oliver Heaviside soll dazu gearbeitet haben (siehe \\jump[https://en.wikisource.org/w/index.php?title=Motion_of_Electrification_through_a_Dielectric&oldid=4808645]{}{Motion of Electrification through a Dielectric}).}}'."\n".
                    'Deutlich wird dies auch an folgender Überlegung:'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Flacht sich die Struktur eines Elementarteilchens immer weiter ab, dann bewegen sich die Wechselwirkungspole, die für den Zusammenhalt seiner Struktur sorgen,'."\n".
                      'immer weiter in die zentrale Ebene senkrecht zu seiner Bewegungsrichtung.'."\n".
                      'Sind diese Pole nun so gut wie auf dieser Ebene angekommen, dann können sich die Wechselwirkungsteilchen zwischen ihnen auch nur in dieser Ebene'."\n".
                      'und so dann auch in den Raum hinaus bewegen.'."\n",
                        'Das bedeutet eine senkrechte und zu jedem Zeitpunkt ringförmige Abstrahlung der Wechselwirkungsteilchen der Wirkungsquanten in den Raum.'."\n"))),

                  array( 'text', array( text => array(
                    'So ergibt sich dann die Form eines Impulskegels für die Abstrahlung der Wirkungsquanten:'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Eine senkrechte Ringform der Abstrahlung der virtuellen Wirkungsquanten je Zeitpunkt heißt eine kegeloberflächenförmige Struktur ihrer Ausbreitung'."\n".
                      'um die Bahn des Strings in der Zeit.'."\n".
                      'Und dieser Kegel hat einen Öffnungswinkel von 90°, denn das abstrahlende Teilchen hat die gleiche Geschwindigkeit, wie seine Abstrahlung.'."\n"))),

                  array( 'text', array( text => array(
                    'Dementsprechend hat dann auch das von einem einzelnen Photon, einem Lichtteilchen, abgestrahlte elektromagnetische Feld im zeitlichen Verlauf die Form einer Kegeloberfläche.\\color{*Bearb}{(Verweis)}'."\n"))),
                      
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellGravirad:WQIUmgekehrtProport', text =>
                                           
                'Wirkungsquanten-Impulse verringern ihre Intensität im Raum mit \\term{1/r}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Abnahme ihrer Impulsintensität im Raum hat bei Wirkungsquanten-Impulsen eine Besonderheit:'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Eine ringförmige Ausbreitung bedeutet, eine Abnahme der Impulsintensität mit \\term{1/r}.'."\n".
                      'Das kommt, weil die Dichte der Wechselwirkungsteilchen im Ring  mit \\term{1/r} abnimmt, denn der Umfang des Rings nimmt mit \\term{r} zu,'."\n".
                      'während die Anzahl der Wechselwirkungsteilchen im Ring gleich bleibt.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Damit verhält sich die Graviradiation anders als alle anderen Wechselwirkungen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellGravirad:XXX', text =>
                                           
                'Unterschied von Wechselwirkungen mit der Intensitätsabnahme von \\term{1/r^{2}} zu \\term{1/r}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Bei einer Wechselwirkung, deren Stärke mit \\term{1/r^{2}} mit dem Abstand \\term{r} abnimmt, werden die Wechselwirkungsteilchen zu jedem Zeitpunkt'."\n".
                    'in Form von Kugeloberflächen – sphärisch – in den Raum abgestrahlt.'."\n".
                    'In der laufenden Zeit ergibt sich eine kugelförmige Abstrahlung.'."\n",
                      'Da dies auch bedeutet, die Abstrahlung erfolgt in alle Richtungen im Raum, wird ein in der Nähe befindliches Objekt quasi zu jedem Zeitpunkt'."\n".
                    'von den Wechselwirkungsteilchen getroffen.'."\n".
                    'Alle bisher bekannten Wechselwirkungen, wie die elektromagnetische, die schwache, die starke und die Gravitation, sind von dieser Art.'."\n",
                      'Nur die Wechselwirkung eines einzelnen Wirkungsquants ist anders:'."\n".
                    'Bei seiner Wechselwirkung, deren Stärke mit \\term{1/r} zum Abstand \\term{r} abnimmt, werden die Wechselwirkungsteilchen zu jedem Zeitpunkt'."\n".
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
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Quantengravitation:Lichtverlangsamung',
              'Aus virtuellen Wirkungsquanten bestehende Störungswellen verlangsamen das Licht', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellGravirad', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'invis', text => array(
                    '• Darauf hinweisen, dass diese Berechnungen im Rahmen des Wirkungsquanten-Bewegungsraums erfolgen und nicht im Rahmen des Licht-Bewegungsraums. Daher ergibt sich die gravitative Rotverschiebung und Zeitdilatation erst korrekt, wenn das Verhältnis von tangentialer und radialer Lichtgeschwindigkeit im hier verwendeten Wirkungsquanten-Bewegungsraum im Verhältnis zur \\jump{OM:FrQFT:Gravitation:Laengenkontraktion-im-Gravitationsfeld}{gravitativen Längenkontraktion} berücksichtigt wird. Im Licht-Bewegungsraum ist dann in Bezug auf die LG generell \\term{p = 0} und in Bezug auf die Rotverschiebung für den tangentialen Fall \\term{p = 0} und im radialen Fall \\term{p = 1/2} zu setzen, so dass sich die korrekte Rotverschiebungsformel\\footnote[*Bearb]{\\const{FrQFT_g_footnote_text_PhotonFrequenzGravi}} ergibt.',
                    '• Eine Herleitung der Lichtverlangsamung findet sich auch in \\jump[http://www.d1heidorn.homepage.t-online.de/Physik/Variables_c/Variables_c.html]{}{Variable Lichtgeschwindigkeit in der Allgemeinen Relativitätstheorie}, siehe auch Datei "Variable Lichtgeschwindigkeit in der Allgemeinen Relativitätstheorie.pdf".',
                    ))),
                                            
                  array( 'text', array( text => array(
                    '\\const{FrQFT_g_text_HinwKosBeob}'."\n"))),
                  array( 'text', array( text => array(
                    'In der folgenden ersten Näherung bleibe ich im Denkschema von Giese:'."\n",
                      'Ich betrachte nur den Einfluss der \\jump{*Wirkungsquanten-Herlei}{Wirkungsquanten} eines simplifizierten Strings eines Materie-Elementarteilchens, eines Leptonen-Strings.'."\n".
                    'Dabei lasse ich also die Wirkungsquanten des umgebenden \\jump{OM:FrQFT:Vakuum}{Vakuums} außer Acht und gehe auch davon aus, dass sich die Wirkungsquanten der vorbei fliegenden \\jump{*Photonen-Herlei}{Photonen} bereits auf Spiralbahnen bewegen.'."\n".
                    'Die Photonen werden also simplifiziert und quasi wie sich mit Lichtgeschwindigkeit \\term{_{0}c} bewegende einzelne Wirkungsquanten behandelt.'."\n"))),
                      
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_GraviLeptonLichtbahn, array( name => 'OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn'))),
                      
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Virtuelle Wirkungsquanten-Impulse als Störungswellen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Störungswirkung der \\jump{*Wirkungsquanten-virtuelle-Einfuehr}{virtuellen Wirkungsquanten} können wir uns nach Giese aus zwei Komponenten bestehend vorstellen:'."\n",
                      'Zunächst wirkt die Störung immer in radialer Richtung, ausgehend vom String-Mittelpunkt (siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung}, Mitte, und \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, links).'."\n".
                    'Die Störungswellen sind Longitudinalwellen\\footnote{Internet: \\\\ Vgl. \\cite{wiki:Longitudinalwelle:2019}.}, breiten sich also ähnlich wie Schallwellen aus.\\footnote[*Entwick]{\\color{*Entwick}{Wäre also interessant, ob es in der Akustik einen ähnlichen Effekt gibt. Ich habe etwas in dieser Richtung mal im Spektrum der Wissenschaft gelesen. \\color{*Bearb}{(Artikel heraussuchen.)}}}'."\n".
                    'Die Störung hat einen Aspekt, der sich auf die tangentiale Komponente \\term{_{r,tan}c}, und einen anderen, der sich auf die radiale Komponente \\term{_{r,rad}c} der verlangsamten effektiven Photonen-Geschwindigkeit \\term{_{r}c} auswirkt'."\n".
                    '(siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, Mitte und rechts).\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier Abbildungen C2, C3, S. 21.}'."\n",
                      'Je nach Bewegungsrichtung oder -winkel des Photons relativ zur Verbindungslinie zwischen dem Zentrum des graviradiativ wirkenden Elementarteilchens und des Photons,'."\n".
                    'wird das Photon entsprechend seiner tangentialen und radialen Bewegungsanteile verlangsamt.'."\n".
                    'Dies kommt, weil die virtuellen Wirkungsquanten-Pulse der Graviradiationsquelle die Wirkungsquanten des vorbei fliegenden Photons ablenken'."\n".
                    '(siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, links).\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier Abbildungen C1, S. 20.}'."\n".
                    'Nach dem Basisteilchenmodell von Giese bewegt sich das Photon durch die Pulse auf einem welligen, ondulierten Pfad, wodurch sich seine effektive Bahngeschwindigkeit reduziert.'."\n",
                      'Aus Sicht der Quanten-Fluss-Theorie möchte ich hier kurz eine eingeschobene Bemerkung machen, was in einer detaillierten Betrachtung, ohne Simplifizierung, passiert:'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
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
                                               label_name => 'OM:FrQFT:Quantengravitation:Equ-c-eff-tan', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-c-eff-tan}', label_incr => true),
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
                    'auf seiner effektiven Bahn zurücklegt; in unserem Fall \\term{_{r,rad}w_{ph}} als konstant angenommene Hilfsstrecke, folgend kurz als \\term{w_{ph}} bezeichnet.'."\n",
                    //-- 'Die Verlängerung des Pfads durch die Störung wird hierbei als innere Veränderung des Photons verstanden.'."\n",
                      'Wenn \\term{w_{ph}} also die Strecke ist, die das Licht für den kosmischen Beobachter zurücklegt,'."\n".
                    'und \\term{t} das ortsabhängige Voranschreiten des Prozesses, dann ergibt sich für \\term{_{r,rad}c}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r,rad}c}  =  \frac{ {w_{ph}} }{ t }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ {w_{ph}} }{ {_{r,rad}c} }  }'),
                      array( display => 'off', latex => '{  \Rightarrow  t_{\pm}  =  \frac{ {w_{ph}} }{ {_{r,rad}c_{\pm}} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  t_{\pm}  =  \frac{ {w_{ph}} }{ {_{\lowZero}c} \pm {_{r}v_{abl}} }  }',
                                               latex_if_visible => '{  \Leftrightarrow  t_{\pm}  =  \frac{ {w_{ph}} }{ {_{\lowZero}c} \pm {_{r}v_{abl}} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier ist das Vorzeichen von \\term{±v_{abl}} von entscheidender Bedeutung.'."\n",
                      'Das zeitliche Mittel ist dann:\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier S. 21.}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                       array( display => 'on',  latex => '{  t  =  \frac{ t_{-} + t_{+} }{ 2 }  }',
                                                footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'Giese:TheOrigOfGravity2011')).', Appendix C Variation in the Speed of Light, S. 19-22, hier Formel C.3, S. 21.'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ 1 }{ 2 } \cdot \Biggl( \frac{ {w_{ph}} }{ {_{\lowZero}c} - {_{r}v_{abl}} } + \frac{ {w_{ph}} }{ {_{\lowZero}c} + {_{r}v_{abl}} } \Biggr)  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ 1 }{ 2 } \cdot \Biggl( \frac{ {w_{ph}} \cdot \bigl( {_{\lowZero}c} + {_{r}v_{abl}} \bigr) }{ \bigl( {_{\lowZero}c} - {_{r}v_{abl}} \bigr) \cdot \bigl( {_{\lowZero}c} + {_{r}v_{abl}} \bigr) } \\\ \qquad\qquad\qquad\qquad + \frac{ {w_{ph}} \cdot \bigl( {_{\lowZero}c} - {_{r}v_{abl}} \bigr) }{ \bigl( {_{\lowZero}c} + {_{r}v_{abl}} \bigr) \cdot \bigl( {_{\lowZero}c} - {_{r}v_{abl}} \bigr)} \Biggr)  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ 1 }{ 2 } \cdot \Biggl( \frac{ {w_{ph}} \cdot \bigl( {_{\lowZero}c} + {_{r}v_{abl}} \bigr) }{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} } \\\ \qquad\qquad\qquad\qquad + \frac{ {w_{ph}} \cdot \bigl( {_{\lowZero}c} - {_{r}v_{abl}} \bigr) }{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} } \Biggr)  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ {w_{ph}} }{ 2 } \cdot \frac{ \bigl( {_{\lowZero}c} + {_{r}v_{abl}} \bigr) + \bigl( {_{\lowZero}c} - {_{r}v_{abl}} \bigr) }{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} }  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  {w_{ph}} \cdot \frac{ {_{\lowZero}c} }{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} }  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  t  =  \frac{ {w_{ph}} }{ \frac{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} }{ {_{\lowZero}c} } }  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  \frac{ {w_{ph}} }{ t }  =  \frac{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} }{ {_{\lowZero}c} }  }'),
                       array( display => 'off', latex => '{  \Leftrightarrow  {_{r,rad}c}  =  \frac{ {_{\lowZero}c^{2}} - {_{r}v_{abl}^{2}} }{ {_{\lowZero}c} }  }',
                                                footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'Giese:TheOrigOfGravity2011')).', Appendix C Variation in the Speed of Light, S. 19-22, hier Formel C.4, S. 21.'),
                       array( display => 'on',  latex => '{  \Leftrightarrow  {_{r,rad}c}  =  {_{\lowZero}c} \cdot \Biggl( 1 - \frac{ {_{r}v_{abl}^{2}} }{ {_{\lowZero}c^{2}} } \Biggr)  }',
                                                footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'Giese:TheOrigOfGravity2011')).', Appendix C Variation in the Speed of Light, S. 19-22, hier Formel C.4, S. 21.',
                                                label_name => 'OM:FrQFT:Quantengravitation:Equ-c-eff-rad', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-c-eff-rad}', label_incr => true),
                    ))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Zusammenfassung der tangentialen und radialen Komponente', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wenn wir die Formeln \\jumpname{OM:FrQFT:Quantengravitation:Equ-c-eff-tan} und \\jumpname{OM:FrQFT:Quantengravitation:Equ-c-eff-rad} vergleichen, fällt uns deren Ähnlichkeit auf.'."\n".
                    'Beide Formeln lassen sich zusammenfassen, wenn wir eine Potenz \\term{p} einführen, die für die tangentiale Komponente den Wert \\term{p = ½}'."\n".
                    'und für die radiale den Wert \\term{p = 1} erhält:\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier S. 22.}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r,p}c}  =  {_{\lowZero}c} \cdot \Biggl( 1 - \frac{ {_{r}v_{abl}^{2}} }{ {_{\lowZero}c^{2}} } \Biggr)^{p}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Equ-c-eff', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-c-eff}', label_incr => true),
                    ))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:WQIUmgekehrtProport', text =>
                                           
                'Wirkungsquanten-Impulse verringern sich in ihrer Intensität mit \\term{1/r}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ungewöhnlicherweise nimmt die Impulsintensität \\term{_{r}ii} der störenden Wirkung der Wirkungsquanten-Impulskegel bei größerem Abstand'."\n".
                    '\\jump{OM:FrQFT:Quantengravitation:VereinfModellGravirad:WQIUmgekehrtProport}{umgekehrtproportional zum Abstand} \\term{r} vom String ab.'."\n".
                    'Dieses Phänomen entsteht, weil die \\jump{OM:FrQFT:Quantengravitation:VereinfModellGravirad:WarumImpulskegel}{Impulskegel der Wirkungsquanten} ringförmig abgestrahlt'."\n".
                    'werden und sich im Verlauf der Zeit zu einem Impulskegel formen (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson}).'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r}ii}  =  \frac{ 1 }{ r }  }'),
                    ))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Störende Wirkung der virtuellen Wirkungsquanten', subline =>
                  '')),
                  /*%! array( 'text', array( text => array(
                    '\\color{*Bearb}{Alter Ansatz:}'."\n".
                    'Die effektiv störende Wirkung \\term{_{r}h_{eff}} der abgestrahlten virtuellen Wirkungsquanten ist proportional zur Frequenz ihres Eintreffens \\term{f_{vwq}}'."\n".
                    'und der Impulsintensität \\term{_{r}h_{ii}} der einzelnen Impulse, in Abhängigkeit von der Winkelgeschwindigkeit ihrer Abstrahlung \\term{ω}.'."\n".
                    'Die Impulsfrequenz hängt wiederum von der virtuellen Wirkungsquanten-Stromdichte \\term{_{r}ρ_{vwq}} und seiner Stromgeschwindigkeit \\term{_{r,rad}c} ab:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r}h_{eff}}  \sim  {_{r}h_{ii}} \cdot f_{vwq}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{eff}}  =  g_{ii} \cdot {_{r}h_{ii}} \cdot f_{vwq}  }'),
                      array( display => 'on',  latex => '{  f_{vwq}  =  {_{r}\rho_{vwq}} \cdot {_{r,rad}c}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{eff}}  =  g_{ii} \cdot {_{r}h_{ii}} \cdot {_{r}\rho_{vwq}} \cdot {_{r,rad}c}  }'),
                    ))), */
                  array( 'text', array( text => array(
//                    '\\color{*Bearb}{Neuer, einfacherer Ansatz:}'."\n".
                    'Die effektiv störende Wirkung \\term{_{r}h_{eff}} des Stroms der eintreffenden virtuellen Wirkungsquanten muss nach Analyse der \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung}'."\n".
                    'mehrere Proportionalitätsanforderungen gleichzeitig erfüllen:'."\n",
                      'Die Störung der eintreffenden Impulse ist proportional zu der Wirkung \\term{h} jedes Wirkungsquants des Strings, die die Ausgangsintensität der Impulse bestimmt.'."\n".
                    'Sie ist proportional zur Frequenz ihres Eintreffens \\term{f_{vwq}}, die die Anzahl der Impulse pro Zeit und damit die Energie und Masse des Elementarteilchens widerspiegelt,'."\n".
                    'und zur Dauer ihrer Einwirkung, also zur Winkelgeschwindigkeit ihrer Abstrahlung \\term{ω_{ele}}.'."\n",
                      'Und die Störung muss, wie \\jump{OM:FrQFT:Quantengravitation:Lichtverlangsamung:WQIUmgekehrtProport}{oben} gerade gezeigt, auch proportional zur Abnahme der Impulsintensität \\term{_{r}ii} mit dem Abstand \\term{r} vom Entstehungsort des Impulses auf dem String sein.'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r}h_{eff}}  \sim  h  }'),
                      array( display => 'on',  latex => '{  {_{r}h_{eff}}  \sim  f_{vwq}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}h_{eff}}  \sim  \frac{ n_{vwq} }{ t }  }'),
                      array( display => 'on',  latex => '{  {_{r}h_{eff}}  \sim  \omega_{ele}  }'),
                      array( display => 'on',  latex => '{  {_{r}h_{eff}}  \sim  {_{r}ii}  =  \frac{ 1 }{ r }  }'),
                    ))),
                  array( 'text', array( text => array(
//                    '\\color{*Bearb}{Neuer, einfacherer Ansatz:}'."\n".
                    'Wie in \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}, unten, dargestellt, entstehen die virtuellen Wirkungsquanten aus den Wirkungsquanten des Strings'."\n".
                    'und haben so an ihrem Ursprungsort die gleiche Frequenz.'."\n",
                      'Bemerkenswerterweise ist festzustellen, dass diese Frequenzen, der Abstrahlung der Impulse und ihres Eintreffens, immer gleich bleiben, wie ich nachfolgend noch erkläre,'."\n".
                    'wenn sich ihre Ausbreitungsgeschwindigkeit von Ort zu Ort ändert:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{vwq}  =  f_{wq}  }'),
                      array( display => 'off', latex => '{  f_{vwq}  =  \frac{ n_{vwq} }{ t }  }'),
                      array( display => 'off', latex => '{  f_{wq}  =  \frac{ n_{wq} }{ t }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n_{vwq}  =  n_{wq}  }'),
                    ))),
                  array( 'text', array( text => array(
//                    '\\color{*Bearb}{Neuer, einfacherer Ansatz:}'."\n".
                    'Beide Frequenzen sind unabhängig von der Veränderung ihrer Ausbreitungsgeschwindigkeit.'."\n",
                      'Dies ist eine sehr wichtige Eigenschaft der hier entwickelten Quantengravitation:'."\n"))),
                      
                  array( 'fade-in-area', array( Display => 'invis', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => 'Störungsfrequenz ist unabhängig von der Veränderung ihrer Ausbreitungsgeschwindigkeit …',
                TitleVis => 'Störungsfrequenz ist unabhängig von der Veränderung ihrer Ausbreitungsgeschwindigkeit:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Wenn die beiden Frequenzen \\term{f_{vwq}} und \\term{f_{wq}} die gleichen sind, dann ist die Veränderung der Dichte \\term{_{r}ρ_{vwq}} der virtuellen Wirkungsquanten-Impulse'."\n".
                    'ausschließlich von der Veränderung der Ausbreitungsgeschwindigkeit der Impulse abhängig.'."\n".
                    'Genauso ist die Veränderung der Wirkungsquanten-Dichte \\term{_{r_{ele}}ρ_{ele,wq}} auf dem String ausschließlich durch die Veränderung der Geschwindigkeit von dessen Rotation bestimmt.'."\n",
                      'Beide Geschwindigkeiten variieren von Ort zu Ort also mit der Verlangsamung der Ausbreitung des Lichts im Raum \\term{_{r,p}c},'."\n".
                    'die wir hier ja insgesamt berechnen wollen, mit dem Abstand \\term{r} und ihrer Bewegungsrichtung \\term{p}.'."\n",
                      'Die Variation beider Dichten mit der Ausbreitungsgeschwindigkeit ihrer (virtuellen) Wirkungsquanten entspricht der der Detektorwellenlänge \\term{_{x}λ_{wq,d}}'."\n".
                    'von Licht bei sich ändernder Lichtgeschwindigkeit aus Formel \\jumpname{OM:FrQFT:Quantengravitation:Equ-DetektWellenlaengeAlt}.'."\n".
                    'Hieraus können wir die Dichte bei einer bestimmten Ausbreitungsgeschwindigkeit ableiten:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{x}\lambda_{wq,d}}  =  {_{\lowZero}\lambda_{wq,d}} \cdot {_{x}\alpha}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Equ-DetektWellenlaengeAlt', label_text => '\\jump{OM:FrQFT:ZeitAlterungFrequenz:Equ-DetektWellenlaengeAlt}{\\name{OM:FrQFT:Quantengravitation:Equ-DetektWellenlaengeAlt}}'),
                      array( display => 'on',  latex => '{  {_{x}\rho_{wq,d}}  =  \frac{ 1 }{ {_{x}\lambda_{wq,d}} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}\rho_{wq,d}}  =  \frac{ 1 }{ {_{\lowZero}\lambda_{wq,d}} \cdot {_{x}\alpha} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}\rho_{wq,d}}  =  \frac{ {_{\lowZero}\rho_{wq,d}} }{ {_{x}\alpha} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und wir können sehen, dass die Veränderung der Ausbreitungsgeschwindigkeit der Veränderung der Dichte genau so entgegen wirkt,'."\n".
                    'dass die Frequenz gleich bleibt, egal an welchem Ort oder in welcher Richtung die Bewegung stattfindet:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{x}c}  =  {_{\lowZero}c} \cdot {_{x}\alpha}  }',
                                               /* label_name => '', */ label_text => '\\jumpname{OM:FrQFT:ZeitAlterungFrequenz:Equ-LGAenderungKos}', label_incr => false),
                      array( display => 'on',  latex => '{  {_{x}f_{wq}}  =  {_{x}\rho_{wq}} \cdot {_{x}c}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}f_{wq}}  =  \frac{ {_{\lowZero}\rho_{wq,d}} }{ {_{x}\alpha} } \cdot {_{\lowZero}c} \cdot {_{x}\alpha}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{x}f_{wq}}  =  {_{\lowZero}\rho_{wq,d}} \cdot {_{\lowZero}c}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies ist eine wichtige Erkenntnis:'."\n"))),
                    ))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Durch die Unabhängigkeit der Störungsfrequenz von der Veränderung ihrer Ausbreitungsgeschwindigkeit und der nachfolgend gezeigten Berechnung der Gravitation'."\n".
                      'über die statistische Standardabweichung, lässt sich die Quantengravitation vieler Teilchen, also größerer Massen, beliebig kombinieren.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Der Schluss deutet darauf hin, dass wir es hier mit einer plausiblen Struktur der Quantengravitation zu tun haben.'."\n",
//                      '\\color{*Bearb}{Neuer, einfacherer Ansatz:}'."\n".
                      'Nach etwas Überlegung und Untersuchung der geforderten Proportionalitäten zeigt sich, dass alle, bis auf die der Intensitätsabnahme mit dem Abstand,'."\n".
                    'durch die Masse des Elementarteilchens erfüllt sind:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  m_{ele}  =  n_{wq} \cdot m_{wq}  }'),
                      array( display => 'off', latex => '{  E_{ele}  =  m_{ele} \cdot {_{\lowZero}c^{2}}  }'),
                      array( display => 'off', latex => '{  E_{ele}  =  h \cdot f_{ele}  }',
                                               /* label_name =>'', */ label_text => '\\jumpname{OM:FrQFT:HeisenbergUnschaerfe:Equ-EinsteinEnergieLichtQuant}', label_incr => false,
                                               footnote => 'Vgl. \\cite{wiki:PlanckschesWirkungsquantum2013}, Definition.'),
                      array( display => 'off', latex => '{  f_{ele}  =  \frac{ n_{ele} }{ t }  }'),
                      array( display => 'off', latex => '{  \Rightarrow  m_{ele}  =  \frac{ h \cdot f_{ele} }{ {_{\lowZero}c^{2}} }  }'),
                      array( display => 'on',  latex => '{  m_{ele}  =  \frac{ h \cdot n_{ele} }{ {_{\lowZero}c^{2}} \cdot t }  }',
                                               latex_if_visible => '{  \Leftrightarrow   m_{ele}  =  \frac{ h \cdot n_{ele} }{ {_{\lowZero}c^{2}} \cdot t }  }'),
                      array( display => 'off', latex => '{  \hbar  =  \frac{ h }{ 2 \pi }  }'),
                      array( display => 'off', latex => '{  E_{ele}  =  \hbar \cdot \omega_{ele}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Equ-E-aus-omega', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-E-aus-omega}', label_incr => true,
                                               footnote => 'Vgl. \\cite{wiki:PlanckschesWirkungsquantum2013}, Definition.'),
                      array( display => 'off', latex => '{  \Leftrightarrow  m_{ele}  =  \frac{ \hbar \cdot \omega_{ele} }{ {_{\lowZero}c^{2}} }  }'),
                      array( display => 'on',  latex => '{  m_{ele}  =  \frac{ h \cdot \omega_{ele} }{ 2 \pi \cdot {_{\lowZero}c^{2}} }  }',
                                               latex_if_visible => '{  \Leftrightarrow   m_{ele}  =  \frac{ h \cdot \omega_{ele} }{ 2 \pi \cdot {_{\lowZero}c^{2}} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{m}}  \sim  m_{ele}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{m}}  =  g_{m} \cdot m_{ele}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei steht \\term{n_{ele}} für die Anzahl der Rotationen des Elementarteilchens.'."\n",
                      'Die geforderte Proportionalität zur Intensitätsabnahme mit dem Abstand kommt nun separat hinzu:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{eff}}  \sim  \frac{ {_{r}h_{m}} }{ r }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{eff}}  =  g_{r} \cdot \frac{ g_{m} \cdot m_{ele} }{ r }  }',
                                               /*%! label_name => 'OM:FrQFT:Quantengravitation:Equ-h-ele-eff', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-h-ele-eff}' */),
                    ))),
                  /*-- array( 'text', array( text => array(
                    '\\color{*Bearb}{Versteckte Nebenrechnungen:}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega_{ele}  =  \frac{ {_{\lowZero}c} }{ r_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  E_{ele}  =  \hbar \cdot \frac{ {_{\lowZero}c} }{ r_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f_{ele}  =  \frac{ E_{ele} }{ h }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f_{ele}  =  \frac{ m_{ele} \cdot {_{\lowZero}c^{2}} }{ h }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f_{ele}  =  \frac{ n_{wq} \cdot m_{wq} \cdot {_{\lowZero}c^{2}} }{ h }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ 1 }{ s }  =  \frac{ 1 \cdot kg \cdot \frac { m^2 }{ s^2 } }{ J \cdot s }  }'),
                   
                      array( display => 'on',  latex => '{  m_{ele}  =  \frac{ \hbar }{ r_{ele} \cdot {_{\lowZero}c} }  }'),
                      array( display => 'on',  latex => '{  f_{ele}  =  \frac{ m_{ele} \cdot {_{\lowZero}c^{2}} }{ h }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  f_{ele}  =  \frac{ \frac{ \hbar }{ r_{ele} \cdot {_{\lowZero}c} } \cdot {_{\lowZero}c^{2}} }{ h }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f_{ele}  =  \frac{ \hbar \cdot {_{\lowZero}c} }{ h \cdot r_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f_{ele}  =  \frac{ \frac{ h }{ 2 \pi } \cdot {_{\lowZero}c} }{ h \cdot r_{ele} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f_{ele}  =  \frac{ {_{\lowZero}c} }{ 2 \pi \cdot r_{ele} }  }'),
                    ))), */
                  /*%! array( 'text', array( text => array(
                    '\\color{*Bearb}{Zwischenzeitlicher Ansatz:}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f_{wq}  =  n_{wq} \cdot f_{ele}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f_{wq}  =  n_{wq} \cdot \frac{ m_{ele} \cdot {_{\lowZero}c^{2}} }{ h }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{eff}}  =  g_{ii} \cdot {_{r}h_{ii}} \cdot n_{wq} \cdot \frac{ m_{ele} \cdot {_{\lowZero}c^{2}} }{ h }  }'),
                    ))), */
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Näherung bei großen Abständen', subline =>
                  '… im Verhältnis zum Radius')),
                  array( 'text', array( text => array(
                    'Wie in \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn} dargestellt, entstehen die virtuellen Wirkungsquanten aus den Wirkungsquanten des Strings.'."\n".
                    'Die abgestrahlten virtuellen Wirkungsquanten-Impulse nehmen dann genau genommen mit dem Abstand \\term{r_{s}} vom String ab, vorstehend als \\term{r} bezeichnet.'."\n".
                    'In der weiteren Herleitung sollen ausschließlich im Verhältnis zum Radius des Elementarteilchens \\term{r_{ele}} große Abstände \\term{r_{s}} eine Rolle spielen.'."\n".
                    'Dadurch wird der Elementarteilchen-Radius auf diese großen Distanzen irrelevant und nur der Abstand von deren Zentrum betrachtet, deshalb auch \\term{r} genannt:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  r_{ele}  \ll  r  }'),
                      array( display => 'off', latex => '{  r_{s}  =  r \pm r_{ele}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  r_{s}  \approx  r  }'),
//%!                      array( display => 'off', latex => '{  {_{x}\lambda_{wq,d}}  =  {_{0}\lambda_{wq,d}} \cdot {_{x}\alpha}  }',
//                                               label_name => 'OM:FrQFT:Quantengravitation:Equ-DetektWellenlaengeAlt', label_text => '\\jump{OM:FrQFT:ZeitAlterungFrequenz:Equ-DetektWellenlaengeAlt}{\\name{OM:FrQFT:Quantengravitation:Equ-DetektWellenlaengeAlt}}'),
//                      array( display => 'off', latex => '{  \Rightarrow  {_{y}\rho_{wq}}  =  \frac{ {_{x}\rho_{wq}} }{ \frac{ {_{y}\alpha} }{ {_{x}\alpha} } }  }'),
//                      array( display => 'on',  latex => '{  {_{r}\rho_{vwq}}  =  \frac{ {_{r_{ele}}\rho_{ele,wq}} }{ \frac{ {_{r,rad}\alpha} }{ {_{r_{ele},tan}\alpha} } }  }',
//                                               latex_if_visible => '{  \Leftrightarrow  {_{r}\rho_{vwq}}  =  \frac{ {_{r_{ele}}\rho_{ele,wq}} }{ \frac{ {_{r,rad}\alpha} }{ {_{r_{ele},tan}\alpha} } }  }'),
                    ))),
//                  array( 'text', array( text => array(
//                    '\\color{*Bearb}{Alter Ansatz:}'."\n".
//%!                    'Die Wirkungsquanten-Dichte \\term{_{r_{ele}}ρ_{ele,wq}} auf dem simplifizierten String errechnet sich über die Anzahl seiner Wirkungsquanten \\term{n_{wq}}'."\n".
//                    'auf seinem Umfang.'."\n".
//                    'Wie zuvor beschrieben ändert sich die Distanz der Wirkungsquanten auf dem String wie die Detektorwellenlänge von Photonen mit dem dort zu veranschlagenden'."\n".
//                    'effektiven Lichtgeschwindigkeitsfaktor \\term{_{r_{ele},tan}α}.'."\n",
//                      'Die Störung \\term{_{r}h_{ii}} durch die Impulsintensität errechnet sich in ihrem zeitlichen Verlauf einerseits aus der Winkelgeschwindigkeit der Abstrahlung,'."\n".
//                    'die die Einwirkungsdauer berücksichtigt.'."\n".
//                    'Andererseits nimmt die Intensität, wie vorstehend erklärt, mit etwas ungewöhnlichen \\term{1/r} mit dem Abstand \\term{r} ab.'."\n".
//                    'Auch hier fällt bei größeren Abständen vom Zentrum des Strings deren Radiusdifferenz \\term{r ± r_{ele}} nicht ins Gewicht.'."\n"))),
//                  array( 'equations',
//                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
//                      array( display => 'on',  latex => '{  {_{r_{ele}}\rho_{ele,wq}}  =  \frac{ n_{wq} }{ 2 \pi \cdot r_{ele} \cdot {_{r_{ele},tan}\alpha} }  }'),
//                      array( display => 'on',  latex => '{  {_{r}h_{ii}}  \sim  h \cdot \omega_{ele,wq} \cdot {_{r}ii}  }'),
//                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{ii}}  =  h \cdot g_{\omega} \cdot \frac{ \omega_{ele,wq} }{ r }  }'),
//                      array( display => 'off', latex => '{  {_{\lowZero}c}  =  \frac{ {_{x}c} }{ {_{x}\alpha} }  }',
//                                               /* label_name => 'OM:FrQFT:Quantengravitation:XXX', */ label_text => '\\jumpname{OM:FrQFT:ZeitAlterungFrequenz:Equ-LGKos-2}'),
//                      array( display => 'off', latex => '{  XXX \omega_{ele,wq}  =  \frac{ {_{r_{ele},tan}c} }{ 2 \pi \cdot r_{ele} \cdot {_{r_{ele},tan}\alpha} }  }'),
//                      array( display => 'off', latex => '{  \omega_{ele,wq}  =  \frac{ {_{r_{ele},tan}c} }{ r_{ele} \cdot {_{r_{ele},tan}\alpha} }  }'), // #: Siehe https://www.grund-wissen.de/physik/mechanik/kinematik/kreisfoermige-bewegungen.html#equation-eqn-bahngeschwindigkeit
//                      array( display => 'on',  latex => '{  \omega_{ele,wq}  =  \frac{ {_{\lowZero}c} }{ 2 \cdot r_{ele} }  }',
//                                               latex_if_visible => '{  \Leftrightarrow  \omega_{ele,wq}  =  \frac{ {_{\lowZero}c} }{ 2 \cdot r_{ele} }  }'),
//                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{ii}}  =  h \cdot g_{\omega} \cdot \frac{ {_{\lowZero}c} }{ r \cdot 2 \cdot r_{ele} }  }'),
//                    ))),
//                  array( 'text', array( text => array(
//                    'Eine im ersten Moment vielleicht unauffällige, aber sehr wichtige Erkenntnis in der vorstehenden Formel \\color{*Bearb}{XXX} ist:'."\n"))),
//
//                  array( 'text', array( Shape  => 'italic', text => array(
//                      'Die durch innere oder auch externe Gravitation beeinflusste Dichte und Rotation des Strings gleichen sich gegenseitig so aus,'."\n".
//                      'dass diese Gravitation keinen Einfluss auf die Winkelgeschwindigkeit hat.'."\n"))),
                      
//                  array( 'text', array( text => array(
//                    'Ersetzen wir in Formel \\color{*Bearb}{XXX} nun \\term{_{r}ρ_{vwq}} und anschließend \\term{_{r}h_{ii}}, dann errechnen wir für \\term{_{r}h_{eff}}:'."\n"))),
//                  array( 'equations',
//                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
//                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{eff}}  =  g_{ii} \cdot {_{r}h_{ii}} \cdot {_{r}\rho_{vwq}} \cdot {_{r,rad}c}  }'),
//                      array( display => 'off', latex => '{  \Leftrightarrow  {_{r}h_{eff}}  =  g_{ii} \cdot {_{r}h_{ii}} \cdot \frac{ {_{r_{ele}}\rho_{ele,wq}} }{ \frac{ {_{r,rad}\alpha} }{ {_{r_{ele},tan}\alpha} } } \cdot {_{r,rad}c}  }'),
//                      array( display => 'off', latex => '{  \Leftrightarrow  {_{r}h_{eff}}  =  g_{ii} \cdot {_{r}h_{ii}} \cdot {_{r_{ele}}\rho_{ele,wq}} \cdot {_{r_{ele},tan}\alpha} \cdot {_{\lowZero}c}  }'),
//                      array( display => 'off', latex => '{  \Leftrightarrow  {_{r}h_{eff}}  =  g_{ii} \cdot {_{r}h_{ii}} \cdot \frac{ n_{wq} \cdot {_{r_{ele},tan}\alpha} \cdot {_{\lowZero}c} }{ 2 \pi \cdot r_{ele} \cdot {_{r_{ele},tan}\alpha} }  }'),
//                      array( display => 'off', latex => '{  \Leftrightarrow  {_{r}h_{eff}}  =  g_{ii} \cdot {_{r}h_{ii}} \cdot \frac{ n_{wq} \cdot {_{\lowZero}c} }{ 2 \pi \cdot r_{ele} }  }'),
//                      array( display => 'off', latex => '{  \Leftrightarrow  {_{r}h_{eff}}  =  g_{ii} \cdot h \cdot g_{\omega} \cdot \frac{ {_{\lowZero}c} }{ r \cdot 2 \pi \cdot r_{ele} } \cdot \frac{ n_{wq} \cdot {_{\lowZero}c} }{ 2 \pi \cdot r_{ele} }  }'),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}h_{eff}}  =  h \cdot g_{ii} \cdot g_{\omega} \cdot \frac{ n_{wq} }{ r } \cdot \frac{ {_{\lowZero}c^{2}} }{ 4 \pi^{2} \cdot r_{ele}^{2} }  }'),
//                    ))),
//                  array( 'text', array( text => array(
//                    '\\color{*Bearb}{Neuer, einfacherer Ansatz:}'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n"))),
//                  array( 'equations',
//                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
//                      array( display => 'on',  latex => '{  m_{ele}  =  \frac{ \hbar }{ r_{ele} \cdot {_{\lowZero}c} }  }'),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  r_{ele}  =  \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c} }  }'),
//                      array( display => 'on',  latex => '{  XXX  {_{r}h_{eff}}  =  g_{ii} \cdot {_{r}h_{ii}} \cdot n_{wq} \cdot \frac{ m_{ele} \cdot {_{\lowZero}c^{2}} }{ h }  }'),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}h_{eff}}  =  g_{ii} \cdot h \cdot g_{\omega} \cdot \frac{ {_{\lowZero}c} }{ r \cdot 2 \cdot r_{ele} } \cdot n_{wq} \cdot \frac{ m_{ele} \cdot {_{\lowZero}c^{2}} }{ h }  }'),
//                    ))),
//                  array( 'text', array( text => array(
//                    'Eine zweite, vielleicht unauffällige, aber sehr wichtige Erkenntnis in der vorstehenden Formel \\color{*Bearb}{XXX} ist:'."\n"))),
//
//                  array( 'text', array( Shape  => 'italic', text => array(
//                      'Die durch innere oder auch externe Gravitation beeinflusste Dichte und Ausbreitungsgeschwindigkeit der abgestrahlten virtuellen Wirkungsquanten'."\n".
//                      'gleichen sich gegenseitig so aus, dass diese Gravitation keinen Einfluss auf die Frequenz des Eintreffens der virtuellen Wirkungsquanten hat.'."\n"))),
//
//                  array( 'text', array( text => array(
//                    'Beide vorstehenden Erkenntnisse kommen zusammengenommen zu dem sehr wesentlichen Schluss:'."\n"))),
//
//                  array( 'text', array( Shape  => 'italic', text => array(
//                      'Es spielt keine Rolle, in welchem gravitativen Umfeld sich der hier betrachtete Elementarteilchen-String befindet.'."\n".
//                      'Dies beeinflusst seine eigene Gravitation grundsätzlich nicht.'."\n"))),
                      
//                  array( 'text', array( text => array(
//                    'Der Schluss deutet darauf hin, dass wir es hier mit einer plausiblen Struktur der Quantengravitation zu tun haben.'."\n",
//                      'Wie wir oben sehen, ist die effektiv störende Wirkung \\term{_{r}h_{eff}} der virtuellen Wirkungsquanten proportional zur Anzahl der Wirkungsquanten im'."\n".
//                    'Elementarteilchen \\term{n_{wq}} als auch zu deren einzelner Wirkung \\term{h} und damit zur Masse des Elementarteilchens;'."\n".
//                    'wie in der \\jump{OM:FrQFT:Quantengravitation:VereinfModellGravirad}{Ursache} beschriebenen.'."\n".
//                    'Die Wirkungsquanten-Anzahl und die Masse des Elementarteilchens können über die Masse eines einzelnen Wirkungsquants \\term{m_{wq}} in Bezug gesetzt werden:\\footnote[*Entwick]{\\color{*Entwick}{Die nachfolgenden Formel erscheinen einigermaßen logisch, aber sind im Moment noch sehr spekulativer Natur. Hier ist eine detailierte Herleitung gesucht und von meiner Seite in Vorbereitung.}}'."\n"))),
//                  array( 'equations',
//                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
//                      array( display => 'on',  latex => '{  n_{wq}  \sim  m_{ele}  }'),
//                      array( display => 'on',  latex => '{  \Rightarrow  n_{wq}  =  \frac{ m_{ele} }{ m_{wq} }  }'),
////                      array( display => 'on',  latex => '{  h_{ele,eff}  \sim  h \cdot n_{ele,wq}  }'),
////                      array( display => 'on',  latex => '{  \Rightarrow  h_{ele,eff}  =  g_{\lowZero} \cdot h \cdot n_{ele,wq}  }'),
//                      //%! array( display => 'on',  latex => '{  \Leftrightarrow  h_{ele,eff}  =  g_{\lowZero} \cdot h \cdot \frac{ m_{ele} }{ m_{wq} }  }',
//                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{eff}}  =  h \cdot g_{ii} \cdot g_{\omega} \cdot \frac{ m_{ele} }{ r } \cdot \frac{ {_{\lowZero}c^{2}} }{ m_{wq} \cdot 4 \pi^{2} \cdot r_{ele}^{2} }  }',
//                                               label_name => 'OM:FrQFT:Quantengravitation:Equ-h-ele-eff', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-h-ele-eff}', label_incr => true),
//                    ))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Zwei Stellen des Wirkungsquanten-Strings wirken gleichzeitig', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Es wirken nun immer genau zwei Stellen auf einem Elementarteilchen-String zugleich'."\n".
                    '(siehe \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung}, Mitte, und \\jumpname{OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn}).'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{ele,eff}}  =  2 \cdot {_{r}h_{eff}}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Equ-h-ele-eff', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-h-ele-eff}', label_incr => true),
//%!                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}h_{ele,eff}}  =  2 h \cdot g_{ii} \cdot g_{\omega} \cdot \frac{ m_{ele} }{ r } \cdot \frac{ {_{\lowZero}c^{2}} }{ m_{wq} \cdot 4 \pi^{2} \cdot r_{ele}^{2} }  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'invis', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Rechnung ohne Näherung …}',
                TitleVis => 'Rechnung ohne Näherung:', ParagraphList => array(
                  $FrQFT_g_text_QuantengravRechnungOhneNaeh,
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r\pm}h_{ele,eff}}  =  {_{r+r_{ele}}h_{eff}} + {_{r-r_{ele}}h_{eff}}  }'),
                    ))),
                    ))),
                      
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Gravitative Wirkung eines einzelnen Elementarteilchens auf Licht', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die sich durch ein einzelnes Elementarteilchen aus der Störung ergebende Geschwindigkeit der Ablenkung \\term{_{r}v_{ele,abl}} ist dann proportional zu dieser Störung:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r}v_{ele,abl}}  \sim  {_{r}h_{ele,eff}}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}v_{ele,abl}}  =  g_{v} \cdot 2 \cdot g_{r} \cdot \frac{ g_{m} \cdot m_{ele} }{ r }  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'invis', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Rechnung ohne Näherung …}',
                TitleVis => 'Rechnung ohne Näherung:', ParagraphList => array(
                  $FrQFT_g_text_QuantengravRechnungOhneNaeh,
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r\pm}v_{ele,abl}}  \sim  {_{r\pm}h_{ele,eff}}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r\pm}v_{ele,abl}}  =  g_{v} \\\ \qquad\qquad\qquad\qquad \cdot \Biggl( g_{r} \cdot \frac{ g_{m} \cdot m_{ele} }{ r + r_{ele} } + g_{r} \cdot \frac{ g_{m} \cdot m_{ele} }{ r - r_{ele} } \Biggr)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm}v_{ele,abl}}  =  g_{v} \cdot g_{r} \cdot g_{m} \cdot m_{ele} \\\ \qquad\qquad\qquad\qquad\qquad\qquad \cdot \Biggl( \frac{ 1 }{ r + r_{ele} } + \frac{ 1 }{ r - r_{ele} } \Biggr)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm}v_{ele,abl}}  =  g_{v} \cdot g_{r} \cdot g_{m} \cdot m_{ele} \\\ \qquad\quad \cdot \Biggl( \frac{ r - r_{ele} }{ ( r + r_{ele} ) \cdot ( r - r_{ele} ) } + \frac{ r + r_{ele} }{ ( r - r_{ele} ) \cdot ( r + r_{ele} ) } \Biggr)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm}v_{ele,abl}}  =  g_{v} \cdot g_{r} \cdot g_{m} \cdot m_{ele} \\\ \qquad\qquad\qquad\qquad\qquad\quad \cdot \Biggl( \frac{ r - r_{ele} }{ r^{2} - r_{ele}^{2} } + \frac{ r + r_{ele} }{ r^{2} - r_{ele}^{2} } \Biggr)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm}v_{ele,abl}}  =  \frac{ g_{v} \cdot g_{r} \cdot g_{m} \cdot m_{ele} \cdot 2 \cdot r }{ r^{2} - r_{ele}^{2} }  }'),
                    ))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Diese Ablenkungsgeschwindigkeit eingesetzt in Formel \\jumpname{OM:FrQFT:Quantengravitation:Equ-c-eff} ergibt:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  {_{r,p}c_{ele}}  =  {_{\lowZero}c} \cdot \Biggl( 1 - \frac{ \Bigl( g_{v} \cdot 2 \cdot g_{r} \cdot \frac{ g_{m} \cdot m_{ele} }{ r } \Bigr)^{2} }{ {_{\lowZero}c^{2}} } \Biggr)^{p}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r,p}c_{ele}}  =  {_{\lowZero}c} \cdot \Biggl( 1 - 4 \cdot \frac{ \Bigl( g_{v} \cdot g_{r} \cdot g_{m} \Bigr)^{2} \cdot m_{ele}^{2} }{ {_{\lowZero}c^{2}} \cdot r^{2} } \Biggr)^{p}  }',
                                               latex_if_visible => '{  \Leftrightarrow  {_{r,p}c_{ele}}  =  {_{\lowZero}c} \cdot \Biggl( 1 - 4 \cdot \frac{ \Bigl( g_{v} \cdot g_{r} \cdot g_{m} \Bigr)^{2} \cdot m_{ele}^{2} }{ {_{\lowZero}c^{2}} \cdot r^{2} } \Biggr)^{p}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'invis', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Rechnung ohne Näherung …}',
                TitleVis => 'Rechnung ohne Näherung:', ParagraphList => array(
                  $FrQFT_g_text_QuantengravRechnungOhneNaeh,
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r\pm,p}c_{ele}}  =  {_{\lowZero}c} \cdot \Biggl( 1 - \frac{ \Bigl( \frac{ g_{v} \cdot g_{r} \cdot g_{m} \cdot m_{ele} \cdot 2 \cdot r }{ r^{2} - r_{ele}^{2} } \Bigr)^{2} }{ {_{\lowZero}c^{2}} } \Biggr)^{p}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm,p}c_{ele}}  =  {_{\lowZero}c} \cdot \Biggl( 1 - 4 \cdot \frac{ \Bigl( g_{v} \cdot g_{r} \cdot g_{m} \Bigr)^{2} \cdot m_{ele}^{2} \cdot r^{2} }{ {_{\lowZero}c^{2}} \cdot \Bigl( r^{2} - r_{ele}^{2} \Bigr)^{2} } \Biggr)^{p}  }'),
                    ))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Setzen wir hier die Gravitationskonstante so ein, wie sie sich in der nachfolgenden Herleitung für große Massen in Formel \\jumpname{OM:FrQFT:Quantengravitation:Equ-GraviKonstStruktur} zeigt, dann bekommen wir:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r,p}c_{ele}}  =  {_{\lowZero}c} \cdot \Biggl( 1 - 4 \cdot \frac{ G^{2} \cdot m_{ele}^{2} }{ {_{\lowZero}c^{2}} \cdot r^{2} } \Biggr)^{p}  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'invis', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX',
                Title => '\\small{Rechnung ohne Näherung …}',
                TitleVis => 'Rechnung ohne Näherung:', ParagraphList => array(
                  $FrQFT_g_text_QuantengravRechnungOhneNaeh,
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r\pm,p}c_{ele}}  =  {_{\lowZero}c} \cdot \Biggl( 1 - 4 \cdot \frac{ G^{2} \cdot m_{ele}^{2} \cdot r^{2} }{ {_{\lowZero}c^{2}} \cdot \Bigl( r^{2} - r_{ele}^{2} \Bigr)^{2} } \Biggr)^{p}  }'),
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
                    'Wir haben \\term{g_{v}} schon zuvor als Proportionalitätskonstante eingeführt.'."\n",
                      'Zuvor führt Formel \\jumpname{OM:FrQFT:Quantengravitation:Equ-h-ele-eff} zur Definition der nicht statistischen effektiven Wirkung \\term{_{r}h_{mas,eff}} der Zentralmasse:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  m_{ele}  \mapsto  M  }'),
//                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{mas,eff}}  =  2 h \cdot g_{ii} \cdot g_{\omega} \cdot \frac{ M }{ r } \cdot \frac{ {_{\lowZero}c^{2}} }{ m_{wq} \cdot 4 \pi^{2} \cdot r_{ele}^{2} }  }',
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}h_{mas,eff}}  =  2 \cdot g_{r} \cdot \frac{ g_{m} \cdot M }{ r }  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Equ-h-M-eff', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-h-M-eff}', label_incr => true),
                      array( display => 'on',  latex => '{  {_{r}v_{mas,abl}}  =  \sqrt{ g_{v} \cdot {_{r}h_{mas,eff}} }  }',
                                               footnote => 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier Formel C.5, S. 22.'),
//                      array( display => 'off', latex => '{  \Leftrightarrow  {_{r}v_{abl}}  \sim  \sqrt{ 2 \cdot \frac{ h_{M,eff} }{ r } }  }'),
//                      array( display => 'on',  latex => '{  \Rightarrow  {_{r}v_{abl}}  =  g_{v} \cdot \sqrt{ 2 h \cdot g_{ii} \cdot g_{\omega} \cdot \frac{ M }{ r } \cdot \frac{ {_{\lowZero}c^{2}} }{ m_{wq} \cdot 4 \pi^{2} \cdot r_{ele}^{2} } }  }',
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{r}v_{mas,abl}}  =  \sqrt{ g_{v} \cdot 2 \cdot g_{r} \cdot \frac{ g_{m} \cdot M }{ r } }  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Equ-v-abl', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-v-abl}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Dies ist eine entscheidende Einsicht, die Entstehung der Lichtverlangsamung und -beugung im Gravitationsfeld und damit die Gravitation zu verstehen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Lichtgeschwindigkeitsänderung im Gravitationsfeld', subline =>
                  'Gravitation durch die Wirkung der Elementarteilchen-Strukturen einer Masse')),
                  array( 'text', array( text => array(
                    'Wenn nun \\hidden{die Formel \\jumpname{OM:FrQFT:Quantengravitation:Equ-h-M-eff} in }die Formel \\jumpname{OM:FrQFT:Quantengravitation:Equ-v-abl} \\hidden{und dies dann }in'."\n".
                    'die Formel \\jumpname{OM:FrQFT:Quantengravitation:Equ-c-eff} eingesetzt wird, ergibt sich:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
//                      array( display => 'on',  latex => '{  \Rightarrow  {_{r,p}c}  =  {_{\lowZero}c} \cdot \Bigl( 1 - \frac{ \Bigl( g_{v} \cdot \sqrt{ 2 h \cdot g_{ii} \cdot g_{\omega} \cdot \frac{ M }{ r } \cdot \frac{ {_{\lowZero}c^{2}} }{ m_{wq} \cdot 4 \pi^{2} \cdot r_{ele}^{2} } } \Bigr)^{2} }{ {_{\lowZero}c}^{2} } \Bigr)^{p}  }'),
                      array( display => 'off', latex => '{  \Rightarrow  {_{r,p}c_{mas}}  =  {_{\lowZero}c} \cdot \Biggl( 1 - \frac{ \Bigl( \sqrt{ g_{v} \cdot 2 \cdot g_{r} \cdot \frac{ g_{m} \cdot M }{ r } } \Bigr)^{2} }{ {_{\lowZero}c}^{2} } \Biggr)^{p}  }'),
//                      array( display => 'off', latex => '{  \Leftrightarrow  {_{r,p}c}  =  {_{\lowZero}c} \cdot \Bigl( 1 - 2 \cdot \frac{ g_{v}^{2} \cdot h \cdot g_{ii} \cdot g_{\omega} \cdot M \cdot \frac{ {_{\lowZero}c^{2}} }{ m_{wq} \cdot 4 \pi^{2} \cdot r_{ele}^{2} } }{ {_{\lowZero}c}^{2} \cdot r } \Bigr)^{p}  }'),
//                      array( display => 'off', latex => '{  \Leftrightarrow  {_{r,p}c_{mas}}  =  {_{\lowZero}c} \cdot \Biggl( 1 - \frac{ 2 \cdot g_{v} \cdot g_{r} \cdot \frac{ g_{m} \cdot M }{ r } }{ {_{\lowZero}c}^{2} \cdot r } \Biggr)^{p}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  {_{r,p}c_{mas}}  =  {_{\lowZero}c} \cdot \Biggl( 1 - 2 \cdot \frac{ g_{v} \cdot g_{r} \cdot g_{m} \cdot M }{ {_{\lowZero}c}^{2} \cdot r } \Biggr)^{p}  }',
                                               latex_if_visible => '{  \Leftrightarrow  {_{r,p}c_{mas}}  =  {_{\lowZero}c} \cdot \Biggl( 1 - 2 \cdot \frac{ g_{v} \cdot g_{r} \cdot g_{m} \cdot M }{ {_{\lowZero}c}^{2} \cdot r } \Biggr)^{p}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Vergleichen wir unser Ergebnis mit der nachfolgenden Formel \\jumpname{OM:FrQFT:Quantengravitation:Equ-GraLGEinstein} für die Änderung der Lichtgeschwindigkeit'."\n".
                    'im Gravitationsfeld der Allgemeinen Relativitätstheorie in der äußeren Lösung der Schwarzschild-Metrik\\footnote{\\const{FrQFT_g_footnote_text_SchwarzschildMetrik}},'."\n".
                    'welches eine zentrale Masse besitzt, so ergibt sich für die Gravitationskonstante \\term{G}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{r,p}c_{mas}}  =  {_{\lowZero}c} \cdot \Biggl( 1-2 \cdot \frac{G \cdot M}{{_{\lowZero}c}^{2} \cdot r} \Biggr)^{p}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Equ-GraLGEinstein', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-GraLGEinstein}', label_incr => true,
                                               footnote => '\\const{FrQFT_g_footnote_text_ARTLgFormel}'),
//                      array( display => 'on',  latex => '{  \Rightarrow  G  =  g_{v}^{2} \cdot g_{ii} \cdot g_{\omega} \cdot \frac{ h \cdot {_{\lowZero}c^{2}} }{ m_{wq} \cdot 4 \pi^{2} \cdot r_{ele}^{2} }  }',
                      array( display => 'on',  latex => '{  \Rightarrow  G  =  g_{v} \cdot g_{r} \cdot g_{m}  }',
                                               label_name => 'OM:FrQFT:Quantengravitation:Equ-GraviKonstStruktur', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-GraviKonstStruktur}', label_incr => true,
                                               footnote => 'Vgl. \\cite{Huss:GFTv7.381j2012}, Kap. 13.1 Ansatz zur quantitativen Formulierung der Lichtgeschwindigkeit im Gravitationspotenzial, S. 141-149, hier Formel 13.17, S. 145. Dort hat die Formel noch eine leicht andere Form.'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir bekommen auf diese Weise die Idee der Struktur der Gravitationskonstanten, wobei die genauen Werte der drei Konstanten noch'."\n".
                    'nicht bekannt sind.\\footnote[*Entwick]{\\color{*Entwick}{Eine genaue Herleitung der unbekannten Konstanten wird gesucht. Hinweise darauf sind erbeten.}}'."\n"))),
//                      'Zum Ende dieses Abschnitts stelle ich experimentelle \\jump{XXX}{Mutmaßungen} an,'."\n".
//                    'wie die Herkunft der Gravitationskonstanten weiter aufgeklärt werden könnte.'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Der Fortschritt im Vergleich zu Gieses Formulierung der Lichtverlangsamung besteht darin, dass sich so ein nachvollziehbarer Zusammenhang mit der Masse'."\n".
                      'des anziehenden Objekts ergibt und nicht „nur“ mit der Anzahl an Elementarteilchen in diesem Objekt.'."\n"))),
                      
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Die Struktur der Gravitationskonstanten', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Der Wert der Gravitationskonstanten kann leider noch nicht hergeleitet werden, aber wir sind hiermit diesem Ziel einen Schritt näher gekommen.'."\n".
                    'Und zwar dadurch, mehr Einblick in ihre Struktur zu gewinnen.'."\n",
                      'In der Allgemeinen Relativitätstheorie existiert keinerlei Ansatz zum Verständnis der Gravitationskonstanten.'."\n".
                    'Sie wird dort schlicht als gemessener Wert eingesetzt.'."\n".
                    'Es besteht also Hoffnung das hohe Ziel ihrer Herleitung mit der Quanten-Fluss-Theorie in Zukunft zu erreichen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
                                           
                'Vereinheitlichung der Physik', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Quanten-Fluss-Theorie ist in der Lage, eine wichtige Eigenschaft des Gravitationsfelds entsprechend der Allgemeinen Relativitätstheorie aus der hier'."\n".
                    'beschriebenen Struktur der Elementarteilchen und Grundformeln der Quantenphysik herzuleiten:'."\n"))),
                      
                  array( 'text', array( Shape  => 'conclusion', text => array(
                        'Mit einer Simplifizierung des Leptonen-Strings erhalten wir im Rahmen der Quanten-Fluss-Theorie die korrekte Veränderung der Lichtgeschwindigkeit'."\n".
                        'im Gravitationsfeld einer homogenen Massenkugel.'."\n".
                        'Dies kann als deutlicher Hinweis auf eine Vereinheitlichung von Quantenphysik und Allgemeiner Relativitätstheorie'."\n".
                        'gewertet werden.'."\n"))),
                      
//                  array( 'fade-in-area', array( Display => 'invis', jumpName => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:MutmassHerleitGravitationskonst',
//                Title => 'Mutmaßungen zur Herleitung der Gravitationskonstanten …',
//                TitleVis => 'Mutmaßungen zur Herleitung der Gravitationskonstanten:', ParagraphList => array(
//                  array( 'text', array( text => array(
//                    'In diesem Einschieber wollen wir experimentell untersuchen, welche Möglichkeiten uns bieten sich der Herleitung der Gravitationskonstante'."\n".
//                    'weiter zu nähern.'."\n"))),
//                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
//                                           
//                'Berechnung der Wirkungsquant-Masse', subline =>
//                  'Mutmaßung zur Rolle der Planck-Zeit')),
//                  array( 'text', array( text => array(
//                    'Betrachten wir die Formel \\jumpname{OM:FrQFT:Quantengravitation:Equ-GraviKonstStruktur}. so stellen wir fest, dass darin die Masse eines Wirkungsquants \\term{m_{wq}} vorkommt.'."\n".
//                    'Es stellt sich die Frage, ob die Masse eines Wirkungsquants, dass ja für die Wirkung \\term{h} steht, eventuell berechnet werden kann.'."\n",
//                      'Für die Berechnung kommen aus meiner Sicht die ›Einsteinsche Gleichung für das Lichtquant‹\\footnote{\\const{FrQFT_g_footnote_text_EinsteinGleichLichtq}}'."\n".
//                    'und die Masse-Energie-Äquivalenz\\footnote{\\const{FrQFT_g_footnote_text_EinsteinAequiMasEner}} in Frage:'."\n"))),
//                  array( 'equations',
//                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
//                      array( display => 'on',  latex => '{  E  =  m \cdot c^{2}  }',
//                                               /*label_name => 'OM:FrQFT:Quantengravitation:Equ-GraLGEinstein', label_text => '\\jump{OM:FrQFT:HeisenbergUnschaerfe:Equ-EinsteinEnergieLichtQuant}{\\name{OM:FrQFT:NeuePhysik:Problem-der-Zeit:Equ-EinsteinEnergieLichtQuant-1}}', label_incr => false,
//                                               footnote => '\\const{FrQFT_g_footnote_text_ARTLgFormel}'*/),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  m_{wq}  =   \frac{ E_{wq} }{ c^{2} }  }'),
//                      array( display => 'on',  latex => '{  E  =  h \cdot f  }',
//                                               /*label_name => 'OM:FrQFT:Quantengravitation:Equ-GraLGEinstein', */label_text => '\\jumpname{OM:FrQFT:HeisenbergUnschaerfe:Equ-EinsteinEnergieLichtQuant}', label_incr => false,
//                                               /*footnote => '\\const{FrQFT_g_footnote_text_ARTLgFormel}'*/),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  E_{wq}  =  h \cdot f_{wq}  }'),
//                      array( display => 'on',  latex => '{  \Rightarrow  m_{wq}  =   \frac{ h \cdot f_{wq} }{ c^{2} }  }'),
//                    ))),
//                  array( 'text', array( text => array(
//                    'Doch wie kommen wir auf die Frequenz eines einzelnen Wirkungsquants?'."\n".
//                    'Es ist ein einziges \\term{h} …'."\n",
//                      'Die Frequenz der Wirkungsquanten ergibt sich in meiner herleitung der Heisenbergschen Unschärferelation folgendermaßen:'."\n"))),
//                  array( 'equations',
//                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
//                      array( display => 'on',  latex => '{  f  =  \frac{ \Delta n }{ \Delta t }  }',
//                                               label_text => '\\jumpname{OM:FrQFT:HeisenbergUnschaerfe:Equ-FrequAnzahlProZeit}', label_incr => false),
//                      array( display => 'on',  latex => '{  \Rightarrow  f_{wq}  =  \frac{ 1 }{ \Delta t }  }'),
//                    ))),
//                  array( 'text', array( text => array(
//                    'Wenn die Anzahl \\term{Δn} mit Eins festliegt, wie kommen wir dann auf das Zeitinterval?'."\n",
//                      'Wir können einigermaßen schlüssig mutmaßen, dass es sich um das kleinste, mögliche Zeitintervall handelt, dass laut der heutigen Physik Sinn macht.'."\n".
//                    'Das wäre die Planck-Zeit\\color{*Bearb}{(Verweis)} \\term{t_{p}}:'."\n"))),
//                  array( 'equations',
//                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
//                      array( display => 'on',  latex => '{  \Delta t  =  t_{p}  =  \sqrt{ \frac{ \hbar \cdot G }{ c^{5} } }  }',
//                                               /*label_name => 'OM:FrQFT:Quantengravitation:Equ-GraviKonstStruktur', label_text => '\\name{OM:FrQFT:Quantengravitation:Equ-GraviKonstStruktur}', label_incr => true,
//                                               footnote => 'Vgl. \\cite{Huss:GFTv7.381j2012}, Kap. 13.1 Ansatz zur quantitativen Formulierung der Lichtgeschwindigkeit im Gravitationspotenzial, S. 141-149, hier Formel 13.17, S. 145. Dort hat die Formel noch eine leicht andere Form.'*/),
//                      array( display => 'on',  latex => '{  \Rightarrow  f_{wq}  =  \frac{ 1 }{ \sqrt{ \frac{ \hbar \cdot G }{ c^{5} } } }  }'),
//                      array( display => 'on',  latex => '{  \Rightarrow  m_{wq}  =  \frac{ h \cdot \frac{ 1 }{ \sqrt{ \frac{ \hbar \cdot G }{ c^{5} } } } }{ c^{2} }  }'),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  m_{wq}  =  \frac{ h }{ c^{2} \cdot \sqrt{ \frac{ \hbar \cdot G }{ c^{5} } } }  }'),
//                      array( display => 'on',  latex => '{  \Biggl[ \Leftrightarrow  m_{wq}  =  \frac{ h }{ c^{2} } \cdot \sqrt{ \frac{ c^{5} }{ \hbar \cdot G } } \Biggr]  }'),
//                      array( display => 'on',  latex => '{  \Biggl[ \Leftrightarrow  m_{wq}  =  \sqrt{ \frac{ h^{2} \cdot c^{5} }{ \hbar \cdot G \cdot c^{4} } } \Biggr]  }'),
//                      array( display => 'on',  latex => '{  \Biggl[ \Leftrightarrow  m_{wq}  =  \sqrt{ \frac{ h^{2} \cdot c^{5} }{ \frac{h}{2\pi} \cdot G \cdot c^{4} } } \Biggr]  }'),
//                      array( display => 'on',  latex => '{  \Biggl[ \Leftrightarrow  m_{wq}  =  \sqrt{ \frac{ 2\pi \cdot h \cdot c }{ G } } \Biggr]  }'),
//                      array( display => 'on',  latex => '{  \Biggl[ m_{p}  =  \sqrt{ \frac{ \hbar \cdot c }{ G } } \Biggr]  }'),
//                      array( display => 'on',  latex => '{  \Biggl[ \Leftrightarrow  m_{p}  =  \sqrt{ \frac{ h \cdot c }{ 2\pi \cdot G } } \Biggr]  }'),
//                      array( display => 'on',  latex => '{  \Biggl[ \Rightarrow  m_{wq}  =  2\pi \cdot m_{p} \Biggr]  }'),
//                    ))),
//                  array( 'text', array( text => array(
//                    'Dies ist eine Masse vom \\term{2π}-fachen der Planck-Masse \\term{m_{p}} (\\term{2π  ⋅ m_{p} ≈ 2π ⋅ 2,176 ⋅ 10^{−8} kg}).'."\n".
//                    'Damit liegt sie deutlich über der von Elementarteilchen.'."\n".
//                    'Die Ruhemasse eines Elektrons liegt in etwa bei \\term{9,109 ⋅ 10^{−31} kg}.'."\n".
//                    '\\color{*Bearb}{(Die Rechung noch einmal genau überprüfen!!!)}'."\n",
//                      'Dies ist nicht möglich, wenn Elementarteilchen doch aus sehr vielen Wirkungsquanten mit der Masse \\term{m_{wq}} aufgebaut sein sollen.'."\n".
//                    'Die Mutmaßung, die Planck-Zeit \\term{t_{p}} würde genau diese Rolle spielen, scheint in dieser Form also nicht korrekt zu sein.'."\n".
//                    'Sehr wohl möglich ist aber auch, dass die anderen Eingangsformeln in dieser Form hier nicht passen, da sie für die Ebene der Elementarteilchen gelten,'."\n".
//                    'während die fraktale Strukturebene der Wirkungsquanten und ihrer Masse eine Ebene tiefer angesiedelt ist.'."\n".
//                    'XXX'."\n",
//                      'Trotz alledem eingesetzt in die obige Formel \\jumpname{OM:FrQFT:Quantengravitation:Equ-GraviKonstStruktur} für die Gravitationskonstante ergibt sich:'."\n"))),
//                  array( 'equations',
//                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
//                      array( display => 'on',  latex => '{  \Rightarrow  G  =  g_{v}^{2} \cdot g_{\lowZero} \cdot \frac{ h }{ \frac{ h }{ c^{2} \cdot \sqrt{ \frac{ \hbar \cdot G }{ c^{5} } } } }  }'),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  G  =  g_{v}^{2} \cdot g_{\lowZero} \cdot c^{2} \cdot \sqrt{ \frac{ \hbar \cdot G }{ c^{5} } }  }'),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  G^{2}  =  g_{v}^{4} \cdot g_{\lowZero}^{2} \cdot c^{4} \cdot \frac{ \hbar \cdot G }{ c^{5} }  }'),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  G  =  g_{v}^{4} \cdot g_{\lowZero}^{2} \cdot \frac{ \hbar }{ c }  }'),
//                    ))),
//                  array( 'text', array( text => array(
//                    'Auf diese Weise hätten wir die unbekannten Konstanten, die hinter der Gravitationskonstanten stecken auf zwei reduziert.'."\n"))),
//                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
//                                           
//                'Struktur der Planck-Zeit', subline =>
//                  'Auf Basis der mutmaßlichen Wirkungsquant-Masse')),
//                  array( 'text', array( text => array(
//                    'Wenn wir nun die Gravitationskonstante wie vorstehend vermuten, können wir schauen, wie unsere unbekannten Konstanten die Planck-Zeit definieren:'."\n"))),
//                  array( 'equations',
//                    array( equ_text_std => 'QGra.LV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
//                      array( display => 'on',  latex => '{  t_{p}  =  \sqrt{ \frac{ \hbar \cdot G }{ c^{5} } }  }'),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  t_{p}  =  \sqrt{ \frac{ \hbar \cdot g_{v}^{4} \cdot g_{\lowZero}^{2} \cdot \frac{ \hbar }{ c } }{ c^{5} } }  }'),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  t_{p}  =  \sqrt{ \frac{ \hbar^{2} \cdot g_{v}^{4} \cdot g_{\lowZero}^{2} }{ c^{6} } }  }'),
//                      array( display => 'on',  latex => '{  \Leftrightarrow  t_{p}  =  \frac{ \hbar \cdot g_{v}^{2} \cdot g_{\lowZero} }{ c^{3} }  }'),
//                    ))),
//                  array( 'text', array( text => array(
//                    'Und ich muss sagen, diese Definition der Planck-Zeit kommt strukturell deutlich einfacher daher, als die über die Gravitationskonstante.'."\n"))),
//                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
//                                           
//                'Analyse der physikalischen Einheiten der Konstante \\term{g_{0}} \\color{*Bearb}{(ändern zu \\term{g_{eff}}, \\term{g_{h}}, \\term{g_{wirk}}?)}', subline =>
//                  'Mit welcher physikalischen Bedeutung und Struktur haben wir es zu tun?')),
//                  array( 'text', array( text => array(
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n"))),
//                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
//                                           
//                'Analyse der physikalischen Einheiten der Konstante \\term{g_{v}} \\color{*Bearb}{(ändern zu \\term{g_{abl}}?)}', subline =>
//                  'Mit welcher physikalischen Bedeutung und Struktur haben wir es zu tun?')),
//                  array( 'text', array( text => array(
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n"))),
//                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung:XXX', text =>
//                                           
//                'XXX', subline =>
//                  '')),
//                  array( 'text', array( text => array(
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n".
//                    'XXX'."\n"))),
//                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Beugung von Licht und die gravitative Anziehung von Elementarteilchen wird in den kommenden Abschnitten erklärt.'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Lichtbeugung'),
                    )),
              )
          ); ?>


		    	<!  • Lichtbeugung  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Quantengravitation:Lichtbeugung',
              'Eine lokal unterschiedliche Verlangsamung des Lichts erzeugt seine Beugung', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Lichtverlangsamung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'invis', text => array(
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
                    'Die sich dadurch ergebende Ablenkung des Lichts durch einen massiven Himmelskörper, wie unsere Sonne, entspricht den Beobachtungen\\footnote{Vgl. \\cite{Shapiro:FourthTestOfGeneralRelativity:1964:PhysRevLett.13.789}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:ShapiroVerzoegerung:2015}.},'."\n".
                    'wie Giese in seiner Arbeit zeigt.\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, 2 Bending of a Beam of Light Passing a Massive Object, S. 1-3, hier S. 3. Und: Appendix A, Mathematical Deduction of the Refraction Process, S. 14-17.}'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation'),
                    )),
              )
          ); ?>
        
          
		    	<!  • Mechanismus der Gravitation  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
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
                    'sehr ähnlich wie in Gieses Basisteilchenmodell, auf der dynamischen Struktur der Materie-Elementarteilchen-Strings (Teilchen mit Ruhemasse).'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation:XXX', text =>
                                           
                'Berechnung der Gravitation', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die im \\jump{OM:FrQFT:Lepton}{Leptonen-Modell} (siehe \\jumpname{OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton}), als Beispiel, kreisenden lichtähnlichen Strukturen werden bei jeder \\jump{OM:FrQFT:Lepton:Spins}{Rotation}'."\n".
                    'in Richtung der anziehenden Masse \\jump{OM:FrQFT:Quantengravitation:Lichtbeugung}{gebeugt} (siehe \\jumpname{OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation:Fig-GravitationMasse}).\\footnote{Vgl. \\cite{Huss:GFTv7.381j2012}, Kap. 5.3.2 Wechselwirkung von potenzialen Photonen-Beugungssystemen, S. 103-109, hier S. 104.}'."\n".
                    'In der Summe ergibt sich auf diese Weise die \\jump{OM:FrQFT:Gravitation:Mechanismus-der-Gravitation}{gravitative Beschleunigung}.'."\n",
                      'Giese ist es gelungen, die in Experimenten beobachtete und aus der Schule bekannte, klassische gravitative Beschleunigung aus dieser beständigen'."\n".
                    '(Licht-)Beugung in Elementarteilchen zu berechnen.\\footnote{Vgl. \\cite{Giese:TheOrigOfGravity2011}, 3 Relationship between Gravity and the Basic Particle Model, S. 4-6, hier S. 5-6.}'."\n"))),
                      
                  array( 'text', array( Shape  => 'conclusion', text => array(
                        'Im Falle, dass sich das Elementarteilchenmodell der Quanten-Fluss-Theorie insgesamt als mit dem Standardmodell der Teilchenphysik equivalent herausstellt,'."\n".
                        'ergibt sich hierdurch die Vereinheitlichung der Quantenphysik mit der Allgemeinen Relativitätstheorie.'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Quantengravitation:Keine-Singularitaet'),
                    )),
                )
          ); ?>
        

		    	<!  • Keine problematische Singularität  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
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
                      
                  array( 'text', array( Shape  => 'italic', text => array(
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
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
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
                    'Diese betreffen nicht nur die \\jump{OM:FrQFT:Quantengravitation:VereinfModellGravirad:VereinfString}{vereinfachte Struktur des Leptonen-Strings},'."\n".
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
                      
                  array( 'text', array( Shape  => 'italic', text => array(
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
                      
                  array( 'text', array( Shape  => 'italic', text => array(
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
