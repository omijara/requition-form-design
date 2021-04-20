<!DOCTYPE html>
<html lang="bn">

><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IT Requisition | SCBD</title>

    <!--<link href="assets/img/fav.png" rel="icon"> -->
    <link href="assets/img/fav.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/css/all.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css">

    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel ="stylesheet">
     

    <link href="../cdn.jsdelivr.net/npm/select2%404.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
   
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="index.html" class="logo mr-auto">
          <!--  <img src="" alt="" class="img-fluid"> -->
           IT Requisition      
       </a>
        <!-- Uncomment below if you prefer to use text as a logo -->
        <!-- <h1 class="logo mr-auto"><a href="index.html">Butterfly</a></h1> -->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
               <!-- <li><a href="register.html"></a></li>
                    <li><a href="login.html"></a></li>
                    <li><a href="login.html"></a></li>
                    <li><a href="login.html"></a></li>
                                
                <li><a href="faq.html"></a></li>
                <li><a href="https://livecoronatest.com/" target="_blank" href="#"></a></li>
                <li><a href=register.html> English </a></li>
                
            </ul>-->
        </nav><!-- .nav-menu -->

    </div>
</header>
<!-- End Header -->

<!-- ======= Main Section ======= -->

<main id="main">
    <section id="home" class="home" style="margin-top:50px">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">

                <div class="card border-0 shadow-sm">
                    <h5 class="card-header">Requisition Form</h5>
                    <div class="card-body">
                        <form class="form-row" id="register_form" action="#" method="post">
                            <input type="hidden" name="id" value=""> <div class="form-group col-md-6">
                                <label for="name">Your Name<span class="text-danger">*</span></label>
                                <input type="text" value=""
                                       placeholder="Write Your Name" id="name"
                                       class="form-control " name="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">E-mail<span
                                            class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="email" name="email" value=""
                                           class="form-control "
                                           placeholder="example@email.com" aria-label="mobile"
                                           aria-describedby="basic-addon1" required="">
                            </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="district">Project Name<span class="text-danger">*</span></label>
                                <select class="district form-control "id="district" name="district" required>
                                <option>Select</option>
                                <option value="scbd" >SCBD</option>                                          
                                <option value="B-skillfull" >B-SKILLFUL</option>
                                <option value="Astha" >ASTHA</option>
                                <option value="Uttoron" >UTTORON</option>
                                <option value="Bmmdp" >BMMDP</option>
                                <option value="Probriddhi" >PROBRIDDHI</option>
                                <option value="m4c" >M4C</option>
                                <option value="Sharothi" >SHAROTHI</option>
                                </select>
                                <small class="help-text text-muted">Please select your project name. Example: scbd</small>
                            </div>


                            <div class="form-group col-md-6">
                                <label for="district">Select Device<span class="text-danger">*</span></label>
                                <select class="district form-control "id="district" name="district" required>
                                <option>Select</option>
                                <option value="projector">Projector</option>                                          
                                <option value="presenter">Presenter</option>
                                <option value="printer">Printer</option>
                                <option value="laptop">Laptop</option>
                                </select>
                                <small class="help-text text-muted">Please select the request device. Example: Projector</small>
                            </div>


                                <div class="form-group col-md-6">
                                <label for="pass_time">Choose Pick Date<span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                        </div>
                                       <input type="text" required name="pick_date" id="pick_date" class="form-control" style="padding: .375rem .75rem;background:#fff" value="mm-dd-yyyy" autocomplete='off' readonly>
                                      
                                    </div>                    
                                </div>

          
                     
                           <div class="form-group col-md-6">
                                <label for="pass_time">Choose Return Date<span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                        </div>
                                       <input type="text" required name="return_date" id="return_date" class="form-control" style="padding: .375rem .75rem;background:#fff" value="mm-dd-yyyy" autocomplete='off' readonly>
                                      
                                    </div>                    
                                </div>

                 

                            <div class="col-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i>Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
</main><!-- End #main -->


<style>
.footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 40px; /* Set the fixed height of the footer here */
  line-height: 40px; /* Vertically center the text there */
  background-color: #EDF8FE;
  z-index: 200;
}
</style>
<footer class="text-muted footer">
      <div class="container">
        <p class="text-center">&copy; Developed By SCBD IT Team</p>
      </div>
</footer>


<script>
  $( function() {
    $( "#pick_date" ).datepicker();
  } );

    $( function() {
    $( "#return_date" ).datepicker();
  } );
  </script>

</body>

</html>
