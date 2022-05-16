import requests
from bs4 import BeautifulSoup
# search word
f = open("echoToPy.txt", "r")
f = f.read()
search = f

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
creatorList = []
for items in productCreator[:5]:
    creator = items.get_text()
    creatorList.append(creator)

productTitle = soup.find_all('a', {'class' :'product-title px_list_page_product_click'})
# print("Product title: " + productTitle.get_text())
titleList = []
for items in productTitle[:5]:
    title = items.get_text()
    titleList.append(title)
productPrice = soup.find_all('meta', {'itemprop': 'price'})
# print("Product price: " + productPrice.get('content').replace('.', ',') + " euro")

priceList = []
for items in productPrice[:5]:
    price = items.get('content').replace('.', ',')+" euro" # + "€"
    priceList.append(price)


productDelivery = soup.find_all('div', {'class': 'product-delivery-highlight'})
# print("Product delivery: " + productDelivery.get_text())
deliveryList = []
for items in productDelivery[:5]:
    delivery = items.get_text()
    deliveryList.append(delivery)


# productSeller = soup.find('div', {'class': 'product-seller'})
# print("Product seller: " + productSeller.get_text().strip())
productButton = soup.find_all('a', {'class': 'product-title px_list_page_product_click'}, href = True)
buttonList = []
for items in productButton[:5]:
    link = 'https://www.bol.com/' + str(items.get('href'))
    buttonList.append(link)
# orderUrl = 'https://www.bol.com/' + productButton.get('href')
# print("Order url: " + orderUrl)
productPhoto = soup.find_all('img')
# print(productPhoto.get('src'))

imgList = []
for items in productPhoto[:9]:
    image = str(items.get('src'))
    if image != 'None':        
        imgList.append(image)


for n in range(5):
    #print(creatorList[n]+" "+titleList[n]+" "+priceList[n]+" "+deliveryList[n]+" "+buttonList[n]+" "+imgList[n])
    print('<div class="product">', '<div class="verkoper">', creatorList[n] ,'</div>', '<div class="productnaam">',titleList[n] ,'</div>', '<div class="prijs">', priceList[n],'</div>', '<div class="delivery">', deliveryList[n],'</div>', '<div class="link">', buttonList[n] ,'</div>', '<img">',imgList[n] ,'</img>', '</div>')
    print()
    n+1

