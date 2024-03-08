<?php
  $BiOrd_g_Site_ary = array(
    'OM:BiOrd:' =>
      array_merge(
        $nSOSp_g_info_wolfgangHuss,
        array( url_abs => 'https://nsosp.org/de/Biordinalzahlen/',
      url_rel => $Glo_PathRel_back.'../de/Biordinalzahlen/',
      favicons_url_rel_opt => $Glo_PathRel_back.'../de/Biordinalzahlen/favicon/',
      name_short => 'BiOrd',
      font_ary => array(
        '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
        '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">',
      ),
      header_bgcolor => '#FFFFFF',
      header_pict_name => 'BO/BO_header_v01-03-3720x708.jpg',
      header_pict_width => '930px',
      header_pict_height => '177px',
      header_pict_bgcolor => '#FFFFFF',
      header_pict_alt => 'Biordinalzahlen, die Vorgänger der Limeszahlen',
      header_links_marginLeft => '359px',
      copy_right =>
        'Biordinalzahlen (BO) \\\\'."\n".
        '© 2003–2024 by \\\\'."\n".
        'Wolfgang Huß und \\\\'."\n".
        'Media Line Digital e.K. \\\\'."\n".
        'is licensed under \\\\'."\n".
        '\\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
      litera_url_rel => $Glo_PathRel_back.'../de/Biordinalzahlen/Literatur.php',
      litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/quantum-flow-theory_bibliographie_v8_002.bib',
    )),
    'OM:BiOrd:Home' => array(
      url_abs => 'https://nsosp.org/de/Biordinalzahlen/index.php',
      url_rel => $Glo_PathRel_back.'../de/Biordinalzahlen/index.php',
      titel => 'Biordinalzahlen (BO) - Deutsch',
      description => '\\name[undertitle]{OM:BiOrd:Home}. — \\name[description]{OM:BiOrd:Home}.',
      keywords => '',
      text_titel_h1 => 'Biordinalzahlen \\color{*TitleAdd}{\\small{(BO)}}',
      text_titel_short => 'Biordinalzahlen',
      text_undertitel_h2 => 'Die Vorgänger der Limeszahlen',
      text_titel_discr_h3 => 'Die Erweiterung der Ordinalzahlen zu einem algebraischen Ring – neue Ideen elementarer Mathematik',
      jump_ary => array(
        'OM:BiOrd:Home:Inhalt' => array( headline_text => 'Inhalt', headline_text_short => 'Inhalt'),
        'OM:BiOrd:Home:Lexikon' => array( headline_text => 'Lexikon', headline_text_short => 'Lexikon'),
      ),
    ),
    'OM:BiOrd:Einleitung' => array(
      url_abs => 'https://nsosp.org/de/Biordinalzahlen/Einleitung.php',
      url_rel => $Glo_PathRel_back.'../de/Biordinalzahlen/Einleitung.php',
      titel => 'Einleitung - Biordinalzahlen (BO) - Deutsch',
      description => '\\name[undertitle]{OM:BiOrd:Einleitung}. — \\name[description]{OM:BiOrd:Einleitung}.',
      keywords => '',
      text_titel_h1 => 'Einleitung',
      text_titel_short => 'Einleitung',
      text_undertitel_h2 => 'Die Erweiterung der Ordinalzahlen zu einem Ring',
      text_titel_discr_h3 => 'Negative Ordinalzahlen und Vorgänger aller Limeszahlen\\hidden{ (\\term{ω, 2ω, ⋯ , ω^^{2}, ⋯})}',
      jump_ary => array(
        'OM:BiOrd:Einleitung:<init>' => array( Ani_init => ($FrQFT_g_Ani_idx = 0), Fig_init => ($FrQFT_g_Fig_idx = 0), Vid_init => ($FrQFT_g_Vid_idx = 0)),
                   
          'OM:BiOrd:Einleitung:Vortext:Ordinalzahlen' => array( headline_text => 'Ordinalzahlen'/*, headline_text_short => 'XXX'*/),
          'OM:BiOrd:Einleitung:Vortext:Equ-n-gleich-Menge-Null-bis-n-minus-Eins' => array( headline_text => 'BO.Ein.5'),
          'OM:BiOrd:Einleitung:Vortext:Equ-n-plus-Eins' => array( headline_text => 'BO.Ein.6'),
          'OM:BiOrd:Einleitung:Vortext:Equ-Def-N-enthaelt-Null' => array( headline_text => 'BO.Ein.8'),
          'OM:BiOrd:Einleitung:Vortext:Equ-Def-omega-gleich-N' => array( headline_text => 'BO.Ein.9'),
          'OM:BiOrd:Einleitung:Vortext:Equ-minus-n' => array( headline_text => 'BO.Ein.23'),
          'OM:BiOrd:Einleitung:Vortext:Equ-minus-Omega' => array( headline_text => 'BO.Ein.24'),
          'OM:BiOrd:Einleitung:Vortext:Equ-Lambda-minus-Beta' => array( headline_text => 'BO.Ein.30'),
                        
        'OM:BiOrd:Einleitung:IntegrierteMengenlehre' => array( headline_text => 'Integrierte Mengenlehre'/*, headline_text_short => 'XXX'*/),
          'OM:BiOrd:Einleitung:IntegrierteMengenlehre:Equ-Antimenge' => array( headline_text => 'BO.Ein.IM.1'),
                        
        'OM:BiOrd:Einleitung:OntologischeDeutung' => array( headline_text => 'Ontologische Deutung'/*, headline_text_short => 'XXX'*/),
                        
        'OM:BiOrd:Einleitung:NeueEinsichten' => array( headline_text => 'Neue Einsichten'/*, headline_text_short => 'XXX'*/),
                        
          'OM:BiOrd:Einleitung:NeueEinsichten:EineFundamentaleAsymmetrie' => array( headline_text => 'Eine fundamentale Asymmetrie'/*, headline_text_short => 'XXX'*/),
          'OM:BiOrd:Einleitung:NeueEinsichten:Fig-OntologieGanzeZahlen' => array( headline_text => 'Abbildung '.(++$FrQFT_g_Fig_idx)),
          'OM:BiOrd:Einleitung:NeueEinsichten:AnzahlDerEndlichenGanzenZahlen' => array( headline_text => 'Anzahl der endlichen ganzen Zahlen'/*, headline_text_short => 'XXX'*/),
          'OM:BiOrd:Einleitung:NeueEinsichten:Equ-Sum-z' => array( headline_text => 'BO.Ein.NE.12'),

          'OM:BiOrd:Einleitung:NeueEinsichten:NeueEinsichtenZuPosAktualUnendl' => array( headline_text => 'Neue Einsichten zu positiven aktual unendlichen Biordinalzahlen'/*, headline_text_short => 'XXX'*/),
          'OM:BiOrd:Einleitung:NeueEinsichten:MehrGanzeZahlenVorOmega' => array( headline_text => 'Es gibt mehr ganze Zahlen von Null bis zu \\term{ω}, als der Wert von \\term{ω} ausdrückt', headline_text_short => 'Es gibt mehr ganze Zahlen von Null bis zu ω, als der Wert von ω ausdrückt'),
          'OM:BiOrd:Einleitung:NeueEinsichten:Equ-Anz-Zahlen-vor-omega' => array( headline_text => 'BO.Ein.NE.68'),
          'OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-n' => array( headline_text => 'BO.Ein.NE.74'),
          'OM:BiOrd:Einleitung:NeueEinsichten:Equ-Def-N-unendlich' => array( headline_text => 'BO.Ein.NE.75'),
          'OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N-unendlich' => array( headline_text => 'BO.Ein.NE.76'),
          'OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-omega' => array( headline_text => 'BO.Ein.NE.77'),
          'OM:BiOrd:Einleitung:NeueEinsichten:Equ-GaussscheSummenformel-angepasst-mit-N' => array( headline_text => 'BO.Ein.NE.78'),
      ),
    ),
    'OM:BiOrd:Literatur' => array(
      url_abs => 'https://nsosp.org/de/Biordinalzahlen/Literatur.php',
      url_rel => $Glo_PathRel_back.'../de/Biordinalzahlen/Literatur.php',
      titel => 'Literatur - Biordinalzahlen (SN) - Deutsch',
      description => 'Literatur zu den Biordinalzahlen.',
      keywords => '',
      text_titel_h1 => 'Literatur',
      text_titel_short => 'Literatur',
      text_undertitel_h2 => 'und Informationen',
      //text_titel_discr_h3 => 'Vereinheitlichte Physik auf Basis eines selbstorganisierten, fraktalen Systems von lichtähnlichen, zu Strings verbundenen Wirkungsquanten.',
      jump_ary => array(
      ),
    ),
  );
?>
