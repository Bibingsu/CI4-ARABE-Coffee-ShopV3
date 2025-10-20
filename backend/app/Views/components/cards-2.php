<div class="flex bg-white shadow-md hover:shadow-xl border border-[#f0e6dc] rounded-xl overflow-hidden transition duration-300">
  <img src="<?= esc($display ?? 'no display yet') ?>"
    alt="<?= esc($product ?? 'product image') ?>"
    class="w-40 h-40 object-cover">
  <div class="flex flex-col justify-center p-4">
    <h4 class="font-semibold text-[#4b2e05] text-lg"><?= esc($product ?? 'no product yet') ?></h4>
    <p class="mb-2 text-gray-600"><?= esc($ingrediants ?? 'no ingrediants yet') ?></p>
    <a href="#" class="font-medium text-yellow-700 hover:underline">Learn More →</a>
  </div>
</div>