<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mess Management System....</title>


-->
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        body {
         
         height: 100%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        </style>
        
</head>
<body>
<div class="container">
<div class="card-panel deep-orange lighten-1"><h2>Registration</h2></div>

<div class="row">
      <form class="col s12">
        <div class="row">
        <div class="input-field col  m6 s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" data-length="10" class="validate" name="name">
          <label for="icon_prefix">Name</label>
        </div>
        <div class="input-field col m6 s12">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="number" data-length="10" class="validate" name="mobile">
          <label for="icon_telephone">Telephone</label>
        </div>
      </div>

            <div class="row">           
            <div class="input-field col m6 s12">
            <i class="material-icons prefix">email</i>
          <input id="email" type="text"  data-length="10" class="validate" name="email">
          <label for="email">E-mail</label>
        </div>

        <div class="row">           
            <div class="input-field col m6 s12">
          <input id="clgname" type="text"  data-length="10"  class="validate" name="college">
          <label for="clgname">College Name</label>
        </div>
        </div>
        <div class="row">           
         <div class="input-field col m6 s12">
    <select>
      <option value="" disabled selected>Branch</option>
      <option value="1">Computer</option>
      <option value="2">Electrical</option>
      <option value="3">Civil </option>
      <option value="4">machanical</option>
      <option value="5">Instrumentation</option>
      <option value="6">Electrinics</option>
</select>
    </div>
        <div class="input-field col m6 s12">
    <select>
      <option value="" disabled selected>Year</option>
      <option value="1">First Year</option>    
        <option value="2">Last Year</option>
      <option value="3">Trird Year</option>
        <option value="4">Last Year</option>

    </select>
    
  </div>
    </div>
        <div class="row">
        <div class=input-field col  m6 s12">
           <input  id="dob" type="text" class="datepicker">
           <label for="dob">Date of Birth</label>
            </div>
      </div>

      <div class="row">           
            <div class="input-field col m12 s12">
          <input id="laddress" type="text" data-length="10"  class="validate" name="local_add">
          <label for="laddress">Local Address</label>
        </div>
        <div class="input-field col m12 s12">
          <input id="paddress" type="text" data-length="10" class="validate" name="per_add">
          <label for="paddress">Permanant Address</label>
        </div>
      </div>

      <div class="row">           
            <div class="input-field col m6 s12">
          <input id="ssc" type="text" data-length="10" class="validate" name="ssc">
          <label for="ssc"> SSC percentage </label>
        </div>
        <div class="input-field col m6 s12">
          <input id="hsc" type="text" data-length="10" class="validate" name="hsc">
          <label for="hsc">HSC ercentage</label>
        </div>
      </div>
      <div class="row">           
            <div class="input-field col m6 s12">
          <input id="sgpa" type="text" data-length="10" class="validate" name="sgpa">
          <label for="sgpa">SGPA </label>
          </div>
        <div class="input-field col m6 s12">
          <input id="cgpa" type="text" data-length="10"class="validate" name="cgpa">
          <label for="cgpa">CGPA</label>
        </div>
      </div><button class="btn waves-effect waves-light" type="submit">Submit
    <i class="material-icons right">send</i>
  </button>
      </form>
        </div>
      </div>
    
 
  </div>

<script>
$(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
 

   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });
  
        

</script>
</body>
</html>