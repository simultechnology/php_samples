<?php
/**
 * Created by IntelliJ IDEA.
 * User: t_ishikawa
 * Date: 2017/01/31
 * Time: 10:46
 */

$arr = array('name' => 'taka');

$obj = new stdClass();
$obj->name = 'ishikawa';

var_dump($obj->name);
var_dump(is_array($obj));

var_dump($arr['name']);
var_dump(is_array($arr));

$arrObj = (object) $arr;
var_dump($arrObj->name);
var_dump(is_array($arrObj));

var_dump($arr);
var_dump($obj);
