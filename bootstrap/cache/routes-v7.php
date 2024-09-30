<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/registerUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6r4ngAjPCZsKsPsX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zTelIkw4WhMABFK9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/welcomeimage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GdBLe9DLynVGeB5Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/yearsList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CwhI2swDwZ0m7eXp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/device_verification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vSiIykAAzgUD131H',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/Category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4jZGd3ZA7ZISqhjG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_cityid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SKLf6M0ARifXbGG5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getUserProfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M6xq6F3mSYQLQYwT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/UpdateProfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kp0OUKgu7V9ATxBr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SBsV1K6waNzn1dYx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/viewed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k4nYWLJ1rLBmpCGv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update_userlocation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e4VS9EUTJojRZXal',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update_userlanguage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oqAIVqyQTDBEtQTJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/car_fillter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LjqkocVY8shoh0lZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/allBrand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9cHypu7WgI0AJbQe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/allaggent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yX3pMPaLWj9m3CS7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/allmagazine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AC13GhM1pBmrWzOb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/magazinedata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::izwldq1xb1vKsazt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/magazinetabdata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rumZQHy5XhNjd89K',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addmagazineview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f7DxryTiUeL1dzy8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addnewsfavorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yEsvoDwUlK6Fro2e',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/newsfavorites_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TOvi2K8fAE2FeMXh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/branddetails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9y3CLwQGlmdyYsnl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addBrandreview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ul3bipVfkTh5Zfr9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/agentdetails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rcFdNqlL08J21st8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addagentfavorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BSUttnyBG5gFo6QG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/agentfavorites_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xg1rCSxGXygo7Mum',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/AgentReview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rRiUVKnNWpFtQIBv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0LqMBwdn0fZLenKW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notificationdelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2e5rS6pf26VtYDWR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/car_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2I8n5UJ0hbA4pITU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/specificationAndFeature' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YKLUM3RgLglKjvC1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addreview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BhXVJLeHW4TQm7mm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/likedislike' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4NDenJr5LN1Dxxy4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/modelslist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KCdXrrOFekA62OUG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/varientlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vYqJTv4vlXw3FlYd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/carcompare' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9eLnnAaKu6TvASXQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SSwB8UxIywEZqRlu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/allevents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::60b7Eb1Va0b1BPcP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addCarfavorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p15a5QjYcl10EkOu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/favorites_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CcDcuIdQXuSdSTsQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addbrandfavorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MLXGqNTeUdQ3d7tQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/brandfavorites_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j5lKENldCQoGQsvZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/allcar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DX3UCLSXBVMjUvAg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/alldeals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VGOpB0NkPm5vzsRS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dealsdetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FOX6Pi7hYstC5af4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dealtype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J6uVx2c6i9mRjBl4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dAPYv8YfE4byhcXt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/home_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ysMiWXb84rFNXL0E',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/save_click' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eFmwQW8IX7QpT4lr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/mycar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5TQNZQu7nCwt47HW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/edit_mycar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m3ZvU7di65cJksoZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my_carlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xJpO1QrYl7i8CLrJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my_cardetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TRtjLg15UgiaNPgY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addService' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fdo25E3OmLlCfMzK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/editService' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IqPnBMqshWSx0Gdg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addservicetask' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nKM57bNgSw9qNmp0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/editservicetask' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XnBVBgKRlj7KspOT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/servicetasklist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5WlcKBcPClbZhQCX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/servicetaskdetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bn4AGUnXviMe9LCt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/servicelist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y6gEQo3J6d30mkRV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/servicedetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ku2QWyJCZexJ7dYn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deleteService' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K4LJTfAf8moSQTKI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deleteServicetask' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nL0hmDi3LKqbasLg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addOdometer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ApW4ofedArbsrw0q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/editOdometer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ECSburWR0Au8hTaV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deleteOdometer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R6rF6X7mS2aOYXbA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/last_odometer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hujlQR5HuXeNwBMJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deletemycar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lBlq9d3YO4k9HNBw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deletemycarimage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rzu0ts8ByfCyfWdh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/car_detail_by_vin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d0UFjWiD6oPU9F0B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getcarimage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TWuwj3zXzeyTVpae',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/advice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jrb32YwHdEzfYZ4H',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/advice_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yLjBc4ZLZj1MDaRX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addadvicereview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eLVaIe81TkjeTZTE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/advicelikedislike' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vGZVdgM81Ue6nPeo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/sponser_banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X0beAjRkHBr3wdnZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/translation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hylG92syybDjganm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/translationdetails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rm6XnFBCPmQSwNK1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/knowledge_image_section' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I48JPwa0KPBi9MQF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/aichat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ekIUngzv7gyBsCeI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete_advice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MDv8MsOmLS4cmnYi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ask' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KnqVxmqDcRkoXbNk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WgF7zVP6Jl0JQg03',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/route-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AQzsljJiLDjYgaDh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/config-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BFqIb6nC237yGdDE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/view-clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Azc9kE1SYQ0s6P5v',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QHaK8j1e4t0IaHDG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nzIDkYjcXqISoEJt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nCDeIaiaBTyCOsE4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permissiondenied' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Ot0S7Ufhn6btuPK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cPuSNNtE5W5O6vkH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/update_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DVpeemVmJSWZmzJt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UnQnpO6AwWLYOIAI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AhlSGqalcyXFbHYh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addBanner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eUfnnniSDxl8VFAT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updateBannerOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uZHpfivCzyUh1mxT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insertBanner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8NKhGw1wbPJYzoyo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/popular_new_cars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n0ujo1ZVNAz1KXZX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/welcome_images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::00xHFOcMKtJL1drT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add_welcome_image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::repiXWTK9neJG0cP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add_popular_city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oAc0bJctuQTv1Akj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HuhLzSxIZbHiIK5L',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addCity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4KSdsXULTM5V0osZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insertCity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AzNgdYaWlleDYmVR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insertWelcomeImage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AhizteND4AagDre8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_banner_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NWpFb6vMHumHnHIN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_welcomeimage_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ivq5GkONCrIXqOuw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updateBannerOrders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cRih05gkarfM5Vcb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/image_setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::miDtws9UjOAH6qRn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/image_setting_insert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G2Pd80Ej6kazeHKO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/welcomeimagebackground' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FqqYm9VJv3RntV18',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/countryList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TyhLGTdspOeWzugm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stateList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5edwiw25adBBABrA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cityList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PjLbieNQ5lf49EA3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_city_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KbMGayClOcsZ0RDd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YsYrYjB2EyIwgkES',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MNTvt1RfmANrpcfc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::amBJm0S5f4BFWwE9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bmanhU0as17lcpZD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_category_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PFaFW5lDz0n5NgPC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kmyPFizq31M5fFE5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addBrand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iF9cXcKJuVZCVkkt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CJh4q5soc2fZIsjC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ckfoz76Z1erJJJZ9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deleteimage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bKW5l8J5QcbCFaYj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_brand_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DU3cmnyujauEzjTE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add_popular_brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oG4LAPwYeXahFVHY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/popularBrands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DRlnR6NULpA9DXZq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updateBrandOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4qwnAPTk5j8ThfGF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add_allbrand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E5NPPQlYfp1HizZT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/serviceType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K54I5N48qcOWTkOP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addserviceType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NSVQaFtG4kygBZ45',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_serviceType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5XIcKdJnr47pazso',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_serviceType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Epn3F75Zs96hiSYA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_servicetype_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zx2W2o2L3JT3gnIk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QAF2nohSXfleGKvo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addservice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Inv4C6eHG9gIeQ4u',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5mQ67wiqpJ1qZmXC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1usSncEqOfsrKHuI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_service_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IGdSPkTAJnYxyS2y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agentBanners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xJ54Z2DyGkyojtjy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addAgentBanner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::19l4f7nhaHYkUpiM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updateAgentBannerOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::em60kMPjoLSY4b1s',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insertAgentBanner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lc8t812FEA4AWleF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VDtvGEunGHnGFfrj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addAgent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s6RwTxzRpgf10IJU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_agent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::obxOxza5Cf9ekoB3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_agent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AOGXdgBgk18UNXvV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_agent_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0GiUq0YjXzTRC335',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add_popular_agent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gkzYOiZg0GPMapar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/popularAgent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z9vyrs0q2pWWmNEk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updateAgentOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9T9zSGypTU2LV0EQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/branch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::auEEoZ5w9Ty66OTV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addBranch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EgByNeNb4FDxg9KM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getState' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bSP9S88hNCv7ymfj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getCity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S3Y75z8R4XDOBgep',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/insert_branch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cnvfwV5AyqmY1daa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_branch_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dnI7INWwoaK9hqE2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_branch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T9rajw9Bp9YtSlGI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_agentbanner_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qw1irfklldcyvxyu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/magazine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ceixrv2yZKSOKcc3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addMagazine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kZQStSZUZo4WE2ma',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_magazine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nBgu5NSAzb4FbTp9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_magazine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n8F5ebWE2lkKBcau',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_magazine_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PbVGUYJx1ty2i0qf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addhomemagazine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RGlzsUSXFGALUPug',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addbannermagazine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RfGFJVMgavgEA0wx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updatemagzineOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xJw52BMki1XDSrUh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/magazinedata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fTcpNtNoZ2KKOKtp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sbd9jU4mQRM1SgF7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_user_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mgjcpTKKOZlVMubL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OqnWzxipuwtB9ZhS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mycar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2bfyTD0RUSHYwqP9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mycardetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZcSfs7Ox0cQ5Weqq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/edituser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GTyErWNz8ZuRrZir',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TQxBQ28K9WmoNMWq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ML7UdBnE3o7zArq0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sendnotification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OzUINqvh4cQPXRNg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insertNotification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mcSlYTy4zB9HrOUO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4ugIH6Ag9obuzCQq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/getuser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MOxAiZMrqYnt62Yo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/carmodel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zHCRSTDxKWfxU17X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_carmodel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uSrzgXJq1IAJbVfL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/carlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::blkKuLKfaKoiRtxu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_car' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c8a70GtTEUSON519',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_car_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QOxSDHPTtmlL1j5S',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add_popular_car' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1tSC1XcjgFySXva6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cardetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9W6JxIVKgCWXq2hQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addcar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XIcwBg8Zmf6HxKpA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_car' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O98GU5XqYpw9aKGE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deleteimg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MYiFzeAEcUZ7LZER',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pricelist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KbBVM0J2BnY7OIGE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addprice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c1lH4fRfDZ6fIhFY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_carprice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NrRTXl14qtsd05Fb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_carprice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NvKdYK0zaOtHRWKQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/popularCar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G30OKdDR87QLYdgb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updateCarOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fbwsiQBrOWor9m5r',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insertcar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2LTyVwgHHLnM4BLi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insertbrochure' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HnXtCBmHuHy5aDag',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addModel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZwI2BfyCAlGw1sAP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dealList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ThRAU7z7i6vFQgdY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addDeal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VQYwycgYnqsZa0a1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getdealtype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tJwGjOghX3rENjZK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insertdealtype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hmJkpDhiM3CpLVl5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_deal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D9V5gUgCR3jI9nXr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_deal_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::68mGFEUOXlr7YOLm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add_popular_deal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mz5hmaOTUdXw4dHI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updateDealOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HTsrt7aP1WJYZ9vD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dealtype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MfbtpJyyNsko0MYI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adddealtype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jvmE2yxpYUYvYelO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_dealtype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sVWuoEeHjF6P0Akz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_dealtype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1pQqKbE2rqp3R78z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_dealtype_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7d5717x7FGtAS66e',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getmultipleState' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ouJi6ZgxdPdwo6w7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getmultipleCity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QTaZDT8x1PDogXwm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/filter_dealtypedata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wy0ZQ0n3orfKbLD1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getmultiplepage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d2YyF84mPHQvgoPB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stafflist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nkEIqTRTHStWHewZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addStaff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UKxIeMv818tJ4YAX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insert_staff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HtOO6al2EZ6WUQPO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_staff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ALsqVdU3z5tp5kpt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_staff_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gu6aNeT1iBm0ZScv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fTnzYVp7UwrF3IEZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w7ZnI3jX1bnh2Dz5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changestaffpassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hotsZ5Qzk5JgjS86',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sponserBanners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dR0YVEVUmQ7D8xIQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addSponserBanner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Np6q05fTeaM350HR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insertSponserBanner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SVLH6MRtOY1iUmYt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/updatesponserBannerOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hWGGYsuvLh2bRNaC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change_sponserbanner_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kM0pqAr1if0mEzUv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xlg73DFLRmSwMFtc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sendadvice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aVXPt2r1mhsh9NZH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/getuserlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zYyWKNjJpGHKOJva',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/insertadvice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GKyYYYelwSgBTKIi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_advice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bFV3dDTOk6K6xjeT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advicedetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bnU5TBDs869Kn1KS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/translation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AuV7ZhLTMMxHd6Fb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addtranslation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sVENLeiJpGAVW2wd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/inserttranslation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rJtoBdURcUoM9vDJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_translation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hastKjTCo6Ev3Tpw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/knowledgeimagesection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q8r9r6DfSZFEyzNL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addknowledgeimagesection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AiSokXCCumdhfY01',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addknowledgeimagesectionupdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AJBpZMy5F1bxpNyr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/admin/(?|profile/([^/]++)(*:133)|update_(?|status/([^/]++)/([^/]++)(*:175)|Agentstatus/([^/]++)/([^/]++)(*:212))|delete(?|/([^/]++)/([^/]++)(*:248)|Agent/([^/]++)/([^/]++)(*:279)|Sponser/([^/]++)/([^/]++)(*:312))))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gbRIHDpL6zZn4e92',
          ),
          1 => 
          array (
            0 => 'admin_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V4t0rEhTOzAzCDw8',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6jii0RoC02OCFcjd',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M4Y2qdkQnnZQx7gq',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SMVgSaVgbwrcO7ZC',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tnNQfWuNfT6rOERx',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'middleware' => 'web',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6r4ngAjPCZsKsPsX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/registerUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@registerUser',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@registerUser',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6r4ngAjPCZsKsPsX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zTelIkw4WhMABFK9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@login',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::zTelIkw4WhMABFK9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GdBLe9DLynVGeB5Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/welcomeimage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@welcomeimage',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@welcomeimage',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GdBLe9DLynVGeB5Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CwhI2swDwZ0m7eXp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/yearsList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@yearsList',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@yearsList',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CwhI2swDwZ0m7eXp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vSiIykAAzgUD131H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/device_verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@device_verification',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@device_verification',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vSiIykAAzgUD131H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4jZGd3ZA7ZISqhjG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/Category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@Category',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@Category',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4jZGd3ZA7ZISqhjG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SKLf6M0ARifXbGG5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get_cityid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@get_cityid',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@get_cityid',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SKLf6M0ARifXbGG5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M6xq6F3mSYQLQYwT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/getUserProfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@getUserProfile',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@getUserProfile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::M6xq6F3mSYQLQYwT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kp0OUKgu7V9ATxBr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/UpdateProfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@UpdateProfile',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@UpdateProfile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Kp0OUKgu7V9ATxBr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SBsV1K6waNzn1dYx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@dashboard',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@dashboard',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SBsV1K6waNzn1dYx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k4nYWLJ1rLBmpCGv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/viewed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@viewed',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@viewed',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::k4nYWLJ1rLBmpCGv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e4VS9EUTJojRZXal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update_userlocation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@update_userlocation',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@update_userlocation',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::e4VS9EUTJojRZXal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oqAIVqyQTDBEtQTJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update_userlanguage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@update_userlanguage',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@update_userlanguage',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::oqAIVqyQTDBEtQTJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LjqkocVY8shoh0lZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/car_fillter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@car_fillter',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@car_fillter',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LjqkocVY8shoh0lZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9cHypu7WgI0AJbQe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/allBrand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\BrandController@allBrand',
        'controller' => 'App\\Http\\Controllers\\API\\BrandController@allBrand',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9cHypu7WgI0AJbQe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yX3pMPaLWj9m3CS7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/allaggent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AgentController@allaggent',
        'controller' => 'App\\Http\\Controllers\\API\\AgentController@allaggent',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yX3pMPaLWj9m3CS7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AC13GhM1pBmrWzOb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/allmagazine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MagazineController@allmagazine',
        'controller' => 'App\\Http\\Controllers\\API\\MagazineController@allmagazine',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AC13GhM1pBmrWzOb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::izwldq1xb1vKsazt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/magazinedata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MagazineController@magazinedata',
        'controller' => 'App\\Http\\Controllers\\API\\MagazineController@magazinedata',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::izwldq1xb1vKsazt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rumZQHy5XhNjd89K' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/magazinetabdata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MagazineController@magazinetabdata',
        'controller' => 'App\\Http\\Controllers\\API\\MagazineController@magazinetabdata',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rumZQHy5XhNjd89K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f7DxryTiUeL1dzy8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addmagazineview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MagazineController@addmagazineview',
        'controller' => 'App\\Http\\Controllers\\API\\MagazineController@addmagazineview',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::f7DxryTiUeL1dzy8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yEsvoDwUlK6Fro2e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addnewsfavorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MagazineController@addnewsfavorites',
        'controller' => 'App\\Http\\Controllers\\API\\MagazineController@addnewsfavorites',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yEsvoDwUlK6Fro2e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TOvi2K8fAE2FeMXh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/newsfavorites_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MagazineController@newsfavorites_list',
        'controller' => 'App\\Http\\Controllers\\API\\MagazineController@newsfavorites_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TOvi2K8fAE2FeMXh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9y3CLwQGlmdyYsnl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/branddetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\BrandController@branddetails',
        'controller' => 'App\\Http\\Controllers\\API\\BrandController@branddetails',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9y3CLwQGlmdyYsnl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ul3bipVfkTh5Zfr9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addBrandreview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\BrandController@addBrandreview',
        'controller' => 'App\\Http\\Controllers\\API\\BrandController@addBrandreview',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Ul3bipVfkTh5Zfr9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rcFdNqlL08J21st8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/agentdetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AgentController@agentdetails',
        'controller' => 'App\\Http\\Controllers\\API\\AgentController@agentdetails',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rcFdNqlL08J21st8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BSUttnyBG5gFo6QG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addagentfavorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AgentController@addagentfavorites',
        'controller' => 'App\\Http\\Controllers\\API\\AgentController@addagentfavorites',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BSUttnyBG5gFo6QG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xg1rCSxGXygo7Mum' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/agentfavorites_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AgentController@agentfavorites_list',
        'controller' => 'App\\Http\\Controllers\\API\\AgentController@agentfavorites_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Xg1rCSxGXygo7Mum',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rRiUVKnNWpFtQIBv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/AgentReview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AgentController@AgentReview',
        'controller' => 'App\\Http\\Controllers\\API\\AgentController@AgentReview',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rRiUVKnNWpFtQIBv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0LqMBwdn0fZLenKW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\NotificationController@notification',
        'controller' => 'App\\Http\\Controllers\\API\\NotificationController@notification',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0LqMBwdn0fZLenKW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2e5rS6pf26VtYDWR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/notificationdelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\NotificationController@notificationdelete',
        'controller' => 'App\\Http\\Controllers\\API\\NotificationController@notificationdelete',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2e5rS6pf26VtYDWR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2I8n5UJ0hbA4pITU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/car_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CarController@car_details',
        'controller' => 'App\\Http\\Controllers\\API\\CarController@car_details',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2I8n5UJ0hbA4pITU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YKLUM3RgLglKjvC1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/specificationAndFeature',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CarController@specificationAndFeature',
        'controller' => 'App\\Http\\Controllers\\API\\CarController@specificationAndFeature',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YKLUM3RgLglKjvC1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BhXVJLeHW4TQm7mm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addreview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CarController@addreview',
        'controller' => 'App\\Http\\Controllers\\API\\CarController@addreview',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BhXVJLeHW4TQm7mm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4NDenJr5LN1Dxxy4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/likedislike',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CarController@likedislike',
        'controller' => 'App\\Http\\Controllers\\API\\CarController@likedislike',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4NDenJr5LN1Dxxy4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KCdXrrOFekA62OUG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/modelslist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CarController@modelslist',
        'controller' => 'App\\Http\\Controllers\\API\\CarController@modelslist',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KCdXrrOFekA62OUG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vYqJTv4vlXw3FlYd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/varientlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CarController@varientlist',
        'controller' => 'App\\Http\\Controllers\\API\\CarController@varientlist',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vYqJTv4vlXw3FlYd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9eLnnAaKu6TvASXQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/carcompare',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CarController@carcompare',
        'controller' => 'App\\Http\\Controllers\\API\\CarController@carcompare',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9eLnnAaKu6TvASXQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SSwB8UxIywEZqRlu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@city',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@city',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SSwB8UxIywEZqRlu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::60b7Eb1Va0b1BPcP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/allevents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MagazineController@allevents',
        'controller' => 'App\\Http\\Controllers\\API\\MagazineController@allevents',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::60b7Eb1Va0b1BPcP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p15a5QjYcl10EkOu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addCarfavorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@addCarfavorites',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@addCarfavorites',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::p15a5QjYcl10EkOu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CcDcuIdQXuSdSTsQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/favorites_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@favorites_list',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@favorites_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CcDcuIdQXuSdSTsQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MLXGqNTeUdQ3d7tQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addbrandfavorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@addbrandfavorites',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@addbrandfavorites',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MLXGqNTeUdQ3d7tQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j5lKENldCQoGQsvZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/brandfavorites_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@brandfavorites_list',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@brandfavorites_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::j5lKENldCQoGQsvZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DX3UCLSXBVMjUvAg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/allcar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CarController@allcar',
        'controller' => 'App\\Http\\Controllers\\API\\CarController@allcar',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DX3UCLSXBVMjUvAg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VGOpB0NkPm5vzsRS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/alldeals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@alldeals',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@alldeals',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VGOpB0NkPm5vzsRS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FOX6Pi7hYstC5af4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dealsdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@dealsdetail',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@dealsdetail',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FOX6Pi7hYstC5af4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J6uVx2c6i9mRjBl4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dealtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@dealtype',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@dealtype',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::J6uVx2c6i9mRjBl4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dAPYv8YfE4byhcXt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@logout',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@logout',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dAPYv8YfE4byhcXt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ysMiWXb84rFNXL0E' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/home_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@home_search',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@home_search',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ysMiWXb84rFNXL0E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eFmwQW8IX7QpT4lr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/save_click',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ApiController@save_click',
        'controller' => 'App\\Http\\Controllers\\API\\ApiController@save_click',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eFmwQW8IX7QpT4lr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5TQNZQu7nCwt47HW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/mycar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@mycar',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@mycar',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5TQNZQu7nCwt47HW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m3ZvU7di65cJksoZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/edit_mycar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@edit_mycar',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@edit_mycar',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::m3ZvU7di65cJksoZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xJpO1QrYl7i8CLrJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/my_carlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@my_carlist',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@my_carlist',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xJpO1QrYl7i8CLrJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TRtjLg15UgiaNPgY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/my_cardetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@my_cardetail',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@my_cardetail',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TRtjLg15UgiaNPgY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fdo25E3OmLlCfMzK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addService',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@addService',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@addService',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Fdo25E3OmLlCfMzK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IqPnBMqshWSx0Gdg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/editService',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@editService',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@editService',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IqPnBMqshWSx0Gdg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nKM57bNgSw9qNmp0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addservicetask',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@addservicetask',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@addservicetask',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nKM57bNgSw9qNmp0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XnBVBgKRlj7KspOT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/editservicetask',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@editservicetask',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@editservicetask',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XnBVBgKRlj7KspOT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5WlcKBcPClbZhQCX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/servicetasklist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@servicetasklist',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@servicetasklist',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5WlcKBcPClbZhQCX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bn4AGUnXviMe9LCt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/servicetaskdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@servicetaskdetail',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@servicetaskdetail',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Bn4AGUnXviMe9LCt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y6gEQo3J6d30mkRV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/servicelist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@servicelist',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@servicelist',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Y6gEQo3J6d30mkRV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ku2QWyJCZexJ7dYn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/servicedetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@servicedetail',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@servicedetail',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Ku2QWyJCZexJ7dYn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K4LJTfAf8moSQTKI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/deleteService',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@deleteService',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@deleteService',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::K4LJTfAf8moSQTKI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nL0hmDi3LKqbasLg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/deleteServicetask',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@deleteServicetask',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@deleteServicetask',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nL0hmDi3LKqbasLg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ApW4ofedArbsrw0q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addOdometer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@addOdometer',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@addOdometer',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ApW4ofedArbsrw0q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ECSburWR0Au8hTaV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/editOdometer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@editOdometer',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@editOdometer',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ECSburWR0Au8hTaV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R6rF6X7mS2aOYXbA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/deleteOdometer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@deleteOdometer',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@deleteOdometer',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::R6rF6X7mS2aOYXbA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hujlQR5HuXeNwBMJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/last_odometer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@last_odometer',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@last_odometer',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hujlQR5HuXeNwBMJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lBlq9d3YO4k9HNBw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/deletemycar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@deletemycar',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@deletemycar',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lBlq9d3YO4k9HNBw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rzu0ts8ByfCyfWdh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/deletemycarimage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@deletemycarimage',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@deletemycarimage',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rzu0ts8ByfCyfWdh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d0UFjWiD6oPU9F0B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/car_detail_by_vin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@car_detail_by_vin',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@car_detail_by_vin',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::d0UFjWiD6oPU9F0B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TWuwj3zXzeyTVpae' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/getcarimage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@getcarimage',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@getcarimage',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TWuwj3zXzeyTVpae',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jrb32YwHdEzfYZ4H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/advice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@advice',
        'controller' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@advice',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jrb32YwHdEzfYZ4H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yLjBc4ZLZj1MDaRX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/advice_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@advice_details',
        'controller' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@advice_details',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yLjBc4ZLZj1MDaRX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eLVaIe81TkjeTZTE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addadvicereview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@addadvicereview',
        'controller' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@addadvicereview',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eLVaIe81TkjeTZTE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vGZVdgM81Ue6nPeo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/advicelikedislike',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@advicelikedislike',
        'controller' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@advicelikedislike',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vGZVdgM81Ue6nPeo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X0beAjRkHBr3wdnZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sponser_banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@sponser_banner',
        'controller' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@sponser_banner',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::X0beAjRkHBr3wdnZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hylG92syybDjganm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/translation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@translation',
        'controller' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@translation',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hylG92syybDjganm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rm6XnFBCPmQSwNK1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/translationdetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@translationdetails',
        'controller' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@translationdetails',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Rm6XnFBCPmQSwNK1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I48JPwa0KPBi9MQF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/knowledge_image_section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@knowledge_image_section',
        'controller' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@knowledge_image_section',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::I48JPwa0KPBi9MQF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ekIUngzv7gyBsCeI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/aichat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@aichat',
        'controller' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@aichat',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ekIUngzv7gyBsCeI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MDv8MsOmLS4cmnYi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delete_advice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@delete_advice',
        'controller' => 'App\\Http\\Controllers\\API\\KnowledgeCenterController@delete_advice',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MDv8MsOmLS4cmnYi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KnqVxmqDcRkoXbNk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/ask',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\OpenAIController@handleUserInput',
        'controller' => 'App\\Http\\Controllers\\API\\OpenAIController@handleUserInput',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KnqVxmqDcRkoXbNk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WgF7zVP6Jl0JQg03' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:49:"function() {
    \\Artisan::call(\'cache:clear\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000035e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WgF7zVP6Jl0JQg03',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AQzsljJiLDjYgaDh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'route-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:89:"function() {
\\Artisan::call(\'route:cache\');
    return \'Routes cache has been cleared\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003a40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AQzsljJiLDjYgaDh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BFqIb6nC237yGdDE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'config-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:88:"function() {
  \\Artisan::call(\'config:cache\');
return \'Config cache has been cleared\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003b00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BFqIb6nC237yGdDE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Azc9kE1SYQ0s6P5v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:86:"function() {
    \\Artisan::call(\'view:clear\');
return \'View cache has been cleared\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003b20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Azc9kE1SYQ0s6P5v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QHaK8j1e4t0IaHDG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@login',
        'controller' => 'App\\Http\\Controllers\\AdminController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QHaK8j1e4t0IaHDG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nzIDkYjcXqISoEJt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@login',
        'controller' => 'App\\Http\\Controllers\\AdminController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nzIDkYjcXqISoEJt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nCDeIaiaBTyCOsE4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@admin_login',
        'controller' => 'App\\Http\\Controllers\\AdminController@admin_login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nCDeIaiaBTyCOsE4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Ot0S7Ufhn6btuPK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permissiondenied',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@permissiondenied',
        'controller' => 'App\\Http\\Controllers\\AdminController@permissiondenied',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8Ot0S7Ufhn6btuPK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cPuSNNtE5W5O6vkH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@dashboard',
        'controller' => 'App\\Http\\Controllers\\AdminController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cPuSNNtE5W5O6vkH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gbRIHDpL6zZn4e92' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile/{admin_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@profile',
        'controller' => 'App\\Http\\Controllers\\AdminController@profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gbRIHDpL6zZn4e92',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DVpeemVmJSWZmzJt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@update_profile',
        'controller' => 'App\\Http\\Controllers\\AdminController@update_profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DVpeemVmJSWZmzJt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UnQnpO6AwWLYOIAI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@logout',
        'controller' => 'App\\Http\\Controllers\\AdminController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UnQnpO6AwWLYOIAI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AhlSGqalcyXFbHYh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@banners',
        'controller' => 'App\\Http\\Controllers\\AdminController@banners',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AhlSGqalcyXFbHYh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eUfnnniSDxl8VFAT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addBanner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@addBanner',
        'controller' => 'App\\Http\\Controllers\\AdminController@addBanner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eUfnnniSDxl8VFAT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uZHpfivCzyUh1mxT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateBannerOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@updateBannerOrder',
        'controller' => 'App\\Http\\Controllers\\AdminController@updateBannerOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uZHpfivCzyUh1mxT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8NKhGw1wbPJYzoyo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insertBanner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@insertBanner',
        'controller' => 'App\\Http\\Controllers\\AdminController@insertBanner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8NKhGw1wbPJYzoyo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V4t0rEhTOzAzCDw8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update_status/{id}/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@update_status',
        'controller' => 'App\\Http\\Controllers\\AdminController@update_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::V4t0rEhTOzAzCDw8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M4Y2qdkQnnZQx7gq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/delete/{id}/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@delete',
        'controller' => 'App\\Http\\Controllers\\AdminController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::M4Y2qdkQnnZQx7gq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n0ujo1ZVNAz1KXZX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/popular_new_cars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@addBrand',
        'controller' => 'App\\Http\\Controllers\\AdminController@addBrand',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::n0ujo1ZVNAz1KXZX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::00xHFOcMKtJL1drT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/welcome_images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@welcome_images',
        'controller' => 'App\\Http\\Controllers\\AdminController@welcome_images',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::00xHFOcMKtJL1drT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::repiXWTK9neJG0cP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add_welcome_image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@add_welcome_image',
        'controller' => 'App\\Http\\Controllers\\AdminController@add_welcome_image',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::repiXWTK9neJG0cP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oAc0bJctuQTv1Akj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/add_popular_city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@add_popular_city',
        'controller' => 'App\\Http\\Controllers\\AdminController@add_popular_city',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oAc0bJctuQTv1Akj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HuhLzSxIZbHiIK5L' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@delete_city',
        'controller' => 'App\\Http\\Controllers\\AdminController@delete_city',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HuhLzSxIZbHiIK5L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4KSdsXULTM5V0osZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addCity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@addCity',
        'controller' => 'App\\Http\\Controllers\\AdminController@addCity',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4KSdsXULTM5V0osZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AzNgdYaWlleDYmVR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insertCity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@insertCity',
        'controller' => 'App\\Http\\Controllers\\AdminController@insertCity',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AzNgdYaWlleDYmVR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AhizteND4AagDre8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insertWelcomeImage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@insertWelcomeImage',
        'controller' => 'App\\Http\\Controllers\\AdminController@insertWelcomeImage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AhizteND4AagDre8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NWpFb6vMHumHnHIN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_banner_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@change_banner_status',
        'controller' => 'App\\Http\\Controllers\\AdminController@change_banner_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NWpFb6vMHumHnHIN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ivq5GkONCrIXqOuw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_welcomeimage_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@change_welcomeimage_status',
        'controller' => 'App\\Http\\Controllers\\AdminController@change_welcomeimage_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ivq5GkONCrIXqOuw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cRih05gkarfM5Vcb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateBannerOrders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@updateBannerOrders',
        'controller' => 'App\\Http\\Controllers\\AdminController@updateBannerOrders',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cRih05gkarfM5Vcb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::miDtws9UjOAH6qRn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/image_setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@image_setting',
        'controller' => 'App\\Http\\Controllers\\AdminController@image_setting',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::miDtws9UjOAH6qRn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G2Pd80Ej6kazeHKO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/image_setting_insert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@image_setting_insert',
        'controller' => 'App\\Http\\Controllers\\AdminController@image_setting_insert',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::G2Pd80Ej6kazeHKO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FqqYm9VJv3RntV18' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/welcomeimagebackground',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@welcomeimagebackground',
        'controller' => 'App\\Http\\Controllers\\AdminController@welcomeimagebackground',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FqqYm9VJv3RntV18',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TyhLGTdspOeWzugm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/countryList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@countryList',
        'controller' => 'App\\Http\\Controllers\\AdminController@countryList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TyhLGTdspOeWzugm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5edwiw25adBBABrA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stateList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@stateList',
        'controller' => 'App\\Http\\Controllers\\AdminController@stateList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5edwiw25adBBABrA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PjLbieNQ5lf49EA3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cityList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@cityList',
        'controller' => 'App\\Http\\Controllers\\AdminController@cityList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PjLbieNQ5lf49EA3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KbMGayClOcsZ0RDd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_city_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@change_city_status',
        'controller' => 'App\\Http\\Controllers\\AdminController@change_city_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KbMGayClOcsZ0RDd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YsYrYjB2EyIwgkES' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@category',
        'controller' => 'App\\Http\\Controllers\\CategoryController@category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YsYrYjB2EyIwgkES',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MNTvt1RfmANrpcfc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@addCategory',
        'controller' => 'App\\Http\\Controllers\\CategoryController@addCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MNTvt1RfmANrpcfc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::amBJm0S5f4BFWwE9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@insert_category',
        'controller' => 'App\\Http\\Controllers\\CategoryController@insert_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::amBJm0S5f4BFWwE9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bmanhU0as17lcpZD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@delete_category',
        'controller' => 'App\\Http\\Controllers\\CategoryController@delete_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bmanhU0as17lcpZD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PFaFW5lDz0n5NgPC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_category_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@change_category_status',
        'controller' => 'App\\Http\\Controllers\\CategoryController@change_category_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PFaFW5lDz0n5NgPC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kmyPFizq31M5fFE5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@brands',
        'controller' => 'App\\Http\\Controllers\\BrandController@brands',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kmyPFizq31M5fFE5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iF9cXcKJuVZCVkkt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addBrand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@addBrand',
        'controller' => 'App\\Http\\Controllers\\BrandController@addBrand',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iF9cXcKJuVZCVkkt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CJh4q5soc2fZIsjC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@insert_brand',
        'controller' => 'App\\Http\\Controllers\\BrandController@insert_brand',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CJh4q5soc2fZIsjC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ckfoz76Z1erJJJZ9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@delete_brand',
        'controller' => 'App\\Http\\Controllers\\BrandController@delete_brand',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ckfoz76Z1erJJJZ9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bKW5l8J5QcbCFaYj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deleteimage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@deleteimage',
        'controller' => 'App\\Http\\Controllers\\BrandController@deleteimage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bKW5l8J5QcbCFaYj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DU3cmnyujauEzjTE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_brand_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@change_brand_status',
        'controller' => 'App\\Http\\Controllers\\BrandController@change_brand_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DU3cmnyujauEzjTE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oG4LAPwYeXahFVHY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/add_popular_brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@add_popular_brand',
        'controller' => 'App\\Http\\Controllers\\BrandController@add_popular_brand',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oG4LAPwYeXahFVHY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DRlnR6NULpA9DXZq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/popularBrands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@popularBrands',
        'controller' => 'App\\Http\\Controllers\\BrandController@popularBrands',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DRlnR6NULpA9DXZq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4qwnAPTk5j8ThfGF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateBrandOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@updateBrandOrder',
        'controller' => 'App\\Http\\Controllers\\BrandController@updateBrandOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4qwnAPTk5j8ThfGF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E5NPPQlYfp1HizZT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add_allbrand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@add_allbrand',
        'controller' => 'App\\Http\\Controllers\\BrandController@add_allbrand',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::E5NPPQlYfp1HizZT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K54I5N48qcOWTkOP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/serviceType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceTypeController@serviceType',
        'controller' => 'App\\Http\\Controllers\\ServiceTypeController@serviceType',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K54I5N48qcOWTkOP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NSVQaFtG4kygBZ45' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addserviceType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceTypeController@addserviceType',
        'controller' => 'App\\Http\\Controllers\\ServiceTypeController@addserviceType',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NSVQaFtG4kygBZ45',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5XIcKdJnr47pazso' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_serviceType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceTypeController@insert_serviceType',
        'controller' => 'App\\Http\\Controllers\\ServiceTypeController@insert_serviceType',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5XIcKdJnr47pazso',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Epn3F75Zs96hiSYA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_serviceType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceTypeController@delete_serviceType',
        'controller' => 'App\\Http\\Controllers\\ServiceTypeController@delete_serviceType',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Epn3F75Zs96hiSYA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zx2W2o2L3JT3gnIk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_servicetype_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceTypeController@change_servicetype_status',
        'controller' => 'App\\Http\\Controllers\\ServiceTypeController@change_servicetype_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Zx2W2o2L3JT3gnIk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QAF2nohSXfleGKvo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceTypeController@service',
        'controller' => 'App\\Http\\Controllers\\ServiceTypeController@service',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QAF2nohSXfleGKvo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Inv4C6eHG9gIeQ4u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addservice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceTypeController@addservice',
        'controller' => 'App\\Http\\Controllers\\ServiceTypeController@addservice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Inv4C6eHG9gIeQ4u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5mQ67wiqpJ1qZmXC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceTypeController@insert_service',
        'controller' => 'App\\Http\\Controllers\\ServiceTypeController@insert_service',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5mQ67wiqpJ1qZmXC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1usSncEqOfsrKHuI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceTypeController@delete_service',
        'controller' => 'App\\Http\\Controllers\\ServiceTypeController@delete_service',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1usSncEqOfsrKHuI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IGdSPkTAJnYxyS2y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_service_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceTypeController@change_service_status',
        'controller' => 'App\\Http\\Controllers\\ServiceTypeController@change_service_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IGdSPkTAJnYxyS2y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xJ54Z2DyGkyojtjy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agentBanners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@agentBanners',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@agentBanners',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xJ54Z2DyGkyojtjy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::19l4f7nhaHYkUpiM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addAgentBanner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@addAgentBanner',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@addAgentBanner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::19l4f7nhaHYkUpiM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::em60kMPjoLSY4b1s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateAgentBannerOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@updateAgentBannerOrder',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@updateAgentBannerOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::em60kMPjoLSY4b1s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lc8t812FEA4AWleF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insertAgentBanner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@insertAgentBanner',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@insertAgentBanner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lc8t812FEA4AWleF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6jii0RoC02OCFcjd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update_Agentstatus/{id}/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@update_Agentstatus',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@update_Agentstatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6jii0RoC02OCFcjd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SMVgSaVgbwrcO7ZC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deleteAgent/{id}/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@deleteAgent',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@deleteAgent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SMVgSaVgbwrcO7ZC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VDtvGEunGHnGFfrj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@agent',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@agent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VDtvGEunGHnGFfrj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s6RwTxzRpgf10IJU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addAgent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@addAgent',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@addAgent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::s6RwTxzRpgf10IJU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::obxOxza5Cf9ekoB3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_agent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@insert_agent',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@insert_agent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::obxOxza5Cf9ekoB3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AOGXdgBgk18UNXvV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_agent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@delete_agent',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@delete_agent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AOGXdgBgk18UNXvV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0GiUq0YjXzTRC335' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_agent_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@change_agent_status',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@change_agent_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0GiUq0YjXzTRC335',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gkzYOiZg0GPMapar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/add_popular_agent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@add_popular_agent',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@add_popular_agent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gkzYOiZg0GPMapar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z9vyrs0q2pWWmNEk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/popularAgent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@popularAgent',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@popularAgent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Z9vyrs0q2pWWmNEk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9T9zSGypTU2LV0EQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateAgentOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@updateAgentOrder',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@updateAgentOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9T9zSGypTU2LV0EQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::auEEoZ5w9Ty66OTV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/branch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@branch',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@branch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::auEEoZ5w9Ty66OTV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EgByNeNb4FDxg9KM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addBranch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@addBranch',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@addBranch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EgByNeNb4FDxg9KM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bSP9S88hNCv7ymfj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getState',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@getState',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@getState',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bSP9S88hNCv7ymfj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S3Y75z8R4XDOBgep' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getCity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@getCity',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@getCity',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::S3Y75z8R4XDOBgep',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cnvfwV5AyqmY1daa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'insert_branch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@insert_branch',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@insert_branch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cnvfwV5AyqmY1daa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dnI7INWwoaK9hqE2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_branch_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@change_branch_status',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@change_branch_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dnI7INWwoaK9hqE2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T9rajw9Bp9YtSlGI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_branch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@delete_branch',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@delete_branch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::T9rajw9Bp9YtSlGI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qw1irfklldcyvxyu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_agentbanner_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AgentResellerController@change_agentbanner_status',
        'controller' => 'App\\Http\\Controllers\\AgentResellerController@change_agentbanner_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Qw1irfklldcyvxyu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ceixrv2yZKSOKcc3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/magazine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\MagazineController@magazine',
        'controller' => 'App\\Http\\Controllers\\MagazineController@magazine',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ceixrv2yZKSOKcc3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kZQStSZUZo4WE2ma' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addMagazine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\MagazineController@addMagazine',
        'controller' => 'App\\Http\\Controllers\\MagazineController@addMagazine',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kZQStSZUZo4WE2ma',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nBgu5NSAzb4FbTp9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_magazine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\MagazineController@insert_magazine',
        'controller' => 'App\\Http\\Controllers\\MagazineController@insert_magazine',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nBgu5NSAzb4FbTp9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n8F5ebWE2lkKBcau' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_magazine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\MagazineController@delete_magazine',
        'controller' => 'App\\Http\\Controllers\\MagazineController@delete_magazine',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::n8F5ebWE2lkKBcau',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PbVGUYJx1ty2i0qf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_magazine_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\MagazineController@change_magazine_status',
        'controller' => 'App\\Http\\Controllers\\MagazineController@change_magazine_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PbVGUYJx1ty2i0qf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RGlzsUSXFGALUPug' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/addhomemagazine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\MagazineController@addhomemagazine',
        'controller' => 'App\\Http\\Controllers\\MagazineController@addhomemagazine',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RGlzsUSXFGALUPug',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RfGFJVMgavgEA0wx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/addbannermagazine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\MagazineController@addbannermagazine',
        'controller' => 'App\\Http\\Controllers\\MagazineController@addbannermagazine',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RfGFJVMgavgEA0wx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xJw52BMki1XDSrUh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updatemagzineOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\MagazineController@updatemagzineOrder',
        'controller' => 'App\\Http\\Controllers\\MagazineController@updatemagzineOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xJw52BMki1XDSrUh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fTcpNtNoZ2KKOKtp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/magazinedata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\MagazineController@magazinedata',
        'controller' => 'App\\Http\\Controllers\\MagazineController@magazinedata',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fTcpNtNoZ2KKOKtp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sbd9jU4mQRM1SgF7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/userList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@userList',
        'controller' => 'App\\Http\\Controllers\\UserController@userList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sbd9jU4mQRM1SgF7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mgjcpTKKOZlVMubL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_user_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@change_user_status',
        'controller' => 'App\\Http\\Controllers\\UserController@change_user_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mgjcpTKKOZlVMubL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OqnWzxipuwtB9ZhS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/userDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@userDetail',
        'controller' => 'App\\Http\\Controllers\\UserController@userDetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OqnWzxipuwtB9ZhS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2bfyTD0RUSHYwqP9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mycar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@mycar',
        'controller' => 'App\\Http\\Controllers\\UserController@mycar',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2bfyTD0RUSHYwqP9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZcSfs7Ox0cQ5Weqq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mycardetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@mycarservice',
        'controller' => 'App\\Http\\Controllers\\UserController@mycarservice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZcSfs7Ox0cQ5Weqq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GTyErWNz8ZuRrZir' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edituser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@edituser',
        'controller' => 'App\\Http\\Controllers\\UserController@edituser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GTyErWNz8ZuRrZir',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TQxBQ28K9WmoNMWq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@insert_user',
        'controller' => 'App\\Http\\Controllers\\UserController@insert_user',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TQxBQ28K9WmoNMWq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ML7UdBnE3o7zArq0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@notification',
        'controller' => 'App\\Http\\Controllers\\NotificationController@notification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ML7UdBnE3o7zArq0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OzUINqvh4cQPXRNg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sendnotification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@sendnotification',
        'controller' => 'App\\Http\\Controllers\\NotificationController@sendnotification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OzUINqvh4cQPXRNg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mcSlYTy4zB9HrOUO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insertNotification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@insertNotification',
        'controller' => 'App\\Http\\Controllers\\NotificationController@insertNotification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mcSlYTy4zB9HrOUO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4ugIH6Ag9obuzCQq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@delete_notification',
        'controller' => 'App\\Http\\Controllers\\NotificationController@delete_notification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4ugIH6Ag9obuzCQq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MOxAiZMrqYnt62Yo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/getuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@getuser',
        'controller' => 'App\\Http\\Controllers\\NotificationController@getuser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MOxAiZMrqYnt62Yo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zHCRSTDxKWfxU17X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/carmodel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@carmodel',
        'controller' => 'App\\Http\\Controllers\\CarController@carmodel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zHCRSTDxKWfxU17X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uSrzgXJq1IAJbVfL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_carmodel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@insert_carmodel',
        'controller' => 'App\\Http\\Controllers\\CarController@insert_carmodel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uSrzgXJq1IAJbVfL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::blkKuLKfaKoiRtxu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/carlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@carlist',
        'controller' => 'App\\Http\\Controllers\\CarController@carlist',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::blkKuLKfaKoiRtxu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c8a70GtTEUSON519' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_car',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@delete_car',
        'controller' => 'App\\Http\\Controllers\\CarController@delete_car',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::c8a70GtTEUSON519',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QOxSDHPTtmlL1j5S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_car_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@change_car_status',
        'controller' => 'App\\Http\\Controllers\\CarController@change_car_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QOxSDHPTtmlL1j5S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1tSC1XcjgFySXva6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/add_popular_car',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@add_popular_car',
        'controller' => 'App\\Http\\Controllers\\CarController@add_popular_car',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1tSC1XcjgFySXva6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9W6JxIVKgCWXq2hQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cardetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@cardetail',
        'controller' => 'App\\Http\\Controllers\\CarController@cardetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9W6JxIVKgCWXq2hQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XIcwBg8Zmf6HxKpA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addcar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@addcar',
        'controller' => 'App\\Http\\Controllers\\CarController@addcar',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XIcwBg8Zmf6HxKpA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O98GU5XqYpw9aKGE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_car',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@insert_car',
        'controller' => 'App\\Http\\Controllers\\CarController@insert_car',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::O98GU5XqYpw9aKGE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MYiFzeAEcUZ7LZER' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deleteimg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@deleteimg',
        'controller' => 'App\\Http\\Controllers\\CarController@deleteimg',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MYiFzeAEcUZ7LZER',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KbBVM0J2BnY7OIGE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pricelist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@pricelist',
        'controller' => 'App\\Http\\Controllers\\CarController@pricelist',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KbBVM0J2BnY7OIGE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c1lH4fRfDZ6fIhFY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addprice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@addprice',
        'controller' => 'App\\Http\\Controllers\\CarController@addprice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::c1lH4fRfDZ6fIhFY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NrRTXl14qtsd05Fb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_carprice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@insert_carprice',
        'controller' => 'App\\Http\\Controllers\\CarController@insert_carprice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NrRTXl14qtsd05Fb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NvKdYK0zaOtHRWKQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_carprice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@delete_carprice',
        'controller' => 'App\\Http\\Controllers\\CarController@delete_carprice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NvKdYK0zaOtHRWKQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G30OKdDR87QLYdgb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/popularCar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@popularCar',
        'controller' => 'App\\Http\\Controllers\\CarController@popularCar',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::G30OKdDR87QLYdgb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fbwsiQBrOWor9m5r' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateCarOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@updateCarOrder',
        'controller' => 'App\\Http\\Controllers\\CarController@updateCarOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fbwsiQBrOWor9m5r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2LTyVwgHHLnM4BLi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insertcar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@insertcar',
        'controller' => 'App\\Http\\Controllers\\CarController@insertcar',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2LTyVwgHHLnM4BLi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HnXtCBmHuHy5aDag' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insertbrochure',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@insertbrochure',
        'controller' => 'App\\Http\\Controllers\\CarController@insertbrochure',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HnXtCBmHuHy5aDag',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZwI2BfyCAlGw1sAP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addModel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\CarController@addModel',
        'controller' => 'App\\Http\\Controllers\\CarController@addModel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZwI2BfyCAlGw1sAP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ThRAU7z7i6vFQgdY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dealList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@dealList',
        'controller' => 'App\\Http\\Controllers\\DealController@dealList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ThRAU7z7i6vFQgdY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VQYwycgYnqsZa0a1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addDeal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@addDeal',
        'controller' => 'App\\Http\\Controllers\\DealController@addDeal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VQYwycgYnqsZa0a1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tJwGjOghX3rENjZK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getdealtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@getdealtype',
        'controller' => 'App\\Http\\Controllers\\DealController@getdealtype',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tJwGjOghX3rENjZK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hmJkpDhiM3CpLVl5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insertdealtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@insertdealtype',
        'controller' => 'App\\Http\\Controllers\\DealController@insertdealtype',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hmJkpDhiM3CpLVl5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D9V5gUgCR3jI9nXr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_deal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@delete_deal',
        'controller' => 'App\\Http\\Controllers\\DealController@delete_deal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D9V5gUgCR3jI9nXr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::68mGFEUOXlr7YOLm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_deal_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@change_deal_status',
        'controller' => 'App\\Http\\Controllers\\DealController@change_deal_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::68mGFEUOXlr7YOLm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mz5hmaOTUdXw4dHI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/add_popular_deal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@add_popular_deal',
        'controller' => 'App\\Http\\Controllers\\DealController@add_popular_deal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Mz5hmaOTUdXw4dHI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HTsrt7aP1WJYZ9vD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateDealOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@updateDealOrder',
        'controller' => 'App\\Http\\Controllers\\DealController@updateDealOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HTsrt7aP1WJYZ9vD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MfbtpJyyNsko0MYI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dealtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@dealtype',
        'controller' => 'App\\Http\\Controllers\\DealController@dealtype',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MfbtpJyyNsko0MYI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jvmE2yxpYUYvYelO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adddealtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@adddealtype',
        'controller' => 'App\\Http\\Controllers\\DealController@adddealtype',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jvmE2yxpYUYvYelO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sVWuoEeHjF6P0Akz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_dealtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@insert_dealtype',
        'controller' => 'App\\Http\\Controllers\\DealController@insert_dealtype',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sVWuoEeHjF6P0Akz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1pQqKbE2rqp3R78z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_dealtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@delete_dealtype',
        'controller' => 'App\\Http\\Controllers\\DealController@delete_dealtype',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1pQqKbE2rqp3R78z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7d5717x7FGtAS66e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_dealtype_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@change_dealtype_status',
        'controller' => 'App\\Http\\Controllers\\DealController@change_dealtype_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7d5717x7FGtAS66e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ouJi6ZgxdPdwo6w7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getmultipleState',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@getmultipleState',
        'controller' => 'App\\Http\\Controllers\\DealController@getmultipleState',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ouJi6ZgxdPdwo6w7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QTaZDT8x1PDogXwm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getmultipleCity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@getmultipleCity',
        'controller' => 'App\\Http\\Controllers\\DealController@getmultipleCity',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QTaZDT8x1PDogXwm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wy0ZQ0n3orfKbLD1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/filter_dealtypedata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@filter_dealtypedata',
        'controller' => 'App\\Http\\Controllers\\DealController@filter_dealtypedata',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Wy0ZQ0n3orfKbLD1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d2YyF84mPHQvgoPB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getmultiplepage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\DealController@getmultiplepage',
        'controller' => 'App\\Http\\Controllers\\DealController@getmultiplepage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::d2YyF84mPHQvgoPB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nkEIqTRTHStWHewZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stafflist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StaffController@stafflist',
        'controller' => 'App\\Http\\Controllers\\StaffController@stafflist',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nkEIqTRTHStWHewZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UKxIeMv818tJ4YAX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addStaff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StaffController@addStaff',
        'controller' => 'App\\Http\\Controllers\\StaffController@addStaff',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UKxIeMv818tJ4YAX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HtOO6al2EZ6WUQPO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StaffController@insert_staff',
        'controller' => 'App\\Http\\Controllers\\StaffController@insert_staff',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HtOO6al2EZ6WUQPO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ALsqVdU3z5tp5kpt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StaffController@delete_staff',
        'controller' => 'App\\Http\\Controllers\\StaffController@delete_staff',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ALsqVdU3z5tp5kpt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gu6aNeT1iBm0ZScv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_staff_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StaffController@change_staff_status',
        'controller' => 'App\\Http\\Controllers\\StaffController@change_staff_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gu6aNeT1iBm0ZScv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fTnzYVp7UwrF3IEZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StaffController@log',
        'controller' => 'App\\Http\\Controllers\\StaffController@log',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fTnzYVp7UwrF3IEZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w7ZnI3jX1bnh2Dz5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StaffController@logDetail',
        'controller' => 'App\\Http\\Controllers\\StaffController@logDetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::w7ZnI3jX1bnh2Dz5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hotsZ5Qzk5JgjS86' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/changestaffpassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\StaffController@changestaffpassword',
        'controller' => 'App\\Http\\Controllers\\StaffController@changestaffpassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hotsZ5Qzk5JgjS86',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dR0YVEVUmQ7D8xIQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sponserBanners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@sponserBanners',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@sponserBanners',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dR0YVEVUmQ7D8xIQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Np6q05fTeaM350HR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addSponserBanner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@addSponserBanner',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@addSponserBanner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Np6q05fTeaM350HR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SVLH6MRtOY1iUmYt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insertSponserBanner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@insertSponserBanner',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@insertSponserBanner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SVLH6MRtOY1iUmYt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tnNQfWuNfT6rOERx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deleteSponser/{id}/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@deleteSponser',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@deleteSponser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tnNQfWuNfT6rOERx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hWGGYsuvLh2bRNaC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/updatesponserBannerOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@updatesponserBannerOrder',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@updatesponserBannerOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hWGGYsuvLh2bRNaC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kM0pqAr1if0mEzUv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_sponserbanner_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@change_sponserbanner_status',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@change_sponserbanner_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kM0pqAr1if0mEzUv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xlg73DFLRmSwMFtc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@advice',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@advice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Xlg73DFLRmSwMFtc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aVXPt2r1mhsh9NZH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sendadvice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@sendadvice',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@sendadvice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aVXPt2r1mhsh9NZH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zYyWKNjJpGHKOJva' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/getuserlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@getuserlist',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@getuserlist',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zYyWKNjJpGHKOJva',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GKyYYYelwSgBTKIi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insertadvice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@insertadvice',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@insertadvice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GKyYYYelwSgBTKIi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bFV3dDTOk6K6xjeT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_advice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@delete_advice',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@delete_advice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bFV3dDTOk6K6xjeT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bnU5TBDs869Kn1KS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advicedetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@advicedetail',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@advicedetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bnU5TBDs869Kn1KS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AuV7ZhLTMMxHd6Fb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@translation',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@translation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AuV7ZhLTMMxHd6Fb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sVENLeiJpGAVW2wd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addtranslation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@addtranslation',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@addtranslation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sVENLeiJpGAVW2wd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rJtoBdURcUoM9vDJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/inserttranslation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@inserttranslation',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@inserttranslation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rJtoBdURcUoM9vDJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hastKjTCo6Ev3Tpw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_translation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@delete_translation',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@delete_translation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hastKjTCo6Ev3Tpw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q8r9r6DfSZFEyzNL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/knowledgeimagesection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@knowledgeimagesection',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@knowledgeimagesection',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Q8r9r6DfSZFEyzNL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AiSokXCCumdhfY01' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addknowledgeimagesection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@addknowledgeimagesection',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@addknowledgeimagesection',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AiSokXCCumdhfY01',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AJBpZMy5F1bxpNyr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/addknowledgeimagesectionupdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@addknowledgeimagesectionupdate',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@addknowledgeimagesectionupdate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AJBpZMy5F1bxpNyr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
