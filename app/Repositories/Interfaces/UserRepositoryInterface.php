<?php
namespace App\Repositories\Interfaces;
use App\User;
interface UserRepositoryInterface
{
    public function getAllwithFriends();

    public function sendFriendshipInvite(User $user, $friend_id);

    public function getInvites(User $user);

    public function acceptFriendshipInvite(User $user, $friend_id);

    public function blockFriendshipInvite(User $user, $friend_id);

}
