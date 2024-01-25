@extends('admin.master')

@section('title')
    Dashboard | Admin Page
@endsection

@section('page')
    Dashboard
@endsection

@section('title-page')
    <h1>Halaman <span>Dashboard</span></h1>
@endsection

@section('content')
    <div class="jb-content">
        <div class="jb-title">
            <label>Selamat Datang di <b class="bem-title">BEM-<span>IM</span></b></label>
        </div>
        <span>Kami telah siapkan beberapa langkah untuk anda memulai.</span>
        <div class="row">
            <div class="cta-content">
                <div class="cta-title">
                    <b for="">Memulai</b>
                </div>
                <a href="#">Tentang Aplikasi</a>
            </div>
            <div class="step-content">
                <div class="step-title">
                    <b>Langkah Berikutnya :</b>
                </div>
                <a href="#">
                    <i class="bi bi-newspaper"></i>
                    <label for="">Berita</label>
                </a>
                <a href="#">
                    <i class="bi bi-cone-striped"></i>
                    <label for="">Pengumuman</label>
                </a>
                <a href="#">
                    <i class="bi bi-image"></i>
                    <label for="">Dokumentasi</label>
                </a>
            </div>
            <div class="action-content">
                <div class="action-title">
                    <b>Tindakan Lainnya :</b>
                </div>
                <a href="#">
                    <i class="bi bi-flag"></i>
                    <label for="">Laporan Data</label>
                </a>
                <a href="#">
                    <i class="bi bi-question-circle"></i>
                    <label for="">Kuisioner</label>
                </a>
                <a href="#">
                    <i class="bi bi-archive"></i>
                    <label for="">Berkas & Persuratan</label>
                </a>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="news-content">
            <div class="total-content">
                <b>Total Berita :</b>
                <div class="btn-total-content">
                    <div class="peaces-one">
                        <a href="#">
                            <i class="bi bi-card-heading"></i> &nbsp; : &nbsp;
                            <label for="">... Berita</label>
                        </a>
                        <a href="#">
                            <i class="bi bi-chat-left-dots"></i> &nbsp; : &nbsp;
                            <label for="">... Ulasan</label>
                        </a>
                    </div>
                    <div class="peaces-two">
                        <a href="#">
                            <i class="bi bi-people-fill"></i> &nbsp; : &nbsp;
                            <label for="">... User</label>
                        </a>
                    </div>
                </div>
            </div>
            <div class="activity-content">
                <b>Aktivitas :</b>
                <div class="activity-session">
                    <b>Baru saja diterbitkan</b>
                    <div class="main-activity">
                        <div class="img-news">
                            <img src="{{ asset('img/bem.png') }}" alt="gambar" width="50rem">
                        </div>
                        <div class="date-news">
                            <div class="title-date">
                                <h3>Judul Berita</h3>
                                <span>
                                    <i class="bi bi-chat-left-dots"></i> &nbsp; : &nbsp;
                                    <label for="">... Ulasan</label>
                                </span>
                            </div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione sint optio a molestiae at ea quasi...</p>
                            <a href="#">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-content">
            <b>Buat Berita Cepat</b>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-input-file">
                    <input type="file" name="cover" id="" placeholder="Masukkan Cover">
                    @error('cover')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-input">
                    <input type="text" name="title_news" id="" placeholder="Masukkan Title Berita" required>
                    @error('title_news')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-input">
                    <input type="text" name="dua" id="" placeholder="Masukkan ..." required>
                    @error('dua')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-input">
                    <input type="text" name="tiga" id="" placeholder="Masukkan ..." required>
                    @error('tiga')
                        {{ $message }}
                    @enderror
                </div>
                <div class="btn-submit">
                    <button class="res" style="background-color: yellow; color: var(--font-secondary);" type="reset" name="reset"><i class="bi bi-arrow-clockwise"></i></button>
                    <button class="sub" style="background-color: green;" type="submit" name="add"><i class="bi bi-save2"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection