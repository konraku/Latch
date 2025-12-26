<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScraperController extends Controller
{
    public function scrape(Request $request){
        $url = $request->input('url');
        
        try {
            $response = Http::timeout(10)->get($url);

            if (!$response->successful()) {
                responseError("Failed to fetch URL", $url);
            }

            $html = $response->body();
            preg_match('/<title>(.*?)<\/title>/i', $html, $titleMatch);
            $title = $titleMatch[1] ?? null;

            return response()->json([
                'url' => $url,
                'title' => $title,
            ]);

        }
        catch(\Exception $e) {
            responseError($e, $url);
        }
    }

    public function responseError(string $er, string $url){
        return response()->json([
            'message' => $er,
            'url' => $url
        ]);
    }
}
