<?php

class Post extends ActiveRecord\Model
{
	public static $table_name = 'posts';
	public static $primary_key = 'post_id';
	
	
		 public function before_create()
	 {
		// $this->user = date('Y-m-d H:i:s', strtotime('now'));
	 }
 	
	 public function after_create()
	 {

	 }
 	
	
	public function display_post($PostID)
	{

	}
}