

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
  .section {
    border-top: 1px solid #ccc; /* Light gray border */
  }

  .fixed-btn {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: black;
    padding: 1rem 0;
    text-align: center;
    box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
    z-index: 999;
  }
</style>

</head>
<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Health Clinic</a>
    </div>
    
  </div>
</nav>
<div class="container"><div class="row"><div class="col-md-12">
<h3 class="text-center">New Patient Intake</h3>
</div></div></div>


<div class="container">
  <form action="thankyou.php" method="POST">
  <div class="row">

    <!-- Left Column: Form Fields -->
    <div class="col-md-6">
      
        <div class="section border-top pb-4 mb-5">
          <h5>Patient</h5>
        <!-- First Name -->
        <div class="row">
          <div class="col-md-6">
        <div class="form-group">
          <label for="firstname">First Name:</label>
          <input type="text" name="firstname" class="form-control" id="firstname">
        </div>
</div>


        <!-- Last Name -->
          <div class="col-md-6">
        <div class="form-group">
          <label for="lastname">Last Name:</label>
          <input type="text" name="lastname" class="form-control" id="lastname">
        </div>
</div>
</div>
</div>

<div class="section border-top pb-4 mb-5">
  <h5>Date of Birth</h5>
        <!-- Month -->
        <div class="row">
        <div class="col-md-4">
        <div class="form-group">
          <label>Month:</label>
          <select class="form-control" name="birthmonth">
            <?php
              $months = array("January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December");
              foreach ($months as $month) {
                echo '<option value="'.$month.'">'.$month.'</option>';
              }
            ?>
          </select>
        </div>
        </div>

        <!-- Day -->
         <div class="col-md-4">
        <div class="form-group">
          <label>Day:</label>
          <select class="form-control" name="birthday">
            <?php
              for ($x = 1; $x <= 31; $x++) {
                echo '<option value="'.$x.'">'.$x.'</option>';
              }
            ?>
          </select>
        </div>
        </div>

        <!-- Year -->
           <div class="col-md-4">
        <div class="form-group">
          <label>Birth Year:</label>
          <select class="form-control" name="birthyear">
            <?php
              $lastyear = 1920;
              $year = date('Y');
              while ($year >= $lastyear) {
                echo '<option value="'.$year.'">'.$year.'</option>';
                $year--;
              }
            ?>
          </select>
        </div>
            </div>
</div>
            </div>
<div class="section border-top pb-4 mb-5">
<h5>Self Identification</h5>
<div class="row">
        <!-- Ethnicity -->
         <div class="col-md-4">
        <div class="form-group">
          <label>Ethnicity:</label>
          <select class="form-control" name="ethnicity">
            <option value="Hispanic">Hispanic</option>
            <option value="Not Hispanic">Not Hispanic</option>
          </select>
        </div>
        </div>

        <!-- Race -->
         <div class="col-md-4">
        <div class="form-group">
          <label>Race:</label>
          <select class="form-control" name="race">
            <?php
              $races = array("African American", "American Indian", "Alaskan Native", "Asian",
              "Caucasian", "Native Hawaiian", "Pacific Islander");
              foreach ($races as $race) {
                echo '<option value="'.$race.'">'.$race.'</option>';
              }
            ?>
          </select>
        </div>
            </div>

        <!-- Gender -->
             <div class="col-md-4">
        <div class="form-group">
          <label>Gender:</label>
          <select class="form-control" name="gender">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
          </select>
        </div>
    </div>
</div>
            </div>
            </div>

    
    <div class="col-md-6">
     
    <div class="section border-top pb-3 mb-4">
       <h5>Address</h5>
<div class="row">

 <div class="col-md-6">
      <div class="form-group">
    <label >Street:</label>
      <input type="text" class="form-control" name="street">
  </div>
            </div>


  <div class="col-md-6">
 <div class="form-group">
    <label >Unit:</label>
      <input type="text" class="form-control" name="unit">
  </div> <!--close the form group-->
  </div> <!--close the col-md-6-->

</div> <!--close the row-->
</div> <!--section border-top pb-3 mb-4-->


<div class="section border-top pb-4 mb-5">
<div class="row">

 <div class="col-md-4">
  <div class="form-group">
    <label >City:</label>
      <input type="text" class="form-control" name="city">
  </div>
  </div>

  <div class="col-md-4">
      <div class="form-group">
        <label>State:</label>
        <select class="form-control" name="state">
          <?php  
            $states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

            foreach ($states as $state) {
              if ($state == "Florida") {
                echo '<option value="'.$state.'" selected>'.$state.'</option>';
              } else {
                echo '<option value="'.$state.'">'.$state.'</option>';
              }
            }
          ?>
        </select>
      </div>  
      </div> 

   <div class="col-md-4">
  <div class="form-group">
    <label >Zipcode:</label>
      <input type="text" class="form-control" name="zipcode">
  </div>
</div><!--close this col-md-4-->
</div><!--close the row-->
</div><!--close the section-->

<div class="section border-top pb-4 mb-5">
<div class="row">
  <div class="col-md-6">
     <div class="form-group">
    <label>Phone:</label>
      <input type="text" class="form-control" name="phone">
  </div>
  </div> <!--close col-md-6-->
    
  
  <div class="col-md-6">
  <div class="form-group">
   <label >Email:</label>
      <input type="text" class="form-control" name="email">
  </div>
          </div> <!--close the col-md-6-->

</div> <!--close the row-->
</div> <!--close the section---->

<div class="section border-top pb-4 mb-5">
  <h5>Family History</h5>
<div class="row">
<div class="col-md-6">
 <div class="form-group">
  <label>Marital Status:</label>
  <select class="form-control" name="maritalstatus">
    <option>Married</option>
    <option>Single</option>
    <option>Divorced</option>
    <option>Seperated</option>
     <option>Widowed</option>
  </select>
</div> 
</div> <!--close the col-md-6-->


<div class="col-md-6">
 <div class="form-group">
  <label>Number of Children:</label>
  <select class="form-control" name="numberofchildren">
    <option>0</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    
  </select>
</div> 
</div> <!--close the col-md-6-->
</div><!--close the row-->
</div> <!--close the section-->


    </div><!-- Colse the second column -->
  </div> <!-- close row -->
<!-- <div class="row"><div class="col-md-12 text-center"> -->
 <div class="fixed-btn text-center"> 
 <button type="submit" name="intakenewpatient" class="btn btn-primary mt-3">Register</button>  
          </div>
<!-- </div></div> -->


</form>

</div> <!-- close container -->

 
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>