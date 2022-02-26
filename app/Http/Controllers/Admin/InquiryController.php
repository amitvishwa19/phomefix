<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InquiryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $inquiries = Inquiry::orderby('created_at','desc')->latest('id');

            return Datatables::of($inquiries)
            ->editColumn('created_at',function(Inquiry $inquiry){
                return $inquiry->created_at->diffForHumans();
            })
            ->addColumn('inquiry',function(Inquiry $inquiry){
                return '<div class="media">
                            <div class="media-body align-self-center ">
                                <span class="m-0 "><b>'.$inquiry->name.' ('.$inquiry->phone.')</b></span><br><br>
                                <h6 class="m-0 text-dark"><b>'.$inquiry->message.'</b></h6>
                                <ul class="p-0 list-inline mb-0">
                                    <li class="list-inline-item text-muted">'.$inquiry->created_at->diffForHumans().'</li>
                                    <li class="list-inline-item">by <a href="#">'.$inquiry->name.' ('.$inquiry->email.')</a></li>
                                </ul>
                            </div><!--end media-body-->
                        </div>';

            })
            ->addColumn('status',function(Inquiry $inquiry){
                if($inquiry->status != 'open'){
                    return '<div class="badge badge-success">Closed</div>';
                }else{
                    return '<div class="badge badge-warning">Open</div>';
                }
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('inquiry.edit',$data->id).'" class="badge badge-success mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="badge badge-secondary delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action','inquiry','status'])
            ->make(true);


        }


        return view('admin.pages.inquiry.inquiry');

    }

    public function create()
    {
        return view('admin.pages.inquiry.inquiry_add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $validate = $request->validate([
        //     'response' => 'required'
        // ]);

        // $inquiry = New Inquiry;
        // $inquiry->name = $request->name;
        // $inquiry->save();

        // return redirect()->route('inquiry.index')
        // ->with([
        //     'message'    =>'Inquiry Added Successfully',
        //     'alert-type' => 'success',
        // ]);

    }

    public function show($id)
    {
        $inquiry = Inquiry::findOrFail($id);

        return view('admin.pages.inquiry.inquiry_show')->with('inquiry',$inquiry);
    }

    public function edit($id)
    {
        $inquiry = Inquiry::findOrFail($id);

        //return response()->json($inquiry);

        return view('admin.pages.inquiry.inquiry_edit',compact('inquiry'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
       
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->response = $request->response;
        $inquiry->status = $request->status;
        $saved = $inquiry->save();

        if($saved){
            //dd($inquiry->subject);
            // $to = $request->email;
            // $subject = 'RE:' . $inquiry->subject;
            // $body = 'test body';
            // $data = array(
            //             'name' => $inquiry->name,
            //             'response' => $inquiry->response,
            //             'message' => $inquiry->message
            //         );
            // $view = 'mails.inquiryresponse';

            // appmail($to,$subject,$body,$data,$view,true);

        }


        return redirect()->route('inquiry.index')
        ->with([
            'message'    =>'Inquiry updated successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $inquiry = Inquiry::destroy($id);

        if($inquiry){
            return redirect()->route('inquiry.index')
            ->with([
                'message'    =>'Inquiry Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
