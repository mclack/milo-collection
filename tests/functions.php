<?php


require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessDisplayItems()
    {
//expect the result of the test
        $expected = '<div><img src="images/billy.jpg" /><p>Name: Billy</p><p>Age: 93</p><p>Instrument(s): Banjo</p><p>Most Notable Band: Billy\'s Bazookas</p><p>Technical Prowess: 1000000</p></div>';
//define the input for the test to get the expected result
        $input = [['name' => 'Billy',
            'age' => 93,
            'instrument' => 'Banjo',
            'band' => 'Billy\'s Bazookas',
            'technical-prowess' => 1000000,
            'image' => 'billy.jpg']];
//run the real function and pass in the input
        $case = displayItems($input);
//compare the expected result with the actual result
        $this->assertEquals($expected, $case);
        $this->assertIsString($case, 'error - result is not string');
    }

    public function testFailureDisplayItems()
    {
        $expected = 'Input error. Array doesn\'t exist';
        $input = [];
        $case = displayItems($input);
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayItems()
    {
        $this->expectException(TypeError::class);
        displayItems(1);
    }
}


?>