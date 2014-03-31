<?php
require_once('../message/pb_message.php');

require_once('./pb_proto_game.php');
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$raw =  $redis->get('10000-10');

var_dump($raw);

$players = new Players();
$players->parseFromString( $raw );

// var_dump( $players );
var_dump( $players->uid() );
$player_size = $players->players_size();
var_dump( $player_size );
for( $i=0; $i<$player_size; $i++ )
{
	// var_dump( $players->players($i) );
	var_dump( $players->players($i)->player_id() );
	var_dump( $players->players($i)->active() );
	var_dump( $players->players($i)->ability_rate() );
	var_dump( $players->players($i)->position() );
	var_dump( $players->players($i)->first() );
	for( $j=0; $j<$players->players($i)->buffs_size(); $j++ )
	{
		$raw = $players->players($i)->buffs($j); 
		var_dump( $raw->buff_id() );
		var_dump( $raw->active() );
	}

}


$court_size = $players->on_court_size();

for( $i=0; $i<$court_size; $i++ )
{
	var_dump( $players->on_court($i) );
}

?>
