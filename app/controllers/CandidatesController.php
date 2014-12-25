<?php

use hireMe\Repositories\CategoryRepo;
use hireMe\Repositories\CandidateRepo;


class CandidatesController extends Controller{
    
    private $categoryRepo ;
    private $candidateRepo;

    public function __construct(CategoryRepo $categoryRepo,
                                CandidateRepo $candidateRepo){
        $this->categoryRepo = $categoryRepo;
        $this->candidateRepo = $candidateRepo;
    }

    public function category($slug, $id){

        $category = $this->categoryRepo->find($id);

        return View::make('candidates/category',compact('category'));
    }
    public function show($slug, $id){
        $candidate = $this->candidateRepo->find($id);
        return View::make('candidates/show',compact('candidate'));
    }

}