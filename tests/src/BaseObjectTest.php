<?php
/**
 * BaseObjectTest class.
 */

namespace Friendica\Test\src;

use Friendica\BaseObject;
use Friendica\Test\Util\AppMockTrait;
use Friendica\Test\Util\VFSTrait;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the BaseObject class.
 */
class BaseObjectTest extends TestCase
{
	use VFSTrait;
	use AppMockTrait;

	/**
	 * @var BaseObject
	 */
	private $baseObject;

	/**
	 * Test the getApp() function without App
	 * @expectedException Friendica\Network\HTTPException\InternalServerErrorException
	 * @runInSeparateProcess
	 * @preserveGlobalState disabled
	 */
	public function testGetAppFailed()
	{
		BaseObject::getApp();
	}
}
