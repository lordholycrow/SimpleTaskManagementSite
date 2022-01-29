<?php require_once('config.php') ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

 <title>Project Management System - M.A.Sarimese</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

  </head>

<body>

   

  <!-- Sub Header -->
   <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Team Project Group: Muhammed Ali Sarimese, Marie Grace Girinema</p>
            <br>
           <div class="main-button-red">
                  <div ><a href="index.php">Go to the MainPage</a></div>
              </div>
              <br>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
        </div>
      </div>
    </div>
  </div>

 

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Details of your Task</h6>
          <h2>TASK DETAIL AND DELETE</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

             <?php
$task_id = $_GET['task_id'];

$records = mysqli_query($conn,"select * from tasks where task_id = '$task_id'"); 

while($data = mysqli_fetch_array($records))
{
?>   

          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  <div class="date">
                    <h6><?php echo $data['task_date'] ?></h6>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/single-meeting.jpg" alt=""></a>
                </div>
                <div class="down-content">
                  <a href="meeting-details.html"><h4><?php echo $data['task_name'] ?></h4></a>
                     <h6>Project number: <?php echo $data['project_id'] ?></h6>
                  <p><?php echo $data['task_short_descb'] ?></p>
                  <p class="description">
                      <p><?php echo $data['task_descb'] ?></p>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                 <div ><a style="background-color: #d95b00" href="tasks.php?project_id=<?php echo $data['project_id']; ?>">Back to  the Task List</a></div>
              <a href="deletetask.php?task_id=<?php echo $data['task_id'];?>&project_id=<?php echo $data['project_id'];?>">Delete the Task</a>
              </div>
            </div>
          </div>

                  <?php
}
?>  
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Muhammed Sarimese 
        </p>
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  </body>

</html>
