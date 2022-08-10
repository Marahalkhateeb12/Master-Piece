@include('Admin.NavBar')
<div class="panel-header panel-header-sm">

</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          
          <h4 class="card-title"> Halls</h4>
        
          <div class="pull-left">
            <a class="btn btn-success" href="{{ route('Halls.create') }}"> Add New Hall</a>
            
        </div>
        <div class="pull-right" style="padding-right: 70px; ">
          <form action="/searchCategory"  method="get" role="search">
          @csrf
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search..." name="search">
              <div class="input-group-append">
                <div class="input-group-text">
                  <button type="submit" style="border: none; color:  #feacc6"><i class="now-ui-icons ui-1_zoom-bold"></i></button>
                </div>
              </div>
            </div>
          </form>
       
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
                  Image
                </th>
                <th>
                  Name
                </th>
                <th >
                  Description
                </th>
                <th >
                  Hours
                </th>
                <th >
                  Address
                </th>
              <th>
                Location
              </th>
              <th>
                Facebook
              </th>
              <th>
                Instagram
              </th>
                <th >
                  Action
                </th>
              </thead>
              <tbody>
                @if(count($halls) > 0)
               @foreach ($halls as $hall)
                  
                
                <tr>
                  <td>
                    {{$hall->id;}}
                  </td>
                  <td >
                    <img src="  {{asset('public/adminImage/'.$hall->image);}}" width="70px" height="70px" alt="Image">
                   
                  </td>
                  <td>
                    {{$hall->hall_name;}}
                  </td>
                  <td >
                    {{$hall->hall_description;}}
                  </td>
                  <td >
                    {{$hall->hours;}}
                  </td>
                  <td >
                    {{$hall->hall_address;}}
                  </td>
                  <td >
                    {{$hall->location;}}
                  </td>
                  <td >
                    {{$hall->facebook;}}
                  </td>
                  <td >
                    {{$hall->instagram;}}
                  </td>
                  <td>
                    <form action=" {{ route('Halls.destroy',$hall->id) }}" method="POST"> 
                      <a class="btn btn-info" href="{{ route('Halls.edit',$hall->id) }}">Edit</a>
                      @csrf
                      @method('DELETE')
                      
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                </tr>
                @endforeach
              @else <h5 style="color: #feacc6 ">No Hall found. Try to search again !</h5>

              @endif
              </tbody>

            </table>
           
          </div>
        </div>
      </div>
    </div>
   
  </div>
</div>
     @include('Admin.Footer')