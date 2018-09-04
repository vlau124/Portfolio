# Victor Lau
# python version 3.6.2

# CS 131A
# 10/2 - 10/8
# Hw7
# Write a program that prints out the unique command line arguments
# it recieves, in alphabetical order


import sys

# Initializing variables(Not necessary)
ArgList = 0
NewArg = 0
person = 0
s = 0
t = 0
NewList = 0
List2 = 0
Alpha = 0

print("\n")
print("Write a program that prints out the unique command line arguments \n"
      "it recieves, in alphabetical order \n")

print("Number of arguments:", len(sys.argv), "arguments.")
print("Argument List", str(sys.argv))

ArgList = str(sys.argv)  # getting the list
List2 = ArgList.split()  # splitting the list
Alpha = sorted(List2, key=str.lower)  # sort in alphabetical order

print("Argument List in Alphabetical Order", Alpha)
print("\n")

print("In case of Argument List Not available!")
person = input("Enter a list of numbers or words with spaces or commas:")
print("List of Numbers:", person)

s = person  # making a copy of the list
t = s.split()  # splitting the list removing the spaces
a_order = sorted(t, key=str.lower)  # sort in alphabetical order

print("Alphabetical order", a_order)


#End of File

