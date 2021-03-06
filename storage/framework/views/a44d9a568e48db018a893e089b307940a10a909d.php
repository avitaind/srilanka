<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">

       
            <div class="carousel-item active">
                <div class="responsive-block">
                <a href="https://avita-srilanka.com/news/detail/6">
                    <div class="banner-block responsive-item">
                        <?php if( App::isLocale('en') ): ?>
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/AVITA_5TH_KV.jpg')"></div>
                        <?php else: ?>
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/AVITA_5TH_KV.jpg')"></div>
                        <?php endif; ?>
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/AVITA_5TH_KV_vert.jpg')"></div>
                    </div>
                    </a>
                </div>
            </div>

        <div class="carousel-item ">
            <div class="responsive-block">
            <a href="<?php echo e(route('product.overview', ['admiror'])); ?>">
                <div class="banner-block responsive-item">
                    <?php if( App::isLocale('en') ): ?>
                        <div class="banner-bg hidden-sm-down"
                             style="background-image: url('/images/banner/avita-admiror-teaser-web.jpg')"></div>
                    <?php else: ?>
                        <div class="banner-bg hidden-sm-down"
                             style="background-image: url('/images/banner/avita-admiror-teaser-web.jpg')"></div>
                    <?php endif; ?>
                    <div class="banner-bg hidden-md-up"
                         style="background-image: url('/images/banner/avita-admiror-teaser-mob.jpg')"></div>
                </div>
                </a>
            </div>
        </div>

        
       
        <div class="carousel-item">
            <div class="responsive-block">
            <a href="<?php echo e(route('product.overview', ['liber-v'])); ?>">
                <div class="banner-block responsive-item">
                    <?php if( App::isLocale('en') ): ?>
                        <div class="banner-bg hidden-sm-down"
                             style="background-image: url('/images/banner/avita-liber-v-web-new-v4.jpg')"></div>
                    <?php else: ?>
                        <div class="banner-bg hidden-sm-down"
                             style="background-image: url('/images/banner/avita-liber-v-web-new-v4.jpg')"></div>
                    <?php endif; ?>
                    <div class="banner-bg hidden-md-up"
                         style="background-image: url('/images/banner/avita-liber-v-mob-new-v4.jpg')"></div>
                </div>
                </a>
            </div>
        </div>

        <div class="carousel-item ">
                <div class="responsive-block">
                <a href="<?php echo e(route('product.overview', 'magus-2in1')); ?>">
                    <div class="banner-block responsive-item">
                        <?php if( App::isLocale('en') ): ?>
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/MAGUS_2-in-1_Lifestyle_Banner_(Dextop).png')"></div>
                        <?php else: ?>
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/MAGUS_2-in-1_Lifestyle_Banner_(Dextop).png')"></div>
                        <?php endif; ?>
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/MAGUS_2-in-1_Lifestyle_Banner_(Mobile).png')"></div>
                    </div>
                    </a>
                </div>
            </div>
        
            <div class="carousel-item ">
                <div class="responsive-block">
                <a href="<?php echo e(route('product.overview', 'essential')); ?>">
                    <div class="banner-block responsive-item">
                        <?php if( App::isLocale('en') ): ?>
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/avita-essential-web-new.jpg')"></div>
                        <?php else: ?>
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/avita-essential-web-new.jpg')"></div>
                        <?php endif; ?>
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/avita-essential-mob-new.jpg')"></div>
                    </div>
                    </a>
                </div>
            </div>
        

        </div>
    
          <ol class="carousel-indicators">
           <li data-target="#home_banner" data-slide-to="0" class="active"></li>
           <li data-target="#home_banner" data-slide-to="1" class="active"></li>
           <li data-target="#home_banner" data-slide-to="2" class="active"></li>
           <li data-target="#home_banner" data-slide-to="3" class="active"></li>
           <li data-target="#home_banner" data-slide-to="4" class="active"></li>
           
       </ol>
    </div>
  </div>       

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
        $(document).ready(function() {
    $('.carousel').carousel({
      interval: 4000
    });
  });
  
    </script>
<?php $__env->stopSection(); ?>
