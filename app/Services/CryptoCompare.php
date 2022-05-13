<?php
namespace App\Services;
use Illuminate\Support\Facades\Http;
class CryptoCompare
{

    protected $http;
    const url = "https://min-api.cryptocompare.com/data";
    const valid_coins = ['BTC', 'ETH', 'USDT', 'BUSD', 'USDC', 'BNB', 'XRP', 'SOL', 'UST', 'ADA','AVAX', 'TRX', 'DOGE', 'LTC', 'SHIB','DOT', 'LUNA'];
    const valid_currencies = ['USD', 'EUR', 'KZT'];
    public function __construct(Http $http)
    {
        $this->http = $http;
    }
    public function getPrice($coin, $currency)
    {
        try{
            assert(in_array($coin, self::valid_coins) && in_array($currency, self::valid_currencies));
        }
        catch(InvalidArgumentException $e){
            return false;
        }
        return \GuzzleHttp\json_decode($this->http::get(self::url.'/price?fsym='.$coin.'&tsyms='.$currency)->body(), true)["$currency"];
    }

}
