<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Biordinalzahlen'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Primzahlprodukt-Vermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{Ausgangspunkt}',
                    // '• Die Biordinalzahlen sind eine Darstellung aller ganzer Zahlen durch Mengen, also auch der negativen ganzen Zahlen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Ausgangspunkt der Biordinalzahlen sind die Ordinalzahlen\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}.}.'."\n".
                    'Bei den Ordinalzahlen handelt es sich um die Fortsetzung des Zählens oder der uns allgemein bekannten Anzahl von Dingen ins Aktual-Unendliche.'."\n",
                      'Die nachfolgend eingeführten Biordinalzahlen erweitern das Zählen (Vorwärtszählen) um das Rückwärtszählen von jeder Zahl aus bis in den negativen Bereich.'."\n".
                    'Das bedeutet, dass das Rückwärtszählen und die Subtraktion innerhalb der Biordinalzahlen vollständig definiert sind,'."\n".
                    'was innerhalb der Ordinalzahlen nicht der Fall ist.'."\n",
                      'Die Biordinalzahlen definieren so nicht nur die Anzahl, die vorhanden ist,'."\n".
                      'sondern auch die Anzahl, die an etwas vollständigem Fehlt, wie wir sehen werden.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Erwartete Erkenntnisgewinne', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Aus der Perspektive der \\jump{OM:SupNum:Home}{Superial-Zahlen} bringt dies auch ein besseres Verständnis der positiven aktual unendlichen Zahlen,'."\n".
                    'wie zum Beispiel \\term{s-1}, mit sich.'."\n".
                    'Denn hier fehlt an \\term{s} etwas.'."\n",
                      'Auch zur Klärung der \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} kann die mengentheoretische Perspektive des Negativen'."\n".
                    'tiefere Einsichten beitragen, indem festgestellt wird, dass \\term{ω-1} zu einer riesigen Lücke zwischen den endlichen natürlichen Zahlen'."\n".
                    'und dem vermuteten Produkt aller endlichen Primzahlen \\term{ω} gehört.'."\n",
                      'Und nicht zuletzt können wir im Zusammenhang mit geometrischen Überlegungen etwas über die ontologische Struktur des Zählens lernen,'."\n".
                    'deren Erweiterung auf das Negative eine grundlegende Asymmetrie in den ganzen Zahlen erkennen lässt.'."\n".
                    'Meine Intuition sagt mir, dass diese Asymmetrie gemeinsam mit der Primzahlprodukt-Vermutung in der Lage sein könnte'."\n".
                    'entscheidendes zur Klärung der Riemannschen Vermutung\\color{*Bearb}{(Verweis)} beizutragen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Ordinalzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Dabei werden zunächst die natürlichen Zahlen durch eine Entsprechung zu eineindeutig bestimmten Mengen dargestellt,'."\n".
                    'die selber genau eine Anzahl an Mengen enthalten, wie die jeweilige natürliche Zahl besagt.'."\n",
                    // 'Diese Fortsetzung wird mit Hilfe der Mengenlehre, durch die Definition einer Entsprechung eines (An-)Zahlensymbols mit einer bestimmten Menge, die eben selber wieder diese Anzahlen an Mengen enthält, erreicht.'."\n",
                      'Die Ordinalzahlen sind so über ihre Definition durch geordnete Mengen folgendermaßen bestimmt:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}, Die natürlichen Zahlen als geordnete Mengen.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  0  :=  *\{ *\}  }'),
                      array( display => 'on',  latex => '{  1  :=  *\{ 0 *\}  =  *\{ *\{ *\} *\}  }'),
                      array( display => 'on',  latex => '{  2  :=  *\{ 0, 1 *\}  =  *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on',  latex => '{  3  :=  *\{ 0, 1, 2 *\}  =  *\{ *\{ *\}, *\{ *\{ *\} *\}, *\{ *\{ *\}, *\{ *\{ *\} *\} *\} *\}  }'),
                      array( display => 'on',  latex => '{  n  :=  *\{ 0, 1, 2, …, n - 1 *\}  }'),
                      array( display => 'on',  latex => '{  n + 1  :=  *\{ 0, 1, 2, …, n *\}  =  n \cup *\{ n *\}  }',
                                          label_name => 'OM:SupNum:Biordinalzahlen:Vortext:Equ-n-plus-Eins', label_text => '\\name{OM:SupNum:Biordinalzahlen:Vortext:Equ-n-plus-Eins}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Im Folgenden soll auch gelten, dass die Null ein Element der natürlichen Zahlen ist, wie in den Peano-Axiomen\\footnote{\\const{NSOSP_g_footnote_text_PeanoAxiome}} zur Definition von \\term{\M(N)} gefordert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{N}  :=  \mathbb{N}_{0}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Übergang vom Endlichen ins Aktual-Unendliche geschieht durch die Feststellung, dass dann auch die Anzahl der Elemente der Menge der natürlichen Zahlen \\term{\M(N)} durch ein Symbol dargestellt werden kann, nämlich \\term{ω};'."\n".
                    'und nach Formel \\jumpname{OM:SupNum:Biordinalzahlen:Vortext:Equ-n-plus-Eins} so dann auch \\term{ω+1} und folgende:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on', latex => '{  \mathbb{N}  :=  ??? *\{  n ~\middle|~ \left( n \in \mathbb{N} \right) \left( \forall x \in \mathbb{N} \right) \left[  x < n  \right]  *\}  }'),
                      array( display => 'on', latex => '{  \omega  :=  \mathbb{N}  }'),
                      array( display => 'on', latex => '{  \omega + 1  :=  \mathbb{N} \cup *\{ \mathbb{N} *\}  =  *\{ 0, 1, 2, 3, …, \mathbb{N} *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Insgesamt sehen wir, dass jede definierte Zahl der Anzahl der Elemente in einer eineindeutig bestimmten geordnete Menge entspricht.'."\n",
                      'Die Anzahl \\latexmath{ \omega } symbolisiert mathematisch gesehen die aktual unendliche Anzahl,'."\n".
                    'die der Schritte einer vollständigen Induktion\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Unendlichkeitsaxiom:2021}, Formulierung; Bedeutung für die Mathematik, Natürliche Zahlen.} entsprechen, um alle endlichen Zahlen von der Null an'."\n".
                    'vollständig durchzuzählen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Grundsätzliche Idee zur Erweiterung der Ordinalzahlen ins Negative', subline =>
                  'Der Ansatz vorerst beispielhaft mit der Menge der natürlichen Zahlen \\latexmath{ \mathbb{N} }, zum einfachen Einstieg und erweiterten Verständnis')),
                  array( 'text', array( text => array(
                    'Aufgrund meines strukturellen Interesses an der Unendlichkeit und meiner Neugier suchte ich vor vielen Jahren'."\n".
                    'nach einer möglichen Fortsetzung der Ordinalzahlen ins Negative.'."\n".
                    'Schließlich kam ich darauf, dass negative Zahlen zum Beispiel über das Fehlen von bestimmten Mengen an der Menge der natürlichen Zahlen'."\n".
                    'dargestellt werden können:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  2  :=  *\{ 0, 1 *\}  =  *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  1  :=  *\{ 0 *\}  =  *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  0  :=  *\{ *\}  }'),
                      array( display => 'on', latex => '{  -1  :=  \mathbb{N} \setminus 1  =  \mathbb{N} \setminus *\{ 0 *\}  =  \mathbb{N} \setminus *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  -2  :=  \mathbb{N} \setminus 2  =  \mathbb{N} \setminus *\{ 0, 1 *\}  =  \mathbb{N} \setminus *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  -n  :=  \mathbb{N} \setminus n  =  \mathbb{N} \setminus *\{ 0, 1, …, n - 1 *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auch hier wird konsequenterweise das Prinzip aufrecht erhalten, dass die Menge, die eine Zahl repräsentiert in Richtung des Negativen'."\n".
                    'in ihrer Anzahl sinkt.'."\n".
                    'An einer gegebenen Anzahl fehlen entsprechend viele Zahlen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
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
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  2  :=  *\{ 0, 1 *\}  =  *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  1  :=  *\{ 0 *\}  =  *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  0  :=  *\{ *\}  }'),
                      array( display => 'on', latex => '{  -1  :=  \mathbb{U} \setminus 1  =  \mathbb{U} \setminus *\{ 0 *\}  =  \mathbb{U} \setminus *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  -2  :=  \mathbb{U} \setminus 2  =  \mathbb{U} \setminus *\{ 0, 1 *\}  =  \mathbb{U} \setminus *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  -n  :=  \mathbb{U} \setminus n  =  \mathbb{U} \setminus *\{ 0, 1, …, n - 1 *\}  }'),
                      array( display => 'on', latex => '{  -\omega  :=  \mathbb{U} \setminus \omega  =  \mathbb{U} \setminus \mathbb{N} \\\ \qquad\qquad\qquad\;  =  \mathbb{U} \setminus *\{ 0, 1, 2, 3, … *\}  }'),
                      array( display => 'on', latex => '{  - *(\omega + 1 *)  :=  \mathbb{U} \setminus *( \omega + 1 *)  =  \mathbb{U} \setminus *( \mathbb{N} \cup *\{ \mathbb{N} *\} *) \\\ \qquad\qquad\qquad\qquad\qquad  =  \mathbb{U} \setminus *\{ 0, 1, 2, 3, …, \mathbb{N} *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auch in diesem Fall wird konsequenterweise das Prinzip aufrecht erhalten, dass die Klasse – das Mengenuniversum ist auch ein Container, aber definitionsgemäß keine Menge –, die eine Zahl repräsentiert zum Negativen hin'."\n".
                    'in ihrer Anzahl sinkt.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Erweiterung der Limeszahlen um ihre Vorgänger} \\\\'."\n".
                    'Wir möchten ja erreichen, dass wir innerhalb der Biordinalzahlen generell von jeder Zahl aus nicht nur in die positive Richtung,'."\n".
                    'sondern auch in die negative Richtung zählen, also die Vorgänger benennen, können.'."\n".
                    'Die sogenannten Limeszahlen\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}, Motivation und Definition, Limes- und Nachfolgerzahlen.},'."\n".
                    'wie \\term{ω}, \\term{2⋅ω} oder \\term{ω^{2}}, haben in unserer Konstruktion immer noch keine Vorgänger.'."\n",
                      'Die Vorgänger der Limeszahlen lassen sich nun entsprechend der absolut negativen Zahlen definieren:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega - 1  :=  \mathbb{N} \setminus 1  =  \mathbb{N} \setminus *\{ 0 *\} \\\ \qquad\qquad\qquad\quad  =  \mathbb{N} \setminus *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  \omega - 2  :=  \mathbb{N} \setminus 2  =  \mathbb{N} \setminus *\{ 0, 1 *\} \\\ \qquad\qquad\qquad\quad  =  \mathbb{N} \setminus *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  \omega - n  :=  \mathbb{N} \setminus n  =  \mathbb{N} \setminus *\{ 0, 1, …, n - 1 *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Definition, basierend auf \\term{\M(N)}, wurde eingangs für die Definition der absolut negativen Zahlen in Erwägung gezogen, dafür jedoch wieder verworfen, und bekommt hiermit ihre passende Rolle.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Analyse der allgemeinen Subtraktion} \\\\'."\n".
                    'Aber wie steht es mit der Eindeutigkeit, der Praktikabilität und der generellen Plausibilität in komplizierteren Fällen?'."\n".
                    'An folgendem Beispiel können wir einmal sehen, worum es geht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - \omega - n  =  \omega^2 - *( \omega + n *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese beiden Darstellungen sind aus Sicht der an \\term{ω^{2}} fehlenden Mengen im ersten Moment nicht identisch.'."\n".
                    'Dabei müssen wir uns zuerst klar machen, dass an \\term{ω^{2}} auch nur die Mengen fehlen können, die enthalten sind.'."\n",
                      'So taucht die Frage auf, ob es nicht generell möglich ist, immer die folgende Definition zu benutzen,'."\n".
                    'wenn \\term{λ} die größte Limeszahl in der Summe ist und \\term{β} die restlichen Summanden zusammenfasst:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \lambda - \beta  :=  \lambda \setminus \beta  }',
                                         label_name => 'OM:SupNum:Biordinalzahlen:Vortext:Equ-Lambda-minus-Beta', label_text => '\\name{OM:SupNum:Biordinalzahlen:Vortext:Equ-Lambda-minus-Beta}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Dann wäre das Beispiel so definiert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - *( \omega + n *)  :=  \omega^2 \setminus *( \omega + n *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und das erscheint schlüssig, weil alle Zahlen, die aus \\term{ω^{2}} entfernt werden auch darin enthalten sind.'."\n",
                      'Doch was wäre, wenn sich Vorzeichen der hinteren Summanden ändern:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - \omega + n  =  \omega^2 - *( \omega - n *)  }'),
                      array( display => 'on', latex => '{  \omega^2 - *( \omega - n *)  :=  \omega^2 \setminus *( \omega - n *)  }'),
                      array( display => 'on', latex => '{  \omega - n  :=  \omega \setminus n  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \omega^2 - *( \omega - n *)  :=  \omega^2 \setminus *( \omega \setminus n *) \\\ \qquad\qquad\qquad\quad\;\;  =  \omega^2 \setminus *( \omega \setminus *\{ 0, 1, …, n - 1 *\} *) \\\ \qquad\qquad\qquad\quad\;\;  =  \omega^2 \setminus *\{ n, n + 1, n + 2, n + 3, … *\} \\\ \qquad\qquad\qquad\quad\;\;  =  *\{ 0, 1, …, n - 1, \omega, \omega + 1, …, \omega^2 *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das scheint auch schlüssig zu sein, weil möglich, denn die weggelassenen Mengen existieren in \\term{ω^{2}} beziehungsweise in \\term{ω}, als auch eineindeutig,'."\n".
                    'denn es gibt keine andere Möglichkeit, die selbe Darstellung des Wertes durch eine solche Konstruktion zu erreichen.'."\n",
                      'Und diese Darstellung erfüllt auch die wichtige Eigenschaft, dass die durch Mengen dargestellte Zahl die Anzahl an Mengen enthält,'."\n".
                    'wie ihr Wert groß ist, oder diese Anzahl aus der Klasse aller Mengen entfernt wird.'."\n".
                    'Am vorstehenden Beispiel veranschaulicht bedeutet dies:'."\n".
                    'Beim Wert \\term{ω^{2} –  ω + n} haben wir als Basis die Menge \\term{ω^{2}} aus der wir die Mengen in \\term{ω} herausnehmen,'."\n".
                    'die Mengen in \\term{n} jedoch drinnen belassen beziehungsweise wieder hinzufügen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Biordinalzahlen:Vortext:XXX',
                Title => 'Verworfene Möglichkeiten …',
                TitleVis => 'Verworfene Möglichkeiten:', ParagraphList => array(
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Umgekehrte Klammerung', subline =>
                  '')),
                  // funktioniert nicht, wegen verschachteltem Aufklappen
                  /* array( 'notice', array( Display => 'showContent', text => array(
                     '\\bold{Überprüfen}',
                     '• Warum sollte die Addition von \\term{n} in \\term{(ω^{2} – ω) + n} anders laufen als oben?',
                    ))), */
                  array( 'text', array( text => array(
                     '\\color{*Bearb}{\\bold{Überprüfen} \\\\ '."\n".
                     '• Warum sollte die Addition von \\term{n} in \\term{(ω^{2} – ω) + n} anders laufen als oben?}'."\n",
                    ))),
                  array( 'text', array( text => array(
                    'Die andere Möglichkeit ist, wir klammern von vorne:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - \omega + n  =  *( \omega^2 - \omega *) + n  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \omega^2 - \omega + n  :=  *( \omega^2 \setminus \omega *) + n  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dann würden wir von \\term{ω^{2} – ω} um \\term{n} Schritte neu loszählen und erhielten so bisher nicht da gewesene Mengen, die diese Zahlen darstellten.'."\n".
                    'Das finde ich viel weniger intuitiv, weil sich die Strukturen der Mengen dann nicht nur in der obersten Verschachtelungsebene der größten Limeszahl ändern,'."\n".
                    'sondern auch in tieferen Ebenen.'."\n",
                      'Noch komplexer wird es dann im folgenden Beispiel:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^3 - *( \omega^2 - *( \omega - n *) *)  =  *( *( \omega^3 - \omega^2 *) + \omega *) - n  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So ergibt sich in dieser Möglichkeit ein heilloses Durcheinander.'."\n",
                      'Deshalb ist für mich diese Möglichkeit zu verwerfen, wenn wir oben eine wunderbar einfache Möglichkeit gefunden haben,'."\n".
                    'dasselbe sehr übersichtlich und plausibel zu leisten.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Entfernen der (nur einer) Menge mit den Zahlen vom Mengenuniversum', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Eine noch ganz andere Möglichkeit, die ich in meiner Abhandlung über Biordinalzahlen gewählt hatte und jetzt verworfen habe,'."\n".
                    'ist, wir entfernen nicht den Mengeninhalt einer zu subtrahierenden Zahl vom Mengenuniversum \\term{\M(U)} (siehe \\jumpname{OM:SupNum:Biordinalzahlen:Vortext:Equ-Lambda-minus-Beta}),'."\n".
                    'sondern die Zahl selber:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                      
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:NeueEinsichten', text =>
                      
                'Neue Einsichten zu positiven aktual unendlichen Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wir können nun zu Aussagen kommen, die etwas über die Größe von \\term{ω} verraten.'."\n".
                    'Ziehen wir eine beliebige endliche natürliche Zahl \\term{n} von \\term{ω} ab, ergibt sich niemals eine Zahl, die zur Menge'."\n".
                    'der endlichen natürlichen Zahlen gehört:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *( \forall n \in \mathbb{N} *)  *[  \omega - n  \notin  \mathbb{N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\\term{ω – n} ist nicht in den natürlichen Zahlen \\term{\M(N)}, weil eine unendlich große Zahl \\term{ω} minus einer endlichen Zahl \\term{n} eine unendlich große Zahl bleibt.'."\n".
                    'Und eine unendlich große Zahl ist kein Element von \\term{\M(N)}.'."\n",
                      'Es zeigt sich also eine riesige mit unendlich großen natürlichen Zahlen gefüllte Lücke zwischen den endlichen natürlichen Zahlen und \\term{ω}.'."\n".
                    'Diese Lücke ist ein Grund dafür, dass die \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} wahr sein könnte.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
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
                    'XXX'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Biordinalzahlen:IntegrierteMengenlehre'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

          <!  • Integrierte Mengenlehre  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Biordinalzahlen:IntegrierteMengenlehre',
              'Erweiterung der Mengenlehre durch Antimengen auf das integrierte Mengenuniversums', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Biordinalzahlen', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Um wohldefiniert mit Biordinalzahlen mit der uns bekannten Mengenlehre arbeiten zu können'."\n".
                    'bedarf es einer Definition, mit was für Objekten wir es hier zu tun haben und einer'."\n".
                    'Erweiterung der Mengenlehre auf all diese Objekte.'."\n",
                      'Wenn wir negative Zahlen oben durch das Fehlen von Mengen an der Klasse des Mengenuniversums \\latexmath{ \mathbb{U} }'."\n".
                    'definieren, dann bedeutet dies, dass wir das Universum der normalen Mengen verlassen.'."\n".
                    'Denn die Klasse des Mengenuniversums, an der unterschiedliche Kombinationen an Mengen fehlen, sind selber keine Mengen sondern auch Klassen.'."\n",
                      'Wir können allerdings sagen, dass es sich hierbei um eine besondere Klasse von Klassen handelt:'."\n".
                    'Wir nennen eine Klasse, bei der am Mengenuniversums Mengen fehlen, eine Antimenge.'."\n".
                    'Ebenso nennen wir die Klasse, die alle Antimengen enthält, das Antimengenuniversum \\term{\M(U)^{&thinsp;–}}'."\n".
                    'Zuletzt nennen wir die Klasse, die alle Mengen sowie alle Antimengen enthält als integriertes Mengenuniversums \\term{\M(U)^{ i}}.'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei, abgeleitet von Formel \\jumpname{OM:SupNum:Biordinalzahlen:Vortext:Equ-Lambda-minus-Beta},'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.IM', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *( \forall a \in \mathbb{U} \setminus *\{ *\{ *\} *\} *) *[  a^{-}  :=  \mathbb{U} \setminus a  *]  }',
                                         label_name => 'OM:SupNum:Biordinalzahlen:IntegrierteMengenlehre:Equ-Antimenge', label_text => '\\name{OM:SupNum:Biordinalzahlen:IntegrierteMengenlehre:Equ-Antimenge}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'die Definition der Antimenge zu jeder Menge \\latexmath{ a }, die nicht die leere Menge ist.'."\n".
                      'Es existiert dabei keine Definition einer Antimenge für die leere Menge:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *( \nexists a^{-} *) *[  a  =  *\{ *\}  *]  \;\;.  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die leere Menge ist hier ausgeschlossen, weil ihre Antimenge das Mengenuniversum \\term{\M(U)} selber wäre,'."\n".
                    'was zu einem Widerspruch führen würde, den wir gleich noch herausarbeiten.'."\n".
                    'Für die leere Menge ist also keine Antimenge definiert.'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'So ergibt sich'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{U}^{-}  :=  *\{  x  *|*  *( \forall a \in \mathbb{U} \setminus *\{*\{ *\}*\} *) *[  x = a^{-}  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'als Definition des Antimengenuniversums.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Das Mengenuniversum und das Antimengenuniversum überschneiden sich nicht'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{U} \cap \mathbb{U}^{-}  =  *\{ *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und beide zusammen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{U}^{i}  :=  \mathbb{U} \cup \mathbb{U}^{-}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'ergeben das integrierte Mengenuniversum.'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( text => array(
                    'Hier sehen wir auch, dass, ohne Ausschluss der leeren Menge bei der Definition der Antimengen (siehe Formel \\jumpname{OM:SupNum:Biordinalzahlen:IntegrierteMengenlehre:Equ-Antimenge}),'."\n".
                    'das Antimengenuniversum \\term{\M(U)^{&thinsp;–}} widersprüchlicher Weise das Mengenuniversum \\term{\M(U)} enthalten würde,'."\n".
                    'obwohl sich beide zum integrierten Mengenuniversum \\term{\M(U)^{ i}} ergänzen sollen.'."\n",
                      'So können wir jetzt eine allgemeine Definition der Negierung von integrierten Mengen angeben.'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Negation einer integrierten Mengen gilt also:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  *( \\forall a \in \mathbb{U}^{i} *) *[ -a  =  \begin{cases}  a^{-}  &  \text{ falls } a \in \mathbb{U} \setminus *\{ *\{ *\} *\}  \\\\  a  &  \text{ falls } a = *\{ *\}  \\\\  \mathbb{U} \setminus a  &  \text{ falls } a \in \mathbb{U}^{-}  \end{cases} *]  }'),
                      array( display => 'on',  latex => '{  *( \\forall a \in \mathbb{U}^{i} *) *[ -a  =  \begin{cases}  a  &  \text{ falls } a = *\{ *\} \\\\ \mathbb{U} \setminus a  &  \text{ falls } a \in \mathbb{U}^{i} \setminus *\{ *\{ *\} *\}  \end{cases} *]  }',
                                    latex_if_visible => '{  *( \\forall a \in \mathbb{U}^{i} *) *[ -a  =  \begin{cases}  a  &  \text{ falls } a = *\{ *\} \\\\ \mathbb{U} \setminus a  &  \text{ falls } a \in \mathbb{U}^{i} \setminus *\{ *\{ *\} *\}  \end{cases} *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Alle negierten integrierten Mengen sind wieder integrierte Mengen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                      array(  jump_name => 'OM:SupNum:Biordinalzahlen:OntologischeDeutung'),
                    )),
              )
          ); ?>


		    	<!  • Ontologische Deutung  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Biordinalzahlen:OntologischeDeutung',
              'Was wir wohl nicht sehen', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Biordinalzahlen:IntegrierteMengenlehre', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Was geht beim Arbeiten mit Mengen implizit vor sich, was wir wohl nicht sehen, was uns nicht bewusst ist?'."\n",
                      'Die vorgestellte Methode zur Darstellung negativer Zahlen durch Mengen – oder später dann bestimmte Klassen, die Antimengen genannt werden –'."\n".
                    'macht deutlich, dass eine Menge – oder Klasse – eine Auswahl aus den Möglichkeiten darstellt.'."\n".
                    'Symbolisch wird durch die Klammer, die etwas enthält, eine Auswahl getroffen, die diese vom Rest der'."\n".
                    'Auswahlmöglichkeiten abgrenzt, die Auswahl umhüllt.'."\n",
                      'Implizit haben wir es oben also immer mit der Menge der natürliche Zahlen \\term{\M(N)} zu tun.'."\n".
                    'Die Auswahl befindet sich in der Menge- oder Auswahl-Klammer oder Auswahl-Hülle und der Rest unsichtbar außerhalb dieser.'."\n".
                    'Unsere Betrachtung behandelt also immer die Menge \\term{\M(N)}, die in zwei Teile zerlegt ist:'."\n".
                    'Einen Teil, auf den wir fokussierten – der bewusste Teil – und einen Teil, den wir ausblenden – der unbewusste Teil.'."\n".
                    'Naturphilosophisch gesehen, haben wir es mit einem Dualismus beziehungsweise einer Polarität zu tun,'."\n".
                    'den \\italic{Auswahldualismus} oder \\italic{Bewusstseinsdualismus}.'."\n",
                      'Noch näher betrachtet handelt es sich beim Auswahl- oder Bewusstseinsdualismus um einen fraktalen Dualismus.'."\n".
                    'Denn zunächst wählen wir die Menge \\term{\M(N)}, nehmen sie in unseren Fokus und blenden damit alles andere'."\n".
                    'was existiert aus.'."\n".
                    'Anschließend gehen wir in diese Menge und wählen in ihr wieder einen Teil aus, den wir nun in den näheren Fokus nehmen'."\n".
                    'und damit alle anderen Elemente in \\term{\M(N)} ausblenden.'."\n".
                    'Wir haben dann also schon vier Fraktalebenen:'."\n".
                    'Alles was existiert, darin die Menge \\term{\M(N)}, darin alle Elemente in dieser Menge und dann darin'."\n".
                    'die Teilmenge der Elemente, die wir letztendlich aus den Elementen in \\term{\M(N)} ausgewählt haben.'."\n",
                      'Eine Invertierung oder Vertauschung der beiden tiefsten Ebenen nutzen wir nun zur Darstellung negativer Zahlen:'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wählen wir eine einzige Ordinalzahl, beispielsweise die \\term{2}, in Bezug zum von uns zuvor zuletzt geschilderten, tiefsten Fokus:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.OD', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  2  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dann haben wir eigentlich eine Auswahl-Menge, die die ausgewählte Zahl enthält,'."\n".
                      'hier durch zwei neue Klammern mit Pfeilen nach innen symbolisiert:'."\n".
                      // 'Die ausgewählte Zahl ist selber eine Menge mit all den Mengendarstellungen ihrer Vorgänger.'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.OD', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *\{> 2 *<\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Um die Menge mit unserer Auswahl aus \\term{\M(N)} herum befinden sich ja implizit alle Zahlen, die wir nicht aus \\term{\M(N)}'."\n".
                      'ausgewählt haben, denn wir haben ja zum Ausdruck gebracht, dass wir uns mit den Elementen in \\term{\M(N)} beschäftigen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.OD', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *\{> 0, 1, *\{> 2 *<\} , 3, 4, 5, \cdots *<\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wenn wir unseren Fokus von der \\term{2} zu allen anderen wechseln, dann sieht dies'."\n".
                      'folgendermaßen aus:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.OD', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *\{> 2, *\{> 0, 1, 3, 4, 5, \cdots *<\} *<\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\ '."\n".
                      ''))),
                  array( 'text', array( text => array(
                    'Dies ist unserer Konstruktion der Darstellung negativer Zahlen durch Mengen oben schon sehr ähnlich,'."\n".
                    'aber nicht gleich.'."\n",
                      'Was vor allem nicht erfüllt ist, ist die Idee, dass die Darstellung des Wertes einer Zahl mit'."\n".
                    'der Anzahl an Mengen in Beziehung steht.'."\n".
                    'Denn im oberen Beispiel fehlt im inneren Fokus nur eine Zahl an \\term{\M(N)} und nicht zwei,'."\n".
                    'wie es oben bei einer Anzahl von \\term{-2} eigentlich gefordert ist.'."\n".
                    'Auch ist im Fokus nicht eine einzige Menge ausgewählt, sondern viele.'."\n".
                    ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wir wollen nun die \\term{-2} auswählen und in den Fokus nehmen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.OD', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  -2  =  *\{> \!-\!2 *<\}  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  *\{> \!-\!2 *<\}  =  *\{> \mathbb{N} \setminus 2 *<\}  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  *\{> \!-\!2 *<\}  =  *\{> \mathbb{N} \setminus *\{ 0, 1 *\} *<\}  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  *\{> \!-\!2 *<\}  =  *\{> *\{ 2, 3, 4, 5, \cdots *\} *<\}  }'),
                      // array( display => 'on', latex => '{  *\{> \cdots, -3, *\{> \!-\!2 *<\}, -1, 0, 1, 2, 3, \cdots *<\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.OD', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *\{> 2, *\{> \!-\!2 *<\} *<\}  =  *\{> 2, *\{> \mathbb{N} \setminus 2 *<\} *<\}  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  *\{> 2, *\{> \!-\!2 *<\} *<\}  =  *\{> 2, *\{> \mathbb{N} \setminus *\{ 0, 1 *\} *<\} *<\}  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  *\{> 2, *\{> \!-\!2 *<\} *<\}  =  *\{> 2, *\{> *\{ 2, 3, 4, 5, \cdots *\} *<\} *<\}  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  *\{> 2, *\{> \!-\!2 *<\} *<\}  =  *\{> *\{ 0, 1 *\}, *\{> \mathbb{N} \setminus *\{ 0, 1 *\} *<\} *<\}  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  *\{> 2, *\{> \!-\!2 *<\} *<\}  =  *\{> *\{ 0, 1 *\}, *\{> *\{ 2, 3, 4, 5, \cdots *\} *<\} *<\}  }'),
                      array( display => 'on', latex => '{  *\{> 0, 1, *\{> 2, 3, 4, 5, \cdots *<\} *<\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die \\term{2} ist nun ihrerseits eine Menge, die ihre Vorgänger enthält:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.OD', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *\{> 0, 1, *\{> *\{ 0, 1 *\} *<\}, 3, 4, 5, \cdots *<\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.OD', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *\{> 2, *\{> *\{ 2, 3, 4, 5, \cdots *\} *<\} *<\}  }'),
                      array( display => 'on', latex => '{  *\{> *\{ 0, 1 *\} , *\{> *\{ 2, 3, 4, 5, \cdots *\} *<\} *<\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\ '."\n".
                      ''))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n",
                      'XXX Denn jeder dieser beiden Teile kann durch einen Perspektivwechsel, durch einen neuen Fokus, wieder in zwei solche Teile zerfallen.'."\n".
                    'Oder wir teilen beide Teile anders in zwei Teile auf.'."\n".
                    'Betrachten wir beide Teile gemeinsam, dann lassen wir natürlich wieder implizit den Rest der Welt, des Universums, weg.'."\n",
                      'Die Menge \\term{\M(N)} selber kann in der Darstellung der endlichen Zahlen keine Rolle spielen,'."\n".
                    'weil sie bereits eine höhere Größenordnung darstellt, auch Mächtigkeit oder Kardinalität genannt.'."\n",
                      'Die Zuordnung der Werte zur ontologischen Struktur führt deshalb zu einer naturphilosophisch sehr interessanten '."\n".
                    'Asymmetrie, die wir im Folgenden näher betrachten werden.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Biordinalzahlen:EineFundamentaleAsymmetrie'),
                    )),
              )
          ); ?>


		    	<!  • Eine fundamentale Asymmetrie  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Biordinalzahlen:EineFundamentaleAsymmetrie',
              'Die ontologische Struktur beinhaltet die Zählrichtung', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Biordinalzahlen:OntologischeDeutung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Interessanterweise ergibt sich auf diese Weise, dass es eine negative Zahl mehr gibt als positive Zahlen.'."\n".
                    'Wie kann das sein?'."\n",
                      'Die ontologische Begründung dafür, also die Begründung aus Sicht der Struktur des Seins oder die Realität betreffend, hat mir mein Freund Raimund Welsch nahegelegt:'."\n".
                    'Begreifen wir jede nach oben gezählten Abstand Eins als Welle – oder alternativ als Sägezahn, wie ich es selber schon früher gedacht hab – dann fängt jede dieser Wellen bei einer ganzen'."\n".
                    'Zahl an.'."\n".
                    'Die darauf folgende nächste ganze Zahl ist schon der Beginn der nächsten Welle und gehört nicht mehr zu der, die wir gerade gezählt haben.'."\n",
                      'Die nullte Welle beginnt also bei der Null.'."\n",
                      'Duplizieren wir die positiven Wellen, beginnend bei der der Null, indem wir die gleiche Anzahl ins Negative verschieben,'."\n".
                    'dann ist der Nullpunkt auf der negativen Seite zusätzlich dupliziert.'."\n".
                    'Während der verschobene Nullpunkt der negativen Seite eine negative Zahl repräsentiert, repräsentiert der originale Nullpunkt keine positive'."\n".
                    'Zahl, sondern die Null selber.'."\n",
                      'Ontologisch betrachtet sind negative Zahlen also nicht die inklusive der Zählrichtung an der Null gespiegelten positiven Zahlen, inklusive der Null.'."\n".
                    'Sondern es handelt sich strukturell um eine Verschiebung, die die Zählrichtung beibehält und nicht spiegelt, wohingegen die Werte an der Null gespiegelt sind'."\n".
                    '\\color{*Bearb}{(eine Abbildung diesbezüglich einfügen, die zeigt, dass der Ausgangs- oder Ankerpunkt einer Zahl immer an ihrem Punkt auf der Geraden liegt und ihre \\italic{Zählentwicklung} die Lücke zur nachfolgenden Zahl abdeckt, was natürlich ebenso für die negativen Zahlen gilt)}.'."\n".
                    'Strukturell macht eine Doppelung der Null keinen Sinn.'."\n",
                      'Auf diese Weise ergibt sich innerhalb der endlichen, ganzen Zahlen eine fundamentale Asymmetrie,'."\n".
                    'die sich in der Summe über alle endlichen, ganzen Zahlen zeigt,'."\n".
                    'weil am negativen „Ende“ ein Ausgangs- oder Ankerpunkt „überhängt“, der einen sehr großen Wert trägt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall z \in \mathbb{Z}} z  =  \sum_{ \forall n \in \mathbb{N}} n - \sum_{ \forall n \in \mathbb{N}} *( n + 1 *)  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  \sum_{ \forall n \in \mathbb{N}} n - \sum_{ \forall n \in \mathbb{N}} n - \sum_{ \forall n \in \mathbb{N}} 1  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  - \sum_{ \forall n \in \mathbb{N}} 1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} z  =  - \omega  }',
                                          label_name => 'OM:SupNum:Biordinalzahlen:Vortext:Equ-Sum-z', label_text => '\\name{OM:SupNum:Biordinalzahlen:Vortext:Equ-Sum-z}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'In Worten ausgedrückt bedeutet dies:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Die Summe aller endlichen, ganzen Zahlen ist demnach der actual unendliche Wert \\term{–ω}'."\n".
                      'und nicht ein endlicher Wert oder gar \\term{0} (Null), wie wir im Allgemeinen eher annehmen.'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Der Mittelwert aller endlichen, ganzen Zahlen ergibt sich dann, wenn wir, wie üblich,'."\n".
                    'die Summe durch die Anzahl ihrer Summanden teilen, zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \frac{ \sum_{ \forall z \in \mathbb{Z}} z }{ 2 \cdot \omega }  =  \frac{ - \omega }{ 2 \cdot \omega }  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} \frac{ z }{ 2 \cdot \omega }  =  \frac{ - \omega }{ 2 \cdot \omega }  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  \sum_{ \forall z \in \mathbb{Z}} \frac{ z }{ 2 \cdot \omega }  =  - \frac{ 1 }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'In Worten ausgedrückt bedeutet dies:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Der Mittelwert aller endlichen, ganzen Zahlen ist demnach \\term{–½} und nicht \\term{0} (Null), wie wir im Allgemeinen eher annehmen.'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Das ist möglicherweise für den einen oder anderen eine überraschende Erkenntnis.'."\n".
                    'Ich finde sie hochspannend.'."\n".
                    ''))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Biordinalzahlen:Vortext:XXX',
                Title => 'Möglicher Bezug zur analytischen Fortsetzung der Riemannschen Zeta-Funktion …',
                TitleVis => 'Möglicher Bezug zur analytischen Fortsetzung der Riemannschen Zeta-Funktion:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Die oben erzielte Erkenntnis, dass der Mittelwert aller endlichen, ganzen Zahlen \\term{-½} und damit'."\n".
                    'ein endlicher, negativer Wert ist, erinnert stark an ein in gewisser Hinsicht erstaunliches Ergebnis'."\n".
                    'in Bezug auf die Riemannsche Zeta-Funktion\\footnote{Vgl. \\cite{wiki:RiemannscheZetaFunktion:2022}.}'."\n".
                    '\\latexmath{\zeta(s)} beim Funktionswert \\term{0}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \zeta(0)  =  - \frac{ 1 }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wo der \\color{*Bearb}{(mögliche)} Zusammenhang besteht, werden wir gleich noch weiter ausführen.'."\n",
                      'Ein in der Mathematik ganz berühmtes Ergebnis, dass unter anderem durch den indischen Mathematiker'."\n".
                    'Srinivasa Ramanujan\\color{*Bearb}{(Verweis)} gefunden wurde,\\footnote{Vgl. \\cite{wiki:RiemannscheZetaFunktion:2022}, Geschichte, Anfang des 20. Jahrhunderts, Ramanujans Arbeit zur Zeta-Funktion.}'."\n".
                    'liegt beim Funktionswert \\term{-1} der Zeta-Funktion:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \zeta(-1)  =  - \frac{ 1 }{ 12 }  }'),
                    ))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'XXX Versuch nach Definition der Zeta-Funktion durch die Dirichletsche Eta-Funktion', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Allerdings gilt die simple Definition der Zeta-Funktion nur für komplexe Funktionswerte, dessen Realteil größer als \\term{1} ist:'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall s \in \mathbb{C} *) *( s \neq 1 *) *[  \zeta(s)  :=  \frac{ \eta(s) }{ 1 - 2^{1 - s} }  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies gilt unter der Voraussetzung, dass wir eine Definition von \\latexmath{\eta(s)} über die ganze komplexe Zahlenebene \\term{\M(C)} finden.'."\n",
                      'Wir beginnen einmal mit der einfachsten Definition der Dirichletschen Eta-Funktion:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    'Hier erkennen wir schon eine gewisse Ähnlichkeit mit unserer Formel \\jumpname{OM:SupNum:Biordinalzahlen:Vortext:Equ-Sum-z},'."\n".
                    'auch, wenn diese Definition eigentlich nicht für die Funktionswerte \\term{0} und \\term{-1} gilt.'."\n",
                      'Addieren wir doch trotzdem mal die positiven und negativen Einsen und schauen, wann wir vielleicht \\term{½} erhalten.'."\n".
                    'Aus dem Mathologer Video wissen wir, dass die Summe über die Ramanujan Summation als eine Art Mittelwert definiert ist.'."\n".
                    'Benutzen wir die Formel von oben, dann ergibt sich:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \eta(-1)  :=  1 - 2 + 3 - 4 + 5 + \cdots  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(-1)  :=  \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! *( 2 \cdot n - 1 *) \; - \!\!\!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! 2 \cdot n  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(-1)  :=  \\\ \qquad\qquad \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! 2 \cdot n \; - \!\!\!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! 1 \; - \; 2 \cdot \!\!\!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! n  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(-1)  :=  \\\ \qquad\qquad 2 \cdot \!\!\!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! n \; - \; *( \omega - 1 *) \; - \; 2 \cdot \!\!\!\! \sum_{ \forall n \in \mathbb{N} \setminus *\{ 0 *\} } \!\!\!\! n  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \eta(-1)  :=  \\\ \qquad\qquad - \; *( \omega - 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für die Summe aller natürlicher Zahlen können wir die Gaußsche Summenformel\\color{*Bearb}{(Verweise: \\jump[https://de.wikipedia.org/wiki/Gaußsche_Summenformel]{}{Gaußsche Summenformel})} benutzen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'XXX Versuch nach Definition der Zeta-Funktion durch die Dirichlet-Reihe', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Nach der Definition der Zeta-Funktion durch die Dirichlet-Reihe könnten wir naiver Weise annehmen,'."\n".
                    'die Summe aller endlichen, natürlichen Zahlen hätte ein negatives Ergebnis:\\footnote{Vgl. \\cite{wiki:RiemannscheZetaFunktion:2022}, Definition und Darstellungsformen, Dirichlet-Reihe.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \sum_{ n = 1 }^{\infty} n  =  1 + 2 + 3 + 4 + \cdots  ?=  - \frac{ 1 }{ 12 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX Siehe \\jump[https://de.wikipedia.org/wiki/Gaußsche_Summenformel]{}{Gaußsche Summenformel}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \sum_{ ( \forall i \in \mathbb{N} )[i \leqslant n] } i  =  0 + 1 + 2 + 3 + \cdots + n  =  \frac{ n^{2} + n }{ 2 }  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \sum_{ \forall i \in \mathbb{N} } i  =  0 + 1 + 2 + 3 + \cdots  =  \frac{ \omega^{2} + \omega }{ 2 }  }'),
                    ))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
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
                    array( equ_text_std => 'SN.Biord.FA', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                      
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:SupNum:XXX'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
