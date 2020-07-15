



<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="bg-white p-2 mb-4 rounded">
                <div class="row">
                    <div class="col-12 text-justify mb-3 mt-4">
                        <h2><?php echo e($data->title); ?></h2>
                    </div>

                    <div class="col-12 text-right">
                        <p>Date of creation: <?php echo e($data->created_at->format('d.m.Y H:m:s')); ?></p>
                    </div>

                    <div class="col-12 text-center mb-4">
                        <?php if($data->photo != null): ?>
                            <img class="" src="../storage/images/<?php echo e($data->photo); ?>"  width="100%">
                        <?php else: ?>
                            <img class="" src="../storage/default.jpg"  width="100%">
                        <?php endif; ?>
                    </div>

                    <div class="col-12 text-justify">
                        <p><?php echo e($data->description); ?></p>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 text-left">
                                Phone:
                            </div>
                            <div class="col-9 text-left">
                                <p><?php echo e($data->phone); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-3  text-left">
                                Country:
                            </div>
                            <div class="col-9  text-left">
                                <p><?php echo e($country->name); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-3  text-left">
                                Email:
                            </div>
                            <div class="col-9  text-left">
                                <p><?php echo e($data->email); ?></p>
                            </div>
                        </div>
                    </div>



                    <input id="lat" type="hidden" name="latitude" value="<?php echo e($data->latitude); ?>">
                    <input id="lon" type="hidden" name="longitude" value="<?php echo e($data->longitude); ?>">
                    <div class="col-12">
                        <?php echo $__env->make('map_show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WEB\lar_board\src\resources\views/post.blade.php ENDPATH**/ ?>