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
            '_route' => 'generated::1dTooUuV9B2Fs5Nc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::buJn5T7XLvoZlQay',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mObFxwxbNGP29Auo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8GngIGhK9whK2ffn',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::3atYcUIlySTbXX2J',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6vtB9FlNy46dRbq0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wOS95M3wtzMlrlJx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MiDEnXm2ZrmWQwD3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vBxhGhWAWueelHWD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mMpazylzBGZnd9VX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GSdhSf9FZ1Fv9Khz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BOnIRLGXeNplUeEp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VAuyCQkNPhh2iqY3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::auwn2SV7YkrIR6KL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::62Qsf8hpxAZ4x7wi',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xmmLpJKdH2x9rRtm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YsgbsJbaZnk9cVPd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::11inUerdJhxq28wU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::USlspum5ZxEoYXfb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LwY0BClPF2PD0TnF',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QuMBxMtX7MCIWxiA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SrZt0orzKCOoVZ4D',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::z1Y4nko9ZPeP0lAc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KikH8sjdCGelSGyJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QpHBVf0uljwv0Zkb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yOshQG5M4zyozX7D',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::y81sxQsglriph0P2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZA14GtgEvipKfmJ8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Sk2CB1dyK21GJnG6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oJDC3DpDXfYq8AeP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Q6o52FqnhNwaawca',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qZeBG2aEt5aatv6u',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RxMBwToqBbpJ2tpZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::979irKIo7jkBADda',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PvCaN8MFhQlvF2uN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Y5ArTwnTYezLhcQB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::g3yjzkYeGpy6Jvw1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4J36kypWgRCJynBm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zyF7AX6IwJlaMWoU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rmdQYy2vbO882dGP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Xfoy5H3bA03Arrma',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kfU7DhOhxmn4fks5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::X2S8yAXu3WsN4fBG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HbnEMY7HRj90mBIY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::K8yMKxQ70xCZrpDc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CH1WOR27H4LgBGt8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rKsRZEKyODKXZXPy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qeNUuDJ8g3lZwXhX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3ibCpOwV0Gvb2KEQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HrXmvBZYE4za3lVW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uXyj9eTE7MONP1sV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HyFcXsOG6OpWdXUE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::r9eVJN23UMTc38wm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NUwguRbJ82udKNnK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BlfynYi7uOxw432s',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xGZMKN10IxmeD277',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::y3BctEXQ5uoRIzRO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3dIisSCtUv8e4mK2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bPhePaIRdr6MgDBw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IA2DqXQyjfXwyk02',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Jtxlkn2VmSlkPKGv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zQKkfLowL7AmxVGs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kC0Yblqqq19d3cZh',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::83DE2SOUrmqANGZX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::EXfh6rCQ5oGOMmoo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DfazCE9891Wy74N3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Z89i08zKJBYpReFI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zQ4nxqwB3k4Z2vCZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SEEhugBYzKAYlIRI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xCh5YVXmQm0iIQgo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HRCTNXWMx2o7ohPx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::njG0m8qYznNpzGfi',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AarymGugvz265v1c',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::iYkbubo6oGTy9Z8a',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ofzw2mNVg72QHFcB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ycIDvCo6k1HhzpYY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BypbHxmKNgFUyNJy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6MSx5AFYZqwLnaNz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::eLL20yIlSzUCt0Gy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mgWLvR9W63hTidH3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JSQZBe07Y7mXIhVz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bUM7etV9qPtiquxJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Rhya75NzZsK6SuTj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HiiQUKr3MVFZxK78',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JUs0IBuNpR1C48rf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::sp6jA3dEUJp5uZqv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zhBnEEz5wBXMTNe9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FgdKLV2OFCHUSkQ8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NGXXDGyzov5oqi92',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oDVZFPzOyEpeIKcx',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::C4bGQQLZJ3kRk84F',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::mLIAE8MUa0EooSiI',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::fjkHFQKsz3bm7pLb',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::riSvXyOvdys03tz5',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::FerIRa5T3mZiE4ls',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::8cH3WWZDwqtEkITO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VfsgqU5zrmNVs774',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::JW6Ellnl8sNQBrxm',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::DleA8M3ffCzyWtQe',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2rzsC2TnfgrQYsjX',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Vj915G41NCY4a5Ju',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Pm4gNWy4fnyZLfbR',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::p8GdchIg8KY69bZB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BmWPj1hBzq43Il4V',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Lx1xLl5PktZ53Juc',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::CYPyJybsdxABHZSd',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::mDHcUdbY97jTD8gJ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::bwKpIHBFE3eh69Dj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CT7doaPzWDNfhiob',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lLmXNxenHMsEDkCd',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::E8b7h7wbZosYDchp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SQvY0oqQjitV9iw5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wg5qPeL3NXl8wqHk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GqWKTw8y2asIliFB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jIJg3EWGwnCve7k4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wZTdvfR2Mv2MZFG1',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Qjbi98vwSGV9YDl4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::EdgY25b1ikD7zyVs',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::yKXojbqtXe7ZhwPd',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::4DaKcRWZN3beeY0X',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::SbMhjLznWdKaJSUt',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::qQzHabSJlbOZplBQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SJ2cA23Mn6KVjnAY',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::FxWYIPgkpfKcbJWE',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Ne2IXeooL3u4Szcc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fp4FGpa726WfVUCH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7MJLchks2IonWhQJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qpWIOVlbnCn950Xr',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::7NvD9OmbP60bETSq',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::kenMBK7pctyXnGWA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SWIg0ymWSCYFMiVS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fVIV2xnt1u7bTr88',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::x1sGhBxF32qY7jrv',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::8T9tgZ3I5N8YR2v2',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::85sHwjB2oioic9vv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dtplOi3S5gFYzNzf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hfc6ml51vlXyCKCq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Mtw75oSQgsTt0pqd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::p3F5fvAk5WmFfgYd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GmolcCRrTC2CysUp',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::drdWXJTVTSSNVF7v',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ify51GKhXGBhyvX5',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::RZ0C1OoWUDxovrcz',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ev6jXxbrYx3JRJDc',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Ck5lJD1dbEjWvTfQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::m5GOltlQY3BJ9EKa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::owfCmKpcORqmTGnN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wi8CGvBueddIHB6D',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::6VoaTNzoNJ5Huyaf',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::hHYbXP8dEX4unEZM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::b2I0pjcPibqqijR7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nONfEominwKe990D',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oYPqN0j558CXG2IR',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::zxGAmK0qByk4AcVN',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::gerj6woeTH64aRYg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::auueubk1zpYVd6rP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fTi5lWGZVjrhfz4L',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::nquDC61tgMkeNVof',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::VIOhpXFbW1KOqfuk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hNIZz7Nj1XvbmXwt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::awevijzQYsRelS1N',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TQXtG3SVCXSoHai5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::h89c0Pvx1Pjs2TUI',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::KmPhXmJJGamb4Ypb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::K6RZi5VUugRedyVB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::78gNSOCqo5PMsCSS',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::av4wrFErIZzc7adJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nLJ6GsyykeMMM1hW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::x3cfdh8RbevmJaGZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VDWuno7jK6p0o9j3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::q7jZa9ON2clCdbri',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YXbaUAbC5HBm6iRv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kFBWt0YvNQ9km5cm',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Rc3kSCJwsSne4mh0',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::1UKBa5ibDcnMUI4c',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uToeVRaGB1yStxPf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YzIbaFxVdpHAXUdn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::T5vL7fd5tSAbHb1D',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9AC9BQgkbjl3kcCg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZCCCXXEbzp5MGrXr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ePrmtNmLQXnKtvvf',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::8PZcCkuc6k9Qpqd1',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::7HA1OHOTxrEcftY1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XrXwxZvoAkO6PVSS',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::nYWSVVqSKslA6xQj',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::J9EHmwegso1qOcxO',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::OvZIZcUfvFHHDYGs',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::3cPbdwXEZHCMQ8QV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::y04c1RbRbeiabEXp',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::2pPMwleLfuf81yhp',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::2pe6xS8lNfXKMfWQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6ChtcBHahyrM2N8m',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AfCvfaPnjWcX3qIp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jQkCkl7AUgOz4jx8',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ERnL2E7DUibzdJX9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::V6j7BJfGygNoJUWV',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ma2mhvtJ1xnA7ACI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5BVbxRet7g6OsGrg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FNrICXyuCxTy8h6g',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Sr9GjElALK0V4g3m',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::oyZbqe821x6BGKGH',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::rqjXKizRQibNpXxg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cSeGyxnTBQGwK5MM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::L2IFu3VHVprxMVr7',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::N0Xb56SZBrunIC7Q',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::sOoquT05BY2olLYn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8P3G0lbFBpECPZEs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Rrco1MuZYVOseSYO',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::YOcvcqFYbvsWbq6u',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VNAQHrr4nkjCBTxZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KGBltWtMgUEIuLzk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Q0fEJljf0hM81Nw2',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::GlV1jnI2q7dNhsoU',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::TRLitwYFcpPawBuN',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::JCtIAIMq8PUK8LW3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HdHBddPxn2b3tU8E',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gr2hSDoEdFdXcIDa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fgtPjBGuwTwdWkUr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6QlIOy98SR9s3DNH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZWXqHQX2TIzLTLMQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::411AZVgRKpMBhMF6',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::lUmg9cOT1A4H0IGe',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::bGLj8h07EE7hQNFy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Zb8Xx337UTNAnuPE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DAtSgqsTOQCXSdXC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BJrogByT8StDKvgg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RKQxaa93KLLcnVzC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::01MZy7VEJ8o0LGCc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BvWN9rHDHS8hWWKw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1Q3REvmelbPbdIDz',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Rw1kD0I3YGT6fg5a',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Jwes3x6fWtLWmiUU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0iT2jgeT5FkMmV2t',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BeUMDH7noW9pSV1W',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Gh9k5f11bSAL04Yg',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Rsla3qD7PSfqRvgB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::96BMvncEknRbPAlk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MbPIPgM6CDn7Nf60',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::x4RsSisIRhotf5rg',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::c26ALULAvAqDwSfP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WLL2z8y8dPCbzekD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::I0xSlepT9dbgi3P3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IAJ9xOjmNid9pet7',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::bQT15Z76TjdIlIZe',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ZqNsKhRDn0OWiNsb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MHLgpV1AB7GtBEUp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ubeOQMk0Nu6whGB3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::plKTERZnXALvszbC',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ZcMZ47skcrHME5Ic',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::X9MMpUGDc7GjVjvb',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::isfi0uRz73jf8l8S',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2eIFxTfvOJZjxGEC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aflM2Xna1lP3yZiZ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::UilAeCPuLNnJPKVs',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::NiW2lvTb0VWKjciH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5b7H7PAmMUANlJn8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qG3ULZ6Ak7bDTs1c',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2m9KCG253rNaYdHd',
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
            '_route' => 'generated::MtOd4oZslJNbYscA',
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
            '_route' => 'generated::U6nBIjsinr3n7ZYR',
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
            '_route' => 'generated::Gmw42FwhavxQJ6GF',
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
            '_route' => 'generated::rDcXHlkevgVptmEk',
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
            '_route' => 'generated::dAWiVzPSu6WVH2e5',
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
    'generated::1dTooUuV9B2Fs5Nc' => 
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
        'as' => 'generated::1dTooUuV9B2Fs5Nc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::buJn5T7XLvoZlQay' => 
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
        'as' => 'generated::buJn5T7XLvoZlQay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mObFxwxbNGP29Auo' => 
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
        'as' => 'generated::mObFxwxbNGP29Auo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8GngIGhK9whK2ffn' => 
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
        'as' => 'generated::8GngIGhK9whK2ffn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3atYcUIlySTbXX2J' => 
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
        'as' => 'generated::3atYcUIlySTbXX2J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6vtB9FlNy46dRbq0' => 
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
        'as' => 'generated::6vtB9FlNy46dRbq0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wOS95M3wtzMlrlJx' => 
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
        'as' => 'generated::wOS95M3wtzMlrlJx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MiDEnXm2ZrmWQwD3' => 
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
        'as' => 'generated::MiDEnXm2ZrmWQwD3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vBxhGhWAWueelHWD' => 
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
        'as' => 'generated::vBxhGhWAWueelHWD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mMpazylzBGZnd9VX' => 
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
        'as' => 'generated::mMpazylzBGZnd9VX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GSdhSf9FZ1Fv9Khz' => 
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
        'as' => 'generated::GSdhSf9FZ1Fv9Khz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BOnIRLGXeNplUeEp' => 
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
        'as' => 'generated::BOnIRLGXeNplUeEp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VAuyCQkNPhh2iqY3' => 
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
        'as' => 'generated::VAuyCQkNPhh2iqY3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::auwn2SV7YkrIR6KL' => 
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
        'as' => 'generated::auwn2SV7YkrIR6KL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::62Qsf8hpxAZ4x7wi' => 
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
        'as' => 'generated::62Qsf8hpxAZ4x7wi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xmmLpJKdH2x9rRtm' => 
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
        'as' => 'generated::xmmLpJKdH2x9rRtm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YsgbsJbaZnk9cVPd' => 
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
        'as' => 'generated::YsgbsJbaZnk9cVPd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::11inUerdJhxq28wU' => 
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
        'as' => 'generated::11inUerdJhxq28wU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::USlspum5ZxEoYXfb' => 
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
        'as' => 'generated::USlspum5ZxEoYXfb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LwY0BClPF2PD0TnF' => 
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
        'as' => 'generated::LwY0BClPF2PD0TnF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QuMBxMtX7MCIWxiA' => 
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
        'as' => 'generated::QuMBxMtX7MCIWxiA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SrZt0orzKCOoVZ4D' => 
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
        'as' => 'generated::SrZt0orzKCOoVZ4D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z1Y4nko9ZPeP0lAc' => 
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
        'as' => 'generated::z1Y4nko9ZPeP0lAc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KikH8sjdCGelSGyJ' => 
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
        'as' => 'generated::KikH8sjdCGelSGyJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QpHBVf0uljwv0Zkb' => 
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
        'as' => 'generated::QpHBVf0uljwv0Zkb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yOshQG5M4zyozX7D' => 
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
        'as' => 'generated::yOshQG5M4zyozX7D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y81sxQsglriph0P2' => 
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
        'as' => 'generated::y81sxQsglriph0P2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZA14GtgEvipKfmJ8' => 
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
        'as' => 'generated::ZA14GtgEvipKfmJ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sk2CB1dyK21GJnG6' => 
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
        'as' => 'generated::Sk2CB1dyK21GJnG6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oJDC3DpDXfYq8AeP' => 
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
        'as' => 'generated::oJDC3DpDXfYq8AeP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q6o52FqnhNwaawca' => 
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
        'as' => 'generated::Q6o52FqnhNwaawca',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qZeBG2aEt5aatv6u' => 
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
        'as' => 'generated::qZeBG2aEt5aatv6u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RxMBwToqBbpJ2tpZ' => 
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
        'as' => 'generated::RxMBwToqBbpJ2tpZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::979irKIo7jkBADda' => 
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
        'as' => 'generated::979irKIo7jkBADda',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PvCaN8MFhQlvF2uN' => 
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
        'as' => 'generated::PvCaN8MFhQlvF2uN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y5ArTwnTYezLhcQB' => 
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
        'as' => 'generated::Y5ArTwnTYezLhcQB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g3yjzkYeGpy6Jvw1' => 
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
        'as' => 'generated::g3yjzkYeGpy6Jvw1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4J36kypWgRCJynBm' => 
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
        'as' => 'generated::4J36kypWgRCJynBm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zyF7AX6IwJlaMWoU' => 
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
        'as' => 'generated::zyF7AX6IwJlaMWoU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rmdQYy2vbO882dGP' => 
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
        'as' => 'generated::rmdQYy2vbO882dGP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xfoy5H3bA03Arrma' => 
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
        'as' => 'generated::Xfoy5H3bA03Arrma',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kfU7DhOhxmn4fks5' => 
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
        'as' => 'generated::kfU7DhOhxmn4fks5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X2S8yAXu3WsN4fBG' => 
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
        'as' => 'generated::X2S8yAXu3WsN4fBG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HbnEMY7HRj90mBIY' => 
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
        'as' => 'generated::HbnEMY7HRj90mBIY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K8yMKxQ70xCZrpDc' => 
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
        'as' => 'generated::K8yMKxQ70xCZrpDc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CH1WOR27H4LgBGt8' => 
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
        'as' => 'generated::CH1WOR27H4LgBGt8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rKsRZEKyODKXZXPy' => 
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
        'as' => 'generated::rKsRZEKyODKXZXPy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qeNUuDJ8g3lZwXhX' => 
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
        'as' => 'generated::qeNUuDJ8g3lZwXhX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3ibCpOwV0Gvb2KEQ' => 
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
        'as' => 'generated::3ibCpOwV0Gvb2KEQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HrXmvBZYE4za3lVW' => 
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
        'as' => 'generated::HrXmvBZYE4za3lVW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uXyj9eTE7MONP1sV' => 
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
        'as' => 'generated::uXyj9eTE7MONP1sV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HyFcXsOG6OpWdXUE' => 
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
        'as' => 'generated::HyFcXsOG6OpWdXUE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r9eVJN23UMTc38wm' => 
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
        'as' => 'generated::r9eVJN23UMTc38wm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NUwguRbJ82udKNnK' => 
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
        'as' => 'generated::NUwguRbJ82udKNnK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BlfynYi7uOxw432s' => 
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
        'as' => 'generated::BlfynYi7uOxw432s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xGZMKN10IxmeD277' => 
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
        'as' => 'generated::xGZMKN10IxmeD277',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y3BctEXQ5uoRIzRO' => 
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
        'as' => 'generated::y3BctEXQ5uoRIzRO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3dIisSCtUv8e4mK2' => 
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
        'as' => 'generated::3dIisSCtUv8e4mK2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bPhePaIRdr6MgDBw' => 
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
        'as' => 'generated::bPhePaIRdr6MgDBw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IA2DqXQyjfXwyk02' => 
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
        'as' => 'generated::IA2DqXQyjfXwyk02',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jtxlkn2VmSlkPKGv' => 
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
        'as' => 'generated::Jtxlkn2VmSlkPKGv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zQKkfLowL7AmxVGs' => 
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
        'as' => 'generated::zQKkfLowL7AmxVGs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kC0Yblqqq19d3cZh' => 
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
        'as' => 'generated::kC0Yblqqq19d3cZh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::83DE2SOUrmqANGZX' => 
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
        'as' => 'generated::83DE2SOUrmqANGZX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EXfh6rCQ5oGOMmoo' => 
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
        'as' => 'generated::EXfh6rCQ5oGOMmoo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DfazCE9891Wy74N3' => 
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
        'as' => 'generated::DfazCE9891Wy74N3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z89i08zKJBYpReFI' => 
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
        'as' => 'generated::Z89i08zKJBYpReFI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zQ4nxqwB3k4Z2vCZ' => 
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
        'as' => 'generated::zQ4nxqwB3k4Z2vCZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SEEhugBYzKAYlIRI' => 
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
        'as' => 'generated::SEEhugBYzKAYlIRI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xCh5YVXmQm0iIQgo' => 
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
        'as' => 'generated::xCh5YVXmQm0iIQgo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HRCTNXWMx2o7ohPx' => 
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
        'as' => 'generated::HRCTNXWMx2o7ohPx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::njG0m8qYznNpzGfi' => 
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
        'as' => 'generated::njG0m8qYznNpzGfi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AarymGugvz265v1c' => 
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
        'as' => 'generated::AarymGugvz265v1c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iYkbubo6oGTy9Z8a' => 
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
        'as' => 'generated::iYkbubo6oGTy9Z8a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ofzw2mNVg72QHFcB' => 
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
        'as' => 'generated::ofzw2mNVg72QHFcB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ycIDvCo6k1HhzpYY' => 
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
        'as' => 'generated::ycIDvCo6k1HhzpYY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BypbHxmKNgFUyNJy' => 
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
        'as' => 'generated::BypbHxmKNgFUyNJy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6MSx5AFYZqwLnaNz' => 
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
        'as' => 'generated::6MSx5AFYZqwLnaNz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eLL20yIlSzUCt0Gy' => 
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
        'as' => 'generated::eLL20yIlSzUCt0Gy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mgWLvR9W63hTidH3' => 
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
        'as' => 'generated::mgWLvR9W63hTidH3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JSQZBe07Y7mXIhVz' => 
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
        'as' => 'generated::JSQZBe07Y7mXIhVz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bUM7etV9qPtiquxJ' => 
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
        'as' => 'generated::bUM7etV9qPtiquxJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rhya75NzZsK6SuTj' => 
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
        'as' => 'generated::Rhya75NzZsK6SuTj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HiiQUKr3MVFZxK78' => 
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
        'as' => 'generated::HiiQUKr3MVFZxK78',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JUs0IBuNpR1C48rf' => 
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
        'as' => 'generated::JUs0IBuNpR1C48rf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sp6jA3dEUJp5uZqv' => 
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
        'as' => 'generated::sp6jA3dEUJp5uZqv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zhBnEEz5wBXMTNe9' => 
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
        'as' => 'generated::zhBnEEz5wBXMTNe9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FgdKLV2OFCHUSkQ8' => 
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
        'as' => 'generated::FgdKLV2OFCHUSkQ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NGXXDGyzov5oqi92' => 
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
        'as' => 'generated::NGXXDGyzov5oqi92',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oDVZFPzOyEpeIKcx' => 
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
        'as' => 'generated::oDVZFPzOyEpeIKcx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C4bGQQLZJ3kRk84F' => 
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
        'as' => 'generated::C4bGQQLZJ3kRk84F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mLIAE8MUa0EooSiI' => 
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
        'as' => 'generated::mLIAE8MUa0EooSiI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fjkHFQKsz3bm7pLb' => 
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
        'as' => 'generated::fjkHFQKsz3bm7pLb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::riSvXyOvdys03tz5' => 
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
        'as' => 'generated::riSvXyOvdys03tz5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FerIRa5T3mZiE4ls' => 
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
        'as' => 'generated::FerIRa5T3mZiE4ls',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8cH3WWZDwqtEkITO' => 
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
        'as' => 'generated::8cH3WWZDwqtEkITO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VfsgqU5zrmNVs774' => 
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
        'as' => 'generated::VfsgqU5zrmNVs774',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JW6Ellnl8sNQBrxm' => 
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
        'as' => 'generated::JW6Ellnl8sNQBrxm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2m9KCG253rNaYdHd' => 
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
        'as' => 'generated::2m9KCG253rNaYdHd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DleA8M3ffCzyWtQe' => 
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
        'as' => 'generated::DleA8M3ffCzyWtQe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2rzsC2TnfgrQYsjX' => 
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
        'as' => 'generated::2rzsC2TnfgrQYsjX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vj915G41NCY4a5Ju' => 
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
        'as' => 'generated::Vj915G41NCY4a5Ju',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pm4gNWy4fnyZLfbR' => 
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
        'as' => 'generated::Pm4gNWy4fnyZLfbR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p8GdchIg8KY69bZB' => 
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
        'as' => 'generated::p8GdchIg8KY69bZB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BmWPj1hBzq43Il4V' => 
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
        'as' => 'generated::BmWPj1hBzq43Il4V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MtOd4oZslJNbYscA' => 
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
        'as' => 'generated::MtOd4oZslJNbYscA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gmw42FwhavxQJ6GF' => 
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
        'as' => 'generated::Gmw42FwhavxQJ6GF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lx1xLl5PktZ53Juc' => 
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
        'as' => 'generated::Lx1xLl5PktZ53Juc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CYPyJybsdxABHZSd' => 
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
        'as' => 'generated::CYPyJybsdxABHZSd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mDHcUdbY97jTD8gJ' => 
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
        'as' => 'generated::mDHcUdbY97jTD8gJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bwKpIHBFE3eh69Dj' => 
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
        'as' => 'generated::bwKpIHBFE3eh69Dj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CT7doaPzWDNfhiob' => 
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
        'as' => 'generated::CT7doaPzWDNfhiob',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lLmXNxenHMsEDkCd' => 
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
        'as' => 'generated::lLmXNxenHMsEDkCd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E8b7h7wbZosYDchp' => 
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
        'as' => 'generated::E8b7h7wbZosYDchp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SQvY0oqQjitV9iw5' => 
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
        'as' => 'generated::SQvY0oqQjitV9iw5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wg5qPeL3NXl8wqHk' => 
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
        'as' => 'generated::wg5qPeL3NXl8wqHk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GqWKTw8y2asIliFB' => 
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
        'as' => 'generated::GqWKTw8y2asIliFB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jIJg3EWGwnCve7k4' => 
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
        'as' => 'generated::jIJg3EWGwnCve7k4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wZTdvfR2Mv2MZFG1' => 
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
        'as' => 'generated::wZTdvfR2Mv2MZFG1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qjbi98vwSGV9YDl4' => 
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
        'as' => 'generated::Qjbi98vwSGV9YDl4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EdgY25b1ikD7zyVs' => 
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
        'as' => 'generated::EdgY25b1ikD7zyVs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yKXojbqtXe7ZhwPd' => 
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
        'as' => 'generated::yKXojbqtXe7ZhwPd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4DaKcRWZN3beeY0X' => 
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
        'as' => 'generated::4DaKcRWZN3beeY0X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SbMhjLznWdKaJSUt' => 
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
        'as' => 'generated::SbMhjLznWdKaJSUt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qQzHabSJlbOZplBQ' => 
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
        'as' => 'generated::qQzHabSJlbOZplBQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SJ2cA23Mn6KVjnAY' => 
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
        'as' => 'generated::SJ2cA23Mn6KVjnAY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FxWYIPgkpfKcbJWE' => 
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
        'as' => 'generated::FxWYIPgkpfKcbJWE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ne2IXeooL3u4Szcc' => 
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
        'as' => 'generated::Ne2IXeooL3u4Szcc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fp4FGpa726WfVUCH' => 
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
        'as' => 'generated::fp4FGpa726WfVUCH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7MJLchks2IonWhQJ' => 
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
        'as' => 'generated::7MJLchks2IonWhQJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qpWIOVlbnCn950Xr' => 
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
        'as' => 'generated::qpWIOVlbnCn950Xr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7NvD9OmbP60bETSq' => 
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
        'as' => 'generated::7NvD9OmbP60bETSq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kenMBK7pctyXnGWA' => 
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
        'as' => 'generated::kenMBK7pctyXnGWA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SWIg0ymWSCYFMiVS' => 
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
        'as' => 'generated::SWIg0ymWSCYFMiVS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fVIV2xnt1u7bTr88' => 
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
        'as' => 'generated::fVIV2xnt1u7bTr88',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x1sGhBxF32qY7jrv' => 
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
        'as' => 'generated::x1sGhBxF32qY7jrv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8T9tgZ3I5N8YR2v2' => 
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
        'as' => 'generated::8T9tgZ3I5N8YR2v2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::85sHwjB2oioic9vv' => 
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
        'as' => 'generated::85sHwjB2oioic9vv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dtplOi3S5gFYzNzf' => 
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
        'as' => 'generated::dtplOi3S5gFYzNzf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hfc6ml51vlXyCKCq' => 
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
        'as' => 'generated::hfc6ml51vlXyCKCq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mtw75oSQgsTt0pqd' => 
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
        'as' => 'generated::Mtw75oSQgsTt0pqd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p3F5fvAk5WmFfgYd' => 
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
        'as' => 'generated::p3F5fvAk5WmFfgYd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GmolcCRrTC2CysUp' => 
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
        'as' => 'generated::GmolcCRrTC2CysUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::drdWXJTVTSSNVF7v' => 
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
        'as' => 'generated::drdWXJTVTSSNVF7v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ify51GKhXGBhyvX5' => 
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
        'as' => 'generated::Ify51GKhXGBhyvX5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RZ0C1OoWUDxovrcz' => 
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
        'as' => 'generated::RZ0C1OoWUDxovrcz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ev6jXxbrYx3JRJDc' => 
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
        'as' => 'generated::ev6jXxbrYx3JRJDc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ck5lJD1dbEjWvTfQ' => 
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
        'as' => 'generated::Ck5lJD1dbEjWvTfQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m5GOltlQY3BJ9EKa' => 
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
        'as' => 'generated::m5GOltlQY3BJ9EKa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::owfCmKpcORqmTGnN' => 
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
        'as' => 'generated::owfCmKpcORqmTGnN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wi8CGvBueddIHB6D' => 
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
        'as' => 'generated::wi8CGvBueddIHB6D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6VoaTNzoNJ5Huyaf' => 
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
        'as' => 'generated::6VoaTNzoNJ5Huyaf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hHYbXP8dEX4unEZM' => 
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
        'as' => 'generated::hHYbXP8dEX4unEZM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b2I0pjcPibqqijR7' => 
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
        'as' => 'generated::b2I0pjcPibqqijR7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nONfEominwKe990D' => 
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
        'as' => 'generated::nONfEominwKe990D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oYPqN0j558CXG2IR' => 
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
        'as' => 'generated::oYPqN0j558CXG2IR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zxGAmK0qByk4AcVN' => 
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
        'as' => 'generated::zxGAmK0qByk4AcVN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gerj6woeTH64aRYg' => 
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
        'as' => 'generated::gerj6woeTH64aRYg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::auueubk1zpYVd6rP' => 
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
        'as' => 'generated::auueubk1zpYVd6rP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U6nBIjsinr3n7ZYR' => 
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
        'as' => 'generated::U6nBIjsinr3n7ZYR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rDcXHlkevgVptmEk' => 
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
        'as' => 'generated::rDcXHlkevgVptmEk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fTi5lWGZVjrhfz4L' => 
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
        'as' => 'generated::fTi5lWGZVjrhfz4L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nquDC61tgMkeNVof' => 
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
        'as' => 'generated::nquDC61tgMkeNVof',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VIOhpXFbW1KOqfuk' => 
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
        'as' => 'generated::VIOhpXFbW1KOqfuk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hNIZz7Nj1XvbmXwt' => 
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
        'as' => 'generated::hNIZz7Nj1XvbmXwt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::awevijzQYsRelS1N' => 
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
        'as' => 'generated::awevijzQYsRelS1N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TQXtG3SVCXSoHai5' => 
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
        'as' => 'generated::TQXtG3SVCXSoHai5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h89c0Pvx1Pjs2TUI' => 
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
        'as' => 'generated::h89c0Pvx1Pjs2TUI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KmPhXmJJGamb4Ypb' => 
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
        'as' => 'generated::KmPhXmJJGamb4Ypb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K6RZi5VUugRedyVB' => 
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
        'as' => 'generated::K6RZi5VUugRedyVB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::78gNSOCqo5PMsCSS' => 
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
        'as' => 'generated::78gNSOCqo5PMsCSS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::av4wrFErIZzc7adJ' => 
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
        'as' => 'generated::av4wrFErIZzc7adJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nLJ6GsyykeMMM1hW' => 
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
        'as' => 'generated::nLJ6GsyykeMMM1hW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x3cfdh8RbevmJaGZ' => 
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
        'as' => 'generated::x3cfdh8RbevmJaGZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VDWuno7jK6p0o9j3' => 
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
        'as' => 'generated::VDWuno7jK6p0o9j3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q7jZa9ON2clCdbri' => 
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
        'as' => 'generated::q7jZa9ON2clCdbri',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YXbaUAbC5HBm6iRv' => 
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
        'as' => 'generated::YXbaUAbC5HBm6iRv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kFBWt0YvNQ9km5cm' => 
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
        'as' => 'generated::kFBWt0YvNQ9km5cm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rc3kSCJwsSne4mh0' => 
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
        'as' => 'generated::Rc3kSCJwsSne4mh0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1UKBa5ibDcnMUI4c' => 
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
        'as' => 'generated::1UKBa5ibDcnMUI4c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uToeVRaGB1yStxPf' => 
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
        'as' => 'generated::uToeVRaGB1yStxPf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YzIbaFxVdpHAXUdn' => 
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
        'as' => 'generated::YzIbaFxVdpHAXUdn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T5vL7fd5tSAbHb1D' => 
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
        'as' => 'generated::T5vL7fd5tSAbHb1D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9AC9BQgkbjl3kcCg' => 
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
        'as' => 'generated::9AC9BQgkbjl3kcCg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZCCCXXEbzp5MGrXr' => 
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
        'as' => 'generated::ZCCCXXEbzp5MGrXr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ePrmtNmLQXnKtvvf' => 
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
        'as' => 'generated::ePrmtNmLQXnKtvvf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8PZcCkuc6k9Qpqd1' => 
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
        'as' => 'generated::8PZcCkuc6k9Qpqd1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7HA1OHOTxrEcftY1' => 
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
        'as' => 'generated::7HA1OHOTxrEcftY1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XrXwxZvoAkO6PVSS' => 
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
        'as' => 'generated::XrXwxZvoAkO6PVSS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nYWSVVqSKslA6xQj' => 
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
        'as' => 'generated::nYWSVVqSKslA6xQj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J9EHmwegso1qOcxO' => 
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
        'as' => 'generated::J9EHmwegso1qOcxO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OvZIZcUfvFHHDYGs' => 
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
        'as' => 'generated::OvZIZcUfvFHHDYGs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3cPbdwXEZHCMQ8QV' => 
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
        'as' => 'generated::3cPbdwXEZHCMQ8QV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y04c1RbRbeiabEXp' => 
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
        'as' => 'generated::y04c1RbRbeiabEXp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2pPMwleLfuf81yhp' => 
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
        'as' => 'generated::2pPMwleLfuf81yhp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2pe6xS8lNfXKMfWQ' => 
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
        'as' => 'generated::2pe6xS8lNfXKMfWQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6ChtcBHahyrM2N8m' => 
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
        'as' => 'generated::6ChtcBHahyrM2N8m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AfCvfaPnjWcX3qIp' => 
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
        'as' => 'generated::AfCvfaPnjWcX3qIp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jQkCkl7AUgOz4jx8' => 
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
        'as' => 'generated::jQkCkl7AUgOz4jx8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ERnL2E7DUibzdJX9' => 
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
        'as' => 'generated::ERnL2E7DUibzdJX9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V6j7BJfGygNoJUWV' => 
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
        'as' => 'generated::V6j7BJfGygNoJUWV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ma2mhvtJ1xnA7ACI' => 
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
        'as' => 'generated::ma2mhvtJ1xnA7ACI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5BVbxRet7g6OsGrg' => 
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
        'as' => 'generated::5BVbxRet7g6OsGrg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FNrICXyuCxTy8h6g' => 
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
        'as' => 'generated::FNrICXyuCxTy8h6g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sr9GjElALK0V4g3m' => 
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
        'as' => 'generated::Sr9GjElALK0V4g3m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oyZbqe821x6BGKGH' => 
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
        'as' => 'generated::oyZbqe821x6BGKGH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rqjXKizRQibNpXxg' => 
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
        'as' => 'generated::rqjXKizRQibNpXxg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cSeGyxnTBQGwK5MM' => 
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
        'as' => 'generated::cSeGyxnTBQGwK5MM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L2IFu3VHVprxMVr7' => 
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
        'as' => 'generated::L2IFu3VHVprxMVr7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N0Xb56SZBrunIC7Q' => 
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
        'as' => 'generated::N0Xb56SZBrunIC7Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sOoquT05BY2olLYn' => 
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
        'as' => 'generated::sOoquT05BY2olLYn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8P3G0lbFBpECPZEs' => 
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
        'as' => 'generated::8P3G0lbFBpECPZEs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rrco1MuZYVOseSYO' => 
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
        'as' => 'generated::Rrco1MuZYVOseSYO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YOcvcqFYbvsWbq6u' => 
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
        'as' => 'generated::YOcvcqFYbvsWbq6u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VNAQHrr4nkjCBTxZ' => 
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
        'as' => 'generated::VNAQHrr4nkjCBTxZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KGBltWtMgUEIuLzk' => 
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
        'as' => 'generated::KGBltWtMgUEIuLzk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q0fEJljf0hM81Nw2' => 
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
        'as' => 'generated::Q0fEJljf0hM81Nw2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GlV1jnI2q7dNhsoU' => 
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
        'as' => 'generated::GlV1jnI2q7dNhsoU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TRLitwYFcpPawBuN' => 
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
        'as' => 'generated::TRLitwYFcpPawBuN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JCtIAIMq8PUK8LW3' => 
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
        'as' => 'generated::JCtIAIMq8PUK8LW3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HdHBddPxn2b3tU8E' => 
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
        'as' => 'generated::HdHBddPxn2b3tU8E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gr2hSDoEdFdXcIDa' => 
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
        'as' => 'generated::gr2hSDoEdFdXcIDa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fgtPjBGuwTwdWkUr' => 
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
        'as' => 'generated::fgtPjBGuwTwdWkUr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6QlIOy98SR9s3DNH' => 
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
        'as' => 'generated::6QlIOy98SR9s3DNH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZWXqHQX2TIzLTLMQ' => 
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
        'as' => 'generated::ZWXqHQX2TIzLTLMQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::411AZVgRKpMBhMF6' => 
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
        'as' => 'generated::411AZVgRKpMBhMF6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lUmg9cOT1A4H0IGe' => 
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
        'as' => 'generated::lUmg9cOT1A4H0IGe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bGLj8h07EE7hQNFy' => 
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
        'as' => 'generated::bGLj8h07EE7hQNFy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zb8Xx337UTNAnuPE' => 
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
        'as' => 'generated::Zb8Xx337UTNAnuPE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DAtSgqsTOQCXSdXC' => 
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
        'as' => 'generated::DAtSgqsTOQCXSdXC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BJrogByT8StDKvgg' => 
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
        'as' => 'generated::BJrogByT8StDKvgg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RKQxaa93KLLcnVzC' => 
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
        'as' => 'generated::RKQxaa93KLLcnVzC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::01MZy7VEJ8o0LGCc' => 
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
        'as' => 'generated::01MZy7VEJ8o0LGCc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BvWN9rHDHS8hWWKw' => 
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
        'as' => 'generated::BvWN9rHDHS8hWWKw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1Q3REvmelbPbdIDz' => 
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
        'as' => 'generated::1Q3REvmelbPbdIDz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rw1kD0I3YGT6fg5a' => 
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
        'as' => 'generated::Rw1kD0I3YGT6fg5a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jwes3x6fWtLWmiUU' => 
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
        'as' => 'generated::Jwes3x6fWtLWmiUU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0iT2jgeT5FkMmV2t' => 
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
        'as' => 'generated::0iT2jgeT5FkMmV2t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BeUMDH7noW9pSV1W' => 
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
        'as' => 'generated::BeUMDH7noW9pSV1W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gh9k5f11bSAL04Yg' => 
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
        'as' => 'generated::Gh9k5f11bSAL04Yg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rsla3qD7PSfqRvgB' => 
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
        'as' => 'generated::Rsla3qD7PSfqRvgB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::96BMvncEknRbPAlk' => 
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
        'as' => 'generated::96BMvncEknRbPAlk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MbPIPgM6CDn7Nf60' => 
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
        'as' => 'generated::MbPIPgM6CDn7Nf60',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x4RsSisIRhotf5rg' => 
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
        'as' => 'generated::x4RsSisIRhotf5rg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c26ALULAvAqDwSfP' => 
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
        'as' => 'generated::c26ALULAvAqDwSfP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dAWiVzPSu6WVH2e5' => 
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
        'as' => 'generated::dAWiVzPSu6WVH2e5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WLL2z8y8dPCbzekD' => 
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
        'as' => 'generated::WLL2z8y8dPCbzekD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I0xSlepT9dbgi3P3' => 
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
        'as' => 'generated::I0xSlepT9dbgi3P3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IAJ9xOjmNid9pet7' => 
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
        'as' => 'generated::IAJ9xOjmNid9pet7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bQT15Z76TjdIlIZe' => 
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
        'as' => 'generated::bQT15Z76TjdIlIZe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZqNsKhRDn0OWiNsb' => 
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
        'as' => 'generated::ZqNsKhRDn0OWiNsb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MHLgpV1AB7GtBEUp' => 
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
        'as' => 'generated::MHLgpV1AB7GtBEUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ubeOQMk0Nu6whGB3' => 
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
        'as' => 'generated::ubeOQMk0Nu6whGB3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::plKTERZnXALvszbC' => 
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
        'as' => 'generated::plKTERZnXALvszbC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZcMZ47skcrHME5Ic' => 
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
        'as' => 'generated::ZcMZ47skcrHME5Ic',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X9MMpUGDc7GjVjvb' => 
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
        'as' => 'generated::X9MMpUGDc7GjVjvb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::isfi0uRz73jf8l8S' => 
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
        'as' => 'generated::isfi0uRz73jf8l8S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2eIFxTfvOJZjxGEC' => 
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
        'as' => 'generated::2eIFxTfvOJZjxGEC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aflM2Xna1lP3yZiZ' => 
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
        'as' => 'generated::aflM2Xna1lP3yZiZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UilAeCPuLNnJPKVs' => 
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
        'as' => 'generated::UilAeCPuLNnJPKVs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NiW2lvTb0VWKjciH' => 
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
        'as' => 'generated::NiW2lvTb0VWKjciH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5b7H7PAmMUANlJn8' => 
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
        'as' => 'generated::5b7H7PAmMUANlJn8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qG3ULZ6Ak7bDTs1c' => 
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
        'as' => 'generated::qG3ULZ6Ak7bDTs1c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
