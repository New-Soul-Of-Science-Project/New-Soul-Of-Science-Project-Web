<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:ZFC-Modellkonstruktion'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Erklärungs-Video}',
                    // '• DiBeos: \\jump[https://www.youtube.com/watch?v=gdJwjQmPyPM]{}{Warum sind transzendente Zahlen so interessant?}.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wir entwickeln die Superial-Zahlen von ihrer intuitiven Definition weiter, indem wir sie mit einer'."\n".
                    'Modellkonstruktion untermauern, die mit der Zermelo-Fraenkel-Mengenlehre mit dem Auswahlaxiom (ZFC) kompatibel ist.'."\n".
                    'Dabei hab ich mich von einer Konversation mit ChatGPT inspirieren lassen, in der ein Vorschlag entstand,'."\n".
                    'wie eine sichere Fundierung der Superial-Zahlen aussehen kann.'."\n",
                      'Eine Unsicherheit besteht in der Definition unserer superialen Basis \lm{ \s } durch das unendlich große Produkt von Primzahlen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  :=  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  \displaystyle \prod_{\forall p \in \mathbb{P}}  p^{ω}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  =  2^{ω} \cdot 3^{ω} \cdot 5^{ω} \cdot 7^{ω} \cdot 11^{ω} \cdot 13^{ω} \cdot 17^{ω} \cdot \cdots  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'denn in ZFC dürfen wir zwar mit unendlichen Mengen arbeiten, aber „\lm{ \infty \times \infty }“ als gewöhnliches Ganzzahl-Produkt ist nicht definiert und es gibt weitere Probleme:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Es gibt in \lm{ \mathbb{N} } kein Element, dessen \lm{ p }-adische Exponenten sämtlich \lm{ ω } sind.',
                        'Ein direkter Klassen-Term wie \lm{ \prod_{\forall p \in \mathbb{P}} p^{ω} } wäre eine eigentliche Klasse, keine Menge\hidden{ ⇒ kann kein Feld­element sein}, was ein Problem bei der Definition der Menge \lm{ \mathbb{S} } ist.',
                        'Wir erhalten so nur eine sichere Multiplikation, aber keine sichere Addition: Ohne sichere Addition aber kein Ring, erst recht kein Körper – Analysis oder Differentialrechnung wären unmöglich.',
                        'Ordnung nicht sicher linear: Die Superial-Analysis braucht aber eine totale Ordnung (damit man „größte Stelle“ sagen kann).',
                        'Eine unendlich große Primfaktorzerlegung verletzt den FTA-Rahmen: Die „Fundamental­theorem-der-Arithmetik“-Maschinerie garantiert Eindeutigkeit nur für endliche Zerlegungen. Für ring- oder feldartige Erweiterungen mit unendlichen Zerlegungen muss man völlig neue Axiome nachschieben.',
                        'ZFC-Feinheiten: Ein Element mit \lm{ ω }-vielen endlichen Faktoren liegt außerhalb jeder der üblichen Zahlstrukturen \lm{ \mathbb{N} }, \lm{ \mathbb{Z} }, \lm{ \mathbb{Q} } – man müsste die komplette Algebra darauf neu definieren.',
                    ))),
                  array( 'text', array( text => array(
                    'Und diese Probleme und Unsicherheiten wollen wir nun lösen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Die Hahn-Reihe als Ausweg', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Darum ersetzen wir in unserer Hahn-Reihen-Version die „wirkliche“ Primfaktorzerlegung durch das formale Symbol \lm{ \s } — und kodieren die Aussage'."\n".
                    '„\lm{ \s } hat bei jedem \lm{ p } die Exponentenlänge \lm{ ω }“ rein über \lm{ p }-adische Bewertungen.'."\n".
                    'Mathematisch steckt die Unendlichkeit jetzt in zwei (ZFC-legalen) Stellen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\lm{ \mathrm{supp} f } — wohlgeordnete Menge von endlichen Exponenten',
                        'Bewertungs­wert \lm{ ω } — das Ordinal \lm{ ω } ist ein Mengen-Element in ZFC',
                    ))),
                  array( 'text', array( text => array(
                    'Beides sind fertige, aktual unendliche Mengen – aber eben keine „Zahl mit unendlich vielen Primfaktoren“.'."\n".
                    'Damit können wir die Algebra sauber definieren, ohne etwas zu fordern, was ZFC nicht als Element kennt.'."\n",
                      'Eine Superial-Konstruktion über eine Hahn-Reihe\color{*Bearb}{(Verweis)} kann so „\lm{ p }-Exponent = \lm{ ω }“ jeder endlichen Primzahl stattdessen in der \lm{ p }-adischen Bewertung'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  v_{p}(\s)  =  ω  }'),
                    ))),
                  array( 'text', array( text => array(
                    'kapseln, wie wir gleich sehen, denn auf diese Weise ist \lm{ \s } einfach ein neues formales Zeichen, mit wohldefinierten Eigenschaften.'."\n".
                    'Dadurch ergibt sich die Definition der Menge der Superial-Zahlen \lm{ \mathbb{S} } zu'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  :=  \mathbb{A}_{\R}((\s^{\mathbb{Z}}))  }'),
                      array( display => 'on',  latex => '{  \Gamma  :=  \mathbb{Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \mathbb{S}  =  \mathbb{A}_{\R}((\s^{\Gamma}))  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'wenn \lm{ \mathbb{A}_{\R} } das Koeffizientenfeld der reell algebraischen Zahlen und'."\n".
                    '\lm{ \Gamma } die Wertgruppe (geordnete abelsche Gruppe mit üblicher Ordnung) unserer Hahn-Reihe ist.'."\n",
                      'Ausformuliert erhalten wir so:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  =  *\{  f = \sum_{k \in \Gamma}\!a_k \cdot \s^{k}  *|*  a_k \in \mathbb{A}_{\R},\;\mathrm{supp} f := *\{ k *|* a_k \neq 0 *\}  \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\qquad\;  \text{ ist wohlgeordnet}  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und damit erreichen wir unser Ziel einer ZFC-konformen Definition der Superial-Zahlen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Durch die Hahn-Reihe erhalten wir alle nötigen Eigenschaften', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Durch die Hahn-Reihen-Definition erhalten wir nun:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\bold{Addition:} koeffizientenweise.',
                        '\bold{Multiplikation:} Cauchy-Produkt\color{*Bearb}{(Verweis)} \\\\ \lm{ \displaystyle (f\!\ast\!g)(n) \;= \sum_{i + j = n} \! a_i \cdot b_j } \\\ (die Summe ist endlich, weil eine wohltgeordnete Menge keine unendliche absteigende Kette besitzt).',
                        '\bold{Lexikographische Ordnung:}\color{*Bearb}{(Verweis)} \\\ \lm{ 0 < f < g } gilt, wenn an der \italic{größten} Potenz \lm{ k } mit \lm{ a_k \neq b_k } der Koeffizienten­vergleich \lm{ a_k < b_k } in \lm{ \mathbb{A}_{\R} } zutrifft. Damit ist \lm{ s > n } für jedes endliche \lm{ n \in \mathbb{N} } und \lm{ \s^{-1} } infinitesimal klein.',
                        '\bold{Feld­axiome:} Die übliche Hahn-Reihen-Argumentation zeigt, dass \lm{ \mathbb{S} } ein geordneter Körper ist.',
                        '\bold{Division:} Polynomdivision\color{*Bearb}{(Verweis)}.',
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'Zusammenfassung und Rückübertragung der geklärten Eigenschaften', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Zusammenfassend können wir sagen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\lm{ \s } wird nur symbolisch eingeführt,',
                        '„unendlich viele Faktoren“ werden über Bewertungen beziehungsweise Supports ausgedrückt, in einer streng mengentheoretischen Form,',
                        'sodass alle Beteiligten Mengen bleiben,',
                        'wodurch wir vollständige ZFC-Konformität erhalten.',
                    ))),
                  array( 'text', array( text => array(
                    'Darüber ist es uns tatsächlich gelungen \lm{ \mathbb{S} } als Menge zu definieren.'."\n".
                    'Und wir kommen jetzt in die komfortable Lage, diese Eigenschaften zurückübertragen zu können.'."\n",
                      '„\lm{ \s = \prod_{\forall p \in \mathbb{P}} p^{ω} }“ ist als bildhafte Intuition prima, aber alleine formal nicht genau genug.'."\n".
                    'Die Hahn-Reihen-Definition gibt dieselbe \lm{ p }-adische Wirkung wieder, liefert aber gleichzeitig Addition, Subtraktion, Ordnung – kurz:'."\n".
                    'den vollständigen Zahlkörper \lm{ \mathbb{S} }, den die Superial-Analysis braucht.'."\n",
                      'Wenn wir die Definition nun ZFC-konform aufziehen, dann wird andersherum ein Schuh draus und wir definieren'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ZFC', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)^{ω}  :=  \s  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    'wodurch alle zuvor auf der Basis von \lm{ \s } gemachten Definitionen nun formal sicher sind.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:Vortext:X', text =>
                      
                'XXX', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Home'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


          <!  • X  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:ZFC-Modellkonstruktion:X',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:ZFC-Modellkonstruktion', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Parität}',
                    // '• Nicht nur gleiche Mächtigkeit von geraden und ungeraden Zahlen, sondern hier sogar gleiche kombinatorische Anzahl von geraden und ungeraden Zahlen.\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:ParitaetMathematik:2021}.}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:ZFC-Modellkonstruktion:X:X', text =>
                      
                'XXX', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Home'),
                    )),
              )
          ); */ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
