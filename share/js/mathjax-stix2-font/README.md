# MathJax STIX2 font (self-hosted)

The `mathjax-stix2` font used by the self-hosted MathJax (`../mathjax/`)
across this project, chosen for correctly sized stretchy brackets
around multi-line `cases` environments - the other font packages had a
real MathJax 4.1.3 bug there (see `share/php/Science.php` changelog,
entries around 20261004).

- `@mathjax/mathjax-stix2-font` 4.1.3 — `tex-mml-svg-mathjax-stix2.js`/
  `tex-mml-chtml-mathjax-stix2.js` (combined font+typesetting entry
  scripts, not used directly here) and the `svg`/`chtml`/`mjs`/`cjs`
  font-data directories, loaded on demand by MathJax via
  `loader.paths: { 'mathjax-stix2': '.../mathjax-stix2-font' }`.

Source: https://github.com/mathjax/MathJax-fonts (Apache-2.0, see
`LICENSE`). Copied unchanged from the npm package.
