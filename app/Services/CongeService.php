<?php

namespace App\Services;

use App\Traits\RequestService;

class CongeService
{
    use RequestService;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.conges.base_uri');
        $this->secret = config('services.conges.secret');
    }


    public function fetchConges()
    {
        return $this->request('GET', '/api/congeservice');
    }

    public function fetchConge($id)
    {
        return $this->request('GET', "/api/congeservice/{$id}");
    }

    public function createConge($data)
    {
        return $this->request('POST', '/api/congeservice', $data);
    }

    public function updateConge($id, $data)
    {
        return $this->request('PATCH', "/api/congeservice/{$id}", $data);
    }

    public function deleteConge($id)
    {
        return $this->request('DELETE', "/api/congeservice/{$id}");
    }

}