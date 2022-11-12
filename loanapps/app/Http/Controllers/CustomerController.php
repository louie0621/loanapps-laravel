<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('customer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        //
        $data = new customer();
        $data->firstname = $request->fname;
        $data->middleinitial = $request->mi;
        $data->lastname = $request->lname;
        $data->co_firstname = $request->cofname;
        $data->co_middleinitial = $request->mi;
        $data->co_lastname = $request->lname;
        $data->daterelease = $request->releasedate;
        $data->loanamount = $request->loanamount;
        $data->loanpercent = $request->loanrate;
        $data->loanperiod = $request->loanperiod;
        $data->loanmethod = $request->loanmethod;
        $data->totalamount = $request->loantotalamount;
        $data->paymentrate = $request->loanpaymentrate;
        $data->save();

        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
    }
}
