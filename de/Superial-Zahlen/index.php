<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Home'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      '); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'text', array( text => array(
                    'Mit den Superial-Zahlen die fraktale Struktur des Unendlichen entdecken …'."\n",
                      'Vom Endlichen bis ins Aktual-Unendliche mit ganzen Zahlen zählen, an jeder Stelle vorwärts, wie rückwärts,'."\n".
                    'ist faszinierend.'."\n".
                    'Wir finden ein aktual unendliches Stellenwertsystem, basierend auf der neuen unendlichen Basis \lm{ \s }.'."\n".
                    'Wir nennen sie die superiale Basis, welche ein Produkt aller endlichen Primzahlen in aktual unendlicher Potenz der Ordinalzahl \lm{ ω },'."\n".
                    'der vollständigen Induktion, ist: \\\\ \lm{ \s := *( \prod_{ \forall p \in \mathbb{P} } p *)^{ω} = ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdots )^{ω} \; }. \\\\'."\n".
                    'Und es gelingt uns sogar, die Eigenschaften dieses unendlichen Produkts auf Basis des Zermelo-Fraenkel-Mengenlehre-Systems (ZFC) über \lm{ p }-adische Bewertungen formal sicher zu definieren.'."\n",
                      'Es ist offensichtlich, dass \lm{ \s } im Produkt mit jeder rationalen Zahl eine aktual unendlich große ganze Zahl ergibt.'."\n",
                      'Wir werden Beweisen, dass dies nicht nur für die rationalen Zahlen gilt, sondern auch für das Produkt aller'."\n".
                    'durch Radikale darstellbaren reell algebraischen Zahlen, wie \lm{ *| \sqrt{ 2 } |* = 2^{\frac{1}{2}} }, und abschließend sogar für das Produkt'."\n".
                    'jeder reell algebraischen Zahl mit \lm{ \s }, also auch für alle irrationalen reell algebraischen Zahlen.'."\n".
                    'Dies gelingt uns über die \lm{ p }-adische Bewertung \lm{ \mathrm{v}_{\!p}(a) } jedes reell algebraischen Faktors: \\\\ \lm{ a = \prod_{ \forall p \in \mathbb{P} } p^{\mathrm{v}_{p}(a)} }, mit \lm{ a \in \mathbb{A}_{\R} \land \mathrm{v}_{\!p}(a) \in \mathbb{Q} \; }.'."\n".
                    '\\\\ Das ist eine bedeutende Erkenntnis.'."\n",
                      'Der Beweis zeigt uns, wie wir aus jeder \lm{ x }-ten irrationalen Wurzel aus einer endlichen natürlichen Zahl \lm{ n }'."\n".
                    'durch ein Produkt mit allen Primzahlen in ihrem Radikanden \lm{ n } in \lm{ ω }-ter Potenz, also \lm{ \sqrt[x]{n} \cdot \rad(n)^{ω} },'."\n".
                    'eine aktual unendlich große ganze Zahl machen können.'."\n".
                    'Wodurch alle irrationalen Wurzeln aus natürlichen Zahlen als Bruch aktual unendlich großer ganzzahliger Quotienten, also mit \lm{ \sqrt[x]{n} = \frac{ \sqrt[x]{n} \cdot \rad(n)^{ω} }{ \rad(n)^{ω} } }, dargestellt werden können.'."\n".
                    'Was ja mit rationalen Brüchen endlicher Quotienten nicht geht.'."\n".
                    'Und das funktioniert über die \lm{ p }-adische Bewertung eben mit allen reell algebraischen Zahlen.'."\n".
                    'Ebenfalls etwas besonders Außergewöhnliches und Bedeutendes.'."\n",
                      'So lernen wir auch wichtiges über die Potenzrechnung der endlichen natürlichen Basen der (\lm{ ω \pm q })-ten Potenz, wenn \lm{ q } rational ist.'."\n".
                    'Die Zahlen \lm{ n^{ω \pm q} } sind nämlich allesamt aktual unendlich große ganze Zahlen.'."\n",
                    // 'Wird \lm{ q } irrational reell algebraisch so scheint das Ergebnis nicht mehr ganzzahlig zu sein.'."\n",
                      'Aufgrund der immensen Größe der superialen Basis \lm{ \s } erlaubt das aktual unendliche Stellenwertsystem der Superial-Zahlen nun'."\n".
                    'sinnvollerweise positive wie negative Werte seiner Stellen, die reell algebraische Zahlen sind.'."\n".
                    'Vereinfacht dargestellt in einer Stellenwert-Schreibweise in spitzen Klammern: \\\\ \lm{ \sqrt{2} \s^{2} - \frac{ 37}{10} \s - 7 + 5 \s^{-1}  = 〈\sqrt{2}〉〈- \frac{ 37}{10}〉〈-7〉․〈5〉 }.'."\n".
                    '\\\\ Abermals außergewöhnlich.'."\n",
                      'Wir definieren die Differentialrechnung, die Ableitung und die Integralrechnung, mit Hilfe der Superial-Zahlen neu.'."\n".
                    'So ersetzen wir die Näherungsrechnung des Limes durch Definitionen mit aktual unendlichen Zahlen – ersetzen das Diffenrential \lm{ \mathrm{d} } durch \lm{ \s^{-1} } – und'."\n".
                    'erhalten eine Zahlentheorie der Analysis, die auf Primzahlen beruht: \\\\ \lm{ f\'(x) := \frac{ f(x + \s^{-1}) - f(x) }{ \s^{-1} } = \frac{ f(〈x〉․\,〈1〉) - f(x) }{ ․\,〈1〉 } \; }.'."\n",
                      'Über die ganzen Superial-Zahlen können wir die Integrale als normale Summen über aktual unendlich kleine'."\n".
                    'Summanden auf Grundlage des Zählens definieren: \\\\ \lm{ \int_{a}^{x} f\'(n) \,\mathrm{d}n \, \widehat{=} \sum_{ \forall n \in \lbrack a, x \lbrack_{\mathbb{S}^{-1}_{\Z}} }  \! f\'(n) \cdot \s^{-1} \, = \, \sum_{ \forall n \in \lbrack a, x \lbrack_{\mathbb{S}^{-1}_{\Z}} }  .*〈 f\'(n) *〉 \; }.'."\n".
                    '\\\\ Die aktual unendlich kleinen Summanden summieren sich so durch aktual unendlich große Summen zu endlichen Zahlen auf.'."\n".
                    'Auf diese Weise erhalten wir Einblicke in Summen, die wir bisher nicht kannten oder nicht im Detail'."\n".
                    'durchdringen und verstehen konnten.'."\n",
                      'Wenn wir uns auf Grundlage der neuen Zahlentheorie der Analysis die Eulersche Zahl \lm{ \e } und'."\n".
                    'die so erhaltene \lm{ \e }-Funktion anschauen, die ihrer eigenen Ableitung gleich ist,'."\n".
                    'dann erhalten wir tiefe Einblicke in die transzendente'."\n".
                    'Struktur von \lm{ \e_{\s} }, die Eulersche Zahl auf Basis von \lm{ \s }.'."\n".
                    'Diese Zahl können wir bis in ihre aktual unendlich kleinen Summanden der Potenz \lm{ \s^{-\s} }'."\n".
                    'verfolgen, wo sie endet.'."\n".
                    'Die \lm{ \e }-Funktion ergibt sich durch diese Definition im Stellenwertsystem ausgedrückt zu \lm{ \e_{\s}^{x} = 〈1〉․〈1〉^{〈x〉_{1}} }'."\n".
                    'und dies entspricht \lm{ \e_{\s}^{x} = *( 1 + \frac{ 1 }{ \s } *)^{x \cdot \s} }.'."\n".
                    'Damit erhalten wir für die Eulersche Zahl \lm{ \e_{\s} = 〈1〉․〈1〉^{〈1〉_{1}} },'."\n".
                    'was \lm{ \e_{\s} = *( 1 + \frac{ 1 }{ \s } *)^{\s} } entspricht.'."\n",
                      'Weiterhin entwickeln wir mit Hilfe der neuen \jump{OM:BiOrd:Home}{Biordinalzahlen} einen Beweis, dass die vollständige Induktion \lm{ ω } eine Primfaktorzerlegung besitzt.'."\n".
                    'Die Ordinalzahl \lm{ ω } entspricht demnach dem Produkt aller endlichen Primzahlen: \\\\ \lm{ ω = 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot \cdots }.'."\n".
                    '\\\\ Eine im ersten Moment überraschende Entdeckung.'."\n".
                    'Und eine weitere tiefe Einsicht in die fundamentalen Strukturen der Arithmetik, die eine neue Verbindung zwischen der Zahlentheorie, der Mengenlehre und der Analysis offenbart.'."\n",
                      'Und so zeigt sich, es gilt \lm{ \s = ω^{ω} }, was sehr bemerkenswert ist, weil sich die neue superiale Basis \lm{ \s }'."\n".
                    'auf diese Weise an exponierter Stelle in die Ordinalzahlen einreiht.'."\n".
                    'Daher fand diese Formel auch Eingang in das Logo der Theorie der Superial-Zahlen.'."\n",
                      'Es tauchen immer weitere bedeutende Fragen zu den neuen Zahlen auf:'."\n".
                      'Welche Primfaktorzerlegung haben die natürlichen Superial-Zahlen?'."\n".
                    'Wie sind die Primzahlen im Aktual-Unendlichen verteilt?'."\n",
                      'Es eröffnet sich eine ganze Welt spannender Fragen, zu denen wir hier und dort Antworten in dieser Arbeit finden'."\n".
                    'oder zu deren Erforschung hiermit angeregt werden soll.'."\n".
                    ''))),
                      
                  array( 'headline', array( jump_name => 'OM:SupNum:Home:Vortext:X', text =>
                                           
                'Information')),
                  array( 'text', array( text => array(
                    'Dies ist die Startseite der kompletten Arbeit.'."\n".
                    'Bitte wähle den direkten Zugang zu den einzelnen Themen über das nachfolgende \jump{OM:SupNum:Home:Inhalt}{Inhaltsverzeichnis}.'."\n".
                    'Die \jump{OM:SupNum:Einleitung}{Einleitung} zu den Superial-Zahlen bietet einen Überblick über die grundlegende Herleitung.'."\n".
                    'Bei Nachfragen und Interesse an einer Diskussion, Kritik oder Beteiligung lade ich herzlich ein \jump{OM:FrQFT:Impressum:Inhaberdaten}{Kontakt} aufzunehmen.'."\n".
                    'Auch eine Unterstützung durch \jump{OM:FrQFT:Impressum:Spenden}{Spenden} ist herzlich willkommen.'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                        // #: Text so auch auf der Seite "OM:NPYo:Home". Durch eine Konstante ersetzen, in der der Hinweis auf den Haftungsausschluss durch eine Wild-Card der aktuellen Seite ersetzt ist. Z.B. "!:Haftungsausschluss".
                        '\italic{Bitte beachte, dass diese Seiten im Aufbau befindlich sind. Es sind weder alle entwickelten Ideen eingepflegt, noch sind alle Texte vollständig.'."\n".
                        'Sollte letzteres der Fall sein, so sind \color{*Bearb}{violette} Markierungen angebracht.'."\n".
                        'Stellen, die der aktuellen Weiterentwicklung bedürfen – gerne auch von extern –, sind \color{*Entwick}{grün} markiert.}'."\n"),
                        addtext => '')),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Home:Inhalt'),
                      //array(  jump_name => 'OM:SpaLeb:Vorwort'),
                      array(  jump_name => 'OM:SupNum:Einleitung'),
                    )),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:Angebote-Veranstaltungen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Inhalt:  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Home:Inhalt',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'normal',
                    '\\\\'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      array( title => '\color{*ContentItemDisabled}{Video Tour (geplant)}', startsign => '', //jumpname => 'X',
                                description => 'die YouTube-Vorträge'),
                      array( title => '\color{*ContentItemDisabled}{Vorwort (geplant)}', startsign => ''/*'\name{OM:FrQFT:Vorwort}'*/, //jumpname => 'OM:FrQFT:Vorwort', startsign => '',
                                description => 'was mich bewegt – was ich bewegen möchte'/*$Glo_g_Site_ary['OM:FrQFT:Vorwort'][text_undertitel_h2])*/),
                    ))),
                      
                  array( 'normal',
                    '<h3 class="tools-class-contentlist-header">Ansatz und intuitive Entwicklung \\\\ \small{Der Wunsch nach konkreter Analysis mit aktual unendlichen Zahlen, ohne den Limes – in einer eigenen intuitiven Sprache}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Einleitung'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Struktur-Geometrie'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Formale-Entwicklung'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Ableitungen-Integrale'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Eulersche-Zahl-e-Funktion'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Eigenschaften'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Primzahlprodukt-Vermutung'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Ueberrationalitaetsvermutung'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden'),
                    ))),
                      
                  array( 'normal',
                    '<h3 class="tools-class-contentlist-header">ZFC-Modellkonstruktion \\\\ \small{Fundierung auf Basis des Zermelo-Fraenkel-Mengenlehre-Systems mit dem Auswahlaxiom (ZFC)}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:ZFC-Modellkonstruktion'),
                    ))),
                      
                  array( 'normal',
                    '<h3 class="tools-class-contentlist-header">Lesestoff und Verweise \\\\ \small{Informationen}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Literatur'),
                    ))),
                      
                  $NPYo_g_index_KurseVortraegeWorkshops_Head,
                  $NPYo_g_index_KurseVortraegeWorkshops_ContentList,
                    
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_Head,
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_ContentList,
              )
          ); ?>
          
          
		    	<!  • Lexikon:  >
          <?php To_f_headline_add_hides_begin( 'Lexikon', 'Lexikon', 'OM:SpaLeb:Home:Lexikon', '          ', 'hideContent'); ?>
            <br>
          
            <table border="0"> <colgroup> <col width="22"> <col width="300"> <col width="16"> <col width="362"> </colgroup>
              <tr> <td valign="top">&rarr;</td> <td valign="top"><!a href="../de/X">
              (in Arbeit …)<!/a> <span style="color: #A0A0A0">(geplant)</span></td> <td valign="top" style="color: #A0A0A0">
                  &hellip;</td> <td valign="top" style="color: #A0A0A0">
                  (in Arbeit …)</td> </tr>
            </table>
          <?php To_f_headline_add_hides_end( '          ', 'hideContent'); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
