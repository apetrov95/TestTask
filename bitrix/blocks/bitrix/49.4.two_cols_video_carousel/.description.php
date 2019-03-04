<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => Loc::getMessage('LANDING_BLOCK_49_4_TWO_COLS_VIDEO_CAROUSEL--NAME'),
		'section' => array('video'),
		'version' => '18.5.0',
	),
	'cards' => array(
		'.landing-block-node-card' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_49_4_TWO_COLS_VIDEO_CAROUSEL--LANDINGBLOCKNODECARDVIDEO'),
		),
	),
	'nodes' => array(
		'.landing-block-node-card-video' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_49_4_TWO_COLS_VIDEO_CAROUSEL--LANDINGBLOCKNODECARDVIDEO'),
			'type' => 'embed',
		),
	),
	'style' => array(
		'.landing-block-node-card' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_49_4_TWO_COLS_VIDEO_CAROUSEL--LANDINGBLOCKNODECARDVIDEO'),
			'type' => 'animation',
		),
	),
	'assets' => array(
		'ext' => array('landing_inline_video', 'landing_carousel'),
	),
);