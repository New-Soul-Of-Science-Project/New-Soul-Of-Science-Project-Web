import { ChtmlFontData } from '@mathjax/src/mjs/output/chtml/FontData.js';
import { CommonMathJaxStix2FontMixin } from './common.js';
import { normal } from './chtml/normal.js';
import { bold } from './chtml/bold.js';
import { italic } from './chtml/italic.js';
import { boldItalic } from './chtml/bold-italic.js';
import { texMathit } from './chtml/tex-mathit.js';
import { doubleStruck } from './chtml/double-struck.js';
import { fraktur } from './chtml/fraktur.js';
import { frakturBold } from './chtml/fraktur-bold.js';
import { script } from './chtml/script.js';
import { scriptBold } from './chtml/script-bold.js';
import { monospace } from './chtml/monospace.js';
import { sansSerifBold } from './chtml/sans-serif-bold.js';
import { sansSerifBoldItalic } from './chtml/sans-serif-bold-italic.js';
import { sansSerif } from './chtml/sans-serif.js';
import { sansSerifItalic } from './chtml/sans-serif-italic.js';
import { doubleStruckItalic } from './chtml/double-struck-italic.js';
import { texCalligraphic } from './chtml/tex-calligraphic.js';
import { texCalligraphicBold } from './chtml/tex-calligraphic-bold.js';
import { texOldstyle } from './chtml/tex-oldstyle.js';
import { texOldstyleBold } from './chtml/tex-oldstyle-bold.js';
import { smallop } from './chtml/smallop.js';
import { largeop } from './chtml/largeop.js';
import { size3 } from './chtml/size3.js';
import { size4 } from './chtml/size4.js';
import { size5 } from './chtml/size5.js';
import { size6 } from './chtml/size6.js';
import { size7 } from './chtml/size7.js';
import { size8 } from './chtml/size8.js';
import { size9 } from './chtml/size9.js';
import { size10 } from './chtml/size10.js';
import { size11 } from './chtml/size11.js';
import { size12 } from './chtml/size12.js';
import { texVariant } from './chtml/tex-variant.js';
import { extend } from './chtml/extend.js';
import { up } from './chtml/up.js';
import { upDsp } from './chtml/up-dsp.js';
import { delimiters } from './chtml/delimiters.js';
const Base = CommonMathJaxStix2FontMixin(ChtmlFontData);
export class MathJaxStix2Font extends Base {
    constructor() {
        super(...arguments);
        this.cssFontPrefix = 'STX';
    }
}
MathJaxStix2Font.NAME = 'MathJaxStix2';
MathJaxStix2Font.OPTIONS = Object.assign(Object.assign({}, Base.OPTIONS), { fontURL: '@mathjax/mathjax-stix2-font/js/chtml/woff2', dynamicPrefix: '@mathjax/mathjax-stix2-font/js/chtml/dynamic' });
MathJaxStix2Font.defaultCssFamilyPrefix = 'MJX-STX-ZERO';
MathJaxStix2Font.defaultVariantLetters = {
    'normal': '',
    'bold': 'B',
    'italic': 'I',
    'bold-italic': 'BI',
    '-tex-mathit': 'MI',
    'double-struck': 'DS',
    'fraktur': 'F',
    'bold-fraktur': 'FB',
    'script': 'S',
    'bold-script': 'SB',
    'monospace': 'M',
    'bold-sans-serif': 'SSB',
    'sans-serif-bold-italic': 'SSBI',
    'sans-serif': 'SS',
    'sans-serif-italic': 'SSI',
    '-double-struck-italic': 'DSI',
    '-tex-calligraphic': 'C',
    '-tex-bold-calligraphic': 'CB',
    '-tex-oldstyle': 'OS',
    '-tex-bold-oldstyle': 'OB',
    '-smallop': 'SO',
    '-largeop': 'LO',
    '-size3': 'S3',
    '-size4': 'S4',
    '-size5': 'S5',
    '-size6': 'S6',
    '-size7': 'S7',
    '-size8': 'S8',
    '-size9': 'S9',
    '-size10': 'S10',
    '-size11': 'S11',
    '-size12': 'S12',
    '-tex-variant': 'V',
    '-extend': 'E',
    '-up': 'U',
    '-up-dsp': 'UD'
};
MathJaxStix2Font.defaultDelimiters = delimiters;
MathJaxStix2Font.defaultChars = {
    'normal': normal,
    'bold': bold,
    'italic': italic,
    'bold-italic': boldItalic,
    '-tex-mathit': texMathit,
    'double-struck': doubleStruck,
    'fraktur': fraktur,
    'bold-fraktur': frakturBold,
    'script': script,
    'bold-script': scriptBold,
    'monospace': monospace,
    'bold-sans-serif': sansSerifBold,
    'sans-serif-bold-italic': sansSerifBoldItalic,
    'sans-serif': sansSerif,
    'sans-serif-italic': sansSerifItalic,
    '-double-struck-italic': doubleStruckItalic,
    '-tex-calligraphic': texCalligraphic,
    '-tex-bold-calligraphic': texCalligraphicBold,
    '-tex-oldstyle': texOldstyle,
    '-tex-bold-oldstyle': texOldstyleBold,
    '-smallop': smallop,
    '-largeop': largeop,
    '-size3': size3,
    '-size4': size4,
    '-size5': size5,
    '-size6': size6,
    '-size7': size7,
    '-size8': size8,
    '-size9': size9,
    '-size10': size10,
    '-size11': size11,
    '-size12': size12,
    '-tex-variant': texVariant,
    '-extend': extend,
    '-up': up,
    '-up-dsp': upDsp
};
MathJaxStix2Font.defaultStyles = Object.assign(Object.assign({}, ChtmlFontData.defaultStyles), { 'mjx-container[jax="CHTML"] > mjx-math.STX-N[breakable] > *': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-N'
    }, '.STX-N': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-N'
    }, '.STX-B': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-B'
    }, '.STX-I': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-I'
    }, '.STX-BI': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-BI'
    }, '.STX-MI': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-MI'
    }, '.STX-DS': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-DS'
    }, '.STX-F': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-F'
    }, '.STX-FB': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-FB'
    }, '.STX-S': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-S'
    }, '.STX-SB': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-SB'
    }, '.STX-M': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-M'
    }, '.STX-SSB': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-SSB'
    }, '.STX-SSBI': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-SSBI'
    }, '.STX-SS': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-SS'
    }, '.STX-SSI': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-SSI'
    }, '.STX-DSI': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-DSI'
    }, '.STX-C': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-C'
    }, '.STX-CB': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-CB'
    }, '.STX-OS': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-OS'
    }, '.STX-OB': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-OB'
    }, '.STX-SO': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-SO'
    }, '.STX-LO': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-LO'
    }, '.STX-S3': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-S3'
    }, '.STX-S4': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-S4'
    }, '.STX-S5': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-S5'
    }, '.STX-S6': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-S6'
    }, '.STX-S7': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-S7'
    }, '.STX-S8': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-S8'
    }, '.STX-S9': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-S9'
    }, '.STX-S10': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-S10'
    }, '.STX-S11': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-S11'
    }, '.STX-S12': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-S12'
    }, '.STX-V': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-V'
    }, '.STX-E': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-E'
    }, '.STX-U': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-U'
    }, '.STX-UD': {
        'font-family': 'MJX-STX-ZERO, MJX-STX-UD'
    } });
MathJaxStix2Font.defaultFonts = Object.assign(Object.assign({}, ChtmlFontData.defaultFonts), { '@font-face /* MJX-STX-ZERO */': {
        'font-family': 'MJX-STX-ZERO',
        src: 'url("%%URL%%/mjx-stx-zero.woff2") format("woff2")'
    }, '@font-face /* MJX-BRK */': {
        'font-family': 'MJX-BRK',
        src: 'url("%%URL%%/mjx-stx-brk.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-N */': {
        'font-family': 'MJX-STX-N',
        src: 'url("%%URL%%/mjx-stx-n.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-B */': {
        'font-family': 'MJX-STX-B',
        src: 'url("%%URL%%/mjx-stx-b.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-I */': {
        'font-family': 'MJX-STX-I',
        src: 'url("%%URL%%/mjx-stx-i.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-BI */': {
        'font-family': 'MJX-STX-BI',
        src: 'url("%%URL%%/mjx-stx-bi.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-MI */': {
        'font-family': 'MJX-STX-MI',
        src: 'url("%%URL%%/mjx-stx-mi.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-DS */': {
        'font-family': 'MJX-STX-DS',
        src: 'url("%%URL%%/mjx-stx-ds.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-F */': {
        'font-family': 'MJX-STX-F',
        src: 'url("%%URL%%/mjx-stx-f.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-FB */': {
        'font-family': 'MJX-STX-FB',
        src: 'url("%%URL%%/mjx-stx-fb.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-S */': {
        'font-family': 'MJX-STX-S',
        src: 'url("%%URL%%/mjx-stx-s.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-SB */': {
        'font-family': 'MJX-STX-SB',
        src: 'url("%%URL%%/mjx-stx-sb.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-M */': {
        'font-family': 'MJX-STX-M',
        src: 'url("%%URL%%/mjx-stx-m.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-SSB */': {
        'font-family': 'MJX-STX-SSB',
        src: 'url("%%URL%%/mjx-stx-ssb.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-SSBI */': {
        'font-family': 'MJX-STX-SSBI',
        src: 'url("%%URL%%/mjx-stx-ssbi.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-SS */': {
        'font-family': 'MJX-STX-SS',
        src: 'url("%%URL%%/mjx-stx-ss.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-SSI */': {
        'font-family': 'MJX-STX-SSI',
        src: 'url("%%URL%%/mjx-stx-ssi.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-DSI */': {
        'font-family': 'MJX-STX-DSI',
        src: 'url("%%URL%%/mjx-stx-dsi.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-C */': {
        'font-family': 'MJX-STX-C',
        src: 'url("%%URL%%/mjx-stx-c.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-CB */': {
        'font-family': 'MJX-STX-CB',
        src: 'url("%%URL%%/mjx-stx-cb.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-OS */': {
        'font-family': 'MJX-STX-OS',
        src: 'url("%%URL%%/mjx-stx-os.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-OB */': {
        'font-family': 'MJX-STX-OB',
        src: 'url("%%URL%%/mjx-stx-ob.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-SO */': {
        'font-family': 'MJX-STX-SO',
        src: 'url("%%URL%%/mjx-stx-so.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-LO */': {
        'font-family': 'MJX-STX-LO',
        src: 'url("%%URL%%/mjx-stx-lo.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-S3 */': {
        'font-family': 'MJX-STX-S3',
        src: 'url("%%URL%%/mjx-stx-s3.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-S4 */': {
        'font-family': 'MJX-STX-S4',
        src: 'url("%%URL%%/mjx-stx-s4.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-S5 */': {
        'font-family': 'MJX-STX-S5',
        src: 'url("%%URL%%/mjx-stx-s5.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-S6 */': {
        'font-family': 'MJX-STX-S6',
        src: 'url("%%URL%%/mjx-stx-s6.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-S7 */': {
        'font-family': 'MJX-STX-S7',
        src: 'url("%%URL%%/mjx-stx-s7.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-S8 */': {
        'font-family': 'MJX-STX-S8',
        src: 'url("%%URL%%/mjx-stx-s8.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-S9 */': {
        'font-family': 'MJX-STX-S9',
        src: 'url("%%URL%%/mjx-stx-s9.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-S10 */': {
        'font-family': 'MJX-STX-S10',
        src: 'url("%%URL%%/mjx-stx-s10.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-S11 */': {
        'font-family': 'MJX-STX-S11',
        src: 'url("%%URL%%/mjx-stx-s11.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-S12 */': {
        'font-family': 'MJX-STX-S12',
        src: 'url("%%URL%%/mjx-stx-s12.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-V */': {
        'font-family': 'MJX-STX-V',
        src: 'url("%%URL%%/mjx-stx-v.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-E */': {
        'font-family': 'MJX-STX-E',
        src: 'url("%%URL%%/mjx-stx-e.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-U */': {
        'font-family': 'MJX-STX-U',
        src: 'url("%%URL%%/mjx-stx-u.woff2") format("woff2")'
    }, '@font-face /* MJX-STX-UD */': {
        'font-family': 'MJX-STX-UD',
        src: 'url("%%URL%%/mjx-stx-ud.woff2") format("woff2")'
    } });
MathJaxStix2Font.dynamicFiles = ChtmlFontData.defineDynamicFiles([
    ['latin', {
            'normal': [
                [0xC0, 0xD6], [0xD8, 0xEF], [0xF1, 0xF6], [0xF8, 0x130], [0x132, 0x180], 0x188, 0x190, 0x192, 0x195, [0x199, 0x19B], 0x19E, 0x1A0, 0x1A1, 0x1A5, 0x1AA, 0x1AB, 0x1AD, 0x1AF, 0x1B0, 0x1B5, 0x1BA, 0x1BB, 0x1BE, [0x1C0, 0x1C3], 0x1DE, 0x1DF, 0x1F0, [0x1FA, 0x1FF], [0x218, 0x21B], 0x221, 0x228, 0x229, [0x234, 0x236], [0x1E00, 0x1EF9], 0xA727, 0xA792
            ]
        }],
    ['latin-b', {
            'bold': [
                [0xC0, 0xD6], [0xD8, 0xEF], [0xF1, 0xF6], [0xF8, 0x130], [0x132, 0x180], 0x188, 0x190, 0x192, 0x195, [0x199, 0x19B], 0x19E, 0x1A0, 0x1A1, 0x1A5, 0x1AA, 0x1AB, 0x1AD, 0x1AF, 0x1B0, 0x1B5, 0x1BA, 0x1BB, 0x1BE, [0x1C0, 0x1C3], 0x1DE, 0x1DF, 0x1F0, [0x1FA, 0x1FF], [0x218, 0x21B], 0x221, 0x228, 0x229, [0x234, 0x236], [0x1E00, 0x1EF9], 0xA727
            ]
        }],
    ['latin-i', {
            'italic': [
                [0xC0, 0xD6], [0xD8, 0xEF], [0xF1, 0xF6], [0xF8, 0x130], [0x132, 0x180], 0x188, 0x190, 0x192, 0x195, [0x199, 0x19B], 0x19E, 0x1A0, 0x1A1, 0x1A5, 0x1AA, 0x1AB, 0x1AD, 0x1AF, 0x1B0, 0x1B5, 0x1BA, 0x1BB, 0x1BE, [0x1C0, 0x1C3], 0x1DE, 0x1DF, 0x1F0, [0x1FA, 0x1FF], [0x218, 0x21B], 0x221, 0x228, 0x229, [0x234, 0x236], [0x1E00, 0x1EF9], 0xA727
            ]
        }],
    ['latin-bi', {
            'bold-italic': [
                [0xC0, 0xD6], [0xD8, 0xEF], [0xF1, 0xF6], [0xF8, 0x130], [0x132, 0x180], 0x188, 0x190, 0x192, 0x195, [0x199, 0x19B], 0x19E, 0x1A0, 0x1A1, 0x1A5, 0x1AA, 0x1AB, 0x1AD, 0x1AF, 0x1B0, 0x1B5, 0x1BA, 0x1BB, 0x1BE, [0x1C0, 0x1C3], 0x1DE, 0x1DF, 0x1F0, [0x1FA, 0x1FF], [0x218, 0x21B], 0x221, 0x228, 0x229, [0x234, 0x236], [0x1E00, 0x1EF9], 0xA727
            ]
        }],
    ['greek', {
            'normal': [
                0x37E, [0x384, 0x38A], 0x38C, [0x38E, 0x390], [0x3AA, 0x3B0], [0x3CA, 0x3CE], 0x3D0, [0x3D8, 0x3E1]
            ],
            'bold': [
                0x37E, [0x384, 0x38A], 0x38C, [0x38E, 0x390], [0x3AA, 0x3B0], [0x3CA, 0x3CE], 0x3D0, [0x3D8, 0x3DB], [0x3DE, 0x3E1]
            ],
            'italic': [
                0x37E, [0x384, 0x38A], 0x38C, [0x38E, 0x390], [0x3AA, 0x3B0], [0x3CA, 0x3CE], 0x3D0, [0x3D8, 0x3E1]
            ],
            'bold-italic': [
                0x37E, [0x384, 0x38A], 0x38C, [0x38E, 0x390], [0x3AA, 0x3B0], [0x3CA, 0x3CE], 0x3D0, [0x3D8, 0x3E1]
            ]
        }],
    ['cyrillic', {
            'normal': [
                [0x400, 0x45F], 0x462, 0x463, 0x46A, 0x46B, [0x472, 0x475], 0x490, 0x491
            ],
            'bold': [
                [0x400, 0x45F], 0x462, 0x463, 0x46A, 0x46B, [0x472, 0x475], 0x490, 0x491
            ],
            'italic': [
                [0x400, 0x45F], 0x462, 0x463, 0x46A, 0x46B, [0x472, 0x475], 0x490, 0x491
            ],
            'bold-italic': [
                [0x400, 0x45F], 0x462, 0x463, 0x46A, 0x46B, [0x472, 0x475], 0x490, 0x491
            ]
        }],
    ['phonetics', {
            'normal': [
                [0x250, 0x2AF], 0x1D00, 0x1D07, 0x1D1C, 0x1D81, 0x1D84, 0x1D85, 0x1D8A, 0x1D8D, 0x1D8E, 0x1D98, 0x1D9B, 0x1DA3
            ],
            'bold': [
                [0x250, 0x2AF], 0x1D00, 0x1D07, 0x1D1C, 0x1D81, 0x1D84, 0x1D85, 0x1D8A, 0x1D8D, 0x1D8E, 0x1D98, 0x1DA3
            ],
            'italic': [
                [0x250, 0x2AF], 0x1D00, 0x1D07, 0x1D1C, 0x1D81, 0x1D84, 0x1D85, 0x1D8A, 0x1D8D, 0x1D8E, 0x1D98, 0x1DA3
            ],
            'bold-italic': [
                [0x250, 0x2AF], 0x1D00, 0x1D07, 0x1D1C, 0x1D81, 0x1D84, 0x1D85, 0x1D8A, 0x1D8D, 0x1D8E, 0x1D98, 0x1DA3
            ]
        }],
    ['double-struck', {
            'normal': [
                0x2102, 0x210D, 0x2115, 0x2119, 0x211A, 0x211D, 0x2124, [0x213C, 0x2140], [0x2145, 0x2149], 0x1D538, 0x1D539, [0x1D53B, 0x1D53E], [0x1D540, 0x1D544], 0x1D546, [0x1D54A, 0x1D550], [0x1D552, 0x1D56B], [0x1D7D8, 0x1D7E1]
            ],
            'double-struck': [
                0x131, 0x237
            ]
        }],
    ['fraktur', {
            'normal': [
                0x210C, 0x2111, 0x211C, 0x2128, 0x212D, 0x1D504, 0x1D505, [0x1D507, 0x1D50A], [0x1D50D, 0x1D514], [0x1D516, 0x1D51C], [0x1D51E, 0x1D537], [0x1D56C, 0x1D59F]
            ],
            'fraktur': [
                0x131, 0x237
            ],
            'bold-fraktur': [
                0x131, 0x237
            ]
        }],
    ['script', {
            'normal': [
                0x210A, 0x210B, 0x2110, 0x2112, 0x2113, 0x2118, 0x211B, 0x212C, [0x212F, 0x2131], 0x2133, 0x2134, 0x1D49C, 0x1D49E, 0x1D49F, 0x1D4A2, 0x1D4A5, 0x1D4A6, [0x1D4A9, 0x1D4AC], [0x1D4AE, 0x1D4B9], 0x1D4BB, [0x1D4BD, 0x1D4C3], [0x1D4C5, 0x1D503]
            ],
            'script': [
                0x131, 0x237
            ],
            'bold-script': [
                0x131, 0x237
            ]
        }],
    ['sans-serif', {
            'normal': [
                [0x2141, 0x2144], [0x1D5A0, 0x1D5D3], [0x1D608, 0x1D66F], [0x1D7E2, 0x1D7EB]
            ],
            'sans-serif': [
                0x131, 0x237, [0x391, 0x3A1], [0x3A3, 0x3A9], [0x3B1, 0x3C9], 0x3D1, 0x3D5, 0x3D6, 0x3F1, 0x3F4, 0x3F5, 0x2202, 0x2207
            ],
            'bold-sans-serif': [
                0x131, 0x237
            ],
            'sans-serif-italic': [
                0x131, 0x237, [0x391, 0x3A1], [0x3A3, 0x3A9], [0x3B1, 0x3C9], 0x3D1, 0x3D5, 0x3D6, 0x3F1, 0x3F4, 0x3F5, 0x2202, 0x2207
            ],
            'sans-serif-bold-italic': [
                0x131, 0x237
            ]
        }],
    ['monospace', {
            'normal': [
                [0x1D670, 0x1D6A3], [0x1D7F6, 0x1D7FF]
            ],
            'monospace': [
                0x131, 0x237
            ]
        }],
    ['calligraphic', {
            '-tex-calligraphic': [
                [0x41, 0x5A], [0x61, 0x7A], 0x131, 0x237
            ],
            '-tex-bold-calligraphic': [
                [0x41, 0x5A], [0x61, 0x7A], 0x131, 0x237
            ]
        }],
    ['math', {
            'normal': [
                0x220A, 0x220D, 0x221B, 0x221C, 0x223A, 0x223B, 0x224E, 0x224F, [0x2251, 0x2253], [0x2256, 0x225C], 0x225E, 0x228C, [0x22B6, 0x22B9], [0x22BB, 0x22BF], 0x22C7, [0x22D0, 0x22E1], [0x22E4, 0x22E9], [0x22F2, 0x22FF], [0x27C0, 0x27C9], [0x27CB, 0x27CD], [0x27D0, 0x27D7], [0x27DA, 0x27DC], [0x27DF, 0x27E5], [0x2981, 0x2996], [0x2999, 0x29F4], 0x29F6, [0x29FA, 0x29FF], 0x2A0A, 0x2A0B, [0x2A1D, 0x2A2E], [0x2A30, 0x2A3E], [0x2A40, 0x2A7C], [0x2A7F, 0x2A84], [0x2A8D, 0x2A94], [0x2A97, 0x2AAE], [0x2ABB, 0x2AC4], [0x2AC7, 0x2ACA], [0x2ACD, 0x2ADD], [0x2AEC, 0x2AF1], [0x2AF6, 0x2AFB], [0x2AFD, 0x2AFF]
            ]
        }],
    ['symbols', {
            'normal': [
                0xA1, 0xA2, 0xA4, 0xA6, [0xA9, 0xAB], 0xAD, 0xAE, 0xB2, 0xB3, [0xB9, 0xBF], 0x2017, 0x201A, 0x201B, 0x201E, 0x201F, 0x2022, 0x2025, 0x2030, 0x2031, [0x2038, 0x203C], 0x203E, 0x2040, 0x2043, 0x2047, [0x204B, 0x2052], 0x2070, 0x2071, [0x2074, 0x208E], 0x20A3, 0x20A7, 0x20AB, 0x20B9, 0x20BA, 0x20BD, 0x2100, 0x2101, [0x2103, 0x2106], 0x2108, 0x2109, 0x2114, 0x2116, 0x2117, [0x211E, 0x2123], 0x2125, 0x2129, 0x212E, [0x2139, 0x213B], [0x214A, 0x214F], [0x2153, 0x215E], [0x2300, 0x2306], [0x2311, 0x2318], 0x231A, 0x231B, [0x2324, 0x2328], [0x232B, 0x239A], 0x23B6, [0x23BA, 0x23CD], 0x23CF, [0x23D1, 0x23DB], [0x23E2, 0x23F3], [0x23F8, 0x23FF], 0x2422, 0x2423, 0x3012, 0x3030, 0x306E, 0xE250, 0xE2FC, 0xE2FE, 0xE300, 0xE302, 0xE304, 0xE306, 0xE308, 0xE30A, 0xE30C, 0xE30E, 0xE310, 0xE312, 0xE314, 0xE316, 0xE318, 0xE31A, 0xE31C, 0xE31E, 0xE320, 0xE322, 0xE324, 0xE326, 0xE328, 0xE32A, 0xE364, 0xE368, 0xE36C, 0xE370, [0xFB00, 0xFB04], 0xFFFD, 0x1EEF0, 0x1EEF1
            ]
        }],
    ['symbols-other', {
            'bold': [
                [0xA1, 0xA7], [0xA9, 0xAE], [0xB1, 0xB3], [0xB5, 0xB7], [0xB9, 0xBF], 0xD7, 0xF0, 0xF7, 0x2017, 0x201A, 0x201B, [0x201E, 0x2022], 0x2025, 0x2030, 0x2031, [0x2038, 0x203C], 0x203E, 0x2040, 0x2043, 0x2047, [0x204B, 0x2052], 0x2070, 0x2071, [0x2074, 0x208E], 0x20A3, 0x20A7, 0x20AB, 0x20B9, 0x20BA, 0x20BD, 0x2116, [0x2153, 0x215E], 0x2423, [0xFB00, 0xFB04]
            ],
            'italic': [
                [0xA1, 0xA7], [0xA9, 0xAE], [0xB1, 0xB3], [0xB5, 0xB7], [0xB9, 0xBF], 0xD7, 0xF0, 0xF7, 0x2017, 0x201A, 0x201B, [0x201E, 0x2022], 0x2025, 0x2030, 0x2031, [0x2038, 0x203C], 0x203E, 0x2040, 0x2043, 0x2047, [0x204B, 0x2052], 0x2070, 0x2071, [0x2074, 0x208E], 0x20A3, 0x20A7, 0x20AB, 0x20B9, 0x20BA, 0x20BD, 0x2116, [0x2153, 0x215E], 0x2423, [0xFB00, 0xFB04]
            ],
            'bold-italic': [
                [0xA1, 0xA7], [0xA9, 0xAE], [0xB1, 0xB3], [0xB5, 0xB7], [0xB9, 0xBF], 0xD7, 0xF0, 0xF7, 0x2017, 0x201A, 0x201B, [0x201E, 0x2022], 0x2025, 0x2030, 0x2031, [0x2038, 0x203C], 0x203E, 0x2040, 0x2043, 0x2047, [0x204B, 0x2052], 0x2070, 0x2071, [0x2074, 0x208E], 0x20A3, 0x20A7, 0x20AB, 0x20B9, 0x20BA, 0x20BD, 0x2116, [0x2153, 0x215E], 0x2423, [0xFB00, 0xFB04]
            ]
        }],
    ['enclosed', {
            'normal': [
                [0x2460, 0x24FF], [0x2776, 0x2793]
            ]
        }],
    ['shapes', {
            'normal': [
                0x2302, [0x2326, 0x2328], 0x232B, [0x23FB, 0x23FE], 0x2500, 0x2502, 0x2506, 0x2508, 0x250A, 0x250C, 0x2510, 0x2514, 0x2518, 0x251C, 0x2524, 0x252C, 0x2534, 0x253C, [0x2550, 0x256C], 0x2571, 0x2572, 0x2580, 0x2584, 0x2588, 0x258C, [0x2590, 0x2593], [0x25A2, 0x25A9], [0x25AC, 0x25B1], 0x25C8, 0x25C9, [0x25CC, 0x25CE], [0x25D0, 0x25E5], [0x25E7, 0x25EE], [0x25F0, 0x25F7], [0x2600, 0x26FF], 0x2702, 0x2709, 0x2713, 0x2720, 0x272A, 0x2736, 0x273D, 0x2772, 0x2773, [0x2776, 0x2793], 0x279B, [0x2B12, 0x2B2F], [0x2B50, 0x2B54]
            ],
            'bold': [],
            'italic': [],
            'bold-italic': []
        }],
    ['dingbats', {
            'normal': [
                [0x2600, 0x26FF], 0x2702, 0x2709, 0x272A, 0x2736, 0x273D, 0x279B
            ]
        }],
    ['arrows', {
            'normal': [
                0x219C, 0x219D, 0x219F, 0x21A1, 0x21A5, 0x21A7, 0x21A8, 0x21AD, [0x21AF, 0x21B5], 0x21B8, 0x21B9, [0x21D6, 0x21D9], [0x21DC, 0x21DF], [0x21E6, 0x21EA], 0x21F4, [0x21F7, 0x21FF], 0x23CE, [0x27F0, 0x27F4], 0x27FF, [0x2900, 0x2909], [0x290C, 0x2949], 0x294C, 0x294D, 0x294F, 0x2951, 0x2954, 0x2955, 0x2958, 0x2959, 0x295C, 0x295D, [0x2960, 0x2969], [0x2970, 0x297B], 0x2B12, [0x2B30, 0x2B4C]
            ]
        }],
    ['accents', {
            'normal': [
                0xB8, [0x2B0, 0x2C5], 0x2C8, 0x2CC, [0x2CE, 0x2D7], 0x2DB, [0x2DD, 0x2E9], 0x2EC, 0x2ED, 0x2F7, 0x309, 0x30B, [0x30D, 0x337], [0x339, 0x33F], 0x344, 0x346, 0x347, 0x34C, 0x34D, 0x359, 0x35C, [0x360, 0x362], [0x20D3, 0x20D5], [0x20D8, 0x20DA], [0x20DD, 0x20DF], [0x20E4, 0x20EB], 0x20F0
            ]
        }],
    ['accents-other', {
            'bold': [
                0xB8, [0x2B0, 0x2C5], 0x2C8, 0x2CC, [0x2CE, 0x2D7], 0x2DB, [0x2DD, 0x2E9], 0x2EC, 0x2ED, 0x2F7, 0x309, 0x30B, [0x30D, 0x337], [0x339, 0x33F], 0x344, 0x346, 0x347, 0x34C, 0x359, 0x35C, [0x360, 0x362], [0x20DD, 0x20DF], [0x20E4, 0x20EB], 0x20F0
            ],
            'italic': [
                0xB8, [0x2B0, 0x2C5], 0x2C8, 0x2CC, [0x2CE, 0x2D7], 0x2DB, [0x2DD, 0x2E9], 0x2EC, 0x2ED, 0x2F7, 0x309, 0x30B, [0x30D, 0x337], [0x339, 0x33F], 0x344, 0x346, 0x347, 0x34C, 0x359, 0x35C, [0x360, 0x362], [0x20DD, 0x20DF], [0x20E4, 0x20EB], 0x20F0
            ],
            'bold-italic': [
                0xB8, [0x2B0, 0x2C5], 0x2C8, 0x2CC, [0x2CE, 0x2D7], 0x2DB, [0x2DD, 0x2E9], 0x2EC, 0x2ED, 0x2F7, 0x309, 0x30B, [0x30D, 0x337], [0x339, 0x33F], 0x344, 0x346, 0x347, 0x34C, 0x359, 0x35C, [0x360, 0x362], [0x20DD, 0x20DF], [0x20E4, 0x20EB], 0x20F0
            ]
        }],
    ['stretchy', {
            'normal': [
                0x221B, 0x221C, 0x2320, 0x2321, 0x23AE, 0x23B2, 0x23B3, 0x23B8, 0x23B9, 0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-smallop': [
                0x221B, 0x221C, 0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-largeop': [
                0x221B, 0x221C, 0x23B8, 0x23B9, 0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-size3': [
                0x221B, 0x221C, 0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-size4': [
                0x221B, 0x221C, 0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-size5': [
                0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-size6': [
                0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-size7': [
                0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-size8': [
                0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-size9': [
                0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-size10': [
                0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-size11': [
                0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-size12': [
                0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD
            ],
            '-extend': [
                0x23AE
            ]
        }, [0x221B, 0x221C, 0x23AE, 0x23B8, 0x23B9, 0x2772, 0x2773, 0x27E6, 0x27E7, 0x27EA, 0x27EB, [0x2983, 0x2986], 0x29FC, 0x29FD]],
    ['variants', {
            '-tex-variant': [
                0x22, 0x27, 0x2A, 0x30, 0x60, 0x69, 0x6A, 0x7C, 0xAA, 0xB0, 0xB2, 0xB3, 0xB9, 0xBA, 0x19B, 0x264, 0x387, [0x2061, 0x2064], 0x2070, 0x2071, [0x2074, 0x208E], 0x2140, 0x2148, 0x2149, [0x2190, 0x2193], 0x21D1, 0x21D3, 0x21E0, 0x21E2, 0x2423, 0x25A9, 0x1D422, 0x1D423, 0x1D454, 0x1D456, 0x1D457, [0x1D462, 0x1D464], 0x1D467, 0x1D488, 0x1D48A, 0x1D48B, 0x1D4BE, 0x1D4BF, 0x1D4F2, 0x1D4F3, 0x1D526, 0x1D527, 0x1D55A, 0x1D55B, 0x1D58E, 0x1D58F, 0x1D5C2, 0x1D5C3, 0x1D5F6, 0x1D5F7, 0x1D628, 0x1D62A, 0x1D62B, 0x1D65C, 0x1D65E, 0x1D65F, 0x1D692, 0x1D693
            ]
        }],
    ['upright', {
            '-up': [
                [0x222B, 0x2233], [0x2A0B, 0x2A1C]
            ],
            '-up-dsp': [
                [0x222B, 0x2233], [0x2A0B, 0x2A1C]
            ]
        }]
]);
//# sourceMappingURL=chtml.js.map