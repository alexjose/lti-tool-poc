<?php

use Firebase\JWT\JWK;
use Firebase\JWT\JWT;
use GuzzleHttp\Client;
use League\OAuth2\Client\Provider\GenericProvider;

include_once __DIR__ . '/vendor/autoload.php';

$authUrl = 'http://34.199.4.79/mod/lti/auth.php';

$jwkUrl = 'http://34.199.4.79/mod/lti/certs.php';

$tokenUrl = 'http://34.199.4.79/mod/lti/token.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTI Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <!-- <h1>LTI Tool</h1> -->
        <?php if (!isset($_REQUEST['id_token'])) { ?>
        <h2>LTI Platform Config</h2>

        <form action="<?= $authUrl ?>" method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="client_id" class="form-label">Client ID</label>
                        <input id="client_id" class="form-control" name="client_id" type="text" value="RXG7GuwjbKOpDtU">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="login_hint" class="form-label">Login Hint</label>
                        <input id="login_hint" class="form-control" name="login_hint" type="text" value="<?= @$_REQUEST['login_hint'] ?>">
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3">
                        <label for="prompt" class="form-label">Prompt</label>
                        <input id="prompt" class="form-control" name="prompt" type="text" value="none">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="redirect_uri" class="form-label">Redirect Uri</label>
                        <input id="redirect_uri" class="form-control" name="redirect_uri" type="text" value="<?= @$_REQUEST['target_link_uri'] ?>">
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3">
                        <label for="response_mode" class="form-label">Response Mode</label>
                        <input id="response_mode" class="form-control" name="response_mode" type="text" value="form_post">
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3">
                        <label for="response_type" class="form-label">Response Type</label>
                        <input id="response_type" class="form-control" name="response_type" type="text" value="id_token">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="scope" class="form-label">Scope</label>
                        <input id="scope" class="form-control" name="scope" type="text" value="openid">
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <input id="state" class="form-control" name="state" type="text" value="63Gfgcwt">
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3">
                        <label for="lti_message_hint" class="form-label">LTI Message Hint</label>
                        <input id="lti_message_hint" class="form-control" name="lti_message_hint" type="text" value="<?= htmlspecialchars(@$_REQUEST['lti_message_hint']) ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="nonce" class="form-label">Nonce</label>
                        <input id="nonce" name="nonce" class="form-control" type="text" value="asdasd">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                </div>
            </div>
        </form>
        <?php 
        } 

        // echo 'Hello World';

        if (!empty($_REQUEST)) {
            

            // echo '<pre>';
            // var_dump($_REQUEST);
            // echo '</pre>';

            if (isset($_REQUEST['id_token'])) {
                echo '<textarea>' . $_REQUEST['id_token'] . '</textarea><br>';


                $client = new Client();
                $response = $client->get($jwkUrl);
                $responseBody = $response->getBody()->getContents();
                // var_dump($responseBody);
                $jwks = json_decode($responseBody, true);
                // var_dump($jwks);
                $decodedJWT = JWT::decode($_REQUEST['id_token'], JWK::parseKeySet($jwks));

                
                echo '<pre>';
                var_dump($decodedJWT);
                // echo 'Welcome ' . $decodedJWT->email ;
                echo '</pre>';

                $resource = $decodedJWT->{'https://purl.imsglobal.org/spec/lti/claim/resource_link'};

                if($resource->id == 3){
                    include 'pages/course.php';
                }else{
                    include 'pages/dashboard.php';
                }

                exit();

            }
            
        }
        // var_dump($jwks);

        
        ?>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        
        // $("form").submit();

    </script>
</body>

</html>