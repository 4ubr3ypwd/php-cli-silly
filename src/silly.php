<?php

if ( file_exists( dirname( __FILE__ ) . '/../vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/../vendor/autoload.php';
}

use Symfony\Component\Console\Output\OutputInterface;

$app = new Silly\Application();

$app->command( 'me [name]', function ( $name, OutputInterface $output ) {
	$output->writeln( $name );
} );

$app->run();