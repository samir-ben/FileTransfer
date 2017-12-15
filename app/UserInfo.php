<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    
    protected $fillable = ['mail_destination', 'mail', 'message', 'url', 'path_file'];



}
