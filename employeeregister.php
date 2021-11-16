<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./styles/headerandfooter.css">
<link href="styles/speakerregister.css" rel="stylesheet">

</head>

<body class="text-capitalize">
 
 
  <!-- start the head of page -->
  <section class=" mb-5">
    
 
   
          <!-- starting php -->
          <!-- php in the same page -->
          <form method="post" action="queries.php" role="form" class="contactForm py-5 container w-50 m-auto" enctype="multipart/form-data">
          <div data-aos="fade-down" class="py-3">
                <h1  >Employees <span style="color: #e8465a"> form</h1>
        </div>
            <div class="form-row ">
              <div class="form-group col-lg-12  col-md-12 col-sm-12">
              <label for="exampleInputEmail1" >FirstName:</label> <span class="text-danger">*</span>
                <input id="fnameInput" type="name" name="FirstName" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="text-danger d-none alert alert-danger" id="inputfNameAlert">
                  firstname is invalid , please enter you name
              </div>
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-12  col-md-12 col-sm-12">
              <label for="exampleInputEmail1" >LastName:</label> <span class="text-danger">*</span>
                <input id="lnameInput" type="name" name="LastName" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="text-danger d-none alert alert-danger" id="inputlNameAlert">
                  lastname is valid , please enter you name
              </div>
              </div>
            </div>
           
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label for="exampleInputPassword1" >Mobile</label> <span class="text-danger">*</span>
              <input id="phoneNumInput" type="number" class="form-control rounded" name="PhoneNumber" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                phone number is invalid , please enter you number
            </div>
            </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
              <label for="exampleInputEmail1" >Email address</label> <span class="text-danger">*</span>
                <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" />
                <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                  email is invalid , please enter you mail
              </div>
              </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label for="exampleInputPassword1" >Basicsalary</label> <span class="text-danger">*</span>
              <input id="BasicsalaryInput" type="number" class="form-control rounded" name="Basicsalary" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="text-danger d-none alert alert-danger" id="BasicsalaryAlert">
              Basicsalary is invalid , please enter you Basicsalary
            </div>
            </div>
            </div>
            
            <div class="text-center my-2"><button class="btn btn-danger " name="submit" type="submit">submit</button></div>
          </form>
        </div>
      </div>

      <footer>
  
  </section>

  
  
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="scripts/js/all.min.js"></script>
    <script src="scripts/aos-master/dist/aos.js"></script>
    <script src="scripts/js/register.js"></script>
   </body>
 </html>