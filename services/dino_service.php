<?php

$dinos = [
    [
        'id' => '1',
        'name' => 't-rex',
        'full_name' => 'tyrannosaurus rex',
        'img' => 'assets/imgs/dinos/pixel-cute/trex-sprite.png',
        'description' => 'The T. rex was a large carnivorous dinosaur that lived in North America during the late Cretaceous period. It was the largest known land predator of all time, and one of the largest known land animals of all time. It was about 12 metres (39 ft) long, 4 metres (13 ft) tall at the hips, and weighed about 6.5 tonnes (7.2 short tons).'
    ],
    [
        'id' => '2',
        'name' => 'trike',
        'full_name' => 'triceratops',
        'img' => 'assets/imgs/dinos/pixel-cute/trike-sprite.png',
        'description' => 'The Triceratops was a large, plant-eating dinosaur that lived in what is now North America during the late Cretaceous period. It was about 9 metres (30 ft) long, 4 metres (13 ft) tall at the hips, and weighed about 6 tonnes (6.6 short tons).'


    ],
    [
        'id' => '3',
        'name' => 'stego',
        'full_name' => 'stegosaurus',
        'img' => 'assets/imgs/dinos/pixel-cute/stego-sprite.png',
        'description' => 'The Stegosaurus was a large, plant-eating dinosaur that lived in what is now North America during the late Jurassic period. It was about 9 metres (30 ft) long, 3 metres (9.8 ft) tall at the hips, and weighed about 3 tonnes (3.3 short tons).'
    ],
    [
        'id' => '4',
        'name' => 'pterodactyl',
        'full_name' => 'pterodactyl',
        'img' => 'assets/imgs/dinos/pixel-cute/pterodactyl-sprite.png',
        'description' => 'The Pterodactyl was a large, flying reptile that lived in what is now North America during the late Jurassic period. It was about 4 metres (13 ft) long, 2 metres (6.6 ft) tall at the hips, and weighed about 1 tonne (1.1 short tons).'
    ],
    [
        'id' => '5',
        'name' => 'diplo',
        'full_name' => 'diplodocus',
        'img' => 'assets/imgs/dinos/pixel-cute/diplo-sprite.png',
        'description' => 'The Diplodocus was a large, plant-eating dinosaur that lived in what is now North America during the late Jurassic period. It was about 30 metres (98 ft) long, 4 metres (13 ft) tall at the hips, and weighed about 10 tonnes (11 short tons).'
    ],
    [
        'id' => '6',
        'name' => 'edmontonia',
        'full_name' => 'edmontonia',
        'img' => 'assets/imgs/dinos/pixel-cute/edmontonia-sprite.png',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.'
    ],

    [
        'id' => '7',
        'name' => 'mammoth',
        'full_name' => 'wooly mammoth',
        'img' => 'assets/imgs/dinos/pixel-cute/mammoth-sprite.png',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.'
    ],
    [
        'id' => '8',
        'name' => 'saber',
        'full_name' => 'saber-toothed tiger',
        'img' => 'assets/imgs/dinos/pixel-cute/saber-sprite.png',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.'
    ]

];

function query($query = []) {
    global $dinos;
    return array_values($dinos);
}

function get_by_id($id) {
    $dinos = query();
    foreach ($dinos as $dino) {
        if ($dino['id'] === $id) {
            return $dino;
        }
    }
    return null;
}
