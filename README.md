# Générer sa key ssh
```
$ cd ~/.ssh
$ ls
```

`Checker si id_rsa et id_rsa.pub sont présent, si ils ne le sont pas :`

```
$ ssh-keygen -t -rsa

```

`Lorsque la key est générée :`

```
$ cat ~/.ssh/id_rsa.pub
```

`Copiez l'intégralité et mettez la dans l'interface git`

# Comment utiliser git :
## Récupérer le repo complet (au début) : 
```
$ git clone url_du_projet
```
## Créer une nouvelle branche : 
```
$ git checkout -b nom_de_la_branche
```
## Switcher de branche : 
```
$ git checkout nom_de_la_branche
```
## Lister les fichiers modifié : 
```
$ git status
```
## Pusher ses modifications : 
Dans le dossier racine du site, taper ces 3 commandes
```
$ git add .
$ git commit -m "liste des modifications faites"
$ git push origin nom_de_la_branche
```
## Récuperer les modifications qu'un autre a fait : 
```
$ git pull
```
Les commandes de base sont là, sinon si vous cherchez une autre commande, demandez moi ou allez voir la doc :) 
https://git-scm.com/documentation


# Bonnes pratiques PHP :

## Méthodes d'écriture en POO :

`Accolade à la ligne :`
```
class html
{

}
```

`Accolade à la ligne lors d'une fonction :`

```
public function html
{

}
```

## Commentez votre code please :D :

`Un exemple d'une fonction`

```
/**
 * Generate a javascript link (internal or external)
 * @param $asset
 * @param bool|true $internal
 * @return string
 */
public static function script($asset, $internal = true)
{
    if($internal){
        return '<script src="'.WEBROOT.'js/'.$asset.'.js" type="text/javascript"></script>';
    } else {
        return '<script src="'.$asset.'" type="text/javascript"></script>';
    }
}
```
# Description de la fonction
# @param + type + nom de variable
(lorsque l'on passe des paramètres à la fonction)
# @return + type
(lorsque ça retourne quelque chose)
