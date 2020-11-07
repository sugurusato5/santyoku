<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santyoku;
use App\Http\Requests\SantyokuRequest;
use App\Models\Cart;

class SantyokuController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->title;
        $category = $request->category;

        $query = Santyoku::query();
        if($title) {
            $query->where('title', 'like', '%' . $title . '%');
        } 
        if($category) {
            $query->where('category', 'like', '%' . $category . '%');
        } 

        $santyokus = $query->simplepaginate(9);
        
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
            $target_path = public_path('storage/santyoku_image/');
            $filename = $request->image_url->storeAs('public/santyoku_image', $fileName);
        } else {
            $fileName = "";
        }
        $santyoku = new Santyoku;
        // 値の用意
        $santyoku->title = $request->title;
        $santyoku->description = $request->description;
        $santyoku->price = $request->price;
        $santyoku->category = $request->category;
        $santyoku->image_url = 'storage/santyoku_image/' . $fileName;
        $santyoku->img_path = $fileName;

        // $santyoku->timestamps =false;
        // インスタンスに値を設定して保存
        $santyoku->save();
        // 登録したらindexに戻る
        return redirect('/santyokus');
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
        // $santyoku = Santyoku::find($id);
        // $santyoku->delete();
        // return redirect('/santyokus');
    }

    public function myCart()
   {
       $my_carts = Cart::all();
       return view('mycarts',compact('my_carts'));
   }
}
