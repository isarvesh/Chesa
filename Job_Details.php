<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Chesa Dental Care</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <?php include 'header.php';?>
<!-- end header -->
           
  


<style>
    .product-grid {
font-family: Raleway,sans-serif;
text-align: justify;
padding: 25px;
border: 1px solid rgb(69 6 80 / 37%);
overflow: hidden;
position: relative;
z-index: 1;
}
.package {
color: red;
font-size: 32px;
/* margin-right: 10px; */
border: 1px solid #ffde00;
padding: 10px;
margin-top: 15px;
}
</style>
<?php include 'header.php'; ?>


<!-- Divider: Contact -->
<section class="testimonial" style="padding-bottom:30px">
      <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="lgx-heading">
                <h2 class="heading-title">Job Details</h2>
                <hr>
            </div>
        </div>
    </div>
</div>
  <div class="container ">
          <div class="row">
             
<?php

    $conn = mysqli_connect("localhost","chesaden_pincode","Chesa@123","chesaden_indianpincode");
    if (isset($_GET['id'])) 
    {
     $ids = trim($_GET['id']);
    }
 
      
          $stmt = $conn->prepare("SELECT * FROM `job_post` where id= '$ids'");
          $stmt->execute();
          $result = $stmt->get_result();
          while ($row = $result->fetch_assoc()):
              $id=$row['id'];
              $tittle=$row['tittle'];
              $location=$row['location'];
              $qualification=$row['qualification'];
              $description=$row['description'];
              $requirement=$row['requirement'];
      ?> 
                         <div class="col-sm-12">
                <div class="product-grid  lgx-single-courses1" style="box-shadow: 0 0 10px rgb(0 0 0 / 30%);">
                      
                    <div class="col-md-12">
                        <h3 class="title" href="job_details.php"><?php echo $tittle;?></a></h3>
                        <hr>
                    </div>
                    
                    <p style="margin-top:20px;"><span class="title" style="font-weight:600;margin-top:10px;line-height: 2rem;font-size: 15px;color: #d7560b;">Qualification:</span> <?php echo $qualification?></p>
                    <p style="margin-top:20px;margin-bottom:20px;"><span class="title" style="font-weight:600;margin-top:10px;line-height: 2rem;font-size: 15px;color: #d7560b;">Job Location :</span> <?php echo $location?></p>
                    
                    <h3 class="title" style="font-weight:600;margin-top:10px;line-height: 2rem;font-size: 15px;">Job Description :</h3>
                    <p><?php echo $description?></p>
                    <h3 class="title" style="font-weight:600;margin-top:10px;line-height: 2rem;font-size: 15px;">Desired Skill and Experience :</h3>
                    <p><?php echo $requirement?></p>
                    
                <p style="margin-top:20px;text-align: center;"><a class="lgx-btn" type="submit" href="apply_jobs.php?id=<?php echo $row['id'];?>">Apply Now</a></p>
             
         
                    <div class="clearfix"></div>
                </div>
            </div>
        <?php endwhile; ?>
            
            
        </div>
    </div>
</section>






      
        <!-- start footer -->
        <?php include 'footer.php';?>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/theme-vendors.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>