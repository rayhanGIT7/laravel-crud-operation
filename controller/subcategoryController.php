<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\subs;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;


class subcategoryController extends Controller
{

    public function index()
    {
        // $category=DB::table('subs')->leftJoin('categories','subs.category_id','categories.id')->select
        // ('categories.category_name','subs.*')->get();

 //model use

         $data=subs::all();
        return view('subcategory.indexs',compact('data'));
    }

    public function create(){
    	$categories=Category::all();
    	return View('subcategory.create',compact('categories'));
    }


    public function store(Request $request) {
        $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required|unique:subs|max:50', // Assuming 'sub' is the correct table name
        ]);

        $subcategory = new subs;
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_name = $request->subcategory_name; // Corrected field name
        $subcategory->subcategory_slug = Str::of($request->subcategory_name)->slug('-');
        $subcategory->save();

        $notification = ['message' => 'Subcategory successfully inserted', 'alert-type' => 'success'];

        return redirect()->route('subcategory.indexs')->with($notification);
    }


    public function edit( string $id){
        // $category=DB::table('categories')->where('id',$id)->first();

         //using model
        $category=Category::all();
        $data=subs::find($id);
       return view('subcategory.edit',compact('category','data'));
       }


       public function update( request $request ,$id){
              $category=subs::Find($id);
              $category->update([
                $category->category_id=$request->category_id,

                $category->subcategory_name=$request->subcategory_name,
                $category->subcategory_slug=Str::of($request->subcategory_name)->slug('-'),
              ]);

              $notification = ['message' => 'SubCategory successfully Updated', 'alert-type' => 'success'];

              return redirect()->route('subcategory.indexs')->with($notification);


      }

      public function destroy($id){
        // DB::table('categories')->where('id', $id)->delete();


        //using model
        $category=subs::Find($id);
        $category->delete();

        $notification = ['message' => 'Category successfully Deleted', 'alert-type' => 'warning'];

        return redirect()->back()->with($notification);


        //return redirect()->route('category.index')->with('success', 'Successfully deleted');
      }
}


