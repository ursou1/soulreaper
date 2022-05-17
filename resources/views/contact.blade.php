@extends('layouts.layout')
@section('content')
@include('parts.header')
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <nav class="breadcrumb-area">
                <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="breadcrumb-sep">/</li>
                  <li>contact</li>
                </ul>
              </nav>
              <h4 class="title">contact</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->



    <!--== Start Contact Info Area Wrapper ==-->
    <section class="contact-info-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="contact-info-item">
              <h4>CONTACT DIRECTLY</h4>
              <p>info@example.com</p>
              <p>+08801234576</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="contact-info-item">
              <h4>VISIT OUR OFFICE</h4>
              <p>184 Main Rd E, St Albans </p>
              <p>VIC 3021,</p>
            </div>
          </div>
          <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
            <div class="contact-info-item">
              <h4>WORK WITH US</h4>
              <p>Send your CV to our email:</p>
              <p>career@example.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Info Area Wrapper ==-->

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Get in touch with us</h2>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="contact-form-content">
              <!--== Start Rsvp Form ==-->
              <div class="contact-form">
                <form id="contact-form" action="https://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <input class="form-control" type="text" name="con_name" placeholder="Your name" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input class="form-control" type="email" name="con_email" placeholder="Your email" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input class="form-control" type="text" name="con_phone" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" name="con_message" placeholder="Your Message"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group text-center">
                        <button class="btn btn-link btn-contact" type="submit">Send Message</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!--== End Rsvp Form ==-->
              <div class="form-message"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area Wrapper ==-->
  </main>

  <!--== Start Quick View Menu ==-->
  <aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="fa fa-close"></i></span>
        </button>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="assets/img/shop/quick-view1.jpg" alt="Alan-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="content">
              <h4 class="title">Meta Slevless Dress</h4>
              <div class="prices">
                <del class="price-old">$85.00</del>
                <span class="price">$70.00</span>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
              <div class="quick-view-select">
                <div class="quick-view-select-item">
                  <label for="forSizes" class="form-label">Size:</label>
                  <select class="form-select" id="forSizes" required>
                    <option selected value="">s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                  </select>
                </div>
                <div class="quick-view-select-item">
                  <label for="forColors" class="form-label">Color:</label>
                  <select class="form-select" id="forColors" required>
                    <option selected value="">red</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>yellow</option>
                    <option>white</option>
                  </select>
                </div>
              </div>
              <div class="action-top">
                <div class="pro-qty">
                  <input type="text" id="quantity4" title="Quantity" value="1" />
                </div>
                <button class="btn btn-black">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>
  <!--== End Quick View Menu ==-->

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="close-action">
            <button class="btn-menu-close">menu <i class="fa fa-chevron-left"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->
</div>


</main>
