<?php require_once('config.php') ?>


<?php require_once('public_functions.php') ?>



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

          <h6>You can add a project here!</h6>
          <h2>CREATE PROJECT</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">

<form action="insertinto_task.php" method="post">

  <div class="mb-3">
    <label  style="color: white;" for="task_name" class="form-label">Task Name </label>
    <input type="text"   class="form-control" name="task_name" id="task_name" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label  style="color: white;" for="short_descb" class="form-label">Short Description</label>
    <input type="text" class="form-control" name="short_descb" id="short_descb">
  </div>

  <div class="mb-3">
    <label  style="color: white;" for="long_descb" class="form-label">Long Description</label>
     <textarea type="text" class="form-control" rows="3" name="long_descb" id="long_descb"></textarea>
  </div>

  <div class="mb-3">

   <select class="form-control"  name="project_id" id="project_id">,
<?php
$records = mysqli_query($conn,"select project_id from projects"); 
while($data = mysqli_fetch_array($records))
{
?>   
  <option><?php echo $data['project_id'] ?></option>
<?php
}
?>  
</select>



  </div>
  <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
</form>




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
    <script src="assets/js/isotope.js"></script>
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
