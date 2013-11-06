<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_thrating_domain_model_stepname'] = array(
	'ctrl' => $TCA['tx_thrating_domain_model_stepname']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden, stepconf, stepname'
	),
	'columns' => array(
		'pid' => Array (  
			'exclude' => 1,
			'config' => Array (
				'type' => 'none',
			),
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check',
				'default' => 0,
			),
		),
		'stepconf' => Array (
			'label'   		=> 'LLL:EXT:th_rating/Resources/Private/Language/locallang.xlf:tca.model.stepname.stepconf',
			'config' 	=> Array (
				'type'		=> 'passthrough',
			),
		),
		'stepname' => Array (
			'label'  		=> 'LLL:EXT:th_rating/Resources/Private/Language/locallang.xlf:tca.model.stepname.stepname',
			'l10n_mode'		=> 'prefixLangTitle ',
			'l10n_display'	=> 'hideDiff ',
			'config' => Array (
				'type'		=> 'input',
				'size'		=> '15',
				'max'		=> '64',
				'eval'		=> 'trim',
			),
		),
		'uid' => array(
			'label'   => 'LLL:EXT:th_rating/Resources/Private/Language/locallang.xlf:tca.model.stepname.uid',
			'config' => array(
				'type' => 'passthrough',
			),
		),
		'sys_language_uid' => array (
			'exclude' => 1,
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array (
				'readOnly'				=> TRUE,
				'type'                	=> 'select',
				'foreign_table'       	=> 'sys_language',
				'foreign_table_where' 	=> 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude'     => 1,
			'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config'      => array (
				'type'  => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table'       => 'tx_thrating_domain_model_stepname',
				'foreign_table_where' => 'AND tx_thrating_domain_model_stepname.uid=###REC_FIELD_l18n_parent### AND tx_thrating_domain_model_stepname.sys_language_uid IN (-1,0)',
			),
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			),
		),
	),
	'types' => array(
		'0' => Array('showitem' => 'hidden,sys_language_uid,stepname'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
);
?>