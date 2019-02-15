@extends('admin')

@section('content')
<form method="post" action="{{route("save-review")}}" enctype="multipart/form-data">
    @csrf
    <h1>Создать отзыв</h1>
  <div class="form-group">
    <label>Company name</label>
    <input type="text" class="form-control" name="companyName">
  </div>
  <div class="form-group">
    <label>Author name</label>
    <input type="text" class="form-control" name="authorName">
  </div>
  <div class="form-group">
    <label>Description</label>
    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
  </div>
  <div>
<div class="form-group">
  <label>Company logo</label>
  <div class="input-group control-group increment" >
          <input type="file" id="companyLogo" name="companyLogo" class="form-control">
    </div>
</div>
<div class="form-group">
  <label>Author logo</label>
  <div class="input-group control-group increment center" >
          <input type="file" id="authorLogo" name="authorLogo" class="form-control">
    </div>
</div>
<input type="submit" name="save" class="btn btn-primary">
</form>
@endsection

