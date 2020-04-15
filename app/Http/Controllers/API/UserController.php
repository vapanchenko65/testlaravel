<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Repositories\Interfaces\UserRepositoryInterface;
class UserController extends BaseController
{


    private $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
        /**
     * User api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllwithFriends(Request $request)
    {
        $users = $this->userRepository->getAllwithFriends();

        return $this->sendResponse($users->toArray(), 'Users retrieved successfully.');
    }

    /**
     * User api
     *
     * @return \Illuminate\Http\Response
     */
    public function getInvites(Request $request)
    {
        $user = $request->user();
        $result = $this->userRepository->getInvites($user);

        return $this->sendResponse($result, 'User with invites.');
    }
    /**
     * User api
     *
     * @return \Illuminate\Http\Response
     */
    public function sendFriendshipInvite(Request $request, $friend)
    {
        $user = $request->user();
        $friend_id = $friend;
        $result = $this->userRepository->sendFriendshipInvite($user, $friend_id);
        return $this->sendResponse($result[0], $result[1]);
    }

    /**
     * User api
     *
     * @return \Illuminate\Http\Response
     */
    public function acceptFriendshipInvite(Request $request, $friend)
    {
        $user = $request->user();
        $friend_id = $friend;
        $result = $this->userRepository->acceptFriendshipInvite($user, $friend_id);
        return $this->sendResponse($result[0], $result[1]);
    }

    /**
     * User api
     *
     * @return \Illuminate\Http\Response
     */
    public function blockFriendshipInvite(Request $request, $friend)
    {
        $user = $request->user();
        $friend_id = $friend;
        $result = $this->userRepository->blockFriendshipInvite($user, $friend_id);
        return $this->sendResponse($result[0], $result[1]);
    }
}


//    "token_type": "Bearer",
//    "expires_in": 31536000,
//    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiOWZjZWY3MDNiMDhhOTE5MzE5YWEzODQ5NTZlZWE4MjYwZWUyYTIwYmUyYzI4NDQ4YzMxMDc4ZTFjMjc2OGQ1NzhlMmY0ZDQ3ZDM4ZmJkYzIiLCJpYXQiOjE1ODY2Nzg1MzUsIm5iZiI6MTU4NjY3ODUzNSwiZXhwIjoxNjE4MjE0NTM1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.OBn2Rxidk6cI4fsbTCqEw99WxH5bOXvGx60SSDfeYuuyLxdWGn4urkmPLZL4qaTCfCxtAp7SWNL5Us5N8U0nKXlUxoSv8u1dKyyifSKTV2P4E5hUtDyz8F444v_J7aP59c2kpum7BV0ZkiWJrI-UBBsnFfkVRQWOpx2ITeHajpNeNPbR_x6V-aTd-StJ6fYN8WE0v2TWXdDxBZPrMHl_RTKr_sxJS2toq4hNVGMGsm5Cx367eXN7WeLlEBEJWSbt8UkHDabEFYXpR2uvqXfwoBaJJmlmV1KyTYrfhrzhmQT5QscAg1LpnrzaLkdXXYvMZYA1N0mDWxq773C7jA1A45yey4wIacJgdK63y59Nrpx-ZYUDGJe4_KORgXFEwq9pkQ2wl5gWekLI-T2TqL5dl8yu-QcvYBHIPYRqLaEQNFayDqVLIlZVXwOCPdrC6eDIUuhmVFSeEq-aPrS6BI2d3RVWstYAd5zjetgVCIhUnHg8BcZf1t3L7l9VO7KUgeCnXRAFL-0SHwU9yHoFEez4GKfmy7tEf9OtvD8mW1LskDcJGzH80IZpMoysSnTOoX2wkXizwFLAZ0LMjkao3kDsXRErGrRStaOlQ28orP8e8UpASAunk7iKnJd32NJbT9_eou4Ly63Q_T6Dvt_9Xlm-l62T2ZDH09pUZNvfZuUl9vU",
//    "refresh_token": "def50200ecf6ec3e96a33071642752909435ac619ccb0b3ccbfe432d9973a870dd3bfb398bb60aa7ec869b43a3e4717b5e3b416aa2f484dd66bb0b88f8ef602a2b34c0c1625a4580ee301d8f4011b766d84509547d5507ccbd234fe228059eeab5f59ae0817e844c23fce335c2a28c08c76d84292611c86887e921bd39f6edb3f3fe768662ec3d350e4c586e38f36bc5c9c2e23203ce96375389530a9af64d9ead04d56aad395ae878dd43dab68f03ba4d4cc7461b82207f8224aa915d344b5007dbab24da147c2244cc439721dbb917df73976d7faa3ab4473619589d255896e2fcdff63c26279d6d5af476a752b33f25f9bddacf3d7b17ffe3b883ae923a27adf41cfff9fd6b2477f29ce47df5c6a8cea09324ec7944a58089d199d15594ca626e73a201a0ff3ddf7cd58ead5e168245fda4243bb34b440a01cac0982dee33420b1e16168897b2696efbd83772e336a7b8072ffc9c21a23033c3ba15e8e77b0d"
