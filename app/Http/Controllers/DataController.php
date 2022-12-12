<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function show (){
       $data = Data::all();
       return view('data',['data'=>$data]);
    }

    public function create(){
        return view('datachange.create');
    }

    public function store(Request $request){
       Data::create([
        'productId' =>$request->productId,
        'productName'=>$request->productName,
        'amount'=>$request->amount,
        'customerName'=>$request->customerName ,
        'status'=>$request->status,
        'transactionDate'=>$request->transactionDate,
        'createBy'=>$request->createBy,
        'createOn'=>$request->createOn
       ]);

        return redirect(route('data.index'))->with('success','Data berhasil dibuat');

    }

    public function returnDetails($id)
    {
        $data = DB::table(table:'data')
        ->select()
        ->join('status','status.id','=','data.status')
        ->where('data.id','=', $id)
        ->get();

        return view('datachange.detail',['data'=>$data]);
    }

    public function edit($id){
        return view('datachange.edit', [
            'data' => Data::where('id',$id)->first()
        ]);
    }

    public function update(Request $request, $id){
        Data::where('id',$id)->update([
            'productId' =>$request->productId,
            'productName'=>$request->productName,
            'amount'=>$request->amount,
            'customerName'=>$request->customerName ,
            'status'=>$request->status,
            'transactionDate'=>$request->transactionDate,
            'createBy'=>$request->createBy,
            'createOn'=>$request->createOn
        ]);

        return redirect(route('data.index'));
    }

    public function delete($id){
       Data::destroy($id);
       return redirect(route('data.index'))->with('message','Data berhasil dihapus');
    }

}
