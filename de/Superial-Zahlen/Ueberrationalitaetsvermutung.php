<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Ueberrationalitaetsvermutung'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Primzahlprodukt-Vermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{Seitenstruktur}',
                    '• Als erstes feststellen, dass Produkte von \\lm{ \s } mit Brüchen unendlich vieler Primzahlen endlicher Potenzen in Zähler und Nenner ganze Zahlen sind und erst dann die Frage stellen, ob diese reellen Anteilen algebraischer Zahlen, wie \\lm{ \sqrt{ 2 } }, entsprechen.',
                    '\\bold{Fragen}',
                    '• Falls die algebraischen reellen Zahlen Faktoren von \\lm{ \s } sind, die ganze Zahlen ergeben:',
                    '– Werden diese dann beim Zählen der ganzen Superial-Zahlen mitgezählt oder nur die rationalen Koeffizienten?',
                    '– Anders gefragt: gibt es dann immer noch \\lm{ \frac{ \s }{ 2 \cdot \omega } } rationale Zahlen im Intervall zwischen Null und ausschließlich Eins, oder müssen wir das korrigieren?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Nachdem wir in der \\jump{OM:SupNum:Einleitung}{Einleitung} und in der \\jump{OM:SupNum:Formale-Entwicklung}{formalen Entwicklung} geklärt haben,'."\n".
                    'dass ein Produkt unserer superialen Basis \\lm{ \s } mit jeder endlichen rationalen Zahl\\footnote{\\const{SupNum_g_footnote_text_RationaleZahl}}'."\n".
                    '\\lm{ q } eine \\jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-N-unendlich}{unendliche natürliche Zahl aus \\lm{ \mathbb{N}_{\infty} }} ist;'."\n".
                    'und im Besonderen eine natürliche Superial-Zahl aus \\lm{ \mathbb{S}_{N} }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall q \in \mathbb{Q} *)  *[  q \cdot \s  \in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall q \in \mathbb{Q} *)  *[  q \cdot \s  \in  \mathbb{S}_{N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Nun stellt sich die Frage, ob auch bestimmte irrationale Zahlen diese Eigenschaft erfüllen.'."\n".
                    'Und ich vermute, dass dies für die Realanteile der algebraischen Zahlen\\footnote{\\const{SupNum_g_footnote_text_AlgebraischeZahl}} \\lm{ \mathbb{A}_{R} } gilt.'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{R} *)  *[  a \cdot \s  ?\in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{R} *)  *[  a \cdot \s  ?\in  \mathbb{S}_{N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies wäre schon etwas sehr besonderes.'."\n",
                      'Hier ist zu bemerken, dass algebraische Zahlen grundsätzlich komplexe Zahlen\\footnote{\\const{SupNum_g_footnote_text_KomplexeZahl}}, also Zahlen auf der Gaußschen Zahlenebene mit imaginärem Anteil, sein können.'."\n".
                    'Deshalb habe ich sie hier auf ihren realen Anteil begrenzt.'."\n",
                      'Interessanterweise sind die algebraischen Zahlen, genau wie die rationalen Zahlen, abzählbar.\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:AlgebraischeZahl:2022}, Eigenschaften.}'."\n".
                    'Die realen Anteile der algebraischen Zahlen müssen demnach also Anteile des Flächenprodukts von \\lm{ \s } sein.'."\n".
                    'Dies ist wiederum nur möglich, wenn die realen Anteile der algebraischen Zahlen durch Brüche unendlicher ganzer Zahlen dargestellt werden können.'."\n".
                    'Hier beginnt nun die Crux und hier wird es nun sehr spannend.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:XXX', text =>
                      
                'Beweis, dass die Wurzel aus Zwei \\lm{ \sqrt{2} } keine rationale Zahl ist', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um in die Thematik einzusteigen und zu lernen, worum es geht und was die Eigenschaften der algebraischen Zahlen'."\n".
                    'bezüglich ihrer Darstellung durch Brüche ganzer Zahlen sind, schauen wir uns hier einmal exemplarisch'."\n".
                    'den Widerspruchsbeweis an, der zeigt, dass die Wurzel aus Zwei \\lm{ \sqrt{2} } keine rationale Zahl ist.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Dazu stellen wir einmal fest, wie wir die Wurzel aus Zwei \\lm{ \sqrt{2} } durch eine Exponentialzahl'."\n".
                      'beschreiben können:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  =  \pm 2^{\frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *| \sqrt{2} |*  =  2^{\frac{ 1 }{ 2 }}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Sei die Wurzel aus Zwei \\lm{ \sqrt{2} } beziehungsweise der halbe Exponent von Zwei als rationaler Bruch darstellbar:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists a \in \mathbb{N} \land b \in \mathbb{N}^{+} *)  *[  2^{\frac{ 1 }{ 2 }}  =  \frac{ a }{ b }  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dann ist klar, dass es für diesen Bruch einen Nenner und einen Zähler geben muss, die teilerfremd sind:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \exists a \in \mathbb{N} \land b \in \mathbb{N}^{+} *)  *[  \exists *( a \perp b *)  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Aus der Ausgangsbedingung ist nun äquivalent mit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }}  =  \frac{ a }{ b }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2  =  \frac{ a^{2} }{ b^{2} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2 \cdot b^{2}  =  a^{2}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'woraus wir direkt erkennen, dass \\lm{ a^{2} } durch \\lm{ 2^{2} = 4 } teilbar sein muss:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  2 \mid a^{2}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2 \mid a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  4 \mid a^{2}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Aus der gleichen, abermals angewandten Formel erkennen wir aber auch,'."\n".
                      'dass dann ebenso \\lm{ b^{2} } durch \\lm{ 2^{2} = 4 } teilbar sein muss:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2 \cdot b^{2}  =  a^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  2 \mid b^{2}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2 \mid b  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  4 \mid b^{2}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dann, dass \\lm{ a^{2} } durch \\lm{ 2^{3} = 8 } und schließlich durch \\lm{ 2^{4} = 16 } teilbar sein muss:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2 \cdot b^{2}  =  a^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  8 \mid a^{2}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  8 \mid a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  16 \mid a^{2}  }'),
                      array( display => 'on',  latex => '{  \vdots  }'),
                      array( display => 'on',  latex => '{  2 \cdot b^{2}  =  a^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall x \in \mathbb{N} *)  *[  2^{x} \mid a  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall x \in \mathbb{N} *)  *[  2^{x} \mid b  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Und immer so fort, für alle ganzen endlichen Exponenten \\lm{ 2^{x} }.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
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
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dies seht im Widerspruch zu der Eingangsfeststellung, dass es für den gesuchten Bruch einen Nenner und einen Zähler geben muss, die teilerfremd sind.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Aufgrund des Widerspruchs also können wir schließen, dass es keinen rationalen Bruch mit endlichem Nenner und Zähler gibt, der die Wurzel aus Zwei darstellen kann:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists a \in \mathbb{N} \land b \in \mathbb{N}^{+} *)  *[  2^{\frac{ 1 }{ 2 }}  =  \frac{ a }{ b }  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Doch unser Beweis hilft uns glücklicherweise dabei zu verstehen, wie ein Bruch beschaffen sein muss, der die'."\n".
                    'Wurzel aus Zwei mit ganzen Zahlen darstellen kann.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Beweis der Überrationalitätsvermutung für die Wurzel aus Zwei \\lm{ \sqrt{2} }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'So verstanden und allgemeiner ausgedrückt ergibt sich die Struktur der Problematik wie folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x \in \mathbb{N}_{\infty} *) *( \forall n \in \mathbb{N} *) *( n < x *)  *[  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{x + \frac{ 1 }{ 2 }} }{ 2^{x} }  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der obige Widerspruchsbeweis erzeugt eine Lösung des Problems darüber, dass Nenner und Zähler immer wieder'."\n".
                    'durch \\lm{ 2 } teilbar sein müssen.'."\n".
                    'Und dies entspricht der Aussage, dass die fortlaufende Teilbarkeit einer vollständigen Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    'entspricht.'."\n",
                      'Für die vollständige Induktion verwenden wir das Symbol \\lm{ \omega } mit dem ihr entsprechenden aktual'."\n".
                    'unendlich großen Wert.'."\n".
                    'Und dieses setzen wir nun in die vorstehende Formel ein, womit deren Bedingungen erfüllt sind:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{\omega + \frac{ 1 }{ 2 }} }{ 2^{\omega} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{\omega} \cdot 2^{\frac{ 1 }{ 2 }} }{ 2^{\omega} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hierdurch können wir nun beliebig endlich oft – und damit potenziell endlos – die Zwei im Bruch kürzen.'."\n",
                      'Im Zähler hilft uns dies aber nicht wirklich weiter, da er, wie wir sehen, in einen Anteil zerlegt werden kann,'."\n".
                    'der dem Nenner entspricht und der übrige Faktor ist genau die Wurzel aus Zwei, die ein wesentlicher Teil unseres Problems ist, wofür wir eine Lösung suchen.'."\n",
                      'Führt das wirklich zur Lösung unseres Problems, wenn wir nicht mehr darauf bestehen, dass Nenner und Zähler endliche Zahlen sein müssen?'."\n",
                      'Wir können nun schon einmal sehen, dass der Nenner des Bruchs alleine mit unserer superialen Basis multipliziert'."\n".
                    'tatsächlich eine ganze unendlich große Zahl ergibt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ 1 }{ 2^{\omega} } \cdot \s  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Eine auf den ersten Blick nicht gleich realistisch erscheinende Möglichkeit ist,'."\n".
                    'das es ja sehr wohl sein Könnte, dass der Zähler ansich bereits so wie er ist, genau wie der Nenner, eine ganze Zahl darstellt.'."\n",
                      'Ich komme darauf, weil uns der obige Widerspruchsbeweis einen Hinweis darauf gibt,'."\n".
                    'dass die Darstellung der Wurzel aus Zwei mit einem Bruch aus zwei ganzen Zahlen nur dann möglich ist, wenn beliebig endlich oft'."\n".
                    '– und damit potenziell endlos – Zweien gekürzt werden können.'."\n".
                    'Die Lösung könnte also sein, dass eine aktual unendlich große natürliche Potenz von Zwei multipliziert mit der Wurzel aus Zwei'."\n".
                    'einfach schon eine ganze unendlich große Zahl ergibt.'."\n".
                    'Denn so erhalten wir, in einem Exponenten zusammengefasst, einen unendlich großen ganzen Exponenten plus Einhalb.'."\n".
                    'Und anders als das bei endlichen Exponenten, die rationale Anteile in der Summe haben, der Fall ist, ergibt unser Exponent direkt eine ganze Zahl.'."\n",
                      'Der Widerspruchsbeweis enthält eine Vorschrift, wie die Lösung aussieht:'."\n".
                    'Auch der so konstruierte Zähler des Bruchs muss eine unendlich große ganze Zahl sein, wie der Beweis zeigt, die beliebig endlich oft durch \\lm{ 2 } teilbar ist.'."\n".
                    'Mit anderen Worten, der Faktor \\lm{ 2^{\omega} } vor \\lm{ 2^{\frac{ 1 }{ 2 }} } macht nach unserem Beweis aus der Wurzel aus Zwei'."\n".
                    'eine ganze unendlich große Zahl:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\omega + \frac{ 1 }{ 2 }}  \in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{\omega} \cdot 2^{\frac{ 1 }{ 2 }}  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Darüber hinaus müssen der Nenner \\lm{ b } und der Zähler \\lm{ a } die im Beweis abgeleitete Bedingung erfüllen:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'In die Bedingung des Beweises'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2 \cdot b^{2}  =  a^{2}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'unseren Lösungsansatz eingesetzt, führt zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a  =  2^{\omega + \frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  b  =  2^{\omega}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  2 \cdot *( 2^{\omega} *)^{2}  =  *( 2^{\omega + \frac{ 1 }{ 2 }} *)^{2}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2 \cdot 2^{2 \omega}  =  2^{2 \omega + 2 \frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{2 \omega + 1}  =  2^{2 \omega + 1}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'was zu zeigen war.'."\n",
                      '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Damit haben wir bewiesen, dass unsere Lösung die Wurzel aus Zwei als Bruch aus ganzen Zahlen darstellt,'."\n".
                    'wenn der Nenner und der Zähler unendlich groß, im Bereich der vollständigen Induktion, sind.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:XXX', text =>
                      
                'Die Wurzel aus Zwei und die natürlichen Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wie wir wissen ist \\lm{ 2^{\omega} } ein Teil des Produkts von \\lm{ s }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ \s }{ 2^{\omega} }  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So macht es dann auch Sinn, dass ein Produkt aus unserer superialen Basis \\lm{ s } mit der Wurzel aus Zwei'."\n".
                    'eine natürliche Superial-Zahl ergibt, weil zwei unendlich große ganze Zahlen multipliziert werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\omega} \cdot 2^{\frac{ 1 }{ 2 }} \cdot \frac{ \s }{ 2^{\omega} }  :\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ 2^{\omega} \cdot 2^{\frac{ 1 }{ 2 }} }{ 2^{\omega} } \cdot \s  :\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{\frac{ 1 }{ 2 }} \cdot \s  :\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auf diese Weise erhalten die natürlichen und die ganzen Superial-Zahlen eine sehr wesentliche und interessante'."\n".
                    'Erweiterung und die Mathematik gewinnt fundamentale Erkenntnisse.'."\n",
                      'Denn wie wir im folgenden zeigen werden, können wir diese Erweiterung auf alle algebraischen Koeffizienten'."\n".
                    'erweitern.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:XXX', text =>
                      
                'Beweis der Überrationalitätsvermutung', subline =>
                  'Erweiterung des Beweises auf alle algebraischen Koeffizienten, die irrationale Zahlen sind')),
                  array( 'text', array( text => array(
                    'Der oben gezeigte Widerspruchsbeweis lässt sich direkt von der Wurzel aus Zwei auf die Wurzel'."\n".
                    'aus einer beliebigen endlichen Primzahl erweitern.'."\n".
                    'Aufgrund der Potenzgesetze gilt dies dann auch für die Wurzel aus einem beliebigen Produkt'."\n".
                    'endlicher Primzahlen und so für die Wurzel aus jeder endlichen natürlichen Zahl \\lm{ n }.'."\n",
                      'Desweiteren gilt unser Beweis im Prinzip auch für jede endliche natürliche \\lm{ x }-te Wurzel aus \\lm{ n }.'."\n".
                    'So erhalten wir als Lösungsansatz:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }}  =  \frac{ n^{\omega + \frac{ 1 }{ x }} }{ n^{\omega} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ n^{\omega} \cdot n^{\frac{ 1 }{ x }} }{ n^{\omega} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dementsprechend sind dann auch hier der Nenner und der Zähler aktual unendliche ganze Zahlen, die beliebig endlich oft durch \\lm{ n } teilbar sind.'."\n",
                      'Auch hier müssen der Nenner \\lm{ b } und der Zähler \\lm{ a } die im erweiterten Beweis abgeleitete Bedingung erfüllen:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'In die Bedingung des Beweises'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n \cdot b^{x}  =  a^{x}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'unseren Lösungsansatz eingesetzt, führt zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a  =  n^{\omega + \frac{ 1 }{ x }}  }'),
                      array( display => 'on',  latex => '{  b  =  n^{\omega}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n \cdot *( n^{\omega} *)^{x}  =  *( n^{\omega + \frac{ 1 }{ x }} *)^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n \cdot n^{x \omega}  =  n^{n \omega + x \frac{ 1 }{ x }}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{x \omega + 1}  =  n^{x \omega + 1}  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'was zu zeigen war.'."\n",
                      '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Damit haben wir bewiesen, dass unsere Lösung die \\lm{ x }-te Wurzel aus \\lm{ n } als Bruch aus ganzen Zahlen darstellt,'."\n".
                    'wenn der Nenner und der Zähler unendlich groß, im Bereich der vollständigen Induktion, sind.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:XXX', text =>
                      
                'Überrationale Zahlen und die natürlichen Superial-Zahlen', subline =>
                  'Die \\lm{ x }-te Wurzel aus \\lm{ n } sind Superial-Zahlen')),
                  array( 'text', array( text => array(
                    'Das entscheidende beim ersten Beweis, für die Wurzel aus Zwei, ist der Übergang ins aktual Unendliche,'."\n".
                    'denn wie groß die aktuale Unendlichkeit des ganzen Anteils der Potenz genau ist, spielt keine Rolle,'."\n".
                    'wie wir leicht zeigen können.'."\n".
                    'Denn unsere neue natürliche Superial-Zahl können wir in ihrem ganzen Potenzanteil um eine beliebige'."\n".
                    'ganze Potenz von \\lm{ 2 } verringern oder erweitern:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall z \in \mathbb{Z} *)  *[  2^{z} \cdot 2^{\frac{ 1 }{ 2 }} \cdot \s  :\in  \mathbb{S}_{N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir werden eine natürlich Superial-Zahl behalten, weil dessen Primzahlprodukt vollständig in \\lm{ \s } steckt.'."\n",
                      'Ebenso gilt dies dann für jeden endlichen positiven natürlichen Faktor, der natürlich selber beliebige endliche Potenzen von Primzahlen enthalten kann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall k \in \mathbb{N}^{+} *)  *[  k \cdot 2^{\frac{ 1 }{ 2 }} \cdot \s  :\in  \mathbb{S}_{N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Frage, die sich bei der \\lm{ x }-te Wurzel aus \\lm{ n } stellt ist:'."\n".
                    'Wenn wir in der gerade vorgestellten Erweiterung des Beweises für die \\lm{ x }-te Wurzel aus \\lm{ n }'."\n".
                    'nun bei den Primzahlpotenzen vielfache Potenzen von \\lm{ \omega } bekommen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  =  p_{1}^{j_{1}} \cdot p_{2}^{j_{2}} \cdot p_{3}^{j_{3}} \cdot p_{4}^{j_{4}} \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\omega}  =  p_{1}^{j_{1} \omega} \cdot p_{2}^{j_{2}\omega} \cdot p_{3}^{j_{3}\omega} \cdot p_{4}^{j_{4}\omega} \cdots  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dann haben wir diese auch in unserer Formel XXX:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n^{\frac{ 1 }{ x }}  =  \frac{ n^{\omega + \frac{ 1 }{ x }} }{ n^{\omega} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ *( p_{1}^{j_{1}} \cdot p_{2}^{j_{2}} \cdot p_{3}^{j_{3}} \cdot p_{4}^{j_{4}} \cdots *)^{\omega + \frac{ 1 }{ x }} }{ *( p_{1}^{j_{1}} \cdot p_{2}^{j_{2}} \cdot p_{3}^{j_{3}} \cdot p_{4}^{j_{4}} \cdots *)^{\omega} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ *( p_{1}^{j_{1}} \cdot p_{2}^{j_{2}} \cdot p_{3}^{j_{3}} \cdot p_{4}^{j_{4}} \cdots *)^{\omega} \cdot n^{\frac{ 1 }{ x }} }{ *( p_{1}^{j_{1}} \cdot p_{2}^{j_{2}} \cdot p_{3}^{j_{3}} \cdot p_{4}^{j_{4}} \cdots *)^{\omega} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ *( p_{1}^{j_{1} \omega} \cdot p_{2}^{j_{2} \omega} \cdot p_{3}^{j_{3} \omega} \cdot p_{4}^{j_{4} \omega} \cdots *) \cdot n^{\frac{ 1 }{ x }} }{ p_{1}^{j_{1} \omega} \cdot p_{2}^{j_{2} \omega} \cdot p_{3}^{j_{3} \omega} \cdot p_{4}^{j_{4} \omega} \cdots }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies können wir problemlos auf die unendlich großen Potenzen von Primzahlen kürzen, die alle in \\lm{ s }'."\n".
                    'enthalten sind:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ *( p_{1}^{\omega} \cdot p_{2}^{\omega} \cdot p_{3}^{\omega} \cdot p_{4}^{\omega} \cdots *) \cdot n^{\frac{ 1 }{ x }} }{ p_{1}^{\omega} \cdot p_{2}^{\omega} \cdot p_{3}^{\omega} \cdot p_{4}^{\omega} \cdots }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }}  =  \frac{ *( p_{1} \cdot p_{2} \cdot p_{3} \cdot p_{4} \cdots *)^{\omega} \cdot n^{\frac{ 1 }{ x }} }{ *( p_{1} \cdot p_{2} \cdot p_{3} \cdot p_{4} \cdots *)^{\omega} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Nenner ist also, wie oben, wieder ein ganzer Teiler des Primzahl-Flächenprodukts von \\lm{ s }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ \s }{ *( p_{1} \cdot p_{2} \cdot p_{3} \cdot p_{4} \cdots *)^{\omega} }  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So macht es dann auch wieder Sinn, dass ein Produkt aus unserer superialen Basis \\lm{ s } mit der \\lm{ x }-ten Wurzel aus \\lm{ n }'."\n".
                    'eine natürliche Superial-Zahl ergibt, weil zwei unendlich große ganze Zahlen multipliziert werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( p_{1} \cdot p_{2} \cdot p_{3} \cdot p_{4} \cdots *)^{\omega} \cdot n^{\frac{ 1 }{ x }} \cdot \frac{ \s }{ *( p_{1} \cdot p_{2} \cdot p_{3} \cdot p_{4} \cdots *)^{\omega} }  :\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ *( p_{1} \cdot p_{2} \cdot p_{3} \cdot p_{4} \cdots *)^{\omega} \cdot n^{\frac{ 1 }{ x }} }{ *( p_{1} \cdot p_{2} \cdot p_{3} \cdot p_{4} \cdots *)^{\omega} } \cdot \s  :\in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^{\frac{ 1 }{ x }} \cdot \s  :\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hiermit erhalten die natürlichen und die ganzen Superial-Zahlen eine Erweiterung auf alle algebraischen Koeffizienten.'."\n".
                    'Etwas ganz besonderes.'."\n".
                    ''))),
                  /* array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:XXX', text =>
                      
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
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
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
                    ''))), */

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Ableitungen-Integrale:Ableitung:BeispielrechnungAbleitungMit-s-2',
                Title => 'Alte Entwurf der Überrationalitätsvermutung …',
                TitleVis => 'Alter Entwurf der Überrationalitätsvermutung:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Die Überrationalitätsvermutung geht davon aus, dass sich die Koordinaten (aus der Menge \\latexmath{ \mathbb{A}_R }) der algebraischen Zahlen immer durch rationale Zahlen'."\n".
                    'aus der Menge \\latexmath{ \mathbb{A} } oder durch einen \\italic{überrationalen Bruch} von unendlich großen Primzahlprodukten endlicher Primzahlen in Nenner und Zähler'."\n".
                    'ausdrücken lassen.'."\n".
                    'Die Wurzel aus Zwei \\latexmath{ \sqrt{2} } wäre demnach Beispielsweise auch ein überrationaler Bruch:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Angenommen \\latexmath{ \sqrt{2} } sei ein Beispiel eines überrationalen Bruchs:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  ?=  \frac{ a }{ b }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Ihre Quotienten \\latexmath{ a } und \\latexmath{ b }, als Zähler und Nenner,'."\n".
                      'sollen gekürzt und damit von minimaler Größe sein.'."\n".
                      'Die minimalen \\latexmath{ a } und \\latexmath{ b }, die den wesentlichen Kern des Bruchs ausmachen,'."\n".
                      'wären damit teilerfremd\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Teilerfremdheit:2022}.}\\footnote[*Entwick]{\\color{*Entwick}{Die Teilerfremdheit hat eine Verbindung zur Riemannschen Zeta-Funktion: \\\\ Internet: \\\\ Vgl. \\cite{wiki:Teilerfremdheit:2022}, Eigenschaften.}}:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a \perp b  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Diese Brüche können als die Menge \\latexmath{ \mathbb{Qr}^+ } mit folgender Formel minimalistisch beschrieben werden,'."\n".
                      'wobei uns die Funktion \\latexmath{ ord(p, \mathbb{P}) }'."\n".
                      'den Index als Ordnungszahl einer Primzahl \\latexmath{ p }'."\n".
                      'in der Menge der endlichen Primzahlen \\latexmath{ \mathbb{P} } gibt.'."\n".
                      'Auch müssen sie die Bedingung erfüllen, dass sie endlich groß sind:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{Qr}^{+}  :=  *\{  x  *|*  *( \exists x *) *( \exists n \in \mathbb{N} *) *( x < n *)  \\\ \qquad\qquad\qquad\quad\; *[  x  =  \prod_{ ( \forall p_{i} \in \mathbb{P} ) ( i = ord(p, \mathbb{P}) ) ( z_{i} \in \mathbb{Z} ) } \!\!\! p_{i}^{z_{i}}  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Verallgemeinert für alle überrationalen Zahlen muss ihr Bruch auch negativ oder Null sein können.'."\n".
                      'Daher benötigen wir den Bruch mit Vorzeichen, um die Menge \\latexmath{ \mathbb{Qr} } der überrationalen Zahlen zu definieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{Qr}  :=  *\{  x  *|*  *( q^{+} \in \mathbb{Qr}^{+} *) *( \forall v \in \{ -1, 0, 1 \} *)  \\\ \qquad\qquad\qquad\qquad\qquad\quad *[  x  =  v \cdot q^{+}  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Das bedeutet, dass wir unser Beispiel nun so in seiner Beschreibung verfeinern können:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  ?\in  \mathbb{Qr}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können jetzt Überlegungen anstellen, ob dies prinzipiell überhaupt möglich ist:'."\n",
                      'Wenn wir die \\latexmath{ \sqrt{2} } in einer Näherung berechnen, dann erhalten wir ja immer mehr Nachkommastellen.'."\n".
                    'Dies müsste bedeuten, dass im Zähler und Nenner unseres Bruchs immer mehr teilerfremde Primzahlen hinzukommen,'."\n".
                    'die das Ergebnis dann immer genauer werden lassen.'."\n".
                    'Denn die Wurzel aus Zwei hat als irrationale Zahl ja unendlich viele, aperiodische Nachkommastellen.'."\n",
                      'Nun gibt es im Grunde zwei naiv denkbare Möglichkeiten für die Entwicklung der Primzahlen, jeweils im Nenner und Zähler:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Entweder die Primzahlen wechseln dabei ständig alle und es ist keine Annäherung an eine bestimmte Primzahlzusammensetzung zu beobachten.',
                        'Oder nach und nach kristallisieren sich Primzahlen heraus, die ab einer bestimmten Genauigkeit bleiben,'."\n".
                          'und diese werden dann immer mehr.',
                    ))),
                  array( 'text', array( text => array(
                    'Um das zu klären, bietet sich natürlich ein \\jump{OM:SupNum:Ueberrationalitaetsvermutung:Untersuchung}{Rechenexperiment},'."\n".
                    'also vermutlich eher ein Computer-Experiment, an.'."\n",
                      'Im ersten Fall fällt es mir schwer zu verstehen, wie wir da weiterkommen wollen.'."\n",
                      'Im zweiten Fall können wir uns vielleicht überlegen, ob das grundsätzlich möglich ist,'."\n".
                    'denn die sich herauskristallisierenden Primzahl müssen wohl bestimmte Eigenschaften haben,'."\n".
                    'damit das Ergebnis konvergiert, also immer genauer wird, und nicht wieder zerstört wird:'."\n",
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
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      '\\color{*Bearb}{In Arbeit …}'."\n".
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
                    ))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Untersuchung'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Untersuchung  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Ueberrationalitaetsvermutung:Untersuchung',
              '\\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Wikipedia: \\jump[https://de.wikipedia.org/w/index.php?title=Quadratwurzel_aus_2&oldid=229698584]{}{Quadratwurzel aus 2, Geschichte}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Alte Inder:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.U', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 577 }{ 408 }  =  \sqrt{2}  \approx  \frac{ 577 }{ 2^{3} \cdot 3 \cdot 17 }  }'),
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
                    ''))),
                  array( 'text', array( text => array(
                    'Babylonier:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.U', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 30547 }{ 21600 }  =  \frac{ 11 \cdot 2777 }{ 2^{5} \cdot 3^{3} \cdot 5^{2} }  }'),
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
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Näherungsbrüche der Kettenbruchentwicklung von Wurzel aus Zwei', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'OEIS: \\jump[https://oeis.org/search?q=A001333+-id:A001333]{}{A002965 – Interleave denominators (A000129) and numerators (A001333) of convergents to sqrt(2).}'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV.U', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  1,414213562373095048801688724209698 \\\ \qquad\qquad\;\;\, 078569671875376948073176679737990 \\\ \qquad\qquad\;\;\, 73247846210703885038753432764157\!\dots  }',
                                            footnote => '\\color{*Bearb}{Vgl. \\jump[https://oeis.org/A002193/constant]{}{OEIS: A002193 as a constant (usually base 10)}}'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 1 }{ 1 }  }'),
                      array( display => 'off', latex => '{  \frac{ 1 }{ 1 }  =  1,\!|\overline{0}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 3 }{ 2 }  }'),
                      array( display => 'off', latex => '{  \frac{ 3 }{ 2 }  =  1,\!|5\overline{0}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 7 }{ 5 }  }'),
                      array( display => 'off', latex => '{  \frac{ 7 }{ 5 }  =  1,4|\overline{0}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 17 }{ 12 }  =  \frac{ 17 }{ 2^{2} \cdot 3 }  }'),
                      array( display => 'off', latex => '{  \frac{ 17 }{ 12 }  =  1,41|\overline{6}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 41 }{ 29 }  }'),
                      array( display => 'off', latex => '{  \frac{ 41 }{ 29 }  =  1,\overline{41|37931034482758620689655172}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 99 }{ 70 }  =  \frac{ 3^{2} \cdot 11 }{ 2 \cdot 5 \cdot 7 }  }'),
                      array( display => 'off', latex => '{  \frac{ 99 }{ 70 }  =  1,41\overline{42|8571}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 239 }{ 169 }  =  \frac{ 239 }{ 13^{2} }  }'),
                      array( display => 'off', latex => '{  \frac{ 239 }{ 169 }  =  1,\overline{4142|0118343195266272189349} \\\ \qquad\qquad\quad\;\, \overline{11242603550295857988165680} \\\ \qquad\qquad\quad\;\, \overline{47337278106508875739644970}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 577 }{ 408 }  =  \frac{ 577 }{ 2^{3} \cdot 3 \cdot 17 }  }'),
                      array( display => 'off', latex => '{  \frac{ 577 }{ 408 }  =  1,41421|56\overline{8627450980392156} \\\ \qquad\qquad\quad\;\,  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 1393 }{ 985 }  =  \frac{ 7 \cdot 199 }{ 5 \cdot 197 }  }'),
                      array( display => 'off', latex => '{  \frac{ 1393 }{ 985 }  =  1,41\overline{4213|1979695431472081218} \\\ \qquad\qquad\quad\;\;\; \overline{2741116751269035532994923} \\\ \qquad\qquad\quad\;\;\; \overline{8578680203045685279187817} \\\ \qquad\qquad\quad\;\;\; \overline{2588832487309644670050761}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 3363 }{ 2378 }  =  \frac{ 3 \cdot 19 \cdot 59 }{ 2 \cdot 29 \cdot 41 }  }'),
                      array( display => 'off', latex => '{  \frac{ 3363 }{ 2378 }  =  1,41\overline{4213|6248948696383515559} \\\ \qquad\qquad\quad\;\;\, \overline{2935239697224558452481076} \\\ \qquad\qquad\quad\;\;\, \overline{5349032800672834314550042} \\\ \qquad\qquad\quad\;\;\, \overline{0521446593776282590412111} \\\ \qquad\qquad\quad\;\;\, \overline{0176619007569386038687973} \\\ \qquad\qquad\quad\;\;\, \overline{0866274179983179}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 8119 }{ 5741 }  =  \frac{ 23 \cdot 353 }{ 5741 }  }'),
                      array( display => 'off', latex => '{  \frac{ 8119 }{ 5741 }  =  1,4142135|516460546943041282\!\dots  }',
                                            footnote => '\\color{*Bearb}{Beginn und Ende der Periode sind unbekannt: \\\\ Vgl. \\jump[https://www.wolframalpha.com/input?i=8119%2F5741]{}{WolframAlpha: 8119/5741}}'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 19601 }{ 13860 }  =  \frac{ 17 \cdot 1153 }{ 2^{2} \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 }  }'),
                      array( display => 'off', latex => '{  \frac{ 19601 }{ 13860 }  =  1,41\overline{421356}|  }',
                                            footnote => '\\color{*Bearb}{Vgl. \\jump[https://www.wolframalpha.com/input?i=19601%2F13860]{}{WolframAlpha: 19601/13860}}'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 47321 }{ 33461 }  =  \frac{ 79 \cdot 599 }{ 33461 }  }'),
                      array( display => 'off', latex => '{  \frac{ 47321 }{ 33461 }  =  1,414213562|0573204626281342\!\dots  }',
                                            footnote => '\\color{*Bearb}{Beginn und Ende der Periode sind unbekannt: \\\\ Vgl. \\jump[https://www.wolframalpha.com/input?i=47321%2F33461]{}{WolframAlpha: 47321/33461}}'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 114243 }{ 80782 }  =  \frac{ 3 \cdot 113 \cdot 337 }{ 2 \cdot 13^{2} \cdot 239 }  }'),
                      array( display => 'off', latex => '{  \frac{ 114243 }{ 80782 }  =  1,4\overline{14213562|4272734024906538\!\dots^{546}}  }',
                                            footnote => '\\color{*Bearb}{Vgl. \\jump[https://www.wolframalpha.com/input?i=114243%2F80782]{}{WolframAlpha: 114243/80782}}'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 195025 }{ 114243 }  =  \frac{ 5^{2} \cdot 29 \cdot 269 }{ 3 \cdot 113 \cdot 337 }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ XXX }{ 275807 }  =  \frac{ XXX }{ 7 \cdot 31^{2} \cdot 41 }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ XXX }{ 470832 }  =  \frac{ XXX }{ 2^{4} \cdot 3 \cdot 17 \cdot 577 }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ XXX }{ XXX }  =  \frac{ XXX }{ XXX }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ XXX }{ XXX }  =  \frac{ XXX }{ XXX }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ XXX }{ XXX }  =  \frac{ XXX }{ XXX }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 30547 }{ 21600 }  =  \frac{ 11 \cdot 2777 }{ 2^{5} \cdot 3^{3} \cdot 5^{2} }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ XXX }{ XXX }  =  \frac{ XXX }{ XXX }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ XXX }{ XXX }  =  \frac{ XXX }{ XXX }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ XXX }{ XXX }  =  \frac{ XXX }{ XXX }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ XXX }{ XXX }  =  \frac{ XXX }{ XXX }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ XXX }{ XXX }  =  \frac{ XXX }{ XXX }  }'),
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
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Untersuchung:XXX', text =>
                      
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
                    ''))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
