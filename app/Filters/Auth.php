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
    $sessionModel = new SessionModel();
    if (!session()->get('logged_in')) {
      return  redirect()->to("/users/login");
    }
  }
  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
  }
}
