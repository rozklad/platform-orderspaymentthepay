<?php namespace Sanatorium\Orderspaymentthepay\Component;

class TpCardPaymentResponse {
	protected $status;
	protected $errorDescription;

	function __construct(stdClass $data) {
		$this->status = $data->status;
		if(property_exists($data, 'errorDescription')) {
			$this->errorDescription = $data->errorDescription;
		}
	}

	public function getStatus() {
		return $this->status;
	}

	public function getErrorDescription() {
		return $this->errorDescription;
	}
}
