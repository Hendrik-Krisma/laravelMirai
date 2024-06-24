@extends('dashboard')

@section('content')
<div class="row">
    <div class="col-12  mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-3">
                        <a class=" btn bg-gradient-success mt-3 w-100" href="/register">
                            Register Akun
                        </a>
                    </div>
                    <div class="col-9 mt-3 ">
                        <div class="ms-md-auto pe-md-3 ">
                            <div class="input-group">
                                <span class="input-group-text text-body"><i class="fas fa-search"
                                        aria-hidden="true"></i></span>
                                <input type="text" id="myInput" onkeyup="myFunction()" class="form-control"
                                    placeholder="Cari akun...">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <!-- <th class="align-middle text-center font-weight-bolder">No</th> -->
                                <th class="align-middle text-center font-weight-bolder">ID</th>
                                <th class="align-middle text-center font-weight-bolder">
                                    Name</th>
                                <th class="align-middle text-center font-weight-bolder">
                                    Username</th>
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
                                        <!-- <td class="align-middle text-center text-sm">{{ $no }}</td> -->
                                        <td class="align-middle text-center text-sm">{{ $row->id}}</td>
                                        <td class="align-middle text-center text-sm">{{ $row->name}}</td>
                                        <td class="align-middle text-center text-sm">{{ $row->username}}</td>

                                        <td class="text-center">
                                            <!-- <a href="../tampilDataInvoice/{{$row->id}}" class="btn btn-warning">EDIT</a> -->
                                            <a href="../deleteAkun/{{$row->id}}" class="btn btn-danger">DELETE</button>
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
    @endsection