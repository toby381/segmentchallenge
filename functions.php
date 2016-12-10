<?php
$local = true;

// ************For produksjon av clean-url til lagring i DB**************
function hyphenize($string) {
    $dict = array(
        "I'm"      => "I am",
        "thier"    => "their",
    );
    return strtolower(
        preg_replace(
          array( '#[\\s-]+#', '#[^A-Za-z0-9\. -]+#' ),
          array( '-', '' ),
          // the full cleanString() can be download from http://www.unexpectedit.com/php/php-clean-string-of-utf8-chars-convert-to-similar-ascii-char
          cleanString(
              str_replace( // preg_replace to support more complicated replacements
                  array_keys($dict),
                  array_values($dict),
                  urldecode($string)
              )
          )
        )
    );
}

function cleanString($text) {
    $utf8 = array(
        '/[áàâãªäå]/u'   =>   'a',
        '/[ÁÀÂÃÄÅ]/u'    =>   'A',
        '/[ÍÌÎÏ]/u'     =>   'I',
        '/[íìîï]/u'     =>   'i',
        '/[éèêëæ]/u'     =>   'e',
        '/[ÉÈÊËÆ]/u'     =>   'E',
        '/[óòôõºöø]/u'   =>   'o',
        '/[ÓÒÔÕÖØ]/u'    =>   'O',
        '/[úùûü]/u'     =>   'u',
        '/[ÚÙÛÜ]/u'     =>   'U',
        '/ç/'           =>   'c',
        '/Ç/'           =>   'C',
        '/ñ/'           =>   'n',
        '/Ñ/'           =>   'N',
        '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
        '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
        '/[“”«»„]/u'    =>   ' ', // Double quote
        '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
    );
    return preg_replace(array_keys($utf8), array_values($utf8), $text);
}

// *********for lesing av CLEAN-URL************  
function parse_path() {
  $path = array();
  if (isset($_SERVER['REQUEST_URI'])) {
    $request_path = explode('?', $_SERVER['REQUEST_URI']);

    $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
    $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
    $path['call'] = utf8_decode($path['call_utf8']);
    if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
      $path['call'] = '';
    }
    $path['call_parts'] = explode('/', $path['call']);
    
    if(array_key_exists(1,$request_path)) {
        $path['query_utf8'] = urldecode($request_path[1]);
        $path['query'] = utf8_decode(urldecode($request_path[1]));
        $vars = explode('&', $path['query']);
        foreach ($vars as $var) {
          $t = explode('=', $var);
          $path['query_vars'][$t[0]] = $t[1];
        }
    }
  }
return $path;
}

// **********CACHING***************
 // a function to receive an write some data into a file
function get_and_write($url, $cache_file) {
	$string = file_get_contents($url);
	$f = fopen($cache_file, 'w');
	fwrite ($f, $string, strlen($string));
	fclose($f);
	return $string;
}
 
// a function that opens and and puts the data into a single var
function read_content($path) {
	$f = fopen($path, 'r');
	$buffer = '';
	while(!feof($f)) {
		$buffer .= fread($f, 2048);
	}
	fclose($f);
	return $buffer;
} 

function checkAndSetCache() {
    global $cache_name;
    global $page_path; 
    $cache_file = getcwd() . '/cache/cache_'.$cache_name.'.php';
        if($cache_name == "front") $url = $page_path . "cache";
        else  $url = $page_path . "/cache";

        if (file_exists($cache_file)) { // is there a cache file?
            $timedif = (time() - filemtime($cache_file)); // how old is the file?
             if ($timedif < 3600*0.5) { // get a new file 30 min
                $html = read_content($cache_file); // read the content from cache
            } else { // create a new cache file
                $html = get_and_write($url, $cache_file);
            }
        } else { // no file? create a cache file
            $html = get_and_write($url, $cache_file);
        }
        echo $html;
        exit; 
}



?>