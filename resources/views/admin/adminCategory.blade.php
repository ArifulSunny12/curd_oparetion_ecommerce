@extends('admin.layout.adminApp')
@section('title','Admin Catagory')

@section('content')


<div class="row">
  <div class="col-8 ">   
  <h1 class="text-center"> Category Control Area </h1>
  </div>

  <div class="col-4"  > 
 @session('actionMessage')
    <div class="alert alert-success pt-2 m-0" id="messageDiv">{{session('actionMessage')}}</div>
@endsession
  </div>
</div>


<form action="/admin/addCategory" method="post">
@csrf
<div class="row g-3 align-items-center">
      <div class="col-auto">
      <span> Category Name: </span>
      </div>
      <div class="col-auto">
      <input type="text" id="CategoryName" name="CategoryName" class="form-control" placeholder="Enter Category Name" value="{{ old('CategoryName') }}" required  >
      @error ('CategoryName') <span class="text-danger">{{$message}} </span> @enderror
      </div>

      <div class="col-auto">
      <span> Description: </span> 
      </div>
      <div class="col-auto">
      <input type="text" id="Description" name="Description" class="form-control" placeholder="Enter Category Description" value="{{ old('Description') }}" required >
      @error ('Description') <span class="text-danger">{{$message}} </span> @enderror
      </div>
      <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Add Category</button>
      </div>
</div>
</form>



<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">categoryid</th>
      <th scope="col">CategoryName</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
  @foreach ($categoryData as $data)
    <tr>
      <td>{{ $data->categoryid}}</td>
      <td>{{ $data->CategoryName}}</td>
      <td>{{ $data->Description}}</td>

      <td>
        <a href="#" class="mx-1 px-1 py-0 btn btn-primary open-edit-modal" id="open-edit-modal"
        
        data-edit='{"id":"{{ $data->categoryid}}" , "name":"{{$data->CategoryName}}" ,  "details":"{{$data->Description }}" }'

         data-bs-toggle="modal" data-bs-target="#exampleModal"> 
          <i class="fa fa-pencil-square-o" aria-hidden="true">edit</i> 
        </a>
        <a href="/category/delete/{{ $data->categoryid}}" class="mx-1 px-1 py-0 btn btn-primary"> <i class="fa fa-trash" aria-hidden="true">delete</i>   </a>
      </td>
    </tr>
  @endforeach
   
  </tbody>
</table>



<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Category Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="/category/update" method="post">
      @csrf
      <div class="modal-body">
            <div class="row g-3 align-items-center mb-2">
                <div class="col-auto">
                <span> Category Name: </span>
                </div>
                <div class="col-auto">
                <input type="text" id="updateCategoryid" name="updateCategoryid" value="" required  >
                
                
                
                <input type="text" id="updateCategoryName" name="updateCategoryName" class="form-control" value="" required  >
                @error ('updateCategoryName') <span class="text-danger">{{$message}} </span> @enderror
                </div>
            </div>
            <div class="row g-3 align-items-center mb-2">
                <div class="col-auto">
                <span> Description: </span> 
                </div>
                <div class="col-auto">
                <input type="text" id="updateDescription" name="updateDescription" class="form-control"  value="" required >
                @error ('updateDescription') <span class="text-danger">{{$message}} </span> @enderror
                </div>
            </div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form

    </div>
  </div>
</div>

@endsection()