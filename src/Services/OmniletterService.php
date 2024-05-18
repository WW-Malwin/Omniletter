<?php

namespace Omniletter\Services;

use Plenty\Plugin\ConfigRepository;
use GuzzleHttp\Client;

class OmniletterService
{
    private $apiUrl;
    private $apiKey;
    private $client;

    public function __construct(ConfigRepository $config)
    {
        $this->apiUrl = $config->get('Omniletter.api_url');
        $this->apiKey = $config->get('Omniletter.api_key');
        $this->client = new Client();
    }

    public function subscribe($email)
    {
        $response = $this->client->post($this->apiUrl . '/subscribe', [
            'json' => ['email' => $email],
            'headers' => ['Authorization' => 'Bearer ' . $this->apiKey]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function unsubscribe($email)
    {
        $response = $this->client->post($this->apiUrl . '/unsubscribe', [
            'json' => ['email' => $email],
            'headers' => ['Authorization' => 'Bearer ' . $this->apiKey]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getSubscribers()
    {
        $response = $this->client->get($this->apiUrl . '/subscribers', [
            'headers' => ['Authorization' => 'Bearer ' . $this->apiKey]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function sendNewsletter($subject, $content)
    {
        $response = $this->client->post($this->apiUrl . '/sendNewsletter', [
            'json' => ['subject' => $subject, 'content' => $content],
            'headers' => ['Authorization' => 'Bearer ' . $this->apiKey]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }
}