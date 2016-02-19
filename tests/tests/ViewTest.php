<?php
require __DIR__ . "/../../vendor/autoload.php";

/** @ViewTest.php
 * @cond 
 * @brief Unit tests for the Steampunked View class
 */
use Steampunked\Steampunked	as Steampunked;
use Steampunked\View as View;
class ViewTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {
		$steampunked = new Steampunked(1234);
		$view = new View($steampunked);
		$html = $view->present();
		$this->assertContains('pipe',$html);
		$this->assertContains('Discard',$html);
		$this->assertNotContains('invalid',$html);

	}
}

?>
