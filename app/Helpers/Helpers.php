<?php
namespace App\Helpers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Helpers
{


    /**
     * Get applicaiton access module lists.
     *
     * @return object.
     */

    public static function getAccessModules()
    {

        $appModules = [

            'dashboard' => [
                'title' => 'Dashboard',
                'permission' => ['view'],
            ],

            'user' => [
                'title' => 'User',
                'permission' => ['view', 'create', 'update', 'delete', 'deactive', 'active', 'resend_univerfied_email'],
            ],

            'user_role' => [
                'title' => 'User Role',
                'permission' => ['view', 'create', 'update', 'delete'],
            ],


            'setting' => [
                'title' => 'Settings',
                'permission' => ['view'],
            ],

        ];

        return $appModules;
    }

    /**
     * Get applicaiton settings information.
     *
     * @return array.
     */
    public static function getAppSetitngs()
    {

        return Setting::first();
    }

    public static function getNameLetters($name)
    {
        if (!empty($name)) {
            $name = trim($name);
            if (str_contains($name, ' ')) {
                $name = explode(' ', $name);
                $name = mb_substr($name[0], 0, 1) . mb_substr($name[1], 0, 1);
                return strtoupper($name);
            } else {
                return strtoupper(mb_substr($name, 0, 2));
            }
        }
        return "--";
    }

    /**
     * Get user role name.
     *
     * @return string
     */
    public static function getCurrentRoleName()
    {

        $loginid = Auth::id();
        $get_user = User::find($loginid);
        return $get_user->role->role_name;
    }


    /**
     * Get current user id.
     *
     * @return integer
     */
    public static function currentLoggedUserID()
    {
        $loginid = Auth::id();
        return (int)$loginid;
    }


    /**
     * Check logged user access permission.
     *
     * @access protected
     *
     * @return boolean
     */
    public static function hasAccessPermission($name)
    {
        $hasAccess = null;
        if (isset(Auth::user()->role)) {
            $getMenuOptions = Auth::user()->role->show_option;
            $getArrray = explode(',', $getMenuOptions);

            if (in_array($name, $getArrray)) {
                $hasAccess = true;
            }
        }

        return $hasAccess;
    }


}


