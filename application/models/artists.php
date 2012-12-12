<?php

class Artists {
	public static function listArtists() {

		$results = DB::table('songs')
			->insert(array('username' => $username,
							'realname' => $realname
			));
		return $results;
	}
	public static function allUsers() {
		$results = DB::table('users')->get();
		return $results;
	}

}