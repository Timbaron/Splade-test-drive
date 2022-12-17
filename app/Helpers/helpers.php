<?php
    if(!function_exists('GetRole')) {
        function GetRole($role) {
            $roles = ['admin', 'Manager', 'Developer', 'Editor', 'Writer'];
            // return $roles[0];
            if(!isset($role)){
                return 'NA';
            }
            return $roles[$role];

        }
    }

    if(!function_exists('GetGender')) {
        function GetGender($gender) {
            if($gender == '0'){
                return 'Male';
            }
            return 'Female';

        }
    }

?>
