<?php
namespace atelier\controllers;

use yii\web\Controller;
use yii;
use Google\Client;
use Google\Service\Calendar;

class CalendarController extends Controller{
    //require __DIR__ . '/vendor/autoload.php';

    // if (php_sapi_name() != 'cli') {
    //     throw new Exception('This application must be run on the command line.');
    // }

    /**
     * Returns an authorized API client.
     * @return Client the authorized client object
     */
    public function googleClient()
    {
        
        $client = new Client();
        $client->setApplicationName('Google Calendar API PHP Quickstart');
        $client->setScopes('https://www.googleapis.com/auth/calendar.events.readonly');
        $client->setAuthConfig('credentials.json');
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

        // Load previously authorized token from a file, if it exists.
        // The file token.json stores the user's access and refresh tokens, and is
        // created automatically when the authorization flow completes for the first
        // time.
        $tokenPath = 'token.json';
        if (file_exists($tokenPath)) {
            $accessToken = json_decode(file_get_contents($tokenPath), true);
            $client->setAccessToken($accessToken);
        }

        // If there is no previous token or it's expired.
        if ($client->isAccessTokenExpired()) {
            // Refresh the token if possible, else fetch a new one.
            if ($client->getRefreshToken()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            } else {
                // Request authorization from the user.
                $authUrl = $client->createAuthUrl();
                printf("Open the following link in your browser:\n%s\n", $authUrl);
                print 'Enter verification code: ';
                $authCode = trim(fgets(STDIN));

                // Exchange authorization code for an access token.
                $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
                $client->setAccessToken($accessToken);

                // Check to see if there was an error.
                if (array_key_exists('error', $accessToken)) {
                    throw new Exception(join(', ', $accessToken));
                }
            }
            // Save the token to a file.
            if (!file_exists(dirname($tokenPath))) {
                mkdir(dirname($tokenPath), 0700, true);
            }
            file_put_contents($tokenPath, json_encode($client->getAccessToken()));
        }
        return $client;
    }

    /**
     * @return Client Show List of Events
     */
    public function actionIndex()
    {
        # code...
        // Get the API client and construct the service object.
        $client = $this->googleClient();
        $service = new Calendar($client);

        return $this->render('index', [
            'client'  => $client,
            'service' => $service,
        ]);
    }
}