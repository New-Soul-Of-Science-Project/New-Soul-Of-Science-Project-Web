# Superial-Zahlen – Eigenschaften, Struktur und promptfähige Zusammenfassung

Stand: 2026-06-13

Diese Datei fasst die zentralen Eigenschaften der Superial-Zahlen zusammen, einschließlich der zuletzt erarbeiteten Ergänzungen zu Standardnormierung, Erzeugungsanzahl, Grenzwertabschluss, s-Auswertung, Grenzwertspur und Kontinuum. Sie ist bewusst menschenlesbar formuliert und zugleich so gegliedert, dass einzelne Abschnitte direkt als Kontext oder Prompt für weitere Arbeit mit ChatGPT genutzt werden können.

---

## 1. Grundidee der Superial-Zahlen

Die Superial-Zahlen sind als Erweiterung der klassischen Zahlbereiche gedacht, in der aktual unendliche und infinitesimale Größen nicht nur indirekt über Grenzwerte beschrieben werden, sondern als strukturierte Zahlanteile auftreten.

Im Zentrum steht eine ausgezeichnete aktual unendliche Einheit

```math
s
```

sowie deren reziproke infinitesimale Einheit

```math
s^{-1}.
```

Die Superial-Zahlen sollen sichtbar machen, was klassische Grenzwertrechnung in der Null-Schicht beziehungsweise im Standardwert wegprojiziert: infinitesimale Rechenspuren, aktual unendliche Schichten und arithmetische Erzeugungsstrukturen.

Kurzform:

```math
\text{Die klassische reelle Zahl ist der Zielwert.}
```

```math
\text{Die superiale Zahl ist Zielwert plus Schicht- und Grenzwertspur.}
```

---

## 2. Formale Modellidee

Eine tragfähige Modellidee der Superial-Zahlen ist eine Hahn-Reihen-artige Struktur mit ganzzahligen Exponenten des ausgezeichneten Symbols `s`.

Typische Form:

```math
x=\sum_{k\le n} a_k s^k
```

mit einem größten Exponenten `n`, Koeffizienten `a_k` aus einem geeigneten Koeffizientenkörper und nach unten erlaubter infinitesimaler Entwicklung.

In der aktuellen Arbeit ist besonders wichtig, dass die Trägerbedingung nicht naiv als gewöhnlich wohlgeordnet in der Ordnung von `Z` formuliert wird, sondern so, dass die Reihen einen größten Exponenten besitzen. Anschaulich ist der Träger nach oben endlich begrenzt und nach unten als infinitesimale Entwicklung zulässig.

Die Superial-Zahlen besitzen dadurch eine Schichtstruktur:

```math
x
=
\underbrace{\sum_{k>0}a_k s^k}_{\text{aktual unendlicher Anteil}}
+
\underbrace{a_0}_{\text{Null-Schicht / Hauptwert}}
+
\underbrace{\sum_{k<0}a_k s^k}_{\text{infinitesimaler Anteil}}.
```

---

## 3. Ordnung und Schichten

Die wichtigste strukturelle Ordnung ist die Ordnung nach dem größten vorkommenden `s`-Exponenten.

Für eine Superial-Zahl `x` gilt:

```math
\operatorname{ord}_s(x)>0
\quad\Longleftrightarrow\quad
x\text{ besitzt einen aktual unendlichen führenden Anteil.}
```

```math
\operatorname{ord}_s(x)=0
\quad\Longleftrightarrow\quad
x\text{ liegt in der endlichen Hauptschicht, kann aber infinitesimale Restanteile besitzen.}
```

```math
\operatorname{ord}_s(x)<0
\quad\Longleftrightarrow\quad
x\text{ ist rein infinitesimal, sofern kein endlicher Hauptanteil vorhanden ist.}
```

Damit liegt die Grenze von Endlichkeit zu Aktual-Unendlichkeit zwischen den Schichten

```math
s^0
\quad\text{und}\quad
s^1.
```

Ein Punkt wie

```math
3+s^{-1}
```

ist nicht klassisch reell, aber noch endlich-superial. Ein Punkt wie

```math
3+s
```

liegt bereits in einer aktual unendlichen Schicht.

---

## 4. Die Rolle von `s`

`s` ist nicht einfach ein beliebiges Symbol für „unendlich“. Es ist die kanonische aktual unendliche Standardgröße der Superial-Zahlen.

In der Theorie wird `s` mit der erweiterten ordinal-arithmetischen Struktur verbunden:

```math
s=\omega^\omega.
```

Aus der Primzahlprodukt-Vermutung beziehungsweise ihrer erweiterten ordinal-arithmetischen Deutung ergibt sich die intendierte Primfaktorwirkung:

```math
v_p(s)=\omega
\quad\text{für jede endliche Primzahl }p.
```

Dabei ist wichtig:

- Die Hahn-Reihen-Struktur liefert den geordneten Körper beziehungsweise die formale Schichtstruktur.
- Die `p`-adische Interpretation von `s` liefert zusätzlich die gewünschte Primfaktorwirkung.
- `s` ist ein Element beziehungsweise Monom der Superial-Struktur.
- `\omega` und `p^\omega` sind nicht notwendig selbst Elemente des Superial-Rings; `s=\omega^\omega` wird jedoch durch das Monom `s` repräsentiert.

---

## 5. Ganze, natürliche und endliche Superial-Zahlen

Die ganzen Superial-Zahlen sind diejenigen Superial-Zahlen ohne infinitesimale Anteile, deren Null-Schicht ganzzahlig ist.

Anschaulich:

```math
\mathbb S_Z
=
\left\{
\sum_{k=0}^{n}a_k s^k
\mid a_0\in\mathbb Z,
\text{ keine negativen Exponenten}
\right\}.
```

Die natürlichen Superial-Zahlen sind die nichtnegativen ganzen Superial-Zahlen:

```math
\mathbb S_N
=
\{x\in\mathbb S_Z\mid x\ge 0\}.
```

Die endlichen Superial-Zahlen sind diejenigen ohne positiven führenden Exponenten:

```math
\mathbb S_{\mathrm{fin}}
=
\{x\in\mathbb S\mid \operatorname{ord}_s(x)\le 0\}.
```

Sie enthalten die klassische Null-Schicht sowie infinitesimale Verdickungen endlicher Werte.

---

## 6. Sinnvolle Koeffizienten und AKV

Ein zentraler Begriff der Theorie ist der sinnvolle Koeffizient. Ein Koeffizient `a` ist sinnvoll, wenn `a·s` eine ganze Superial-Zahl ergibt.

Leitidee:

```math
A_S=\{a\mid a\cdot s\in\mathbb S_Z\}.
```

Die Algebraische-Koeffizienten-Vermutung, kurz AKV, lautet sinngemäß:

```math
A_S=A_R,
```

wobei `A_R` die reell algebraischen Zahlen beziehungsweise der vorgesehene algebraische Koeffizientenkörper ist.

Bedeutung:

- Reell algebraische Zahlen sind exakt als sinnvolle Koeffizienten zulässig.
- Rationale Zahlen wie `1/3` sind exakt und besitzen als Koeffizienten keine infinitesimalen Restanteile.
- Radikale und algebraische Zahlen liegen in der Null-Schicht als sinnvolle exakte Koeffizienten.

Die AKV ist einer der kritischen Beweiskerne der Theorie.

---

## 7. Transzendente Zahlen und STV

Die Superiale-Transzendenz-Vermutung, kurz STV, besagt sinngemäß, dass transzendente reelle Zahlen im Superial-Kontext nicht einfach als reine endliche Koeffizienten ohne Spur auftreten, sondern superial kleine Rest- oder Spuranteile besitzen.

Leitidee:

```math
\text{algebraisch}
\quad\leftrightarrow\quad
\text{exakt sinnvoller Null-Schicht-Koeffizient}
```

```math
\text{transzendent}
\quad\leftrightarrow\quad
\text{Grenzwertspur / infinitesimale Feinstruktur}
```

Beispiele:

- `1/3` ist rational und exakt.
- `\sqrt 2` ist algebraisch und exakt als sinnvoller Koeffizient, sofern AKV greift.
- `e` und `\pi` sind klassische transzendente Zielwerte, die in der Superial-Sicht mit Spurbildungen wie `e_s` in Verbindung stehen.

Die STV ist ebenfalls ein kritischer Beweiskern der Theorie.

---

## 8. Erzeugungsanzahl

Die Erzeugungsanzahl wird mit

```math
\overline{\#}_{\mathrm{erz}}(A)
```

bezeichnet. Sie misst nicht die Kardinalität einer Menge bis auf Bijektion, sondern die Anzahl der Erzeugungspositionen oder Erzeugungsschritte relativ zur vollständigen Induktion `\omega` und den daraus abgeleiteten superialen Strukturen.

Wichtig ist die Unterscheidung:

```math
A\overline{\#}
```

bezeichnet die Mengen-Primfakultät beziehungsweise ein Primzahlprodukt zu `A`, während

```math
\overline{\#}_{\mathrm{erz}}(A)
```

die Erzeugungsanzahl bezeichnet.

Beispiele:

```math
\overline{\#}_{\mathrm{erz}}(\mathbb N)=\omega.
```

Für die geraden natürlichen Zahlen als jede zweite Position der natürlichen Zahlenlinie:

```math
\overline{\#}_{\mathrm{erz}}(2\mathbb N)=\frac{\omega}{2}.
```

Für die ganzen Zahlen als zweiseitige Erzeugungsstruktur:

```math
\overline{\#}_{\mathrm{erz}}(\mathbb Z)=2\omega.
```

Für die superiale Basis:

```math
\overline{\#}_{\mathrm{erz}}(s)=s=\omega^\omega.
```

Die Ausdrücke `\omega/2`, `2\omega` und `\omega^\omega` sind hier nicht als gewöhnliche Kardinalarithmetik zu lesen, sondern im Sinne der erweiterten ordinal-arithmetischen Struktur aus der Primzahlprodukt-Vermutung.

---

## 9. Grenzwertabschluss, s-Auswertung und Darstellungsreste

Eine zentrale neue Unterscheidung lautet:

```math
\text{Grenzwertabschluss}
\ne
\text{s-Auswertung}.
```

`s` ist nicht das Ende jeder unendlichen Darstellung. Es ist die Standard-Schrittanzahl der Superial-Analysis.

Beispiel `1/3`:

```math
\frac13
```

ist als rationaler Ausdruck exakt und sinnvoll.

Auch

```math
0,\overline 3
```

ist exakt, wenn es als periodische Regel beziehungsweise Grenzwertabschluss verstanden wird.

Aber eine Dezimalzahl mit genau `s` Nachkommastellen

```math
0,\underbrace{333\ldots333}_{s\text{-Stellen}}
```

ist nicht exakt gleich `1/3`, sondern besitzt den Darstellungsrest

```math
\frac13\cdot 10^{-s}.
```

Also:

```math
0,\underbrace{333\ldots333}_{s\text{-Stellen}}
=
\frac13-\frac13\cdot 10^{-s}.
```

Das zeigt:

```math
s\text{ ist nicht das Ende jeder unendlichen Darstellung.}
```

Eine periodische Regel oder ein Grenzwertabschluss kann über jede bestimmte letzte Stelle hinausgehen, auch über `s`.

---

## 10. Die Standardnormierung der Superial-Analysis

Obwohl `s` nicht jede Grenzwert-Unendlichkeit ersetzt, ist `s` die Standard-Schrittanzahl der Superial-Analysis.

Die Standard-Schrittweite ist

```math
s^{-1}.
```

Grundformel:

```math
s\cdot s^{-1}=1.
```

Für eine reell algebraische Strecke `a` gilt im intendierten Sinn:

```math
(a\cdot s)\cdot s^{-1}=a.
```

Damit kann eine endliche Strecke in ganzzahlig viele infinitesimale Standardschritte zerlegt werden.

`s^{-1}` ist dadurch nicht irgendein Infinitesimal, sondern die erste normierte infinitesimale Schicht der Superial-Analysis.

---

## 11. Ableitung

Die superiale Ableitung ersetzt die klassische verschwindende Differenz nicht durch `0`, sondern durch die normierte infinitesimale Differenz

```math
\Delta x=s^{-1}.
```

Definition:

```math
\mathcal D_s f(x)
=
\frac{f(x+s^{-1})-f(x)}{s^{-1}}.
```

Beispiel:

```math
f(x)=x^2.
```

Dann:

```math
\mathcal D_s f(x)
=
\frac{(x+s^{-1})^2-x^2}{s^{-1}}
=2x+s^{-1}.
```

Die klassische Ableitung `2x` ist die Standardisierung beziehungsweise Null-Schicht-Projektion:

```math
\operatorname{std}(2x+s^{-1})=2x.
```

Die Superial-Ableitung ist also nicht ungenauer, sondern bewahrt die Rechenspur, die der klassische Grenzwert vernichtet.

---

## 12. Integration

Die Integration wird als Summe über `s` normierte infinitesimale Schritte pro Einheit verstanden.

Für ein Intervall der Länge `1` gilt:

```math
s\text{ Schritte der Breite }s^{-1}.
```

Für ein Intervall der Länge `b-a` gilt:

```math
N=(b-a)\cdot s.
```

Die superiale Riemann-Summe hat sinngemäß die Form:

```math
\mathcal S_s(f;a,b)
=
\sum_{i=0}^{N-1} f(a+i s^{-1})\cdot s^{-1}.
```

Dabei ist `N` eine superiale Schrittzahl, nicht das Mengensymbol der natürlichen Zahlen.

Die gemeinsame Normierung von Ableitung und Integration durch `s^{-1}` ist entscheidend, damit beide Operationen auf derselben Rasterstruktur zueinander passen.

---

## 13. Standardisierung

Die klassische Analysis wird nicht einfach verworfen, sondern erscheint als Standardisierung beziehungsweise Null-Schicht-Projektion der Superial-Analysis.

Für geeignete Funktionen gilt:

```math
\operatorname{std}(\mathcal D_s f(x))=f'(x).
```

Für geeignete Integrale gilt:

```math
\operatorname{std}(\mathcal S_s(f;a,b))
=
\int_a^b f(t)\,dt.
```

Die Superial-Analysis enthält somit die Standardanalysis als Null-Schicht, bewahrt aber zusätzlich infinitesimale Korrektur- und Rechenspuren.

---

## 14. e_s und die eulersche Zahl

Die klassische eulersche Zahl ist der Grenzwertabschluss

```math
e=\lim_{n\to+\infty}\left(1+\frac1n\right)^n.
```

Die superiale Standardauswertung ist

```math
e_s=\left(1+\frac1s\right)^s.
```

Dabei gilt sinngemäß:

```math
\operatorname{std}(e_s)=e.
```

Aber `e_s` ist nicht einfach identisch mit `e`, sondern enthält die superiale Grenzwertspur der Standardnormierung.

`e_s` ist deshalb nicht dadurch gerechtfertigt, dass `s` jede Grenzwert-Unendlichkeit wäre, sondern dadurch, dass `s` die Standard-Schrittanzahl der Superial-Analysis ist.

---

## 15. Warum nicht s^2 als Standardnormierung?

Man kann formal feinere Schrittzahlen wie `s^2` betrachten. Dann wäre die Schrittweite

```math
s^{-2}.
```

Das ist eine mögliche Feinnormierung, aber nicht die Standardnormierung.

Begründung:

- `s^{-1}` ist die erste infinitesimale Standardschicht.
- `s^{-2}` liegt bereits eine Schicht tiefer.
- Bei Verwendung von `s^2` als Standard-Schrittanzahl entstehen in der Grundanalysis zusätzliche leere oder nicht sinntragende Zwischenschichten.
- Die klassische Null-Schicht bleibt unverändert, aber die Darstellung wird nicht grundlegender.

Daher ist `s` die kanonische Standard-Schrittanzahl, während `s^2` eine mögliche Verfeinerung, aber keine bessere Grundnormierung darstellt.

---

## 16. Momentaufnahme und infinitesimale Verdickung

Metaphysisch lässt sich ein Bewegungsablauf nicht lückenlos aus Momentaufnahmen konstruieren, deren zeitlicher Abstand vollständig `0` ist.

Wenn ein Moment rechnerisch und ontologisch wirksam sein soll, benötigt er mindestens eine infinitesimale Verdickung.

In der Superial-Analysis ist diese normiert durch

```math
dt=s^{-1}.
```

Geschwindigkeit wird daher nicht als Quotient über einen verschwundenen Nenner verstanden, sondern als Quotient über die normierte infinitesimale Zeiteinheit:

```math
\frac{dx}{s^{-1}}.
```

Damit wird Bewegung nicht aus lauter Null-Abständen zusammengesetzt, sondern aus infinitesimalen, aber nicht verschwindenden Schritten.

---

## 17. Kontinuum und Geometrie

Im klassischen Sinn ist das Kontinuum meist die reelle Gerade beziehungsweise die Menge `R`.

In superialer Sicht ist das zu grob. Man muss unterscheiden:

```math
\mathbb R
```

als klassische Null-Schicht beziehungsweise Standardprojektion,

```math
\mathbb S_{\mathrm{fin}}
```

als endliches superiales Kontinuum mit infinitesimalen Verdickungen,

und

```math
\mathbb S
```

als volles geschichtetes Kontinuum mit endlichen, infinitesimalen und aktual unendlichen Koordinaten.

Die klassische reelle Geometrie sieht nur die Standardprojektion:

```math
x\mapsto a_0.
```

Die superiale Geometrie sieht zusätzlich die infinitesimale und aktual unendliche Schichtstruktur.

Leitsatz:

```math
\text{Das reelle Kontinuum ist die Null-Schicht-Projektion eines reicheren superialen Kontinuums.}
```

---

## 18. Kontinuumshypothese im Licht der Superial-Zahlen

Die klassische Kontinuumshypothese fragt nach einer Kardinalität zwischen

```math
\aleph_0
\quad\text{und}\quad
2^{\aleph_0}.
```

Die Superial-Zahlen verschieben die Frage nicht auf eine direkte Widerlegung oder Bestätigung der Kontinuumshypothese, sondern auf eine andere Achse:

```math
\text{Kardinalität}
\quad\ne\quad
\text{Erzeugungsanzahl}.
```

Die Kontinuumshypothese fragt nach Zwischenmächtigkeiten. Die Superial-Zahlen fragen nach Zwischenerzeugungen, Schichten, infinitesimalen Verdickungen und arithmetischen Strukturen.

Damit wird die Kontinuumshypothese nicht ersetzt, aber neu eingeordnet: Sie misst eine Projektion der Struktur, nicht die gesamte Erzeugungs- und Schichtstruktur.

---

## 19. Abgrenzung zu klassischen Zahlbereichen

### Reelle Zahlen

Die reellen Zahlen enthalten in klassischer Sicht keine aktual unendlichen oder infinitesimalen Summanden. Sie bilden die Null-Schicht beziehungsweise Standardprojektion.

### Hyperreelle Zahlen

Die Superial-Zahlen ähneln den Hyperreellen insofern, als sie infinitesimale und unendliche Größen zulassen. Sie unterscheiden sich aber durch die ausgezeichnete arithmetische Einheit `s`, die Primfaktorinterpretation, die Schichtstruktur, die Erzeugungsanzahl und die intendierte Verbindung zu algebraischen Koeffizienten.

### Hahn-Reihen

Hahn-Reihen liefern das formale Modellgerüst. Die Superial-Zahlen fügen diesem Gerüst die spezifische Interpretation des Symbols `s`, die `p`-adische Primfaktorwirkung, die Erzeugungsanzahl und die Standardnormierung der Analysis hinzu.

---

## 20. Kritische offene Punkte

Die Superial-Zahlen bilden derzeit ein starkes formales Forschungsprogramm, aber mehrere Kerne müssen streng bewiesen oder sauber axiomatisch festgelegt werden.

Wichtige offene beziehungsweise kritische Punkte:

1. Der vollständige Beweis der AKV.
2. Der vollständige Beweis der STV.
3. Die exakte Einbettung der Primzahlprodukt-Vermutung in die erweiterte ordinal-arithmetische Struktur.
4. Die präzise Schnittstelle zwischen Hahn-Reihen-Modell und `p`-adischer Interpretation von `s`.
5. Die formale Definition der Erzeugungsanzahl über die bisherigen Beispiele hinaus.
6. Die genaue Rolle von Transzendenz, Grenzwertspur und infinitesimalen Resten.
7. Die Abgrenzung zwischen Grenzwertabschluss und `s`-Auswertung in weiteren Beispielen.

---

## 21. Kompakte promptfähige Zusammenfassung

Die Superial-Zahlen sind ein formales Forschungsprogramm zur Erweiterung der klassischen Zahlbereiche um aktual unendliche und infinitesimale Schichten. Zentral ist eine ausgezeichnete aktual unendliche Einheit `s`, mit `s=omega^omega` und der intendierten Primfaktorwirkung `v_p(s)=omega` für jede endliche Primzahl `p`. Superial-Zahlen werden Hahn-Reihen-artig als Summen `sum_{k<=n} a_k s^k` mit größtem Exponenten verstanden. Positive Exponenten beschreiben aktual unendliche Anteile, der Exponent `0` die endliche Null-Schicht, negative Exponenten infinitesimale Anteile.

Die sinnvollen Koeffizienten sind jene Zahlen `a`, für die `a*s` ganzzahlig-superial wird. Die AKV besagt, dass diese sinnvollen Koeffizienten genau die reell algebraischen Zahlen sind. Die STV besagt sinngemäß, dass transzendente Zahlen im Superial-Kontext nicht als reine Null-Schicht-Koeffizienten auftreten, sondern superial kleine Grenzwertspuren besitzen.

Neu eingeführt ist die Erzeugungsanzahl `#_erz(A)`, die nicht Kardinalität misst, sondern Erzeugungspositionen relativ zur vollständigen Induktion `omega`. Beispiele: `#_erz(N)=omega`, `#_erz(2N)=omega/2`, `#_erz(Z)=2omega`, `#_erz(s)=s=omega^omega`. Diese Größen sind in der erweiterten ordinal-arithmetischen Struktur zu verstehen, nicht als gewöhnliche Kardinalzahlen.

Wichtig ist die Unterscheidung zwischen Grenzwertabschluss und `s`-Auswertung. `s` ist nicht das Ende jeder unendlichen Darstellung. Beispiel: `1/3` ist als rationaler Ausdruck exakt, und `0,overline{3}` ist exakt als periodische Regel beziehungsweise Grenzwertabschluss. Aber eine Dezimalzahl mit genau `s` Dreien ist nur `1/3 - (1/3)*10^{-s}` und hat einen infinitesimalen Darstellungsrest. Dagegen ist `s` in der Analysis die Standard-Schrittanzahl: `s^{-1}` ist die kanonische infinitesimale Schrittweite, denn `s*s^{-1}=1`.

Die Superial-Ableitung wird definiert durch `D_s f(x)=(f(x+s^{-1})-f(x))/s^{-1}`. Beispiel: Für `f(x)=x^2` ergibt sich `D_s f(x)=2x+s^{-1}`. Die klassische Ableitung `2x` ist die Standardisierung beziehungsweise Null-Schicht-Projektion. Die Superial-Analysis vernichtet die Rechenspur nicht, sondern bewahrt sie. Integration wird entsprechend als Summe über `s` infinitesimale Schritte pro Einheit verstanden. Die klassische Analysis erscheint als Standardisierung: `std(D_s f)=f'` und `std(S_s)=int f`.

Die eulersche Zahl erscheint klassisch als Grenzwertabschluss `e=lim_{n->infty}(1+1/n)^n`, während die superiale Standardauswertung `e_s=(1+1/s)^s` lautet. Es gilt sinngemäß `std(e_s)=e`, aber `e_s` enthält zusätzlich die superiale Grenzwertspur.

Das reelle Kontinuum ist in dieser Sicht nicht das volle Kontinuum, sondern die Null-Schicht-Projektion eines reicheren superialen Kontinuums. Infinitesimale Verdickungen gehören zur endlichen superialen Realität, während positive `s`-Exponenten die Grenze zur Aktual-Unendlichkeit überschreiten.

---

## 22. Sehr kurzer Prompt

Nutze folgenden Kontext: Die Superial-Zahlen sind eine Hahn-Reihen-artige Erweiterung mit ausgezeichnetem aktual unendlichem Monom `s=omega^omega`. Eine Zahl hat die Form `sum_{k<=n} a_k s^k`. Positive Exponenten sind aktual unendlich, Exponent `0` ist Null-Schicht, negative Exponenten sind infinitesimal. `s^{-1}` ist die Standard-Schrittweite der Superial-Analysis. Die Ableitung ist `D_s f(x)=(f(x+s^{-1})-f(x))/s^{-1}`; für `x^2` ergibt sich `2x+s^{-1}`, dessen Standardisierung `2x` ist. `s` ist nicht das Ende jeder unendlichen Darstellung: `0,333...` mit genau `s` Stellen ist nicht `1/3`, sondern hat Rest `(1/3)*10^{-s}`. Aber `s` ist die Standard-Schrittanzahl der Analysis; `e_s=(1+1/s)^s` ist die superiale Standardauswertung mit `std(e_s)=e`. Die AKV besagt, dass die sinnvollen Koeffizienten genau die reell algebraischen Zahlen sind; die STV deutet transzendente Zahlen als Standardwerte mit superialer Grenzwertspur. Die Erzeugungsanzahl `#_erz` misst Erzeugungspositionen statt Kardinalität, z.B. `#_erz(N)=omega`, `#_erz(Z)=2omega`, `#_erz(s)=s=omega^omega`.
