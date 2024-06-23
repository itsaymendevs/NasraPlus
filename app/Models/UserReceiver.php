<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReceiver extends Model
{


    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }



    public function state()
    {
        return $this->belongsTo(State::class, 'stateId');
    }


    public function deliveryArea()
    {
        return $this->belongsTo(DeliveryRegion::class, 'deliveryRegionId');
    }




    // ----------------------------------------------------
    // ----------------------------------------------------




    public function orders()
    {
        return $this->hasMany(Order::class, 'receiverId', 'id');
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


} // end modal
