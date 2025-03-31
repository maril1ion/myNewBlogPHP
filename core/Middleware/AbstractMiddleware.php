<?php

namespace core\Middleware;

use core\Http\RequestInterface;
use core\LoginAdmin\LoginAdminInterface;
use core\Redirect\RedirectInterface;

abstract class AbstractMiddleware
{
  public function __construct(
    protected RequestInterface $request,
    protected LoginAdminInterface $login,
    protected RedirectInterface $redirect
  ) {}
  abstract public function handle(): void;
}
