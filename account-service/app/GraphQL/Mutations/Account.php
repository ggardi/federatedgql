<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\App;
use Log;

class Account
{
    public function create($root, array $args)
    {
        Log::info('Create Account resolver started');
        Log::info('Received Arguments:');
        Log::info($args);

        $account = \App\Models\Account::create($args);

        return $account;
    }

}

