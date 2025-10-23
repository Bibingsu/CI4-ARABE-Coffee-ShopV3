<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        return view('user/landing');
    }

    public function login()
    {
        // If form submitted
        if ($this->request->getMethod() === 'post') {
            $userModel = new UserModel();
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $userModel->where('email', $email)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Set user session
                session()->set([
                    'user_id'   => $user['id'],
                    'username'  => $user['username'],
                    'email'     => $user['email'],
                    'logged_in' => true,
                ]);

                // Redirect to moodboard (or homepage)
                return redirect()->to('/moodboard')->with('success', 'Welcome back, ' . $user['username'] . '!');
            } else {
                // Invalid login
                return redirect()->back()->with('error', 'Invalid email or password.');
            }
        }

        // Otherwise show login form
        return view('user/login');
    }

    public function signup()
    {
        $userModel = new UserModel();

        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();

            $validation->setRules([
                'name'              => 'required|min_length[3]',
                'email'             => 'required|valid_email|is_unique[users.email]',
                'password'          => 'required|min_length[6]',
                'confirm_password'  => 'required|matches[password]',
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                return view('user/signup', ['validation' => $validation]);
            }

            $userModel->save([
                'username' => $this->request->getPost('name'),
                'email'    => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
            ]);

            return redirect()->to('/signin')->with('success', 'Account created successfully! You can now sign in.');
        }

        return view('user/signup');
    }

    public function moodboard()
    {
        return view('user/moodboard');
    }

    public function roadmap()
    {
        return view('user/roadmap');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/signin')->with('success', 'You have been logged out.');
    }
}
