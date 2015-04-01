<?php

use App\Actor;
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

        Serie::create([
            'title' => 'Game of thrones',
            'teaser' => 'Een eeuwenoude machtsstrijd barst los in het land waar de zomers decennia duren en de winters een leven lang kunnen aanslepen. Twee machtige geslachten - de regerende Baratheons en de verbannen Targaryens - maken zich op om de IJzeren Troon te claimen en de Zeven Koninkrijken van Westeros onder hun controle te krijgen. Maar in een tijdperk waarin verraad, lust, intriges en bovennatuurlijke krachten hoogtij vieren, zal hun dodelijke kat-en-muisspelletje onvoorziene en verreikende gevolgen hebben. Achter een eeuwenoude, gigantische muur van ijs in het uiterste noorden van Westeros maakt een kille vijand zich immers op om het land onder de voet te lopen. Gebaseerd op de bestseller fantasyreeks "A Song of Ice and Fire" van George R.R. Martin. ',
            'description' => 'Een eeuwenoude machtsstrijd barst los in het land waar de zomers decennia duren en de winters een leven lang kunnen aanslepen. Twee machtige geslachten - de regerende Baratheons en de verbannen Targaryens - maken zich op om de IJzeren Troon te claimen en de Zeven Koninkrijken van Westeros onder hun controle te krijgen. Maar in een tijdperk waarin verraad, lust, intriges en bovennatuurlijke krachten hoogtij vieren, zal hun dodelijke kat-en-muisspelletje onvoorziene en verreikende gevolgen hebben. Achter een eeuwenoude, gigantische muur van ijs in het uiterste noorden van Westeros maakt een kille vijand zich immers op om het land onder de voet te lopen. Gebaseerd op de bestseller fantasyreeks "A Song of Ice and Fire" van George R.R. Martin. '
        ]);
        Serie::create([
            'title' => 'The big bang Theory',
            'teaser' => 'De vrienden Sheldon, Leonard, Raj en Howard zijn echte geeks met een voorliefde voor wetenschap. Ze snappen alles op het gebied van natuur- en scheikunde, maar voeg atomen samen tot een vrouw en het bevattingsvermogen van de mannen komt tot stilstand. Gelukkig hebben ze hun blonde buurvrouw Penny die lang niet zo slim is, maar wel de sociale vaardigheden beheerst die het viertal mist.',
            'description' => 'De vrienden Sheldon, Leonard, Raj en Howard zijn echte geeks met een voorliefde voor wetenschap. Ze snappen alles op het gebied van natuur- en scheikunde, maar voeg atomen samen tot een vrouw en het bevattingsvermogen van de mannen komt tot stilstand. Gelukkig hebben ze hun blonde buurvrouw Penny die lang niet zo slim is, maar wel de sociale vaardigheden beheerst die het viertal mist.'
        ]);

        DB::table('actors')->delete();

        Actor::create([
           'firstname' => 'Johnny',
            'lastname' => 'Galecki',
            'birthname' => 'John Mark Galecki',
            'biography' => "John Mark Galecki was born in Belgium where his dad was stationed while serving in the U.S. Air Force. When he was 3 years old, his family moved to Chicago, Illinois, where he grew up along with his sister Allison (1980) and brother Nick (1982). His father then became a teacher for blind veterans in a VA hospital outside of Chicago. When Galecki was 16, his father died in an accident."
        ]);

        Actor::create([
            'firstname' => 'Jim',
            'lastname' => 'Parsons',
            'birthname' => 'James Joseph Parsons',
            'biography' => 'Having grown up in Houston, and its northern suburb of Spring, he made his first stage appearance in a school play at the age of 6. Parsons then went on to study theater at the University of Houston. From there he won a place on a two-year Masters course in classical theater at the University of San Diego/The Old Globe Theater, graduating in 2001.

He moved to New York, working in Off-Broadway productions, appearing in TV commercials and in one episode of Ed (2000) before landing a recurring role in Judging Amy (1999) in 2004.'
        ]);

    }

}
