<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The primary key associated with the table overrides id.
     *
     * @var string
     */
    protected $primaryKey = 'cust_id';

    /**
     * The attributes 
     *
     * @var array
     */
    protected $fillable = [
        'cust_id',
        'first_name',
        'last_name',
        'email',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'email', 'email');
    }


}

