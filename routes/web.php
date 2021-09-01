<?php

use App\Http\Controllers\WebhookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Paddle\Cashier;
use Laravel\Paddle\ProductPrice;

Route::get('/', function () {
    $prices = Cashier::productPrices([
        $spark = 15769,
        $forge = 15767,
        $envoyer = 15773,
        $vapor = 15771,
    ])->keyBy(function (ProductPrice $price) {
        return $price->product_id;
    });

    return view('welcome', compact('prices'));
})->name('home');

// Route::post('/paddle/webhook', [WebhookController::class, 'handleWebhook'])->name('cashier.webhook');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (Request $request) {
    $receipts = $request->user()->receipts;

    return view('dashboard', compact('receipts'));
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/product/{productId}', function (Request $request, $productId) {
        $product = Cashier::productPrices((int) $productId)->first();
        $amount = $product->price()->gross();

        $payLink = $request->user()->chargeProduct((int) $productId);

        if ($receipts = $request->user()->receipts()->count()) {
            $amount = 50 + (5 * $receipts);
            $payLink = $request->user()->charge($amount, 'Personal ' . $product->product_title);

            // $amount = 50 + (5 * $orders);
            // $payLink = $request->user()->charge([
            //     'EUR:' . $amount,
            //     'USD:'. ($amount + 20),
            // ], 'Personal ' . $product->product_title);

            $amount = Cashier::formatAmount($amount * 100, 'EUR');
        }

        return view('product', compact('product', 'payLink', 'amount'));
    })->name('product');
});
