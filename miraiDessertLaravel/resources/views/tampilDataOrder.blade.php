@extends('dashboard')
@Include ('components.cssWebsite')
@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="container-fluid col-10">
            <h2 class="font-weight-bolder mb-3  ">Mengedit Data Penjualan</h2>

            <form action="/updateDataOrder/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="idPenjualan" class="form-label">ID Penjualan</label>
                    <input type="form-text" name="id" class="form-control"
                        value="{{$data->id}}">
                </div>
                <div class="mb-3">
                    <label for="selectProduct" class="form-label">Produk</label>
                    <select id="selectProduct" name="productList" class="form-select">
                    <!-- <option selected> {{ $data->productList }}</option> -->
                    <option selected disabled>Pilih Produk</option>
                    <option @if($data['productList']=='Mango Sago 300 ml') selected @endif value="Mango Sago 300 ml">Mango Sago 300 ml</option>
                    <option @if($data['productList']=='Mango Sago 400 ml') selected @endif  value="Mango Sago 400 ml">Mango Sago 400 ml</option>
                    <option @if($data['productList']=='Strawberry Sago 300 ml') selected @endif value="Strawberry Sago 300 ml">Strawberry Sago 300 ml</option>
                    <option @if($data['productList']=='Strawberry Sago 400 ml') selected @endif value="Strawberry Sago 400 ml">Strawberry Sago 400 ml</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total Harga</label>
                    <input type="number" name="orderTotal" class="form-control" value="{{$data->orderTotal}}">  
                </div>
                <div class="mb-3">
                    <label for="tanggalPembelian" class="form-label">Tanggal Pembelian</label>
                    <input type="date" class="form-control" name="orderDate" value="{{ Carbon\Carbon::parse($data->orderDate)->format('Y-m-d') }}"> 
                </div>
                <div class="mb-3">
                    <label for="paymentType" class="form-label">Metode Pembayaran</label>
                    <select id="paymentType" name="paymentType" class="form-select">
                    <!-- <option selected> {{ $data->paymentType }}</option> -->
                    <option selected disabled>Pilih Metode Pembayaran</option>
                    <option @if($data['paymentType']=='Transfer') selected @endif value="Transfer">Transfer</option>
                    <option @if($data['paymentType']=='Tunai') selected @endif value="Tunai">Tunai</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" name="paymentStatus" class="form-select">
                    <!-- <option selected>{{$data->paymentStatus}}</option> -->
                    <option selected disabled>Pilih Status Pesanan</option>
                    <option @if($data['paymentStatus']=='Done') selected @endif value="Done">Done</option>
                    <option @if($data['paymentStatus']=='Cancel') selected @endif  value="Cancel">Cancel</option>
                    <option @if($data['paymentStatus']=='Pending') selected @endif  value="Pending">Pending</option>
                    </select>
                </div>

                <div class="card-footer mt-4">

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="\invoices" class="btn btn-warning ms-3" style="color: black">
                    <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>


            </form>

        </div>
    </div>
</main>

@endsection
@include ('components.pluginDashboard')
@include ('components.scriptDashboard')
