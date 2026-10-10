import {CHARSET, CHARS, CharMap} from '@mathjax/font-tools/js/CharMap.js';
import {Font, GlyphNames} from '@mathjax/font-tools/js/Font.js';
import {Variants} from '@mathjax/font-tools/js/Variant.js';
import {Delimiters} from '@mathjax/font-tools/js/Delimiters.js';
import {CommonFont, FontDef} from '@mathjax/font-tools/js/CommonFont.js';
import {RANGES, Ranges} from '@mathjax/font-tools/js/Ranges.js';
import {SVGFont} from '@mathjax/font-tools/js/SVGFont.js';
import {CHTMLFont} from '@mathjax/font-tools/js/CHTMLFont.js';
import {Components} from '@mathjax/font-tools/js/Components.js';


/***********************************************************************************/
/***********************************************************************************/

try {

  /**
   * Name-to-Unicode mapping needed for text fonts
   */
  const TextNames: GlyphNames = [
    ['dieresistonoscomb', 0x344], ['dieresiscomb', 0x308], ['brevecomb', 0x306], ['acutecomb', 0x301],
    ['plus', 0x2B], ['minus', 0x2212], ['equal', 0x3D], ['gmacron', 0x1E21]
  ];

  /**
   *  Styles to ignore in text fonts (for now)
   */
  const TextIgnore = /^\.notdef$|\.(?:c2sc|smcp)|\._|_[bhjkS]|_$/;

  /**
   * Font data for text fonts
   */
  const TextData = {charNames: TextNames, ignore: TextIgnore};


  /***********************************************************************************/
  /***********************************************************************************/

  //
  // Function to assign standard characters to a given variant from a given font
  //
  const StixVariant = (variant: string, font: string, extra: CharMap[] = []) => {
    const isBold = (variant === 'bold');
    const isItalic = (variant === 'italic');
    return [font, [
      CHARS.Range(0x20, 0x7E).minus(CHARSET.Alpha, CHARSET.Numbers), // Basic Latin
      CHARS.Range(0xA0, 0xFF),             // Latin-1 Supplement
      CHARS.Range(0x100, 0x17F),           // Latin Extended-A
      CHARS.InRange(0x180, 0x23F, font),   // Latin Extended-B
      CHARS.Range(0x250, 0x2AF),           // IPA Extensions
      CHARS.InRange(0x2B0, 0x2FF, font),   // Spacing Modifier Letters
      CHARS.InRange(0x300, 0x36F, font)    // Combining Diacritical Marks
        .minus(isItalic ? CHARS.At(0x338) : CHARS.At()),
      CHARS.InRange(0x370, 0x3FF, font).minus(CHARSET.Greek)    // Greek and Coptic
        .minus(isBold ? CHARS.At(0x3DC, 0x3DD) : CHARS.At()),
      CHARS.InRange(0x400, 0x4FF, font),   // Cyrillic
      CHARS.At(0x1D00, 0x1D07, 0x1D1C),    // Phonetic Extensions
      CHARS.InRange(0x1D80, 0x1DBF, font), // Phonetic Extensions Supplement
      CHARS.InRange(0x1E00, 0x1EFF, font), // Latin Extended Additional
      CHARS.InRange(0x2000, 0x206F, font)  // General Punctuation
        .minus(CHARS.At(0x200C, 0x200D)),
      CHARS.InRange(0x2070, 0x209F, font), // Superscripts and Subscripts
      CHARS.InRange(0x20A0, 0x20BF, font), // Currency Symbols
      CHARS.InRange(0x20D0, 0x20F0, font), // Combining Diacritical Marks for Symbols
      CHARS.At(0x2116, 0x2132),            // Letterlike Symbols
      CHARS.InRange(0x2150, 0x218F, font), // Number Forms
      CHARS.At(0x2423),                    // Control Pictures
      CHARS.Range(0xFB00, 0xFB04),         // Alphabetic Presentation Forms
      CHARS.At(0xA727),                    // Latin Extended-D
    ].concat(extra)] as [string, CharMap[]];
  };

  //
  //  The glyphs in the STX-M font, and a function to create chars from a feature
  //
  const Feature = (name: string) => CHARS.ForFeature(name, 'STX-M');

  //
  //  Stretchy characters in different sizes
  //
  CHARSET.Ops = CHARS.At(0x2140, 0x23B7, 0x23B8, 0x23B9, 0x220F, 0x2210, 0x2211, 0x221A, 0x221B, 0x221C)
    .plus(CHARS.Range(0x22C0, 0x22C3), CHARS.Range(0x2A00, 0x2A0A));


  /***********************************************************************************/
  /***********************************************************************************/

  //
  //  Load the STIX2 fonts
  //
  Font.load({
    'STX-M':  [
      './fonts/STIXTwoMath-Regular.otf', {
        charNames: [
          ['zero', 0x30], ['dieresistonoscomb', 0x344], ['dieresiscomb', 0x308], ['acutecomb', 0x301],
          ['S_S', 0xE250], // ???
          ['integral', 0x222B], ['horizontal', 0x2212], ['sigmafinal', 0x3C2],
          ['tackup', 0x02D4], ['tackdown', 0x02D5], ['minus', 0x2212],
          ['u1D46', 0x1D462], ['overline', 0x203E],
          ['primetriplereversed', 0x2037], ['primedblreversed', 0x2036], ['primereversed', 0x2035],
          ['primequad', 0x2057], ['primetriple', 0x2034], ['slashlongcomb', 0x338],
          ['lowlinecomb', 0x332], ['caroncomb', 0x30C], ['overlinecomb', 0x305],
          ['tildecomb', 0x303], ['circumflexcomb', 0x302], ['tildebelowcomb', 0x330],
          ['brevecomb', 0x306], ['tildelow', 0x2F7]
        ]
      },
    ],
    'STX-R':  ['./fonts/STIXTwoText-Regular.otf', TextData],
    'STX-B':  ['./fonts/STIXTwoText-Bold.otf', TextData],
    'STX-I':  ['./fonts/STIXTwoText-Italic.otf', TextData],
    'STX-BI': ['./fonts/STIXTwoText-BoldItalic.otf', TextData]
  });

  Font.get('STX-M')
    .addGlyph(Font.buildV('STX-M', [0x2212], 0x2190, 'uni2190.x'))
    .addGlyph(Font.buildV('STX-M', [0x2212], 0x294A, 'uni294A.x'))
    .addGlyph(Font.buildV('STX-M', [[0x21A4, 'endr'], [0x21A4, 'endr']], 0x2906, 'uni2906.x', [-82, -179]))
    .addGlyph(Font.buildV('STX-M', [[0x21A6, 'endl'], [0x21A6, 'endl']], 0x2907, 'uni2907.x', [-82, -179]))
  ;

  /***********************************************************************************/
  /***********************************************************************************/

  //
  //  Create the variants from the fonts
  //
  const MathJaxStixVariants = Variants.define({
    //
    //  The main variants (normal, bold, italic, bold-italic)
    //
    normal: StixVariant('normal', 'STX-M', [
      //
      //  Missing from StixVariant() where they are mapped to Math Alphanumerics
      //
      CHARSET.Alpha,
      CHARSET.Numbers,
      CHARSET.Greek,
      CHARS.At(0x2422, 0xA792),
      //
      CHARS.InRange(0x2100, 0x214F, 'STX-M')   // Letterlike Symbols
        .minus(CHARSET.MathAlphanumerics, CHARS.At(0x2116, 0x2132)), // minus those in math alphanumerics
      CHARS.InRange(0x2190, 0x21FF, 'STX-M'),  // Arrows
      CHARS.Range(0x2200, 0x22FF),             // Mathematical Operators
      CHARS.InRange(0x2300, 0x23FF, 'STX-M'),  // Miscellaneous Technical
      CHARS.Range(0x2460, 0x24FF),             // Enclosed Alphanumerics
      CHARS.InRange(0x2500, 0x257F, 'STX-M'),  // Box Drawing
      CHARS.InRange(0x2580, 0x259F, 'STX-M'),  // Block Elements
      CHARS.Range(0x25A0, 0x25FF),             // Geometric Shapes
      CHARS.InRange(0x2600, 0x26FF, 'STX-M'),  // Miscellaneous Symbols
      CHARS.InRange(0x2700, 0x27BF, 'STX-M'),  // Dingbats
      CHARS.InRange(0x27C0, 0x27EF, 'STX-M'),  // Miscellaneous Mathematical Symbols-A
      CHARS.Range(0x27F0, 0x27FF),             // Supplemental Arrows-A
      CHARS.Range(0x2900, 0x297F),             // Supplemental Arrows-B
      CHARS.Range(0x2980, 0x29FF),             // Miscellaneous Mathematical Symbols-B
      CHARS.Range(0x2A00, 0x2AFF),             // Supplemental Mathematical Operators
      CHARS.InRange(0x2B00, 0x2BFF, 'STX-M'),  // Miscellaneous Symbols and Arrows
      CHARS.At(0x3012, 0x3030),                // CJK Symbols and Punctuation
      CHARS.At(0x306E),                        // Hiragana
      CHARS.InRange(0xE000, 0xE3FF, 'STX-M')   // Private Use Area
        .minus(CHARS.Range(0xE154, 0xE230)),   //   minus other math alphabets
      CHARS.At(0xFFFD),                        // Specials
      CHARS.At(0x1EEF0, 0x1EEF1),              // Arabic Mathematical Alphabetic Symbols
      //
      //  Math Alphanumerics (default script is calligraphic, so remap those)
      //
      CHARSET.MathAlphanumerics.minus(CHARSET.MathScript, CHARSET.MathBoldScript),
      CHARSET.MathScript.feature('ss01'),
      CHARSET.MathBoldScript.feature('ss01'),
      //
    ]),
    bold:          StixVariant('bold', 'STX-B'),
    italic:        StixVariant('italic', 'STX-I', [CHARSET.Numbers]),
    'bold-italic': StixVariant('bold-italic', 'STX-BI', [CHARSET.Numbers]),

    //
    //  Text italics in math
    //
    '-tex-mathit': ['STX-I', [CHARSET.Alpha, CHARSET.Numbers]],

    //
    //  Variants remaped to SMP
    //
    'double-struck': ['STX-M', [CHARS.Map({0x131: 0x1D55A, 0x237: 0x1D55B}).feature('dotless')]],
    'fraktur': ['STX-M', [CHARS.Map({0x131: 0x1D526, 0x237: 0x1D527}).feature('dotless')]],
    'bold-fraktur': ['STX-M', [CHARS.Map({0x131: 0x1D58E, 0x237: 0x1D58F}).feature('dotless')]],
    'script': ['STX-M', [CHARS.Map({0x131: 0x1D4BE, 0x237: 0x1D4BF}).feature('dotless.ss01')]],
    'bold-script': ['STX-M', [CHARS.Map({0x131: 0x1D4F2, 0x237: 0x1D4F3}).feature('dotless.ss01')]],
    'monospace': ['STX-M', [CHARS.Map({0x131: 0x1D692, 0x237: 0x1D693}).feature('dotless')]],
    'bold-sans-serif': ['STX-M', [CHARS.Map({0x131: 0x1D5F6, 0x237: 0x1D5F7}).feature('dotless')]],
    'sans-serif-bold-italic': ['STX-M', [CHARS.Map({0x131: 0x1D65E, 0x237: 0x1D65F}).feature('dotless')]],

    //
    // Sans-serif greek is in PUA, but not quite the layout of the Math Alphanumerics
    //
    'sans-serif': ['STX-M', [
      CHARS.At().plus(
        CHARS.MapTo(0xE17D, CHARSET.GreekUCsmp, 0x391),
        CHARS.MapTo(0xE196, CHARSET.GreekLCbase.plus(CHARS.Map({
          0x3D1: 0x1A + 0x3B1,
          0x3D5: 0x1B + 0x3B1,
          0x3D6: 0x1D + 0x3B1,
          0x3F1: 0x1C + 0x3B1,
          0x3F5: 0x19 + 0x3B1
        })), 0x3B1),
        CHARS.Map({0x2202: 0xE17C})
      ).feature('nu'),
      CHARS.Map({0x2207: 0xE1F6}),
      CHARS.Map({0x131: 0x1D5C2, 0x237: 0x1D5C3}).feature('dotless')
    ]],

    //
    // Sans-serif-italic greek is in PUA, but not quite the layout of the Math Alphanumerics
    //
    'sans-serif-italic': ['STX-M', [
      CHARS.At().plus(
        CHARS.MapTo(0xE1BF, CHARSET.GreekUCsmp, 0x391),
        CHARS.MapTo(0xE1D8, CHARSET.GreekLCbase.plus(CHARS.Map({
          0x3D1: 0x1A + 0x3B1,
          0x3D5: 0x1B + 0x3B1,
          0x3D6: 0x1D + 0x3B1,
          0x3F1: 0x1C + 0x3B1,
          0x3F5: 0x19 + 0x3B1
        })), 0x3B1),
        CHARS.Map({0x2202: 0xE1BE, 0x2207: 0xE1BB})
      ).feature('nu'),
      CHARS.Map({0x131: 0x1D62A, 0x237: 0x1D62B}).feature('dotless')
    ]],

    //
    //  Double-struck italic is mostly in the PUA
    //
    '-double-struck-italic': ['STX-M', [
      CHARS.At().plus(
        CHARS.MapTo(0xE156, CHARS.Range(0x45, 0x47), 0x45), // E, F, G,
        CHARS.MapTo(0xE159, CHARS.Range(0x49, 0x4D), 0x49), // I, J, K, L, M
        CHARS.MapTo(0xE1B7, CHARS.Range(0x50, 0x52), 0x50), // P, Q, R
        CHARS.MapTo(0xE15F, CHARS.Range(0x53, 0x59), 0x53), // S, T, U, V, W, X, Y
        CHARS.Map({
          0x41: 0xE154, 0x42: 0xE155, // A, B
          0x43: 0xE1B4,               // C,
          0x48: 0xE1B5,               // H,
          0x4E: 0xE1B6, 0x4F: 0xE15E, // N, O
          0x5A: 0xE1BA,               // Z
        }),
        CHARS.MapTo(0xE166, CHARS.Range(0x61, 0x63), 0x61), // a, b, c
        CHARS.MapTo(0xE169, CHARS.Range(0x66, 0x68), 0x66), // f, g, h
        CHARS.MapTo(0xE16C, CHARS.Range(0x6B, 0x7A), 0x6B), // k through z
      ).feature('nu'),
      CHARS.Map({
        0x44: 0x2145,                // D
        0x64: 0x2146, 0x65: 0x2147,  // d, e
        0x69: 0x2148, 0x6A: 0x2149,  // i, j
      })
    ]],

    //
    //  The calligraphic variants
    //
    '-tex-calligraphic': ['STX-M', [
      CHARSET.ScriptToAlphaUC,
      CHARSET.ScriptToAlphaLC,
      CHARS.Map({
        0x131: 0x1D4BE, 0x237: 0x1D4BF                     //  add dotless i and j
      }).feature('dotless')
    ]],
    '-tex-bold-calligraphic': ['STX-M', [
      CHARSET.BoldScriptToAlphaUC,
      CHARSET.BoldScriptToAlphaLC,
      CHARS.Map({0x131: 0x1D4F2, 0x237: 0x1D4F3}).feature('dotless'), // dotless i and j
    ]],

    //
    //  Old style numbers
    //
    '-tex-oldstyle': ['STX-R', [CHARSET.Numbers.feature('OT')]],
    '-tex-bold-oldstyle': ['STX-B', [CHARSET.Numbers.feature('OT')]],

    //
    //  The small and large operator variants
    //
    '-smallop': ['STX-M', [Feature('s1').minus(CHARSET.Ops),
                           CHARS.At(0x221A, 0x221B, 0x221C).feature('s1')]],
    '-largeop': ['STX-M', [Feature('s2'), Feature('dsp'),
                           CHARSET.Ops.feature('s1').minus(CHARS.At(0x221A, 0x221B, 0x221C))]],

    //
    //  The size variants
    //
    '-size3':  ['STX-M', [Feature('s3')]],
    '-size4':  ['STX-M', [Feature('s4')]],
    '-size5':  ['STX-M', [Feature('s5')]],
    '-size6':  ['STX-M', [Feature('s6')]],
    '-size7':  ['STX-M', [Feature('s7')]],
    '-size8':  ['STX-M', [Feature('s8')]],
    '-size9':  ['STX-M', [Feature('s9')]],
    '-size10': ['STX-M', [Feature('s10')]],
    '-size11': ['STX-M', [Feature('s11')]],
    '-size12': ['STX-M', [Feature('s12')]],

    //
    //  Variant Forms
    //
    '-tex-variant': ['STX-M', [
      CHARSET.PseudoScriptsMain,
      CHARSET.PseudoScriptQuotes.feature('var'),
      Feature('var'),    // Includes primes and back-primes
      Feature('alt'),
      Feature('dotless').minus(CHARS.At(0x1D4BE, 0x1D4BF, 0x1D4F2, 0x1D4F3)),
      CHARS.At(0x1D4BE, 0x1D4BF, 0x1D4F2, 0x1D4F3).feature('dotless.ss01'),
      Feature('case'),
      Feature('edit'),
      Feature('per').minus(CHARS.At(0x2080)),
      Feature('VS1'),
      CHARS.At(0x200C, 0x200D)
    ]],

    //
    //  Extension pieces
    //
    '-extend': ['STX-M', [
      CHARS.Map({0x21D4: 0x21D0, 0xE000: 0x221A, 0x23AE: 0x222B,
                 0xE14A: 0x23DC, 0xE14B: 0x23DD}).feature('x'),
      Feature('x').minus(CHARS.At(0x21D0, 0x221A, 0x222B)),
      CHARS.Map({0xE140: 0x23DE, 0xE141: 0x23DF}).feature('m'),
      Feature('m'), Feature('l0'), Feature('r0'),
      CHARS.At(0x21A6, 0x21AA, 0x21D0).feature('endl'),
      CHARS.Map({0xE146: 0x23B4, 0xE148: 0x23B5, 0xE142: 0x23DC, 0xE144: 0x23DD,
                 0xE13B: 0x23DE, 0xE13D: 0x23DF}).feature('l'),
      CHARS.At(0x21A4, 0x21A9).feature('endr'),
      CHARS.Map({0x21D2: 0x21D0}).feature('endr'),
      CHARS.Map({0xE147: 0x23B4, 0xE149: 0x23B5, 0xE143: 0x23DC, 0xE145: 0x23DD,
                 0xE13C: 0x23DE, 0xE13E: 0x23DF}).feature('r'),
      CHARS.Map({0xE001: 0x221A}).feature('t')
    ]],

    //
    //  Upright integrals
    //
    '-up': ['STX-M', [Feature('up')]],
    '-up-dsp': ['STX-M', [Feature('updsp')]],

    /*
    //
    //  Unused variants
    //
    '-ssty': ['STX-M', [Feature('ssty')]],
    '-ssty2': ['STX-M', [Feature('ssty2')]],
    '-ssty_ss01': ['STX-M', [Feature('ssty.ss01'), CHARSET.Dotless.feature('dotless.ssty.ss01')]],
    '-ssty2_ss01': ['STX-M', [Feature('ssty2.ss01'), CHARSET.Dotless.feature('dotless.ssty2.ss01')]],

    '-sm': ['STX-M', [Feature('sm')]],
    '-up-sm': ['STX-M', [Feature('upsm')]],

    '-extra1': ['STX-M', [
    Feature('mathcap'),
    Feature('TRK'),
    CHARS.Map({0xE220: 0x7B, 0xE221: 0x7D}).feature('s1.old'),
    CHARS.Map({0xE222: 0x7B, 0xE223: 0x7D}).feature('s2.old'),
    CHARS.Map({0xE224: 0x7B, 0xE225: 0x7D}).feature('s3.old'),
    CHARS.Map({0xE226: 0x7B, 0xE227: 0x7D}).feature('s4.old'),
    ]],
    '-extra2': ['STX-M', [
    Feature('Cyrillic'),
    Feature('dotless.ssty'),
    Feature('alt.ssty'), Feature('var.ssty'),
    Feature('VS1.ssty')
    ]],
    '-extra3': ['STX-M', [
    Feature('Greek'),
    Feature('dotless.ssty2'),
    Feature('alt.ssty2'), Feature('var.ssty2'),
    Feature('VS1.ssty2'),
    Feature('Cyrillic.cap')
    ]],
    '-extra4': ['STX-M', [
    CHARS.Map({
    0xE200: 0x3020300, 0xE201: 0x3020301, 0xE202: 0x3020303,
    0xE203: 0x3020309, 0xE204: 0x3060300, 0xE205: 0x3060301,
    0xE206: 0x3060303, 0xE207: 0x3060309}),
    CHARS.Map({
    0xE210: 0x3020300, 0xE211: 0x3020301, 0xE212: 0x3020303,
    0xE213: 0x3020309, 0xE214: 0x3060300, 0xE215: 0x3060301,
    0xE216: 0x3060303, 0xE217: 0x3060309}).feature('cap'),
    Feature('cap').minus(CHARS.At(0x3020300, 0x3020301, 0x3020303,
    0x3020309, 0x3060300, 0x3060301,
    0x3060303, 0x3060309))
    ]],
    */

  }, {
    transferHD: [
      [0x2212, 0x002B]    // make minus the same height/depth as plus
    ],
    fixIC: [
      ['-largeop', .35, CHARS.Range(0x222B, 0x2233).plus(CHARS.Range(0x2A0C, 0x2A1B))],
      ['normal', .125, CHARS.At(0x222B, 0x222C, 0x222D, 0x2A0C, 0x2A1B)],
      ['normal', .05, CHARS.At(0x222E, 0x222F, 0x2230, 0x2A0D, 0x2A0F, 0x2A10, 0x2A15)],
      ['normal', .02, CHARS.At(0x2231, 0x2232, 0x2233, 0x2A0E, 0x2A11, 0x2A13)]
    ],
    spaces: {
      normal: {
        0x200C: 0,     // zero width non-joiner
        0x200D: 0,     // zero width joiner
        0x2060: 0      // word joiner
      }
    }
  });


  /***********************************************************************************/
  /***********************************************************************************/

  const MathJaxStixDelimiters = Delimiters.define({
    font: 'STX-M',
    variants: MathJaxStixVariants,
    stretchVariants: ['normal'],
    readMathTable: true,
    adjustMathTable: {
      0x21A9: {parts: [ , [0x2190, 'x']]},
      0x21AA: {parts: [ , [0x2190, 'x']]},
      0x21BC: {parts: [ , [0x294A, 'x']]},
      0x21BD: {parts: [ , [0x294A, 'x']]},
      0x21C0: {parts: [ , [0x294A, 'x']]},
      0x21C1: {parts: [ , [0x294A, 'x']]},
      0x21D0: {parts: [ , , 0]},
      0x21D2: {parts: [0]}
    },
    add: {
      0x003D: {dir: 'H', sizes: 1, parts: [0, 0x3D]},
      0x02C6: {dir: 'H', sizes: 6},
      0x02C7: {dir: 'H', sizes: 6},
      0x02DC: {dir: 'H', sizes: 6},
      0x02F7: {dir: 'H', sizes: 6},
      0x0306: {dir: 'H', sizes: 6, parts: [[0xE144, '-extend'], [0x23B5, '-extend'], [0xE145, '-extend']]},
      0x2013: {dir: 'H', sizes: 1, parts: [0, 0x2013]},
      0x2014: {dir: 'H', sizes: 1, parts: [0, 0x2014]},
      0x2015: {dir: 'H', parts: [0, 0x2015]},
      0x219E: {dir: 'H', sizes: 1, parts: [0x219E, 0x2212]},
      0x21A0: {dir: 'H', sizes: 1, parts: [0, 0x2212, 0x21A0]},
      0x21A5: {dir: 'V', sizes: 1, parts: [0x2191, 0x23D0, 0x005F]},
      0x21A7: {dir: 'V', sizes: 1, parts: [0x005F, 0x23D0, 0x2193]},
      0x21BE: {dir: 'V', sizes: 1, parts: [0x21BE, 0x23D0]},
      0x21BF: {dir: 'V', sizes: 1, parts: [0x21BF, 0x23D0]},
      0x21C2: {dir: 'V', sizes: 1, parts: [0, 0x23D0, 0x21C2]},
      0x21C3: {dir: 'V', sizes: 1, parts: [0, 0x23D0, 0x21C3]},
      0x2212: {dir: 'H', sizes: 1, parts: [0, 0x2212]},
      0x23AA: {dir: 'V', sizes: 1, parts: [0, 0x23AA, 0]},
      0x23AE: {dir: 'V', sizes: 1, parts: [0, 0x23AE, 0]},
      0x23B8: {dir: 'V', sizes: 1, parts: [0, 0x23B8, 0]},
      0x23B9: {dir: 'V', sizes: 1, parts: [0, 0x23B9, 0]},
      0x23D0: {dir: 'V', sizes: 1, parts: [0, 0x2223]},
      0x27EE: {dir: 'V', sizes: 1, parts: [0x239B, 0x239C, 0x239D]},
      0x27EF: {dir: 'V', sizes: 1, parts: [0x239E, 0x239F, 0x23A0]},
      0x2906: {dir: 'H', sizes: 1, parts: [0x21D0, [0x21D4, '-extend'], [0x2906, '-extend']]},
      0x2907: {dir: 'H', sizes: 1, parts: [[0x2907, '-extend'], [0x21D4, '-extend'], 0x21D2]},
      0x294A: {dir: 'H', sizes: 1, parts: [0x21BC, [0x294A, '-extend'], 0x21C1]},
      0x294B: {dir: 'H', sizes: 1, parts: [0x21BD, [0x294A, '-extend'], 0x21C0]},
      0x294C: {dir: 'V', sizes: 1, parts: [0x21BE, 0x23D0, 0x21C3]},
      0x294D: {dir: 'V', sizes: 1, parts: [0x21BF, 0x23D0, 0x21C2]},
      0x294F: {dir: 'V', sizes: 1, parts: [0x21BE, 0x23D0, 0x21C2]},
      0x2951: {dir: 'V', sizes: 1, parts: [0x21BF, 0x23D0, 0x21C3]},
      0x295C: {dir: 'V', sizes: 1, parts: [0x21BE, 0x23D0, 0x005F]},
      0x295D: {dir: 'V', sizes: 1, parts: [0x005F, 0x23D0, 0x21C2]},
      0x2960: {dir: 'V', sizes: 1, parts: [0x21BF, 0x23D0, 0x005F]},
      0x2961: {dir: 'V', sizes: 1, parts: [0x005F, 0x23D0, 0x21C3]},
      0x2980: {dir: 'V', sizes: 1, parts: [0, 0x2980]},
    },
    alias: {
      0x002D: 0x2212,
      0x005E: 0x02C6,
      0x007E: 0x02DC,
      0x00AF: 0x203E,
      0x02C9: 0x203E,
      0x2017: 0x003D,
      0x2215: 0x002F,
      0x2312: 0x23DC,
      0x2322: 0x23DC,
      0x2323: 0x23DD,
      0x2329: 0x27E8,
      0x232A: 0x27E9,
      0x23AF: 0x2013,
      0x2500: 0x2013,
      0x2758: 0x2223,
      0x27F5: 0x2190,
      0x27F6: 0x2192,
      0x27F7: 0x2194,
      0x27F8: 0x21D0,
      0x27F9: 0x21D2,
      0x27FA: 0x21D4,
      0x27FB: 0x21A4,
      0x27FC: 0x21A6,
      0x27FD: 0x2906,
      0x27FE: 0x2907,
      0x3008: 0x27E8,
      0x3009: 0x27E9,
      0xFE37: 0x23DE,
      0xFE38: 0x23DF,
    },
    fullExtenders: {0x221A: [.65, 2.2]}
  });

  // 0x219E to 0x21A1 (double-headed arrows), 0x2195 & 0x2197 + others (arrows)
  // 0x29xx (more arrows)
  // 0x3008 & 0x3009 + more (parens of different kinds), 0xFFxx (full-width chars)


  /***********************************************************************************/
  /***********************************************************************************/

  /*
   * Ranges to use for dynamically loaded files
   */

  /**
   * Additional sans-serif characters
   */
  const SANSSERIF_MORE: Ranges = [[0x391, 0x3F5], 0x2202, 0x2207, ...RANGES.DOTLESS];

  /**
   * Lesser-used symbols
   */
  const SYMBOLS: Ranges = [
      ...RANGES.SYMBOLS, [0xE250, 0xE370], 0x1EEF0, 0x1EEF1
  ];

  /**
   * Integrals and summation sign parts
   * and less-used stretchy characters
   */
  const STRETCHY: Ranges = [
    0x221B, 0x221C, 0x23AE, 0x23B8, 0x23B9,
    0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB,
    [0x2983, 0x2986], 0x29FC, 0x29FD
  ];
  const PARTS: Ranges = [
    0x2320, 0x2321, 0x23B2, 0x23B3, ...STRETCHY
  ];

  const INTEGRALS: Ranges = [0x2A0B, ...RANGES.INTEGRALS];

  /**
   * Lesser-used variants
   */
  const VARIANTS: Ranges = [
    [0x21, 0x7E], 0xAA, [0xB0, 0xBA], 0x19B, 0x264, 0x387,
    [0x2061, 0x2064], 0x2140, 0x2148, 0x2149,
    [0x2190, 0x21FF], 0x2423, 0x25A9,
    [0x2070, 0x209F], [0x1D400, 0x1D6A3]
  ];

  /***********************************************************************************/

  const MathJaxStixData: FontDef = {
    name: 'MathJaxStix2',
    prefix: 'STX',
    variants: MathJaxStixVariants,
    delimiters: MathJaxStixDelimiters,
    remapAccents: {
      0x005E: '\u02C6',  // curcumflex
      0x007E: '\u02DC',  // tilde
    },
    parameters: {
      surd_height: .068,
      rule_thickness: .068,
      separation_factor: 1.5
    },
    ranges: [
      ['latin', {LR: {normal: RANGES.LATIN}}],
      ['latin-b', {LB: {bold: RANGES.LATIN}}],
      ['latin-i', {LI: {italic: RANGES.LATIN}}],
      ['latin-bi', {LBI: {'bold-italic': RANGES.LATIN}}],
      ['greek', {
        GK: {normal: RANGES.GREEK},
        GKB: {bold: RANGES.GREEK},
        GKI: {italic: RANGES.GREEK},
        GKBI: {'bold-italic': RANGES.GREEK}
      }],
      ['cyrillic', {
        CY: {normal: RANGES.CYRILLIC},
        CYB: {bold: RANGES.CYRILLIC},
        CYI: {italic: RANGES.CYRILLIC},
        CYBI: {'bold-italic': RANGES.CYRILLIC}
      }],
      ['phonetics', {
        PH: {normal: RANGES.PHONETICS},
        PHB: {bold: RANGES.PHONETICS},
        PHI: {italic: RANGES.PHONETICS},
        PHBI: {'bold-italic': RANGES.PHONETICS}
      }],
      ['double-struck', {
        DS: {
          normal: RANGES.DOUBLESTRUCK,
          'double-struck': RANGES.DOTLESS
        }
      }],
      ['fraktur', {
        F: {
          normal: RANGES.FRAKTUR_NORMAL,
          fraktur: RANGES.DOTLESS
        },
        FB: {
          normal: RANGES.FRAKTUR_BOLD,
          'bold-fraktur': RANGES.DOTLESS
        }
      }],
      ['script', {
        S: {
          normal: RANGES.SCRIPT_NORMAL,
          script: RANGES.DOTLESS
        },
        SB: {
          normal: RANGES.SCRIPT_BOLD,
          'bold-script': RANGES.DOTLESS
        }
      }],
      ['sans-serif', {
        SS: {
          normal: RANGES.SANSSERIF_NORMAL,
          'sans-serif': SANSSERIF_MORE,
        },
        SSB: {
          'bold-sans-serif': SANSSERIF_MORE,
        },
        SSI: {
          normal: RANGES.SANSSERIF_ITALIC,
          'sans-serif-italic': SANSSERIF_MORE,
        },
        SSBI: {
          normal: RANGES.SANSSERIF_BOLDITALIC,
          'sans-serif-bold-italic': SANSSERIF_MORE,
        }
      }],
      ['monospace', {
        M: {
          normal: RANGES.MONOSPACE,
          monospace: RANGES.DOTLESS
        }
      }],
      ['calligraphic', {
        C: {'-tex-calligraphic': RANGES.ALPHA},
        CB: {'-tex-bold-calligraphic': RANGES.ALPHA}
      }],
      ['math', {
        MM: {normal: RANGES.MATH}
      }],
      ['symbols', {
        SY: {normal: SYMBOLS},
      }],
      ['symbols-other', {
        SYB: {bold: RANGES.MORE_SYMBOLS},
        SYI: {italic: RANGES.MORE_SYMBOLS},
        SYBI: {'bold-italic': RANGES.MORE_SYMBOLS}
      }],
      ['enclosed', {EN: {normal: RANGES.ENCLOSED}}],
      ['shapes', {
        SH: {normal: RANGES.SHAPES},
        SHB: {bold: RANGES.SHAPES},
        SHI: {italic: RANGES.SHAPES},
        SHBI: {'bold-italic': RANGES.SHAPES}
      }],
      ['dingbats', {DB: {normal: RANGES.DINGBATS}}],
      ['arrows', {AR: {normal: RANGES.ARROWS}}],
      ['accents', {AC: {normal: RANGES.ACCENTS}}],
      ['accents-other', {
        ACB: {bold: RANGES.ACCENTS},
        ACI: {italic: RANGES.ACCENTS},
        ACBI: {'bold-italic': RANGES.ACCENTS}
      }],
      ['stretchy', {
        '': {
          normal: PARTS,
          '-smallop': STRETCHY,
          '-largeop': STRETCHY,
          '-size3': STRETCHY,
          '-size4': STRETCHY,
          '-size5': STRETCHY,
          '-size6': STRETCHY,
          '-size7': STRETCHY,
          '-size8': STRETCHY,
          '-size9': STRETCHY,
          '-size10': STRETCHY,
          '-size11': STRETCHY,
          '-size12': STRETCHY,
          '-extend': STRETCHY
        }
      }, STRETCHY],
      ['variants', {VX: {'-tex-variant': VARIANTS}}],
      ['upright', {
        '': {
          '-up': INTEGRALS,
          '-up-dsp': INTEGRALS
        }
      }]
    ],
    legal: {
      addCopyright: 'Copyright (c) 2022 MathJax, Inc. (www.mathjax.org)'
    }
  };

  CommonFont.define(MathJaxStixData).writeFont();

  Components.define('svg', MathJaxStixData).writeFont().writeComponent();
  SVGFont.define(MathJaxStixData).writeFont();

  Components.define('chtml', MathJaxStixData).writeFont().writeComponent();
  CHTMLFont.define(MathJaxStixData).writeFont().makeWoffFonts('STX-M');

} catch(err) {
  console.error(err);
  process.exit(1);
}
