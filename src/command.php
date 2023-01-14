<?php

if ( file_exists( dirname( __FILE__ ) . '/../vendor/autoload.php' ) ) {
	require dirname( __FILE__ ) . '/../vendor/autoload.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/../../../autoload.php' ) ) {
	require dirname( __FILE__ ) . '/../../../autoload.php';
} else {

	echo "Please run composer install.";
	exit;
}

use Symfony\Component\Console\Output\OutputInterface;

$app = new Silly\Application();

// bin/silly __single --yell -- aubrey
$app->command( '__single [name] [--yell]', function ( $name, $yell, OutputInterface $output ) {

	if ( ! $yell ) {
		return false;
	}

		$output->writeln( $name );
} );

// When you set a default command, you cannot run sub-commands normally.
$app->setDefaultCommand( '__single', true );

$app->run();