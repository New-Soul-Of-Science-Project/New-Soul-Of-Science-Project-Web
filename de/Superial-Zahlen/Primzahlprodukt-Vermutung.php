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
                    '\\jump{OM:SupNum:Eigenschaften:StrukturVonS}{Struktur der Superial-Zahlen} gestoßen.'."\n",
                      'Schauen wir uns das Zählen der \\jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Superial-Zahlen} an:'."\n".
                    'Beim Zählen von natürlichen Superial-Zahlen werden endliche rationale Zahlen als unendliche Koeffizienten'."\n".
                    'mitgezählt, wenn die endlichen ganzen Zahlen als endliche Koeffizienten immer wieder durchlaufen.'."\n".
                    'Betrachten wir im Folgenden mit Hilfe von \\latexmath{ s } das Verhältnis der Anzahl der endlichen rationalen Zahlen'."\n".
                    'und der endlichen ganzen Zahlen, dann scheint die Anzahl der endlichen natürlichen Zahlen dem Produkt'."\n".
                    'aller endlichen Primzahlen zu entsprechen.'."\n",
                      'Den Ansatz zu dieser Vermutung finden wir im Abschnitt \\italic{\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:AusgangspunktPrimzahlproduktVerm}},'."\n".
                    'wo wir uns schon mit der Struktur von \\latexmath{ s } beschäftigt haben.'."\n",
                      'Dabei fanden wir, dass die Anzahl der rationalen Zahlen \\latexmath{ \lbrack 0, 1 \lbrack_\mathbb{Q} }, von der Null bis ausschließlich der Eins, in Formel \\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}'."\n".
                    'eine ganze Zahl sein muss.'."\n".
                    'Das können wir mit Hilfe der Abrundung durch die Gaußklammer\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:AbrundungsfunktionUndAufrundungsfunktion:2022}.} \\latexmath{ \lfloor x \rfloor } zum Ausdruck bringen, die eine Zahl \\latexmath{ x } auf die nächst kleinere ganze Zahl abrundet, wenn sie noch keine ganze Zahl ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \# [ 0, 1 [_\mathbb{Q}  =  \frac{ s }{ 2 \cdot \omega }  }',
                                          label_text => '\\jumpname{OM:SupNum:Eigenschaften:StrukturVonS:Equ-Anzahl-rationale-Zahlen-Null-bisOhne-Eins}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \frac{ s }{ 2 \cdot \omega } - \left\lfloor \frac{ s }{ 2 \cdot \omega } \right\rfloor  =  0  }'),
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
                    '\\latexmath{ s } für die Anzahl der rationalen Zahlen und \\latexmath{ ω } für die Anzahl der natürlichen Zahlen.'."\n".
                    'Ich vergleiche hier aber nicht die Mächtigkeit\\footnote{\\const{SupNum_g_footnote_text_Maechtigkeit}} der Menge der rationalen Zahlen und die Mächtigkeit der natürlichen Zahlen,'."\n".
                    'wobei es darum geht, ob sich zwei Mengen bidirektional aufeinander abbilden lassen.'."\n".
                    'Sondern ich meine die kombinatorische Erzeugung von Elementen einer unendlich großen Menge'."\n".
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
                  array( 'text', array( text => array(
                  '\\condb{Unser \\latexmath{ \omega } kann nicht einer der Primzahltürme sein} \\\\'."\n".
                    'Nun können wir als erstes überlegen, ob es sich um einen der Primzahltürme handeln könnte:'."\n".
                    'Die unendlich große Primzahl-Potenz mit der kleinsten Basis in \\latexmath{ s } ist \\latexmath{ 2^ω }.'."\n".
                    'Wenn wir berücksichtigen, dass ja durch \\latexmath{ 2 \cdot \omega } geteilt wird und wir den Faktor \\latexmath{ 2 } schon mal aus'."\n".
                    'dem Primzahlturm entfernen, ergibt er sich immer noch zu \\term{2^{ω-1}}, wobei \\term{ω-1} durch die'."\n".
                    '\\jump{OM:BiOrd:Home}{Biordinalzahlen} definiert ist.'."\n",
                      'Nun ist es offensichtlich, dass \\term{2^{ω-1}} ungleich und sogar sehr viel größer als \\term{ω} ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  2^{ω - 1}  \neq  \omega  }'),
                      array( display => 'on',  latex => '{  2^{ω - 1}  \;\;\;\ggg\;\;\;  \omega  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p \in \mathbb{P} *)  *[  p^{ω}  \;\;\;\ggg\;\;\;  \omega  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Somit kommt kein Primzahlturm \\latexmath{ p^ω }, also eine Spalte des Primzahl-Flächenprodukts,'."\n".
                    'als unendlich großer Primfaktoren-Anteil von \\latexmath{ s } für \\latexmath{ \omega } in Frage.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Wir vermuten, dass \\latexmath{ \omega } die vollständige Primfakultät aller endlichen Primzahlen ist} \\\\'."\n".
                    'Eine Möglichkeit, die noch bleibt, ist, dass \\latexmath{ \omega } dem unendlichen Produkt aller'."\n".
                    'endlichen Primzahlen gleich ist, also einer Zeile des Primzahl-Flächenprodukts entspricht:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega  ?=  \omega_{\forall p}  :=  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  s  =  *( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdot 17 \cdot 19 \cdot 23 \cdot \cdots *)^{\omega}  \\\ \qquad\quad\;  =  *( \omega_{\forall p} *)^{\omega}  ?=  \omega^{\omega}  }',
                                          label_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega', label_text => '\\name{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Stimmt unsere Vermutung, dann ist \\latexmath{ s } das selbe wir \\latexmath{ \omega } hoch \\latexmath{ \omega }.'."\n",
                      'Woher können wir aber wissen, dass alle endlichen Primzahlen genau ein Mal im Produkt vorkommen müssen?'."\n",
                      'Unsere Vermutung können wir plausibel machen und damit Beweisen, wenn wir erkennen, dass sowohl das vollständige Zählen'."\n".
                    'als auch das vollständige Produkt aller endliche Primzahlen das Raster der endlichen natürlichen Zahlen beschreibt.'."\n".
                    'Wir beginnen damit, beide Möglichkeiten zu beleuchten,'."\n".
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
                    'Ein Mal können wir die Unendlichkeit der endlichen natürlichen Zahlen durch das Zählen beweisen, mittels der vollständigen Induktion\\footnote{\\const{BiOrd_g_footnote_text_VollstaendigeInduktion}},'."\n".
                    'auf Basis des Zählatoms Eins, ausgehend von der Null.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Beweis durch die Primfakultät und die Phasenverschiebung um \\latexmath{ \pm 1 }} \\\\'."\n".
                    'Und ein weiteres Mal können wir die Unendlichkeit der endlichen natürlichen Zahlen mittels der Primfakultät und der Phasenverschiebung'."\n".
                    'um \\latexmath{ \pm 1 } beweisen, auf Basis der Multiplikationsatome, der Primzahlen, und des Zählatoms Eins, ausgehend von der Eins.'."\n".
                    'So, wie es nachfolgend im ›Satz des Euklid‹ beschrieben ist.'."\n".
                    'Sein Beweis basiert auf der Primfakultät, also auf dem Primorial\\footnote{\\const{SupNum_g_footnote_text_Primorial}},'."\n".
                    'welche immer weiter potenziell ins Unendliche vorangetrieben wird, und damit immer genauer'."\n".
                    'dem Produkt aus Formel \\jumpname{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-omega-ist-Produkt-aller-endlichen-Primzahlen}'."\n".
                    'entspricht.'."\n",
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
                    '\\latexmath{ s } ist, dass \\latexmath{ \omega } entspricht.'."\n".
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
                    'Nach dieser Definition ist die Eins keine Primzahl.'."\n",
                      'Dass es unendlich viele Primzahlen im Endlichen gibt, können wir durch die Schlussfolgerungskette des folgenden Beweises erkennen,\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Primzahl:2021}, Größte bekannte Primzahl.}'."\n".
                    'wenn wir die Primfakultät\\footnote{\\const{SupNum_g_footnote_text_Primorial}} von \\latexmath{ p } mit \\latexmath{ p\# } berechnen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Bilde die Primfakultät einer bekannten Primzahl, das Produkt aller Primzahlen kleiner und einschließlich dieser Primzahl: \\latexmath{ p\# }',
                        'Addiere Eins dazu oder ziehe Eins ab: \\latexmath{ p\# \pm 1 }',
                        '\\latexmath{ p\# \pm 1} ist nicht durch eine der Primzahlen in \\latexmath{ p\# } ganzzahlig teilbar.',
                        '\\latexmath{ p\# \pm 1} kann daher entweder nur selber eine Primzahl sein, die dann größer als \latexmath{ p } ist, oder ihr Primzahlprodukt enthält ausschließlich Primzahlen – mindestens zwei Stück – die nicht in \latexmath{ p\# } enthalten sind und damit größer als \latexmath{ p } sein müssen. ',
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
                      
                'Das passende Verständnis unserer Frage – eine Perspektivenfindung', subline =>
                  '')),
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
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  :=  *\{ 0, 1, 2, \cdots , n - 1 *\}  }',
                                          label_text => '\\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-n-gleich-Menge-Null-bis-n-minus-Eins}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Die Anzahl der Elemente einer Menge wird hier mit dem nächst größeren Element \\latexmath{ n } als das größte Element der Menge \\latexmath{ n - 1 } gleichgesetzt.'."\n",
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
                    'Sogar finden wir in den Biordinalzahlen im Abschnitt \\italic{\\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}},'."\n".
                    'dass sich noch ganze Zahlen zwischen jeder natürlichen Zahl in \\latexmath{ \mathbb{N} } und \\latexmath{ \omega } definieren lassen.'."\n",
                      'Wie können wir dies Interpretieren und passend betrachten?'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Das Primpotenzraster einer Menge aufeinanderfolgender natürlichen Zahlen} \\\\'."\n".
                    'Wie können wir alternativ die natürlichen Zahlen in solchen Mengen beschreiben?'."\n",
                      'Das Primpotenzraster übernimmt die Idee des Beweises des ›Satz des Euklid‹ mit Hilfe der Primfakultät und'."\n".
                    'bietet eine weitere Möglichkeit die natürlichen Zahlen dieser Mengen zu beschreiben.'."\n".
                    'Dies geht über ein tieferes Verständnis, wie der Beweis funktioniert, und über eine zu diesem Zweck etwas abgewandelte Primfakultät.'."\n".
                    ''))),
                //  array( 'headline', array( jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX', text =>
                      
                //'Die vollständige Primfakultät und die Anzahl von natürlichen Zahlen in einer Menge', subline =>
                //  'Gibt es eine Beschreibung der Größe von Zahlenmengen aus natürlichen Zahlen, die auf der Primfakultät beruhen, die bei der Annäherung an die vollständige Primfakultät die Menge der natürlichen Zahlen beschreibt?')),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei der \italic{Mengen-Primorial-Operator} \\latexmath{ \mathbb{T}\overline{\#} }, auch \italic{Mengen-Primfakultät} genannt,'."\n".
                      'der Operator der alle Primzahlen in der Menge \\latexmath{ \mathbb{T} } in einem Produkt multipliziert:'."\n".
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
                    'Wie in den Ordinalzahlen beziehungsweise Biordinalzahlen definiert, können endliche und unendliche Zahlen einer Repräsentation als Mengen entsprechen.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Dann ergibt sich für die folgenden Zahlen Beispiele:'."\n".
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
                      'Die vorm Operator stehende Zahl ist nicht Teil des Produkts, da die Menge,'."\n".
                      'die eine Ordinalzahl repräsentiert, nicht selber in der Menge enthalten ist.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Setzen wir diese Reihe für alle natürlichen Zahlen bis ins Unendliche fort, so ergibt sich:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'off', latex => '{  \mathbb{N}\overline{\#}  =  \!\! \prod_{ \forall p \in \mathbb{N} \cap \mathbb{P} }  \! p  }'),
                      array( display => 'on',  latex => '{  \omega\overline{\#}  =  \mathbb{N}\overline{\#}  =  \!\! \prod_{ \forall p \in \mathbb{P} }  p  }',
                                    latex_if_visible => '{  \Leftrightarrow  \omega\overline{\#}  =  \mathbb{N}\overline{\#}  =  \!\! \prod_{ \forall p \in \mathbb{P} }  \; p  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \omega\overline{\#}  =  \omega_{\forall p}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Denn hier liefert uns \\latexmath{ \omega\overline{\#} }'."\n".
                      'ein Produkt aller Primzahlen in \\latexmath{ \mathbb{N} }, also ein Produkt aller endlichen Primzahlen.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Und so gesehen stellt sich unsere Vermutung als'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega\overline{\#}  ?=  \omega  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'dar.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Doch was bedeutet das Produkt aller Primzahlen in Mengen natürlicher Zahlen generell?'."\n".
                    'Was sind die Bedingungen, unter denen das fragliche Gleichheitszeichen erfüllt ist?'."\n".
                    'Wie können wir sie formulieren?'."\n",
                      'In den endlichen Beispielen handelt es sich ja um Mengen \\latexmath{ \mathbb{T} = n }, mit \\latexmath{ n \in \mathbb{N} },'."\n".
                    'endlicher natürlicher Zahlen von der Null bis zu einer endlichen größten \\latexmath{ n - 1 }.'."\n",
                      'Wir stellen fest, dass \\latexmath{ n\overline{\#} } uns ein Produkt'."\n".
                    'aller Primzahlen liefert, die die Primfaktoren aller Elemente der Menge \\latexmath{ n } sind.'."\n".
                    'Das muss so sein, denn in dem Moment, wo \\latexmath{ n = p_i + 1 } ist, mit \\latexmath{ p_i \in \mathbb{P} }, kommt zum Produkt'."\n".
                    'die Primzahl \\latexmath{ p_i } hinzu, die nicht Teil der Primfaktorzerlegung einer der kleineren'."\n".
                    'Zahlen \\latexmath{ n < p_i } sein kann.'."\n".
                    'Denn diese haben als Primfaktoren nur kleinere Primzahlen \\term{ p_{i–l} }, mit \\latexmath{ 1 \leq l < i },'."\n".
                    'oder sind selber eine Primzahl.'."\n",
                      'Was passiert nun beim Übergang, wenn eine neue Primzahl in die Menge hinzukommt?'."\n",
                      'Wir können sagen, das \\italic{Primpotenzraster} weist nun eine Lücke auf und die neue Primzahl \\latexmath{ p_i }'."\n".
                    'füllt diese Lücke und auch alle zukünftigen Lücken ihrer Potenzen, zusammen also die Lücken \\latexmath{ p_i^k }, mit \\latexmath{ k \in \mathbb{N} \setminus \{ 0 \} }.'."\n".
                    'Deshalb auch der Name Primpotenzraster, denn, wie wir gleich noch näher erklären,'."\n".
                    'sind diese Lücken aufgrund des Distributivgesetzes logischerweise bei allen reinen positiven Potenzen einer Primzahl zu finden,'."\n".
                    'oder wenn diese Teil der Primfaktorzerlegung einer anderen natürlichen Zahl sind.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Die Mengen-Primfakultät einer Primzahl definiert das lückenlose Primpotenzraster aller natürlichen Zahlen kleiner als sie selber} \\\\'."\n".
                    'Wie wir an den obigen endlichen Beispielen erkennen können und wie gerade erklärt,'."\n".
                    'ist die Mengen-Primfakultät einer Primzahl die letzte, bevor eine neue Primzahl'."\n".
                    'zu diesem Produkt hinzukommt.'."\n".
                    'Die Mengen-Primfakultät \\latexmath{ p_i\overline{\#} } der Menge einer Primzahl \\latexmath{ p_i } ist also die größte Menge mit natürlichen Zahlen \\latexmath{ 0 \leq n < p_i },'."\n".
                    'die durch ihr Primpotenzraster aller kleineren Primzahlen \\latexmath{ p < p_i } in dieser Menge lückenlos dargestellt wird.'."\n".
                    'Dieses \\italic{lückenlose Primpotenzraster} wird also auch durch eben diese Mengen-Primfakultät beschrieben.'."\n",
                      '\\latexmath{ p_i\overline{\#} } ist also eine eineindeutige und vollständige Definition der Menge \\latexmath{ p_i }'."\n".
                    'durch ihr lückenloses Primpotenzraster.'."\n".
                    'Denn die erste Lücke befindet sich gleich bei \\latexmath{ p_i } selber, der natürlichen Zahl, die die nächst größere als die größte in der Menge ist.'."\n".
                    'Damit ist die Lückenlosigkeit des lückenlosen Primpotenzrasters wirklich ganz genau auf die Menge \\latexmath{ p_i = \lbrack 0, p_i - 1 \rbrack_\mathbb{N} } begrenzt'."\n".
                    'und definiert diese Zahlenmenge exakt.'."\n",
                      'Die Mengen-Primfakultät \\latexmath{ p_i\overline{\#} } ist allerdings eine natürliche Zahl, die, wie oben schon gesagt,'."\n".
                    'bei zunehmender Größe von \\latexmath{ p_i } rasant wächst und weit außerhalb der Menge'."\n".
                    'an natürlichen Zahlen liegt, deren Primpotenzraster sie lückenlos definiert.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Größere Mengen-Primfakultäten von Primzahlen sind selber eine Kombination der Mengen-Primfakultäten aller kleineren Primzahlen} \\\\'."\n".
                    'Die Mengen-Primfakultäten einer Primzahl \\latexmath{ p_i } ist das Produkt aller Primzahlen in ihrer Mengendarstellung.'."\n".
                    'Dieses Produkt kombiniert damit alle lückenlosen Primpotenzrasters der in ihm enthaltenen Primzahlen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Übergang ins Unendliche zu allen endlichen natürlichen Zahlen der Menge \\latexmath{ \omega }} \\\\'."\n".
                    'Möchte ich nun ein lückenloses Primpotenzraster, dass mir die Menge \\latexmath{ \mathbb{N} = \omega }'."\n".
                    'aller endlichen natürlichen Zahlen beschreibt, dann muss ich das Produkt aller endlichen Primzahlen bilden,'."\n".
                    'also \\latexmath{ \omega\overline{\#} }.'."\n",
                      'Im Falle von \\latexmath{ \omega } gibt es allerdings nicht mehr zwei Möglichkeiten ein lückenloses'."\n".
                    'Mengen-Intervall von natürlichen Zahlen, von Null an zu beschreiben, weil es keine größte Zahl in \\latexmath{ \mathbb{N} }'."\n".
                    'gibt, die wir dann einen hoch zählen können, um die Anzahl an Elementen in der Menge zu beschreiben.'."\n",
                      'Es bleibt nur die Mengen-Primfakultäten der Menge, die alle endlichen natürlichen Zahlen enthält, eben \\latexmath{ \omega\overline{\#} }.'."\n".
                    'Und das mit ihm berechnete lückenlose Primpotenzrasters aller endlichen natürlichen Zahlen ist auch das'."\n".
                    'Raster des Zählens.'."\n",
                      'Damit haben wir die Primzahlprodukt-Vermutung bewiesen.'."\n".
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
                  '\\condb{Das Primfaktoranteil-Potenzraster} \\\\'."\n".
                  '\\cond{Die nächste reine Primzahl} \\\\'."\n".
                    'Das Primfaktoranteil-Potenzraster stellt die unterscheidbaren Primfaktoranteile einer natürlichen Zahl'."\n".
                    'als Raster oder, in einem ergänzenden Bild, als Schwingungen dar.'."\n",
                      'Beim Primfaktoranteil-Potenzraster geht es darum zu analysieren, wie sich mit den in einer natürlichen Zahl'."\n".
                    'vorhandenen Primfaktoranteile durch Variation ihrer Potenzen auch andere natürliche Zahlen darstellen lassen.'."\n".
                    'Denn es geht im Besonderen darum mit einer natürlichen Zahl ein Raster von Schwingungen zu beschreiben, das etwas darüber'."\n".
                    'sagt, wie vollständig sich die natürlichen Zahlen, von der Null an, mit der Variation der Potenzen von Primfaktoranteilen'."\n".
                    'beschreiben lassen.'."\n",
                      'Enthält eine natürliche Zahl einen Primfaktor, wie zum Beispiel die Zwei, mehrfach, dann können wir die selben Faktoren'."\n".
                    'nicht untereinander unterscheiden.'."\n".
                    'Denn all diese Zweien sind ja gleich.'."\n".
                    'Unterscheiden können wir zwischen ihnen nur, wenn wir auch die Potenz der Primzahl sehen und im Primfaktoranteil belassen.'."\n".
                    'Reduzieren wir also einen Primfaktoranteil auf seine Primzahl, dann eliminieren wir einen essenziellen Teil'."\n".
                    'seiner Eigenschaften, seines Charakters.'."\n",
                      'Würden wir dabei also nur die einzelnen Primfaktoren berücksichtigen und in ihrer Potenz variieren,'."\n".
                    'dann erhielten wir aufgrund der Reduktion der Primfaktoranteile auf ihre Primzahlbasis Doppeldeutigkeiten,'."\n".
                    'die eine vollständige und damit differenzierte Beschreibung der möglichen Raster von Schwingungen unmöglich machen.'."\n".
                    'So gesehen ist die Variation von Primfaktoranteilen keine Willkür, sondern zwingend.'."\n",
                      'Zur Definition der Menge des Primfaktoranteil-Potenzrasters und der Berechnung der lückenlosen Intervall-Menge'."\n".
                    'natürlicher Zahlen an seinem Beginn, von der Null an, brauchen wir im Folgenden also die Menge der Primfaktoranteile'."\n".
                    'einer natürlichen Zahl.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei \\latexmath{ pa(n) } die Menge der Primfaktoranteile der natürlichen Zahl \\latexmath{ n }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pa(n)  =  *\{  x  *|*  *( \forall p \in \mathbb{P} *) *( \forall k \in \mathbb{N} *) \\\ \qquad\qquad\qquad\quad\; *( \frac{ n }{ p^{k} } \in \mathbb{N} \land \frac{ n }{ p^{k + 1} } \notin \mathbb{N} *) *[  x = p^{k}  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Dann ist diese Menge also die Menge der Primzahlen in der maximalen Potenz, die \\latexmath{ n } noch ganzzahlig teilt.'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Sei \\latexmath{ papr(n) } das Primfaktoranteil-Potenzraster beziehungsweise die unendliche Primpotenzraster-Menge,'."\n".
                      'erzeugt aus ihrem natürlichen Parameter \\latexmath{ n },'."\n".
                      'eine Menge die alle Kombinationen der natürlichen Potenzen seiner Primfaktoranteile enthält,'."\n".
                      'wobei die Null und die Eins zu den Primfaktoranteilen dazu genommen werden, um bei Null und Eins keine Lücke zu haben:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  papr(n)  =  *\{  x  *|*  *( \forall i \in \mathbb{N} *) *( \forall j \in pa(n) *) *( \forall k \in \mathbb{N}^{+} *) \\\ \qquad\qquad\qquad\quad\;\; *( i \in \{ 0, 1 \} \lor \frac{ i }{ j^{k} } \in \mathbb{N} *) \\\ \qquad\qquad\qquad\quad\;\;\; *[  x = i  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Die Menge wird hier erzeugt, indem alle natürlichen Zahlen \\latexmath{ i } darauf geprüft werden, ob sie entweder'."\n".
                      'Null oder Eins sind oder mindestens ein Primfaktoranteil von \\latexmath{ n } die Zahl \\latexmath{ i } ganzzahlig teilt.'."\n",
                        'Die Hinzunahme von Null und Eins ist dadurch gerechtfertigt, dass beide hier zu den natürlichen Zahlen gehören,'."\n".
                      'also erzeugt werden müssen.'."\n".
                      'Dies funktioniert, wie bei den anderen Primfaktoranteilen, über die jeweilige Potenz von Null und Eins,'."\n".
                      'wobei \\latexmath{ 0 = 0^1 \cdot 1^0 \cdot p_a^0 \cdots } und \\latexmath{ 1 = 0^0 \cdot 1^0 \cdot p_a^0 \cdots }'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Sei \\latexmath{ lpapr(n) } die maximale lückenlose Intervall-Menge natürlicher Zahlen, von der Null an, im Primfaktoranteil-Potenzraster \\latexmath{ papr(n) }:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  lpapr(n)  =  *\{  x  *|*  *( \forall i \in \mathbb{N} *) *( i \subset papr(n) *) *[  x = i  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Diese Intervall-Menge erhalten wir, indem wir alle natürlichen Zahlen \\latexmath{ i } in einer Menge sammeln, die echte Teilmenge\\color{*Bearb}{(Verweis)}'."\n".
                      'des Primfaktoranteil-Potenzrasters sind.'."\n",
                        '\\color{*Bearb}{(Diese Funktion könnten wir auch durch Mengennegation und das Herauskristallisieren'."\n".
                      'der kleinsten Zahl in der Antimenge realisieren.)}'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Das Primfaktoranteil-Potenzraster ist eine eineindeutige Abbildung jeder natürlichen Zahl.'."\n".
                    'Dies kommt daher, weil jede natürliche Zahl bekanntermaßen ihre einzigartige Primfaktorzerlegung hat,'."\n".
                    'aufgrund derer sich das Primfaktoranteil-Potenzraster ebenso einzigartige berechnet.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Entspreche also jede natürliche Zahl ihrem Primfaktoranteil-Potenzraster'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N} *) *[  n  \widehat{=}  papr( n )  *]  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'was keine Gleichheit bedeutet.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Jede natürliche Zahl beschreibt und charakterisiert also ihre eigenes Primfaktoranteil-Potenzraster.'."\n".
                    ''))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX',
                Title => 'Beispiele zum Primfaktoranteil-Potenzraster …',
                TitleVis => 'Beispiele zum Primfaktoranteil-Potenzraster:', ParagraphList => array(
                  array( 'text', array( text => array(
                    'Nachdem wir nun die Formalien definiert haben, möchte ich die Zusammenhänge an Zahlenbeispielen'."\n".
                    'verdeutlichen und erlebbar machen.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Zahl \\latexmath{ 2 } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pa( 2 )  =  *\{ 2 *\}  }'),
                      array( display => 'on',  latex => '{  papr( 2 )  =  papr( 2 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 2 )  =  *\{ 0, 1, 2^{2}, 2^{2}, 2^{3}, 2^{4}, 2^{5}, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 2 )  =  *\{ 0, 1, 2, 8, 16, 32, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpapr( 2 )  =  3  =  *\{ 0, 1, 2 *\}  }'),
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
                      array( display => 'on',  latex => '{  pa( 4 )  =  *\{ 4 *\}  }'),
                      array( display => 'on',  latex => '{  papr( 4 )  =  papr( 2^{2} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 4 )  =  *\{ 0, 1, *( 2^{2} *)^{1}, *( 2^{2} *)^{2}, *( 2^{2} *)^{3}, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 4 )  =  *\{ 0, 1, 4, 16, 64, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpapr( 4 )  =  2  =  *\{ 0, 1 *\}  }'),
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
                      array( display => 'on',  latex => '{  pa( 6 )  =  *\{ 2, 3 *\}  }'),
                      array( display => 'on',  latex => '{  papr( 6 )  =  papr( 2 \cdot 3 )  =  papr( 6 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 6 )  =  *\{ 0, 1, 2, 3, 4, 6, 8, 9, 12, 16, 18, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpapr( 6 )  =  5  =  *\{ 0, 1, 2, 3, 4 *\}  }'),
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
                      array( display => 'on',  latex => '{  pa( 9 )  =  *\{ 9 *\}  }'),
                      array( display => 'on',  latex => '{  papr( 9 )  =  papr( 3^{2} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 9 )  =  *\{ 0, 1, *( 3^{2} *)^{1}, *( 3^{2} *)^{2}, *( 3^{2} *)^{3}, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 9 )  =  *\{ 0, 1, 9, 81, 729, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpapr( 9 )  =  2  =  *\{ 0, 1 *\}  }'),
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
                      array( display => 'on',  latex => '{  pa( 10 )  =  *\{ 2, 5 *\}  }'),
                      array( display => 'on',  latex => '{  papr( 10 )  =  papr( 2 \cdot 5 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 10 )  =  *\{ 0, 1, 2, 2^{2}, 5, 2^{3}, 2 \cdot 5, 2^{4}, 2^{2} \cdot 5, \\\ \qquad\qquad\qquad\qquad\qquad\qquad 5^{2}, 2^{5}, 2^{3} \cdot 5, 2 \cdot 5^{2}, 2^{6}, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 10 )  =  *\{ 0, 1, 2, 4, 5, 8, 10, 16, 20, 25, 32, 40, 50, 64, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpapr( 10 )  =  3  =  *\{ 0, 1, 2 *\}  }'),
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
                      array( display => 'on',  latex => '{  pa( 20 )  =  *\{ 4, 5 *\}  }'),
                      array( display => 'on',  latex => '{  papr( 20 )  =  papr( 2^{2} \cdot 5 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 20 )  =  *\{ 0, 1, 4, 5, 4^{2}, 4 \cdot 5, 5^{2}, 4^{3}, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 20 )  =  *\{ 0, 1, 4, 5, 16, 20, 25, 64, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpapr( 20 )  =  2  =  *\{ 0, 1 *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n".
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Für die Primzahl \\latexmath{ 30 = 7\overline{\#} = 6\overline{\#} } haben wir:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  pa( 30 )  =  *\{ 2, 3, 5 *\}  }'),
                      array( display => 'on',  latex => '{  papr( 30 )  =  papr( 2 \cdot 3 \cdot 5 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 30 )  =  *\{ 0, 1, 2, 3, 4, 5, 6, 8, 9, 10, 12, 15, 16, 18, 20, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpapr( 30 )  =  7  =  *\{ 0, 1, 2, 3, 4, 5, 6 *\}  }'),
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
                      array( display => 'on',  latex => '{  pa( 210 )  =  *\{ 2, 3, 5, 7 *\}  }'),
                      array( display => 'on',  latex => '{  papr( 210 )  =  papr( 2 \cdot 3 \cdot 5 \cdot 7 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( 210 )  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, \\\ \qquad\qquad\qquad\qquad\qquad\qquad 12, 14, 15, 16, 18, 20, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpapr( 210 )  =  11  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 *\}  }'),
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
                      array( display => 'on',  latex => '{  pa( \omega\overline{\#} )  =  *\{ 2, 3, 5, 7, 11, 13 \cdots *\}  }'),
                      array( display => 'on',  latex => '{  papr( \omega\overline{\#} )  =  papr( 2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  papr( \omega\overline{\#} )  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, \cdots \\\ \qquad\qquad\qquad\qquad\qquad\qquad 2^{2} \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots, \cdots *\}  }'),
                      array( display => 'on',  latex => '{  lpapr( \omega\overline{\#} )  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, \cdots *\} \\\ \qquad\qquad\qquad\qquad\qquad\qquad  =  \mathbb{N}  =  \omega  }'),
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

                  array( 'text', array( text => array(
                    'Die Mengen-Primfakultät \\latexmath{ n\overline{\#} } beschreibt nun ein Primfaktoranteil-Potenzraster,'."\n".
                    'in dem alle Primfaktoranteile reine Primzahlen sind und auch keine Primzahlen bis zu einer größten fehlen.'."\n",
                      'Im Besonderen ist ein jedes derartiges Primfaktoranteil-Potenzraster \\latexmath{ papr( n\overline{\#} ) } eine Beschreibung der nächsten fehlenden reinen Primzahl, die größer als'."\n".
                    'oder gleich \\latexmath{ n } ist und auf seiner ersten Rasterlücke sitzt.'."\n".
                    'Diese Primzahl erhalten wir dann durch \\latexmath{ lpapr( n\overline{\#} ) }.'."\n",
                      'XXX XXX Die Zahl beziehungsweise Menge \\latexmath{ lpapr( \omega\overline{\#} ) } ist die Menge aller'."\n".
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
                      array( display => 'on',  latex => '{  \Rightarrow  lpapr( \omega\overline{\#} )  =  \mathbb{N}  =  \omega  }'),
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
                  '\\condb{Berechnung der nächsten Primzahl per Mengenlehre} \\\\'."\n".
                  '\\cond{Besonderheit der Kombination der Mengen-Primfakultät und mit der maximalen lückenlosen Intervall-Menge des Primfaktoranteil-Potenzrasters} \\\\'."\n".
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

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Die Mengen-Primfakultät \\latexmath{ n\overline{\#} } einer natürlichen Zahl \\latexmath{ n } liefert'."\n".
                      'als Parameter der maximalen lückenlosen Intervall-Menge des Primfaktoranteil-Potenzrasters \\latexmath{ lpapr( n\overline{\#} ) }'."\n".
                      'die nächste Primzahl:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall n \in \mathbb{N} *) *( p_{i}, p_{i + 1} \in \mathbb{P} *) *( p_{i} < n \leq p_{i + 1} *) \\\ \qquad\qquad\qquad\qquad\qquad\quad *[  lpapr( n\overline{\#} )  =  p_{i + 1}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p_{i}, p_{i + 1} \in \mathbb{P} *) *[  lpapr( *( p_{i} + 1 *)\overline{\#} )  =  p_{i + 1}  *]  }'),
                      array( display => 'off', latex => '{  \Rightarrow  *( \forall p_{i + 1} \in \mathbb{P} *) *[  lpapr( *( p_{i + 1} *)\overline{\#} )  =  p_{i + 1}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p_{i} \in \mathbb{P} *) *[  lpapr( *( p_{i} *)\overline{\#} )  =  p_{i}  *]  }',
                                    latex_if_visible => '{  \Leftrightarrow  *( \forall p_{i} \in \mathbb{P} *) *[  lpapr( *( p_{i} *)\overline{\#} )  =  p_{i}  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'XXX'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wir können jetzt eine neue Primzahl'."\n".
                    'aus den uns bekannten vorangegangenen Primzahlen erzeugen.'."\n".
                    'Die darauf folgende Primzahl können wir dann erst durch'."\n".
                    'Hochzählen um Einen erzeugen, um die neue Primzahl dadurch mit in die Mengen-Primfakultät'."\n".
                    'zu bekommen.'."\n",
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
                  '\\condb{Das Zählen der natürlichen Zahlen in Primzahlen} \\\\'."\n".
                  '\\cond{Die zählende Konstruktion der Primzahlen und damit der natürlichen Zahlen gleichzeitig} \\\\'."\n".
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

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Sei der Beginn der Primzahlen in den natürlichen Zahlen'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on',  latex => '{  p_{0}  =  \boxed{  0  }  }'),
                      array( display => 'on',  latex => '{  p_{1}  =  \boxed{  2  }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'und sei die jeweils nächste Primzahl nach Formel XXX gegeben,'."\n".
                  //     ''))),
                  // array( 'equations',
                  //   array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                  //     array( display => 'on',  latex => '{  *( \forall p_{i}, p_{i + 1} \in \mathbb{P} *) *[  lpapr( *( p_{i} + 1 *)\overline{\#} )  =  p_{i + 1}  *]  \;\;,  }'),
                  //   ))),
                  // array( 'text', array( Shape  => 'derivation', text => array(
                      'dann lautet der Beginn der nachfolgenden Primzahlen, sich in angeordneter Reihenfolge ergebend,'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      // array( display => 'on',  latex => '{  p_{0}  =  \varnothing  =  \boxed{  0  }  }'),
                      // array( display => 'on',  latex => '{  p_{1}  =  lpapr( *( p_{0} + 1 *)\overline{\#} )  }'),
                      // array( display => 'on',  latex => '{  \Leftrightarrow  p_{1}  =  lpapr( 1\overline{\#} )  }'),
                      // array( display => 'on',  latex => '{  \Leftrightarrow  p_{1}  =  lpapr( 1 )  }'),
                      // array( display => 'on',  latex => '{  \Leftrightarrow  p_{1}  =  *\{ 0, 1 *\}  =  \boxed{  2  }  }'),
                      array( display => 'on',  latex => '{  p_{2}  =  lpapr( *( p_{1} + 1 *)\overline{\#} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{2}  =  lpapr( 3\overline{\#} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{2}  =  lpapr( 2 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{2}  =  *\{ 0, 1, 2 *\}  =  \boxed{  3  }  }'),
                      array( display => 'on',  latex => '{  p_{3}  =  lpapr( *( p_{2} + 1 *)\overline{\#} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{3}  =  lpapr( 4\overline{\#} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{3}  =  lpapr( 6 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{3}  =  *\{ 0, 1, 2, 3, 4 *\}  =  \boxed{  5  }  }'),
                      array( display => 'on',  latex => '{  p_{4}  =  lpapr( *( p_{3} + 1 *)\overline{\#} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{4}  =  lpapr( 6\overline{\#} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{4}  =  lpapr( 30 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{4}  =  *\{ 0, 1, 2, 3, 4, 5, 6 *\}  =  \boxed{  7  }  }'),
                      array( display => 'on',  latex => '{  p_{5}  =  lpapr( *( p_{4} + 1 *)\overline{\#} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{5}  =  lpapr( 8\overline{\#} )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{5}  =  lpapr( 210 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  p_{5}  =  *\{ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 *\}  =  \boxed{  11  }  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'bis ins Unendliche.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Dies ist in dieser Anordnung nur mit der Mengen-Primfakultät möglich, die uns so gesehen die Menge der'."\n".
                    'natürlichen Zahlen über die Menge der Primzahlen konstruiert.'."\n".
                    'Dabei wird immer die nächste Primzahl berechnet, die dann wieder mit all ihren'."\n".
                    'vorangegangenen Primzahlen, die darauf folgende berechnet.'."\n",
                      '\\color{*Bearb}{(Beispiele um zu zeigen, was passiert, wenn die Primfakultät Primzahllücken hat oder eine Primzahl in höherer Potenz vorkommt.)}'."\n",
                      'Die oben angegebene Entsprechung von natürlichen Zahlen und ihren jeweiligen Primfaktoranteil-Potenzrastern'."\n".
                    'Können wir für Primzahlen erweitern.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Aus Formel XXX folgt zunächst einmal für Primzahlen die Entsprechnung:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *[  p  \widehat{=}  papr( p )  *]  \;\;.  }'),
                      // array( display => 'on',  latex => '{  *( XXX \forall p \in \mathbb{P} *) *[  p  \widehat{=}  XXX papr( p\overline{\#} )  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Da aber nach Formel XXX auch'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *[  lpapr( p\overline{\#} )  =  p  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'gilt, folgt auch die Entsprechung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p \in \mathbb{P} *) *[  p\overline{\#}  \widehat{=}  p  *]  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'die im Endlichen eben keine Gleichheit ist.'."\n",
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
                    ''))),
                  array( 'text', array( text => array(
                    'Kennen wir aber alle natürlichen Zahlen durch \\latexmath{ \omega } schon,'."\n".
                    'dann können wir dieses unendliche „Primzahl-Intervall“ ebenso durch die'."\n".
                    'Mengen-Primfakultät von \\latexmath{ \omega } beschreiben.'."\n".
                    'Das bedeutet: \\latexmath{ \omega\overline{\#} \widehat{=} papr( \omega\overline{\#} ) = lpapr( \omega\overline{\#} ) = \omega }.'."\n",
                      'Nur ist \\latexmath{ \omega } diesmal keine Primzahl, weil es keine größte Primzahl gibt.'."\n",
                      'Aber \\latexmath{ n\overline{\#} } war doch immer viel größer als \\latexmath{ lpapr( n\overline{\#} ) },'."\n".
                    'für alle natürlichen Zahlen \\latexmath{ n }.'."\n".
                    'Wie kann dann \\latexmath{ \omega\overline{\#} ?= papr( \omega\overline{\#} ) = lpapr( \omega\overline{\#} ) = \omega } sein?'."\n",
                      'Im Endlichen ist die Anzahl der Elemente einer Menge natürlicher Zahlen, geordnet und von der Null an,'."\n".
                    'immer Eins größer als das letzte Element in der Menge.'."\n".
                    'Bei einer unendlich großen Anzahl an Elementen einer solchen Menge, wie \\latexmath{ \omega },'."\n".
                    'ist dies nicht mehr der Fall.'."\n".
                    'Denn \\latexmath{ \omega - n }, wenn \\latexmath{ n \in \mathbb{N} }, wie in den Biordinalzahlen dargestellt,'."\n".
                    'kann keine endliche Zahl sein.'."\n",
                      'Denn es gibt \\jump{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}{viel mehr ganze Zahlen von Null bis \\latexmath{ \omega }, als der Wert von \\latexmath{ \omega }}'."\n".
                    'ausdrückt.'."\n".
                    'Dadurch können die Werte der drei Terme im Unendlichen bei \\latexmath{ \omega } dann zusammen fallen.'."\n".
                    'Der unendlich große Wert von \\latexmath{ \omega\overline{\#} } enthält aber nur das Produkt der endlichen Primzahlen'."\n".
                    'und nicht das Produkt auch unendlich großer Primzahlen in den ganzen Zahlen bis \\latexmath{ \omega },'."\n".
                    'die es auch noch gibt.'."\n",
                      'Der unendlich große Wert von \\latexmath{ \omega\overline{\#} } beschreibt also das Primfaktoranteil-Potenzraster,'."\n".
                    'das auch die Menge \\latexmath{ lpapr( \omega\overline{\#} ) = \omega } darstellt.'."\n".
                    'Und der Wert von \\latexmath{ \omega\overline{\#} } hat nun auch die gleiche Größenordnung, wie der von \\latexmath{ \omega }.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Aus Formel XXX folgt zunächst einmal im Endlichen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *[  p  \widehat{=}  papr( p )  *]  \;\;,  }'),
                      array( display => 'on',  latex => '{  *( XXX \forall p \in \mathbb{P} *) *[  p  \widehat{=}  XXX papr( p\overline{\#} )  *]  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Die endliche Entsprechung'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall p \in \mathbb{P} *) *[  lpapr( p\overline{\#} )  =  p  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall p \in \mathbb{P} *) *[  p\overline{\#}  \widehat{=}  p  *]  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'die keine Gleichheit ist, geht im Falle \\latexmath{ \omega } daher nun über zur Gleichheit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \omega\overline{\#}  =  \omega  \;\;,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'da der Größenunterschied verschwindet.'."\n",
                      ''))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Unsere Vermutung ist also wahr, weil sie dazu äquivalent ist:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \boxed{\;\;  \omega  =  \omega_{\forall p}  \;\;}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'Was gezeigt werden sollte.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Ein sehr interessanter, weil aufschlussreicher, Übergang.'."\n",
                      'So wird die oben getroffene Feststellung, dass die Primfaktorzerlegung von \\latexmath{ \omega }'."\n".
                    'ein Teil derer von \\latexmath{ s } sein muss und dieser Teil in der Zeile der Primfakultät'."\n".
                    'seines Primzahl-Flächenprodukts zu finden sein muss, hiermit aus anderer Perspektive bestätigt.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'So ist nun auch klar, dass gilt:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \boxed{\;\;  s  =  \omega^{\omega}  \;\;}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'wodurch wir auch ein genaueres Bild von \\latexmath{ s } bekommen.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Dieser Zusammenhang ist aufgrund seiner Erkenntnisbedeutung auch Thema unseres Theorielogos.'."\n",
                      'Die Theorie der Superial-Zahlen liefert uns mit Hilfe der Theorie der Biordinalzahlen'."\n".
                    'einen neuen und tiefen Einblick in die Struktur der endlichen Primzahlen.'."\n",
                      'Und sie erweitert die endlichen Primzahlen zu aktual unendlichen Primzahlen.'."\n".
                    'Dies vertieft unser Verständnis der Primzahlen weiter.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
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
                  '\\condb{XXX} \\\\'."\n".
                    'Umfasst das durch \\latexmath{ p_i\overline{\#} } definierte Menge bzw. das lückenlose Primpotenzraster'."\n".
                    'auch die Null und die Eins.'."\n",
                      'XXX'."\n",
                      'Haben wir eine Potenz einer Primzahl \\latexmath{ p_i } größer als Eins, wie \\latexmath{ p_i^k }, mit \\latexmath{ k > 1 },'."\n".
                    'dann ist das Primpotenzraster nicht mehr sicher lückenlos (niemals?), wie bei der Neun: \\latexmath{ 3^2 = 9 }.'."\n".
                    'Denn die \\latexmath{ 5 } und \\latexmath{ 7 } bleiben Lücken.'."\n",
                      'XXX'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
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
                    'Daher können wir das Raster auch \\italic{Primpotenzraster} einer natürlichen Zahl nennen.'."\n",
                      'Die Mengen-Primfakultät einer Menge der ersten \\latexmath{ n } natürlichen Zahlen,'."\n".
                    'von der Null an, liefert also das \\italic{gemeinsame Primpotenzraster} aller Zahlen dieser Menge.'."\n".
                    'Bei endlichen natürlichen Zahlen, als Mengen ihrer Vorgänger gesehen, fällt die Mengen-Primfakultät'."\n".
                    'nur bei der Eins mit der gleichen Zahl zusammen, siehe oben, denn: \\latexmath{ 1\overline{\#} = 1 }'."\n",
                      'Bei allen \\latexmath{ n \in \{ 2, 3 \} } ist \\latexmath{ n\overline{\#} < n }.'."\n",
                      'Und bei \\latexmath{ n = 0 } und allen \\latexmath{ n > 3 } ist \\latexmath{ n\overline{\#} > n }.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Das gemeinsame Primpotenzraster aller endlichen natürlichen Zahlen} \\\\'."\n".
                    'Wie wir oben schon beschrieben haben, erhalten wir das gemeinsame Primpotenzraster aller endlichen natürlichen Zahlen'."\n".
                    'durch:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.PP', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \omega\overline{\#}  =  \omega_{\forall p}  =  2 \cdot 3 \cdot 5 \cdot 7 \cdot 11 \cdot 13 \cdots  }'),
                      array( display => 'on',  latex => '{  \omega\overline{\#}  ?=  \omega  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Es ist also das Produkt aller endlichen Primzahlen.'."\n",
                      'Weil das gemeinsame Primpotenzraster aller endlichen natürlichen Zahlen aber auch dem'."\n".
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
