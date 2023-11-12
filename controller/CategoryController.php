<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;



class CategoryController extends Controller
{
    public function index(){

        $category=Category::all();
        return view('category.index',compact('category'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){


    $request->validate([
           'category_name' => 'required|unique:categories|max:25',


     ]);
     $category=new Category;
     $category->category_name=$request->category_name;
    $category->category_slug=Str::of($request->category_name)->slug('-');
    $category->save();


    $notification = ['message' => 'Category successfully inserted', 'alert-type' => 'success'];

    return redirect()->back()->with($notification);


    }
    public function edit( string $id){
        // $category=DB::table('categories')->where('id',$id)->first();

        $category=Category::Find($id);

       return view('category.edit',compact('category'));
       }


       public function update( request $request ,$id){
              $category=Category::Find($id);
              $category->update([
                $category->category_name=$request->category_name,
                $category->category_slug=Str::of($request->category_name)->slug('-'),
              ]);

        return redirect()->route('category.index')->with('success', 'Successfully inserted');
      }

      public function destroy($id){
        // DB::table('categories')->where('id', $id)->delete();

        $category=Category::Find($id);
        $category->delete();

        $notification = ['message' => 'Category successfully Deleted', 'alert-type' => 'warning'];

        return redirect()->back()->with($notification);
        //return redirect()->route('category.index')->with('success', 'Successfully deleted');
      }
}
