<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Lawyer;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=Category::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data=new Category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }
    public function delete_category($id)
    {
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }
    public function view_lawyer()
    {
        $category=category::all();
        return view('admin.lawyer' ,compact('category'));
    }
    public function add_lawyer(Request $request)
    {
        

        $lawyer=new Lawyer;
        $lawyer->name=$request->name;
        $lawyer->email=$request->email;
        $lawyer->phone=$request->phone;
        $lawyer->address=$request->address;
        $lawyer->city=$request->city;
        $lawyer->category=$request->category;
        $lawyer->description=$request->description;
        $lawyer->experience=$request->experience;
        $lawyer->lawyer_co=$request->lawyer_co;
        $lawyer->status=$request->status;
        $lawyer->fees=$request->fees;
        $lawyer->discount_fees=$request->discount_fees;
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/lawyers/',$filename);
            $lawyer->image=$filename;
        }
        else
        {
            return $request;
            $lawyer->image='';
        }
        $lawyer->save();

        return redirect()->back()->with('message','Lawyer Added Successfully');
    }
    public function vie_lawyer()
    {
        $data=Lawyer::all();
        return view('admin.vie_lawyer',compact('data'));
    }
    public function delete_lawyer($id)
    {
        $data=Lawyer::find($id);
        $data->delete();
        return redirect()->back()->with('message','Lawyer Deleted Successfully');
    }
    public function edit_lawyer($id)
    {
        $data=Lawyer::find($id);
        $category=category::all();
        return view('admin.edit_lawyer',compact('data','category'));
    }
    public function update_lawyer(Request $request,$id)
    {
        $lawyer=Lawyer::find($id);
        $lawyer->name=$request->name;
        $lawyer->email=$request->email;
        $lawyer->phone=$request->phone;
        $lawyer->address=$request->address;
        $lawyer->city=$request->city;
        $lawyer->category=$request->category;
        $lawyer->description=$request->description;
        $lawyer->experience=$request->experience;
        $lawyer->lawyer_co=$request->lawyer_co;
        $lawyer->status=$request->status;
        $lawyer->fees=$request->fees;
        $lawyer->discount_fees=$request->discount_fees;
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/lawyers/',$filename);
            $lawyer->image=$filename;
        }
        else
        {
            return $request;
            $lawyer->image='';
        }
        $lawyer->save();

        return redirect()->back()->with('message','Lawyer Updated Successfully');
    }


}
