@include('Admin.NavBar')
<div class="panel-header panel-header-sm">

</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          
          <h4 class="card-title">Messages</h4>
        
          <div class="pull-left">
            {{-- <a class="btn btn-success" href="{{ route('Halls.create') }}"> Add New Hall</a> --}}
            
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
                 Email
                </th>
              <th>
               Message
              </th>
                <th >
                  Action
                </th>
              </thead>
              <tbody>
              
               @foreach ($msgs as $message)
                <tr>
                  <td>
                    {{$message->id;}}
                  </td>
                 
                  <td>
                    {{$message->name;}}
                  </td>
                  <td >
                    <address> <a href="mailto:{{$message->email;}}"> {{$message->email;}}</address>
                  </td>
                  <td >
                    {{$message->message;}}
                  </td>
                
                  <td>
                    <form action=" {{ route('messages.destroy',$message->id) }}" method="POST"> 
                      <a class="btn btn-info" href="mailto:{{$message->email;}}">Replay</a>
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