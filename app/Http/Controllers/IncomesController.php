<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incomes;

class IncomesController extends Controller
{
    //
    public function create(){
        $url = url('income');
        $title = "Income Registration";
        $incomes = null;
        $data = compact('incomes','title','url');
        return view('income')->with($data);
    }

    public function store(Request $request){
        $request->validate(
            [
                'company' => 'required',
                'amount' => 'required',
                'date' => 'required'
            ]
        );

        $incomes = new Incomes;

        $incomes->company = $request['company'];
        $incomes->notes = $request['notes'];
        $incomes->amount = $request['amount'];
        $incomes->date = $request['date'];

        $incomes->save();

        return redirect('/income');
    }

    public function view(){
        $incomes = Incomes::all();
        $data = compact('incomes');
        return view('income-view')->with($data);
    }

    public function delete($id){
        $incomes = Incomes::find($id);
        if(!is_null($incomes)){
            $incomes->delete();
        }

        return redirect('income');
    }

    public function edit($id){
        $incomes = Incomes::find($id);
        if (!is_null($incomes)) {
            // FOUND
            $url = url('/income/update')."/".$id;
            $title = "Income Update";
            $data = compact('incomes','url','title');
            return view('income')->with($data);
        }else{
            // NOT FOUND
            return redirect('income');
        }
    }

    public function update($id,Request $request){
        $incomes = Incomes::find($id);

        $request->validate(
            [
                'company' => 'required',
                'amount' => 'required',
                'date' => 'required'
            ]
        );
        $incomes->company = $request['company'];
        $incomes->notes = $request['notes'];
        $incomes->amount = $request['amount'];
        $incomes->date = $request['date'];

        $incomes->save();
        return redirect('/income');
    }
}
