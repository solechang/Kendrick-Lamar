<?php

class Blackhippy_Controller extends Base_Controller {

	public function action_index() {
		
		return View::make('home.blackhippy');
	}

	public function action_kendricklamar() {
		
		return View::make('home.kendricklamar');
	}

	public function action_about() {
		return View::make('home.about');
	}
	public function action_results() {

		$search_term = Input::get('search-term');
		$search_term = urlencode($search_term);

		$twitter = new Twitter();
		$twitter_search = $twitter->searchTweetsByTerm($search_term);

		$data = array(
			'search_term' => $search_term,
			'results' => $twitter_search->status
		);
		return View:: make('home.kendricklamar', $data);
	}
	public function action_flickr() {

		$search_term = Input::get('searchTerm');
		$search_term = urlencode($search_term);
		$flickr = new Flickr();

		$flickr_search = $flickr->searchPhotosFlickr($search_term);
	
		// $data = array(
		// 	'search_term' => $search_term,
		// 	'results' => $flickr_search->photos->photo
		// );

        foreach($flickr_search->photos->photo as $photo) {
            $id = $photo['id'];
            $farm = $photo['farm'];
            $secret = $photo['secret'];
            $server_id = $photo['server'];

            $img_src = "http://farm".$farm.".staticflickr.com/".$server_id."/".$id."_".$secret."_m.jpg";
            echo '<img src="'.$img_src.'" />';

        }

	}
	public function action_flickrYeah() {
		return View:: make('home.photos');
	}


	

	
}