<?php

namespace app\Middleware;

use core\Middleware\AbstractMiddleware;

class GuestMiddleware extends AbstractMiddleware
{
  public function handle(): void
  {
    if ($this->login->check()) {
      $this->redirect->to("/home");
    }
  }
}
