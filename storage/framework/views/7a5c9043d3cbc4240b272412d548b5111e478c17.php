<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.service'); ?>
<?php $__env->stopSection(); ?>

<?php 

 $page = 'support';

 ?>
<?php $__env->startSection('css'); ?>
<style>
.shopsList {
    display: inline-table;
    width: 100%;
}
.shopsList .col-md-6:nth-child(2n+1) {
    clear: both;
}


.shopsList .col-md-6 {
    display: inline-grid;
    width: 50%;
    margin-bottom: 30px;
}

.shopsList .fa {
    font-size: 18px;
    weight:600;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main>



<section class="top-nav-padding support-search-section">
            <div class="support-search-wrap pb-sm-5">

                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-6 text-center">
                            <form method="POST" action="<?php echo e(route('support')); ?>" class="">
                                <?php echo e(csrf_field()); ?>

                                <div class="support-search-mob-img">
                                    <img class="hidden-lg-up " src="/images/background/support-min.png"/>
                                </div>

                                
                                <div class="h1 section-title my-4 ls-0 font-weight-light"><?php echo app('translator')->getFromJson('site.support_title'); ?></div>

                                <div class="row no-gutters my-4 align-content-center justify-content-center col-12 col-sm-8 col-lg-12 mx-auto">
                                    <div class="col-12 col-md-12 col-md-12 ml-0 ml-md-4">
                                        <div class="form-group mb-2">

                                            <select id="product_type_field" name="type" class="form-control custom-select mb-3">

                                            </select>

                                            <select id="product_series_field" name="series" class="form-control custom-select mb-3" style="display: none;">

                                            </select>

                                            <select id="marketing_number_field" name="marketing_number" class="form-control custom-select mb-3" style="display: none;">

                                            </select>

                                            <select id="product_number_field" name="product_number" class="form-control custom-select mb-3" style="display: none;">

                                            </select>

                                            

                                            

                                            

                                            <button class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">&nbsp;<i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>

                                        </div>
                                    </div>

                                </div>
                            </form>
                              <br/>
                        
                            </div>
                    </div>
                </div>
                <div class="hidden-md-down panel-image">
                    <img src="/images/background/support-min.png"/>
                </div>
            </div>

          <!----  <div class="warranty-center-wrap py-5">            
            	<div class="container h-100">
               
                	<div class="row h-100 align-items-center">
                    
                    	<div class="col-12 col-lg-6">
	                        <img src="/images/background/AVITA_warranty.png" style="width:100%; max-width:600px;">
                        </div>
                        
                        <div class="col-12 col-lg-6">
                        
                            <div class="h1 text-center mt-4 mb-3 font-weight-light">Warranty Extension Service is available now</div>
                            <div class="warranty-content text-left mt-4 mb-3 font-weight-500 ">Thanks for the valuable suggestion from our customers. You can purchase the newly launched ???Warranty Extension Service??? online now. You may choose to extend 1 or 2 years to enjoy our worry-free warranty service.</div>
                            
                            <div class="text-center purchase_steps">
                                <a href="/warranty-extension" class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">
                                    See More
                                </a> 
                            </div>  

                          
                        </div>  
                                                      
                </div>
        --->
        <div class="support-center-wrap py-5">

    <div class="h1 text-center mt-4 mb-3 font-weight-light">Warranty Extension</div>
            <div class="text-center purchase_steps">
                <a href="https://www.avita.global/warranty-extension" target="_blank" class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">See More</a> 
            </div>
   
         <br/>

   <div class="container">
   <div class="alert alert-dismissible alert-info">
   Due to the global outbreak of the coronavirus (COVID-19), the service center will adjust the operation time or temporarily shut down for the time being. The adjustment will be subjected to local regulations and will be updated as soon as possible. We thank you for your patience and understanding.
   </div>
      
       <div class="panel-heading">

       <div class="h2 text-center section-title mb-3 ls-0 font-weight-light pt-5"><?php echo app('translator')->getFromJson('site.support_title_2'); ?></div>
                <div class="panel-body">
             <div class="alert alert-success">
               <div class="col-md-12">
                 
                 <div>
                     <i class="fa fa-map icon"></i>
                     Customer Service Hotline
                 </div>

                  <div>
                     <i class="fa fa-clock-o icon"></i>
                     09:30AM-6:30PM (Mon to Sat, Excluding 3rd Saturday), close on Sunday and Public Holidays
                 </div>

                 

                 <div>
                     <i class="fa fa-envelope icon"></i>
                      sl.support@nexstgo.com
                 </div>
                 
                    </div>


                </div>
                
                   
                 
                
        
              
         
               <div class="shopsList" id="shopsList">
                     <?php $__currentLoopData = $searchResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-md-6">
                                <div>
                                    <i class="fa fa-map icon"></i>
                                    <?php echo e($search->address); ?>

                                </div>

                                <div>
                                    <i class="fa fa-clock-o icon"></i>
                                    <?php echo e($search->opening_hour); ?>

                                </div>

                                <div>
                                    <i class="fa fa-phone icon"></i>
                                    <?php echo e($search->phone); ?>

                                </div>
                                
                         </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
               
            </div>
        </div>
    </section>
    <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
            <script type="text/javascript">

            $('#search').on('keyup', function(){
                    $value=$(this).val();
                    $.ajax({
                        type: 'get',
                        url: '<?php echo e(URL::to('search')); ?>',
                        data: { 'search': $value},
                        success:function(data){
                            $('#shopsList').html(data);
                        }
                    })
                })

            </script>

    
    <script type="text/javascript" src="<?php echo e(asset('js/support.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>