<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Eigenschaften'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Ableitungen-Integrale'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\\bold{XXX}',
                    '• Ist \\term{\M(S)} bezüglich der Addition und Multiplikation ein \\jump[https://de.wikipedia.org/wiki/Geordneter_Körper]{}{archimedisch angeordneter Körper}?',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Die Superial-Zahlen, als aktual unendliche algebraische Gruppe\\footnote{\\const{NSOSP_g_footnote_text_AbelscheGruppe}},'."\n".
                    'deren Basis über ein unendliches \\jump{OM:SupNum:Formale-Entwicklung}{Primzahl-Produkt} definiert ist, haben eine ganz besondere Struktur.'."\n".
                    'Ihre Struktur ist dadurch tief mit den \\jump{OM:SupNum:Formale-Entwicklung:NatuerlicheSZ}{natürlichen Zahlen}, den \\jump{OM:SupNum:Formale-Entwicklung:GanzeSZ}{ganzen Zahlen}'."\n".
                    'und den \\jump{OM:SupNum:Formale-Entwicklung:PrimSZ}{Primzahlen} verbunden und erweitern diese ins Aktual-Unendliche.'."\n".
                    'Auch sind sie dadurch mit den Ordinalzahlen\\footnote{\\const{NSOSP_g_footnote_text_Ordinalzahl}} und im Besonderen mit den von mir entdeckten'."\n".
                    '\\jump{OM:BiOrd:Home}{Biordinalzahlen} verwandt.'."\n",
                      'Ihre besonderen Eigenschaften versprechen uns deshalb neue Einblicke in die Struktur der Zahlen.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • Die Struktur von s  >
          <?php $Sc_g_equation_auto_num = 0; ?>
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:Eigenschaften:StrukturVonS',
              '\\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Eigenschaften', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\\bold{XXX}',
                    // '• XXX',
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
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:XXX', text =>
                      
                'Was lernen wir über die Größe von \\term{ω} und die Struktur von \\term{s} über die Frage der Vorgänger?', subline =>
                  '')),
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{In der \\jumpname{OM:SupNum:Formale-Entwicklung} so formuliert:}'."\n",
                      'Jede natürliche Superial-Zahl hat dabei so viele Vorgänger in \\term{\M(S)_{N}}, wie sie selber groß ist.'."\n".
                    'Dies ist anders, als bei den von mir erforschten auch ins Aktual-Unendliche gehenden'."\n".
                    '\\jump{OM:BiOrd:Home}{Biordinalzahlen}:'."\n".
                    'Aktual unendliche Biordinalzahlen haben bizarrer Weise \\jump{OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega}{mehr Vorgänger als ihr Wert} groß ist.'."\n".
                    'In mancherlei anderen Punkten können wir erkennen, dass sie die noch nicht so perfekten Vorläufer der Superial-Zahlen sind.'."\n".
                    'Mathematisch gesehen sind die Biordinalzahlen eine Erweiterung der Ordinalzahlen\\footnote{\\const{NSOSP_g_footnote_text_Ordinalzahl}} zu einem algebraischen Ring\\footnote{\\const{NSOSP_g_footnote_text_RingAlgebra}}.'."\n",
                      'Demnach hat \\term{s} also so viele Vorgänger, wie das Primzahl-Flächenprodukt groß ist.'."\n",
                      'Fragen die offen sind:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Gehören die denkbaren hyperrationalen Zahlen, als vermutlich algebraische Zahlen, wie √2, auch zu den möglichen Koeffizienten der Definition der (natürlichen) Superial-Zahlen?',
                    ))),
                  array( 'text', array( text => array(
                    'Die Anzahl der Vorgänger von \\term{s}, als das vollständige Primzahl-Flächenprodukt, wären dann:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Die Anzahl aller rationalen Koeffizienten \\latexmath{ q } von \\latexmath{ s }, für die gilt: \\latexmath{ 0 \leq q \leq 1 }.',
                        'Multipliziert mit \\latexmath{ 2 \cdot \omega - 1 } für die Anzahl der endlichen ganzen Zahlen (siehe \\jumpname{OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie}), die je Koeffizient addiert – und im Falle der negativen natürlich dann abgezogen – werden können. Wobei im Falle von \\latexmath{ q = 0 } nur natürliche Zahlen addiert und im Falle von \\latexmath{ q = 1 } nur negative ganze Zahlen addiert, also effektive abgezogen, werden.',
                    ))),
                      
                  array( 'text', array( Shape  => 'derivation', text => array(
                      '\\\\'."\n".
                      'Seien \\latexmath{ \rbrack a, b \lbrack_\mathbb{T} } und \\latexmath{ \lbrack a, b \lbrack_\mathbb{T} } die Mengen der folgenden Intervale von \\latexmath{ a } bis \\term{b} aus der Menge \\latexmath{ \mathbb{T} }'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  ] a, b [_\mathbb{T}  :=  *\{  x  ~\middle|~  *( \forall x \in \mathbb{T} *) *( a, b \in \mathbb{T} *) *[ a < x < b *]  *\}  }'),
                      array( display => 'on',  latex => '{  [ a, b [_\mathbb{T}  :=  *\{  x  ~\middle|~  *( \forall x \in \mathbb{T} *) *( a, b \in \mathbb{T} *) *[ a \leq x < b *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'dann ergibt sich \\latexmath{ s }, nach vorstehendem Gedanken, zu'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  s  =  \# \mathbb{N} + \# *( ] 0, 1 [_\mathbb{Q} *) \cdot \# \mathbb{Z} + \# \mathbb{Z^{-}}  }'),
                      array( display => 'off', latex => '{  \# \mathbb{Z}  =  \# \mathbb{N} + \# \mathbb{Z^{-}} }'),
                      array( display => 'off', latex => '{  \Rightarrow  s  =  \# \mathbb{Z} + \# *( ] 0, 1 [_\mathbb{Q} *) \cdot \# \mathbb{Z}  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  s  =  *( 1 + \# *( ] 0, 1 [_\mathbb{Q} *) *) \cdot \# \mathbb{Z}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  \# *( [ 0, 1 [_\mathbb{Q} *) \; \cdot \; \# \mathbb{Z}  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  s  =  \# *( [ 0, 1 [_\mathbb{Q} *) \; \cdot \; *( 2 \cdot \omega - 1 *)  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'was der Anzahl aller rationaler Zahlen entspricht. \\\\'."\n".
                      'Denn mit'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{Q}  =  \\\ \qquad *\{  x  ~\middle|~  *( \forall z \in \mathbb{Z} *) *( \forall u \in [ 0, 1 [_\mathbb{Q} *)  *[  x = z + u  *]  *\}  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'folgt'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  s  =  \# \mathbb{Q}  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'weil es in den rationalen Zahlen \\latexmath{ \mathbb{Q} } das Interval \\latexmath{ \lbrack 0, 1 \lbrack_\mathbb{T} }'."\n".
                      'für jede ganze Zahl in \\latexmath{ \mathbb{Z} } gibt und sie damit vollständig beschrieben sind. \\\\'."\n".
                      'So gilt dann auch'."\n".
                      ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Eig.SVS', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \# *( [ 0, 1 [_\mathbb{Q} *)  =  \frac{ s }{ 2 \cdot \omega - 1 }  \;\; ,  }'),
                    ))),
                  array( 'text', array( Shape  => 'derivation', text => array(
                      'das folglich eine ganze Zahl sein sollte, was sich mir noch nicht sicher erschließt'."\n".
                      'und dann wohl der Primzahlproduktvermutung in der jetzigen Form widerspräche.'."\n",
                        '\\\\'."\n".
                      ''))),
                      
                  array( 'text', array( text => array(
                    'Können wir die Anzahl der rationalen Zahlen quantifizieren?'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:SupNum:Eigenschaften:StrukturVonS:XXX', text =>
                      
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
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Primzahlprodukt-Vermutung'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
