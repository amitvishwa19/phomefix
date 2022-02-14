
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Global</h4>
        <small>General App settings</small>
    </div><!--end card-header-->
    <div class="card-body">
        <form action="{{route('setting.store',['type'=>'global'])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1"><b>App Name</b></label>
                <input type="text" class="form-control" name="app_name" value="{{setting('app_name')}}">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"><b>App Description</b></label>
                <input type="text" class="form-control" name="app_description" value="{{setting('app_description')}}">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"><b>App Icon</b></label><br>
                
                @if(setting('app_icon'))
                <div class="media mb-2">
                    <img src="{{setting('app_icon')}}" height="60" class="mr-3 align-self-center rounded" alt="...">
                   
                </div>
                @endif
                <input type="file" class="" name="app_icon">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"><b>App Fevicon</b></label><br>
                
                @if(setting('app_fevicon'))
                <div class="media mb-2">
                    <img src="{{setting('app_fevicon')}}" height="60" class="mr-3 align-self-center rounded" alt="...">
                </div>
                @endif
                <input type="file" class="" name="app_fevicon">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"><b>Auth Pages Image</b></label><br>
                
                @if(setting('auth_image_url'))
                <div class="media mb-2">
                    <img src="{{setting('auth_image_url')}}" height="60" class="mr-3 align-self-center rounded" alt="...">
                </div>
                @endif
                <input type="file" class="" name="auth_image">
            </div>

           


            <button type="submit" class="btn btn-info waves-effect waves-light btn-sm">Save</button>
        </form>

    </div><!--end card-body-->
</div>

{{-- {{setting('job_mail') ? 'checked' : null}} --}}
