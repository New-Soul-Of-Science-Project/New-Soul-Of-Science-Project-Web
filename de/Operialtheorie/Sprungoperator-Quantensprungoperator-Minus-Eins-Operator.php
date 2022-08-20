<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Sprungoperator'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:OT:Zaehloperator'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\\bold{Operator \\term{-1}}',
                    '• Nur als Vorzeichen zählt der einen hoch.',
                    '• Als Verbindungsoperator ändert er nichts.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Sprungoperator:Vortext:XXX', text =>
                                           
                'Was ist der Minus-Eins-Operator?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Interessant ist nun auch noch die Funktion des Minus-Eins-Operators.'."\n".
                    'Er muss zum Beispiel die folgenden Formeln erfüllen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( -1 *o) a *o( -1 *o) a  =  a *o( 0 *o) 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *o( -1 *o) a *) *o( -1 *o) a  =  a + 1  }'),
                      array( display => 'on',  latex => '{  *o( -1 *o) a *o( -1 *o) a *o( -1 *o) a  =  a *o( 0 *o) 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( *o( -1 *o) a *) *o( -1 *o) a *) *o( -1 *o) a  =  a + 1  }'),
                      array( display => 'on',  latex => '{  *( a *o( 0 *o) b *) *o( -1 *o) a  :=  a *o( 0 *o) *( b + 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Durch die Klammerung haben wir noch einmal deutlich gemacht, in welcher Reihenfolge die Operatoren abzuarbeiten sind.'."\n",
                      'Da zwei und drei Mal der Minus-Eins-Operator auf ein beliebiges \\term{a} angewandt wird und dies insgesamt \\term{a} immer genau um Eins'."\n".
                    'erhöhen soll, kann es nur so sein, dass der erste Operator als Vorzeichen das Ergebnis bestimmt.'."\n".
                    'Das bedeutet dann, wenn \\term{c} das Ergebnis aller vorherigen Operationen ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *o( -1 *o) a  =  *o( 0 *o) a  =  a + 1  }',
                                               label_name => 'OM:OT:Sprungoperator:Vortext:Equ-Vorzeichen-Minus-Eins-a', label_text => '\\name{OM:OT:Sprungoperator:Vortext:Equ-Vorzeichen-Minus-Eins-a}', label_incr => true),
                      array( display => 'on',  latex => '{  \Rightarrow  c *o( -1 *o) a  =  c  \neq  c *o( 0 *o) a  =  c + 1  }',
                                               label_name => 'OM:OT:Sprungoperator:Vortext:Equ-c-Minus-Eins-a-ist-c', label_text => '\\name{OM:OT:Sprungoperator:Vortext:Equ-c-Minus-Eins-a-ist-c}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen:'."\n",
                      'Ist der Minus-Eins-Operator ein Vorzeichen, dann erhöht er die nach ihm stehende Zahl, also die rechts stehende, um Eins.'."\n".
                    'Steht der Minus-Eins-Operator zwischen zwei Zahlen, dann ändert dies nichts am Ergebnis.'."\n".
                    'Die nachfolgende Zahl, die rechts stehende, hat darauf dann natürlich auch keinen Einfluss.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Der Minus-Eins-Operator ist nur als Vorzeichen ein Inkrement- oder Zähl-Operator.'."\n".
                      'Als Operator zwischen zwei Zahlen ist er neutral.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'Damit ähnelt er dem Null-Operator, ist ihm aber nicht in jedem Fall gleich.'."\n".
                    'Auf die philosophische und auch physikalische Bedeutung, kommen wir im weiteren Verlauf'."\n".
                    'noch zu sprechen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Sprungoperator:Vortext:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                    
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:OT:Sprungoperator:Neutrale-Elemente'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Neutrale Elemente  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:OT:Sprungoperator:Neutrale-Elemente',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Sprungoperator', type => 'back'),
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
                                           
                'Neutrale Elemente des Minus-Eins-Operators', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die links- und rechtsseitigen neutralen Elemente des Minus-Eins-Operators weisen'."\n".
                    'auch Besonderheiten auf, die andere Operatoren nicht besitzen.'."\n".
                    'Das verleiht dem Minus-Eins-Operator auch eine außergewöhnliche naturphilosophische Bedeutung,'."\n".
                    'aber eine etwas andere, als dem Null-Operator.'."\n",
                      'Da beim Minus-Eins-Operator im Allgemeinen die Operanden nicht vertauschbar sind'."\n".
                    'unterscheidet sich das linksseitige neutrale Element der Operation vom rechtsseitigen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Linksseitig neutrales Element} \\\\'."\n".
                    'Um das linksseitig neutrale Element des Minus-Eins-Operators zu bestimmen, setzen wir den Minus-Eins-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-linksneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  {n_{links}} *o( -1 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Sprungoperator:Vortext:Equ-c-Minus-Eins-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  {n_{links}} *o( -1 *o) a  =  n_{links}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  n_{links}  =  a  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir sehen, dass das linksseitig neutrale Element \\term{n_{links}} identisch mit dem ursprünglichen Element \\term{a} ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Rechtsseitig neutrales Element} \\\\'."\n".
                    'Um das rechtsseitig neutrale Element des Minus-Eins-Operators zu bestimmen, setzen wir den Minus-Eins-Operator'."\n".
                    'in den Formalismus \\jumpname{OM:OT:Einleitung:Neutrale-Elemente:Equ-x-rechtsneutrales-Element} ein:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  a  =  a *o( -1 *o) n_{rechts}  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formel \\jumpname{OM:OT:Sprungoperator:Vortext:Equ-c-Minus-Eins-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall n_{rechts} \in \mathbb{R} *) *[  a *o( -1 *o) n_{rechts}  =  a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall n_{rechts} \in \mathbb{R} *) *[  a  =  a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'dies gilt also für'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \forall n_{rechts} \in \mathbb{R}  \;\;  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wir können erkennen, dass alle Elemente \\term{n_{rechts}} rechtsseitig neutrale Elemente des Minus-Eins-Operators sind,'."\n".
                    'weil alle \\term{n_{rechts}} unser \\term{a} unverändert lassen.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Einbettung in neutrale Elemente} \\\\'."\n".
                    'Halten wir also unser jetziges \\term{a} fest, dann sieht seine Einbettung in'."\n".
                    'neutrale Elemente wie folgt aus – \\term{*a*} mit Sternchen markiert, damit wir es besser finden:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall c_{1},c_{2},\cdots \in \mathbb{R} *) *[  a  =  \cdots \, *o( -1 *o) a *o( -1 *o) a \\\ \qquad\qquad\qquad\qquad\qquad\;\;\;\, *o( -1 *o) {*a*} \\\ \qquad\qquad\qquad\qquad\qquad\;\;\;\, *o( -1 *o) {c_{1}} *o( -1 *o) {c_{2}} *o( -1 *o) \cdots  *]  }',
                                               label_name => 'OM:OT:Sprungoperator:Neutrale-Elemente:Equ-Minus-Eins-Einbettung', label_text => '\\name{OM:OT:Sprungoperator:Neutrale-Elemente:Equ-Minus-Eins-Einbettung}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    'Auf der rechten Seite von \\term{a} existiert immer das gleiche neutrales Element \\term{a}'."\n".
                    'und auf der linken Seite existieren beliebige neutrale Elemente, was auch sehr bemerkenswert ist.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Äquivalenter Vorgänger} \\\\'."\n".
                    'Auch im Minus-Eins-Operator haben wir das Zählen, aber nur im Vorzeichen.'."\n".
                    'Bezüglich des Vorzeichens gilt für den äquivalenten Vorgänger:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( -1 *o) a  =   v *o( -1 *o) a  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wegen – Formeln \\jumpname{OM:OT:Sprungoperator:Vortext:Equ-Vorzeichen-Minus-Eins-a} und \\jumpname{OM:OT:Sprungoperator:Vortext:Equ-c-Minus-Eins-a-ist-c} –'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  *o( -1 *o) a  =  a + 1  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  c *o( -1 *o) a  =  c  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'folgt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *[  v  =   a + 1  *]  .  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Es ist also ein Unterschied, ob bei der Einbettung die Veränderung durch das Vorzeichen von \\term{a} mit erhalten werden soll oder nicht.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\\condb{Naturphilosophische Interpretation} \\\\'."\n".
                    'Betrachten wir das Zählen mit dem Minus-Eins-Operator naturphilosophisch aus einer zeitlichen Perspektive,'."\n".
                    'dann können wir unser festgehaltenes oder festgelegtes \\term{a} auch als die direkt vor uns liegende Vergangenheit verstehen:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'italic', text => array(
                      'Existiert in der Gegenwart auf den zeitlichen Schritt vorher \\term{a} noch nichts, dann erzeugt der'."\n".
                      'an das Nicht-Existente angehängte \\term{a} den nächsten Schritt \\term{a + 1}.'."\n".
                      'Nimmt dann im selben, nun existierenden Schritt noch ein beliebiger Operand mit dem Operator Minus-Eins Einfluss,'."\n".
                      'so ändert sich nichts weiter, bis der nächste, noch nicht existierende Schritt erreicht ist.'."\n".
                    ''))),
                      
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall c_1,c_2,\cdots *) *[  a *o( -1 *o) c_1 *o( -1 *o) c_2 *o( -1 *o) \cdots  =  a  *]  }'),
                      //                         /* label_name => 'OM:OT:Sprungoperator:Neutrale-Elemente:Equ-Minus-Eins-Einbettung', */label_text => '\\jumpname{OM:OT:Sprungoperator:Neutrale-Elemente:Equ-Minus-Eins-Einbettung}', label_incr => false),
                    ))),

                  array( 'text', array( text => array(
                    'Denn:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'italic', text => array(
                      'Nur als Vorzeichen vor dem Nichts existiert, wird aus dem Nichts die eigene Veränderung von \\term{a} kreiert.'."\n".
                      'Die Vergangenheit oder Historie \\term{a} kreiert also seine noch nicht existierende Zukunft zu \\term{a + 1}.'."\n".
                    ''))),
                      
                  array( 'equations',
                    array( equ_text_std => 'OT.SpruO.NE', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a \in \mathbb{R}  *) *( \forall c_1,c_2,\cdots *) *[  *o( -1 *o) a *o( -1 *o) c_1 *o( -1 *o) c_2 *o( -1 *o) \cdots  =  a + 1  *]  }'),
                      //                         /* label_name => 'OM:OT:Sprungoperator:Vortext:Equ-Vorzeichen-Minus-Eins-a', */label_text => '\\jumpname{OM:OT:Sprungoperator:Vortext:Equ-Vorzeichen-Minus-Eins-a}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    'Unser Minus-Eins-Operator hat also ebenfalls eine bedeutende zeitliche Qualität durch sein Vorzeichen des Zählens.'."\n",
                      'Interpretieren wir den Minus-Eins-Operator naturphilosophisch und vergleichen ihn'."\n".
                    'mit dem Vakuum der Physik, sehen wir, dass er im Hier-und-Jetzt völlig neutral wirkt.'."\n".
                    'Aber in seine gerade noch nicht existierende Zukunft wirkt, mit seiner Hilfe, das ehemalige Hier-und-Jetzt kreierend.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Konstanzoperator'),
                    )),
                )
          ); ?>

          			
    <?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
