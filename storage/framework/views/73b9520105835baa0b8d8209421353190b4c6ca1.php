<div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">


               
            <!--  <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.overview', 'liber12')); ?>"><?php echo app('translator')->getFromJson('site.productnav_overview_12'); ?></a></li> -->

                    <?php if(!$HAVE_LIBER_U): ?>
                        <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.overview', 'liber-new-generation')); ?>"><?php echo app('translator')->getFromJson('site.liber14'); ?></a></li>
                    <?php else: ?> 
                        <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.overview', 'liber')); ?>"><?php echo app('translator')->getFromJson('site.productnav_overview_13'); ?></a></li>   
                    <?php endif; ?>    

            

            
                <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.spec', 'liber')); ?>"><?php echo app('translator')->getFromJson('site.productnav_spec'); ?></a></li>
                
                <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.support', 'liber')); ?>"><?php echo app('translator')->getFromJson('site.productnav_support'); ?></a></li>

                    <li class="nav-item">
                        <a class="nav-link py-1" href="/where-to-buy"><?php echo app('translator')->getFromJson('site.productnav_wheretobuy'); ?></a>
                        
                    </li>
            </ul>
        </div>
    </div>
</div>
