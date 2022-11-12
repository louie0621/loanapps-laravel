<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'firstname' => ['required', 'string', 'max:255'],
            'middleinitial' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'co_firstname' => ['required', 'string', 'max:255'],
            'co_middleinitial' => ['required', 'string', 'max:255'],
            'co_lastname' => ['required', 'string', 'max:255'],
            'daterelease' => ['required', 'string', 'max:255'],
            'loanamount' => ['required', 'string', 'max:255'],
            'loanpercent' => ['required', 'string', 'max:255'],
            'loanperiod' => ['required', 'string', 'max:255'],
            'loanmethod' => ['required', 'string', 'max:255'],
            'totalamount' => ['string', 'max:255'],
            'paymentrate' => ['string', 'max:255']

        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'firstname' => strip_tags($this->fname),
            'middleinitial' => strip_tags($this->mi),
            'lastname' => strip_tags($this->lname),
            'co_firstname' => strip_tags($this->cofname),
            'co_middleinitial' => strip_tags($this->comi),
            'co_lastname' => strip_tags($this->colname),
            'daterelease' => strip_tags($this->releasedate),
            'loanamount' => strip_tags($this->loanamount),
            'loanpercent' => strip_tags($this->loanrate),
            'loanperiod' => strip_tags($this->loanperiod),
            'loanmethod' => strip_tags($this->loanmethod),
            'totalamount' => strip_tags($this->totalamount),
            'paymentrate' => strip_tags($this->paymentrate),
        ]);
    }
}
