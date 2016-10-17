#PERSO-CV-Symfony

Based on Symfony 3

##Installation made

###Entities :
- Execute "cv.sql"
- Import database to symfony :

```shell
$ php bin/console doctrine:mapping:import --force AppBundle xml
$ php bin/console doctrine:mapping:convert annotation ./src
$ php bin/console doctrine:generate:entities AppBundle
```

##Run Server
### Dev mode :
```shell
$ cd my_project_name/
$ php bin/console server:run
```


