# Victor Lau
# python version 3.6.2

# CS 131A
# 10/30 - 11/5
# Hw11

import sys

print("\n")

print("Extend last week's program so that it can be run from the command \n"
      "line with any number of integer arguments. Ensure that the class is \n"
      "still safe to import and that it handles any exceptions resulting \n"
      "from faulty user input. \n")

print("Write a class inheriting from int which has a method returning the \n"
      " number of bits needed to express the number in binary. \n")


# Binary Number Class
class NumberClass:
    def __init__(self, new_num):
        self.number = new_num

    def binary_c(self):
        r_number = format(int(self.number), 'b')
        return r_number


# Check if variable/Argument is a integer
def RepresentsInt(s):
    try:
        int(s)
        return True
    except ValueError:
        return False


# When someone Enters Arguments
ArgList = sys.argv

for i in range(1, len(ArgList)):
    if RepresentsInt(ArgList[i]):
        num1 = ArgList[i]
        b_num = NumberClass(num1)
        print("The Binary for ", num1, " is ", b_num.binary_c())
    else:
        print("I am sorry the Argument ", ArgList[i], " is not a integer")


# End of File

