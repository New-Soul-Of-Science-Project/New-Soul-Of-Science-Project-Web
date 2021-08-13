<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:ZS:Einleitung'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:ZS:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'invis', text => array(
                    '\\bold{XXX}',
                    '• XXX',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\\color{*Bearb}{Seite befindet sich im Aufbau …}'."\n"))),
                      
                  // array( 'figure',
                  //   array_merge( $ZS_g_figure_ary_GraviLeptonWirkung, array( name => 'OM:ZS:Einleitung:Vortext:Fig-GraviLeptonWirkung'))),
                      
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'Sei:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \mathbb{N}  :=  \mathbb{N_{0}} \setminus {0}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'So lässt sich die Riemann\'sche Zeta-Funktion schreiben als:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  (\forall s \in \mathbb{C}) *[  \zeta(s)  :=  \sum_{\forall n \in \mathbb{N}}  \frac{ 1 }{ n^{s} } \\\ \qquad\qquad\quad\;\;\;  =  \prod_{\forall p \in \mathbb{P}}  \frac{ p^{s} }{ p^{s} - 1 }   *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Für den Spezialfall \\term{s = 2} ergibt sich:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  \zeta(2)  =  \sum_{\forall n \in \mathbb{N}}  \frac{ 1 }{ n^{2} }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \zeta(2)  =  \frac{ 1 }{ 1 } + \frac{ 1 }{ 4 } + \frac{ 1 }{ 9 } + \frac{ 1 }{ 16 } + \frac{ 1 }{ 25 } + \cdots \\\ \qquad\qquad\;  =  \frac{ \pi^{2} }{ 6 }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und damit auch:'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'SN.Ein.Gr', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Leftrightarrow  \zeta(2)  =  \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ p^{2} - 1 } \\\ \qquad\qquad\;  =  \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) } \\\ \qquad\qquad\;  =  \frac{ \pi^{2} }{ 6 }  }'),
                      array( display => 'off', latex => '{  \Leftrightarrow  \frac{ \pi^{2} }{ 6 }  =  \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi^{2}  =  6 \cdot \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) }  }'),
                      array( display => 'on',  latex => '{  \Leftrightarrow  \pi^{2}  =  2 \cdot \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) } \\\ \qquad\qquad\quad\;\; + 2 \cdot \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) } \\\ \qquad\qquad\quad\;\; + 2 \cdot \prod_{\forall p \in \mathbb{P}}  \frac{ p^{2} }{ (p - 1) \cdot (p + 1) }  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n"))),
                    
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Einleitung:Grundlagen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Grundlagen  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'invis',
            'OM:ZS:Einleitung:XXX',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:ZS:Einleitung', type => 'back'),
                    )),
                  
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Vortext:XXX', text =>
                                           
                'XXX')),
                  array( 'text', array( text => array(
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n",
                    'XXX'."\n"))),
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
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
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
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'headline', array( jump_name => 'OM:ZS:Einleitung:Grundlagen:XXX', text =>
                'XXX', subline =>
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
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Formale-Entwicklung'),
                    )),
                )
          ); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
