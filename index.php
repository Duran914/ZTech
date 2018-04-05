<?php include 'inc/header.php'; ?>

        <!-- JumboTron -->
          <div class="showcase">
            <h1>Affordable Professional Web Design</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Etiam eu luctus ipsum, rhoncus semper magna. Nulla nec magna sit amet sem
              interdum condimentum.</p>
            </div>

            <!--Subscribe to newsletter form -->
            <div class="newsletter" id="newsBanner">
              <i id="fa-x" class="fa fa-times fa-2x" aria-hidden="true"></i>
              <h2>Subscribe To Our Newsletter</h2>
              <form name="sub" onsubmit="return subMessage()" action="#" method="post">
                <span id="emptyEmail"></span> <br>
                <input type="email" name="email" placeholder="Enter Email">
                <input type="submit" id="button1" value="Subscribe" name="sub_btn">
              </form>
            </div>
            <div class="successBanner">
              <span id="subBanner"></span>
            </div>

  <!--Front-End tecnologies images -->
      <section id="content">
          <div class="imgCards">
               <img src="img/logo_html.png" alt="HTML5 logo">
              <h3>HTML5 Markup</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Vivamus mi augue, viverra sit amet ultricies</p>
    </div>
    <div class="imgCards">
      <img src="img/logo_css.png" alt="CSS3 logo">
      <h3>CSS3 Styling</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Vivamus mi augue, viverra sit amet ultricies</p>
    </div>
    <div class="imgCards">
      <img id="js_icon" src="img/logo_js.png" alt="JS logo">
      <h3>Javascript</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Vivamus mi augue, viverra sit amet ultricies</p>
    </div>
  </section>
  
<?php include 'inc/footer.php'; ?>

