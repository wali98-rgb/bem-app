@extends('admin.master')

@section('title')
    Pengguna Aplikasi | Admin Page
@endsection

@section('page')
    Anggota
@endsection

@section('title-page')
    <h1>Halaman <span>Anggota</span></h1>
@endsection

@section('content')
    <a href="/member/create" class="btn-create">
        <i class="bi bi-plus-circle"></i> &nbsp;
        <label for="">Tambah Pengguna</label>
    </a>
    <div class="member">
        <h1>Anggota BEM</h1>
        <div class="member-content">
            <table width="100%">
                <tr>
                    <th style="padding: 0 0 .5rem; border-bottom: 1px solid black;" width="5%">#</th>
                    <th style="padding: 0 0 .5rem; border-bottom: 1px solid black;" width="30%">Foto</th>
                    <th style="padding: 0 0 .5rem; border-bottom: 1px solid black;" width="45%">Data Pengguna</th>
                    <th style="padding: 0 0 .5rem; border-bottom: 1px solid black;" width="20%" colspan="3">Tindakan</th>
                </tr>
                @forelse ($member_bem as $key=>$value)
                    <tr align="center">
                        <td>{{ $key + 1 }}</td>
                        <td>
                            @if ($value->photo == "")
                                <b><i>Silahkan Tambahkan Foto</i></b>
                            @else
                                <img src="{{ asset('img/photo_profile/'.$value->photo) }}" alt="Foto Profil" width="100%">
                            @endif
                        </td>
                        <td>
                            <table style="margin: .5rem 0">
                                <tr>
                                    <td class="font-title">Nama Lengkap </td>
                                    <td>: {{ $value->name }}</td>
                                </tr>
                                <tr>
                                    <td class="font-title">Username </td>
                                    <td>: {{ $value->username }}</td>
                                </tr>
                                <tr>
                                    <td class="font-title">Email </td>
                                    <td>: {{ $value->email }}</td>
                                </tr>
                                <tr>
                                    <td class="font-title">Departemen </td>
                                    <td>: {{ $value->dept }}</td>
                                </tr>
                                <tr>
                                    <td class="font-title">No. Hp </td>
                                    <td>: {{ $value->no_hp }}</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <a href="/member/{{ $value->id }}/edit" class="btn-edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="/member/{{ $value->id }}" class="btn-show">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                        <td>
                            <form action="/member/{{ $value->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn-delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <b>Tidak ada data pengguna</b>
                        </td>
                    </tr>
                @endforelse
                <tr>
                    <th style="padding: .5rem 0 0; border-top: 1px solid black;">#</th>
                    <th style="padding: .5rem 0 0; border-top: 1px solid black;">Foto</th>
                    <th style="padding: .5rem 0 0; border-top: 1px solid black;">Data Pengguna</th>
                    <th style="padding: .5rem 0 0; border-top: 1px solid black;" colspan="3">Tindakan</th>
                </tr>
            </table>
        </div>
    </div>
    <div class="member">
        <h1>Mahasiswa</h1>
        <div class="member-content">
            <table width="100%">
                <tr>
                    <th style="padding: 0 0 .5rem; border-bottom: 1px solid black;" width="5%">#</th>
                    <th style="padding: 0 0 .5rem; border-bottom: 1px solid black;" width="30%">Foto</th>
                    <th style="padding: 0 0 .5rem; border-bottom: 1px solid black;" width="45%">Data Pengguna</th>
                    <th style="padding: 0 0 .5rem; border-bottom: 1px solid black;" width="20%" colspan="3">Tindakan</th>
                </tr>
                @forelse ($member_mhs as $key=>$value)
                    <tr align="center">
                        <td>{{ $key + 1 }}</td>
                        <td>
                            @if ($value->photo == "")
                                <b><i>Silahkan Tambahkan Foto</i></b>
                            @else
                                <img src="{{ asset('img/photo_profile/'.$value->photo) }}" alt="Foto Profil" width="100%">
                            @endif
                        </td>
                        <td>
                            <table style="margin: .5rem 0">
                                <tr>
                                    <td class="font-title">Nama Lengkap </td>
                                    <td>: {{ $value->name }}</td>
                                </tr>
                                <tr>
                                    <td class="font-title">Username </td>
                                    <td>: {{ $value->username }}</td>
                                </tr>
                                <tr>
                                    <td class="font-title">Email </td>
                                    <td>: {{ $value->email }}</td>
                                </tr>
                                <tr>
                                    <td class="font-title">No. Hp </td>
                                    <td>: {{ $value->no_hp }}</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <a href="/member/{{ $value->id }}/edit" class="btn-edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="/member/{{ $value->id }}" class="btn-show">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                        <td>
                            <form action="/member/{{ $value->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn-delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <b>Tidak ada data pengguna</b>
                        </td>
                    </tr>
                @endforelse
                <tr>
                    <th style="padding: .5rem 0 0; border-top: 1px solid black;">#</th>
                    <th style="padding: .5rem 0 0; border-top: 1px solid black;">Foto</th>
                    <th style="padding: .5rem 0 0; border-top: 1px solid black;">Data Pengguna</th>
                    <th style="padding: .5rem 0 0; border-top: 1px solid black;" colspan="3">Tindakan</th>
                </tr>
            </table>
        </div>
    </div>
@endsection