  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <img src="img/Footer-01.png" class="img-fluid" alt=""> <br><br><br>
    <div class="container">
      Copyright &copy; WBC Membership 2021
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery.core.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

   <script src="vendor/jquery/picker.js"></script>
    <script src="vendor/jquery/picker.date.js"></script>
    <script src="vendor/jquery/legacy.js"></script>

  <script type='text/javascript'>
 
     $(document).ready(function(){


      $('#birthday').pickadate({
          formatSubmit: 'yyyy/mm/dd',
          selectMonths: true,
          selectYears: 35
         
      });

        /* Obtener la categoria seleccionada*/

          $("select#category").change(function(){

        var categoria = $(this).children("option:selected").val();
        //console.log("You have selected the country - " + categoria);
          if ( categoria =='Referee' || categoria =='Both' || categoria =='Judge') {

              $("#check-gold").prop('checked', true);
              $("#check-green").prop('disabled', true);
          }else{
               $("#check-green").prop('disabled', false);
               $("#check-green").prop('checked', true);
            }
        
        

         });

           $("#btn-submit").click(function(event) {
                
                    event.preventDefault();          
                    var data = $('#form-login').serialize(); 
                   // console.log(data);
                      $.ajax({
                            type: "POST",
                            url: "login.php",                           
                            data: $('#form-login').serialize(),
                            success: function(response){
                              var msg = JSON.parse(response);
                             // console.log(msg.exito);
                              $("#loginModal").modal('hide');
                              if (msg.exito) {
                                   window.location.href = "http://wbcboxing.com/membershipbeta/index.php?login="+msg.exito;

                                     alert("Login exitoso");
                              }else{
                                   alert("Wrong user or password. Please try again.");
                              }
                              
                            },
                            error: function(){
                              alert("Error");
                            }
                          });

                   
                  return false; 
            });

           $("#btn-form-ship").click(function(event) {
                
                    event.preventDefault();          
                    var data = $('#form-ship').serialize();
                      $( "#pago-paypal-gold" ).hide(); 
                      $( "#pago-paypal-green" ).hide();
                   // console.log(data);
                    $.ajax({
                            type: "POST",
                            url: "signup.php",                           
                            data: data,
                            success: function(response){
                              var msg = JSON.parse(response);
                              console.log(msg.respuesta);
                              if (msg.respuesta) {
                                    alert("Your info has been send successfully");
                                    if (msg.tipo_membresia =='GOLD') {

                                       $( "#pago-paypal-gold" ).show();
                                       $( "#form-gold" ).submit();
                                    }else{
                                       $( "#pago-paypal-green" ).show();
                                       $( "#form-green" ).submit();
                                    }
                             
                              }

                              if (!msg.respuesta) {
                                  alert("Please fill all the required info (*)");
                              }

                              
                              
                              
                            },
                            error: function(){
                              alert("Error");
                            }
                          });

                   
                  return false; 
            });
   });
         
  </script>

</body>

</html>
