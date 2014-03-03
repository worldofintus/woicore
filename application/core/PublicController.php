<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class PublicController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->setHttpHeaders();
    }

    /**
     * Set HTTP headers
     * @return boolean
     */
    public function setHttpHeaders()
    {
        $this->output->set_header('Accept-Encoding: gzip, deflate');
        $this->output->set_header('Connection: Keep-alive');
        $this->output->set_header('Pragma: public');
        $this->output->set_header('Cache-Control: maxage=0');
        $this->output->set_header('Expires: ' . gmdate('D, d M Y H:i:s', time()) . ' GMT');
        return true;
    }
}