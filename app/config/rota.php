<?php
// Aqui ficam todos os policiais desse país
use Metache\Thiago\Controller\{
                    PegarProduto, 
                    Principal, 
                    ProdEspecifico,
                    ProdEspecificoControlador
                };

return[
    "GET|/"=>[
        'controller' => Principal::class,
        'repository' => 'Comum'
    ],
    "GET|/pegar-produto"=>[
        'controller' => PegarProduto::class,
        'repository' => 'Produto'
    ],
    "POST|/produto-especifico"=>[
        'controller' => ProdEspecificoControlador::class,
        'repository' => 'Produto'
    ],
    "GET|/produto-especifico"=>[
        'controller' => ProdEspecifico::class,
        'repository' => 'Produto'
    ]
];