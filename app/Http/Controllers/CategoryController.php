<?php

namespace App\Http\Controllers;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Console\Input\Input;



use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAllCat()
    {
        $data['categories'] = Category::all();
        $data['title'] = "categories";

        return view('categories', $data);
    }

    public function addform()
    {
        $data['title'] = "Add Category Form";
        $data['submit_url'] = '/category/save';
        //$data['submit_url'] = '#';
        return view('categories.add', $data);
    }

    public function editform($id = null)
    {

        if ($id != null) {
            $data['submit_url'] = '/category/save';
            $data["category"] = Category::where('id', $id)->firstOrFail();
            $data['title'] = "Edit Category Form";
            return view('categories.add', $data);
        }
    }


    public function saveCat(Request $req)
    {

                    $d = $req->input();
                    //dd($req->file('photo'));

                    unset($d['_token']);

                    if ($req->has('id')) {
                        unset($d['id']);;
                        $id = $req->input('id');
                        $q = Category::where('id', $id);
                        $q->update($d);
                        return redirect('/category/list');
                    } else {

                        if($req->hasFile('photo')){

                        //$path = Storage::putFile('public/storage/photos', $req->file('photo'));
                        //$path = Storage::putFile('public/storage/photos', new File($req->file('photo')));

                        $path = $req->photo->store('photos');
                        // storage/app/photos

                        //dd($path);
                        $url = Storage::url($path);
                        //dd($url);

                        //return $extension = $req->photo->extension();

                        //dd($req->files);
                        //foreach($req->files as $x)
                        //dd($x);



                        $fileName = time().'.'.$req->photo->extension();

                        $req->photo->move(public_path('photos'), $fileName);
                        // crm/public/photos

                        $d['photo'] = $fileName;

                        dd($d);
                        }

                        $q = Category::create($d);
                        if ($q) {

                            return back()->with('success','File uploaded successfully.')->with('file',$fileName);

                            return redirect('/category/list');
                        }
                    }


    }

    public function delete_cat($id = null)
    {
        if ($id !== null) {
            $cat = Category::find($id);
            $cat->delete();
            return redirect('category');
        }
    }
}
