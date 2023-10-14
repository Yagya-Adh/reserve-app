<x-app-layout>
   
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
      @include('admin.navbar')
    
      <!-- partial -->
        <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar.html -->
        
                 <!-- partial -->
                    <div class="main-panel">
                    <div class="content-wrapper bg-white text-black">
                       
                       
                        <div class="row p-3  ">
                        
                            <form action="{{url('/uploadfood',$data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf

                            <div class="p-3">
                                <label>Title</label>
                                <input type="text" name="title" placeholder="Write a title" required>
                            </div>
                            

                             <div class="p-3">
                                <label>Price</label>
                                <input type="text" name="price" placeholder="price" required>
                            </div>

                             <div class="p-3">
                                <label>Image</label>
                                <input type="file" name="image" required>
                            </div>


                             <div class="p-3">
                                <label>Description</label>
                                <textarea type="text" name="description" placeholder="write a description " required></textarea>
                            </div>


                             <div class="p-3">
                                <input class=" btn btn-primary p-2 text-white" type="submit" value="Save"  >
                            </div>
                            </form>



                            <div>


                                <table class="table">

                                    <tr align="center">
                                        <th style="padding: 30px">Food Name</th>
                                        <th style="padding: 30px">Price</th>
                                        <th style="padding: 30px">Description</th>
                                        <th style="padding: 30px">Image</th>
                                        <th style="padding: 30px">Action</th>
                                        <th style="padding: 30px">Action 2</th>
                                    </tr>
                                    
                                    @foreach ($data as $data)    
                                    <tr align="center">
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->price}}</td>
                                        <td>{{$data->description}}</td>
                                        <td>
                                            <img height="200" width="300" src="public/foodimage/{{$data->image}}" alt="">
                                        </td>
                                        <td><a href="{{url('/deletemenu',$data->id)}}" class="btn btn-danger">Delete</a></td>
                                        <td><a href="{{url('/updateview',$data->id)}}" class="btn btn-info">Update</a></td>
                                    </tr>
                                    @endforeach


                                </table>
                            </div>
                        </div>   
                        
                        
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                        </div>
                    </footer>
                    <!-- partial -->
                    </div>  
                 <!-- main-panel ends -->
        </div>
      <!-- page-body-wrapper ends -->
    </div>
        @include('admin.adminscript')

  </body>
</html>