@extends('sidebar') 


<section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

         
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            

            <div class="activity">
           
            
            


          
                <h2 ALIGN="CENTER"> Update  Car</h2>
<div style="padding-left: 30%;">

<form action="{{ route('cars.update',$car->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<input type = "hidden" name = "car_det_tbl_id"  id="car_det_tbl_ids" value = "{{request('id') }}">
<table border="0" align="center">
<tbody>

<tr>
<td><label for="id">Image: </label></td>
<td><input id="image" maxlength="50" name="image" type="file" required/>
<img src="/image/{{ $car->image }}" width="300px">
</td>
</tr>
<br>

<tr>
<td><label for="rolln0">Name: </label></td>
<td><input id="name" maxlength="50" name="name" type="text" value="{{ $car->name }}" required/></td>
</tr>


<tr>
<td><label for="email">Description:</label></td>
<td><textarea id="model" maxlength="50" name="description" type="text" value="{{ $car->description }}" required/> {{ $car->description }}</textarea></td>
</tr>

<tr>
<td><label for="email">Model (year):</label></td>
<td><input id="model" maxlength="50" name="model" type="number" value="{{ $car->model }}" required/></td>
</tr>

<tr>
<td><label for="name">	Mode (petrol / Diesel): </label></td>
<td><input id="	mode" maxlength="50" name="mode" type="text" value="{{ $car->mode }}" required/></td>
</tr>


<tr>
<td><label for="aboutus">Type:</label></td>
<td valign="middle"><input id="Type" name="Type" value="{{ $car->Type }}" required></td>
</tr>

<tr>
<td><label for="course">Price: </label></td>
<td><input id="price" maxlength="50" name="price" type="number" value="{{ $car->price }}"  required /></td>
</tr>





<tr>
<td align="center"><input name="Submit" type="Submit" value="Create" /></td>
</tr>


</tbody>
</table>


</form>
</div>


            </div>
        </div>
    </section>









