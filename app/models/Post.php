<?php

class Post extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required| unique:posts',
		'body' => 'required'
		);

	public function user()
	{

		return $this->belongsTo('User', 'user_id');
		
	}
}
