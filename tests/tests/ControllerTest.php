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
		$controller = new Controller($steampunked, array('new' => "New Game"));
		$this->assertTrue($controller->isReset());


		$steampunked = new Steampunked(1234);
		$controller = new Controller($steampunked, array('turn' => ""));
		$this->assertFalse($controller->isReset());
		$this->assertContains($controller->getPage(), "index.php");
	}

	public function test_forfeit(){
		$steampunked = new Steampunked(1234);
		$controller = new Controller($steampunked, array('quit' => ""));
		$this->assertContains($controller->getPage(), "lose.php");
		$controller->getPage();

	}

	public function test_rotate(){
		$steampunked = new Steampunked(1234);
		$controller = new Controller($steampunked, array());
		$this->assertContains($steampunked->getUserPipes(2)->getName(), "ninety-sw.png");
		$controller->rotate(2);
		$this->assertContains($steampunked->getUserPipes(2)->getName(), "ninety-es.png");

	}
}

?>
