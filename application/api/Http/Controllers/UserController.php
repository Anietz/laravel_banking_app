<?php

namespace App\Http\Controllers;

use Domain\User\Request\LoginRequest;
use Domain\User\Request\RegisterRequest;
use Domain\User\Services\UserCrudService;
use \Illuminate\Http\Response;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserCrudService $userService)
    {
        $this->userService = $userService;
    }

    
    function create(RegisterRequest $request)
    {
        return $this->userService->create($request->validated());
    }

     function login(LoginRequest $request)
    {
        return $this->userService->login($request->validated());
    }
}