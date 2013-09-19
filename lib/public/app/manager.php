<?php
/**
 * Copyright (c) 2013 Bart Visscher <bartv@thisnet.nl>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

namespace OCP\App;

/**
 * Provide a common interface to all Application functions
 */
interface Manager {
	/**
	 * @brief checks whether or not an app is enabled
	 * @param $app string appid
	 * @returns bool true when an app is enabled.
	 */
	public function isEnabled( $app );

	/**
	 * @brief Get information about the app
	 * @param $app string appid
	 *
	 * @return \OCP\App\Info|null
	 */
	public function getInfo( $app );
}