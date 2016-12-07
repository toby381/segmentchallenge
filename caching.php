<?php



// CACHING SCRIPT hvis ikke logget inn

/*
function readCurrentPageCache() {
    if(end($path_info['call_parts']) != "cache" && $cache_name != "front" && $main_id==0) {
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
}
*/
?>