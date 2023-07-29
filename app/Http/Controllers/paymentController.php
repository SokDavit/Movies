<?php

namespace App\Http\Controllers;

use App\Models\CreditCard;
use App\Models\Payment;
use App\Models\SubPlan;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class paymentController extends Controller
{
    public function paymentPicker(Request $request, string $id)
    {
        $plan = SubPlan::where('id', $id)->first();
        session(['plan_temp'=>$plan->id]);
        return view('movies.signup.paymentPicker', compact('plan'));
    }
    public function creditoption(Request $request)
    {
        $plan = SubPlan::where('id', session('plan_temp'))->first();
        return view('movies.signup.creditoption', compact('plan'));
    }
    //
    public function payment(Request $request)
    {
        // $request->validate([
        //     'cardnumber' => 'required',
        //     'expirationDate' => 'required|max:4',
        //     'cvv' => 'required|max:3',
        //     'firstname' => 'required|min:20|max:30',
        //     'lastname' => 'required|min:20|max:30',
        // ],[
        //     ''
        // ]);
        $user = User::where('id', session('user_id'))->first();
        $subPlan = SubPlan::where('id', session('plan_temp'))->first();
        //
        $input = $request->all();
        $card = CreditCard::create([
            'cardnumber' => $request->cardnumber,
            'expiration_date' => $request->expiration_date,
            'cvv' => $request->cvv,
            'cardHolderName' => $request->firstname . ' ' . $request->lastname,

        ]);
        //
        $sub = Subscription::create([
            'subPlanId' => $subPlan->id,
            'started_date' => Carbon::today(),
            'end_date' => Carbon::now()->addDays(30),
            'status' => true,
        ]);
        $user->subId = $sub->id;
        $user->save();

        $payment = Payment::create([
            'userId' => $user->id,
            'subId' => $sub->id,
            'payment_date' => Carbon::today(),
            'amount' => $subPlan->price,
            'cardId' => $card->id,
        ]);
        

        return Redirect::route('paymentSuccess');
    }
}
