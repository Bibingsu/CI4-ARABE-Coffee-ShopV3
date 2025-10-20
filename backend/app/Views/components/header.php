<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Café Aroma</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-900 bg-[#f9f6f1]">

  <!-- Navbar -->
  <header class="bg-white shadow-md fixed w-full top-0 left-0 z-10">
    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
      <!-- Logo -->
      <h1 class="text-2xl font-bold text-yellow-800">
        ☕ <a href="<?= base_url('/') ?>">Café Aroma</a>
      </h1>

      <!-- Navigation -->
      <nav>
        <ul class="flex gap-6 text-gray-700 font-medium">
          <li><a href="<?= base_url('/') ?>" class="hover:text-yellow-600">Home</a></li>
          <li><a href="<?= base_url('moodboard') ?>" class="hover:text-yellow-600">Mood Board</a></li>
          <li><a href="<?= base_url('roadmap') ?>" class="hover:text-yellow-600">Road Map</a></li>
          <li><a href="<?= base_url('signin') ?>" class="hover:text-yellow-600">Sign In</a></li>
          <li><a href="<?= base_url('signup') ?>" class="hover:text-yellow-600">Sign Up</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Page content starts here -->
  <main class="pt-24 px-6">