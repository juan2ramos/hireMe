<?php namespace hireMe\Managers;


class ProfileManager extends BaseManager{

    public function getRules()
    {
        return [
            'website_url' => 'required|url',
            'description' => 'required|max:1000',
            'job_type'    => 'required|in:full,partial,freelance',
            'category_id' => 'required|exists:categories,id',
            'available'   => 'in:0,1'
        ];
    }
    public function prepareData($data){
        if(! isset($data['available'])){
            $data['available'] = 0;
        }
        return $data;
    }
}