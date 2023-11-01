# Introduction
This project is part of a set of roadmaps, where this is a small gear intended to collect a series of concepts, related to composer.

Specifically, the father of this project can be found here:
- [Father](https://github.com/alexbonavila/PhpRoadmap)

# Objective
The objective of this project is to remember and record the knowledge that the autoe has about composer, following the parent roadmap.

- Basic Commands: require, install, update, ...
- Package version control
- Packagist
- Autoload

# Instructions and Concepts
In this section, the commands and concepts used will be listed and explained in general terms.

## Basic Commands
The init command is used to start a new project using the composer setup:

`$ composer init`

The require command is used to add new dependencies to a project:

`$ composer require  <pakage>`

To add the nesbot/carbon package, use the following command:

`$ composer require nesbot/carbon`

The install command is used to install all the dependencies defined in composer.json file:

`$ composer install`

The update command updates the dependencies to their latest allowed versions within the limits are defined in composer.json:

`$ composer update`

## Package version control

Packages have been installed in composer.json, just to learn the different forms of package version control.

## Packagist

The package has been moved for better practices, composer.json has also been modified and a repository has been created in packagist.

- [Packagist Repository](https://packagist.org/packages/alexbonavila/learning-composer)

## Autoload

The section is finished using some autoload options, and completed with some basic code:

Command to try code:

`$ php public/index.php`

![Final Execution](/docs/final.png)

