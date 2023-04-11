<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Primzahlprodukt-Vermutung'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Eigenschaften'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{Warum könnte die Primzahlprodukt-Vermutung stimmen?}',
                    '• Die Primzahlen werden unter den sehr großen natürlichen Zahlen extrem selten.',
                    '• Es klafft eine riesige Lücke zwischen den endlichen natürlichen Zahlen und \\term{ω}, siehe \\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:NeueEinsichtenZuPosAktualUnendl}. Ist diese Lücke wirklich so groß? Meine Analyse sagt: \\term{ω - 1} zahlen sind vom Typ \\term{ω - n} in den Biordinalzahlen. Stimmt allerdings die Primzahlprodukt-Vermutung, dann liegen auch alle \\term{p⋅ω - n}, mit \\term{p} ist ein Primzahlprodukt einfacher Potenz aus endlich vielen Primzahlen. Ob es dann eine Einschränkung für die Größe von \\term{n} gibt, ist mir unklar.',
                    '\\bold{Interessante Erkenntnisse zu Primzahlen}',
                    '• Der \\jump[https://de.wikipedia.org/w/index.php?title=Stern-Brocot-Folge&oldid=224277569]{Calkin-Wilf-Baum}{Calkin-Wilf-Baum} muss etwas mit der Primzahlstruktur zu tun haben, weil alle seine Brüche teilerfremde Zähler und Nenner haben.',
                    '• Mit dem \\jump[https://de.wikipedia.org/w/index.php?title=Satz_von_Wilson&oldid=229853875]{}{Satz von Wilson} können wir herausfinden, ob eine Zahl eine Primzahl ist, wenn ich es richtig verstehe, siehe Primzahl-Produkt-Definition von \\term{s} in meinem Ordner „4. Variante“, Dokument „Sup-Zahl (52).pdf“, S. 5.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Auf die Primzahlprodukt-Vermutung bin ich durch das Herumspielen mit der'."\n".
                    '\\jump{OM:SupNum:Eigenschaften:StrukturVonS}{Struktur der Superial-Zahlen} gestoßen.'."\n".
                    'Schauen wir uns das Zählen der \\jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Superial-Zahlen} an,'."\n".
                    'wie dabei die endlichen rationalen Zahlen'."\n".
                    'als Koeffizienten mitgezählt werden und welche Größenordnung die Anzahl der endlichen natürlichen Zahlen'."\n".
                    'als Koeffizienten im Verhältnis zu den rationalen Zahlen haben, dann können wir auf die Idee kommen,'."\n".
                    'dass die Anzahl der endlichen natürlichen Zahlen dem Produkt aller endlichen Primzahlen entspricht.'."\n",
                      'Den Ansatz zu dieser Vermutung finden wir im Abschnitt \\italic{\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm}},'."\n".
                    'wo wir uns schon mit der Struktur von \\term{s} beschäftigt haben.'."\n",
                      'Dabei fanden wir, dass die Anzahl der rationalen Zahlen \\latexmath{ \lbrack 0, 1 \lbrack_\mathbb{Q} }, von einschließlich der Null bis zur Eins, ohne die Eins, in Formel \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-reatio-Intervall-Null-Eins}'."\n".
                    'eine ganze Zahl sein muss.'."\n".
                    'Das können wir mit Hilfe der Abrundung durch die Gaußklammer\\color{*Bearb}{(Verweis)} \\latexmath{ \lfloor x \rfloor } zum Ausdruck bringen, die eine Zahl \\latexmath{ x } auf die nächst kleinere ganze Zahl abrundet, wenn sie noch keine ganze Zahl ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# *( [ 0, 1 [_\mathbb{Q} *)  =  \frac{ s }{ 2 \cdot \omega }  }',
                                          /* label_name => 'OM:SupNum:Eigenschaften:StrukturVonS:Equ-reatio-Intervall-Null-Eins', */label_text => '\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-reatio-Intervall-Null-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ s }{ 2 \cdot \omega } - \left\lfloor \frac{ s }{ 2 \cdot \omega } \right\rfloor  =  0  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Ganzzahligkeit bedingt, dass alle Primfaktoren von \\latexmath{ 2 \cdot \omega } auch in \\latexmath{ s } vorkommen müssen.'."\n",
                      'Und wir wissen auch, dass \\latexmath{ s } unendlich viel größer als \\latexmath{ ω } ist,'."\n".
                    'denn nach unseren Erkenntnissen aus dem Kapitel \\italic{\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS}} steht'."\n".
                    '\\latexmath{ s } für die Anzahl der rationalen Zahlen und \\latexmath{ ω } für die Anzahl der natürlichen Zahlen.'."\n".
                    'Ich vergleiche hier aber nicht die Mächtigkeit\\color{*Bearb}{(Verweis)} der Menge der rationalen Zahlen und die Mächtigkeit der natürlichen Zahlen,'."\n".
                    'wobei es darum geht, ob sich zwei Mengen bidirektional aufeinander abbilden lassen.'."\n".
                    'Sondern ich meine die kombinatorische Erzeugung von Elementen einer unendlich großen Menge'."\n".
                    'im Verhältnis zur vollständigen Induktion bei der Erzeugung der Menge der natürlichen Zahlen.'."\n",
                      'Die unendlich viel größere Kombinatorik drücken wir mit dem Symbol \\latexmath{ \overset{\infty}{\ggg} } aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  \;\;\;\overset{\infty}{\ggg}\;\;\;  \omega  }'),
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
                    'XXX'."\n",
                      'Dann ist \\latexmath{ s } in Formel \\jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}'."\n".
                    'durch folgendes Primzahl-Flächenprodukt definiert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  :=  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{1} \\\ \qquad\;\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{2} \\\ \qquad\;\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{3} \\\ \qquad\;\; \;\;\;\; \vdots \\\ \qquad\;\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{n \in \mathbb{N}} \\\ \qquad\;\; \;\;\;\; \vdots  }',
                                          /* label_name => 'OM:SupNum:Formale-Entwicklung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod', */label_text => '\\jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Da, wie oben geschildert, alle Primfaktoren von \\latexmath{ 2 \cdot \omega } auch in \\latexmath{ s } vorkommen müssen,'."\n".
                    'muss \\latexmath{ 2 \cdot \omega }, und somit auch \\latexmath{ \omega }, ein Teil des Primzahl-Flächenprodukts sein,'."\n".
                    'der einen unendlich großen Wert hat.'."\n",
                      'Die unendlich große Primzahl-Potenz mit der kleinsten Basis ist \\term{2^{ω}} ungleich und sogar sehr viel größer als \\term{ω}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{ω}  \neq  \omega  }'),
                      array( display => 'on',  latex => '{  2^{ω}  \;\;\;\ggg\;\;\;  \omega  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p \in \mathbb{P} *)  *[  p^{ω}  \;\;\;\ggg\;\;\;  \omega  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Somit kommt kein Potenz-Turm einer der Primzahlen \\term{p^{ω}} als unendlich großer Primfaktorenprodukt-Anteil von \\latexmath{ s },'."\n".
                    'der \\latexmath{ \omega } gleich ist, in Frage.'."\n",
                      'Eine naheliegende Möglichkeit, die noch bleibt, ist, dass \\latexmath{ \omega } dem unendlichen Produkt aller'."\n".
                    'endlichen Primzahlen gleich ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega  ?=  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Errechnen wir das Produkt aller endlichen Primzahlen von den kleinsten Primfaktoren her mit der Primfakultät\\footnote{\\const{SupNum_g_footnote_text_Primorial}} \\term{p#}, dann wird es sehr schnell'."\n".
                    'viel größer, als die größte in ihm vorkommende Primzahl:\\footnote{\\const{SupNum_g_footnote_text_PrimorialWikiWerte}}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2\#  =  2  }'),
                      array( display => 'on',  latex => '{  3\#  =  6  }'),
                      array( display => 'on',  latex => '{  5\#  =  30  }'),
                      array( display => 'on',  latex => '{  7\#  =  210  }'),
                      array( display => 'on',  latex => '{  11\#  =  2310  }'),
                      array( display => 'on',  latex => '{  13\#  =  30030  }'),
                      array( display => 'on',  latex => '{  17\#  =  510510  }'),
                      array( display => 'on',  latex => '{  19\#  =  9699690  }'),
                      array( display => 'on',  latex => '{  23\#  =  223092870  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So wäre es ein sehr großes Rätsel, wie dieses Produkt irgendwann nicht weiter wächst, so, dass'."\n".
                    'die natürlichen Zahlen es wieder einhohlen und letztendlich gleich groß sein können.'."\n",
                      'Ich würde aus meiner heutigen Sicht sagen, dass dies ein oder sogar das wesentliche Geheimnis der'."\n".
                    'Primzahlen ist.'."\n".
                    'Unter welcher Bedingung könnte denn dies überhaupt der Fall sein?'."\n",
                      'Aus meiner Sicht könnte dies nur dann der Fall sein, wenn die Anzahl der Primzahlen'."\n".
                    'unter den extrem großen natürlichen Zahl minimal wird.'."\n".
                    'Und mit Hilfe des Beweises, dass es unendlich viele Primzahlen gibt, können wir erkennen, was das bedeuten sollte.'."\n".
                    'Eine Minimierung des Anteils an Primzahlen heißt, dass es unter den sehr sehr extrem großen natürlichen Zahlen'."\n".
                    'im wesentlichen nur noch Primzahlzwillinge gibt.'."\n".
                    'Die Lücken zwischen den Primzahlen würden im Schnitt maximal werden.'."\n".
                    'Diese Aussage ist also eng mit der Primzahlzwillingsvermutung\\color{*Bearb}{(Verweis)} gekoppelt.'."\n",
                      'Wir können plausibel machen, wie wir noch zeigen, dass unter der Annahme, es gäbe im extrem Großen im wesentlichen nur noch Primzahlzwillinge,'."\n".
                    'und, dass dann ein solches Primzahlzwillingspaar die nächsten Primzahlen erzeugt, ohne, dass dazwischen noch welche wären,'."\n".
                    'eine so große Lücke zwischen den Primzahlzwillingen und den nächsten Primzahlzwillingen entsteht, dass das Zählen der natürlichen'."\n".
                    'Zahlen aufholen kann.'."\n".
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
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'XXX Freie Gedanken', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      'Die Argumentation könnte grob und sicher noch streitbarer Weise so laufen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Jede zweite natürliche Zahl ist durch die Primzahl Zwei teilbar, daher sollte die Anzahl der natürlichen Zahlen \\term{ω} ebenso durch Zwei teilbar sein.',
                        'Das gleiche Argument kann für jede weitere endliche Primzahl herangezogen werden.',
                        'Jede vierte natürliche Zahl ist natürlich ebenfalls durch die zweite Potenz von Zwei teilbar, aber, wenn auch die Anzahl der natürlichen Zahlen \\term{ω} durch die Vier ganzzahlig teilbar wäre, dann sollte dies auch für jede andere endliche Primzahl endlicher Potenz gelten. Das kann aber aufgrund der Betrachtung der Struktur der Superial-Zahlen, siehe \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS}‹, nicht sein, denn dann wäre quasi \\term{s = ω}.',
                        'Wenn \\term{s = ω} wäre, dann würde es genau so viele rationale Zahlen, wie natürliche Zahlen geben, was zwar für die Mächtigkeit stimmt, aber in meinen Augen nicht für deren Anzahl.',
                        'Denn die Kombinatorik zur Erzeugung der rationalen Zahlen aus Brüchen zeigt, dass es deutlich mehr rationale Zahlen von ihrer Anzahl her geben muss, als natürliche Zahlen, denn im Calkin-Wilf-Baum enthält schon der letzte Strang alle natürlichen Zahlen und der erste Strang all deren Kehrwerte. \\\\ Die direkte Kombinatorik von Zähler und Nenner wäre jeweils \\term{ω} und ergäbe sich zu \\term{ω^{2}}, wenn nicht gekürzt werden könnte.',
                        'Anders, als bei der Mächtigkeit, wird bei der von mir gemeinten Anzahl der Zahlen ihre kombinatorische Erzeugung mit der vollständigen Induktion der natürlichen Zahlen ins Verhältnis gesetzt.',
                        'Und die Definition von \\term{s} über das Primzahlflächenprodukt beruht eben auch auf einem Verhältnis zur Eins.',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
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
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Argumentation über die Primzahl-Potenztürme der Definition von \\term{s}', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Betrachten wir das aktuell verwendete Produkt zur Definition von \\term{s}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  :=  \displaystyle \prod_{\forall n \in \mathbb{N}}  \left( \prod_{\forall p \in \mathbb{P}}  p \right)  }',
                                               label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  :=  \displaystyle \left( \prod_{\forall p \in \mathbb{P}}  p \right)^{\omega}  }',
                                               label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Analysieren wir naiv die maximale Häufigkeit der einzelnen Primzahlen in der Primfaktorenzerlegung'."\n".
                    'der natürlichen Zahlen kommen wir schnell auf den Gedanken, dass wir nicht die volle höhe \\term{ω}'."\n".
                    'jedes einzelnen Primzahl-Potenzturms benötigen, um \\term{s} mit den Eigenschaften auszustatten'."\n".
                    'die für uns interessant sind, nämlich mit jedem rationalen Koeffizienten eine ganze Zahl zu bleiben.'."\n",
                      'Beginnend mit der kleinsten Primzahl \\term{2} stellen wir fest, dass nur jede zweite natürliche Zahl'."\n".
                    'durch \\term{2} teilbar ist und dann erst wieder jede vierte durch \\term{4} und jede achte durch \\term{8} und so fort.'."\n",
                      'Da wir mit der Potenz einer jeden Primzahl keine größere Zahl als \\term{ω} erreichen müssen,'."\n".
                    'reicht folgende Potenz einer jeden Primzahl:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p^{x}  =  \omega  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  x  =  \log_{p} \omega  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Folgendes Primzahlprodukt für \\term{s} würde also hinreichen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  ?:=  \prod_{ \forall p \in \mathbb{P} }  p^{ \log_{p} \omega }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  ?=  \prod_{ \forall p \in \mathbb{P} } \omega  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  ?=  \prod_{ \# \mathbb{P} } \omega  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  ?=  \omega^{ \# \mathbb{P} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das verwundert nach ein bisschen Überlegung nicht weiter, denn wir haben es erzwungen.'."\n".
                    'Aber es scheint uns nicht weiter zu bringen, denn es zerstört die transparenz unserer Primfaktoren-Definition von \\term{s}!'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  ?=  \prod_{ \forall p \in \mathbb{P} } \omega_{p}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  ?=  \omega_{2} \cdot \omega_{3} \cdot \omega_{5} \cdot \omega_{7} \cdot \omega_{11} \cdot \omega_{13} \cdot \cdots  }'),
                      array( display => 'on',  latex => '{  \omega  ?=  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot \cdots  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s  ?=  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{2} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{3} \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{5} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots \\\ \qquad\qquad\quad\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{p \in \mathbb{P}} \\\ \qquad\qquad\quad\; \;\;\;\; \vdots  }'),
                    ))),
                  array( 'text', array( text => array(
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
                    'XXX'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Folgen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Folgen, wenn wahr  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Primzahlprodukt-Vermutung:Folgen',
              '\\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:XXX:XXX', text =>
                      
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
