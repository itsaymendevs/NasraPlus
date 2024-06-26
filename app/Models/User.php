<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;



    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }



    public function devices()
    {
        return $this->hasMany(UserDevice::class, 'userId');
    }


    public function receivers()
    {
        return $this->hasMany(UserReceiver::class, 'userId');
    }

    public function favorites()
    {
        return $this->hasMany(UserFavorite::class, 'userId');
    }



    // ----------------------------------------------------
    // ----------------------------------------------------





    public function orders()
    {
        return $this->hasMany(Order::class, 'userId');
    }


    public function completedOrders()
    {
        return $this->orders()->where('orderStatus', 'Completed');
    }


    public function canceledOrders()
    {
        return $this->orders()->where('orderStatus', 'Canceled');
    }


    public function pendingOrders()
    {
        return $this->orders()->where('orderStatus', 'Pending');
    }


    public function processingOrders()
    {
        return $this->orders()->where('orderStatus', 'Processing');
    }




    // ----------------------------------------------------
    // ----------------------------------------------------





    public function country()
    {
        return $this->belongsTo(Country::class, 'countryId');
    }


    public function state()
    {
        return $this->belongsTo(State::class, 'stateId');
    }


    public function deliveryRegion()
    {
        return $this->belongsTo(DeliveryRegion::class, 'deliveryRegionId');
    }




    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


} // end modal
