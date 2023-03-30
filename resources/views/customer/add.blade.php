@include('partials.header')

<br>
<br>
<form action="/saveCustomer" method="POST">
    @csrf
    <h1>Add/Create New Ferson</h1>

    <div class="mb-3">
      <label for="name" class="form-label"> </label>
      <input type="hidden" class="form-control" name="id">
    </div>

    <div class="mb-3">
      <label for="firstName" class="form-label">First name</label>
      <input type="text" class="form-control" name="firstName" >
    </div>

    <div class="mb-3">
      <label for="lastName" class="form-label">Last name</label>
      <input type="text" class="form-control" name="lastName" >
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" >
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" >
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Contact Number</label>
        <input type="text" class="form-control" name="contactNumber" >
    </div>

    <button type="add" class="btn btn-success">Add Customer</button>
  </form>
<br>
@include('partials.footer')