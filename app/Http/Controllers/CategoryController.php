<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cate;
use Validator;
use App\User;

class CategoryController extends Controller
{
 

    public function index()
    {
       $categories=Cate::all();
       return view('categories.list')->with('category',$categories);

    }

    public function create()
    {
       return view('Categories.create');
    }


  
    public function store(Request $request)
    {

         $validator=validator::make($request->all(),[
        'name'=>'required|max:225',
       
        ]);
          if($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }

      $cat=$request->all();
      $cat=Cate::create($cat);
      $cat->save();
      return redirect()->route('categories.index');

    }

  
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
       $category=cate::findOrfail($id);
       return view('Categories.edit')->with('category',$category);
    }

   
    public function update(Request $request, $id)
    {
            
    $validator=validator::make($request->all(),[
            'name'=>'required|max:225',
        ]);
          if($validator->fails()){
            return redirect()
            ->back()
            ->withErrors($validator);
           }
    

    $cat=cate::findOrfail($id);
    $cat->fill($request->all());
    $cat->save();

     return view('Categories.index');



    }


    public function destroy($id)
    {
        

    }
}
