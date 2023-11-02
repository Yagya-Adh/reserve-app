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
                        <div class="row  ">
                         
 
                              <section>
                                    <h2 style="background:green;" class="p-1">E-Sewa Payment </h1>
                                    <div style="border: 1px solid #ccc; padding: 5px; ">
                                      <p>we provide <b> eSewa-payment </b> method, please proceed for your payment from here.</p>
                                      <p style="margin: 0">Thank You!</p>
                                    </div>
                              </section>

                              
                              <div class=" mt-3 justify-end d-flex">
                                
                                {{-- esewa payment --}}

                                 <form action="https://uat.esewa.com.np/epay/main" method="POST">
                                      <input value="100" name="tAmt" type="hidden">
                                      <input value="90" name="amt" type="hidden">
                                      <input value="5" name="txAmt" type="hidden">
                                      <input value="2" name="psc" type="hidden">
                                      <input value="3" name="pdc" type="hidden">
                                      <input value="epay_payment" name="scd" type="hidden">
                                      <input value="123456789147" name="pid" type="hidden">
                                      <input value="http://esewa.test/payment-verify?q=su" type="hidden" name="su">
                                      <input value="http://esewa.test/payment-verify?q=fu" type="hidden" name="fu">
                                      <input style="background: green !important;" class="btn p-3 border hover:bg-sky-300 text-white" value="Submit" type="submit">
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