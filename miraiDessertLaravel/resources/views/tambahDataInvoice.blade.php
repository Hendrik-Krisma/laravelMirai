@extends('dashboard')
@Include ('components.cssWebsite')

@section('content')


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <div class="container-fluid py-4">
    <div class="container-fluid col-10">
      <h2 class="font-weight-bolder mb-3  ">Menambahkan Data Invoice</h2>
      <form action="/insertInvoice" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- <div class="form-group">
          <label for="example-text-input" class="form-control-label">Order ID</label>
          <input type="number" class="form-control" name="orderID" id="example-text-input">
        </div> -->
        <div class="form-group">
          <label for="exampleInputIsueDate" class="form-control-label">Issue Date</label>
          <input type="date" class="form-control" name="issueDate" id="exampleInputIssueDate">
        </div>
        <div class="form-group">
          <label for="exampleInputDueDate" class="form-control-label">Due Date</label>
          <input type="date" class="form-control" name="dueDate" id="exampleInputDueDate">
        </div>
        <div class="form-group pb-2">
          <label for="examplePaid" class="form-control-label">Paid</label>
          <input type="number" class="form-control" name="paid" id="examplepaid">
        </div>
        <div class="card-footer mt-4">

          <button type="submit" name="btn" value="Simpan" class="btn btn-info">
            <i class="fas fa-save"></i> Simpan
          </button>
          <a href="\invoices" class="btn btn-warning ms-3" style="color: black">
            <i class="fas fa-arrow-left"></i> Kembali
          </a>
        </div>
      </form>

    </div>
  </div>
</main>
@endsection
@include ('components.pluginDashboard')
@include ('components.scriptDashboard')