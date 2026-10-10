import { ChtmlFontData, ChtmlCharOptions, ChtmlVariantData, ChtmlDelimiterData, DelimiterMap, CharMapMap } from '@mathjax/src/mjs/output/chtml/FontData.js';
import { StringMap } from '@mathjax/src/mjs/output/common/Wrapper.js';
declare const Base: import("@mathjax/src/mjs/output/common/FontData.js").FontDataClass<ChtmlCharOptions, ChtmlVariantData, ChtmlDelimiterData> & typeof ChtmlFontData;
export declare class MathJaxStix2Font extends Base {
    static NAME: string;
    static OPTIONS: {
        fontURL: string;
        dynamicPrefix: string;
    };
    protected static defaultCssFamilyPrefix: string;
    protected static defaultVariantLetters: StringMap;
    protected static defaultDelimiters: DelimiterMap<ChtmlDelimiterData>;
    protected static defaultChars: CharMapMap<ChtmlCharOptions>;
    protected static defaultStyles: {
        'mjx-container[jax="CHTML"] > mjx-math.STX-N[breakable] > *': {
            'font-family': string;
        };
        '.STX-N': {
            'font-family': string;
        };
        '.STX-B': {
            'font-family': string;
        };
        '.STX-I': {
            'font-family': string;
        };
        '.STX-BI': {
            'font-family': string;
        };
        '.STX-MI': {
            'font-family': string;
        };
        '.STX-DS': {
            'font-family': string;
        };
        '.STX-F': {
            'font-family': string;
        };
        '.STX-FB': {
            'font-family': string;
        };
        '.STX-S': {
            'font-family': string;
        };
        '.STX-SB': {
            'font-family': string;
        };
        '.STX-M': {
            'font-family': string;
        };
        '.STX-SSB': {
            'font-family': string;
        };
        '.STX-SSBI': {
            'font-family': string;
        };
        '.STX-SS': {
            'font-family': string;
        };
        '.STX-SSI': {
            'font-family': string;
        };
        '.STX-DSI': {
            'font-family': string;
        };
        '.STX-C': {
            'font-family': string;
        };
        '.STX-CB': {
            'font-family': string;
        };
        '.STX-OS': {
            'font-family': string;
        };
        '.STX-OB': {
            'font-family': string;
        };
        '.STX-SO': {
            'font-family': string;
        };
        '.STX-LO': {
            'font-family': string;
        };
        '.STX-S3': {
            'font-family': string;
        };
        '.STX-S4': {
            'font-family': string;
        };
        '.STX-S5': {
            'font-family': string;
        };
        '.STX-S6': {
            'font-family': string;
        };
        '.STX-S7': {
            'font-family': string;
        };
        '.STX-S8': {
            'font-family': string;
        };
        '.STX-S9': {
            'font-family': string;
        };
        '.STX-S10': {
            'font-family': string;
        };
        '.STX-S11': {
            'font-family': string;
        };
        '.STX-S12': {
            'font-family': string;
        };
        '.STX-V': {
            'font-family': string;
        };
        '.STX-E': {
            'font-family': string;
        };
        '.STX-U': {
            'font-family': string;
        };
        '.STX-UD': {
            'font-family': string;
        };
    };
    protected static defaultFonts: {
        '@font-face /* MJX-STX-ZERO */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-BRK */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-N */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-B */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-I */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-BI */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-MI */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-DS */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-F */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-FB */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-S */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-SB */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-M */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-SSB */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-SSBI */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-SS */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-SSI */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-DSI */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-C */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-CB */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-OS */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-OB */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-SO */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-LO */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-S3 */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-S4 */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-S5 */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-S6 */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-S7 */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-S8 */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-S9 */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-S10 */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-S11 */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-S12 */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-V */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-E */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-U */': {
            'font-family': string;
            src: string;
        };
        '@font-face /* MJX-STX-UD */': {
            'font-family': string;
            src: string;
        };
    };
    protected static dynamicFiles: import("@mathjax/src/mjs/output/common/FontData.js").DynamicFileList;
    cssFontPrefix: string;
}
export {};
