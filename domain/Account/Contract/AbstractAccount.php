<?php 
namespace Domain\Account\Contract;

use Domain\Contracts\EntityInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class AbstractAccount implements EntityInterface
{
    //
    use HasFactory;
}