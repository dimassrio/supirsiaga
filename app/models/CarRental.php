<?php

class CarRental extends \Eloquent {
	protected $fillable = [];

	public function detail(){
		$this->hasMany('CarRentalDetails');
	}
}