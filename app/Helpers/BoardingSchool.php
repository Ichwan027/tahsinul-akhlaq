<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class BoardingSchool extends Model
{
    private $key;
    private $secret;
    private $base;
    private $code;

    public function __construct()
    {
        $this->key = env('BOARDING_SCHOOL_KEY');
        $this->secret = env('BOARDING_SCHOOL_SECRET');
        $this->base = env('BOARDING_SCHOOL_BASE');
        $this->code = env('BOARDING_SCHOOL_CODE');
    }

    public function signature($body, $method)
    {
        $secret = $this->secret;
        $key = $this->key;
        $method = $method;
        $timestamps = date('Y-m-d H:i:s');

        $bodyEncrypt = hash('sha256', json_encode($body));
        $stringtosign = strtoupper($method) . ":" . $key . ":" . $bodyEncrypt . ":" . $timestamps;
        $signature = hash_hmac('sha256', $stringtosign, $secret);

        return [
            'signature' => $signature,
            'timestime' => $timestamps
        ];
    }

    public function send($method, $endpoint, $body)
    {
        $head = $this->signature($body, $method);
        $header = [
            'X-KEY' => $this->key,
            'X-SIGNATURE' => $head['signature'],
            'X-TIMESTAMP' => $head['timestime'],
            'X-CODE' => $this->code,
        ];

        return Http::withHeaders($header)->$method($this->base . $endpoint, $body)->object();
    }

    public function profile()
    {
        $body = [];
        $endpoint = '/api/profile';

        $response = $this->send('get', $endpoint, $body);
        return $response;
    }

    public function inbox()
    {
        $body = [
            "name" => "udin222",
            "email" => "udin@mail.com",
            "message" => "abcnas"
        ];
        $endpoint = '/api/inbox';

        $response = $this->send('post', $endpoint, $body);
        return $response;
    }

    public function album()
    {
        $body = [];
        $endpoint = '/api/album';

        $response = $this->send('get', $endpoint, $body);
        return $response;
    }

    public function albumShow($uuid)
    {
        $body = [];
        $endpoint = '/api/album/' . $uuid;

        $response = $this->send('get', $endpoint, $body);
        return $response;
    }
}
