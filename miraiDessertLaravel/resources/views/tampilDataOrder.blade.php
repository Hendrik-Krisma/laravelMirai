<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
if ($aksi == "tambah") {
    include "tableOrdersAdd.php";
} else if ($aksi == "edit") {
    include "tableOrdersEdit.php";
} else {
    ?>

       <body>
        <h1 class="text-center mb-4">Edit Data Penjualan</h1>

        <div class="container">

            <div class = "row justify-content-center">
                <div class="card">
                    <div class="card-body">
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
                                <option selected>Pilih Produk</option>
                                <option value="Mango Sago 300 ml">Mango Sago 300 ml</option>
                                <option value="Mango Sago 400 ml">Mango Sago 400 ml</option>
                                <option value="Strawberry Sago 300 ml">Strawberry Sago 300 ml</option>
                                <option value="Strawberry Sago 400 ml">Strawberry Sago 400 ml</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="total" class="form-label">Total Harga</label>
                                <input type="number" name="orderTotal" class="form-control" value="{{$data->orderTotal}}">  
                            </div>
                            <div class="mb-3">
                                <label for="tanggalPembelian" class="form-label">Tanggal Pembelian</label>
                                <input type="date" class="form-control" name="orderDate" value="{{$data->orderDate}}">  
                            </div>
                            <div class="mb-3">
                                <label for="paymentType" class="form-label">Metode Pembayaran</label>
                                <select id="paymentType" name="paymentType" class="form-select">
                                <!-- <option selected> {{ $data->paymentType }}</option> -->
                                <option selected>Pilih Metode Pembayaran</option>
                                <option value="Transfer">Transfer</option>
                                <option value="Tunai">Tunai</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" name="paymentStatus" class="form-select">
                                <!-- <option selected>{{$data->paymentStatus}}</option> -->
                                <option selected>Pilih Status Pesanan</option>
                                <option value="Done">Done</option>
                                <option value="Cancel">Cancel</option>
                                <option value="Pending">Pending</option>
                                </select>
                            </div>

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <!-- <a href="\penjualanMirai"> -->
                                <i class="fas fa-save"></i> Simpan
                                </a>
                            </button>
                            <a href="\penjualanMirai" class="btn btn-warning">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
       </body> 
       
        
    <?php
}
?>
<script>
    $(document).ready(function () {

        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {

                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            })
        })

    })
</script>
</script>