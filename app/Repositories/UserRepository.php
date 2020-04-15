<?php
namespace App\Repositories;
use App\User;
use App\Friendship;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function getAllwithFriends()
    {
        $users = User::all();
        foreach($users as &$user) {
            $user->getFriendsAttribute();
            $user->getBlockedFriendsAttribute();
        }
        return $users;
    }

    public function getInvites(User $user)
    {
         $user->friend_requests;

        return $user;
    }

    public function sendFriendshipInvite(User $user, $friend_id)
    {
        $exist_pending_friendship = Friendship::where(['first_user'=>$user->id, 'second_user'=>$friend_id, 'status'=>'pending'])->first();
        if($exist_pending_friendship) {return [$exist_pending_friendship,'exist_pending_friendship'];}
        $exist_blocked_friendship = Friendship::where(['first_user'=>$user->id, 'second_user'=>$friend_id, 'status'=>'blocked'])->first();
        if($exist_blocked_friendship) {return [$exist_blocked_friendship,'exist_blocked_friendship'];}
        $exist_confirmed_friendship = Friendship::where(['first_user'=>$user->id, 'second_user'=>$friend_id, 'status'=>'confirmed'])->first();
        if($exist_confirmed_friendship) {return [$exist_confirmed_friendship,'exist_confirmed_friendship'];}

        try {
            $friendship = new Friendship;
            $friendship->first_user = $user->id;
            $friendship->second_user = $friend_id;
            $friendship->acted_user = $user->id;
            $friendship->status = 'pending';
            $friendship->save();
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        $user->getFriendsAttribute();
        $user->getBlockedFriendsAttribute();

        return [$user,'friendship_invite_is_sent'];
    }

    public function acceptFriendshipInvite(User $user, $friend_id)
    {
        $friendship = Friendship::where(['first_user'=>$friend_id, 'second_user'=>$user->id, 'status'=>'pending'])->first();
        if($friendship) {
            try {
                $friendship->acted_user = $user->id;
                $friendship->status = 'confirmed';
                $friendship->save();

            } catch (\Exception $e) {
                return $e->getMessage();
            }
            $message = 'friendship_invite_is_accepted';
        } else {
            $message = 'friendship_invite_is_not_found';
        }

        $user->getFriendsAttribute();
        $user->getBlockedFriendsAttribute();

        return [$user,$message];

    }

    public function blockFriendshipInvite(User $user, $friend_id)
    {
        $friendship = Friendship::where(['first_user'=>$friend_id, 'second_user'=>$user->id, 'status'=>'pending'])->first();
        if($friendship) {
            try {
                $friendship->acted_user = $user->id;
                $friendship->status = 'blocked';
                $friendship->save();

            } catch (\Exception $e) {
                return $e->getMessage();
            }
            $message = 'friendship_invite_is_blocked';
        } else {
            $message = 'friendship_invite_is_not_found';
        }

        $user->getFriendsAttribute();
        $user->getBlockedFriendsAttribute();

        return [$user,$message];


    }


}
