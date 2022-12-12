<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Edit Data</title>
</head>
<body>
    <div class="col-sm">
        <h4><a class="text-decoration-none text-dark" style="color: white; font-size:30px; padding-top:20px; padding-left:20px; ">Edit Data: {{$data->productName}}</a></h4>
    </div>
    <form action="{{route('data.update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group" style="padding-top:20px; padding-left:20px; padding-right:60px">
          <label for="productId">Product ID</label>
          <input class="form-control" name="productId" value="{{$data->productId}}">
        </div>
        <div class="form-group"  style="padding-top:20px; padding-left:20px; padding-right:60px">
          <label for="productName">Product Name</label>
          <input class="form-control" name="productName" value="{{$data->productName}}">
        </div>
        <div class="form-group"  style="padding-top:20px; padding-left:20px; padding-right:60px">
          <label for="amount">Amount</label>
          <input class="form-control" name="amount" value="{{$data->amount}}">
        </div>
        <div class="form-group"  style="padding-top:20px; padding-left:20px; padding-right:60px">
          <label for="productName">Customer name</label>
          <input class="form-control" name="customerName" value="{{$data->customerName}}">
        </div>
        <div class="form-group"  style="padding-top:20px; padding-left:20px; padding-right:60px">
          <label for="productName">Insert Status</label>
          <input class="form-control" name="status" value="{{$data->status}}">
          <small id="emailHelp" class="form-text text-muted">Can only be 0 or 1</small>
        </div>
        <div class="form-group"  style="padding-top:20px; padding-left:20px; padding-right:60px">
          <label for="productName">Transaction Date</label>
          <input class="form-control" name="transactionDate" value="{{$data->transactionDate}}">
        </div>
        <div class="form-group" style="padding-top:20px; padding-left:20px; padding-right:60px">
            <label for="productName">Created by</label>
            <input class="form-control" name="createBy" value="{{$data->createBy}}">
        </div>
        <div class="form-group" style="padding-top:20px; padding-left:20px; padding-right:60px">
            <label for="productName">Created on</label>
            <input class="form-control" name="createOn" value="{{$data->createOn}}">
        </div>

        <button type="submit" class="btn btn-primary"  style="margin-top:20px; margin-left:20px; margin-bottom:50px">Submit</button>
      </form>
</body>
</html>
