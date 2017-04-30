# wordpress

This is a basic WordPress installation using v4.7, with sub-module [FoundationPress](https://github.com/olefredrik/FoundationPress) v2.9.2 as a starter template.

## Instructions for use

### 1. Clone the repository
```bash
$ cd my-working-directory
$ git clone https://github.com/ourcraig/wordpress
```

### 2. Initialise and update the sub-module
```bash
$ git submodule init
$ git submodule update
```

### 3. Check that the sub-module is using the master branch
```bash
$ cd wp-content/themes/FoundationPress
$ git checkout master
$ git pull
```

### 4. Install FoundationPress
```bash
$ npm install
```

Further instructions, tips and tricks on using FoundationPress can be found on its official GitHub repository [here](https://github.com/olefredrik/FoundationPress).