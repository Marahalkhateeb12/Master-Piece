@include('Admin.NavBar')
<div class="panel-header panel-header-sm">
</div>
<div class="content" style="padding-left: 90px; width: 1500px">
  <div class="row">
    <div class="col-md-8" >
      <div class="card">
        <div class="card-header">
          <h5 class="title">Add Hall</h5>
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

          <form action="{{ route('Halls.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
           
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Hall Name</label>
                    <input type="text" class="form-control" placeholder="Hall name" name='name'>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Hall Location</label>
                    <input type="text" class="form-control" placeholder="" name='location'>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Hall Address</label>
                    <input type="text" class="form-control" placeholder="" name='address'>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Hours</label>
                    <input type="text" class="form-control" placeholder="" name='hours'>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Facebook Link</label>
                    <input type="text" class="form-control" placeholder="" name='facebook'>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Instagram Link</label>
                    <input type="text" class="form-control" placeholder="" name='instagram'>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="number" class="form-control" placeholder="0777777777" name='mobile'>
                  </div>
                </div>
               
        </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Hall Description</label>
                    <textarea class="form-control" style="height:100px" name="description" placeholder="....."></textarea>
                  </div>
                </div>
              </div>
         
        <div class="row">
            <div class="col-md-6 pr-1">
              <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control"  name='image'>
              </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left" style="padding-left: 40px">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
       
      </div>
    </div>
  </div>
</div>

  @include('Admin.Footer')