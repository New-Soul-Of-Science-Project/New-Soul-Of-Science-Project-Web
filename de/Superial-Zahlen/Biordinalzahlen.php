<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Biordinalzahlen'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Primzahlprodukt-Vermutung'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'vis', text => array(
                    // '\\bold{Ausgangspunkt}',
                    // '• Die Biordinalzahlen sind eine Darstellung aller ganzer Zahlen durch Mengen, also auch der negativen ganzen Zahlen.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Ausgangspunkt der Biordinalzahlen sind die Ordinalzahlen\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}.}.'."\n".
                    'Bei den Ordinalzahlen handelt es sich um die Fortsetzung des Zählens oder der uns allgemein bekannten Anzahl von Dingen ins Aktual-Unendliche.'."\n".
                    'Diese Fortsetzung wird mit Hilfe der Mengenlehre, durch die Definition einer Entsprechung eines (An-)Zahlensymbols mit einer bestimmten Menge, die eben selber wieder diese Anzahlen an Mengen enthält, erreicht. '."\n",
                      'Die nachfolgend eingeführten Biordinalzahlen erweitern das Zählen in den negativen Bereich, auf die Anzahl, die Fehlt.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Erwartete Erkenntnisgewinne', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Aus der Perspektive der Superial-Zahlen bringt dies auch ein besseres Verständnis der positiven aktualunendlichen Zahlen, wie zum Beispiel \\term{s-1}, mit sich.'."\n".
                    'Denn hier fehlt an \\term{s} etwas.'."\n",
                      'Auch zur Klärung der \\jump{OM:SupNum:Primzahlprodukt-Vermutung}{Primzahlprodukt-Vermutung} kann die mengentheoretische Perspektive des Negativen'."\n".
                    'tiefere Einsichten beitragen, indem festgestellt wird, dass \\term{ω-1} zu einer riesigen Lücke zwischen den endlichen natürlichen Zahlen'."\n".
                    'und dem vermuteten Produkt aller endlicher Primzahlen \\term{ω} gehört.'."\n",
                      'Und nicht zuletzt können wir im Zusammenhang mit geometrischen Überlegungen etwas über die ontologische Struktur des Zählens lernen,'."\n".
                    'deren Erweiterung auf das Negative eine grundlegende Asymmetrie in den ganzen Zahlen erkennen lässt.'."\n".
                    'Meine Intuition sagt mir, dass diese Asymmetrie gemeinsam mit der Primzahlprodukt-Vermutung in der Lage sein könnte'."\n".
                    'entscheidendes zur Klärung der Riemannschen Vermutung beizutragen.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Ordinalzahlen', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Die Ordinalzahlen sind über ihre Definition durch geordnete Mengen folgendermaßen definiert:\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ordinalzahl:2021}, Die natürlichen Zahlen als geordnete Mengen.}'."\n"))),
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
                    'Im Folgenden soll gelten:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \mathbb{N}  :=  \mathbb{N}_{0}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Der Übergang vom Endlichen ins Aktual-Unendliche geschieht durch die Feststellung, dass dann auch die Anzahl der Elemente der Menge der natürlichen Zahlen \\term{\M(N)} durch ein Symbol dargestellt werden kann, nämlich \\term{ω}:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  \omega  :=  \mathbb{N}  }'),
                      array( display => 'on', latex => '{  \mathbb{N}  :=  ??? \left\{  n ~\middle|~ \left( n \in \mathbb{N} \right) \left( \forall x \in \mathbb{N} \right) \left[  x < n  \right]  \right\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Insgesamt sehen wir, dass jede definierte Zahl der Anzahl der Elemente in einer bestimmten Menge entspricht.'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Erster Ansatz zur Erweiterung der Ordinalzahlen ins Negative', subline =>
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
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on', latex => '{  2  :=  \left\{ 0, 1 \right\}  =  \left\{ \left\{ \right\}, \left\{ \left\{ \right\} \right\} \right\}  }'),
                      array( display => 'on', latex => '{  1  :=  \left\{ 0 \right\}  =  \left\{ \left\{ \right\} \right\}  }'),
                      array( display => 'on', latex => '{  0  :=  \left\{ \right\}  }'),
                      array( display => 'on', latex => '{  -1  :=  \mathbb{N} \setminus 1  =  \mathbb{N} \setminus \left\{ \left\{ \right\} \right\}  }'),
                      array( display => 'on', latex => '{  -2  :=  \mathbb{N} \setminus 2  =  \mathbb{N} \setminus \left\{ 0, 1 \right\}  =  \mathbb{N} \setminus \left\{ \left\{ \right\}, \left\{ \left\{ \right\} \right\} \right\}  }'),
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
                  'Die ontologische Struktur beinhaltet die Zählrichtung')),
                  array( 'text', array( text => array(
                    'Interessanterweise ergibt sich auf diese Weise, dass es eine negative Zahl mehr gibt als positive Zahlen.'."\n".
                    'Wie kann das sein?'."\n",
                      'Die ontologische Begründung dafür, also die Begründung aus Sicht der Struktur des Seins oder die Realität betreffend, hat mir mein Freund Raimund Welsch nahegelegt:'."\n".
                    'Begreifen wir jede nach oben gezählten Abstand Eins als Welle – oder alternativ als Sägezahn, wie ich es selber schon früher gedacht hab – dann fängt jede dieser Wellen bei einer ganzen'."\n".
                    'Zahl an.'."\n".
                    'Die darauf folgende nächste ganze Zahl ist schon der Beginn der nächsten Welle und gehört nicht mehr zu der, die wir gerade gezählt haben.'."\n",
                      'Die nullte Welle beginnt also bei der Null.'."\n",
                      'Duplizieren wir die positiven Wellen, beginnend bei der der Null, indem wir die gleiche Anzahl ins Negative verschieben,'."\n".
                    'dann ist der Nullpunkt auf der negativen Seite zusätzlich dupliziert.'."\n".
                    'Während der verschobene Nullpunkt der negativen Seite eine negative Zahl repräsentiert, repräsentiert der originale Nullpunkt keine positive'."\n".
                    'Zahl, sondern die Null selber.'."\n",
                      'Ontologisch betrachtet sind negative Zahlen also nicht die inklusive der Zählrichtung an der Null gespiegelten positiven Zahlen, inklusive der Null.'."\n".
                    'Sondern es handelt sich um eine Verschiebung, die die Zählrichtung beibehält.'."\n".
                    'Und dazu macht eine Doppelung der Null keinen Sinn.'."\n"))),
                      
                  array( 'text', array( Shape  => 'italic', text => array(
                      'Der Mittelwert aller endlichen ganzen Zahlen ist demnach \\term{-0,5}.'."\n"))),
                      
                  array( 'text', array( text => array(
                    'Das ist möglicherweise für den einen oder anderen eine überraschende Erkenntnis.'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Biordinalzahlen:Vortext:XXX', text =>
                      
                'Biordinalzahlen als Fortsetzung der Ordinalzahlen ins Negative', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX Eine mögliche Fortsetzung der Ordinalzahlen ins Negative ist:'."\n".
                    'XXX Mengenuniversum\\footnote{\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Allklasse:2020}.} \\term{\M(U)} XXX'."\n".
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
                      array( display => 'on', latex => '{  2  :=  \left\{ 0, 1 \right\}  =  \left\{ \left\{ \right\}, \left\{ \left\{ \right\} \right\} \right\}  }'),
                      array( display => 'on', latex => '{  1  :=  \left\{ 0 \right\}  =  \left\{ \left\{ \right\} \right\}  }'),
                      array( display => 'on', latex => '{  0  :=  \left\{ \right\}  }'),
                      array( display => 'on', latex => '{  -1  :=  \mathbb{U} \setminus 1  =  \mathbb{U} \setminus \left\{ \left\{ \right\} \right\}  }'),
                      array( display => 'on', latex => '{  -2  :=  \mathbb{U} \setminus 2  =  \mathbb{U} \setminus \left\{ 0, 1 \right\}  =  \mathbb{U} \setminus \left\{ \left\{ \right\}, \left\{ \left\{ \right\} \right\} \right\}  }'),
                      array( display => 'on', latex => '{  -n  :=  \mathbb{U} \setminus n  =  \mathbb{U} \setminus \left\{ 0, 1, …, n - 1 \right\}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX Auch hier wird konsequenterweise das Prinzip aufrecht erhalten, dass die Menge, die eine Zahl repräsentiert zum Negativen hin'."\n".
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
                      
                'XXX Biordinalzahlen als Fortsetzung der Ordinalzahlen ins Negative', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'XXX Eine mögliche Fortsetzung der Ordinalzahlen ins Negative ist:'."\n".
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
                      array( display => 'on', latex => '{  \omega - 1  :=  \mathbb{N} \setminus 1  =  \mathbb{N} \setminus \left\{ \left\{ \right\} \right\}  }'),
                      array( display => 'on', latex => '{  \omega - 2  :=  \mathbb{N} \setminus 2  =  \mathbb{N} \setminus \left\{ 0, 1 \right\}  =  \mathbb{N} \setminus \left\{ \left\{ \right\}, \left\{ \left\{ \right\} \right\} \right\}  }'),
                      array( display => 'on', latex => '{  \omega - n  :=  \mathbb{N} \setminus n  =  \mathbb{N} \setminus \left\{ 0, 1, …, n - 1 \right\}  }'),
                    ))),
                  array( 'text', array( text => array(
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
                      array( display => 'on', latex => '{  \omega - 1  \notin  \mathbb{N}  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\\term{ω-1} ist nicht in den natürlichen Zahlen \\term{\M(N)}, weil eine unendlich große Zahl \\term{ω} minus einer endlichen Zahl \\term{1} eine unendlich große Zahl bleibt.'."\n".
                    'Und eine unendlich große Zahl ist kein Element von \\term{\M(N)}.'."\n".
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
