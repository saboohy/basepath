<?php declare(strict_types=1);

if ( !function_exists('basepath') ) {

    /**
     * Returns basepath value of the project
     * 
     * @param string $dir
     * 
     * @return nullable|string
     */
    function basepath(string $dir = "") : ?string
    {
        $real_path = realpath(__DIR__);

        preg_match(
            "/.+\b(vendor\/.+)/",
            $real_path,
            $matched_details
        );

        $out = "";

        if ( count($matched_details) > 0 ) {
            $vendor         = end($matched_details);
            $splitted_path  = explode(DIRECTORY_SEPARATOR, $vendor);
            $start          = 0;

            while ( $start < count($splitted_path) ) {
                $out .= ".." . DIRECTORY_SEPARATOR;
                $start++;
            }
        }

        $out .= ".." . DIRECTORY_SEPARATOR;

        $project_path = realpath(__DIR__ . DIRECTORY_SEPARATOR . $out);

        if ( !file_exists($project_path . DIRECTORY_SEPARATOR . "composer.json") ) {
            return null;
        }

        $dir = (
            !empty($dir) && $dir[0] != "/"
            ? "/" . $dir
            : $dir
        );

        return $project_path . $dir;
    }
}