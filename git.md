# Check git is installed

`git -v`

# Initialise a repository in the current directory

```
 git init
```
> Initialized empty Git repository in /home/runner/OOP/.git/
The intialised repository is always called `master`
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

# Trouble shooting

## Is remote repo connected?

`git ls-remote`

> fatal: No remote configured to list refs from

# Unrelated histories

If your remote repo falls out of sync with your local repo due to different commit histories, you can still salvage the relationship between remote and local repos.


```
To https://github.com/amindevelops/PHP_Intro.git
 ! [rejected]        master -> master (fetch first)
error: failed to push some refs to 'https://github.com/amindevelops/PHP_Intro.git'
hint: Updates were rejected because the remote contains work that you do
hint: not have locally. This is usually caused by another repository pushing
hint: to the same ref. You may want to first integrate the remote changes
hint: (e.g., 'git pull ...') before pushing again.
hint: See the 'Note about fast-forwards' in 'git push --help' for details.
 git pull
warning: no common commits
remote: Enumerating objects: 7, done.
remote: Counting objects: 100% (7/7), done.
remote: Compressing objects: 100% (7/7), done.
remote: Total 7 (delta 0), reused 7 (delta 0), pack-reused 0
Unpacking objects: 100% (7/7), done.
From https://github.com/amindevelops/PHP_Intro
 * [new branch]      master     -> origin/master
There is no tracking information for the current branch.
Please specify which branch you want to merge with.
See git-pull(1) for details.

    git pull <remote> <branch>

If you wish to set tracking information for this branch you can do so with:

    git branch --set-upstream-to=origin/<branch> master

 git pull origin master
From https://github.com/amindevelops/PHP_Intro
 * branch            master     -> FETCH_HEAD
fatal: refusing to merge unrelated histories
 git fetch
 git pull origin master
From https://github.com/amindevelops/PHP_Intro
 * branch            master     -> FETCH_HEAD
fatal: refusing to merge unrelated histories
 git pull origin master --allow-unrelated-histories
From https://github.com/amindevelops/PHP_Intro
 * branch            master     -> FETCH_HEAD
Merge made by the 'recursive' strategy.
 git pull origin master
From https://github.com/amindevelops/PHP_Intro
 * branch            master     -> FETCH_HEAD
Already up to date.
 git push -u origin master 
Username for 'https://github.com': amin@commun-it.org.uk
Password for 'https://amin@commun-it.org.uk@github.com': 
Counting objects: 9, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (9/9), done.
Writing objects: 100% (9/9), 3.05 KiB | 1.53 MiB/s, done.
Total 9 (delta 2), reused 0 (delta 0)
remote: Resolving deltas: 100% (2/2), done.
To https://github.com/amindevelops/PHP_Intro.git
   2257286..04e0101  master -> master
Branch 'master' set up to track remote branch 'master' from 'origin'.
```

