<div class="bg-[#fffaf5] shadow-sm hover:shadow-lg p-5 border border-[#f0e6dc] rounded-xl transition duration-300">
  <img src="<?= esc($display ?? "no display yet") ?>"
    alt="Cappuccino" class="mb-4 rounded-lg w-full h-48 object-cover">
  <h4 class="font-semibold text-[#4b2e05] text-lg"><?= esc($product ?? "no product yet") ?></h4>
  <p class="mt-1 mb-3 text-gray-600"><?= esc($ingrediants ?? "no ingrediants yet") ?></p>
  <a href="#" class="font-medium text-yellow-700 hover:underline">See Details →</a>
</div>