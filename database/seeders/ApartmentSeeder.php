<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $apartments = [
            [
                'title' => 'La Baia dei Naviganti',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/miso/Hosting-5214836/original/8485d9eb-c498-4657-b2e1-ce98801a331b.jpeg?im_w=1200',
                'is_visible' => true,
                'address' => 'Via Minerva, Roma, Italy',
                'longitude' => 12.477274,
                'latitude' => 41.898544,
            ],
            [
                'title' => 'Villa di lusso in campagna L\'Olearia in Costiera Amalfitana',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/miso/Hosting-49878900/original/523f5c65-aa83-4858-bf8d-3b63e964b4a3.jpeg?im_w=1200',
                'is_visible' => true,
                'address' => 'Via Partenope, Napoli, Italy',
                'longitude' => 14.255130,
                'latitude' => 40.837070,
            ],
            [
                'title' => 'Amore • Attico FronteMare FCO',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/4805734c-abe7-43c0-8bd8-e498bcbd041a.jpg?im_w=1200',
                'is_visible' => true,
                'address' => 'Via Nazionale, Roma, Italy',
                'longitude' => 12.488681,
                'latitude' => 41.897778,
            ],
            [
                'title' => 'Villa Mimosa - villa sul mare con piscina',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/prohost-api/Hosting-1017304321459143064/original/0b4754b5-4439-423b-add3-1a5137bce9f4.jpeg?im_w=1200',
                'is_visible' => true,
                'address' => 'Via Caracciolo, Napoli, Italy',
                'longitude' => 14.247858,
                'latitude' => 40.829712,
            ],
            [
                'title' => 'Villa dei Lecci - Villa con piscina privata',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/a12fdb3e-bc13-436b-81d2-7cd895c400fd.jpg?im_w=1200',
                'is_visible' => true,
                'address' => 'Via del Traghetto, Bologna, Italy',
                'longitude' => 11.311810,
                'latitude' => 44.528823,
            ],
            [
                'title' => 'Silene',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/prohost-api/Hosting-22137397/original/1ed20167-7fe4-4d09-a1ef-5f699d5b32b6.jpeg?im_w=1200',
                'is_visible' => true,
                'address' => 'Via Roma, Palermo, Italy',
                'longitude' => 13.361663,
                'latitude' => 38.120536,
            ],
            [
                'title' => 'Incredibili viste sul mare e sulle isole',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/bd092a9f-08d9-4877-9d8e-2873473154c5.jpg?im_w=1200',
                'is_visible' => true,
                'address' => 'Via XX Settembre, Genova, Italy',
                'longitude' => 8.944053,
                'latitude' => 44.404820,
            ],
            [
                'title' => 'Bella Vista Beachfront Condo',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/a0af6720-3214-4f0b-a6a6-cbc62a185950.jpg?im_w=1200',
                'is_visible' => true,
                'address' => 'Via della liberta\', Palermo, Italy',
                'longitude' => 13.350501,
                'latitude' => 38.132610,
            ],
            [
                'title' => 'Così Com\'è, camera “Elba” con bagno privato!',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/2375f793-615c-46bf-ba61-938bf71f9964.jpg?im_w=1200',
                'is_visible' => true,
                'address' => 'Via dei Fori Imperiali, Roma, Italy',
                'longitude' => 12.485360,
                'latitude' => 41.895980,
            ],
            [
                'title' => 'Rilassati, divertiti, il mare è il tuo cortile',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/2d2a9515-302a-4e20-aea7-2215edc79371.jpg?im_w=1200',
                'is_visible' => true,
                'address' => 'Corso Sardegna, Genova, Italy',
                'longitude' => 8.953006,
                'latitude' => 44.406734,
            ],
            [
                'title' => 'Monolocale con vista sul Burj Khalifa dal balcone',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1,5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/miso/Hosting-721540609203378406/original/9dfaf7d6-40f2-4673-b468-7c5ab3147f86.jpeg?im_w=1440',
                'is_visible' => true,
                'address' => 'Corso Vittorio Emanuele II, Milano, Italy',
                'longitude' => 9.189510,
                'latitude' => 45.464270,
            ],
            [
                'title' => 'City Treasure on 13th',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/miso/Hosting-855265289472667062/original/99f4d83b-7de8-467a-be43-4a5ddd184b24.jpeg?im_w=1200',
                'is_visible' => true,
                'address' => 'Viale Roma, Bologna, Italy',
                'longitude' => 11.390287,
                'latitude' => 44.470752,
            ],
            [
                'title' => 'Kimyô Exclusive House SPA e Wellness',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/miso/Hosting-47066856/original/6a042ff8-2888-40ea-88e5-8687c50bc364.jpeg?im_w=720',
                'is_visible' => true,
                'address' => 'Via de La Birra, Bologna, Italy',
                'longitude' => 11.293623,
                'latitude' => 44.521464,
            ],
            [
                'title' => 'Skylinemilan com',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/miso/Hosting-44314599/original/1f40fa8b-4b1b-46fe-ade9-ea2236f5082b.jpeg?im_w=1200',
                'is_visible' => true,
                'address' => 'Via Napo Torriani, 20124 Milano MI',
                'longitude' => 9.202871,
                'latitude' => 45.483874,
            ],
            [
                'title' => 'Il Victory Loft',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => '	https://a0.muscache.com/im/pictures/miso/Hosting-752624031577677214/original/d0194f64-6797-438c-a332-ede1360b0c86.jpeg?im_w=720',
                'is_visible' => true,
                'address' => 'Via Tommaso Gulli, 20147 Milano MI',
                'longitude' => 9.134209,
                'latitude' => 45.470168,
            ],
            [
                'title' => 'Bee, Italia. Intero alloggio: unità in affitto',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/miso/Hosting-938252448134253594/original/c9c41aa6-e454-4649-bce2-4808fa3b276f.jpeg?im_w=960',
                'is_visible' => true,
                'address' => 'Via Roberto Rossellini, 20153 Milano MI',
                'longitude' => 9.1955,
                'latitude' => 45.4682,
            ],
            [
                'title' => 'Cassina Valsassina, Italia. Stanza privata in resort',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/1d10a9f2-088e-4aac-b797-92ec541cc485.jpg?im_w=720',
                'is_visible' => true,
                'address' => 'Via Giovan Filippo Mariti, Milano',
                'longitude' => 9.1919,
                'latitude' => 45.4641,
            ],
            [
                'title' => 'Mornico Losana, Italia. Intero alloggio: casa',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/b3c0eb8b-3db2-4fc2-a072-8b7e6f5c3780.jpg?im_w=720',
                'is_visible' => true,
                'address' => 'Via Alessandro Manzoni, Firenze',
                'longitude' => 9.1908,
                'latitude' => 45.4837,
            ],
            [
                'title' => 'Como, Italia. Intero alloggio: villa',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/98cf03d7-8b34-49dc-afa3-11256ef5f62f.jpg?im_w=1200',
                'is_visible' => true,
                'address' => 'Via Baguttino, Milano',
                'longitude' => 9.1739,
                'latitude' => 45.4749,
            ],
            [
                'title' => 'Accogliente camera con vista su Lakeland Fells',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://a0.muscache.com/im/pictures/65d55d6c-f6ce-4d22-84ec-c0e7e736214d.jpg?im_w=720',
                'is_visible' => true,
                'address' => 'Via Dei Bossi, Milano',
                'longitude' => 9.1873,
                'latitude' => 45.4835,
            ],
            [
                'title' => 'Casa Orsini',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://vivimilano.corriere.it/wp-content/uploads/2023/04/fuorisalone-2023-armani-casa-a-palazzo-orsini.jpg?v=966720',
                'is_visible' => true,
                'address' => 'Via Giuseppe Verdi, 20121 Milano MI',
                'longitude' => 9.188408,
                'latitude' => 45.468839,
            ],
            [
                'title' => 'Casa Lincoln',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://partodamilano.com/wp-content/uploads/2021/02/via-lincoln-milano_copertina-1-scaled.jpg',
                'is_visible' => true,
                'address' => 'Via Abramo Lincoln, 20129 Milano MI',
                'longitude' => 9.209706,
                'latitude' => 45.465260,
            ],
            [
                'title' => 'Appartamento fresco ed elegante nel quartiere di P.ta Venezia',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => ' https://blog.urbanfile.org/wp-content/uploads/2017/09/2017_Palazzo-della-società-Buonarroti-Carpaccio-Giotto-Piero-Portaluppi-Corso-Venezia-42-44_1.jpg',
                'is_visible' => true,
                'address' => 'Piazza Eleonora Duse, 20103 Milano MI',
                'longitude' => 9.204218,
                'latitude' => 45.471345,
            ],
            [
                'title' => 'Navigli: pace e relax',
                'description' => 'Una casa accogliente, baciata dalla luce del sole, abbracciata da un giardino rigoglioso. Le sue pareti emanano calore familiare, mentre le finestre si aprono verso paesaggi incantevoli. Un rifugio di serenità e conforto, dove ogni dettaglio racconta storie di vita e amore.',
                'room_number' => rand(1, 5),
                'bed_number' => rand(1, 6),
                'toilet_number' => rand(1, 3),
                'square_meters' => rand(30, 6000),
                'img_url' => 'https://static2-living.corriereobjects.it/wp-content/uploads/2015/07/appartamento-milano-zona-navigli-01_MGbig.jpg',
                'is_visible' => true,
                'address' => 'Via Scaldasole, 20123 Milano MI',
                'longitude' => 9.178844,
                'latitude' => 45.454821,
            ],

        ];

        $userIds = User::all()->pluck('id');
        $categoryIds = Category::all()->pluck('id');

        foreach ($apartments as $apartment) {
            $apartment['user_id'] = $faker->randomElement($userIds);
            $apartment['category_id'] = $faker->randomElement($categoryIds);
            Apartment::create($apartment);
        }
    }
}
