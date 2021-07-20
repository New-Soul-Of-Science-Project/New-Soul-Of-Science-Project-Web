<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:ZS:Einleitung'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:ZS:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'invis', text => array(
                    '\\bold{Ist die Geometrie fraktal?} – Ist ein Punkt, eine Linie und eine Fläche fraktal?',
                    '• Das Problem der Geometrie, eine Linie aus Punkten aufzubauen (Verwandt mit der Kontinuumshypothese): Die nullte, die erste und die zweite Dimension haben keine Ausdehnung, kein Volumen, – also Punkt, Linie und Fläche – und in gewisser Weise existieren sie so nicht. Aber mit ihnen sollen wir die dritte Dimension aus Punkten (Ecken) und Flächen konstruieren, die dann eine Ausdehnung hat und plötzlich existiert. Das scheint komisch und merkwürdig. Siehe Nassim Haramein, Die Entschlüsselung des Universums, S. 11-14, hier S. 12-13.',
                    '– Es geht einfach darum, wie man aus Punkten eine Linie exakt konstruieren kann: Handelt es sich wirklich um einen absolut unendlich kleinen Punkt, dann bekommen wir ein Problem. Es scheint mir, dass ein strukturierter Punkt, mit aktualunendlich kleiner Ausdehnung hier Abhilfe schaffen kann. Ich kann nämlich in Form von aktualunendlich großen Zahlen beschreiben, wie oft ich diesen superialen Punkt aneinander legen muss. Dies kann ich bei absolut unendlich kleinen Punkten nicht tun.',
                    '– Bietet hier die aktualunendlich kleine Hülle der superial-kleinen Zahlen um einen Punkt einen logischen Lösungsansatz für die Geometrie? Denn bei einem absolut unendlich kleinen Punkt können wir nicht sicher und exakt definieren, wie oft wir ihn aneinander legen müssen, um eine Gerade einer bestimmten Länge zu erzeugen. Bei einem Punkt mit superial-kleiner Hülle ist dies wohldefiniert.',
                    '– Ist die Geometrie also eigentlich fraktal? Was durch die Analysis, mit ihren Ableitungen und Integralen, schließlich sichtbar wird?',
                    '\\bold{Aktuelle Forschung}',
                    '• Der Fields-Medaillenträger 2018, Peter Scholze, bringt neue Zusammenhänge zwischen der Arithmetik und der Geometrie ins Spiel.',
                    '\\bold{Zeit in der Mathematik}',
                    '• Einflechten, dass die Arithmetik aus dem Zählen geboren wird. Dies ist eine Definition durch einen Prozess. Hierdurch kommt Zeit ins Spiel. Die Betrachtung der Primfaktorenzerlegung der natürlichen Zahlen zeigt auf, dass an diesem Prozess Regelsystemen ähnliche rhythmische Strukturen beteiligt sind.',
                    '\\bold{Korrekturen}',
                    '• Der Text ist schwer verständlich und manchmal etwas komisch formuliert. Alles noch einmal überarbeiten !!!',
                    '• Fehler: Das Äquivalenzzeichen vor den konkreten Ableitungsbeispielen ist verkehrt, wenn die davor stehende Formel eingeblendet ist!',
                    '\\bold{Forschungsideen}',
                    '• Das Pascal-Sierpinski-Dreieck ist eine Geometrie, in der Primzahlen ein außergewöhnliche Rolle spielen.\\footnote{Vgl. \\cite{Plichta:GottesGeheimeFormel:1995}, S. 263ff., 271ff. 306ff.. \\\\ Internet: \\\\ Vgl. \\jump[https://de.wikipedia.org/w/index.php?title=Sierpinski-Dreieck&oldid=179105092#Zusammenhang_mit_dem_Pascalschen_Dreieck]{}{Wikipedia, Sierpinski-Dreieck, Zusammenhang mit dem Pascalschen Dreieck}.}',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{Seite befindet sich im Aufbau …}'."\n"))),
                      
                  array( 'figure',
                    array_merge( $ZS_g_figure_ary_GraviLeptonWirkung, array( name => 'OM:ZS:Einleitung:Vortext:Fig-GraviLeptonWirkung'))),
                      
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'Motivation')),
                  array( 'text', array( text => array(
                    'In der Schule fand ich Ableitungen und Integrale immer sehr faszinieren.'."\n".
                    'Es war für mich erstaunlich, wie man über die Unendlichkeit ganz neue Erkenntnisse und Formeln gewinnen konnte.'."\n".
                    'Daraus hat sich damals ein tiefes Bedürfnis entwickelt zu verstehen, was dabei genau passiert.'."\n".
                    'Ich spielte viel mit dem Ansatz der Ableitung herum, was schließlich dazu führte, dass ich begriff, dass der dort verwendete Limes nicht nur dazu führt,'."\n".
                    'dass ein bestimmtes Glied der sich ergebenen Summe dominant in den Vordergrund tritt und das Ergebnis bestimmt.'."\n".
                    'Mir wurde auch klar, dass all die anderen Summanden, die unendlich klein und damit scheinbar unbedeutend wurden, eine Welt darstellten, die so quasi im Nirvana versank.'."\n",
                      'Genau diese „versunkene“ Welt weckte mein Interesse.'."\n".
                    'Irgendwie war ja auch klar, dass beim Integrieren die versunkene Welt schließlich wieder auftauchen musste.'."\n".
                    'Wie könnte sie da unwiederbringlich „vernichtet“ worden sein?'."\n".
                    'Durch das Herumspielen begriff ich:'."\n".
                    'Man konnte auch ins Unendliche gehen, ohne den Limes zu benutzen!'."\n".
                    'Ohne die versinkenden Summanden wirklich zu Null werden zu lassen, indem man sie als Null definiert.'."\n".
                    'Dies funktionierte, wenn man die beim Ableiten gegen Null gehenden Summanden selber als unendlich klein, aber nicht als verschwindend betrachtete.'."\n".
                    'Ich setzte den gegen Null gehenden Summanden \\term{Δx ≔ s^{-1}}.'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  =  \lim\limits_{\Delta x \rightarrow +0}{ \frac{ f(x + \Delta x) - f(x) }{ \Delta x } }  }'),
                      array( display => 'on',  latex => '{  \Delta x  :=  s^{-1}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  :=  \frac{ f(x + s^{-1}) - f(x) }{ s^{-1} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dabei war \\term{s^{-1}} ein neues Symbol, über das ich zunächst nur annahm, dass es kleiner als jede positive Zahl war und doch größer als Null.'."\n".
                    'Ähnlich wie bei den komplexen Zahlen die imaginäre Einheit \\term{i} war auch mein \\term{s^{-1}} eine neue Einheit, die ich als \\italic{superial kleine Einheit} bezeichnete.'."\n".
                    'In der Mathematik ist es kein Problem ein neues Symbol zu kreieren und zu definieren, solange sich dadurch keine Widersprüche ergeben.\\footnote{Sekundärliteratur \\\\ Vgl. \\cite{Freistetter:DieFreiheitDerImaginaerenZahlen:2016}. \\\\ Internet: \\\\ Vgl. \\cite{Freistetter:DieFreiheitDerMathematik:2016}.}'."\n",
                      'Die superial kleine Einheit \\term{s^{-1}} führte dazu, dass die sonst bei der Ableitung verschwindenden Summanden \\term{a_{k}} nicht verloren gehen, sondern in unendlich kleinen'."\n".
                    'Dimensionen \\term{a_{-1}⋅s^{-1} + a_{-2}⋅s^{-2} + a_{-3}⋅s^{-3} + …} erhalten blieben, also in einer \\italic{superial} kleinen Welt.'."\n".
                    'Von hier können sie auch beim Integrieren wieder auftauchen.'."\n".
                    'Die Dimension \\term{a_{0}⋅s^{0} = a_{0}} stellt dann die uns bekannten, endlichen Zahlen dar, weil \\term{s^{0} = 1} ist, wie gewohnt.'."\n",
                      'So ergibt sich als Beispiel für die Funktion \\term{f(x) = x^{2}}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      //%! array( display => 'off', latex => '{  f\'(x)  =  \frac{ f(x + s^{-1}) - f(x) }{ s^{-1} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  \frac{ \left(x + s^{-1}\right)^{2} - x^{2} }{ s^{-1} }  }',
                                               latex_if_visible => '{  \Leftrightarrow  f\'(x)  =  \frac{ \left(x + s^{-1}\right)^{2} - x^{2} }{ s^{-1} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ \left(x^{2} + 2 x \cdot s^{-1} + s^{-2}\right) - x^{2} }{ s^{-1} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ 2 x \cdot s^{-1} + s^{-2} }{ s^{-1} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  2 x + s^{-1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wenn man also \\term{s^{-1}} zu Null setzt, dann kommt das übliche Ergebnis \\term{f\'(x) = 2x} heraus.'."\n",
                      'Für \\term{f(x) = x^{3}} ergibt sich'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      //%! array( display => 'off', latex => '{  f\'(x)  =  \frac{ f(x + s^{-1}) - f(x) }{ s^{-1} }  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  f\'(x)  =  \frac{ \left(x + s^{-1}\right)^{3} - x^{3} }{ s^{-1} }  }',
                                               latex_if_visible => '{  \Leftrightarrow  f\'(x)  =  \frac{ \left(x + s^{-1}\right)^{3} - x^{3} }{ s^{-1} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ \left(x^{3} + 3 x^{2} \cdot s^{-1} + 3 x \cdot s^{-2} + s^{-3}\right) - x^{3} }{ s^{-1} }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  f\'(x)  =  \frac{ 3 x^{2} \cdot s^{-1} + 3 x \cdot s^{-2} + s^{-3} }{ s^{-1} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  f\'(x)  =  3 x^{2} + 3 x \cdot s^{-1} + s^{-2}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wenn man also \\term{s^{-1}} zu Null setzt, dann kommt das übliche Ergebnis \\term{f\'(x) = 3x^{2}} heraus.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'Eine fraktale Struktur', subline =>
                  '… erste Erkenntnis')),
                  array( 'text', array( text => array(
                    'Dieses Vorgehen gab dem unendlich Kleinen eine interessante fraktale Struktur.'."\n".
                    'Ihre Selbstähnlichkeit bezieht sich darauf, dass die Gerade der endlichen Zahlen, um die unendlich kleinen, superialen Zahlen erweitert, auf diese Weise zwischen'."\n".
                    'bestimmten, noch zu definierenden endlichen Zahlen noch unendlich viele, unendlich kleine Zahlengeraden verschiedenster Dimensionsgrößen hat.'."\n".
                    'Erstaunlicherweise kennt die Mathematik demnach nicht nur ortogonale Dimensionen\\color{*Bearb}{(Verweis)}, die senkrecht zueinander stehen, sondern auch unendlich kleine, lineare Dimensionen,'."\n".
                    'die sich in fraktaler Weise zwischen unseren endlichen Zahlen verstecken.\\footnote[*Entwick]{\\color{*Entwick}{Ich frage mich, welchen (fraktalen) Zusammenhang gibt es zwischen den ortogonalen und den \\italic{superialen Dimensionen}?}}'."\n".
                    'Auf Basis der \\italic{superialen Einheit} \\term{s} lassen sich folglich sogar unendlich große, lineare Dimensionen \\term{… + a_{3}⋅s^{3} + a_{2}⋅s^{2} + a_{1}⋅s^{1}} beschreiben.'."\n".
                    'Zwischen denen liegen dann unsere endlichen Zahlen und die superial kleinen Zahlen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:Frage-und-zweite-Erkenntnis', text =>
                                           
                'Was ist \\term{s}?', subline =>
                  '… zweite Erkenntnis')),
                  array( 'text', array( text => array(
                    'So stellte sich schließlich die genannte Frage:'."\n".
                    'Was \\term{s} denn konkret ist?'."\n".
                    'Könnte man das noch näher definieren und damit noch mehr Sinn stiften und noch mehr Erkenntnis gewinnen?'."\n",
                      'Bei der Überlegung dieser Frage viel mir nach längerem Ringen auf, dass sich das Zählen von natürlichen Zahlen mit den \\italic{Superial-Zahlen} \\term{\M(S)} ins unendlich Große'."\n".
                    'vorsetzen ließ.'."\n".
                    'So ließ sich die Menge der natürlichen Superial-Zahlen \\term{\M(S)_{N}} definieren.'."\n".
                    'Dabei gab es einen Übergang ins Unendliche, der im Dunkeln lag, aber man kam nach belieben irgendwo im unendlich großen heraus:'."\n".
                    'Man zählt \\term{0}, \\term{1}, \\term{2}, \\term{3}, …, \\term{s-3}, \\term{s-2}, \\term{s-1}, \\term{s}, \\term{s+1}, \\term{s+2}, \\term{s+3}, …,'."\n".
                    '\\term{s^{2}-3}, \\term{s^{2}-2}, \\term{s^{2}-1}, \\term{s^{2}}, \\term{s^{2}+1}, \\term{s^{2}+2}, \\term{s^{2}+3}, …'."\n".
                    'und so fort.'."\n".
                    '\\term{s} müsste dann eine natürliche, unendlich große Zahl sein.'."\n".
                    'Interessanterweise kamen dabei ganze, endlich große, negative Summanden ins Spiel, die man bei natürlichen Zahlen erst einmal nicht vermuten würde.'."\n".
                    'Man kann von \\term{s} eine beliebig große, endliche, natürliche Zahl abziehen, ohne dass man in der Summe ins Negative kommen kann.'."\n",
                      'Und man kann auch folgendermaßen zählen, ohne unbedingt in Widersprüche zu geraten:'."\n".
                    '\\term{0}, \\term{1}, \\term{2}, \\term{3}, …, \\term{1/2⋅s-3}, \\term{1/2⋅s-2}, \\term{1/2⋅s-1}, \\term{1/2⋅s}, \\term{1/2⋅s+1}, \\term{1/2⋅s+2}, \\term{1/2⋅s+3}, …'."\n".
                    'und so fort.'."\n".
                    'Da stellt sich die Frage, unter welchen Umständen \\term{a_{1}⋅s} eine unendlich große, natürliche, also eine ganze Zahl sein kann?'."\n".
                    'Das Beispiel \\term{1/2⋅s} müsste dann, wie \\term{s}, eine unendlich große, natürliche Zahl sein.'."\n".
                    '\\term{s} müsste also ganzzahlig durch Zwei teilbar sein.'."\n".
                    'Im mathematischen Sinn sind folglich die Primfaktoren von \\term{s} interessant.'."\n".
                    'Es erscheint jedenfalls schon einmal schlüssig, dass eine unendlich große Zahl, wenn durch irgendeine endliche natürliche Zahl geteilt wird, immer noch'."\n".
                    'eine unendlich große Zahl ist und nicht dadurch endlich wird.'."\n".
                    'Die Zahl \\term{s} kann allenfalls endlich werden, wenn sie unendlich oft durch endliche, natürliche Zahlen geteilt wird.'."\n".
                    'Soll \\term{s} eine unendliche, natürliche Zahl sein, dann müsste sie demnach ein Produkt unendlich vieler endlicher, natürlicher Zahlen sein.'."\n".
                    'Wenn \\term{s} tätsächlich durch jede beliebige endliche, natürliche Zahl teilbar sein soll, ihr Produkt mit jeder rationalen Zahl \\term{q} wäre dann wieder eine'."\n".
                    'unendliche, natürliche Zahl \\term{q⋅s}, dann muss sie selber eine Primfaktorenzerlegung haben in der jede Primfaktorenzerlegung einer endlichen, natürlichen Zahl steckt.'."\n".
                    'Da auch \\term{q⋅1/2⋅s}, also allgemein \\term{q_{0}⋅q_{1}⋅q_{2}⋅q_{3}⋅ … ⋅s}, immer eine unendliche, natürliche Zahl sein sollte,'."\n".
                    'muss die Primfaktorenzerlegung von \\term{s} sogar endlich beliebig oft die Primfaktorenzerlegung jeder endlichen, natürlichen Zahl enthalten.'."\n",
                      'Folgendes Primzahlprodukt sollte das kleinste Produkt aus unendlich vielen Primfaktoren sein, dass diese Bedingung erfüllt, dabei ist \\term{\M(P)} die Menge aller endlicher Primzahlen:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  :=  \displaystyle \prod_{\forall n \in \mathbb{N}}  \left( \prod_{\forall p \in \mathbb{P}}  p \right)  }',
                                               label_name => 'OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N', label_text => '\\name{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'In diesem Produkt wird erst einmal das Produkt aller endlicher Primzahlen gebildet:'."\n".
                    '\\term{2⋅3⋅5⋅7⋅11⋅13⋅…}'."\n".
                    'Anschließend wird es so oft mit sich selber mal genommen, wie groß die Anzahl der endlichen, natürlichen Zahlen ist.'."\n".
                    'Diese Anzahl wird in der Mengenlehre mit \\term{⍵} bezeichnet.'."\n".
                    'So können wir über das Symbol \\term{#} der Anzahl der Elemente einer Menge auch definieren, dass ich hier auf unendlich große, abzählbare Mengen erweitere:\\color{*Bearb}{(Verweis auf Wikipedia \\jump[https://de.wikipedia.org/w/index.php?title=Mächtigkeit_(Mathematik)&oldid=200036198]{}{Mächtigkeit (Mathematik), Mächtigkeit bei endlichen Mengen})}'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{N}   :=  \mathbb{N}_{0}  }',
                                               label_name => 'OM:SupNum:Einleitung:Vortext:Equ-N-ist-mit-Null', label_text => '\\name{OM:SupNum:Einleitung:Vortext:Equ-N-ist-mit-Null}', label_incr => true),
                      array( display => 'on',  latex => '{  \omega   :=  \#\mathbb{N}  }',
                                               label_name => 'OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N', label_text => '\\name{OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  s  :=  \displaystyle \left( \prod_{\forall p \in \mathbb{P}}  p \right)^{\omega}  }',
                                               label_name => 'OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega', label_text => '\\name{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wie Formel \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-N-ist-mit-Null} definiert, setze ich voraus, dass die natürlichen Zahlen die Null enthalten.'."\n".
                    'Den Grund dafür verdeutliche ich im Abschnitt \\italic{\\jumpname{OM:SupNum:Einleitung:Grundlagen}}.'."\n",
                      'Über diese Definition von \\term{s} kommt man also wirklich zu einer Erweiterung der natürlichen Zahlen ins Unendliche, in der man'."\n".
                    'beliebig vorwärts und rückwärts zählen kann.'."\n".
                    'Wie ich noch zeigen werde lässt sich eine entsprechende Erweiterung der ganzen Zahlen definieren.'."\n".
                    'Auch eine Erweiterung der Primzahlen kann auf diese Weise definiert werden und man erhält die Menge \\term{\M(S)_{P}} der \\italic{superialen Primzahlen}.'."\n".
                    'Zum Beispiel sind die Zahlen \\term{s-1} und \\term{s+1} unendlich große Primzahlen, weil sie durch keine endliche Primzahl ganzzahlig teilbar sind'."\n".
                    'und auch keine andere Zahl in diesem System gefunden werden kann, die diese Zahlen ganzzahlig teilt.'."\n".
                    'Die Zahlen \\term{s±2} sind hingegen beide durch \\term{2} teilbar, also keine Primzahlen.'."\n".
                    'Diese Erweiterung der Primzahlen ins Unendliche ist interessant, weil sie die Verteilung der Primzahlen im Unendlichen beleuchtet und so auch neue Einsichten für die endlichen Primzahlen verschaffen kann.'."\n",
                      'Dadurch, dass die Superial-Zahlen, durch diese sinnvolle Definition natürlicher Superial-Zahlen, dann zunächst mit rationalen Koeffizienten definiert sind, kommt man in die Lage, dass die rationalen Zahlen als Koeffizienten von \\term{s},'."\n".
                    'wie oben beschrieben, in der Reihenfolge ihrer Größe quasi mitgezählt werden:'."\n".
                    'Man zählt'."\n".
                    '\\term{0}, \\term{1}, \\term{2}, \\term{3}, …,'."\n".
                    '\\term{1/3⋅s-3}, \\term{1/3⋅s-2}, \\term{1/3⋅s-1}, \\term{1/3⋅s}, \\term{1/3⋅s+1}, \\term{1/3⋅s+2}, \\term{1/3⋅s+3}, …,'."\n".
                    '\\term{1/2⋅s-3}, \\term{1/2⋅s-2}, \\term{1/2⋅s-1}, \\term{1/2⋅s}, \\term{1/2⋅s+1}, \\term{1/2⋅s+2}, \\term{1/2⋅s+3}, …,'."\n".
                    '\\term{2/3⋅s-3}, \\term{2/3⋅s-2}, \\term{2/3⋅s-1}, \\term{2/3⋅s}, \\term{2/3⋅s+1}, \\term{2/3⋅s+2}, \\term{2/3⋅s+3}, …,'."\n".
                    '\\term{s-3}, \\term{s-2}, \\term{s-1}, \\term{s}, \\term{s+1}, \\term{s+2}, \\term{s+3}, …'."\n".
                    'und so fort.'."\n".
                    'Dort wo die drei Punkte »…« stehen werden alle von der Größe her dazwischen liegenden rationalen Koeffizienten mitgezählt.'."\n".
                    'Die Superial-Zahlen bringen so die rationalen Zahlen mit dem Zählen von natürlichen und ganzen Zahlen in Verbindung.'."\n",
                      'Insgesamt steht so zu erwarten, dass die aus diesen Zahlen zu ziehenden Erkenntnisse weitreichend sein könnten.'."\n".
                    'Eine wichtige Vermutungen ist die \\jump{OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung}{\\italic{Überrationalitätsvermutung}}, die besagt, dass die Superial-Zahlen auch mit \\italic{überrationalen Brüchen} als'."\n".
                    'Koeffizienten funktionieren würden.'."\n".
                    'Oder noch genauer ausgedrückt stellt sich die Frage, ob es solche überrationalen Brüche wirklich gibt und welche bedeutenden Zahlenwerte sie darstellen können.'."\n".
                    'Eine der sehr interessanten Vermutungen, die sich aus den Superial-Zahlen ergeben, ist die \\jump{OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Primzahlenprodukt-Vermutung}{\\italic{Primzahlenprodukt-Vermutung}}.'."\n".
                    'Wäre sie richtig, würde sie wichtige Aussagen über die Verteilung der endlichen Primzahlen unter den extrem großen natürlichen Zahlen erlauben.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:Ueberrationalitaetsvermutung', text =>
                                           
                'Überrationalitätsvermutung')),
                  /*array( 'text', array( text => array(
                    '\\color{*Bearb}{'."\n".
                    '(• √2 lässt sich als periodischer Kettenbruch(https://de.wikipedia.org/w/index.php?title=Kettenbruch&oldid=158343364 ) schreiben: [1;2,2,2,2,2,..] und ist eine quadratische Irrationalzahl.(https://de.wikipedia.org/w/index.php?title=Wurzel_2&oldid=154215301 )) \\\\'."\n".
                    '(• Jede rationale Zahl kann eindeutig durch einen endlichen regulären Kettenbruch dargestellt werden (der mit Hilfe des euklidischen Algorithmus berechnet werden kann).(https://de.wikipedia.org/w/index.php?title=Kettenbruch&oldid=158343364 )) \\\\'."\n".
                    '}'."\n"))),*/
                  array( 'text', array( text => array(
                    'Diese Vermutung bezieht sich darauf, dass ich vermute, dass die rationalen Koeffizienten der \\italic{rationalen Superial-Zahlen} durch Koeffizienten ersetzt werden können,'."\n".
                    'die durch überrationale Brüche dargestellt werden.\\footnote[*Entwick]{\\color{*Entwick}{Sind überrationale Brüche algebraische Zahlen, deren imaginärer Anteil gleich Null ist?}}'."\n".
                    'Und dies, ohne dass sich die Existenz der natürlichen Superial-Zahlen und der superialen Primzahlen verändern würde.'."\n".
                    'Es wird die Existenz der \\italic{überrationalen Superial-Zahlen} auf Basis von \\term{s} vermutet.'."\n".
                    'Ein überrationaler Bruch soll ein Bruch sein, der sowohl im Nenner als auch im Zähler eine Zahl aus unendlich vielen verschiedenen Primfaktoren endlicher Potenz enthält.'."\n".
                    'Ein Produkt eines überrationalen Bruchs \\term{u} mit \\term{s} ergibt dann die unendliche, natürliche Superial-Zahl \\term{u⋅s}.'."\n".
                    'Die Menge aller überrationalen Brüche wäre dann \\term{\M(U)}.'."\n".
                    'Die Vermutung bezieht sich darauf, dass solche überrationalen Brüche definierbar sind.'."\n".
                    'Zu untersuchen ist zum Beispiel, ob die Werte von Wurzeln aus rationalen Zahlen durch solche überrationalen Brüche darstellbar sind.'."\n",
                      'Als Beispiel stellt sich die Frage, ist die Wurzel aus Zwei als überrationaler Bruch darstellbar:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \exists  \,\,  \sqrt{2}  ?\in  \mathbb{U}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \sqrt{2} \cdot s  ?\in  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:Primzahlenprodukt-Vermutung', text =>
                                           
                'Primzahlenprodukt-Vermutung')),
                      
                  array( 'notice', array( Display => 'invis', text => array(
                    '\\bold{Eigene Überlegungen}',
                    '• Siehe Erklärung für Raimund: Ordner "20200904 - Wissenschaft mit Raimund - Superial-Zahlen"',
                    '• Siehe meine Latex-Abhandlungen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Meine langjährigen Spielereien haben in mir die Vermutung geweckt, dass der unendlich große Wert des Produkts aller endlichen Primzahlen ebenfalls'."\n".
                    'die Größe von \\term{⍵} hat.'."\n".
                    'Dies würde auf folgende Formeln hinauslaufen:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \displaystyle \left( \prod_{\forall p \in \mathbb{P}}  p \right)  ?=  \omega  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s  ?=  \omega^{\omega}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Richtigkeit dieser Vermutung setzt eine Eigenschaft der Primzahlverteilung unter den extrem großen natürlichen Zahlen voraus, die so'."\n".
                    'allgemein wohl nicht erwartet wird.'."\n".
                    'Es wird letztendlich behauptet, dass das Produkt aller Primzahlen innerhalb der natürlichen Zahlen genau so groß ist, wie die Anzahl der natürlichen Zahlen selbst.'."\n".
                    'Dies kann nur sein, wenn unter den extrem großen natürlichen Zahlen nur noch sehr wenige Primzahlen vorkommen, sie dort also im Prinzip verschwinden und schließlich eigentlich nicht mehr vorkommen.'."\n".
                    'Oder es gibt zwischen den endlichen, natürlichen Zahlen und ihrer Anzahl \\term{⍵} eine riesige Lücke, wonach \\term{⍵-1} dann keine endliche, natürliche Zahl wäre.'."\n".
                    '\\term{⍵-1} wäre demnach das Symbol für eine aktualunendliche Zahl.'."\n".
                    'Ich vermute genau letzteres, weil es meiner logischen Intuition entspricht.'."\n".
                    'Denn die Primzahlen kommen innerhalb der natürlichen Zahlen nicht zu einem endlichen Ende, wie sich zeigen lässt.'."\n".
                    'Es muss auch diese Lücke geben, weil die natürlichen Zahlen selber nicht im Endlichen zum Ende kommen und \\term{⍵-1} damit nicht quasi die größte oder letzte natürliche Zahl symbolisieren kann.'."\n".
                    'Die Lücke könnte also tatsächlich so groß sein, dass das Produkt aller endlicher Primzahlen gleich der Anzahl der natürlichen Zahlen ist.'."\n".
                    'Auch wenn dies erst einmal überraschent erscheint.'."\n",
                      'Schaut man sich den Grafen der Primfakultät\\footnote{Vgl. \\cite{wiki:Primorial:2015}.} \\term{n#} an, so steigt dieser anfangs sehr viel schneller, als der der Anzahl der natürlichen Zahlen.\\footnote{Vgl. \\cite{wiki:Primorial:2015}, Eigenschaften, Grafik und Tabelle mit Beispielwerten.}'."\n".
                    'Der Graf der Primfakultät kann am „Ende“ der natürlichen Zahlen nur dann wieder gleich groß werden, wenn ab einem bestimmten Punkt im Prinzip, vielleicht quasi erst im Aktualunendlichen, keine Primzahlen mehr in das Produkt hinzu kommen.'."\n".
                    'Die Primfakultät, bezogen auf die Anzahl der natürlichen Zahlen, \\term{n#-n} oder auch \\term{n#/n} kann im Endlichen kein Maximum haben.'."\n".
                    'Denn immer, wenn wieder eine Primzahl auftaucht, wird es „übermächtig“ groß, und die Primzahlen hören nicht auf aufzutauchen.'."\n".
                    'Die Vermutung muss also mit der Lücke zwischen allen endlichen natürlichen Zahlen \\term{\M(N)} und \\term{⍵} zu tun haben.'."\n".
                    'Wie man dies zumindestens mal eingrenzen oder abschätzen kann, zeige ich im Verlauf dieser Arbeit.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:Primzahlenprodukt-Vermutung', text =>
                                           
                'Genauere Differenzierung der Zahlensorten, wie rationale, algebraische, irrationale, transzendente usw.')),
                      
                  array( 'notice', array( Display => 'invis', text => array(
                    '\\bold{XXX}',
                    '• XXX',
                    ))),
                      
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'Nichtexistenz(?) des Kontinuums')),
                  array( 'text', array( text => array(
                    'Der Gewinn, den man durch die Superial-Zahlen erhält besteht auch darin, dass die Möglichkeit besteht, die irrationalen Zahlen mit Hilfe der Primzahlen'."\n".
                    'sicher zu differenzieren.'."\n".
                    'Wenn man die Infinitesimalrechung über \\term{s} definiert, stellt sich zum Beispiel heraus, dass die Funktion, die ihre eigene Ableitung ist,'."\n".
                    'von \\term{s} abhängt.'."\n".
                    'Deren exponentiale Basis, die eulersche Zahl \\term{e}, wird dann zu \\term{e_{s}} und \\color{*Bearb}{ist keine Superial-Zahl nach der oben beschriebenen Definition,'."\n".
                    'weil ihre Nachkommastellen bis ins superial kleine gehen (In Datei "superial zahlen (26).pdf" nachgucken!)}.'."\n",
                      'Die Superial-Zahlen lassen sich in immer feinere Dimensionen erweitern.'."\n".
                    'Das bedeutet, es lassen sich immer neue Zahlen definieren, die zwischen den bisher feinsten Zahlen liegen.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'Feine Differenzierung des aktualen Unendlichen')),
                  array( 'text', array( text => array(
                    'Durch die Definition der superialen Einheit \\term{s} als unendliches Primzahlprodukt erhalten die Superial-Zahlen den Mehrwert, dass sich das Aktualunendliche nach den gewohnten Regeln'."\n".
                    'der Arithmetrik behandeln und differenzieren lässt.'."\n".
                    'Wichtige Elemente der Arithmetrik, wie beispeilsweise natürliche, ganze, gerade und ungerade Zahlen sowie Primzahlen, lassen sich so im Unendlichen untersuchen.'."\n".
                    'Dies hat auch Rückwirkung auf die Betrachtung des Endlichen.'."\n".
                    'Denn so ergeben sich unter anderem neue Möglichkeiten die Verteilung der Primzahlen unter den großen endlichen natürlichen Zahlen besser zu verstehen.'."\n".
                    'Auch die Primfaktorenzerlegung und die Ordnung der rationalen Zahlen sind so noch einmal neu zu betrachten.'."\n",
                      'Und auch die mögliche Definition der Wurzeln aus rationalen Zahlen als überrationale Brüche ist interessant.'."\n".
                    'Sie ermöglichte noch einmal eine Differenzierung bezüglich der irrationalen und transzendenten Zahlen.'."\n",
                      'Darüber hinaus ist eine einfache und anschauliche Definition von Ableitungen und Integralen möglich.'."\n".
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
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                    
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:SupNum:Einleitung:Grundlagen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Grundlagen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:ZS:Einleitung:XXX',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:ZS:Einleitung', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Ich möchte ergänzend und klarstellend noch beleuchten, welche hier wichtigen Eigenschaften von Zahlen und Mengen'."\n".
                    'sich wie beim Übergang vom Endlichen ins Unendliche verhalten sollten, um Sinn zu machen und eine gute Plausibilität zu ergeben.'."\n",
                      'Das bedeutet nicht, dass es prinzipiell nicht auch weitere Möglichkeiten mit ihren Perspektiven und deren jeweiligen Vor- und Nachteilen gibt.'."\n".
                    'Mir erscheint die nachfolgende Perspektive natürlich am besten zu den Superial-Zahlen passend.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Grundlagen:XXX', text =>
                'Zahlen und Mengen im Endlichen', subline =>
                  '')),
                  array( 'text', array( text => array(
                  '\\condb{Die Teilmengen vom Beginn der natürlichen Zahlen} \\\\'."\n".
                    'Betrachten wird die Teilmengen \\term{\M(T)_{n}}, die wir vom Beginn der natürlichen Zahlen bilden können und deren Größe, also die Anzahl ihrer Elemente \\term{n}.'."\n",
                      'Exemplarisch vereinfacht definieren wir diese Mengen wie folgt:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{T}_{n}  :=  \left\{ 0,1,2,3,4,…,n \right\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Formell korrekter können wir schreiben:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{T}_{n}  :=  \left\{ x ~\middle|~ \left( n \in \mathbb{N} \right) \left( \forall x \in \mathbb{N} \right) \left[ x < n \right] \right\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Die Teilmengen \\term{\M(T)_{n}} der ersten \\term{n} Elemente wird definiert als die Menge der Elemente x für die Gilt:'."\n".
                      'Ich nehme das Element \\term{n} aus der Menge der natürlichen Zahlen \\term{\M(N)} und alle \\term{x}, die kleiner als \\term{n} sind.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Wir sehen schon an der Definition, dass die Anzahl der Elemente in \\term{\M(T)_{n}} größer als alle Elemente dieser Menge ist.'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Mein Freund Raimund Welsch bemerkte hierzu zu recht, dies gilt nur, weil die natürlichen Zahlen vorstehend einschließlich der Null definiert sind.'."\n",
                        'Ich antworte darauf, dass dies deutlich macht, wie sinnvoll und plausibel die Definition der natürlichen Zahlen einschließlich der Null ist,'."\n".
                      'wenn wir uns mit dem Übergang uns Unendliche beschäftigen.'."\n"))),
                      
                  array( 'text', array( text => array(
                  '\\condb{Das größte Element einer Menge} \\\\'."\n".
                    'In Fall der Mengen mit endlich vielen Elementen, hier repräsentiert durch die Mengen \\term{\M(T)_{n}}, existiert ein größtes Element in der Menge.'."\n".
                    'Es gilt:'."\n"))),
                      
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Rightarrow  \#\mathbb{T}_{n}  =  n  }'),
                      array( display => 'on', latex => '{  \Rightarrow  groesstes(\mathbb{T}_{n})  =  n - 1  }'),
                      array( display => 'on', latex => '{  \Leftrightarrow  groesstes(\mathbb{T}_{n}) + 1  =  n  }'),
                      array( display => 'on', latex => '{  \Rightarrow  groesstes(\mathbb{T}_{n})  <  n  }'),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Nun gehen wir ins Unendliche über.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Grundlagen:XXX', text =>
                'Zahlen und Mengen im Unendlichen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Anders als im Endlichen der Mengen \\term{\M(T)_{n}} verhält es sich, wenn wir zur Menge aller natürlich Zahlen übergehen, die unendlich viele Elemente hat.'."\n".
                    'Auch sie beginnt mit der Null, aber in ihr gibt es per Definition kein größtes Element:'."\n"))),
                      
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Rightarrow  \nexists \; groesstes(\mathbb{N})  }'),
                    ))),
                      
                  array( 'text', array( text => array(
                      'Jedoch kann die Anzahl der Elemente in \\term{\M(N)} nach obiger Definition \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N} mit der aktualunendlichen Zahl \\term{ω} angegeben werden.'."\n"))),
                      
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall n \in \mathbb{N} \right)  \left[  n < \omega  \right]  }'),
                      array( display => 'on', latex => '{  \left( \forall r \in \mathbb{R} \right)  \left( \exists n \in \mathbb{N} \right)  \left[  r < n  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall r \in \mathbb{R} \right)  \left[  -\omega < r < \omega  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall r \in \mathbb{R^{+}} \right)  \left[  0 < \frac{ 1 }{ \omega } < r  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( k \in \mathbb{R} \right)  \left( \forall r \in \mathbb{R^{+}} \right)  \\\ \qquad\qquad  \left[  k - r < k - \frac{ 1 }{ \omega } < k < k + \frac{ 1 }{ \omega } < k + r  \right]  }'),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Auf diese Weise kommen wir in die Lage Zahlen außerhalb des Endlichen Zahlen zu definieren.'."\n".
                    'Zahlen, die also wirklich im Unendlichen liegen.'."\n",
                      'Auch können wir nun Zahlen definieren, die um eine endliche reelle Zahl herum liegen und näher an dieser sind, als jede andere reelle Zahl.'."\n".
                    'Sie verhalten sich ähnliche wie der Limes einer Umgebung \\term{ε}, der gegen Null geht.'."\n".
                    'Nur sind diese Umgebungszahlen nicht unscharf, wie ein Limes, sondern konkret und damit scharf.'."\n",
                      'Das gleiche gilt, wenn wir das \\term{ω} durch das noch viel größere \\term{s} ersetzen:'."\n"))),
                      
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall n \in \mathbb{N} \right)  \left[  n < s  \right]  }'),
                      array( display => 'on', latex => '{  \left( \forall r \in \mathbb{R} \right)  \left( \exists n \in \mathbb{N} \right)  \left[  r < n  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall r \in \mathbb{R} \right)  \left[  - s < r < s  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall r \in \mathbb{R^{+}} \right)  \left[  0 < \frac{ 1 }{ s } < r  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( k \in \mathbb{R} \right)  \left( \forall r \in \mathbb{R^{+}} \right)  \\\ \qquad\qquad  \left[  k - r < k - \frac{ 1 }{ s } < k < k + \frac{ 1 }{ s } < k + r  \right]  }'),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Dadurch, dass \\term{s} die \\term{ω}-ste Potenz aller endlichen Primzahlen als Faktoren enthält, bekommen wir besondere arithmetische Eigenschaften'."\n".
                    'bezüglich ihrer Multiplikation mit rationalen Zahlen, Brüchen aus ganzen Zahlen, wie wir auf den nachfolgenden Seiten sehen werden.'."\n".
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
                    'XXX'."\n"))),
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
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Grundlagen:XXX', text =>
                'XXX', subline =>
                  '')),
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
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung'),
                    )),
                )
          ); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
