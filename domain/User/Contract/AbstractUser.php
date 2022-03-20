<?php 
namespace Domain\User\Contract;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
 
abstract class AbstractUser extends Authenticatable
{
    //
    use  HasApiTokens, HasFactory, Notifiable;
}