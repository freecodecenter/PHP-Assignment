<?php
$a=12;
function password($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
 echo substr(str_shuffle($chars),0,$length);

}
password($a);