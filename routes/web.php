<?php

use Illuminate\Support\Facades\Route;

Route::get('/details', function () {
    return view('user/details');
});

Route::get('/seat', function () {
    return view('user/seat');
});

Route::get('/food', function () {
    return view('user/food');
});

Route::get('/', function () {
    return view('user/home');
});

Route::get('/login', function () {
    return view('user/login');
});

Route::get('/signup', function () {
    return view('user/signup');
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
            [
                'name' => 'Sarah',
                'email' => 'sarah@example.com',
                'no_telp' => '081234567893',
                'create_date' => '03-01-2023',
            ],
            [
                'name' => 'David',
                'email' => 'david@example.com',
                'no_telp' => '081234567894',
                'create_date' => '04-01-2023',
            ],
            [
                'name' => 'Linda',
                'email' => 'linda@example.com',
                'no_telp' => '081234567895',
                'create_date' => '05-01-2023',
            ],
            [
                'name' => 'Michael',
                'email' => 'michael@example.com',
                'no_telp' => '081234567896',
                'create_date' => '06-01-2023',
            ],
            [
                'name' => 'Emily',
                'email' => 'emily@example.com',
                'no_telp' => '081234567897',
                'create_date' => '07-01-2023',
            ],
            [
                'name' => 'Robert',
                'email' => 'robert@example.com',
                'no_telp' => '081234567898',
                'create_date' => '08-01-2023',
            ],
            [
                'name' => 'Jennifer',
                'email' => 'jennifer@example.com',
                'no_telp' => '081234567899',
                'create_date' => '09-01-2023',
            ],
            [
                'name' => 'Daniel',
                'email' => 'daniel@example.com',
                'no_telp' => '081234567890',
                'create_date' => '10-01-2023',
            ],
            [
                'name' => 'Lisa',
                'email' => 'lisa@example.com',
                'no_telp' => '081234567891',
                'create_date' => '11-01-2023',
            ],
            [
                'name' => 'William',
                'email' => 'william@example.com',
                'no_telp' => '081234567892',
                'create_date' => '12-01-2023',
            ],
            [
                'name' => 'Mia',
                'email' => 'mia@example.com',
                'no_telp' => '081234567893',
                'create_date' => '13-01-2023',
            ],
            [
                'name' => 'Richard',
                'email' => 'richard@example.com',
                'no_telp' => '081234567894',
                'create_date' => '14-01-2023',
            ],
            [
                'name' => 'Jessica',
                'email' => 'jessica@example.com',
                'no_telp' => '081234567895',
                'create_date' => '15-01-2023',
            ],
            [
                'name' => 'Christopher',
                'email' => 'christopher@example.com',
                'no_telp' => '081234567896',
                'create_date' => '16-01-2023',
            ],
            [
                'name' => 'Maria',
                'email' => 'maria@example.com',
                'no_telp' => '081234567897',
                'create_date' => '17-01-2023',
            ],
            [
                'name' => 'Thomas',
                'email' => 'thomas@example.com',
                'no_telp' => '081234567898',
                'create_date' => '18-01-2023',
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
                'ratingUsia' => '13',
                'sinopsis' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
                'sutradara' => 'Steven Spielberg',
                'actor' => 'Liam Neeson, Ralph Fiennes, Ben Kingsley',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'The Lord of the Rings: The Return of the King',
                'genre' => 'Action, Adventure, Drama',
                'durasi' => '3h 21m',
                'ratingUsia' => '13',
                'sinopsis' => 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
                'sutradara' => 'Peter Jackson',
                'actor' => 'Elijah Wood, Viggo Mortensen, Ian McKellen',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'Fight Club',
                'genre' => 'Drama',
                'durasi' => '2h 19m',
                'ratingUsia' => '13',
                'sinopsis' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.',
                'sutradara' => 'David Fincher',
                'actor' => 'Brad Pitt, Edward Norton, Meat Loaf',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'Forrest Gump',
                'genre' => 'Drama, Romance',
                'durasi' => '2h 22m',
                'ratingUsia' => '13',
                'sinopsis' => 'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other history unfold through the perspective of an Alabama man with an IQ of 75.',
                'sutradara' => 'Robert Zemeckis',
                'actor' => 'Tom Hanks, Robin Wright, Gary Sinise',
            ],
            [
                'poster_film' => 'poster-film1.jpeg',
                'judul_film' => 'Inception',
                'genre' => 'Action, Adventure, Sci-Fi',
                'durasi' => '2h 28m',
                'ratingUsia' => '13',
                'sinopsis' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'sutradara' => 'Christopher Nolan',
                'actor' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page',
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