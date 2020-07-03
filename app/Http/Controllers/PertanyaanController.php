<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PertanyaanModel;
use App\Model\JawabanModel;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = PertanyaanModel::get_all();

        return view('pertanyaan.list', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $list = PertanyaanModel::insert($request);
        return redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pertanyaanId)
    {
        $data = PertanyaanModel::get_data($pertanyaanId);
        $jawaban = JawabanModel::get_all($pertanyaanId);
        return view('pertanyaan.show', compact('data', 'jawaban'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pertanyaanId)
    {
        $data = PertanyaanModel::get_data($pertanyaanId);
        return view('pertanyaan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pertanyaanId)
    {
        // dd($pertanyaanId);
        $update = PertanyaanModel::update($request, $pertanyaanId);
        return redirect('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pertanyaanId)
    {
        $delete = JawabanModel::destroy($pertanyaanId);
        $delete = PertanyaanModel::destroy($pertanyaanId);
        return redirect('/pertanyaan');
    }
}
