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
    </style>
</head>
<body>
    

   <div class="card" style="padding: 0.5em; margin-top: 2.5em;">
   <div class="container"  align="center">
   <div class="pull-left">
                <h2>Smart Cricket Club Monitoring System</h2>
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
    <!-- <th>Address</th> -->
    <!-- <th>Martal Status</th> -->
    <!-- <th>Membership Type</th> -->
    <!-- <th>Roles</th> -->
    
</tr>

@foreach ($members as $member)
<tr>
  <td>{{ $member->id }}</td>
  <td>{{ $member->FirstName }}</td>
  <td>{{ $member->LastName }}</td>
  <td>{{ $member->Gender }}</td>
  <td>{{ $member->Email }}</td>
  <!-- <td>{{ $member->Country }}</td> -->
  <td>{{ $member->Phone }}</td>
  <!-- <td>{{ $member->Address }}</td> -->
  <!-- <td>{{ $member->MartalStatus }}</td> -->
  <!-- <td>{{ $member->MembershipType }}</td> -->
  <!-- <td>{{ $member->Roles }}</td> -->
  
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