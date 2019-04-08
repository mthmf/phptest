# phptest
Repository about a php test done in April 7.

## Starting

First step to test the manager task API, it's create a database called 'manager', after we need to create a table with name 'task'.

>  CREATE TABLE IF NOT EXISTS `tasks` ( <br>
>  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Task ID', <br>
>  `name` varchar(100) NOT NULL COMMENT 'Task Name', <br>
>  PRIMARY KEY (`id`) <br>
>) <br>

To test the API, was used the software Postman and for the development, XAMPP.

Here, it's some JSONs used on tests:

### Delete
>{"id":7}<br>

### Create
>{"name":"Max"}<br>

### Update 
>{"id": 2, "name": "Andrew"}<br>

### Read

It's not necessary JSON for test because it only returns the tasks in the table.

