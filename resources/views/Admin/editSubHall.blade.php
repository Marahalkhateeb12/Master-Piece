@include('Admin.NavBar')

<div class="panel-header panel-header-sm">
</div>
<div class="content" style="padding-left: 90px; width: 1500px">
  <div class="row">
    <div class="col-md-8" >
      <div class="card">
        <div class="card-header">
          <h5 class="title">Edit Sub Hall</h5>
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

          <form action="{{ route('SubHalls.update',$subHall->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label> Name</label>
                    <input type="text" class="form-control" value='{{$subHall->name}}' name='name'>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Hall</label>
                    <select class="form-select" aria-label="Default select example" name="hall_id" >
                        <option selected>Choose Hall..</option>
                        @foreach ($hall as $hall)
                        <option value="{{$hall->id}}">{{$hall->name}}</option>
                       @endforeach
                      </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label> # of people Women's Hall</label>
                    <input type="number" class="form-control" value='{{$subHall->number_of_people_W}}' name='wPeople'>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label> # of people Men's Hall</label>
                    <input type="number" class="form-control" value='{{$subHall->number_of_people_M}}' name='mPeople'>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label> Area</label>
                    <input type="number" class="form-control" value='{{$subHall->area}}' name='area'>
                  </div>
                </div>
              </div>
             
        <div class="row">
            <div class="col-md-6 pr-1">
              <div class="form-group">
                <label>Image1</label>
                <input type="file" class="form-control"  name='image1'>
              </div>
            </div>
      </div>
      <div class="row">
        <div class="col-md-6 pr-1">
          <div class="form-group">
            <label>Image7</label>
            <input type="file" class="form-control"  name='image7'>
          </div>
        </div>
  </div>

  <div class="row">
    <div class="col-md-6 pr-1">
      <div class="form-group">
        <label>Image6</label>
        <input type="file" class="form-control"  name='image6'>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 pr-1">
      <div class="form-group">
        <label>Image5</label>
        <input type="file" class="form-control"  name='image5'>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 pr-1">
      <div class="form-group">
        <label>Image4</label>
        <input type="file" class="form-control"  name='image4'>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 pr-1">
      <div class="form-group">
        <label>Image3</label>
        <input type="file" class="form-control"  name='image3'>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 pr-1">
      <div class="form-group">
        <label>Image2</label>
        <input type="file" class="form-control"  name='image2'>
      </div>
    </div>
</div>

      <div class="col-xs-12 col-sm-12 col-md-12 text-left" style="padding-left: 40px">
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
    </div>
  </div>
</div>

@include('Admin.Footer')