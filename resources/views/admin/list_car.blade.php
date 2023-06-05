@extends('sidebar') 


<section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

         
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
     


        <div class="dash-content">
        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

     
<br>
    

     <?php $i=1; ?>
    <table id="customers">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Model (year)</th>
            <th>Mode (petrol / Diesel)</th>
            <th>Type</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($car as $show)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $show->image }}" width="100px"></td>
            <td>{{ $show->name }}</td>
            <td>{{ $show->description }}</td>
            <td>{{ $show->model }}</td>
            <td>{{ $show->mode }}</td>
            <td>{{ $show->Type }}</td>
            <td>{{ $show->price }}</td>
            <td>
                <form action="{{ route('cars.destroy',$show->id) }}" method="POST">
     
               
      
                    <a class="btn btn-primary" href="{{ route('cars.edit',$show->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form            </td>
        </tr>
        @endforeach
    </table>
    
 
    </div>
        </div>
    </section>
