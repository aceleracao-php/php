<?php

require_once "../vendor/autoload.php";

use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;

$configuration = Configuration::forSymmetricSigner(
    // You may use any HMAC variations (256, 384, and 512)
    new Sha256(),
    // replace the value below with a key of your own!
    InMemory::plainText('Ajhkjdhka78921Aas9')
    // You may also override the JOSE encoder/decoder if needed by providing extra arguments here
);

$time = new DateTimeImmutable();

$token = $configuration->builder()
                        ->issuedBy("http://localhost:8000/api/")
                        ->permittedFor("http://localhost:8000/api/")
                        ->identifiedBy("87d9a8s7d9", true)
                        ->issuedAt($time)
                        ->canOnlyBeUsedAfter($time->modify('+1 minute'))
                        ->expiresAt($time->modify('+1 hour'))
                        ->withClaim('uid', 12)
                        ->withClaim('email', 'jonatan@email.com')
                        ->getToken($configuration->signer(), $configuration->signingKey());

//var_export($token);

echo "Token JWT: ". $token->toString();