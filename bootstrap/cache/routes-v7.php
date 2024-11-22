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
            '_route' => 'generated::F2TO9zAMYC29xyyk',
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
            '_route' => 'generated::NqE1Y6xoZonCAOlE',
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
            '_route' => 'generated::MYCJw77Q2ARSS6EF',
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
            '_route' => 'generated::ZlHRbVEyn4Hnd5kr',
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
            '_route' => 'generated::W0Sleffn8K7Ak046',
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
            '_route' => 'generated::JlTcHIOW7Ts9Jt1W',
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
            '_route' => 'generated::SY0FsCO4teV7pH6x',
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
            '_route' => 'generated::BmswVd9oVI0lEOfz',
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
            '_route' => 'generated::I6tlVngAfAHQZX00',
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
            '_route' => 'generated::Kv7OHDMR1BjIVQHi',
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
            '_route' => 'generated::iFm6Lh9wJs0FzCW5',
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
            '_route' => 'generated::OjlC1k39rXYgfvzb',
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
            '_route' => 'generated::teXt0S06AqXLb0lI',
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
            '_route' => 'generated::2tmmbu8myDqF4SKe',
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
            '_route' => 'generated::W3O3cOa6g15suNaF',
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
            '_route' => 'generated::lpRIq8gLUVLZZAZK',
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
            '_route' => 'generated::c4kipD59841z8cjX',
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
            '_route' => 'generated::Nl5yahxO9uQF4Xpi',
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
            '_route' => 'generated::6Wy9bkDW3pmB8HYt',
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
            '_route' => 'generated::Bb7dF2yxXao8UXVW',
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
            '_route' => 'generated::IpKc7Qn5IPvYRYSd',
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
            '_route' => 'generated::MbFjyQZ7RMv6GjVn',
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
            '_route' => 'generated::YgKfIQLdsrXUWgtZ',
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
            '_route' => 'generated::SoFp3L0hnrP50nAP',
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
            '_route' => 'generated::Cn4bZq1rOLWSDqi0',
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
            '_route' => 'generated::48J3gLWoEUf1hxU3',
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
            '_route' => 'generated::e3mjadpsdNVIgsbo',
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
            '_route' => 'generated::x4ut8jatn3K6WV9x',
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
            '_route' => 'generated::TQpzVxBbirzamJlm',
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
            '_route' => 'generated::SrsI9jn8uSHkhLmL',
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
      '/api/notification_hide' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wHmuOvZ7kxXkCeAP',
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
      '/api/pngnotification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::us7i6JBpNnTeTLOz',
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
      '/api/notification_hidedata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0bW5Mg1BuhfXkKvX',
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
      '/api/pngnotificationread' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9rV3KByLEOc9D5Sl',
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
            '_route' => 'generated::nwqI5Soug7EVvFHY',
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
            '_route' => 'generated::l2NWwL8KL0uJx7PV',
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
            '_route' => 'generated::m7cKfxpww2MBs6nb',
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
            '_route' => 'generated::I1iq1furfCfKJDjg',
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
            '_route' => 'generated::JVE0urSW6ehDBeL0',
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
            '_route' => 'generated::v1D93arI5TeSVcHk',
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
            '_route' => 'generated::YdZ1pL6oEwALsFr5',
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
            '_route' => 'generated::xOtBJy1JsgfxlHvW',
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
            '_route' => 'generated::kl8rqJHmeA74HZSg',
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
            '_route' => 'generated::7mZT1Pr67IuBQfMS',
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
            '_route' => 'generated::bHdrCUPRJhXUErof',
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
            '_route' => 'generated::aqA9poscfAuCNzXb',
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
            '_route' => 'generated::AXrGpnbTiWq8GmGT',
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
            '_route' => 'generated::1U6MrBFJtbR2SUyN',
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
            '_route' => 'generated::Bu06unQoZFiR7cLu',
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
            '_route' => 'generated::Hmd7yBJIwiylucKS',
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
            '_route' => 'generated::A2N9n1xsAZjGgeU3',
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
            '_route' => 'generated::JHfOzOGWL5uTutBW',
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
            '_route' => 'generated::5ULyebJSwcwAk1iB',
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
            '_route' => 'generated::kIFxCk0YSsCnFuns',
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
            '_route' => 'generated::aXLPWqbyRcKicVzG',
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
            '_route' => 'generated::vcsK0XaFqcjUjTcw',
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
            '_route' => 'generated::csm7msguDGosm7Yd',
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
            '_route' => 'generated::wnpk1IrhylvastP7',
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
            '_route' => 'generated::ewaDoIURTVTmPlVv',
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
            '_route' => 'generated::BgK9M61uuDFzpLbP',
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
            '_route' => 'generated::Ttl7zUgW1QpbujOw',
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
            '_route' => 'generated::ySU3RoPiRiZsUSXn',
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
            '_route' => 'generated::3hxthcDADf92YaXl',
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
            '_route' => 'generated::CKUMTQSJYAWebfTI',
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
            '_route' => 'generated::PiMoWp0luogzCYyL',
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
            '_route' => 'generated::XuSs89VTem9eHWQb',
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
            '_route' => 'generated::Qf8APwgc8SSmOQIy',
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
            '_route' => 'generated::ha8hdFAId8f6pSu1',
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
            '_route' => 'generated::ypQIbi0Tc7b0db9F',
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
            '_route' => 'generated::i4MAOA0PKzJXh830',
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
            '_route' => 'generated::BnqLbnV3ZYmRjROW',
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
            '_route' => 'generated::ieYstqEIw2xdZd5f',
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
            '_route' => 'generated::J9niRW3kdxVIMQuw',
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
            '_route' => 'generated::7KezaJaLug379sQF',
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
            '_route' => 'generated::nCnTfHhxcsysWeQJ',
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
            '_route' => 'generated::LPiCUj7zRZjLchh7',
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
      '/api/car_draft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cDKm4BaF0vlAGjcl',
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
      '/api/addcarcheck' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v4DNUUxUuCc5yZh4',
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
            '_route' => 'generated::FhzVTNn7CEaYFJoP',
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
            '_route' => 'generated::BklS8VqlBcemzuRE',
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
            '_route' => 'generated::B3D7cRLNPGockuAU',
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
            '_route' => 'generated::fuq1ymB3iSsCckTX',
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
            '_route' => 'generated::D4dqcjsIT0u2Tz8z',
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
            '_route' => 'generated::YJAqXancilV6FT8S',
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
            '_route' => 'generated::sAc1WZoN62tpaGtz',
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
            '_route' => 'generated::GoXy1Oqwb0MwDwny',
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
            '_route' => 'generated::QdmyPUEKzE2rBOix',
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
            '_route' => 'generated::1OS6cQ4KOjoemwlC',
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
            '_route' => 'generated::usjSk0YN78h0RBXT',
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
            '_route' => 'generated::kGHDshMwtMlOxbDc',
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
            '_route' => 'generated::3RbQbYkSatbYmTgb',
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
            '_route' => 'generated::Zq5DxVJrkysvdD37',
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
            '_route' => 'generated::pLrArVsYM67yZHwf',
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
            '_route' => 'generated::3nnP3BW8Xrqbri6H',
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
      '/app/privacy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3O2drDd8RbQgho74',
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
            '_route' => 'generated::1ijvgnZ9mhs9e7re',
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
            '_route' => 'generated::X4EgyvdWznil2Mlv',
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
            '_route' => 'generated::5YxutETz4wJr4mgm',
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
            '_route' => 'generated::BvRCpneEwkyU99fz',
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
            '_route' => 'generated::jnRfSARGLyeU6wfd',
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
            '_route' => 'generated::wstbHKdHTqa12Gtj',
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
            '_route' => 'generated::NWgZByeK82SDeQLB',
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
            '_route' => 'generated::dor2xI55N9X5ITbo',
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
            '_route' => 'generated::igHcHMti9I19FcqA',
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
            '_route' => 'generated::ooR7yQ87Z6GNpO2K',
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
            '_route' => 'generated::RekVmfEUpieFf75o',
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
            '_route' => 'generated::qO6CdKq2LC5gT5nu',
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
            '_route' => 'generated::XfqDHSEj0o8lBXvf',
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
            '_route' => 'generated::wQEYeJnZpwuu8E5t',
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
            '_route' => 'generated::JgyINRIqEiJhIbqY',
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
            '_route' => 'generated::SyzM9DmEYLX3bmeh',
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
            '_route' => 'generated::3FrPxXJDF3HO1avg',
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
            '_route' => 'generated::FE1sc2PtWVemrwss',
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
            '_route' => 'generated::KyWVTIdN2htS5rVc',
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
            '_route' => 'generated::8BymWIPl8YINt0Nl',
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
            '_route' => 'generated::7D0VPLz6jIDukfRm',
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
            '_route' => 'generated::WMQQ5ViDw5omDXlC',
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
            '_route' => 'generated::YWi59wxEFjqPcPjE',
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
            '_route' => 'generated::wZVB7EBpyuZvkrT6',
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
            '_route' => 'generated::4yikg7yv9otoRPFS',
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
            '_route' => 'generated::E4LnXjv4iZk7GQLb',
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
            '_route' => 'generated::KWErR4uFdSyQZVXP',
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
            '_route' => 'generated::9i5zavGRha6rHHwg',
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
      '/admin/CarCheck' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IvwNpnGq7NmBCjXw',
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
      '/admin/addCarCheck' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3dWMtXmqKkRCkT0F',
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
      '/admin/insert_carcheck' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zRuRSYKPCZKdinp5',
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
      '/admin/delete_carCheck' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1mf3qPcXf80WWG3t',
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
      '/admin/change_carcheck_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DJafk1VQ6b2T3aTs',
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
      '/admin/carcheckdetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rn7fkQBR4JAFETp1',
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
      '/admin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::04VJg9b9iLBSkw2y',
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
            '_route' => 'generated::PUWaapyEhrrJdWEU',
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
            '_route' => 'generated::oOch8IpzxU37dl6Y',
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
            '_route' => 'generated::lrRUfVaCaMoIBG9l',
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
            '_route' => 'generated::uHTHrr6X3jOXcDqK',
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
            '_route' => 'generated::0k6Le4iBswLiOaup',
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
            '_route' => 'generated::hMzgxqbbj7jo5kIY',
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
            '_route' => 'generated::OverRxjEw6jzNtuJ',
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
            '_route' => 'generated::3R9okNQko2nnpQrZ',
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
            '_route' => 'generated::fWI8wxbDCbFSzmRI',
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
            '_route' => 'generated::9gvu83NgfGDmVQSg',
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
            '_route' => 'generated::XefVFtsRNv1pvbDK',
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
            '_route' => 'generated::VhmtlIfFcvKaeZKb',
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
            '_route' => 'generated::kGSbFkcXjOdCL1Cv',
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
            '_route' => 'generated::WT6Vsx7XEHgYnYrD',
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
      '/admin/filter_Categorydata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9oymAK03bTIE46w5',
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
      '/admin/brandsdetails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BMwPILLUxPFuJNGf',
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
            '_route' => 'generated::zndxrrxZ1Sp3WMhU',
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
            '_route' => 'generated::huTNl84bj7WXvq37',
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
            '_route' => 'generated::DvAn0BdvJ1UVDTfH',
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
            '_route' => 'generated::3FoNntH1hqJ1ySLe',
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
            '_route' => 'generated::mdTe3HCkPtEGwdmY',
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
            '_route' => 'generated::lVXlqMNSGc1QUxVM',
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
            '_route' => 'generated::1hlAgPecJCAdsIrg',
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
            '_route' => 'generated::kTMFVcm92G9ku8oY',
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
            '_route' => 'generated::79gjduOzK07F0gt9',
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
            '_route' => 'generated::1OZBzcXjxHBPDPVM',
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
            '_route' => 'generated::EP8ix6XfHSOgUyJz',
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
            '_route' => 'generated::rAYIubZu5BLFQ49W',
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
            '_route' => 'generated::YNOwFHGBYMh5CfAT',
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
            '_route' => 'generated::DKkqANQL2GkFYN60',
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
            '_route' => 'generated::wFibu42SARR6vRx4',
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
            '_route' => 'generated::WmcWGtplLNgQOeaT',
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
            '_route' => 'generated::23JVTPkHG6ktAMVm',
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
            '_route' => 'generated::fW9XfYex29caqrR1',
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
            '_route' => 'generated::BVgyOLwVU9Q1MqvE',
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
            '_route' => 'generated::XUmmsG9cMGAY0oin',
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
            '_route' => 'generated::NHEjikZ2qVm0VmTO',
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
            '_route' => 'generated::JnvXNK5VjtC0aICv',
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
            '_route' => 'generated::0ewuwwNP7kgodZcv',
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
            '_route' => 'generated::C0zw1MLrf3BRcqk4',
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
            '_route' => 'generated::jUyMPkVHioi6SkUO',
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
            '_route' => 'generated::S0qSSyD6MFKzf4Sj',
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
            '_route' => 'generated::cBlUpGdCyLc1ALEJ',
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
            '_route' => 'generated::g0mJzWiOrrJdeoZj',
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
            '_route' => 'generated::3HsSKvLtu0tB5cOw',
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
            '_route' => 'generated::mj6jFb9GNSq6TT18',
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
            '_route' => 'generated::Pkf1Ms0lngZcTepu',
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
            '_route' => 'generated::Si4JqEPCkLXfQUya',
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
            '_route' => 'generated::3tHPm7fTN5gx539T',
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
            '_route' => 'generated::6JoRZQ8hEaKqPS7C',
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
            '_route' => 'generated::4wMsnSwhZLBOQfC6',
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
            '_route' => 'generated::ackeiyfR7MhwhMSQ',
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
            '_route' => 'generated::EF8cmgnmEfQC06Ek',
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
            '_route' => 'generated::hJn4weX1DQeUhAWE',
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
            '_route' => 'generated::LrZGZzI4zmSYykK1',
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
            '_route' => 'generated::Ar2t2vxPbk9WrIVt',
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
            '_route' => 'generated::VoaTUwctzynfHqia',
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
            '_route' => 'generated::6SrbjMFTOACwq1yO',
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
            '_route' => 'generated::QnVGWmCi1kYoK52k',
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
            '_route' => 'generated::8xzQTxtsvE9hBC3f',
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
            '_route' => 'generated::87UfEa8txcU4h6d5',
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
            '_route' => 'generated::jjO6dCm3W8OFnj23',
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
            '_route' => 'generated::yuCrDFIyat6XI2KL',
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
            '_route' => 'generated::2oM2URnu0SZ76g9K',
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
            '_route' => 'generated::icGUQmXTTjARZycK',
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
            '_route' => 'generated::00SlpH9gSQYlzQQg',
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
            '_route' => 'generated::D3kFzJJU3wPzPIxc',
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
      '/admin/notificationdetails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::muH7ZHGv12NpTM0R',
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
      '/admin/carmodel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TwV7El6qD4EBBEvf',
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
            '_route' => 'generated::cofTxtQNqEMSGO4z',
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
            '_route' => 'generated::Ay5JdLRN8uNhtM3Q',
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
            '_route' => 'generated::TVxSoVie973OD2ZP',
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
            '_route' => 'generated::jTRjzpcNWQVhVIk5',
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
            '_route' => 'generated::PlZbTfbQEILGlqkh',
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
            '_route' => 'generated::zhlc1rxZss3WRr1X',
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
            '_route' => 'generated::4LnNOscriy5ntTpY',
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
            '_route' => 'generated::9rjqxGV6qKt7LRNT',
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
            '_route' => 'generated::IVAtMqORIaHJLV2j',
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
            '_route' => 'generated::IUvQEs5wWdoEQn4e',
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
            '_route' => 'generated::qJiuw0FgZNKDWMMI',
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
            '_route' => 'generated::j8GEoTJMrgCKB4ls',
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
            '_route' => 'generated::kcSyTQyf38lU3NJ1',
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
            '_route' => 'generated::Pe7ADqIDJyBFHvev',
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
            '_route' => 'generated::NvvJO2SUwCydJSBZ',
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
            '_route' => 'generated::zyQdMkEdiR4yZZ0e',
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
            '_route' => 'generated::60wqHUtRJdGVFXCa',
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
            '_route' => 'generated::Vghgs5pO6juOoolj',
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
            '_route' => 'generated::bUEwwHKXiWrQHhAv',
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
            '_route' => 'generated::wZEwFiifrNSGTm7R',
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
            '_route' => 'generated::JhmLdAWDA3G8OLzU',
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
            '_route' => 'generated::MPcMT74PYHb2bdUZ',
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
            '_route' => 'generated::KperogvumBtoybB2',
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
            '_route' => 'generated::m23s5JzV7YDIvGqc',
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
            '_route' => 'generated::qAXayVXAcXAjnPPd',
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
            '_route' => 'generated::biSsP8FgAPSE0eHy',
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
            '_route' => 'generated::oJ01DQtWfwtREABX',
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
            '_route' => 'generated::UuGU76m8X9krlV7e',
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
            '_route' => 'generated::ZsNyoGGYtUaHxfbj',
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
            '_route' => 'generated::DDANsUiuZ1jS42ub',
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
            '_route' => 'generated::daaQgC8VJTnqncNA',
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
            '_route' => 'generated::9slPyuOsF6aERhzV',
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
            '_route' => 'generated::JeCPj8XMIqgUqCJa',
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
            '_route' => 'generated::kvVSosyfyxMEZspq',
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
            '_route' => 'generated::0BMy7Hyjq0gN0vxy',
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
            '_route' => 'generated::tEgZC4SDsAPnjuSI',
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
            '_route' => 'generated::RMXX9paoEf1E6uFm',
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
            '_route' => 'generated::Bzl3P6FruibSCHDa',
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
            '_route' => 'generated::QXffDyWiQ58oROK1',
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
            '_route' => 'generated::fzpdcEZDN7gEfWf1',
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
            '_route' => 'generated::PuAmvc2QTsbDTzNo',
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
            '_route' => 'generated::Q4EPweolovJxMBHg',
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
            '_route' => 'generated::aGGcICVvA4TubJp1',
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
            '_route' => 'generated::fS4heow3Az4vh0ff',
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
            '_route' => 'generated::NhGQmmQpUeINq0L6',
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
            '_route' => 'generated::PdPisz1FWsNJqk9h',
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
            '_route' => 'generated::UmKSJhgO8XpWezgV',
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
            '_route' => 'generated::wCI1LwfeHDVyQ3CQ',
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
            '_route' => 'generated::v534skQNzfrcKyZb',
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
            '_route' => 'generated::PsAtmdHPg1ZvhNJ3',
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
            '_route' => 'generated::mrhmb7veuyf39uTy',
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
            '_route' => 'generated::WrkS71F2NaIxP3yp',
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
            '_route' => 'generated::zwb0qF9MBHiNm5Q8',
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
            '_route' => 'generated::tDofwWD8RLrdCgeg',
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
            '_route' => 'generated::UydyZ3FM7QO30BMt',
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
      '/admin/translationdetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QnC3wjxRXD36qRzQ',
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
            '_route' => 'generated::1fwu1vreSsvsdK4J',
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
            '_route' => 'generated::g6lLJRfYXdISAtkD',
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
            '_route' => 'generated::XJN1mB1rRrI4zSw3',
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
            '_route' => 'generated::qLMtSOJlKtPErpGZ',
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
            '_route' => 'generated::TkGeO1vyXCEcRuHG',
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
            '_route' => 'generated::QHZhBe92ohd4wzV2',
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
      '/admin/change_advice_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hNKNAHudoJPIYi5K',
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
      '/updateadviceOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::STdBn37PRrMrjdhR',
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
      '/admin/market' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tMlIAI1JblrEXsaC',
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
      '/admin/carmakes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FPYHmNZgZ1N9DC4F',
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
      '/admin/carmodels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aMtnB78mtslxAFuU',
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
      '/admin/carbodies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9B86bg5jmP6FtMee',
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
      '/admin/carvehicles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xY6sbGSCVEjOjp9M',
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
      '/admin/carphoto' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RBlHQE6VxjLbaMXp',
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
            '_route' => 'generated::KrprShKY7Qj9fQ6i',
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
            '_route' => 'generated::rVVkwwtiKL2pkFoM',
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
            '_route' => 'generated::VfhNUon2SKM1daWD',
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
            '_route' => 'generated::Ef1L22KseOGBPXge',
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
            '_route' => 'generated::Opo5QMeVfYQgDihs',
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
            '_route' => 'generated::dah2uBJcV8CEgx26',
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
    'generated::F2TO9zAMYC29xyyk' => 
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
        'as' => 'generated::F2TO9zAMYC29xyyk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NqE1Y6xoZonCAOlE' => 
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
        'as' => 'generated::NqE1Y6xoZonCAOlE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MYCJw77Q2ARSS6EF' => 
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
        'as' => 'generated::MYCJw77Q2ARSS6EF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZlHRbVEyn4Hnd5kr' => 
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
        'as' => 'generated::ZlHRbVEyn4Hnd5kr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W0Sleffn8K7Ak046' => 
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
        'as' => 'generated::W0Sleffn8K7Ak046',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JlTcHIOW7Ts9Jt1W' => 
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
        'as' => 'generated::JlTcHIOW7Ts9Jt1W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SY0FsCO4teV7pH6x' => 
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
        'as' => 'generated::SY0FsCO4teV7pH6x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BmswVd9oVI0lEOfz' => 
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
        'as' => 'generated::BmswVd9oVI0lEOfz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I6tlVngAfAHQZX00' => 
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
        'as' => 'generated::I6tlVngAfAHQZX00',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kv7OHDMR1BjIVQHi' => 
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
        'as' => 'generated::Kv7OHDMR1BjIVQHi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iFm6Lh9wJs0FzCW5' => 
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
        'as' => 'generated::iFm6Lh9wJs0FzCW5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OjlC1k39rXYgfvzb' => 
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
        'as' => 'generated::OjlC1k39rXYgfvzb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::teXt0S06AqXLb0lI' => 
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
        'as' => 'generated::teXt0S06AqXLb0lI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2tmmbu8myDqF4SKe' => 
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
        'as' => 'generated::2tmmbu8myDqF4SKe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W3O3cOa6g15suNaF' => 
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
        'as' => 'generated::W3O3cOa6g15suNaF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lpRIq8gLUVLZZAZK' => 
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
        'as' => 'generated::lpRIq8gLUVLZZAZK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c4kipD59841z8cjX' => 
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
        'as' => 'generated::c4kipD59841z8cjX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nl5yahxO9uQF4Xpi' => 
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
        'as' => 'generated::Nl5yahxO9uQF4Xpi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Wy9bkDW3pmB8HYt' => 
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
        'as' => 'generated::6Wy9bkDW3pmB8HYt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bb7dF2yxXao8UXVW' => 
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
        'as' => 'generated::Bb7dF2yxXao8UXVW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IpKc7Qn5IPvYRYSd' => 
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
        'as' => 'generated::IpKc7Qn5IPvYRYSd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MbFjyQZ7RMv6GjVn' => 
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
        'as' => 'generated::MbFjyQZ7RMv6GjVn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YgKfIQLdsrXUWgtZ' => 
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
        'as' => 'generated::YgKfIQLdsrXUWgtZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SoFp3L0hnrP50nAP' => 
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
        'as' => 'generated::SoFp3L0hnrP50nAP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cn4bZq1rOLWSDqi0' => 
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
        'as' => 'generated::Cn4bZq1rOLWSDqi0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::48J3gLWoEUf1hxU3' => 
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
        'as' => 'generated::48J3gLWoEUf1hxU3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e3mjadpsdNVIgsbo' => 
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
        'as' => 'generated::e3mjadpsdNVIgsbo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x4ut8jatn3K6WV9x' => 
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
        'as' => 'generated::x4ut8jatn3K6WV9x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TQpzVxBbirzamJlm' => 
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
        'as' => 'generated::TQpzVxBbirzamJlm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SrsI9jn8uSHkhLmL' => 
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
        'as' => 'generated::SrsI9jn8uSHkhLmL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wHmuOvZ7kxXkCeAP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/notification_hide',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\NotificationController@notification_hide',
        'controller' => 'App\\Http\\Controllers\\API\\NotificationController@notification_hide',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::wHmuOvZ7kxXkCeAP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::us7i6JBpNnTeTLOz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pngnotification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\NotificationController@pngnotification',
        'controller' => 'App\\Http\\Controllers\\API\\NotificationController@pngnotification',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::us7i6JBpNnTeTLOz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0bW5Mg1BuhfXkKvX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/notification_hidedata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\NotificationController@notification_hidedata',
        'controller' => 'App\\Http\\Controllers\\API\\NotificationController@notification_hidedata',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0bW5Mg1BuhfXkKvX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9rV3KByLEOc9D5Sl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pngnotificationread',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\NotificationController@pngnotificationread',
        'controller' => 'App\\Http\\Controllers\\API\\NotificationController@pngnotificationread',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9rV3KByLEOc9D5Sl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nwqI5Soug7EVvFHY' => 
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
        'as' => 'generated::nwqI5Soug7EVvFHY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l2NWwL8KL0uJx7PV' => 
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
        'as' => 'generated::l2NWwL8KL0uJx7PV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m7cKfxpww2MBs6nb' => 
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
        'as' => 'generated::m7cKfxpww2MBs6nb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I1iq1furfCfKJDjg' => 
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
        'as' => 'generated::I1iq1furfCfKJDjg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JVE0urSW6ehDBeL0' => 
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
        'as' => 'generated::JVE0urSW6ehDBeL0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v1D93arI5TeSVcHk' => 
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
        'as' => 'generated::v1D93arI5TeSVcHk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YdZ1pL6oEwALsFr5' => 
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
        'as' => 'generated::YdZ1pL6oEwALsFr5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xOtBJy1JsgfxlHvW' => 
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
        'as' => 'generated::xOtBJy1JsgfxlHvW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kl8rqJHmeA74HZSg' => 
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
        'as' => 'generated::kl8rqJHmeA74HZSg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7mZT1Pr67IuBQfMS' => 
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
        'as' => 'generated::7mZT1Pr67IuBQfMS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bHdrCUPRJhXUErof' => 
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
        'as' => 'generated::bHdrCUPRJhXUErof',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aqA9poscfAuCNzXb' => 
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
        'as' => 'generated::aqA9poscfAuCNzXb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AXrGpnbTiWq8GmGT' => 
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
        'as' => 'generated::AXrGpnbTiWq8GmGT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1U6MrBFJtbR2SUyN' => 
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
        'as' => 'generated::1U6MrBFJtbR2SUyN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bu06unQoZFiR7cLu' => 
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
        'as' => 'generated::Bu06unQoZFiR7cLu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hmd7yBJIwiylucKS' => 
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
        'as' => 'generated::Hmd7yBJIwiylucKS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A2N9n1xsAZjGgeU3' => 
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
        'as' => 'generated::A2N9n1xsAZjGgeU3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JHfOzOGWL5uTutBW' => 
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
        'as' => 'generated::JHfOzOGWL5uTutBW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5ULyebJSwcwAk1iB' => 
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
        'as' => 'generated::5ULyebJSwcwAk1iB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kIFxCk0YSsCnFuns' => 
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
        'as' => 'generated::kIFxCk0YSsCnFuns',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aXLPWqbyRcKicVzG' => 
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
        'as' => 'generated::aXLPWqbyRcKicVzG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vcsK0XaFqcjUjTcw' => 
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
        'as' => 'generated::vcsK0XaFqcjUjTcw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::csm7msguDGosm7Yd' => 
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
        'as' => 'generated::csm7msguDGosm7Yd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wnpk1IrhylvastP7' => 
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
        'as' => 'generated::wnpk1IrhylvastP7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ewaDoIURTVTmPlVv' => 
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
        'as' => 'generated::ewaDoIURTVTmPlVv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BgK9M61uuDFzpLbP' => 
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
        'as' => 'generated::BgK9M61uuDFzpLbP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ttl7zUgW1QpbujOw' => 
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
        'as' => 'generated::Ttl7zUgW1QpbujOw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ySU3RoPiRiZsUSXn' => 
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
        'as' => 'generated::ySU3RoPiRiZsUSXn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3hxthcDADf92YaXl' => 
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
        'as' => 'generated::3hxthcDADf92YaXl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CKUMTQSJYAWebfTI' => 
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
        'as' => 'generated::CKUMTQSJYAWebfTI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PiMoWp0luogzCYyL' => 
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
        'as' => 'generated::PiMoWp0luogzCYyL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XuSs89VTem9eHWQb' => 
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
        'as' => 'generated::XuSs89VTem9eHWQb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qf8APwgc8SSmOQIy' => 
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
        'as' => 'generated::Qf8APwgc8SSmOQIy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ha8hdFAId8f6pSu1' => 
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
        'as' => 'generated::ha8hdFAId8f6pSu1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ypQIbi0Tc7b0db9F' => 
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
        'as' => 'generated::ypQIbi0Tc7b0db9F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i4MAOA0PKzJXh830' => 
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
        'as' => 'generated::i4MAOA0PKzJXh830',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BnqLbnV3ZYmRjROW' => 
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
        'as' => 'generated::BnqLbnV3ZYmRjROW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ieYstqEIw2xdZd5f' => 
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
        'as' => 'generated::ieYstqEIw2xdZd5f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J9niRW3kdxVIMQuw' => 
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
        'as' => 'generated::J9niRW3kdxVIMQuw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7KezaJaLug379sQF' => 
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
        'as' => 'generated::7KezaJaLug379sQF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nCnTfHhxcsysWeQJ' => 
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
        'as' => 'generated::nCnTfHhxcsysWeQJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LPiCUj7zRZjLchh7' => 
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
        'as' => 'generated::LPiCUj7zRZjLchh7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cDKm4BaF0vlAGjcl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/car_draft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@car_draft',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@car_draft',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::cDKm4BaF0vlAGjcl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v4DNUUxUuCc5yZh4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addcarcheck',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'token.check',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MycarController@addcarcheck',
        'controller' => 'App\\Http\\Controllers\\API\\MycarController@addcarcheck',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::v4DNUUxUuCc5yZh4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FhzVTNn7CEaYFJoP' => 
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
        'as' => 'generated::FhzVTNn7CEaYFJoP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BklS8VqlBcemzuRE' => 
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
        'as' => 'generated::BklS8VqlBcemzuRE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B3D7cRLNPGockuAU' => 
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
        'as' => 'generated::B3D7cRLNPGockuAU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fuq1ymB3iSsCckTX' => 
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
        'as' => 'generated::fuq1ymB3iSsCckTX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D4dqcjsIT0u2Tz8z' => 
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
        'as' => 'generated::D4dqcjsIT0u2Tz8z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YJAqXancilV6FT8S' => 
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
        'as' => 'generated::YJAqXancilV6FT8S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sAc1WZoN62tpaGtz' => 
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
        'as' => 'generated::sAc1WZoN62tpaGtz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GoXy1Oqwb0MwDwny' => 
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
        'as' => 'generated::GoXy1Oqwb0MwDwny',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QdmyPUEKzE2rBOix' => 
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
        'as' => 'generated::QdmyPUEKzE2rBOix',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1OS6cQ4KOjoemwlC' => 
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
        'as' => 'generated::1OS6cQ4KOjoemwlC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::usjSk0YN78h0RBXT' => 
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
        'as' => 'generated::usjSk0YN78h0RBXT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kGHDshMwtMlOxbDc' => 
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
        'as' => 'generated::kGHDshMwtMlOxbDc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3RbQbYkSatbYmTgb' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003aa0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3RbQbYkSatbYmTgb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zq5DxVJrkysvdD37' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003b60000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Zq5DxVJrkysvdD37',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pLrArVsYM67yZHwf' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003b80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pLrArVsYM67yZHwf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3nnP3BW8Xrqbri6H' => 
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
        'as' => 'generated::3nnP3BW8Xrqbri6H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3O2drDd8RbQgho74' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'app/privacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@privacyPolicy',
        'controller' => 'App\\Http\\Controllers\\AdminController@privacyPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3O2drDd8RbQgho74',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1ijvgnZ9mhs9e7re' => 
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
        'as' => 'generated::1ijvgnZ9mhs9e7re',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X4EgyvdWznil2Mlv' => 
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
        'as' => 'generated::X4EgyvdWznil2Mlv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5YxutETz4wJr4mgm' => 
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
        'as' => 'generated::5YxutETz4wJr4mgm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BvRCpneEwkyU99fz' => 
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
        'as' => 'generated::BvRCpneEwkyU99fz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KrprShKY7Qj9fQ6i' => 
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
        'as' => 'generated::KrprShKY7Qj9fQ6i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jnRfSARGLyeU6wfd' => 
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
        'as' => 'generated::jnRfSARGLyeU6wfd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wstbHKdHTqa12Gtj' => 
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
        'as' => 'generated::wstbHKdHTqa12Gtj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NWgZByeK82SDeQLB' => 
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
        'as' => 'generated::NWgZByeK82SDeQLB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dor2xI55N9X5ITbo' => 
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
        'as' => 'generated::dor2xI55N9X5ITbo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::igHcHMti9I19FcqA' => 
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
        'as' => 'generated::igHcHMti9I19FcqA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ooR7yQ87Z6GNpO2K' => 
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
        'as' => 'generated::ooR7yQ87Z6GNpO2K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rVVkwwtiKL2pkFoM' => 
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
        'as' => 'generated::rVVkwwtiKL2pkFoM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ef1L22KseOGBPXge' => 
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
        'as' => 'generated::Ef1L22KseOGBPXge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RekVmfEUpieFf75o' => 
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
        'as' => 'generated::RekVmfEUpieFf75o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qO6CdKq2LC5gT5nu' => 
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
        'as' => 'generated::qO6CdKq2LC5gT5nu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XfqDHSEj0o8lBXvf' => 
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
        'as' => 'generated::XfqDHSEj0o8lBXvf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wQEYeJnZpwuu8E5t' => 
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
        'as' => 'generated::wQEYeJnZpwuu8E5t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JgyINRIqEiJhIbqY' => 
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
        'as' => 'generated::JgyINRIqEiJhIbqY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SyzM9DmEYLX3bmeh' => 
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
        'as' => 'generated::SyzM9DmEYLX3bmeh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3FrPxXJDF3HO1avg' => 
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
        'as' => 'generated::3FrPxXJDF3HO1avg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FE1sc2PtWVemrwss' => 
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
        'as' => 'generated::FE1sc2PtWVemrwss',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KyWVTIdN2htS5rVc' => 
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
        'as' => 'generated::KyWVTIdN2htS5rVc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8BymWIPl8YINt0Nl' => 
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
        'as' => 'generated::8BymWIPl8YINt0Nl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7D0VPLz6jIDukfRm' => 
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
        'as' => 'generated::7D0VPLz6jIDukfRm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WMQQ5ViDw5omDXlC' => 
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
        'as' => 'generated::WMQQ5ViDw5omDXlC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YWi59wxEFjqPcPjE' => 
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
        'as' => 'generated::YWi59wxEFjqPcPjE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wZVB7EBpyuZvkrT6' => 
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
        'as' => 'generated::wZVB7EBpyuZvkrT6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4yikg7yv9otoRPFS' => 
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
        'as' => 'generated::4yikg7yv9otoRPFS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E4LnXjv4iZk7GQLb' => 
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
        'as' => 'generated::E4LnXjv4iZk7GQLb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KWErR4uFdSyQZVXP' => 
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
        'as' => 'generated::KWErR4uFdSyQZVXP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9i5zavGRha6rHHwg' => 
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
        'as' => 'generated::9i5zavGRha6rHHwg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IvwNpnGq7NmBCjXw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/CarCheck',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@CarCheck',
        'controller' => 'App\\Http\\Controllers\\AdminController@CarCheck',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IvwNpnGq7NmBCjXw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3dWMtXmqKkRCkT0F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addCarCheck',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@addCarCheck',
        'controller' => 'App\\Http\\Controllers\\AdminController@addCarCheck',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3dWMtXmqKkRCkT0F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zRuRSYKPCZKdinp5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/insert_carcheck',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@insert_carcheck',
        'controller' => 'App\\Http\\Controllers\\AdminController@insert_carcheck',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zRuRSYKPCZKdinp5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1mf3qPcXf80WWG3t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_carCheck',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@delete_carCheck',
        'controller' => 'App\\Http\\Controllers\\AdminController@delete_carCheck',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1mf3qPcXf80WWG3t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DJafk1VQ6b2T3aTs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_carcheck_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@change_carcheck_status',
        'controller' => 'App\\Http\\Controllers\\AdminController@change_carcheck_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DJafk1VQ6b2T3aTs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rn7fkQBR4JAFETp1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/carcheckdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@carcheckdetail',
        'controller' => 'App\\Http\\Controllers\\AdminController@carcheckdetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Rn7fkQBR4JAFETp1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::04VJg9b9iLBSkw2y' => 
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
        'as' => 'generated::04VJg9b9iLBSkw2y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PUWaapyEhrrJdWEU' => 
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
        'as' => 'generated::PUWaapyEhrrJdWEU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oOch8IpzxU37dl6Y' => 
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
        'as' => 'generated::oOch8IpzxU37dl6Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lrRUfVaCaMoIBG9l' => 
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
        'as' => 'generated::lrRUfVaCaMoIBG9l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uHTHrr6X3jOXcDqK' => 
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
        'as' => 'generated::uHTHrr6X3jOXcDqK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0k6Le4iBswLiOaup' => 
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
        'as' => 'generated::0k6Le4iBswLiOaup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hMzgxqbbj7jo5kIY' => 
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
        'as' => 'generated::hMzgxqbbj7jo5kIY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OverRxjEw6jzNtuJ' => 
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
        'as' => 'generated::OverRxjEw6jzNtuJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3R9okNQko2nnpQrZ' => 
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
        'as' => 'generated::3R9okNQko2nnpQrZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fWI8wxbDCbFSzmRI' => 
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
        'as' => 'generated::fWI8wxbDCbFSzmRI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9gvu83NgfGDmVQSg' => 
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
        'as' => 'generated::9gvu83NgfGDmVQSg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XefVFtsRNv1pvbDK' => 
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
        'as' => 'generated::XefVFtsRNv1pvbDK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VhmtlIfFcvKaeZKb' => 
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
        'as' => 'generated::VhmtlIfFcvKaeZKb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kGSbFkcXjOdCL1Cv' => 
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
        'as' => 'generated::kGSbFkcXjOdCL1Cv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WT6Vsx7XEHgYnYrD' => 
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
        'as' => 'generated::WT6Vsx7XEHgYnYrD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9oymAK03bTIE46w5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/filter_Categorydata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@filter_Categorydata',
        'controller' => 'App\\Http\\Controllers\\BrandController@filter_Categorydata',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9oymAK03bTIE46w5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BMwPILLUxPFuJNGf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brandsdetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@brandsdetails',
        'controller' => 'App\\Http\\Controllers\\BrandController@brandsdetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BMwPILLUxPFuJNGf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zndxrrxZ1Sp3WMhU' => 
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
        'as' => 'generated::zndxrrxZ1Sp3WMhU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::huTNl84bj7WXvq37' => 
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
        'as' => 'generated::huTNl84bj7WXvq37',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DvAn0BdvJ1UVDTfH' => 
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
        'as' => 'generated::DvAn0BdvJ1UVDTfH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3FoNntH1hqJ1ySLe' => 
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
        'as' => 'generated::3FoNntH1hqJ1ySLe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mdTe3HCkPtEGwdmY' => 
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
        'as' => 'generated::mdTe3HCkPtEGwdmY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lVXlqMNSGc1QUxVM' => 
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
        'as' => 'generated::lVXlqMNSGc1QUxVM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1hlAgPecJCAdsIrg' => 
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
        'as' => 'generated::1hlAgPecJCAdsIrg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kTMFVcm92G9ku8oY' => 
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
        'as' => 'generated::kTMFVcm92G9ku8oY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::79gjduOzK07F0gt9' => 
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
        'as' => 'generated::79gjduOzK07F0gt9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1OZBzcXjxHBPDPVM' => 
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
        'as' => 'generated::1OZBzcXjxHBPDPVM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EP8ix6XfHSOgUyJz' => 
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
        'as' => 'generated::EP8ix6XfHSOgUyJz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rAYIubZu5BLFQ49W' => 
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
        'as' => 'generated::rAYIubZu5BLFQ49W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YNOwFHGBYMh5CfAT' => 
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
        'as' => 'generated::YNOwFHGBYMh5CfAT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DKkqANQL2GkFYN60' => 
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
        'as' => 'generated::DKkqANQL2GkFYN60',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VfhNUon2SKM1daWD' => 
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
        'as' => 'generated::VfhNUon2SKM1daWD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Opo5QMeVfYQgDihs' => 
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
        'as' => 'generated::Opo5QMeVfYQgDihs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wFibu42SARR6vRx4' => 
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
        'as' => 'generated::wFibu42SARR6vRx4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WmcWGtplLNgQOeaT' => 
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
        'as' => 'generated::WmcWGtplLNgQOeaT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::23JVTPkHG6ktAMVm' => 
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
        'as' => 'generated::23JVTPkHG6ktAMVm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fW9XfYex29caqrR1' => 
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
        'as' => 'generated::fW9XfYex29caqrR1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BVgyOLwVU9Q1MqvE' => 
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
        'as' => 'generated::BVgyOLwVU9Q1MqvE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XUmmsG9cMGAY0oin' => 
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
        'as' => 'generated::XUmmsG9cMGAY0oin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NHEjikZ2qVm0VmTO' => 
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
        'as' => 'generated::NHEjikZ2qVm0VmTO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JnvXNK5VjtC0aICv' => 
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
        'as' => 'generated::JnvXNK5VjtC0aICv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0ewuwwNP7kgodZcv' => 
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
        'as' => 'generated::0ewuwwNP7kgodZcv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C0zw1MLrf3BRcqk4' => 
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
        'as' => 'generated::C0zw1MLrf3BRcqk4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jUyMPkVHioi6SkUO' => 
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
        'as' => 'generated::jUyMPkVHioi6SkUO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S0qSSyD6MFKzf4Sj' => 
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
        'as' => 'generated::S0qSSyD6MFKzf4Sj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cBlUpGdCyLc1ALEJ' => 
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
        'as' => 'generated::cBlUpGdCyLc1ALEJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g0mJzWiOrrJdeoZj' => 
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
        'as' => 'generated::g0mJzWiOrrJdeoZj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3HsSKvLtu0tB5cOw' => 
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
        'as' => 'generated::3HsSKvLtu0tB5cOw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mj6jFb9GNSq6TT18' => 
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
        'as' => 'generated::mj6jFb9GNSq6TT18',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pkf1Ms0lngZcTepu' => 
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
        'as' => 'generated::Pkf1Ms0lngZcTepu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Si4JqEPCkLXfQUya' => 
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
        'as' => 'generated::Si4JqEPCkLXfQUya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3tHPm7fTN5gx539T' => 
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
        'as' => 'generated::3tHPm7fTN5gx539T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6JoRZQ8hEaKqPS7C' => 
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
        'as' => 'generated::6JoRZQ8hEaKqPS7C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4wMsnSwhZLBOQfC6' => 
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
        'as' => 'generated::4wMsnSwhZLBOQfC6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ackeiyfR7MhwhMSQ' => 
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
        'as' => 'generated::ackeiyfR7MhwhMSQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EF8cmgnmEfQC06Ek' => 
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
        'as' => 'generated::EF8cmgnmEfQC06Ek',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hJn4weX1DQeUhAWE' => 
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
        'as' => 'generated::hJn4weX1DQeUhAWE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LrZGZzI4zmSYykK1' => 
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
        'as' => 'generated::LrZGZzI4zmSYykK1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ar2t2vxPbk9WrIVt' => 
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
        'as' => 'generated::Ar2t2vxPbk9WrIVt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VoaTUwctzynfHqia' => 
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
        'as' => 'generated::VoaTUwctzynfHqia',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6SrbjMFTOACwq1yO' => 
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
        'as' => 'generated::6SrbjMFTOACwq1yO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QnVGWmCi1kYoK52k' => 
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
        'as' => 'generated::QnVGWmCi1kYoK52k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8xzQTxtsvE9hBC3f' => 
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
        'as' => 'generated::8xzQTxtsvE9hBC3f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::87UfEa8txcU4h6d5' => 
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
        'as' => 'generated::87UfEa8txcU4h6d5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jjO6dCm3W8OFnj23' => 
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
        'as' => 'generated::jjO6dCm3W8OFnj23',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yuCrDFIyat6XI2KL' => 
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
        'as' => 'generated::yuCrDFIyat6XI2KL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2oM2URnu0SZ76g9K' => 
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
        'as' => 'generated::2oM2URnu0SZ76g9K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::icGUQmXTTjARZycK' => 
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
        'as' => 'generated::icGUQmXTTjARZycK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::00SlpH9gSQYlzQQg' => 
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
        'as' => 'generated::00SlpH9gSQYlzQQg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D3kFzJJU3wPzPIxc' => 
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
        'as' => 'generated::D3kFzJJU3wPzPIxc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::muH7ZHGv12NpTM0R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notificationdetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@notificationdetails',
        'controller' => 'App\\Http\\Controllers\\NotificationController@notificationdetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::muH7ZHGv12NpTM0R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TwV7El6qD4EBBEvf' => 
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
        'as' => 'generated::TwV7El6qD4EBBEvf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cofTxtQNqEMSGO4z' => 
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
        'as' => 'generated::cofTxtQNqEMSGO4z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ay5JdLRN8uNhtM3Q' => 
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
        'as' => 'generated::Ay5JdLRN8uNhtM3Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TVxSoVie973OD2ZP' => 
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
        'as' => 'generated::TVxSoVie973OD2ZP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jTRjzpcNWQVhVIk5' => 
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
        'as' => 'generated::jTRjzpcNWQVhVIk5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PlZbTfbQEILGlqkh' => 
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
        'as' => 'generated::PlZbTfbQEILGlqkh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zhlc1rxZss3WRr1X' => 
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
        'as' => 'generated::zhlc1rxZss3WRr1X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4LnNOscriy5ntTpY' => 
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
        'as' => 'generated::4LnNOscriy5ntTpY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9rjqxGV6qKt7LRNT' => 
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
        'as' => 'generated::9rjqxGV6qKt7LRNT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IVAtMqORIaHJLV2j' => 
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
        'as' => 'generated::IVAtMqORIaHJLV2j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IUvQEs5wWdoEQn4e' => 
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
        'as' => 'generated::IUvQEs5wWdoEQn4e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qJiuw0FgZNKDWMMI' => 
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
        'as' => 'generated::qJiuw0FgZNKDWMMI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j8GEoTJMrgCKB4ls' => 
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
        'as' => 'generated::j8GEoTJMrgCKB4ls',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kcSyTQyf38lU3NJ1' => 
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
        'as' => 'generated::kcSyTQyf38lU3NJ1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pe7ADqIDJyBFHvev' => 
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
        'as' => 'generated::Pe7ADqIDJyBFHvev',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NvvJO2SUwCydJSBZ' => 
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
        'as' => 'generated::NvvJO2SUwCydJSBZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zyQdMkEdiR4yZZ0e' => 
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
        'as' => 'generated::zyQdMkEdiR4yZZ0e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::60wqHUtRJdGVFXCa' => 
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
        'as' => 'generated::60wqHUtRJdGVFXCa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vghgs5pO6juOoolj' => 
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
        'as' => 'generated::Vghgs5pO6juOoolj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bUEwwHKXiWrQHhAv' => 
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
        'as' => 'generated::bUEwwHKXiWrQHhAv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wZEwFiifrNSGTm7R' => 
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
        'as' => 'generated::wZEwFiifrNSGTm7R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JhmLdAWDA3G8OLzU' => 
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
        'as' => 'generated::JhmLdAWDA3G8OLzU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MPcMT74PYHb2bdUZ' => 
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
        'as' => 'generated::MPcMT74PYHb2bdUZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KperogvumBtoybB2' => 
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
        'as' => 'generated::KperogvumBtoybB2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m23s5JzV7YDIvGqc' => 
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
        'as' => 'generated::m23s5JzV7YDIvGqc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qAXayVXAcXAjnPPd' => 
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
        'as' => 'generated::qAXayVXAcXAjnPPd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::biSsP8FgAPSE0eHy' => 
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
        'as' => 'generated::biSsP8FgAPSE0eHy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oJ01DQtWfwtREABX' => 
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
        'as' => 'generated::oJ01DQtWfwtREABX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UuGU76m8X9krlV7e' => 
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
        'as' => 'generated::UuGU76m8X9krlV7e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZsNyoGGYtUaHxfbj' => 
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
        'as' => 'generated::ZsNyoGGYtUaHxfbj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DDANsUiuZ1jS42ub' => 
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
        'as' => 'generated::DDANsUiuZ1jS42ub',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::daaQgC8VJTnqncNA' => 
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
        'as' => 'generated::daaQgC8VJTnqncNA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9slPyuOsF6aERhzV' => 
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
        'as' => 'generated::9slPyuOsF6aERhzV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JeCPj8XMIqgUqCJa' => 
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
        'as' => 'generated::JeCPj8XMIqgUqCJa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kvVSosyfyxMEZspq' => 
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
        'as' => 'generated::kvVSosyfyxMEZspq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0BMy7Hyjq0gN0vxy' => 
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
        'as' => 'generated::0BMy7Hyjq0gN0vxy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tEgZC4SDsAPnjuSI' => 
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
        'as' => 'generated::tEgZC4SDsAPnjuSI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RMXX9paoEf1E6uFm' => 
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
        'as' => 'generated::RMXX9paoEf1E6uFm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bzl3P6FruibSCHDa' => 
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
        'as' => 'generated::Bzl3P6FruibSCHDa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QXffDyWiQ58oROK1' => 
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
        'as' => 'generated::QXffDyWiQ58oROK1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fzpdcEZDN7gEfWf1' => 
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
        'as' => 'generated::fzpdcEZDN7gEfWf1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PuAmvc2QTsbDTzNo' => 
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
        'as' => 'generated::PuAmvc2QTsbDTzNo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q4EPweolovJxMBHg' => 
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
        'as' => 'generated::Q4EPweolovJxMBHg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aGGcICVvA4TubJp1' => 
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
        'as' => 'generated::aGGcICVvA4TubJp1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fS4heow3Az4vh0ff' => 
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
        'as' => 'generated::fS4heow3Az4vh0ff',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NhGQmmQpUeINq0L6' => 
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
        'as' => 'generated::NhGQmmQpUeINq0L6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PdPisz1FWsNJqk9h' => 
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
        'as' => 'generated::PdPisz1FWsNJqk9h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dah2uBJcV8CEgx26' => 
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
        'as' => 'generated::dah2uBJcV8CEgx26',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UmKSJhgO8XpWezgV' => 
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
        'as' => 'generated::UmKSJhgO8XpWezgV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wCI1LwfeHDVyQ3CQ' => 
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
        'as' => 'generated::wCI1LwfeHDVyQ3CQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v534skQNzfrcKyZb' => 
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
        'as' => 'generated::v534skQNzfrcKyZb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PsAtmdHPg1ZvhNJ3' => 
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
        'as' => 'generated::PsAtmdHPg1ZvhNJ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mrhmb7veuyf39uTy' => 
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
        'as' => 'generated::mrhmb7veuyf39uTy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WrkS71F2NaIxP3yp' => 
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
        'as' => 'generated::WrkS71F2NaIxP3yp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zwb0qF9MBHiNm5Q8' => 
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
        'as' => 'generated::zwb0qF9MBHiNm5Q8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tDofwWD8RLrdCgeg' => 
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
        'as' => 'generated::tDofwWD8RLrdCgeg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UydyZ3FM7QO30BMt' => 
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
        'as' => 'generated::UydyZ3FM7QO30BMt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QnC3wjxRXD36qRzQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translationdetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@translationdetail',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@translationdetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QnC3wjxRXD36qRzQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1fwu1vreSsvsdK4J' => 
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
        'as' => 'generated::1fwu1vreSsvsdK4J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g6lLJRfYXdISAtkD' => 
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
        'as' => 'generated::g6lLJRfYXdISAtkD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XJN1mB1rRrI4zSw3' => 
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
        'as' => 'generated::XJN1mB1rRrI4zSw3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qLMtSOJlKtPErpGZ' => 
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
        'as' => 'generated::qLMtSOJlKtPErpGZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TkGeO1vyXCEcRuHG' => 
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
        'as' => 'generated::TkGeO1vyXCEcRuHG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QHZhBe92ohd4wzV2' => 
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
        'as' => 'generated::QHZhBe92ohd4wzV2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hNKNAHudoJPIYi5K' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change_advice_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@change_advice_status',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@change_advice_status',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hNKNAHudoJPIYi5K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::STdBn37PRrMrjdhR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateadviceOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\KnowledgeCenterController@updateadviceOrder',
        'controller' => 'App\\Http\\Controllers\\KnowledgeCenterController@updateadviceOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::STdBn37PRrMrjdhR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tMlIAI1JblrEXsaC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/market',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\JatoController@market',
        'controller' => 'App\\Http\\Controllers\\JatoController@market',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tMlIAI1JblrEXsaC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FPYHmNZgZ1N9DC4F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/carmakes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\JatoController@carmakes',
        'controller' => 'App\\Http\\Controllers\\JatoController@carmakes',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FPYHmNZgZ1N9DC4F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aMtnB78mtslxAFuU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/carmodels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\JatoController@carmodels',
        'controller' => 'App\\Http\\Controllers\\JatoController@carmodels',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aMtnB78mtslxAFuU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9B86bg5jmP6FtMee' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/carbodies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\JatoController@carbodies',
        'controller' => 'App\\Http\\Controllers\\JatoController@carbodies',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9B86bg5jmP6FtMee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xY6sbGSCVEjOjp9M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/carvehicles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\JatoController@carvehicles',
        'controller' => 'App\\Http\\Controllers\\JatoController@carvehicles',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xY6sbGSCVEjOjp9M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RBlHQE6VxjLbaMXp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/carphoto',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'prevent-back-history',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\JatoController@carphoto',
        'controller' => 'App\\Http\\Controllers\\JatoController@carphoto',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RBlHQE6VxjLbaMXp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
