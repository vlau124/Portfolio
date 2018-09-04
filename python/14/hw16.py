# Victor Lau
# python version 3.6.2

# CS 131A
# 12/4 - 12/10
# Hw16

import sys
import re
import random

print("\n")

print("Write a program that picks words from the dictionary which would be \n"
    "appropriate for the game of hangman. Explain in comments why you have chosen \n"
    " the rules you did.  \n")

# User input is not needed for this assignment

'''
Rules for the game
1. Must be composed of letters
2. Must be under 
3. Minimum length 5 characters
4. All lower case
5. No punctuation

I chose these rules because to make sure that the word is a word
and that the game is long enough with 4 characters. No puncutations
to get ride of repeated words

Then I choose 20 random words because I don't know what other requirements
I should put in
'''

pattern_c = r"[A-Z,0-9,'s]"  # uppercase, numbers, 's
results_a = []
results_b = []
num_store = []

print("Here are 20 words chosen for the game Hangman \n")
print("Please wait for the words to be generated \n")

# [Reverse Search]
# Finds all words that does not contains the Letters A-F

for line in open('/users/abrick/resources/english'):
    if re.findall(pattern_c, line):
        a = "b"  # Do Nothing
    else:  # there is another character for spacing so must be 6 or greater
        if len(line) > 5:
            results_a.append(line.strip())
            # print(line.strip())

# Pick out 20 random words
for x in range(0, 20):
    num = random.randint(0, len(results_a))
    print(results_a[num])


# End of File

