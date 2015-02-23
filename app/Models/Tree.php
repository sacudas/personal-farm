<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

CLass Tree extends \Eloquent {

	/****** MASS ISSIGNMENT ******/
	protected $fillable = array('type', 'age', 'bear_id');

	/****** DEFINE RELATIONSHIP ******/

	/**
	 * bear
	 *
	 */
	public function bear() {
		return $this->belongsTo('Bear');
	}
}
