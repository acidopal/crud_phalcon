<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $username;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */

    public $nama;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $pass;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
}
