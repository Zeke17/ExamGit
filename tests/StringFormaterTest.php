<?php

use PHPUnit\Framework\TestCase;


class StringFormaterTest extends TestCase
{   
    
    
    
    public function testConcat()
    {
        $str1 = 'Jesuishenry';
        $str2 = 'sansamis';
        
        $result = StringFormater::concat($str1, $str2);
        $this->assertSame('Jesuishenrysansamis', $result);
    }
    
    public function testToCamelCase()
    {
        $str1 = 'bonJourMon';
        $str2 = 'sieurGIT';
        $result = StringFormater::toCamelCase($str1, $str2, true);
        
        $this->assertSame('Bonjourmonsieurgit', $result);
    }
    
    public function testPrefix()
    {
        $str1 = 'abc';
        $str2 = 'def';
        $res = StringFormater::prefix($str1, $str2);
        
        $this->assertSame('defabc', $res);
    }
    
    public function testSuffix()
    {
        $str1 = 'abc';
        $str2 = 'def';
        $res = StringFormater::suffix($str1, $str2);
        
        $this->assertSame('abcdef', $res);
    }

}