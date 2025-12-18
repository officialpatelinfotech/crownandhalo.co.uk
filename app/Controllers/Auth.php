<?php namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // attempt to clear opcode cache for this file (helps during development)
        if (function_exists('opcache_invalidate')) {
            @opcache_invalidate(__FILE__, true);
        }
        helper(['form']);

        // debug: record incoming method and input for troubleshooting
        @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' METHOD:' . $this->request->getMethod() . ' INPUT:' . json_encode(array_merge($this->request->getPost(), $this->request->getGet())) . PHP_EOL, FILE_APPEND);
        @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' CHECK_AFTER_METHOD' . PHP_EOL, FILE_APPEND);

        if (strtolower($this->request->getMethod()) === 'post') {
            @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' IN_POST_BRANCH' . PHP_EOL, FILE_APPEND);
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' ABOUT_TO_LOOKUP email:' . ($email ?: '[empty]') . PHP_EOL, FILE_APPEND);

            $model = new UserModel();
            try {
                $user = $model->where('email', $email)->first();
                if ($user) {
                    @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' HASH:' . substr($user['password_hash'],0,30) . '...' . PHP_EOL, FILE_APPEND);
                }
                @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' USER_FOUND:' . ($user ? '1' : '0') . PHP_EOL, FILE_APPEND);
            } catch (\Throwable $e) {
                @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' MODEL_EXCEPTION:' . $e->getMessage() . PHP_EOL, FILE_APPEND);
                $user = null;
            }
            @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' AFTER_LOOKUP' . PHP_EOL, FILE_APPEND);

            if ($user && password_verify($password, $user['password_hash'])) {
                @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' PASSWORD_OK for user ' . $email . PHP_EOL, FILE_APPEND);
                @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' SESSION_BEFORE:' . session_id() . PHP_EOL, FILE_APPEND);
                session()->set('user_id', $user['id']);
                session()->set('is_admin', (bool) $user['is_admin']);
                // Log runtime SAPI and session save path to ensure we're writing to expected location
                @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' SAPI:' . php_sapi_name() . ' SAVE_PATH:' . ini_get('session.save_path') . PHP_EOL, FILE_APPEND);
                @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' SESSION_AFTER_BEFORE_CLOSE:' . session_id() . ' VARS:' . json_encode(session()->get()) . PHP_EOL, FILE_APPEND);
                // Force PHP to write and close the session immediately (diagnostic)
                try {
                    @session_write_close();
                } catch (\Throwable $e) {
                    @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' SESSION_WRITE_CLOSE_ERROR:' . $e->getMessage() . PHP_EOL, FILE_APPEND);
                }
                @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' SESSION_AFTER_CLOSE:' . session_id() . ' VARS:' . json_encode(session()->get()) . PHP_EOL, FILE_APPEND);
                return redirect()->to('/admin');
            }

            @file_put_contents(WRITEPATH . 'logs/login_debug.txt', date('c') . ' INVALID_CREDENTIALS for ' . $email . PHP_EOL, FILE_APPEND);
            return redirect()->back()->with('error', 'Invalid credentials')->withInput();
        }

        echo view('layout/header', ['admin_header' => true, 'admin_page_title' => 'Admin Login']);
        echo view('auth/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}
