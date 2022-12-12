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
    <title>Data Detail</title>
</head>
<body>
    @foreach ($data as $product)

    @endforeach
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div class="col-sm">
                    <h5><a class="text-decoration-none text-dark" style="color: white; font-size:50px">{{ $product->productName }}</a></h5>
                </div>
                <div class="description text-white">
                    <div class="row">
                        <div class="col-sm">
                            <b class="text-dark">ID</b>
                        </div>
                        <p class="text-dark" style="padding-top: 10px">{{ $product->id }}</p>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <b class="text-dark">Product ID</b>
                        </div>
                        <p class="text-dark" style="padding-top: 10px">{{ $product->productId }}</p>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <b class="text-dark">Amount</b>
                        </div>
                        <p class="text-dark" style="padding-top: 10px">{{ $product->amount }}</p>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <b class="text-dark">Customer Name</b>
                        </div>
                        <p class="text-dark" style="padding-top: 10px">{{ $product->customerName}}</p>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <b class="text-dark">Status</b>
                        </div>
                        <p class="text-dark" style="padding-top: 10px">{{$product->name}}</p>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <b class="text-dark">Transaction Date</b>
                        </div>
                        <p class="text-dark" style="padding-top: 10px">{{ $product->transactionDate}}</p>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <b class="text-dark">Created By</b>
                        </div>
                        <p class="text-dark" style="padding-top: 10px">{{ $product->createBy}}</p>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <b class="text-dark">Created On</b>
                        </div>
                        <p class="text-dark" style="padding-top: 10px">{{ $product->createOn}}</p>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-sm">
                <a href="" class="btn btn-outline-primary" role="button" style="size: 20px">Edit Data</a>
            </div>
        </div>
        

    </div>
</body>
</html>
