<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Biordinalzahlen'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Primzahlprodukt-Vermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'vis', text => array(
                    // '\\bold{Ausgangspunkt}',
                    // '• Die Biordinalzahlen sind eine Darstellung aller ganzer Zahlen durch Mengen, also auch der negativen ganzen Zahlen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Ausgangspunkt der Biordinalzahlen sind die Ordinalzahlen\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}.}.'."\n".
                    'Bei den Ordinalzahlen handelt es sich um die Fortsetzung des Zählens oder der uns allgemein bekannten Anzahl von Dingen ins Aktual-Unendliche.'."\n".
                    'Diese Fortsetzung wird mit Hilfe der Mengenlehre, durch die Definition einer Entsprechung eines (An-)Zahlensymbols mit einer bestimmten Menge, die eben selber wieder diese Anzahlen an Mengen enthält, erreicht. '."\n",
                      'Die nachfolgend eingeführten Biordinalzahlen erweitern das Zählen in den negativen Bereich, auf die Anzahl, die Fehlt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Erwartete Erkenntnisgewinne', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Aus der Perspektive der Superial-Zahlen bringt dies auch ein besseres Verständnis der positiven aktualunendlichen Zahlen, wie zum Beispiel \\term{s-1}, mit sich.'."\n".
                    'Denn hier fehlt an \\term{s} etwas.'."\n",
                      'Auch zur Klärung der \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} kann die mengentheoretische Perspektive des Negativen'."\n".
                    'tiefere Einsichten beitragen, indem festgestellt wird, dass \\term{ω-1} zu einer riesigen Lücke zwischen den endlichen natürlichen Zahlen'."\n".
                    'und dem vermuteten Produkt aller endlicher Primzahlen \\term{ω} gehört.'."\n",
                      'Und nicht zuletzt können wir im Zusammenhang mit geometrischen Überlegungen etwas über die ontologische Struktur des Zählens lernen,'."\n".
                    'deren Erweiterung auf das Negative eine grundlegende Asymmetrie in den ganzen Zahlen erkennen lässt.'."\n".
                    'Meine Intuition sagt mir, dass diese Asymmetrie gemeinsam mit der Primzahlprodukt-Vermutung in der Lage sein könnte'."\n".
                    'entscheidendes zur Klärung der Riemannschen Vermutung\\color{*Bearb}{(Verweis)} beizutragen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Ordinalzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Ordinalzahlen sind über ihre Definition durch geordnete Mengen folgendermaßen definiert:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}, Die natürlichen Zahlen als geordnete Mengen.}'."\n"))),
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
                    'Im Folgenden soll gelten, dass die Null ein Element der natürlichen Zahlen ist, wie in den Peano-Axiomen\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:PeanoAxiome:2021}, Axiome, Ursprüngliche Formalisierung.} zur Definition von \\term{\M(N)} gefordert:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{N}  :=  \mathbb{N}_{0}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Übergang vom Endlichen ins Aktual-Unendliche geschieht durch die Feststellung, dass dann auch die Anzahl der Elemente der Menge der natürlichen Zahlen \\term{\M(N)} durch ein Symbol dargestellt werden kann, nämlich \\term{ω};'."\n".
                    'und nach Formel \\jumpname{OM:SupNum:Biordinalzahlen:Vortext:Equ-n-plus-Eins} so dann auch \\term{ω+1} und folgende:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on', latex => '{  \mathbb{N}  :=  ??? *\{  n ~\middle|~ \left( n \in \mathbb{N} \right) \left( \forall x \in \mathbb{N} \right) \left[  x < n  \right]  *\}  }'),
                      array( display => 'on', latex => '{  \omega  :=  \mathbb{N}  }'),
                      array( display => 'on', latex => '{  \omega + 1  :=  \mathbb{N} \cup *\{ \mathbb{N} *\}  =  *\{ 0, 1, 2, 3, …, \mathbb{N} *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Insgesamt sehen wir, dass jede definierte Zahl der Anzahl der Elemente in einer bestimmten Menge entspricht.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Grundsätzliche Idee zur Erweiterung der Ordinalzahlen ins Negative', subline =>
                  '… später dann mit dem Mengenuniversum verwirklicht')),
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
                      array( display => 'on', latex => '{  -1  :=  \mathbb{N} \setminus 1  =  \mathbb{N} \setminus *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  -2  :=  \mathbb{N} \setminus 2  =  \mathbb{N} \setminus *\{ 0, 1 *\}  =  \mathbb{N} \setminus *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  -n  :=  \mathbb{N} \setminus n  =  \mathbb{N} \setminus *\{ 0, 1, …, n - 1 *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auch hier wird konsequenterweise das Prinzip aufrecht erhalten, dass die Menge, die eine Zahl repräsentiert in Richtung des Negativen'."\n".
                    'in ihrer Anzahl sinkt.'."\n".
                    'An einer gegebenen Anzahl fehlen entsprechend viele Zahlen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:FundamentaleAsymmetrie', text =>
                      
                'Eine fundamentale Asymmetrie', subline =>
                  'Die ontologische Struktur beinhaltet die Zählrichtung')),
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
                    'Sondern es handelt sich um eine Verschiebung, die die Zählrichtung beibehält.'."\n".
                    'Und dazu macht eine Doppelung der Null keinen Sinn.'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Der Mittelwert aller endlichen ganzen Zahlen ist demnach \\term{–0,5}.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Das ist möglicherweise für den einen oder anderen eine überraschende Erkenntnis.'."\n".
                    'Ich finde sie hochspannend.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Biordinalzahlen als Erweiterung der Ordinalzahlen ins Negative', subline =>
                  'Ansatz')),
                  array( 'text', array( text => array(
                    'Auch, wenn sich auf die oben geschilderte Weise endliche negative Zahlen sinnvoll darstellen lassen, können wir auf diese Weise nicht alle negativen Ordinalzahlen darstellen.'."\n".
                    'Die Darstellung von \\term{–ω} entspräche so zum Beispiel der leeren Menge, die aber schon der Null entspricht.'."\n".
                    'Noch größere unendliche negative Ordinalzahlen lassen sich auf diese Weise generell nicht darstellen, denn an der Menge'."\n".
                    'der natürlichen Zahlen \\term{\M(N)} können nicht mehr Zahlen fehlen, als drinne sind.'."\n",
                      'Die Lösung dieses Problems fand ich darin, anstatt Zahlen an der Menge der natürlichen Zahlen fehlen zu lassen dafür das Mengenuniversum\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Allklasse:2020}.} zu nutzen. '."\n".
                    'Das Mengenuniversum \\term{\M(U)} ist die kleinste Klasse von Mengen, die alle Mengen enthält, die definierbar sind.'."\n".
                    'Am Mengenuniversum können wir quasi beliebig viele Zahlen fehlen lassen, wenn wir diese alle durch Mengen darstellen.'."\n".
                    'Wir ersetzen also die Menge der natürlichen Zahlen \\term{\M(N)} durch das Mengenuniversum \\term{\M(U)}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  2  :=  *\{ 0, 1 *\}  =  *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  1  :=  *\{ 0 *\}  =  *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  0  :=  *\{ *\}  }'),
                      array( display => 'on', latex => '{  -1  :=  \mathbb{U} \setminus 1  =  \mathbb{U} \setminus *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  -2  :=  \mathbb{U} \setminus 2  =  \mathbb{U} \setminus *\{ 0, 1 *\}  =  \mathbb{U} \setminus *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  -n  :=  \mathbb{U} \setminus n  =  \mathbb{U} \setminus *\{ 0, 1, …, n - 1 *\}  }'),
                      array( display => 'on', latex => '{  -\omega  :=  \mathbb{U} \setminus \omega  =  \mathbb{U} \setminus \mathbb{N} \\\ \qquad\qquad\qquad\;  =  \mathbb{U} \setminus *\{ 0, 1, 2, 3, … *\}  }'),
                      array( display => 'on', latex => '{  - *(\omega + 1 *)  :=  \mathbb{U} \setminus \omega + 1  =  \mathbb{U} \setminus \mathbb{N} \cup *\{ \mathbb{N} *\} \\\ \qquad\qquad\qquad\qquad\qquad  =  \mathbb{U} \setminus *\{ 0, 1, 2, 3, …, \mathbb{N} *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auch in diesem Fall wird konsequenterweise das Prinzip aufrecht erhalten, dass die Klasse – das Mengenuniversum ist auch ein Container, aber definitionsgemäß keine Menge –, die eine Zahl repräsentiert zum Negativen hin'."\n".
                    'in ihrer Anzahl sinkt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Biordinalzahlen als Erweiterung der Limeszahlen um ihre Vorgänger', subline =>
                  'Ansatz')),
                  array( 'text', array( text => array(
                    'Ich möchte erreichen, dass wir innerhalb der Biordinalzahlen generell von jeder Zahl aus nicht nur in die positive Richtung,'."\n".
                    'sondern auch in die negative Richtung zählen können.'."\n".
                    'Die sogenannten Limeszahlen\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}, Motivation und Definition, Limes- und Nachfolgerzahlen.},'."\n".
                    'wie \\term{ω} oder \\term{ω^{2}}, haben in unserer Konstruktion immer noch keine Vorgänger.'."\n",
                      'Die Vorgänger der Limeszahlen lassen sich nun entsprechend der absolut negativen Zahlen definieren:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega - 1  :=  \mathbb{N} \setminus 1  =  \mathbb{N} \setminus *\{ *\{ *\} *\}  }'),
                      array( display => 'on', latex => '{  \omega - 2  :=  \mathbb{N} \setminus 2  =  \mathbb{N} \setminus *\{ 0, 1 *\} \\\ \qquad\qquad\qquad\quad  =  \mathbb{N} \setminus *\{ *\{ *\}, *\{ *\{ *\} *\} *\}  }'),
                      array( display => 'on', latex => '{  \omega - n  :=  \mathbb{N} \setminus n  =  \mathbb{N} \setminus *\{ 0, 1, …, n - 1 *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Definition, basierend auf \\term{\M(N)}, wurde eingangs für die Definition der absolut negativen Zahlen in Erwägung gezogen, dafür jedoch wieder verworfen, und bekommt hiermit ihre passende Rolle.'."\n",
                      'Aber wie steht es mit der Eindeutigkeit, der Praktikabilität und der generellen Plausibilität in komplexeren Fällen?'."\n".
                    'An folgendem Beispiel können wir einmal sehen, warum es geht:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - \omega - n  =  \omega^2 - *( \omega + n *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese beiden Darstellungen sind aus Sicht der an \\term{ω^{2}} fehlenden Mengen im ersten Moment nicht identisch.'."\n".
                    'Dabei müssen wir uns zuerst klar machen, dass an \\term{ω^{2}} auch nur fehlen kann, was drinne ist.'."\n".
                    'Und es taucht die Frage auf, ob es nicht generell möglich ist, immer die folgende Definition zu benutzen,'."\n".
                    'wenn \\term{λ} die größte Limeszahl in der Summe ist und \\term{β} die restlichen Summanden zusammenfasst:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \lambda - \beta  :=  \lambda \setminus \beta  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dann wäre das Beispiel so definiert:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - *( \omega + n *)  :=  \omega^2 \setminus *( \omega + n *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und das erscheint schlüssig, weil alle Zahlen, die aus \\term{ω^{2}} entfernt werden auch darin enthalten sind.'."\n",
                      'Doch was wäre, wenn sich Vorzeichen der hinteren Summanden ändern:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - \omega + n  =  \omega^2 - *( \omega - n *)  }'),
                      array( display => 'on', latex => '{  \omega^2 - *( \omega - n *)  :=  \omega^2 \setminus *( \omega - n *)  }'),
                      array( display => 'on', latex => '{  \omega - n  :=  \omega \setminus n  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \omega^2 - *( \omega - n *)  :=  \omega^2 \setminus *( \omega \setminus n *) \\\ \qquad\qquad\qquad\quad\;\;  =  \omega^2 \setminus *( \omega \setminus *\{ 0, 1, …, n - 1 *\} *) \\\ \qquad\qquad\qquad\quad\;\;  =  \omega^2 \setminus *\{ n, n + 1, n + 2, n + 3, … *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das scheint in sich stimmig zu sein, weil möglich, denn die weggelassenen Mengen existieren, als auch eindeutig,'."\n".
                    'denn es gibt keine andere Möglichkeit, die selbe Darstellung des Wertes durch eine solche Konstruktion zu erreichen.'."\n",
                      'Und diese Darstellung erfüllt auch die wichtige Eigenschaft, dass die durch Mengen dargestellte Zahl auch so viele Mengen enthält,'."\n".
                    'wie ihr Wert groß ist.'."\n".
                    'Am vorstehenden Beispiel veranschaulicht bedeutet dies:'."\n".
                    'Beim Wert \\term{ω^{2} –  ω + n} haben wir als Basis die Menge \\term{ω^{2}} aus der wir die Mengen in \\term{ω} herausnehmen,'."\n".
                    'die Mengen in \\term{n} jedoch drinne lassen beziehungsweise wieder hinzufügen:'."\n"))),
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
                    'Alle tieferen Ebenen bleiben unberührt.'."\n"))),
                      
                  array( 'fade-in-area', array( Display => 'vis', jumpName => 'OM:SpaLeb:Psychosomatik:Vortext:MehrGeschDetails',
                Title => 'Verworfene Möglichkeit …',
                TitleVis => 'Verworfene Möglichkeit:', ParagraphList => array(
                  array( 'notice', array( Display => 'vis', text => array(
                     '\\bold{Überprüfen}',
                     '• Warum sollte die Addition von \\term{n} in \\term{(ω^{2} – ω) + n} anders laufen als oben?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die andere Möglichkeit ist, wir klammern von vorne:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^2 - \omega + n  =  *( \omega^2 - \omega *) + n  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \omega^2 - \omega + n  :=  *( \omega^2 \setminus \omega *) + n  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dann würden wir von \\term{ω^{2} – ω} um \\term{n} Schritte neu loszählen und erhielten so bisher nicht da gewesene Mengen, die diese Zahlen darstellten.'."\n".
                    'Das finde ich viel weniger intuitiv, weil sich die Strukturen der Mengen dann nicht nur in der obersten Verschachtelungsebene der größten Limeszahl ändern,'."\n".
                    'sondern auch in tieferen Ebenen.'."\n",
                      'Noch komplexer wird es dann im folgenden Beispiel:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega^3 - *( \omega^2 - *( \omega - n *) *)  =  *( *( \omega^3 - \omega^2 *) + \omega *) - n  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So ergibt sich in dieser Möglichkeit ein heilloses Durcheinander.'."\n",
                      'Deshalb ist für mich diese Möglichkeit zu verwerfen, wenn wir oben eine wunderbar einfache Möglichkeit gefunden haben,'."\n".
                    'dasselbe sehr übersichtlich und plausibel zu leisten.'."\n"))),
                    ))),
                      
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:NeueEinsichten', text =>
                      
                'Neue Einsichten zu positiven aktual unendlichen Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wir können nun zu Aussagen kommen, die etwas über die Größe von \\term{ω} verraten.'."\n".
                    'Ziehen wir eine beliebige endliche natürliche Zahl \\term{n} von \\term{ω} ab, ergibt sich niemals eine Zahl, die zur Menge'."\n".
                    'der natürlichen Zahlen gehört:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Biord', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  *( \forall n \in \mathbb{N} *)  *[  \omega - n  \notin  \mathbb{N}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\\term{ω – n} ist nicht in den natürlichen Zahlen \\term{\M(N)}, weil eine unendlich große Zahl \\term{ω} minus einer endlichen Zahl \\term{n} eine unendlich große Zahl bleibt.'."\n".
                    'Und eine unendlich große Zahl ist kein Element von \\term{\M(N)}.'."\n",
                      'Es zeigt sich also eine riesige mit unendlich großen natürlichen Zahlen gefüllte Lücke zwischen den endlichen natürlichen Zahlen und \\term{ω}.'."\n".
                    'Diese Lücke ist ein Grund dafür, dass die \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} wahr sein könnte.'."\n"))),
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
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:SupNum:XXX'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • XXX  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:SupNum:Biordinalzahlen:XXX',
              '\\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:SupNum:XXX', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'vis', text => array(
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
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:SupNum:XXX'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
