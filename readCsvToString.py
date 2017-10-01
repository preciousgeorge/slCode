import csv
import sys

#initiate column postion
column = 0

#open file in universal new line mode to avoid 'new-line character seen in unquoted field' error
csv_file = open("slatecode test.csv", 'rU')
reader = csv.reader(csv_file)
for line in reader:
	sys.stdout.write(line[column] + " ")
	column += 1

print("\n")
            



