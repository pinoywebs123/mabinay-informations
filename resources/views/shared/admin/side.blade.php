<div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  @if(Request()->segment(2) == 'home') active @endif">
            <a class="nav-link" href="{{route('admin_home')}}">
              <i class="material-icons">dashboard</i>
              <p>News Feed</p>
            </a>
          </li>
          <li class="nav-item @if(Request()->segment(2) == 'user-list') active @endif">
            <a class="nav-link" href="{{route('user_list')}}">
              <i class="material-icons">person</i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item  @if(Request()->segment(2) == 'chatroom') active @endif">
            <a class="nav-link" href="{{url('/chatroom')}}">
              <i class="material-icons">content_paste</i>
              <p>Message</p>
            </a>
          </li>
         
        </ul>
      </div>