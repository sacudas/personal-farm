<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

CLass Fish extends \Eloquent {

	/****** MASS ISSIGNMENT ******/
	protected $fillable = array('weight', 'bear_id');

	/****** LINK THE MODEL TO OUR DATABASE TABLE ******/

	// since the plural of fish isnt what we named our database table
	// we have to define it
	protected $table = 'fish';

	/****** DEFINE RELATIONSHIP ******/

	/**
	 * bear
	 *
	 */
	public function bear() {
		return $this->belongsTo('Bear');
	}
}
