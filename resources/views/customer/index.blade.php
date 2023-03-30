@include('partials.header')
<x-nav/>
<title>INDEX</title>
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
  <h2>List of Customers</h2>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @foreach ($customers as $customer)
  <tbody>
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->lastName}}</td>
      <td>{{$customer->firstName}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->address}}</td>
      <td><a href="edit/{{$customer->id}}" class="btnEdit">Edit</a></td>
      <td><a href="delete/{{$customer->id}}" class="btnDelete">Delete</a></td>
   
    </tr>
  </tbody>
  @endforeach
</table>

@include('partials.footer')