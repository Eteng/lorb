<?php

// for all basic function that will be reused (!empty ($_GET[$getParams]) && $_GET[$getParams]!==0)
function getUrl($params){
   $result = array();
   foreach($params as $getParams => $identifier){
       if(isset($_GET[$getParams]) && !_empty($_GET[$getParams])){
           $result[$identifier] = $_GET[$getParams]; 
       }
   }
   return $result;
}
/**a funtion that checks if a passed argument is empty
 *  Empty is when an array or String length = 0,null or unset
 * @return Boolean true if the passsed argument is empty
 */
function isBarren() {
    foreach(func_get_args() as $args) {
        if( !is_numeric($args) ) {
            if( is_array($args) ) { // Is array?
                if( count($args, 1) < 1 ) return true;
            }
            elseif(!isset($args) || strlen(trim($args)) == 0)
                return true;
            }
        }
      return false;
}
//Gotten from php.net site
function ToArray ( $data )
{
  if (is_object($data)) $data = get_object_vars($data);
  return (is_array($data)) ? array_map(__FUNCTION__,$data) : $data;
}
/**A function used to redirect to different page
 * @param string $location the location of the page to redirector
 */
function redirect_to($location){
   header("Location: {$location}");
   exit;
}


?>
