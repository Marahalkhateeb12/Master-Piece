@include('Admin.NavBar')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Sub Halls</h4>
          <div class="pull-left">
            <a class="btn btn-success" href="{{ route('SubHalls.create') }}"> Add New Hall</a>
        </div>
        <div class="pull-right" style="padding-right: 70px; ">
          <form action="/searchProduct"  method="get" role="search">
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
                  Hall Name
                </th>
                <th >
                  # of people Women's Hall
                  </th>
                  <th >
                    # of people Men's Hall
                  </th>
                  <th >
                    Area
                  </th>
                  <th >
                    Image 1 
                  </th>
                  <th >
                    Image 2
                  </th>
                  <th >
                    Image 3 
                  </th>
                  <th >
                    Image 4 
                  </th>
                  <th >
                    Image 5 
                  </th>
                  <th >
                    Image 6
                  </th>
                      <th >
                        Image 7
                  </th>
                <th >
                  Action
                </th>
              </thead>
              <tbody>
                @if(count($subHalls) > 0)
               @foreach ($subHalls as $subHall)
                <tr>
                  <td>
                    {{$subHall->id;}}
                  </td>
                  
                  <td>
                    {{$subHall->subhall_name;}}
                  </td>
                  <td >
                    {{$subHall->hall_id;}}
                  </td>
                 <td>
                  {{$subHall->number_of_people_W ;}}
                 </td>
                 <td>
                  {{$subHall->number_of_people_M ;}}
                 </td>
                 <td>
                  {{$subHall->area ;}}
                 </td>
                 <td >
                  <img src="  {{asset('public/adminImage/'.$subHall->image1);}}" width="70px" height="70px" alt="Image">
                 
                </td>
                <td >
                  <img src="  {{asset('public/adminImage/'.$subHall->image2);}}" width="70px" height="70px" alt="Image">
                 
                </td>
                <td >
                  <img src="  {{asset('public/adminImage/'.$subHall->image3);}}" width="70px" height="70px" alt="Image">
                 
                </td>
                <td >
                  <img src="  {{asset('public/adminImage/'.$subHall->image4);}}" width="70px" height="70px" alt="Image">
                 
                </td>
                <td >
                  <img src="  {{asset('public/adminImage/'.$subHall->image5);}}" width="70px" height="70px" alt="Image">
                 
                </td>
                <td >
                  <img src="  {{asset('public/adminImage/'.$subHall->image6);}}" width="70px" height="70px" alt="Image">
                 
                </td>
                <td >
                  <img src="  {{asset('public/adminImage/'.$subHall->image7);}}" width="70px" height="70px" alt="Image">
                 
                </td>
                
                  <td>
                    <form action=" {{ route('SubHalls.destroy',$subHall->id) }}" method="POST"> 
                      <a class="btn btn-info" href="{{ route('SubHalls.edit',$subHall->id) }}">Edit</a>

                      @csrf
                      @method('DELETE')
                      
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                </tr>
                @endforeach
                @else <h5 style="color: #feacc6 ">No Halls found. Try to search again !</h5>

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