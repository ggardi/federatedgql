<?php 
namespace App\GraphQL\ReferenceResolvers;

use Log;

# This is a test placeholder for reference resolvers.

# Reference resolvers return the object from representations (request from other subgraphs)
# When no resolver class can be found, Lighthouse will attempt to find the model 
# that matches the type __typename, using the namespaces 
# configured in lighthouse.namespaces.models.

final class Test 
{
    public function __invoke($representation): array
    {
        Log::info('Customer reference resolver started');
        Log::info('Representation:');
        Log::info($representation);

        // $cust_id= Arr::get($representation, 'cust_id');
        // $customer = Customer::byID($cust_id)->toArray();

        // return Arr::add($customer, '__typename', 'Customer');
        return [];
    }
}