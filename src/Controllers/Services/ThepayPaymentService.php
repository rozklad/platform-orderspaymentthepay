<?php namespace Sanatorium\Orderspaymentthepay\Controllers\Services;

use Log;
use Product;
use Cart;
use Sanatorium\Localization\Models\Language;

use Sanatorium\Orderspaymentthepay\Component\PayConfig;
use Sanatorium\Orderspaymentthepay\Component\TpPayment;
use Sanatorium\Orderspaymentthepay\Component\Helpers\TpDivMerchantHelper;

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

	public static function test()
    {
        ///Create an instance of thepay TpPayment class and give it our config
        $payment = new TpPayment(new PayConfig());
        ///Set price of product
        $payment->setValue(20);
        ///Set description of product
        $payment->setDescription('Testing product');
        ///We set Id of payed product as merchant data
        $payment->setMerchantData(1);

        ///Set up a return url
        $returnUrl = ((isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"])?"https":"http")."://".$_SERVER["HTTP_HOST"];
        $returnUrl .= substr($_SERVER["REQUEST_URI"], 0, strrpos($_SERVER["REQUEST_URI"], '/'));

        ///Give the return url to the payment instance
        $payment->setReturnUrl($returnUrl."/paymentDone.php");

        ///Create an instance of TpDivMerchantHelper and give it instance of TpPayment
        ///Later we will call render method of the helper instance and it will
        ///render component with thepay payment methods.
        $tpHelper = new TpDivMerchantHelper($payment);

        return $tpHelper->render();
    }

}