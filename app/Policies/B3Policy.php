<?php
/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 11-5-2017
 * Time: 21:15
 */

namespace App\Policies;


use App\User;
use Stormyy\B3\Helper\B3Database;
use Stormyy\B3\Models\B3Server;
use Stormyy\B3\Models\Player;
use Stormyy\B3\Policies\B3ServerPolicy;
use Stormyy\B3\Policies\B3ServerPolicyInterface;

class B3Policy extends B3ServerPolicy
{
    public function manage(User $user)
    {
        return $user != null && $user->isSuperAdmin;
    }


}