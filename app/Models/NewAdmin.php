<?php

namespace App\Models;
 
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NewAdmin extends Model
{
    use Notifiable;
    
    protected $table = 'admins';
    protected $fillable = ['first_name','last_name','username','email', 'password','picture', ];
    protected $hidden = ['password', 'remember_token',]; 
    protected $casts = ['email_verified_at' => 'datetime', ];
        
}
