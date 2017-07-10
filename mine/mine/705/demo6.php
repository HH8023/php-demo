<?php 
/*
	函数的检测
	function_exists(字符串的函数名) 返回bool
*/
var_dump(function_exists('test'));//true;
var_dump(function_exists('var_dump'));//true
var_dump(function_exists('unset'));//false
var_dump(function_exists('isset'));//false
var_dump(function_exists('empty'));//false
var_dump(function_exists('function_exists'));//true
var_dump(function_exists('define'));//true;
var_dump(function_exists('defined'));//true
var_dump(function_exists('echo'));//false;
var_dump(function_exists('print'));//false;
var_dump(function_exists('global'));//false;
var_dump(function_exists('array'));//false;
echo '<hr>';
function test(){
	
}
//get_defined_functions();数组方式返回定义的函数，分为系统定义和自定义两种
echo '<pre>';
var_dump(get_defined_functions());