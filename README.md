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

- **Install via the [Releases](../master/Releases/ "A copy of each release is saved in the folder") folder**
  - A copy of each release is saved in the `/Releases` folder of the repository
  - Simply extract the `.zip` file into the `/plugins` directory

**_or_**

- **Install via [GitHub](https://github.com/ "Find the correct plugin from the list of repositories")**
  - Download the `.zip` file and decompress everything under the directory `/plugins`
  - The folder inside the `.zip` must not contain any branch names and must be exact case (matching the plugin name)

_Note: The `/plugins` folder is case-sensitive._

**_or_**

- **Install using Git CLI**
  - `git clone` (_or ftp upload_) and extract the `.zip` file into this folder: `.\plugins\` (must be exact case)


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
