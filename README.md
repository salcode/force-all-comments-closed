Force All Comments Closed
=========================

WordPress plugin to force all comments to be closed.

## Problem

When you uncheck the __Allow people to post comments on new articles__ option
on the __Discussion Settings__ (Settings > Discussion), this new setting takes
affect for all new posts, page, media items, etc. Unfortunately, it does not
impact any of these that already exist.  (e.g. If you publish a blog post, then
uncheck the __Allow people to post comments on new articles__ setting, the
blog post you already posted will still have comments enabled).

## Solution

This plugin applies a filter to always return `false` for the `comments_open()`
function.

## Credits

Sal Ferrarello  
2016 Iron Code Studio  
GPL 2.0+  
