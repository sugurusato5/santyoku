<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santyoku;
use App\Http\Requests\SantyokuRequest;

class SantyokuController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->title;

        $query = Santyoku::query();
        if($title) {
            $query->where('title', 'like', '%' . $title . '%');
            dd($query->all());
            // dd($query);
        } 
        

        $santyokus = $query->simplepaginate(10);
        
        return view('santyokus.index', compact('santyokus'));
    }

    public function show($id)
    {
        $santyoku = Santyoku::find($id);
        return view('santyokus.show', ['santyoku' => $santyoku]);
    }
    
    public function edit($id)
    {
        $santyoku = Santyoku::find($id);
        return view('santyokus.edit', ['santyoku' => $santyoku]);
    }

    public function create()
    {
        return view('santyokus.create');
    }

    public function store(SantyokuRequest $request)
    {
        if ($file = $request->image_url) {
            $fileName = date("Ymd_His_") . $file->getClientOriginalName();
            $target_path = public_path('sorage/santyoku_image/');
            $filePath = $file->store('public');
            $fileName = $request->image_url->storeAs('storage/santyoku_image', $fileName);
        } else {
            $fileName = "";
        }


        $santyokus = new Santyoku;
        // 値の用意
        $santyokus->title = $request->title;
        $santyokus->description = $request->description;
        $santyokus->price = $request->price;
        $santyokus->image_url = $fileName;
        $santyokus->img_path = $fileName;
        $santyokus->timestamps =true;
        // インスタンスに値を設定して保存
        $santyokus->save();
        // 登録したらindexに戻る
        return view('santyokus.index', compact('santyokus'));
        // return redirect()->route('santyokus', compact('santyokus'));
    }

    public function update(SantyokuRequest $request, $id)
    {
        $santyoku = Santyoku::find($id);
        // 値の用意
        $santyoku->title = $request->title;
        $santyoku->description = $request->description;
        $santyoku->price = $request->price;
        $santyoku->image_url = $request->image_url;
        $santyoku->img_path = $request->img_path;
        $santyoku->timestamps =false;
        // インスタンスに値を設定して保存
        $santyoku->save();
        // 登録したらindexに戻る
        return redirect('/santyokus');
    }

    public function destroy($id)
    {
        $santyoku = Santyoku::find($id);
        $santyoku->delete();
        return redirect('/santyokus');
    }

}
