<?php
namespace Domain\User\Services;

use Domain\Account\Contract\AbstractService;
use Domain\User\Entity\User;
use Domain\User\Response\ResponseCode;
use Domain\User\Response\ResponseMessage;
use Domain\User\Exceptions\PasswordMissMatchException;
use Domain\User\Exceptions\UserNotFoundException;
use Illuminate\Support\Facades\Log;
use   Illuminate\Support\Facades\Hash;

class UserCrudService extends AbstractService {

    public function create($data) {
        Log::info("AccountCrudService::create()");
        $user = new User();
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->password = $data['password'];
        $user->save();
        return  $user;
    }

    public function login($data){
        $user = User::where('email', $data["email"])->first();
        if ($user) {
            if (Hash::check($data["password"], $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];
                return response($response, 200);
            } else {
                throw new PasswordMissMatchException(ResponseMessage::PASSWORD_MISMATCH, ResponseCode::PASSWORD_MISMATCH);
            }
        } else {
            throw new UserNotFoundException('User does not exist');
        }
    }
}