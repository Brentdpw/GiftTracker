from matplotlib.font_manager import json_dump
import requests
from bs4 import BeautifulSoup
import os, sys, json
# search word
search = "voetbal"
# providing url
url = 'https://www.bol.com//be/nl/s/?searchtext=' + search
  
# creating request object
req = requests.get(url)
  
# creating soup object
data = BeautifulSoup(req.text, 'html.parser')
# finding all li tags in ul and printing the text within it 
# for li in soup:
    # print(li.text, end=" ")
soup = data.find('ul', {'class': 'list-view product-list js_multiple_basket_buttons_page'})
output = []
productCreator = soup.find_all('a', {'data-test' :'party-link'})
# print("Product creator: " + productCreator.get_text())
# print(len(productCreator))
for items in productCreator[:5]:
    creator = items.get_text()
    output.append(creator)
productTitle = soup.find_all('a', {'class' :'product-title px_list_page_product_click'})
# print("Product title: " + productTitle.get_text())
for items in productTitle[:5]:
    title = items.get_text()
    output.append(title)
productPrice = soup.find_all('meta', {'itemprop': 'price'})
# print("Product price: " + productPrice.get('content').replace('.', ',') + " euro")
for items in productPrice[:5]:
    price = "€"+ items.get('content').replace('.', ',')
    output.append(price)
productDelivery = soup.find_all('div', {'class': 'product-delivery-highlight'})
# print("Product delivery: " + productDelivery.get_text())
for items in productDelivery[:5]:
    delivery = items.get_text()
    output.append(delivery)
# productSeller = soup.find('div', {'class': 'product-seller'})
# print("Product seller: " + productSeller.get_text().strip())
productButton = soup.find_all('a', {'class': 'product-title px_list_page_product_click'}, href = True)
for items in productButton[:5]:
    link = 'https://www.bol.com/' + str(items.get('href'))
    output.append(link)
# orderUrl = 'https://www.bol.com/' + productButton.get('href')
# print("Order url: " + orderUrl)
productPhoto = soup.find_all('img')
# print(productPhoto.get('src'))
for items in productPhoto[:9]:
    image = str(items.get('src'))
    if image != 'None':        
        output.append(image)

count1 = 0
count2 = 5
count3 = 10
count4 = 15
count5 = 20
count6 = 25
array =[]
for n in range(5):
    array.append(output[count1]+" "+output[count2]+" "+output[count3]+" "+output[count4]+" "+output[count5]+" "+output[count6])
    count1 += 1
    count2 += 1
    count3 += 1
    count4 += 1
    count5 += 1
    count6 += 1
print(array)

