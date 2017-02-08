#!/usr/bin/env python
import requests
from bs4 import BeautifulSoup
import re
import sys
recipe = sys.argv[1]
#recipe = "steak-bites"
url = "http://www.afamilyfeast.com/" + recipe
r = requests.get(url)

soup = BeautifulSoup(r.content)
#The Times scrape
times = [i for i in soup.find_all("div", {"class": "ERSRHSItem"})]
for num in range(0,len(times)):
    print times[num].text
print "\n"



