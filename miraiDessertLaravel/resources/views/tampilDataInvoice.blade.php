@extends('dashboard')
@Include ('components.cssWebsite')
@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <div class="container-fluid py-4">
    <div class="container-fluid col-10">
      <h2 class="font-weight-bolder mb-3  ">Mengedit Data Invoice</h2>

      <form action="/updateDataInvoice/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Order Id</label>
          <input type="number" class="form-control" name="orderID" id="exampleInputOrderID" value="{{$data->orderID}}">

          <div class="mb-3">
            <label for="exampleInputIssueDate" class="form-label">Issue Date</label>
            <input type="date" class="form-control" name="issueDate" id="exampleInputIssueDate"
              value="{{$data->issueDate}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputDueDate" class="form-label">Due Date</label>
            <input type="date" class="form-control" name="dueDate" id="exampleInputDueDate" value="{{$data->dueDate}}">
          </div>
          <div class="mb-3">
            <label for="paid" class="form-label">Paid</label>
            <input type="number" class="form-control" name="paid" id="examplepaid" value="{{$data->paid}}">
          </div>
          <div class="card-footer mt-4">

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="\invoices" class="btn btn-warning ms-3" style="color: black">
              <i class="fas fa-arrow-left"></i> Back
            </a>
          </div>


          <!-- <button type="submit" class="btn btn-warning" a href="invoices">Kembali</button> -->

      </form>
    </div>
  </div>
</main>

@endsection
@include ('components.pluginDashboard')
@include ('components.scriptDashboard')


