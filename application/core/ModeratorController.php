<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @abstract base admin controller
 * loads prerequisites for all admin controllers
 */
class ModeratorController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        /* will load required mod models when they exist */
    }
}