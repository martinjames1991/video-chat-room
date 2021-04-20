<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

class AccessTokenController extends Controller
{
    public function generate_token()
    {
        
         // Substitute your Twilio Account SID and API Key details
       /* $accountSid = 'enAC4f6046a9be8bc2a423aa512f423c2fd8';
        $apiKeySid = 'SK50711af3709feffa3abd378b9c945ed0';
        $apiKeySecret = 'kW3GTHOXjgbvmLu9LUids6Yp2qKcwlPU';
        */
        
        // Substitute your Twilio Account SID and API Key details
       $accountSid = env('TWILIO_ACCOUNT_SID');
        $apiKeySid = env('TWILIO_API_KEY_SID');
        $apiKeySecret = env('TWILIO_API_KEY_SECRET');

        $identity = uniqid();

        // Create an Access Token
        $token = new AccessToken(
            $accountSid,
            $apiKeySid,
            $apiKeySecret,
            3600,
            $identity
        );

        // Grant access to Video
        $grant = new VideoGrant();
        $grant->setRoom('cool room');
        $token->addGrant($grant);

        // Serialize the token as a JWT
        echo $token->toJWT();
    }
}
