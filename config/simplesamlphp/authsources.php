<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-ldap' => [
        'ldap:LDAP',
        'hostname' => 'ldap://host.docker.internal:389',
        'enable_tls' => false,
        'attributes' => NULL,
        'dnpattern' => 'uid=%username%,ou=users,dc=vagrant,dc=local'
    ]

);
