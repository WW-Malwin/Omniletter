<?php

namespace Omniletter\\\\Integration\\\\Api;

use Plenty\\\\Modules\\\\Plugin\\\\Contracts\\\\PluginSettingsRepositoryContract;

class OmniletterClient
{
    private $apiKey;
    private $baseUrl = "https://api.omniletter.com";

    public function __construct(PluginSettingsRepositoryContract $settingsRepository)
    {
        $this->apiKey = $settingsRepository->get("OmniletterIntegration.api_key");
    }

    public function getContacts()
    {
        return $this->request("GET", "/contacts");
    }

    public function createContact($data)
    {
        return $this->request("POST", "/contacts", $data);
    }

    public function sendNewsletter($data)
    {
        return $this->request("POST", "/newsletters/send", $data);
    }

    private function request($method, $endpoint, $data = [])
    {
        $client = new \GuzzleHttp\Client(["base_uri" => $this->baseUrl]);

        $options = [
            "headers" => [
                "Authorization" => "Bearer " . $this->apiKey,
                "Accept" => "application/json",
                "Content-Type" => "application/json"
            ],
        ];

        if ($method === "POST" || $method === "PUT") {
            $options["json"] = $data;
        }

        $response = $client->request($method, $endpoint, $options);

        return json_decode($response->getBody()->getContents(), true);
    }
}
