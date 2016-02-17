Empty.php<?php
require __DIR__ . "/../../vendor/autoload.php";

/** @file
 * @cond 
 * @brief Unit tests for the Steampunked class
 */
use Steampunked\Steampunked	as Steampunked;
class SteampunkedTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1234;

	public function test_construct() {
		$steampunked = new Steampunked(self::SEED);
		$this->assertEquals(23, $steampunked->getPipe());
	}
}

/// @endcond
?>
