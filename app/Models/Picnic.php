<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picnic extends \Eloquent {

	/****  MASS ASSIGNMENT ****/
	// define which attributes are mass assignable (for security)

	/**
	 * @var array fillable
	 * we only want these attributes able to be filled
	 */
	protected $fillable = array('name', 'taste_level');

	/***** DEFINE RELATIONSHIPS *****/

	/**
	 * bears
	 * define a many to many relationship
	 * also call the linking table
	 */
	public function bears() {
		return $this->belongsToMany('App\Models\Bear', 'bears_picnics', 'picnic_id', 'bear_id');
	}
}
