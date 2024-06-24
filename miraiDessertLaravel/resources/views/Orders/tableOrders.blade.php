@extends('dashboard')

@section('content')


<div class="row">
    <div class="col-12 mb-4">
        <div class="p-6 m-20 bg-white rounded shadow">
            {!! $chart->container() !!}
        </div>
    </div>
    <div class="col-12  mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-2">
                        <a class=" btn bg-gradient-success mt-3 w-100" href="/tambahDataOrder">
                            Tambah Data
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
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="align-middle text-center font-weight-bolder">No</th>
                                    <!-- <th class="align-middle text-center font-weight-bolder">ID Penjualan</th> -->
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
                                        Action</th>
                                </tr>
                            </thead>

                            <tbody id="myTable">
                                <?php 
                        $no = 1;

                        ?>
                                @foreach ($data as $row)

                                <tr>
                                    <td class="align-middle text-center text-sm">{{ $no }}</td>
                                    <!-- <td class="align-middle text-center text-sm">{{ $row->id }}</td> -->
                                    <td class="align-middle text-center text-sm">{{  $row->productList }}</td>
                                    <td class="align-middle text-center text-sm">{{  $row->orderTotal  }}</td>
                                    <td class="align-middle text-center text-sm">
                                        {{  Carbon\Carbon::parse($row->orderDate)->format('Y-m-d') }}
                                    </td>

                                    <td class="align-middle text-center text-sm">{{ $row->paymentType}}</td>
                                    <td class="align-middle text-center text-sm" style="cursor: ">
                                        <?php
                                    $status;
                                    if ($row->paymentStatus == "Done") {
                                        $status = 'success';                              
                                                                                                                                                                ?>
                                    <a class="btn btn-<?php        echo $status; ?>">{{ $row->paymentStatus }}</a>
                                    <?php
                                    } else if ($row->paymentStatus == "Pending") {
                                        $status = 'info';
                                                                                                                                                                ?>
                                    <a
                                        class="btn btn-<?php            echo $status; ?>">{{ $row->paymentStatus }}</a>
                                    <?php
                                        } else if ($row->paymentStatus == "Cancel") {
                                            $status = 'secondary';
                                                                                                                                                                ?>
                                    <a
                                        class="btn btn-<?php            echo $status; ?>">{{ $row->paymentStatus }}</a>
                                    <?php
                                        }
                                                                                                                                                                ?>

                                    </td>
                                    <td>
                                        <a href="/tampilkanDataOrder/{{$row->id}}" class="btn btn-warning">EDIT</a>
                                        <a href="/delete/{{$row->id}}" class="btn btn-danger">HAPUS</button>
                                    </td>
                                </tr>
                                <?php                                                                                                                                                       $no++;
                                                                                                                                                            ?>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}
</body>

@endsection