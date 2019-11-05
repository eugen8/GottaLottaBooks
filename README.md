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

Learnign Laravel:  
go through videos in: https://laracasts.com/series/laravel-6-from-scratch


