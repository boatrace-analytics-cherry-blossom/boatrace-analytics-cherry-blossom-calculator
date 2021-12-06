<?php

return [
    'Calculator' => \DI\create('\Boatrace\Analytics\Cherry\Blossom\Calculator')->constructor(
        \DI\get('MainCalculator')
    ),
    'MainCalculator' => function ($container) {
        return $container->get('\Boatrace\Analytics\Cherry\Blossom\MainCalculator');
    },
];
