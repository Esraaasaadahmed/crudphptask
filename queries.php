 <!-- ======================================statring php valedation ==================================== -->
 <?php
         // define variables and set to empty values
         $FirstNameErr = $LastNameErr= $PhoneNumberErr= $emailErr = $BasicsalaryErr= "";
         $FirstName = $LastName= $PhoneNumber= $email=$Basicsalary="";
         if (isset($_POST['submit'])) {
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["FirstName"])) {
              $FirstNameErr = "FirstName is required";
            }else {
              $FirstName= test_input($_POST["FirstName"]);
            }

            if (empty($_POST["LastName"])) {
              $LastNameErr = "LastName is required";
            }else {
              $LastName= test_input($_POST["LastName"]);
            }

            if (empty($_POST["PhoneNumber"])) {
              $PhoneNumberErr = "PhoneNumber is required";
             
            }else {
                $PhoneNumber = test_input($_POST["PhoneNumber"]);
            }
           
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
               
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
           
           

            if (empty($_POST["Basicsalary"])) {
                $BasicsalaryErr = "Basicsalary is required";
               
              }else {
                  $Basicsalary = test_input($_POST["Basicsalary"]);
              }
          
         }

        }
        ?>
        <div class="card m-auto" style="width: 18rem;">
        <div class="card-body">
          <p class="alert alert-danger"><?php echo $FirstNameErr?></p>
          <p class="alert alert-danger"><?php echo $LastNameErr?></p>
          <p class="alert alert-danger"><?php echo $PhoneNumberErr?></p>
          <p class="alert alert-danger"><?php echo $emailErr?></p>
          <p class="alert alert-danger"><?php echo $BasicsalaryErr?></p>
         
        </div>
      </div>

      <?php
        
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

      
    
         // connect with data and check button submit
         if(isset($_POST['submit'])) {

          $FirstName = $_POST['FirstName'];
          $LastName = $_POST['LastName'];
          $PhoneNumber = $_POST['PhoneNumber'];  
          $email = $_POST['email']; 
          $Basicsalary=$_POST['Basicsalary'];
         
         
          include_once("config.php");
          $sql="select * from employee where ( email='$email');";

          $res=mysqli_query($mysqli,$sql);
    
          if (mysqli_num_rows($res) > 0) {
            
            $row = mysqli_fetch_assoc($res);
            if($email==isset($row['email']))
            {
              ?>

              <p class="font-weight-bold text-white" > <?php   echo "email already exists";?></p>
              <?php
            }
        }
        else{

          // Select file type
 
          $result = mysqli_query($mysqli,"INSERT INTO employee(FirstName,LastName,PhoneNumber , email,Basicsalary) VALUES('$FirstName','$LastName','$PhoneNumber','$email','$Basicsalary')");
          
          //do your insert code here or do something (run your code)
         
          }
         }
         
         header("Location:employeecrud.php");
       ?>
