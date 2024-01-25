@extends('admin.master')

@section('title')
    Study Program | Admin Page
@endsection

@section('content')
    <section class="content-admin">
        <div class="content">
            <h1 class="content-title">Study Program <span>Page</span></h1>
            <div class="container">
                <a href="/prodi/create" class="btn btn-success">Add Prodi</a>
                <hr>
                <table class="table" width="100%" cellpadding="15" border="1">
                    <tr>
                        <th width="20%">#</th>
                        <th width="60%">Study Program</th>
                        <th width="20%" colspan="2">Action</th>
                    </tr>
                    @forelse ($prodi as $key=>$value)
                        <tr align="center" width="100%">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->name_prodi }}</td>
                            <td>
                                <a href="/prodi/{{ $value->id }}/edit"><button class="btn btn-warning">Edit</button></a>
                            </td>
                            <td>
                                <form action="/prodi/{{ $value->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                    <tr align="center">
                        <td colspan="4">
                            <h1>No Data Available</h1>
                        </td>
                    </tr>
                    @endforelse
                    <tr>
                        <th>#</th>
                        <th>Study Program</th>
                        <th colspan="2">Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </section>
@endsection