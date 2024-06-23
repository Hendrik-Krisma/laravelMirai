@extends('dashboard')

@section('content')
<div class="row">
    <div class="col-12  mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-2">
                        <a class=" btn bg-gradient-success mt-3 w-100"
                            href="/tambahDataInvoice ">
                            Tambah Data
                        </a>
                    </div>
                    <div class="col-10 mt-3 ">
                        <div class="ms-md-auto pe-md-3 ">
                            <div class="input-group">
                                <span class="input-group-text text-body"><i class="fas fa-search"
                                        aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Cari data penjualan...">
                            </div>
                        </div>
                 
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>  
                                <th class="align-middle text-center font-weight-bolder">No</th>
                                <th class="align-middle text-center font-weight-bolder">OrderID</th>
                                <th class="align-middle text-center font-weight-bolder">
                                    Issue Date </th>
                                <th class="align-middle text-center font-weight-bolder">
                                    Due Date </th>
                                <th class="align-middle text-center font-weight-bolder">
                                    Paid</th>
                                <!-- <th class="align-middle text-center font-weight-bolder">
                                    Paid</th> -->
                                <th class="align-middle text-center font-weight-bolder">
                                    Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        <?php 
                            $no=1;
                        ?>
                        @foreach ($data as $row)
                            <tr>
                                <td class="align-middle text-center text-sm">{{ $no }}</td>
                                <td class="align-middle text-center text-sm">{{ $row->orderID }}</td>
                                <td class="align-middle text-center text-sm">{{ Carbon\Carbon::parse($row->issuerDate)->format('Y-m-d') }}</td>
                                <td class="align-middle text-center text-sm">{{ Carbon\Carbon::parse($row->dueDate)->format('Y-m-d') }}</td>
                                <td class="align-middle text-center text-sm">{{ $row->paid }}</td>
                                <td>
                                <a href= "../tampilDataInvoice/{{$row->id}}" class="btn btn-warning">EDIT</a>
                                <a href="../deleteDataInvoice/{{$row->id}}" class="btn btn-danger">DELETE</button>
                                </td>
                            </tr>
                        <?php 
                            $no++;
                        ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


