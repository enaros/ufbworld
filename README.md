
BrowserQuest http://ufbteam.com fork
====================================

The test server is available on http://ufbteam.com:8050

If you are interested in the development please contact us on http://ufbteam.com


Plan:
-Customize the client [On going]
-Fix some stuff (like zoom, ...)
-Move data from Localstorage to server
-Add inventory
-Add XP
-Add Advance quest Management

BrowserQuest
============

[BrowserQuest](http://browserquest.mozilla.org/) is a HTML5/JavaScript multiplayer game experiment.

It has two major parts:

* the server side, which runs using Node.js
* the client side, which runs in your browser


How to get it going
-------------------

Getting the server up and running is pretty easy. You need to have the following installed:

* Node.js (**v0.8.x** works, v0.6.x series should work, other versions are unknown - let us know if you test them!)
* gcc-c++
* GNU make
* zlib-devel  <-- this is the Fedora/RHEL package name, others may be slightly different

Clone the git repo:

    $ git clone git://github.com/browserquest/BrowserQuest.git
    $ cd BrowserQuest

Then install the Node.js dependencies by running:

    $ npm install -d

Then start the server by running:

    $ node server/js/main.js

The BrowserQuest server should start, showing output like this:

    $ node server/js/main.js
    This server can be customized by creating a configuration file named: ./server/config_local.json
    [Thu Sep 13 2012 17:16:27 GMT-0400 (EDT)] INFO Starting BrowserQuest game server...
    [Thu Sep 13 2012 17:16:27 GMT-0400 (EDT)] INFO world1 created (capacity: 200 players).
    [Thu Sep 13 2012 17:16:27 GMT-0400 (EDT)] INFO world2 created (capacity: 200 players).
    [Thu Sep 13 2012 17:16:27 GMT-0400 (EDT)] INFO world3 created (capacity: 200 players).
    [Thu Sep 13 2012 17:16:27 GMT-0400 (EDT)] INFO world4 created (capacity: 200 players).
    [Thu Sep 13 2012 17:16:27 GMT-0400 (EDT)] INFO world5 created (capacity: 200 players).
    [Thu Sep 13 2012 17:16:27 GMT-0400 (EDT)] INFO Server (everything) is listening on port 8000

That means its working.  There should not be any warnings or errors.

Using a browser, connect to port 8000 of the server entered above.  The BrowserQuest start page should appear, and the game should work.


Browser Support
---------------

* Firefox (any recent) - Works well.
* Safari 6.x - Background music doesn't play.  Everything else works well.
* Chrome - Sounds effects don't work.
* Chromium - Varies wildly.  Some releases display using BrowserQuest's "mobile" layout, with very small screen.  Not recommended.
* Opera - Doesn't work, no WebSocket support.
* IE (any version) - Untested.


Node.js for Fedora 16 and RHEL6/CentOS
--------------------------------------

On Fedora 16 and RHEL 6/CentOS 6, the rpms here are known to work:

  http://justinclift.fedorapeople.org/nodejs/

Note, those rpms are ugly, unofficial builds by [@justinclift](https://github.com/justinclift).  You are
most welcome to improve on them. :)

Documentation
-------------

Lots of useful info on the [wiki](https://github.com/browserquest/BrowserQuest/wiki).

Mailing List
------------

The mailing list for development is at browserquest@librelist.com. ([archives](http://librelist.com/browser/browserquest/))

To subscribe, just send an email to that address.  Your initial email will be dropped, but will start the subscription.

IRC Channel
-----------

\#browserquest on irc.synirc.net

License
-------

Code is licensed under MPL 2.0. Content is licensed under CC-BY-SA 3.0.
See the LICENSE file for details.


Credits
-------

See CONTRIBUTORS.md
