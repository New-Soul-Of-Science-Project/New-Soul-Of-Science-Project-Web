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
                    '• Es klafft eine riesige Lücke zwischen den endlichen natürlichen Zahlen und \\term{ω}, siehe \\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:NeueEinsichtenZuPosAktualUnendl}. Ist diese Lücke wirklich so groß?',
                    '– Meine Analyse sagt: Eine Anzahl von \\term{ω} Zahlen sind vom Typ \\term{ω - n} in den Biordinalzahlen.',
                    '– Stimmt allerdings die Primzahlprodukt-Vermutung, dann liegen auch alle \\term{p^{-1}⋅ω ± n}, mit \\term{p} ist ein Primzahlprodukt einfacher Potenz aus endlich vielen Primzahlen.',
                    '⋅ Ob es dann eine Einschränkung für die Größe von \\term{n} gibt, ist mir nicht ganz unklar, aber unwahrscheinlich. Wenn nicht, sind es je \\term{p^{-1}} dann \\term{2⋅ω} Zahlen.',
                    '\\bold{Interessante Erkenntnisse zu Primzahlen}',
                    '• Der \\jump[https://de.wikipedia.org/w/index.php?title=Stern-Brocot-Folge&oldid=224277569]{Calkin-Wilf-Baum}{Calkin-Wilf-Baum} muss etwas mit der Primzahlstruktur zu tun haben, weil alle seine Brüche teilerfremde Zähler und Nenner haben.',
                    '• Mit dem \\jump[https://de.wikipedia.org/w/index.php?title=Satz_von_Wilson&oldid=229853875]{}{Satz von Wilson} können wir herausfinden, ob eine Zahl eine Primzahl ist, wenn ich es richtig verstehe, siehe Primzahl-Produkt-Definition von \\term{s} in meinem Ordner „4. Variante“, Dokument „Sup-Zahl (52).pdf“, S. 5.',
                    '\\bold{Verbesserungen der Seite}',
                    '• Den Ausdruck ›Erzeugungskombinatorik‹ auch im oder nach dem Beweis wieder aufgreifen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Auf die Primzahlprodukt-Vermutung bin ich durch das Herumspielen mit der'."\n".
                    '\\jump{OM:SupNum:Eigenschaften:StrukturVonS}{Struktur der Superial-Zahlen} gestoßen.'."\n",
                      'Schauen wir uns das Zählen der \\jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Superial-Zahlen} an:'."\n".
                    'Beim Zählen von natürlichen Superial-Zahlen werden endliche rationale Zahlen als Koeffizienten des Unendlichen \\latexmath{ q_k \cdot s^k + \cdots }'."\n".
                    'mitgezählt, wenn die endlichen ganzen Zahlen \\latexmath{ z } als endlicher Summand \\latexmath{ \cdots + z \cdot s^0 } immer wieder durchlaufen.'."\n".
                    'Betrachten wir im Folgenden mit Hilfe von \\latexmath{ s } das Verhältnis der Anzahl der endlichen rationalen Zahlen'."\n".
                    'und der endlichen ganzen Zahlen, dann scheint intuitiv die Anzahl der endlichen natürlichen Zahlen dem Produkt'."\n".
                    'aller endlichen Primzahlen gleich zu sein.'."\n",
                      'Den Ansatz zu dieser Vermutung finden wir im Abschnitt \\italic{\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm}},'."\n".
                    'wo wir uns schon mit der Struktur von \\latexmath{ s } beschäftigt haben.'."\n".
                    'Dabei fanden wir, dass die Anzahl der rationalen Zahlen \\latexmath{ \lbrack 0, 1 \lbrack_\mathbb{Q} }, von der Null bis ausschließlich der Eins, in Formel \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}'."\n".
                    'eine ganze Zahl sein muss.'."\n".
                    'Das können wir mit Hilfe der \\jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-N-unendlich}{Menge \\latexmath{ \mathbb{N}_\infty }} zum Ausdruck bringen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# [ 0, 1 [_\mathbb{Q}  =  \frac{ s }{ 2 \cdot \omega }  }',
                                          label_text => '\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ s }{ 2 \cdot \omega }  \in  \mathbb{N}_{\infty}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Ganzzahligkeit bedingt, dass alle Primfaktoren von \\latexmath{ 2 \cdot \omega } auch in \\latexmath{ s } vorkommen müssen.'."\n",
                    ''))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX',
                Title => 'Fragen die offen sind …',
                TitleVis => 'Fragen die offen sind:', ParagraphList => array(
                  array( 'bulletlist', array( bullet_ary => array(
                        'Gehören die denkbaren \\jump{OM:SupNum:Ueberrationalitaetsvermutung}{überrationalen Zahlen} (auch in der \\jump{OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung}{Einleitung})'."\n".
                          '– vermutlich die Koordinaten von algebraischen Zahlen\\footnote{\\const{SupNum_g_footnote_text_AlgebraischeZahl}}, wie \\latexmath{ \sqrt{ 2 } } –'."\n".
                          'auch zu den möglichen Koeffizienten der Definition der (natürlichen) Superial-Zahlen? \\\\'."\n".
                          'Falls dem so sein sollte, dann steht \\latexmath{ \frac{ s }{ 2 \cdot \omega } } nicht alleine für die rationalen Zahlen \\latexmath{ \lbrack 0, 1 \lbrack_\mathbb{Q} },'."\n".
                          'sondern für die überrationalen Zahlen \\latexmath{ \lbrack 0, 1 \lbrack_\mathbb{Qr} }. \\\\'."\n".
                          'Dies würde allerdings nichts an der Primzahlprodukt-Vermutung ändern',
                    ))),
                    ))),

                  array( 'text', array( text => array(
                    'Und wir wissen auch, dass \\latexmath{ s } unendlich viel größer als \\latexmath{ ω } ist,'."\n".
                    'denn nach unseren Erkenntnissen aus dem Kapitel \\italic{\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS}} steht'."\n".
                    '\\latexmath{ s } für die Anzahl der rationalen Zahlen und \\latexmath{ ω } für die Anzahl der natürlichen Zahlen.'."\n",
                      'Ich vergleiche hierbei aber nicht die Mächtigkeit\\footnote{\\const{SupNum_g_footnote_text_Maechtigkeit}}'."\n".
                    'der Menge der rationalen Zahlen und die Mächtigkeit der natürlichen Zahlen,'."\n".
                    'wobei es darum geht, ob sich zwei Mengen bidirektional aufeinander abbilden lassen.'."\n".
                    'Sondern ich meine die kombinatorische Erzeugung von Elementen der unendlich großen Menge der rationalen Zahlen'."\n".
                    'im Verhältnis zur vollständigen Induktion bei der Erzeugung der Menge der natürlichen Zahlen.'."\n",
                      'Die unendlich viel größere Erzeugungskombinatorik drücken wir mit dem Symbol \\latexmath{ \overset{\infty}{\ggg} } aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  \;\;\;\overset{\infty}{\ggg}\;\;\;  \omega  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Im Folgenden können wir dies klar erkennen.'."\n",
                      'Denn \\latexmath{ s } ist in Formel \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}'."\n".
                    'durch folgendes Primzahl-Flächenprodukt definiert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  :=  (2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{1} \\\ \qquad\;\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{2} \\\ \qquad\;\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{3} \\\ \qquad\;\; \;\;\;\; \vdots \\\ \qquad\;\; \cdot ( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots )_{n \in \mathbb{N}} \\\ \qquad\;\; \;\;\;\; \vdots  }',
                                          label_text => '\\jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Da, wie oben geschildert, alle Primfaktoren von \\latexmath{ 2 \cdot \omega } auch in \\latexmath{ s } vorkommen müssen,'."\n".
                    'muss \\latexmath{ 2 \cdot \omega }, und somit auch \\latexmath{ \omega }, ein Teil des Primzahl-Flächenprodukts sein.'."\n".
                    'Und dieses Teilprodukt muss einen unendlich großen Wert haben.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                '\\latexmath{ \omega } kann nicht einer der unendlich großen Primzahltürme des Primzahl-Flächenprodukts sein', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Nun können wir als erstes überlegen, ob es sich um einen der Primzahltürme handeln könnte:'."\n".
                    'Die unendlich große Primzahl-Potenz mit der kleinsten Basis in \\latexmath{ s } ist \\latexmath{ 2^\omega }.'."\n".
                    'Wenn wir berücksichtigen, dass ja oben \\latexmath{ s } durch \\latexmath{ 2 \cdot \omega } geteilt wird und wir den Faktor \\latexmath{ 2 } schon mal aus'."\n".
                    'der unendlichen Potenz von \\latexmath{ 2 } entfernen, ergibt sich immer noch \\term{2^{ω-1}}, wobei \\latexmath{ \omega - 1 } in den'."\n".
                    '\\jump{OM:BiOrd:Home}{Biordinalzahlen} definiert ist.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Nun ist es offensichtlich, dass \\term{2^{ω-1}} ungleich und sogar sehr viel größer als \\latexmath{ \omega } ist: \\\\'."\n".
                      '\\color{*Bearb}{(Hier auch \\latexmath{ \overset{\infty}{\ggg} } nutzen?)}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{ω - 1}  \neq  \omega  }'),
                      array( display => 'on',  latex => '{  2^{ω - 1}  \;\;\;\ggg\;\;\;  \omega  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p \in \mathbb{P} *)  *[  p^{ω}  \;\;\;\ggg\;\;\;  \omega  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dies gilt dann auch für alle Potenzen dieser Größenordnung endlicher Primzahlen.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Somit kommt keine Primzahl der Potenz \\latexmath{ p^ω }, also eine Spalte des Primzahl-Flächenprodukts,'."\n".
                    'als unendlich großer Primfaktoranteil von \\latexmath{ s } für \\latexmath{ \omega } in Frage.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Wir-vermuten-omega-ist-Produkt-aller-endlichen-Primzahlen', text =>
                      
                'Wir vermuten, \\latexmath{ \omega } ist die vollständige Primfakultät aller endlichen Primzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Eine Möglichkeit, die noch bleibt, ist, dass \\latexmath{ \omega } dem unendlichen Produkt aller'."\n".
                    'endlichen Primzahlen gleich ist, also eine Zeile des Primzahl-Flächenprodukts:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega  ?=  \omega_{\forall p}  :=  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)^{\omega}  \\\ \qquad\quad\;  =  *( \omega_{\forall p} *)^{\omega}  ?=  \omega^{\omega}  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-Fragezeichen-ist-omega-hoch-omega', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-Fragezeichen-ist-omega-hoch-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Stimmt unsere Vermutung, dann ist \\latexmath{ s } das Gleiche wie \\latexmath{ \omega } hoch \\latexmath{ \omega }.'."\n",
                      'An dieser Stelle sind wird nicht ganz sicher, ob wirklich alle endlichen Primzahlen in \\latexmath{ \omega } stecken oder'."\n".
                    'auch welche endlich oft mehrfach vorkommen!'."\n".
                    'Auch, wenn dies der einfachste Fall scheint, weil wir keinen Hinweis haben, warum eine der Primzahlen fehlen oder mehrfach sein sollte.'."\n".
                    'Außer, dass vielleicht die \\latexmath{ 2 } an \\latexmath{ \omega } fehlen könnte, weil sie in \\latexmath{ 2 \cdot \omega } wieder separat hinzu kommt.'."\n".
                    'Die Eigenschaft von \\latexmath{ \omega } allerdings, mit gutem Recht, soweit wir wissen, genau so viele gerade wie ungerade Zahlen zu enthalten, steht dem gegenüber.'."\n",
                      'Wie können wir nun das Wissen schöpfen, dass alle endlichen Primzahlen genau ein Mal im Produkt vorkommen müssen?'."\n",
                      'Unsere Vermutung können wir plausibel machen, und schließlich auch beweisen, wenn wir erkennen, dass sowohl das vollständige Zählen'."\n".
                    'als auch das vollständige Produkt aller endlichen Primzahlen das Raster der endlichen natürlichen Zahlen beschreibt.'."\n".
                    'Wir beginnen damit, zwei Möglichkeiten zu beleuchten,'."\n".
                    'die Unendlichkeit der endlichen natürlichen Zahlen zu zeigen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Zwei Arten die Unendlichkeit der endlichen natürlichen Zahlen zu beweisen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Der \\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-des-Euklid}{›Satz des Euklid‹}\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:SatzDesEuklid:2023}.}'."\n".
                    'beweist, dass die Primzahlen in den unendlich vielen natürlichen Zahlen nicht enden, sondern es auch unendlich viele endliche Primzahlen gibt.'."\n",
                      'Wenn wir verstehen, dass der ›Satz des Euklid‹ ebenso beweist,'."\n".
                    'dass die endlichen natürlichen Zahlen nicht enden, dann können wir erkennen,'."\n".
                    'welche Bedeutung dieser Satz und das Zentrum seines Beweises für die natürlichen Zahlen hat.'."\n",
                      'Es gibt also mindestens zwei Arten die Unendlichkeit der endlichen natürlichen Zahlen zu beweisen:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Beweis durch Zählen} \\\\'."\n".
                    'Einmal können wir die Unendlichkeit der endlichen natürlichen Zahlen durch das Zählen beweisen, mittels der vollständigen Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}},'."\n".
                    'auf Basis des Zählatoms Eins, ausgehend von der Null.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Beweis durch die Primfakultät und die Phasenverschiebung um \\latexmath{ \pm 1 }} \\\\'."\n".
                    'Und ein weiteres Mal können wir die Unendlichkeit der endlichen natürlichen Zahlen mittels der Primfakultät und der Phasenverschiebung'."\n".
                    'um \\latexmath{ \pm 1 } beweisen, auf Basis der Multiplikationsatome, der Primzahlen, und des Zählatoms Eins, ausgehend von der Eins.'."\n".
                    'So, wie es nachfolgend im ›Satz des Euklid‹ beschrieben ist.'."\n".
                    'Sein Beweis basiert auf der Primfakultät, also auf dem Primorial\\footnote{\\const{SupNum_g_footnote_text_Primorial}},'."\n".
                    'welche immer weiter potenziell ins Unendliche vorangetrieben wird, und damit immer genauer'."\n".
                    'das Produkt aus Formel \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen}'."\n".
                    'wird.'."\n",
                      'In der Primfakultät \\latexmath{ p\# } sind alle endlichen Primzahlen, von der Zwei bis zu einer größten \\latexmath{ p }, enthalten.'."\n".
                    'Die größte wird dann im Beweis immer größer, bis ins Unendliche.'."\n".
                    'Ausschließlich mit diesem Produkt funktioniert der Beweis und nicht, wenn irgendeine Primzahl'."\n".
                    'im Produkt fehlt.'."\n",
                      'Da aufgrund des ›Fundamentalsatzes der Arithmetik‹\\footnote{\\const{SupNum_g_footnote_text_FundamentalsatzDerArithmetik}}'."\n".
                    'alle natürlichen Zahlen größer als Eins entweder selber Primzahlen sind oder sich in Primfaktoren zerlegen lassen,'."\n".
                    'erzeugt darüber die immer größer werdende Primfakultät indirekt alle natürlichen Zahlen größer als Eins,'."\n".
                    'bis ins Unendliche, weil sie genau das Raster vorgibt, auf dem diese liegen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Hohe Plausibilität der Primzahlprodukt-Vermutung} \\\\'."\n".
                    'Es liegt also sehr nahe, dass das Produkt aller endlichen Primzahlen das Teilprodukt von'."\n".
                    '\\latexmath{ s } ist, dass \\latexmath{ \omega } gleicht.'."\n".
                    'Es gibt keinen Grund, warum eine der Primzahlen in dem Produkt mehrfach vorkommen sollte oder gar müsste.'."\n".
                    'Womit wir noch keinen Beweis für die Primzahlprodukt-Vermutung haben, sie aber schon mal'."\n".
                    'sehr plausibel erscheint.'."\n".
                    'Genau dies zeigen wir nachfolgend.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-des-Euklid', text =>
                      
                'Satz des Euklid', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Der ›Satz des Euklid‹'."\n".
                    'beweist, dass die Primzahlen endlicher größe nicht enden.'."\n",
                      'Ich gebe diesen Beweis nachfolgend in Kurzform wieder.'."\n".
                    'Dabei werde ich ihn etwas modifizieren, damit er zu den von uns gesuchten Eigenschaften am besten passt und'."\n".
                    'wir ihn gut weiterverwenden können:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Beweis, dass es unendlich viele Primzahlen im Endlichen gibt} \\\\'."\n".
                    'Definition der Primzahlen im Endlichen:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Primzahl:2021}.}'."\n"))),
                      
                  array( 'text', array( Shape  => 'quote', text => array(
                        'Die Primzahlen sind innerhalb der Menge \\latexmath{ \mathbb{N} } der natürlichen Zahlen dadurch charakterisiert, dass jede von ihnen genau zwei natürliche Zahlen als Teiler hat.'."\n"),
                        addtext => '\\footnote{Internet: \\\\ \\cite{wiki:Primzahl:2021}, Eigenschaften von Primzahlen.}')),
                      
                  array( 'text', array( text => array(
                    'Nach dieser Definition sind Null und Eins keine Primzahlen.'."\n",
                      'Dass es unendlich viele Primzahlen im Endlichen gibt, können wir durch die Schlussfolgerungskette des folgenden Beweises erkennen,\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Primzahl:2021}, Größte bekannte Primzahl.}'."\n".
                    'wenn wir die Primfakultät\\footnote{\\const{SupNum_g_footnote_text_Primorial}} von \\latexmath{ p } mit \\latexmath{ p\# } berechnen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Bilde die Primfakultät einer bekannten Primzahl, das Produkt aller Primzahlen kleiner und einschließlich dieser Primzahl: \\latexmath{ p\# }',
                        'Addiere Eins dazu oder ziehe Eins ab: \\latexmath{ p\# \pm 1 }',
                        '\\latexmath{ p\# \pm 1} ist nicht durch eine der Primzahlen in \\latexmath{ p\# } ganzzahlig teilbar.',
                        '\\latexmath{ p\# \pm 1} kann daher entweder nur selber eine Primzahl sein, die dann größer als \latexmath{ p } ist, oder ihr Primzahlprodukt enthält ausschließlich Primzahlen – mindestens zwei Stück –, die nicht in \latexmath{ p\# } enthalten sind und damit größer als \latexmath{ p } sein müssen. ',
                        'Alle Primzahlen, durch die \\latexmath{ p\# \pm 1} teilbar ist, sind damit größer als \\latexmath{ p }.',
                        'Es gibt also immer eine Primzahl, die größer ist als jede gegebene Primzahl \\latexmath{ p }, womit die Menge der endlichen Primzahlen nicht endet.',
                    ))),
                  array( 'text', array( text => array(
                    'Es gibt in den endlichen natürlichen Zahlen demnach bewiesenermaßen unendlich viele Primzahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Besondere Rolle der Primfakultät} \\\\'."\n".
                    'Die Primfakultät spielt im ›Satz des Euklid‹ die zentrale Rolle.'."\n",
                      'Zum einen sammelt sie alle Primzahlen bis einschließlich \\latexmath{ p } lückenlos in ihrem Produkt \\latexmath{ p\# } ein.'."\n".
                    'Zum anderen erlaubt sie über ihre doppelte Variation um plus-minus Einen \\latexmath{ p\# \pm 1 } Aussagen über weitere Primzahlen,'."\n".
                    'die noch nicht in ihrem Produkt enthalten sind und fungiert so quasi auch als Konstruktor:'."\n",
                      'Entweder sind \\latexmath{ p\# - 1 } und/oder \\latexmath{ p\# + 1 } selber schon größere Primzahlen als \\latexmath{ p }'."\n".
                    'oder es gibt zwischen \\latexmath{ p } und \\latexmath{ p\# - 1 }, also in der \\jump{OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge}{Intervall-Menge}'."\n".
                    '\\latexmath{ \rbrack p, p\# - 1 \lbrack_\mathbb{N} }, mindestens zwei oder vier oder gar mehr weitere Primzahlen,'."\n".
                    'die in der Primfaktorzerlegung von \\latexmath{ p\# - 1 } und/oder \\latexmath{ p\# + 1 } stecken.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Das passende Verständnis zum Beweis unserer Vermutung', subline =>
                  'Eine Perspektivenfindung')),
                  array( 'text', array( text => array(
                    'Berechnen wir Beispielhaft das Produkt der endlichen Primzahlen von den kleinsten Primfaktoren her mit der Primfakultät\\footnote{\\const{SupNum_g_footnote_text_Primorial}} \\latexmath{ p\# },'."\n".
                    'dann wird deutlich, dass es schnell sehr viel größer wird, als die größte in ihm vorkommende Primzahl:\\footnote{\\const{SupNum_g_footnote_text_PrimorialWikiWerte}}'."\n".
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
                    'Im ersten Moment erscheint es eher undurchsichtig, was die Primfakultät mit der Anzahl von aufeinanderfolgenden'."\n".
                    'natürlichen Zahlen in einer Menge zu tun hat.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Die Anzahl von aufeinanderfolgenden natürlichen Zahlen in einer endlichen Menge} \\\\'."\n".
                    'Die Ordinalzahlen\\footnote{\\const{NSOSP_g_footnote_text_Ordinalzahl}}, und in erweiterter Form die \\jump{OM:BiOrd:Home}{Biordinalzahlen},'."\n".
                    'definieren die Anzahl der aufeinanderfolgenden natürlichen Zahlen in endlichen und unendlichen Mengen,'."\n".
                    'und symbolisieren diese mit den Mengen selbst.'."\n",
                      'Nach Formel \\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-n-gleich-Menge-Null-bis-n-minus-Eins} finden wir dort für die Anzahl \\latexmath{ n } der Elemente in einer endlichen Menge aufeinanderfolgender natürlicher Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  :=  *\{ 0, 1, 2, \cdots , n - 1 *\}  }',
                                          label_text => '\\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-n-gleich-Menge-Null-bis-n-minus-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Jede natürliche Zahl \\latexmath{ n } steht also für eine lückenlose Menge, von der Null an.'."\n",
                      'Die Anzahl der Elemente einer Menge scheint hier mit dem nächst größeren Element \\latexmath{ n } als das größte Element der Menge \\latexmath{ n - 1 } gleichgesetzt.'."\n".
                    'Bei näherer Betrachtung müssen wir aber feststellen, dass diese Perspektive nicht weit trägt.'."\n".
                    'Denn schon bei der Null, der leeren Menge, funktioniert sie nicht, weil es kein größtes Element in der leeren Menge gibt.'."\n",
                      'Die aktual unendliche Anzahl aller Elemente der Menge \\latexmath{ \mathbb{N} } der endlichen natürlichen Zahlen wird als die'."\n".
                    'Anzahl der Schritte einer vollständigen Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}} verstand'."\n".
                    'und wie folgt als \\latexmath{ \omega } definiert:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega  :=  \mathbb{N}  =  *\{ 0, 1, 2, 3, 4, 5, \cdots *\}  }',
                                          label_text => '\\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-Def-omega-gleich-N}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'In der Menge \\latexmath{ \mathbb{N} } ist nun keine größte Zahl mehr definiert und \\latexmath{ \omega }'."\n".
                    'ist somit auch nicht die größte Zahl in \\latexmath{ \mathbb{N} } plus Eins.'."\n".
                    'Sogar finden wir in den Biordinalzahlen im Abschnitt \\italic{›\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}‹},'."\n".
                    'dass sich noch ganze Zahlen zwischen jeder natürlichen Zahl in \\latexmath{ \mathbb{N} } und \\latexmath{ \omega } definieren lassen.'."\n",
                      'Wie können wir dies Interpretieren und aus welcher Perspektive passend betrachten?'."\n",
                      'Ich denke, es sollte noch eine weitere Art und Weise geben, Werte, die eine Anzahl natürlicher Zahlen'."\n".
                    'von der Null an angeben, mit einer Menge zu beschreiben.'."\n".
                    'Und zwar mit einer Menge von Zahlen, die auf seiner Primfaktorzerlegung basieren und das Primfaktor-Spektrum oder Primfaktor-Raster des Werts widerspiegeln.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Die Primzahlturmzerlegung} \\\\'."\n".
                    'Wie können wir die Primfaktorzerlegung jeder natürlichen Zahl eindeutig in einer Menge darstellen?'."\n",
                      'Das ist nur durch eine Menge der Primzahltürme einer natürlichen Zahl möglich, die wir \\italic{Primzahlturmzerlegung} nennen.'."\n".
                    'Denn eine Menge der reinen Primfaktoren wäre nicht eindeutig, weil dies nicht die'."\n".
                    'Potenzen der Primzahlen berücksichtigt.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei \\latexmath{ pt(n) } die Menge der Primzahltürme der \\jump{OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-N-unendlich}{endlichen und aktual unendlichen natürlichen Zahl \\latexmath{ n \in \mathbb{N}_\infty }}:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt(n)  :=  *\{  x  *|*  \begin{cases}  x = n  &  \text{ falls } \;\; n \in *\{ 0, 1 *\}  \\\\  \\\\  \begin{aligned} *( \forall p \in \mathbb{P} *) *( \forall k \in \mathbb{N} *) \\\ \!\! *( \frac{ n }{ p^{k} } \in \mathbb{N}_{\infty} \land \frac{ n }{ p^{k + 1} } \notin \mathbb{N}_{\infty} *) \\\ *[ x = p^{k} *] \end{aligned}  &  \text{ falls } \;\; n \geq 2  \end{cases}  *\}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  n  \widehat{=}  pt(n)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dann ist diese Menge also die Menge der Primzahlen in der maximalen Potenz, die \\latexmath{ n } noch ganzzahlig teilt,'."\n".
                      'oder sie enthält im Falle von Null nur die Null oder im Falle von Eins nur die Eins.'."\n".
                      'Die Null und die Eins werden hier berücksichtigt, weil wir die natürlichen Zahlen komplett abbilden wollen.'."\n",
                        'Der Parameter \\latexmath{ n } und sein Funktionswert, seine Primzahlturmzerlegung, entsprechen einander.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Diese Menge können wir nun nutzen, um daraus das Primfaktor-Spektrum oder Primfaktor-Raster'."\n".
                    'der natürlichen Zahl zu bestimmen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Definition des Primturm-Potenzrasters} \\\\'."\n".
                    'Die Menge der Anzahl der ersten \\latexmath{ n } natürlichen Zahlen, von der Null an,'."\n".
                    'stellt den Zählaspekt der Zahl \\latexmath{ n } dar, also die Menge an Zahlen, die bis zu ihr erzeugt werden.'."\n",
                      'Die Primzahlturmzerlegung ist eine Menge, die den multiplikativen Aspekt einer solchen Zahl'."\n".
                    'darstellt.'."\n".
                    'Sie bezieht sich aber nicht direkt auf die Erzeugung einer Menge – ein Spektrum oder Raster – natürlicher Zahlen, die mit ihrer'."\n".
                    'Primzahlturmzerlegung in Verbindung stehen, also die durch die in ihr enthaltenen Primzahltürme erzeugt werden.'."\n",
                      'Diese Menge möchte ich nun vorstellen und nenne sie \\italic{Primturm-Potenzraster}.'."\n",
                      'Beim Primturm-Potenzraster geht es darum zu analysieren, welche anderen natürliche Zahlen sich mit'."\n".
                    'den in einer natürlichen Zahl vorhandenen Primzahltürmen durch Variation ihrer Potenzen darstellen lassen.'."\n".
                    'Denn es geht im Besonderen in einem zweiten Schritt darum, mit einer natürlichen Zahl ein Raster zu beschreiben, das zeigt,'."\n".
                    'wie vollständig sich die natürlichen Zahlen, von der Null an, mit der Variation der Potenzen ihrer Primzahltürme'."\n".
                    'beschreiben lassen.'."\n",
                      'Enthält eine natürliche Zahl einen Primfaktor, wie zum Beispiel die Zwei, mehrfach, dann können wir die selben Faktoren'."\n".
                    'nicht untereinander unterscheiden.'."\n".
                    'Denn all diese Zweien sind ja gleich.'."\n".
                    'Unterscheiden können wir zwischen ihnen nur, wenn wir auch die Potenz der Primzahl sehen und im Primzahlturm belassen.'."\n".
                    'Reduzieren wir also einen Primzahlturm auf seine Primzahl, dann eliminieren wir einen essenziellen Teil'."\n".
                    'seiner Eigenschaften, seines Charakters.'."\n",
                      'Würden wir dabei also nur die einzelnen Primfaktoren berücksichtigen und in ihrer Potenz variieren,'."\n".
                    'dann erhielten wir aufgrund der Reduktion der Primzahlpotenzen auf ihre Primzahlbasis Doppeldeutigkeiten,'."\n".
                    'die eine vollständige und damit differenzierte Beschreibung der möglichen Spektren oder Raster unmöglich machen.'."\n".
                    'So gesehen ist die Variation von Primzahltürmen keine Willkür, sondern zwingend.'."\n",
                      'Zur Definition der Menge des Primturm-Potenzrasters und der Berechnung der lückenlosen Intervall-Menge'."\n".
                    'endlicher und aktual unendlicher natürlicher Zahlen an seinem Beginn, von der Null an, brauchen wir im Folgenden also die Menge der Primfaktoranteile'."\n".
                    'einer solchen Zahl.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei \\latexmath{ pr(n) } das Primturm-Potenzraster beziehungsweise die unendliche Primturm-Potenzraster-Menge,'."\n".
                      'erzeugt aus ihrem endlichen oder aktual unendlichen natürlichen Parameter \\latexmath{ n },'."\n".
                      'eine Menge die alle Kombinationen der natürlichen Potenzen seiner Primzahltürme enthält,'."\n".
                      'wobei die Null und die Eins dazu genommen werden:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt_{0,1}(n)  :=  \{ 0, 1 \} \cup pt(n)  }'),
                      // array( display => 'on',  latex => '{  pr(n)  :=  *\{  x  *|*  *( \forall i \in \mathbb{N} *) *( \forall j \in pt(n) \setminus \{ 0, 1 \} *) *( \forall k \in \mathbb{N}^{+} *) \\\ \qquad\qquad\qquad\quad\;\, *( i \in \{ 0, 1 \} \lor \frac{ i }{ j^{k} } \in \mathbb{N} *) \\\ \qquad\qquad\qquad\quad\;\;\, *[  x = i  *]  *\}  }'),
                      // array( display => 'on',  latex => '{  pr(n)  :=  *\{  x  *|*  \begin{cases}  x = n  &  \text{ falls } \;\; n \in *\{ 0, 1 *\}  \\\\  \\\\  \begin{aligned} *( \forall i \in \mathbb{N} \setminus \{ 0, 1 \} *) \\\ \! *( \forall j \in pt(n) \setminus \{ 0, 1 \} *) \\\ *( \forall k \in \mathbb{N}^{+} *) \\\ *( \frac{ i }{ j^{k} } \in \mathbb{N} *) *[ x = i *] \end{aligned}  &  \text{ falls } \;\; n \geq 2  \end{cases}  *\}  }'),
                      // array( display => 'on',  latex => '{  pr(n)  :=  \begin{cases}  n  &  \text{ falls } \;\; n \in *\{ 0, 1 *\}  \\\\ \\\\  *\{  x  *|*  \begin{aligned} *( \forall i \in \mathbb{N} \setminus \{ 0, 1 \} *) \\\ \! *( \forall j \in pt(n) \setminus \{ 0, 1 \} *) \\\ *( \forall k \in \mathbb{N}^{+} *) \\\ *( \frac{ i }{ j^{k} } \in \mathbb{N} *) *[ x = i *] \end{aligned}  *\}  &  \text{ falls } \;\; n \geq 2  \end{cases}  }'),
                      // array( display => 'on',  latex => '{  pr(n)  :=  *\{  x  *|*  *( \forall i \in \# pt(n) *) *( \forall j_{i} \in pt(n) *) *( \forall k_{i} \in \mathbb{N} *) \\\ \qquad\qquad\qquad\quad\;\, *[  x = \prod_{ \forall i }  j_{i}^{k_{i}}  *]  *\}  }'),
                      array( display => 'on',  latex => '{  pr(n)  :=  \begin{cases}  n  &  \text{ falls } \;\; n \in *\{ 0, 1 *\}  \\\\ \\\\  *\{  x  *|*  \begin{aligned} *( \forall i \in \# pt_{0,1}(n) *) \, \\\ *( \forall j_{i} \in pt_{0,1}(n) *) \, \\\ *( \forall k_{i} \in \mathbb{N} *) \, \\\ \! *[ x = \prod_{ \forall i }  j_{i}^{k_{i}} *] \end{aligned}  *\}  &  \text{ falls } \;\; n \geq 2  \end{cases}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      // 'Die Menge wird hier erzeugt, indem alle natürlichen Zahlen \\latexmath{ i } darauf geprüft werden, ob sie entweder'."\n".
                      // 'Null oder Eins sind oder mindestens ein Primfaktoranteil von \\latexmath{ n } die Zahl \\latexmath{ i } ganzzahlig teilt.'."\n",
                      'Die Menge wird hier erzeugt, indem alle Elemente in \\latexmath{ pt(n) }, geordnet nach ihrem Index \\latexmath{ i }, in jeder natürlichen Potenz'."\n".
                      'miteinander kombiniert werden.'."\n",
                        'Im zweiten Fall sind die Null und Eins in der Menge immer dabei, weil sie in diesem Fall immer Teil der Primzahlturmzerlegung sind.'."\n".
                      'Und durch die jeweiligen Potenzen von Null und Eins, wie \\latexmath{ 0 = 0^1 \cdot 1^0 \cdot j_i^0 \cdots }'."\n".
                      'und \\latexmath{ 1 = 0^0 \cdot 1^1 \cdot j_i^0 \cdots } kommen beide dann ins Primturm-Potenzraster.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Das Primturm-Potenzraster ist eine eineindeutige Abbildung jeder natürlichen Zahl.'."\n".
                    'Dies kommt daher, weil jede natürliche Zahl, wie oben gezeigt, ihre einzigartige Primzahlturmzerlegung hat,'."\n".
                    'aufgrund derer sich das Primturm-Potenzraster ebenso einzigartige berechnet.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Entspreche also jede natürliche Zahl ihrem Primturm-Potenzraster'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N} *) *[  n  \widehat{=}  pr( n )  *]  \;\;,  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-n-entspricht-pr-n', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-n-entspricht-pr-n}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'was eben keine Gleichheit bedeutet. \\\\'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Mit Entsprechung ist hier und nachfolgend – generell in dieser Arbeit – gemeint, dass eine bijektive Funktion\\color{*Bearb}{(Verweis)}'."\n".
                    'existiert, die beide Dinge eineindeutig aufeinander abbildet.'."\n".
                    'Jede natürliche Zahl beschreibt und charakterisiert also ihre eigenes Primturm-Potenzraster.'."\n",
                      'Das Primturm-Potenzraster nutzen wir nun, um seinen lückenlosen Anteil an seinem Beginn'."\n".
                    'zu berechnen.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei \\latexmath{ lpr(n) } die maximale lückenlose Menge natürlicher Zahlen, von der Null an,'."\n".
                      'im Primturm-Potenzraster \\latexmath{ pr(n) }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  lpr(n)  :=  *\{  x  *|*  *( \forall i \in \mathbb{N} *) *( i \subset pr(n) *) *[  x = i  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Diese Menge erhalten wir, indem wir alle natürlichen Zahlen \\latexmath{ i } in einer Menge sammeln,'."\n".
                      'die echte Teilmenge\\color{*Bearb}{(Verweis)}'."\n".
                      'des Primturm-Potenzrasters sind.'."\n",
                        '\\color{*Bearb}{(Diese Funktion könnten wir auch durch Mengennegation und das Herauskristallisieren'."\n".
                      'der kleinsten Zahl in der Antimenge realisieren.)}'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Damit haben wir etwas besonderes geschaffen, wie wir noch sehen werden.'."\n".
                    ''))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Beispiele-Primzahlturmzerlegung-PrimturmPotenzraster+lueckenloses',
                Title => 'Beispiele zur Primzahlturmzerlegung, zum Primturm-Potenzraster und zum lückenlosen Primturm-Potenzraster …',
                TitleVis => 'Beispiele zur Primzahlturmzerlegung, zum Primturm-Potenzraster und zum lückenlosen Primturm-Potenzraster:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Nachdem wir nun die Formalien definiert haben, möchte ich die Zusammenhänge an Zahlenbeispielen'."\n".
                    'verdeutlichen und erlebbar machen.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 0 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt( 0 )  =  *\{ 0 *\}  }'),
                      array( display => 'on',  latex => '{  pr( 0 )  =  pr( 0^{1} \cdot 1^{0} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 0 )  =  \varnothing  }'),
                      array( display => 'on',  latex => '{  lpr( 0 )  =  0  =  \varnothing  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 1 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt( 1 )  =  *\{ 1 *\}  }'),
                      array( display => 'on',  latex => '{  pr( 1 )  =  pr( 0^{0} \cdot 1^{1} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 1 )  =  *\{ 0 *\}  }'),
                      array( display => 'on',  latex => '{  lpr( 1 )  =  1  =  *\{ 0 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 2 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt( 2 )  =  *\{ 2 *\}  }'),
                      array( display => 'on',  latex => '{  pr( 2 )  =  pr( 0^{0} \cdot 1^{0} \cdot 2^{1} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 2 )  =  *\{ 0, 1, 2, 2^{2}, 2^{3}, 2^{4}, 2^{5}, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 2 )  =  *\{ 0, 1, 2, 8, 16, 32, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpr( 2 )  =  3  =  *\{ 0, 1, 2 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 4 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt( 4 )  =  *\{ 4 *\}  }'),
                      array( display => 'on',  latex => '{  pr( 4 )  =  pr( 2^{2} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 4 )  =  *\{ 0, 1, *( 2^{2} *)^{1}, *( 2^{2} *)^{2}, *( 2^{2} *)^{3}, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 4 )  =  *\{ 0, 1, 4, 16, 64, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpr( 4 )  =  2  =  *\{ 0, 1 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 6 = 5\overline{\#} = 4\overline{\#} } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt( 6 )  =  *\{ 2, 3 *\}  }'),
                      array( display => 'on',  latex => '{  pr( 6 )  =  pr( 2 \cdot 3 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 6 )  =  *\{ 0, 1, 2, 3, 4, 6, 8, 9, 12, 16, 18, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpr( 6 )  =  5  =  *\{ 0, 1, 2, 3, 4 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 9 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt( 9 )  =  *\{ 9 *\}  }'),
                      array( display => 'on',  latex => '{  pr( 9 )  =  pr( 3^{2} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 9 )  =  *\{ 0, 1, *( 3^{2} *)^{1}, *( 3^{2} *)^{2}, *( 3^{2} *)^{3}, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 9 )  =  *\{ 0, 1, 9, 81, 729, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpr( 9 )  =  2  =  *\{ 0, 1 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 10 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt( 10 )  =  *\{ 2, 5 *\}  }'),
                      array( display => 'on',  latex => '{  pr( 10 )  =  pr( 2 \cdot 5 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 10 )  =  *\{ 0, 1, 2, 2^{2}, 5, 2^{3}, 2 \cdot 5, 2^{4}, 2^{2} \cdot 5, \\\ \qquad\qquad\qquad\qquad\qquad\qquad 5^{2}, 2^{5}, 2^{3} \cdot 5, 2 \cdot 5^{2}, 2^{6}, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 10 )  =  *\{ 0, 1, 2, 4, 5, 8, 10, 16, 20, \\\ \qquad\qquad\qquad\qquad\qquad\qquad 25, 32, 40, 50, 64, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpr( 10 )  =  3  =  *\{ 0, 1, 2 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 20 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt( 20 )  =  *\{ 4, 5 *\}  }'),
                      array( display => 'on',  latex => '{  pr( 20 )  =  pr( 2^{2} \cdot 5 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 20 )  =  *\{ 0, 1, 4, 5, 4^{2}, 4 \cdot 5, 5^{2}, 4^{3}, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 20 )  =  *\{ 0, 1, 4, 5, 16, 20, 25, 64, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpr( 20 )  =  2  =  *\{ 0, 1 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 30 = 7\overline{\#} = 6\overline{\#} } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt( 30 )  =  *\{ 2, 3, 5 *\}  }'),
                      array( display => 'on',  latex => '{  pr( 30 )  =  pr( 2 \cdot 3 \cdot 5 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 30 )  =  *\{ 0, 1, 2, 3, 2^{2}, 5, 2 \cdot 3, 2^{3}, 3^{2}, 2 \cdot 5, \\\ \qquad\qquad\qquad\qquad\qquad 2^{2} \cdot 3, 3 \cdot 5, 2^{4}, 2 \cdot 3^{2}, 2^{2} \cdot 5, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 30 )  =  *\{ 0, 1, 2, 3, 4, 5, 6, 8, 9, 10, \\\ \qquad\qquad\qquad\qquad\qquad 12, 15, 16, 18, 20, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpr( 30 )  =  7  =  *\{ 0, 1, 2, 3, 4, 5, 6 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 210 = 11\overline{\#} = 10\overline{\#} = 9\overline{\#} = 8\overline{\#} } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt( 210 )  =  *\{ 2, 3, 5, 7 *\}  }'),
                      array( display => 'on',  latex => '{  pr( 210 )  =  pr( 2 \cdot 3 \cdot 5 \cdot 7 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr( 210 )  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, \\\ \qquad\qquad\qquad\qquad\qquad\qquad 12, 14, 15, 16, 18, 20, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpr( 210 )  =  11  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Wenn die Primzahlprodukt-Vermutung stimmt, dann gilt:'."\n",
                        'Für die Zahl \\latexmath{ \omega ?= \omega\overline{\#} } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt( \omega\overline{\#} )  =  *\{ 2, 3, 5, 7, 11, 13 \cdots *\}  }'),
                      array( display => 'on',  latex => '{  pr\!*( \omega\overline{\#} *)  =  pr( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr\!*( \omega\overline{\#} *)  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, \cdots \\\ \qquad\qquad\qquad\qquad\quad\;\, 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\quad\;\, 2^{2} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\quad\;\, 2 \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\quad\;\, 2^{3} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\quad\;\, 2 \cdot 3 \cdot 5^{2} \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\quad\;\, 2^{2} \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\quad\;\, \vdots \; *\}  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-pr-MengenPrimfakultaet-omega', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-pr-MengenPrimfakultaet-omega}', label_incr => true),
                      array( display => 'on',  latex => '{  lpr\!*( \omega\overline{\#} *)  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, \cdots *\} \\\ \qquad\qquad\qquad\qquad\qquad\qquad  =  \mathbb{N}  =  \omega  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                    ))),

                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX',
                Title => 'Alter, doppeldeutiger Ansatz mit dem Primpotenzraster …',
                TitleVis => 'Alter, doppeldeutiger Ansatz mit dem Primpotenzraster:', ParagraphList => array(
                  array( 'text', array( text => array(
                  '\\condb{Das Primpotenzraster} \\\\'."\n".
                  '\\cond{Die nächste Primzahl} \\\\'."\n".
                    'Zur Definition der Menge des Primpotenzrasters und der Berechnung der lückenlosen Intervall-Menge'."\n".
                    'natürlicher Zahlen an seinem Beginn, von der Null an, brauchen wir auch noch die Menge der Primfaktoren'."\n".
                    'einer natürlichen Zahl.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei \\latexmath{ pf(n) } die Menge der Primfaktoren der natürlichen Zahl \\latexmath{ n }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pf(n)  =  *\{  x  *|*  *( \forall p \in \mathbb{P} *) *( n, \frac{ n }{ p } \in \mathbb{N} *) *[  x = p  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dann ist diese Menge also die Menge der Primzahlen, die \\latexmath{ n } ganzzahlig teilen.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Sei \\latexmath{ ppr(n) } das Primpotenzraster beziehungsweise die unendliche Primpotenzraster-Menge,'."\n".
                      'erzeugt aus ihrem natürlichen Parameter \\latexmath{ n },'."\n".
                      'eine Menge die alle Kombinationen der natürlichen Potenzen seiner Primfaktoren enthält,'."\n".
                      'wobei die Null und die Eins zu den Primfaktoren dazu genommen werden, um bei Null und Eins keine Lücke zu haben:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ppr(n)  =  *\{  x  *|*  *( \forall i \in \mathbb{N} *) \\\ \qquad\qquad\qquad\quad\;\; *( i \in \{ 0, 1 \} \lor pf(i) \cap pf(n) \neq \varnothing *) \\\ \qquad\qquad\qquad\quad\;\; *[  x = i  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die Menge wird hier erzeugt, indem alle natürlichen Zahlen \\latexmath{ i } darauf geprüft werden, ob sie entweder'."\n".
                      'Null oder Eins sind oder mindestens einen Primfaktoren mit \\latexmath{ n } teilen.'."\n",
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Sei \\latexmath{ lppr(n) } die maximale lückenlose Intervall-Menge natürlicher Zahlen, von der Null an, im Primpotenzraster \\latexmath{ ppr(n) }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  lppr(n)  =  *\{  x  *|*  *( \forall i \in \mathbb{N} *) *( i \subset ppr(n) *) *[  x = i  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Diese Intervall-Menge erhalten wir, indem wir alle natürlichen Zahlen \\latexmath{ i } in einer Menge sammeln, die echte Teilmenge\\color{*Bearb}{(Verweis)}'."\n".
                      'des Primpotenzrasters sind.'."\n",
                        '\\color{*Bearb}{(Diese Funktion könnten wir auch durch Mengennegation und das Herauskristallisieren'."\n".
                      'der kleinsten Zahl in der Antimenge realisieren.)}'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Nachdem wir nun die Formalien definiert haben, möchte ich die Zusammenhänge an Zahlenbeispielen'."\n".
                    'verdeutlichen und erlebbar machen.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Primzahl \\latexmath{ 7 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ppr( 7\overline{\#} )  =  ppr( 2 \cdot 3 \cdot 5 )  =  ppr( 30 )  }'),
                      array( display => 'on',  latex => '{  ppr( 7\overline{\#} )  =  *\{ 0, 1, 2, 3, 4, 5, 6, 8, 9, 10, 12, 15, 16, 18, 20, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lppr( 7\overline{\#} )  =  7  =  *\{ 0, 1, 2, 3, 4, 5, 6 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 6 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ppr( 6\overline{\#} )  =  ppr( 2 \cdot 3 \cdot 5 )  =  ppr( 30 )  }'),
                      array( display => 'on',  latex => '{  ppr( 6\overline{\#} )  =  *\{ 0, 1, 2, 3, 4, 5, 6, 8, 9, 10, 12, 15, 16, 18, 20, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lppr( 6\overline{\#} )  =  7  =  *\{ 0, 1, 2, 3, 4, 5, 6 *\}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  lppr( 6\overline{\#} )  =  lppr( 7\overline{\#} )  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 5 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ppr( 5\overline{\#} )  =  ppr( 2 \cdot 3 )  =  ppr( 6 )  }'),
                      array( display => 'on',  latex => '{  ppr( 5\overline{\#} )  =  *\{ 0, 1, 2, 3, 4, 6, 8, 9, 12, 16, 18, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lppr( 5\overline{\#} )  =  5  =  *\{ 0, 1, 2, 3, 4 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 4 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ppr( 4\overline{\#} )  =  ppr( 2 \cdot 3 )  =  ppr( 6 )  }'),
                      array( display => 'on',  latex => '{  ppr( 4\overline{\#} )  =  *\{ 0, 1, 2, 3, 4, 6, 8, 9, 12, 16, 18, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lppr( 4\overline{\#} )  =  5  =  *\{ 0, 1, 2, 3, 4 *\}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  lppr( 4\overline{\#} )  =  lppr( 5\overline{\#} )  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 8 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ppr( 8\overline{\#} )  =  ppr( 2 \cdot 3 \cdot 5 \cdot 7 )  =  ppr( 210 )  }'),
                      array( display => 'on',  latex => '{  ppr( 8\overline{\#} )  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 14, 15, 16, 18, 20, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lppr( 8\overline{\#} )  =  11  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 *\}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  lppr( 8\overline{\#} )  =  lppr( 9\overline{\#} )  =  lppr( 10\overline{\#} )  =  lppr( 11\overline{\#} )  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Die Mengen-Primfakultät \\latexmath{ n\overline{\#} } beschreibt ein Primpotenzraster minimalistisch.'."\n",
                      'Im Besonderen ist jedes Primpotenzraster eine Beschreibung der nächsten Primzahl, die größer als'."\n".
                    'oder gleich \\latexmath{ n } ist und auf seiner ersten Rasterlücke sitzt.'."\n".
                    'Diese Primzahl erhalten wir dann durch \\latexmath{ lppr( n\overline{\#} ) }.'."\n",
                      'Die Zahl beziehungsweise Menge \\latexmath{ lppr( \omega\overline{\#} ) } ist die Menge aller'."\n".
                    'natürlichen Zahlen \\latexmath{ \mathbb{N} }.'."\n".
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
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  lppr( \omega\overline{\#} )  =  \mathbb{N}  =  \omega  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \omega\overline{\#}  ?=  \omega  }'),
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
                    ))),

                  array( 'text', array( text => array(
                  '\\condb{Die Mengen-Primfakultät} \\\\'."\n".
                  // '\\cond{In Kombination mit dem Primturm-Potenzraster können wir neue Erkenntnisse gewinnen} \\\\'."\n".
                    'Das Primturm-Potenzraster ist vom Ansatz des Beweises des ›Satz des Euklid‹ inspiriert und'."\n".
                    'bietet nun, mit Hilfe der jetzt zu entwickelnden, abgewandelten Primfakultät,'."\n".
                    'eine weitere Möglichkeit, die natürlichen Zahlen zu beschreiben, wie oben schon dargelegt.'."\n".
                    'So gelingt es uns anschließend, die endlichen Primzahlen zu erzeugen'."\n".
                    'und mit ihnen die natürlichen Zahlen erneut zu konstruieren.'."\n".
                    'Dies führt uns schließlich auch zum Beweis unserer Vermutung.'."\n",
                      'Dies alles erreichen wir über ein tieferes Verständnis, wie der Beweis des ›Satz des Euklid‹ funktioniert,'."\n".
                    'und über eine zu diesem Zweck etwas abgewandelte Primfakultät, mit der wir nun beginnen.'."\n".
                    ''))),
                //  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                //'Die vollständige Primfakultät und die Anzahl von natürlichen Zahlen in einer Menge', subline =>
                //  'Gibt es eine Beschreibung der Größe von Zahlenmengen aus natürlichen Zahlen, die auf der Primfakultät beruhen, die bei der Annäherung an die vollständige Primfakultät die Menge der natürlichen Zahlen beschreibt?')),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei der \italic{Mengen-Primorial-Operator} \\latexmath{ \mathbb{T}\overline{\#} }, auch \italic{Mengen-Primfakultät} genannt,'."\n".
                      'der Operator, der alle Primzahlen in der Menge \\latexmath{ \mathbb{T} } in einem Produkt multipliziert:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{T}\overline{\#}  :=  \!\! \prod_{ \forall p \in \mathbb{T} \cap \mathbb{P} }  \! p  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'So erhalten wir eine Definition der Primfakultät, die sich auf die Elemente von Mengen bezieht.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wie in den Ordinalzahlen beziehungsweise Biordinalzahlen definiert, können endliche und unendliche Zahlen einer Repräsentation durch Mengen entsprechen.'."\n".
                    'In beiden Theorien wird diese Entsprechung als Gleichheit definiert, wie oben beispielhaft gezeigt.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Dann ergibt sich beispielsweise für die ersten natürlichen Zahlen, wenn wir sie demgemäß als Mengen verstehen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  0\overline{\#}  =  1  }'),
                      array( display => 'on',  latex => '{  1\overline{\#}  =  1  }'),
                      array( display => 'on',  latex => '{  2\overline{\#}  =  1  }'),
                      array( display => 'on',  latex => '{  3\overline{\#}  =  2  =  2  }'),
                      array( display => 'on',  latex => '{  4\overline{\#}  =  2 \cdot 3  =  6  }'),
                      array( display => 'on',  latex => '{  5\overline{\#}  =  2 \cdot 3  =  6  }'),
                      array( display => 'on',  latex => '{  6\overline{\#}  =  2 \cdot 3 \cdot 5  =  30  }'),
                      array( display => 'on',  latex => '{  7\overline{\#}  =  2 \cdot 3 \cdot 5  =  30  }'),
                      array( display => 'on',  latex => '{  8\overline{\#}  =  2 \cdot 3 \cdot 5 \cdot 7  =  210  }'),
                      array( display => 'on',  latex => '{  9\overline{\#}  =  2 \cdot 3 \cdot 5 \cdot 7  =  210  }'),
                      array( display => 'on',  latex => '{  10\overline{\#}  =  2 \cdot 3 \cdot 5 \cdot 7  =  210  }'),
                      array( display => 'on',  latex => '{  11\overline{\#}  =  2 \cdot 3 \cdot 5 \cdot 7  =  210  }'),
                      array( display => 'on',  latex => '{  12\overline{\#}  =  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11  =  2310  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die vorm Operator stehende Zahl ist niemals Teil des Produkts, da die Menge,'."\n".
                      'die eine Ordinalzahl repräsentiert, nicht selber in der Menge enthalten ist.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Setzen wir diese Reihe für alle natürlichen Zahlen bis ins Unendliche zu \\latexmath{ \omega } fort, so ergibt sich:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \mathbb{N}\overline{\#}  =  \!\! \prod_{ \forall p \in \mathbb{N} \cap \mathbb{P} }  \! p  }'),
                      array( display => 'on',  latex => '{  \omega\overline{\#}  =  \mathbb{N}\overline{\#}  =  \!\! \prod_{ \forall p \in \mathbb{P} }  p  }',
                                    latex_if_visible => '{  \Leftrightarrow  \omega\overline{\#}  =  \mathbb{N}\overline{\#}  =  \!\! \prod_{ \forall p \in \mathbb{P} }  \; p  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \omega_{\forall p}  =  \omega\overline{\#}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Denn hier liefert uns \\latexmath{ \omega\overline{\#} }'."\n".
                      'ein Produkt aller Primzahlen in \\latexmath{ \mathbb{N} }, also ein Produkt aller endlichen Primzahlen.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Und so gesehen stellt sich unsere Vermutung nun als'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega  ?=  \omega\overline{\#}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'dar.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Doch was bedeutet das Produkt aller Primzahlen in Mengen natürlicher Zahlen generell?'."\n",
                      'Was sind die Bedingungen, unter denen das fragliche Gleichheitszeichen erfüllt ist?'."\n".
                    'Wie können wir sie formulieren?'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Analyse des ›Satz des Euklid‹ in Bezug auf die Mengen-Primfakultät} \\\\'."\n".
                    'In den obigen endlichen Beispielen zur Mengen-Primfakultät handelt es sich ja um Mengen \\latexmath{ \mathbb{T} = n }, mit \\latexmath{ n \in \mathbb{N} },'."\n".
                    'deren Elemente endliche natürliche Zahlen sind, von der Null bis zu einer endlichen größten \\latexmath{ n - 1 }.'."\n",
                      'Aus einer neuen Perspektive auf den ›Satz des Euklid‹ stellen wir fest, dass \\latexmath{ n\overline{\#} } uns ein Produkt'."\n".
                    'aller Primzahlen liefert, das die Primfaktoren der Primfaktorzerlegungen aller Elemente der Menge \\latexmath{ n } enthält.'."\n".
                    'Das muss so sein, denn in dem Moment, wo \\latexmath{ n = p_i + 1 } ist, mit \\latexmath{ p_i \in \mathbb{P} }, kommt zur Menge \\latexmath{ n },'."\n".
                    'die Primzahl \\latexmath{ p_i } hinzu und damit auch zu ihrer Mengen-Primfakultät \\latexmath{ n\overline{\#} }.'."\n".
                    'Die hinzu gekommene Primzahl kann nicht Teil der Primfaktorzerlegung einer der kleineren Zahlen \\latexmath{ n < p_i } sein.'."\n".
                    'Denn diese haben als Primfaktoren nur kleinere Primzahlen \\term{ p_{i–d} }, mit \\latexmath{ 1 \leq d < i },'."\n".
                    'oder sind selber eine Primzahl.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Für das Primturm-Potenzraster hat die Mengen-Primfakultät als Parameter eine besondere Bedeutung} \\\\'."\n".
                    'Da das Primturm-Potenzraster \\latexmath{ pr\!*( n *) } ein Zahlenspektrum aufgrund der Primzahltürme seines Parameters liefert,'."\n".
                    'ergibt die Mengen-Primfakultät einer Zahl als sein Parameter \\latexmath{ pr\!*( x\overline{\#} *) } ein besonderes Spektrum oder Raster:'."\n",
                      'Wenn wir die Mengen-Primfakultät einer natürlichen Zahl \\latexmath{ x } als Parameter des Primturm-Potenzrasters benutzen,'."\n".
                    'dann basiert das Raster auf allen Primzahlen, die Elemente der Mengenrepräsentation dieser natürlichen Zahl \\latexmath{ x } sind.'."\n".
                    'In diesem Fall sind die Primzahltürme in \\latexmath{ x\overline{\#} } aber von minimaler Potenz, also so klein, wie möglich.'."\n".
                    'Damit wird das erzeugte Raster dann so fein wie möglich.'."\n",
                      'Die Funktion \\latexmath{ pr\!*( x\overline{\#} *) } liefert also ein lückenloses Primturm-Potenzraster \\latexmath{ lpr\!*( x\overline{\#} *) }'."\n".
                    'bis ausschließlich der Primzahl, die größer als die letzte Zahl der Menge \\latexmath{ x } ist.'."\n",
                      'Zusammen mit der vorhergehenden Analyse lässt sich daraus eine Anleitung erkennen, wie wir aus einer'."\n".
                    'endlichen natürlichen Zahl, die keine Primzahl ist, die nächst größere Primzahl, mittels Algebra und Mengenlehre, berechnen können.'."\n",
                      'Und damit erhalten wir auch eine Anleitung, aus einer gegebenen Primzahl dann immer wieder die nächste zu berechnen.'."\n".
                    'Denn das Primturm-Potenzraster der Mengen-Primfakultäten einer Primzahl \\latexmath{ pr\!*( p_i\overline{\#} *) }'."\n".
                    'kombiniert schließlich alle Primturm-Potenzraster der in ihm enthaltenen Primzahlen.'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Berechnung der nächsten Primzahl', subline =>
                  '… per Algebra und Mengenlehre')),
                  array( 'text', array( text => array(
                    'Wie wir an den obigen endlichen Beispielen erkennen können und wie gerade erklärt,'."\n".
                    'ist das lückenlose Primturm-Potenzraster einer Mengen-Primfakultät einer Primzahl die letzte natürliche Zahl,'."\n".
                    'bevor eine neue Primzahl zur Menge, und damit zu diesem Produkt, hinzukommt.'."\n".
                    'Die Mengen-Primfakultät \\latexmath{ p_i\overline{\#} } der Menge einer Primzahl \\latexmath{ p_i }'."\n".
                    'ist also die größte Menge mit natürlichen Zahlen \\latexmath{ 0 \leq x < p_i },'."\n".
                    'die durch ihr Primturm-Potenzraster aller kleineren Primzahlen \\latexmath{ p < p_i } in dieser Menge lückenlos dargestellt wird.'."\n".
                    'Dieses spezielle \\italic{lückenlose Primturm-Potenzraster einer Primzahl} entspricht also auch eben dieser Mengen-Primfakultät.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      '\\latexmath{ p_i\overline{\#} } ist also eine eineindeutige und vollständige Entsprechung der Menge \\latexmath{ p_i },'."\n".
                      'dargestellt durch ihr lückenloses Primturm-Potenzraster.'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p_{i} \in \mathbb{P} *) *[  p_{i}  \widehat{=}  p_{i}\overline{\#}  *]  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-entspricht-MengenPrimfakultaet-p-i', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-entspricht-MengenPrimfakultaet-p-i}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Denn die erste Lücke befindet sich gleich bei \\latexmath{ p_i } selber, der natürlichen Zahl, die die nächst größere als die größte in der Menge ist.'."\n".
                      'Damit ist die Lückenlosigkeit des lückenlosen Primturm-Potenzrasters wirklich ganz genau auf die Menge \\latexmath{ p_i = \lbrack 0, p_i - 1 \rbrack_\mathbb{N} } begrenzt'."\n".
                      'und definiert diese Zahlenmenge exakt.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Die Mengen-Primfakultät \\latexmath{ p_i\overline{\#} } ist allerdings eine natürliche Zahl, die, wie oben schon gesagt,'."\n".
                    'bei zunehmender Größe von \\latexmath{ p_i } rasant wächst und weit außerhalb der Menge'."\n".
                    'an natürlichen Zahlen liegt, dessen lückenloses Primturm-Potenzraster sie definiert.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Die Mengen-Primfakultät \\latexmath{ x\overline{\#} } einer natürlichen Zahl \\latexmath{ x } liefert'."\n".
                      'als Parameter des lückenlosen Primturm-Potenzrasters \\latexmath{ lpr\!*( x\overline{\#} *) }'."\n".
                      'die nächste Primzahl oder sich selbst, wenn sie selber schon eine Primzahl ist:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x \in \mathbb{N} *) *( p_{i}, p_{i + 1} \in \mathbb{P} *) *( p_{i} < x \leq p_{i + 1} *) \\\ \qquad\qquad\qquad\qquad\qquad\quad *[  p_{i + 1}  =  lpr\!*( x\overline{\#} *)  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Für den Fall, dass \\latexmath{ x } einen größer als die vorhergehende Primzahl ist, folgt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p_{i}, p_{i + 1} \in \mathbb{P} *) *[  p_{i + 1}  =  lpr\!*( *( p_{i} + 1 *)\overline{\#} *)  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Für den Fall, dass \\latexmath{ x } schon die nächste Primzahl'."\n".
                      'oder gleich der vorhergehenden ist, folgt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \Rightarrow  *( \forall p_{i + 1} \in \mathbb{P} *) *[  p_{i + 1}  =  lpr\!*( p_{i + 1}\overline{\#} *)  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p_{i} \in \mathbb{P} *) *[  p_{i}  =  lpr\!*( p_{i}\overline{\#} *)  *]  }',
                                    latex_if_visible => '{  \Leftrightarrow  *( \forall p_{i} \in \mathbb{P} *) *[  p_{i}  =  lpr\!*( p_{i}\overline{\#} *)  *]  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-ist-lpr-MengenPrimfakultaet-p-i', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-ist-lpr-MengenPrimfakultaet-p-i}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Was wir alles erreichen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir können jetzt eine neue Primzahl aus den uns bekannten vorangegangenen Primzahlen erzeugen.'."\n".
                    'Also erzeugen wir die auf eine bekannte Primzahl folgende Primzahl durch'."\n".
                    'Hochzählen um Einen, um unsere Primzahl dadurch mit in die Mengen-Primfakultät'."\n".
                    'zu bekommen.'."\n",
                      'Wir beschreiben dies so, dass das Primturm-Potenzraster eine erste Lücke aufwies und die neue Primzahl'."\n".
                    'diese Lücke nun füllt.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Das lückenlose Primturm-Potenzraster einer beliebigen natürlichen Zahl} \\\\'."\n".
                    'Im Besonderen ist ein jedes derartiges Primturm-Potenzraster \\latexmath{ pr\!*( n *) }'."\n".
                    'eine Beschreibung der kleinsten fehlenden reinen Primzahl in seinen Primzahltürmen, die'."\n".
                    'auf seiner ersten Rasterlücke sitzt.'."\n".
                    'Diese Primzahl erhalten wir dann durch \\latexmath{ lpr\!*( n *) }.'."\n",
                      '\\color{*Bearb}{(Beispiele um zu zeigen, was passiert, wenn die Primfakultät Primzahllücken hat oder eine Primzahl in höherer Potenz vorkommt.)}'."\n",
                      'XXX'."\n",
                      'Haben wir eine Potenz einer Primzahl \\latexmath{ p_i } größer als Eins, wie \\latexmath{ p_i^k }, mit \\latexmath{ k > 1 },'."\n".
                    'dann ist das Primturm-Potenzraster nicht mehr sicher lückenlos (niemals?), wie bei der Neun: \\latexmath{ 3^2 = 9 }.'."\n".
                    'Denn die \\latexmath{ 5 } und \\latexmath{ 7 } bleiben Lücken.'."\n",
                      'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Das Zählen der natürlichen Zahlen in Primzahlen', subline =>
                  'Die zählende Konstruktion der Primzahlen und damit der natürlichen Zahlen gleichzeitig')),
                  array( 'text', array( text => array(
                    'Die Menge der Primzahlen \\latexmath{ \mathbb{P} } können wir nun durch vollständige Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}} erzeugen.'."\n".
                    'Mit ihr entsteht sodann natürlich auch die Menge aller natürlichen Zahlen.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Es existiere also die Menge'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \exists \mathbb{P}\!: *( 2 \in \mathbb{P} \land \forall x\!: *( x \in \mathbb{P} \Rightarrow lpr\!*( *( x + 1 *)\overline{\#} *) \in \mathbb{P} *) *)  }'),
                      // array( display => 'on',  latex => '{  \exists \mathbb{P}_{0}\!: *( 0 \in \mathbb{P}_{0} \land \forall x\!: *( x \in \mathbb{P}_{0} \Rightarrow lpr\!*( *( x + 1 *)\overline{\#} *) \in \mathbb{P}_{0} *) *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'aller endlichen Primzahlen.'."\n".
                      'Hier in nach ihrer Anordnung auf Basis der jeweiligen Vorgänger konstruiert.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Dieses Vorgehen können wir als natürliche, vollständige Definition der endlichen Primzahlen verstehen.'."\n",
                      'Dies ist in dieser Anordnung nur mit der Mengen-Primfakultät möglich, die uns,'."\n".
                    'mit Hilfe des lückenlosen Primturm-Potenzrasters,'."\n".
                    'die Menge der natürlichen Zahlen über die Menge der Primzahlen konstruiert.'."\n".
                    'Wobei an der Mengen-Primfakultät entscheidend ist, dass sie uns die Primfaktoren vom Beginn an lückenlos'."\n".
                    'in der ersten Potenz liefert.'."\n",
                      'Dadurch wird immer die nächste Primzahl berechnet, die dann wieder mit all ihren'."\n".
                    'vorangegangenen Primzahlen, die darauf folgende berechnet.'."\n".
                    ''))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX',
                Title => 'Beispiele zum Zählen der natürlichen Zahlen in Primzahlen …',
                TitleVis => 'Beispiele zum Zählen der natürlichen Zahlen in Primzahlen:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Nachfolgend beispielhaft die Berechnung der ersten Primzahlen der Menge \\latexmath{ \mathbb{P} }.'."\n",
                      'Die jeweiligen Primturm-Potenzraster Mengen finden wir in den'."\n".
                    '\\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Beispiele-Primzahlturmzerlegung-PrimturmPotenzraster+lueckenloses}{entsprechenden Beispielen} oben.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei der Beginn der Primzahlen \\latexmath{ \mathbb{P} } in den natürlichen Zahlen'."\n".
                      // 'Sei der Beginn der Primzahlen \\latexmath{ \mathbb{P}_{0} }, mit der Null, in den natürlichen Zahlen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on',  latex => '{  p_{-1}  =  \varnothing  =  \boxed{  0  }  }'),
                      array( display => 'on',  latex => '{  p_{1}  =  \boxed{  2  }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und sei die jeweils nächste Primzahl nach Formel XXX gegeben,'."\n".
                      'dann lautet der Beginn der nachfolgenden Primzahlen, sich in angeordneter Reihenfolge ergebend,'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on',  latex => '{  p_{-1}  =  \varnothing  =  \boxed{  0  }  }'),
                      /* array( display => 'on',  latex => '{  p_{0}  =  lpr\!*( *( p_{-1} + 1 *)\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{0}  =  lpr\!*( 1\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{0}  =  lpr( 1 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{0}  =  *\{ 0 *\}  =  \boxed{  1  }  }'),
                      array( display => 'on',  latex => '{  p_{1}  =  lpr\!*( *( p_{0} + 1 *)\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{1}  =  lpr\!*( 2\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{1}  =  lpr( 1 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{1}  =  *\{ 0, 1 *\}  =  \boxed{  2  }  }'), */
                      array( display => 'on',  latex => '{  p_{2}  =  lpr\!*( *( p_{1} + 1 *)\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{2}  =  lpr\!*( 3\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{2}  =  lpr\!*( *\{ 0, 1, 2 *\}\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{2}  =  lpr( 2 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{2}  =  *\{ 0, 1, 2 *\}  =  \boxed{  3  }  }'),
                      array( display => 'on',  latex => '{  p_{3}  =  lpr\!*( *( p_{2} + 1 *)\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{3}  =  lpr\!*( 4\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{3}  =  lpr\!*( *\{ 0, 1, 2, 3 *\}\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{3}  =  lpr( 2 \cdot 3 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{3}  =  lpr( 6 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{3}  =  *\{ 0, 1, 2, 3, 4 *\}  =  \boxed{  5  }  }'),
                      array( display => 'on',  latex => '{  p_{4}  =  lpr\!*( *( p_{3} + 1 *)\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{4}  =  lpr\!*( 6\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{4}  =  lpr\!*( *\{ 0, 1, 2, 3, 4, 5 *\}\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{4}  =  lpr( 2 \cdot 3 \cdot 5 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{4}  =  lpr( 30 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{4}  =  *\{ 0, 1, 2, 3, 4, 5, 6 *\}  =  \boxed{  7  }  }'),
                      array( display => 'on',  latex => '{  p_{5}  =  lpr\!*( *( p_{4} + 1 *)\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{5}  =  lpr\!*( 8\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{5}  =  lpr\!*( *\{ 0, 1, 2, 3, 4, 5, 6, 7 *\}\overline{\#} *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{5}  =  lpr( 2 \cdot 3 \cdot 5 \cdot 7 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{5}  =  lpr( 210 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{5}  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 *\}  =  \boxed{  11  }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'bis ins Unendliche.'."\n",
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
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                    ))),

                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Der Beweis der Primzahlprodukt-Vermutung', subline =>
                  'Wenn das Zählen der natürlichen Zahlen in Primzahlen ins Unendliche zu \\latexmath{ \omega } übergeht')),

                  array( 'notice', array( Display => 'hideContent', text => array(
                    '• Den Ausdruck ›Erzeugungskombinatorik‹ auch im oder nach dem Beweis wieder aufgreifen:',
                    '– Dieser steht im Zusammenhang mit der Beschreibung der endlichen und aktual unendlichen natürlichen Zahlen durch das Primturm-Potenzraster.',
                    ))),

                  array( 'text', array( text => array(
                    'Das besondere Verhalten des Primturm-Potenzrasters mit der Mengen-Primfakultät einer Primzahl als Parameter,'."\n".
                    'wie zuvor erklärt, können wir jetzt durch den Übergang ins Unendliche zu \\latexmath{ \omega }'."\n".
                    'für den Beweis nutzen, weil wir so auch alle natürlichen Zahlen konstruieren:'."\n",
                      'Da \\latexmath{ \omega } die Menge der natürlichen Zahlen \\latexmath{ \mathbb{N} } repräsentiert,'."\n".
                    'enthält es natürlich auch alle endlichen Primzahlen.'."\n".
                    'Die Mengen-Primfakultät \\latexmath{ \omega\overline{\#} } ist also das Produkt'."\n".
                    'aller endlichen Primzahlen, wie schon gesagt.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Das Primturm-Potenzraster \\latexmath{ pr\!*( \omega\overline{\#} *) } aller endlichen Primfaktoren'."\n".
                      'in \\latexmath{ \omega\overline{\#} } geht an seinem lückenlosen Beginn zur Menge der natürlichen Zahlen \\latexmath{ \mathbb{N} },'."\n".
                      'also zu \\latexmath{ \omega }, über.'."\n".
                      'Das ist so, weil aus der Kombination aller endlichen Primzahlen in beliebiger, endlicher Potenz in einem Produkt'."\n".
                      'zunächst einmal alle natürlichen Zahlen gebildet werden können:\\footnote{\\const{SupNum_g_footnote_text_FundamentalsatzDerArithmetik}}'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pt\!*( \omega\overline{\#} *)  =  *\{ 2, 3, 5, 7, 11, 13 \cdots *\}  }'),
                      array( display => 'on',  latex => '{  pr\!*( \omega\overline{\#} *)  =  pr( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr\!*( \omega\overline{\#} *)  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, \cdots \\\ \qquad\qquad\qquad\qquad\;\;\; 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\;\;\; 2^{2} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\;\;\; 2 \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\;\;\; 2^{3} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\;\;\; 2 \cdot 3 \cdot 5^{2} \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\;\;\; 2^{2} \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\qquad\;\;\; \vdots \; *\}  }',
                                          label_text => '\\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-pr-MengenPrimfakultaet-omega}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wo die aktual unendlichen Elemente in der Menge beginnen, sind diese nicht mehr lückenlos, da es in den'."\n".
                      'Biordinalzahlen sowohl natürliche Vorgänger als auch Nachfolger dieser Zahlen gibt, die nicht im Raster enthalten sind.'."\n".
                      'Lückenlos, aber trotzdem unendlich viele, sind also nur die endlichen Zahlen der Menge'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  lpr\!*( \omega\overline{\#} *)  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, \cdots *\} \\\ \qquad\qquad\qquad\qquad\qquad\qquad  =  \mathbb{N}  =  \omega  \;\;,  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-lpr-MengenPrimfakultaet-omega-ist-omega', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-lpr-MengenPrimfakultaet-omega-ist-omega}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'die sich dann zu allen endlichen natürlichen Zahlen ergibt.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Was passiert nun beim Übergang von den endlichen Primzahlen zu \\latexmath{ \omega } mit den Entsprechungen der Formeln \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-n-entspricht-pr-n}'."\n".
                    'und \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-entspricht-MengenPrimfakultaet-p-i}?'."\n",
                      'Abgesehen davon, dass es sich bei \\latexmath{ \omega } nach \\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Wir-vermuten-omega-ist-Produkt-aller-endlichen-Primzahlen}{obiger Feststellung}'."\n".
                    'nicht mehr um eine Primzahl handelt, können wir sagen:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Da das lückenlose Primturm-Potenzraster der Mengen-Primfakultät einer endlichen Primzahl in Formel \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-ist-lpr-MengenPrimfakultaet-p-i} gleich dieser Primzahl ist'."\n".
                      'und entsprechend in der Formel \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-lpr-MengenPrimfakultaet-omega-ist-omega} das selbe für \\latexmath{ \omega } gilt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *[  p  =  lpr\!*( p\overline{\#} *)  *]  }',
                                          label_text => '\\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-ist-lpr-MengenPrimfakultaet-p-i}', label_incr => false),
                      array( display => 'on',  latex => '{  \omega  =  lpr\!*( \omega\overline{\#} *)  }',
                                          label_text => '\\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-lpr-MengenPrimfakultaet-omega-ist-omega}', label_incr => false),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die allgemeine Entsprechung \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-n-entspricht-pr-n} ist von uns'."\n".
                      'so konstruiert worden und gilt daher auch für alle Primzahlen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N} *) *[  n  \widehat{=}  pr( n )  *]  }',
                                          label_text => '\\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-n-entspricht-pr-n}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p \in \mathbb{P} *) *[  p  \widehat{=}  pr( p )  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Sie gilt dann auch für \\latexmath{ \omega }, können wir an Formel \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-pr-MengenPrimfakultaet-omega}'."\n".
                      'erkennen, wenn wir \\latexmath{ \mathbb{N} } auf \\latexmath{ \mathbb{N}_\infty } erweitern, da sich auch für \\latexmath{ \omega } ein einzigartiges Spektrum oder Raster ergibt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N}_{\infty} *) *[  n  \widehat{=}  pr( n )  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \omega  \widehat{=}  pr( \omega )  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Aus der Gleichheit in Formel \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-ist-lpr-MengenPrimfakultaet-p-i} folgt für'."\n".
                      'alle Primzahlen die Entsprechung für das Primturm-Potenzraster, die sich dann auch beim Übergang zu \\latexmath{ \omega } erhält:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *[  p  \widehat{=}  pr\!*( p\overline{\#} *)  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \omega  \widehat{=}  pr\!*( \omega\overline{\#} *)  }'),
                      // array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *[  lpr\!*( p\overline{\#} *)  \widehat{=}  pr( p )  *]  }'),
                      // array( display => 'on',  latex => '{  \Rightarrow  lpr\!*( \omega\overline{\#} *)  \widehat{=}  pr( \omega )  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'So geht dann auch die Entsprechung \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-entspricht-MengenPrimfakultaet-p-i}'."\n".
                      'zu \\latexmath{ \omega } über'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *[  p  \widehat{=}  p\overline{\#}  *]  }',
                                          label_text => '\\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-p-i-entspricht-MengenPrimfakultaet-p-i}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \omega  \widehat{=}  \omega\overline{\#}  \;\;,  }'),
                    ))),
                  // array( 'text', array( Shape  => 'derivation', text => array(
                  //     'Diese Entsprechung – diese Bijektion – und diese Gleichheit, wo bei beiden eine Seite der Gleichung identisch'."\n".
                  //     'ist und die andere Seite eine bijektive Funktion mit jeweils anderem Term als Parameter ist, zeigen,'."\n".
                  //     'dass ihre sich unterscheidenden Funktionsparameter gleich sein müssen:'."\n".
                  //     ''))),
                  // array( 'text', array( Shape  => 'derivation', text => array(
                  //     'Diese Entsprechung – diese Bijektion – und diese Gleichheit, wo bei beiden eine Seite identisch ist, zeigen,'."\n".
                  //     'dass sich ihre unterscheidenden Teile mindestens ebenfalls einander entsprechen oder gar gleich sein müssen:'."\n".
                  //     ''))),
                  // array( 'equations',
                  //   array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                  //     array( display => 'on',  latex => '{  \Rightarrow  \omega\overline{\#}  \widehat{=}  \omega  }'),
                  //   ))),
                  // array( 'text', array( Shape  => 'derivation', text => array(
                  //     'Eine Entsprechung ohne Variable, wo beiden Seiten ein Wert zugeordnet ist, kann nur eine Gleichheit bedeuten:'."\n".
                  //     ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'wo sich oben die Frage stellte, ob sie bei \\latexmath{ \omega } zur Gleichheit wird.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Die beiden letzten Entsprechungen und der Übergang zwischen ihnen basieren darauf, dass auf der'."\n".
                    'rechten Seite jeweils die Mengen-Primfakultät steht.'."\n".
                    'Ebenso gilt dies für die letzte oben stehende Gleichheit.'."\n".
                    'Würde das Primzahlprodukt nicht bei der kleinsten Primzahl beginnen oder eine Lücke aufweisen,'."\n".
                    'dann bräche alles zusammen.'."\n".
                    'Die wird gleich ein zentraler Bestandteil unseres Beweises sein.'."\n",
                      'Wir haben nun zwei wertmäßige Darstellungen der endlichen Primzahlen \\latexmath{ p }:'."\n".
                    'Zum einen beschreiben wir die Anzahl der ersten \\latexmath{ p } natürlichen Zahlen mit der Menge \\latexmath{ p } selber,'."\n".
                    'die genau diese Zahlen mittels des Zählens enthält.'."\n".
                    'Zum anderen beschreiben wir die ersten \\latexmath{ p } natürlichen Zahlen mit der Mengen-Primfakultät'."\n".
                    '\\latexmath{ p\overline{\#} } dieser Menge, die uns ein Zahlenraster in Form einer Menge \\latexmath{ pr\!*( p\overline{\#} *) } liefert,'."\n".
                    'das genau die Menge \\latexmath{ p } lückenlos enthält und aus der wir diese mittels'."\n".
                    '\\latexmath{ lpr\!*( p\overline{\#} *) } extrahieren können.'."\n".
                    'Beide Beschreibungen entsprechen einander, sind im Endlichen vom Wert her aber im Allgemeinen nicht gleich: \\latexmath{ p \widehat{=} p\overline{\#} }.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Übergang ins Unendliche zu allen endlichen natürlichen Zahlen der Menge \\latexmath{ \omega }} \\\\'."\n".
                    'Nun passiert beim Übergang ins Unendliche zu \\latexmath{ \omega } etwas besonderes:'."\n",
                      'Die Anzahl der Zahlen der Menge der ersten \\latexmath{ \omega } natürlichen Zahlen bleibt \\latexmath{ \omega } selbst.'."\n".
                    'Die Mengen-Primfakultät \\latexmath{ \omega\overline{\#} } dieser Menge wird nun zum Produkt aller endlichen Primzahlen.'."\n".
                    'Die Menge des von diesem unendlich großen Produkt gelieferten Primturm-Potenzraster \\latexmath{ pr\!*( \omega\overline{\#} *) } wird in seinem Beginn endlicher natürlicher Zahlen damit unendlich groß sowie vollständig lückenlos und'."\n".
                    'damit gilt sowohl \\latexmath{ \omega \widehat{=} pr\!*( \omega\overline{\#} *) } als auch \\latexmath{ \omega = lpr\!*( \omega\overline{\#} *) }.'."\n",
                    /*   'Aus der Entsprechung wird beim Übergang also eine Gleichheit, weil aus der einfachen Potenz einer jeden endlichen Primzahl'."\n".
                    'des Produkts \\latexmath{ \omega\overline{\#} } durch die Kombinatorik jeder dieser Primzahlen in jeder endlichen Potenz'."\n".
                    'jede endliche natürliche Zahl entsteht.'."\n".
                    'Die Menge ist also die aller natürlichen Zahlen,'."\n".
                    'in der es weder eine größte natürliche Zahl noch eine größte Primzahl gibt.'."\n".
                    'Dies ist wiederum der Grund für die Lückenlosigkeit des Zahlenrasters.'."\n",
                      'Die Beschreibung von \\latexmath{ \omega } durchs Zählen und die durch das Zahlenraster aller'."\n".
                    'endlichen Primzahlen, fallen also zusammen.'."\n". */
                      'Die Beschreibung von \\latexmath{ \omega } durchs Zählen und die durch die Mengen-Primfakultät \\latexmath{ \omega\overline{\#} },'."\n".
                    'die das Zahlenraster aller endlichen Primzahlen erzeugt, entsprechen also ebenfalls einander: \\latexmath{ \omega \widehat{=} \omega\overline{\#} }.'."\n",
                    //   'Was bedeutet das für die Entsprechung \\latexmath{ \omega \widehat{=} \omega\overline{\#} }?'."\n",
                    //   'Wird sie nun auch eine Gleichheit und es gilt sogar \\latexmath{ \omega = pr( \omega ) }?'."\n",
                      'Wir wissen mit der \\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Wir-vermuten-omega-ist-Produkt-aller-endlichen-Primzahlen}{oben getroffenen Feststellung}:'."\n".
                    'Die Primfaktorzerlegung von \\latexmath{ \omega } ist'."\n".
                    'ein unendlich großer Teil derer von \\latexmath{ s }, der in der Zeile oder den Zeilen der Primfakultät'."\n".
                    'seines Primzahl-Flächenprodukts zu finden ist.'."\n",
                      'Die gerade gezeigten Entsprechungen beruhen auf Primfakultäten, lückenlos und bei der kleinsten'."\n".
                    'Primzahl beginnend.'."\n".
                    'Fehlt eine Primzahl mitten drinne oder es ist eine mehrfach im Produkt, so fällt die Entsprechung in sich zusammen.'."\n".
                    // 'XXX'."\n".
                    // 'XXX'."\n".
                    /* 'Aus diesem Grund ist \\latexmath{ \omega } dann auch keine Primzahl mehr'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                    'Die Menge des Primfaktoranteil-Potenzrasters der Mengen-Primfakultät \\latexmath{ pr\!*( p\overline{\#} *) }'."\n".
                    'der endlichen Primzahlen \\latexmath{ p }, die beide einander entsprechen — \\latexmath{ p \widehat{=} pr\!*( p\overline{\#} *) } —,'."\n".
                    'also einander eineindeutig zugeordnet werden können, aber nicht gleich sind, jedoch im Fall des lückenlosen Primfaktoranteil-Potenzrasters'."\n".
                    'sogar gleich sind — \\latexmath{ p = lpr\!*( p\overline{\#} *) } —, zeigen, dass die Primzahlen in'."\n".
                    'der Menge der Zahl \\latexmath{ p } all deren Elemente, die natürlichen Zahlen von Null bis \\latexmath{ p - 1 }, lückenlos als Primfaktoren'."\n".
                    'erzeugen.'."\n",
                      'Die Menge \\latexmath{ p } dieser ersten \\latexmath{ p } natürlichen Zahlen, eben die Zahlen von Null bis \\latexmath{ p - 1 },'."\n".
                    'stellt auch den Wert deren Anzahl \\latexmath{ p } dar.'."\n".
                    'Aber durch den zuvor geschilderten Zusammenhang beschreibt auch die Zahl \\latexmath{ p\overline{\#} } die Menge \\latexmath{ p }'."\n".
                    'über die Beschreibung ihrer Struktur und beide entsprechen einander: \\latexmath{ p \widehat{=} p\overline{\#} }'."\n",
                      'So hat die Menge \\latexmath{ p }, der \\latexmath{ p } ersten natürliche Zahlen, zum einen deren Anzahl-Wert'."\n".
                    'als Beschreibung.'."\n".
                    'Zum anderen wird die Menge \\latexmath{ p } durch ihren Struktur-Wert \\latexmath{ p\overline{\#} } dargestellt,'."\n".
                    'der ausschließlich bei Primzahlen gleich \\latexmath{ lpr\!*( p\overline{\#} *) } ist.'."\n",
                      'Beim Übergang von immer größer werdenden Primzahlen \\latexmath{ p } zum unendlichen \\latexmath{ \omega }'."\n".
                    'geht letztere Beschreibung der ersten \\latexmath{ p } natürlichen Zahlen zu den ersten \\latexmath{ \omega }'."\n".
                    'natürlichen Zahlen über.'."\n".
                    '\\latexmath{ \omega } steht, laut seiner Definition, denn auch für alle endlichen natürlichen Zahlen.'."\n",
                      'Die größte Zahl in der Menge des endlichen \\latexmath{ p }, also \\latexmath{ p - 1 }, existiert in \\latexmath{ \omega }'."\n".
                    'nach dem Übergang aber nicht mehr.'."\n".
                    'Mit anderen Worten: Die Anzahl der Elemente der Menge \\latexmath{ \omega = \mathbb{N} } kann nicht mehr mit dem Wert des größten'."\n".
                    'Elements der Menge plus Eins beschrieben werden.'."\n".
                    'Wir können also die Anzahl der Elemente in \\latexmath{ \omega } nicht mit \\latexmath{ *( \omega - 1 *) + 1 } beschreiben,'."\n".
                    'so, dass \\latexmath{ \omega - 1 } Element von \\latexmath{ \omega } ist.'."\n".
                    'Denn die Zahl \\latexmath{ \omega - 1 } ist zwar in der Theorie der Biordinalzahlen definiert, aber ist hierin kein Element'."\n".
                    'von \\latexmath{ \omega }.'."\n",
                      'Einzig die zweite Art der Beschreibung der Menge \\latexmath{ \omega } bleibt erhalten und zwar durch \\latexmath{ \omega\overline{\#} }.'."\n".
                    'XXX \\latexmath{ pr\!*( \omega\overline{\#} *) }'."\n".
                    'und im Besonderen durch \\latexmath{ lpr\!*( \omega\overline{\#} *) }, wobei letzteres genau \\latexmath{ \omega } gleich sein muss, also \\latexmath{ \omega = lpr\!*( \omega\overline{\#} *) }.'."\n",
                      'Nach dem Übergang gilt aber wegen \\latexmath{ lpr\!*( \omega\overline{\#} *) = pr\!*( \omega\overline{\#} *) } auch \\latexmath{ \omega = pr\!*( \omega\overline{\#} *) }.'."\n".
                    'Denn in der Menge \\latexmath{ pr\!*( \omega\overline{\#} *) } sind alle Rasterlücken gefüllt, weil alle endlichen natürlichen Zahlen, bis auf die Null,'."\n".
                    'durch die Kombination aller endlichen Primzahlen in \\latexmath{ \omega\overline{\#} } und ihren Potenzen beschrieben werden.'."\n".
                    'Was bedeutet, beim Übergang wird aus der Entsprechung \\latexmath{ p \widehat{=} pr\!*( p\overline{\#} *) } die Gleichheit'."\n".
                    '\\latexmath{ \omega = pr\!*( \omega\overline{\#} *) }.'."\n",
                      'Dies lässt wiederum vermuten, dass aus der Entsprechung \\latexmath{ p \widehat{=} p\overline{\#} } ebenfalls eine Gleichheit wird, also'."\n".
                    '\\latexmath{ \omega ?= \omega\overline{\#} }.'."\n",
                      'Und genau diese Gleichheit wird mit der \\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Wir-vermuten-omega-ist-Produkt-aller-endlichen-Primzahlen}{oben getroffenen Feststellung},'."\n".
                    'die Primfaktorzerlegung von \\latexmath{ \omega } ist'."\n".
                    'ein unendlich großer Teil derer von \\latexmath{ s }, der in der Zeile oder den Zeilen der Primfakultät'."\n".
                    'seines Primzahl-Flächenprodukts zu finden ist, bestätigt.'."\n",
                      '\\latexmath{ lpr\!*( p\overline{\#} *) } führt uns, mit der Mengen-Primfakultät \\latexmath{ p\overline{\#} } im Parameter, über'."\n".
                    'das Zählen aller Primzahlen mit Hilfe von \\latexmath{ lpr\!*( p\overline{\#} + 1 *) } mittels'."\n".
                    'vollständiger Induktion zur Menge aller endlichen natürlichen Zahlen \\latexmath{ \omega }.'."\n".
                    'Dabei gibt \\latexmath{ p } immer die Anzahl der Zahlen an, die in der Menge \\latexmath{ lpr\!*( p\overline{\#} *) }'."\n".
                    'enthalten sind.'."\n".
                    'Und beim Übergang ist diese Anzahl dann \\latexmath{ \omega } mit in der Menge \\latexmath{ lpr\!*( \omega\overline{\#} *) }.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      'Dies gelingt nur mit der Mengen-Primfakultät, in der alle Primzahlen von Beginn an'."\n".
                    'und in der ersten Potenz, enthalten sein müssen.'."\n".
                    'Beim Übergang zu \\latexmath{ \omega } geht dieses Produkt zum Produkt aller endlichen Primzahlen'."\n".
                    'über, dessen Wert dann auch der von \\latexmath{ \omega } sein muss.'."\n",
                      'Weil es in der Menge \\latexmath{ \omega } keine größte Primzahl gibt, ist \\latexmath{ \omega }'."\n".
                    'keine Primzahl mehr und es wird aus der Entsprechung im Endlichen \\latexmath{ p \widehat{=} p\overline{\#} }'."\n".
                    'beim unendlichen Übergang zu \\latexmath{ \omega } die Gleichheit.'."\n". */
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Deshalb kann \\latexmath{ \omega } nur der Teil des Primzahl-Flächenprodukts von \\latexmath{ s } sein,'."\n".
                      'der lückenlos genau eine Zeile aller endlichen Primzahlen enthält.'."\n".
                      'Unsere Vermutung der Gleichheit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \boxed{\;\;  \omega  =  \omega\overline{\#}  \;\;}  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-MengenPrimfakultaet-omega', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-MengenPrimfakultaet-omega}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'muss also wahr sein, was wir zeigen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Hiermit erhalten wir den Beweis unserer Primzahlprodukt-Vermutung.'."\n",
                      'Ein sehr interessanter, weil aufschlussreicher, Übergang,'."\n".
                    'durch den wir eine Primfaktorzerlegung für \\latexmath{ \omega } erhalten.'."\n".
                    'Eine mir bisher unbekannte Eigenschaft der unendlichen Größe der vollständigen Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'So ist nun auch klar, dass'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \boxed{\;\;  s  =  \omega^{\omega}  \;\;}  \;\;,  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => true),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'wodurch wir auch ein genaueres Bild von \\latexmath{ s } bekommen.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Dieser Zusammenhang ist aufgrund seiner Erkenntnisbedeutung auch Thema des Theorielogos.'."\n",
                      'Die Theorie der Superial-Zahlen liefert uns mit Hilfe der Theorie der Biordinalzahlen'."\n".
                    'einen neuen und tiefen Einblick in die Struktur der endlichen Primzahlen.'."\n".
                    'Und sie erweitert die endlichen Primzahlen zu aktual unendlichen Primzahlen.'."\n".
                    'Dies vertieft unser Verständnis der Primzahlen weiter.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Betrachtung des Beweises', subline =>
                  'Das Verständnis des Übergangs der Mengen-Primfakultät und des Primturm-Potenzrasters ins Unendliche zu \\latexmath{ \omega }')),
                  array( 'text', array( text => array(
                    'Wir stellen fest, dass es uns über die Erzeugung jeder endlichen Primzahl gelungen ist,'."\n".
                    'die natürlichen Zahlen durch eine vollständige Induktion zu konstruieren.'."\n".
                    'Dazu wird per Mengen-Primfakultät ein Primzahlprodukt erzeugt, das sich von Schritt zu Schritt immer weiter,'."\n".
                    'zum Produkt aller endlichen Primzahlen vervollständigt.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Jeder Primzahl-Schritt teilt \\latexmath{ \omega } …} \\\\'."\n".
                    'Jeder dieser Schritte, also jede erzeugte Primzahl, ist, nach dem Beweis, Teiler des vollständigen'."\n".
                    'aktual unendlichen Ergebnisses \\latexmath{ \omega }.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Jeder der Primzahl-Schritte \\latexmath{ p = lpr\!*( p\overline{\#} *) }'."\n".
                      'teilt die Anzahl aller natürlichen Zahlen \\latexmath{ \omega } ganzzahlig'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p \in \mathbb{P} *) *[  \frac{ \omega }{ p }  \in  \mathbb{N}_\infty  *]  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'wie wir bewiesen haben.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Als wenn diese Zählschritte beim Übergang ins Unendliche zu \\latexmath{ \omega } ein Produkt aus all diesen Schritten bilden.'."\n".
                    'Und in der Tat benötigen wir ja auch zur Konstruktion dieser Schritte das Produkt aller Primzahlen'."\n".
                    'vor der noch unbekannten.'."\n".
                    'So können wir es so verstehen, dass dem Ergebnis beim Übergang zu \\latexmath{ \omega } dann logischerweise'."\n".
                    'das Produkt aller endlichen Primzahlen zugrunde liegt.'."\n",
                      '\\latexmath{ \omega } ist nun keine Primzahl mehr, weil ihr alle endlichen Primzahlen zugrunde liegen,'."\n".
                    'die nicht enden.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{… obwohl jeder Primzahl-Schritt kein Teiler eines anderen Primzahl-Schritts ist} \\\\'."\n".
                    'Aber jedes dieser Konstruktionsergebnisse ist nicht Teiler auch nur eines der anderen Ergebnisse,'."\n".
                    'weil es ja alle Primzahlen sind.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Es existiert keine endliche Primzahl, die Teiler einer von ihr verschiedenen, anderen ist:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists p_{0}, p_{1} \in \mathbb{P} *) *( p_{0} \neq p_{1} *) *[  \frac{ p_{0} }{ p_{1} } \in \mathbb{N}  \lor  \frac{ p_{1} }{ p_{0} } \in \mathbb{N}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Wie bei Primzahlen per Definition selbstverständlich.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Der Übergang ist also wirklich etwas besonderes, von Schritten, die alle keine Teiler voneinander sind,'."\n".
                    'zum Ergebnis bei \\latexmath{ \omega }, das alle Schritte in einem Produkt zusammenfasst.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Sichtbarmachung der Produktstruktur von \\latexmath{ \omega } im Kontext ihres Primturm-Potenzrasters} \\\\'."\n".
                    'Wie wir an Formel \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-pr-MengenPrimfakultaet-omega}'."\n".
                    'erkennen können, wird die Produktstruktur von \\latexmath{ \omega } schon vor dem Beweis im Primturm-Potenzraster'."\n".
                    '\\latexmath{ pr\!*( \omega\overline{\#} *) } der Mengen-Primfakultät von \\latexmath{ \omega } sichtbar.'."\n",
                      'Die Struktur des Produkts aller endlichen Primzahlen taucht nach der ersten Lücke des Rasters auf,'."\n".
                    'nachdem alle endlichen natürlichen Zahlen lückenlos durch sind.'."\n".
                    'Hier enthält dieses Produkt die Primzahl \\latexmath{ 2 } allerdings dann schon doppelt.'."\n".
                    'Wenn wir hier nun unser bewiesenes Wissen einsetzen, können wir die Verbindung erkennen.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Aufgrund unseres Beweises und seines Ergebnisses aus Formel \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-MengenPrimfakultaet-omega} folgt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  pr\!*( \omega *)  =  pr\!*( \omega\overline{\#} *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Daher stellt sich die Formel \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-pr-MengenPrimfakultaet-omega}'."\n".
                      'nun folgendermaßen dar:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  pr\!*( \omega *)  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, \cdots \\\ \qquad\qquad\qquad\quad\;\;\;\, 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, 2^{2} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, 2 \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, 2^{3} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, 2 \cdot 3 \cdot 5^{2} \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, 2^{2} \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, \vdots \; *\}  }',
                                          label_text => '\\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-pr-MengenPrimfakultaet-omega}', label_incr => false),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr\!*( \omega *)  =  *\{ 0, 1, 2, 3, 2^{2}, 5, 2 \cdot 3, 7, 2^{3}, 3^{2}, 2 \cdot 5, \cdots \\\ \qquad\qquad\qquad\quad\;\;\;\, 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, 2^{2} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, 2 \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, 2^{3} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, 2 \cdot 3 \cdot 5^{2} \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, 2^{2} \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\;\;\;\, \vdots \; *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Aufgrund unseres Beweises können wir nun das Raster auch wie folgt schreiben:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr\!*( \omega *)  =  \omega \\\ \qquad\qquad\qquad\quad\;\;\; \cup \\\ \qquad\qquad\qquad\;\;\, *\{ 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; 2^{2} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; 2 \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; 2^{3} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; 2 \cdot 3 \cdot 5^{2} \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; 2^{2} \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; \vdots \; *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr\!*( \omega *)  =  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots \\\ \qquad\qquad\qquad\quad\;\;\; \cup \\\ \qquad\qquad\qquad\;\;\, *\{ 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; 2^{2} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; 2 \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; 2^{3} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; 2 \cdot 3 \cdot 5^{2} \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; 2^{2} \cdot 3^{2} \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \\\ \qquad\qquad\qquad\quad\; \vdots \; *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Auf diese Weise erhalten wir ein interessantes Muster.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Das Muster zeigt die Verbindung aller Zeilen miteinander.'."\n".
                    'Sie stehen so gesehen in einer Systematik zueinander,'."\n".
                    'in der sich die Potenzen der Primzahlen von Eins zu höheren variieren.'."\n",
                      'Das Gleiche gilt auch für die Entstehung der ersten Zeile selber:'."\n".
                    'Sie kommt durch die Variation der Potenzen aller endlichen Primzahlen zustande, die, größtenteils als Produkte,'."\n".
                    'alle endlichen natürlichen Zahlen ergeben, bis auf die Null.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Eine weitere Schreibweise ist:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr\!*( \omega *)  =  \omega \\\ \qquad\qquad\qquad\quad\;\;\; \cup \\\ \qquad\qquad\qquad\;\;\, *\{ \omega, \\\ \qquad\qquad\qquad\quad\; 2 \cdot \omega, \\\ \qquad\qquad\qquad\quad\; 3 \cdot \omega, \\\ \qquad\qquad\qquad\quad\; 2^{2} \cdot \omega, \\\ \qquad\qquad\qquad\quad\; 5 \cdot \omega, \\\ \qquad\qquad\qquad\quad\; 2 \cdot 3 \cdot \omega, \\\ \qquad\qquad\qquad\quad\; \vdots \; *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Erweitert sieht diese so aus:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr\!*( \omega *)  =  \omega \\\ \qquad\qquad\qquad\quad\;\;\; \cup \\\ \qquad\qquad\qquad\;\;\, *\{ \omega, 2 \omega, 3 \omega, 4 \omega, 5 \omega, 6 \omega, \cdots \\\ \qquad\qquad\qquad\quad\; \omega^{2}, 2 \omega^{2}, 3 \omega^{2}, 4 \omega^{2}, 5 \omega^{2}, 6 \omega^{2}, \cdots \\\ \qquad\qquad\qquad\quad\; \vdots \; \\\ \qquad\qquad\qquad\quad\;\, \omega^{\omega - 1}, 2 \omega^{\omega - 1}, 3 \omega^{\omega - 1}, 4 \omega^{\omega - 1}, 5 \omega^{\omega - 1}, 6 \omega^{\omega - 1}, \cdots \\\ \qquad\qquad\qquad\quad\; \omega^{\omega}, 2 \omega^{\omega}, 3 \omega^{\omega}, 4 \omega^{\omega}, 5 \omega^{\omega}, 6 \omega^{\omega}, \cdots \\\ \qquad\qquad\qquad\quad\; \omega^{\omega + 1}, 2 \omega^{\omega + 1}, 3 \omega^{\omega + 1}, 4 \omega^{\omega + 1}, 5 \omega^{\omega + 1}, 6 \omega^{\omega + 1}, \cdots \\\ \qquad\qquad\qquad\quad\; \vdots \; \\\ \qquad\qquad\qquad\quad\;\, \omega^{2 \omega - 1}, 2 \omega^{2 \omega - 1}, 3 \omega^{2 \omega - 1}, 4 \omega^{2 \omega - 1}, 5 \omega^{2 \omega - 1}, 6 \omega^{2 \omega - 1}, \cdots \\\ \qquad\qquad\qquad\quad\; \omega^{2 \omega}, 2 \omega^{2 \omega}, 3 \omega^{2 \omega}, 4 \omega^{2 \omega}, 5 \omega^{2 \omega}, 6 \omega^{2 \omega}, \cdots \\\ \qquad\qquad\qquad\quad\; \omega^{2 \omega + 1}, 2 \omega^{2 \omega + 1}, 3 \omega^{2 \omega + 1}, 4 \omega^{2 \omega + 1}, 5 \omega^{2 \omega + 1}, 6 \omega^{2 \omega + 1}, \cdots \\\ \qquad\qquad\qquad\quad\; \vdots \; *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dies erscheint mir als Menge aller endlichen Ordinalzahlen und danach aller ordinalen Limeszahlen\\footnote{Vgl. \\cite{wiki:Ordinalzahl:2021}, 3 Motivation und Definition, 3.2 Limes- und Nachfolgerzahlen.}.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Teile davon können wir nun wegen unseres Beweises durch Formel \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}'."\n".
                      'auch mit \\latexmath{ s } ausdrücken:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  pr\!*( \omega *)  =  \omega \\\ \qquad\qquad\qquad\quad\;\;\; \cup \\\ \qquad\qquad\qquad\;\;\, *\{ \omega, 2 \omega, 3 \omega, 4 \omega, 5 \omega, 6 \omega, \cdots \\\ \qquad\qquad\qquad\quad\; \omega^{2}, 2 \omega^{2}, 3 \omega^{2}, 4 \omega^{2}, 5 \omega^{2}, 6 \omega^{2}, \cdots \\\ \qquad\qquad\qquad\quad\; \vdots \; \\\ \qquad\qquad\qquad\quad\;\, \omega^{\omega - 1}, 2 \omega^{\omega - 1}, 3 \omega^{\omega - 1}, 4 \omega^{\omega - 1}, 5 \omega^{\omega - 1}, 6 \omega^{\omega - 1}, \cdots \\\ \qquad\qquad\qquad\quad\; s, 2 s, 3 s, 4 s, 5 s, 6 s, \cdots \\\ \qquad\qquad\qquad\quad\; \omega^{\omega + 1}, 2 \omega^{\omega + 1}, 3 \omega^{\omega + 1}, 4 \omega^{\omega + 1}, 5 \omega^{\omega + 1}, 6 \omega^{\omega + 1}, \cdots \\\ \qquad\qquad\qquad\quad\; \vdots \; \\\ \qquad\qquad\qquad\quad\;\, \omega^{2 \omega - 1}, 2 \omega^{2 \omega - 1}, 3 \omega^{2 \omega - 1}, 4 \omega^{2 \omega - 1}, 5 \omega^{2 \omega - 1}, 6 \omega^{2 \omega - 1}, \cdots \\\ \qquad\qquad\qquad\quad\; s^{2}, 2 s^{2}, 3 s^{2}, 4 s^{2}, 5 s^{2}, 6 s^{2}, \cdots \\\ \qquad\qquad\qquad\quad\; \omega^{2 \omega + 1}, 2 \omega^{2 \omega + 1}, 3 \omega^{2 \omega + 1}, 4 \omega^{2 \omega + 1}, 5 \omega^{2 \omega + 1}, 6 \omega^{2 \omega + 1}, \cdots \\\ \qquad\qquad\qquad\quad\; \vdots \; *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Das ist abermals ein bemerkenswertes Muster.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Auf die lückenlosen endlichen natürlichen Zahlen folgen die von Lücken umgebenen'."\n".
                    'aktual unendlichen ordinalen Limeszahlen.'."\n".
                    'Denn in der Theorie der Biordinalzahlen können von all den aktual unendlichen ordinalen Limeszahlen'."\n".
                    'endliche natürliche Zahlen abgezogen und aufaddiert werden, die nicht in dieser Menge vorhanden sind'."\n".
                    'und daher in den Lücken liegen.'."\n",
                      'Diese Erkenntnis mit der obigen Darstellung durch \\latexmath{ s } führt uns dann wieder zurück zu'."\n".
                    'den Superial-Zahlen und bringt sie erneut mit den Ordinalzahlen in Verbindung.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Die Größenordnung von \\latexmath{ \omega } und \\latexmath{ \omega\overline{\#} }} \\\\'."\n".
                    'Nach dem Beweis wissen wir nun, dass \\latexmath{ \omega = \omega\overline{\#} }.'."\n",
                      'Aber für alle größeren endlichen Primzahlen \\latexmath{ p } war doch die Mengen-Primfakultät \\latexmath{ p\overline{\#} } immer viel größer als \\latexmath{ lpr\!*( p *) }.'."\n".
                    'Wie kann dann nach dem Übergang ins Unendliche \\latexmath{ \omega = \omega\overline{\#} } sein?'."\n",
                      'Im Endlichen ist die Anzahl der Elemente einer Menge natürlicher Zahlen, geordnet und von der Null an,'."\n".
                    'immer Eins größer als das letzte Element in der Menge.'."\n".
                    'Bei einer unendlich großen Anzahl an Elementen einer solchen Menge, wie \\latexmath{ \omega },'."\n".
                    'ist dies nicht mehr der Fall.'."\n".
                    'Denn \\latexmath{ \omega - n }, wenn \\latexmath{ n \in \mathbb{N} }, wie in den Biordinalzahlen dargestellt,'."\n".
                    'kann keine endliche Zahl sein.'."\n",
                      'Denn es gibt \\jump{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}{viel mehr ganze Zahlen von Null bis \\latexmath{ \omega }, als der Wert von \\latexmath{ \omega }}'."\n".
                    'ausdrückt.'."\n".
                    'Dadurch können beide Werte im Unendlichen bei \\latexmath{ \omega } dann zusammen fallen.'."\n".
                    'Der unendlich große Wert von \\latexmath{ \omega\overline{\#} } enthält aber nur das Produkt der endlichen Primzahlen'."\n".
                    'und nicht das Produkt auch unendlich großer Primzahlen in den ganzen Zahlen bis \\latexmath{ \omega },'."\n".
                    'die es auch noch gibt.'."\n",
                      'Der unendlich große Wert von \\latexmath{ \omega\overline{\#} } beschreibt also das lückenlose Primturm-Potenzraster,'."\n".
                    'das auch die Menge \\latexmath{ lpr\!*( \omega\overline{\#} *) = \omega } darstellt.'."\n".
                    'Und der Wert von \\latexmath{ \omega\overline{\#} } hat nun auch die gleiche Größenordnung, wie der von \\latexmath{ \omega }.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{XXX} \\\\'."\n".
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
                  array( 'text', array( text => array(
                  '\\condb{Das Raster einer Menge von aufeinanderfolgenden natürlichen Zahlen, beginnend mit der Null} \\\\'."\n".
                    'Zunächst können wir sagen, was alle Zahlen einer dieser Mengen miteinander verbindet:'."\n".
                    'Alle Zahlen dieser Mengen liegen auf dem Zählraster, sind also durch die Eins ganzzahlig teilbar.'."\n".
                    'Poetischer ausgedrückt schwingen alle Zahlen mit der Eins oder im Raster der Eins.'."\n",
                      'Die Sammlung der Primfaktoren der Zahlen dieser Mengen sagen nun darüber hinaus,'."\n".
                    'auf welchen größeren Rastern ihre Zahlen auch noch liegen oder in welchen Rastern sie auch noch schwingen.'."\n".
                    'Dabei ist eine höhere Potenz einer Primzahl irrelevant, weil es sich um die selbe Schwingungsbasis handelt,'."\n".
                    'die zum selben Rasteranteil nur mit größerer Schrittweite gehört.'."\n".
                    'Demnach spannen die \\latexmath{ 4 = 2^2 } oder die \\latexmath{ 8 = 2^3 } das selbe Raster auf, wie die \\latexmath{ 2 = 2^1 }.'."\n",
                      'Die \\latexmath{ 3 = 3^1 } hingegen spannt ein anderes Raster auf und beide kombiniert können wir mit'."\n".
                    '\\latexmath{ 6 = 2 \cdot 3 } beschreiben.'."\n",
                      'Warum handelt es sich denn bei \\latexmath{ 2 = 2^1 }, \\latexmath{ 4 = 2^2 } oder \\latexmath{ 8 = 2^3 } und für'."\n".
                    'alle weiteren Potenzen von Zwei, oder allgemeiner bei \\latexmath{ p_i^k } mit \\latexmath{ k \geq 1 } um das gleiche Raster?'."\n".
                    'Das ist nicht gleich offensichtlich, finde ich.'."\n",
                      'Dies können wir am Distributivgesetz erkennen, denn \\latexmath{ p_i^k + 1 } ist nicht ganzzahlig'."\n".
                    'durch \\latexmath{ p_i^k } teilbar, egal welche Potenz \\latexmath{ k \geq 1 } wir haben;'."\n".
                    'also egal, wie häufig \\latexmath{ p_i } in einem Produkt steckt.'."\n",
                      'Kombinieren wir jedoch unterschiedliche Primzahlen in einem Produkt, wie beispielsweise'."\n".
                    'in \\latexmath{ 6 = 2 \cdot 3 }, dann ist \\latexmath{ 7 = *( 2 \cdot 3 *) + 1 } durch beide'."\n".
                    'Primzahlen nicht ganzzahlig teilbar.'."\n".
                    'Wir erhalten also eine erweiterte Qualität bezüglich der unterschiedlichen Primfaktoren einer natürlichen Zahl.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Das Verlassen des Rasters einer Menge von aufeinanderfolgenden natürlichen Zahlen} \\\\'."\n".
                    'Durch das addieren oder auch das Subtrahieren der Eins auf oder von einem Primzahlprodukt verlassen'."\n".
                    'wir das Raster, auf dem das Produkt liegt oder schwingt.'."\n".
                    'Und ein Produkt von Primzahlen schwingt mit allen Frequenzen seiner unterschiedlichen Primzahlen.'."\n".
                    'Daher können wir mit der Methode des Verlassens des Rasters aller bisherigen Primzahlen im'."\n".
                    '\\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-des-Euklid}{›Satz des Euklid‹}'."\n".
                    'die Existenz immer weiterer und größerer Primzahlen beweisen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Immer mehr Primzahlen machen das Raster in Bezug auf die folgenden natürlichen Zahlen immer feiner} \\\\'."\n".
                    'Der ›Satz des Euklid‹ macht deutlich, dass die neu hinzukommenden, immer größeren Primzahlen'."\n".
                    'wieder und wieder außerhalb des bisherigen Rasters der kleineren Zahlen liegen.'."\n".
                    'Dadurch wird das Raster durch immer mehr größere Primzahlen immer feiner.'."\n".
                    'Und deshalb kommen dann auch immer seltener neue Primzahlen hinzu, ohne, dass die Reihe der Primzahlen enden würde.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Die Primfakultät einer Menge an natürlichen Zahlen beschreibt ihr Raster} \\\\'."\n".
                    'Weil das Raster, was eine Primzahl oder eine Zahl, durch ihre Primfaktorzerlegung, vorgibt,'."\n".
                    'damit nicht von der Potenz ihrer Primzahlen abhängt, reicht ein Produkt der einfachen Potenz'."\n".
                    'ihrer Primfaktorzerlegung aus, um ihr Raster zu beschreiben.'."\n".
                    'Das Raster einer natürlichen Zahl umfasst also alle Potenzen ihrer Primfaktoren.'."\n".
                    'Daher können wir das Raster auch Primturm-Potenzraster einer natürlichen Zahl nennen.'."\n",
                      'Die Mengen-Primfakultät einer Menge der ersten \\latexmath{ n } natürlichen Zahlen,'."\n".
                    'von der Null an, liefert also das \\italic{gemeinsame Primturm-Potenzraster} aller Zahlen dieser Menge.'."\n".
                    'Bei endlichen natürlichen Zahlen, als Mengen ihrer Vorgänger gesehen, fällt die Mengen-Primfakultät'."\n".
                    'nur bei der Eins mit der gleichen Zahl zusammen, siehe oben, denn: \\latexmath{ 1\overline{\#} = 1 }'."\n",
                      'Bei allen \\latexmath{ n \in \{ 2, 3 \} } ist \\latexmath{ n\overline{\#} < n }.'."\n",
                      'Und bei \\latexmath{ n = 0 } und allen \\latexmath{ n > 3 } ist \\latexmath{ n\overline{\#} > n }.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Das gemeinsame Primturm-Potenzraster aller endlichen natürlichen Zahlen} \\\\'."\n".
                    'Wie wir oben schon beschrieben haben, erhalten wir das gemeinsame Primturm-Potenzraster aller endlichen natürlichen Zahlen'."\n".
                    'durch:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega\overline{\#}  =  \omega_{\forall p}  =  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots  }'),
                      array( display => 'on',  latex => '{  \omega\overline{\#}  ?=  \omega  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Es ist also das Produkt aller endlichen Primzahlen.'."\n",
                      'Weil das gemeinsame Primturm-Potenzraster aller endlichen natürlichen Zahlen aber auch dem'."\n".
                    'Basisraster der Eins, also dem Zählen, der vollständigen Induktion und damit allen natürlichen Zahlen gleich ist,'."\n".
                    'ist auch die Primzahlprodukt-Vermutung wahr, also die Gleichheit des Produkts aller endlichen Primzahlen'."\n".
                    'mit der Anzahl der Elemente in der Menge der natürlichen Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \omega\overline{\#}  =  \omega  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \boxed{\;\;  \omega  =  \omega_{\forall p}  \;\;}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Was wir oben schon gut begründen konnten und daher unsere Vermutung war.'."\n",
                      'So ist nun auch klar, dass gilt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \boxed{\;\;  s  =  \omega^{\omega}  \;\;}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Die Größenordnung des Produkts aller endlichen Primzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Berechnen wir das Produkt aller endlichen Primzahlen von den kleinsten Primfaktoren her mit der Primfakultät\\footnote{\\const{SupNum_g_footnote_text_Primorial}} \\latexmath{ p\# }, dann wird es sehr schnell'."\n".
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
                    'die natürlichen Zahlen es wieder einhohlen und letztendlich gleich groß sein können.'."\n".
                    'Ich würde aus meiner heutigen Sicht sagen, dass dies ein oder sogar das wesentliche Geheimnis der'."\n".
                    'Primzahlen ist.'."\n",
                      'Unter welcher Bedingung könnte denn dies überhaupt der Fall sein?'."\n",
                      'Aus meiner Sicht könnte dies nur dann der Fall sein, wenn die Anzahl der Primzahlen'."\n".
                    'unter den extrem großen natürlichen Zahlen minimal wird. \\color{*Bearb}{(Ist ›minimal‹ die korrekte Formulierung? Und ist diese Annahme notwendig?)}'."\n".
                    'Und mit Hilfe des \\jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Satz-des-Euklid}{›Satz des Euklid‹},'."\n".
                    'eines Beweises, dass es unendlich viele Primzahlen gibt, können wir erkennen, was das bedeuten sollte.'."\n".
                    'Eine Minimierung des Anteils an Primzahlen heißt, dass es unter den ganz extrem großen natürlichen Zahlen im wesentlichen nur noch Primzahlzwillinge gibt.'."\n".
                    'Die Lücken zwischen den Primzahlen würden im Schnitt maximal werden.'."\n".
                    'Diese Aussage ist also eng mit der Primzahlzwillingsvermutung\\color{*Bearb}{(Verweis)} gekoppelt.'."\n",
                      'Wir können plausibel machen, wie wir noch zeigen, dass unter der Annahme, es gäbe im extrem Großen im wesentlichen nur noch Primzahlzwillinge,'."\n".
                    'und, dass dann ein solches Primzahlzwillingspaar die nächsten Primzahlen erzeugt, ohne, dass dazwischen noch welche wären,'."\n".
                    'eine so große Lücke zwischen den Primzahlzwillingen und den nächsten Primzahlzwillingen entsteht, dass das Zählen der natürlichen'."\n".
                    'Zahlen aufholen kann.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                'Szenario, in dem hypothetisch als nächstgrößere und übernächstgrößere Primzahlen nur Primzahlzwillinge existieren', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ein besonderes Szenario, das wir recht gut analysieren können, ist, wenn'."\n".
                    '\\latexmath{ p\# - 1 } und \\latexmath{ p\# + 1 } beide die nächsten Primzahlen nach \\latexmath{ p } sind und'."\n".
                    'auch nach ihnen wiederum \\latexmath{ (p\# + 1)\# - 1 } und \\latexmath{ (p\# + 1)\# + 1 } wieder die nächsten'."\n".
                    'Primzahlen sind.'."\n".
                    'Es gibt also zwischen ihnen allen keine Primzahlen mehr,'."\n".
                    'sondern Primzahlen sind hypothetisch nur noch die Primzahlzwillinge:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Aus der letzen uns bekannten extrem großen Primzahl \\latexmath{ p_i } ergeben sich die beiden nächsten Primzahlen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p_{i}\# \pm 1  \in  \mathbb{P}  }'),
                      array( display => 'on',  latex => '{  p_{i + 1}  :=  p_{i}\# - 1  }'),
                      array( display => 'on',  latex => '{  p_{i + 2}  :=  p_{i}\# + 1  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dann gibt es also zwischen unserer letzen extrem großen Primzahl \\latexmath{ p_i }'."\n".
                      'und den beiden nächsten keine Primzahl mehr:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists n \in \; ] p_{i}, p_{i + 1} [_\mathbb{N} *)  *[  n  \in  \mathbb{P}  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \nexists n \in \; ] p_{i}, p_{i}\# - 1 [_\mathbb{N} *)  *[  n  \in  \mathbb{P}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dann ist die nächste Primfakultät \\term{p_{i+1}#} die Zahl zwischen dem nächsten Primzahlwilling:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p_{i + 1}\# \pm 1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{i}\# \cdot p_{i + 1} \pm 1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{i}\# \cdot *( p_{i}\# - 1 *) \pm 1  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( p_{i}\# *)^{2} - p_{i}\# *) \pm 1  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Nun müssen wir untersuchen, ob der Sprung groß genug ist, damit das Zählen die Primfakultät einholen kann.'."\n".
                      'Das können wir mit dem Verhältnis zum Zählen herausfinden:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ *( p_{i}\# *)^{2} - p_{i}\# }{ n }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  p_{i + 1}\# \pm 1  \in  \mathbb{P}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  (p_{i}\# - 1)\# \pm 1  \in  \mathbb{P}  }'),
                      array( display => 'on',  latex => '{  ( ( p\# - 1 ) \cdot ( p\# + 1 ) )\# \pm 1  \in  \mathbb{P}  }'),
                      array( display => 'on',  latex => '{  ( ( p\# - 1 ) \cdot ( p\# + 1 ) )\# \pm 1  \in  \mathbb{P}  }'),
                      array( display => 'on',  latex => '{  *( \forall n \in \; ] p\# + 1, ( ( p\# - 1 ) \cdot ( p\# + 1 ) )\# - 1 [_\mathbb{N} *)  *[  n  \notin  \mathbb{P}  *]  }'),
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
                    'Die Argumentation könnte grob und sicher noch streitbarer Weise so laufen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Jede zweite natürliche Zahl ist durch die Primzahl Zwei teilbar, daher sollte die Anzahl der natürlichen Zahlen \\term{ω} ebenso durch Zwei teilbar sein.',
                        'Das gleiche Argument kann für jede weitere endliche Primzahl herangezogen werden.',
                        'Jede vierte natürliche Zahl ist natürlich ebenfalls durch die zweite Potenz von Zwei teilbar, aber, wenn auch die Anzahl der natürlichen Zahlen \\latexmath{ ω } durch die Vier ganzzahlig teilbar wäre, dann sollte dies auch für jede andere endliche Primzahl endlicher Potenz gelten. Das kann aber aufgrund der Betrachtung der Struktur der Superial-Zahlen, siehe \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS}‹, nicht sein, denn dann wäre quasi \\latexmath{ s = ω }.',
                        'Wenn \\latexmath{ s = ω } wäre, dann würde es genau so viele rationale Zahlen, wie natürliche Zahlen geben, was zwar für die Mächtigkeit stimmt, aber in meinen Augen nicht für deren Anzahl.',
                        'Denn die Kombinatorik zur Erzeugung der rationalen Zahlen aus Brüchen zeigt, dass es deutlich mehr rationale Zahlen von ihrer Anzahl her geben muss, als natürliche Zahlen, denn im Calkin-Wilf-Baum enthält schon der letzte Strang alle natürlichen Zahlen und der erste Strang all deren Kehrwerte. \\\\ Die direkte Kombinatorik von Zähler und Nenner wäre jeweils \\term{ω} und ergäbe sich zu \\latexmath{ ω^2 }, wenn nicht gekürzt werden könnte.',
                        'Anders, als bei der Mächtigkeit, wird bei der von mir gemeinten Anzahl der Zahlen ihre kombinatorische Erzeugung mit der vollständigen Induktion der natürlichen Zahlen ins Verhältnis gesetzt.',
                        'Und die Definition von \\latexmath{ s } über das Primzahlflächenprodukt beruht eben auch auf einem Verhältnis zur Eins.',
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
                      
                'Argumentation über die Primzahltürme der Definition von \\term{s}', subline =>
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
                    'Analysieren wir naiv die maximale Häufigkeit der einzelnen Primzahlen in der Primfaktorzerlegung'."\n".
                    'der natürlichen Zahlen kommen wir schnell auf den Gedanken, dass wir nicht die volle höhe \\term{ω}'."\n".
                    'jedes einzelnen Primzahlturms benötigen, um \\term{s} mit den Eigenschaften auszustatten'."\n".
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
                    '\\bold{Parität}',
                    '• Nicht nur gleiche Mächtigkeit von geraden und ungeraden Zahlen, sondern hier sogar gleiche kombinatorische Anzahl von geraden und ungeraden Zahlen.\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:ParitaetMathematik:2021}.}',
                    '\\bold{Logisches}',
                    '• \\latexmath{ \omega } ist dann durch jede endliche Primzahl und durch deren Produkte mit jeweiliger Potenz von Eins ganzzahlig teilbar.',
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
