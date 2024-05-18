<?php

namespace Omniletter\\\\Integration\\\\Controllers;

use Plenty\\\\Plugin\\\\Controller;
use Plenty\\\\Plugin\\\\Http\\\\Request;
use Plenty\\\\Modules\\\\Plugin\\\\Contracts\\\\PluginSettingsRepositoryContract;
use Omniletter\\\\Integration\\\\Api\\\\OmniletterClient;

class SettingsController extends Controller
{
    private $settingsRepository;
    private $omniletterClient;

    public function __construct(PluginSettingsRepositoryContract $settingsRepository, OmniletterClient $omniletterClient)
    {
        $this->settingsRepository = $settingsRepository;
        $this->omniletterClient = $omniletterClient;
    }

    public function showSettings()
    {
        $settings = $this->settingsRepository->getAll();
        return view("OmniletterIntegration::settings", ["settings" => $settings]);
    }

    public function saveSettings(Request $request)
    {
        $settings = $request->all();
        $this->settingsRepository->set($settings);
        return redirect()->back()->with("success", "Settings saved successfully.");
    }

    public function showSync()
    {
        return view("OmniletterIntegration::sync");
    }

    public function syncContacts()
    {
        // Logik zur Synchronisierung der Kontakte
        return redirect()->back()->with("success", "Contacts synchronized successfully.");
    }

    public function showNewsletter()
    {
        return view("OmniletterIntegration::newsletter");
    }

    public function sendNewsletter(Request $request)
    {
        $data = $request->all();
        $response = $this->omniletterClient->sendNewsletter($data);
        return redirect()->back()->with("success", "Newsletter sent successfully.");
    }
}
