@include('partials.header')
<br>
<br>
<form action="/updateCustomer" method="POST">
    @csrf
<div class="mb-3">
    <label for="name" class="form-label"> </label>
    <input type="hidden" class="form-control" name="id" value="{{$customer->id}}">
<div class="mb-3">
    <label for="name" class="form-label">First Name</label>
    <input type="name" class="form-control" name="firstName" value="{{$customer->firstName}}">
    
</div>
<div class="mb-3">
      <label for="name" class="form-label">Last Name</label>
      <input type="name" class="form-control" name="lastName" value="{{$customer->lastName}}">
  
</div>
<div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
      value="{{$customer->email}}">
        @error('email')
             <p>Please enter a valid email</p>
         @enderror
      <div id="emailHelp" class="form-text">Shhh, your email is safe.</div>
  
</div>
<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="address" class="form-control" name="address" value="{{$customer->address}}">

</div>

<div class="mb-3">
    <label for="address" class="form-label">Contact Number</label>
    <input type="address" class="form-control" name="contactNumber" value="{{$customer->contactNumber}}">

</div>

<button type="submit" class="btn btn-success">Update</button>
  <br>
</form>
<br>
@include('partials.footer')