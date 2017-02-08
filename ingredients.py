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

#The Ingredients scrape
ingredients = [i for i in soup.find_all("li", {"class": "ingredient"})]
for num in range(0,len(ingredients)):
    ingredients[num] = re.sub(ur'\u00BC',ur'Quarter',ingredients[num].text)
    ingredients[num] = re.sub(ur'\u00BD',ur'Half',ingredients[num])
    ingredients[num] = re.sub(ur'\u00BE',ur'Three Quarters',ingredients[num])
    ingredients[num] = re.sub(ur'\u2013',ur'-',ingredients[num])
    print ingredients[num]

