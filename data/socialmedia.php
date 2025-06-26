<?php
class SocialMedia
{
    public string $name;

    // Function ini gabisa di override
    final function login($username, $pass): bool
    {
        return true;
    }
}

// Klo class nya final, maka gabisa diwariskan lagi
final class Facebook extends SocialMedia {}
