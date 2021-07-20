<?php

namespace App\Http\Middleware;

use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Closure;
use Illuminate\Http\Request;

class CheckCity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $customer = Customer::where('customerNumber',$request->id)->get()->first();
        if($customer->city == 'Nantes'){
            return $next($request);
        }else{
            dd('Bị cách ly!');
        }
        //Code logic middleware ở đây
    }
}
