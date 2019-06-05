<?php 
namespace minapp;

/**
 * summary
 */
class Controller 
{
    /**
     * summary
     */
    public function HomeData(){
    	$template= __DIR__.'/website/index.php';
    	return $template;
    }
    public function AboutData(){
    	$template= __DIR__.'/website/about.php';
    	return $template;
    }
    public function ContactData(){
        $template= __DIR__.'/website/contact.php';
        return $template;
    }
}

 ?>