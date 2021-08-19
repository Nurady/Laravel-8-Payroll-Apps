<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Division;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class DivisionPolicy
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

    public function akses_divisi(User $user)
    {
        return $user->username == 'mya'
                        ? Response::allow()
                        : Response::deny('Halaman yang anda akses tidak ada');
    }

    public function tambah_divisi(User $user)
    {
        return $user->username == 'mya'
                        ? Response::allow()
                        : Response::deny('Halaman yang anda akses tidak ada');
    }
}
