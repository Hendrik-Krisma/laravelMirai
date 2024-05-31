<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>data invoices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">DATA INVOICES MIRAI</h1>
    <div class="container">
    <a href=/tambahDataInvoice <button type="button" class="btn btn-success" >Tambah +</button> </a>
        <div class="row">
        <table class="table">
    <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">orderID</th>
      <th scope="col">issueDate</th>
      <th scope="col">dueData</th>
      <th scope="col">paid</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $row->id }}</th>
      <td>{{ $row->orderID }}</td>
      <td>{{ $row->issueDate }}</td>
      <td>{{ $row->dueDate }}</td>
      <td>{{ $row->paid }}</td>
      <td>
        <button type="button" class="btn btn-warning">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
 
    @endforeach
   

  </tbody>
</table>
        </div>
    </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>