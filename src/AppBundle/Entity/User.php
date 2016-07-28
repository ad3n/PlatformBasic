<?php

/*
 * This file is part of the Platform package.
 *
 * (c) Muhammad Surya Ihsanuddin <surya.kejawen@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ihsan\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SymfonyId\AdminBundle\User\AdvancedUser as BaseUser;

/**
 * @ORM\Entity()
 * @ORM\Table(name="user")
 *
 * @author Muhammad Surya Ihsanuddin <surya.kejawen@gmail.com>
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}
