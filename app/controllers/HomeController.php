<?php

use hireMe\Repositories\CandidateRepo;

class HomeController extends BaseController {

	private $candidateRepo;

	public function __construct(CandidateRepo $candidateRepo){
		$this->candidateRepo = $candidateRepo;
	}

	public function index()
	{
		$latest_candidates = $this->candidateRepo->findLatest();
		return View::make('home', compact('latest_candidates'));
	}

}
