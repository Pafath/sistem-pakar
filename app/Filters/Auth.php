<?php

namespace App\Filters;

use App\Domain\Session;
use App\Models\SessionModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
  public function before(RequestInterface $reqiest, $arguments = null)
  {
       $token = $request->getCookie('access_token');
    if (!$token) {
        return redirect()->to("/auth/login");
    }

    try {
        $data = getJWTData($token); // asumsi fungsi ini valid
    } catch (\Exception $e) {
        return redirect()->to("/auth/login")->with('session_error', 'Token tidak valid atau expired');
    }
  }
  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
  }
}
