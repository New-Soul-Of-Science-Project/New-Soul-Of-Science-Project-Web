<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Einleitung'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:OT:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  /* array( 'notice', array( Display => 'invis', text => array(
                    '\\bold{Ist die Geometrie fraktal?} – Ist ein Punkt, eine Linie und eine Fläche fraktal?',
                    '• Das Problem der Geometrie, eine Linie aus Punkten aufzubauen (Verwandt mit der Kontinuumshypothese): Die nullte, die erste und die zweite Dimension haben keine Ausdehnung, kein Volumen, – also Punkt, Linie und Fläche – und in gewisser Weise existieren sie so nicht. Aber mit ihnen sollen wir die dritte Dimension aus Punkten (Ecken) und Flächen konstruieren, die dann eine Ausdehnung hat und plötzlich existiert. Das scheint komisch und merkwürdig. Siehe Nassim Haramein, Die Entschlüsselung des Universums, S. 11-14, hier S. 12-13.',
                    '– Es geht einfach darum, wie man aus Punkten eine Linie exakt konstruieren kann: Handelt es sich wirklich um einen absolut unendlich kleinen Punkt, dann bekommen wir ein Problem. Es scheint mir, dass ein strukturierter Punkt, mit aktual unendlich kleiner Ausdehnung hier Abhilfe schaffen kann. Ich kann nämlich in Form von aktual unendlich großen Zahlen beschreiben, wie oft ich diesen superialen Punkt aneinander legen muss. Dies kann ich bei absolut unendlich kleinen Punkten nicht tun.',
                    '– Bietet hier die aktual unendlich kleine Hülle der superial-kleinen Zahlen um einen Punkt einen logischen Lösungsansatz für die Geometrie? Denn bei einem absolut unendlich kleinen Punkt können wir nicht sicher und exakt definieren, wie oft wir ihn aneinander legen müssen, um eine Gerade einer bestimmten Länge zu erzeugen. Bei einem Punkt mit superial-kleiner Hülle ist dies wohldefiniert.',
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
                    ))), */
                      
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Vortext:XXX', text =>
                                           
                'Motivation')),
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
                    'XXX'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                    
                  array( 'jumplist',
                    array(
                      // array(  jump_name => 'OM:SupNum:Einleitung:Grundlagen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Grundlagen  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:SupNum:Einleitung:Grundlagen',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Einleitung', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Ich möchte nun erst einmal tiefer beleuchten, welche hier wichtigen Eigenschaften von Zahlen und Mengen'."\n".
                    'sich auf welche mögliche Weise beim Übergang vom Endlichen ins Unendliche verhalten sollten, um Sinn zu machen und eine gute Plausibilität zu ergeben.'."\n",
                      'Das bedeutet nicht, dass es prinzipiell nicht auch weitere Möglichkeiten mit ihren Perspektiven und deren jeweiligen Vor- und Nachteilen gibt.'."\n".
                    'Mir erscheint die nachfolgende Perspektive natürlich am besten zum Erkenntnisgewinn geeignet und in diesem Sinne als am besten zu den Superial-Zahlen passend.'."\n"))),
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
                    'Formell korrekter können wir schreiben, wenn wir nachfolgend die Menge aller natürlichen Zahlen \\term{\M(N)} als stets mit der Null beginnend annehmen:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{N}  :=  \mathbb{N}_{0}  }'),
                      array( display => 'on', latex => '{  \mathbb{T}_{n}  :=  \left\{  x ~\middle|~ \left( n \in \mathbb{N} \right) \left( \forall x \in \mathbb{N} \right) \left[  x < n  \right]  \right\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Die Teilmengen \\term{\M(T)_{n}} der ersten \\term{n} Elemente wird definiert als die Menge der Elemente x für die Gilt:'."\n".
                      'Ich nehme das Element \\term{n} aus der Menge der natürlichen Zahlen \\term{\M(N)} und alle \\term{x}, die kleiner als \\term{n} sind.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Wir sehen schon an der Definition, dass die Anzahl der Elemente in \\term{\M(T)_{n}} größer als alle Elemente dieser Menge ist.'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Mein Freund Raimund Welsch machte mich in diesem Zusammenhang ganz zurecht darauf aufmerksam, dass dies eben nur gilt, wenn die natürlichen Zahlen vorstehend einschließlich der Null definiert sind.'."\n",
                        'Ich antworte darauf, dass dies deutlich macht, wie sinnvoll und plausibel die Definition der natürlichen Zahlen einschließlich der Null ist,'."\n".
                      'wenn wir uns mit dem Übergang uns Unendliche beschäftigen.'."\n"))),
                      
                  array( 'text', array( text => array(
                  '\\condb{Das größte Element einer Menge} \\\\'."\n".
                    'Im Fall der Mengen mit endlich vielen Elementen, hier repräsentiert durch die Mengen \\term{\M(T)_{n}}, existiert ein größtes Element in der Menge.'."\n".
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
                    'Anders als im Endlichen der Mengen \\term{\M(T)_{n}} verhält es sich, wenn wir zur Menge aller natürlich Zahlen übergehen, die unendlich viele Elemente endlicher Größe in sich hat.'."\n".
                    'Auch sie beginnt mit der Null, aber in ihr gibt es per Definition kein größtes Element,'."\n".
                    'weil es zu jedem Element einen Nachfolger gibt:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Unendlichkeitsaxiom:2021}, Bedeutung für die Mathematik, Natürliche Zahlen.}'."\n"))),
                      
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Rightarrow  \nexists \; groesstes(\mathbb{N})  }'),
                    ))),
                      
                  array( 'text', array( text => array(
                      'Jedoch kann die Anzahl der Elemente in \\term{\M(N)} nach obiger Definition \\jumpname{OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N} mit der aktual unendlichen Zahl \\term{ω} angegeben werden:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}, Topologische Eigenschaften.}'."\n"))),
                      
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega  :=  \#\mathbb{N}  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall n \in \mathbb{N} \right)  \left[  n < \omega  \right]  }'),
                      array( display => 'on', latex => '{  \left( \forall r \in \mathbb{R} \right)  \left( \exists n \in \mathbb{N} \right)  \left[  r < n  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall r \in \mathbb{R} \right)  \left[  -\omega < r < \omega  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall r \in \mathbb{R^{+}} \right)  \left[  0 < \omega^{-1} < r  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( k \in \mathbb{R} \right)  \left( \forall r \in \mathbb{R^{+}} \right)  \\\ \qquad\qquad  \left[  k - r < k - \omega^{-1} < k < k + \omega^{-1} < k + r  \right]  }'),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Auf diese Weise kommen wir in die Lage, Zahlen außerhalb des Endlichen zu definieren; Zahlen, die also wirklich im Unendlichen liegen.'."\n",
                      'Auch können wir nun Zahlen definieren, die um eine endliche reelle Zahl herum liegen und näher an dieser sind, als jede andere reelle Zahl.'."\n".
                    'Sie verhalten sich ähnlich, wie der Limes einer Umgebung \\term{ε}, der gegen Null geht.'."\n".
                    'Nur sind diese Umgebungszahlen nicht unscharf, wie ein Limes, sondern konkret und damit scharf.'."\n",
                      'Das gleiche gilt, wenn wir das \\term{ω} durch die noch viel größere superiale Basis \\term{s} ersetzen:'."\n"))),
                      
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall n \in \mathbb{N} \right)  \left[  n < s  \right]  }',
                                               label_name => 'OM:SupNum:Einleitung:Grundlagen:Equ-alle-n-kleiner-s', label_text => '\\name{OM:SupNum:Einleitung:Grundlagen:Equ-alle-n-kleiner-s}', label_incr => true),
                      array( display => 'on', latex => '{  \left( \forall r \in \mathbb{R} \right)  \left( \exists n \in \mathbb{N} \right)  \left[  r < n  \right]  }',
                                               label_name => 'OM:SupNum:Einleitung:Grundlagen:Equ-exist-n-mit-r-kleiner-n', label_text => '\\name{OM:SupNum:Einleitung:Grundlagen:Equ-exist-n-mit-r-kleiner-n}', label_incr => true),
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall r \in \mathbb{R} \right)  \left[  - s < r < s  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( \forall r \in \mathbb{R^{+}} \right)  \left[  0 < s^{-1} < r  \right]  }'),
                      array( display => 'on', latex => '{  \Rightarrow  \left( k \in \mathbb{R} \right)  \left( \forall r \in \mathbb{R^{+}} \right)  \\\ \qquad\qquad  \left[  k - r < k - s^{-1} < k < k + s^{-1} < k + r  \right]  }'),
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Eigenschaft der Superial-Zahlen, mit ihnen keinen unscharfen, sondern einen konkreten „Limes“ definieren zu können, eröffnet die Möglichkeit'."\n".
                    'wichtige Eigenschaften der Zahlen näher untersuchen zu können, wie wir später sehen werden.'."\n".
                    'Sie ermöglicht so unter anderem die Definition einer konkreten Differentialrechnung, wie oben schon angedeutet.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Grundlagen:Ganze-Natuerl-Sup-Zahl-und-Integration', text =>
                'Definition ganzer und natürlicher Superial-Zahlen und die Integration', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Dadurch, dass \\term{s} die \\term{ω}-ste Potenz aller endlichen Primzahlen als Faktoren enthält, kommen wir zu besonderen arithmetischen Eigenschaften'."\n".
                    'bezüglich ihrer Multiplikation mit rationalen Zahlen, Brüchen aus ganzen Zahlen.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Die Größenordnung von rationalen Zahlen ist die gleiche, wie die der reellen Zahlen} \\\\'."\n".
                    'Um uns einer sinnvollen Definition von ganzen und natürlichen Superial-Zahlen zu nähern stellen wir fest, dass reelle Zahlen'."\n".
                    'nicht grundsätzlich größer sind als rationale, aber nach den Formeln \\jumpname{OM:SupNum:Einleitung:Grundlagen:Equ-alle-n-kleiner-s} und \\jumpname{OM:SupNum:Einleitung:Grundlagen:Equ-exist-n-mit-r-kleiner-n} alle kleiner als \\term{s}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
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
                    'Weil der letzte Term durch das frei wählbare \\term{q} alle möglichen positiven Werte annehmen kann, ist dies auch äquivalent mit:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  (\forall q \in \mathbb{Q}^{+}) (\forall k \in \mathbb{Q}^{+}) *[  0 < k \cdot s^{-1} <  q  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können hieran erkennen, dass keine rationale Zahl \\term{k} existiert, die im Produkt mit \\term{s^{-1}} ins Endliche kommen kann.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Ein besonderes Zahlenwertsystem} \\\\'."\n".
                    'Das ist sehr bemerkenswert und ermöglicht ein neues und besonderes Zahlenwertsystem auf Basis der superialen Basis \\term{s}:'."\n",
                      'Jede Ziffer dieses Zahlenwertsystems auf Basis \\term{s} kann eine Zahl sein; in jedem Fall eine rationale, möglicherweise auch eine algebraische (siehe \\jumpname{OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung}).'."\n".
                    'Fraglich ist für mich, ob es sinnvollerweise wirklich auch jede reelle Zahl sein kann.'."\n",
                      'Nachfolgend ein paar Beispiele in einer neuen Notation, die jede Ziffer dieses Zahlensystems in spitzen Klammern notiert:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a, b, c, d \in \mathbb{Q} *) *[  〈a〉〈b〉〈c〉․〈d〉 \\\ \qquad\qquad\qquad  :=  a \cdot s^{2} + b \cdot s^{1} + c \cdot s^{0} + d \cdot s^{-1} \\\ \qquad\qquad\qquad  \in  \mathbb{S}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s^{1}  =  〈1〉〈0〉․  =  〈1〉〈0〉_{0}  =  〈1〉_{1}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s^{0}  =  〈1〉․  =  〈1〉_{0}  =  1  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  s^{-1}  =  ․〈1〉  =  _{0}〈1〉  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  - \frac{3}{5} \cdot s^{2} + 25 \cdot s^{1} + 3,5 \cdot s^{0} - 7,2 \cdot s^{-1} \\\ \qquad\qquad\qquad\quad  =  *〈 - \frac{3}{5} *〉〈25〉〈3,5〉․〈-7,2〉 \\\ \qquad\qquad\qquad\quad  =  *〈- \frac{3}{5} *〉〈25〉〈3,5〉_{0}〈-7,2〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Ich denke an diesen einfachen Beispielen wird klar, wie das superiale Zahlenwertsystem funktioniert und wie es notiert wird.'."\n".
                    'Der Punkt hinter der nullten Potenz von \\term{s} markiert quasi das Komma, ähnlich unseren reellen Zahlen im Zehnersystem notiert.'."\n".
                    'Alternativ kann hinter einer spitzen Klammer auch die Potenz der superialen Basis \\term{s} als ganze Zahl angegeben werden.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Integration und ganze Superial-Zahlen} \\\\'."\n".
                    'Den ganzen Superial-Zahlen begegnen wir, wenn wir uns mit der Umkehrung der oben definierten Ableitung beschäftigen, der Integration:'."\n",
                      'Bei der Integration addieren wir nämlich all die unendlich vielen und superial kleinen Differenzen des Abstands \\term{s^{-1}} der Ableitung als'."\n".
                    'superial kleine, feine oder schmale Streifen einer Fläche auf.'."\n".
                    'Diese Streifen müssen wir dann in einer unendlichen Summe durchzählen und aufsummieren.'."\n",
                      'Zum Einstieg die Formel XXX vorab in der neuen Notation:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  f\'(x)  :=  \frac{ f(〈x〉․〈1〉) - f(x) }{ ․〈1〉 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wenn im Folgenden \\term{n} Element der Menge aller ganzen Superial-Zahlen \\term{\M(S)_{Z}} einschließlich Null und ausschließlich \\term{x⋅s^{1}} ist,'."\n".
                    'können wir die Integration über folgende Summe ausdrücken:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  n  \in  [0;〈x〉_{1}[  \subset  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  f(x)  =  f(0) + \sum_{ n \in [0;〈x〉_{1}[ }  ․*〈f\'(n)*〉  }'),
                      array( display => 'on',  latex => '{  \int_{0}^{x} f\'(n) \,dn  :=  \sum_{ n \in [0;〈x〉_{1}[ }  ․*〈f\'(n)*〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Damit haben wir die vorherige Ableitung wieder rückgängig gemacht, wenn wir eine schlüssige Definition der ganzen Superial-Zahlen \\term{\M(S)_{Z}} finden.'."\n",
                      'Wie könnten ganze Superial-Zahlen nun aussehen?'."\n".
                    'Wir haben es zuvor ja schon angedeutet:'."\n"))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Die gebrochenen Summanden mit negativer Potenz von \\term{s} sollten Null sein.',
                        'Im endlichen Summanden \\term{s^{0}} sollten sie nur ganze Zahlen haben.',
                        'Die Summanden mit Potenzen von \\term{s} größer Null sollten ganze Zahlen sein, was bedeutet, dass nur Koeffizienten als Faktoren der potenzierten \\jump{OM:SupNum:Formale-Entwicklung:Vortext:DefinitionSuperialeEinheit}{Primzahlprodukt-Fläche} in Frage kommen, die aus dem Produkt Primzahlen entfernen oder hinzufügen, ohne seine Größenordnung zu verändern.',
                    ))),
                  array( 'text', array( text => array(
                    'Faktoren, die aus der Primzahlprodukt-Fläche in diesem Sinne nur Primfaktoren entfernen oder hinzufügen sind zunächst erst einmal ganz klar die rationalen Zahlen.'."\n".
                    'Sie bestehen nur aus endlichen Brüchen von Primfaktoren endlicher Anzahl und Potenz.'."\n",
                      'In Frage kämen vielleicht noch, wie schon erwähnt, Brüche unendlicher Anzahl von Primfaktoren endlicher Potenz, was zur \\jump{OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung}{Überrationalitätsvermutung} führt,'."\n".
                    'mit der wir uns hier erst später näher beschäftigen wollen.'."\n",
                      'Beispiele für ganze Superial-Zahlen sind:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a, b \in \mathbb{Q} *) *( \forall z \in \mathbb{Z} *) *[  〈a〉〈b〉〈z〉․  \in  \mathbb{S}_{Z}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  〈-5〉․  \in  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 - \frac{4}{25} *〉*〈 \frac{3}{2} *〉〈-5〉․  \in  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 \frac{4}{25} *〉*〈 \frac{3}{2} *〉〈5,2〉․  \notin  \mathbb{S}_{Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 \frac{4}{25} *〉*〈 \frac{3}{2} *〉〈5〉․〈1〉  \notin  \mathbb{S}_{Z}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das vorletzte letzte Beispiel ist übrigens eine negative ganze Superial-Zahl und das letzte eine positive nicht ganze Superial-Zahl,'."\n".
                    'weil die größte Stelle dominant ist.'."\n".
                    'Eine genaue Definition der \\jump{OM:SupNum:Formale-Entwicklung:GanzeSN}{ganzen Superial-Zahlen} findet sich in der formalen Entwicklung.'."\n",
                      'Ganze Superial-Zahlen lassen sich also sinnvoll definieren und bei näherer Betrachtung, die wir später vollziehen,'."\n".
                    'haben diese sehr interessante Eigenschaften und lassen uns Zahlen besser verstehen.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Natürliche Superial-Zahlen} \\\\'."\n".
                    'Wenn wir nun mitten in der Zahlentheorie sind, dann stellt sich auch die Frage, ob es ebenso natürliche Superial-Zahlen \\term{\M(S)_{N}} gibt.'."\n",
                      'Das ist im Grunde ziemlich leicht zu beantworten, denn natürliche Zahlen sind generell alle positiven ganzen Superial-Zahlen,'."\n".
                    'hier per obiger Definition einschließlich der Null.'."\n".
                    'Um dies zu beurteilen müssen wir sagen können, welche ganzen Superial-Zahlen größer als Null sind.'."\n",
                      'Bei den Superial-Zahlen handelt es sich um eine lexikografische Ordnung:'."\n".
                    'Die Ordnung der ungleichen Faktoren der größten Potenz bestimmt die Ordnung zweier Superial-Zahlen,'."\n".
                    'ähnlich wie die Wörter in einem Lexikon geordnet werden.'."\n",
                      'Positiv ist eine ganze Superial-Zahl also, wenn der Faktor seiner größten Potenz größer als Null ist.'."\n".
                    'Alle kleineren Potenzen können auch negativ sein, weil die größte Potenz dominant ist,'."\n".
                    'wie in einigen der Beispiele:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a, b \in \mathbb{Q} *) \left( \forall z \in \mathbb{Z} *) *[  0  \leq  〈a〉〈b〉〈z〉․  \in  \mathbb{S}_{N}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  〈5〉․  \in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 \frac{4}{25} *〉*〈 - \frac{3}{2} *〉〈-5〉․  \in  \mathbb{S}_{N}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 - \frac{4}{25} *〉*〈 \frac{3}{2} *〉〈5〉  \notin  \mathbb{S}_{N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\\jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSN}{Natürliche Superial-Zahlen} lassen sich in den Superial-Zahlen also definieren.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Einleitung:Grundlagen:XXX', text =>
                'Superiale Primzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um herauszufinden, ob es superiale Primzahlen geben kann und wie diese sinnvollerweise definiert werden können und aussehen,'."\n".
                    'möchte ich mit der Definition von Primzahlen im Endlichen beginnen, damit wir die Eigenschaften dann ins Unendliche erweitern.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Primzahlen im Endlichen} \\\\'."\n".
                    'Definition der Primzahlen im Endlichen:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Primzahl:2021}.}'."\n"))),
                      
                  array( 'text', array( Shape  => 'quote', text => array(
                        'Die Primzahlen sind innerhalb der Menge \\term{\M(N)} der natürlichen Zahlen dadurch charakterisiert, dass jede von ihnen genau zwei natürliche Zahlen als Teiler hat.'."\n"),
                        addtext => '\\footnote{Internet: \\\\ \\cite{wiki:Primzahl:2021}, Eigenschaften von Primzahlen.}')),
                      
                  array( 'text', array( text => array(
                    'Nach dieser Definition ist die Eins keine Primzahl.'."\n",
                      'Dass es unendlich viele Primzahlen im Endlichen gibt, können wir durch die Schlussfolgerungskette des folgenden Beweises erkennen:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Primzahl:2021}, Größte bekannte Primzahl.}'."\n"))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Bilde die Primfakultät\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Primorial:2015}.} einer Primzahl, das Produkt aller Primzahlen kleiner und einschließlich dieser Primzahl: \\term{p#}',
                        'Addiere Eins dazu oder ziehe Eins ab: \\term{p# ± 1}',
                        '\\term{p# ± 1} ist nicht durch eine der Primzahlen in \\term{p#} ganzzahlig teilbar.',
                        '\\term{p# ± 1} kann daher entweder nur selber eine Primzahl sein, die dann größer als \term{p} ist, oder ihr Primzahlprodukt enthält ausschließlich Primzahlen – mindestens zwei Stück – die nicht in \term{p#} enthalten sind und damit größer als \term{p} sein müssen. ',
                        'Alle Primzahlen, durch die \\term{p# ± 1} teilbar ist, sind damit größer als \\term{p}.',
                        'Es gibt also immer eine Primzahl, die größer ist als jede gegebene Primzahl \\term{p}, womit die Menge der endlichen Primzahlen nicht endet.',
                    ))),
                  array( 'text', array( text => array(
                    'Es gibt im Endlichen demnach bewiesenermaßen unendlich viele Primzahlen.'."\n"))),
                  array( 'text', array( text => array(
                  '\\condb{Mit Primzahlen ins Unendliche} \\\\'."\n".
                    'Der vorstehend geführte Beweis zeigt, dass die Primfakultät eine besondere Rolle im Zusammenhang mit Primzahlen und dem Unendlichen spielt.'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      'Beim Beweis der Primzahlproduktvermutung und der unendlich großen Primzahl-Zwillinge ist die Frage, ob die tendenzielle Lücke'."\n".
                    'zwischen einer gegebenen Primzahl \\term{p} und \\term{p# - 1} eine Frage des Gitters ist oder eine Frage der prinzipiellen Möglichkeit aufgrund'."\n".
                    'der Lage und Größe der Lücke.'."\n",
                      'Angenommen es ist eine Frage der prinzipiellen Möglichkeit aufgrund der Lage und Größe der Lücke.'."\n",
                      'Angenommen die Primzahlen zwischen der gegebenen Primzahl \\term{p} und \\term{p# - 1} verschwinden allmählich gegen Unendlich:'."\n".
                    'Dann blieben zunehmend die Primzahl-Zwillinge \\term{p# ± 1} als nächstgrößere Primzahlen direkt nach \\term{p} übrig.'."\n".
                    'Die Möglichkeit, dass …'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
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
                    'Wenn diese Möglichkeit verschwindet, dann müssen beide \\term{p# ± 1} selber Primzahlen sein.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Nähern sich die Lücken in den Primzahlen \term{Δ  =  (p# - 1) - p}?',
                        'Dann sind tendenziell alle \term{p# ± 1} Primzahlen.',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
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
                    'XXX'."\n"))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '\term{Δp_{i}# = p_{i+1}# - p_{i}#}',
                        'Annahme \term{Δp_{i}# < Δp_{i+1}#}',
                        'XXX',
                        'XXX',
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
                    'XXX'."\n"))),
                  array( 'bulletlist', array( bullet_ary => array(
                        '2 ⋅ 3 ⋅ 5  =  30',
                        '30 / 2  =  15',
                        'XXX',
                        'XXX',
                        'XXX',
                        'XXX',
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
                    'XXX'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  :=  \left\{ x ~\middle|~ \left( \forall d \in \mathbb{Z} \right) \left( \forall q_{d} \in \mathbb{Q} \setminus \{0\} \right) \left( \forall q_{i} \in \mathbb{Q} \right) \\\ \qquad\qquad\qquad\qquad\qquad\quad \left[ q_{d} s^{d} + \sum_{( \forall i \in \mathbb{Z})[d > i]} q_{i} s^{i} \right] \right\}  }'),
                      array( display => 'on',  latex => '{  p_{x}\# \pm 1  =  XXX  }'),
                      array( display => 'on',  latex => '{  p  =  〈a〉〈b〉〈\pm 1〉․〈0〉  }'),
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
                  array( 'text', array( text => array(
                    'Primzahlen in den Superial-Zahlen:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  p  =  〈\frac{1}{2}〉〈\pm 1〉․〈0〉  }'),
                      array( display => 'on',  latex => '{  p  =  〈a〉〈b〉〈\pm 1〉․〈0〉  }'),
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
                  array( 'text', array( text => array(
                  '\\condb{Mit Primzahlen ins Unendliche – 2. Ansatz} \\\\'."\n".
                    'Lässt sich die Körnung der natürlichen Zahlen über das folgende Produkt beschreiben?'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \displaystyle *( \prod_{\forall p \in \mathbb{P}}  \frac{ 1 }{ p } *)  =  \frac{ 1 }{ 2 } \cdot \frac{ 1 }{ 3 } \cdot \frac{ 1 }{ 5 } \cdot \frac{ 1 }{ 7 } \cdot …  =  \frac{ 1 }{ \omega_{p} }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Hälfte aller natürlichen Zahlen enthält die \\term{2}.'."\n".
                    'Ein drittel aller natürlichen Zahlen enthält die \\term{3} und so fort … ?'."\n",
                      'Da würde die Null bei allen mit zu zählen.'."\n".
                    'Es gibt aber sehr viele Zahlen, die sowohl die \\term{2} als auch die \\term{3} oder andere Primzahlen enthalten und diese müssen mitgezählt werden.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:Vortext:XXX', text =>
                      
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
                      array(  jump_name => 'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn'),
                    )),
                )
          ); */ ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
