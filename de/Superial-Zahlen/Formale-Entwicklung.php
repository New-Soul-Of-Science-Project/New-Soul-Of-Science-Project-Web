<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Formale-Entwicklung'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Arithmetische-Struktur-Geometrie'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    // '• Ist \lm{ \mathbb{S} } bezüglich der Addition und Multiplikation ein \jump[https://de.wikipedia.org/wiki/Geordneter_Körper]{}{archimedisch angeordneter Körper}?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Definition der Superial-Zahlen kann auf unterschiedliche Weisen erfolgen.'."\n".
                    'Ich habe mich dafür entschieden dies auf eine Weise zu tun, die sicher stellt, dass möglichst viele'."\n".
                    'Eigenschaften der endlichen natürlichen Zahlen sowie auch der ganzen Zahlen, der Primzahlen und der rationalen Zahlen'."\n".
                    'ins Aktual-Unendliche fortgesetzt werden.'."\n",
                      'Bei den Superial-Zahlen handelt es sich um eine abelsche Gruppe\footnote{\const{NSOSP_g_footnote_text_AbelscheGruppe}}'."\n".
                    'bezüglich der Addition und Multiplikation.'."\n".
                    'Sie sind sogar ein angeordneter algebraischer Körper\footnote{\const{NSOSP_g_footnote_text_KoerperAlgebra}},'."\n".
                    'der die rationalen Zahlen \lm{ \mathbb{Q} } und, wie wir mittlerweile zeigen können, auch die durch \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{Radikale darstellbaren reell algebraischen Zahlen}\footnote{\const{SupNum_g_footnote_text_AlgebraischeZahl}}'."\n".
                    'ins Aktual-Unendliche erweitert;'."\n".
                    'vielleicht sogar alle reell algebraischen Zahlen.'."\n",
                      'Durch Radikale darstellbare rein reale algebraische Zahlen sind solche, die durch endliche rationale Zahlen, mittels der vier Grundrechenarten'."\n".
                    'sowie unter Verwendung von endlichen ganzen Wurzeln darstellbar sind.\footnote{\const{SupNum_g_footnote_text_DurchRadikaleDarAlgZ}}'."\n".
                    'Ob die Superial-Zahlen auch eine sinnvolle Erweiterung aller algebraischen Zahlen darstellen, die keine Radikale sind, ist Teil der \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{aktuellen Forschung}.'."\n",
                      'Die Superial-Zahlen sollen auch die wichtigen endlichen Teilmengen der algebraischen Zahlen erweitern,'."\n".
                    'wie die der natürlichen Zahlen \lm{ \mathbb{N} }, der ganzen Zahlen \lm{ \mathbb{Z} } und der Primzahlen \lm{ \mathbb{P} } zu den'."\n".
                    'den \jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Superial-Zahlen} \lm{ \mathbb{S}_{\N} },'."\n".
                    'den \jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Superial-Zahlen} \lm{ \mathbb{S}_{\Z} }'."\n".
                    'und sogar zu den \jump{OM:SupNum:Formale-Entwicklung:PrimSZ}{superialen Primzahlen} \lm{ \mathbb{S}_{\P} }.'."\n",
                      'So kommen wir zum Beispiel nicht nur in die Lage \jump{OM:SupNum:Ableitungen-Integrale:Ableitung}{Ableitungen mit Superial-Zahlen}, ganz ohne Limes, zu definieren,'."\n".
                    'sondern auch in die Lage, bis ins Aktual-Unendliche zu zählen und dadurch \jump{OM:SupNum:Ableitungen-Integrale:Integration}{Integrale}'."\n".
                    'als Summen unendlich vieler, unendlich schmaler Flächenstreifen zu berechnen.'."\n",
                      'Jede natürliche Superial-Zahl hat dabei so viele Vorgänger in \lm{ \mathbb{S}_{\N} }, wie sie selber groß ist.'."\n",
                      'Dies ist genau so, wie bei den Ordinalzahlen\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}}.'."\n".
                    'Und unsere aktual unendliche superiale Basis \lm{ \s } ist sogar vom Wert her gleich der besonderen Ordinalzahl \lm{ ω^{ω} }, es \jump{OM:SupNum:Primzahlprodukt-Vermutung:Vortext:Equ-s-ist-omega-hoch-omega}{gilt also \lm{ \s = ω^{ω} }}.'."\n".
                    'Und auch noch \jump{OM:SupNum:Eigenschaften:StrukturVonS:s-und-omega-hoch-omega-im-Strukturvergleich}{weitere Eigenschaften verbinden beide Zahlenarten}.'."\n".
                    'Nur haben die Superial-Zahlen im Gegensatz zu den Ordinalzahlen unter anderem den Vorteil, dass wir in ihnen beliebig vorwärts und rückwärts zählen können,'."\n".
                    'was wir für die Integration benötigen.'."\n".
                    'In den Ordinalzahlen ist nur das vorwärts zählen beliebig weit definiert.'."\n".
                    'Das Rückwärtszählen endet bei ihren Limeszahlen.'."\n",
                      'Die Sache mit der Anzahl der Vorgänger ist hingegen anders, als bei den von mir erforschten auch ins Aktual-Unendliche gehenden'."\n".
                    '\jump{OM:BiOrd:Home}{Biordinalzahlen}:'."\n".
                    'Aktual unendliche Biordinalzahlen sind ganze Zahlen, die bizarrer Weise \jump{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}{mehr Vorgänger als ihr Wert} haben, also als sie selber groß sind.'."\n".
                    'Und auch in mancherlei anderer Beziehung können wir erkennen, dass diese die noch nicht so „perfekten“ Vorläufer der Superial-Zahlen sind.'."\n".
                    'Mathematisch gesehen sind die Biordinalzahlen eine Erweiterung der Ordinalzahlen\footnote{\const{BiOrd_g_footnote_text_Ordinalzahl}} zu einem algebraischen Ring\footnote{\const{NSOSP_g_footnote_text_RingAlgebra}}.'."\n",
                      'Die Menge der Superial-Zahlen ist also in vielerlei Hinsicht etwas ganz besonderes.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Formale-Entwicklung:Vortext:X', text =>
                      
                'Polynom-Definition der Menge der Superial-Zahlen \lm{ \mathbb{S} }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Um zu gewährleisten, dass die Superial-Zahlen \lm{ \mathbb{S} } eine möglichst große Anzahl der reellen Zahlen umfassen und ins Aktual-Unendliche erweitern,'."\n".
                    'können die Koeffizienten der Potenzen der superialen Basis \lm{ \s } als \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvolle Koeffizienten}'."\n".
                    'über \lm{ \mathbb{A}_{\S} } definiert werden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  :=  *\{  u  *|*  *( \forall d \in \mathbb{Z} *) *( \forall a_{d} \in \mathbb{A}_{\S} \setminus *\{ 0 *\} *) *( \forall a_{i} \in \mathbb{A}_{\S} *) \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\; *[ a_{d} \s^{d} + \!\!\!\!\!\! \sum_{( \forall i \in \mathbb{Z}) [i < d]} \!\!\!\!\!\! a_{i} \s^{i} *]  *\}  }',
                                          label_name => 'OM:SupNum:Formale-Entwicklung:Vortext:Equ-Def-S-Polynom', label_text => '\name{OM:SupNum:Formale-Entwicklung:Vortext:Equ-Def-S-Polynom}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Vorstehend sehen wir unschwer im Grunde die Definition eines \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystems},'."\n".
                    'was wir auf dieser Seite auch noch mit der Definition und Nutzung einer eigenen Schreibweise würdigen werden.'."\n",
                      'Diese ist notwendig, weil die Stellen dieses neuen Stellenwertsystems nicht nur Ziffern, wie im Zehnersystem oder ähnlichen einfachen'."\n".
                    'Systemen, sein können.'."\n".
                    'Es können eben alle sinnvollen Koeffizienten der Superial-Zahlen sein, was Brüche, Wurzeln und sogar auch negative Zahlen umfasst.'."\n".
                    'Ganze Terme können wir für die Stellen einsetzen.'."\n",
                      'Nun nachfolgend aber erst einmal zu den ganzen Superial-Zahlen.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:GanzeSZ'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Ganze Superial-Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Formale-Entwicklung:GanzeSZ',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wie wir im Abschnitt \italic{›\jumpname{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}‹} aufzeigen,'."\n".
                    'ist das Verständnis der ganzen Superial-Zahlen tief mit ihren sinnvollen Koeffizienten verbunden.'."\n".
                    'Weil dort im Detail erklärt, betrachten wir hier diesen Zusammenhang nicht ganz so tief.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Formale-Entwicklung:GanzeSZ:X', text =>
                      
                'Die ganzen Superial-Zahlen \lm{ \mathbb{S}_{\Z} }', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Wie müssen ganze Superial-Zahlen nun aussehen?'."\n".
                    'Eine Superial-Zahl ist dann ganz, wenn all ihre Summanden ganz sind, was bedeutet:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Die Summanden mit negativer Potenz von \lm{ \s } sollten nur Null-Koeffizienten haben, damit eine ganze Superial-Zahl eben nicht gebrochen ist.',
                        'Im endlichen Summanden \lm{ \s^{0} = 1 } sollten demnach nur ganze Koeffizienten enthalten sein.',
                        'Die Summanden mit positiven Potenzen von \lm{ \s } sollten auch nur ganze Zahlen sein. Das bedeutet, die Koeffizienten können wegen der aktual unendlichen Größe der Basis aus \lm{ \mathbb{A}_{\S} } sein.',
                    ))),
                  array( 'text', array( text => array(
                    'Faktoren, die aus dem Primzahl-Flächenprodukt in diesem Sinne nur Primfaktoren entfernen oder hinzufügen sind zunächst erst einmal ganz klar die rationalen Zahlen.'."\n".
                    'Sie bestehen nur aus endlichen Brüchen von Primfaktoren endlicher Anzahl und Potenz.'."\n",
                      'Interessanter und für manch einen wohl etwas überraschender Weise erfüllen aber auch ganzzahlige Wurzeln aus positiven natürlichen Zahlen diese Bedingung, wie wir im \jump{OM:SupNum:Ueberrationalitaetsvermutung}{Beweis der Überrationalitätsvermutung}'."\n".
                    'lernen.'."\n".
                    'Schließlich kommen wir sogar so weit, dass wir dies für \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{alle durch Radikale darstellbaren reell algebraischen Zahlen}'."\n".
                    'zeigen können.'."\n",
                      'Wir bekommen einen Eindruck und ein Gefühl anhand folgender Beispiele für ganze Superial-Zahlen in'."\n".
                    'der neuen \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystem-Schreibweise}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.Z', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a, b, c, g \in \mathbb{A}_{\S} *) \\\  *[  *〈 a *〉*〈 b *〉*〈 c *〉․*〈 g *〉  =  a \s^{2} + b \s^{1} + c \s^{0} + g \s^{-1}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 a *〉*〈 b *〉*〈 c *〉․*〈 g *〉  \in  \mathbb{S}  }'),
                      array( display => 'on',  latex => '{  *( \forall a, b \in \mathbb{A}_{\S} *) *( \forall z \in \mathbb{Z} *) *[  〈a〉〈b〉〈z〉․  \in  \mathbb{S}_{\Z}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 0 *〉․  \in  \mathbb{S}_{\Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 -5 *〉․  \in  \mathbb{S}_{\Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 - \frac{4}{25} *〉*〈 \frac{3}{2} *〉*〈 5 *〉․  \in  \mathbb{S}_{\Z}  }',
                                          label_name => 'OM:SupNum:Formale-Entwicklung:Vortext:Equ-Beispiel-SZ-negativ', label_text => '\name{OM:SupNum:Formale-Entwicklung:Vortext:Equ-Beispiel-SZ-negativ}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 \frac{4}{25} *〉*〈 \frac{3}{2} *〉*〈 -5 *〉․  \in  \mathbb{S}_{\Z}  }',
                                          label_name => 'OM:SupNum:Formale-Entwicklung:Vortext:Equ-Beispiel-SZ-positiv', label_text => '\name{OM:SupNum:Formale-Entwicklung:Vortext:Equ-Beispiel-SZ-positiv}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 \frac{4}{25} *〉*〈 \frac{3}{2} *〉*〈 -5,2 *〉․  \notin  \mathbb{S}_{\Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 \frac{4}{25} *〉*〈 \frac{3}{2} *〉*〈 -5 *〉․*〈 1 *〉  \notin  \mathbb{S}_{\Z}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 \sqrt[3]{7} - \frac{1}{2} *〉*〈 - \frac{ 1 }{ \sqrt{2} } *〉*〈 3 *〉․  \in  \mathbb{S}_{\Z}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Das Beispiel \jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Equ-Beispiel-SZ-negativ} ist übrigens eine negative ganze Superial-Zahl'."\n".
                    'und das Beispiel \jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Equ-Beispiel-SZ-positiv} eine positive ganze Superial-Zahl,'."\n".
                    'weil die höchste Stelle dominant ist.'."\n",
                      'Nachfolgend nun eine genaue Definition der ganzen Superial-Zahlen:'."\n",
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.Z', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{S}_{\Z}  :=  *\{  u  *|*  *( \forall d \in \mathbb{N} *) *( \forall a_{d} \in \mathbb{A}_{\S} \setminus *\{ 0 *\} *) \\\ \qquad\qquad\qquad\;\, *( \forall a_{i} \in \mathbb{A}_{\S} *) *( \forall z \in \mathbb{Z} *) \\\ \qquad\qquad\qquad\;\, *[ \begin{cases} z  &  \text{ falls } d = 0  \\\\  \displaystyle{ a_{d} \s^{d} + \!\!\!\!\!\!\!\! \sum_{( \forall i \in \mathbb{N}) [0 < i < d]} \!\!\!\!\!\!\!\! a_{i} \s^{i} + z }  &  \text{ falls } 0 < d  \end{cases} *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wenn wir uns einwenig damit beschäftigen, kommen wir schnell dahinter und können gut verstehen, dass dies plausibel ist.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ'),
                    )),
              )
          ); ?>
          

		    	<!  • Natürliche Superial-Zahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:GanzeSZ', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die natürlich Superial-Zahl \lm{ \mathbb{S}_{\N} } leiten sich dann von den ganzen Superial-Zahl leicht ab.'."\n".
                    'Es sind einfach alle Zahlen aus dieser Menge, die positiv sind, einschließlich der Null:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.N', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{S}_{\N}  :=  *\{  u  *|*  *( \forall u \in \mathbb{S}_{\Z} *)  *[ 0 \leq u *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Schreiben wir dies in einer ausführlicheren Definition, wie bei den ganzen Superial-Zahlen, dann wird es etwas transparenter:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.N', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Leftrightarrow  \mathbb{S}_{\N}  :=  *\{  u  *|*  *( \forall d \in \mathbb{N} *) *( \forall a_{d} \in \mathbb{A}_{\S}^{+} *) *( \forall a_{i} \in \mathbb{A}_{\S} *) \\\ \qquad\qquad\qquad\qquad\quad\; *( \forall n \in \mathbb{N} *) *( \forall z \in \mathbb{Z} *) \\\ \qquad\qquad\qquad\qquad\quad\; *[ \begin{cases} n  &  \text{ falls } d = 0  \\\\  \displaystyle{ a_{d} \s^{d} + \!\!\!\!\!\!\!\! \sum_{( \forall i \in \mathbb{N}) [0 < i < d]} \!\!\!\!\!\!\!\! a_{i} \s^{i} + z }  &  \text{ falls } 0 < d  \end{cases} *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für den Fall, dass \lm{ d = 0 } ist, es sich also um endliche Zahlen handelt, bleiben nur endliche natürliche Zahlen über.'."\n",
                      'Für \lm{ 0 < d }, den Fall, dass es sich um aktual unendlich große natürliche Zahlen handelt, entspricht die Definition der von positiven ganzen Superial-Zahlen.'."\n".
                    'Dies ist dadurch bestimmt, dass der Koeffizient \lm{ a_{d} } der größten Potenz \lm{ \s^{d} } positiv sein muss.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ:X', text =>
                      
                'Beispiele für natürliche Superial-Zahl', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Hier nun auch Beispiele in der \jump{*SupNum:Stellenwertsystem-Schreibweise}{Stellenwertsystem-Schreibweise}'."\n".
                    'für die natürlichen Superial-Zahlen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.N', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *〈 0 *〉․  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  *〈 -5 *〉․  \notin  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  *〈 - \frac{4}{25} *〉*〈 \frac{3}{2} *〉*〈 5 *〉․  \notin  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  *〈 \frac{4}{25} *〉*〈 \frac{3}{2} *〉*〈 -5 *〉․  \in  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  *〈 \frac{4}{25} *〉*〈 \frac{3}{2} *〉*〈 -5,2 *〉․  \notin  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  *〈 \frac{4}{25} *〉*〈 \frac{3}{2} *〉*〈 -5 *〉․*〈 1 *〉  \notin  \mathbb{S}_{\N}  }'),
                      array( display => 'on',  latex => '{  *〈 \sqrt[3]{7} - \frac{1}{2} *〉*〈 - \frac{ 1 }{ \sqrt{2} } *〉*〈 3 *〉․  \in  \mathbb{S}_{\N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auch hier entscheidet die dominante höchste Stelle der Zahlen darüber, ob sie in der Menge der natürlichen Superial-Zahlen sind oder nicht.'."\n".
                    ''))),
                       
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:PrimSZ'),
                    )),
              )
          ); ?>
          

		    	<!  • Superiale Primzahlen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Formale-Entwicklung:PrimSZ',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Irreduzible Polynome}',
                    // '• \quote{Ihre Bedeutung für die Polynomringe ist in den meisten Fällen (Polynome über faktoriellen Ringen) mit der Bedeutung von Primzahlen für natürliche Zahlen gleich.}, vgl. \jump[https://de.wikipedia.org/wiki/Irreduzibles_Polynom]{}{Wikipedia – Irreduzibles Polynom}.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Es lässt sich sogar die Menge \lm{ \mathbb{S}_{\P} } der superialen Primzahlen definieren.'."\n",
                      'Dies sind alle \jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Superial-Zahlen}, die'."\n".
                    'nur durch Eins und durch sich selber ganzzahlig teilbar sind, wie auch sonst bei Primzahlen üblich.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Es existiere also die Menge'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.P', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \exists \mathbb{S}_{\P}\!: *( \forall x \in \mathbb{S}_{\N}^{+}\!: *( \forall n \in \mathbb{S}_{\N}^{+} \setminus *\{ 1, x *\} *) *[ n \nmid x *] \\\ \qquad\qquad\qquad\qquad\qquad\qquad\quad  \Rightarrow  x \in \mathbb{S}_{\P} *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'aller superialen Primzahlen.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Wenn \lm{ \mathbb{A}_{\S} } \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{die Menge der sinnvollen Koeffizienten der Superial-Zahlen} ist,'."\n".
                    'dann gehören dazu auch alle endlichen Primzahlen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.P', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{P}  \subset  \mathbb{S}_{\P}  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{\S} *)  *[  a \cdot \s \pm 1  \in  \mathbb{S}_{\P}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und beispielsweise auch diese vorstehenden aktual unendlich großen Superial-Zahlen.'."\n".
                    'Dies können wir leicht erkennen, wenn wir uns in Formel \jumpname{OM:SupNum:Einleitung:Vortext:Equ-s-gleich-Primzahl-Flae-Prod}'."\n".
                    'das Primzahl-Flächenprodukt anschauen.'."\n",
                      'Kommen höhere Potenzen der superialen Basis ins Spiel, müssen wir schauen, ob es nicht binomische Formeln gibt, die diese erzeugen können:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.P', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{\S} *) *( \forall i \in \mathbb{N}^{+} *)  *[  a \cdot \s^{i} \pm 1  ?\in  \mathbb{S}_{\P}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a_{1}, a_{2} \in \mathbb{A}_{\S} *)  *[  a_{2} \cdot \s^{2} + a_{1} \cdot \s \pm 1  ?\in  \mathbb{S}_{\P}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Was wir sehen können ist, dass der endliche Summand nur \lm{ \pm 1 } sein kann, denn wäre er eine andere ganze Zahl,'."\n".
                    'dann wäre die natürliche Superial-Zahl, wegen des Primzahl-Flächenprodukts, durch den Betrag dieser ganzen Zahl teilbar.'."\n",
                      'Die Frage, welche natürlichen Superial-Zahlen superiale Primzahlen sind, ist über irreduzible Polynome\footnote{\const{SupNum_g_footnote_text_Primpolynom}}'."\n".
                    'zu beantworten:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'quote', text => array(
                        'In der Algebra, einem Teilgebiet der Mathematik, ist ein irreduzibles Polynom ein Polynom, das sich nicht als Produkt zweier nicht'."\n".
                        'invertierbarer Polynome schreiben lässt und somit nicht in „einfachere“ Polynome zerfällt.'."\n".
                        'Ihre Bedeutung für die Polynomringe ist in den meisten Fällen (Polynome über faktoriellen Ringen)'."\n".
                        'mit der Bedeutung von Primzahlen für natürliche Zahlen gleich.'."\n"),
                        addtext => '\footnote{\cite{wiki:IrreduziblesPolynom:2024}.}')),

                  array( 'text', array( text => array(
                    'Also gibt es sogar superiale Primzahlen unter den Superial-Zahlen.'."\n".
                    'Noch eine echt bemerkenswerte Eigenschaft der Superial-Zahlen.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien'),
                    )),
              )
          ); ?>


		    	<!  • Formalien  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Formale-Entwicklung:Formalien',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:PrimSZ', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),

                  array( 'text', array( text => array(
                    'Nachfolgend wichtige Definitionen zur Schaffung von Werkzeugen, die es ermöglichen, die Superial-Zahlen, ihre Untermengen und'."\n".
                    'Summen einfach zu definieren, darzustellen und mit ihnen praktisch umgehen zu können.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h3', jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:X', text =>

                '\italic{Inhalt}', subline =>
                  '')),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Zahlen-und-Mengen-im-Unendlichen'),
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Stellenwertsystem'),
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge'),
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen'),
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Eingrenzung-Schichten-Superial-Zahlen'),
                      array(  jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Aktual-Unendliche-Exponenten-der-Primzahlen-in-Superial-Zahlen'),
                    )),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Zahlen-und-Mengen-im-Unendlichen', text =>

                'Zahlen und Mengen im Unendlichen', subline =>
                  'Der Übergang von Mengen und Werten endlicher natürlicher Zahlen ins Aktual-Unendliche')),
                  array( 'text', array( text => array(
                    'Wir beleuchten einmal tiefer, welche hier wichtigen Eigenschaften von natürlichen Zahlen, deren Werten und Mengen dieser'."\n".
                    'sich auf welche Weise beim Übergang vom Endlichen ins Aktual-Unendliche wie verhalten sollten oder gar müssen,'."\n".
                    'um plausibel zu sein und in Bezug auf die Superial-Zahlen Sinn zu ergeben.'."\n",
                      'Das bedeutet nicht, dass es prinzipiell nicht auch weitere Möglichkeiten mit ihren Perspektiven und deren jeweiligen Vor- und Nachteilen gibt.'."\n".
                    'Mir erscheint die nachfolgende Perspektive natürlich am besten zum Erkenntnisgewinn geeignet und in diesem Sinne als am besten zu den Superial-Zahlen passend.'."\n"))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:X', text =>
                  'Die Teilmengen vom Beginn der natürlichen Zahlen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Betrachten wird die Teilmengen \lm{ \mathbb{T}_{n} }, die wir vom Beginn der natürlichen Zahlen bilden können und deren Größe, also die Anzahl ihrer Elemente \lm{ n }.'."\n",
                      'Exemplarisch vereinfacht definieren wir diese Mengen wie folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.ZM', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{T}_{n}  :=  *\{ 0, 1, 2, 3, 4, …, n - 1 *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Formell korrekter können wir schreiben, wenn wir nachfolgend die Menge aller natürlichen Zahlen \lm{ \mathbb{N} } als stets mit der Null beginnend annehmen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.ZM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{N}  :=  \mathbb{N}_{0}  }',
                                          label_text => '\jumpname{OM:BiOrd:Einleitung:Vortext:Equ-Def-N-enthaelt-Null}', label_incr => false),
                      array( display => 'on',  latex => '{  \mathbb{T}_{n}  :=  *\{  x  *|*  *( n \in \mathbb{N} *) *( \forall x \in \mathbb{N} *) *[  x < n  *]  *\}  }'),
                    ))),

                  array( 'text', array( Shape => 'italic', text => array(
                      'Die Teilmenge \lm{ \mathbb{T}_{n} } der ersten \lm{ n } Elemente wird definiert als die Menge der Elemente x für die Gilt:'."\n".
                      'Ich nehme das Element \lm{ n } aus der Menge der natürlichen Zahlen \lm{ \mathbb{N} } und alle \lm{ x }, die kleiner als \lm{ n } sind.'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Wir sehen schon an der Definition, dass die Anzahl der Elemente in \lm{ \mathbb{T}_{n} } größer als alle Elemente dieser Menge ist.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Mein Freund Raimund Welsch machte mich in diesem Zusammenhang ganz zurecht darauf aufmerksam, dass dies eben nur gilt, wenn die natürlichen Zahlen vorstehend einschließlich der Null definiert sind.'."\n",
                        'Ich antworte darauf, dass dies deutlich macht, wie sinnvoll und plausibel die Definition der natürlichen Zahlen einschließlich der Null ist,'."\n".
                      'wenn wir uns mit dem Übergang uns Unendliche beschäftigen.'."\n".
                      ''))),
                      
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:X', text =>
                  'Das größte Element dieser Mengen', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Im Fall der Mengen mit endlich vielen Elementen, hier repräsentiert durch die Menge \lm{ \mathbb{T}_{n} }, existiert ein größtes Element in der Menge.'."\n".
                    'Wenn das Symbol \lm{ \# } die Anzahl der Elemente einer Menge gibt, dann gilt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.ZM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{N} *)  *[  \#\mathbb{T}_{n}  =  n  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \exists \, \mathrm{groesstes}(\mathbb{T}_{n}) *)  *[  \mathrm{groesstes}(\mathbb{T}_{n})  =  n - 1  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \mathrm{groesstes}(\mathbb{T}_{n}) + 1  =  n  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall i \in \mathbb{T}_{n} *)  *[  i  <  n  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die letzte Aussage \lm{ \forall i < n } wird sich nachfolgend als wesentlich, weil auch im Aktual-Unendlichen weiter tragfähig, herausstellen.'."\n".
                    'Die Aussage \lm{ \mathrm{groesstes}(\mathbb{T}_{n}) = n - 1 } gilt offenbar nur im Endlichen und ergibt im Aktual-Unendlichen keinen Sinn mehr.'."\n",
                      'Wir gehen nun ins Unendliche über und schauen uns das mal näher an.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:X', text =>
                  'Übergang ins Aktual-Unendliche', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Anders als im Endlichen bei der Mengen \lm{ \mathbb{T}_{n} } verhält es sich, wenn wir zur Menge aller natürlich Zahlen \lm{ \mathbb{N} } übergehen,'."\n".
                    'die unendlich viele Elemente endlicher Größe enthält.'."\n".
                    'Auch sie beginnt mit der Null und den weiteren Elementen jeder Menge \lm{ \mathbb{T}_{n} }, aber in ihr gibt es per Definition kein größtes Element,'."\n".
                    'weil es zu jedem Element einen Nachfolger gibt, denn es ist die Menge der vollständigen Induktion:\footnote{\const{BiOrd_g_footnote_text_VollstaendigeInduktion}}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.ZM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \Rightarrow  \nexists \, \mathrm{groesstes}(\mathbb{N})  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Jedoch kann die Anzahl der Elemente in \lm{ \mathbb{N} } nach den Definitionen \jumpname{OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N} und \jumpname{OM:BiOrd:Einleitung:Vortext:Equ-Def-omega-gleich-N}'."\n".
                    'mit der aktual unendlichen Zahl \lm{ ω } angegeben werden:\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Ordinalzahl:2021}, Topologische Eigenschaften.}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.ZM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ω  :=  \#\mathbb{N}  }',
                                               label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{N} *)  *[  n  <  ω  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{\S} *)  *( \exists n \in \mathbb{N} *)  *[  a  <  n  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in \mathbb{A}_{\S} *)  *[  -ω  <  a  <  ω  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a^{+} \in \mathbb{A}_{\S}^{+} *)  *[  0  <  ω^{-1}  <  a^{+}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( k \in \mathbb{A}_{\S} *)  *( \forall a^{+} \in \mathbb{A}_{\S}^{+} *)  \\\ \qquad\qquad  *[  k - a^{+}  <  k - ω^{-1}  \\\ \qquad\qquad\qquad\qquad  <  k  <  k + ω^{-1}  <  k + a^{+}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dazu nutzen wir hier die Menge \lm{ \mathbb{A}_{\S} } der \jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen}{sinnvollen algebraischen Koeffizienten der Superial-Zahlen},'."\n".
                    'anstatt reelle Zahlen aus der Menge der reellen Zahlen \lm{ \mathbb{R} }.'."\n".
                    'Der Grund dafür ist, dass wir bei Zahlen aus \lm{ \mathbb{A}_{\S} } sicher sind, dass diese keine aktual unendlich kleinen Summanden enthalten,'."\n".
                    'die einen Teil unserer Ungleichungen ungültig machen würden.'."\n".
                    'Denn unsere Untersuchung der \jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{Eulerschen Zahl \lm{ \e }} – hierin als \lm{ \e_{\s} } bezeichnet –'."\n".
                    'aufgrund der \jump{OM:SupNum:Ableitungen-Integrale:Ableitung}{Ableitung} mit Hilfe von Superial-Zahlen,'."\n".
                    'lässt nämlich die \jump{OM:SupNum:Superiale-Transzendenz-Vermutung}{Vermutung} aufkommen,'."\n".
                    'dass transzendente Zahlen, die Teil der Menge der reellen Zahlen \lm{ \mathbb{R} } sind, immer aktual unendlich kleine Summanden enthalten.'."\n",
                      'Der Wert von \lm{ \pm ω^{-1} } ist über den \jump{OM:SupNum:Primzahlprodukt-Vermutung}{Beweis der Primzahlprodukt-Vermutung} wohldefiniert.'."\n",
                      'Auf diese Weise kommen wir in die Lage, Zahlen außerhalb des Endlichen zu definieren; Zahlen, die also wirklich im negativen oder positiven aktual unendlich Großen'."\n".
                    'sowie zwischen den endlichen Zahlen liegen.'."\n".
                    'Auch können wir nun Zahlen definieren, die um eine endliche reelle Zahl herum liegen und näher an dieser sind, als jede andere Zahl aus \lm{ \mathbb{A}_{\S} },'."\n".
                    'wie alle rationalen Zahlen oder alle durch Radikale darstellbaren algebraischen Zahlen.'."\n".
                    'Die Zahl \lm{ \pm ω^{-1} } verhält sich ähnlich, wie der Limes einer Umgebung \lm{ \varepsilon }, der gegen plus oder minus Null geht.'."\n".
                    'Nur sind diese Umgebungszahlen nicht unscharf, wie ein Limes, sondern konkret und damit scharf.'."\n",
                      'Das gleiche gilt, wenn wir das \lm{ ω } durch die noch viel größere superiale Basis \lm{ \s = ω^{ω} } ersetzen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.ZM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{N} *)  *[  n  <  \s  *]  }',
                                               label_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Equ-alle-n-kleiner-s', label_text => '\name{OM:SupNum:Formale-Entwicklung:Formalien:Equ-alle-n-kleiner-s}', label_incr => true),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{A}_{\S} *)  *( \exists n \in \mathbb{N} *)  *[  a  <  n  *]  }',
                                               label_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Equ-exist-n-mit-r-kleiner-n', label_text => '\name{OM:SupNum:Formale-Entwicklung:Formalien:Equ-exist-n-mit-r-kleiner-n}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in \mathbb{A}_{\S} *)  *[  - \s  <  a  <  \s  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in \mathbb{A}_{\S}^{+} *)  *[  0  <  \s^{-1}  <  a  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( k \in \mathbb{A}_{\S} *)  *( \forall a \in \mathbb{A}_{\S}^{+} *)  \\\ \qquad\qquad  *[  k - a  <  k - \s^{-1}  \\\ \qquad\qquad\qquad\qquad  <  k  <  k + \s^{-1}  <  k + a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Eigenschaft der Superial-Zahlen, mit ihnen keinen unscharfen, sondern einen konkreten „Limes“ definieren zu können, eröffnet die Möglichkeit'."\n".
                    'wichtige Eigenschaften der Zahlen näher untersuchen zu können, wie wir später sehen werden.'."\n".
                    'Sie ermöglicht so unter anderem die Definition einer konkreten aktual unendlichen Differentialrechnung, wie oben schon angedeutet.'."\n".
                    ''))),

                  // #Ref: *SupNum:Stellenwertsystem-Schreibweise
                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Stellenwertsystem', text =>
                      
                'Stellenwertsystem', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Eine der Eigenschaften der Superial-Zahlen ist, dass es sich um ein Stellenwertsystem handelt.'."\n".
                    'Es ist ein aktual unendliches Stellenwertsystem, in dem es eine endliche Stelle gibt und deren „Ziffern“'."\n".
                    'nicht nur ganze Zahlen oder alle rationalen Zahlen sein können, sondern eine große Menge an reell algebraischen Zahlen, wenn nicht gar'."\n".
                    '\jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{alle reell algebraischen Zahlen, wie wir vermuten}.'."\n".
                    'Also können sogar negative Zahlen, Brüche, Wurzeln und so fort hier Ziffern sein.'."\n",
                      '\jump{OM:SupNum:Superiale-Transzendenz-Vermutung}{Vermutlich können transzendente Zahlen keine} wirklich \jump{OM:SupNum:Algebraische-Koeffizienten-Vermutung}{sinnvollen Ziffern beziehungsweise Koeffizienten} sein,'."\n".
                      'wie die \jump{OM:SupNum:Eulersche-Zahl-e-Funktion}{Eulersche Zahl \lm{ \e } oder die Kreiszahl \lm{ π }}.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:X', text =>
                  'Ein besonderes Zahlensystem und seine Kurznotation', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Das ist sehr bemerkenswert und ermöglicht ein neues und besonderes Stellenwertsystem auf Basis der superialen Basis \lm{ \s }.'."\n",
                      'Nachfolgend wird das Symbol \lm{ \concat } für die Aneinanderreihung, die Konkatenation,'."\n".
                      'der „Ziffer“ nach der Definition \jumpname{OM:SupNum:Formale-Entwicklung:Vortext:Equ-Def-S-Polynom} der Superial-Zahlen verwendet:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.SW', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}  =  *\{  u  *|*  *( \forall d \in \mathbb{Z} *) *( \forall a_{d} \in \mathbb{A}_{\S} \setminus *\{ 0 *\} *) *( \forall a_{i} \in \mathbb{A}_{\S} *) \\\ \qquad\qquad\qquad\; *[ *〈 a_{d} *〉_{d} \underset{ ( \forall i \in \mathbb{Z}) [i < d] }{ \Concat } *〈 a_{i} *〉_{i}  :=  \\\ \qquad\qquad\qquad\qquad\qquad\qquad\qquad\quad a_{d} \s^{d} + \!\!\!\!\!\! \sum_{( \forall i \in \mathbb{Z}) [i < d]} \!\!\!\!\!\! a_{i} \s^{i} *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hierbei ist an jeder spitzen Klammer ein Index notiert, die wir großteils in der Praxis auch weglassen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Im Allgemeinen notieren wir die nullte Stelle, oft schlicht mit einem Punkt, denn die von dort aufsteigenden oder absteigenden Stellen'."\n".
                          'verstehen sich durchs Abzählen.',
                        'Wenn es nur die minus-erste Stelle und niedrigere gibt, dann notieren wir die Null oder den Punkt vor der minus-ersten Stelle.',
                        'Gibt es keine nullte oder minus-erste Stelle, dann notieren wir an die niedrigste Stelle deren Index.',
                        'Sollten nach oben hin Sprünge im Index sein, dann notieren wir ihn an der nullten Stelle oder nach der niedrigsten Stelle und dann nach jedem Sprung, damit klar ist, wo es weiter geht.',
                    ))),
                  array( 'text', array( text => array(
                    'Auf diese Weise ergibt sich eine recht einfache Notation.'."\n".
                    'An jeder Stelle können dann Terme eingetragen werden.'."\n".
                    'Am Ende der Rechnung wird angestrebt, dass die Terme rein endliche Ausdrücke ergeben,'."\n".
                    'die nicht mehr zu Überträgen in andere Stellen führen, wenn dies geht.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:X', text =>
                  'Beispiele für unsere Kurznotation', subline =>
                    '')),
                  array( 'text', array( text => array(
                    'Nun ein paar Beispiele in der neuen Notation:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.SW', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a, b, c, d \in \mathbb{A}_{\S} *) *[  〈a〉〈b〉〈c〉․〈d〉 \\\ \qquad\qquad\qquad  =  a \cdot \s^{2} + b \cdot \s^{1} + c \cdot \s^{0} + d \cdot \s^{-1} \\\ \qquad\qquad\qquad  \in  \mathbb{S}  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \s^{1}  =  〈1〉〈0〉․  =  〈1〉〈0〉_{0}  =  〈1〉_{1}  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \s^{0}  =  〈1〉․  =  〈1〉_{0}  =  1  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  \s^{-1}  =  ․〈1〉  =  _{0}〈1〉  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  - \frac{3}{5} \cdot \s^{2} + 25 \cdot \s^{1} + 3,5 \cdot \s^{0} - 7,2 \cdot \s^{-1} \\\ \qquad\qquad\qquad\quad  =  *〈 - \frac{3}{5} *〉〈25〉〈3,5〉․〈-7,2〉 \\\ \qquad\qquad\qquad\quad  =  *〈- \frac{3}{5} *〉〈25〉〈3,5〉_{0}〈-7,2〉  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Ich denke an diesen einfachen Beispielen wird klar, wie das superiale Zahlenwertsystem funktioniert und wie es notiert wird.'."\n".
                    'Der Punkt hinter der nullten Potenz von \lm{ \s } markiert quasi das Komma, ähnlich unseren reellen Zahlen im Zehnersystem notiert.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Stellenwertsystem:Berechnung-Stellen', text =>
                  'Berechnung der einzelnen Stellen im superialen Stellenwertsystem', subline =>
                    'Die neue Unendlichkeits-Gaußklammer')),
                  array( 'text', array( text => array(
                    'Die Aufgabe, aus einer beliebigen Superial-Zahl eine „Ziffer“, oder besser eine Stelle, herauszufiltern,'."\n".
                    'kann ich im Moment noch nicht durch ein elementares Verfahren definieren, dass ohne einen neuen Operator dafür auskommt.'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Den neuen Operator möchte ich an das Verfahren anlehnen, mit dem in Stellenwertsystemen endlicher Basis \lm{ b }'."\n".
                      'beliebige einzelne Ziffern \lm{ a_{i} } einer Zahl \lm{ y } an der Position \lm{ i } ausgerechnet werden können.'."\n".
                      'Diese Berechnung des Ziffernwerts\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Stellenwertsystem:2024}, Formeln, Berechnung eines Ziffernwertes.}'."\n".
                      'nutzt die Gaußklammer\footnote{\const{SupNum_g_footnote_text_Gaussklammer}}:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.SW', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall b \in \mathbb{N} *) *( 2 \le b *) *( \forall i \in \mathbb{Z} *) *( \forall y \in [0, b[_{\mathbb{N}} *)  \\\ \qquad\qquad\qquad *[  a_{i}  =  \left\lfloor \frac{ y }{ b^{i} } \right\rfloor  -  \left\lfloor \frac{ y }{ b^{i + 1} } \right\rfloor \cdot b  *]  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Formale-Entwicklung:Formalien:Stellenwertsystem:X',
                Title => '\small{Beispielrechnung …}',
                TitleVis => 'Beispielrechnung:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.SW', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  b = 10  \land  y = 38  \land  i = 0  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a_{0}  =  \left\lfloor \frac{ 38 }{ 10^{0} } \right\rfloor  -  \left\lfloor \frac{ 38 }{ 10^{0 + 1} } \right\rfloor \cdot 10  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a_{0}  =  \left\lfloor \frac{ 38 }{ 1 } \right\rfloor  -  \left\lfloor \frac{ 38 }{ 10 } \right\rfloor \cdot 10  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a_{0}  =  38  -  \left\lfloor 3,\!8 \right\rfloor \cdot 10  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a_{0}  =  38  -  30  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a_{0}  =  8  }'),
                    ))),

                    ))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Wir können diese Formel im Grunde auch zur Berechnung der Stellen von Superial-Zahlen benutzen, allerdings geht dies nur, wenn wir die Gaußklammer'."\n".
                      'etwas anders definieren.'."\n".
                      'Die neue Unendlichkeits-Gaußklammer \lm{ {\left\lfloor x \right\rfloor}_{\infty} } entfernt einfach sämtliche'."\n".
                      'aktual unendlich kleinen Summanden aus der Zahl \lm{ x }, egal, welcher Größenordnung unterhalb der endlichen Zahlen sie auch sein mögen.'."\n".
                      'Es gilt also beispielsweise \lm{ {\left\lfloor *〈 c *〉*〈 b *〉.*〈 z *〉 \right\rfloor}_{\infty} = *〈 c *〉*〈 b *〉.\; }.'."\n",
                      'So können wir jetzt äquivalent zu einer endlichen Basis auch für unsere superialen Basis definieren,'."\n".
                      'wie wir eine bestimmte Stelle des superialen Stellenwertsystems berechnen:'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.SW', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall i \in \mathbb{Z} *) *( \forall y \in \mathbb{S} *)  *[  a_{i}  =  {{\left\lfloor \frac{ y }{ \s^{i} } \right\rfloor}_{\infty}  -  \left\lfloor \frac{ y }{ \s^{i + 1} } \right\rfloor}_{\infty} \cdot \s  *]  }'),
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:SupNum:Formale-Entwicklung:Formalien:Stellenwertsystem:X',
                Title => '\small{Beispielrechnung …}',
                TitleVis => 'Beispielrechnung:', ParagraphList => array(

                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.SW', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  y  =  c \cdot \s + b + z \cdot \s^{-1}  =  *〈 c *〉*〈 b *〉.*〈 z *〉  }'),
                      array( display => 'on',  latex => '{  i  =  0  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a_{0}  =  {\left\lfloor \frac{ *〈 c *〉*〈 b *〉.*〈 z *〉 }{ \s^{0} } \right\rfloor}_{\infty}  -  {\left\lfloor \frac{ *〈 c *〉*〈 b *〉.*〈 z *〉 }{ \s^{1} } \right\rfloor}_{\infty} \cdot \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a_{0}  =  {\left\lfloor *〈 c *〉*〈 b *〉.*〈 z *〉 \right\rfloor}_{\infty}  -  {\left\lfloor *〈 c *〉.*〈 b *〉*〈 z *〉 \right\rfloor}_{\infty} \cdot \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a_{0}  =  *〈 c *〉*〈 b *〉.  -  *〈 c *〉. \cdot \; \s  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a_{0}  =  *〈 c *〉*〈 b *〉.  -  *〈 c *〉_{1}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a_{0}  =  b  }'),
                    ))),

                    ))),

                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'Was wir erreichen wollten.'."\n",
                        '\\\\'."\n".
                      ''))),

                  array( 'text', array( text => array(
                    'Den neue Unendlichkeits-Gaußklammer benötigen wir sodann auch dabei, die'."\n".
                    '\jump{OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen:Vortext:Perspektive-Stellenwertsystems-Superial-Zahlen}{sinnvollen Koeffizienten der Superial-Zahlen zu definieren}.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Intervall-Menge', text =>
                      
                'Intervall-Menge', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Eine etwas allgemeinere Definition der Intervall-Menge eines Intervalls\footnote{Internet: \\\\ Vgl. \cite{wiki:IntervallMathematik:2023}.} aus einer angeordneten Zahlenmenge:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Seien \lm{ \lbrack a, b \rbrack_\mathbb{T} }, \lm{ \lbrack a, b \lbrack_\mathbb{T} }, \lm{ \rbrack a, b \rbrack_\mathbb{T} }'."\n".
                      'und \lm{ \rbrack a, b \lbrack_\mathbb{T} } die Mengen der folgenden Intervalle von \lm{ a } bis \lm{ b } aus der Menge \lm{ \mathbb{T} }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.IM', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ a, b ]_\mathbb{T}  :=  *\{  x  ~\middle|~  *( \forall x \in \mathbb{T} *) *( a, b \in \mathbb{T} *) *[ a \leq x \leq b *]  *\}  }'),
                      array( display => 'on',  latex => '{  [ a, b [_\mathbb{T}  :=  *\{  x  ~\middle|~  *( \forall x \in \mathbb{T} *) *( a, b \in \mathbb{T} *) *[ a \leq x < b *]  *\}  }'),
                      array( display => 'on',  latex => '{  ] a, b ]_\mathbb{T}  :=  *\{  x  ~\middle|~  *( \forall x \in \mathbb{T} *) *( a, b \in \mathbb{T} *) *[ a < x \leq b *]  *\}  }'),
                      array( display => 'on',  latex => '{  ] a, b [_\mathbb{T}  :=  *\{  x  ~\middle|~  *( \forall x \in \mathbb{T} *) *( a, b \in \mathbb{T} *) *[ a < x < b *]  *\}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'so können wir flexibel Intervall-Mengen definieren.'."\n",
                        '\\\\'.
                      ''))),

                  array( 'text', array( text => array(
                    'Aufgrund der Komplexität der Superial-Zahlen ist es sehr hilfreich, wenn wir die Menge \lm{ \mathbb{T} } angeben können,'."\n".
                    'auf der die Intervall-Menge basieren soll.'."\n",
                      'Nun haben wir noch die Besonderheit, dass diese Intervall-Mengendefinition, nicht nur, aber im Besonderen auch,'."\n".
                    'für die Definition von Integralen eingesetzt wird.'."\n".
                    'In diesem Zusammenhang macht es Sinn, die Definition etwas allgemeiner zu fassen und die Verallgemeinerung auch im Zusammenhang'."\n".
                    'mit Summen zu definieren.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Seien \lm{ \lbrack b, a \rbrack_\mathbb{T} }, \lm{ \lbrack b, a \lbrack_\mathbb{T} }, \lm{ \rbrack b, a \rbrack_\mathbb{T} }'."\n".
                      'und \lm{ \rbrack b, a \lbrack_\mathbb{T} } die Mengen der folgenden Intervalle von \lm{ b } bis \lm{ a } aus der Menge \lm{ \mathbb{T} } definieren.'."\n".
                      'Dieses Mal sind \lm{ a } und \lm{ b } allerdings vertauscht, wobei immer noch \lm{ a < b } ist,'."\n".
                      'das Intervall also von einer größeren Zahl zu einer kleineren läuft, also quasi rückwärts.'."\n".
                      'Das macht für die Intervall-Menge, aber keinen Unterschied, weil in Mengen die Elemente nicht angeordnet sind,'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  [ b, a ]_\mathbb{T}  =  [ a, b ]_\mathbb{T}  }'),
                      array( display => 'on',  latex => '{  [ b, a [_\mathbb{T}  =  ] a, b ]_\mathbb{T}  }'),
                      array( display => 'on',  latex => '{  ] b, a ]_\mathbb{T}  =  [ a, b [_\mathbb{T}  }'),
                      array( display => 'on',  latex => '{  ] b, a [_\mathbb{T}  =  ] a, b [_\mathbb{T}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und so muss lediglich berücksichtigt werden, welche Elemente nicht in der Intervall-Mengen vorkommen sollen.'."\n",
                        '\\\\'.
                      ''))),

                  array( 'text', array( text => array(
                    'Etwas anders sieht dies für Summendefinitionen über Intervall-Mengen aus.'."\n".
                    ''))),
                  array( 'headline', array( headlineTag => 'h4', jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Summendefinition-ueber-Intervall-Mengen', text =>
                  'Summendefinition über Intervall-Mengen', subline =>
                    'Integrale als Summen')),
                  array( 'text', array( text => array(
                    'Denn, wenn der größere Wert zuerst kommt, dann summieren wir quasi Rückwärts – auch, wenn Mengen keine Ordnung haben –'."\n".
                    'und es negiert sich das Ergebnis.'."\n".
                    'Dies ist dann im Besonderen für die \jump{OM:SupNum:Ableitungen-Integrale:Integration}{Definitionen von Integralen} von Bedeutung.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      '\\\\'."\n".
                      'Seien \lm{ \lbrack b, a \rbrack_\mathbb{T} }, \lm{ \lbrack b, a \lbrack_\mathbb{T} }, \lm{ \rbrack b, a \rbrack_\mathbb{T} }'."\n".
                      'und \lm{ \rbrack b, a \lbrack_\mathbb{T} } die Mengen der folgenden Intervalle von \lm{ b } bis \lm{ a } aus der Menge \lm{ \mathbb{T} }'."\n".
                      'definiert, wie vorstehend.'."\n".
                      'Wieder sind \lm{ a } bis \lm{ b } vertauscht und wieder bleibt \lm{ a < b }.'."\n".
                      'Das Intervall also von einer größeren Zahl zu einer kleineren läuft, also wieder quasi rückwärts.'."\n".
                      'Dann macht das bei einer Summe schon einen Unterschied im Wert, denn rückwärts summieren entspricht dem Abziehen, also der Differenz,'."\n".
                      'anstatt der Summe'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.IM', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \sum_{ i \in [ b, a ]_\mathbb{T} } f(i)  =  - \sum_{ i \in [ a, b ]_\mathbb{T} } f(i)  }'),
                      array( display => 'on',  latex => '{  \sum_{ i \in [ b, a [_\mathbb{T} } f(i)  =  - \sum_{ i \in ] a, b ]_\mathbb{T} } f(i)  }'),
                      array( display => 'on',  latex => '{  \sum_{ i \in ] b, a ]_\mathbb{T} } f(i)  =  - \sum_{ i \in [ a, b [_\mathbb{T} } f(i)  }'),
                      array( display => 'on',  latex => '{  \sum_{ i \in ] b, a [_\mathbb{T} } f(i)  =  - \sum_{ i \in ] a, b [_\mathbb{T} } f(i)  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', intent => '0em', text => array(
                      'und so muss nicht nur berücksichtigt werden, welche Elemente nicht in der Intervall-Mengen vorkommen sollen,'."\n".
                      'sondern auch, dass sich bei einer Summe, deren Intervall-Menge mit dem größeren Element zuerst definiert ist,'."\n".
                      'das Vorzeichen umdreht.'."\n",
                        '\\\\'.
                      ''))),

                  array( 'text', array( text => array(
                    'Hierdurch ist die Summe mit ihrer Intervall-Menge tief verbunden.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen', text =>
                      
                'Skalierung der Schichten einer Teilmenge der Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'An einigen Stellen dieser Arbeit'."\n".
                    'benötigen wir die Skalierung der superialen Potenzebene einer Teilmenge \lm{ \mathbb{S}_T } der Superial-Zahlen \lm{ \mathbb{S} }:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.SS', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}^{y}_{T}  :=  *\{  a  *|*  *( \forall t \in \mathbb{S}_{T} *) *[ a = t \cdot \s^{y} *]  *\}  }',
                                          label_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen:Equ-Menge-superiale-Ebene-skalieren', label_text => '\name{OM:SupNum:Formale-Entwicklung:Formalien:Skalierung-Teilmenge-Superial-Zahlen:Equ-Menge-superiale-Ebene-skalieren}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Zum Beispiel ist es im Besonderen bei der \jump{OM:SupNum:Ableitungen-Integrale:Integration}{Integration}'."\n".
                    'notwendig die ganzen Superial-Zahlen \lm{ \mathbb{S}_Z } eine Potenzebene ins superial kleine zu skalieren:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.SS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \mathbb{S}^{-1}_{Z}  =  *\{  a  *|*  *( \forall z \in \mathbb{S}_{\Z} *) *[ a = z \cdot \s^{-1} *]  *\}  }',
                                          label_text => '\jumpname{OM:SupNum:Einleitung:Vortext:Equ-Menge-superial-kleine-ganze-Zahlen}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Hierdurch wird eine Menge erzeugt, die es ermöglicht, eine Summe zu definieren, in der superial kleine ganze Zahlen'."\n".
                    'durchgezählt werden, um superial kleine Flächen zu summieren, die das Integral ergeben.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Eingrenzung-Schichten-Superial-Zahlen', text =>
                      
                'Eingrenzung der Schichten der Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Bei der Eingrenzung der Schichten der Superial-Zahlen geht es darum, zum Beispiel eine Menge \lm{ \mathbb{S}_{X,\mathbb{T}} } von der existierenden Menge \lm{ \mathbb{S}_{X} } abzuleiten,'."\n".
                    'in der nur bestimmte Schichten mit den Indizes in \lm{ \mathbb{T} } mit Koeffizienten ungleich Null belegt sein können:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.ES', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{X,\mathbb{T}}  :=  *\{  u \in \mathbb{S}_{X}  *|*  *( \forall a_{i} \in \mathbb{A}_{\S} *)  *[  u  =  \! \sum_{ \forall i \in \mathbb{T} } \! a_{i} \s^{i}  *]  *\}  }',
                                          label_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Eingrenzung-Schichten-Superial-Zahlen:Equ-Menge-superiale-Ebene-eingrenzen', label_text => '\name{OM:SupNum:Formale-Entwicklung:Formalien:Eingrenzung-Schichten-Superial-Zahlen:Equ-Menge-superiale-Ebene-eingrenzen}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'In der Menge \lm{ \mathbb{S}_{\Z,\{ 1 \}} } beispielsweise, die auf den ganzen Superial-Zahlen \lm{ \mathbb{S}_{\Z} } beruht,'."\n".
                    'können dann nur die Koeffizienten der Schicht Eins ungleich Null sein:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Fo.F.ES', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{S}_{\Z,\{ 1 \}}  :=  *\{  u \in \mathbb{S}_{\Z}  *|*  *( \forall a_{i} \in \mathbb{A}_{\S} *)  *[  u  =  \! \sum_{ \forall i \in \{ 1 \} } \! a_{i} \s^{i}  *]  *\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier kann also nur die Schicht \lm{ a_{1} \cdot \s } ungleich Null sein.'."\n".
                    'Die Koeffizienten aller anderen Schichten sind Null.'."\n".
                    ''))),

                  array( 'headline', array( headlineTag => 'h3', horizontalLineBefore => true, jump_name => 'OM:SupNum:Formale-Entwicklung:Formalien:Aktual-Unendliche-Exponenten-der-Primzahlen-in-Superial-Zahlen', text =>
                      
                'Aktual-Unendliche Exponenten der Primzahlen in Superial-Zahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    '… siehe Einleitung, "Rationale Zahlen und ihre Primfaktorzerlegung"'."\n".
                    '… siehe Einleitung, "Die Veränderung der Primfaktorzerlegung von 𝑠 durch rationale Koeffizienten"'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Sinnvolle-Koeffizienten-Superial-Zahlen'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
