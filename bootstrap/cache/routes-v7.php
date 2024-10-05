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
            '_route' => 'generated::79j7bFceeYqYM2Vj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6a9ieMcNwHs5wpSR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WUsWzuphcJveQ9Ju',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tLnfAQteSWEUex1y',
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
            '_route' => 'generated::0oBEH2FqRzuPho1S',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KPlulVV7L34XBc8v',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::myB5GihD0QoYQ9s0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4M581Pnk8wSUR4se',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::S3MvNQtixJciN0VE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ql424S7op56SAgT0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XzK0aDABxyUtZvwK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uUFSysMzowaLsLjl',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ne4YJwLVuRF6waEV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::h8QL4JaB0TSptjLa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IowgakE8yeijKqlu',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kXgdG0jWcpVzWcdk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::G8b1ptWWxiXHtkRV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::P6RLWtK0TokPEPFU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dFciaKmaUSpyqE4Q',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::48PMQOw6myBYXbfZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ItMfaHbwSDTz97gm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PEVCar6wmAvYRxRQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dIvRgQqNQ5H1hKaT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ptkXsHyYqpBXSHDO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::P2Ldp52Q4pT2UQvq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9fXk33xGgJOsR8oO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7VXyrDgEVow0EcZw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Bl037wnkScpFWKm4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aPC8zPftVNpWHaaX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AbuRNwz99w7XT4Bx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lVRcZ4fotey1H01k',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::387vWatJZkqg9cfq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::h4Gbi1cks2nYd3yl',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oARqAmny5CNtWp0n',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::v4zNxkdlwMiD5RI0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jbRugrK7yYaNkVnD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xFpuBKua1zBHHYRU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MGjy7JKhW30Stfge',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7wsZL5fIbdrVVwGZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jaupkB7ciCaqKRU5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::v7zW71rLNIJdsIlV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::32HTdHhSIitKioTV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lTJplBw8niRyfAlU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8YVwJyTff6Sr8tX0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WR82gW2I5Mo4RU8V',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pYTlVFhk5yaYqXG9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::UoeBGXqv38IqbPdO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::EBPdwsRlhRPtq1MS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xv3FrkYT8WmdvS7R',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ip92Cnk78NRXfg4X',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HE7Fi9dmPZg1EIMe',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::APGCvDn2sVVoshBD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LbMvUcneG5UVuZiK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pVcwp6igximdlYv9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jueyryeCvnicj9cs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cVOean8ZpdPPj3xw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::g7zRblh6DkW37BG9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pfcTpz9a3Epw3BSN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::q4lhkr77hxOIef6T',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ezjFeaPfNifW8zsJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VgiApkKtVyQLVjh8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TW4Pj8b9ZkREHy51',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AR2xoqkKL8ONn9zT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CNi2lnZAyJbqzCLM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vxaqUeGvpBIVTy2i',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ftoB8AlZHdK2c2Iz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::a369U2COcRTZRIB4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4ESMickz6vGPWxVM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7RDKQFliL3DV2bZK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DeyB1ZsLjSwTCuXO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1hgiyIILIN2KbOiV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::v9E1tlWlMuGhWPk1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kQgbxYRu0sCHh5Ob',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OeRzELkmiLjCBErh',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CaYSAwGgvs4iD5bg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Skcuvwzol5rAjVOn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xdygLsO0IrkF7X8x',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mQUoiCfSHx7kT8Am',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aSxBqrWZBIFQc5vV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lV8kJwomfhmjgGi1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::UzFg5B39RE6VXldM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7lEk3BlAvNguIXQ1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Qh1iFuvKsCV38sfV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ioMR8oka3RSgor6i',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MbG6JB8f1WgLHGpC',
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
            '_route' => 'generated::Kt8Ize9LV2QpW63e',
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
            '_route' => 'generated::VZubor2YDbaLsmUL',
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
            '_route' => 'generated::BsaEGsm2wYZZeskg',
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
            '_route' => 'generated::LX5mHlTbvNbJ8sHn',
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
            '_route' => 'generated::ygACeQpoXwcyWxcT',
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
            '_route' => 'generated::R4vA3qDBU1Yq6XPX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VwC9raI4CO7ECG80',
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
            '_route' => 'generated::ZSaevfHrzsAzk230',
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
            '_route' => 'generated::ujDpqW6qfXqICmuD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kyO4QwXMQB62Hb1T',
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
            '_route' => 'generated::QsLVdx5sznYseNWs',
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
            '_route' => 'generated::aG6RDecCLtZdrYFj',
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
            '_route' => 'generated::9DOAbVqIkuHqlnHn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::u8NNm17NjOcuuo6l',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1xDqMqeyopiWV5gJ',
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
            '_route' => 'generated::ndHvlo37RwxY4VpE',
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
            '_route' => 'generated::refLKoEoAh29Ksec',
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
            '_route' => 'generated::aeRivRz6LRj0xo3n',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pgdD29QUoLxh7rKC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::s8zG7RANh3OPlSHG',
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
            '_route' => 'generated::iKZvqqUNyoEG2wV0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YocseBp40EwDa5HG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::J99wO1m8LpKzMIzz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5YSjFjCmAB2OYi9P',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9FabQ8FQsXl2W1G7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::74oATAK3Z0UUzd2a',
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
            '_route' => 'generated::UWjuqqRM5SFJZmey',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::u9pR2SjaIzl15k24',
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
            '_route' => 'generated::5ON7Aqca9IJSySDs',
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
            '_route' => 'generated::mctAOFfENafoj5yh',
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
            '_route' => 'generated::JhJllTYORrhwHp71',
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
            '_route' => 'generated::0y55TJ7xRwjgYJjp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nnt9NpvsFdbI0OI6',
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
            '_route' => 'generated::fW0jysMmBk57AItS',
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
            '_route' => 'generated::VXZKthm6pXGUWk2i',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::UIQv8vT2oRJ8pR3H',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::F7oueQbwIoQVbM03',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9gR4SHySNsBGuwoe',
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
            '_route' => 'generated::QSl12zRg2odBcxNH',
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
            '_route' => 'generated::pq1FKRFyK3hfFOWc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ycpw94t2tKr2he3x',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Q3XXmNQfIQYNZNz4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rAcdhHa7JEa7FhEa',
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
            '_route' => 'generated::41ned2mLfsck5c4X',
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
            '_route' => 'generated::olmbv78Qri73nUCJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oPLWhPQYrj5LmwmC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dVcoOzUfp6N86Hxz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3C5UY2ZKdfLvWb6n',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QG7b1WtSPLRQXw3U',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rAtyqQoCoYzs1OUy',
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
            '_route' => 'generated::WGPJCw1xaN3wmtJt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wWJEoJc0cbOjI20E',
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
            '_route' => 'generated::SPeNmyzukQA0sw44',
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
            '_route' => 'generated::2wJX6nrISJyWQK03',
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
            '_route' => 'generated::klZgxZ0MHfF3ZqF4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5GCU0XSybwpiNeHv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JPl9FGurGvPa19SE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0s1KVWt6umYW3W6t',
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
            '_route' => 'generated::g3IAlmsyuQintlxt',
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
            '_route' => 'generated::L7A9mf3M15XIhnlL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ryqpuTUnNuqPYUCe',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0r7Ew2fb7vfZuLF1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1lqLtXxw8dvjSIcE',
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
            '_route' => 'generated::ktE6uxFGl9GnwrzB',
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
            '_route' => 'generated::la6mDqIAEdwhzmn1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MAsOJLFjdd0uZab8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::iK1HGZYS5eelzjcZ',
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
            '_route' => 'generated::CZVG6ooVXQpZdS33',
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
            '_route' => 'generated::RmRDxKZzP1abJxeT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SquAMh1BvMncTcSj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zZny3fAI6qRoLsDV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::77GANsTOc7JKX5Uj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9gVY6eCNxE0sdM2O',
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
            '_route' => 'generated::N7g5DUGgiuzUwDej',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RAJ5qf2PCFwkZu0s',
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
            '_route' => 'generated::aEbsCMvepov9ey9Y',
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
            '_route' => 'generated::iA8wdCGwwM2zQ4rY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mQ8t7lHLKntZmPzh',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::W5D8bkqImiOh8fDQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xwlBLFWKWK8QGS5q',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::V6BKhbQsIQOL42Ys',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::C9xiGSvRTKc7GhWs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RIJrRpILyiDzMMYr',
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
            '_route' => 'generated::ZCQ5UzZZWz9SCR52',
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
            '_route' => 'generated::4yAYD6pi2y5Ya9Z5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nm2i8ngnv804n8cc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QRv55dKUXKOkPWHR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Mslx3rpYqIt4Mb9j',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aq0CGn4AE7wQTFwc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3hGV6tv5q5Vaf0OG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::f3xO5WoJFW4a28OY',
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
            '_route' => 'generated::hHkgQ0wbQ6JX2znt',
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
            '_route' => 'generated::E9DyYAQMqiWYnHNl',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zS0rhOtKcysZtcf5',
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
            '_route' => 'generated::wjxPUizLgt7iD1w3',
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
            '_route' => 'generated::MHnEUuFb3qy5GTJ6',
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
            '_route' => 'generated::ypaJTRxYRj1Nhr5q',
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
            '_route' => 'generated::3WD24IXPoww2jN7U',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RXUWTeY92qDWPgUZ',
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
            '_route' => 'generated::WwbMsW9E2xQVAlTQ',
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
            '_route' => 'generated::TYr8HFfJWE3JZ1Oq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NpxXXITe3whAkMB3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::B449JCtoaRcnEg90',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hrrPudIh5qJ6MoVX',
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
            '_route' => 'generated::Ty9xzNkgFK6To555',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WMD1aGiM8GWxXwkh',
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
            '_route' => 'generated::2fsR25CByP9jRjLg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::h7kcMnekGKq3cN1L',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::i65q3h22v5Cejiyb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gQR5XnT0y8kZDRZ3',
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
            '_route' => 'generated::DRNgs8NOEJhlb2Na',
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
            '_route' => 'generated::MEHaKkTrGI24GNXV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ykxtSVameIheCf1c',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fDHnxfGehomw2Fdp',
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
            '_route' => 'generated::QT1hFhZdkqSa6JZV',
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
            '_route' => 'generated::qp5Kwq9Y4rRRpsQp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::irjOuBCe1uyAndcA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tflWawaq76eh5wnn',
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
            '_route' => 'generated::DMs4CiIXGaNfXV5h',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BFHyvERMOGDh1N26',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SviGoyzT00a9UVik',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hE0MttJVF09fFdij',
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
            '_route' => 'generated::JJaKe9rpoqCYtnwH',
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
            '_route' => 'generated::MhkTI9Hw9VKS6GfR',
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
            '_route' => 'generated::K9eknV88GJJBClvk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GokysjeSRQhwM5XE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ng050na3ZZoljNfP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kI66gYrtyPt97uPt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LD2Q2vbvYwJ42Vdr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::iKaATDuhhnnHcChQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Zpg0Nivc0yckuDPb',
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
            '_route' => 'generated::OJd4uMfGaFnL9hR0',
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
            '_route' => 'generated::WprPVlxDyDqo3gQb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5cwgKA7FnV23KI6I',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4hSP2pncuL1X8cSY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::veox20PPUZ33b5TY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zirZzbSZscGXVRjZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yRSoezGS5AEfvcK5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fn4qA0yEsjMx9L5u',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::sg6xgEWU7cji7SA6',
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
            '_route' => 'generated::97eUmbxQoyks4iSc',
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
            '_route' => 'generated::e9FX557lgYurFhRw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nMmeoQrXRwOsULtT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vFFsAnyGdyrcD45A',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dd9Bc7xNMdNTE81e',
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
            '_route' => 'generated::oP4mNPhEcawq9YG3',
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
            '_route' => 'generated::WvqYL2eGJ3bcEK9N',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NXLagojNDnkOGOpj',
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
            '_route' => 'generated::3JoJ6QLcQj5CACW6',
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
            '_route' => 'generated::LPMGy6Q76HViRJgv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Q8CouY0fa15ybV7R',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QfXTFvjy5aGpdQtf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ghdoaiUZeeul5i4i',
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
            '_route' => 'generated::fgf85B7JUfA8nb9P',
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
            '_route' => 'generated::6Jm5IcUIAYa5dtbm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1MaA2PFTnWwKVAwD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::eYirwgwm7FxqGs8y',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::R0wtH8VEPRysoXsd',
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
            '_route' => 'generated::lL1mCe3N66fFPLY6',
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
            '_route' => 'generated::DMlUZCFVkJ7Og0OI',
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
            '_route' => 'generated::ywUA5r1y7kGSil8P',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::byTWna70R1hSGDkq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IqxnoJwFkGbl7Upl',
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
            '_route' => 'generated::KW4iPjLRzkuQaeEd',
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
            '_route' => 'generated::CkiVcRxYTLpdTEex',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9ArFVkqIqUrGvvl3',
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
            '_route' => 'generated::0hNvITDPuHC6Gy1H',
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
            '_route' => 'generated::OPtmEF7QitIgaCHe',
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
            '_route' => 'generated::YaXXIxUm9KRVJC1H',
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
            '_route' => 'generated::noaB2HVpqzW2vSLn',
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
            '_route' => 'generated::iX2pDy1jJqb8Wgmg',
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
    'generated::79j7bFceeYqYM2Vj' => 
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
        'as' => 'generated::79j7bFceeYqYM2Vj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6a9ieMcNwHs5wpSR' => 
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
        'as' => 'generated::6a9ieMcNwHs5wpSR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WUsWzuphcJveQ9Ju' => 
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
        'as' => 'generated::WUsWzuphcJveQ9Ju',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tLnfAQteSWEUex1y' => 
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
        'as' => 'generated::tLnfAQteSWEUex1y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0oBEH2FqRzuPho1S' => 
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
        'as' => 'generated::0oBEH2FqRzuPho1S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KPlulVV7L34XBc8v' => 
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
        'as' => 'generated::KPlulVV7L34XBc8v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::myB5GihD0QoYQ9s0' => 
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
        'as' => 'generated::myB5GihD0QoYQ9s0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4M581Pnk8wSUR4se' => 
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
        'as' => 'generated::4M581Pnk8wSUR4se',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S3MvNQtixJciN0VE' => 
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
        'as' => 'generated::S3MvNQtixJciN0VE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ql424S7op56SAgT0' => 
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
        'as' => 'generated::ql424S7op56SAgT0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XzK0aDABxyUtZvwK' => 
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
        'as' => 'generated::XzK0aDABxyUtZvwK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uUFSysMzowaLsLjl' => 
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
        'as' => 'generated::uUFSysMzowaLsLjl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ne4YJwLVuRF6waEV' => 
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
        'as' => 'generated::ne4YJwLVuRF6waEV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h8QL4JaB0TSptjLa' => 
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
        'as' => 'generated::h8QL4JaB0TSptjLa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IowgakE8yeijKqlu' => 
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
        'as' => 'generated::IowgakE8yeijKqlu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kXgdG0jWcpVzWcdk' => 
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
        'as' => 'generated::kXgdG0jWcpVzWcdk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G8b1ptWWxiXHtkRV' => 
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
        'as' => 'generated::G8b1ptWWxiXHtkRV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P6RLWtK0TokPEPFU' => 
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
        'as' => 'generated::P6RLWtK0TokPEPFU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dFciaKmaUSpyqE4Q' => 
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
        'as' => 'generated::dFciaKmaUSpyqE4Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::48PMQOw6myBYXbfZ' => 
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
        'as' => 'generated::48PMQOw6myBYXbfZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ItMfaHbwSDTz97gm' => 
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
        'as' => 'generated::ItMfaHbwSDTz97gm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PEVCar6wmAvYRxRQ' => 
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
        'as' => 'generated::PEVCar6wmAvYRxRQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dIvRgQqNQ5H1hKaT' => 
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
        'as' => 'generated::dIvRgQqNQ5H1hKaT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ptkXsHyYqpBXSHDO' => 
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
        'as' => 'generated::ptkXsHyYqpBXSHDO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P2Ldp52Q4pT2UQvq' => 
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
        'as' => 'generated::P2Ldp52Q4pT2UQvq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9fXk33xGgJOsR8oO' => 
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
        'as' => 'generated::9fXk33xGgJOsR8oO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7VXyrDgEVow0EcZw' => 
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
        'as' => 'generated::7VXyrDgEVow0EcZw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bl037wnkScpFWKm4' => 
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
        'as' => 'generated::Bl037wnkScpFWKm4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aPC8zPftVNpWHaaX' => 
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
        'as' => 'generated::aPC8zPftVNpWHaaX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AbuRNwz99w7XT4Bx' => 
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
        'as' => 'generated::AbuRNwz99w7XT4Bx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lVRcZ4fotey1H01k' => 
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
        'as' => 'generated::lVRcZ4fotey1H01k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::387vWatJZkqg9cfq' => 
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
        'as' => 'generated::387vWatJZkqg9cfq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h4Gbi1cks2nYd3yl' => 
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
        'as' => 'generated::h4Gbi1cks2nYd3yl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oARqAmny5CNtWp0n' => 
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
        'as' => 'generated::oARqAmny5CNtWp0n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v4zNxkdlwMiD5RI0' => 
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
        'as' => 'generated::v4zNxkdlwMiD5RI0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jbRugrK7yYaNkVnD' => 
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
        'as' => 'generated::jbRugrK7yYaNkVnD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xFpuBKua1zBHHYRU' => 
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
        'as' => 'generated::xFpuBKua1zBHHYRU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MGjy7JKhW30Stfge' => 
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
        'as' => 'generated::MGjy7JKhW30Stfge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7wsZL5fIbdrVVwGZ' => 
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
        'as' => 'generated::7wsZL5fIbdrVVwGZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jaupkB7ciCaqKRU5' => 
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
        'as' => 'generated::jaupkB7ciCaqKRU5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v7zW71rLNIJdsIlV' => 
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
        'as' => 'generated::v7zW71rLNIJdsIlV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::32HTdHhSIitKioTV' => 
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
        'as' => 'generated::32HTdHhSIitKioTV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lTJplBw8niRyfAlU' => 
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
        'as' => 'generated::lTJplBw8niRyfAlU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8YVwJyTff6Sr8tX0' => 
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
        'as' => 'generated::8YVwJyTff6Sr8tX0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WR82gW2I5Mo4RU8V' => 
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
        'as' => 'generated::WR82gW2I5Mo4RU8V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pYTlVFhk5yaYqXG9' => 
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
        'as' => 'generated::pYTlVFhk5yaYqXG9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UoeBGXqv38IqbPdO' => 
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
        'as' => 'generated::UoeBGXqv38IqbPdO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EBPdwsRlhRPtq1MS' => 
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
        'as' => 'generated::EBPdwsRlhRPtq1MS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xv3FrkYT8WmdvS7R' => 
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
        'as' => 'generated::xv3FrkYT8WmdvS7R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ip92Cnk78NRXfg4X' => 
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
        'as' => 'generated::Ip92Cnk78NRXfg4X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HE7Fi9dmPZg1EIMe' => 
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
        'as' => 'generated::HE7Fi9dmPZg1EIMe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::APGCvDn2sVVoshBD' => 
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
        'as' => 'generated::APGCvDn2sVVoshBD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LbMvUcneG5UVuZiK' => 
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
        'as' => 'generated::LbMvUcneG5UVuZiK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pVcwp6igximdlYv9' => 
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
        'as' => 'generated::pVcwp6igximdlYv9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jueyryeCvnicj9cs' => 
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
        'as' => 'generated::jueyryeCvnicj9cs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cVOean8ZpdPPj3xw' => 
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
        'as' => 'generated::cVOean8ZpdPPj3xw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g7zRblh6DkW37BG9' => 
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
        'as' => 'generated::g7zRblh6DkW37BG9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pfcTpz9a3Epw3BSN' => 
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
        'as' => 'generated::pfcTpz9a3Epw3BSN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q4lhkr77hxOIef6T' => 
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
        'as' => 'generated::q4lhkr77hxOIef6T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ezjFeaPfNifW8zsJ' => 
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
        'as' => 'generated::ezjFeaPfNifW8zsJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VgiApkKtVyQLVjh8' => 
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
        'as' => 'generated::VgiApkKtVyQLVjh8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TW4Pj8b9ZkREHy51' => 
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
        'as' => 'generated::TW4Pj8b9ZkREHy51',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AR2xoqkKL8ONn9zT' => 
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
        'as' => 'generated::AR2xoqkKL8ONn9zT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CNi2lnZAyJbqzCLM' => 
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
        'as' => 'generated::CNi2lnZAyJbqzCLM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vxaqUeGvpBIVTy2i' => 
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
        'as' => 'generated::vxaqUeGvpBIVTy2i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ftoB8AlZHdK2c2Iz' => 
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
        'as' => 'generated::ftoB8AlZHdK2c2Iz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a369U2COcRTZRIB4' => 
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
        'as' => 'generated::a369U2COcRTZRIB4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4ESMickz6vGPWxVM' => 
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
        'as' => 'generated::4ESMickz6vGPWxVM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7RDKQFliL3DV2bZK' => 
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
        'as' => 'generated::7RDKQFliL3DV2bZK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DeyB1ZsLjSwTCuXO' => 
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
        'as' => 'generated::DeyB1ZsLjSwTCuXO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1hgiyIILIN2KbOiV' => 
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
        'as' => 'generated::1hgiyIILIN2KbOiV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v9E1tlWlMuGhWPk1' => 
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
        'as' => 'generated::v9E1tlWlMuGhWPk1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kQgbxYRu0sCHh5Ob' => 
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
        'as' => 'generated::kQgbxYRu0sCHh5Ob',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OeRzELkmiLjCBErh' => 
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
        'as' => 'generated::OeRzELkmiLjCBErh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CaYSAwGgvs4iD5bg' => 
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
        'as' => 'generated::CaYSAwGgvs4iD5bg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Skcuvwzol5rAjVOn' => 
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
        'as' => 'generated::Skcuvwzol5rAjVOn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xdygLsO0IrkF7X8x' => 
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
        'as' => 'generated::xdygLsO0IrkF7X8x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mQUoiCfSHx7kT8Am' => 
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
        'as' => 'generated::mQUoiCfSHx7kT8Am',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aSxBqrWZBIFQc5vV' => 
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
        'as' => 'generated::aSxBqrWZBIFQc5vV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lV8kJwomfhmjgGi1' => 
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
        'as' => 'generated::lV8kJwomfhmjgGi1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UzFg5B39RE6VXldM' => 
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
        'as' => 'generated::UzFg5B39RE6VXldM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7lEk3BlAvNguIXQ1' => 
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
        'as' => 'generated::7lEk3BlAvNguIXQ1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qh1iFuvKsCV38sfV' => 
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
        'as' => 'generated::Qh1iFuvKsCV38sfV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ioMR8oka3RSgor6i' => 
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
        'as' => 'generated::ioMR8oka3RSgor6i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MbG6JB8f1WgLHGpC' => 
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
        'as' => 'generated::MbG6JB8f1WgLHGpC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kt8Ize9LV2QpW63e' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003a50000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Kt8Ize9LV2QpW63e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VZubor2YDbaLsmUL' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003b10000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VZubor2YDbaLsmUL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BsaEGsm2wYZZeskg' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003b30000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BsaEGsm2wYZZeskg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LX5mHlTbvNbJ8sHn' => 
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
        'as' => 'generated::LX5mHlTbvNbJ8sHn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ygACeQpoXwcyWxcT' => 
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
        'as' => 'generated::ygACeQpoXwcyWxcT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R4vA3qDBU1Yq6XPX' => 
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
        'as' => 'generated::R4vA3qDBU1Yq6XPX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VwC9raI4CO7ECG80' => 
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
        'as' => 'generated::VwC9raI4CO7ECG80',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZSaevfHrzsAzk230' => 
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
        'as' => 'generated::ZSaevfHrzsAzk230',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9ArFVkqIqUrGvvl3' => 
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
        'as' => 'generated::9ArFVkqIqUrGvvl3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ujDpqW6qfXqICmuD' => 
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
        'as' => 'generated::ujDpqW6qfXqICmuD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kyO4QwXMQB62Hb1T' => 
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
        'as' => 'generated::kyO4QwXMQB62Hb1T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QsLVdx5sznYseNWs' => 
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
        'as' => 'generated::QsLVdx5sznYseNWs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aG6RDecCLtZdrYFj' => 
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
        'as' => 'generated::aG6RDecCLtZdrYFj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9DOAbVqIkuHqlnHn' => 
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
        'as' => 'generated::9DOAbVqIkuHqlnHn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u8NNm17NjOcuuo6l' => 
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
        'as' => 'generated::u8NNm17NjOcuuo6l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0hNvITDPuHC6Gy1H' => 
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
        'as' => 'generated::0hNvITDPuHC6Gy1H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YaXXIxUm9KRVJC1H' => 
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
        'as' => 'generated::YaXXIxUm9KRVJC1H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1xDqMqeyopiWV5gJ' => 
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
        'as' => 'generated::1xDqMqeyopiWV5gJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ndHvlo37RwxY4VpE' => 
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
        'as' => 'generated::ndHvlo37RwxY4VpE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::refLKoEoAh29Ksec' => 
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
        'as' => 'generated::refLKoEoAh29Ksec',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aeRivRz6LRj0xo3n' => 
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
        'as' => 'generated::aeRivRz6LRj0xo3n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pgdD29QUoLxh7rKC' => 
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
        'as' => 'generated::pgdD29QUoLxh7rKC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s8zG7RANh3OPlSHG' => 
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
        'as' => 'generated::s8zG7RANh3OPlSHG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iKZvqqUNyoEG2wV0' => 
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
        'as' => 'generated::iKZvqqUNyoEG2wV0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YocseBp40EwDa5HG' => 
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
        'as' => 'generated::YocseBp40EwDa5HG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J99wO1m8LpKzMIzz' => 
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
        'as' => 'generated::J99wO1m8LpKzMIzz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5YSjFjCmAB2OYi9P' => 
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
        'as' => 'generated::5YSjFjCmAB2OYi9P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9FabQ8FQsXl2W1G7' => 
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
        'as' => 'generated::9FabQ8FQsXl2W1G7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::74oATAK3Z0UUzd2a' => 
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
        'as' => 'generated::74oATAK3Z0UUzd2a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UWjuqqRM5SFJZmey' => 
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
        'as' => 'generated::UWjuqqRM5SFJZmey',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u9pR2SjaIzl15k24' => 
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
        'as' => 'generated::u9pR2SjaIzl15k24',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5ON7Aqca9IJSySDs' => 
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
        'as' => 'generated::5ON7Aqca9IJSySDs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mctAOFfENafoj5yh' => 
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
        'as' => 'generated::mctAOFfENafoj5yh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JhJllTYORrhwHp71' => 
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
        'as' => 'generated::JhJllTYORrhwHp71',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0y55TJ7xRwjgYJjp' => 
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
        'as' => 'generated::0y55TJ7xRwjgYJjp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nnt9NpvsFdbI0OI6' => 
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
        'as' => 'generated::nnt9NpvsFdbI0OI6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fW0jysMmBk57AItS' => 
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
        'as' => 'generated::fW0jysMmBk57AItS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VXZKthm6pXGUWk2i' => 
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
        'as' => 'generated::VXZKthm6pXGUWk2i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UIQv8vT2oRJ8pR3H' => 
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
        'as' => 'generated::UIQv8vT2oRJ8pR3H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F7oueQbwIoQVbM03' => 
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
        'as' => 'generated::F7oueQbwIoQVbM03',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9gR4SHySNsBGuwoe' => 
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
        'as' => 'generated::9gR4SHySNsBGuwoe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QSl12zRg2odBcxNH' => 
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
        'as' => 'generated::QSl12zRg2odBcxNH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pq1FKRFyK3hfFOWc' => 
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
        'as' => 'generated::pq1FKRFyK3hfFOWc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ycpw94t2tKr2he3x' => 
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
        'as' => 'generated::Ycpw94t2tKr2he3x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q3XXmNQfIQYNZNz4' => 
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
        'as' => 'generated::Q3XXmNQfIQYNZNz4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rAcdhHa7JEa7FhEa' => 
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
        'as' => 'generated::rAcdhHa7JEa7FhEa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::41ned2mLfsck5c4X' => 
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
        'as' => 'generated::41ned2mLfsck5c4X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::olmbv78Qri73nUCJ' => 
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
        'as' => 'generated::olmbv78Qri73nUCJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oPLWhPQYrj5LmwmC' => 
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
        'as' => 'generated::oPLWhPQYrj5LmwmC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dVcoOzUfp6N86Hxz' => 
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
        'as' => 'generated::dVcoOzUfp6N86Hxz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3C5UY2ZKdfLvWb6n' => 
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
        'as' => 'generated::3C5UY2ZKdfLvWb6n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QG7b1WtSPLRQXw3U' => 
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
        'as' => 'generated::QG7b1WtSPLRQXw3U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rAtyqQoCoYzs1OUy' => 
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
        'as' => 'generated::rAtyqQoCoYzs1OUy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WGPJCw1xaN3wmtJt' => 
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
        'as' => 'generated::WGPJCw1xaN3wmtJt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wWJEoJc0cbOjI20E' => 
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
        'as' => 'generated::wWJEoJc0cbOjI20E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SPeNmyzukQA0sw44' => 
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
        'as' => 'generated::SPeNmyzukQA0sw44',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2wJX6nrISJyWQK03' => 
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
        'as' => 'generated::2wJX6nrISJyWQK03',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::klZgxZ0MHfF3ZqF4' => 
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
        'as' => 'generated::klZgxZ0MHfF3ZqF4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5GCU0XSybwpiNeHv' => 
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
        'as' => 'generated::5GCU0XSybwpiNeHv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JPl9FGurGvPa19SE' => 
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
        'as' => 'generated::JPl9FGurGvPa19SE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0s1KVWt6umYW3W6t' => 
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
        'as' => 'generated::0s1KVWt6umYW3W6t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g3IAlmsyuQintlxt' => 
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
        'as' => 'generated::g3IAlmsyuQintlxt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L7A9mf3M15XIhnlL' => 
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
        'as' => 'generated::L7A9mf3M15XIhnlL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ryqpuTUnNuqPYUCe' => 
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
        'as' => 'generated::ryqpuTUnNuqPYUCe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0r7Ew2fb7vfZuLF1' => 
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
        'as' => 'generated::0r7Ew2fb7vfZuLF1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1lqLtXxw8dvjSIcE' => 
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
        'as' => 'generated::1lqLtXxw8dvjSIcE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ktE6uxFGl9GnwrzB' => 
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
        'as' => 'generated::ktE6uxFGl9GnwrzB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::la6mDqIAEdwhzmn1' => 
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
        'as' => 'generated::la6mDqIAEdwhzmn1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MAsOJLFjdd0uZab8' => 
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
        'as' => 'generated::MAsOJLFjdd0uZab8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OPtmEF7QitIgaCHe' => 
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
        'as' => 'generated::OPtmEF7QitIgaCHe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::noaB2HVpqzW2vSLn' => 
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
        'as' => 'generated::noaB2HVpqzW2vSLn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iK1HGZYS5eelzjcZ' => 
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
        'as' => 'generated::iK1HGZYS5eelzjcZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CZVG6ooVXQpZdS33' => 
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
        'as' => 'generated::CZVG6ooVXQpZdS33',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RmRDxKZzP1abJxeT' => 
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
        'as' => 'generated::RmRDxKZzP1abJxeT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SquAMh1BvMncTcSj' => 
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
        'as' => 'generated::SquAMh1BvMncTcSj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zZny3fAI6qRoLsDV' => 
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
        'as' => 'generated::zZny3fAI6qRoLsDV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::77GANsTOc7JKX5Uj' => 
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
        'as' => 'generated::77GANsTOc7JKX5Uj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9gVY6eCNxE0sdM2O' => 
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
        'as' => 'generated::9gVY6eCNxE0sdM2O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N7g5DUGgiuzUwDej' => 
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
        'as' => 'generated::N7g5DUGgiuzUwDej',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RAJ5qf2PCFwkZu0s' => 
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
        'as' => 'generated::RAJ5qf2PCFwkZu0s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aEbsCMvepov9ey9Y' => 
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
        'as' => 'generated::aEbsCMvepov9ey9Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iA8wdCGwwM2zQ4rY' => 
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
        'as' => 'generated::iA8wdCGwwM2zQ4rY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mQ8t7lHLKntZmPzh' => 
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
        'as' => 'generated::mQ8t7lHLKntZmPzh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W5D8bkqImiOh8fDQ' => 
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
        'as' => 'generated::W5D8bkqImiOh8fDQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xwlBLFWKWK8QGS5q' => 
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
        'as' => 'generated::xwlBLFWKWK8QGS5q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V6BKhbQsIQOL42Ys' => 
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
        'as' => 'generated::V6BKhbQsIQOL42Ys',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C9xiGSvRTKc7GhWs' => 
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
        'as' => 'generated::C9xiGSvRTKc7GhWs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RIJrRpILyiDzMMYr' => 
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
        'as' => 'generated::RIJrRpILyiDzMMYr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZCQ5UzZZWz9SCR52' => 
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
        'as' => 'generated::ZCQ5UzZZWz9SCR52',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4yAYD6pi2y5Ya9Z5' => 
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
        'as' => 'generated::4yAYD6pi2y5Ya9Z5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nm2i8ngnv804n8cc' => 
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
        'as' => 'generated::nm2i8ngnv804n8cc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QRv55dKUXKOkPWHR' => 
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
        'as' => 'generated::QRv55dKUXKOkPWHR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mslx3rpYqIt4Mb9j' => 
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
        'as' => 'generated::Mslx3rpYqIt4Mb9j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aq0CGn4AE7wQTFwc' => 
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
        'as' => 'generated::aq0CGn4AE7wQTFwc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3hGV6tv5q5Vaf0OG' => 
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
        'as' => 'generated::3hGV6tv5q5Vaf0OG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f3xO5WoJFW4a28OY' => 
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
        'as' => 'generated::f3xO5WoJFW4a28OY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hHkgQ0wbQ6JX2znt' => 
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
        'as' => 'generated::hHkgQ0wbQ6JX2znt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E9DyYAQMqiWYnHNl' => 
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
        'as' => 'generated::E9DyYAQMqiWYnHNl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zS0rhOtKcysZtcf5' => 
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
        'as' => 'generated::zS0rhOtKcysZtcf5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wjxPUizLgt7iD1w3' => 
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
        'as' => 'generated::wjxPUizLgt7iD1w3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MHnEUuFb3qy5GTJ6' => 
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
        'as' => 'generated::MHnEUuFb3qy5GTJ6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ypaJTRxYRj1Nhr5q' => 
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
        'as' => 'generated::ypaJTRxYRj1Nhr5q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3WD24IXPoww2jN7U' => 
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
        'as' => 'generated::3WD24IXPoww2jN7U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RXUWTeY92qDWPgUZ' => 
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
        'as' => 'generated::RXUWTeY92qDWPgUZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WwbMsW9E2xQVAlTQ' => 
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
        'as' => 'generated::WwbMsW9E2xQVAlTQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TYr8HFfJWE3JZ1Oq' => 
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
        'as' => 'generated::TYr8HFfJWE3JZ1Oq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NpxXXITe3whAkMB3' => 
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
        'as' => 'generated::NpxXXITe3whAkMB3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B449JCtoaRcnEg90' => 
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
        'as' => 'generated::B449JCtoaRcnEg90',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hrrPudIh5qJ6MoVX' => 
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
        'as' => 'generated::hrrPudIh5qJ6MoVX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ty9xzNkgFK6To555' => 
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
        'as' => 'generated::Ty9xzNkgFK6To555',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WMD1aGiM8GWxXwkh' => 
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
        'as' => 'generated::WMD1aGiM8GWxXwkh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2fsR25CByP9jRjLg' => 
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
        'as' => 'generated::2fsR25CByP9jRjLg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h7kcMnekGKq3cN1L' => 
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
        'as' => 'generated::h7kcMnekGKq3cN1L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i65q3h22v5Cejiyb' => 
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
        'as' => 'generated::i65q3h22v5Cejiyb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gQR5XnT0y8kZDRZ3' => 
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
        'as' => 'generated::gQR5XnT0y8kZDRZ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DRNgs8NOEJhlb2Na' => 
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
        'as' => 'generated::DRNgs8NOEJhlb2Na',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MEHaKkTrGI24GNXV' => 
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
        'as' => 'generated::MEHaKkTrGI24GNXV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ykxtSVameIheCf1c' => 
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
        'as' => 'generated::ykxtSVameIheCf1c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fDHnxfGehomw2Fdp' => 
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
        'as' => 'generated::fDHnxfGehomw2Fdp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QT1hFhZdkqSa6JZV' => 
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
        'as' => 'generated::QT1hFhZdkqSa6JZV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qp5Kwq9Y4rRRpsQp' => 
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
        'as' => 'generated::qp5Kwq9Y4rRRpsQp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::irjOuBCe1uyAndcA' => 
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
        'as' => 'generated::irjOuBCe1uyAndcA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tflWawaq76eh5wnn' => 
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
        'as' => 'generated::tflWawaq76eh5wnn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DMs4CiIXGaNfXV5h' => 
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
        'as' => 'generated::DMs4CiIXGaNfXV5h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BFHyvERMOGDh1N26' => 
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
        'as' => 'generated::BFHyvERMOGDh1N26',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SviGoyzT00a9UVik' => 
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
        'as' => 'generated::SviGoyzT00a9UVik',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hE0MttJVF09fFdij' => 
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
        'as' => 'generated::hE0MttJVF09fFdij',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JJaKe9rpoqCYtnwH' => 
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
        'as' => 'generated::JJaKe9rpoqCYtnwH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MhkTI9Hw9VKS6GfR' => 
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
        'as' => 'generated::MhkTI9Hw9VKS6GfR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K9eknV88GJJBClvk' => 
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
        'as' => 'generated::K9eknV88GJJBClvk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GokysjeSRQhwM5XE' => 
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
        'as' => 'generated::GokysjeSRQhwM5XE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ng050na3ZZoljNfP' => 
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
        'as' => 'generated::Ng050na3ZZoljNfP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kI66gYrtyPt97uPt' => 
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
        'as' => 'generated::kI66gYrtyPt97uPt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LD2Q2vbvYwJ42Vdr' => 
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
        'as' => 'generated::LD2Q2vbvYwJ42Vdr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iKaATDuhhnnHcChQ' => 
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
        'as' => 'generated::iKaATDuhhnnHcChQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zpg0Nivc0yckuDPb' => 
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
        'as' => 'generated::Zpg0Nivc0yckuDPb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OJd4uMfGaFnL9hR0' => 
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
        'as' => 'generated::OJd4uMfGaFnL9hR0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WprPVlxDyDqo3gQb' => 
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
        'as' => 'generated::WprPVlxDyDqo3gQb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5cwgKA7FnV23KI6I' => 
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
        'as' => 'generated::5cwgKA7FnV23KI6I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4hSP2pncuL1X8cSY' => 
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
        'as' => 'generated::4hSP2pncuL1X8cSY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::veox20PPUZ33b5TY' => 
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
        'as' => 'generated::veox20PPUZ33b5TY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zirZzbSZscGXVRjZ' => 
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
        'as' => 'generated::zirZzbSZscGXVRjZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yRSoezGS5AEfvcK5' => 
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
        'as' => 'generated::yRSoezGS5AEfvcK5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fn4qA0yEsjMx9L5u' => 
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
        'as' => 'generated::fn4qA0yEsjMx9L5u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sg6xgEWU7cji7SA6' => 
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
        'as' => 'generated::sg6xgEWU7cji7SA6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::97eUmbxQoyks4iSc' => 
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
        'as' => 'generated::97eUmbxQoyks4iSc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e9FX557lgYurFhRw' => 
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
        'as' => 'generated::e9FX557lgYurFhRw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nMmeoQrXRwOsULtT' => 
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
        'as' => 'generated::nMmeoQrXRwOsULtT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vFFsAnyGdyrcD45A' => 
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
        'as' => 'generated::vFFsAnyGdyrcD45A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dd9Bc7xNMdNTE81e' => 
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
        'as' => 'generated::dd9Bc7xNMdNTE81e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oP4mNPhEcawq9YG3' => 
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
        'as' => 'generated::oP4mNPhEcawq9YG3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WvqYL2eGJ3bcEK9N' => 
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
        'as' => 'generated::WvqYL2eGJ3bcEK9N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NXLagojNDnkOGOpj' => 
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
        'as' => 'generated::NXLagojNDnkOGOpj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3JoJ6QLcQj5CACW6' => 
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
        'as' => 'generated::3JoJ6QLcQj5CACW6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LPMGy6Q76HViRJgv' => 
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
        'as' => 'generated::LPMGy6Q76HViRJgv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iX2pDy1jJqb8Wgmg' => 
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
        'as' => 'generated::iX2pDy1jJqb8Wgmg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q8CouY0fa15ybV7R' => 
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
        'as' => 'generated::Q8CouY0fa15ybV7R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QfXTFvjy5aGpdQtf' => 
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
        'as' => 'generated::QfXTFvjy5aGpdQtf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ghdoaiUZeeul5i4i' => 
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
        'as' => 'generated::ghdoaiUZeeul5i4i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fgf85B7JUfA8nb9P' => 
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
        'as' => 'generated::fgf85B7JUfA8nb9P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Jm5IcUIAYa5dtbm' => 
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
        'as' => 'generated::6Jm5IcUIAYa5dtbm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1MaA2PFTnWwKVAwD' => 
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
        'as' => 'generated::1MaA2PFTnWwKVAwD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eYirwgwm7FxqGs8y' => 
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
        'as' => 'generated::eYirwgwm7FxqGs8y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R0wtH8VEPRysoXsd' => 
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
        'as' => 'generated::R0wtH8VEPRysoXsd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lL1mCe3N66fFPLY6' => 
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
        'as' => 'generated::lL1mCe3N66fFPLY6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DMlUZCFVkJ7Og0OI' => 
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
        'as' => 'generated::DMlUZCFVkJ7Og0OI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ywUA5r1y7kGSil8P' => 
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
        'as' => 'generated::ywUA5r1y7kGSil8P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::byTWna70R1hSGDkq' => 
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
        'as' => 'generated::byTWna70R1hSGDkq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IqxnoJwFkGbl7Upl' => 
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
        'as' => 'generated::IqxnoJwFkGbl7Upl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KW4iPjLRzkuQaeEd' => 
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
        'as' => 'generated::KW4iPjLRzkuQaeEd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CkiVcRxYTLpdTEex' => 
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
        'as' => 'generated::CkiVcRxYTLpdTEex',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
