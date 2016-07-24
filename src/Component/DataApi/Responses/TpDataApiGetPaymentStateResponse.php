<?php namespace Sanatorium\Orderspaymentthepay\Component\DataApi\Responses;

use Sanatorium\Orderspaymentthepay\Component\DataApi\TpValueFormatter;

class TpDataApiGetPaymentStateResponse extends TpDataApiResponse {

	/**
	 * @var int|null
	 */
	protected $state;

	/**
	 * @param array $response
	 * @return TpDataApiGetPaymentStateResponse
	 */
	public static function createFromResponse(array $response) {
		/** @var TpDataApiGetPaymentStateResponse $instance */
		$instance = parent::createFromResponse($response);
		$instance->setState($response['state']);
		return $instance;
	}

	/**
	 * @return int|null
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * @param int|null $state
	 */
	public function setState($state = null) {
		$this->state = TpValueFormatter::format('int', $state);
	}

}
