<?php

class StringFormater
{

    private $_string;
    
    /**
     * StringFormater constructor.
     */
    public function __construct()
    { }

    static function concat($string1, $string2)
    {
        $result = $string1 . $string2;
        return $result;
    }
    
    static function toCamelCase($string1, $string2)
    {
        $string1 = str_replace('-', ' ', $string1);
    	$string1 = str_replace('_', ' ', $string1);
    	$string1 = ucwords(strtolower($string1));
    	$string1 = str_replace(' ', '', $string1);
        
        $string2 = str_replace('-', ' ', $string2);
    	$string2 = str_replace('_', ' ', $string2);
    	$string2 = strtolower($string2);
    	$string2 = str_replace(' ', '', $string2);

    	return StringFormater::concat($string1, $string2);
    }
    
    static function prefix($string1, $string2, BOOL $toCamel = NULL)
    {
        if ($toCamel)
            return StringFormater::toCamelCase($string2, $string1);
        else
            return StringFormater::concat($string2, $string1);
    }
    
    static function suffix($string1, $string2, BOOL $toCamel = NULL)
    {
        if ($toCamel)
            return StringFormater::toCamelCase($string1, $string2);
        else
            return StringFormater::concat($string1, $string2);
    }
}