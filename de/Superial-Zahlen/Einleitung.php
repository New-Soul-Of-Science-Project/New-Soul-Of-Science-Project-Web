<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Einleitung'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Der Ansatz mit aktual unendlichen Zahlen ist nicht neu}',
                    '• Sondern er ist historisch offenbar sogar älter, als der mit dem Limes-Grenzwert, siehe \url{https://de.wikipedia.org/w/index.php?title=Hyperreelle_Zahl&oldid=237554998} und \url{https://de.wikipedia.org/wiki/Differentialrechnung#Geschichte}.',
                    '• Dieser Ansatz machte Probleme, weil er in sich logisch inkonsistent und nicht klar definiert war.',
                    '– Dies wurde erst durch die hyperreellen Zahlen geändert, die sich über Reihenentwicklung dem unendlich Großen und Kleinen nähern.',
                    '• Die Superial-Zahlen gehen einen anderen Weg, als die hyperreellen Zahlen, und zwar über ein unendlich großes Primzahlprodukt. Dabei lösen sie das Logikproblem zunächst einmal „nur“ für die Radikale der algebraischen Zahlen, das sind rationale Zahlen und irrationale Wurzelausdrücke, die mit den Grundrechenarten verbunden sind. Durch den erheblichen Erkenntnisgewinn, auch in Bezug auf Primzahlen, ist allein dies schon hoch interessant. Und es eröffnet einen Horizont über weitere Erkenntnisse auch diesbezüglich zu den restlichen irrationalen Zahlen, die keine algebraischen Radikale sind, vorzustoßen und die Natur von transzendenten Zahlen zu erkunden.',
                    '\bold{Analyse}',
                    '• Das heißt, dass die Ordinalzahlen kein Ring sind, weil es nicht zu jedem Element ein additives Inverses gibt. Und kein Körper, weil es kein multiplikatives Inverses gibt.',
                    '• Die Biordinalzahlen wären dann aber ein Ring, aber immer noch kein Körper.',
                    '• Die Superial-Zahlen sind, weil mit rationalen und den Radikalen algebraischen Koeffizienten gebildet, ein Körper. Denn es gibt beide inverse Elemente.',
                    '• Dies ist so schon äußerst bemerkenswert. Und sollte sich herausstellen, dass auch die algebraischen Zahlen, die keine Radikale sind, zu ihren Koeffizienten gehören, dann wären die Superial-Zahlen ein vollständiger algebraischer Körper!',
                    '\bold{Aktuelle Forschung}',
                    '• Der Fields-Medaillenträger 2018, Peter Scholze, bringt neue Zusammenhänge zwischen der Arithmetik und der Geometrie ins Spiel.',
                    '\bold{\italic{Diskretisierung der Topologie durch verdichtete Mengen}}',
                    '• Neubau der Mathematik: Das Fach neu aufrollen: Nichts Geringeres haben sich Peter Scholze und Dustin Clausen vorgenommen. Mit einem revo­lutionären neuen Ansatz begeistern sie die Fachwelt.\footnote{\cite{Bischoff:NeubauDerMathematik:2023}}',
                    '– Dies unterstützt in meinen Augen auch die Erkenntnis, dass die Geometrie eigentlich fraktal ist, siehe oben.',
                    '\bold{Zeit in der Mathematik}',
                    '• Einflechten, dass die Arithmetik aus dem Zählen geboren wird. Dies ist eine Definition durch einen Prozess. Hierdurch kommt Zeit ins Spiel. Die Betrachtung der Primfaktorzerlegung der natürlichen Zahlen zeigt auf, dass an diesem Prozess Regelsystemen ähnliche rhythmische Strukturen beteiligt sind.',
                    '\bold{Forschungsideen}',
                    '• Das Pascal-Sierpinski-Dreieck ist eine Geometrie, in der Primzahlen eine außergewöhnliche Rolle spielen.\footnote{Vgl. \cite{Plichta:GottesGeheimeFormel:1995}, S. 263ff., 271ff. 306ff.. \\\\ Internet: \\\\ Vgl. \jump[https://de.wikipedia.org/w/index.php?title=Sierpinski-Dreieck&oldid=179105092#Zusammenhang_mit_dem_Pascalschen_Dreieck]{}{Wikipedia, Sierpinski-Dreieck, Zusammenhang mit dem Pascalschen Dreieck}.}',
                    '\bold{Korrekturen}',
                    '• (gerade weitreichend auf dem Weg) Der Text ist schwer verständlich und manchmal etwas komisch formuliert. Alles noch einmal überarbeiten !!!',
                    '• Die Kapitel der Seiten erneut durcharbeiten.',
                    '\bold{Einpflegen}',
                    '• Dem sehr kleinen, infinitesimalen Epsilon eine Struktur aus Primzahlen geben.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wie wir sehen werden erhalten wir mit den hier entwickelten Superial-Zahlen etwas ganz besonderes:'."\n".
                    'Formal gesprochen sind sie eine abelsche Gruppe\footnote{\const{NSOSP_g_footnote_text_AbelscheGruppe}} und'."\n".
                    'bezüglich der Addition und Multiplikation ein aktual unendlicher angeordneter algebraischer Körper\footnote{\const{NSOSP_g_footnote_text_KoerperAlgebra}}\footnote{\const{SupNum_g_footnote_text_AlgebraischerZahlkoerper}}.'."\n".
                    'Mit ihnen erweitern wir die rationalen Zahlen\footnote{\const{SupNum_g_footnote_text_RationaleZahl}}'."\n".
                    'und durch den Beweis der \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung},'."\n".
                    'sowie durch auf ihm aufbauende Beweise,'."\n".
                    'sogar die Menge der Radikale der algebraischen Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}},'."\n".
                    'inklusive aller Ausdrücke der irrationalen Wurzeln, die durch die Grundrechenarten entstehen, auf fraktale Weise ins Aktual-Unendliche.'."\n".
                    'So geben wir der aktualen Unendlichkeit eine facettenreiche und der \jump{OM:SupNum:Struktur-Geometrie}{Geometrie eine fundamentale arithmetische und fraktale Struktur}.'."\n",
                      'Mit den Superial-Zahlen kommen wir in die Lage aktual unendlich kleine Differenzen zu bilden,'."\n".
                    'mit denen wir, bis ins aktual unendlich kleine, präzise Ableitungen beschreiben und berechnen können, ohne den Limes zu benutzen.'."\n",
                      'Auch können wir Integrale mit wohldefinierten aktual unendlich kleinen Zählschritten beschreiben,'."\n".
                    'deren Anzahl dann aktual unendlich groß sind und sich so wieder zu endliche Zahlen aufsummieren.'."\n",
                      'Nutzen wir auch die Theorie der \jump{OM:BiOrd:Home}{Biordinalzahlen} so können wir Summen ausrechnen,'."\n".
                    'die nach meinem Wissen bisher nicht durch aktual unendliche Zahlen ausgedrückt werden konnten:'."\n".
                    'Die Summe aller endlichen ganzen Zahlen oder die Summe der Realanteile aller algebraischen Zahlen beispielsweise.'."\n",
                      'Über die Struktur, die dabei sichtbar wird, eröffnet sich in meinen Augen ein ganz neuer Kosmos der Zahlentheorie.'."\n".
                    'Denn wir können die endlichen Primzahlen mit unserer dadurch entdeckten, neuen aktual unendlichen Basis \lm{ \s }'."\n".
                    'in Zusammenhang bringen, indem wir diese durch Primzahlen definieren, wie wir noch sehen werden.'."\n",
                      'Wir erhalten zum Beispiel auch natürliche Superial-Zahlen, ganze Superial-Zahlen und superiale Primzahlen;'."\n".
                    'aktual unendlich kleine Einsen und aktual unendlich große Einsen.'."\n".
                    'Auch können die ganzen Superial-Zahlen gerade oder ungerade sein und so weiter und so fort.'."\n".
                    'Erstaunlich viele der uns bekannten wichtigen Eigenschaften der endlichen Zahlen erweitern sich ins aktual unendlich'."\n".
                    'Kleine und Große.'."\n",
                      'Und nicht zuletzt sind die Superial-Zahlen ein'."\n".
                    '\jump{OM:SupNum:Formale-Entwicklung:Formalien:Stellenwertsystem}{Stellenwertsystem}\footnote{\const{SupNum_g_footnote_text_Stellenwertsystem}}'."\n".
                    'zur Basis \lm{ \s },'."\n".
                    'wo die Ziffern alle positiven wie auch negativen Realanteile der algebraischen Zahlen sein können.'."\n",
                      'Wir erschaffen so eine Zahlentheorie der Analysis, die auf Primzahlen basiert, die im unendlich großen Produkt'."\n".
                    'aller endlichen Primzahlen zur \lm{ ω }-ten Potenz ihre Grundlage findet, der \italic{superialen Basis} \lm{ \s }.'."\n".
                    'Dabei finden wir heraus, dass \lm{ ω } selbst – die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}} –'."\n".
                    'ein Primzahlprodukt ist.'."\n",
                      'Die superiale Basis \lm{ \s } ist nicht einfach irgendeine aktual unendliche Zahl.'."\n".
                    'Sie ist so auf die einfachste Weise symmetrisch strukturiert, dass sie genau zu den Eigenschaften der rationalen und algebraischen Zahlen passt,'."\n".
                    'sodass diese als ihre Koeffizienten, mit ihr im Produkt, immer aktual unendlich große ganze Zahlen ergeben.'."\n".
                    'Daher spielt die superiale Basis \lm{ \s } eine zwar andere, aber vergleichbare Rolle für das Aktual-Unendliche, wie die imaginäre Einheit \lm{ \i }'."\n".
                    'für die komplexen Zahlen.'."\n".
                    'Ich habe mir Ableitungen und Integrale genau angeguckt und versucht zu verstehen, welche Eigenschaften \lm{ \s } hat.'."\n".
                    'Darüber hab ich letztendlich die Definition von \lm{ \s } als aktual unendliches Primzahlprodukt in Kombination mit vollständiger Induktion gefunden.'."\n",
                      'Wie sagen wir im Englischen so schön:'."\n".
                    '\quote{Lets go for it!}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Motivation', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'In der Schule fand ich Ableitungen und Integrale immer sehr faszinierend.'."\n".
                    'Es war für mich erstaunlich, wie man über die Unendlichkeit ganz neue Erkenntnisse und Formeln gewinnen konnte.'."\n".
                    'Daraus hat sich damals ein tiefes Bedürfnis entwickelt zu verstehen, was dabei genau vor sich geht.'."\n".
                    'Ich spielte viel mit dem Ansatz der Ableitung herum, was schließlich dazu führte, dass ich begriff, dass der dort verwendete Limes nicht nur dazu führt,'."\n".
                    'dass ein bestimmtes Glied der sich ergebenen Summe dominant in den Vordergrund tritt und das Ergebnis bestimmt.'."\n".
                    'Mir wurde auch klar, dass all die anderen Summanden, die unendlich klein und damit scheinbar unbedeutend wurden, eine Welt darstellten, die so quasi im Nirvana versank.'."\n",
                      'Genau diese „versunkene“ Welt weckte mein Interesse.'."\n".
                    'Irgendwie war ja auch klar, dass beim Integrieren die versunkene Welt schließlich wieder auftauchen musste.'."\n".
                    'Wie könnte sie da unwiederbringlich „vernichtet“ worden sein?'."\n".
                    'Durch das Herumspielen begriff ich:'."\n".
                    'Wir können auch ins Unendliche gehen, ohne den Limes zu benutzen!'."\n".
                    'Ohne, dass man die versinkenden Summanden wirklich zu Null werden lässt, indem man sie als Null definiert.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Formale Einschränkung', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um nachfolgend genau zu arbeiten, möchte ich an dieser Stelle vorab deutlich machen,'."\n".
                    'dass im folgenden die Funktionsparameter – meistens \lm{ x } –'."\n".
                    'die \jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen}'."\n".
                    'der Menge \lm{ \mathbb{A}_{\S} } sind.'."\n".
                    'Nach jetzigem Stand sind dies mindestens alle realen Koeffizienten der algebraischen Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}},'."\n".
                    'die durch Radikale\footnote{\const{SupNum_g_footnote_text_DurchRadikaleDarAlgZ}} darstellbar sind.'."\n".
                    'Dass genau alle reell algebraischen Zahlen in der Menge \lm{ \mathbb{A}_{\S} } sind \jump{OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen}{vermuten wir},'."\n".
                    'ist jedoch noch zu beweisen.'."\n",
                      '\jump{OM:SupNum:Eigenschaften:Koeffizienten-der-Superial-Zahlen:superiale-Koeffizienten-Realanteile-algebraischer-Zahlen}{Transzendente Zahlen} scheinen hingegen als Koeffizienten nicht sinnvoll.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:Ableitung-genau-verstehen', text =>
                                           
                'Ableitung genau verstehen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Das Nicht-Verschwinden aller Summanden funktioniert dann, wenn wir die beim \jump{OM:SupNum:Ableitungen-Integrale:Ableitung}{Ableiten}'."\n".
                    'gegen Null gehenden Summanden selber als unendlich klein, aber nicht als verschwindend betrachten.'."\n".
                    'Wir setzten den gegen Null gehenden Summanden zu \lm{ \Delta x := \s^{-1} }, zum Kehrwert der \italic{superialen Basis} \lm{ \s },'."\n".
                    'die wir im Verlauf genauer ergründen werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  =  \lim\limits_{\Delta x \rightarrow +0}{ \frac{ f(x + \Delta x) - f(x) }{ \Delta x } }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-mit-Limes}', label_incr => false),
                      array( display => 'on',  latex => '{  \lim\limits_{\Delta x \rightarrow +0}{ \Delta x }  \widehat{=}  \s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-Limes-ist-s-hoch-minus-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  f\'(x)  :=  \frac{ f(x + \s^{-1}) - f(x) }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Def-Ableitung-mit-s-hoch-minus-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dies vertiefen wir auf der Seite \italic{\jumpname{OM:SupNum:Ableitungen-Integrale}}.'."\n",
                      'Dabei ist \lm{ \s^{-1} } ein neues Symbol, über das ich zunächst nur annahm, dass es kleiner als jede positive Zahl war und doch größer als Null.'."\n".
                    'Ähnlich wie bei den komplexen Zahlen die imaginäre Einheit \lm{ \i } war auch \lm{ \s^{-1} } eine neue Einheit, die ich als \italic{superial kleine Einheit} bezeichne.'."\n".
                    'In der Mathematik ist es kein Problem ein neues Symbol zu kreieren und zu definieren, solange sich dadurch keine Widersprüche ergeben.\footnote{Sekundärliteratur \\\\ Vgl. \cite{Freistetter:DieFreiheitDerImaginaerenZahlen:2016}. \\\\ Internet: \\\\ Vgl. \cite{Freistetter:DieFreiheitDerMathematik:2016}.}'."\n",
                      'Die superial kleine Einheit \lm{ \s^{-1} } führte dazu, dass die sonst bei der Ableitung verschwindenden Summanden \lm{ a_{k} } nicht verloren gehen, sondern in unendlich kleinen'."\n".
                    'Dimensionen \lm{ a_{-1} \s^{-1} + a_{-2} \s^{-2} + a_{-3} \s^{-3} + \cdots } erhalten blieben, also in einer \italic{superial} kleinen Welt.'."\n".
                    'Von hier können sie auch beim Integrieren wieder auftauchen.'."\n".
                    'Die Dimension \lm{ a_{0} \s^{0} = a_{0} } stellt dann die uns bekannten, endlichen Zahlen dar, weil \lm{ \s^{0} = 1 } ist, wie gewohnt.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Konkrete Ableitungen} \\\\'."\n".
                    'Nun zwei Beispiele, um anschaulich zu verstehen, was vor sich geht:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'So ergibt sich als Beispiel für die Funktion \lm{ f(x) = x^{2} }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  \frac{ *( x + \s^{-1} *)^{2} - x^{2} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-basis}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ *( x^{2} + 2 x \cdot \s^{-1} + \s^{-2} *) - x^{2} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-ausmultipliziert}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ 2 x \cdot \s^{-1} + \s^{-2} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-subtrahiert}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  2 x + \s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x2-Ergebnis}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wenn wir also \lm{ \s^{-1} } zu Null setzen, dann kommt das übliche Ergebnis \lm{ f\'(x) = 2 x } heraus.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Für \lm{ f(x) = x^{3} } ergibt sich dann:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  \frac{ *( x + \s^{-1} *)^{3} - x^{3} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-basis}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ *( x^{3} + 3 x^{2} \cdot \s^{-1} + 3 x \cdot \s^{-2} + s^{-3} *) - x^{3} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-ausmultipliziert}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ 3 x^{2} \cdot \s^{-1} + 3 x \cdot \s^{-2} + \s^{-3} }{ \s^{-1} }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-subtrahiert}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  3 x^{2} + 3 x \cdot \s^{-1} + \s^{-2}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Ableitung:Equ-Ableitung-x3-Ergebnis}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wenn wir also \lm{ \s^{-1} } zu Null setzen, dann kommt das übliche Ergebnis \lm{ f\'(x) = 3 x^{2} } heraus.'."\n",
                        '\\\\ '."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'So können wir sehr genau verfolgen, was vor sich geht, und nichts verschwindet.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:Integral-genau-verstehen', text =>
                                           
                'Integration genau verstehen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Beim \jump{OM:SupNum:Ableitungen-Integrale:Integration}{Integral} müssen wir nun den Prozess des Differenzierens wieder Rückgängig machen und'."\n".
                    'lernen viel Interessantes dabei, wenn wir herausfinden, wie das geht.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Ganze Superial-Zahlen} \\\\'."\n".
                    'Interessanter wird es noch, wenn wir uns nun mit der Umkehrung der Ableitung aus der neuen Perspektive beschäftigen,'."\n".
                    'mit der Integration:'."\n",
                      'Beim Flächenintegral, von dem wir hier sprechen, handelt es sich um eine Summe'."\n".
                    'aus unendlich schmalen und endlich hohen Flächen.'."\n".
                    'In ihm werden all die unendlich kleinen Differenzen aufsummiert, aus der sich die Ableitung ergibt'."\n".
                    'und die gemeinsam zurück zum Verlauf der Ausgangsfunktion führen.'."\n",
                      'Wie groß die Schritte der Summation sind, erkennen wir an der Ableitung.'."\n".
                    'Die aufsummierten Flächen gleichen den Ergebnis-Differenzen der Ableitung \lm{ f\'(x) } in unendlich kleinen Einheiten und'."\n".
                    'haben damit deren Höhe.'."\n".
                    'Ihre Streifenbreite ist \lm{ \Delta x = \s^{-1} }, wie die Funktionsparameter-Differenz der Ableitung.'."\n".
                    'Dabei ist \lm{ \s^{-1} } eine unendlich kleine Einheit.'."\n".
                    'Eine \italic{aktual unendlich kleine Eins} \lm{ 1 \s^{-1} }.'."\n",
                      'Auf der anderen Seite müssen wir eine unendlich große und ganze Anzahl der Streifen summieren.'."\n".
                    'Es müssen genau \lm{ \s } Streifen sein, damit sich die \lm{ \s^{-1} } breiten Streifen zu einer endlich großen'."\n".
                    'Zahl aufsummieren und wir das Integral erhalten.'."\n".
                    'Damit ist klar, dass \lm{ \s } eine unendlich große, ganze und positive Zahl ist, eine \italic{aktual unendlich große Eins} \lm{ 1 \s }.'."\n".
                    'Es muss also formal möglich sein, alle positiven ganzen Zahlen von den endlichen bis \lm{ \s } zu zählen,'."\n".
                    'um die Summe für das Integral zu beschreiben:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei \lm{ \mathbb{S}_{\Z} } die Menge der \italic{ganzen Superial-Zahlen}, eine Teilmenge der \italic{Superial-Zahlen} \lm{ \mathbb{S} }.'."\n".
                      'Seien \lm{ \lbrack a, b \lbrack_\mathbb{\mathbb{S}_{\Z}} } die ganzen Superial-Zahlen'."\n".
                      'in der \jump{OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge}{Intervall-Menge} von \lm{ a } bis \lm{ b }, ohne \lm{ b }, aus \lm{ \mathbb{S}_{\Z} }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x \cdot \s[_{\mathbb{S}_{\Z}}  \subset  \mathbb{S}_{\Z}  }'),
                    ))),

                  array( 'text', array( text => array(
                    'Die ganzen Superial-Zahlen können grundsätzlich Summanden aller natürlichen Potenzen von \lm{ \s }, also Null und größer, enthalten;'."\n".
                    'in der nullten Potenz, im endlichen Summanden, eben nur endliche ganze Zahlen;'."\n".
                    'in den höheren Potenzen dann alle Realanteile algebraischer Zahlen als Koeffizienten, also auch irrationale Zahlen, wie Wurzeln.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Prinzipiell haben ganze Superial-Zahlen mit der maximalen Potenz Eins – \lm{ \s^{1} = \s } –,'."\n".
                      'die wir in unseren Beispielen zum Integrieren als Grundlage benötigen, also die Form:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{\S} *) *( \forall z \in \mathbb{Z} *)  *[  a \cdot \s + z  \in  \mathbb{S}_{\Z}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Für die genaue Menge können wir, angelehnt an die später gefundene Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s},'."\n".
                      'folgende Beschreibung geben – wie immer mit \lm{ x \in \mathbb{A}_{\S} }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  [ 0, \s [_{\mathbb{S}_{\Z}}  =  \\\ \quad *\{  r  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  r  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < 1  \\\\  \s + z^{-}  &  \text{ falls } a = 1  \end{cases}  *]  *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Menge-natuerliche-Vorgaenger-s}', label_incr => false),
                      array( display => 'on',  latex => '{  [ 0, x \cdot \s [_{\mathbb{S}_{\Z}}  =  \\\ \quad *\{  r  *|*  *( \forall a \in [ 0, 1 ]_{\mathbb{A}_{\S}} *) *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) *( \forall z^{-} \in \mathbb{Z}^{-} *)  \\\ \qquad\qquad\quad *[  r  =  \begin{cases} n  &  \text{ falls } a = 0  \\\\  a \cdot \s + z  &  \text{ falls } 0 < a < x  \\\\  x \cdot \s + z^{-}  &  \text{ falls } a = x  \end{cases}  *]  *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Menge-natuerliche-Vorgaenger-xs}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Es handelt sich also konkret um folgende ganze Superial-Zahlen, die auszugsweise so aussehen, wobei Beginn und Ende exakt stimmen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x \cdot \s [_{\mathbb{S}_{\Z}}  =  \\\  \quad *\{  \quad\,  0, 1, 2, \cdots n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{1}{2} x \s + z^{-}, \cdots \frac{1}{2} x \s - 1,\; \frac{1}{2} x \s,\; \frac{1}{2} x \s + 1, \cdots \frac{1}{2} x \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{2}{3} x \s + z^{-}, \cdots \frac{2}{3} x \s - 1,\; \frac{2}{3} x \s,\; \frac{2}{3} x \s + 1, \cdots \frac{2}{3} x \s + n, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, x \s + z^{-}, \cdots x \s - 2, x \s - 1   \quad *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Menge-natuerliche-Vorgaenger-xs-Elemente}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Jetzt haben wir zwar die richtige Anzahl an Schritten, aber sie sind nicht fein genug,'."\n".
                      'sollen sie doch eigentlich von Null bis \lm{ x } in \lm{ \s^{-1} } kleinen Schritten laufen.'."\n".
                      'So müssen wir die Zahlen dieses Intervals der ganzen Superial-Zahlen also mit \lm{ \s^{-1} } multiplizieren'."\n".
                      'und auf diese Weise auf eine \jump{OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen}{superial kleine Größenordnung skalieren}.'."\n",
                        'Alternativ können wir auch eine Menge definieren, in der alle Zahlen schon mit \lm{ \s^{-1} } multipliziert sind,'."\n".
                      'wie in \italic{›\jumpname{OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen}‹} definiert:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}^{y}_{\Z}  :=  *\{  a  *|*  *( \forall z \in \mathbb{S}_{\Z} *) *[ a = z \cdot \s^{y} *]  *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen:Equ-Menge-superiale-Ebene-skalieren}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \mathbb{S}^{-1}_{\Z}  =  *\{  a  *|*  *( \forall z \in \mathbb{S}_{\Z} *) *[ a = z \cdot \s^{-1} *]  *\}  }',
                                          label_name => 'OM:SupNum:Einleitung:Vortext:Equ-Menge-superial-kleine-ganze-Zahlen', label_text => '\name{OM:SupNum:Einleitung:Vortext:Equ-Menge-superial-kleine-ganze-Zahlen}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Im benötigten Mengen-Intervall laufen die Zahlen in \lm{ x \cdot \s } unendlich kleinen Schritten'."\n".
                      'der Größe \lm{ \s^{-1} } durch.'."\n".
                      'Auszugweise sieht diese Intervall-Menge von unendlich feinschrittigen superial kleinen ganzen Superial-Zahlen folgendermaßen aus,'."\n".
                      'wobei Beginn und Ende exakt stimmen und sich ihre Größensortierung nach der lexikografischen Ordnung\footnote{\const{SupNum_g_footnote_text_LexikographischeOrdnung}},'."\n".
                      'unter Berücksichtigung der Potenz von \lm{ \s }, richtet:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [0, x[_{\mathbb{S}^{-1}_{\Z}}  =  \\\  \quad *\{  \quad\,  0 \s^{-1}, 1 \s^{-1}, 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{1}{2} x - 2 \s^{-1},\; \frac{1}{2} x - \s^{-1},\; \frac{1}{2} x,\; \frac{1}{2} x + \s^{-1},\; \frac{1}{2} x + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \frac{2}{3} x - 2 \s^{-1},\; \frac{2}{3} x - \s^{-1},\; \frac{2}{3} x,\; \frac{2}{3} x + \s^{-1},\; \frac{2}{3} x + 2 \s^{-1}, \cdots \\\ \quad\quad\; \quad \vdots \\\ \quad \quad \cdots \, x - 3 \s^{-1}, x - 2 \s^{-1}, x - \s^{-1}   \quad *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Intervall-Menge-0-bis-x-superial-kleiner-ganzer-Zahlen}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Nun können wir das allgemeine Integral recht einfach definieren:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \int_{a}^{x} f\'(n) \,dn  \widehat{=}  \!\!\! \sum_{ \forall n \in [a, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! f\'(n) \cdot \s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Aequ-Integral-mit-Summe-ueber-Intervall-Menge-a-bis-x-superial-kleiner-ganzer-Zahlen}', label_incr => false),
                      array( display => 'on',  latex => '{  f(x)  :=  f(a) + \!\!\! \sum_{ \forall n \in [a, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\! f\'(n) \cdot \s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Def-Integrale-mit-s-hoch-minus-Eins-Kurznotation}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Diese Summe ist so definiert, dass sie im Falle von \lm{ x < 0 } negativ wird.'."\n",
                        'So bekommen wir einen neuen Ausdruck für das Integral in Form einer originären Summe.'."\n",
                        '\\\\'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Wir versenken die Funktionswerte der Ableitung also im unendlich Kleinen, als unendlich dünne Streifen, und lassen die'."\n".
                    'ursprüngliche Funktion aus der Versenkung wieder im Endlichen erscheinen, durch endlos feines Aufsummieren.'."\n",
                      'Hierzu benötigen wir ganze Superial-Zahlen, skaliert ins superial kleine.'."\n".
                    'Diese werden wir im folgenden Beispiel besser praktisch kennenlernen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{\anchor{OM:SupNum:Einleitung:Vortext:Integral-genau-verstehen:Konkretes-Integral}{}Konkretes Integral} \\\\'."\n".
                    'Nun ein Beispiel, um anschaulich zu verstehen, was vor sich geht.'."\n".
                    'Dieses finden wir in der \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystem-Schreibweise}'."\n".
                    'auch im Abschnitt \italic{›\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Beispiel-eines-konkreten-Integrals}‹}.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wir nehmen das erste obige \jump{OM:SupNum:Einleitung:Vortext:Ableitung-genau-verstehen}{Ableitungsbeispiel} \lm{ f(x) = x^2 } mit'."\n".
                      'dem Ableitungsergebnis \lm{ f\'(x) = 2 x + \s^{-1} } und setzen dies in unsere Integralformel ein:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f(x)  =  f(0) \; + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\! *( 2 n + \s^{-1} *) \cdot \s^{-1}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  f(0) + \!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\! *( 2 n \cdot \s^{-1} + \s^{-2} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  f(0) \; + \; 2 \cdot \s^{-1} \cdot \!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n \; + \; \s^{-2} \cdot \!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! 1  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Anschließend haben wir die innere und äußere Summe in zwei getrennte Summen umgeformt.'."\n",
                        'Die hintere Summe addiert die Eins \lm{ x \cdot \s } mal, weil die Schrittgröße hierbei ja keine Rolle spielt,'."\n".
                      'sondern nur die Schrittanzahl, und das ergibt natürlich auch \lm{ x \cdot \s }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  f(0) \; + \; 2 \cdot \s^{-1} \cdot \!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n \; + \; \s^{-2} \cdot x \cdot \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  f(0) \; + \; 2 \cdot \s^{-1} \cdot \!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n \; + \; x \cdot \s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Integriere-zu-x2-bis-auf-letzte-Summe}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die übrige Summe der superial kleinen ganzen Zahlen der ersten \lm{ x \cdot \s } Elemente dieser Menge, mit der Null,'."\n".
                      'ergibt sich aus der angepassten Gaußschen Summenformel\footnote{\const{BiOrd_g_footnote_text_GaussscheSummenformel}},'."\n".
                      'wie bei den Biordinalzahlen im Abschnitt \italic{›\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:SummeAllerNatuerlichenZahlenBisInsAktualUnendlicheBerechnen}‹} nach Formel'."\n".
                      '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich} angegeben,'."\n".
                      'weil die Menge \lm{ \mathbb{S}_{\N} } nach Formel \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-g}'."\n".
                      'zur Klasse \lm{ \mathbb{K}_{\infty,g} } der Gauß-Summen äquivalenten Klassen – so auch Mengen – gehört:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{\N}  \in  \mathbb{K}_{\infty,g}  }',
                                          label_text => '\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-S_Z-ist-Element-K-unendlich-g}', label_incr => false),
                      array( display => 'on',  latex => '{  *( \mathbb{M} \in \mathbb{K}_{\infty,g} *) *( \forall n \in \mathbb{M} *)  *[  \sum_{ \forall i \in [ 0, n [_{\mathbb{M}} } \!\!\!\! i  =  \frac{ n^{2} - n }{ 2 }  *]  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{S}_{\N} *)  *[  \sum_{ \forall i \in [ 0, n [_{\mathbb{S}_{\N}} } \!\!\!\! i  =  \frac{ n^{2} - n }{ 2 }  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Diese Summe ist extra darauf angepasst, dass sie auch für aktual unendlich große Werte von \lm{ n },'."\n".
                      'also für aktual unendlich große natürliche Zahlen, gilt.'."\n",
                        'Wir müssen nur berücksichtigen, dass die Werte der gesuchten Summe in superial kleinen Schritten daher kommen:'."\n".
                      'Das bedeutet, dass wir es mit \lm{ x \cdot \s } Elementen zu tun haben – anstatt mit \lm{ x } –,'."\n".
                      'was in der oben stehenden Formel auf der Ergebnisseite als \lm{ x \cdot \s } für \lm{ n } eingeht.'."\n".
                      'Jedoch ist die Größe der einzelnen Summanden auf Ebene der ganzen Zahlen superial klein, sodass wir das Ergebnis um eine superiale Potenz \lm{ \s }'."\n".
                      'verringern müssen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \frac{ *( x \cdot \s *)^{2} - x \cdot \s }{ 2 } \cdot \s^{-1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot \s - x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Diese Summe haben wir auch noch einmal im Einzelnen im Rahmen der Superial-Zahlen aus ihren Teilsummen im Abschnitt \italic{›\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Direkte-Herleitung-der-angepassten-Gaussschen-Summenformel}‹}'."\n".
                      'hergeleitet, um zu zeigen, und damit ganz sicher zu gehen, dass diese richtig ist.'."\n",
                        'Das ist genau das gesuchte Ergebnis, was wir sofort durch Überprüfung sehen.'."\n".
                      /*  '\color{*Bearb}{(In Arbeit …)} Um die übrige Summe zu berechnen, ist ein tieferes Verständnis der \jump{OM:BiOrd:Home}{Biordinalzahlen}'."\n".
                      'anzuwenden und wir kommen auch nicht drum herum nachfolgend ein tieferes Verständnis der hier entwickelten Superial-Zahlen zu erlangen.'."\n",
                        'Wir können an dieser Stelle diese noch unbekannte Summe durch Umstellung berechnen,'."\n".
                      'denn das Ergebnis \lm{ f(x) = x^2 } ist uns ja nun schon durch das erste Ableitungsbeispiel oben bekannt,'."\n".
                      'und wir setzen es dazu ein:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  x^{2}  =  0^{2} \; + \; 2 \cdot s^{-1} \cdot \!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n \; + \; x \cdot s^{-1}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  2 \cdot s^{-1} \cdot \!\!\!\! \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  x^{2} - x \cdot s^{-1}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \frac{ x^{2} - x \cdot s^{-1} }{ 2 \cdot s^{-1} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot s - x }{ 2 }  }'),
                                          //%! label_name => 'OM:SupNum:Einleitung:Vortext:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x', label_text => '\name{OM:SupNum:Einleitung:Vortext:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array( */
                      'Dies eingesetzt in Formel \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Integriere-zu-x2-bis-auf-letzte-Summe}'."\n".
                      'ergibt'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  f(x)  =  f(0) \; + \; 2 \cdot \s^{-1} \cdot \frac{ x^{2} \cdot \s - x }{ 2 } \; + \; x \cdot \s^{-1}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  f(0) \; + \; x^{2} - x \cdot \s^{-1} \; + \; x \cdot \s^{-1}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  f(0) \; + \; x^{2}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f(x)  =  0^{2} \; + \; x^{2}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f(x)  =  x^{2}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und ist auch das erwartete Ergebnis.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wie wir sehen, ist es tatsächlich mit den Superial-Zahlen möglich, ein Integral eines Polynoms'."\n".
                    'explizit auszurechnen.'."\n".
                    'Dies geht so einfach schon mal mit jedem Integral eines Polynoms, ist bei Polynomen höheren Grades aber natürlich entsprechend aufwendiger.'."\n".
                    'Offensichtlich ist dabei, dass wir so recht einfach verstehen, was bei der Berechnung des Integrals im Detail vor sich geht.'."\n",
                      'Und das ist ja eines meiner Ziele, beim Ableiten und besonders beim Integrieren nicht so eine Black-Box vor uns zu haben.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Auf diese Weise ergibt sich für uns ein zunehmend konkretes Bild davon, was die superiale Basis \lm{ \s } eigentlich ist'."\n".
                    'und was wir mit \lm{ \s } alles anfangen können.'."\n".
                    'Aus diesem besser werdendem Bild, und besonders über die nähere Beleuchtung der Frage der ganzen Superial-Zahlen,'."\n".
                    'kommen wir gleich zu einer ganz bemerkenswerten Definition unserer superialen Basis \lm{ \s }.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Kleiner Ausblick zwischendurch')),
                  array( 'text', array( text => array(
                    'Wir werden im Folgenden noch sehen, dass dieses Vorgehen weitere neue Erkenntnishorizonte eröffnet.'."\n",
                      'Nur zum Appetit machen können wir hier schon mal kurz zeigen, dass die zuletzt errechnete Summe \jumpname{OM:SupNum:Ableitungen-Integrale:Integration:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x}'."\n".
                    'sich auch folgendermaßen beschreiben lässt, wenn wir ihren Bruch in zwei Teile zerlegen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{\Z}} }  \!\!\!\! n  =  \frac{ x^{2} \cdot \s }{ 2 } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Der erste Summand kann später im Abschnitt \italic{›\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Summen-zur-Integration-von-2x-plus-supkl-Eins}‹} aus der Struktur der ganzen Superial-Zahlen'."\n".
                    'und unseren Erkenntnissen in der Theorie der Biordinalzahlen berechnet werden zu:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ x^{2} \cdot \s }{ 2 }  =  *( \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  \;\; +  \! \sum_{ \forall a \in ] 0, x ]_{\mathbb{A}_{\S}}}  \!\! a *) \cdot ω  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Doppelsummenausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ x^{2} \cdot \s }{ 2 }  =  \# [ 0, x [_{\mathbb{A}_{\S}} \; \cdot \; x \cdot ω  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-erster-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei steht das Symbol \lm{ ω } für die Anzahl der endlichen natürlichen Zahlen, mit der Null, in der Menge \lm{ \mathbb{N} };'."\n".
                    'also für die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}.'."\n".
                    'Und das Symbol \lm{ \# } gibt die Anzahl der Elemente der nachfolgenden Menge an.'."\n",
                      'Gleiches gilt auch für den zweiten Summanden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  - \frac{ x }{ 2 }  =  \# [ 0, x \, [_{\mathbb{A}_{\S}} \; \cdot \sum_{ \forall z \in \mathbb{Q} }  z \cdot s^{-1}  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-ungeloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  - \frac{ x }{ 2 }  =  \# [ 0, x \, [_{\mathbb{A}_{\S}} \, \cdot \; \frac{ -ω }{ \s }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-mit-Summe-geloest-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  - \frac{ x }{ 2 }  =  - \; \# [ 0, x \, [_{\mathbb{A}_{\S}} \, \cdot \; \frac{ ω }{ \s }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Anzahlausdruck-zweiter-Summand-von-Integration-von-2x-plus-supkl-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Hierbei ist es vermutlich für den ein oder anderen erstaunlich, dass ganz unabhängig von den hier entwickelten Superial-Zahlen'."\n".
                    'in der Theorie der Biordinalzahlen deutlich wird, dass genauso viele endliche rein negative ganze Zahlen existieren,'."\n".
                    'wie es endliche natürliche Zahlen gibt, also endliche positive ganze Zahlen, mit der Null.'."\n".
                    'Demnach finden wir, bei genauer Untersuchung, eine \jump{OM:SupNum:Eigenschaften:StrukturVonS:Erklaer-Anzahl-endl-ganz-Zahlen}{fundamentale Asymmetrie}'."\n".
                    'zwischen der ontologischen Struktur der endlichen ganzen Zahlen und der Verteilung ihrer Werte (siehe \jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Fig-OntologieGanzeZahlen}, im Abschnitt \italic{›\jumpname{OM:SupNum:Eigenschaften:StrukturVonS}‹}).'."\n".
                    'Dadurch ergibt die Summe aller endlichen ganzen Zahlen die aktual unendlich große negative Zahl \lm{ -ω } (siehe Formel \jumpname{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z}).'."\n",
                      'Addieren wir nun beide Summanden, so erhalten wir:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \# [ 0, x [_{\mathbb{A}_{\S}} \; \cdot \; x \cdot ω \; - \; \# [ 0, x \, [_{\mathbb{A}_{\S}} \, \cdot \; \frac{ ω }{ \s }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall n \in [0, x[_{\mathbb{S}^{-1}_{Z}} }  \!\!\!\! n  =  \# [ 0, x [_{\mathbb{A}_{\S}} \; \cdot \; ω \cdot *( x - \frac{ 1 }{ \s } *)  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-superial-kleine-natuerliche-SuperialZahlen-bisOhne-x-geteilt-Anzahlausdruck-Differenz-ausgeklammert}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Ein mir bisher unbekanntes und bemerkenswertes Ergebnis aus unendlichen Summen und aktual unendlichen Anzahlen.'."\n",
                      'Ebenso für die Summe aller endlichen realen Koeffizienten der Superial-Zahlen von Null bis ausschließlich – oder einschließlich – \lm{ x } können wir ein'."\n".
                    'Ergebnis finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ \forall a \in [ 0, x [_{\mathbb{A}_{\S}}}  \!\! a  =  \frac{ x^{2} \cdot s }{ 4 \cdot ω } - \frac{ x }{ 2 }  }',
                                          label_text => '\jumpname{OM:SupNum:Ableitungen-Integrale:NaehereUntersuchungBestimmterSummen:Equ-Summe-rationale-Zahlen-bisOhne-x}', label_incr => false),
                      array( display => 'off', latex => '{  \Leftrightarrow  \sum_{ \forall a \in [ 0, x ]_{\mathbb{A}_{\S}}}  \!\! a  =  \frac{ x^{2} \cdot s }{ 4 \cdot ω } - \frac{ x }{ 2 } + x  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sum_{ \forall a \in [ 0, x ]_{\mathbb{A}_{\S}}}  \!\! a  =  \frac{ x^{2} \cdot s }{ 4 \cdot ω } + \frac{ x }{ 2 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese Summe ließ sich vorher nicht explizit in einer aktual unendlichen Zahl ausdrücken, soweit mir bekannt.'."\n",
                      'In alldem kommen einige interessante Dinge vor, wie wir sehen, die zuvor wohl nicht zu fassen waren:'."\n".
                    'Auch die Anzahl aller endlichen rationalen Zahlen insgesamt und in einem Intervall konnte nach meinem Wissen zuvor'."\n".
                    'nicht durch eine aktual unendliche Zahl ausgedrückt werden.'."\n".
                    'Und auch, wie eben gesagt, dass die Summe der endlichen ganzen Zahlen negativ ist und \lm{ -ω } entspricht,'."\n".
                    'war mir nicht bekannt.'."\n",
                      'Ich denke, all dies ist schon etwas ziemlich besonderes und kann Appetit auf mehr machen.'."\n".
                    'Da ist im Folgenden noch einiges faszinierendes zu Entdecken.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Ein Stellenwertsystem', subline =>
                  'Eine fraktale Struktur')),
                  array( 'text', array( text => array(
                    'Bei etwas intensiverem Herumspielen fällt einem auf, dass die Superial-Zahlen sich wie ein'."\n".
                    '\jump{OM:SupNum:Formale-Entwicklung:Formalien:Stellenwertsystem}{Stellenwertsystem} verhalten.'."\n".
                    'Die Ziffern der Stellen können alle rationalen Zahlen sein, sogar negative.'."\n".
                    'Durch diese Erkenntnis finden wir die Möglichkeit, die Darstellung gegebenenfalls zu verkürzen, wie beispielsweise die folgende:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  - \frac{3}{5} \cdot \s^{2} + 25 \cdot \s^{1} + 3,5 \cdot \s^{0} - 7,2 \cdot \s^{-1} \\\ \qquad\qquad\qquad\quad  =  *〈 - \frac{3}{5} *〉*〈 25 *〉*〈 3,5 *〉․*〈 -7,2 *〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Zur Kennzeichnung der endlichen, nullten Stelle haben wir zwischen ihr und der minus ersten Stelle'."\n".
                    'einen Punkt gesetzt, wie das im Angelsächsischen hinter der nullten Stelle einer Dezimalzahl üblich ist.'."\n",
                      'Diese Darstellung verdeutlicht auch, dass es sich bei \lm{ \s } im Grunde um'."\n".
                    'eine unendlich große Eins oder genauer um eine superial große Eins handelt;'."\n".
                    'und bei \lm{ \s^{-1} } um eine unendlich kleine Eins oder genauer um eine superial kleine Eins:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \s  =  \s^{1}  =  *〈 1 *〉*〈 0 *〉.  =  *〈 1 *〉_{1}  }'),
                      array( display => 'on',  latex => '{  1  =  \s^{0}  =  *〈 1 *〉.  =  *〈 1 *〉_{0}  }'),
                      array( display => 'on',  latex => '{  \s^{-1}  =  .*〈 1 *〉  =  *〈 1 *〉_{-1}  }'),
                      array( display => 'on',  latex => '{  \s + \s^{-1}  =  *〈 1 *〉*〈 0 *〉.*〈 1 *〉  =  *〈 1 *〉_{1}*〈 1 *〉_{-1}  }'),
                      array( display => 'on',  latex => '{  \s + 1 + \s^{-1}  =  *〈 1 *〉*〈 1 *〉.*〈 1 *〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Anstatt eines Punktes kann auch die Potenz der vorstehenden Klammer durch einen Index gekennzeichnet werden.'."\n",
                      'Ich habe diese unter Umständen etwas kürzere und elegantere Darstellung eingangs nicht benutzt,'."\n".
                    'um die Formeln einfach und verständlich zu halten und damit eine gute Transparenz zu gewährleisten,'."\n".
                    'also um nicht durch zu viel Neues zu verwirren.'."\n".
                    'Nachfolgend werde ich sie jetzt häufiger nutzen.'."\n".
                    ''))),
                      
                  array( 'figure',
                    array_merge( $SupNum_g_figure_ary_GeradeSuperialZahlen, array( name => 'OM:SupNum:Einleitung:Vortext:Fig-GeradeSuperialZahlen'))),
                                            
                  array( 'text', array( text => array(
                    'Die Stellenwertsystem-Darstellung verdeutlicht, dass die Superial-Zahlen eine fraktale Struktur besitzen,'."\n".
                    'die sich in jeder Zahlenstelle beziehungsweise Potenzebene von \lm{ s } wiederholt'."\n".
                    '(siehe \jumpname{OM:SupNum:Einleitung:Vortext:Fig-GeradeSuperialZahlen}).'."\n",
                      'Ihre Selbstähnlichkeit bezieht sich darauf, dass die Gerade der endlichen rationalen Zahlen'."\n".
                    'um die unendlich kleinen, superialen Zahlen erweitert wird und auf diese Weise zwischen'."\n".
                    'den endlichen Zahlen noch unendlich viele, unendlich kleine Zahlengeraden verschiedenster Dimensionsgrößen hat.'."\n".
                    'Erstaunlicherweise kennt die Mathematik dadurch jetzt nicht nur orthogonale Dimensionen\color{*Bearb}{(Verweis)},'."\n".
                    'die senkrecht zueinander stehen, sondern auch unendlich kleine, lineare Dimensionen – \italic{superiale Dimensionen} –,'."\n".
                    'die sich in fraktaler Weise zwischen unseren endlichen Zahlen verstecken.\footnote[*Entwick]{\color{*Entwick}{Ich frage mich, welchen (fraktalen) Zusammenhang gibt es zwischen den orthogonalen und den \italic{superialen Dimensionen}?}}'."\n".
                    'Auf Basis der \italic{superialen Einheit} \lm{ \s } lassen sich folglich'."\n".
                    'eben auch unendlich große, lineare Dimensionen beschreiben.'."\n".
                    'Zwischen denen liegen dann unsere endlichen Zahlen und so fort.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:Was-ist-unsere-neue-superiale-Basis-s', text =>
                                           
                'Mit Primzahlen ins Unendliche', subline =>
                  'Was ist unsere neue superiale Basis \lm{ \s }?')),
                  array( 'text', array( text => array(
                    'Wir haben nun eine gute Idee, was wir mit der superialen Basis \lm{ s } anfangen können.'."\n".
                    'So stellt sich schließlich die Frage:'."\n",
                      'Können wir sagen, was \lm{ s } genau ist?'."\n".
                    'Wie definieren wir unsere superiale Basis und stiften damit noch mehr Sinn; gewinnen noch mehr Erkenntnis?'."\n",
                      'Mit dieser wichtigen Frage konfrontierte mich einst ein Hamburger Universitätsprofessor,'."\n".
                    'den ich mit einer von ihm unverlangten E-Mail an ihn und einer darauf folgenden'."\n".
                    'E-Mail Korrespondenz vermutlich ziemlich nervte.'."\n".
                    'Unsere Korrespondenz wurde im Grunde mit dieser Frage und mit einem Hinweis und Ratschlag an mich beendet,'."\n".
                    'den ich nun nicht weiter vertiefen möchte.'."\n",
                      'Wie dem auch sei, für seine kluge Frage bin ich dem Herrn außerordentlich dankbar!'."\n".
                    'Denn sie hat in mir einen tief gehenden Denkprozess ausgelöst und schließlich zu'."\n".
                    'einer Erkenntnis geführt, deren Tragweite in meinen Augen nicht zu unterschätzen ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Primzahlen sind grundlegend für die Antwort} \\\\'."\n".
                    'Mit diesen Fragen kommen wir weiter, wenn wir uns mit den stillschweigenden Annahmen beschäftigen,'."\n".
                    'die wir treffen, wenn wir oben mit Hilfe von \lm{ s } \jump{OM:SupNum:Einleitung:Vortext:Ableitung-genau-verstehen}{Ableitungen}'."\n".
                    'und \jump{OM:SupNum:Einleitung:Vortext:Integral-genau-verstehen}{Integrale} definieren.'."\n",
                      'Wir konnten bei der Herleitung des Integrals aus der Ableitung oben schon feststellen,'."\n".
                    'dass wir bezüglich der Ableitung schon stillschweigend oder unbewusst davon ausgegangen sind,'."\n".
                    'es würde unendlich viele unendlich kleine ganze Zahlen geben.'."\n".
                    'Beim Integrieren kommen wir nämlich in die Verlegenheit, in ganzen Schritten all die Differenzen'."\n".
                    'der Ableitung wieder aufzusummieren.'."\n".
                    'Dabei stellt sich die Frage:'."\n".
                    'Wie groß sind diese Schritte und wieviele Schritte sind notwendig, um die ursprüngliche'."\n".
                    'Funktion \lm{ f(x) } aus der abgeleiteten \lm{ f\'(x) } wieder herzustellen.'."\n",
                      'Als wir uns damit beschäftigten, kam die Erkenntnis, wir müssten \lm{ x \cdot s }'."\n".
                    'Schritte in den Funktionswerten von \lm{ f\'(x) } der Größe \lm{ \s^{-1} }'."\n".
                    'von Null bis ausschließlich \lm{ x } addieren.'."\n",
                      'Diese Schritte konnten wir durch Skalierung von ganzen Zahlen von Null bis ausschließlich'."\n".
                    '\lm{ x \cdot s } erzeugen.'."\n".
                    'Was zum einen die Existenz dieser unendlich großen ganzen Zahlen voraussetzt;'."\n".
                    'und zum anderen, dass sich diese Zahlen nach ihrer Größe ordnen lassen, also linear angeordnet sind.'."\n",
                      'Welche Eigenschaften muss \lm{ s } demnach haben, damit ein Produkt von \lm{ s }'."\n".
                    'mit jeder rationalen Zahl eine ganze Zahl ergibt, auch wenn diese unendlich groß ist?'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Rationale Zahlen und ihre Primfaktorzerlegung} \\\\'."\n".
                    '\color{*Bearb}{(Durch den Beweis der \italic{\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}} haben sich die Koeffizienten der Superial-Zahlen von den endlichen rationalen Zahlen auf die Koeffizienten der algebraischen Zahlen erweitert, was noch berücksichtigt werden muss.)} \\\\'."\n".
                    'Ebenso, wie jede natürliche Zahl größer Eins eine Primfaktorzerlegung hat,'."\n".
                    'so hat im Grunde auch jede rationale Zahl größer Null und ungleich Eins eine'."\n".
                    'Primfaktorzerlegung, wenn wir negative Potenzen der Primzahlen zulassen, wie beispielsweise:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{ 250 }{ 567 }  =  \frac{ 2 \cdot 5^{3} }{ 3^{4} \cdot 7 }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ 250 }{ 567 }  =  2 \cdot 3^{-4} \cdot 5^{3} \cdot 7^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies kommt daher, weil bekanntermaßen jede rationale Zahl ein Bruch zweier ganzer Zahlen ist.'."\n".
                    'Ausgeschlossen ist natürlich durch Null zu teilen.'."\n",
                      'Welche Eigenschaft muss die Zahl \lm{ s } haben, sodass sie multipliziert mit jeder'."\n".
                    'rationalen Zahl immer noch eine ganze Zahl ergibt?'."\n".
                    ''))),

                  /* array( 'fade-in-area', array( Display => 'showContent', jumpName => 'OM:BiOrd:Einleitung:Vortext:X',
                Title => 'Vorheriger Text …',
                TitleVis => 'Vorheriger Text:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Bei Überlegung zu dieser Frage viel mir nach und nach auf, dass sich das Zählen von natürlichen Zahlen mit den \italic{Superial-Zahlen} \term{\M(S)} ins unendlich Große'."\n".
                    'vorsetzen ließ und dies nach meiner vorhergehenden Forschung mit der Umkehrung der Ableitung, mit dem \jump{OM:SupNum:Einleitung:Grundlagen:Ganze-Natuerl-Sup-Zahl-und-Integration}{Integral}, verbunden war.'."\n".
                    'Beim Integrieren mit Superial-Zahlen wurde eine wohldefinierte aktual unendliche Summe mit \term{s} Summanden von Flächenstreifen der Breite \term{s^^{-1}} aufsummiert.'."\n",
                      'Darüber ließ sich die Menge der ganzen Superial-Zahlen \term{\M(S)__{Z}} oder der natürlichen Superial-Zahlen \term{\M(S)__{N}} definieren.'."\n".
                    'Wobei es einen Übergang ins Unendliche gab, der im Dunkeln lag, jedoch kam man nach belieben irgendwo im unendlich großen heraus.'."\n".
                    'Man zählt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \qquad\, 0,\; 1,\; 2,\; 3,\; \cdots \\\ \quad \cdots s - 3,\; s - 2,\; s - 1,\; s,\; s + 1,\; s + 2,\; s + 3,\; \cdots \\\ \quad \cdots s^{2} - 3,\; s^{2} - 2,\; s^{2} - 1,\; s^{2},\; s^{2} + 1,\; s^{2} + 2,\; s^{2} + 3,\; \cdots \\\ \quad\quad\; \vdots  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und so fort.'."\n",
                      '\term{s} müsste dann eine natürliche, unendlich große Zahl sein.'."\n".
                    'Interessanterweise kamen dabei ganze, endlich große, negative Summanden ins Spiel, die man bei natürlichen Zahlen erst einmal nicht vermuten würde.'."\n".
                    'Man kann von \term{s} eine beliebig große, endliche, natürliche Zahl abziehen, ohne dass man in der Summe ins Negative kommen kann.'."\n",
                      'Und man kann auch folgendermaßen zählen, ohne unbedingt in Widersprüche zu geraten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \qquad\; 0,\; 1,\; 2,\; 3,\; \cdots \\\ \quad \cdots \frac{1}{2} \cdot s - 2,\; \frac{1}{2} \cdot s - 1,\; \frac{1}{2} \cdot s,\; \frac{1}{2} \cdot s + 1,\; \frac{1}{2} \cdot s + 2, \cdots \\\ \quad \cdots \frac{1}{2} \cdot s^{2} - 2,\; \frac{1}{2} \cdot s^{2} - 1,\; \frac{1}{2} \cdot s^{2},\; \frac{1}{2} \cdot s^{2} + 1,\; \frac{1}{2} \cdot s^{2} + 2,\; \cdots \\\ \quad\quad\; \vdots  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und so fort.'."\n",
                      'Da stellt sich die Frage, unter welchen Umständen \term{a__{1}⋅s} eine unendlich große, natürliche, also eine ganze Zahl sein kann?'."\n".
                    'Das Beispiel \term{1/2⋅s} müsste dann, wie \term{s}, eine unendlich große, natürliche Zahl sein.'."\n".
                    '\term{s} müsste also ganzzahlig durch Zwei teilbar sein.'."\n".
                    'Im mathematischen Sinn sind folglich die Primfaktoren von \term{s} interessant.'."\n".
                    'Es erscheint jedenfalls schon einmal schlüssig, dass eine unendlich große Zahl, wenn durch irgendeine endliche natürliche Zahl geteilt wird, immer noch'."\n".
                    'eine unendlich große Zahl ist und nicht dadurch endlich wird.'."\n".
                    'Die Zahl \term{s} kann allenfalls endlich werden, wenn sie unendlich oft durch endliche, natürliche Zahlen geteilt wird.'."\n".
                    'Soll \term{s} eine unendliche, natürliche Zahl sein, dann müsste sie demnach ein Produkt unendlich vieler endlicher, natürlicher Zahlen sein.'."\n".
                    'Wenn \term{s} tatsächlich durch jede beliebige endliche, natürliche Zahl teilbar sein soll, ihr Produkt mit jeder rationalen Zahl \term{q} wäre dann wieder eine'."\n".
                    'unendliche, natürliche Zahl \term{q⋅s}, dann muss sie selber eine Primfaktorzerlegung haben in der jede Primfaktorzerlegung einer endlichen, natürlichen Zahl steckt.'."\n".
                    'Da auch \term{q⋅1/2⋅s}, also allgemein \term{q__{0}⋅q__{1}⋅q__{2}⋅q__{3}⋅ … ⋅s}, immer eine unendliche, natürliche Zahl sein sollte,'."\n".
                    'muss die Primfaktorzerlegung von \term{s} sogar endlich beliebig oft die Primfaktorzerlegung jeder endlichen, natürlichen Zahl enthalten.'."\n".
                    ''))),
                    ))), */
                      
                  array( 'text', array( text => array(
                  '\condb{Die Definition von \lm{ s }} \\\\'."\n".
                    'Nach meinem Verständnis muss \lm{ s } eine Primfaktorzerlegung haben,'."\n".
                    'die eine unendlich große Potenz aller endlichen Primzahlen ist.'."\n".
                    'Nur so ist gewährleistet, dass keine Potenz im Produkt einer rationalen Zahl mit \lm{ s }'."\n".
                    'negativ und dadurch das Produkt eine gebrochene Zahl wird.'."\n".
                    'Und nur dadurch ist gewährleistet, dass wir ein solches Produkt beliebig endlich oft machen können,'."\n".
                    'ohne, dass das Ergebnis endlich werden kann, sondern unendlich groß bleibt.'."\n",
                      'In \lm{ s } muss also jede Primfaktorzerlegung einer endlichen ganzen Zahl'."\n".
                    'beliebig endlich oft stecken.'."\n".
                    'Eine Definition von \lm{ s }, die dies explizit umsetzt, finden wir auf der Seite'."\n".
                    '\italic{\jumpname{OM:SupNum:Formale-Entwicklung}}'."\n".
                    'im Abschnitt \italic{\jumpname{OM:SupNum:Struktur-Geometrie:Vortext:DefinitionSuperialeEinheit}}.'."\n",
                      'Folgendes Primzahlprodukt sollte das einfachste kleinste Produkt aus unendlich vielen Primfaktoren sein,'."\n".
                    'dass diese Bedingung erfüllt, dabei ist \lm{ \mathbb{P} } die Menge aller endlicher Primzahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  :=  \displaystyle \prod_{\forall n \in \mathbb{N}}  *( \prod_{\forall p \in \mathbb{P}}  p *)  }',
                                               label_name => 'OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N', label_text => '\name{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'In diesem Produkt wird erst einmal das Produkt aller endlichen Primzahlen'."\n".
                    '\lm{ 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot \cdots } gebildet, um sie alle vorrätig zu haben.'."\n".
                    'Anschließend wird es so oft mit sich selber mal genommen, wie groß die Anzahl der endlichen natürlichen Zahlen ist,'."\n".
                    'um alle Primzahlen auch in einer Potenz vorrätig zu haben, die für alle gleich groß ist, aber so klein wie möglich,'."\n".
                    'dass die Potenz durch keine in rationalen Zahlen mögliche, negative Potenz in einem Produkt mit ihr endlich groß werden kann.'."\n",
                      'Die hier in der Potenz erzeugte Anzahl wird in der Mengenlehre mit \lm{ ω } bezeichnet und steht so für die vollständige Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}.'."\n".
                    'So können wir über das Symbol \lm{ \# } der Anzahl der Elemente einer Menge,\footnote{Vgl. \cite{wiki:MaechtigkeitMathematik:2023},'."\n".
                    'Mächtigkeit\footnote{\const{SupNum_g_footnote_text_Maechtigkeit}} bei endlichen Mengen.} das ich hier auf unendlich große, abzählbare Mengen erweitere, definieren:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{N}   :=  \mathbb{N}_{0}  }',
                                               label_text => '\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-Def-N-enthaelt-Null}', label_incr => false),
                      array( display => 'on',  latex => '{  ω   :=  \#\mathbb{N}  }',
                                               label_name => 'OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N', label_text => '\name{OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  s  :=  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)^{ω}  }',
                                               label_name => 'OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega', label_text => '\name{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wie Formel \jumpname{OM:BiOrd:Einleitung:Vortext:Equ-Def-N-enthaelt-Null} definiert, setze ich voraus, dass die natürlichen Zahlen die Null enthalten.'."\n".
                    'Den Grund dafür verdeutliche ich im Abschnitt \italic{\jumpname{OM:SupNum:Einleitung:Grundlagen}}.'."\n",
                      'Für das Primzahlprodukt von \lm{ s } ergibt sich also, wie eben beschrieben,'."\n".
                    'eine mit unendlich mal unendlich vielen Primzahlen gefüllte Fläche der folgenden Art:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  \prod_{\forall n \in \mathbb{N}} *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)  }',
                                          label_name => 'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-fuer-alle-in-N-Primzahl-Prod', label_text => '\name{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-fuer-alle-in-N-Primzahl-Prod}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{1} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{2} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{3} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{n \in \mathbb{N}} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots  }',
                                          label_name => 'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod', label_text => '\name{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}', label_incr => true),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)^{ω}  }',
                                          label_name => 'OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Prod-hoch-omega', label_text => '\name{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Prod-hoch-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                  '\condb{Die Veränderung der Primfaktorzerlegung von \lm{ s } durch rationale Koeffizienten} \\\\'."\n".
                    'Mit Hilfe der neuen Theorie der \jump{OM:BiOrd:Home}{Biordinalzahlen} können wir auch Zahlen wie'."\n".
                    '\lm{ ω - n }, mit \lm{ n \in \mathbb{N} }, darstellen und damit die Veränderung der Primzahlpotenzen'."\n".
                    'des \italic{unendlichen Primzahl-Flächenprodukts} durch rationale Koeffizienten mit biordinalen Potenzen angeben:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{2}{9} \cdot s  =  2^{ ω + 1} \cdot 3^{ ω - 2} \cdot *( 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)^{ω}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier können wir sehen, dass \lm{ s } durch Multiplikation mit endlich beliebig vielen'."\n".
                    'rationalen Zahlen immer unendlich groß bleibt, also seine superiale Dimension nicht verändert.'."\n".
                    'Denn dadurch werden, aufgrund der Primfaktorzerlegung endlicher ganzer Zahlen, immer'."\n".
                    'nur natürliche Zahlen auf die jeweiligen Potenzen addiert oder von ihnen abgezogen.'."\n".
                    'Da für jede natürliche Zahl \lm{ n } die \jump{OM:BiOrd:Einleitung:NeueEinsichten:NeueEinsichtenZuPosAktualUnendl}{Differenz \lm{ ω - n } immer'."\n".
                    'unendlich groß bleibt}, kann kein rationaler Koeffizient \lm{ q } einer endlich ganzzahligen Potenz \lm{ z } von'."\n".
                    '\lm{ s }, also unser folgendes \lm{ s^z }, in eine andere Potenzebene bringen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      //%! array( display => 'on',  latex => '{  *( \nexists q_{z} \in \mathbb{Q}^{+} *) *( \forall q_{z-1}, q_{z+1} \in \mathbb{Q}^{+} *) \\\ \qquad *[  q_{z} \cdot s^{z}  <  q_{z-1} \cdot s^{z-1}  \\\ \qquad \;\;\;\lor\;\;\;  q_{z} \cdot s^{z}  >  q_{z+1} \cdot s^{z+1}  *]   }'),
                      array( display => 'on',  latex => '{  *( \nexists q_{z} \in \mathbb{Q}^{+} *) *( \forall z \in \mathbb{Z} *) *( \forall q_{z-1} \in \mathbb{Q}^{+} *)  \\\ \qquad\qquad\qquad *[  q_{z} \cdot s^{z}  <  q_{z-1} \cdot s^{z-1}  *]   }'),
                      array( display => 'on',  latex => '{  *( \nexists q_{z} \in \mathbb{Q}^{+} *) *( \forall z \in \mathbb{Z} *) *( \forall q_{z+1} \in \mathbb{Q}^{+} *)  \\\ \qquad\qquad\qquad *[  q_{z} \cdot s^{z}  >  q_{z+1} \cdot s^{z+1}  *]   }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Potenz \lm{ z } von \lm{ s } dominiert den Koeffizienten \lm{ q }'."\n".
                    'bezüglich der Größe in der Anordnung und ist der Grund für die lexikografische Ordnung\footnote{\const{SupNum_g_footnote_text_LexikographischeOrdnung}}'."\n".
                    'der Superial-Zahlen.'."\n",
                      'Diese Eigenschaft ist generell sehr bemerkenswert und tatsächlich auch durch die'."\n".
                    'Definition von \lm{ s } über das unendliche Primzahl-Flächenprodukt gewährleistet.'."\n".
                    'Weiteres zur Dominanz der Potenzen von \lm{ s } untersuchen wir im Abschnitt \italic{\jumpname{OM:SupNum:Formale-Entwicklung:Formalien:Zahlen-und-Mengen-im-Unendlichen}}.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Primzahlen haben eine Verbindung ins Unendliche} \\\\'."\n".
                    'Die neu entdeckten, unendlich großen Primfaktorzerlegungen offenbaren einen tiefen Zusammenhang'."\n".
                    'der endlichen Primzahlen mit dem Unendlichen über die rationalen Zahlen.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Primzahlprodukt-Vermutung} \\\\'."\n".
                    '\color{*Bearb}{(Der Beweis der \italic{\jumpname{OM:SupNum:Primzahlprodukt-Vermutung}} muss noch berücksichtigt werden.)} \\\\'."\n".
                    'Im spielerischen Umgang und in tieferen Analysen der Zusammenhänge kommt die Vermutung auf, dass das Produkt'."\n".
                    'der einfachen Potenz aller endlichen Primzahlen, also eine Zeile des Primzahl-Flächenprodukts,'."\n".
                    'der Anzahl der natürlichen Zahlen \lm{ ω } entspricht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  ?=  ω_{\forall p}  :=  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)^{ω}  \\\ \qquad\quad\;  =  *( ω_{\forall p} *)^{ω}  ?=  ω^{ω}  }',
                                          label_text => '\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-Fragezeichen-ist-omega-hoch-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} findet im Abschnitt \italic{\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm}}'."\n".
                    'eine nähere Begründung.'."\n".
                    'Dort wird aufgrund des unendlich ganzzahligen Zählens innerhalb der Superial-Zahlen unter anderem erkannt,'."\n".
                    'dass die \jump{OM:BiOrd:Einleitung:NeueEinsichten:AnzahlDerEndlichenGanzenZahlen}{Anzahl aller endlichen ganzen Zahlen \lm{ 2 \cdot ω }}'."\n".
                    'ein ganzzahliger Teiler von \lm{ \s } sein muss.'."\n".
                    'Daher muss \lm{ ω } ein ganzzahliger Teiler von \lm{ \frac{ \s }{ 2 } } sein,'."\n".
                    'also ein ganzzahliges Teilprodukt.'."\n",
                      'Damit muss \lm{ ω } ein unendlich großer Teil des Primzahlprodukts von \lm{ \s } sein.'."\n".
                    'Und bei näherer Analyse stellen wir auch fest, dass es sich um einen unendlich großen Teil des Primzahlprodukts'."\n".
                    'im horizontalen Bereich aller unterschiedlichen Primzahlen handeln muss.'."\n",
                      'In unserem Beweis der Primzahlprodukt-Vermutung zeigen wir zusätzlich, dass es nur sein kann,'."\n".
                    'dass die Primfaktorzerlegung von \lm{ ω } endliche Primzahlen von Beginn an und'."\n".
                    'ohne Lücke enthalten muss.'."\n".
                    'Und von diesen dann unendlich viele, was zusammengefasst bedeutet, einfach alle endlichen Primzahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Überrationalitätsvermutung} \\\\'."\n".
                    '\color{*Bearb}{(Durch den Beweis der \italic{\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}} haben sich die Koeffizienten der Superial-Zahlen von den endlichen rationalen Zahlen auf die Koeffizienten der algebraischen Zahlen erweitert, was noch berücksichtigt werden muss.)} \\\\'."\n".
                    'Eine weitere Vermutung, die der Primfaktorzerlegungen von \lm{ \s } entspringt,'."\n".
                    'dreht sich um die Frage, ob der positive reelle Anteil von algebraischen Zahlen\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
                    'durch einen von mir so genannten \italic{überrationalen Bruch} dargestellt werden kann.'."\n",
                      'Ein überrationaler Bruch ist ein Bruch, der im Nenner und im Zähler unendlich große, teilerfremde Zahlen hat,'."\n".
                    'deren Primfaktorzerlegung aus unendlich vielen endlichen Primzahlen endlich ganzzahliger Potenzen besteht.'."\n".
                    'Dann wäre ein Produkt eines überrationalen Bruchs mit \lm{ \s } ebenfalls unendlich groß und ganzzahlig.'."\n",
                      'Zu den algebraischen Zahlen gehören auch ganzzahlige Wurzeln natürlicher Zahlen, wie \lm{ \sqrt{2} },'."\n".
                    'womit dann beispielsweise \lm{ \sqrt{2} \cdot \s } ganzzahlig wäre.'."\n",
                      'Sollte die \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung} sich als wahr'."\n".
                    'erweisen, dann wäre dies ebenfalls eine sehr bemerkenswerte Eigenschaft der Superial-Zahlen,'."\n".
                    'die uns neue Informationen über algebraische Zahlen geben würde und so ein wichtiger Beitrag zur Zahlentheorie wäre.'."\n".
                    'Denn so würde auch eine bessere Differenzierung zwischen den irrationalen und den transzendenten Zahlen ermöglicht.'."\n".
                    '\\\\ \color{*Bearb}{(Durch den Beweis der \italic{\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}} haben sich die Koeffizienten der Superial-Zahlen von den endlichen rationalen Zahlen auf die Koeffizienten der algebraischen Zahlen erweitert, was noch berücksichtigt werden muss.)}'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Die Erweiterung der Arithmetik ins Unendliche', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen erweitern die uns bekannte Arithmetik\footnote{\const{NSOSP_g_footnote_text_Arithmetik}}'."\n".
                    'ins Aktual-Unendliche, wobei sehr viele ihrer Regeln nicht nur für ihre endlichen Zahlen gelten,'."\n".
                    'sondern auch in der Erweiterung:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Unendliche Untermengen der Zahlen} \\\\'."\n".
                    'Es werden auch die Untermengen der Zahlen erweitert.'."\n".
                    'So gibt es zum Beispiel natürliche, ganze, gerade und ungerade Superial-Zahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Unendliche Primzahlen} \\\\'."\n".
                    'Auch eine Erweiterung der Primzahlen kann auf diese Weise definiert werden und man erhält die Menge \lm{ \mathbb{S}_P } der \italic{superialen Primzahlen}.'."\n".
                    'Zum Beispiel sind die Zahlen \lm{ s - 1 } und \lm{ s + 1 } unendlich große Primzahlen, weil sie durch keine endliche Primzahl ganzzahlig teilbar sind'."\n".
                    'und auch keine andere Zahl in diesem System gefunden werden kann, die diese Zahlen ganzzahlig teilt.'."\n".
                    'Die Zahlen \lm{ s \pm 2 } sind hingegen beide durch \lm{ 2 } teilbar, also keine Primzahlen.'."\n",
                      'Diese Erweiterung der Primzahlen ins Unendliche ist interessant, weil sie die Verteilung der Primzahlen'."\n".
                    'im Unendlichen beleuchtet und so auch neue Einsichten für die endlichen Primzahlen verspricht.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Rechnen im Unendlichen} \\\\'."\n".
                    'Auch das beliebige vorwärts und rückwärts Zählen, die Addition, die Multiplikation und deren Umkehrrechenarten,'."\n".
                    'die Subtraktion und die Division, werden ins Unendliche erweitert.'."\n".
                    'Ebenso gibt es weiter den Betrag einer Zahl, das Modulo und den Rest einer Teilung.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Gesetze im Unendlichen} \\\\'."\n".
                    'Auch bleiben das Kommutativgesetz, das Assoziativgesetz und das Distributivgesetz erhalten.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Anordnung im Unendlichen} \\\\'."\n".
                    'Und die Superial-Zahlen sind, wie gesagt, nach ihrer Größe lexikografisch angeordnet,'."\n".
                    'unter Berücksichtigung ihrer Potenzen von \lm{ \s }.\footnote{\const{SupNum_g_footnote_text_LexikographischeOrdnung}}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Eine unerwartete Verbindung der rationalen Zahlen mit dem Zählen} \\\\'."\n".
                    'Das natürliche Zählen spiegelt sich in den \italic{natürlichen Superial-Zahlen} \lm{ \mathbb{S}_N } wider.'."\n".
                    'Diese enthalten alle endlichen rationalen Zahlen in ihren Koeffizienten der Potenzen von \lm{ s }.'."\n",
                      'Nun wissen wir, dass wir rationale Zahlen nicht ihrer Größe nach aufzählen können,'."\n".
                    'weil sie von ihrer Anordnung her dicht sind.\footnote{\const{SupNum_g_footnote_text_RationaleZahlDichtheit}}'."\n".
                    'Interessanter Weise zählen wir in den natürlichen Superial-Zahlen die rationalen Zahlen ihrer Größe nach,'."\n".
                    'als Koeffizienten der Potenzen von \lm{ \s }, implizit mit.'."\n",
                      'Denn wir zählen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \qquad\; 0,\; 1,\; 2,\; 3,\; \cdots \\\ \quad\quad\; \vdots \\\ \quad \cdots \frac{1}{3} \cdot s - 2,\; \frac{1}{3} \cdot s - 1,\; \frac{1}{3} \cdot s,\; \frac{1}{3} \cdot s + 1,\; \frac{1}{3} \cdot s + 2, \cdots \\\ \quad\quad\; \vdots \\\ \quad \cdots \frac{1}{2} \cdot s - 2,\; \frac{1}{2} \cdot s - 1,\; \frac{1}{2} \cdot s,\; \frac{1}{2} \cdot s + 1,\; \frac{1}{2} \cdot s + 2, \cdots \\\ \quad\quad\; \vdots \\\ \quad \cdots \frac{3}{2} \cdot s - 2,\; \frac{3}{2} \cdot s - 1,\; \frac{3}{2} \cdot s,\; \frac{3}{2} \cdot s + 1,\; \frac{3}{2} \cdot s + 2, \cdots \\\ \quad\quad\; \vdots  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und so fort.'."\n",
                      'Dort wo drei vertikale Punkte ›⋮‹ stehen, werden alle von der Größe her dazwischen liegenden rationalen Koeffizienten mitgezählt.'."\n".
                    'Die Superial-Zahlen bringen so die rationalen Zahlen mit dem Zählen von natürlichen und ganzen Zahlen in Verbindung.'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Weitreichender Erkenntnisgewinn')),
                  array( 'text', array( text => array(
                    'Die Erkenntnisse, die wir mit den Superial-Zahlen und ihren systematischen Vorgängern, den Biordinalzahlen,'."\n".
                    'jetzt schon erhalten, sind also weitreichend.'."\n".
                    'Und wir dürfen erwarten, dass noch ein ganzes Reich an interessanten und erstaunlichen Erkenntnissen'."\n".
                    'zu erforschen und zu schöpfen ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Zahlentheorie der Analysis} \\\\'."\n".
                  '\cond{Eine direkte Verbindung von Analysis und Zahlentheorie} \\\\'."\n".
                    'Über die Definition der \jump{OM:SupNum:Einleitung:Vortext:Ableitung-genau-verstehen}{Ableitung} und'."\n".
                    'der \jump{OM:SupNum:Einleitung:Vortext:Integral-genau-verstehen}{Integration} durch die aktual unendlichen Superial-Zahlen'."\n".
                    'wird die Analysis nun ganz direkt mit der Zahlentheorie verbunden.'."\n".
                    'Denn hierdurch werden nicht „nur“ die Primzahlen mit analytischen Methoden untersucht,'."\n".
                    'sondern die analytischen Methoden werden auf Basis eines unendlichen Produkts von Primzahlen definiert.'."\n",
                      'So spielen jetzt die Primzahlen auf beiden Seiten eine Rolle:'."\n".
                    'Zur Analyse, als neue \italic{Zahlentheorie der Analysis}, wie auch als Objekte der Analyse in der bekannten analytischen Zahlentheorie\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:AnalytischeZahlentheorie:2022}.}.'."\n".
                    'Dies hat weitreichende Konsequenzen, die beispielsweise zum Beweis der Riemannschen Vermutung\footnote{\const{SupNum_g_footnote_text_RiemannschenVermutung}}'."\n".
                    'einen Beitrag leisten könnten.'."\n",
                      'Darüber hinaus wird eine einfache und anschauliche Definition von Ableitungen und Integralen möglich.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Feine Differenzierung des Aktual-Unendlichen} \\\\'."\n".
                    'Durch die Definition der superialen Einheit \lm{ \s } als unendliches Primzahlprodukt erhalten die Superial-Zahlen den Mehrwert, dass sich das Aktual-Unendliche nach den gewohnten Regeln'."\n".
                    'der Arithmetik behandeln und differenzieren lässt.'."\n".
                    'Wichtige Elemente der Arithmetik, wie beispeilsweise natürliche, ganze, gerade und ungerade Zahlen sowie Primzahlen, lassen sich so im Unendlichen untersuchen.'."\n".
                    'Dies hat auch Rückwirkung auf die Betrachtung des Endlichen.'."\n".
                    'Denn so ergeben sich unter anderem neue Möglichkeiten die Verteilung der Primzahlen unter den großen endlichen natürlichen Zahlen besser zu verstehen.'."\n".
                    'Auch die Primfaktorzerlegung und die Ordnung der rationalen Zahlen sind so noch einmal neu zu betrachten.'."\n".
                    ''))),
                    
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:SupNum:Einleitung:Grundlagen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Grundlagen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Einleitung:Grundlagen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung', type => 'back'),
                    )),
                  
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Grundlagen:Ganze-Natuerl-Sup-Zahl-und-Integration', text =>
                'Definition ganzer und natürlicher Superial-Zahlen und die Integration', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Dadurch, dass \lm{ \s } die \lm{ ω }-ste Potenz aller endlichen Primzahlen als Faktoren enthält, kommen wir zu besonderen arithmetischen Eigenschaften'."\n".
                    'bezüglich ihrer Multiplikation mit rationalen Zahlen, Brüchen aus ganzen Zahlen.'."\n"))),
                  array( 'text', array( text => array(
                  '\condb{Die Größenordnung von rationalen Zahlen ist die gleiche, wie die der reellen Zahlen} \\\\'."\n".
                    'Um uns einer sinnvollen Definition von ganzen und natürlichen Superial-Zahlen zu nähern stellen wir fest, dass reelle Zahlen'."\n".
                    'nicht grundsätzlich größer sind als rationale, aber nach den Formeln \jumpname{OM:SupNum:Formale-Entwicklung:Formalien:Equ-alle-n-kleiner-s} und \jumpname{OM:SupNum:Formale-Entwicklung:Formalien:Equ-exist-n-mit-r-kleiner-n} alle kleiner als \lm{ \s }:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  (\forall q \in \mathbb{Q}) (\exists  r \in \mathbb{R}) *[  r < q < s  *]  }'),
                      array( display => 'on',  latex => '{  (\forall r \in \mathbb{R}) (\exists  q \in \mathbb{Q}) *[  q < r < s  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Daraus folgt:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  (\forall r \in \mathbb{R}^{+}) *[  0 < s^{-1} <  r  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  (\forall q \in \mathbb{Q}^{+}) *[  0 < s^{-1} <  q  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Nachfolgend betrachten wir nur noch rationale Zahlen, weil wir uns hier näher mit diesen beschäftigen wollen.'."\n".
                    'Allerdings gilt dies auch alles für reelle Zahlen.'."\n",
                      'Multiplizieren wir die ganze jeweilige rationale Ungleichung mit einer beliebigen positiven rationalen Zahl, dann ergibt sich:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  (\forall q \in \mathbb{Q}^{+}) (\forall k \in \mathbb{Q}^{+}) *[  0 < k \cdot s^{-1} <  k \cdot q  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Weil der letzte Term durch das frei wählbare \lm{ q } alle möglichen positiven Werte annehmen kann, ist dies auch äquivalent mit:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  (\forall q \in \mathbb{Q}^{+}) (\forall k \in \mathbb{Q}^{+}) *[  0 < k \cdot s^{-1} <  q  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können hieran erkennen, dass keine rationale Zahl \lm{ k } existiert, die im Produkt mit \lm{ \s^{-1} } ins Endliche kommen kann.'."\n"))),
                  array( 'text', array( text => array(
                  '\condb{Natürliche Superial-Zahlen} \\\\'."\n".
                    'Wenn wir nun mitten in der Zahlentheorie sind, dann stellt sich auch die Frage, ob es ebenso natürliche Superial-Zahlen \lm{ \mathbb{S}_{N} } gibt.'."\n",
                      'Das ist im Grunde ziemlich leicht zu beantworten, denn natürliche Zahlen sind generell alle positiven ganzen Superial-Zahlen,'."\n".
                    'hier per obiger Definition einschließlich der Null.'."\n".
                    'Um dies zu beurteilen müssen wir sagen können, welche ganzen Superial-Zahlen größer als Null sind.'."\n",
                      'Bei den Superial-Zahlen handelt es sich um eine lexikografische Ordnung\footnote{\const{SupNum_g_footnote_text_LexikographischeOrdnung}}:'."\n".
                    'Die Ordnung der ungleichen Faktoren der größten Potenz bestimmt die Ordnung zweier Superial-Zahlen,'."\n".
                    'ähnlich wie die Wörter in einem Lexikon geordnet werden.'."\n",
                      'Positiv ist eine ganze Superial-Zahl also, wenn der Faktor seiner größten Potenz größer als Null ist.'."\n".
                    'Alle kleineren Potenzen können auch negativ sein, weil die größte Potenz dominant ist,'."\n".
                    'wie in einigen der Beispiele:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a, b \in \mathbb{Q} *) *( \forall z \in \mathbb{Z} *) *[  0  \leq  〈a〉〈b〉〈z〉․  \in  \mathbb{S}_{\N}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  〈5〉․  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 \frac{4}{25} *〉*〈 - \frac{3}{2} *〉〈-5〉․  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 - \frac{4}{25} *〉*〈 \frac{3}{2} *〉〈5〉  \notin  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{Natürliche Superial-Zahlen} lassen sich in den Superial-Zahlen also definieren.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Grundlagen:X', text =>
                'Superiale Primzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um herauszufinden, ob es superiale Primzahlen geben kann und wie diese sinnvollerweise definiert werden können und aussehen,'."\n".
                    'möchte ich mit der Definition von Primzahlen im Endlichen beginnen, damit wir die Eigenschaften dann ins Unendliche erweitern.'."\n"))),
                  array( 'text', array( text => array(
                  '\condb{Primzahlen im Endlichen} \\\\'."\n".
                    'Definition der Primzahlen im Endlichen:\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Primzahl:2021}.}'."\n"))),
                      
                  array( 'text', array( Shape  => 'quote', text => array(
                        'Die Primzahlen sind innerhalb der Menge \lm{ \mathbb{N} } der natürlichen Zahlen dadurch charakterisiert, dass jede von ihnen genau zwei natürliche Zahlen als Teiler hat.'."\n"),
                        addtext => '\footnote{Internet: \\\\ \cite{wiki:Primzahl:2021}, Eigenschaften von Primzahlen.}')),
                      
                  array( 'text', array( text => array(
                    'Nach dieser Definition ist die Eins keine Primzahl.'."\n",
                      'Dass es unendlich viele Primzahlen im Endlichen gibt, können wir durch die Schlussfolgerungskette des folgenden Beweises erkennen:\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Primzahl:2021}, Größte bekannte Primzahl.}'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Bilde die Primfakultät\footnote{\const{SupNum_g_footnote_text_Primorial}} einer Primzahl, das Produkt aller Primzahlen kleiner und einschließlich dieser Primzahl: \lm{ p\# }',
                        'Addiere Eins dazu oder ziehe Eins ab: \lm{ p\# \pm 1 }',
                        '\lm{ p\# \pm 1 } ist nicht durch eine der Primzahlen in \lm{ p\# } ganzzahlig teilbar.',
                        '\lm{ p\# \pm 1 } kann daher entweder nur selber eine Primzahl sein, die dann größer als \lm{ p } ist, oder ihr Primzahlprodukt enthält ausschließlich Primzahlen – mindestens zwei Stück – die nicht in \lm{ p\# } enthalten sind und damit größer als \lm{ p } sein müssen. ',
                        'Alle Primzahlen, durch die \lm{ p\# \pm 1 } teilbar ist, sind damit größer als \lm{ p }.',
                        'Es gibt also immer eine Primzahl, die größer ist als jede gegebene Primzahl \lm{ p }, womit die Menge der endlichen Primzahlen nicht endet.',
                    ))),
                  array( 'text', array( text => array(
                    'Es gibt im Endlichen demnach bewiesenermaßen unendlich viele Primzahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Mit Primzahlen ins Unendliche} \\\\'."\n".
                    'Der vorstehend geführte Beweis zeigt, dass die Primfakultät eine besondere Rolle im Zusammenhang mit Primzahlen und dem Unendlichen spielt.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n",
                      'Beim Beweis der Primzahlprodukt-Vermutung und der unendlich großen Primzahl-Zwillinge ist die Frage, ob die tendenzielle Lücke'."\n".
                    'zwischen einer gegebenen Primzahl \lm{ p } und \lm{ p\# - 1 } eine Frage des Gitters ist oder eine Frage der prinzipiellen Möglichkeit aufgrund'."\n".
                    'der Lage und Größe der Lücke.'."\n",
                      'Angenommen es ist eine Frage der prinzipiellen Möglichkeit aufgrund der Lage und Größe der Lücke.'."\n",
                      'Angenommen die Primzahlen zwischen der gegebenen Primzahl \lm{ p } und \lm{ p\# - 1 } verschwinden allmählich gegen Unendlich:'."\n".
                    'Dann blieben zunehmend die Primzahl-Zwillinge \lm{ p\# \pm 1 } als nächstgrößere Primzahlen direkt nach \lm{ p } übrig.'."\n".
                    'Die Möglichkeit, dass …'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{ p_{x}\# ± 1}   \leq  p_{x}  }'),
                      array( display => 'on',  latex => '{  p_{x}\#  =  p_{x-1}\# \cdot p_{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sqrt{ p_{x}\# }  =  \sqrt{ p_{x-1}\# } \cdot \sqrt{ p_{x} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{x+1}\#  =  p_{x}\# \cdot p_{x+1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sqrt{ p_{x+1}\# }  =  \sqrt{ p_{x}\# \cdot p_{x+1} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \sqrt{ p_{x+1}\# }  =  \sqrt{ p_{x}\# } \cdot \sqrt{ p_{x+1} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ \sqrt{ p_{x+1}\# } }{ \sqrt{ p_{x+1} } }  =  \sqrt{ p_{x}\# }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ \sqrt{ p_{x+1}\# } }{ \sqrt{ p_{x+1} } }  =  \sqrt{ p_{x-1}\# } \cdot \sqrt{ p_{x} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ \sqrt{ p_{x+1}\# } }{ \sqrt{ p_{x+1} } \cdot \sqrt{ p_{x-1}\# } }  =   \sqrt{ p_{x} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{ \sqrt{ p_{x} } \cdot \sqrt{ p_{x+1} } }{ \sqrt{ p_{x+1} } }  =   \sqrt{ p_{x} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    '… könnte verschwinden!?'."\n".
                    'Wenn diese Möglichkeit verschwindet, dann müssen beide \lm{ p\# \pm 1 } selber Primzahlen sein.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Nähern sich die Lücken in den Primzahlen \lm{ \Delta = ( p\# - 1) - p }?',
                        'Dann sind tendenziell alle \lm{ p\# \pm 1 } Primzahlen.',
                        '\color{*Bearb}{(In Arbeit …)}',
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\lm{ \Delta p_{i}\# = p_{i + 1}\# - p_{i}\#}',
                        'Annahme \lm{ \Delta p_{i}\# < \Delta p_{i + 1}\#}',
                        '\color{*Bearb}{(In Arbeit …)}',
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '2 ⋅ 3 ⋅ 5  =  30',
                        '30 / 2  =  15',
                        '\color{*Bearb}{(In Arbeit …)}',
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  :=  \left\{ x ~\middle|~ *( \forall d \in \mathbb{Z} *) *( \forall q_{d} \in \mathbb{Q} \setminus \{0\} *) *( \forall q_{i} \in \mathbb{Q} *) \\\ \qquad\qquad\qquad\qquad\qquad\quad \left[ q_{d} s^{d} + \sum_{( \forall i \in \mathbb{Z})[d > i]} q_{i} s^{i} \right] \right\}  }'),
                      array( display => 'on',  latex => '{  p_{x}\# \pm 1  =  XX  }'),
                      array( display => 'on',  latex => '{  p  =  〈a〉〈b〉〈\pm 1〉․〈0〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Primzahlen in den Superial-Zahlen:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p  =  〈\frac{1}{2}〉〈\pm 1〉․〈0〉  }'),
                      array( display => 'on',  latex => '{  p  =  〈a〉〈b〉〈\pm 1〉․〈0〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Experiment:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{\mathbb{N}\#}{2}  =  ungerade  }'),
                      array( display => 'on',  latex => '{  \frac{\mathbb{N}\#}{2} \pm 1  =  gerade  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Diese beiden Zahlen sind durch keine endliche ungerade Primzahl teilbar.'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{\mathbb{N}\#}{2} - 1  ?=  2^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{\mathbb{N}\#}{2} + 1  =  2^{x} + 2  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{\mathbb{N}\#}{2} + 1  \neq  2^{y}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Oder:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{\mathbb{N}\#}{2} + 1  ?=  2^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{\mathbb{N}\#}{2} - 1  =  2^{x} - 2  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{\mathbb{N}\#}{2} - 1  \neq  2^{y}  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \frac{\mathbb{N}\#}{2} - 1  ?=  2^{x}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{\mathbb{N}\#}{2} + 1  =  2^{x} + 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \frac{\mathbb{N}\#}{2} + 1  =  (2^{x - 1} + 1) \cdot 2  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{\mathbb{N}\#}{2} + 1  \neq  2^{y}  }'),
                      array( display => 'on',  latex => '{  (2^{x - 1} + 1) \cdot 2  =  2^{y}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  (2^{x - 1} + 1)  =  2^{y - 1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y - 1  =  log_{2} (2^{x - 1} + 1)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  log_{2} (2^{x - 1} + 1) + 1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  log_{2} ((2^{x - 1} + 1) \cdot 2)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  log_{2} (2^{x - 1} + 1) + log_{2} 2 }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  y  =  log_{2} (2^{x - 1} + 1) + 1 }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Mit Primzahlen ins Unendliche – 2. Ansatz} \\\\'."\n".
                    'Lässt sich die Körnung der natürlichen Zahlen über das folgende Produkt beschreiben?'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  \frac{ 1 }{ p } *)  =  \frac{ 1 }{ 2 } \cdot \frac{ 1 }{ 3 } \cdot \frac{ 1 }{ 5 } \cdot \frac{ 1 }{ 7 } \cdot …  =  \frac{ 1 }{ ω_{p} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Hälfte aller natürlichen Zahlen enthält die \lm{ 2 }.'."\n".
                    'Ein drittel aller natürlichen Zahlen enthält die \lm{ 3 } und so fort … ?'."\n",
                      'Da würde die Null bei allen mit zu zählen.'."\n".
                    'Es gibt aber sehr viele Zahlen, die sowohl die \lm{ 2 } als auch die \lm{ 3 } oder andere Primzahlen enthalten und diese müssen mitgezählt werden.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn'),
                    )),
                )
          ); ?>


		    	<!  • Fragestellungen und perspektivischer Erkenntnisgewinn  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung:Grundlagen', type => 'back'),
                    )),
                  
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung', text =>
                                           
                'Überrationalitätsvermutung')),
                  /*array( 'text', array( text => array(
                    '\color{*Bearb}{'."\n".
                    '(• √2 lässt sich als periodischer Kettenbruch(https://de.wikipedia.org/w/index.php?title=Kettenbruch&oldid=158343364 ) schreiben: [1;2,2,2,2,2,..] und ist eine quadratische Irrationalzahl.(https://de.wikipedia.org/w/index.php?title=Wurzel_2&oldid=154215301 )) \\\\'."\n".
                    '(• Jede rationale Zahl kann eindeutig durch einen endlichen regulären Kettenbruch dargestellt werden (der mit Hilfe des euklidischen Algorithmus berechnet werden kann).(https://de.wikipedia.org/w/index.php?title=Kettenbruch&oldid=158343364 )) \\\\'."\n".
                    '}'."\n"))),*/
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(Durch den Beweis der \italic{\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}} haben sich die Koeffizienten der Superial-Zahlen von den endlichen rationalen Zahlen auf die Koeffizienten der algebraischen Zahlen erweitert, was noch berücksichtigt werden muss.)} \\\\'."\n".
                    'Diese Vermutung bezieht sich darauf, dass ich vermute, dass die rationalen Koeffizienten der \italic{rationalen Superial-Zahlen} durch Koeffizienten ersetzt werden können,'."\n".
                    'die durch überrationale Brüche dargestellt werden.\footnote[*Entwick]{\color{*Entwick}{Sind überrationale Brüche algebraische Zahlen, deren imaginärer Anteil gleich Null ist?}}'."\n".
                    'Und dies, ohne dass sich die Existenz der natürlichen Superial-Zahlen und der superialen Primzahlen verändern würde.'."\n".
                    'Es wird die Existenz der \italic{überrationalen Superial-Zahlen} auf Basis von \lm{ \s } vermutet.'."\n".
                    'Ein überrationaler Bruch soll ein Bruch sein, der sowohl im Nenner als auch im Zähler eine Zahl aus unendlich vielen verschiedenen endlichen Primfaktoren endlicher Potenz enthält.'."\n".
                    'Ein Produkt eines überrationalen Bruchs \lm{ q_{r} } mit \lm{ \s } ergibt dann die unendliche, natürliche Superial-Zahl \lm{  q_{r} \cdot \s}.'."\n".
                    'Die Menge aller überrationalen Brüche wäre dann \lm{ \mathbb{Qr} }.'."\n".
                    'Die Vermutung bezieht sich darauf, dass solche überrationalen Brüche definierbar sind.'."\n".
                    'Zu untersuchen ist zum Beispiel, ob die Werte von Wurzeln aus rationalen Zahlen durch solche überrationalen Brüche darstellbar sind.'."\n",
                      'Als Beispiel stellt sich die Frage, ist die Wurzel aus Zwei als überrationaler Bruch darstellbar:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sqrt{2}  ?\in  \mathbb{Qr}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \sqrt{2} \cdot s  ?\in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Mehr dazu auf der Seite \italic{\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}}.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Primzahlenprodukt-Vermutung', text =>
                                           
                'Primzahlprodukt-Vermutung')),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Eigene Überlegungen}',
                    '• Betrachten wir die Primzahlen als alle möglichen Grundschwingungen in den natürlichen Zahlen, dann ist ihr Produkt die Zahl, bei der all diese Grundschwingungen das erste Mal wieder zusammentreffen. Daher wiederholen sich die natürlichen Zahlen ab der Zahl \lm{ ω }. Nur folgt daraus, dass z.B. \lm{ ω - 1} nicht zu den natürlichen Zahlen gehört. \lm{ ω - n } für \lm{ n \in \mathbb{N} } ist diese Struktur gespiegelt, quasi rückwärts.',
                    '• Siehe Erklärung für Raimund: Ordner "20200904 - Wissenschaft mit Raimund - Superial-Zahlen"',
                    '• Siehe meine Latex-Abhandlungen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(Der Beweis der \italic{\jumpname{OM:SupNum:Primzahlprodukt-Vermutung}} muss noch berücksichtigt werden.)} \\\\'."\n".
                    'Meine langjährigen Spielereien haben in mir die Vermutung geweckt, dass der unendlich große Wert des Produkts aller endlichen Primzahlen ebenfalls'."\n".
                    'die Größe von \lm{ ω } hat.'."\n".
                    'Dies würde auf folgende Formeln hinauslaufen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  p *)  =  ω_{p}  }'),
                      array( display => 'on',  latex => '{  ω_{p}  ?=  ω  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s  =  ω_{p}^{ω}  ?=  ω^{ω}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Richtigkeit dieser Vermutung setzt eine Eigenschaft der Primzahlverteilung unter den extrem großen natürlichen Zahlen voraus, die so'."\n".
                    'allgemein wohl nicht erwartet wird.'."\n".
                    'Es wird letztendlich behauptet, dass das Produkt aller Primzahlen innerhalb der natürlichen Zahlen genau so groß ist, wie die Anzahl der natürlichen Zahlen selbst.'."\n".
                    'Dies kann nur sein, wenn unter den extrem großen natürlichen Zahlen nur noch sehr wenige Primzahlen vorkommen, sie dort also im Prinzip verschwinden und schließlich eigentlich nicht mehr vorkommen.'."\n".
                    'Oder es gibt zwischen den endlichen, natürlichen Zahlen und ihrer Anzahl \lm{ ω } eine riesige Lücke, wonach \lm{ ω - 1} dann keine endliche, natürliche Zahl wäre.'."\n".
                    '\lm{ ω - 1 } wäre demnach das Symbol für eine aktual unendliche Zahl.'."\n",
                      'Ich vermute genau letzteres, nicht mehr nur, weil es meiner logischen Intuition entspricht, sondern, weil die Konstruktion meiner \jump{OM:BiOrd:Einleitung}{Biordinalzahlen} genau diese \jump{OM:BiOrd:Einleitung:NeueEinsichten:NeueEinsichtenZuPosAktualUnendl}{Lücke} erkennen lässt.'."\n".
                    'Denn die Primzahlen kommen innerhalb der natürlichen Zahlen nicht zu einem endlichen Ende, wie sich zeigen lässt.'."\n".
                    'Es muss auch diese Lücke geben, weil die natürlichen Zahlen selber nicht im Endlichen zum Ende kommen und \lm{ ω - 1 } damit nicht quasi die größte oder letzte natürliche Zahl symbolisieren kann.'."\n".
                    'Die Lücke könnte also tatsächlich so groß sein, dass das Produkt aller endlicher Primzahlen gleich der Anzahl der natürlichen Zahlen ist.'."\n".
                    'Auch wenn dies erst einmal überraschent erscheint.'."\n",
                      'Schaut man sich den Grafen der Primfakultät\footnote{\const{SupNum_g_footnote_text_Primorial}} \lm{ n\# } an, so steigt dieser anfangs sehr viel schneller, als der der Anzahl der natürlichen Zahlen.\footnote{\const{SupNum_g_footnote_text_PrimorialWikiWerte}}'."\n".
                    'Der Graf der Primfakultät kann am „Ende“ der natürlichen Zahlen nur dann wieder gleich groß werden, wenn ab einem bestimmten Punkt im Prinzip, vielleicht quasi erst im Aktual-Unendlichen, keine Primzahlen mehr in das Produkt hinzu kommen.'."\n".
                    'Die Primfakultät, bezogen auf die Anzahl der natürlichen Zahlen, \lm{ n\# - n } oder auch \lm{ \frac{ n\# }{ n } } kann im Endlichen kein Maximum haben.'."\n".
                    'Denn immer, wenn wieder eine Primzahl auftaucht, wird es „übermächtig“ groß, und die Primzahlen hören nicht auf aufzutauchen.'."\n".
                    'Die Vermutung muss also mit der Lücke zwischen allen endlichen natürlichen Zahlen \lm{ \mathbb{N} } und \lm{ ω } zu tun haben.'."\n".
                    'Wie man dies zumindestens mal eingrenzen oder abschätzen kann, zeige ich auf der Seite \italic{\jumpname{OM:SupNum:Primzahlprodukt-Vermutung}}.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Primzahlenprodukt-Vermutung', text =>
                                           
                'Genauere Differenzierung der Zahlenarten', subline =>
                  'Rationale, irrationale, algebraische und transzendente Zahlen')),
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                  array( 'text', array( text => array(
                    'Die Definition des Aktual-Unendlichen durch alle endlichen Primzahlen,'."\n".
                    'genauer die Definition der vollständigen Induktion\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    'in Form des Symbols \lm{ ω } durch das \jump{OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Primzahlenprodukt-Vermutung}{Produkt aller endlichen Primzahlen} und'."\n".
                    'darauf basierend die Definition der superialen Basis oder Einheit \lm{ \s }'."\n".
                    'in dieser Arbeit, erlaubt uns noch einmal differenziert über die Zahlenarten nachzudenken.'."\n",
                      'Wie oben schon beschrieben gibt es die Vermutung, die Koeffizienten der algebraischen Zahlen'."\n".
                    'könnten ein Teil des Primzahl-Flächenprodukts von \lm{ \s } sein – \jump{OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung} –,'."\n".
                    'dass einem Bruch unendlich vieler endlicher Primzahlen mit jeweils endlicher Potenz entspricht.'."\n".
                    'Dies würde folglich dazu führen, dass wir die Koeffizienten der Superial-Zahlen um die Koeffizienten'."\n".
                    'der algebraischen Zahlen erweitern könnten.'."\n".
                    'Diese dann von uns überrationale Zahlen genannten irrationalen Zahlen würden nur aus endlichen Zahlen'."\n".
                    'definiert werden können.'."\n",
                      'Bezüglich der transzendenten Zahlen zeigen wir allerdings exemplarisch, dass die \jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{Eulersche Zahl}\footnote{\const{SupNum_g_footnote_text_EulerscheZahl}}'."\n".
                    '\lm{ \e } unendlich kleine aktual unendliche Summanden enthält, die nicht verschwinden können.'."\n".
                    'Dies gelingt uns mit der hier eingangs formulierten Definition der Ableitung durch die Superial-Zahlen.'."\n".
                    'Demnach ist \lm{ \e } nicht einmal eine Superial-Zahl der hier vorgestellten 1. Ordnung,'."\n".
                    'sondern noch höherer Ordnung, die noch genau zu definieren ist.'."\n",
                      'Es stellen sich in meinen Augen die Fragen:'."\n",
                      'Gehört die transzendente Zahl \lm{ \e } nach der neuen Erkenntnis zu den reellen Zahlen,'."\n".
                    'wenn sie doch nicht verschwindende unendlich kleine aktual unendliche Summanden enthält?'."\n",
                      'Gehören gegebenenfalls auch noch andere transzendente Zahlen, \jump{OM:SupNum:Eulersche-Zahl-e-Funktion:Die-Quadratur-des-Kreises}{wie \lm{ \pi }},'."\n".
                    'dann nicht zu den reellen Zahlen?'."\n",
                      'Diese und noch weitere Überlegungen führen uns schließlich zur Kontinuumshypothese.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:X', text =>
                                           
                'Einsichten und Fragen zur Kontinuumshypothese', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die vorstehenden Fragen und weitere Einsichten, die sich durch die Superial-Zahlen ergeben,'."\n".
                    'führen uns zu einer neuen \jump{OM:SupNum:Eigenschaften:UntersuchungenZurKontinuumshypothese}{Untersuchung der Kontinuumshypothese}.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung'),
                    )),
                )
          ); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
