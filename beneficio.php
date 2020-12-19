<?php
  include 'templates/header.php';
  
?>

<header class="header-gimnasio">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
         <h1 class="mx-auto my-5 text-white animate__animated animate__fadeInUp">New Gyms Membership</h1>
         <!-- <h3 class="text-white mx-auto mt-2 mb-5">WBC is Hope and Glory.<br/>Join the boxing membership.</h3> -->
       <a href="#gymbenefits" id="btn-member" class="btn btn-primary js-scroll-trigger">Get benefits</a>
      </div>
    </div>
</header>
 <section id="gymbenefits" class="gymbenefits h-100 ">
    <div  class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8">
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat ligula eu blandit aliquam. Aenean at augue aliquam elit sagittis imperdiet. Duis pharetra nunc a euismod sagittis. Fusce in eros elit. Vivamus eu tincidunt enim. Maecenas nec justo a sem egestas malesuada in vel risus. Ut non tempus lectus.</p>        
              <p class="text-white">Proin eros felis, sollicitudin id elementum ut, volutpat vel justo. Vestibulum vulputate dolor id dui lobortis, sit amet porttitor mi euismod. Praesent at purus vitae neque imperdiet finibus quis nec elit. Sed vel eleifend erat. Pellentesque eleifend rhoncus dolor in semper. Sed fermentum mollis commodo. Sed ipsum ligula, consequat a accumsan et, sagittis ut nibh. Donec malesuada dapibus odio.</p>        
              <p class="text-white">Nullam aliquam finibus metus, sit amet varius diam rutrum a. Duis maximus arcu sed magna accumsan iaculis. Suspendisse aliquet mi et arcu eleifend, ut egestas enim convallis. Nam quis eros dignissim, egestas felis eget, tempus nunc. Vestibulum diam tellus, blandit eu euismod nec, pellentesque quis erat. Morbi eu sapien at sem molestie tempus. Aliquam vitae nisi at ex placerat gravida sed vel leo. Fusce hendrerit ex turpis, sit amet aliquet purus fringilla vitae. Nam vitae orci maximus, laoreet augue molestie, mattis ex. Nam lobortis varius eros, sodales scelerisque eros ultrices eu. Cras suscipit sit amet lorem ac elementum.</p>        
              <div class="text-center my-5">
              <a href="#signupgym" id="btn-member" class="btn btn-primary js-scroll-trigger">Get Benefits</a>
              </div>
              
            </div>    
        </div><!--row -->
    </div><!--container-->
 </section>
 <section id="signupgym" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8 mx-auto text-center">

          <i class="animate__animated animate__bounce animate__infinite far fa-paper-plane fa-2x mb-2 text-black "></i>
          <h2 id="titulo-form-ship" class="text-black mb-5">Fill the form to receive benefits</h2>
              
              <form id="form-ship" action="signup.php" method="post">
                   
                    <div class="form-group">
                      <label for="nameInput">*Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="" value="" required>
                    </div>
                     <div class="form-group">
                      <label for="lastName">*Last Name</label>
                      <input type="text" name="lastName" class="form-control" id="lastName" placeholder="" value="" required>
                    </div>
                     <div class="form-group">
                      <label for="birthdayInput">Date of Birth </label>
                      <input type="text" name="birthday" class="form-control" id="birthday" placeholder="Pick a date">
                    </div>
                   <div class="form-group">
                      <label for="countryInput">*Country</label>                     
                      <select name="country" class="form-control" id="country" required>
                         <option value="">-:Select Country/Region:-</option>
                         <option value="Africa">Africa</option>
                         <option value="Argentina">Argentina</option>
                         <option value="Australia">Australia</option>
                         <option value="Austria">Austria</option>
                         <option value="Belgium">Belgium</option>
                         <option value="Brazil">Brazil</option>
                         <option value="Bulgaria">Bulgaria</option>
                         <option value="Canada">Canada</option>
                         <option value="Caribbean">Caribbean</option>
                         <option value="Central America">Central America</option>
                         <option value="Chile">Chile</option>
                         <option value="China">China</option>
                         <option value="Colombia">Colombia</option>
                         <option value="Costa Rica">Costa Rica</option>
                         <option value="Croatia">Croatia</option>
                         <option value="Czech Republic">Czech Republic</option>
                         <option value="Denmark">Denmark</option>
                         <option value="Dominican Republic">Dominican Republic</option>
                         <option value="Estonia">Estonia</option>
                         <option value="Finland">Finland</option>
                         <option value="France">France</option>
                         <option value="Germany">Germany</option>
                         <option value="Greece">Greece</option>
                         <option value="Guatemala">Guatemala</option>
                         <option value="Hong Kong">Hong Kong</option>
                         <option value="Hungary">Hungary</option>
                         <option value="India">India</option>
                         <option value="Indonesia">Indonesia</option>
                         <option value="Ireland">Ireland</option>
                         <option value="Israel">Israel</option>
                         <option value="Italy">Italy</option>
                         <option value="Japan">Japan</option>
                         <option value="Korea">Korea</option>
                         <option value="Latvia">Latvia</option>
                         <option value="Lithuania">Lithuania</option>
                         <option value="Malaysia">Malaysia</option>
                         <option value="Mexico">Mexico</option>
                         <option value="Middle East">Middle East</option>
                         <option value="Morocco">Morocco</option>
                         <option value="Morocco">Mongolia</option>
                         <option value="Netherlands">Netherlands</option>
                         <option value="New Zealand">New Zealand</option>
                         <option value="Norway">Norway</option>
                         <option value="Oman">Oman</option>
                         <option value="Pakistan">Pakistan</option>
                         <option value="Panama">Panama</option>
                         <option value="Peru">Peru</option>
                         <option value="Philippines">Philippines</option>
                         <option value="Poland">Poland</option>
                         <option value="Portugal">Portugal</option>
                         <option value="Puerto Rico">Puerto Rico</option>
                         <option value="Romania">Romania</option>
                         <option value="Russian Federation">Russian Federation</option>
                         <option value="Singapore">Singapore</option>
                         <option value="Slovakia">Slovakia</option>
                         <option value="Slovenia">Slovenia</option>
                         <option value="South Africa">South Africa</option>
                         <option value="Spain">Spain</option>
                         <option value="Sweden">Sweden</option>
                         <option value="Switzerland">Switzerland</option>
                         <option value="Taiwan">Taiwan</option>
                         <option value="Thailand">Thailand</option>
                         <option value="Turkey">Turkey</option>
                         <option value="Ukraine">Ukraine</option>
                         <option value="United Kingdom">United Kingdom</option>
                         <option value="United States">United States</option>
                         <option value="Venezuela">Venezuela</option>
                         <option value="Vietnam">Vietnam</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="mailingAdressInput">*Mailing Address</label>
                      <input type="text" name="mailingAdress" class="form-control"  id="mailingAdress" placeholder="" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="cityInput">*City</label>
                      <input type="text"  name="city" class="form-control" id="city" placeholder="" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="stateInput">*State</label>
                      <input type="text" name="state" class="form-control" id="state" placeholder="" value="" required>
                    </div>
                     <div class="form-group">
                      <label for="zipCodeInput">*Zip Code</label>
                      <input type="text" name="zipCode" class="form-control" id="zipCode" placeholder="" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="telephoneNumberInput">*Telephone Number</label>
                      <input type="text" name="telephoneNumber" class="form-control" id="telephoneNumber" placeholder="" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="emailAddressInput">*Email</label>
                      <input type="email" name="emailAddress" class="form-control" id="emailAddress" placeholder="" value="" required>
                    </div>
                     <div class="form-group">
                          <label for="membresiaInput">Membership Type</label>
                          
                          
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="membership" id="check-gym" value="GYM" checked="true">
                            <label class="form-check-label" for="membershipRadios">
                              GYM
                            </label>
                          </div>
                    </div><!--Membership Type-->
                    <div class="form-group">
                      <label for="categoryInput">Boxing Category</label>                     
                      <select name="category" class="form-control" id="category">
                        <option value="gym">Gymnasium</option>
                        
                      </select>
                    </div>
                   
                    <button type="submit" id="btn-form-ship" class="btn btn-primary">Submit</button>
              </form>
          
          
           

        </div>        
          
                 
       
      </div>
      <br><br>
    </div>

      

      
  </section>
<?php
  include 'templates/footer.php';
?>