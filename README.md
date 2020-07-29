**Note: As the Api wont run on the same folder as the build or the react app, please make sure you replace the correct port in the api index file**
We will maybe make an .htaccess file to allow all origins

## API

The api folder contains an api written in PHP MVC.
Make sure the DatabaseConn file informations are correct

### Start the server

```bash
php -S localhost:8080 -t api
you can change the port ex : 8082 8083 etc
```

### Quitter le serveur

```bash
CTRL C
```

## DEV

The dev folder contain the React Application source Code.
If you have no `node_module` folder, you must run `npm install` inside the dev folder

## FOR DEVELOPPERS

English only please
Name your variables in `camelCase` and they should be super intuitive
![84318532-e2520600-ab6e-11ea-95c3-744c5b1e5faa](https://user-images.githubusercontent.com/57563014/88844873-9ec95f00-d1e3-11ea-805b-82166b8a45dd.png)
![84318528-e1b96f80-ab6e-11ea-8223-2957329a8e4b](https://user-images.githubusercontent.com/57563014/88844882-a12bb900-d1e3-11ea-9188-f97434f4c0d7.png)
![84318523-e0884280-ab6e-11ea-819f-98ab1bb7fa72](https://user-images.githubusercontent.com/57563014/88844888-a38e1300-d1e3-11ea-8913-cb0ad8a4b7d5.png)
![84318482-d0706300-ab6e-11ea-8e8e-4b84ebfc39ea](https://user-images.githubusercontent.com/57563014/88844892-a5f06d00-d1e3-11ea-90a4-2877ce707162.png)

