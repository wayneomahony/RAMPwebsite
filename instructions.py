#!/usr/bin/env python
import requests
from bs4 import BeautifulSoup
import re
import sys
recipe = sys.argv[1]
#recipe = "beef-and-bean-enchiladas"
url = "http://www.afamilyfeast.com/" + recipe
r = requests.get(url)

soup = BeautifulSoup(r.content)

#The Instructions scrape

instructions = [i for i in soup.find_all("li", {"class": "instruction"})]
for num in range(0,len(instructions)):
    instructions[num] = re.sub(ur'\u00BD',ur'1/2',instructions[num].text)
    instructions[num] = re.sub(ur'\u00BC',ur'Quarter',instructions[num])
    instructions[num] = re.sub(ur'\u00BE',ur'Three Quarters',instructions[num])
    instructions[num] = re.sub(ur'\u2013',ur'-',instructions[num])
    instructions[num] = re.sub(ur'\u00E9',ur'e',instructions[num])
    instructions[num] = re.sub(ur'\u2019',ur"'",instructions[num])
    print (num + 1), instructions[num] + "\n"
