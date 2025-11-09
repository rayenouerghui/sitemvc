<?php
// app/models/BaseModel.php
class BaseModel
{
    // Placeholder for business logic / DB connection later
    protected function sanitize(string $s): string
    {
        return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
    }
}
