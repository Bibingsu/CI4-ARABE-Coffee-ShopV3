<?php
// roadmap.php
?>

<?= view('components/header'); ?>

<main class="mx-auto px-6 pt-28 max-w-6xl">

    <h2 class="mb-8 font-bold text-4xl text-center">📍 Road Map</h2>

    <!-- Road Map Timeline -->
    <section class="mb-16">
        <ol class="relative border-yellow-600 border-l-4">

            <!-- Phase 1 -->
            <li class="mb-10 ml-6">
                <span class="-left-3 absolute flex justify-center items-center bg-yellow-600 rounded-full w-6 h-6"></span>
                <h3 class="font-semibold text-[#4E342E] text-lg">Phase 1: Launch</h3>
                <p class="text-gray-600">Build the landing page, branding, and basic navigation structure.</p>
                <ul class="mt-2 text-gray-700 list-disc list-inside">
                    <li>Set up Tailwind CSS and page templates</li>
                    <li>Implement homepage hero, menu preview, and about section</li>
                    <li>Design consistent header and footer components</li>
                </ul>
            </li>

            <!-- Phase 2 -->
            <li class="mb-10 ml-6">
                <span class="-left-3 absolute flex justify-center items-center bg-yellow-600 rounded-full w-6 h-6"></span>
                <h3 class="font-semibold text-[#4E342E] text-lg">Phase 2: Features</h3>
                <p class="text-gray-600">Add interactivity and design consistency across the site.</p>
                <ul class="mt-2 text-gray-700 list-disc list-inside">
                    <li>Add dynamic menu cards using PHP components</li>
                    <li>Create a mood board for visual reference</li>
                    <li>Implement sign-in and sign-up functionality</li>
                </ul>
            </li>

            <!-- Phase 3 -->
            <li class="mb-10 ml-6">
                <span class="-left-3 absolute flex justify-center items-center bg-yellow-600 rounded-full w-6 h-6"></span>
                <h3 class="font-semibold text-[#4E342E] text-lg">Phase 3: Menu System & Rewards</h3>
                <p class="text-gray-600">Expand user experience and introduce engagement features.</p>
                <ul class="mt-2 text-gray-700 list-disc list-inside">
                    <li>Develop full menu management (view, add, update items)</li>
                    <li>Connect menu data to database for easy updates</li>
                    <li>Launch customer rewards program (points, discounts, etc.)</li>
                    <li>Add account dashboard to track user rewards</li>
                </ul>
            </li>

            <!-- Phase 4 -->
            <li class="ml-6">
                <span class="-left-3 absolute flex justify-center items-center bg-yellow-600 rounded-full w-6 h-6"></span>
                <h3 class="font-semibold text-[#4E342E] text-lg">Phase 4: Growth & Optimization</h3>
                <p class="text-gray-600">Refine performance, usability, and prepare for future expansion.</p>
                <ul class="mt-2 text-gray-700 list-disc list-inside">
                    <li>Optimize for mobile and tablet responsiveness</li>
                    <li>Improve loading times and accessibility</li>
                    <li>Deploy to live server or cloud hosting</li>
                </ul>
            </li>

        </ol>
    </section>

    <!-- List of Functionalities -->
    <section>
        <h3 class="mb-4 font-semibold text-2xl">⚙️ List of Functionalities</h3>
        <ul class="space-y-2 text-gray-700 list-disc list-inside">
            <li>Responsive landing page with hero and menu preview</li>
            <li>Reusable header and footer components</li>
            <li>Dynamic menu cards with PHP components</li>
            <li>About & Contact sections with business info</li>
            <li>Mood Board for consistent branding and colors</li>
            <li>Sign In & Sign Up functionality</li>
            <li>📋 Menu Management System (database-driven)</li>
            <li>🏆 Rewards & Loyalty Program for returning customers</li>
            <li>Future: Online ordering and account dashboard</li>
        </ul>
    </section>

</main>

<?= view('components/footer'); ?>