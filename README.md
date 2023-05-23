# coments
1. API using Laravel to save comments and read comments to a database table. 2. WordPress plugin to save the post comments. 3. Node app using Angular to read the comments.  

1. Setup the webapp:

git clone https://github.com/bm33m/coments.git
or download it.

2. Setup Laravel:
cd pathto/comments
Setup your local database.
Run the migrations.
```
php artisan migrate

Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (0.09 seconds)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (0.02 seconds)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (0.06 seconds)
Migrating: 2023_05_17_113338_comments
Migrated:  2023_05_17_113338_comments (0.03 seconds)

```

Start the server:
```
php artisan serve

Laravel development server started:
http://127.0.0.1:8000

```

3. Setup WordPress:
cd pathto/pgncoments
Add the pgncoments plugin in your WordPress.
```
If you have a plugin in a .zip format, you may install it by uploading it here.
```
Visit your WordPress site.

4. Setup Angular
cd pathto/commentsapp  
Install dependencies.
```
ng serve

Angular Live Development Server is listening on localhost:4200, open your browser on
http://localhost:4200/

```
Visit your Angular site.


Enjoy.
