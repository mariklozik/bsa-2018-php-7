<?php
namespace App\Services;

use App\Requests\CreateWalletRequest;
use App\Entity\Wallet;
use App\Entity\Money;
use App\Entity\Currency;
use Illuminate\Support\Collection;

class WalletService implements WalletServiceInterface
{
    public function findByUser(int $userId): ?Wallet
    {
        return Wallet::where('user_id', $userId)->first();
    }

    public function create(CreateWalletRequest $request): Wallet
    {
        $wallet = Wallet::where('user_id', $request->getUserId())->first();

        if (!is_null($wallet)) throw new \LogicException;

        $newWallet = new Wallet();
        $newWallet->user_id = $request->getUserId();
        $newWallet->save();
        return $newWallet;
    }

    public function findCurrencies(int $walletId): Collection
    {
        $currency = array();
        $wallet = Money::where('wallet_id', $walletId)->get();
        foreach ($wallet as $w) {
            $currency[] = Currency::find($w->currency_id);
        }
        return collect($currency);
    }
}