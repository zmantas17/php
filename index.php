</<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style>
    body{
        background-color: black;
    }
</style>
</body>
</html>
<?php
$array = [
    '2A' => [
        rand(1, 10000) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Matas'),
            'pavarde' => strtoupper('Matusauskas'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 10000) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Kestas'),
            'pavarde' => strtoupper('Kazlauskas'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 10000) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Katinas'),
            'pavarde' => strtoupper('Juodas'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 10000) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Jurate'),
            'pavarde' => strtoupper('Jurauskiene'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 10000) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Adomas'),
            'pavarde' => strtoupper('Jemalas'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
    ],
    '2B' => [
        rand(1, 10000) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Augustas'),
            'pavarde' => strtoupper('Augustinas'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 10000) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Erika'),
            'pavarde' => strtoupper('Erikute'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 10000) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Kestutis'),
            'pavarde' => strtoupper('Kestuciauskas'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 10000) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Edita'),
            'pavarde' => strtoupper('Editauskiene'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 10000) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Rytas'),
            'pavarde' => strtoupper('Rytenas'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],

    ]
];
?>
<table><tr><th>Klasė</th><th>Kodas</th><th>Vardas</th><th>Pavardė</th><th>Kontrolinių darbų vidurkis</th><th>Duomenų formatavimo data</th></tr>
    <?php
        foreach($array as $klase => $mokiniai):
            foreach($mokiniai as $data => $datainf):
                $vidurkis = 0;
             foreach ($datainf['balai'] as $belenkas => $balai){
                $vidurkis += $balai;
            }
            $vidurkis = round($vidurkis / 3,2);
    ?>

            <tr>
                <td><?=$klase;?></td>
                <td><?=$data;?></td>
                <td><?=$datainf['vardas'];?></td>
                <td><?=$datainf['pavarde'];?></td>
                <td><?=$vidurkis;?></td>
                <td><?=$datainf['data'];?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>

