<?php
/**
 * Class SampleTest
 *
 * @package Unit_Tested_Plugin
 */

namespace UnitTestDemo;

use phpmock\phpunit\PHPMock;

class DemoTest extends \PHPUnit_Framework_TestCase
{
	use PHPMock;

	public function test_demo_get_option()
	{
		$this->assertEquals('bar', demo_get_option('foo'));
	}
}
