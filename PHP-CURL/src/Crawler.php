<?php

class Crawler {

    protected $curl = null;
    protected $url = '';
    protected $proxy = [
        'host'  =>  null,
        'port'  =>  null
    ];
    protected $headers = [

    ];
    protected $contents = null;
    protected $postData = [

    ];
    protected $postfields = '';
    protected $token = '';
    protected $cookie_file_path = '';
    protected $agent = '';
    protected $reffer = '';

    public function __construct($url = '')
    {
        $this->curl = curl_init();
        if ($url) {
            $this->url = $url;
            curl_setopt($this->curl, CURLOPT_URL, $this->url);
        }
    }

    public function login($url, $username = null, $password = '')
    {
        $this->url = $url;
        curl_setopt($this->curl, CURLOPT_URL, $url);
        if ($username) {
            $this->post(['user_name' => $username, 'password' => $password]);
        }
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        $this->contents = curl_exec($this->curl);

        return $this->contents;
    }

    public function loginCustomFields($url, $loginData)
    {
        $this->url = $url;
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $this->post($loginData);
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

    public function setopt($options)
    {
        if (is_array($options)) {
            foreach ($options as $key => $value) {
                curl_setopt($this->curl, $key, $value);
            }
        }
    }

    public function setPostFields($postfields)
    {
        $this->postfields = $postfields;
        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $this->postfields);
    }

    public function setCookieFilePath($fileCookie)
    {
        $this->cookie_file_path = $fileCookie;
        curl_setopt($this->curl, CURLOPT_COOKIEFILE, $this->cookie_file_path);
        curl_setopt($this->curl, CURLOPT_COOKIEJAR, $this->cookie_file_path);
    }

    public function setAgent($agent)
    {
        $this->agent = $agent;
    }

    public function setReffer($reffer)
    {
        $this->reffer = $reffer;
        curl_setopt($this->curl, CURLOPT_REFERER, $this->reffer);
    }

    public function setHeaders($headers)
    {
        $this->headers += $headers;
    }

    public function exec()
    {
        if ($this->agent != '') {
            curl_setopt($this->curl, CURLOPT_USERAGENT, $this->agent);
        }
        if (! empty($this->headers)) {
            curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->headers);
        }
        $this->contents = curl_exec($this->curl);
        return $this->contents;
    }

    public function setHttps()
    {
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false); //FALSE to stop CURL from
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, 0); // 1 to check the existence
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