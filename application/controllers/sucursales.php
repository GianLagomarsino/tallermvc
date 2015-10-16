<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Heredamos de la clase CI_Controller */
class Sucursales extends CI_Controller {

  function __construct()
  {

    parent::__construct();

    /* Cargamos la base de datos */
    $this->load->database();

    /* Cargamos la libreria*/
    $this->load->library('grocery_crud');

    /* Añadimos el helper al controlador */
    $this->load->helper('url');
  }

  function index()
  {
    /*
     * Mandamos todo lo que llegue a la funcion
     * administracion().
     **/
	 $this->load->view('headers/header');
	 $this->load->view('headers/Navegacion');
	 $this->load->view('login_view');
    //redirect('productos/administracion');
  }

  /*
   *
   
   EL nombre tiene que ser igual al de la vista guardada del usuario
   **/
  function admin_sucursal()
  {
    
	$this->load->view('headers/header');
	$this->load->view('headers/Navegacion');
	
	try{

    /* Creamos el objeto */
    $crud = new grocery_CRUD();

    /* Seleccionamos el tema */
    $crud->set_theme('flexigrid');

    /* Seleccionmos el nombre de la tabla de nuestra base de datos*/
    $crud->set_table('sucursales');

    /* Le asignamos un nombre */
    $crud->set_subject('Sucursales');

    /* Asignamos el idioma español */
    $crud->set_language('spanish');

    /* Aqui le decimos a grocery que estos campos son obligatorios */
    $crud->required_fields(
      'nombre_sucursal',
      'nombre_encargado',
	  'direccion_sucursal',
      'ciudad',
	  'telefono',
	  'email',
	  'giro'
	  
    );

    /* Aqui le indicamos que campos deseamos mostrar */
    $crud->columns(
	  'nombre_sucursal',
      'nombre_encargado',
	  'direccion_sucursal',
      'ciudad',
	  'telefono',
	  'email',
	  'giro'
	  
    );

    /* Generamos la tabla */
    $output = $crud->render();

    /* La cargamos en la vista situada en
    /applications/views/productos/administracion.php */
    $this->load->view('sucursales/admin_sucursal', $output);

    }catch(Exception $e){
      /* Si algo sale mal cachamos el error y lo mostramos */
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }
}