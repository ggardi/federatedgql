<?php

namespace App\GraphQL\Resolvers;

use Illuminate\Support\Facades\App;
use Log;

class Customer
{
    public function create($root, array $args)
    {
        Log::info('Customer resolver started');
        Log::info('Received Arguments:');
        Log::info($args);

        $password = \Illuminate\Support\Arr::pull($args, 'password');

        Log::info('Arguments after pulling password:');
        Log::info($args);

        $customer = \App\Models\Customer::create($args);

        if ($password) {
            $name = $args['first_name'] . ' ' . $args['last_name'];
            $userArgs = array_merge($args, ['name' => $name, 'password' => $password]);
            $user = \App\Models\User::create($userArgs);
        }

        // Returning the created Customer
        return $customer;
    }
}
