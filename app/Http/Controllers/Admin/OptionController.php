<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OptionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Option;

class OptionController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $options = Option::orderby('created_at','desc')->latest('id');

            return Datatables::of($options)
            ->editColumn('created_at',function(Option $option){
                return $option->created_at->diffForHumans();
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('option.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.option.option');

    }

    public function create()
    {
        return view('admin.pages.option.option_add');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validate = $request->validate([
            'type' => 'required',
            'value' => 'required'
        ]);

        $option = New Option;
        $option->type = $request->type;
        $option->value = $request->value;
        $option->save();

        return redirect()->route('option.index')
        ->with([
            'message'    =>'Option Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $option = Option::findOrFail($id);

        return response()->json($option);
    }

    public function edit($id)
    {
        $option = Option::findOrFail($id);

        //return response()->json($option);

        return view('admin.pages.option.option_edit',compact('option'));
    }

    public function update(Request $request, Option $option)
    {

        $validate = $request->validate([
            'type' => 'required',
            'value' => 'required'
        ]);

        //$option = Option::findOrFail($id);
        $option->type = $request->type;
        $option->value = $request->value;
        $option->update();

        return redirect()->route('option.index')
        ->with([
            'message'    =>'Option Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $option = Option::destroy($id);

        if($option){
            return redirect()->route('option.index')
            ->with([
                'message'    =>'Option Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
