<?php

namespace MainBundle\Model;

use MainBundle\Entity\Boutique;


class BoutiqueModel
{
    public function __construct() {
    }
    
    public function createArticle($date,$stock,$nom,$description,$prix)
    {
        $article = new Boutique();
        $article->setStock($stock)->setNomProduit($nom)->setDescriptionProduit($description)->setPrixProduit($prix)->setDateProd($date);
        return $article;
    }

    public function modifyArticle($art,$variables=array())
    {
    	foreach ($variables as $key => $value) {
    		switch ($key) {
    			case 'stock':
    				$art->setStock($value);
    				break;

				case 'nomProduit':
    				$art->setNomProduit($value);
    				break;

				case 'descriptionProduit':
    				$art->setDescriptionProduit($value);
    				break;

				case 'prixProduit':
    				$art->setPrixProduit($value);
    				break;

				case 'dateProd':
    				$art->setDateProd($value);
    				break;
    			
    			default:
    				
    				break;
    		}
    	}
    	return $art;
    }
}