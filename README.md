#DOCUMENTATION

In order to deploy the application you will need to install the following packages:

—Vagrant (https://www.vagrantup.com) Available for most platforms

—VirtualBox (https://www.virtualbox.org/) Available  for most platforms

Once you install VirtualBox and Vagrant, download sample and cd to the project.  

Then all you need to type is: $ vagrant up

Vagrant will download an image of Ubuntu 16.04 LTS and it will use puppet to configure NGINX, PHP, MySQL. The first time you run the command you will need to wait a bit because it will download the image. Once everything is complete you will have a fully functional VirtualBox VM running. 
Please point your browser to http://192.168.56.101/ and you should see the results of the requested query.

If you wish to stop the VM you can type: $ vagrant halt 

The names are sorted by Last name ascending then First name ascending. The display will show First Name - Last name as a Full Name. This can be altered very easily. 

Notes:

From the Database provided I have kept only the table employees since the requested query involved only that table.
Puphpet was used to create the recipe, however I manually altered the config.yaml file in order to fix some issues mainly with the deployment of NGINX

Docker was not used in this case. I wanted to deliver a Ubuntu 16.04 VM with all components installed being ready to play with no manual configuration, so Vagrant looked like a good option. 




