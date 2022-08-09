<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resorts= Resort::paginate(5);
        return view("resorts.index", compact('resorts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resorts = Resort::all();
        return view("resorts.create", compact('resorts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->validate([
        'name' => ['required','string','max:255'],
        'rent'  => ['required','numeric','gt:0'],
        'address' => ['required','string','max:255'],
        'description' => ['nullable','string'],
        'image' => ['file','nullable','image','max:2048']
        ]);

        if($request->hasFile('image')){
        $data['image']=$request->file('image')->store('ResortImages','public');
        }

        if(Resort::create($data))
        return redirect()->route('resorts.index')->withMessage('Resorts Information Saved Successfully');

        return back()->withErrors('Something went wrong');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resort  $resort
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resort= Resort::find($id);
        return view("resorts.show", compact('resort'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resort  $resort
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resort= Resort::find($id);
        return view("resorts.edit", compact("resort"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resort  $resort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{ 
            $resort = Resort::find($id);
            $data =$request->all();
            // if($request->hasFile('image')){
                    
            //         $destination ='storage/app/public/resorts/'.$resort->image;
            //         if(file_exists($destination)){
            //             unlink($destination);
            //         }
            //         $data['image']=$this->uploadImage($request->image,$request->name);
            //     }
            $resort->update($data);
            
        return redirect()->route('resorts.index')->withMessage('Data Updated Successfully');
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resort  $resort
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $resort=Resort::find($id);
        $resort->delete();
        return redirect()->route('resorts.index')->withMessage('Data Deleted Successfully');
    }
}
