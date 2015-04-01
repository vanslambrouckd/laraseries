<?php

use App\Actor;
use App\Episode;
use App\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Serie;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');

        DB::table('series')->delete();
        DB::table('episodes')->delete();
        DB::table('actors')->delete();

        /*
        DB::table('series')->truncate();
        DB::table('episodes')->truncate();
        DB::table('actors')->truncate();
        */
        $serie = Serie::create([
            'title' => 'Breaking bad',
            'teaser' => 'When an unassuming high school chemistry teacher discovers he has a rare form of lung cancer, he decides to team up with a former student and create a top of the line crystal meth in a used RV, to provide for his family once he is gone.',
            'description' => 'When an unassuming high school chemistry teacher discovers he has a rare form of lung cancer, he decides to team up with a former student and create a top of the line crystal meth in a used RV, to provide for his family once he is gone.'
        ]);


        $serie = Serie::create([
            'title' => 'Game of thrones',
            'teaser' => 'Een eeuwenoude machtsstrijd barst los in het land waar de zomers decennia duren en de winters een leven lang kunnen aanslepen. Twee machtige geslachten - de regerende Baratheons en de verbannen Targaryens - maken zich op om de IJzeren Troon te claimen en de Zeven Koninkrijken van Westeros onder hun controle te krijgen. Maar in een tijdperk waarin verraad, lust, intriges en bovennatuurlijke krachten hoogtij vieren, zal hun dodelijke kat-en-muisspelletje onvoorziene en verreikende gevolgen hebben. Achter een eeuwenoude, gigantische muur van ijs in het uiterste noorden van Westeros maakt een kille vijand zich immers op om het land onder de voet te lopen. Gebaseerd op de bestseller fantasyreeks "A Song of Ice and Fire" van George R.R. Martin. ',
            'description' => 'Een eeuwenoude machtsstrijd barst los in het land waar de zomers decennia duren en de winters een leven lang kunnen aanslepen. Twee machtige geslachten - de regerende Baratheons en de verbannen Targaryens - maken zich op om de IJzeren Troon te claimen en de Zeven Koninkrijken van Westeros onder hun controle te krijgen. Maar in een tijdperk waarin verraad, lust, intriges en bovennatuurlijke krachten hoogtij vieren, zal hun dodelijke kat-en-muisspelletje onvoorziene en verreikende gevolgen hebben. Achter een eeuwenoude, gigantische muur van ijs in het uiterste noorden van Westeros maakt een kille vijand zich immers op om het land onder de voet te lopen. Gebaseerd op de bestseller fantasyreeks "A Song of Ice and Fire" van George R.R. Martin. '
        ]);

        Episode::create([
            'title' => 'Winter is Coming',
            'teaser' => 'Ned Stark, Lord of Winterfell learns that his mentor, Jon Arryn, has died and that King Robert is on his way north to offer Ned Arryn’s position as the King’s Hand. Across the Narrow Sea in Pentos, Viserys Targaryen plans to wed his sister Daenerys to the nomadic Dothraki warrior leader, Khal Drogo to forge an alliance to take the throne.',
            'description' => 'Ned Stark, Lord of Winterfell learns that his mentor, Jon Arryn, has died and that King Robert is on his way north to offer Ned Arryn’s position as the King’s Hand. Across the Narrow Sea in Pentos, Viserys Targaryen plans to wed his sister Daenerys to the nomadic Dothraki warrior leader, Khal Drogo to forge an alliance to take the throne.',
            'airdate' => \Carbon\Carbon::create(2011,4, 17),
            'serie_id' => $serie->id
        ]);

        Episode::create([
            'title' => 'The Kingsroad',
            'teaser' => 'Having agreed to become the King’s Hand, Ned leaves Winterfell with daughters Sansa and Arya, while Catelyn stays behind in Winterfell. Jon Snow heads north to join the brotherhood of the Night’s Watch. Tyrion decides to forego the trip south with his family, instead joining Jon in the entourage heading to the Wall. Viserys bides his time in hopes of winning back the throne, while Daenerys focuses her attention on learning how to please her new husband, Drogo.',
            'description' => 'Having agreed to become the King’s Hand, Ned leaves Winterfell with daughters Sansa and Arya, while Catelyn stays behind in Winterfell. Jon Snow heads north to join the brotherhood of the Night’s Watch. Tyrion decides to forego the trip south with his family, instead joining Jon in the entourage heading to the Wall. Viserys bides his time in hopes of winning back the throne, while Daenerys focuses her attention on learning how to please her new husband, Drogo.',
            'airdate' => \Carbon\Carbon::create(2011,4, 24),
            'serie_id' => $serie->id
        ]);

        $serie = Serie::create([
            'title' => 'The big bang Theory',
            'teaser' => 'De vrienden Sheldon, Leonard, Raj en Howard zijn echte geeks met een voorliefde voor wetenschap. Ze snappen alles op het gebied van natuur- en scheikunde, maar voeg atomen samen tot een vrouw en het bevattingsvermogen van de mannen komt tot stilstand. Gelukkig hebben ze hun blonde buurvrouw Penny die lang niet zo slim is, maar wel de sociale vaardigheden beheerst die het viertal mist.',
            'description' => 'De vrienden Sheldon, Leonard, Raj en Howard zijn echte geeks met een voorliefde voor wetenschap. Ze snappen alles op het gebied van natuur- en scheikunde, maar voeg atomen samen tot een vrouw en het bevattingsvermogen van de mannen komt tot stilstand. Gelukkig hebben ze hun blonde buurvrouw Penny die lang niet zo slim is, maar wel de sociale vaardigheden beheerst die het viertal mist.'
        ]);

        Episode::create([
            'title' => 'The Big Bran Hypothesis',
            'teaser' => 'Leonard volunteers to sign for a package in an attempt to make a good impression on Penny, but when he enlists Sheldon for help, his attempt at chivalry goes terribly awry.',
            'description' => 'Leonard volunteers to sign for a package in an attempt to make a good impression on Penny, but when he enlists Sheldon for help, his attempt at chivalry goes terribly awry.',
            'airdate' => \Carbon\Carbon::create(2007,1, 10),
            'serie_id' => $serie->id
        ]);

        Episode::create([
            'title' => 'Pilot',
            'teaser' => 'Brilliant physicist roommates Leonard and Sheldon meet their new neighbor Penny, who begins showing them that as much as they know about science, they know little about actual living.',
            'description' => 'Brilliant physicist roommates Leonard and Sheldon meet their new neighbor Penny, who begins showing them that as much as they know about science, they know little about actual living.',
            'airdate' => \Carbon\Carbon::create(2007,9, 24),
            'serie_id' => $serie->id
        ]);

        Actor::create([
           'firstname' => 'Johnny',
            'lastname' => 'Galecki',
            'birthname' => 'John Mark Galecki',
            'biography' => "John Mark Galecki was born in Belgium where his dad was stationed while serving in the U.S. Air Force. When he was 3 years old, his family moved to Chicago, Illinois, where he grew up along with his sister Allison (1980) and brother Nick (1982). His father then became a teacher for blind veterans in a VA hospital outside of Chicago. When Galecki was 16, his father died in an accident.",
            'serie_id' => $serie->id
        ]);

        Actor::create([
            'firstname' => 'Jim',
            'lastname' => 'Parsons',
            'birthname' => 'James Joseph Parsons',
            'biography' => 'Having grown up in Houston, and its northern suburb of Spring, he made his first stage appearance in a school play at the age of 6. Parsons then went on to study theater at the University of Houston. From there he won a place on a two-year Masters course in classical theater at the University of San Diego/The Old Globe Theater, graduating in 2001.

He moved to New York, working in Off-Broadway productions, appearing in TV commercials and in one episode of Ed (2000) before landing a recurring role in Judging Amy (1999) in 2004.',
            'serie_id' => $serie->id
        ]);

        Genre::create([
        'genre' => 'Actie'
        ]);
        Genre::create([
            'genre' => 'Avontuur'
        ]);
        Genre::create([
            'genre' => 'Komedie'
        ]);
        Genre::create([
            'genre' => 'Thriller'
        ]);
        Genre::create([
            'genre' => 'Misdaad'
        ]);

        Serie::
    }

}
