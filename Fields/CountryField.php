<?php
namespace Asgard\Form\Fields;

/**
 * Country field.
 */
class CountryField extends SelectField {
	/**
	 * {@inheritDoc}
	 */
	public function setParent($parent) {
		parent::setParent($parent);

		$this->options['choices'] = [
			'AF' => $this->getParent()->getTranslator()->trans('AFGHANISTAN'),
			'AX' => $this->getParent()->getTranslator()->trans('Ã…LAND ISLANDS'),
			'AL' => $this->getParent()->getTranslator()->trans('ALBANIA'),
			'DZ' => $this->getParent()->getTranslator()->trans('ALGERIA'),
			'AS' => $this->getParent()->getTranslator()->trans('AMERICAN SAMOA'),
			'AD' => $this->getParent()->getTranslator()->trans('ANDORRA'),
			'AO' => $this->getParent()->getTranslator()->trans('ANGOLA'),
			'AI' => $this->getParent()->getTranslator()->trans('ANGUILLA'),
			'AQ' => $this->getParent()->getTranslator()->trans('ANTARCTICA'),
			'AG' => $this->getParent()->getTranslator()->trans('ANTIGUA AND BARBUDA'),
			'AR' => $this->getParent()->getTranslator()->trans('ARGENTINA'),
			'AM' => $this->getParent()->getTranslator()->trans('ARMENIA'),
			'AW' => $this->getParent()->getTranslator()->trans('ARUBA'),
			'AU' => $this->getParent()->getTranslator()->trans('AUSTRALIA'),
			'AT' => $this->getParent()->getTranslator()->trans('AUSTRIA'),
			'AZ' => $this->getParent()->getTranslator()->trans('AZERBAIJAN'),
			'BS' => $this->getParent()->getTranslator()->trans('BAHAMAS'),
			'BH' => $this->getParent()->getTranslator()->trans('BAHRAIN'),
			'BD' => $this->getParent()->getTranslator()->trans('BANGLADESH'),
			'BB' => $this->getParent()->getTranslator()->trans('BARBADOS'),
			'BY' => $this->getParent()->getTranslator()->trans('BELARUS'),
			'BE' => $this->getParent()->getTranslator()->trans('BELGIUM'),
			'BZ' => $this->getParent()->getTranslator()->trans('BELIZE'),
			'BJ' => $this->getParent()->getTranslator()->trans('BENIN'),
			'BM' => $this->getParent()->getTranslator()->trans('BERMUDA'),
			'BT' => $this->getParent()->getTranslator()->trans('BHUTAN'),
			'BO' => $this->getParent()->getTranslator()->trans('BOLIVIA, PLURINATIONAL STATE OF'),
			'BQ' => $this->getParent()->getTranslator()->trans('BONAIRE, SINT EUSTATIUS AND SABA'),
			'BA' => $this->getParent()->getTranslator()->trans('BOSNIA AND HERZEGOVINA'),
			'BW' => $this->getParent()->getTranslator()->trans('BOTSWANA'),
			'BV' => $this->getParent()->getTranslator()->trans('BOUVET ISLAND'),
			'BR' => $this->getParent()->getTranslator()->trans('BRAZIL'),
			'IO' => $this->getParent()->getTranslator()->trans('BRITISH INDIAN OCEAN TERRITORY'),
			'BN' => $this->getParent()->getTranslator()->trans('BRUNEI DARUSSALAM'),
			'BG' => $this->getParent()->getTranslator()->trans('BULGARIA'),
			'BF' => $this->getParent()->getTranslator()->trans('BURKINA FASO'),
			'BI' => $this->getParent()->getTranslator()->trans('BURUNDI'),
			'KH' => $this->getParent()->getTranslator()->trans('CAMBODIA'),
			'CM' => $this->getParent()->getTranslator()->trans('CAMEROON'),
			'CA' => $this->getParent()->getTranslator()->trans('CANADA'),
			'CV' => $this->getParent()->getTranslator()->trans('CAPE VERDE'),
			'KY' => $this->getParent()->getTranslator()->trans('CAYMAN ISLANDS'),
			'CF' => $this->getParent()->getTranslator()->trans('CENTRAL AFRICAN REPUBLIC'),
			'TD' => $this->getParent()->getTranslator()->trans('CHAD'),
			'CL' => $this->getParent()->getTranslator()->trans('CHILE'),
			'CN' => $this->getParent()->getTranslator()->trans('CHINA'),
			'CX' => $this->getParent()->getTranslator()->trans('CHRISTMAS ISLAND'),
			'CC' => $this->getParent()->getTranslator()->trans('COCOS (KEELING) ISLANDS'),
			'CO' => $this->getParent()->getTranslator()->trans('COLOMBIA'),
			'KM' => $this->getParent()->getTranslator()->trans('COMOROS'),
			'CG' => $this->getParent()->getTranslator()->trans('CONGO'),
			'CD' => $this->getParent()->getTranslator()->trans('CONGO, THE DEMOCRATIC REPUBLIC OF THE'),
			'CK' => $this->getParent()->getTranslator()->trans('COOK ISLANDS'),
			'CR' => $this->getParent()->getTranslator()->trans('COSTA RICA'),
			'CI' => $this->getParent()->getTranslator()->trans('CÃ”TE D\'IVOIRE'),
			'HR' => $this->getParent()->getTranslator()->trans('CROATIA'),
			'CU' => $this->getParent()->getTranslator()->trans('CUBA'),
			'CW' => $this->getParent()->getTranslator()->trans('CURAÃ‡AO'),
			'CY' => $this->getParent()->getTranslator()->trans('CYPRUS'),
			'CZ' => $this->getParent()->getTranslator()->trans('CZECH REPUBLIC'),
			'DK' => $this->getParent()->getTranslator()->trans('DENMARK'),
			'DJ' => $this->getParent()->getTranslator()->trans('DJIBOUTI'),
			'DM' => $this->getParent()->getTranslator()->trans('DOMINICA'),
			'DO' => $this->getParent()->getTranslator()->trans('DOMINICAN REPUBLIC'),
			'EC' => $this->getParent()->getTranslator()->trans('ECUADOR'),
			'EG' => $this->getParent()->getTranslator()->trans('EGYPT'),
			'SV' => $this->getParent()->getTranslator()->trans('EL SALVADOR'),
			'GQ' => $this->getParent()->getTranslator()->trans('EQUATORIAL GUINEA'),
			'ER' => $this->getParent()->getTranslator()->trans('ERITREA'),
			'EE' => $this->getParent()->getTranslator()->trans('ESTONIA'),
			'ET' => $this->getParent()->getTranslator()->trans('ETHIOPIA'),
			'FK' => $this->getParent()->getTranslator()->trans('FALKLAND ISLANDS (MALVINAS)'),
			'FO' => $this->getParent()->getTranslator()->trans('FAROE ISLANDS'),
			'FJ' => $this->getParent()->getTranslator()->trans('FIJI'),
			'FI' => $this->getParent()->getTranslator()->trans('FINLAND'),
			'FR' => $this->getParent()->getTranslator()->trans('FRANCE'),
			'GF' => $this->getParent()->getTranslator()->trans('FRENCH GUIANA'),
			'PF' => $this->getParent()->getTranslator()->trans('FRENCH POLYNESIA'),
			'TF' => $this->getParent()->getTranslator()->trans('FRENCH SOUTHERN TERRITORIES'),
			'GA' => $this->getParent()->getTranslator()->trans('GABON'),
			'GM' => $this->getParent()->getTranslator()->trans('GAMBIA'),
			'GE' => $this->getParent()->getTranslator()->trans('GEORGIA'),
			'DE' => $this->getParent()->getTranslator()->trans('GERMANY'),
			'GH' => $this->getParent()->getTranslator()->trans('GHANA'),
			'GI' => $this->getParent()->getTranslator()->trans('GIBRALTAR'),
			'GR' => $this->getParent()->getTranslator()->trans('GREECE'),
			'GL' => $this->getParent()->getTranslator()->trans('GREENLAND'),
			'GD' => $this->getParent()->getTranslator()->trans('GRENADA'),
			'GP' => $this->getParent()->getTranslator()->trans('GUADELOUPE'),
			'GU' => $this->getParent()->getTranslator()->trans('GUAM'),
			'GT' => $this->getParent()->getTranslator()->trans('GUATEMALA'),
			'GG' => $this->getParent()->getTranslator()->trans('GUERNSEY'),
			'GN' => $this->getParent()->getTranslator()->trans('GUINEA'),
			'GW' => $this->getParent()->getTranslator()->trans('GUINEA-BISSAU'),
			'GY' => $this->getParent()->getTranslator()->trans('GUYANA'),
			'HT' => $this->getParent()->getTranslator()->trans('HAITI'),
			'HM' => $this->getParent()->getTranslator()->trans('HEARD ISLAND AND MCDONALD ISLANDS'),
			'VA' => $this->getParent()->getTranslator()->trans('HOLY SEE (VATICAN CITY STATE)'),
			'HN' => $this->getParent()->getTranslator()->trans('HONDURAS'),
			'HK' => $this->getParent()->getTranslator()->trans('HONG KONG'),
			'HU' => $this->getParent()->getTranslator()->trans('HUNGARY'),
			'IS' => $this->getParent()->getTranslator()->trans('ICELAND'),
			'IN' => $this->getParent()->getTranslator()->trans('INDIA'),
			'ID' => $this->getParent()->getTranslator()->trans('INDONESIA'),
			'IR' => $this->getParent()->getTranslator()->trans('IRAN, ISLAMIC REPUBLIC OF'),
			'IQ' => $this->getParent()->getTranslator()->trans('IRAQ'),
			'IE' => $this->getParent()->getTranslator()->trans('IRELAND'),
			'IM' => $this->getParent()->getTranslator()->trans('ISLE OF MAN'),
			'IL' => $this->getParent()->getTranslator()->trans('ISRAEL'),
			'IT' => $this->getParent()->getTranslator()->trans('ITALY'),
			'JM' => $this->getParent()->getTranslator()->trans('JAMAICA'),
			'JP' => $this->getParent()->getTranslator()->trans('JAPAN'),
			'JE' => $this->getParent()->getTranslator()->trans('JERSEY'),
			'JO' => $this->getParent()->getTranslator()->trans('JORDAN'),
			'KZ' => $this->getParent()->getTranslator()->trans('KAZAKHSTAN'),
			'KE' => $this->getParent()->getTranslator()->trans('KENYA'),
			'KI' => $this->getParent()->getTranslator()->trans('KIRIBATI'),
			'KP' => $this->getParent()->getTranslator()->trans('KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF'),
			'KR' => $this->getParent()->getTranslator()->trans('KOREA, REPUBLIC OF'),
			'KW' => $this->getParent()->getTranslator()->trans('KUWAIT'),
			'KG' => $this->getParent()->getTranslator()->trans('KYRGYZSTAN'),
			'LA' => $this->getParent()->getTranslator()->trans('LAO PEOPLE\'S DEMOCRATIC REPUBLIC'),
			'LV' => $this->getParent()->getTranslator()->trans('LATVIA'),
			'LB' => $this->getParent()->getTranslator()->trans('LEBANON'),
			'LS' => $this->getParent()->getTranslator()->trans('LESOTHO'),
			'LR' => $this->getParent()->getTranslator()->trans('LIBERIA'),
			'LY' => $this->getParent()->getTranslator()->trans('LIBYA'),
			'LI' => $this->getParent()->getTranslator()->trans('LIECHTENSTEIN'),
			'LT' => $this->getParent()->getTranslator()->trans('LITHUANIA'),
			'LU' => $this->getParent()->getTranslator()->trans('LUXEMBOURG'),
			'MO' => $this->getParent()->getTranslator()->trans('MACAO'),
			'MK' => $this->getParent()->getTranslator()->trans('MACEDONIA, THE getParent()ER YUGOSLAV REPUBLIC OF'),
			'MG' => $this->getParent()->getTranslator()->trans('MADAGASCAR'),
			'MW' => $this->getParent()->getTranslator()->trans('MALAWI'),
			'MY' => $this->getParent()->getTranslator()->trans('MALAYSIA'),
			'MV' => $this->getParent()->getTranslator()->trans('MALDIVES'),
			'ML' => $this->getParent()->getTranslator()->trans('MALI'),
			'MT' => $this->getParent()->getTranslator()->trans('MALTA'),
			'MH' => $this->getParent()->getTranslator()->trans('MARSHALL ISLANDS'),
			'MQ' => $this->getParent()->getTranslator()->trans('MARTINIQUE'),
			'MR' => $this->getParent()->getTranslator()->trans('MAURITANIA'),
			'MU' => $this->getParent()->getTranslator()->trans('MAURITIUS'),
			'YT' => $this->getParent()->getTranslator()->trans('MAYOTTE'),
			'MX' => $this->getParent()->getTranslator()->trans('MEXICO'),
			'FM' => $this->getParent()->getTranslator()->trans('MICRONESIA, FEDERATED STATES OF'),
			'MD' => $this->getParent()->getTranslator()->trans('MOLDOVA, REPUBLIC OF'),
			'MC' => $this->getParent()->getTranslator()->trans('MONACO'),
			'MN' => $this->getParent()->getTranslator()->trans('MONGOLIA'),
			'ME' => $this->getParent()->getTranslator()->trans('MONTENEGRO'),
			'MS' => $this->getParent()->getTranslator()->trans('MONTSERRAT'),
			'MA' => $this->getParent()->getTranslator()->trans('MOROCCO'),
			'MZ' => $this->getParent()->getTranslator()->trans('MOZAMBIQUE'),
			'MM' => $this->getParent()->getTranslator()->trans('MYANMAR'),
			'NA' => $this->getParent()->getTranslator()->trans('NAMIBIA'),
			'NR' => $this->getParent()->getTranslator()->trans('NAURU'),
			'NP' => $this->getParent()->getTranslator()->trans('NEPAL'),
			'NL' => $this->getParent()->getTranslator()->trans('NETHERLANDS'),
			'NC' => $this->getParent()->getTranslator()->trans('NEW CALEDONIA'),
			'NZ' => $this->getParent()->getTranslator()->trans('NEW ZEALAND'),
			'NI' => $this->getParent()->getTranslator()->trans('NICARAGUA'),
			'NE' => $this->getParent()->getTranslator()->trans('NIGER'),
			'NG' => $this->getParent()->getTranslator()->trans('NIGERIA'),
			'NU' => $this->getParent()->getTranslator()->trans('NIUE'),
			'NF' => $this->getParent()->getTranslator()->trans('NORFOLK ISLAND'),
			'MP' => $this->getParent()->getTranslator()->trans('NORTHERN MARIANA ISLANDS'),
			'NO' => $this->getParent()->getTranslator()->trans('NORWAY'),
			'OM' => $this->getParent()->getTranslator()->trans('OMAN'),
			'PK' => $this->getParent()->getTranslator()->trans('PAKISTAN'),
			'PW' => $this->getParent()->getTranslator()->trans('PALAU'),
			'PS' => $this->getParent()->getTranslator()->trans('PALESTINIAN TERRITORY, OCCUPIED'),
			'PA' => $this->getParent()->getTranslator()->trans('PANAMA'),
			'PG' => $this->getParent()->getTranslator()->trans('PAPUA NEW GUINEA'),
			'PY' => $this->getParent()->getTranslator()->trans('PARAGUAY'),
			'PE' => $this->getParent()->getTranslator()->trans('PERU'),
			'PH' => $this->getParent()->getTranslator()->trans('PHILIPPINES'),
			'PN' => $this->getParent()->getTranslator()->trans('PITCAIRN'),
			'PL' => $this->getParent()->getTranslator()->trans('POLAND'),
			'PT' => $this->getParent()->getTranslator()->trans('PORTUGAL'),
			'PR' => $this->getParent()->getTranslator()->trans('PUERTO RICO'),
			'QA' => $this->getParent()->getTranslator()->trans('QATAR'),
			'RE' => $this->getParent()->getTranslator()->trans('RÃ‰UNION'),
			'RO' => $this->getParent()->getTranslator()->trans('ROMANIA'),
			'RU' => $this->getParent()->getTranslator()->trans('RUSSIAN FEDERATION'),
			'RW' => $this->getParent()->getTranslator()->trans('RWANDA'),
			'BL' => $this->getParent()->getTranslator()->trans('SAINT BARTHÃ‰LEMY'),
			'SH' => $this->getParent()->getTranslator()->trans('SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA'),
			'KN' => $this->getParent()->getTranslator()->trans('SAINT KITTS AND NEVIS'),
			'LC' => $this->getParent()->getTranslator()->trans('SAINT LUCIA'),
			'MF' => $this->getParent()->getTranslator()->trans('SAINT MARTIN (FRENCH PART)'),
			'PM' => $this->getParent()->getTranslator()->trans('SAINT PIERRE AND MIQUELON'),
			'VC' => $this->getParent()->getTranslator()->trans('SAINT VINCENT AND THE GRENADINES'),
			'WS' => $this->getParent()->getTranslator()->trans('SAMOA'),
			'SM' => $this->getParent()->getTranslator()->trans('SAN MARINO'),
			'ST' => $this->getParent()->getTranslator()->trans('SAO TOME AND PRINCIPE'),
			'SA' => $this->getParent()->getTranslator()->trans('SAUDI ARABIA'),
			'SN' => $this->getParent()->getTranslator()->trans('SENEGAL'),
			'RS' => $this->getParent()->getTranslator()->trans('SERBIA'),
			'SC' => $this->getParent()->getTranslator()->trans('SEYCHELLES'),
			'SL' => $this->getParent()->getTranslator()->trans('SIERRA LEONE'),
			'SG' => $this->getParent()->getTranslator()->trans('SINGAPORE'),
			'SX' => $this->getParent()->getTranslator()->trans('SINT MAARTEN (DUTCH PART)'),
			'SK' => $this->getParent()->getTranslator()->trans('SLOVAKIA'),
			'SI' => $this->getParent()->getTranslator()->trans('SLOVENIA'),
			'SB' => $this->getParent()->getTranslator()->trans('SOLOMON ISLANDS'),
			'SO' => $this->getParent()->getTranslator()->trans('SOMALIA'),
			'ZA' => $this->getParent()->getTranslator()->trans('SOUTH AFRICA'),
			'GS' => $this->getParent()->getTranslator()->trans('SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS'),
			'SS' => $this->getParent()->getTranslator()->trans('SOUTH SUDAN'),
			'ES' => $this->getParent()->getTranslator()->trans('SPAIN'),
			'LK' => $this->getParent()->getTranslator()->trans('SRI LANKA'),
			'SD' => $this->getParent()->getTranslator()->trans('SUDAN'),
			'SR' => $this->getParent()->getTranslator()->trans('SURINAME'),
			'SJ' => $this->getParent()->getTranslator()->trans('SVALBARD AND JAN MAYEN'),
			'SZ' => $this->getParent()->getTranslator()->trans('SWAZILAND'),
			'SE' => $this->getParent()->getTranslator()->trans('SWEDEN'),
			'CH' => $this->getParent()->getTranslator()->trans('SWITZERLAND'),
			'SY' => $this->getParent()->getTranslator()->trans('SYRIAN ARAB REPUBLIC'),
			'TW' => $this->getParent()->getTranslator()->trans('TAIWAN, PROVINCE OF CHINA'),
			'TJ' => $this->getParent()->getTranslator()->trans('TAJIKISTAN'),
			'TZ' => $this->getParent()->getTranslator()->trans('TANZANIA, UNITED REPUBLIC OF'),
			'TH' => $this->getParent()->getTranslator()->trans('THAILAND'),
			'TL' => $this->getParent()->getTranslator()->trans('TIMOR-LESTE'),
			'TG' => $this->getParent()->getTranslator()->trans('TOGO'),
			'TK' => $this->getParent()->getTranslator()->trans('TOKELAU'),
			'TO' => $this->getParent()->getTranslator()->trans('TONGA'),
			'TT' => $this->getParent()->getTranslator()->trans('TRINIDAD AND TOBAGO'),
			'TN' => $this->getParent()->getTranslator()->trans('TUNISIA'),
			'TR' => $this->getParent()->getTranslator()->trans('TURKEY'),
			'TM' => $this->getParent()->getTranslator()->trans('TURKMENISTAN'),
			'TC' => $this->getParent()->getTranslator()->trans('TURKS AND CAICOS ISLANDS'),
			'TV' => $this->getParent()->getTranslator()->trans('TUVALU'),
			'UG' => $this->getParent()->getTranslator()->trans('UGANDA'),
			'UA' => $this->getParent()->getTranslator()->trans('UKRAINE'),
			'AE' => $this->getParent()->getTranslator()->trans('UNITED ARAB EMIRATES'),
			'GB' => $this->getParent()->getTranslator()->trans('UNITED KINGDOM'),
			'US' => $this->getParent()->getTranslator()->trans('UNITED STATES'),
			'UM' => $this->getParent()->getTranslator()->trans('UNITED STATES MINOR OUTLYING ISLANDS'),
			'UY' => $this->getParent()->getTranslator()->trans('URUGUAY'),
			'UZ' => $this->getParent()->getTranslator()->trans('UZBEKISTAN'),
			'VU' => $this->getParent()->getTranslator()->trans('VANUATU'),
			'VE' => $this->getParent()->getTranslator()->trans('VENEZUELA, BOLIVARIAN REPUBLIC OF'),
			'VN' => $this->getParent()->getTranslator()->trans('VIET NAM'),
			'VG' => $this->getParent()->getTranslator()->trans('VIRGIN ISLANDS, BRITISH'),
			'VI' => $this->getParent()->getTranslator()->trans('VIRGIN ISLANDS, U.S.'),
			'WF' => $this->getParent()->getTranslator()->trans('WALLIS AND FUTUNA'),
			'EH' => $this->getParent()->getTranslator()->trans('WESTERN SAHARA'),
			'YE' => $this->getParent()->getTranslator()->trans('YEMEN'),
			'ZM' => $this->getParent()->getTranslator()->trans('ZAMBIA'),
			'ZW' => $this->getParent()->getTranslator()->trans('ZIMBABWE')
		];
	}
}