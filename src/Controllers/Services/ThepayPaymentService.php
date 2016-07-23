<?php namespace Sanatorium\Orderspaymentthepay\Controllers\Services;

use Log;
use Product;
use Cart;
use Sanatorium\Localization\Models\Language;

class ThepayPaymentService {

	public $name;
	public $description;

	protected $client;

	public function __construct()
	{
		$this->name = trans('sanatorium/orderspaymentthepay::payment_services.thepay.name');
		$this->description = trans('sanatorium/orderspaymentthepay::payment_services.thepay.description');
	}

	public function process($order)
	{	

	}

	public function reverse($order, $args = [])
	{

	}

	public function refund($order, $args = [])
	{

	}

	public function close($order, $args = [])
	{

	}

	public function status($order, $args = [])
	{

	}

	public function isPaymentOpened($order)
	{

	}

	public function status_human_readable($order, $args = [])
	{

	}

	public function isSuccess($order)
	{

	}

}