#!/usr/bin/env python
# encoding: utf-8
from bs4 import BeautifulSoup
import requests
import json
import csv
import sys
import pandas as pd

reload(sys)
sys.setdefaultencoding('utf-8')

def passurl():

	df=pd.read_csv("toilinktitle.csv")
	length=len(df)-1
	
	#print(length)
	
	for i in range(length,-1,-1): 
		#print(df.iat[i,0])
		get_complete_content(df.iat[i,0])
		
def get_complete_content(url):
	
	print url
	page = requests.get(url)
	soup = BeautifulSoup(page.content, 'html.parser')
	
	all_news=[]
	i=0
	
	for item in soup.find_all(class_="time_cptn"):
		datedata=item.text
	
	for item in soup.find_all(class_="main-content"):
		
		'''
		print(datedata)
		print(item.h1.text)
		print("https://timesofindia.indiatimes.com/"+item.img['src'])
		string=item.arttextxml.text.encode("utf-8")
		string=string.replace("\n","")
		print(string)
		'''
		
		
		all_news.append([])
		all_news[i].append(datedata)
		all_news[i].append(item.h1.text)
		all_news[i].append("https://timesofindia.indiatimes.com/"+item.img['src'])
		string=item.arttextxml.text.encode("utf-8")
		string=string.replace("\n","")
		all_news[i].append(string)
		i=i+1
		
		
	
    #write the csv    
	with open('completetoicontent.csv', 'ab') as f:
			writer = csv.writer(f)
			writer.writerows(all_news)
			print("done")
	pass
	

	
if __name__ == '__main__':
    passurl()
	#get_complete_content("https://timesofindia.indiatimes.com/sports/cricket/ipl/top-stories/ipl-2018-dwayne-bravo-stars-as-chennai-super-kings-snatch-victory-on-return-vs-mumbai-indians/articleshow/63664049.cms")		
	