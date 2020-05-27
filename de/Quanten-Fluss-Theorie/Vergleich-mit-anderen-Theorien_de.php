<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/FrQFT.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:FrQFT:Vergleich'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:FrQFT:Basisteilchenmodell'); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
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
                      array(  jump_name => 'OM:FrQFT:Vergleich:Spezielle-Relativitaetstheorie'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Spezielle Relativitätstheorie  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Vergleich:Spezielle-Relativitaetstheorie',
              'Eine entscheidende Abänderung und eine andere Erweiterung der Speziellen Relativitätstheorie als die Allgemeine Relativitätstheorie es ist', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Vergleich', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'vis', text => array(
                    '(• XXX)',
                    ))),
                      
                  array( 'text', array( text => array(
                    // • '\\color{*Bearb}{(Darauf hinweisen, dass es sich hier um eine Vereinfachung der SRT und ART auf ein Bezugssystem handelt, zu dem LG konstant gilt. Dies hat zur Folge, dass überall Gleichzeitigkeit definiert ist.\\footnote[*Bearb]{Vgl. \\cite{Kiefer:WegZurQG2012}, hier S. 37. \\\\ Vgl. \\cite{Callender:ZeitIllusion2010}, hier S. 34. \\\\ Vgl. \\cite{Albert:VerschraenkungEinstein2009}, hier S. 36. \\\\ Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 15 Die Physik nach der Stringtheorie, S. 322-347, hier S. 327. \\\\ Vgl. \\cite{Weiss:AltToSpeedOfLight2006}, Kap. IV. Medium transformation, S. 10-12, hier A. Properties of medium transformation, 3. Simultaneity, S. 12. \\\\ \\color{*Bearb}{Vgl. \\cite{Selleri:EinsteinLorentz1998}, lesen ab S. 145 und ab S. 198.}}'."\n".
                    //   'Nach Occams Rasiermesser ist im Zweifelsfall die einfachere Theorie zu wählen. Dies SRT kann also nur gewählt werden, wenn kein entsprechendes Bezugssystem bekannt ist. Dann hat man das Fehlen von Gleichzeitigkeit in Kauf zu nehmen.)}'."\n"),
          /*To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'normal',
                    '\\color{*Bearb}{In Arbeit …}'."\n"),
                  array( 'normal',
                    '\\color{*Bearb}{• Die Lichtuhr als Grundlage.}'."\n"),
                  array( 'normal',
                    'In der Speziellen Relativitätstheorie\\color{*Bearb}{(Link)}\\footnote{\\const{FrQFT_g_footnote_text_SRT}} von Albert Einstein wird Zeit auf'."\n".
                    'Basis der konstanten Lichtgeschwindigkeit definiert.'."\n".
                    'Einsteins Gedankenexperiment einer Lichtuhr ist dabei ein anschauliches Bild dafür, wie die Bewegung des Lichts im Raum'."\n".
                    'den Zeittackt festlegt.'."\n".
                    'Eine Lichtuhr besteht danach aus zwei Spiegeln zwischen denen ein Lichtstrahl hin und her reflektiert wird \\color{*Bearb}{(siehe Bild?)}.\\color{*Bearb}{(Verweis)}'."\n".
                    'Aufgrund seiner konstanten Geschwindigkeit im Raum entspricht die Dauer des Hin- und Rückwegs des Lichtstrahls einem Zeittackt und mit immer gleichem Zeitinterval.'."\n".
                    'Durch das Zählen dieses Tackts kann man die Zeit messen.'."\n"),
                  array( 'normal',
                    'Wenn sich nun eine von einem Beobachter angeschaute Uhr senkrecht zur Richtung ihrem Lichtweg bewegt, ergibt sich folgendes Szenarion:'."\n".
                    'Für den Beobachter bewegt sich das Licht zwischen den Spiegeln der Lichtuhr jetzt im Zickzack, da die Uhr sich zwischen den Augenblicken der Reflexion'."\n".
                    'ja weiter bewegt hat\\color{*Bearb}{(siehe Bild?)}.'."\n".
                    'Da der Zickzackweg zwischen den Spiegeln länger ist, als wenn der Weg genau senkrecht zu den Spiegeln verläuft, geht der Tackt der bewegten Uhr für den'."\n".
                    'Beobachter langsamer.'."\n".
                    'Dies gilt für jeden Beobachter, für den sich das Licht in jede Richtung zu ihm gleich schnell bewegt.'."\n".
                    'Und genau wie eine Lichtuhr verhalten sich auch Elementarteilchen mit Ruhemasse\\color{*Bearb}{(Verweis)}.'."\n"),
                  array( 'normal',
                    '\\color{*Bearb}{• Die Schwäche der Speziellen Relativitätstheorie – scheinbarer Widerspruch von Zeit und innerer Frequenz.}'."\n"),
                  array( 'normal',
                    'So weit, so gut. Aber zum Ansatz einer „neuen“ Physik bedarf es natürlich etwas mehr.'."\n".
                    'Denn der Knackpunkt besteht darin, dass die Spezielle Relativitätstheorie nicht in der Lage ist, die innere Schwingung der Elementarteilchen zu beschreiben'."\n".
                    '– ihre innere Frequenz.'."\n".
                    'Wenn die Energie eines Elementarteilchens durch seine Bewegung oder durch seine Annäherung an eine gravitative Masse steigt, wird seine Frequenz schneller.'."\n".
                    'Seine Zeit läuft hingegen langsamer.'."\n".
                    'Dies erscheint zunächst als widersprüchlich, denn man würde erwarten, dass bei langsamer laufender Zeit eines Elementarteilchen s auch seine die innere Frequenz'."\n".
                    'in Zeitlupe verläuft.'."\n".
                    'Doch die Frequenz scheint anderer Natur als die Zeit zu sein. \\\\'."\n".
                    'Der eben erklärte Knackpunkt ist der Kern des \\jump{OM:FrQFT:NeuePhysik:Problem-der-Zeit}{›Problems der Zeit‹}.'."\n".
                    'Seine Lösung ist der Ansatz der Quanten-Fluss-Theorie und seine Formeln werden nachfolgend entwickelt.'."\n"),
                  array( 'normal',
                    '\\color{*Bearb}{• Grundlegende Entdeckung bei der Analyse des Zusammenhang zwischen Zeit und innerer Frequenz – die konstante Wirkungsquantengeschwindigkeit.}'."\n"),
                  array( 'normal',
                    'Beschäftigt man sich mit dem Zusammenhang zwischen Zeit und innerer Frequenz, stößt man auf eine universelle Struktur der Elementarteilchen  und des Vakuums.'."\n".
                    'Eine neue konstante Geschwindigkeit von neuen Fundamentalteilchen kommt zum Vorschein, welche eng mit der Lichtgeschwindigkeitskonstanten verbunden ist.'."\n".
                    'Während die Lichtgeschwindigkeit im Gravitationsfeld – bezogen auf den dreidimensionalen Raum – von Ort zu Ort veränderlich ist,'."\n".
                    'kann die neue konstante Geschwindigkeit selbst unter diesem Umständen zunächst als gleichbleibend angesehen werden.'."\n"),
                  array( 'normal',
                    'Die Wirkungsquanten genannten Fundamentalteilchen bewegen sich mit dieser konstanten Geschwindigkeit auf einer helixförmigen Spiralbahn.'."\n".
                    'Dabei organisieren sie sich zu schwingenden Ketten oder Fäden – den sogenannten Strings –, wenn sie Elementarteilchen und das Vakuum bilden.'."\n".
                    'Die helixförmige Spiralbahn ihrer Bewegung verbindet dabei die oben beschriebene, variable Zeit mit der inneren Frequenz der Schwingungen der Elementarteilchen.'."\n".
                    'Das Vorwärtsschraben der Helixbahn entspricht dabei der variablen Zeit, während die Rotation der Helixbahn der Frqeuenz entspricht.'."\n"),
                  array( 'normal',
                    '\\color{*Bearb}{• Dies löst das ›Problems der Zeit‹.}'."\n"),
                  array( 'normal',
                    'Der scheinbare Widerspruch zwischen Zeit und Frequenz ist auf diese Weise aufgehoben.'."\n".
                    'Das \\jump{OM:FrQFT:NeuePhysik:Loesungsansatz}{›Problems der Zeit‹ ist gelöst}, weil die Strecke, welche die Wirkungsquanten auf ihrer'."\n".
                    'Spiralbahn zurück legen, eine Normaluhr in der Struktur des Raums installiert, welche für die Quantenmechanik unverzichtbar ist.'."\n".
                    'Die variable Geschwindigkeit der oben beschriebenen, variablen Zeit der Allgemeinen Relativitätstheorie entspricht dem Vorwärtschrauben – der Translation –'."\n".
                    'der helixförmigen Spiralbahn und ist hierdurch ebenfalls im Raum installiert.'."\n"),
                  array( 'normal',
                    '\\color{*Bearb}{• FrQFT als Modifakation der SRT.}'."\n"),
                  array( 'normal',
                    'Die Quanten-Fluss-Theorie verändert die Spezielle Relativitätstheorie zunächst auf einen absoluten Raum und erweitert sie durch die neue Struktur'."\n".
                    'zu einer Theorie, welche sowohl die wichtigen Eigenschaften der Quantenmechanik als auch die der Allgemeinen Relativitätstheorie beinhaltet.'."\n".
                    'Dies wird sich am Ende der Entwicklung dieses Ansatzes herausstellen.'."\n"),
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:FrQFT:XXX'),
                    )),
                  array( 'figure',
                    array_merge( $FrQFT_g_figure_ary_Elapson, array( name => 'OM:FrQFT:ZeitAlterungFrequenz:Fig-Elapson'))),
                )
          ); */
                    '(\\color{*Bearb}{siehe Lichtmediumtheorie?})'."\n".
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
                      array(  jump_name => 'OM:FrQFT:Vergleich:Stringtheorien'),
                    )),
              )
          ); ?>


		    	<!  • Stringtheorien  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Vergleich:Stringtheorien',
              'Ähnlich aber doch ganz anders', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Vergleich:Spezielle-Relativitaetstheorie', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'vis', text => array(
                    '(• Die Hypothese, dass Elementarteilchen aus anderen Teilchen aufgebaut sind gilt in der Stringtheorie so nicht. Es bleibt ein String. Allerdings hab ich gelesen, dass viele Strings sich so verhalten können, als wären sie ein einziger, neuer, mit anderen Eigenschaften.)',
                    '(• Die Stringtheorie erweitert das punktförmige Teilchenmodell der heutigen Physik auf ein eindimensionales, da es um Fäden geht. Doch der Querschnitt eines Fadens ist wieder ein Punkt und führt bei der Berechnung von Wechselwirkungen durch den möglichen Abstand Null abermals zu Singularitäten. \\color{*Entwick}{[Stimmt das so?]} \\\\ Die FrQFT ist da ganz anders, weil ihre Strings fraktal sind und nicht eindimensional. Ihnen kann sich Nichts beliebig dicht nähern, weil sie sich immer wieder in noch kleinere Strings auflösen und damit sich der Ort der nötigen Annäherung immer wieder räumlich verschiebt. Die Annäherung wird damit vermutlich endlos lang und letztlich unmöglich. Aber auch die Objekte, die sich annähern können, sind in jeder Richtung von ausgedehnter Struktur und fraktal. Auch deshalb können sie sich keinem Punkt beliebig nähern, weil undefiniert bleibt, was dies sein soll und wie dies geschehen könnte.)',
                    '(• Singularitäten werden im Prinzip überwunden … ?! Stimmt das wirklich? Denn auch ein solches String hat nicht in alle Richtungen eine Ausdehnung und deshalb können andere Strings sich ihm unendlich nähern! Oder nicht?)',
                    '(\\bold{Strings und ihre Freiheitsgrade:})',
                    '(• In der FrQFT schwingen die Wirkungsquanten-Strings immer in 3D, was die Freiheitsgrade der möglichen Schwingungen sehr einschränkt! Letztlich schwingen unterschiedliche Eigenschaften in Wirkungsquanten-Strings: Der String rotiert, er schwingt räumlich, seine unterschiedliche Dichte schwingt etc. …)',
                    '(• In den Stringtheorien werden den Strings soviele Freiheitsgrade möglich, dass konkrete Aussagen über ihre genauen Schwingungen unmöglich werden und eine gewisse Beliebigkeit Einzug hält! Über die Physik in unserem Universum kann daher kaum etwas gesagt werden und alles, was wir bei uns nicht beobachten, wird in andere Universen verbannt.)',
                    '(– In meinen Augen krankt zum Beispiel die Stringtheorie gerade an ihrem multidimensionalen Zugang. Denn dieser multidimensionale Zugang führt dazu, dass die Freiheitsgrade in ihr so groß werden, dass keine konkreten Aussagen mehr möglich sind. Denn jede weitere Dimension erschafft gegebenenfalls unabhängige Möglichkeiten der räumlichen und zeitlichen Veränderung eines Systems, die zur Beliebigkeit führen. Werden nicht Zusammenhänge zwischen den Veränderungsmöglichkeiten der verschiedenen Dimensionen gefunden und/oder definiert, dann geht auch der Zusammenhang verloren und alles wird in diesem Rahmen möglich.)',
                    '(– Auch die Falsifizierbarkeit geht so verloren, weil eine solche Theorie durch ihre Fülle an Freiheitsgraden immer wieder an die Beobachtungen angepasst werden kann.)',
                    '(– Die FrQFT besticht genau dadurch, dass die Zusammenhänge gegeben bleiben, weil alles in 3D plus einer grundlegenden Normalzeit stattfindet. Wichtige Eigenschaften der Multidimensionalität und der Relativität werden durch die Fraktalität übernommen.)',
                    '(\\bold{Überlichtgeschwindigkeit in der Stringtheorie:})',
                    '(• Wenn Photonen-Strings sich mit Lichtgeschwindigkeit bewegen und dann noch schwingen, dann bewegen sie sich mit Überlichtgeschwindigkeit! Dies ist ähnlich, wie in der FrQFT. Aber kann die Stringtheorie begründen, dass dies nicht der Relativitätstheorie widerspricht, wie die FrQFT dies kann?)',
                    '(\\bold{Warum die Stringtheorie nicht stimmen kann:})',
                    '(• Warum die Stringtheorie nicht stimmen kann. Siehe \\cite{Laughlin:AbschiedWeltformel2007}, S. 188.)',
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
                    'XXX'."\n"))),
                  array( 'text', array( text => array(
                    'Eine fraktale Stringtheorie in drei Raumdimensionen, auf fraktalen Zeit-Ebenen. \\\\'."\n".
                    'Die Stringtheorie funktioniert nur in zehn oder elf Dimensionen von denen eine die Zeit ist.'."\n".
                    'Die Quanten-Fluss-Theorie kennt nur drei Raumdimensionen, so wie wir es im Alltag beobachten.'."\n".
                    'Das Besondere besteht darin, dass die Zeit als Bewegung der Wirkungsquanten im Raum definiert ist.'."\n".
                    'Da jedes Wirkungsquant aus noch kleineren Mikro-Wirkungsquanten besteht, die sich auch bewegen und selber dadurch eine eigene Zeit'."\n".
                    'besitzen, gibt es verschiedene, gestaffelte Zeiten – die \\jump{OM:FrQFT:Zusammenfassung:Zeit-Ebenen}{Zeit-Ebenen}.'."\n"))),
                  array( 'text', array( text => array(
                    'Anders als in der Stringtheorie\\color{*Bearb}{(Verweis)} ist in der Quanten-Fluss-Theorie'."\n".
                    'die Allgemeine Relativitätstheorie von Einstein in etwas abgewandelter Form integraler Bestandteil.'."\n".
                    'Die Quanten-Fluss-Theorie ist \\hidden{\\jump{OM:FrQFT:Diskussion:Hintergrundunabhaengigkeit}}\\color{*Bearb}{Hintergrundunabhängig}.'."\n".
                    'In der Stringtheorie hingegen wird die Allgemeine Relativitätstheorie sozusagen &bdquo;künstlich&ldquo; als'."\n".
                    'Hintergrund implementiert, vor dem alles Geschehen stattfindet.\\color{*Bearb}{(Link, Verweis)}'."\n"))),
                  array( 'text', array( text => array(
                    'Durch den Aufbau eines Wirkungsquanten-Strings schwingen allerdings viele seiner Eigenschaften gleichzeitig, die alle auf der Bewegung seiner Struktur'."\n".
                    'in den uns bekannten drei Dimensionen beruhen.'."\n".
                    'Anders als in der Stringtheorie, stehen diese schwingenden Eigenschaften dadurch in enger Abhängigkeit zueinander.'."\n".
                    'Dies hat ein konkretes Modell mit nur wenigen oder gar keinen Freheitsgraden zur Folge.'."\n".
                    'Dadurch liefert die Quanten-Fluss-Theorie eindeutigere Erklärungen und Vorhersagen als die heutige Stringtheorie.'."\n".
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
                      array(  jump_name => 'OM:FrQFT:Vergleich:Schleifen-Quantengravitation'),
                    )),
              )
          ); ?>


		    	<!  • Schleifen-Quantengravitation  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Vergleich:Schleifen-Quantengravitation',
              'Ähnlich aber anders', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Vergleich:Stringtheorien', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'vis', text => array(
                    '(• XXX)',
                    ))),
                      
                  array( 'text', array( text => array(
                    // • Online-Infos: http://www.einstein-online.info/resolveuid/6c51feb674c2c3847b8e66ee4c095a78
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
                      array(  jump_name => 'OM:FrQFT:Vergleich:Heim-Theorie'),
                    )),
              )
          ); ?>


		    	<!  • Heim-Theorie  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Vergleich:Heim-Theorie',
              'Erstaunliche Ähnlichkeiten', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Vergleich:Schleifen-Quantengravitation', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'vis', text => array(
                    '(\\bold{Weltbild:})',
                    '(• Materialismus: Wir müssen »einer Weltsicht des reinen Materialismus auf wiedersehen sagen«. Siehe Ordner „Materialismus, »Wir müssen »einer Weltsicht des reinen Materialismus auf wiedersehen sagen«. - Burkhard Heim - Das neue Weltbild des Physikers - cd3v4-05“.)',
                    '(• Galileo verzichtet auf das nicht messbare und konzentriert sich auf das messbare. Heute: Was nicht messbar und mathematisierbar ist, dass kann angeblich nicht stimmen. Diese Perspektive muss falsch sein.)',
                    '(• Irgendetwas fehlt im gegenwärtigen Weltbild. Siehe Ordner „Weltbild- Irgendetwas fehlt im gegenwärtigen Weltbild - Burkhard Heim - Das neue Weltbild des Physikers - cd4v4-04“.)',
                    '(\\bold{Physikalische Grundlagen:})',
                    '(• Das Metron hat Ähnlichkeiten mit dem Wirkungsquant. Siehe Ordner „Materie kondensiert aus Taus, also Metronen - Burkhard Heim - Das neue Weltbild des Physikers - cd2v4-02, cd2v4-03“ und „Auerbach, T. and Ludwiger, Illobrand von - Heim\'s Theory of Elementary Particle Structures - 1992“.)',
                    '(• Normalzeit, Weltzeit, Weltgeschwindigkeit: Es gibt wohl so etwas, wie eine Normalzeit. Siehe Ordner „Normalzeit, Weltzeit, Weltgeschwindigkeit - Burkhard Heim - Das neue Weltbild des Physikers - cd2v4-06“.)',
                    '(• Organisation und Desorganisation. Ähnlich dem Djet-Neheh-Dualismus. Siehe Ordner „Organisation und Desorganisation“ und „Organisation und Desorganisation. Ordnung und Chaos. Negentropie und Entropie - cd3v4-06“.)',
                    '(– Organisierende Strukturen x5, x6. Der Zusamenhang. Die Dinge sind mehr als die Summe ihrer Teile. Siehe Ordner „Der Zusamenhang. Die Dinge sind mehr als die Summe ihrer Teile. Organisierende Strukturen x5, x6 - Burkhard Heim - Das neue Weltbild des Physikers - cd3v4-06“.)',
                    '(\\bold{Elementarteilchen:})',
                    '(• Teilchen sind geometrische Struktur. Siehe Ordner „Teilchen sind geometrische Struktur - Burkhard Heim - Das neue Weltbild des Physikers - cd2v4-05“.)',
                    '(• Metroplexe, Metroplexgrad, Organisationsformen, Organisationsniveau, Elementarteilchen etc. Siehe Ordner „Metroplexe, Metroplexgrad, Organisationsformen, Organisationsniveau, Elementarteilchen etc. - Burkhard Heim - Das neue Weltbild des Physikers - cd4v4-02“ und „Information- negative Wahrscheinlichkeiten sind Informationen - Burkhard Heim - Das neue Weltbild des Physikers - cd4v4-02“.)',
                    '(• Der Spin und der Isospin ergeben sich auch in der Heim-Theorie aus inneren Flüssen. Siehe Ordner "Isospin, Spin - Burkhard Heim - Das neue Weltbild des Physikers - cd2v4-07" und „Spin - Burkhard Heim - Das neue Weltbild des Physikers - cd2v4-06“.)',
                    '(• Masse und Lebensdauer wird aus Struktur und deren Resonancen erklärt. Siehe Ordner "Massenformel liefert erstaunlich korrekte Werte, Lebensdauer - Burkhard Heim - Das neue Weltbild des Physikers - cd2v4-08".)',
                    '(\\bold{Hyperraum G4 oder Gab:})',
                    '(• Hyperraum G4 und Wahrscheinlichkeitsraum der Quantenmechanik, zeitloser Webstuhl der Zeit. Siehe Ordner „Hyperraum G4 und Wahrscheinlichkeitsraum der Quantenmechanik, zeitloser Webstuhl der Zeit - Burkhard Heim - Das neue Weltbild des Physikers - cd3v4-02“ und „Philosophie - Leib-Seele-Problem, Bewusstsein, Koordinaten x5, x6, Hyperraum - Burkhard Heim - Das neue Weltbild des Physikers - cd3v4-04, cd3v4-05“.)',
                    '(• Der Hyperraum und seine hoch symmetrische Struktur erinnert mich an die Strukturen außerhalb des Kosmos, außerhalb seines Schwarzen Lochs. Siehe Ordner "Hyperraum g4 und Wahrscheinlichkeitsraum der Quantenmechanik, zeitloser Webstuhl der Zeit - Burkhard Heim - Das neue Weltbild des Physikers - cd3v4-02".)',
                    '(• Bewusstsein, Leib-Seele-Problem: Siehe Ordner "Philosophie - Leib-Seele-Problem, Bewusstsein, Koordinaten x5, x6, Hyperraum - Burkhard Heim - Das neue Weltbild des Physikers - cd3v4-04, cd3v4-05".)',
                    '(– Bewusstsein, Lebensprozesse. Siehe Ordner „Bewusstsein, Lebensprozesse - Burkhard Heim - Das neue Weltbild des Physikers - cd4v4-02“.)',
                    '(• Evolution kann nicht nur Auswahl sein. Siehe Ordner "Biologie, Genetik, Evolution kann nicht nur Auswahl sein, Komplexitätsaufbau - Burkhard Heim - Das neue Weltbild des Physikers - cd3v4-05".)',
                    '(– Siehe ›Spannungsspiel des Lebens‹, Achtsamkeitsprozess und Evolution.)',
                    '(– Komplexitätsaufbau erinnert an FrQFT. Siehe Ordner "Metroplexe, Metroplexgrad, Organisationsformen, Organisationsniveau, Elementarteilchen etc. - Burkhard Heim - Das neue Weltbild des Physikers - cd4v4-02".)',
                    /*'(• XXX)',
                    '(• XXX)',
                    '(• XXX)',
                    '(• XXX)',
                    '(• XXX)',
                    '(• XXX)',*/
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
                      array(  jump_name => 'OM:FrQFT:Vergleich:The-Reciprocal-System'),
                    )),
              )
          ); ?>


		    	<!  • The Reciprocal System  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Vergleich:The-Reciprocal-System',
              'Die Physik Dewey Bernard Larsons', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Vergleich:Heim-Theorie', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'vis', text => array(
                    '(• Siehe Notiz "Larson, Dewey Bernard - Notizen - 20180314.rtf".)',
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
                      array(  jump_name => 'OM:FrQFT:Vergleich:Wellenmodell-eines-Teilchens'),
                    )),
              )
          ); ?>


		    	<!  • Wellenmodell eines Teilchens  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Vergleich:Wellenmodell-eines-Teilchens',
              'Eine simple Annäherung an das Prinzip des Lichts in Elementarteilchen mit Ruhemasse', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Vergleich:The-Reciprocal-System', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'vis', text => array(
                    '(• XXX)',
                    ))),
                      
                  array( 'text', array( text => array(
                      // • Heilbron, John L.: Die Quantisierung des Atoms. Spektrum.de 13.06.2013. http://www.spektrum.de/alias/wissenschaftsgeschichte/die-quantisierung-des-atoms/1197997?etcc_cmp=SDW&etcc_med=Newsletter&fb=Heute&etcc_tar=Brand
                      //     "Er pries Thomsons Vorlesungen und bewunderte die wissenschaftliche Abhandlung "Aether und Matter" (1900) von Joseph Larmor. Hierin entwickelt der Inhaber des Lehrstuhls für Mathematik, den einst Isaac Newton innehatte, ein neues Weltsystem: Es basiert auf Elektronen, die er sich als permanente Verwirbelungen im Äther vorstellte."
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
                      array(  jump_name => 'OM:FrQFT:Vergleich:Verschiedene-Theorien-oder-Ideen'),
                    )),
              )
          ); ?>


		    	<!  • Verschiedene Theorien  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:FrQFT:Vergleich:Verschiedene-Theorien-oder-Ideen',
              'Wo findet man Prinzipien und Eigenschaften der Quanten-Fluss-Theorie ebenfalls', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:Vergleich:Wellenmodell-eines-Teilchens', type => 'back'),
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
                      //array(  jump_name => 'XXX'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
