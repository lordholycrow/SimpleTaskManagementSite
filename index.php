<?php require_once('config.php') ?>

<?php require_once('public_functions.php') ?>

<?php $posts = getPublishedPosts(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
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
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>


      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello </h6>
              <h2>Welcome to the Project Management System</h2>
              <p> You can simple create a new project by clicking "Create Now!"</p>
              <div class="main-button-red">
                  <a href="create.project.php">Create Now!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>




  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          

        <?php foreach ($posts as $post): ?>
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <?php echo $post['project_id'] ?>
                <h4><?php echo $post['project_name'] ?></h4>
                <p><?php echo $post['project_descb'] ?></p>
                <br>
                 <div class="main-button-red">
                  <div ><a  style="background-color: #2ca170" href="tasks.php?project_id=<?php echo $post['project_id']; ?>">Go to the Project</a></div>
              </div>
              <br>
              <div class="main-button-red">
                  <div ><a  style="background-color: #d95b00" href="delete.php?project_id=<?php echo $post['project_id']; ?>">Delete the Project</a></div>
              </div>
              </div>
            </div>
          

       </form>




            <?php endforeach ?>

          </div>
        </div>
      </div>
    </div>
  </section>

 





  <section class="contact-us" id="contact">

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