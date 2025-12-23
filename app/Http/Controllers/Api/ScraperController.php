<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScraperController extends Controller
{
    public function scrape(Request $request){
        $url = $request->input('url');
        return response()->json([
            'message' => 'URLを受け取りました',
            'url' => $url
        ]);
    }
}
