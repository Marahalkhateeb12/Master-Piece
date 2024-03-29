@include('Admin.NavBar')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Users</h4>
          <div class="pull-left">
            <a class="btn btn-success" href="{{ route('Users.create') }}"> Add New User</a>
        </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th >
                  Email
                </th>
                <th >
                  Address
                </th>
                <th >
                  Mobile Number
                </th>
                <th >
                  Action
                </th>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td>
                    {{$user->id;}}
                  </td>
                 
                  <td>
                    {{$user->user_name;}}
                  </td>
                  <td >
                    {{$user->email;}}
                  </td>
                  <td >
                    {{$user->user_Address;}}
                  </td>
                  <td >
                    {{$user->user_mobile;}}
                  </td>
                  <td>
                    <form action=" {{ route('Users.destroy',$user->id) }}" method="POST"> 
                      <a class="btn btn-info" href="{{ route('Users.edit' ,$user->id) }}">Edit</a>
                      @csrf
                      @method('DELETE')
                      
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                </tr>
                @endforeach
                
              </tbody>

            </table>
           
          </div>
        </div>
      </div>
    </div>
   
  </div>
</div>
     @include('Admin.Footer')