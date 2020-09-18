<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Language;

use Dogma\Enum\StringEnum;
use function array_search;
use function strtolower;
use function ucfirst;

class Script extends StringEnum
{

    public const ADLAM = 'Adlm';
    public const AFAKA = 'Afak';
    public const AHOM = 'Ahom';
    public const ANATOLIAN_HIEROGLYPHS = 'Hluw';
    public const ARABIC = 'Arab';
    public const ARABIC_NASTALIQ = 'Aran';
    public const ARMENIAN = 'Armn';
    public const AVESTAN = 'Avst';
    public const BALINESE = 'Bali';
    public const BAMUM = 'Bamu';
    public const BASSA_VAH = 'Bass';
    public const BATAK = 'Batk';
    public const BENGALI = 'Beng';
    public const BHAIKSUKI = 'Bhks';
    public const BLISSYMBOLS = 'Blis';
    public const BOOK_PAHLAVI = 'Phlv';
    public const BOPOMOFO = 'Bopo';
    public const BRAHMI = 'Brah';
    public const BRAILLE = 'Brai';
    public const BUGINESE = 'Bugi';
    public const BUHID = 'Buhd';
    public const CANADIAN_ABORIGINAL_SYLLABICS = 'Cans';
    public const CARIAN = 'Cari';
    public const CAUCASIAN_ALBANIAN = 'Aghb';
    public const CHAKMA = 'Cakm';
    public const CHAM = 'Cham';
    public const CHEROKEE = 'Cher';
    public const CIRTH = 'Cirt';
    public const COPTIC = 'Copt';
    public const CUNEIFORM = 'Xsux';
    public const CYPRIOT = 'Cprt';
    public const CYRILLIC = 'Cyrl';
    public const CYRILLIC_OLD_CHURCH_SLAVONIC = 'Cyrs';
    public const DESERET = 'Dsrt';
    public const DEVANAGARI = 'Deva';
    public const DUPLOYAN_SHORTHAND = 'Dupl';
    public const EGYPTIAN_DEMOTIC = 'Egyd';
    public const EGYPTIAN_HIERATIC = 'Egyh';
    public const EGYPTIAN_HIEROGLYPHS = 'Egyp';
    public const ELBASAN = 'Elba';
    public const ETHIOPIC = 'Ethi';
    public const GEORGIAN = 'Geor';
    public const GLAGOLITIC = 'Glag';
    public const GOTHIC = 'Goth';
    public const GRANTHA = 'Gran';
    public const GREEK = 'Grek';
    public const GUJARATI = 'Gujr';
    public const GURMUKHI = 'Guru';
    public const HAN = 'Hani';
    public const HANGUL = 'Hang';
    public const HANUNOO = 'Hano';
    public const HAN_SIMPLIFIED = 'Hans';
    public const HAN_TRADITIONAL = 'Hant';
    public const HAN_WITH_BOPOMOFO = 'Hanb';
    public const HATRAN = 'Hatr';
    public const HEBREW = 'Hebr';
    public const HIRAGANA = 'Hira';
    public const IMPERIAL_ARAMAIC = 'Armi';
    public const INDUS = 'Inds';
    public const INHERITED_SCRIPT = 'Zinh';
    public const INSCRIPTIONAL_PAHLAVI = 'Phli';
    public const INSCRIPTIONAL_PARTHIAN = 'Prti';
    public const JAMO = 'Jamo';
    public const JAPANESE = 'Jpan';
    public const JAPANESE_SYLLABARIES = 'Hrkt';
    public const JAVANESE = 'Java';
    public const JURCHEN = 'Jurc';
    public const KAITHI = 'Kthi';
    public const KANNADA = 'Knda';
    public const KATAKANA = 'Kana';
    public const KAYAH_LI = 'Kali';
    public const KHAROSHTHI = 'Khar';
    public const KHITAN_LARGE = 'Kitl';
    public const KHITAN_SMALL = 'Kits';
    public const KHMER = 'Khmr';
    public const KHOJKI = 'Khoj';
    public const KHUDAWADI = 'Sind';
    public const KHUTSURI = 'Geok';
    public const KLINGON = 'Piqd';
    public const KOREAN = 'Kore';
    public const KPELLE = 'Kpel';
    public const LAO = 'Laoo';
    public const LATIN = 'Latn';
    public const LATIN_FRAKTUR = 'Latf';
    public const LATIN_GAELIC = 'Latg';
    public const LEKE = 'Leke';
    public const LEPCHA = 'Lepc';
    public const LIMBU = 'Limb';
    public const LINEAR_A = 'Lina';
    public const LINEAR_B = 'Linb';
    public const LISU = 'Lisu';
    public const LOMA = 'Loma';
    public const LYCIAN = 'Lyci';
    public const LYDIAN = 'Lydi';
    public const MAHAJANI = 'Mahj';
    public const MALAYALAM = 'Mlym';
    public const MANDAIC = 'Mand';
    public const MANICHAEAN = 'Mani';
    public const MARCHEN = 'Marc';
    public const MATHEMATICAL_NOTATION = 'Zmth';
    public const MAYAN_HIEROGLYPHS = 'Maya';
    public const MEITEI_MAYEK = 'Mtei';
    public const MENDE_KIKAKUI = 'Mend';
    public const MEROITIC_CURSIVE = 'Merc';
    public const MEROITIC_HIEROGLYPHS = 'Mero';
    public const MIAO = 'Plrd';
    public const MODI = 'Modi';
    public const MONGOLIAN = 'Mong';
    public const MOON = 'Moon';
    public const MRO = 'Mroo';
    public const MULTANI = 'Mult';
    public const MYANMAR = 'Mymr';
    public const NABATAEAN = 'Nbat';
    public const NAKHI_GEBA = 'Nkgb';
    public const NEWA = 'Newa';
    public const NEW_TAI_LUE = 'Talu';
    public const NKO = 'Nkoo';
    public const NUSHU = 'Nshu';
    public const OGHAM = 'Ogam';
    public const OLD_HUNGARIAN = 'Hung';
    public const OLD_ITALIC = 'Ital';
    public const OLD_NORTH_ARABIAN = 'Narb';
    public const OLD_PERMIC = 'Perm';
    public const OLD_PERSIAN = 'Xpeo';
    public const OLD_SOUTH_ARABIAN = 'Sarb';
    public const OL_CHIKI = 'Olck';
    public const ORIYA = 'Orya';
    public const ORKHON_RUNIC = 'Orkh';
    public const OSAGE = 'Osge';
    public const OSMANYA = 'Osma';
    public const PAHAWH_HMONG = 'Hmng';
    public const PALMYRENE = 'Palm';
    public const PAU_CIN_HAU = 'Pauc';
    public const PHAGS_PA = 'Phag';
    public const PHOENICIAN = 'Phnx';
    public const PSALTER_PAHLAVI = 'Phlp';
    public const REJANG = 'Rjng';
    public const RONGORONGO = 'Roro';
    public const RUNIC = 'Runr';
    public const SAMARITAN = 'Samr';
    public const SARATI = 'Sara';
    public const SAURASHTRA = 'Saur';
    public const SHARADA = 'Shrd';
    public const SHAVIAN = 'Shaw';
    public const SIDDHAM = 'Sidd';
    public const SIGNWRITING = 'Sgnw';
    public const SINHALA = 'Sinh';
    public const SORA_SOMPENG = 'Sora';
    public const SUNDANESE = 'Sund';
    public const SYLOTI_NAGRI = 'Sylo';
    public const SYMBOLS = 'Zsym';
    public const SYMBOLS_EMOJI = 'Zsye';
    public const SYRIAC = 'Syrc';
    public const SYRIAC_EASTERN = 'Syrn';
    public const SYRIAC_ESTRANGELO = 'Syre';
    public const SYRIAC_WESTERN = 'Syrj';
    public const TAGALOG = 'Tglg';
    public const TAGBANWA = 'Tagb';
    public const TAI_LE = 'Tale';
    public const TAI_THAM = 'Lana';
    public const TAI_VIET = 'Tavt';
    public const TAKRI = 'Takr';
    public const TAMIL = 'Taml';
    public const TANGUT = 'Tang';
    public const TELUGU = 'Telu';
    public const TENGWAR = 'Teng';
    public const THAANA = 'Thaa';
    public const THAI = 'Thai';
    public const TIBETAN = 'Tibt';
    public const TIFINAGH = 'Tfng';
    public const TIRHUTA = 'Tirh';
    public const UGARITIC = 'Ugar';
    public const UNCODED_SCRIPT = 'Zzzz';
    public const UNDETERMINED_SCRIPT = 'Zyyy';
    public const UNWRITTEN_DOCUMENTS = 'Zxxx';
    public const VAI = 'Vaii';
    public const VISIBLE_SPEECH = 'Visp';
    public const WARANG_CITI = 'Wara';
    public const WOLEAI = 'Wole';
    public const YI = 'Yiii';

    /** @var string[] */
    private static $names = [
        self::ADLAM => 'Adlam',
        self::AFAKA => 'Afaka',
        self::AHOM => 'Ahom, Tai Ahom',
        self::ANATOLIAN_HIEROGLYPHS => 'Anatolian Hieroglyphs (Luwian Hieroglyphs, Hittite Hieroglyphs)',
        self::ARABIC => 'Arabic',
        self::ARABIC_NASTALIQ => 'Arabic (Nastaliq variant)',
        self::ARMENIAN => 'Armenian',
        self::AVESTAN => 'Avestan',
        self::BALINESE => 'Balinese',
        self::BAMUM => 'Bamum',
        self::BASSA_VAH => 'Bassa Vah',
        self::BATAK => 'Batak',
        self::BENGALI => 'Bengali',
        self::BHAIKSUKI => 'Bhaiksuki',
        self::BLISSYMBOLS => 'Blissymbols',
        self::BOOK_PAHLAVI => 'Book Pahlavi',
        self::BOPOMOFO => 'Bopomofo',
        self::BRAHMI => 'Brahmi',
        self::BRAILLE => 'Braille',
        self::BUGINESE => 'Buginese',
        self::BUHID => 'Buhid',
        self::CANADIAN_ABORIGINAL_SYLLABICS => 'Unified Canadian Aboriginal Syllabics',
        self::CARIAN => 'Carian',
        self::CAUCASIAN_ALBANIAN => 'Caucasian Albanian',
        self::CHAKMA => 'Chakma',
        self::CHAM => 'Cham',
        self::CHEROKEE => 'Cherokee',
        self::CIRTH => 'Cirth',
        self::COPTIC => 'Coptic',
        self::CUNEIFORM => 'Cuneiform, Sumero-Akkadian',
        self::CYPRIOT => 'Cypriot',
        self::CYRILLIC => 'Cyrillic',
        self::CYRILLIC_OLD_CHURCH_SLAVONIC => 'Cyrillic (Old Church Slavonic variant)',
        self::DESERET => 'Deseret (Mormon)',
        self::DEVANAGARI => 'Devanagari (Nagari)',
        self::DUPLOYAN_SHORTHAND => 'Duployan shorthand, Duployan stenography',
        self::EGYPTIAN_DEMOTIC => 'Egyptian demotic',
        self::EGYPTIAN_HIERATIC => 'Egyptian hieratic',
        self::EGYPTIAN_HIEROGLYPHS => 'Egyptian hieroglyphs',
        self::ELBASAN => 'Elbasan',
        self::ETHIOPIC => 'Ethiopic (Geʻez)',
        self::GEORGIAN => 'Georgian (Mkhedruli)',
        self::GLAGOLITIC => 'Glagolitic',
        self::GOTHIC => 'Gothic',
        self::GRANTHA => 'Grantha',
        self::GREEK => 'Greek',
        self::GUJARATI => 'Gujarati',
        self::GURMUKHI => 'Gurmukhi',
        self::HAN => 'Han (Hanzi, Kanji, Hanja)',
        self::HANGUL => 'Hangul (Hangŭl, Hangeul)',
        self::HANUNOO => 'Hanunoo (Hanunóo)',
        self::HAN_SIMPLIFIED => 'Han (Simplified variant)',
        self::HAN_TRADITIONAL => 'Han (Traditional variant)',
        self::HAN_WITH_BOPOMOFO => 'Han with Bopomofo (alias for Han + Bopomofo)',
        self::HATRAN => 'Hatran',
        self::HEBREW => 'Hebrew',
        self::HIRAGANA => 'Hiragana',
        self::IMPERIAL_ARAMAIC => 'Imperial Aramaic',
        self::INDUS => 'Indus (Harappan)',
        self::INHERITED_SCRIPT => 'Code for inherited script',
        self::INSCRIPTIONAL_PAHLAVI => 'Inscriptional Pahlavi',
        self::INSCRIPTIONAL_PARTHIAN => 'Inscriptional Parthian',
        self::JAMO => 'Jamo (alias for Jamo subset of Hangul)',
        self::JAPANESE => 'Japanese (alias for Han + Hiragana + Katakana)',
        self::JAPANESE_SYLLABARIES => 'Japanese syllabaries (alias for Hiragana + Katakana)',
        self::JAVANESE => 'Javanese',
        self::JURCHEN => 'Jurchen',
        self::KAITHI => 'Kaithi',
        self::KANNADA => 'Kannada',
        self::KATAKANA => 'Katakana',
        self::KAYAH_LI => 'Kayah Li',
        self::KHAROSHTHI => 'Kharoshthi',
        self::KHITAN_LARGE => 'Khitan large script',
        self::KHITAN_SMALL => 'Khitan small script',
        self::KHMER => 'Khmer',
        self::KHOJKI => 'Khojki',
        self::KHUDAWADI => 'Khudawadi, Sindhi',
        self::KHUTSURI => 'Khutsuri (Asomtavruli and Nuskhuri)',
        self::KLINGON => 'Klingon (KLI pIqaD)',
        self::KOREAN => 'Korean (alias for Hangul + Han)',
        self::KPELLE => 'Kpelle',
        self::LAO => 'Lao',
        self::LATIN => 'Latin',
        self::LATIN_FRAKTUR => 'Latin (Fraktur variant)',
        self::LATIN_GAELIC => 'Latin (Gaelic variant)',
        self::LEKE => 'Leke',
        self::LEPCHA => 'Lepcha (Róng)',
        self::LIMBU => 'Limbu',
        self::LINEAR_A => 'Linear A',
        self::LINEAR_B => 'Linear B',
        self::LISU => 'Lisu (Fraser)',
        self::LOMA => 'Loma',
        self::LYCIAN => 'Lycian',
        self::LYDIAN => 'Lydian',
        self::MAHAJANI => 'Mahajani',
        self::MALAYALAM => 'Malayalam',
        self::MANDAIC => 'Mandaic, Mandaean',
        self::MANICHAEAN => 'Manichaean',
        self::MARCHEN => 'Marchen',
        self::MATHEMATICAL_NOTATION => 'Mathematical notation',
        self::MAYAN_HIEROGLYPHS => 'Mayan hieroglyphs',
        self::MEITEI_MAYEK => 'Meitei Mayek (Meithei, Meetei)',
        self::MENDE_KIKAKUI => 'Mende Kikakui',
        self::MEROITIC_CURSIVE => 'Meroitic Cursive',
        self::MEROITIC_HIEROGLYPHS => 'Meroitic Hieroglyphs',
        self::MIAO => 'Miao (Pollard)',
        self::MODI => 'Modi, Moḍī',
        self::MONGOLIAN => 'Mongolian',
        self::MOON => 'Moon (Moon code, Moon script, Moon type)',
        self::MRO => 'Mro, Mru',
        self::MULTANI => 'Multani',
        self::MYANMAR => 'Myanmar (Burmese)',
        self::NABATAEAN => 'Nabataean',
        self::NAKHI_GEBA => 'Nakhi Geba (\'Na-\'Khi ²Ggŏ-¹baw, Naxi Geba)',
        self::NEWA => 'Newa, Newar, Newari, Nepāla lipi',
        self::NEW_TAI_LUE => 'New Tai Lue',
        self::NKO => 'N’Ko',
        self::NUSHU => 'Nüshu',
        self::OGHAM => 'Ogham',
        self::OLD_HUNGARIAN => 'Old Hungarian (Hungarian Runic)',
        self::OLD_ITALIC => 'Old Italic (Etruscan, Oscan, etc.)',
        self::OLD_NORTH_ARABIAN => 'Old North Arabian (Ancient North Arabian)',
        self::OLD_PERMIC => 'Old Permic',
        self::OLD_PERSIAN => 'Old Persian',
        self::OLD_SOUTH_ARABIAN => 'Old South Arabian',
        self::OL_CHIKI => 'Ol Chiki (Ol Cemet’, Ol, Santali)',
        self::ORIYA => 'Oriya',
        self::ORKHON_RUNIC => 'Old Turkic, Orkhon Runic',
        self::OSAGE => 'Osage',
        self::OSMANYA => 'Osmanya',
        self::PAHAWH_HMONG => 'Pahawh Hmong',
        self::PALMYRENE => 'Palmyrene',
        self::PAU_CIN_HAU => 'Pau Cin Hau',
        self::PHAGS_PA => 'Phags-pa',
        self::PHOENICIAN => 'Phoenician',
        self::PSALTER_PAHLAVI => 'Psalter Pahlavi',
        self::REJANG => 'Rejang (Redjang, Kaganga)',
        self::RONGORONGO => 'Rongorongo',
        self::RUNIC => 'Runic',
        self::SAMARITAN => 'Samaritan',
        self::SARATI => 'Sarati',
        self::SAURASHTRA => 'Saurashtra',
        self::SHARADA => 'Sharada, Śāradā',
        self::SHAVIAN => 'Shavian (Shaw)',
        self::SIDDHAM => 'Siddham, Siddhaṃ, Siddhamātṛkā',
        self::SIGNWRITING => 'SignWriting',
        self::SINHALA => 'Sinhala',
        self::SORA_SOMPENG => 'Sora Sompeng',
        self::SUNDANESE => 'Sundanese',
        self::SYLOTI_NAGRI => 'Syloti Nagri',
        self::SYMBOLS => 'Symbols',
        self::SYMBOLS_EMOJI => 'Symbols (Emoji variant)',
        self::SYRIAC => 'Syriac',
        self::SYRIAC_EASTERN => 'Syriac (Eastern variant)',
        self::SYRIAC_ESTRANGELO => 'Syriac (Estrangelo variant)',
        self::SYRIAC_WESTERN => 'Syriac (Western variant)',
        self::TAGALOG => 'Tagalog (Baybayin, Alibata)',
        self::TAGBANWA => 'Tagbanwa',
        self::TAI_LE => 'Tai Le',
        self::TAI_THAM => 'Tai Tham (Lanna)',
        self::TAI_VIET => 'Tai Viet',
        self::TAKRI => 'Takri, Ṭākrī, Ṭāṅkrī',
        self::TAMIL => 'Tamil',
        self::TANGUT => 'Tangut',
        self::TELUGU => 'Telugu',
        self::TENGWAR => 'Tengwar',
        self::THAANA => 'Thaana',
        self::THAI => 'Thai',
        self::TIBETAN => 'Tibetan',
        self::TIFINAGH => 'Tifinagh (Berber)',
        self::TIRHUTA => 'Tirhuta',
        self::UGARITIC => 'Ugaritic',
        self::UNCODED_SCRIPT => 'Code for uncoded script',
        self::UNDETERMINED_SCRIPT => 'Code for undetermined script',
        self::UNWRITTEN_DOCUMENTS => 'Code for unwritten documents',
        self::VAI => 'Vai',
        self::VISIBLE_SPEECH => 'Visible Speech',
        self::WARANG_CITI => 'Warang Citi (Varang Kshiti)',
        self::WOLEAI => 'Woleai',
        self::YI => 'Yi',
    ];

    /** @var string[] */
    private static $idents = [
        self::ADLAM => 'adlam',
        self::AFAKA => 'afaka',
        self::AHOM => 'ahom',
        self::ANATOLIAN_HIEROGLYPHS => 'anatolian-hieroglyphs',
        self::ARABIC => 'arabic',
        self::ARABIC_NASTALIQ => 'arabic-nastaliq',
        self::ARMENIAN => 'armenian',
        self::AVESTAN => 'avestan',
        self::BALINESE => 'balinese',
        self::BAMUM => 'bamum',
        self::BASSA_VAH => 'bassa-vah',
        self::BATAK => 'batak',
        self::BENGALI => 'bengali',
        self::BHAIKSUKI => 'bhaiksuki',
        self::BLISSYMBOLS => 'blissymbols',
        self::BOOK_PAHLAVI => 'book-pahlavi',
        self::BOPOMOFO => 'bopomofo',
        self::BRAHMI => 'brahmi',
        self::BRAILLE => 'braille',
        self::BUGINESE => 'buginese',
        self::BUHID => 'buhid',
        self::CANADIAN_ABORIGINAL_SYLLABICS => 'canadian-aboriginal-syllabics',
        self::CARIAN => 'carian',
        self::CAUCASIAN_ALBANIAN => 'caucasian-albanian',
        self::CHAKMA => 'chakma',
        self::CHAM => 'cham',
        self::CHEROKEE => 'cherokee',
        self::CIRTH => 'cirth',
        self::COPTIC => 'coptic',
        self::CUNEIFORM => 'cuneiform',
        self::CYPRIOT => 'cypriot',
        self::CYRILLIC => 'cyrillic',
        self::CYRILLIC_OLD_CHURCH_SLAVONIC => 'cyrillic-old-church-slavonic',
        self::DESERET => 'deseret',
        self::DEVANAGARI => 'devanagari',
        self::DUPLOYAN_SHORTHAND => 'duployan-shorthand',
        self::EGYPTIAN_DEMOTIC => 'egyptian-demotic',
        self::EGYPTIAN_HIERATIC => 'egyptian-hieratic',
        self::EGYPTIAN_HIEROGLYPHS => 'egyptian-hieroglyphs',
        self::ELBASAN => 'elbasan',
        self::ETHIOPIC => 'ethiopic',
        self::GEORGIAN => 'georgian',
        self::GLAGOLITIC => 'glagolitic',
        self::GOTHIC => 'gothic',
        self::GRANTHA => 'grantha',
        self::GREEK => 'greek',
        self::GUJARATI => 'gujarati',
        self::GURMUKHI => 'gurmukhi',
        self::HAN => 'han',
        self::HANGUL => 'hangul',
        self::HANUNOO => 'hanunoo',
        self::HAN_SIMPLIFIED => 'han-simplified',
        self::HAN_TRADITIONAL => 'han-traditional',
        self::HAN_WITH_BOPOMOFO => 'han-with-bopomofo',
        self::HATRAN => 'hatran',
        self::HEBREW => 'hebrew',
        self::HIRAGANA => 'hiragana',
        self::IMPERIAL_ARAMAIC => 'imperial-aramaic',
        self::INDUS => 'indus',
        self::INHERITED_SCRIPT => 'inherited-script',
        self::INSCRIPTIONAL_PAHLAVI => 'inscriptional-pahlavi',
        self::INSCRIPTIONAL_PARTHIAN => 'inscriptional-parthian',
        self::JAMO => 'jamo',
        self::JAPANESE => 'japanese',
        self::JAPANESE_SYLLABARIES => 'japanese-syllabaries',
        self::JAVANESE => 'javanese',
        self::JURCHEN => 'jurchen',
        self::KAITHI => 'kaithi',
        self::KANNADA => 'kannada',
        self::KATAKANA => 'katakana',
        self::KAYAH_LI => 'kayah-li',
        self::KHAROSHTHI => 'kharoshthi',
        self::KHITAN_LARGE => 'khitan-large',
        self::KHITAN_SMALL => 'khitan-small',
        self::KHMER => 'khmer',
        self::KHOJKI => 'khojki',
        self::KHUDAWADI => 'khudawadi',
        self::KHUTSURI => 'khutsuri',
        self::KLINGON => 'klingon',
        self::KOREAN => 'korean',
        self::KPELLE => 'kpelle',
        self::LAO => 'lao',
        self::LATIN => 'latin',
        self::LATIN_FRAKTUR => 'latin-fraktur',
        self::LATIN_GAELIC => 'latin-gaelic',
        self::LEKE => 'leke',
        self::LEPCHA => 'lepcha',
        self::LIMBU => 'limbu',
        self::LINEAR_A => 'linear-a',
        self::LINEAR_B => 'linear-b',
        self::LISU => 'lisu',
        self::LOMA => 'loma',
        self::LYCIAN => 'lycian',
        self::LYDIAN => 'lydian',
        self::MAHAJANI => 'mahajani',
        self::MALAYALAM => 'malayalam',
        self::MANDAIC => 'mandaic',
        self::MANICHAEAN => 'manichaean',
        self::MARCHEN => 'marchen',
        self::MATHEMATICAL_NOTATION => 'mathematical-notation',
        self::MAYAN_HIEROGLYPHS => 'mayan-hieroglyphs',
        self::MEITEI_MAYEK => 'meitei-mayek',
        self::MENDE_KIKAKUI => 'mende-kikakui',
        self::MEROITIC_CURSIVE => 'meroitic-cursive',
        self::MEROITIC_HIEROGLYPHS => 'meroitic-hieroglyphs',
        self::MIAO => 'miao',
        self::MODI => 'modi',
        self::MONGOLIAN => 'mongolian',
        self::MOON => 'moon',
        self::MRO => 'mro',
        self::MULTANI => 'multani',
        self::MYANMAR => 'myanmar',
        self::NABATAEAN => 'nabataean',
        self::NAKHI_GEBA => 'nakhi-geba',
        self::NEWA => 'newa',
        self::NEW_TAI_LUE => 'new-tai-lue',
        self::NKO => 'nko',
        self::NUSHU => 'nushu',
        self::OGHAM => 'ogham',
        self::OLD_HUNGARIAN => 'old-hungarian',
        self::OLD_ITALIC => 'old-italic',
        self::OLD_NORTH_ARABIAN => 'old-north-arabian',
        self::OLD_PERMIC => 'old-permic',
        self::OLD_PERSIAN => 'old-persian',
        self::OLD_SOUTH_ARABIAN => 'old-south-arabian',
        self::OL_CHIKI => 'ol-chiki',
        self::ORIYA => 'oriya',
        self::ORKHON_RUNIC => 'orkhon-runic',
        self::OSAGE => 'osage',
        self::OSMANYA => 'osmanya',
        self::PAHAWH_HMONG => 'pahawh-hmong',
        self::PALMYRENE => 'palmyrene',
        self::PAU_CIN_HAU => 'pau-cin-hau',
        self::PHAGS_PA => 'phags-pa',
        self::PHOENICIAN => 'phoenician',
        self::PSALTER_PAHLAVI => 'psalter-pahlavi',
        self::REJANG => 'rejang',
        self::RONGORONGO => 'rongorongo',
        self::RUNIC => 'runic',
        self::SAMARITAN => 'samaritan',
        self::SARATI => 'sarati',
        self::SAURASHTRA => 'saurashtra',
        self::SHARADA => 'sharada',
        self::SHAVIAN => 'shavian',
        self::SIDDHAM => 'siddham',
        self::SIGNWRITING => 'signwriting',
        self::SINHALA => 'sinhala',
        self::SORA_SOMPENG => 'sora-sompeng',
        self::SUNDANESE => 'sundanese',
        self::SYLOTI_NAGRI => 'syloti-nagri',
        self::SYMBOLS => 'symbols',
        self::SYMBOLS_EMOJI => 'symbols-emoji',
        self::SYRIAC => 'syriac',
        self::SYRIAC_EASTERN => 'syriac-eastern',
        self::SYRIAC_ESTRANGELO => 'syriac-estrangelo',
        self::SYRIAC_WESTERN => 'syriac-western',
        self::TAGALOG => 'tagalog',
        self::TAGBANWA => 'tagbanwa',
        self::TAI_LE => 'tai-le',
        self::TAI_THAM => 'tai-tham',
        self::TAI_VIET => 'tai-viet',
        self::TAKRI => 'takri',
        self::TAMIL => 'tamil',
        self::TANGUT => 'tangut',
        self::TELUGU => 'telugu',
        self::TENGWAR => 'tengwar',
        self::THAANA => 'thaana',
        self::THAI => 'thai',
        self::TIBETAN => 'tibetan',
        self::TIFINAGH => 'tifinagh',
        self::TIRHUTA => 'tirhuta',
        self::UGARITIC => 'ugaritic',
        self::UNCODED_SCRIPT => 'uncoded-script',
        self::UNDETERMINED_SCRIPT => 'undetermined-script',
        self::UNWRITTEN_DOCUMENTS => 'unwritten-documents',
        self::VAI => 'vai',
        self::VISIBLE_SPEECH => 'visible-speech',
        self::WARANG_CITI => 'warang-citi',
        self::WOLEAI => 'woleai',
        self::YI => 'yi',
    ];

    public function getName(): string
    {
        return self::$names[$this->getValue()];
    }

    public function getIdent(): string
    {
        return self::$idents[$this->getValue()];
    }

    public static function getByIdent(string $ident): self
    {
        return self::get(array_search($ident, self::$idents));
    }

    public static function validateValue(string &$value): bool
    {
        $value = ucfirst(strtolower($value));

        return parent::validateValue($value);
    }

}
