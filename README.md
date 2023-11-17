# COEN60 Final Project

## Description

This is the Final Project for COEN60: Introduction to Web Technologies class.

The primary objective of the project is to enhance the user experience for
students who are engaged in their Senior Design projects at Santa Clara
University. This will be achieved by developing a web application specifically
designed for their use. The web application comprises two components:

1. A form that enables students to search for team members and advisers.
2. An archive of past projects that will aid them in generating ideas.

## Installation and Contribution

0. Install [git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
   and [php](https://www.php.net/manual/en/install.php)

1. Open your terminal app and clone this repo by running the following command

   ```bash
   git clone https://github.com/v3ceban/coen60-term-project.git
   ```

   This will download the repository to your PC as a folder. You can rename it
   and place it wherever you like. You only need to perform this step once.

2. Before writing your code, make sure to update the repo by running

   ```bash
   git pull
   ```

   This step is **crucial** as it ensures that you do not end up working on
   something that has already been done. It will download all the updates made
   by others before you, which will help to avoid overlaps.

3. After you are done making changes, run the following 3 commands:

   ```bash
   git add .
   git commit -m "Description of your changes"
   git push
   ```

   This will add and upload your changes to the repo.

4. To view the changes as you work on them you can run php development server

   ```bash
   php -S localhost:8080
   ```

   Please ensure that you run this command from the folder that contains this repository.
   If you are unsure of the current folder you are in, you can run the `pwd` command.
   To navigate to the folder containing this repository, you can run `cd ~/path/to/folder`,
   assuming you have cloned the repository somewhere in your home folder.
