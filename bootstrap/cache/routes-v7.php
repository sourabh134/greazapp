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
            '_route' => 'generated::QAVdruwyeV4GBECZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3ZK1tUcGCIgc68YE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yYCIGMJtdsK0leTq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Werz4LqKwAng8CIS',
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
            '_route' => 'generated::5W5tXBUrDGXmNA9j',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6ifVuObtdeYbrZIA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::B7d5t3nbJi8RaVy7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5j0jSyZZ9CrwhVnY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::v2Ba64IyKsB8IRkd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CpMJvFYolXy1xeQn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zclEJG9koDvKSH9n',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pKLKF52cwHgM6man',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::H1QNmMCIyMPn4oCI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NZUSRDqJv9rcYEBX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::K0saGh1EBWmLUSlf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1xq1JRFnPmADWVJo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::E3f97PN68VByWnxa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HpAIGK5vKVOcNqZp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rxbzkm4hMm56sBki',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Zj80BoysXR5ITZzM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8FquLOZrBjsGSGii',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jihXt2ZZlnOfkWbN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FrWXW39u3JpzEc0y',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CbwTqG1Iy1hC5Vfl',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::q6VDU4iLBFdSV4Xe',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::x9VQXMdGr9LxscWe',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::U1FTcsukYkYZMiKC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3WGUmysdW5Axc5pg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::965Ra5fAhpgbmdxw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zaX4qsYrncWB3Isc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Nkyknv8nVCF25LVY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gQXQZvUfjITpIfgO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZQi697YL3X70PGhm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1UoL8XfHr4lwId7H',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yL5AoZVYQcR9BX1N',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Eh8aYXp5O1O8V12x',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::R6IKVELdipjU8Hs2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MtlYioZcUkviWNfw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vFjxwwkAREeuTsw5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3uFdr3o4JRlcJQGP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2IrwsPFo9Y3O9uJL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0GP9DRhZqCYdvbvb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JQD9A4uRpq1hzpyr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2qdQGq0cgxNQgea4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Oc43FX7iNZLMjzCa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::75eNk3uesabPZUtv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xG1zpzyvQSBPIuJJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hgLkpnrsmY3InQjE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JO2fXL4U1tzhA3Ey',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KLfLdUHIy7QyUV50',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0DO372bwBqU1Pyzi',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::eV9I8KFWuOH4byGQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::edTrkZlWxlIPTvek',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::i393FKCykx6rK9Ie',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WWFzuwrTOVLxQhTE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::F3C9OOrz3O0wxsM7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2gelw3NkIe7K073n',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TlHVIFxc6AW8lC7o',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5GnQGf5Ob4R7xr1T',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7Tu49R7LEuHWSaRC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rx3B7ErXOJKWg6Dp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NxzEIMyfpWNj3Y8y',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5PygzZ7DIOYIYfB1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::l4POHEExO3IxVOKz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jkWGFOuUZPPjp3TM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OKWmHm7eVzTiXm89',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mBWSzTAo4mAVu7Du',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5mADIwn1fq0c4SPc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5vakm9O2kti5srkP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xa64EPrtaG7mmiKD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4bJbSP856ekfXJlA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::520hKPv7xCZEisnH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::b0pkyaudKvkDNCS2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Z1Cd9Tt6h5En3aoV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qOCWNXpU9fg6JyY9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Knu8xWcftMzaOdf9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qJcq0KtJ0EHEHYpo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kgHDIxCQPVLzHKpu',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cu3VE0DJmWDJVuEV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tMzsBFtJrlZvHggR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6EmXGo3z8cBuGLxR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lfRYAnX8fAGOA2Nq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BkwsiViQtK1f2ZOs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ylnDdhs6uH4bQUdk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FT59Z3eFOe584C5r',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mzWEu0feLUePxMoG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tZiN2a8vaFyqKm1V',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Cpfmtz2jxNJQI9SX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::D2xpk4skodkKwZoU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cAc8NtT3VAt9ivMf',
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
            '_route' => 'generated::P7d9bGHS24pym2uH',
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
            '_route' => 'generated::k6QdbTUtebxDBq5K',
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
            '_route' => 'generated::02q0oLVfFoH8fZTD',
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
            '_route' => 'generated::IOiYC2D8qWuY2ETX',
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
            '_route' => 'generated::uJRgxRNtlXElvj0j',
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
            '_route' => 'generated::d5pO6b3xt14m9q6s',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fKcuJ6ImUN31bQh6',
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
            '_route' => 'generated::gjIUBLsdlaEsywsf',
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
            '_route' => 'generated::5Cgfd0GT2h4lTgSP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YL65V1LKaarJRSCU',
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
            '_route' => 'generated::nVmcC4UjCNdSBQne',
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
            '_route' => 'generated::eotR3xE3ErKKFl4I',
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
            '_route' => 'generated::UciLsusLBeaNn1w6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gbOHn2FeBwNPVAve',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ALPhLfNWUrU1NytX',
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
            '_route' => 'generated::dVH9cctKjbT5NbyF',
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
            '_route' => 'generated::3gM6zB0jmQjHbBwk',
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
            '_route' => 'generated::zm8gQYW8ouBWQz9v',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0SFloNNgRTXB3Isg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::T4BCmFIPdRGanXmm',
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
            '_route' => 'generated::KetYHpKwrW7eYfGA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3dJXk8QvnkeSp76v',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jKxG3GbHnTxyGsln',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GvEBJQNVHceFT9gT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Bt64REP9dp96GuiZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::J2rnjDIcSu8V9Gry',
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
            '_route' => 'generated::RGChi6qcXbseX88X',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ls7mmJwCljYDabth',
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
            '_route' => 'generated::WhLarHVqAq8L5m82',
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
            '_route' => 'generated::zFeq4qSmR1lix3on',
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
            '_route' => 'generated::Ig3F7aEXqeokNRpU',
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
            '_route' => 'generated::AQ4OmncoGgv8Qinp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hBWTpifvxncwyWsp',
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
            '_route' => 'generated::uNkmUBYFaJTC9scg',
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
            '_route' => 'generated::Y2uwpaoFn6sngLMm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::s6aIteyf6TvMo4Xj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::H5MnMEOxFqSsJA8P',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wVW4PixrPdi7ovqA',
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
            '_route' => 'generated::Z281XP9UUhi7GCui',
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
            '_route' => 'generated::TdFC10qcYujwhLia',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lLW3LsOsZEn7dU2A',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pknPaFVIht7uyMKu',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::W8EPC8kOCXQ4eJH4',
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
            '_route' => 'generated::QToaeS13Dh0VRwYT',
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
            '_route' => 'generated::uqPfQWnjbXVyOFVu',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8OGbLDPaJDCrYntZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Nv1oCqekJI9TOzBj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3fyfw30kHWoZRHJ1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1NquebuDOCUsLQrx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::klFLgWHDkZpKYss9',
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
            '_route' => 'generated::ctwlU3XeH7StK0Wt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KTbytIKaJNDSWn1E',
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
            '_route' => 'generated::3fUhal4NyDgpDStX',
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
            '_route' => 'generated::0jiLXbl7xzHHC3gz',
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
            '_route' => 'generated::Sk3bwudHcieoHAe6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2nK9eb4F1UH1q3jr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oIc5ZRuAYqieqDN1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XxOSpnWWU3f7AO7B',
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
            '_route' => 'generated::jAFcwI1kohzUq5qE',
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
            '_route' => 'generated::y12tuhO9IPjTT5ji',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rKyF1CAD7BCDH3wk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::khUoqUsiPt3OlqOW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OrASnleL9WwFVBVj',
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
            '_route' => 'generated::Ad3op1L7y4rayktO',
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
            '_route' => 'generated::MFIOUDT1AD8197SB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IEpQXopGgO3P0ng8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QWUSvq6QHbJowmmS',
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
            '_route' => 'generated::AUEaxHNRBfhMDYma',
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
            '_route' => 'generated::Dy1qKeu1PhYMqWsA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wvFPcjwNUHfzDRbC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::numPyxy11EIiIRj1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gAkPPqxRx18i4Nua',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Bour0wEXb8sPjMtJ',
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
            '_route' => 'generated::xAm2JqWdoP4vmFzq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YQqqMiNrxIMkD5v6',
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
            '_route' => 'generated::J5xgMACY7PJFXvNo',
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
            '_route' => 'generated::eGNtijHYPh00UUdC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8qbjQHK9iX0n1my3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yCvcHe7Pr7NIlQ0O',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::P5wjNna25ruBh7t3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::E7N0e99chpkSoL5X',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wWDCQQH2JDGrXuHz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OYp4P3XovTxEuSCU',
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
            '_route' => 'generated::vii3xxXvMwuV5gW6',
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
            '_route' => 'generated::JlAn02oA5vHD3WKw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mcNLZBSzu2Hv7rau',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ufnwu3t4HUKEQ4aV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Q4wyAJJFmzR8qJkd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gvxjSQpWEvUZ0mFK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::osgpmPQ5MAAKRpzW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vkYCDWpkNx4hkhXw',
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
            '_route' => 'generated::VVdjzn2D5Is9ofH1',
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
            '_route' => 'generated::9o8vmsUV48eYoBfA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::EspT3Vf5NppRwX5R',
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
            '_route' => 'generated::MIbkYJijCciEUVyN',
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
            '_route' => 'generated::5BEiJgXMKV6lm5Ru',
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
            '_route' => 'generated::ADOvzAe4X65gyE5F',
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
            '_route' => 'generated::yw22myZpyRdUbSSK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AI1nODbddFgltsFE',
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
            '_route' => 'generated::N2DZQKY6QUZGCXUU',
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
            '_route' => 'generated::5V2Ihcf6YYiUwBHx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::c3USOBajQmApuRXt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TmuLAXxqjZAVTVs7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aIHvAxTJRy6koIXc',
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
            '_route' => 'generated::4NKlU9PtIbeQAQJo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fnNJ3hfFyKue1pnJ',
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
            '_route' => 'generated::Y9kGFyw4o52ZmGpp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uU6clsfnPNJd3bf7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4Bd2SiCBJJ2CAwNx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::f0rfXSHtP20ZsETH',
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
            '_route' => 'generated::Bg6lICFMWxjatMkK',
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
            '_route' => 'generated::RbDB60dcgg3gslbv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hSFzNCP31DXWeOau',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::P4t4WV4vqdudZDfB',
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
            '_route' => 'generated::OiBIjqtYf33eMCBv',
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
            '_route' => 'generated::xTEm7SBUCMqGGi5M',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::abMJ7nFY27kPaMgm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AfTkExv8ubH70D1W',
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
            '_route' => 'generated::z4UPZxmPclXA7y3Z',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::c4DLin6IyTc8GsSW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::H7nw9fRLMgGsNCtQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WbK24iNxb2t2wnJV',
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
            '_route' => 'generated::PckeLnMaupS3grYr',
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
            '_route' => 'generated::wV0c8xr0oYWJkH3C',
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
            '_route' => 'generated::Nbuoys0ZQNj3wt6B',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KQGpnZuqCg7wFEpR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wIocRLzZSTNADtm7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YEpblfAm7pXzKPtK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NYEp51vpuDxzENGD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mcecV6vxkhfyGBIm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tSaqCsuIE93SdRbG',
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
            '_route' => 'generated::Y3toeaYEZYh59MSh',
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
            '_route' => 'generated::tUKs3AZAYUu2q3oD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XyFrVXyYh1TUrKSk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9ysdSkUSRezU8L7x',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XgOCVRRWAaP3tOwE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::A0RgJUPOUYwTuycE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aF5TPAsfU59tHtLU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::o2avC9SjVU6md7a8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oHpX3d3Fi0SBGKKU',
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
            '_route' => 'generated::w1XRIpXk1rDWKEVV',
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
            '_route' => 'generated::MPpGQzFOYIpsBi7g',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::sAHRaNOb9dR54OQY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ArbGWXeT512LO5Og',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mLEab6WE11pYsalq',
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
            '_route' => 'generated::WEY50CzKbVIYxN5h',
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
            '_route' => 'generated::lxt2UN2X4rjRPFn6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wLrFuPtlBYJeNwYl',
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
            '_route' => 'generated::qrqjAhS9rYwe5Wwb',
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
            '_route' => 'generated::TpC9pZwnaU7GXarm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::807hi3HVxAW8KGeq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vh9paSIhsfO4qjXo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::s4BKB7UjBKtmPly1',
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
            '_route' => 'generated::6HUdrEBFyTbhnw0u',
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
            '_route' => 'generated::qs0CIzIae2XFLs7j',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XLiMFjnAKoxody9G',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::57oYQ3SavdWhopZN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jzcT28D9B9IuB3RU',
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
            '_route' => 'generated::bAxJuFzT7sysRevj',
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
            '_route' => 'generated::64Aywen33AwSfVxI',
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
            '_route' => 'generated::3BKUFEBzDFrk12KL',
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
            '_route' => 'generated::cNDHggnHDuTTThGn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0YvHQQtcDwBBs000',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zEfC324ipMbip59h',
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
            '_route' => 'generated::5EjtB3ka801iUNbL',
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
            '_route' => 'generated::tPk3oK5j9zdFYC0U',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LfRfABrDkArNAes9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7HaDk48JSKcaLCWX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8TePu85J5wM2jHpd',
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
            '_route' => 'generated::g6mCQ1g0h3n6iD5w',
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
            '_route' => 'generated::zLL1lB8aEqBtbX62',
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
            '_route' => 'generated::BQCqcIRWcQtzey5f',
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
            '_route' => 'generated::URMu57dlA3U0maiJ',
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
            '_route' => 'generated::lzLFYjvStgrBFfEM',
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
    'generated::QAVdruwyeV4GBECZ' => 
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
        'as' => 'generated::QAVdruwyeV4GBECZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3ZK1tUcGCIgc68YE' => 
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
        'as' => 'generated::3ZK1tUcGCIgc68YE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yYCIGMJtdsK0leTq' => 
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
        'as' => 'generated::yYCIGMJtdsK0leTq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Werz4LqKwAng8CIS' => 
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
        'as' => 'generated::Werz4LqKwAng8CIS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5W5tXBUrDGXmNA9j' => 
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
        'as' => 'generated::5W5tXBUrDGXmNA9j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6ifVuObtdeYbrZIA' => 
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
        'as' => 'generated::6ifVuObtdeYbrZIA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B7d5t3nbJi8RaVy7' => 
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
        'as' => 'generated::B7d5t3nbJi8RaVy7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5j0jSyZZ9CrwhVnY' => 
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
        'as' => 'generated::5j0jSyZZ9CrwhVnY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v2Ba64IyKsB8IRkd' => 
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
        'as' => 'generated::v2Ba64IyKsB8IRkd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CpMJvFYolXy1xeQn' => 
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
        'as' => 'generated::CpMJvFYolXy1xeQn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zclEJG9koDvKSH9n' => 
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
        'as' => 'generated::zclEJG9koDvKSH9n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pKLKF52cwHgM6man' => 
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
        'as' => 'generated::pKLKF52cwHgM6man',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H1QNmMCIyMPn4oCI' => 
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
        'as' => 'generated::H1QNmMCIyMPn4oCI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NZUSRDqJv9rcYEBX' => 
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
        'as' => 'generated::NZUSRDqJv9rcYEBX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K0saGh1EBWmLUSlf' => 
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
        'as' => 'generated::K0saGh1EBWmLUSlf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1xq1JRFnPmADWVJo' => 
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
        'as' => 'generated::1xq1JRFnPmADWVJo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E3f97PN68VByWnxa' => 
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
        'as' => 'generated::E3f97PN68VByWnxa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HpAIGK5vKVOcNqZp' => 
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
        'as' => 'generated::HpAIGK5vKVOcNqZp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rxbzkm4hMm56sBki' => 
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
        'as' => 'generated::rxbzkm4hMm56sBki',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zj80BoysXR5ITZzM' => 
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
        'as' => 'generated::Zj80BoysXR5ITZzM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8FquLOZrBjsGSGii' => 
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
        'as' => 'generated::8FquLOZrBjsGSGii',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jihXt2ZZlnOfkWbN' => 
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
        'as' => 'generated::jihXt2ZZlnOfkWbN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FrWXW39u3JpzEc0y' => 
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
        'as' => 'generated::FrWXW39u3JpzEc0y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CbwTqG1Iy1hC5Vfl' => 
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
        'as' => 'generated::CbwTqG1Iy1hC5Vfl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q6VDU4iLBFdSV4Xe' => 
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
        'as' => 'generated::q6VDU4iLBFdSV4Xe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x9VQXMdGr9LxscWe' => 
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
        'as' => 'generated::x9VQXMdGr9LxscWe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U1FTcsukYkYZMiKC' => 
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
        'as' => 'generated::U1FTcsukYkYZMiKC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3WGUmysdW5Axc5pg' => 
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
        'as' => 'generated::3WGUmysdW5Axc5pg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::965Ra5fAhpgbmdxw' => 
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
        'as' => 'generated::965Ra5fAhpgbmdxw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zaX4qsYrncWB3Isc' => 
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
        'as' => 'generated::zaX4qsYrncWB3Isc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nkyknv8nVCF25LVY' => 
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
        'as' => 'generated::Nkyknv8nVCF25LVY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gQXQZvUfjITpIfgO' => 
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
        'as' => 'generated::gQXQZvUfjITpIfgO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZQi697YL3X70PGhm' => 
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
        'as' => 'generated::ZQi697YL3X70PGhm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1UoL8XfHr4lwId7H' => 
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
        'as' => 'generated::1UoL8XfHr4lwId7H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yL5AoZVYQcR9BX1N' => 
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
        'as' => 'generated::yL5AoZVYQcR9BX1N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Eh8aYXp5O1O8V12x' => 
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
        'as' => 'generated::Eh8aYXp5O1O8V12x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R6IKVELdipjU8Hs2' => 
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
        'as' => 'generated::R6IKVELdipjU8Hs2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MtlYioZcUkviWNfw' => 
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
        'as' => 'generated::MtlYioZcUkviWNfw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vFjxwwkAREeuTsw5' => 
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
        'as' => 'generated::vFjxwwkAREeuTsw5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3uFdr3o4JRlcJQGP' => 
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
        'as' => 'generated::3uFdr3o4JRlcJQGP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2IrwsPFo9Y3O9uJL' => 
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
        'as' => 'generated::2IrwsPFo9Y3O9uJL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0GP9DRhZqCYdvbvb' => 
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
        'as' => 'generated::0GP9DRhZqCYdvbvb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JQD9A4uRpq1hzpyr' => 
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
        'as' => 'generated::JQD9A4uRpq1hzpyr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2qdQGq0cgxNQgea4' => 
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
        'as' => 'generated::2qdQGq0cgxNQgea4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Oc43FX7iNZLMjzCa' => 
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
        'as' => 'generated::Oc43FX7iNZLMjzCa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::75eNk3uesabPZUtv' => 
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
        'as' => 'generated::75eNk3uesabPZUtv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xG1zpzyvQSBPIuJJ' => 
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
        'as' => 'generated::xG1zpzyvQSBPIuJJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hgLkpnrsmY3InQjE' => 
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
        'as' => 'generated::hgLkpnrsmY3InQjE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JO2fXL4U1tzhA3Ey' => 
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
        'as' => 'generated::JO2fXL4U1tzhA3Ey',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KLfLdUHIy7QyUV50' => 
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
        'as' => 'generated::KLfLdUHIy7QyUV50',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0DO372bwBqU1Pyzi' => 
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
        'as' => 'generated::0DO372bwBqU1Pyzi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eV9I8KFWuOH4byGQ' => 
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
        'as' => 'generated::eV9I8KFWuOH4byGQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::edTrkZlWxlIPTvek' => 
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
        'as' => 'generated::edTrkZlWxlIPTvek',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i393FKCykx6rK9Ie' => 
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
        'as' => 'generated::i393FKCykx6rK9Ie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WWFzuwrTOVLxQhTE' => 
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
        'as' => 'generated::WWFzuwrTOVLxQhTE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F3C9OOrz3O0wxsM7' => 
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
        'as' => 'generated::F3C9OOrz3O0wxsM7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2gelw3NkIe7K073n' => 
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
        'as' => 'generated::2gelw3NkIe7K073n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TlHVIFxc6AW8lC7o' => 
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
        'as' => 'generated::TlHVIFxc6AW8lC7o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5GnQGf5Ob4R7xr1T' => 
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
        'as' => 'generated::5GnQGf5Ob4R7xr1T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7Tu49R7LEuHWSaRC' => 
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
        'as' => 'generated::7Tu49R7LEuHWSaRC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rx3B7ErXOJKWg6Dp' => 
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
        'as' => 'generated::rx3B7ErXOJKWg6Dp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NxzEIMyfpWNj3Y8y' => 
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
        'as' => 'generated::NxzEIMyfpWNj3Y8y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5PygzZ7DIOYIYfB1' => 
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
        'as' => 'generated::5PygzZ7DIOYIYfB1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l4POHEExO3IxVOKz' => 
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
        'as' => 'generated::l4POHEExO3IxVOKz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jkWGFOuUZPPjp3TM' => 
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
        'as' => 'generated::jkWGFOuUZPPjp3TM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OKWmHm7eVzTiXm89' => 
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
        'as' => 'generated::OKWmHm7eVzTiXm89',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mBWSzTAo4mAVu7Du' => 
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
        'as' => 'generated::mBWSzTAo4mAVu7Du',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5mADIwn1fq0c4SPc' => 
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
        'as' => 'generated::5mADIwn1fq0c4SPc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5vakm9O2kti5srkP' => 
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
        'as' => 'generated::5vakm9O2kti5srkP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xa64EPrtaG7mmiKD' => 
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
        'as' => 'generated::xa64EPrtaG7mmiKD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4bJbSP856ekfXJlA' => 
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
        'as' => 'generated::4bJbSP856ekfXJlA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::520hKPv7xCZEisnH' => 
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
        'as' => 'generated::520hKPv7xCZEisnH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b0pkyaudKvkDNCS2' => 
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
        'as' => 'generated::b0pkyaudKvkDNCS2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z1Cd9Tt6h5En3aoV' => 
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
        'as' => 'generated::Z1Cd9Tt6h5En3aoV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qOCWNXpU9fg6JyY9' => 
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
        'as' => 'generated::qOCWNXpU9fg6JyY9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Knu8xWcftMzaOdf9' => 
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
        'as' => 'generated::Knu8xWcftMzaOdf9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qJcq0KtJ0EHEHYpo' => 
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
        'as' => 'generated::qJcq0KtJ0EHEHYpo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kgHDIxCQPVLzHKpu' => 
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
        'as' => 'generated::kgHDIxCQPVLzHKpu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cu3VE0DJmWDJVuEV' => 
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
        'as' => 'generated::cu3VE0DJmWDJVuEV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tMzsBFtJrlZvHggR' => 
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
        'as' => 'generated::tMzsBFtJrlZvHggR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6EmXGo3z8cBuGLxR' => 
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
        'as' => 'generated::6EmXGo3z8cBuGLxR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lfRYAnX8fAGOA2Nq' => 
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
        'as' => 'generated::lfRYAnX8fAGOA2Nq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BkwsiViQtK1f2ZOs' => 
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
        'as' => 'generated::BkwsiViQtK1f2ZOs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ylnDdhs6uH4bQUdk' => 
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
        'as' => 'generated::ylnDdhs6uH4bQUdk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FT59Z3eFOe584C5r' => 
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
        'as' => 'generated::FT59Z3eFOe584C5r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mzWEu0feLUePxMoG' => 
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
        'as' => 'generated::mzWEu0feLUePxMoG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tZiN2a8vaFyqKm1V' => 
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
        'as' => 'generated::tZiN2a8vaFyqKm1V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cpfmtz2jxNJQI9SX' => 
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
        'as' => 'generated::Cpfmtz2jxNJQI9SX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D2xpk4skodkKwZoU' => 
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
        'as' => 'generated::D2xpk4skodkKwZoU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cAc8NtT3VAt9ivMf' => 
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
        'as' => 'generated::cAc8NtT3VAt9ivMf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P7d9bGHS24pym2uH' => 
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
        'as' => 'generated::P7d9bGHS24pym2uH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k6QdbTUtebxDBq5K' => 
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
        'as' => 'generated::k6QdbTUtebxDBq5K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::02q0oLVfFoH8fZTD' => 
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
        'as' => 'generated::02q0oLVfFoH8fZTD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IOiYC2D8qWuY2ETX' => 
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
        'as' => 'generated::IOiYC2D8qWuY2ETX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uJRgxRNtlXElvj0j' => 
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
        'as' => 'generated::uJRgxRNtlXElvj0j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d5pO6b3xt14m9q6s' => 
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
        'as' => 'generated::d5pO6b3xt14m9q6s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fKcuJ6ImUN31bQh6' => 
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
        'as' => 'generated::fKcuJ6ImUN31bQh6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gjIUBLsdlaEsywsf' => 
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
        'as' => 'generated::gjIUBLsdlaEsywsf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8TePu85J5wM2jHpd' => 
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
        'as' => 'generated::8TePu85J5wM2jHpd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Cgfd0GT2h4lTgSP' => 
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
        'as' => 'generated::5Cgfd0GT2h4lTgSP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YL65V1LKaarJRSCU' => 
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
        'as' => 'generated::YL65V1LKaarJRSCU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nVmcC4UjCNdSBQne' => 
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
        'as' => 'generated::nVmcC4UjCNdSBQne',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eotR3xE3ErKKFl4I' => 
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
        'as' => 'generated::eotR3xE3ErKKFl4I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UciLsusLBeaNn1w6' => 
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
        'as' => 'generated::UciLsusLBeaNn1w6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gbOHn2FeBwNPVAve' => 
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
        'as' => 'generated::gbOHn2FeBwNPVAve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g6mCQ1g0h3n6iD5w' => 
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
        'as' => 'generated::g6mCQ1g0h3n6iD5w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BQCqcIRWcQtzey5f' => 
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
        'as' => 'generated::BQCqcIRWcQtzey5f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ALPhLfNWUrU1NytX' => 
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
        'as' => 'generated::ALPhLfNWUrU1NytX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dVH9cctKjbT5NbyF' => 
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
        'as' => 'generated::dVH9cctKjbT5NbyF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3gM6zB0jmQjHbBwk' => 
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
        'as' => 'generated::3gM6zB0jmQjHbBwk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zm8gQYW8ouBWQz9v' => 
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
        'as' => 'generated::zm8gQYW8ouBWQz9v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0SFloNNgRTXB3Isg' => 
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
        'as' => 'generated::0SFloNNgRTXB3Isg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T4BCmFIPdRGanXmm' => 
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
        'as' => 'generated::T4BCmFIPdRGanXmm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KetYHpKwrW7eYfGA' => 
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
        'as' => 'generated::KetYHpKwrW7eYfGA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3dJXk8QvnkeSp76v' => 
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
        'as' => 'generated::3dJXk8QvnkeSp76v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jKxG3GbHnTxyGsln' => 
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
        'as' => 'generated::jKxG3GbHnTxyGsln',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GvEBJQNVHceFT9gT' => 
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
        'as' => 'generated::GvEBJQNVHceFT9gT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bt64REP9dp96GuiZ' => 
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
        'as' => 'generated::Bt64REP9dp96GuiZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J2rnjDIcSu8V9Gry' => 
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
        'as' => 'generated::J2rnjDIcSu8V9Gry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RGChi6qcXbseX88X' => 
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
        'as' => 'generated::RGChi6qcXbseX88X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ls7mmJwCljYDabth' => 
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
        'as' => 'generated::ls7mmJwCljYDabth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WhLarHVqAq8L5m82' => 
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
        'as' => 'generated::WhLarHVqAq8L5m82',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zFeq4qSmR1lix3on' => 
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
        'as' => 'generated::zFeq4qSmR1lix3on',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ig3F7aEXqeokNRpU' => 
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
        'as' => 'generated::Ig3F7aEXqeokNRpU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AQ4OmncoGgv8Qinp' => 
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
        'as' => 'generated::AQ4OmncoGgv8Qinp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hBWTpifvxncwyWsp' => 
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
        'as' => 'generated::hBWTpifvxncwyWsp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uNkmUBYFaJTC9scg' => 
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
        'as' => 'generated::uNkmUBYFaJTC9scg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y2uwpaoFn6sngLMm' => 
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
        'as' => 'generated::Y2uwpaoFn6sngLMm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s6aIteyf6TvMo4Xj' => 
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
        'as' => 'generated::s6aIteyf6TvMo4Xj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H5MnMEOxFqSsJA8P' => 
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
        'as' => 'generated::H5MnMEOxFqSsJA8P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wVW4PixrPdi7ovqA' => 
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
        'as' => 'generated::wVW4PixrPdi7ovqA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z281XP9UUhi7GCui' => 
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
        'as' => 'generated::Z281XP9UUhi7GCui',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TdFC10qcYujwhLia' => 
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
        'as' => 'generated::TdFC10qcYujwhLia',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lLW3LsOsZEn7dU2A' => 
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
        'as' => 'generated::lLW3LsOsZEn7dU2A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pknPaFVIht7uyMKu' => 
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
        'as' => 'generated::pknPaFVIht7uyMKu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W8EPC8kOCXQ4eJH4' => 
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
        'as' => 'generated::W8EPC8kOCXQ4eJH4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QToaeS13Dh0VRwYT' => 
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
        'as' => 'generated::QToaeS13Dh0VRwYT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uqPfQWnjbXVyOFVu' => 
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
        'as' => 'generated::uqPfQWnjbXVyOFVu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8OGbLDPaJDCrYntZ' => 
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
        'as' => 'generated::8OGbLDPaJDCrYntZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nv1oCqekJI9TOzBj' => 
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
        'as' => 'generated::Nv1oCqekJI9TOzBj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3fyfw30kHWoZRHJ1' => 
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
        'as' => 'generated::3fyfw30kHWoZRHJ1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1NquebuDOCUsLQrx' => 
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
        'as' => 'generated::1NquebuDOCUsLQrx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::klFLgWHDkZpKYss9' => 
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
        'as' => 'generated::klFLgWHDkZpKYss9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ctwlU3XeH7StK0Wt' => 
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
        'as' => 'generated::ctwlU3XeH7StK0Wt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KTbytIKaJNDSWn1E' => 
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
        'as' => 'generated::KTbytIKaJNDSWn1E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3fUhal4NyDgpDStX' => 
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
        'as' => 'generated::3fUhal4NyDgpDStX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0jiLXbl7xzHHC3gz' => 
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
        'as' => 'generated::0jiLXbl7xzHHC3gz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sk3bwudHcieoHAe6' => 
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
        'as' => 'generated::Sk3bwudHcieoHAe6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2nK9eb4F1UH1q3jr' => 
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
        'as' => 'generated::2nK9eb4F1UH1q3jr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oIc5ZRuAYqieqDN1' => 
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
        'as' => 'generated::oIc5ZRuAYqieqDN1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XxOSpnWWU3f7AO7B' => 
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
        'as' => 'generated::XxOSpnWWU3f7AO7B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jAFcwI1kohzUq5qE' => 
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
        'as' => 'generated::jAFcwI1kohzUq5qE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y12tuhO9IPjTT5ji' => 
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
        'as' => 'generated::y12tuhO9IPjTT5ji',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rKyF1CAD7BCDH3wk' => 
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
        'as' => 'generated::rKyF1CAD7BCDH3wk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::khUoqUsiPt3OlqOW' => 
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
        'as' => 'generated::khUoqUsiPt3OlqOW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OrASnleL9WwFVBVj' => 
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
        'as' => 'generated::OrASnleL9WwFVBVj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ad3op1L7y4rayktO' => 
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
        'as' => 'generated::Ad3op1L7y4rayktO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MFIOUDT1AD8197SB' => 
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
        'as' => 'generated::MFIOUDT1AD8197SB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IEpQXopGgO3P0ng8' => 
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
        'as' => 'generated::IEpQXopGgO3P0ng8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zLL1lB8aEqBtbX62' => 
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
        'as' => 'generated::zLL1lB8aEqBtbX62',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::URMu57dlA3U0maiJ' => 
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
        'as' => 'generated::URMu57dlA3U0maiJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QWUSvq6QHbJowmmS' => 
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
        'as' => 'generated::QWUSvq6QHbJowmmS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AUEaxHNRBfhMDYma' => 
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
        'as' => 'generated::AUEaxHNRBfhMDYma',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dy1qKeu1PhYMqWsA' => 
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
        'as' => 'generated::Dy1qKeu1PhYMqWsA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wvFPcjwNUHfzDRbC' => 
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
        'as' => 'generated::wvFPcjwNUHfzDRbC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::numPyxy11EIiIRj1' => 
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
        'as' => 'generated::numPyxy11EIiIRj1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gAkPPqxRx18i4Nua' => 
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
        'as' => 'generated::gAkPPqxRx18i4Nua',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bour0wEXb8sPjMtJ' => 
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
        'as' => 'generated::Bour0wEXb8sPjMtJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xAm2JqWdoP4vmFzq' => 
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
        'as' => 'generated::xAm2JqWdoP4vmFzq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YQqqMiNrxIMkD5v6' => 
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
        'as' => 'generated::YQqqMiNrxIMkD5v6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J5xgMACY7PJFXvNo' => 
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
        'as' => 'generated::J5xgMACY7PJFXvNo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eGNtijHYPh00UUdC' => 
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
        'as' => 'generated::eGNtijHYPh00UUdC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8qbjQHK9iX0n1my3' => 
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
        'as' => 'generated::8qbjQHK9iX0n1my3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yCvcHe7Pr7NIlQ0O' => 
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
        'as' => 'generated::yCvcHe7Pr7NIlQ0O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P5wjNna25ruBh7t3' => 
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
        'as' => 'generated::P5wjNna25ruBh7t3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E7N0e99chpkSoL5X' => 
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
        'as' => 'generated::E7N0e99chpkSoL5X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wWDCQQH2JDGrXuHz' => 
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
        'as' => 'generated::wWDCQQH2JDGrXuHz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OYp4P3XovTxEuSCU' => 
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
        'as' => 'generated::OYp4P3XovTxEuSCU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vii3xxXvMwuV5gW6' => 
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
        'as' => 'generated::vii3xxXvMwuV5gW6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JlAn02oA5vHD3WKw' => 
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
        'as' => 'generated::JlAn02oA5vHD3WKw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mcNLZBSzu2Hv7rau' => 
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
        'as' => 'generated::mcNLZBSzu2Hv7rau',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ufnwu3t4HUKEQ4aV' => 
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
        'as' => 'generated::ufnwu3t4HUKEQ4aV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q4wyAJJFmzR8qJkd' => 
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
        'as' => 'generated::Q4wyAJJFmzR8qJkd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gvxjSQpWEvUZ0mFK' => 
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
        'as' => 'generated::gvxjSQpWEvUZ0mFK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::osgpmPQ5MAAKRpzW' => 
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
        'as' => 'generated::osgpmPQ5MAAKRpzW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vkYCDWpkNx4hkhXw' => 
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
        'as' => 'generated::vkYCDWpkNx4hkhXw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VVdjzn2D5Is9ofH1' => 
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
        'as' => 'generated::VVdjzn2D5Is9ofH1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9o8vmsUV48eYoBfA' => 
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
        'as' => 'generated::9o8vmsUV48eYoBfA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EspT3Vf5NppRwX5R' => 
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
        'as' => 'generated::EspT3Vf5NppRwX5R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MIbkYJijCciEUVyN' => 
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
        'as' => 'generated::MIbkYJijCciEUVyN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5BEiJgXMKV6lm5Ru' => 
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
        'as' => 'generated::5BEiJgXMKV6lm5Ru',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ADOvzAe4X65gyE5F' => 
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
        'as' => 'generated::ADOvzAe4X65gyE5F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yw22myZpyRdUbSSK' => 
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
        'as' => 'generated::yw22myZpyRdUbSSK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AI1nODbddFgltsFE' => 
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
        'as' => 'generated::AI1nODbddFgltsFE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N2DZQKY6QUZGCXUU' => 
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
        'as' => 'generated::N2DZQKY6QUZGCXUU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5V2Ihcf6YYiUwBHx' => 
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
        'as' => 'generated::5V2Ihcf6YYiUwBHx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c3USOBajQmApuRXt' => 
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
        'as' => 'generated::c3USOBajQmApuRXt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TmuLAXxqjZAVTVs7' => 
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
        'as' => 'generated::TmuLAXxqjZAVTVs7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aIHvAxTJRy6koIXc' => 
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
        'as' => 'generated::aIHvAxTJRy6koIXc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4NKlU9PtIbeQAQJo' => 
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
        'as' => 'generated::4NKlU9PtIbeQAQJo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fnNJ3hfFyKue1pnJ' => 
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
        'as' => 'generated::fnNJ3hfFyKue1pnJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y9kGFyw4o52ZmGpp' => 
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
        'as' => 'generated::Y9kGFyw4o52ZmGpp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uU6clsfnPNJd3bf7' => 
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
        'as' => 'generated::uU6clsfnPNJd3bf7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Bd2SiCBJJ2CAwNx' => 
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
        'as' => 'generated::4Bd2SiCBJJ2CAwNx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f0rfXSHtP20ZsETH' => 
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
        'as' => 'generated::f0rfXSHtP20ZsETH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bg6lICFMWxjatMkK' => 
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
        'as' => 'generated::Bg6lICFMWxjatMkK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RbDB60dcgg3gslbv' => 
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
        'as' => 'generated::RbDB60dcgg3gslbv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hSFzNCP31DXWeOau' => 
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
        'as' => 'generated::hSFzNCP31DXWeOau',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P4t4WV4vqdudZDfB' => 
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
        'as' => 'generated::P4t4WV4vqdudZDfB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OiBIjqtYf33eMCBv' => 
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
        'as' => 'generated::OiBIjqtYf33eMCBv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xTEm7SBUCMqGGi5M' => 
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
        'as' => 'generated::xTEm7SBUCMqGGi5M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::abMJ7nFY27kPaMgm' => 
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
        'as' => 'generated::abMJ7nFY27kPaMgm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AfTkExv8ubH70D1W' => 
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
        'as' => 'generated::AfTkExv8ubH70D1W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z4UPZxmPclXA7y3Z' => 
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
        'as' => 'generated::z4UPZxmPclXA7y3Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c4DLin6IyTc8GsSW' => 
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
        'as' => 'generated::c4DLin6IyTc8GsSW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H7nw9fRLMgGsNCtQ' => 
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
        'as' => 'generated::H7nw9fRLMgGsNCtQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WbK24iNxb2t2wnJV' => 
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
        'as' => 'generated::WbK24iNxb2t2wnJV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PckeLnMaupS3grYr' => 
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
        'as' => 'generated::PckeLnMaupS3grYr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wV0c8xr0oYWJkH3C' => 
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
        'as' => 'generated::wV0c8xr0oYWJkH3C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nbuoys0ZQNj3wt6B' => 
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
        'as' => 'generated::Nbuoys0ZQNj3wt6B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KQGpnZuqCg7wFEpR' => 
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
        'as' => 'generated::KQGpnZuqCg7wFEpR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wIocRLzZSTNADtm7' => 
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
        'as' => 'generated::wIocRLzZSTNADtm7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YEpblfAm7pXzKPtK' => 
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
        'as' => 'generated::YEpblfAm7pXzKPtK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NYEp51vpuDxzENGD' => 
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
        'as' => 'generated::NYEp51vpuDxzENGD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mcecV6vxkhfyGBIm' => 
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
        'as' => 'generated::mcecV6vxkhfyGBIm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tSaqCsuIE93SdRbG' => 
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
        'as' => 'generated::tSaqCsuIE93SdRbG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y3toeaYEZYh59MSh' => 
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
        'as' => 'generated::Y3toeaYEZYh59MSh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tUKs3AZAYUu2q3oD' => 
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
        'as' => 'generated::tUKs3AZAYUu2q3oD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XyFrVXyYh1TUrKSk' => 
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
        'as' => 'generated::XyFrVXyYh1TUrKSk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9ysdSkUSRezU8L7x' => 
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
        'as' => 'generated::9ysdSkUSRezU8L7x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XgOCVRRWAaP3tOwE' => 
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
        'as' => 'generated::XgOCVRRWAaP3tOwE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A0RgJUPOUYwTuycE' => 
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
        'as' => 'generated::A0RgJUPOUYwTuycE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aF5TPAsfU59tHtLU' => 
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
        'as' => 'generated::aF5TPAsfU59tHtLU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o2avC9SjVU6md7a8' => 
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
        'as' => 'generated::o2avC9SjVU6md7a8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oHpX3d3Fi0SBGKKU' => 
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
        'as' => 'generated::oHpX3d3Fi0SBGKKU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w1XRIpXk1rDWKEVV' => 
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
        'as' => 'generated::w1XRIpXk1rDWKEVV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MPpGQzFOYIpsBi7g' => 
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
        'as' => 'generated::MPpGQzFOYIpsBi7g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sAHRaNOb9dR54OQY' => 
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
        'as' => 'generated::sAHRaNOb9dR54OQY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ArbGWXeT512LO5Og' => 
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
        'as' => 'generated::ArbGWXeT512LO5Og',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mLEab6WE11pYsalq' => 
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
        'as' => 'generated::mLEab6WE11pYsalq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WEY50CzKbVIYxN5h' => 
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
        'as' => 'generated::WEY50CzKbVIYxN5h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lxt2UN2X4rjRPFn6' => 
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
        'as' => 'generated::lxt2UN2X4rjRPFn6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wLrFuPtlBYJeNwYl' => 
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
        'as' => 'generated::wLrFuPtlBYJeNwYl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qrqjAhS9rYwe5Wwb' => 
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
        'as' => 'generated::qrqjAhS9rYwe5Wwb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TpC9pZwnaU7GXarm' => 
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
        'as' => 'generated::TpC9pZwnaU7GXarm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lzLFYjvStgrBFfEM' => 
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
        'as' => 'generated::lzLFYjvStgrBFfEM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::807hi3HVxAW8KGeq' => 
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
        'as' => 'generated::807hi3HVxAW8KGeq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vh9paSIhsfO4qjXo' => 
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
        'as' => 'generated::vh9paSIhsfO4qjXo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s4BKB7UjBKtmPly1' => 
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
        'as' => 'generated::s4BKB7UjBKtmPly1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6HUdrEBFyTbhnw0u' => 
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
        'as' => 'generated::6HUdrEBFyTbhnw0u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qs0CIzIae2XFLs7j' => 
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
        'as' => 'generated::qs0CIzIae2XFLs7j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XLiMFjnAKoxody9G' => 
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
        'as' => 'generated::XLiMFjnAKoxody9G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::57oYQ3SavdWhopZN' => 
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
        'as' => 'generated::57oYQ3SavdWhopZN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jzcT28D9B9IuB3RU' => 
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
        'as' => 'generated::jzcT28D9B9IuB3RU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bAxJuFzT7sysRevj' => 
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
        'as' => 'generated::bAxJuFzT7sysRevj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::64Aywen33AwSfVxI' => 
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
        'as' => 'generated::64Aywen33AwSfVxI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3BKUFEBzDFrk12KL' => 
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
        'as' => 'generated::3BKUFEBzDFrk12KL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cNDHggnHDuTTThGn' => 
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
        'as' => 'generated::cNDHggnHDuTTThGn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0YvHQQtcDwBBs000' => 
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
        'as' => 'generated::0YvHQQtcDwBBs000',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zEfC324ipMbip59h' => 
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
        'as' => 'generated::zEfC324ipMbip59h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5EjtB3ka801iUNbL' => 
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
        'as' => 'generated::5EjtB3ka801iUNbL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tPk3oK5j9zdFYC0U' => 
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
        'as' => 'generated::tPk3oK5j9zdFYC0U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LfRfABrDkArNAes9' => 
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
        'as' => 'generated::LfRfABrDkArNAes9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7HaDk48JSKcaLCWX' => 
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
        'as' => 'generated::7HaDk48JSKcaLCWX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
