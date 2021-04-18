<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAllCat()
    {

        $data = Category::paginate(50)->fragment('testing');

        return view("categories", ["categories"=>$data]);

        //return Category::all();

        Category::chunk(200, function ($flights) {
            foreach ($flights as $flight) {

                return view("categories", ["categories"=>$flight]);
            }

        });



    }


    public function add()
    {
        $q = Category::create(['name'=>"Fruite 2","description"=>"fruite discription"]);
        if($q){
            return "succes";
        }
        return "false";
    }

}
