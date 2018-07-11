<?php
namespace App\Services;

use App\Entity\Currency;
use App\Requests\CreateCurrencyRequest;

class CurrencyService implements CurrencyServiceInterface
{
    public function create(CreateCurrencyRequest $request): Currency
    {
        $newCurrency = new Currency();

//        $newCurrency->setName($request->getName());
        $newCurrency->name = $request->getName();

        $newCurrency->save();
        return $newCurrency;
    }
}