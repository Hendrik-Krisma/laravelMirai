<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>data invoices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">TAMBAH DATA INVOICES MIRAI</h1>
    <div class="container">

        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="card-body">
        
                  <form action="/insertInvoice" method="POST" enctype="multipart/form-data">
                    @csrf

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Order Id</label>
                    <input type="number" class="form-control" name="orderID" id="exampleInputOrderID" >
                  <div class="mb-3">
                    <label for="exampleInputIssueDate" class="form-label">Issue Date</label>
                    <input type="date" class="form-control" name="issueDate" id="exampleInputIssueDate">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputDueDate" class="form-label">Due Date</label>
                    <input type="date" class="form-control" name="dueDate" id="exampleInputDueDate">
                  </div>
                  <div class="mb-3">
                    <label for="paid" class="form-label">Paid</label>
                    <input type="number" class="form-control" name="paid" id="examplepaid">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                  <a href ="\invoices" class="btn btn-warning">
                    <i class="fas fa-arrow-left"></i>Kembali
                  </a>
                  <!-- <button class="btn btn-warning" href="/invoices">Kembali</button> -->
                 
                  </form>
                
                </div>
              </div>
            </div>



        </div>
    </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>