#!/usr/bin/env python
# encoding: utf-8
from bs4 import BeautifulSoup
import requests
import tweepy 
import json
import csv
import sys

reload(sys)
sys.setdefaultencoding('utf-8')

#print(soup.prettify())
#print(list(soup.children))
#print([type(item) for item in list(soup.children)])

#temp=soup.find_all(class_="MT15 PT10 PB10")
#print(temp[0])

def passurl():
	
	for i in range(9,0,-1): #depends in the pagination count of the year  currently there are only 9 pages
		get_all_news("https://timesofindia.indiatimes.com/sports/cricket/ipl/"+str(i))
		
def get_all_news(url):
	
	print url
	page = requests.get(url)
	soup = BeautifulSoup(page.content, 'html.parser')
	
	all_news=[]
	i=0
	
	for item in soup.find_all(class_="w_img"):
		#print(item['href'])
		all_news.append([])
		all_news[i].append("https://timesofindia.indiatimes.com"+item['href'])
		all_news[i].append(item['title'])
		i=i+1	
	
    #write the csv    
	with open('toilinktitle.csv', 'ab') as f:
			writer = csv.writer(f)
			writer.writerows(all_news)
	pass
	
	
if __name__ == '__main__':
    passurl()
	#get_all_news("https://timesofindia.indiatimes.com/sports/cricket/ipl/2")		
	