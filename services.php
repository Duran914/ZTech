<?php include 'inc/header.php'; ?>

  <!-- Prouects offered text -->
    <section id="content">
      <h3 id="pageHeader">Services</h3>
    <div class="leftContent">
      <div class="product">
        <h3>Website Design</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem.
           Nulla facilisi.
        </p>
        <p>Pricing: $999 - $,2500</p>
    </div>
    <br><br>
    <div class="product">
       <h3>Website Maintenance</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Vivamus mi augue, viverra sit amet ultricies at,
          vulputate id lorem. Nulla facilisi.
        </p>
         <p>Pricing: $200 per month</p>
    </div>
    <br><br>
    <div class="product">
      <h3>Website Hosting</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Vivamus mi augue, viverra sit amet ultricies at,
          vulputate id lorem. Nulla facilisi.
        </p>
        <p>Pricing: $50 per month</p>
    </div>

  </div>

  <!-- Get A Qoute form -->
  <aside class="sidebar">
    <form name="quoteForm" action="#"
     onsubmit="return quoteValidate()"
     action="#"
     method="post">

      <h3>Get A Quote</h3>
      First Name<span id="star">*</span><br>
      <span id="fname_error">&nbsp</span><br>
      <input type="text" name="fname" placeholder="First Name"><br><br>

      Last Name<span id="star">*</span><br>
      <span id="lname_error">&nbsp</span><br>
      <input type="text" name="lname" placeholder="Last Name"><br><br>

      Email<span id="star">*</span><br>
      <span id="email_error">&nbsp</span><br>
      <input type="email" name="email" placeholder="Email Address"><br><br>

      Message<span id="star">*</span><br>
      <span id="texta_error">&nbsp</span><br>
      <textarea name="texta" rows="8" cols="31" placeholder="Enter message" ></textarea><br> <br>

      <input id="button1" type="submit" value="Send">
      </form>
      </aside>

  </section>

<?php include 'inc/footer.php'; ?>
