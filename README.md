# PortoQI

I am learning to use tailwin css and laravel 10 this is the result of my learning, in the future I will update PortoQi with additional features.

Table of Contents

-   [Requirment](#requirment)
-   [Running Steps](#running)
-   [contribution](#contribution)

## Development

### requirment

A few things are required to run this project on your local:

-   PHP
-   MySQL
-   Composer

### running

Please **fork** this project in your **REPOSITORY**.
Clone the project from your repo

```
git clone https://github.com/{username github teman-teman}/PortoQI.git
cd PortoQI
```

Terminal road with commands:

```
composer install && composer update
```

Next copy the file <code>.env.example</code> with the name <code>.env</code>. . Then edit some in the following file:

Database:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=xxx
DB_USERNAME=xxx
DB_PASSWORD=xxx
```

Add a script at the bottom of the file <code>.env</code>,

```
GOOGLE_CLIENT_ID="xxx"
GOOGLE_CLIENT_SECRET="xxx"
GOOGLE_CALLBACK="http://your-domain/auth/callback"
```

Name Website:

```
APP_NAME="Name Your Website"

```

Email Website:

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=youremail@gmail.com
MAIL_PASSWORD=yourpassword
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=youremail@gmail.com
MAIL_FROM_NAME="Your App Name"

```

Continue to Install Composer

```
composer install
```

Continue to Install NPM

```
npm install
```

Continue to migrate through the terminal

```
php artisan migrate
```

Continue, generate key

```
php artisan key:generate
```

Run the project with the command

```
php artisan serve
```

Please open at <code>http://127.0.0.1:8000</code>

## contribution

1. Do the development steps at the top
2. Create a branch <code>dev</code> in your local project

```
git branch dev
```

3. Make changes
4. Submit changes to your fork

```
git push origin dev
```

5. Do it <code>compare and pull requests</code> on github friends

If there are any bugs, please send them to [issue section](https://github.com/rifqimuhamad/PortoQI/issues)
