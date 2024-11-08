<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Ueberrationalitaetsvermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Verbesserungen der Seite}',
                    // '• Nach dem Beweis der \italic{\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}} die Menge der Koeffizienten der Superial-Zahlen von den rationalen Zahlen \lm{ \mathbb{Q} } zu den algebraischen Koeffizienten \lm{ \mathbb{A}_{\S} } ändern.',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n",
                      '\jumpname{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Wurzeln aus Polynomen} \\\\'."\n".
                  '\cond{Elliptische Integrale und ähnliche algebraische Werte} \\\\'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n",
                      'Nach allem, was ich über algebraische Zahlen herausfinden kann, sind die realwertigen Lösungen'."\n".
                    'der Nullstellen von Polynomen entweder Radikale\color{*Bearb}{(Verweis)}, also durch bereits'."\n".
                    'oben betrachtete Wurzelausdrücke darstellbar, oder es sind elliptische Integrale\color{*Bearb}{(Verweis)},'."\n".
                    'für die Nullstellen von Polynomen 5. oder höheren Grades.\color{*Bearb}{(Verweis)}'."\n",
                      'Elliptische Integrale sind Integrale über Wurzeln aus Polynomen, also unendliche Summen'."\n".
                    'über Wurzeln aus Polynomen.'."\n".
                    'Da die Ausdrücke der Polynome jedes Summanden damit algebraische Radikale oder gegebenenfalls wieder endliche oder unendliche Summen'."\n".
                    'algebraischer Radikale sind, die gegen einen endlichen Wert konvergieren, bleiben es doch Summen algebraischer Radikale.'."\n",
                      'Summen algebraischer Radikale, ob endliche oder unendliche, die zu endlichen Werten konvergieren,'."\n".
                    'verhalten sich wie im vorstehenden Abschnitt \italic{\jumpname{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:Summen-von-Wurzeln}}'."\n".
                    'beschrieben und sind damit im Produkt mit der superialen Basis \lm{ \s } natürliche Superial-Zahlen'."\n".
                    'die summiert wieder ebensolche ergeben.'."\n",
                      'Wie allgemein dies gilt, können wir an einem Beispiel beobachten.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Als Beispiel betrachten wir als erstes das allgemeine elliptische Integral der I. Art in der Jacobi-Form:\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:ElliptischeIntegrale:2024}, Vollständige elliptische Integrale, Definition der vollständigen elliptischen Integrale.}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( 0 < k < 1 *)  *[  \int_{0}^{1} {\frac { \mathrm{d} x }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } }}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Nach der Definition eines Integrals mit Superial-Zahlen als Summe, nach Kapitel \italic{\jumpname{OM:SupNum:Ableitungen-Integrale:Integration}},'."\n".
                      'entspricht dies:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall k \in \mathbb{A}_{\R} *) *( 0 < k < 1 *) \\\ \qquad\quad\;\;\;\,  *[  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { 1 }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } }} *〉  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Nehmen wir an, dass dieses Integral im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { 1 }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } }} *〉*) \cdot \s  ?\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Ausmultiplizieren'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { \s }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } }} *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { 1 }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } \cdot \frac{ 1 }{ \s } }} *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { 1 }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) \cdot \frac{ 1 }{ \s^{2} } } }} *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 \sqrt[-2]{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈  *( *( 1 - k^{2} x^{2} *) - x^{2} *( 1 - k^{2} x^{2} *) *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈  *( *( 1 - k^{2} x^{2} *) - *( x^{2} - k^{2} x^{4} *) *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( 1 - k^{2} x^{2} - x^{2} + k^{2} x^{4} *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( 1 - *( k^{2} - 1 *) x^{2} + k^{2} x^{4} *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( k^{2} x^{4} - *( k^{2} - 1 *) x^{2} + 1 *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  \;\;,  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( *( k^{2} x^{4} - *( k^{2} - 1 *) x^{2} + 1 *) \cdot \frac{ 1 }{ \s^{2} } *)^{\frac{ 1 }{ -2 }} *〉  ?\in  \mathbb{S}_{N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'wobei diese Summe sich insofern plausibel in die Fundierung der Superial-Zahlen einfügt, als dass ihre'."\n".
                      'zählende Variable ihre Werte per Definition „nur“ aus den möglichen und sinnvollen Superial-Zahlen schöpft.'."\n".
                      'Das bedeutet, dass die Koeffizienten der Superial-Zahlen der zählenden Variable auch Realanteile der algebraischen Zahlen'."\n".
                      'sind und dadurch die summierten Ausdrücke wieder Realanteile algebraischer Zahlen ergeben.'."\n".
                      'Dies ist in sich selbst plausibel.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Nun ist es so, dass die Definition der Ableitung und des Integrals per Superial-Zahlen mit der superialen'."\n".
                      'Basis \lm{ \s } die Besonderheit, dass die aktual unendlichen Anteile bei der Ableitung'."\n".
                      'von rein endlichen Funktionen nicht verschwinden.'."\n".
                      'Dagegen müssen bei der Integration aktual unendliche Anteile hinzugefügt werden, um rein endliche Funktionen zu erhalten.'."\n".
                      'Dies bedeutet, wir müssen die Formel modifizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( k^{2} x^{4} - *( k^{2} - 1 *) x^{2} + 1 *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  f(x) = x^{5}  \Rightarrow  f\'(x) =  *〈 5 x^{4} *〉.*〈 10 x^{3} *〉*〈 10 x^{2} *〉*〈 5 x *〉*〈 1 *〉  }'),
                      array( display => 'on',  latex => '{  f(x) = x^{3}  \Rightarrow  f\'(x) =  *〈 3 x^{2} *〉.*〈 3 x *〉*〈 1 *〉  }'),
                      array( display => 'on',  latex => '{  f(x) = x  \Rightarrow  f\'(x) =  1  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Da alle obigen Summanden ganze Superial-Zahlen sind'."\n".
                      '\\\\ \color{*Bearb}{(Wie gehen wir hier damit um, dass \lm{ x } in der Integralsumme auch superial kleine Anteile enthalten kann? Werden die hier eh zu endlichen ganzen Zahlen? Bei \lm{ x^{2} } wohl eher nicht. Oder können wir das Integral oben so definieren, dass es passt? Oder heben sich die superial kleinen Anteile erst beim Summieren auf?)}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) *)^{\frac{ 1 }{ -2 }} \cdot \s  \in  \mathbb{S}_{Z}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\color{*Bearb}{(In Arbeit …)} und die Summe zweier ganzer Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Alg', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }} \cdot \s + n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'unter den obigen Bedingungen, immer eine natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)} So sind dann auch algebraische Zahlen aus Summen zweier oder mehrerer Wurzeln, oder ihrer jeweiligen Kehrwerte,'."\n".
                    'als Faktoren der superialen Basis \lm{ \s } natürliche Superial-Zahlen möglich.'."\n",
                      '\color{*Bearb}{(In Arbeit …)} Damit haben wir für alle irrationalen algebraischen Koeffizienten durch Beweis überprüft,'."\n".
                    'dass ihre Produkte mit der superialen Basis \lm{ \s } zu den natürlichen Superial-Zahlen gehören.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


          <!  • X  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen:X',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen', type => 'back'),
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
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen:X'),
                    )),
              )
          ); */ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
