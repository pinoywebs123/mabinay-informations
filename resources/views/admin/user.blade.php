@extends('shared.admin.template')

@section('headers')
<h1>List of Users</h1>
@endsection

@section('contents')
<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">User List</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        
                        <th>
                          Email
                        </th>
                        <th>
                          Created
                        </th>
                        <th>
                          Action
                        </th>
                       
                      </thead>
                      <tbody>
                       @foreach($users as $user)
                         <tr>
                          <td>{{$user->id}}</td>
                          
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->created_at->diffForHumans()}}</td>
                          <td>
                            <button class="btn btn-info btn-sm btn-round edit_btn" data-toggle="modal" data-target="#editModal" value="{{$user->id}}">Edit</button>
                            
                            @if($user->status_id == 1)
                              <a href="{{route('user_lock',$user->id)}}" class="btn btn-danger btn-sm btn-round">Lock</a>
                            @else
                            <a href="{{route('user_unlock',$user->id)}}" class="btn btn-primary btn-sm btn-round">Unlock</a>
                            @endif
                           
                          </td>
                        </tr>
                       @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

<div class="modal" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">

     <form>
        <div class="modal-header">
          <h4 class="modal-title">User Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required="" id="edit_name">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required="" id="edit_email">
          </div>
          
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          @csrf
          <button type="submit" class="btn btn-primary" >Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
     </form>

    </div>
  </div>
</div>            
@endsection
@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    var edit_url = "{{route('user_edit')}}";
    var token = "{{ csrf_token() }}";

    $(".edit_btn").click(function(){
      let user_id = $(this).val();
      
      $.ajax({
        method:'POST',
        url:edit_url,
        data:{_token: token,id: user_id},
        success: function(msg){
          console.log(msg);
          $("#edit_name").val(msg.name);
          $("#edit_email").val(msg.email);
        }
      });
    });
  });
</script>
@endsection

