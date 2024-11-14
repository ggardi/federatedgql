<?php declare(strict_types=1);

namespace App\GraphQL\Types\Account;
use Log;

# Required resolver to generate the representationss of customer entity
final class Customer
{
    public function __invoke($account): array
    {
        Log::info('customer resolver in account');
        Log::info($account);

        return [
            '__typename' => 'Customer',
            'cust_id' => $account->cust_id,
        ];
    }
}
