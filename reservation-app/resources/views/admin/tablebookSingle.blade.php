<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

   @include('admin.admincss')

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


   
  
  </head>

  <style>


/* block a css  */

.block_a{

  display: flex;
  justify-content: center;

  max-width: 150px !important;
  height: 600px;

  border: 2px solid #ccc;
}


.btnDiv{
  padding: 4px;
}
 
.btnDiv span{
  display: flex;
  padding: 3px;
  border: 1px solid gray;
  width: 40px;
  justify-content: center;
  margin: 3px;
}

.btnDiv span:hover{
  display: flex;
  padding: 3px;
  border: 1px solid gray;
  width: 40px;
  background: rgb(80, 161, 199);

}


/* block b css */
.block_b{
  padding: 40px;
  border: 2px solid #ccc;
  display: flex;
  justify-content: center;
}

.block_b div span{
  margin: 20px;
  padding: 30px;
  display: flex;
  border: 2px solid #ccc;

  background-image: url("admin/assets/images/table_book.png");
  background-repeat: no-repeat;
  background-size: cover;
  
  justify-content: center;

  max-width: 180px !important;
  height: 180px !important;
}


.block_b div span:hover{
  background-color: teal;

  background-image: url("admin/assets/images/table_empty.png");
  background-repeat: no-repeat;
  background-size: cover;
  
  justify-content: center;

 }

  </style>

  
  <body >
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
      @include('admin.navbar')
    
      <!-- partial -->
        <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar.html -->
        
                 <!-- partial -->
                    <div class="main-panel">
                    <div class="content-wrapper">
                        
                      <div class="row" style="background: rgb(255, 255, 255); color:black; padding:40px;">

                            <h1>Table Book Single</h1>   
                             
                              <div class="row">
                                
                                
                                </div>
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

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>



    <script>

        $(document).ready(function () {


            $("#boxs_1").click(function () {
                $(".table_a").addClass("defaultClass");
            });

            $("#paybtn").click(function () {
                confirm('payyour bill');
                $(".table_a").removeClass("defaultClass");
                $(".table_a").css('background-color', 'green');
            })


          });

    </script>

  



  </body>
</html>