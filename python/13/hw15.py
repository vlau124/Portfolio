# Victor Lau
# python version 3.6.2

# CS 131A
# 11/27 - 12/3
# Hw15

import sys
import re

print("\n")
print("Exercise: The letters A through F are used for writing hexadecimal \n"
      "numbers, and can also spell a few English words. Write a program that \n"
      "finds the longest word in the dictionary /users/abrick/resources/english \n"
      " that is spelled using only those six letters. \n")

# User input is not needed for this assignment

pattern_a = r"[g-zG-Z]"
results_a = []

# [Reverse Search]
# Finds all words that does not contains the Letters A-F
for line in open('/users/abrick/resources/english'):
    if re.search(pattern_a, line):
        a = "b"  # Do Nothing
    else:
        results_a.append(line.strip())

# print("A:", results_a, "\n")

print("--------------------------------\n")

# Sort the words out by length and [Reverse Search] again
sortedwords = sorted(results_a, key=len)

print("The longest word that contains only the letters A-F is:")
print(sortedwords[-1], "\n")


# End of File

