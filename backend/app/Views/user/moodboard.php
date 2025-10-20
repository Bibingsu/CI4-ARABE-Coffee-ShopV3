<?php
// moodboard.php
?>

<?= view('components/header'); ?>

<main class="mx-auto px-6 pt-28 pb-16 max-w-6xl">

    <h2 class="mb-12 font-bold text-4xl text-center">🎨 Café Aroma Mood Board</h2>

    <!-- Color Palette -->
    <section class="mb-16">
        <h3 class="mb-4 font-semibold text-2xl">Color Palette</h3>
        <div class="flex gap-6">
            <div class="flex justify-center items-center bg-yellow-600 rounded-xl w-24 h-24 font-bold text-white">#FACC15</div>
            <div class="flex justify-center items-center bg-[#f9f6f1] border rounded-xl w-24 h-24 font-bold text-gray-800">#F9F6F1</div>
            <div class="flex justify-center items-center bg-[#4E342E] rounded-xl w-24 h-24 font-bold text-white">#4E342E</div>
        </div>
    </section>

    <!-- Typography -->
    <section class="mb-16">
        <h3 class="mb-4 font-semibold text-2xl">Typography</h3>
        <p class="mb-2 font-sans text-xl">This is <b>Sans Serif</b> (Tailwind default)</p>
        <p class="font-serif text-xl">This is <b>Serif</b> (Tailwind serif)</p>
    </section>

    <!-- Buttons -->
    <section class="mb-16">
        <h3 class="mb-4 font-semibold text-2xl">Buttons</h3>
        <div class="flex flex-wrap gap-4">
            <?= view('components/button-1', ['label' => 'Primary']); ?>
            <?= view('components/button-2', ['label' => 'Secondary']); ?>
            <?= view('components/button-3', ['label' => 'Outlined']); ?>
            <?= view('components/button-4', ['label' => 'Disabled']); ?>
        </div>
    </section>

    <!-- Cards -->
    <section class="mb-16">
        <h3 class="mb-4 font-semibold text-2xl">Card Styles</h3>
        <div class="gap-8 grid md:grid-cols-3">
            <?= view('components/cards-1', [
                'display' => 'https://images.unsplash.com/photo-1511920170033-f8396924c348?w=600',
                'product' => 'Classic Latte',
                'ingrediants' => 'Rich espresso and steamed milk'
            ]); ?>

            <?= view('components/cards-2', [
                'display' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600',
                'product' => 'Cappuccino',
                'ingrediants' => 'Espresso, steamed milk, milk foam'
            ]); ?>

            <?= view('components/cards-3', [
                'display' => 'https://images.unsplash.com/photo-1510626176961-4b57d4fbad03?w=600',
                'product' => 'Mocha',
                'ingrediants' => 'Espresso, chocolate, and milk'
            ]); ?>
        </div>
    </section>

    <!-- Logos -->
    <section class="mb-16">
        <h3 class="mb-4 font-semibold text-2xl">Logos</h3>
        <div class="flex gap-8">
            <div class="flex justify-center items-center bg-yellow-600 rounded-full w-24 h-24 font-bold text-white">Logo</div>
            <div class="flex justify-center items-center bg-[#4E342E] rounded-full w-24 h-24 font-bold text-white">Logo</div>
        </div>
    </section>

</main>

<?= view('components/footer'); ?>