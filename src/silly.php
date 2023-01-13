<?php

if ( file_exists( __DIR__ . '/../vendor/autoload.php' ) ) {
	require __DIR__ . '/../vendor/autoload.php';
} else {
	require __DIR__ . '/../../../autoload.php';
}

use Symfony\Component\Console\Output\OutputInterface;

$app = new Silly\Application();

$app->command( 'me [name]', function ( $name, OutputInterface $output ) {
	$output->writeln( $name );
} );

$app->run();