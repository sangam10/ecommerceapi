<?php
namespace App\Repositories;

use App\Interfaces\IUser;
use App\Models\User;

class UserRepository extends BaseRepository implements IUser{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}