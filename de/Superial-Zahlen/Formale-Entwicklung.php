<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Formale-Entwicklung'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Einleitung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\\bold{XXX}',
                    // '• Ist \\term{\M(S)} bezüglich der Addition und Multiplikation ein \\jump[https://de.wikipedia.org/wiki/Geordneter_Körper]{}{archimedisch angeordneter Körper}?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Definition der Superial-Zahlen kann auf unterschiedliche Weisen erfolgen.'."\n".
                    'Ich habe mich dafür entschieden dies auf eine Weise zu tun, die sicher stellt, dass möglichst viele'."\n".
                    'Eigenschaften der endlichen natürlichen Zahlen sowie auch der ganzen Zahlen, der Primzahlen und der rationalen Zahlen'."\n".
                    'ins Aktual-Unendliche fortgesetzt werden.'."\n",
                      'Bei den Superial-Zahlen handelt es sich um eine abelsche Gruppe\\footnote{\\const{NSOSP_g_footnote_text_AbelscheGruppe}}'."\n".
                    'bezüglich der Addition und Multiplikation und sie sind sogar ein angeordneter algebraischer Körper\\footnote{\\const{NSOSP_g_footnote_text_KoerperAlgebra}},'."\n".
                    'die die rationalen Zahlen \\term{\M(Q)} ins aktual unendliche erweitert.'."\n".
                    'Dabei erweitern sich auch ihre Teilmengen der natürlichen Zahlen \\term{\M(N)}, der ganzen Zahlen \\term{\M(Z)} und der Primzahlen \\term{\M(P)} zu den'."\n".
                    'den \\jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Superial-Zahlen} \\term{\M(S)_{N}},'."\n".
                    'den \\jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Superial-Zahlen} \\term{\M(S)_{Z}}'."\n".
                    'und sogar zu den \\jump{OM:SupNum:Formale-Entwicklung:PrimSZ}{superialen Primzahlen} \\term{\M(S)_{P}}.'."\n",
                      'So kommen wir zum Beispiel nicht nur in die Lage \\jump{OM:SupNum:Einleitung}{Ableitungen mit Superial-Zahlen}, ganz ohne Limes, zu definieren,'."\n".
                    'sondern auch in die Lage, bis ins Aktual-Unendliche zu zählen und dadurch Integrale'."\n".
                    'als Summen unendlich vieler, unendlich schmaler Flächenstreifen zu berechnen.'."\n",
                      'Jede natürliche Superial-Zahl hat dabei so viele Vorgänger in \\term{\M(S)_{N}}, wie sie selber groß ist.'."\n".
                    'Dies ist anders, als bei den von mir erforschten auch ins Aktual-Unendliche gehenden'."\n".
                    '\\jump{OM:BiOrd:Home}{Biordinalzahlen}:'."\n".
                    'Aktual unendliche Biordinalzahlen haben bizarrer Weise \\jump{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}{mehr Vorgänger als ihr Wert} groß ist.'."\n".
                    'In mancherlei anderen Punkten können wir erkennen, dass sie die noch nicht so perfekten Vorläufer der Superial-Zahlen sind.'."\n".
                    'Mathematisch gesehen sind die Biordinalzahlen eine Erweiterung der Ordinalzahlen\\footnote{\\const{NSOSP_g_footnote_text_Ordinalzahl}} zu einem algebraischen Ring\\footnote{\\const{NSOSP_g_footnote_text_RingAlgebra}}.'."\n",
                      'Die Menge der Superial-Zahlen ist in vielerlei Hinsicht etwas ganz besonderes.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Formale-Entwicklung:Vortext:DefinitionSuperialeEinheit', text =>
                      
                'Definition der superialen Einheit \\term{s}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Es lassen sich mindestens zwei geometrische Konstruktionen finden, die der folgenden Definition von \\term{s} über das unendliche Primzahlprodukt aus der'."\n".
                    '\\jump{OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s}{Einleitung} äquivalent sind:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  :=  \displaystyle \prod_{\forall n \in \mathbb{N}}  \left( \prod_{\forall p \in \mathbb{P}}  p \right)  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  :=  \displaystyle \left( \prod_{\forall p \in \mathbb{P}}  p \right)^{\omega}  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die erste der folgenden Konstruktionen geht ins aktual unendlich Große und die zweite ins aktual unendlich Kleine.'."\n".
                    'Beide definieren \\term{s} jedoch auf etwas unterschiedliche Weise:'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Definition von \\term{s} über den Wiederholungsrhythmus der natürlichen Zahlen} \\\\'."\n"))),
                      
                  array( 'figure',
                    array_merge( $SupNum_g_figure_ary_sGeomKonstruktWiederholung, array( name => 'OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktWiederholung'))),
                      
                  array( 'text', array( text => array(
                    'In der geometrischen Konstruktion der rhythmischen Wiederholung bleiben die Begrenzungspunkte der Teilstrecken immer im selben Abstand von Eins.'."\n".
                    'Am jeweiligen Ende der Punktreihe werden stets die nötigen Punkte angehängt, um den Rhythmus der nächsten natürlichen Zahl zu integrieren,'."\n".
                    'wenn er noch nicht enthalten sein sollte (siehe \\jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktWiederholung}).'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Definition von \\term{s^{-1}} über den Regen der natürlichen Zahlen} \\\\'."\n".
                    ''))),
                      
                  array( 'figure',
                    array_merge( $SupNum_g_figure_ary_sGeomKonstruktTeilung, array( name => 'OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktTeilung'))),
                      
                  array( 'text', array( text => array(
                    'In der Konstruktion der rhythmischen Zerlegung werden zwischen den vorhandenen Begrenzungspunkte der Teilstrecken immer neue Punkte hinzugefügt, um den Rhythmus'."\n".
                    'der hinzukommenden natürlichen Zahl in einem gleichmäßigen Rhythmus zu integrieren, falls er noch nicht vorhanden ist (siehe \\jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktTeilung}).'."\n",
                      'Dies ist, als wenn ein Regen von natürlichen Zahlen auf der Strecke der Eins hernieder gehen würde.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{XXX Explizite Anschauung des Primzahlprodukts von \\term{s}} \\\\'."\n".
                    'Für das Primzahlprodukt von \\term{s} ergibt sich in beiden Fällen eine mit unendlich mal unendlich vielen Primzahlen gefüllte Fläche der folgenden Art:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  \prod_{\forall n \in \mathbb{N}} *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-fuer-alle-in-N-Primzahl-Prod}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{1} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{2} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{3} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{n \in \mathbb{N}} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)^{\omega}  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Prod-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{XXX} \\\\'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Formale-Entwicklung:Vortext:XXX', text =>
                      
                'Polynom-Definition der Menge der Superial-Zahlen \\term{S}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um zu gewährleisten, dass die ganzen und die natürlichen Superial-Zahlen möglichst große Teilmengen im Verhältnis zur Menge \term{S} aller Superial-Zahlen sind,'."\n".
                    'können die Koeffizienten der Potenzen der superialen Basis \\term{s} als rationale Zahlen aus \\term{\M(Q)} definiert werden:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  :=  *\{  x *|* *( \forall d \in \mathbb{Z} *) *( \forall q_{d} \in \mathbb{Q} \setminus \{0\} *) *( \forall q_{i} \in \mathbb{Q} *) \\\ \qquad\qquad\qquad\qquad\qquad\quad *[ q_{d} s^{d} + \sum_{( \forall i \in \mathbb{Z})[d > i]} q_{i} s^{i} *]  *\}  }',
                                          label_name => 'OM:SupNum:Formale-Entwicklung:Vortext:Equ-Def-S', label_text => '\\name{OM:SupNum:Formale-Entwicklung:Vortext:Equ-Def-S}', label_incr => true),
                    ))),
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Formale-Entwicklung:Vortext:XXX', text =>
                      
                'XXX', subline =>
                  '')),
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
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:GanzeSZ'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Ganze Superial-Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Formale-Entwicklung:GanzeSZ',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    '\\bold{XXX}',
                    '• XXX',
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
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.Z', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{S}_{Z}  :=  \left\{ x ~\middle|~ \left( \forall d \in \mathbb{N} \right) \left( \forall q_{d} \in \mathbb{Q} \setminus \{0\} \right) \left( \forall q_{i} \in \mathbb{Q} \right) \left( \forall z \in \mathbb{Z} \right) \\\ \qquad\qquad\quad \left[ \begin{cases} z  &  \text{ falls } d = 0  \\\\  q_{d} s^{d} + \sum_{( \forall i \in \mathbb{Z})[d > i > 0]} q_{i} s^{i} + z  &  \text{ falls } d > 0  \end{cases} \right] \right\}  }'),
                    ))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Vortext:XXX', text =>
                      
                'XXX', subline =>
                  '')),
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
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ'),
                    )),
              )
          ); ?>
          

		    	<!  • Natürliche Superial-Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:GanzeSZ', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{XXX}',
                    '• XXX',
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
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.N', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{S}_{N}  :=  \left\{ x ~\middle|~ \left( \forall x \in \mathbb{S}_{Z} \right) \left[ x \geq 0 \right] \right\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Schreiben wir dies in einer ausführlicheren Definition, wie bei den ganzen Superial-Zahlen, dann wird es etwas transparenter:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.N', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Leftrightarrow  \mathbb{S}_{N}  :=  \left\{ x ~\middle|~ \left( \\forall d \in \mathbb{N} \right) \left( \forall q_{d} \in \mathbb{Q} > 0 \right) \left( \forall q_{i} \in \mathbb{Q} \right) \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\qquad \left( \forall n \in \mathbb{N} \right) \left( \forall z \in \mathbb{Z} \right) \\\ \qquad\qquad\qquad \left[ \begin{cases} n  &  \text{ falls } d = 0  \\\\  q_{d} s^{d} + \sum_{( \forall i \in \mathbb{Z})[d > i > 0]} q_{i} s^{i} + z  &  \text{ falls } d > 0  \end{cases} \right] \right\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für den Fall, dass \\term{d = 0} ist, es sich also um endliche Zahlen handelt, bleiben nur endliche natürliche Zahlen über.'."\n",
                      'Für \\term{d > 0}, den Fall, dass es sich um aktual unendlich große natürliche Zahlen handelt, entspricht die Definition der von positiven ganzen Superial-Zahlen.'."\n".
                    'Dies ist dadurch bestimmt, dass der Koeffizient \\term{q_{d}} der größten Potenz \\term{s^{d}} positiv sein muss.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Vortext:XXX', text =>
                      
                'XXX', subline =>
                  '')),
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
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:PrimSZ'),
                    )),
              )
          ); ?>
          

		    	<!  • Superiale Primzahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Formale-Entwicklung:PrimSZ',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{XXX}',
                    '• XXX',
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Vortext:XXX', text =>
                      
                'XXX', subline =>
                  '')),
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
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien'),
                    )),
              )
          ); ?>


		    	<!  • Formalien  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Formale-Entwicklung:Formalien',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:PrimSZ', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Nachfolgend ein paar nützliche Definitionen:'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Grundlagen:XXX', text =>
                'Zahlen und Mengen im Endlichen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ich möchte nun erst einmal tiefer beleuchten, welche hier wichtigen Eigenschaften von Zahlen und Mengen'."\n".
                    'sich auf welche mögliche Weise beim Übergang vom Endlichen ins Unendliche verhalten sollten, um Sinn zu machen und eine gute Plausibilität zu ergeben.'."\n",
                      'Das bedeutet nicht, dass es prinzipiell nicht auch weitere Möglichkeiten mit ihren Perspektiven und deren jeweiligen Vor- und Nachteilen gibt.'."\n".
                    'Mir erscheint die nachfolgende Perspektive natürlich am besten zum Erkenntnisgewinn geeignet und in diesem Sinne als am besten zu den Superial-Zahlen passend.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Die Teilmengen vom Beginn der natürlichen Zahlen} \\\\'."\n".
                    'Betrachten wird die Teilmengen \\term{\M(T)_{n}}, die wir vom Beginn der natürlichen Zahlen bilden können und deren Größe, also die Anzahl ihrer Elemente \\term{n}.'."\n",
                      'Exemplarisch vereinfacht definieren wir diese Mengen wie folgt:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.F', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{T}_{n}  :=  *\{ 0, 1, 2, 3, 4, …, n - 1 *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Formell korrekter können wir schreiben, wenn wir nachfolgend die Menge aller natürlichen Zahlen \\term{\M(N)} als stets mit der Null beginnend annehmen:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.F', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{N}  :=  \mathbb{N}_{0}  }',
                                          label_text => '\\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-Def-N-enthaelt-Null}', label_incr => false),
                      array( display => 'on',  latex => '{  \mathbb{T}_{n}  :=  \left\{  x ~\middle|~ *( n \in \mathbb{N} *) *( \forall x \in \mathbb{N} *) \left[  x < n  \right]  \right\}  }'),
                    ))),
                  array( 'text', array( Shape => 'italic', text => array(
                      'Die Teilmengen \\term{\M(T)_{n}} der ersten \\term{n} Elemente wird definiert als die Menge der Elemente x für die Gilt:'."\n".
                      'Ich nehme das Element \\term{n} aus der Menge der natürlichen Zahlen \\term{\M(N)} und alle \\term{x}, die kleiner als \\term{n} sind.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Wir sehen schon an der Definition, dass die Anzahl der Elemente in \\term{\M(T)_{n}} größer als alle Elemente dieser Menge ist.'."\n"))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Mein Freund Raimund Welsch machte mich in diesem Zusammenhang ganz zurecht darauf aufmerksam, dass dies eben nur gilt, wenn die natürlichen Zahlen vorstehend einschließlich der Null definiert sind.'."\n",
                        'Ich antworte darauf, dass dies deutlich macht, wie sinnvoll und plausibel die Definition der natürlichen Zahlen einschließlich der Null ist,'."\n".
                      'wenn wir uns mit dem Übergang uns Unendliche beschäftigen.'."\n"))),
                      
                  array( 'text', array( text => array(
                  '\\condb{Das größte Element einer Menge} \\\\'."\n".
                    'Im Fall der Mengen mit endlich vielen Elementen, hier repräsentiert durch die Mengen \\term{\M(T)_{n}}, existiert ein größtes Element in der Menge.'."\n".
                    'Es gilt:'."\n"))),
                      
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.F', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Rightarrow  \#\mathbb{T}_{n}  =  n  }'),
                      array( display => 'on', latex => '{  \Rightarrow  groesstes(\mathbb{T}_{n})  =  n - 1  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  groesstes(\mathbb{T}_{n}) + 1  =  n  }'),
                      array( display => 'on', latex => '{  \Rightarrow  groesstes(\mathbb{T}_{n})  <  n  }'),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Nun gehen wir ins Unendliche über.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Zahlen-und-Mengen-im-Unendlichen', text =>
                'Zahlen und Mengen im Unendlichen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Anders als im Endlichen der Mengen \\term{\M(T)_{n}} verhält es sich, wenn wir zur Menge aller natürlich Zahlen übergehen, die unendlich viele Elemente endlicher Größe in sich hat.'."\n".
                    'Auch sie beginnt mit der Null, aber in ihr gibt es per Definition kein größtes Element,'."\n".
                    'weil es zu jedem Element einen Nachfolger gibt:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Unendlichkeitsaxiom:2021}, Bedeutung für die Mathematik, Natürliche Zahlen.}'."\n"))),
                      
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.F', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Rightarrow  \nexists \; groesstes(\mathbb{N})  }'),
                    ))),
                      
                  array( 'text', array( text => array(
                      'Jedoch kann die Anzahl der Elemente in \\term{\M(N)} nach obiger Definition \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N} mit der aktual unendlichen Zahl \\term{ω} angegeben werden:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}, Topologische Eigenschaften.}'."\n"))),
                      
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.F', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega  :=  \#\mathbb{N}  }'),
                      array( display => 'on', latex => '{  \Rightarrow  *( \forall n \in \mathbb{N} *)  \left[  n < \omega  \right]  }'),
                      array( display => 'on', latex => '{  *( \forall r \in \mathbb{R} *)  *( \exists n \in \mathbb{N} *)  \left[  r < n  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  *( \forall r \in \mathbb{R} *)  \left[  -\omega < r < \omega  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  *( \forall r \in \mathbb{R^{+}} *)  \left[  0 < \omega^{-1} < r  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  *( k \in \mathbb{R} *)  *( \forall r \in \mathbb{R^{+}} *)  \\\ \qquad\qquad  \left[  k - r < k - \omega^{-1} < k < k + \omega^{-1} < k + r  \right]  }'),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Auf diese Weise kommen wir in die Lage, Zahlen außerhalb des Endlichen zu definieren; Zahlen, die also wirklich im Unendlichen liegen.'."\n",
                      'Auch können wir nun Zahlen definieren, die um eine endliche reelle Zahl herum liegen und näher an dieser sind, als jede andere reelle Zahl.'."\n".
                    'Sie verhalten sich ähnlich, wie der Limes einer Umgebung \\term{ε}, der gegen Null geht.'."\n".
                    'Nur sind diese Umgebungszahlen nicht unscharf, wie ein Limes, sondern konkret und damit scharf.'."\n",
                      'Das gleiche gilt, wenn wir das \\term{ω} durch die noch viel größere superiale Basis \\term{s} ersetzen:'."\n"))),
                      
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.F', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Rightarrow  *( \forall n \in \mathbb{N} *)  \left[  n < s  \right]  }',
                                               label_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Equ-alle-n-kleiner-s', label_text => '\\name{OM:SupNum:Formale-Entwicklung:Formalien:Equ-alle-n-kleiner-s}', label_incr => true),
                      array( display => 'on', latex => '{  *( \forall r \in \mathbb{R} *)  *( \exists n \in \mathbb{N} *)  \left[  r < n  \right]  }',
                                               label_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Equ-exist-n-mit-r-kleiner-n', label_text => '\\name{OM:SupNum:Formale-Entwicklung:Formalien:Equ-exist-n-mit-r-kleiner-n}', label_incr => true),
                      array( display => 'on', latex => '{  \Rightarrow  *( \forall r \in \mathbb{R} *)  \left[  - s < r < s  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  *( \forall r \in \mathbb{R^{+}} *)  \left[  0 < s^{-1} < r  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  *( k \in \mathbb{R} *)  *( \forall r \in \mathbb{R^{+}} *)  \\\ \qquad\qquad  \left[  k - r < k - s^{-1} < k < k + s^{-1} < k + r  \right]  }'),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Eigenschaft der Superial-Zahlen, mit ihnen keinen unscharfen, sondern einen konkreten „Limes“ definieren zu können, eröffnet die Möglichkeit'."\n".
                    'wichtige Eigenschaften der Zahlen näher untersuchen zu können, wie wir später sehen werden.'."\n".
                    'Sie ermöglicht so unter anderem die Definition einer konkreten Differentialrechnung, wie oben schon angedeutet.'."\n"))),
                  // #Ref: *SupNum:Stellenwertsystem-Schreibweise
                  array( 'headline', array( jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Stellenwertsystem', text =>
                      
                'Stellenwertsystem', subline =>
                  '')),
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    '• Übertragen von ›OM:SupNum:Einleitung:Grundlagen‹.',
                    ))),
                  array( 'text', array( text => array(
                  '\\condb{Ein besonderes Zahlenwertsystem und seine Kurznotation} \\\\'."\n".
                    'Das ist sehr bemerkenswert und ermöglicht ein neues und besonderes Zahlenwertsystem auf Basis der superialen Basis \\latexmath{ s }:'."\n",
                      'Jede Ziffer dieses Zahlenwertsystems auf Basis \\latexmath{ s } kann eine Zahl sein; in jedem Fall eine rationale, möglicherweise auch eine überrationale (siehe \\jumpname{OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung}).'."\n".
                    'Sehr fraglich ist für mich, ob es sinnvollerweise wirklich auch jede reelle Zahl sein kann,'."\n".
                    'denn ich vermute, dass transzendente Zahlen, wie die Eulersche Zahl \\latexmath{ \mathrm{e} } oder die Kreiszahl \\latexmath{ π },'."\n".
                    'als Koeffizienten in jedem Fall aus dem sinnvollen Rahmen fallen.'."\n",
                      'Nachfolgend ein paar Beispiele in einer neuen Notation, die jede Ziffer dieses Zahlensystems in spitzen Klammern notiert:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.F', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a, b, c, d \in \mathbb{Q} *) *[  〈a〉〈b〉〈c〉․〈d〉 \\\ \qquad\qquad\qquad  :=  a \cdot s^{2} + b \cdot s^{1} + c \cdot s^{0} + d \cdot s^{-1} \\\ \qquad\qquad\qquad  \in  \mathbb{S}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s^{1}  =  〈1〉〈0〉․  =  〈1〉〈0〉_{0}  =  〈1〉_{1}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s^{0}  =  〈1〉․  =  〈1〉_{0}  =  1  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s^{-1}  =  ․〈1〉  =  _{0}〈1〉  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  - \frac{3}{5} \cdot s^{2} + 25 \cdot s^{1} + 3,5 \cdot s^{0} - 7,2 \cdot s^{-1} \\\ \qquad\qquad\qquad\quad  =  *〈 - \frac{3}{5} *〉〈25〉〈3,5〉․〈-7,2〉 \\\ \qquad\qquad\qquad\quad  =  *〈- \frac{3}{5} *〉〈25〉〈3,5〉_{0}〈-7,2〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Ich denke an diesen einfachen Beispielen wird klar, wie das superiale Zahlenwertsystem funktioniert und wie es notiert wird.'."\n".
                    'Der Punkt hinter der nullten Potenz von \\term{s} markiert quasi das Komma, ähnlich unseren reellen Zahlen im Zehnersystem notiert.'."\n".
                    'Alternativ kann hinter einer spitzen Klammer auch die Potenz der superialen Basis \\term{s} als ganze Zahl angegeben werden.'."\n"))),
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
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen', text =>
                      
                'Skalierung der superialen Ebene einer Teilmenge der Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'An einigen Stellen dieser Arbeit'."\n".
                    'benötigen wir die Skalierung der superialen Potenzebene einer Teilmenge \\latexmath{ \mathbb{S}_T } der Superial-Zahlen \\latexmath{ \mathbb{S} }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.F', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}^{y}_{T}  :=  *\{  a  *|*  *( \forall t \in \mathbb{S}_{T} *) *[ a = t \cdot s^{y} *]  *\}  }',
                                          label_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen:Equ-Menge-superiale-Ebene-skalieren', label_text => '\\name{OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen:Equ-Menge-superiale-Ebene-skalieren}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Zum Beispiel ist es im Besonderen bei der \\jump{OM:SupNum:Ableitungen-Integrale:Integration}{Integration}'."\n".
                    'notwendig die ganzen Superial-Zahlen \\latexmath{ \mathbb{S}_Z } eine Potenzebene ins superial kleine zu skalieren:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.F', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \mathbb{S}^{-1}_{Z}  =  *\{  a  *|*  *( \forall z \in \mathbb{S}_{Z} *) *[ a = z \cdot s^{-1} *]  *\}  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-Menge-superial-kleine-ganze-Zahlen}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Hierdurch wird eine Menge erzeugt, die es ermöglicht, eine Summe zu definieren, in der superial kleine ganze Zahlen'."\n".
                    'durchgezählt werden, um superial kleine Flächen zu summieren, die das Integral ergeben.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge', text =>
                      
                'Intervall-Menge', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Eine etwas allgemeinere Definition der Intervall-Menge eines Intervalls\\footnote{Internet: \\\\ Vgl. \\cite{wiki:IntervallMathematik:2023}.} aus einer angeordneten Zahlenmenge:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Seien \\latexmath{ \lbrack a, b \rbrack_\mathbb{T} }, \\latexmath{ \lbrack a, b \lbrack_\mathbb{T} }, \\latexmath{ \rbrack a, b \rbrack_\mathbb{T} } und \\latexmath{ \rbrack a, b \lbrack_\mathbb{T} } die Mengen der folgenden Intervalle von \\latexmath{ a } bis \\latexmath{ b } aus der Menge \\latexmath{ \mathbb{T} }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form.F', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ a, b ]_\mathbb{T}  :=  *\{  x  ~\middle|~  *( \forall x \in \mathbb{T} *) *( a, b \in \mathbb{T} *) *[ a \leq x \leq b *]  *\}  }'),
                      array( display => 'on',  latex => '{  [ a, b [_\mathbb{T}  :=  *\{  x  ~\middle|~  *( \forall x \in \mathbb{T} *) *( a, b \in \mathbb{T} *) *[ a \leq x < b *]  *\}  }'),
                      array( display => 'on',  latex => '{  ] a, b ]_\mathbb{T}  :=  *\{  x  ~\middle|~  *( \forall x \in \mathbb{T} *) *( a, b \in \mathbb{T} *) *[ a < x \leq b *]  *\}  }'),
                      array( display => 'on',  latex => '{  ] a, b [_\mathbb{T}  :=  *\{  x  ~\middle|~  *( \forall x \in \mathbb{T} *) *( a, b \in \mathbb{T} *) *[ a < x < b *]  *\}  \;\;  ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'so können wir flexibel Intervall-Mengen definieren.'."\n",
                        '\\\\'.
                      ''))),

                  array( 'text', array( text => array(
                    'Aufgrund der Komplexität der Superial-Zahlen ist es sehr hilfreich, wenn wir die Menge \\latexmath{ \mathbb{T} } angeben können,'."\n".
                    'auf der die Intervall-Menge basieren soll.'."\n".
                    ''))),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ableitungen-Integrale'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
