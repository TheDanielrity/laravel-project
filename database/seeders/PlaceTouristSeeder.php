<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlaceTourist;

class PlaceTouristSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlaceTourist::create([
            'name' => 'Machu Picchu',
            'description' => 'Esta ciudadela inca declarada “santuario histórico” es la atracción turística más famosa de Perú y uno de los yacimientos arqueológicos más importantes de América. Está en el Valle Sagrado de los Incas, a 2400 m.s.n.m. y a 75 km de Cusco, la antigua capital imperial prehispánica.',
            'ubication' => 'Cuzco',
            'img' => 'https://cdn.discordapp.com/attachments/1022926468331864135/1100238256257368165/machu-picchu.png'
        ]);

        PlaceTourist::create([
            'name' => 'Lago Titicaca',
            'description' => 'Este cuerpo de agua (que es el lago navegable a mayor altura en el mundo) se encuentra en el altiplano andino, a 3812  m.s.n.m.,  y un 56 % de su superficie de 8562 km2 pertenece a Perú, siendo boliviano el restante 44 %.',
            'ubication' => 'Puno',
            'img' => 'https://cdn.discordapp.com/attachments/1022926468331864135/1100238760630829127/lago-titicaca-1.png'
        ]);

        PlaceTourist::create([
            'name' => 'Líneas de Nazca',
            'description' => 'Un texto descriptivo de un lugar turístico del Perú como las Líneas de Nazca debe indicar que se trata de los dibujos realizados directamente en la superficie terrestre más colosales que haya hecho el hombre.',
            'ubication' => 'Ica',
            'img' => 'https://cdn.discordapp.com/attachments/1022926468331864135/1100239219546406942/lineas-de-nazca-1.png'
        ]);

        PlaceTourist::create([
            'name' => 'Plaza de armas de Arequipa',
            'description' => 'Arequipa, segunda ciudad peruana en población y sede del Tribunal Constitucional, destaca por sus inmuebles coloniales, parques y museos. El centro histórico de Arequipa alberga medio millar de edificaciones de interés',
            'ubication' => 'Arequipa',
            'img' => 'https://cdn.discordapp.com/attachments/1022926468331864135/1100239965444636712/arequipa-peru-1.png'
        ]);

        PlaceTourist::create([
            'name' => 'Plaza de armas de Trujillo',
            'description' => 'Es una ciudad costera, la más grande del norte de Perú. Es capital del departamento de La Libertad y sobresale por su centro histórico, sitios arqueológicos y playas.
            Tiene un agradable clima de 20-22 °C de temperatura en el verano del sur (diciembre-febrero), con picos de 26 °C y un invierno de 17-18 °C, mientras que las lluvias son un acontecimiento por su rareza. En Perú, Trujillo es llamada la Ciudad de la Eterna Primavera.',
            'ubication' => 'La Libertad',
            'img' => 'https://cdn.discordapp.com/attachments/1022926468331864135/1100240283192545370/trujillo-peru-1.png'
        ]);

        PlaceTourist::create([
            'name' => 'Plaza de armas de Chiclayo',
            'description' => 'Los chiclayanos son personas de una exquisita cortesía y gentileza, por lo que Chiclayo es conocida como la Capital de la Amistad.La ciudad se encuentra en el noreste peruano, frente al Pacífico.',
            'ubication' => 'Lambayeque',
            'img' => 'https://cdn.discordapp.com/attachments/1022926468331864135/1100241649419952188/chiclayo-peru-1.png'
        ]);

        PlaceTourist::create([
            'name' => 'Museo de Tumbas Reales del Señor de Sipán',
            'description' => 'El Señor de Sipán fue un gobernante de la civilización preincaica mochica, del siglo III, cuyos restos y cámara funeraria fueron encontrados en 1987. Fue un hallazgo trascendental porque se trató del primer entierro de un rey preincaico encontrado con su tesoro intacto.',
            'ubication' => 'Iquitos',
            'img' => 'https://cdn.discordapp.com/attachments/1022926468331864135/1100242542827671552/sitio-arqueologico-y-museo-de-tumbas-reales-del-senor-de-sipan-1.png'
        ]);

        PlaceTourist::create([
            'name' => 'El Misti',
            'description' => 'El Misti es uno de los siete volcanes activos situados en la cadena volcánica Pilo-Cuaternaria del sur peruano, perteneciente a la Zona Volcánica de los Andes Centrales. La altitud del Misti es de 5 822 metros y su desnivel con referencia a la Plaza de Armas de Arequipa es de 3 500 metros. La distancia desde la catedral de Arequipa hasta el cráter es de sólo 17 kilómetros en línea recta. En el lado opuesto, hacia el Altiplano, el desnivel es de 1 600 metros.',
            'ubication' => 'Arequipa',
            'img' => 'https://cdn.discordapp.com/attachments/1022926468331864135/1100272377469882368/1000_F_216678598_maCXVAWA3fPssw5EqfP1ewKgb3QkszGV.jpg'
        ]);

        PlaceTourist::create([
            'name' => 'Lago Zungarococha',
            'description' => 'Conocido por sus oscuras aguas, afluentes del extenso río Nanay, a 20 kilómetros de la ciudad de Iquitos nace el Lago Zungarococha, un centro poblado con 800 habitantes que resulta gran atractivo en las opciones turísticas del Perú y uno de los destinos más elegidos por locales y extranjeros de todo el mundo.',
            'ubication' => 'Loreto',
            'img' => 'https://cdn.discordapp.com/attachments/1022926468331864135/1100273538646155324/Loreto_-_Iquitos_1.jpg'
        ]);

        PlaceTourist::create([
            'name' => 'Bosque de Piedras',
            'description' => 'Este Bosque de Piedras se originó hace tres millones de años a causa del material volcánico que era parte de la zona. Pero lo interesante de este lugar son las formaciones cónicas que tienen las rocas, que pueden elevarse 10 metros, creando una vista realmente peculiar y sorprendente. Muchas veces se le conoce como “la aldea de los pitufos” al tener formas tan similares a los famosos dibujos animados y que lo hace tan único dentro de los atractivos turísticos que nos ofrece Apurímac. Es por eso que te recomendamos ir con tu cámara fotográfica para tomar las fotos que quieras y disfrutar de esta maravillosa vista.',
            'ubication' => 'Apurimac',
            'img' => 'https://cdn.discordapp.com/attachments/1022926468331864135/1100274557631340614/Mayra-Apurimac-Bosque-de-Piedras-Pampachiri-2-Brujula-Viajera.jpg'
        ]);
    }
}
