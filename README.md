# GottaLottaBooks
Books swap and connection network 
started by a group of Grand View students in Web Application Development course.

after you clone the project, run `composer install` to get all the dependent libraries. 

## Development process to make a change:
0) git pull to make sure you have the latest code
1) createa a branch for your card, e.g. `git checkout -b readme-dev-instr`  
2) do your coding (your actual work)
3) `git add -A`  and `git commit -a -m "adding instructions how to develop"` 
4) `git push origin readme-dev-instr`
5) Create a pull request 
6) Someone else reviews the request and approves it
7) You (the original developer) merge the code into the master and delete your branch.


## This is how you can configure multiple directories in your php conf:
1) add an alias, e.g. 
`Alias /glb "C:/Users/Eugen-hp/Desktop/grandview/GottaLottaBooks/public"`

2) Create a directory with the following rules:  

```
<Directory "C:/Users/Eugen-hp/Desktop/grandview/GottaLottaBooks/public">
 Options Indexes FollowSymLinks Includes ExecCGI
	Allow from all
	AllowOverride All
	Require all granted
</Directory>
```


Create a database `gottalottabooks` locally to match what's in .env file. 

To start the project, you may need to run npm install
then `npm run dev` - to compile all the scss and js into css/js
you can also run `npm run watch`


Learnign Laravel:  
go through videos in: https://laracasts.com/series/laravel-6-from-scratch


TO play around with sass install it locally
`npm install -g sass`
then you can create a .scss file and run the sass command on it to generate css. e.g. `sass app.scss app.css`
More details and info at: https://sass-lang.com/guide



### bootstrap and UI components
There seems to have been small changes between Laravel version 5.x and 6.x.
This is how to integrate Bootstrap: https://laravel.com/docs/6.x/frontend 
https://laravel.com/docs/6.x/frontend


To setup the project run:
`npm install`
`npm run dev`
`php artisan migrate`
**Note: for this project, run this command to refresh new changes to the migrations:
`php artisan migrate:refresh`

### Example: create new migration (Mai)
this example shows how to create a new table called `books`
`php artisan make:migration create_books_table`
to apply migration:
`php artisan migrate`
to update the existing table `books`
`php artisan make:migration update_books_table --table=books`
to rollback to previous version of migration
`php artisan migrate:rollback`
