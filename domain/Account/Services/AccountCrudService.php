<?php
namespace Domain\Account\Services;

use Domain\Account\Contract\AbstractService;
use Domain\Account\Entity\Account;

class AccountCrudService extends AbstractService {

    public function create() {
        \Log::info("AccountCrudService::create()");
        return "created new account";
        // $account = new Account();
        // // $account->fill($data);
        // // $account->save();
        // return $account;
    }
}