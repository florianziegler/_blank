# _blank - A Starter Theme for WordPress

_blank is the starter theme I use, when creating a WordPress theme for my clients.

I have come to find that I like **adding stuff** much more than _removing_ or _deleting stuff_. So rather than trying to include every possible feature and function, I opted for making my starting point as lean as possible, leaving out all the overhead I probably wouldn't need anyway, but sill have something that gives me a head start when building a new theme.

Some background/explanation up front:

- Most of my clients use WordPress as a Content Management System - and not a "classic" blog, so some stuff is deliberately missing.
- No comments: 99% of the websites I create for my customers don't use comments. That's why there isn't anything comment related in the theme.
- get_template_part() is a great way to split things up and reuse parts of a theme, but I left it out of _blank intentionally. As I said before: I didn't include anything that I am not 100% sure I will actually need.

* * *

## So what's included?

_blank uses [Sass](http://sass-lang.com/). (As should you - in all your projects!)

_blank uses [grunt](http://gruntjs.com/) with the following pre-configured tasks:

- [grunt-contrib-uglify](https://github.com/gruntjs/grunt-contrib-uglify)
* [grunt-contrib-sass](https://github.com/gruntjs/grunt-contrib-sass)
- [grunt-autoprefixer](https://github.com/nDmitry/grunt-autoprefixer)
- [grunt-svgstore](https://github.com/FWeinb/grunt-svgstore)
- [grunt-respimg](https://github.com/nwtn/grunt-respimg)
- [grunt-rsync](https://github.com/jedrichards/grunt-rsync)
- [grunt-contrib-watch](https://github.com/gruntjs/grunt-contrib-watch)

_blank incorporates the following third party libraries:

- [normalize.css](http://necolas.github.io/normalize.css/)
- [modernizer](http://modernizr.com/)
- [carouFredSel](http://dev7studios.com/plugins/caroufredsel) (jQuery Plugin)

* * *

## Getting Started

1. Do a find and replace to change "_blank" to the name (space) of the theme you want to create. Remember to rename the theme folder using the same name.
2. Install grunt (+ grunt plugins) like this: Open a new terminal window and change to the theme's directory. Then type: <code>npm update</code> To run grunt, just type <code>grunt</code>

* * *

## FAQ:

### Why build a theme from scratch and not use a child theme / edit another theme?

As I said before: I don't like _unnecessary stuff_. Many of the themes you can buy, try very hard to give you all the features you could (n)ever need (and much more).

I like to provide my clients with a custom, hand crafted theme, that fits in one folder and has as little dependancies as possible. They get something, that is easy to maintain and extend.

For additional functionality, I create a separate plugin. (And you should, too. Always! Don't create custom post types with your theme!)

* * *

## Roadmap:

- Technologies, requirements and tastes are changing continuously and so will this starter theme. I will get rid of stuff I don't need (anymore) while adding new stuff, that I find myself using on a regular basis.

* * *

Hope you find this somewhat useful. :)

