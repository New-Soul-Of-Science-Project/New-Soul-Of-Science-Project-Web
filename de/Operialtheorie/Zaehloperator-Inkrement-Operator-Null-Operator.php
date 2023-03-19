<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Zaehloperator'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:OT:Einleitung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{Zähloperator \\term{0}}',
                    '• Linksneutrales Element:',
                    '– Ist immer einen kleiner:',
                    '⋅ Kann gedeutet werden als, dass es immer vom Kleineren hierher gekommen ist! Dass dies immer möglich ist.',
                    '• Rechtsneutrales Element:',
                    '- Existiert nicht:',
                    '⋅ Kann gedeutet werden als, dass das Zählen oder die Zeit immer weiter gehen muss. Sie kann nicht anhalten!',
                    '• Philosophische und physikalische Bedeutung:',
                    '– Das Zählen entspricht dem immerwährenden Fortschritt der Zeit. Das Immerwährende können wir daran erkennen, dass in der Operialtheorie kein rechtsneutrales Element existiert.',
                    '–o Die Konstanz des Zählens erkennen wir daran, dass der Wert der rechts stehenden Zahl keinen Einfluss auf das Zählen hat, sondern nur ihre Existenz. Der Null-Operator kann folglich zur Überprüfung der Existenz einer Zahl genutzt werden.',
                    '⋅o a *o( 0 *o) b = a + 1  ⇒  ∃ b',
                    '– Das Nachzeichen ist physikalisch wie eine Hülle, die erst einmal neutral ist:',
                    '⋅ Hängen sich dort rechte Operanden rein, dann passiert etwas und die neue Hülle verschiebt sich nach rechts hinter den neuen Operanden.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Der Null-Operator ist der Zähloperator oder Inkrement-Operator, wie wir gleich aus der Addition herleiten werden.'."\n".
                    'Dann die Addition zählt, wie oft gezählt wird.'."\n",
                      'Daher kommt es auch, dass der Zähloperator, wie ich ihn ab jetzt nennen möchte,'."\n".
                    'die Null zugeordnet bekommen hat, also der Null-Operator ist.'."\n".
                    'Denn in der Operial-Theoorie wird vom höheren Operator \\italic{gezählt}, wie häufig der Einen'."\n".
                    'niedrigere Operator verkettet angewandt wird.'."\n".
                    'Das Zählen stellt also den Zusammenhang innerhalb der Operatoren-Hierarchie her'."\n".
                    'und ist gleichzeitig selber einer der hierarchischen Operatoren.'."\n",
                      'Wir haben es also in der Operatoren-Hierarchie mit einer Selbstbezüglickeit zu tun.'."\n".
                    'Es handelt sich um eine selbstbezügliche und selbstähnliche, also um eine in sich rückgekoppelte, fraktale Struktur.'."\n".
                    'Hier sehen wir eine große Strukturähnlichkeit mit der Physik der \\jump{OM:FrQFT:Home}{›fraktalen Quanten-Fluss-Theorie‹}.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:OT:Zaehloperator:Vortext:XXX', text =>
                                           
                'Herleitung des Zähloperators aus der Addition', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Interessant ist nun die Funktion des Null-Operators.'."\n".
                    'Er muss zum Beispiel die folgende Formel erfüllen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( 0 *o) a *o( 0 *o) a *o( 0 *o) a  =  a *o( 1 *o) 3  =  a + 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( *o( 0 *o) a *) *o( 0 *o) a *) *o( 0 *o) a  =  a + 3  }'),
                      array( display => 'on',  latex => '{  *( a *o( 1 *o) b *) *o( 0 *o) a  :=  a *o( 1 *o) *( b + 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Durch die Klammerung haben wir noch einmal deutlich gemacht, in welcher Reihenfolge die Operatoren abzuarbeiten sind.'."\n",
                      'Da drei Mal der Null-Operator auf ein beliebiges \\term{a} angewandt wird und dies insgesamt \\term{a} um Drei'."\n".
                    'erhöhen soll, kann es nur so sein, dass jeder Operator das Ergebnis um Eins erhöht.'."\n".
                    'Das bedeutet dann, wenn \\term{c} das Ergebnis aller vorherigen Operationen ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *o( 0 *o) a  =  a *o( 1 *o) 1  =  a + 1  }',
                                               label_name => 'OM:OT:Zaehloperator:Vortext:Equ-Vorzeichen-Null-OP-ist-plus-Eins', label_text => '\\name{OM:OT:Zaehloperator:Vortext:Equ-Vorzeichen-Null-OP-ist-plus-Eins}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  c *o( 0 *o) a  =  c *o( 1 *o) 1  =  c + 1  }',
                                               label_name => 'OM:OT:Zaehloperator:Vortext:Equ-Null-OP-ist-plus-Eins', label_text => '\\name{OM:OT:Zaehloperator:Vortext:Equ-Null-OP-ist-plus-Eins}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n",
                      'Ist der Null-Operator ein Vorzeichen, dann erhöht er die nach ihm stehende Zahl, also die rechts stehende, um Eins.'."\n".
                    'Steht der Null-Operator zwischen zwei Zahlen, dann erhöht er die vor ihm stehende Zahl, also die links stehende, um Eins.'."\n".
                    'Die nachfolgende Zahl, die rechts stehende, hat darauf keinen Einfluss.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Der Null-Operator ist ein Inkrement- oder Zähl-Operator.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Das Zählen ist in der Arithmetik, ja in der ganzen Mathematik, von zentraler Bedeutung.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, im Rahmen der Zeit, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n",
                      'So lässt sich Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv} konsequenterweise nun wie folgt darstellen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a*o( *o( 0 *o)x *o)b *)*o( x *o)a  :=  a*o( *o( 0 *o)x *o)*( *o( 0 *o)b *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die rekursive Definition des Zusammenhangs zwischen den Operatoren kann jetzt also auch ausschließlich'."\n".
                    'durch die neuen Operatoren formuliert werden.'."\n".
                    ''))),
                    
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:OT:Zaehloperator:Neutrale-Elemente'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Neutrale Elemente  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:OT:Zaehloperator:Neutrale-Elemente',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Zaehloperator', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Verweis auf das Hauptkapitel zu neutralen Elementen …'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Zaehloperator:Neutrale-Elemente:Null-Operator', text =>
                                           
                'Neutrale Elemente des Null-Operators', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die links- und rechtsseitigen neutralen Elemente des Null-Operators weisen'."\n".
                    'Besonderheiten auf, die andere Operatoren nicht besitzen.'."\n".
                    'Das verleiht dem Null-Operator auch eine außergewöhnliche naturphilosophische Bedeutung.'."\n",
                      'Da beim Null-Operator im Allgemeinen die Operanden nicht vertauschbar sind'."\n".
                    'unterscheidet sich das linksseitige neutrale Element der Operation vom rechtsseitigen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Linksseitig neutrales Element} \\\\'."\n".
                    'Um das linksseitig neutrale Element des Null-Operators zu bestimmen, setzen wir den Null-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-linksneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  {n_{links}} *o( 0 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Zaehloperator:Vortext:Equ-Null-OP-ist-plus-Eins} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  {n_{links}} *o( 0 *o) a  =  n_{links} + 1  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  n_{links} + 1  *]  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{links}  =  a - 1  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'mit \\term{n_{links}} in Abhängigkeit von \\term{a}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall a \in \mathbb{R}  *) *[  n_{links}(a)  =  a - 1  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die linksseitig neutralen Elemente \\term{n_{links}(a)} des Null-Operators sind von \\term{a} abhängig'."\n".
                    'und unterscheiden sich so voneinander.'."\n",
                      'Wir sehen, dass das linksseitig neutrale Element aus dem Zählen geboren ist und'."\n".
                    'immer den Vorgänger unserer Zahl \\term{a} darstellt.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Rechtsseitig neutrales Element} \\\\'."\n".
                    'Um das rechtsseitig neutrale Element des Null-Operators zu bestimmen, setzen wir den Null-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-rechtsneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a *o( 0 *o) n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Zaehloperator:Vortext:Equ-Null-OP-ist-plus-Eins} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( 0 *o) n_{rechts}  =  a + 1  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a + 1  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \nexists n_{rechts} *) *( \forall a \in \mathbb{R}  *) *[  a  =  a + 1  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können erkennen, dass es kein rechtsseitig neutrales Element des Null-Operators gibt.'."\n".
                    'Es existiert nicht, weil jede Zahl \\term{n_{rechts}} unser \\term{a} um einen hoch zählt.'."\n".
                    'Es gibt keine Zahl \\term{n_{rechts}}, die unser \\term{a} nicht verändert.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Einbettung in neutrale Elemente} \\\\'."\n".
                    'Halten wir also unser jetziges \\term{a} fest, dann sieht seine Einbettung in'."\n".
                    'neutrale Elemente wie folgt aus – \\term{*a*} mit Sternchen markiert, damit wir es besser finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  \cdots *( a - 3 *) *o( 0 *o) *( a - 2 *) *o( 0 *o) *( a - 1 *) *o( 0 *o) {*a*}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auf der rechten Seite von \\term{a} existiert kein neutrales Element und daher auch keine Einbettung,'."\n".
                    'was sehr bemerkenswert ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Perspektive der Logik} \\\\'."\n".
                    'Interessanterweise können wir, dazu passend, bei kluger, weil plausibler, Definition der Operatoren als Nachzeichen,'."\n".
                    'mit dem Null-Operator dann auch überprüfen, ob eine Zahl \\term{q} existiert.\\footnote{Nachfolgende Definition und Herleitungen mit Raimund Welsch erschaffen.}'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Für alle Operatoren \\term{x} soll gelten, dass der dem Operator als Nachzeichen'."\n".
                    'virtuell folgende Operand dem rechtsneutralen Element \\term{n_{x,rechts}} des Operators entspricht.'."\n".
                    'Sollte es kein rechtsneutrales Element geben, wie beim Null-Operator, dann ist dieser Operand \\term{n_{x,rechts}} eben nicht existent:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Wir definieren'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall x \in \mathbb{Z}  *) *( \forall a, n_{x,rechts} \in \mathbb{R}  *) *[  a *o( x *o)  :=  a *o( x *o) n_{x,rechts}  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall x \in \mathbb{Z}  *) *( \forall a \in \mathbb{R}  *) *[  a *o( x *o)  :=  a  *]  ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'dann gilt insbesondere'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( 0 *o)  =  a  *]  .  }',
                                               label_name => 'OM:OT:Zaehloperator:Neutrale-Elemente:Equ-Nachzeichen-Null-OP', label_text => '\\name{OM:OT:Zaehloperator:Neutrale-Elemente:Equ-Nachzeichen-Null-OP}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Für'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \nexists q \in \mathbb{R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'muss wegen \\jumpname{OM:OT:Zaehloperator:Neutrale-Elemente:Equ-Nachzeichen-Null-OP} gelten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( 0 *o) q  =  a  *]  .  }',
                                               label_name => 'OM:OT:Zaehloperator:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert-nicht', label_text => '\\name{OM:OT:Zaehloperator:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert-nicht}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Umgekehrt folgt aus \\jumpname{OM:OT:Zaehloperator:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert-nicht} die Nicht-Existenz von \\term{q}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \nexists q \in \mathbb{R}  \;\;  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Für'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists q \in \mathbb{R} *) *( \forall q \in \mathbb{R} *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'muss wegen \\jumpname{OM:OT:Zaehloperator:Vortext:Equ-Null-OP-ist-plus-Eins} gelten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( 0 *o) q  =  a + 1  *]  .  }',
                                               label_name => 'OM:OT:Zaehloperator:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert', label_text => '\\name{OM:OT:Zaehloperator:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Umgekehrt folgt aus \\jumpname{OM:OT:Zaehloperator:Neutrale-Elemente:Equ-Null-OP-rechts-Operand-existiert} die Existenz von \\term{q} und das alle möglich sind:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \exists q \in \mathbb{R} *) *( \forall q \in \mathbb{R} *)  \;\;  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Dies gilt so allgemein für alle \\term{q}, weil es nicht darauf ankommt, was \\term{q} ist,'."\n".
                    'sondern es kommt nur darauf an, ob es existiert.'."\n",
                      'Wir können mit Hilfe unseres Null-Operators also allgemeine Aussagen über die logische Existenz einer Zahl machen,'."\n".
                    'ganz unabhängig davon, welche es ist.'."\n".
                    'Wir spannen also damit auch einen Raum aller Möglichkeiten auf.'."\n".
                    'Auch deshalb ist unser Null-Operator wirklich etwas ganz besonderes.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Äquivalenter Vorgänger} \\\\'."\n".
                    'Im Null-Operator haben wir das Zählen im Vorzeichen und im angehängten Operator mit beliebigem Operanden.'."\n".
                    'Bezüglich des Vorzeichens gilt für den äquivalenten Vorgänger:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( 0 *o) a  =   v *o( 0 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formeln \\jumpname{OM:OT:Zaehloperator:Vortext:Equ-Vorzeichen-Null-OP-ist-plus-Eins} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( 0 *o) a  =  a + 1  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  c *o( 0 *o) a  =  c + 1  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Zähl.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  v  =   a  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Es ist also ein Unterschied, ob bei der Einbettung die Veränderung durch das Vorzeichen von \\term{a} mit erhalten werden soll oder nicht.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Betrachten wir das Zählen mit dem Null-Operator naturphilosophisch aus einer zeitlichen Perspektive,'."\n".
                    'dann können wir unser festgehaltenes oder festgelegtes \\term{a} als die Gegenwart verstehen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Diese Gegenwart unserer Zahl \\term{a} hat eine Historie in die sie eingebettet ist, aus der sie folgt.'."\n".
                      'Aber sie hat noch keine Zukunft.'."\n".
                      'Ihre Zukunft wird erst durch den Prozess des Zählens, durch das Anhängen eines weiteren Zähloperators'."\n".
                      'mit einer beliebigen Zahl, einer beliebigen Existenz, erschaffen.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Unser Null-Operator hat also bedeutende zeitliche Qualitäten.'."\n",
                      'Interpretieren wir die Null-Operator-Einbettung naturphilosophisch und vergleichen sie, wie die anderen Einbettungen,'."\n".
                    'mit dem Vakuum der Physik, sehen wir, dass sie nicht(!) neutral erscheint.'."\n".
                    'Denn das Hier-und-Jetzt unterscheidet sich von seiner Historie dadurch, dass seine Zukunft noch nicht existiert.'."\n".
                    ''))),

                  array( 'text', array( Shape => 'italic', text => array(
                      'Die Welt ist eine Erzählung und sozusagen eine historisch geschichtete Geschichte.\\footnote{Mit Raimund Welsch erschaffen.}'."\n".
                    ''))),

                  array( 'text', array( text => array(
                    'Wir können auch sagen:'."\n".
                    ''))),

                  array( 'text', array( Shape => 'italic', text => array(
                      'In jeder Zahl steckt eine Historie.\\footnote{Von Raimund Welsch.}'."\n",
                        'Die Historie ist ein Pfad und sie entspricht der Seele.\\footnote{Von Raimund Welsch.}'."\n".
                    ''))),

                  array( 'text', array( text => array(
                    'Das sind tiefe naturphilosophische Einsichten.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                  '\\condb{Sprachgebrauch} \\\\'."\n".
                    'Wir finden das auch in unserem Sprachgebrauch:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                      'Nur Dinge, die es gibt, die relevant sind, die einen Unterschied machen, zählen.'."\n",
                        'Dinge, die zählen, sind relevant, machen einen Unterschied, gibt es.\\footnote{Mit Raimund Welsch erschaffen.}'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Die Weisheit in unserer Sprache ist zuweilen erstaunlich.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Sprungoperator'),
                    )),
                )
          ); ?>

          			
    <?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
