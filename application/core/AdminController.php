<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @abstract base admin controller
 * loads prerequisites for all admin controllers
 */
class AdminController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        /* will load required admin models when they exist */
    }
}