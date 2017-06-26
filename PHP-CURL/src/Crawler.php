<?php

class Crawler {

    protected $curl = null;
    protected $proxy = [
        'host'  =>  null,
        'port'  =>  null
    ];
    protected $header = [

    ];
    protected $contents = null;
    protected $postData = [

    ];
    protected $token = '';

    public function __construct()
    {
        $this->curl = curl_init();
    }

    public function login($url, $username = null, $password = '')
    {
        curl_setopt($this->curl, CURLOPT_URL, $url);
        if ($username) {
            $this->post(['user_name' => $username, 'password' => $password]);
        }
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        $this->contents = curl_exec($this->curl);

        return $this->contents;
    }

    public function requireBasicAuth($ht_username, $ht_password)
    {
        curl_setopt($this->curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($this->curl, CURLOPT_USERPWD, $ht_username . ":" . $ht_password);
    }

    public function requireProxy($host, $port = '')
    {
        if ($port != '' && is_numeric($port)) {
            curl_setopt($this->curl, CURLOPT_PROXY, "$host:$port");
        } else {
            curl_setopt($this->curl, CURLOPT_PROXY, "$host");
        }
    }
    public function requireToken($token = '')
    {
        $this->token = $token != '' ? $token : $this->token;
        $this->postData['token'] =  $this->token;
    }

    public function post($data)
    {
        $this->postData += $data;
        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $this->postData);
    }

    public function clearPostData()
    {
        $this->postData = [];
    }

    public function __destruct()
    {
        curl_close($this->curl);
    }

    public function getContents()
    {
        return $this->contents;
    }
}