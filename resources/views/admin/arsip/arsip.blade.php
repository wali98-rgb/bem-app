@extends('admin.master')

@section('title')
    Arsip | Admin Page
@endsection

@section('title-page')
    <h1 class="content-title">Arsip <span>Page</span></h1>
@endsection

@section('content')
    <div class="container">
        <a href="/arsip/create" class="btn btn-success">Add Arsip</a>
        <hr>
        @forelse ($arsip as $key=>$value )
        <div class="card">
            <iframe src="{{ asset('admin/arsip/'.$value->file_arsip) }}" frameborder="1"></iframe>
            <h1>{{ $value->name_arsip }}</h1>
            <div class="btn-action">
                <a href="{{ asset('admin/arsip/'.$value->file_arsip) }}"><button class="btn btn-info">Download</button></a>
                <a href="/arsip/{{ $value->id }}/edit"><button class="btn btn-warning">Edit</button></a>
                <form action="/arsip/{{ $value->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        @empty
            <h1>No Data Available</h1>
        @endforelse
    </div>
@endsection