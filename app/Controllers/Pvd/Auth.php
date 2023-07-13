<?php

namespace App\Controllers\Pvd;

use Google\Client;
use Google\Service\Oauth2;
use Config\Services;
use App\Models\Pvd\UserModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    protected $userModel;
    protected $validation;
    function __construct()
    {
        $this->userModel = new UserModel();
        $this->validation = Services::validation();
    }

    public function login()
    {
        if (session('akun_username')) {
            return redirect()->back();
        }
        return view('pvd/pages/auth/index');
    }

    public function logout()
    {
        session()->destroy();
        session()->set('isLoggedInHasilPkl', false);
        session()->setFlashdata('sukses', 'Anda berhasil keluar');
        return redirect()->to('/hasil-pkl/masuk');
    }

    public function googleLogin()
    {
        $clientID = '757666081991-snbp16456mser4ksa8ugl5smmjtklctt.apps.googleusercontent.com';
        $clientSecret = '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';
        $redirectUri = 'http://localhost:8080/hasil-pkl/googlelogin'; //Harus sama dengan yang kita daftarkan

        $client = new Client();
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");

        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            if (isset($token['access_token'])) {
                $client->setAccessToken($token['access_token']);
                $Oauth = new Oauth2($client);
                $userInfo = $Oauth->userinfo->get();
                $users = new UserModel();
                $data = $users->where('platform_id', $userInfo->id)->find();
                if (!$data) {
                    if ($users->insert([
                        'platform_id' => $userInfo->id,
                        'email' => $userInfo->email,
                        'nama_lengkap' => $userInfo->name,
                        'username' => str_replace('@stis.ac.id', '', $userInfo->email),
                        'picture' => $userInfo->picture
                    ])) {
                        $data = $users->where('platform_id', $userInfo->id)->find();
                        $this->_sessionAkun($data[0]['id'], $data[0]['username'], $data[0]['nama_lengkap'], $data[0]['picture'], $data[0]['email'], TRUE);

                        return redirect()->to('/hasil-pkl/riset1/dasbor');
                    }
                    return redirect()->back();
                }
                $this->_sessionAkun($data[0]['id'], $data[0]['username'], $data[0]['nama_lengkap'],  $data[0]['picture'], $data[0]['email'], TRUE);
                return redirect()->to('/hasil-pkl/riset1/dasbor');
            }
        }
        return redirect()->to($client->createAuthUrl());
    }

    public function _sessionAkun($id, $username, $nama_lengkap, $picture, $email, $isLoggedInHasilPkl)
    {
        $data = [
            'akun_id' => $id,
            'akun_username' => $username,
            'akun_nama_lengkap' => $nama_lengkap,
            'akun_picture' => $picture,
            'akun_email' => $email,
            'isLoggedInHasilPkl' => $isLoggedInHasilPkl
        ];
        session()->set($data);
    }
}
