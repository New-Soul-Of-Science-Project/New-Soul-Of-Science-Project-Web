<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Vorwort'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{Einpflegen}',
                    // '• … intuitive Grundlage … – der Limes ist vom Umgang her weniger intuitiv.',
                    // '\bold{\italic{Das Langlands-Programm}}',
                    // '• Die Superial-Zahlen sind ein neuer Zugang zum Langlands-Programm, siehe: \jump[https://www.spektrum.de/news/1000-seiten-beweisen-das-geometrische-langlands-programm/2255043]{}{1000 Seiten Beweis für eine mathematische Weltformel}.',
                    // '• Das Langlands-Programm bringt die Zahlentheorie, die Algebra, die Geometrie und die harmonische Analysis zusammen.',
                    // '– Im Falle der Superial-Zahlen sind auch die Arithmetik und die allgemeine Analysis inbegriffen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Ableitungen und Integrale faszinieren mich seit der Schulzeit.'."\n".
                    'Es war für mich immer wie ein Wunder, was dort Richtung Unendlichkeit verschwand und letztendlich dann in neuem Gewand wieder auftauchte.'."\n".
                    'Wie ich bin, hat es dann bald meine Neugier und meinen Forscherdrang so stark geweckt, dass ich begann damit zu experimentieren.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Motivation und Anfangszeit')),
                  array( 'text', array( text => array(
                    'Zum Berechnen von Ableitungen und Integralen wird klassischer Weise eine Grenzwertbetrachtung mit dem sogenannten Limes vorgenommen.'."\n".
                    'Beim Limes wird eine algebraische Variable in einer Formel einem Grenzwert angenähert und dann betrachtet,'."\n".
                    'zu welchem Wert sich diese Formel dann wie genau entwickelt.'."\n",
                      'Der Limes ist eine spannende Sache, aber für einen Anfänger recht unkonkret, schwammig und auch kompliziert; im Umgang oft wenig intuitiv,'."\n".
                    'fand ich damals.'."\n".
                    'Ich hatte mich intensiv mit komplexen Zahlen beschäftigt und so stand für mich ab einem bestimmten Punkt auch die Frage im Raum,'."\n".
                    'ob sich nicht ein Symbol finden ließe – ähnlich wie die imaginäre Einheit \lm{ \i } der komplexen Zahlen –,'."\n".
                    'dass die Unendlichkeit im Großen und im Kleinen sinnvoll und konkret ausdrücken kann, und welche Eigenschaften es wohl haben muss.'."\n",
                      'Zunächst versuchte ich Lösungen dafür zu finden, was beim Durch-Null-Teilen passiert, wenn wir die Differenz beim Ableiten wirklich zu Null werden lassen.'."\n".
                    'Dabei viel mir schließlich nach einiger Zeit eine interessante Struktur auf, deren Eigenschaften ich seit dem in einer Arbeit notierte,'."\n".
                    'die sich zu den heutigen Superial-Zahlen entwickelt hat.'."\n".
                    'Diese Entwicklung hatte einen schnellen Start und lief dann einen langen weiteren Weg, mit immerzu neuen Anregungen und Erkenntnissen;'."\n".
                    'und über die Jahrzehnte auch mit großen Lücken der Aufmerksamkeit, weil ich mich auch immer wieder ganz anderen Themen intensiv widmete.'."\n".
                    'Themen, die sich alle zu einem größeren Gewebe mehr oder weniger zusammenfügen und dabei gegenseitig inspirieren und sehr bereichern.'."\n",
                      'Jung und naiv hab ich es damals schließlich auch gewagt – vor fast 30 Jahren –, einem Professor der Hamburger Uni zu schreiben und ihm das PDF eines frühen'."\n".
                    'Entwurfs zu übersenden; ich, der Notationsgeflogenheiten der höheren Mathematik überhaupt nicht mächtig und'."\n".
                    'keines Programms habhaft, mit dem ich anständig Formeln hätte schreiben können.'."\n".
                    'Nach sieben meiner erklärenden Mails gestand der arme, von mir gebeutelte Mann ein, dass etwas interessantes an meinen Ideen dran sei,'."\n".
                    'er aber erst mit mir weiterschreiben würde, wenn ich endlich Algebra studiert hätte.'."\n",
                      'Heute weiß ich, wie mühselig es ist, vor allem ohne persönliches Gespräch, sich in die Gedankenwelt eines anderen Menschen'."\n".
                    'hinein zu versetzen.'."\n",
                      'Auch damals hab ich das neue Symbol der superialen Basis \lm{ \s } schon so genannt, es aber nur mit größer und kleiner Relationen'."\n".
                    'grob eingegrenzt.'."\n".
                    'Der Anregung des Herrn Professors ist es zu verdanken, dass ich begann, nach einer konkreten Definition zu suchen,'."\n".
                    'denn er wollte von mir wissen, was \lm{ \s } nun genau sei; ob ich eine Definition hätte.'."\n".
                    'An der fehlte es aber leider in dem Moment noch, denn meine Intuition und Logik gebar diese erst Wochen später.'."\n".
                    'So kam ich schließlich in einem Gedankenblitz, der mich tief des Nachts erweckte, zu den Überlegungen, die in der Definition von \lm{ \s }'."\n".
                    'durch ein unendliches Primzahl-Flächenprodukt mündeten.'."\n",
                      'Der Ausgangspunkt dieser Überlegungen war vor allem der Gedanke, wie \lm{ \s } beschaffen sein muss, um sinnvoll integrieren zu können.'."\n".
                    'Durch \lm{ \s } sollte es möglich werden, unendlich kleine ganze Zahlen unendlich weit vorwärts wie rückwärts zu zählen und dabei unendlich kleine Flächen zu addieren.'."\n".
                    'Dabei muss eine Summe der unendlich kleinen Flächen entstehen, die letztlich eine endliche Größe erreicht, um das Integral als echte Summe zu definieren.'."\n",
                      'So wurde mir schließlich bewusst, dass ich dort sehr wahrscheinlich etwas wirklich wichtiges und besonderes zu fassen hatte.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Bedeutung für die Zahlentheorie')),
                  array( 'text', array( text => array(
                    'Im Laufe der Zeit kristallisierte sich immer deutlicher heraus, dass die Superial-Zahlen eine große Bedeutung für viele bekannte'."\n".
                    'Zahlentypen haben und diese alle miteinander verbinden.'."\n".
                    'Natürliche Zahlen, Primzahlen, ganze Zahlen, rationale Zahlen, Radikale und Radikalformen, reell algebraische Zahlen, wie auch transzendente Zahlen'."\n".
                    'spielen alle eine ganz besondere Rolle innerhalb der Superial-Zahlen.'."\n".
                    'Die neue Struktur ist in den Potenzen der Primzahlen und bei Anzahlüberlegungen von Mengenelementen auch mit Ordinalzahlen wie \lm{ ω }'."\n".
                    'verbunden.'."\n",
                      'Der bedeutende Übergang von den reell algebraischen Zahlen zu den transzendenten Zahlen entspricht im Superial-Universum dem zwischen'."\n".
                    'den einzelnen Schichten des superialen Stellenwertsystems, wie ich vermute und wohl auch zeigen kann.'."\n".
                    'Dabei wird eine innere Struktur der transzendenten Zahlen sichtbar.'."\n".
                    'Wenn sich dies bestätigt, erlaubt es uns eine differenzierte Betrachtung und Untersuchung dieses Übergangs und ein besseres Verständnis,'."\n".
                    'worum es bei algebraischen und transzendenten Zahlen geht.'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Bedeutung für die Analysis und Geometrie')),
                  array( 'text', array( text => array(
                    'Bezüglich der Analysis und Geometrie wird der normierte strukturelle Kontext sichtbar,'."\n".
                    'indem Veränderungen, und die Dynamik im Allgemeinen, stattfinden.'."\n".
                    'Die Geometrie ist demnach fraktal.'."\n".
                    'Die Unterteilung der Abstände – deren Potenzen – und deren Zählung offenbaren eine fraktale Struktur,'."\n".
                    'die die aktual unendlich kleinen Differenzen der Analysis beinhaltet.'."\n".
                    'Veränderungen – Dynamik – kann nur in diesen Differenzen verstanden werden, die nicht Null sein können.'."\n".
                    'So gesehen hat jeder Moment seine Ausdehnung und ist nicht auf einen Punkt zu reduzieren.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Bedeutung für die Arithmetik')),
                  array( 'text', array( text => array(
                    'Weil die im Produkt von \lm{ \s } enthaltenen Potenzen der Primzahlen allesamt der vollständigen Induktion \lm{ ω } gleichen,'."\n".
                    'kommen wir über die Superial-Zahlen, wenn wir uns auch noch ein wenig mit den von mir auf dieser Seite begründeten Biordinalzahlen befassen,'."\n".
                    'zur Primfaktorisierung von \lm{ ω } und auch zur Erkenntnis, dass zum Beispiel \lm{ *| \sqrt{n} \,|* \cdot n^{ω} = n^{ω + ½} },'."\n".
                    'und im Grunde alle ähnlichen Ausdrücke \lm{ *| \sqrt[k]{n} \,|* \cdot n^{ω} = n^{ω + \frac{ 1 }{ k }} }, ganze Zahlen ergeben.'."\n",
                      'Die \jump{OM:BiOrd:Home}{Biordinalzahlen} sind ein weiteres meiner mathematischen Themen, dass sich mit der Darstellung von negativen aktual unendlichen Zahlen, wie \lm{ -ω }, und den Vorgängern der Limeszahlen, wie \lm{ ω - n },'."\n".
                    'befasst, wodurch wir beispielsweise herausfinden, dass es genauso viele negative Zahlen, wie natürliche Zahlen mit der Null gibt.'."\n",
                      'Über die Primfaktorisierung von \lm{ ω } verstehen wir dann auch, dass \lm{ \s } den gleichen Wert wie \lm{ ω^{ω} } trägt.'."\n",
                      'Die Superial-Zahlen – \lm{ ω } selber ist übrigens keine Superial-Zahl – ermöglichen uns die wichtigen Untermengen der reell algebraischen Zahlen,'."\n".
                    'auch oben schon gesagt, die natürlichen Zahlen, die Primzahlen, die ganzen Zahlen, die rationalen Zahlen, die Radikale und Radikalformen'."\n".
                    'und schließlich auch die reell algebraischen Zahlen ins aktual unendlich Große und kleine zu erweitern.'."\n".
                    'Dabei erhalten wir weiterhin die für diese Zahlenmengen wichtigen algebraischen Mengeneigenschaften, wie beispielsweise Gruppe, Ring und so weiter.'."\n".
                    'Dadurch bekommen wir eine sehr mächtige Zahlenstruktur, die uns in meinen Augen eine neue Welt zur Forschung eröffnet.'."\n",
                      'Mit alldem können wir dann die Arithmetik des Aktual-Unendlichen über die bekannten Ordinalzahlen hinaus deutlich erweitern,'."\n".
                    'was uns ganz neue Möglichkeiten und Spielräume erschafft.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Das Langlands-Programm')),
                  array( 'text', array( text => array(
                    'Im Laufe der Jahre habe ich viele populärwissenschaftliche Artikel gelesen und unter vielem anderen zu den Themen aktuale Unendlichkeit, Algebra, Analysis,'."\n".
                    'Arithmetik und Geometrie recherchiert und geschrieben.'."\n".
                    'Dadurch, dass ich meine Vergleiche und Herleitungen immer weiter fasste, Vermutungen anstellte und auch versuchte zu beweisen, was nach meinem jetzigen Verständnis'."\n".
                    'großteils gelang, und so immer mehr Hintergrund erkennen konnte, ist mir dann auch klar geworden, dass meine Theorie'."\n".
                    'der Analysis mit Superial-Zahlen ein neuer Zugang zum in der Mathematik berühmten und wichtigen'."\n".
                    '\italic{Langlands-Programm}\footnote{\const{SupNum_g_footnote_text_LanglandsProgramm}} ist.'."\n",
                      'Einer von mehreren Ausgangspunkten des Langlands-Programms ist es, dass es tiefe Verbindungen zwischen der Analysis und der Zahlentheorie geben könnte.'."\n".
                    'Zwei Themenfelder, deren Zusammenführung der Theorie der Superial-Zahlen schon in die Wiege gelegt ist.'."\n".
                    'Dies gilt dann ebenso für die Geometrie, schon wegen der Analysis von Kurven und anderen geometrischen Objekten.'."\n",
                      'Seit nun deutlich wird, dass die einzelnen Schichten des Stellenwertsystems auf das Engste mit reell algebraischen Zahlen'."\n".
                    'verknüpft sind und dann ebenfalls der Übergang zwischen diesen Schichten mit dem Übergang zu transzendenten Zahlen verknüpft ist,'."\n".
                    'wird auch die Bedeutung der Superial-Zahlen für die Algebra immer klarer.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Aktivitäten, Forschung und Ausblick')),
                  array( 'text', array( text => array(
                    'Ich habe in den letzten Monaten und Jahren wieder viel gelernt.'."\n",
                      'Ganz besonders mein Ansatz zum hoffentlich gelungenen Beweis der Überrationalitätsvermutung,'."\n".
                    'mit dem ich zeige, das Radikale – also Wurzeln natürlicher Zahlen – sinnvolle Koeffizienten der Schichten im superialen Stellenwertsystem sind,'."\n".
                    'hat die Superial-zahlen sehr voran gebracht.'."\n".
                    'In der Folge konnte ich nun auch zeigen, dass alle Radikalformen, also alle durch radikale darstellbaren reell algebraischen Zahlen,'."\n".
                    'ebenfalls sinnvolle Koeffizienten sind.'."\n",
                      'Aus diesem Grund, und wegen meiner Erkenntnis zur Struktur der transzendenten superialen Eulerschen Zahl \lm{ \e_{\s} }, kam mir die Vermutung,'."\n".
                    'dass alle reell algebraischen Zahlen sinnvolle Koeffizienten sind: die \italic{Algebraischen-Koeffizienten-Vermutung}.'."\n".
                    'Deren Beweis ist eines meiner Anliegen.'."\n",
                      'Schon zu Beginn der 2000er Jahre hat meine Forschung gezeigt, dass die transzendente superiale Eulersche Zahl \lm{ \e_{\s} } eine gebrochene Superial-Zahl ist,'."\n".
                    'also sehr viele Stellen oder Summanden in aktual unendlich kleinen Potenzen von \lm{ \s }, von \lm{ \s^{-1} } bis einschließlich \lm{ \s^{-\s} }, besitzt.'."\n".
                    'Jüngst konnte ich zeigen, dass auch die transzendente superiale Kreiszahl \lm{ π_{\s} } ebenso strukturiert ist.'."\n".
                    'Gemeinsam mit der Algebraischen-Koeffizienten-Vermutung und weiteren Überlegungen begründet dies die \italic{Superiale-Transzendenz-Vermutung}.'."\n",
                      'Die Algebraische-Koeffizienten-Vermutung und die Superiale-Transzendenz-Vermutung ergänzen einander hervorragend und bilden so einen genialen Abschluss der Struktur.'."\n".
                    'So ist auch der Beweis der Superiale-Transzendenz-Vermutung ein wichtiges Anliegen der Arbeit.'."\n",
                      'Es scheint mir nun gelungen, die Superial-Zahlen über eine ZFC-Modellkonstruktion als Menge zu definieren.'."\n".
                    'Das erst einmal intuitiv recht klar verständliche, mathematisch jedoch sehr unbestimmte Primzahl-Flächenprodukt \lm{ \s }'."\n".
                    'konnte ich über \lm{ p }-adische Bewertungen und entsprechende Rechenregeln für die aktual unendlichen Potenzen in \lm{ ω }-Größenordnung'."\n".
                    'mathematisch sauber definieren.'."\n".
                    'Das bringt das Projekt sehr voran.'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Bildung und Schule')),
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen sind nun in einem Stadium mehr Beachtung von außen zu verdienen.'."\n".
                    'Ich meine damit auch, mein ursprüngliches Anliegen, eine Alternative zum Limes zu entwickeln und durch direktes Rechnen mit aktual unendlichen Zahlen'."\n".
                    'das Ableiten und Integrieren intuitiver, transparenter und damit sogar auch für ungeübte klarer zu machen, im wesentlichen erreicht zu haben.'."\n",
                      'Daher habe ich bereits die Ausarbeitung einer ersten Vortragsreihe in Angriff genommen.'."\n".
                    'Sie soll im Rahmen der \jump{OM:nSOSa:Home}{›New Soul Of Science Academy‹} in Kooperation mit der \jump[https://menschlichwirtschaften.de/akademie]{}{Akademie der Menschlich Wirtschaften eG} stattfinden.'."\n",
                      'Mein Wunsch und ehrlicher Eindruck ist, dass das Verstehen und Erlernen von einfachen Ableitungen und Integralen mit Hilfe von Superial-Zahlen'."\n".
                    'leichter ist, als mit dem Limes.'."\n".
                    'Denn es bleibt in vollem Umfang sichtbar und verständlich, was genau passiert, und kann im Grunde mit den Rechenregeln'."\n".
                    'für Polynome, wie dem Distributivgesetz, den binomischen Formeln oder der Gaußschen Summenformel, errechnet werden.'."\n",
                      'Komplizierte und höhere Ableitungen und Integrale sind dabei sicher noch einmal gesondert zu sehen und schlicht noch zu erforschen.'."\n",
                      'Auf der anderen Seite ist es mit einfacher Schulmathematik und dem Pascalschen Dreieck recht einfach herauszufinden, welche Funktion abgeleitet oder Integriert'."\n".
                    'sich selber ergibt – also gleich bleibt – und wie diese Funktion und die zu ihr gehörende Eulersche Zahl \lm{ \e_{\s} } in ihren unendlichen tiefen strukturiert sind.'."\n".
                    'So wird die \lm{ \e_{\s} }-Funktion zu einem unendlichen Abenteuer.'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Akademische Forschung')),
                  array( 'text', array( text => array(
                    'Ich würde mich sehr freuen, wenn ich mit meiner Forschung zur Fortentwicklung und Bereicherung des Langlands-Programms beitrage,'."\n".
                    'das eben die Teilgebiete der Mathematik zusammen führen, tiefer begreifen und vernetzen möchte.'."\n",
                      'Denn unsere Welt, und das gilt eben auch für die Themen unserer Ideenwelt, ist im Hintergrund vernetzt, wie sich mir immer wieder zeigt,'."\n".
                    'und wofür die Superial-Zahlen durch ihre fraktale Struktur geradezu exemplarisch sind. \\\\'."\n".
                    '\\\\'."\n".
                    '\\italic{Wolfgang Huß} \\\\ \\small{im Mai 2026} \\\\ \\\\'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung'),
                    )),
                )
          ); ?>


		    	<!  • X  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Vorwort:X',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Vorwort:X', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'X'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:X', text =>
                                           
                'X')),
                     
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Vorwort:X'),
                    )),
                )
          ); */ ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
