<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SampleRequest;
use Illuminate\Support\Facades\Storage;
use App\Services\SampleService;
use App\Models\Sample;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sample = new Sample();
        $sample = $sample::latest()->first();
        return view('owner.sample', compact('sample'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update(SampleRequest $request)
    {
        // $validated = $request->validated();
        // dd($validated);
        // dd($request);
        $name = $request->name;
        dd(null);
        $imageFile = $request->file; //一時保存
        // dd($imageFile);
        if (!is_null($imageFile) && $imageFile->isValid()) {
            //画像が設置されていない場合　かつ 値がしっかり取れている場合なら
            $fileNameToStore = SampleService::upload($imageFile, 'shops');
            // SampleService::eecho();
        }
        $sample = new Sample();

        if (!is_null($imageFile) && $imageFile->isValid()) {
            $sample->filename = $fileNameToStore;
        }
        $sample->save();



        // return redirect()->route('owner.sample.index', compact('name'));
        return redirect()->route('owner.sample.index')->with(['name' => $name, 'filename' => $fileNameToStore]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
