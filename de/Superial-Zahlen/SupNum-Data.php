<?php
  $SupNum_g_Site_ary = array(
    'OM:SupNum:' =>
      array_merge(
        $nSOSp_g_info_wolfgangHuss,
        array( url_abs => 'http://www.nsosp.org/de/Superial-Zahlen/',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/',
      favicons_url_rel_opt => $Glo_PathRel_back.'../de/Superial-Zahlen/favicon/',
      name_short => 'SupZahl',
      font_ary => array(
        '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
        '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
      ),
      header_bgcolor => '#FFFFFF',
      header_pict_name => 'SN/SN_header_v02-01.jpg',
      header_pict_width => '930px',
      header_pict_height => '177px',
      header_pict_bgcolor => '#FFFFFF',
      header_pict_alt => 'Superial-Zahlen, mit Primzahlen ins Unendliche',
      header_links_marginLeft => '398px',
      copy_right =>
        'Superial-Zahlen (SN) \\\\'."\n".
        '© 1988–2022 by \\\\'."\n".
        'Wolfgang Huß und \\\\'."\n".
        'Media Line Digital e.K. \\\\'."\n".
        'is licensed under \\\\'."\n".
        '\\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
      litera_url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Literatur_de.php',
      litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/quantum-flow-theory_bibliographie_v8_002.bib',
    )),
    'OM:SupNum:Home' => array(
      url_abs => 'http://www.nsosp.org/de/Superial-Zahlen/index.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/index.php',
      titel => 'Superial-Zahlen (SN) - Deutsch',
      description => '\\name[undertitle]{OM:SupNum:Home}. — \\name[description]{OM:SupNum:Home}.',
      keywords => '',
      text_titel_h1 => 'Superial-Zahlen \\color{*TitleAdd}{\\small{(SN)}}',
      text_titel_short => 'Superial-Zahlen',
      text_undertitel_h2 => 'Mit Primzahlen ins Unendliche',
      text_titel_discr_h3 => 'Eine aktual unendliche abelsche Gruppe, als Erweiterung der rationalen Zahlen, die der Unendlichkeit eine fundamentale, fraktale Struktur gibt – neue Ideen elementarer Mathematik',
      jump_ary => array(
        'OM:SupNum:Home:Inhalt' => array( headline_text => 'Inhalt', headline_text_short => 'Inhalt'),
        'OM:SupNum:Home:Lexikon' => array( headline_text => 'Lexikon', headline_text_short => 'Lexikon'),
      ),
    ),
    'OM:SupNum:Eigenschaften' => array(
      url_abs => 'http://www.nsosp.org/de/Superial-Zahlen/Eigenschaften.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Eigenschaften.php',
      titel => 'Eigenschaften - Die Superial-Zahlen (SN) - Deutsch',
      description => '\\name[undertitle]{OM:SupNum:Eigenschaften}. — \\name[description]{OM:SupNum:Eigenschaften}.',
      keywords => '',
      text_titel_h1 => 'Eigenschaften',
      text_titel_short => 'Eigenschaften',
      text_undertitel_h2 => 'Welche Erkenntnisse können wir aus den Superial-Zahlen lernen',
      text_titel_discr_h3 => '',
      jump_ary => array(
        'OM:SupNum:Eigenschaften:XXX' => array( headline_text => 'XXX', headline_text_short => 'XXX'),
      ),
    ),
    'OM:SupNum:Einleitung' => array(
      url_abs => 'http://www.nsosp.org/de/Superial-Zahlen/Einleitung_de.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Einleitung_de.php',
      titel => 'Einleitung - Die Superial-Zahlen (SN) - Deutsch',
      description => 'Mit den Superial-Zahlen die fraktale Struktur des Unendlichen entdecken.',
      keywords => '',
      text_titel_h1 => 'Einleitung',
      text_titel_short => 'Einleitung',
      text_undertitel_h2 => 'Mit den Superial-Zahlen die fraktale Struktur des Unendlichen entdecken',
      text_titel_discr_h3 => '',
      jump_ary => array(
        'OM:SupNum:Einleitung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
          'OM:SupNum:Einleitung:Vortext:Equ-Def-Ableitung-mit-s-hoch-minus-Eins' => array( headline_text => 'SN.Ein.3'),
          'OM:SupNum:Einleitung:Vortext:Fig-GeradeSuperialZahlen' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
          'OM:SupNum:Einleitung:Vortext:Frage-und-zweite-Erkenntnis' => array( headline_text => 'Was ist \\term{s}?'/*, headline_text_short => 'XXX'*/),
          'OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-N' => array( headline_text => 'SN.Ein.12'),
          'OM:SupNum:Einleitung:Vortext:Equ-N-ist-mit-Null' => array( headline_text => 'SN.Ein.13'),
          'OM:SupNum:Einleitung:Vortext:Equ-omega-ist-Anzahl-in-N' => array( headline_text => 'SN.Ein.14'),
          'OM:SupNum:Einleitung:Vortext:Equ-s-ueber-P-omega' => array( headline_text => 'SN.Ein.15'),
        'OM:SupNum:Einleitung:Grundlagen' => array( headline_text => 'Grundlagen'/*, headline_text_short => 'XXX'*/),
          'OM:SupNum:Einleitung:Grundlagen:Equ-alle-n-kleiner-s' => array( headline_text => 'SN.Ein.Gr.14'),
          'OM:SupNum:Einleitung:Grundlagen:Equ-exist-n-mit-r-kleiner-n' => array( headline_text => 'SN.Ein.Gr.15'),
          'OM:SupNum:Einleitung:Grundlagen:Ganze-Natuerl-Sup-Zahl-und-Integration' => array( headline_text => 'Definition ganzer und natürlicher Superial-Zahlen und die Integration'/*, headline_text_short => 'XXX'*/),
        'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn' => array( headline_text => 'Fragestellungen und perspektivischer Erkenntnisgewinn'/*, headline_text_short => 'XXX'*/),
          'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Ueberrationalitaetsvermutung' => array( headline_text => 'Überrationalitätsvermutung', headline_text_short => 'Überrationalitätsvermutung'),
          'OM:SupNum:Einleitung:FragestellungenErkenntnisgewinn:Primzahlenprodukt-Vermutung' => array( headline_text => 'Primzahlenprodukt-Vermutung', headline_text_short => 'Primzahlenprodukt-Vermutung'),
      ),
    ),
    'OM:SupNum:Formale-Entwicklung' => array(
      url_abs => 'http://www.nsosp.org/de/Superial-Zahlen/Formale-Entwicklung.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Formale-Entwicklung.php',
      titel => 'Formale Entwicklung - Die Superial-Zahlen (SN) - Deutsch',
      description => '\\name[undertitle]{OM:SupNum:Formale-Entwicklung}.\\hidden{ — \\name[description]{OM:SupNum:Formale-Entwicklung}.}',
      keywords => '',
      text_titel_h1 => 'Formale Entwicklung',
      text_titel_short => 'Formale Entwicklung',
      text_undertitel_h2 => 'Definition der Superial-Zahlen und ihrer wichtigen Teilmengen',
      text_titel_discr_h3 => '',
      jump_ary => array(
        'OM:SupNum:Formale-Entwicklung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
          'OM:SupNum:Formale-Entwicklung:Vortext:DefinitionSuperialeEinheit' => array( headline_text => 'Definition der superialen Einheit \\term{s}',/* headline_text_short => 'XXX'*/),
          'OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktWiederholung' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
          'OM:SupNum:Formale-Entwicklung:Vortext:Fig-sGeomKonstruktTeilung' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
        'OM:SupNum:Formale-Entwicklung:GanzeSZ' => array( headline_text => 'Ganze Superial-Zahlen'/* , headline_text_short => 'XXX' */),
        'OM:SupNum:Formale-Entwicklung:NatuerlicheSZ' => array( headline_text => 'Natürliche Superial-Zahlen'/* , headline_text_short => 'XXX' */),
        'OM:SupNum:Formale-Entwicklung:PrimSZ' => array( headline_text => 'Superiale Primzahlen'/* , headline_text_short => 'XXX' */),
      ),
    ),
    'OM:SupNum:Literatur' => array(
      url_abs => 'http://www.nsosp.org/de/Superial-Zahlen/Literatur_de.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Literatur_de.php',
      titel => 'Literatur - Die Superial-Zahlen (SN) - Deutsch',
      description => 'Literatur zu den Superial-Zahlen.',
      keywords => '',
      text_titel_h1 => 'Literatur',
      text_titel_short => 'Literatur',
      text_undertitel_h2 => 'und Informationen',
      //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
      jump_ary => array(
      ),
    ),
    'OM:SupNum:Primzahlprodukt-Vermutung' => array(
      url_abs => 'http://www.nsosp.org/de/Superial-Zahlen/Primzahlprodukt-Vermutung.php',
      url_rel => $Glo_PathRel_back.'../de/Superial-Zahlen/Primzahlprodukt-Vermutung.php',
      titel => 'Primzahlprodukt-Vermutung - Die Superial-Zahlen (SN) - Deutsch',
      description => '\\name[undertitle]{OM:SupNum:Primzahlprodukt-Vermutung}. — \\name[description]{OM:SupNum:Primzahlprodukt-Vermutung}.',
      keywords => '',
      text_titel_h1 => 'Primzahlprodukt-Vermutung',
      text_titel_short => 'Primzahlprodukt-Vermutung',
      text_undertitel_h2 => 'Entspricht das Primzahlprodukt aller endlicher Primzahlen, also die Primfakultät über alle Primzahlen in der Menge der natürlichen Zahlen, der Anzahl der natürlichen Zahlen',
      text_titel_discr_h3 => '',
      jump_ary => array(
        'OM:SupNum:Primzahlprodukt-Vermutung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
          'OM:SupNum:Primzahlprodukt-Vermutung:Vortext:XXX' => array( headline_text => 'XXX',/* headline_text_short => 'XXX'*/),
        'OM:SupNum:Primzahlprodukt-Vermutung:XXX' => array( headline_text => 'XXX',/* headline_text_short => 'XXX'*/),
      ),
    ),
  );
?>
