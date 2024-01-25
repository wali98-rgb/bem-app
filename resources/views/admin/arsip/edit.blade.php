@extends('admin.master')

@section('title')
    Update Arsip | Admin Page
@endsection

@section('content')
    <section class="content-admin">
        <div class="content">
            <h1 class="content-title">Update <span>Arsip</span></h1>
            <div class="container">
                <a href="/arsip" class="btn btn-danger">Back</a>
                <hr>
                <form action="/arsip/{{ $arsip->id }}" method="POST" enctype="multipart/form-data" class="form">
                    @csrf
                    @method('PUT')
                    {{-- File Arsip Start --}}
                    <div class="card-box">
                        <label for="">File Arsip : </label>
                        <input type="file" name="file_arsip" id="" value="{{ $arsip->file_arsip }}" placeholder="Update Arsip File...">
                    </div>
                    @error('file_arsip')
                        <div class="close" role="alert">
                            {{ $message }}
                            <button type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    {{-- File Arsip End --}}

                    {{-- Name Arsip Start --}}
                    <div class="card-box">
                        <label for="">Name Arsip : </label>
                        <input type="text" name="name_arsip" id="" value="{{ $arsip->name_arsip }}" placeholder="Update Name Arsip...">
                    </div>
                    @error('name_arsip')
                        <div class="close" role="alert">
                            {{ $message }}
                            <button type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    {{-- Name Arsip End --}}

                    {{-- Button Start --}}
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    {{-- Button End --}}
                </form>
            </div>
        </div>
    </section>
@endsection