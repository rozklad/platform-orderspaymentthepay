<?php namespace Sanatorium\Orderspaymentthepay\Providers;

use Cartalyst\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class PaymentThepayServiceProvider extends ServiceProvider {

	/**
	 * {@inheritDoc}
	 */
	public function boot()
	{
		// Register the default payment service
		$this->app['sanatorium.orders.payment.services']->registerService(
			'\Sanatorium\Orderspaymentthepay\Controllers\Services\ThepayPaymentService'
		);
	}

	/**
	 * {@inheritDoc}
	 */
	public function register()
	{
		// Prepare resources
        $this->prepareResources();
	}

	/**
     * Prepare the package resources.
     *
     * @return void
     */
    protected function prepareResources()
    {
        $config = realpath(__DIR__.'/../../config/config.php');

        $this->mergeConfigFrom($config, 'sanatorium-orderspaymentthepay');

        $this->publishes([
            $config => config_path('sanatorium-orderspaymentthepay.php'),
        ], 'config');
    }

}
