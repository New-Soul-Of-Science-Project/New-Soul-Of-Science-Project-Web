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
                    'Ableitungen und auch Integrale faszinieren mich seit der Schulzeit.'."\n".
                    'Es war für mich immer wie ein Wunder, was dort Richtung Unendlichkeit verschwand und letztendlich dann in neuem Gewand wieder auftauchte.'."\n",
                      'Wie ich bin, hat es dann bald meine Neugier und meinen Forscherdrang geweckt.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Motivation und Anfangszeit')),
                  array( 'text', array( text => array(
                    'Zum Berechnen von Ableitungen und Integrale wird klassischer Weise eine Grenzwertbetrachtung vorgenommen mit dem sogenannten Limes.'."\n".
                    'Beim Limes wird eine algebraische Variable in einer Formel einem Grenzwert angenähert und es wird betrachtet,'."\n".
                    'zu welchem Wert sich dies Formel dann wie genau entwickelt.'."\n",
                      'Der Limes ist eine spannende Sache, aber für einen Anfänger recht unkonkret, schwammig und auch kompliziert und im Umgang wenig intuitiv,'."\n".
                    'fand ich damals.'."\n".
                    'Ich hatte mich intensiv mit komplexen Zahlen beschäftigt und so stand für mich ab einem bestimmten Punkt auch die Frage im Raum,'."\n".
                    'ob sich nicht ein Symbol finden lies – ähnlich wie \lm{ \i } bei den komplexen Zahlen –, dass die Unendlichkeit im Großen und im Kleinen konkret ausdrücken konnte,'."\n".
                    'und welche Eigenschaften es wohl haben müsste.'."\n",
                      'Zunächst versuchte ich Lösungen dafür zu finden, was beim Durch-Null-Teilen passiert, wenn wir die Differenz beim Ableiten wirklich zu Null werden lassen.'."\n".
                    'Dabei viel mir schließlich nach einiger Zeit eine interessante Struktur auf, die sich zu den heutigen Superial-Zahlen weiterentwickelt hat.'."\n".
                    'Über einen langwierigen Weg, mit immerzu neuen Anregungen und Erkenntnissen, von Zeit zu Zeit.'."\n".
                    'Und über die Jahrzehnte auch mit großen Lücken der Aufmerksamkeit, weil ich mich eben auch, nach wie vor, ganz anderen Themen widmete.'."\n".
                    'Themen, die sich alle zu einem größeren Gewebe mehr oder weniger zusammenfügen und dabei gegenseitig inspirieren und sehr bereichern.'."\n",
                      'Jung und naiv hab ich es schließlich vor weit mehr als 20 Jahren auch gewagt, einem Professor an der Hamburger Uni zu schreiben und ihm das PDF eines frühen'."\n".
                    'Entwurfs zu übersenden; der Notationsgeflogenheit überhaupt nicht mächtig.'."\n".
                    'Nach sieben meiner erklärenden Mails gestand er ein, dass etwas interessantes an meinen Ideen dran sei,'."\n".
                    'er aber erst mit mir weiterschreiben würde, wenn ich endlich Algebra studiert hätte.'."\n",
                      'Heute weiß ich, wie mühselig es ist, vor allem ohne persönliches Gespräch, sich in die Gedankenwelt eines anderen Menschen'."\n".
                    'hinein zu versetzen.'."\n",
                      'Auch damals hab ich das neue Symbol der superialen Basis \lm{ \s } schon so genannt, es aber nur mit größer und kleiner Relationen'."\n".
                    'grob eingegrenzt.'."\n".
                    'Dem Herrn Professor ist es zu verdanken, dass ich damals begann, nach einer konkreten Definition zu suchen,'."\n".
                    'denn er wollte von mir wissen, was \lm{ \s } denn nun wirklich sei.'."\n".
                    'Ob ich eine genauere Definition hätte, an der es aber leider noch fehlte.'."\n",
                      'So kam ich schließlich in einem tief-nächtlichen Gedankenblitz zu den Überlegungen, die in der Definition von \lm{ \s }'."\n".
                    'durch ein unendliches Primzahl-Flächenprodukt mündeten.'."\n".
                    'Vor allem, indem ich mir Gedanken machte, wie \lm{ \s } beschaffen sein muss, um im unendlich kleine ganze Zahlen'."\n".
                    'unendlich weit zählen und addieren zu können, damit über eine dann letztlich endliche Differenz ein Integral als echte Summe definiert werden kann.'."\n",
                      'Auf diese Weise wurde mir noch bewusster, dass ich dort sehr wahrscheinlich etwas wirklich wichtiges und besonderes zu fassen hatte.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Bedeutung für die Zahlentheorie und Analysis')),
                  array( 'text', array( text => array(
                    'Im Laufe der Zeit kristallisierte sich immer deutlicher heraus, dass die Superial-Zahlen eine große Bedeutung für viele bekannte'."\n".
                    'Zahlentypen haben und diese alle miteinander verbinden.'."\n".
                    'Natürliche Zahlen, Primzahlen, ganze Zahlen, rationale Zahlen, Radikale und Radikalformen, reell algebraische Zahlen, wie auch transzendente Zahlen'."\n".
                    'speilen alle eine ganz besondere Rolle innerhalb der Superial-Zahl; das reicht hin bis zur kleinsten Ordinalität \lm{ ω },'."\n".
                    'wie schließlich auch zu \lm{ ω^{ω} }, die sogar den selben Wert wie \lm{ \s } trägt.'."\n",
                      'Der faszinierende Übergang von den reell algebraischen Zahlen zu den transzendenten Zahl entspricht im Superial-Universum dem zwischen'."\n".
                    'Schichten des superialen Stellenwertsystems, wie ich vermute und wohl auch zeigen kann.'."\n".
                    'Wenn sich dies bestätigt, erlaubte es uns eine differenzierte Betrachtung und Untersuchung dieses Übergangs und ein besseres Verständnis, worum es dabei geht.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Bedeutung für die Arithmetik')),
                  array( 'text', array( text => array(
                    'Weil die im Produkt von \lm{ \s } enthaltenen Potenzen der Primzahlen allesamt der vollständigen Induktion \lm{ ω } gleichen,'."\n".
                    'kommen wir über die Superial-Zahlen, wenn wir uns auch noch ein wenig mit den Biordinalzahlen befassen,'."\n".
                    'zur Primfaktorisierung von \lm{ ω } und auch zur Erkenntnis, dass zum Beispiel \lm{ *| \sqrt{n} \,|* \cdot n^{ω} = n^{ω + ½} },'."\n".
                    'und im Grunde alle ähnlichen Ausdrücke \lm{ *| \sqrt[k]{n} \,|* \cdot n^{ω} = n^{ω + \frac{ 1 }{ k }} }, ganze Zahlen ergeben.'."\n",
                      'Dabei sind die \jump{OM:BiOrd:Home}{Biordinalzahlen} ein weiteres meiner mathematischen Themen, dass sich mit der Darstellung von negativen aktual unendlichen Zahlen, wie \lm{ -ω }, und den Vorgängern der Limeszahlen, wie \lm{ ω - n },'."\n".
                    'befasst, wodurch wir beispielsweise herausfinden, dass es genauso viele negative Zahlen, wie natürliche Zahlen mit der Null gibt.'."\n",
                      'Die Superial-Zahlen selber – \lm{ ω } ist übrigens keine Superial-Zahl – ermöglichen uns die uns von den reell algebraischen Zahlen'."\n".
                    'bekannten wichtigen Untermengen, wie die natürlichen Zahlen, die Primzahlen, die ganzen Zahlen, die rationalen Zahlen, die Radikale und Radikalformen'."\n".
                    'und schließlich auch die reell algebraischen Zahlen ins aktual unendlich Große und kleine zu erweitern.'."\n".
                    'Dabei erhalten wir weiterhin die für diese Zahlenmengen wichtigen algebraischen Mengeneigenschaften, wie beispielsweise Gruppe, Ring und so weiter.'."\n".
                    'Dadurch erhalten wir eine sehr mächtige Zahlenstruktur, die uns in meinen Augen eine neue Welt zur Erforschung eröffnet.'."\n",
                      'Mit alldem können wir dann die Arithmetik des Aktual-Unendlichen über die bekannten Ordinalzahlen hinaus deutlich erweitern,'."\n".
                    'was uns ganz neue Möglichkeiten und Spielräume erschafft.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Das Langlands-Programm')),
                  array( 'text', array( text => array(
                    'Im Laufe der Jahre habe ich viele populärwissenschaftliche Artikel gelesen und unter vielem anderen zu den Themen aktuale Unendlichkeit, Algebra, Analysis,'."\n".
                    'Arithmetik und Geometrie recherchiert und geschrieben.'."\n".
                    'Dadurch, dass ich meine Vergleiche und Herleitungen immer weiter fasste, Vermutungen anstellte und auch versuchte zu beweisen, was nach meinem jetzigen Verständnis'."\n".
                    'großteils auch gelang, und so immer mehr Hintergrund erkennen konnte, ist mir dann auch klar geworden, dass meine Theorie'."\n".
                    'der Analysis mit Superial-Zahlen ein nach meinem Verständnis neuer Zugang zum in der Mathematik berühmten und wichtigem'."\n".
                    '\italic{Langlands-Programm}\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \cite{Bischoff:TausendSeitenBeweis:2025}. \\\\ Internet: \\\\ Vgl. \cite{wiki:LanglandsProgramm:2024}.} ist.'."\n",
                      'Einer von mehreren Ausgangspunkten des Langlands-Programms ist es, dass es tiefe Verbindungen zwischen der Analysis und der Zahlentheorie geben könnte.'."\n".
                    'Zwei Themenfelder, deren Zusammenführung der Theorie der Superial-Zahlen schon in Wiege gelegt sind.'."\n".
                    'Dies gilt auch für die Geometrie, schon wegen der Analysis von Kurven und anderen geometrischen Objekten.'."\n",
                      'Seit nun deutlich wird, dass die einzelnen Schichten des Stellenwertsystems auf das Engste mit reell algebraischen Zahlen'."\n".
                    'verknüpft sind sowie der Übergang zwischen den Schichten mit dem Übergang zu transzendenten Zahlen verknüpft ist'."\n".
                    'wird auch die Bedeutung der Superial-Zahlen für die Algebra immer klarer.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Vorwort:Vortext:X', text =>
                                           
                'Aktivitäten, Wünsche und Ausblick')),
                  array( 'text', array( text => array(
                    'Ich habe in den letzten Monaten und Jahren wieder viel gelernt.'."\n",
                      'Ganz besonders mein Ansatz zum hoffentlich gelungenen Beweis der Überrationalitätsvermutung,'."\n".
                    'mit dem ich zeige, das Radikale – also Wurzeln natürlicher Zahlen – sinnvolle Koeffizienten der Schichten im superialen Stellenwertsystem sind,'."\n".
                    'hat die Superial-zahlen sehr voran gebracht.'."\n",
                      'Dazu konnte ich in der Folge ebenfalls zeigen, dass alle Radikalformen, also alle durch radikale darstellbaren reell algebraischen Zahlen,'."\n".
                    'ebenfalls sinnvolle Koeffizienten sind.'."\n".
                    'Hiermit wurde mir die Greifbarkeit eines Beweises, dass alle reell algebraischen Zahlen sinnvolle Koeffizienten sind deutlich.'."\n".
                    'Diesen Beweis der Algebraische-Koeffizienten-Vermutung werde ich nun verstärkt in Angriff nehmen.'."\n",
                      'Schon zu Beginn der 2000er Jahre hat meine Forschung gezeigt, dass die transzendente superiale Eulersche Zahl \lm{ \e_{\s} } eine gebrochene Superial-Zahl ist,'."\n".
                    'also sehr viele Stellen oder Summanden in aktual unendlich kleinen Potenzen von \lm{ \s }, wie \lm{ \s^{-1} } bis endend mit \lm{ \s^{-\s} }, besitzt.'."\n".
                    'Jüngst konnte ich zeigen, dass auch die transzendente superiale Zahl \lm{ π_{\s} } so strukturiert,'."\n".
                    'was gemeinsam mit weiteren Überlegungen die Superiale-Transzendenz-Vermutung begründet.'."\n",
                      'Die Algebraische-Koeffizienten-Vermutung und die Superiale-Transzendenz-Vermutung ergänzen hervorragend und bilden einen genial Abschluss der Struktur.'."\n".
                    'So werde ich mich daran setzen bei möglichst bald zu beweisen.'."\n",
                      'Es scheint mir nun gelungen, die Superial-Zahlen über eine ZFC-Modellkonstruktion als Menge zu definieren.'."\n".
                    'Das erst einmal intuitiv recht klar verständliche, mathematisch jedoch sehr unbestimmte Primzahlflächenprodukt \lm{ \s }'."\n".
                    'konnte ich über \lm{ p }-adische Bewertungen und entsprechende Rechenregeln für die aktual unendlichen Potenzen in \lm{ ω }-Größenordnung'."\n".
                    'mathematisch sauber definieren.'."\n".
                    'Das bringt das Projekt sehr voran.'."\n",
                      'Die Superial-Zahlen sind nun in einer Verfassung, dass sie mehr Beachtung von außen verdienen.'."\n".
                    'Daher nehme ich möglichst bald ihre Aufbereitung zu einem ersten Vortrag in Angriff,'."\n".
                    'vermutlich im Rahmen der Akademie der Genossenschaft Menschlich Wirtschaften.'."\n",
                      'Ich würde mich sehr freuen, wenn ich mit meiner Forschung zur Fortentwicklung und Bereicherung des Langlands-Programm beitragen könnte.'."\n".
                    'Denn unsere Welt, und das gilt eben auch für unsere Ideenwelt, ist im Hintergrund vernetzt, wie sich immer wieder zeigt. \\\\'."\n".
                    '\\\\'."\n".
                    '\\italic{Wolfgang Huß} \\\\ \\small{im Juli 2025} \\\\ \\\\'."\n".
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
