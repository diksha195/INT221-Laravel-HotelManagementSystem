<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Room
                                <a href="<?php echo e(url('admin/rooms')); ?>" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('success')): ?>
                            <p class="text-success"><?php echo e(session('success')); ?></p>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <form method="post" action="<?php echo e(url('admin/rooms/'.$data->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('put'); ?>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Select Room Type</th>
                                            <td>
                                                <select name="rt_id" class="form-control">
                                                    <option value="0">--- Select ---</option>
                                                    <?php $__currentLoopData = $roomtypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($data->room_type_id==$rt->id): ?> selected <?php endif; ?> value="<?php echo e($rt->id); ?>"><?php echo e($rt->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td><input value="<?php echo e($data->title); ?>" name="title" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="submit" class="btn btn-primary" />
                                            </td> 
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\int221\resources\views/room/edit.blade.php ENDPATH**/ ?>