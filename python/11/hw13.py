#!/usr/local/bin/python3
import cgi
import cgitb; cgitb.enable()

print("Content-type: text/plain")
print()

print("""
<html>
<head><title>Sample CGI Script</title></head>
<body>
  <h3> Sample CGI Script </h3>
""")

form = cgi.FieldStorage()
stem = form.getvalue("message", "(no message)")

print("""
  <p>Previous stem: %s</p>
  <p>form

  <form method="post" action="hw13.py">
    <p>message: <input type="text" name="message"/></p>
  </form>

""")
# </body>
# </html>


# Check if variable/Argument is a string
def hasNumbers(inputString):
    return any(char.isdigit() for char in inputString)

# Take user argument (stem)
# ArgList = sys.argv
ArgList = stem

# set search name to null if user does not enter anything
try:
    search_name = ArgList[1]
except IndexError:
    search_name = 'null'

# Check if user entered a number
if hasNumbers(search_name):
    print("I am sorry you entered a digit!")

# If user does not enter a argument
if search_name == 'null':
    print("I am sorry you did not enter a argument! or you entered null")
else:
    # infile = open("/users/abrick/resources/english", encoding="UTF-8")
    # fhand = open('/users/abrick/resources/english')
    fhand = open("/users/abrick/resources/english", encoding="UTF-8")
    for line in fhand:
        line = line.rstrip()
        # Skip 'uninteresting lines'
        if not line.startswith(search_name):
            continue
        # Process our 'interesting' line
        print(line)
    # Print end line as a disclaimer
    print("<p>All the words that start with [", search_name, "] has been shown</p>")

print("""
</body>
</html>
""")




# End of File

