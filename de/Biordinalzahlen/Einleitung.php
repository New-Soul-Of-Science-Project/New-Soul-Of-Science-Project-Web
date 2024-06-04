<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:BiOrd:Einleitung'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:BiOrd:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{Ausgangspunkt}',
                    // '• Die Biordinalzahlen sind eine Darstellung aller ganzer Zahlen durch Mengen, also auch der negativen ganzen Zahlen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Ausgangspunkt der Biordinalzahlen sind die Ordinalzahlen\\footnote{\\const{NSOSP_g_footnote_text_Ordinalzahl}}.'."\n".
                    'Bei den Elementen der Menge der Ordinalzahlen \\latexmath{ \mathbb{On} } handelt es sich um die Fortsetzung des Zählens oder der uns allgemein bekannten Anzahl von Dingen ins Aktual-Unendliche.'."\n",
                      'Die nachfolgend eingeführten Biordinalzahlen erweitern das Zählen (Vorwärtszählen) um das Rückwärtszählen von jeder Zahl aus bis in den negativen Bereich.'."\n".
                    'Das bedeutet, dass das Rückwärtszählen und die Subtraktion innerhalb der Biordinalzahlen vollständig definiert sind,'."\n".
                    'was innerhalb der Ordinalzahlen nicht der Fall ist.'."\n",
                      'Die Elemente der Menge der Biordinalzahlen \\latexmath{ \mathbb{Bn} } definieren so nicht nur die Anzahlen, die vorhanden sind,'."\n".
                    'sondern auch die Anzahlen, die an etwas vollständigem Fehlen, wie wir sehen werden.'."\n".
                    'Durch die Erweiterung werden die Ordinalzahlen als Biordinalzahlen zu einem algebraischen Ring\\footnote{\\const{NSOSP_g_footnote_text_RingAlgebra}}.'."\n".
                    'Denn nun sind in den Biordinalzahlen die Addition und vollständige Subtraktion und ihr neutrales Element „Null“'."\n".
                    'sowie auch die Multiplikation und ihr neutrales Element „Eins“ definiert.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:XXX', text =>
                      
                'Erreichte und erwartete Erkenntnisgewinne', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Aus der Perspektive der \\jump{OM:SupNum:Home}{Superial-Zahlen} bringt dies auch ein besseres Verständnis der positiven aktual unendlichen Zahlen,'."\n".
                    'wie zum Beispiel \\lm{ \s - 1 }, mit sich.'."\n".
                    'Denn hier fehlt an \\lm{ \s } etwas.'."\n",
                      'Auch zum Beweis der \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} trägt die mengentheoretische Perspektive des Negativen'."\n".
                    'tiefe Einsichten bei, indem festgestellt wird, dass \\lm{ \omega - 1 } zu einer riesigen Lücke zwischen den endlichen natürlichen Zahlen'."\n".
                    'und dem hier nachgewiesenen Produkt aller endlichen Primzahlen \\lm{ \omega } gehört.'."\n",
                      'Und nicht zuletzt können wir im Zusammenhang mit geometrischen Überlegungen etwas über die ontologische Struktur des Zählens lernen,'."\n".
                    'deren Erweiterung auf das Negative eine grundlegende Asymmetrie in den ganzen Zahlen erkennen lässt.'."\n".
                    'Meine Intuition sagt mir, dass diese Asymmetrie gemeinsam mit der bewiesenen Primzahlprodukt-Vermutung in der Lage sein könnte'."\n".
                    'entscheidendes zur Klärung der Riemannschen Vermutung\\footnote{\\const{SupNum_g_footnote_text_RiemannschenVermutung}} beizutragen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:Ordinalzahlen', text =>
                      
                'Ordinalzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Dabei werden zunächst die natürlichen Zahlen durch eine Entsprechung zu eineindeutig bestimmten Mengen dargestellt,'."\n".
                    'die selber genau eine Anzahl an Mengen enthalten, wie die jeweilige natürliche Zahl besagt.'."\n",
                    // 'Diese Fortsetzung wird mit Hilfe der Mengenlehre, durch die Definition einer Entsprechung eines (An-)Zahlensymbols mit einer bestimmten Menge, die eben selber wieder diese Anzahlen an Mengen enthält, erreicht.'."\n",
                      'Die Ordinalzahlen sind so über ihre Definition durch geordnete Mengen folgendermaßen bestimmt:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}, Die natürlichen Zahlen als geordnete Mengen.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  0  :=  *\{ *\}  }'),
                      array( display => 'on',  latex => '{  1  :=  *\{ 0 *\}  =  *\{ *\{ *\} *\}  }'),
                      array( display => 'on',  latex => '{  2  :=  *\{ 0, 1 *\}  =  *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on',  latex => '{  3  :=  *\{ 0, 1, 2 *\}  =  *\{ *\{ *\}, *\{ *\{ *\} *\}, *\{ *\{ *\}, *\{ *\{ *\} *\} *\} *\}  }'),
                      array( display => 'on',  latex => '{  n  :=  *\{ 0, 1, 2, \cdots , n - 1 *\}  }',
                                          label_name => 'OM:BiOrd:Einleitung:Vortext:Equ-n-gleich-Menge-Null-bis-n-minus-Eins', label_text => '\\name{OM:BiOrd:Einleitung:Vortext:Equ-n-gleich-Menge-Null-bis-n-minus-Eins}', label_incr => true),
                      array( display => 'on',  latex => '{  n + 1  :=  *\{ 0, 1, 2, \cdots , n *\}  =  n \cup *\{ n *\}  }',
                                          label_name => 'OM:BiOrd:Einleitung:Vortext:Equ-n-plus-Eins', label_text => '\\name{OM:BiOrd:Einleitung:Vortext:Equ-n-plus-Eins}', label_incr => true),
                      array( display => 'on',  latex => '{  \mathbb{N}  =  *\{ 0, 1, 2, 3, 4, 5, \cdots *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Deshalb soll gelten, dass die Null ein Element der natürlichen Zahlen ist, wie in den Peano-Axiomen\\footnote{\\const{NSOSP_g_footnote_text_PeanoAxiome}}'."\n".
                    'zur Definition von \\latexmath{ \mathbb{N} } gefordert und wie für angeordnete Körper definiert\\footnote{\\const{NSOSP_g_footnote_text_NullIstTeilVonPositiv}}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{N}  :=  \mathbb{N}_{0}  }',
                                          label_name => 'OM:BiOrd:Einleitung:Vortext:Equ-Def-N-enthaelt-Null', label_text => '\\name{OM:BiOrd:Einleitung:Vortext:Equ-Def-N-enthaelt-Null}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Der Übergang vom Endlichen ins Aktual-Unendliche geschieht durch die Feststellung, dass dann auch die Anzahl der Elemente der Menge der natürlichen Zahlen \\term{\M(N)} durch ein Symbol dargestellt werden kann, nämlich \\term{ω};'."\n".
                    'und nach Formel \\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-n-plus-Eins} so dann auch \\term{ω+1} und folgende:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on', latex => '{  \mathbb{N}  :=  ??? *\{  n ~\middle|~ \left( n \in \mathbb{N} \right) \left( \forall x \in \mathbb{N} \right) \left[  x < n  \right]  *\}  }'),
                      array( display => 'on', latex => '{  \omega  :=  \mathbb{N}  =  *\{ 0, 1, 2, 3, 4, 5, \cdots *\}  }',
                                          label_name => 'OM:BiOrd:Einleitung:Vortext:Equ-Def-omega-gleich-N', label_text => '\\name{OM:BiOrd:Einleitung:Vortext:Equ-Def-omega-gleich-N}', label_incr => true),
                      array( display => 'on', latex => '{  \omega + 1  :=  \mathbb{N} \cup *\{ \mathbb{N} *\}  =  *\{ 0, 1, 2, 3, \cdots , \mathbb{N} *\}  }'),
                      array( display => 'on', latex => '{  \omega + 2  :=  *( \omega + 1 *) \cup *\{ \omega + 1 *\} \\\ \qquad\;  =  *\{ 0, 1, 2, 3, \cdots , \mathbb{N}, *\{ 0, 1, 2, 3, \cdots , \mathbb{N} *\} *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Insgesamt sehen wir, dass jede definierte Zahl der Anzahl der Elemente in einer eineindeutig bestimmten geordnete Menge entspricht.'."\n",
                      'Die Anzahl \\latexmath{ \omega } symbolisiert mathematisch gesehen die aktual unendliche Anzahl,'."\n".
                    'die den Schritten einer vollständigen Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}} entspricht, um alle endlichen Zahlen von der Null an'."\n".
                    'vollständig durchzuzählen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:XXX', text =>
                      
                'Grundsätzliche Idee zur Erweiterung der Ordinalzahlen ins Negative', subline =>
                  'Der Ansatz vorerst beispielhaft mit der Menge der natürlichen Zahlen \\latexmath{ \mathbb{N} }, zum einfachen Einstieg und erweiterten Verständnis')),
                  array( 'text', array( text => array(
                    'Aufgrund meines strukturellen Interesses an der Unendlichkeit und meiner Neugier suchte ich vor vielen Jahren'."\n".
                    'nach einer möglichen Fortsetzung der Ordinalzahlen ins Negative.'."\n".
                    'Schließlich kam ich darauf, dass negative Zahlen zum Beispiel über das Fehlen von bestimmten Mengen an der Menge der natürlichen Zahlen'."\n".
                    'dargestellt werden können:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  2  :=  *\{ 0, 1 *\}  =  *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  1  :=  *\{ 0 *\}  =  *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  0  :=  *\{ *\}  }'),
                      array( display => 'on', latex => '{  -1  :=  \mathbb{N} \setminus 1  =  \mathbb{N} \setminus *\{ 0 *\}  =  \mathbb{N} \setminus *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  -2  :=  \mathbb{N} \setminus 2  =  \mathbb{N} \setminus *\{ 0, 1 *\}  =  \mathbb{N} \setminus *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  -n  :=  \mathbb{N} \setminus n  =  \mathbb{N} \setminus *\{ 0, 1, \cdots , n - 1 *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auch hier wird konsequenterweise das Prinzip aufrecht erhalten, dass die Menge, die eine Zahl repräsentiert in Richtung des Negativen'."\n".
                    'in ihrer Anzahl sinkt.'."\n".
                    'An einer gegebenen Anzahl fehlen entsprechend viele Zahlen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:XXX', text =>
                      
                'Der Ansatz mit der Menge der natürlichen Zahlen \\latexmath{ \mathbb{N} } trägt nur bedingt', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wollen wir die Ordinalzahlen um jede Form von Subtraktion erweitern, dann ist der Ansatz mit \\latexmath{ \mathbb{N} } nicht ausreichend:'."\n",
                      'Zum einen bedeutet unser gewünschtes Ziel auch von \\latexmath{ \omega } aus rückwärts zu zählen,'."\n".
                    'ohne, dass dies direkt negative Zahlen ergibt.'."\n".
                    'Doch dies entspricht im Grunde genau der zuvor genannten beispielhaften Idee,'."\n".
                    'die Ordinalzahlen ins Negative zu erweitern, wie wir nachfolgend sehen werden.'."\n".
                    'Zum anderen ist es so, dass wir über das zuvor genannte Beispiel quasi am „Ende“ des Ins-Negative-Zählens'."\n".
                    'wieder bei der leeren Menge landen, also bei der Null, was einen Zirkel ergibt, der so nicht sinnvoll ist,'."\n".
                    'weil er das negative „Ende“ der ganzen Zahl mit der Mitte ihrer Zahlengeraden verbindet.'."\n",
                      'Beides kann vermieden werden, wenn wir anstatt \\latexmath{ \mathbb{N} } das Mengenuniversum \\latexmath{ \mathbb{U} }'."\n".
                    'zur Definition der negativen Zahlen verwenden:'."\n".
                    'Wir können \\latexmath{ \mathbb{N} } als \\latexmath{ \omega } benutzen, um von dort aus rückwärts zu zählen.'."\n".
                    'Und da \\latexmath{ \mathbb{U} } nicht nur die Ordinalzahlen enthält, sondern alle Mengen, landen wir nicht bei der leeren Menge,'."\n".
                    'wenn wir endlos rückwärts ins Negative zählen, denn es bleiben alle anderen Mengen, die nicht den Ordinalzahlen entsprechen,'."\n".
                    'übrig.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:XXX', text =>
                      
                'Biordinalzahlen als Erweiterung der Ordinalzahlen', subline =>
                  'Der Ansatz mit dem Mengenuniversum \\latexmath{ \mathbb{U} } zur allgemeinen Definition der Subtraktion von Ordinalzahlen')),
                  array( 'text', array( text => array(
                    'Auch, wenn sich auf die oben geschilderte Weise endliche negative Zahlen sinnvoll darstellen lassen, '."\n".
                    'können wir so nicht alle negativen Ordinalzahlen darstellen.'."\n".
                    'Die Darstellung von \\latexmath{ –ω } entspräche wie gesagt dann der leeren Menge, die aber schon der Null entspricht.'."\n".
                    'Noch größere unendliche negative Ordinalzahlen lassen sich so generell nicht darstellen, denn an der Menge'."\n".
                    'der natürlichen Zahlen \\latexmath{ \mathbb{N} } können nicht mehr Zahlen fehlen, als drinne sind.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Negative Ordinalzahlen} \\\\'."\n".
                    'Die Lösung dieses Problems finden wir, wie gesagt, darin, anstatt Zahlen an der Menge der natürlichen Zahlen fehlen zu lassen,'."\n".
                    'sie aus dem Mengenuniversum\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Allklasse:2020}.} zu entfernen.'."\n",
                      'Das Mengenuniversum \\latexmath{ \mathbb{U} } ist die kleinste Klasse von Mengen, die alle Mengen enthält, die definierbar sind.'."\n".
                    'Am Mengenuniversum können wir quasi beliebig viele Zahlen fehlen lassen, wenn wir diese alle durch Mengen darstellen.'."\n".
                    'Wir ersetzen also die Menge der natürlichen Zahlen \\latexmath{ \mathbb{N} } in unserer oben geschilderten Idee durch das Mengenuniversum \\latexmath{ \mathbb{U} }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2  :=  *\{ 0, 1 *\}  =  *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on',  latex => '{  1  :=  *\{ 0 *\}  =  *\{ *\{ *\} *\}  }'),
                      array( display => 'on',  latex => '{  0  :=  *\{ *\}  }'),
                      array( display => 'on',  latex => '{  -1  :=  \mathbb{U} \setminus 1  =  \mathbb{U} \setminus *\{ 0 *\}  =  \mathbb{U} \setminus *\{ *\{ *\} *\}  }'),
                      array( display => 'on',  latex => '{  -2  :=  \mathbb{U} \setminus 2  =  \mathbb{U} \setminus *\{ 0, 1 *\}  =  \mathbb{U} \setminus *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on',  latex => '{  -n  :=  \mathbb{U} \setminus n  =  \mathbb{U} \setminus *\{ 0, 1, \cdots , n - 1 *\}  }',
                                          label_name => 'OM:BiOrd:Einleitung:Vortext:Equ-minus-n', label_text => '\\name{OM:BiOrd:Einleitung:Vortext:Equ-minus-n}', label_incr => true),
                      array( display => 'on',  latex => '{  -\omega  :=  \mathbb{U} \setminus \omega  =  \mathbb{U} \setminus \mathbb{N} \\\ \qquad\qquad\qquad\;  =  \mathbb{U} \setminus *\{ 0, 1, 2, 3, \cdots *\}  }',
                                          label_name => 'OM:BiOrd:Einleitung:Vortext:Equ-minus-Omega', label_text => '\\name{OM:BiOrd:Einleitung:Vortext:Equ-minus-Omega}', label_incr => true),
                      array( display => 'on',  latex => '{  - *(\omega + 1 *)  :=  \mathbb{U} \setminus *( \omega + 1 *) \\\ \qquad\quad\;\;  =  \mathbb{U} \setminus *( \mathbb{N} \cup *\{ \mathbb{N} *\} *) \\\ \qquad\quad\;\;  =  \mathbb{U} \setminus *\{ 0, 1, 2, 3, \cdots , \mathbb{N} *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auch in diesem Fall wird konsequenterweise das Prinzip aufrecht erhalten, dass die Klasse – das Mengenuniversum ist auch ein Container, aber definitionsgemäß keine Menge, sondern eine Klasse –, die eine Zahl repräsentiert zum Negativen hin'."\n".
                    'in ihrer Anzahl sinkt.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Erweiterung der Limeszahlen um ihre Vorgänger} \\\\'."\n".
                    'Wir möchten ja erreichen, dass wir innerhalb der Biordinalzahlen generell von jeder Zahl aus nicht nur in die positive Richtung,'."\n".
                    'sondern auch in die negative Richtung zählen, also die Vorgänger benennen, können.'."\n".
                    'Die sogenannten Limeszahlen\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}, Motivation und Definition, Limes- und Nachfolgerzahlen.},'."\n".
                    'wie \\term{ω}, \\term{2⋅ω} oder \\term{ω^^{2}}, haben in unserer Konstruktion immer noch keine Vorgänger.'."\n",
                      'Die Vorgänger der Limeszahlen lassen sich nun entsprechend der absolut negativen Zahlen definieren:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega - 1  :=  \mathbb{N} \setminus 1  =  \mathbb{N} \setminus *\{ 0 *\} \\\ \qquad\qquad\qquad\quad  =  \mathbb{N} \setminus *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  \omega - 2  :=  \mathbb{N} \setminus 2  =  \mathbb{N} \setminus *\{ 0, 1 *\} \\\ \qquad\qquad\qquad\quad  =  \mathbb{N} \setminus *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  \omega - n  :=  \mathbb{N} \setminus n  =  \mathbb{N} \setminus *\{ 0, 1, \cdots , n - 1 *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Definition, basierend auf \\term{\M(N)}, wurde eingangs für die Definition der absolut negativen Zahlen in Erwägung gezogen, dafür jedoch wieder verworfen, und bekommt hiermit ihre passende Rolle.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Herleitung des Ansatzes der allgemeinen Subtraktion mit positivem Ergebnis} \\\\'."\n".
                    'Aber wie steht es mit der Eindeutigkeit, der Praktikabilität und der generellen Plausibilität in komplizierteren Fällen?'."\n".
                    'An folgendem Beispiel können wir einmal sehen, worum es geht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - \omega - n  =  \omega^2 - *( \omega + n *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese beiden Darstellungen sind aus Sicht der an \\term{ω^^{2}} fehlenden Mengen im ersten Moment nicht identisch.'."\n".
                    'Dabei müssen wir uns zuerst klar machen, dass an \\term{ω^^{2}} auch nur die Mengen fehlen können, die enthalten sind.'."\n",
                      'So taucht die Frage auf, ob es nicht generell möglich ist, immer die folgende Definition zu benutzen,'."\n".
                    'wenn \\term{λ} die größte Limeszahl in der Summe ist und \\term{β} die restlichen Summanden kleinerer Limeszahlen zusammenfasst:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \lambda - \beta  :=  \lambda \setminus \beta  }',
                                         label_name => 'OM:BiOrd:Einleitung:Vortext:Equ-Lambda-minus-Beta', label_text => '\\name{OM:BiOrd:Einleitung:Vortext:Equ-Lambda-minus-Beta}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Dann wäre das Beispiel so definiert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - *( \omega + n *)  :=  \omega^2 \setminus *( \omega + n *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und das erscheint schlüssig, weil alle Zahlen, die aus \\term{ω^^{2}} entfernt werden auch darin enthalten sind.'."\n",
                      'Doch was wäre, wenn sich Vorzeichen der hinteren Summanden ändern:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - \omega + n  =  \omega^2 - *( \omega - n *)  }'),
                      array( display => 'on', latex => '{  \omega^2 - *( \omega - n *)  :=  \omega^2 \setminus *( \omega - n *)  }'),
                      array( display => 'on', latex => '{  \omega - n  :=  \omega \setminus n  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \omega^2 - *( \omega - n *)  :=  \omega^2 \setminus *( \omega \setminus n *) \\\ \qquad\qquad\qquad\quad\;\;  =  \omega^2 \setminus *( \omega \setminus *\{ 0, 1, \cdots , n - 1 *\} *) \\\ \qquad\qquad\qquad\quad\;\;  =  \omega^2 \setminus *\{ n, n + 1, n + 2, n + 3, \cdots *\} \\\ \qquad\qquad\qquad\quad\;\;  =  *\{ 0, 1, \cdots , n - 1, \omega, \omega + 1, \cdots , \omega^2 *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das scheint auch schlüssig zu sein, weil möglich, denn die weggelassenen Mengen existieren in \\term{ω^^{2}} beziehungsweise in \\term{ω}, als auch eineindeutig,'."\n".
                    'denn es gibt keine andere Möglichkeit, die selbe Darstellung des Wertes durch eine solche Konstruktion zu erreichen.'."\n",
                      'Und diese Darstellung erfüllt auch die wichtige Eigenschaft, dass die durch Mengen dargestellte Zahl die Anzahl an Mengen enthält,'."\n".
                    'wie ihr Wert groß ist, oder diese Anzahl aus der Klasse aller Mengen entfernt wird.'."\n".
                    'Am vorstehenden Beispiel veranschaulicht bedeutet dies:'."\n".
                    'Beim Wert \\term{ω^^{2} –  ω + n} haben wir als Basis die Menge \\term{ω^^{2}} aus der wir die Mengen in \\term{ω} herausnehmen,'."\n".
                    'die Mengen in \\term{n} jedoch drinnen belassen beziehungsweise wieder hinzufügen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Leftrightarrow  \omega^2 \setminus *( \omega \setminus n *)  =  *( \omega^2 \setminus \omega *) \cup n  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  \omega^2 - *( \omega - n *)  =  *( \omega^2 - \omega *) + n  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Entsprechendes gilt auch für alle anderen Vorgänger aller Limeszahlen.'."\n",
                      'Auf diese Weise entsteht das von einer Limeszahl aus Rückwärtszählen und dann auch wieder von dort aus in kleineren Schritten vorwärtszählen'."\n".
                    'durch unterschiedliche Kombinationen des Entfernens von in ihr enthaltenen Mengen.'."\n".
                    'Es entstehen hierdurch innerhalb der Menge der Basis-Limeszahl keine Mengen, die von ganz neuer Struktur sind.'."\n".
                    'Sondern es ändern sich wirklich nur die Mengenkombinationen in der obersten Ebene der größten Limeszahl.'."\n".
                    'Alle tieferen Ebenen bleiben unberührt.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:XXX', text =>
                      
                'Die Menge der Biordinalzahlen \\latexmath{ \mathbb{Bn} }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Menge der Ordinalzahlen, erweitert, um die neuen subtraktiven Möglichkeiten, ergeben die neue Menge'."\n".
                    'der Biordinalzahlen \\latexmath{ \mathbb{Bn} }.'."\n".
                    ''))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:BiOrd:Einleitung:Vortext:XXX',
                Title => 'Verworfene Möglichkeiten …',
                TitleVis => 'Verworfene Möglichkeiten:', ParagraphList => array(

                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:XXX', text =>
                      
                'Umgekehrte Klammerung', subline =>
                  '')),
                  // funktioniert nicht, wegen verschachteltem Aufklappen
                  /* array( 'notice', array( Display => 'showContent', text => array(
                     '\\bold{Überprüfen}',
                     '• Warum sollte die Addition von \\term{n} in \\term{(ω^^{2} – ω) + n} anders laufen als oben?',
                    ))), */
                  array( 'text', array( text => array(
                     '\\color{*Bearb}{\\bold{Überprüfen} \\\\ '."\n".
                     '• Warum sollte die Addition von \\term{n} in \\term{(ω^^{2} – ω) + n} anders laufen als oben?}'."\n",
                    ))),
                  array( 'text', array( text => array(
                    'Die andere Möglichkeit ist, wir klammern von vorne:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - \omega + n  =  *( \omega^2 - \omega *) + n  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \omega^2 - \omega + n  :=  *( \omega^2 \setminus \omega *) + n  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dann würden wir von \\term{ω^^{2} – ω} um \\term{n} Schritte neu loszählen und erhielten so bisher nicht da gewesene Mengen, die diese Zahlen darstellten.'."\n".
                    'Das finde ich viel weniger intuitiv, weil sich die Strukturen der Mengen dann nicht nur in der obersten Verschachtelungsebene der größten Limeszahl ändern,'."\n".
                    'sondern auch in tieferen Ebenen.'."\n",
                      'Noch komplexer wird es dann im folgenden Beispiel:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^3 - *( \omega^2 - *( \omega - n *) *)  =  *( *( \omega^3 - \omega^2 *) + \omega *) - n  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So ergibt sich in dieser Möglichkeit ein heilloses Durcheinander.'."\n",
                      'Deshalb ist für mich diese Möglichkeit zu verwerfen, wenn wir oben eine wunderbar einfache Möglichkeit gefunden haben,'."\n".
                    'dasselbe sehr übersichtlich und plausibel zu leisten.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:XXX', text =>
                      
                'Entfernen der (nur einer) Menge mit den Zahlen vom Mengenuniversum', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Eine noch ganz andere Möglichkeit, die ich in meiner Abhandlung über Biordinalzahlen gewählt hatte und jetzt verworfen habe,'."\n".
                    'ist, wir entfernen nicht den Mengeninhalt einer zu subtrahierenden Zahl vom Mengenuniversum \\term{\M(U)} (siehe \\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-Lambda-minus-Beta}),'."\n".
                    'sondern die Zahl selber:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \lambda - \beta  :=  \lambda \setminus *\{ \beta *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Variante hat das Verhalten, dass sich die Anzahl der Mengen in einer Limeszahl oder im Mengenuniversum nicht verändert,'."\n".
                    'weil immer nur eine Menge entfernt wird.'."\n".
                    'Im Gegensatz dazu werden in der Variante oben, für die wir uns entschieden haben, immer so viele Mengen entfernt,'."\n".
                    'wie die Größe (Anzahl) der zu subtrahierenden Zahl ist.'."\n".
                    'Die Anzahl der verbleibenden Mengen entspricht also der Zahl, die dargestellt werden soll.'."\n",
                      'Die obere Variante erfüllt unser Ziel, jede Zahl durch eine Menge darzustellen, die die Anzahl von Mengen enthält, die der Zahl selber gleich ist.'."\n".
                    'Daher haben wir uns für die obige Variante entschieden und nicht für die hier erläuterte.'."\n".
                    ''))),

                    ))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:BiOrd:Einleitung:IntegrierteMengenlehre'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

          <!  • Integrierte Mengenlehre  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:BiOrd:Einleitung:IntegrierteMengenlehre',
              'Erweiterung der Mengenlehre durch Antimengen auf das integrierte Mengenuniversum', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:BiOrd:Einleitung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Um wohldefiniert mit Biordinalzahlen mit der uns bekannten Mengenlehre\\color{*Bearb}{(Verweis)} arbeiten zu können'."\n".
                    'bedarf es einer Definition, mit was für Objekten wir es hier zu tun haben und einer'."\n".
                    'Erweiterung der Mengenlehre auf all diese Objekte.'."\n",
                      'Wenn wir negative Zahlen, wie oben, durch das Fehlen von Mengen an der Klasse\\color{*Bearb}{(Verweis)} des Mengenuniversums \\latexmath{ \mathbb{U} }'."\n".
                    'definieren, dann bedeutet dies, dass wir das Universum der „normalen“ Mengen verlassen.'."\n".
                    'Denn die Klasse des Mengenuniversums, an der unterschiedliche Kombinationen an Mengen fehlen,'."\n".
                    'sind selber auch keine Mengen, sondern ebenfalls Klassen.'."\n",
                      'Wir können allerdings sagen, dass es sich hierbei um eine besondere Klasse von Klassen handelt:'."\n".
                    'Wir nennen nun eine Klasse, bei der am Mengenuniversum alle Mengen in einer nicht leeren Menge \\latexmath{ a } fehlen, ihre \\italic{Antimenge} \\latexmath{ a^– }.'."\n".
                    'Ebenso nennen wir die Klasse, die alle Antimengen enthält, das \\italic{Antimengenuniversum} \\latexmath{ \mathbb{U}^- }.'."\n".
                    'Zuletzt nennen wir die Klasse, die alle Mengen sowie alle Antimengen enthält das integrierte Mengenuniversum \\latexmath{ \mathbb{U}^i }.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei, abgeleitet von Formel \\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-Lambda-minus-Beta},'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.IM', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *( \forall a \in \mathbb{U} \setminus *\{ \varnothing *\} *) *[  a^{-}  :=  \mathbb{U} \setminus a  *]  }',
                                         label_name => 'OM:BiOrd:Einleitung:IntegrierteMengenlehre:Equ-Antimenge', label_text => '\\name{OM:BiOrd:Einleitung:IntegrierteMengenlehre:Equ-Antimenge}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'die Definition der Antimenge zu jeder Menge \\latexmath{ a }, die nicht leer ist.'."\n".
                      'Es existiert dabei keine Definition der Antimenge zur leeren Menge:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *( a = \varnothing *) *[  \nexists a^{-}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die leere Menge ist hier ausgeschlossen, weil ihre Antimenge das Mengenuniversum \\latexmath{ \mathbb{U} } selber wäre,'."\n".
                    'was zu einem Widerspruch führen würde, den wir gleich noch herausarbeiten.'."\n".
                    'Für die leere Menge ist also keine Antimenge definiert.'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'So ergibt sich'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{U}^{-}  :=  *\{  x  *|*  *( \forall a \in \mathbb{U} \setminus *\{ \varnothing *\} *) *[  x = a^{-}  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'als Definition des Antimengenuniversums.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Das Mengenuniversum und das Antimengenuniversum überschneiden sich nicht'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{U} \cap \mathbb{U}^{-}  =  *\{ *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und beide zusammen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{U}^{i}  :=  \mathbb{U} \cup \mathbb{U}^{-}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'ergeben das integrierte Mengenuniversum.'."\n",
                        '\\\\'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Hier sehen wir auch, dass, ohne Ausschluss der leeren Menge bei der Definition der Antimengen (siehe Formel \\jumpname{OM:BiOrd:Einleitung:IntegrierteMengenlehre:Equ-Antimenge}),'."\n".
                    'das Antimengenuniversum \\term{\M(U)^^{&thinsp;–}} widersprüchlicher Weise das Mengenuniversum \\term{\M(U)} enthalten würde,'."\n".
                    'obwohl sich beide zum integrierten Mengenuniversum \\term{\M(U)^^{ i}} ergänzen sollen.'."\n",
                      'So können wir jetzt eine allgemeine Definition der Negierung von integrierten Mengen angeben.'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Negation einer integrierten Menge gilt also:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  *( \\forall a \in \mathbb{U}^{i} *) *[ -a  =  \begin{cases}  a^{-}  &  \text{ falls } a \in \mathbb{U} \setminus *\{ \varnothing *\}  \\\\  a  &  \text{ falls } a = \varnothing  \\\\  \mathbb{U} \setminus a  &  \text{ falls } a \in \mathbb{U}^{-}  \end{cases} *]  }'),
                      array( display => 'on',  latex => '{  *( \\forall a \in \mathbb{U}^{i} *) *[ -a  =  \begin{cases}  a  &  \text{ falls } a = \varnothing \\\\ \mathbb{U} \setminus a  &  \text{ falls } a \in \mathbb{U}^{i} \setminus *\{ \varnothing *\}  \end{cases} *]  }',
                                    latex_if_visible => '{  \Leftrightarrow  *( \\forall a \in \mathbb{U}^{i} *) *[ -a  =  \begin{cases}  a  &  \text{ falls } a = \varnothing \\\\ \mathbb{U} \setminus a  &  \text{ falls } a \in \mathbb{U}^{i} \setminus *\{ \varnothing *\}  \end{cases} *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Alle negierten integrierten Mengen sind wieder integrierte Mengen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *( \forall a \in \mathbb{U}^{i} *) *[  -a  \in \mathbb{U}^{i}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX.'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung'),
                    )),
              )
          ); ?>


          <!  • Ontologische Deutung  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:BiOrd:Einleitung:OntologischeDeutung',
              'Was wir wohl nicht sehen', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:BiOrd:Einleitung:IntegrierteMengenlehre', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Was geht beim Arbeiten mit Mengen implizit vor sich, was wir wohl nicht sehen, was uns nicht bewusst ist?'."\n",
                      'Wir wollen dies hier vor allem ontologisch betrachten, also die Lehre von Seienden betreffend.\\color{*Bearb}{(Verweis)}'."\n".
                    'Seiend auch besonders im Sinne von Struktur und hier von verborgener Struktur.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:XXX', text =>
                      
                'Ontologische Funktion unseres Fokus', subline =>
                  'Der Auswahldualismus oder Bewusstseinsdualismus')),
                  array( 'text', array( text => array(
                    'Die vorgestellte Methode zur Darstellung negativer Zahlen durch Mengen oder besser gesagt durch \\jump{OM:BiOrd:Einleitung:IntegrierteMengenlehre}{Antimengen}'."\n".
                    'macht deutlich, dass eine Menge eine Auswahl aus den Möglichkeiten und eine Antimenge beziehungsweise negative Menge'."\n".
                    'die Nichtauswahl aus den Möglichkeiten darstellt.'."\n".
                    'Bei der Nichtauswahl aus den Möglichkeiten bleiben dann alle anderen Möglichkeiten ausgewählt.'."\n".
                    'Symbolisch wird durch die Klammer, die etwas enthält, eine Auswahl getroffen, die diese vom Rest der'."\n".
                    'Auswahlmöglichkeiten abgrenzt, die Auswahl umhüllt.'."\n",
                      'Implizit haben wir es oben also immer mit der Menge der natürliche Zahlen \\term{\M(N)} zu tun.'."\n".
                    'Die Auswahl befindet sich in der Menge- oder Auswahl-Klammer oder Auswahl-Hülle und der Rest unsichtbar außerhalb dieser.'."\n".
                    'Unsere Betrachtung behandelt also immer die Menge \\term{\M(N)}, die in zwei Teile zerlegt ist:'."\n".
                    'Einen Teil, auf den wir fokussierten – der bewusste Teil – und einen Teil, den wir ausblenden – der unbewusste Teil.'."\n".
                    'Naturphilosophisch gesehen, haben wir es mit einem Dualismus beziehungsweise einer Polarität zu tun,'."\n".
                    'dem \\italic{Auswahldualismus} oder \\italic{Bewusstseinsdualismus}.'."\n",
                      'Noch näher betrachtet handelt es sich beim Auswahl- oder Bewusstseinsdualismus um einen fraktalen Dualismus.'."\n".
                    'Denn zunächst wählen wir die Menge \\term{\M(N)}, nehmen sie in unseren Fokus und blenden damit alles andere'."\n".
                    'was existiert aus.'."\n".
                    'Anschließend gehen wir in diese Menge und wählen in ihr wieder einen Teil aus, den wir nun in den näheren Fokus nehmen'."\n".
                    'und damit alle anderen Elemente in \\term{\M(N)} ausblenden.'."\n".
                    'Wir haben dann also schon vier Fraktalebenen:'."\n".
                    'Alles was existiert, darin die Menge \\term{\M(N)}, darin alle Elemente in dieser Menge und dann darin'."\n".
                    'die Teilmenge der Elemente, die wir letztendlich aus den Elementen in \\term{\M(N)} ausgewählt haben.'."\n",
                      'Eine Invertierung oder Vertauschung des Fokus auf die bewussten und unbewussten Elemente aller beteiligten Ebenen nutzen wir nun zur Darstellung negativer Zahlen.'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wählen wir eine einzige Ordinalzahl, beispielsweise die \\term{2}, dann läuft dies in folgenden Schritten auf diesen Ebenen ab:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.OD', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \text{1.}  \qquad  \mathbb{U}  =  \text{Mengenuniversum}  }'),
                      array( display => 'on', latex => '{  \text{2.}  \qquad  \mathbb{N}  =  *\{ 0, 1, 2, 3, \cdots *\}  }'),
                      array( display => 'on', latex => '{  \text{3.}  \qquad  2  =  *\{ 0, 1 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dann fokussieren wir uns eigentlich auf eine Auswahl-Menge, die die ausgewählte Zahl enthält,'."\n".
                      'hier durch zwei neue Klammern mit Pfeilen nach innen symbolisiert:'."\n".
                      // 'Die ausgewählte Zahl ist selber eine Menge mit all den Mengendarstellungen ihrer Vorgänger.'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.OD', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *\{> 2 *<\}  =  *\{> *\{ 0, 1 *\} *<\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Um die Menge mit unserer Auswahl aus \\term{\M(N)} herum befinden sich ja implizit alle Zahlen, die wir nicht aus \\term{\M(N)}'."\n".
                      'ausgewählt haben, denn wir haben ja zum Ausdruck gebracht, dass wir uns mit den Elementen in \\term{\M(N)} beschäftigen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.OD', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *\{> 2 *<\}  =  *\{> *\{ *\{> 0, 1 *<\} , 2, 3, 4, 5, \cdots *\} *<\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Und dort existieren natürlich auch alle restlichen Mengen, die es in \\term{\M(U)} noch gibt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.OD', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *\{> 2 *<\}  =  *\{> *\{> *\{ *\{> 0, 1 *<\} , 2, 3, 4, 5, \cdots *\} *<\} \cup *( \mathbb{U} \setminus \mathbb{N} *) *<\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wenn wir unseren Fokus von der \\term{2} zu allen anderen wechseln, dann sollte dies \\term{-2} ergeben,'."\n".
                      'denn die \\term{2} fehlt ja nun, und sieht folgendermaßen aus'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.OD', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *\{> \! - \! 2 *<\}  =  *\{> *\{> *\{ *<\} 0, 1, *\{> 2, 3, 4, 5, \cdots *\} *<\} \cup *( \mathbb{U} \setminus \mathbb{N} *) *<\}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *\{> \! - \! 2 *<\}  =  *\{> *\{> *\{ 2, 3, 4, 5, \cdots *\} *<\} \cup *( \mathbb{U} \setminus \mathbb{N} *) *<\}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *\{> \! - \! 2 *<\}  =  *\{> \mathbb{U} \setminus *\{ 0, 1 *\} *<\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *\{> \! - \! 2 *<\}  =  *\{> \mathbb{U} \setminus 2 *<\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'was zu zeigen war.'."\n",
                        '\\\\ '."\n".
                      ''))),
                  array( 'text', array( text => array(
                    'Wir sehen hieran, dass die Berücksichtigung des impliziten beziehungsweise unbewussten Vorgehens'."\n".
                    'beim Fokussierungsprozess verdeutlicht, was eigentlich im „Verborgenen“ vor sich geht.'."\n".
                    'Der fraktale Auswahl- oder Bewusstseinsdualismus hilft uns, dies zu verstehen, und zeigt,'."\n".
                    'dass die gewählte Darstellung der negativen Zahlen durch Antimengen eine bedeutende Beziehung zum'."\n".
                    'Realen hat, also zu realen Vorgängen im Verborgenen.'."\n",
                      'Die Zuordnung der Werte zur ontologischen Struktur führt zu einer naturphilosophisch sehr interessanten '."\n".
                    '\\jump{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}{Asymmetrie}, die wir später näher betrachten werden.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:XXX', text =>
                      
                'Ontologische Aussagenlogik', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'In Bezug auf negative Zahlen führt die Vorstellung generell zur Verwirrung, dass die Null ja das Nichts'."\n".
                    'repräsentiert, und negative Zahlen dann ja noch weniger als das Nichts wären.'."\n".
                    'So etwas könne es doch nicht geben, denken wir spontan, und ich meine auch begründet.'."\n".
                    'Ontologisch, also vom Seienden aus, betrachtet kann es nicht weniger geben, als das es nichts gibt.'."\n",
                      'Was wir nicht so einfach bemerken, salopp formuliert, nicht auf der Reihe haben, ist,'."\n".
                    'dass es immer implizit um das Meer der Möglichkeiten geht, aus denen wir etwas auswählen.'."\n".
                    'Auf Aussagenlogik bezogen und am Beispiel von Mengen ausgedrückt, sind die leere Menge und alle Möglichkeiten'."\n".
                    'sehr nahe beieinander liegend.'."\n",
                      'Denn haben wir alle Möglichkeiten gleichwertig, dann können wir uns nicht für eine entscheiden,'."\n".
                    'weil keine zur Auswahl heraussticht.'."\n".
                    'Das erscheint so gesehen sehr ähnlich, als hätten wir keine Möglichkeit.'."\n",
                      'Vergleichbar ist auch die folgende Aussage:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Wem gehört das Wissen der Welt? \\\\'."\n".
                      'Allen und damit keinem.'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Aus dieser Perspektive ist ›allen‹ und ›keinem‹ im Grunde identisch,'."\n".
                    'weil es um die Differenz der Besitzenden untereinander geht, die in beiden Fällen gleich ist.'."\n",
                      'In beiden Fällen geht es quasi um ein „Kräftegleichgewicht“, dass zu einer Entscheidung führen kann.'."\n".
                    'Alle Möglichkeiten zu haben, ist vollständige Harmonie und ein Ausgleich der „Kräfte“, ebenso wie'."\n".
                    'keine Möglichkeiten zu haben.'."\n",
                      'In der Konstruktion der Zahlen gibt es aber einen Unterschied, denn wir wollen Eindeutigkeit.'."\n".
                    'Und alle Möglichkeiten nutzen wir schon dazu, den Rahmen der Dinge zu bestimmen, von denen wir ausgehen,'."\n".
                    'dass sie möglich sind.'."\n".
                    'So bleibt nur die leere Menge, um auszudrücken, dass die Auswahlmöglichkeiten ausgeglichen sind.'."\n",
                      'Aber wir haben, ausgehend von beiden gleichwertigen Gleichgewichten, auf diese Weise zwei Möglichkeiten eine Auswahl zu bestimmen:'."\n".
                    'Ein Mal, indem wir aus allen Möglichkeiten „wenige“ auswählen, und ein Mal,'."\n".
                    'indem wir aus allen Möglichkeiten „wenige“ weglassen und damit den Rest auswählen.'."\n".
                    'Beides macht einen erheblichen Unterschied und versetzt uns in die Lage, plausibel und logisch sinnvoll'."\n".
                    'Gewähltes als Positives und Weggelassenes als Negatives zu differenzieren.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:XXX', text =>
                      
                'Ontologie der Polarität', subline =>
                  'Polarität bringt etwas zur Existenz und zur Wirkung')),
                  array( 'text', array( text => array(
                    'Durch die Auswahl oder das Weglassen von Dingen aus allen Möglichkeiten entsteht eine Polarität,'."\n".
                    'die etwas zur stabilen Existenz bringt.'."\n".
                    'Es ist ein \\jump{OM:FrQFT:NeuePhysik:Beobachtungen-und-nat-Ueberlegungen:WWSymBruch}{Symmetriebruch}, der die neutrale Harmonie stört, der zu „Kräften“ führt,'."\n".
                    'ganz wie in der \\jump{OM:FrQFT:Home}{Physik}, und die so erschaffenen Dinge in Prozessen begreifbar, greifbar und handhabbar macht.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:XXX', text =>
                      
                'Unsere Existenz durch eine stabile und sich entwickelnde Psychosomatik', subline =>
                  'Wir sind in einen Dialog zwischen unserem Bewusstsein und unserem Unterbewusstsein verwickelt')),
                  array( 'text', array( text => array(
                    'Unsere Überlegungen haben durchaus eine tiefe Verbindung zu unserem Leben.'."\n".
                    'Auch, wenn es einem als Mensch der heutigen „modernen“ Zeit erstaunlich erscheinen kann, dass wir aus dieser'."\n".
                    'bedeutenden mathematisch-naturphilosophischen Sicht an die Wurzeln des Lebens gelangen.'."\n",
                      'Denn aus meinem Verständnis heraus basiert unser Leben, unsere Psyche und Psychosomatik,'."\n".
                    'auch auf unserem \\jump{OM:NPYo:Spiritualitaet-Psychologie:Vortext:DialogBewusstseinUnterbewusstsein}{inneren Dialog zwischen Bewusstsein und Unterbewusstsein}.'."\n".
                    'Dieser Dialog ist unter anderem durch unseren Fokus bestimmt und dadurch ob gerade unser Bewusstsein, im Wachzustand,'."\n".
                    'oder unser Unterbewusstsein, im Schlaf, im Vordergrund ist.'."\n",
                      'Durch die vorangegangenen Überlegungen lernen wir mehr darüber, wie unser Fokus funktioniert'."\n".
                    'und welche Aspekte und Ebenen er hat.'."\n".
                    'Und darüber, wie unser Fokus mit Antimengen und negativen Zahlen verbunden ist, lernen wir unser'."\n".
                    'Bewusstsein und Unterbewusstsein besser zu verstehen.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:BiOrd:Einleitung:NeueEinsichten'),
                    )),
              )
          ); ?>


          <!  • Neue Einsichten  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:BiOrd:Einleitung:NeueEinsichten',
              'Die ontologische Struktur beinhaltet die Zählrichtung', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung', type => 'back'),
                    )),

                  array( 'text', array( text => array(
                    'Wir können durch das Vorstehende erkennen, dass aus ontologischer Sicht die Null – die leere Menge –,'."\n".
                    'aufgrund des Ausgangs vom Zählen, zu den positiven Zahlen gehört, und dadurch'."\n".
                    'die natürlichen Zahlen \\latexmath{ \mathbb{N} }, einschließlich der Null, bildet.'."\n".
                    ''))),

                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie', text =>
                      
                'Eine fundamentale Asymmetrie', subline =>
                  'Die ontologische Struktur der Zahlen beinhaltet die Zählrichtung')),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{Eine Asymmetrie zwischen Existenz und ihrer Assoziation}',
                    '• Hier wird ebenso eine Asymmetrie zwischen einer ontologischen Existenz und ihrem assoziierten „Wert“ aufgezeigt.',
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent',
                    Title => 'Zwischenzeitlicher, wohl falscher Text …', TitleVis => 'Zwischenzeitlicher, wohl falscher Text:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Interessanterweise können wir so erkennen, dass aus ontologischer Sicht die Null – die leere Menge –,'."\n".
                    'aufgrund des Ausgangs vom Zählen, zu den positiven Zahlen gehört, und dadurch'."\n".
                    'die natürlichen Zahlen \\latexmath{ \mathbb{N} }, einschließlich der Null, bildet.'."\n",
                      'Da es zur Null keine Antimenge und damit auch ontologisch kein negatives Komplementär gibt,'."\n".
                    'was perfekt zur Eindeutigkeit und gewünschten Bidirektionalität in Bezug auf die Zahlenwerte passt,'."\n".
                    'gibt es tatsächlich genauso viele negative wie positive Zahlen,'."\n".
                    'eben beides ohne die Null.'."\n",
                      'Es gibt also eine fundamentale Asymmetrie zwischen der ontologischen Struktur der Ordinalzahlen'."\n".
                    'und der ontologischen Struktur der aus ihnen abgeleiteten negativen Zahlen.'."\n".
                    'Dies gilt also auch für alle endlichen ganzen positiven Zahlen mit der Null und'."\n".
                    'für die endlichen ganzen negativen Zahlen, ohne die Null:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei \\term{#} das Symbol für den Operator, der die Anzahl der Elemente einer Menge liefert,'."\n".
                      'so gilt, auch wegen der oben definierten Gleichsetzung von Anzahlen und deren entsprechenden Mengen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# \mathbb{N}  =  \# \mathbb{Z}^{+}_{0}  =  \omega  =  \mathbb{N}  }'),
                      array( display => 'on',  latex => '{  \# \mathbb{Z}^{+}  =  \# \mathbb{Z}^{-}  =  \omega - 1  }'),
                      array( display => 'on',  latex => '{  \# \mathbb{Z}  =  \# \mathbb{N} + \# \mathbb{Z}^{-}  =  2 \cdot \omega - 1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Summe aller endlichen ganzen Zahlen ist demnach Null:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall z \in \mathbb{Z}} z  =  \sum_{ \forall n \in \mathbb{N} } n \; + \sum_{ \forall n \in \mathbb{Z}^{-} } \! n  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  \sum_{ \forall n \in \mathbb{N} } n \; - \!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ \varnothing *\} } \!\!\! n  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  0 \; + \!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ \varnothing *\} } \!\!\! n \; - \!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ \varnothing *\} } \!\!\! n  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  \sum_{ n = 1 }^{ \omega - 1 } n \; - \; \sum_{ n = 1 }^{ \omega - 1 } n  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  *( *( \omega - 1 *)^{2} + *( \omega - 1 *) *) \cdot 0  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  *( *( \omega^{2} - 2 \cdot \omega + 1 *) + *( \omega - 1 *) *) \cdot 0  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  *( \omega^{2} - \omega *) \cdot 0  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  0  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Durchschnitt aller endlichen ganzen Zahlen ist demnach Null:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \frac{ \sum_{ \forall z \in \mathbb{Z}} z }{ 2 \cdot \omega - 1 }  =  \frac{ 0 }{ 2 \cdot \omega - 1 }  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  \frac{ \sum_{ \forall z \in \mathbb{Z}} z }{ 2 \cdot \omega - 1 }  =  0  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} \frac{ z }{ 2 \cdot \omega - 1 }  =  0  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Interessanterweise ergibt sich so, dass es eine negative Zahl mehr gibt als positive Zahlen, ohne die Null.'."\n".
                    'Wie kann das sein?'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Ontologische Begründung} \\\\'."\n".
                    'Aus ontologischer Sicht, also aus Sicht der Struktur des Seins oder die Realität betreffend, hat mir mein Freund Raimund Welsch nahegelegt:'."\n".
                    'Begreifen wir jede nach oben gezählten Abstand Eins als Welle – oder alternativ als Sägezahn, wie ich es selber schon früher gedacht hab – dann fängt jede dieser Wellen bei einer ganzen'."\n".
                    'Zahl an.'."\n".
                    'Die darauf folgende nächste ganze Zahl ist schon der Beginn der nächsten Welle und gehört nicht mehr zu der, die wir gerade gezählt haben.'."\n",
                      'Die nullte Welle oder der nullte Zahn beginnt also bei der Null und endet vor der Eins.'."\n".
                    ''))),
                      
                  array( 'figure',
                    array_merge( $BiOrd_g_figure_ary_GanzeZahlenGerade, array( name => 'OM:BiOrd:Einleitung:NeueEinsichten:Fig-OntologieGanzeZahlen'))),
                                            
                  array( 'text', array( text => array(
                    'Würden wir die natürlichen Zahlen einfach an der Null spiegeln, um die negativen ganzen Zahlen zu erhalten,'."\n".
                    'dann hätten wir die Null doppelt in der Struktur; eine gehörte zu den positiven und eine zu den negativen Zahlen, was nicht eindeutig wäre.'."\n".
                    'Auch würde sich in den negativen ganzen Zahlen die Zählrichtung umkehren und dadurch könnten wir die negativen Zahlen'."\n".
                    'nicht mehr in ihrer Struktur von den positiven Zahlen unterscheiden.'."\n".
                    'Denn das scheinbare Rückwärtszählen wäre ja doch in Wirklichkeit so auch ein Vorwärtszählen.'."\n".
                    'Beide Zahlentypen wären identisch, was ontologisch keinen Sinn ergibt.'."\n",
                      'Sinn erhalten wir, wenn wir erkennen, dass die negativen ganzen Zahlen aus den verschobenen natürlichen Zahlen entstehen, unter Erhalt der Zählrichtung,'."\n".
                    'durch Welle oder Zahn verdeutlicht (siehe \\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Fig-OntologieGanzeZahlen}).'."\n".
                    'Während also der auf die negative Seite verschobene Nullpunkt eine negative Zahl repräsentiert, nämlich die minus Eins,'."\n".
                    'repräsentiert der originale Nullpunkt keine positive Zahl, sondern die Null selber.'."\n".
                    'Die Vollständigkeit der negativen und damit aller ganzen Zahlen entsteht dadurch,'."\n".
                    'dass wir durch vollständige Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}} alle natürlichen Zahlen ins negative verschieben.'."\n",
                      'Ontologisch betrachtet sind negative Zahlen also nicht die inklusive der Zählrichtung an der Null'."\n".
                    'gespiegelten natürlichen oder alternativ nur positiven Zahlen.'."\n".
                    'Sondern es handelt sich strukturell um eine Verschiebung, die die Zählrichtung beibehält und nicht spiegelt,'."\n".
                    'wohingegen die repräsentierten Werte an der Null gespiegelt sind.'."\n",
                      'Wir erkennen:'."\n".
                    'Auch, wenn wir nur auf die \\jump{OM:BiOrd:Einleitung:OntologischeDeutung}{endlichen ganzen Zahlen fokussieren}, schwingt das ontologisch implizite Vorhandensein, die Existenz,'."\n".
                    'der Zwischenräume zwischen den ganzen Zahlen und wie diese mit ihnen verbunden sind, mit.'."\n".
                    'Denn die Intervalle der Zwischenräume, die an den ganzen Zahlen in Zählrichtung hängen, sind der Grund für'."\n".
                    'die Zahlenwert-Symmetrie, die sich an der Null spiegelt.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Kombinatorische Begründung} \\\\'."\n".
                    'Schauen wir uns hier noch einmal die oben stehenden Formeln \\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-minus-n} und \\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-minus-Omega} an:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  -n  :=  \mathbb{U} \setminus n  =  \mathbb{U} \setminus *\{ 0, 1, \cdots , n - 1 *\}  }',
                                          /* label_name => 'OM:BiOrd:Einleitung:Vortext:Equ-ninus-n', */label_text => '\\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-minus-n}', label_incr => false),
                      array( display => 'on',  latex => '{  -\omega  :=  \mathbb{U} \setminus \omega  =  \mathbb{U} \setminus \mathbb{N} \\\ \qquad\qquad\qquad\;  =  \mathbb{U} \setminus *\{ 0, 1, 2, 3, \cdots *\}  }',
                                          /* label_name => 'OM:BiOrd:Einleitung:Vortext:Equ-minus-Omega', */label_text => '\\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-minus-Omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können am Übergang von \\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-minus-n} zu \\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-minus-Omega}'."\n".
                    'sehen, dass wir so viele endliche Zahlen am Mengenuniversum weglassen können, wie es von ihnen gibt:'."\n".
                    'derer in der Anzahl \\term{ω} existieren, nämlich ein Mal die vollständige Induktion der natürlichen Zahlen.'."\n".
                    'Jede dieser zusätzlich weggelassenen endlichen Zahlen steht für jeweils eine negative ganze Zahl.'."\n",
                      'Demnach gibt es also genau so viele negative ganze Zahlen, wie positive ganze Zahlen mit der Null existieren.'."\n".
                    'Und diese kombinatorische Anzahl wird in \\term{-ω} ausgedrückt und ihr absoluter Wert ist eben \\term{ω}.'."\n".
                    'Also gibt es auch aus dieser Perspektive eine negative ganze Zahl mehr, als es positive ohne die Null gibt.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Formulierung der Entstehung der negativen ganzen Zahlen durch Rückwärtszählen, ohne Umkehrung der Zählrichtung} \\\\'."\n".
                    'Um auszudrücken, wie jede negative ganze Zahl jeweils aus einer natürlichen Zahl entsteht, berücksichtigen wir'."\n".
                    'im Ansatz die oben entwickelte, ontologische Vorstellung, dass es sich bei Zahlen quasi um Wellen – oder Sägezähne – von einer Zahl zur nächsten handelt.'."\n".
                    'Diese Wellen hängen in Zählrichtung an den Zahlen.'."\n",
                      'Die negativen Zahlen entstehen also nicht durch eine Spiegelung dieser Wellen, sondern durch deren Verschiebung.'."\n".
                    'Und dies soll sich in der ersten Struktur der Formulierung ausdrücken:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{Z}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *[  x = n - *( 2 \cdot n + 1 *)  *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Intervalle, die zwischen den Zahlen liegen, hängen an der vorstehenden ganzen Zahl und werden auf diese Weise mit verschoben,'."\n".
                    'was wir bei den \\jump{OM:SupNum:Home}{Superial-Zahl} noch \\jump{OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-endl-ganz-Zahlen}{expliziter erkennen} können.'."\n".
                    'Daher steht quasi am „Beginn“ der endlichen negativen ganzen Zahlen auch der Punkt einer ganzen Zahl,'."\n".
                    'was eben der Grund dafür ist, dass es eine endliche negative ganze Zahl mehr geben muss, als positive, ohne die Null.'."\n".
                    'Denn das Zählen ist die Grundlage aller Zahlen.'."\n",
                      'Wenn wir die Verschiebung vereinfachend umformen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  \mathbb{Z}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *[  x = n - 2 \cdot n - 1  *]  *\}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \mathbb{Z}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *[  x = - n - 1  *]  *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \mathbb{Z}^{-}  =  *\{  x  *|*  *( \forall n \in \mathbb{N} *) *[  x = - *( n + 1 *)  *]  *\}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \# \mathbb{Z}^{-}  =  \omega  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dann entsteht der Eindruck einer Spiegelung.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{\\anchor{OM:BiOrd:Einleitung:NeueEinsichten:AnzahlDerEndlichenGanzenZahlen}{}Anzahl der endlichen ganzen Zahlen} \\\\'."\n".
                    'So kommen wir zu Aussagen über die Anzahl der ganzen endlichen Zahlen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei \\term{#} das Symbol für den Operator, der die Anzahl der Elemente einer Menge liefert,'."\n".
                      'so gilt, auch wegen der oben definierten Gleichsetzung von Anzahlen und deren entsprechenden Mengen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# \mathbb{Z}^{-}  =  \# \mathbb{N}  =  ω  =  \mathbb{N}  }',
                                          label_name => 'OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-N', label_text => '\name{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-N}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  \# \mathbb{Z}  =  \# \mathbb{N} + \# \mathbb{Z}^{-}  =  2 \cdot ω  }',
                                          label_name => 'OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-Z', label_text => '\name{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-in-Z}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  \# \mathbb{Z}^{+}  =  \# *( \mathbb{N} \setminus *\{ 0 *\} *)  =  ω - 1  \;\;  ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'was damit gezeigt werden sollte.'."\n",
                        '\\\\'."\n".
                    ''))),

                  array( 'text', array( text => array(
                    'Diese Aussagen sind durchaus bemerkenswert und führen uns zu einer fundamentalen und sehr spannenden Asymmetrie.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Daraus folgt eine prinzipielle Asymmetrie} \\\\'."\n".
                    'Auf diese Weise ergibt sich innerhalb der endlichen, ganzen Zahlen eine prinzipielle und fundamentale Asymmetrie,'."\n".
                    'die sich in der Summe über alle endlichen, ganzen Zahlen zeigt,'."\n".
                    'weil jede negative ganze Zahl um minus Eins kleiner ist, als die natürlich Zahl, aus deren Verschiebung sie gebildet wird (siehe \\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Fig-OntologieGanzeZahlen}):'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall z \in \mathbb{Z}} z  =  \sum_{ \forall n \in \mathbb{N}} n - \sum_{ \forall n \in \mathbb{N}} *( n + 1 *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  \sum_{ \forall n \in \mathbb{N}} n - \sum_{ \forall n \in \mathbb{N}} n - \sum_{ \forall n \in \mathbb{N}} 1  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  - \sum_{ \forall n \in \mathbb{N}} 1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  - \omega  }',
                                          label_name => 'OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z', label_text => '\\name{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'In Worten ausgedrückt bedeutet dies:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Die Summe aller endlichen, ganzen Zahlen ist demnach der aktual unendliche Wert \\term{–ω}'."\n".
                      'und nicht \\term{0} (Null), wie wir im Allgemeinen eher annehmen.'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Der Wert \\term{–ω} dieser Summe ist nur mit Biordinalzahlen ausdrückbar.'."\n",
                      'Das die Summe aller endlichen ganzen Zahlen negativ ist, dürfte den einen oder anderen erstaunen.'."\n".
                    'Denn naiv neigen wir wohl zumeist dazu anzunehmen, dass sich alle endlichen ganzen Zahlen zu Null summieren,'."\n".
                    'weil wir von einer Werte- und Zahlensymmetrie bei Null ausgehen.'."\n".
                    'Das wirklich \\term{–ω} die Summe aller endlichen ganzen Zahlen ist und ebenso auch \\term{2ω} die Anzahl'."\n".
                    'aller endlichen ganzen Zahlen, bestätigt sich durch die plausible Herleitung'."\n".
                    'der \\jump{OM:SupNum:Ableitungen-Integrale:Integration}{Integration} auf Basis der'."\n".
                    '\\jump{OM:SupNum:Home}{Superial-Zahlen},'."\n".
                    'wenn wir die \\jump{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Summen-zur-Integration-von-2x-plus-supkl-Eins}{dabei auftretenden aktual unendlichen Summen genauer untersuchen}.'."\n",
                      'Der Mittelwert aller endlichen, ganzen Zahlen ergibt sich dann, wenn wir, wie üblich,'."\n".
                    'die Summe durch die Anzahl ihrer Summanden teilen, zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \frac{ \sum_{ \forall z \in \mathbb{Z}} z }{ 2 \cdot \omega }  =  \frac{ - \omega }{ 2 \cdot \omega }  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} \frac{ z }{ 2 \cdot \omega }  =  \frac{ - \omega }{ 2 \cdot \omega }  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} \frac{ z }{ 2 \cdot \omega }  =  - \frac{ 1 }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'In Worten ausgedrückt bedeutet dies:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Der Mittelwert aller endlichen, ganzen Zahlen ist demnach \\term{–½} und nicht \\term{0} (Null), wie wir im Allgemeinen eher annehmen.'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Das ist möglicherweise für den einen oder anderen eine überraschende Erkenntnis.'."\n".
                    'Ich finde sie hochspannend.'."\n".
                    ''))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:BiOrd:Einleitung:Vortext:XXX',
                Title => 'Möglicher Bezug zur analytischen Fortsetzung der Riemannschen Zeta-Funktion …',
                TitleVis => 'Möglicher Bezug zur analytischen Fortsetzung der Riemannschen Zeta-Funktion:', ParagraphList => array(
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:XXX', text =>
                      
                '\\color{*Bearb}{Notiz}', subline =>
                  '')),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\\color{*Bearb}{\\bold{Bezüge zur Riemannschen Zeta-Funktion} \\\\'."\n".
                        '– Teilerfremdheit: Die Teilerfremdheit hat eine Verbindung zur Riemannschen Zeta-Funktion: Vgl. \\cite{wiki:Teilerfremdheit:2022}, Eigenschaften.}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die oben erzielte Erkenntnis, dass der Mittelwert aller endlichen, ganzen Zahlen \\term{-½} und damit'."\n".
                    'ein endlicher, negativer Wert ist, erinnert stark an ein in gewisser Hinsicht erstaunliches Ergebnis'."\n".
                    'in Bezug auf die Riemannsche Zeta-Funktion\\footnote{Vgl. \\cite{wiki:RiemannscheZetaFunktion:2022}.}'."\n".
                    '\\latexmath{\zeta(s)} beim Funktionswert \\term{0}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \zeta(0)  =  - \frac{ 1 }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wo der \\color{*Bearb}{(mögliche)} Zusammenhang besteht, werden wir gleich noch weiter ausführen.'."\n",
                      'Ein in der Mathematik ganz berühmtes Ergebnis, dass unter anderem durch den indischen Mathematiker'."\n".
                    'Srinivasa Ramanujan\\color{*Bearb}{(Verweis)} gefunden wurde,\\footnote{Vgl. \\cite{wiki:RiemannscheZetaFunktion:2022}, Geschichte, Anfang des 20. Jahrhunderts, Ramanujans Arbeit zur Zeta-Funktion.}'."\n".
                    'liegt beim Funktionswert \\term{-1} der Zeta-Funktion:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \zeta(-1)  =  - \frac{ 1 }{ 12 }  }'),
                    ))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:XXX', text =>
                      
                'XXX Versuch nach Definition der Zeta-Funktion durch die Dirichletsche Eta-Funktion', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Allerdings gilt die simple Definition der Zeta-Funktion nur für komplexe Funktionswerte, dessen Realteil größer als \\term{1} ist:'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall s \in \mathbb{C} *) *( Re(s) > 1 *) *[  \zeta(s)  :=  \sum_{ n = 1 }^{\infty} \frac{ 1 }{ n^{s} }  *]  }'),
                      array( display => 'on',  latex => '{  \zeta(s)  :=  \frac{ 1 }{ 1^{s} } + \frac{ 1 }{ 2^{s} } + \frac{ 1 }{ 3^{s} } + \frac{ 1 }{ 4^{s} } + \frac{ 1 }{ 5^{s} } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \zeta(0)  :=  \frac{ 1 }{ 1^{0} } + \frac{ 1 }{ 2^{0} } + \frac{ 1 }{ 3^{0} } + \frac{ 1 }{ 4^{0} } + \frac{ 1 }{ 5^{0} } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \zeta(0)  :=  1 + 1 + 1 + 1 + 1 + \cdots  }'),
                      array( display => 'on',  latex => '{  \zeta(0)  ?=  \sum_{ n = 1 }^{\infty} 1  ?=  - \frac{ 1 }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \zeta(-1)  :=  \frac{ 1 }{ 1^{-1} } + \frac{ 1 }{ 2^{-1} } + \frac{ 1 }{ 3^{-1} } + \frac{ 1 }{ 4^{-1} } + \frac{ 1 }{ 5^{-1} } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \zeta(-1)  :=  \frac{ 1 }{ \frac{ 1 }{ 1 } } + \frac{ 1 }{ \frac{ 1 }{ 2 } } + \frac{ 1 }{ \frac{ 1 }{ 3 } } + \frac{ 1 }{ \frac{ 1 }{ 4 } } + \frac{ 1 }{ \frac{ 1 }{ 5 } } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \zeta(-1)  :=  1 + 2 + 3 + 4 + 5 + \cdots  }'),
                      array( display => 'on',  latex => '{  \zeta(-1)  ?=  \sum_{ n = 1 }^{\infty} n  ?=  - \frac{ 1 }{ 12 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dass die Summe unendlich vieler Einsen oder die Summe aller natürlichen Zahlen einen endlichen, negativen Wert ergeben soll, erscheint hier sehr merkwürdig.'."\n".
                    'Allerdings ist in dieser Definition der Zeta-Funktion der Funktionswert \\term{-1} ja eben auch nicht definiert.'."\n",
                      'Berücksichtigen wir, dass die Zeta-Funktion mit Hilfe der Dirichletschen Eta-Funktion\\color{*Bearb}{(Verweis)}'."\n".
                    '\\latexmath{\eta(s)} ihre sogenannte analytische Fortsetzung findet, dann erhalten wir für die Definition von \\latexmath{\zeta(s)}:\\footnote{Vgl. \\cite{wiki:RiemannscheZetaFunktion:2022}, Definition und Darstellungsformen, Methoden zur analytischen Fortsetzung, Umformungen der Dirichlet-Reihe und die Eulersche Reihentransformation.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall s \in \mathbb{C} *) *( s \neq 1 *) *[  \zeta(s)  :=  \frac{ \eta(s) }{ 1 - 2^{1 - s} }  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies gilt unter der Voraussetzung, dass wir eine Definition von \\latexmath{\eta(s)} über die ganze komplexe Zahlenebene \\term{\M(C)} finden.'."\n",
                      'Wir beginnen einmal mit der einfachsten Definition der Dirichletschen Eta-Funktion:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall s \in \mathbb{C} *)  *( Re(s) > 0 *) *[  \eta(s)  :=  \sum_{ n = 1 }^{\infty} \frac{ *( -1 *)^{n - 1} }{ n^{s} }  *]  }'),
                      array( display => 'on',  latex => '{  \eta(s)  :=  \frac{ 1 }{ 1^{s} } - \frac{ 1 }{ 2^{s} } + \frac{ 1 }{ 3^{s} } - \frac{ 1 }{ 4^{s} } + \frac{ 1 }{ 5^{s} } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \eta(0)  :=  \frac{ 1 }{ 1^{0} } - \frac{ 1 }{ 2^{0} } + \frac{ 1 }{ 3^{0} } - \frac{ 1 }{ 4^{0} } + \frac{ 1 }{ 5^{0} } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(0)  :=  1 - 1 + 1 - 1 + 1 + \cdots  }'),
                      array( display => 'on',  latex => '{  \eta(0)  ?=  \sum_{ n = 1 }^{\infty} *( -1 *)^{n - 1}  ?=  \frac{ 1 }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \eta(-1)  :=  \frac{ 1 }{ 1^{-1} } - \frac{ 1 }{ 2^{-1} } + \frac{ 1 }{ 3^{-1} } - \frac{ 1 }{ 4^{-1} } + \frac{ 1 }{ 5^{-1} } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(-1)  :=  \frac{ 1 }{ \frac{ 1 }{ 1 } } - \frac{ 1 }{ \frac{ 1 }{ 2 } } + \frac{ 1 }{ \frac{ 1 }{ 3 } } - \frac{ 1 }{ \frac{ 1 }{ 4 } } + \frac{ 1 }{ \frac{ 1 }{ 5 } } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(-1)  :=  1 - 2 + 3 - 4 + 5 + \cdots  }'),
                      array( display => 'on',  latex => '{  \eta(-1)  ?=  \sum_{ n = 1 }^{\infty} \frac{ *( -1 *)^{n - 1} }{ n^{-1} }  ?=  \frac{ 1 }{ 4 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier erkennen wir schon eine gewisse Ähnlichkeit mit unserer Formel \\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z},'."\n".
                    'auch, wenn diese Definition eigentlich nicht für die Funktionswerte \\term{0} und \\term{-1} gilt.'."\n",
                      'Addieren wir doch trotzdem mal die positiven und negativen Einsen und schauen, wann wir vielleicht \\term{½} erhalten.'."\n".
                    'Aus dem Mathologer Video \\italic{\\jump[https://www.youtube.com/watch?v=YuIIjLr6vUA]{}{Numberphile v. Math: the truth about 1+2+3+...=-1/12}} wissen wir, dass die Summe über die Ramanujan Summation als eine Art Mittelwert definiert ist.'."\n".
                    'Benutzen wir die Formel von oben, dann ergibt sich:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \eta(0)  ?=  \sum_{ n = 1 }^{\infty} *( -1 *)^{n - 1}  ?=  \frac{ 1 }{ 2 }  }'),
                      array( display => 'on',  latex => '{  \eta(0)  :=  \overline{ 1 - 1 + 1 - 1 + 1 + \cdots }  }'),
                      array( display => 'on',  latex => '{  \eta(0)  :=  \overline{ \sum_{ n = 1 }^{\infty} *( -1 *)^{n - 1} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(0)  :=  \overline{ \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! *( -1 *)^{n - 1} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(0)  :=  \frac{ \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } *( -1 *)^{n - 1} }{ \# *( \mathbb{N} \setminus *\{ 0 *\} *) }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier erkennen wir, dass das Ergebnis ganz entscheidend von der Anzahl der Elemente in \\latexmath{ \mathbb{N} \setminus *\{ 0 *\} } abhängt.'."\n".
                    'Ist die Anzahl gerade, dann erhalten wir \\latexmath{ 0 }.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      'Addieren wir doch auch mal die positiven und negativen Zahlen und schauen, wann wir vielleicht \\term{¼} erhalten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \eta(-1)  :=  1 - 2 + 3 - 4 + 5 + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(-1)  :=  \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! *( 2 \cdot n - 1 *) \; - \!\!\!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! 2 \cdot n  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(-1)  :=  \\\ \qquad\qquad \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! 2 \cdot n \; - \!\!\!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! 1 \; - \; 2 \cdot \!\!\!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! n  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(-1)  :=  \\\ \qquad\qquad 2 \cdot \!\!\!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! n \; - \; *( \omega - 1 *) \; - \; 2 \cdot \!\!\!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! n  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(-1)  :=  \\\ \qquad\qquad - \; *( \omega - 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die Summe aller natürlicher Zahlen können wir die Gaußsche Summenformel\\footnote{\\const{BiOrd_g_footnote_text_GaussscheSummenformel}} benutzen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \sum_{ ( \forall i \in \mathbb{N} )[i \leqslant n] } i  =  0 + 1 + 2 + 3 + \cdots + n  =  \frac{ n^{2} + n }{ 2 }  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \sum_{ \forall i \in \mathbb{N} } i  =  0 + 1 + 2 + 3 + \cdots  =  \frac{ \omega^{2} + \omega }{ 2 }  }'),
                      array( display => 'on', latex => '{  \sum_{ \forall i \in \mathbb{N} } i  =  \sum_{ \forall i \in \mathbb{N} \setminus *\{ 0 *\} } i  }'),
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
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:XXX', text =>
                      
                'XXX Versuch nach Definition der Zeta-Funktion durch die Dirichlet-Reihe', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Nach der Definition der Zeta-Funktion durch die Dirichlet-Reihe könnten wir naiver Weise annehmen,'."\n".
                    'die Summe aller endlichen, natürlichen Zahlen hätte ein negatives Ergebnis:\\footnote{Vgl. \\cite{wiki:RiemannscheZetaFunktion:2022}, Definition und Darstellungsformen, Dirichlet-Reihe.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall s \in \mathbb{C} *) *( Re(s) > 1 *) *[  \zeta(s)  :=  \sum_{ n = 1 }^{\infty} \frac{ 1 }{ n^{s} }  *]  }'),
                      array( display => 'on',  latex => '{  \zeta(s)  :=  \frac{ 1 }{ 1^{s} } + \frac{ 1 }{ 2^{s} } + \frac{ 1 }{ 3^{s} } + \frac{ 1 }{ 4^{s} } + \frac{ 1 }{ 5^{s} } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \zeta(-1)  :=  \frac{ 1 }{ 1^{-1} } + \frac{ 1 }{ 2^{-1} } + \frac{ 1 }{ 3^{-1} } + \frac{ 1 }{ 4^{-1} } + \frac{ 1 }{ 5^{-1} } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \zeta(-1)  :=  \frac{ 1 }{ \frac{ 1 }{ 1 } } + \frac{ 1 }{ \frac{ 1 }{ 2 } } + \frac{ 1 }{ \frac{ 1 }{ 3 } } + \frac{ 1 }{ \frac{ 1 }{ 4 } } + \frac{ 1 }{ \frac{ 1 }{ 5 } } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \zeta(-1)  :=  1 + 2 + 3 + 4 + 5 + \cdots  }'),
                      array( display => 'on',  latex => '{  \zeta(-1)  ?=  \sum_{ n = 1 }^{\infty} n  ?=  - \frac{ 1 }{ 12 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Allerdings gilt diese Definition der Zeta-Funktion nur für komplexe Funktionswerte, dessen Realteil größer als \\term{1} ist.'."\n",
                      'Dennoch betrachten wir einmal, was das Ergebnis wäre:\\footnote{Vgl. \\cite{wiki:RiemannscheZetaFunktion:2022}, Geschichte, Anfang des 20. Jahrhunderts, Ramanujans Arbeit zur Zeta-Funktion.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \sum_{ n = 1 }^{\infty} n  =  1 + 2 + 3 + 4 + \cdots  ?=  - \frac{ 1 }{ 12 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX Siehe Gaußsche Summenformel\\footnote{\\const{BiOrd_g_footnote_text_GaussscheSummenformel}}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \sum_{ ( \forall i \in \mathbb{N} )[i \leqslant n] } i  =  0 + 1 + 2 + 3 + \cdots + n  =  \frac{ n^{2} + n }{ 2 }  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \sum_{ \forall i \in \mathbb{N} } i  =  0 + 1 + 2 + 3 + \cdots  =  \frac{ \omega^{2} + \omega }{ 2 }  }'),
                    ))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:Vortext:XXX', text =>
                      
                'XXX Versuch nach Primzahlprodukt-Vermutung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Nach der Primzahlprodukt-Vermutung ist \\term{ω} eine aktual unendliche, gerade Zahl und das Ergebnis damit eine aktual unendliche, ganze Zahl.'."\n".
                    'Insofern passt dies.'."\n".
                    'Es ist noch nicht geklärt, wie dies durch Mengen im hier entwickelten Sinn dargestellt werden kann.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'Was wäre wenn:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall s \in \mathbb{C} \setminus *\{ 1 *\} *) *[  \zeta(s)  :=  \sum_{ n = 0 }^{\infty} \frac{ 1 }{ n^{s} }  *]  }'),
                      array( display => 'on',  latex => '{  \zeta(s)  :=  \frac{ 1 }{ 0^{s} } + \frac{ 1 }{ 1^{s} } + \frac{ 1 }{ 2^{s} } + \frac{ 1 }{ 3^{s} } + \frac{ 1 }{ 4^{s} } + \frac{ 1 }{ 5^{s} } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \zeta(-1)  :=  \frac{ 1 }{ 0^{-1} } + \frac{ 1 }{ 1^{-1} } + \frac{ 1 }{ 2^{-1} } + \frac{ 1 }{ 3^{-1} } + \frac{ 1 }{ 4^{-1} } + \frac{ 1 }{ 5^{-1} } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \zeta(-1)  :=  \frac{ 1 }{ \frac{ 1 }{ 0 } } + \frac{ 1 }{ \frac{ 1 }{ 1 } } + \frac{ 1 }{ \frac{ 1 }{ 2 } } + \frac{ 1 }{ \frac{ 1 }{ 3 } } + \frac{ 1 }{ \frac{ 1 }{ 4 } } + \frac{ 1 }{ \frac{ 1 }{ 5 } } + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \zeta(-1)  :=  0 + 1 + 2 + 3 + 4 + 5 + \cdots  }'),
                      array( display => 'on',  latex => '{  \zeta(-1)  ?=  \sum_{ n = 1 }^{\infty} n  ?=  - \frac{ 1 }{ 12 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Die Summe aller endlichen, natürlichen Zahlen, ohne die Null, hätte tatsächlich ein negatives Ergebnis.'."\n".
                    'Das ist aber eigentlich unmöglich.'."\n",
                      'Es stellen sich allerdings mehrere Fragen:'."\n".
                    'Zum einen, was wäre nach der Ausgangsformel, wenn wir die Null doch berücksichtigen?'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                    ))),
                      
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:NeueEinsichten:NeueEinsichtenZuPosAktualUnendl', text =>
                      
                'Neue Einsichten zu positiven aktual unendlichen Biordinalzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wir können nun zu Aussagen kommen, die etwas über die Größe von \\term{ω} verraten:'."\n",
                      'Subtrahieren wir eine beliebige endliche natürliche Zahl \\term{n} von \\term{ω}, ergibt sich niemals eine Zahl, die zur Menge'."\n".
                    'der endlichen Zahlen gehört:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *( \forall n \in \mathbb{N} *)  *[  \omega - n  \notin  \mathbb{N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\\term{ω – n} ist nicht in den natürlichen Zahlen \\term{\M(N)}, weil eine unendlich große Zahl \\term{ω}'."\n".
                    'minus einer endlichen Zahl \\term{n} eine unendlich große Zahl bleibt.'."\n".
                    'Dies ist offensichtlich und plausibel.'."\n".
                    'Und eine unendlich große Zahl ist eben per Definition kein Element von \\term{\M(N)}.'."\n",
                      'In den Biordinalzahlen zeigt sich also eine riesige mit unendlich großen ganzen Zahlen gefüllte Lücke zwischen den endlichen natürlichen Zahlen und \\term{ω}.'."\n".
                    ''))),

                  array( 'text', array( Shape => 'italic', text => array(
                      'Hier sei gesagt, dass diese Lücke auch ein wesentlicher Grund dafür ist, dass die \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} wahr sein könnte.'."\n".
                      '\\color{*Bearb}{(Ist das wirklich eine Begründung? Die Lücke ist so groß nun auch wieder nicht, siehe unten. Außerdem geht es ja um den Wert von \\term{ω}, der sich aus dem Produkt aller endlichen Primzahlen ergeben soll, und nicht darum, wieviele ganze Zahlen vor \\term{ω} kommen.)}'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Diese Lücke hat eine wichtige Bedeutung.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega', text =>
                      
                'Es gibt mehr ganze Zahlen von Null bis zu \\term{ω}, als der Wert von \\term{ω} ausdrückt', subline =>
                  'Eine Paradox erscheinende, bizarre Situation')),
                  array( 'text', array( text => array(
                    'Doch was ist geschehen?'."\n".
                    'Und was bedeutet das?'."\n",
                      'Gehen wir noch einmal zurück zur Definition der Ordinalzahlen:'."\n",
                      'Die Ordinalzahlen sind so definiert, dass nach den endlichen natürlichen Zahlen gleich \\term{ω} folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *\{ 0, 1, 2, 3, 4, 5, \cdots , \omega *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Allerdings existiert ein Bereich, der nur analytisch durchleuchtet werden kann, weil er für die'."\n".
                    'vollständige Induktion des Zählens steht.'."\n".
                    'Dieser Bereich wird durch die Ellipse (Dreipunkte-Symbol) „\\latexmath{ \cdots }“ ausgedrückt.'."\n",
                      'Nach der Definition der Ordinalzahlen kommen vor \\term{ω} also genau so viele ganze Zahlen,'."\n".
                    'wie die Anzahl \\term{ω}.'."\n".
                    'Denn das ist explizit so definiert.'."\n",
                      'Erweitern wir die Ordinalzahlen nun in Form der Biordinalzahlen zu einem Ring und führen damit die Subtraktion endlicher natürlicher'."\n".
                    'Zahlen von \\term{ω} ein, dann entstehen zwangsweise weiter ganze Zahlen zwischen'."\n".
                    'der Ellipse und \\term{ω}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *\{ 0, 1, 2, 3, \cdots , \cdots , \omega - 3, \omega - 2, \omega - 1, \omega *\}  }'),
                      //%! array( display => 'on',  latex => '{  \Leftrightarrow  *\{ 0, 1, 2, 3, \cdots , \cdots , \omega - 3, \omega - 2, \omega - 1, \omega - 0 *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Eine ganz wesentliche und nicht ganz so einfach zu beantwortende Frage ist:'."\n".
                    'Wieviele Zahlen sind nun vor \\term{ω} zusätzlich neu entstanden?'."\n",
                      'Die Antwort darauf haben wir im Abschnitt \\italic{\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}}'."\n".
                    'ausführlich beleuchtet und eine plausible Antwort aus ontologischer und aus kombinatorischer Perspektive gefunden.'."\n".
                    'Es kommen \\term{ω} weitere Zahlen hinzu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      //%! array( display => 'on',  latex => '{  \Rightarrow  \# *\{ 0, 1, 2, \cdots , \cdots , \omega - 2, \omega - 1, \omega - 0 *\} \\\ \qquad\qquad\qquad\qquad\qquad\qquad  =  2 \cdot \omega + 1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \# *\{ 0, 1, 2, \cdots , \cdots , \omega - 2, \omega - 1 *\}  =  2 \cdot \omega  }',
                                          label_name => 'OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-Zahlen-vor-omega', label_text => '\\name{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-Zahlen-vor-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wie wir erkennen können, liegen nun vor \\term{ω}, mit der Null, dann \\term{2 ⋅ ω} ganze endlich und unendlich große Zahlen.'."\n".
                    'Das erscheint ein wenig paradox.'."\n",
                      'Trotzdem ist die Erweiterung ontologisch erkenntnisreich, plausibel und sinnvoll, weil nützlich.'."\n".
                    'Denn, wie wir noch sehen werden,'."\n".
                    'können wir so überhaupt erst die Anzahl der Zahlen in bestimmten Mengen ausdrücken.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Eine größere Anzahl von Vorgängern, als eine Zahl groß ist, kennen wir schon von rationalen Zahlen} \\\\'."\n".
                    'Bei den Biordinalzahlen haben wir es offenbar mit einer Mischform auf dem Weg zu den rationalen Zahlen zu tun.'."\n",
                      'Denn auch bei den rationalen Zahlen haben wir mehr Vorgänger, sagen wir beispielsweise vor der \\term{½},'."\n".
                    'als die Zahl groß ist.'."\n".
                    'Mit der und nach der Null und vor der \\term{½} liegen sogar unendlich viele rationale Zahlen.'."\n".
                    'Nur handelt es sich nicht um ganze Zahlen, sondern die rationalen Zahlen liegen dicht\\color{*Bearb}{(Verweis)},'."\n".
                    'während die Biordinalzahlen alle noch ganze Zahlen sind und noch nicht dicht liegen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Bezug zu den Superial-Zahlen und zur Anzahl der rationalen Zahlen} \\\\'."\n".
                    'Das vorstehende Ergebnis spielt bei der Analyse der \\jump{OM:SupNum:Eigenschaften:StrukturVonS}{Struktur der Superial-Zahlen} und damit auch im Hinblick auf'."\n".
                    'die Anzahl der rationalen Zahlen eine zentrale Rolle.'."\n",
                      'Bemerkenswerter Weise hat die superiale Basis \\term{s} dann wieder genau so viele natürliche Vorgänger,'."\n".
                    'wie sie selber groß ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Die Summe aller natürlichen Zahlen} \\\\'."\n".
                    'So kommen wir mit den neuen Zahlen beispielsweise auch in die Lage, die Summe aller natürlichen Zahlen zu berechnen.'."\n",
                      'Für die Summe aller natürlicher Zahlen können wir die Gaußsche Summenformel\\footnote{\\const{BiOrd_g_footnote_text_GaussscheSummenformel}}'."\n".
                    'benutzen, wen wir sie entsprechend anpassen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wandeln wir die Gaußsche Summenformel mit Hilfe der obigen Mengendefinitionen von Zahlen'."\n".
                      'nun so ab, dass wir uns nicht auf das größte Element der Summe beziehen,'."\n".
                      'sondern auf die Elemente, die zu summieren sind:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N} *)  *[  \sum_{ ( \forall i \in \mathbb{N} )[i \leqslant n] } \!\!\!\! i  =  0 + 1 + 2 + 3 + \cdots + n  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall n \in \mathbb{N} *)  *[  \sum_{ ( \forall i \in \mathbb{N} )[i \leqslant n] } \! i  =  \frac{ n^{2} + n }{ 2 }  *]  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *( \forall n \in \mathbb{N} *)  *[  \sum_{ \forall i \in n + 1 } \! i  =  \frac{ n^{2} + n }{ 2 }  *]  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *( \forall n \in \mathbb{N} *)  *[  \sum_{ \forall i \in n } i  =  \frac{ *( n - 1 *)^{2} + *( n - 1 *) }{ 2 }  *]  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  *( \forall n \in \mathbb{N} *)  *[  \sum_{ \forall i \in n } i  =  \frac{ *( n^{2} - 2 \cdot n + 1 *) + *( n - 1 *) }{ 2 }  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall n \in \mathbb{N} *)  *[  \sum_{ \forall i \in n } i  =  \frac{ n^{2} - n }{ 2 }  *]  }',
                                          label_name => 'OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-n', label_text => '\\name{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-n}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Ich gehe davon aus, dass dieser Zusammenhang ganz allgemein für alle endlichen und aktual unendlichen „natürlichen“ Zahlen gilt, die ich \lm{ \mathbb{N}_\infty } nenne.'."\n".
                      'Diese Menge können wir mit Hilfe der Abrundung durch die Gaußklammer\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:AbrundungsfunktionUndAufrundungsfunktion:2022}.}'."\n".
                      '\\latexmath{ \lfloor x \rfloor } zum Ausdruck bringen, die eine Zahl \\latexmath{ x } auf die nächst kleinere ganze Zahl abrundet, wenn sie noch keine ganze Zahl ist:'."\n".
                      '\\\\ \color{*Bearb}{(In der nachfolgenden Summe ist die Menge \lm{ \mathbb{N}_\infty } zu überdenken, da sie auch Werte wie \lm{ ω - n } enthält, was wohl nicht sein kann. Vielleicht wäre hier die Menge der Ordinalzahlen \lm{ \mathbb{On} } richtig, die keine Vorgänger der Limeszahlen enthält? Erst bei den Superial-Zahlen kommen auch Vorgänger und Nachfolger von Limes Zahlen wie \lm{ \s \pm n = ω^{ω} \pm n } hinzu, aber dies ja, weil bestimmte Limeszahlen wie \lm{ ω } und deren Vorgänger und Nachfolger \lm{ ω \pm n } ausgeschlossen sind.)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \exists \mathbb{N}_{\infty}\!: \, *( \forall x\!: \, *( x \geq 0 \;\land\; x - \left\lfloor x \right\rfloor = 0  \Leftrightarrow  x \in \mathbb{N}_{\infty} *) *)  }',
                                          label_name => 'OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-N-unendlich', label_text => '\\name{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-N-unendlich}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall i \in [ 0, n [_{\mathbb{N}_{\infty}} } i  =  \frac{ n^{2} - n }{ 2 }  }',
                                          label_name => 'OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich', label_text => '\\name{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'So können wir von dort zur Summe aller endlichen natürlichen Zahlen übergehen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'BO.Ein.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall i \in \omega } i  =  \frac{ \omega^{2} - \omega }{ 2 }  }',
                                          label_name => 'OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-omega', label_text => '\\name{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-omega}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall i \in \mathbb{N} } i  =  \frac{ \omega^{2} - \omega }{ 2 }  \;\;  ,  }',
                                          label_name => 'OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N', label_text => '\\name{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'die wir ja errechnen wollten.'."\n",
                        '\\\\ '."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Auch diese Summe lässt sich nur mit den Biordinalzahlen ausdrücken.'."\n",
                      'Und sie setzt voraus, dass \\term{ω^^{2} – ω} gerade ist, also ganzzahlig durch Zwei geteilt werden kann.'."\n".
                    'Das bedeutet, dass die Zwei als Faktor in beiden Summanden stecken muss.'."\n".
                    'Folglich trägt \\term{ω} den Primfaktor \\term{2} in sich.\\footnote[*Entwick]{\\color{*Entwick}{Dies ist ein erster ganz kleiner Schritt in Richtung der \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung}. Lässt sich auf diese Weise Schritt für Schritt mehr in diese Richtung zeigen?}}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:BiOrd:Einleitung:NeueEinsichten:XXX', text =>
                      
                'Weiterentwicklung zu den Superial-Zahlen', subline =>
                  'Die superiale Basis \\term{s} hat \\term{s} natürliche Superial-Zahlen als Vorgänger')),
                  array( 'text', array( text => array(
                    'Die \\jump{OM:SupNum:Home}{Superial-Zahlen} können in gewisser Hinsicht als Weiterentwicklung der Biordinalzahlen zu einer'."\n".
                    'abelschen Gruppe\\footnote{\\const{NSOSP_g_footnote_text_AbelscheGruppe}} bezüglich der Addition und Multiplikation'."\n".
                    'verstanden werden und sie sind sogar ein angeordneter algebraischer Körper\\footnote{\\const{NSOSP_g_footnote_text_KoerperAlgebra}}.'."\n".
                    'Dies gilt in einem noch engeren Sinn, wenn sich die \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} '."\n".
                    'als wahr herausstellen sollte.'."\n",
                      'Auch, wenn mir noch keine explizite Mengendarstellung der Superial-Zahlen bekannt ist, die der der Biordinalzahlen'."\n".
                    'entspricht, so waren für mich die Superial-Zahlen und ihre Eigenschaft, dass die Subtraktion vollständig definiert ist,'."\n".
                    'der Anlass zur Entwicklung der Biordinalzahlen aus den Ordinalzahlen, um die ontologische Struktur'."\n".
                    'von aktual unendlichen Zahlen besser zu verstehen.'."\n".
                    'Daher liegt es auf der Hand, deren Eigenschaften in Bezug auf ihre Vorgänger zu vergleichen.'."\n",
                      'Mit den Ordinalzahlen und den Biordinalzahlen befinden wir uns strukturell sozusagen am Sockel'."\n".
                    'der Fraktalität des Aktual-Unendlichen.'."\n".
                    'Dies erscheint mir ein Grund dafür, dass wir in bizarre und auch interessante, scheinbar paradoxe Situationen kommen.'."\n",
                      'Mit den Superial-Zahlen kommen wir dann quasi in die höheren Sphären der Fraktalität,'."\n".
                    'was zur Folge hat, dass uns die Dinge wieder harmonischer erscheinen.'."\n".
                    'Denn in den \\jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Superial-Zahlen} haben wir wieder so viele Vorgänger,'."\n".
                    'wie der Wert einer bestimmten natürlichen Superial-Zahl groß ist.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Home'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
