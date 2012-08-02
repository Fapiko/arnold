<?php
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController {

	public function indexAction($name) {

		return new Response("<html><body>{$name}</body></html>");

	}

}