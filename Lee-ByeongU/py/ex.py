# pip install requests
import requests

url = "http://www.dawuljuso.com/input_pro.php";
address = "";
headers = {
    'Content-Type': 'application/x-www-form-urlencoded',
    'charset': 'UTF-8'}
post = {'refine_ty': '8', 'protocol_': address}
r = requests.post(url, data=post, headers=headers)
response_text = r.text
result = response_text.split("|")

print("주소지 : " + result[0] + "\n" + "위치 : " + result[4] + "," + result[3])