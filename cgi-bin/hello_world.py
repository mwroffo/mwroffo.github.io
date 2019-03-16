#!/usr/bin/python3

import cgi
import cgitb; cgitb.enable()

form = cgi.FieldStorage()   # form is a dict of MiniFieldStorage objects.
                            # form['key'].value attribute returns str.
print("Content-type: text/html\n\n") # declare type to browser
print("<h1>Hello, {}. I am Python3. </h1>".format(form['name'].value))