<?php

return [
    'email' => [
        'is_unique' => 'Dirección de correo electrónico ya registrada'
    ],
    'password_confirmation' => [
        'required' => 'Confirmar contraseña',
        'matches' => 'Ingrese de nuevo su contraseña'
    ]
];