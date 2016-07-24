<?php namespace Sanatorium\Orderspaymentthepay\Component\DataApi\Requests;

use Sanatorium\Orderspaymentthepay\Component\DataApi\Requests\TpDataApiRequest;
use Sanatorium\Orderspaymentthepay\Component\DataApi\TpValueFormatter;

class TpDataApiGetPaymentMethodsRequest extends TpDataApiRequest {

	/**
	 * @var bool|null
	 */
	protected $onlyActive;

	/**
	 * @return bool|null
	 */
	public function getOnlyActive() {
		return $this->onlyActive;
	}

	/**
	 * @param bool|null $onlyActive
	 */
	public function setOnlyActive($onlyActive = null) {
		$this->onlyActive = TpValueFormatter::format('bool', $onlyActive);
	}

	/**
	 * @return array
	 */
	protected function configArray() {
		$configArray = parent::configArray();
		$configArray['accountId'] = $this->_config->accountId;
		return $configArray;
	}

}
