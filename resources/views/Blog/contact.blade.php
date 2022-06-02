@extends('layouts.template')
@section('content')
  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4>contact us</h4>
              <h2>let's stay in touch!</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Banner Ends Here -->

  <section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="down-contact">
            <div class="row">
              <div class="col-lg-8">
                <div class="sidebar-item contact-form">
                  <div class="sidebar-heading">
                    <h2>Send us a message</h2>
                  </div>
                  <div class="content">
                    <form id="contact" action="" method="post">
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" id="name" placeholder="Your name" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="email" type="text" id="email" placeholder="Your email" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12 col-sm-12">
                          <fieldset>
                            <input name="subject" type="text" id="subject" placeholder="Subject">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" rows="6" id="message" placeholder="Your Message"
                              required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button">Send Message</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="sidebar-item contact-information">
                  <div class="sidebar-heading">
                    <h2>contact information</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <li>
                        <h5>082367921304</h5>
                        <span>PHONE NUMBER</span>
                      </li>
                      <li>
                        <h5>miminwyz@gmail.com</h5>
                        <span>EMAIL ADDRESS</span>
                      </li>
                      <li>
                        <h5>Universitas Sumatera Utara,
                          <br>Jalan Dr. T. Mansur No.9
                        </h5>
                        <span>STREET ADDRESS</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div id="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1002475786586!2d98.65368281484415!3d3.5643926474060987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fe03ed8450b%3A0xe84941c195268efc!2sUniversity%20of%20Sumatera%20Utara!5e0!3m2!1sen!2sid!4v1653724940903!5m2!1sen!2sid"
              width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection


