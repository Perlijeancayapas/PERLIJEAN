<?php
$title = 'Index';
require_once 'includes/header.php';
?>
<!--
    - First name
    - Last name
    - Date of Birth (Use DatePicker)
    - Specialty (Database Admin, Software Developer, Web Administrator)
    - Email Address
    - Contact Number
-->

<h1 class="text-center">Registrationfor IT Conference </h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>


<h2 class="text-center">Information </h2>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">First name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Last name</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Date of Birth</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>   

 
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Specialty</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <form method="post" action="process.php">

    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Software Developer</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Web Administrator</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Database Admin</label>
  </div>

</select>
<input type="submit" value="Submit">
</form>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Number</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

<?php require_once 'includes/footer.php' ?>