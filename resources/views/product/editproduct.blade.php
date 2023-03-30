@include('partials.header')
<br>
<br>
<form action="/updateCustomer" method="POST">
    @csrf
<div class="mb-3">
    <label for="name" class="form-label"> </label>
    <input type="hidden" class="form-control" name="id" value="{{$product->id}}">
<div class="mb-3">
    <label for="name" class="form-label">Description</label>
    <input type="name" class="form-control" name="description" value="{{$product->description}}">
    
</div>
<div class="mb-3">
      <label for="name" class="form-label">quantity</label>
      <input type="name" class="form-control" name="quantity" value="{{$product->quantity}}">
</div>
<div class="mb-3">
      <label for="name" class="form-label">price</label>
      <input type="name" class="form-control" name="price" value="{{$product->price}}">
</div>

<button type="submit" class="btn btn-success">Update Product</button>
  <br>
</form>
<br>
@include('partials.footer')