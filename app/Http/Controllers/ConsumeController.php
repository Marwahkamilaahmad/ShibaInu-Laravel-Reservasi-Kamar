<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ConsumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = new Client();

        $url = "";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $data = $contentArray['data'];
        return view('home', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $keyword = $request->input('nama');
            $parameter = [

            ];

           $client = new Client();
           $url = "http://127.0.0.1:8001/api/v1/advanced/lookup/facilities?keyword=".$keyword;
           $response = $client->request('POST', $url, [
               'form_params' => $parameter,
           ]);
           $content = $response->getBody()->getContents();
           $contentArrays = json_decode($content, true);
           $data = $contentArrays['data'];
           if($contentArrays['status'] != true){
           $error = $contentArrays['message'];
               return Redirect::back()->withErrors($error);
           }else{
            return redirect()->route('table_reservation')->with('data', $data,'keyword', $keyword);
           }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $parameter = [

        ];

        $client = new Client();
        $url = "".$id;

        $response = $client->request('PUT', $url, [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'body' => http_build_query($parameter),
        ]);

        $content = $response->getBody()->getContents();
        $contentArrays = json_decode($content, true);
        if($contentArrays['status'] != true){
            $error = $contentArrays['message'];
            return Redirect::back()->withErrors($error);
        }else{
            return Redirect::route('');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = new Client();

        $url = "".$id;
        $response = $client->request('DELETE', $url);
        $content = $response->getBody()->getContents();
        $contentArrays = json_decode($content, true);

        return Redirect::back()->with('success', 'berhasil');

    }

    public function view_docs(){
        return redirect('http://127.0.0.1:8001/docs');
    }

    public function view_reservation(){

        return view('pages.reservation');
    }

}
