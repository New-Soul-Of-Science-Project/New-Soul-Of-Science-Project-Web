<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Ueberrationalitaetsvermutung'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Primzahlprodukt-Vermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Idee, mich damit zu beschäftigen, ob irrationale Wurzeln der Form \lm{ \sqrt[x]{ n } } in irgendeiner Weise durch Brüche'."\n".
                    'aktual unendlicher ganzer Zahlen darstellbar sind, kam ich durch meine Beschäftigung mit den Koeffizienten der Superial-Zahlen.'."\n".
                    'Denn es stellte sich heraus, dass die Superial-Zahlen nur dann für Integrale nutzbar sind, wenn jeder Koeffizient \lm{ a }'."\n".
                    'im Produkt mit der superialen Basis \lm{ \s } eine aktual unendliche ganze Zahl ergibt.'."\n".
                    'Hiernach steht also die Frage im Raum, für welche endlichen Zahlen dies gilt.'."\n".
                    'Im Detail beschäftigen wir uns damit im Abschnitt \italic{\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}}.'."\n",
                      /*%! 'Auf dieser Seite soll es nun um den Beweis gehen, dass die Koeffizienten der algebraischen Zahlen, die durch Radikale darstellbar sind,'."\n".
                    'auch Koeffizienten der Superial-Zahlen sind.'."\n".
                    'Sie müssen also alle im Produkt mit der superialen Basis \lm{ \s } aktual unendliche ganze Zahl sein.'."\n", */
                      'Nachfolgend geht es nun aber ausschließlich darum zu zeigen, dass irrationale Wurzeln tatsächlich durch'."\n".
                    'Brüche aktual unendlicher ganzer Zahlen darstellbar sind.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:X', text =>
                      
                'Beweis – Wurzel aus Zwei ist keine rationale Zahl, also irrational', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um in die Thematik einzusteigen und zu lernen, worum es geht und was die Eigenschaften der irrationalen Koeffizienten der algebraischen Zahlen'."\n".
                    'bezüglich ihrer Darstellung durch Brüche ganzer Zahlen sind, schauen wir uns hier einmal exemplarisch'."\n".
                    'den Widerspruchsbeweis an, der zeigt, dass die Wurzel aus Zwei \lm{ \sqrt{2} } keine rationale Zahl ist, sondern eine irrationale Zahl.'."\n",
                      'Als Impuls gebende Einstimmung hier vorab ein Video dazu, wenn du Lust darauf hast: \jump[https://www.youtube.com/watch?v=M5OeQ-l6a60][]{}{Daniel Jung — Beweis, dass Wurzel aus 2 nicht rational, sondern irrational ist, indirekte Beweisführung}.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Eingangs schauen wir uns an, wie wir die Wurzel aus Zwei durch eine Potenz von \lm{ 2 }'."\n".
                      'darstellen können:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  =  \pm 2^{\frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *| \sqrt{2} |*  =  2^{\frac{ 1 }{ 2 }}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Sei die Wurzel aus Zwei, hier dargestellt als halbe Potenz von Zwei, als rationaler Bruch,'."\n".
                      'also als Bruch aus endlichen natürlichen Zahlen, darstellbar:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists a \in \mathbb{N} \land b \in \mathbb{N}^{+} *)  *[  2^{\frac{ 1 }{ 2 }}  =  \frac{ a }{ b }  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Dann ist klar, dass es für diesen Bruch einen Nenner als auch einen Zähler geben muss, die teilerfremd sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \exists *( a \perp b  *)  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'denn ein rationaler Bruch lässt bis auf einen kleinsten Nenner und Zähler kürzen,'."\n".
                      'bis sie keine gemeinsamen Primfaktoren mehr haben.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Die Ausgangsbedingung ist nun äquivalent mit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }}  =  \frac{ a }{ b }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2  =  \frac{ a^{2} }{ b^{2} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2 \cdot b^{2}  =  a^{2}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Zwei-mal-b-Quadrat-gleich-a-Quadrat', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Zwei-mal-b-Quadrat-gleich-a-Quadrat}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'woraus wir direkt erkennen, wenn \lm{ b } keine \lm{ 2 } als Primfaktor enthält, dass \lm{ a^{2} } durch \lm{ 2^{2} = 4 } teilbar sein muss,'."\n".
                      'denn ein Quadrat kann eine Primzahl nicht in einfacher Potenz enthalten:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  2^{1} \mid a^{2}  \Leftrightarrow  2 \mid a^{2}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{1} \mid a  \Leftrightarrow  2 \mid a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{2} \mid a^{2}  \Leftrightarrow  4 \mid a^{2}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Aus der gleichen, abermals angewandten Formel erkennen wir aber auch,'."\n".
                      'dass dann ebenso \lm{ b^{2} } durch \lm{ 2^{2} = 4 } teilbar sein muss:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2 \cdot b^{2}  =  a^{2}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Zwei-mal-b-Quadrat-gleich-a-Quadrat}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Denn, wenn in \lm{ a^{2} } nun \lm{ 2^{2} = 4 } steckt,'."\n".
                      'dann muss \lm{ \frac{ 2^{2} }{ 2 } = 2^{1} } in \lm{ b^{2} } enthalten sein und damit auch wieder \lm{ 2^{2} = 4 }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  2^{1} \mid b^{2}  \Leftrightarrow  2 \mid b^{2}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{1} \mid b  \Leftrightarrow  2 \mid b  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{2} \mid b^{2}  \Leftrightarrow  4 \mid b^{2}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Dann erkennen wir weiterhin, dass \lm{ a^{2} } durch \lm{ 2^{3} = 8 } und schließlich durch \lm{ 2^{6} = 64 } teilbar sein muss:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2 \cdot b^{2}  =  a^{2}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Zwei-mal-b-Quadrat-gleich-a-Quadrat}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  2^{3} \mid a^{2}  \Leftrightarrow  8 \mid a^{2}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{3} \mid a  \Leftrightarrow  8 \mid a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{6} \mid a^{2}  \Leftrightarrow  64 \mid a^{2}  }'),
                      array( display => 'on',  latex => '{  \vdots  }'),
                      array( display => 'on',  latex => '{  2 \cdot b^{2}  =  a^{2}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Zwei-mal-b-Quadrat-gleich-a-Quadrat}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall x \in \mathbb{N} *)  *[  2^{x} \mid a  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall x \in \mathbb{N} *)  *[  2^{x} \mid b  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Und immer so fort, für alle endlichen ganzen Potenzen von Zwei – \lm{ 2^{x} }.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Daraus folgt dann, dass für all diese endlichen Exponenten keine Teilerfremdheit existiert:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \lnot *( a \perp b *)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \lnot *( \frac{ a }{ 2 } \perp \frac{ b }{ 2 } *)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \lnot *( \frac{ a }{ 4 } \perp \frac{ b }{ 4 } *)  }'),
                      array( display => 'on',  latex => '{  \vdots  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall x \in \mathbb{N} *)  *[  \lnot *( \frac{ a }{ 2^{x} } \perp \frac{ b }{ 2^{x} } *)  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a, x \in \mathbb{N} *) *( \forall b \in \mathbb{N}^{+} *)  *[  \nexists *( \frac{ a }{ 2^{x} } \perp \frac{ b }{ 2^{x} } *)  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Dies seht im Widerspruch zu der Eingangsfeststellung, dass es für den gesuchten Bruch – aus endlichen natürlichen Zahlen – einen Nenner und einen Zähler geben muss, die teilerfremd sind.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Aufgrund des Widerspruchs also können wir schließen, dass es keinen rationalen Bruch mit endlichem ganzen Nenner und Zähler gibt, der die Wurzel aus Zwei darstellen kann'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists a \in \mathbb{N} \land b \in \mathbb{N}^{+} *)  *[  2^{\frac{ 1 }{ 2 }}  =  \frac{ a }{ b }  *]  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Doch unser Beweis hilft uns glücklicherweise dabei zu verstehen, wie ein Bruch ganzer Zahlen beschaffen sein muss, der die'."\n".
                    'Wurzel aus Zwei dann doch darstellen kann.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:X', text =>
                      
                'Beweis der Überrationalitätsvermutung für die Wurzel aus Zwei', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'So verstanden und allgemeiner ausgedrückt, ergibt sich die Struktur der Lösung wie folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall g \in \mathbb{N}_{\infty} *) *( \forall i \in \mathbb{N} *) *( i < g *)  *[  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{\frac{ 1 }{ 2 }} \cdot 2^{g} }{ 2^{g} }  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der obige Widerspruchsbeweis erzeugt eine Lösung des Problems darüber, dass Nenner und Zähler immer wieder'."\n".
                    'durch \lm{ 2 } teilbar sein müssen.'."\n".
                    'Und die Anzahl der Teilbarkeit muss sich im Aktual-Unendlichen befinden.'."\n".
                    'Damit lässt sich die Anzahl der Teilbarkeit durch die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    'normieren.'."\n",
                      'Für die vollständige Induktion verwenden wir das \jump{OM:BiOrd:Einleitung:Vortext:Ordinalzahlen}{Symbol \lm{ ω }} mit dem ihm entsprechenden aktual'."\n".
                    'unendlich großen Wert.'."\n".
                    'Und \lm{ ω } setzen wir nun in die vorstehende Formel ein, womit die Bedingung der fortlaufenden Teilbarkeit erfüllt ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{\frac{ 1 }{ 2 }} \cdot 2^{ω} }{ 2^{ω} }  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Wurzel-Zwei-mal-Zwei-hoch-omega-durch-Zwei-hoch-omega', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Wurzel-Zwei-mal-Zwei-hoch-omega-durch-Zwei-hoch-omega}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{ω + \frac{ 1 }{ 2 }} }{ 2^{ω} }  \;\; ,  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Zwei-hoch-omega-plus-Einhalb-durch-Zwei-hoch-omega', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-gleich-Zwei-hoch-omega-plus-Einhalb-durch-Zwei-hoch-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'wobei \lm{ ω } ein transfiniter Wert ist und nach unseren Axiomen gilt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall q \in \mathbb{Q} \setminus *\{ 0 *\} *)  *[  ω + q  :\neq  ω  *]  \;\; .  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-omega-plus-q-ungleich-omega', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-omega-plus-q-ungleich-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Hierdurch können wir nun beliebig endlich oft – und damit potenziell endlos – die Zwei im Bruch kürzen.'."\n",
                      'Im Nenner erhalten wir nun offensichtlich eine ganze Zahl, weil es sich um eine unendliche ganze Potenz einer endlichen ganzen Zahl handelt:'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{ω}  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Aber im Zähler können wir uns dessen noch nicht sicher sein,'."\n".
                    'da er, wie wir sehen, in einen Anteil zerlegt werden kann,'."\n".
                    'der dem Nenner entspricht und der übrige Faktor ist genau die irrationale Wurzel aus Zwei,'."\n".
                    'die ein wesentlicher Teil unseres Problems ist, wofür wir eine Lösung suchen.'."\n",
                      'Führt das also wirklich zur Lösung unseres Problems, wenn wir einfach nicht mehr darauf bestehen,'."\n".
                    'dass Nenner und Zähler endliche Zahlen sein müssen?'."\n",
                      'Eine auf den ersten Blick nicht gleich realistisch erscheinende Möglichkeit ist,'."\n".
                    'das es ja durchaus sein könnte, dass der Zähler ansich bereits so wie er ist, genau wie der Nenner, eine ganze Zahl darstellt.'."\n",
                      'Ich komme darauf, weil uns der obige Widerspruchsbeweis einen Hinweis darauf gibt,'."\n".
                    'dass die Darstellung der Wurzel aus Zwei mit einem Bruch aus zwei ganzen Zahlen nur dann möglich ist, wenn beliebig endlich oft'."\n".
                    '– und damit potenziell endlos – Zweien gekürzt werden können.'."\n".
                    'Die Lösung könnte also sein, dass eine aktual unendlich große natürliche Potenz von Zwei multipliziert mit der Wurzel aus Zwei'."\n".
                    'einfach schon eine ganze unendlich große Zahl ergibt.'."\n".
                    'Denn so erhalten wir, in einem Exponenten zusammengefasst, einen unendlich großen ganzen Exponenten plus Einhalb.'."\n".
                    'Und anders als das bei endlichen Exponenten, die rationale Anteile in der Summe haben, der Fall ist, ergibt unser Exponent direkt eine ganze Zahl.'."\n",
                      'Der Widerspruchsbeweis enthält eine Vorschrift, wie die Lösung aussieht:'."\n".
                    'Auch der so konstruierte Zähler des Bruchs muss eine unendlich große ganze Zahl sein, wie der Beweis zeigt, eben einfach schon dadurch, dass er beliebig endlich oft durch \lm{ 2 } teilbar ist.'."\n".
                    'Mit anderen Worten, der Faktor \lm{ 2^{ω} } vor \lm{ 2^{\frac{ 1 }{ 2 }} } macht, nach unserem Beweis, aus der Wurzel aus Zwei'."\n".
                    'eine ganze unendlich große Zahl:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }} \cdot 2^{ω}  \in  \mathbb{N}_{\infty}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-mal-2-hoch-omega-element-N-infinity', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-Wurzel-Zwei-mal-2-hoch-omega-element-N-infinity}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{ω + \frac{ 1 }{ 2 }}  \in  \mathbb{N}_{\infty}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-2-hoch-omega+einhalb-element-N-infinity', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-2-hoch-omega+einhalb-element-N-infinity}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Darüber hinaus müssen der Nenner \lm{ b } und der Zähler \lm{ a } die im Beweis abgeleitete Bedingung erfüllen:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'In die Bedingung des Beweises'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2 \cdot b^{2}  =  a^{2}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unseren Lösungsansatz eingesetzt, führt zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a  =  2^{\frac{ 1 }{ 2 }} \cdot 2^{ω}  }'),
                      array( display => 'on',  latex => '{  b  =  2^{ω}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  2 \cdot *( 2^{ω} *)^{2}  =  *( 2^{\frac{ 1 }{ 2 }} \cdot 2^{ω} *)^{2}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  2 \cdot *( 2^{ω} *)^{2}  =  *( 2^{ω + \frac{ 1 }{ 2 }} *)^{2}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  2 \cdot 2^{2 ω}  =  2^{2 ω + 2 \frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{2 ω + 1}  =  2^{2 ω + 1}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'was zu zeigen war.'."\n",
                      '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Damit haben wir bewiesen, dass unsere Lösung die Wurzel aus Zwei als Bruch aus ganzen Zahlen darstellt,'."\n".
                    'wenn der Nenner und der Zähler unendlich groß, im Bereich der vollständigen Induktion, sind.'."\n",
                      'Für die \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:RadikaleSinnvolleKoeffizienten:Wurzel-aus-Zwei-und-natuerliche-Superial-Zahlen}{Wurzel aus Zwei im Zusammenhang mit den natürlichen Superial-Zahlen}'."\n".
                    'hat dies eine wichtige Bedeutung.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:X', text =>
                      
                'Beweis der Überrationalitätsvermutung', subline =>
                  'Erweiterung des Beweises auf alle algebraischen Koeffizienten, die irrationale Zahlen sind')),
                  array( 'text', array( text => array(
                    'Um nachfolgend den Widerspruchsbeweis für alle algebraischen irrationalen Koeffizienten'."\n".
                    'führen zu können, möchte ich eingangs einmal klären, was passiert, wenn es tatsächlich eine'."\n".
                    'Lösung für den vermeintlichen Widerspruchsbeweis gibt.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Rationale Wurzeln} \cond{— Wenn eine Wurzel eine rationale Zahl als Lösung hat} \\\\'."\n".
                    'Was passiert, wenn die Wurzel eine rationale Zahl als Lösung besitzt,'."\n".
                    'sie also nicht irrational ist.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Dazu stellen wir einmal fest, wie wir die \lm{ x }-te Wurzel aus \lm{ n } durch eine Potenz von \lm{ n }'."\n".
                      'beschreiben können:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt[x]{n}  =  \pm n^{\frac{ 1 }{ x }}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *| \sqrt[x]{n} |*  =  n^{\frac{ 1 }{ x }}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Sei die \lm{ x }-te Wurzel aus \lm{ n } als endlicher rationaler Bruch – aus endlichen natürlichen Zahlen – darstellbar:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists a \in \mathbb{N} \land b, n, x \in \mathbb{N}^{+} \land n, x \geq 2 *)  *[  n^{\frac{ 1 }{ x }}  =  \frac{ a }{ b }  *]  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-te-Wurzel-x-ist-a-durch-b-im-Endlichen', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-te-Wurzel-x-ist-a-durch-b-im-Endlichen}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Für den Fall, dass die Wurzel eine rationale Lösung hat, muss der Radikand unter der Wurzel \lm{ n }'."\n".
                      'von der Potenz des Wurzel Radix \lm{ x } sein:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( m \in \mathbb{Q} *)  *[  n^{\frac{ 1 }{ x }}  =  m  *]  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  *( n^{\frac{ 1 }{ x }} *)^{x}  =  m^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n  =  m^{x}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-ist-x-te-Potenz-von-m', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-ist-x-te-Potenz-von-m}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Die Ausgangsbedingung ist nun äquivalent mit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }}  =  \frac{ a }{ b }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n  =  \frac{ a^{x} }{ b^{x} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  m^{x}  =  \frac{ a^{x} }{ b^{x} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  m  =  \frac{ a }{ b }  \;\;;  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'damit existent und nicht im Widerspruch, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Auf die einzelnen Primfaktoren des Radikanden \lm{ n } bezogen bedeutet dies,'."\n".
                    'dass all ihre Potenzen ein natürliches Vielfaches des Radix \lm{ x } sein müssen,'."\n".
                    'weil \lm{ m } eine natürliche Zahl größer Null ist, die eine Primfaktorzerlegung besitzt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p_{i} \in \mathbb{P}(n) *) *( \forall j_{i} \in \mathbb{N} *)  *[  m  =  p_{1}^{j_{1}} \cdot p_{2}^{j_{2}} \cdot p_{3}^{j_{3}} \cdot p_{4}^{j_{4}} \cdot \cdots  *]  }'),
                      array( display => 'on',  latex => '{  n  =  m^{x}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-ist-x-te-Potenz-von-m}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  n  =  p_{1}^{j_{1} x} \cdot p_{2}^{j_{2} x} \cdot p_{3}^{j_{3} x} \cdot p_{4}^{j_{4} x} \cdot \cdots  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-ist-x-te-Potenz-der-Primfak-von-m', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-ist-x-te-Potenz-der-Primfak-von-m}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Erkenntnis wird im nachfolgenden Widerspruchsbeweis eine Rolle spielen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Irrationale Wurzeln} \cond{— Wenn es keine rationale Zahl als Lösung für eine Wurzel gibt} \\\\'."\n".
                    'Für alle \lm{ x }-ten Wurzeln aus \lm{ n }, bei denen \lm{ n } nicht die \lm{ x }-te Potenz einer natürlichen'."\n".
                    'Zahl \lm{ m } ist, gilt der folgende Widerspruchsbeweis und zeigt, dass deren \lm{ x }-ten Wurzeln'."\n".
                    'algebraische irrationale Zahlen sind.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Dazu schauen wir uns an, wie wir die \lm{ x }-te Wurzel aus \lm{ n } durch eine Potenz von \lm{ n }'."\n".
                      'beschreiben können:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt[x]{n}  =  \pm n^{\frac{ 1 }{ x }}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *| \sqrt[x]{n} |*  =  n^{\frac{ 1 }{ x }}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Sei die \lm{ x }-te Wurzel aus \lm{ n } als endlicher rationaler Bruch darstellbar – also als Bruch endlicher natürlicher Zahlen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists a \in \mathbb{N} \land b, n, x \in \mathbb{N}^{+} \land n, x \geq 2 *)  *[  n^{\frac{ 1 }{ x }}  =  \frac{ a }{ b }  *]  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-te-Wurzel-x-ist-a-durch-b-im-Endlichen}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Dann ist klar, dass es für diesen Bruch einen Nenner und einen Zähler geben muss, die teilerfremd sind:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \exists *( a \perp b  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Die Ausgangsbedingung ist nun äquivalent mit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }}  =  \frac{ a }{ b }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n  =  \frac{ a^{x} }{ b^{x} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n \cdot b^{x}  =  a^{x}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-mal-b-hoch-x-gleich-a-hoch-x', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-mal-b-hoch-x-gleich-a-hoch-x}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'woraus wir im Folgenden direkt erkennen können, wenn \lm{ b } nicht alle Primfaktoren von \lm{ n } enthält,'."\n".
                      'dass \lm{ a^{x} } durch \lm{ n } teilbar sein muss:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n \mid a^{x}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-teilt-a-hoch-x', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-teilt-a-hoch-x}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Weil wir es hier mit algebraischen irrationalen Wurzeln zu tun haben, ist nach den Formeln \jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-ist-x-te-Potenz-von-m} und \jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-ist-x-te-Potenz-der-Primfak-von-m}'."\n".
                      '\lm{ n } nicht die \lm{ x }-te Potenz einer natürlichen Zahl \lm{ m }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists m \in \mathbb{N}^{+} *)  *[  n  =  m^{x}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists n \in \mathbb{N}^{+} *) *( \forall p_{i} \in \mathbb{P}(n) *) *( \forall j_{i} \in \mathbb{N} *) \\\ \qquad\qquad\qquad\;\;\;  *[  n  =  p_{1}^{j_{1} x} \cdot p_{2}^{j_{2} x} \cdot p_{3}^{j_{3} x} \cdot p_{4}^{j_{4} x} \cdot \cdots  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Da für \lm{ n } aber eine Primfaktorzerlegung existieren muss'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( n \in \mathbb{N}^{+} *) *( \forall p_{i} \in \mathbb{P}(n) *) *( \forall k_{i} \in \mathbb{N} *) \\\ \qquad\quad\;\;  *[  n  =  p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots  *]  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-Primfaktoren-k_i', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-Primfaktoren-k_i}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'hat diese die Bedingung, dass mindestens eine der Potenzen \lm{ k_{i} } ihrer Primfaktoren nicht durch \lm{ x } teilbar sein darf:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \lnot *( x \mid k_{1} *) \lor \lnot *( x \mid k_{2} *) \lor \lnot *( x \mid k_{3} *) \lor \lnot *( x \mid k_{4} *) \lor \cdots  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Wegen Formel \jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-teilt-a-hoch-x} gilt nun auch'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots \mid a^{x}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'woraus dann'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots \mid a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n \mid a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x} \mid a^{x}  }'),
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:X',
                Title => '\small{Nebenrechnung …}',
                TitleVis => 'Nebenrechnung:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  a^{x}  =  n^{x} \cdot c_{a,1}  }'),
                    ))),

                    ))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'folgt, weil ja, wie eben festgestellt, eines der \lm{ k_{i} } nicht durch \lm{ x } teilbar ist.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Aus der obigen Ausgangsbedingung \jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-mal-b-hoch-x-gleich-a-hoch-x},'."\n".
                      'abermals angewandt, erkennen wir aber auch,'."\n".
                      'nach dem gleichen Argument, wie direkt zuvor, dass dann ebenso \lm{ b^{x} } durch \lm{ n^{x} } teilbar sein muss:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n \cdot b^{x}  =  a^{x}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-mal-b-hoch-x-gleich-a-hoch-x}', label_incr => false),
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:X',
                Title => '\small{Nebenrechnung …}',
                TitleVis => 'Nebenrechnung:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n \cdot b^{x}  =  n^{x} \cdot c_{a,1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  b^{x}  =  n^{x - 1} \cdot c_{a,1}  }'),
                    ))),

                    ))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und, weil ja schon ein \lm{ n } auf der Seite von \lm{ b^{x} } vorhanden ist, müssen wir bei der Teilbarkeit eines abziehen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{x - 1} \mid b^{x}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Wegen der Nichtteilbarkeit von \lm{ x } durch \lm{ x - 1 } ist dies äquivalent mit:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x - 1} \mid b  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *( n^{x - 1} *)^{x} \mid b^{x}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{*( x - 1 *) \cdot x} \mid b^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x^{2} - x} \mid b^{x}  }'),
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:X',
                Title => '\small{Nebenrechnung …}',
                TitleVis => 'Nebenrechnung:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  b^{x}  =  n^{x^{2} - x} \cdot c_{b,1}  }'),
                    ))),

                    ))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Wenn \lm{ b^{x} } durch \lm{ n^{x} } teilbar ist, dann folgt durch die Ausgangsbedingung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n \cdot b^{x}  =  a^{x}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-mal-b-hoch-x-gleich-a-hoch-x}', label_incr => false),
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:X',
                Title => '\small{Nebenrechnung …}',
                TitleVis => 'Nebenrechnung:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n \cdot n^{x^{2} - x} \cdot c_{b,1}  =  a^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x^{2} - x + 1} \cdot c_{b,1}  =  a^{x}  }'),
                    ))),

                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:X',
                Title => '\small{Experimentelle Rechnung …}',
                TitleVis => 'Experimentelle Rechnung:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x^{2} - x + 1} \cdot c_{b,1}  =  n^{x} \cdot c_{a,1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x^{2} - 2x + 1} \cdot c_{b,1}  =  c_{a,1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x^{2} - 2x + 1}  =  \frac{ c_{a,1} }{ c_{b,1} }  \;\;,  }'),
                    ))),

                    ))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'weil hier ja ein \lm{ n } zum \lm{ b^{x} } hinzukommt'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{x^{2} - x + 1} \mid a^{x}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und wegen der nicht Teilbarkeit von \lm{ x^{2} - x + 1 } durch \lm{ x }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x^{2} - x + 1} \mid a  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *( n^{x^{2} - x + 1} *)^{x} \mid a^{x}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{*( x^{2} - x + 1 *) \cdot x} \mid a^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x^{3} - x^{2} + x} \mid a^{x}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Und wieder weiter aus der Ausgangsbedingung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n \cdot b^{x}  =  a^{x}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-mal-b-hoch-x-gleich-a-hoch-x}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und, weil ja schon ein \lm{ n } auf der Seite von \lm{ b^{x} } vorhanden ist, folgt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{x^{3} - x^{2} + x - 1} \mid b^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x^{3} - x^{2} + x - 1} \mid b  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *( n^{x^{3} - x^{2} + x - 1} *)^{x} \mid b^{x}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{*( x^{3} - x^{2} + x - 1 *) \cdot x} \mid b^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x^{4} - x^{3} + x^{2} - x} \mid b^{x}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Und dann weiter'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n \cdot b^{x}  =  a^{x}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-mal-b-hoch-x-gleich-a-hoch-x}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{x^{4} - x^{3} + x^{2} - x + 1} \mid a^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x^{4} - x^{3} + x^{2} - x + 1} \mid a  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *( n^{x^{4} - x^{3} + x^{2} - x + 1} *)^{x} \mid a^{x}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{ *( x^{4} - x^{3} + x^{2} - x + 1 *) \cdot x} \mid a^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x^{5} - x^{4} + x^{3} - x^{2} + x} \mid a^{x}  }'),
                      array( display => 'on',  latex => '{  \vdots  }',
                                          label_text => '', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und immer so fort, bis zum Beweisschritt \lm{ r }, wobei ein Schritt immer für \lm{ a } und \lm{ b } gemeinsam gezählt wird:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall r \in \mathbb{N}^{+} *) *( t = 2 \cdot r - 1 *)  *[  n^{\sum_{ \forall i \in [ 1, t ]_{\mathbb{N}} } -1^{t - i} \cdot x^{i}} \mid a  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall r \in \mathbb{N}^{+} *) *( t = 2 \cdot r *)  *[  n^{\sum_{ \forall i \in [ 1, t ]_{\mathbb{N}} } -1^{t - i} \cdot x^{i}} \mid b  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Und immer so fort …'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'An dieser Stelle ist es aber auch einsichtig, dass \lm{ a } und \lm{ b }, wenn sie durch die entwickelten'."\n".
                      'Polynom-Potenzen von \lm{ n } teilbar sind, ebenso durch jede endliche kleinere positive ganzzahlige Potenz von \lm{ n } teilbar sein müssen.'."\n".
                      'Das bedeutet, aus unserer Ausgangsbedingung folgt die Teilbarkeit durch alle endlichen natürlichen Potenzen von \lm{ n }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n \cdot b^{x}  =  a^{x}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-mal-b-hoch-x-gleich-a-hoch-x}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall x \in \mathbb{N} *)  *[  n^{x} \mid a  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall x \in \mathbb{N} *)  *[  n^{x} \mid b  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Daraus folgt dann, dass für all diese endlichen Exponenten von \lm{ n } keine Teilerfremdheit existiert:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \lnot *( a \perp b *)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \lnot *( \frac{ a }{ n^{1} } \perp \frac{ b }{ n^{1} } *)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \lnot *( \frac{ a }{ n^{2} } \perp \frac{ b }{ n^{2} } *)  }'),
                      array( display => 'on',  latex => '{  \vdots  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in \mathbb{N} *) *( \forall b, n, x \in \mathbb{N}^{+} *) *( n, x \geq 2 *)  *[  \lnot *( \frac{ a }{ n^{x} } \perp \frac{ b }{ n^{x} } *)  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists a \in \mathbb{N} \land b, n, x \in \mathbb{N}^{+} \land n, x \geq 2 *)  *[  \frac{ a }{ n^{x} } \perp \frac{ b }{ n^{x} }  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Dies seht im Widerspruch zu der Eingangsfeststellung, dass es für den gesuchten Bruch – aus endlichen natürlichen Zahlen – einen Nenner und einen Zähler geben muss, die teilerfremd sind.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Aufgrund des Widerspruchs also können wir schließen, dass es für irrationale Wurzeln keinen rationalen Bruch mit endlichem ganzen Nenner und Zähler gibt'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists a \in \mathbb{N} \land b, n, x \in \mathbb{N}^{+} \land n, x \geq 2 *)  *[  n^{\frac{ 1 }{ x }}  =  \frac{ a }{ b }  *]  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Gleich zeitig zeigen wir mit dem Widerspruchsbeweis nun auch, wie die Lösung aussieht.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Irrationale Wurzeln} \cond{— Die Lösung} \\\\'."\n".
                    'Wollen wir eine Lösung finden, wie wir die \lm{ n }-te Wurzel aus \lm{ x } als Bruch darstellen können,'."\n".
                    'dann kommen wir durch den Widerspruchsbeweis zu dem Schluss:'."\n",
                      'Verzichten wir darauf, dass der Zähler \lm{ a } und der Nenner \lm{ b } endlich sein müssen und wir akzeptieren,'."\n".
                    'dass die beiden, also der Bruch, immer weiter zu kürzen sind, nur so häufig, dass Nenner und Zähler nicht endlich werden,'."\n".
                    'dann erhalten wir mögliche Lösungen von Bruchen für die Wurzeln, bei denen sowohl der Nenner als auch der Zähler ganze Zahlen sind.'."\n",
                      'Gehen wir ans Werk formulieren dies.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Setzen wir die Entwicklung des Zählers \lm{ a } und des Nenners \lm{ b } des Bruchs oben fort, bis zur vollständigen Induktion,'."\n".
                      'dann kommen wir zu folgendem Ausdruck'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( t = 2 \cdot ω - 1 *)  *[  n^{\sum_{ \forall i \in [ 1, t ]_{\mathbb{N}} } -1^{t - i} \cdot x^{i}} \mid a  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( t = 2 \cdot ω *)  *[  n^{\sum_{ \forall i \in [ 1, t ]_{\mathbb{N}} } -1^{t - i} \cdot x^{i}} \mid b  *]  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'in dem wir nun die Entwicklungsschritte \lm{ r } durch die vollständigen Induktion \lm{ ω } ersetzt haben.'."\n".
                      'Direkt \lm{ ω } in die Summe eingesetzt, anstatt durch \lm{ t } ausgedrückt, und die Summe beispielhaft'."\n".
                      'ausgeschrieben erhalten wir'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{ x^{ 2 ω - 1 } - x^{ 2 ω - 2 } + x^{ 2 ω - 3 } - \cdots + x } \mid a  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{ x^{ 2 ω } - x^{ 2 ω - 1 } + x^{ 2 ω - 2 } - x^{ 2 ω - 3 } + \cdots - x } \mid b  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'von wo aus wir weiter vorangehen können.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir bauen im Grunde eine „Leiter bis in den Himmel“ des Unendlichen und kommen je nach der \lm{ x }-ten Wurzel aus \lm{ n }'."\n".
                    'dort an einer bestimmten Stelle an oder heraus.'."\n".
                    'Dies bedeutet aber nicht, dass nur die Ankunftsorte die jeweilige Lösung darstellen.'."\n".
                    'Es bedeutet nur, dass diese Orte Ausstiegspunkte funktionierender Leitern sind.'."\n",
                      'Denn schon unsere im Widerspruchsbeweis gefundene Bedingung fordert, dass es unendlich viele Lösungen gibt:'."\n".
                    'Wir können nämlich den Bruch beliebig oft kürzen, solange Nenner und Zähler nicht endlich werden;'."\n".
                    'solange es nämlich keinen kleinsten Bruch geben kann, der nicht weiter zu kürzen ist.'."\n".
                    'Bleiben wir nach unserer Konstruktion mit Nenner und Zähler so im Unendlichen, dass alle Primzahlen'."\n".
                    'der Primfaktorenzerlegung des Radikand \lm{ n } unter der Wurzel unendlich große Potenzen behalten,'."\n".
                    'dann ist diese Bedingung ja erfüllt.'."\n",
                      'Was wissen wir also bisher denn sicher über \lm{ a } und \lm{ b }?'."\n",
                      'Wir können im Moment sicher sagen, dass \lm{ a } um den Faktor der \lm{ x }-ten Wurzel aus \lm{ n }'."\n".
                    'größer ist als \lm{ b }.'."\n".
                    'Und wir können sagen, dass sowohl \lm{ a } als auch \lm{ b } aktual unendlich oft durch \lm{ n }'."\n".
                    'teilbar sein müssen.'."\n".
                    'Nehmen wir probeweise einmal an, dies seien alle Eigenschaften, die nötig sind, und definieren damit'."\n".
                    'unseren Zähler und Nenner unserer Ausgangsbedingung.'."\n",
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei \lm{ g } ein aktual unendlich großer ganzer Exponent von \lm{ n }, der der Potenz die Eigenschaft gibt,'."\n".
                      'dass sie beliebig endlich oft durch \lm{ n } teilbar ist, ohne eine endliche Potenz zu werden'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall i \in \mathbb{N} *) *( \forall g \in \mathbb{N}_{\infty} *)  *[  i < g  *]  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-g-aktual-unendlich-ganz', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-g-aktual-unendlich-ganz}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'dann definieren wir \lm{ b } und \lm{ a } nun, indem wir die Ausgangsbedingung \jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-te-Wurzel-x-ist-a-durch-b-im-Endlichen}'."\n".
                      'wie gerade beschrieben abwandeln:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a  =  n^{g} \cdot n^{\frac{ 1 }{ x }}  }'),
                      array( display => 'on',  latex => '{  b  =  n^{g}  }'),
                      array( display => 'on',  latex => '{  *( \exists a, b \in \mathbb{N}_{\infty} \land n, x \in \mathbb{N}^{+} \land n, x \geq 2 *)  *[  n^{\frac{ 1 }{ x }}  =  \frac{ a }{ b }  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ n^{g} \cdot n^{\frac{ 1 }{ x }} }{ n^{g} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ n^{g + \frac{ 1 }{ x }} }{ n^{g} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  n^{g + \frac{ 1 }{ x } - g}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  n^{\frac{ 1 }{ x }}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Hier erkennen wir jetzt, durch vollständiges Kürzen des Bruchs:'."\n".
                      'Diese beiden Bedingungen beschreiben \lm{ a } und \lm{ b } vollständig.'."\n".
                      'Es kann keine weiteren Faktoren im Nenner geben, die nicht auch im Zähler hinzukommen müssten'."\n".
                      'und daher immer gekürzt werden können.'."\n".
                      'Sowohl der Nenner \lm{ b } als auch der Zähler \lm{ a } sind ganze Zahlen,'."\n".
                      'wie wir ja schon im Widerspruchsbeweis vorausgesetzt haben,'."\n".
                      'der uns ja gerade über diese Bedingung dann zur „Himmelsleiter“ geführt hat:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{g}  \in  \mathbb{N}_{\infty}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-in-natuerlich-infinit', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-in-natuerlich-infinit}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ x }} \cdot n^{g}  \in  \mathbb{N}_{\infty}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-mal-n-hoch-eins-durch-x-in-natuerlich-infinit', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-mal-n-hoch-eins-durch-x-in-natuerlich-infinit}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{g + \frac{ 1 }{ x }}  \in  \mathbb{N}_{\infty}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-plus-eins-durch-x-in-natuerlich-infinit', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-plus-eins-durch-x-in-natuerlich-infinit}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall z \in \mathbb{Z} *)  *[  n^{g + z + \frac{ 1 }{ x }}  \in  \mathbb{N}_{\infty}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'So sind wir zur Lösungsmenge gekommen, die wir finden wollten.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Auch hier können wir, wie im Anfangs betrachteten speziellen Fall \lm{ 2^{ω} },'."\n".
                      'mit Hilfe der vollständigen Induktion \lm{ ω } normieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{ω}  \in  \mathbb{N}_{\infty}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-omega-in-natuerlich-infinit', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-omega-in-natuerlich-infinit}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ x }} \cdot n^{ω}  \in  \mathbb{N}_{\infty}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-omega-mal-n-hoch-eins-durch-x-in-natuerlich-infinit', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-omega-mal-n-hoch-eins-durch-x-in-natuerlich-infinit}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{ω + \frac{ 1 }{ x }}  \in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ x }}  =  \boxed{\;\;  \frac{ n^{\frac{ 1 }{ x }} \cdot n^{ω} }{ n^{ω} }  \;\;}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-eins-durch-x-gleich-n-hoch-omega-mal-n-hoch-eins-durch-x-durch-n-hoch-omega', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-eins-durch-x-gleich-n-hoch-omega-mal-n-hoch-eins-durch-x-durch-n-hoch-omega}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \boxed{\;\;  \frac{ n^{ω + \frac{ 1 }{ x }} }{ n^{ω} }  \;\;}  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-eins-durch-x-gleich-n-hoch-omega-plus-n-hoch-eins-durch-x-durch-n-hoch-omega', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-eins-durch-x-gleich-n-hoch-omega-plus-n-hoch-eins-durch-x-durch-n-hoch-omega}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Dabei ist zu beachten, dass \lm{ n } selber in seiner Primfaktorzerlegung schon Potenzen'."\n".
                      'von Primzahlen enthalten kann, die größer als Eins sind.'."\n".
                      'Diese werden hier dann nochmals mit \lm{ ω } potenziert.'."\n".
                      'Aus diesem Grund ist in diesem allgemeinen Fall die mögliche Normierung nicht unbedingt am Ende.'."\n".
                      'Mit einer zusätzlichen Möglichkeit der Normierung, die die effektiv notwendige Größe der Potenzen der Primzahlen'."\n".
                      'im aktual unendlichen Faktor betrifft, um eine aktual unendlich große ganze Zahl zu erreichen,'."\n".
                      'beschäftigen wir uns im Abschnitt \italic{\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}}.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Die algebraischen irrationalen Koeffizienten gehören zu den \italic{überrationalen Zahlen}.'."\n",
                      'Dass ein Produkt einer bestimmten riesigen Zahl mit einer dazu passenden irrationalen Wurzel'."\n".
                    'immer noch eine ganze Zahl ergibt, ist etwas sehr bemerkenswertes.'."\n".
                    'Wir erhalten eine aktual unendlich große Potenz, mit einem rationalen Summanden, die trotzdem eine ganze Zahl ergibt.'."\n",
                      'Dies ist eine große Erkenntnis der Mathematik, die ich bisher noch nicht gesehen habe.'."\n".
                    'Sie eröffnet eine neue Welt, in der ein großes Entdeckungspotenzial liegt.'."\n",
                    ''))),
                  /*%! array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Ueberrationale-Zahlen-natuerliche-SZ', text =>
                      
                'XXX Überrationale Zahlen und die natürlichen Superial-Zahlen', subline =>
                  'Die \lm{ x }-ten Wurzeln aus \lm{ n } sind Superial-Zahlen')),

                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    '• Ein viel einfacherer Beweis, dass einfache Potenzen einer natürlichen Zahl hoch \lm{ ω } auch irrationale Wurzeln aus einer natürlichen Zahl mit mehrfachen Potenzen zu einer ganzen Zahl machen, finden wir im Abschnitt \italic{\jumpname{OM:SupNum:Arithmetische-Struktur-Geometrie:Vortext:Dies-gilt-fuer-alle-Wurzeln}}.',
                    ))),

                  array( 'text', array( text => array(
                    'Nun möchte ich herausarbeiten, dass die gerade gefundene Lösung der Darstellung \lm{ x }-ter Wurzeln aus \lm{ n }'."\n".
                    'durch die gefundenen \italic{überrationalen Brüche} genau zur Struktur der Superial-Zahlen passt.'."\n".
                    'Wir werden gleich erkennen, dass die zunächst auf rationale Koeffizienten zugeschnitten erscheinenden Superial-Zahlen'."\n".
                    'genauso gut auch zu den überrationalen Koeffizienten passen.'."\n",
                      'So erweitern sich nachfolgend die Koeffizienten der Superial-Zahlen von rationalen Brüchen auch auf'."\n".
                    'überrationale.'."\n",
                      'Wie oben festgestellt, sind wir in der Wahl der aktual unendlichen großen ganzen Potenz \lm{ g } von \lm{ n } frei,'."\n".
                    'um die überrationalen Brüche der \lm{ x }-ten Wurzeln aus \lm{ n } darzustellen,'."\n".
                    'solange \lm{ g } größer bleibt, als jede endliche natürliche Zahl – also solange \lm{ g } nicht endlich wird.'."\n".
                    'So können wir für \lm{ g } auch die vollständige Induktion \lm{ ω } einsetzen'."\n".
                    'und damit den Exponenten des Primzahl-Flächenprodukts unserer superialen Basis \lm{ \s } verwenden.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei \lm{ ω } der Exponent von \lm{ n }, um die \lm{ x }-te Wurzel aus \lm{ n } als'."\n".
                      'überrationalen Bruch darzustellen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }}  =  \frac{ n^{\frac{ 1 }{ x }} \cdot n^{ω} }{ n^{ω} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ n^{ω + \frac{ 1 }{ x }} }{ n^{ω} }  \;\; ,  }',
                                          label_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-xte-Wurzel-n-als-reine-Potenz', label_text => '\name{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-xte-Wurzel-n-als-reine-Potenz}', label_incr => true),
                    ))), */
                  /*%! array( 'equations',
                    array( equ_text_std => 'SN.ArGeo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall m \in \mathbb{Z} *) *( \forall n, k \in \mathbb{N}^{+} *) \\\  *[  *| \sqrt[k]{n} |*^{m}  =  n^{\frac{ m }{ k }}  =  \frac{ n^{\frac{ m }{ k }} \cdot n^{ω} }{ n^{ω} }  =  \frac{ n^{ω + \frac{ m }{ k }} }{ n^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  q  :=  \frac{ m }{ k }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall q \in \mathbb{Q} *) *( \forall n \in \mathbb{N}^{+} *)  *[  n^{q}  =  \frac{ n^{q} \cdot n^{ω} }{ n^{ω} }  =  \frac{ n^{ω + q} }{ n^{ω} }  *]  }'),
                    ))), */
                  /*%! array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'dann ist es so, dass die natürliche Zahl \lm{ n } eine Primfaktorzerlegung haben kann, in der einzelne Primzahlen'."\n".
                      'in höheren Potenzen als Eins vorkommen können:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists k_{i} \in \mathbb{N} *) *( \forall p_{i} \in \mathbb{P} *) *( \forall n \in \mathbb{N}^{+} *) *( n \ge 2 *)  \\\ *[  n  =  p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot \cdots *)^{\frac{ 1 }{ x }} \cdot *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot \cdots *)^{ω} }{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots *)^{ω} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot \cdots *)^{\frac{ 1 }{ x }}  =  \\\ \qquad\qquad\qquad\; \frac{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot \cdots *)^{\frac{ 1 }{ x }} \cdot *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot \cdots *)^{ω} }{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots *)^{ω} }  }'),
                      // array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ p_{1}^{k_{1} *( ω + q *)} \cdot p_{2}^{k_{2} *( ω + q *)} \cdot p_{3}^{k_{3} *( ω + q *)} \cdot p_{4}^{k_{4} *( ω + q *)} \cdot \cdots }{ p_{1}^{k_{1} ω} \cdot p_{2}^{k_{2} ω} \cdot p_{3}^{k_{3} ω} \cdot p_{4}^{k_{4} ω} \cdot \cdots }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Brechen wir dies auf die Faktoren der einzelnen Primzahlpotenzen \lm{ p_{i}^{k_{i}} } in \lm{ n } herunter, dann sieht das Bild folgendermaßen aus'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }}  =  \frac{ *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot *( p_{i}^{k_{i}} *)^{ω} }{ *( p_{i}^{k_{i}} *)^{ω} }  }'),
                      array( display => 'on',  latex => '{  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot *( p_{i}^{k_{i}} *)^{ω}  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und es stellt sich die Frage, ob für jede separate Primzahlpotenz nicht als Faktor auch die'."\n".
                      'einfache vollständige Induktion in der Potenz \lm{ p_{i}^{ω} } ausreicht, um die Wurzel \lm{ *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} }'."\n".
                      'zu einer ganzen Zahl zu machen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }}  ?=  \frac{ *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot p_{i}^{ω} }{ p_{i}^{ω} }  }'),
                      array( display => 'on',  latex => '{  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot p_{i}^{ω}  ?\in  \mathbb{N}_{\infty}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'denn nur dann, wenn das gegeben ist, dann ist auch diese Wurzel im Produkt mit unserer superialen Basis \lm{ \s }'."\n".
                      'eine aktual unendlich große natürliche Superial-Zahl, weil \lm{ \s } eben „nur“ die einfachen vollständigen Induktionen aller'."\n".
                      'Primzahlen \lm{ p_{i}^{ω} } enthält'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  \parallel  p_{i}^{ω}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \s  \parallel  \rad(n)^{ω}  }'),
                      array( display => 'on',  latex => '{  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ x }} \cdot \s  ?\in  \mathbb{S}_{\N}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wenn \lm{ \rad(n) } das Produkt aller in \lm{ n } enthaltenen Primzahlen in einfacher Potenz ist.'."\n",
                        'Dass der Faktor \lm{ p_{i}^{ω} } reichen muss, um aus \lm{ *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} } eine aktual unendliche ganze Zahl zu machen,'."\n".
                      'können wir schon daran erkennen, dass wir im überrationalen Bruch soweit kürzen dürfen, solange \lm{ *( p_{i}^{k_{i}} *)^{ω} }'."\n".
                      'wie der Term aktual unendlich groß bleibt.'."\n".
                      'Aslo dürfen wir auch \lm{ k_{i} } Mal kürzen, was aus \lm{ *( p_{i}^{k_{i}} *)^{ω} } dann \lm{ p_{i}^{ω} } macht.'."\n".
                      'Gleiches erreichen wir aber auch durch Umformung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *( \forall q \in \mathbb{Q} *)  *[  p^{ω} \cdot p^{\frac{ 1 }{ x }}  \in  \mathbb{N}_{\infty}  *]  }'),
                      // array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *( \forall k \in \mathbb{N}^{+} *) *( \forall q \in \mathbb{Q} *)  *[  p^{ω} \cdot *( p^{k} *)^{\frac{ 1 }{ x }}  ?\in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{i}^{k_{i} \cdot q} \cdot p_{i}^{ω}  ?\in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  k_{i} \cdot q  \in  \mathbb{Q}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  p_{i}^{k_{i} \cdot q} \cdot p_{i}^{ω}  \in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot p_{i}^{ω}  \in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }}  =  \frac{ *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} \cdot p_{i}^{ω} }{ p_{i}^{ω} }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und zeigen damit, dass dieser überrationale Bruch auf die einfache vollständige Induktion reduziert werden kann,'."\n".
                      'ohne seinen Wahrheitsgehalt zu verlieren.'."\n",
                        'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Wegen der Primfaktorzerlegung von \lm{ n } in Formel \jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-Primfaktoren-k_i}'."\n".
                      'gilt dann auch:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots *)^{ω + \frac{ 1 }{ x }} }{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots *)^{ω} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots *)^{\frac{ 1 }{ x }}  =  \\\ \qquad\qquad\qquad \frac{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots *)^{ω + \frac{ 1 }{ x }} }{ *( p_{1}^{k_{1}} \cdot p_{2}^{k_{2}} \cdot p_{3}^{k_{3}} \cdot p_{4}^{k_{4}} \cdot \cdots *)^{ω} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{1}^{k_{1} *( \frac{ 1 }{ x } *)} \cdot p_{2}^{k_{2} *( \frac{ 1 }{ x } *)} \cdot p_{3}^{k_{3} *( \frac{ 1 }{ x } *)} \cdot p_{4}^{k_{4} *( \frac{ 1 }{ x } *)} \cdot \cdots  =  \\\ \qquad\qquad\qquad \frac{ p_{1}^{k_{1} *( ω + \frac{ 1 }{ x } *)} \cdot p_{2}^{k_{2} *( ω + \frac{ 1 }{ x } *)} \cdot p_{3}^{k_{3} *( ω + \frac{ 1 }{ x } *)} \cdot p_{4}^{k_{4} *( ω + \frac{ 1 }{ x } *)} \cdot \cdots }{ p_{1}^{k_{1} ω} \cdot p_{2}^{k_{2} ω} \cdot p_{3}^{k_{3} ω} \cdot p_{4}^{k_{4} ω} \cdot \cdots }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Weil \lm{ n } in unserem Ansatz \jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-xte-Wurzel-n-als-reine-Potenz}'."\n".
                      'hier ja für jede beliebige positive natürliche Zahl gilt, so gilt sie logischerweise auch für jede Primzahl der Primfaktorzerlegung von \lm{ n },'."\n".
                      'wenn \lm{ \mathbb{P}(n) } die Menge der Primfaktoren von \lm{ n } ist,'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p_{i} \in \mathbb{P}(n) *)  *[  p_{i}^{\frac{ 1 }{ x }}  =  \frac{ p_{i}^{ω + \frac{ 1 }{ x }} }{ p_{i}^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall p_{i} \in \mathbb{P}(n) *)  *[  p_{i}^{\frac{ 1 }{ x }}  =  \frac{ p_{i}^{ω} \cdot p_{i}^{\frac{ 1 }{ x }} }{ p_{i}^{ω} }  *]  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'womit wir jetzt bei den einzelnen Primzahltürmen des Primzahl-Flächenprodukts von \lm{ \s } angekommen sind.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wenn \lm{ n } nur aus Primzahlen erster Potenz besteht, dann ergibt sich das Bild:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei probehalber \lm{ n } eine positive natürliche Zahl, die nur aus Primzahlen erster Potenz besteht'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p_{i} \in \mathbb{P}(n) *)  *[  n^{\frac{ 1 }{ x }}  =  \frac{ *( p_{1} \cdot p_{2} \cdot p_{3} \cdot p_{4} \cdot \cdots *)^{ω} \cdot n^{\frac{ 1 }{ x }} }{ *( p_{1} \cdot p_{2} \cdot p_{3} \cdot p_{4} \cdot \cdots *)^{ω} }  *]  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'dann erhalten wir einen Nenner und diesen auch als Faktor im Zähler,'."\n".
                      'der immer ein Teil des Primzahl-Flächenprodukts von \lm{ \s } ist'."\n".
                      'und der Zähler ist auch immer eine ganze Zahl:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p_{i} \in \mathbb{P}(n) *)  *[  *( p_{1} \cdot p_{2} \cdot p_{3} \cdot p_{4} \cdot \cdots *)^{ω} \cdot n^{\frac{ 1 }{ x }}  \in  \mathbb{N}_{\infty}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'In Bezug auf die Superial-Zahlen hat dies eine besondere Bedeutung.'."\n".
                      'Denn nehmen wir die \lm{ x }-te Wurzel aus unserem besonderen \lm{ n }'."\n".
                      'mit der superialen Basis \lm{ \s } mal, dann erhalten wir ebenfalls eine ganze Zahl,'."\n".
                      'weil der Faktor vor der Wurzel im Zähler ja ein Teilprodukt des Primzahl-Flächenprodukts ist:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p_{i} \in \mathbb{P}(n) *)  *[  *( p_{1} \cdot p_{2} \cdot p_{3} \cdot p_{4} \cdot \cdots *)^{ω}  \mid  \s  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ x }} \cdot \s  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Das führt uns unweigerlich zu der Frage, ob diese besonderen Wurzel nicht auch zu den Superial-Zahlen gehören'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }} \cdot \s  ?\in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'deren Beantwortung wir nachgehen sollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wenn wir uns Gedanken darüber machen, was der Unterschied zwischen der vorstehend probehalber angenommenen'."\n".
                    'Bedingung, \lm{ n } besteht nur aus Primzahlen erster Potenz, und \lm{ n } hat jede mögliche Primfaktorzerlegung,'."\n".
                    'dann geht es nur darum, wie sich höhere Potenzen der Primzahlen in \lm{ n } bezüglich des Produkts mit'."\n".
                    'der superialen Basis \lm{ \s } verhalten.'."\n",
                      'Die Primzahltürme \lm{ p_{i}^{ω} }, die als Faktoren dazu führen, dass die \lm{ x }-ten Wurzeln aus diesen Primzahlen'."\n".
                    '\lm{ p_{i}^{\frac{ 1 }{ x }} } zu ganzen Zahlen werden, werden in unserer bisher gefundenen Lösung entsprechend'."\n".
                    'der Potenzen \lm{ k_{i} } der jeweiligen Primzahlen in \lm{ n } potenziert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p_{i} \in \mathbb{P}(n) *)  *[  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }}  =  \frac{ *( p_{i}^{k_{i}} *)^{ω} \cdot *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} }{ *( p_{i}^{k_{i}} *)^{ω} }  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Frage, die sich bezüglich der Superial-Zahlen also stellt, ist:'."\n".
                    'Reicht der einfach aktual unendliche Potenzturm als Faktor der Wurzel aus, um auch'."\n".
                    'die entsprechende Wurzel aus einer Potenz der Primzahl zu einer ganzen Zahl zu machen?'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p_{i} \in \mathbb{P}(n) *)  *[  *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }}  =  \frac{ p_{i}^{ω} \cdot *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }} }{ p_{i}^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall p_{i} \in \mathbb{P}(n) *)  *[  p_{i}^{ω} \cdot *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }}  ?\in  \mathbb{N}_{\infty}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und ich denke, diese Frage können wir ruhigen Gewissens mit Ja beantworten.'."\n".
                    'Der einfache aktual unendliche Potenzturm reicht aus.'."\n",
                      'Zum einen ist dies so, weil auch der einfache Potenzturm die notwendige Bedingung erfüllt,'."\n".
                    'aktual unendlich groß zu sein und in dem oben angegebenen überrationalen Bruch beliebig endlich oft gekürzt werden zu können.'."\n".
                    'Zum anderen können wir uns dies über Raster-Überlegungen klar machen:'."\n",
                      'Gemeinsam mit der Null und der Eins definieren die hier allgemein betrachteten \lm{ x }-ten Wurzeln aus \lm{ n }'."\n".
                    'ein extrem feines Raster.'."\n".
                    'Dieses feine Raster wird durch den aktual unendlich großen Faktor im Zahler so stark vergrößert, dass es auf das Raster'."\n".
                    'der aktual unendlich großen ganzen Zahlen fällt.'."\n".
                    'Eine ganze Potenz \lm{ k_{i} } einer Primzahl \lm{ p_{i} } definiert aber kein noch feineres Raster'."\n".
                    'als ihre einfache Potenz.'."\n".
                    'Im Gegenteil fällt die \lm{ x }-te Potenz der \lm{ x }-ten Wurzel aus \lm{ n } per Definition'."\n".
                    'sogar selber auf die ganze Zahl \lm{ n }, sogar ohne die unendliche Vergrößerung des Rasters.'."\n",
                      'Der einfache aktual unendliche Potenzturm \lm{ p_{i}^{ω} } vergrößert das Raster für alle dazu passenden'."\n".
                    '\lm{ x }-ten Wurzel aus \lm{ p_{i} } so, dass auch ein Produkt dieser Wurzeln auf das Zählraster der ganzen Zahlen fällt.'."\n".
                      'Es gilt also tatsächlich:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p_{i}^{ω} \cdot *( p_{i}^{k_{i}} *)^{\frac{ 1 }{ x }}  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit sind alle Produkte der \lm{ x }-ten Wurzeln aus \lm{ n } mit der superialen Basis \lm{ \s }'."\n".
                    'aktual unendlich große ganze Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }} \cdot \s  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit sind sie sinnvollerweise auch ganze Superial-Zahlen, denn es macht ja dann gar keinen Sinn,'."\n".
                    'diese Zahlen aus den Superial-Zahlen auszuschließen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }} \cdot \s  :\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die \lm{ x }-ten Wurzeln aus \lm{ n } sind als Koeffizienten in den Superial-Zahlen also'."\n".
                    'grundsätzlich zugelassen.'."\n".
                    ''))), */
                  /*%! array( 'text', array( text => array(
                  '\condb{XXX Die Kehrwerte der Wurzeln} \\\\'."\n".
                    'Was uns nun noch fehlt, sind die Kehrwerte der Wurzeln, oder anders ausgedrückt,'."\n".
                    'die negativen Wurzeln.'."\n".
                    'Dazu gucken wir uns diese jetzt näher an.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei es erlaubt, dass die \lm{ x }-te Wurzel aus \lm{ n } eine negative Zahl,'."\n".
                      'aber nicht Null ist'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, x \in \mathbb{N}^{+} *) *( n, x \geq 2 *) *( \forall p_{i} \in \mathbb{P}(n) *)  \\\ \qquad\qquad\qquad\qquad *[  n^{- \frac{ 1 }{ x }}  =  \frac{ p_{i}^{ω} \cdot n^{- \frac{ 1 }{ x }} }{ p_{i}^{ω} }  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ x }}  =  \frac{ p_{i}^{ω} }{ p_{i}^{ω} \cdot n^{\frac{ 1 }{ x }} }  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'dann bleibt der Bruch trotzdem ein überrationaler Bruch, wie wir sehen.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Die \lm{ x }-te Wurzel aus \lm{ n } rutscht einfach in den unteren Teil des Bruchs, in den Nenner,'."\n".
                    'zum anderen identischen Primzahlturm, wo das Produkt dann ebenso eine aktual unendlich große ganze Zahl ergibt,'."\n".
                    'wie zuvor im Zähler.'."\n".
                    'Das ist alles in sich ganz plausibel.'."\n",
                      'Jedoch kommt nun die Frage auf:'."\n".
                    'Ist das Produkt des Kehrwerts einer Wurzel mit der superialen Basis \lm{ \s } auch immer eine natürliche'."\n".
                    'Superial-Zahl?'."\n".
                      'Dies ist nicht ganz so offensichtlich, weil es bedeutet, dass \lm{ \s } durch eine \lm{ x }-te Wurzel aus \lm{ n }'."\n".
                    'geteilt auch immer eine ganze positive Superial-Zahl sein muss:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, x \in \mathbb{N}^{+} *) *( n, x \geq 2 *)  *[  n^{- \frac{ 1 }{ x }} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ \s }{ n^{\frac{ 1 }{ x }} }  ?\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dass die Division durch eine möglicherweise irrationale positive Wurzel auch immer eine aktual unendlich große ganze Zahl bleibt,'."\n".
                    'kann in der Tat fragwürdig erscheinen.'."\n",
                      'Ich möchte damit ansetzen, dies an der Quadratwurzel aus aus \lm{ n } zu zeigen und von hier aus zu verallgemeinern.'."\n".
                    'Denn im Fall der Quadratwurzel können wir durch eine erlaubte Division ganz leicht zeigen, dass unsere fragliche Aussage wahr ist:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei die uns bekannte wahre Aussage, dass die'."\n".
                      'Quadratwurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } eine ganze Zahl ist'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N}^{+} *) *( n \geq 2 *)  *[  n^{\frac{ 1 }{ 2 }} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unser Ansatz, so gelangen wir durch die erlaubte Division von \lm{ \s } durch \lm{ n },'."\n".
                      'die den Wahrheitsgehalt der Aussage nicht verändert und deren Umformung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ n }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ 2 } - 1} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ 2 }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu der Aussage, dass auch der Kehrwert der Quadratwurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } ist eine ganze Zahl sein muss,'."\n".
                      'was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Nun verallgemeinern wir auf die generelle Aussage des Kehrwerts der \lm{ x }-ten Wurzel'."\n".
                    'aus einer endlichen natürlichen Zahl \lm{ n } größer gleich Zwei.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei die uns bekannte wahre Aussage, dass die'."\n".
                      '\lm{ x }-ten Wurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } eine ganze Zahl ist'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, x \in \mathbb{N}^{+} *) *( n, x \geq 2 *)  *[  n^{\frac{ 1 }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unser Ansatz, so gelangen wir durch die erlaubte Division von \lm{ \s } durch \lm{ n }'."\n".
                      'und durch einen Faktor, der eine erlaubte Potenz der \lm{ x }-ten Wurzel aus \lm{ n } ist,'."\n".
                      'wie wir im \jump{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Ganzzahlige-Potenzen-der-Wurzeln}{nächsten Abschnitt} sehen,'."\n".
                      'die beide den Wahrheitsgehalt der Aussage nicht verändern, und durch deren Umformung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }} \cdot *( n^{\frac{ 1 }{ x }} *)^{x - 2} \cdot \frac{ \s }{ n }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }} \cdot n^{\frac{ x - 2 }{ x }} \cdot \frac{ \s }{ n^{\frac{ x }{ x }} }  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }} \cdot n^{\frac{ x - 2 }{ x }} \cdot n^{- \frac{ x }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }} \cdot n^{\frac{ -x + *( x - 2 *) }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }} \cdot n^{- \frac{ 2 }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x } - \frac{ 2 }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ x }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu der Aussage, dass auch der Kehrwert der \lm{ x }-ten Wurzel aus \lm{ n } im Produkt mit der superialen Basis \lm{ \s } eine ganze Zahl sein muss,'."\n".
                      'was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Über erlaubte Operationen, die die Ganzzahligkeit unseres Ansatzes erhalten, erreichen wir also'."\n".
                    'die gesuchte Aussage, dass auch die Kehrwerte der \lm{ x }-ten Wurzeln aus \lm{ n } natürliche Superial-Zahlen sind.'."\n".
                    ''))), */
                  /*%! array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Ganzzahlige-Potenzen-der-Wurzeln}{}XXX Ganzzahlige Potenzen der Wurzeln} \\\\'."\n".
                    'Können wir auch für die ganzzahligen Potenzen der Wurzeln und ihrer Kehrwerte bestätigen,'."\n".
                    'dass ihre Produkte mit der superialen Basis \lm{ \s } natürliche Superial-Zahlen sind.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei die ganzzahlige Potenz einer Wurzel oder ihres Kehrwerts im Produkt mit der superialen Basis'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, k \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\quad  *[  *( n^{\frac{ 1 }{ y }} *)^{k} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'eine natürliche Superial-Zahl, dann können wir dies umformen zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ k }{ y }} \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( n^{k} *)^{\frac{ 1 }{ y }} \cdot \s  ?\in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wobei wir sehen, dass wegen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{k} \in \mathbb{N}^{+} \setminus *\{ 1 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'die neue Basis einfach nur ein anderer natürlicher Radikand \lm{ n^{k} } der Wurzel ist,'."\n".
                      'so dass unsere anfängliche Aussage'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n, k \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\qquad\quad\;\;\;  *[  *( n^{\frac{ 1 }{ y }} *)^{k} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wahr ist.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir brauchen uns also um die ganzzahligen Potenzen der Wurzeln oder ihrer Kehrwerte nicht zu sorgen'."\n".
                    'und weiter zu kümmern.'."\n".
                    'Sie sind völlig neutral.'."\n".
                    ''))), */
                  /*%! array( 'text', array( text => array(
                  '\condb{XXX Die Produkte der Wurzeln} \\\\'."\n".
                    'Wie sieht es nun mit den Produkten von Wurzeln oder deren Kehrwerten aus?'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Sei das Produkt zweier Wurzel oder ihres Kehrwerts im Produkt mit der superialen Basis'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\,  *[  n^{\frac{ 1 }{ y }} \cdot n^{\frac{ 1 }{ z }} \cdot \s  ?\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'eine natürliche Superial-Zahl, dann können wir dies umformen zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ z }{ y \cdot z }} \cdot n^{\frac{ y }{ y \cdot z }} \cdot \s  ?\in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ y + z }{ y \cdot z }} \cdot \s  ?\in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wobei wir sehen, dass wegen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ y \cdot z }} \cdot \s  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und weil wir im \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Ganzzahlige-Potenzen-der-Wurzeln}{vorherigen Abschnitt}'."\n".
                      'geklärt haben, dass ganzzahlige Potenzen der Wurzeln und ihrer Kehrwerte im Produkt'."\n".
                      'mit der superialen Basis natürliche Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( n^{\frac{ 1 }{ y \cdot z }} *)^{y + z} \cdot \s  \in  \mathbb{S}_{\N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'ist auch'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) \\\ \qquad\qquad\qquad\qquad\;\;\;\,  *[  n^{\frac{ 1 }{ y }} \cdot n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wahr.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir brauchen uns also um die Produkte der Wurzeln oder ihrer Kehrwerte auch nicht zu sorgen.'."\n".
                    'Sie sind auch im Produkt mit der superialen Basis natürliche Superial-Zahlen.'."\n".
                    ''))), */
                  /*%! array( 'text', array( text => array(
                  '\condb{XXX Summen von Wurzeln und endlich ganzzahligen Summanden} \\\\'."\n".
                    'Wir müssen nun noch untersuchen, ob auch Summen von irrationalen Wurzeln oder ihren Kehrwerten'."\n".
                    'mit endlichen ganzen Zahlen, die auch zu den irrationalen algebraischen Koeffizienten gehören,'."\n".
                    'als Produkt mit unserer superialen Basis \lm{ \s } ganze beziehungsweise natürliche Superial-Zahlen sind.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Nehmen wir an, dass die irrationale Wurzel oder ihr Kehrwerten in einer Summe mit der endlichen ganzen Zahl \lm{ z } und im Produkt dieser mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N}^{+} *) *( n \geq 2 *) *( \forall y \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) *( \forall z \in \mathbb{Z} *)  \\\ \qquad\qquad *( n^{\frac{ 1 }{ y }} + z \ge 0 *)  *[  *( n^{\frac{ 1 }{ y }} + z *) \cdot \s  ?\in  \mathbb{S}_{N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Ausmultiplizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot \s + z \cdot \s  ?\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Da beide Summanden ganze Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ y }} \cdot \s  \in  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  z \cdot \s  \in  \mathbb{S}_{Z}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und die Summe zweier ganzer Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }} \cdot \s + z \cdot \s  \in  \mathbb{S}_{N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unter den obigen Bedingungen, immer eine natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'So sind dann auch algebraische Zahlen wie der Goldene Schnitt \lm{ φ }'."\n".
                    'als Faktoren der superialen Basis \lm{ \s } natürliche Superial-Zahlen.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Nehmen wir an, dass der irrationale Goldene Schnitt \lm{ φ } im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  φ \cdot \s  ?\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'mit dem Wert der Definition'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  φ  =  \frac{ \sqrt{ 5 } + 1 }{ 2 }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Einsetzen, Umstellen und Ausmultiplizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ \sqrt{ 5 } + 1 }{ 2 } \cdot \s  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *( 5^{\frac{ 1 }{ 2 }} + 1 *) \cdot \frac{ \s }{ 2 }  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  5^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ 2 } + \frac{ \s }{ 2 }  ?\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Da beide Summanden natürliche Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  5^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ 2 }  \in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \frac{ \s }{ 2 }  \in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und die Summe zweier natürlicher Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  5^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ 2 } + \frac{ \s }{ 2 }  \in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ 5^{\frac{ 1 }{ 2 }} \cdot \s + \s }{ 2 }  \in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  φ \cdot \s  \in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'auch immer eine natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir fahren fort, weitere Varianten der Realanteile algebraischer Zahlen auf die Ganzzahligkeit unter Faktorisierung mit \lm{ \s } zu überprüfen.'."\n".
                    ''))), */
                  /*%! array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Ueberrationalitaetsvermutung:Summen-von-Wurzeln}{}XXX Summen von Wurzeln} \\\\'."\n".
                    'Ganz ähnlich verhält es sich mit Summen von zwei oder mehr Wurzeln.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Nehmen wir an, dass eine Summe aus zwei irrationalen Wurzeln, oder ihrer jeweiligen Kehrwerte, im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, m \in \mathbb{N}^{+} *) *( n, m \geq 2 *) *( \forall y, z \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *)  \\\ \qquad\quad *( n^{\frac{ 1 }{ y }} + n^{\frac{ 1 }{ z }} \ge 0 *)  *[  *( n^{\frac{ 1 }{ y }} + n^{\frac{ 1 }{ z }} *) \cdot \s  ?\in  \mathbb{S}_{N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Ausmultiplizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ y }} \cdot \s + n^{\frac{ 1 }{ z }} \cdot \s  ?\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Da beide Summanden ganze Superial-Zahlen sind'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ y }} \cdot \s  \in  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{Z}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und die Summe zweier ganzer Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }} \cdot \s + n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unter den obigen Bedingungen, immer eine natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'So sind dann auch algebraische Zahlen aus Summen zweier oder mehrerer Wurzeln, oder ihrer jeweiligen Kehrwerte,'."\n".
                    'als Faktoren der superialen Basis \lm{ \s } natürliche Superial-Zahlen möglich.'."\n",
                      '\color{*Bearb}{(In Arbeit …)} Damit haben wir für alle irrationalen algebraischen Koeffizienten durch Beweis überprüft,'."\n".
                    'dass ihre Produkte mit der superialen Basis \lm{ \s } zu den natürlichen Superial-Zahlen gehören.'."\n".
                    ''))), */
                  /*%! array( 'text', array( text => array(
                  '\condb{Wurzeln aus Polynomen} \\\\'."\n".
                  '\cond{Elliptische Integrale und ähnliche algebraische Werte} \\\\'."\n".
                    'Die algebraischen Zahlen sind ja dadurch definiert, das sie die Menge aller Lösungen der Nullstellen von Polynomen sind.'."\n".
                    'Wir betrachten hier aber keine komplexen Lösungen mit Imaginäranteilen, sondern nur'."\n".
                    'die reelwertigen Koeffizienten der Komponenten ihrer komplexen Lösungen.'."\n",
                      'Nach allem, was ich über diese herausfinden kann, sind die reelwertigen Lösungen'."\n".
                    'der Nullstellen von Polynomen entweder Radikale\color{*Bearb}{(Verweis)}, also durch bereits'."\n".
                    'oben betrachtete Wurzelausdrücke darstellbar, oder es sind elliptische Integrale\color{*Bearb}{(Verweis)},'."\n".
                    'für die Nullstellen von Polynomen 5. oder höheren Grades.\color{*Bearb}{(Verweis)}'."\n",
                      'Elliptische Integrale sind Integrale über Wurzeln aus Polynomen, also unendliche Summen'."\n".
                    'über Wurzeln aus Polynomen.'."\n".
                    'Da die Ausdrücke der Polynome jedes Summanden damit algebraische Radikale oder gegebenenfalls wieder endliche oder unendliche Summen'."\n".
                    'algebraischer Radikale sind, die gegen einen endlichen Wert konvergieren, bleiben es doch Summen algebraischer Radikale.'."\n",
                      'Summen algebraischer Radikale, ob endliche oder unendliche, die zu endlichen Werten konvergieren,'."\n".
                    'verhalten sich wie im vorstehenden Abschnitt \italic{\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:SummeRadikaleKehrwerte:Summen-von-Wurzeln}}'."\n".
                    'beschrieben und sind damit im Produkt mit der superialen Basis \lm{ \s } natürliche Superial-Zahlen'."\n".
                    'die summiert wieder ebensolche ergeben.'."\n",
                      'Wie allgemein dies gilt, können wir an einem Beispiel beobachten.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Als Beispiel betrachten wir als erstes das allgemeine elliptische Integral der I. Art in der Jacobi-Form:\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:ElliptischeIntegrale:2024}, Vollständige elliptische Integrale, Definition der vollständigen elliptischen Integrale.}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( 0 < k < 1 *)  *[  \int_{0}^{1} {\frac { \mathrm{d} x }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } }}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Nach der Definition eines Integrals mit Superial-Zahlen als Summe, nach Kapitel \italic{\jumpname{OM:SupNum:Ableitungen-Integrale:Integration}},'."\n".
                      'entspricht dies:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall k \in \mathbb{A}_{\R} *) *( 0 < k < 1 *) \\\ \qquad\quad\;\;\;\,  *[  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { 1 }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } }} *〉  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Nehmen wir an, dass dieses Integral im Produkt mit \lm{ \s }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 {\frac { 1 }{ \sqrt{ *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) } }} *〉*) \cdot \s  ?\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'zu den natürlichen Superial-Zahlen gehört, dann erhalten wir durch Ausmultiplizieren'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'wobei diese Summe sich insofern plausibel in die Fundierung der Superial-Zahlen einfügt, als dass ihre'."\n".
                      'zählende Variable ihre Werte per Definition „nur“ aus den möglichen und sinnvollen Superial-Zahlen schöpft.'."\n".
                      'Das bedeutet, dass die Koeffizienten der Superial-Zahlen der zählenden Variable auch Realanteile der algebraischen Zahlen'."\n".
                      'sind und dadurch die summierten Ausdrücke wieder Realanteile algebraischer Zahlen ergeben.'."\n".
                      'Dies ist in sich selbst plausibel.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Nun ist es so, dass die Definition der Ableitung und des Integrals per Superial-Zahlen mit der superialen'."\n".
                      'Basis \lm{ \s } die Besonderheit, dass die aktual unendlichen Anteile bei der Ableitung'."\n".
                      'von rein endlichen Funktionen nicht verschwinden.'."\n".
                      'Dagegen müssen bei der Integration aktual unendliche Anteile hinzugefügt werden, um rein endliche Funktionen zu erhalten.'."\n".
                      'Dies bedeutet, wir müssen die Formel modifizieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall x \in [0, 1[_{\mathbb{S}^{-1}_{\Z}} } \! ․*〈 *( k^{2} x^{4} - *( k^{2} - 1 *) x^{2} + 1 *)^{\frac{ 1 }{ -2 }} \cdot \s *〉  ?\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  f(x) = x^{5}  \Rightarrow  f\'(x) =  *〈 5 x^{4} *〉.*〈 10 x^{3} *〉*〈 10 x^{2} *〉*〈 5 x *〉*〈 1 *〉  }'),
                      array( display => 'on',  latex => '{  f(x) = x^{3}  \Rightarrow  f\'(x) =  *〈 3 x^{2} *〉.*〈 3 x *〉*〈 1 *〉  }'),
                      array( display => 'on',  latex => '{  f(x) = x  \Rightarrow  f\'(x) =  1  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Da alle obigen Summanden ganze Superial-Zahlen sind'."\n".
                      '\\\\ \color{*Bearb}{(Wie gehen wir hier damit um, dass \lm{ x } in der Integralsumme auch superial kleine Anteile enthalten kann? Werden die hier eh zu endlichen ganzen Zahlen? Bei \lm{ x^{2} } wohl eher nicht. Oder können wir das Integral oben so definieren, dass es passt? Oder heben sich die superial kleinen Anteile erst beim Summieren auf?)}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( *( 1 - x^{2} *) \cdot *( 1 - k^{2} x^{2} *) *)^{\frac{ 1 }{ -2 }} \cdot \s  \in  \mathbb{S}_{Z}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\color{*Bearb}{(In Arbeit …)} und die Summe zweier ganzer Superial-Zahlen immer zu dieser Menge gehört, folgt daraus, dass die untersuchte Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  n^{\frac{ 1 }{ y }} \cdot \s + n^{\frac{ 1 }{ z }} \cdot \s  \in  \mathbb{S}_{N}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'unter den obigen Bedingungen, immer eine natürliche Superial-Zahl ist, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)} So sind dann auch algebraische Zahlen aus Summen zweier oder mehrerer Wurzeln, oder ihrer jeweiligen Kehrwerte,'."\n".
                    'als Faktoren der superialen Basis \lm{ \s } natürliche Superial-Zahlen möglich.'."\n",
                      '\color{*Bearb}{(In Arbeit …)} Damit haben wir für alle irrationalen algebraischen Koeffizienten durch Beweis überprüft,'."\n".
                    'dass ihre Produkte mit der superialen Basis \lm{ \s } zu den natürlichen Superial-Zahlen gehören.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Zusammenfassung für alle entsprechenden Wurzeln, Summen und Produkte} \\\\'."\n".
                    'So können wir die Superial-Zahlen sinnvollerweise noch auf die Koeffizienten der Kehrwerte der irrationalen Wurzeln,'."\n".
                    'deren Summen mit endlichen ganzen Zahlen und deren Produkte mit rationalen Zahlen verallgemeinern:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( q \in \mathbb{Q} *) *( \forall n \in \mathbb{N}^{+} \setminus *\{ 1 *\} *) *( \forall y \in \mathbb{Z} \setminus *\{ 0, \pm 1 *\} *) *( n^{\frac{ 1 }{ y }} \notin \mathbb{Q} *) \\\ \quad\;\; *( \forall z \in \mathbb{Z} *) *( q \cdot n^{\frac{ 1 }{ y }} + z > 0 *)  *[  *( q \cdot n^{\frac{ 1 }{ y }} + z *) \cdot \s  :\in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir stellen also fest, dass auch die positiven irrationalen Koeffizienten algebraischer Zahlen'."\n".
                    'als Produkt mit der superialen Basis \lm{ \s } aktual unendlich große natürliche Zahlen ergeben.'."\n".
                    'Das ist schon ziemlich erfreulich und cool.'."\n",
                      'Durch den Beweis der eingangs aufgestellt Überrationalitätsvermutung sind nun'."\n".
                    'alle positiven realen Koeffizienten algebraischer Zahlen, die positiven Zahlen der Menge \lm{ \mathbb{A}_{\R} },'."\n".
                    'als Produkt mit der superialen Basis \lm{ \s } aktual unendlich große natürliche Zahlen'."\n".
                    'und sinnvollerweise dann auch natürliche Superial-Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a^{+} \in \mathbb{A}_{\R}^{+} *)  *[  a^{+} \cdot \s  \in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a^{+} \in \mathbb{A}_{\R}^{+} *)  *[  a^{+} \cdot \s  \in  \mathbb{S}_{\N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Erkenntnis können wir dann ebenso auf die \jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Superial-Zahlen} erweitern:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{\R} *)  *[  a \cdot \s  \in  \mathbb{S}_{\Z}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Etwas wirklich besonderes.'."\n",
                    ''))), */
           
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Diskussion-des-Beweises'),
                    )),
                )
          ); ?>
          <br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

          <!  • Diskussion des Beweises  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Ueberrationalitaetsvermutung:Diskussion-des-Beweises',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Fragen}',
                    // '• Können die irrationalen Wurzeln dann trotzdem Brüche unendlich vieler Primzahlen endlicher Potenzen in Zähler und Nenner sein?',
                    // '• Oder ist dies nach dem Beweis der Überrationalitätsvermutung ausgeschlossen?',
                    // '– Siehe Nebenrechnungen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Es ist uns gelungen den vorstehenden Beweis der Überrationalitätsvermutung zu führen,'."\n".
                    'ohne uns explizit mit den gegebenenfalls irrationalen Werten der Wurzeln und deren genauer'."\n".
                    'Entstehung auseinander zu setzen.'."\n",
                      'Welche tieferen Einsichten haben wir vorstehend gewonnen und welche können wir noch weiter schöpfen?'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Diskussion-des-Beweises:X', text =>
                      
                'Das feine Raster der irrationalen endlichen Wurzeln', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die irrationalen endlichen Wurzeln entstehen offenbar aus aktual unendlich großen Nennern und Zählen,'."\n".
                    'die endliche rationale gebrochene Differenzen \lm{ \frac{ 1 }{ x } } in ihren'."\n".
                    'aktual unendlichen Exponenten der Größenordnung  \lm{ g } enthalten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.DB', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall i \in \mathbb{N} *) *( g \in \mathbb{N}_{\infty} *)  *[  i < g  *]  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-g-aktual-unendlich-ganz}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{g}  \in  \mathbb{N}_{\infty}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-in-natuerlich-infinit}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{g + \frac{ 1 }{ x }}  \in  \mathbb{N}_{\infty}  }',
                                          label_text => '\jumpname{OM:SupNum:Ueberrationalitaetsvermutung:Vortext:Equ-n-hoch-g-plus-eins-durch-x-in-natuerlich-infinit}', label_incr => false),
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }}  =  \frac{ n^{g} \cdot n^{\frac{ 1 }{ x }} }{ n^{g} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ n^{g + \frac{ 1 }{ x }} }{ n^{g} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  n^{g + \frac{ 1 }{ x } - g}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  n^{\frac{ 1 }{ x }}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Beweis der Überrationalitätsvermutung zeigt uns aus Perspektive ganzzahliger Brüche,'."\n".
                    'dass es sich bei den irrationalen endlichen Wurzeln tatsächlich um Brüche reiner Potenzen des Radikanden \lm{ n } der Wurzel handelt,'."\n".
                    'was nur sichtbar ist, wenn der unendliche \italic{überrationale Bruch} nicht gekürzt wird.'."\n",
                      'Dies gilt eben auch für die \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Kehrwerte-der-Wurzeln}{Kehrwerte der Wurzeln},'."\n".
                    'nur das dort die endlichen rationalen Differenzen ein negatives Vorzeichen tragen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.DB', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{g - \frac{ 1 }{ x }}  \in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  n^{- \frac{ 1 }{ x }}  =  \frac{ n^{g} \cdot n^{- \frac{ 1 }{ x }} }{ n^{g} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ x }}  =  \frac{ n^{g - \frac{ 1 }{ x }} }{ n^{g} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ x }}  =  \frac{ n^{g} }{ n^{g} \cdot n^{\frac{ 1 }{ x }} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ x }}  =  \frac{ n^{g} }{ n^{g + \frac{ 1 }{ x }} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ x }}  =  n^{g - \frac{ 1 }{ x } - g}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{- \frac{ 1 }{ x }}  =  n^{- \frac{ 1 }{ x }}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Nenner und Zähler solcher Brüche der selben Basis und aktual unendlich großen Exponenten mit'."\n".
                    'einer endlichen gebrochen rationalen Differenz sind zwar im selben aktual unendlich großen Raster'."\n".
                    'ihrer Basis, dass beide ganze Zahlen sind und damit auf dem Zählraster liegen.'."\n".
                    'Und doch sind sie so unterschiedlich,'."\n".
                    'dass ihr Bruch eine endliche irrationale Zahl geben kann, die nicht-periodisch ist.'."\n".
                    'Daran, dass diese irrationalen Realanteile algebraischer Zahlen aber auch Superial-Zahlen sind, erkennen wir,'."\n".
                    'dass sie aber auch nicht so unterschiedlich sind, dass sie aktual unendlich kleine Summanden enthalten würden.'."\n".
                    'Dies ist anders als zum Beispiel bei der irrationalen transzendenten Eulersche Zahl \lm{ \e_{\s} },'."\n".
                    'die aktual unendlich kleine Summanden enthält.'."\n",
                      'Diese überrationalen Brüche sind schon etwas sehr bemerkenswertes und besonderes.'."\n".
                    'Wir lernen darüber etwas Neues auf dem Gebiet der Zahlentheorie.'."\n".
                    'Es bliebe uns verborgen, wenn wir es einfach nur weg kürzten und es nicht zu deuten wüssten.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Diskussion-des-Beweises:X', text =>
                      
                'Endliche Wurzeln – gebrochene Exponenten – können auch im Endlichen ganze Zahlen ergeben', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Das Wurzeln aus ganzen Zahlen ja auch wieder ganze Zahlen ergeben können, sehen wir ja auch im Endlichen.'."\n".
                    'Die zweiten Wurzeln aus allen Quadratzahlen sind zum Beispiel allesamt ganze Zahlen.'."\n".
                    'Wie die zweite Wurzel aus vier:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.DB', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  4^{\frac{ 1 }{ 2 }}  =  2  }'),
                      array( display => 'on',  latex => '{  *( \forall k \in \mathbb{N} *)  *[  4^{k + \frac{ 1 }{ 2 }}  =  4^{k} \cdot 2  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  4^{k + \frac{ 1 }{ 2 }}  \in  \mathbb{N}  }'),
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }}  =  1,41421356237309…  }'),
                      array( display => 'on',  latex => '{  *( \forall k \in \mathbb{N} *)  *[  2^{k + \frac{ 1 }{ 2 }}  =  2^{k} \cdot 1,41421356237309…  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  2^{k + \frac{ 1 }{ 2 }} \notin \mathbb{N}  \land  2^{k + \frac{ 1 }{ 2 }} \in \mathbb{A}_{\S}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Im Fall von \lm{ 2^{k} \cdot 1,41421356237309… } kann der Faktor \lm{ 2^{k} } niemals dafür sorgen, dass das'."\n".
                    'Produkt eine ganze Zahl wird.'."\n",
                      'Für aktual unendliche \lm{ k := g } überspringen wir eben diese Größengrenze:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.DB', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{g + \frac{ 1 }{ 2 }}  =  2^{g} \cdot 1,41421356237309…  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  2^{g + \frac{ 1 }{ 2 }}  \in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  n^{g + \frac{ 1 }{ 2 }}  =  n^{g} \cdot n^{\frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n^{g + \frac{ 1 }{ 2 }}  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und das Produkt wird aufgrund der Größe des Faktors \lm{ 2^{g} } beziehungsweise \lm{ n^{g} } grundsätzlich zu'."\n".
                    'einer ganzen Zahl, aber von aktual unendlicher Größe.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Diskussion-des-Beweises:X', text =>
                      
                'Nur die aktual unendlichen Potenzen des Zahlen-Radikals der Basis ergeben ein Raster, dass auch die gebrochenen Potenzen der Basis zu ganzen Zahlen macht', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.DB', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n, x \in \mathbb{N} \setminus *\{ 0, 1 *\} *)  *[  \rad(n)^{g} \cdot n^{\frac{ 1 }{ x }}  \in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall n, m, x \in \mathbb{N} \setminus *\{ 0, 1 *\} *) *( \rad(n) \ne \rad(m) *) *( n^{\frac{ 1 }{ x }} = \mathrm{irrational} *) \\\ \qquad\qquad\qquad\qquad\;  *[  \rad(m)^{g} \cdot n^{\frac{ 1 }{ x }}  \notin  \mathbb{N}_{\infty}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Diskussion-des-Beweises:X', text =>
                      
                'Was ist der kleinste Faktor einer gebrochenen Zahl, der aus ihr eine ganze Zahl macht?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.DB', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  0,\!5 \cdot 2  =  1  }'),
                      array( display => 'on',  latex => '{  1,\!5 \cdot 2  =  3  }'),
                      array( display => 'on',  latex => '{  2,\!5 \cdot 2  =  5  }'),
                      array( display => 'on',  latex => '{  3,\!5 \cdot 2  =  7  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen, dass der Faktor hier nur von den Nachkommastellen abhängt.'."\n",
                      'Warum ist das so?'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n",
                      'Aufgrund des Distributivgesetzes gilt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.DB', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N} *) *( \forall a \in \;]0, 1[_{\mathbb{A}_{\S}} *) *( k \in \mathbb{N}_{\infty} *)  \\\ \qquad\quad\;\, *[  *( n + a *) \cdot k  =  n \cdot k + a \cdot k  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Da \lm{ n \cdot k } eh eine ganze Zahl sein muss, kommt es ja nur darauf an, dass \lm{ a \cdot k } auch eine ganze Zahl wird,'."\n".
                    'damit schließlich unsere Summe ganzzahlig ist.'."\n",
                      'Durch eine Abrundung mit Hilfe der Gaußklammer\footnote{\const{SupNum_g_footnote_text_Gaussklammer}} können wir dies'."\n".
                    'folgendermaßen zum Ausdruck bringen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.DB', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall b \in \mathbb{A}_{\S} *) *( k \in \mathbb{N}_{\infty} *)  \\\ \qquad\quad\;\;\, *[  b \cdot k  =  \lfloor b \rfloor \cdot k + *( b - \lfloor b \rfloor *) \cdot k  *]  }'),
                      array( display => 'on',  latex => '{  n  =  \lfloor b \rfloor  }'),
                      array( display => 'on',  latex => '{  a  =  b - \lfloor b \rfloor  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  b  =  n + a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  b  =  \lfloor b \rfloor + *( b - \lfloor b \rfloor *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  b  =  b  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:UntersuchungDerPotenzialzahlen'),
                    )),
              )
          ); ?>
          

          <!  • Untersuchung der Potenzialzahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Ueberrationalitaetsvermutung:UntersuchungDerPotenzialzahlen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Diskussion-des-Beweises', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Der Beweis der Überrationalitätsvermutung lässt die Frage aufkommen, ob es nicht auch ein separates Zahlensystem'."\n".
                    'zu den aktual unendlichen Potenzen natürlicher Zahlen gibt.'."\n",
                      'Im Abschnitt \italic{›\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:s-und-omega-hoch-omega-im-Strukturvergleich}‹}'."\n".
                    'vergleichen wir die Struktur der Superial-Zahlen mit der Struktur der Ordninalzahlen.'."\n".
                    'Dabei stellen wir erstaunliche Ähnlichkeit bei grundlegenden Unterschieden fest, die sich wunderbar ergänzen.'."\n",
                      'Wir können sagen, dass die Ordinalzahlen zu Beginn den natürlichen Zahlen und danach zunächst den'."\n".
                    'endlichen Vielfachen sowie den endlichen Potenzen der kleinsten aktualen Unendlichkeit \lm{ ω } entsprechen, wie \lm{ 3 ω^{2} + 5 }.'."\n".
                    'Danach kommenden dann die aktual unendlichen Potenzen des aktual Unendlichen \lm{ ω^{ω} }, also wie \lm{ 3^{\frac{ 1 }{ 2 }} \s^{2} + 5 = 3^{\frac{ 1 }{ 2 }} *( ω^{ω} *)^{2} + 5 }, und so fort.'."\n",
                      'Die Superial-Zahlen entsprechen zu Beginn ebenfalls den natürlichen Zahlen, danach hingegen den endlichen Vielfachen'."\n".
                    'sowie den endlichen Potenzen der aktual unendlichen Potenzen des aktual Unendlichen \lm{ \s = ω^{ω} }.'."\n",
                      'Systematisch gesehen gibt es aber auch noch die aktual unendlichen Potenzen der natürlichen Zahlen, wie \lm{ 2^{ω} }, oder allgemeiner \lm{ n^{ω} },'."\n".
                    'die in der oben bewiesenen Überrationalitätsvermutung ja die zentrale Rolle spielen.'."\n".
                    'Daher sollten wir uns mit ihnen noch näher befassen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:UntersuchungDerPotenzialzahlen:X', text =>
                      
                'Viele Potenzialzahlen sind weder Superial-Zahlen noch Ordinalzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Dabei ist zunächst festzustellen, dass Zahlen wie \lm{ 2^{ω} }, oder allgemeiner \lm{ n^{ω} }, nicht zur Menge der'."\n".
                    'Superial-Zahlen gehören, auch, wenn der Beweis oben sie verwendet und dieser entscheidende Konsequenzen für die'."\n".
                    '\jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen Koeffizienten} der Superial-Zahlen hat.'."\n".
                    'Denn faktoriell sind diese Zahlen im Primzahl-Flächenprodukt von \lm{ \s } enthalten, jedoch kommen sie nicht in Reinform in dieser Menge vor.'."\n",
                      'Zur Menge der Ordinalzahlen gehören die Potenzialzahlen ebensowenig.'."\n".
                    'Dort lassen sie sich überhaupt gar nicht einordnen, obwohl die Zahl \lm{ 2^{ω} } als Kardinalität mit der \jump{OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese}{Kontinuumshypothese}\footnote{\const{SupNum_g_footnote_text_Kontinuumshypothese}}'."\n".
                    'grundlegend zusammenhängt und diese wiederum mit den Ordinalzahlen.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.UPZ', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on',  latex => '{  n^{ω}  =  X  }'),
                      array( display => 'on',  latex => '{  \mathbb{Pz}  =  *\{ \cdots 0^{ω}, 1^{ω}, 2^{ω}, 3^{ω}, 4^{ω}, 5^{ω}, 6^{ω}, 7^{ω}, \cdots *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Algebraische-Koeffizienten-Vermutung'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
