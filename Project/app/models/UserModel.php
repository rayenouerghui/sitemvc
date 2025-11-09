<?php
// app/models/UserModel.php
require_once __DIR__ . '/BaseModel.php';

class UserModel extends BaseModel
{
    // Minimal example - in future replace with DB calls
    public function getUser(array $criteria = [])
    {
        // return dummy user for now
        return [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com'
        ];
    }
}
