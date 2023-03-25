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
                    '\\jump{OM:SupNum:Einleitung:Vortext:Frage-und-zweite-Erkenntnis}{Einleitung} äquivalent sind:'."\n"))),
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
                  '\\condb{Definition von \\term{s^{-1}} über den Regen der natürlichen Zahlen} \\\\'."\n"))),
                      
                  array( 'figure',
                    array_merge( $SupNum_g_figure_ary_sGeomKonstruktTeilung, array( name => 'OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktTeilung'))),
                      
                  array( 'text', array( text => array(
                    'In der Konstruktion der rhythmischen Zerlegung werden zwischen den vorhandenen Begrenzungspunkte der Teilstrecken immer neue Punkte hinzugefügt, um den Rhythmus'."\n".
                    'der hinzukommenden natürlichen Zahl in einem gleichmäßigen Rhythmus zu integrieren, falls er noch nicht vorhanden ist (siehe \\jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktTeilung}).'."\n",
                      'Dies ist, als wenn ein Regen von natürlichen Zahlen auf der Strecke der Eins hernieder gehen würde.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Explizite Anschauung des Primzahlprodukts von \\term{s}} \\\\'."\n".
                    'Für das Primzahlprodukt von \\term{s} ergibt sich in beiden Fällen eine mit unendlich mal unendlich vielen Primzahlen gefüllte Fläche der folgenden Art:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{1} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{2} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{3} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{\forall n \in \mathbb{N}} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots  }'),
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Formale-Entwicklung:Vortext:XXX', text =>
                      
                'Polynom-Definition der Menge der Superial-Zahlen \\term{S}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um zu gewährleisten, dass die ganzen und die natürlichen Superial-Zahlen möglichst große Teilmengen im Verhältnis zur Menge \term{S} aller Superial-Zahlen sind,'."\n".
                    'können die Koeffizienten der Potenzen der superialen Basis \\term{s} als rationale Zahlen aus \\term{\M(Q)} definiert werden:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Form', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{S}  :=  \left\{ x ~\middle|~ \left( \forall d \in \mathbb{Z} \right) \left( \forall q_{d} \in \mathbb{Q} \setminus \{0\} \right) \left( \forall q_{i} \in \mathbb{Q} \right) \\\ \qquad\qquad\qquad\qquad\qquad\quad \left[ q_{d} s^{d} + \sum_{( \forall i \in \mathbb{Z})[d > i]} q_{i} s^{i} \right] \right\}  }'),
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
                      //array(  jump_name => 'OM:SupNum:XXX'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Ganze Superial-Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Formale-Entwicklung:GanzeSZ',
              '\\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:SupNum:XXX', type => 'back'),
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
                      //array(  jump_name => 'OM:SupNum:XXX'),
                    )),
              )
          ); ?>
          

		    	<!  • Natürliche Superial-Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ',
              '\\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:SupNum:XXX', type => 'back'),
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
                      //array(  jump_name => 'OM:SupNum:XXX'),
                    )),
              )
          ); ?>
          

		    	<!  • Superiale Primzahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Formale-Entwicklung:PrimSZ',
              '\\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:SupNum:XXX', type => 'back'),
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
                      //array(  jump_name => 'OM:SupNum:XXX'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
