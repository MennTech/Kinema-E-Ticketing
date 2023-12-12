<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function(){
//     $table_film = [
//         [
//             'poster_film' => 'poster-film1.jpeg',
//             'judul_film' => 'Avengers: Endgame',
//             'genre' => 'Action, Adventure, Drama',
//             'durasi' => '3h 1m',
//             'status' => 'Now Playing',
//             'ratingUsia' => '13',
//             'sinopsis' => 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins.',
//             'sutradara' => 'Anthony Russo, Joe Russo',
//             'actor' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo',
//         ],
//         [
//             'poster_film' => 'poster-film1.jpeg',
//             'judul_film' => 'The Shawshank Redemption',
//             'genre' => 'Drama',
//             'durasi' => '2h 22m',
//             'status' => 'Now Playing',
//             'ratingUsia' => '13',
//             'sinopsis' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
//             'sutradara' => 'Frank Darabont',
//             'actor' => 'Tim Robbins, Morgan Freeman, Bob Gunton',
//         ],
//         [
//             'poster_film' => 'poster-film1.jpeg',
//             'judul_film' => 'The Godfather',
//             'genre' => 'Crime, Drama',
//             'durasi' => '2h 55m',
//             'status' => 'Now Playing',
//             'ratingUsia' => '13',
//             'sinopsis' => 'An organized crime dynastys aging patriarch transfers control of his clandestine empire to his reluctant son.',
//             'sutradara' => 'Francis Ford Coppola',
//             'actor' => 'Marlon Brando, Al Pacino, James Caan',
//         ],
//         [
//             'poster_film' => 'poster-film1.jpeg',
//             'judul_film' => 'Avengers: Endgame',
//             'genre' => 'Action, Adventure, Drama',
//             'durasi' => '3h 1m',
//             'status' => 'Now Playing',
//             'ratingUsia' => '13',
//             'sinopsis' => 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins.',
//             'sutradara' => 'Anthony Russo, Joe Russo',
//             'actor' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo',
//         ],
//         [
//             'poster_film' => 'poster-film1.jpeg',
//             'judul_film' => 'The Shawshank Redemption',
//             'genre' => 'Drama',
//             'durasi' => '2h 22m',
//             'status' => 'Now Playing',
//             'ratingUsia' => '13',
//             'sinopsis' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
//             'sutradara' => 'Frank Darabont',
//             'actor' => 'Tim Robbins, Morgan Freeman, Bob Gunton',
//         ],
//         [
//             'poster_film' => 'poster-film1.jpeg',
//             'judul_film' => 'The Godfather',
//             'genre' => 'Crime, Drama',
//             'durasi' => '2h 55m',
//             'status' => 'Now Playing',
//             'ratingUsia' => '13',
//             'sinopsis' => 'An organized crime dynastys aging patriarch transfers control of his clandestine empire to his reluctant son.',
//             'sutradara' => 'Francis Ford Coppola',
//             'actor' => 'Marlon Brando, Al Pacino, James Caan',
//         ],
//         [
//             'poster_film' => 'poster-film1.jpeg',
//             'judul_film' => 'Pulp Fiction',
//             'genre' => 'Crime, Drama',
//             'durasi' => '2h 34m',
//             'status' => 'Coming Soon',
//             'ratingUsia' => '13',
//             'sinopsis' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
//             'sutradara' => 'Quentin Tarantino',
//             'actor' => 'John Travolta, Uma Thurman, Samuel L. Jackson',
//         ],
//         [
//             'poster_film' => 'poster-film1.jpeg',
//             'judul_film' => 'The Dark Knight',
//             'genre' => 'Action, Crime, Drama',
//             'durasi' => '2h 32m',
//             'status' => 'Coming Soon',
//             'ratingUsia' => '13',
//             'sinopsis' => 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.',
//             'sutradara' => 'Christopher Nolan',
//             'actor' => 'Christian Bale, Heath Ledger, Aaron Eckhart',
//         ],
//         [
//             'poster_film' => 'poster-film1.jpeg',
//             'judul_film' => 'Schindler\'s List',
//             'genre' => 'Biography, Drama, History',
//             'durasi' => '3h 15m',
//             'status' => 'Not Show',
//             'ratingUsia' => '13',
//             'sinopsis' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
//             'sutradara' => 'Steven Spielberg',
//             'actor' => 'Liam Neeson, Ralph Fiennes, Ben Kingsley',
//         ],
//     ];

//     // Mendifinisikan tab berdasarkan parameter di URL atau menggunakan nilai default
//     $tab = request('tab', 'nowplaying');

//     // Filter film berdasarkan tab yang dipilih
//     $filtered_films = collect($table_film)->filter(function ($film) use ($tab) {
//         return $film['status'] == ($tab == 'nowplaying' ? 'Now Playing' : 'Coming Soon');
//     })->values()->all();

//     return view('user/pages/index', compact('table_film', 'filtered_films', 'tab'));
// });

Route::get('/', function(){
    return view('user/pages/index',
    [
        'table_film' => [
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'Avengers: Endgame',
                'genre' => 'Action, Adventure, Drama',
                'durasi' => '3h 1m',
                'status' => 'Now Playing',
                'ratingUsia' => '13',
                'sinopsis' => 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins.',
                'sutradara' => 'Anthony Russo, Joe Russo',
                'actor' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'The Shawshank Redemption',
                'genre' => 'Drama',
                'durasi' => '2h 22m',
                'status' => 'Now Playing',
                'ratingUsia' => '13',
                'sinopsis' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'sutradara' => 'Frank Darabont',
                'actor' => 'Tim Robbins, Morgan Freeman, Bob Gunton',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'The Godfather',
                'genre' => 'Crime, Drama',
                'durasi' => '2h 55m',
                'status' => 'Now Playing',
                'ratingUsia' => '13',
                'sinopsis' => 'An organized crime dynastys aging patriarch transfers control of his clandestine empire to his reluctant son.',
                'sutradara' => 'Francis Ford Coppola',
                'actor' => 'Marlon Brando, Al Pacino, James Caan',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'Avengers: Endgame',
                'genre' => 'Action, Adventure, Drama',
                'durasi' => '3h 1m',
                'status' => 'Now Playing',
                'ratingUsia' => '13',
                'sinopsis' => 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins.',
                'sutradara' => 'Anthony Russo, Joe Russo',
                'actor' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'The Shawshank Redemption',
                'genre' => 'Drama',
                'durasi' => '2h 22m',
                'status' => 'Now Playing',
                'ratingUsia' => '13',
                'sinopsis' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'sutradara' => 'Frank Darabont',
                'actor' => 'Tim Robbins, Morgan Freeman, Bob Gunton',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'The Godfather',
                'genre' => 'Crime, Drama',
                'durasi' => '2h 55m',
                'status' => 'Now Playing',
                'ratingUsia' => '13',
                'sinopsis' => 'An organized crime dynastys aging patriarch transfers control of his clandestine empire to his reluctant son.',
                'sutradara' => 'Francis Ford Coppola',
                'actor' => 'Marlon Brando, Al Pacino, James Caan',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'Pulp Fiction',
                'genre' => 'Crime, Drama',
                'durasi' => '2h 34m',
                'status' => 'Coming Soon',
                'ratingUsia' => '13',
                'sinopsis' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'sutradara' => 'Quentin Tarantino',
                'actor' => 'John Travolta, Uma Thurman, Samuel L. Jackson',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'The Dark Knight',
                'genre' => 'Action, Crime, Drama',
                'durasi' => '2h 32m',
                'status' => 'Coming Soon',
                'ratingUsia' => '13',
                'sinopsis' => 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.',
                'sutradara' => 'Christopher Nolan',
                'actor' => 'Christian Bale, Heath Ledger, Aaron Eckhart',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'Schindler\'s List',
                'genre' => 'Biography, Drama, History',
                'durasi' => '3h 15m',
                'status' => 'Not Show',
                'ratingUsia' => '13',
                'sinopsis' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
                'sutradara' => 'Steven Spielberg',
                'actor' => 'Liam Neeson, Ralph Fiennes, Ben Kingsley',
            ],
        ],
    ]);
});

Route::get('/detail', function(){
    return view('user/pages/detail', [
        'table_film' => [
            'poster_film' => 'poster-film1.jpeg',
            'judul_film' => 'Avengers: Endgame',
            'genre' => 'Action, Adventure, Drama',
            'durasi' => '181',
            'status' => 'Now Playing',
            'ratingUsia' => '13',
            'sinopsis' => 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins.',
            'sutradara' => 'Anthony Russo, Joe Russo',
            'actor' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo',
        ],
        'jadwal'=>[
            'tanggal' => date('d-F-Y'),
            'jam' => [
                '09:15',
                '12:45',
                '15:30',
                '19:15',
            ],
            'harga' => '35000',
        ]
    ]);
});

Route::get('/food', function(){
    return view('user/pages/food', [
        'total_harga' => '0',
        'table_food'=>[
            [
                'id' => '1',
                'gambar' => 'makanan1.jpg',
                'nama' => 'Popcorn',
                'harga' => '20000',
                'jumlah'=>'0'
            ],
            [
                'id' => '2',
                'gambar' => 'makanan1.jpg',
                'nama' => 'Popcorn',
                'harga' => '25000',
                'jumlah'=>'0'
            ],
            [
                'id' => '3',
                'gambar' => 'makanan1.jpg',
                'nama' => 'Popcorn',
                'harga' => '30000',
                'jumlah'=>'0'
            ],
            [
                'id' => '4',
                'gambar' => 'makanan1.jpg',
                'nama' => 'Popcorn',
                'harga' => '40000',
                'jumlah'=>'0'
            ],
        ]
    ]);
});

Route::get('/login', function () {
    return view('auth/login',[
    ]);
});

Route::get('/register', function () {
    return view('auth/register',[
    ]);
});

Route::get('/Admin', function () {
    return view('admin/landingPage',[
        'title' => 'dashboard',
        'foto_profile' => 'user2.jpg',
        'name' => 'Budi Subawa',
        'card' => [
            [
                'images' => 'ticket.jpg',
                'card_title'=> 'Ticket Sale',
                'value'=> '80',

            ],
            [
                'images' => 'food.jpg',
                'card_title'=> 'Food Sale',
                'value'=> '50',

            ],
            [
                'images' => 'income.jpg',
                'card_title'=> 'Income Today',
                'value'=> '2400000',

            ],
            [
                'images' => 'income.jpg',
                'card_title'=> 'Income Total',
                'value'=> '7500000',

            ],
        ],
        'table_value' => [
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'no_telp' => '081234567891',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'John',
                'email' => 'john@example.com',
                'no_telp' => '081234567892',
                'create_date' => '02-01-2023',
            ],
        ]
    ]);
});

Route::get('/Data-Film', function () {
    return view('admin/dataFilm',[
        'title' => 'data_film',
        'foto_profile' => 'user2.jpg',
        'name' => 'Budi Subawa',
        'table_film'=> 
        [
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'Avengers: Endgame',
                'genre' => 'Action, Adventure, Drama',
                'durasi' => '3h 1m',
                'status' => 'Now Playing',
                'ratingUsia' => '13',
                'sinopsis' => 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins.',
                'sutradara' => 'Anthony Russo, Joe Russo',
                'actor' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'The Shawshank Redemption',
                'genre' => 'Drama',
                'durasi' => '2h 22m',
                'status' => 'Now Playing',
                'ratingUsia' => '13',
                'sinopsis' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'sutradara' => 'Frank Darabont',
                'actor' => 'Tim Robbins, Morgan Freeman, Bob Gunton',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'The Godfather',
                'genre' => 'Crime, Drama',
                'durasi' => '2h 55m',
                'status' => 'Now Playing',
                'ratingUsia' => '13',
                'sinopsis' => 'An organized crime dynastys aging patriarch transfers control of his clandestine empire to his reluctant son.',
                'sutradara' => 'Francis Ford Coppola',
                'actor' => 'Marlon Brando, Al Pacino, James Caan',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'Pulp Fiction',
                'genre' => 'Crime, Drama',
                'durasi' => '2h 34m',
                'status' => 'Coming Soon',
                'ratingUsia' => '13',
                'sinopsis' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'sutradara' => 'Quentin Tarantino',
                'actor' => 'John Travolta, Uma Thurman, Samuel L. Jackson',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'The Dark Knight',
                'genre' => 'Action, Crime, Drama',
                'durasi' => '2h 32m',
                'status' => 'Coming Soon',
                'ratingUsia' => '13',
                'sinopsis' => 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.',
                'sutradara' => 'Christopher Nolan',
                'actor' => 'Christian Bale, Heath Ledger, Aaron Eckhart',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'Schindler\'s List',
                'genre' => 'Biography, Drama, History',
                'durasi' => '3h 15m',
                'status' => 'Not Show',
                'ratingUsia' => '13',
                'sinopsis' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
                'sutradara' => 'Steven Spielberg',
                'actor' => 'Liam Neeson, Ralph Fiennes, Ben Kingsley',
            ],
        ],
    ]);
});

Route::get('/Data-Makanan', function () {
    return view('admin/dataMakanan',[
        'title' => 'data_makanan',
        'foto_profile' => 'user2.jpg',
        'name' => 'Budi Subawa',
        'tabel_makanan' =>
        [
            [
                'gambar_makanan' => 'makanan1.jpg',
                'nama_makanan' => 'Popcorn',
                'stock' => '50',
                'harga' => '20000',
            ],
            [
                'gambar_makanan' => 'makanan1.jpg',
                'nama_makanan' => 'Nachos',
                'stock' => '30',
                'harga' => '25000',
            ],
            [
                'gambar_makanan' => 'makanan1.jpg',
                'nama_makanan' => 'Hot Dog',
                'stock' => '40',
                'harga' => '30000',
            ],
            [
                'gambar_makanan' => 'makanan1.jpg',
                'nama_makanan' => 'Ice Cream',
                'stock' => '25',
                'harga' => '18000',
            ],
            [
                'gambar_makanan' => 'makanan1.jpg',
                'nama_makanan' => 'Soft Drink',
                'stock' => '60',
                'harga' => '15000',
            ],
            [
                'gambar_makanan' => 'makanan1.jpg',
                'nama_makanan' => 'Candy',
                'stock' => '35',
                'harga' => '10000',
            ],
            [
                'gambar_makanan' => 'makanan1.jpg',
                'nama_makanan' => 'Pretzel',
                'stock' => '20',
                'harga' => '22000',
            ],
            [
                'gambar_makanan' => 'makanan1.jpg',
                'nama_makanan' => 'Churros',
                'stock' => '30',
                'harga' => '28000',
            ],
        ]
    ]);
});

Route::get('/Tambah-Film', function () {
    return view('admin/tambahFilm',[
        'title' => 'data_film',
        'foto_profile' => 'user2.jpg',
        'name' => 'Budi Subawa',
    ]);
});

Route::get('/Edit-Film', function () {
    return view('admin/editFilm',[
        'title' => 'data_film',
        'foto_profile' => 'user2.jpg',
        'name' => 'Budi Subawa',
    ]);
});

Route::get('/Tambah-Makanan', function () {
    return view('admin/tambahMakanan',[
        'title' => 'data_makanan',
        'foto_profile' => 'user2.jpg',
        'name' => 'Budi Subawa',
    ]);
});

Route::get('/Edit-Makanan', function () {
    return view('admin/editMakanan',[
        'title' => 'data_makanan',
        'foto_profile' => 'user2.jpg',
        'name' => 'Budi Subawa',
    ]);
});

Route::get('/Profile', function () {
    return view('user/profile',[
        'title' => 'profile',
        'foto_profile' => 'admin2.jpg',
        'name' => 'Trisna Utama',
        'email' => 'trisna@gmail.com',
        'no_telp' => '081234567891',
    ]);
});

Route::get('/Profile-MyTicket', function () {
    return view('user/myTicket',[
        'title' => 'profile-myTicket',
        'foto_profile' => 'admin2.jpg', //dipakai karena extend admin, bisa dihapus
        'name' => 'Trisna Utama', //dipakai karena extend admin, bisa dihapus
    ]);
});

Route::get('/Profile-MyFood', function () {
    return view('user/myFood',[
        'title' => 'profile-myFood',
        'foto_profile' => 'admin2.jpg', //dipakai karena extend admin, bisa dihapus
        'name' => 'Trisna Utama', //dipakai karena extend admin, bisa dihapus
    ]);
});