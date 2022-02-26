@extends('layouts.admin')

@section('title','Inquiry')

@section('inquiry','active')

@section('style')
@endsection


@section('content')

<div class="content-area">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Inquirys</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Devlomatix</a></li>
                                <li class="breadcrumb-item"><a href="{{route('inquiry.index')}}">Inquity</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-md-12">
            <form role="form" method="post" action="{{route('inquiry.update',$inquiry->id)}}" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}

                <div class="row">
                    <div class="form-group col-md-4">
                        <label><b>Client name</b></label>
                        <input type="text" class="form-control" name="name"  value="{{$inquiry->name}}" disabled>
                        <div class="error">{{$errors->first('name')}}</div>
                    </div>
                    <div class="form-group col-md-4">
                        <label><b>Client Email</b></label>
                        <input type="text" class="form-control" name="email"  value="{{$inquiry->email}}" disabled>
                        <div class="error">{{$errors->first('name')}}</div>
                    </div>
                    <div class="form-group col-md-4">
                        <label><b>Client Phone</b></label>
                        <input type="text" class="form-control" name="phone"  value="{{$inquiry->phone}}" disabled>
                        <div class="error">{{$errors->first('name')}}</div>
                    </div>
                    <div class="form-group col-md-4">
                        <label><b>Phone Model</b></label>
                        <input type="text" class="form-control" name="phone"  value="{{$inquiry->phone_model}}" disabled>
                        <div class="error">{{$errors->first('name')}}</div>
                    </div>
                    <div class="form-group col-md-4">
                        <label><b>Phone Issue</b></label>
                        <input type="text" class="form-control" name="phone"  value="{{$inquiry->phone_issue}}" disabled>
                        <div class="error">{{$errors->first('name')}}</div>
                    </div>
                    <div class="form-group col-md-4">
                        <label><b>Request Status</b></label>
                        <input type="text" class="form-control" name="phone"  value="{{$inquiry->status}}" disabled>
                        <div class="error">{{$errors->first('name')}}</div>
                    </div>

                    <div class="form-group col-md-12">
                        <label><b>Request Status</b></label>
                        <textarea  class="form-control" cols="30" rows="4">{{$inquiry->message}}</textarea>
                        <div class="error">{{$errors->first('name')}}</div>
                    </div>

                    <div class="form-group col-md-12">
                        <label><b>Phomefix Comments</b></label>
                        <textarea name="response" class="form-control" cols="30" rows="4">{{$inquiry->response}}</textarea>
                        <div class="error">{{$errors->first('name')}}</div>
                    </div>

                    <div class="form-group col-md-2">
                        <label><b>Request Status</b></label>
                        <select name="status" class="form-control">
                            <option value="open" {{$inquiry->status == 'open' ? 'selected' : null}}>Open</option>
                            <option value="close" {{$inquiry->status == 'close' ? 'selected' : null}}>Close</option>
                        </select>
                    </div>

                </div>

                <div class="form-group mt-3">
                    <button class="btn btn-primary btn-sm">Update Inquiry</button>
                    <a href="{{route('inquiry.index')}}" class="btn btn-info btn-sm">Cancel</a>
                </div>

            </form>
            </div>
        </div>


</div>

@endsection


@section('modal')



@endsection


@section('scripts')


@endsection
