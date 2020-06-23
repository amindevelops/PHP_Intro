# Check git is installed

`git -v`

# Initialise a repository in the current directory

```
 git init
```
> Initialized empty Git repository in /home/runner/OOP/.git/
```
 git add *
 git commit -m "PHP notes and code demo"
```
`add` means you have staged all the files for being committed.
>
>*** Please tell me who you are.
>
>Run
>
>  `git config --global user.email "you@example.com"`
>  `git config --global user.name "Your Name"`
>
>to set your account's default identity.
>Omit `--global` to set the identity only in this repository.
>
>fatal: unable to auto-detect email address (got 'runner@e7453ad24881.(none)')

```
 git config user.email amin@commun-it.org.uk
 git config user.name amindevelops
 git add *
 git commit -m "PHP notes and code demo"
```

>[master (root-commit) 2257286] PHP notes and code demo
> 5 files changed, 232 insertions(+)
> create mode 100644 howto.php
> create mode 100644 index.php
> create mode 100644 log.md
> create mode 100644 notes.md
> create mode 100644 test.php

```
 git remote add origin https://github.com/amindevelops/PHP_Intro.git
 git push -u origin master
Username for 'https://github.com': amindevelops
Password for 'https://amindevelops@github.com': 
```

>Counting objects: 7, done.
>Delta compression using up to 4 threads.
>Compressing objects: 100% (7/7), done.
>Writing objects: 100% (7/7), 2.81 KiB | 1.40 MiB/s, done.
>Total 7 (delta 0), reused 0 (delta 0)
>To https://github.com/amindevelops/PHP_Intro.git
> * [new branch]      master -> master
>Branch 'master' set up to track remote branch 'master' from 'origin'.