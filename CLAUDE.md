# CLAUDE.md

## Project Overview

**New Soul Of Science Project Website** — akademische/wissenschaftliche Website zur Veröffentlichung originaler wissenschaftlicher Theorien und philosophischer Konzepte.

- **URL:** https://nsosp.org
- **Autor:** Wolfgang Huß / Media Line Digital e.K.
- **Lizenz:** CC BY-ND 4.0
- **Sprache:** Primär Deutsch, minimaler englischer Inhalt unter `/eng/`

## Tech Stack

- **Backend:** PHP (PHP-FPM 8.1), kein Framework — eigenes Template-System
- **Webserver:** Nginx (Produktion) / Apache mit mod_rewrite
- **Frontend:** Vanilla HTML5, CSS3, JavaScript (keine Frameworks)
- **Formeln:** MathJax für LaTeX-Rendering
- **Schriftart:** Open Sans (Google Fonts)
- **Analytics:** Google Analytics (anonymisiert) + Google Tag Manager
- **Mobile:** Mobile-Detect Library 2.8.24
- **Deployment:** GitHub-Webhook → `deploy/deploy.sh` → `git pull -ff`

## Projektstruktur

```
/
├── de/                              # Deutsche Inhalte (Hauptsprache)
│   ├── Quanten-Fluss-Theorie/       # Fraktale Quanten-Fluss-Theorie (FrQFT)
│   ├── Spannungsspiel-des-Lebens/   # Neue Biophysik (SpaLeb)
│   ├── Naturphilosophie-Yoga/       # NaPhil-Yoga (NPYo)
│   ├── Superial-Zahlen/             # Superial-Zahlen (SupNum)
│   ├── Biordinalzahlen/             # Biordinalzahlen (BO)
│   ├── Operialtheorie/              # Operial-Theorie (OT)
│   ├── Naturphilosophie-der-Zeit/   # Naturphilosophie der Zeit
│   ├── Vereinheitlichte-Relativitätstheorie/ # VRT
│   ├── Zahlensemantik/              # Zahlensemantik
│   ├── New-Soul-Of-Science-Academy/ # NSOSA Akademie
│   └── New-Soul-Of-Science-Project/ # Projekt-Übersicht
├── eng/                             # Englische Inhalte (6 statische HTML-Seiten)
├── share/                           # Gemeinsame Ressourcen
│   ├── php/                         # PHP-Bibliotheken
│   │   ├── NSOSP.php                # Hauptkonfiguration (~3.600 Zeilen)
│   │   ├── Science.php              # Wissenschaftliche Verarbeitung (~1.700 Zeilen)
│   │   ├── Tools.php                # Content-Rendering (~2.900 Zeilen)
│   │   └── Consts.php               # Konstanten
│   ├── css/                         # Stylesheets (main.css, Grid, Reset, Print)
│   ├── js/                          # JavaScript (Tools.js, NSOSP.js, etc.)
│   ├── images/                      # Bilder & Diagramme (80+ Dateien)
│   └── bibtex/                      # Bibliografie-Dateien
├── download/                        # PDFs, Videos, Ressourcen (~125 MB)
├── deploy/                          # Deployment-Skripte & Nginx-Konfiguration
├── FrQFT/, SN/, SpaLeb/, VRT/      # Kurzlink-Weiterleitungen
├── index.php                        # Root-Redirect → de/New-Soul-Of-Science-Project/
├── sitemap.xml                      # SEO-Sitemap
├── robots.txt                       # Crawler-Regeln
└── htaccess.txt                     # Apache Rewrite-Vorlage (300+ Redirects)
```

## Architektur

### Request-Flow

```
URL → .htaccess Rewrite → index.php / section/page.php
    → NSOSP.php (lädt alle *-Data.php Dateien)
    → Science.php + Tools.php (Verarbeitungsschicht)
    → Seite rendert mit Template-Funktionen
    → CSS + JS + MathJax → HTML an Browser
```

### 3-Schichten-System

1. **Config-Schicht:** `NSOSP.php` — lädt alle `*-Data.php` Dateien, definiert globale Variablen
2. **Verarbeitungsschicht:** `Science.php`, `Tools.php`, `Consts.php` — Content-Processing & Rendering
3. **Präsentationsschicht:** Individuelle Seiten-PHP-Dateien

### Dateimuster pro Sektion

```
de/[Sektion]/
├── index.php              # Sektions-Startseite
├── [Sektion]-Data.php     # Navigation, Metadaten, Seitenstruktur
├── [SeitenName]_de.php    # Inhaltsseiten
├── Literatur_de.php       # Bibliografie
├── Impressum_de.php       # Impressum
└── favicon/               # Sektions-spezifische Icons
```

## Konventionen

### Namensgebung

- **Navigationsschlüssel:** `OM:[SEKTION]:[SEITE]:[ELEMENT]` (z.B. `OM:FrQFT:Home:Inhalt`)
- **Datendateien:** `[Sektion]-Data.php`
- **Inhaltsseiten:** `[SeitenName]_de.php`
- **URL-Struktur:** `/de/[Sektion]/[Seiten_Name]_de.php`
- **Kurzlinks:** `/FrQFT/`, `/SN/`, `/SpaLeb/`, `/VRT/` → leiten auf deutsche Seiten weiter

### Globale Variablen

- `$Glo_*` — Globale Website-Variablen
- `$FrQFT_g_*` — FrQFT-Sektion
- `$SpaLeb_g_*` — Spannungsspiel-Sektion
- `$Sc_g_*` — Science-Verarbeitung
- `$To_g_*` — Tools/Template-Arrays

### Custom Template-Syntax (LaTeX-ähnlich)

```
\jump{name}{text}          # Interne Links
\color{*FarbName}{text}    # Farbige Texte mit Themes
\italic{text}              # Kursiv
\bold{text}                # Fett
\term{math}                # Mathematische Terme
\cite{ref}                 # Zitationen
\const{name}               # Konstanten-Einfügung
\footnote{inhalt}          # Fußnoten
\lm{formel}                # LaTeX-Mathe-Rendering (ehem. \latexmath)
\name[typ]{schlüssel}      # Dynamische Namenseinfügung
\hidden{text}              # Versteckter Text
```

### Farbthemen-System

- Benannte Theme-Farben: `*TitleAdd`, `*Entwick`, `*Bearb`, `*Light`
- Definiert in `$Glo_g_Color_list`
- Global anwendbar über `\color{*Name}{text}`

### Wichtige Rendering-Funktionen

```php
To_f_Paragraph()           // Textblöcke
To_f_Chapter_v1()          // Kapitel-Organisation
To_f_Paragraph_list()      // Listen & kollabierbare Abschnitte
Sc_f_equation_list()       // Mathematische Gleichungen
To_f_tableOfContents()     // Automatisches Inhaltsverzeichnis
To_f_Site()                // Seitennavigation
```

## Thematische Sektionen (Kurzbezeichnungen)

| Kürzel   | Name                                | Thema                                     |
|----------|-------------------------------------|-------------------------------------------|
| FrQFT    | Fraktale Quanten-Fluss-Theorie      | Vereinheitlichte Quanten- und Gravitationsphysik |
| SpaLeb   | Spannungsspiel des Lebens           | Neue Biophysik, Körper-Seele-Beziehung    |
| NPYo     | Naturphilosophie-Yoga               | Integriertes Yoga-System                  |
| SupNum   | Superial-Zahlen                     | Mathematik unendlicher Strukturen         |
| BO       | Biordinalzahlen                     | Erweiterung der Ordinalzahlen             |
| OT       | Operialtheorie                      | Neue mathematische Rahmentheorie          |
| VRT      | Vereinheitlichte Relativitätstheorie| Neues relativistisches Konzept            |
| NSOSA    | New Soul Of Science Academy         | Bildungsplattform                         |

## Deployment

- **Repository:** `git@github.com:New-Soul-Of-Science-Project/New-Soul-Of-Science-Project-Web.git`
- **Branch:** `master` (Produktion)
- **Release-Muster:** `release-v9.XX` Branches → Merge in `master`
- **Automatisch:** GitHub-Push → Webhook (Port 9001) → `deploy.sh` → `git pull -ff`
- **Server:** Alpine Linux, Nginx, PHP-FPM 8.1

## Hinweise für Entwicklung

- Kein Build-Step nötig — PHP wird serverseitig gerendert
- Änderungen an PHP/CSS/JS sind sofort wirksam nach Deployment
- `htaccess.txt` ist die Vorlage für `.htaccess` (wird nicht direkt committed)
- Testseiten mit `XXX` im Namen werden von robots.txt ausgeschlossen
- Bilder liegen als JPG + PDF-Paare vor (z.B. `Elapson_v05.jpg`/`.pdf`)
- Die `sitemap.xml` und Copyright-Jahr müssen bei Releases manuell aktualisiert werden
