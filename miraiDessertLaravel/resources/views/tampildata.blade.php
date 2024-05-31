<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
if ($aksi == "tambah") {
    include "tableOrdersAdd.php";
} else if ($aksi == "edit") {
    include "tableOrdersEdit.php";
} else {
    ?>

        <div class="row mb-4">
            <div class="col-12 mb-lg-0">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h6>Orders Graphics</h6>

                    </div>
                    <div class="card-body">
                        <div>
                            <canvas style="height: 10px;" id="chart-bars" height="-100"></canvas>
                        </div>
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
            </div>
        </div>
        <!-- Graphics  -->
        <div class="row">
            <div class="col-12  mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-2">
                                <a class=" btn bg-gradient-info mt-3 w-100"
                                    href="./dashboard.php?section=ordersPage&aksi=tambah">EDIT
                                    DATA
                                </a>
                            </div>
                            <div class="col-10 mt-3 ">
                                <div class="ms-md-auto pe-md-3 ">
                                    <div class="input-group">
                                        <span class="input-group-text text-body"><i class="fas fa-search"
                                                aria-hidden="true"></i></span>
                                        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control"
                                            placeholder="Cari data penjualan...">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="align-middle text-center font-weight-bolder">No</th>
                                        <th class="align-middle text-center font-weight-bolder">ID Penjualan</th>
                                        <th class="align-middle text-center font-weight-bolder">Produk</th>
                                        <th class="align-middle text-center font-weight-bolder">
                                            Total Harga</th>
                                        <th class="align-middle text-center font-weight-bolder">
                                            Tanggal Pembelian</th>
                                        <th class="align-middle text-center font-weight-bolder">
                                            Metode Pembayaran</th>
                                        <th class="align-middle text-center font-weight-bolder">
                                            Status</th>
                                        <th class="align-middle text-center font-weight-bolder">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                @foreach ($data as $row )
    
                                    <tr>
                                        <td class="align-middle text-center text-sm">1</td>
                                        <td class="align-middle text-center text-sm">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn bg-gradient-secondary" style="margin-bottom:0px;"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                MD0098
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true"
                                                style="--bs-modal-width: 800px;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Invoices</h5>
                                                            <button type="button" class="btn-close text-dark"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn bg-gradient-secondary"
                                                                data-bs-dismiss="modal">Close</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="tableOrders"></a>
                                        </td>
                                        <td class="align-middle text-center text-sm">1 Strawberry Sago</td>
                                        <td class="align-middle text-center text-sm">Rp20.000</td>
                                        <td class="align-middle text-center text-sm">Jumat, 30-03-2024</td>
                                        <td class="align-middle text-center text-sm">Tunai</td>
                                        <td class="align-middle text-center text-sm">
                                            <a class=" btn bg-gradient-warning w-100">PENDING
                                            </a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning">
                                                <a href="./dashboard.php?section=ordersPage&aksi=edit">EDIT</a>
                                            </button>
                                            <button type="button" class="btn btn-danger">DELETE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-center text-sm">2</td>
                                        <td class="align-middle text-center text-sm">MD0097</td>
                                        <td class="align-middle text-center text-sm">2 Mango Sago, 2 Strawberry Sago</td>
                                        <td class="align-middle text-center text-sm">Rp76.000</td>
                                        <td class="align-middle text-center text-sm">Jumat, 30-03-2024</td>
                                        <td class="align-middle text-center text-sm">Transfer</td>
                                        <td class="align-middle text-center text-sm">
                                            <a class=" btn bg-gradient-success w-100">DONE
                                            </a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning">
                                                <a href="./dashboard.php?section=ordersPage&aksi=edit">EDIT</a>
                                            </button>
                                            <button type="button" class="btn btn-danger">DELETE</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-center text-sm">3</td>
                                        <td class="align-middle text-center text-sm">MD0096</td>
                                        <td class="align-middle text-center text-sm">2 Mango Sago</td>
                                        <td class="align-middle text-center text-sm">Rp40.000</td>
                                        <td class="align-middle text-center text-sm">Jumat, 22-03-2024</td>
                                        <td class="align-middle text-center text-sm">Transfer</td>
                                        <td class="align-middle text-center text-sm">
                                            <a class=" btn bg-gradient-success w-100">DONE
                                            </a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning">
                                                <a href="./dashboard.php?section=ordersPage&aksi=edit">EDIT</a>
                                            </button>
                                            <button type="button" class="btn btn-danger">DELETE</button>
                                        </td>
                                    </tr>
                                    <>
                                        <td class="align-middle text-center text-sm">4</td>
                                        <td class="align-middle text-center text-sm">MD0095</td>
                                        <td class="align-middle text-center text-sm">1 Mango Sago</td>
                                        <td class="align-middle text-center text-sm">Rp20.000</td>
                                        <td class="align-middle text-center text-sm">Jumat, 22-03-2024</td>
                                        <td class="align-middle text-center text-sm">Tunai</td>
                                        <td class="align-middle text-center text-sm">
                                            <a class=" btn bg-gradient-danger w-100">CANCEL
                                            </a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning">
                                                <a href="./dashboard.php?section=ordersPage&aksi=edit">EDIT</a>
                                            </button>
                                            <button type="button" class="btn btn-danger">DELETE</button>
                                        </td>
                                    </tr>

                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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