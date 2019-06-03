<?php include 'head.php';?>
<?php include 'header.php';?>

    <div class="container">
      <!-- Columns, verwijder een column of voeg toe. Hij is nu automatisch, kijk even of dit mooi wordt op mobiel, anders col-md-4 -->
      <div class="row">
        <div class="col">
          <!--Contactformulier-->
  <section class="mb-4">

      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold my-4">Contactformulier</h2>
      <!--Section description-->
      <p class=" w-responsive mx-auto mb-5">Heb je nog vragen over de gebouwen, of iets anders? Stuur ons een berichtje!</p>

      <div class="row">

          <!--Grid column-->
          <div class="col">
              <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col">
                          <div class="md-form mb-0">
                              <input type="text" id="name" name="name" class="form-control">
                              <label for="name" class="">Naam</label>
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col">
                          <div class="md-form mb-0">
                              <input type="text" id="email" name="email" class="form-control">
                              <label for="email" class="">Email</label>
                          </div>
                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">
                      <div class="col">
                          <div class="md-form mb-0">
                              <input type="text" id="subject" name="subject" class="form-control">
                              <label for="subject" class="">Telefoonnummer*</label>
                          </div>
                      </div>
                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col">

                          <div class="md-form">
                              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                              <label for="message">Bericht</label>
                          </div>

                      </div>
                  </div>
                  <!--Grid row-->

              </form>

              <div class="text-center text-md-left">
                  <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Verzenden</a>
              </div>
              <div class="status"></div>
          </div>

      </div>

  </section>
  <!--Section: Contact v.2-->

        </div>
        <div class="col">
          <h2 class="h1-responsive font-weight-bold my-4">Locatie</h2>
          <div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="330" id="gmap_canvas" src="https://maps.google.com/maps?q=Campus%20Groningen%209700%20AC&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{position:relative;text-align:right;height:330px;width:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:330px;width:400px;}</style>
        </div>
        <p class=" w-responsive mx-auto mb-5"><b>Campus Groningen</b> <br>
          Postbus 112 <br>
          9700 AC Groningen <br>
          +31 050 361 1695.</p>
       </div>
