<?php
function __autoload ($CN) {var_dump ($CN);}
class st {
	public static function e () {echo ("EHLO\n");}
	public static function e2 () {call_user_func (array (self::class, 'e'));}
}
class stch extends st {
	public static function g () {call_user_func (array (parent::class, 'e'));}
}
st::e ();
st::e2 ();
stch::g ();
