<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <style>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 0px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.logo{
  border-radius: 5em;
}
    </style>
</head>
<body>

<div >
    

</div>
   <div class="card" style="padding: 0.5em;">
   <div class="container">
   
   <div class="pull-left">
<p>
  <table width="100%">
    <tr>
      <td><img src="images/cricket.jpg" alt="" height="60" weight="60" class="logo"></td>
      <td align="right"><h2> &nbsp;&nbsp;&nbsp; Smart Cricket Club Monitoring System</h2></p>
    
    </td>
    </tr>
    <tr>
      <td></td>
      <td align="right">
      <p>Kigali, Kicukiro, Gahanga</p>
    <p>Gahanga Olympic Stadium</p>
      </td>
    </tr>
  </table>
   
                <h2 align="center">Denied Application List</h2></p>
    </div> <br>
 
    
   </div>
<div class="card" style="padding: 0.5em;">
    
<table class="table table-bordered" id="customers" align="center">
    

<tr>
<th>No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
</tr>

@foreach ($members as $member)
<tr>
  <?php
if($member->Status == 0){
  ?>
  <td>{{ $member->id }}</td>
  <td>{{ $member->FirstName }}</td>
  <td>{{ $member->LastName }}</td>
  <td>{{ $member->Gender }}</td>
  <td>{{ $member->Email }}</td>
  <!-- <td>{{ $member->Country }}</td> -->
  <td>{{ $member->Phone }}</td>
  <td>{{ $member->Address }}</td>
  <?php } ?>
</tr>
@endforeach
    </table>
</div>



   </div>
   </div>
   <div>
   </div>
</div>

</body>
</html>