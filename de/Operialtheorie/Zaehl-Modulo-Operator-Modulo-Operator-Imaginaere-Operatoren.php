<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Modulo-Operatoren'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:OT:Konstanzoperator'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\\bold{Operator \\term{-2}}',
                    // '• Ändert grundsätzlich nichts.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Eine Frage, die für mich im Raum steht, ist,'."\n".
                    'ob auch imaginäre Zahlen als Operatoren eine sinnvolle Bedeutung haben oder haben können.'."\n".
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
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Konstanzoperator:Vortext:XXX', text =>
                                           
                'Was könnten die imaginären Operator sein?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Angenommen der nullte imaginäre Operator \\term{i + 0} ist folgendermaßen definiert, nach Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Absolut}:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a *o( x + 1 *o) b  :=  \underset{(\forall n \in \mathbb{N})[0 \le n < b]}{\huge{\circledcirc}} \;\; *o( x *o) a  }',
                                               /* label_name => 'OM:OT:Einleitung:Vortext:Equ-Operial-Absolut', */label_text => '\\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Absolut}', label_incr => false),
                      array( display => 'on',  latex => '{  \Rightarrow  \underset{(\forall n \in \mathbb{N})[0 \le n < b]}{\huge{\circledcirc}} \;\; *o( i *o) a  =  a *o( i + 1 *o) b  }'),
                      array( display => 'on',  latex => '{  *o( i *o) a  :=  1 \mod a  }'),
                      array( display => 'on',  latex => '{  *o( i *o) a *o( i *o) a  :=  2 \mod a  }'),
                      array( display => 'on',  latex => '{  *o( i *o) a *o( i *o) a *o( i *o) a  :=  3 \mod a  }'),
                      array( display => 'on',  latex => '{  \underset{(\forall n \in \mathbb{N})[0 \le n < b]}{\huge{\circledcirc}} \;\; *o( i *o) a  :=  b \mod a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a *o( i + 1 *o) b  =  b \mod a  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a *o( i + 1 *o) 0  =  0 \mod a  =  0  }'),
                      array( display => 'on',  latex => '{  c *o( i *o) a  :=  (c + 1) \mod a  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Am Beispiel der \\term{2} zeigen wir, dass die Formeln OT.ModO.6 und OT.ModO.8 plausibel zusammen passen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *o( i *o) 2 *o( i *o) 2 *o( i *o) 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( *o( i *o) 2 *) *o( i *o) 2 *) *o( i *o) 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( 1 \mod 2 *) *o( i *o) 2 *) *o( i *o) 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( 1 *o( i *o) 2 *) *o( i *o) 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( (1 + 1) \mod 2 *) *o( i *o) 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( 2 \mod 2 *) *o( i *o) 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  0 *o( i *o) 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  (0 + 1) \mod 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  1 \mod 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  1  =  1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Allgemein muss wegen Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv} und durch die Formeln OT.ModO.6 und OT.ModO.8 ausgedrückt gelten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a *o( i + 1 *o) b *) *o( i *o) a  :=  a *o( i + 1 *o) *( b + 1 *)  }'),
                      array( display => 'on',  latex => '{  c *o( i *o) a  :=  (c + 1) \mod a  }'),
                      array( display => 'on',  latex => '{  a *o( i + 1 *o) b  =  b \mod a  }'),
                      array( display => 'on',  latex => '{  c  =  a *o( i + 1 *o) *( b - 1 *)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  c  =  *( b - 1 *) \mod a  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( a *o( i + 1 *o) *( b - 1 *) *) *o( i *o) a  =  *( c + 1 *) \mod a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( a *o( i + 1 *o) *( b - 1 *) *) *o( i *o) a  =  *( *( *( b - 1 *) \mod a *) + 1 *) \mod a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a *o( i + 1 *o) b  =  *( *( *( b - 1 *) \mod a *) + 1 *) \mod a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  b \mod a  =  b \mod a  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Was zu zeigen war.'."\n",
                      'XXX Interessant ist nun auch noch die Funktion des Minus-Zwei-Operators.'."\n".
                    'Er muss zum Beispiel die folgende Formel erfüllen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( i *o) a *o( i *o) a  =  a *o( i + 1 *o) 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *o( -2 *o) a *) *o( -2 *o) a  =  a  }'),
                      array( display => 'on',  latex => '{  *o( -2 *o) a *o( -2 *o) a *o( -2 *o) a  =  a *o( -1 *o) 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( *o( -2 *o) a *) *o( -2 *o) a *) *o( -2 *o) a  =  a  }'),
                      array( display => 'on',  latex => '{  *( a *o( -1 *o) b *) *o( -2 *o) a  :=  a *o( -1 *o) *( b + 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Durch die Klammerung haben wir noch einmal deutlich gemacht, in welcher Reihenfolge die Operatoren abzuarbeiten sind.'."\n",
                      'Der Minus-Zwei-Operator, auf ein beliebiges \\term{a} angewandt, ändert an \\term{a} nie etwas;'."\n".
                    'weder als Vorzeichen, noch als Operator zwischen Zahlen.'."\n".
                    'Das bedeutet dann, wenn \\term{c} das Ergebnis aller vorherigen Operationen ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *o( -2 *o) a  =  a  }',
                                               label_name => 'OM:OT:Konstanzoperator:Vortext:Equ-Vorzeichen-Minus-Zwei-a', label_text => '\\name{OM:OT:Konstanzoperator:Vortext:Equ-Vorzeichen-Minus-Zwei-a}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  c *o( -2 *o) a  =  c  }',
                                               label_name => 'OM:OT:Konstanzoperator:Vortext:Equ-c-Minus-Zwei-a-ist-c', label_text => '\\name{OM:OT:Konstanzoperator:Vortext:Equ-c-Minus-Zwei-a-ist-c}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Ist der Minus-Zwei-Operator ist völlig neutral.'."\n".
                      'Damit sind alle noch kleineren Operatoren auch neutral.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Damit ähnelt er dem Minus-Eins-Operator, ist ihm aber nicht in jedem Fall gleich.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Konstanzoperator:Vortext:XXX', text =>
                                           
                'Der Beginn des Zählens', subline =>
                  'Wie kommen wir von den kleinen, neutralen Operatoren zum Zählen?')),
                  array( 'text', array( text => array(
                    'Wenn der Minus-Zwei-Operator und alle kleineren demnach nun völlig neutral sind, wie fängt das Zählen'."\n".
                    'dann an?'."\n",
                      'Von den kleinen, neutralen Operatoren her gedacht bleibt uns nichts anderes übrig, als einen von ihren'."\n".
                    'Vorzeichen als das erste Zählen zu definieren:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( -1 *o) a  :=  a + 1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Ohne diesen ersten Funken des Lichts, scheinbar aus dem Nichts, tut sich nichts!'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Konstanzoperator:Vortext:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Konstanzoperator:Neutrale-Elemente'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Neutrale Elemente  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:OT:Modulo-Operatoren:Neutrale-Elemente',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Konstanzoperator', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Verweis auf das Hauptkapitel zu neutralen Elementen …'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Neutrale-Elemente:XXX', text =>
                                           
                'Neutrale Elemente des Zähl-Modulo-Operators', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX Die links- und rechtsseitigen neutralen Elemente des Minus-Zwei-Operators weisen'."\n".
                    'noch andere Besonderheiten auf, die andere Operatoren nicht besitzen.'."\n".
                    'Das verleiht dem Minus-Zwei-Operator auch eine außergewöhnliche naturphilosophische Bedeutung,'."\n".
                    'aber eine etwas andere, als dem Null- oder dem Minus-Eins-Operator.'."\n",
                      'Da beim Minus-Zwei-Operator im Allgemeinen die Operanden nicht vertauschbar sind'."\n".
                    'unterscheidet sich das linksseitige neutrale Element der Operation vom rechtsseitigen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Linksseitig neutrales Element} \\\\'."\n".
                    'Um das linksseitig neutrale Element des Minus-Zwei-Operators zu bestimmen, setzen wir den Minus-Zwei-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-linksneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO.NE', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  {n_{links}} *o( -2 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Konstanzoperator:Vortext:Equ-c-Minus-Zwei-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  {n_{links}} *o( -2 *o) a  =  n_{links}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  n_{links}  =  a  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen, dass das linksseitig neutrale Element \\term{n_{links}} identisch mit'."\n".
                    'dem ursprünglichen Element \\term{a} ist, genau, wie beim Minus-Eins-Operator.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Rechtsseitig neutrales Element} \\\\'."\n".
                    'Um das rechtsseitig neutrale Element des Minus-Zwei-Operators zu bestimmen, setzen wir den Minus-Zwei-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-rechtsneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a *o( -2 *o) n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Konstanzoperator:Vortext:Equ-c-Minus-Zwei-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a *o( -2 *o) n_{rechts}  =  a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n_{rechts} *) *( \forall a \in \mathbb{R}  *) *[  a  =  a  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können erkennen, dass alle Elemente \\term{n_{rechts}} rechtsseitig neutrale Elemente des Minus-Zwei-Operators sind,'."\n".
                    'weil alle \\term{n_{rechts}} unser \\term{a} unverändert lassen, genau, wie beim Minus-Eins-Operator.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Einbettung in neutrale Elemente} \\\\'."\n".
                    'Die Einbettung der des Minus-Eins-Operators.'."\n",
                      'Halten wir also unser jetziges \\term{a} fest, dann sieht seine Einbettung in'."\n".
                    'neutrale Elemente wie folgt aus – \\term{*a*} mit Sternchen markiert, damit wir es besser finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall c_{1},c_{2},\cdots \in \mathbb{R} *) *[  a  =  \cdots \, *o( -2 *o) a *o( -2 *o) a \\\ \qquad\qquad\qquad\qquad\qquad\;\;\;\, *o( -2 *o) {*a*} \\\ \qquad\qquad\qquad\qquad\qquad\;\;\;\, *o( -2 *o) {c_{1}} *o( -2 *o) {c_{2}} *o( -2 *o) \cdots  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auf der rechten Seite von \\term{a} existiert immer das gleiche neutrales Element \\term{a}'."\n".
                    'und auf der linken Seite existieren beliebige neutrale Elemente, was auch sehr bemerkenswert ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Äquivalenter Vorgänger} \\\\'."\n".
                    'Der Minus-Zwei-Operator ist völlig neutral und wir haben daher auch kein Zählen.'."\n".
                    'Bezüglich des Vorzeichens gilt für den äquivalenten Vorgänger:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( -2 *o) a  =   v *o( -2 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formeln \\jumpname{OM:OT:Konstanzoperator:Vortext:Equ-Vorzeichen-Minus-Zwei-a} und \\jumpname{OM:OT:Konstanzoperator:Vortext:Equ-c-Minus-Zwei-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( -2 *o) a  =  a  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  c *o( -2 *o) a  =  c  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  v  =  a  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Hier ist es nicht einmal ein Unterschied, ob bei der Einbettung das Vorzeichen von \\term{a} mit erhalten werden soll oder nicht.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Beim Minus-Zwei-Operator herrscht aus naturphilosophisch zeitlicher Perspektive völlige Konstanz:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'italic', text => array(
                      'Wie beim Minus-Eins-Operator hat Gegenwart unserer Zahl \\term{a} eine Konstanz, in die sie vorne eingebettet ist, aus der sie folgt.'."\n".
                      'Eine Zukunft hat sie, in der alles Einfluss nehmen kann, dies aber ihre Konstanz nicht verändert.'."\n".
                      'Die Konstanz ihrer Zukunft wird durch den Prozess des Erhaltens, durch das Anhängen eines weiteren dieses Operators mit einem beliebigen Operanden,'."\n".
                      'in Form einer beliebigen Zahl, nicht verändert.'."\n",
                        'Als Vorzeichen, vor dem Nichts existiert, wird aus dem Nichts Konstanz kreiert.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'XXX Unser Minus-Zwei-Operator hat also ebenfalls eine bedeutende zeitliche Qualität durch sein Vorzeichen der Konstanz.'."\n",
                      'Interpretieren wir die Minus-Zwei-Operator-Einbettung naturphilosophisch und vergleichen sie, wie die anderen Einbettungen,'."\n".
                    'mit dem Vakuum der Physik, sehen wir, dass sie völlig neutral und die Konstanz erhaltend erscheint.'."\n".
                    'Denn das Hier-und-Jetzt unterscheidet sich von seiner Historie und in seiner Zukunft nicht.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Neutrale-Elemente:XXX', text =>
                                           
                'Neutrale Elemente des Modulo-Operators', subline =>
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
                    ''))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:OT:Einleitung:Eigenschaften'),
                    )),
                )
          ); ?>


    <?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
