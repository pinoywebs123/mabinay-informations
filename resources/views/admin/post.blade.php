@extends('shared.admin.template')



@section('headers')
<div class="col-md-12">
    <div class="col-md-12">
        <h1 class="text-center">Post Information</h1>
       
        <div class="card" style="width: 100%;">
            @if($find_post->images)

            <div style="display: flex; flex-direction: row;">
            @foreach($find_post->images as $image)
             <img class="" src="{{URL::to('/images/')}}/{{$image->image}}" alt="{{$image->image}}" width="300px" height="200px">

            @endforeach
          </div>
           
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
                <button class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Comment</button>
            </center>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                <form action="{{route('create_comment',request()->segment(3))}}" method="POST">
                    <div class="form-group">
                      <textarea class="form-control" rows="6" name="comment"></textarea>
                    </div>
                    <div class="form-group">
                      @csrf
                      <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>

        @foreach($comments as $comment)
        <div class="card" style="width: 100%;">
         
          <div class="card-body">
          <h5 class="card-title">{{$comment->user->name}}</h5>
          <code>{{$comment->created_at->diffForHumans()}}</code>
            <p class="card-text">
              {{$comment->comment}}
            </p>
            
          </div>
        </div>
        @endforeach

</div>   
</div>
@endsection

