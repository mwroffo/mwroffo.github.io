import cgi
import cgitb; cgitb.enable() # causes detailed error reports in the web browser

form = cgi.FieldStorage() # FieldStorage can be instantiated only once
if "name" not in form or "addr" not in form:
    print("<h1>Error</h1>")
    print("Please fill incomplete fields.")
print("<p>name:", form["name"].value)
print("<p>addr:", form["addr"].value)