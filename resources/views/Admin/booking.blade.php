@include('Admin.NavBar')
<div class="panel-header panel-header-sm">

</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          
          <h4 class="card-title"> Booking</h4>
        
          <div class="pull-left">
           
            
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
                  Name
                </th>
                <th >
                  Hall 
                </th>
                <th >
                  User Mobile
                </th>
                <th >
                 Date
                </th>
              
                <th >
                  Action
                </th>
              </thead>
              <tbody>
                
               @foreach ($booking as $book)
                  
                
                <tr>
                  <td>
                    {{$book->id;}}
                  </td>
                  
                  <td>
                    {{$book->user_name;}}
                  </td>
                  <td >
                    {{$book->subhall_name;}}
                  </td>
                  <td >

                    {{$book->user_mobile;}}
                  </td>
                  <td >
                    {{$book->created_at;}}
                  </td>
                  <td>
                    <form action=" {{ route('booking.destroy',$book->id) }}" method="POST"> 
                      <a class="btn btn-info" href="{{ route('booking.edit',$book->id) }}">Edit</a>
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