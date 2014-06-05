<?php 

class Guest extends Eloquent{
	protected $fillable = ['name','message'];
	public $timestamps = false;
}