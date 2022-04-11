#  Creational patterns

## Abstract Factory

Abstract Factory est un design patterns, qui résout le problème de création d’objets sans spécifier leurs classes concrètes.

Abstract Factory définit une interface pour créer tous les objets, mais laisse la création réelle de l’objet aux classes du Factory concrètes. Chaque type de Factory correspond à une certaine variété d’objets.

Le code client appelle les méthodes de création de l’objet factory au lieu de créer des objets directement avec un appel de constructeur (via l’opérateur new). Puisqu’un objet factory correspond à une seule variante, tous ses objets seront compatibles.

## Factory
Factory Method est un design pattern qui résout le problème de création d’objets sans spécifier leurs classes concrètes.

Factory Method définit une méthode qui doit être utilisée pour créer des objets au lieu d’un appel direct de constructeur (opérateur new). Les sous-classes peuvent remplacer cette méthode pour changer la classe d’objets qui seront créés.  
  
  
Prenons un exemple, on a la classe ProductCommand qui gère les commandes de produits. Chaque fois qu’un nouveau produit est commandée, nous appelons la méthode ‘command’ et passons le type de produit en paramètre (type « a » ou « b »). La méthode ‘make’ crée ensuite un nouvel objet ‘prod’ (basé sur le paramètre) et enfin la méthode ‘command’ ajoute l’objet nouvellement créé au tableau $prodCmd qui stocke la liste des produits commandées.

