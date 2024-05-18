<?php

namespace Omniletter\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Omniletter\Services\OmniletterService;

class OmniletterController extends Controller
{
    private $omniletterService;

    public function __construct(OmniletterService $omniletterService)
    {
        $this->omniletterService = $omniletterService;
    }

    public function subscribe(Request $request)
    {
        $email = $request->input('email');
        return $this->omniletterService->subscribe($email);
    }

    public function unsubscribe(Request $request)
    {
        $email = $request->input('email');
        return $this->omniletterService->unsubscribe($email);
    }

    public function getSubscribers()
    {
        return $this->omniletterService->getSubscribers();
    }

    public function sendNewsletter(Request $request)
    {
        $subject = $request->input('subject');
        $content = $request->input('content');
        return $this->omniletterService->sendNewsletter($subject, $content);
    }
}