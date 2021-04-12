<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        protected $table = 'tbluser';

        protected $fillable = [
            'username', 'password'
        ];
        protected $primaryKey = 'userId';
    
    }