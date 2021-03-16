<?php

    class Registration extends Controller{

        public function __construct()
        {
            $this->userModel = $this->model('User');
        }

        public function index(){
            $this->view('users/registration');
        }

        public function login(){
            $data = [
                'title' => 'Registration page',
                'login' => '',
                'password' => '',
                'loginError' => '',
                'passwordError' => ''
            ];

            $this->view('users/registration', $data);
        }
    }