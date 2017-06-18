<?php

namespace smnbst\pmm;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PmmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function postPaymentMethod(Request $request){

        PaymentMethod::create($request->all());//Create the Object

        return redirect()->back();
    }

    public function getPaymentMethod(){

        $results = PaymentMethod::all();
        $data = array('results'=>$results);

        return view('pmm::GUI_paymentMethod',compact('pmm'))->with($data);
    }
}
