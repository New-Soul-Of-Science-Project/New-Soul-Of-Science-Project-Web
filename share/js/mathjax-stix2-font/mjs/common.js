import { FontData } from '@mathjax/src/mjs/output/common/FontData.js';
export function CommonMathJaxStix2FontMixin(Base) {
    var _a;
    return _a = class extends Base {
        },
        _a.defaultVariants = [
            ...FontData.defaultVariants,
            ['-double-struck-italic', 'normal'],
            ['-size3', 'normal'],
            ['-size4', 'normal'],
            ['-size5', 'normal'],
            ['-size6', 'normal'],
            ['-size7', 'normal'],
            ['-size8', 'normal'],
            ['-size9', 'normal'],
            ['-size10', 'normal'],
            ['-size11', 'normal'],
            ['-size12', 'normal'],
            ['-extend', 'normal'],
            ['-up', 'normal'],
            ['-up-dsp', 'normal']
        ],
        _a.defaultCssFonts = Object.assign(Object.assign({}, FontData.defaultCssFonts), { '-double-struck-italic': ['serif', false, false], '-size3': ['serif', false, false], '-size4': ['serif', false, false], '-size5': ['serif', false, false], '-size6': ['serif', false, false], '-size7': ['serif', false, false], '-size8': ['serif', false, false], '-size9': ['serif', false, false], '-size10': ['serif', false, false], '-size11': ['serif', false, false], '-size12': ['serif', false, false], '-extend': ['serif', false, false], '-up': ['serif', false, false], '-up-dsp': ['serif', false, false] }),
        _a.defaultAccentMap = {
            0x005E: '\u02C6',
            0x007E: '\u02DC',
            0x0300: '\u02CB',
            0x0301: '\u02CA',
            0x0302: '\u02C6',
            0x0303: '\u02DC',
            0x0304: '\u02C9',
            0x0306: '\u02D8',
            0x0307: '\u02D9',
            0x0308: '\u00A8',
            0x030A: '\u02DA',
            0x030C: '\u02C7',
            0x2192: '\u20D7'
        },
        _a.defaultParams = Object.assign(Object.assign({}, FontData.defaultParams), { surd_height: 0.068, rule_thickness: 0.068, separation_factor: 1.5, x_height: .479 }),
        _a.defaultSizeVariants = [
            'normal', '-smallop', '-largeop', '-size3', '-size4', '-size5', '-size6', '-size7', '-size8', '-size9', '-size10', '-size11', '-size12'
        ],
        _a.defaultStretchVariants = [
            'normal', '-extend', '-size4', '-smallop', '-tex-variant'
        ],
        _a;
}
//# sourceMappingURL=common.js.map