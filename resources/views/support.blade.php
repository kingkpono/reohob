@include('header');
<div class="ps-hero bg--cover" data-background="images/hero/bread-1.jpg">
      <div class="ps-container">
        <h3>Support</h3>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Support</li>
          </ol>
        </div>
      </div>
    </div>
    
    <div class="ps-contact">
      <div class="ps-container">
        <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                <form class="ps-form--contact" action="do_action" method="post">
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="form-group">
                            <label>Name <sup>*</sup></label>
                            <input class="form-control" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="form-group">
                            <label>Email <sup>*</sup></label>
                            <input class="form-control" type="text" placeholder="">
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                    <label>Your Message <sup>*</sup></label>
                    <textarea class="form-control" rows="7"></textarea>
                  </div>
                  <div class="form-group submit">
                    <button class="ps-btn pl-60 pr-60">Send your message</button>
                  </div>
                </form>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                <div class="ps-contact__info">
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="ps-block--contact">
                            <h3>OFFICE AT AMERICA</h3>
                            <h4>BASEMENT COMPANY, NEW YORK</h4>
                            <p><i class="fa fa-envelope-o"></i><a href="#">hello@example.com</a></p>
                            <p><i class="fa fa-phone"></i> +1 650-253-0000</p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="ps-block--contact">
                            <h3>OFFICE AT VIETNAM</h3>
                            <h4>189/32 BASEMENT COMPANY, ABC, VIET NAM</h4>
                            <p><i class="fa fa-envelope-o"></i><a href="#">hello@basis.com</a></p>
                            <p><i class="fa fa-phone"></i> +1 650-253-0000</p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="ps-block--contact">
                            <h3>OFFICE AT PARIS</h3>
                            <h4>189/32 BASEMENT COMPANY, PARIS, FRANCE</h4>
                            <p><i class="fa fa-envelope-o"></i><a href="#">hello@basis.com</a></p>
                            <p><i class="fa fa-phone"></i> +1 650-253-0000</p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="ps-block--contact">
                            <h3>FOLLOW US</h3>
                            <ul class="ps-social">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-feed"></i></a></li>
                            </ul>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>

   
      @include('footer');