@extends('layouts.main')
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">

                    <form action="/success" method="POST">
                        @csrf
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control @error('namalengkap') is-invalid @enderror"
                            id="namalengkap" name="namalengkap" placeholder="Masukkan Nama Lengkap...">
                        @error('namalengkap')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <label>Keluhan</label>
                        <select name="keluh" id="keluh" class="form-control">
                            <option hidden>Keluhan</option>
                            <option value="Kebersihan">Kebersihan</option>
                            <option value="Fasilitas">Fasilitas</option>
                            <option value="Adminitrasi">Adminitrasi</option>
                        </select>
                        <label>Kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                            <option hidden>Kelas</option>
                            <option value="X">X</option>
                            <option value="XII">XI</option>
                            <option value="XII">XII</option>
                        </select>
                        <label>Nomor Handphone</label>
                        <input type="text" class="form-control" name="nomorhp"
                            placeholder="Masukkan Nomor Handphone...">
                        @error('nomorhp')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <label>Jenis Kelamin</label>
                        <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                            <option hidden>Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="TidakDisebutkan">Tidak Disebutkan</option>
                        </select>
                        <label>Komentar</label>
                        <textarea name="kategori" id="kategori" cols="10" rows="3" class="form-control"></textarea>
                        @error('kategori')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <button type="submit" class="btn btn-outline-primary float-right mt-3">Kirim Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
