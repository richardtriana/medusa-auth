
# Medusa


A brief description of what this project does and who it's for


## Install

Clone the project

```bash
  git clone `git clone https://github.com/issalazar00/medusa`
```

Go to the project directory

```bash
  cd medusa
```

Install dependencies

```bash
  npm install
  composer install
```

Install database

```bash
php artisan migrate
```

Create users dummy

```bash
php artisan db:seed DatabaseSeeder
```

Create data dummy

```bash
php artisan db:seed TestSeeder
```

## Variables

### Environment

To run this project, you will need to add the following environment variables to your .env file

`APP_URL=http://localhost/medusa/public`

`FRONTEND_URL=http://localhost/medusa/public`

`APP_ENV=production`

`DB_CONNECTION=mysql`

`DB_HOST=127.0.0.1`

`DB_PORT=3306`

`DB_DATABASE=database`

`DB_USERNAME=username`

`DB_PASSWORD=password`

### Vite

#### Local

In the file vite.config.js you must edit:

```bash
line 8 modify the path:
const path = /path/public

line 31 uncomment the base, deletig //: 

before
// base:  path+'/build/'

after 
base:  path+'/build/'
```

#### Prod
Make sure the baseline is commented

line 31 comment the base adding //: 

```bash
// base:  path+'/build/'
```


## Producción

To deploy this project run

```bash
  npm run build
```

Delete the file hot in folder public
```bash
  hot
```


