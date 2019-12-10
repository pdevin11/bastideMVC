# bastideMVC
Code MVC site Bastide

	id	menu_name	                  menu_price
	1 	Menu à 27€ 	                  27.00
	2 	Menu à 32€ 	                  32.00
	3 	Menu "Dégustation" à 38€ 	    38.00
  
  Création d'une classe Menu qui gère les l'affichage des menus.
  Initialement, donc en procédural, le code contenait une requete qui récupérait les noms des menus pour le menu bootstrap. Ensuite je récupérais les infos du menu affiché en fonction de son id pour afficher en titre le nom ainsi que le prix. 
  Et après une requete différente par plats selon le type (entrée, plat, déssert) toujours grâce à l'id qui est lié à un champ menu_id dans une autre table qui elle contient tous les plats.
  
  Dans le modèle MVC j'ai voulu reprendre le même principe donc avec une fonction getAllMenus qui récupère tous les menus pour me faire le menu de navigation, ça ça fonctionne.
  Ensuite je voulais récupérer les détails du menu en fonction de l'id du menu affiché, et c'est là que ça coince. Initialement, je récupérais l'id et je réussissais à le transmettre dans la même page en variable dans ma requête. Ensuite j'utilisais un while.
  Ici j'ai voulu reprendre la boucle foreach qui n'est pas un problème en soit je pense, mais le soucis c'est que je ne vois pas comment passer l'id en paramètre à ma fonction, sachant que dans mon controller, je ne peux pas le définir puisqu'il dépend de l'onglet sur lequel on se trouve dans la page.
  Je pense qu'il faut définir ça directement au niveau de la classe mais je ne vois pas comment.
  
  
