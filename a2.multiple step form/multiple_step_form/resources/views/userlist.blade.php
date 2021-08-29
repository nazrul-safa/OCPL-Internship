<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashbord!</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">  
                <div class="card">
                    <div class="card-header">
                        Hello Admin
                    </div>
                    <div class="card-body">
                    <br>
                        <div class="alert alert-success">
                               <h5 class="text-center">All users: </h5> 
                            </div>
                            <a href="{{ route('application') }}" type="button" class="btn btn-success">Add</a>
                            <div class="row">
                                <div class="col-12">
                                    <div id="main_section_order">
                                        <div id="main_section_table">
                                        <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">Sl N.</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">District</th>
                                            <th scope="col">Thana</th>
                                            <th scope="col">State</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Edit</th>                                                                                               
                                        </tr>
                                        </thead>
                                        <tbody>           
                                            @forelse ($alldata as $data)
                                                <tr> 
                                                    <td>{{ $loop->index+1 }}</td> 
                                                    <td>{{ $data->email }}</td>             
                                                    <td>{{ $data->country }}</td>             
                                                    <td>{{ $data->bd_adress }}</td>             
                                                    <td>{{ $data->thana }}</td>             
                                                    <td>{{ $data->foreign_adress }}</td>             
                                                    <td>{{ $data->name }}</td>             
                                                    <td>{{ $data->age }}</td>             
                                                    <td>{{ $data->status }}</td>             
                                                    <td>
                                                        @if ( $data->status ==0)
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a href="{{ url('user/edit') }}/{{ $data->id }}" type="button" class="btn btn-info">Edit</a>
                                                                <a href="{{ url('user/delete') }}/{{ $data->id }}" type="button" class="btn btn-danger">Delete</a>
                                                            </div> 
                                                                                                             
                                                        @else
                                                        <a href="#" type="button" class="btn btn-success">Done</a>
                                                        @endif
                                                    </td>                                                                   
                                                </tr>
                                                @empty
                                                <tr class="text-center text-danger">
                                                  <td colspan="50">
                                                   No Data to Show
                                                  </td>
                                                </tr>           
                                            @endforelse   
                                        </tbody>
                                        </table> 
                                        </div>
                                    </div>      
                                </div>
                            </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
























{{-- @extends('userlist')
@section('title')
   Dashbord
@endsection


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          
            <div class="card">
                <div class="card-header">
                    Hello Admin
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
<br>
<br>
                    <div class="alert alert-success">
                           <h5 class="text-center">All Orders: </h5> 
                        </div>
                        <div class="row">
                             <div class="col-12">
                                 <div id="main_section_order">
                                     <div id="main_section_table">
                                        <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">Or N.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>                           
                                            <th scope="col">Address</th>                            
                                            <th scope="col">Date</th>                            
                                            <th scope="col">Total</th>                          
                                        </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($customer_order_details as $customer_order_detail)
                                                <tr> 
                                                    <td>{{ $loop->index+1 }}</td> 
                                                    <td>{{ $customer_order_detail->customer_name }}</td>             
                                                    <td>{{ $customer_order_detail->customer_email }}</td>             
                                                    <td>{{ $customer_order_detail->customer_phone }}</td>             
                                                    <td>{{ $customer_order_detail->customer_address }}</td>             
                                                    <td>{{ $customer_order_detail->created_at->diffForHumans()}}</td>             
                                                    <td>{{ $customer_order_detail->total }}</td>             
                                                </tr>
                                            @endforeach  
                                        </tbody>
                                        </table> 
                                     </div>
                                 </div>
                                    
                                </div>
                        </div>

                </div>
            </div>      
        </div>
    </div>
</div> --}}
