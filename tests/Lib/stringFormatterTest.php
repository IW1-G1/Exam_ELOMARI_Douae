<?php

namespace tests\Lib;

use Lib\stringFormatter;

class stringFormatterTest extends \PHPUnit_Framework_TestCase{

    public function testPrefix()
    {
        $myclass= new stringFormatter();
        $resultPrefixIfFalse = $myclass->prefix("douae", "elomari", false);
        $resultPrefixIfTrue = $myclass->prefix("douae", "elomari", true);
        $this->assertSame($resultPrefixIfFalse,'douaeelomari');
        $this->assertSame($resultPrefixIfTrue,'douaeElomari');

    }

    public function testSuffix()
    {
        $myclass= new stringFormatter();
        $resultSuffixIfFalse = $myclass->suffix("douae", "elomari", false);
        $resultSuffixIfTrue = $myclass->suffix("douae", "elomari", true);
        $this->assertSame($resultSuffixIfFalse,'elomaridouae');
        $this->assertSame($resultSuffixIfTrue,'elomariDouae');


    }

    public function testToCamelCase()
    {
        $myclass= new stringFormatter();
        $resultCamelCase = $myclass->toCamelCase("douae", "elomari");
        $this->assertSame($resultCamelCase,'douaeElomari');

    }

    public function testConcatString()
    {
        $myclass= new stringFormatter();
        $resultConcatString = $myclass->concatString("douae", "elomari");
        $this->assertSame($resultConcatString,'douaeelomari');
    }

}
