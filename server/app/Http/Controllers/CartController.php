<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Santyoku;

class CartController extends Controller
{
   public function show($id) //追加
   {
    
        
        $santyoku = Santyoku::find($id);
        return view('carts.show', ['santyoku' => $santyoku]);
   }

       public function destroy($id)
    {
        $santyoku = Santyoku::find($id);
        $santyoku->delete();
        return redirect('/santyokus');
    }
}
