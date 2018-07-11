<?php
namespace App\Services;

use App\Requests\CreateMoneyRequest;
use App\Entity\Money;

class MoneyService implements MoneyServiceInterface
{
    public function create(CreateMoneyRequest $request): Money
    {
        $newMoney = new Money();
        $newMoney->currency_id = $request->getCurrencyId();
        $newMoney->wallet_id = $request->getWalletId();
        $newMoney->amount = $request->getAmount();

        $newMoney->save();

        return $newMoney;
    }

    public function maxAmount(): float
    {
        return Money::max('amount');
    }
}