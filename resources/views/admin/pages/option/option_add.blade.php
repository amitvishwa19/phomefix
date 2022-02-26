@extends('layouts.admin')

@section('title','Option')

@section('option','active')

@section('style')
@endsection


@section('content')

    <div class="wrapper card p-2">
        <h5>
            Add New Option
        </h5>

        <form role="form" method="post" action="{{route('option.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Option name</label>
                <input type="text" class="form-control" name="name"  value="{{old('name')}}">
                <div class="error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm">Add Option</button>
                <a href="{{route('option.index')}}" class="btn btn-info btn-sm">Cancel</a>
            </div>

        </form>


    </div>

@endsection


@section('modal')



@endsection


@section('scripts')


@endsection
