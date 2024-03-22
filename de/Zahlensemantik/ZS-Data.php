<?php
  $ZS_g_Site_ary = array(
    'OM:ZS:' =>
      array( url_abs => 'https://nsosp.org/de/Zahlensemantik/',
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
                            '© 2010–2024 by \\\\'."\n".
                            'Raimund Welsch \\\\'."\n".
                            'is licensed under \\\\'."\n".
                            '\\jump{OM:FrQFT:Impressum:CopyrightLizenz:Inhalt}{CC BY-ND 4.0}',
             litera_url_rel => $Glo_PathRel_back.'../de/Zahlensemantik/Literatur_de.php',
             litera_bibtex_url_rel => $Glo_PathRel_back.'../share/bibtex/zahlensemantik_bibliographie.bib',
           ),

     'OM:ZS:Home' =>
      array( url_abs => 'https://nsosp.org/de/Zahlensemantik/index.php',
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
      array( url_abs => 'https://nsosp.org/de/Zahlensemantik/Einleitung.php',
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
                               
                    'OM:ZS:Einleitung:Pi-Vektor' => array( headline_text => '\lm{ \pi }-Vektor', headline_text_short => 'π-Vektor'),
                    'OM:ZS:Einleitung:Phi-Formel' => array( headline_text => '\lm{ \phi }-Formel', headline_text_short => 'Φ-Formel'),
                  ),
           ),
     'OM:ZS:Literatur' =>
      array( url_abs => 'https://nsosp.org/de/Zahlensemantik/Literatur.php',
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
  );
?>
