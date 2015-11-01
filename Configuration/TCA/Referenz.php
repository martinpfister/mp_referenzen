<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_mpreferenzen_domain_model_referenz'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_mpreferenzen_domain_model_referenz']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, titel, teaser, beschreibung, baujahr, vorschaubild, hauptbilder, kategorie',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, titel, teaser, beschreibung;;;richtext:rte_transform[mode=ts_links], baujahr, vorschaubild, hauptbilder, kategorie, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_mpreferenzen_domain_model_referenz',
				'foreign_table_where' => 'AND tx_mpreferenzen_domain_model_referenz.pid=###CURRENT_PID### AND tx_mpreferenzen_domain_model_referenz.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'titel' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:mp_referenzen/Resources/Private/Language/locallang_db.xlf:tx_mpreferenzen_domain_model_referenz.titel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'teaser' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:mp_referenzen/Resources/Private/Language/locallang_db.xlf:tx_mpreferenzen_domain_model_referenz.teaser',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'beschreibung' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:mp_referenzen/Resources/Private/Language/locallang_db.xlf:tx_mpreferenzen_domain_model_referenz.beschreibung',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'baujahr' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:mp_referenzen/Resources/Private/Language/locallang_db.xlf:tx_mpreferenzen_domain_model_referenz.baujahr',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'vorschaubild' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:mp_referenzen/Resources/Private/Language/locallang_db.xlf:tx_mpreferenzen_domain_model_referenz.vorschaubild',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'vorschaubild',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'hauptbilder' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:mp_referenzen/Resources/Private/Language/locallang_db.xlf:tx_mpreferenzen_domain_model_referenz.hauptbilder',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'hauptbilder',
				array('maxitems' => 10),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'kategorie' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:mp_referenzen/Resources/Private/Language/locallang_db.xlf:tx_mpreferenzen_domain_model_referenz.kategorie',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_mpreferenzen_domain_model_kategorie',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		
	),
);
