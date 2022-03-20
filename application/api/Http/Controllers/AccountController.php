<?php

namespace App\Http\Controllers;

use Domain\Account\Services\AccountCrudService;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class AccountController extends Controller
{

    protected $accountService;

    public function __construct(AccountCrudService $accountService)
    {
        $this->accountService = $accountService;
    }

    
    function createAccount(Request $request)
    {
        return $this->accountService->create();
    }
}