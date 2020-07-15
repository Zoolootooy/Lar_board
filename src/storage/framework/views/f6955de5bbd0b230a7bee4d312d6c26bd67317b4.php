<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="col-12">
            <?php echo $__env->make('message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white p-2 mb-4 rounded">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 offset-md-0 col-lg-12 offset-lg-0 text-justify text-lg-center">
                            <h3><a class="text-dark" href="/post/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
                        </div>
                        <div class="col-12 col-md-12 offset-md-0 col-lg-12 offset-lg-0 text-center mb-3 mt-3">
                            <?php if($post->photo != null): ?>
                                <img class="" src="storage/images/<?php echo e($post->photo); ?>" alt="" width="40%">
                            <?php else: ?>
                                <img class="" src="../storage/default.jpg" alt="" width="40%">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-justify">
							<?php if(strlen($post->description) < 256): ?>
								<?php echo e($post->description); ?>

							<?php else: ?>
								<?php echo e(substr($post->description,0,255)."..."); ?>

							<?php endif; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-right">
                            <small>
                                Date of creation: <?php echo e($post->created_at->format('d.m.Y')); ?>

                            </small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-right">
                            <?php if((Auth::check()) && ($post->user_id == Auth::user()->id)): ?>
                                <a class="text-primary" href="/edit/<?php echo e($post->id); ?>">
                                    Edit
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <?php echo e($data->links()); ?>

        </div>
    </div>


</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WEB\lar_board\src\resources\views/welcome.blade.php ENDPATH**/ ?>