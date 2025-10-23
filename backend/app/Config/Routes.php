    <?php

    use CodeIgniter\Router\RouteCollection;

    /**
     * @var RouteCollection $routes
     */
    $routes->get('/', 'Users::index');
    $routes->get('/signin', 'Users::login');
    $routes->get('/signup', 'Users::signup');
    $routes->get('/moodboard', 'Users::moodboard');
    $routes->get('/roadmap', 'Users::roadmap');
    $routes->get('/users', 'Users::index');
    $routes->get('/users', 'Users::list');
    $routes->post('/signup', 'Users::register');
    $routes->match(['get', 'post'], '/signin', 'Users::signin');
