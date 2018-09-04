# Victor Lau
# python version 3.6.2

# CS 131A
# 9/25 - 10/1
# Hw5
# Write a program that prints out its own command line arguments in
#  reverse order from last to first.

import sys

# Initializing variables(Not necessary)
ArgList = 0
NewArg = 0
person = 0
s = 0
t = 0
NewList = 0

print("\n")
print("Write a program that prints out its own command line arguments in \n"
      "reverse order from last to first. \n")

print("Number of arguments:", len(sys.argv), "arguments.")
print("Argument List", str(sys.argv))
ArgList = str(sys.argv)
NewArg = list(reversed(ArgList.split()))
print("Argument List Reverse", NewArg)
print("\n")

print("In case of Argument List Not available!")
person = input("Enter a list of numbers or words with spaces or commas:")
print("List of Numbers:", person)
s = person  # making a copy of the list
t = s.split()  # splitting the list removing the spaces
NewList = list(reversed(t))  # reversing the list
print("Numbers Reversed", NewList)


#End of File

