@include('partials.header')

<br>
<br>
<form action="/saveProduct" method="POST">
    @csrf
    <h1>Add/Create New Product</h1>

    <div class="mb-3">
      <label for="name" class="form-label"> </label>
      <input type="hidden" class="form-control" name="id">
    </div>

    <div class="mb-3">
      <label for="firstName" class="form-label">Description</label>
      <input type="text" class="form-control" name="description" >
    </div>

    <div class="mb-3">
      <label for="lastName" class="form-label">quantity</label>
      <input type="text" class="form-control" name="quantity" >
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">price</label>
        <input type="text" class="form-control" name="price" >
    </div>

    <button type="add" class="btn btn-success">Add Product</button>
  </form>
<br>
@include('partials.footer')