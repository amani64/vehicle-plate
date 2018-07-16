<?php

namespace Amani\VehiclePlate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Larabookir\Gateway\GatewayResolver
 */
class VehiclePlate extends Facade
{
	/**
	 * The name of the binding in the IoC container.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'plate';
	}
}
