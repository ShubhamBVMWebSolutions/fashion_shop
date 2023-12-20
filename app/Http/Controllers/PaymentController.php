<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;
use App\Models\Cart;
use App\Models\Order;
use Session;

class PaymentController extends Controller
{
    private $gateway;

     public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET_ID'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {
        try {
            $all_ids = json_decode($request->input('ids'));
            Session::put('all_ids', $all_ids);
            $formattedAmount = number_format($request->amount, 2, '.', ','); 
            $response=$this->gateway->purchase(array(
                'amount'=> $formattedAmount,
                'currency'=>env('PAYPAL_CURRENCY'),
                'returnUrl'=>url('success'),
                'cancelUrl'=>url('error')

            ))->send();
            if ($response->isRedirect()) {
                $response->redirect();
            }else{
                return $response->getMessage();
            }
        } catch (Exception $e) {
            echo($e);
            return $e->getMessage();
        }
    }

    public function success(Request $request)
    {
        $all_ids = Session::get('all_ids');
        $user_id =Session::get('user_id');
        if ($request->input('paymentId') &&$request->input('PayerID') ) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'=> $request->input('PayerID'),
                'transactionReference'=>$request->input('paymentId')
            ));

            $response = $transaction->send();
            if ($response->isSuccessful()) {
                $arr =$response->getData();
                $payment = new Payment;
                $payment->payment_id=$arr['id'];
                $payment->payer_id=$arr['payer']['payer_info']['payer_id'];
                $payment->payer_email=$arr['payer']['payer_info']['email'];
                $payment->product_id=$all_ids;
                $payment->amount=$arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status=$arr['state'];
                $payment->save();
                $order= new Order;
                $order->user_id=$user_id;
                $order->payment_id=$arr['id'];
                $order->save();
                $cartItem =cart::where('user_id',$user_id)->delete();
                return "Payment Is successfulll Your Transaction Id is :" .$arr['id'];
            }else{
                return $response->getMessage();
            }
        }else{
            return "Error ! Payment Is Declined ";
        }
    }

    public function error()
    {
        return "Payment Was Cancled !";
    }
}
