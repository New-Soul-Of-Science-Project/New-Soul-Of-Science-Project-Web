# Vortragsreihe zu den Superial-Zahlen

## Ausgangspunkt und Grundidee

Die Vortragsreihe soll nicht als streng lineare Abfolge verstanden werden, sondern als **gemeinsamer Stamm mit mehreren thematischen Verzweigungen**.

Der gemeinsame Ausgangspunkt ist die Frage nach einem sinnvoll normierten Infinitesimal der Analysis:

$$
\Delta x = h.
$$

Die klassische Analysis löst die Ableitungsfrage über den Grenzübergang

$$
h \to 0,
$$

ohne einen festen infinitesimalen Zahlenwert für $h$ vorauszusetzen.

Die Superial-Zahlen stellen eine zusätzliche Frage:

> Kann der infinitesimale Schritt selbst als von null verschiedenes, algebraisch verfügbares und mathematisch normiertes Zahlobjekt erhalten werden?

Aus dieser Frage entsteht die Beziehung

$$
h = s^{-1},
$$

wobei $s$ als infinite ganzzahlige Schrittanzahl bzw. als infiniter Gegenmaßstab des infinitesimalen Schritts eingeführt wird.

Die weitere Normierungsfrage führt über rationale Skalierungen, universelle Teilbarkeit, Primzahlpotenzen und das Primzahl-Flächenprodukt zu einer vollständigen primexponentiellen Struktur.

Der erste Vortrag bildet deshalb den gemeinsamen Stamm, aus dem mehrere mögliche Fortsetzungen hervorgehen.

---

# Vortrag 1

## Suche nach dem sinnvoll normierten Infinitesimal der Analysis

### Leitfrage

Welches Zahlobjekt könnte selbst die Rolle eines infinitesimalen Rechenschritts übernehmen?

### Zentrale Entwicklung

Ausgangspunkt ist der klassische Differenzenquotient

$$
\frac{\Delta y}{\Delta x}
=
\frac{f(x+h)-f(x)}{h},
\qquad
\Delta x=h.
$$

Für $f(x)=x^2$ ergibt sich

$$
\frac{(x+h)^2-x^2}{h}
=
2x+h.
$$

Die klassische Ableitung verwendet den Grenzübergang

$$
h\to0
$$

und erhält

$$
f'(x)=2x.
$$

Die zusätzliche superiale Fragestellung lautet dagegen:

> Kann $h$ selbst einen festen infinitesimalen Zahlenwert erhalten?

Innerhalb der reellen Zahlen existiert kein positives $h$ mit

$$
0<h<\frac1n
\qquad
\text{für jedes }n\in\mathbb N.
$$

Selbst die Existenz irgendeines Infinitesimals genügt jedoch noch nicht, denn aus $h$ entstehen unmittelbar weitere infinitesimale Größen wie

$$
2h,\quad 3h,\quad h^2,\quad h^3,\ldots
$$

Es fehlt eine Normierung.

### Schrittweite und Schrittanzahl

Wird die Einheit $1$ aus gleich großen Schritten der Breite $h$ zusammengesetzt, entsteht eine zugehörige infinite Schrittanzahl $s$:

$$
s\cdot h=1.
$$

Damit gilt

$$
h=s^{-1}.
$$

$s$ wird als **das Superial** bezeichnet.

### Rationale Skalierung

Eine rationale Weglänge

$$
\frac mn
$$

enthält

$$
\frac{m}{n}\cdot s
=
\frac{ms}{n}
$$

Schritte der Breite $s^{-1}$.

Damit diese Schrittanzahl ganzzahlig bleibt, wird gefordert:

$$
n\mid s
$$

für jede endliche natürliche Zahl $n\ge1$.

### Primzahlstruktur

Aus

$$
n\mid s
\qquad
\text{für jedes endliche }n
$$

folgt insbesondere

$$
p^k\mid s
$$

für jede endliche Primzahl $p$ und jeden endlichen Exponenten $k$.

Damit reicht kein endlicher Primexponent aus.

Die vollständige Struktur führt auf zwei Mengen:

$$
\mathbb P
=
\{\text{alle endlichen Primzahlen}\}
$$

und

$$
\mathbb N
=
\{\text{alle natürlichen Exponenten}\}.
$$

Die normierende Struktur wird durch die vollständige und eineindeutige Verknüpfung

$$
\mathbb P\times\mathbb N
$$

sichtbar.

Dabei gilt:

- Die Vollständigkeit von $\mathbb P$ sorgt dafür, dass **alle endlichen Primzahlen** berücksichtigt werden.
- Die Vollständigkeit von $\mathbb N$ sorgt dafür, dass jede Primzahl **alle natürlichen Exponenten** erhält.
- Jedes Paar $(p,n)$ tritt genau einmal auf.
- Keine Primzahl wird ausgelassen oder bevorzugt.
- Die natürliche Exponentenfolge besitzt den Ordnungstyp $\omega$.

Das Primzahl-Flächenprodukt visualisiert diese Struktur.

### Abschluss von Vortrag 1

Der erste Vortrag sollte nicht zwingend bereits mit

$$
s\equiv_{\mathrm{kan}}\omega^\omega
$$

enden.

Stattdessen bietet sich ein **Fragenfächer** an, der die verschiedenen Fortsetzungsrichtungen der Reihe sichtbar macht.

---

# Fragenfächer nach Vortrag 1

Aus der ursprünglichen Frage nach einem normierten Infinitesimal entstehen mehrere neue Fragen:

1. **Was bedeutet die Teilbarkeit des Superials geometrisch für Strecken, Maße und Integralgrenzen?**
2. **Welche endlichen Koeffizienten sind mit dem infinitesimalen Raster sinnvoll verträglich?**
3. **Was sind die Superial-Zahlen als vollständiges Zahlensystem?**
4. **Wie rechnet man tatsächlich mit dem normierten Infinitesimal $s^{-1}$?**
5. **Warum führt die vollständige Primzahlstruktur zu $\omega$?**
6. **Warum gilt die kanonische Identifikation $s\equiv_{\mathrm{kan}}\omega^\omega$?**
7. **Wie entstehen aktual unendliche Summen und Erzeugungsanzahlen?**
8. **Wie wird das gesamte Modell innerhalb von ZFC verankert?**
9. **Welche metaphysischen und physikalischen Fragen entstehen aus einem festen Infinitesimal?**

Dieser Fragenfächer kann zugleich als Abschlussfolie des ersten Vortrags dienen.

---

# Bevorzugter Hauptpfad der Reihe

## Vortrag 2

# Teilung, Maß und Primzahlen – Die Geometrie des Superials

### Leitfrage

Wie viele infinitesimale Schritte $s^{-1}$ passen in eine endliche Strecke?

### Ausgangspunkt

$$
1=s\cdot s^{-1}.
$$

Für rationale Teilstrecken:

$$
\frac12=\frac{s}{2}\,s^{-1},
$$

$$
\frac13=\frac{s}{3}\,s^{-1},
$$

allgemein

$$
\frac mn
=
\frac{ms}{n}\,s^{-1}.
$$

Die Forderung

$$
n\mid s
$$

garantiert, dass rationale Änderungen der Weglänge weiterhin zu ganzzahligen Schrittanzahlen führen.

### Bedeutung für die Integralrechnung

Diese Eigenschaft ist insbesondere für veränderte Integralgrenzen wichtig.

Eine rationale Veränderung einer Weglänge soll nicht dazu führen, dass die Anzahl der elementaren Schritte $s^{-1}$ ihre Ganzzahligkeit verliert.

### Übergang zu neuen Koeffizienten

Die nächste Frage lautet:

> Sind rationale Skalierungen bereits alle sinnvollen endlichen Skalierungen?

Beispiele:

$$
\sqrt2,
\qquad
\sqrt[3]{2},
\qquad
\frac{1+\sqrt5}{2}.
$$

Damit entsteht der Übergang von rationalen zu reell algebraischen Koeffizienten.

---

# Vortrag 3

# Von rationalen zu algebraischen Größen – Welche Koeffizienten sind zulässig?

### Leitfragen

- Warum genügen rationale Koeffizienten nicht?
- Welche endlichen Größen passen strukturell in das superiale Stellenwertsystem?
- Warum führen die Überlegungen zu den reell algebraischen Zahlen?

Der relevante Koeffizientenkörper ist

$$
\mathbb A_{\mathbb R}.
$$

### Themen

- rationale Koeffizienten,
- algebraische Irrationalzahlen,
- geometrisch erzeugbare Längen,
- algebraische Abgeschlossenheit im reellen Bereich,
- Rolle algebraischer Gleichungen,
- Übergang zu reell algebraischen Koeffizienten.

Danach folgt die weiterführende Frage:

> Welche endlichen Koeffizienten sind im gesuchten Sinn nicht mehr kanonisch geeignet?

Beispiele:

$$
\pi,\qquad e.
$$

Damit kann in die bewiesene Theorie zu algebraischen Koeffizienten und superialer Transzendenz übergeleitet werden.

---

# Vortrag 4

# Was sind die Superial-Zahlen? – Das vollständige Stellenwertsystem

### Leitfrage

Wie sieht das Zahlensystem aus, das aus der Basis $s$ und den zulässigen Koeffizienten entsteht?

Formale Struktur:

$$
\mathbb S
=
\mathbb A_{\mathbb R}\bigl((s^{\mathbb Z})\bigr).
$$

### Themen

- Stellenwertschichten $s^k$,
- negative Exponenten,
- endliche Schicht $s^0=1$,
- positive Exponenten,
- Koeffizienten aus $\mathbb A_{\mathbb R}$,
- Addition,
- Multiplikation,
- Ordnung,
- Hahn-Reihen als algebraisches Fundament,
- Schichtbewertung $\operatorname{ord}_s$.

Wichtig:

Die algebraische Wohldefiniertheit des Modells wird durch die Hahn-Reihen-Konstruktion getragen.

Die Primzahlstruktur erfüllt eine andere Aufgabe: die Normierung und kanonische primexponentielle Interpretation der Basis $s$.

---

# Vortrag 5

# Rechnen mit dem normierten Infinitesimal

### Themen

- Differenzenquotient bei

$$
h=s^{-1},
$$

- infinitesimale Reste,
- höhere Potenzen von $s^{-1}$,
- lokale Größenordnungen,
- algebraische Differentiation,
- Vergleich mit der klassischen Ableitung,
- Integralidee,
- tatsächliche infinitesimale Summen,
- Skalierung von Integralgrenzen.

Beispiel:

$$
\frac{(x+s^{-1})^2-x^2}{s^{-1}}
=
2x+s^{-1}.
$$

Der klassische Ableitungswert und der infinitesimale Rest bleiben dabei unterscheidbar.

---

# Vortrag 6

# Vom Primzahlprodukt zu $\omega$

### Leitfrage

Warum kann die vollständige Primzahlstruktur kanonisch mit dem von-Neumann-Ordinal $\omega$ verbunden werden?

### Zentrale Struktur

Das unendliche Primzahlprodukt wird als primexponentielles Objekt betrachtet:

$$
\omega\overline{\#}.
$$

Die grundlegende kanonische Verbindung lautet sinngemäß:

$$
\omega\overline{\#}
\equiv_{\mathrm{kan}}
\omega.
$$

Formal spielt dabei insbesondere die Beziehung

$$
lpr(\omega\overline{\#})=\omega
$$

eine zentrale Rolle.

### Bedeutung

Diese Identifikation erzeugt die Arithmetik des Superials nicht erst.

Sie verankert vielmehr die bereits vorhandene primexponentielle Struktur kanonisch in der transfiniten von-Neumann-Ordinalstruktur.

Damit erfüllt sie insbesondere eine wichtige Funktion für die ZFC-interne theoretische Fundierung.

---

# Vortrag 7

# Warum gilt $s\equiv_{\mathrm{kan}}\omega^\omega$?

### Leitfrage

Wie wird aus der kanonischen Identifikation einer vollständigen Primzahlzeile mit $\omega$ die kanonische Identifikation des gesamten Primzahl-Flächenprodukts?

### Ausgangspunkt

Eine vollständige Primzahlzeile:

$$
\omega\overline{\#}
\equiv_{\mathrm{kan}}
\omega.
$$

Das Primzahl-Flächenprodukt enthält eine vollständige natürliche Folge solcher vollständigen Primzahlstrukturen.

Die kanonische Identifikation

$$
s\equiv_{\mathrm{kan}}\omega^\omega
$$

verankert die gesamte primexponentielle Basisstruktur des Superials in der bekannten transfiniten Ordinalstruktur.

### Wichtige Unterscheidung

Die Aussage

$$
s\equiv_{\mathrm{kan}}\omega^\omega
$$

ist nicht bloß eine Aussage über die Mächtigkeit von

$$
\mathbb P\times\mathbb N.
$$

Sowohl $\mathbb P$ als auch $\mathbb N$ und ihr kartesisches Produkt sind abzählbar.

Die kanonische Identifikation betrifft die **primexponentielle Struktur und ihre transfinite Referenz**, nicht die bloße Anzahl ihrer Elemente.

---

# Vortrag 8

# Aktual unendliche Anzahlen und superiale Summen

Hier wird die kanonische Identifikation auch **arithmetisch** besonders wichtig.

### Erzeugungsanzahlen

Ein wichtiges Beispiel ist eine Erzeugungsanzahl der Form

$$
[0,x[_{\mathbb A_{\mathbb R}}
=
\frac{s}{2\omega}.
$$

Damit dieser Ausdruck eine ganzzahlige Erzeugungsanzahl liefert, genügt es nicht, $\omega$ lediglich als abstraktes von-Neumann-Ordinal zu betrachten.

Es wird eine mit der Primstruktur von $s$ kompatible primexponentielle Struktur von $\omega$ benötigt.

Hier erhält

$$
\omega\overline{\#}
\equiv_{\mathrm{kan}}
\omega
$$

eine konkrete arithmetische Bedeutung.

Ein geeignetes Primexponentenprodukt von $\omega$ kann als Bestandteil der Primexponentenstruktur von $s$ auftreten.

Dadurch wird die Teilbarkeit in Ausdrücken wie

$$
\frac{s}{2\omega}
$$

arithmetisch strukturell interpretierbar.

### Drei Funktionen der kanonischen Identifikation

Die kanonischen Identifikationen besitzen damit mindestens drei unterschiedliche Funktionen:

1. **Theoretische ZFC-Verankerung**

   Verbindung der neuen primexponentiellen Strukturen mit der von-Neumann-Ordinalstruktur.

2. **Transfinite Referenz**

   Kanonische Zuordnung primexponentieller Strukturen zu bekannten transfiniten Größen.

3. **Arithmetische Teilbarkeit**

   Relevanz für Erzeugungsanzahlen, aktual unendliche Summen und andere Quotienten, in denen transfinite Strukturen innerhalb von $s$ als Teiler auftreten.

---

# Vortrag 9

# Die ZFC-interne Konstruktion der Superial-Zahlen

### Themen

- Hahn-Reihen-Konstruktion,
- definierbare Koeffizientenstruktur,
- geordneter Körper,
- ZFC-interne Modellbildung,
- Unterschied zwischen algebraischer Konstruktion und kanonischer primexponentieller Interpretation,
- Rolle von $\omega$,
- Rolle des Primzahlprodukt-Theorems.

### Zentrale Trennung

Die algebraische Wohldefiniertheit und strukturelle Stabilität des Modells werden durch die Hahn-Reihen-Konstruktion getragen.

Das Haupttheorem der Primzahlprodukt-Vermutung liefert dagegen die kanonische Anbindung der primexponentiellen Basisstruktur an den Zahlenwert $\omega$:

$$
lpr(\omega\overline{\#})=\omega.
$$

---

# Alternativer Zweig: Metaphysik und Physik

Der erste Vortrag kann auch in eine bewusst metaphysisch-physikalische Richtung fortgesetzt werden.

## Metaphysischer Vortrag 2

# Zenon: Der fliegende Pfeil – Bewegung zwischen Ort und Veränderung

### Leitfragen

- Was bedeutet Bewegung in einem einzelnen Augenblick?
- Muss Bewegung ausschließlich als Grenzprozess beschrieben werden?
- Welche Rolle spielt die unendliche Teilbarkeit von Raum und Zeit?
- Was löst die klassische Analysis mathematisch?
- Welche ontologischen Fragen bleiben davon unabhängig offen?

### Themen

- Zenons Pfeilparadoxon,
- Achilles und die Schildkröte,
- potentielle und aktuale Unendlichkeit,
- stetige Bewegung,
- infinitesimale Veränderung,
- mathematische Beschreibung versus metaphysische Interpretation.

Wichtig:

Ein mathematisches Infinitesimal wie $s^{-1}$ darf nicht ohne zusätzliche physikalische Theorie mit einer kleinsten physikalischen Länge oder Zeitspanne identifiziert werden.

---

## Metaphysischer Vortrag 3

# Ist das Kontinuum unendlich teilbar?

### Themen

- mathematisches Kontinuum,
- physikalischer Raum,
- physikalische Zeit,
- Teilbarkeit,
- Diskretheit versus Kontinuität,
- mathematische Infinitesimale,
- mögliche physikalische Interpretationen,
- Grenzen solcher Interpretationen.

---

## Metaphysischer Vortrag 4

# Aristoteles, Leibniz und Cantor – drei Begriffe des Unendlichen

### Themen

- potentielles Unendlich,
- Leibnizsche Infinitesimalrechnung,
- aktual unendliche Mengen,
- Ordinalzahlen,
- Kardinalzahlen,
- Verbindung von Infinitesimalem und Aktual-Unendlichem in den Superial-Zahlen.

---

## Metaphysischer Vortrag 5

# Was bedeutet es, wenn Unendlich eine Rechengröße wird?

### Themen

- Prozess versus Zahlobjekt,
- Anzahl versus Ordnung,
- Kardinal versus Ordinal,
- primexponentielle Struktur,
- superialer Rechenwert,
- erkenntnistheoretische Bedeutung algebraisch sichtbarer Größenordnungen.

---

# Gesamtstruktur als Vortragsbaum

Der gemeinsame Stamm lautet:

**Vortrag 1: Suche nach dem sinnvoll normierten Infinitesimal der Analysis**

Danach verzweigt sich die Reihe in vier Hauptpfade.

## A. Analysis und Geometrie

1. Teilung, Maß und Primzahlen
2. Rationale Skalierung und Integralgrenzen
3. Reell algebraische Koeffizienten
4. Rechnen mit dem normierten Infinitesimal
5. Differentialrechnung
6. Integralrechnung
7. Tatsächliche infinitesimale Summen

## B. Zahlensystem und Algebra

1. Wenn ein Zahlbereich nicht mehr reicht
2. Was sind die Superial-Zahlen?
3. Stellenwertschichten
4. Reell algebraische Koeffizienten
5. Hahn-Reihen
6. Körperstruktur
7. Ordnung und Schichtbewertung

## C. Primzahlen, $\omega$ und ZFC

1. Warum normieren Primzahlen die Basis?
2. Das unendliche Primzahlprodukt
3. $\omega\overline{\#}\equiv_{\mathrm{kan}}\omega$
4. Das Primzahl-Flächenprodukt
5. $s\equiv_{\mathrm{kan}}\omega^\omega$
6. ZFC-interne Modellkonstruktion
7. Erzeugungsanzahlen
8. Superiale Summen

## D. Metaphysik und Physik

1. Zenons Pfeil
2. Achilles und die Schildkröte
3. Potentielles und aktual unendliches
4. Leibniz und das Infinitesimal
5. Kontinuum und Teilbarkeit
6. Raum, Zeit und Bewegung
7. Mathematische versus physikalische Infinitesimale

---

# Aktuelle Empfehlung für den ersten Serienbogen

Die derzeit didaktisch bevorzugte Reihenfolge ist:

1. **Suche nach dem sinnvoll normierten Infinitesimal der Analysis**
2. **Teilung, Maß und Primzahlen – Die Geometrie des Superials**
3. **Von rationalen zu algebraischen Größen – Welche Koeffizienten sind zulässig?**
4. **Was sind die Superial-Zahlen? – Das vollständige Stellenwertsystem**
5. **Rechnen mit dem normierten Infinitesimal**
6. **Vom Primzahlprodukt zu $\omega$**
7. **Warum $s\equiv_{\mathrm{kan}}\omega^\omega$?**
8. **Aktual unendliche Anzahlen und superiale Summen**
9. **Die ZFC-interne Konstruktion der Superial-Zahlen**

Parallel dazu kann nach Vortrag 1 jederzeit der metaphysische Zweig beginnen:

**Zenon: Der fliegende Pfeil und das Problem des infinitesimalen Schritts**

---

# Leitidee der gesamten Reihe

Die Superial-Zahlen sollen nicht als isolierte neue Zahlenart präsentiert werden.

Die Reihe soll zeigen, wie aus einer elementaren Frage der Analysis mehrere miteinander verbundene mathematische und philosophische Probleme entstehen:

$$
\text{Infinitesimal}
\longrightarrow
\text{Normierung}
\longrightarrow
\text{Schrittanzahl}
\longrightarrow
\text{Teilbarkeit}
\longrightarrow
\text{Primzahlen}
\longrightarrow
\text{Koeffizienten}
\longrightarrow
\text{Stellenwertsystem}
\longrightarrow
\omega
\longrightarrow
\text{ZFC}
\longrightarrow
\text{aktual unendliche Arithmetik}.
$$

Der erste Vortrag soll deshalb nicht alle Antworten liefern.

Er soll den gemeinsamen Ursprung dieser Fragen sichtbar machen und bewusst mehrere Wege für die weiteren Vorträge öffnen.
