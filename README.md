# php-xdebug-phpunit-setup
A project to illustrate PHP XDebug and PHPUnit setup with Docker.

XDebug sessions will attach to any IDE/Text editor/Plugin that listens for XDebug on port 52295.



# Build and run the project
```bash
docker compose build && docker compose up -d
```

# To run tests
```bash
docker-compose exec app vendor/bin/phpunit --testdox --do-not-cache-result
```


# Access the application
Visit http://localhost:9001 to see the test application.
Navigate to the public folder of the project to edit the index.php page.



# Setup debugging
### For Visual Studio Code  
Go to the VSCode launch.json setting and paste inn the
contents of this projects launch.json. 

Install XDebug VSCode extension if you don't have it.

Then click on the debug icon, select the "Listen for Xdebug" option and click on the play button.
Set breakpoints in the index.php file and the debugger should stop at the breakpoints when reloading the page.

## For PHPStorm
Go to the PHPStorm settings, navigate to Debug.

Change the ports to: 52295

Navigate to the Servers settings in the PHPStorm settings window. 
Click the + icon to add a new server.
Name the server XDebug, change the host to localhost, and the port to 9001, and debugger to Xdebug.
Mark the Use path mappings checkbox and edit the first line, so that the 
Absolute path on the server is /app. 

Navigate to the PHPStorm Run/Debug configurations and add a new PHP Remote Debug configuration.
Name it XDebugger.
Click apply and OK.

Select the XDebugger configuration and click on the debug icon.
Set breakpoints in the index.php file and the debugger should stop at the breakpoints when reloading the page. 



## Support my work
If you found this useful, or would like to support my future creative endeavors, you can do so by going to
this link:
https://ko-fi.com/echokrist
