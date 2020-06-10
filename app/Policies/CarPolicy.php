<?php

namespace App\Policies;

use App\Car;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CarPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Car $car)
    {
        return true;
    }
    public function update(User $user, Car $car)
    {
        return $user->id === $car->user->id;
    }

    public function delete(User $user, Car $car)
    {
        return $user->id === $car->user->id;
    }


    public function create(User $user)
    {
        return true;
    }

}
