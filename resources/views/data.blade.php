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
    <title>Document</title>
</head>
<body>
    @if (session()->has('message'))
        <div class="mx-auto w-4/5 pb-10">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                Warning
            </div>
            <div class="border border-t-1 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                {{session()->get('message')}}
            </div>

        </div>
    @endif
    <a href="{{route('data.create')}}" class="btn btn-outline-primary" role="button" style="size: 20px; margin-left:20px;margin-top:10px">Create new data</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Status</th>
            <th scope="col">Transaction Date</th>
            <th scope="col">Created By</th>
            <th scope="col">Created On</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $datas)
            <tr>
                <th scope="row">{{$datas->id}}</th>
                <td>{{$datas->productId}}</td>
                <td>{{$datas->productName}}</td>
                <td>{{$datas->amount}}</td>
                <td>{{$datas->customerName}}</td>
                <td>{{$datas->status}}</td>
                <td>{{$datas->transactionDate}}</td>
                <td>{{$datas->createBy}}</td>
                <td>{{$datas->createOn}}</td>
                <td><a href="{{route('data.details',$datas->id)}}" class="btn btn-outline-primary" role="button" style="size: 20px">Detail</a>
                    <a href="{{route('data.edit',$datas->id)}}" class="btn btn-outline-primary" role="button" style="size: 20px">Edit</a>
                    <form action="{{route('data.delete',$datas->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">
                            Delete
                        </button>
                    </form>

                </td>
              </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
