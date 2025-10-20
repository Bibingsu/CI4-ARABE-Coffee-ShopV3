<div class="group relative shadow-md hover:shadow-2xl rounded-xl overflow-hidden transition duration-300">
  <img src="<?= esc($display ?? 'no display yet') ?>"
    alt="<?= esc($product ?? 'product image') ?>"
    class="group-hover:opacity-80 w-full h-56 object-cover transition duration-300">
  <div class="absolute inset-0 flex flex-col justify-center items-center bg-black/40 opacity-0 group-hover:opacity-100 p-4 text-white text-center transition duration-300">
    <h4 class="mb-2 font-semibold text-xl"><?= esc($product ?? 'no product yet') ?></h4>
    <p class="text-sm"><?= esc($ingrediants ?? 'no ingrediants yet') ?></p>
    <a href="#" class="bg-yellow-600 hover:bg-yellow-500 mt-3 px-4 py-2 rounded-full font-medium text-sm">Order Now</a>
  </div>
</div>