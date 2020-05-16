@extends('shared.admin.template')

@section('headers')
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">content_copy</i>
            </div>
            <p class="card-category">USERs</p>
            <h3 class="card-title">69</h3>
        </div>
               
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">content_copy</i>
            </div>
            <p class="card-category">MESSAGE</p>
            <h3 class="card-title">69</h3>
        </div>
               
    </div>
</div>
<div class="col-md-12">
  <form>
    <div class="form-group">
      <h3>Write Something in News Feed.</h3>
      <textarea class="form-control" rows="5" placeholder="Enter Something HERE"></textarea>
    </div>
    <div class="form-group">
      <button class="btn btn-primary">SUBMIT</button>
    </div>
  </form>
</div>
@endsection