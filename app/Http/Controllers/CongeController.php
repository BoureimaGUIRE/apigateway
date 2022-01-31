<?php

namespace App\Http\Controllers;

use App\Services\CongeService;
use App\Services\EmployeService;
use Illuminate\Http\Request;

class CongeController extends Controller
{

    private $congeService;
    private $employeService;

    public function __construct(CongeService $congeService, EmployeService $employeService)
    {
        $this->congeService = $congeService;
        $this->employeService = $employeService;
    }

    public function index()
    {
        return $this->successResponse($this->congeService->fetchConges());
    }

    public function show($id)
    {
        return $this->successResponse($this->congeService->fetchConge($id));
    }

    public function store(Request $request)
    {
        $result = $this->employeService->fetchEmploye($request->employe_id);
        return $this->successResponse($this->congeService->createConge($request->all()));
    }

    public function update(Request $request, $id)
    {
        return $this->successResponse($this->congeService->updateConge($id, $request->all()));
    }

    public function destroy($id)
    {
        return $this->successResponse($this->congeService->deleteConge($id));
    }

}