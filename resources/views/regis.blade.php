
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>event name</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
                            
                                

</head>
                                
<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
 <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/Postsaction">
                    @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" pattern="[A-Za-z]{1,255}" Required>
                                            <label class="label--desc">first name</label>
                                        </div>
                                      </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" pattern="[A-Za-z]{1,255}">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">University Roll No.</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="university_roll_number" pattern="[0-9]{7}">
                                </div>
                            </div>
                  </div>
                        <div class="form-row">
                            <div class="name">Class Roll No.</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="class_roll_number" pattern="[0-9]{7}" Required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" Required>
                                </div>
                            </div>
                        </div>
                   <div class="form-row m-b-55">
                            <div class="name">Contact No.</div>
                            <div class="value">
                                
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone_number"  pattern="[6-9]{1}[0-9]{9}" Required>
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            
                        
                        <div class="form-row">
                            <div class="name" Required>BRANCH</div>
                            
                            <div class="value">
                                <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="branch" required>
                                        <option disabled="disabled" selected="selected" value="">Choose branch</option>
                                            <option value="CSE">CSE</option>
                                            <option value="IT">IT</option>
                                            <option value="EE">EE</option>
                                            <option value="ECE">ECE</option>
                                            <option value="ME">ME</option>
                                            <option value="CE">CE</option>
                                            <option value="AutomobileEngineering">Automobile Engineering</option>
                                            <option value="PE">PE</option>
                                            <option value="Architecture">Architecture</option>
                                            <option value="MBA">MBA</option>
                                             <option value="MCA">MCA</option>
                                            <option value="others">Other</option>
                                                                       </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>          
                        </div>
                         <div class="form-row">
                            <div class="name">YEAR</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="year" required>
                                            <option disabled="disabled" selected="selected" value="">Choose year</option>
                                            <option value="First">First</option>
                                            <option value="Second">Second</option>
                                            <option value="Third">Third</option>
                                        <option>Fourth</option>
                                            </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Are you an iste member?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55" >Yes
                                    <input type="radio" value="yes" checked="checked" name="iste_member" Required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" value="no" name="iste_member">
                                    <span class="checkmark"></span>
                                     </label>
                            </div>          
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
     <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    
    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
