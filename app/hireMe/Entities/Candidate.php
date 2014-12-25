<?php namespace hireMe\Entities;

class Candidate extends \Eloquent
{
    protected $fillable = ['website_url', 'description',
                           'job_type','category_id','available'];

    public function user()
    {
        return $this->hasOne('hireMe\Entities\User', 'id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('hireMe\Entities\Category');
    }

    public function getJobTypeTitleAttribute()
    {
        return \Lang::get('utils.jobs_types.' . $this->job_type);
    }

    public function getDescriptionTitleAttribute()
    {

    }

}