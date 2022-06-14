<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata['http://localhost:1511/'] = array(
    'AssertionConsumerService' => 'http://localhost:1511/authentication/check_login',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
    'simplesaml.nameidattribute' => 'uid',
    'simplesaml.attributes'      => true
);

$metadata['http://localhost/'] = array(
    'AssertionConsumerService' => 'http://localhost/authentication/check_login',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
    'simplesaml.nameidattribute' => 'uid',
    'simplesaml.attributes'      => true
);

$metadata['https://localhost/'] = array(
    'AssertionConsumerService' => 'https://localhost/authentication/check_login',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
    'simplesaml.nameidattribute' => 'uid',
    'simplesaml.attributes'      => true
);
