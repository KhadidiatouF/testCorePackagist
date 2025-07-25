<?php

    namespace App\Core\Middlewares;

    class CryptPassword
    {
        public function __invoke(): void
        {
            if (isset($_POST['password'])) {
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
            }
        }
    }