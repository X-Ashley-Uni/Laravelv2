@include('partials.header')
<x-nav/>
<title>PRODUCT INDEX</title>
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.btnEdit{
  color:#fff;
  background-color:#7762c5;
}

.btnDelete{
  color:#fff;
  background-color: red;
}
</style>
<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    @if (Session::has("success"))
    {{Session::get("success")}}
    @endif
  </div>
<table class="table table-hover">
  <h2>List of Products</h2>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>

      <td><a href="edit/{{$product->id}}" class="btnEdit">Edit</a></td>
      <td><a href="delete/{{$product->id}}" class="btnDelete">Delete</a></td>
   
    </tr>
  </tbody>
  @endforeach
</table>

@include('partials.footer')