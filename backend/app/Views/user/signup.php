<?php
// signup.php
?>

<?= view('components/header'); ?>

<main class="flex justify-center items-center bg-[#f9f6f1] pt-20 pb-16 min-h-screen">

    <div class="bg-white shadow-lg p-8 border border-[#f0e6dc] rounded-2xl w-full max-w-md">
        <h2 class="mb-6 font-bold text-[#4b2e05] text-3xl text-center">☕ Create Your Account</h2>

        <form action="<?= base_url('signup') ?>" method="POST" class="space-y-5">

            <!-- Name -->
            <div>
                <label for="name" class="block mb-1 font-medium text-gray-700 text-sm">Full Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    required
                    placeholder="Your name"
                    class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-600 w-full">
            </div>

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

            <!-- Confirm Password -->
            <div>
                <label for="confirm_password" class="block mb-1 font-medium text-gray-700 text-sm">Confirm Password</label>
                <input
                    type="password"
                    id="confirm_password"
                    name="confirm_password"
                    required
                    placeholder="••••••••"
                    class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-600 w-full">
            </div>

            <!-- Sign Up Button -->
            <button
                type="submit"
                class="bg-yellow-600 hover:bg-yellow-500 py-2.5 rounded-lg w-full font-semibold text-white transition">
                Create Account
            </button>
        </form>

        <!-- Sign In Link -->
        <p class="mt-6 text-gray-700 text-sm text-center">
            Already have an account?
            <a href="<?= base_url('signin') ?>" class="font-semibold text-yellow-700 hover:underline">Sign In</a>
        </p>
    </div>

</main>

<?= view('components/footer'); ?>