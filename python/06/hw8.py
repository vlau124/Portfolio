# Victor Lau
# python version 3.6.2

# CS 131A
# 10/9 - 10/15
# Hw8
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

print("Extend last week's program so that it also reports the number of \n"
    " times each argument occurred.")

'''
print("\n")
print("Write a program that prints out the unique command line arguments \n"
    "it recieves, in alphabetical order \n")

print("Number of arguments:", len(sys.argv), "arguments.")
print("Argument List", str(sys.argv))
'''
# //////////////////////////////////////////////////////////////////////////
# If someone enters a argument list.
# //////////////////////////////////////////////////////////////////////////
ArgList = str(sys.argv)  # getting the list
List2 = ArgList.split()  # splitting the list
Alpha = sorted(List2, key=str.lower)  # sort in alphabetical order

print("Argument List in Alphabetical Order", Alpha)
print("\n")

for i in range(len(Alpha)):
    if i == 0:
        print(Alpha[i], "Occurred", Alpha.count(Alpha[i]), "times")
    elif Alpha[i] != Alpha[i-1]:
        print(Alpha[i], "Occurred ", Alpha.count(Alpha[i]), "times")

#  out of loop
print("\n")
print("End of loop")


# //////////////////////////////////////////////////////////////////////////
# In case if someone doesn't enter argument list
# //////////////////////////////////////////////////////////////////////////
print("In case of Argument List Not available!")
person = input("Enter a list of numbers or words with spaces or commas:")
print("\n")
print("List of Numbers:", person)

s = person  # making a copy of the list
t = s.split()  # splitting the list removing the spaces
a_order = sorted(t, key=str.lower)  # sort in alphabetical order
print("Alphabetical order", a_order)
print("\n")
'''
for <variable> in <sequence>:
     <statements>

I put everything in alphabetical order already so no need to go through
the trouble and find the unique individuals. Instead compare the array
slot from before.

We need the first if statement because the second statement will break
if the array is all the same.
'''
for i in range(len(a_order)):
    if i == 0:
        print(a_order[i], "Occurred", a_order.count(a_order[i]), "times")
    elif a_order[i] != a_order[i-1]:
        print(a_order[i], "Occurred ", a_order.count(a_order[i]), "times")


#  out of loop
print("\n")
print("End of loop")


# End of File

