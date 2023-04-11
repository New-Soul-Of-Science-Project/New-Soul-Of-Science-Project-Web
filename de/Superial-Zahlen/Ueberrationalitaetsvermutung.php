<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Ueberrationalitaetsvermutung'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Primzahlprodukt-Vermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
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
                    'Die Überrationalitätsvermutung geht davon aus, dass sich die Koordinaten (aus der Menge \\latexmath{ \mathbb{A}_R }) der algebraischen Zahlen\\color{*Bearb}{(Verweis)} immer durch rationale Zahlen'."\n".
                    'aus der Menge \\latexmath{ \mathbb{A} } oder durch einen \\italic{überrationalen Bruch} von unendlich großen Primzahlenprodukten endlicher Primzahlen in Nenner und Zähler'."\n".
                    'ausdrücken lassen.'."\n".
                    'Die Wurzel aus Zwei \\latexmath{ \sqrt{2} } wäre demnach Beispielsweise auch ein überrationaler Bruch:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Angenommen \\latexmath{ \sqrt{2} } sei ein Beispiel eines überrationalen Bruchs und die Funktion \\latexmath{ ord(p, \mathbb{P}) }'."\n".
                      'würde uns den Index als Ordnungszahl einer Primzahl \\latexmath{ p }'."\n".
                      'in der Menge der endlichen Primzahlen \\latexmath{ \mathbb{P} } geben:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  ?=  \frac{ a }{ b }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Ihre Quotienten \\latexmath{ a } und \\latexmath{ b } als Zähler und Nenner,'."\n".
                      'sollen gekürzt und damit von minimaler Größe sein.'."\n".
                      'Die minimalen \\latexmath{ a } und \\latexmath{ b }, die den wesentlichen Kern des Bruchs ausmachen,'."\n".
                      'wären damit teilerfremd\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Teilerfremdheit:2022}.}:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a  \perp  b  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die beiden Quotienten können wir über ihre Menge \\latexmath{ \mathbb{Qq} } mit folgender Formel beschrieben,'."\n".
                      'wobei uns die Funktion \\latexmath{ ord(p, \mathbb{P}) }'."\n".
                      'den Index als Ordnungszahl einer Primzahl \\latexmath{ p }'."\n".
                      'in der Menge der endlichen Primzahlen \\latexmath{ \mathbb{P} } gibt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{Qq}  :=  *\{  x  *|*  x  =  \prod_{ ( \forall p_{i} \in \mathbb{P} ) ( i = ord(p, \mathbb{P}) ) ( n_{i} \in \mathbb{N} ) } \!\!\! p_{i}^{n_{i}}  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Verallgemeinert für alle überrationalen Zahlen muss ihr Bruch auch negativ oder Null sein können.'."\n".
                      'Daher benötigen wir den Bruch mit Vorzeichen, um die Menge der überrationalen Zahlen zu definieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{Qh}  :=  *\{  x  *|*  *( a, b \in \mathbb{Qq} *) *( \forall v \in \{ -1, 0, 1 \} *)  \\\ \qquad\qquad\qquad\qquad\qquad\quad *[  x  =  v \cdot \frac{ a }{ b }  *]  *\}  }'),
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
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a, b \in \mathbb{Qq} *)  *[  \sqrt{2}  ?=  \frac{ a }{ b }  *]  }'),
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
                    'Um das zu klären, bietet sich natürlich ein Rechenexperiment, also vermutlich eher ein Computer-Experiment, an.'."\n",
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
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                      
                'Näherungsbrüche der Kettenbruchentwicklung von wurzel 2', subline =>
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
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  1,414213562373095048801688724209698 \\\ \qquad\qquad\;\;\, 078569671875376948073176679737990 \\\ \qquad\qquad\;\;\, 73247846210703885038753432764157\!\dots  }',
                                            footnote => '\\color{*Bearb}{Vgl. \\jump[https://oeis.org/A002193/constant]{}{OEIS: A002193 as a constant (usually base 10)}}'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 1 }{ 1 }  =  1,\!|\overline{0}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 3 }{ 2 }  =  1,\!|5\overline{0}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 7 }{ 5 }  =  1,4|\overline{0}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 17 }{ 12 }  =  1,41|\overline{6}  =  \frac{ 17 }{ 2^{2} \cdot 3 }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 41 }{ 29 }  =  1,\overline{41|37931034482758620689655172}  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 99 }{ 70 }  =  1,41\overline{42|8571}  =  \frac{ 3^{2} \cdot 11 }{ 2 \cdot 5 \cdot 7 }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 239 }{ 169 }  =  1,\overline{4142|0118343195266272189349} \\\ \qquad\qquad\qquad\qquad\quad\, \overline{11242603550295857988165680} \\\ \qquad\qquad\qquad\qquad\quad\, \overline{47337278106508875739644970} \\\ \qquad\qquad\quad\;\,  =  \frac{ 239 }{ 13^{2} }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 577 }{ 408 }  =  1,41421|56\overline{8627450980392156} \\\ \qquad\qquad\quad\;\,  =  \frac{ 577 }{ 2^{3} \cdot 3 \cdot 17 }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 1393 }{ 985 }  =  1,41\overline{4213|1979695431472081218} \\\ \qquad\qquad\qquad\qquad\quad\;\; \overline{2741116751269035532994923} \\\ \qquad\qquad\qquad\qquad\quad\;\; \overline{8578680203045685279187817} \\\ \qquad\qquad\qquad\qquad\quad\;\; \overline{2588832487309644670050761} \\\ \qquad\qquad\qquad  =  \frac{ 7 \cdot 199 }{ 5 \cdot 197 }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 3363 }{ 2378 }  =  \frac{ 3 \cdot 19 \cdot 59 }{ 2 \cdot 29 \cdot 41 }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 8119 }{ 5741 }  =  \frac{ 23 \cdot 353 }{ 5741 }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 19601 }{ 13860 }  =  \frac{ 17 \cdot 1153 }{ 2^{2} \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 33461 }{ 19601 }  =  \frac{ 33461 }{ 17 \cdot 1153 }  }'),
                      array( display => 'on',  latex => '{  \sqrt{2}  \approx  \frac{ 80782 }{ 47321 }  =  \frac{ 2 \cdot 13^{2} \cdot 239 }{ 79 \cdot 599 }  }'),
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
