<?php
  
  // #: Name:  "NSOSP.php"
  
  
  // #: Stand: 15.08.2021
  
  // #: History: (!: changed, incompatible; >: developed, compatible but is a real change; +: new, compatible; *: fixed, compatible)
  
  //v01.001:  20130515:  +:  History started.
  //          20130522:  +:  "$FrQFT_g_footnote_text_Kosmoi":  New.
  //          20130609:  +:  "$FrQFT_g_footnote_text_ARTLgFormel":  New.
  //          20130628:  +:  "$Glo_PathRel_back", "FrQFT_f_HTML_BeginHeaderBodyContainer", "FrQFT_f_HTML_EndDivsNavExtrFootContainerBody", "FrQFT_f_Div_Header", "FrQFT_f_Div_WrapperBegin", "FrQFT_f_Div_WrapperEnd":  New.
  //          20130713:  !:  "Science_v01_004.php"  -->  "Science_v01_005.php"
  //          20130714:  !:  "FrQFT_f_HTML_BeginHeaderBodyContainer", "$Glo_g_Site_ary":  Only the first parameter left in "FrQFT_f_HTML_BeginHeaderBodyContainer". The other data is now in "$Glo_g_Site_ary".
  //          20130801:  !:  "FrQFT_f_Div_WrapperBegin":  "text_titel_discr_h3" is now with style 'style="line-height: 1.4em;"'.
  //          20130808:  +:  "$FrQFT_g_footnote_text_Neutrinos":  Is new.
  //          20160925:  +:  "nSOSp_f_tableOfContents_descriptionString":  Is new.
  //                     +:  "nSOSp_f_tableOfContents_elementAry":  Is new.
  //          20181017:  +:  Several favicons implemented.
  //          20190225:  +:  "rel=canonical" in metadata is new.
  //          20210417:  !:  Defined a lot of constants to be compatible with PHP 7.2 and higher.
  
  
  
  //echo "Hello, world!";
  //phpinfo();
  
  // #: Mute Errors.
  // ini_set('display_errors', 'Off');
  // error_reporting(E_ALL & ~E_WARNING);
  // error_reporting(E_ERROR | E_WARNING | E_PARSE);
  // error_reporting(E_ERROR);

  
  
  
  include $Glo_PathRel_back.'../share/php/Science.php';

  
  $nSOSp_g_info_wolfgangHuss = array(
    author_adress => 'Wolfgang Huß \\\\'."\n".
                   'und Media Line Digital e.K. \\\\'."\n".
                   'Steinburger Straße 38 \\\\'."\n".
                   '22527 Hamburg, Germany, EU',
    author_contact => 'E-Mail: <span class="mailto" title="wolle.huss at pjannto.com">wolle.huss at pjannto.com</span> \\\\'."\n".
                   'Telefon: +49. 40. 38 03 77 37 \\\\'."\n".
                   'Mobil: +49. 173. 622 60 91',
    author_name => 'Wolfgang Huß',
    author_image_URL => 'Wolfgang_Huss-2016-IMG_3683-clip.jpg',
    author_image_alt => 'Wolfgang Huß ©2016 by Wolfgang Huß',
    author_image_width => '180px',
    author_image_height => '192px',
  );
                           
  include $Glo_PathRel_back.'../de/Operialtheorie/OT-Data.php';
  include $Glo_PathRel_back.'../de/Superial-Zahlen/SupNum-Data.php';
  
  
  $Glo_g_TextAlign = 'block';
  $Glo_g_Intent = '32px';
  $Glo_g_FigAlign = 'center';
  
  
  
  $FrQFT_g_text_HinwKosBeob                    = '\\italic{Die nachfolgenden Erklärungen werden aus Sicht eines \\jump{*KosmBeob-Herlei}{kosmischen Beobachters} beschrieben.}';
  $FrQFT_g_text_Ereignishori                   = '\\color{*Entwick}{Es handelt sich im Fall der Quanten-Fluss-Theorie nicht wirklich um einen Eregnishorizont im Sinne der Allgemeinen Relativitätstheorie. Wie genau sich die Dinge dort Verhalten, wo sich die Elapsonen stauen, ist zu untersuchen. Klar scheint, dass in dieser Theorie von außen betrachtet kein Elementarteilchen unzerstört durch den Übergangshorizont gehen kann. Dann ist dies auch aus Sicht des Elementarteilchens nicht möglich. \\color{*Bearb}{(Literatur: Artikel GEO 10/2014, "Wie schwarz ist Schwarz?", S. 130–144.) (Thema auf die Diskussionsseite aufnehmen.)}}';
  $FrQFT_g_text_PoundRebkaSnider_Steigung      = '\\color{*Entwick}{Dies ist mit Sicherheit richtig. Ich meine ich hatte dies vor Jahren irgendwo gelesen und daher übernommen. Leider konnte ich es bisher nicht wieder finden oder ersehen, woher ich es abgeleitet hatte. Dies ist also heraus zu finden. \\color{*Bearb}{Alternativ zeigen, dass die Steigung der Formel \\term{g⋅h/c^{2}} aus dem Pound-Rebka-Snider-Experiment entsprechend passt. Beziehungsweise \\term{Δ𝝂/𝝂_{0} = – Δφ_{g}/c^{2}} , vgl. \\cite{Pound:PoundSniderExper1965}, S. B 788.}}';
  $FrQFT_g_text_SymmetrieBruchFarbpol          = 'Der kreisrunde Vakuum-Elapsonen-String ist der symmetrischste denkbare Wirkungsquanten-String.'."\n".
                                                   'Durch einen Symmetriebruch, ausgelöst durch ihre Wechselwirkung innerhalb des Strings, sind die sich eigentlich gradlinig bewegenden Wirkungsquanten auf eine Helixspiralbahn ausgelenkt.'."\n".
                                                   'Sie laufen nun auf dem tiefsten Ring des Sombrero-Potentials eines Felds, dass dem Higgs-Feld sehr ähnelt.'."\n".
                                                   'Jedes Wirkungsquant erhält so einen Spin und eine Farbpolarisation, die von der Richtung und dem Abstand seiner Auslenkung abhängt.'."\n".
                                                   'Weil die Auslenkungen aller Wirkungsquanten des Strings sich in jeder Richtung ausgleichen, trägt der String nach außen hin die neutrale Farbladung weiß.'."\n".
                                                   '\\const{FrQFT_g_text_WQSWQMenge}';
  $FrQFT_g_text_VakuumElapson                  = 'Ein Wirkungsquanten-String eines unpolarisierten Photons.'."\n".
                                                   'Die Wirkungsquanten sind als rote Kugeln mit ihren abgestrahlten Impulskegeln dargestellt.'."\n".
                                                   'Ihre Impulskegel verbinden die Wirkungsquanten zu einem geschlossenen String, der so durch einen strukturellen Regelprozess stabilisiert ist.';
  $FrQFT_g_text_WQSWQMenge                     = 'In der Realität sind extrem viele, sehr kleine Wirkungsquanten im String, die sehr nahe beieinander liegen.';

  $NPYo_g_text_LebenDesHorusHermesstab_Orig    = 'Abbild des Lebens, das sehr ähnlich in altägyptischen Darstellungen zu finden ist. Hier mit Hermesstab, im näherem Bezug zum Achtsamkeitsprozess mit zwei Schlangen, wie auch im alten Ägypten. Die beiden Schlangen stellen hier das Gefühl und die Handlung, das (Wahr-)Nehmen/Empfangen und das Geben/Senden des Achtsamkeitsprozesses dar. \\color{*Light}{\\small{Lizenz: \\jumpname{OM:FrQFT:Impressum:CopyrightLizenz:EyeOfHorus}}}';
  $NPYo_g_text_LebenDesHorusHermesstab_Phoenix = 'Abbild des Lebens, das sehr ähnlich in altägyptischen Darstellungen zu finden ist. Es entsteht unten im Ei der Metamorphose, dem aschefarbenen Dreiviertel-Mond, und entwickelt sich über den Aufstieg der Kundalini-Schlangen aus der Wurzel, dem mütterlichen Schoß, ins Licht der väterlichen Sonne, der Klugheit oder Weisheit, wo es verbrennt und wieder zur Asche wird. So gesehen stellt dieses Bild erstaunlich authentisch den Kreislauf des ›Phönix aus der Asche‹ dar. \\color{*Light}{\\small{Lizenz: \\jumpname{OM:FrQFT:Impressum:CopyrightLizenz:EyeOfHorus}}}';

  
  // const text = 'text';
  const Shape = 'Shape';
  const addtext = 'addtext';

  $OM_g_text_MedHaftungsausschluss =
                  array( 'text', array( text => array(
                    // # Übernommen von Alexis Rada Ling, URL: https://www.soul-frequencing.com/impressum-1
                    'Mediziner, Heilpraktiker und psychologische Therapeuten sind für die Behandlungen von Krankheiten ausgebildet.'."\n".
                    'Ich gehöre nicht zu diesen Personengruppen.'."\n".
                    'Ich helfe lediglich Krankheiten vorzubeugen, unter Umständen Heilungsprozesse zu beschleunigen und insgesamt ihre Lebenssituation zu verbessern.'."\n",
                      'Ich stelle ausdrücklich fest, dass ich keine Krankheitsdiagnosen erstelle, keine Behandlungen durchführe und keine Heilversprechen in Bezug auf'."\n".
                    'irgendwelche körperlichen oder psychischen Leiden gebe.'."\n",
                      'Bei jedem Leiden rate ich, einen Arzt oder Heilpraktiker aufzusuchen.'."\n".
                    'Im Einzelfall bestehe ich drauf,'."\n".
                    'wenn ich über Leiden und Krankheiten spreche, so tue ich dies als medizinischer Laie in einem lebenspraktischen Beratungsgespräch.'."\n".
                    'Meine Methoden und Fachmethoden sind grundsätzlich Hilfen zur Selbsthilfe in Eigenverantwortung.'."\n".
                    'Eine Haftung ist im Rahmen der Gesetzgebung grundsätzlich ausgeschlossen.'."\n")));
  
  $FrQFT_g_text_QuantengravRechnungOhneNaeh    =
                  array( 'text', array( text => array(
                    'Ohne \\jump{OM:FrQFT:Quantengravitation:Lichtverlangsamung:NaeherungGrosseAbstaend}{Näherung für große Abstände},'."\n".
                    'also bei einigen Vielfachen des Elementarteilchen-Radius, ergibt sich folgende Rechnung.'."\n".
                    'Es bleibt die Simplifizierung des Leptonen-Strings und Vakuums:'."\n")));

  $FrQFT_g_zitat_BuckminsterFuller_StartingPoint =
                  array( 'text', array( Shape  => 'quote', text => array(
                        'The vector equilibrium is the zero starting point for happenings or nonhappenings: it is the empty theater and empty circus and empty Universe ready to accommodate any act and any audience.'."\n"),
                        addtext => '~Richard Buckminster Fuller\\footnote{Buckminster Fuller, Richard, \\jump[http://www.rwgrayprojects.com/SynergeticsDictionary/SD.html]{}{SYNERGETICS} (2nd. Ed.) at Sec. 503.03; 11 Dec\'75. \\\\ Internet: \\\\ Cosmometry, Vector Equilibrium & Isotropic Vector Matrix. URL: \\jump[https://cosmometry.net/vector-equilibrium-&-isotropic-vector-matrix]{}{https://cosmometry.net/vector-equilibrium-&-isotropic-vector-matrix}.}'));
  
  $NPYo_g_angebot_IchGebeDirNaPhilYoga =
                  array( 'text', array( Shape  => 'italic', text => array(
                    'Ich gebe dir \\jump{OM:NPYo:Angebote-Veranstaltungen:NaPhilYogaCoaching}{NaPhil-Yoga Coaching} \\\\'."\n".
                    'kombiniert mit Intensive Yoga Unterricht (Power Yoga). \\\\'."\n".
                    '\\small{\\color{*TitleAdd}{Spende was du kannst oder bringe gerne selbstgemachtes Essen mit. \\\\'."\n".
                    'Bist du daran interessiert? Dann \\jump{OM:FrQFT:Impressum}{melde dich} bei mir.}}'."\n")));
  
  $SpaLeb_g_zitat_WolfBuentig_Normopathie =
                    array( 'text', array( Shape  => 'quote', text => array(
                        'Ich nenne das Normopathie.'."\n".
                        'Das Leben nach den Normen, unter Vernachlässigung des Wissens, worum es bei mir jetzt geht.'."\n".
                        'Das kommt …, das kommt von dieser Anpassung.'."\n",
                          'Die Normale Depression kann man … kann man messen in Grad Celsius.'."\n".
                        'Die Unterdrückung der eigenen Gefühle und Emotion, und schließlich der eigenen Impulse, geschieht durch Drosselung der Atmung.'."\n".
                        'Keine Atmung, wenig Sauerstoff, wenig Feuer, wenig Lust.'."\n".
                        'Als wir ZIST aufbauten galten 18°C als eine angenehme Wohnzimmertemperatur.'."\n".
                        'Heute sind wir bei 23.'."\n".
                        'Das heißt, wir verbrauchen alle Energie, im uns Zusammenreißen, halten, irgendwie halten, uns hoch halten und so weiter, statt im Lustvollen Leben.'."\n"),
                        addtext => '\\footnote{\\cite{KenFM:ImGespraechMitWolfBuentig:2017}, \\quote{Ich nenne das Normopathie. Das Leben nach den Normen, unter Vernachlässigung des Wissens, worum es bei mir jetzt geht. …}, ab Sek. 1:12:20. \\\\ Die ZIST gemeinnützige GmbH (Zentrum für Individual- und Sozialtherapie) finden sie unter: \\jump[https://www.zist.de][]{}{https://www.zist.de}.}'));
  
  $SpaLeb_g_zitat_Fliessbach_ART1998_BestaetigMachprinzip =
                    array( 'text', array( Shape  => 'quote', text => array(
                        'Zusammenfassend stellen wir [im Hinblick auf die Allgemeine Relativitätstheorie] fest:'."\n",
                          'Ein Inertialsystem [– auch ausgezeichnetes Bezugssystem genannt –] ist durch ein Bezugssystem gegeben, von dem aus die Massenverteilung des'."\n".
                        'Universums [– in der Quanten-Fluss-Theorie: des Kosmos –] im Großen und im Mittel isotrop ist[, also in jede Richtung gleich].'."\n".
                        'Entscheidende Voraussetzung ist dabei die Isotropie; dies schließt insbesondere relativ zum Fixsternhimmel rotierende Bezugssysteme aus.'."\n",
                          'Unter Machprinzip wird verstanden, daß die Massen im Universum die Inertialsysteme festlegen.'."\n".
                        'Die jetzt gefundene Aussage kann als Bestätigung des Machprinzips betrachtet werden.'."\n"),
                        addtext => '\\footnote{\\cite{Fliessbach:ART1998}, Teil IX Dynamische Sternmodelle, Kap. 44 Isotrope zeitabhängige Metrik und Birkhoff-Theorem, Machsches Prinzip, S. 253-254, hier S. 254.}'));

  
  $NSOSP_g_footnote_text_PeanoAxiome            = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:PeanoAxiome:2021}, Axiome, Ursprüngliche Formalisierung.';

  $FrQFT_g_footnote_text_AequivalPrinzTraeSchMasse = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Giulini:GravitationEquivalencePrincipleAndQuantumMechanics2013}, S. 2-6. \\\\ Vgl. \\cite{Harrison:Kosmologie:1983}, Kap. 8 Allgemeine Relativitätstheorie, S. 253-290, hier S. 253-260. \\\\ Vgl. \\cite{Born:RTEinsteins1969}, Kap. VII. Die allgemeine Relativitätstheorie Einsteins, S. 266-324, hier S. 269-273. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Giulini:EinsteinImQuantentest2013}, S. 58-61. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Aequivalenzprinzip2014}.';
  $FrQFT_g_footnote_text_AequivalMasseEnergie   = 'Vgl. \\cite{Einstein:IstDieTraegheitSeinEnergieInhalt1905}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:AequivalenzVonMasseUndEnergie2013}.';
  $FrQFT_g_footnote_text_Annihilation           = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Annihilation:2015}.';
  $FrQFT_g_footnote_text_AntimaterieProblem     = '\\color{*Bearb}{(Mehr Verweise!)} \\\\ Vgl. \\cite{Falkowski:HiggsOnTheMoon:2017}.';
  $FrQFT_g_footnote_text_ART                    = 'Vgl. \\cite{Fliessbach:ART1998}. \\\\ Vgl. \\cite{Harrison:Kosmologie:1983}, Kap. 8 Allgemeine Relativitätstheorie, S. 253-290. \\\\ Vgl. \\cite{Born:RTEinsteins1969}, Kap. VII. Die allgemeine Relativitätstheorie Einsteins, S. 266-324. \\\\ Vgl. \\cite{Einstein:GrundlagenART1916}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:ART2013}.';
  $FrQFT_g_footnote_text_ARTLgFormel            = 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Kap. 2 Bending of a Beam of Light Passing a Massive Object, S. 1-4, hier Formel 2.1, S. 1. \\\\ Diese Formel kann man aus der Veränderung der Detektorwellenlänge der Schwarzschild-Lösung herleiten: \\\\ Vgl. \\cite{Harrison:Kosmologie:1983}, Kap. 9 Schwarze Löcher, S. 291-323, hier S. 295, ergänzendes S. 297, 320. \\hidden{, siehe Kapitel \\hidden{Sec: Berechnung der Lichtgeschwindigkeit im dreidimensionalen Raum des Gravitationsfelds der Schwarzschild-Lösung}. Achtung: Die Formel 11.8 ist verkehrt, denn die Radien gehören vertauscht! Siehe Kap. 11 Rotverschiebungen. S. 362-389, hier S. 369, Formel 11.8.} \\\\ Internet: \\\\ Vgl. \\cite{wiki:GravitationalRedshift:2015}, Definition.';
  $FrQFT_g_footnote_text_ARTPruef               = 'Vgl. \\cite{Greene:ElegUniv2000}, Kap. 3 Von Krümmungen und Kräuselwellen, 72-107, hier S. 106. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Boerner:DunkEnergie2008}, Alternative Gravitationstheorien, S. 43. \\\\ Vgl. \\cite{Bergia:Einstein2005}, Kap. Einsteins Erbe, S. 94-103. \\\\ Vgl. \\cite{Smolin:QuantRaum2004}, S. 56.';
  $FrQFT_g_footnote_text_ARTUnvollstaendig      = 'Vgl. \\cite{Eichhorn:DieZaehmungDesUnendlichen:2019}, S. 14. \\\\ Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 1 Die fünf großen Probleme der theoretischen Physik, S. 31-48, hier S. 33.';
  $FrQFT_g_footnote_text_ARTVarZeit             = 'Vgl. \\cite{Kiefer:DoesTimeExistInQuantumGravity2009}, S. 2.\\hidden{Er hat dazu auch ein Buch: C. Kiefer, Quantum Gravity, second edition (Oxford University Press, Oxford, 2007).} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}, S. 37.';
  $FrQFT_g_footnote_text_Aeskulapstab           = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Aeskulapstab:2019}.';
  $FrQFT_g_footnote_text_BasTModDeBroglieFreq   = 'Vgl. \\cite{Giese:TheStructureOfMatter:2004}, 1 Introduction, S. 1.';
  $FrQFT_g_footnote_text_BasisteilchenMGravityLKFormel = 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, Speed Reduction in Detail, S. 20-22, hier Formel C.8, S. 22. Die erste Variable rechts neben dem Gleichheitszeichen \\term{w_{0}} ist dort mit \\term{r} benannt. Diese Benennung ist fehlerhaft, weil es eine weitere Variable \\term{r} unter dem Bruch gibt, die von der ersten unabhängig ist. Beide müssen also unterschieden werden, weil die erste neben dem Gleichheitszeichen eine generelle geometrische Ausdehnung von Strukturen meint, während die zweite den Abstand vom Zentrum einer Zentralmasse bedeutet. Folgerichtig habe ich dann die Variable \\term{r_{red}} bei Giese in \\term{d_{red}} umbenannt, weil diese die Reduktion der Ausdehnung einer generellen Struktur meint. Die Konstante \\term{c} habe ich wegen der Eindeutigkeit in \\term{c_{0}} umbenannt.';
  $FrQFT_g_footnote_text_BasisteilchenMGravityLKMechanis = 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, Speed Reduction in Detail, S. 20-22, hier in der Entwicklung der Formel C.8, S. 22.';
  $FrQFT_g_footnote_text_BasisteilchenMGravity  = 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, 3 Relationship between Gravity and the Basic Particle Model, S. 4-6, hier S. 5-6.';
  $FrQFT_g_footnote_text_ComptonFrequenz        = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Harrison:Kosmologie:1983}, Kap. 17 Die kosmischen Zahlen, S. 516-542, hier S. 518-523. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Compton-Effekt:2015}, Compton-Wellenlänge. Die Compton-Frequenz lässt sich aus der Compton-Wellenlänge berechnen.';
  $FrQFT_g_footnote_text_ComptonFrequenzGravi   = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Giulini:GravitationEquivalencePrincipleAndQuantumMechanics2013}, S. 12-14. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Giulini:EinsteinImQuantentest2013}, 63-64.\\hidden{ \\\\ Internet: \\\\ \\color{*Bearb}{XXX}}';
  $FrQFT_g_footnote_text_Confinement            = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Ent:DerKlebstoffDerWelt:2015}, S. 60, 61. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Confinement2013}. \\\\ Vgl. \\cite{Alkofer:QuarkConfinementOnline2006}, S. 1.';
  $FrQFT_g_footnote_text_DeBroglieBohmTheorie   = '\\color{*Bearb}{(Weitere Fachliteratur einfügen!)} \\\\ Vgl. \\cite{Schaal:InwieweitIstEineRelativistischeFormulierungDerBohmschenMechanikMoeglich:2014}. \\\\ Populärwissenschaftliche Literatur: \\\\ Vgl. \\cite{Ananthaswamy:KeinAuswegAusDerUnwirklichkeit:2018}, S. 17, 19. \\\\ Internet: \\\\ Vgl. \\cite{wiki:De-Broglie-Bohm-Theorie:2018}.';
  $FrQFT_g_footnote_text_DeBroglieBohmTheorieKonsQM  = '\\color{*Bearb}{(Weitere Fachliteratur einfügen!)} \\\\ Vgl. \\cite{Schaal:InwieweitIstEineRelativistischeFormulierungDerBohmschenMechanikMoeglich:2014}, Kap. 2. Grundkonzepte der Bohmschen Mechanik, 2.1. Realitätsbezug, S. 2-5, hier S. 5. \\\\ Populärwissenschaftliche Literatur: \\\\ Vgl. \\cite{Ananthaswamy:KeinAuswegAusDerUnwirklichkeit:2018}, S. 17, 19. \\\\ Internet: \\\\ Vgl. \\cite{wiki:De-Broglie-Bohm-Theorie:2018}.';
  $FrQFT_g_footnote_text_DeBroglieFrequenzWellen = '\\color{*Bearb}{(Weitere Fachliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Materiewelle:2020}.';
  $FrQFT_g_footnote_text_DoppelSpaltExp         = 'Vgl. \\cite{Feynman:Quantenmechanik2009}, Kap. 1 Quantenverhalten, S. 3-15. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Doppelspaltexp2013}.';
  $FrQFT_g_footnote_text_Dualismus              = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Dualismus:2015}.';
  $FrQFT_g_footnote_text_DunkleEnergie          = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur \\\\ Vgl. \\cite{Frieman:DasDunkelsteGeheimnis:2016}.';
  $FrQFT_g_footnote_text_DunkleMat              = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Lesch:Kosmologie2006}, Kap. II. Dunkle Materie, Was ist Dunkle Materie? S. 42-43. \\\\ Sekundärliteratur \\\\ Vgl. \\cite{Kroupa:SMKPruefstand2010}, S. 22-23. \\\\ Vgl. \\cite{Milgrom:DunkMat2002}, S. 34-36. \\\\ Internet: \\\\ Vgl. \\cite{Eidemueller:WieWirftManLichtAufDunkleMaterie:2016}. \\\\ Vgl. \\cite{Eidemueller:DieTuerInsDunkleUniversum:2016}. \\\\ Vgl. \\cite{wiki:DunkleMaterie2013}.';
  $FrQFT_g_footnote_text_DunkleMatPhaeno        = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Lesch:Kosmologie2006}, Kap. II. Dunkle Materie, Verborgene Materie, S. 23-30. \\\\ Sekundärliteratur \\\\ Vgl. \\cite{Gast:WIMP2013}, S. 50. \\\\ Vgl. \\cite{Kroupa:SMKPruefstand2010}, S. 22. \\\\ Vgl. \\cite{Milgrom:DunkMat2002}, S. 34-36. \\\\ Internet: \\\\ Vgl. \\cite{Eidemueller:WieWirftManLichtAufDunkleMaterie:2016}. \\\\ Vgl. \\cite{wiki:DunkleMaterie2013}, Indizien für die Existenz Dunkler Materie.';
  $FrQFT_g_footnote_text_DunkleMatUnklar        = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Lesch:Kosmologie2006}, Kap. II. Dunkle Materie, S. 15-90. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Moskowitz:DunkleMaterieWirdExotischer2014} \\\\ Vgl. \\cite{Kroupa:SMKPruefstand2010}, S. 22. \\\\ Vgl. \\cite{Wolschin:DunklesOrakel2009}. \\\\ Vgl. \\cite{Boerner:DunkEnergie2008}, S. 43. \\\\ Vgl. \\cite{Musser:ZielRaumzeit2007}. \\\\ Vgl. \\cite{Poessel:KosImCom2005}. \\\\ Vgl. \\cite{Lublinski:JagtDunkMat2004}. \\\\ Vgl. \\cite{Atwood:FenstUniv2004}, S. 36. \\\\ Vgl. \\cite{Milgrom:DunkMat2002}. \\\\ Internet: \\\\ Vgl. \\cite{Eidemueller:WieWirftManLichtAufDunkleMaterie:2016}.';
  $FrQFT_g_footnote_text_EinsteinAequiMasEner   = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:AequivalenzVonMasseUndEnergie:2018}.';
  $FrQFT_g_footnote_text_EinsteinGleichLichtq   = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Born:RTEinsteins1969}, Kap. VI. Das spezielle Einsteinsche Relativitätsprinzip, 194-266, hier S. 251. \\\\ Internet: \\\\ Vgl. \\cite{wiki:PlanckschesWirkungsquantum2013}, Historisches zur Entdeckung und Rezeption, h und die Lichtquanten.';
  $FrQFT_g_footnote_text_EinsteinSynchron       = 'Vgl. \\cite{Weiss:AltToSpeedOfLight2006}, III. Synchronization of Clocks, S. 5-10. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Einstein-Synchronisation:2017}.';
  $FrQFT_g_footnote_text_Emergenz               = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Emergenz2015}.';
  $FrQFT_g_footnote_text_EnergErhal             = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Energieerhaltungssatz2014}.';
  $FrQFT_g_footnote_text_EreignHori             = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Harrison:Kosmologie:1983}, Kap. 9 Schwarze Löcher, S. 291-323, hier S. 301-322. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Ereignishorizont2013}.';
  $FrQFT_g_footnote_text_EreignHoriFeuerwand    = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Polchinski:FeuerwandAmHorizont:2015}.';
  $FrQFT_g_footnote_text_FraktalLoestUnendlichk = 'Vgl. \\cite{Eichhorn:DieZaehmungDesUnendlichen:2019}, S. 19.';
  $FrQFT_g_footnote_text_GesetzeDerFormMarkedSpaceUnmarkedSpace = '\\color{*Bearb}{(Primärliteratur einfügen!!!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:GesetzeDerForm:2018}, Unmarked Space. \\\\ Gute Veranschaulichung, obwohl eigentlich nicht zitierfähig: \\\\ Vgl. \\cite{UnbekannterAuthorFHVorarlberg:GesetzeDerFormWasIstEinSystem:2018}.';
  $FrQFT_g_footnote_text_Gleichzeitigkeit       = 'Vgl. \\cite{Weiss:AltToSpeedOfLight2006}, IV. Medium transformation, A. Properties of medium transformation, 3. Simultaneity, S. 12. \\\\ Vgl. \\cite{Selleri:EinsteinLorentz1998}, Kap. 6. Zeit und Bewegung, 6. Gleichzeitigkeit und Laufzeit, S. 162-166. \\\\ Internet: \\\\ Vgl. \\cite{wiki:RelativitaetDerGleichzeitigkeit:2017}.';
  $FrQFT_g_footnote_text_GraviDurchLichtbeug    = 'Vgl. Kapitel \\jumpname{OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation} \\\\ Vgl. \\cite{Giese:TheOrigOfGravity2011}, Kap. 3 Relationship between Gravity and the Basic Particle Model, S. 4-6, hier S. 5-6. \\\\ Vgl. \\cite{Huss:GFTv7.243j2009}, 5.2.2 Wechselwirkung von potenzialen Photonen-Beugungssystemen, S. 44-50, hier S. 45-46, Abbildung 5.6, S. 47. Dies ist die älteste im Netz veröffentlichte Version, die dies enthält. Die Idee ist aber schon viel älter. \\color{*Bearb}{Mindestens aus dem Jahr 2003. Siehe „Persönliche Äußerung zur Relativistische Gravitonendynamik (RGD) und zur Gravitonenflusstheorie (GFT), als Entwurf von Wolfgang Huß“, Variante 5.08, vom 23.12.2003.}';
  $FrQFT_g_footnote_text_GraviLichtbeug         = 'Vgl. Kapitel \\jumpname{OM:FrQFT:Quantengravitation:Lichtverlangsamung} und \\jumpname{OM:FrQFT:Quantengravitation:Lichtbeugung} \\\\ Hier wird ohne die Quanten-Fluss-Theorie noch nicht die ganz exakte Formel hergeleitet, aber strukturell stimmt sie schon: Vgl. \\cite{Giese:TheOrigOfGravity2011}, Kap. 6.1 The Variation of the Speed of Light, S. 8-9, sowie Appendix C Variation in the Speed of Light, S. 19-22. \\\\ Vgl. \\cite{Huss:GFTv7.243j2009}, 3.2 Physikalische Realisierung der Grundannahmen, S. 30-35, hier S. 34, Abbildung 5.5, S. 47. Dies ist die älteste im Netz veröffentlichte Version, die dies enthält. Die Idee ist aber schon viel älter. \\color{*Bearb}{Etwa aus dem Jahr XXX.} \\\\ ART: \\\\ Vgl. \\cite{Shapiro:FourthTestOfGeneralRelativity:1964:PhysRevLett.13.789}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:ShapiroVerzoegerung:2019}.';
  $FrQFT_g_footnote_text_GraviLichtbeugART      = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:ART2013}, Physikalische Effekte, Lichtablenkung und Lichtverzögerung.';
  $FrQFT_g_footnote_text_GraviRotVersch         = 'Vgl. \\cite{Fliessbach:ART1998}, Teil III Physikalische Grundlagen der ART, Kap. 12 Gravitationsrotverschiebung, S. 58-64. \\\\ Vgl. \\cite{Giulini:GravitationEquivalencePrincipleAndQuantumMechanics2013}, S. 5-6. \\\\ Vgl. \\cite{Harrison:Kosmologie:1983}, Kap. 8 Allgemeine Relativitätstheorie, S. 253-290, hier S. 275-278; Kap. 9 Schwarze Löcher, S. 291-323, hier S. 295, ergänzendes S. 297, 320; Kap. 11 Rotverschiebungen, S. 362-389, hier S. 369. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Giulini:EinsteinImQuantentest2013}, 60-61. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Rotverschiebung:2015}, Gravitative Rot- und Blauverschiebung. \\\\ Vgl. \\cite{wiki:GravitationalRedshift:2015}. \\\\ Vgl. \\cite{wiki:ART2013}, Gravitative Zeitdilatation und Rotverschiebung.';
  $FrQFT_g_footnote_text_Gravitation            = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Gravitation:2015}.';
  $FrQFT_g_footnote_text_HeisenbUnschaerf       = 'Vgl. \\cite{Heisenberg:UeberQuantKinMech1927}. \\\\ Vgl. \\cite{Heisenberg:UeberQuantKinMech1927Scan}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:HeisenbergUnschaerferel2012}.';
  $FrQFT_g_footnote_text_HeisenbUnschaerfAbzInt = 'Vgl. \\cite{Treitz:Unbestimmtheit2010}.';
  $FrQFT_g_footnote_text_HiggsMech              = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:HiggsMechanismus2014}.';
  $FrQFT_g_footnote_text_HiggsMechAnalog        = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:HiggsMechanismus2014}, Populärwissenschaftliche Interpretation. \\\\ Vgl. \\cite{Hagner:HiggsMechanismusOnline2009}, S. 5.';
  $FrQFT_g_footnote_text_HiggsPotenz            = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:HiggsMechanismus2014}, Higgs-Potential (mit Veranschaulichung). \\\\ Vgl. \\cite{Mueller:HiggsTeilchen-LexikonDerAstrophysik2007}, Symmetriebrechung anschaulich.';
  $FrQFT_g_footnote_text_Hintergrundunabh       = 'Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 6 Quantengravitation: Am Scheideweg, S. 126-149. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Smolin:QuantRaum2004}, S. 57. \\\\ Internet: \\\\ Vgl. \\cite{Smolin:SchauspielVeraeBuehne2005}.';
  $FrQFT_g_footnote_text_IndNachweisHiggsFeld   = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Luest:VomHiggsZurWeltformel2013}, S. 54-56. \\\\ Vgl. \\cite{Tonelli:WegZumHiggs2012}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:HiggsBoson2013}, hier Higgs-Teilchen im Standardmodell.';
  $FrQFT_g_footnote_text_InertSys               = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Inertialsystem2014}.';
  $FrQFT_g_footnote_text_Neutrinos              = 'Vgl. \\cite{Fritzsch:Mikrokosmos2012}, 7. Kap. Oszillierende Neutrinos, S. 119-127. \\\\ Vgl. \\cite{wiki:Neutrino2013}.';
  $FrQFT_g_footnote_text_Natuerlichkeit         = '\\color{*Bearb}{(Primärliteratur einfügen!!!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Gast:AmEndeDerNatuerlichkeit:2018}. \\\\ Internet: \\\\ \\cite{wiki:Natuerlichkeitsproblem:2022}.';
  $FrQFT_g_footnote_text_NotNeuePhysik          = '\\color{*Bearb}{(Fachliteratur einfügen!!!)} \\\\ Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 1 Die fünf großen Probleme der theoretischen Physik, S. 31-48. \\\\ Populärwissenschaftliche Literatur: \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}, S. 34-35, 38. \\\\ Vgl. \\cite{Kroupa:SMKPruefstand2010}, S. 30-31. \\\\ Vgl. \\cite{Nicolai:AufPhysWeg21j2008}, S. 31. \\\\ Vgl. \\cite{Boerner:DunkEnergie2008}, S. 43. \\\\ Vgl. \\cite{Nicolai:GrossVereinig2005}, S. 84-85. \\\\ Vgl. \\cite{Smolin:QuantRaum2004}, S. 56. \\\\ Video: \\\\ Vgl. \\cite{SpektrumDerWissenschaft:WieFunktioniertDieSchwerkraftAufQuantenebene:2017}';
  $FrQFT_g_footnote_text_MachPrinz              = 'Vgl. \\cite{Fliessbach:ART1998}, Teil IX Dynamische Sternmodelle, Kap. 44 Isotrope zeitabhängige Metrik und Birkhoff-Theorem, Machsches Prinzip, S. 253-254. \\\\ Vgl. \\cite{Harrison:Kosmologie:1983}, Kap. 8 Allgemeine Relativitätstheorie, S. 253-290, hier S. 278-282. \\\\ Vgl. \\cite{Born:RTEinsteins1969}, Kap. VII. Die allgemeine Relativitätstheorie Einsteins, S. 266-324, hier S. 311-321, besonders 268, 311, 318. \\\\ Internet: \\\\ Vgl. \\cite{wiki:MachschesPrinzip2014}.';
  // #: Siehe auch für Veränderungen "FrQFT_g_footnote_text_LGEinZweiWeg".
  $FrQFT_g_footnote_text_MediumMessenLGEinZweiWeg = 'Das wir unsere Relativgeschwindigkeit im Medium nicht messen können, dass liegt daran, dass wir nur in der Lage sind die Zweiweg-Lichtgeschwindigkeit zu messen, nicht aber die Einweg-Lichtgeschwindigkeit: \\\\ \\const{FrQFT_g_footnote_text_LGEinZweiWeg}';
  $FrQFT_g_footnote_text_MichelsonExp           = 'Vgl. \\cite{Herrmann:RotatingOpticalCavityExperimentTestingLorentzInvariance:2009}. \\\\ Vgl. \\cite{Michelson:RelativeMotionInLumiEther1887}. Siehe auch die Deutsche Übersetzung: \\cite{Michelson:MichelMorExperi2011}. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Giulini:EinsteinImQuantentest2013}, S. 60. \\\\ Internet: \\\\ Vgl. \\cite{wiki:MichelsonMorleyExperiment2015}.';
  $FrQFT_g_footnote_text_MOND                   = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Lesch:Kosmologie2006}, Kap. II. Dunkle Materie, MOND, S. 85-89. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{wiki:ModifizierteNewtonscheDynamik2013}. \\\\ Vgl. \\cite{Kroupa:SMKPruefstand2010}, S. 31. \\\\ Vgl. \\cite{Milgrom:DunkMat2002}, S. 36-41.';
  $FrQFT_g_footnote_text_Kosmoi                 = 'In der Quanten-Fluss-Theorie werden die Begriffe Universum und Kosmos getrennt. Unser Kosmos bleibt das, was wir als Beobachter sehen, wenn wir mit unseren Teleskopen in den Weltraum schauen. Als Kosmos im Allgemeinen wird aber auch das Innere eines Schwarzen Lochs bezeichnet. Dadurch gibt es nicht nur unseren Kosmos, sondern viele Kosmoi. Das Universum meint alle gestaffelten Kosmoi gemeinsam.';
  $FrQFT_g_footnote_text_KosmoPrinz             = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Urknall2015}, Grundannahmen, Kosmologisches Prinzip.';
  $FrQFT_g_footnote_text_KosmoZeit              = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{MaxPlanckInstituteForGravitationalPhysics:KosmischeZeit:2015}.';
  $FrQFT_g_footnote_text_KosmosEuklFlach        = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Marinoni:AGeometricMeasureOfDarkEnergyWithPairsOfGalaxies2010}. \\\\ Vgl. \cite{Lesch:Kosmologie2006}, hier S. 144, 201. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Boerner:DunkEnergie2008}, hier S. 41-42. \\\\ Vgl. \\cite{Freedman:ExpUni2003}. \\\\ Internet: \\\\ \\color{*Bearb}{(Internetliteratur einfügen!)}';
  $FrQFT_g_footnote_text_LaengenkontrBew        = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Born:RTEinsteins1969}, Kap. VI. Das spezielle Einsteinsche Relativitätsprinzip, 194-266, hier S. 212-216. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Lorentzkontraktion2015}.';
  $FrQFT_g_footnote_text_LaengenkontrBewFrQFT   = 'Vgl. \\cite{Giese:RelaContra2009}. \\\\ Vgl. \\cite{Weiss:AltToSpeedOfLight2006}, IV. Medium transformation, A. Properties of medium transformation, 1. Length contraction, S. 12.';
  $FrQFT_g_footnote_text_LaengenkontrGravFrQFT  = 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22. Bei veränderlicher Lichtgeschwindigkeit im Gravitationsfeld ist der Mechanismus der realen Längenkontraktion durch Bewegung hierauf übertragbar: Vgl. \\cite{Giese:RelaContra2009}.';
  $FrQFT_g_footnote_text_LHC                    = 'Vgl. \\cite{wiki:LHC2013}.';
  $FrQFT_g_footnote_text_Lichtuhr               = '\\color{*Bearb}{(Primärliteratur einfügen! Z.B. \\cite{Selleri:EinsteinLorentz1998}, S. XXX.)} \\\\ Internet: \\\\ Vgl. \\cite{Poessel:VonDerLichtuhrZurZeitdilatation2010}. \\\\ Vgl. \\cite{wiki:Zeitdilatation2014}, Zeitdilatation durch relative Bewegung, Lichtuhr.';
  $FrQFT_g_footnote_text_LG                     = 'Internationaler Standard: Vgl. \\cite{NIST:CODATASpeedLightVac2011}. \\\\ Internet: \\\\ \\color{*Bearb}{Wiki einpflegen.}';
  // #: Siehe auch für Veränderungen "FrQFT_g_footnote_text_MediumMessenLGEinZweiWeg".
  $FrQFT_g_footnote_text_LGEinZweiWeg           = 'Vgl. \\cite{Selleri:EinsteinLorentz1998}, Kap. 4. Nichtinvarianz der Ein-Weg-Lichtgeschwindigkeit, S. 75-110. \\\\ Internet: \\\\ Vgl. \\cite{wiki:EinwegLichtgeschwindigkeit2014}.';
  $FrQFT_g_footnote_text_LGUeberLG              = 'Da Informationen nur über die translative Lichtgeschwindigkeit der Wirkungsquanten transportiert werden, ergibt sich kein Informationsfuss mit Überlichtgeschwindigkeit und damit kein Widerspruch zu den Beobachtungen und anerkannten Theorien!';
  $FrQFT_g_footnote_text_LorentzAetherTh        = 'Vgl. \\cite{Selleri:EinsteinLorentz1998}. \\\\ Vgl. \\cite{Lorentz:AbhandlungTheoPhysik1907}. \\\\ Vgl. \\cite{Lorentz:TheorieElecOptBewKoerper1895Scan}. \\\\ Vgl. \\cite{Lorentz:TheorieElecOptBewKoerper1895Html}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:LorentzscheAethertheorie2014}. \\\\ Vgl. \\cite{wiki:SpezielleRelativitaetstheorie2013}, Verhältnis zu anderen Theorien, Äthertheorien.';
  $FrQFT_g_footnote_text_LorentzAetherThGleichzeit = 'Vgl. \\cite{Giese:RelaContra2009}. \\\\ Vgl. \\cite{Giese:WhyTimeSlowing2009}. \\\\ Vgl. \\cite{Weiss:AltToSpeedOfLight2006}. \\\\ Vgl. \\cite{Selleri:EinsteinLorentz1998}, Kap. 3. Das Relativitätsprinzip und die Natur der Zeit, 3.2 Das Nachgehen sich bewegender Uhren, S. 41-45. \\\\ Vgl. \\cite{Lorentz:AbhandlungTheoPhysik1907}. \\ Vgl. \\cite{Lorentz:TheorieElecOptBewKoerper1895Scan}. \\\\ Vgl. \\cite{Lorentz:TheorieElecOptBewKoerper1895Html}.';
  $FrQFT_g_footnote_text_LorentzKontrFelder     = 'Im Besonderen erarbeitete, vermutlich als erster, Oliver Heaviside die Kontraktion der Form von in einem Medium oder Äther bewegten, elektromagnetischen Feldern. Die Kontraktion einer bewegten Kugel oder Sphere wurde nach ihm als „Heaviside-Ellipsoid“ benannt: \\\\ Vgl. \\cite{Giese:RelaContra2009}. \\\\ Vgl. \\cite{Sexl:RelativitaetGruppenTeilchen:1976}, S. 96. \\\\ Vgl. \\cite{Heaviside:OnTheElectromagneticEffectsDueToTheMotionOfElectrificationThroughADielectric:1889.2014}. \\\\ Vgl. \\cite{Heaviside:OnTheElectromagneticEffectsDueToTheMotionOfElectrificationThroughADielectric:1889.2009}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Lorentzkontraktion2015}. \\\\ Vgl. \\cite{wiki:GeschichteDerLorentz-Transformation:2018}, Heaviside, Thomson, Searle (1888, 1889, 1896). \\\\ Vgl. \\cite{wiki:MichelsonMorleyExperiment2015}, Erklärung, Spezielle Relativitätstheorie.';
  $FrQFT_g_footnote_text_LQG                    = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}, hier S. 40-41. \\\\ Vgl. \\cite{Giesel:LoopQuantengravitation2011}. \\\\ Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 15 Die Physik nach der Stringtheorie, S. 322-347, hier S. 334-342. \\\\ Vgl. \\cite{Smolin:QuantRaum2004}. \\\\ Vgl. \cite{Weinberg:TheorieFuerAlles2001}, hier S. 27. \\\\ Internet: \\\\ Vgl. \\cite{MaxPlanckInstituteForGravitationalPhysics:RelativitaetUndQuanten2013}, Schleifen-Quantengravitation. \\\\ Vgl. \\cite{wiki:Schleifenquantengravitation2013}.';
  $FrQFT_g_footnote_text_Paarbildung            = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Paarbildung:2018}.';
  $FrQFT_g_footnote_text_Photon                 = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Photon:2015}.';
  $FrQFT_g_footnote_text_PhotonFrequenzGravi    = 'Vgl. \\cite{Fliessbach:ART1998}, Teil III Physikalische Grundlagen der ART, Kap. 12 Gravitationsrotverschiebung, S. 58-64, hier S. 61. \\\\ Internet: \\\\ Vgl. \\cite{wiki:GravitationalRedshift:2015}, Definition. \\\\ Vgl. \\cite{wiki:Ereignishorizont2013}, Bedeutung und Eigenschaften des Ereignishorizonts eines Schwarzen Lochs, Gravitative Rotverschiebung.';
  $FrQFT_g_footnote_text_PhysikKrise            = '\\color{*Bearb}{(Mehr Verweise!)} \\\\ Vgl. \\cite{Falkowski:HiggsOnTheMoon:2017}.';
  $FrQFT_g_footnote_text_PoundRebka             = '\\hidden{Gefunden auf http://de.wikipedia.org/wiki/Tests_der_allgemeinen_Relativitätstheorie#cite_note-Hafele1-35: Chou, C. W.; Hume, D. B.; Rosenband, T.; Wineland, D. J.: Optical Clocks and Relativity. In: Science. 329, Nr. 5999, 2010, S. 1630-1633. Bibcode: 2010Sci...329.1630C. doi:10.1126/science.1192720. \\\\ Gravity Probe A (1976) \\\\ }Vgl. \\cite{Fliessbach:ART1998}, Teil III Physikalische Grundlagen der ART, Kap. 12 Gravitationsrotverschiebung, S. 58-64. \\\\ Vgl. \\cite{Vessot:TestOfRelativGravi1980}. \\\\ Vgl. \\cite{Pound:PoundSniderExper1965}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:PoundRebkaExperiment2013}.';
  $FrQFT_g_footnote_text_ProblemDerGleichzeit_Bearb = 'Vgl. \\cite{Maudlin:QuantumNon-LocalityAndRelativity2011}, S. \\color{*Bearb}{(nachlesen)}. \\\\ Vgl. \\cite{Kiefer:DoesTimeExistInQuantumGravity2009}, \\color{*Bearb}{S. XXX}. \\\\ Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 15 Die Physik nach der Stringtheorie, S. 322-347, hier S. 327. \\\\ Vgl. \\cite{Weiss:AltToSpeedOfLight2006}, IV. Medium transformation, S. 11 und A. Properties of medium transformation, 3. Simultaneity, S. 12. \\\\ Vgl. \\cite{Selleri:EinsteinLorentz1998}, S.\\color{*Bearb}{(nachlesen: so etwa S. 145 oder S. 198)}. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}, hier S. 37. \\\\ Vgl. \\cite{Callender:ZeitIllusion2010}, hier S. 34. \\color{*Bearb}{(Er hat ein Buch dazu geschrieben, welches im Artikel Erwähnung findet.)} \\\\ Vgl. \\cite{Albert:VerschraenkungEinstein2009}, hier S. 36.';
  $FrQFT_g_footnote_text_ProblemDerNaturkonstanten = '\\color{*Bearb}{(Primärliteratur einfügen!!!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Eichhorn:DieZaehmungDesUnendlichen:2019}, S. 14. \\\\ Vgl. \\cite{Gast:AmEndeDerNatuerlichkeit:2018}. \\\\ Internet: \\\\ \\cite{wiki:Natuerlichkeitsproblem:2022}.';
  $FrQFT_g_footnote_text_ProblemDerZeit         = 'Vgl. \\cite{Giulini:GravitationEquivalencePrincipleAndQuantumMechanics2013}, Kap. 4 Äquivalenzprinzip und Quantenmechanik, S. 13. \\\\ Vgl. \\cite{Kiefer:DoesTimeExistInQuantumGravity2009}. \\\\ Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 15 Die Physik nach der Stringtheorie, S. 322-347, hier S. 344-346. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Giulini:EinsteinImQuantentest2013}, S. 63-64, hier einfach als Widerspruch bezeichnet. \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}, S. 37.';
  // #: Siehe auch für Veränderungen "$FrQFT_g_footnote_text_StarkeWW".
  $FrQFT_g_footnote_text_QCD                    = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Ent:DerKlebstoffDerWelt:2015}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Quantenchromodynamik2014}.';
  $FrQFT_g_footnote_text_QED                    = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Quantenelektrodynamik2013}.';
  $FrQFT_g_footnote_text_QFT                    = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Quantenfeldtheorie2013}.';
  $FrQFT_g_footnote_text_QFTAbsolutZeit         = 'Vgl. \\cite{Kiefer:DoesTimeExistInQuantumGravity2009}, S. 2.\\hidden{Er hat dazu auch ein Buch: C. Kiefer, Quantum Gravity, second edition (Oxford University Press, Oxford, 2007).} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}, S. 37.';
  $FrQFT_g_footnote_text_QFTGleichzeitVerschr_Bearb   = 'Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 15 Die Physik nach der Stringtheorie, S. 322-347, hier S. 327. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}, hier S. 37. \\\\ Vgl. \\cite{Callender:ZeitIllusion2010}, hier S. 34. \\color{*Bearb}{(Er hat ein Buch dazu geschrieben, welches im Artikel Erwähnung findet.)} \\\\ Vgl. \\cite{Albert:VerschraenkungEinstein2009}, hier S. 36. \\color{*Bearb}{(Es wird dort auf ein Buch zu diesem Thema verwiesen, siehe BibTeX.)}';
  $FrQFT_g_footnote_text_QFTPruef               = 'Vgl. \\cite{Greene:ElegUniv2000}, Kap. 5 Notwendigkeit einer neuen Theorie, S. 145-160, hier S. 149-153. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Nicolai:AufPhysWeg21j2008}, S. 31. \\\\ Vgl. \\cite{Musser:EinsteinRecht2005}, S. 64. \\\\ Vgl. \\cite{Smolin:QuantRaum2004}, S. 55-56. \\\\ Internet: \\\\ Vgl. \\cite{Eidemueller:DieTuerInsDunkleUniversum:2016}.';
  $FrQFT_g_footnote_text_QGMoeglOderNotwend     = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Tilloy:FuerImmerUnvereinbar:2019}. \\\\ Internet: \\\\ Vgl. \\cite{Hossenfelder:TheFiveMostPromisingWaysToQuantizeGravity:2019}.';
  $FrQFT_g_footnote_text_QM                     = 'Vgl. \\cite{Feynman:Quantenmechanik2009}. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Poessel:AufAllenMoeglichenWegenZumZiel2006}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Quantenmechanik2013}.';
  $FrQFT_g_footnote_text_QMKopenhagenerInter    = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:KopenhagenerDeutung:2019}.';
  $FrQFT_g_footnote_text_QMMessproblem          = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:QuantenmechanischeMessung:2019}.';
  $FrQFT_g_footnote_text_QMMessproblKorrprobl   = 'Das Messproblem der Quantenmechanik ist ein Korrekturproblem: \\\\ Internet: \\\\ Vgl. \\cite{Hossenfelder:TheProblemWithQuantumMeasurements:2019}.';
  $FrQFT_g_footnote_text_QMSchroedingergleich   = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Schroedingergleichung:2019}.';
  $FrQFT_g_footnote_text_Quantengravi           = 'Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 6 Quantengravitation: Am Scheideweg, S. 126-149. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}. \\\\ Vgl. \\cite{Nicolai:AufPhysWeg21j2008}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Quantengravitation2013}. \\\\ Vgl. \\cite{MaxPlanckInstituteForGravitationalPhysics:RelativitaetUndQuanten2013}. \\\\ Vgl. \\cite{Smolin:SchauspielVeraeBuehne2005}.';
  $FrQFT_g_footnote_text_Quantenphysik          = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Quantenphysik2013}.';
  $FrQFT_g_footnote_text_QuantenphysikUnvollst  = 'Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 1 Die fünf großen Probleme der theoretischen Physik, S. 31-48, hier S. 33.';
  $FrQFT_g_footnote_text_RelatPrinzip           = 'Vgl. \\cite{Selleri:EinsteinLorentz1998}, Kap. 3. Das Relativitätsprinzip und die Natur der Zeit, S. 38-74. \\\\ Vgl. \\cite{Born:RTEinsteins1969}, Kap. VI. Das spezielle Einsteinsche Relativitätsprinzip, 194-266, hier S. 200-205. \\\\ Internet: \\\\ Vgl. \\cite{MaxPlanckInstituteForGravitationalPhysics:Relativitaetsprinzip2014}. \\\\ Vgl. \\cite{wiki:Relativitaetsprinzip2014}.';
  $FrQFT_g_footnote_text_Renormierung           = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Eichhorn:DieZaehmungDesUnendlichen:2019}, S. 17, 19 und Kasten S. 21. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Renormierung:2018}.';
  $FrQFT_g_footnote_text_RTKeinGleichzeit       = 'Vgl. \\cite{Kaku:EinsteinsWuerfel2010}, S. 59. \\\\ Vgl. \\cite{Weiss:AltToSpeedOfLight2006}, hier S. 8. \\\\ Vgl. \\cite{Selleri:EinsteinLorentz1998}, Kap. 3. Das Relativitätsprinzip und die Natur der Zeit, S. 38-74, hier S. 49-70. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Callender:ZeitIllusion2010}, hier S. 34. \\\\ Vgl. \\cite{Albert:VerschraenkungEinstein2009}, hier S. 36. \\\\ Internet: \\\\ Vgl. \\cite{wiki:RelativitaetDerGleichzeitigkeit:2017}. \\\\ Vgl. \\cite{wiki:LorentzscheAethertheorie2014}, Prinzipien und Konventionen, Die Rolle des Äthers. \\\\ Vgl. \\cite{wiki:SpezielleRelativitaetstheorie2013}, Lorentztransformationen, Gleichzeitigkeit.';
  $FrQFT_g_footnote_text_Ruhemasse              = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{MaxPlanckInstituteForGravitationalPhysics:Ruhemasse:2022}. \\\\ Vgl. \\cite{wiki:Masse2013}, Spezielle Relativitätstheorie, Ruhemasse.';
  $FrQFT_g_footnote_text_RZKruem                = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:ART2013}, Grundlegende Konzepte, Raumzeitkrümmung.';
  $FrQFT_g_footnote_text_SchwLoch               = 'Vgl. \\cite{Harrison:Kosmologie:1983}, Kap. 9 Schwarze Löcher, S. 291-323. \\\\ Internet: \\\\ Vgl. \\cite{wiki:SchwarzesLoch2014}.';
  $FrQFT_g_footnote_text_SchwarzschildMetrik    = 'Vgl. \\cite{Schwarzschild:UeberDasGravitationsfeldEinesMassenpunktes:1916.2014}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Schwarzschild-Metrik:2020}.';
  $FrQFT_g_footnote_text_ShapiroVerzoegerung    = 'Vgl. \\cite{Shapiro:FourthTestOfGeneralRelativity:1964:PhysRevLett.13.789}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:ShapiroVerzoegerung:2019}.';
  $FrQFT_g_footnote_text_Singularitaet          = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:SingularitaetAstronomie:2022}.';
  $FrQFT_g_footnote_text_SMK                    = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Peebles:Zustandsbericht2001}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Kosmologie2015}, Standardmodell.';
  $FrQFT_g_footnote_text_SMT                    = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Kane:NeuePhysik2003}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Standardmodell2015}.';
  $FrQFT_g_footnote_text_SpontSymBrech          = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Spillner:SymmetriebruecheInDerNatur:2008}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:SpontaneSymmetriebrechung2014}. \\\\ Vgl. \\cite{wiki:Symmetriebrechung:2015}.';
  $FrQFT_g_footnote_text_SRT                    = 'Vgl. \\cite{Fliessbach:ART1998}, Teil II Spezielle Relativitätstheorie, S. 7-38. \\\\ Vgl. \\cite{Born:RTEinsteins1969}, Kap. VI. Das spezielle Einsteinsche Relativitätsprinzip, 194-266. \\\\ Vgl. \\cite{Einstein:ZurElektrodynamikBewegterKoerper1905}. \\\\ Internet: \\\\ Vgl. \\cite{MaxPlanckInstituteForGravitationalPhysics:SpezielleRelativitaetstheorie2013}. \\\\ Vgl. \\cite{wiki:SpezielleRelativitaetstheorie2013}.';
  $FrQFT_g_footnote_text_SRTlorenzInter         = 'Vgl. \\cite{Weiss:AltToSpeedOfLight2006}. \\\\ Vgl. \\cite{Selleri:EinsteinLorentz1998}, Kap. 7. Die geometrische und dynamische Interpretation der Speziellen Relativitätstheorie, S. 198-248. \\\\ Internet: \\\\ Vgl. \\cite{wiki:LorentzscheAethertheorie2014}. \\\\ Vgl. \\cite{wiki:SpezielleRelativitaetstheorie2013}, Verhältnis zu anderen Theorien, Äthertheorien.';
  $FrQFT_g_footnote_text_ST                     = 'Vgl. \\cite{Greene:ElegUniv2000}. \\\\ \\color{*Bearb}{(Weitere Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}, hier S. 42-43. \\\\ Vgl. \\cite{Bousso:String2005}. \\\\ Internet: \\\\ Vgl. \\cite{MaxPlanckInstituteForGravitationalPhysics:RelativitaetUndQuanten2013}, Stringtheorie. \\\\ Vgl. \\cite{wiki:Stringtheorie2013}.';
  // #: Siehe auch für Veränderungen "$FrQFT_g_footnote_text_QCD".
  $FrQFT_g_footnote_text_StarkeWW               = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Ent:DerKlebstoffDerWelt:2015}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:StarkeWechselwirkung:2019}.';
  $FrQFT_g_footnote_text_StarkeWWRestWW         = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:StarkeWechselwirkung:2019}, Bindung zwischen Nukleonen, Erklärung der Restwechselwirkung.';
  $FrQFT_g_footnote_text_SUSY                   = '\\color{*Bearb}{(Fachliteratur einfügen!)} \\\\ Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 5 Von der Vereinheitlichung zur Supervereinheitlichung, S. 107-125.';
  $FrQFT_g_footnote_text_SWW                    = 'Vgl. \\cite{wiki:SchwacheWechselwirkung2013}. \\\\ \\color{*Entwick}{Weitere Verweise.}';
  $FrQFT_g_footnote_text_Thermodynamik          = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Thermodynamik:2015}.';
  $FrQFT_g_footnote_text_Trimurti               = '\\const{NPYo_g_footnote_text_Trimurti}';
  $FrQFT_g_footnote_text_Unendlichkeiten        = 'Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 1 Die fünf großen Probleme der theoretischen Physik, S. 31-48, hier S. 33. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Eichhorn:DieZaehmungDesUnendlichen:2019}, S. 14. \\\\ Internet: \\\\ Vgl. \\cite{wiki:SingularitaetAstronomie:2022}.';
  $FrQFT_g_footnote_text_VereinhNichtGelungen   = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Smolin:ZukunftPhysik2009}, Kap. 15 Die Physik nach der Stringtheorie, S. 322-347, hier S. 343. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}, hier S. 34, 41. \\\\ Vgl. \\cite{Smolin:QuantRaum2004}, hier S. 56, 63.';
  $FrQFT_g_footnote_text_VereinhQMuART          = 'Vgl. \\cite{Lesch:Kosmologie2006}, Kap. III. Dunkle Energie, Gleichungen – Lösungen, S. 93-98, hier S. 98. \\\\ Vgl. \\cite{Greene:ElegUniv2000}, Kap. 5 Notwendigkeit einer neuen Theorie, S. 145-160. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}, S. 37. \\\\ Vgl. \\cite{Nicolai:AufPhysWeg21j2008}. \\\\ Vgl. \\cite{Boerner:DunkEnergie2008}. \\\\ Vgl. \\cite{Nicolai:GrossVereinig2005}. \\\\ Vgl. \\cite{Musser:EinsteinRecht2005}. \\\\ Vgl. \\cite{Musser:EinsteinVereinigt2005}. \\\\ Vgl. \\cite{Bergia:Einstein2005}, Kap. Von Deutschland in die Vereinigten Staaten, S. 86-90. \\\\ Vgl. \\cite{Smolin:QuantRaum2004}, S. 56. \\\\ Vgl. \\cite{Kane:NeuePhysik2003}. \\\\ Vgl. \\cite{Weinberg:TheorieFuerAlles2001}. \\\\ Internet: \\\\ Vgl. \\cite{Eidemueller:DieTuerInsDunkleUniversum:2016}.';
  $FrQFT_g_footnote_text_VereinhQMuARTProbl     = 'Vgl. \\cite{Lesch:Kosmologie2006}, Kap. II. Dunkle Materie, Einspruch, Euer Ehren! S. 83-85, hier S. 84. \\\\ Vgl. \\cite{Greene:ElegUniv2000}, Kap. 3 Von Krümmungen und Kräuselwellen, S. 72-107, hier S. 107. Kap. 5. Notwendigkeit einer neuen Theorie, S. 145-160, hier 146, 156-160. \\\\ Populärwissenschaftliche Literatur: \\\\ Vgl. \\cite{Kiefer:WegZurQG2012}, S. 37. \\\\ Vgl. \\cite{Giesel:LoopQuantengravitation2011}, S. 34. \\\\ Vgl. \\cite{Nicolai:AufPhysWeg21j2008}, S. 31. \\\\ Vgl. \\cite{Smolin:QuantRaum2004}, S. 56. \\\\ Internet: \\\\ Vgl. \\cite{wiki:ART2013}, Verhältnis zu anderen Theorien, Quantenphysik. \\\\ Video: \\\\ Vgl. \\cite{SpektrumDerWissenschaft:WieFunktioniertDieSchwerkraftAufQuantenebene:2017}';
  $FrQFT_g_footnote_text_WellTeilDualAequiHeisenb = 'Vgl. \\cite{Coles:EquivalenceOfWaveParticlEdualityToEntropicUncertainty2014}. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Lingenhoehl:IstDieQuantenphysikWenigerKompliziert2014}.';
  $FrQFT_g_footnote_text_WQString               = 'Der Wirkungsquanten-String schwingt im 3-dimensionalen Bewegungsraum der Quanten-Fluss-Theorie und nicht in vielen Dimensionen, wie ein String der Strintheorie. Durch den Aufbau eines Wirkungsquanten-Strings schwingen allerdings viele seiner Eigenschaften gleichzeitig, die alle auf der Bewegung seiner Struktur in den uns bekannten drei Dimensionen beruhen. Anders als in der Stringtheorie, stehen diese schwingenden Eigenschaften dadurch in enger Abhängigkeit zueinander. Dies hat ein konkretes Modell mit nur wenigen oder gar keinen Freheitsgraden zur Folge. Dadurch liefert die Quanten-Fluss-Theorie eindeutigere Erklärungen und Vorhersagen als die heutige Stringtheorie.';
  $FrQFT_g_footnote_text_ZeitdilatationBew      = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Born:RTEinsteins1969}, Kap. VI. Das spezielle Einsteinsche Relativitätsprinzip, 194-266, hier S. 212-216. \\\\ Internet: \\\\ Vgl. \\cite{Poessel:VonDerLichtuhrZurZeitdilatation2010}. \\\\ Vgl. \\cite{wiki:Zeitdilatation2014}, Zeitdilatation durch relative Bewegung, Zeitdilatation und Längenkontraktion.';
  $FrQFT_g_footnote_text_ZeitdilatationBewFrQFT = 'Vgl. \\cite{Giese:WhyTimeSlowing2009}. \\\\ Vgl. \\cite{Weiss:AltToSpeedOfLight2006}, IV. Medium transformation, A. Properties of medium transformation, 2. Time delation, S. 12.';
  $FrQFT_g_footnote_text_ZeitdilatationBewMyon  = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Myon:2015}, Zeitdilatation.';
  $FrQFT_g_footnote_text_ZeitdilatationGrav     = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Vgl. \\cite{Harrison:Kosmologie:1983}, Kap. 8 Allgemeine Relativitätstheorie, S. 253-290, hier S. 275-278, besonders S. 278. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Zeitdilatation2014}, 2 Zeitdilatation durch Gravitation. \\\\  Vgl. \\cite{wiki:ART2013}, Gravitative Zeitdilatation und Rotverschiebung.';
  $FrQFT_g_footnote_text_ZeitdilatationGravFrQFT = 'Vgl. \\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22.';
  $FrQFT_g_footnote_text_ZeitDjetNeheh          = 'Vgl. \\cite{Assmann:ZeitUndGeschichteInFruehenKulturen:2006}, 2. Zyklische und lineare Zeit: Die altägyptische Lehre der „zwei Ewigkeiten“, hier S. 496-507. \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Assmann:DieZweiGesichterDerZeit2010}.';
  
  $FrQFT_g_footnote_Kombi_RT                    = '\\footnote{Spezielle Relativitätstheorie: \\\\ \\const{FrQFT_g_footnote_text_SRT}}\\footnote{Allgemeine Relativitätstheorie: \\\\ \\const{FrQFT_g_footnote_text_ART}}';

  $NPT_g_footnote_text_Naturphilosophie         = 'Internet: \\\\ Vgl. \\cite{wiki:Naturphilosophie:2015}. \\\\ Video: \\\\ Vgl. \\cite{Lesch:NaturphilosophieKosmosLebenUndDerSinnDerWelt:2016}.';

  $NPYo_g_footnote_text_GehirnLateralisation    = '\\const{SpaLeb_g_footnote_text_GehirnLateralisation}';
  $NPYo_g_footnote_text_HathaHaTha              = 'Vgl. \\cite{Yogawiki:Hatha:2018}.';
  $NPYo_g_footnote_text_Hermesstab              = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Hermesstab:2019}.';
  $NPYo_g_footnote_text_HermesTrismegistos      = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:HermesTrismegistos:2019}.';
  $NPYo_g_footnote_text_Hermetik                = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Hermetik:2019}.';
  $NPYo_g_footnote_text_PhilosophieDesYoga      = 'Vgl. \\cite{Galke:PhilosophieDesYoga:2017}.';
  $NPYo_g_footnote_text_Trimurti                = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Trimurti:2016}.';
  $NPYo_g_footnote_text_YinUndYang              = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:YinUndYang:2019}.';
  $NPYo_g_footnote_text_ZeitDjetNeheh           = '\\const{FrQFT_g_footnote_text_ZeitDjetNeheh}';
  
  $SpaLeb_g_footnote_text_AchtsamkeitMinfulness = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:AchtsamkeitMindfulness:2017}.';
  $SpaLeb_g_footnote_text_AtemSpannungUndSex    = 'Von diesen Sexpraktiken werde ich auf Nachfrage gerne berichten.\\hidden{ Cum-Control erzeugt Atemspannung. Analorgasmen. Die Atemspannung macht einen auch enger und das Gefühl intensiver. Alle Orgasmen werden insgesamt intensiver.}';
  $SpaLeb_g_footnote_text_BauchmuskulaturRing   = 'Internet: \\\\ Vgl. \\cite{Schumann:DerGeradeBauchmuskel:2011}, Muskulus obliquus externus abdominis, Muskulus obliquus internus abdominis, Muskulus transversus abdominis.';
  $SpaLeb_g_footnote_text_BauchmuskulaturGerade = 'Internet: \\\\ Vgl. \\cite{Schumann:DerGeradeBauchmuskel:2011}, Muskulus rectus abdominis (1).';
  $SpaLeb_g_footnote_text_Bewusstsein           = 'Internet: \\\\ Vgl. \\cite{wiki:Bewusstsein:2018}.';
  $SpaLeb_g_footnote_text_Biochemie             = 'Internet: \\\\ Vgl. \\cite{wiki:Biochemie:2015}.';
  $SpaLeb_g_footnote_text_Biologie              = 'Internet: \\\\ Vgl. \\cite{wiki:Biologie:2015}.';
  $SpaLeb_g_footnote_text_Biomechanik           = 'Internet: \\\\ Vgl. \\cite{wiki:Biomechanik:2015}.';
  $SpaLeb_g_footnote_text_ErkenneDichSelbst     = 'Vgl. \\cite{Galke:PhilosophieDesYoga:2017}, 1 Philosophie und Yoga, S. 4-6, hier S. 5. \\\\ Vgl. \\cite{Kitzler:PhilosophieToGo:2015}, Selbsterkenntnis, S. 23-30. \\\\ Internet: \\\\ Vgl. \\cite{wiki:GnothiSeauton:2015}.';
  $SpaLeb_g_footnote_text_GehirnLateralisation  = 'Internet: \\\\ Vgl. \\cite{wiki:LateralisationDesGehirns:2016}.';
  $SpaLeb_g_footnote_text_LeibSeeleProblem      = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Sekundärliteratur: \\\\ Vgl. \\cite{Poser:DieVernuenftigGeordneteWelt:2016}, Monaden. S. 56-58. \\\\ Internet: \\\\ Vgl. \\cite{wiki:PhilosophieDesGeistes:2015}.';
  $SpaLeb_g_footnote_text_Psyche                = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Psyche:2017}.';
  $SpaLeb_g_footnote_text_PsycheErlebUndVerhalt = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Psyche:2015}, Definition und Allgemeines.';
  $SpaLeb_g_footnote_text_Psychosomatik         = '\\color{*Bearb}{(Primärliteratur einfügen!)} \\\\ Internet: \\\\ Vgl. \\cite{wiki:Psychosomatik:2020}.';
  $SpaLeb_g_footnote_text_Quantenbiologie       = 'Vgl. \\cite{Al-Khalili:DerQuantenbeatDesLebens:2015}. \\\\ Sekundärliteratur: \\\\ \\color{*Bearb}{(Literatur einfügen! Siehe SdW-Online 2011 und DLF XXX)} \\\\ Vgl. \\cite{Pollmann:MitAllenQuantenmitteln:2010}. \\\\ Internet: \\\\ Vgl. \\cite{wiki:Quantenbiologie:2014}.';
  $SpaLeb_g_footnote_text_RueckenBauchmuskeln   = 'Internet: \\\\ Vgl. \\cite{Schumann:DieRueckenmuskulatur:2016}.';
  $SpaLeb_g_footnote_text_Zwerchfell            = 'Internet: \\\\ Vgl. \\cite{Schumann:DasZwerchfellIstDerAtemmuskelSchlechthin:2011}.';

  
  const fig_file_name = 'fig_file_name';
  const fig_alt_description = 'fig_alt_description';
  const width = 'width';
  const height = 'height';
  // const name = 'name';
  // const text = 'text';
  const figFileType = 'figFileType';
  const figPDF_is = 'figPDF_is';
  const figBigger_is = 'figBigger_is';
  const border = 'border';
  const source = 'source';

  $FrQFT_g_figure_ary_Elapson                   = array( fig_file_name => 'Elapson_v05', fig_alt_description => 'Elapson (ep)', width => '514px', height => '327px', name => 'set local!',
                                                         text => 'Der Wirkunsquanten-String eines idealisierter Weise kreisförmigen Elapsons ist als elektromagnetisch unpolarisierter Prototyp des Photons zu verstehen.'."\n".
                                                                  'Als solcher ist das kreisförmige Elapson als Grundbaustein des Vakuums zu sehen und wird Vakuum-Elapson genannt.'."\n".
                                                                  'Eingezeichnet ist die helixförmige Spiralbahn der Wirkungsquanten, die sich durch das Existenzprinzip ergibt.'."\n".
                                                                  '\\const{FrQFT_g_text_WQSWQMenge}'/*."\n".
                                                                  'Dabei ist die Rotationsebene immer senkrecht zur Bewegungsbahn orientiert.'."\n".
                                                                  'Im Falle eines relativ perfekten Kreises trägt das Elapson kein elektrisches Feld und entspricht'."\n".
                                                                  'somit nicht den von uns beobachteten Photonen. Es ist dann als idealisiertes Teilchen des Vakuums zu sehen.'."\n".
                                                                  'Ist das Elapson allerdings elliptisch verformt, so sind seine Wirkungsquanten unterschiedlich Dicht'."\n".
                                                                  'entlang des Ellipse angeordnet.'."\n".
                                                                  'Das hat dann ein rotierendes, elektromagnetisches Feld zur Folge.<span style="color: #FF0000;">(Verweis)</span><br>'."\n".
                                                                  'Die Bahngeschwindigkeit der Wirkungsquanten entlang der Helix entspricht der absoluten Zeit der Quantenmechanik.'."\n".
                                                                  'Die Bewegung des Elapsons im Raum (Translation) entspricht der von Ort zu Ort unterschiedlichen Lichtgeschwindigkeit der Allgemeinen'."\n".
                                                                  'Relativitätstheorie und somit ihrer variablen Zeit.'*/);

  //$FrQFT_g_figure_ary_ExistenzprinzipOhneStarr  = array( fig_file_name => 'Existenzprinzp_ohne_Starr_v03', fig_alt_description => 'Ohne Existenzprinzip starre Struktur', width => '700px', height => '234px', name => 'set local!',
  $FrQFT_g_figure_ary_ExistenzprinzipOhneStarr  = array( fig_file_name => 'Existenzprinzp_ohne_Starr_v03', fig_alt_description => 'Ohne Existenzprinzip starre Struktur', width => '660px', height => '221px', name => 'set local!',
                                                         text => 'Betrachtet man die Möglichkeiten, dass die gesamte Dynamik einer Struktur in ihrer äußeren Bewegung – nur geordnete Djet-Zeit – oder in ihrer inneren Bewegung – nur Neheh-Zeit – steckt, so erscheinen diese unrealistisch.'."\n".
                                                                  'Im Falle der rein äußeren Bewegung kann sich die Struktur zwar irgendwohin bewegen, aber sich niemals verändern.'."\n".
                                                                  'Im Falle der rein inneren Bewegung kann sich die Struktur überhaupt nicht im Raum bewegen und sich nur in stetig wiederholenden Prozessen befinden.');
  
  //$FrQFT_g_figure_ary_ExistenzprinzipOhneZerf   = array( fig_file_name => 'Existenzprinzp_ohne_Zerfall_v03', fig_alt_description => 'Ohne Existenzprinzip zerfallende Struktur', width => '700px', height => '234px', name => 'set local!',
  $FrQFT_g_figure_ary_ExistenzprinzipOhneZerf   = array( fig_file_name => 'Existenzprinzp_ohne_Zerfall_v03', fig_alt_description => 'Ohne Existenzprinzip zerfallende Struktur', width => '660px', height => '221px', name => 'set local!',
                                                         text => 'Ohne das Existenzprinzip und seine notwendige Wechselwirkung gibt es für eine Struktur, die aus Bestandteilen besteht, deren Bewegung chaotischer Djet-Zeit entspricht, keine Stabilität; also keine dauerhafte Existenz.'."\n".
                                                                  'Die denkbare Alternative, dass sich nichts bewegen würde, liefe auf eine unveränderliche, quasi tote Strutur hinaus.'."\n".
                                                                  'Das wäre in Bezug auf die Physik eine unsinnige Vorstellung.');
  
  //$FrQFT_g_figure_ary_GraviLeptonWirkung        = array( fig_file_name => 'Gravi_Lepton-Wirkung_v09', fig_alt_description => 'Gravitative Wirkung eines simplifizierten Leptons', width => '700px', height => '875px', name => 'set local',
  $FrQFT_g_figure_ary_GraviLeptonWirkung        = array( fig_file_name => 'FrQFT/Gravi_Lepton-Wirkung_v12', fig_alt_description => 'Graviradiation ei­nes sim­pli­fi­zier­ten Lep­to­nen-­Strings', width => '660px', height => '825px', name => 'set local',
                                                         text => 'Die Darstellung zeigt die graviradiative Wirkung eines simplifizierten Leptonen-Strings auf sein Umfeld.'."\n".
                                                                 'Jedes einzelne Wirkungsquant des Strings erzeugt ständig neue, virtuelle Wirkungsquanten, die ringförmig um den und'."\n".
                                                                 'senkrecht zum String abgestrahlt werden.'."\n".
                                                                 'Ihre Wirkung nimmt beim Abstand \\term{r} zum String nur mit \\term{1/r} ab.'."\n".
                                                                 'Bei doppelter Energie und Masse \\term{m_{ele}} des Strings halbiert sich sein Radius \\term{r_{ele}} und vervierfacht sich seine Wirkungsquanten-Dichte.'."\n".
                                                                 'Seine Graviradiation verdoppelt sich aber nur, weil die Länge \\term{Δt_{vwq}} seiner abgestrahlten Impulse sich durch die doppelte Winkelgeschwindigkeit \\term{ω_{ele}}'."\n".
                                                                 'halbiert.');
  
  //$FrQFT_g_figure_ary_GraviLeptonLichtbahn      = array( fig_file_name => 'Gravi_Lepton-Lichtbahn_v08', fig_alt_description => 'Störung der Lichtbahn durch virtuelle Wirkungsquanten', width => '700px', height => '234px', name => 'set local',
  $FrQFT_g_figure_ary_GraviLeptonLichtbahn      = array( fig_file_name => 'FrQFT/Gravi_Lepton-Lichtbahn_v10', fig_alt_description => 'Störung der Lichtbahn durch virtuelle Wirkungsquanten', width => '660px', height => '221px', name => 'set local',
                                                         text => 'Die Darstellung zeigt, in Anlehnung an die entsprechenden Abbildungen von Giese,\\footnote{\\cite{Giese:TheOrigOfGravity2011}, Appendix C Variation in the Speed of Light, S. 19-22, hier Abbildungen C1, C2, C3, S. 20-21.}'."\n".
                                                                 'wie der Bewegungspfad eines vorbeifliegenden Photons durch die virtuellen Wirkungsquanten'."\n".
                                                                 'eines Elementarteilchens in eine wellige Form gezwungen wird.'."\n".
                                                                 'Dies verlangsamt die effektive Geschwindigkeit des Photons, und beugt schließlich auch seine Bahn.'."\n".
                                                                 'In der Analyse wird die Bewegungsbahn des Photons, in Bezug auf das'."\n".
                                                                 'Zentrum der Gravitationsquelle, in eine tangentiale und eine radiale Komponente zerlegt.'."\n".
                                                                 'Beide Komponenten erfahren eine unterschiedliche Bewegungsänderung.');
  
  $FrQFT_g_figure_ary_GraviMechanismus          = array( fig_file_name => 'Gravitation_Masse_v05', fig_alt_description => 'Gravitation zwischen Ruhemassen', width => '504px', height => '264px', name => 'set local',
                                                         text => 'Die beständige Beugung der lichtähnlichen Strukturen beziehungsweise der Wirkungsquanten eines Elementarteilchen-Strings in Richtung der anziehenden Masse'."\n".
                                                                 'führt dazu, dass der String in diese Richtung beschleunigt wird.');
  
  $FrQFT_g_figure_ary_GraviPhotonBeug           = array( fig_file_name => 'FrQFT/Gravitation_Photon-Beugung_v07', fig_alt_description => '(Photon-)Elapson-Beugung', width => '660px', height => '346px', name =>'set local',
                                                         text => 'Die von der Masse ausgesandten virtuellen Wirkungsquanten (Wirkungsquanten-Impulskegel als Störungswellen) verringern'."\n".
                                                                 'die Geschwindigkeit der Wirkungsquanten eines vorbeifliegenden Photons umso stärker,'."\n".
                                                                 'je näher sie der Masse sind. Dadurch verringert sich die Wellenlänge'."\n".
                                                                 '\\term{λ_{innen}} des Photons auf der der Masse zugewandten Seite stärker'."\n".
                                                                 'als \\term{λ_{außen}} auf der abgewandten Seite.'."\n".
                                                                 'Das Photon wird zur Masse hin gebeugt.');
  
  $FrQFT_g_figure_ary_GravitationspotMulti      = array( fig_file_name => 'FrQFT/Gravi-Potenzial-Multipol_v05', fig_alt_description => 'Mutlipoles, weiträumiges Gravitationspotenzial', width => '489px', height => '367px', name => 'set local!',
                                                         text => 'Die Grafik veranschaulicht schematisch die räumliche Verteilung der Wirkungsquanten-String-Dichte beziehungsweise die Elapsonen-Bahn-Dichte im multipolen, weiträumigen Gravitationspotenzial, bei sehr großen Massenansammlungen, wie Galaxien oder Galaxienhaufen.'."\n".
                                                                 'Das hier dargestellte Sandkastenmodell – jede Masse sitzt auf einem Haufen Sand respektive Vakuum-Energiedichte, wobei die Sand- oder Energiemenge insgesamt gleich bleibt – verdeutlicht, dass die Massen von Sphären – hier gestrichelte Linien – umgeben sind, wo die Sandhöhe immer noch der durchschnittlichen Höhe entspricht.'."\n".
                                                                 'Diese Sphären sind die Orte des kosmischen Beobachters, an denen die variable Lichtgeschwindigkeit im dreidimensionalen Raum der Lichtgeschwindigkeitskonstanten entspricht.'."\n".
                                                                 'Die Anhäufung der Energiedichte des Vakuums um große Massen herum und innerhalb ihrer Ansammlungen führt zu deren erhöhter Gravitation und so zum Phänomen der Dunklen Materie.');
  
  //$FrQFT_g_figure_ary_HeisenbUnschaerf          = array( fig_file_name => 'Heisenberg_Unschaerfe_v01', fig_alt_description => 'Abzählinterpretation der Heisenbergschen Unschärferelation', width => '700px', height => '234px', name => 'set local!',
  $FrQFT_g_figure_ary_HeisenbUnschaerf          = array( fig_file_name => 'Heisenberg_Unschaerfe_v01', fig_alt_description => 'Abzählinterpretation der Heisenbergschen Unschärferelation', width => '660px', height => '221px', name => 'set local!',
                                                         text => '\\color{*Bearb}{(Grafik: Energiemessung und Wirkungsquant h erwähnen. Anzahl n. Beschriftung Messinstrument/Auge einpflegen. Die Iris grau färben. Messung 1 und Messung 2 drüber schreiben.)} Die Überzählung und die Unterzählung, welche für den maximalen positiven und negativen Fehler der dargestellten Energiemessung stehen, unterscheiden sich von der Feinstruktur des Elementarteilchens und vom Zeitinterval her im Prinzip beliebig gering.'."\n".
                                                                  'Die Zufälligkeit des Messbeginns und des Messendes entscheiden darüber, welcher Fehler bei der Messung der Energie \\term{E = n·h/t} auftritt.'."\n".
                                                                  'Der zufällig erscheinende Fehler kommt zustande, weil nicht vorhergesagt werden kann, welchen Zustand die Feinstruktur zum Beginn und zum Ende der Messung hat, und weil die Wirkungsquanten \\term{h} eines Elementarteilchen-Strings prinzipiell nur digital, also nicht anteilig, gezählt werden können.'."\n".
                                                                  'Die Messgenauigkeit wird umso besser, je mehr Wirkungsquanten pro Zeit gezählt werden, denn dann fällt der Messfehler \\term{±1·h} im Verhältnis zur Gesamtzahl der Wirkungsquanten geringer aus.'."\n".
                                                                  'Eine genauere Messung kann folglich durch eine höhere Energie des Elementarteilchens – durch mehr Wirkungsquanten pro Zeit auf dem String – oder durch eine längere Messzeit erreicht werden.');
  
  $FrQFT_g_figure_ary_KosmosEuklid              = array( fig_file_name => 'FrQFT/Kosmos-euklidisch-flach-gebrochen_v04', fig_alt_description => 'Euklidisch flacher Kosmos mit Symmetriebruch', width => '660px', height => '224px', name => 'set local!',
                                                         text => 'Die Grafik zeigt schematisch die relative Wirkungsquanten-String-Dichte und Elapsonen-Bahn-Dichte im Kosmos (in umgekehrtproportionaler Darstellung und die Wirkungsquanten-String-Dichte ist mit dem Faktor \\term{√2} versehen, damit die Kurven nicht zu sehr aufeinanderfallen).'."\n".
                                                                 'Im symmetrischen Fall, ohne Gravitation, sind die Wirkungsquanten und Vakuum-Elapsonen sehr gleichmäßig im Raum verteilt, siehe gestrichelte Graphen.'."\n".
                                                                 'Gerät die Symmetrie aus der Balance, weil die Elementarteilchen sich zu großen Massen zusammenballen, dann sind die Wirkungsquanten und Vakuum-Elapsonen lokal asymmetrisch im Raum verteilt und die Gravitation kommt zum Vorschein, siehe durchgezogene Graphen.'."\n".
                                                                 'Weil Wirkungsquanten- und Elementarteilchen-Anzahlerhaltung gilt – zu den Elementarteilchen werden auch die Elapsonen gezählt –, ist in beiden Fällen der Raum im Durchschnitt euklidisch flach, so wie es in unserem Kosmos beobachtet wird.');
  
  /*$FrQFT_g_figure_ary_Lepton                    = array( fig_file_name => 'FrQFT/Leptonen-Struktur_3D_neu_v01_6-40fr-300ms-420x306px', figFileType => 'gif', figPDF_is => false, fig_alt_description => 'Leptonen-Modell, animiert', width => '420px', height => '306px', border => '1px', name => 'set local!',
                                                         text => 'Geladenes Lepton mit hypothetischen sechs wellenförmigen Phasen als Näherungsdarstellung. (In Bezug auf die festgelegte Konvention versehentlich ein Antiteilchen in Up-Orientierung.)'."\n".
                                                                  '\\const{FrQFT_g_text_WQSWQMenge}');*/
  $FrQFT_g_figure_ary_Lepton_highRes            = array( fig_file_name => 'FrQFT/Leptonen-Struktur_3D-neu_v01_6-40fr-300ms-2272×1656', figFileType => 'gif', figPDF_is => false, figBigger_is => true, fig_alt_description => 'Leptonen-Modell, animiert', width => '420px', height => '306px', border => '1px', name => 'set local!',
                                                         text => 'Geladenes Lepton mit hypothetischen sechs wellenförmigen Phasen als Näherungsdarstellung. (In Bezug auf die festgelegte Konvention versehentlich ein Antiteilchen in Up-Orientierung.)'."\n".
                                                                  '\\const{FrQFT_g_text_WQSWQMenge}');
  
  $FrQFT_g_figure_ary_LeptonELadung             = array( fig_file_name => 'Lepton_geladen_v09', fig_alt_description => 'Elektrisch geladenes Lepton', width => '700px', height => '374px', name => 'set local!',
                                                         text => '\\color{*Bearb}{(Die Grafik enthält einen Rechenfehler und muss korrigiert werden! \\term{r_{gr}} muss in \\term{r_{wq}} umbenannt werden.)} Die Grafik zeigt die Struktur eines elektrisch geladenen Leptons mit hypothetischer Phasenzahl \\term{n_{phase} = n_{wel} / n_{polwel} = 6/1 = 6}.'."\n".
                                                                 'Die Wirkungsquanten eines Wirkungsquanten-Strings mit wechselnder Wirkungsquanten-Dichte bewegen sich auf einer doppelt geschachtelten, helixförmigen'."\n".
                                                                 'Spiralbahn um ein gemeinsames Rotationszentrum.'."\n".
                                                                 'In der gezeigten Struktur blinkt das Lepton mit der De-Broglie-Frequenz in einem Wechsel zwischen einer leicht positiven'."\n".
                                                                 'und einer stärker negativen Polarisation und damit elektrischen Ladung.'."\n".
                                                                 'Aus weitem Blickwinkel erscheint das Lepton im Mittel vornehmlich elektrisch negativ geladen, während von nahem die differenzierte'."\n".
                                                                 'Polarisation in ihrer zeitlichen Dynamik die elektroschwache Wechselwirkung erzeugt.'."\n".
                                                                 'Der Normradius \\term{r_{0}} ist dabei die Bezugseinheit mit \\term{r_{0} = ℏ / (m_{lep} ⋅ c_{0})}.');
  
  $FrQFT_g_figure_ary_LeptonENeutral            = array( fig_file_name => 'Lepton_neutral_v09', fig_alt_description => 'Elektrisch neutrales Lepton', width => '700px', height => '292px', name => 'set local!',
                                                         text => 'Die Grafik zeigt die Struktur eines elektrisch geladenen Leptons mit hypothetischer Phasenzahl \\term{n_{phase} = n_{wel} / n_{polwel} = 12/2 = 6}.'."\n".
                                                                 'Die Wirkungsquanten eines Wirkungsquanten-Strings mit wechselnder Wirkungsquanten-Dichte bewegen sich auf einer doppelt geschachtelten, helixförmigen'."\n".
                                                                 'Spiralbahn um ein gemeinsames Rotationszentrum.'."\n".
                                                                 'In der gezeigten Struktur blinkt das Lepton mit der De-Broglie-Frequenz in einem Wechsel zwischen einer positiven'."\n".
                                                                 'und einer gleich großen negativen Polarisation und ist damit ohne elektrische Ladung.'."\n".
                                                                 'Aus weitem Blickwinkel erscheint das Lepton im Mittel vornehmlich elektrisch neutral, während von nahem die differenzierte'."\n".
                                                                 'Polarisation in ihrer zeitlichen Dynamik die elektroschwache Wechselwirkung erzeugt.'."\n".
                                                                 'Der Normradius \\term{r_{0}} ist dabei die Bezugseinheit mit \\term{r_{0} = ℏ / (m_{lep} ⋅ c_{0})}.');
  
  $FrQFT_g_figure_ary_LeptonQuarkSpinAnti       = array( fig_file_name => 'FrQFT/Lepton-Quark-Spins-Anti-v09', fig_alt_description => 'Leptonen und Quarks - Verhältnis von Spins und Antiteilchen', width => '660px', height => '221px', name => 'set local',
                                                         text => 'Die Darstellung zeigt die räumlichen Verhältnisse des inneren Spins in Relation zum normalen, äußeren Spin in Bezug auf Teilchen und ihre Antiteilchen.'."\n".
                                                                 'Bemerkenswert ist dabei, dass alle Anti-Neutrinos den Teilchen und die Neutrinos den Antiteilchen zugeordnet sind.'."\n".
                                                                 'Die Vorzeichen und Orientierungen der Spins sind Konvention.');
  
  $FrQFT_g_figure_ary_LichtBewRaum              = array( fig_file_name => 'Gekruemmter_Licht-Bewegungsraum_v09', fig_alt_description => 'Gekrümmt erscheinender Licht-Bewegungsraum', width => '490px', height => '490px', name => 'set local!',
                                                         text => '\\color{*Bearb}{(Grafik: Schwingungslinie in Spiralbahn umbenennen? Ruhemasse?)} Die variable Geschwindigkeit der Elapsonen, zu denen auch die Photonen gehören, installiert den'."\n".
                                                                  'Licht-Bewegungsraum im Vakuum des Kosmos mit der Eigenschaft variabler Dichte und variabler Gravitationsuhr.'."\n".
                                                                  'Unter der Annahme einer absolut konstanten Lichtgeschwindigkeit in der Allgemeinen Relativitätstheorie wird der Licht-Bewegungsraum zur gekrümmten, vierdimensionalen Raumzeit.'."\n".
                                                                  'Die eingezeichneten Helixspiralbahnen der Feinstruktur aus Wirkungsquanten zeigen, wie die Translationsbewegung – Einsteinsche Lichtgeschwindigkeit im dreidimensionalen Raum – nahe an der Masse abnimmt und die Rotationsbewegung zunimmt – die Photonen- und Vakuum-Elapsonen-Frequenz.');

  $FrQFT_g_figure_ary_Matrioschkas              = array( fig_file_name => 'Matrioschkas_IMG_1862', fig_alt_description => 'Matrioschkas', width => '433px', height => '224px',/* border => '1px',*/ name => 'set local!',
                                                         text => 'Ähnlich wie die Matrioschkas, sind die Kosmoi oder Schwarzen Löcher im Universum einander verschachtel.'."\n".
                                                                  'Nur das in jedem Kosmos mehrere Schwarze Löcher und damit auch Kosmoi enthalten sein können.');

  //$FrQFT_g_figure_ary_PhotonWQ                  = array( fig_file_name => 'Photon_zirkular_pol_v21', fig_alt_description => 'Elektromagnetisch zirkular polarisiertes Photon (ph)', width => '700px', height => '234px', name => 'set local!',
  $FrQFT_g_figure_ary_PhotonWQ                  = array( fig_file_name => 'Photon_zirkular_pol_v21', fig_alt_description => 'Elektromagnetisch zirkular polarisiertes Photon (ph)', width => '660px', height => '221px', name => 'set local!',
                                                         text => 'Der Wirkungsquanten-String eines elektromagnetisch zirkular polarisierten Photons besteht aus Wirkungsquanten, die auf elliptischen Bahnen um sein Zentrum kreisen.'."\n".
                                                                  'Die elliptische Bahn jedes Wirkungsquants hat dabei einen anderen Winkel.'."\n".
                                                                  'Die elektromagnetische Polarisation rotiert entgegengesetzt zu den Wirkungsquanten.');
  //$FrQFT_g_figure_ary_PhotonFT                  = array( fig_file_name => 'Photon_zirkular_pol_v21', fig_alt_description => 'Elektromagnetisch zirkular polarisiertes Photon (ph)', width => '700px', height => '234px', name => 'set local!',
  $FrQFT_g_figure_ary_PhotonFT                  = array( fig_file_name => 'Photon_zirkular_pol_v21', fig_alt_description => 'Elektromagnetisch zirkular polarisiertes Photon (ph)', width => '660px', height => '221px', name => 'set local!',
                                                         text => 'Der Fundamentalteilchen-String eines elektromagnetisch zirkular polarisierten Photons besteht aus Fundamentalteilchen, die auf elliptischen Bahnen um ihr Zentrum kreisen.'."\n".
                                                                  'Die elliptische Bahn jedes Fundamentalteilchens hat dabei einen anderen Winkel.'."\n".
                                                                  'Die elektromagnetische Polarisation rotiert entgegengesetzt zu den Fundamentalteilchen.');
  
  $FrQFT_g_figure_ary_PoundRebkaSnider          = array( fig_file_name => 'Pound-Repka-Snider_Exp_v03', fig_alt_description => 'Pound-Repka-Snider-Experiment', width => '514px', height => '187px', name => 'set local!',
                                                         text => '\\color{*Bearb}{(Grafik: Vermerken, das \\term{v_{wq}} konstant ist und der erhöhten LG entspricht! \\term{v_{wq} =} Pythagoras hinschreiben.)} Die Darstellung zeigt, unter welchen Bedingungen das Pound-Rebka-Snider-Experiment mit der Quanten-Fluss-Theorie zusammenfällt.'."\n".
                                                                  'Der Wirkungsquanten-Geschwindigkeitsvektor – am Kreismittelpunkt ansetzend – stellt die Geschwindigkeitseigenschaft der drei Lichtgeschwindigkeiten – Einsteinsche Lichtgeschwindigkeit, Rotations-Lichtgeschwindigkeit und erhöhte Lichtgeschwindigkeit – dar.');
  
  $FrQFT_g_figure_ary_QuarkProton               = array( fig_file_name => 'FrQFT/Quark-Protron-v01', fig_alt_description => 'XXX - XXX', width => '660px', height => '221px', name => 'set local',
                                                         text => 'XXX'."\n".
                                                                 'XXX'."\n".
                                                                 'XXX');
  
  $FrQFT_g_figure_ary_RelatDichte               = array( fig_file_name => 'Elapson-Graviton-Dicht_v04', fig_alt_description => 'Relation der Wirkungsquanten-String- zur Elapsonen-bahn-Dichte', width => '700px', height => '237px', name => 'set local!',
                                                         text => '\\color{*Bearb}{(Die y-Achse entspricht dem Alterungsfaktor Alpha. Mit Gleichheitszeichen eintragen? • Ist die Bezeichnung Ereignishorizont wirklich zutreffend? Es ist nicht so einer wie in der ART. Übergangshorizont wäre vielleicht besser. (Siehe Artikel GEO 10/2014, "Wie schwarz ist Schwarz?", S. 130–144.) Die Bilddatei sollte nicht mehr den Namen Graviton tragen.)} Das Diagramm stellt auf der Horizontal-Achse den Kehrwert der relativen Wirkungsquanten-String-Dichte dar; je kleiner der Horizontal-Achswert, desto höher die Wirkungsquanten-Dichte.'."\n".
                                                                 'Die Vertikal-Achse hingegen stellt die entsprechende relative Elapsonen-Bahn-Dichte auch als Kehrwert dar, der nach Formel \\jumpname[*FigDescr]{OM:FrQFT:ZeitAlterungFrequenz:Equ-RelatEpBDicht} dem absoluten Alterungsfaktor \\term{_{x}⍺} entspricht; je kleiner der Vertikal-Achswert, desto höher die Elapsonen-Bahn-Dichte.'."\n".
                                                                 'Eine Zentrale Masse kann sich mit ihrem Mittelpunkt im Nullpunkt gedacht werden, wobei ein Schwarzes Loch am eingezeichneten Ereignishorizont seinen Schwarzschild-Radius hat.');
  
  $FrQFT_g_figure_ary_UnpolPhotFarb6Pol         = array( fig_file_name => 'FrQFT/Unpolarisiertes-Photon-Farbpolarisation-6polig-v01', fig_alt_description => 'Unpolarisiertes Photon, Farbpolarisation (6-polig)', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'Das Kräftegleichgewicht der einfachsten räumlichen Struktur entspricht dem Krempenring eines Sombrero-Potentials.'."\n".
                                                                  'Der Symmetriebruch der die räumliche Struktur gebenden Auslenkung der Bewegung der Wirkungsquanten aus der Mitte auf den Ring wird hier symbolisch mit einer Farbpolarisation in der Ebene dargestellt.'."\n".
                                                                  'Die reinste und intensivste Farbe stellt den optimalen Abstand dar, in Bezug zu seiner Rotationsfrequenz.'."\n".
                                                                  'Zur Mitte hin werden die Farben unpolarisiert und neutral weiß.'."\n".
                                                                  'Nach außen gehen sie ins Graue bis hin zum Schwarz.'."\n".
                                                                  'Drei Grundfarben mit Komplementärfarben sind notwendig, dies in der Ebene zu veranschaulichen.'."\n".
                                                                  'Diese Struktur entspricht interessanterweise genau einem der vier sechseckigen Schnitte durch einen Kuboktaeder des Vektor-Gleichgewichts.'."\n".
                                                                  'Durch ihre Rotation wechseln die Wirkungsquanten ihre Farbpolarisation ständig.');
  
  $FrQFT_g_figure_ary_UnpolPhotFarb8Pol         = array( fig_file_name => 'FrQFT/Unpolarisiertes-Photon-Farbpolarisation-8polig-v01', fig_alt_description => 'Unpolarisiertes Photon, Farbpolarisation (8-polig)', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'Hier ist das I Ging in der Xiantian-Anordnung anstatt durch die Yin-Yang-Linien durch Farben und Antifarben des Farbkreises dargestellt');
  
  $FrQFT_g_figure_ary_VakuumElapson             = array( fig_file_name => 'FrQFT/Vakuum-Elapson-String_v02-100fr-100ms-1280x720px', figFileType => 'gif', figPDF_is => false, figBigger_is => true, fig_alt_description => 'Vakuum-Elapson, animiert', width => '560px', height => '315px', border => '1px', name => 'set local!',
                                                         text => 'Die vereinfachende Animation zeigt, wie alle Wirkungsquanten eines Strings miteinander in Wechselwirkung stehen.'."\n".
                                                                  'Die Wechselwirkung zwischen allen Wirkungsquanten ist nur bei einer helixförmigen Spiralgeometrie ihrer Bahn möglich, wenn der String geschlossen ist.'."\n".
                                                                  '\\const{FrQFT_g_text_WQSWQMenge}');
  
  $FrQFT_g_figure_ary_Wellenlaenge              = array( fig_file_name => 'Wellenlaenge_v02', fig_alt_description => 'Detektor- und Rotationswellenlänge', width => '514px', height => '187px', name => 'set local!',
                                                         text => 'Eine seitliche und eine frontale Projektion der Spiralbahn eines Wirkungsquants zeigen, wie die Rotationswellenlänge und die Detektorwellenlänge auseinander fallen, wenn starke Gravitation die Detektorwellenlänge halbiert.'."\n".
                                                                 'Es wird sichtbar, wie die Rotationsfrequenz dabei im Verhältnis zur Detektorfrequenz zunimmt, während die Rotationswellenlänge im Verhältnis zur Detektorwellenlänge abnimmt.');
  $FrQFT_g_figure_ary_Wellenlaenge_TextFrequenz =                'Unter Bedingungen, die nahe der Erde herrschen, sind Translation und Rotation der Helixspiralbahn nahezu gleich groß.'."\n".
                                                                 'Erhöht sich die Gravitation, dann wickelt sich die Bewegungsbahn der Wirkungsquanten enger auf.'."\n".
                                                                 'So ergibt sich eine höhere Rotationsgeschwindigkeit und die Frequenz der Elementarteilchen nimmt zu.';
  
  $FrQFT_g_figure_ary_WqBewRaum                 = array( fig_file_name => 'Wirkungsquanten-Bewegungsaum_v08', fig_alt_description => 'Wirkungsquanten-Bewegungsraum', width => '467px', height => '467px', name => 'set local!',
                                                         text => 'Die konstante Geschwindigkeit der Wirkungsquanten des Kosmos konstituiert die für die Quantenfeldtheorie'."\n".
                                                                  'notwendige grundlegende Zeit als Normaluhr.'."\n".
                                                                  'Die durch sie gegebene Gleichzeitigkeit ist für die Verschränkungphänomene unverzichtbar.');

  $FrQFT_g_figure_ary_WqSUnmoeg                 = array( fig_file_name => 'Wirkungsquanten-String_Unmoeg_v03', fig_alt_description => 'Wirkungsquanten-String: Unmögliche Konstellation', width => '438px', height => '369px', border => '1px', name => 'set local!',
                                                         text => 'Wirkungsquanten – hier rot dargestellt – strahlen ihre Wechselwirkung in Form einer Kegeloberfläche ab, die sich genau so schnell ausbreitet, wie sich die Wirkungsquanten bewegen.'."\n".
                                                                  'Beliebige, sich einigermaßen parallel oder hintereinander her bewegende Wirkungsquanten treten daher nur selten in Wechselwirkung.'."\n".
                                                                  'Dies kommt, weil sie sich im Allgemeinen nicht in der Wirkungskegeloberfläche der anderen Wirkungsquanten bewegen.'."\n".
                                                                  'Befindet sich ein solches Wirkungsquant doch einmal in der Wirkungskegeloberfläche eines anderen, so wird seine Bahn dadurch zum anderen gebeugt.'."\n".
                                                                  'Aus diesem Grund können sich in dieser Konstellation bewegende Wirkungsquanten auf Dauer keine stabilen, zusammenhängenden Systeme bilden.');

  $FrQFT_g_figure_ary_WqUngebroch               = array( fig_file_name => 'Wirkungsquant_ungebrochen_v01', fig_alt_description => 'Ungebrochenes Wirkungsquanten', width => '514px', height => '187px', name => 'set local!',
                                                         text => '\\color{*Bearb}{(Überschrift: Ungebrochene Wirkungsquanten-Bahn? "wikelt" -> "wickelt")}'."\n".
                                                                  'Ein unbebrochenes Wirkungsquant bewegt sich auf einer symmetrisch geradlinigen Bahn.'."\n".
                                                                  'Es ist nicht abgelenkt durch Wechselwirkungen.');

  
  
  //alter Film $FrQFT_g_youtube_ary_Lepton                   = array( source => 'http://www.youtube.com/embed/SFW0iG_D28c?rel=0', width => '420px', height => '426px', name => 'OM:FrQFT:Elementarteilchen:Vid-Lepton',
  // #: Mit Loop. (Parameter siehe 'Tools_vX.php' funktion 'To_f_Paragraph' Parameter "$type = 'youtube'")
  // #!: Derzeit ungenutzt !!! Weil "$FrQFT_g_figure_ary_Lepton_highRes" in Verwendung.
  $FrQFT_g_youtube_ary_Lepton                   = array( source => 'https://www.youtube.com/embed/LsF93WgX9fE?rel=0&loop=1&playlist=LsF93WgX9fE', width => '420px', height => '307px'/* YouTube sagt 315px, was eine schwarze Kante oben und unten gibt */, name => 'set local',
                                                         text => 'Geladenes Lepton mit hypothetischen sechs wellenförmigen Phasen als Näherungsdarstellung. (In Bezug auf die festgelegte Konvention versehentlich ein Antiteilchen in Up-Orientierung.)'."\n".
                                                                  '\\const{FrQFT_g_text_WQSWQMenge}');
  
  //ohne Loop $FrQFT_g_youtube_ary_VakuumElapson            = array( source => 'http://www.youtube.com/embed/XfNlH_aWhrE?rel=0', width => '560', height => '315', name => set local',
  // #: Mit Loop. (Parameter siehe 'Tools_vX.php' funktion 'To_f_Paragraph' Parameter "$type = 'youtube'")
  // #!: Derzeit ungenutzt !!! Weil "$FrQFT_g_figure_ary_VakuumElapson" in Verwendung.
  $FrQFT_g_youtube_ary_VakuumElapson            = array( source => 'https://www.youtube.com/embed/XfNlH_aWhrE?rel=0&loop=1&playlist=XfNlH_aWhrE', width => '560', height => '315', name => 'set local',
                                                         text => 'Der vereinfachende Film zeigt, wie alle Wirkungsquanten eines Strings miteinander in Wechselwirkung stehen.'."\n".
                                                                  'Die Wechselwirkung zwischen allen Wirkungsquanten ist nur bei einer helixförmigen Spiralgeometrie ihrer Bahn möglich, wenn der String geschlossen ist.'."\n".
                                                                  '\\const{FrQFT_g_text_WQSWQMenge}');



  $NPYo_g_figure_ary_AugeDesRa                   = array( fig_file_name => 'Naturphilosophie-Yoga/Auge-des-Ra-v01', fig_alt_description => 'Auge des Ra', width => '300px', height => '272px', name => 'set local!',
                                                         text => 'Hieroglyphe des Sonnengottes Ra (auch Re genannt). Männliches Prinzip, Djet-Zeit. \\color{*Light}{\\small{Lizenz: \\jumpname{OM:FrQFT:Impressum:CopyrightLizenz:EyeOfHorus}}}');
  
  $NPYo_g_figure_ary_AugeDesHorus                = array( fig_file_name => 'Naturphilosophie-Yoga/Auge-des-Horus-v01', fig_alt_description => 'Auge des Horus', width => '300px', height => '272px', name => 'set local!',
                                                         text => 'Hieroglyphe des Himmelsgotts, später Königsgotts, Welten- oder Lichtgotts, Horus. Weibliches Prinzip, Neheh-Zeit. \\color{*Light}{\\small{Lizenz: \\jumpname{OM:FrQFT:Impressum:CopyrightLizenz:EyeOfHorus}}}');
  
  $NPYo_g_figure_ary_Hermesstab                  = array( fig_file_name => 'Naturphilosophie-Yoga/Hermesstab-schwarzweisseFluegel-v01', fig_alt_description => 'Hermesstab', width => '380px', height => '500px', name => 'set local!',
                                                         text => '\\color{*Bearb}{(Die Kugel sollte entsprechend der Zirbeldrüse die Form einer Zirbelnuss, eines Pinienzapfens, des Zapfens der Zirbelkiefer, bekommen, siehe Ordner Zirbeldrüse.)} Der Hermesstab mit seinen Flügeln steht für Heilung, Weisheit, und wie ich vermute für Erleuchtung und die Beflügelung der Seele und des Geistes durch ein polares Yin-Yang-Prinzip. Im Hermes Trismegistos kommt durch die Verschmelzung des griechischen Gottes Hermes mit dem ägyptischen Gott Thot auch das Wissen und die Philosophie in seine Bedeutung.');
  
  $NPYo_g_figure_ary_HerzChakraHerzkreisAtmung   = array( fig_file_name => 'Naturphilosophie-Yoga/Herz-Chakra-Herzkreislauf-Atmung-v01', fig_alt_description => 'Herz-Chakra, Herzkreislauf, Atmung', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'Der Herzkreislauf ist das mehr unbewusste innere Care (weiblicher Aspekt) und die Atmung ist das mehr bewusste innere Care (männlicher Aspekt).');
  
  $NPYo_g_figure_ary_HerzChakraShivaShakti       = array( fig_file_name => 'Naturphilosophie-Yoga/Herz-Chakra-Shiva-Shakti-v01', fig_alt_description => 'Herz-Chakra, Shiva-Shakti', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'XXX');
  
  $NPYo_g_figure_ary_IGingXiantian               = array( fig_file_name => 'Naturphilosophie-Yoga/I-Ging-Xiantian-Anordnung-v01', fig_alt_description => 'Das Yin und Yang oder Taijitu', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'Das I Ging in dieser Anordnung beschreibt eine Raum aufspannende Polarisation in einer Ebene.'."\n".
                                                                  'Die sich jeweils gegenüberliegenden Gegenpole haben sich quasi im Zentrum des Rings getrennt und sich in die Entgegengesetzte Raumrichtung bewegt.'."\n".
                                                                  'Dabei greifen sie Raum oder Fläche, wie hier dargestellt.');
  
  $NPYo_g_figure_ary_DunkelheitZuLicht     = array( fig_file_name => 'Naturphilosophie-Yoga/Phoenix-aus-der-Asche-v01', fig_alt_description => 'Phoenix aus der Asche', width => '660px', height => '600px', name => 'set local!',
                                                         text => 'XXX');
  
  $NPYo_g_figure_ary_LebenDesHorusAsklepiosstab  = array( fig_file_name => 'Naturphilosophie-Yoga/Leben-des-Horus-Asklepiosstab-v02', fig_alt_description => 'Leben des Horus mit Asklepiosstab', width => '660px', height => '600px', name => 'set local!',
                                                         text => 'Abbild des Lebens, das in vergleichbarer Form in altägyptischen Darstellungen zu finden ist. Hier in einer von mir modernisierten Variante mit Äskulap- oder Asklepiosstab, um einen Bezug zur heutigen Medizin, und auch zum Kundalini-Prozess des Tantra und Yoga, herzustellen. \\color{*Light}{\\small{Lizenz: \\jumpname{OM:FrQFT:Impressum:CopyrightLizenz:EyeOfHorus}}}');
  
  $NPYo_g_figure_ary_LebenDesHorusHermesstab     = array( fig_file_name => 'Naturphilosophie-Yoga/Leben-des-Horus-Hermesstab-v02', fig_alt_description => 'Leben des Horus mit Hermesstab', width => '660px', height => '600px', name => 'set local!',
                                                         text => $NPYo_g_text_LebenDesHorusHermesstab_Orig);
  
  $NPYo_g_figure_ary_SymbolYinYangKoerperSeeleExistenz
                                                 = array( fig_file_name => 'Naturphilosophie-Yoga/Yin_und_Yang_der_Koerper_Seele_Existenz_v03', figPDF_is => false, fig_alt_description => 'Yin und Yang der Körper-Seele-Existenz', width => '284px', height => '379px', name => 'set local!',
                                                         text => 'Das transzendente Symbol für das Naturphilosophie-Yoga: Yin und Yang der Körper-Seele-Existenz'."\n".
                                                                  'als Dualismus von Djet und Neheh.');
  
  $NPYo_g_figure_ary_PhoenixAusDerAsche
                                                 = array( fig_file_name => 'Naturphilosophie-Yoga/Phoenix-aus-der-Asche-fuer-Tom-20220705-v01', figPDF_is => false, fig_alt_description => 'Phönix aus der Asche – Bewusstsein und Unterbewusstsein', width => '284px', height => '389px', name => 'set local!',
                                                         text => 'Der Phönix aus der Asche des Naturphilosophie-Yoga: Die Hoffnung im Yin und Yang als fraktaler Dualismus von Bewusstsein und Unterbewusstsein.');
  
  $NPYo_g_figure_ary_YinYang                     = array( fig_file_name => 'Naturphilosophie-Yoga/Yin-Yang-Taijitu-v01', fig_alt_description => 'Das Yin und Yang oder Taijitu', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'Das Taijitu oder Yin-Yang-Symbol veranschaulicht, dass das Dao eine Einheit hervorbringt, die aus dynamischen Gegensätzen besteht.'."\n".
                                                                  'Durch die dynamischen Gegensätze entsteht die Welt und ihre Natur, die uns Menschen beinhaltet.');
  


  $NSOSP_g_figure_ary_WolfgangHuss              = array( fig_file_name => 'Wolfgang_Huss-2016-IMG_3683-clip', fig_alt_description => 'Wolfgang Huß ©2016 by Wolfgang Huß', figFileType => 'jpg', figPDF_is => false, width => '270px', height => '288px', name => 'set local!',
                                                         text => 'Yoga-Lehrer/-Coach, Forscher, Programmierer');
  


  $SpaLeb_g_figure_ary_Achtsamkeitsgradient      = array( fig_file_name => 'Spannungsspiel-des-Lebens/Achtsamkeitsgradient-v01', fig_alt_description => 'Der Achtsamkeitsgradient', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'Die Basis des Achtsamkeitsgradienten ist der Anus.'."\n".
                                                                  'Die Intensitätszunahme des Gefühlsgradienten und des Handlungsgradienten bedingen einander.'."\n".
                                                                  'Beide Gradienten können jeweils nicht ohne den anderen beliebig zunehmen.'."\n".
                                                                  'Im Achtsamkeits- oder Kundalini-Prozess können der Gefühlspol und der Handlungspol im mythischen Bild nur gemeinsam als die beiden Schlangen aus dem Schoß zum Dritten Auge hin aufsteigen.'."\n".
                                                                  'Entlang dieser Diagonalen baut sich auch die Atemspannung auf und findet die Atmung statt.');

  $SpaLeb_g_figure_ary_Achtsamkeitsprozess       = array( fig_file_name => 'Achtsamkeitsprozess_v01', fig_alt_description => 'Der Achtsamkeitsprozess', width => '514px', height => '327px', name => 'set local!',
                                                         text => 'Als zentraler Regelprozess unseres Lebens organisiert er unsere Balance aus Stabilität und Fortentwicklung.');

  $SpaLeb_g_figure_ary_AchtsamkeitsprozessBewWiss
                                                 = array( fig_file_name => 'Achtsamkeitsprozess-Bewusstsein-Wissen_v03', fig_alt_description => 'Bewusstsein, Wissen und Können im Achtsamkeitsprozess', width => '514px', height => '327px', name => 'set local!',
                                                         text => 'Der Übergang zwischen den Etappen des Achtsamkeitsprozesses ist in starker, gegenseitiger Wechselwirkung mit unserem Bewusstsein, Wissen und Können.'."\n".
                                                                  'Der Lernprozess unseres Könnens ergibt sich dabei durch den Vergleich der Etappen eines Zirkels mit denen vorheriger Zirkel.');

  $SpaLeb_g_figure_ary_AnatomieRingfoermigeBauchmuskulatur = array( fig_file_name => 'Spannungsspiel-des-Lebens/Anatomie_ringfoermige-Bauchmuskulatur', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Anatomie der ringförmigen Bauchmuskulatur', width => '214px', height => '300px',/* border => '1px',*/ name => 'set local!',
                                                                text => 'Anatomie der ringförmigen Bauchmuskulatur');
  $SpaLeb_g_figure_ary_AnatomieZwerchfellAlleine           = array( fig_file_name => 'Spannungsspiel-des-Lebens/Anatomie_Zwerchfell_Alleine', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Anatomie des Zwerchfells, einzeln', width => '194px', height => '300px',/* border => '1px',*/ name => 'set local!',
                                                                text => 'Anatomie des Zwerchfells, einzeln');
  $SpaLeb_g_figure_ary_AnatomieZwerchfellKombi             = array( fig_file_name => 'Spannungsspiel-des-Lebens/Anatomie_Zwerchfell_Kombi', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Anatomie des Zwerchfells, in Kombination mit anderen Muskeln', width => '217px', height => '300px',/* border => '1px',*/ name => 'set local!',
                                                                text => 'Anatomie des Zwerchfells, in Kombination mit anderen Muskeln');
  $SpaLeb_g_figure_ary_AnatomieGeradeBauchmuskulatur       = array( fig_file_name => 'Spannungsspiel-des-Lebens/Anatomie_gerade-Bauchmuskulatur', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Anatomie der glatten Bauchmuskulatur', width => '217px', height => '300px',/* border => '1px',*/ name => 'set local!',
                                                                text => 'Anatomie der glatten Bauchmuskulatur');
  $SpaLeb_g_figure_ary_AnatomieAeussereSeitlicheBauchmuskulatur = array( fig_file_name => 'Spannungsspiel-des-Lebens/Anatomie_aeußere-seitliche-Bauchmuskulatur', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Anatomie der äußeren seitlichen Bauchmuskulatur', width => '212px', height => '300px',/* border => '1px',*/ name => 'set local!',
                                                                text => 'Anatomie der äußeren seitlichen Bauchmuskulatur');
  $SpaLeb_g_figure_ary_AnatomieSeitlicheRueckemuskulatur   = array( fig_file_name => 'Spannungsspiel-des-Lebens/Anatomie_seitliche-Rueckemuskulatur', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Anatomie der seitlichen Rückenmuskulatur', width => '212px', height => '300px',/* border => '1px',*/ name => 'set local!',
                                                                text => 'Anatomie der seitlichen Rückenmuskulatur');
  $SpaLeb_g_figure_ary_AnatomieLangeBrustkorbmuskulatur   = array( fig_file_name => 'Spannungsspiel-des-Lebens/Anatomie_lange-Brustkorbmuskulatur', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Anatomie der langen Brustkorbmuskulatur', width => '214px', height => '300px',/* border => '1px',*/ name => 'set local!',
                                                                text => 'Anatomie der langen Brustkorbmuskulatur');

  $SpaLeb_g_figure_ary_AtmungAtemspannung      = array( fig_file_name => 'Spannungsspiel-des-Lebens/Atmung-Atemspannung-v01', fig_alt_description => 'Atmung und Atemspannung', width => '380px', height => '600px', name => 'set local!',
                                                         text => 'Um die Atemspannung intensiv und optimal aufzubauen können wir uns vorstellen es ist als wenn wir die Schnur eines'."\n".
                                                                  'Flugdrachens mit dem Anus festhalten, beim Einatmen die Schnur bis ins Dritte Auge hoch führen und spannen'."\n".
                                                                  'und ihr durch öffnen der Kopf- und Nasenhöhlen so viel Führung und Flexibilität geben,'."\n".
                                                                  'das der Drache frei und flexibel geführt weiter aufsteigen kann.');

  $SpaLeb_g_figure_ary_DualKoerperspanStimmung      = array( fig_file_name => 'Naturphilosophie-Yoga/Koerperspannung-Charisma_v02', figPDF_is => false, fig_alt_description => 'Dualismus von Körperspannung und Stimmung', width => '300px', height => '308px', name => 'set local!',
                                                         text => 'Das körper- und ausstrahlungsbezogene Symbol der Stimmung und des Charisma für das Naturphilosophie-Yoga (erster Entwurf).');

  $SpaLeb_g_figure_ary_Handlungsgradient       = array( fig_file_name => 'Spannungsspiel-des-Lebens/Handlungsgradient-v01', fig_alt_description => 'Der Handlungsgradient', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'Die Basis des Handlungsgradienten ist der Anus/Beckenboden.'."\n".
                                                                  'Als erweiterte Basis des Handlungsgradienten können die Fußsohlen gesehen werden.'."\n".
                                                                  'Je weiter die Körperspannung nach oben steigt, je intensiver wir aufgerichtet – erigiert – sind, desto höher ist unsere Handlungsintensität.');

  $SpaLeb_g_figure_ary_Hexagramm                 = array( fig_file_name => 'Spannungsspiel-des-Lebens/Hexagramm-v02', fig_alt_description => 'Das Hexagramm', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'Das Hexagramm ist ein uraltes Symbol, dass im hinduistischen Tantra dafür steht, dass Gott alles umfasst, auch das Männliche und das Weibliche.'."\n".
                                                                  'Insofern ist es ein Symbol der Balance der Pole der Welt oder des Universums.');

  $SpaLeb_g_figure_ary_Gefuehlsgradient        = array( fig_file_name => 'Spannungsspiel-des-Lebens/Gefuehlsgradient-v01', fig_alt_description => 'Der Gefühlsgradient', width => '380px', height => '250px', name => 'set local!',
                                                         text => 'Die Basis des Gefühlsgradienten ist der Anus, der Rücken oder allgemeiner die Rückseite des Körpers.'."\n".
                                                                  'Bei Armen und Beinen die Außenseiten.'."\n".
                                                                  'Die wahrnehmungs- und gefühlsintensivsten und sensibelsten Stellen befinden sich überwiegend vorne im Körper und an den Innenseiten der Gliedmaßen:'."\n".
                                                                  'Die Handflächen, die vorderen Genitalien, der Bauch, das Dantien, der Solarplexus, die Brustwarzen, der Kehlkopf, das Gesicht, die Augen.'."\n".
                                                                  'Bedingte Ausnahme sind der Anus selber und die Fußsohlen.');

  $SpaLeb_g_figure_ary_GefuehlsHandlungspol    = array( fig_file_name => 'Spannungsspiel-des-Lebens/Gefuehls-Handlungspol-v02', fig_alt_description => 'Gefühls- und Handlungspol', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'Wir finden die Entsprechung der Pole des Achtsamkeitsprozesses in der Spezialisierung unserer Gehirnhälften, links und rechts vertauscht zu den von der jeweiligen Hirnhälfte gesteuerten Körperhälften; die eine Seite mehr emotional und die andere eher auf die Handlung bezogen, oft rationale Seite genannt.'."\n".
                                                                  'Bei der überwiegenden Zahl der Menschen sind die Pole in Bezug auf unseren Körper wie im Bild angeordnet, kommen aber auch umgekehrt angeordnet vor.');

  $SpaLeb_g_figure_ary_GefuehlsHandlungspolWaage = array( fig_file_name => 'Spannungsspiel-des-Lebens/Gefuehls-Handlungspol-Waage-v01', fig_alt_description => 'Balance von Gefühl und Handlung', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'Ausgeglichen und intensiv sein bedeutet hier, dass es sich für uns ausgeglichen und intensiv anfühlt.'."\n".
                                                                  'Niemand anders, außer wir selber, kann dies beurteilen.'."\n".
                                                                  'Daher ist es wichtig, dass wir unser Bewusstsein und unsere Achtsamkeit üben und die Filter unserer Wahrnehmung klug justieren.');

  $SpaLeb_g_figure_ary_KirstenBlockDoppellinkesGesicht  = array( fig_file_name => 'Spannungsspiel-des-Lebens/BLOPL-clip', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Doppellinkes Gesicht von Kirsten Block', width => /* '615px' */'308px', height => /* '669px' */'335px', border => '1px', name => 'set local!',
                                                         text => 'Doppellinkes Gesicht von Kirsten Block. Die Denk- und Handlungsseite. \\color{*Light}{\\small{Copyright: \\jumpname{OM:FrQFT:Impressum:CopyrightLizenz:BilboCalvez}}}');
  $SpaLeb_g_figure_ary_KirstenBlockDoppelrechtesGesicht = array( fig_file_name => 'Spannungsspiel-des-Lebens/BLOCKR-clip', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Doppelrechtes Gesicht von Kirsten Block', width => /* '601px' */'301px', height => /* '670px' */'335px', border => '1px', name => 'set local!',
                                                         text => 'Doppelrechtes Gesicht von Kirsten Block. Die Gefühlsseite. \\color{*Light}{\\small{Copyright: \\jumpname{OM:FrQFT:Impressum:CopyrightLizenz:BilboCalvez}}}');
                                                                  
  $SpaLeb_g_figure_ary_KundaliniProzess        = array( fig_file_name => 'Spannungsspiel-des-Lebens/Kundalini-Prozess-v02', fig_alt_description => 'Der Kundalini-Prozess', width => '380px', height => '500px', name => 'set local!',
                                                         text => 'Der Kundalini-Prozess kommt nach dem Yoga Vidja Kundalini Portal aus dem Tantra des Hinduismus und ist auch in den tibetanischen Buddhismus eingegangen.'."\n".
                                                                  'Die Darstellung bringt diesen Prozess mit dem Achtsamkeitsprozess in Zusammenhang, mit dem er, je nach Perspektive, identisch oder ein Teil von ihm ist.');

  $SpaLeb_g_figure_ary_TomOriginalGesicht      = array( fig_file_name => 'Spannungsspiel-des-Lebens/Tom_Original_20160930_v1_1(7)', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Toms originales Gesicht', width => '204px', height => '300px', border => '1px', name => 'set local!',
                                                         text => 'Toms originales Gesicht.');
  $SpaLeb_g_figure_ary_TomGespiegeltesGesicht  = array( fig_file_name => 'Spannungsspiel-des-Lebens/Tom_Mirror_20160930_v1_1(7)', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Toms gespiegeltes Gesicht', width => '204px', height => '300px', border => '1px', name => 'set local!',
                                                         text => 'Toms gespiegeltes Gesicht.');

  $SpaLeb_g_figure_ary_TomDoppellinkesGesicht  = array( fig_file_name => 'Spannungsspiel-des-Lebens/Tom_Left_20160930_v1_1(7)', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Toms doppellinkes Gesicht', width => '196px', height => '300px', border => '1px', name => 'set local!',
                                                         text => 'Toms doppellinkes Gesicht.');
  $SpaLeb_g_figure_ary_TomDoppelrechtesGesicht = array( fig_file_name => 'Spannungsspiel-des-Lebens/Tom_Right_20160930_v1_1(7)', figFileType => 'jpeg', figPDF_is => false, fig_alt_description => 'Toms doppelrechtes Gesicht', width => '196px', height => '300px', border => '1px', name => 'set local!',
                                                         text => 'Toms doppelrechtes Gesicht.');

                                                         
  $SupNum_g_figure_ary_GeradeSuperialZahlen    = array( fig_file_name => 'SN/superial-zahlen-gerade-v02', fig_alt_description => 'Gerade der Superial-Zahlen in geschachtelten Dimensionen', width => '600px', height => '290px', name => 'set local!',
                                                         text => 'Die Grafik zeigt die fraktale Struktur der Geraden der Superial-Zahlen.'."\n".
                                                                 'Untereinander dargestellt sind die verschachtelten Zahlengeraden, die jeweils darunter die unendlich kleine Umgebung'."\n".
                                                                 'um eine Zahl der darüber liegenden Ebene herum zeigt.'."\n".
                                                                 'Auf der unendlich kleinen, umgebenden Zahlengeraden ist jeweils eine bestimmte Zahl angegeben, die wieder eine solche Umgebung hat.'."\n".
                                                                 'Die hier dargestellte Zahl ist:  \\term{2,6⋅s^{2} + 0,5⋅s^{1} – 1,4⋅s^{0} + 3,5⋅s^{-1}  = 〈2,6〉〈0,5〉〈–1,4〉_{0}〈3,5〉}');
  
  $SupNum_g_figure_ary_sGeomKonstruktTeilung   = array( fig_file_name => 'SN/s-geom-Konstrukt-Teilung-v02', fig_alt_description => 'Rhythmische Zerlegung der Eins durch natürliche Zahlen', width => '600px', height => '290px', name => 'set local!',
                                                         text => 'Die Grafik zeigt, wie durch die Projektion der Begrenzungspunkte aller regelmäßigen natürlichzahligen Teilstrecken auf die Einheitsstrecke,'."\n".
                                                                 'von der Eins an bis ins Unendliche, und durch das Interpolieren ihrer Begrenzungspunkte zu einem gleichmäßigen Rhythmus,'."\n".
                                                                 'nach und nach als Abstand zwischen den Punkten die superiale Zahl \\term{s^{−1}} konstruiert wird.'."\n".
                                                                 'Als Begrenzungspunktanzahl, ohne die Eins, oder als Anzahl der Teilstrecken ergibt sich die superiale Basis \\term{s}.');
  
  $SupNum_g_figure_ary_sGeomKonstruktWiederholung = array( fig_file_name => 'SN/s-geom-Konstrukt-Wiederholung-v02', fig_alt_description => 'Rhythmische Wiederholung auf Basis natürlicher Zahlen', width => '600px', height => '290px', name => 'set local!',
                                                         text => 'Die Grafik zeigt, wie durch den Zusammenfall aller Rhythmen der natürlichen Zahlen,'."\n".
                                                                 'von der Eins an bis ins Unendliche, die superiale Basis s konstruiert wird.'."\n");
                                                                 
                                                                 
  $ZS_g_figure_ary_GraviLeptonWirkung        = array( fig_file_name => 'Zahlensemantik/Gravi_Lepton-Wirkung_v12', fig_alt_description => 'Graviradiation ei­nes sim­pli­fi­zier­ten Lep­to­nen-­Strings', width => '660px', height => '825px', name => 'set local',
                                                         text => 'Die Darstellung zeigt die graviradiative Wirkung eines simplifizierten Leptonen-Strings auf sein Umfeld.'."\n".
                                                                 'Jedes einzelne Wirkungsquant des Strings erzeugt ständig neue, virtuelle Wirkungsquanten, die ringförmig um den und'."\n".
                                                                 'senkrecht zum String abgestrahlt werden.'."\n".
                                                                 'Ihre Wirkung nimmt beim Abstand \\term{r} zum String nur mit \\term{1/r} ab.'."\n".
                                                                 'Bei doppelter Energie und Masse \\term{m_{ele}} des Strings halbiert sich sein Radius \\term{r_{ele}} und vervierfacht sich seine Wirkungsquanten-Dichte.'."\n".
                                                                 'Seine Graviradiation verdoppelt sich aber nur, weil die Länge \\term{Δt_{vwq}} seiner abgestrahlten Impulse sich durch die doppelte Winkelgeschwindigkeit \\term{ω_{ele}}'."\n".
                                                                 'halbiert.');
  
  


  // const color = 'color';

  $Glo_g_Color_list = array_merge( array(
                             '*Bearb'                 => array( color => '7000A0'),
                             '*Concl'                 => array( color => '*Conclusion'),
                             '*Entwick'               => array( color => '009000'),  // #: Grün
                             '*Light'                 => array( color => 'A0A0A0'),
                             '*ContentPart'           => array( color => '808080'),
                             '*ContentItemDisabled'   => array( color => 'A0A0A0'),
                             '*TitleAdd'              => array( color => '808080'),
                             '*CloserDesc'            => array( color => '*Conclusion'),  // #: Blau
                             '*WirkungsquantenRot'    => array( color => 'D00000'),
                             '*LichtbahnGruen'        => array( color => '00D000'),
                             '*SpinBahnBlau'          => array( color => '0000D0'),
                           ), $Glo_g_Color_list);
  
  
  const jump_name = 'jump_name';

  $Glo_g_Theme_list = array(
                             // #: FrQFT
                             '*Alterung-Herlei'                      => array( jump_name => 'OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip:Exist'),
                             '*Alterung-Implem'                      => array( jump_name => 'OM:FrQFT:ZeitAlterungFrequenz:Alterung'),
                             '*Anzahlerhaltung-Implem'               => array( jump_name => 'OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung:ErhaltBruech'),
                             '*BeobNotation-Einfuehr'                => array( jump_name => 'OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung:Nota'),
                             '*Bewegungsraum-Herlei'                 => array( jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum:BewegRaum'),
                             '*Elapsonen-Herlei'                     => array( jump_name => 'OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip:Ausblick'),
                             '*Elapsonen-Vakuum-Herlei'              => array( jump_name => 'OM:FrQFT:NeuePhysik:Strings-aus-Wirkungsquanten:WQS-VE'),
                             '*Elektromagnetische-Polar-Herlei'      => array( jump_name => 'OM:FrQFT:NeuePhysik:Elektromagnetische-Polarisation'),
                             '*Elementarteilchen-Materie-Herlei'     => array( jump_name => 'OM:FrQFT:NeuePhysik:Elementarteilchen-der-Materie'),
                             '*Elementarteilchen-String-Anzahlerhaltung-Einfuehr' => array( jump_name => '*Wirkungsquanten-String-Anzahlerhaltung-Einfuehr'),
                             '*Energieeinheiten-Masse-Impuls-Herlei' => array( jump_name => 'OM:FrQFT:NeuePhysik:Heisenbergsche-Unschaerferelation:EE'),
                             '*Energieerhaltung-Einfuehr'            => array( jump_name => '*Wirkungsquanten-Anzahlerhaltung-Einfuehr'),
                             '*Energieerhaltung-Implem'              => array( jump_name => 'OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung:ErhaltBruech'),
                             '*Energieerhaltung-Verallgem-Einfuehr'  => array( jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum:VerSchwLoeKos'),
                             '*Energieerhaltung-Verallgem-Implem'    => array( jump_name => 'OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung:ErhaltBruech'),
                             '*Farbpolarisation-Herlei'              => array( jump_name => 'OM:FrQFT:NeuePhysik:Symmetriebrechung:FarbPol'),
                             '*FrQFT:Feinstruk-Photon-Einf'          => array( jump_name => 'OM:FrQFT:NeuePhysik:Loesungsansatz:HelixfSpiralb'),
                             '*Fraktales-Existenzprinzip-Herlei'     => array( jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum:FrakExistUFrakStr'),
                             '*FrQFT:Fundamentalteilchen-Herlei'     => array( jump_name => 'OM:FrQFT:NeuePhysik:Beobachtungen-und-nat-Ueberlegungen:WWSymBruch'),
                             '*Graviradiation-Einfuehr'              => array( jump_name => 'OM:FrQFT:Quantengravitation:Vortext:Graviradiation'),
                             '*Heisenb-Unschaerferelat-Interpret-Herlei' => array( jump_name => 'OM:FrQFT:NeuePhysik:Heisenbergsche-Unschaerferelation'),
                             '*Helixfoermige-Spiralbahn-LoesAnsatz'  => array( jump_name => 'OM:FrQFT:NeuePhysik:Loesungsansatz:HelixfSpiralb'),
                             '*Kosmos-Herlei'                        => array( jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum:VerSchwLoeKos'),
                             '*KosmBeob-Herlei'                      => array( jump_name => 'OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung:KosBeob'),
                             '*Licht-Mat-Medium-Einfuer'             => array( jump_name => 'OM:FrQFT:NeuePhysik:Relativitaet:SRT'),
                             '*FrQFT:Lichtuhr-Philosophie-Einfuer'   => array( jump_name => 'OM:FrQFT:NeuePhysik:Philosophie-der-Lichtuhr'),
                             '*Lichtuhr-Prinzip-Einfuer'             => array( jump_name => 'OM:FrQFT:NeuePhysik:Philosophie-der-Lichtuhr:PrinzLichtuhr'),
                             '*LG-erhoete-LoesAnsatz'                => array( jump_name => 'OM:FrQFT:NeuePhysik:Loesungsansatz:NeuLGDrilling'),
                             '*LG-Rotation-LoesAnsatz'               => array( jump_name => 'OM:FrQFT:NeuePhysik:Loesungsansatz:NeuLGDrilling'),
                             '*LG-Translat-LoesAnsatz'               => array( jump_name => 'OM:FrQFT:NeuePhysik:Loesungsansatz:NeuLGDrilling'),
                             '*Mikro-Wirkungsquanten-Herlei'         => array( jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum:FrakExistUFrakStr'),
                             '*Mikro-Wirkungsquanten-Strings-Herlei' => array( jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum:FrakExistUFrakStr'),
                             '*Photonen-Herlei'                      => array( jump_name => 'OM:FrQFT:NeuePhysik:Elektromagnetische-Polarisation:Photonen'),
                             '*Realt-Wq-Ep-Dichteverteilung-Analy'   => array( jump_name => 'OM:FrQFT:ZeitAlterungFrequenz:Dichtestruktur'),
                             '*Schwarze-Loech-Herlei'                => array( jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum:VerSchwLoeKos'),
                             '*Schwarze-Loech-Zusamm'                => array( jump_name => 'OM:FrQFT:Zusammenfassung:Urknall-und-Schwarze-Loecher'),
                             '*FrQFT:Teilchen-Modell-RelatPrinz'     => array( jump_name => 'OM:FrQFT:NeuePhysik:Philosophie-der-Lichtuhr:TeilModRelatPrinzip'),
                             '*Uebergangshorizont-Herlei'            => array( jump_name => 'OM:FrQFT:ZeitAlterungFrequenz:Dichtestruktur:RelatWQSundEBDicht'),
                             '*Universum-fraktales-Herlei'           => array( jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum'),
                             '*Urknall-Herlei'                       => array( jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum:VerSchwLoeKos'),
                             '*Urknall-Zusamm'                       => array( jump_name => 'OM:FrQFT:Zusammenfassung:Urknall-und-Schwarze-Loecher'),
                             '*FrQFT:Vakuum-Energ-Dichte-Herlei'     => array( jump_name => 'OM:FrQFT:ZeitAlterungFrequenz:Dichtestruktur:RelatVakEnergDichte'),
                             '*Wirkungsquanten-GeschwKonst-Einfuehr' => array( jump_name => 'OM:FrQFT:NeuePhysik:Heisenbergsche-Unschaerferelation:EE'),
                             '*Wirkungsquanten-Herlei'               => array( jump_name => 'OM:FrQFT:NeuePhysik:Heisenbergsche-Unschaerferelation:WQ'),
                             '*Wirkungsquanten-Anzahlerhaltung-Einfuehr' => array( jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum:VerSchwLoeKos'),
                             '*Wirkungsquanten-Strings-Herlei'       => array( jump_name => 'OM:FrQFT:NeuePhysik:Strings-aus-Wirkungsquanten:WQS-VE'),
                             '*Wirkungsquanten-String-Anzahlerhaltung-Einfuehr' => array( jump_name => 'OM:FrQFT:NeuePhysik:Fraktales-Universum:VerSchwLoeKos'),
                             '*Wirkungsquanten-virtuelle-Einfuehr'   => array( jump_name => 'OM:FrQFT:Quantengravitation:VereinfModellQGravitation:VereinfString'),
                             '*Wirkungsquanten-Impulskegel-Herlei' => array( jump_name => 'OM:FrQFT:NeuePhysik:Strings-aus-Wirkungsquanten:WQ-WW'),
                            
                             // #: SpaLeb
                             '*SpaLeb:Achtsamkeitsprozess-Implem'    => array( jump_name => 'OM:SpaLeb:Achtsamkeitsprozess'),
                             '*SpaLeb:Disharmonieprinzip'            => array( jump_name => 'OM:SpaLeb:Koerperliche-und-seelische-Existenz:OrganischesExistenzprinzip:DisharmPrinz'),
                             '*SpaLeb:Selbstschutz'                  => array( jump_name => 'OM:SpaLeb:Psyche-und-Stimmung:Selbstmitgefuehl'),
                             '*SpaLeb:Spannungsprinzip'              => array( jump_name => 'OM:SpaLeb:Koerperliche-und-seelische-Existenz:OrganischesExistenzprinzip:SpanPrinz'),
                           );
  
  
  
  $nSOSp_g_formelName_FP_2 = 'FP.2';
  $nSOSp_g_formelName_FP_3 = 'FP.3';
  $nSOSp_g_formelName_Un_10 = 'Un.10';

  $FrQFT_g_Ani_idx = 0;
  $FrQFT_g_Fig_idx = 0;
  $FrQFT_g_Vid_idx = 0;
  
  $Glo_g_Site_ary = array_merge(

    $OT_g_Site_ary,
    $SupNum_g_Site_ary,
    array(
                          
  'OM:FrQFT:Impressum' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Impressum_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Impressum_de.php',
           titel => 'Impressum - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Impressum von The New Soul Of Science Project; Kontaktdaten des Inhabers.',
           keywords => '',
           text_titel_h1 => 'Impressum',
           text_titel_short => 'Impressum',
           text_undertitel_h2 => '',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:FrQFT:Impressum:Inhaberdaten' => array( headline_text => 'Inhaberdaten', headline_text_short => 'Inhaberdaten'),
                             
                  'OM:FrQFT:Impressum:Beteiligung' => array( headline_text => 'Beteiligung', headline_text_short => 'Beteiligung'),
                    'OM:FrQFT:Impressum:Beteiligung:GitHub' => array( headline_text => 'GitHub', headline_text_short => 'GitHub'),
                             
                  'OM:FrQFT:Impressum:Netzwerke' => array( headline_text => 'Soziale Netzwerke, Foren', headline_text_short => 'Soziale Netzwerke, Foren'),
                             
                  'OM:FrQFT:Impressum:Spenden' => array( headline_text => 'Crowdfunding Spenden', headline_text_short => 'Crowdfunding Spenden'),
                             
                  'OM:FrQFT:Impressum:Supporter' => array( headline_text => 'Spender und Unterstützer', headline_text_short => 'Spender und Unterstützer'),
                             
                  'OM:FrQFT:Impressum:Haftungshinweis' => array( headline_text => 'Haftungshinweis', headline_text_short => 'Haftungshinweis'),
                             
                  'OM:FrQFT:Impressum:CopyrightLizenz' => array( headline_text => 'Copyrights und Lizenzen', headline_text_short => 'Copyrights und Lizenzen'),
                    'OM:FrQFT:Impressum:CopyrightLizenz:Inhalt' => array( headline_text => 'Copyright des Inhalts', headline_text_short => 'Copyright des Inhalts'),
                    'OM:FrQFT:Impressum:CopyrightLizenz:OpenSansFont' => array( headline_text => 'Open Sans Font', headline_text_short => 'Open Sans Font'),
                    'OM:FrQFT:Impressum:CopyrightLizenz:EyeOfHorus' => array( headline_text => 'Eye of Horus', headline_text_short => 'Eye of Horus'),
                    'OM:FrQFT:Impressum:CopyrightLizenz:BilboCalvez' => array( headline_text => 'Bilbo Calvez'/* , headline_text_short => 'XXX' */),
                ),
         ),

  /*'OM:FrQFT:XXX' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/XXX',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/XXX',
           titel => 'XXX - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'XXX',
           keywords => 'XXX',
           text_titel_h1 => 'XXX',
           text_titel_short => 'XXX',
           text_undertitel_h2 => 'XXX',
           text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:FrQFT:XXX:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),*/

  'OM:FrQFT:' =>
    array_merge( $nSOSp_g_info_wolfgangHuss,
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/',
           favicons_url_rel_opt => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/favicon/',
           //header_pict_name => 'Fractal-Quantum-Flow-Theory_En.jpg',
           //header_pict_alt => 'Fractal Quantum Flow Theory, Ideas of new Science',
           name_short => 'FrQFT',
           font_ary => array(
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                            ),
           header_bgcolor => '#FFFFFF',
           header_pict_name => 'FrQFT/FrQFT_header_v01_3.jpg',
           header_pict_width => '930px',
           header_pict_height => '177px',
           header_pict_bgcolor => '#FFFFFF',
           header_pict_alt => 'Fraktale Quanten-Fluss-Theorie, Organische Physik',
           header_links_marginLeft => '336px',
           copy_right => 'Fraktale Quanten-Fluss-Theorie (FrQFT) \\\\'."\n".
                          '© 1990–2022 by \\\\'."\n".
                          'Wolfgang Huß und \\\\'."\n".
                          'Media Line Digital e.K. \\\\'."\n".
                          'is licensed under \\\\'."\n".
                          '\\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
           litera_url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Literatur_de.php',
           litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/quantum-flow-theory_bibliographie_v8_002.bib',
         )),
   'OM:FrQFT:Home' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/index.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/index.php',
           titel => 'Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           //description => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
           description => 'Ein Vorschlag zur Vereinheitlichung der Quanten- und Gravitationsphysik sowie der Kosmologie. Neue Physik auf Basis von sich selbst organisierenden Regelprozessen. Systeme von lichtähnlichen, zu Strings verbundenen Fundamentalteilchen sind Grundlage einer ›organischen Physik‹.',
           keywords => '',
           text_titel_h1 => 'Fraktale Quanten-Fluss-Theorie \\color{*TitleAdd}{\\small{(FrQFT)}}',
           text_titel_short => 'Quanten-Fluss-Theorie',
           //text_undertitel_h2 => 'Ein Vorschlag zur Vereinheitlichung der Physik',
           text_undertitel_h2 => 'Ein Vorschlag zur Vereinheitlichung der Quanten- und Gravitationsphysik sowie der Kosmologie',
           //text_titel_discr_h3 => 'Eine neue Physik – eine „organische Physik“ – auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
           //text_titel_discr_h3 => 'Eine neue Physik auf Basis von Regelprozessen. Selbstorganisierte, fraktale Systeme aus lichtähnlichen, zu Strings verbundenen Wirkungsquanten sind Grundlage einer ›organischen Physik‹',
           //text_titel_discr_h3 => 'Neue Physik auf Basis von bio-ähnlichen strukturellen Regelprozessen. Selbstorganisierte, fraktale Systeme aus lichtähnlichen, zu Strings verbundenen Fundamentalteilchen sind Grundlage einer ›organischen Physik‹',
           //text_titel_discr_h3 => 'Neue Physik auf Basis von strukturellen und vollständig selbstorganisierten Regelprozessen — Fraktal verschachtelte Systeme von lichtähnlichen, zu Strings verbundenen Fundamentalteilchen sind Grundlage einer ›organischen Physik‹',
           //text_titel_discr_h3 => 'Neue Physik auf Basis von selbstorganisierten Regelprozessen — Systeme von lichtähnlichen, zu Strings verbundenen Fundamentalteilchen sind Grundlage einer ›organischen Physik‹',
           text_titel_discr_h3 => 'Neue Physik auf Basis von sich selbst organisierenden Regelprozessen. Systeme von lichtähnlichen, zu Strings verbundenen Fundamentalteilchen sind Grundlage einer ›organischen Physik‹',
           jump_ary => array(
                  'OM:FrQFT:Home:Inhalt' => array( headline_text => 'Inhalt', headline_text_short => 'Inhalt'),
                  'OM:FrQFT:Home:Lexikon' => array( headline_text => 'Lexikon', headline_text_short => 'Lexikon'),
                ),
         ),
  'OM:FrQFT:Atommodell' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Atommodell_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Atommodell_de.php',
           titel => 'Atommodell - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'XXX',
           keywords => '',
           text_titel_h1 => 'Atommodell',
           text_titel_short => 'Atommodell',
           text_undertitel_h2 => 'Warum stürtzt das Elektron nicht in den Atomkern oder wie verhalten sich Elektronen im Atom?',
           //text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:FrQFT:Atommodell:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:FrQFT:Ausblick' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Ausblick_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Ausblick_de.php',
           titel => 'Ausblick - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Wie kann es mit der Fraktalen Quanten-Fluss-Theorie weiter gehen?',
           keywords => '',
           text_titel_h1 => 'Ausblick',
           text_titel_short => 'Ausblick',
           text_undertitel_h2 => 'Wie kann es mit der Fraktalen Quanten-Fluss-Theorie weiter gehen?',
           //text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:FrQFT:Ausblick:Experimentelle-Ueberpruefungen' => array( headline_text => 'Experimentelle Überprüfungen', headline_text_short => 'Experimentelle Überprüfungen'),
                  'OM:FrQFT:Ausblick:Theoretische-Ueberpruefungen' => array( headline_text => 'Theoretische Überprüfung', headline_text_short => 'Theoretische Überprüfung'),
                ),
         ),
  'OM:FrQFT:Basisteilchenmodell' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Basisteilchenmodell-im-Vergleich_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Basisteilchenmodell-im-Vergleich_de.php',
           titel => 'Basisteilchenmodell im Vergleich - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Das wunderbar einfache Basisteilchenmodell von Albrecht Giese beschriebt viele grundlegende Eigenschaften der Elementarteilchen, aber die Quanten-Fluss-Theorie dringt weiter in die Tiefe und merzt Probleme aus, welche Gieses Modell noch hat.',
           keywords => '',
           text_titel_h1 => 'Basisteilchenmodell im Vergleich',
           text_titel_short => 'Basisteilchenmodell im Vergleich',
           text_undertitel_h2 => 'Auf Ebene der Lichtbewegung ist das Basisteilchenmodell der fraktalen Quanten-Fluss-Theorie sehr ähnlich; in der Tiefe jedoch gibt es Unterschiede',
           //%! text_titel_discr_h3 => 'Das Basisteilchenmodell ist wunderbar einfach und beschriebt viele grundlegende Eigenschaften der Elementarteilchen. Die Quanten-Fluss-Theorie dringt weiter in die Tiefe und merzt Probleme aus, welche das Basisteilchenmodell noch hat',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:FrQFT:Basisteilchenmodell:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                  'OM:FrQFT:Basisteilchenmodell:Gravitation' => array( headline_text => 'Gravitation', headline_text_short => 'Gravitation'),
                  'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-im-Gravitationsfeld' => array( headline_text => 'Elementarteilchen im Gravitationsfeld', headline_text_short => 'Elementarteilchen im Gravitationsfeld'),
                    'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-im-Gravitationsfeld:LichtgeschwGravi' => array( headline_text => 'Lichtgeschwindigkeitsänderung im Gravitationsfeld', headline_text_short => 'Lichtgeschwindigkeitsänderung im Gravitationsfeld'),
                    'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-im-Gravitationsfeld:Equ-BasGraLGEinstein' => array( headline_text => 'Bas.EleGra.5', headline_text_short => 'Bas.EleGra.5'),
                    'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-im-Gravitationsfeld:Equ-FrequnezGravi' => array( headline_text => 'Bas.EleGra.13', headline_text_short => 'Bas.EleGra.13'),
                    'OM:FrQFT:Basisteilchenmodell:Elementarteilchen-im-Gravitationsfeld:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                  'OM:FrQFT:Basisteilchenmodell:Dunkle-Materie' => array( headline_text => 'Dunkle Materie', headline_text_short => 'Dunkle Materie'),
                  'OM:FrQFT:Basisteilchenmodell:Vakuum-und-virtuelle-Teilchen' => array( headline_text => 'Vakuum und virtuelle Teilchen', headline_text_short => 'Vakuum und virtuelle Teilchen'),
                ),
         ),
  'OM:FrQFT:De-Broglie-Bohm-Theorie' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Quantenmechanik-De-Broglie-Bohm-Theorie-Pilotwellentheorie-Bohmsche-Mechanik_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Quantenmechanik-De-Broglie-Bohm-Theorie-Pilotwellentheorie-Bohmsche-Mechanik_de.php',
           titel => 'Die Realisierung der De-Broglie-Bohm-Theorie (Bohmsche Mechanik, Pilotwellentheorie, Führungswellentheorie) - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Der Quantenmechanik äquivalente und deterministische Alternative.',
           keywords => '',
           text_titel_h1 => 'Die Realisierung der De-Broglie-Bohm-Theorie \\\\ \\color{*TitleAdd}{\\small{(Bohmsche Mechanik, Pilotwellentheorie, Führungswellentheorie)}}',
           text_titel_short => 'De-Broglie-Bohm-Theorie',
           // text_undertitel_h2 => 'Eine äquivalente und deterministische Alternative zur Quantenmechanik',
           text_undertitel_h2 => 'Der Quantenmechanik äquivalente und deterministische Alternative',
           //text_titel_discr_h3 => 'XXX klassischer',
           jump_ary => array(
                    'OM:FrQFT:De-Broglie-Bohm-Theorie:Vortext:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                             
                  'OM:FrQFT:De-Broglie-Bohm-Theorie:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:FrQFT:Diskussion' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Diskussion_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Diskussion_de.php',
           titel => 'Diskussion - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Die Erörterung wichtiger und kritischer Aspekte.',
           keywords => '',
           text_titel_h1 => 'Diskussion',
           text_titel_short => 'Diskussion',
           text_undertitel_h2 => 'Die Erörterung wichtiger und kritischer Aspekte',
           //text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:FrQFT:Diskussion:ErhaltungVerschraeQuantiEtc' => array( headline_text => 'Erhaltungssätze, Verschränkung, Quantisierung, Unschärferelation, Symmetriebrüche und Wechselwirkungen', headline_text_short => 'Erhaltungssätze, Verschränkung, Quantisierung, Unschärferelation, Symmetriebrüche und Wechselwirkungen'),
                  'OM:FrQFT:Diskussion:Naturkonstanten' => array( headline_text => 'Naturkonstanten und Eichung', headline_text_short => 'Naturkonstanten und Eichung'),
                  'OM:FrQFT:Diskussion:Zeit' => array( headline_text => 'Zeit', headline_text_short => 'Zeit'),
                  'OM:FrQFT:Diskussion:Bewegungsraum' => array( headline_text => 'Bewegungsraum', headline_text_short => 'Bewegungsraum'),
                  'OM:FrQFT:Diskussion:Urknall-SchwarzeLoecher-Kosmos' => array( headline_text => 'Urknall, Schwarze Löcher und der Kosmos', headline_text_short => 'Urknall, Schwarze Löcher und der Kosmos'),
                  'OM:FrQFT:Diskussion:Keine-Singularitaeten' => array( headline_text => 'Keine Singularitäten', headline_text_short => 'Keine Singularitäten'),
                  'OM:FrQFT:Diskussion:Nichtlokalitaet' => array( headline_text => 'Nichtlokalität', headline_text_short => 'Nichtlokalität'),
                  'OM:FrQFT:Diskussion:Relativitaet-und-Michelson-Morley-Experiment' => array( headline_text => 'Relativität und Michelson-Morley-Experiment', headline_text_short => 'Relativität und Michelson-Morley-Experiment'),
                  'OM:FrQFT:Diskussion:Ueberlichtgeschwindigkeit' => array( headline_text => 'Überlichtgeschwindigkeit', headline_text_short => 'Überlichtgeschwindigkeit'),
                  'OM:FrQFT:Diskussion:Digitales-Verhalten-der-Wirkungsquanten' => array( headline_text => 'Digitales Verhalten der Wirkungsquanten', headline_text_short => 'Digitales Verhalten der Wirkungsquanten'),
                  'OM:FrQFT:Diskussion:Absoluter-Raum-und-absolute-Zeit' => array( headline_text => 'Absoluter Raum und absolute Zeit', headline_text_short => 'Absoluter Raum und absolute Zeit'),
                  'OM:FrQFT:Diskussion:Hintergrundunabhaengigkeit' => array( headline_text => 'Hintergrundunabhängigkeit, Relationismus, Diffeomorphismeninvarianz', headline_text_short => 'Hintergrundunabhängigkeit'),
                  'OM:FrQFT:Diskussion:Paradigmenwechsel-zur-Quantenmechanik' => array( headline_text => 'Paradigmenwechsel zur Quantenmechanik', headline_text_short => 'Paradigmenwechsel zur Quantenmechanik'),
                  'OM:FrQFT:Diskussion:Paradigmenwechsel-zur-Relativitaetstheorie' => array( headline_text => 'Paradigmenwechsel zur Relativitätstheorie', headline_text_short => 'Paradigmenwechsel zur Relativitätstheorie'),
                             
                  'OM:FrQFT:Diskussion:Bewusstsein' => array( headline_text => 'Das Bewusstsein', headline_text_short => 'Das Bewusstsein'),
                             
                  'OM:FrQFT:Diskussion:LebenFrQFT' => array( headline_text => 'Leben in der Fraktalen Quanten-Fluss-Theorie', headline_text_short => 'Leben in der Fraktalen Quanten-Fluss-Theorie'),
                ),
         ),
  'OM:FrQFT:Dunkle-Energie' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Dunkle-Energie_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Dunkle-Energie_de.php',
           titel => 'Dunkle Energie - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Die Dynamik oder Energiedichte der Feinstruktur des Vakuums und der Elementarteilchen.',
           keywords => '',
           text_titel_h1 => 'Dunkle Energie',
           text_titel_short => 'Dunkle Energie',
           text_undertitel_h2 => 'Die Dynamik oder Energiedichte der Feinstruktur des Vakuums und der Elementarteilchen',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:FrQFT:Dunkle-Energie:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                  'OM:FrQFT:Dunkle-Energie:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:FrQFT:Dunkle-Materie' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Dunkle-Materie-modifizierte-newtonsche-Dynamik-MOND_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Dunkle-Materie-modifizierte-newtonsche-Dynamik-MOND_de.php',
           titel => 'Phänomen der Dunklen Materie: Emergente Gravitation begründet die modifizierte newtonsche Dynamik (MOND) - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           //description => 'Eine zusätzliche Gavitation in der Quanten-Fluss-Theorie wirkt wie die modifizierte newtonsche Dynamik (MOND) und ähnelt heißer Dunkler Materie (HDM).',
           //description => 'Eine höhere Energiedichte des Vakuums in und um große Massenansammlungen herum erzeugt zusätzliche Gavitation und hat Ähnlichkeit mit der modifizierten newtonschen Dynamik (MOND) und ähnelt Dunkler Materie.',
           description => 'Emergente Quantengravitation ist der modifizierten newtonschen Dynamik (MOND) ähnlich. Eine erhöhte Energiedichte des Vakuums in und um große Massenansammlungen herum entfaltet zusätzliche Gravitation.',
           keywords => '',
           //text_titel_h1 => 'Dunkle Materie oder modifizierte newtonsche Dynamik (MOND)?',
           // text_titel_h1 => '\\color{*TitleAdd}{\\small{Phänomen der Dunklen Materie:}} \\\\ Emergente Gravitation ist nicht ganz gleich der modifizierten newtonschen Dynamik (MOND)',
           text_titel_h1 => 'Phänomen der Dunklen Materie',
           text_titel_short => 'Phänomen der Dunklen Materie',
           //text_undertitel_h2 => 'Gravitation verstehen heißt Vakuum verstehen – der Higgs-Mechanismus auf großen Skalen',
           // text_undertitel_h2 => 'Höhere Energiedichten des Vakuums in und um große Massenansammlungen herum wirken zusätzlich gravitativ und erklären so das Phänomen der Dunklen Materie',
           text_undertitel_h2 => 'Emergente Quantengravitation ist der modifizierten newtonschen Dynamik (MOND) ähnlich',
           //text_titel_discr_h3 => 'Die Quanten-Fluss-Theorie bietet mit der zusätzlichen gravitativen Wirkung des verdichteten Vakuums einer Galaxie eine alternative Erklärung.',
           //text_titel_discr_h3 => 'Eine zusätzliche Gavitation durch verdichtetes Vakuum in einer Galaxie wirkt wie die modifizierte newtonsche Dynamik (MOND) und ähnelt heißer Dunkler Materie (HDM).',
           // text_titel_discr_h3 => 'Eine Wechselwirkung zwischen Materie und Dunkler Energie erzeugt eine Art Higgs-Mechanismus auf großen Skalen in Raum und Zeit\\hidden{. Wer die Struktur des Kosmos und des Vakuums versteht, löst das Problem der Dunklen Materie}',
           text_titel_discr_h3 => 'Eine erhöhte Energiedichte des Vakuums in und um große Massenansammlungen herum entfaltet zusätzliche Gravitation',
           jump_ary => array(
                  'OM:FrQFT:Dunkle-Materie:Die-Sache-mit-der-Gravitation-der-Vakuumenergie' => array( headline_text => 'Die Sache mit der Gravitation der Vakuumenergie', headline_text_short => 'Die Sache mit der Gravitation der Vakuumenergie'),
                  'OM:FrQFT:Dunkle-Materie:Gravitative-Wirkung-des-Vakuums' => array( headline_text => 'Gravitative Wirkung des Vakuums', headline_text_short => 'Gravitative Wirkung des Vakuums'),
                  'OM:FrQFT:Dunkle-Materie:Mechanismus-des-Phaenomens-der-Dunklen-Materie' => array( headline_text => 'Mechanismus des Phänomens der Dunklen Materie', headline_text_short => 'Mechanismus des Phänomens der Dunklen Materie'),
                  'OM:FrQFT:Dunkle-Materie:Berechnung-der-Vakuumgravitation' => array( headline_text => 'Berechnung der Vakuumgravitation', headline_text_short => 'Berechnung der Vakuumgravitation'),
                  'OM:FrQFT:Dunkle-Materie:Heisze-Dunkle-Materie-und-MOND-aehnlich' => array( headline_text => 'Heiße Dunkle Materie und MOND ähnlich', headline_text_short => 'Heiße Dunkle Materie und MOND ähnlich'),
                  'OM:FrQFT:Dunkle-Materie:Phaenomene-in-der-Milchstrasse' => array( headline_text => 'Phänomene in der Milchstraße', headline_text_short => 'Phänomene in der Milchstraße'),
                ),
         ),
  'OM:FrQFT:ElektroschwacheWW' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Elektroschwache-Wechselwirkung-Teilchenumwandlungen-schwacher-Isospin_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Elektroschwache-Wechselwirkung-Teilchenumwandlungen-schwacher-Isospin_de.php',
           titel => 'Elektroschwache Wechselwirkung, Teilchenumwandlungen und innerer Spin (schwacher Isospin) - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Das neue Teilchenmodell gibt der elektroschwachen Kraft und ihrem schwachen Isospin eine reale Ursache. Der neue, innere Spin ergibt sich aus der Vereinheitlichung von Quantenmechanik und Allgemeiner Relativitätstheorie.',
           keywords => '',
           text_titel_h1 => 'Elektroschwache Wechselwirkung, Teilchenumwandlungen und innerer Spin',
           text_titel_short => 'Elektroschwache Wechselwirkung',
           text_undertitel_h2 => 'Das neue Teilchenmodell gibt der elektroschwachen Kraft und ihrem schwachen Isospin eine reale Ursache.',
           text_titel_discr_h3 => 'Der neue, innere Spin, als eine der realen Ursachen des schwachen Isospins, ergibt sich aus der Vereinheitlichung von Quantenmechanik und Allgemeiner Relativitätstheorie.',
           jump_ary => array(
                  'OM:FrQFT:ElektroschwacheWW:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                             
                    'OM:FrQFT:ElektroschwacheWW:Vortext:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                             
                  'OM:FrQFT:ElektroschwacheWW:Elektromagnetische-WW' => array( headline_text => 'Elektromagnetische Wechselwirkung', headline_text_short => 'Elektromagnetische Wechselwirkung'),
                  'OM:FrQFT:ElektroschwacheWW:Schwache-WW' => array( headline_text => 'Schwache Wechselwirkung', headline_text_short => 'Schwache Wechselwirkung'),
                  'OM:FrQFT:ElektroschwacheWW:Neutrinos' => array( headline_text => 'Neutrinos', headline_text_short => 'Neutrinos'),
                    'OM:FrQFT:ElektroschwacheWW:Elektrisch-neutrales-Lepton' => array( headline_text => 'Abbildung 1', headline_text_short => 'Abbildung 1'),
                  'OM:FrQFT:ElektroschwacheWW:Quarks' => array( headline_text => 'Quarks', headline_text_short => 'Quarks'),
                  'OM:FrQFT:ElektroschwacheWW:Symbolismus' => array( headline_text => 'Symbolismus', headline_text_short => 'Symbolismus'),
                    'OM:FrQFT:ElektroschwacheWW:Leptonen-Quarks-Verhaeltnis-Spins-Antiteilchen' => array( headline_text => 'Abbildung 2', headline_text_short => 'Abbildung 2'),
                  'OM:FrQFT:ElektroschwacheWW:Teilchenumwandlungen' => array( headline_text => 'Teilchenumwandlungen', headline_text_short => 'Teilchenumwandlungen'),
                    'OM:FrQFT:ElektroschwacheWW:Equ-W-minus-Boson-Zerfall' => array( headline_text => 'Esw.3', headline_text_short => 'Esw.3'),
                    'OM:FrQFT:ElektroschwacheWW:Equ-W-minus-Boson-Zerfall-gespiegelt' => array( headline_text => 'Esw.11', headline_text_short => 'Esw.11'),
                ),
         ),
  'OM:FrQFT:Elementarteilchen' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Elementarteilchenmodell-mit-Wirkungsquanten-Strings_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Elementarteilchenmodell-mit-Wirkungsquanten-Strings_de.php',
           titel => 'Elementarteilchenmodell mit Wirkungsquanten-Strings - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Eine neues, fraktales Elementarteilchenmodell basiert auf Strings aus Wirkungsquanten.',
           keywords => '',
           text_titel_h1 => 'Elementarteilchenmodell mit Wirkungsquanten-Strings',
           text_titel_short => 'Elementarteilchenmodell',
           text_undertitel_h2 => 'Schwärme von Wirkungsquanten fügen sich zu Wirkungsquanten-Strings zusammen',
           text_titel_discr_h3 => 'Eingebettet in einem Vakuum aus Wirkungsquanten sind die Wirkungsquanten-Strings der Elementarteilchen von einer Wolke aus virtuellen Teilchen umgeben. Die Geometrie ihres String verleiht ihnen ihre Eigenscchaften.',
           jump_ary => array(
                  'OM:FrQFT:Elementarteilchen:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                             
                    'OM:FrQFT:Elementarteilchen:Vortext:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                             
                  'OM:FrQFT:Elementarteilchen:Elementarteilchen-mit-Ruhemasse' => array( headline_text => 'Elementarteilchen mit Ruhemasse', headline_text_short => 'Elementarteilchen mit Ruhemasse'),
                  'OM:FrQFT:Elementarteilchen:Photonen' => array( headline_text => 'Photonen (Lichtteilchen)', headline_text_short => 'Photonen'),
                  'OM:FrQFT:Elementarteilchen:Massentraegheit' => array( headline_text => 'Massenträgheit', headline_text_short => 'Massenträgheit'),
                  'OM:FrQFT:Elementarteilchen:Elektrische-Ladung' => array( headline_text => 'Elektrische Ladung', headline_text_short => 'Elektrische Ladung'),
                  'OM:FrQFT:Elementarteilchen:Higgs-Feld-Mechanismus-traege-Masse' => array( headline_text => 'Higgs-Feld, Higgs-Mechanismus und träge Masse', headline_text_short => 'Higgs-Feld, Higgs-Mechanismus und träge Masse'),
                  'OM:FrQFT:Elementarteilchen:Gravitation' => array( headline_text => 'Gravitation', headline_text_short => 'Gravitation'),
                  'OM:FrQFT:Elementarteilchen:Hadronen' => array( headline_text => 'Hadronen aus Quarks und Gluonen', headline_text_short => 'Hadronen aus Quarks und Gluonen'),
                  'OM:FrQFT:Elementarteilchen:Quantenmechanik' => array( headline_text => 'Quantenmechanik', headline_text_short => 'Quantenmechanik'),
                  'OM:FrQFT:Elementarteilchen:Welleneigenschaften-der-Elementarteilchen' => array( headline_text => 'Welleneigenschaften der Elementarteilchen', headline_text_short => 'Welleneigenschaften der Elementarteilchen'),
                    'OM:FrQFT:Elementarteilchen:Fig-Doppelspaltexperiment' => array( headline_text => 'Abbildung 1', headline_text_short => 'Abbildung 1'),
                  'OM:FrQFT:Elementarteilchen:Virtuelle-Teilchen' => array( headline_text => 'Virtuelle Teilchen', headline_text_short => 'Virtuelle Teilchen'),
                  'OM:FrQFT:Elementarteilchen:Verschraenkung' => array( headline_text => 'Verschränkung', headline_text_short => 'Verschränkung'),
                  'OM:FrQFT:Elementarteilchen:Punktfoermige-Erscheinung' => array( headline_text => 'Punktförmige Erscheinung', headline_text_short => 'Punktförmige Erscheinung'),
                  'OM:FrQFT:Elementarteilchen:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:FrQFT:Einleitung' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Einleitung_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Einleitung_de.php',
           titel => 'Einleitung - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Ein tiefgreifendes Verständnis von Raum und Zeit ist notwendig, um die grundlegenden Probleme der heutigen Physik zu lösen – die Physik zu vereinheitlichen.',
           keywords => '',
           text_titel_h1 => 'Einleitung',
           text_titel_short => 'Einleitung',
           //text_undertitel_h2 => 'Ein Prinzip für Alles – A Theory of Everything (TOE)',
           text_undertitel_h2 => 'Vereinheitlichung der Physik in einer neuen Physik',
           //text_titel_discr_h3 => 'Ein tiefes Verständnis von Raum, Zeit und Existenz ist notwendig, um die grundlegenden Probleme der heutigen Physik zu lösen; die Physik zu vereinheitlichen.',
           jump_ary => array(
                  'OM:FrQFT:Einleitung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                             
                    'OM:FrQFT:Einleitung:Vortext:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                             
                  'OM:FrQFT:Einleitung:Ausgangssituation' => array( headline_text => 'Ausgangssituation der modernen Physik', headline_text_short => 'Ausgangssituation der modernen Physik'),
                  'OM:FrQFT:Einleitung:Fundierung' => array( headline_text => 'Fundierung der neuen Physik', headline_text_short => 'Fundierung der neuen Physik'),
                    'OM:FrQFT:Einleitung:Fundierung:Ani-VakuumElapson' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:FrQFT:Einleitung:Fundierung:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:FrQFT:Einleitung:Fundierung:Folge-LichtUhr-Mat' => array( headline_text => 'Folge: Die Lichtuhr ist realer Bestandteil der Materie', headline_text_short => 'Folge: Die Lichtuhr ist realer Bestandteil der Materie'),
                    'OM:FrQFT:Einleitung:Fundierung:Fig-GravitationspotMulti' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:Einleitung:Fundierung:Fig-Photon' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:Einleitung:Fundierung:Vakuum' => array( headline_text => 'Hypothese: Das Vakuum und wie es die Wechselwirkungen vermittelt', headline_text_short => 'Hypothese: Das Vakuum und wie es die Wechselwirkungen vermittelt'),
                ),
         ),
  'OM:FrQFT:Fazit' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Fazit_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Fazit_de.php',
           titel => 'Fazit - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'XXX',
           keywords => '',
           text_titel_h1 => 'Fazit',
           text_titel_short => 'Fazit',
           text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:FrQFT:Fazit:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                             
                  'OM:FrQFT:Fazit:Quantenphysik' => array( headline_text => 'Quantenphysik', headline_text_short => 'Quantenphysik'),
                             
                  'OM:FrQFT:Fazit:Flacher-Kosmos' => array( headline_text => 'Flacher Kosmos', headline_text_short => 'Flacher Kosmos'),
                             
                  'OM:FrQFT:Fazit:Gravitation' => array( headline_text => 'Gravitation', headline_text_short => 'Gravitation'),
                ),
         ),
  'OM:FrQFT:FirstPrinciples' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/First-Principles-Neue-Physik.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/First-Principles-Neue-Physik.php',
           titel => 'First-Principles der neuen Physik - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Die Formulierung allgemeiner Naturprinzipien',
           keywords => '',
           text_titel_h1 => 'First-Principles der neuen Physik',
           text_titel_short => 'First-Principles der neuen Physik',
           text_undertitel_h2 => 'Die Formulierung allgemeiner Naturprinzipien',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:FrQFT:FirstPrinciples:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:FrQFT:FirstPrinciples:Vortext:Existenzprinzip' => array( headline_text => 'Existenzprinzip', headline_text_short => 'Existenzprinzip'),
                    'OM:FrQFT:FirstPrinciples:Vortext:Eigenschaftsprinzip' => array( headline_text => 'Eigenschaftsprinzip', headline_text_short => 'Eigenschaftsprinzip'),
                    'OM:FrQFT:FirstPrinciples:Vortext:Bewegungsprinzip' => array( headline_text => 'Bewegungsprinzip', headline_text_short => 'Bewegungsprinzip'),
                    'OM:FrQFT:FirstPrinciples:Vortext:Vereinfachungsprinzip' => array( headline_text => 'Vereinfachungsprinzip', headline_text_short => 'Vereinfachungsprinzip'),
                    'OM:FrQFT:FirstPrinciples:Vortext:Fraktalitaetsprinzip' => array( headline_text => 'Fraktalitätsprinzip', headline_text_short => 'Fraktalitätsprinzip'),
                    'OM:FrQFT:FirstPrinciples:Vortext:Abzaehlprinzip' => array( headline_text => 'Abzählprinzip', headline_text_short => 'Abzählprinzip'),
                    'OM:FrQFT:FirstPrinciples:Vortext:Equ-EnergieSumWQEnergie' => array( headline_text => 'FP.1'),
                    'OM:FrQFT:FirstPrinciples:Vortext:Equ-EMasseSumWQEnergie' => array( headline_text => $nSOSp_g_formelName_FP_2),
                    'OM:FrQFT:FirstPrinciples:Vortext:Equ-E-ele-aequi-zu-Masse' => array( headline_text => $nSOSp_g_formelName_FP_3),
                    'OM:FrQFT:FirstPrinciples:Vortext:Wechselwirkungsprinzip' => array( headline_text => 'Wechselwirkungsprinzip', headline_text_short => 'Wechselwirkungsprinzip'),
                ),
         ),
  'OM:FrQFT:Gravitation' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Gravitation-Higgs-Feld-Dichte_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Gravitation-Higgs-Feld-Dichte_de.php',
           titel => 'Emergente Gravitation - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           //description => 'Der Eindruck der gekrümmten Raumzeit der Allgemeinen Relativitätstheorie entsteht in der Quanten-Fluss-Theorie durch eine variable Dichte- und Bewegungsverteilung der Elapsonen und Wirkungsquanten.',
           description => 'Raumzeitkrümmung als emergenter Dichtegradient der Vakuumenergie um eine Masse. Der Eindruck der gekrümmten Raumzeit der Allgemeinen Relativitätstheorie entsteht in der Quanten-Fluss-Theorie durch eine variable Dichte- und Bewegungsverteilung der Elapsonen und Wirkungsquanten des Vakuums.',
           keywords => '',
           //text_titel_h1 => 'Gravitation und Higgs-Feld-Dichte',
           text_titel_h1 => 'Emergente Gravitation',
           text_titel_short => 'Emergente Gravitation',
           text_undertitel_h2 => 'Raumzeitkrümmung als emergenter Dichtegradient der Vakuumenergie um eine Masse',
           text_titel_discr_h3 => 'Der Eindruck der gekrümmten Raumzeit der Allgemeinen Relativitätstheorie entsteht durch eine variable Dichte- und Bewegungsverteilung der Elapsonen und Wirkungsquanten des Vakuums',
           jump_ary => array(
                  'OM:FrQFT:Gravitation:Vakuumenergie-und-ihre-Gravitation' => array( headline_text => 'Vakuumenergie und ihre Gravitation', headline_text_short => 'Vakuumenergie und ihre Gravitation'),
                  'OM:FrQFT:Gravitation:Vakuum-als-Traeger-des-Gravitationsfelds' => array( headline_text => 'Vakuum als Träger des Gravitationsfelds', headline_text_short => 'Vakuum als Träger des Gravitationsfelds'),
                  'OM:FrQFT:Gravitation:Mechanismus-der-Gravitation' => array( headline_text => 'Mechanismus der Gravitation', headline_text_short => 'Mechanismus der Gravitation'),
                  'OM:FrQFT:Gravitation:Laengenkontraktion-im-Gravitationsfeld' => array( headline_text => 'Längenkontraktion im Gravitationsfeld', headline_text_short => 'Längenkontraktion im Gravitationsfeld'),
                    'OM:FrQFT:Gravitation:Laengenkontraktion-im-Gravitationsfeld:Equ-GraLKEinstein' => array( headline_text => 'Gra.LK.1'),
                  'OM:FrQFT:Gravitation:Zeitdilatation-im-Gravitationsfeld' => array( headline_text => 'Zeitdilatation im Gravitationsfeld', headline_text_short => 'Zeitdilatation im Gravitationsfeld'),
                  'OM:FrQFT:Gravitation:Variable-Vakuumenergie-und-Higgs-Feld-Dichte' => array( headline_text => 'Variable Vakuumenergie und Higgs-Feld-Dichte', headline_text_short => 'Variable Vakuumenergie und Higgs-Feld-Dichte'),
                  'OM:FrQFT:Gravitation:Elementarteilchen-Frequenz-im-Gravitationsfeld' => array( headline_text => 'Elementarteilchen-Frequenz im Gravitationsfeld', headline_text_short => 'Elementarteilchen-Frequenz im Gravitationsfeld'),
                  'OM:FrQFT:Gravitation:Traege-und-schwere-Masse-im-Gravitationsfeld' => array( headline_text => 'Träge und schwere Masse im Gravitationsfeld', headline_text_short => 'Träge und schwere Masse im Gravitationsfeld'),
                  'OM:FrQFT:Gravitation:Schwarze-Loecher' => array( headline_text => 'Schwarze Löcher', headline_text_short => 'Schwarze Löcher'),
                  'OM:FrQFT:Gravitation:Phaenomen-der-Dunkle-Materie-oder-MOND' => array( headline_text => 'Phänomen der Dunklen Materie oder MOND', headline_text_short => 'Phänomen der Dunklen Materie oder MOND'),
                ),
         ),
  'OM:FrQFT:HeisenbergUnschaerfe' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Heisenbergsche-Unschaerferelation-Plancksches-Wirkungsquantum_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Heisenbergsche-Unschaerferelation-Plancksches-Wirkungsquantum_de.php',
           titel => 'Heisenbergsche Unschärferelation und Plancksches Wirkungsquantum - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Die Formeln der Heisenbergsche Unschärferelation und das Plancksches Wirkungsquantum ergeben sich in der Quanten-Fluss-Theorie aus einem prinzipiellen Abzählproblem von fundamentalen Wirkungsquanten.',
           keywords => '',
           text_titel_h1 => 'Heisenbergsche Unschärferelation und Plancksches Wirkungsquantum',
           text_titel_short => 'Heisenbergsche Unschärferelation',
           text_undertitel_h2 => 'Ein prinzipielles Abzählproblem als neuer Zugang zur Vereinheitlichung der Physik',
           text_titel_discr_h3 => 'Eine neue körnige Struktur von dynamischen Energieeinheiten und Masseneinheiten ist Grundlage der Quantenmechanik und Quantengravitation',
           jump_ary => array(
                  'OM:FrQFT:HeisenbergUnschaerfe:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                             
                    'OM:FrQFT:HeisenbergUnschaerfe:Fig-Elapson' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:HeisenbergUnschaerfe:Fig-Photon' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:HeisenbergUnschaerfe:Vortext:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                  'OM:FrQFT:HeisenbergUnschaerfe:Energie-und-Zeit' => array( headline_text => 'Energie und Zeit', headline_text_short => 'Energie und Zeit'),
                    'OM:FrQFT:HeisenbergUnschaerfe:Fig-HeisenbUnschaerf' => array( headline_text => 'Abbildung '.($FrQFT_g_Fig_idx = 1), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:HeisenbergUnschaerfe:Equ-FrequAnzahlProZeit' => array( headline_text => 'Un.1'),
                    'OM:FrQFT:HeisenbergUnschaerfe:Equ-FrequenzWQZaehlen' => array( headline_text => 'Un.3'),
                    'OM:FrQFT:HeisenbergUnschaerfe:Equ-DeltaFrequenzAusEinerProDeltaZeit' => array( headline_text => 'Un.4'),
                    'OM:FrQFT:HeisenbergUnschaerfe:Equ-EnergieHsZaehlen' => array( headline_text => 'Un.5'),
                    'OM:FrQFT:HeisenbergUnschaerfe:Equ-EinsteinEnergieLichtQuant' => array( headline_text => $nSOSp_g_formelName_Un_10),
                    'OM:FrQFT:HeisenbergUnschaerfe:Equ-HeisenbUnschDeltaEnergieMalDeltaZeitGroesserUngefaehrH' => array( headline_text => 'Un.14'),
                  'OM:FrQFT:HeisenbergUnschaerfe:Energie-und-Zeit-Uebergang-Substruktur' => array( headline_text => 'Energie und Zeit – Übergang zur Substruktur'/* , headline_text_short => '' */),
                    'OM:FrQFT:HeisenbergUnschaerfe:Equ-EnergieWQRotationsteilung' => array( headline_text => 'Un.18'),
                  'OM:FrQFT:HeisenbergUnschaerfe:Impuls-und-Ort' => array( headline_text => 'Impuls und Ort', headline_text_short => 'Impuls und Ort'),
                  'OM:FrQFT:HeisenbergUnschaerfe:Schlussfolgerung-fuer-die-Quantenmechanik' => array( headline_text => 'Schlussfolgerung für die Quantenmechanik', headline_text_short => 'Schlussfolgerung für die Quantenmechanik'),
                ),
         ),
  'OM:FrQFT:Lepton' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Leptonen-Modell-Elektron-Positron-Myon-Tauon-Neutrino_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Leptonen-Modell-Elektron-Positron-Myon-Tauon-Neutrino_de.php',
           titel => 'Leptonen-Modell, Elektron/Positron, Myon, Tauon, Neutrino - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           // description => 'Das neue Leptonen-Modell beschreibt, wie die elektroschwache Ladung die Gravitation sowie die Massen von Elektron/Positron, Myon, Tauon und Neutrino entstehen.',
           description => '\\name[undertitle]{OM:FrQFT:Lepton}. – \\name[description]{OM:FrQFT:Lepton}.',
           keywords => '',
           text_titel_h1 => 'Leptonen-Modell \\\\ \\color{*TitleAdd}{<small>Elektron, Myon, Tauon und Neutrinos</small>}',
           text_titel_short => 'Leptonen-Modell',
           // text_undertitel_h2 => 'Aus den bekannten Eigenschaften der Leptonen lässt sich mit Hilfe der First-Principles die Struktur der Leptonen-Strings verstehen',
           text_undertitel_h2 => 'Ein neuartiges String-Modell trägt die Eigenschaften der Leptonen',
           text_titel_discr_h3 => 'Durch die Lösung des ›Problems der Zeit‹ lässt sich mit Hilfe der First-Principles die Struktur der Leptonen-Strings verstehen',
           jump_ary => array(
                  'OM:FrQFT:Lepton:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:FrQFT:Lepton:Vortext:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx)),
                  // 'OM:FrQFT:Lepton:Zeit-und-Alterung' => array( headline_text => 'Zeit und Alterung', headline_text_short => 'Zeit und Alterung'),
                  'OM:FrQFT:Lepton:Zeit-und-Alterung' => array( headline_text => 'Lösung des ›Problems der Zeit‹'/*, headline_text_short => ''*/),
                  'OM:FrQFT:Lepton:Naturphilosophie-der-Mechanik' => array( headline_text => 'Naturphilosophie der Mechanik'/*, headline_text_short => ''*/),
                  'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik' => array( headline_text => 'Berechnung der String-Mechanik'/*, headline_text_short => ''*/),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-LG-aus-Frequenz-Lambda' => array( headline_text => 'Lep.Mod.1'),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-EinsteinEnergieLichtQuant' => array( headline_text => $nSOSp_g_formelName_FP_2),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-E-ele-aequi-zu-Masse' => array( headline_text => $nSOSp_g_formelName_FP_3),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Frequenz-aus-Spin-Geschw-Radius' => array( headline_text => 'Lep.Mod.7'),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Masse-Radius' => array( headline_text => 'Lep.Mod.12'),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Lep' => array( headline_text => 'Lep.Mod.14'),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-Spin-Geschw-aus-LG' => array( headline_text => 'Lep.Mod.19'),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-LG-aus-Spin-Geschw' => array( headline_text => 'Lep.Mod.20'),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-c-licht-rot-aus-c-spin' => array( headline_text => 'Lep.Mod.28'),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-licht-rot-aus-r-spin' => array( headline_text => 'Lep.Mod.37'),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-spin-aus-Masse-LG' => array( headline_text => 'Lep.Mod.41'),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-wq-rot-aus-r-spin' => array( headline_text => 'Lep.Mod.64'),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:Equ-r-wq-rot-aus-hbar-m-ele-c' => array( headline_text => 'Lep.Mod.66'),
                    'OM:FrQFT:Lepton:Berechnung-der-String-Mechanik:StarkeWechselwirkung' => array( headline_text => 'Starke Wechselwirkung'/*, headline_text_short => ''*/),
                  'OM:FrQFT:Lepton:Elektrische-Ladung' => array( headline_text => 'Elektrische Ladung', headline_text_short => 'Elektrische Ladung'),
                    'OM:FrQFT:Lepton:Elektrisch-geladenes-Lepton' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                  'OM:FrQFT:Lepton:Schwache-Ladung' => array( headline_text => 'Schwache Ladung', headline_text_short => 'Schwache Ladung'),
                  'OM:FrQFT:Lepton:Masse-Impuls-Energie' => array( headline_text => 'Masse, Impuls und Energie', headline_text_short => 'Masse, Impuls und Energie'),
                  'OM:FrQFT:Lepton:Quantengravitation' => array( headline_text => 'Quantengravitation', headline_text_short => 'Quantengravitation'),
                  'OM:FrQFT:Lepton:Spins' => array( headline_text => 'Spins', headline_text_short => 'Spins'),
                  'OM:FrQFT:Lepton:Radius' => array( headline_text => 'Radius', headline_text_short => 'Radius'),
                  'OM:FrQFT:Lepton:Antiteilchen' => array( headline_text => 'Antiteilchen', headline_text_short => 'Antiteilchen'),
                  'OM:FrQFT:Lepton:Neutrinos' => array( headline_text => 'Neutrinos', headline_text_short => 'Neutrinos'),
                    'OM:FrQFT:Lepton:Elektrisch-neutrales-Lepton' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                  'OM:FrQFT:Lepton:Familien-und-Generationen' => array( headline_text => 'Familien und Generationen', headline_text_short => 'Familien und Generationen'),
                  'OM:FrQFT:Lepton:Quantenmechanik' => array( headline_text => 'Quantenmechanik', headline_text_short => 'Quantenmechanik'),
                  'OM:FrQFT:Lepton:Welle-Teilchen-Dualismus' => array( headline_text => 'Welle-Teilchen-Dualismus', headline_text_short => 'Welle-Teilchen-Dualismus'),
                  'OM:FrQFT:Lepton:Berechnungen' => array( headline_text => 'Berechnungen', headline_text_short => 'Berechnungen'),
                ),
         ),
   'OM:FrQFT:Literatur' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Literatur_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Literatur_de.php',
           titel => 'Literatur - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Literatur zur fraktalen Quanten-Fluss-Theorie.',
           keywords => '',
           text_titel_h1 => 'Literatur',
           text_titel_short => 'Literatur',
           text_undertitel_h2 => 'und Informationen',
           //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
           jump_ary => array(
                ),
         ),
  'OM:FrQFT:NeuePhysik' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Neue-Physik-Problem-der-Zeit_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Neue-Physik-Problem-der-Zeit_de.php',
           titel => 'Neue Physik - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Das ›Problem der Zeit‹ – Problembeschreibung, Lösungshypothese und Entwicklung eines allgemeinen Prinzips der Physik.',
           keywords => '',
           text_titel_h1 => 'Neue Physik',
           text_titel_short => 'Neue Physik',
           text_undertitel_h2 => 'Das ›Problem der Zeit‹ – Problembeschreibung, Lösungshypothese und Entwicklung eines allgemeinen Prinzips der Physik',
           //text_titel_discr_h3 => 'Das Higgs-Feld des Vakuums und die Elementarteilchen bestehen aus fraktalen Wirkungsquanten-Strings, die eine Struktur aus Zeit-Ebenen bilden.',
           jump_ary => array(
                  'OM:FrQFT:NeuePhysik:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                             
                  'OM:FrQFT:NeuePhysik:Ein-Prinzip-fuer-Alles' => array( headline_text => 'Ein Prinzip für Alles', headline_text_short => 'Ein Prinzip für Alles'),
                             
                  'OM:FrQFT:NeuePhysik:Philosophie-der-Lichtuhr' => array( headline_text => 'Philosophie der Lichtuhr', headline_text_short => 'Philosophie der Lichtuhr'),
                    'OM:FrQFT:NeuePhysik:Philosophie-der-Lichtuhr:PrinzLichtuhr' => array( headline_text => 'Prinzip der Lichtuhr', headline_text_short => 'Prinzip der Lichtuhr'),
                    'OM:FrQFT:NeuePhysik:Philosophie-der-Lichtuhr:TeilModRelatPrinzip' => array( headline_text => 'Teilchenmodell im Relativitätsprinzip', headline_text_short => 'Teilchenmodell im Relativitätsprinzip'),
                             
                  'OM:FrQFT:NeuePhysik:Problem-der-Zeit' => array( headline_text => 'Problem der Zeit', headline_text_short => 'Problem der Zeit'),
                    'OM:FrQFT:NeuePhysik:Problem-der-Zeit:VermWidersp' => array( headline_text => 'Erweiterte Lichtuhr mit vermeintlichem Widerspruch', headline_text_short => 'Erweiterte Lichtuhr mit vermeintlichem Widerspruch'),
                    'OM:FrQFT:NeuePhysik:Problem-der-Zeit:Equ-EinsteinEnergieLichtQuant-1' => array( headline_text => '\\name{OM:FrQFT:HeisenbergUnschaerfe:Equ-EinsteinEnergieLichtQuant}'),
                             
                  'OM:FrQFT:NeuePhysik:Loesungsansatz' => array( headline_text => 'Lösungsansatz', headline_text_short => 'Lösungsansatz'),
                    'OM:FrQFT:NeuePhysik:Loesungsansatz:SchwAusserLG' => array( headline_text => 'Schwingung außerhalb der Lichtbewegung', headline_text_short => 'Schwingung außerhalb der Lichtbewegung'),
                    'OM:FrQFT:NeuePhysik:Fig-Elapson' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Fig-PoundRebkaSnider' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Fig-Gekruemmter-Licht-Bewegungsraum' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Fig-Wellenlaenge' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Loesungsansatz:HelixfSpiralb' => array( headline_text => 'Helixförmige Spiralbahn der Feinstruktur der Photonen', headline_text_short => 'Helixförmige Spiralbahn der Feinstruktur der Photonen'),
                    'OM:FrQFT:NeuePhysik:Loesungsansatz:NeuLGDrilling' => array( headline_text => 'Lichtgeschwindigkeitsdrilling', headline_text_short => 'Lichtgeschwindigkeitsdrilling'),
                    'OM:FrQFT:NeuePhysik:Loesungsansatz:ErsterAnsatz' => array( headline_text => 'Ein erster Ansatz', headline_text_short => 'Ein erster Ansatz'),
                             
                  'OM:FrQFT:NeuePhysik:Beobachtungen-und-nat-Ueberlegungen' => array( headline_text => 'Beobachtungen und naturphilosophische Überlegungen', headline_text_short => 'Beobachtungen und Überlegungen'),
                    'OM:FrQFT:NeuePhysik:Beobachtungen-und-nat-Ueberlegungen:WWSymBruch' => array( headline_text => 'Wechselwirkungen entstehen aus Symmetriebrüchen und umgekehrt', headline_text_short => 'Wechselwirkungen entstehen aus Symmetriebrüchen'),
                    'OM:FrQFT:NeuePhysik:Beobachtungen-und-nat-Ueberlegungen:MatEleModErwLU' => array( headline_text => 'Materie-Elementarteilchenmodell der erweiterten Lichtuhr', headline_text_short => 'Materie-Elementarteilchenmodell der erweiterten Lichtuhr'),
                             
                  'OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip' => array( headline_text => 'Raum, Zeit und Existenzprinzip', headline_text_short => 'Raum, Zeit und Existenzprinzip'),
                    'OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip:StrukBew' => array( headline_text => 'Struktur und Bewegung machen Raum und Zeit', headline_text_short => 'Struktur und Bewegung machen Raum und Zeit'),
                    'OM:FrQFT:NeuePhysik:Fig-ExistOhneZerf' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Fig-ExistOhneStarr' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Fig-Wirkungsquant-ungebrochen-Existenzprinzip' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Fig-Elapson-Existenzprinzip' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip:DjetNeheh' => array( headline_text => 'Djet- und Neheh-Zeit', headline_text_short => 'Djet- und Neheh-Zeit'),
                    'OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip:Exist' => array( headline_text => 'Existenzprinzip der Elementarteilchen', headline_text_short => 'Existenzprinzip der Elementarteilchen'),
                    'OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip:PrinzLichtuhr' => array( headline_text => 'Prinzip der Lichtuhr in Materie-Elementarteilchen', headline_text_short => 'Prinzip der Lichtuhr in Materie-Elementarteilchen'),
                    'OM:FrQFT:NeuePhysik:Raum-Zeit-und-Existenzprinzip:Ausblick' => array( headline_text => 'Ausblick', headline_text_short => 'Ausblick'),
                             
                  'OM:FrQFT:NeuePhysik:Heisenbergsche-Unschaerferelation' => array( headline_text => 'Heisenbergsche Unschärferelation', headline_text_short => 'Heisenbergsche Unschärferelation'),
                    'OM:FrQFT:NeuePhysik:Fig-HeisenbUnschaerf' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Heisenbergsche-Unschaerferelation:WQ' => array( headline_text => 'Wirkungsquanten', headline_text_short => 'Wirkungsquanten'),
                    'OM:FrQFT:NeuePhysik:Heisenbergsche-Unschaerferelation:EE' => array( headline_text => 'Energie-, Impuls- und Masseneinheiten', headline_text_short => 'Energie-, Impuls- und Masseneinheiten'),
                             
                  'OM:FrQFT:NeuePhysik:Strings-aus-Wirkungsquanten' => array( headline_text => 'Strings aus Wirkungsquanten', headline_text_short => 'Strings aus Wirkungsquanten'),
                    'OM:FrQFT:NeuePhysik:Fig-Wq-String-Unmoeg-Konstella' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Ani-VakuumElapson' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:FrQFT:NeuePhysik:Strings-aus-Wirkungsquanten:WQ-WW' => array( headline_text => 'Zusammenhalt der Wirkungsquanten', headline_text_short => 'Zusammenhalt der Wirkungsquanten'),
                    'OM:FrQFT:NeuePhysik:Strings-aus-Wirkungsquanten:WQS-VE' => array( headline_text => 'Wirkungsquanten-Strings und Vakuum-Elapsonen', headline_text_short => 'Wirkungsquanten-Strings und Vakuum-Elapsonen'),
                             
                  'OM:FrQFT:NeuePhysik:Fraktales-Universum' => array( headline_text => 'Fraktales Universum', headline_text_short => 'Fraktales Universum'),
                    'OM:FrQFT:NeuePhysik:Fraktales-Universum:KosmoPrinzKosmiZeit' => array( headline_text => 'Kosmologisches Prinzip und kosmische Zeit', headline_text_short => 'Kosmologisches Prinzip und kosmische Zeit'),
                    'OM:FrQFT:NeuePhysik:Fraktales-Universum:FrakExistUFrakStr' => array( headline_text => 'Fraktales Existenzprinzip und fraktale Strings', headline_text_short => 'Fraktales Existenzprinzip und fraktale Strings'),
                    'OM:FrQFT:NeuePhysik:Fig-Matrioschkas' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Fraktales-Universum:VerSchwLoeKos' => array( headline_text => 'Verschachtelte Schwarze Löcher und Kosmoi', headline_text_short => 'Verschachtelte Schwarze Löcher und Kosmoi'),
                    'OM:FrQFT:NeuePhysik:Fig-RelatDichte' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Fraktales-Universum:BewegRaum' => array( headline_text => 'Bewegungsraum', headline_text_short => 'Bewegungsraum'),
                             
                  'OM:FrQFT:NeuePhysik:Symmetriebrechung' => array( headline_text => 'Symmetriebruch und Farbpolarisation', headline_text_short => 'Symmetriebruch und Farbpolarisation'),
                    'OM:FrQFT:NeuePhysik:Symmetriebrechung:SymBruchBalance' => array( headline_text => 'Symmetriebruch und dessen Balance in neuer Symmetrie im Allgemeinen', headline_text_short => 'Symmetriebruch und Balance im Allgemeinen'),
                    'OM:FrQFT:NeuePhysik:Fig-Wirkungsquant-ungebrochen' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Fig-Elapson-Farbpolarisation' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Symmetriebrechung:SymBruExistPrin' => array( headline_text => 'Symmetriebruch des Existenzprinzips', headline_text_short => 'Symmetriebruch des Existenzprinzips'),
                    'OM:FrQFT:NeuePhysik:Symmetriebrechung:FarbPol' => array( headline_text => 'Farbpolarisation des Existenzprinzips', headline_text_short => 'Farbpolarisation des Existenzprinzips'),
                             
                  'OM:FrQFT:NeuePhysik:Elektromagnetische-Polarisation' => array( headline_text => 'Elektromagnetische Polarisation', headline_text_short => 'Elektromagnetische Polarisation'),
                    'OM:FrQFT:NeuePhysik:Fig-Photon' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Elektromagnetische-Polarisation:Photonen' => array( headline_text => 'Photonen', headline_text_short => 'Photonen'),
                    'OM:FrQFT:NeuePhysik:Elektromagnetische-Polarisation:SymEMWW' => array( headline_text => 'Symmetriebruch zur elektromagnetischen Wechselwirkung', headline_text_short => 'Symmetriebruch zur elektromagnetischen Wechselwirkung'),
                             
                  'OM:FrQFT:NeuePhysik:Elementarteilchen-der-Materie' => array( headline_text => 'Elementarteilchen der Materie', headline_text_short => 'Elementarteilchen der Materie'),
                    'OM:FrQFT:NeuePhysik:Elementarteilchen-der-Materie:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:FrQFT:NeuePhysik:Elektrisch-geladenes-Lepton' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Elektrisch-neutrales-Lepton' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:NeuePhysik:Elementarteilchen-der-Materie:EDK' => array( headline_text => 'Urknall, Erhaltungssätze und Symmetriebruch', headline_text_short => 'Urknall, Erhaltungssätze und Symmetriebruch'),
                    'OM:FrQFT:NeuePhysik:Elementarteilchen-der-Materie:SymESWW' => array( headline_text => 'Symmetriebrechung der schwachen Wechselwirkung', headline_text_short => 'Symmetriebrechung der schwachen Wechselwirkung'),
                    'OM:FrQFT:NeuePhysik:Elementarteilchen-der-Materie:SymSWW' => array( headline_text => 'Symmetriebrechung der starken Wechselwirkung', headline_text_short => 'Symmetriebrechung der starken Wechselwirkung'),
                    'OM:FrQFT:NeuePhysik:Elementarteilchen-der-Materie:NQG' => array( headline_text => 'Neue Quantengravitation', headline_text_short => 'Neue Quantengravitation'),
                    'OM:FrQFT:NeuePhysik:Elementarteilchen-der-Materie:UTGA' => array( headline_text => 'Überschuss von Teilchen gegenüber Antiteilchen', headline_text_short => 'Überschuss von Teilchen gegenüber Antiteilchen'),
                             
                  'OM:FrQFT:NeuePhysik:Relativitaet' => array( headline_text => 'Relativität, Machsches Prinzip und Kosmologisches Prinzip', headline_text_short => 'Relativität, Machsches Prinzip und Kosmologisches Prinzip'),
                    'OM:FrQFT:NeuePhysik:Relativitaet:RP' => array( headline_text => 'Relativitätsprinzip', headline_text_short => 'Relativitätsprinzip'),
                    'OM:FrQFT:NeuePhysik:Relativitaet:SRT' => array( headline_text => 'Spezielle Relativitätstheorie', headline_text_short => 'Spezielle Relativitätstheorie'),
                    'OM:FrQFT:NeuePhysik:Relativitaet:ART-MP' => array( headline_text => 'Allgemeine Relativitätstheorie, Machsches Prinzip und Kosmologisches Prinzip', headline_text_short => 'Allgemeine Relativitätstheorie, Machsches Prinzip und Kosmologisches Prinzip'),
                             
                  'OM:FrQFT:NeuePhysik:Quantengravitation' => array( headline_text => 'Quantengravitation und Higgs-Mechanismus', headline_text_short => 'Quantengravitation und Higgs-Mechanismus'),
                    'OM:FrQFT:NeuePhysik:Quantengravitation:QG' => array( headline_text => 'Quantengravitation', headline_text_short => 'Quantengravitation'),
                    'OM:FrQFT:NeuePhysik:Quantengravitation:HM-AEP' => array( headline_text => 'Higgs-Mechanismus und Äquivalenzprinzip', headline_text_short => 'Higgs-Mechanismus und Äquivalenzprinzip'),
                    'OM:FrQFT:NeuePhysik:Quantengravitation:PDM' => array( headline_text => 'Phänomen der Dunklen Materie', headline_text_short => 'Phänomen der Dunklen Materie'),
                             
                  'OM:FrQFT:NeuePhysik:Quantenfeldtheorie' => array( headline_text => 'Relativistische Quantenfeldtheorien und Co', headline_text_short => 'Relativistische Quantenfeldtheorien und Co'),
                    'OM:FrQFT:NeuePhysik:Quantenfeldtheorie:QM' => array( headline_text => 'Quantenmechanik und Quantenfeldtheorien in der Quanten-Fluss-Theorie', headline_text_short => 'Quantenmechanik und Quantenfeldtheorien in der Quanten-Fluss-Theorie'),
                    'OM:FrQFT:NeuePhysik:Quantenfeldtheorie:ESW' => array( headline_text => 'Elektroschwache Wechselwirkung in der Quanten-Fluss-Theorie', headline_text_short => 'Elektroschwache Wechselwirkung in der Quanten-Fluss-Theorie'),
                    'OM:FrQFT:NeuePhysik:Quantenfeldtheorie:QCD' => array( headline_text => 'Quantenchromodynamik in der Quanten-Fluss-Theorie', headline_text_short => 'Quantenchromodynamik in der Quanten-Fluss-Theorie'),
                    'OM:FrQFT:NeuePhysik:Quantenfeldtheorie:TZ' => array( headline_text => 'Teilchenzoo', headline_text_short => 'Teilchenzoo'),
                    'OM:FrQFT:NeuePhysik:Quantenfeldtheorie:V-HM' => array( headline_text => 'Vakuum und Higgs-Mechanismus', headline_text_short => 'Vakuum und Higgs-Mechanismus'),
                    'OM:FrQFT:NeuePhysik:Quantenfeldtheorie:ST' => array( headline_text => 'Stringtheorie', headline_text_short => 'Stringtheorie'),
                ),
         ),
  'OM:FrQFT:NotwenVereinheit' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Notwendige-Vereinheitlichung-Physik-Dilemma_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Notwendige-Vereinheitlichung-Physik-Dilemma_de.php',
           titel => 'Notwendige Vereinheitlichung der Physik - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Ungelöste Probleme treiben die Suche nach einer Vereinheitlichung in einer neuen Physik voran.',
           keywords => '',
           text_titel_h1 => 'Notwendige Vereinheitlichung der Physik',
           text_titel_short => 'Notwendige Vereinheitlichung',
           //text_undertitel_h2 => 'Das Dilemma der heutigen Physik erfordert ein Umdenken',
           text_undertitel_h2 => 'Ungelöste Probleme treiben die Suche nach einer Vereinheitlichung in einer neuen Physik voran',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:FrQFT:NotwenVereinheit:Problem-der-Zeit' => array( headline_text => 'Problem der Zeit', headline_text_short => 'Problem der Zeit'),
                  'OM:FrQFT:NotwenVereinheit:Problem-der-Quantengravitation' => array( headline_text => 'Problem der Quantengravitation', headline_text_short => 'Problem der Quantengravitation'),
                  'OM:FrQFT:NotwenVereinheit:Problem-der-Feuerwand' => array( headline_text => 'Problem der Feuerwand', headline_text_short => 'Problem der Feuerwand'),
                  'OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Materie' => array( headline_text => 'Problem der Dunklen Materie', headline_text_short => 'Problem der Dunklen Materie'),
                  'OM:FrQFT:NotwenVereinheit:Problem-der-kosmologischen-Konstanten' => array( headline_text => 'Problem der kosmologischen Konstanten', headline_text_short => 'Problem der kosmologischen Konstanten'),
                  'OM:FrQFT:NotwenVereinheit:Problem-der-Dunklen-Energie' => array( headline_text => 'Problem der Dunklen Energie', headline_text_short => 'Problem der Dunklen Energie'),
                  'OM:FrQFT:NotwenVereinheit:Problem-der-Singularitaeten' => array( headline_text => 'Problem der Singularitäten', headline_text_short => 'Problem der Singularitäten'),
                  'OM:FrQFT:NotwenVereinheit:Probleme-der-Quantenchromodynamik' => array( headline_text => 'Probleme der Quantenchromodynamik', headline_text_short => 'Probleme der Quantenchromodynamik'),
                  'OM:FrQFT:NotwenVereinheit:Problem-der-Naturkonstanten' => array( headline_text => 'Problem der Naturkonstanten', headline_text_short => 'Problem der Naturkonstanten'),
                ),
         ),
  'OM:FrQFT:Meetup-Physik-Neu-Sehen-Ergruenden' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Meetup-Physik-Neu-Sehen-Ergruenden.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Meetup-Physik-Neu-Sehen-Ergruenden.php',
           titel => 'Meetup: Physik Neu Sehen und Ergründen - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Neue Perspektiven auf die Grundlagen der Physik.',
           keywords => '',
           text_titel_h1 => 'Meetup: Physik Neu Sehen und Ergründen',
           text_titel_short => 'Meetup: Physik Neu Sehen und Ergründen',
           text_undertitel_h2 => 'Neue Perspektiven auf die Grundlagen der Physik',
           //text_titel_discr_h3 => 'Unser Achtsamkeitsprozess, als zentraler Regelprozess des Lebens, ist die Grundlage unseres Gedeihens und unserer Heilung',
           jump_ary => array(
                  'OM:FrQFT:Meetup-Physik-Neu-Sehen-Ergruenden:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:FrQFT:Quantenchromodynamik' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Quantenchromodynamik-Hadronen-Quarks-Gluonen_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Quantenchromodynamik-Hadronen-Quarks-Gluonen_de.php',
           titel => 'Quantenchromodynamik, starke Wechselwirkung, Hadronen, Quarks, Gluonen - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Die Quantenchromodynamik in der Quanten-Fluss-Theorie basiert auf einer Symmetriebrechung der Farbpolarisation.',
           keywords => '',
           text_titel_h1 => 'Quantenchromodynamik, starke Wechselwirkung (Hadronen-Modell) \\\\ \\color{*TitleAdd}{<small>in der Quanten-Fluss-Theorie</small>}',
           text_titel_short => 'Quantenchromodynamik (Hadronen-Modell)',
           text_undertitel_h2 => 'Ein Symmetriebruch der Farbpolarisation des Leptonen-Wirkungsquanten-Strings bringt Quarks und Gluonen hervor',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:FrQFT:Quantenchromodynamik:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                  'OM:FrQFT:Quantenchromodynamik:FarbPolUndLadung' => array( headline_text => 'Farbpolarisation und Farbladung', headline_text_short => 'Farbpolarisation und Farbladung'),
                    'OM:FrQFT:Quantenchromodynamik:FarbPolUndLadung:Ani-VakuumElapson' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:FrQFT:Quantenchromodynamik:FarbPolUndLadung:Fig-Wirkungsquant-ungebrochen' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:Quantenchromodynamik:FarbPolUndLadung:Fig-Elapson-Farbpolarisation' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:Quantenchromodynamik:FarbPolUndLadung:Fig-UnpolPhotFarbpol6pol' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                  'OM:FrQFT:Quantenchromodynamik:Quarks' => array( headline_text => 'Quarks', headline_text_short => 'Quarks'),
                    'OM:FrQFT:Quantenchromodynamik:Quarks:Fig-QuarkProton' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                  'OM:FrQFT:Quantenchromodynamik:Gluonen' => array( headline_text => 'Gluonen', headline_text_short => 'Gluonen'),
                             
                  'OM:FrQFT:Quantenchromodynamik:Confinement' => array( headline_text => 'Confinement', headline_text_short => 'Confinement'),
                ),
         ),
  'OM:FrQFT:Quantengravitation' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Quantengravitation-der-Elementarteilchen_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Quantengravitation-der-Elementarteilchen_de.php',
           titel => 'Quantengravitation der Elementarteilchen - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           //description => 'Das Teilchenmodell der Quanten-Fluss-Theorie beschreibt die Ursache der Quantengravitation und vereinheitlicht so die Quantenmechanik mit der Relativitätstheorie.',
           description => 'Impulskegel ihrer Wirkungsquanten-Strings verlangsamen und beugen die Bewegung lichtähnlicher Strukturen in ihrem Umfeld. Die Gravitation der Allgemeinen Relativitätstheorie ergibt sich als emergentes Phänomen der Beugung lichtähnlicher rotierender Strukturen in den gravitativ angezogenen Elementarteilchen-Strings.',
           keywords => '',
           text_titel_h1 => 'Quantengravitation der Elementarteilchen',
           text_titel_short => 'Quantengravitation der Elementarteilchen',
           //text_undertitel_h2 => 'Die Allgemeine Relativitätstheorie in der Quanten-Fluss-Theorie – ein Lichtverlangsamungs- und Lichtbeugungseffekt',
           // text_undertitel_h2 => 'Impulskegel ihrer Wirkungsquanten-Strings verlangsamen und beugen die Bewegung lichtähnlicher Strukturen in ihrem Umfeld',
           text_undertitel_h2 => 'Die Gravitation der Allgemeinen Relativitätstheorie offenbart sich als emergentes Phänomen der Beugung lichtähnlicher Strukturen in einem Modell von Elementarteilchen-Strings neuer Art',
           // text_titel_discr_h3 => 'Die Gravitation der Allgemeinen Relativitätstheorie ergibt sich als emergentes Phänomen der Beugung lichtähnlicher rotierender Strukturen in den gravitativ angezogenen Elementarteilchen-Strings',
           text_titel_discr_h3 => 'Rotierende Impulskegel der neuen Feinstruktur der gravitativ wirkenden Elementarteilchen-Strings einer Zentralmasse verlangsamen und beugen die Bewegung lichtähnlicher Strukturen in ihrem Umfeld und führen so zur Quantengravitation',
           jump_ary => array(
                  'OM:FrQFT:Quantengravitation:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    // #!: Wiederholt in "Mechanismus der Gravitation"! Dort mit fester Nummer !!!!
                    'OM:FrQFT:Quantengravitation:Vortext:Fig-Gravitation-Masse' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:Quantengravitation:Vortext:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:FrQFT:Quantengravitation:Vortext:Ani-VakuumElapson' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:FrQFT:Quantengravitation:Vortext:Graviradiation' => array( headline_text => 'Graviradiation – eine neue Wechselwirkung', headline_text_short => 'Graviradiation'),
                             
                  'OM:FrQFT:Quantengravitation:VereinfModellQGravitation' => array( headline_text => 'Vereinfachtes Modell der Quantengravitation', headline_text_short => 'Vereinfachtes Modell der Quantengravitation'),
                    'OM:FrQFT:Quantengravitation:Fig-GraviLeptonWirkung' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:Quantengravitation:VereinfModellQGravitation:VereinfString' => array( headline_text => 'Vereinfachter Wirkungsquanten-String', headline_text_short => 'Vereinfachter Wirkungsquanten-String'),
                    'OM:FrQFT:Quantengravitation:VereinfModellQGravitation:WarumImpulskegel' => array( headline_text => 'Warum Impulskegel?', headline_text_short => 'Warum Impulskegel?'),
                    'OM:FrQFT:Quantengravitation:VereinfModellQGravitation:WQIUmgekehrtProport' => array( headline_text => 'Wirkungsquanten-Impulse verringern ihre Intensität im Raum mit \\term{1/r}', headline_text_short => 'Wirkungsquanten-Impulse verringern ihre Intensität im Raum mit \\term{1/r}'),
                             
                  'OM:FrQFT:Quantengravitation:Lichtverlangsamung' => array( headline_text => 'Lichtverlangsamung', headline_text_short => 'Lichtverlangsamung'),
                    'OM:FrQFT:Quantengravitation:Fig-GraviLeptonLichtbahn' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff-tan' => array( headline_text => 'QGra.LV.3'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff-rad' => array( headline_text => 'QGra.LV.18'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-c-eff' => array( headline_text => 'QGra.LV.19'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-eff' => array( headline_text => 'QGra.LV.21'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-DetektWellenlaengeAlt' => array( headline_text => 'ZAF.RED.1'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-eff-aus-f-ele' => array( headline_text => 'QGra.LV.37'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-EinsteinEnergieLichtQuant-1' => array( headline_text => $nSOSp_g_formelName_Un_10),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-E-aus-omega' => array( headline_text => 'QGra.LV.42'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-E-ele-aequi-zu-Masse-1' => array( headline_text => $nSOSp_g_formelName_FP_3),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-EMasseSumWQEnergie-1' => array( headline_text => $nSOSp_g_formelName_FP_2),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-T-kegel' => array( headline_text => 'QGra.LV.53'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:NaeherungGrosseAbstaend' => array( headline_text => 'Näherung bei großen Abständen', headline_text_short => 'Näherung bei großen Abständen'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-ele-eff' => array( headline_text => 'QGra.LV.64'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl' => array( headline_text => 'QGra.LV.67'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-ele-abl-aus-m-ele-r' => array( headline_text => 'QGra.LV.68'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-h-M-eff' => array( headline_text => 'QGra.LV.96'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-g-s' => array( headline_text => 'QGra.LV.100'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-v-abl' => array( headline_text => 'QGra.LV.103'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraLGEinstein' => array( headline_text => 'QGra.LV.106'),
                    'OM:FrQFT:Quantengravitation:Lichtverlangsamung:Equ-GraviKonstStruktur' => array( headline_text => 'QGra.LV.107'),
                             
                  'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante' => array( headline_text => 'Struktur der Gravitationskonstanten', headline_text_short => 'Struktur der Gravitationskonstanten'),
                    'OM:FrQFT:Quantengravitation:Struktur-Gravitationskonstante:Equ-GraviKonstAnhaeng' => array( headline_text => 'QGra.SG.2'),
                             
                  'OM:FrQFT:Quantengravitation:Laengenkontraktion' => array( headline_text => 'Längenkontraktion', headline_text_short => 'Längenkontraktion'),
                             
                  'OM:FrQFT:Quantengravitation:Lichtbeugung' => array( headline_text => 'Lichtbeugung', headline_text_short => 'Lichtbeugung'),
                    'OM:FrQFT:Quantengravitation:Lichtbeugung:Fig-GravitationPhotonBeugung' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                  'OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation' => array( headline_text => 'Mechanismus der Gravitation', headline_text_short => 'Mechanismus der Gravitation'),
                    // #!: Duplikat vom Vortext!
                    'OM:FrQFT:Quantengravitation:Mechanismus-der-Gravitation:Fig-GravitationMasse' => array( headline_text => 'Abbildung 1 (Duplikat)', headline_text_short => 'Abbildung 1'),
                             
                  'OM:FrQFT:Quantengravitation:Keine-Singularitaet' => array( headline_text => 'Keine problematische Singularität', headline_text_short => 'Keine Singularität'),
                             
                  'OM:FrQFT:Quantengravitation:PhaenoDunkMat' => array( headline_text => 'Phänomen der Dunklen Materie', headline_text_short => 'Phänomen der Dunklen Materie'),
                    'OM:FrQFT:Quantengravitation:PhaenoDunkMat:Fig-KosmosEuklid' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:Quantengravitation:PhaenoDunkMat:Fig-GravitationspotMulti' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                ),
         ),
  'OM:FrQFT:Universum-SchwarzeLoecher-Kosmos-Urknall' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Universum-Schwarze-Loecher-Kosmos-Urknall_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Universum-Schwarze-Loecher-Kosmos-Urknall_de.php',
           titel => 'Universum, Schwarze Löcher, Kosmos und Urknall - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Die fraktale Struktur des Universums, in der der Urknall eines Kosmos die Innensicht der Entstehung eines Schwarzen Lochs ist.',
           keywords => '',
           text_titel_h1 => 'Universum, Schwarze Löcher, Kosmos und Urknall',
           text_titel_short => 'Universum, Schwarze Löcher, Kosmos und Urknall',
           text_undertitel_h2 => 'Die fraktale Struktur des Universums',
           text_titel_discr_h3 => 'Der Urknall eines Kosmos ist die Innensicht der Entstehung eines Schwarzen Lochs',
           jump_ary => array(
                  'OM:FrQFT:Universum-SchwarzeLoecher-Kosmos-Urknall:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:FrQFT:Vakuum' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Vakuum-Higgs-Mechanismus-und-Gravitation_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Vakuum-Higgs-Mechanismus-und-Gravitation_de.php',
           titel => 'Vakuum, Higgs-Mechanismus und Gravitation - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Die Grundstruktur des Vakuums entsteht aus der inneren Gravitation der Vakuumenergie.',
           keywords => '',
           text_titel_h1 => 'Vakuum, Higgs-Feld und Wechselwirkungen',
           text_titel_short => 'Vakuum, Higgs-Feld und Wechselwirkungen',
           text_undertitel_h2 => 'Vakuum verstehen heißt Gravitation verstehen und die Grundlage für die Wechselwirkungen des Standarmodells der Teilchenphysik erkennen',
           text_titel_discr_h3 => 'Die Grundstruktur des Vakuums entsteht aus der inneren Gravitation der Vakuumenergie und liefert die Grundlage für alle Wechselwirkungen.',
           jump_ary => array(
                  'OM:FrQFT:Vakuum:Higgs-Feld-und-Higgs-Mechanismus' => array( headline_text => 'Higgs-Feld und Higgs-Mechanismus', headline_text_short => 'Higgs-Feld und Higgs-Mechanismus'),
                  'OM:FrQFT:Vakuum:Grundstruktur-des-Vakuums' => array( headline_text => 'Grundstruktur des Vakuums', headline_text_short => 'Grundstruktur des Vakuums'),
                  'OM:FrQFT:Vakuum:Erhaltungssaetze' => array( headline_text => 'Erhaltungssätze', headline_text_short => 'Erhaltungssätze'),
                  'OM:FrQFT:Vakuum:Gravitationsfelder' => array( headline_text => 'Gravitationsfelder', headline_text_short => 'Gravitationsfelder'),
                  'OM:FrQFT:Vakuum:Elektroschwache-Felder' => array( headline_text => 'Elektroschwache Felder', headline_text_short => 'Elektroschwache Felder'),
                  'OM:FrQFT:Vakuum:Starke-Felder' => array( headline_text => 'Starke Felder', headline_text_short => 'Starke Felder'),
                  'OM:FrQFT:Vakuum:Quantenfluktuationen' => array( headline_text => 'Quantenfluktuationen', headline_text_short => 'Quantenfluktuationen'),
                  'OM:FrQFT:Vakuum:Fraktales-Vakuum' => array( headline_text => 'Fraktales Vakuum', headline_text_short => 'Fraktales Vakuum'),
                  'OM:FrQFT:Vakuum:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:FrQFT:Vergleich' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Vergleich-mit-anderen-Theorien_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Vergleich-mit-anderen-Theorien_de.php',
           titel => 'Vergleich mit anderen Theorien - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Was verbindet die Quanten-Fluss-Theorie mit und was unterscheidet sie von anderen Theorien?',
           keywords => '',
           text_titel_h1 => 'Vergleich mit anderen Theorien',
           text_titel_short => 'Vergleich mit anderen Theorien',
           text_undertitel_h2 => 'Was verbindet die Quanten-Fluss-Theorie mit und was unterscheidet sie von anderen Theorien?',
           text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:FrQFT:Vergleich:Spezielle-Relativitaetstheorie' => array( headline_text => 'Spezielle Relativitätstheorie', headline_text_short => 'Spezielle Relativitätstheorie'),
                  'OM:FrQFT:Vergleich:Stringtheorien' => array( headline_text => 'Stringtheorien', headline_text_short => 'Stringtheorien'),
                  'OM:FrQFT:Vergleich:Schleifen-Quantengravitation' => array( headline_text => 'Schleifen-Quantengravitation', headline_text_short => 'Schleifen-Quantengravitation'),
                  'OM:FrQFT:Vergleich:Heim-Theorie' => array( headline_text => 'Heim-Theorie', headline_text_short => 'Heim-Theorie'),
                  'OM:FrQFT:Vergleich:The-Reciprocal-System' => array( headline_text => 'The Reciprocal System', headline_text_short => 'The Reciprocal System'),
                  'OM:FrQFT:Vergleich:Wellenmodell-eines-Teilchens' => array( headline_text => 'Wellenmodell eines Teilchens', headline_text_short => 'Wellenmodell eines Teilchens'),
                  'OM:FrQFT:Vergleich:Verschiedene-Theorien-oder-Ideen' => array( headline_text => 'Verschiedene Theorien', headline_text_short => 'Verschiedene Theorien'),
                ),
         ),
  'OM:FrQFT:Vorwort' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Vorwort_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Vorwort_de.php',
           titel => 'Vorwort - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Begreifen, welche Philosophie hinter unserer physischen Existenz steckt.',
           keywords => '',
           text_titel_h1 => 'Vorwort',
           text_titel_short => 'Vorwort',
           text_undertitel_h2 => 'Begreifen, welche Philosophie hinter unserer physischen Existenz steckt',
           //text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                ),
         ),
  'OM:FrQFT:WasIstPhysik' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Was-ist-Physik_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Was-ist-Physik_de.php',
           titel => 'Was ist Physik? (Ⅰ) - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Was wir tun, wenn wir Naturwissenschaft betreiben – Wissenschaftsphilosophische, erkenntnistheoretische und naturphilosophische Überlegungen und Hypothesen zur Grundstruktur der realen Dinge führen zu ›Neuer Physik‹.',
           keywords => '',
           text_titel_h1 => 'Was ist Physik? (Ⅰ)',
           text_titel_short => 'Was ist Physik? (Ⅰ)',
           text_undertitel_h2 => 'Was wir tun, wenn wir Naturwissenschaft betreiben',
           text_titel_discr_h3 => 'Wissenschaftsphilosophische, erkenntnistheoretische und naturphilosophische Überlegungen und Hypothesen zur Grundstruktur der realen Dinge führen zu ›Neuer Physik‹',
           jump_ary => array(
                  'OM:FrQFT:WasIstPhysik:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                             
                    'OM:FrQFT:WasIstPhysik:Vortext:WarumDynamStrukt' => array( headline_text => 'Warum müssen es dynamische Strukturen sein?', headline_text_short => 'Warum müssen es dynamische Strukturen sein?'),
                    'OM:FrQFT:WasIstPhysik:Vortext:Bestandteile-Immer-Aehnlicher' => array( headline_text => 'Warum werden sich die Bestandteile immer ähnlicher, je weiter man die Dinge zerlegt?', headline_text_short => 'Warum werden sich die Bestandteile immer ähnlicher, je weiter man die Dinge zerlegt?'),
                    'OM:FrQFT:WasIstPhysik:Vortext:Fig-ExistOhneZerf' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:WasIstPhysik:Vortext:Fig-ExistOhneStarr' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:WasIstPhysik:Vortext:Fig-Elapson-Existenzprinzip' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:WasIstPhysik:Vortext:Djet-Neheh-Dualismus' => array( headline_text => 'Der Djet-Neheh-Dualismus und das Existenzprinzip \\\\ \\color{*TitleAdd}{– der Welle-Teilchen-Dualismus}', headline_text_short => 'Djet-Neheh-Dualismus und Existenzprinzip'),
                    'OM:FrQFT:WasIstPhysik:Vortext:Symmetriebrueche-Pole-und-Wechselwirkungen' => array( headline_text => 'Symmetriebrüche, Pole und Wechselwirkungen', headline_text_short => 'Symmetriebrüche, Pole und Wechselwirkungen'),
                    'OM:FrQFT:WasIstPhysik:Vortext:Fraktales-Existenzprinzip' => array( headline_text => 'Das Existenzprinzip ist ein fraktales Prinzip', headline_text_short => 'Fraktales Existenzprinzip'),
                    'OM:FrQFT:WasIstPhysik:Vortext:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:FrQFT:WasIstPhysik:Vortext:Ani-VakuumElapson' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                ),
         ),
  'OM:FrQFT:WieMessenWirInDerPhysik' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Wie-messen-wir-in-der-Physik.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Wie-messen-wir-in-der-Physik.php',
           titel => 'Wie messen wir in der Physik? - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Was ist Physik? (Ⅱ) – Wie funktioniert Beobachtung in Quantensystemen? — Die Verzauberung unseres Verständnisses der Quantensysteme durch deren Entzauberung. — Die Zusammenhänge zwischen Erhaltung, Verschränkung, Quantisierung, Unschärferelation, Symmetriebruch und Wechselwirkung sowie Quantengravitation anhand eines vereinfachten Modells.',
           keywords => '',
           text_titel_h1 => 'Wie messen wir in der Physik?',
           text_titel_short => 'Wie messen wir in der Physik?',
           text_undertitel_h2 => 'Was ist Physik? (Ⅱ)',
           text_titel_discr_h3 => 'Wie funktioniert Beobachtung in Quantensystemen? — Die Verzauberung unseres Verständnisses der Quantensysteme durch deren Entzauberung \\\\ \\small{Die Zusammenhänge zwischen Erhaltung, Verschränkung, Quantisierung, Unschärferelation, Symmetriebruch und Wechselwirkung sowie Quantengravitation anhand eines vereinfachten Modells}',
           jump_ary => array(
                  'OM:FrQFT:WieMessenWirInDerPhysik:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                             
                    'OM:FrQFT:WieMessenWirInDerPhysik:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:FrQFT:ZeitAlterungFrequenz' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Raum-Zeit-Alterung-Frequenz-Energie-Problem-der-Zeit-Pound-Rebka-Snider-Experiment_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Raum-Zeit-Alterung-Frequenz-Energie-Problem-der-Zeit-Pound-Rebka-Snider-Experiment_de.php',
           titel => 'Raum, Zeit, Alterung, Frequenz und Energie - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Die Auflösung des scheinbaren Widerspruchs zwischen der absoluten Zeit der Quantentheorie und der relativen Zeit der Allgemeinen Relativitätstheorie; zwischen der Alterung und der inneren Frequenz der Elementarteilchen im Gravitationsfeld – das Pound-Rebka-Snider-Experiment.',
           keywords => '',
           text_titel_h1 => 'Raum, Zeit, Alterung, Frequenz und Energie',
           text_titel_short => 'Raum, Zeit, Alterung, Frequenz und Energie',
           text_undertitel_h2 => 'Das strukturelle und prozessuale Verständnis von Raum und Zeit im Pound-Rebka-Snider-Experiment – die formale Lösung des ›Problems der Zeit‹',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:FrQFT:ZeitAlterungFrequenz:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),

                             
                    'OM:FrQFT:ZeitAlterungFrequenz:Fig-Elapson' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                  'OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung' => array( headline_text => 'Einführung', headline_text_short => 'Einführung'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung:ErhaltBruech' => array( headline_text => 'Erhaltungssätze des Bewegungsraums des Kosmos und deren Brüche', headline_text_short => 'Erhaltungssätze des Bewegungsraums und deren Brüche'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung:EuklFlachKos' => array( headline_text => 'Euklidisch flacher Kosmos mit lokalem Symmetriebruch', headline_text_short => 'Euklidisch flacher Kosmos mit Symmetriebruch'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Fig-KosmosEuklid' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                      'OM:FrQFT:ZeitAlterungFrequenz:Fig-GravitationspotMulti' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung:Nota' => array( headline_text => 'Notation', headline_text_short => 'Notation'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Einfuehrung:KosBeob' => array( headline_text => 'Kosmische Beobachter', headline_text_short => 'Kosmische Beobachter'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-LGKos-2' => array( headline_text => '\\name{OM:FrQFT:ZeitAlterungFrequenz:Equ-LGKos-1}'),
                             
                  'OM:FrQFT:ZeitAlterungFrequenz:Zeit' => array( headline_text => 'Zeit', headline_text_short => 'Zeit'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Fig-Wirkungsquanten-Bewegungsraum' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-KosWQGeschw' => array( headline_text => 'ZAF.Zt.4'),
                             
                  'OM:FrQFT:ZeitAlterungFrequenz:Alterung' => array( headline_text => 'Alterung und strukturierter Raum', headline_text_short => 'Alterung und strukturierter Raum'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Ani-VakuumElapson' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:FrQFT:ZeitAlterungFrequenz:Fig-Gekruemmter-Licht-Bewegungsraum' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-AltProZeit' => array( headline_text => 'ZAF.Alt.2'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-AlphaAusAltUndZeit' => array( headline_text => 'ZAF.Alt.3'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-AlphaPropLG' => array( headline_text => 'ZAF.Alt.7'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-AltGleichZeit' => array( headline_text => 'ZAF.Alt.8'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-AltKos' => array( headline_text => 'ZAF.Alt.10'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-LGKos-1' => array( headline_text => 'ZAF.Alt.11'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-LGKos-2' => array( headline_text => 'ZAF.Alt.13'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-LGAenderungKos' => array( headline_text => 'ZAF.Alt.14'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-AltAenderungKos' => array( headline_text => 'ZAF.Alt.15'),
                             
                  'OM:FrQFT:ZeitAlterungFrequenz:Frequenz' => array( headline_text => 'Frequenz und Energie', headline_text_short => 'Frequenz und Energie'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschw' => array( headline_text => 'ZAF.FE.1'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-FrequenzAusWQGeschwKos' => array( headline_text => 'ZAF.FE.7'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschwKonst-2' => array( headline_text => '\\name{OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschwKonst-1}'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-FrequenzAusAlpha' => array( headline_text => 'ZAF.FE.11'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-EinsteinEnergieLichtQuant-1' => array( headline_text => '\\name{OM:FrQFT:HeisenbergUnschaerfe:Equ-EinsteinEnergieLichtQuant}'),
                             
                  'OM:FrQFT:ZeitAlterungFrequenz:Wirkungsquanten-Geschwindigkeit' => array( headline_text => 'Wirkungsquanten-Geschwindigkeit', headline_text_short => 'Wirkungsquanten-Geschwindigkeit'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Fig-PoundRebkaSnider' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:ZeitAlterungFrequenz:Fig-Wellenlaenge' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschw-2' => array( headline_text => '\\name{OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschw}'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-FrequenzRelAenderung' => array( headline_text => 'ZAF.Wq.1'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-DeltaPhiSehrKlein' => array( headline_text => 'ZAF.Wq.2'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-AlphaNaeherFrequenzaender' => array( headline_text => 'ZAF.Wq.5'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-FrequenzAusWQGeschwKos-2' => array( headline_text => '\\name{OM:FrQFT:ZeitAlterungFrequenz:Equ-FrequenzAusWQGeschwKos}'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschw-3' => array( headline_text => '\\name{OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschw}'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschwKonst-1' => array( headline_text => 'ZAF.Wq.29'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Equ-WQGeschwRot' => array( headline_text => 'ZAF.Wq.31'),

                  'OM:FrQFT:ZeitAlterungFrequenz:Dichtestruktur' => array( headline_text => 'Dichtestruktur von Raum und Zeit', headline_text_short => 'Dichtestruktur von Raum und Zeit'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Dichtestruktur:RelatWQDicht' => array( headline_text => 'Relative Wirkungsquanten-String-Dichte oder -String-Energiedichte des Kosmos', headline_text_short => 'Relative Wirkungsquanten-String-Dichte des Kosmos'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-RelatWQSDicht' => array( headline_text => 'ZAF.RWD.9'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Dichtestruktur:EBDicht' => array( headline_text => 'Relative Elapsonen-Bahn-Dichte oder Elementarteilchen-Liniendichte des Kosmos', headline_text_short => 'Relative Elapsonen-Bahn-Dichte des Kosmos'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-DetektWellenlaengeAlt' => array( headline_text => 'ZAF.RED.1'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-RelatEpBDicht' => array( headline_text => 'ZAF.RED.7'),
                    'OM:FrQFT:ZeitAlterungFrequenz:Dichtestruktur:RelatWQSundEBDicht' => array( headline_text => 'Relation von Wirkungsquanten-String-Dichte und Elapsonen-Bahn-Dichte im Kosmos', headline_text_short => 'Relation von Wirkungsquanten-String-Dichte und Elapsonen-Bahn-Dichte im Kosmos'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Fig-RelatDichte' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:ZeitAlterungFrequenz:Dichtestruktur:RelatVakEnergDichte' => array( headline_text => 'Relative Wirkungsquanten- oder Vakuum-Energie-Dichte im Kosmos', headline_text_short => 'Relative Wirkungsquanten- oder Vakuum-Energie-Dichte im Kosmos'),
                             
                  'OM:FrQFT:ZeitAlterungFrequenz:FormBewegRaum' => array( headline_text => 'Formeln des Bewegungsraums', headline_text_short => 'Formeln des Bewegungsraums'),
                    'OM:FrQFT:ZeitAlterungFrequenz:FormBewegRaum:Bw' => array( headline_text => 'Beobachter- und Beobachtungsortswechsel', headline_text_short => 'Beobachter- und Beobachtungsortswechsel'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-AltGleichZeit-2' => array( headline_text => '\\name{OM:FrQFT:ZeitAlterungFrequenz:Equ-AltGleichZeit}'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-AltKos-2' => array( headline_text => '\\name{OM:FrQFT:ZeitAlterungFrequenz:Equ-AltKos}'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-AltAenderungKos-2' => array( headline_text => '\\name{OM:FrQFT:ZeitAlterungFrequenz:Equ-AltAenderungKos}'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-AltFakAllg' => array( headline_text => 'ZAF.Bw.1'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-LGAenderungAllg' => array( headline_text => 'ZAF.Bw.7'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-FrequOrtsWechsel' => array( headline_text => 'ZAF.Bw.10'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-EnergOrtsWechsel' => array( headline_text => 'ZAF.Bw.12'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-ProzBeobWechsel' => array( headline_text => 'ZAF.Bw.19'),
                    'OM:FrQFT:ZeitAlterungFrequenz:FormBewegRaum:WqStr' => array( headline_text => 'Wirkungsquanten-Strings', headline_text_short => 'Wirkungsquanten-Strings'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-WQEnergieOrtUnabh' => array( headline_text => 'ZAF.WS.1'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-EnergieSumWQEnergie' => array( headline_text => 'ZAF.WS.3'),
                      'OM:FrQFT:ZeitAlterungFrequenz:Equ-WQAnzAusEnergieVerhaelt' => array( headline_text => 'ZAF.WS.5'),
                             
                  'OM:FrQFT:ZeitAlterungFrequenz:DefinitionVonSubraeumen' => array( headline_text => 'Definition von Subräumen', headline_text_short => 'Definition von Subräumen'),
                    'OM:FrQFT:ZeitAlterungFrequenz:DefinitionVonSubraeumen:Fig-UnpolPhotFarbpol6pol' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                  'OM:FrQFT:ZeitAlterungFrequenz:HolografischesPrinzip' => array( headline_text => 'Holografisches Prinzip', headline_text_short => 'Holografisches Prinzip'),
                ),
         ),
  'OM:FrQFT:Zusammenfassung' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/Zusammenfassung_de.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Zusammenfassung_de.php',
           titel => 'Zusammenfassung - Fraktale Quanten-Fluss-Theorie (FrQFT) - Deutsch',
           description => 'Was erreicht wurde.',
           keywords => '',
           text_titel_h1 => 'Zusammenfassung',
           text_titel_short => 'Zusammenfassung',
           text_undertitel_h2 => 'Was erreicht wurde',
           text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:FrQFT:Zusammenfassung:Zeit-Ebenen' => array( headline_text => 'Zeit-Ebenen', headline_text_short => 'Zeit-Ebenen'),
                  'OM:FrQFT:Zusammenfassung:Universum-aus-gestaffelten-Kosmoi' => array( headline_text => 'Universum aus gestaffelten Kosmoi', headline_text_short => 'Universum aus gestaffelten Kosmoi'),
                  'OM:FrQFT:Zusammenfassung:Urknall-und-Schwarze-Loecher' => array( headline_text => 'Urknall und Schwarze Löcher', headline_text_short => 'Urknall und Schwarze Löcher'),
                  'OM:FrQFT:Zusammenfassung:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:FrQFT:XXX-Notizen' =>
    array( url_abs => 'http://www.nsosp.org/de/Quanten-Fluss-Theorie/XXX_Notizen.php',
           url_rel => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/XXX_Notizen.php',
           titel => 'XXX-Notizen',
           description => 'Diese Seite sollte von Google nicht angezeigt werden!',
           keywords => '',
           text_titel_h1 => 'Notizen zum Aufbewahren',
           text_titel_short => 'Notizen zum Aufbewahren',
           text_undertitel_h2 => 'XXX',
           text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:FrQFT:XXX-Notizen:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                  'OM:FrQFT:XXX-Notizen:Higgs-Feld-Aether' => array( headline_text => 'Higgs-Feld entspricht einem Äther', headline_text_short => 'Higgs-Feld entspricht Äther'),
                  'OM:FrQFT:XXX-Notizen:Problem-der-fehlenden-Gravitation-der-Vakuumenergie' => array( headline_text => 'Problem der fehlenden Gravitation der Vakuumenergie', headline_text_short => 'Problem der fehlenden Gravitation der Vakuumenergie'),
                  'OM:FrQFT:XXX-Notizen:Alte-Einleitung' => array( headline_text => 'Rest Alte Einleitung', headline_text_short => 'Rest Alte Einleitung'),
                  'OM:FrQFT:XXX-Notizen:NeuePhysik-AlterVortext' => array( headline_text => 'Neue Physik: alter Vortext', headline_text_short => 'Neue Physik: alter Vortext'),
                  'OM:FrQFT:XXX-Notizen:NeuePhysik-Loesung-des-Problems-der-Zeit' => array( headline_text => 'Neue Physik: Lösung des Problems der Zeit', headline_text_short => 'Neue Physik: Lösung des Problems der Zeit'),
                    'OM:FrQFT:XXX-Notizen:NeuePhysik-Fig-Elapson' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:XXX-Notizen:NeuePhysik-Fig-Wirkungsquanten-Bewegungsraum' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:FrQFT:XXX-Notizen:NeuePhysik-Fig-Gekruemmter-Licht-Bewegungsraum' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                  'OM:FrQFT:XXX-Notizen:Sonnensys-und-moderne-Physik' => array( headline_text => 'Sonnensystem und moderne Physik', headline_text_short => 'Sonnensystem und moderne Physik'),
                  'OM:FrQFT:XXX-Notizen:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),

  'OM:NPT:' =>
    array_merge( $nSOSp_g_info_wolfgangHuss,
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-der-Zeit/',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-der-Zeit/',
           name_short => 'NaturZeit',
           font_ary => array(
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                            ),
           header_pict_name => 'Organical-Matters_Logo_De.jpg',
           header_pict_alt => 'Organical Matters Website, Ideen neuer Wissenschaft',
           copy_right => 'Naturphilosophie der Zeit (NPT) \\\\'."\n".
                          '© 2014–2022 by \\\\'."\n".
                          'Wolfgang Huß und \\\\'."\n".
                          'Media Line Digital e.K. \\\\'."\n".
                          'is licensed under \\\\'."\n".
                          '\\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
           litera_url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-der-Zeit/Literatur_de.php',
           litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/quantum-flow-theory_bibliographie_v8_002.bib',
         )),
  'OM:NPT:Home' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-der-Zeit/index.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-der-Zeit/index.php',
           titel => 'Naturphilosophie der Zeit (NPT) - Deutsch',
           // description => 'Naturphilosophie der Zeit (NPT) – der Djet-Neheh-Dualismus bringt die Begriffe Zeit, Existenz, Struktur, Veränderung oder Bewegung, Wechselwirkung, Symmetriebruch und Spannung in einen allgemeinen Zusammenhang.',
           description => '\\name[undertitle]{OM:NPT:Home}. — \\name[description]{OM:NPT:Home}.',
           keywords => '',
           text_titel_h1 => 'Naturphilosophie der Zeit \\color{*TitleAdd}{\\small{(NPT)}}',
           text_titel_short => 'Naturphilosophie der Zeit',
           text_undertitel_h2 => 'Ein strukturelles Verständnis der dynamischen Existenz und ihrer Zeit',
           text_titel_discr_h3 => 'Der Djet-Neheh-Dualismus bringt die Begriffe Struktur, Bewegung als deren Veränderung, Existenz, Zeit, Prozess, Wechselwirkung, Symmetriebruch und Spannung in einen allgemeinen Zusammenhang',
           jump_ary => array(
                  'OM:NPT:Home:Inhalt' => array( headline_text => 'Inhalt', headline_text_short => 'Inhalt'),
                  'OM:NPT:Home:Lexikon' => array( headline_text => 'Lexikon', headline_text_short => 'Lexikon'),
                ),
         ),
  'OM:NPT:Einleitung' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-der-Zeit/Einleitung_de.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-der-Zeit/Einleitung_de.php',
           titel => 'Einleitung - Naturphilosophie der Zeit (NPT) - Deutsch',
           description => 'Ein strukturelles Verständnis der Zeit.',
           keywords => '',
           text_titel_h1 => 'Einleitung',
           text_titel_short => 'Einleitung',
           text_undertitel_h2 => 'Die Struktur der Zeit aus der Perspektive der zeitlichen Aspekte Djet und Neheh verknüpft die Begriffe Existenz, Struktur, Veränderung oder Bewegung, Wechselwirkung, Spannung und Symmetriebruch',
           //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
           jump_ary => array(
                  'OM:NPT:Einleitung:Arithmetik' => array( headline_text => 'Arithmetik', headline_text_short => 'Arithmetik'),
                ),
         ),
   'OM:NPT:Literatur' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-der-Zeit/Literatur_de.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-der-Zeit/Literatur_de.php',
           titel => 'Literatur - Naturphilosophie der Zeit (NPT) - Deutsch',
           description => 'Literatur zur strukturellen Naturphilosophie der Zeit.',
           keywords => '',
           text_titel_h1 => 'Literatur',
           text_titel_short => 'Literatur',
           text_undertitel_h2 => 'und Informationen',
           //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
           jump_ary => array(
                ),
         ),

  'OM:NPYo:' =>
    array_merge( $nSOSp_g_info_wolfgangHuss,
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/',
           favicons_url_rel_opt => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/favicon/',
           //header_pict_name => 'Organical-Matters_Logo_De.jpg',
           //header_pict_alt => 'Organical Matters Website, Ideen neuer Wissenschaft',
           name_short => 'NaPhil-Yoga',
           font_ary => array(
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                            ),
           header_bgcolor => '#FFFFFF',
           header_pict_name => 'Naturphilosophie-Yoga/NaPhil-Yoga_header_v01_1_1860x354_72dpi_De.jpg',
           header_pict_width => '930px',
           header_pict_height => '177px',
           header_pict_bgcolor => '#FFFFFF',
           header_pict_alt => 'Naturphilosophie-Yoga, Spannungsspiel des Lebens',
           header_links_marginLeft => '254px',
           copy_right => 'Naturphilosophie-Yoga (NaPhil-Yoga) \\\\'."\n".
                          '© 2014–2022 by \\\\'."\n".
                          'Wolfgang Huß und \\\\'."\n".
                          'Media Line Digital e.K. \\\\'."\n".
                          'is licensed under \\\\'."\n".
                          '\\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
           litera_url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Literatur_de.php',
           litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/quantum-flow-theory_bibliographie_v8_002.bib',
         )),
  'OM:NPYo:Home' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/index.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/index.php',
           titel => 'Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           // description => '›Liebe zur Weisheit‹ Yoga – die Natur des Lebens verstehen und dieses Wissen anwenden. Körper und Seele als Einheit sehen, die Gedanken zur Ruhe kommen lassen … – Yoga nach der Naturphilosophie des ›Spannungsspiels des Lebens‹.',
           // description => 'Yoga der Brücken der Zuversicht. Yoga der Neugier des Spielens. Yoga der Liebe meiner Natur. Yoga des In-der-Schwebe-Lassens. Nach der Naturphilosophie des ›Spannungsspiels des Lebens.',
           description => '\\name[undertitle]{OM:NPYo:Home}. — \\name[description]{OM:NPYo:Home}.',
           // description => 'Yoga des Werdens. — Nach der Naturphilosophie des ›Spannungsspiels des Lebens‹.',
           keywords => '',
           text_titel_h1 => 'Naturphilosophie-Yoga \\color{*TitleAdd}{\\small{(NaPhil-Yoga)}}',
           text_titel_short => 'NaPhil-Yoga',
           // text_undertitel_h2 => '\\color{*FigDescr}{›Liebe zur Weisheit‹ Yoga} – die Natur des Lebens verstehen und dieses Wissen anwenden. Körper und Seele als Einheit sehen, die Gedanken zur Ruhe kommen lassen …',
           // text_undertitel_h2 => 'Yoga der Brücken der Zuversicht \\\\ \\small{\\color{*Light}{Yoga der Neugier des Spielens \\\\ Yoga der Liebe meiner Natur \\\\ Yoga des In-der-Schwebe-Lassens}}',
           text_undertitel_h2 => 'Yoga des Werdens 𓇳',
           text_titel_discr_h3 => 'Nach der Naturphilosophie des ›Spannungsspiels des Lebens‹',
           jump_ary => array(
                  'OM:NPYo:Home:Inhalt' => array( headline_text => 'Inhalt', headline_text_short => 'Inhalt'),
                  'OM:NPYo:Home:Lexikon' => array( headline_text => 'Lexikon', headline_text_short => 'Lexikon'),
                  'OM:NPYo:Home:Haftungsausschluss' => array( headline_text => 'Haftungsausschluss', headline_text_short => 'Haftungsausschluss'),
                ),
         ),
  'OM:NPYo:Angebote-Veranstaltungen' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Angebote-Veranstaltungen_de.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Angebote-Veranstaltungen_de.php',
           titel => 'Angebote und Veranstaltungen - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'Was kannst du bei mir bekommen oder buchen?',
           keywords => '',
           text_titel_h1 => 'Angebote und Veranstaltungen',
           text_titel_short => 'Angebote und Veranstaltungen',
           text_undertitel_h2 => 'Was kannst du bei mir bekommen oder buchen?',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:NPYo:Angebote-Veranstaltungen:NaPhilYogaCoaching' => array( headline_text => 'NaPhil-Yoga Coaching', headline_text_short => 'NaPhil-Yoga Coaching'),
                  'OM:NPYo:Angebote-Veranstaltungen:YogaMeetsWissenschaft' => array( headline_text => 'Yoga, Alternativmedizin meets Wissenschaft, Medizin, Physik \\color{*TitleAdd}{\\small{(Meetup Gruppe)}}', headline_text_short => 'Yoga, Alternativmedizin meets Wissenschaft, Medizin, Physik'),
                  'OM:NPYo:Angebote-Veranstaltungen:LGBTSpiritualHamburg' => array( headline_text => 'LGBT Spiritual Hamburg \\color{*TitleAdd}{\\small{(Meetup Gruppe)}}', headline_text_short => 'LGBT Spiritual Hamburg'),
                  'OM:NPYo:Angebote-Veranstaltungen:PhysikNeuSehenErgruenden' => array( headline_text => 'Physik Neu Sehen und Ergründen \\color{*TitleAdd}{\\small{(Meetup Gruppe)}}', headline_text_short => 'Physik Neu Sehen und Ergründen'),
                  'OM:NPYo:Angebote-Veranstaltungen:PhysikAchtsamkeitYoga' => array( headline_text => 'Physik, Achtsamkeit und Yoga \\color{*TitleAdd}{\\small{(Vortrag mit Diskussion)}}', headline_text_short => 'Physik, Achtsamkeit und Yoga'),
                  'OM:NPYo:Angebote-Veranstaltungen:PerspektivwechselAmbiguitaetstoleranzEntscheidungen' => array( headline_text => 'Perspektivwechsel, Ambiguitätstoleranz und Entscheidungen \\color{*TitleAdd}{\\small{(Vortrag mit Diskussion)}}', headline_text_short => 'Perspektivwechsel, Ambiguitätstoleranz und Entscheidungen'),
                  'OM:NPYo:Angebote-Veranstaltungen:AchtsamkeitsprozessWoPhysikAufYogaTrifft' => array( headline_text => 'Der Achtsamkeitsprozess — Wo Physik auf Yoga trifft \\color{*TitleAdd}{\\small{(Worshop)}}', headline_text_short => 'Der Achtsamkeitsprozess — Wo Physik auf Yoga trifft'),
                ),
         ),
  'OM:NPYo:Chakras-Kabbala-Tarot' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Chakras-Kabbala-Tarot.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Chakras-Kabbala-Tarot.php',
           titel => 'Chakras, Kabbala und Tarot - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'XXX.',
           keywords => '',
           text_titel_h1 => 'Chakras, Kabbala und Tarot',
           text_titel_short => 'Chakras, Kabbala und Tarot',
           text_undertitel_h2 => 'XXX',
           text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:NPYo:Chakras-Kabbala-Tarot:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:NPYo:Chakras-Kabbala-Tarot:Vortext:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                             
                  'OM:NPYo:Chakras-Kabbala-Tarot:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:NPYo:Einleitung' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Einleitung.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Einleitung.php',
           titel => 'Einleitung - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           //description => 'Die Naturphilosophie des Yoga.',
           //description => 'Emotionen leiten uns durch unser Leben und entscheiden über seine Qualität. Unser intelligenter Umgang mit unseren Emotionen – unser Wissen und Verständnis darüber, wie sie mit unserer Lebenssituation und unseren Handlungen verwoben sind – hilft uns, leichtere Wege durchs Leben zu finden.',
           //description => 'Emotionen leiten uns durch unser Leben und bestimmen unsere Qualität. Der intelligenter Umgang mit unseren Emotionen hilft uns, leichtere Wege durchs Leben zu finden.',
           //description => 'Zuversicht ist zentral für ein gutes Leben. Der kluge Umgang mit unseren Emotionen und Gefühlen erleichtert unser Leben.',
           description => 'Zuversicht, die Suche unseres Lebens. Der kluge Umgang mit unseren Emotionen und Gefühlen erleichtert uns die Suche nach Zuversicht und einem guten Leben.',
           keywords => '',
           text_titel_h1 => 'Einleitung',
           text_titel_short => 'Einleitung',
           //text_undertitel_h2 => 'Die Naturphilosophie des Yoga',
           //text_undertitel_h2 => 'Emotionen leiten uns durch unser Leben und entscheiden über seine Qualität',
           //text_undertitel_h2 => 'Emotionen leiten uns durch unser Leben und bestimmen unsere Qualität',
           //text_undertitel_h2 => 'Zuversicht ist zentral für ein gutes Leben',
           text_undertitel_h2 => 'Zuversicht, die Suche unseres Lebens',
           //text_titel_discr_h3 => 'Unser intelligenter Umgang mit unseren Emotionen – unser Wissen und Verständnis darüber, wie sie mit unserer Lebenssituation und unseren Handlungen verwoben sind – hilft uns, leichtere Wege durchs Leben zu finden',
           //text_titel_discr_h3 => 'Der intelligente Umgang mit unseren Emotionen hilft uns, leichtere Wege durchs Leben zu finden',
           //text_titel_discr_h3 => 'Der kluge Umgang mit unseren Emotionen und Gefühlen erleichtert unser Leben',
           text_titel_discr_h3 => 'Der kluge Umgang mit unseren Emotionen und Gefühlen erleichtert uns die Suche nach Zuversicht und einem guten Leben',
           jump_ary => array(
                  'OM:NPYo:Einleitung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:NPYo:Einleitung:Vortext:UnserAchtsamkeitsprozess' => array( headline_text => 'Unser Achtsamkeitsprozess – Lebenlernen und Persönlichkeitsentwicklung', headline_text_short => 'Unser Achtsamkeitsprozess'),
                    'OM:NPYo:Einleitung:Vortext:UnsereAtmung' => array( headline_text => 'Unsere Atmung – Stabilität und Flexibilität, Bewusstsein und Unterbewusstsein', headline_text_short => 'Unsere Atmung'),
                             
                  'OM:NPYo:Einleitung:YinYangKoerperspannung' => array( headline_text => 'Yin und Yang der Körperspannung und Stimmung', headline_text_short => 'Yin und Yang der Körperspannung und Stimmung'),
                    //'OM:NPYo:Einleitung:YinYangKoerperspannung:Fig-Symbol' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:Einleitung:YinYangKoerperspannung:Fig-SymbolYinYangKoerperSeeleExistenz' => array( headline_text => 'Yin und Yang der Körper-Seele-Existenz', headline_text_short => 'Yin und Yang der Körper-Seele-Existenz'),
                    'OM:NPYo:Einleitung:YinYangKoerperspannung:Fig-SymbolKoerperspanStimmung' => array( headline_text => 'Dualismus von Körperspannung und Stimmung', headline_text_short => 'Dualismus von Körperspannung und Stimmung'),
                    'OM:NPYo:Einleitung:YinYangKoerperspannung:InnenFeder' => array( headline_text => 'Die Innenfedern im Körper', headline_text_short => 'Die Innenfedern im Körper'),
                             
                  'OM:NPYo:Einleitung:LichtTunnelAuge' => array( headline_text => 'Wahrnehmung des Lichts im Tunnel', headline_text_short => 'Wahrnehmung des Lichts im Tunnel'),
                             
                  'OM:NPYo:Einleitung:ErkenneDichSelbst' => array( headline_text => '›Erkenne dich selbst‹ als Achtsamkeitsprozess', headline_text_short => '›Erkenne dich selbst‹ als Achtsamkeitsprozess'),
                    'OM:NPYo:Einleitung:ErkenneDichSelbst:Achtsamkeitsprozess' => array( headline_text => 'Unser Achtsamkeitsprozess', headline_text_short => 'Unser Achtsamkeitsprozess'),
                    'OM:NPYo:Einleitung:ErkenneDichSelbst:Psyche' => array( headline_text => 'Unsere Psyche', headline_text_short => 'Unsere Psyche'),
                             
                  'OM:NPYo:Einleitung:Atmung' => array( headline_text => 'Atmung und Stimmung', headline_text_short => 'Atmung und Stimmung'),
                  'OM:NPYo:Einleitung:Ehrgeiz' => array( headline_text => 'Leichtigkeit – Ehrgeiz herausnehmen', headline_text_short => 'Leichtigkeit – Ehrgeiz herausnehmen'),
                    'OM:NPYo:Einleitung:Ehrgeiz:Die-Kunst-der-Leichtigkeit' => array( headline_text => 'Die Kunst der Leichtigkeit', headline_text_short => 'Die Kunst der Leichtigkeit'),
                  'OM:NPYo:Einleitung:Differenzierung' => array( headline_text => 'Differenzierung von Schmerz', headline_text_short => 'Differenzierung von Schmerz'),
                  'OM:NPYo:Einleitung:Widerstand-reduzieren' => array( headline_text => 'Widerstand reduzieren', headline_text_short => 'Widerstand reduzieren'),
                  'OM:NPYo:Einleitung:Praxis-Achtsamkeit' => array( headline_text => 'Praxis: Achtsamkeit', headline_text_short => 'Praxis: Achtsamkeit'),
                  'OM:NPYo:Einleitung:Praxis-Atmung' => array( headline_text => 'Praxis: Atmung und Stimmung', headline_text_short => 'Praxis: Atmung und Stimmung'),
                  'OM:NPYo:Einleitung:Praxis-Asanas' => array( headline_text => 'Praxis: Asanas', headline_text_short => 'Praxis: Asanas'),
                  'OM:NPYo:Einleitung:Bilder' => array( headline_text => 'Wir sind was wir denken – unsere Bilder bestimmen uns', headline_text_short => 'wir sind was wir denken – unsere Bilder bestimmen uns'),
                  'OM:NPYo:Einleitung:Bild-GebaendigtesLicht' => array( headline_text => 'Bild: Wir sind gebändigtes Licht', headline_text_short => 'Bild: Wir sind gebändigtes Licht'),
                  'OM:NPYo:Einleitung:Veranstaltungen' => array( headline_text => 'Veranstaltungen', headline_text_short => 'Veranstaltungen'),
                ),
         ),
  'OM:NPYo:ExistenzLeichtigkeit' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Existenz-Leichtigkeit-Yin-Yang-Prinzip-Tai-Chi-Djet-Neheh-Wu-Wei-Fluss-Weg-Dao-Daoismus.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Existenz-Leichtigkeit-Yin-Yang-Prinzip-Tai-Chi-Djet-Neheh-Wu-Wei-Fluss-Weg-Dao-Daoismus.php',
           titel => 'Existenz und Leichtigkeit - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'Dao, Qi, Yin und Yang sowie Wu Wei. Die Naturphilosophie der Physik des Achtsamkeitsprozesses findet sich in den Grundkonzepten des Daoismus.',
           keywords => '',
           text_titel_h1 => 'Existenz und Leichtigkeit',
           text_titel_short => 'Existenz und Leichtigkeit',
           text_undertitel_h2 => 'Dao, Qi, Yin und Yang sowie Wu Wei und I Ging',
           text_titel_discr_h3 => 'Die Naturphilosophie der Physik des Achtsamkeitsprozesses findet sich in den Grundkonzepten des Daoismus',
           jump_ary => array(
                  'OM:NPYo:ExistenzLeichtigkeit:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:NPYo:ExistenzLeichtigkeit:Vortext:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                    'OM:NPYo:ExistenzLeichtigkeit:Vortext:Fig-YinYangTaijitu' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:ExistenzLeichtigkeit:Vortext:Fig-SymbolYinYangKoerperSeeleExistenz' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:ExistenzLeichtigkeit:Vortext:Fig-IGingXiantian' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:ExistenzLeichtigkeit:Vortext:Fig-UnpolPhotFarbpol8pol' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:ExistenzLeichtigkeit:Vortext:Fig-Elapson' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:ExistenzLeichtigkeit:Vortext:Ani-VakuumElapson' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:NPYo:ExistenzLeichtigkeit:Vortext:Fig-UnpolPhotFarbpol6pol' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:ExistenzLeichtigkeit:Vortext:Fig-Achtsamkeitsprozess' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                  'OM:NPYo:ExistenzLeichtigkeit:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:NPYo:HaTha' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Hatha-Yoga-Ha-Tha-Ra-Horus-Sonne-Mond.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Hatha-Yoga-Ha-Tha-Ra-Horus-Sonne-Mond.php',
           titel => 'Hatha Yoga – Ha und Tha, Ra und Horus, Sonne und Mond - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'Unsere Balance der Körperhälften, unser Schicksal. Der Zusammenhang zwischen Yoga, Tantra, altägyptischer und hinduistischer Mythologie, unsem Achtsamkeitsprozess und der Gesichtsspiegelung.',
           keywords => '',
           text_titel_h1 => 'Hatha Yoga – Ha und Tha, Ra und Horus, Sonne und Mond',
           text_titel_short => 'Hatha Yoga – Ha und Tha, Ra und Horus, Sonne und Mond',
           text_undertitel_h2 => 'Unsere Balance der Körperhälften, unser Schicksal',
           text_titel_discr_h3 => 'Der Zusammenhang zwischen Yoga, Tantra, altägyptischer und hinduistischer Mythologie, unserem Achtsamkeitsprozess und der Gesichtsspiegelung',
           jump_ary => array(
                  'OM:NPYo:HaTha:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:NPYo:HaTha:Vortext:Fig-AugeDesRa' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:HaTha:Vortext:Fig-AugeDesHorus' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:HaTha:Vortext:Fig-SymbolYinYangKoerperSeeleExistenz' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:HaTha:Vortext:Fig-Hexagramm' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:HaTha:Vortext:Fig-LebenDesHorusAsklepiosstab' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:HaTha:Vortext:Fig-LebenDesHorusHermesstab' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:NPYo:HaTha:Vortext:Fig-Hermesstab' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                  'OM:NPYo:HaTha:WirZweiWesen' => array( headline_text => 'Wir sind zwei verwobene Wesen', headline_text_short => 'Wir sind zwei verwobene Wesen'),
                  'OM:NPYo:HaTha:HerstellungBalance' => array( headline_text => 'Herstellung der Balance', headline_text_short => 'Herstellung der Balance'),
                ),
         ),
   'OM:NPYo:Literatur' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Literatur_de.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Literatur_de.php',
           titel => 'Literatur - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'Literatur zum Naturphilosophie-Yoga.',
           keywords => '',
           text_titel_h1 => 'Literatur',
           text_titel_short => 'Literatur',
           text_undertitel_h2 => 'und Informationen',
           //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
           jump_ary => array(
                ),
         ),
  'OM:NPYo:Meetup-LGBT-Spiritual-Hamburg' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Meetup-LGBT-Spiritual-Hamburg.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Meetup-LGBT-Spiritual-Hamburg.php',
           titel => 'Meetup: LGBT Spiritual Hamburg - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'Diese Gruppe ist für lesbische, bisexuelle, schwule und alle* Menschen, die Freunde suchen, mit denen sie sich über spirituelle Erfahrungen austauschen können.',
           keywords => '',
           text_titel_h1 => 'Meetup: LGBT Spiritual Hamburg',
           text_titel_short => 'Meetup: LGBT Spiritual Hamburg',
           text_undertitel_h2 => 'Diese Gruppe ist für lesbische, bisexuelle, schwule und alle* Menschen, die Freunde suchen, mit denen sie sich über spirituelle Erfahrungen austauschen können',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:NPYo:Meetup-LGBT-Spiritual-Hamburg:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:NPYo:Spiritualitaet-Psychologie' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Spiritualitaet-und-Psychologie.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Spiritualitaet-und-Psychologie.php',
           titel => 'Spiritualität und Psychologie - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'Was haben Spiritualität und Psychologie miteinander zu tun? Unser innerer Dialog, unser Selbstmitgefühl, unsere Selbstheilung.',
           keywords => '',
           text_titel_h1 => 'Spiritualität und Psychologie',
           text_titel_short => 'Spiritualität und Psychologie',
           text_undertitel_h2 => 'Was haben Spiritualität und Psychologie miteinander zu tun?',
           text_titel_discr_h3 => 'Unser innerer Dialog, unser Selbstmitgefühl, unsere Selbstheilung',
           jump_ary => array(
                  'OM:NPYo:Spiritualitaet-Psychologie:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:NPYo:Spiritualitaet-Psychologie:Vortext:BinIchSpirituell' => array( headline_text => 'Bin ich spirituell? Glaube und vertraue ich?', headline_text_short => 'Bin ich spirituell?'),
                             
                  'OM:NPYo:Spiritualitaet-Psychologie:Wissen-Unwissen' => array( headline_text => 'Wissen und Unwissen'/*, headline_text_short => 'XXX'*/),
                ),
         ),
  'OM:NPYo:Stein-der-Weisen' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Stein-der-Weisen-(Lapis-Philosophorum)-Heiliger-Gral-Phoenix.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Stein-der-Weisen-(Lapis-Philosophorum)-Heiliger-Gral-Phoenix.php',
           titel => 'Stein der Weisen (Lapis Philosophorum), Heiliger Gral und Phönix aus der Asche - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'Naturphilosophische Hintergründe und Verbindungen der Mythen und Sagen, ihrer Weisheiten, mit unserem Leben.',
           keywords => '',
           text_titel_h1 => 'Stein der Weisen \\color{*TitleAdd}{\\small{(Lapis Philosophorum)}}, \\\\ Heiliger Gral und \\\\ Phönix aus der Asche',
           text_titel_short => 'Stein der Weisen, Heiliger Gral und Phönix aus der Asche',
           text_undertitel_h2 => 'Naturphilosophische Hintergründe und Verbindungen der Mythen und Sagen, ihrer Weisheiten, mit unserem Leben',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:NPYo:Stein-der-Weisen:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:NPYo:Stein-der-Weisen:Vortext:XXX' => array( headline_text => 'XXX'/*, headline_text_short => '' */),
                             
                  'OM:NPYo:Stein-der-Weisen:Stein-der-Weisen' => array( headline_text => 'Stein der Weisen'/* , headline_text_short => ''*/),
                    'OM:NPYo:Stein-der-Weisen:Stein-der-Weisen:Fig-Hermesstab' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                             
                  'OM:NPYo:Stein-der-Weisen:Heiliger-Gral' => array( headline_text => 'Heiliger Gral'/*, headline_text_short => ''*/),
                    'OM:NPYo:Stein-der-Weisen:Heiliger-Gral:Fig-Hexagramm' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                             
                  'OM:NPYo:Stein-der-Weisen:Phoenix-aus-der-Asche' => array( headline_text => 'Phönix aus der Asche'/*, headline_text_short => ''*/),
                    'OM:NPYo:Stein-der-Weisen:Phoenix-aus-der-Asche:Fig-DunkelheitZuLicht' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:NPYo:Stein-der-Weisen:Phoenix-aus-der-Asche:Fig-LebenDesHorusHermesstab' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:NPYo:Stein-der-Weisen:Phoenix-aus-der-Asche:Fig-PhoenixAusDerAscheYinYang' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                ),
         ),
  'OM:NPYo:Vorwort' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Vorwort.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Vorwort.php',
           titel => 'Vorwort - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'XXX',
           keywords => '',
           text_titel_h1 => 'Vorwort',
           text_titel_short => 'Vorwort',
           text_undertitel_h2 => '\\color{*FigDescr}{›Liebe zur Weisheit‹ Yoga} – die Natur des Lebens verstehen und dieses Wissen anwenden. Körper und Seele als Einheit sehen, die Gedanken zur Ruhe kommen lassen …',
           //text_undertitel_h2 => 'Die Naturphilosophie des Yoga',
           //text_undertitel_h2 => 'Emotionen leiten uns durch unser Leben und entscheiden über seine Qualität',
           //text_undertitel_h2 => 'Emotionen leiten uns durch unser Leben und bestimmen unsere Qualität',
           //text_undertitel_h2 => 'Zuversicht ist zentral für ein gutes Leben',
           //text_undertitel_h2 => 'Zuversicht, die Suche unseres Lebens',
           //text_titel_discr_h3 => 'Unser intelligenter Umgang mit unseren Emotionen – unser Wissen und Verständnis darüber, wie sie mit unserer Lebenssituation und unseren Handlungen verwoben sind – hilft uns, leichtere Wege durchs Leben zu finden',
           //text_titel_discr_h3 => 'Der intelligente Umgang mit unseren Emotionen hilft uns, leichtere Wege durchs Leben zu finden',
           //text_titel_discr_h3 => 'Der kluge Umgang mit unseren Emotionen und Gefühlen erleichtert unser Leben',
           //text_titel_discr_h3 => 'Der kluge Umgang mit unseren Emotionen und Gefühlen erleichtert uns die Suche nach Zuversicht und einem guten Leben',
           jump_ary => array(
                  'OM:NPYo:Vorwort:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                  //  'OM:NPYo:Vorwort:Vortext:XXX' => array( headline_text => 'XXX', headline_text_short => 'Vorwort'),
                ),
         ),
  'OM:NPYo:WasIstYoga' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Was-ist-Yoga_de.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Was-ist-Yoga_de.php',
           titel => 'Was ist Yoga? - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'Yoga ist an sich selber und an der Welt zu wachsen, Achtsamkeit und Zufriedenheit zu lernen. Körper- und Seelenpflege von innen.',
           keywords => '',
           text_titel_h1 => 'Was ist Yoga?',
           text_titel_short => 'Was ist Yoga?',
           text_undertitel_h2 => 'Yoga ist an sich selber und an der Welt zu wachsen, Achtsamkeit und Zufriedenheit zu lernen',
           text_titel_discr_h3 => 'Körper- und Seelenpflege von innen',
           jump_ary => array(
                  'OM:NPYo:WasIstYoga:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:NPYo:WasIstYoga:Vortext:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:NPYo:WasUnterschiedYogaSport' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Was-unterscheidet-Yoga-von-Sport-Persoenlichkeitsentwicklung-oder-Leistung_de.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Was-unterscheidet-Yoga-von-Sport-Persoenlichkeitsentwicklung-oder-Leistung_de.php',
           titel => 'Was unterscheidet Yoga von Sport? - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'Hast du deine Persönlichkeitsentwicklung oder direkt deine Leistung im Fokus?',
           keywords => '',
           text_titel_h1 => 'Was unterscheidet Yoga von Sport?',
           text_titel_short => 'Was unterscheidet Yoga von Sport?',
           text_undertitel_h2 => 'Hast du deine Persönlichkeitsentwicklung oder direkt deine Leistung im Fokus?',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:NPYo:WasUnterschiedYogaSport:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:NPYo:WasUnterschiedYogaSport:Vortext:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:NPYo:WieVeraendereIchMeineVergangenheit' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Wie-veraendere-ich-meine-Vergangenheit.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Wie-veraendere-ich-meine-Vergangenheit.php',
           titel => 'Wie verändere ich meine Vergangenheit - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'Unsere Vergangenheit ist für uns, was sie uns bedeutet.',
           keywords => '',
           text_titel_h1 => 'Wie verändere ich meine Vergangenheit',
           text_titel_short => 'Wie verändere ich meine Vergangenheit',
           text_undertitel_h2 => 'Unsere Vergangenheit ist für uns, was sie uns bedeutet',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:NPYo:WieVeraendereIchMeineVergangenheit:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:NPYo:WieVeraendereIchMeineVergangenheit:Vortext:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                             
                  // 'OM:NPYo:WieVeraendereIchMeineVergangenheit:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:NPYo:WS-Achtsamkeitsprozess-WoPhysikAufYogaTrifft' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/Workshop-Achtsamkeitsprozess-Wo-Physik-auf-Yoga-trifft_de.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/Workshop-Achtsamkeitsprozess-Wo-Physik-auf-Yoga-trifft_de.php',
           titel => 'Workshop: Der Achtsamkeitsprozess, Wo Physik auf Yoga trifft … - Naturphilosophie-Yoga (NaPhil-Yoga) - Deutsch',
           description => 'Fundamentale Einsichten zur Achtsamkeit, ihrer Verknüpfung mit den Prozessen des Lebens und den Grundlagen der Physik.',
           keywords => '',
           text_titel_h1 => 'Workshop: Der Achtsamkeitsprozess – Wo Physik auf Yoga trifft …',
           text_titel_short => 'Workshop: Der Achtsamkeitsprozess – Wo Physik auf Yoga trifft …',
           text_undertitel_h2 => 'Die Verknüpfung der Achtsamkeit mit dem Prozess des Lebens',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:NPYo:WS-Achtsamkeitsprozess-WoPhysikAufYogaTrifft:AchtsamkeitAchtsamkeitsprozess' => array( headline_text => 'Achtsamkeit und Achtsamkeitsprozess', headline_text_short => 'Achtsamkeit und Achtsamkeitsprozess'),
                  'OM:NPYo:WS-Achtsamkeitsprozess-WoPhysikAufYogaTrifft:HerzAtemMedi' => array( headline_text => 'Herzöffnungs- und Atemfluss-Meditation', headline_text_short => 'Herzöffnungs- und Atemfluss-Meditation'),
                ),
         ),
  'OM:NPYo:XXX-Notizen' =>
    array( url_abs => 'http://www.nsosp.org/de/Naturphilosophie-Yoga/XXX_Notizen.php',
           url_rel => $Glo_PathRel_back.'../de/Naturphilosophie-Yoga/XXX_Notizen.php',
           titel => 'XXX-Notizen',
           description => 'Diese Seite sollte von Google nicht angezeigt werden!',
           keywords => '',
           text_titel_h1 => 'Notizen zum Aufbewahren',
           text_titel_short => 'Notizen zum Aufbewahren',
           text_undertitel_h2 => 'XXX',
           text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:NPYo:XXX-Notizen:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                  'OM:NPYo:XXX-Notizen:MeditationAchtsamkeitTechniken' => array( headline_text => 'Achtsamkeits- und Meditationstechniken', headline_text_short => 'Achtsamkeits- und Meditationstechniken'),
                  'OM:NPYo:XXX-Notizen:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),

  'OM:nSOSp:' =>
    array_merge( $nSOSp_g_info_wolfgangHuss,
    array( url_abs => 'http://www.nsosp.org/de/New-Soul-Of-Science-Project/',
           url_rel => $Glo_PathRel_back.'../de/New-Soul-Of-Science-Project/',
           favicons_url_rel_opt => $Glo_PathRel_back.'../de/New-Soul-Of-Science-Project/favicon/',
           name_short => 'NSOSP',
           font_ary => array(
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                            ),
           header_bgcolor => '#FFFFFF',
           header_pict_name => 'NSOSP/NSOSP_header_v01_9.jpg',
           header_pict_width => '930px',
           header_pict_height => '177px',
           header_pict_bgcolor => '#FFFFFF',
           header_pict_alt => 'New Soul Of Science Project, Knowledge And Care Helps',
           header_links_marginLeft => '369px',
           copy_right => 'New Soul Of Science Project (NSOSP) \\\\'."\n".
                          '© 1986–2022 by \\\\'."\n".
                          'Wolfgang Huß und \\\\'."\n".
                          'Media Line Digital e.K. \\\\'."\n".
                          'is licensed under \\\\'."\n".
                          '\\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
           litera_url_rel => $Glo_PathRel_back.'../de/New-Soul-Of-Science-Project/Literatur.php',
           litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/quantum-flow-theory_bibliographie_v8_002.bib',
         )),
  'OM:nSOSp:Home' =>
    array( url_abs => 'http://www.nsosp.org/de/New-Soul-Of-Science-Project/index.php',
           url_rel => $Glo_PathRel_back.'../de/New-Soul-Of-Science-Project/index.php',
           titel => 'New Soul Of Science Project (NSOSP) – Deutsch',
           description => 'Knowledge And Care Helps – Bewusstsein, Wissen, Fürsorge und Können helfen gegen Hilflosigkeit in der Not, in dem sie uns Werkzeuge zur Verbesserung unserer Lebenssituation und Lebensqualität an die Hand geben.',
           keywords => '',
           text_titel_h1 => 'New Soul Of Science Project \\color{*TitleAdd}{\\small{(NSOSP)}}',
           text_titel_short => 'New Soul Of Science Project',
           text_undertitel_h2 => 'Knowledge And Care Helps',
           text_titel_discr_h3 => 'Bewusstsein, Wissen, Fürsorge und Können helfen gegen Hilflosigkeit in der Not, in dem sie uns Werkzeuge zur Verbesserung unserer Lebenssituation und Lebensqualität an die Hand geben',
           jump_ary => array(
                  'OM:nSOSp:Home:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                  'OM:nSOSp:Home:Forschungsstand' => array( headline_text => 'Forschungsstand', headline_text_short => 'Forschungsstand'),
                    'OM:nSOSp:Home:Forschungsstand:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:nSOSp:Home:Forschungsstand:Fig-Photon' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                  'OM:nSOSp:Home:nSOSp' => array( headline_text => '\\name[title]{OM:nSOSp:Home}', headline_text_short => '\\name[shorttitle]{OM:nSOSp:Home}'),
                             
                  'OM:nSOSp:Home:Wolfgang-Huss' => array( headline_text => 'Wolfgang Huß', headline_text_short => 'Wolfgang Huß'),
                    'OM:nSOSp:Home:Wolfgang-Huss:Fig-WolfgangHuss' => array( headline_text => 'Wolfgang Huß', headline_text_short => 'Wolfgang Huß'),
                    'OM:nSOSp:Home:Wolfgang-Huss:SpaLeb' => array( headline_text => '\\name[title]{OM:SpaLeb:Home}', headline_text_short => '\\name[shorttitle]{OM:SpaLeb:Home}'),
                    'OM:nSOSp:Home:Wolfgang-Huss:NPYo' => array( headline_text => '\\name[title]{OM:NPYo:Home}', headline_text_short => '\\name[shorttitle]{OM:NPYo:Home}'),
                    'OM:nSOSp:Home:Wolfgang-Huss:FrQFT' => array( headline_text => '\\name[title]{OM:FrQFT:Home}', headline_text_short => '\\name[shorttitle]{OM:FrQFT:Home}'),
                    'OM:nSOSp:Home:Wolfgang-Huss:VRT' => array( headline_text => '\\name[title]{OM:VRT:Home}', headline_text_short => '\\name[shorttitle]{OM:VRT:Home}'),
                    'OM:nSOSp:Home:Wolfgang-Huss:SupNum' => array( headline_text => '\\name[title]{OM:SupNum:Home}', headline_text_short => '\\name[shorttitle]{OM:SupNum:Home}'),
                    'OM:nSOSp:Home:Wolfgang-Huss:NPT' => array( headline_text => 'Strukturelle Naturphilosophie der Gegensätze', headline_text_short => 'Naturphilosophie der Gegensätze'),
                    'OM:nSOSp:Home:Wolfgang-Huss:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                             
                  'OM:nSOSp:Home:Spannungsspiel-des-Lebens' => array( headline_text => '\\name[title]{OM:SpaLeb:Home}', headline_text_short => '\\name[shorttitle]{OM:SpaLeb:Home}'),
                  'OM:nSOSp:Home:Naturphilosophie-Yoga' => array( headline_text => '\\name[title]{OM:NPYo:Home}', headline_text_short => '\\name[shorttitle]{OM:NPYo:Home}'),
                  'OM:nSOSp:Home:Fraktale-Quanten-Fluss-Theorie' => array( headline_text => '\\name[title]{OM:FrQFT:Home}', headline_text_short => '\\name[shorttitle]{OM:FrQFT:Home}'),
                  'OM:nSOSp:Home:Vereinheitlichte-Relativitaetstheorie' => array( headline_text => '\\name[title]{OM:VRT:Home}', headline_text_short => '\\name[shorttitle]{OM:VRT:Home}'),
                  'OM:nSOSp:Home:Naturphilosophie-der-Zeit' => array( headline_text => '\\name[title]{OM:NPT:Home}', headline_text_short => '\\name[shorttitle]{OM:NPT:Home}'),
                  'OM:nSOSp:Home:Naturphilosophie-der-Gegensaetze' => array( headline_text => 'Naturphilosophie der Gegensätze'/*, headline_text_short => 'XXX'*/),
                  'OM:nSOSp:Home:Superial-Zahlen' => array( headline_text => '\\name[title]{OM:SupNum:Home}', headline_text_short => '\\name[shorttitle]{OM:SupNum:Home}'),
                  'OM:nSOSp:Home:Biordinalzahlen' => array( headline_text => 'Biordinalzahlen und integrierte Mengenlehre'/*, headline_text_short => 'XXX'*/),
                  'OM:nSOSp:Home:Operialtheorie' => array( headline_text => '\\name[title]{OM:OT:Home}'/*, headline_text_short => 'XXX'*/),
                  'OM:nSOSp:Home:Zahlensemantik' => array( headline_text => '\\name[title]{OM:ZS:Home}', headline_text_short => '\\name[shorttitle]{OM:ZS:Home}'),
                  'OM:nSOSp:Home:Inspiration' => array( headline_text => 'Inspiration', headline_text_short => 'Inspiration'),
                ),
         ),
   'OM:nSOSp:Buchprojekt' =>
    array( url_abs => 'http://www.nsosp.org/de/New-Soul-Of-Science-Project/Buchprojekt.php',
           url_rel => $Glo_PathRel_back.'../de/New-Soul-Of-Science-Project/Buchprojekt.php',
           titel => 'Buchprojekt - New Soul Of Science Project (NSOSP) - Deutsch',
           description => 'Buchprojekt des New Soul Of Science Projects.',
           keywords => '',
           text_titel_h1 => 'Buchprojekt',
           text_titel_short => 'Buchprojekt',
           //text_undertitel_h2 => 'und Informationen',
           //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
           jump_ary => array(
                  'OM:nSOSp:Buchprojekt:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
   'OM:nSOSp:Literatur' =>
    array( url_abs => 'http://www.nsosp.org/de/New-Soul-Of-Science-Project/Literatur.php',
           url_rel => $Glo_PathRel_back.'../de/New-Soul-Of-Science-Project/Literatur.php',
           titel => 'Literatur - New Soul Of Science Project (NSOSP) - Deutsch',
           description => 'Literatur zum New Soul Of Science Project.',
           keywords => '',
           text_titel_h1 => 'Literatur',
           text_titel_short => 'Literatur',
           text_undertitel_h2 => 'und Informationen',
           //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
           jump_ary => array(
                ),
         ),
   'OM:nSOSp:Projekt' =>
    array( url_abs => 'http://www.nsosp.org/de/New-Soul-Of-Science-Project/Projekt.php',
           url_rel => $Glo_PathRel_back.'../de/New-Soul-Of-Science-Project/Projekt.php',
           titel => 'Das Projekt - New Soul Of Science Project (NSOSP) - Deutsch',
           description => 'Inhalt des New Soul Of Science Project.',
           keywords => '',
           text_titel_h1 => 'Das Projekt',
           text_titel_short => 'Das Projekt',
           //text_undertitel_h2 => 'und Informationen',
           //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
           jump_ary => array(
                  'OM:nSOSp:Projekt:Inhalt' => array( headline_text => 'Inhalt', headline_text_short => 'Inhalt'),
                  'OM:nSOSp:Projekt:Lexikon' => array( headline_text => 'Lexikon', headline_text_short => 'Lexikon'),
                ),
         ),

  // 'OM:OT:' is in separate file in theme folder and included here.

  'OM:SpaLeb:' =>
    array_merge( $nSOSp_g_info_wolfgangHuss,
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/index.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/index.php',
           favicons_url_rel_opt => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/favicon/',
           name_short => 'SpaLeb',
           font_ary => array(
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                            ),
           header_bgcolor => '#FFFFFF',
           header_pict_name => 'Spannungsspiel-des-Lebens/Spannungsspiel-des-Lebens_header_v01_3_1860x354_72dpi_De.jpg',
           header_pict_width => '930px',
           header_pict_height => '177px',
           header_pict_bgcolor => '#FFFFFF',
           header_pict_alt => 'Spannungsspiel des Lebens, Natur- und Lebensphilosophie',
           header_links_marginLeft => '182px',
           copy_right => 'Spannungsspiel des Lebens (Neue Biophysik, NB) \\\\'."\n".
                          '© 2014–2022 by \\\\'."\n".
                          'Wolfgang Huß und \\\\'."\n".
                          'Media Line Digital e.K. \\\\'."\n".
                          'is licensed under \\\\'."\n".
                          '\\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
           litera_url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Literatur_de.php',
           litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/quantum-flow-theory_bibliographie_v8_002.bib',
         )),
  'OM:SpaLeb:Home' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/index.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/index.php',
           titel => 'Spannungsspiel des Lebens (Neue Biophysik, NB) – Deutsch',
           description => 'Eine neue naturphilosophische Perspektive auf unsere Existenz und die Beziehung zwischen Körper und Seele im Spannungsfeld von Neheh und Djet. – Glücklich wird, wer eine angenehm spannende Balance zwischen Harmonie und Disharmonie findet, zwischen Stabilität und Fortentwicklung, zwischen Neheh und Djet.',
           keywords => '',
           text_titel_h1 => 'Spannungsspiel des Lebens \\\\ \\color{*TitleAdd}{\\small{(Neue Biophysik, NB)}}',
           text_titel_short => 'Spannungsspiel des Lebens',
           //text_undertitel_h2 => 'Die Magie von Körper und Seele',
           text_undertitel_h2 => 'Eine neue naturphilosophische Perspektive auf unsere Existenz und die Beziehung zwischen Körper und Seele im Spannungsfeld von Neheh und Djet',
           //text_titel_discr_h3 => 'Die Analyse des Wechselspiels aus Spannungsbalancen, deren Bruch und dem finden neuer Balancen führt zu tiefen Einsichten in das menschliche Leben, offenbart eine neue Perspektive auf die Biologie und begründet so die Spannungsbiologie der Regelsysteme der Organismen.',
           //text_titel_discr_h3 => 'Das Leben, unsere Welt, beruht auf einem neu entdeckten und fundamentalen, strukturellen Spiel zwischen Stabilität und Fortentwicklung; auf einem neuen Verständnis der Zeit, dass zu tiefen Einsichten in die menschliche Existenz führt, eine neue Perspektive auf die Biologie offenbart und so die Spannungsbiologie der Regelsysteme der Organismen begründet',
           text_titel_discr_h3 => 'Glücklicher wird, wer eine angenehm spannende Balance zwischen Harmonie und Disharmonie findet, zwischen Stabilität und Fortentwicklung, zwischen Neheh und Djet',
           jump_ary => array(
                  'OM:SpaLeb:Home:Inhalt' => array( headline_text => 'Inhalt', headline_text_short => 'Inhalt'),
                  'OM:SpaLeb:Home:Lexikon' => array( headline_text => 'Lexikon', headline_text_short => 'Lexikon'),
                  'OM:SpaLeb:Home:Haftungsausschluss' => array( headline_text => 'Haftungsausschluss', headline_text_short => 'Haftungsausschluss'),
                ),
         ),
  'OM:SpaLeb:Achtsamkeitsprozess' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Achtsamkeitsprozess-Definition-des-Lebens.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Achtsamkeitsprozess-Definition-des-Lebens.php',
           titel => 'Der Achtsamkeitsprozess (Definition des Lebens) - Spannungsspiel des Lebens - Deutsch',
           description => 'Zentraler Regelprozess der Lebewesen. Er organisiert unser Gedeihen, unsere Gesundheit, unsere Balance zwischen Stabilität und Entwicklung – lebenslanges Leben lernen, uns selber erforschen und kennenlernen.',
           keywords => '',
           text_titel_h1 => 'Der Achtsamkeitsprozess \\\\ \\color{*TitleAdd}{\\small{(Definition des Lebens)}}',
           text_titel_short => 'Achtsamkeitsprozess',
           text_undertitel_h2 => 'Zentraler Regelprozess der Lebewesen',
           text_titel_discr_h3 => 'Er organisiert unser Gedeihen, unsere Gesundheit, unsere Balance zwischen Stabilität und Entwicklung – lebenslanges Leben lernen, uns selber erforschen und kennenlernen\\hidden{, denn ein gutes Leben ist kein Zufall}',
           jump_ary => array(
                  'OM:SpaLeb:Achtsamkeitsprozess:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:SpaLeb:Achtsamkeitsprozess:Vortext:Fig-Achtsamkeitsprozess' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Achtsamkeitsprozess:Vortext:Fig-AchtsamkeitsprozessBewWiss' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Achtsamkeitsprozess:Vortext:Klaerung' => array( headline_text => 'Klärungen durch den Achtsamkeitsprozess', headline_text_short => 'Klärungen durch den Achtsamkeitsprozess'),
                             
                  'OM:SpaLeb:Achtsamkeitsprozess:Achtsamkeit' => array( headline_text => 'Achtsamkeit', headline_text_short => 'Achtsamkeit'),
                  'OM:SpaLeb:Achtsamkeitsprozess:NaehereBetracht' => array( headline_text => 'Nähere Betrachtung', headline_text_short => 'Nähere Betrachtung'),
                  'OM:SpaLeb:Achtsamkeitsprozess:BeobachtHinweise' => array( headline_text => 'Beobachtbare Hinweise', headline_text_short => 'Beobachtbare Hinweise'),
                  'OM:SpaLeb:Achtsamkeitsprozess:ErweiSicht' => array( headline_text => 'Erweiterte Sicht', headline_text_short => 'Erweiterte Sicht'),
                  'OM:SpaLeb:Achtsamkeitsprozess:PhysAchtsa' => array( headline_text => 'Die Physik der Achtsamkeit\\hidden{Titelidee von Olli}', headline_text_short => 'Die Physik der Achtsamkeit'),
                  'OM:SpaLeb:Achtsamkeitsprozess:AchtsamkeitsprozesGrundlLeben' => array( headline_text => 'Zentraler Regelprozess des Lebens', headline_text_short => 'Zentraler Regelprozess des Lebens'),
                  'OM:SpaLeb:Achtsamkeitsprozess:NeueAnthropologie' => array( headline_text => 'Neue Anthropologie'/*, headline_text_short => ''*/),
                  'OM:SpaLeb:Achtsamkeitsprozess:KIundRobotik' => array( headline_text => 'Künstliche Intelligenz und Robotik', headline_text_short => 'Künstliche Intelligenz und Robotik'),
                  'OM:SpaLeb:Achtsamkeitsprozess:MystischeBedeutung' => array( headline_text => 'Mystische Bedeutung'/*, headline_text_short => 'XXX'*/),
                ),
         ),
  'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Atmung-Bauch-Zwerchfell-Koerperstabilitaet-Bewegungsstabilitaet_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Atmung-Bauch-Zwerchfell-Koerperstabilitaet-Bewegungsstabilitaet_de.php',
           titel => 'Atmung, Bauch, Zwerchfell, Körperstabilität und Bewegungsstabilität - Spannungsspiel des Lebens - Deutsch',
           description => 'Die bisher unbekannte Rolle des Zwerchfells. Wie die Atmung über die Spannung des Bauchs und des Zwerchfells dem Körper Stabilität gibt.',
           keywords => '',
           text_titel_h1 => 'Atmung, Bauchmuskeln und Zwerchfell',
           text_titel_short => 'Atmung',
           //text_undertitel_h2 => 'Permanente Atemspannung und Oberkörperbalance',
           text_undertitel_h2 => 'Funktion der Atemspannung und Oberkörperbalance',
           //text_titel_discr_h3 => 'Wie die Atmung über die Gegenspannung zwischen der ringförmigen Bauchmuskulatur und dem Zwerchfell den Oberkörper aufrichtet, ihn aufschweben lässt und ihm über weitere Muskeln Stabilität und Balance gibt',
           //text_titel_discr_h3 => 'Die permanente Gegenspannung zwischen der ringförmigen Bauchmuskulatur und dem Zwerchfell richtet den Oberkörper auf, lässt ihn aufschweben und gibt ihm über weitere Muskeln Stabilität und Balance',
           text_titel_discr_h3 => 'Die Atemspannung, die permanente Gegenspannung zwischen der ringförmigen Bauchmuskulatur und dem Zwerchfell, richtet den Oberkörper auf, lässt ihn aufschweben und gibt ihm über weitere Muskeln Stabilität und Balance',
           jump_ary => array(
                  'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:Fig-AnatomieRingfoermigeBauchmuskulatur' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:Fig-AnatomieZwerchfellAlleine' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:Fig-AnatomieZwerchfellKombi' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:Fig-AnatomieGeradeBauchmuskulatur' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:Fig-AnatomieAeussereSeitlicheBauchmuskulatur' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:Fig-AnatomieSeitlicheRueckemuskulatur' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:Fig-AnatomieLangeBrustkorbmuskulatur' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                    'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:AtemspannungOberkoeperbalancespannung' => array( headline_text => 'Atemspannung und Oberköperbalancespannung', headline_text_short => 'Atemspannung und Oberköperbalancespannung'),
                             
                  'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:KomplexAtmung' => array( headline_text => 'Komlexere Beschreibung der Atmung', headline_text_short => 'Komlexere Beschreibung der Atmung'),
                  'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:PhysioAtmung' => array( headline_text => 'Physiologie der Atmung', headline_text_short => 'Physiologie der Atmung'),
                  'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:Gesang' => array( headline_text => 'Gesang', headline_text_short => 'Gesang'),
                  'OM:SpaLeb:Atmung-Bauch-Zwerchfell-Stabilitaet:StirnNasennebenhoehlen' => array( headline_text => 'Stirn- und Nasennebenhöhlen', headline_text_short => 'Stirn- und Nasennebenhöhlen'),
                ),
         ),
  'OM:SpaLeb:Bewusstsein' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Bewusstsein-Physik-Leben-Regelprozesse_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Bewusstsein-Physik-Leben-Regelprozesse_de.php',
           titel => 'Das Bewusstsein – Physik und Leben auf Basis von Regelprozessen - Spannungsspiel des Lebens - Deutsch',
           description => 'Physik und Leben auf Basis von Regelprozessen. Eine Überlegung, wie wir uns Bewusstsein ganz grundsätzlich physikalisch vorstellen können und wie Leben zu verstehen ist.',
           keywords => '',
           text_titel_h1 => 'Das Bewusstsein',
           //text_titel_h1 => 'Das Bewusstsein \\\\ \\color{*TitleAdd}{\\small{in der Physik auf Basis von Regelprozessen}}',
           text_titel_short => 'Bewusstsein',
           text_undertitel_h2 => 'Physik und Leben auf Basis von Regelprozessen',
           text_titel_discr_h3 => 'Eine Überlegung, wie wir uns Bewusstsein ganz grundsätzlich physikalisch vorstellen können und wie Leben zu verstehen ist',
           jump_ary => array(
                  'OM:SpaLeb:Bewusstsein:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:SpaLeb:Bewusstsein:Vortext:Elementarprozess' => array( headline_text => 'Der Elementarprozess \\color{*TitleAdd}{– (Eigen-)Resonanz in Regelprozessen}', headline_text_short => 'Der Elementarprozess'),
                    'OM:SpaLeb:Bewusstsein:Vortext:ElementarBewusstsein' => array( headline_text => 'Elementares Bewusstsein', headline_text_short => 'Elementares Bewusstsein'),
                    'OM:SpaLeb:Bewusstsein:Vortext:RudimentaeresBewusstsein' => array( headline_text => 'Rudimentäres Bewusstsein, Lernen und Erinnern', headline_text_short => 'Rudimentäres Bewusstsein'),
                    'OM:SpaLeb:Bewusstsein:Vortext:KognitivesBewusstsein' => array( headline_text => 'Kognitives Bewusstsein, Lernen und Erinnern', headline_text_short => 'Kognitives Bewusstsein'),

                  // 'OM:SpaLeb:Bewusstsein:InformationIstWirkung' => array( headline_text => 'Information ist Wirkung', headline_text_short => 'Information ist Wirkung'),
                ),
         ),
  'OM:SpaLeb:Demenz' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Demenz-Konzentrationsstoerungen-Alzheimer-Parkinson_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Demenz-Konzentrationsstoerungen-Alzheimer-Parkinson_de.php',
           titel => 'Demenz wie Konzentrationsstörungen, Alzheimer und Parkinson - Spannungsspiel des Lebens - Deutsch',
           description => 'Demenz wie Konzentrationsstörungen, Alzheimer und Parkinson im Licht des Prinzips des Lebens.',
           keywords => '',
           text_titel_h1 => 'Demenz wie Konzentrationsstörungen, Alzheimer und Parkinson',
           text_titel_short => 'Demenz wie Konzentrationsstörungen, Alzheimer und Parkinson',
           text_undertitel_h2 => 'Chronische Prozesse im Nervensystem könnten an der Entstehung von Demenzerkrankungen beteiligt sein',
           //text_titel_discr_h3 => 'Ein tiefes Verständnis von Raum, Zeit und Existenz ist notwendig, um die grundlegenden Probleme der heutigen Physik zu lösen; die Physik zu vereinheitlichen.',
           jump_ary => array(
                  //'OM:SpaLeb:Demenz:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                             
                  'OM:SpaLeb:Demenz:Konzentrationsstoerungen' => array( headline_text => 'Konzentrationsstörungen', headline_text_short => 'Konzentrationsstörungen'),
                  'OM:SpaLeb:Demenz:Alzheimer-Parkinson' => array( headline_text => 'Alzheimer und Parkinson', headline_text_short => 'Alzheimer und Parkinson'),
                ),
         ),
  'OM:SpaLeb:Diskussion' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Diskussion_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Diskussion_de.php',
           titel => 'Diskussion - Spannungsspiel des Lebens - Deutsch',
           description => 'Diskussionen von Themen und Begriffen zum ›Spannungsspiel des Lebens‹.',
           keywords => '',
           text_titel_h1 => 'Diskussion',
           text_titel_short => 'Diskussion',
           text_undertitel_h2 => 'Umfassendere Beleuchtung des ›Spannungsspiels des Lebens‹',
           //text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:SpaLeb:Diskussion:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                  'OM:SpaLeb:Diskussion:Achtsamkeit' => array( headline_text => 'Achtsamkeit', headline_text_short => 'Achtsamkeit'),
                ),
         ),
  'OM:SpaLeb:Einleitung' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Einleitung_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Einleitung_de.php',
           titel => 'Einleitung - Spannungsspiel des Lebens - Deutsch',
           description => 'Was ist Leben? (Ⅰ)',
           keywords => '',
           text_titel_h1 => 'Einleitung',
           text_titel_short => 'Einleitung',
           text_undertitel_h2 => 'Was ist Leben? (Ⅰ)',
           //text_titel_discr_h3 => 'Ein tiefes Verständnis von Raum, Zeit und Existenz ist notwendig, um die grundlegenden Probleme der heutigen Physik zu lösen; die Physik zu vereinheitlichen.',
           jump_ary => array(
                  //'OM:FrQFT:Einleitung:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:SpaLeb:Ernaehrung-Spannung-und-Gewicht' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Ernaehrung-innere-Spannung-und-Gewicht_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Ernaehrung-innere-Spannung-und-Gewicht_de.php',
           titel => 'Ernährung, innere Spannung und Körpergewicht/Übergewicht - Spannungsspiel des Lebens - Deutsch',
           description => 'Ernährung, innere Spannung und Körpergewicht/Übergewicht im Licht des Prinzips des Lebens.',
           keywords => '',
           text_titel_h1 => 'Ernährung, innere Spannung und Körpergewicht/Übergewicht',
           text_titel_short => 'Ernährung, innere Spannung und Körpergewicht',
           text_undertitel_h2 => 'Die Ernährung beeinflusst die innere Spannung und darüber auch das Körpergewicht – du bist, was du isst',
           //text_titel_discr_h3 => 'Ein tiefes Verständnis von Raum, Zeit und Existenz ist notwendig, um die grundlegenden Probleme der heutigen Physik zu lösen; die Physik zu vereinheitlichen.',
           jump_ary => array(
                  //'OM:SpaLeb:Ernaehrung-Spannung-und-Gewicht:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                             
                  'OM:SpaLeb:Ernaehrung-Spannung-und-Gewicht:Nahrungsmittel' => array( headline_text => 'Nahrungsmittel beeinflussen die innere Spannung', headline_text_short => 'Nahrungsmittel beeinflussen die innere Spannung'),
                  'OM:SpaLeb:Ernaehrung-Spannung-und-Gewicht:StresssignaleUebergewicht' => array( headline_text => 'Stresssignale befördern das Übergewicht', headline_text_short => 'Stresssignale befördern das Übergewicht'),
                  'OM:SpaLeb:Ernaehrung-Spannung-und-Gewicht:SchonhaltungenGrundenergieverbrauch' => array( headline_text => 'Schonhaltungen und Grundenergieverbrauch', headline_text_short => 'Schonhaltungen und Grundenergieverbrauch'),
                ),
         ),
  'OM:SpaLeb:Gesangstechnik' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Gesangstechnik_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Gesangstechnik_de.php',
           titel => 'Gesangstechnik - Spannungsspiel des Lebens - Deutsch',
           description => 'Singen nach dem ›Spannungsspiel des Lebens‹. Mit Wissen über die Funktion der Atemspannung, Oberkörperbalance und Standstabilität, mit tieferem Verständnis des Achtsamkeitsprozesses und mit pubertärer Experimentierfreude besser singen lernen.',
           keywords => '',
           text_titel_h1 => 'Gesangstechnik (Vocal-Coaching)',
           text_titel_short => 'Gesangstechnik',
           text_undertitel_h2 => 'Singen nach dem ›Spannungsspiel des Lebens‹',
           text_titel_discr_h3 => 'Mit Wissen über die Funktion der Atemspannung, Oberkörperbalance und Standstabilität, mit tieferem Verständnis des Achtsamkeitsprozesses und mit pubertärer Experimentierfreude besser singen lernen',
           jump_ary => array(
                  'OM:SpaLeb:Gesangstechnik:Uebungsvorbereitung' => array( headline_text => 'Übungsvorbereitung', headline_text_short => 'Übungsvorbereitung'),
                ),
         ),
  'OM:SpaLeb:Gesichtsausdruck' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Gesichtshaelften-Gesichtsausdruck-Gesichtsspiegelung_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Gesichtshaelften-Gesichtsausdruck-Gesichtsspiegelung_de.php',
           titel => 'Gesichtshälften, Gesichtsspannung und Gesichtsspiegelung - Spannungsspiel des Lebens - Deutsch',
           // -> Gesichtssymmetrie wg Google?
           description => 'Erkenne deine beiden Gesichter, die Balance deiner Achtsamkeit. Deine Gesichtshälften, ein Ausdruck der Balance deines Achtsamkeitsprozesses. Die Muskel- und Faszienspannung deines Gesichts und ihre Verbindung zu deinem Achtsamkeitsprozess; zum linken und rechten Pol deines Gehirns – zur eher rationalen und eher emotionalen Seite.',
           keywords => '',
           text_titel_h1 => 'Gesichtshälften, Gesichtsausdruck und Gesichtsspiegelung',
           text_titel_short => 'Gesichtshälften, Gesichtsausdruck und Gesichtsspiegelung',
           //text_undertitel_h2 => 'Stell dich deinem Gesicht'/*'Zeig mir dein Gesicht'*/,
           //text_undertitel_h2 => 'Erkenne deine beiden Gesichter, die Balance deiner Achtsamkeit',
           text_undertitel_h2 => 'Erkenne deine beiden Gesichter, den Zustand und die Balance deiner Achtsamkeit',
           //text_titel_discr_h3 => 'Die Muskel- und Faszienspannung des Gesichts und ihre Verbindung mit dem linken und rechten Pol des Gehirns – die rationale und emotionale Hälfte des Gehirns – sowie mit der Psyche und Stimme',
           //text_titel_discr_h3 => 'Die Differenz deiner Gesichtshälften, ein Ausdruck der Balance deines Achtsamkeitsprozesses',
           //text_titel_discr_h3 => 'Deine Gesichtshälften spiegeln in ihrem Ausdruck den Gefühls-Pol und den Handlungs-Pol deines Achtsamkeitsprozesses wider, die Spezialisierung deiner Gehirmhälften – die Lateralisation deines Gehirns',
           text_titel_discr_h3 => 'Deine Gesichtshälften spiegeln in ihrem Ausdruck den Gefühlspol und den Denk-/Handlungspol deines Achtsamkeitsprozesses wider, die Spezialisierung deiner Gehirnhälften – die Lateralisation deines Gehirns',
           jump_ary => array(
                  'OM:SpaLeb:Gesichtsausdruck:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:SpaLeb:Gesichtsausdruck:Vortext:Fig-KirstenBlockDoppelrechtesGesicht' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Vortext:Fig-KirstenBlockDoppellinkesGesicht' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Vortext:Fig-AchtsamkeitsprozessBewWiss' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Vortext:Fig-Achtsamkeitsprozess' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Vortext:Fig-Hermesstab' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Vortext:Fig-Kundalini-Prozess' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Vortext:Fig-Gefuehls-Handlungspol-Waage' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Vortext:Fig-AugeDesRa' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Vortext:Fig-AugeDesHorus' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Vortext:Fig-LebenDesHorusHermesstab' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                             
                  'OM:SpaLeb:Gesichtsausdruck:YogaTantra' => array( headline_text => 'Hatha Yoga und Tantra', headline_text_short => 'Hatha Yoga und Tantra'),
                             
                  'OM:SpaLeb:Gesichtsausdruck:SozialeKomponente' => array( headline_text => 'Die soziale Komponente', headline_text_short => 'Die soziale Komponente'),
                             
                  'OM:SpaLeb:Gesichtsausdruck:UnbefelltesGesicht' => array( headline_text => 'Unbefelltes Gesicht?', headline_text_short => 'Unbefelltes Gesicht?'),
                             
                  'OM:SpaLeb:Gesichtsausdruck:Psyche' => array( headline_text => 'Gesichtsausdruck und Psyche', headline_text_short => 'Gesichtsausdruck und Psyche'),
                             
                  'OM:SpaLeb:Gesichtsausdruck:Muskulatur' => array( headline_text => 'Gesichtsausdruck, Stimme und Muskulatur', headline_text_short => 'Gesichtsausdruck, Stimme und Muskulatur'),
                             
                  'OM:SpaLeb:Gesichtsausdruck:AufgabenteilungGehirnhaelften' => array( headline_text => 'Aufgabenteilung der Gehirnhälften', headline_text_short => 'Aufgabenteilung der Gehirnhälften'),
                             
                  'OM:SpaLeb:Gesichtsausdruck:Gesichtsspiegelung' => array( headline_text => 'Gesichtsspiegelung', headline_text_short => 'Gesichtsspiegelung'),
                    'OM:SpaLeb:Gesichtsausdruck:Gesichtsspiegelung:Fig-TomOriginalesGesicht' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Gesichtsspiegelung:Fig-TomGespiegeltesGesicht' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Gesichtsspiegelung:Fig-TomDoppellinkesGesicht' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Gesichtsspiegelung:Fig-TomDoppelrechtesGesicht' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:Gesichtsspiegelung:Kunst' => array( headline_text => 'Kunst', headline_text_short => 'Kunst'),
                             
                  'OM:SpaLeb:Gesichtsausdruck:FaceYourFaceApp' => array( headline_text => 'FaceYourFace App \\small{\\color{*TitleAdd}{(Face Your Face App)}}', headline_text_short => 'FaceYourFace App'),
                    'OM:SpaLeb:Gesichtsausdruck:FaceYourFaceApp:Fig-TomDoppelrechtesGesicht' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Gesichtsausdruck:FaceYourFaceApp:Fig-TomDoppellinkesGesicht' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                ),
         ),
  'OM:SpaLeb:Gesundheit-Heilung' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Gesundheit-Heilung.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Gesundheit-Heilung.php',
           titel => 'Gesundheit und Heilung - Spannungsspiel des Lebens - Deutsch',
           // -> Gesichtssymmetrie wg Google?
           description => '\\name[undertitle]{OM:SpaLeb:Gesundheit-Heilung}. — \\name[description]{OM:SpaLeb:Gesundheit-Heilung}.',
           keywords => '',
           text_titel_h1 => 'Gesundheit und Heilung',
           text_titel_short => 'Gesundheit und Heilung',
           text_undertitel_h2 => 'Gesundheit und Heilung lassen sich nicht delegieren',
           text_titel_discr_h3 => 'Jede Form von Heilung ist immer eine Selbstheilung. Wir können diese unterstützen und uns dabei von anderen helfen lassen',
           jump_ary => array(
                  'OM:SpaLeb:Gesundheit-Heilung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    // 'OM:SpaLeb:Gesundheit-Heilung:Vortext:Fig-XXX' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                  'OM:SpaLeb:Gesundheit-Heilung:HeilungSchlaf' => array( headline_text => 'Heilung und Schlaf'/*, headline_text_short => 'XXX'*/),
                    'OM:SpaLeb:Gesundheit-Heilung:HeilungSchlaf:HeilungImSchlaf' => array( headline_text => 'Heilung im Schlaf'/*, headline_text_short => 'XXX'*/),
                ),
         ),
  'OM:SpaLeb:Glueck' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Glueck-Sinn-Spannend-Leben.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Glueck-Sinn-Spannend-Leben.php',
           titel => 'Glück, Sinn und angenehme Spannung im Leben - Spannungsspiel des Lebens - Deutsch',
           description => 'Stellen wir die Frage nach dem Sinn des Lebens auch, wenn wir glücklich sind? Das Leben und seinen Sinn verstehen – geht das?',
           keywords => '',
           text_titel_h1 => 'Glück, Sinn und angenehme Spannung im Leben',
           text_titel_short => 'Glück, Sinn und angenehme Spannung im Leben',
           // text_undertitel_h2 => 'Wie führen wir ein glückliches, mit Sinn erfülltes und angenehm spannendes Leben? Stellen wir die Frage nach dem Sinn unseres Lebens, wenn wir glücklich sind?',
           text_undertitel_h2 => 'Stellen wir die Frage nach dem Sinn des Lebens auch, wenn wir glücklich sind?',
           text_titel_discr_h3 => 'Das Leben und seinen Sinn verstehen – geht das?',
           jump_ary => array(
                  'OM:SpaLeb:Glueck:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                  'OM:SpaLeb:Glueck:Resilienz' => array( headline_text => 'Resilienz', headline_text_short => 'Resilienz'),
                ),
         ),
  'OM:SpaLeb:Information-Kommunikation' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Information-und-Kommunikation-Rueckkopplung-Regelprozesse.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Information-und-Kommunikation-Rueckkopplung-Regelprozesse.php',
           titel => 'Information und Kommunikation - Spannungsspiel des Lebens - Deutsch',
           description => 'Information gewinnt erst in einem rückgekoppelten System nachhaltigen Sinn und wird so zur Kommunikation.',
           keywords => '',
           text_titel_h1 => 'Information und Kommunikation',
           text_titel_short => 'Information und Kommunikation',
           text_undertitel_h2 => 'Information gewinnt erst in einem rückgekoppelten System nachhaltigen Sinn und wird so zur Kommunikation',
           text_titel_discr_h3 => '',
           jump_ary => array(
                  'OM:SpaLeb:Information-Kommunikation:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:SpaLeb:Information-Kommunikation:Vortext:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:SpaLeb:Koerperliche-und-seelische-Existenz' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Koerperliche-seelische-Existenz_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Koerperliche-seelische-Existenz_de.php',
           titel => 'Körperliche und seelische Existenz - Spannungsspiel des Lebens - Deutsch',
           description => 'Körperliche und seelische Existenz im Licht des Prinzips des Lebens.',
           keywords => '',
           text_titel_h1 => 'Körperliche und seelische Existenz',
           text_titel_short => 'Körperliche und seelische Existenz',
           //text_undertitel_h2 => 'Ein Prinzip für Alles – A Theory of Everything (TOE)',
           text_undertitel_h2 => 'Trenne nicht Dinge, die zwei Seiten der selben Medaille sind',
           //text_titel_discr_h3 => 'Ein tiefes Verständnis von Raum, Zeit und Existenz ist notwendig, um die grundlegenden Probleme der heutigen Physik zu lösen; die Physik zu vereinheitlichen.',
           jump_ary => array(
                  //'OM:SpaLeb:Koerperliche-und-seelische-Existenz:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                             
                  'OM:SpaLeb:Koerperliche-und-seelische-Existenz:OrganischesExistenzprinzip' => array( headline_text => 'Biologisches Existenzprinzip \\color{*FigDescr}{<small>(organisches Existenzprinzip)</small>}', headline_text_short => 'Biologisches Existenzprinzip'),
                    'OM:SpaLeb:Koerperliche-und-seelische-Existenz:OrganischesExistenzprinzip:SpanPrinz' => array( headline_text => 'Spannungsprinzip – Stabilisierung des Körpers', headline_text_short => 'Spannungsprinzip'),
                    'OM:SpaLeb:Koerperliche-und-seelische-Existenz:OrganischesExistenzprinzip:DisharmPrinz' => array( headline_text => 'Disharmonieprinzip – Antrieb der Seele', headline_text_short => 'Disharmonieprinzip'),
                  'OM:SpaLeb:Koerperliche-und-seelische-Existenz:RitualFortentwicklung' => array( headline_text => 'Ewige Fortentwicklung und stabilisierendes Ritual', headline_text_short => 'Fortentwicklung und Ritual'),
                    'OM:SpaLeb:Koerperliche-und-seelische-Existenz:RitualFortentwicklung:DjetNehehDual' => array( headline_text => 'Der Djet-Neheh-Dualismus', headline_text_short => 'Der Djet-Neheh-Dualismus'),
                    'OM:SpaLeb:Koerperliche-und-seelische-Existenz:RitualFortentwicklung:DjetNehehPhys' => array( headline_text => 'Djet und Neheh in der Physik', headline_text_short => 'Djet und Neheh in der Physik'),
                  'OM:SpaLeb:Koerperliche-und-seelische-Existenz:Spannungsbiologie' => array( headline_text => 'Spannungsbiologie', headline_text_short => 'Spannungsbiologie'),
                    'OM:SpaLeb:Koerperliche-und-seelische-Existenz:Spannungsbiologie:Quantenbiologie' => array( headline_text => 'Quantenbiologie', headline_text_short => 'Quantenbiologie'),
                    'OM:SpaLeb:Koerperliche-und-seelische-Existenz:Spannungsbiologie:KIundRobotik' => array( headline_text => 'Künstliche Intelligenz und Robotik', headline_text_short => 'Künstliche Intelligenz und Robotik'),
                  'OM:SpaLeb:Koerperliche-und-seelische-Existenz:ErkenneDichSelbst' => array( headline_text => 'Erkenne dich selbst', headline_text_short => 'Erkenne dich selbst'),
                  'OM:SpaLeb:Koerperliche-und-seelische-Existenz:SeeleIstVerhalten' => array( headline_text => 'Seele ist Antrieb und resultierendes Verhalten', headline_text_short => 'Seele ist Antrieb'),
                  'OM:SpaLeb:Koerperliche-und-seelische-Existenz:KoerperSpaPsycheSpiegelbilder' => array( headline_text => 'Körperspannung und Psyche sind Spiegelbilder', headline_text_short => 'Körperspannung und Psyche'),
                  'OM:SpaLeb:Koerperliche-und-seelische-Existenz:Urvertrauen' => array( headline_text => 'Urvertrauen', headline_text_short => 'Urvertrauen'),
                  'OM:SpaLeb:Koerperliche-und-seelische-Existenz:DauerhafteUndGesundeExistenz' => array( headline_text => 'Dauerhafte, gesunde Existenz und Gesellschaft', headline_text_short => 'Dauerhafte, gesunde Existenz und Gesellschaft'),
                ),
         ),
  'OM:SpaLeb:Koerperspannung' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Koerperspannung_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Koerperspannung_de.php',
           titel => 'Körperspannung - Spannungsspiel des Lebens - Deutsch',
           description => 'Körperspannung, Körper, Seele und Psychosomatik, im Licht des Prinzips des Lebens.',
           keywords => '',
           text_titel_h1 => 'Körperspannung',
           text_titel_short => 'Körperspannung',
           //text_undertitel_h2 => 'Wie Brüche und neue Balancen mit Körperspannung und Verspannungen sowie mit Psyche, Stimmung, Emotionalität und Geist in Wechselwirkung stehen',
           text_undertitel_h2 => 'Körper, Seele und Psychosomatik',
           //text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:SpaLeb:Koerperspannung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                  'OM:SpaLeb:Koerperspannung:Fortentwicklung-und-Stabilisierung' => array( headline_text => 'Spannungsfeld Fortentwicklung und Stabilisierung', headline_text_short => 'Spannungsfeld Fortentwicklung und Stabilisierung'),
                  'OM:SpaLeb:Koerperspannung:Muskeln-Faszien-und-Knochen' => array( headline_text => 'Muskeln, Faszien und Knochen', headline_text_short => 'Muskeln, Faszien und Knochen'),
                  'OM:SpaLeb:Koerperspannung:DasAnatomieMenschchen' => array( headline_text => 'Das Anatomie-Menschchen', headline_text_short => 'Das Anatomie-Menschchen'),
                  'OM:SpaLeb:Koerperspannung:Gegenfaszien' => array( headline_text => 'Gegenmuskulatur  \\color{*TitleAdd}{<small>(Gegenfaszien)</small>}', headline_text_short => 'Gegenmuskulatur'),
                  'OM:SpaLeb:Koerperspannung:Atemspannung-und-Oberkoerperbalance' => array( headline_text => 'Atemspannung und Oberkörperbalance', headline_text_short => 'Atemspannung und Oberkörperbalance'),
                    'OM:SpaLeb:Koerperspannung:Atemspannung-und-Oberkoerperbalance:Fig-AnatomieRingfoermigeBauchmuskulatur' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Koerperspannung:Atemspannung-und-Oberkoerperbalance:Fig-AnatomieZwerchfellKombi' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                  'OM:SpaLeb:Koerperspannung:Bewegung' => array( headline_text => 'Bewegung', headline_text_short => 'Bewegung'),
                  //'OM:SpaLeb:Koerperspannung:Aengste-und-Selbstschutz' => array( headline_text => 'Ängste und Selbstschutz', headline_text_short => 'Ängste und Selbstschutz'),
                  'OM:SpaLeb:Koerperspannung:Aengste-und-Selbstschutz' => array( headline_text => 'Psychosomatische Urreflexe auf Stress', headline_text_short => 'Psychosomatische Urreflexe auf Stress'),
                  'OM:SpaLeb:Koerperspannung:Schonhaltung' => array( headline_text => 'Körperliche Schonhaltung', headline_text_short => 'Körperliche Schonhaltung'),
                  'OM:SpaLeb:Koerperspannung:Verspannungen' => array( headline_text => 'Verspannungen', headline_text_short => 'Verspannungen'),
                  'OM:SpaLeb:Koerperspannung:Widerstand' => array( headline_text => 'Widerstand', headline_text_short => 'Widerstand'),
                  'OM:SpaLeb:Koerperspannung:AktivesSchlafen' => array( headline_text => 'Aktives Schlafen', headline_text_short => 'Aktives Schlafen'),
                  'OM:SpaLeb:Koerperspannung:SpannungsfeldEmotionVerstand' => array( headline_text => 'Spannungsfeld Emotion und Verstand', headline_text_short => 'Spannungsfeld Emotion und Verstand'),
                  'OM:SpaLeb:Koerperspannung:Gehirnhaelften' => array( headline_text => 'Linke und rechte Gehirnhälfte', headline_text_short => 'Linke und rechte Gehirnhälfte'),
                  'OM:SpaLeb:Koerperspannung:Gesichtsspannung' => array( headline_text => 'Gesichtsspannung', headline_text_short => 'Gesichtsspannung'),
                  'OM:SpaLeb:Koerperspannung:Sexualitaet' => array( headline_text => 'Sexualität', headline_text_short => 'Sexualität'),
                  'OM:SpaLeb:Koerperspannung:Praevention-und-Hilfe' => array( headline_text => 'Prävention und Hilfe', headline_text_short => 'Prävention und Hilfe'),
                ),
         ),
  'OM:SpaLeb:KIundRobotik' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Kuenstliche-Inteligenz-Robotik_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Kuenstliche-Inteligenz-Robotik_de.php',
           titel => 'Künstliche Intelligenz und Robotik - Spannungsspiel des Lebens - Deutsch',
           description => 'Menschenähnliche Künstliche Intelligenz und Robotik sind nur über einen zentralen Regelprozess des (körperlichen) Lernens möglich. Die Nachbildung des Achtsamkeitsprozesses des Lebens.',
           keywords => '',
           text_titel_h1 => 'Künstliche Intelligenz und Robotik',
           text_titel_short => 'Künstliche Intelligenz und Robotik',
           text_undertitel_h2 => 'Die Nachbildung des Achtsamkeitsprozesses des Lebens',
           text_titel_discr_h3 => 'Menschenähnliche Künstliche Intelligenz und Robotik sind nur über einen zentralen Regelprozess des (körperlichen) Lernens möglich',
           jump_ary => array(
                  'OM:SpaLeb:KIundRobotik:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
   'OM:SpaLeb:Literatur' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Literatur_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Literatur_de.php',
           titel => 'Literatur - Spannungsspiel des Lebens - Deutsch',
           description => 'Literatur zum ›Spannungsspiel des Lebens‹.',
           keywords => '',
           text_titel_h1 => 'Literatur',
           text_titel_short => 'Literatur',
           text_undertitel_h2 => 'und Informationen',
           text_titel_discr_h3 => '',
           jump_ary => array(
                ),
         ),
  'OM:SpaLeb:Meditation-Selbstakupressur' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Meditation-Selbstakupressur_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Meditation-Selbstakupressur_de.php',
           titel => 'Meditation mit Selbstakupressur - Spannungsspiel des Lebens - Deutsch',
           description => 'Achtsamkeitsmeditation und der magische Selbstschutz – Durch sanfte Akupressur versteckte psychosomatische Schmerzen aufspüren und in achtsamer Meditation einen Prozess der Veränderung und Verarbeitung anstoßen.',
           keywords => '',
           text_titel_h1 => 'Meditation mit Selbstakupressur',
           text_titel_short => 'Meditation mit Selbstakupressur',
           text_undertitel_h2 => 'Achtsamkeitsmeditation und der magische Selbstschutz',
           text_titel_discr_h3 => 'Durch sanfte Akupressur versteckte psychosomatische Schmerzen aufspüren und in achtsamer Meditation einen Prozess der Veränderung und Verarbeitung anstoßen',
           jump_ary => array(
                  'OM:SpaLeb:Meditation-Selbstakupressur:Achtsamkeitsprozess' => array( headline_text => 'Achtsamkeitsprozess und bessere Selbstwahrnehmung', headline_text_short => 'Achtsamkeitsprozess und Selbstwahrnehmung'),
                ),
         ),
  'OM:SpaLeb:Meetup-Yoga-Meets-Wissenschaft' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Meetup-Yoga-Alternativmedizin-meets-Wissenschaft-Medizin-Physik.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Meetup-Yoga-Alternativmedizin-meets-Wissenschaft-Medizin-Physik.php',
           titel => 'Meetup: Yoga, Alternativmedizin meets Wissenschaft, Medizin, Physik - Spannungsspiel des Lebens - Deutsch',
           description => 'Medizin, Psychologie, alternative Medizin (Heilpraktik) und Yoga können mit Hilfe des Modells des Achtsamkeitsprozesses im Zusammenhang verstanden werden. Unser Achtsamkeitsprozess, als zentraler Regelprozess des Lebens, ist die Grundlage unseres Gedeihens und unserer Heilung.',
           keywords => '',
           text_titel_h1 => 'Meetup: Yoga, Alternativmedizin meets Wissenschaft, Medizin, Physik',
           text_titel_short => 'Meetup: Yoga, Alternativmedizin meets Wissenschaft, Medizin, Physik',
           text_undertitel_h2 => 'Medizin, Psychologie, alternative Medizin (Heilpraktik) und Yoga können mit Hilfe des Modells des Achtsamkeitsprozesses im Zusammenhang verstanden werden',
           //text_titel_discr_h3 => 'Unser Achtsamkeitsprozess, als zentraler Regelprozess des Lebens, ist die Grundlage unseres Gedeihens und unserer Heilung',
           jump_ary => array(
                  'OM:SpaLeb:Meetup-Yoga-Meets-Wissenschaft:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:SpaLeb:Philosophie' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Philosophie.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Philosophie.php',
           titel => 'Philosophie - Spannungsspiel des Lebens - Deutsch',
           description => 'Die Wichtigkeit des Philosophierens für unsere Persönlichkeitsentwicklung, unser Wohlbefinden und unsere Gesundheit neu verstehen. — Philosophieren trägt nicht nur analytische, sondern auch starke psychotherapeutische und körpertherapeutische Anteile in sich.',
           keywords => '',
           text_titel_h1 => 'Philosophie',
           text_titel_short => 'Philosophie',
           text_undertitel_h2 => 'Die Wichtigkeit des Philosophierens für unsere Persönlichkeitsentwicklung, unser Wohlbefinden und unsere Gesundheit neu verstehen',
           text_titel_discr_h3 => 'Philosophieren trägt nicht nur analytische, sondern auch starke psychotherapeutische und körpertherapeutische Anteile in sich',
           jump_ary => array(
                  'OM:SpaLeb:Philosophie:SinnBedeuExistenz' => array( headline_text => 'Sinnstiftung bedeutet Existenzstiftung', headline_text_short => 'Sinnstiftung bedeutet Existenzstiftung'),
                ),
         ),
  'OM:SpaLeb:Psyche-und-Stimmung' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Psyche-und-Stimmung_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Psyche-und-Stimmung_de.php',
           titel => 'Psyche, Stimmung, Emotionalität und Geist - Spannungsspiel des Lebens - Deutsch',
           //description => 'Psyche, Stimmung, Emotionalität und Geist im Licht des Prinzips des Lebens.',
           description => 'Unsere Psyche: Der Achtsamkeitsprozess als zentraler Prozess unseres Lebens und Überlebens. Lebenslang leben lernen, uns selber kennenlernen und erforschen.',
           keywords => '',
           text_titel_h1 => 'Psyche, Stimmung, Emotionalität und Geist',
           text_titel_short => 'Psyche, Stimmung, Emotionalität und Geist',
           //text_undertitel_h2 => 'Wie Brüche und neue Balancen mit Psyche, Stimmung, Emotionalität sowie Geist und auch mit dem Körper in Wechselwirkung stehen',
           text_undertitel_h2 => 'Der Achtsamkeitsprozess als zentraler Prozess unseres Lebens und Überlebens',
           text_titel_discr_h3 => 'Lebenslang leben lernen, uns selber kennenlernen und erforschen',
           jump_ary => array(
                  'OM:SpaLeb:Psyche-und-Stimmung:Achtsamkeitsprozess' => array( headline_text => 'Achtsamkeitsprozess', headline_text_short => 'Achtsamkeitsprozess'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Geburt' => array( headline_text => 'Geburt', headline_text_short => 'Geburt'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Pubertaet' => array( headline_text => 'Pubertät', headline_text_short => 'Pubertät'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Individualitaet-und-Gesellschaft' => array( headline_text => 'Individualität, Familie und Gesellschaft', headline_text_short => 'Individualität, Familie und Gesellschaft'),
                  'OM:SpaLeb:Psyche-und-Stimmung:BewusstseinWahrnehmung' => array( headline_text => 'Bewusstsein und Wahrnehmung', headline_text_short => 'Bewusstsein und Wahrnehmung'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Selbstmitgefuehl' => array( headline_text => 'Traumata, Selbstschutz und Selbstmitgefühl', headline_text_short => 'Traumata, Selbstschutz und Selbstmitgefühl'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Verspannungen-Kreisgedanken' => array( headline_text => 'Verspannungen und Kreisgedanken', headline_text_short => 'Verspannungen und Kreisgedanken'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Widerstand-und-Umlenkung' => array( headline_text => 'Widerstand und Umlenkung', headline_text_short => 'Widerstand und Umlenkung'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Staerke' => array( headline_text => 'Stärke und Resilienz', headline_text_short => 'Stärke und Resilienz'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Schonhaltung' => array( headline_text => 'Psychische Schonhaltung', headline_text_short => 'Psychische Schonhaltung'),
                  'OM:SpaLeb:Psyche-und-Stimmung:In-Fesseln-tanzen' => array( headline_text => 'In Fesseln tanzen'/* (!!! Vorsicht, denn es gibt das Buch: „In Ketten Tanzen“ !!!) */, headline_text_short => 'In Fesseln tanzen'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Schmerz' => array( headline_text => 'Schmerz und Angst', headline_text_short => 'Schmerz und Angst'),
                  'OM:SpaLeb:Psyche-und-Stimmung:HektikFleckma' => array( headline_text => 'Hektik oder Fleckma', headline_text_short => 'Hektik oder Fleckma'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Stimmung' => array( headline_text => 'Stimmung und Empfänglichkeit', headline_text_short => 'Stimmung und Empfänglichkeit'),
                             
                  'OM:SpaLeb:Psyche-und-Stimmung:Vertrauen' => array( headline_text => 'Vertrauen', headline_text_short => 'Vertrauen'),
                    'OM:SpaLeb:Psyche-und-Stimmung:Vertrauen:LogBruch' => array( headline_text => 'Logische Brüche – unlogische Festlegungen', headline_text_short => 'Logische Brüche'),
                             
                  'OM:SpaLeb:Psyche-und-Stimmung:Motivation' => array( headline_text => 'Motivation', headline_text_short => 'Motivation'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Zwaenge' => array( headline_text => 'Zwänge', headline_text_short => 'Zwänge'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Abwechslung' => array( headline_text => 'Abwechslung', headline_text_short => 'Abwechslung'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Musse' => array( headline_text => 'Muße', headline_text_short => 'Muße'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Wahrheit' => array( headline_text => 'Wahrheit', headline_text_short => 'Wahrheit'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Ambiguitaetstoleranz' => array( headline_text => 'Ambiguitätstoleranz', headline_text_short => 'Ambiguitätstoleranz'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Entscheidungen' => array( headline_text => 'Die Kunst der Entscheidung', headline_text_short => 'Entscheidungen'),
                  'OM:SpaLeb:Psyche-und-Stimmung:GeschenkVerlust' => array( headline_text => 'Geschenk und Verlust', headline_text_short => 'Geschenk und Verlust'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Denken-und-Fuehlen' => array( headline_text => 'Denken und Fühlen', headline_text_short => 'Denken und Fühlen'),
                  'OM:SpaLeb:Psyche-und-Stimmung:Notizen' => array( headline_text => 'Notizen', headline_text_short => 'Notizen'),
                ),
         ),
  'OM:SpaLeb:Psychosomatik' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Psychosomatik.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Psychosomatik.php',
           titel => 'Die Psychosomatik - Spannungsspiel des Lebens - Deutsch',
           description => 'Psychosomatische Pole und Gradienten im Körper – unsere Selbstheilung. Der Achtsamkeitsprozess spiegelt sich in Polen und Verläufen – in Gradienten – unseres Körpers wider.',
           keywords => '',
           text_titel_h1 => 'Die Psychosomatik',
           text_titel_short => 'Die Psychosomatik',
           text_undertitel_h2 => 'Psychosomatische Pole und Gradienten im Körper – unsere Selbstheilung',
           text_titel_discr_h3 => 'Der Achtsamkeitsprozess spiegelt sich in Polen und Verläufen – in Gradienten – unseres Körpers wider',
           jump_ary => array(
                  'OM:SpaLeb:Psychosomatik:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:SpaLeb:Psychosomatik:Vortext:MehrGeschDetails' => array( headline_text => 'Mehr geschichtliche Details'/*, headline_text_short => ''*/),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Gefuehls-Handlungspol' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Hermesstab' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Hexagramm' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-LebenDesHorusHermesstab' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Handlungsgradient' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Gefuehlsgradient' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:Achtsamkeitsgradient' => array( headline_text => 'Der Achtsamkeitsgradient im menschlichen Körper'/* , headline_text_short =>  ''*/),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Achtsamkeitsgradient' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:AtmungEntlangAchtsamkeitsgradienten' => array( headline_text => 'Die Atmung läuft entlang des Achtsamkeitsgradienten'/*, headline_text_short =>  ''*/),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Atmung-Atemspannung' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:LoeseUndVerbinde' => array( headline_text => 'Löse und verbinde — ›solve et coagula‹', headline_text_short =>  'Löse und verbinde'),
                    'OM:SpaLeb:Psychosomatik:Vortext:KundaliniProzess' => array( headline_text => 'Der Kundalini-Prozess'/*, headline_text_short =>  ''*/),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Kundalini-Prozess' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:Care' => array( headline_text => 'Care oder Fürsorge'/*, headline_text_short =>  ''*/),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Herz-Chakra-Herzkreislauf-Atmung' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Herz-Chakra-Shiva-Shakti' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Hermesstab' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:Fig-Gefuehls-Handlungspol-Waage' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik:Vortext:Perspektiven' => array( headline_text => 'Das kluge Spiel mit unseren Perspektiven'/*, headline_text_short => ''*/),
                             
                  'OM:SpaLeb:Psychosomatik:Betaeubt-Gelaehmt' => array( headline_text => 'Betäubt und Gelähmt'/*, headline_text_short => ''*/),
                             
                  'OM:SpaLeb:Psychosomatik:Innerer-Marionettenspieler' => array( headline_text => 'Innerer Marionettenspieler'/*, headline_text_short => ''*/),
                             
                  'OM:SpaLeb:Psychosomatik:Aeusserer-Marionettenspieler' => array( headline_text => 'Äußerer Marionettenspieler'/*, headline_text_short => ''*/),
                ),
         ),
  'OM:SpaLeb:Psychosomatik-Entscheidungen' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Psychosomatik-unser-kluger-Umgang-mit-Entscheidungen.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Psychosomatik-unser-kluger-Umgang-mit-Entscheidungen.php',
           titel => 'Psychosomatik — unser kluger Umgang mit Entscheidungen - Spannungsspiel des Lebens - Deutsch',
           description => 'Das Spiel mit der Tolleranz von Ambiguitäten und deren Auflösungen. Vorschnelle Entscheidungen führen zur Hektik. Unaufgelöste Widersprüche in unseren Gefühlen und Handlungen erzeugen psychische und körperliche Blockaden – Verspannungen –, oder führen dazu, dass wir letargisch werden.',
           keywords => '',
           text_titel_h1 => 'Psychosomatik – unser kluger Umgang mit Entscheidungen',
           text_titel_short => 'Psychosomatik – unser kluger Umgang mit Entscheidungen',
           text_undertitel_h2 => 'Das Spiel mit der Tolleranz von Ambiguitäten und deren Auflösungen',
           text_titel_discr_h3 => 'Vorschnelle Entscheidungen führen zur Hektik. Unaufgelöste Widersprüche in unseren Gefühlen und Handlungen erzeugen psychische und körperliche Blockaden – Verspannungen –, oder führen dazu, dass wir letargisch werden',
           jump_ary => array(
                  'OM:SpaLeb:Psychosomatik-Entscheidungen:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:SpaLeb:Psychosomatik-Entscheidungen:Vortext:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                             
                  'OM:SpaLeb:Psychosomatik-Entscheidungen:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:SpaLeb:Psychosomatik-Stress' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Psychosomatische-Verspannungen-durch-Stress_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Psychosomatische-Verspannungen-durch-Stress_de.php',
           titel => 'Psychosomatische Verspannungen durch Stress - Spannungsspiel des Lebens - Deutsch',
           description => 'Auswirkungen von Stress auf den Körper durch psychosomatische Urreflexe. Chronischer Stress durch Sorgen und Ängste triggert über ursprüngliche Selbstschutzreflexe Muskeln und Faszien, die so chronisch und entzündlich Verspannen können, und kann Körperfunktionen unterdrücken.',
           keywords => '',
           text_titel_h1 => 'Psychosomatische Verspannungen durch Stress',
           text_titel_short => 'Psychosomatische Verspannungen durch Stress',
           text_undertitel_h2 => 'Auswirkungen von Stress auf den Körper durch psychosomatische Urreflexe',
           text_titel_discr_h3 => 'Chronischer Stress durch Sorgen und Ängste triggert über ursprüngliche Selbstschutzreflexe Muskeln und Faszien, die so chronisch und entzündlich Verspannen können, und kann Körperfunktionen unterdrücken',
           jump_ary => array(
                  'OM:SpaLeb:Psychosomatik-Stress:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                  'OM:SpaLeb:Psychosomatik-Stress:Erkenntnisweg' => array( headline_text => 'Erkenntnisweg', headline_text_short => 'Erkenntnisweg'),
                             
                  'OM:SpaLeb:Psychosomatik-Stress:EinatemreflexAtemunterdrueckung' => array( headline_text => 'Einatemreflex und Atemunterdrückung', headline_text_short => 'Einatemreflex und Atemunterdrückung'),
                    'OM:SpaLeb:Psychosomatik-Stress:EinatemreflexAtemunterdrueckung:Fig-AnatomieRingfoermigeBauchmuskulatur' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik-Stress:EinatemreflexAtemunterdrueckung:Fig-AnatomieZwerchfellAlleine' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik-Stress:EinatemreflexAtemunterdrueckung:Fig-AnatomieZwerchfellKombi' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik-Stress:EinatemreflexAtemunterdrueckung:Fig-AnatomieGeradeBauchmuskulatur' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik-Stress:EinatemreflexAtemunterdrueckung:Fig-AnatomieAeussereSeitlicheBauchmuskulatur' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik-Stress:EinatemreflexAtemunterdrueckung:Fig-AnatomieSeitlicheRueckemuskulatur' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:SpaLeb:Psychosomatik-Stress:EinatemreflexAtemunterdrueckung:Fig-AnatomieLangeBrustkorbmuskulatur' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                  'OM:SpaLeb:Psychosomatik-Stress:SchulterBeugeReflex' => array( headline_text => 'Schulterhochzieh- und Oberkörperbeugereflex', headline_text_short => 'Schulterhochzieh- und Oberkörperbeugereflex'),
                  'OM:SpaLeb:Psychosomatik-Stress:BoesesGesichtBeissreflex' => array( headline_text => 'Böses-Gesicht- und Beißreflex', headline_text_short => 'Böses-Gesicht- und Beißreflex'),
                  'OM:SpaLeb:Psychosomatik-Stress:FluchtAngriffsreflex' => array( headline_text => 'Flucht- und Angriffsreflex', headline_text_short => 'Flucht- und Angriffsreflex'),
                  'OM:SpaLeb:Psychosomatik-Stress:AnusGesaessreflex' => array( headline_text => 'Anus-Gesäß-Reflex', headline_text_short => 'Anus-Gesäß-Reflex'),
                  'OM:SpaLeb:Psychosomatik-Stress:NervenGehirn' => array( headline_text => 'Nerven und Gehirn', headline_text_short => 'Nerven und Gehirn'),
                  'OM:SpaLeb:Psychosomatik-Stress:Problemloesungsansaetze' => array( headline_text => 'Problemlösungsansätze', headline_text_short => 'Problemlösungsansätze'),
                ),
         ),
  'OM:SpaLeb:Rueckenschmerzen-Atmung-Zwerchfell' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Rueckenschmerzen-Bandscheibenvorfall-Atmung-Zwerchfell_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Rueckenschmerzen-Bandscheibenvorfall-Atmung-Zwerchfell_de.php',
           titel => 'Rückenschmerzen, Bandscheibenvorfall, Atmung und Zwerchfell - Spannungsspiel des Lebens - Deutsch',
           description => 'Die bisher unbekannte Rolle des Zwerchfells. Die Störung der Atemspannung kann massive gesundheitliche Probleme mit sich bringen.',
           keywords => '',
           text_titel_h1 => 'Rückenschmerzen, Bandscheibenvorfall, Atmung und Zwerchfell',
           text_titel_short => 'Rückenschmerzen und Bandscheibenvorfall',
           text_undertitel_h2 => 'Die bisher unbekannte Rolle des Zwerchfells',
           text_titel_discr_h3 => 'Die Störung der Atemspannung kann massive gesundheitliche Probleme mit sich bringen',
           jump_ary => array(
                  'OM:SpaLeb:Rueckenschmerzen-Atmung-Zwerchfell:ZwerchfellBandscheiben' => array( headline_text => 'Zwerchfell und Bauch-Ringspannung entlasten die Bandscheiben', headline_text_short => 'Zwerchfell und Bauch-Ringspannung entlasten die Bandscheiben'),
                  'OM:SpaLeb:Rueckenschmerzen-Atmung-Zwerchfell:ZwerchfellverspannungBauch-Zwerchfell-Schonhaltung' => array( headline_text => 'Zwerchfellverspannung führt zur Bauch-Zwerchfell-Schonhaltung', headline_text_short => 'Zwerchfellverspannung führt zur Bauch-Zwerchfell-Schonhaltung'),
                  'OM:SpaLeb:Rueckenschmerzen-Atmung-Zwerchfell:Bauch-Zwerchfell-SchonhaltungRueckenprobleme' => array( headline_text => 'Bauch-Zwerchfell-Schonhaltung führt zu Rückenschmerzen und Bandscheibenvorfall', headline_text_short => 'Bauch-Zwerchfell-Schonhaltung führt zu Rückenschmerzen und Bandscheibenvorfall'),
                ),
         ),
  'OM:SpaLeb:Schlaf-und-Aktivsein' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Schlaf-und-Aktivsein-Unterbewustsein-und-Bewusstsein.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Schlaf-und-Aktivsein-Unterbewustsein-und-Bewusstsein.php',
           titel => 'Schlaf und Aktivsein, Unterbewusstsein und Bewusstsein - Spannungsspiel des Lebens - Deutsch',
           description => 'Unser Schlaf entspringt dem Gefühlspol unseres Achtsamkeitsprozesses, unser Aktivsein unserem Handlungspol. Ebenso ist unser Unterbewusstsein mit unserem Schlaf und Gefühl verbunden, wie unser Bewusstsein mit unserem Aktivsein und unseren Handlungen.',
           keywords => '',
           text_titel_h1 => 'Schlaf und Aktivsein, Unterbewusstsein und Bewusstsein',
           text_titel_short => 'Schlaf und Aktivsein, Unterbewusstsein und Bewusstsein',
           text_undertitel_h2 => 'Unser Schlaf entspringt dem Gefühlspol unseres Achtsamkeitsprozesses, unser Aktivsein unserem Handlungspol',
           text_titel_discr_h3 => 'Ebenso ist unser Unterbewusstsein mit unserem Schlaf und Gefühl verbunden, wie unser Bewusstsein mit unserem Aktivsein und unseren Handlungen verbunden ist',
           jump_ary => array(
                  'OM:SpaLeb:Schlaf-und-Aktivsein:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:SpaLeb:Vor-Physik-Achtsamkeit-und-Yoga' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Vortrag-Physik-Achtsamkeit-und-Yoga_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Vortrag-Physik-Achtsamkeit-und-Yoga_de.php',
           titel => 'Vortrag: Physik, Achtsamkeit und Yoga - Spannungsspiel des Lebens - Deutsch',
           description => 'Was hat Physik mit Leben und Yoga zu tun? Und welche Rolle spielt dabei der Achtsamkeitsprozess?',
           keywords => '',
           text_titel_h1 => 'Vortrag: Physik, Achtsamkeit und Yoga',
           text_titel_short => 'Vortrag: Physik, Achtsamkeit und Yoga',
           text_undertitel_h2 => 'Was hat Physik mit Leben und Yoga zu tun?',
           text_titel_discr_h3 => 'Und welche Rolle spielt dabei der Achtsamkeitsprozess?',
           jump_ary => array(
                    'OM:SpaLeb:Vor-Physik-Achtsamkeit-und-Yoga:Unterprozesse' => array( headline_text => 'Unterprozesse des Achtsamkeitsprozesses', headline_text_short => 'Unterprozesse des Achtsamkeitsprozesses'),
                    'OM:SpaLeb:Vor-Physik-Achtsamkeit-und-Yoga:Achtsamkeit' => array( headline_text => 'Achtsamkeit', headline_text_short => 'Achtsamkeit'),
                    'OM:SpaLeb:Vor-Physik-Achtsamkeit-und-Yoga:MBSR' => array( headline_text => 'Achtsamkeit nach Kabat-Zinn', headline_text_short => 'Achtsamkeit nach Kabat-Zinn'),
                             
                  'OM:SpaLeb:Vor-Physik-Achtsamkeit-und-Yoga:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:SpaLeb:Vor-PerspektivW-AmbiguitaetsT-Entscheid-Demokra' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Vortrag-Perspektivwechsel-Ambiguitaetstoleranz-Entscheidungen-Demokratie_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Vortrag-Perspektivwechsel-Ambiguitaetstoleranz-Entscheidungen-Demokratie_de.php',
           titel => 'Vortrag: Perspektivwechsel, Ambiguitätstoleranz und Entscheidungen - Spannungsspiel des Lebens - Deutsch',
           description => 'Wie Standpunkte und ihre Wahrheiten meine Gefühle bestimmen können. Wann Widersprüche bleiben, wann sie aufgelöste werden sollten und was dies für unsere Entscheidungen bedeutet.',
           keywords => '',
           text_titel_h1 => 'Vortrag: Perspektivwechsel, Ambiguitätstoleranz, Entscheidungen und Demokratie',
           text_titel_short => 'Vortrag: Perspektivwechsel, Ambiguitätstoleranz, Entscheidungen und Demokratie',
           text_undertitel_h2 => 'Wie Standpunkte und ihre Wahrheiten meine Gefühle bestimmen können. Wann Widersprüche bleiben, wann sie aufgelöst werden sollten und was dies für unsere Entscheidungen und unsere Demokratie bedeutet',
           text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                    'OM:SpaLeb:Vor-PerspektivW-AmbiguitaetsT-Entscheid-Demokra:XXX.X' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                             
                  'OM:SpaLeb:Vor-PerspektivW-AmbiguitaetsT-Entscheid-Demokra:WahrnehmRealiWahrhObjekt' => array( headline_text => 'Wahrnehmung, Realität, Wahrheit und Objektivität', headline_text_short => 'Wahrnehmung, Realität, Wahrheit und Objektivität'),
                ),
         ),
  'OM:SpaLeb:Vorwort' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Vorwort_de.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Vorwort_de.php',
           titel => 'Vorwort - Spannungsspiel des Lebens - Deutsch',
           description => 'Sich auf den Weg zu machen zu versuchen zu verstehen, wie das Leben und wie am Ende vielleicht die Welt funktioniert, ist ein faszinierendes Abendteuer.',
           keywords => '',
           text_titel_h1 => 'Vorwort',
           text_titel_short => 'Vorwort',
           //text_undertitel_h2 => 'Ein Prinzip für Alles – A Theory of Everything (TOE)',
           text_undertitel_h2 => '',
           //text_titel_discr_h3 => 'Ein tiefes Verständnis von Raum, Zeit und Existenz ist notwendig, um die grundlegenden Probleme der heutigen Physik zu lösen; die Physik zu vereinheitlichen.',
           jump_ary => array(
                  //'OM:FrQFT:Vorwort:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
  'OM:SpaLeb:Was-ist-Leben' =>
    array( url_abs => 'http://www.nsosp.org/de/Spannungsspiel-des-Lebens/Was-ist-Leben.php',
           url_rel => $Glo_PathRel_back.'../de/Spannungsspiel-des-Lebens/Was-ist-Leben.php',
           titel => 'Was ist Leben? - Spannungsspiel des Lebens - Deutsch',
           description => 'Neue Biophysik – alles existiert durch Regelprozesse. Das Prinzip des Lebens aus einer physikalisch-psychologischen Perspektive sehen.',
           keywords => '',
           text_titel_h1 => 'Was ist Leben? (Ⅱ)',
           text_titel_short => 'Was ist Leben? (Ⅱ)',
          //text_undertitel_h2 => 'Eine funktional-existenzielle Perspektive',
           text_undertitel_h2 => 'Neue Biophysik – jedes Lebewesen ist selber ein Regelprozess',
           //text_titel_discr_h3 => 'Wie unsere Stabilität – unsere Gesundheit – organisiert wird',
           //text_titel_discr_h3 => 'Das Prinzip des Lebens tiefer verstehen',
           text_titel_discr_h3 => 'Das Prinzip des Lebens aus einer physikalisch-psychologischen Perspektive sehen',
           jump_ary => array(
                  'OM:SpaLeb:Was-ist-Leben:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:SpaLeb:Was-ist-Leben:Vortext:Fig-Achtsamkeitsprozess' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                  'OM:SpaLeb:Was-ist-Leben:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),

  'OM:VRT:' =>
    array_merge( $nSOSp_g_info_wolfgangHuss,
    array( url_abs => 'http://www.nsosp.org/de/Vereinheitlichte-Relativitaetstheorie/',
           url_rel => $Glo_PathRel_back.'../de/Vereinheitlichte-Relativitaetstheorie/',
           favicons_url_rel_opt => $Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/favicon/',
           //header_pict_name => 'Fractal-Quantum-Flow-Theory_En.jpg',
           //header_pict_alt => 'Fractal Quantum Flow Theory, Ideas of new Science',
           name_short => 'VRT',
           font_ary => array(
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                            ),
           header_bgcolor => '#FFFFFF',
           header_pict_name => 'VRT/VRT_header_v01_3.jpg',
           header_pict_width => '930px',
           header_pict_height => '177px',
           header_pict_bgcolor => '#FFFFFF',
           header_pict_alt => 'Vereinheitlichte Relativitätstheorie, in der Quanten-Fluss-Theorie',
           header_links_marginLeft => '383px',
           copy_right => 'Vereinheitlichte Relativitätstheorie (VRT) \\\\'."\n".
                          '© 1990–2022 by \\\\'."\n".
                          'Wolfgang Huß und \\\\'."\n".
                          'Media Line Digital e.K. \\\\'."\n".
                          'is licensed under \\\\'."\n".
                          '\\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
           litera_url_rel => $Glo_PathRel_back.'../de/Vereinheitlichte-Relativitaetstheorie/Literatur_de.php',
           litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/quantum-flow-theory_bibliographie_v8_002.bib',
         )),
   'OM:VRT:Home' =>
    array( url_abs => 'http://www.nsosp.org/de/Vereinheitlichte-Relativitaetstheorie/index.php',
           url_rel => $Glo_PathRel_back.'../de/Vereinheitlichte-Relativitaetstheorie/index.php',
           titel => 'Vereinheitlichte Relativitätstheorie (VRT) - Deutsch',
           description => 'Die strukturelle Vereinheitlichung der Speziellen und Allgemeinen Relativitätstheorie mit der Lorentzschen Äthertheorie. Ein Schritt zu Vereinheitlichung der Physik im Rahmen der Quanten-Fluss-Theorie. — Eine Vereinfachung Einsteins bei der Formulierung der Relativitätstheorie steht der Quantengravitation und der Vereinheitlichung der Physik im Weg.',
           keywords => '',
           text_titel_h1 => 'Vereinheitlichte Relativitätstheorie \\color{*TitleAdd}{\\small{(VRT)}}',
           text_titel_short => 'Vereinheitlichte Relativitätstheorie',
           //text_undertitel_h2 => 'Vereinheitlichung der Speziellen und Allgemeinen Relativitätstheorie mit der Lorentzschen Äthertheorie im Rahmen der Quanten-Fluss-Theorie',
           text_undertitel_h2 => 'Die strukturelle Vereinheitlichung der Speziellen und Allgemeinen Relativitätstheorie mit der Lorentzschen Äthertheorie. Ein Schritt zu Vereinheitlichung der Physik im Rahmen der Quanten-Fluss-Theorie',
           text_titel_discr_h3 => 'Eine Vereinfachung Einsteins bei der Formulierung der Relativitätstheorie steht der Quantengravitation und der Vereinheitlichung der Physik im Weg',
           jump_ary => array(
                  'OM:VRT:Home:Inhalt' => array( headline_text => 'Inhalt', headline_text_short => 'Inhalt'),
                  'OM:VRT:Home:Lexikon' => array( headline_text => 'Lexikon', headline_text_short => 'Lexikon'),
                ),
         ),
   'OM:VRT:Einleitung' =>
    array( url_abs => 'http://www.nsosp.org/de/Vereinheitlichte-Relativitaetstheorie/Einleitung_und_Hypothesen_zur_Quantengravitation_de.php',
           url_rel => $Glo_PathRel_back.'../de/Vereinheitlichte-Relativitaetstheorie/Einleitung_und_Hypothesen_zur_Quantengravitation_de.php',
           titel => 'Einleitung und Hypothesen zur Quantengravitation - Vereinheitlichte Relativitätstheorie (VRT) - Deutsch',
           description => 'Die Vereinheitlichung der Speziellen und Allgemeinen Relativitätstheorie mit der Lorentzschen Äthertheorie. Ein Schritt zu Vereinheitlichung der Physik im Rahmen der Quanten-Fluss-Theorie. – Die Quantengravitation ergibt sich aus einer Mediumtheorie der Gravitation.',
           keywords => '',
           text_titel_h1 => 'Einleitung und Hypothesen zur Quantengravitation',
           text_titel_short => 'Einleitung und Hypothesen zur Quantengravitation',
           text_undertitel_h2 => 'Vereinheitlichung der Speziellen und Allgemeinen Relativitätstheorie mit der Lorentzschen Äthertheorie. Ein Schritt zu Vereinheitlichung der Physik im Rahmen der Quanten-Fluss-Theorie',
           text_titel_discr_h3 => 'Die Quantengravitation ergibt sich aus einer Mediumtheorie der Gravitation',
           jump_ary => array(
                  'OM:VRT:Einleitung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:VRT:Einleitung:Equ-GraLGEinstein' => array( headline_text => 'QGra.LV.37'),
                    'OM:VRT:Einleitung:Equ-GraLKEinstein' => array( headline_text => 'Gra.LK.1'),
                    'OM:VRT:Einleitung:OM:VRT:Einleitung:Djet-Neheh-Dualismus' => array( headline_text => 'Der Djet-Neheh-Dualismus, das grundlegende Ordnungsprinzip \\\\ \\color{*TitleAdd}{– Das Verhältnis und die Balance der Erhaltung sowie der Entstehung und der Zerstörung von Systemen aus Bestandteilen}', headline_text_short => 'Der Djet-Neheh-Dualismus, das grundlegende Ordnungsprinzip'),
                             
                  //'OM:VRT:Einleitung:XXX' => array( headline_text => 'Philosophie der Lichtuhr', headline_text_short => 'Philosophie der Lichtuhr'),
                ),
         ),
   'OM:VRT:Laengenkontraktion-Bewegung' =>
    array( url_abs => 'http://www.nsosp.org/de/Vereinheitlichte-Relativitaetstheorie/Laengenkontraktion-Materie-Bewegung_de.php',
           url_rel => $Glo_PathRel_back.'../de/Vereinheitlichte-Relativitaetstheorie/Laengenkontraktion-Materie-Bewegung_de.php',
           titel => 'Längenkontraktion der Materie bei Bewegung  - Vereinheitlichte Relativitätstheorie (VRT) - Deutsch',
           description => 'Längenkontraktion der Materie bei Bewegung durch Kontraktion der Wechselwirkungsfelder in Bewegungsrichtung.',
           keywords => '',
           text_titel_h1 => 'Längenkontraktion der Materie bei Bewegung',
           text_titel_short => 'Längenkontraktion der Materie bei Bewegung',
           text_undertitel_h2 => 'Veränderung der Wechselwirkungsfelder eines Materie-Elementarteilchens durch seine Bewegung im Licht-Materie-Medium',
           //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
           jump_ary => array(
                  'OM:VRT:Laengenkontraktion-Bewegung:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
   'OM:VRT:Literatur' =>
    array( url_abs => 'http://www.nsosp.org/de/Vereinheitlichte-Relativitaetstheorie/Literatur_de.php',
           url_rel => $Glo_PathRel_back.'../de/Vereinheitlichte-Relativitaetstheorie/Literatur_de.php',
           titel => 'Literatur - Vereinheitlichte Relativitätstheorie (VRT) - Deutsch',
           description => 'Literatur zur Vereinheitlichten Relativitätstheorie.',
           keywords => '',
           text_titel_h1 => 'Literatur',
           text_titel_short => 'Literatur',
           text_undertitel_h2 => 'und Informationen',
           //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
           jump_ary => array(
                ),
         ),
   'OM:VRT:Vereinheitlichung-RT-LET' =>
    array( url_abs => 'http://www.nsosp.org/de/Vereinheitlichte-Relativitaetstheorie/Vereinheitlichung-Relativitaetstheorie-Lorentzsche-Aethertheorie_de.php',
           url_rel => $Glo_PathRel_back.'../de/Vereinheitlichte-Relativitaetstheorie/Vereinheitlichung-Relativitaetstheorie-Lorentzsche-Aethertheorie_de.php',
           titel => 'Vereinheitlichung der Relativitaetstheorie und der Lorentzschen Äthertheorie - Vereinheitlichte Relativitätstheorie (VRT) - Deutsch',
           description => 'Die Vereinheitlichung der Speziellen und Allgemeinen Relativitätstheorie mit der Lorentzschen Äthertheorie. Ein Schritt zu Vereinheitlichung der Physik im Rahmen der Quanten-Fluss-Theorie – Vereinheitlichung.',
           keywords => '',
           text_titel_h1 => 'Vereinheitlichung der Relativitaetstheorie und der Lorentzschen Äthertheorie',
           text_titel_short => 'Vereinheitlichung der Relativitaetstheorie und der Lorentzschen Äthertheorie',
           text_undertitel_h2 => 'Vereinheitlichung der Speziellen und Allgemeinen Relativitätstheorie mit der Lorentzschen Äthertheorie. Ein Schritt zu Vereinheitlichung der Physik im Rahmen der Quanten-Fluss-Theorie',
           //text_titel_discr_h3 => 'XXX',
           jump_ary => array(
                  'OM:VRT:Vereinheitlichung-RT-LET:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                             
                  'OM:VRT:Vereinheitlichung-RT-LET:Philosophie-der-Lichtuhr' => array( headline_text => 'Philosophie der Lichtuhr', headline_text_short => 'Philosophie der Lichtuhr'),
                             
                  'OM:VRT:Vereinheitlichung-RT-LET:Loesung-des-Problems-der-Zeit' => array( headline_text => 'Lösung des ›Problems der Zeit‹', headline_text_short => 'Lösung des ›Problems der Zeit‹'),
                    'OM:VRT:Vereinheitlichung-RT-LET:Fig-Elapson' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:VRT:Vereinheitlichung-RT-LET:Ani-VakuumElapson' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                    'OM:VRT:Vereinheitlichung-RT-LET:Loesung-des-Problems-der-Zeit:GedankExpErwLichtuhr' => array( headline_text => 'Gedankenexperiment der erweiterten Lichtuhr \\\\ \\color{*TitleAdd}{– in der Quanten-Fluss-Theorie}', headline_text_short => 'Gedankenexperiment der erweiterten Lichtuhr‹'),
                             
                  'OM:VRT:Vereinheitlichung-RT-LET:Relativistisches-Licht-Materie-Medium' => array( headline_text => 'Relativistisches Licht-Materie-Medium', headline_text_short => 'Relativistisches Licht-Materie-Medium'),
                    'OM:VRT:Vereinheitlichung-RT-LET:Fig-Wirkungsquanten-Bewegungsraum' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:VRT:Vereinheitlichung-RT-LET:Relativistisches-Licht-Materie-Medium:Ani-Lepton' => array( headline_text => 'Animation '.(++$FrQFT_g_Ani_idx), headline_text_short => 'Animation '.($FrQFT_g_Ani_idx)),
                             
                  'OM:VRT:Vereinheitlichung-RT-LET:Spezielle-Vereinheitlichte-Relativitaetstheorie' => array( headline_text => 'Spezielle Vereinheitlichte Relativitätstheorie \\color{*TitleAdd}{<small>(sVRT)</small>}', headline_text_short => 'Spezielle Vereinheitlichte Relativitätstheorie'),
                             
                  'OM:VRT:Vereinheitlichung-RT-LET:Kosmologisches-Prinzip-und-flacher-Kosmos' => array( headline_text => 'Kosmologisches Prinzip und flacher Kosmos', headline_text_short => 'Kosmologisches Prinzip und flacher Kosmos'),
                    'OM:VRT:Vereinheitlichung-RT-LET:Fig-KosmosEuklid' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    //%!'OM:VRT:Vereinheitlichung-RT-LET:KosmoPrinz' => array( headline_text => 'Kosmologisches Prinzip und flacher Kosmos', headline_text_short => 'Kosmologisches Prinzip und flacher Kosmos'),
                             
                  'OM:VRT:Vereinheitlichung-RT-LET:Vereinheitlichte-Relativitaetstheorie' => array( headline_text => 'Vereinheitlichte Relativitätstheorie \\color{*TitleAdd}{<small>(VRT)</small>}', headline_text_short => 'Vereinheitlichte Relativitätstheorie'),
                    'OM:VRT:Vereinheitlichung-RT-LET:Fig-Gekruemmter-Licht-Bewegungsraum' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    'OM:VRT:Vereinheitlichung-RT-LET:Fig-Gravitation-Masse' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                    //%!'OM:VRT:Vereinheitlichung-RT-LET:VereinheitART' => array( headline_text => 'Vereinheitlichung mit der Allgemeinen Relativitätstheorie', headline_text_short => 'Vereinheitlichung mit der Allgemeinen Relativitätstheorie'),
                ),
         ),
  'OM:ZS:' =>
    array( url_abs => 'http://www.nsosp.org/de/Zahlensemantik/',
           url_rel => $Glo_PathRel_back.'../de/Zahlensemantik/',
           favicons_url_rel_opt => $Glo_PathRel_back.'../de/Zahlensemantik/favicon/',
           //header_pict_name => 'Fractal-Quantum-Flow-Theory_En.jpg',
           //header_pict_alt => 'Fractal Quantum Flow Theory, Ideas of new Science',
           name_short => 'ZS',
           font_ary => array(
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                              '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
                            ),
           header_bgcolor => '#FFFFFF',
           header_pict_name => 'ZS/ZS_header_v01_2_1860x354_72dpi_de.jpg',
           header_pict_width => '930px',
           header_pict_height => '177px',
           header_pict_bgcolor => '#FFFFFF',
           header_pict_alt => 'Zahlensemantik',
           header_links_marginLeft => '383px',
           author_adress => 'Raimund Welsch',
           author_contact => '',
           author_name => 'Raimund Welsch',
           // author_image_URL => '',
           // author_image_alt => 'Raimund Welsch',
           // author_image_width => '',
           // author_image_height => '',
           copy_right => 'Zahlensemantik (ZS) \\\\'."\n".
                          '© 2010–2022 by \\\\'."\n".
                          'Raimund Welsch \\\\'."\n".
                          'is licensed under \\\\'."\n".
                          '\\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
           litera_url_rel => $Glo_PathRel_back.'../de/Zahlensemantik/Literatur_de.php',
           litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/zahlensemantik_bibliographie.bib',
         ),

   'OM:ZS:Home' =>
    array( url_abs => 'http://www.nsosp.org/de/Zahlensemantik/index.php',
           url_rel => $Glo_PathRel_back.'../de/Zahlensemantik/index.php',
           titel => 'Zahlensemantik (ZS) - Deutsch',
           description => '\\name[undertitle]{OM:ZS:Home}. — \\name[description]{OM:ZS:Home}.',
           keywords => '',
           text_titel_h1 => 'Zahlensemantik \\color{*TitleAdd}{\\small{(ZS)}}',
           text_titel_short => 'Zahlensemantik',
           text_undertitel_h2 => 'XXX',
           text_titel_discr_h3 => 'YYY',
           jump_ary => array(
                  'OM:ZS:Home:Inhalt' => array( headline_text => 'Inhalt', headline_text_short => 'Inhalt'),
                  'OM:ZS:Home:Lexikon' => array( headline_text => 'Lexikon', headline_text_short => 'Lexikon'),
                ),
         ),
   'OM:ZS:Einleitung' =>
    array( url_abs => 'http://www.nsosp.org/de/Zahlensemantik/Einleitung.php',
           url_rel => $Glo_PathRel_back.'../de/Zahlensemantik/Einleitung.php',
           titel => 'Einleitung zur Zahlensemantik - Zahlensemantik (ZS) - Deutsch',
           description => '\\name[undertitle]{OM:ZS:Einleitung}. — \\name[description]{OM:ZS:Einleitung}.',
           keywords => '',
           text_titel_h1 => 'Einleitung',
           text_titel_short => 'Einleitung',
           text_undertitel_h2 => 'XXX',
           text_titel_discr_h3 => 'YYY',
           jump_ary => array(
                  'OM:ZS:Einleitung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                             
                    'OM:ZS:Einleitung:Vortext:Fig-GraviLeptonWirkung' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx), headline_text_short => 'Abbildung '.($FrQFT_g_Fig_idx)),
                             
                  'OM:ZS:Einleitung:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
                ),
         ),
   'OM:ZS:Literatur' =>
    array( url_abs => 'http://www.nsosp.org/de/Zahlensemantik/Literatur.php',
           url_rel => $Glo_PathRel_back.'../de/Zahlensemantik/Literatur.php',
           titel => 'Literatur - Zahlensemantik (ZS) - Deutsch',
           description => 'Literatur zur Zahlensemantik.',
           keywords => '',
           text_titel_h1 => 'Literatur',
           text_titel_short => 'Literatur',
           text_undertitel_h2 => 'und Informationen',
           text_titel_discr_h3 => '',
           jump_ary => array(
                ),
         ),

  ));
  
  $Glo_g_Site_activ = null;
  $Glo_g_Site_activ_GenInfo_idx = null;

  
  
  const vorname = 'vorname';
  const nachname = 'nachname';
  const stadt = 'stadt';
  const euro = 'euro';
  const support = 'support';

  $FrQFT_g_donater_list   = array(
                                   array( vorname => 'Angelika', nachname => 'Bröder', stadt => 'Castrop Rauxel \\\\ \\color{*TitleAdd}{\\small{ (die Europastadt im Grünen ;) )}}', euro => '10'),
                                 );
  
  $FrQFT_g_supporter_list = array(
                                   array( vorname => 'Thomas', nachname => 'Melloh', stadt => 'Hamburg', support => 'Testleser, Korrektur, Beratung, Betreuung'),
                                   array( vorname => 'Matthias', nachname => 'Galke', stadt => 'Hamburg', support => 'Inspiration, Beratung, Lehre'),
                                   array( vorname => 'Raimund', nachname => 'Welsch', stadt => 'Aachen', support => 'Korrektur, Beratung, Prüfung (Review)'),
                                 );
                                 
                                 
                                 
  const title = 'title';
  const jumpname = 'jumpname';
  const startsign = 'startsign';

  function nSOSp_f_tableOfContents_elementAry( $site_activ, $descriptionManual='')
  {
    //global $Glo_g_Site_ary;

    // #!: In case "$site_activ" is here a link to a chapter of the site. Manage better for the future!!! Even in call of "nSOSp_f_tableOfContents_descriptionString".

    $ary_ret = array( title => '\\name[title]{'.$site_activ.'}', jumpname => $site_activ, startsign => '',
                      description => nSOSp_f_tableOfContents_descriptionString( $site_activ, $descriptionManual));
    
    return $ary_ret;
    
  }
  

  
  function nSOSp_f_tableOfContents_descriptionString( $site_activ, $descriptionManual='')
  {
    global $Glo_g_Site_ary;
    
    if (0 < strlen( $descriptionManual))
    {
      $str_ret = $descriptionManual;
    }
    else
      // #!: Catch error: In case "$site_activ" is here a link to a chapter of the site. Manage better for the future!!!
      if ($Glo_g_Site_ary[$site_activ] != null)
      {
        $str_ret = '';
        $str_ret = $str_ret.((array_key_exists( text_undertitel_h2, $Glo_g_Site_ary[$site_activ]) && (0 < strlen( $Glo_g_Site_ary[$site_activ][text_undertitel_h2]))) ? ($Glo_g_Site_ary[$site_activ][text_undertitel_h2]) : '');
        $str_ret = $str_ret.((array_key_exists( text_titel_discr_h3, $Glo_g_Site_ary[$site_activ]) && (0 < strlen( $Glo_g_Site_ary[$site_activ][text_titel_discr_h3]))) ? ' — \\italic{'.($Glo_g_Site_ary[$site_activ][text_titel_discr_h3]).'}' : '');
        //$str_ret = $str_ret.XXX;
      }
    
    return $str_ret;
    
  }
  

  
  function FrQFT_f_donator_table_html()
  {
    global $FrQFT_g_donater_list;
    
    //print_r( $FrQFT_g_donater_list);
    
    $ret_str = '';
    
    // #?: List not empty?
    if (0 < count( $FrQFT_g_donater_list))
    {
      $ret_str .= '<table>'."\n";
      $ret_str .= '  <colgroup>'."\n";
      $ret_str .= '    <col width="300px">'."\n";
      $ret_str .= '  </colgroup>'."\n";

      $ret_str .= '  <tr>'."\n";
      $ret_str .= '    <td><small>(chronologisch, frühe Spender vorne)</small></td>'."\n";
      $ret_str .= '    <td><small>(umgekehrt chronologisch, letzte Spender vorne)</small></td>'."\n";
      $ret_str .= '  </tr>'."\n";
      
      $ret_str .= '  <tr>'."\n";
      $ret_str .= '    <td height="10px"></td>'."\n";
      $ret_str .= '    <td height="10px"></td>'."\n";
      $ret_str .= '  </tr>'."\n";
      
      for ($i = 0; $i < count( $FrQFT_g_donater_list); $i++)
      {
        $ret_str .= '  <tr>'."\n";
        $ret_str .= '    <td>'.($FrQFT_g_donater_list[$i][vorname]).' '.($FrQFT_g_donater_list[$i][nachname]).((0 < strlen( $FrQFT_g_donater_list[$i][stadt])) ? ', '.($FrQFT_g_donater_list[$i][stadt]) : '').((0 < strlen( $FrQFT_g_donater_list[$i][euro])) ? ', € '.($FrQFT_g_donater_list[$i][euro]) : '').'</td>'."\n";
        $ret_str .= '    <td>'.($FrQFT_g_donater_list[(count( $FrQFT_g_donater_list) - 1) - $i][vorname]).' '.($FrQFT_g_donater_list[(count( $FrQFT_g_donater_list) - 1) - $i][nachname]).((0 < strlen( $FrQFT_g_donater_list[(count( $FrQFT_g_donater_list) - 1) - $i][stadt])) ? ', '.($FrQFT_g_donater_list[(count( $FrQFT_g_donater_list) - 1) - $i][stadt]) : ''). ((0 < strlen( $FrQFT_g_donater_list[(count( $FrQFT_g_donater_list) - 1) - $i][euro])) ? ', € '.($FrQFT_g_donater_list[(count( $FrQFT_g_donater_list) - 1) - $i][euro]) : '').'</td>'."\n";
        $ret_str .= '  </tr>'."\n";
      }
      
      $ret_str .= '</table>'."\n";
    }
    else
      $ret_str .= 'Noch kein Spender …'."\n";
    
    return( $ret_str);
  }
    
    
  function FrQFT_f_supporter_table_html()
  {
    global $FrQFT_g_supporter_list;
    
    //print_r( $FrQFT_g_supporter_list);
    
    $ret_str = '';
    
    // #?: List not empty?
    if (0 < count( $FrQFT_g_supporter_list))
    {
      $ret_str .= '<table>'."\n";
      $ret_str .= '  <colgroup>'."\n";
      $ret_str .= '    <col width="350px">'."\n";
      $ret_str .= '  </colgroup>'."\n";

      $ret_str .= '  <tr>'."\n";
      $ret_str .= '    <td><small>(chronologisch, frühe Unterstützer vorne)</small></td>'."\n";
      $ret_str .= '    <td><small>(umgekehrt chronologisch, neuste Unterstützer vorne)</small></td>'."\n";
      $ret_str .= '  </tr>'."\n";
      
      $ret_str .= '  <tr>'."\n";
      $ret_str .= '    <td height="10px"></td>'."\n";
      $ret_str .= '    <td height="10px"></td>'."\n";
      $ret_str .= '  </tr>'."\n";
      
      for ($i = 0; $i < count( $FrQFT_g_supporter_list); $i++)
      {
        $ret_str .= '  <tr>'."\n";
        $ret_str .= '    <td>'.($FrQFT_g_supporter_list[$i][vorname]).' '.($FrQFT_g_supporter_list[$i][nachname]).', '.($FrQFT_g_supporter_list[$i][stadt]).' \\\\ \\color{A0A0A0}{<small>'.($FrQFT_g_supporter_list[$i][support]).'</small>}</td>'."\n";
        $ret_str .= '    <td>'.($FrQFT_g_supporter_list[(count( $FrQFT_g_supporter_list) - 1) - $i][vorname]).' '.($FrQFT_g_supporter_list[(count( $FrQFT_g_supporter_list) - 1) - $i][nachname]).', '.($FrQFT_g_supporter_list[(count( $FrQFT_g_supporter_list) - 1) - $i][stadt]).' \\\\ \\color{A0A0A0}{<small>'.($FrQFT_g_supporter_list[(count( $FrQFT_g_supporter_list) - 1) - $i][support]).'</small>}</td>'."\n";
        $ret_str .= '  </tr>'."\n";
      }
      
      $ret_str .= '</table>'."\n";
    }
    else
      $ret_str .= 'Noch keine Unterstützer …'."\n";
    
    return( $ret_str);
  }
    
    
  
  function FrQFT_f_HTML_BeginHeaderBodyContainer( $site_activ)
  {
    global $Glo_PathRel_back, $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $Glo_g_Site_ary, $Glo_g_Site_activ, $Glo_g_Site_activ_GenInfo_idx;
    
    /*%!$Glo_g_Site_activ = $site_activ;
    $Glo_g_Site_activ_GenInfo_idx = To_f_SiteName_Parent( $Glo_g_Site_activ);

    Sc_f_litera_bibtex( $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][litera_bibtex_url_rel]);*/
    Sc_f_HTMLHeader_init( $site_activ);

    //echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">'."\n";
    echo '<!DOCTYPE html>'."\n";  /* #!: Only this, see here https://wiki.selfhtml.org/wiki/HTML/Dokumentstruktur_und_Aufbau and here https://wiki.selfhtml.org/wiki/HTML/Dokumentstruktur_und_Aufbau#Dokumenttyp-Deklaration */
    echo '<html lang="de">'."\n";  /* #!: lang="de" needed for hyphenation (Silbentrennung)! More see here https://wiki.selfhtml.org/wiki/HTML/Dokumentstruktur_und_Aufbau and here https://www.w3.org/International/questions/qa-lang-why */
    echo '  <head>'."\n";
    // #: Global site tag (gtag.js) - Google Analytics
    include_once($Glo_PathRel_back.'../share/php/gtag.php');
    echo ''."\n";
    // #: Next two meta tags  and title see: https://wiki.selfhtml.org/wiki/HTML/Dokumentstruktur_und_Aufbau
    echo '    <meta charset="utf-8" />'."\n";  // #?: doppled to 'content="text/html; charset=UTF-8"', see below?
    echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0" />'."\n";
    echo ''."\n";
    echo '    <title>'.(To_f_Text_replace_html( $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ][titel])).'</title>'."\n";
    echo ''."\n";
    echo '    <meta http-equiv="content-type" content="text/html; charset=UTF-8">'."\n";
    echo '    <meta name="description"        content="'.(To_f_Text_replace_html( $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ][description])).'">'."\n";
    echo '    <meta name="keywords"           content="'.(To_f_Text_replace_html( $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ][keywords])).'">'."\n";
    echo '    <meta name="author"             content="Wolfgang Huss, info@nsosp.org">'."\n";
    echo '    <meta name="DC.Publisher"       content="MEDIA LINE DIGITAL e.K., info@media-line-digital.de">'."\n";
    echo '    <meta name="DC.Date"            content="2022-08-28T09:00+01:00"><!-- Zeitstempel Beispiel: 01.08.2001, 12:00 Uhr, +1 Std. zu Greenwich -->'."\n";
    echo '    <meta name="DC.Identifier"      content="'.($Glo_g_Site_ary[$Glo_g_Site_activ][url_abs]).'" scheme="DCTERMS.URI">'."\n";
    echo '    <meta rel="canonical"           href="'.($Glo_g_Site_ary[$Glo_g_Site_activ][url_abs]).'" />'."\n";
    echo '    <meta name="DC.Language"        content="de">'."\n";
    echo ''."\n";
    
    // #: Favicons as given by "Image2Icon.app".
    To_f_HTMLHeader_Favicons_make();
    // #: Additional fonts
    To_f_HTMLHeader_Fonts_make();
    
    echo ''."\n";
    //%!echo '    <link rel="shortcut icon" type="image/x-icon" href="'.$Glo_PathRel_back.'../favicon.ico">'."\n";
    echo '    <link rel="stylesheet" type="text/css" href="'.$Glo_PathRel_back.'../share/css/reset.yui.css" media="screen" />'."\n";
    //--echo '    <link rel="stylesheet" type="text/css" href="'.$Glo_PathRel_back.'../share/css/minireset.css" media="screen" />'."\n";
    echo '    <link rel="stylesheet" type="text/css" href="'.$Glo_PathRel_back.'../share/css/font.yui.css" media="screen" />'."\n";
    echo '    <link rel="stylesheet" type="text/css" href="'.$Glo_PathRel_back.'../share/css/grid.af-33.css" media="screen" />'."\n";
    echo '    <script type="text/javascript">'."\n";
    echo '          <!--'."\n";
    echo '      document.write(\'<link rel="stylesheet" type="text/css" href="'.$Glo_PathRel_back.'../share/css/script.css" media="screen" />\');'."\n";
    echo '          -->'."\n";
    echo '    </script>'."\n";
    echo '    <link rel="stylesheet" type="text/css" href="'.$Glo_PathRel_back.'../share/css/main.css" media="screen" />'."\n";
    echo '    <link rel="stylesheet" type="text/css" href="'.$Glo_PathRel_back.'../share/css/reset.yui.css" media="print" />'."\n";
    echo '    <link rel="stylesheet" type="text/css" href="'.$Glo_PathRel_back.'../share/css/font.yui.css" media="print" />'."\n";
    echo '    <link rel="stylesheet" type="text/css" href="'.$Glo_PathRel_back.'../share/css/grid.af-33.css" media="print" />'."\n";
    echo '    <link rel="stylesheet" type="text/css" href="'.$Glo_PathRel_back.'../share/css/main.css" media="print" />'."\n";
    echo '    <link rel="stylesheet" type="text/css" href="'.$Glo_PathRel_back.'../share/css/print.css" media="print" />'."\n";
    echo ''."\n";
    // #: Vue.js
    echo '    <!-- Vue.js: production version, optimized for size and speed -->'."\n";
    echo '    <script src="https://cdn.jsdelivr.net/npm/vue"></script>'."\n";
    // #: Additionals
    Sc_f_HeaderElements();
    echo ''."\n";
    //%!echo '		<meta name="google-site-verification" content="NlimpkZJCzPWdpRJbzHIukufnG6rcgdfj_awkAePjE4" />'."\n";
    echo '    <meta name="google-site-verification" content="6dWK_kE5WWR_uun6-aesldccQJuTIJSWaaBOQOQqG7Y" />'."\n";
    echo '    <meta name="google-translate-customization" content="395c924796ab172b-779d327ac112ea66-g6db384d78375a9c1-19"></meta>'."\n";
    echo '  </head>'."\n";
    echo ''."\n";
    echo '  <body id="colorManagement">'."\n";
    //%! include $Glo_PathRel_back.'../share/php/analyticstracking.php';
    //%! include_once($Glo_PathRel_back.'../share/php/analyticstracking.php');
    echo ''."\n";
    echo '    <div id="container" class="container">'."\n";
  }

  
  
  $NSOSP_g_printSVG = file_get_contents(
      $Glo_PathRel_back.'../share/images/_icons/svg/print.svg'
  );
  $NSOSP_g_expandSVG = file_get_contents(
      $Glo_PathRel_back.'../share/images/_icons/svg/expand.svg'
  );
  
  function FrQFT_f_HTML_EndDivsNavExtrFootContainerBody()
  {
    global $Glo_PathRel_back, $Glo_g_Site_ary, $Glo_g_Site_activ, $Glo_g_Site_activ_GenInfo_idx, $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary;
    global $NSOSP_g_printSVG, $NSOSP_g_expandSVG;

    echo '			<div id="navigation" class="navigation main-shadow-0-5-30 main-layer-2">'."\n";
    echo '        <div class="main-print-expand-div">'."\n";
    echo '          <br>'."\n";
    echo '          <div class="main-print-div" onclick="To_f_print()">'."\n";
    echo '            <img class="main-print-expand">'."\n";
    echo '              '.($NSOSP_g_printSVG)."\n";
    echo '            </img>'."\n";
    echo '          </div>'."\n";
    echo '          <div id="isUnexpanded" class="main-unexpanded-div" style="display: ;" onclick="To_f_expand()">'."\n";
    echo '            <img class="main-print-expand">'."\n";
    echo '              '.($NSOSP_g_expandSVG)."\n";
    echo '            </img>'."\n";
    echo '          </div>'."\n";
    echo '          <div id="isExpanded" class="main-expanded-div" style="display: none;" onclick="To_f_expand()">'."\n";
    echo '            <img class="main-print-expand">'."\n";
    echo '              '.($NSOSP_g_expandSVG)."\n";
    echo '            </img>'."\n";
    echo '          </div>'."\n";
    echo '        </div>'."\n";
    echo '        <p>'."\n";
    echo '<div id="google_translate_element" class="main-google-translate" style="padding-left: 10px !important; white-space: normal!important;"></div><script type="text/javascript">'."\n";
    echo 'function googleTranslateElementInit() {'."\n";
    echo '  new google.translate.TranslateElement({pageLanguage: \'de\', gaTrack: true, gaId: \'UA-5051897-3\'}, \'google_translate_element\');'."\n";
    // correct Google navigator right overflow
    echo '  To_f_googleTranslateCorrect();'."\n";
    echo '}'."\n";
    echo '</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>'."\n";
    echo '        </p>'."\n";
    echo '        <p style="margin-top: -8px;">'."\n";
    echo '				  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="padding-left: 10px; padding-top: 10px;">'."\n";
    echo '					  <sup>Crowdfunding:</sup> '."\n";
    //%!echo '				  <input type="hidden" name="cmd" value="_s-xclick">'."\n";
    //%!echo '				  <input type="hidden" name="hosted_button_id" value="R8468ZLUN4UPL">'."\n";
    //%!echo '				  <input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">'."\n";
    echo '				    <a href="'.$Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Impressum_de.php#OM:FrQFT:Impressum:Spenden"> <img src="'.$Glo_PathRel_back.'../share/images/btn_donate_SM.gif" width="86px" height="21px" alt="Spenden"> </a>'."\n";
    echo '				  </form>'."\n";
    echo '        </p>'."\n";
    echo '				<h3 align="left" style="padding-top: 12px;"><a href="'.($Glo_g_Site_ary[$Glo_g_Site_activ][url_rel]).'">'.(To_f_Text_replace_html( $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ][text_titel_short])).'</a></h3>'."\n";
                  To_f_headline_make();
    /* At the moment extra "div" is not used, because of the shadow. */
    //--echo '			</div>'."\n";
    //--echo ''."\n";
    //--echo '			<div id="extra" class="extra main-shadow-0-5-30 main-layer-1">'."\n";
    echo '				<br>'."\n";
    echo '				<br>'."\n";
    //echo '				<p align="left">'."\n";
    //echo '          <a href="'.$Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Impressum_de.php#OM:FrQFT:Impressum:Inhaberdaten"> <img class="main-shadow-5-5-20" src="'.$Glo_PathRel_back.'../share/images/Wolfgang-Huss-2013_IMG_1322_beschn_klein_entf.jpg" width="180" height="277" border="0" alt="Wolfgang Hu&szlig; alias Lucius Damian Stardust &copy;2013 Wolfgang Hu&szlig;"> </a>'."\n";
    //echo '					<small>'."\n";
    //echo '						<!&copy; 2013 Wolfgang Hu&szlig; alias>Lucius Damian <!Cosmas> Stardust'."\n";
    //echo '						<!Lucius Damian [Cosmas] Stardust (Lichtbringer DerM&auml;chtigeMann [Schmuck-Ordnung-Welt] Sternenstaub)>'."\n";
    //echo '					</small>'."\n";
    //echo '				</p>'."\n";
    if (array_key_exists( author_image_URL, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx])) {
      echo '        <p align="left" style="margin-bottom: 4px;">'."\n";
      echo '          <a href="'.$Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Impressum_de.php#OM:FrQFT:Impressum:Inhaberdaten"> <img class="tools-class-fig" src="'.$Glo_PathRel_back.'../share/images/'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_image_URL]).'" width="'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_image_width]).'" height="'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_image_width]).'" border="0" alt="'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_image_alt]).'"> </a>'."\n";
      echo '        </p>'."\n";
      echo '        <p class="navigation-extra-text" align="left">'."\n";
      echo '          '.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_name])."\n";
      echo '        </p>'."\n";
      echo '        <br>'."\n";
      echo '        <br>'."\n";
    }
    echo '				<p class="navigation-extra-text" align="left">'."\n";
                  // #: Siehe "http://www.youtube.com/watch?feature=player_embedded&v=HkBEKU-E38k", Sek. 7:05, gespeichert als "Don Lincoln Welches sind die kleinsten Bausteine des Universums.mp4", und "http://en.wikiquote.org/wiki/Talk:Albert_Einstein". Zitat ähnlich siehe URL: http://www.liss-kompendium.de/zitate/einstein-zitate.htm
                  //    Auch auf der Home-Seite von NSOSP.
    echo '					&raquo;<i>Wenn ich <small>[</small>immer<small>]</small> w&uuml;sste, was ich tue,'."\n";
    echo '					dann w&uuml;rde man es nicht Forschung nennen, oder?</i>&laquo; *<br>'."\n";
    echo '				</p>'."\n";
    echo '				<br>'."\n";
    echo '				<br>'."\n";
    echo '				<p class="navigation-extra-text" align="left">'."\n";
    echo '					'.(To_f_Text_replace_html( $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][copy_right]))."\n";
    echo '				</p>'."\n";
    echo '				<br>'."\n";
    echo '				<br>'."\n";
    echo '				<p class="navigation-extra-text" align="left">'."\n";
                    // #: Siehe oben.
    echo '					<small>* Einstein zugeschrieben</small>'."\n";
    echo '				</p>'."\n";
    echo '			</div>'."\n";
    echo ''."\n";
    echo '			<div id="footer" class="footer main-shadow-0-5-30 main-layer-3">'."\n";
    echo '        <table class="footer-extra-table" width="700px" align="center" style="padding-top: 16px;">'."\n";
    echo '          <colgroup>'."\n";
    echo '            <col width="150">'."\n";
    echo '            <col width="150">'."\n";
    echo '            <! col height="134">'."\n";
    echo '          </colgroup>'."\n";
    echo '          <tr>'."\n";
    echo '            <td>'."\n";
    echo '            </td>'."\n";
    echo '            <td>'."\n";
    if (array_key_exists( author_image_URL, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx])) {
      echo '              <p align="left" style="margin-top: 16px; margin-bottom: -4px;">'."\n";
      echo '                <a href="'.$Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Impressum_de.php#OM:FrQFT:Impressum:Inhaberdaten"> <img class="tools-class-fig" src="'.$Glo_PathRel_back.'../share/images/'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_image_URL]).'" width="'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_image_width]).'" height="'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_image_width]).'" border="0" alt="'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_image_alt]).'"> </a>'."\n";
      echo '              </p>'."\n";
      echo '              <p class="footer-extra-text" align="left">'."\n";
      echo '                '.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_name])."\n";
      echo '              </p>'."\n";
    }
    echo '            </td>'."\n";
    echo '            <td>'."\n";
    echo '              <p class="footer-extra-text" align="left">'."\n";
    echo '                '.(To_f_Text_replace_html( $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][copy_right]))."\n";
    echo '              </p>'."\n";
    echo '              <p class="footer-extra-text" align="left">'."\n";
    echo '                '.(To_f_Text_replace_html( $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_adress]))."\n";
    echo '              </p>'."\n";
    echo '              <p class="footer-extra-text" align="left">'."\n";
    echo '                '.(To_f_Text_replace_html( $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][author_contact]))."\n";
    echo '              </p>'."\n";
    echo '            </td>'."\n";
    echo '          </tr>'."\n";
    echo '        </table>'."\n";
    echo '        <p align="center">'."\n";
    echo '          <a href="'.$Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Impressum_de.php#OM:FrQFT:Impressum:CopyrightLizenz:Inhalt">© 1986–2022 by Wolfgang Huß und Media Line Digital e.K. is licensed under CC BY-ND 4.0</a>'."\n";
    echo '          &nbsp; &nbsp; &#149; &nbsp; &nbsp;'."\n";
    echo '          <a href="'.$Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Impressum_de.php#OM:FrQFT:Impressum:Inhaberdaten">Kontakt</a>'."\n";
    echo '          &nbsp; &nbsp; &#149; &nbsp; &nbsp;'."\n";
    echo '          <a class="footer-version" href="https://github.com/New-Soul-Of-Science-Project/New-Soul-Of-Science-Project-Web/releases/tag/v9.29-d20220828-t0900" target="_blank">v9.29</a>'."\n";
    echo '        </p>'."\n";
    echo '			</div>'."\n";
    echo ''."\n";
    echo '		</div>'."\n";
    echo ''."\n";
    echo '		<script type="text/javascript"> <!--'."\n";
    echo '        // #: Open hidden areas for the hash of first site call.'."\n";
    echo '        To_f_manage_site_end( true);'."\n";
    echo '    --> </script>'."\n";
    //echo '    '.$To_g_pageUrl."<br>\n";
    //echo '    '.$To_g_query."<br>\n";
    //echo '    '.($To_g_openAll ? 'true' : 'false')."<br>\n";
    echo ''."\n";
    echo '	</body>'."\n";
    echo '</html>'."\n";
  }

  
  
  function FrQFT_f_Div_Header( $offset)
  {
    global $Glo_PathRel_back, $Glo_g_Site_ary, $Glo_g_Site_activ, $Glo_g_Site_activ_GenInfo_idx, $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary;

    echo         '<div id="header" class="header main-shadow-0-5-30 main-layer-3">'."\n";
    echo $offset.'  <table'.((array_key_exists( header_bgcolor, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx])) ? ' bgcolor="'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][header_bgcolor]).'"' : '').'>'."\n";
    echo $offset.'    <colgroup>'."\n";
    echo $offset.'      <col width="930">'."\n";
    echo $offset.'      <col height="134">'."\n";
    echo $offset.'    </colgroup>'."\n";
    echo $offset.'    <tr'.((array_key_exists( header_pict_bgcolor, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx])) ? ' bgcolor="'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][header_pict_bgcolor]).'"' : '').'>'."\n";
    echo $offset.'      <td align="center" valign="middle">'."\n";
    //%!echo $offset.'        <img src="'.$Glo_PathRel_back.'../share/images/'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][header_pict_name]).'" width="930" height="134" border="0" alt="'.(To_f_Text_replace_html( $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][header_pict_alt])).'"><br>'."\n";
    echo $offset.'        <img class="print-header-image" src="'.$Glo_PathRel_back.'../share/images/'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][header_pict_name]).'" width="'.((array_key_exists( header_pict_width, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx])) ? $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][header_pict_width] : '930').'" height="'.((array_key_exists( header_pict_height, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx])) ? $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][header_pict_height] : '134').'" border="0" alt="'.(To_f_Text_replace_html( $To_g_Text_replace_ary, $To_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][header_pict_alt])).'"><br>'."\n";
    echo $offset.'      </td>'."\n";
    echo $offset.'    </tr>'."\n";
    echo $offset.'    <tr class="header-links">'."\n";
    echo $offset.'      <td>'."\n";
    //%!echo $offset.'        <p align="center" style="margin-bottom: 5px;">'."\n";
    echo $offset.'        <p '.((array_key_exists( header_links_marginLeft, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx])) ? 'style="margin-left: '.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][header_links_marginLeft]).'; margin-bottom: 5px;"' : 'align="center" style="margin-bottom: 5px;"').'>'."\n";
    //%1echo $offset.'          <a href="'.$Glo_PathRel_back.'../de/New-Soul-Of-Science-Project/index.php">NSOSP-Home</a> &nbsp; &nbsp;'."\n";
    echo $offset.'          <a href="'.($Glo_g_Site_ary['OM:nSOSp:'][url_rel]).'">NSOSP-Home</a> &nbsp; &nbsp;'."\n";
    // #?: Not the global homepage? Then show link to theory homepage.
    if ($Glo_g_Site_activ_GenInfo_idx != 'OM:nSOSp:')
      echo $offset.'          <a href="'.($Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][url_rel]).'">'.((array_key_exists( name_short, $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx])) ? $Glo_g_Site_ary[$Glo_g_Site_activ_GenInfo_idx][name_short] : 'Theorie').'-Home</a> &nbsp; &nbsp;'."\n";
    echo $offset.'          <a href="'.$Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Impressum_de.php#OM:FrQFT:Impressum:Inhaberdaten">Kontakt</a> &nbsp; &nbsp;'."\n";
    echo $offset.'          <a href="'.$Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/Impressum_de.php">Impressum</a> &nbsp; &nbsp;'."\n";
    //echo $offset.'          <!a href="'.$Glo_PathRel_back.'../eng/XXX.html"><img src="'.$Glo_PathRel_back.'../share/images/flag_en_disable.gif" width="25" height="14" border="0" alt="English"><!/a> &nbsp; &nbsp;'."\n";
    //echo $offset.'          <a href="'.($Glo_g_Site_ary[$Glo_g_Site_activ][url_rel]).'"><img src="'.$Glo_PathRel_back.'../share/images/flag_de.gif" width="25" height="14" border="0" alt="Deutsch"></a>'."\n";
    echo $offset.'          <a href="'.($Glo_g_Site_ary[$Glo_g_Site_activ][url_rel]).'"><img src="'.$Glo_PathRel_back.'../share/images/flag_de.gif" width="25" height="14" border="0" alt="Deutsch" valign="middle"></a>'."\n";
    echo $offset.'        </p>'."\n";
    echo $offset.'      </td>'."\n";
    echo $offset.'    </tr>'."\n";
    echo $offset.'  </table>'."\n";
    echo $offset.'</div>'."\n";
  }

  
  const margin = 'margin';
  
  function FrQFT_f_Div_WrapperBegin( $offset, $backward_link='')
  {
    global $Glo_PathRel_back, $Glo_g_Site_ary, $Glo_g_Site_activ;
    global $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary;

    echo         '<div id="wrapper" class="wrapper">'."\n";
    echo $offset.'  <div id="content" class="content main-shadow-0-5-30" style="">'."\n";
    //%!echo $offset.'    <img src="'.$Glo_PathRel_back.'../share/images/Header_zu_Navi_FFFFFF.jpg" width="730" height="10" border="0" alt="" style="position: absolute; top: 158px; filter:alpha(opacity=75); -moz-opacity: 0.75; opacity: 0.75;">'."\n";
    //%!echo $offset.'      <! #: Bei Safari eigentlich "top: -2px;". FireFox Mac+Win und IE sind mit "top: -3px;" ok. >'."\n";
    echo $offset.''."\n";
    echo $offset.''."\n";
    echo $offset.'    <br>'."\n";
    echo $offset.''."\n";
    //%!echo $offset.'      <small> <a href="'.$Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/index.php" style="color: #505050; font-weight: normal;">'."\n";
    if ($Glo_g_Site_activ == 'OM:FrQFT:Home')
    {
      echo $offset.'    <p>'."\n";
      //%!echo $offset.'        Selbstorganisierte Physik<!/a> &nbsp; &nbsp; &mdash; &nbsp; &nbsp;'."\n";
      //%!echo $offset.'        Zur Einstimmung etwas Musik: &nbsp;'."\n";
      echo $offset.'        <small style="color: #505050; font-weight: normal;">Zur Einstimmung etwas Musik: &nbsp;'."\n";
      echo $offset.'        <a target="_blank" href="http://www.youtube.com/watch?v=buqtdpuZxvk&feature=fvw">Monty Python - The Galaxy Song</a></small>'."\n";
      echo $offset.'    </p>'."\n";
    }
    else
      //%!echo $offset.'        Selbstorganisierte Physik &nbsp;&gt;&gt;&nbsp; Fraktale Quanten-Fluss-Theorie (FrQFT)</a></small>'."\n";
      if (0 < strlen( $backward_link))
      {
        To_f_Paragraph( 'jumplist', $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, '        ', array( array( jump_name => $backward_link, type => 'back', margin => 'margin_small')));
        //echo $offset.'        XXX'."\n";
      }
      /*else
      {
        echo $offset.'    <p>'."\n";
        echo $offset.'        <small> <a href="'.$Glo_PathRel_back.'../de/Quanten-Fluss-Theorie/index.php" style="color: #505050; font-weight: normal;">Fraktale Quanten-Fluss-Theorie (FrQFT)</a></small>'."\n";
        echo $offset.'    </p>'."\n";
      }*/
    echo $offset.'    <br>'."\n";
    echo $offset.''."\n";
    echo $offset.''."\n";
    echo $offset.'    <p>'."\n";
    echo $offset.'      <h1>'.(To_f_Text_replace_html( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ][text_titel_h1])).'</h1>'."\n";
    if (array_key_exists( text_undertitel_h2, $Glo_g_Site_ary[$Glo_g_Site_activ]) && (0 < strlen( $Glo_g_Site_ary[$Glo_g_Site_activ][text_undertitel_h2])))
      //%! echo $offset.'      <h2 style="color: #505050">'.(To_f_Text_replace_html( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ][text_undertitel_h2])).'</h2>'."\n";
      echo $offset.'      <h2 style="color: '.(To_f_Color('*SiteUndertitleH2', false)).'">'.(To_f_Text_replace_html( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ][text_undertitel_h2])).'</h2>'."\n";
    echo $offset.'    </p>'."\n";
    echo $offset.'    <br>'."\n";
    echo $offset.''."\n";
    echo $offset.''."\n";
    if (array_key_exists( text_titel_discr_h3, $Glo_g_Site_ary[$Glo_g_Site_activ]) && (0 < strlen( $Glo_g_Site_ary[$Glo_g_Site_activ][text_titel_discr_h3])))
    {
      echo $offset.'    <p>'."\n";
      echo $offset.'      <h3 style="line-height: 1.4em;">'.(To_f_Text_replace_html( $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Glo_g_Site_ary[$Glo_g_Site_activ][text_titel_discr_h3])).'</h3>'."\n";
      echo $offset.'    </p>'."\n";
      echo $offset.'    <br>'."\n";
      echo $offset.''."\n";
      echo $offset.''."\n";
    }
  }

  
  function FrQFT_f_Div_WrapperEnd( $offset)
  {
    global $Glo_PathRel_back, $Glo_g_Site_ary, $Glo_g_Site_activ, $Sc_g_Text_replace_ary, $Sc_g_Text_replace_preg_ary, $Sc_g_footnote_ary_dim;

    $offset = '          ';

    if (0 < $Sc_g_footnote_ary_dim)
    {
      To_f_headline_add_hides_begin( 'Fußnoten', 'Fußnoten', $Glo_g_Site_activ.':Fussnoten', $offset, 'hideContent');
        Sc_g_footnote_make( false);
      To_f_headline_add_hides_end( $offset, 'hideContent');
    }
    echo $offset.''."\n";
    echo $offset.''."\n";
    echo $offset.'    <br>'."\n";
    //%!echo $offset.'    <p style="color: #505050">'."\n";
    echo $offset.'    <p>'."\n";
    echo $offset.'      Stand 28. August 2022, 09:00 CET.'."\n";
    echo $offset.'    </p>'."\n";
    echo $offset.'    <br>'."\n";
    //%!echo $offset.'    <p style="font-size: 13px; line-height: 0.7em;">'."\n";
    //%!echo $offset.'      Permanente Links:<br>'."\n";
    //%!echo $offset.'      <span style="color: #A0A0A0">(Klicke auf die Archivlogos zum Abruf und Ansehen der Archive dieser Seite)</span>'."\n";
    //%!echo $offset.'    </p>'."\n";
    echo $offset.'    <table>'."\n";
    echo $offset.'      <tr>'."\n";
    echo $offset.'        <td style="padding-right: 30px;">'."\n";
    echo $offset.'          <p style="font-size: 13px; line-height: 1.2em; margin-left: 0px;">'."\n";
    echo $offset.'            Permanente Links:<br>'."\n";
    echo $offset.'            <span style="font-size: 11px; color: #A0A0A0">(Klicke auf die Archivlogos<br />zum Abruf und Ansehen<br />der Archive dieser Seite.)</span>'."\n";
    echo $offset.'          </p>'."\n";
    echo $offset.'        </td>'."\n";
    echo $offset.'        <td style="padding-right: 20px;">'."\n";
    echo $offset.'          <a target="_blank" href="http://web.archive.org/save/'.($Glo_g_Site_ary[$Glo_g_Site_activ][url_abs]).'" title="WayBack Machine – permanenten Link auf Webseiten-Kopie erstellen">'."\n";
    echo $offset.'            <img src="'.$Glo_PathRel_back.'../share/images/Archive/logo_wayback_210x77.png" width="120" height="44" border="0" alt="Logo Wayback Machine">'."\n";
    echo $offset.'          </a>'."\n";
    echo $offset.'        </td>'."\n";
    echo $offset.'        <td>'."\n";
    echo $offset.'          <a target="_blank" href="http://archive.today/?run=1&url='.($Glo_g_Site_ary[$Glo_g_Site_activ][url_abs]).'?openAll" title="archive.today – permanenten Link auf Webseiten-Kopie erstellen">'."\n";
    echo $offset.'            <div>'."\n";
    echo $offset.'				      <table>'."\n";
    echo $offset.'                <tr><td><div class="main-archive-today" style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.1em;">archive.today</div></td></tr>'."\n";
    echo $offset.'                <tr><td><div class="main-archive-today" style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 9px;">webpage capture</div></td></tr>'."\n";
    echo $offset.'              </table>'."\n";
    echo $offset.'            </div>'."\n";
    echo $offset.'          </a>'."\n";
    echo $offset.'        </td>'."\n";
    echo $offset.'      </tr>'."\n";
    echo $offset.'    </table>'."\n";
    echo $offset.'    <br>'."\n";
    echo $offset.''."\n";
    echo $offset.''."\n";
    
    
// #: Vue.js
// #: Testing und showing that its working at all.
    
    // #: Text ersetzen
    /*echo $offset.'    <div id="app">'."\n";
    echo $offset.'      <p>{{ message }}</p>'."\n";
    echo $offset.'    </div>'."\n";
    echo $offset.'    <script>'."\n";
    echo $offset.'      var app = new Vue({'."\n";
    echo $offset.'        el: \'#app\','."\n";
    echo $offset.'        data: {'."\n";
    echo $offset.'          message: \'Hello Vue!\''."\n";
    echo $offset.'        }'."\n";
    echo $offset.'      })'."\n";
    echo $offset.'    </script>'."\n";*/

    // #: Text durch Klick switchen
    /*echo $offset.'    <div id="app-3">'."\n";
    echo $offset.'      <a v-if="seen" @click="seen = false">'."\n";
    echo $offset.'        <p>Now you see me: Because it is true</p>'."\n";
    echo $offset.'      </a>'."\n";
    echo $offset.'      <a v-else @click="seen = true">'."\n";
    echo $offset.'        <p>Now you see me not: Because it is false</p>'."\n";
    echo $offset.'      </a>'."\n";
    echo $offset.'    </div>'."\n";
    echo $offset.'    <script>'."\n";
    echo $offset.'      var app3 = new Vue({'."\n";
    echo $offset.'        el: \'#app-3\','."\n";
    echo $offset.'        data: {'."\n";
    echo $offset.'          seen: true'."\n";
    echo $offset.'        }'."\n";
    echo $offset.'      })'."\n";
    echo $offset.'    </script>'."\n";*/
    
    
    echo $offset.'  </div>'."\n";
    echo $offset.'</div>'."\n";
  }
  
  
  
  const content_ary = 'content_ary';

  $NPYo_g_index_KurseVortraegeWorkshops_Head      =
                  array( 'normal',
                    '<h3 style="margin-top: 25px;">\\color{*ContentPart}{Kurse, Vorträge, Workshops\\hidden{, Seminare} \\small{– Erfahrungs- und Wissensvermittlung}}</h3>'."\n");
  $NPYo_g_index_KurseVortraegeWorkshops_ContentList      =
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:NPYo:Angebote-Veranstaltungen'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SpaLeb:Meetup-Yoga-Meets-Wissenschaft'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:NPYo:Meetup-LGBT-Spiritual-Hamburg'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:FrQFT:Meetup-Physik-Neu-Sehen-Ergruenden'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SpaLeb:Vor-Physik-Achtsamkeit-und-Yoga'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:SpaLeb:Vor-PerspektivW-AmbiguitaetsT-Entscheid-Demokra'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:NPYo:WS-Achtsamkeitsprozess-WoPhysikAufYogaTrifft'),
                    )));
  $NPYo_g_index_SozialeNetzwerkeForenSpenden_Head      =
                  array( 'normal',
                    '<h3 style="margin-top: 25px;">\\color{*ContentPart}{Soziale Netzwerke, Foren, Spenden \\small{– Öffentlichkeitsarbeit}}</h3>'."\n");
  $NPYo_g_index_SozialeNetzwerkeForenSpenden_ContentList      =
                  array( 'contentlist',
                    array( content_ary => array(
                      nSOSp_f_tableOfContents_elementAry( 'OM:FrQFT:Impressum:Netzwerke', 'Informiert werden, unterstützen, beteiligen …'),
                      nSOSp_f_tableOfContents_elementAry( 'OM:FrQFT:Impressum:Spenden', 'Ich freu mich über jede Unterstützung !!!'),
                    )));

  
  
?>
