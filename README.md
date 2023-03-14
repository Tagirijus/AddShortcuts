# TagiShortcuts

#### _Plugin for [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software")_

A plugin, which adds certain shortcuts to _Kanboard_.


Features
-------------

- `?` opens updated short cut list
- `Home` navigates to the home screen / dashboard
- `v+a` opens the [Big Board](https://github.com/TimoStahl/kanboard_plugin_bigboard)
- `v+t` opens the _"My tasks"_ for the actual user
- `a+a` opens the projects analytics in a modal


Compatibility
-------------

- Requires [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software") ≥`1.2.27`
- _(not 100% sure)_ URL rewrite must be enabled for clean URL `define('ENABLE_URL_REWRITE', true);` inside the `config.php` for most shortcuts to work properly
- Requires [Big Board](https://github.com/TimoStahl/kanboard_plugin_bigboard), if the `v+a` shortcut should be accessible and also [URLCleaner](https://github.com/aljawaid/URLCleaner) is needed then

#### Other Plugins & Action Plugins
- _No known issues_
#### Core Files & Templates
- `01` Template override
- _No database changes_


Changelog
---------

Read the full [**Changelog**](../master/changelog.md "See changes")
 

Installation
------------

1. Go into Kanboards `plugin/` folder
2. `git clone https://github.com/Tagirijus/kanbaord-TagiShortcuts`
3. Maybe rename the new created folder to `TagiShortcuts`


Translations
------------

- _Contributors welcome_
- _Starter template available_

Authors & Contributors
----------------------

- [@Tagirijus](https://github.com/Tagirijus) - Author
- _Contributors welcome_


License
-------
- This project is distributed under the [MIT License](../master/LICENSE "Read The MIT license")
