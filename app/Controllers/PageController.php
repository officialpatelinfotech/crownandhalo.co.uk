<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class PageController extends BaseController
{
    public function about()
    {
        helper(['url']);
        return view('layout/header')
            . view('about')
            . view('layout/footer');
    }

    public function contact()
    {
        helper(['url']);
        return view('layout/header')
            . view('contact')
            . view('layout/footer');
    }

    public function sendContact(): RedirectResponse
    {
        helper(['url']);

        $rules = [
            'name'    => 'required|min_length[2]',
            'email'   => 'required|valid_email',
            'phone'   => 'permit_empty|min_length[7]',
            'message' => 'required|min_length[10]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Please correct the form and try again.');
        }

        $formData = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'phone'   => $this->request->getPost('phone'),
            'message' => $this->request->getPost('message'),
        ];

        $email = \Config\Services::email();

        // Target recipient (site owner) from env or fallback
        $to = $_ENV['SITE_OWNER_EMAIL'] ?? getenv('SITE_OWNER_EMAIL') ?? 'owner@example.com';

        $email->setTo($to);
        // Use the visitor's email as reply-to
        $email->setFrom($_ENV['FROM_EMAIL'] ?? getenv('FROM_EMAIL') ?? 'no-reply@example.com', 'Website Contact');
        $email->setReplyTo($formData['email'], $formData['name']);
        $email->setSubject('New Contact Message from ' . $formData['name']);
        $email->setMessage(view('email/contact_email_template', $formData));

        if ($email->send()) {
            return redirect()->to('/contact')->with('success', 'Thanks! Your message has been sent.');
        }

        $debug = $email->printDebugger(['headers']);
        return redirect()->back()->withInput()->with('error', 'Could not send email. ' . $debug);
    }

    public function sitemap()
    {
        helper(['url']);
        return view('layout/header')
            . view('sitemap')
            . view('layout/footer');
    }

    public function gallery()
    {
        helper(['url']);
        return view('layout/header')
            . view('gallery')
            . view('layout/footer');
    }

    public function pricing()
    {
        helper(['url']);
        return view('layout/header')
            . view('pricing')
            . view('layout/footer');
    }

    public function howDressHire()
    {
        helper(['url']);
        return view('layout/header')
            . view('how-dress-hire')
            . view('layout/footer');
    }

    public function terms()
    {
        helper(['url']);
        return view('layout/header')
            . view('terms')
            . view('layout/footer');
    }

    public function faqs()
    {
        helper(['url']);
        return view('layout/header')
            . view('faqs')
            . view('layout/footer');
    }

    public function book()
    {
        helper(['url']);
        return view('layout/header')
            . view('book')
            . view('layout/footer');
    }

    public function privacy()
    {
        helper(['url']);
        return view('layout/header')
            . view('privacy')
            . view('layout/footer');
    }
}
