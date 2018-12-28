<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {

        $pros = Product::all();
        $cats = Category::all();
        $cateDis = array();
        foreach ($cats as $cat) {
            $cateDis[$cat->id] = $cat;
        }
        $cateDis[0] = new Category();
        $cateDis[0]->Name = "Không Có";
        $data = array();
        $data['products'] = $pros;
        $data['cateDis'] = $cateDis;
        return view('product.index', $data);
    }

    public function create()
    {
        $cats = Category::all();
        $data = array();
        $data['cats'] = $cats;
        return view('product.create', $data);
    }

    public function edit($id)
    {
        $cats = Category::all();
        $pro = Product::find($id);
        $data = array();
        $data['pro'] = $pro;
        $data['cats'] = $cats;
        return view('product.edit', $data);
    }

    public function delete($id)
    {
        $pro = Product::find($id);
        $data = array();
        $data['pro'] = $pro;
        return view('product.delete', $data);
    }

    public function destroy($id)
    {
        $pro = Product::find($id);
        $pro->delete();
        return redirect('/product');
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $pro = Product::find($id);
        $pro['name'] = $input['name'];
        $pro['price'] = $input['price'];
        $pro['cat_id'] = $input['cat_id'] != null ? $input['cat_id'] : 0;
        $pro->save();
        return redirect('/product');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $pro = new Product();
        $pro->name = $input['name'];
        $pro->price = $input['price'];
        $pro->cat_id = ($input['cat_id'] != null ? $input['cat_id'] : 0);
        $pro->save();
        return redirect("/product");
    }

    public function DeleteCart($id){
        \Cart::remove($id);
        return redirect('/product');
    }
    public function AddCart($id, Request $request)
    {
        $input = $request->all();
        $quality = $input['quality'];
        $pro = Product::find($id);

        if (\Cart::get($id) == null) {
            \Cart::add(array(
                'id' => $pro['id'],
                'name' => $pro['name'],
                'price' => $pro['price'],
                'quantity' => $quality,
                'attributes' => array()
            ));
        } else {
            \Cart::update($id, array(
                'quantity' => $quality, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
            ));
        }


//        $items=\Cart::get(459);
//        $summedPrice = \Cart::get(459)->getPriceSum();
        //$item=\Cart::getContent();
        return redirect('/product');


    }
}
