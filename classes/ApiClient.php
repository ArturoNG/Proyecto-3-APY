<?php 
declare(strict_types=1); //La api no me pasará nada que no sea un string

class ApiClient {
    private string $api_url; //definimos que contiene nuestra api
    
    public function __construct(string $api_url) {
        $this->api_url = $api_url;
    }

    public function fetchData(): array {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        curl_close($ch);

        if ($response === false) {
            error_log('CURL Error: ' . $curl_error);
            return [];
        }

        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log('JSON Decode Error: ' . json_last_error_msg());
            return [];
        }

        return $data;
    }
}

?>
