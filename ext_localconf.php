<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Pfister.' . $_EXTKEY,
	'Gallery',
	array(
		'Referenz' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Referenz' => '',
		
	)
);
