<?php
//+-----------------------------------------------------------
//| 人生是荒芜的旅行，冷暖自知，苦乐在心
//+-----------------------------------------------------------
//| Author:Janas <janmas@126.com>
//+-----------------------------------------------------------
//| 
//+-----------------------------------------------------------

namespace wechat;

use wechat\basic\help\Str;

class Main
{

	public function __call($instance,$args){
		self::make($instance, $args);
	}

	public function make($name,...$args){
		$namespace = Str::studly($name);
		$instance = "\wechat\{$name}\Business";
		return new $instance($args);
	}
}