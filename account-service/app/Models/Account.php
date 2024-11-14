<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * The primary key associated with the table overrides id.
     *
     * @var string
     */
    protected $primaryKey = 'acct_id';

    /**
     * The attributes 
     *
     * @var array
     */
    protected $fillable = [
        'acct_id',
        'cust_id',
        'acct_number',
    ];

    /**
     * Get account(s) by cust_id
     *
     * @param int $customerId
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getByCustomerId($cust_id)
    {
        return $this->where('cust_id', $cust_id)->get();
    }

}

