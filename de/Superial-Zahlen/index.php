<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Home'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      '); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Home:Vortext:X', text =>
                                           
                'Abstract', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Theorie der Superial-Zahlen etabliert einen aktual unendlichen,'."\n".
                    'total geordneten Zahlkörper \lm{ \mathbb{S} = \mathbb{A}_{\R}\!*(*( \s^\mathbb{Z} *)*) } als das fundamentale,'."\n".
                    'normierte Stellenwertsystem der Analysis.'."\n".
                    'Im Zentrum dieses Systems steht die superiale Basis \lm{ \s := ω^ω },'."\n".
                    'welche über die von Neumannsche Ordinalzahlpotenzierung als transfinite Primzahl-Flächenprodukt'."\n".
                    'formal im Zermelo-Fraenkel-Mengenlehre-System mit Auswahlaxiom (ZFC) verankert ist.'."\n",
                      'Durch den rigorosen Beweis der Primzahlprodukt-Vermutung und die Etablierung der Identität'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Home', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  \equiv_{kan}  ω\overline{\#}  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdots)_{\#}  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'wird nachgewiesen, dass der dichte (lückenlose) Anfangsabschnitt'."\n".
                    'des unendlichen Primturm-Potenzrasters exakt die Mächtigkeit der Ordinalzahl \lm{ ω } ausfüllt.'."\n".
                    'Auf diesem unerschütterlichen Fundament operiert eine Familie verallgemeinerter \lm{ p }-adischer Schichtbewertungen,'."\n".
                    'die jeder endlichen Primzahl die exakte Dimension \lm{ v_{p}( \s ) = ω } zuweist.'."\n",
                      'Das System löst die methodischen Limitationen der klassischen Nichtstandard-Analysis und der Limesrechnung auf,'."\n".
                    'indem es eine messerscharfe arithmetische Bruchlinie zieht:'."\n".
                    'Während im Produkt mit \lm{ \s } alle reell algebraischen Zahlen glatte unendliche Ganzzahlen ohne Nachkommastellen bilden'."\n".
                    '(Beweis der Überrationalitätsvermutung und der Algebraischen-Koeffizienten-Vermutung),'."\n".
                    'tragen transzendente Koeffizienten aufgrund ihrer Inkompatibilität zum Ganzheitsraster der Primzahltürme zwingend unendliche,'."\n".
                    'infinitesimale Reste (Beweis der Superialen-Transzendenz-Vermutung).'."\n".
                    'Mit der Etablierung von \lm{ \s } als normierter infiniter Einheit und \lm{ \s^{-1} } als absolut normiertem Infinitesimal'."\n".
                    'wird das Differential \lm{ \mathrm{d} } ersetzt.'."\n".
                    'Ableitungen werden zu exakten Differenzen und Integrale werden zu exakten, aktual unendlichen Summen,'."\n".
                    'die ihren aktual unendlichen Grenzwertpfad im System vollständig bewahren'."\n".
                    'und algebraisch verrechenbar machen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Home:Vortext:X', text =>
                  'Das transfinite Stellenwertsystem und die superiale Basis', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Der Weg vom Endlichen ins Aktual-Unendliche wird über eine mathematisch präzise Erweiterung'."\n".
                    'der klassischen Stellenwertschreibweise operationalisiert.'."\n".
                    'Die superiale Basis \lm{ \s } speichert das Produkt aller endlichen Primzahlen in einer exakten,'."\n".
                    'unendlichen Potenzordnung der vollständigen Induktion \lm{ ω }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  ω^{ω}  \equiv_{kan}  *( \prod\nolimits^{\#}_{ \forall p \in \mathbb{P} } p *)^{ω}  =  ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdots )_{\#}^{ω}  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dieses unendliche Primzahl-Objekt ermöglicht eine vereinfachte Stellenwertschreibweise,'."\n".
                    'welche sowohl positive als auch negative Exponenten des Körpers über reell algebraischen Koeffizienten'."\n".
                    'exakt abbildet:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2} \s^{2} - \frac{ 37}{10} \s - 7 + 5 \s^{-1}  = *〈 \sqrt{2} *〉*〈 - \frac{ 37}{10} *〉*〈 -7 *〉․*〈 5 *〉  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Home:Vortext:X', text =>
                  'Arithmetische Bruchlinie und die Überrationalitätsvermutung', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Eine der tiefsten Erkenntnisse des Superial-Zahlensystems ist die strukturelle Aufklärung irrationaler Ausdrücke.'."\n".
                    'Während rationale Brüche endlicher Quotienten an der Darstellung irrationaler Wurzeln scheitern,'."\n".
                    'liefert das superiale System eine exakte ganzzahlige Repräsentation im Unendlichen.'."\n",
                      'Der Beweis der Überrationalitätsvermutung zeigt, dass jede \lm{ x }-te Wurzel'."\n".
                    'aus einer endlichen natürlichen Zahl \lm{ n } durch das Produkt mit der unendlichen \lm{ ω }-Potenz ihres Radikands'."\n".
                    'in eine aktual unendlich große, glatte Ganzzahl überführt wird.'."\n".
                    'Jede irrationale Wurzel lässt sich somit als exakter Bruch aktual unendlich großer, ganzzahliger Quotienten darstellen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt[x]{n}  =  \frac{ \sqrt[x]{n} \cdot \rad(n)^{ω} }{ \rad(n)^{ω} }  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Diese unendliche Ganzheit gilt über die Algebraische-Koeffizienten-Vermutung für alle reell algebraischen Zahlen.'."\n".
                    'Im scharfen Kontrast dazu steht die Superiale-Transzendenz-Vermutung:'."\n".
                    'Transzendente Zahlen (wie \lm{ π_{\s} } oder \lm{ e_{\s} }) lassen sich nicht glatt in diese Stufen integrieren;'."\n".
                    'sie tragen im System unendlich feine, infinitesimale Nachkommastellen'."\n".
                    'und verweisen auf eine tieferliegende fraktale Struktur des Kontinuums.'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \e_{\s}  =  *( 1 + \frac{ 1 }{ \s } *)^{\s}  =  〈1〉․〈1〉^{〈1〉_{1}}  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Home:Vortext:X', text =>
                  'Die fundamentale Neudefinition der Infinitesimalrechnung', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Auf Grundlage dieses arithmetischen Fundaments wird die Differential- und Integralrechnung'."\n".
                    'von der klassischen Grenzwertnäherung (Limes) befreit und auf exakte algebraische Operationen unter Erhaltung des aktualen Grenzwertpfades zurückgeführt.'."\n".
                    'Das klassische Differential wird durch das absolut normierte Infinitesimal \lm{ \s^{-1} } ersetzt,'."\n".
                    'woraus sich die exakte Ableitung einer Funktion ohne Limes-Prozess ergibt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  :=  \frac{ f(x + \s^{-1}) - f(x) }{ \s^{-1} }  =  \frac{ f(〈x〉․\,〈1〉) - f(x) }{ ․\,〈1〉 }  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Folglich werden Integrale im superialen Raum als mathematisch exakte Summen über'."\n".
                    'eine aktual unendlich große Anzahl von normierten, infinitesimalen Abschnitten definiert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \int_{a}^{x} f\'(n) \,\mathrm{d}n \,  \widehat{=}  \sum_{ \forall n \in \lbrack a, x \lbrack_{\mathbb{S}_{\Z}}^{-1} }  \! f\'(n) \cdot \s^{-1}  =  \sum_{ \forall n \in \lbrack a, x \lbrack_{\mathbb{S}_{\Z}}^{-1} }  .*〈 f\'(n) *〉  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Diese unendlich kleinen Summanden addieren sich über die transfinite Summation präzise zu endlichen Zahlen auf.'."\n".
                    'Da der infinitesimale Rest nicht im Grenzwert gelöscht wird, bleibt der exakte aktual unendliche Grenzwert- und Rechenpfad'."\n".
                    'im normierten Stellenwertsystem vollständig konserviert und analytisch auswertbar.'."\n".
                    'Das unendlich Kleine \lm{ \s^{-1} } verhält sich metrisch streng invers zum unendlich Großen \lm{ \s },'."\n".
                    'wodurch Ableitungen und Integrale ihre infinitesimale Feinstruktur, Integrale als exakte Summen, bewahren.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Und so zeigt sich die besondere Bedeutung von \lm{ \s = ω^{ω} }, was sehr bemerkenswert ist, weil sich die neue superiale Basis \lm{ \s }'."\n".
                    'auf diese Weise an exponierter Stelle in die Ordinalzahlen einreiht.'."\n".
                    'Daher fand diese Formel auch Eingang in das Logo der Theorie der Superial-Zahlen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Home:Vortext:X', text =>
                  'Ein zukunftsweisender Ausblick: Die Verbindung von Zahlentheorie und Analysis', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Die Erkenntnis, dass die superiale Basis \lm{ \s } als unendliches Flächenprodukt alle endlichen Primzahltürme geometrisch'."\n".
                    'in einem einzigen, geordneten Rechenraum bündelt und eine metrische Normierung des transfiniten Raumes etabliert,'."\n".
                    'berührt eine der tiefsten Leitideen der modernen Mathematik:'."\n".
                    'die systematische Verknüpfung von diskreter Zahlentheorie und kontinuierlicher Analysis.'."\n".
                    'In der mathematischen Fachwelt wird dieses monumentale Brückenprojekt'."\n".
                    'vor allem mit dem visionären Langlands-Programm assoziiert.'."\n",
                      'Das hier entwickelte System der Superial-Zahlen nähert sich dieser großen Synthese von einer neuen,'."\n".
                    'elementaren Seite.'."\n".
                    'Während die klassische Mathematik arithmetische Eigenschaften (wie Teilbarkeiten)'."\n".
                    'und geometrische Kontinuität oft getrennt behandelt, macht das superiale Stellenwertsystem'."\n".
                    'das unendliche Primorial direkt als kontinuierliche Raumkoordinate nutzbar.'."\n".
                    'Die verallgemeinerten \lm{ p }-adischen Schichtbewertungen stellen sicher,'."\n".
                    'dass die Primzahl-Feinstruktur auf jeder Dimension des Raumes fehlerfrei erhalten bleibt.'."\n".
                    'Damit bietet die Theorie einen faszinierenden, neuen Denkansatz, um die tiefen Wechselwirkungen'."\n".
                    'zwischen Primzahlen und der Geometrie des Kontinuums direkt über die arithmetischen Gesetze'."\n".
                    'einer erweiterten Analysis zu erforschen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Es tauchen somit immer weitere bedeutende Fragen zu den neuen Zahlen auf.'."\n".
                    'Und so eröffnet sich eine ganze, neue Welt in der Mathematik, zu deren Erforschung wir hier anregen wollen.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Home:Vortext:X', text =>
                                           
                'Information', subline =>
                  '')),
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
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Vorwort'),
                    ))),
                      
                  array( 'normal',
                    '<h3 class="tools-class-contentlist-header">Ansatz und intuitive Entwicklung \\\\ \small{Der Wunsch nach konkreter Analysis mit aktual unendlichen Zahlen, ohne den Limes – in einer eigenen intuitiven Sprache}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Einleitung'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Arithmetische-Struktur-Geometrie'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Algebraische-Grundlagen'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Ableitungen-Integrale'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Eulersche-Zahl-e-Funktion'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Eigenschaften'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Ueberrationalitaetsvermutung'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Algebraische-Koeffizienten-Vermutung'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Superiale-Transzendenz-Vermutung'),
                    ))),
                      
                  array( 'normal',
                    '<h3 class="tools-class-contentlist-header">ZFC-Modellkonstruktion \\\\ \small{Fundierung auf Basis des Zermelo-Fraenkel-Mengenlehre-Systems mit Auswahlaxiom (ZFC)}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:SupNum:Primzahlprodukt-Vermutung'),
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
