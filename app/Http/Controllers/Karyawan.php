<?php

namespace App\Http\Controllers;

//use Barryvdh\DomPDF\PDF;
use PDF;
use App\Models\KaryawanM;
use Illuminate\Http\Request;

///use App\Http\Controllers\Karyawan;

class Karyawan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = KaryawanM::where('namadepan','LIKE','%' .$request->search.'%')->paginate(10);

        }else{
            $data = KaryawanM::paginate(10);
        }
        return view ('karyawan/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adddata()
    {
        return view ('karyawan/adddata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function senddata (Request $request)
    {
        $this->validate($request,[
            'namadepan' => 'required|min:3|max:20',
            'namabelakang' => 'required|min:3|max:15',
            'perusahaan' => 'required|min:5|max:50',
            'tlpn' => 'required|min:10|max:12',
        ]);
        //dd($request->all());
        KaryawanM::create($request->all());
        return redirect()->route('index')->with('success', 'The Data Has Been Successfully Changed Boss..')  ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function datadetails($id)
    {
        $data = KaryawanM::find($id);
        return view ('karyawan/datadetails', compact('data'));
    }
    public function changedata($id)
    {
        $data = KaryawanM::find($id);
        //dd($data);
        return view ('karyawan/changedata', compact('data'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = KaryawanM::find($id);
        //dd($data);
        $data->update($request->all());
        return redirect()->route('index')->with('success', 'The Data Has Been Successfully Update Boss..')  ;

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = KaryawanM::find($id);
        //dd($data);
        $data->delete();
        return redirect()->route('index')->with('success', 'The Data Has Been Successfully Delete Boss..')  ;

    }
    public function exportpdf()
    {
        $data = KaryawanM::all();
        view()->share('data', $data);
        $pdf = PDF::loadView('karyawan/datakaryawan-pdf');
        return $pdf->download('data.pdf');

    }
}
