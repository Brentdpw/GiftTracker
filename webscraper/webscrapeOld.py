from bs4 import BeautifulSoup
import requests

search = str("basketbal")

url = 'https://www.bol.com//be/nl/s/?searchtext=' + search
r = requests.get(url)
soup = BeautifulSoup(r.text, 'html.parser')

# item = soup.find('a', {'class' :'product-item--row js_item_root '})
list = soup.find('ul', {'class': 'list-view product-list js_multiple_basket_buttons_page'})

# for item in list:

productCreator = soup.find('a', {'data-test' :'party-link'})
print("Product creator: " + productCreator.get_text())

productTitle = soup.find('a', {'class' :'product-title px_list_page_product_click'})
print("Product title: " + productTitle.get_text())

productPrice = soup.find('meta', {'itemprop': 'price'})
print("Product price: " + productPrice.get('content').replace('.', ',') + " euro")

productDelivery = soup.find('div', {'class': 'product-delivery-highlight'})
print("Product delivery: " + productDelivery.get_text())

# productSeller = soup.find('div', {'class': 'product-seller'})
# print("Product seller: " + productSeller.get_text().strip())

productButton = soup.find('a', {'class': 'product-title px_list_page_product_click'}, href = True)
orderUrl = 'https://www.bol.com/' + productButton.get('href')
print("Order url: " + orderUrl)

productPhoto = soup.find('img', {'alt': productTitle.get_text()})
print(productPhoto.get('src'))