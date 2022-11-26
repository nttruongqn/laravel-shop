<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\Order;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends FrontEndController
{
    public function addProduct(Request $request, $id)
    {
        $product = Product::select('pro_name', 'id', 'pro_price', 'pro_sale', 'pro_avatar')->find($id);
        if (!$product) return redirect('/');

        $price = $product->pro_price;
        if ($product->pro_sale) {
            $price = $price * (100 - $product->pro_sale) / 100;
        }
        Cart::add([
            "id" => $id,
            "name" => $product->pro_name,
            "qty" => 1,
            "price" => $price,
            "options" => [
                'avatar' => $product->pro_avatar,
                'sale' => $product->pro_sale,
                'price_old' => $product->pro_price
            ],
        ]);
        return redirect()->back();
    }

    public function deleteProductItem($key)
    {
        Cart::remove($key);
        return redirect()->back();
    }

    public function getListShoppingCart()
    {
        $products = Cart::content();
        return view('shopping.index', compact('products'));
    }

    public function getFormPay()
    {
        $products = Cart::content();
        return view('shopping.pay', compact('products'));
    }

    // Save Shopping Cart Info
    public function saveShoppingCartInfo(Request $request)
    {
        $totalMoney = str_replace(',', '', Cart::subtotal(0,3));
        $transactionId = Transaction::insertGetId([
            'tr_user_id' => get_data_user('web'),
            'tr_total' => (int)$totalMoney,
            'tr_note' => $request->note,
            'tr_address' => $request->address,
            'tr_phone' => $request->phone,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if ($transactionId) {
            $products = Cart::content();
            foreach ($products as $product) {
                Order::insert([
                    'or_transaction_id' => $transactionId,
                    'or_product_id' => $product->id,
                    'or_qty' => $product->qty,
                    'or_price' => $product->options->price_old,
                    'or_sale' => $product->options->sale
                ]);
            }
        }
        Cart::destroy();
        return redirect()->route('home');
    }
}
