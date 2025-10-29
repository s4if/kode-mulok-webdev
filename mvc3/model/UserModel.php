<?php
// Model - Handle data operations
class UserModel
{
    // Dummy user database (username => password)
    private $users = [
        'admin' => 'password123',
        'user' => 'bismillah',
        'player' => '1234'
    ];

    // Check if user exists and password is correct
    public function authenticate($username, $password)
    {
        if (isset($this->users[$username])) {
            return $this->users[$username] === $password;
        }
        return false;
    }

    // Check if user exists
    public function userExists($username)
    {
        return isset($this->users[$username]);
    }
}