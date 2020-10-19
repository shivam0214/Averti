<?php
namespace App\Libraries\plaid;
include(app_path() . '/Libraries/Zooms/vendor/autoload.php');


Class  Plaid{

public function __construct( $client_id = '',$secret_key='',$public_token='',$access_token='',$env_url='') {
    $this->client_id    = '5f350f7921746b00118dab19';
    $this->secret_key    ='0645162f1db37af2f8df30600f1b0d';
    $this->env_url ='sandbox.plaid.com';
    $this->access_token= 'access-sandbox-460bcd2d-3d17-45e5-903e-c73abf91c637';
    $this->public_token ='public-sandbox-9155417c-96fe-41e9-ad7c-3414e1e21c61';
}

public function transactions(){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://sandbox.plaid.com/transactions/get",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>"{\n  \"client_id\": \"5f350f7921746b00118dab19\",\n  \"secret\": \"0645162f1db37af2f8df30600f1b0d\",\n  \"access_token\": \"access-sandbox-c7d74200-0296-440f-b8b1-c633f436598a\",\n  \"start_date\": \"2017-01-01\",\n  \"end_date\": \"2019-05-10\" \n}",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
      ),
    ));    
    $response = curl_exec($curl);    
    curl_close($curl);
    echo $response;
  }

  public function balance(){

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://sandbox.plaid.com/accounts/balance/get",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>"{\n  \"client_id\": \"5f350f7921746b00118dab19\",\n  \"secret\": \"0645162f1db37af2f8df30600f1b0d\",\n  \"access_token\": \"access-sandbox-c7d74200-0296-440f-b8b1-c633f436598a\"\n}",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    
  }

  public function reterive_income(){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://sandbox.plaid.com/income/get",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{\n  \"client_id\": \"5f350f7921746b00118dab19\",\n  \"secret\": \"0645162f1db37af2f8df30600f1b0d\",\n  \"access_token\": \"access-sandbox-c7d74200-0296-440f-b8b1-c633f436598a\"\n}",
        CURLOPT_HTTPHEADER => array(
          "Content-Type: application/json"
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      echo $response;

  }
  public function reterive_auth(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://sandbox.plaid.com/auth/get",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>"{\n\t\"client_id\": \"5f350f7921746b00118dab19\",\n\t\"secret\": \"0645162f1db37af2f8df30600f1b0d\",\n\t\"access_token\": \"access-sandbox-c7d74200-0296-440f-b8b1-c633f436598a\"\n}",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "client_id: 5f350f7921746b00118dab19",
        "secret_key: 0645162f1db37af2f8df30600f1b0d",
        "access_token: access-sandbox-de3ce8ef-33f8-452c-a685-8671031fc0f6",
        "Authorization: Basic dXNlcl9nb29kOnBhc3NfZ29vZA=="
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

  }

  public function reterive_identity(){
    $curl = curl_init();    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://sandbox.plaid.com/identity/get",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>"{\n  \"client_id\": \"5f350f7921746b00118dab19\",\n  \"secret\": \"0645162f1db37af2f8df30600f1b0d\",\n  \"access_token\": \"access-sandbox-c7d74200-0296-440f-b8b1-c633f436598a\"\n}",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    
  }


  public function categories(){
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://sandbox.plaid.com/categories/get",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>"{}",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

}
  public function investment_holding(){
          $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://sandbox.plaid.com/investments/holdings/get",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{\n\t\"client_id\": \"5f350f7921746b00118dab19\",\n\t\"secret\": \"0645162f1db37af2f8df30600f1b0d\",\n\t\"access_token\": \"access-sandbox-c7d74200-0296-440f-b8b1-c633f436598a\"\n}",
        CURLOPT_HTTPHEADER => array(
          "Content-Type: application/json"
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      echo $response;

  }
  public function investment_transactions(){
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://sandbox.plaid.com/investments/transactions/get",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>"{\n  \"client_id\": \"5f350f7921746b00118dab19\",\n  \"secret\": \"0645162f1db37af2f8df30600f1b0d\",\n  \"access_token\": \"access-sandbox-c7d74200-0296-440f-b8b1-c633f436598a\",\n  \"start_date\": \"2017-01-01\",\n  \"end_date\": \"2019-06-01\" \n}",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    
  }

}