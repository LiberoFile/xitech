<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('index');
    }
    public function about1(){
        $this->display('about');
    }
    public function team1(){
        $this->display('team');
    }
    public function contact1(){
        $this->display('contact');
    }
}
