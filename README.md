Markdownfilter
==============

A Markdown to HTML filter for Drupal 8.

The filter relies on the [Markdown-Extra](http://michelf.ca/projects/php-markdown/extra/) library from Michel Fortin.

## Installation

* Download [PHP Markdown Lib 1.3](http://michelf.ca/projects/php-markdown/), extract the library and put it in a new folder called `libraries` in the root of your Drupal 8 folder. 
* Copy or clone the module to the `modules` folder, also in the root.

This should be the resulting structure:

			├── README.txt
			├── composer.json
			├── composer.lock
			├── core
			├── example.gitignore
			├── index.php
			├── libraries/
				└── php-markdown
			├── modules
				└── derheapmarkdown
			├── profiles
			├── robots.txt
			├── sites
			├── themes
			└── web.config

Then you can activate the module and configure a new text format with the markwodn filter.
