
<html>
<head>
<title>Add New Car</title>
</head>

<h2 ALIGN="CENTER"> Add New Car</h2>

<form action="/create_booking_detais" method="post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<input type = "hidden" name = "car_det_tbl_id"  id="car_det_tbl_ids" value = "{{request('id') }}">
<table border="0" align="center">
<tbody>

<tr>
<td><label for="id">Image: </label></td>
<td><input id="name" maxlength="50" name="name" type="text" /></td>
</tr>


<tr>
<td><label for="rolln0">Mobile No: </label></td>
<td><input id="mob_no" maxlength="50" name="mob_no" type="text" /></td>
</tr>

<tr>
<td><label for="email">Email_Address:</label></td>
<td><input id="email" maxlength="50" name="email" type="text" /></td>
</tr>

<tr>
<td><label for="name">Number of Days: </label></td>
<td><input id="no_days" maxlength="50" name="no_days" type="text" /></td>
</tr>


<tr>
<td><label for="aboutus">Current residing address:</label></td>
<td valign="middle" align="center"><textarea id="address" name="address"></textarea></td>
</tr>

<tr>
<td><label for="course">Arrival Date: </label></td>
<td><input id="Arrival_Date" maxlength="50" name="Arrival_Date" type="date" /></td>
</tr>

<tr>
<td><label for="branch">Return Date: </label></td>
<td><input id="Return_Date" maxlength="50" name="Return_Date" type="date" /></td>
</tr>





<tr>
<td><label for="username">Where do you need the car?:</label></td>
<td>
<input type="radio" id="html" name="car_need" value="airport">
<label for="html">@ Airport (pickup)</label><br>
<input type="radio" id="css" name="car_need" value="home">
<label for="css">@ Home address</label><br>

</td>
</tr>

<tr>
<td align="right"><input name="Submit" type="Submit" value="Add" /></td>
</tr>


</tbody>
</table>
@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

</form>
</html>