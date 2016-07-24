<?php namespace Sanatorium\Orderspaymentthepay\Component\DataApi\Requests;

use Sanatorium\Orderspaymentthepay\Component\DataApi\Requests\TpDataApiRequest;
use Sanatorium\Orderspaymentthepay\Component\DataApi\TpValueFormatter;

class TpDataApiGetPaymentStateRequest extends TpDataApiRequest {

	/**
	 * @var int|null
	 */
	protected $paymentId;

	/**
	 * @return int|null
	 */
	public function getPaymentId() {
		return $this->paymentId;
	}

	/**
	 * @param int|null $paymentId
	 */
	public function setPaymentId($paymentId = null) {
		$this->paymentId = TpValueFormatter::format('int', $paymentId);
	}

}
