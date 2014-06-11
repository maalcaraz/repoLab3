<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Paginas
 * @author Dell-Proto
 */
class Paginas extends CI_Controller
{
 public function vista($page = 'home')// recibe como parámetro el nombre de la pagina que quiero mostrar. Si no mando nada, por defecto me pone Home de título
 {
     if (!file_exists('application/views/'.$page.'.php'))//con el punto concateno
     //si no existe, renombrame a page como home
     {
         show_404();
     }
     $data['title']= ucfirst($page);//array donde pongo el nombre de la variable que quiero que me randerice como una instancia de ese objeto
     $this->load->view('templates/header', $data);
     $this->load->view($page, $data);
     $this->load->view('templates/footer', $data);
 }
}
?>
