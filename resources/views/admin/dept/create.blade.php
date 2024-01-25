@extends('admin.master')

@section('title')
    Create Departement | Admin Page
@endsection

@section('content')
    <section class="content-admin">
        <div class="content">
            <h1 class="content-title">Create <span>Departement</span></h1>
            <div class="container">
                <a href="/dept" class="btn btn-danger">Back</a>
                <hr>
                <form action="/dept" method="POST" class="form">
                    @csrf
                    {{-- Name Departement Start --}}
                    <div class="card-box">
                        <label for="">Name Departement : </label>
                        <input type="text" name="name_dept" id="" placeholder="Input Name Departement...">
                    </div>
                    @error('name_dept')
                        <div class="close" role="alert">
                            <button type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    {{-- Name Departement End --}}

                    {{-- Button Start --}}
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    {{-- Button End --}}
                </form>
            </div>
        </div>
    </section>
@endsection