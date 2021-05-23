<?php

  

namespace App\Http\Controllers;


use App\Models\Provider;

use Illuminate\Http\Request;



use Illuminate\Support\Facades\Log;

  

class ProviderController extends Controller

{   
    public function index()
    {
        // $this->authorize('manager');
        $providers = Provider::orderBy('txtFn','DESC')->get();
        return view('providers',compact('providers'));
        
    }

    public function providerRequest(Request $request)
    {
        $provider = new Provider();
        $provider->txtTitle = $request->input('txtTitle');
        $provider->txtFn = $request->input('txtFn');
        $provider->txtMn = $request->input('txtMn');
        $provider->txtLn = $request->input('txtLn');
        $provider->txtPe = $request->input('txtPe');
        $provider->txtSe = $request->input('txtSe');
        $provider->txtPp = $request->input('txtPp');
        $provider->txtSn = $request->input('txtSn');
        $provider->txtWa = $request->input('txtWa');
        $provider->txtAo = $request->input('txtAo');
        $provider->txtAt = $request->input('txtAt');
        $provider->txtCity = $request->input('txtCity');
        $provider->txtState = $request->input('txtState');
        $provider->country = $request->input('country');
        $provider->txtZc = $request->input('txtZc');
        $provider->txtPc = $request->input('txtPc');
        $provider->txtCd = $request->input('txtCd');
        $provider->txtSpcl1 = $request->input('txtSpcl1');
        $provider->txtBc = $request->input('txtBc');
        $provider->dateBce1 = $request->input('dateBce1');
        $provider->txtBc2 = $request->input('txtBc2');
        $provider->dateBce2 = $request->input('dateBce2');
        $provider->txtBc3 = $request->input('txtBc3');
        $provider->dateBce3 = $request->input('dateBce3');
        $provider->txtBc4 = $request->input('txtBc4');
        $provider->txtEmp = $request->input('txtEmp');
        $provider->txtHp = $request->input('txtHp');
        $provider->txtOp = $request->input('txtOp');
        $provider->txtLan = $request->input('txtLan');
        $provider->txtGen = $request->input('txtGen');
        $provider->txtEth = $request->input('txtEth');
        $provider->txtCoi = $request->input('txtCoi');
        $provider->txtAd = $request->input('txtAd');
        $provider->txtAh = $request->input('txtAh');
        $provider->txtOai = $request->input('txtOai');
        $provider->txtHow = $request->input('txtHow');
        $provider->txtContactMeth = $request->input('txtContactMeth');
        $provider->txtComm = $request->input('txtComm');
        $provider->save();
        return response()->json($provider);
    }

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    // public function providerRequest()

    // {

    //     return view('providerRequest');

    // }

     

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function providerRequestPost(Request $request)

    {

        return $request->all();

    }

}