<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:nSOSa:Programm'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:nSOSa:Home'); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '\bold{X}',
                    // '• X',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Wir beginnen nun unser Angebot an Vorträgen, Workshops und Kursen langsam aufzubauen.'."\n".
                    'Nachfolgend nach Themenfeldern geordnet.'."\n".
                    ''))),
                  /* array( 'headline', array( jump_name => 'OM:nSOSa:Programm:Vortext:X', text =>
                      
                'Der Care-Prozess im ›Spannungsspiel des Lebens‹', subline =>
                  'Eine analytische Gedanken- und Wissensreise, die unser Hier und Jetzt mit Mythologien und Religionen verbindet')),
                  array( 'text', array( text => array(
                  '\condb{Workshop in drei Teilen} \\\\'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))), */
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>
          

		    	<!  • ›Spannungsspiel des Lebens‹  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens',
              'Yes, We Care! — Ja, wir fürsorgen!', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:nSOSa:Home', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '• \color{*Bearb}{(In Arbeit …)}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Zum ›Spannungsspiel des Lebens‹ haben wir folgendes im Angebot:'."\n".
                    ''))),
                  array( 'headline', array( jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:X', text =>

                '\italic{Vorträge}', subline =>
                  '')),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Positive-Vision-Zukunft'),
                      array(  jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Lebensnahes-Verstaendnis-Yin-Yang'),
                      array(  jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Wechselspiel-Bewusstsein-und-Unterbewusstsein-Heilung-Phoenix-Psychosomatik'),
                      array(  jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Helix-Spirale-Zeit-Mythologien-Religionen-Wissenschaft'),
                    )),

                  array( 'headline', array( jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:X', text =>

                '\italic{Workshops}', subline =>
                  '')),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Yin-und-Yang-kurz'),
                      array(  jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Yin-und-Yang-lang-mit-Kind'),
                    )),


                  array( 'headline', array( horizontalLineBefore => true, jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Positive-Vision-Zukunft', text =>
                      
                'Eine positive Vision für unsere Zukunft', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Mein Anliegen ist, euch zu zeigen, dass die alten Weisheiten der Mythen und Religionen für uns heute immer noch eine wichtige Bedeutung haben,'."\n".
                    'wenn wir sie mit unserem modernen Wissen, unserer modernen Wissenschaft, verbinden.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Informationen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Impulsvortrag',
                        'Dauer: 1 bis 1,5 Stunden',
                        'inklusive anschließendem Dialog mit den Zuhörern',
                        'Vortragsmanuskript: \jump[https://nsosp.org/download/Yunite-Impulsvortrag-20230920-1700/Eine-positive-Vision-fuer-unsere-Zukunft-Impulsvortrag-Spannungsspiel-des-Lebens-20230920-3-mit-Links.pdf]{}{als PDF}',
                    ))),
                      
                  array( 'fade-in-area', array( Display => 'hideContent', jumpName => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Positive-Vision-Zukunft:X',
                Title => 'Vortragsmanuskript als Text …',
                TitleVis => 'Vortragsmanuskript als Text:', ParagraphList => array(

                  array( 'headline', array( jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Positive-Vision-Zukunft:X', text =>
                      
                'Einleitung', subline =>
                  '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Hallo ihr Lieben!'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Willkommen zum Impulsvortrag:'."\n".
                    '\italic{ › Eine positive Vision für unsere Zukunft ‹}'."\n".
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Mein Name ist Wolfgang Huß.'."\n",
                    'Ich halte nun einen kurzen hoffentlich anregenden Vortrag.'."\n",
                    'Anschließend freu ich mich über eure Verständnisfragen zum Vortrag.'."\n",
                    'Danach soll es dann einen Dialog darüber geben.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Mein Anliegen ist, euch zu zeigen, dass die alten Weisheiten der Mythen und Religionen für uns heute immer noch eine wichtige Bedeutung haben, wenn wir sie mit unserem modernen Wissen, unserer modernen Wissenschaft, verbinden.'."\n",
                    'Ich möchte euch eine Perspektive vorstellen, wie wir uns noch klarer bewusst werden können, worum sich nach meiner Meinung unser Leben dreht.'."\n",
                    'Was unser Leben im Besonderen ausmacht.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Wenn wir das noch besser verstehen, gewinnen wir Orientierung und ein gemeinsames Anliegen für alle Menschen.'."\n",
                    'Wir können uns miteinander verbinden und an diesem Anliegen gemeinsam arbeiten.'."\n",
                    'Dadurch schaffen wir Zusammenhänge in unserem Leben, die für uns alle mehr Sinn stiften.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Ich habe mich in den letzten Jahren viel mit Yoga, Naturphilosophie, Mythologie, Religion, Psychologie und Psychosomatik beschäftigt.'."\n",
                    'Seit Jahrzehnten auch mit Physik und Mathematik.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Dabei ist mir nach und nach immer klarer geworden:'."\n",
                    'Unsere Vorfahren, unsere Ahnen, hatten eine gute Idee, eine Ahnung, davon, worum sich unser Leben dreht.'."\n",
                    'Manche von ihnen waren nämlich sehr klug und wussten, worauf es im Leben ankommt.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Unsere Aufgabe ist für mich, herauszufinden, was das wichtige alte Wissen ist und wie wir es in unsere Gegenwart und Zukunft bringen können.'."\n",
                    'Wie wir die alten Begriffe adaptieren können, um sie mit unserer heutigen Sicht auf die Welt zu verbinden.'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Positive-Vision-Zukunft:X', text =>
                      
                'Hauptteil', subline =>
                  '')),
                  array( 'text', array( intent => '0em', text => array(
                    'Wir können dieses Wissen nur in die heutige Zeit bringen, wenn es uns gelingt, es mit der Lebensrealität der heutigen Menschen in einen sinnvollen Zusammenhang zu bringen.'."\n",
                    'Nur, wenn es uns gelingt für uns im Hier und Jetzt einen Mehrwert für uns alle daraus zu schöpfen, werden sich die Menschen für dieses Wissen interessieren, es anwenden und auch pflegen.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Ein sehr bekanntes altes Symbol ist das Yin und Yang des Daoismus.'."\n",
                    'Es steht für das männliche und weibliche Prinzip; für eine Dualität.'."\n",
                    'Heute wird das Yin und Yang nur selten tiefer hinterfragt und ist daher oft ein eher oberflächliches Symbol, was viele Menschen kaum tiefer erklären können.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Dies kommt auch daher, weil viele heute unter männlich und weiblich eher das Geschlecht verstehen und weniger ein Naturprinzip.'."\n",
                    'Viele tun sich schwer, dies auf interessante Zusammenhänge unseres Lebens oder es gar auf die heutige Wissenschaft anzuwenden.'."\n",
                    'So ging es mir auch.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Einen für mich sehr entscheidenden Zusammenhang finden wir real in der Struktur unseres Gehirns.'."\n",
                    'Unsere linke Hirnhälfte ist auf Rationalität und auf Handlungen spezialisiert.'."\n",
                    'Unsere rechte Hirnhälfte ist hingegen auf Gefühle spezialisiert.'."\n",
                    'Dies finden wir auch in einigen Benennungen und Symbolen unserer Vorfahren wieder:'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Der Begriff Hatha Yoga kommt aus dem Tantra und steht für Ha, die Sonne, und Tha, den Mond, was auf das männlich-weibliche Prinzip anspielt.'."\n",
                    'Hatha zusammen steht dabei übrigens für Kraft, Gewalt, Ausdauer, Hartnäckigkeit oder Energie.'."\n",
                    'Im Hatha Yoga – und sicher im Yoga allgemein – geht es u.a. darum, das männlich-weibliche Prinzip in unserem Geist und unserem Körper in eine Balance zu bringen.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Wie können wir dies nun in Bezug auf unsere Gehirnhälften verstehen?'."\n",
                    'Wir können einmal schauen, wie unser moderner Begriff der Psychologie definiert ist.'."\n",
                    'Psychologie bedeutet soviel wie ›persönliches Verhalten und Erleben‹.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Darin findet sich nämlich die Spezialisierung unserer Gehirnhälften wieder:'."\n",
                    'Unser Erleben können wir als unsere Gefühle verstehen, als das weibliche Prinzip.'."\n",
                    'Wir finden unser Erleben, als weibliches Prinzip, in unserer rechten Gehirnhälfte wieder.'."\n",
                    'Unser Verhalten können wir als unsere Rationalität – im Sinne von Denken – und als Handlungen verstehen, als männliches Prinzip.'."\n",
                    'Wir finden unser Verhalten, als männliches Prinzip, also in unserer linken Gehirnhälfte wieder.'."\n",
                    'Demnach geht es im Hatha Yoga, hier mit Ha und Tha oder Yin und Yang ausgedrückt, schon seit alters her unter andrem darum, das Erleben und Verhalten unserer Psyche in Balance zu bringen.'."\n",
                    'Oder im Hinblick auf unsere Gehirnhälften ist es für ein gutes Leben wichtig, unsere Gefühle und Handlungen auszubalancieren.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Es ist interessant und in meinen Augen wertvoll, auch mal auf diese Weise auf unser Leben zu schauen.'."\n",
                    'Unsere Vorfahren wussten eben schon sehr genau, wie wir Menschen funktionieren; wie Leben funktioniert.'."\n",
                    'Sie haben diesen Zusammenhang nur anderes zum Ausdruck gebracht.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Versuchen wir näher zu verstehen, was dort vor sich geht, dann können wir weiteres entdecken.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Es geht dabei nämlich um einen Prozess.'."\n",
                    'Heute nennen wir diesen Prozess zum Beispiel Persönlichkeitsentwicklung.'."\n",
                    'Früher war der Prozess den Menschen beispielsweise als Kundalini Prozess des Kundalini Yoga, Veredelung oder ›Erkenne dich selbst‹ bekannt.'."\n",
                    'Was wir erlangen, wenn wir durch diesen Prozess gehen, oder gegangen sind, wurde und wird als Christus-Bewusstsein, Weisheit, Selbst- und Nächstenliebe, Fürsorge, Mitmenschlichkeit oder Erleuchtung ausgedrückt.'."\n",
                    'Wir finden in den Mythen und Religionen der Welt viele Ausdrücke, Bilder und Symbole dafür.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Auch mit unserer modernen Wissenschaft lässt sich dieser Prozess verbinden.'."\n",
                    'Nicht nur in der Psychologie.'."\n",
                    'Wenn wir etwas ganzheitlicher schauen, dann entdecken wir mehr Gebiete, die damit im Zusammenhang stehen.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Wir finden den Prozess auch in der Psychosomatik widergespiegelt, wo er uns besser verstehen lässt, um was es da eigentlich geht.'."\n",
                    'Damit ist er zutiefst mit der alternativen und der Schulmedizin verknüpft.'."\n",
                    'Und wir können ihn sogar im Rahmen der Biologie als Care-Prozess oder Achtsamkeitsprozess verstehen.'."\n",
                    'Aus dieser Perspektive handelt es sich dabei um einen ganz grundlegenden biologischen Regelprozess der Menschen.'."\n",
                    'Und auch der Lebewesen im Allgemeinen.'."\n",
                    'Dieser beinhaltet eben ebenso den Lernprozess, die Persönlichkeitsentwicklung und den Heilungsprozess, die uns befähigen, uns selber zu helfen, uns selber zu heilen.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Es handelt sich also um etwas ganz besonderes.'."\n",
                    ''))),
                  array( 'headline', array( jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Positive-Vision-Zukunft:X', text =>
                      
                'Folgerung', subline =>
                  '')),
                  array( 'text', array( intent => '0em', text => array(
                    'In meinen Augen haben wir hier so etwas wie den ›Heiligen Gral‹ oder den ›Stein der Weisen‹ unser aller Leben zu fassen.'."\n",
                    'Unser Leben dreht sich demnach darum:'."\n",
                    'Wenn wir uns um uns selber kümmern – wenn wir verstehen wer wir sind –, uns um unsere Lieben kümmern und uns um unsere Mitmenschen und unsere Umwelt kümmern, dann können wir immer wieder Glück erfahren.'."\n",
                    'Das ist die Weisheit dahinter.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Es gibt also eine Brücke zwischen dem alten Wissen und unserem heutigen Leben, die uns alle verbindet.'."\n",
                    'Wenn wir das verstehen und jeder sich in seinem Leben erforscht – und wir den Weg dieser Forschung miteinander immer weiter vorangehen, dann macht unser Leben mehr Sinn.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Das alte Wissen – unsere Mythen und Religionen – haben einen tieferen Sinn, den wir gemeinsam wieder schöpfen sollten.'."\n",
                    'All dies ist enger mit unserer modernen Wissenschaft verknüpft, als viele Menschen heute glauben.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Es gibt eine Perspektive auf unser Leben, die uns befähigt, die wichtigen Dinge zu erkennen, kluge Entscheidungen zu fällen und den Weg für eine gute Zukunft zu bereiten.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Lasst uns gemeinsam daran arbeiten, mit diesem Wissen – auf seiner Basis – eine Welt zu erschaffen, in der wir leben wollen und glücklich leben können.'."\n",
                    'Lasst uns miteinander verbinden und daran weiter neugierig forschen und diese Erkenntnisse zusammen weiter entwickeln.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Ein guter Freund, mit dem ich über den Sinn des Lebens gesprochen habe, sagte mir einmal sinngemäß:'."\n",
                    ''))),

                  array( 'text', array( Shape  => 'quote', text => array(
                        'Wieso, — Pause — das ist doch ganz einfach!'."\n".
                        ' Unser Leben macht dann Sinn, wenn all die Dinge in unserem Leben miteinander verbunden sind!'."\n".
                        ''),
                        addtext => '')),

                  array( 'text', array( intent => '0em', text => array(
                    'Ich habe das auf mich wirken lassen und gebe ihm recht.'."\n",
                    ''))),
                  array( 'text', array( intent => '0em', text => array(
                    'Vielen Dank für eure Aufmerksamkeit!'."\n",
                    ''))),

                    ))),

                  array( 'text', array( text => array(
                    'Vertiefende Informationen auf den Themenseiten:'."\n".
                    ''))),
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:HaTha'),
                      array(  jump_name => 'OM:NPYo:Stein-der-Weisen'),
                      array(  jump_name => 'OM:NPYo:ExistenzLeichtigkeit'),
                      array(  jump_name => 'OM:NPYo:Spiritualitaet-Psychologie'),
                      array(  jump_name => 'OM:NPYo:WasUnterschiedYogaSport'),
                      array(  jump_name => 'OM:SpaLeb:Home'),
                      array(  jump_name => 'OM:SpaLeb:Care-Prozess'),
                      array(  jump_name => 'OM:SpaLeb:Psychosomatik'),
                    )),


                  array( 'headline', array( horizontalLineBefore => true, jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Lebensnahes-Verstaendnis-Yin-Yang', text =>
                      
                'Ein lebensnahes Verständnis von Yin und Yang, Sonne und Mond, dem Prinzip des Geschlechts', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ich möchte mit euch gerne auf eine analytische Gedanken- und Wissensreise durch die Mythologien und Religionen gehen,'."\n".
                    'mit deren Erkenntnis wir zurückkehren und dieses Wissen für uns fruchtbar machen.'."\n",
                      'Auf unserer Reise schauen wir auf einer Metaebene nach bestimmten Aspekten.'."\n".
                    'Wir sehen, wo wir dabei der weiblich-männlichen Dualität, wie Yin und Yang oder Mond und Sonne, begegnen und in welchen Fassetten diese auftritt.'."\n".
                    'Dabei können wir auch erkennen, dass aus diesen Aspekten „heilige Kinder“ oder „Gotteskinder“ „geboren“ oder geschöpft werden.'."\n",
                      'Wir analysieren, dass die weiblich-männliche Dualität oft für unsere Gefühle (Bedürfnisse) und unsere Handlungen (Taten) steht.'."\n".
                    'Und das daraus geborene „heilige Kind“ steht für Lernen, Persönlichkeitsentwicklung, Gedeihen, Klugheit, Gesundheit, Fürsorge, Liebe – eben für ein gutes Leben.'."\n".
                    'Daraus entwickeln wir ein wissenschaftliches Modell der Psychosomatik, dass ich Care-Prozess oder Achtsamkeitsprozess nenne.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Etappen unserer Reise:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '1. Beispiele für die weiblich-männliche Dualität \\\\'."\n".
                    '2. Paarungen weiblich-männlicher Dualität bringen „Kinder“ hervor \\\\'."\n".
                    '3. Gefühl, Handlung und Entwicklung als besondere Dreifaltigkeit \\\\'."\n".
                    '4. Die Realität der besonderen Dreifaltigkeit \\\\'."\n".
                    '5. Ein neues Modell als Grundlage der Psychosomatik und Medizin \\\\'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Eckdaten:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Impulsvortrag',
                        'Dauer: 1 bis 1,5 Stunden',
                        'inklusive anschließendem Dialog mit den Zuhörern',
                        'Vortragsmanuskript: \jump[https://nsosp.org/download/NSOSA/Spannungsspiel-des-Lebens/Ein-lebensnahes-Verstaendnis-von-Yin-und-Yang-Sonne-und-Mond-dem-Prinzip-des-Geschlechts-202502-1.9-kurz.pdf]{}{als PDF}',
                        'Vortrags-Video: \jump[https://www.youtube.com/watch?v=JV0igRBnQUM&list=PLagK1_ZceisExXuPb-fg-UbghOBuRC46v]{}{Ein lebensnahes Verständnis von Yin und Yang, Sonne und Mond, dem Prinzip des Geschlechts}',
                    ))),
                  array( 'text', array( text => array(
                    'Vertiefende Informationen auf den Themenseiten:'."\n".
                    ''))),
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:HaTha'),
                      array(  jump_name => 'OM:NPYo:Stein-der-Weisen'),
                      array(  jump_name => 'OM:NPYo:ExistenzLeichtigkeit'),
                      array(  jump_name => 'OM:NPYo:Spiritualitaet-Psychologie'),
                      array(  jump_name => 'OM:NPYo:WasUnterschiedYogaSport'),
                      array(  jump_name => 'OM:SpaLeb:Home'),
                      array(  jump_name => 'OM:SpaLeb:Care-Prozess'),
                      array(  jump_name => 'OM:SpaLeb:Psychosomatik'),
                      array(  jump_name => 'OM:SpaLeb:Bewusstsein'),
                      array(  jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:OntologieDualitaetAllgemein'),
                      array(  jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:UnsereExistenzDurchPsychosomatik'),
                    )),


                  array( 'headline', array( horizontalLineBefore => true, jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Wechselspiel-Bewusstsein-und-Unterbewusstsein-Heilung-Phoenix-Psychosomatik', text =>
                      
                'Dem Wechselspiel von Bewusstsein und Unterbewusstsein entspringt unsere Heilung – vom Phönix aus der Asche zur Psychosomatik', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ich möchte mit euch gerne auf eine analytische Gedanken- und Wissensreise durch die Mythologien und Religionen gehen, mit deren Erkenntnis wir zurückkehren und dieses Wissen für uns fruchtbar machen.'."\n",
                      'Auf unserer Reise untersuchen wir die Mythologien und Religionen wieder von einer Metaebene und schauen, was sie verbindet:'."\n".
                    'Diesmal bezüglich weiterer geometrischer Dimensionen und ihrer Bedeutung, im Besondern Oben und Unten.'."\n",
                      'Uns beschäftigen die Fragen:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Was hat der weiblich-männliche Dualismus und das „heilige Kind“ mit unserem Bewusstsein und Unterbewusstsein zu tun?',
                        'Was hat dies mit unserer Heilung zu tun; mit Hoffnung und Glaube?',
                        'Wie integriert sich dies in unser neues Modells der Psychosomatik, in den neuen Care-Prozess oder Achtsamkeitsprozess?',
                        'Wie können wir das „heilige Kind“ als Beseelung oder Hauchung – Leben einhauchend – verstehen?',
                    ))),
                  array( 'text', array( text => array(
                    'So bauen wir über unser Verständnis, was die Mythologien und Religionen verbindet, eine wertvolle Brücke in unsere Gegenwart, in unser heutiges Leben und in unsere Wissenschaft.'."\n",
                      'Zu allen Zeiten mussten die Menschen altes Wissen in ihre Gegenwart transformieren und mit neuem ergänzen, um Aktualität herzustellen und es so nicht zu verlieren.'."\n".
                    'Es ging den alten Ägyptern, Griechen und Römern ganz sicher damals nicht anders.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Etappen unserer Reise:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '1. Weitere Dimensionen der Dualität und Trinität in unserem Körper \\\\'."\n".
                    '2. Der Phönix aus der Asche \\\\'."\n".
                    '3. Das Wechselspiel von Bewusstsein und Unterbewusstsein \\\\'."\n".
                    '4. Den großen Drachen besiegen, die alte Schlange – unsere Angst \\\\'."\n".
                    '5. Unsere Heilung – immer eine Selbstheilung \\\\'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Eckdaten:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Impulsvortrag',
                        'Dauer: 1 bis 1,5 Stunden',
                        'inklusive anschließendem Dialog mit den Zuhörern',
                        'Vortragsmanuskript: \jump[https://nsosp.org/download/NSOSA/Spannungsspiel-des-Lebens/Dem-Wechselspiel-von-Bewusstsein-und-Unterbewusstsein-entspringt-unsere-Heilung-vom-Phoenix-aus-der-Asche-zur-Psychosomatik-202502-3.3-Vortrag.pdf]{}{als PDF}',
                        'Vortrags-Video: \jump[https://www.youtube.com/watch?v=jwKjOlLx29k&list=PLagK1_ZceisExXuPb-fg-UbghOBuRC46v&index=4]{}{Dem Wechselspiel von Bewusstsein und Unterbewusstsein entspringt unsere Heilung – vom Phönix aus der Asche zur Psychosomatik}',
                    ))),
                  array( 'text', array( text => array(
                    'Vertiefende Informationen auf den Themenseiten:'."\n".
                    ''))),
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:HaTha'),
                      array(  jump_name => 'OM:NPYo:Stein-der-Weisen'),
                      array(  jump_name => 'OM:NPYo:ExistenzLeichtigkeit'),
                      array(  jump_name => 'OM:NPYo:Spiritualitaet-Psychologie'),
                      array(  jump_name => 'OM:NPYo:WasUnterschiedYogaSport'),
                      array(  jump_name => 'OM:SpaLeb:Home'),
                      array(  jump_name => 'OM:SpaLeb:Care-Prozess'),
                      array(  jump_name => 'OM:SpaLeb:Psychosomatik'),
                      array(  jump_name => 'OM:SpaLeb:Bewusstsein'),
                      array(  jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:OntologieDualitaetAllgemein'),
                      array(  jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:UnsereExistenzDurchPsychosomatik'),
                    )),


                  array( 'headline', array( horizontalLineBefore => true, jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Helix-Spirale-Zeit-Mythologien-Religionen-Wissenschaft', text =>
                      
                'Die Helix-Spirale. Die Zeit in Mythologien, Religionen und Wissenschaft', subline =>
                  '')),
                  array( 'text', array( text => array(
                    'Ich möchte mit euch jetzt auf eine analytische Gedanken- und Wissensreise gehen, mit deren Erkenntnissen wir zurückkehren und dieses Wissen für uns fruchtbar machen.'."\n",
                      'Auf unserer Reise untersuchen wir die Mythologien und Religionen wieder von einer Metaebene und schauen, was sie verbindet:'."\n",
                      'Diesmal bezüglich des Zusammenhangs der Dinge, der dadurch erweiterten Beseelung und der geometrischen Bezüge und Dimensionen, die dadurch entstehen, sowie, was dies alles mit der Zeit und ihrer Helix-Spiralform zu tun hat.'."\n",
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Heute möchte ich mit euch die dualen und ternären Aspekte der Zeit erforschen.',
                        'Die Zeit hat für unser Leben, und so natürlich auch für unsere Ahnen, eine ganz besondere Bedeutung.',
                        'Beleuchten wir die Aspekte der Zeit naturphilosophisch, dann offenbart sich uns ein dynamisches Prinzip der Grundstruktur unserer Welt, dass auf Stabilität und Fortentwicklung beruht, wie auch auf den Wegen des Schicksals; unseren Entscheidungen.',
                        'Dabei handelt es sich im Grunde um eine dynamische Heilige Geometrie.',
                        'Um dies zu verstehen, möchte ich damit beginnen, die spirituelle Magie der Geometrie zu beleuchten.',
                    ))),
                  array( 'text', array( text => array(
                    'So bauen wir über unser Verständnis, was die Mythologien und Religionen verbindet, eine wertvolle Brücke in unsere Gegenwart, in unser heutiges Leben und in unsere Wissenschaft.'."\n",
                      'Zu allen Zeiten mussten die Menschen altes Wissen in ihre Gegenwart transformieren und mit neuem ergänzen, um Aktualität herzustellen und es so nicht zu verlieren. Es ging den alten Ägyptern, Griechen und Römern ganz sicher damals nicht anders.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Etappen unserer Reise:'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    '1. Der Ring und die spirituelle Magie der Geometrie \\\\'."\n".
                    '2. Gemeinsamer Dialog Ⅰ \\\\'."\n".
                    '3. Das altägyptische duale Zeitverständnis und die Physik \\\\'."\n".
                    '4. Die Trinität oder Dreifaltigkeit der Veränderung und der Zeit \\\\'."\n".
                    '5. Gemeinsamer Dialog Ⅱ \\\\'."\n".
                    '6. Die Trimurti und das Licht \\\\'."\n".
                    '7. Das Schicksal als Weg, Weggabelung und Schwelle – die Transformation \\\\'."\n".
                    '8. Das Zusammenwirken der Aspekte der Zeit zu neuem Verständnis der Welt \\\\'."\n".
                    ''))),
                  array( 'text', array( text => array(
                    'Eckdaten:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Impulsvortrag',
                        'Dauer: 1,5 bis 2 Stunden',
                        'inklusive anschließendem Dialog mit den Zuhörern',
                        'Vortragsmanuskript: \jump[https://nsosp.org/download/NSOSA/Spannungsspiel-des-Lebens/Die-Helix-Spirale-Die-Zeit-in-Mythologien–Religionen-und–Wissenschaft-202502-6.4.pdf]{}{als PDF}',
                        'Vortrags-Video: \jump[https://www.youtube.com/watch?v=joyy7i-f6Rw&list=PLagK1_ZceisExXuPb-fg-UbghOBuRC46v&index=7]{}{Die Helix-Spirale. Die Zeit in Mythologien, Religionen und Wissenschaft}',
                    ))),
                  array( 'text', array( text => array(
                    'Vertiefende Informationen auf den Themenseiten:'."\n".
                    ''))),
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:HaTha'),
                      // array(  jump_name => 'OM:NPYo:Stein-der-Weisen'),
                      array(  jump_name => 'OM:NPYo:ExistenzLeichtigkeit'),
                      // array(  jump_name => 'OM:NPYo:Spiritualitaet-Psychologie'),
                      // array(  jump_name => 'OM:NPYo:WasUnterschiedYogaSport'),
                      array(  jump_name => 'OM:SpaLeb:Home'),
                      array(  jump_name => 'OM:SpaLeb:Care-Prozess'),
                      array(  jump_name => 'OM:SpaLeb:Psychosomatik'),
                      // array(  jump_name => 'OM:SpaLeb:Bewusstsein'),
                      array(  jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:OntologieDualitaetAllgemein'),
                      array(  jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:UnsereExistenzDurchPsychosomatik'),
                      array(  jump_name => 'OM:FrQFT:Home', title_site => 'Fraktale Quanten-Fluss-Theorie'),
                      array(  jump_name => 'OM:FrQFT:Elementarteilchen'),
                      array(  jump_name => 'OM:FrQFT:Lepton'),
                      array(  jump_name => 'OM:FrQFT:Quantenchromodynamik:FarbPolUndLadung:Fig-UnpolPhotFarbpol6pol', title_site => 'Vektorgleichgewicht in der Quantenchromodynamik (Hadronen-Modell)'),
                      array(  jump_name => 'OM:FrQFT:Quantengravitation'),
                    )),


                  array( 'headline', array( horizontalLineBefore => true, jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Yin-und-Yang-kurz', text =>
                      
                'Yin und Yang, Sonne und Mond in Mythologie und Wissenschaft \italic{– das Prinzip des Geschlechts}', subline =>
                  'Der Care-Prozess im ›Spannungsspiel des Lebens‹')),
                  array( 'text', array( text => array(
                    'Eine analytische Gedanken- und Wissensreise, die unser Hier und Jetzt sowie die heutige Wissenschaft mit Mythologien und Religionen verbindet.'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Workshop in drei Teilen',
                        'Dauer: 1,5 Stunden',
                        'intensiver Einbezug der Teilnehmer',
                        'viele Frage-Antwort-Teile wie auch Dialoge',
                        'Handout: \jump[https://nsosp.org/download/NSOSA/Spannungsspiel-des-Lebens/Yin-und-Yang-Sonne-und-Mond-in-Mythologie-und-Wissenschaft-202411-5.pdf]{}{als PDF}',
                    ))),
                  array( 'text', array( text => array(
                    'Vertiefende Informationen auf den Themenseiten:'."\n".
                    ''))),
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:HaTha'),
                      array(  jump_name => 'OM:NPYo:Stein-der-Weisen'),
                      array(  jump_name => 'OM:NPYo:ExistenzLeichtigkeit'),
                      array(  jump_name => 'OM:NPYo:Spiritualitaet-Psychologie'),
                      array(  jump_name => 'OM:NPYo:WasUnterschiedYogaSport'),
                      array(  jump_name => 'OM:SpaLeb:Home'),
                      array(  jump_name => 'OM:SpaLeb:Care-Prozess'),
                      array(  jump_name => 'OM:SpaLeb:Psychosomatik'),
                    )),


                  array( 'headline', array( horizontalLineBefore => true, jump_name => 'OM:nSOSa:Programm:Spannungs-Spiel-des-Lebens:Yin-und-Yang-lang-mit-Kind', text =>
                      
                'Yin und Yang, Sonne und Mond sowie die Dreifaltigkeit in Mythologie und Wissenschaft \italic{– das Prinzip des Geschlechts und das daraus „geborene göttliche Kind“}', subline =>
                  'Der Care-Prozess im ›Spannungsspiel des Lebens‹')),
                  array( 'text', array( text => array(
                    'Eine analytische Gedanken- und Wissensreise, die unser Hier und Jetzt sowie die heutige Wissenschaft mit Mythologien und Religionen verbindet.'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Workshop in vier Teilen',
                        'Dauer: 2 bis 2,5 Stunden',
                        'intensiver Einbezug der Teilnehmer',
                        'viele Frage-Antwort-Teile wie auch Dialoge',
                    ))),
                  array( 'text', array( text => array(
                    'Vertiefende Informationen auf den Themenseiten:'."\n".
                    ''))),
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:HaTha'),
                      array(  jump_name => 'OM:NPYo:Stein-der-Weisen'),
                      array(  jump_name => 'OM:NPYo:ExistenzLeichtigkeit'),
                      array(  jump_name => 'OM:NPYo:Spiritualitaet-Psychologie'),
                      array(  jump_name => 'OM:NPYo:WasUnterschiedYogaSport'),
                      array(  jump_name => 'OM:SpaLeb:Home'),
                      array(  jump_name => 'OM:SpaLeb:Care-Prozess'),
                      array(  jump_name => 'OM:SpaLeb:Psychosomatik'),
                      array(  jump_name => 'OM:SpaLeb:Bewusstsein'),
                      array(  jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:OntologieDualitaetAllgemein'),
                      array(  jump_name => 'OM:BiOrd:Einleitung:OntologischeDeutung:UnsereExistenzDurchPsychosomatik'),
                    )),


                  array( 'jumplist', array(
                      array(  jump_name => 'OM:nSOSa:Home'),
                    )),
              )
          ); ?>


			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
