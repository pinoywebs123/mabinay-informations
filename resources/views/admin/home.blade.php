@extends('shared.admin.template')

@section('styles')

<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
@endsection

@section('headers')
<div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                @if($posts)
                <ul class="list-group">
                    @foreach($posts as $post)
                         <li class="list-group-item">
                             Title:   
                             <a href="{{route('admin_show_post', $post->id)}}">{{$post->title}}</a>
                             <p>{{$post->created_at->diffForHumans()}}</p>
                             @if(Auth::user()->roles[0]->name == 'Admin')
                              <a href="{{route('remove_post', $post->id)}}">Remove</a>
                             @endif
                            
                            
                         </li>
                    @endforeach
                 
                  
                </ul>
                  {{ $posts->links() }} 
                @endif
            </div>
            <div class="col-md-6">
                @include('shared.notification')
                <form action="{{route('newsfeed')}}" method="POST" enctype="multipart/form-data" id="image-upload" class="dropzone">
                    @csrf
                     <div>
                        <h3>Upload Multiple Image By Click On Box</h3>
                    </div>
                </form>
              <form action="{{route('newsfeed_content')}}" method="POST">
                
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" required="" id="title">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name="description" rows="5" required=""></textarea>
                </div>
                <div class="form-group">
                  @csrf
                  <button type="submit" id="submitBtn" class="btn btn-primary btn-block">SUBMIT</button>
                </div>
              </form>
            </div>
            
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
  
  var url = '{{route('newsfeed_content')}}';
  var token = '{{ csrf_token() }}';

        Dropzone.options.imageUpload = {
          addRemoveLinks: true,
            maxFilesize: 2,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            init: function () {
            this.on("success", function (file, response) {
               
                console.log(file);
               
                
            });
        }
        };

    

        
</script>
@endsection