@extends('layouts.admin')

@section('title','Option')

@section('option','active')

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
                        <h4 class="page-title">Options</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Devlomatix</a></li>
                            <li class="breadcrumb-item active">Options</li>
                        </ol>
                    </div><!--end col-->
                    
                </div><!--end row-->
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-md-6">
            <form action="{{route('option.update',$option->id)}}" method="POST">
            @csrf
            {{method_field('PUT')}}
                
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Option Type</b></label>
                    <select class="form-control mb-4" name="type">
                        <option>--Select Type--</option>
                        <option value="model" {{ $option->type == 'model' ? 'selected' : null }}>Phone Models</option>
                        <option value="issue" {{ $option->type == 'issue' ? 'selected' : null }}>Phone Issue</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Option Value</b></label>
                    <input type="text" class="form-control" name="value" value="{{$option->value}}" >
                </div>
            
                <a href="{{route('option.index')}}" class="btn btn-secondary btn-sm">Cancel</a>
                <button type="submit" class="btn btn-primary btn-sm">Save Option</button>
           
        </form>
        </div>
    </div>




</div>

@endsection


@section('modal')



@endsection


@section('scripts')


@endsection
