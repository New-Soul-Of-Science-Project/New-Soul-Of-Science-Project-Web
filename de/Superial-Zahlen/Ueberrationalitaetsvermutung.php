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
                    'dass ein Produkt unserer superialen Basis \\lm{ \s } mit jeder endlichen rationalen Zahl\\footnote{\\const{SupNum_g_footnote_text_RationaleZahl}} \\lm{ q } eine \\jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-N-unendlich}{unendliche natürliche Zahl} ist;'."\n".
                    'und im Besonderen eine natürliche Superial-Zahl:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall q \in \mathbb{Q} *)  *[  q \cdot \s  \in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall q \in \mathbb{Q} *)  *[  q \cdot \s  \in  \mathbb{S}_{N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Da stellt sich hier die Frage, ob auch bestimmte irrationale Zahlen diese Eigenschaft erfüllen.'."\n".
                    'Und ich vermute, dass dies für die Realanteile der algebraischen Zahlen\\footnote{\\const{SupNum_g_footnote_text_AlgebraischeZahl}} \\lm{ \mathbb{A}_{R} } gilt.'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{R} *)  *[  a \cdot \s  ?\in  \mathbb{N}_{\infty}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{R} *)  *[  a \cdot \s  ?\in  \mathbb{S}_{N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies wäre schon etwas sehr besonderes.'."\n",
                      'Hier ist zu bemerken, dass algebraische Zahlen grundsätzlich komplexe Zahlen\\color{*Bearb}{(Verweis)}, also Zahlen auf der Gaußschen Zahlenebene mit imaginärem Anteil, sein können.'."\n".
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
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  =  \pm 2^{\frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *| \sqrt{2} |*  =  2^{\frac{ 1 }{ 2 }}  }'),
                      array( display => 'on',  latex => '{  *( \exists a \in \mathbb{N} \land b \in \mathbb{N}^{+} *)  *[  2^{\frac{ 1 }{ 2 }}  =  \frac{ a }{ b }  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \exists a \in \mathbb{N} \land b \in \mathbb{N}^{+} *)  *[  \exists *( a \perp b *)  *]  }'),
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }}  =  \frac{ a }{ b }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2  =  \frac{ a^{2} }{ b^{2} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2 \cdot b^{2}  =  a^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a^{2}  =  gerade  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a  =  gerade  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  2 \mid a  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  4 \mid a^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  2 \mid b^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  2 \mid b  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  4 \mid b^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  6 \mid a^{2}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \lnot *( a \perp b *)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \lnot *( \frac{ a }{ 2 } \perp \frac{ b }{ 2 } *)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \lnot *( \frac{ a }{ 4 } \perp \frac{ b }{ 4 } *)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall x \in \mathbb{N} *)  *[  \lnot *( \frac{ a }{ 2^{x} } \perp \frac{ b }{ 2^{x} } *)  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a, x \in \mathbb{N} *) *( \forall b \in \mathbb{N}^{+} *)  *[  \nexists *( \frac{ a }{ 2^{x} } \perp \frac{ b }{ 2^{x} } *)  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists a \in \mathbb{N} \land b \in \mathbb{N}^{+} *)  *[  2^{\frac{ 1 }{ 2 }}  =  \frac{ a }{ b }  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So verstanden und allgemeiner ausgedrückt ergibt sich die Struktur der Problematik wie folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x \in \mathbb{N}_{\infty} *) *( \forall n \in \mathbb{N} *) *( n < x *)  *[  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{x + \frac{ 1 }{ 2 }} }{ 2^{x} }  *]  }'),
                      array( display => 'on',  latex => '{  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{\omega + \frac{ 1 }{ 2 }} }{ 2^{\omega} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  2^{\frac{ 1 }{ 2 }}  =  \frac{ 2^{\omega} \cdot 2^{\frac{ 1 }{ 2 }} }{ 2^{\omega} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier können wir nun beliebig endlich oft – und damit potenziell endlos – die Zwei im Bruch kürzen.'."\n",
                      'Im Zähler hilft uns dies aber nicht wirklich weiter, da er in einen Anteil zerlegt werden kann,'."\n".
                    'der dem Nenner entspricht und der übrige Anteil ist genau das gleich Problem, wofür wir eine Lösung suchen.'."\n",
                      'Wir können aber sehen, dass der Nenner des Bruchs mit unserer superialen Basis multipliziert'."\n".
                    'tatsächlich eine ganze unendlich große Zahl ergibt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ 1 }{ 2^{\omega} } \cdot \s  \in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Eine zunächst unmöglich erscheinende Frage, die aber von Relevanz sein könnte, kommt mir:'."\n".
                    'Könnte es sein, dass der Zähler ansich schon, wie der Nenner, eine ganze Zahl ist?'."\n",
                      'Ich komme darauf, weil uns der obige Widerspruchsbeweis einen Hinweis darauf gibt,'."\n".
                    'dass die Darstellung der Wurzel aus Zwei nur dann möglich ist, wenn beliebig endlich oft'."\n".
                    '– und damit potenziell endlos – gekürzt werden kann.'."\n".
                    'Die Lösung könnte also sein, dass eine aktual unendlich große natürliche Potenz von Zwei plus oder minus einer rationalen Zahl'."\n".
                    'im Exponenten eine ganze unendlich große Zahl ergibt, anders als das bei endlichen rationalen Exponenten der Fall ist.'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{\omega + \frac{ 1 }{ 2 }}  ?\in  \mathbb{N}_{\infty}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ 2^{\omega} \cdot 2^{\frac{ 1 }{ 2 }} }{ 2^{\omega} } \cdot \s  ?\in  \mathbb{S}_{N}  }'),
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
                  array( 'equations',
                    array( equ_text_std => 'SN.ÜV', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2  =  \frac{ 2^{2 \cdot \omega} \cdot 2^{2 \cdot \frac{ 1 }{ 2 }} }{ 2^{2 \cdot \omega} }  }'),
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Ueberrationalitaetsvermutung:Vortext:XXX', text =>
                      
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
                      
                'Überrationalitätsvermutung', subline =>
                  '')),
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
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Eigenschaften'),
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
