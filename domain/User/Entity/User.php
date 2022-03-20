<?php

namespace Domain\User\Entity;

use Domain\User\Contract\AbstractUser;

class User extends AbstractUser
{
    protected $fillable = ["email","name","password"];
    protected $table = "users";
}