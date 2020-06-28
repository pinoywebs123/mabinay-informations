@extends('shared.user.template')

@section('styles')

@endsection

@section('contents')
<div class="col-md-12">
        <h1 class="text-center">Post Information</h1>
       
        <div class="card" style="width: 100%;">
            @if($find_post->images)

            @foreach($find_post->images as $image)
             <img class="" src="{{URL::to('/images/')}}/{{$image->image}}" alt="{{$image->image}}" width="300px" height="200px">

            @endforeach
           
            @else
            No Image Available

            @endif
          
          <div class="card-body">
            <h5 class="card-title">
                Title: {{$find_post->title}}
            </h5>
            <p class="card-text">
                Description:
                {{$find_post->description}}
            </p>
            <center>
                <button class="btn btn-primary">Comment</button>
            </center>
          </div>
        </div>


</div>
@endsection

@section('scripts')

@endsection