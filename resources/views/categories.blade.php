@extends('layout/layout')
@section('title',$title)
@section('body')
<div class="row">
    <div class="col p-5 m-5 md-4">

        <div class="card-columns">
            @foreach ($categories as $item)
            <div class="card">
                <img class="card-img-top" src="{{ url('storage/photos/'.$item->photo) }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$item->name}} </h4>
                    <p class="card-text">{{$item->description}} </p>


                    <li class="list-group-item">
                        <a href="/category/delete/{{$item->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        <a href="/category/edit/{{$item->id}}"><button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                        </li>
                </div>
            </div>

            @endforeach
        </div>


    </div>
</div>

<ul class="list-group">
    @foreach ($categories as $item)

    {{-- <li class="list-group-item">{{$item->name}} ||
    <a href="/category/delete/{{$item->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
    ||
    <a href="/category/edit/{{$item->id}}"><button type="button" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
    </li>
     --}}
    @endforeach
</ul>
@endsection
