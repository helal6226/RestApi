<?php

namespace App\Util;

use GuzzleHttp\Client;

class OpenLibrary{

    protected $client;
    protected $url = "https://openlibrary.org/api/books";
    
    public function __construct(){
        
        $this->client = new Client();

    }

    public function bookInfo($isbn){

        $response = $this->client->get($this->url . "?bibkeys=ISBN:$isbn&format=json");

        $book =  json_decode($response->getBody(), true);

        if($book){
            $info = array_values($book);
            if(count($info)> 0){
                return $info[0];
            }
        }
        return null;
    }



    
}