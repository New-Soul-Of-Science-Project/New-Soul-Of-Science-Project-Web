<?php   $Glo_PathRel_back = '../';
        include $Glo_PathRel_back.'../share/php/NSOSP.php'; ?>


<?php FrQFT_f_HTML_BeginHeaderBodyContainer( 'OM:OT:Home'); ?>


      <?php FrQFT_f_Div_Header( '      '); ?>


      <?php FrQFT_f_Div_WrapperBegin( '      '); ?>

	
          <?php To_f_Paragraph_list_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '                ', 'Sc_f_Paragraph',
                array(
                  array( 'text', array( text => array(
                    'Es gibt einen systematischen Zusammenhang zwischen den arithmetischen Operatoren:'."\n".
                    'Die Addition, die Multiplikation und die Exponentialrechnung gehen auf gleiche Weise auseinander hervor;'."\n".
                    'vom ersten Operator Plus „\lm{ + }“ über den zweiten Operator Mal „\lm{ \cdot }“ bis zum dritten Operator Hoch „\lm{ ↑ }“.'."\n".
                    'Dadurch werden diese Operator-Arten zählbar und wir können über diese Systematik weitere finden.'."\n",
                      'Es sich lohnt sich aus verschiedenen Gründen, uns hiermit zu beschäftigen.'."\n",
                      'Wir ermitteln so den Vorgänger-Operator der Addition und dieser ist tatsächlich das Zählen selber.'."\n".
                    'Er kann uns zum Beispiel etwas über die Zeit lehren und über Existenz,'."\n".
                    'denn wir können ihn so interpretieren, dass der gegenwärtige Zähl- oder Zeitschritt nur dann konstant bleibt,'."\n".
                    'wenn der nächste Schritt noch nicht existiert.'."\n".
                    'Existiert dort etwas in der Zukunft, dann ist schon weitergezählt.'."\n".
                    'So ist der Zähloperator in der Lage zu überprüfen, ob ein Wert rechtsseitig existiert.'."\n",
                      'Der Sprungoperator geht wiederum dem Zähloperator voraus.'."\n".
                    'Wird er auf nicht-existierendes auf der linken Seite mit einer Zahl als rechtsseitigen Operanden angewandt,'."\n".
                    'dann wird die rechte Zahl genommen und um einen erhöht.'."\n".
                    'Wir können mit seiner Hilfe aus Nicht-Existierendem mit einer Existenz eine Existenz generieren oder schöpfen.'."\n",
                      'Ähnliches gilt für den nächsten Vorgänger, den Konstanzoperator.'."\n",
                      'Wir kommen also durch genaue Beobachtung der Zahl Operatoren und ihrer Vorgänger prinzipiell zum Existenzquantor\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Quantor:2023}, Existenz- und Allquantor.} „\lm{ \exists }“.'."\n".
                    'Und ich halte es für möglich, dass so auch prinzipiell der Allquantor\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Quantor:2023}, Existenz- und Allquantor.} „\lm{ \forall }“ auf Basis der Zahl Operatoren zu formulieren ist.'."\n".
                    'Wir können also sogar zunächst unvermutete Zusammenhänge mit der Prädikatenlogik\footnote{\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \cite{wiki:Praedikatenlogik:2023}.} erkennen, die auf mehr neugierig machen.'."\n".
                    ''))),
                      
                  array( 'text', array( Shape => 'italic', text => array(
                        // #: Text so auch auf der Seite "OM:NPYo:Home". Durch eine Konstante ersetzen, in der der Hinweis auf den Haftungsausschluss durch eine Wild-Card der aktuellen Seite ersetzt ist. Z.B. "!:Haftungsausschluss".
                        '\\italic{Bitte beachte, dass diese Seiten im Aufbau befindlich sind. Es sind weder alle entwickelten Ideen eingepflegt, noch sind alle Texte vollständig.'."\n".
                        'Sollte letzteres der Fall sein, so sind \\color{*Bearb}{violette} Markierungen angebracht.'."\n".
                        'Stellen, die der aktuellen Weiterentwicklung bedürfen – gerne auch von extern –, sind \\color{*Entwick}{grün} markiert.}'."\n"),
                        addtext => '')),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:OT:Home:Inhalt'),
                      // array(  jump_name => 'OM:OT:Vorwort'),
                      array(  jump_name => 'OM:OT:Einleitung'),
                    )),
                    
                  array( 'jumplist', array(
                      array(  jump_name => 'OM:NPYo:Angebote-Veranstaltungen'),
                    )),
                )
          ); ?>
		    	<br>
          <?php To_f_headline_add_hides_end_line(); ?>


		    	<!  • Inhalt:  >
          <?php To_f_Chapter_v1( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '          ', 'hideContent',
            'OM:OT:Home:Inhalt',
              '', 'Sc_f_Paragraph',
                array(
                  array( 'normal',
                    '\\\\'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      array( title => '\\color{*ContentItemDisabled}{Video Tour (geplant)}', startsign => '', //jumpname => 'XXX',
                                description => 'die YouTube-Vorträge'),
                      array( title => '\\color{*ContentItemDisabled}{Vorwort (geplant)}', startsign => ''/*'\\name{OM:FrQFT:Vorwort}'*/, //jumpname => 'OM:FrQFT:Vorwort', startsign => '',
                                description => 'was mich bewegt – was ich bewegen möchte'/*$Glo_g_Site_ary['OM:FrQFT:Vorwort'][text_undertitel_h2])*/),
                    ))),
                      
                  array( 'normal',
                    '<h3 class="tools-class-contentlist-header">Operialtheorie \\\\ \\small{Die Grundlagen der Arithmetik erhellen}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:OT:Vorwort'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:OT:Einleitung'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:OT:Zaehloperator'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:OT:Sprungoperator'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:OT:Konstanzoperator'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:OT:Modulo-Operatoren'),
                    ))),
                      
                  array( 'normal',
                    '<h3 class="tools-class-contentlist-header">Lesestoff und Verweise \\\\ \\small{Informationen}</h3>'."\n"),
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:OT:Literatur'),
                    ))),
                      
                  $NPYo_g_index_KurseVortraegeWorkshops_Head,
                  $NPYo_g_index_KurseVortraegeWorkshops_ContentList,
                    
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_Head,
                  $NPYo_g_index_SozialeNetzwerkeForenSpenden_ContentList,
              )
          ); ?>
          
          
		    	<!  • Lexikon:  >
          <?php To_f_headline_add_hides_begin( 'Lexikon', 'Lexikon', 'OM:OT:Home:Lexikon', '          ', 'hideContent'); ?>
            <br>
          
            <table border="0"> <colgroup> <col width="22"> <col width="300"> <col width="16"> <col width="362"> </colgroup>
              <tr> <td valign="top">&rarr;</td> <td valign="top"><!a href="../de/XXX">
              XXX<!/a> <span style="color: #A0A0A0">(geplant)</span></td> <td valign="top" style="color: #A0A0A0">
                  &hellip;</td> <td valign="top" style="color: #A0A0A0">
                  XXX</td> </tr>
            </table>
          <?php To_f_headline_add_hides_end( '          ', 'hideContent'); ?>

          
			<?php FrQFT_f_Div_WrapperEnd( '      '); ?>

	
<?php FrQFT_f_HTML_EndDivsNavExtrFootContainerBody(); ?>
