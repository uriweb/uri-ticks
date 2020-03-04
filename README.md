# URI Ticks

Creates custom posts, fields, and interaction for URI Tick Encounter data.

## How do I use it?

### Set defaults

URI Ticks creates a new settings page in WP Admin:  
`Settings` --> `URI Ticks`

Set a minimum and maximum value for tick activity here.  Tick activity will be calculated on a 0-4 scale by default unless these values are specified.

### Shortcodes

#### The map shortcode

Display an interface for searching ticks by region and month using the `uri-tick-map` shortcode.

##### Attributes:

`threshold` ( _number_ ) [ _optional_ ] &mdash; Set the threshold for inactivity.  Default is `0`.

#### The tick phases shortcode

Display life phase data for a given tick species using the `uri-display-tick-phases` shortcode.

##### Attributes:

`species` ( _string_ ) [ required ] &mdash; Set the species slug.

## Plugin Details

[![GitHub release](https://img.shields.io/github/release/uriweb/uri-ticks.svg)](https://github.com/uriweb/uri-ticks/releases/latest)
[![GitHub Release Date](https://img.shields.io/github/release-date/uriweb/uri-ticks.svg)](https://github.com/uriweb/uri-ticks/releases/latest)
[![Master Build Status](https://travis-ci.com/uriweb/uri-ticks.svg?branch=master "Master build status")](https://travis-ci.com/uriweb/uri-ticks)
[![CodeFactor](https://www.codefactor.io/repository/github/uriweb/uri-ticks/badge/master)](https://www.codefactor.io/repository/github/uriweb/uri-ticks/overview/master)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/398e3ec5228642018e450b6c1c572343)](https://www.codacy.com/gh/uriweb/uri-ticks?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=uriweb/uri-ticks&amp;utm_campaign=Badge_Grade)
[![devDependencies Status](https://david-dm.org/uriweb/uri-ticks/dev-status.svg)](https://david-dm.org/uriweb/uri-ticks?type=dev)

URI Ticks  
Creates custom posts, fields, and interaction for URI Tick Encounter data

Contributors: Brandon Fuller  
Tags: plugins  
Requires at least: 4.0  
Tested up to: 5.3  
Stable tag: 1.0.0  
