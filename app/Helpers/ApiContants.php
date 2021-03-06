<?php


namespace App\Helpers;


class ApiConstants
{
    const SERVER_ERR_CODE = 500;
    const BAD_REQ_ERR_CODE = 400;
    const AUTH_ERR_CODE = 401;
    const NOT_FOUND_ERR_CODE = 404;
    const VALIDATION_ERR_CODE = 422;
    const GOOD_REQ_CODE = 200;
    const DEFAULT_USER_TYPE = 2; // represents "User or Customer"
    const VENDOR_USER_TYPE = 1;// represents "Vendor"
    const ADMIN_USER_TYPE = 0;// represents "Admin"
    const AUTH_TOKEN_EXP = 60; // auth otp token expiry in minutes
    const OTP_DEFAULT_LENGTH = 7;
    const MAX_PROFILE_PIC_SIZE = 2048;

    const MALE = 'Male';
    const FEMALE = 'Female';
    const OTHERS = 'Others';

    const PAGINATION_VAL = 20;

    const PENDING_TRANSACTION = 0;
    const SUCCESSFUL_TRANSACTION = 1;
    const FAILED_TRANSACTION = 2;
    const CANCELLED_TRANSACTION = 3;
    const GG_PROVIDER = 'google';
    const FB_PROVIDER = 'facebook';

    const PAGINATION_SIZE_WEB = 50;
    const PAGINATION_SIZE_API = 20;


    const ACTIVE_STATUS = "Active";
    const INACTIVE_STATUS = "Inactive";
    const PENDING_STATUS = "Pending";




    public static function ignoreApiKeysLog()
    {
        return ['token', '_token', 'password', 'auth_token', 'verified', 'registered'];
    }
}
