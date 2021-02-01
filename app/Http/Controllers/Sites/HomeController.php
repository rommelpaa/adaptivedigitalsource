<?php

namespace App\Http\Controllers\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\NewsLetterService;
use App\Http\Requests\NewsLetter;

class HomeController extends Controller
{
	protected $newsLetterService;

	public function __construct(NewsLetterService $newsLetterService)
	{
		$this->newsLetterService = $newsLetterService;
	}

    public function comingSoon()
    {
    	return view('sites.home.coming-soon');
    }

    public function storeComingSoon(NewsLetter $request)
    {
    	$data['name'] = $request->post('fullname');
    	$data = [
    		'name' => $request->post('fullname'),
    		'email' => $request->post('email'),
    		'status' => !empty($request->post('status')) ? 1 : 0
    	];
    	
    	try {
    		$save = $this->newsLetterService->save($data);
    		if (!empty($data['status'])) {
    			$message = "Thank you, for your inquiry. We will keep you posted and we will get back to you as soon as possible.";
    		} else {
    			$message = "Thank you, for your inquiry.";
    		}
    		
    		$status = "success";

    	} catch (\Exception $e) {
    		$message = $e->getMessage();
    		$status = "danger";
    	}
    	return redirect('/')->with('message', $message)->with('status', $status);
    }
}
