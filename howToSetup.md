# How to set up locally with MAMP

## Step 1:
Download MAMP, it is available on Windows and Mac.
You don't need MAMP professional, normal MAMP is more than enough.

## Step 2:
Set the home directory of MAMP to the www directory (root directory of this project).
Go to MAMP -> MAMP -> Preferences -> Server -> Document Root
And set the path to the root path of this directory on your machine.

## Step 3:
Set the PHP version. Version 8.1
Go to MAMP -> MAMP -> Preferences -> PHP -> version
And select the right version.

## Step 4:
Setup composer.
In PHPStorm, go to composer.json and press the 'install' button
in the blue bar at the top of your screen.
If you don't have PHPStorm, go to the www directory in the terminal and run composer install

### That's all folks.
