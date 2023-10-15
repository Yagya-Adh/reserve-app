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
                                             
                      <div class="row p-3">
                      
                        <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="p-3">                                   
                                    <label>Name</label>
                                    <input style="color: blue;" type="text" name="name" placeholder="Enter name" required >
                                </div>
                                
                                <div class="p-3">                                   
                                    <label>Speciality</label>
                                    <input style="color: blue;" type="text" name="speciality" placeholder="Enter the speciality" required >
                                </div>

                                <div class="p-3">                                   
                                    <label>Image</label>
                                    <input  type="file" name="image" required >
                                </div>

                                <div class="p-3">                                   
                                    
                                    <input class="btn btn-primary" type="submit" value="Save" >
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