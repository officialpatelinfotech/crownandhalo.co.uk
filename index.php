<?php
// Front controller at project root to support Apache DocumentRoot at repository root.
// Delegates to CodeIgniter's front controller in /public.
require __DIR__ . '/public/index.php';