<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use Laravel\Cashier\Cashier;
use Stripe;
use Session;

class ProductController extends Controller
{

    /**
     * @var $productService
     */
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productService->getAll();
        return view('product/list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buy($id)
    {
        $product = $this->productService->getById($id);
        return view('product/buy', compact('product'));
    }

    public function payment($id, Request $request) {

        $product = $this->productService->getById($id);
        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $charge = Stripe\Charge::create ([
                "amount" => 100 * $product->price,
                "currency" => "INR",
                "source" => $request->stripeToken,
                "description" => "Test payment from laravel 8" 
        ]);

        Session::flash('success', 'Payment successful!');

        return back();

    }

}
