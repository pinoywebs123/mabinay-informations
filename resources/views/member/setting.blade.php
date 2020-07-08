@extends('shared.admin.template')

@section('headers')
<h1>Settings</h1>
@endsection

@section('contents')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Change Password</h4>
          
        </div>
        <div class="card-body">
          <div class="col-md-6">
              @include('shared.notification')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <form action="{{route('admin_setting_check')}}" method="POST">
                <div class="form-group">
                    <label>New Password</label>
                  <input type="password" name="new_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Verify Password</label>
                  <input type="password" name="verify_password" class="form-control" required>
                </div>
                <div class="form-group">
                    @csrf
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>        
</div>

            
@endsection


