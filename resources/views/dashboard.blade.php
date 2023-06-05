
@extends('sidebar') 


<section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

         
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

          

                <table id="customers">
  <tr>
    <th>Name</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>No of days</th>
    <th>Address</th>
    <th>Arrival Date</th>
    <th>Return date</th>
    <th>Car need</th>
  </tr>
  @foreach ($show as $shows)
  <tr>
    <td>{{$shows->name}}</td>
    <td>{{$shows->mob_no}}</td>
    <td>{{$shows->email}}</td>
    <td>{{$shows->no_days}}</td>
    <td>{{$shows->address}}</td>
    <td>{{$shows->Arrival_Date}}</td>
    <td>{{$shows->Return_Date}}</td>
    <td>{{$shows->car_need}}</td>
  </tr>
  @endforeach

</table>
            </div>
        </div>
    </section>
