<center><h1 style="color:MediumSeaGreen;">Notes on git and github</h1></center>
<p>Git is the most popuplar version control system in world (a version control system records the changes made to our code over time in a special database called <b>REPOSITORY</b>.With a version control system we can track our project history and work together.To install git on your machine click on this link<a href="git scm.com download/"><b>INSTALL GIT</b></a></p>
<p>Version control system can be split into two categories which are;<b>CENTRALISED VERSION CONTROL SYSTEM and DISTRIBUTED VERSION CONTROL SYSTEM</b>.</p>
<p><b>CENTRALISED VERSION CONTROL SYSTEM:</b>has the following charateristics;All team members connect to a central server to get the latest copy of the code and to share the changes with others.SUBVERSION and MICROSOFT TEAM FOUNDATION SERVER are example of centralised version control system.</p>
<p><b>DISTRIBUTED VERSION CONTROL SYSTEM:</b>every team member has a copy of the project with its history on their machine.If the central server is offline we can synchronise our work directly with others.GIT and MECURIAL are example of distributed version control system. </p>
<p>Git is used because its;Free,open source,super fast,scalable,cheap branching/merging</p>
<center><h3>BASIC STEPS IN GIT</h3></center>
<p><b>CONFIGURING GIT:</b>We have to specify a few configuring settings which are:our name,email,default editor,line ending.This configuration settings are of three levels;At the top we have SYSTEM LEVEL,the settings here is apply to all users of current computer below this level we have the GLOBAL LEVEL,the settings here apply to all repositories of the current user and below this level we have the LOCAL LEVEL,the settings here apply to the current repository.</p>
<p><b>CREATE A NEW GIT REPOSITORY:</b>This involve creating a new directory where the git repository will live and cd into it.Then initialize the new git repository</p>
<p><b>CREATE AND COMMIT A NEW FILE</b>This invole creating a new file and add some content to it.To <b>"REGISTER"</b> the file for committing we need to <b>add</b> it to git using</p>

### How to Initialize a github REPOSITORY
```bash
git init 
```

### How to check the status of a git repo
```bash
git status
```


### How to make git add files to tracked files
```bash
git add <filename> # adds a particular file 
git add .  #  adds all untracked files
```

### How to commit a file to git
```bash
git commit -m "Commit message"
```

### How to push to an online github repository
```bash 
git push -u origin <branch> # pushes to the branch whose nme is <branch>
```

### How to clone a repo
```bash
git clone <repo url>
```

###  How to pull from a remote upstream
