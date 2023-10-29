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
                    <div class="content-wrapper">
                        <div class="row">
                                                     
                         <div class="col bg-white text-black p-4">
                            
                          <h1>Floor Create</h1>

                                  <form action="{{url('floor')}}" method="POST" enctype="multipart/form-data">

                                    <div class="mt-3 p-2">
                                      <label> Spot number</label>
                                      <input type="number" name="spot">
                                    </div>

                                    <div class="mt-3 p-2">
                                      <label> Book Place</label>                                     
                                      <select name="isBooked">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                      </select>
                                    </div>
                                    <div class="mt-3 p-2">
                                      <label> Spot Capacitry</label>
                                      <input type="text" name="capacity">
                                    </div>
                                    <div class="mt-3 p-2">
                                      <label> Image</label>
                                      <input type="file" name="spotImg">
                                    </div>
                                    
                                    <div class="mt-3 p-2">
                                       <input class="btn btn-primary"  type="submit"  value="Save">
                                    </div>
                                  </form>

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