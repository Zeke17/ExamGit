<?php

class StringFormater
{

    private $_string;
    
    /**
     * StringFormater constructor.
     */
    public function __construct(String $string)
    {
        $this->_string = $string;
    }

    public function concat(String $string1, String $string2)
    {
        $result = $string1 . $string2;
        return $result;
    }
    
    public function toCamelCase(String $string1, String $string2)
    {
        $string1 = str_replace('-', ' ', $string1);
    	$string1 = str_replace('_', ' ', $string1);
    	$string1 = ucwords(strtolower($string1));
    	$string1 = str_replace(' ', '', $string1);
        
        $string2 = str_replace('-', ' ', $string2);
    	$string2 = str_replace('_', ' ', $string2);
    	$string2 = ucwords(strtolower($string2));
    	$string2 = str_replace(' ', '', $string2);

    	return $string1 . $string2;
    }
    
    public function prefix(String $string1, String $string2, BOOL $toCamel = false)
    {
        if ($toCamel)
            return toCamelCase($string2, $string1);
        else
            return $string2 . $string1;
    }
    
    public function suffix(String $string1, String $string2, BOOL $toCamel = false)
    {
        if ($toCamel)
            return toCamelCase($string1, $string2);
        else
            return $string1 . $string2;
    }
}