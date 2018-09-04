#!/usr/bin/env python3

import cgi
import cgitb; cgitb.enable()  # for troubleshooting
import urllib.parse
import urllib.request
import urllib.error
import json
import sys
from bs4 import BeautifulSoup
import ssl

print("Content-type: text/html")
print()

print("""
<html>
<head><title>Sample CGI Script</title></head>
<body>
  <h3> Website Scraping </h3>
""")

# Grab form data
form = cgi.FieldStorage()
stem = form.getvalue("stem", "(no stems entered)")
url = form.getvalue("url", "(no url entered)")

print("""
  <!-- <p>Previous stem entered: {!s} </p> -->
  <form method="post" action="hw14.py">
    <p>Enter Stem Here and the Full URL Path to grab all <a> tag links</p>
    <input type="text" name="stem" placeholder="Stem">
    <input type="text" name="url" placeholder="URL ex. http://www.cnn.com/">
    <br>
    <input type="submit" value="Submit">
  </form>
  """.format(stem))

print("""
  <p>Previous Stem entered: {!s} </p>
  <p>Previous URL entered: {!s} </p>
""".format(stem, url))

# ----------------------Try beautiful Soup Way-------------------------------------

# Retrieve all of the anchor tags printing them out
def tagprint(tags, stem):
    for tag in tags:
        print(tag)
        print("<br>")

# Check if URL is entered
if url == "(no url entered)":
    print("Please enter a Stem and URL")

# Open URL Request
if url != "(no url entered)":
    # Ignore SSL certificate errors
    ctx = ssl.create_default_context()
    ctx.check_hostname = False
    ctx.verify_mode = ssl.CERT_NONE

    html = urllib.request.urlopen(url, context=ctx).read().decode('utf-8')
    soup = BeautifulSoup(html, 'html.parser')

    # Retrieve all of the anchor tags
    # Use beautiful soup to parse html and simplify everything
    print("Printing all 'a' tag links")
    tags = soup('a')
    tagprint(tags, stem)


print("""
<p>End of Line</p>
</body>
</html>
""")

# end of line
