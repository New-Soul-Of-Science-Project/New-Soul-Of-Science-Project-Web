<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Einleitung'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:OT:Home'); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  /* array( 'notice', array( Display => 'invis', text => array(
                    '\\bold{Ist die Geometrie fraktal?} – Ist ein Punkt, eine Linie und eine Fläche fraktal?',
                    '• Das Problem der Geometrie, eine Linie aus Punkten aufzubauen (Verwandt mit der Kontinuumshypothese): Die nullte, die erste und die zweite Dimension haben keine Ausdehnung, kein Volumen, – also Punkt, Linie und Fläche – und in gewisser Weise existieren sie so nicht. Aber mit ihnen sollen wir die dritte Dimension aus Punkten (Ecken) und Flächen konstruieren, die dann eine Ausdehnung hat und plötzlich existiert. Das scheint komisch und merkwürdig. Siehe Nassim Haramein, Die Entschlüsselung des Universums, S. 11-14, hier S. 12-13.',
                    '– Es geht einfach darum, wie man aus Punkten eine Linie exakt konstruieren kann: Handelt es sich wirklich um einen absolut unendlich kleinen Punkt, dann bekommen wir ein Problem. Es scheint mir, dass ein strukturierter Punkt, mit aktual unendlich kleiner Ausdehnung hier Abhilfe schaffen kann. Ich kann nämlich in Form von aktual unendlich großen Zahlen beschreiben, wie oft ich diesen superialen Punkt aneinander legen muss. Dies kann ich bei absolut unendlich kleinen Punkten nicht tun.',
                    '– Bietet hier die aktual unendlich kleine Hülle der superial-kleinen Zahlen um einen Punkt einen logischen Lösungsansatz für die Geometrie? Denn bei einem absolut unendlich kleinen Punkt können wir nicht sicher und exakt definieren, wie oft wir ihn aneinander legen müssen, um eine Gerade einer bestimmten Länge zu erzeugen. Bei einem Punkt mit superial-kleiner Hülle ist dies wohldefiniert.',
                    '– Ist die Geometrie also eigentlich fraktal? Was durch die Analysis, mit ihren Ableitungen und Integralen, schließlich sichtbar wird?',
                    '\\bold{Aktuelle Forschung}',
                    '• Der Fields-Medaillenträger 2018, Peter Scholze, bringt neue Zusammenhänge zwischen der Arithmetik und der Geometrie ins Spiel.',
                    '\\bold{Zeit in der Mathematik}',
                    '• Einflechten, dass die Arithmetik aus dem Zählen geboren wird. Dies ist eine Definition durch einen Prozess. Hierdurch kommt Zeit ins Spiel. Die Betrachtung der Primfaktorenzerlegung der natürlichen Zahlen zeigt auf, dass an diesem Prozess Regelsystemen ähnliche rhythmische Strukturen beteiligt sind.',
                    '\\bold{Korrekturen}',
                    '• Der Text ist schwer verständlich und manchmal etwas komisch formuliert. Alles noch einmal überarbeiten !!!',
                    '• Fehler: Das Äquivalenzzeichen vor den konkreten Ableitungsbeispielen ist verkehrt, wenn die davor stehende Formel eingeblendet ist!',
                    '\\bold{Forschungsideen}',
                    '• Das Pascal-Sierpinski-Dreieck ist eine Geometrie, in der Primzahlen ein außergewöhnliche Rolle spielen.\\footnote{Vgl. \\cite{Plichta:GottesGeheimeFormel:1995}, S. 263ff., 271ff. 306ff.. \\\\ Internet: \\\\ Vgl. \\jump[https://de.wikipedia.org/w/index.php?title=Sierpinski-Dreieck&oldid=179105092#Zusammenhang_mit_dem_Pascalschen_Dreieck]{}{Wikipedia, Sierpinski-Dreieck, Zusammenhang mit dem Pascalschen Dreieck}.}',
                    ))), */
                      
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
                                           
                'Motivation')),
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
                  
                  array( 'equations',
                    array( equ_text_std => 'OT.Home', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a + 1  :=  ^{\odot 0}a  :=  a^{\odot 0}b  }'),
                      array( display => 'on',  latex => '{  a + b  :=  a^{\odot 1}b  }'),
                      array( display => 'on',  latex => '{  a \cdot b  :=  a^{\odot 2}b  }'),
                      array( display => 'on',  latex => '{  a^{b}  :=  a^{\odot 3}b  }'),
                    ))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Home', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a + 1  :=  ^{\llcorner 0}a  :=  a^{\llcorner 0}b  }'),
                      array( display => 'on',  latex => '{  a + b  :=  a^{\llcorner 1}b  }'),
                      array( display => 'on',  latex => '{  a \cdot b  :=  a^{\llcorner 2}b  }'),
                      array( display => 'on',  latex => '{  a^{b}  :=  a^{\llcorner 3}b  }'),
                    ))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Home', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a + 1  :=  ^{\llangle 0}a  :=  a^{\llangle 0}b  }'),
                      array( display => 'on',  latex => '{  a + b  :=  a^{\llangle 1}b  }'),
                      array( display => 'on',  latex => '{  a \cdot b  :=  a^{\llangle 2}b  }'),
                      array( display => 'on',  latex => '{  a^{b}  :=  a^{\llangle 3}b  }'),
                    ))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Home', equ_autonum_reset => true, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  a + 1  :=  ^{\llangle 0 \rrangle}a  :=  a^{\llangle 0 \rrangle}b  }'),
                      array( display => 'on',  latex => '{  a + b  :=  a^{\llangle 1 \rrangle}b  }'),
                      array( display => 'on',  latex => '{  a \cdot b  :=  a^{\llangle 2 \rrangle}b  }'),
                      array( display => 'on',  latex => '{  a^{b}  :=  a^{\llangle 3 \rrangle}b  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a \cdot b *) + a  :=  a \cdot *( b + 1 *)  }'),
                      array( display => 'on',  latex => '{  a^{b} \cdot a  :=  a^{b + 1}  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a^{\odot *( x + 1 *)}b *)^{\odot x}a  :=  a^{\odot *( x + 1 *)}*( b + 1 *)  }'),
                      array( display => 'on',  latex => '{  *( a^{\odot *( ^{\odot 0}x *)}b *)^{\odot x}a  :=  a^{\odot *( ^{\odot 0}x *)}*( ^{\odot 0}b *)  }'),
                    ))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a^{\llcorner *( x + 1 *)}b *)^{\llcorner x}a  :=  a^{\llcorner *( x + 1 *)}*( b + 1 *)  }'),
                      array( display => 'on',  latex => '{  *( a^{\llcorner *( ^{\llcorner 0}x *)}b *)^{\llcorner x}a  :=  a^{\llcorner *( ^{\llcorner 0}x *)}*( ^{\llcorner 0}b *)  }'),
                    ))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a^{\llangle *( x + 1 *)}b *)^{\llangle x}a  :=  a^{\llangle *( x + 1 *)}*( b + 1 *)  }'),
                      array( display => 'on',  latex => '{  *( a^{\llangle *( ^{\llangle 0}x *)}b *)^{\llangle x}a  :=  a^{\llangle *( ^{\llangle 0}x *)}*( ^{\llangle 0}b *)  }'),
                    ))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{  *( a^{\llangle x + 1 \rrangle}b *)^{\llangle x \rrangle}a  :=  a^{\llangle x + 1 \rrangle}*( b + 1 *)  }'),
                      array( display => 'on',  latex => '{  *( a^{\llangle ^{\llangle 0 \rrangle}x \rrangle}b *)^{\llangle x \rrangle}a  :=  a^{\llangle ^{\llangle 0 \rrangle}x \rrangle}*( ^{\llangle 0 \rrangle}b *)  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                  array( 'equations',
                    array( equ_text_std => 'OT.Home', equ_autonum_reset => false, latex_tech => 'MathJax', equ_list => array(
                      array( display => 'on',  latex => '{   ^{\llangle x \rrangle}2^{\llangle x \rrangle}2  :=  4  }'),
                    ))),
                  array( 'text', array( text => array(
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n".
                    'XXX'."\n"))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn'),
                    )),
                )
          ); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
