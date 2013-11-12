<?php 

use Home\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
	public function listAction(){
		$posts = $this->get('doctrine')
					  ->getManager()
					  ->createQuery('SELECT p FROM HomeBlogBundle:Post p')
					  ->execute();
		
		return $this->render(
			'HomeBlogBundle:Blog:list.html.php',
			array('posts' => $posts)
		);
	}
	
	public function showAction($id){
		$post = $this->get('doctrine')
					 ->getManager()
					 ->getRepository('HomeBlogBundle:Post')
					 ->find($id);
		
		if(!$post){
			throw $this->createNotFoundException();
		}
		
		return $this->render(
			'HomeBlogBundle:Blog:show.html.php',
			array('post' => $post)
		);
	}
	
	
}