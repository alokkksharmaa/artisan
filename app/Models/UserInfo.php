<?php

use Illuminate\DataBase\Eloquent\Model;

class UserInfo extends model{

    protected $fillable = [
        'name', 
        'age',
        'language'
    ];

}
?>
