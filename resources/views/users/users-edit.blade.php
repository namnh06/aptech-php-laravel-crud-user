@extends('layout.master') @section('content')
<div class="container">
  <div class="d-flex flex-row">
    <div class="col-12">
      <h3>EDIT CATEGORY PAGE</h3>
      <form action="{{route('category-update',$category->id)}}" method="post">
        <input type="hidden" name="_method" value="put" /> 
        {{csrf_field()}}
        <div class="form-group">
          <label for="category">Category Name</label>
          <input type="text " class="form-control" id="category" placeholder="Category Name" name="category" value="{{$category->name}}">
        </div>
        <div class="form-group ">
          <button class="btn btn-info ">
            EDIT
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection