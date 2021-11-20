<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Tenant\Product;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\ArticuloFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ArticuloController extends Controller
{
     

    public function __construct()
    {

    }

     public function index(){

        $articulos=Product::all();
        
        return view('almacen.articulo.index',["articulos"=>$articulos]);

     }

     public function create(){
         return view("almacen.articulo.create");
     }

     public function store(ArticuloFormRequest $request ){
        
        $articulos=new Product;
        $articulos->name=$request->get("name");
        $articulos->price=$request->get("price");
        $articulos->save();
        return Redirect::to('adm/articulos');   

     }

     public function show($id)
     {
         return view("almacen.articulo.show",["articulos"=>Product::findOrFail($id)]);
     }

     public function edit($id){
    
       return view('almacen.articulo.edit',["articulos"=>Product::findOrFail($id)]);
     }

     public function update(ArticuloFormRequest $request,$id)
     {
         $articulos=Product::findOrFail($id);
         $articulos->name=$request->get('name');
         $articulos->price=$request->get('price');
         $articulos->update();
         return Redirect::to('adm/articulos');
     }
    

     public function destroy($id)
     {
         $articulos=Product::findOrFail($id);
       //  $articulos->estado='Inactivo';
         $articulos->delete();
         return Redirect::to('adm/articulos');
     }
   
}
