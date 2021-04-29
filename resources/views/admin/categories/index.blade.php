@extends('layouts.app')
@section('content')
    <p>categories page</p>

    <div class="container">
        <div class="card">
            <div class="row">
                <div class="card-body">
                    @foreach($shops as $shop)
                        <div class="col-md-12">
                            <h3>{{ $shop->name }}
                                <div class="flex d-inline-flex">
                                <form method="GET" action="{{route('admin.categories.create')}}">


                                    <button>Add</button>

                                </form>
                                <form method="POST" action="{{route('admin.categories.update',$shop->id)}}">
                                    @csrf

                                    <button>Edit</button>
                                </form>
                                <form method="POST" action="{{route('admin.categories.destroy',$shop->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button>Delete</button>
                                </form>
                                </div>
                            </h3>
                            <hr />
                            <div class="row">
                                @foreach($shop->children as $cats)
                                    <div class="col-md-4">
                                        <h4>{{ $cats->name }}</h4>
                                        <hr />
                                        @foreach($cats->children as $cat)
                                            <h5>{{$cat->name}}</h5>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{route('admin.categories.store')}}">
        @csrf
        <label for="category">Category Name:</label><br>
        <input type="text" id="category" name="category"><br>
        <button>save</button>
    </form>
@endsection
