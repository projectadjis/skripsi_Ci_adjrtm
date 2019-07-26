<?php 
  if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function currentRoute ($type) {
	$ci = &get_instance();
	if($type == 'class') return $ci->router->class;
	else return $ci->router->method;
}