<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EmployeService;

class EmployeController extends Controller
{

    private $employeService;

    public function __construct(EmployeService $employeService)
    {
        $this->employeService = $employeService;
    }

    public function index()
    {
        return $this->successResponse($this->employeService->fetchEmployes());
    }

    public function show($id)
    {
        return $this->successResponse($this->employeService->fetchEmploye($id));
    }

    public function store(Request $request)
    {
        return $this->successResponse($this->employeService->createEmploye($request->all()));
    }

    public function update(Request $request, $id)
    {
        return $this->successResponse($this->employeService->updateEmploye($id, $request->all()));
    }

    public function destroy($id)
    {
        return $this->successResponse($this->employeService->deleteEmploye($id));
    }
}