<?php

class User extends ActiveRecord\Model
{
	public static $table_name = 'users';
	public static $primary_key = 'user_id';
	
	
	 public function before_create()
	{
		//$this->user = date('Y-m-d H:i:s', strtotime('now'));
	}
	
	public function after_create()
	{
	
	
	}
	
	


}