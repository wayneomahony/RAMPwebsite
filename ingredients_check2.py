#!/usr/bin/env python
import requests
import MySQLdb
from bs4 import BeautifulSoup
import re
import sys
import time

# To check run time
start_time = time.time()
# The ingredients that will be passed in to the search
array = sys.argv[1]
ingredient_items = array.split(',')

#ingredient_items = ["steak"]
# Creating the correct start to the appendage
ingredients_apendage = ingredient_items[0]
# Creating the end of the appendage
for ingredient_list in range(1,len(ingredient_items)):
    ingredients_apendage = ingredients_apendage + "+" + ingredient_items[ingredient_list]
# Visting the webpage of the apendage
url = "http://www.afamilyfeast.com/?s="+ingredients_apendage
r = requests.get(url)
soup = BeautifulSoup(r.content)    
# Count variable to put each link in their own element of an array
count = 0;
# Initi
recipe = []
for i in range(20):
    recipe.append("")
    
for div in soup.findAll('div', {'class':'entry-content'}):
    a = div.findAll('a')[0]
    recipe[count] =  a.attrs['href']
    count = count + 1
log = open('links.txt', 'w')
for recipe_list in range(0,len(recipe)):
    link = recipe[recipe_list].replace("http://www.afamilyfeast.com/", "")
    link = link.replace("/", "")
    log.write(link+'\n')
    #log.write(link + '\n')

print ("---%s seconds ---" %(time.time() - start_time))
