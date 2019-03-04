<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Error;
use Bitrix\Main\ErrorCollection;

final class CUITooltipComponent extends \CBitrixComponent
{
	/** @var  ErrorCollection */
	protected $errorCollection;

	private $userId = 0;
	private $errors = [];

	private function init()
	{
/*
		if(!CModule::IncludeModule('crm'))
		{
			$this->errors[] = Loc::getMessage('CRM_MODULE_NOT_INSTALLED');
			return false;
		}
*/

/*
		$this->userId = CCrmSecurityHelper::GetCurrentUserID();
*/
		CJSCore::Init(array('date', 'popup', 'ajax', 'tooltip'));
		return true;
	}

	/**
	* Getting array of errors.
	* @return Error[]
	*/
	public function getErrors()
	{
		return $this->errorCollection->toArray();
	}

	public function executeComponent()
	{
	}
}
?>