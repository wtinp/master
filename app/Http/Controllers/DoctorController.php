<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        // $this->authorize('manager');
        $doctors = Doctor::orderBy('txtFn','DESC')->get();
        return view('doctors',compact('doctors'));
        
    }

    public function addDoctor(Request $request)
    {
        $doctor = new Doctor();
        $doctor->txtTitle = $request->input('txtTitle');
        $doctor->txtFn = $request->input('txtFn');
        $doctor->txtMn = $request->input('txtMn');
        $doctor->txtLn = $request->input('txtLn');
        $doctor->txtPe = $request->input('txtPe');
        $doctor->txtSe = $request->input('txtSe');
        $doctor->txtPp = $request->input('txtPp');
        $doctor->txtSn = $request->input('txtSn');
        $doctor->txtWa = $request->input('txtWa');
        $doctor->txtAo = $request->input('txtAo');
        $doctor->txtAt = $request->input('txtAt');
        $doctor->txtCity = $request->input('txtCity');
        $doctor->txtState = $request->input('txtState');
        $doctor->country = $request->input('country');
        $doctor->txtZc = $request->input('txtZc');
        $doctor->txtPc = $request->input('txtPc');
        $doctor->txtCd = $request->input('txtCd');
        $doctor->txtSpcl1 = $request->input('txtSpcl1');
        $doctor->txtBc = $request->input('txtBc');
        $doctor->dateBce1 = $request->input('dateBce1');
        $doctor->txtBc2 = $request->input('txtBc2');
        $doctor->dateBce2 = $request->input('dateBce2');
        $doctor->txtBc3 = $request->input('txtBc3');
        $doctor->dateBce3 = $request->input('dateBce3');
        $doctor->txtBc4 = $request->input('txtBc4');
        $doctor->txtEmp = $request->input('txtEmp');
        $doctor->txtHp = $request->input('txtHp');
        $doctor->txtOp = $request->input('txtOp');
        $doctor->txtLan = $request->input('txtLan');
        $doctor->txtGen = $request->input('txtGen');
        $doctor->txtEth = $request->input('txtEth');
        $doctor->txtCoi = $request->input('txtCoi');
        $doctor->txtAd = $request->input('txtAd');
        $doctor->txtAh = $request->input('txtAh');
        $doctor->txtOai = $request->input('txtOai');
        $doctor->txtHow = $request->input('txtHow');
        $doctor->txtContactMeth = $request->input('txtContactMeth');
        $doctor->txtComm = $request->input('txtComm');
        $doctor->save();
        return response()->json($doctor);
    }
}
