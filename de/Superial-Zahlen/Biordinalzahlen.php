<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Biordinalzahlen'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Primzahlprodukt-Vermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'vis', text => array(
                    '\\bold{Ausgangspunkt}',
                    '• Die Biordinalzahlen sind eine Darstellung aller ganzer Zahlen durch Mengen, also auch der negativen ganzen Zahlen.',
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Ordinalzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Ordinalzahlen\\color{*Bearb}{(link Wikipedia)} sind folgendermaßen definiert:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  0  :=  \left\{ \right\}  }'),
                      array( display => 'on', latex => '{  1  :=  \left\{ 0 \right\}  =  \left\{ \left\{ \right\} \right\}  }'),
                      array( display => 'on', latex => '{  2  :=  \left\{ 0, 1 \right\}  =  \left\{ \left\{ \right\}, \left\{ \left\{ \right\} \right\} \right\}  }'),
                      array( display => 'on', latex => '{  3  :=  \left\{ 0, 1, 2 \right\}  =  \left\{ \left\{ \right\}, \left\{ \left\{ \right\} \right\}, \left\{ \left\{ \right\}, \left\{ \left\{ \right\} \right\} \right\} \right\}  }'),
                      array( display => 'on', latex => '{  n  :=  \left\{ 0, 1, 2, …, n - 1 \right\}  }'),
                      array( display => 'on', latex => '{  n + 1  :=  \left\{ 0, 1, 2, …, n \right\}  =  n \cup \left\{ n \right\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Ganz allgemein gilt also:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{N}  :=  \mathbb{N}_{0}  }'),
                      array( display => 'on', latex => '{  \omega  :=  \mathbb{N}  }'),
                      array( display => 'on', latex => '{  \mathbb{N}  :=  ??? \left\{  n ~\middle|~ \left( n \in \mathbb{N} \right) \left( \forall x \in \mathbb{N} \right) \left[  x < n  \right]  \right\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Insgesamt sehen wir, dass jede definierte Zahl der Anzahl der Elemente in der Menge entspricht.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Biordinalzahlen als Fortsetzung der Ordinalzahlen ins Negative', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Eine mögliche Fortsetzung der Ordinalzahlen ins Negative ist:'."\n".
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
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  2  :=  \left\{ 0, 1 \right\}  =  \left\{ \left\{ \right\}, \left\{ \left\{ \right\} \right\} \right\}  }'),
                      array( display => 'on', latex => '{  1  :=  \left\{ 0 \right\}  =  \left\{ \left\{ \right\} \right\}  }'),
                      array( display => 'on', latex => '{  0  :=  \left\{ \right\}  }'),
                      array( display => 'on', latex => '{  -1  :=  \mathbb{N} \setminus 1  =  \mathbb{N} \setminus \left\{ \left\{ \right\} \right\}  }'),
                      array( display => 'on', latex => '{  -2  :=  \mathbb{N} \setminus 2  =  \mathbb{N} \setminus \left\{ 0, 1 \right\}  =  \left\{ \left\{ \right\}, \left\{ \left\{ \right\} \right\} \right\}  }'),
                      array( display => 'on', latex => '{  -n  :=  \mathbb{N} \setminus n  =  \mathbb{N} \setminus \left\{ 0, 1, …, n - 1 \right\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Auch hier wird konsequenterweise das Prinzip aufrecht erhalten, dass die Menge, die eine Zahl repräsentiert zum Negativen hin'."\n".
                    'in ihrer Anzahl sinkt.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Eine fundamentale Asymmetrie', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Interessanterweise ergibt sich auf diese Weise, dass es eine negative Zahl mehr gibt als positive Zahlen.'."\n".
                    'Wie kann das sein?'."\n",
                      'Die ontologische, also die Struktur des Seins oder der Realität betreffende, Begründung dafür hat mir mein Freund Raimund Welche nahegelegt:'."\n".
                    'Begreifen wir jede nach oben gezählte Eins als Welle – oder alternativ als Sägezahn – dann fängt jede dieser Wellen bei einer ganzen'."\n".
                    'Zahl an.'."\n".
                    'Die darauf folgende nächste ganze Zahl ist schon der beginn der nächsten Welle und gehört nicht mehr zu der, die wir gerade gezählt haben.'."\n",
                      'Die nullte Welle beginnt also bei der Null.'."\n",
                      'Duplizieren wir die positiven Wellen, beginnend bei der der Null, indem wir die gleiche Anzahl ins Negative verschieben,'."\n".
                    'dann ist der Nullpunkt auf der negativen Seite zusätzlich dupliziert.'."\n".
                    'Während der verschobene Nullpunkt der negativen Seite eine negative Zahl repräsentiert, repräsentiert der originale Nullpunkt keine positive'."\n".
                    'Zahl, sondern die Null selber.'."\n",
                      'Der Mittelwert aller endlichen ganzen Zahlen ist demnach \\term{-0,5}.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
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
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • XXX  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:SupNum:Biordinalzahlen:XXX',
              '\\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      //array(  jump_name => 'OM:SupNum:XXX', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'vis', text => array(
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
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
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
