<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class BankController extends Controller
{

    public function index(){

        $user = Auth::user();

        return view('hasil-bank',[
            'bank' => Bank::all()
        ]);
    }

    public function inputbank(){

        if (Gate::allows('admin')) {
            return view('input-bank');
         } else {
            return redirect('/ilegal-page');
         }

    }

    public function prosesinputbank(Request $request){

        $validatedData = $request->validate([
            'nama_bank' => 'required',
            'singkatan' => 'required'
        ]);

        Bank::create($validatedData);

        return redirect('/hasil-bank')->with('success','Data Berhasil Ditambahkan');
        
    }

    public function editbank($id){
        $bank = Bank::find($id);
        return view('edit-bank',[
            'bank' => $bank
        ]);
    }

    public function updatebank(Request $request,$id){

        $bank = Bank::find($id);

        $validatedData = $request->validate([
            'nama_bank' => 'required',
            'singkatan' => 'required'
        ]);

        Bank::where('id',$bank->id)->update($validatedData);

        return redirect('/hasil-bank')->with('success','Data Berhasil Diubah');
        
    }

    public function destroy($id){
        $delete = Bank::findOrFail($id);
        Bank::destroy($delete->id);
        return redirect('/hasil-bank')->with('success','Data Berhasil Dihapus');

    }

}
