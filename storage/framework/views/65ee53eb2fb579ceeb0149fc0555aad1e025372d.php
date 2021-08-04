<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.MAGUS_spec'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main class="top-nav-padding">

<!-------------------Submenu------------->
        <div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">


                <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.overview', 'magus-2in1')); ?>"><?php echo app('translator')->getFromJson('cosmos.name'); ?></a></li>
                <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.overview', 'magus-2in1-spec')); ?>"><?php echo app('translator')->getFromJson('site.productnav_spec'); ?></a></li>
                <li class="nav-item"><a class="nav-link py-1" href="<?php echo e(route('product.support', 'liber')); ?>"><?php echo app('translator')->getFromJson('site.productnav_support'); ?></a></li>
            </ul>
        </div>
    </div>
</div>
<!--------------->
<?php echo $__env->make('partials.rolling-cta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">

                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block"><?php echo app('translator')->getFromJson('cosmos.name'); ?></div></div>
                            <img class="hidden-sm-down" src="/images/magus/magus_grey.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li style="background-color: #434343" class="active" data-image="/images/cosmos/charcoal_grey.png"></li>
                                
                            </ul>
                        </a>
                    </nav>
                </div>
            </div>



            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="spec-4" role="tabpanel">
                    <div class="container">


                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.os'); ?> </div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.cpu'); ?></div>
                                <div>Intel® Celeron® N4020</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.dis'); ?></div>
                                <div>11.6 TFT,  (1920 x 1080)  IPS Touch Screen</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.mem'); ?></div>
                                <div>4GB DDR4</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.graphic'); ?></div>
                                <div>Intel® UHD Graphics 600</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.storage'); ?></div>
                                <div>64GB eMMC</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.audio'); ?></div>
                                <div>1 x Speaker </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.key'); ?></div>
                                <div>English Travel Keyboard</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.wireless'); ?></div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.bluetooth'); ?></div>
                                <div>Bluetooth 4.0 </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.ports'); ?></div>
                                <div>3.5mm x 1 Headphone, 1 x USB 3.0, 1 x Mini-HDMI, 1 x microSD card Slot</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.dim'); ?></div>
                                <div>W299mm x H22mm x D206mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.weight'); ?></div>
                                <div>Overall weight : 1.41kg / Tablet weight: 1.07kg / Keyboard weight: 0.34kg</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.battery'); ?></div>
                                <div>7.4V 3750mAH </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.life'); ?></div>
                                <div>Up to 8 hours<sup>#</sup></div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.color'); ?></div>
                                <div><?php echo app('translator')->getFromJson('cosmos.color-detail'); ?></div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('cosmos.access'); ?></div>
                                <div>AC Adapter and  Power cord, English Travel Keyboard</div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
				<?php echo app('translator')->getFromJson('cosmos.terms'); ?>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>