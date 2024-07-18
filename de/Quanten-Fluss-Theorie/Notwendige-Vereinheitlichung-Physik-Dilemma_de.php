<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:FrQFT:NotwenVereinheit'); ?>

      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      ', 'OM:FrQFT:NeuePhysik:Ein-Prinzip-fuer-Alles'); ?>

	
          <?php To_f_Paragraph_list( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ',
                array(
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Aktuelle Fachdiskussion}',
                    '• Das starke CP-Problem scheint etwas sehr zentrales zu sein: Siehe Ordner ›starkes CP-Problem‹.',
                    '• Probleme in der heutigen Physik noch einmal aktuell beschrieben: \cite{Hossenfelder:DieQuantengravitationAufDemWegZurWissenschaft:2016}.',
                    '• Problem der fehlenden Supersymmetrie.\footnote{Sekundärliteratur: \\\\ Vgl. \cite{Wolchover:NeuePhysikOhneNeueTeilchen:2016}.}',
                    '• Problem des Überschusses der Materie gegenüber der Antimaterie.\footnote{Sekundärliteratur: \\\\ Vgl. \cite{Fischer:NeuerUnterschiedZwischenMaterieUndAntimaterie:2017}.}',
                    '• Hinweis auf neue Physik? Mögliche Verletzung der Leptonen-Universalität: Beim Zerfall von \lm{ B^{0} }-Mesonen entstehen Myonen möglicherweise etwas seltener als Elektronen.\footnote{Sekundärliteratur: \\\\ Vgl. \cite{Gast:HinweisAufNeuePhysik:2017}.}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Auf den ersten Blick erscheint Kritik an der heutigen Physik und das Streben nach „neuer“ Physik wie jammern auf hohem Niveau.'."\n".
                    'Denn in der heutigen Physik hat man zwei Haupttheorien, welche die allermeisten Beobachtungen sehr gut und zum Teil sogar extrem gut erklären\footnote{Bezüglich der QFT: \\\\ \const{FrQFT_g_footnote_text_QFTPruef}}\footnote{Bezüglich der ART: \\\\ \const{FrQFT_g_footnote_text_ARTPruef}}'."\n".
                    '– für die Teilchenphysik die Quantenfeldtheorie\footnote{\const{FrQFT_g_footnote_text_QFT}} und für die Gravitation'."\n".
                    'sowie den Kosmos die Allgemeine Relativitätstheorie\footnote{\const{FrQFT_g_footnote_text_ART}}.'."\n".
                    'Doch die Physik steckt derzeit in einem Dilemma, um nicht zu sagen in einer Krise.'."\n",
                      'Der Wunsch nach neuer Physik beruht vornehmlich auf zwei Gründen.'."\n".
                    'Zum einen vertragen sich die beiden Haupttheorien der Physik nicht gut miteinander.'."\n".
                    'Sie erscheinen sogar in Teilen als widersprüchlich.\footnote{\const{FrQFT_g_footnote_text_VereinhQMuARTProbl}} \\\\'."\n".
                    'Zum anderen gibt es tatsächlich einige Beobachtungen, die mit den beiden Haupttheorien nicht erklärt werden können, wie im Folgenden beschrieben wird.'."\n".
                    'Dazu gehören auch die rätselhaften Phänomene der \jump{OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Materie}{Dunklen Materie} und der \jump{OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Energie}{Dunklen Energie}.'."\n".
                    'Daraus muss gefolgert werden, dass man offensichtlich die Physik unserer Welt noch nicht richtig verstanden hat, und Physiker möchten die Welt natürlich verstehen.'."\n",
                      'Daher halte ich einen neuen Ansatz zum Verständnis der Physik für notwendig – eine \jump{OM:FrQFT:NeuePhysik}{›Neue Physik‹}.\footnote{\const{FrQFT_g_footnote_text_NotNeuePhysik}}'."\n".
                    'Dieses neue und einheitliche Prinzip der Physik muss die beiden Haupttheorien vereinheitlichen.\footnote{\const{FrQFT_g_footnote_text_VereinhQMuART}}'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Zeit'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Problem der Zeit  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:NotwenVereinheit:Problem-der-Zeit',
              'Ohne eine Lösung des ›Problems der Zeit‹ können Quantenmechanik und Allgemeine Relativitätstheorie nicht vereinheitlicht werden', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '• Darauf hinweisen, dass mit dem ›Problem der Zeit‹ auch der scheinbare Widerspruch zwischen der Zeit und der inneren Frequenz der Elementarteilchen verbunden ist …\\\\ Vgl. \cite{Giulini:EinsteinImQuantentest2013}, S. 64.',
                    '• Eine andere Perspektive auf das ›Problems der Zeit‹ besteht in der Betrachtung der scheinbar widersprüchlichen Veränderungen von Alterung und innerer Frequenz der Elementarteilchen'."\n".
                    'bei ihrer Bewegung durch ein variables Gravitationsfeld.\footnote{\cite{Giulini:EinsteinImQuantentest2013}, S. 63-64.}'."\n".
                    'Bewegt sich ein Elementarteilchen näher an eine große Masse heran, wo es einer höheren Gravitation ausgesetzt ist, so verlangsamt sich seine Alterung wohingegen sich seine innere Frequenz beschleunigt.'."\n".
                    'Die steigende Frequenz geht mit der steigenden Energie bei Annäherung an die anziehende Masse einher, so wie es im Pound-Rebka-Snider-Experiment\footnote{\const{FrQFT_g_footnote_text_PoundRebka}}'."\n".
                    'und verwandten Experimenten beobachtet wird.'."\n".
                    'Gemeinhin – also aus Perspektive der klassischen Physik – würde man eine Verringerung der Schwingungsfrequenz erwarten, wenn die Zeit langsamer läuft.',
                    '• Das Problem berührt genauso auch den scheinbaren Widerspruch zwischen der Alterung und der inneren Frequenz der Elementarteilchen.\footnote{\cite{Giulini:EinsteinImQuantentest2013}, S. 63-64.}'."\n".
                    'Wird die Alterung – also die variable Zeit der Allgemeinen Relativitätstheorie – durch eine steigende Gravitation verlangsamt, dann erhöht sich gleichzeitig die'."\n".
                    'innere Frequenz eines Elementarteilchens, weil seine Energie ansteigt.'."\n".
                    'Dabei würde man von einer klassischen Schwingung bei Verlangsamung der Zeit erwarten, dass sie in Zeitlupe abläuft, sich folglich auch verlangsamt.'."\n".
                    'Es handelt sich demnach offensichtlich nicht um eine klassische Schwingung.'."\n".
                    'Genau diese Eigenschaft der Elementarteilchen und des Vakuums unterscheidet die Quantenphysik von der klassischen Physik.'."\n".
                    'Grundsätzlich scheinen sich die Physiker derzeit darüber uneins, wie die Frequenz von Elementarteilchen mit der Alterungszeit im Gravitationsfeld genau im Zusammenhang steht.\footnote{\cite{Giulini:EinsteinImQuantentest2013}.}',
                    '• Warum muss zwischen diesen beiden Arten von Zeit unterschieden werden?'."\n".
                    'Die Physik kennt einen Zustand in dem die Alterung ganz oder nahezu zum Stillstand kommt, die Schwingungen der Quantenphysik\footnote{\const{FrQFT_g_footnote_text_Quantenphysik}} aber weiter bestehen.\color{*Bearb}{(Verweis)}'."\n".
                    'Dies ist auf dem Ereignishorizont eines \jump{OM:FrQFT:Gravitation:Schwarze-Loecher}{Schwarzen Lochs} der Fall.'."\n".
                    'Um dort und auch innerhalb eines Schwarzen Lochs Physik beschreiben zu können, ist es notwendig zwischen Zeit und Alterung zu unterscheiden.',
                    '• Aber auch die Quantenphysik benötigt eine absolute, unveränderliche Zeit, zum Beispiel um die Verschränkungen der Elementarteilchen koordinieren zu können.'."\n".
                    'Die Allgemeine Relativitätstheorie kommt hingegen nicht ohne einen variablen Zeitbegriff aus, je nach am Ort im Raum wirkender Gravitation, deshalb hier zur Abgrenzung Alterung genannt.'."\n".
                    'Dieser scheinbare Gegensatz spiegelt sich im \jump{OM:FrQFT:NotwenVereinheit:Problem-der-Zeit}{›Problem der Zeit‹} wider, in dem zum Ausdruck gebracht wird, dass sich die'."\n".
                    'Haupttheorien der heutigen Physik, die Quantentheorie\footnote{\const{FrQFT_g_footnote_text_Quantenphysik}} und die Allgemeine Relativitätstheorie, aufgrund ihres unterschiedlichen Verständnisses der Zeit nicht miteinander'."\n".
                    'verträglich sind.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Durch das ›Problem der Zeit‹\footnote{\const{FrQFT_g_footnote_text_ProblemDerZeit}} wird die Unverträglichkeit von Quantenmechanik'."\n".
                    'und Allgemeiner Relativitätstheorie auf einen Punkt gebracht.'."\n",
                      'Claus Kiefer bemerkt:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'quote', text => array(
                        'In der allgemeinen Relativitätstheorie bilden Raum und Zeit eng miteinander verknüpfte, dynamische Objekte.'."\n".
                        'Die Quantenmechanik beruht dagegen auf Newtons absoluter Zeit.'."\n".
                        ''),
                        addtext => '\footnote{\cite{Kiefer:WegZurQG2012}, S. 37.}')),

                  array( 'text', array( text => array(
                    'Mit anderen Worten:'."\n".
                    'Die Allgemeine Relativitätstheorie beruht auf einer flexiblen Zeit, weil ihre Zeit an jedem Ort im Raum unterschiedlich schnell abläuft, je nach dortigem Gravitationseinfluss.'."\n".
                    'Wohingegen die Quantenmechanik auf einer Zeit beruht, die an jedem Ort im Raum gleich schnell abläuft.'."\n",
                      'Lee Smolin äußert dazu:'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'quote', text => array(
                        'Mehr und mehr habe ich das Gefühl, dass sich Quantentheorie und allgemeine Relativitätstheorie in Bezug auf das Wesen der Zeit in schwerem Irrtum befinden.'."\n".
                        ''),
                        addtext => '\footnote{\cite{Smolin:ZukunftPhysik2009}, Kap. 15 Die Physik nach der Stringtheorie, S. 322-347, hier S. 344.} \color{*Bearb}{(Gibt es im Zitat auch eine Begründung für sein Gefühl?)}')),

                  array( 'text', array( text => array(
                    'Um eine \jump{OM:FrQFT:NeuePhysik:Loesungsansatz}{Lösung des Problems der Zeit} zu finden,'."\n".
                    'auch konkret im \jump{OM:FrQFT:Lepton:Zeit-und-Alterung}{Leptonen-Modell},'."\n".
                    'müssen grundlegende Annahmen der heutigen Physik überdacht und neu gefasst werden.'."\n".
                    'Das bedeutet, es sind tiefgreifende \hidden{\jump{OM:FrQFT:Diskussion:Paradigmenwechsel-zur-Quantenmechanik}}\color{*Bearb}{Paradigmenwechsel in Bezug auf die Quantenmechanik}'."\n".
                    'und \hidden{\jump{OM:FrQFT:Diskussion:Paradigmenwechsel-zur-Relativitaetstheorie}}\color{*Bearb}{in Bezug auf die Relativitätstheorie} notwendig.'."\n",
                      'Der daraus folgende Ansatz zur Formulierung einer \jump{OM:FrQFT:NeuePhysik}{›Neue Physik‹} führt zur hier beschriebenen fraktalen Quanten-Fluss-Theorie,'."\n".
                    'die das Problem durch die Unterscheidung von \jump{OM:FrQFT:ZeitAlterungFrequenz:Zeit}{Zeit} und \jump{OM:FrQFT:ZeitAlterungFrequenz:Alterung}{Alterung} löst.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:FrQFT:NeuePhysik:Loesungsansatz'),
                      // array(  jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum'),
                      // array(  jump_name => 'OM:FrQFT:Lepton:Zeit-und-Alterung'),
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Quantengravitation'),
                    )),
              )
          ); ?>
          

		    	<!  • Problem der Quantengravitation  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:NotwenVereinheit:Problem-der-Quantengravitation',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Zeit', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    '• Diskussion zum Problem der Quantengravitation.\footnote{Vgl. \cite{Giulini:GravitationEquivalencePrincipleAndQuantumMechanics2013}, Kap. 5 Ausblick, S. 14-15. \\\\ Sekundärliteratur: \\\\ Vgl. \cite{Giulini:EinsteinImQuantentest2013}, S. 62-64.}',
                    ))),
                      
                  array( 'text', array( text => array(
                      'Beschreibung und Diskussion des Problems der Quantengravitation …'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n",
                    'Die Formulierung der Lösung des Problems der \jump{OM:FrQFT:Quantengravitation}{Quantengravitation der Elementarteilchen}'."\n".
                    'gelingt in der fraktalen Quanten-Fluss-Theorie durch das Verständnis der dynamischen Struktur sowie des Zusammenhalts'."\n".
                    'der Wirkungsquanten-Strings der Elementarteilchen und deren daraus folgenden Wirkung auf ihre Umgebung.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                    
                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:FrQFT:Gravitation'),
                      // array(  jump_name => 'OM:FrQFT:Quantengravitation'),
                      // array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Energie'),
                      // array(  jump_name => 'OM:FrQFT:Gravitation:Phaenomen-der-Dunkle-Materie-oder-MOND'),
                      // array(  jump_name => 'OM:FrQFT:Dunkle-Materie'),
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Feuerwand'),
                    )),
              )
          ); ?>

          
		    	<!  • Problem der Feuerwand  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:NotwenVereinheit:Problem-der-Feuerwand',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Quantengravitation', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    // '• Neue Analysen der Situation am Ereignishorizont eines Schwarzen Lochs aus Sicht der Quantenphysik legen nahe, dass dort eine „Feuerwand“ existiert.\footnote{\const{FrQFT_g_footnote_text_EreignHoriFeuerwand}} Dies erzeugt das Problem, dass dort Information verloren geht, was die Quantenphysik verbietet. Die Lösung dieses Problems sollte danach zur Vereinheitlichung der Physik führen.\footnote{Vgl. \cite{Polchinski:FeuerwandAmHorizont:2015}, S. 36, Kasten.} \quote{Die Theoretiker müssen ihre grundlegenden Annahmen über das Universum sowie die Natur von Raum und Zeit überdenken.}\footnote{\cite{Polchinski:FeuerwandAmHorizont:2015}, S. 39.} Das Szenario der Feuerwand am Ereignishorizont ist dem Szenario der hier entwickelten fraktalen Quanten-Fluss-Theorie sehr ähnlich.',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Neue Analysen der Situation am Ereignishorizont eines Schwarzen Lochs aus Sicht der Quantenphysik legen nahe,'."\n".
                    'dass dort eine „Feuerwand“ existiert.\footnote{\const{FrQFT_g_footnote_text_EreignHoriFeuerwand}}'."\n".
                    'Diese hat zur Folge, dass dort Information verloren geht, was die Quantenphysik verbietet.'."\n",
                      'Die Lösung dieses Problems sollte demnach zur Vereinheitlichung der Physik führen.\footnote{Vgl. \cite{Polchinski:FeuerwandAmHorizont:2015}, S. 36, Kasten.}'."\n".
                    ''))),

                  array( 'text', array( Shape  => 'quote', text => array(
                        'Die Theoretiker müssen ihre grundlegenden Annahmen über das Universum sowie die Natur von Raum und Zeit überdenken.'."\n".
                        ''),
                        addtext => '\footnote{\cite{Polchinski:FeuerwandAmHorizont:2015}, S. 39.}')),

                  array( 'text', array( text => array(
                    'Das Szenario der Feuerwand am Ereignishorizont ist dem Szenario der hier entwickelten fraktalen Quanten-Fluss-Theorie sehr ähnlich.'."\n",
                      '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Materie'),
                    )),
              )
          ); ?>

          
		    	<!  • Problem des Phänomens der Dunklen Materie  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Materie',
              'Die bisherigen Erklärungsmodelle liefern keine eindeutig passenden Erklärungen aller beobachteten Facetten dieses Phänomens', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Feuerwand', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '• Die Idee einer Supraflüssigkeit aus Dunkler Materie ist meiner Idee der variierenden Vakuumenergiedichte sehr ähnlich.\footnote{Vgl. \cite{Ouellette:IstDieDunkleMaterieEineSuprafluessigkeit:2017}.}',
                    '• Schwarze Löcher, die beim Urknall erzeugt wurden, könnten einen Teil der Dunklen Materie ausmachen.\footnote{Vgl. \cite{Garcia-Belido:DieSchwarzenLoecherDesUrknalls:2017}.}',
                    '• Eine neue Theorie von Erik Verlinde unterstützt im Prinzip die MOND-Theorie und ist meinem Ergebnis verblüffend ähnlich.\footnote{Vgl. \cite{Verlinde:EmergentGravityAndTheDarkUniverse:2016}. \\\\ Sekundärliteratur: \\\\ Vgl. \cite{Wolchover:DerAnfangVomEndeDunklerMaterie:2017}.} \quote{Dunkle Materie, sagt Verlinde, sei nicht eine Ansammlung unsichtbarer Teilchen, sondern ›ein Wechselspiel zwischen gewöhnlicher Materie und Dunkler Energie‹.}\footnote{\cite{Wolchover:DerAnfangVomEndeDunklerMaterie:2017}, S. 29.} Danach ist die Gravitation eine emergentes Phänomene, wie in der hier beschriebenen FrQFT.',
                    '• Dunkle Materie kann nicht gefunden werden.\footnote{Sekundärliteratur: \\\\ Vgl. \cite{Wolchover:NeuePhysikOhneNeueTeilchen:2016}.}',
                    '• Der Gammastrahlenhintergrund liefert keine Anzeichen über die Zerstrahlung bzw. Annihilation von Dunkler Materie und ihrer Antimaterie.\footnote{Vgl. \cite{Fornasa:TheAngularPowerSpectrumOfTheDiffuseGammaRayEmissionAs:2016}. \\\\ Sekundärliteratur: \\\\ Vgl. \cite{Fischer:KeineDunkleMaterieEntdeckt:2016}.}',
                    '• „Das Problem der fehlenden Satelliten“: Es sollten bei CDM viele Begleitgalaxien von Kerngalaxien entstehen. Dies wird nicht beobachtet. Kleine CDM Halos verschmelzen in den Simulationen zu schnell zu großen Halos, als Beobachtungen es nahelegen. Mit CDM sollten die Zwerggalaxien deutlich älter sein, als großen, man beobachtet aber das Gegenteil.\footnote{Vgl. \cite{Kroupa:SMKPruefstand2010}, S. 24-26, Bild S. 24. \\\\ \color{*Bearb}{(Weitere Verweise)}}',
                    '• Die Anordnung der Satellitengalaxien und ihre Bewegung um unsere Milchstraße sollte laut CMD anders aussehen als in der beobachteten Scheibenanordnung und fast komplett die selbe Rotationsrichtung haben.\footnote{Vgl. \cite{Kroupa:SMKPruefstand2010}, S. 26-28. \\\\ \color{*Bearb}{(Weitere Verweise)}}',
                    '• Paradigmenwechsel der ART: ART ist so nicht zu halten.\footnote{Vgl. \cite{Kroupa:SMKPruefstand2010}, S. 30-31. \\\\ \color{*Bearb}{(Weitere Verweise)}}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Das Phänomen der Dunklen Materie stellt sich in seinen verschiedenen Beobachtungsszenarien erstaunlich'."\n".
                    'unterschiedlich dar.'."\n",
                      'Grundsätzlich geht es darum, dass die beobachtete Anziehung großer Massen von den Erwartungen abweicht,'."\n".
                    'die sich aufgrund der bisher bekannten und eigentlich sonst auch ziemlich gut überprüften Allgemeinen Relativitätstheorie\footnote{\const{FrQFT_g_footnote_text_ART}}'."\n".
                    'sowie durch die Lichtabstrahlung der sichtbaren im Raum verteilten Massen ergibt.'."\n".
                    'Es muss also einen Grund dafür geben, warum die Gravitation auf den großen Skalen der Galaxien etwas anders funktioniert.'."\n",
                      'In der akademischen Physik werden derzeit hauptsächlich zwei Erklärungsmodelle diskutiert:'."\n".
                    ''))),
                  array( 'bulletlist', array( bullet_ary => array(
                        'Dunkle Materie\footnote{\const{FrQFT_g_footnote_text_DunkleMat}}',
                        'MOND – modifizierte newtonsche Dynamik\footnote{\const{FrQFT_g_footnote_text_MOND}}',
                    ))),
                  array( 'text', array( text => array(
                    'Und beide unterscheiden sich recht grundsätzlich.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Dunkle Materie} \\\\'."\n".
                  '\cond{Unbekannte und unsichtbare Elementarteilchen} \\\\'."\n".
                    'Recht kurz erklärt gehen wir bei der Dunkle Materie davon aus, dass es bisher unbekannte Elementarteilchen gibt,'."\n".
                    'die quasi „unsichtbar“ sind, weil sie kaum mit der uns bekannten Materie und dem Licht interagieren.'."\n".
                    'Diese Elementarteilchen machen sich, so die Annahme, überwiegend durch ihre gravitative Wirkung bemerkbar,'."\n".
                    'die wir dann durch das Phänomen der Dunklen Materie beobachten.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{MOND} \\\\'."\n".
                  '\cond{Eine Anpassung der Formeln bei geringer Gravitation} \\\\'."\n".
                    'Bei MOND gehen wir hingegen davon aus, dass die Gravitationsgesetze bei sehr geringer Gravitation'."\n".
                    'anders zu Formulieren sind, als wir es durch das Newtonsche Gravitationsgesetzt oder durch die'."\n".
                    'Allgemeine Relativitätstheorie kennen.'."\n".
                    'Die Formeln werden also modifiziert, ohne einen genauen Grund für die Änderung zu kennen, soweit mir bekannt;'."\n".
                    'in meinen Augen also probehalber.'."\n".
                    'Sie werden bestimmten Beobachtungen angepasst und dann wird geschaut, ob dies alle Beobachtungen erklären kann.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Erklärungen, die nur bedingt passen} \\\\'."\n".
                    'Mittlerweile gibt es recht umfangreiche und ausgeklügelte Beobachtungen des Phänomens der Dunklen Materie.'."\n",
                      'Im Verlauf der letzten Jahre und Jahrzehnte wurde intensiv geforscht, welche der beiden konkurrierenden'."\n".
                    'Erklärungsversuche denn möglichst viele, oder gar alle, Beobachtungen erklären kann.'."\n".
                    'In den Jahren sind die Wissenschaftler dabei durch ein Wechselbad der Gefühle gegangen, das kaum seinesgleichen findet.'."\n".
                    'Die eine Beobachtung bestätigte das Gravitationsmodell der Dunklen Materie und die andere Beobachtung das von MOND.'."\n".
                    'Ein wirkliches Wechselbad der Gefühle in der Physik, dass den einen oder anderen Physiker frustriert und manch einen,'."\n".
                    'wie mich, auch fasziniert und ein wenig amüsiert hat, gestehe ich.'."\n",
                      'Dabei wurden die Beobachtungsszenarien und Methoden immer ausgebuffter.'."\n",
                      'Zu Beginn beobachteten die Astrophysiker die Sternbewegungen am Rande von Galaxien und die Galaxiebewegungen in'."\n".
                    'kleineren Galaxiensystemen und in ganzen Galaxienhaufen.'."\n".
                    'Heute werden ergänzend die Bewegungen der Sterne in Zwillingssternsystemen beobachtet, deren Sterne sehr weit'."\n".
                    'voneinander entfernt rotieren und sich daher nur mit sehr geringer Gravitation anziehen.'."\n".
                    'Auch wird mit Hilfe von schwachen Gravitationslinseneffekten geschaut, wie weit hinaus im All um Galaxien herum'."\n".
                    'die Gravitationseffekte sich wie verändern, um zwischen den beiden Erklärungsmodellen zu unterscheiden.'."\n",
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Widersprüche schon innerhalb eines Erklärungsmodells} \\\\'."\n".
                    'Nach der Beobachtung der Zwillingssternsysteme gibt es MOND dort nicht.'."\n".
                    'Es gelten bei sehr geringer Gravitation in Zwillingssternsystemen die Newtonschen Gesetze beziehungsweise'."\n".
                    'die Allgemeine Relativitätstheorie.\color{*Bearb}{(Verweis)}'."\n".
                    'Hingegen zeigen die schwachen Gravitationslinseneffekte, dass wir die veränderten Gesetze von MOND selbst weit'."\n".
                    'außerhalb von Galaxien noch ziemlich genau beobachten können.\color{*Bearb}{(Verweis)}'."\n",
                      'Es kommt also wirklich widersprüchliches heraus, selbst in Bezug auf ein und den selben Erklärungsansatz'."\n",
                      'Die Bewegung der Sterne in den beobachteten Zwillingssternsystemen passen zum Modell der Dunklen Materie,'."\n".
                    'wie auch die Bewegung der Sterne am Rande von Galaxien.'."\n".
                    'Hingegen passen die Beobachtungen der schwachen Gravitationslinseneffekte nicht zum Modell der Dunklen Materie,'."\n".
                    'deren Wirkung weit außerhalb der Galaxien einen anderen Gravitationsverlauf nehmen sollte, als die Beobachtungen zeigen.\color{*Bearb}{(Verweis)}'."\n".
                    'Und ganz grundsätzlich fehlt von den Elementarteilchen der Dunklen Materie bisher auch jede Spur.\color{*Bearb}{(Verweis)}'."\n",
                      'Wie passt das alles nun zusammen?'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die emergente Quantengravitation der Quanten-Fluss-Theorie} \\\\'."\n".
                  '\cond{Gravitative Effekte des Gravitationspotenzials des weiträumigen Vakuums} \\\\'."\n".
                    'Die fraktale Quanten-Fluss-Theorie beschreibt die Gravitation in Form einer \jump{OM:FrQFT:Quantengravitation}{Quantengravitation der Elementarteilchen},'."\n".
                    'die sich als ein \jump{OM:FrQFT:Gravitation}{emergentes Phänomen der Quantengravitation} darstellt.'."\n",
                      'Die Gravitation bekommt durch diese Sicht der Zusammenhänge ein paar Besonderheiten, die nach meinem Eindruck'."\n".
                    'gut zu den Beobachtungen passen sollten.'."\n",
                      'Zunächst ergibt sich aus der Quantengravitation der Elementarteilchen die \\jump{OM:FrQFT:Quantengravitation:Lichtverlangsamung}{Lichtablenkung}'."\n".
                    'der Schwarzschildlösung oder Schwarzschild-Metrik\footnote{\const{FrQFT_g_footnote_text_SchwarzschildMetrik}} der Allgemeinen Relativitätstheorie.'."\n".
                    'Aufgrund des \jump{OM:FrQFT:Elementarteilchen}{Elementarteilchen-Modells} und konkreter'."\n".
                    'des \jump{OM:FrQFT:Lepton}{Leptonen-Modells} der Quanten-Fluss-Theorie lässt sich daraus auch die Gravitation'."\n".
                    'der Allgemeinen Relativitätstheorie ableiten.'."\n".
                    'Die Raumzeitkrümmung entspricht dabei dem Gravitationspotenzial und dies einem Energiedichtegradienten des Vakuums.'."\n".
                    'Die Energiedichte des Vakuums verändert sich also mit dem Abstand zur Masse und ist im Allgemeinen an einem Ort'."\n".
                    'im dreidimensionalen Raum nicht in allen Richtungen gleich, sondern in radialer und tangentialer Richtung'."\n".
                    'zur Masse unterschiedlich.'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Energiedichteunterschiede im Vakuum} \\\\'."\n".
                  '\cond{Zusätzliche Gravitationseffekte durch eine etwas ungleich verteilte Vakuumenergie} \\\\'."\n".
                    'Die emergente Quantengravitation verhält sich in der Nähe kompakter Massen genau wie bekannt.'."\n".
                    'So wäre dies auch bei Doppelsternsystemen, die sich weit auseinander mit geringer Gravitation'."\n".
                    'umkreisen.'."\n".
                    'Denn der aufsummierte Energiedichteunterschied der Energie des Vakuums „zwischen“ den beiden Sternen zur'."\n".
                    'Energie außen herum ist sehr gering.'."\n",
                      'Der Energiedichtegradienten des Vakuums hat aber einen entscheidenden Effekt,'."\n".
                    'wenn es um die weiträumige Gravitation geht, wo sehr sehr viel Vakuum mit höherer Energie'."\n".
                    'in und um die anziehende Massen herum im Verhältnis zur niedrigeren Energiedichte des Vakuums'."\n".
                    'viel weiter draußen im Raum geht.'."\n".
                    'Hier sollte sich ein merkbarer Effekt einstellen, wenn es um den Rand einer Galaxie'."\n".
                    'und um den intergalaktischen Raum geht.'."\n".
                    'Und dieser Effekt sollte im intergalaktischen Raum anhaltend sein, wie es beobachtet wird.'."\n",
                      'So erklärt die emergente Quantengravitation komplexe Gravitationseffekte,'."\n".
                    'die durch die aktuellen Erklärungsversuche der Dunklen Materie und MOND nicht vollständig zu erklären'."\n".
                    'sind.'."\n".
                    'Wie dies im Einzelnen funktioniert, beschreiben wir auf der Seite'."\n".
                    '\italic{\jumpname{OM:FrQFT:Dunkle-Materie}}.'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-kosmologischen-Konstanten'),
                    )),
              )
          ); ?>

          
		    	<!  • Problem der kosmologischen Konstanten  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:NotwenVereinheit:Problem-der-kosmologischen-Konstanten',
              'Warum erscheint unser Kosmos nicht gekrümmt, sondern im Durchschnitt flach', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Materie', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'hideContent', text => array(
                    '\bold{Aktueller fachlicher Diskurs}',
                    '• Schwarz, Dominik J. - Streit um Hubbles Erbe - 20180620 - Spektrum der Wissenschaft: \url{https://www.spektrum.de/magazin/streit-um-hubbles-erbe/1567830}',
                    ))),

                  array( 'text', array( text => array(
                    'Im Grundsatz bei der Lösung des \jump{OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Materie}{Problems des Phänomens der Dunklen Materie}'."\n".
                    'bleibend, können wir auch beim Problem der kosmologischen Konstanten feststellen:'."\n",
                      'Nach dem Relativitätsprinzip entspricht jede Energie einer Masse nach Albert Einsteins weltberühmter Formel im Verhältnis \lm{ E = m \cdot c^{2} }.\footnote{\const{FrQFT_g_footnote_text_AequivalMasseEnergie}}'."\n".
                    'In der Quantenmechanik wird das Vakuum als recht energiereich beschrieben.\footnote{Vgl. \cite{Kempf:WieVielWiegtDasVakuum:2023}, Welche Schwerkraft hat das Vakuum? S. 290. \\\\ Internet: \\\\ Vgl. \cite{wiki:Vakuumenergie2013}.}'."\n".
                    'Aufgrund des Relativitätsprinzips sollte es daher Masse besitzen und gravitativ wirken.\footnote{Vgl. \cite{Kempf:WieVielWiegtDasVakuum:2023}, Vakuumenergie sollte gravitieren, S. 288-289.}'."\n",
                      'In der heutigen Physik wird hingegen, ohne zwingenden Grund, angenommen, die Vakuumenergie hätte im Grunde keinen Gravitationseffekt'."\n".
                    'und, wenn doch, dann ist dieser bisher unkalkulierbar.\footnote{Vgl. \cite{Kempf:WieVielWiegtDasVakuum:2023}, Welche Schwerkraft hat das Vakuum? S. 290.}'."\n".
                    'Diese Annahme widerspricht dem Relativitätsprinzip und die Physik ist aufgefordert schlüssig zu begründen, warum'."\n".
                    'kein Gravitationseffekt existiert oder dieser verborgen bleibt.\footnote{Vgl. \cite{Laughlin:AbschiedWeltformel2007}, Kap. 10. Das Gewebe der Raumzeit, S. 179-192, hier S. 189. Hier im ähnlichen Fall der fehlenden Gravitation der Photonen.}'."\n",
                      'Gordon Kane schreibt dazu:'."\n"))),

                  array( 'text', array( Shape  => 'quote', text => array(
                        'All unsere heutigen Theorien scheinen zu besagen, dass das Universum eine ungeheure Konzentration an Energie enthält – selbst in den'."\n".
                        'leersten Regionen des Weltraums.'."\n".
                        'Die Gravitationseffekte dieser so genannten Vakuumenergie hätten das Universum schon längst entweder eng einrollen oder noch viel mehr'."\n".
                        'aufblähen müssen.'."\n".
                        'Das Standardmodell [der Kosmologie] vermag dieses Rätsel – das Problem der kosmologischen Konstanten – nicht zu lösen.'.
                        ''),
                        addtext => '\footnote{\cite{Kane:NeuePhysik2003}, hier Kasten S. 31.}')),

                  array( 'text', array( text => array(
                    'Wie kann es also sein, dass die Vakuumenergie keinen gravitativen Effekt auf den gesamten Kosmos hat'."\n".
                    'oder wir diesen zumindest nicht wahrnehmen?'."\n".
                    ''))),
                  array( 'text', array( text => array(
                  '\condb{Die emergente Quantengravitation der Quanten-Fluss-Theorie} \\\\'."\n".
                  '\cond{Energieerhaltung des weiträumigen Gravitationspotenzials nach dem Sandkastenmodell} \\\\'."\n".
                    'Die emergente Quantengravitation der Quanten-Fluss-Theorie liefert einen fundamentalen Grund dafür,'."\n".
                    'warum die Gravitation des Vakuums in der Betrachtung des gesamten Kosmos scheinbar nicht beobachtet wird.'."\n",
                      'Dieser Grund liegt in der Energieerhaltung des weiträumigen Gravitationspotenzials,'."\n".
                    'das mit einem Sandkastenmodell veranschaulicht werden kann.'."\n".
                    'Die Energieerhaltung des weiträumigen Gravitationspotenzials bedingt, dass die mittlere Energieverteilung'."\n".
                    'über ein riesiges Volumen konstant bleibt.'."\n".
                    'Denn, wenn die Energie des Vakuums an einer Stelle zunimmt, muss sie an anderer Stelle abnehmen.'."\n",
                      'Dies kann nicht in einer Form geschehen, dass sich die Energie auf der einen Seite des Kosmos'."\n".
                    'komplett ansammelt und dann folglich auf der anderen Seite verschwindet, wie der Sand in einem Sandkasten,'."\n".
                    'oder in der Mitte und am Rand verschwindet.'."\n".
                    'Denn der Ausgangspunkt des Sandkastenmodells ist, das der Sand – also die Energie – ursprünglich einigermaßen'."\n".
                    'gleich verteilt war.'."\n".
                    'Von hier aus können nur mehr oder weniger lokale Ansammlungen der Energie entstehen, zwischen denen'."\n".
                    'sich dann Energiesenken bilden.'."\n",
                      'Dadurch ist die Vakuumenergiedichte, und damit auch die Raumzeitkrümmung,'."\n".
                    'des \jump{OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung:EuklFlachKos}{Kosmos im Mittel flach}.'."\n".
                    'Das bedeutet, dass auf den gesamten Kosmos bezogen keine Gravitationseffekte bemerkbar sind,'."\n".
                    'die den Raum gekrümmt erscheinen lassen.'."\n".
                    ''))),
                  /* array( 'text', array( text => array(
                    'Die Quanten-Fluss-Theorie liefert einen zwanglosen Grund dafür, warum die \jump{OM:FrQFT:Gravitation:Vakuumenergie-und-ihre-Gravitation}{Gravitation des Vakuums scheinbar nicht beobachtet} wird.'."\n".
                    'Denn die Gravitation des Vakuums ist ein wesentlicher Faktor der Struktur des Vakuums und seiner Rolle als'."\n".
                    '\jump{OM:FrQFT:Gravitation:Vakuum-als-Traeger-des-Gravitationsfelds}{Träger des Gravitationsfelds und der Gravitationsvermittlung}.'."\n".
                    'So wird auch die Größe der örtlichen Lichtgeschwindigkeit im Gravitationsfeld durch die innere Wechselwirkung des Vakuums festgelegt.'."\n"))),
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(Den nachfolgenden Teil vielleicht eher zur neuen Physik und dahin von hier aus verweisen:)}'."\n"))),
                  array( 'text', array( text => array(
                    'Eine neue \jump{OM:FrQFT:Gravitation:Variable-Vakuumenergie-und-Higgs-Feld-Dichte}{Energiedichtevariation des Vakuums} in Form der Wirkungsquanten-Dichte im Raum entspricht dem Higgs-Mechanismus\footnote{\const{FrQFT_g_footnote_text_HiggsMech}}.'."\n".
                    'Diese Dichtevariation ist mit dem Gravitationsfeld äquivalent und verbindet so den Higgs-Mechanismus, welcher ursächlich für seine träge Masse ist,'."\n".
                    'mit der Gravitation eines Elementarteilchens. \\\\'."\n".
                    'Der neue Ansatz stellt so über die Struktur des Vakuums Beziehungen zwischen grundlegenden Eigenschaften der Elementarteilchen her.'."\n"))),
                  array( 'text', array( text => array(
                    'Auch stellt sich im Verlauf heraus, dass die verborgene Gravitation der Vakuumenergie auf der Größenskala großer Galaxien als'."\n".
                    '\jump{OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Materie}{Phänomen der Dunklen Materie oder als MOND} zum Vorschein kommt.'."\n".
                    'Dabei handelt es sich quasi um den Higgs-Mechanismus auf sehr großen Skalen.'."\n"))), */

                  array( 'jumplist', array(
                      // array(  jump_name => 'OM:FrQFT:Gravitation'),
                      // array(  jump_name => 'OM:FrQFT:Quantengravitation'),
                      // array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Energie'),
                      // array(  jump_name => 'OM:FrQFT:Gravitation:Phaenomen-der-Dunkle-Materie-oder-MOND'),
                      // array(  jump_name => 'OM:FrQFT:Dunkle-Materie'),
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Energie'),
                    )),
              )
          ); ?>

          
		    	<!  • Problem der Dunklen Energie  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Energie',
              'Es scheint völlig unklar, welcher Natur diese mysteriöse Energie ist', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-kosmologischen-Konstanten', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    '• Ein dynamisches Phänomen aus der Thermodynamik könnte hier eine Rolle spielen. Nimmt man den Behälter um ein Gas mit einer Themperatur größer Null weg, so verteilt sich das Gas schlicht im Raum und dehnt sich so einfach aus. Ähnlich verhält es sich mit Lichtphotonen, Elapsonen oder Wirkungsquanten, die sich frei im Raum bewegen können. So würden sich dann nach der FrQFT auch eventuell die im Verhältnis zum Umfeld verdichteten Bestandteile eines Kosmos innerhalb eines Schwarzen Lochs im Raum verteilen oder in den Eregnishorizont wandern. Dies hätte im Schwarzen Loch, also in dem in ihm enthaltenen Kosmos, den Eindruck einer Expansion zur Folge.',
                    '• Kleine CDM Halos verschmelzen in den Simulationen zu schnell zu großen Halos, als Beobachtungen es nahelegen. Dem entgegen zu wirken soll einer der Gründe zur Einführung der Dunklen Energie gewesen sein.\footnote{Vgl. \cite{Kroupa:SMKPruefstand2010}, S. 24. \\\\ \color{*Bearb}{(Weitere Verweise)}}',
                    '• Rolle der Energieerhaltung im Kosmos …\footnote{Vgl. \cite{Kroupa:SMKPruefstand2010}, S. 24. \\\\ \color{*Bearb}{(Weitere Verweise)}}',
                    '\bold{Aktueller fachlicher Diskurs}',
                    '• Die großen leeren Räume im Kosmos, die Supervoids, werden gesucht und untersucht. Die Voids verändern die Mikrowellenhintergrundstrahlung und machen sich dadurch bemerkbar. Diese Veränderung sagt etwas über die Expansion des Kosmos und damit etwas über die Dunkle Energie.\footnote{Sekundärliteratur: \\\\ Vgl. \cite{Szapudi:DieGrosseLeere:2017}.}',
                    ))),
                      
                  array( 'text', array( text => array(
                    'Dunkle Energie\footnote{\const{FrQFT_g_footnote_text_DunkleEnergie}} \color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Singularitaeten'),
                    )),
              )
          ); ?>

          
		    	<!  • Problem der Singularitäten  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:NotwenVereinheit:Problem-der-Singularitaeten',
              'Punktförmige Elementarteilchen, Schwarze Löcher, der Urknall und Co.', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Energie', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    '• Singularitäten sind unphysikalisch, da sie zu unendlichen Werten auf endlichem Raum führen.\footnote{Unnatürliche Unendlichkeiten: \\\\ \const{FrQFT_g_footnote_text_Unendlichkeiten}}\footnote{Unvollständigkeit der Allgemeinen Relativitätstheorie: \\\\ \const{FrQFT_g_footnote_text_ARTUnvollstaendig}}\footnote{Unvollständigkeit der Quantenphysik: \\\\ \const{FrQFT_g_footnote_text_QuantenphysikUnvollst}}',
                    '• Beim Urknall soll das Universum angeblich aus dem Nichts entstanden sein. Dies ist aber unlogisch und unphysikalisch: Wie etwas aus Nichts entstehen soll wird nicht erklärt. Nach logischem Verständnis ist ein solches Wunder auch nicht möglich. Darüberhinaus ist jede Form einer Urknallsingularität unphysikalisch.',
                    '\bold{Fachdiskussion}',
                    '• Quantenmechanik hilft wohl nicht bei der Beseitigung der Urknallsingularität.\footnote{Sekundärliteratur: \\\\ Vgl. \cite{Fischer:KeinAuswegAusUrknall-Unendlichkeit:2017}.}',
                    '• Dies ist auch ein Ansatzpunkt der Erkenntnistheorie des Plausibilismus.',
                    '• Vgl. \cite{Lesch:Kosmologie2006}, Kap. III. Dunkle Energie, Gleichungen – Lösungen, S. 93-98, hier S. 96-98.',
                    '• Vgl. das Zitat von Lee Smolin im Kapitel \jumpname{OM:FrQFT:Einleitung:Ausgangssituation:GesuchteVereinheitlichung}.',
                    '• Vgl. Quantengravitation, \jumpname{OM:FrQFT:Quantengravitation:Keine-Singularitaet}.',
                    ))),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Probleme-der-Quantenchromodynamik'),
                    )),
              )
          ); ?>

          
		    	<!  • Probleme der Quantenchromodynamik  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:NotwenVereinheit:Probleme-der-Quantenchromodynamik',
              '\color{*Bearb}{In Arbeit …}', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Singularitaeten', type => 'back'),
                    )),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{'."\n".
                    '• Ein ausführlicher Artikel über die Gluonen und die Probleme der QCD findet sich in \cite{Ent:DerKlebstoffDerWelt:2015}. Die FrQFT kann wichtige dieser Fragen, wie zum Confinement und der Gluonen-Energie, zumindesten qualitativ beantworten.'."\n".
                    '}'."\n"))),
                      
                  array( 'text', array( text => array(
                    '\color{*Bearb}{(In Arbeit …)}'."\n"))),
                      
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Problem-der-Naturkonstanten'),
                    )),
              )
          ); ?>

          
		    	<!  • Problem der Naturkonstanten  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:FrQFT:NotwenVereinheit:Problem-der-Naturkonstanten',
              'Die Werte der Naturkonstanten erscheinen recht willkürlich', 'Sc_f_Paragraph',
                array(
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:NotwenVereinheit:Probleme-der-Quantenchromodynamik', type => 'back'),
                    )),
                      
                  array( 'notice', array( Display => 'showContent', text => array(
                    '\bold{Fachdiskussion}',
                    '• Siehe: Hossenfelder, Sabine. \jump[http://backreaction.blogspot.com/2017/06/if-tensions-in-cosmological-data-are.html]{}{If tensions in cosmological data are not measurement problems, they probably mean dark energy changes}.',
                    ))),
                      
                  array( 'text', array( text => array(
                    '… es ist erstrebenswert, dass sich die Werte der Naturkonstanten aus strukturellen Zusammenhängen ergeben.\footnote{\const{FrQFT_g_footnote_text_ProblemDerNaturkonstanten}}'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n",
                      'Natürlichkeitsproblem\footnote{\const{FrQFT_g_footnote_text_Natuerlichkeit}}'."\n".
                    '\color{*Bearb}{(In Arbeit …)}'."\n".
                    ''))),

                  array( 'jumplist', array(
                      array(  jump_name => 'OM:FrQFT:ZeitAlterungFrequenz'),
                    )),
              )
          ); ?>
          

			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
