<?php
namespace Controller;

/**
* Main Controller
*/
class MainController extends \Core\Controller {

   public function index(){
      return $this->load->view('pages/index');
   }

   public function teste($id) {
      return 'ID: '.$id;
   }


   public function action($slug) {
      return "Post: {$slug}";
   }

   public function pdate($date, $slug) {
      return "Postagem: {$slug}<br>Data: {$date}";
   }
} 