#  Creational patterns

## Factory

### Abstract Factory
Abstract Factory est un design patterns, qui résout le problème de création d’objets sans spécifier leurs classes concrètes.

Abstract Factory définit une interface pour créer tous les objets, mais laisse la création réelle de l’objet aux classes du Factory concrètes. Chaque type de Factory correspond à une certaine variété d’objets.

Le code client appelle les méthodes de création de l’objet factory au lieu de créer des objets directement avec un appel de constructeur (via l’opérateur new). Puisqu’un objet factory correspond à une seule variante, tous ses objets seront compatibles.

### Factory Method
Factory Method est un design pattern qui résout le problème de création d’objets sans spécifier leurs classes concrètes.

Factory Method définit une méthode qui doit être utilisée pour créer des objets au lieu d’un appel direct de constructeur (opérateur new). Les sous-classes peuvent remplacer cette méthode pour changer la classe d’objets qui seront créés.  
  
  
Prenons un exemple, on a la classe ProductCommand qui gère les commandes de produits. Chaque fois qu’un nouveau produit est commandée, nous appelons la méthode ‘command’ et passons le type de produit en paramètre (type « a » ou « b »). La méthode ‘make’ crée ensuite un nouvel objet ‘prod’ (basé sur le paramètre) et enfin la méthode ‘command’ ajoute l’objet nouvellement créé au tableau $prodCmd qui stocke la liste des produits commandées.

###  Static Factory
Ce pattern est similaire au pattern Abstract Factory, ce pattern est utilisé pour créer une série d’objets. La différence entre cela et le pattern Abstract Factory est que le pattern Static Factory utilise une seule méthode statique pour créer tous les types d’objets qu’il peut créer.

## Builder
Builder se compose de:

-   Classe concrète
-   Une interface builder
-   Les différentes implémentations de l’interface builder
-   Une classe directeur qui appelle le builder approprié et le renvoie.

##### Interface builder
l’interface du builder contient des méthodes pour préparer le builder lors de sa création et la méthode getCar() retournera l’objet final.

##### classe directeur
la principale responsabilité du directeur est d’obtenir une interface builder et d’appeler les méthodes de l’interface builder puis de récupérer l’objet.
