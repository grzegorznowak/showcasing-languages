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

}
