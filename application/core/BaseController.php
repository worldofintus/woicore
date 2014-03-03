<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class BaseController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->setGlobals();
    }

    /**
     * @abstract populate global data with arrays and values used commonly
     * @return boolean
     */
    public function setGlobals()
    {
        /* set the months array */
        $this->globals->months = array(
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December');
    }
}