TEST Information

To assess how you deal with some coding challenges and to see how you get on with CodeIgniter, I'd like you to do the following :

1) Install the latest from : http://ellislab.com/codeigniter

2) Configure it to connect to a local MySQL database called "codetest", with one table in it called "messages".
    Messages should store the fields
    -  "name" varchar(50)
    -  "message" text
    -  "createtime" (what ever type you think is best for storing the date & time )

3) Create a Controller so that this URL will work : "http://local/codeigniter/index.php/mypages/  (I'm just using local as an example, it's what ever the docroot is) I'm expecting that this page will show me the new post form.

4) Create a view that is a whole HTML pages has a very simple form "name" and "message" field and text area on it - have that viewable form on /mypages/createpost/

5) That form should post to /mypages/postmessage/ and store the name & message in the database with the time it was created and show a list of times & names of the other messages.

6) This should work regardless of the domain used.

----

Things I'm looking for (in order of importance):

The main one, is how much of it you get done in 3 hours.

View - Use of the codeigniter language libraries

Controller - Any input validation you think is valid.

View - Use of jQuery to disallow posting from the form when the name field is empty or the message has less than 10 characters.



Other things you think are valid beyond the 6 points above that you think are important - even if you don't have time to code them, just list aspects you would do different, or expand on etc.


Things I don't care about :

Any kind of user handeling / authentication / etc

Super efficient SQL (we use active record) or very clever database usage - in the MVC paradim, it's Controller and View I'm focused on here.

---

Once you are done can you email me the tar.gz / zip of the application folder from the codeigniter install, and a mysqldump of the database so I can restore it here and go thought it.


-----

SQL files located in ci/codetest.sql

Test Start: 02/04/2013 2:00 PM
Test End: 02/04/2013 3:55 PM
