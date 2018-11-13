
  @include('header');

<div class="ps-hero bg--cover" data-background="images/hero/bread-1.jpg">
      <div class="ps-container">
        <h3>Products</h3>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Products</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="ps-section ps-home-promotions">
      <div class="ps-container">
        <div class="ps-section__header text-center">
      
          <h3 class="ps-section__title">Our Products</h3><span class="ps-section__line"></span>
        </div>
        <div class="ps-section__content masonry-root">
          <ul class="ps-masonry-filter">
            <li class="current"><a href="#" data-filter="*">All Products</a></li>
            <li><a href="#" data-filter=".livingroom">Solar Panels</a></li>
            <li><a href="#" data-filter=".bedroom">Inverter Systems</a></li>
            <li><a href="#" data-filter=".mubroom">Batteries</a></li>
            <li><a href="#" data-filter=".officeroom">CCTV</a></li>
            <li><a href="#" data-filter=".lightting">Our Gallery</a></li>
          </ul>
          <div class="masonry-wrapper" data-col-lg="4" data-col-md="3" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
            <div class="ps-masonry filter" style="position: relative; height: 487.25px;">
              <div class="grid-sizer"></div>
              <div class="grid-item livingroom" style="position: absolute; left: 0px; top: 0px;">
                <div class="grid-item__content-wrapper">
                      <div class="ps-product">
                        <div class="ps-product__thumbnail">
                          <div class="ps-badge"><span>New</span></div>
                          <div class="ps-badge ps-badge--sale"><span>-5%</span></div><img src="images/product/Item-1.jpg" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                          
                        </div>
                        <div class="ps-product__content">
                              <a class="ps-product__title" href="#">
                               Solar Panels</a>
                          
                        </div>
                      </div>
                </div>
              </div>
              <div class="grid-item bedroom mubroom" style="position: absolute; left: 308px; top: 0px;">
                <div class="grid-item__content-wrapper">
                <div class="ps-product">
                        <div class="ps-product__thumbnail">
                         
                          <img src="images/product/Item-1.jpg" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                          
                        </div>
                        <div class="ps-product__content">
                              <a class="ps-product__title" href="#">
                                Inverter Systems</a>
                          
                        </div>
                      </div>
                </div>
              </div>
              <div class="grid-item officeroom" style="position: absolute; left: 616px; top: 0px;">
                <div class="grid-item__content-wrapper">
                <div class="ps-product">
                        <div class="ps-product__thumbnail">
                          <img src="images/product/Item-1.jpg" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                          
                        </div>
                        <div class="ps-product__content">
                              <a class="ps-product__title" href="#">
                                Batteries</a>
                          
                        </div>
                      </div>
                </div>
              </div>
              <div class="grid-item lightting" style="position: absolute; left: 924px; top: 0px;">
                <div class="grid-item__content-wrapper">
                <div class="ps-product">
                        <div class="ps-product__thumbnail">
                    <img src="images/product/Item-1.jpg" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                          
                        </div>
                        <div class="ps-product__content">
                              <a class="ps-product__title" href="#">
                               CCTV</a>
                          
                        </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center"><a class="ps-btn ps-btn--blue" href="#">Get Quote</a></div>
        </div>
      </div>
    </div>
  

  @include('footer');