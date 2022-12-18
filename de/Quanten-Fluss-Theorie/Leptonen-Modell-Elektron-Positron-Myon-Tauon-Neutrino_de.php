<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:FrQFT:Lepton'); ?>


  <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:FrQFT:Elementarteilchen:Elementarteilchen-mit-Ruhemasse'); ?>

	
		    	<!Ideen:>
		    	<!  • Lepton Film:  >
		    	<!    • Die Wirkungsquanten-Bahn anzeigen  >
		    	<!    • Elektrisches/-tromagnetisches Feld anzeigen  >
		    	<!    • Java-Applet:  >
		    	<!      • Regler mit denen man alle Veränderungen durch Geschwindigkeit im Raum, der schwachen WW und Gravitation anzeigen kann.  >
		    	<!  • Zeit und Alterung:  >
		    	<!    • Vereinheitlichung der Physik, Link zur eigenen Seite und Fußnote  >
		    	<!    • Zeit, Link zur eigenen Seite und Fußnote  >
		    	<!  • Masse, Impuls und Energie:  >
		    	<!    • Wirkungsquanten verlinken  >
		    	<!  • Gravitation:  >
		    	<!    • Wirkungsquanten verlinken  >
		    	<!    • Fußnote zur Herleitung im Manuskript, auch für die Grafik. Ebenso zum Wiki von Standarmodell der Teilchenphysik, Quantenmechanik und Allgemeinen Relativitätstheorie  >
		    	<!    • Vakuum und Dunklen Materie auf eigene Seiten verlinken.  >
		    	<!    • Elementarteilchenmodell in der FrQFT, Link dort hin  >
		    	<!  • Radius:  >
		    	<!    • Vielleicht in Radien umbenennen und die anderen Formeln hierher.  >
		    	<!    • Den Text überarbeiten, er ist etwas komisch und unklar. Die punktförmige Wahrnehmung der Teilchen besser herausarbeiten.  >
		    	<!  • Antiteilchen:  >
		    	<!    • Darauf hinweisen, dass in  der FrQFT die Neutrinos zu den Antiteilchen und die Anti-Neutrinos zu den Teilchen zählen.  >
		    	<!  • Neutrinos:  >
		    	<!    • Einen Film erstellen.  >
		    	<!    • Darauf hinweisen, dass in  der FrQFT die Neutrinos zu den Antiteilchen und die Anti-Neutrinos zu den Teilchen zählen.  >
		    	<!  • Familien und Generationen:  >
		    	<!    • Darauf hinweisen, dass in der FrQFT die Neutrinos zu den Antiteilchen und die Anti-Neutrinos zu den Teilchen zählen.  >
		    	<!    • Eventuell beschreiben, warum nur bestimmte Massen möglich sind.  >
		    	<!    • Quarks auf eine eigene Seite.  >
		    

          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{Zu untersuchende Eigenschaften}',
                    '• \\bold{\\italic{Phasenzahl bzw. Wellenanzahl}}',
                    '– \\italic{Elektronen-Radius:} Passt der Elektronen-Radius, der wohl über das elektromagnetische Feld des Elektrons berechnet werden kann, in dieses Modell? Siehe \\jump[https://de.wikipedia.org/w/index.php?title=Elektron&oldid=208321591#Klassischer_Radius_und_Punktförmigkeit]{}{Wikipedia: Elektron, Klassischer Radius und Punktförmigkeit}. Kann die Phasenzahl bzw. Wellenanzahl hiermit in Zusammenhang gebracht werden?',
                    '– \\italic{Feinstrukturkonstante:} Kann die Phasenzahl bzw. Wellenanzahl mit der Feinstrukturkonstanten in Zusammenhang gebracht werden? Das sieht so aus. \\quote{Sommerfeld definierte sie ursprünglich als das Verhältnis der Bahngeschwindigkeit des Elektrons im Grundzustand des Bohrschen Wasserstoffatoms zur Lichtgeschwindigkeit im Vakuum[2].} Siehe \\jump[https://de.wikipedia.org/w/index.php?title=Feinstrukturkonstante&oldid=210649008]{}{Wikipedia: Feinstrukturkonstante}',
                    '• Magnetisches Moment des Elektronen-Spins, siehe \\cite{wiki:Elektron:2015}, Eigenschaften.',
                    '• Elektrisches Dipolmoment des Elektrons, siehe \\jump[https://de.wikipedia.org/w/index.php?title=Elektron&oldid=208321591#Klassischer_Radius_und_Punktförmigkeit]{}{Wikipedia: Elektron, Klassischer Radius und Punktförmigkeit}.',
                    '– Hier geht es darum, inwieweit das Massenzentrum dem Zentrum des elektrischen Feldes entspricht.',
                    '– Im Leptonen-Modell sollten beide Zentren extrem nahe beieinander liegen, wie es die Experimente bestätigen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Leptonen kommen in der Natur in geladener und ungeladener Form vor. Geladene Leptonen sind das Elektron/Positron,'."\n".
                    'das Myon und das Tauon. Die ungeladenen Leptonen sind die entsprechenden \\jump{OM:FrQFT:Lepton:Neutrinos}{Neutrinos}. \\\\'."\n".
                    'In der hier beschriebenen Quanten-Fluss-Theorie bestehen alle Leptonen aus einem'."\n".
                    '\\jump{OM:FrQFT:Elementarteilchen}{Wirkungsquanten-String}\\footnote{\\const{FrQFT_g_footnote_text_WQString}},'."\n".
                    'der in asymmetrischer Form mit drei Spins rotiert. Die folgende \\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton}'."\n".
                    'und die \\jumpname{OM:FrQFT:Lepton:Elektrisch-geladenes-Lepton} veranschaulichen ein geladenes Lepton mit hypothetischen acht'."\n".
                    'wellenförmigen Phasen.'."\n".
                    ''))),

                      // array( 'youtube',
                  //   array_merge( $FrQFT_g_youtube_ary_Lepton, array( name => 'OM:FrQFT:Lepton:Vortext:Ani-Lepton'))),
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_Lepton_highRes, array( name => 'OM:FrQFT:Lepton:Vortext:Ani-Lepton'))),
                      
                  array( 'text', array( text => array(
                    'Wieviele Phasen das Lepton wirklich besitzt ist noch nicht geklärt.\\footnote[*Entwick]{Acht Phasen oder Sternzacken werden erst einmal hypothetisch angenommen, weil dies die kleinste Anzahl ist, bei der sich im entfalteten Zustand der String innen nicht überschneidet. Neun Phasen sind naheliegend, weil sich dann die Anzahl durch drei teilen lässt, was zu den Drittelladungen des \\jump{OM:FrQFT:Quantenchromodynamik:Quarks}{Quarkmodells} passt, weil die Quarks als Eindrittel- oder Zweidrittel-Leptonen-Strings modelliert sind. \\color{*Entwick}{Eine genaue Herleitung der Phasenzahl wird gesucht. Hinweise darauf sind erbeten.}}'."\n".
                    'Wie man aus den in der Natur beobachteten'."\n".
                    '\\jump{OM:FrQFT:ElektroschwacheWW:Teilchenumwandlungen}{Teilchenumwandlungen durch die elektroschwache Wechselwirkung}'."\n".
                    'erkennen kann, besitzen alle Leptonen und \\jump{OM:FrQFT:ElektroschwacheWW:Quarks}{Quarks} die gleiche Phasenzahl. Diese ist mit einem neuen,'."\n".
                    'inneren \\jump{OM:FrQFT:Lepton:Spins}{Spin} verknüpft, der offenbar einer globalen Erhaltung unterliegt.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Die String-Struktur und deren Bewegung gibt alle Teilcheneigenschaften, wie \\jump{OM:FrQFT:Lepton:Elektrische-Ladung}{elektrische} sowie \\jump{OM:FrQFT:Lepton:Schwache-Ladung}{schwache Ladung}'."\n".
                    'und \\jump{OM:FrQFT:Lepton:Masse-Impuls-Energie}{Masse/Energie}, wider und ist sogar in der Lage die Einsteinschen Formeln der \\jump{OM:FrQFT:Gravitation}{Gravitation} durch die'."\n".
                    'Einführung einer \\jump{OM:FrQFT:Lepton:Quantengravitation}{Quantengravitation} herzuleiten.'."\n",
                      'Wie bei den \\jump{*Photonen-Herlei}{Photonen} besteht der String aus Wirkungsquanten, die mittels ihrer Wechselwirkungskegel – ein sich ausbreitendes Sombrero-Potenzial – miteinander'."\n".
                    'verbunden sind.'."\n".
                    'Die String-Spannung ist durch die \\jump{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:StarkeWechselwirkung}{starke Wechselwirkung} (\\jump{OM:FrQFT:Quantenchromodynamik}{Quantenchromodynamik})'."\n".
                    'oder anders gesagt durch die starke Feldkonstante\\color{*Bearb}{(Verweise)} bestimmt.'."\n".
                    'Auf diese Weise sind alle Grundkräfte der Physik involviert.'."\n",
                      'Die Gestalt einer helixförmigen Doppelspirale für die String-Bewegung ergibt sich aus der Lösung des \\jump{OM:FrQFT:NeuePhysik:Problem-der-Zeit}{›Problems der Zeit‹}\\footnote{Vgl. \\cite{Kiefer:WegZurQG2012}, S. 37.}'."\n".
                    'in der Quanten-Fluss-Theorie durch die Differenzierung des heutigen Zeitbegriffs in die Begriffe \\jump{OM:FrQFT:Lepton:Zeit-und-Alterung}{Zeit und Alterung} sowie'."\n".
                    'durch die experimentellen Beobachtungen, die einst in das heutige Standardmodell der Teilchenphysik mündeten.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Zeit-und-Alterung'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Lösung des ›Problems der Zeit‹  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Zeit-und-Alterung',
              'Vereinheitlichung der Physik durch ein neues Verständnis der Zeit', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton', type => 'back'),
                    )),
                      
                  array( 'text', array( text => array(
                    'Das Modell der Quanten-Fluss-Theorie basiert auf einem neuen, auf einem strukturellen Verständnis der Zeit,'."\n".
                    'welches entscheidend dazu beiträgt, die Physik zu vereinheitlichen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Zeit-und-Alterung:XXX', text =>
                                           
                'Denn die Frage ist, wie kann es sein, dass ein Elementarteilchen schneller schwingt, wenn seine Gravitationsuhr langsamer läuft, es langsamer altert?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Berücksichtigen wir nicht die Strukturen in einem System, so erscheint es, als sollten auch alle Schwingungen'."\n".
                    'langsamer ablaufen, wenn die ihnen zugrundeliegende Zeit langsamer läuft.'."\n".
                    'Betrachten wir diesen Zusammenhang im Modell der Quanten-Fluss-Theorie, so stellen wir fest, dass hier die'."\n".
                    'Zeit der Allgemeinen Relativitätstheorie\\footnote{\\const{FrQFT_g_footnote_text_ART}} nicht die ganz direkte Grundlage'."\n".
                    'genau dieser Schwingungen der Elementarteilchen ist.'."\n",
                      'Der scheinbare Widerspruch des \\jump{OM:FrQFT:NeuePhysik:Problem-der-Zeit}{›Problems der Zeit‹}\\footnote{Vgl. \\cite{Kiefer:WegZurQG2012}, S. 37.},'."\n".
                    'wonach höhere Gravitation zu langsamer laufender Zeit und gleichzeitig zu einer höheren De-Broglie-Frequenz'."\n".
                    '– also einer schnelleren Schwingung – der Elementarteilchen führt,'."\n".
                    'wird gelöst, indem ein fraktales, hierarchisches Verständnis der Zeit eingeführt und jede dieser Zeit-Ebenen'."\n".
                    'als Veränderung und damit als bestimmter Aspekt von struktureller Bewegung verstanden wird.\\footnote{Vgl. \\cite{Huss:GFTv7.381j2012}, Kap. 3.1 Grundannahmen zur Raumzeit-Struktur der Elementarteilchen, S. 36-41, hier Alterungspostulat, S. 38.}'."\n",
                      'Am Beispiel des Leptonen-Modells (siehe \\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton}) veranschaulicht,'."\n".
                    'ist die konstante Geschwindigkeit der rot gefärbten Wirkungsquanten des Leptonen-Strings der alles bestimmende Zeitgeber,'."\n".
                    'der so im einfachsten Fall dargestellten unterliegenden Zeit-Ebene.'."\n".
                    'Die in diesem Modell vereinfachend als feinste Strukturebene angenommene'."\n".
                    '\\jump{OM:FrQFT:ZeitAlterungFrequenz:Wirkungsquanten-Geschwindigkeit}{Bewegung der Wirkungsquanten} fungiert'."\n".
                    'damit als Normaluhr, die überall im Raum gleich läuft.\\footnote{Vgl. \\cite{Huss:GFTv7.381j2012}, Kap. 4.1.1 Zeit, Alterung und Licht-Raumzeit-Geometrie, S. 51-56, hier S. 51-52.}'."\n",
                      'Nach Albert Einsteins Allgemeiner Relativitätstheorie\\footnote{\\const{FrQFT_g_footnote_text_ART}} ist hingegen'."\n".
                    'das ›Prinzip der Lichtuhr‹ für die zeitlichen Abläufe in einem Elementarteilchen grundlegend.'."\n".
                    'Im Leptonen-Modell ist das ›Prinzip der Lichtuhr‹ durch die Parallelbewegung der Wirkungsquanten zur \\color{*LichtbahnGruen}{grünen} Lichtbahn'."\n".
                    'realisiert, durch den Gang ihrer Helixspiralbewegung.'."\n".
                    'Dieser Bewegungsanteil entlang der grünen Lichtbahn entspricht der Lichtgeschwindigkeit der Allgemeinen Relativitätstheorie im 3-dimensionalen Raum.\\footnote{Vgl. \\cite{Huss:GFTv7.381j2012}, Kap. 4.1.1 Zeit, Alterung und Licht-Raumzeit-Geometrie, S. 51-56, hier S. 52.}'."\n".
                    'Abgrenzend zur Zeit-Ebene der Normaluhr wird diese Zeit-Ebene in der Quanten-Fluss-Theorie als \\jump{*Alterung-Implem}{Alterung} bezeichnet.'."\n".
                    'Die Alterung ist folglich ein anderer Aspekt der Bewegung und eine andere Form der Zeit, der mit der Gangweite der Wellen der Wirkungsquanten-Bahn um die'."\n".
                    'Lichtbahn variiert.'."\n",
                      'Umso schneller sich das Lepton im Raum bewegt, desto langsamer ist die Geschwindigkeit der Wirkungsquanten entlang der Lichtbahn.'."\n".
                    'Entsprechend ist die Alterung des Leptons bei Bewegung langsamer, wie wir es aus der Speziellen Relativitätstheorie\\footnote{\\const{FrQFT_g_footnote_text_SRT}} kennen. \\\\'."\n",
                      'Ähnliches gilt, wenn sich ein Lepton einem Gestirn mit großer Masse nähert.'."\n".
                    'Seine Alterung läuft langsamer und die Bewegung der Wirkungsquanten entlang der Lichtbahn entspricht seiner Gravitationsuhr.'."\n".
                    'Diese geht umso langsamer, je größer der \\jump{Gravitation}{Gravitationseinfluss} ist, in dem sich das Lepton befindet.'."\n".
                    'so wie wir es aus der Allgemeinen Relativitätstheorie kennen.'."\n",
                      'Die De-Broglie-Frequenz eines Leptons, die für seine Energie steht, entspricht nun der Rotationsfrequenz'."\n".
                    'des Wirkungsquanten-Strings um die \\color{*LichtbahnGruen}{grüne} Lichtbahn.'."\n".
                    'Aufgrund der konstanten Wirkungsquanten-Geschwindigkeit und bei gleich bleibendem Rotationsradius muss eine'."\n".
                    'niedrigere Lichtgeschwindigkeit im 3-dimensionalen Raum zu einem engeren Gang der Helixspiralbahn der Wirkungsquanten'."\n".
                    'und damit, wie bei Licht-Photonen, zu einer höheren Rotationsfrequenz führen.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Naturphilosophie-der-Mechanik'),
                   )),
              )
          ); ?>
          
          
		    	<!  • Naturphilosophie der Mechanik  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Naturphilosophie-der-Mechanik',
              'Naturphilosophische Analyse des Leptonen-Modells', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Zeit-und-Alterung', type => 'back'),
                    )),
                      
                  array( 'text', array( text => array(
                    'Um die verschiedenen Leptonen aus Perspektive der Quanten-Fluss-Theorie ähnlich den \\jump{*Photonen-Herlei}{Photonen} beschreiben zu können, ist es notwendig,'."\n".
                    'uns sowohl die dafür entscheidenden Grundlagen, die \\jump{OM:FrQFT:FirstPrinciples}{First-Principles} der neuen Physik, als auch ihre beobachteten Eigenschaften vor Augen zu führen.'."\n",
                      'Leptonen kommen in der Natur in geladener und ungeladener Form vor. \\jump{OM:FrQFT:Lepton:Elektrische-Ladung}{Geladene Leptonen} sind das Elektron,'."\n".
                    'das Myon und das Tauon sowie das Positron, als Antiteilchen des Elektrons, und die Antiteilchen zum Myon und Tauon.'."\n".
                    'Die ungeladenen Leptonen sind die entsprechenden \\jump{OM:FrQFT:Lepton:Neutrinos}{Neutrinos}.'."\n",
                      'Hier eine Liste ihrer beobachteten Eigenschaften:'."\n"))),
                      
                  array( 'bulletlist', array( bullet_ary => array(
                        'elektrisch positiv oder negativ geladen sowie ungeladen',
                        'schwache Ladung',
                        'keine starke Ladung',
                        'Ruhemasse',
                        'Spin',
                        'magnetisches Moment des Spins',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wenn wir einen Weg finden wollen, diese Eigenschaften prinzipiell in einem neuen Modell des Leptons der hier entwickelten neuen Physik darzustellen,'."\n".
                    'dann ist es entscheidend, zu welchen entsprechenden First-Principles die aufgelisteten Eigenschaften passen sollten.'."\n".
                    'Folgende First-Principles kommen für mich dabei in Betracht:'."\n"))),
                      
                  array( 'bulletlist', array( bullet_ary => array(
                        'Strukturprinzip',
                        'Eigenschaftsprinzip',
                        'String-Prinzip',
                        '\\color{*Bearb}{Abzählprinzip}',
                        'Bewegungsprinzip',
                        'Existenzprinzip',
                        '›Prinzip der Lichtuhr‹',
                        '\\jump{OM:FrQFT:FirstPrinciples:Vortext:Fraktalitaetsprinzip}{rückgekoppelte fraktale Struktur}',
                        'Regelprozess-Prinzip',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wir können die beobachteten Eigenschaften den Prinzipien folgendermaßen zuordnen:'."\n"))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\\condb{Spin (Drehimpuls)} \\\\'."\n".
                          'Zwei Eigenschaften der Leptonen, die mit so etwas wie Rotation in Verbindung stehen können sind ihr Spin und dessen magnetisches Moment.'."\n".
                          'Zu diesen passen die First-Principles des Bewegungsprinzips, des Eigenschaftsprinzips, des Existenzprinzips, ›Prinzip der Lichtuhr‹, die rückgekoppelte fraktale Struktur und das Regelprozess-Prinzip.',
                        '\\condb{Keine starke Ladung} \\\\'."\n".
                          'Dazu, dass Leptonen keine starke Ladung besitzen, passt das Strukturprinzip, das Eigenschaftsprinzip und das String-Prinzip.'."\n".
                          'Denn bei einem rotierenden geschlossenen String von Wirkungsquanten existiert keine \\jump{OM:FrQFT:Quantenchromodynamik:FarbPolUndLadung}{Farbladung}.',
                        '\\condb{Elektrische Ladung} \\\\'."\n".
                          'Beim elektrischen Feld des Photons handelt es sich um eine rotierende, unterschiedliche Dichteverteilung von Wirkungsquanten auf seinem String.'."\n".
                          'Im Falle eines elektrisch positiv geladenen Leptons, wie dem Positron, den Antiteilchen des Elektrons, sollten überwiegend, im zeitlichen Mittel, die dichteren Stellen des Strings (Konvention) nach außen präsentieren werden, um deren positive Ladung zu repräsentieren.'."\n".
                          'Beim negativ geladenen Lepton, wie dem Elektron, sind es die weniger dicht besetzten Stellen, die im zeitlichen Mittel nach außen wirken sollten.'."\n".
                          'Und im Falle der Neutrinos muss dies im zeitlichen Mittel ausgeglichen sein.',
                        '\\condb{Magnetisches Moment des Spins} \\\\'."\n".
                          'Das magnetische Moment des Spins ist durch die Rotation eines schwingenden elektrischen Feldes zu erklären.',
                        '\\condb{Schwache Ladung} \\\\'."\n".
                          'Während die schwache Ladung durch eine Asymmetrie der räumlichen und zeitlichen Verteilung der elektrischen Ladung zu erklären ist.',
                        '\\condb{Ruhemasse} \\\\'."\n".
                          'Die Ruhemasse wird durch die Anzahl der Wirkungsquanten im String verständlich, die jedes eine Masseneinheit sind.'."\n".
                          'Aus energetischer Perspektive wird sie durch die gebundene, einheitliche Bewegungsenergie jedes Wirkungsquants im String erzeugt.',
                    ))),
                  array( 'text', array( text => array(
                    'All dies wird für den Fall einer positiven elektrischen Ladung in der \\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton} zusammengebracht.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Vortext:XXX', text =>
                                           
                'Erste Analyse der Mechanik und Funktion', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Dies gelingt indem ein Wirkungsquanten-String (symbolisiert durch \\color{*WirkungsquantenRot}{rote Kugeln}) mit abschnittsweise unterschiedlicher Dichte'."\n".
                    'um die Linie (grün) einer in sich geschlossenen Helixspirale rotiert.'."\n".
                    'Während seiner Rotation bewegt sich der String mit Lichtgeschwindigkeit parallel zu der grünen Linie, so dass diese Bewegung als Lichtuhr fungiert.'."\n".
                    'Die \\color{*LichtbahnGruen}{grüne Linie} bezeichne ich aus diesem Grund als \\italic{Lichtbahn}.'."\n",
                      'Gleichzeitig rotieren die Wirkungsquanten ebenfalls mit Lichtgeschwindigkeit um die Lichtbahn.'."\n".
                    'Insgesamt bewegen sie sich auf einer helixförmigen Spiralbahn um die Lichtbahn, ähnlich wie bei Photonen,'."\n".
                    'die sich ihrerseits um den \\color{*SpinBahnBlau}{blauen Kreis} der \\italic{Spin-Bahn} windet.'."\n",
                      'In der \\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton} werden die dichteren Stellen des Strings beim Entfalten nach außen gerichtet, während die weniger Dichten'."\n".
                    'Stellen zum Zentrum weisen.'."\n".
                    'Dies stellt eine schwingende elektrische Ladung dar, bei der der dominante Pol nach außen präsentiert wird.'."\n",
                      'Die Umkehrung der nach außen gerichteten Polarisierung gibt es nur bei den neutralen Leptonen.'."\n".
                    'Aber bei den geladenen Leptonen gibt es die Umkehrung nicht in nennenswertem Maße, weil sich ihre Struktur im Moment der Umkehrung zusammenfaltet.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Vortext:XXX', text =>
                                           
                'Mechanik des Leptonen-Wirkungsquanten-Strings', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Berechnung der verschiedenen Spins des Leptonen-Modells führen wir im folgenden Abschnitt \\italic{\\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik}} durch.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik'),
                    )),
              )
          ); ?>
          
          
		    	<!  • Berechnung der String-Mechanik  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik',
              'Die Mechanik des Leptonen-Wirkungsquanten-Strings', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Naturphilosophie-der-Mechanik', type => 'back'),
                    )),
                      
                  array( 'text', array( text => array(
                    'Die folgenden Formeln werden bei der Berechnung des Leptonen-Modells als grundsätzlich gültig angenommen:'."\n"))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Die allgemeine Wellengleichung ist gegeben durch die Geschwindigkeit \\term{c},'."\n".
                      'die Frequenz \\term{f} und die Wellenlänge \\term{λ} mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c  =  f \cdot \lambda  \;\;  .  }',
                                               label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-LG-aus-Frequenz-Lambda', label_text => '\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-LG-aus-Frequenz-Lambda}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die Energie \\term{E_{ele}} eines Elementarteilchens ist durch seine De-Broglie-'."\n".
                      'Frequenz\\footnote{\\const{FrQFT_g_footnote_text_DeBroglieFrequenzWellen}} \\term{f_{ele}} gegeben mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  E_{ele}  =  h \cdot f_{ele}  \;\;  .  }',
                                               label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-EinsteinEnergieLichtQuant', label_text => '\\jump{OM:FrQFT:HeisenbergUnschaerfe:Equ-EinsteinEnergieLichtQuant}{\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-EinsteinEnergieLichtQuant}}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die Energie-Masse-Äquivalenz\\footnote{\\const{FrQFT_g_footnote_text_AequivalMasseEnergie}} ist gegeben mit'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  E  =  m \cdot {_{\lowZero}c^{2}}  \;\;  .  }',
                                               label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-E-ele-aequi-zu-Masse', label_text => '\\jump{OM:FrQFT:FirstPrinciples:Vortext:Equ-E-ele-aequi-zu-Masse}{\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-E-ele-aequi-zu-Masse}}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Generell gehen wir davon aus, dass die De-Broglie-Frequenz \\term{f_{ele}} eines Elementarteilchens'."\n".
                    'eine Rotation oder Schwingung von einem bestimmten Zustand zum nächsten von diesem ununterscheidbaren ist.'."\n".
                    'Das bedeutet, dass bei einem Schwingungsdurchgang mit der Spin-Rotationsgeschwindigkeit \\term{c} nicht unbedingt'."\n".
                    'der gesamte String einmal in der Ebene des Haupt-Spins'."\n".
                    'um den Teilchenschwerpunkt rotiert; die Wellenlänge \\term{λ} also nur einem Teil des Spin-Umfangs entspricht.'."\n",
                      'In der \\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton} ist dementsprechend eine Teilchen-Schwingung auch nur'."\n".
                    'eine Teilrotation des Strings in Haupt-Spin-Richtung, also um das Zentrum entlang der blauen Bahn.'."\n".
                    'Dies ermöglicht eine komplexe Struktur der String-Schwingung,'."\n".
                    'durch die der bei Leptonen – oder genereller bei Fermionen – beobachtete Spin von \\latexmath{ ½ \hbar } erklärbar wird.'."\n".
                    'Auch wird durch die im Modell enthaltene Kombination verschachtelter Helixspiralbewegungen die Schwingung'."\n".
                    'einer \\jump{OM:FrQFT:Lepton:Elektrische-Ladung}{im Mittel elektrisch negativen, positiven oder neutralen Polarisation} verständlich.'."\n".
                    'Dies entspricht der negativen elektrischen Ladung des Elektrons oder seines Antiteilchens Positron, sowie deren schwereren Schwester- und Bruderteilchen: Myon, Tauon und so weiter;'."\n".
                    'und im neutralen Fall den verschiedenen Neutrino-Arten.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:XXX', text =>
                                           
                'Ansatz der Mechanik', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um die Struktur formal zu beschreiben brauchen wir verschiedene Kennzahlen, die einen Leptonen-String auszeichnen:'."\n",
                      'Wir beginnen mit der Anzahl der elektrischen Feldstärken-Pole \\term{n_{pol}} im String.'."\n".
                    'Diese entsprechen den Wechseln zwischen dichter und weniger dicht mit Wirkungsquanten besetzten Stellen des Strings.'."\n".
                    'Bei geladenen Leptonen-Strings kommt ein Feldstärken-Polwechsel auf eine Lichtbahn-Welle,'."\n".
                    'sodass immer die gleichen Feldstärken-Pole nach außen und die anderen nach innen präsentiert werden (\\term{n_{polwel} = 1}),'."\n".
                    'wodurch die Teilchen im zeitlichen Mittel elektrisch geladen erscheinen.'."\n".
                    'Bei neutralen Leptonen-Strings verteilt sich ein Feldstärken-Polwechsel auf zwei Lichtbahn-Wellen,'."\n".
                    'sodass gleichzeitig die beiden unterschiedlichen Feldstärken-Pole nach innen \\color{*Bearb}{(außen?)} präsentiert werden (\\term{n_{polwel} = 2}),'."\n".
                    'was die neutralen Leptonen-Strings bei zunehmender Distanz von deren Schwerpunkt sehr schnell völlig elektrisch neutral erscheinen lässt.'."\n".
                    'Multipliziert mit der Wellenanzahl der \\color{*LichtbahnGruen}{grünen} Lichtbahn je Feldstärken-Polwechsel \\term{n_{polwel}}'."\n".
                    'bestimmen sie die gesamte Lichtbahn-Wellenanzahl \\term{n_{wel}}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n_{wel}  =  n_{pol} \cdot n_{polwel}  }'),
                    ))),

                  array( 'notice', array( Display => 'showContent', text => array(
                    '\\bold{Fragestellungen zur Entwicklung des Modells}',
                    '\\bold{\\italic{Wie stehen \\term{n_{wel}}, \\term{n_{pol}} und \\term{n_{polwel}} mit dem Unterschied zwischen den Neutrinos und den geladenen Leptonen im Zusammenhang?}}',
                    '\\condb{Ladung}',
                    '• geladen: \\term{n_{polwel} = 1}',
                    '• neutral: \\term{n_{polwel} = 2}',
                    '• neutral: Ladungspole nach innen oder nach außen, Teilchen und Antiteilchen(?), starker Strukturunterschied(!), CP-Verletzung(?), bestimmte Reaktionen gibt es nicht mit links- oder rechtshändigen Neutrinos(?)',
                    '\\condb{Frequenz}',
                    '• \\quote{Generell gehen wir davon aus, dass die De-Broglie-Frequenz \\term{f_{ele}} eines Elementarteilchens eine Rotation oder Schwingung von einem bestimmten Zustand zum nächsten von diesem ununterscheidbaren ist.}',
                    '• \\term{n_{polwel} = 2} führt dazu, dass ein wirklich ununterscheidbarer Zustand erst nach zwei Durchgängen von \\term{f_{ele}} erreicht wird.',
                    '• Beide Zustände sind aber nahezu ununterscheidbar.',
                    '• Was bedeutet dies für das Modell?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wenn sich, wie gesagt, der Wirkungsquanten-String entlang der \\color{*LichtbahnGruen}{grünen} Lichtbahn mit Lichtgeschwindigkeit \\term{_{0}c} bewegt,'."\n".
                    'dann bewegt er sich, projiziert auf den \\color{*SpinBahnBlau}{blauen} Kreis der Spin-Bahn, im Mittelwert mit der Spin-Geschwindigkeit \\term{c_{spin}}, wobei \\term{c_{spin} < _{0}c} gilt.'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei \\term{f_{ele}} die Frequenz der String-Schwingungen und \\term{λ_{wel}} die'."\n".
                      'Lichtbahn-Länge einer Lichtbahn-Welle, dann ergibt sich nach'."\n".
                      'Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-LG-aus-Frequenz-Lambda} für'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c_{spin}  =  f_{ele} \cdot \lambda_{wel}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f_{ele}  =  \frac{ c_{spin} }{ \lambda_{wel} }  \;\;  .  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Weiterhin können wir aus dem Radius \\term{r_{spin}} der \\color{*SpinBahnBlau}{blauen} Spin-Bahn und der Anzahl der'."\n".
                      'Wellensegmente \\term{n_{wel}} über den gesamten String die Länge eines'."\n".
                      'Wellensegmentes zu'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \lambda_{wel}  =  \frac{ 2 \pi \cdot r_{spin} }{ n_{wel} }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'berechnen.'."\n".
                      'So ergibt sich durch Einsetzen die Frequenz'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  f_{ele}  =  \frac{ c_{spin} }{ \frac{ 2 \pi \cdot r_{spin} }{ n_{wel} } }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  f_{ele}  =  c_{spin} \cdot \frac{ n_{wel} }{ 2 \pi \cdot r_{spin} }  }',
                                    latex_if_visible => '{  \Leftrightarrow  f_{ele}  =  c_{spin} \cdot \frac{ n_{wel} }{ 2 \pi \cdot r_{spin} }  }',
                                          label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Frequenz-aus-Spin-Geschw-Radius', label_text => '\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Frequenz-aus-Spin-Geschw-Radius}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'der String-Schwingungen.'."\n".
                      '\\\\'."\n".
                      'Durch Gleichsetzen der Energieformeln \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-EinsteinEnergieLichtQuant}'."\n".
                      'und \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-E-ele-aequi-zu-Masse} erhalten wir:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  h \cdot f_{ele}  =  m_{ele} \cdot {_{\lowZero}c^{2}}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Nun können wir in die vorstehende Formel die davor hergeleitete'."\n".
                      'Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Frequenz-aus-Spin-Geschw-Radius} einsetzen und erhalten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  h \cdot c_{spin} \cdot \frac{ n_{wel} }{ 2 \pi \cdot r_{spin} }  =  m_{ele} \cdot {_{\lowZero}c^{2}}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  c_{spin}  =  m_{ele} \cdot {_{\lowZero}c^{2}} \cdot \frac{ 2 \pi \cdot r_{spin} }{ h \cdot n_{wel} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c_{spin}  =  \frac{ r_{spin} \cdot m_{ele} \cdot {_{\lowZero}c^{2}} }{ \hbar \cdot n_{wel} }  }',
                                    latex_if_visible => '{  \Leftrightarrow  c_{spin}  =  \frac{ r_{spin} \cdot m_{ele} \cdot {_{\lowZero}c^{2}} }{ \hbar \cdot n_{wel} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  r_{spin} \cdot m_{ele}  =  c_{spin} \cdot \frac{ \hbar \cdot n_{wel} }{ {_{\lowZero}c^{2}} }  }',
                                               label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Masse-Radius', label_text => '\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Masse-Radius}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Weil der Spin-Radius \\term{r_{spin}} entlang des Strings variiert und hier gemittelt ist,'."\n".
                    'ist zu beachten, dass auch die Geschwindigkeit \\term{c_{spin}}'."\n".
                    'entlang der Spin-Bahn variiert und ebenfalls vereinfachend gemittelt ist.'."\n".
                    'Dass \\term{r_{spin}} und \\term{c_{spin}} Mittelungen sind, spielt keine große Rolle,'."\n".
                    'denn die mit ihnen verbundenen gemessenen Größen sind statistischer Natur.'."\n",
                      'Entscheidend für ein Modell, dass die Physik vereinheitlicht, ist die Realisierung der wesentlichen'."\n".
                    'Eigenschaften der zu vereinheitlichenden Theorien: der Allgemeinen Relativitätstheorie und der Quantenphysik\\footnote{\\const{FrQFT_g_footnote_text_Quantenphysik}}.'."\n".
                    'Mit der Parallelbewegung der Wirkungsquanten zur \\color{*LichtbahnGruen}{grünen} Lichtbahn'."\n".
                    'realisiert das Modell das ›Prinzip der Lichtuhr‹, das eine wesentliche Eigenschaft der Allgemeinen Relativitätstheorie ist.'."\n".
                    'Mit der Rotation des Wirkungsquanten-Strings um die Lichtbahn realisiert das Modell'."\n".
                    'die De-Broglie-Frequenz des Leptonen-Strings, eine wesentliche Eigenschaft der Quantenphysik.'."\n",
                      'Die beiden genannten, im Modell realisierten wesentlichen Eigenschaften lösen'."\n".
                    'das oben geschilderte \\jump{OM:FrQFT:Lepton:Zeit-und-Alterung}{›Problem der Zeit‹}, dass nach meiner Analyse'."\n".
                    'der Vereinheitlichung der Physik im Wege steht.'."\n".
                    'Gemeinsam mit dem beobachteten Leptonen-Spin und seiner Masse berechnen wir jetzt wichtige Eigenschaften'."\n".
                    'des Leptonen-Modells.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:XXX', text =>
                                           
                'Ansatz der konkreten Berechnung der Modelleigenschaften', subline =>
                  'Ausgangspunkt ist der in Experimenten beobachtete Leptonen-Spin')),

                  array( 'notice', array( Display => 'hideContent', text => array(
                    '• Die Beobachtung eines Leptonen-Spins von \\latexmath{½ \hbar} kann durch die Aufspaltung der Photonen-Spins strukturell mechanisch begründet werden.',
                    ))),

                  array( 'text', array( text => array(
                    'Wir nutzen nun die experimentelle und in der Quantenphysik zentrale Beobachtung, dass Leptonen den Spin \\latexmath{½ \hbar} tragen:'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Im entwickelten Modell wird der Leptonen-Spin \\term{s_{lep}} als realer Drehimpuls verstanden, der sich aus der Masse \\term{m_{lep}} seines Strings'."\n".
                      'in Bezug auf dessen mittleren Rotationsradius \\term{r_{spin}} und seine mittlere Geschwindigkeit \\term{c_{spin}} zu'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s_{lep}  =  \frac{ 1 }{ 2 } \hbar  }'),
                      array( display => 'on',  latex => '{  s_{lep}  =  r_{spin} \cdot m_{lep} \cdot c_{spin}  }',
                                               label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Lep', label_text => '\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Lep}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ 1 }{ 2 } \hbar  =  r_{spin} \cdot m_{lep} \cdot c_{spin}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'berechnet. \\\\ '."\n".
                      'Ersetzen wir hierin das Produkt aus Spin-Radius und Masse \\term{r_{spin} ⋅ m_{lep}} mit Hilfe von Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Masse-Radius}, dann erhalten wir:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  \frac{ 1 }{ 2 } \hbar  =  c_{spin} \cdot \frac{ \hbar \cdot n_{wel} }{ {_{\lowZero}c^{2}} } \cdot c_{spin}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \frac{ 1 }{ 2 } \hbar \cdot \frac{ {_{\lowZero}c^{2}} }{ \hbar \cdot n_{wel} }  =  c_{spin}^{2}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  c_{spin}  =  \sqrt{ \frac{ {_{\lowZero}c^{2}} }{ 2 \cdot n_{wel} } }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c_{spin}  =  \frac{ {_{\lowZero}c} }{ \sqrt{ 2 \cdot n_{wel} } }  }',
                                    latex_if_visible => '{  \Leftrightarrow  c_{spin}  =  \frac{ {_{\lowZero}c} }{ \sqrt{ 2 \cdot n_{wel} } }  }',
                                               label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Geschw-aus-LG', label_text => '\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Geschw-aus-LG}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  {_{\lowZero}c}  =  \sqrt{ 2 \cdot n_{wel} } \cdot c_{spin}  }',
                                               label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-LG-aus-Spin-Geschw', label_text => '\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-LG-aus-Spin-Geschw}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Demnach ist die mittlere Spin-Geschwindigkeit \\term{c_{spin}} ausschließlich von der Wellenzahl \\term{n_{wel}} abhängig.'."\n",
                      'Zur mittleren Rotationsgeschwindigkeit \\term{c_{licht,rot}} des Strings projiziert auf die'."\n".
                    '\\color{*LichtbahnGruen}{grüne} Lichtbahn, also entlang der beziehungsweise parallel zur \\color{*LichtbahnGruen}{grünen} Spirale'."\n".
                    'um die \\color{*SpinBahnBlau}{blaue} Spin-Bahn, gelangen wir aufgrund der senkrechten'."\n".
                    'Orientierung des Lichtbahn-Radius \\term{r_{licht,rot}} zur Spin-Bahn über den Pythagoras:'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\ '."\n".
                      'Die Geschwindigkeit des Strings parallel zur Lichtbahn ist, wie oben geschildert,'."\n".
                      'per Definition die Lichtgeschwindigkeit \\term{_{0}c}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  {_{\lowZero}c^{2}}  =  c_{licht,rot}^{2} + c_{spin}^{2}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{licht,rot}  =  \sqrt{ {_{\lowZero}c^{2}} - c_{spin}^{2} }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wir setzen für \\term{c_{spin}} Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Geschw-aus-LG}'."\n".
                      'und anschließend für die Lichtgeschwindigkeit'."\n".
                      '\\term{_{0}c} Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-LG-aus-Spin-Geschw} ein und erhalten'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  c_{licht,rot}  =  \sqrt{ {_{\lowZero}c^{2}} - *( \frac{ {_{\lowZero}c} }{ \sqrt{ 2 \cdot n_{wel} } } *)^{2} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  c_{licht,rot}  =  \sqrt{ {_{\lowZero}c^{2}} - \frac{ {_{\lowZero}c^{2}} }{ 2 \cdot n_{wel} } }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c_{licht,rot}  =  \sqrt{ 1 - \frac{ 1 }{ 2 \cdot n_{wel} } } \cdot {_{\lowZero}c}  }',
                                    latex_if_visible => '{  \Leftrightarrow  c_{licht,rot}  =  \sqrt{ 1 - \frac{ 1 }{ 2 \cdot n_{wel} } } \cdot {_{\lowZero}c}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  c_{licht,rot}  =  \sqrt{ 1 - \frac{ 1 }{ 2 \cdot n_{wel} } } \cdot \sqrt{ 2 \cdot n_{wel} } \cdot c_{spin}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  c_{licht,rot}  =  \sqrt{ *( 1 - \frac{ 1 }{ 2 \cdot n_{wel} } *) \cdot 2 \cdot n_{wel} } \cdot c_{spin}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{licht,rot}  =  \sqrt{ 2 \cdot n_{wel} - 1 } \cdot c_{spin}  }',
                                          label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-c-licht-rot-aus-c-spin', label_text => '\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-c-licht-rot-aus-c-spin}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'für die auf die \\color{*LichtbahnGruen}{grüne} Lichtbahn projizierte Rotationsgeschwindigkeit um die '."\n".
                      '\\color{*SpinBahnBlau}{blaue} Spin-Bahn.'."\n",
                        '\\\\ '."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Mit Hilfe der allgemeinen Wellengleichung können wir jetzt formulieren,'."\n".
                    'wie die auf die \\color{*LichtbahnGruen}{grüne} Lichtbahn projizierte Rotationsgeschwindigkeit'."\n".
                    '\\term{c_{licht,rot}} um die \\color{*SpinBahnBlau}{blaue} Spin-Bahn und ihr Rotationsradius \\term{r_{licht,rot}}'."\n".
                    'mit der De-Broglie-Frequenz \\term{f_{ele}} des Leptons in Zusammenhang stehen.'."\n".
                    'Denn wie in der \\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton} zu erkennen ist,'."\n".
                    'rotiert der Leptonen-String ein Mal um die Lichtbahn, während er auch ein Mal um die Spin-Bahn rotiert.'."\n".
                    'Beide Rotationsfrequenzen sind identisch:\\footnote{Dies ist eine Korrektur gegenüber meiner Arbeit von 2012, wo die Annahme war, dass der Wirkungsquanten-String, dort noch Gravitonen-String genannt, zwei Mal um die Licht-Bahn rotiert, während er ein Mal um die Spin-Bahn rotiert: \\\\ Vgl. \\cite{Huss:GFTv7.381j2012}, Kap. 5 Qualitative Physik der QM und ART, 5.2 Elementarteilchen und ihre Wechselwirkungen, 5.2.1 Leptonen, S. 89-100, hier S. 95.}'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\ '."\n".
                      'Sei die Wellenlänge durch'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \lambda_{licht,rot}  =  2 \pi \cdot r_{licht,rot}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'gegeben, so können wir die allgemeine Wellengleichung \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-LG-aus-Frequenz-Lambda}'."\n".
                      'hierauf anpassen mit:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c_{licht,rot}  =  f_{ele} \cdot \lambda_{licht,rot}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c_{licht,rot}  =  f_{ele} \cdot 2 \pi \cdot r_{licht,rot}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Durch ersetzen der Rotationsfrequenz \\term{f_{ele}} mittels Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Frequenz-aus-Spin-Geschw-Radius}'."\n".
                      'und von \\term{c_{licht,rot}} mittels der vorstehenden Formel kommen wir zu'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  c_{licht,rot}  =  c_{spin} \cdot \frac{ n_{wel} }{ 2 \pi \cdot r_{spin} } \cdot 2 \pi \cdot r_{licht,rot}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  c_{licht,rot}  =  c_{spin} \cdot \frac{ n_{wel} }{ r_{spin} } \cdot r_{licht,rot}  }'),
                      array( display => 'off', latex => '{  \Rightarrow  \sqrt{ 2 \cdot n_{wel} - 1 } \cdot c_{spin}  =  c_{spin} \cdot \frac{ n_{wel} }{ r_{spin} } \cdot r_{licht,rot}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sqrt{ 2 \cdot n_{wel} - 1 }  =  \frac{ n_{wel} }{ r_{spin} } \cdot r_{licht,rot}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \frac{ \sqrt{ 2 \cdot n_{wel} - 1 } }{ \frac{ n_{wel} }{ r_{spin} } }  =  r_{licht,rot}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  r_{licht,rot}  =  \frac{ \sqrt{ 2 \cdot n_{wel} - 1 } }{ n_{wel} } \cdot r_{spin}  }',
                                    latex_if_visible => '{  \Leftrightarrow  r_{licht,rot}  =  \frac{ \sqrt{ 2 \cdot n_{wel} - 1 } }{ n_{wel} } \cdot r_{spin}  }',
                                          label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-licht-rot-aus-r-spin', label_text => '\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-licht-rot-aus-r-spin}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'für den Rotationsradius der Lichtbahn um die Spin-Bahn. \\\\'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Aus Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Masse-Radius} können wir durch einsetzen von Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Geschw-aus-LG}'."\n".
                      'für den mittleren Spin-Radius \\term{r_{spin}} folgende Formel herleiten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  r_{spin} \cdot m_{ele}  =  c_{spin} \cdot \frac{ \hbar \cdot n_{wel} }{ {_{\lowZero}c^{2}} }  }',
                                          /* label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Masse-Radius', */label_text => '\\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Masse-Radius}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  r_{spin}  =  c_{spin} \cdot \frac{ \hbar \cdot n_{wel} }{ m_{ele} \cdot {_{\lowZero}c^{2}} }  }'),
                      array( display => 'off', latex => '{  \Rightarrow  r_{spin}  =  \frac{ {_{\lowZero}c} }{ \sqrt{ 2 \cdot n_{wel} } } \cdot \frac{ \hbar \cdot n_{wel} }{ m_{ele} \cdot {_{\lowZero}c^{2}} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  r_{spin}  =  \sqrt{ \frac{ n_{wel}^{2} }{ 2 \cdot n_{wel} } } \cdot \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  r_{spin}  =  \sqrt{ \frac{ n_{wel} }{ 2 } } \cdot \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c} }  }',
                                    latex_if_visible => '{  \Leftrightarrow  r_{spin}  =  \sqrt{ \frac{ n_{wel} }{ 2 } } \cdot \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c} }  }',
                                          label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-spin-aus-Masse-LG', label_text => '\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-spin-aus-Masse-LG}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Unser Ergebnis für \\term{r_{spin}} in die zuvor entwickelte Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-licht-rot-aus-r-spin}'."\n".
                      'eingesetzt liefert uns für den mittleren Rotationsradius der Lichtspirale'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  r_{licht,rot}  =  \frac{ \sqrt{ 2 \cdot n_{wel} - 1 } }{ n_{wel} } \cdot \sqrt{ \frac{ n_{wel} }{ 2 } } \cdot \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  r_{licht,rot}  =  \sqrt{ \frac{ 2 \cdot n_{wel} - 1 }{ n_{wel}^{2} } } \cdot \sqrt{ \frac{ n_{wel} }{ 2 } } \cdot \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  r_{licht,rot}  =  \sqrt{ \frac{ 2 \cdot n_{wel} - 1 }{ 2 \cdot n_{wel} } } \cdot \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  r_{licht,rot}  =  \sqrt{ 1 - \frac{ 1 }{ 2 \cdot n_{wel} } } \cdot \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c} }  }',
                                    latex_if_visible => '{  \Leftrightarrow  r_{licht,rot}  =  \sqrt{ 1 - \frac{ 1 }{ 2 \cdot n_{wel} } } \cdot \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c} }  \;\;  ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'den wir gleich anschließend für die Berechnung des Lichtrotations-Spins nutzen.'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Entsprechend zum Leptonen-Spin in Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Lep}'."\n".
                      'stellen wir die Formel für den Lichtrotations-Spin auf, als Summe des Drehimpulses des Wirkungsquanten-Strings'."\n".
                      'um die Spin-Bahn innerhalb des durch die Lichtbahn geformten Torus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s_{lep,licht,rot}  =  r_{licht,rot} \cdot m_{lep} \cdot c_{licht,rot}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Mit Hilfe der Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-licht-rot-aus-r-spin} sowie'."\n".
                      'der Formeln \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-c-licht-rot-aus-c-spin}'."\n".
                      'und dann \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Lep} lösen wir dies zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  s_{lep,licht,rot}  =  \\\ \qquad\qquad\qquad\qquad \frac{ \sqrt{ 2 \cdot n_{wel} - 1 } }{ n_{wel} } \cdot r_{spin} \cdot m_{lep} \\\ \qquad\qquad\qquad\qquad\qquad\qquad\quad \cdot \sqrt{ 2 \cdot n_{wel} - 1 } \cdot c_{spin}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  s_{lep,licht,rot}  =  \frac{ 2 \cdot n_{wel} - 1 }{ n_{wel} } \cdot r_{spin} \cdot m_{lep} \cdot c_{spin}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  s_{lep,licht,rot}  =  *( 2 - \frac{ 1 }{ n_{wel} } *) \cdot s_{lep}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  s_{lep,licht,rot}  =  *( 2 - \frac{ 1 }{ n_{wel} } *) \cdot \frac{ 1 }{ 2 } \hbar  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s_{lep,licht,rot}  =  *( 1 - \frac{ 1 }{ 2 \cdot n_{wel} } *) \cdot \hbar  }',
                                    latex_if_visible => '{  \Leftrightarrow  s_{lep,licht,rot}  =  *( 1 - \frac{ 1 }{ 2 \cdot n_{wel} } *) \cdot \hbar  }'),
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', Title =>
                'Der neue, \\italic{innere Spin} steht vermutlich für die Leptonenzahlerhaltung …', TitleVis =>
                'Der neue, innere Spin steht vermutlich für die Leptonenzahlerhaltung:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Der mittlere Spin entlang der Lichtbahn um die Spin-Bahn \\term{s_{lep,licht,rot}}, den ich'."\n".
                    '\\italic{innerer Spin} des Leptons nenne, hat nach meiner Vermutung eine ganz besondere Bedeutung.'."\n",
                      'Entsprechend meinen Vermutungen, dass die Wellenanzahl oder Sternzackenzahl des Leptonen-Strings zur Vermeidung'."\n".
                    'innerer Überschneidungen größer gleich \\term{8}, wegen der neutralen'."\n".
                    'elektrischen Ladung der Neutrinos auch durch zwei teilbar sein sollte und'."\n".
                    'wegen des Quark- beziehungsweise Hadronen-Modells'."\n".
                    'möglicherweise auch durch \\term{3} teilbar plausibel ist, kommen wir mindestens auf \\term{8} Wellen oder Sternzacken,'."\n".
                    'möglicherweise gar auf \\term{12}, \\term{18} oder noch mehr.'."\n".
                    'Hieraus ergeben sich beispielhaft folgende Werte für den inneren Spin:'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\ '."\n".
                      'Für \\term{n_{wel} = 8}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  s_{lep,licht,rot}  =  *( 1 - \frac{ 1 }{ 2 \cdot 8 } *) \cdot \hbar  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  s_{lep,licht,rot}  =  \frac{ 15 }{ 16 } \cdot \hbar  =  0{,}9375 \hbar  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Für \\term{n_{wel} = 12}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  s_{lep,licht,rot}  =  *( 1 - \frac{ 1 }{ 2 \cdot 12 } *) \cdot \hbar  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  s_{lep,licht,rot}  =  \frac{ 23 }{ 24 } \cdot \hbar  =  0{,}95833333333 \hbar  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dieser gebrochenzahlige Spin ist somit nicht ohne weiteres ein ganzzahlige Vielfaches'."\n".
                    'der Spinquantenzahl \\latexmath{½}.'."\n".
                    'Dazu ist es ein Spin, der nur innerhalb des Torus der Lichtbahn-Spirale um die Spin-Bahn existiert.'."\n".
                    'Räumlich gesehen heben sich die Spins der einzelnen Wirkungsquanten des Strings nämlich auf.'."\n",
                      'Trotzdem:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'italic', text => array(
                      'Ich vermute, dass, und es ist aus meiner Sicht zu untersuchen, ob und inwieweit, der innere Spin'."\n".
                      'mit der Leptonenzahlerhaltung im Zusammenhang steht.\\color{*Bearb}{(Verweis: \\jump[https://de.wikipedia.org/wiki/Leptonenzahl]{}{Wikipedia: Leptonenzahl})}'."\n".
                    ''))),

                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:StarkeWechselwirkung', text =>
                                           
                'Innerer Spin und Quarks (Hadronen)', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Welche Rolle der innere Spin in Bezug auf Quarks spielt, ist zu untersuchen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Was ist in der Physik schon bekannt?} \\\\'."\n".
                    'Nach den heutigen Erkenntnissen besitzen die aus Quarks aufgebauten Hadronen alle die Leptonenzahl Null.'."\n".
                    'Demnach sollten sich die Leptonzahlen der Quarks, insoweit sie eine von Null verschiedene Leptonenzahl besitzen,'."\n".
                    'innerhalb eines Hadrons zu Null aufsummieren.'."\n".
                    'Bei Mesonen, die immer aus einem Quark-Antiquark-Paar aufgebaut sind, ist dies wegen der gleich großen'."\n".
                    'und entgegengesetzten Leptonenzahlen von Teilchen und Antiteilchen der Fall.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Was ergibt sich aus dem Lepton-, Quark- und Hadron-Modell der Quanten-Fluss-Theorie?} \\\\'."\n".
                    'In der Quanten-Fluss-Theorie sind Quarks in Hinsicht auf ihre elektrische Ladung \\latexmath{\pm ⅓} oder \\latexmath{\pm ⅔} Leptonen.'."\n".
                    'In Hinsicht auf ihren Spin jedoch Fermionen mit \\latexmath{\pm ½ \hbar}.'."\n".
                    'Insofern ist es spannend, was eine Berechnung des inneren Spins der Quarks ergibt.'."\n".
                    ''))),
                    ))),

                  array( 'text', array( text => array(
                    'Nachfolgen berechnen wir jetzt den \\italic{Wirkungsquanten-String-Spin} um '."\n".
                    'die \\color{*LichtbahnGruen}{grüne} Lichtbahn \\term{s_{lep,wq}}, also den Spin'."\n".
                    'des Strings innerhalb des spiralförmigen Torus, der die Lichtbahn zentral umhüllt.'."\n",
                      'Dafür stellen wir wieder mit Hilfe der allgemeinen Wellengleichung die angepasste Wellengleichung'."\n".
                    'der Rotationsgeschwindigkeit \\term{v_{wq,rot}} der Wirkungsquanten um'."\n".
                    'die \\color{*LichtbahnGruen}{grüne} Lichtbahn in Abhängigkeit der De-Broglie-Frequenz \\term{f_{ele}}'."\n".
                    'des Leptons und seiner Wellenlänge um die Lichtbahn \\term{λ_{wq,rot}} auf.'."\n",
                    //   'Die Wirkungsquanten-Rotationsgeschwindigkeit, also die Rotationsgeschwindigkeit des Strings, um die \\color{*LichtbahnGruen}{grüne} Lichtbahn sollte wie bei Photonen beim \\jump{*KosmBeob-Herlei}{kosmischen Beobachter} \\term{B_{0}}'."\n".
                    // 'gleich der Lichtgeschwindigkeit \\term{_{0}c} sein (siehe Formel \\jumpname{OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschwRot}).'."\n".
                      'Für die De-Broglie-Frequenz \\term{f_{ele}} nutzen wir, wie gehabt, Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Frequenz-aus-Spin-Geschw-Radius}:'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\ '."\n".
                      'Sei die Wellenlänge durch'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \lambda_{wq,rot}  =  2 \pi \cdot r_{wq,rot}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'gegeben, so können wir die allgemeine Wellengleichung \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-LG-aus-Frequenz-Lambda}'."\n".
                      'hierauf anpassen mit:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  v_{wq,rot}  =  f_{ele} \cdot \lambda_{wq,rot}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  v_{wq,rot}  =  f_{ele} \cdot 2 \pi \cdot r_{wq,rot}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Durch ersetzen der Rotationsfrequenz \\term{f_{ele}} mittels Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Frequenz-aus-Spin-Geschw-Radius}'."\n".
                      'und unsere \\jump{OM:FrQFT:ZeitAlterungFrequenz:Wirkungsquanten-Geschwindigkeit}{Interpretation des Pound-Rebka-Snider-Experiments}\\footnote{\\const{FrQFT_g_footnote_text_PoundRebka}}'."\n".
                      'im Rahmen der Quanten-Fluss-Theorie, die zu dem Ergebnis führt, dass die Wirkungsquanten-Rotationsgeschwindigkeit beim'."\n".
                      '\\jump{*KosmBeob-Herlei}{kosmischen Beobachter} \\term{B_{0}} gleich der Lichtgeschwindigkeit \\term{_{0}c} ist (siehe Formel \\jumpname{OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschwRot}),'."\n".
                      'kommen wir zu'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  v_{wq,rot}  =  {_{\lowZero}c}  }',
                                               /* label_name => 'OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschwRot', */label_text => '\\jumpname{OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschwRot}', label_incr => false),
                      array( display => 'off', latex => '{  \Rightarrow  {_{\lowZero}c}  =  c_{spin} \cdot \frac{ n_{wel} }{ 2 \pi \cdot r_{spin} } \cdot 2 \pi \cdot r_{wq,rot}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  r_{wq,rot}  =  \frac{ r_{spin} }{ n_{wel} \cdot c_{spin} } \cdot {_{\lowZero}c}  \;\;  .  }',
                                    latex_if_visible => '{  \Leftrightarrow  r_{wq,rot}  =  \frac{ r_{spin} }{ n_{wel} \cdot c_{spin} } \cdot {_{\lowZero}c}  \;\;  .  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Hier können wir jetzt die mittle Spin-Geschwindigkeit \\term{c_{spin}} mit Hilfe von Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Geschw-aus-LG}'."\n".
                      'und den mittleren Spin-Radius \\term{r_{spin}} mit Hilfe von Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-spin-aus-Masse-LG} ersetzen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  r_{wq,rot}  =  \frac{ r_{spin} }{ n_{wel} \cdot \frac{ {_{\lowZero}c} }{ \sqrt{ 2 \cdot n_{wel} } } } \cdot {_{\lowZero}c}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  r_{wq,rot}  =  \frac{ r_{spin} }{ \sqrt{ \frac{ n_{wel}^{2} }{ 2 \cdot n_{wel} } } }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  r_{wq,rot}  =  \frac{ r_{spin} }{ \sqrt{ \frac{ n_{wel} }{ 2 } } }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  r_{wq,rot}  =  \sqrt{ \frac{ 2 }{ n_{wel} } } \cdot r_{spin}  }',
                                    latex_if_visible => '{  \Leftrightarrow  r_{wq,rot}  =  \sqrt{ \frac{ 2 }{ n_{wel} } } \cdot r_{spin}  }',
                                          label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-wq-rot-aus-r-spin', label_text => '\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-wq-rot-aus-r-spin}', label_incr => true),
                      array( display => 'off', latex => '{  \Leftrightarrow  r_{wq,rot}  =  \sqrt{ \frac{ 2 }{ n_{wel} } } \cdot \sqrt{ \frac{ n_{wel} }{ 2 } } \cdot \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  r_{wq,rot}  =  \frac{ \hbar }{ m_{ele} \cdot {_{\lowZero}c} }  }',
                                          label_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-wq-rot-aus-hbar-m-ele-c', label_text => '\\name{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-wq-rot-aus-hbar-m-ele-c}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und bekommen einen Wirkungsquanten-Rotationsradius, der umgekehrtproportional zur Leptonen-Masse ist.'."\n",
                        '\\\\ '."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Die vorstehende Gleichung ist sehr bemerkenswert daher möchte ich ihre Bedeutung in einem kurzen Einschub erläutern.'."\n".
                    'Dieser kann ohne Probleme beim weiteren Verständnis auch zu einem späteren Zeitpunkt gelesen werden.'."\n".
                    ''))),

                  array( 'fade-in-area', array( Display => 'hideContent', Title =>
                'Träge Masse und starke Wechselwirkung …', TitleVis =>
                'Träge Masse und starke Wechselwirkung:', ParagraphList => array(
                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:XXX', text =>
                                           
                'Träge Masse', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-wq-rot-aus-hbar-m-ele-c} lässt sich zur Masse eines Elementarteilchens \\term{m_{ele}} umformen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  m_{ele}  =  \frac{ \hbar }{ r_{wq,rot} \cdot {_{\lowZero}c} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dieser Zusammenhang hat die Fähigkeit, die \\jump{OM:FrQFT:Lepton:Masse-Impuls-Energie}{träge Masse eines Elementarteilchens}'."\n".
                    'zu erklären, wie Albrecht Giese zeigt.\\footnote{Vgl. \\cite{Giese:TheOriginOfMass2019}, Kap. 1 Summery, S. 1 — Kap. 2 The Fundamental Mechanism of Inertial Mass — Kap. 3 Quantitative Determination of the Mass of an Elementary Particle, S. 2–6.}'."\n".
                    'Dies kann sie unter der Bedingung, dass eine \\jump{OM:FrQFT:Quantenchromodynamik:FarbPolUndLadung}{Form von Sombrero-Potenzial eine Struktur des Elementarteilchens stabil hält},'."\n".
                    'was wiederum sehr an den \hidden{\\jump{OM:FrQFT:Elementarteilchen:Higgs-Feld-Mechanismus-traege-Masse}{Higgs-Mechanismus}}\\jump{OM:FrQFT:Vakuum:Higgs-Feld-und-Higgs-Mechanismus}{Higgs-Mechanismus}\\footnote{\\const{FrQFT_g_footnote_text_HiggsMech}} erinnert.'."\n",
                      'In der fraktalen Quanten-Fluss-Theorie hält genau ein solches Potenzial die dynamische Struktur'."\n".
                    'der \\jump{OM:FrQFT:NeuePhysik:Strings-aus-Wirkungsquanten}{Elementarteilchen-Strings in der Form}.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:StarkeWechselwirkung', text =>
                                           
                'Starke Wechselwirkung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um die träge Masse aus diesem Zusammenhang zu berechnen benutzt Albrecht Giese die Feldkonstante der'."\n".
                    '\\jump{OM:FrQFT:Quantenchromodynamik}{starken Wechselwirkung}\\footnote{\\const{FrQFT_g_footnote_text_StarkeWW}}.\\footnote{Vgl. \\cite{Giese:TheOriginOfMass2019}, Kap. 3 Quantitative Determination of the Mass of an Elementary Particle, S. 3–6, hier S. 3.}'."\n".
                    'Dies ist sehr bemerkenswert, weil die String-Spannung beziehungsweise das sogenannte \\jump{OM:FrQFT:Quantenchromodynamik:Confinement}{Confinement der Quarks und Gluonen}\\footnote{\\const{FrQFT_g_footnote_text_Confinement}}'."\n".
                    'in der fraktalen Quanten-Fluss-Theorie der starken Wechselwirkung entspricht.'."\n".
                    'Das passt plausibel zusammen.'."\n".
                    ''))),
                    ))),

                  array( 'text', array( text => array(
                    'Wir fahren also mit unseren Berechnungen fort:'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\ '."\n".
                      'Entsprechend zum Leptonen-Spin in Formel \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Lep}'."\n".
                      'stellen wir die Formel für den Wirkungsquanten-String-Spin um die Lichtbahn \\term{s_{lep,wq}} auf, als Summe des Drehimpulses des Wirkungsquanten-Strings'."\n".
                      'um die Lichtbahn, innerhalb des durch die Wirkungsquanten-String-Schwingung geformten helixförmigen Torus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s_{lep,wq}  =  r_{wq,rot} \cdot m_{lep} \cdot v_{wq,rot}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Für den Wirkungsquanten-String-Spin um die Lichtbahn ergibt sich dann, unter Zuhilfenahme'."\n".
                      'der Formeln \\jumpname{OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschwRot}, für \\term{v_{wq,rot}}, sowie \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-wq-rot-aus-r-spin}, für \\term{r_{wq,rot}},'."\n".
                      'gefolgt von \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-LG-aus-Spin-Geschw}, für \\term{_{0}c},'."\n".
                      'und dem Vergleich mit \\jumpname{OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Lep}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  s_{lep,wq}  =  \sqrt{ \frac{ 2 }{ n_{wel} } } \cdot r_{spin} \cdot m_{lep} \cdot {_{\lowZero}c}  }'),
                      array( display => 'off', latex => '{  \Rightarrow  s_{lep,wq}  =  \sqrt{ \frac{ 2 }{ n_{wel} } } \cdot r_{spin} \cdot m_{lep} \cdot \sqrt{ 2 \cdot n_{wel} } \cdot c_{spin}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  s_{lep,wq}  =  2 \cdot r_{spin} \cdot m_{lep} \cdot c_{spin}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  s_{lep,wq}  =  2 \cdot s_{lep}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  s_{lep,wq}  =  2 \cdot \frac{ 1 }{ 2 } \hbar  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s_{lep,wq}  =  \hbar  }',
                                    latex_if_visible => '{  \Leftrightarrow  s_{lep,wq}  =  \hbar  }',
                                            footnote => 'Dies ist eine Korrektur gegenüber meiner Arbeit von 2012, wo die Annahme war, dass der Wirkungsquanten-String, dort noch Gravitonen-String genannt, zwei Mal um die Licht-Bahn rotiert, während er ein Mal um die Spin-Bahn rotiert: \\\\ Vgl. \\cite{Huss:GFTv7.381j2012}, Kap. 5 Qualitative Physik der QM und ART, 5.2 Elementarteilchen und ihre Wechselwirkungen, 5.2.1 Leptonen, S. 89-100, hier S. 95-96.'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'zum Spin eines Photons.'."\n",
                        '\\\\ '."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Bemerkenswerterweise ist der Wirkungsquanten-String-Spin um die Licht-Bahn tatsächlich der von Photonen,'."\n".
                    'nämlich \\latexmath{\hbar}.'."\n".
                    'Wir haben es demnach also in ihrer Mechanik mit einer vom Funktionsprinzip her wirklichen Lichtuhr zu tun.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:XXX', text =>
                                           
                'Abschätzung der Richtigkeit der Näherung der Mittelwerte', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Sowohl bei der Spin-Geschwindigkeit \\term{c_{spin}}, als auch beim Spin-Radius \\term{r_{spin}} handelt es sich um eine Näherung durch Mittelwerte:'."\n",
                      'Trotz der Schwankung der Spin-Geschwindigkeit ist klar, dass der String nach einem Schwingungsdurchgang ein \\term{n_{wel}}-tel des Spin-Bahnumfangs zurückgelegt hat.'."\n".
                    'Daher stimmt die Spin-Geschwindigkeit nach einer Schwingung mit ihrem Mittel überein.'."\n",
                      'Da der String schwingend mal weiter entfernt mal näher dran um die Spin-Bahn rotiert muss sein mittlerer Spin-Radius dem Radius \\term{r_{spin}} dieser Bahn entsprechen.'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'Lep.Mod', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c_{licht,rot}  }'),
                      array( display => 'on',  latex => '{  r_{licht,rot}  }'),
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
                    ''))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:XXX', text =>
                                           
                'Berechnung des Neutrino-Modells', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'Das Neutrino-Modell hat die Besonderheit, dass sich ein Polwechsel des elektrischen Feldes auf zwei Sternzacken'."\n".
                    'verteilt.'."\n".
                    'Daher sind zwei Schwingungsdurchgänge notwendig, um das Modell wieder in einen komplett ununterscheidbaren Zustand'."\n".
                    'zu überführen.'."\n".
                    'Aus der Ferne reicht allerdings ein Durchgang, um diesen Eindruck zu erzeugen, weil die Pole der elektrischen Feldstärke dort ausgleichen.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:XXX', text =>
                                           
                'Berechnung des magnetischen Moments', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'Siehe Giese …'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:XXX', text =>
                                           
                'XXX', subline =>
                  '')),
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
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Elektrische-Ladung'),
                    )),
              )
          ); ?>
          
          
		    	<!  • Elektrische Ladung:  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Elektrische-Ladung',
              'Variierende Dichten der Wirkungsquanten auf dem Leptonen-String erzeugen elektrische Felder', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik', type => 'back'),
                    )),
                                            
                  /*array( 'figure',
                    array( fig_file_name => 'Lepton_geladen_v09', fig_alt_description => 'Elektrisch geladenes Lepton', width => '700px', height => '374px', name => 'OM:FrQFT:Lepton:Elektrisch-geladenes-Lepton',
                           text => 'Die Grafik zeigt die Struktur eines elektrisch geladenen Leptons mit hypothetischer Phasenzahl \\term{n_{phase} = n_{wel} / n_{polwel} = 6/1 = 6}.'."\n".
                                   'Die Wirkungsquanten eines Wirkungsquanten-Strings mit wechselnder Wirkungsquanten-Dichte bewegen sich auf einer doppelt geschachtelten, helixförmigen'."\n".
                                   'Spiralbahn um ein gemeinsames Rotationszentrum.'."\n".
                                   'In der gezeigten Struktur blinkt das Lepton mit der De-Broglie-Frequenz in einem Wechsel zwischen einer leicht positiven'."\n".
                                   'und einer stärker negativen Polarisation und damit elektrischen Ladung.'."\n".
                                   'Aus weitem Blickwinkel erscheint das Lepton im Mittel vornehmlich elektrisch negativ geladen, während von nahem die differenzierte'."\n".
                                   'Polarisation in ihrer zeitlichen Dynamik die elektroschwache Wechselwirkung erzeugt.'."\n".
                                   'Der Normradius \\term{r_{0}} ist dabei die Bezugseinheit mit \\term{r_{0} = ℏ / (m_{lep} ⋅ c_{0})}.')),*/
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_LeptonELadung, array( name => 'OM:FrQFT:Lepton:Elektrisch-geladenes-Lepton'))),
                      
                  array( 'text', array( text => array(
                    'Die elektrische Ladung eines Leptons wird durch die unterschiedliche Dichte der Wirkungsquanten auf dem Wirkungsquanten-String und ihre'."\n".
                    'asymmetrische Verteilung und Bewegung im Raum erzeugt (siehe \\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton} und \\jumpname{OM:FrQFT:Lepton:Elektrisch-geladenes-Lepton}).'."\n".
                    'Die elektrische Polarisation schwingt dabei zwischen einem schwachen, der Ladung entgegengesetzen Pol und einem starken, der Ladung entsprechenden Pol.'."\n"))),
                  array( 'text', array( text => array(
                    'So ergibt sich im Mittel die \\jump{OM:FrQFT:ElektroschwacheWW:Elektromagnetische-WW}{elektrische Ladung}'."\n".
                    'des Teilchens, ein magnetisches Drehmoment und eine \\jump{OM:FrQFT:Lepton:Schwache-Ladung}{schwache Ladung}.'."\n"))),
                  array( 'text', array( text => array(
                    'Bei den elektrisch neutralen \\jump{OM:FrQFT:Lepton:Neutrinos}{Neutrinos} sind die Pole so verteilt, dass die Wellenphasen der String-Struktur immer gleichzeitig beide entgegengesetzten Pole nach außen '."\n".
                    'richten.'."\n"))),
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Schwache-Ladung'),
                      array(  jump_name => 'OM:FrQFT:ElektroschwacheWW:Elektromagnetische-WW'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Neutrinos'),
                    )),
              )
          ); ?>
          
          
		    	<!  • Schwache Ladung:  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Schwache-Ladung',
              'Asymmetrisch verteilte Dichten der Wirkungsquanten auf dem Leptonen-String erzeugen schwache Felder', 'Sc_f_Paragraph',
                array(
                  array( 'text', array( text => array(
                    'Die schwache Ladung wird durch die unterschiedliche Dichte der Wirkungsquanten auf dem Wirkungsquanten-String und ihre'."\n".
                    'asymmetrische Verteilung und Rotation im Raum erzeugt (siehe \\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton}).'."\n".
                    'Dadurch ergibt sich eine asymmetrische, schwingende \\jump{OM:FrQFT:Lepton:Elektrische-Ladung}{elektrische Polarisation},'."\n".
                    'die ein magnetisches Drehmoment und eine \\jump{OM:FrQFT:ElektroschwacheWW:Schwache-WW}{schwache Ladung} zur Folge hat.'."\n"))),
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Elektrische-Ladung'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Neutrinos'),
                      array(  jump_name => 'OM:FrQFT:ElektroschwacheWW:Schwache-WW'),
                    )),
              )
          ); ?>
       
          
		    	<!  • Masse, Impuls und Energie:  >
		    	<!    • Wirkungsquanten verlinken  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Masse-Impuls-Energie',
              'Die Wirkungsquanten eines Strings sind die Quanten der Masse, der Energie sowie des Impulses und Ursprung der Quantengravitation', 'Sc_f_Paragraph',
                array(
                  array( 'text', array( text => array(
                    'Die Energie eines Elementarteilchens der Quanten-Fluss-Theorie ist schlichtweg proportional zur Anzahl der in seinem'."\n".
                    '\\jump{OM:FrQFT:Elementarteilchen}{Wirkungsquanten-String}'."\n".
                    'enthaltenen \\jump{*Wirkungsquanten-Herlei}{Wirkungsquanten}.'."\n".
                    'Zu sehen ist dies einfach, wenn man die Messung der Energie eines Teilchens auf das'."\n".
                    '\\jump{OM:FrQFT:HeisenbergUnschaerfe}{Zählen seiner Wirkungsquanten}'."\n".
                    'zurück führt.'."\n"))),
                  array( 'text', array( text => array(
                    'Dies gilt dann auch ebenso für seine Masse und seinen Impuls:'."\n"))),
                  array( 'text', array( Shape  => 'conclusion', text => array(
                        'Die Quantisierung von Masse, Energie und Impuls entspricht in der Quanten-Fluss-Theorie dem Aufbau der Elementarteilchen aus einzelnen Wirkungsquanten;'."\n".
                        'der Messvorgang der Zählung der Wirkungsquanten eines Strings.'."\n".
                        'Die \\jump[][000AC4]{OM:FrQFT:HeisenbergUnschaerfe}{Heisenbergsche Unschärferelation}'."\n".
                        'ergibt sich dabei aus einem prinzipiellen Abzählproblem.'."\n"))),
                  array( 'text', array( text => array(
                    'Die Abstrahlung der Wirkungsquanten eines Elementarteilchen-Strings ist dabei eng mit der Entstehung der \\jump{OM:FrQFT:Quantengravitation}{Quantengravitation}'."\n".
                    'verbunden.'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Elementarteilchen'),
                      array(  jump_name => '*Wirkungsquanten-Herlei'),
                      array(  jump_name => 'OM:FrQFT:HeisenbergUnschaerfe'),
                      array(  jump_name => 'OM:FrQFT:Quantengravitation'),
                    )),
              )
          ); ?>

          
		    	<!  • Gravitation:  >
		    	<!    • Wirkungsquanten verlinken  >
		    	<!    • Fußnote zur Herleitung im Manuskript, auch für die Grafik. Ebenso zum Wiki von Standarmodell der Teilchenphysik, Quantenmechanik und Allgemeinen Relativitätstheorie  >
		    	<!    • Elementarteilchenmodell in der FrQFT, Link dort hin  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Quantengravitation',
              'Wirkungsquanten haben Beugungseffekte in ihrem Umfeld', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Masse-Impuls-Energie', type => 'back'),
                    )),
                      
                  array( 'text', array( text => array(
                    'Die Wirkungsquanten eines Leptonen-Strings senden auf ihrer Größenskala Störungswellen in den Raum,'."\n".
                    'welche die Bahnen der Wirkungsquanten von Strings in ihrem Umfeld zu ihnen hin beugen.'."\n".
                    'Die benachbarten Strings wandern so minimal aufeinander zu.'."\n".
                    'Sind viele Strings zu einer großen Masse vereint, so summiert sich dieser Effekt auf.'."\n".
                    'Seine Wirkung ist genau proportional zur Anzahl der Wirkungsquanten der Masse, wie auf der Seite \\jump{OM:FrQFT:Quantengravitation}{\\italic{Quantengravitation}}'."\n".
                    'erklärt wird.'."\n"))),
                      
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:FrQFT:Quantengravitation'),
                      //array(  jump_name => 'OM:FrQFT:Gravitation'),
                      //array(  jump_name => 'OM:FrQFT:Dunkle-Materie'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Spins'),
                    )),
              )
          ); ?>


          <!  • Spins  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Spins',
              'Drei Spins bestimmen die Struktur und Erhaltungssätze der Leptonen', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Quantengravitation', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '(• Die Entwicklung aller Formeln zum Lepton in einem Anhangskapitel unterbringen …)',
                    '(• In der Heim-Theorie gibt es Hinweise darauf, wie der Isospin strukturell entsteht und wie sich seine Werte ergeben. Siehe Ordner "Isospin, Spin - Burkhard Heim - Das neue Weltbild des Physikers - cd2v4-07".)',
                    ))),
                    
                  array( 'text', array( text => array(
                    'Die drei unterschiedlichen Spins der Leptonen sind (siehe \\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton}):'."\n"))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'der bekannte, äußere Spin um das Zentrum (den „Schwerpunkt“), entlang der \\color{0000D0}{blauen Spin-Bahn}',
                        'der innere Spin um die Spin-Bahn entlang der \\color{00D000}{grünen Lichtbahn}',
                        'der \\color{*Entwick}{Wirkungsquanten}-Spin um die Lichtbahn',
                    ))),
                  array( 'text', array( text => array(
                    'Alle Spins sind von Masse und Ladung unabhängig.'."\n".
                    'Sowohl der äußere Spin, als auch der Wirkungsquanten-Spin besitzen den von Leptonen bekannten Wert:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Lep', equ_list => array(
                      array( display => 'on',  latex => '{  s_{lep}  =  \frac{1}{2} \hbar  }',
                                               label_name => 'Equ-5.10', label_text => '5.10',
                                               footnote => 'Vgl. \\cite{wiki:Lepton2013}. \\\\ Vgl. \\cite{Huss:GFTv7.381j2012}, Kap. 5.2.1 Leptonen, S. 89-100, hier S. 92.'),
                      array( display => 'on',  latex => '{  s_{lep,wq}  =  1 \hbar  }',
                                               label_name => 'Equ-5.69', label_text => '5.69',
                                               footnote => '\\color{*Bearb}{Im nachfolgenden Verweis wird der Spin aufgrund eines Irrtums noch auf \\term{½ℏ} berechnet. Die aktuelle Berechnung ist aber noch nicht im Netz veröffentlicht. Es soll hier ein separatee Kapitel mit den Berechnungen erstellt werden: \\\\ Vgl. '.(Sc_f_litera_cite_html( 'Huss:GFTv7.381j2012')).', Kap. 5.2.1 Leptonen, S. 89-100, hier S. 96. Dort wird '.(Sc_f_term_str( 's<sub>lep,wq</sub>')).' noch als '.(Sc_f_term_str( 's<sub>lep,gr</sub>')).' bezeichnet.}',
                                               footnote_num_color => '*Bearb'),
                    ))),
                  array( 'text', array( text => array(
                    'Der innere Spin charakterisiert das Teilchen und sein Wert entspricht seiner wellenförmigen Phase wie folgt:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Lep', equ_list => array(
                      array( display => 'on',  latex => '{  s_{lep,innen}  =  \Bigl( 1 - \frac{ 1 }{ 2 \cdot n_{phase} } \Bigr) \cdot \hbar  }',
                                               label_name => 'Equ-5.37', label_text => '5.37',
                                               footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'Huss:GFTv7.381j2012')).', Kap. 5.2.1 Leptonen, S. 89-100, hier S. 94. Dort wird '.(Sc_f_term_str( 'n<sub>phase</sub>')).' noch als '.(Sc_f_term_str( 'n<sub>pol</sub>')).' bezeichnet.'),
                    ))),
                  array( 'text', array( text => array(
                    'Es gibt in der Natur eine fundamentale Asymmetrie:'."\n"))),
                  array( 'text', array( Shape  => 'conclusion', text => array(
                        'Ich vermute, dass die drei Spins in einem Teilchen die Hierarchie äußerer Spin, innerer Spin und Wirkungsquanten-Spin'."\n".
                        'besitzen und fest zueinander ausgerichtet sind.'."\n".
                        'Die feste Ausrichtung ergibt sich, weil sich nach den Beobachtungen ein Teilchen mit seinem \\jump[][000AC4]{OM:FrQFT:Lepton:Antiteilchen}{Antiteilchen}'."\n".
                        'immer in einer Paarvernichtung vernichten kann.'."\n".
                        'Dies ist nur möglich, wenn alle Spins des Antiteilchens immer genau entgegengesetzt zu denen des Teilchens sind.'."\n"))),
                  array( 'text', array( text => array(
                    'Wie genau diese Spins fest zueinander ausgerichtet sind, das meint jeweils zur darüber liegenden Hierarchieebene links oder rechts herum, ist noch zu klären.'."\n"))),
                  array( 'text', array( Shape  => 'conclusion', text => array(
                        'Ich vermute, dass die sich aus der festen Ausrichtung der Spins ergebende Asymmetrie der Urpsrung für die Asymmetrie der'."\n".
                        '\\jump[][000AC4]{OM:FrQFT:Lepton:Schwache-Ladung}{schwachen Wechselwirkung} ist.'."\n"))),
                      
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:FrQFT:Lepton:Antiteilchen'),
                      //array(  jump_name => 'OM:FrQFT:Lepton:Schwache-Ladung'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Radius'),
                    )),
              )
          ); ?>

          
		    	<!  • Radius  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Radius',
              'Aufgrund der Struktur des Strings und deren elektroschwachen Felder erscheinen Leptonen nahezu Punktförmig', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Spins', type => 'back'),
                    )),
                      
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{Den Text überarbeiten, er ist etwas komisch und unklar. Die punktförmige Wahrnehmung der Teilchen besser herausarbeiten. Vielleicht das Kapitel in Radien umbenennen …}'."\n"))),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{Die Entwicklung aller Formeln zum Lepton in einem Anhangskapitel unterbringen …}'."\n"))),
                  array( 'text', array( text => array(
                    'Die rot gefärbten Wirkungsquanten zweier an einer Reaktion beteiligten Elementarteilchen beeinflussen sich im wesentlichen nur'."\n".
                    'über die Felder, welche sie durch die Struktur ihrer Strings im Raum erzeugen.'."\n".
                    'Eine direkte Wechselwirkung zwischen ihren Wirkungsquanten findet aufgrund deren geringen Größe und'."\n".
                    'mangels deren relativ direkten Zusammentreffens kaum statt. \\\\'."\n".
                    'Die durch die elektrisch polarisierten Stellen ihres Strings und deren Bewegung erzeugten \\jump{OM:FrQFT:Lepton:Schwache-Ladung}{elektroschwachen Felder}'."\n".
                    'sind bis ins Zentrum ihres \\jump{OM:FrQFT:Lepton:Spins}{Spins} punktförmig strukturiert (siehe \\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton}).'."\n".
                    'Da die diesen Feldern entsprechende elektroschwache Wechselwirkung die beobachteten Reaktionen dominiert, erscheinen die Leptonen punktförmig,'."\n".
                    'obwohl ihr String in Bezug auf die Strukturen der Quantenmechanik eine durchaus relevante Größe besitzt.'."\n"))),
                  array( 'text', array( text => array(
                    'Die Formel des Spin-Radius lautet:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Lep', equ_list => array(
                      array( display => 'on',  latex => '{  r_{spin}  =  \sqrt{ \frac{ n_{phase} }{ 2 } } \cdot \frac{ \hbar }{ m_{lep} \cdot c_{0} }  }',
                                               label_name => 'Equ-5.41', label_text => '5.41',
                                               footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'Huss:GFTv7.381j2012')).', Kap. 5.2.1 Leptonen, S. 89-100, hier S. 94. Dort wird '.(Sc_f_term_str( 'n<sub>phase</sub>')).' noch als '.(Sc_f_term_str( 'n<sub>pol</sub>')).' bezeichnet.'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Spin-Durchmesser eines ruhenden Elektrons, mit hypothetischen sechs Phasen, hätte dann die Größe:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'Lep', equ_list => array(
                      array( display => 'on',  latex => '{  n_{phase}  :=  6  }'),
                      array( display => 'on',  latex => '{  m_{e}  =  9.109 382 91 (40) \cdot 10^{-31} \;\; kg  }',
                                               footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'NIST:CODATAElectrMas2011')).'.'),
                      array( display => 'on',  latex => '{  \hbar  =  1.054 571 726 (47)  \cdot  10^{-34} \;\; \frac{kg \; m^{2}}{s}  }',
                                               footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'NIST:CODATAPlanck2Pi2011')).'.'),
                      array( display => 'on',  latex => '{  c_{0}  =  299 792 458 (0) \;\; \frac{m}{s}  }',
                                               footnote => 'Vgl. '.(Sc_f_litera_cite_html( 'NIST:CODATASpeedLightVac2011')).'.'),
                      array( display => 'on',  latex => '{  \Rightarrow  r_{spin}  \approx  6.688 \cdot 10^{-13} \; m  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hierbei handelt es sich um den mittleren Radius der Wirkungsquanten um den Schwerpunkt des Leptons (\\color{0000D0}{blaue Spin-Bahn}). \\\\'."\n".
                    'Eine dem nahe kommende, strukturelle Ausdehnung findet sich in \\italic{The Apparent Mystery of the Electron}\\footnote{Vgl. \\cite{Giese:TheAppMystOfElectron2012}, Kap. 2.2.1 The Basic Calculation, S. 2-3, hier S. 3.}'."\n".
                    'des Basisteilchenmodells von Albrecht Giese.'."\n"))),
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Schwache-Ladung'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Spins'),
                    )),
              )
          ); ?>

          
		    	<!  • Antiteilchen:  >
		    	<!    • XXX.  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Antiteilchen',
              'Aus Teilchen kann man nicht durch Drehung oder Spiegelung Antiteilchen machen', 'Sc_f_Paragraph',
                array(
                  /* #!!!: Wichtige Denkanregung zur Antimaterie !!!
                   
                  // #: Es gibt offenbar im Prinzip und rein strukturell so etwas wie positive Elektronen im Modell !!!
                  //      Denn die Ladung kann einfach dadurch umgekehrt werden, dass die dichten Stellen auf dem String mit den weniger dichten vertauscht werden.
                  //      In Bezug auf ein Hadron kann dies zum Beispiel von einem Quark zum nächsten dadurch geschehen, dass der Eintritt der dichten Stellen in ein Quark
                  //      sich um eine halbe Phase verschiebt.
                  // #: Die Teilchen-Antiteilchen Frage ist also keine nach der Ladung! Denn die ist eh im Kosmos ausgeglichen. Es ist eine Frage der Relation der Spins.
                  // #: Nun könnten wir auf die Idee kommen, dass die Relationen der Spins, die zu Antiteilchen passen, im Proton und in den Neutronen stecken.
                  //      Und/oder sie stecken in den Neutrinos? Und weil diese so schwer mit anderer Materie reagieren und überall durch die Gegend fliegen,
                  //      können sich deren Antiteilchen-Spin-Relationen nicht mit normaler Materie reintegrieren und halten diese dadurch am Leben?
                  //      Wenn ich den Betazerfall richtig deute (siehe Wikipedia, Proton), dann haben wir es dort ja mit einem Antineutrino zu tun.
                  //      In der Sonne entstehen allerdings Neutrinos in riesigem Ausmaß (siehe Wikipedia, Neutrino).
                   
                  array( 'text', array( text => array(
                  '\\condb{Antimaterie} \\\\'."\n".
                    'Damit kommen wir anscheinend auch dem Rätsel der Antimaterie ein Stück näher auf die Schliche:'."\n",
                      'Wenn nämlich das \\term{u}-Quark tatsächlich so etwas wie ein \\term{⅔} Positron ist, wie eben gerade vermutet, dann haben wir es mit einem \\term{⅔} Antiteilchen zu tun.'."\n".
                    'Wohingegen das \\term{d}-Quark, als \\term{⅓} Elektron, in diesem Sinn kein Antiteilchen ist.'."\n",
                      'Bekannterweise gleichen sich die Ladungen der Elektronen und Protonen im Kosmos ja aus.'."\n".
                    'Aber wie ist das dann mit der Teilchen-Antiteilchen-Anzahl oder dem Teilchen-Antiteilchen-Wert aus dieser Perspektive?'."\n",
                      'Demnach sind im Proton (\\term{2d + u}) \\term{⅔ + ⅔ = 1 + ⅓} Antiteilchen und \\term{⅓} Teilchen.'."\n".
                    'Im Elektron steckt hingegen \\term{1} Teilchen.'."\n".
                    'Zusammen sind das \\term{1 + ⅓} Antiteilchen und \\term{1 + ⅓} Teilchen.'."\n".
                    'Das Verhältnis ist also ausgeglichen.'."\n",
                      'Dies würde bedeuten, dass die fehlenden Antiteilchen tatsächlich im Proton stecken könnten.'."\n",
                      'Es gibt jedoch eine Überraschung, was den entsprechenden Teilchen-Antiteilchen-Wert beliebiger Elementarteilchen betrifft:'."\n",
                      'Ein Neutron (\\term{d + 2u}) wäre hiernach neutral, also weder Teilchen noch Antiteilchen.'."\n".
                    'Strukturell hätte das Neutron trotzdem ein Antiteilchen, das andersherum neutral ist, nämlich das Anti-Neutron (\\term{2(-d) + (-u)}) mit entsprechenden Anti-Quarks.'."\n".
                    'Der so gefundene Teilchen-Antiteilchen-Wert hat also keine beliebige Bedeutung dafür, ob ein Teilchen ein Antiteilchen ist, denn er drückt nur seine Ladungszahl aus.'."\n",
                    'XXX'."\n",
                    'XXX Betazerfall?'."\n".
                    'XXX'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Ich stelle fest:'."\n".
                      'Nach meinem eigenen Schema – siehe \\jumpname{OM:FrQFT:ElektroschwacheWW:Symbolismus} – kann ein \\term{u}-Quark nicht quasi \\term{⅔} eines Positrons sein!!!!'."\n",
                        'Daraus folgt aber auch, dass es in meinem Modell im Grunde auch ein positiv geladenenes Elektron geben könnte!!!'."\n"))),*/
 
                  array( 'text', array( text => array(
                    'Das wesentliche Merkmal von elektrisch geladenen Antiteilchen besteht in ihrer entgegengesetzten Ladung.'."\n".
                    'Bezogen auf die Erläuterungen zur \\jump{OM:FrQFT:Lepton:Elektrische-Ladung}{elektrischen Ladung} sind die Pole der maximalen und minimalen Dichte der in'."\n".
                    '\\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton} rot gefärbten \\color{*Entwick}{Wirkungsquanten} vertauscht.'."\n".
                    'Der \\jump[][00D000]{OM:FrQFT:Lepton:Spins}{innere} sowie der \\jump[][*Entwick]{OM:FrQFT:Lepton:Spins}{Wirkungsquanten-Spin}'."\n".
                    'eines Teilchens sind bei seinem Antiteilchen in Bezug auf seinen normalen, \\jump[][0000D0]{OM:FrQFT:Lepton:Spins}{äußeren Spin} genau \\jump{OM:FrQFT:ElektroschwacheWW:Symbolismus}{umgekehrt orientiert}.'."\n".
                    'Oder die zuletzt genannten Spins bleiben gleich im Raum ausgerichtet und der normale, äußere Spin ist umgekehrt.'."\n"))),
                  array( 'text', array( Shape  => 'conclusion', text => array(
                        'Ich folgere, dass es keine einfache Drehung oder Spiegelung im Raum gibt, welche aus einem Teilchen sein Antiteilchen machen könnte oder umgekehrt.'."\n"))),
                  array( 'text', array( text => array(
                    'Anti-Neutrinos gleichen also nicht den entsprechenden \\jump{OM:FrQFT:Lepton:Neutrinos}{Neutrinos}.'."\n".
                    'Ihre entgegengesetzt verteilten elektrischen Pole würden in der Tat keinen Unterschied machen.'."\n".
                    'Da aber ein Teil ihrer Spins, wie eben erläutert, entgegengesetzt ausgerichtet ist, können beide Teilchen nicht gleich sein.'."\n"))),
                  array( 'text', array( text => array(
                    'Dabei ist im Rahmen der Quanten-Fluss-Theorie übrigens zu beachten, dass die heutigen Anti-Neutrinos zu den Teilchen und die Neutrinos zu den Antiteilchen zu zählen sind.'."\n".
                    'Dies ergibt sich aus den beobachteten \\jump{OM:FrQFT:ElektroschwacheWW:Teilchenumwandlungen}{Teilchenumwandlungen}.'."\n"))),
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Elektrische-Ladung'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Spins'),
                      array(  jump_name => 'OM:FrQFT:ElektroschwacheWW:Symbolismus'),
                      array(  jump_name => 'OM:FrQFT:ElektroschwacheWW:Teilchenumwandlungen'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Neutrinos'),
                    )),
              )
          ); ?>

          
		    	<!  • Neutrinos:  >
		    	<!    • Einen Film erstellen.  >
		    	<!    • Darauf hinweisen, dass in  der FrQFT die Neutrinos zu den Antiteilchen und die Anti-Neutrinos zu den Teilchen zählen.  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Neutrinos',
              'Das neue Modell offenbart, dass sie sich von ihren Antiteilchen unterscheiden', 'Sc_f_Paragraph',
                array(
                      
                  /*array( 'figure',
                    array( fig_file_name => 'Lepton_neutral_v09', fig_alt_description => 'Elektrisch neutrales Lepton', width => '700px', height => '292px', name => 'OM:FrQFT:Lepton:Elektrisch-neutrales-Lepton',
                           text => 'Die Grafik zeigt die Struktur eines elektrisch geladenen Leptons mit hypothetischer Phasenzahl \\term{n_{phase} = n_{wel} / n_{polwel} = 12/2 = 6}.'."\n".
                                   'Die Wirkungsquanten eines Wirkungsquanten-Strings mit wechselnder Wirkungsquanten-Dichte bewegen sich auf einer doppelt geschachtelten, helixförmigen'."\n".
                                   'Spiralbahn um ein gemeinsames Rotationszentrum.'."\n".
                                   'In der gezeigten Struktur blinkt das Lepton mit der De-Broglie-Frequenz in einem Wechsel zwischen einer positiven'."\n".
                                   'und einer gleich großen negativen Polarisation und ist damit ohne elektrische Ladung.'."\n".
                                   'Aus weitem Blickwinkel erscheint das Lepton im Mittel vornehmlich elektrisch neutral, während von nahem die differenzierte'."\n".
                                   'Polarisation in ihrer zeitlichen Dynamik die elektroschwache Wechselwirkung erzeugt.'."\n".
                                   'Der Normradius \\term{r_{0}} ist dabei die Bezugseinheit mit \\term{r_{0} = ℏ / (m_{lep} ⋅ c_{0})}.')),*/
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_LeptonENeutral, array( name => 'OM:FrQFT:Lepton:Elektrisch-neutrales-Lepton'))),
                      
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{Einen Film erstellen …}'."\n"))),
                  array( 'text', array( text => array(
                    'Die Neutrinos\\footnote{\\const{FrQFT_g_footnote_text_Neutrinos}} sind \\jump{OM:FrQFT:Lepton:Elektrische-Ladung}{elektrisch ungeladene} Leptonen.'."\n".
                    'Sie haben eine Struktur, die auch aus sich bewegenden elektrischen Polen besteht, die aber im Mittel elektrisch neutral ist.'."\n".
                    'Aufgrund der asymmetrischen Verteilung und Bewegung der Pole ist allerdings eine \\jump{OM:FrQFT:Lepton:Schwache-Ladung}{schwache Ladung} vorhanden.'."\n"))),
                  array( 'text', array( text => array(
                    'Neutrinos sind nicht gleich ihren Antiteilchen, weil sie sich in der \\jump{OM:FrQFT:ElektroschwacheWW:Symbolismus}{relativen Orientierung}'."\n".
                    'ihrer \\jump{OM:FrQFT:Lepton:Spins}{Spins} unterscheiden.'."\n"))),
                  array( 'text', array( text => array(
                    'Im Rahmen der Quanten-Fluss-Theorie ist zu beachten, dass die heutigen Anti-Neutrinos zu den Teilchen und die Neutrinos zu den Antiteilchen zu zählen sind.'."\n".
                    'Dies ergibt sich aus den beobachteten \\jump{OM:FrQFT:ElektroschwacheWW:Teilchenumwandlungen}{Teilchenumwandlungen}.'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:ElektroschwacheWW:Neutrinos'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Elektrische-Ladung'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Schwache-Ladung'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Antiteilchen'),
                      array(  jump_name => 'OM:FrQFT:ElektroschwacheWW:Teilchenumwandlungen'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Spins'),
                    )),
              )
          ); ?>

          
		    	<!  • Familien und Generationen:  >
		    	<!    • Darauf hinweisen, dass in der FrQFT die Neutrinos zu den Antiteilchen und die Anti-Neutrinos zu den Teilchen zählen.  >
		    	<!    • Eventuell beschreiben, warum nur bestimmte Massen möglich sind.  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Familien-und-Generationen',
              'Alle Leptonen und sogar auch alle Quarks besitzen den gleichen inneren Spin', 'Sc_f_Paragraph',
                array(
                  array( 'text', array( text => array(
                    'Elektron, Myon und Tauon bilden die Familie der \\jump{OM:FrQFT:Lepton:Elektrische-Ladung}{elektrisch geladenen Leptonen} und stehen für verschiedene Generationen der'."\n".
                    'gleichen Wirkungsquanten-String-Struktur.'."\n".
                    'Diese Struktur schwingt elektrisch zwischen einen starken elektrischen Hauptpol und einem entgegengesetzten schwachen Nebenpol.'."\n".
                    'So ergibt sich im Mittel der beobachtete elektrische Ladungspol (siehe \\jumpname{OM:FrQFT:Lepton:Vortext:Ani-Lepton} und Abbildung \\color{*Bearb}{XXX}).'."\n"))),
                  array( 'text', array( text => array(
                    'Die \\jump{OM:FrQFT:Lepton:Neutrinos}{Neutrino}-Generationen Elektron-, Myon- und Tauon-Neutrino bilden die Familie der \\jump{OM:FrQFT:Lepton:Elektrische-Ladung}{ungeladenen Leptonen}.'."\n".
                    'Auch diese Familie besitzt im Wesentlichen die gleiche Wirkungsquanten-String-Struktur, nur das in diesem Fall positive und negative elektrische Pole'."\n".
                    'gleichzeitig nach außen gerichtet sind (siehe Film \\color{*Bearb}{XXX} Abbildung \\color{*Bearb}{XXX}).'."\n".
                    'Diese Teilchen sind also im Durchschnitt elektrisch neutral, besitzen aber aufgrund der asymmetrischen Verteilung und Bewegung der inneren Pole eine'."\n".
                    '\\jump{OM:FrQFT:Lepton:Schwache-Ladung}{schwache Ladung}.'."\n"))),
                  array( 'text', array( text => array(
                    'Die Generationen der Leptonen unterscheiden sich nur durch ihre energetischen Anregungszustände.'."\n".
                    'Dies bedeutet, dass ihre Wirkungsquanten-Strings in Ruhe eine unterschiedliche Anzahl an Wirkungsquanten und damit an Energie beziehungsweise Masse beinhalten. \\\\'."\n".
                    'Die beobachteten \\jump{OM:FrQFT:ElektroschwacheWW:Teilchenumwandlungen}{Teilchenumwandlungen}'."\n".
                    'legen wegen der Erhaltung des inneren Spins\\color{*Bearb}{(Link)} nahe, dass alle Leptonen und sogar ebenfalls alle \\jump{OM:FrQFT:ElektroschwacheWW:Quarks}{Quarks}'."\n".
                    'den gleichen Betrag des \\jump{OM:FrQFT:Lepton:Spins}{inneren Spins} besitzen.'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Lepton:Elektrische-Ladung'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Neutrinos'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Schwache-Ladung'),
                      array(  jump_name => 'OM:FrQFT:ElektroschwacheWW:Teilchenumwandlungen'),
                      array(  jump_name => 'OM:FrQFT:ElektroschwacheWW:Quarks'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Spins'),
                    )),
              )
          ); ?>

          
		    	<!  • Quantenmechanik:  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Quantenmechanik',
              'Die quantemachanischen Phänomene ergeben sich aus der Struktur der Wirkungsquanten-Strings', 'Sc_f_Paragraph',
                array(
                  array( 'text', array( text => array(
                    'Die quantenmechanischen Eigenschaften der Wirkungsquanten-Strings der verschiedenen Elementarteilchen-Familien ergeben sich aus der Struktur ihrer'."\n".
                    'Strings und deren Dynamik.'."\n".
                    'Der Zufall kommt dabei über das „zufällige“ zeitliche und räumliche Zusammentreffen der Komponenten der schwingenden Feinstrucktur zweier oder mehrerer Strings zustande.'."\n".
                    'Dies kommt , weil jeder beteiligte String zur selben Zeit in einem unterschiedlichen Schwingungszustand ist.'."\n"))),
                  array( 'text', array( text => array(
                    'Die diskrete Körnigkeit in Form ihrer Wirkungsquanten führt, auf Basis eines \\jump{OM:FrQFT:HeisenbergUnschaerfe}{prinzipiellen Abzählproblems},'."\n".
                    'zur bekannten \\jump{OM:FrQFT:HeisenbergUnschaerfe}{Proportionalität von Energie und Frequenz},'."\n".
                    'ist aber auch für die Gültigkeit der \\jump{OM:FrQFT:HeisenbergUnschaerfe}{Heisenbergschen Unschäferelation}'."\n".
                    'verantwortlich. \\\\'."\n".
                    'Die \\jump{OM:FrQFT:Elementarteilchen:Welleneigenschaften-der-Elementarteilchen}{weiteren Phänomene der Quantenmechanik}'."\n".
                    'ergeben sich hingegen aus den unterschiedlichen, \\jump{OM:FrQFT:Lepton:Elektrische-Ladung}{schwingenden Polarisationen} der Wirkungsquanten-Strings.'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:HeisenbergUnschaerfe'),
                      array(  jump_name => 'OM:FrQFT:Elementarteilchen:Welleneigenschaften-der-Elementarteilchen'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Elektrische-Ladung'),
                      array(  jump_name => 'OM:FrQFT:Lepton:Schwache-Ladung'),
                    )),
              )
          ); ?>


		    	<!  • Welle-Teilchen-Dualismus  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Welle-Teilchen-Dualismus',
              'Wellen- und Teilchencharakter sind kein Widerspruch', 'Sc_f_Paragraph',
                array(
                      
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(Beides soll zusammen gebracht worden sein, siehe \\cite{Coles:EquivalenceOfWaveParticlEdualityToEntropicUncertainty2014} und Sekundärliteratur: \\cite{Lingenhoehl:IstDieQuantenphysikWenigerKompliziert2014} \\\\ In einem Artikel auf \\jump[http://www.quantumlah.org/highlight/141220_wave_particle.php]{}{http://www.quantumlah.org/highlight/141220_wave_particle.php} ist zu lesen: \\quote{›The connection between uncertainty and wave-particle duality comes out very naturally when you consider them as questions about what information you can gain about a system. Our result highlights the power of thinking about physics from the perspective of information,‹ says Wehner, who is now an Associate Professor at QuTech at the Delft University of Technology in the Netherlands.} \\\\ Ich hatte schon festgestellt, dass Photonen, also Zirkular polarisierte Elapsonen, Wellen- und Teilcheneigenschaften haben. Welleneigenschaften durch ihre Rotation und Wechselwirkung mit den Vakuum-Elapsonen und Teilcheneigenschaften, weil sie ein zusammen hängendes Gebilde sind.)}'."\n"))),
                      
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{In Arbeit… \\\\'."\n".
                    'Das Folgende in die Seiten Welleneigenschaften der Elementarteichen und Vakuum einarbeiten.}'."\n"))),
                  array( 'text', array( text => array(
                    'In der heutigen Physik kommt die Interpretation der Quantenmechanik im Allgemeinen zu dem Schluss, der Wellen- und der Teilchecharakter der'."\n".
                    'Elementarteilchen stünden im Widerspruch.'."\n".
                    'Man meint, diese Sicht entspräche der \\jump{OM:FrQFT:HeisenbergUnschaerfe}{Heisenbergschen Unschärferelation},'."\n".
                    'weil nach ihr \quote{Ort und Impuls […] nicht gleichzeitig beliebig exakt bekannt sein}\\footnote{\\cite{Wilczek:DasRaetselhafteElektron2013}.}'."\n".
                    'können. \\\\'."\n".
                    'Nach der Quanten-Fluss-Theorie entspricht die Heisenbergsche Unschärferelation allerdings einem'."\n".
                    '\\jump{OM:FrQFT:HeisenbergUnschaerfe}{prinzipiellen Abzählproblem}'."\n".
                    'der Wirkungsquanten des Wirkungsquanten-Strings eines Elementarteilchens; also einer Wahrnehmungsgrenze.'."\n".
                    'Der scheinbar existenzielle Widerspruch muss folglich nicht in der heute interpretierten Form bestehen bleiben.'."\n"))),
                  array( 'text', array( text => array(
                    'Die Quanten-Fluss-Theorie sieht ein Elementarteilchen grob gesprochen als „Wolke“ aus gekoppelten Wirkungsquanten.'."\n".
                    'Diese kann im Raum „verschmiert“ sein, indem die Wirkungsquanten des \\jump{OM:FrQFT:Vakuum}{Vakuums} durch ihr emergentes Verhalten die Wolke'."\n".
                    'eines virtuellen Elementarteilchens implizieren.\\footnote[*Bearb]{Auch in der Stringtheorie können Strings durch emergentes Verhalten andere Strings implizieren. Vgl. \\color{*Bearb}{Brian Green heraussuchen}.}'."\n".
                    'Seine Eigenschaften sind dann im Raum verteilt. \\\\'."\n".
                    'Ein nicht virtuelles, konkretes Elementarteilchen besteht aus einem Wirkungsquanten-String, welcher von einer Wolke aus virtuellen Teilchen umgeben ist.'."\n".
                    'Es ist also recht klar durch die Kopplung seiner Wirkungsquanten und seine Rotation (\jump{OM:FrQFT:Lepton:Spins}{Spin}) auf einen Schwerpunkt konzentriert.'."\n".
                    'Dabei bringen seine Wirkungsquanten selbst und seine inneren Rotationen die Welleneigenschaften hervor. \\\\'."\n".
                    'Der Übergang vom virtuellen zum konkreten Elementarteilchen und umgekehrt wird durch die Wechselwirkung mit anderen Elementarteilchen vollzogen.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
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
                  array( 'text', array( text => array(
                    'Häufig wird argumentiert, dass der Wellen- und der Teilchencharakter von Elementarteilchen im Widerspruch wären.'."\n".
                    'Im Grunde trägt aber jeder rotierende Körper den Charakter einer Welle, in Form seiner Rotation, und den eines'."\n".
                    'Teilchens, in Form der Rotationsachse und seines Schwerpunkts, in sich. \\\\'."\n".
                    'Bei der rotierenden Erde ist der Wellencharakter von außen kaum zu erkennen, da sich für einen Beobachter'."\n".
                    'vornehmlich nur die Farbe ihrer Oberfläche ändert.'."\n".
                    'Befindet man sich auf ihrer Oberfläche, so nimmt man ihre Rotation durch die Tag- und Nachtwechsel und die Bewegung'."\n".
                    'der Sterne schon viel eher wahr.'."\n"))),
                  array( 'text', array( text => array(
                    'Befinden sich alledings wesentliche Strukturen eines Teilchens oder Körpers in Rotation, vielleicht sogar um mehrere'."\n".
                    'Achsen, wie beim Leptonen-Modell die \\jump{OM:FrQFT:Lepton:Elektrische-Ladung}{elektrische Polarisation}, dann kommt der Wellencharakter viel deutlicher zum Vorschein.'."\n"))),
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:FrQFT:Elementarteilchen:Welleneigenschaften-der-Elementarteilchen'),
                      array(  jump_name => 'OM:FrQFT:HeisenbergUnschaerfe'),
                    )),
              )
          ); ?>

          
		    	<!  • Berechnungen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:Lepton:Berechnungen',
              'XXX', 'Sc_f_Paragraph',
                array(
                      
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{(• Landé-Faktor/Feinstrukturkonstante: Giese berechnet den Landé-Faktor mit sehr guter Genauigkeit aus seinem Basisteilchenmodell (siehe \\cite{Giese:TheAppMystOfElectron2012}, Appendix B: The Landé factor.) Soll sich der Landé-Faktor aus der FrQFT ebenso ergeben, dann müssen auch hier immer die zwei gegenüber liegenden Elektronen-String-Segmente einander in ihrer Polarisation addieren. So wie es auch bei der Gravitation geschieht, weil sich die Abstrahlung mit \\term{1/r} in den Raum ausbreitet. Seine Herleitung enthält allerdings noch Annahmen, die ich so vielleicht nicht treffen würde. Denn bei ihm wirkt die Kraft (welche ist das genau? String-Spannung oder EM-Polarisation?) eines Basisteilchens nicht nur senkrecht zu seiner Bahn. Ich muss also erst einmal sehen, was die Herleitung der Abflachung der Felder bei mir ergibt! Das elektrische Potential würde zu \\term{1/r} passen (vgl. \\jump[http://de.wikipedia.org/wiki/Elektrisches_Potential]{}{http://de.wikipedia.org/wiki/Elektrisches_Potential}).)}'."\n"))),
                      
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
                      
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:FrQFT:XXX'),
                    )),
              )
          ); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
