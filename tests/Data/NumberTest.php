<?php
/**
 * Class NumberTest
 *
 * @created      24.11.2017
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2017 Smiley
 * @license      MIT
 */

namespace chillerlan\QRCodeTest\Data;

use chillerlan\QRCode\Data\{Number, QRCodeDataException};

/**
 * Tests the Number class
 */
final class NumberTest extends DatainterfaceTestAbstract{

	/** @internal */
	protected array $testdata  = [Number::class, '0123456789'];

	/** @internal */
	protected array $expected = [
		16, 40, 12, 86, 106, 105, 0, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		201, 141, 102, 116, 238, 162, 239, 230,
		222, 37, 79, 192, 42, 109, 188, 72,
		89, 63, 168, 151
	];

	/**
	 * Tests if an exception is thrown when an invalid character is encountered
	 */
	public function testGetCharCodeException():void{
		$this->expectException(QRCodeDataException::class);
		$this->expectExceptionMessage('illegal char: "#" [35]');

		$this->testdata = [Number::class, '#'];

		$this->setTestData();
	}

}
