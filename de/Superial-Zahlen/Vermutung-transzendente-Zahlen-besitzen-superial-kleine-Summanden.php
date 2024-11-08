<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:SupNum:Vermutung-transzendente-Zahlen-besitzen-superial-kleine-Summanden'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Verbesserungen der Seite}',
                    // '• Nach dem Beweis der \italic{\jumpname{OM:SupNum:Ueberrationalitaetsvermutung}} die Menge der Koeffizienten der Superial-Zahlen von den rationalen Zahlen \lm{ \mathbb{Q} } zu den algebraischen Koeffizienten \lm{ \mathbb{A}_{\S} } ändern.',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n",
                      'Wenn transzendente Zahlen superial kleine Summanden besitzen, dann sind es zum Beispiel Zahlen der Form:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.VerTra', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( \forall a_{0} \in \mathbb{A}_{\S}^{0+} *) *( \forall a_{-1} \in \mathbb{A}_{\S}^{+} *)  *[  0  <  *〈 a_{0} *〉.*〈 a_{-1} *〉  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *〈 a_{0} *〉.*〈 a_{-1} *〉  :\in  \mathbb{R}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Sie müssten demnach folglich Elemente der Menge der reellen Zahlen \lm{ \mathbb{R} } sein.'."\n",
                      'Wenn dem so ist, dann XXX:'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'SN.VerTra', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall n \in \mathbb{N} *)  *[  n  <  \s  *]  }'),
                      array( display => 'on',  latex => '{  *( \forall r \in \mathbb{R} *)  *( \exists n \in \mathbb{N} *)  *[  r  <  n  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall r \in \mathbb{R} *)  *[  - \s  <  r  <  \s  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( \forall r \in \mathbb{R}^{+} *)  *[  0  <  \s^{-1}  <  r  *]  }'),
                      array( display => 'on',  latex => '{  \Rightarrow  *( k \in \mathbb{R} *)  *( \forall r \in \mathbb{R}^{+} *)  \\\ \qquad\qquad  *[  k - r  <  k - \s^{-1}  \\\ \qquad\qquad\qquad\qquad  <  k  <  k + \s^{-1}  <  k + r  *]  }'),
                    ))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Home'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


          <!  • X  >
          <?php /* To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:SupNum:OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen:X',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\bold{Parität}',
                    // '• Nicht nur gleiche Mächtigkeit von geraden und ungeraden Zahlen, sondern hier sogar gleiche kombinatorische Anzahl von geraden und ungeraden Zahlen.\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:ParitaetMathematik:2021}.}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:SupNum:Vermutung-superiale-Koeffizienten-reell-algebraische-Zahlen:X'),
                    )),
              )
          ); */ ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
