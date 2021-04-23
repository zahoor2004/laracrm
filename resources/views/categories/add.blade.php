@extends('layout/layout')
@section('title',$title)
@section('body')
<div class="row">
    <div class="col p-5 m-5 md-4">

        <form action="{{$submit_url}}" method="post" enctype="multipart/form-data">
            @if (isset($category->id))
                <input type="hidden" name="id" value="{{$category->id}}">
            @endif
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="" placeholder="name of cat" @if (isset($category->name))value="{{$category->name}}"@endif>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" id="description" rows="3">@if (isset($category->description)){{$category->description}}@endif</textarea>
            </div>

            <div class="form-group">
              <label for="">Photo</label>
              <input type="file" class="form-control-file" name="photo" id="photo" placeholder="" aria-describedby="fileHelpId">
              <small id="fileHelpId" class="form-text text-muted">Help text</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
