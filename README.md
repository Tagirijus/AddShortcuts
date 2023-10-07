# AddShortcuts

#### _Plugin for [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software")_

A plugin, which adds certain shortcuts to _Kanboard_. Also since version 2 there is a new drop down box feature, with which you can choose predefined user presets to quickly switch to a predefined url.


Screenshots
-------------

**Example use**

![TagiShortcuts example use](../master/Screenshots/AddShortcuts_example.gif)


Features
-------------

- `?` opens updated short cut list
- `F` opens the drop down _(new since v2.0.0)_
- `Home` navigates to the home screen / dashboard
- `v+a` opens the [Big Board](https://github.com/TimoStahl/kanboard_plugin_bigboard)
- `v+t` opens the _"My tasks"_ for the actual user
- `a+a` opens the projects analytics in a modal
- `t` adds the _add spent time_ modal from [TagiAddSpentTime](https://github.com/Tagirijus/AddSpentTime)
- `v+N` where _N_ is any number between 0 and 9. You can set up custom links in the config. This way you could e.g. assign `/?controller=SearchController&action=index&search=status%3Aopen` so that the respecting shortcut will lead to the filter searching all open tasks.
- `v+v+N` is the same as above, yet with 10 additional slots to configure!
- `S` executes the converter feature of the [SubtaskHelper](https://github.com/Tagirijus/SubtaskHelper)
- `g` executes the combiner feature of the [SubtaskHelper](https://github.com/Tagirijus/SubtaskHelper)
- `E` executes the edit subtask feature of the [SubtaskHelper](https://github.com/Tagirijus/SubtaskHelper)
- `v+c` searches for tasks, which were done last week (monday to sunday)
- `v+v+c` searches for tasks, which were done this week (monday to sunday)
- `B` open the task [TaskSelector](https://github.com/Tagirijus/SubtaskHelper) dropdown


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

1. Go into Kanboards `plugins/` folder
2. `git clone https://github.com/Tagirijus/AddShortcuts`


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
