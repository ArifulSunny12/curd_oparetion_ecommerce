@extends('admin.layout.adminApp')
@section('title','Admin Product')

@section('content')


<div class="row">
  <div class="col-8 ">   
  <h1 class="text-center"> Product Control Area </h1>
  </div>

  <div class="col-4"  > 
 @session('actionMessage')
    <div class="alert alert-success pt-2 m-0" id="messageDiv">{{session('actionMessage')}}</div>
@endsession
  </div>
</div>


<form action="/admin/addProduct" method="post">
@csrf
<div class="row g-3 align-items-center">
      <div class="col-auto">
      <span> Category Name: </span>
      </div>
      <div class="col-auto">
      <input type="text" id=" ProductName" name=" ProductName" class="form-control" placeholder="Enter Product Name" value="{{ old('ProductName') }}" required  >
      @error ('ProductName') <span class="text-danger">{{$message}} </span> @enderror
      </div>

      <div class="col-auto">
      <span> Description: </span> 
      </div>
      <div class="col-auto">
      <input type="text" id="ProductDescription" name="ProductDescription" class="form-control" placeholder="Enter Product Description" value="{{ old('ProductDescription') }}" required >
      @error ('ProductDescription') <span class="text-danger">{{$message}} </span> @enderror
      </div>

      <div class="col-auto">
      <span> Unit: </span> 
      </div>
      <div class="col-auto">
      <input type="text" id="ProductUnit" name="ProductUnit" class="form-control" placeholder="Enter Product Unit" value="{{ old('ProductUnit') }}" required >
      @error ('ProductUnit') <span class="text-danger">{{$message}} </span> @enderror
      </div>

      <div class="col-auto">
      <span> Price: </span> 
      </div>
      <div class="col-auto">
      <input type="text" id="ProductPrice" name="ProductPrice" class="form-control" placeholder="Enter Product Price" value="{{ old('ProductPrice') }}" required >
      @error ('ProductPrice') <span class="text-danger">{{$message}} </span> @enderror
      </div>

      <div class="col-auto">
      <span> Category: </span> 
      </div>
      <div class="col-auto">
        <select class="form-select" aria-label="Default select example" id="ProductCategory" name="ProductCategory" required>
        <option selected disabled value="">Select Category</option>
        <option value="1">mobile</option>
        <option value="2">computer</option>
        <option value="3">TV</option>
        </select>
      </div>

      <div class="col-auto">
      <span> Supplier: </span> 
      </div>
      <div class="col-auto">
        <select class="form-select" aria-label="Default select example" id="ProductSupplier" name="ProductSupplier" required>
        <option selected disabled value="">Select Supplier</option>
        <option value="1">BigBD</option>
        <option value="2">Grambangla</option>
        <option value="3">jadur bashi</option>
        </select>
      </div>

      


      <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Add Product</button>
      </div>
</div>
</form>



<!--display all the product in the browser-->

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ProductID</th>
      <th scope="col">ProductName</th>
      <th scope="col">Description</th>
      <th scope="col">Unit</th>
      <th scope="col">Price</th>
      <th scope="col">CategoryID</th>
      <th scope="col">SupplierID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
  @foreach ($productData as $data)
    <tr>
      <td>{{ $data->productid }}</td>
      <td>{{ $data->ProductName}}</td>
      <td>{{ $data->description}}</td>
      <td>{{ $data->unit}}</td>
      <td>{{ $data->price}}</td>
      <td>{{ $data->categoryid}}</td>
      <td>{{ $data->supplierid}}</td>
      <td>
        <a href="#" class="m-1 p-1"> <i class="fa fa-pencil-square-o" aria-hidden="true">edit</i> </a>
        <a href="#" class="m-1 p-1"> <i class="fa fa-trash" aria-hidden="true">delete</i>   </a>
      </td>
    </tr>
  @endforeach
   
  </tbody>
</table>

@endsection()