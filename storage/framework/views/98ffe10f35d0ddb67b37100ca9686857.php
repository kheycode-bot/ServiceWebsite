

<?php $__env->startSection('content'); ?>
    <!-- Hero Section with Callback Form -->
    <div class="bg-nature-2 text-white py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <!-- Left: Hero Text -->
                <div class="md:w-1/2 text-center md:text-left">
                    <h1 class="text-4xl font-bold mb-4">When It Comes To Reliability, We Are The One You Need!</h1>
                    <p class="text-lg mb-8">Fusion ports outermost images, our vehicula tellus freggar so.</p>
                    <div class="flex justify-center md:justify-start space-x-4">
                        <a href="#" class="bg-nature-4 text-nature-2 px-6 py-3 rounded-lg font-semibold hover:bg-nature-3 transition duration-300">Know More</a>
                        <a href="#" class="bg-nature-4 text-nature-2 px-6 py-3 rounded-lg font-semibold hover:bg-nature-3 transition duration-300">Search</a>
                    </div>
                </div>

                <!-- Right: Callback Form -->
                <div class="md:w-1/2 bg-nature-5 p-8 rounded-lg shadow-lg mt-10 md:mt-0">
                    <h2 class="text-3xl font-bold mb-4 text-center text-nature-1">Request Callback</h2>
                    <p class="text-nature-2 mb-8 text-center">Please Complete The Form</p>

                    <?php if(session('success')): ?>
                        <div class="bg-green-500 text-white p-3 rounded-md mb-6 text-center"><?php echo e(session('success')); ?></div>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-md mb-6">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('callback.store')); ?>" method="POST" class="bg-white p-6 shadow-lg rounded-lg">
                        <?php echo csrf_field(); ?>
                        <div class="mb-6">
                            <label class="block text-nature-1 font-semibold mb-2">Your Name</label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nature-3" required>
                        </div>

                        <div class="mb-6">
                            <label class="block text-nature-1 font-semibold mb-2">Your Email</label>
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nature-3" required>
                        </div>

                        <div class="mb-6">
                            <label class="block text-nature-1 font-semibold mb-2">Contact No</label>
                            <input type="text" name="contact_no" value="<?php echo e(old('contact_no')); ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nature-3" required>
                        </div>

                        <div class="mb-6">
                            <label class="block text-nature-1 font-semibold mb-2">Purpose Of Contact</label>
                            <input type="text" name="purpose" value="<?php echo e(old('purpose')); ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nature-3" required>
                        </div>

                        <div class="mb-6">
                            <label class="block text-nature-1 font-semibold mb-2">Your Message</label>
                            <textarea name="message" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nature-3"><?php echo e(old('message')); ?></textarea>
                        </div>

                        <button type="submit" class="w-full bg-nature-3 text-white py-3 rounded-lg hover:bg-nature-2 transition duration-300">
                            Request Call
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\services-app\resources\views/components/callback_form.blade.php ENDPATH**/ ?>