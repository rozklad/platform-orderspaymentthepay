<?php namespace Sanatorium\Orderspaymentthepay\Component\Exceptions;

use Exception;

/**
 * Base class for all exceptions generated by ThePay component.
 */
class TpException extends Exception {
	public $defaultMessage = "Generic ThePay exception";

	function __construct($message = NULL) {
		if (is_null($message)) {
			parent::__construct($this->defaultMessage);
		} else {
			parent::__construct($message);
		}
	}
}
