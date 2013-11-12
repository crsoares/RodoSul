<?php $view->extend('::layout.html.php') ?>

<?php $view['slots']->set('title', 'Listar posts')?>

<h1>Listar posts</h1>
<ul>
	<?php foreach($posts as $post):?>
			<li>
				<a href="<?php echo $view['router']->generate(
										'blog_show',
										array('id' => $post->getId())
									)?>"><?php echo $this->getTitle()?></a>
			</li>
	<?php endforeach;?>
</ul>