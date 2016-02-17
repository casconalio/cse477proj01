<?php
require __DIR__ . "/../../vendor/autoload.php";

/** @file
 * @cond 
 * @brief Unit tests for the Steampunked Controller class
 */

use Steampunked\Steampunked as Steampunked;
use Steampunked\Controller as Controller;
class ControllerTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {
		$steampunked = new Steampunked(1234);
		$controller = new Controller($steampunked, array('pipe' => "2"));
		$this->assertFalse($controller->isReset());

		$steampunked = new Steampunked(1234);
		$controller = new Controller($steampunked, array('clear' => "New Game"));
		$this->assertTrue($controller->isReset());

	}
}

?>
