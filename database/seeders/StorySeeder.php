<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "El mito de Naylamp",
                "Dicen los pobladores de Lambayeque que en tiempos muy antiguos, que no saben en qué año fue, vino al Perú con una gran flota de balsas un señor de mucho valor y prestigio llamado Naylamp, y trajo consigo una gran cantidad de gente.",
                "/img/naylamp.png"
            ],
            [
                "Los peces y los hombres",
                "Los peces habían sido seres humanos, como descendientes de una antiquísima raza de enanos que poblaba nuestras tierras en edades pretéritas. Vivían en ciudades lacustres y reverenciaban al mar, sus tormentas, sus arenas y sus conchas.",
                "/img/peces.png"
            ],
            [
                "El dios Pachacamac y Vichama",
                "En el principio no había comida suficiente para un hombre y una mujer que el dios Pachacamac había creado, por lo que murió de hambre el hombre y solo quedó la mujer.",
                "/img/pachacamac.png"
            ],
            [
                "El mito del origen del mochica y el algarrobo",
                "Luchaban por todo el universo los dos poderes eternos: el genio del Bien y el poder maligno. Cada uno buscaba establecer la supremacía de sus propios derechos y ambos rodaban por los diferentes mundos y los espacios siderales.",
                "/img/mochica.png"
            ],
            [
                "Somos herederos y guardianes de la Tierra",
                "En nuestro pueblo: Las piedras son memoria, hablan de la historia antigua. Las plantas son medicina, curan los males. Los animales son compañía alimentan y enseñan.",
                "/img/guardianes.png"
            ],
            [
                "Vamos a sembrar y cosechar con nuestras familias",
                "La agricultura, como actividad socioproductiva y fuente de sustento de las comunidades, debe considerar los factores de crecimiento de las plantas, sus ciclos de vida y los hábitats en los que se desarrollan.",
                "/img/sembrar.png"
            ],
        ];
        foreach ($data as $item) {
            DB::table('stories')->insert([
                    'name' => $item[0],
                    'slug' => Str::of($item[0])->slug('-'),
                    'intro' => $item[1],
                    'image_url' => $item[2],
            ]);
        }

    }
}
