<?php

namespace Home\StoreBundle\Controller;

use Home\StoreBundle\Entity\Product;
use Home\StoreBundle\Entity\Category;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HomeStoreBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function createAction()
    {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Teste Doctrine');
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
        
        return new Response('Criou produto com id: ' . $product->getId());
    }
    
    public function showAction($id)
    {
        /*$product = $this->getDoctrine()
                        ->getRepository('HomeStoreBundle:Product')
                        ->find($id);
        if(!$product){
            throw $this->createNotFoundException('Produto não encontrado: ' . $id);
        }
        return new Response("Produto: " . $product->getDescription());*/
        
        /*$product = $this->getDoctrine()
                        ->getRepository('HomeStoreBundle:Product')
                        ->find($id);
        $categoryName = $product->getCategory()->getName();*/
        
        $product = $this->getDoctrine()
                        ->getRepository('HomeStoreBundle:Product')
                        ->findOneByIdJoinedToCategory($id);
        $categoryName = $product->getCategory()->getName();
        //echo $product['name'];die;
        return new Response('Descricao produto: ' . $product->getDescription() . ' Categoria: ' . $categoryName);
    }
    
    public function showProductAction($id)
    {
        $category = $this->getDoctrine()
                         ->getRepository('HomeStoreBundle:Category')
                         ->find($id);
        $products = $category->getProducts();
        
        echo $products['name'];die;
        
        return new Response('Produtos: ' . print_r($products));
    }
    
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('HomeStoreBundle:Product')->find($id);
        
        if(!$product){
            throw $this->createNotFoundException('Nao foi posivel atera o produto: ' . $id);
        }
        $product->setName('Arroz');
        $em->flush();
        
        return new Response('Producto alterado com sucesso: ' . $product->getName());
    }
    
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('HomeStoreBundle:Product')->find($id);
        if(!$product){
            throw $this->createNotFoundException('Id nao encontrado: ' . $id);
        }
        
        $em->remove($product);
        $em->flush();
        
        return new Response('Removeu produto de codigo: ' . $id);
    }
    
    public function queryAction()
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('HomeStoreBundle:Product')
                      ->findAllOrderedByName();
       return new Response('Produto: ' . print_r($product));
    }
    
    public function objectAction()
    {
        $repository = $this->getDoctrine()
                           ->getRepository('HomeStoreBundle:Product');
        $query = $repository->createQueryBuilder('p')
                            ->where('p.price = :price')
                            ->setParameter('price', '19.99')
                            ->orderBy('p.price', 'ASC')
                            ->getQuery();
        $products = $query->getResult();
        
        return new Response('Result: ' . print_r($products));
    }
    
    public function createProductAction()
    {
        $category = new Category();
        $category->setName('outros');
        
        $product = new Product();
        $product->setName('Feijao');
        $product->setPrice(19.99);
        $product->setDescription('Novo Produto');
        //relacionar este produto para a categoria
        $product->setCategory($category);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($product);
        $em->flush();
        
        return new Response('Criou produto com id: ' . $product->getId() . 'E categoria com id: ' . $category->getId());
    }
}
