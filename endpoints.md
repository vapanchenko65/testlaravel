

https://github.com/vapanchenko65/testlaravel

URL ENDPOINTS LIST:

SHORT
1. Register: 
метод:POST, URL:http://testlaravel.loc/api/register

2. Login:
 метод:POST, URL:http://testlaravel.loc/oauth/token
 
3. getAllwithFriends: 
 метод:GET, URL:http://testlaravel.loc/api/users/getAllwithFriends
 
4. sendFriendshipInvite for user with id=7:
 метод:POST, URL:http://testlaravel.loc/api/users/sendFriendshipInvite/7
 
5. acceptFriendshipInvite from user with id=5: 
 метод:PUT, URL:http://testlaravel.loc/api/users/acceptFriendshipInvite/5

6. blockFriendshipInvite from user with id=6:
 метод:PUT, URL:http://testlaravel.loc/api/users/blockFriendshipInvite/6

7. getInvites of authorised user:
 метод:GET, URL:http://testlaravel.loc/api/users/getInvites



WITH DESCRIPTION

1. Register: метод:POST, URL:http://testlaravel.loc/api/register
Request Body:
KEY:VALUE
name:test7
email:test7@mail.ru
password:test7
c_password:test7

Response Body:
{
    "success": true,
    "data": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNjI5ZDBlZjc5NzQ1OWY1YTI4MjQwMzQ5NGNiMjJmYWM1YTdmNTg4ZGE3ODMxZTI0MThjYjFhNmU0ZTllNWE0ZjBkZDg5NzlmMTM0MGZhZTAiLCJpYXQiOjE1ODY4NzUwNzgsIm5iZiI6MTU4Njg3NTA3OCwiZXhwIjoxNjE4NDExMDc4LCJzdWIiOiI5Iiwic2NvcGVzIjpbXX0.CgMNIZMsdBtw-vJ0jdwpwirjP2ilefEhiVa3l3Zz7UUQd7yCUVbyjVMohiEhy7AePyv81abr1rV4a0mgZD9P6SIovtvt32dqmjh5Lzabd9KuN6V5ya9EwYRdeavUGFB4TX5dyfII9M3j_VEHKlTq7C6mZ46zSact41576tt-KcYGbXJBtl2ixq7WBvKDbcZ-PxnPC21TXIxOzfVSh-0_nPPEf1Dn69S6bSRetNE4Wk3cPDdCnKTfocaI8-mUN9zhS9rBgcXVg2JRnwVgipsMUtmjJDeNMLLGe6oo5LsroqnEAb_L7CnpbcyqQHpjdAd6eb9X26Ec3ufCIc2mkGjF9HWP530Tz2VyzcyDbhlVDbg4SnoVfziRfwS_6DDk1wEwFAlgDGOGkKWCpp1rbYOCrA-r2_kkgXiO5sSHYxxp-H7WVq-dsLM_ki5Oi9az5DJ7upVf2QV_AOTmdCojBl-cAZa_dHyIp8OkwGIlUnjZm0lgVUSdwYV1W1ru5RAmHZWnhc558JBKDzJTzHgcANGnsKvp5ihn4HP1ZF6_E9-ET7T-rGZdLJitQw1x48JFjw7kFVzyyxQf9iKydK1LFbbnH9-9YZDk1DSIgZtyeKvbwTQRxh-5qUqo5YtBiOR5hOp26Ot9wh5T2M8ySOwKuK3z5zxkMMHSuN3IKbv_s8pNjNQ",
        "name": "test7"
    },
    "message": "User register successfully."
}



2. Login: метод:POST, URL:http://testlaravel.loc/oauth/token
Request Body:
KEY:VALUE
username:test7@mail.ru
password:test7
grant_type:password
client_id:2
client_secret:ELXLGha5z1619fu3OCVyoOuBWWmMaSV72aVrbw6H


Response Body:
{
    "token_type": "Bearer",
    "expires_in": 31535999,
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiODQyMWI0YzlhNTVlODg0MjNjZmRkNDMzN2JiZTYyODRmNmE5MjBlYjc5OTY3NzM4OWQ3MjFkOTE0NjNlOWM4YzFlNThmNGU2ODRkNzBhZTMiLCJpYXQiOjE1ODY4NzU1NjIsIm5iZiI6MTU4Njg3NTU2MiwiZXhwIjoxNjE4NDExNTYxLCJzdWIiOiI5Iiwic2NvcGVzIjpbXX0.JiJ3m8GkQ_5oTric2hFxjPW06nTQPdJDn_rwSNkN2xylsS86eGFGbwMCBooEUKeUPphfH6gcbJ0GfrVQgnON9nwF0tQRUpGkZU6WIq9_4FsWc20pq8DcHWPerjXa_SASBw89f2VuJvbsW_jOLP1A3ViT7DbbTq_C7M7RVMUNUKUmpFp8VbBdRH1rD8kk0gw3qZYbjhAQHKrTYyzLBJpi4-fVf9dBoCWtZrPMoZBYJMmHFyJkj5qL23AK36NouHhT9tO8kSCNxYCihsuCD3pBI8-v1ny-D9-2ZvFmsUr31stbaoqUsxO1Jd98mdpSMpAJ3ecg_wdXqXcj0Jmcd6XMddejZonYZNdxP0OU-IO2Z3dRpg5iw4BR42EEZzRcFXQ5og9MWEen6NcYRNpiLjCQRTAsHSTSfMK6dWRSrS8Xk3tOSZJueAnvKLzfimZytbNvPpG4tr8yzRv7yJOkbp1o8HN3nzV0Mf5tCtGKtSqJ2KJE79WSXRj59jskzUizoo0YiT8frsVGpfjUMEKFmjzl0o0ILQUYJ7Xe67PwFmvmYHIrCMivAkm9Nz0qL7VCYbLx6Z2ZDsnJWCQOrNigPxsW0MHS8lwy4QTPmXqVqst2EoV-SAhIZj3zJoZkFz6ryB6GfYKhmIeq3mlaGL7Ut81qdkHf00Pmc7btT8D9wIl7Bb0",
    "refresh_token": "def5020022271db8a1b502190211fbce1c56cb3247d404e7752edeca1fa83240f1d6caba2fe3c4af7153833c8117e73a01697169f55d6de89ac0334ae6382a56ef9144ff99e3da5ad7afaa68c8b984d16a6bcfee2140bdc7176d9c1da3e7d27515882a4c845fe4b27c8a92389c1e5d8f934c438826c9b478d3a43b30b6d16855348ea231061220ace161065f32c54eb869b649af44c9669c44b924cb62af52da5fdac67829aa8b1c12b217761f7efa142b0ab1073c75912cbbe1b4ee14a5e10ac493229aa33bfa3f40604efa8ac8198d1f1b6c3cb699249352ff0347ee03ef075d84e1efa4acf5375aebac01f77372cff08e7b9219bafeb4b1bb15d09d044ae554d7ee1ba443a2da11884759c9427226424d7b46fd93494b891f3f0ba26e83d681a520958df2b9e0a033d9142f113f2ba9d41cadef7c2b7260566323de5aaa28b16e49de63158736acdc171a3dbfaa24596febc0336eebec824de048a690e44271"
}

3. getAllwithFriends: метод:GET, URL:http://testlaravel.loc/api/users/getAllwithFriends
Headers:
KEY:VALUE
Authorization:Bearer  eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiOWZjZWY3MDNiMDhhOTE5MzE5YWEzODQ5NTZlZWE4MjYwZWUyYTIwYmUyYzI4NDQ4YzMxMDc4ZTFjMjc2OGQ1NzhlMmY0ZDQ3ZDM4ZmJkYzIiLCJpYXQiOjE1ODY2Nzg1MzUsIm5iZiI6MTU4NjY3ODUzNSwiZXhwIjoxNjE4MjE0NTM1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.OBn2Rxidk6cI4fsbTCqEw99WxH5bOXvGx60SSDfeYuuyLxdWGn4urkmPLZL4qaTCfCxtAp7SWNL5Us5N8U0nKXlUxoSv8u1dKyyifSKTV2P4E5hUtDyz8F444v_J7aP59c2kpum7BV0ZkiWJrI-UBBsnFfkVRQWOpx2ITeHajpNeNPbR_x6V-aTd-StJ6fYN8WE0v2TWXdDxBZPrMHl_RTKr_sxJS2toq4hNVGMGsm5Cx367eXN7WeLlEBEJWSbt8UkHDabEFYXpR2uvqXfwoBaJJmlmV1KyTYrfhrzhmQT5QscAg1LpnrzaLkdXXYvMZYA1N0mDWxq773C7jA1A45yey4wIacJgdK63y59Nrpx-ZYUDGJe4_KORgXFEwq9pkQ2wl5gWekLI-T2TqL5dl8yu-QcvYBHIPYRqLaEQNFayDqVLIlZVXwOCPdrC6eDIUuhmVFSeEq-aPrS6BI2d3RVWstYAd5zjetgVCIhUnHg8BcZf1t3L7l9VO7KUgeCnXRAFL-0SHwU9yHoFEez4GKfmy7tEf9OtvD8mW1LskDcJGzH80IZpMoysSnTOoX2wkXizwFLAZ0LMjkao3kDsXRErGrRStaOlQ28orP8e8UpASAunk7iKnJd32NJbT9_eou4Ly63Q_T6Dvt_9Xlm-l62T2ZDH09pUZNvfZuUl9vU

Response Body:
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "test1",
            "email": "test@mail.ru",
            "email_verified_at": null,
            "created_at": "2020-04-11T06:17:53.000000Z",
            "updated_at": "2020-04-13T09:09:13.000000Z",
            "friends_of_this_user": [],
            "this_user_friend_of": [
                {
                    "id": 3,
                    "name": "test2",
                    "email": "test2@mail.ru",
                    "email_verified_at": null,
                    "created_at": "2020-04-12T07:16:15.000000Z",
                    "updated_at": "2020-04-12T07:16:15.000000Z",
                    "pivot": {
                        "second_user": 1,
                        "first_user": 3,
                        "status": "confirmed"
                    }
                }
            ],
            "friends": [
                {
                    "id": 3,
                    "name": "test2",
                    "email": "test2@mail.ru",
                    "email_verified_at": null,
                    "created_at": "2020-04-12T07:16:15.000000Z",
                    "updated_at": "2020-04-12T07:16:15.000000Z",
                    "pivot": {
                        "second_user": 1,
                        "first_user": 3,
                        "status": "confirmed"
                    }
                }
            ],
            "friends_of_this_user_blocked": [],
            "this_user_friend_of_blocked": [],
            "blocked_friends": []
        },
        {
            "id": 3,
            "name": "test2",
            "email": "test2@mail.ru",
            "email_verified_at": null,
            "created_at": "2020-04-12T07:16:15.000000Z",
            "updated_at": "2020-04-12T07:16:15.000000Z",
            "friends_of_this_user": [
                {
                    "id": 1,
                    "name": "test1",
                    "email": "test@mail.ru",
                    "email_verified_at": null,
                    "created_at": "2020-04-11T06:17:53.000000Z",
                    "updated_at": "2020-04-13T09:09:13.000000Z",
                    "pivot": {
                        "first_user": 3,
                        "second_user": 1,
                        "status": "confirmed"
                    }
                }
            ],
            "this_user_friend_of": [],
            "friends": [
                {
                    "id": 1,
                    "name": "test1",
                    "email": "test@mail.ru",
                    "email_verified_at": null,
                    "created_at": "2020-04-11T06:17:53.000000Z",
                    "updated_at": "2020-04-13T09:09:13.000000Z",
                    "pivot": {
                        "first_user": 3,
                        "second_user": 1,
                        "status": "confirmed"
                    }
                }
            ],
            "friends_of_this_user_blocked": [],
            "this_user_friend_of_blocked": [],
            "blocked_friends": []
        },
        {
            "id": 5,
            "name": "test3",
            "email": "test3@mail.ru",
            "email_verified_at": null,
            "created_at": "2020-04-13T14:17:50.000000Z",
            "updated_at": "2020-04-13T14:17:50.000000Z",
            "friends_of_this_user": [],
            "this_user_friend_of": [],
            "friends": [],
            "friends_of_this_user_blocked": [],
            "this_user_friend_of_blocked": [],
            "blocked_friends": []
        },
        {
            "id": 6,
            "name": "test4",
            "email": "test4@mail.ru",
            "email_verified_at": null,
            "created_at": "2020-04-13T14:18:40.000000Z",
            "updated_at": "2020-04-13T14:18:40.000000Z",
            "friends_of_this_user": [],
            "this_user_friend_of": [],
            "friends": [],
            "friends_of_this_user_blocked": [],
            "this_user_friend_of_blocked": [],
            "blocked_friends": []
        },
        {
            "id": 7,
            "name": "test5",
            "email": "test5@mail.ru",
            "email_verified_at": null,
            "created_at": "2020-04-13T14:18:57.000000Z",
            "updated_at": "2020-04-13T14:18:57.000000Z",
            "friends_of_this_user": [],
            "this_user_friend_of": [],
            "friends": [],
            "friends_of_this_user_blocked": [],
            "this_user_friend_of_blocked": [],
            "blocked_friends": []
        },
        {
            "id": 8,
            "name": "test6",
            "email": "test6@mail.ru",
            "email_verified_at": null,
            "created_at": "2020-04-13T14:19:45.000000Z",
            "updated_at": "2020-04-13T14:19:45.000000Z",
            "friends_of_this_user": [],
            "this_user_friend_of": [],
            "friends": [],
            "friends_of_this_user_blocked": [],
            "this_user_friend_of_blocked": [],
            "blocked_friends": []
        },
        {
            "id": 9,
            "name": "test7",
            "email": "test7@mail.ru",
            "email_verified_at": null,
            "created_at": "2020-04-14T14:37:57.000000Z",
            "updated_at": "2020-04-14T14:37:57.000000Z",
            "friends_of_this_user": [],
            "this_user_friend_of": [],
            "friends": [],
            "friends_of_this_user_blocked": [],
            "this_user_friend_of_blocked": [],
            "blocked_friends": []
        }
    ],
    "message": "Users retrieved successfully."
}

4. sendFriendshipInvite: метод:POST, URL:http://testlaravel.loc/api/users/sendFriendshipInvite/7
Headers:
KEY:VALUE
Authorization:Bearer  eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiOWZjZWY3MDNiMDhhOTE5MzE5YWEzODQ5NTZlZWE4MjYwZWUyYTIwYmUyYzI4NDQ4YzMxMDc4ZTFjMjc2OGQ1NzhlMmY0ZDQ3ZDM4ZmJkYzIiLCJpYXQiOjE1ODY2Nzg1MzUsIm5iZiI6MTU4NjY3ODUzNSwiZXhwIjoxNjE4MjE0NTM1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.OBn2Rxidk6cI4fsbTCqEw99WxH5bOXvGx60SSDfeYuuyLxdWGn4urkmPLZL4qaTCfCxtAp7SWNL5Us5N8U0nKXlUxoSv8u1dKyyifSKTV2P4E5hUtDyz8F444v_J7aP59c2kpum7BV0ZkiWJrI-UBBsnFfkVRQWOpx2ITeHajpNeNPbR_x6V-aTd-StJ6fYN8WE0v2TWXdDxBZPrMHl_RTKr_sxJS2toq4hNVGMGsm5Cx367eXN7WeLlEBEJWSbt8UkHDabEFYXpR2uvqXfwoBaJJmlmV1KyTYrfhrzhmQT5QscAg1LpnrzaLkdXXYvMZYA1N0mDWxq773C7jA1A45yey4wIacJgdK63y59Nrpx-ZYUDGJe4_KORgXFEwq9pkQ2wl5gWekLI-T2TqL5dl8yu-QcvYBHIPYRqLaEQNFayDqVLIlZVXwOCPdrC6eDIUuhmVFSeEq-aPrS6BI2d3RVWstYAd5zjetgVCIhUnHg8BcZf1t3L7l9VO7KUgeCnXRAFL-0SHwU9yHoFEez4GKfmy7tEf9OtvD8mW1LskDcJGzH80IZpMoysSnTOoX2wkXizwFLAZ0LMjkao3kDsXRErGrRStaOlQ28orP8e8UpASAunk7iKnJd32NJbT9_eou4Ly63Q_T6Dvt_9Xlm-l62T2ZDH09pUZNvfZuUl9vU

Response Body:
{
    "success": true,
    "data": {
        "id": 1,
        "name": "test1",
        "email": "test@mail.ru",
        "email_verified_at": null,
        "created_at": "2020-04-11T06:17:53.000000Z",
        "updated_at": "2020-04-13T09:09:13.000000Z",
        "friends_of_this_user": [],
        "this_user_friend_of": [
            {
                "id": 3,
                "name": "test2",
                "email": "test2@mail.ru",
                "email_verified_at": null,
                "created_at": "2020-04-12T07:16:15.000000Z",
                "updated_at": "2020-04-12T07:16:15.000000Z",
                "pivot": {
                    "second_user": 1,
                    "first_user": 3,
                    "status": "confirmed"
                }
            }
        ],
        "friends": [
            {
                "id": 3,
                "name": "test2",
                "email": "test2@mail.ru",
                "email_verified_at": null,
                "created_at": "2020-04-12T07:16:15.000000Z",
                "updated_at": "2020-04-12T07:16:15.000000Z",
                "pivot": {
                    "second_user": 1,
                    "first_user": 3,
                    "status": "confirmed"
                }
            }
        ],
        "friends_of_this_user_blocked": [],
        "this_user_friend_of_blocked": [],
        "blocked_friends": []
    },
    "message": "friendship_invite_is_sent"
}

or if such invite is exist

{
    "success": true,
    "data": {
        "id": 10,
        "first_user": 1,
        "second_user": 5,
        "acted_user": 1,
        "status": "pending",
        "created_at": "2020-04-14T15:02:26.000000Z",
        "updated_at": "2020-04-14T15:02:26.000000Z"
    },
    "message": "exist_pending_friendship"
}

5. acceptFriendshipInvite: метод:PUT, URL:http://testlaravel.loc/api/users/acceptFriendshipInvite/5
Headers:
KEY:VALUE
Authorization:Bearer  eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiOWZjZWY3MDNiMDhhOTE5MzE5YWEzODQ5NTZlZWE4MjYwZWUyYTIwYmUyYzI4NDQ4YzMxMDc4ZTFjMjc2OGQ1NzhlMmY0ZDQ3ZDM4ZmJkYzIiLCJpYXQiOjE1ODY2Nzg1MzUsIm5iZiI6MTU4NjY3ODUzNSwiZXhwIjoxNjE4MjE0NTM1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.OBn2Rxidk6cI4fsbTCqEw99WxH5bOXvGx60SSDfeYuuyLxdWGn4urkmPLZL4qaTCfCxtAp7SWNL5Us5N8U0nKXlUxoSv8u1dKyyifSKTV2P4E5hUtDyz8F444v_J7aP59c2kpum7BV0ZkiWJrI-UBBsnFfkVRQWOpx2ITeHajpNeNPbR_x6V-aTd-StJ6fYN8WE0v2TWXdDxBZPrMHl_RTKr_sxJS2toq4hNVGMGsm5Cx367eXN7WeLlEBEJWSbt8UkHDabEFYXpR2uvqXfwoBaJJmlmV1KyTYrfhrzhmQT5QscAg1LpnrzaLkdXXYvMZYA1N0mDWxq773C7jA1A45yey4wIacJgdK63y59Nrpx-ZYUDGJe4_KORgXFEwq9pkQ2wl5gWekLI-T2TqL5dl8yu-QcvYBHIPYRqLaEQNFayDqVLIlZVXwOCPdrC6eDIUuhmVFSeEq-aPrS6BI2d3RVWstYAd5zjetgVCIhUnHg8BcZf1t3L7l9VO7KUgeCnXRAFL-0SHwU9yHoFEez4GKfmy7tEf9OtvD8mW1LskDcJGzH80IZpMoysSnTOoX2wkXizwFLAZ0LMjkao3kDsXRErGrRStaOlQ28orP8e8UpASAunk7iKnJd32NJbT9_eou4Ly63Q_T6Dvt_9Xlm-l62T2ZDH09pUZNvfZuUl9vU

Response Body:

{
    "success": true,
    "data": {
        "id": 1,
        "name": "test1",
        "email": "test@mail.ru",
        "email_verified_at": null,
        "created_at": "2020-04-11T06:17:53.000000Z",
        "updated_at": "2020-04-13T09:09:13.000000Z",
        "friends_of_this_user": [],
        "this_user_friend_of": [
            {
                "id": 3,
                "name": "test2",
                "email": "test2@mail.ru",
                "email_verified_at": null,
                "created_at": "2020-04-12T07:16:15.000000Z",
                "updated_at": "2020-04-12T07:16:15.000000Z",
                "pivot": {
                    "second_user": 1,
                    "first_user": 3,
                    "status": "confirmed"
                }
            },
            {
                "id": 5,
                "name": "test3",
                "email": "test3@mail.ru",
                "email_verified_at": null,
                "created_at": "2020-04-13T14:17:50.000000Z",
                "updated_at": "2020-04-13T14:17:50.000000Z",
                "pivot": {
                    "second_user": 1,
                    "first_user": 5,
                    "status": "confirmed"
                }
            }
        ],
        "friends": [
            {
                "id": 3,
                "name": "test2",
                "email": "test2@mail.ru",
                "email_verified_at": null,
                "created_at": "2020-04-12T07:16:15.000000Z",
                "updated_at": "2020-04-12T07:16:15.000000Z",
                "pivot": {
                    "second_user": 1,
                    "first_user": 3,
                    "status": "confirmed"
                }
            },
            {
                "id": 5,
                "name": "test3",
                "email": "test3@mail.ru",
                "email_verified_at": null,
                "created_at": "2020-04-13T14:17:50.000000Z",
                "updated_at": "2020-04-13T14:17:50.000000Z",
                "pivot": {
                    "second_user": 1,
                    "first_user": 5,
                    "status": "confirmed"
                }
            }
        ],
        "friends_of_this_user_blocked": [],
        "this_user_friend_of_blocked": [],
        "blocked_friends": []
    },
    "message": "friendship_invite_is_accepted"
}

or if such invite is not exist
   "message": "friendship_invite_is_not_found"


6. blockFriendshipInvite: метод:PUT, URL:http://testlaravel.loc/api/users/blockFriendshipInvite/6
Headers:
KEY:VALUE
Authorization:Bearer  eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiOWZjZWY3MDNiMDhhOTE5MzE5YWEzODQ5NTZlZWE4MjYwZWUyYTIwYmUyYzI4NDQ4YzMxMDc4ZTFjMjc2OGQ1NzhlMmY0ZDQ3ZDM4ZmJkYzIiLCJpYXQiOjE1ODY2Nzg1MzUsIm5iZiI6MTU4NjY3ODUzNSwiZXhwIjoxNjE4MjE0NTM1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.OBn2Rxidk6cI4fsbTCqEw99WxH5bOXvGx60SSDfeYuuyLxdWGn4urkmPLZL4qaTCfCxtAp7SWNL5Us5N8U0nKXlUxoSv8u1dKyyifSKTV2P4E5hUtDyz8F444v_J7aP59c2kpum7BV0ZkiWJrI-UBBsnFfkVRQWOpx2ITeHajpNeNPbR_x6V-aTd-StJ6fYN8WE0v2TWXdDxBZPrMHl_RTKr_sxJS2toq4hNVGMGsm5Cx367eXN7WeLlEBEJWSbt8UkHDabEFYXpR2uvqXfwoBaJJmlmV1KyTYrfhrzhmQT5QscAg1LpnrzaLkdXXYvMZYA1N0mDWxq773C7jA1A45yey4wIacJgdK63y59Nrpx-ZYUDGJe4_KORgXFEwq9pkQ2wl5gWekLI-T2TqL5dl8yu-QcvYBHIPYRqLaEQNFayDqVLIlZVXwOCPdrC6eDIUuhmVFSeEq-aPrS6BI2d3RVWstYAd5zjetgVCIhUnHg8BcZf1t3L7l9VO7KUgeCnXRAFL-0SHwU9yHoFEez4GKfmy7tEf9OtvD8mW1LskDcJGzH80IZpMoysSnTOoX2wkXizwFLAZ0LMjkao3kDsXRErGrRStaOlQ28orP8e8UpASAunk7iKnJd32NJbT9_eou4Ly63Q_T6Dvt_9Xlm-l62T2ZDH09pUZNvfZuUl9vU

Response Body:

{
    "success": true,
    "data": {
        "id": 1,
        "name": "test1",
        "email": "test@mail.ru",
        "email_verified_at": null,
        "created_at": "2020-04-11T06:17:53.000000Z",
        "updated_at": "2020-04-13T09:09:13.000000Z",
        "friends_of_this_user": [],
        "this_user_friend_of": [
            {
                "id": 3,
                "name": "test2",
                "email": "test2@mail.ru",
                "email_verified_at": null,
                "created_at": "2020-04-12T07:16:15.000000Z",
                "updated_at": "2020-04-12T07:16:15.000000Z",
                "pivot": {
                    "second_user": 1,
                    "first_user": 3,
                    "status": "confirmed"
                }
            }
        ],
        "friends": [
            {
                "id": 3,
                "name": "test2",
                "email": "test2@mail.ru",
                "email_verified_at": null,
                "created_at": "2020-04-12T07:16:15.000000Z",
                "updated_at": "2020-04-12T07:16:15.000000Z",
                "pivot": {
                    "second_user": 1,
                    "first_user": 3,
                    "status": "confirmed"
                }
            }
        ],
        "friends_of_this_user_blocked": [],
        "this_user_friend_of_blocked": [],
        "blocked_friends": []
    },
    "message": "friendship_invite_is_blocked"
}

or if such invite is not exist
   "message": "friendship_invite_is_not_found"

7. getInvites of authorised user: метод:GET, URL:http://testlaravel.loc/api/users/getInvites
Headers:
KEY:VALUE
Authorization:Bearer  eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiOWZjZWY3MDNiMDhhOTE5MzE5YWEzODQ5NTZlZWE4MjYwZWUyYTIwYmUyYzI4NDQ4YzMxMDc4ZTFjMjc2OGQ1NzhlMmY0ZDQ3ZDM4ZmJkYzIiLCJpYXQiOjE1ODY2Nzg1MzUsIm5iZiI6MTU4NjY3ODUzNSwiZXhwIjoxNjE4MjE0NTM1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.OBn2Rxidk6cI4fsbTCqEw99WxH5bOXvGx60SSDfeYuuyLxdWGn4urkmPLZL4qaTCfCxtAp7SWNL5Us5N8U0nKXlUxoSv8u1dKyyifSKTV2P4E5hUtDyz8F444v_J7aP59c2kpum7BV0ZkiWJrI-UBBsnFfkVRQWOpx2ITeHajpNeNPbR_x6V-aTd-StJ6fYN8WE0v2TWXdDxBZPrMHl_RTKr_sxJS2toq4hNVGMGsm5Cx367eXN7WeLlEBEJWSbt8UkHDabEFYXpR2uvqXfwoBaJJmlmV1KyTYrfhrzhmQT5QscAg1LpnrzaLkdXXYvMZYA1N0mDWxq773C7jA1A45yey4wIacJgdK63y59Nrpx-ZYUDGJe4_KORgXFEwq9pkQ2wl5gWekLI-T2TqL5dl8yu-QcvYBHIPYRqLaEQNFayDqVLIlZVXwOCPdrC6eDIUuhmVFSeEq-aPrS6BI2d3RVWstYAd5zjetgVCIhUnHg8BcZf1t3L7l9VO7KUgeCnXRAFL-0SHwU9yHoFEez4GKfmy7tEf9OtvD8mW1LskDcJGzH80IZpMoysSnTOoX2wkXizwFLAZ0LMjkao3kDsXRErGrRStaOlQ28orP8e8UpASAunk7iKnJd32NJbT9_eou4Ly63Q_T6Dvt_9Xlm-l62T2ZDH09pUZNvfZuUl9vU

Response Body:

{
    "success": true,
    "data": {
        "id": 1,
        "name": "test1",
        "email": "test@mail.ru",
        "email_verified_at": null,
        "created_at": "2020-04-11T06:17:53.000000Z",
        "updated_at": "2020-04-13T09:09:13.000000Z",
        "friend_requests": [
            {
                "id": 9,
                "first_user": 7,
                "second_user": 1,
                "acted_user": 1,
                "status": "pending",
                "created_at": "2020-04-14T09:46:15.000000Z",
                "updated_at": "2020-04-14T09:53:57.000000Z"
            },
            {
                "id": 10,
                "first_user": 6,
                "second_user": 1,
                "acted_user": 1,
                "status": "pending",
                "created_at": "2020-04-14T15:02:26.000000Z",
                "updated_at": "2020-04-14T15:17:08.000000Z"
            }
        ]
    },
    "message": "User with invites."
}
