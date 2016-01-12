<?php namespace Illuminate\Exception;

use Exception;

interface ExceptionDisplayerInterface {

	/**
	 * Display the given exception to the user.
	 *
	 * @param Exception|\Throwable $exception
	 * @return
	 */
	public function display(\Throwable $exception);

}
