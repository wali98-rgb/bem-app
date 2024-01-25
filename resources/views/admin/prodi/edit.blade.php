@extends('admin.master')

@section('title')
    Update Studi Program | Admin Page
@endsection

@section('content')
    <section class="content-admin">
        <div class="content">
            <h1 class="content-title">Update <span>Study Program</span></h1>
            <div class="container">
                <a href="/prodi" class="btn btn-danger">Back</a>
                <hr>
                <form action="/prodi/{{ $prodi->id }}" method="POST" class="form">
                    @csrf
                    @method('PUT')
                    {{-- Study Program Start --}}
                    <div class="card-box">
                        <label for="">Study Program : </label>
                        <input type="text" name="name_prodi" id="" value="{{ $prodi->name_prodi }}" placeholder="Update Study Program...">
                    </div>
                    @error('name_prodi')
                        <div class="close" role="alert">
                            <button type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    {{-- Study Program End --}}

                    {{-- Button Start --}}
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    {{-- Button End --}}
                </form>
            </div>
        </div>
    </section>
@endsection