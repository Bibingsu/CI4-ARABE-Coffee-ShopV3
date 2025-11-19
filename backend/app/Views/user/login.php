<?php
?>

<?= view('components/header'); ?>

<main class="flex justify-center items-center bg-[#f9f6f1] pt-20 pb-16 min-h-screen">

    <div class="bg-white shadow-lg p-8 border border-[#f0e6dc] rounded-2xl w-full max-w-md">
        <h2 class="mb-6 font-bold text-[#4b2e05] text-3xl text-center">☕ Sign In to Café Aroma</h2>

        <!-- Success Message -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="bg-green-100 mb-4 p-3 rounded text-green-700">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <!-- Error Message -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="bg-red-100 mb-4 p-3 rounded text-red-700">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('signin') ?>" method="POST" class="space-y-5">
            <!-- Email -->
            <div>
                <label for="email" class="block mb-1 font-medium text-gray-700 text-sm">Email Address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                    placeholder="you@example.com"
                    class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-600 w-full">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block mb-1 font-medium text-gray-700 text-sm">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    placeholder="••••••••"
                    class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-600 w-full">
            </div>

            <!-- Sign In Button -->
            <button
                type="submit"
                class="bg-yellow-600 hover:bg-yellow-500 py-2.5 rounded-lg w-full font-semibold text-white transition">
                Sign In
            </button>
        </form>

        <!-- Sign Up Link -->
        <p class="mt-6 text-gray-700 text-sm text-center">
            Don’t have an account?
            <a href="<?= base_url('signup') ?>" class="font-semibold text-yellow-700 hover:underline">Sign Up</a>
        </p>
    </div>

</main>

<?= view('components/footer'); ?>