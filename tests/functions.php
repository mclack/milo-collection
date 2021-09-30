<?php


require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessDisplayItems()
    {
//expect the result of the test
        $expected = '<div class="dbItems"><img src="images/billy.jpg" /><p>Name: Billy</p><p>Age: 93</p><p>Instrument(s): Banjo</p><p>Most Notable Band: Billy\'s Bazookas</p><p>Technical Prowess: 1000000</p></div>';
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
        $expected = 'Input error. Array doesn\'t exist.';
        $input = [];
        $case = displayItems($input);
        $this->assertEquals($expected, $case);
    }
    public function testMalformedDisplayItems()
    {
        $this->expectException(TypeError::class);
        displayItems(1);
    }

    public function testSuccessCleanseData()
    {
        $expected = [0 => 'Milo', 1 => '23', 2 => 'Guitar', 3 => '&#62;', 4 => '6'];
        $input = ['name' => 'Milo',
            'age' => '23',
            'instrument' => 'Guitar',
            'band' => '>',
            'technical-prowess' => '6'];
        $case = cleanseData($input);
        $this->assertEquals($expected, $case);
    }
    public function testFailureCleanseData()
    {
        $expected = 'Input error. Array doesn\'t exist.';
        $input = [];
        $case = cleanseData($input);
        $this->assertEquals($expected, $case);
    }
    public function testMalformedCleanseData()
    {
        $this->expectException(TypeError::class);
        cleanseData(1);
    }

}


?>