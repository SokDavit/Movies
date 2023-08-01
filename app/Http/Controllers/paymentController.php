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
        session(['plan_temp' => $plan->id]);
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
        $user = User::where('id', session('user_id'))->first();
        $subPlan = SubPlan::where('id', session('plan_temp'))->first();
        //
        $request->validate([
            'cardnumber' => 'required|integer|min:16',
            'expirationDate' => 'required|date_format:m/y',
            'cvv' => 'required|integer|min:3',
            'firstname' => 'required|min:2|max:20',
            'lastname' => 'required|min:2|max:20',
        ], [
            'expirationDate.required' => 'The expiration date is required',
            'expirationDate.date_format' => 'expiration date must be m/y',
            'cvv.max' => 'The CVV must be 3 digits long',
        ]);

        $input = $request->all();
        $card = CreditCard::create([
            'cardnumber' => $request->cardnumber,
            'expiration_date' => $request->expirationDate,
            'cvv' => $request->cvv,
            'cardHolderName' => $request->firstname . ' ' . $request->lastname,

        ]);
        //
        $sub = Subscription::create([
            'subPlanId' => $subPlan->id,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addDays(30),
            'status' => true,
        ]);
        $user->subId = $sub->id;
        $user->save();

        $payment = Payment::create([

            'userId' => $user->id,
            'subId' => $sub->id,
            'payment_date' => Carbon::now(),
            'amount' => $subPlan->price,
            'cardId' => $card->id,
        ]);

        return Redirect::route('paymentSuccess');
    }
}
