# Docker - PHP

[Docker PHP][1] is a **Docker and PHP** repository which accompanies [a YouTube tutorial][2].

Setup
------------

* For a standard build / setup, simply run
```docker compose up -d ```
* For a development build which exposes DB ports and includes Xdebug, you can run the dev-mode shell script like so
```sh ./bin/dev-mode.sh -d```
* To run with Xdebug enabled, run 
```XDEBUG_MODE=debug sh ./bin/dev-mode.sh -d --build```


Branches
-------------

Each branch (except main, dev, and branches prefixed with 'feature') corresponds to an accompanying series lesson.   

Contributing
------------

Docker PHP is an Open Source project and contributions are welcome. The 'main' branch is read-only as this should not differ from the tutorials so please send pull requests to the develop branch.

[1]: https://github.com/GaryClarke/docker-php
[2]: https://youtu.be/qv-P_rPFw4c
