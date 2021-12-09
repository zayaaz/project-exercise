# project-exercise

Build a collaboration tool that allows a user to create a custom poll that they can share with their friends.

## Requirements
Desired features, in order of priority:
The application must consider SQL injection, XSS, and CSRF and include mechanisms to mitigate them.
A user can come to the webpage and create a new poll.
The user should be able to specify a title for the poll, a brief description, and a list of options.
After the poll is created, the user should be able to edit the poll, and modify anything they specified originally.
After the poll is created, the user should be able to share their poll with their friends. This can be as simple as generating a link that they can have other people go to to respond to the poll.

# Functional requirements
1. Poll submit page (SQL injection, XSS, and CSRF)
2. Poll edit page   (SQL injection, XSS, and CSRF)
3. Able share the link with other user, unique link
4. Friends should able to respond to the poll

# Database
1. poll table
Columns
id (decimal), title (string(200)), description (text), options (text), uniqueLink (string)
Example
1, favorite color, favorite color poll, w34wfasefs

2. poll_options table
id (decimal), option_name (string(300)), poll_id (decimal, foreign key)
1, yellow, 1

# Route
# This is for creating or editing new form
/pollCreate, GET
will display the form create options
/pollCreate POST
edit or save the form

# This is for friends
/poll, GET
will display the form
/poll POST
edit or save the form

# Unit test if there is time