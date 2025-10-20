<?= view('components/header'); ?>

<!-- Hero -->
<section class="h-screen bg-[url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=1600')] bg-cover bg-center flex items-center justify-center text-white text-center">
    <div class="bg-black/50 p-8 rounded-2xl">
        <h2 class="mb-4 font-bold text-4xl md:text-6xl">Brewed with Passion</h2>
        <p class="mb-6 text-lg">Your cozy spot for fresh coffee and warm moments.</p>
        <a href="#menu" class="bg-yellow-600 hover:bg-yellow-500 px-6 py-3 rounded-full font-semibold text-lg">Explore Menu</a>
    </div>
</section>

<!-- Menu Highlights -->
<section id="menu" class="mx-auto px-6 py-16 max-w-6xl">
    <h3 class="mb-12 font-bold text-3xl text-center">Our Favorites</h3>
    <div class="gap-8 grid md:grid-cols-3">
        <?php
        $menu = [
            ["name" => "Classic Latte", "desc" => "Smooth and creamy with rich espresso.", "img" => "https://images.unsplash.com/photo-1511920170033-f8396924c348?w=600"],
            ["name" => "Cappuccino", "desc" => "Perfect balance of foam, milk, and espresso.", "img" => "https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600"],
            ["name" => "Mocha", "desc" => "Chocolate meets espresso in a sweet delight.", "img" => "https://images.unsplash.com/photo-1510626176961-4b57d4fbad03?w=600"]
        ];

        foreach ($menu as $item) {
            echo "
        <div class='bg-white shadow-md rounded-2xl overflow-hidden'>
          <img src='{$item['img']}' alt='{$item['name']}' class='w-full h-48 object-cover'>
          <div class='p-4'>
            <h4 class='font-semibold text-xl'>{$item['name']}</h4>
            <p class='text-gray-600'>{$item['desc']}</p>
          </div>
        </div>
        ";
        }
        ?>
    </div>
</section>

<!-- About -->
<section id="about" class="bg-yellow-50 py-16">
    <div class="mx-auto px-6 max-w-5xl text-center">
        <h3 class="mb-6 font-bold text-3xl">About Us</h3>
        <p class="text-gray-700 text-lg leading-relaxed">
            At Café Aroma, we believe coffee is more than just a drink — it’s an experience.
            Our beans are carefully sourced, our baristas pour their hearts into every cup,
            and our cozy space is designed for meaningful conversations and quiet moments alike.
        </p>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="mx-auto px-6 py-16 max-w-5xl">
    <h3 class="mb-8 font-bold text-3xl text-center">Contact Us</h3>
    <div class="gap-8 grid md:grid-cols-2">
        <div>
            <h4 class="mb-2 font-semibold text-xl">Visit Us</h4>
            <p class="text-gray-700">123 Brew Street, Manila, Philippines</p>
            <p class="mt-2 text-gray-700">Open: Mon-Sun 8AM - 9PM</p>
        </div>
        <div>
            <h4 class="mb-2 font-semibold text-xl">Get in Touch</h4>
            <p class="text-gray-700">📞 (02) 123-4567</p>
            <p class="text-gray-700">📧 hello@cafearoma.com</p>
        </div>
    </div>
</section>

<?= view('components/footer'); ?>