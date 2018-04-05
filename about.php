<?php include 'inc/header.php'; ?>

    <!--Our Company Paragraph text -->
    <section id="content">
    <h3 id="pageHeader">About Us</h3>
    <div class="leftContent">
      <div class="product">
      <h3>Our Company</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum.
        Praesent pharetra tincidunt tempor. Etiam velit eros,
        dapibus eget porta in, lacinia et magna. Nam eget eros non orci
        consectetur congue at ac augue. Proin eget arcu in enim feugiat ultricies.
        Curabitur maximus metus nec metus pretium viverra at et orci.
        Integer hendrerit ante ut placerat cursus.
      </p>
      <p>Aliquam eget pharetra diam. Nulla placerat lorem at turpis tempor,
        vel ultrices dui tincidunt. Proin quis egestas lorem.
        Mauris vehicula lectus odio, sit amet dictum justo feugiat a.
        Praesent id dictum lacus. Sed ullamcorper id erat ut dictum.
        Fusce porttitor lorem sapien, in aliquet sapien convallis et.
        Donec nec mauris nulla. Curabitur cursus semper odio, et hendrerit ante.
        Nunc at cursus ante. Maecenas gravida ligula ut efficitur suscipit.
        Nulla id turpis varius, pretium nunc sed, fermentum sem.
        Sed lacinia nunc non interdum pellentesque.</p>
    </div>
  </div>
  <!-- What We Do paragraph text -->
    <aside class="sidebar">
      <span id="successBanner"></span>
        <h3>What We Do</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum.
          Praesent pharetra tincidunt tempor. Etiam velit eros,
          dapibus eget porta in, lacinia et magna</p>
        </aside>
        <br><br><br>
<!-- Contact us form -->
        <aside class="sidebar" id="contact-us">
            <h3>Contact Us</h3>
            <span id="successBanner"></span>

            <form name="contactForm"
             onsubmit="return contactValidate()"
             action="#"
             method="post">

            <label for="">First Name</label><span id="star">*</span><br>
             <span id="fname_error"></span>
              <input type="text" name="fname" value="" placeholder="First Name"><br><br>

             Last Name<span id="star">*</span><br>
             <span id="lname_error"></span>
              <input type="text" name="lname" value="" placeholder="Last Name"><br><br>

             Email<span id="star">*</span><br>
             <span id="email_error"></span>
              <input type="email" name="email" value="" placeholder="Email"><br><br>

            Reason
            <span id="select_error"></span><br>
              <select name="issue">
                <option value="blank">--Select an option--</option>
                <option value="quote">Ask For A Quote</option>
                <option value="maint">Website Maintenance</option>
                <option value="question">General Question</option>
                <option value="price">Billing</option>
                <option value="other">Other</option>
              </select><br><br>

            Message<span id="star">*</span><br>
          <span id="texta_error"></span>
          <textarea name="texta" rows="8" cols="80"
           placeholder="Enter message"></textarea><br><br>

            <input id="button1" type="submit" value="Submit">
            </form>
            </aside>
            <span id="demo"></span>
  </section>

<?php include 'inc/footer.php'; ?>
