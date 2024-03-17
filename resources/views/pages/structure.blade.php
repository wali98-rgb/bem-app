@extends('master')

@section('content')
    {{-- Structure Start --}}
    <section class="structure" id="structure">
        <h1 class="structure-title"><span>Struktur</span> Organisasi</h1>
        <div class="structure-img">
            <img src="{{ asset('img/struktur-organisasi.webp') }}" alt="Struktur Organisasi">
        </div>
        <div class="structure-members">
            <h2 class="structure-subtitle">Anggota Kabinet:</h2>
            <ul class="members-list">
                <li>
                    <div class="member-info">
                        <span>Presiden Mahasiswa (PRESMA)</span><br><br>
                        Miftah Farid Ramdani
                        <img src="#" alt="" class="member-photo">
                    </div>
                </li>
                <li>Wakil Presiden Mahasiswa<br><br>Kika Ramdan</li>
                <li>Sekertaris<br><br>Karimah Khairunnisa</li>
                <li>Bendahara<br><br>Putri adinda</li>
                <li>Mentri Departemen <br><br>Tanjung</li>
                <li>Mentri Departemen Sosial<br><br>Mella Magdalena</li>
                <li>Mentri Departemen Agama<br><br>Siti Hertina</li>
                <li>Mentri Departemen Ekonomi<br><br>Az-zahra Putri</li>
                <li>Mentri Departemen Kominfo<br><br>Waliyyudin</li>
                <li>Mentri Departemen Olahraga<br><br>Muhammad Wildan</li>
                <!-- Tambahkan mentri lainnya sesuai kebutuhan -->
            </ul>
        </div>
    </section>
    {{-- Structure End --}}
@endsection
