

## Concept

Vous connaissez les variables et leurs types. On peux ainsi manipuler des nombres entiers, des nombres à virgule, des chaînes de caractères...

Il est aussi possible de manipuler des listes de valeurs, chaque valeur étant indexée par un entier (liste simple) ou par une chaîne de caractère (tableau associatif).

Un objet n'est rien de plus qu'un nouveau type, qui ressemble à un tableau associatif, mais qui peut contenir en plus des fonctions ! Un objet devient donc un ensemble de paramètres (des variables) et de méthodes (des fonctions).

```php
$pomme = new Fruit();
$pedro = new Personne();

echo $pedro->age;

$pedro->marcher();
$pedro->manger( $pomme );

```

La manipulation des objets se fait en deux étapes :
 - d'abord on définit la structure de l'objet : la classe (elle contient les paramètres et méthodes).
 - ensuite, on génère des instances de cette classe. Vous avez remarqué le mot-clé "new" ? C'est exactement à ça qu'il sert !
 - il est aussi possible de configurer une classe pour qu'elle soit utilisée directement, sans devoir générer d'instance. Cela s'appelle une classe statique.


 ```php
class Fruit
{
	public $nom = 'pomme';
	public $valeur_nutritive = 10;

	public static function afficher()
	{
		echo '<img src="pomme.png" alt="une pomme !" />';
	}
}

class Personne
{
	public $prenom = "Régis";
	public $nom = "Laspalès";
	public $naissance = 1957;
	private $action;	// une valeur texte qui peut valoir 'marcher', 'dormir', 'assis'...
	public $estomac;	// une valeur entière contenant la valeur du réservoir estomac ;)

	public function marcher()
	{
		$this->action = 'marcher';
	}

	public function manger( $aliment )
	{
		$this->estomac += $aliment->valeur_nutritive;
	}
}

$f = new Fruit();
echo $f->nom ;

Fruit::afficher();	// l'appel d'une méthode statique
```

Notez que depuis une méthode, il est possible d'accéder aux paramètres et autres méthodes via le mot-clé très pratique 'this'.


## visibilité (public/private)

Et les mots-clé 'public' et 'private' ? Il permettent de définir si les méthodes et paramètres de vos instances sont accessibles dans votre code. Exemple :

```php
echo $personne->age;	// affiche l'âge
echo $personne->action; // génère une erreur !
```


## constructeurs

Imaginez maintenant : tous les objets 'Personne' que l'on instancie possèdent au départ le même nom... Par très intuitif, n'est-ce pas ? La syntaxe suivante serait plus cool, et plus claire :

```php

$rl = new Personne("Régis", "Laspalès", 1957);
$pc = new Personne("Philippe", "Chevallier", 1956);

echo $rl->age();
```

Vous découvrez la notion de constructeur ! Il s'agit d'une méthode qui s'exécute automatiquement quand on crée une nouvelle instance de Personne. Dans notre exemple, les paramètres $prenom, $nom et $naissance sont passés à cette méthode constructeur, dont dont le code correspondant est le suivant :

```php
class Personne
{
	public $prenom;
	public $nom;
	public $naissance;

	// le nom constructeur s'appelle obligatoirement __construct ( avec deux "_" devant)
	public function __construct($prenom, $nom, $naiss)	
	{
		$this->prenom = $prenom;
		$this->nom = $nom;
		$this->naissance = $naiss;
	}

	public function age()
	{
		$cette_annee = date("Y");
		return $cette_annee - $this->naissance;
	}
}
```



		
## Glossaire

Faites des recherches, et retenez sur les termes suivants :
- classe
- objet ou instance
- propriété ou paramètre
- méthode
- constructeur



## Entrainement !

#### Pizzeria

Créez les classes permettant de représenter le catalogue produits d'une pizzeria (pizzas, désserts, boissons...), ses clients et leurs commandes...

#### Recettes de cuisine

Créez les classes d'une application de gestion de recettes de cuisine.

#### Le roi lion

Créez les classes représentant le monde du vivant : animaux, végétaux, et faites en sorte que tout ce petit monde puisse vivre (manger bouger, mourir)

#### Pokemon

Codez le jeu Pokemon avec des objets ;)
