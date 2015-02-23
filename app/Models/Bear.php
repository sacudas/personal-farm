<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Bear extends \Eloquent {

	/******* MASS ASSIGNMENT *******/
	// define which attributes are mass assignable (for security)
	// we only whant these 3 attribute able to be filled
	protected $fillable = array('name', 'type', 'danger_level');

	/******* DEFINE RELATIONSHIPS *******/

	/**
	 * fish
	 *
	 * each bear has one fish to eat
	 */
	public function fish(){
		return $this->hasOne('Fish'); // this matches the Eloquent model
	}

	/**
	 * tress
	 *
	 * each bear climbs many trees
	 */
	public function trees() {
		return $this->hasMany('App\Models\Tree');
	}

	/**
	 * picnics
	 *
	 * each bear BELONGS to many picnic
	 * define our pivot table also
	 */
	public function picnics() {
		return $this->belongsToMany('App\Models\Picnic', 'bears_picnics', 'bear_id', 'picnic_id');
	}
}
