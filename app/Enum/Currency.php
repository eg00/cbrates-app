<?php

declare(strict_types=1);

namespace App\Enum;

/**
 * Enum of ISO 4217 codes by alphabetic code
 *
 * @link https://github.com/vijinho/ISO-Country-Data/blob/master/currencies.csv
 */
enum Currency: int
{
    case AED = 784;
    case AFN = 971;
    case ALL = 8;
    case AMD = 51;
    case ANG = 532;
    case AOA = 973;
    case ARS = 32;
    case AUD = 36;
    case AWG = 533;
    case AZN = 944;
    case BAM = 977;
    case BBD = 52;
    case BDT = 50;
    case BGN = 975;
    case BHD = 48;
    case BIF = 108;
    case BMD = 60;
    case BND = 96;
    case BOB = 68;
    case BOV = 984;
    case BRL = 986;
    case BSD = 44;
    case BTN = 64;
    case BWP = 72;
    case BYN = 933;
    case BYR = 974;
    case BZD = 84;
    case CAD = 124;
    case CDF = 976;
    case CHE = 947;
    case CHF = 756;
    case CHW = 948;
    case CLF = 990;
    case CLP = 152;
    case CNY = 156;
    case COP = 170;
    case COU = 970;
    case CRC = 188;
    case CUC = 931;
    case CUP = 192;
    case CVE = 132;
    case CZK = 203;
    case DJF = 262;
    case DKK = 208;
    case DOP = 214;
    case DZD = 12;
    case EGP = 818;
    case ERN = 232;
    case ETB = 230;
    case EUR = 978;
    case FJD = 242;
    case FKP = 238;
    case GBP = 826;
    case GEL = 981;
    case GHS = 936;
    case GIP = 292;
    case GMD = 270;
    case GNF = 324;
    case GTQ = 320;
    case GYD = 328;
    case HKD = 344;
    case HNL = 340;
    case HRK = 191;
    case HTG = 332;
    case HUF = 348;
    case IDR = 360;
    case ILS = 376;
    case INR = 356;
    case IQD = 368;
    case IRR = 364;
    case ISK = 352;
    case JMD = 388;
    case JOD = 400;
    case JPY = 392;
    case KES = 404;
    case KGS = 417;
    case KHR = 116;
    case KMF = 174;
    case KPW = 408;
    case KRW = 410;
    case KWD = 414;
    case KYD = 136;
    case KZT = 398;
    case LAK = 418;
    case LBP = 422;
    case LKR = 144;
    case LRD = 430;
    case LSL = 426;
    case LTL = 440;
    case LVL = 428;
    case LYD = 434;
    case MAD = 504;
    case MDL = 498;
    case MGA = 969;
    case MKD = 807;
    case MMK = 104;
    case MNT = 496;
    case MOP = 446;
    case MRO = 478;
    case MUR = 480;
    case MVR = 462;
    case MWK = 454;
    case MXN = 484;
    case MXV = 979;
    case MYR = 458;
    case MZN = 943;
    case NAD = 516;
    case NGN = 566;
    case NIO = 558;
    case NOK = 578;
    case NPR = 524;
    case NZD = 554;
    case OMR = 512;
    case PAB = 590;
    case PEN = 604;
    case PGK = 598;
    case PHP = 608;
    case PKR = 586;
    case PLN = 985;
    case PYG = 600;
    case QAR = 634;
    case RON = 946;
    case RSD = 941;
    case RUB = 643;
    case RWF = 646;
    case SAR = 682;
    case SBD = 90;
    case SCR = 690;
    case SDG = 938;
    case SEK = 752;
    case SGD = 702;
    case SHP = 654;
    case SLL = 694;
    case SOS = 706;
    case SRD = 968;
    case SSP = 728;
    case STD = 678;
    case SYP = 760;
    case SZL = 748;
    case THB = 764;
    case TJS = 972;
    case TMT = 934;
    case TND = 788;
    case TOP = 776;
    case TRY = 949;
    case TTD = 780;
    case TWD = 901;
    case TZS = 834;
    case UAH = 980;
    case UGX = 800;
    case USD = 840;
    case USN = 997;
    case USS = 998;
    case UYI = 940;
    case UYU = 858;
    case UZS = 860;
    case VEF = 937;
    case VND = 704;
    case VUV = 548;
    case WST = 882;
    case XAF = 950;
    case XAG = 961;
    case XAU = 959;
    case XBA = 955;
    case XBB = 956;
    case XBC = 957;
    case XBD = 958;
    case XCD = 951;
    case XDR = 960;
    case XOF = 952;
    case XPD = 964;
    case XPF = 953;
    case XPT = 962;
    case XTS = 963;
    case XXX = 999;
    case YER = 886;
    case ZAR = 710;
    case ZMW = 967;

    public static function fromNumericCode(int $value): self
    {
        return self::from($value);
    }

    public function getNumericCode(): int
    {
        return $this->value;
    }

    public function getAlphabeticCode(): string
    {
        return $this->name;
    }

    public function getDecimals(): ?int
    {
        return match ($this) {
            self::AED => 2,
            self::AFN => 2,
            self::ALL => 2,
            self::AMD => 2,
            self::ANG => 2,
            self::AOA => 2,
            self::ARS => 2,
            self::AUD => 2,
            self::AWG => 2,
            self::AZN => 2,
            self::BAM => 2,
            self::BBD => 2,
            self::BDT => 2,
            self::BGN => 2,
            self::BHD => 3,
            self::BIF => 0,
            self::BMD => 2,
            self::BND => 2,
            self::BOB => 2,
            self::BOV => 2,
            self::BRL => 2,
            self::BSD => 2,
            self::BTN => 2,
            self::BWP => 2,
            self::BYN => 2,
            self::BYR => 0,
            self::BZD => 2,
            self::CAD => 2,
            self::CDF => 2,
            self::CHE => 2,
            self::CHF => 2,
            self::CHW => 2,
            self::CLF => 0,
            self::CLP => 0,
            self::CNY => 2,
            self::COP => 2,
            self::COU => 2,
            self::CRC => 2,
            self::CUC => 2,
            self::CUP => 2,
            self::CVE => 0,
            self::CZK => 2,
            self::DJF => 0,
            self::DKK => 2,
            self::DOP => 2,
            self::DZD => 2,
            self::EGP => 2,
            self::ERN => 2,
            self::ETB => 2,
            self::EUR => 2,
            self::FJD => 2,
            self::FKP => 2,
            self::GBP => 2,
            self::GEL => 2,
            self::GHS => 2,
            self::GIP => 2,
            self::GMD => 2,
            self::GNF => 0,
            self::GTQ => 2,
            self::GYD => 2,
            self::HKD => 2,
            self::HNL => 2,
            self::HRK => 2,
            self::HTG => 2,
            self::HUF => 2,
            self::IDR => 2,
            self::ILS => 2,
            self::INR => 2,
            self::IQD => 3,
            self::IRR => 0,
            self::ISK => 0,
            self::JMD => 2,
            self::JOD => 3,
            self::JPY => 0,
            self::KES => 2,
            self::KGS => 2,
            self::KHR => 2,
            self::KMF => 0,
            self::KPW => 0,
            self::KRW => 0,
            self::KWD => 3,
            self::KYD => 2,
            self::KZT => 2,
            self::LAK => 0,
            self::LBP => 0,
            self::LKR => 2,
            self::LRD => 2,
            self::LSL => 2,
            self::LTL => 2,
            self::LVL => 2,
            self::LYD => 3,
            self::MAD => 2,
            self::MDL => 2,
            self::MGA => 2,
            self::MKD => 0,
            self::MMK => 0,
            self::MNT => 2,
            self::MOP => 2,
            self::MRO => 2,
            self::MUR => 2,
            self::MVR => 2,
            self::MWK => 2,
            self::MXN => 2,
            self::MXV => 2,
            self::MYR => 2,
            self::MZN => 2,
            self::NAD => 2,
            self::NGN => 2,
            self::NIO => 2,
            self::NOK => 2,
            self::NPR => 2,
            self::NZD => 2,
            self::OMR => 3,
            self::PAB => 2,
            self::PEN => 2,
            self::PGK => 2,
            self::PHP => 2,
            self::PKR => 2,
            self::PLN => 2,
            self::PYG => 0,
            self::QAR => 2,
            self::RON => 2,
            self::RSD => 2,
            self::RUB => 2,
            self::RWF => 0,
            self::SAR => 2,
            self::SBD => 2,
            self::SCR => 2,
            self::SDG => 2,
            self::SEK => 2,
            self::SGD => 2,
            self::SHP => 2,
            self::SLL => 0,
            self::SOS => 2,
            self::SRD => 2,
            self::SSP => 2,
            self::STD => 0,
            self::SYP => 2,
            self::SZL => 2,
            self::THB => 2,
            self::TJS => 2,
            self::TMT => 2,
            self::TND => 3,
            self::TOP => 2,
            self::TRY => 2,
            self::TTD => 2,
            self::TWD => 2,
            self::TZS => 2,
            self::UAH => 2,
            self::UGX => 2,
            self::USD => 2,
            self::USN => 2,
            self::USS => 2,
            self::UYI => 0,
            self::UYU => 2,
            self::UZS => 2,
            self::VEF => 2,
            self::VND => 0,
            self::VUV => 0,
            self::WST => 2,
            self::XAF => 0,
            self::XAG => null,
            self::XAU => null,
            self::XBA => null,
            self::XBB => null,
            self::XBC => null,
            self::XBD => null,
            self::XCD => 2,
            self::XDR => null,
            self::XOF => 0,
            self::XPD => null,
            self::XPF => 0,
            self::XPT => null,
            self::XTS => null,
            self::XXX => null,
            self::YER => 2,
            self::ZAR => 2,
            self::ZMW => 2,

        };
    }

    public function getName(): string
    {
        return match ($this) {
            self::AED => 'United Arab Emirates dirham',
            self::AFN => 'Afghan afghani',
            self::ALL => 'Albanian lek',
            self::AMD => 'Armenian dram',
            self::ANG => 'Netherlands Antillean guilder',
            self::AOA => 'Angolan kwanza',
            self::ARS => 'Argentine peso',
            self::AUD => 'Australia n dollar',
            self::AWG => 'Aruban florin',
            self::AZN => 'Azerbaijani manat',
            self::BAM => 'Bosnia and Herzegovina convertible mark',
            self::BBD => 'Barbados dollar',
            self::BDT => 'Bangladeshi taka',
            self::BGN => 'Bulgarian lev',
            self::BHD => 'Bahraini dinar',
            self::BIF => 'Burundian franc',
            self::BMD => 'Bermudian dollar (customarily known as Bermuda dollar)',
            self::BND => 'Brunei dollar',
            self::BOB => 'Boliviano',
            self::BOV => 'Bolivian Mvdol (funds code)',
            self::BRL => 'Brazilian real',
            self::BSD => 'Bahamian dollar',
            self::BTN => 'Bhutanese ngultrum',
            self::BWP => 'Botswana pula',
            self::BYN => 'Belarusian ruble',
            self::BYR => 'Belarusian ruble',
            self::BZD => 'Belize dollar',
            self::CAD => 'Canadian dollar',
            self::CDF => 'Congolese franc',
            self::CHE => 'WIR Euro (complementary currency)',
            self::CHF => 'Swiss franc',
            self::CHW => 'WIR Franc (complementary currency)',
            self::CLF => 'Unidad de Fomento (funds code)',
            self::CLP => 'Chilean peso',
            self::CNY => 'Chinese yuan',
            self::COP => 'Colombian peso',
            self::COU => 'Unidad de Valor Real',
            self::CRC => 'Costa Rican colon',
            self::CUC => 'Cuban convertible peso',
            self::CUP => 'Cuban peso',
            self::CVE => 'Cape Verde escudo',
            self::CZK => 'Czech koruna',
            self::DJF => 'Djiboutian franc',
            self::DKK => 'Danish krone',
            self::DOP => 'Dominican peso',
            self::DZD => 'Algerian dinar',
            self::EGP => 'Egyptian pound',
            self::ERN => 'Eritrean nakfa',
            self::ETB => 'Ethiopian birr',
            self::EUR => 'Euro',
            self::FJD => 'Fiji dollar',
            self::FKP => 'Falkland Islands pound',
            self::GBP => 'Pound sterling',
            self::GEL => 'Georgian lari',
            self::GHS => 'Ghanaian cedi',
            self::GIP => 'Gibraltar pound',
            self::GMD => 'Gambian dalasi',
            self::GNF => 'Guinean franc',
            self::GTQ => 'Guatemalan quetzal',
            self::GYD => 'Guyanese dollar',
            self::HKD => 'Hong Kong dollar',
            self::HNL => 'Honduran lempira',
            self::HRK => 'Croatian kuna',
            self::HTG => 'Haitian gourde',
            self::HUF => 'Hungarian forint',
            self::IDR => 'Indonesian rupiah',
            self::ILS => 'Israeli new shekel',
            self::INR => 'Indian rupee',
            self::IQD => 'Iraqi dinar',
            self::IRR => 'Iranian rial',
            self::ISK => 'Icelandic króna',
            self::JMD => 'Jamaican dollar',
            self::JOD => 'Jordanian dinar',
            self::JPY => 'Japanese yen',
            self::KES => 'Kenyan shilling',
            self::KGS => 'Kyrgyzstani som',
            self::KHR => 'Cambodian riel',
            self::KMF => 'Comoro franc',
            self::KPW => 'North Korean won',
            self::KRW => 'South Korean won',
            self::KWD => 'Kuwaiti dinar',
            self::KYD => 'Cayman Islands dollar',
            self::KZT => 'Kazakhstani tenge',
            self::LAK => 'Lao kip',
            self::LBP => 'Lebanese pound',
            self::LKR => 'Sri Lankan rupee',
            self::LRD => 'Liberian dollar',
            self::LSL => 'Lesotho loti',
            self::LTL => 'Lithuanian litas',
            self::LVL => 'Latvian lats',
            self::LYD => 'Libyan dinar',
            self::MAD => 'Moroccan dirham',
            self::MDL => 'Moldovan leu',
            self::MGA => 'Malagasy ariary',
            self::MKD => 'Macedonian denar',
            self::MMK => 'Myanma kyat',
            self::MNT => 'Mongolian tugrik',
            self::MOP => 'Macanese pataca',
            self::MRO => 'Mauritanian ouguiya',
            self::MUR => 'Mauritian rupee',
            self::MVR => 'Maldivian rufiyaa',
            self::MWK => 'Malawian kwacha',
            self::MXN => 'Mexican peso',
            self::MXV => 'Mexican Unidad de Inversion (UDI) (funds code)',
            self::MYR => 'Malaysian ringgit',
            self::MZN => 'Mozambican metical',
            self::NAD => 'Namibian dollar',
            self::NGN => 'Nigerian naira',
            self::NIO => 'Nicaraguan córdoba',
            self::NOK => 'Norwegian krone',
            self::NPR => 'Nepalese rupee',
            self::NZD => 'New Zealand dollar',
            self::OMR => 'Omani rial',
            self::PAB => 'Panamanian balboa',
            self::PEN => 'Peruvian nuevo sol',
            self::PGK => 'Papua New Guinean kina',
            self::PHP => 'Philippine peso',
            self::PKR => 'Pakistani rupee',
            self::PLN => 'Polish złoty',
            self::PYG => 'Paraguayan guaraní',
            self::QAR => 'Qatari riyal',
            self::RON => 'Romanian new leu',
            self::RSD => 'Serbian dinar',
            self::RUB => 'Russian rouble',
            self::RWF => 'Rwandan franc',
            self::SAR => 'Saudi riyal',
            self::SBD => 'Solomon Islands dollar',
            self::SCR => 'Seychelles rupee',
            self::SDG => 'Sudanese pound',
            self::SEK => 'Swedish krona/kronor',
            self::SGD => 'Singapore dollar',
            self::SHP => 'Saint Helena pound',
            self::SLL => 'Sierra Leonean leone',
            self::SOS => 'Somali shilling',
            self::SRD => 'Surinamese dollar',
            self::SSP => 'South Sudanese pound',
            self::STD => 'São Tomé and Príncipe dobra',
            self::SYP => 'Syrian pound',
            self::SZL => 'Swazi lilangeni',
            self::THB => 'Thai baht',
            self::TJS => 'Tajikistani somoni',
            self::TMT => 'Turkmenistani manat',
            self::TND => 'Tunisian dinar',
            self::TOP => 'Tongan paʻanga',
            self::TRY => 'Turkish lira',
            self::TTD => 'Trinidad and Tobago dollar',
            self::TWD => 'New Taiwan dollar',
            self::TZS => 'Tanzanian shilling',
            self::UAH => 'Ukrainian hryvnia',
            self::UGX => 'Ugandan shilling',
            self::USD => 'United States dollar',
            self::USN => 'United States dollar (next day) (funds code)',
            self::USS => 'United States dollar (same day) (funds code) (one source[who?] claims it is no longer used, but it is still on the ISO 4217-MA list)',
            self::UYI => 'Uruguay Peso en Unidades Indexadas (URUIURUI) (funds code)',
            self::UYU => 'Uruguayan peso',
            self::UZS => 'Uzbekistan som',
            self::VEF => 'Venezuelan bolívar fuerte',
            self::VND => 'Vietnamese dong',
            self::VUV => 'Vanuatu vatu',
            self::WST => 'Samoan tala',
            self::XAF => 'CFA franc BEAC',
            self::XAG => 'Silver (one troy ounce)',
            self::XAU => 'Gold (one troy ounce)',
            self::XBA => 'European Composite Unit (EURCO) (bond market unit)',
            self::XBB => 'European Monetary Unit (E.M.U.-6) (bond market unit)',
            self::XBC => 'European Unit of Account 9 (E.U.A.-9) (bond market unit)',
            self::XBD => 'European Unit of Account 17 (E.U.A.-17) (bond market unit)',
            self::XCD => 'East Caribbean dollar',
            self::XDR => 'Special drawing rights',
            self::XOF => 'CFA franc BCEAO',
            self::XPD => 'Palladium (one troy ounce)',
            self::XPF => 'CFP franc',
            self::XPT => 'Platinum (one troy ounce)',
            self::XTS => 'Code reserved for testing purposes',
            self::XXX => 'No currency',
            self::YER => 'Yemeni rial',
            self::ZAR => 'South African rand',
            self::ZMW => 'Zambian kwacha',
        };
    }
}
