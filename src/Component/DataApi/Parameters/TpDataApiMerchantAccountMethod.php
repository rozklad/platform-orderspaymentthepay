<?php namespace Sanatorium\Orderspaymentthepay\Component\Parameters;

use Sanatorium\Orderspaymentthepay\Component\DataApi\TpDataApiObject;
use Sanatorium\Orderspaymentthepay\Component\DataApi\TpValueFormatter;

class TpDataApiMerchantAccountMethod extends TpDataApiObject {

	/**
	 * @var int|null
	 */
	protected $id;

	/**
	 * @var string|null
	 */
	protected $name;

	/**
	 * @var bool|null
	 */
	protected $active;

	/**
	 * @return int|null
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param int|null $id
	 */
	public function setId($id = null) {
		$this->id = TpValueFormatter::format('int', $id);
	}

	/**
	 * @return string|null
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string|null $name
	 */
	public function setName($name = null) {
		$this->name = TpValueFormatter::format('string', $name);
	}

	/**
	 * @return bool
	 */
	public function getActive() {
		return $this->active;
	}

	/**
	 * @param bool|null $active
	 */
	public function setActive($active = null) {
		$this->active = TpValueFormatter::format('bool', $active);
	}

}
