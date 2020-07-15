<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form method="POST" action="<?php echo e(route('saveEdited')); ?>"  enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-12">
                <div class=" bg-white p-2 pt-4 mb-4 rounded">
                    <div class="row">
                        <div class="form-group col-10 offset-1">
                            <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo e($post->title); ?>">
                        </div>
                        <div class="form-group col-10 offset-1">
                            <textarea type="text" class="form-control" name="description" placeholder="Description"><?php echo e($post->description); ?></textarea>
                        </div>


                        <div class="form-group col-10 offset-1">
                            <label for="country_id">Choose county</label>
                            <select name="country_id" class="form-control">

                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($country->id == $post->country_id): ?>
                                        <option selected value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                    <?php endif; ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>


                        <div class="form-group col-10 offset-1">
                            <input type="text" id="customer_phone" class="form-control" name="phone" value="<?php echo e($post->phone); ?>" size="25">
                            <input type="checkbox" hidden id="phone_mask" checked><label id="descr" for="phone_mask"></label>
                        </div>

                        <div class="form-group col-10 offset-1">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e($post->email); ?>">
                        </div>

                        <div class="form-group col-10 offset-1">
                            <label for="end_date">Enter the end date</label>
                            <input type="date" class="form-control" name="end_date" value="<?=\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->end_date)->format('Y-m-d')?>">
                        </div>

                        <div class="form-group col-10 offset-1">
                            <?php if($post->photo != null): ?>
                                <img src="../storage/images/<?php echo e($post->photo); ?>" alt="" width="300px">
                                <br>
                                <input type="hidden" name="old_photo" value="<?php echo e($post->photo); ?>">
                                <input type="hidden" name="delete" value="0">
                                <input type="checkbox" name="delete" value="1">Delete and leave post without photo<br>
                            <?php else: ?>
                                You haven't uploaded photo now
                            <?php endif; ?>
                            <br>
                            <label for="photo">Choose image</label>
                            <input type="file" class="form-control-file" name="photo">
                        </div>

                        <div class="col-10 offset-1">
                            <div class="row">
                                <div class="col-9">
                                    <?php echo $__env->make('map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="col-3 text-right">
                                    <input onclick="deleteMarkers();" type=button value="Delete Marker">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-10 offset-1 text-right">

                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                        <input type="hidden" name="id" value="<?php echo e($post->id); ?>">





                        <input id="lat" type="hidden" name="latitude" value="<?php echo e($post->latitude); ?>">
                        <input id="lon" type="hidden" name="longitude" value="<?php echo e($post->longitude); ?>">
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/RobinHerbots/Inputmask/3.2.7/dist/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/andr-04/inputmask-multi/1.2.0/js/jquery.inputmask-multi.min.js" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/phone.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WEB\lar_board\src\resources\views/edit.blade.php ENDPATH**/ ?>