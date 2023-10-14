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
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card corona-gradient-card">
                            <div class="card-body py-0 px-0 px-sm-3">
                                <div class="row align-items-center">
                                <div class="col-4 col-sm-3 col-xl-2">
                                    <img src="admin/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                                </div>
                                <div class="col-5 col-sm-7 col-xl-8 p-0">
                                    <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                                </div>
                                <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                    <span>
                                    <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                                    </span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                       
                        




                                <div style="position: relative; top:60px; right:-60px;">

                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($data as $data)
    
                                        <tr>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                           @if($data->usertype=="0")
                                            <td>
                                                <a class="btn btn-danger" href="{{url('/deleteuser',$data->id)}}">Delete</a>
                                            </td>
                                            @else
                                            <td>
                                                Not allowed
                                            </td>
                                            @endif

                                        </tr>
                                        @endforeach

                                    </table>
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