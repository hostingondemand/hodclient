<?php
namespace modules\hodclient\controller;
use hodphp\core\Controller;
class _files extends Controller
{
    function content()
    {
        //load files
        ob_clean();
        $file = implode("/", func_get_args());
        if($this->filesystem->exists( "data/cache/hodclient/".$file)){
            $file="data/cache/hodclient/".$file;
        }else{
            $file="content/".$file;
        }


        //set headers
        $contentType = $this->filesystem->getContentType($file);
        $this->response->cache(900);

        if ($contentType == "text/css") {
            $content = $this->template->parse($this->filesystem->getFile($file), []);
        } else {
            $content = $this->filesystem->getFile($file);
        }

        //show content
        $this->response->renderFile($content, $contentType);
    }
}
?>