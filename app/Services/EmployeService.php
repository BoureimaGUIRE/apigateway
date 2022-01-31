<?php

namespace App\Services;

use App\Traits\RequestService;

class EmployeService
{
    use RequestService;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.employes.base_uri');
        $this->secret = config('services.employes.secret');
    }


    public function fetchEmployes()
    {
        return $this->request('GET', '/api/employeservice');
    }

    public function fetchEmploye($id)
    {
        return $this->request('GET', "/api/employeservice/{$id}");
    }

    public function createEmploye($data)
    {
        return $this->request('POST', '/api/employeservice', $data);
    }

    public function updateEmploye($id, $data)
    {
        return $this->request('PATCH', "/api/employeservice/{$id}", $data);
    }

    public function deleteEmploye($id)
    {
        return $this->request('DELETE', "/api/employeservice/{$id}");
    }

}