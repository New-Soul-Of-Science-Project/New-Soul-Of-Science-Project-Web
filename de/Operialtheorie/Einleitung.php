<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Einleitung'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:OT:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'invis', text => array(
                    '\\bold{Zu tun}',
                    '• Fähnchen unten an die Klammern setzen.',
                    '\\bold{Erzählung}',
                    '• Erwähnen, dass es zwei Möglichkeiten gibt.',
                    '\\bold{Zähloperator \\term{0}}',
                    '• Linksneutrales Element:',
                    '– Ist immer einen kleiner:',
                    '⋅ Kann gedeutet werden als, dass es immer vom Kleineren hierher gekommen ist! Dass dies immer möglich ist.',
                    '• Rechtsneutrales Element:',
                    '- Existiert nicht:',
                    '⋅ Kann gedeutet werden als, dass das Zählen oder die Zeit immer weiter gehen muss. Sie kann nicht anhalten!',
                    '\\bold{Operator \\term{-1}}',
                    '• Nur als Vorzeichen zählt der einen hoch.',
                    '• Als Verbindungsoperator ändert er nichts.',
                    '\\bold{Operator \\term{-2}}',
                    '• Ändert grundsätzlich nichts.',
                    '\\bold{Literatur}',
                    '• \\jump[https://en.wikipedia.org/wiki/Hyperoperation]{}{Hyperoperation}',
                    '• \\jump[https://en.wikipedia.org/wiki/Tetration]{}{Tetration}',
                    '• \\jump[https://de.wikipedia.org/wiki/Hyper-Operator]{}{Hyper-Operator}',
                    '• \\jump[https://de.wikipedia.org/wiki/Potenzturm]{}{Potenzturm}',
                    '\\bold{Fragen}',
                    '• Wie verändern sich die Anzahlen von einem Operator zur drunter liegenden Ebene?',
                    '– Bis zum Zählen: Dann müsste sich eine Differenz zur Zählbasis ergeben.',
                    '– Linksneutrales Element und rechtsneutrales Element über die Rückwärtsrechenarten allgemein definieren.',
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
                    'XXX'."\n",
                      'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:OT:Einleitung:Vortext:XXX', text =>
                                           
                'Herleitung der allgemeinen Operatoren Formeln')),
                  array( 'text', array( text => array(
                    'Im Mathematikunterricht in der Oberstufe war mir aufgefallen, dass es Regelmäßigkeiten zwischen'."\n".
                    'den grundlegenden Operatoren der Arithmetik\\color{*Bearb}{(Link zu Wikipedia)} gibt.'."\n".
                    'Diese Verbinden die Addition, die Multiplikation und die Exponentialrechnung in einer'."\n".
                    'hierarchischen Reihenfolge:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a \cdot b *) + a  :=  a \cdot *( b + 1 *)  }'),
                      array( display => 'on',  latex => '{  a^{b} \cdot a  :=  a^{b + 1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Definieren wir diese Operatoren mit natürlichen Zahlen wie folgt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a^{\lOpera 1 \rOpera}b  :=  a + b  }'),
                      array( display => 'on',  latex => '{  a^{\lOpera 2 \rOpera}b  :=  a \cdot b  }'),
                      array( display => 'on',  latex => '{  a^{\lOpera 3 \rOpera}b  :=  a^{b}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So können wir die eben festgestellte Regelmäßigkeit zwischen zwei aufeinander folgenden Operatoren'."\n".
                    'nun allgemein definieren:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a^{\lOpera x + 1 \rOpera}b *)^{\lOpera x \rOpera}a  :=  a^{\lOpera x + 1 \rOpera}*( b + 1 *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Wenn wir beschreiben, wofür diese Formel steht, dann würde ich sagen:'."\n".
                    ''))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Der jeweils höhere Operator \\term{x + 1} beschreibt,'."\n".
                      'wie häufig – ausgedrückt durch \\term{b} – der niedrigere Operator \\term{x} einen identischen Wert \\term{a} verkettet.'."\n".
                    ''))),
                      
                  array( 'text', array( text => array(
                    'In Form von Beispielen sieht das dann so aus:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  + a + a + a  =  a \cdot 3  }'),
                      array( display => 'on',  latex => '{  \cdot a \cdot a \cdot a  =  a^{3}  }'),
                      array( display => 'on',  latex => '{  *( a^{a} *)^{a}  =  a^{\lOpera 4 \rOpera}3  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der vierte Operator ergibt sich auf diese Weise zu einer Verkettung von Exponenten.'."\n".
                    'Dabei setze ich voraus, dass der Exponent-Operator als Vorzeichen von a, nämlich \\term{↑a},'."\n".
                    'das \\term{a} nicht verändert.'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  a^{\lOpera 4 \rOpera}1  =  ^{\lOpera 3 \rOpera}a  =  \uparrow a  =  a  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a^{\lOpera 3 \rOpera}1  =  ^{\lOpera 2 \rOpera}a  =  \cdot a  =  a  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Gleiches gilt dann auch für das Mal als Vorzeichen, wie ich gleich dazu geschrieben hab.'."\n",
                      'Diesen Zusammenhang drücken wir nun als Verkettung ›𓇳‹ aus, wobei bei dieser Verkettung die Funktionsschachtelung genau anders herum ist als die übliche ›∘‹.\\color{*Bearb}{(Link zu Wikipedia: https://de.wikipedia.org/wiki/Komposition_(Mathematik), https://de.wikipedia.org/wiki/Verkettungszeichen)}'."\n".
                    'Das nachfolgende Glied der Verkettung wird auf das Ergebnis aller vorherigen Glieder angewandt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a^{\lOpera x + 1 \rOpera}b  :=  \overset{\huge{\circledcirc}}{\tiny{(\forall n \in \mathbb{N})[0 \le n < b]}} \;\; ^{\lOpera x \rOpera}a  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a^{a} *)^{a}  =  a^{\lOpera 4 \rOpera}3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a^{a \cdot a}  =  a^{\lOpera 4 \rOpera}3  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  a^{ *( a^{b - 1} *) }  =  a^{\lOpera 4 \rOpera}b  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a^{\lOpera ^{\lOpera 0 \rOpera}x \rOpera}b *)^{\lOpera x \rOpera}a  :=  a^{\lOpera ^{\lOpera 0 \rOpera}x \rOpera}*( ^{\lOpera 0 \rOpera}b *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ^{\lOpera 0 \rOpera}a  :=  a + 1  }'),
                      array( display => 'on',  latex => '{  a^{\lOpera 0 \rOpera}b  :=  a + 1  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ( ( ( ( a - 2 ) \odot ( a - 1 ) ) \odot a ) \odot a ) \odot a \odot a  =  a + 3  }'),
                      array( display => 'on',  latex => '{  ( ( ( a - 1 ) \odot a ) \odot a ) \odot a \odot a  =  a + 3  }'),
                      array( display => 'on',  latex => '{  ( a \odot a ) \odot a \odot a  =  a + 3  }'),
                      array( display => 'on',  latex => '{  \odot a \odot a \odot a  =  a + 3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \odot a \odot a \odot a  =  ( ( ( \odot a) \odot a ) \odot a )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \odot a \odot a \odot a  =  ( ( ( a + 1 ) \odot a ) \odot a )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \odot a \odot a \odot a  =  ( ( ( a + 1 ) + 1 ) \odot a )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \odot a \odot a \odot a  =  ( ( ( a + 1 ) + 1 ) + 1 )  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \odot a \odot a \odot a  =  ( ( a + 2 ) \odot a )  }'),
                      array( display => 'on',  latex => '{  \odot a  =  a + 1  }'),
                      array( display => 'on',  latex => '{  + a + a + a  =  a \cdot 3  }'),
                      array( display => 'on',  latex => '{  \cdot a \cdot a \cdot a  =  a^{3}  }'),
                      array( display => 'on',  latex => '{  *( a^{a} *)^{a}  =  a^{\lOpera 4 \rOpera}3  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  a^{a \cdot a}  =  a^{\lOpera 4 \rOpera}3  }'),
                      array( display => 'on',  latex => '{  a^{ *( a^{b - 1} *) }  =  a^{\lOpera 4 \rOpera}b  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a^{a} *)^{a}  =  a^{\lOpera 4 \rOpera}3  }'),
                      array( display => 'on',  latex => '{  *( *( n^a *)^{a} *)^{a}  =  *( a^{a} *)^{a}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n^a  =  a  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  n  =  \sqrt[a]{a}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Ein', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{   ^{\lOpera x \rOpera}2^{\lOpera x \rOpera}2  :=  4  }'),
                    ))),
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
                      // array(  jump_name => 'OM:SupNum:Einleitung:Grundlagen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Test der Notation  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:OT:Einleitung:Test-der-Notation',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Einleitung', type => 'back'),
                    )),
                  
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn'),
                    )),
                )
          ); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
