import requests
from bs4 import BeautifulSoup
# search word
search = input("What are you searching for? ")
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
print(output[0]+"\n"+output[5]+"\n"+output[10]+"\n"+output[15]+"\n"+output[20]+"\n"+output[25])
print("\n")
print(output[1]+"\n"+output[6]+"\n"+output[11]+"\n"+output[16]+"\n"+output[21]+"\n"+output[26])
print("\n")
print(output[2]+"\n"+output[7]+"\n"+output[12]+"\n"+output[17]+"\n"+output[22]+"\n"+output[27])
print("\n")
print(output[3]+"\n"+output[8]+"\n"+output[13]+"\n"+output[18]+"\n"+output[23]+"\n"+output[28])
print("\n")
print(output[4]+"\n"+output[9]+"\n"+output[14]+"\n"+output[19]+"\n"+output[24]+"\n"+output[29])
print("\n")