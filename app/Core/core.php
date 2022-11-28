<?php 
class core {
	  protected $currentController = 'Home';
  protected $currentMethod = 'index';
  protected $params = [];
	  public function __construct()
  {
    $url = $this->getUrl();
    // Look in controllers for first value
    if (file_exists('./app/Controllers/' . ucwords($url[0]) . '.php')) {
      // If exists, set as controller
      $this->currentController = ucwords($url[0]);
      // Unset 0 Index
      //unset($url[0]);
    } else {
      $this->currentController = '_404';
      //exit;
    }
     // Require the controller
    require_once './app/Controllers/' . $this->currentController . '.php';

    // Instantiate controller class
    $this->currentController = new $this->currentController;
     // Check for second part of url
    if (isset($url[1])) {
      // Check to see if method exists in controller
      if (method_exists($this->currentController, $url[1])) {
        $this->currentMethod = $url[1];
        // Unset 1 index
        unset($url[1]);
      }
    }

    // Get params
    $this->params = $url ? array_values($url) : [];
     // Call a callback with array of params
    call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
  }
	public function getUrl()
  {
    $url = isset($_GET['url']) ? $_GET['url'] : "Home";
    return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
  }
  
}
?>