# Victor Lau
# python version 3.6.2

# CS 131A
# 10/23 - 10/29
# Hw10

import sys

print("\n")
print("Write a class inheriting from int which has a method returning the \n"
      " number of bits needed to express the number in binary. \n")


class NumberClass:
    def __init__(self, new_num):
        self.number = new_num

    def binary_c(self):
        r_number = format(int(self.number), 'b')
        return r_number


num1 = 1234
b_num = NumberClass(1234)
print("The Binary for ", num1, " is ", b_num.binary_c())





# End of File
