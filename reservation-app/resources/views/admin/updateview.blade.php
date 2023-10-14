<x-app-layout> </x-app-layout>
 
<!DOCTYPE html>
<html lang="en">
  <head>


    <base href="/public">
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
                    <div class="content-wrapper  bg-white text-black">
                        <div class="row ">
                        

                        <form action="{{url('/update')}}" method="post" enctype="multipart/form-data">
                                @csrf

                            <div class="p-3">
                                <label>Title</label>
                                <input type="text" name="title" value="{{$data->title}}" required>
                            </div>
                            

                             <div class="p-3">
                                <label>Price</label>
                                <input type="text" name="price" value="{{$data->price}}" required>
                            </div>

                             <div class="p-3">
                                <label>Old Image</label>
                                <img height="200" width="300" src="foodimage/{{$data->image}}" alt="">
                            </div>

                            <div class="p-3">
                                <label>Change Image</label>
                                <input type="file" name="image" required>
                            </div>


                             <div class="p-3">
                                <label>Description</label>
                                <textarea type="text" name="description" required>{{$data->description}}</textarea>
                            </div>


                             <div class="p-3">
                                <input class=" btn btn-primary p-2 text-white" type="submit" value="Update"  >
                            </div>
                            </form>





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