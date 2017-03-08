<?php

namespace App;
require_once('TwitterAPIExchange.php');

/**
 * Model to get tweets
 *
 * @author Luke Margolis
 */

class TweetModel
{
    private $twitter = new TwitterAPIExchange($settings);

    private $settings = array(
    'oauth_access_token' => "385195414-z6qTLwG604bkPJW4b9LuVu4IzbCZFIWwXeD3attL",
    'oauth_access_token_secret' => "RLAzRpkT2y5AYldnNpG7ChG3SM8YlGa6jDRspRAYbCaoM",
    'consumer_key' => "freTdl2M7d0UjtiJGtZWbx5Dz",
    'consumer_secret' => "okBl6vSLed3Gk1LqF7L9Tch587WvE2VlxsAbyRPnJpGP35ul79T"
    );

    protected $url = 'https://api.twitter.com/1.1/blocks/create.json';
    protected $requestMethod = 'POST';

    protected $postfields = array(
    'screen_name' => 'usernameToBlock',
    'skip_status' => '1'
    );

    public function request()
    {
        echo $twitter->buildOauth($url, $requestMethod)
            ->setPostfields($postfields)
            ->performRequest();
    }
}