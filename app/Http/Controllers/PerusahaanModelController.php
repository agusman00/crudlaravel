<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerusahaanModel;

class PerusahaanModelController extends Controller
{
    public function indexp(Request $request)
    {
        if($request->has('search')){
            $data = PerusahaanModel::where('nama','LIKE','%' .$request->search.'%')->paginate(10);

        }else{
            $data = PerusahaanModel::paginate(10);
        }
        return view ('perusahaan/index', compact('data'));
    }
    public function adddata()
    {
        return view ('perusahaan/adddata');
    }
    public function senddata (Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|min:5|max:30',
            'email' => 'required|min:5|max:20',
            'foto' => 'required|mimes:jpg,bmp,png',
        ]);
        //dd($request);

        $data= PerusahaanModel::create($request->all());
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('logo/', $request->file('foto')->getClientOriginalName());
            $data -> foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        };
        return redirect()->route('indexp')->with('success', 'The Data Has Been Successfully Changed Boss..')  ;
    }
    public function datadetails($id)
    {
        $data = PerusahaanModel::find($id);
        //dd($data);
        return view ('perusahaan/datadetails', compact('data'));
    }

    public function changedata($id)
    {
        $data = PerusahaanModel::find($id);
        //dd($data);
        return view ('perusahaan/changedata', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required|min:5|max:30',
            'foto' => 'mimes:jpg,jpeg,bmp,png,svg',
        ]);
        $data = PerusahaanModel::find($id);
        //dd($data);
        $data->update($request->all());
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('logo/', $request->file('foto')->getClientOriginalName());
            $data -> foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        };
        return redirect()->route('indexp')->with('success', 'The Data Has Been Successfully Update Boss..')  ;

    }

    public function delete($id)
    {
        $data = PerusahaanModel::find($id);
        //dd($data);
        $data->delete();
        return redirect()->route('indexp')->with('success', 'The Data Has Been Successfully Delete Boss..')  ;

    }

}
