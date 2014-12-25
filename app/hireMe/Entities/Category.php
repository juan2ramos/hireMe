<?php namespace hireMe\Entities;

class Category extends \Eloquent {
	protected $fillable = [];

	public function candidates(){
		return $this->hasMany('hireMe\Entities\Candidate');
	}
	public function getPaginateCandidatesAttribute(){
		return Candidate::where('category_id',$this->id)->paginate(5);
	}
}