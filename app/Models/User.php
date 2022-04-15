<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'usertype',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function properties(){
        return $this->hasMany(Properties::class)->orderBy('created_at', 'DESC');
    }
    public function agentprofile(){
        return $this->hasOne(AgentProfile::class);
    }

    public function favourites(){
        return $this->hasMany(Favourites::class);
    }

    public function Deals(){
        return $this->hasMany(Deal::class, 'buyer_id', "id");
    }

    public function AgentDeals(){
        return $this->hasMany(Deal::class, 'agent_id', "email")->orderBy('id', 'DESC');
    }
    public function Messages(){
        return $this->hasMany(Email::class, 'to', 'id');
    }
    public function UnreadMessages(){
        return $this->hasMany(Email::class, 'to', 'id')->where("status", "Open");
    }

    public function Contacts(){
        return $this->hasMany(Contact::class)->orderBy("id", "DESC");
    }
}
