<?php

namespace App\Controllers\Pvd;

use Exception;
use Google\Client;
use Config\Services;
use Google\Service\Oauth2;
use App\Models\Pvd\UserModel;
use App\Controllers\BaseController;
use JKD\SSO\Client\Provider\Keycloak;

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

    public function loginstis()
    {
        $clientID = getenv('CLIENT_ID_GOOGLESTIS');
        $clientSecret = getenv('CLIENT_SECRET_GOOGLESTIS');
        $redirectUri = getenv('REDIRECT_URI_GOOGLESTIS');

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
                $data = $this->userModel->where('platform_id', $userInfo->id)->find();
                if (!$data) {
                    if ($this->userModel->insert([
                        'platform_id' => $userInfo->id,
                        'email' => $userInfo->email,
                        'nama_lengkap' => $userInfo->name,
                        'username' => str_replace('@stis.ac.id', '', $userInfo->email),
                        'instansi' => 'POLSTAT STIS',
                        'picture' => $userInfo->picture
                    ])) {
                        $data = $this->userModel->where('platform_id', $userInfo->id)->find();
                        $this->_sessionAkun($data[0]['id'], $data[0]['username'], $data[0]['nama_lengkap'], $data[0]['picture'], $data[0]['email'], $data[0]['instansi'], TRUE, null);
                        return redirect()->to('/hasil-pkl/' . session()->get('riset'));
                    }
                    return redirect()->back();
                }
                $this->_sessionAkun($data[0]['id'], $data[0]['username'], $data[0]['nama_lengkap'],  $data[0]['picture'], $data[0]['email'],  $data[0]['instansi'], TRUE, null);
                return redirect()->to('/hasil-pkl/' . session()->get('riset'));
            }
        }
        return redirect()->to($client->createAuthUrl());
    }


    public function loginbps()
    {
        $clientID              = getenv('CLIENT_ID_SSOBPS');
        $clientSecret          = getenv('CLIENT_SECRET_SSOBPS');
        $redirectUri           = getenv('REDIRECT_URI_SSOBPS');

        $provider = new Keycloak([
            'clientId'              => $clientID,
            'clientSecret'          => $clientSecret,
            'redirectUri'           => $redirectUri,
            'authServerUrl'         => 'https://sso.bps.go.id',
            'realm'                 => 'pegawai-bps',
            'scope'                 => 'openid profile-pegawai'
        ]);

        if (!isset($_GET['code'])) {
            $authUrl = $provider->getAuthorizationUrl();
            session()->set('oauth2state', $provider->getState());
            header('Location: ' . $authUrl);
            exit;
        } elseif (empty($_GET['state']) || ($_GET['state'] !== session()->get('oauth2state'))) {
            unset($_SESSION['oauth2state']);
            exit('Invalid state');
        } else {
            try {
                $token = $provider->getAccessToken('authorization_code', ['code' => $_GET['code']]);
            } catch (Exception $e) {
                exit('Gagal mendapatkan akses token : ' . $e->getMessage());
            }
        }

        if (isset($token)) {
            $userInfo = $provider->getResourceOwner($token);
            $data = $this->userModel->where('platform_id', $userInfo->getNip())->find();
            $url_logout = $provider->getLogoutUrl();
            if (!$data) {
                if ($this->userModel->insert([
                    'platform_id' => $userInfo->getNip(),
                    'email' => $userInfo->getEmail(),
                    'nama_lengkap' => $userInfo->getName(),
                    'username' => $userInfo->getUsername(),
                    'instansi' => 'BPS',
                    'picture' => base_url('pvd/img/default.png')
                ])) {
                    $data = $this->userModel->where('platform_id', $userInfo->getNip())->find();
                    $this->_sessionAkun($data[0]['id'], $data[0]['username'], $data[0]['nama_lengkap'], $data[0]['picture'], $data[0]['email'],  $data[0]['instansi'], TRUE, $url_logout);
                    return redirect()->to('/hasil-pkl/' . session()->get('riset'));
                }
                return redirect()->back();
            }
            $this->_sessionAkun($data[0]['id'], $data[0]['username'], $data[0]['nama_lengkap'],  $data[0]['picture'], $data[0]['email'], $data[0]['instansi'], TRUE, $url_logout);
            return redirect()->to('/hasil-pkl/' . session()->get('riset'));
        }
    }

    public function _sessionAkun($id, $username, $nama_lengkap, $picture, $email, $instansi, $isLoggedInHasilPkl, $url_logout)
    {
        $data = [
            'akun_id' => $id,
            'akun_username' => $username,
            'akun_nama_lengkap' => $nama_lengkap,
            'akun_picture' => $picture,
            'akun_email' => $email,
            'akun_instansi' => $instansi,
            'isLoggedInHasilPkl' => $isLoggedInHasilPkl,
            'url_logout' => $url_logout
        ];
        session()->set($data);
    }
}
