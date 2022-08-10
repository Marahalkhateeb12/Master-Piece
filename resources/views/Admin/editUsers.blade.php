@include('Admin.NavBar')

<div class="panel-header panel-header-sm">
</div>
<div class="content" style="padding-left: 90px; width: 1500px">
  <div class="row">
    <div class="col-md-8" >
      <div class="card">
        <div class="card-header">
          <h5 class="title">Edit User</h5>
        </div>
        
        <div class="card-body" >
            @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

          <form action="{{ route('Users.update',$user->id) }}" method="POST" >
            @method('PATCH')
            @csrf
          

            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="first name" name='name' value="{{ $user->user_name }}">
                </div>
              </div><br>
            </div>
            <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="example@mail.com" name='email' value="{{ $user->email }}">
                  </div>
                </div>
              </div>
             
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name='password' value="{{ $user->password }}">
                  </div>
                </div>
                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label>Re Password</label>
                    <input type="password" class="form-control" value="{{ $user->password }}" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" name='address' value="{{ $user->user_Address }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="number" class="form-control" placeholder="0777777777" name='mobile' value="{{ $user->user_mobile }}">
                  </div>
                </div>
               
        </div>
        <div class="row">
           
        <div class="col-xs-12 col-sm-12 col-md-12 text-left" style="padding-left: 40px">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
       
      </div>
    </div>
  </div>
</div>
<form>


@include('Admin.Footer')