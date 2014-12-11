<?php

namespace SensioLabs\Connect\Security\Exception;

class OAuthEmailNotValidatedException extends AuthenticationException
{
    public function getMessageKey()
    {
        return 'SensioLabsConnect denied the authentication because your email is not validated';
    }
}
