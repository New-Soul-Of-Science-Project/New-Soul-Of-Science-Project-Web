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
                    'ob auch imaginäre Zahlen als Operatoren eine sinnvolle Bedeutung haben oder haben können.'."\n",
                      'In mir kam das Gefühl auf, dass es mir aufgrund meiner langjährigen umfangreichen und tief gehenden Beschäftigung'."\n".
                    'mit den Operatoren sowie mit den Themen Zählen und Zeit, sowohl aus \\jump{OM:FrQFT:FirstPrinciples}{theoretischer} als ebenso aus'."\n".
                    '\\jump{OM:NPT:Home}{naturphilosophischer Sicht}, möglich sein könnte, auf diese Frage nun eine Antwort zu finden.'."\n".
                    'Oder zumindest fundierte Vermutungen dazu anzustellen.'."\n",
                      'Nach einiger Überlegung war klar, dass meine Intuition auf einen Zusammenhang mit dem \\jump{OM:FrQFT:FirstPrinciples}{Djet-Neheh-Dualismus}'."\n".
                    'hinwies.'."\n".
                    'In ihm finden wir ein dualistisch orthogonales, dynamisches Naturprinzip, dass uns im Grunde überall begegnet, egal ob'."\n".
                    'Mathematik, Physik, Biologie, Medizin/Heilkunde und so weiter.'."\n".
                    'Seine beiden orthogonalen, zeitähnlichen Struktur-Aspekte sind ihre historische Gradlinigkeit und ihre Wiederholung.'."\n".
                    'In Bezug auf die Arithmetik\\footnote{\\const{NSOSP_g_footnote_text_Arithmetik}} steckt ihre Gradlinigkeit im immerwährenden Zählen, während ihre Wiederholung'."\n".
                    'in der Teilbarkeit in beliebig große gleiche Teile und dem übrig bleibenden Rest als eine Art von Schwingung zu erkennen ist.'."\n",
                      'In Bezug auf das Zählen, als die Basis aller hier betrachteten Operatoren, erschien mir eine'."\n".
                    'Helixspiralform allerdings als nicht ganz passend.'."\n".
                    'So kam mir nach einiger Zeit die Eingebung, es könnte sich um eine Form des Modulo-Operators handeln.'."\n".
                    'Wie ich im Folgenden darlegen werde, erscheint dies als sehr plausibel.'."\n",
                      'Demnach haben wir es in der zu den ganzen Zahlen parallelen, imaginären Operator-Hierarchie mit dem neuen Zähl-Modulo-Operator'."\n".
                    'in der nullten Hierarchieebene, parallel zum Zähloperator, und mit dem echten Modulo-Operator'."\n".
                    'in der ersten Hierarchieebene, parallel zur Addition, zu tun.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Modulo-Operatoren:Vortext:XXX', text =>
                                           
                'Die imaginären Operatoren \\term{i} und \\term{i + 1} als Modulo-Operatoren', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Angenommen der nullte imaginäre Operator \\term{i}, also quasi \\term{i + 0}, sei'."\n".
                    'folgendermaßen definiert:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Sei wegen Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Absolut}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a *o( x + 1 *o) b  :=  \underset{ (\forall n \in \mathbb{N})[0 \le n < b] }{ \huge{\circledcirc} } \;\; *o( x *o) a  }',
                                               /* label_name => 'OM:OT:Einleitung:Vortext:Equ-Operial-Absolut', */label_text => '\\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Absolut}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'hier im Speziellen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \underset{ (\forall n \in \mathbb{N})[0 \le n < b] }{ \huge{\circledcirc} } \;\; *o( i *o) a  =  a *o( i + 1 *o) b  }',
                                               label_name => 'OM:OT:Modulo-Operatoren:Vortext:Equ-Operial-i-Absolut', label_text => '\\name{OM:OT:Modulo-Operatoren:Vortext:Equ-Operial-i-Absolut}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'und das beispielhaft verdeutlichte, neu eingeführte Modulo-Zählen'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( i *o) a  :=  (0 + 1) \mod a  }',
                                               label_name => 'OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen-Beispiel-1', label_text => '\\name{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen-Beispiel-1}', label_incr => true),
                      array( display => 'on',  latex => '{  *( *o( i *o) a *) *o( i *o) a  :=  (1 + 1) \mod a  }'),
                      array( display => 'on',  latex => '{  *( *( *o( i *o) a *) *o( i *o) a *) *o( i *o) a  :=  (2 + 1) \mod a  }',
                                               label_name => 'OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen-Beispiel-3', label_text => '\\name{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen-Beispiel-3}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wird mit der niederen Verkettung nach Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-niedere-Verkettung} folgendermaßen'."\n",
                      'verallgemeinert definiert'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \underset{ (\forall n \in \mathbb{N})[0 \le n < b] }{ \huge{\circledcirc} } \;\; *o( i *o) a  :=  b \mod a  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'dann können wir nach Formel \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Operial-i-Absolut} auch sagen, dass'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  a *o( i + 1 *o) b  =  b \mod a  }',
                                               label_name => 'OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo', label_text => '\\name{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'und nebenbei erwähnt im Besonderen mit – wie in der Gruppen-'."\n",
                      'oder Ringtheorie –\\color{*Bearb}{(Verweis)}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  0 *o( i + 1 *o) b  =  b \mod 0  =  b  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'gilt.'."\n".
                      'Für das Modulo-Zählen gehen wir, durch Verallgemeinerung der Beispiele'."\n",
                      'der Formeln \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen-Beispiel-1} bis'."\n".
                      '\\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen-Beispiel-3}, von der Definition'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c *o( i *o) a  :=  (c + 1) \mod a  }',
                                               label_name => 'OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen', label_text => '\\name{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen}', label_incr => true),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'aus, die sich mit dem vorhergehenden plausibel zusammenfügen soll,'."\n",
                      'wie im folgenden zu zeigen ist.'."\n".
                      '\\\\ \\\\'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Am Beispiel der Formel \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen-Beispiel-3},'."\n".
                    'mit \\term{a = 2}, zeigen wir, dass die Formeln \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo}'."\n".
                    'und \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen} plausibel zusammen passen'."\n".
                    'und bekommen auf diese Weise ein Gefühl dafür, wie das funktioniert:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Durch Einsetzen von \\term{2} für \\term{a} in die Formel \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen-Beispiel-3} erhalten wir'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( *( *o( i *o) 2 *) *o( i *o) 2 *) *o( i *o) 2  =  3 \mod 2  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'in der durch Klammersetzung die niedere Verkettung verdeutlicht ist.'."\n".
                      'Durch'."\n",
                      'Anwendung des Modulo-Zählens aus Formel \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen-Beispiel-1}'."\n".
                      'kommen wir zu'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( *( 1 \mod 2 *) *o( i *o) 2 *) *o( i *o) 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( 1 *o( i *o) 2 *) *o( i *o) 2  =  3 \mod 2  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'und durch Anwendung des Modulo-Zählens aus Formel \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen} zu'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( (1 + 1) \mod 2 *) *o( i *o) 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( 2 \mod 2 *) *o( i *o) 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  0 *o( i *o) 2  =  3 \mod 2  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'und durch deren abermalige Anwendung abschließend weiter zu'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  (0 + 1) \mod 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  1 \mod 2  =  3 \mod 2  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  1  =  1  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'was am Beispiel zu zeigen war.'."\n".
                      '\\\\ \\\\'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Im Allgemein muss wegen Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv} und durch die Formeln \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo}'."\n".
                    'und \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen} ausgedrückt gelten:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Nehmen wir Formel \\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a *o( x + 1 *o) b *) *o( x *o) a  :=  a *o( x + 1 *o) *( b + 1 *)  \;\; ,  }',
                                               /* label_name => 'OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv', */label_text => '\\jumpname{OM:OT:Einleitung:Vortext:Equ-Operial-Rekursiv}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'setzen für \term{x} den Operator \\term{i} ein'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a *o( i + 1 *o) b *) *o( i *o) a  :=  a *o( i + 1 *o) *( b + 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'und ziehen auf beiden Seiten von \\term{b} Einen ab'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  *( a *o( i + 1 *o) *( b - 1 *) *) *o( i *o) a  =  a *o( i + 1 *o) b  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'dann können wir den ersten Teil des linken Terms mit \\term{c} substituieren'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c  =  a *o( i + 1 *o) *( b - 1 *)  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  c *o( i *o) a  =  a *o( i + 1 *o) b  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'deren rechte Seite nach Formel \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo} gleich dem Modulo ist:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  c *o( i *o) a  =  b \mod a  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'Es gilt aber auch Formel \\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen}'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c *o( i *o) a  :=  (c + 1) \mod a  \;\; ,  }',
                                               /* label_name => 'OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen', */label_text => '\\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'deren linke Seite nun durch den gerade gefundenen Modulo ersetz werden kann'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  b \mod a  =  (c + 1) \mod a  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'und auf deren rechten Seite für \\term{c} wieder der vorherige Substituent eingesetzt'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  b \mod a  =  *( *( a *o( i + 1 *o) *( b - 1 *) *) + 1 *) \mod a  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'und dann ebenfalls durch Modulo ersetzt werden kann:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  b \mod a  =  ( ( ( b - 1 ) \mod a ) + 1 ) \mod a  \;\; .  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'Weil sowohl nach der Subtraktion von Eins als auch nach der anschließenden'."\n",
                      'Addition von Eins der selbe Modulo angewandt wird, kann der innere Modulo'."\n",
                      'weggelassen werden'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  b \mod a  =  ( b - 1 + 1 ) \mod a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  b \mod a  =  b \mod a  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'was zu zeigen war.'."\n".
                      '\\\\ \\\\'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Wir sehen, dass der Zähl-Modulo-Operator und der Modulo-Operator als aufeinander'."\n".
                    'folgende hierarchische Operatoren plausibel zusammen passen.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Modulo-Operatoren:Vortext:XXX', text =>
                                           
                'Der Zusammenhang beider Modulos')),
                  array( 'text', array( text => array(
                    'Interessant ist, dass der Zähl-Modulo-Operator und der Modulo-Operator über den Modulo zu vergleichen sind:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '\\\\'."\n",
                      'Für den Zähl-Modulo- und den Modulo-Operator haben wir'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  c *o( i *o) a  :=  (c + 1) \mod a  }',
                                               /* label_name => 'OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen', */label_text => '\\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo-Zaehlen}', label_incr => false),
                      array( display => 'on',  latex => '{  a *o( i + 1 *o) b  =  b \mod a  }',
                                               /* label_name => 'OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo', */label_text => '\\jumpname{OM:OT:Modulo-Operatoren:Vortext:Equ-Modulo}', label_incr => false),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'wo wir aus letzterer Formel durch die Substitution von \\term{b} mit \\term{c + 1} die rechte'."\n",
                      'Seite der ersten gewinnen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  a *o( i + 1 *o) (c + 1)  =  (c + 1) \mod a  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'So können wir jetzt beide Operatoren gleichsetzen:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  c *o( i *o) a  =  a *o( i + 1 *o) (c + 1)  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a *o( i + 1 *o) c  =  (c - 1) *o( i *o) a  \;\; ,  }'),
                    ))),
                  array( 'text', array( text => array(
                    ''."\n",
                      'was wir erreichen wollten.'."\n".
                      '\\\\ \\\\'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Dieser Zusammenhang und seine Bedeutung sollten weiter untersucht werden.'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Modulo-Operatoren:Vortext:XXX', text =>
                                           
                'Die orthogonale Ergänzung des Zählens', subline =>
                  'Das Naturprinzip des Djet-Neheh-Dualismus im Pärchen des Zähloperators und des Zähl-Modulo-Operators')),
                  array( 'text', array( text => array(
                    'Das Pärchen aus Zähloperator \\term{0} und Zähl-Modulo-Operator \\term{i} lässt erkennen,'."\n".
                    'wenn sie parallel im prozesshaften, zeitlichen Sinne wiederholt angewendet werden'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( 0 *o) a *o( 0 *o) a *o( 0 *o) a *o( 0 *o) a *o( 0 *o) a *o( 0 *o) a *o( 0 *o) a *o( 0 *o) a \cdots =  a *o( 0 + 1 *o) b  }'),
                      array( display => 'on',  latex => '{  *o( i *o) a *o( i *o) a *o( i *o) a *o( i *o) a *o( i *o) a *o( i *o) a *o( i *o) a *o( i *o) a \cdots =  a *o( i + 1 *o) b  }'),
                    ))),
                  array( 'text', array( text => array(
                    'und am Beispiel der \\term{3} verdeutlicht'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.ModO', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *o( 0 *o) 3 *o( 0 *o) 3 *o( 0 *o) 3 *o( 0 *o) 3 *o( 0 *o) 3 *o( 0 *o) 3 *o( 0 *o) 3 *o( 0 *o) 3 \cdots =  3 *o( 0 + 1 *o) b  }'),
                      array( display => 'on',  latex => '{  (3), 4, 5, 6, 7, 8, 9, 10, 11, \cdots  }'),
                      array( display => 'on',  latex => '{  *o( i *o) 3 *o( i *o) 3 *o( i *o) 3 *o( i *o) 3 *o( i *o) 3 *o( i *o) 3 *o( i *o) 3 *o( i *o) 3 \cdots =  3 *o( i + 1 *o) b  }'),
                      array( display => 'on',  latex => '{  (0), 1, 2, 0, 1, 2, 0, 1, 2, \cdots  }'),
                    ))),
                  array( 'text', array( text => array(
                    'wie parallel zum Zählen Schwingungen ablaufen.'."\n".
                    ''))),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Modulo-Operatoren:Neutrale-Elemente'),
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
                      array(  jump_name => 'OM:OT:Modulo-Operatoren', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'Verweis auf das Hauptkapitel zu neutralen Elementen …'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Modulo-Operatoren:Neutrale-Elemente:XXX', text =>
                                           
                'Neutrale Elemente des Zähl-Modulo-Operators', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:OT:Modulo-Operatoren:Neutrale-Elemente:XXX', text =>
                                           
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
