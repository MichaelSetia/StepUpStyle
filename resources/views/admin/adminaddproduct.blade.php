
@extends('admin.layout.admin')
@section('content')

<div class="col-md-12 mt-2">

    <div class="card container-fluid">

        <div class="card-body w-100 ">
            <div class="d-flex container-fluid p-2">
                <h3>Add Master Product</h3>
                <a href="/adminproduct" class="btn btn-primary ml-auto mb-1">Back</a>
            </div>
            <form action="{{ route('Useraddadmin') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="namaSepatu" class="form-label">Nama Sepatu</label>
                    <input type="text" class="form-control" id="namaSepatu" name="namaSepatu" placeholder="Masukkan Nama Sepatu">
                </div>
    
                <!-- Harga -->
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga">
                </div>
    
                <!-- Warna -->
                <div class="mb-3">
                    <label for="warna" class="form-label">Warna</label>
                    <input type="text" class="form-control" id="warna" name="warna" placeholder="Masukkan Warna">
                </div>
    
                <!-- Gambar -->
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                </div>
    
                <!-- Ukuran -->
                <div class="mb-3">
                    <label for="ukuran" class="form-label">Ukuran</label>
                    <select class="form-select" id="ukuran" name="ukuran">
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <!-- Tambahkan opsi ukuran lainnya sesuai kebutuhan -->
                    </select>
                </div>
    
                <!-- Warna (Combobox) -->
                <div class="mb-3">
                    <label for="warnaCombobox" class="form-label">Warna</label>
                    <select class="form-select" id="warnaCombobox" name="warnaCombobox">
                        <option value="Merah">Merah</option>
                        <option value="Biru">Biru</option>
                        <option value="Hijau">Hijau</option>
                        <!-- Tambahkan opsi warna lainnya sesuai kebutuhan -->
                    </select>
                </div>
    
                <!-- Brand -->
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <select class="form-select" id="brand" name="brand">
                        <option value="Nike">Nike</option>
                        <option value="Adidas">Adidas</option>
                        <option value="Puma">Puma</option>
                        <!-- Tambahkan opsi brand lainnya sesuai kebutuhan -->
                    </select>
                </div>
    
                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection