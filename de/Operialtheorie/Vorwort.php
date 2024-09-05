<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Vorwort'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:OT:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    // '\\bold{Ist die Geometrie fraktal?} – Ist ein Punkt, eine Linie und eine Fläche fraktal?',
                    // '• Das Problem der Geometrie, eine Linie aus Punkten aufzubauen (Verwandt mit der Kontinuumshypothese): Die nullte, die erste und die zweite Dimension haben keine Ausdehnung, kein Volumen, – also Punkt, Linie und Fläche – und in gewisser Weise existieren sie so nicht. Aber mit ihnen sollen wir die dritte Dimension aus Punkten (Ecken) und Flächen konstruieren, die dann eine Ausdehnung hat und plötzlich existiert. Das scheint komisch und merkwürdig. Siehe Nassim Haramein, Die Entschlüsselung des Universums, S. 11-14, hier S. 12-13.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Ich hab wohl schon lange oder gar schon immer ein sehr starkes Auge für Muster gehabt.'."\n",
                      'Als wir uns in der Schule im Matheunterricht intensiver mit der Exponentialrechnung befassten,'."\n".
                    'viel mir recht schnell auf, dass diese in der Lage war aus der Operation Mal „\lm{ \cdot }“ die Operation Plus „\lm{ + }“'."\n".
                    'zu machen und der Logarithmus umgekehrt:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Vor', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a^{x} \cdot a^{y}  =  a^{x + y}  }'),
                      array( display => 'on',  latex => '{  log_{a} x + log_{a} y  =  log_{a} *( x \cdot y *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Die Operation wird in gewisser Hinsicht um Eine geringer oder um Eine erhöht.'."\n",
                      'Derart sensibilisiert viel mir schließlich auf, dass es diesbezüglich Regeln gibt, die sogar für mehr Operatoren übergreifend gelten:'."\n".
                    ''))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Vor', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a \cdot x + a  =  a \cdot *( x + 1 *)  }'),
                      array( display => 'on',  latex => '{  a^{x} \cdot a  =  a^{x + 1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'Und ich fragte mich:'."\n".
                    'Können wir die Operatoren Plus „\lm{ + }“, Mal „\lm{ \cdot }“ und Hoch „↑“ so nummerieren, dass wir ihre Nummern auch sinnvoll'."\n".
                    'ins Kleinere und ins größere erweitern können?'."\n",
                      'Meine Neugier war erwacht und meine Reise ins Ungewisse offenbarte mir wichtige innere Erlebnisse,'."\n".
                    'die mich fortan prägten.'."\n".
                    'Denn die Frage lies sich ganz eindeutig mit Ja beantworten und führte mich in Gedankenwelten'."\n".
                    'und Gefühle, die ich so zuvor noch nie erlebt hatte.'."\n",
                      'Durch das, was ich dort – auch in mir – entdeckte, führe ich uns auf den folgenden Seiten.'."\n".
                    ''))),
                  /* array( 'headline', array( jump_name => 'OM:OT:Vorwort:Vortext:X', text =>
                                           
                'XXX')),
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
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))), */
                    
                  array( 'jumplist',
                    array(
                      array(  jump_name => 'OM:OT:Einleitung'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
