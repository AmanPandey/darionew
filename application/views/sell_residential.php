<style>
  .input-title {
  color: #f05826;
  font-weight: 1600;
  font-size: 18px;
  margin-top: 5px;
  
}
.submit-btn {
  background-color: #f05826;
  float:right;
  color: #fff;
  font-weight: 1600;
  font-size: 20px;
  margin-top: 5px;
  
}
</style>


<div class="container">
  <div class="row">
    <div class="col-sm-12" style="margin-top:100px;">
    <br/>
    <h2>SELL RESIDENTIAL PROPERTY</h2>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-3">
      &nbsp;
    </div>
    <div class="col-sm-6">
      

      <form action="#" method="post">
       
        <div class="form-group">
          <label for="full_name" class="input-title">Full Name</label>
          <input type="text" class="form-control" id="full_name" aria-describedby="emailHelp" placeholder="Enter your full name" required>
        </div>
       
       <div class="form-group">
         <label for="mobile" class="input-title">Mobile</label>
         <input type="number" class="form-control" id="mobile" aria-describedby="emailHelp" placeholder="Enter your mobile number" required>
       </div>
       
       <div class="form-group">
         <label for="email"  class="input-title">Email</label>
         <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email id" required>
       </div>
       
       <div class="form-group">
         <label for="locations" class="input-title"> Property Location</label>
         <input type="text" class="form-control" id="locations" aria-describedby="emailHelp" required placeholder="Enter your property prefrence location">
       </div>
       
       <div class="form-group">
         <label for="rquirment" class="input-title">Basic Property Details </label>
         <textarea class="form-control" id="rquirment" rows="3" required placeholder="please explain your basic details of the rquirment"></textarea>
       </div>
       
       <div class="form-group">
         <label for="budget" class="input-title">Estimated Price</label>
         <input type="text" class="form-control" id="budget" aria-describedby="emailHelp" placeholder="Enter your estimated budget" required>
       </div>
        <br/>
        <button type="submit" class="btn btn-primary submit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
      </form>

      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success" id="exampleModalLabel">
              <a class="navbar-brand text-brand color-e" href="http://localhost/darionew/"><img src="assets/img/logo.png" width="50" style="margin-top: -20px; margin-right:-15PX;">ARIO<span class="color-b"> REALTORS</span></a>
              </h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <center><h3 class="text-success">Thank You!</h3></h5>
              <small>
              Your details has been successfully submitted. we will get in touch with you shortly
              </small></h5>
              </center>
              
            </div>

            <div class="modal-footer">
              <a href="https://api.whatsapp.com/send/?phone=919848713111&text=Hi%2C+%0AI+have+submitted+my+requirement+on+your+website.+%0AIs+anyone+available+to+chat+here%3F&app_absent=0" class="btn btn-success"><i class="bi bi-whatsapp"></i> Start WhatsApp Chat</a>
            </div>
          
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      &nbsp;
    </div>
  </div>
</div>