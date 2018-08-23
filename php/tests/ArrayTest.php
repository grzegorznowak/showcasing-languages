<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ArrayTest extends TestCase
{
	public function testAccessing()
	{
		$data = [1,2,3];
		$this->assertEquals(
			$data[0],
			1
		);
	}

	public function testSubselect()
	{
		$data = [1, 2, 3, 4];
		$this->assertEquals(
			array_slice($data, 1, 2),
			[2, 3]
		);
	}

	public function testMultiply()
	{
		$data = [1, 2, 3, 4];
		$this->assertEquals(
			array_map(function($elem) {
				return $elem * 2;
			}, $data),
			[2, 4, 6, 8]
		);
		$this->assertEquals(
			array_reduce($data, function($accum, $elem) {
				if($elem % 2 == 0) {
					$accum[] = $elem * 2;
				}
				return $accum;
			}, []),
			[4, 8]
		);
	}

	public function testHeadTail() {
		$data = [1, 2, 3, 4];
		$head = $data[0];
		$tail = array_slice($data, 1);

		$this->assertEquals(
			$head,
			1
		);

		$this->assertEquals(
			$tail,
			[2, 3, 4]
		);
	}

	public function testJoinArray() {
		$data1 = [1, 2, 3, 4];
		$data2 = ['a', 'b', 'c', 'd'];
		$data3 = ['a', 'b', 'c'];

		$this->assertEquals(array_map(function($element1, $element2) {
			return [$element1, $element2];
		}, $data1, $data2), [[1, 'a'], [2, 'b'], [3, 'c'], [4, 'd']]);

		$a = array_filter(array_map(function ($element) use ($data1, $data3) {
			return isset($data3[array_search($element, $data1)]) ? [$element, $data3[array_search($element, $data1)]] : null;
		}, $data1));
		
		$this->assertEquals($a, [[1, 'a'], [2, 'b'], [3, 'c']]);

	}

}
