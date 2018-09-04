# Victor Lau
# python version 3.6.2

# CS 131A
# 11/6 - 11/12
# Hw12

import sys

print("\n")
print("Write a program that shows all words in the dictionary \n"
      " /users/abrick/resources/english that start with the first \n"
      " command line argument (the stem). \n")

# Check if variable/Argument is a string
def hasNumbers(inputString):
    return any(char.isdigit() for char in inputString)

# Take user argument
ArgList = sys.argv

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
    fhand = open('/users/abrick/resources/english')
    for line in fhand:
        line = line.rstrip()
        # Skip 'uninteresting lines'
        if not line.startswith(search_name):
            continue
        # Process our 'interesting' line
        print(line)
    # Print end line as a disclaimer
    print("All the words that start with [", search_name, "] has been shown")

# End of File

