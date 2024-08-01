<?php

declare(strict_types=1);
/**
 * This file is part of MineAdmin.
 *
 * @link     https://www.mineadmin.com
 * @document https://doc.mineadmin.com
 * @contact  root@imoi.cn
 * @license  https://github.com/mineadmin/MineAdmin/blob/master/LICENSE
 */

namespace HyperfTests\Feature\Admin;

use App\Model\Permission\User;
use HyperfTests\HttpTestCase;

/**
 * @internal
 * @coversNothing
 */
class ControllerTest extends HttpTestCase
{
    use GetTokenTrait;

    protected User $user;

    protected string $token;

    protected function setUp(): void
    {
        $this->user = $this->generatorUser();
        $this->token = $this->getToken($this->user);
    }

    protected function tearDown(): void
    {
        $this->user->forceDelete();
    }
}
